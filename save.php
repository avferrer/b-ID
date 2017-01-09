<?php

include('php/config.php');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$first = $_POST["firstName"];
$lastName = $_POST["lastName"];
$gender = $_POST["gender"];
$Birth = $_POST["Birth"];
$radio = $_POST["radio"];
$street = $_POST["street"];
$city = $_POST["city"];
$state = $_POST["state"];

$code = file_get_contents('https://block.io/api/v2/get_new_address/?api_key=7d41-9571-22d5-807a&label='.$first);


//$code = curl_init('https://block.io/api/v2/get_new_address/?api_key=7d41-9571-22d5-807a&label='.$first);
//$code = exec('https://block.io/api/v2/get_new_address/?api_key=7d41-9571-22d5-807a&label='.$first);
if (mysqli_query($link,"INSERT INTO block (firstname, lastname, gender, Birth, radio, street, city, state, code) VALUES ('$first', '$lastName', '$gender','$Birth', '$radio', '$street', '$city', '$code')") === TRUE) {
    printf("Table user successfully created.\n");
}


mysqli_close($link);
