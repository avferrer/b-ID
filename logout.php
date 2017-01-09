<?php

  session_start();

  $_SESSION["bid_email"] = '';
  $_SESSION["bid_token"] = '';

  session_destroy();

  header("location: /login.php");
