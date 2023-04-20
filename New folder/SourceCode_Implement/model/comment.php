<?php
    function thembl($name,$id_user,$idsp,$noidung){
        $sql = "INSERT INTO tbl_binhluan(name,id_user,id_sp,noidung) VALUES ('$name','$id_user','$idsp','$noidung')";
        $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
        $conn -> exec($sql);
    }
    function showbl(){
        $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
        $stmt = $conn ->prepare($sql);
        $stmt -> execute();
        $stmt ->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>