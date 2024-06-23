<?php
	if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        
        $username = $_POST["username"];

        if(isset($_POST["ghinho"])){
            setcookie("username" ,$username);
            setcookie("password" ,$_POST["password"]);
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewpot" content="width=device-width , inital-scale=1,0">
	<link rel="stylesheet" type="text/css" href="">
	<title>Đăng nhập</title>
</head>
<style>
@import url('http://font.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900display=swap')
*
{
	margin:0;
	padding:0;
	font-family:'Popins' , sans-serif;
	box-sizing: border-box;
}
section
{
	position: relative;
	width: 100%;
	height: 100vh;
	display: flex;
}
section .imgBx{
	position: relative;
	width: 70%;
	height: 100%;
}
section .imgBx:before
{
	content:'';
	position: absolute;
	top: 0;
	left:0;
	width: 100%;
	height: 100%;
	background: linear-gradient(225deg,#e91e63,#03a9f4);
	z-index: 1;
	mix-blend-mode: screen;
}
section .imgBx img
{
	position: absolute;
	top: 0;
	left:0;
	width: 100%;
	height: 100%;
	object-fit:cover;
}
section .contentBx
{
	justify-content:center;
	align-items: center;
	display: flex;
	width :50%;
	height: 100%;
}
section .contentBx .formBx
{
	width: 50%;
}
section .contentBx .formBx h2
{
	color : #607d8b;
	font-size: 1.5em;
	font-weight: 600;
	text-transform: uppercase;
	margin-bottom: 20px;
	border-bottom: 4px solid #ff4584;
	display: inline-block;
	letter-spacing: 1px;
}
section .contentBx .formBx .inputBx
{
	margin-bottom: 20px;
}
section .contentBx .formBx .inputBx span
{
	font-size: 16px;
	margin-bottom: 5px;
	display:inline-block;
	color: #607d8b;
	font-weight: 300;
	font-size: 16px;
	letter-spacing:1px;
}
section .contentBx .formBx .inputBx input 
{
	width:100%;
	padding:10px 20px;
	outline: none;
	font-weight: 400;
	border:1px solid #607d8b;
	font-size: 16px;
	letter-spacing: 1px;
	color:#607d8b;
	background: transparent;
	border-radius: 30px;
}
section .contentBx .formBx .inputBx input[type="submit"]
{
	background:#ff4584;
	color:#fff;
	outline: none;
	border: none;
	font-weight: 500;
	cursor: pointer;
}
section .contentBx .formBx .inputBx input[type="submit"]:hover
{
	background-color: pink;
}
section .contentBx .formBx .remember
{
	margin-bottom: 10px;
	color: #607d8b;
	font-weight: 400;
	font-size: 14px;
}
section .contentBx .formBx .remember p
{
	color: #607d8b;
}
section .contentBx .formBx .remember p a
{
	color: #ff4584;
}
.iconx
{
	height: 50px;
	margin-left:40px; 
}
section .contentBx .formBx h3
{
	color: #607d8b;
	text-align: center;
	margin:50px 0 20px;
	/*font-weight: 400;*/
}
section .contentBx .formBx .sci
{
	display: flex;
	justify-content: center;
	align-items: center;
}
section .contentBx .formBx .sci li
{
	list-style:none;
	width: 100px;
	height: 50px;
	display:flex;
	justify-content: center;
	align-items: center;
	margin-left: -70px;
}
/*.a{
	height: 60px;
	margin-left: 135px;
}*/
</style>

<body>
	<section>
		<div class="imgBx">
			<img src="./img/aaa1.jpg">
		</div>
		<div class="contentBx">
			<div class="formBx">
				<h2>Đăng nhập</h2>
				<form action="login_submit_admin.php" method="POST">
					<div class="inputBx">
						<span>Tên đăng nhập</span>
						<input type="text" name="username" required="" value="<?php echo $username ?>">
					</div>
					<div class="inputBx">
						<span>Mật khẩu</span>
						<input type="password" name="password" required="" value="<?php echo $password ?>">
					</div>
					<div class="remember">
						<label><input <?php echo ($check)?"checked":"" ?> type="checkbox" name="ghinho" value="1">Ghi nhớ đăng nhập</label>
					</div>
					<div class="inputBx">
						<input type="submit" value="Đăng nhập" name="submit">
					</div>
					<div class="inputBx">
						<a  style="text-decoration: none; color: #607D8B; font-weight: 600;" href="registeradmin.php">Đăng ký Tài Khoản Quản Trị</a>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>