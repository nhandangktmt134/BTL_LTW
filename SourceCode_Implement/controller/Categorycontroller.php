
<?php
include_once("./model/categorymodel.php");
class Categorycontroller extends Controller {
    function default() {
        $this->view("add_category");
    }
    public $productModelConst;
    public $functionCore;

    public function __construct() {
        $this->productModelConst = new CategoryModel();
        $this->functionCore = new Controller();
    }
   
    function getall() {
        $listproduct = $this->productModelConst->getallproduct();
        $_SESSION['listproduct'] = $listproduct;
        include('./view/danhmuc.php');

        // view table
    }

    function insert() {
        if (isset($_POST['submit'])) {
            $category_id = 2;
            $sanpham_name = "";
            $msg = ""; 
            $success = false;    
            if (isset($_POST['danhmuc_name'])) $sanpham_name = $_POST['danhmuc_name'];
            if ($sanpham_name == "") {
                $msg = "Hãy điền đủ thông tin !";
                $_SESSION['error'] = $msg;
            }
            else {
                $img =  $this->functionCore->upload_file_products($_FILES, "add");
                $success = $this->productModelConst->insertproduct($sanpham_name );

                if ($success == true) {
                    $_SESSION['msg'] = "Đăng kí thành công ! ";
                    $_SESSION['error'] = "";
                } else {
                    $_SESSION['error'] = "Tên danh mục đã được sử dụng!";
                }
                
            }
            
        }
    }
}

?>