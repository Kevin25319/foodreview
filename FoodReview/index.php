<?php
require_once('database.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>VN Food</title>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="./https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="/DoAnCoSo/main.css">
	<link rel="stylesheet" type="text/css" href="/DoAnCoSo/base.css">
	<link rel="stylesheet" type="text/css" href="/DoAnCoSo/grid.css">
	<link rel="stylesheet" type="text/css" href="/DoAnCoSo/responsive.css">
	<link rel="stylesheet" type="text/css" href="/DoAnCoSo/fontawesome-free-5.15/css/all.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subset=vietnamese" rel="stylesheet">
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
					<a href="https://www.facebook.com/profile.php?id=100067329441635&show_switched_toast=true" class="header__navbar-icon-link">
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
					<a href="Đăng Ký.php" class="header__navbar-item header__navbar-item--strong">Đăng ký</a>
					<font color="white" size="5"> | </font>
					<a href="Đăng Nhập.php" class="header__navbar-item header__navbar-item--strong">Đăng nhập</a>
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
								<a href="Đăng Ký.php" class="header__mobile-link">Đăng ký</a>
							</li>
							<li>
								<a href="Đăng Nhập.php" class="header__mobile-link">Đăng nhập</a>
							</li>
							<li>
								<a href="" class="header__mobile-link">Cài đặt</a>
							</li>
						</ul>
					</nav>
					<label for="mobile-search-checkbox" class="header__mobile-search">
						<i class="header__mobile-search-icon fas fa-search"></i>
					</label>

					<div class="header__logo">
						<a href="index.php" class="header__logo-link">
							<img src="./ảnh/pic3.png" alt="" class="header__logo-img">
						</a>
					</div>

					<input type="checkbox" hidden  id="mobile-search-checkbox" class="header__search-checkbox">

					<div class="header__search">
						<div class="header__search-input-wrap">
							<input type="text" class="header__search-input" placeholder="Tìm bài viết liên quan tới món, địa điểm" >
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
												<a href="Đăng Nhập.php" class="header__cart-item-name" href="">Miền Bắc</a>
											</div>
										</div>
									</li>
									<li class="header__cart-item">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<a  href="Đăng Nhập.php" class="header__cart-item-name"  href="">Miền Trung</a>
											</div>
										</div>
									</li>
									<li class="header__cart-item">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<a  href="Đăng Nhập.php" class="header__cart-item-name"  href="">Miền Nam</a>
											</div>
										</div>
									</li>
								</ul>
							
							</div>
						</div>
					</div>

					
				</div>
			</div>
			<ul class="header__sort-bar">
				<li class="header__sort-item">
					<a href="" class="header__sort-link">Đánh giá</a>
				</li>
				<li class="header__sort-item header__sort-item--active">
					<a href="" class="header__sort-link">Gần tôi</a>
				</li>
				<li class="header__sort-item">
					<a href="" class="header__sort-link">Bán chạy</a>
				</li>
				<li class="header__sort-item">
					<a href="" class="header__sort-link">Giá</a>
				</li>
			</ul>
		</header>
		<div class="contain">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<!-- <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol> -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/263331621_1128091971296792_5738915994279814452_n.png?_nc_cat=111&ccb=1-5&_nc_sid=aee45a&_nc_ohc=m6-G_27CEm0AX9nKI1O&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=b8e47e0d3548a0b43d60202900bae0ea&oe=61CC5D3C" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-2.jpg" style="width: 100%;" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-4.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-5.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only"></span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
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
								<a href="" class="footer-item__link">Hướng dẫn viết bài viết</a>
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
					<h3 class="footer__heading">ĐẶC SẢN</h3>
							<ul class="footer-list">
								<li class="footer-item">
									<a href="" class="footer-item__link">Miền Bắc</a>
								</li>
								<li class="footer-item">
									<a href="" class="footer-item__link">Miền Trung</a>
								</li>
								<li class="footer-item">
									<a href="" class="footer-item__link">Miền Nam</a>
								</li>
							</ul>
					</div>
					<div class="col l-2-4 m-4 c-6">
						<h3 class="footer__heading">THEO DÕI CHÚNG TÔI TRÊN</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a href="https://www.facebook.com/profile.php?id=100067329441635&show_switched_toast=true" class="footer-item__link">
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
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>