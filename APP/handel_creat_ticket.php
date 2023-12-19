<?php
 session_start();
 if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
     include 'DATABASE.php';
     $db = new database();
     $title = $_POST['title'];
     $description = $_POST['description'];
     
     $sql = "SELECT * FROM users WHERE email='$email'";
     $user = $db->select($sql,$email,$new_password);
     
     $_SESSION['name'] = $user['name'];
     $_SESSION['email'] = $user['email'];
     // var_dump($_SESSION['email']);
     header("location:dashbord.php");
     exit();          
     
     
  }else{
      echo "error";
 }


?>