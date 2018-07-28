<?php
class postAndView {
    
    
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
    
//    public function save_Common_home_content($data) {
//        $sqlc = "INSERT INTO common_home_content(title, subtitle, details) VALUES ('$data[title]','$data[subtitle]','$data[details]')";
//        if (mysqli_query($this->connection, $sqlc)) {
//            $message = "Post successfully";
//            return $message;
//        } else {
//            die('Query problem' . mysqli_error($this->connection));
//        }
//    }

    public function save_Notice_Board_content($data){
        $sql = "INSERT INTO tbl_notice_board_content(title, subtitle, details) VALUES ('$data[title]','$data[subtitle]','$data[details]')";
        if (mysqli_query($this->connection, $sql)) {
            $message = "Post successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }
    
    
    public function showCommonHomeContent(){
        $sql="SELECT * FROM common_home_content,tbl_login ORDER BY com_id DESC";
        if(mysqli_query($this->connection, $sql)){
            $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }
    }
    
    
    public function selectContentInfoById($com_id){
        $sql="SELECT * FROM common_home_content WHERE com_id ='$com_id'";
        if(mysqli_query($this->connection, $sql)){
            $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }
    }
    
    public function showNoticeBoardContent(){
        $sql="SELECT * FROM tbl_notice_board_content,tbl_login ORDER BY notic_id DESC";
        if(mysqli_query($this->connection, $sql)){
            $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }
    }
    
    public function selectNoticeContentById($id){
         $sql="SELECT * FROM tbl_notice_board_content WHERE notic_id ='$id'";
        if(mysqli_query($this->connection, $sql)){
            $query_result= mysqli_query($this->connection, $sql);
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->connection));
        }
    }

}
