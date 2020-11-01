<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER','35.195.48.14:3306');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','employees');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
 }
 /*else {
    echo "Connected successfully";
 } */
  
?>


