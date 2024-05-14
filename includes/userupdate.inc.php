<?php
//var_dump($_SERVER["REQUEST_METHOD"]) 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentName = htmlspecialchars($_POST["studentName"]);
    //htmlspecialchars sanitizes the data to prevent users from entering malicious code
    $studentFirst = htmlspecialchars($_POST["studentFirst"]);
    $studentLast = htmlspecialchars($_POST["studentLast"]);
    $studentAddress = htmlspecialchars($_POST["studentAddress"]);
    $studentPhone = htmlspecialchars($_POST["studentPhone"]);
    $studentEmail = htmlspecialchars($_POST["studentEmail"]);
    $studentPword = htmlspecialchars($_POST["studentPword"]);
    
    try {
        require_once "dbhandler.inc.php";

        $query = "UPDATE students SET studentName = :studentName, studentFirst = :studentFirst, studentLast = :studentLast, studentAddress = :studentAddress, studentPhone = :studentPhone, studentEmail = :studentEmail, studentPword = :studentPword WHERE studentID = 1;"; 
        
        /* VALUES (?, ?, ?, ?, ?, ?, ?);"; */
        /*($studentName, $studentFirst, $studentLast, $studentAddress`, $studentPhone, $studentEmail, $studentPword);";*/

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":studentName", $studentName);
        $stmt->bindParam(":studentFirst", $studentFirst);
        $stmt->bindParam(":studentLast", $studentLast);
        $stmt->bindParam(":studentAddress", $studentAddress);
        $stmt->bindParam(":studentPhone", $studentPhone);
        $stmt->bindParam(":studentEmail", $studentEmail);
        $stmt->bindParam(":studentPword", $studentPword);

        $stmt->execute();
        /*[$studentName, $studentFirst, $studentLast, $studentAddress, $studentPhone, $studentEmail, $studentPword]);*/

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
    /*echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $studentName; 
    echo "<br>";
    echo $studentFirst;
    echo "<br>";
    echo $studentLast;
    echo "<br>";
    echo $studentAddress;
    echo "<br>";
    echo $studentPhone;
    echo "<br>";
    echo $studentEmail;
    echo "<br>";
    echo $studentPword; */


} else {
    header("Location: ../index.php");
}

