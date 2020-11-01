<?php
/*****************************************
* This query uses the procedural interface
******************************************/

//start session
session_start();
include '../private/db_connection_GCP.php';

//Check to see if the form (login section) has been submitted
 if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$username = $_POST['username'];
$pass = $_POST['password'];

// create SQL statement
$sql = "SELECT username FROM users WHERE username='$username' and password='$pass'";

// Query database
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

// count the number of records found
$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
  if($count > 0) {
      $_SESSION['login_user'] = $row['username'];
      header('Location: index.php');
     } else {
      $error = "Your Login Name or Password is invalid";
    }
  
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fonts/ionicons.min.css">
    <link rel="stylesheet" href="./css/Login-Form-Clean.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-person"></i></div>
            <div class="form-group"><input class="form-control" type="test" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login_button">Log In</button>
    </div>
    
    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>


</body>
</html>
