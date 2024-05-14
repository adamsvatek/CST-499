<?php

if (isset($_POST["submit"])) {
  echo "You have created an account!";
 // These next 7 lines get data that was entered in from the sign in page.
  $studentName = $_POST["studentName"];
  $studentFirst = $_POST["studentFirst"];
  $studentLast = $_POST["studentLast"];
  $studentAddress = $_POST["studentAddress"];
  $studentPhone = $_POST["studentPhone"];
  $studentEmail = $_POST["studentEmail"];
  $studentPword = $_POST["studentPword"];
  
  require_once "dbhandler.inc.php";
  require_once "functions.inc.php";

  // Empty inputs
  if (emptyInput($studentName, $studentFirst, $studentLast, $studentAddress, $studentPhone, $studentEmail, $studentPword) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
	// valid user name 
  if (invalidUserName($studentName) !== false) {
    header("location: ../signup.php?error=invalidusername");
		exit();
  }

  // Is the username taken already?
  if (usernameExists($conn, $studentName, $studentEmail) !== false) {
    header("location: ../signup.php?error=usernamealreadytaken");
		exit();
  }

  // $conn connects to database
  createUser($conn, $studentName, $studentFirst, $studentLast, $studentAddress, $studentPhone, $studentEmail, $studentPword);

} else {
	header("location: ../signup.php");
    exit();
}
