<?php
 session_start();
 if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
     include 'DATABASE.php';
     $db = new database();
     $title = $_POST['title'];
     $description = $_POST['description'];
     $assign = $_POST['assign'];
     $tag = $_POST['tag'];
     $priority =$_p['priority'];

    $sql = "INSERT INTO ticket (title,description,priorite,status)
    VALUES('$title','$description','$priority','$tag')";
    $db->insert($sql);  
     header("location:dashbord.php");
     exit();          
     
     
  }else{
      echo "error";
 }


?>