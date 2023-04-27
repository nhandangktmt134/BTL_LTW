<?php 

    require_once("../core/Database.php");
    $db = new Database();
    $conn = $db->conn;
 
    $obj =  $_GET['obj'];
    $id =  $_GET['id'];

    if($obj == 'user') {
        $sql="DELETE FROM tbl_" . $obj . " WHERE user_id = " . $id . "  ";
    }
    if($obj == 'product') {
        $obj='sanpham';
        $sql="DELETE FROM tbl_" . $obj . " WHERE sanpham_id = " . $id . "  ";
    }
    if($obj == 'taodon') {
        $obj='taodon';
        $sql="DELETE FROM tbl_" . $obj . " WHERE id_spdon = " . $id . "  ";
    }
    if($obj == 'post') {
        $obj='post';
        $sql="DELETE FROM tbl_" . $obj . " WHERE id = " . $id . "  ";
    }
    if($obj == 'contact') {
        $obj='contact';
        $sql="DELETE FROM tbl_" . $obj . " WHERE id = " . $id . "  ";
    }
    if($obj == 'danhmuc') {
        $obj='danhmuc';
        $sql="DELETE FROM tbl_" . $obj . " WHERE id_danhmuc = " . $id . "  ";
    }
    $result = mysqli_query($conn, $sql);
    header('Location: '. $_SERVER['HTTP_REFERER']);
?>  