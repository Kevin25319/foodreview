<?php
    $title = $_POST['title'];
    $image = $_POST['image'];
    $location = $_POST['location'];
    $price = $_POST['price'];
    $introduce = $_POST['introduce'];
    $id = $_POST['user-id'];

    $connection = new PDO("mysql:host=127.0.0.1;dbname=vidu;charset=utf8","root","");
    $query = "update pagemiennam set title='$title',image='$image' , location= '$location', price= '$price', introduce= '$introduce' where id=$id";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $pagemiennam = $stmt->fetch();

    header('location: adminpagemiennam.php');
?>