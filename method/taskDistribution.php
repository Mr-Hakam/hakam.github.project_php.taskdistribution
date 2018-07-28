<?php
class taskDistribution {
    
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

    public function loadPersonName(){
        $sql="SELECT id, name, designation FROM tbl_login";
        if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    public function saveTaskDistribution($data){
       
        $sql = "INSERT INTO tbl_taskdistribution (topic, description, name, file) VALUES ('$data[topic]','$data[description]','$data[name]', '$data[file]')";
        if (mysqli_query($this->connection, $sql)) {
            $message = "Distribution Completed";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }
    
    public function showPandingJobtoOther(){
        $sql = "SELECT * FROM tbl_taskdistribution_toprocessing JOIN tbl_login ON tbl_taskdistribution_toprocessing.name = tbl_login.name";
         if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    public function showNewJob(){
        $sql = "SELECT * FROM tbl_taskdistribution JOIN tbl_login ON tbl_taskdistribution.name = tbl_login.name";
         if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    public function showNewJobemployee(){
        $sql = "SELECT * FROM tbl_taskdistribution JOIN tbl_login ON tbl_taskdistribution.name = tbl_login.name WHERE tbl_taskdistribution.name='".$_SESSION['name']."'";
         if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }

    

    public function showPandingJob_myself(){
        $sql = "SELECT * FROM tbl_taskdistribution_toprocessing JOIN tbl_login ON tbl_taskdistribution_toprocessing.name = tbl_login.name WHERE tbl_taskdistribution_toprocessing.name = '".$_SESSION['name']."'";
        if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    
    public function delete_task_info($id){
        $sql="DELETE FROM tbl_taskdistribution WHERE task_id='$id'";
        if(mysqli_query($this->connection, $sql)){
            $message="Task info delete successfully!!";
            return $message;
        }
        else{
            die("Query Problem".mysqli_errno($this->connection));
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
    
    
    public function showProcessJob(){
        $sql = "SELECT * FROM tbl_taskdistribution_toprocessing JOIN tbl_login ON tbl_taskdistribution_toprocessing.name = tbl_login.name WHERE tbl_taskdistribution_toprocessing.name = '".$_SESSION['name']."'";
        if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    
    public function showtotalDistributedJob(){
        $sql = "SELECT * FROM tbl_taskdistribution JOIN tbl_login ON tbl_taskdistribution.name = tbl_login.name";
        if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    public function showDoneJob(){
        $sql = "SELECT * FROM tbl_task_done JOIN tbl_login ON tbl_task_done.name = tbl_login.name";
        if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    public function showDoneJobEmployee(){
        $sql = "SELECT * FROM tbl_task_done JOIN tbl_login ON tbl_task_done.name = tbl_login.name WHERE tbl_task_done.name = '".$_SESSION['name']."'";
        if(mysqli_query($this->connection, $sql)){
               $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die("Query Problem".mysqli_error($this->connection));
        }
    }
    
    
}
