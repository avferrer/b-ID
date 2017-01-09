<?php
  session_start();

  $email = $_SESSION["bid_email"];
  $token = $_SESSION["bid_token"];

  if($email == NULL || $token == NULL){
    $email = '';
    $token = '';
    header("location: /login.php");
    exit();
  }

  $loginCheck = $instance->prepare('SELECT * FROM user WHERE email = :p1');
  $loginCheck->bindParam(":p1", $email);
  $loginCheck->execute();

  if($loginCheck->rowCount() == 0){
      $email = '';
      $token = '';
      header("location: /login.php");
      exit();
  }
  $contents = $loginCheck->fetchAll()[0];
  if($token != $contents["token"]){
      $email = '';
      $token = '';
      header("location: /login.php");
      exit();
  }
