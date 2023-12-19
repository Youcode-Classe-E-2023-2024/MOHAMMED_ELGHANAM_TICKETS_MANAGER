<?php
 session_start();
 if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
     include 'DATABASE.php';
     $db = new database();
     $title = $_POST['title'];
     $description = $_POST['description'];
     $assign = $_POST['user'];
    //  print_r($assign);
     if (isset($_POST['ta'])) {
        $tag = $_POST['ta'];
     }else {
        echo"this empty";
     }
     
     $priority =$_POST['priority'];

    $sql = "INSERT INTO ticket (title,description,priorite,status)
    VALUES('$title','$description','$priority','$tag')";
    $db->insert($sql);  
      header("location:dashbord.php");
      exit();          
     
     
  }else{
      echo "error";
 }









?>


















