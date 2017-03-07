<?php
namespace Intelisys\PhpEws\Modules;

use \Intelisys\PhpEws\Modules\Ews;
use \Intelisys\PhpEws\Request;
use \Intelisys\PhpEws\ArrayType;
use \Intelisys\PhpEws\Enumeration;
use \Intelisys\PhpEws\Type;

class Calendar extends Ews
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
	* create
	* ----------
	* PARAMETERS
	*  start					(string) formatted as date to be parsed 
	*  end						(string) formatted as date to be parsed 
	*  options 				(array) Array of options for the event details
	* ----------
	* RETURN
	* (id) 						(int) id created.	
	**********************************************/
	public function create($start, $end, $options = array()) {
		//Return Data w/ errormessage or IDs of events created.
		$data = array();
		$defaults = array(
			'start' => '',
			'end' => '',
			'guests' => array(),
			'location' => '',
			'subject' => '',
			'body' => '',
			'timezone' => 'America/Los_Angeles'
		);
		$options = array_merge($defaults, $options);		
		// Replace this with your desired start/end times and guests.
		date_default_timezone_set($options['timezone']);
		$start = new \DateTime($start);
		$end = new \DateTime($end);

		// Build the request,
		$request = new Request\CreateItemType();
		$request->SendMeetingInvitations = Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_ONLY_TO_ALL;
		$request->Items = new ArrayType\NonEmptyArrayOfAllItemsType();

		// Build the event to be added.
		$event = new Type\CalendarItemType();
		$event->Start = $start->format('c');
		$event->End = $end->format('c');
		$event->Subject = $options['subject'];
		$event->Location = $options['location'];
		//$event->Rooms = 'zgreenroom@intelisys.com';

		// Set the event body.
		$event->Body = new Type\BodyType();
		$event->Body->_ = $options['body'];
		$event->Body->BodyType = Enumeration\BodyTypeType::TEXT;

		// Iterate over the guests, adding each as an attendee to the request.
		if (!empty($options['guests'])) {
			$event->RequiredAttendees = new ArrayType\NonEmptyArrayOfAttendeesType();
			foreach ($options['guests'] as $guest) {
		    $attendee = new Type\AttendeeType();
		    $attendee->Mailbox = new Type\EmailAddressType();
		    $attendee->Mailbox->EmailAddress = $guest;
		    //$attendee->Mailbox->Name = $guest['name'];
		    $attendee->Mailbox->RoutingType = Enumeration\RoutingType::SMTP;
		    $event->RequiredAttendees->Attendee[] = $attendee;
			}		
		}

		// Add the event to the request. You could add multiple events to create more
		// than one in a single request.
		$request->Items->CalendarItem[] = $event;

		$response = $this->client->CreateItem($request);

		// Iterate over the results, printing any error messages or event ids.
		$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $data['error'] = $response_message->ResponseCode;
        continue;
	    }

	    // Iterate over the created events, printing the id for each.
	    foreach ($response_message->Items->CalendarItem as $item) {
        $id = $item->ItemId->Id;
        $data['id'] = $id;
	    }
		}
		
		return $data;
	} //End create

	/**********************************************
	* findLocations This method is not producing results.
	* ----------
	* PARAMETERS
  * None
	* ----------
	* RETURN
	* (array) array of rooms
	**********************************************/	
	public function findLocations() {
		//I have found that we do not have room lists defined, and it will not provide 
		//Rooms with this call right now. On going disucssion.
		$request = new Request\GetRoomListsType();
		$response1 = $this->client->GetRoomLists($request);
		//$response2 = $this->client->GetRoomListsResponse($request);
		$request->RoomList = new Request\GetRoomsType();
		//$request->RoomList->EmailAddress = $response1->RoomLists->Address->EmailAddress;

		//$request->RoomList->Name = $response1->RoomLists->Address->Name;   //not working!
		

		$response = $this->client->GetRooms($request); 
		return $response;		
	} //End findLocations

	/**********************************************
	* cancel
	* ----------
	* PARAMETERS
	*  event_id					(string) event id (required) 
	*  change_key				(string) event id (required)
	
	* ----------
	* RETURN
	* (array) 				Array of error messages, and data['success'] as true or false.	
	**********************************************/		
	public function cancel($event_id, $change_key) {
		$data = array();
		$data['success'] = true;
		$request = new Request\CreateItemType();
		$request->MessageDisposition = Enumeration\MessageDispositionType::SEND_AND_SAVE_COPY;
		$request->Items = new ArrayType\NonEmptyArrayOfAllItemsType();

		$cancellation = new Type\CancelCalendarItemType();
		$cancellation->ReferenceItemId = new Type\ItemIdType();
		$cancellation->ReferenceItemId->Id = $event_id;
		$cancellation->ReferenceItemId->ChangeKey = $change_key;
		$request->Items->CancelCalendarItem[] = $cancellation;

		$response = $this->client->CreateItem($request);

		// Iterate over the results, printing any error messages.
		$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data['error'] = $message;
        //fwrite(STDERR, "Cancellation failed to create with \"$message\"\n");
        continue;
	    }
	    $data['success'] = false;
	    $data['message'] = $response_message; 
		}	
		return $data;
	} //end Cancel 
	
	/**********************************************
	* find (overloading find functions)
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
	* findByDate
	* ----------
	* PARAMETERS
	*  start					(string) formatted as date to be parsed 
	*  end						(string) formatted as date to be parsed 
	* ----------
	* RETURN
	* (array) 				Array of index and formatted response.	
	**********************************************/	
	private function findByDate($start_date, $end_date) {
		$data = array();	
		$timezone = 'America/Los_Angeles';
		date_default_timezone_set($timezone);		
		$this->client->setTimezone('Pacific Standard Time');
		$start_date = new \DateTime($start_date);
		$end_date = new \DateTime($end_date);
		
		$request = new Request\FindItemType();
		$request->ParentFolderIds = new ArrayType\NonEmptyArrayOfBaseFolderIdsType();

		// Return all event properties.
		$request->ItemShape = new Type\ItemResponseShapeType();
		$request->ItemShape->BaseShape = Enumeration\DefaultShapeNamesType::ALL_PROPERTIES;

		$folder_id = new Type\DistinguishedFolderIdType();
		$folder_id->Id = Enumeration\DistinguishedFolderIdNameType::CALENDAR;
		$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;

		$request->CalendarView = new Type\CalendarViewType();
		$request->CalendarView->StartDate = $start_date->format('c');
		$request->CalendarView->EndDate = $end_date->format('c');
		$request->Traversal = Enumeration\ItemQueryTraversalType::SHALLOW;
		
		$response = $this->client->FindItem($request);

		// Iterate over the results, printing any error messages or event ids.
		$response_messages = $response->ResponseMessages->FindItemResponseMessage;
		//return $response_messages;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data['error'] = $message;
        //fwrite(STDERR, "Failed to search for events with \"$message\"\n");
        continue;
	    }

	    // Iterate over the events that were found, printing some data for each.
	    //https://msdn.microsoft.com/en-us/library/office/aa564765(v=exchg.150).aspx (attributes of Calendar Item)
	    $items = $response_message->RootFolder->Items->CalendarItem;
	    $i = 0;
	    foreach ($items as $item) {
        $id = $item->ItemId->Id;
        $changeKey = $item->ItemId->ChangeKey;
        $start = new \DateTime($item->Start);
        $end = new \DateTime($item->End);
        $subject = $item->Subject;
        //$body = $item->Body; //not possible a seperate call must be made with the ID
        $data[$i]['id'] = $id;
        $data[$i]['changeKey'] = $changeKey;
        $data[$i]['subject'] = $subject;  
        $data[$i]['location'] = $item->Location;
        $data[$i]['organizer'] = $item->Organizer->Mailbox->Name;
        $data[$i]['inviteesTo'] = $item->DisplayTo;
        $data[$i]['inviteesCC'] = $item->DisplayCc;    
        $data[$i]['start'] = $start->format('l, F jS, Y g:ia');
        $data[$i]['end'] = $end->format('l, F jS, Y g:ia');
        $i++;
        //fwrite(STDOUT, $output);
	    }	
		}
		return $data;
	} //End find	
	
	/**********************************************
	* findById
	* ----------
	* PARAMETERS
	*  event_ids					(array) event ids (required) 
	* ----------
	* RETURN
	* (array) 				Array of error messages, and/or array of event information.	
	**********************************************/		
	public function findByIds($event_ids) {
		$data = array();
		// Replace with the timezone you would like the event times displayed in or
		// clear for UTC.
		$timezone = 'Pacific Standard Time';
		$this->client->setTimezone($timezone);

		// Build the request.
		$request = new Request\GetItemType();
		$request->ItemShape = new Type\ItemResponseShapeType();
		$request->ItemShape->BaseShape = Enumeration\DefaultShapeNamesType::ALL_PROPERTIES;
		$request->ItemIds = new ArrayType\NonEmptyArrayOfBaseItemIdsType();

		// We want to get the online meeting link in the response. Note that if this
		// property is not set on the event, it will not be included in the response.
		$property = new Type\PathToExtendedFieldType();
		$property->PropertyName = 'OnlineMeetingExternalLink';
		$property->PropertyType = Enumeration\MapiPropertyTypeType::STRING;
		$property->DistinguishedPropertySetId = Enumeration\DistinguishedPropertySetType::PUBLIC_STRINGS;

		$additional_properties = new ArrayType\NonEmptyArrayOfPathsToElementType();
		$additional_properties->ExtendedFieldURI[] = $property;
		$request->ItemShape->AdditionalProperties = $additional_properties;

		// Iterate over the event ids, setting each one on the request.
		foreach ($event_ids as $event_id) {
	    $item = new Type\ItemIdType();
	    $item->Id = $event_id;
	    $request->ItemIds->ItemId[] = $item;
		}

		$response = $this->client->GetItem($request);

		// Iterate over the results, printing any error messages or event names.
		$response_messages = $response->ResponseMessages->GetItemResponseMessage;
		$i = 0;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != Enumeration\ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data[$i]['error'] = $message;
        //echo 'error: '.$message;
        //fwrite(STDERR, "Failed to get event with \"$message\"\n");
        continue;
	    }

	    // Iterate over the events, printing the title for each.
	    foreach ($response_message->Items->CalendarItem as $item) {
	      $subject = $item->Subject;
        $start = new \DateTime($item->Start);
        $end = new \DateTime($item->End);		        
        $data[$i]['data'] = $subject;
				$data[$i]['id'] = $item->ItemId->Id;
        $data[$i]['changeKey'] = $item->ItemId->ChangeKey;
        $data[$i]['subject'] = $subject;  
        $data[$i]['location'] = $item->Location;
        $data[$i]['organizer'] = $item->Organizer->Mailbox->Name;
        $data[$i]['guests'] = $item->Resources->Attendee;
        $data[$i]['inviteesTo'] = $item->DisplayTo;
        $data[$i]['inviteesCC'] = $item->DisplayCc;
        $data[$i]['requiredAttendees'] = $item->RequiredAttendees->Attendee;
        $data[$i]['optionalAttendees'] = $item->OptionalAttendees->Attendee;
        $data[$i]['body'] = $item->Body; 
        $data[$i]['start'] = $start->format('l, F jS, Y g:ia');
        $data[$i]['end'] = $end->format('l, F jS, Y g:ia');
        //echo 'data: '.$subject;		        
        //fwrite(STDOUT, "Retrieved event $subject\n");
	    }
	    $i++;
		}	//End foreach
		return $data;
	}	//End findById
	
	/**********************************************
	* update
	* ----------
	* PARAMETERS
	* id							(string) 		calendar id
	* changeKey				(string)		calendar changekey
	* options					(array) 		options to update event
	* ----------
	* RETURN
	* (array) 				Array of error messages, and/or array of id's updated. 
	* 								In this case the method updates one event but could 
	*									update multiple events at one time.
	**********************************************/			
	public function update($id, $change_key, $options = array()) {
		$data = array();
		$defaults = array(
			'guests' => array(),
			'location' => '',
			'subject' => '',
			'message' => '',
			'timezone' => 'America/Los_Angeles',
			'start' => '',
			'end' => ''
		);
		$options = array_merge($defaults, $options);			
				
		//We could just do a multiple dim array of these and push out at once the way EWS works:
		$event_updates = array_merge(['id' => $id, 'changeKey' => $change_key], $options);
		$event_updates = array($event_updates);
		//print_r($event_updates);
		// Build the request.
		$request = new Request\UpdateItemType();
		$request->ConflictResolution = ConflictResolutionType::ALWAYS_OVERWRITE;
		$request->SendMeetingInvitationsOrCancellations = CalendarItemUpdateOperationType::SEND_TO_ALL_AND_SAVE_COPY;

		// Iterate over the updated to be applied, adding each to the request.
		foreach ($event_updates as $update) {
	    // Build out item change request.
	    $change = new Type\ItemChangeType();
	    $change->ItemId = new Type\ItemIdType();
	    $change->ItemId->Id = $update['id'];
	    $change->ItemId->ChangeKey = $update['changeKey']; 
	    
	    $change->Updates = new ArrayType\NonEmptyArrayOfItemChangeDescriptionsType();

	    // Set the updated start time.
	    date_default_timezone_set($update['timezone']);
	    $start = new \DateTime($update['start']);
	    $field = new Type\SetItemFieldType();
	    $field->FieldURI = new Type\PathToUnindexedFieldType();
	    $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_START;
	    $field->CalendarItem = new Type\CalendarItemType();
	    $field->CalendarItem->Start = $start->format('c');		    
	    $change->Updates->SetItemField[] = $field;

	    // Set the updated end time.
	    $end = new \DateTime($update['end']);		    
	    $field = new Type\SetItemFieldType();
	    $field->FieldURI = new Type\PathToUnindexedFieldType();
	    $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_END;
	    $field->CalendarItem = new Type\CalendarItemType();
	    $field->CalendarItem->End = $end->format('c');		    		    
	    $change->Updates->SetItemField[] = $field;
			
			// Set the subject:
			$field = new Type\SetItemFieldType();
	    $field->FieldURI->FieldURI = UnindexedFieldURIType::ITEM_SUBJECT;
			$field->CalendarItem = new Type\CalendarItemType();
			$field->CalendarItem->Subject = $update['subject'];
			$change->Updates->SetItemField[] = $field;			

			// Set the location:
			$field = new Type\SetItemFieldType();
	    $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_LOCATION;
			$field->CalendarItem = new Type\CalendarItemType();
			$field->CalendarItem->Location = $update['location'];
			$change->Updates->SetItemField[] = $field;

			// Set the message body:
			$field = new Type\SetItemFieldType();
	    $field->FieldURI->FieldURI = UnindexedFieldURIType::ITEM_BODY;
			$field->CalendarItem = new Type\CalendarItemType();
			$field->CalendarItem->Body->BodyType = 'Text';
			$field->CalendarItem->Body->_ = $update['message'];
			$change->Updates->SetItemField[] = $field;
			
			//Set the guests:
			foreach($update['guests'] as $guest) {
				$field = new Type\SetItemFieldType();
		    $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_REQUIRED_ATTENDEES;
				$field->CalendarItem = new Type\CalendarItemType();
				$field->CalendarItem->RequiredAttendees->Attendee->Mailbox->EmailAddress = $guest;
				$change->Updates->SetItemField[] = $field;				
			}  
	    $request->ItemChanges[] = $change;
		}

		$response = $this->client->UpdateItem($request);

		// Iterate over the results, printing any error messages or ids of events that
		// were updated.
		$response_messages = $response->ResponseMessages->UpdateItemResponseMessage;
		$i = 0;
		foreach ($response_messages as $response_message) {
	    // Make sure the request succeeded.
	    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        $data[$i]['error'] = $message;
        //fwrite(STDERR, "Failed to update event with \"$message\"\n");
        continue;
	    }

	    // Iterate over the updated events, printing the id of each.
	    foreach ($response_message->Items->CalendarItem as $item) {
        $id = $item->ItemId->Id;
        $data[$i]['id'] = $id;
        //fwrite(STDOUT, "Updated event $id\n");
	    }
		$i++;    
		}	//End for each
		return $data;
	} //End update
	
} //End Ews Class.
?>