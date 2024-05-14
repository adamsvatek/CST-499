<?php

// Check for any empty fields for signing up
function emptyInput($user_name, $user_email, $user_password, $user_first_name, $user_last_name, $user_address, $user_phone, $user_salary, $user_SSN) {
	$result;
	if (empty($user_name) || empty($user_email) || empty($user_password) || empty($user_first_name) || empty($user_last_name) || empty($user_address) || empty($user_phone) || empty($user_salary) || empty($user_SSN)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check if username is valid. 
function invalidUserName($user_name) {
	$result;
	//!preg_match("/^[a-zA-Z0-9] makes sure that only letters and numbers are used in the username.  
	if (!preg_match("/^[a-zA-Z0-9]*$/", $user_name)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Check invalid email
function invalidEmail($user_email) {
	$result;
	// ! before filters means NOT... So "true" means that it is not a valid email
	if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Is this username already taken?
function usernameExists($conn, $user_name, $user_email) {
	// * means ALL. "SELECT ALL FROm....
  $sql = "SELECT * FROM tbluser WHERE username = ? OR email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	//ss means two strings
	mysqli_stmt_bind_param($stmt, "ss", $user_name, $user_email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

// Insert a new user into the database
function createUser($conn, $user_name, $user_email, $user_password, $user_first_name, $user_last_name, $user_address, $user_phone, $user_salary, $user_SSN) {
  $sql = "INSERT INTO tbluser (username, email, userPassword, firstName, lastName, userAddress, phone, salary, SSN) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sssssssss", $user_name, $user_email, $user_password, $user_first_name, $user_last_name, $user_address, $user_phone, $user_salary, $user_SSN);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
}

// Check for empty input login
function emptyInputLogin($user_name, $user_password) {
	$result;
	if (empty($user_name) || empty($user_password)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

// Log user into website
function loginUser($conn, $user_name, $user_password) {
	$usernameExists = usernameExists($conn, $user_name);

	// Error messages:
	// Username does not exist
	if ($usernameExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}

	// Verify user password
	$pwdHashed = $usernameExists["userPassword"];
	$checkPwd = password_verify($user_password, $pwdHashed);

	// password verification failed.
	if ($checkPwd === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	
	// username and password are correct
	elseif ($checkPwd === true) {
		session_start();
		$_SESSION["userid"] = $usernameExists["usersId"];
		$_SESSION["username"] = $usernameExists["usersName"];
		header("location: ../index.php");
		exit();
	}
}
