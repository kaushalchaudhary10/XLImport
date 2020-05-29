<?php

// Fetch file from CLI
$filePath = getopt("f:");

if (empty($filePath)) {
    echo "Please share the path to the file\n";
    exit();
} else {
    echo "File Path: ".$filePath['f']. "\n";
}

/**
 * Pending: Read file from CLI with basic validations
 * Read the Excel file and populate the database
 */

require_once('conf.php'); 
require_once('libs/vendor/autoload.php');

// Load an .xlsx file 
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePath['f']);
   
// Store data from the activeSheet to the varibale 
// in the form of Array 
$data = array(1,$spreadsheet->getActiveSheet() 
            ->toArray(null,true,true,true)); 

extract($dbConn);

$con = mysqli_connect($host,$user,$pass,$db,$port);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} else {
    echo "Connected to $host\n";
}

foreach($data[1] as $key => $value) {

    // Skip the header row
    if ($key === 1) continue;

    $tmp = array();

    $tmp['date'] = $value['A'];
    $tmp['id'] = $value['B'];
    $tmp['name'] = $value['C'];
    $tmp['workingTypeemployee'] = $value['D'];
    $tmp['start'] = $value['E'];
    $tmp['end'] = $value['F'];
    $tmp['storeId'] = $value['G'];
    $tmp['storeName'] = $value['H'];
    
    //Form the insert stmt
    $stmt = 'INSERT INTO employee ('.implode(",", array_keys($tmp)).') VALUES (\''.implode("', '", array_values($tmp)).'\');';
    
    extract($tmp);

    if (!mysqli_query($con, $stmt)){
        echo "[REC FAIL]: ID- $id | Name- $name \n";
    } else {
        echo "[REC SUCCESS]: ID- $id | Name- $name \n";
    }

}

echo "All Done\n";