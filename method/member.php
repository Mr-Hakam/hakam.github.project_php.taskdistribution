<?php
class member {
    
    
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
    
    public function select_all_member_info(){
        $sql="SELECT * FROM tbl_login";
        if(mysqli_query($this->connection, $sql)){
            $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    public function delete_member_info($id){
        $sql="DELETE FROM tbl_login WHERE id='$id'";
        if(mysqli_query($this->connection, $sql)){
            $message="Member info delete successfully!!";
            return $message;
        }
        else{
            die("Query Problem".mysqli_errno($this->connection));
        }
    }
    
    
}
