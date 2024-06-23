<?php
    session_start();
    include 'config_admin.php';
    if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        
        $username = $_POST["username"];

        if(isset($_POST["ghinho"])){
            setcookie("username" ,$username);
            setcookie("password" ,$_POST["password"]);
        }
        $password = md5($_POST["password"]);
        $sql = "SELECT * FROM admin WHERE username= '$username' AND password= '$password'";
        $admin = mysqli_query($conn , $sql);
        $sql_row_admin = mysqli_fetch_assoc($admin);
        if(mysqli_num_rows($admin) > 0){
            $_SESSION["admin"] = $sql_row_admin;
            header('location:admin.php');

        }else{
            echo "Sai tài khoản hoặc mật khẩu, vui lòng nhập lại!";
        }
    }
    $username ="";
    $password ="";
    $check = false;
    if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){
        $username = $_COOKIE["username"];
        $password = $_COOKIE["password"];
        $check = true;
    }
?>
<a style="text-decoration: none; color: #607D8B; font-weight: 600;" href="loginadmin.php"> Trở lại </a>
