<?php
/**
 * This example recursively searches the user's mailbox for all folders that
 * contain "Cal" (case sensitive).
 */
require_once '../../vendor/autoload.php';

use \Intelisys\PhpEws\Client;
use \Intelisys\PhpEws\Request\FindFolderType;

use \Intelisys\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \Intelisys\PhpEws\Enumeration\ContainmentComparisonType;
use \Intelisys\PhpEws\Enumeration\ContainmentModeType;
use \Intelisys\PhpEws\Enumeration\DefaultShapeNamesType;
use \Intelisys\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \Intelisys\PhpEws\Enumeration\FolderQueryTraversalType;
use \Intelisys\PhpEws\Enumeration\ResponseClassType;
use \Intelisys\PhpEws\Enumeration\UnindexedFieldURIType;

use \Intelisys\PhpEws\Type\ConstantValueType;
use \Intelisys\PhpEws\Type\DistinguishedFolderIdType;
use \Intelisys\PhpEws\Type\FolderResponseShapeType;
use \Intelisys\PhpEws\Type\PathToUnindexedFieldType;
use \Intelisys\PhpEws\Type\RestrictionType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new FindFolderType();
$request->FolderShape = new FolderResponseShapeType();
$request->FolderShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();
$request->Restriction = new RestrictionType();

// Search recursively.
$request->Traversal = FolderQueryTraversalType::DEEP;

// Search within the root folder. Combined with the traversal set above, this
// should search through all folders in the user's mailbox.
$parent = new DistinguishedFolderIdType();
$parent->Id = DistinguishedFolderIdNameType::ROOT;
$request->ParentFolderIds->DistinguishedFolderId[] = $parent;

// Build the restriction that will search for folders containing "Cal".
$contains = new \Intelisys\PhpEws\Type\ContainsExpressionType();
$contains->FieldURI = new PathToUnindexedFieldType();
$contains->FieldURI->FieldURI = UnindexedFieldURIType::FOLDER_DISPLAY_NAME;
$contains->Constant = new ConstantValueType();
$contains->Constant->Value = 'Cal';
$contains->ContainmentComparison = ContainmentComparisonType::EXACT;
$contains->ContainmentMode = ContainmentModeType::SUBSTRING;
$request->Restriction->Contains = $contains;

$response = $client->FindFolder($request);

// Iterate over the results, printing any error messages or folder names and
// ids.
$response_messages = $response->ResponseMessages->FindFolderResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to find folders with \"$code: $message\"\n");
        continue;
    }

    // The folders could be of any type, so combine all of them into a single
    // array to iterate over them.
    $folders = array_merge(
        $response_message->RootFolder->Folders->CalendarFolder,
        $response_message->RootFolder->Folders->ContactsFolder,
        $response_message->RootFolder->Folders->Folder,
        $response_message->RootFolder->Folders->SearchFolder,
        $response_message->RootFolder->Folders->TasksFolder
    );

    // Iterate over the found folders.
    foreach ($folders as $folder) {
        $name = $folder->DisplayName;
        $id = $folder->FolderId->Id;;
        fwrite(STDOUT, "Found folder \"$name\": $id\n");
    }
}
