<?php
require_once '../../vendor/autoload.php';

use \Intelisys\PhpEws\Client;
use \Intelisys\PhpEws\Request\FindItemType;

use \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \Intelisys\PhpEws\Enumeration\DefaultShapeNamesType;
use \Intelisys\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \Intelisys\PhpEws\Enumeration\ResponseClassType;
use \Intelisys\PhpEws\Enumeration\UnindexedFieldURIType;

use \Intelisys\PhpEws\Type\AndType;
use \Intelisys\PhpEws\Type\ConstantValueType;
use \Intelisys\PhpEws\Type\DistinguishedFolderIdType;
use \Intelisys\PhpEws\Type\FieldURIOrConstantType;
use \Intelisys\PhpEws\Type\IsGreaterThanOrEqualToType;
use \Intelisys\PhpEws\Type\IsLessThanOrEqualToType;
use \Intelisys\PhpEws\Type\ItemResponseShapeType;
use \Intelisys\PhpEws\Type\PathToUnindexedFieldType;
use \Intelisys\PhpEws\Type\RestrictionType;

// Replace with the date range you want to search in. As is, this will find all
// messages within the current calendar year.
$start_date = new DateTime('January 1 00:00:00');
$end_date = new DateTime('December 31 23:59:59');
$timezone = 'Eastern Standard Time';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);
$client->setTimezone($timezone);

$request = new FindItemType();
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();

// Build the start date restriction.
$greater_than = new IsGreaterThanOrEqualToType();
$greater_than->FieldURI = new PathToUnindexedFieldType();
$greater_than->FieldURI->FieldURI = UnindexedFieldURIType::ITEM_DATE_TIME_RECEIVED;
$greater_than->FieldURIOrConstant = new FieldURIOrConstantType();
$greater_than->FieldURIOrConstant->Constant = new ConstantValueType();
$greater_than->FieldURIOrConstant->Constant->Value = $start_date->format('c');

// Build the end date restriction;
$less_than = new IsLessThanOrEqualToType();
$less_than->FieldURI = new PathToUnindexedFieldType();
$less_than->FieldURI->FieldURI = UnindexedFieldURIType::ITEM_DATE_TIME_RECEIVED;
$less_than->FieldURIOrConstant = new FieldURIOrConstantType();
$less_than->FieldURIOrConstant->Constant = new ConstantValueType();
$less_than->FieldURIOrConstant->Constant->Value = $end_date->format('c');

// Build the restriction.
$request->Restriction = new RestrictionType();
$request->Restriction->And = new AndType();
$request->Restriction->And->IsGreaterThanOrEqualTo = $greater_than;
$request->Restriction->And->IsLessThanOrEqualTo = $less_than;

// Return all message properties.
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;

// Search in the user's inbox.
$folder_id = new DistinguishedFolderIdType();
$folder_id->Id = DistinguishedFolderIdNameType::INBOX;
$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;

$response = $client->FindItem($request);

// Iterate over the results, printing any error messages or message subjects.
$response_messages = $response->ResponseMessages->FindItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Failed to search for messages with \"$code: $message\"\n"
        );
        continue;
    }

    // Iterate over the messages that were found, printing the subject for each.
    $items = $response_message->RootFolder->Items->Message;
    foreach ($items as $item) {
        $subject = $item->Subject;
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "$subject: $id\n");
    }
}
