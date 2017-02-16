<?php
require_once '../../vendor/autoload.php';

use \Intelisys\PhpEws\Client;
use \Intelisys\PhpEws\Request\UpdateItemType;

use \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfItemChangeDescriptionsType;

use \Intelisys\PhpEws\Enumeration\ConflictResolutionType;
use \Intelisys\PhpEws\Enumeration\EmailAddressKeyType;
use \Intelisys\PhpEws\Enumeration\ResponseClassType;

use \Intelisys\PhpEws\Type\ContactItemType;
use \Intelisys\PhpEws\Type\DeleteItemFieldType;
use \Intelisys\PhpEws\Type\EmailAddressDictionaryEntryType;
use \Intelisys\PhpEws\Type\EmailAddressDictionaryType;
use \Intelisys\PhpEws\Type\ItemChangeType;
use \Intelisys\PhpEws\Type\ItemIdType;
use \Intelisys\PhpEws\Type\PathToIndexedFieldType;
use \Intelisys\PhpEws\Type\PathToUnindexedFieldType;
use \Intelisys\PhpEws\Type\SetItemFieldType;

$contact_updates = array(
    array(
        'id' => 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqj7AAA=',
        'email' => 'homer.simpson@example.com',
    ),
    array(
        'id' => 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqjwAAA=',
        'email' => '',
    ),
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new UpdateItemType();
$request->ConflictResolution = ConflictResolutionType::ALWAYS_OVERWRITE;

// Iterate over the contacts to be updated.
foreach ($contact_updates as $update) {
    // Build out item change request.
    $change = new ItemChangeType();
    $change->ItemId = new ItemIdType();
    $change->ItemId->Id = $update['id'];
    $change->Updates = new NonEmptyArrayOfItemChangeDescriptionsType();

    // If an email is set, then we need to set it. Otherwise, we need to delete
    // the current value.
    if (!empty($update['email'])) {
        $field = new SetItemFieldType();
        $field->IndexedFieldURI = new PathToIndexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:EmailAddress';
        $field->IndexedFieldURI->FieldIndex = EmailAddressKeyType::EMAIL_ADDRESS_1;
        $field->Contact = new ContactItemType();
        $field->Contact->EmailAddresses = new EmailAddressDictionaryType();

        $entry = new EmailAddressDictionaryEntryType();
        $entry->_ = $update['email'];
        $entry->Key = EmailAddressKeyType::EMAIL_ADDRESS_1;
        $field->Contact->EmailAddresses->Entry = $entry;
        $change->Updates->SetItemField[] = $field;
    } else {
        $field = new DeleteItemFieldType();
        $field->IndexedFieldURI = new PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:EmailAddress';
        $field->IndexedFieldURI->FieldIndex = EmailAddressKeyType::EMAIL_ADDRESS_1;
        $change->Updates->DeleteItemField[] = $field;
    }

    $request->ItemChanges[] = $change;
}

$response = $client->UpdateItem($request);

// Iterate over the results, printing any error messages or ids of contacts that
// were updated.
$response_messages = $response->ResponseMessages->UpdateItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to update contact with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the updated contacts, printing the id of each.
    foreach ($response_message->Items->Contact as $item) {
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "Updated contact $id\n");
    }
}
