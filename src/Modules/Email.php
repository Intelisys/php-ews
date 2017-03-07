<?php
namespace Intelisys\Modules\PhpEws;

use \Intelisys\PhpEws\Modules\Ews;
use \Intelisys\PhpEws\Request;
use \Intelisys\PhpEws\ArrayType;
use \Intelisys\PhpEws\Enumeration;
use \Intelisys\PhpEws\Type;

class Email extends Ews
{

	# SETUP CORE PROPERTIES
	private $client;

	/**********************************************
	* __construct
	* ----------
	* PARAMETERS
	*  username: (string) Exchange username 
	*  password: (string) Exchange password
	**********************************************/
	public function __construct($username, $password, $host, $version = '') {
		call_user_func_array(array($this, 'parent::__construct'), array($username, $password, $host, $version));
		$this->client = parent::getClient();
	}
	// end standard class items //


	//-----------------------------------------------------------//
	//--------------------  BEGIN METHODS -----------------------//
	//-----------------------------------------------------------//
	
	/**********************************************
	* createEmail
	* ----------
	* PARAMETERS
	* array						The array Parameters are as follows:
	*									from						(string) 		
	*									subject 				(string)
	*									toAddresses			(array) 
	*									messageBody			(string) 		
	*									draft						(boolean) 
	* ----------
	* RETURN
	* (array) 				array of id's or error of created email..
	**********************************************/		
	public function create($options) {
		$default = array(
			'from' => $from, 
			'subject' => $subject, 
			'toAddresses' => $toAddresses, 
			'messageBody' => $messageBody, 
			'draft' => true
		);
		$options = array_merge($default, $options);
		$data = array();
		// Build the request,
		$request = new Request\CreateItemType();
		$request->Items = new ArrayType\NonEmptyArrayOfAllItemsType();
		if ($options['draft'] == true) {
			// Save the message, but do not send it. (SaveOnly, SendOnly, and SendAndSaveCopy)
			//https://msdn.microsoft.com/en-us/library/office/exchangewebservices.messagedispositiontype(v=exchg.150).aspx
			$request->MessageDisposition = Enumeration\MessageDispositionType::SAVE_ONLY;		
		}
		else {
			$request->MessageDisposition = Enumeration\MessageDispositionType::SEND_ONLY;			
		}

		// Create the message.
		$message = new Type\MessageType();
		$message->Subject = $options['subject'];
		$message->ToRecipients = new ArrayType\ArrayOfRecipientsType();

		// Set the sender.
		$message->From = new Type\SingleRecipientType();
		$message->From->Mailbox = new Type\EmailAddressType();
		$message->From->Mailbox->EmailAddress = $options['from'];

		// Set the recipient.
		foreach ($options['toAddresses'] as $address) {
			$recipient = new Type\EmailAddressType();
			$recipient->Name = '';
			$recipient->EmailAddress = $address;
			$message->ToRecipients->Mailbox[] = $recipient;
		}
		// Add the message to the request.
		$request->Items->Message[] = $message;

		$response = $this->client->CreateItem($request);
		// Iterate over the results, printing any error messages or message ids.
		$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
				$data['error'] = $message;
        continue;
	    }

