<?php
  include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <h1>Student Login</h1>
        <form action="authenticate.php" method="post">
        <label for="User ID"
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Enter user name" id="username:" required>
            

            <br>
        <label for="Password"
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="userPassword" placeholder="Enter password" id="userPassword" required>
        

            <br>
            <center><input type="submit" value="Submit"></center>
        </form>
    </div>
</body>
</html>


<?php
  include_once 'footer.php';
?>