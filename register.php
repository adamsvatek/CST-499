<?php
  include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Student Registration</title>
</head>

<body>

<div class="login">
        <h1>Create a student login</h1>
        <p>Fill in your information below, then press "Submit."</p>
        <form action="includes/formhandler.inc.php" method="post">
        <label for="student ID"
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="studentName" placeholder="Enter user name" id="inputStudentName:" required>
            
            <label for="Student first name"
                <i class="fas fa-user-circle"></i>
            </label>
            <input type="text" name="studentFirst" placeholder="first name" id="inputStudentFirst:" required>
            
            <label for="Student Last Name"
                <i class="fas fa-user-circle"></i>
            </label>
            <input type="text" name="studentLast" placeholder="last name" id="inputStudentLast:" required>
            
            <label for="Student Address"
                <i class="fas fa-address-card"></i>
            </label>
            <input type="text" name="studentAddress" placeholder="home address" id="inputStudentAddress:" required>
            
            <label for="Student Phone Number"
                <i class="fas fa-phone-square"></i>
            </label>
            <input type="text" name="studentPhone" placeholder="phone number" id="inputStudentPhone:" required>
            
            <label for="Student E-mail"
                <i class="fas fa-envelope"></i>
            </label>
            <input type="text" name="studentEmail" placeholder="E-mail address" id="inputStudentEmail:" required>
        
            <label for="Password"
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="studentPword" placeholder="Enter password" id="inputStudentPword" required>
        

            <br>
            <center><input type="submit" value="Submit"></center>
        </form>
    </div>
</body>
<!--<body>
    <h2>Register</h2>
  <p>Enter your information below and then press "Submit."</p>
  <div class="signup-form-form">
  <form action="includes/signup.inc.php" method="post">
    
    <input type="text" name="studentName" placeholder="Username">
    <input type="text" name="studentFirst" placeholder="First name">
    <input type="text" name="studentLast" placeholder="Last name">
    <input type="text" name="studentAddress" placeholder="Address">
    <input type="text" name="studentPhone" placeholder="Phone number (numbers only)">
    <input type="text" name="studentEmail" placeholder="email">
    <input type="password" name="studentPword" placeholder="Password">
</body>
-->
</html>

<?php
  include_once 'footer.php';
?>