<?php
session_start();
if(isset($_SESSION['id'])){
    if ($_SESSION['id'] != NULL) {
        if ($_SESSION['id'] == '1') {
            header('Location:admin_home.php');
        }
        if ($_SESSION['id'] !=='1') {
            header('Location:officer_home.php');
        }
    }
}
if(isset($_POST['btn'])){
    require_once './method/login.php';
    $login = new login();
    $login->login_check($_POST);
    
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login|Home</title>
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="Bootstrap/css/my_style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="index_body">
        <div class="index_login_user">
            <img src="image/user-icon.jpg" class="user" style="height: 100px; width: 100px; border-radius: 50%;">
            <h2 class="index_login_h2">Please, Log In Here</h2>
            <form action="" method="POST">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email">
                <p>Password</p>
                <input type="password" name="password" placeholder="********">
<!--                <p>Designation</p>
                <select name="designation">
                    <option value="selection">- Select Designation -</option>
                    <option value="officer">Officer</option>
                    <option value="admin">Admin</option>
                </select>-->
                <input type="submit" name="btn" value="Sign In"/>
                <a href="#">Forget Password</a>
            </form>
        </div>
        
        <script src="Bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
