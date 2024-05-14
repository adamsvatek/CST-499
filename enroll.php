<?php
  include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Enroll for classes!</title>
</head>

<body>
        <h1><yellow>Student Login</yellow></h1>
        <form action="authenticate.php" method="post">
        <label for="User ID">

            </label>Student ID 
            <input type="text" name="username" placeholder="Enter user name" id="username:" required>
            <br>
        <label for="course">
Select Course
            </label>

        <select id="course" name="course">
            <option value="BUS105">BUS105 - Business & Academic Success</option>
            <option value="CPT200">CPT200 - Fundamentals of Programming Languages</option>
            <option value="CPT301">CPT301 - Computer Organization & Architecture</option>
            <option value="CPT304">CPT304 - Operating Systems Theory & Design</option>
            <option value="CPT307">CPT307 - Data Structures & Algorithms</option>
            <option value="CPT310">CPT310 - Database Systems & Management</option>
            <option value="CST301">CST301 - Software Technology & Design</option>
            <option value="CST304">CST304 - Software Requirements & Analysis</option>
            <option value="CST307">CST307 - Software Architecture & Design</option>
            <option value="CST310">CST310 - Software Development</option>
            <option value="CST313">CST313 - Software Testing</option>
            <option value="CST316">CST316 - Information Security Management</option>
            <option value="CST499">CST499 - Capstone for Computer Software Technology</option>
            <option value="CYB300">CYB300 - System Administration & Security</option>
            <option value="ENG328">ENG328 - Scietific & Technical Writing</option>
            <option value="GEN499">GEN499 - General Education Capsone</option>
            <option value="INT301">INT301 - Computer Networking</option>
            <option value="MAT222">MAT222 - Intermediate Algebra</option>
            <option value="MAT232">MAT232 - Statistical Literacy</option>
            <option value="TEC101">TEC101 - Fundamentals of Information Technology & Literacy</option>
            <option value="TMG300">TMG300 - Scrum Basics</option>
            <option value="CST 499">CST Capstone</option>
            <option value="GEN 499">GEN Capstone</option>
        </select>

<br>
        <label for="Term">Select semester
            </label>
        <select id="course" name="course">
            <option value="Spring 2024">Spring 2024</option>
            <option value="Summer 2024">Summer 2024</option>
            <option value="Fall 2024">Fall 2024</option>                    </select>
        

            <br>
            <input type="submit" value="Submit">
        </form>

</body>


</html>

<?php
  include_once 'footer.php';
?>