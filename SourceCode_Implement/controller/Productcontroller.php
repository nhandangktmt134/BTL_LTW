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
}

?>