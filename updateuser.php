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
    <title>Change Account</title>
</head>
<body>
  <h3>Change Account</h3>
  <form action="includes/userupdate.inc.php" method="post">
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
            <center><input type="submit" value="Update"></center>
        </form>
<br>
<br>

        <h3>Delete account<h3>
        <form action="includes/userdelete.inc.php" method="post">
        <label for="student ID"
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="studentID" placeholder="Enter student ID" id="inputStudentID:" required>
            
<!--
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
 -->       

            <label for="Password"
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="studentPword" placeholder="Enter password" id="inputStudentPword" required>
        

            <br>
            <center><input type="submit" value="Delete"></center>
        </form>
<br>
<br>
</body>
</html>
<?php
  include_once 'footer.php';
?>
    