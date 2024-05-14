<?php

$dsn = "mysql:host=localhost;dbname=cst499";
$dbusername = "root";
$dbpassword = "";

try{
	$pdo = new PDO($dsn, $dbusername, $dbpassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}


/*$pdo = new PDO($dsn, $dbusername, $dbpassword); also works instead of using error hanglers in lines 7 through 13*/

/*$conn opens up connection with the database.*/
