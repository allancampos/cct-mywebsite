<?php   
session_start(); //to ensure you are using same session

//destroy the session
if(session_destroy()) {
    header("Location: login.php"); //to redirect back to "index.php" after logging out
} 
exit();
?>