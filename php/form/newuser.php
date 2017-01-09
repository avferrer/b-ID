<?php

include('../config.php');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$email = $_POST["email"];
$password = $_POST["pass"];
$c_password = $_POST["cpass"];
$first = $_POST["fname"];
$lastName = $_POST["lname"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$job = $_POST["jp"];
$street = $_POST["street"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];

if(
    $first == NULL ||
    $lastName == NULL ||
    $email == NULL ||
    $password == NULL ||
    $c_password == NULL ||
    $gender == NULL ||
    $phone == NULL ||
    $job == NULL ||
    $street == NULL ||
    $city == NULL ||
    $state == NULL ||
    $country == NULL
){
    header('location: /register.php?e=notnull');
    exit();
}

if($password != $c_password){
    header('location: /register.php?e=password');
    exit();
}
$password = sha1(md5($password));

$code = file_get_contents('https://block.io/api/v2/get_new_address/?api_key=7d41-9571-22d5-807a&label='.sha1(md5($first.$lastName.$phone."1")));
$object = json_decode($code);
$token = sha1(rand(0,30).$object->data->address);

//$code = curl_init('https://block.io/api/v2/get_new_address/?api_key=7d41-9571-22d5-807a&label='.$first);
//$code = exec('https://block.io/api/v2/get_new_address/?api_key=7d41-9571-22d5-807a&label='.$first);
$sql = "INSERT INTO user (email, password, token, firstname, lastname, gender, phone, job, address, city, state, country, code) VALUES ('$email', '$password', '$token', '$first', '$lastName', '$gender', '$phone', '$job', '$street', '$city', '$state', '$country', '".$object->data->address."')";
echo $sql;

$c = $instancia->prepare($sql);
$c->execute();

header("location: /signup-wizard.php");
