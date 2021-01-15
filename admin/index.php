<?php
include_once ('../config/connect.php');
ob_start();
session_start();



define('TEMPLATE', true);// bảo mật 

if(isset($_SESSION['email']) && isset($_SESSION['pass'])){

 include_once('admin.php');
}

else{
    include_once('login.php');
}
?>