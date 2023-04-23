<?php
include_once("./model/product.php");
class product extends Controller {
    public $productModelConst;
    public $functionCore;

    public function __construct() {
        $this->productModelConst = new ProductModel();
        $this->functionCore = new Controller();
    }
   
    function getall() {
        $listproduct = $this->productModelConst->getallproduct();
        $_SESSION['listproduct'] = $listproduct;
        include('./view/table_product.php');

        // view table
    }

    function insert() {
        if (isset($_POST['submit'])) {
            $category_id = 2;
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
           
            
            if (isset($_POST['sanpham_name'])) $sanpham_name = $_POST['sanpham_name'];
            if (isset($_POST['sanpham_chitiet'])) $sanpham_chitiet = $_POST['sanpham_chitiet'];
            if (isset($_POST['sanpham_mota'])) $sanpham_mota = $_POST['sanpham_mota'];
            if (isset($_POST['sanpham_gia'])) $sanpham_gia = $_POST['sanpham_gia'];
            if (isset($_POST['sanpham_giakm'])) $sanpham_giakm = $_POST['sanpham_giakm'];
            if (isset($_POST['sanpham_hot'])) $sanpham_hot = $_POST['sanpham_hot'];
            if (isset($_POST['sanpham_soluong'])) $sanpham_soluong = $_POST['sanpham_soluong'];
            if (isset($_POST['img'])) $img = $_POST['img'];
            if ($category_id == "" || $sanpham_name == "" || $sanpham_chitiet == "" || $sanpham_mota == "" || $sanpham_gia == "" || $sanpham_giakm == "" || $sanpham_hot == "" ||
             $sanpham_soluong == "" ) {
                $msg = "Hãy điền đủ thông tin !";
                $_SESSION['error'] = $msg;
            }
            else {
                $img =  $this->functionCore->upload_file_products($_FILES, "add");
                $success = $this->productModelConst->insertproduct($category_id, $sanpham_name, $sanpham_chitiet, $sanpham_mota, $sanpham_gia, $sanpham_giakm, $sanpham_hot, 
                $sanpham_soluong, $img);

                if ($success == true) {
                    $_SESSION['msg'] = "Đăng kí thành công ! ";
                    $_SESSION['error'] = "";
                } else {
                    $_SESSION['error'] = "Tên sản phẩm đã được sử dụng!";
                }
                
            }
            
        }
    }
}

?>