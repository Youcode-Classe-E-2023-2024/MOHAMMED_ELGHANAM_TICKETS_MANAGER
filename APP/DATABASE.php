<?php

class database{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "helpdesk_ticket";
    private $conn;

    public function __construct()
    {
        $this->conn =mysqli_connect($this->localhost,$this->username,$this->password,$this->db_name);
        if(!$this->conn){
            die("error");
        }else {
            echo "connected <br>";
        }
    }

    public function hach_password($password)
    {
        $hach = sha1($password);
        return $hach;
    }

    public function insert($sql)
    {
        
        $result = mysqli_query($this->conn,$sql);
        if (!$result) {
            echo mysqli_error($this->conn);
        }else {
            
            header("Location:login.php");
        }
    }

    public function select($sql,$email,$new_password)
    {
        
        $result = mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if ($email === $row['email'] && $new_password === $row['password'] ) {
            header("Location:dashbord.php");
            exit;
        }else {
            
            echo mysqli_error($this->conn);
        }
    }


}




?>