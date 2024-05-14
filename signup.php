<?php
  include_once 'header.php';
?>

<section class="signup-form">
  <h2>Register</h2>
  <p>Enter your information below and then press "Submit."</p>
  <div class="signup-form-form">
  <form action="includes/signup.inc.php" method="post">
    <!--The student ID will be auto generated in the database.-->
    <input type="text" name="studentName" placeholder="Username">
    <input type="text" name="studentFirst" placeholder="First name">
    <input type="text" name="studentLast" placeholder="Last name">
    <input type="text" name="studentAddress" placeholder="Address">
    <input type="text" name="studentPhone" placeholder="Phone number (numbers only)">
    <input type="text" name="studentEmail" placeholder="email">
    <input type="password" name="studentPword" placeholder="Password">
    <!--Using "password" for type will populate with dots instead of text while the user is typing-->

    <button type="submit" name="submit">Submit</button>
  </form>
    </div>
</section>

<?php
  include_once 'footer.php';
?>
