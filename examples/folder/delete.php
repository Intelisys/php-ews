<?php
/**
 * This example deletes one or more folders. Replace the value(s) in the
 * $folder_ids array to match the folder(s) you wish to delete.
 */
require_once '../../vendor/autoload.php';

use \Intelisys\PhpEws\Client;
use \Intelisys\PhpEws\Request\DeleteFolderType;

use \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \Intelisys\PhpEws\Enumeration\DisposalType;
use \Intelisys\PhpEws\Enumeration\ResponseClassType;

use \Intelisys\PhpEws\Type\FolderIdType;

// Replace with ids of the folders to be deleted.
$folder_ids = array(
    '',
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request object.
$request = new DeleteFolderType();
$request->DeleteType = DisposalType::HARD_DELETE;
$request->FolderIds = new NonEmptyArrayOfBaseFolderIdsType();

// Iterate over the folders to be deleted, adding each to the request.
foreach ($folder_ids as $id) {
    $folder_id = new FolderIdType();
    $folder_id->Id = $id;
    $request->FolderIds->FolderId[] = $folder_id;
}

$response = $client->DeleteFolder($request);

// Iterate over the results, printing any error messages.
$response_messages = $response->ResponseMessages->DeleteFolderResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Folder failed to delete with \"$code: $message\"\n");
        continue;
    }
}