	    // Iterate over the created messages, printing the id for each.
	    foreach ($response_message->Items->Message as $item) {
        $id = $item->ItemId->Id;
        $data['id'] = $id;
	    }
		}
		return $data;
	} //End create
	
	/**********************************************
	* delete
	* ----------
	* PARAMETERS
	* message_id						(string) email message id 		
	* change_key 						(string) change key
	* ----------
	* RETURN
	* (string) 				success or error message (reponse code)
	**********************************************/			
	public function delete($message_id, $change_key) {
		$request = new Type\DeleteItemType();
		$request->ItemIds = new ArrayType\NonEmptyArrayOfBaseItemIdsType();
		$request->ItemIds->ItemId = new Type\ItemIdType();
		$request->ItemIds->ItemId->Id = $message_id; 
		$request->ItemIds->ItemId->Id = $message_id;
    $request->ItemIds->ItemId->ChangeKey = $change_key;		

		$request->DeleteType = new Type\DisposalType();
		$request->DeleteType->_ = Enumeration\DisposalType::MOVE_TO_DELETED_ITEMS;

		$response = $this->client->DeleteItem($request);	
		$response_message = $response->ResponseMessages->DeleteItemResponseMessage;
    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
      $message = $response_message->ResponseCode;
			$data['error'] = $message;
    }
  	
		$data['message'] = $response_message;
		return $response;
	} //End delete
	
	/**********************************************
	* find (overloading public function)
	* ----------
	* PARAMETERS
	* arg1      			Either array or string		
	* arg2    				Either string or null
	* ----------
	* RETURN
	* array						Returns related method
	**********************************************/		
	public function find($arg1, $arg2 = null) {
		$data;
		if ($arg2 == null) {
			$data = $this->findByIds($arg1);
		}
		else {
			$data = $this->findByDate($arg1, $arg2);
		}
		return $data;
	}
	
	/**********************************************
	* find
	* ----------
	* PARAMETERS
	* start_date			(string a date to be parsed in function) 		
	* end_date 				(string a date to be parsed in function) 
	* ----------
	* RETURN
	* (array) 				array of ids with the related email information
	* 								(id, subject, from, ReplyTo, ReceivedBy, dateSent
	*									dateCreated, ccAddresses, toAddresses, sender)	
	**********************************************/		
	private function findByDate($start_date, $end_date) {
		$data = array();
		$start_date = new \DateTime($start_date);
		$end_date = new \DateTime($end_date);
		$timezone = 'America/Los_Angeles';
		date_default_timezone_set($timezone);		
		$this->client->setTimezone('Pacific Standard Time');

		$request = new Request\FindItemType();
		$request->ParentFolderIds = new ArrayType\NonEmptyArrayOfBaseFolderIdsType();

		// Build the start date restriction.
		$greater_than = new Type\IsGreaterThanOrEqualToType();
		$greater_than->FieldURI = new Type\PathToUnindexedFieldType();
		$greater_than->FieldURI->FieldURI = Enumeration\UnindexedFieldURIType::ITEM_DATE_TIME_RECEIVED;
		$greater_than->FieldURIOrConstant = new Type\FieldURIOrConstantType();
		$greater_than->FieldURIOrConstant->Constant = new Type\ConstantValueType();
		$greater_than->FieldURIOrConstant->Constant->Value = $start_date->format('c');

		// Build the end date restriction;
		$less_than = new Type\IsLessThanOrEqualToType();
		$less_than->FieldURI = new Type\PathToUnindexedFieldType();
		$less_than->FieldURI->FieldURI = Enumeration\UnindexedFieldURIType::ITEM_DATE_TIME_RECEIVED;
		$less_than->FieldURIOrConstant = new Type\FieldURIOrConstantType();
		$less_than->FieldURIOrConstant->Constant = new Type\ConstantValueType();
		$less_than->FieldURIOrConstant->Constant->Value = $end_date->format('c');

		// Build the restriction.
		$request->Restriction = new Type\RestrictionType();
		$request->Restriction->And = new Type\AndType();
		$request->Restriction->And->IsGreaterThanOrEqualTo = $greater_than;
		$request->Restriction->And->IsLessThanOrEqualTo = $less_than;

		// Return all event properties.
		$request->ItemShape = new Type\ItemResponseShapeType();
		$request->ItemShape->BaseShape = Enumeration\DefaultShapeNamesType::ALL_PROPERTIES;

		// Search in the user's inbox.
		$folder_id = new Type\DistinguishedFolderIdType();
		$folder_id->Id = Enumeration\DistinguishedFolderIdNameType::INBOX;
		$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;
		$request->Traversal = Enumeration\ItemQueryTraversalType::SHALLOW;
		$response = $this->client->FindItem($request);
		
		// Iterate over the results, printing any error messages or message subjects.
		$response_messages = $response->ResponseMessages->FindItemResponseMessage;
		//echo 'response: '.print_r($response_messages);
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
       	$data['error'] = $message;
       	// fwrite(STDERR, "Failed to search for events with \"$message\"\n");
        continue;
	    }

	    // Iterate over the messages that were found, printing the subject for each.
	    //https://msdn.microsoft.com/en-us/library/office/dn600367(v=exchg.150).aspx
	    $items = $response_message->RootFolder->Items->Message;
	    $i = 0;
	    foreach ($items as $item) {
        $subject = $item->Subject;
        $data[$i]['subject'] = $subject;
        $data[$i]['id'] = $item->ItemId->Id;   
        $data[$i]['from'] = $item->Sender->Name;
        $data[$i]['ReplyTo'] = $item->ReplyTo;                   
        $data[$i]['ReceivedBy'] = $item->ReceivedBy;                            
        $data[$i]['dateSent'] = $item->DateTimeSent;
        $data[$i]['dateCreated'] = $item->DateTimeCreated;
        $data[$i]['ccAddresses'] = $item->DisplayCc;
        $data[$i]['toAddresses'] = $item->DisplayTo;
        $data[$i]['sender'] = $item->Sender->Mailbox->Name;       
				$i++;
	    }

		}
		return $data;
	}	//End find
	
	/**********************************************
	* find
	* ----------
	* PARAMETERS
	* email_ids 			(array of email ids to find) 		
	* ----------
	* RETURN
	* (array) 				array of id and change key with the related email information
	* 								(id, changeKey, subject, from, body, ReplyTo, ReceivedBy, dateSent
	*									dateCreated, ccAddresses, toAddresses, sender)
	**********************************************/			
	private function findById($email_ids) {
		$data = array();

		$request = new Request\GetItemType();
		$request->ItemShape = new Type\ItemResponseShapeType();
		$request->ItemShape->BaseShape = Enumeration\DefaultShapeNamesType::ALL_PROPERTIES;
		$request->ItemShape->AdditionalProperties = new ArrayType\NonEmptyArrayOfPathsToElementType();
		$request->ItemIds = new ArrayType\NonEmptyArrayOfBaseItemIdsType();

		// Add an extended property to the request. We'll use the replied on property
		// for this example.
		$property = new Type\PathToExtendedFieldType();
		$property->PropertyTag = '0x1081';
		$property->PropertyType = Enumeration\MapiPropertyTypeType::INTEGER;
		$request->ItemShape->AdditionalProperties->ExtendedFieldURI[] = $property;

		// Iterate over the message ids, setting each one on the request.
		foreach ($email_ids as $email_id) {
	    $item = new Type\ItemIdType();
	    $item->Id = $email_id;
	    $request->ItemIds->ItemId[] = $item;
		}

		$response = $this->client->GetItem($request);

		// Iterate over the results, printing any error messages or message subjects.
		$response_messages = $response->ResponseMessages->GetItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        //fwrite(STDERR, "Failed to get message with \"$message\"\n");
        $data['error'] = $message;
        continue;
	    }

	    // Iterate over the messages, printing the subject for each.
	    foreach ($response_message->Items->Message as $item) {
        $subject = $item->Subject;
        $data[$i]['subject'] = $subject;
        $data[$i]['id'] = $item->ItemId->Id;   
        $data[$i]['changeKey'] = $item->ItemId->ChangeKey;
        $data[$i]['from'] = $item->Sender->Name;
        $data[$i]['body'] = $item->Body->_;
        $data[$i]['ReplyTo'] = $item->ReplyTo;                   
        $data[$i]['ReceivedBy'] = $item->ReceivedBy;                            
        $data[$i]['dateSent'] = $item->DateTimeSent;
        $data[$i]['dateCreated'] = $item->DateTimeCreated;
        $data[$i]['ccAddresses'] = $item->DisplayCc;
        $data[$i]['toAddresses'] = $item->DisplayTo;
        $data[$i]['sender'] = $item->Sender->Mailbox->Name;         
        //fwrite(STDOUT, "Retrieved message $subject\n");
	    }	
	  }
	  return $data;
	} //End find

	/**********************************************
	* findAttachment
	* ----------
	* PARAMETERS
	* message_id			(string) email message id 		
	* ----------
	* RETURN
	* (array) 				array of paths to attachments	
	**********************************************/		
	public function findAttachment($message_id) {
		$data = array();
		$file_destination = sys_get_temp_dir() . '/attachments';

		// Make sure the destination directory exists and is writeable.
		if (!file_exists($file_destination)) {
		    mkdir($file_destination, 0777, true);
		}

		if (!is_writable($file_destination)) {
		    throw new Exception("Destination $file_destination is not writable.");
		}

		// Build the get item request.
		$request = new Request\GetItemType();
		$request->ItemShape = new Type\ItemResponseShapeType();
		$request->ItemShape->BaseShape = Enumeration\DefaultShapeNamesType::ALL_PROPERTIES;
		$request->ItemIds = new ArrayType\NonEmptyArrayOfBaseItemIdsType();

		// Add the message id to the request.
		$item = new ItemIdType();
		$item->Id = $message_id;
		$request->ItemIds->ItemId[] = $item;

		$response = $this->client->GetItem($request);

		// Iterate over the results, printing any error messages or receiving
		// attachments.
		$response_messages = $response->ResponseMessages->GetItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Failed to get message with \"$message\"\n");
        continue;
	    }

	    // Iterate over the messages, getting the attachments for each.
	    $attachments = array();
	    foreach ($response_message->Items->Message as $item) {
        // If there are no attachments for the item, move on to the next
        // message.
        if (empty($item->Attachments)) {
            continue;
        }

        // Iterate over the attachments for the message.
        foreach ($item->Attachments->FileAttachment as $attachment) {
            $attachments[] = $attachment->AttachmentId->Id;
        }
	    }

	    // Build the request to get the attachments.
	    $request = new Request\GetAttachmentType();
	    $request->AttachmentIds = new ArrayType\NonEmptyArrayOfRequestAttachmentIdsType();

	    // Iterate over the attachments for the message.
	    foreach ($attachments as $attachment_id) {
        $id = new Type\RequestAttachmentIdType();
        $id->Id = $attachment_id;
        $request->AttachmentIds->AttachmentId[] = $id;
	    }

	    $response = $this->client->GetAttachment($request);

	    // Iterate over the response messages, printing any error messages or
	    // saving the attachments.
	    $attachment_response_messages = $response->ResponseMessages
	        ->GetAttachmentResponseMessage;
	    foreach ($attachment_response_messages as $attachment_response_message) {
        // Make sure the request succeeded.
        if ($attachment_response_message->ResponseClass
          != Enumeration\ResponseClassType::SUCCESS) {
          $message = $attachment_response_message->ResponseCode;
          $data['error'] = $message;
          //fwrite(STDERR, "Failed to get attachment with \"$message\"\n");
          continue;
        }

        // Iterate over the file attachments, saving each one.
				$i = 0;
        $attachments = $attachment_response_message->Attachments
            ->FileAttachment;
        foreach ($attachments as $attachment) {
          $path = "$file_destination/" . $attachment->Name;
          file_put_contents($path, $attachment->Content);
          $data[$i]['attachment'] = $path;
        	$i++;
        }  
	    }
		}
	  return $data;		
	}	//End of findAttachment

	/**********************************************
	* reply
	* ----------
	* PARAMETERS
	* id  						(string) the message id
	* change_key			(string) the change key
	* message_body		(string) message body
	* replyType				(string) ('all' will reply to all otherwise just the single sender)	
	* ----------
	* RETURN
	* (array) 				array of id replied to.
	**********************************************/		
	public function reply($id, $change_key, $message_body, $replyType = 'default') {
		$data = array();
		// Build the request.
		$request = new Request\CreateItemType();
		$request->Items = new ArrayType\NonEmptyArrayOfAllItemsType();
		$request->MessageDisposition = Enumeration\MessageDispositionType::SEND_AND_SAVE_COPY;
		
		if ($replyType == 'all') {
			// Add the reply to the request.
			$reply = new Type\ReplyAllToItemType();
			$reply->ReferenceItemId = new Type\ItemIdType();
			$reply->ReferenceItemId->Id = $id;
			$reply->ReferenceItemId->ChangeKey = $change_key;
			$reply->NewBodyContent = new Type\BodyType();
			$reply->NewBodyContent->BodyType = Enumeration\BodyTypeType::TEXT;
			$reply->NewBodyContent->_ =  $message_body;
			$request->Items->ReplyAllToItem[] = $reply;		
		} 
		else {
			// Add the reply to the request.
			$reply = new Type\ReplyAllToItemType();
			$reply->ReferenceItemId = new Type\ItemIdType();
			$reply->ReferenceItemId->Id = $id;
			$reply->ReferenceItemId->ChangeKey = $change_key;
			$reply->NewBodyContent = new Type\BodyType();
			$reply->NewBodyContent->BodyType = Enumeration\BodyTypeType::TEXT;
			$reply->NewBodyContent->_ =  $message_body;
			$request->Items->ReplyToItem[] = $reply;		
		}


		$response = $this->client->CreateItem($request);

		// Iterate over the results, printing any error messages or reply message ids.
		$response_messages = $response->ResponseMessages->CreateItemResponseMessage;

		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data['error'] = $message;
        continue;
	    }
			
			$i = 0;
			foreach ($response_message->Items->Message as $item) {
				$data[$i]['id'] = $item->ItemId->Id;		
	    	$i++;
			}
		}	
		return $data;
	} //End reply
	
} //End Ews Class.
?>