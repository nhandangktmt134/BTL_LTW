<?php
include_once("./model/post.php");
class post extends Controller {
    public $postModelConst;
    public $functionCore;

    public function __construct() {
        $this->postModelConst = new PostModel();
        $this->functionCore = new Controller();
    }
   
    function getall() {
        $listpost = $this->postModelConst->getallpost();
        $_SESSION['listpost'] = $listpost;
        include('./view/table_post.php');

        // view table
    }

    function insert() {
        if (isset($_POST['submit'])) {
            $title = "";
            $detail = "";
            $img = "";

            $msg = ""; 
            $success = false;
         
            if (isset($_POST['title'])) $title = $_POST['title'];
            if (isset($_POST['detail'])) $detail = $_POST['detail'];
            if (isset($_POST['img'])) $img = $_POST['img'];
            if ($title == "" || $detail == "" ) {
                $msg = "Hãy điền đủ thông tin !";
                $_SESSION['error'] = $msg;
            }
            else {
                $img =  $this->functionCore->upload_file_posts($_FILES, "add");
                $success = $this->postModelConst->insertpost($title, $detail, $img);

                if ($success == true) {
                    $_SESSION['msg'] = "Đăng kí thành công ! ";
                    $_SESSION['error'] = "";
                } else {
                    $_SESSION['error'] = "Tên bài viết đã được sử dụng!";
                }
                
            }
            
        }
    }
}

?>