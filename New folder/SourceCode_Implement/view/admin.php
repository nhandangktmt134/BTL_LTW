<?php
    session_start();
    ob_start();
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
?>
<!DOCTYPE html>
<html lang="vn">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    
	<!-- title -->
	<title>NongSangStore</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/logo.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    <!-- Style-->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<head>	
	<!--PreLoader--
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    !--PreLoader Ends-->
    
    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="../asset/img/logo.png" width="150px" height="50px" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class=""><a href="#">Home</a>
                                    <!--<ul class="sub-menu">
                                        <li><a href="index.html">Static Home</a></li>
                                        <li><a href="index_2.html">Slider Home</a></li>
                                    </ul>-->
                                </li>
                                <li><a href="#">Quản lý đơn hàng</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Contact</a></li>
                                        <li><a href="./shop">Shop</a></li>
                                    </ul>
                                </li>    
                                <li><a href="#">Quản lý sản phẩm</a>
                                </li>                               
                                <li><a href="">Contact</a></li>
                                <li><a href="">Quản lý tài khoản</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Admin</a></li>
                                        <li><a href="">User</a></li>
                                    </ul>
                                </li>    
                                <li>    
                                <a href=""> <i class="fa-regular fa-user fa-xl" style="color: #17d3b4;">...</i>  Admin</a>
                                    <ul class="sub-menu">
                                        <li><a href="">Quản lý đơn hàng</a></li>
                                        <li><a href="">Quản lý sản phẩm</a></li>
                                        <li><a href="">Quản lý tài khoản</a></li>
                                        <li><a href="">Contact</a></li>
                                        <li><a href="">Thoát</a></li>
                                    </ul>     
                                </li>                              
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
</head>
<?php
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'danhmuc':
                # code...
                $kq = getall_dm();
                include "./model/danhmuc.php";
                break;
            case 'sanpham':
                # code...
                include "./model/sanpham.php";
                break;
            default:
                # code...
                include "./view/home.php";
                break;
        }
    }else  include "./view/home.php";

?>
<?php
  require_once("./view/footer.php");
?>
