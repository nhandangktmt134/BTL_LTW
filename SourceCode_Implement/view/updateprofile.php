<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_user WHERE username  = '{$_SESSION["username"]}'";
    $result = mysqli_query($conn,$sql);
    foreach ($result as $row) {
        # code..
        $id_user = $row['user_id'];
        $username = $row['username'];
    } 
    $sql = "SELECT * FROM tbl_user WHERE username  = '{$_SESSION["username"]}'";
    $name_user = $_POST['name_user'];
    $phone     = $_POST['phone'];
    $user_address = $_POST['user_address'];
    $email  = $_POST['email'];
    $img ="";
    $img    = $_POST['img'];
    if ($name_user == "" || $email == "" || $phone == "" || $user_address =="") {
        $msg = "Vui lòng điền đầy đủ thông tin!";
        $_SESSION['update_profile'] = $msg;
    } 
    else {
        if($img != ""){
            $sql = "SELECT * FROM tbl_user";
            $sql_update ="UPDATE tbl_user SET name='$name_user',address='$user_address',email='$email',phone='$phone',img='$img' WHERE username='$username' ;";
            mysqli_query($conn, $sql_update);
            echo '<script>
            var result = confirm("Đặt hàng thành công");
            if (result) {
                    window.location.href = "./profile";
            } else {
                    window.location.href = "./home";
            }
            </script>';
        }
        else {
            $sql = "SELECT * FROM tbl_user";
            $sql_update = "UPDATE tbl_user SET name='$name_user', address='$user_address', email='$email', phone='$phone' WHERE username='$username'";
            mysqli_query($conn, $sql_update);
            // var_dump($sql_update);
            echo '<script>
            var result = confirm("Thay doi thành công");
            if (result) {
                    window.location.href = "./profile";
            } else {
                    window.location.href = "./home";
            }
            </script>';
        }        
    }
?>