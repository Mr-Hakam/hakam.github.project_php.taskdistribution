<?php

class edit_task {
    
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
    
    
    public function showTaskInfo($task_id){
        $sql = "SELECT * FROM tbl_taskdistribution WHERE task_id ='$task_id'";
        if(mysqli_query($this->connection, $sql)){
            $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die('Query Problem in editing pages'.mysqli_error($this->connection));
        }
    }
    
    public function update_task($data){
        $sql = "UPDATE tbl_taskdistribution SET topic = '$data[topic]', description = '$data[description]', name = '$data[name]', file = '$data[file]' WHERE task_id = '$data[task_id]'";
        if(mysqli_query($this->connection, $sql)){
            header('Location:pendingToOthers.php');
        }else{
            die('Query Problem in editing pages'.mysqli_error($this->connection));
        }
    }
}
