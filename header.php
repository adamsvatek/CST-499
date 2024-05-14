<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--<title>Student Registration</title>-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav>
      <div class="wrapper">
<!--  image in first line below -->
      
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="https://www.uagc.edu/">About Us</a></li>
          <li><a href="new.php">Place holder</a></li>
          <li><a href="register.php">Register!</a></li>
          <li><a href="login.php">Log in</a></li>
        </ul>
<!--
        <ul>
          <li><a href="includes/index.php">Home</a></li>
          <li><a href="includes/discover.php">About Us</a></li>
          <li><a href="includes/blog.php">Find Blogs</a></li>

-->
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='inlcludes/profile.php'>Profile Page</a></li>";
              echo "<li><a href='includes/logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='includes/signup.inc.php'>Register</a></li>";
              echo "<li><a href='includes/login.inc.php'>Log in</a></li>";
            }
          ?>
   <!--     </ul>
          -->
      </div>
    </nav>

<div class="wrapper">
