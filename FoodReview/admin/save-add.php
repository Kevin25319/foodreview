<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    $connection = new PDO("mysql:host=127.0.0.1;dbname=vidu;charset=utf8","root","");
    $query = "INSERT into user (username,password) values('$username','$password')";
    $stmt = $connection->prepare($query);
    $stmt->execute();

    header('location: adminuser.php');
?>