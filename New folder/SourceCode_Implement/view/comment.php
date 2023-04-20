<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    include "./model/comment.php";
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_binhluan";
    $result = mysqli_query($conn,$sql);
    //if (isset($_SESSION['$id'])&&($_SESSION['$id']>0)){
        if (isset($_SESSION['$id_user'])&&($_SESSION['$id_user']!="")){
            $id_user = $_SESSION['$id_user'];
        }else{
            $id_user ="";
        }
        if (isset($_POST['comment'])&&($_POST['comment'])){
            $name = $_POST['name'];
            $id_sp = $_POST['id_sp'];
            $id_user = $_POST['id_user'];
            $noidung = $_POST['noidung'];
        }
        $dsbl = showbl();
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
		.top-header-area{
			background-color: #051922;
			color: #051922;
		}
	</style>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	
</head>
<body>
    <hr>
        <form action="comment.php" method="post">
            <input type="text" name = "name" placeholder="">
            <input type="hidden" name = "idsp" value="<?php $_GET["id"]; ?>" >
            <textarea name = "noidung" placeholder="" id="" cols="30" rows="10"></textarea>
            <input type="submit" name = "commment" value="Giu binh luan">
        </form>
    </hr>
    <?php 
        foreach ($dsbl as $bl){
            echo $bl['name'].'-'.$bl['noidung']."<br>";
        }
    ?>
</body>
<?php 
//}
//else
{
    echo "<a herf = './login'> Dangnhaproicoment </a>";
    } ?>