<?php
/**
 * This example show how to get the details for one or more email messages. We
 * also grab an extended property to show how this would be done.
 */
require_once '../../vendor/autoload.php';

use \Intelisys\PhpEws\Client;
use \Intelisys\PhpEws\Request\GetItemType;

use \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;
use \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfPathsToElementType;

use \Intelisys\PhpEws\Enumeration\DefaultShapeNamesType;
use \Intelisys\PhpEws\Enumeration\MapiPropertyTypeType;
use \Intelisys\PhpEws\Enumeration\ResponseClassType;

use \Intelisys\PhpEws\Type\ItemIdType;
use \Intelisys\PhpEws\Type\ItemResponseShapeType;
use \Intelisys\PhpEws\Type\PathToExtendedFieldType;

$email_ids = array(
    'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEMAAAr1MfeoTJdQ7jgaw/bSgljAABaFXCUAAA=',
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new GetItemType();
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
$request->ItemShape->AdditionalProperties = new NonEmptyArrayOfPathsToElementType();
$request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// Add an extended property to the request. We'll use the replied on property
// for this example.
$property = new PathToExtendedFieldType();
$property->PropertyTag = '0x1081';
$property->PropertyType = MapiPropertyTypeType::INTEGER;
$request->ItemShape->AdditionalProperties->ExtendedFieldURI[] = $property;

// Iterate over the message ids, setting each one on the request.
foreach ($email_ids as $email_id) {
    $item = new ItemIdType();
    $item->Id = $email_id;
    $request->ItemIds->ItemId[] = $item;
}

$response = $client->GetItem($request);

// Iterate over the results, printing any error messages or message subjects.
$response_messages = $response->ResponseMessages->GetItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to get message with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the messages, printing the subject for each.
    foreach ($response_message->Items->Message as $item) {
        $subject = $item->Subject;
        fwrite(STDOUT, "Retrieved message $subject\n");
    }
}
