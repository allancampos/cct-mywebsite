<?php    include('db_connection_GCP.php');    
session_start();        
if(!isset($_SESSION['login_user'])){
           header("location:login.php"); 
            die(); 
}     
?>