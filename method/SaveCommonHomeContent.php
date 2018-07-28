<?php

class SaveCommonHomeContent {
    //put your code here
    
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
    
    
    
     public function save_Common_home_content($data) {
        $sql = "INSERT INTO common_home_content(title, subtitle, details)"
                . " VALUES ('$data[title]','$data[subtitle]','$data[details]')";
        if (mysqli_query($this->connection, $sql)) {
            $message = "Post successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }
    
}
