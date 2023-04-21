<?php
    require_once("./core/Database.php");
    function checkuser($username, $password){
        $conn = connect();
        $stmt = $conn->prepare("SELECT * FROM tbl_user WHERE username ='".$username."' AND password ='".$password."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $conn->fetchAll();
        if(count($kq >0)) return $kq[0]['role'];
        else return 0;
    }
    function getuserinfo($username, $password){
        $conn=connect();
        $sql="SELECT * FROM tbl_user WHERE user='".$username."' AND pass='".$password."'";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>