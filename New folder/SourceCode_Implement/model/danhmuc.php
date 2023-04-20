<?php
    require_once("./core/Database.php");

function themdm($tendm){
    $conn=connect();
    $sql = "INSERT INTO tbl_danhmuc VALUES ('".$tendm."')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function deldm($id){
    $conn=connect();
    $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;
    // use exec() because no results are returned
    $conn->exec($sql);
}
function updatedm($id,$tendm){
    $conn=connect();
    $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}
function getonedm($id){
    $conn=connect();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getall_dm(){
    $conn=connect();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}

?>