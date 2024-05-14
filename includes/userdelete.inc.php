<?php
//var_dump($_SERVER["REQUEST_METHOD"]) 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentID = htmlspecialchars($_POST["studentID"]);
    //htmlspecialchars sanitizes the data to prevent users from entering malicious code
    /*$studentFirst = htmlspecialchars($_POST["studentFirst"]);
    $studentLast = htmlspecialchars($_POST["studentLast"]);
    $studentAddress = htmlspecialchars($_POST["studentAddress"]);
    $studentPhone = htmlspecialchars($_POST["studentPhone"]);
    $studentEmail = htmlspecialchars($_POST["studentEmail"]);*/
    $studentPword = htmlspecialchars($_POST["studentPword"]);
    
    try {
        require_once "dbhandler.inc.php";

        $query = "DELETE FROM students WHERE studentID = :studentID AND studentPword = :studentPword;"; 
        
        /* VALUES (?, ?, ?, ?, ?, ?, ?);"; */
        /*($studentName, $studentFirst, $studentLast, $studentAddress`, $studentPhone, $studentEmail, $studentPword);";*/

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":studentID", $studentID);
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

