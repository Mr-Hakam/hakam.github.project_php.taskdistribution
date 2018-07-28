<?php


class task_Processing {
    
    
    
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
    
    
    
    public function task_to_processing($data){
        $sql = "INSERT INTO tbl_taskdistribution_toprocessing (task_id,topic,description,name,file) "
                . "SELECT task_id,topic,description,name,file FROM tbl_taskdistribution "
                . "WHERE task_id = '{$_SESSION['transfer_id']}'";
        mysqli_query($this->connection, $sql);
           $delete = "DELETE FROM tbl_taskdistribution WHERE task_id = '{$_SESSION['transfer_id']}'";
           
        mysqli_query($this->connection, $delete);
        
    }
    
    public function task_toBe_done($data){
        $sql = "INSERT INTO tbl_task_done (task_processing_id,task_id,topic,description,name,file) "
                . "SELECT task_processing_id,task_id,topic,description,name,file FROM tbl_taskdistribution_toprocessing "
                . "WHERE task_processing_id = '{$_SESSION['task_processing_id']}'";
        mysqli_query($this->connection, $sql);
           $delete = "DELETE FROM tbl_taskdistribution_toprocessing WHERE task_processing_id = '{$_SESSION['task_processing_id']}'";
           
        mysqli_query($this->connection, $delete);
    }
}
