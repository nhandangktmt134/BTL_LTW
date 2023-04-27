<?php
   $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
   // Kiểm tra kết nối cơ sở dữ liệu
   if (mysqli_connect_errno()) {
	 die('Failed to connect to MySQL: ' . mysqli_connect_error());
   }   
   
   // Lấy dữ liệu từ bảng tbl_taodon
   $sql_select = "SELECT * FROM tbl_taodon";
   $result = mysqli_query($conn, $sql_select);   
   // Chèn dữ liệu vào bảng tbl_taodon
   $sanpham_img = $_POST['product_img'];
   $name_sp = $_POST['product_name'];
   $quantifiy = $_POST['quantity'];
   $price = $_POST['product_gia'];
   $total = $_POST['product_gia'] * $_POST['quantity'];
   $sql_insert = "INSERT INTO tbl_taodon (sanpham_img, name_sp, price, quantifiy, total) VALUES ('$sanpham_img', '$name_sp', '$price', '$quantifiy', '$total')";
   if (mysqli_query($conn, $sql_insert)) {
      echo '<script>
               var result = confirm("Bạn muốn tiếp tục mua sắm?");
               if (result) {
                     window.location.href = "./shop";
               } else {
                     window.location.href = "./payment";
               }
            </script>';
   }
   else {
         echo "Lỗi khi thêm sản phẩm vào giỏ hàng";
   }
   $slcl =$_POST['product_sl']-$quantifiy;
   $sql = "UPDATE tbl_sanpham SET sanpham_soluong = $slcl WHERE sanpham_name = '$name_sp'";
   $result = mysqli_query($conn,$sql); 
   mysqli_close($conn);
?>

