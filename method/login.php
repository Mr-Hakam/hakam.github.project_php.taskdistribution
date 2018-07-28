<?php



class login {
    
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

    
    
    public function login_check($data){
        $password=md5($data['password']);
        $sql="SELECT * FROM tbl_login WHERE email='$data[email]' and password='$password'";
        $query_Result= mysqli_query($this->connection, $sql);
        $login_info = mysqli_fetch_assoc($query_Result);
            $_SESSION['designation']=$login_info['designation'];
        if ($login_info && $_SESSION['designation'] == 'admin') {
            session_start();
            $_SESSION['id']=$login_info['id'];
            $_SESSION['name']=$login_info['name'];
            header('Location:admin_home.php');
        } else if($login_info && $_SESSION['designation'] == 'officer'){
            session_start();
            $_SESSION['id']=$login_info['id'];
            $_SESSION['name']=$login_info['name'];
            $_SESSION['designation']=$login_info['designation'];
            header('Location:officer_home.php');
        }
 else {
            header('Location:index.php');
 }
    }
    
    public function logoutdiv(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:../../index.php');
    }

        public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location:index.php');
    }
}
