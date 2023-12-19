<?php
echo"hello";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    include 'DATABASE.php';
    $db = new database();
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = $db->hach_password($password);
    $sql = "SELECT * FROM users WHERE email='$email'";
    $db->select($sql,$email,$new_password);

    
    
}
    












?>