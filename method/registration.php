<?php


class registration {
    
    protected $connection;
    public function __construct() {
         $host_name = 'localhost';
        $user_name = 'root';
        $password = "";
        $db_name = 'db_myoffice';
        $this->connection = mysqli_connect($host_name,$user_name,$password,$db_name);
        if (!$this->connection) {
            die('Connection Fail' . mysqli_error($this->connection));
        }
    }
    
    
    public function regOfficer($data){
        $password=md5($data['password']);
        $sql="INSERT INTO  tbl_login(name, email, password, designation) VALUES ('$data[name]', '$data[email]', '$password', '$data[designation]')";
        if(mysqli_query($this->connection, $sql)){
            $message="Registration Complete!!";
            return $message;
        }
 else {
     die("Query Problem".mysqli_errno($this->connection));
 }
    }
}
