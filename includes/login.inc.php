<?php

if (isset($_POST["submit"])) {

  // This retrieved data from the user database
  $user_name = $_POST["user_name"];
  $user_password = $_POST["user_password"];

  require_once "databasehandler.inc.php";
  require_once 'functions.inc.php';

  // verify username and password were filled in
  if (emptyInputLogin($user_name, $user_password) === true) {
    header("location: ../login.php?error=emptyinput");
		exit();
  }

  // Connect to database  ($conn connects us to the database.)
  loginUser($conn, $user_name, $user_password);

} else {
	header("location: ../login.php");
    exit();
}
