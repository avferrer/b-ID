<?php

include('../config.php');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$first = $_POST["firstName"];
$lastName = $_POST["lastName"];
$gender = $_POST["gender"];
$birth = $_POST["birth"];
$relationship = $_POST["relationship"];
$type = $_POST["type"];
$street = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$zip = $_POST["zip"];

if(
    $first == NULL ||
    $lastName == NULL ||
    $birth == NULL ||
    $relationship == NULL ||
    $type == NULL ||
    $gender == NULL ||
    $street == NULL ||
    $city == NULL ||
    $zip == NULL ||
    $state == NULL ||
    $country == NULL
){
    header('location: /signup-wizard.php?e=notnull');
    exit();
}


$sql = "UPDATE user SET firstname = :pfn, lastname = :pln, birth = :bir, relationship = :rel, type = :typ, gender = :gen,
address = :add, city = :cit, zip = :zip, state = :sta, country = :con  WHERE id = :pid";
$update = $instance->prepare($sql);
$update->bindParam(":pfn", $first);
$update->bindParam(":pln", $lastName);
$update->bindParam(":bir", date("y-m-d",strtotime($birth)));
$update->bindParam(":rel", $relationship);
$update->bindParam(":typ", $type);
$update->bindParam(":gen", $gender);
$update->bindParam(":add", $street);
$update->bindParam(":cit", $city);
$update->bindParam(":zip", $zip);
$update->bindParam(":sta", $state);
$update->bindParam(":con", $country);
$update->bindParam(":pid", $_POST["id"]);
$update->execute();

header("location: /signup-wizard.php?ok=1");
