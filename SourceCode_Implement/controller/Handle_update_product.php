<?php
require_once("../core/Controller.php");
 $conn = NULL;
	 $server = 'localhost';
	 $dbName = 'nongsanstore';
	 $user = 'root';
	 $password = '';

     $conn = new mysqli($server, $user, $password, $dbName);

     if ($conn->connect_error) {
         printf($conn->connect_error);
         exit();
     }
     $conn->set_charset("utf8");

$functionCore = new Controller();


$category_id = 2;
$sanpham_id = 0;
$sanpham_name = "";
$sanpham_chitiet = ""; 
$sanpham_mota = ""; 
$sanpham_gia = ""; 
$sanpham_giakm = ""; 
$sanpham_hot = "";
$sanpham_soluong = "";
$img = "";

$msg = ""; 
$success = false;

if (isset($_POST['sanpham_id'])) $sanpham_id = $_POST['sanpham_id'];
if (isset($_POST['sanpham_name'])) $sanpham_name = $_POST['sanpham_name'];
if (isset($_POST['sanpham_chitiet'])) $sanpham_chitiet = $_POST['sanpham_chitiet'];
if (isset($_POST['sanpham_mota'])) $sanpham_mota = $_POST['sanpham_mota'];
if (isset($_POST['sanpham_gia'])) $sanpham_gia = $_POST['sanpham_gia'];
if (isset($_POST['sanpham_giakm'])) $sanpham_giakm = $_POST['sanpham_giakm'];
if (isset($_POST['sanpham_hot'])) $sanpham_hot = $_POST['sanpham_hot'];
if (isset($_POST['sanpham_soluong'])) $sanpham_soluong = $_POST['sanpham_soluong'];
$img =isset($_POST['img-old']) ? $_POST['img-old'] : '' ;

    if($_FILES['img']['name']!=null) {
        $img =  $functionCore->upload_file_products($_FILES, "update");
    }
    $query = "UPDATE tbl_sanpham SET category_id = ?, sanpham_name = ?, sanpham_chitiet = ?, sanpham_mota = ?, sanpham_gia = ?, sanpham_giakm = ?, sanpham_hot = ?, 
    sanpham_soluong = ?, sanpham_img = ? WHERE sanpham_id = ?";

    // prepare the statement
    $stmt = $conn->prepare($query);
    
    // bind the parameters
    $stmt->bind_param("ssssssssss", $category_id, $sanpham_name, $sanpham_chitiet, $sanpham_mota, $sanpham_gia, $sanpham_giakm, $sanpham_hot, 
    $sanpham_soluong, $img, $sanpham_id);

    // execute the statement
    $stmt->execute();

    // check if the insert was successful
    if ($stmt->affected_rows > 0) {
        echo "
        <script type='text/javascript'>
            alert('Bạn đã cập nhật thành công');
        </script>
        ";
    } else {
        echo "
        <script type='text/javascript'>
            alert('Thất bại!');
        </script>
        ";
    }
    
    header('Location: '. $_SERVER['HTTP_REFERER']);
    



 ?>
