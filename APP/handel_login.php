<?php
    session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    include 'DATABASE.php';
    $db = new database();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = $db->hach_password($password);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $user = $db->select($sql,$email,$new_password);
    
    // echo "<pre>";
    // print_r($user['image']);
    // echo "<pre>";
    $_SESSION['name'] = $user['name'];
    $_SESSION['image'] = $user['image'];
    $_SESSION['email'] = $user['email'];
     
    header("location:dashbord.php");
    exit();          
    
    
 }else{
     echo "error";
}
    












?>