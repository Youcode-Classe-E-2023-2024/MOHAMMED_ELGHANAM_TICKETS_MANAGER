<?php
   
    
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    include 'DATABASE.php';
    $db = new database();
    
    $name = $_POST['name'];
    $image =$_FILES['file']['tmp_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $new_password = $db->hach_password($password);
    $sql = "INSERT INTO users (name,image,email,password) VALUES('$name','$image','$email','$new_password')";
    $db->insert($sql);
}
    
?>
