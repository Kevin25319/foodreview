<?php
require_once('database.php');
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>MienTrung</title>
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
						<a href="lienhe.php" class="header__navbar-item-link"><i class="header__navbar-icon far fa-question-circle"></i>
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
								<a href="lienhe.php" class="header__mobile-link">Trợ giúp</a>
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
					<form method="get" style="width: 79%;">
						<div class="header__search-input-wrap">
							<input type="text" class="header__search-input" placeholder="Tìm nhà hàng, món ăn, thức uống" id="s" name="s">
							<!-- <div class="header__search-history">
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
							</div> -->
						</div>
					</form>
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
												<a href="MienBac.php" class="header__cart-item-name" href="">Miền Bắc</a>
											</div>
										</div>
									</li>
									<li class="header__cart-item">
										<div class="header__cart-item-info">
											<div class="header__cart-item-head">
												<a  href="#" class="header__cart-item-name"  href="">Miền Trung</a>
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
		<div class="app__container">
			<div class="grid wide">
				<div class="row app__content">
                    <div class="col l-2 m-0 c-0">
						<nav class="category">
							<h3 class="category__heading">
								<i class="category__heading-icon fas fa-list-ul"></i>
								Các tỉnh ở miền Trung
							</h3>
			
							<ul class="category-list">
								<li class="category-item category-item--active">
									<a href="" class="category-item__link">Đà Nẵng</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Thanh Hóa</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Nghệ An</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Hà Tĩnh</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Quảng Bình</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Quảng Trị</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Thừa Thiên Huế</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Quảng Nam</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Quảng Ngãi</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Bình Định</a>
								</li>
								<li class="category-item">
									<a href="" class="category-item__link">Phú Yên</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Khánh Hòa</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Ninh Thuận</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Bình Thuận</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Kon Tum</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Gia Lai</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Đắk lắk</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Đắk Nông</a>
								</li>
                                <li class="category-item">
									<a href="" class="category-item__link">Lâm Đồng</a>
								</li>
							</ul>
						</nav>
					</div>
					<!--Toàn bộ Sản phẩm-->
					<div  class="col l-10 m-12 c-12">
						<div class="home-filter hide-on-mobile-tablet">
							<span class="home-filter__label">Sắp xếp theo</span>
							<a href="" class="home-filter__btn btn">Đánh giá</a>
							<a href="" class="home-filter__btn btn btn--primary">Gần tôi</a>
							<a href="" class="home-filter__btn btn">Bán chạy</a>

						</div>

						<div class="home-product">
							<div class="row sm-gutter">
								<?php
								$additional='';
								$s = '';
								if(isset($_GET['s'])){
									$s = $_GET['s'];
								}
								if(!empty($s)){
								$additional = 'and username like "%'.$s.'%"';}
								$sqlmientrung = 'select count(id) as number from pagemientrung where 1' .$additional;
								$result = excuteResultMienTrung($sqlmientrung);
								$number = 0;
								if ($result != null && count($result)>0) {
									$number = $result[0]['number'];
								}
								$pages = ceil($number / 10);
								$current_page = 1;
								if(isset($_GET['page'])){
									$current_page = $_GET['page'];
								}
								$index = ($current_page-1)*8;
								$sqlmientrung = 'select * from pagemientrung where 1 '.$additional.' limit '.$index.', 15';
								$result = excuteResultMienTrung($sqlmientrung);
								foreach ($result as $pagemientrung){
									echo '<a href="PageMienTrung.php?id='.$pagemientrung['id'].'" class="col l-2-4 m-4 c-6">
											<div class="home-product-item">
											<img src="'.$pagemientrung['image'].'"class="home-product-item__img">
											<h4 class="home-product-item__name">'.$pagemientrung['title'].'</h4>
											<h5 class="home-product-item__location">'.$pagemientrung['introduce'].'</h5>
											<div class="home-product-item__action">
												<span class="home-product-item__like home-product-item__like--liked" style="color: #ff0b0b; font-weight: 500;">
													'.$pagemientrung['location'].'
												</span>
												<div class="home-product-item__rating">
													<i class="home-product-item__star--gold"></i>
												</div>
												<span class="home-product-item__sold">'.$pagemientrung['username'].'</span>
											</div>
											</div>
										</a>';
								}
								?>
								
								
							</div>
						</div>

						<ul class="pagination home-product__pagination">
							<?php
								if($current_page > 1){
									echo'<li class="pagination-item">
											<a href="?page='.($current_page - 1).'&s='.$s.'" class="pagination-item__link">
												<i class="pagination-item__icon fas fa-angle-left"></i>
											</a>
										</li>';
								}
							?>
							<?php
							$avaiablePage = [1, $current_page - 1, $current_page, $current_page + 1, $pages];
							$isFirst = $isLast = false;
								for ($i=1; $i <= $pages; $i++) { 
									if(!in_array($i, $avaiablePage)){
										if(!$isFirst && $current_page > 3){
											echo'<li class="pagination-item">
													<a href="?page='.($current_page-2).'&s='.$s.'" class="pagination-item__link">...</a>
												</li>';
											$isFirst = true;
										}
										if(!$isLast && $i > ($current_page)){
											echo'<li class="pagination-item">
													<a href="?page='.($current_page+2).'&s='.$s.'" class="pagination-item__link">...</a>
												</li>';
											$isLast = true;
										}
										continue;
									}
									
									if($current_page == ($i)){
										echo'<li class="pagination-item pagination-item--active">
									<a href="?page='.$i.'&s='.$s.'" class="pagination-item__link">'.$i.'</a>
								</li>';
									}else{
										echo'<li class="pagination-item">
										<a href="?page='.$i.'&s='.$s.'" class="pagination-item__link">'.$i.'</a>
									</li>';
									}	
							}
							?>
							<?php
								if($current_page < ($pages)){
									echo'<li class="pagination-item">
											<a href="?page='.($current_page + 1).'&s='.$s.'" class="pagination-item__link">
												<i class="pagination-item__icon fas fa-angle-right"></i>
											</a>
										</li>';
								}
							?>
						</ul>
					</div>
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
								<a href="lienhe.php" class="footer-item__link">Trung tâm trợ giúp</a>
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
					<h3 class="footer__heading">ĐẶC SẢN</h3>
							<ul class="footer-list">
								<li class="footer-item">
									<a href="MienBac.php" class="footer-item__link">Miền Bắc</a>
								</li>
								<li class="footer-item">
									<a href="MienTrung.php" class="footer-item__link">Miền Trung</a>
								</li>
								<li class="footer-item">
									<a href="MienNam.php" class="footer-item__link">Miền Nam</a>
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

	</body>
</html>