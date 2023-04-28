<?php
$conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM tbl_new";
$result_news = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="vn">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<title>NÔNG SẢN SẠCH</title>
	<link rel="shortcut icon" type="image/png" href="./asset/img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./asset/css/all.min.css">
	<link rel="stylesheet" href="./asset/css/owl.carousel.css">
	<link rel="stylesheet" href="./asset/css/magnific-popup.css">
	<link rel="stylesheet" href="./asset/css/animate.css">
	<link rel="stylesheet" href="./asset/css/meanmenu.min.css">
	<link rel="stylesheet" href="./asset/css/main.css">
	<link rel="stylesheet" href="./asset/css/responsive.css">
	<link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
	<style>
		.top-header-area {
			background-color: #051922;
			color: #051922;
		}
	</style>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo --
						<div class="site-logo">
							<a href="index.html">
								<img src="./asset/img/logo.png" alt="">
							</a>
						/div>
						!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="./home">Home</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.html">Static Home</a></li>
										<li><a href="index_2.html">Slider Home</a></li>
									</ul> -->
								</li>
								<li><a href="./about">About</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="./about">About</a></li>
										<li><a href="./contact">Contact</a></li>
										<li><a href="./news">News</a></li>
										<li><a href="./shop">Shop</a></li>
									</ul>
								</li>
								<li><a href="./news">News</a>
									<ul class="sub-menu">
										<?php foreach ($result_news as $row) : ?>
											<li><a href="./news?new=<?php echo $row['name']; ?>">
													<?php echo $row['name']; ?>
												</a></li>
										<?php endforeach; ?>
										<!-- <li><a href="./news">News</a></li>
										<li><a href="single-news.html">Single News</a></li> -->
									</ul>
								</li>
								<li><a href="./contact">Contact</a></li>
								<li><a href="./shop">Shop</a>
									<ul class="sub-menu">
										<li><a href="./shop">Shop</a></li>
										<li><a href="./payment">Cart</a></li>
									</ul>
								</li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li><a class="shopping-cart" href="./payment"><i class="fas fa-shopping-cart"></i></a> </li>
								<li><a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a></li>

								<?php
								if (isset($_SESSION['username'])) {
									echo "
										<li>
											<a class='mobile-hide search-bar-icon' href='#' style='text-decoration: none'>
												<span>{$_SESSION['username']}</span>
												<i class='fa fa-user-circle'></i>
											</a>
											<ul class='sub-menu'>";
									if ($_SESSION['role'] == 1) {
										echo "<li>
													<a href='./admin' style='text-decoration: none'>Trang quản lý</a>
													<li><a href='./infoprofile' style='text-decoration: none'>Xem thông tin cá nhân</a></li>
													<li><a href='./profile' style='text-decoration: none'>Chỉnh sửa thông tin cá nhân</a></li>
												</li>";
									}
									if ($_SESSION['role'] == 0) {
										echo "	<li><a href='./infoprofile' style='text-decoration: none'>Xem thông tin cá nhân</a></li>
												<li><a href='./profile' style='text-decoration: none'>Chỉnh sửa thông tin cá nhân</a></li>
												<li><a href='./dhkh' style='text-decoration: none'>Thông tin đơn hàng</a></li>";
									}

									echo "
												<li><a href='./controller/Logout.php' style='text-decoration: none'>Đăng xuất</a></li>
											</ul>
										</li>
										";
								} else {
									echo "
										<li><a class='mobile-hide search-bar-icon' href='#'><i class='fa-solid fa-user'></i></a>
											<ul class='sub-menu'>
												<li><a href='./login' style='text-decoration: none'>Đăng nhập</a></li>
												<li><a href='./signup' style='text-decoration: none'>Đăng ký</a></li>
											</ul>					
										</li> 
										";
								}
								?>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
</body>

</html>