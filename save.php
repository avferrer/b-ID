<?php

require_once 'lib/block_io.php';

$objBlock = new BlockIo();

$link = mysqli_connect("127.0.0.1", "root", "root", "block");

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


$code = $block_io->get_new_address(array('label' => "$first"));

if (mysqli_query($link,"INSERT INTO user (firstname, lastname, gender, Birth, radio, street, city, state, code) VALUES ('$first', '$lastName', '$gender','$Birth', '$radio', '$street', '$city', '$code')") === TRUE) {
    printf("Table user successfully created.\n");
}


mysqli_close($link);
