<?php  
session_start();
include 'DATABASE.php';
$db = new database();
$sql = "SELECT * FROM ticket";
$row = $db->select_tiket($sql);
echo "<pre>";
print_r($row[1]);
echo "<pre>";
?>



