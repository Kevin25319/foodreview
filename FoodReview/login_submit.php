<?php
    session_start();
    include 'config.php';
    if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username= '$username' AND password= '$password'";
        $user = mysqli_query($conn , $sql);
        $sql_row_user = mysqli_fetch_assoc($user);
       
        if(mysqli_num_rows($user) > 0){
            $_SESSION["user"] = $sql_row_user;
            header('location:Đăng Nhập.php');
            header('location:User.php');

        }else{
            echo "Sai tài khoản hoặc mật khẩu, vui lòng nhập lại!";
        }
    }
?>
<a href="GoFood.php"> Trở lại </a>