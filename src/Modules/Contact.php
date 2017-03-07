<?php
namespace Intelisys\PhpEws\Modules;

use \Intelisys\PhpEws\Modules\Ews;
use \Intelisys\PhpEws\Request;
use \Intelisys\PhpEws\ArrayType;
use \Intelisys\PhpEws\Enumeration;
use \Intelisys\PhpEws\Type;

class Contact extends Ews
{

	# SETUP CORE PROPERTIES
	private $client;

	/**********************************************
	* __construct
	* ----------
	* PARAMETERS
	*  username: (string) Exchange username intelisys\intel_domainname
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
	* createContact
	* ----------
	* PARAMETERS
	* array 						The array parameters are as follows:
	*										firstName					(string)
	*									  lastName					(string)
	*										emailAddress			(string)
	*										physicalAddress		(array) The array contains: street,city, state, zip, region
	*										phoneNumber				(string)
	*										notes							(string) Notes is set as text, but can be changed to HTML in this class.
	*										nameTitle					(string) Dr., Mr., Mrs.
	* ----------
	* RETURN
	* array 						This is an array of Ids or error message.
	**********************************************/		
	public function create($options) {
		$default = array(
			'firstName' => '',
			'lastName' => '',
			'emailAddress' => '', 
			'physicalAddress' => array(),
			'phoneNumber' => '',
			'notes' => '',
			'nameTitle' => ''
		);
		$options = array_merge($default, $options);
		$data = array();
		// Build the request object.
		$request = new Request\CreateItemType();
		$contact = new Type\ContactItemType();
		$contact->GivenName = $options['firstName'];
		$contact->Surname = $options['lastName'];
		$contact->PhoneNumbers = new Type\PhoneNumberDictionaryType();
		$contact->EmailAddresses = new Type\EmailAddressDictionaryType();
		$contact->PhoneNumbers = new Type\PhoneNumberDictionaryType();
		$contact->ExtendedProperty = new Type\ExtendedPropertyType();

		// Set an email address.
		$email = new Type\EmailAddressDictionaryEntryType();
		$email->Key = Enumeration\EmailAddressKeyType::EMAIL_ADDRESS_1;
		$email->_ = $options['emailAddress'];
		$contact->EmailAddresses->Entry[] = $email;

		// Set an address.
		$address = new Type\PhysicalAddressDictionaryEntryType();
		$address->Key = Enumeration\PhysicalAddressKeyType::BUSINESS;
		$address->Street = $options['physicalAddress']['street']; //'742 Evergreen Terrace';
		$address->City = $options['physicalAddress']['city']; //'Springfield';
		$address->State = $options['physicalAddress']['state']; //'PA';
		$address->PostalCode = $options['physicalAddress']['zip']; //'19064';
		$address->CountryOrRegion = $options['physicalAddress']['region']; //'USA';
		$contact->PhysicalAddresses->Entry[] = $address;

		// Set a phone number.
		$phone = new Type\PhoneNumberDictionaryEntryType();
		$phone->Key = Enumeration\PhoneNumberKeyType::BUSINESS_PHONE;
		$phone->_ = $options['phoneNumber'];
		$contact->PhoneNumbers->Entry[] = $phone;

		// Set contact title as an extended property.
		$property = new Type\ExtendedPropertyType();
		$property->ExtendedFieldURI = new Type\PathToExtendedFieldType();
		$property->ExtendedFieldURI->PropertyTag = '0x3A45';
		$property->ExtendedFieldURI->PropertyType = Enumeration\MapiPropertyTypeType::STRING;
		$property->Value = $options['nameTitle']; //'Mr.';
		$contact->ExtendedProperty = $property;

		// Set the "file as" mapping to "first name last name".
		$contact->FileAsMapping = Enumeration\FileAsMappingType::FIRST_SPACE_LAST;

		// Set the contact body (this is the "Notes" field in Outlook).
		$contact->Body = new Type\BodyType();
		$contact->Body->BodyType = Enumeration\BodyTypeType::TEXT;
		$contact->Body->_ = $options['notes'];

		$request->Items->Contact[] = $contact;
		$response = $this->client->CreateItem($request);

		// Iterate over the results, printing any error messages or contact ids.
		$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data['error'] = $message;
        continue;
	    }

