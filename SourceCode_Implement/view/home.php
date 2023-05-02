
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<link rel="stylesheet" href="./asset/css/style.css">
	<link rel="stylesheet" href="./asset/css/responsive.css">
	<link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</head>
<body>
	<!-- search area -->
	<?php
  require_once("./view/header.php");
?>
<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<video autoplay loop muted plays-inline class="back-video">
                      <source src="./asset/video/thumb_video_1.mp4">
		</video>
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Fresh & Organic</p>
							<h1>Sản phẩm chất lượng</h1>
							<p style="color:white; font-size:larger;">Sản phẩm của chúng tôi được thu hoạch mới, rửa sạch sẫn sàng đóng hộp và cuối cùng được chuyển từ trang trại gia đình chúng tôi đến ngay ngưỡng nhà bạn </p>
							<div class="hero-btns">
								<a href="shop" class="boxed-btn">Fruit Collection</a>
								<a href="contact" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over 100VND</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
					</div>
				</div>
			</div>
			<?php
                require_once("./view/product_display.php");
            ?>
			
		</div>
	</div>
	<!-- end product section -->

	

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="./asset/img/avaters/avt1.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>ANH HOÀNG <span>Nhân viên văn phòng</span></h3>
								<p class="testimonial-body">
									"Sản phẩm ở đây đa dạng các các loại như đồ khô, rau quả tươi, các loại nấm và sản phẩm khi mua lúc nào cũng tươi mát, không bị héo"
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="./asset/img/avaters/avt2.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>CHỊ LINH <span>Kế toán, HCM</span></h3>
								<p class="testimonial-body">
									"Mật ong rừng nguyên chất tại Nông Sản Sạch rất ngon và chất lượng "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="./asset/img/avaters/avt3.webp" alt="">
							</div>
							<div class="client-meta">
								<h3>CHỊ HOA <span>Chung cư HH01A Linh Đàm</span></h3>
								<p class="testimonial-body">
									"Tôi đã sử dụng nông sản của cửa hàng, và tôi rất yên tâm về chất lượng của cây trồng ở đây."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="./asset/img/avaters/avt4.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>NÔNG SẢN SẠCH<span>Admin</span></h3>
								<p class="testimonial-body">
									"Và còn nhiều khách hàng nữa đánh giá rất cao dịch vụ của chúng tôi."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=HD7T8xyxc6A"  class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 1999</p>
						<h2>Chúng tôi là <span class="orange-text">Nông sản sạch</span></h2>
						<p>Cửa hàng nông sản sạch NongSanSach.Com là một website cung cấp thực phẩm an toàn, 100% tự nhiên, nông sản sạch cho người dân. Với mong muốn thực phẩm an toàn sẽ tới tay mọi gia đình Việt Nam. Các sản phẩm tiêu biểu của chúng tôi gồm: Các loại trà, ngũ cốc dinh dưỡng, hạt dinh dưỡng, trái cây sấy,….</p>
						<p>Cùng chung tay xây dựng một cuộc sống an toàn và chất lượng cho người dân Việt Nam.</p>
						<a href="about.html" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<!-- <section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a><div class="latest-news-bg news-bg-3"></div>
        </div>
    </section> -->
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> News</h3>
						<p>MỘT SỐ THÔNG TIN MỚI NHẤT</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="./post"><div class="latest-news-bg news-bg-1" style="background-image: url('./asset/img/posts/post1_new.jpg');"></div></a>
						<div class="news-text-box">
							<h3><a href="./post">Thủy canh tĩnh và động là gì? Giới thiệu kỹ thuật trồng thủy canh</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 April, 2023</span>
							</p>
							<p class="excerpt">Thủy canh tĩnh và động được xem là 2 phương pháp thủy canh đang được sử dụng nhiều nhất hiện nay. Mỗi một phương pháp sẽ mang đến những ưu nhược điểm khác nhau và có kỹ thuật trồng khác nhau. Chính vì thế hãy cùng chúng tôi tìm hiểu ngay về 2 phương pháp...</p>
							<a href="./post" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="./post"><div class="latest-news-bg news-bg-2" style="background-image: url('./asset/img/posts/post3_new.jpg');"></div></a>
						<div class="news-text-box">
							<h3><a href="./post">Cách nhân giống Lan Trầm Tím và kỹ thuật ươm ki “hiệu quả”</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 28 December, 2022</span>
							</p>
							<p class="excerpt">Lan Trầm Tím là một loại hoa được nhiều người yêu thích bởi màu tím hay màu trắng kết hợp với mùi hương dễ chịu tạo nên một không gian mộng mơ làm mê hoặc lòng người. Và cách nhân giống lan trầm cũng không hề khó.</p>
							<a href="./post" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="./post"><div class="latest-news-bg news-bg-3"  style="background-image: url('./asset/img/posts/post2_new.jpg');"></div></a>
						<div class="news-text-box">
							<h3><a href="./post">Mẹo chọn hạt giống Việt chất lượng cao, giá rẻ</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 28 April 2023</span>
							</p>
							<p class="excerpt">Hạt giống là yếu tố đầu tiên vô cùng quan trọng, quyết định sự sinh trưởng của cây trồng. Để chọn lựa được sản phẩm hạt giống chất lượng cao mà giá cả phải chăng sẽ giúp bạn dễ dàng có một vườn rau xanh ngay tại nhà. Hạt giống Việt tại My Garden là...</p>
							<a href="./post" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.html" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

</body>
</html>

<?php
  require_once("./view/footer.php");
?>



