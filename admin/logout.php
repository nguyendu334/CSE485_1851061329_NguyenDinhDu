<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['pass'])){
   session_destroy();
}
header('location: login.php');
?>