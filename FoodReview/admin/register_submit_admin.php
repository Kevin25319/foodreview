<?php
    include 'config_admin.php';
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $level = 0;
        if($password != $repassword){
            header("location:registeradmin.php");
        }
        $sql = "SELECT * FROM admin WHERE username = 'username'";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if(mysqli_num_rows($old) > 0 ) {
            header("location:registeradmin.php");
        }
        $sql = "INSERT INTO admin (username,password,level) VALUE ('$username','$password','$level')" ;
        mysqli_query($conn,$sql);
        echo "Đăng ký thành công!";
    }else{
        header("location:registeradmin.php");
    }
?>
<a style="text-decoration: none; color: #607D8B; font-weight: 600; " href="loginadmin.php"> Đăng Nhập </a> <font style="color: black; font-weight: 600; font-size: 20px;"> | </font>
<a style="text-decoration: none; color: #607D8B; font-weight: 600;" href="registeradmin.php"> Trở lại </a>
