<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $id = $_POST['user-id'];

    $connection = new PDO("mysql:host=127.0.0.1;dbname=vidu;charset=utf8","root","");
    $query = "update user set username='$username',password= '$password' where id=$id";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $user = $stmt->fetch();

    header('location: adminuser.php');
?>