<?php
require_once '../../vendor/autoload.php';

use \Intelisys\PhpEws\Client;
use \Intelisys\PhpEws\Request\CreateItemType;

use \Intelisys\PhpEws\Enumeration\BodyTypeType;
use \Intelisys\PhpEws\Enumeration\EmailAddressKeyType;
use \Intelisys\PhpEws\Enumeration\FileAsMappingType;
use \Intelisys\PhpEws\Enumeration\MapiPropertyTypeType;
use \Intelisys\PhpEws\Enumeration\PhoneNumberKeyType;
use \Intelisys\PhpEws\Enumeration\PhysicalAddressKeyType;
use \Intelisys\PhpEws\Enumeration\ResponseClassType;

use \Intelisys\PhpEws\Type\BodyType;
use \Intelisys\PhpEws\Type\ContactItemType;
use \Intelisys\PhpEws\Type\EmailAddressDictionaryEntryType;
use \Intelisys\PhpEws\Type\EmailAddressDictionaryType;
use \Intelisys\PhpEws\Type\ExtendedPropertyType;
use \Intelisys\PhpEws\Type\PathToExtendedFieldType;
use \Intelisys\PhpEws\Type\PhoneNumberDictionaryEntryType;
use \Intelisys\PhpEws\Type\PhysicalAddressDictionaryEntryType;
use \Intelisys\PhpEws\Type\PhoneNumberDictionaryType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request object.
$request = new CreateItemType();
$contact = new ContactItemType();
$contact->GivenName = 'Homer';
$contact->Surname = 'Simpson';
$contact->PhoneNumbers = new PhoneNumberDictionaryType();
$contact->EmailAddresses = new EmailAddressDictionaryType();
$contact->PhoneNumbers = new PhoneNumberDictionaryType();
$contact->ExtendedProperty = new ExtendedPropertyType();

// Set an email address.
$email = new EmailAddressDictionaryEntryType();
$email->Key = EmailAddressKeyType::EMAIL_ADDRESS_1;
$email->_ = 'hsimpson@example.com';
$contact->EmailAddresses->Entry[] = $email;

// Set an address.
$address = new PhysicalAddressDictionaryEntryType();
$address->Key = PhysicalAddressKeyType::HOME;
$address->Street = '742 Evergreen Terrace';
$address->City = 'Springfield';
$address->State = 'PA';
$address->PostalCode = '19064';
$address->CountryOrRegion = 'USA';
$contact->PhysicalAddresses->Entry[] = $address;

// Set a phone number.
$phone = new PhoneNumberDictionaryEntryType();
$phone->Key = PhoneNumberKeyType::HOME_PHONE;
$phone->_ = '(610) 555-3223';
$contact->PhoneNumbers->Entry[] = $phone;

// Set contact title as an extended property.
$property = new ExtendedPropertyType();
$property->ExtendedFieldURI = new PathToExtendedFieldType();
$property->ExtendedFieldURI->PropertyTag = '0x3A45';
$property->ExtendedFieldURI->PropertyType = MapiPropertyTypeType::STRING;
$property->Value = 'Mr.';
$contact->ExtendedProperty = $property;

// Set the "file as" mapping to "first name last name".
$contact->FileAsMapping = FileAsMappingType::FIRST_SPACE_LAST;

// Set the contact body (this is the "Notes" field in Outlook).
$contact->Body = new BodyType();
$contact->Body->BodyType = BodyTypeType::TEXT;
$contact->Body->_ = 'Test body.';

$request->Items->Contact[] = $contact;
$response = $client->CreateItem($request);

// Iterate over the results, printing any error messages or contact ids.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Contact failed to create with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the created contacts.
    foreach ($response_message->Items->Contact as $item) {
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "Created contact $id\n");
    }
}