	    // Iterate over the created contacts.
	    foreach ($response_message->Items->Contact as $item) {
        $id = $item->ItemId->Id;
       	$data[$i]['id'] = $id;
	    }		
		} //End foreach
		return $data;
	} //End create
	
	/**********************************************
	* find (overloading find functions)
	* ----------
	* PARAMETERS
	* arg1      			Either array, string, or null
	* arg2    				Either string or null
	* ----------
	* RETURN
	* array						Returns related method
	**********************************************/		
	public function find($arg1 = null, $arg2 = null) {
		$data;
		if ($arg1 == null && $arg2 == null) {
			$data = $this->findAll();
		}
		elseif ($arg2 == null) {
			$data = $this->findByIds($arg1, $arg2);
		}
		return $data;
	}	
		
	/**********************************************
	* findAll
	* ----------
	* None (This defaults to the contact folder)
	* ----------
	* RETURN
	* array 						This is an array of Ids or error message.
	**********************************************/		
	public function findAll() {
		$data = array();
		// Build the request.
		$request = new Request\FindItemType();
		$request->ItemShape = new Type\ItemResponseShapeType();
		$request->ItemShape->BaseShape = Enumeration\DefaultShapeNamesType::ALL_PROPERTIES;		
		$request->ParentFolderIds = new ArrayType\NonEmptyArrayOfBaseFolderIdsType();
		$request->ContactsView = new Type\ContactsViewType();

		// Find contacts in the contacts folder.
		$folder_id = new Type\DistinguishedFolderIdType();
		$folder_id->Id = Enumeration\DistinguishedFolderIdNameType::CONTACTS;
		$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;
		$request->Traversal = Enumeration\ItemQueryTraversalType::SHALLOW;		

		$response = $this->client->FindItem($request);

		// Iterate over the results, printing any error messages or contact ids.
		$response_messages = $response->ResponseMessages->FindItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    //$i = 0;
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data['error'] = $message;
        continue;
	    }

	    // Iterate over the contacts that were found, printing the id of each.
	    $items = $response_message->RootFolder->Items->Contact;
	    $i = 0;
	    foreach ($items as $item) {
        $id = $item->ItemId->Id;
        $data[$i]['id'] = $id;
        $i++;
	    }
		} //end foreach			
		return $data;
	} //end findContacts		

	/**********************************************
	* findByIds
	* ----------
	* PARAMETERS
	* contacts_ids					(array) An indexed array: 1 or more: 
	* 											Formatted like: array( 'ajwelfk3#3j', 'swj3lfk#',)
	* ----------
	* RETURN
	* array 						This is an array information about the contact. It returns:
	* 									id, changeKey, name, firstName, lastName, displayName, emailAddresses, phoneNumbers, physicalAddresses, notes
	**********************************************/			
	public function findByIds($contacts_ids) {
		$data = array();
		// Build the request.
		$request = new Request\GetItemType();
		$request->ItemShape = new Type\ItemResponseShapeType();
		$request->ItemShape->BaseShape = Enumeration\DefaultShapeNamesType::ALL_PROPERTIES;
		$request->ItemIds = new ArrayType\NonEmptyArrayOfBaseItemIdsType();

		// Iterate over the contact ids, setting each one on the request.
		foreach ($contacts_ids as $contact_id) {
	    $item = new Type\ItemIdType();
	    $item->Id = $contact_id;
	    $request->ItemIds->ItemId[] = $item;
		}

		$response = $this->client->GetItem($request);

		// Iterate over the results, printing any error messages or contact names.
		$response_messages = $response->ResponseMessages->GetItemResponseMessage;
		$i = 0;
		foreach ($response_messages as $response_message) {
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data[$i]['error'] = $message;
        continue;
	    }
	    
	    // Iterate over the contacts.
	    $items = $response_message->Items->Contact;
	    foreach ($items as $item) {
        $name = $item->DisplayName;
        $data[$i]['id'] = $item->ItemId->Id;
        $data[$i]['changeKey'] = $item->ItemId->ChangeKey;
        $data[$i]['name'] = $name;
        $data[$i]['firstName'] = $item->CompleteName->FirstName;
        $data[$i]['lastName'] = $item->CompleteName->LastName;
        $data[$i]['displayname'] = $item->DisplayName;
        $data[$i]['emailAddresses'] = $item->EmailAddresses;
        $data[$i]['phoneNumbers'] = $item->PhoneNumbers;
        $data[$i]['physicalAddresses'] = $item->PhysicalAddresses; //Array of city/state/street/zip
				$data[$i]['notes'] = $item->Body->_;
	    }
      $i++;
		} //End foreach	
		return $data;
	} //End find

	/**********************************************
	* updatePhoto
	* ----------
	* PARAMETERS
	* contact_id					(string)
	* $file_path					(string)
	* ----------
	* RETURN
	* array 						This is an array of attachment ids or error message.
	**********************************************/			
	public function updatePhoto($contact_id, $file_path) {
		$data = array();
		// Open file handlers.
		$file = new \SplFileObject($file_path);
		$finfo = finfo_open();

		// Build the request.
		$request = new Request\CreateAttachmentType();
		$request->ParentItemId = new Type\ItemIdType();
		$request->ParentItemId->Id = $contact_id;
		$request->Attachments = new ArrayType\ArrayOfAttachmentsType();

		// Build the file attachment for the contact photo.
		$attachment = new Type\FileAttachmentType();
		$attachment->Content = $file->openFile()->fread($file->getSize());
		$attachment->Name = 'contact-photo.jpg';
		$attachment->ContentType = finfo_file($finfo, $file_path);
		$attachment->IsContactPhoto = true;
		$request->Attachments->FileAttachment[] = $attachment;

		$response = $this->client->CreateAttachment($request);

		// Iterate over the results, printing any error messages or the id of the new
		// attachment.
		$response_messages = $response->ResponseMessages
		    ->CreateAttachmentResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
	      $message = $response_message->ResponseCode;
				$data['error'] = $message;
	      continue;
	    }

	    // Iterate over the created attachments, printing the id of each.
	    $i = 0;
	    foreach ($response_message->Attachments->FileAttachment as $attachment) {
	      $id = $attachment->AttachmentId->Id;
				$data[$i]['id'] = $id;
				$i++;
	    }
		} //End foreach 
		return $data;
	} //End updatePhoto	
	
	/**********************************************
	* update
	* ----------
	* PARAMETERS
	* contact_updates		(array) An associative array with the following keys:
	*										id								(string)
	*										changeKey					(string)
	*										firstName					(string)
	*										lastName					(string)
	*										emailAddress			(string)
	*										street						(string) 
	*										city							(string)
	*										state							(string)
	*										zip								(string)
	*										region						(string)
	*										phoneNumber				(string)
	*										notes							(string) Notes is set as html, but can be changed to text.
	* The array will be like this: array( array('id'=> '', 'firstName' => ''), array('id'=> '', 'firstName' => ''));
	* For the possibility of more than one contact update. Also, any empty variable will set that field as empty from the contact record.
	* ----------
	* RETURN
	* array 						This is an array of contact ids or error message.
	**********************************************/			
	public function update($contact_updates) {
		$data = array();
		$request = new Request\UpdateItemType();
		$request->ConflictResolution = Enumeration\ConflictResolutionType::ALWAYS_OVERWRITE;

		// Iterate over the contacts to be updated.
		foreach ($contact_updates as $update) {
	    $change = new Type\ItemChangeType();
	    $change->ItemId = new Type\ItemIdType();
	    $change->ItemId->Id = $update['id'];
	    $change->ItemId->ChangeKey = $update['changeKey'];
	    $change->Updates = new ArrayType\NonEmptyArrayOfItemChangeDescriptionsType();

	    // If an email is set, then we need to set it. Otherwise, we need to delete
	    // the current value.
	    if (!empty($update['email'])) {
        $field = new Type\SetItemFieldType();
        $field->IndexedFieldURI = new Type\PathToIndexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:EmailAddress';
        $field->IndexedFieldURI->FieldIndex = Enumeration\EmailAddressKeyType::EMAIL_ADDRESS_1;
        $field->Contact = new Type\ContactItemType();
        $field->Contact->EmailAddresses = new Type\EmailAddressDictionaryType();

        $entry = new Type\EmailAddressDictionaryEntryType();
        $entry->_ = $update['email'];
        $entry->Key = Enumeration\EmailAddressKeyType::EMAIL_ADDRESS_1;
        $field->Contact->EmailAddresses->Entry = $entry;
        $change->Updates->SetItemField[] = $field;
	    } 
	    else {
        $field = new Type\DeleteItemFieldType();
        $field->IndexedFieldURI = new Type\PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:EmailAddress';
        $field->IndexedFieldURI->FieldIndex = Enumeration\EmailAddressKeyType::EMAIL_ADDRESS_1;
        $change->Updates->DeleteItemField[] = $field;
	    }

	    if (!empty($update['phone'])) {
        $field = new Type\SetItemFieldType();
        $field->IndexedFieldURI = new Type\PathToIndexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:PhoneNumber';
        $field->IndexedFieldURI->FieldIndex = Enumeration\PhoneNumberKeyType::BUSINESS_PHONE;
        $field->Contact = new Type\ContactItemType();
        $field->PhoneNumbers = new Type\PhoneNumberDictionaryType();

        $entry = new Type\PhoneNumberDictionaryEntryType();
        $entry->_ = $update['phone'];
        $entry->Key = Enumeration\PhoneNumberKeyType::BUSINESS_PHONE;
        $field->Contact->PhoneNumbers->Entry[] = $entry;
        $change->Updates->SetItemField[] = $field;
	    } 
	    else {
        $field = new Type\DeleteItemFieldType();
        $field->IndexedFieldURI = new Type\PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:PhoneNumber';
        $field->IndexedFieldURI->FieldIndex = PhoneNumberKeyType::BUSINESS_PHONE;
        $change->Updates->DeleteItemField[] = $field;
	    }

	    if (!empty($update['street'])) {
				$field = new Type\SetItemFieldType(); 
        $field->IndexedFieldURI = new Type\PathToIndexedFieldType();				
				$field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:Street';
				$field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact = new Type\ContactItemType();
				$field->Contact->PhysicalAddresses = new Type\PhysicalAddressDictionaryType();
				$address = new Type\PhysicalAddressDictionaryEntryType();
				$address->Key = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact->PhysicalAddresses->Entry = $address;
				$field->Contact->PhysicalAddresses->Entry->Street = $update['street'];

				$change->Updates->SetItemField[] = $field;         
	    } 
	    else {
        $field = new Type\DeleteItemFieldType();
        $field->IndexedFieldURI = new Type\PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:Street';
        $field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;
        $change->Updates->DeleteItemField[] = $field;
	    }

	    if (!empty($update['city'])) {
				$field = new Type\SetItemFieldType(); 
        $field->IndexedFieldURI = new Type\PathToIndexedFieldType();				
				$field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:City';
				$field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact = new Type\ContactItemType();
				$field->Contact->PhysicalAddresses = new Type\PhysicalAddressDictionaryType();
				$address = new Type\PhysicalAddressDictionaryEntryType();
				$address->Key = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact->PhysicalAddresses->Entry = $address;
				$field->Contact->PhysicalAddresses->Entry->City = $update['city'];

				$change->Updates->SetItemField[] = $field;         
	    } 
	    else {
        $field = new Type\DeleteItemFieldType();
        $field->IndexedFieldURI = new Type\PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:City';
        $field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;
        $change->Updates->DeleteItemField[] = $field;
	    }

	    if (!empty($update['state'])) {
				$field = new Type\SetItemFieldType(); 
        $field->IndexedFieldURI = new Type\PathToIndexedFieldType();				
				$field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:State';
				$field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact = new Type\ContactItemType();
				$field->Contact->PhysicalAddresses = new Type\PhysicalAddressDictionaryType();
				$address = new Type\PhysicalAddressDictionaryEntryType();
				$address->Key = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact->PhysicalAddresses->Entry = $address;
				$field->Contact->PhysicalAddresses->Entry->State = $update['state'];

				$change->Updates->SetItemField[] = $field;         
	    } 
	    else {
        $field = new Type\DeleteItemFieldType();
        $field->IndexedFieldURI = new Type\PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:State';
        $field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;
        $change->Updates->DeleteItemField[] = $field;
	    }

	    if (!empty($update['zip'])) {
				$field = new Type\SetItemFieldType(); 
        $field->IndexedFieldURI = new Type\PathToIndexedFieldType();				
				$field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:PostalCode';
				$field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact = new Type\ContactItemType();
				$field->Contact->PhysicalAddresses = new Type\PhysicalAddressDictionaryType();
				$address = new Type\PhysicalAddressDictionaryEntryType();
				$address->Key = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact->PhysicalAddresses->Entry = $address;
				$field->Contact->PhysicalAddresses->Entry->PostalCode = $update['zip'];

				$change->Updates->SetItemField[] = $field;         
	    } 
	    else {
        $field = new Type\DeleteItemFieldType();
        $field->IndexedFieldURI = new Type\PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:PostalCode';
        $field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;
        $change->Updates->DeleteItemField[] = $field;
	    }

	    if (!empty($update['region'])) {
				$field = new Type\SetItemFieldType(); 
        $field->IndexedFieldURI = new Type\PathToIndexedFieldType();				
				$field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:CountryOrRegion';
				$field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact = new Type\ContactItemType();
				$field->Contact->PhysicalAddresses = new Type\PhysicalAddressDictionaryType();
				$address = new Type\PhysicalAddressDictionaryEntryType();
				$address->Key = Enumeration\PhysicalAddressKeyType::BUSINESS;

				$field->Contact->PhysicalAddresses->Entry = $address;
				$field->Contact->PhysicalAddresses->Entry->CountryOrRegion = $update['region'];

				$change->Updates->SetItemField[] = $field;         
	    } 
	    else {
        $field = new Type\DeleteItemFieldType();
        $field->IndexedFieldURI = new Type\PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:PhysicalAddress:CountryOrRegion';
        $field->IndexedFieldURI->FieldIndex = Enumeration\PhysicalAddressKeyType::BUSINESS;
        $change->Updates->DeleteItemField[] = $field;
	    }
	    
	    
	    if (!empty($update['firstName'])) {
				$field = new Type\SetItemFieldType();
				$field->FieldURI = new Type\PathToUnindexedFieldType();
				$field->FieldURI->FieldURI = 'contacts:GivenName';
				$field->Contact = new Type\ContactItemType();
				$field->Contact->GivenName = $update['firstName'];
				$change->Updates->SetItemField[] = $field;       
	    } 
	    else {
				$field = new Type\SetItemFieldType();
				$field->FieldURI = new Type\PathToUnindexedFieldType();
				$field->FieldURI->FieldURI = 'contacts:GivenName';
				$field->Contact = new Type\ContactItemType();
				$field->Contact->GivenName = '';
				$change->Updates->SetItemField[] = $field; 
	    }	    

	    if (!empty($update['lastName'])) {
				$field = new Type\SetItemFieldType();
				$field->FieldURI = new Type\PathToUnindexedFieldType();
				$field->FieldURI->FieldURI = 'contacts:Surname';
				$field->Contact = new Type\ContactItemType();
				$field->Contact->Surname = $update['lastName'];
				$change->Updates->SetItemField[] = $field;       
	    } 
	    else {
				$field = new Type\SetItemFieldType();
				$field->FieldURI = new Type\PathToUnindexedFieldType();
				$field->FieldURI->FieldURI = 'contacts:Surname';
				$field->Contact = new Type\ContactItemType();
				$field->Contact->Surname = '';
				$change->Updates->SetItemField[] = $field;  
	    }	 
			
			if (!empty($update['notes'])) {
				$field = new Type\SetItemFieldType();
				$field->FieldURI = new Type\PathToUnindexedFieldType();
				$field->FieldURI->FieldURI = new Enumeration\UnindexedFieldURIType();
				$field->FieldURI->FieldURI->_ = Enumeration\UnindexedFieldURIType::ITEM_BODY;

				$field->Contact = new Type\ContactItemType();
				$field->Contact->Body = new Type\BodyType();
				$field->Contact->Body->_ = $update['notes'];
				$field->Contact->Body->BodyType = new Enumeration\BodyTypeType();
				$field->Contact->Body->BodyType->_ = Enumeration\BodyTypeType::HTML;

				$change->Updates->SetItemField[] = $field;
			}
	    else {
				$field = new Type\SetItemFieldType();
				$field->FieldURI = new Type\PathToUnindexedFieldType();
				$field->FieldURI->FieldURI = new Enumeration\UnindexedFieldURIType();
				$field->FieldURI->FieldURI->_ = Enumeration\UnindexedFieldURIType::ITEM_BODY;

				$field->Contact = new Type\ContactItemType();
				$field->Contact->Body = new Type\BodyType();
				$field->Contact->Body->_ = '';
				$field->Contact->Body->BodyType = new Type\BodyTypeType();;
				$field->Contact->Body->BodyType->_ = Enumeration\BodyTypeType::HTML;

				$change->Updates->SetItemField[] = $field;
	    }				

	    $request->ItemChanges[] = $change;
		}

		$response = $this->client->UpdateItem($request);

		// Iterate over the results, printing any error messages or ids of contacts that
		// were updated.
		$response_messages = $response->ResponseMessages->UpdateItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
				$data['error'] = $message;
        continue;
	    }

	    // Iterate over the updated contacts, printing the id of each.
	    $i = 0;
	    foreach ($response_message->Items->Contact as $item) {
        $id = $item->ItemId->Id;
				$data['id'] = $id;
	    	$i++;
	    }
		} //End foreach.
		return $data;
	}	//End update
	
	/**********************************************
	* delete
	* ----------
	* PARAMETERS
	* contact_id					(string)
	* ----------
	* RETURN
	* array 						This is an array the resopnse message.
	**********************************************/			
	public function delete($contact_id) {
		$request = new Request\DeleteItemType();
		$request->ItemIds = new ArrayType\NonEmptyArrayOfBaseItemIdsType();
		$request->ItemIds->ItemId = new Type\ItemIdType();
		$request->ItemIds->ItemId->Id = $contact_id;
		$request->DeleteType = new Enumeration\DisposalType();
		$request->DeleteType->_ = Enumeration\DisposalType::MOVE_TO_DELETED_ITEMS;

		$response = $this->client->DeleteItem($request);	
		$response_message = $response->ResponseMessages->DeleteItemResponseMessage;
		return $response_message;
	}	//End Delete
} //End Ews Class.
?>