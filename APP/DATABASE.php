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

    // function hash password

    public function hach_password($password)
    {
        $hach = sha1($password);
        return $hach;
    }

    // function insert

    public function insert($sql)
    {     //  echo"hello <br>";
        $result = mysqli_query($this->conn,$sql);
        if (!$result) {
            echo mysqli_error($this->conn);
        }else { 
            echo"error";        
            header("Location:login.php");
        }
    }

    // function select on database

    public function select($sql,$email,$new_password){    
         $result = mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_assoc($result);
        if ($email === $row['email'] && $new_password === $row['password'] ) {
            return $row;
        }else {          
            echo "ERROR dd: " . mysqli_error($this->conn);
        }
    }
    // function select users on database
    public function select1($sql){    
        $result = mysqli_query($this->conn,$sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
       
       return $data;
    }
    // function select tiket on database
   
    public function select_tiket($sql){
        $result = mysqli_query($this->conn,$sql);
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
       
       return $data;

    }

}




?>