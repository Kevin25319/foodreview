
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Quản lý Bài viết</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/admin1.css" rel="stylesheet">
  <link href="css/admin-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
  <section id="container">
  
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>VN<span>FOOD</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="GoFood.php">Logout</a></li>
        </ul>
      </div>
    </header>
  
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="admin.php"><img src="./img/pic3.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Quản lý Website</h5>
          <li class="mt">
            <a class="active" href="admin.php">
              <i class="fa fa-dashboard"></i>
              <span>Tổng quát</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Quản lý</span>
              </a>
            <ul class="sub">
              <li><a href="adminuser.php">Người dùng</a></li>
              <li><a href="adminpagemienbac.php">Bài viết miền Bắc</a></li>
              <li><a href="adminpagemientrung.php">Bài viết miền Trung</a></li>
              <li><a href="adminpagemiennam.php">Bài viết miền Nam</a></li>
              <!-- <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li> -->
            </ul>
          </li>
          
        </ul>
      </div>
    </aside>
    <div class="container" id="main-content">
    <?php
    	$connection = new PDO("mysql:host=127.0.0.1;dbname=vidu;charset=utf8","root","");

    	$query = "SELECT * FROM pagemientrung";
    	$stmt = $connection->prepare($query);
        $stmt->execute();
        $pagemientrung = $stmt->fetchAll();
        
    ?>
      <div class="row">
      <div class="border-head" style="padding-top: 80px; text-align:center;">
          <h3 style="color: red;font-size: 23px;font-weight: 600;">Quản lý bài viết Miền Trung</h3>
      </div>
	    
      <table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Image</th>
					<th>Location</th>
					<th>Price</th>
					<th>Introduce</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pagemientrung as $u):?>
					<tr>
						<td><?php echo $u['id'];?></td>
						<td><?php echo $u['title'];?></td>
						<td><?php echo $u['image'];?></td>
						<td><?php echo $u['location'];?></td>
            <td><?php echo $u['price'];?></td>
						<td><?php echo $u['introduce'];?></td>
						<td><a style="text-decoration: none; text-align:center;" href="update-pagemientrung.php?id=<?php echo $u['id']?>">Sửa</a></td>
						<td><a style="text-decoration: none; text-align:center;" href="delete-pagemientrung.php?id=<?php echo $u['id']?>">Xóa</a></td>
					</tr>
					<?php endforeach?>
			</tbody>
		</table
      <div class="border-head" style="padding-top: 80px; text-align:center;">
          <h3 style="color: red;font-size: 23px;">Thêm bài viết mới</h3>
      </div>
      <form action="save-addpagemientrung.php" method="POST">
        <div>
            <input type="text" name="title" id="" placeholder="Nhập tiêu đề">
        </div>
        <div>
            <input type="text" name="image" id="" placeholder="Link ảnh">
        </div>
        <div>
            <input type="text" name="location" id="" placeholder="Nhập địa chỉ">
        </div>
        <div>
            <input type="text" name="price" id="" placeholder="Nhập giá thành">
        </div>
        <div>
            <input type="text" name="introduce" id="" placeholder="Nhập thông tin bài viết">
        </div>
        <div>
            <input type="submit" name="btn-add" id="" value="Thêm mới">
        </div>
    </form>
	    



    </div>

    <!--main content end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">

  </script>
</body>

</html>
