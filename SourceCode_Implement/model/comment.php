<?php
    $servernames = "localhost";
    $usernames = "root";
    $password = "";
    function thembl($name,$id_user,$idsp,$noidung){
        $servernames = "localhost";
        $usernames = "root";
        $password = "";
        $conn = new PDO("mysql:host=$servernames;dbname=nongsanstore", $usernames, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO tbl_binhluan(name,id_user,id_sp,noidung) VALUES ('$name','$id_user','$idsp','$noidung')";
        $conn -> exec($sql);
    }
    function showbl(){
        $servernames = "localhost";
        $usernames = "root";
        $password = "";
        $conn = new PDO("mysql:host=$servernames;dbname=nongsanstore", $usernames, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      
        $sql = "SELECT * FROM tbl_binhluan";
        $stmt = $conn ->prepare($sql);
        $stmt -> execute();
        $stmt ->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>