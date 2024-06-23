<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'vidu';

function initDataMienBac(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    
   for ($i=0; $i < 20; $i++) { 
    $sqlmienbac = 'insert into pagemienbac (image, title, username, location, price, introduce) values 
    ("https://images.foody.vn/res/g5/47223/s/foody-co-tuan-bun-bo-hu-tiu-xa-xiu-chien-355-636377015181959458.jpg","Quán có thực sự ngon như lời đồn","Quán cô Tuân","223 Đống Đa, Quận Hải Châu, Đà Nẵng","50000đ ~ 70000đ","Quán ăn sạch sẽ, ăn rất vừa miệng, vừa túi tiền")';
    mysqli_query($conn, $sqlmienbac);
   }
    mysqli_close($conn);
}
function excuteResultMienBac($sqlmienbac){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    
    $data = [];
    $result = mysqli_query($conn, $sqlmienbac);
    if($result != null){
        while ($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
        }
    
    }
    mysqli_close($conn);
    return $data;
}

function excuteResultMienNam($sqlmiennam){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    
    $data = [];
    $result = mysqli_query($conn, $sqlmiennam);
    if($result != null){
        while ($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
        }
    
    }
    mysqli_close($conn);
    return $data;
}
function initDataMienNam(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    
   for ($i=0; $i < 20; $i++) { 
    $sql = 'insert into pagemiennam (image, title, username, location, price, introduce) values 
    ("https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/08/pho-bat-dan.png","Phở Thìn hay Phở Bát Đàn ngon hơn","Phở Bát Đàn","49 Bát Đàn", "40000đ ~ 60000đ", "Quán có nước lèo rất ngon, nhưng hơi béo, nếu ăn phải ăn nhanh nếu không sẽ bị ngán. Quán ăn rất đông, phục vụ rất tốt.")';
    mysqli_query($conn, $sql);
   }
    mysqli_close($conn);
}


function excuteResultMienTrung($sqlmientrung){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    $data = [];
    $result = mysqli_query($conn, $sqlmientrung);
    $row = null;
    if($result != null){
        while ($row = mysqli_fetch_array($result, 1)) {
            $data[] = $row;
        }
    
    }
    mysqli_close($conn);
    return $data;
}
function initDataMienTrung(){
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    
   for ($i=0; $i < 20; $i++) { 
    $sql = 'insert into pagemientrung (image, title, username, location, price, introduce) values 
    ("https://images.foody.vn/res/g97/964342/prof/s750x400/foody-upload-api-foody-mobile-466032643124d87a8135-191002155804.jpg","Quán này có thực sự ngon như lời đồn","Minh Quân","223 Đống Đa, Quận Hải Châu, Đà Nẵng","20000d ~ 50000d","Đây là quán coffee dành cho giới trẻ, với không gian hiện đại, sạch sẽ, rộng rãi, đồ ăn thức uống lại vừa túi tiền.  Đặc biệt ở đây còn là quán coffee đầu tiên ở Đà Nẵng mở cửa 24/7.")';
    mysqli_query($conn, $sql);
   }
    mysqli_close($conn);
}