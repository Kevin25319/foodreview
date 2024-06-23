<?php
session_start();
require_once('database.php');
$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
$id_baiviet = $_GET['id'];
$sql = "select * from pagemiennam where id=$id_baiviet";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bài Viết</title>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="main2.css">
	<link rel="stylesheet" type="text/css" href="base.css">
	<link rel="stylesheet" type="text/css" href="grid.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subset=vietnamese" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="tonghop.css">
</head>
<body>
	<div class="app">
		<header class="header">
			<div class="grid wide">
				<nav class="header__navbar hide-on-mobile-tablet">
				<ul class="header__navbar-list">
					<li class="header__navbar-item header__navbar-item--has-qr">Vào cửa hàng trên ứng dụng VN Food
					<div class="header__qr">
						<img src="./ảnh/qrcode.png" alt="QR code" class="header__qr-img">
						<div class="header__qr-apps">
							<a class="header__qr-link" style="margin-left: 11px">
								<img src="./ảnh/googleplay.png" alt="Google Play"class="header__qr-dowload-img">
							</a>
							<a class="header__qr-link" style="margin-right: 11px">
								<img src="./ảnh/appstore.png" alt="App Store" class="header__qr-dowload-img">
							</a>
						</div>
					</div>
					</li>
					<font color="white" size="5"> | </font>
					<span class="header__navbar-title--no-pointer">Kết nối
					<a href="https://www.facebook.com/groups/157765546282950" class="header__navbar-icon-link">
						<i class="header__navbar-icon fab fa-facebook" ></i>
					</a>
					<a class="header__navbar-icon-link">
						<i class="header__navbar-icon fab fa-instagram"></i>
					</a>
				</span>
				</ul>
				<ul class="header__navbar-list">
					<li class="header__navbar-item header__navbar-item--has-notify">
						<a href="" class="header__navbar-item-link">
						<i class="header__navbar-icon far fa-bell"></i>
					Thông báo
				</a>
				<!--Nút thông báo-->
				<div class="header__notify">
					<header class="header__notify-header">
						<h3>
							Thông báo mới nhận được
						</h3>
					</header>
					<ul class="header__notify-list">
						<li class="header__notify-item header__notify-item--viewed">
							<a href="https://www.foody.vn/da-nang/bong-food-drink-ton-duc-thang" class="header__notify-link">
								<img src="./ảnh/bong.png" alt="" class="header__notify-img">
								<div class="header__notify-info">
									<span class="header__notify-name">Trà sữa bông vừa mới mở thêm 1 cơ sở mới</span>
									<span class="header__notify-descriotion">Mô tả thêm về cơ sở này</span>
								</div>
							</a>
						</li>
						<li class="header__notify-item header__notify-item--viewed">
							<a href="https://www.foody.vn/da-nang/que-xua-my-quang-banh-trang-thit-heo" class="header__notify-link">
								<img src="./ảnh/quexua.jpg" alt="" class="header__notify-img">
								<div class="header__notify-info">
									<span class="header__notify-name">Quê Xưa cơ sở 2 có tốt như cơ sở 1?</span> 
									<span class="header__notify-descriotion">Xem bình luận chi tiết</span>
								</div>
							</a>
						</li>
						<li class="header__notify-item header__notify-item--viewed">
							<a href="https://www.foody.vn/da-nang/the-cups-coffee-phan-dang-luu" class="header__notify-link">
								<img src="./ảnh/cupcoffee.png" alt="" class="header__notify-img">
								<div class="header__notify-info">
									<span class="header__notify-name">The Cups Coffee phan đăng lưu vừa có combo mới phù hợp cho gia đình </span>
									<span class="header__notify-descriotion">Mô tả chi tiết về combo</span>
								</div>
							</a>
						</li>
					</ul>
					<footer class="header__notify-footer">
						<a href="" class="header__notify-footer-btn">Xem tất cả</a>
					</footer>
				</div>
					</li>
					<li class="header__navbar-item">
						<a href="" class="header__navbar-item-link"><i class="header__navbar-icon far fa-question-circle"></i>
						Trợ giúp
					</a>
					</li>
                    <li class="header__navbar-item header__navbar-user">
                        <img src="https://yt3.ggpht.com/yti/ANoDKi5alhvbQB4op_nZ0f8JhvbBv0-KVFYa36q40g=s88-c-k-c0x00ffffff-no-rj-mo" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name">
							<?php if(isset($_SESSION["user"])){
								echo strtoupper($_SESSION["user"]["username"]);
							} ?>
						</span>

                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <a href="">Tài khoản của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="">Địa chỉ của tôi</a>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item--separate">
                                <a href="index.php">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
				</ul>
				</nav>
				
				<div class="header-with-search">
					<label for="header__mobile-input" class="header__bars-btn">
						<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
					</label>

					
					<input type="checkbox" hidden name="" class="header__input" id="header__mobile-input">
					

					<label for="header__mobile-input" class="header__overlay"></label>
					<nav class="header__mobile">
						<label for="header__mobile-input" class="header__mobile-close">
							<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>
						</label>
						<ul class="header__mobile-list">
							<li>
								<a href="" class="header__mobile-link">Thông tin tài khoản</a>
							</li>
							<li>
								<a href="" class="header__mobile-link">Trợ giúp</a>
							</li>
							<li>
								<a href="index.php" class="header__mobile-link ">Đăng xuất</a>
							</li>
						</ul>
					</nav>
					<label for="mobile-search-checkbox" class="header__mobile-search">
						<i class="header__mobile-search-icon fas fa-search"></i>
					</label>

					<div class="header__logo">
						<a href="User.php" class="header__logo-link">
							<img src="./ảnh/pic3.png" alt="" class="header__logo-img">
						</a>
					</div>

					<input type="checkbox" hidden  id="mobile-search-checkbox" class="header__search-checkbox">

					<div class="header__search hide-on-mobile-tablet">
						<div class="header__search-input-wrap">
							<input type="text" class="header__search-input" placeholder="Tìm nhà hàng, món ăn, thức uống" >
							<div class="header__search-history">
								<h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
								<ul class="header__search-history-list">
									<li class="header__search-history-item">
										<a href="" class="">Mì quảng</a>
									</li>
									<li class="header__search-history-item">
										<a href="" class="">ABC bakery</a>
									</li>
									<li class="header__search-history-item">
										<a href="" class="">Cà Phê Trứng</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="header__search-select">
							<span class="header__search-select-label">Đà Nẵng</span>
							<i class="header__search-select-icon fas fa-caret-down"></i>

							<ul class="header__search-option">
								<li class="header__search-option-item header__search-option-item--active">
									<span>Hà Nội</span>
									<i class="fas fa-check"></i>
								</li>
								<li class="header__search-option-item header__search-option-item--active">
									<span>Hồ Chí Minh</span>
									<i class="fas fa-check"></i>
								</li>
							</ul>
						</div>
						<button class="header__search-btn">
							<i class="header__search-btn-icon fas fa-search"></i>
						</button>
					</div>
                    <div class="header__cart">
						<div class="header__cart-wrap">
							<div class="header__cart-icon">Đặc Sản</div>
							<div class="header__cart-list header__cart-list--no-cart">
								<ul class="header__cart-list-item">
									<li class="header__cart-item">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<a class="header__cart-item-name" href="MienBac.php">Miền Bắc</a>
											</div>
										</div>
									</li>
									<li class="header__cart-item">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<a  href="MienTrung.php" class="header__cart-item-name"  href="">Miền Trung</a>
											</div>
										</div>
									</li>
									<li class="header__cart-item">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<a  href="MienNam.php" class="header__cart-item-name"  href="">Miền Nam</a>
											</div>
										</div>
									</li>
								</ul>
							
							</div>
						</div>
					</div>
					
				</div>
			</div>

			
	<div class="abcabc">
      <div class="div1">
        <div class="container-left">
          <div class="big-img"><img src="<?php echo $row['image'] ?>" style="max-width:95%;"></img></div>
        </div>
      </div>
      <div class="div2">
        <div class="container-right">
          <h1>
            <?php echo $row['username'];?>
          </h1>
          <hr style="margin: 20px 0" />
		  <h3 style="color: #3399ff; font-size: 22px;">Giá thành : <?php echo $row['price'];?></h3>
          <hr style="margin: 20px 0" />
		  <ul><h3 style="font-size: 22px;">Địa chỉ : </h3>
			  <li style="margin-left:100px;margin-top:-24px;list-style: none; font-weight:600"><?php echo $row['location'];?></li>
		  </ul>
		  <h3 style="padding-top: 10px; font-size: 22px;">Giới thiệu : 
		  	<h4 style="font-size: 18px; padding-top: 10px; padding-left: 10px">- <?php echo $row['introduce'];?></h4>
		  </h3>
        </div>
      </div>
    </div>
	
		
		<footer class="footer">
			<div class="grid wide">
				<div class="row">
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">CHĂM SÓC KHÁCH HÀNG</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="" class="footer-item__link">Trung tâm trợ giúp</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">VN Food Mail</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
							</li>
						</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">GIỚI THIỆU</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="Giới Thiệu Web.php" class="footer-item__link">Giới thiệu về VN Food</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Tuyển dụng</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">Điều khoản VN Food</a>
							</li>
						</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">DANH MỤC</h3>
							<ul class="footer-list">
								<li class="footer-item">
									<a href="" class="footer-item__link">Đồ ăn</a>
								</li>
								<li class="footer-item">
									<a href="" class="footer-item__link">Đồ uống</a>
								</li>
								<li class="footer-item">
									<a href="" class="footer-item__link">Vỉa hè</a>
								</li>
								<li class="footer-item">
									<a href="" class="footer-item__link">Đồ chay</a>
								</li>
								<li class="footer-item">
									<a href="" class="footer-item__link">Món lẩu</a>
								</li>
							</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">THEO DÕI CHÚNG TÔI TRÊN</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="https://www.facebook.com/groups/157765546282950" class="footer-item__link">
									<i class="footer-item__icon fab fa-facebook"></i>
									Facebook
								</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-instagram"></i>
									Instagram
								</a>
							</li>
							<li class="footer-item">
								<a href="" class="footer-item__link">
									<i class="footer-item__icon fab fa-linkedin-in"></i>
									Linkedin
								</a>
							</li>
						</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">VÀO CỬA HÀNG TRÊN ỨNG DỤNG</h3>
						<div class="footer__dowload">
							<img src="./ảnh/qrcode.png" alt="Dowload QR" class="footer__dowload-qr">
							<div class="footer__dowload-apps">
								<a href="" class="footer__dowload-app-link">
									<img src="./ảnh/appstore.png" alt="App Store" class="footer__dowload-app-img">
									<img src="./ảnh/googleplay.png" alt="Google Play" class="footer__dowload-app-img">
								</a>		
							</div>
						</div>
					</div>
				</div>
			</div>						
		</footer>
	</div>

	<div class="modal">
		<div class="modal__overlay">
		</div>
		<div class="modal__body">
		</div>
	</div>

	<!-- <script src="./tonghop.js"></script> -->

	</body>
</html>