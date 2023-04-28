<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_user WHERE username  = '{$_SESSION["username"]}'";
    $result = mysqli_query($conn,$sql);
    foreach ($result as $row) {
        $img_password = $row['password'];
    }     
    $user_namew = $_SESSION["username"];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmnewPassword = $_POST['confirmnewPassword'];   
    
    if ($oldPassword == "" || $newPassword == "" || $confirmnewPassword == "") {
        $msg = "Vui lòng điền đầy đủ";
        $_SESSION['update_profile'] = $msg;
        echo '<script>
        var result = confirm("Vui lòng điền đầy đủ");
        if (result) {
                window.location.href = "./updateprofile";
        } else {
            window.location.href = "./updateprofile";
        }
        </script>';
        die;
    }
    else if (!password_verify($oldPassword, $img_password)) {
        $msg = "Mật khẩu cũ không chính xác";
        $_SESSION['update_profile'] = $msg;
        echo '<script>
        var result = confirm("Mật khẩu cũ không chính xác");
        if (result) {
                window.location.href = "./profile";
        } else {
            window.location.href = "./profile";
        }
        </script>';
        die;
    }
    else if ( $newPassword != $confirmnewPassword ) {
        $msg = "Mật khẩu không giống nhau";
        $_SESSION['update_profile'] = $msg;
        echo $newPassword;
        echo $confirmnewPassword;
        echo '<script>
        var result = confirm("Mật khẩu không giống nhau");
        if (result) {
                window.location.href = "./profile";
        } else {
            window.location.href = "./profile";
        }
        </script>';       
        die;
    } 
    else {
        $passworddd = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM tbl_user";
        $sql_update = "UPDATE tbl_user SET password ='$passworddd', password_re = '$passworddd' WHERE username ='$user_namew'";
        mysqli_query($conn, $sql_update);
        echo $oldPassword.'<script>
        var result = confirm("Mật khẩu Thanh cong");
        if (result) {
                window.location.href = "./profile";
        } else {
            window.location.href = "./profile";
        }
        </script>';
    }
?>