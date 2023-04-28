<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
   // Kiểm tra kết nối cơ sở dữ liệu
   if (mysqli_connect_errno()) {
	 die('Failed to connect to MySQL: ' . mysqli_connect_error());
   }   
   $time = time();
   $user =  $_POST['user'];
   $name = $_POST['name_donhang'];
   $phone = $_POST['phone_donhang'];
   $add = $_POST['address_donhang'];
   $ppprice = $_POST['payment_method'];
   // Lấy thời gian hiện tại
    //$time = time();
   // Tạo đối tượng DateTime từ giá trị Unix timestamp của biến $time
   $datetime = DateTime::createFromFormat('U', $time);
   // Chuyển đổi đối tượng DateTime thành chuỗi định dạng datetime
   $datetime_str = $datetime->format('Y-m-d H:i:s');
   $sum = $_POST['pay']*105/100;
    //doat hang

    
    $sql = "SELECT * FROM  tbl_tddonhang";
    mysqli_query($conn, $sql);   
    $sql_insert = "INSERT INTO tbl_tddonhang (name_cus, date_dh, total,	address_in,pprice,phone_in) VALUES ('$name','$datetime_str', '$sum','$add', '$ppprice', '$phone')";  
    mysqli_query($conn, $sql_insert); 
                $sql_insert2 = "INSERT INTO `tbl_donhangkh`(`id_don`, `name_user`, `name_kh`, `sanpham_name`, `price_sp`, `quantify`, `total`, `datetime_in`, `address_in`)  VALUES (NULL, '$user', '$name','', '', '','', '$datetime_str','$add')";
                mysqli_query($conn, $sql_insert2);                
                $sql = "SELECT * FROM  tbl_taodon";                 
                $result=mysqli_query($conn, $sql); 
                foreach ($result as $rows): 
                        $sql_insert1 = "INSERT INTO `tbl_donhangkh`(`id_don`, `name_user`, `name_kh`, `sanpham_name`, `price_sp`, `quantify`, `total`, `datetime_in`, `address_in`)  VALUES (NULL, '$user', '','{$rows['name_sp']}', '{$rows['price']}', '{$rows['quantifiy']}', '{$rows['total']}', '$datetime_str','$add')";
                        mysqli_query($conn, $sql_insert1);
                endforeach;  
                $sql_insert1 = "INSERT INTO `tbl_donhangkh`(`id_don`, `name_user`, `name_kh`, `sanpham_name`, `price_sp`, `quantify`, `total`, `datetime_in`, `address_in`)  VALUES (NULL, '$user', '--------------','Tổng đơn hàng', '---', '---', '$sum', '$datetime_str','$add')";
                mysqli_query($conn, $sql_insert1);

    ///deredledkferaguerfih D    
    $sql = "DELETE FROM tbl_taodon;";
    $result = mysqli_query($conn, $sql);   
    echo '<script>
                var result = confirm("Đặt hàng thành công");
                if (result) {
                        window.location.href = "./dhkh";
                } else {
                        window.location.href = "./shop";
                }
                </script>';
?>