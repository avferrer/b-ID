<?php

include('../config.php');

function isset_file($file) {
    return (isset($file) && $file['error'] != UPLOAD_ERR_NO_FILE);
}

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$front = $_FILES["front"];
$back = $_FILES["back"];

if(!isset_file($front) || !isset_file($back)){
  header("location: /signup-wizard.php?e=image");
  exit();
}

header("location: /signup-wizard.php?ok=1");
