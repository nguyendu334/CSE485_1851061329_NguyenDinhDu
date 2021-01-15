<?php 
    session_start();
    define('TEMPLATE', true);
    if(isset($_SESSION['email']) && isset($_SESSION['pass'])){
  
        include_once('../config/connect.php');

        $id = $_GET['id'];
        $sql = "DELETE FROM sothic WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page=sothic');
   }
   else{
       header('location: index.php');
   }
?>