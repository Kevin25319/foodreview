<?php
    include('config.php');
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $noidung = $_POST['noidung'];


    $connection = new PDO("mysql:host=127.0.0.1;dbname=vidu;charset=utf8","root","");
    $query = "INSERT into lienhe (username,phone,email,noidung) values('$username','$phone','$email','$noidung')";
    $stmt = $connection->prepare($query);
    $stmt->execute();

    header('location: lienhe.php');
?>