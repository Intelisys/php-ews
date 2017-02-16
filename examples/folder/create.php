<?php
/**
 * This example creates a new calendar folder. If you wish to create a folder of
 * a different type, you would need to modify this example to use the
 * appropriate properties on the ArrayOfFoldersType object.
 *
 * Note: Folder names must be unique. If you've already created a folder using
 * same name as the one in this example, the request will fail unless you first
 * delete that folder or alter the example.
 */
require_once '../../vendor/autoload.php';

use \Intelisys\PhpEws\Client;
use \Intelisys\PhpEws\Request\CreateFolderType;

use \Intelisys\PhpEws\ArrayType\ArrayOfFoldersType;

use \Intelisys\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \Intelisys\PhpEws\Enumeration\ResponseClassType;

use \Intelisys\PhpEws\Type\CalendarFolderType;
use \Intelisys\PhpEws\Type\DistinguishedFolderIdType;
use \Intelisys\PhpEws\Type\TargetFolderIdType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request object.
$request = new CreateFolderType();
$request->Folders = new ArrayOfFoldersType();

// Set the parent folder for the newly created folder.
$parent = new TargetFolderIdType();
$parent->DistinguishedFolderId = new DistinguishedFolderIdType();
$parent->DistinguishedFolderId->Id = DistinguishedFolderIdNameType::CALENDAR;
$request->ParentFolderId = $parent;

// Configure the new folder to be created. You could create multiple folders in
// a single request.
$folder = new CalendarFolderType();
$folder->DisplayName = 'New Calendar Folder';
$request->Folders->CalendarFolder[] = $folder;

$response = $client->CreateFolder($request);

// Iterate over the results, printing any error messages or folder ids.
$response_messages = $response->ResponseMessages->CreateFolderResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Folder failed to create with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the created folders.
    foreach ($response_message->Folders->CalendarFolder as $folder)
    {
        $id = $folder->FolderId->Id;
        fwrite(STDOUT, "Created folder $id\n");
    }
}
