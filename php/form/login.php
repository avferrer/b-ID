<?php
include("../config.php");
session_start();

$email = $_POST["email"];
$pass = sha1(md5($_POST["password"]));

if($email == NULL || $pass == NULL){
  $email = '';
  $pass = '';
  header("location: /login.php");
  exit();
}

$loginCheck = $instance->prepare('SELECT * FROM user WHERE email = :p1');
$loginCheck->bindParam(":p1", $email);
$loginCheck->execute();

if($loginCheck->rowCount() == 0){
    $email = '';
    $pass = '';
    header("location: /login.php?e=notexists");
    exit();
}
$contents = $loginCheck->fetchAll()[0];
if($pass != $contents["password"]){
    $email = '';
    $pass = '';
    header("location: /login.php?e=password");
    exit();
}

$_SESSION["bid_email"] = $email;
$_SESSION["bid_token"] = $contents["token"];
header("location: /dashboard.php");
