<?php

    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    // Kiểm tra kết nối cơ sở dữ liệu
    if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }  
    $stt =1; 
    $id_dh =1;
    $sql = "SELECT * FROM tbl_donhangkh ";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<?php
    require_once("./view/header.php");
?>
<body>
  <div class="container-fluid  mt-150 mb-150">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Tên người nhận</th>
          <th scope="col">Tên sản phẩm</th>
          <th scope="col">Giá đơn</th>
          <th scope="col">Số lượng</th>
          <th scope="col">Tổng</th>
          <th scope="col">Ngày đặt</th>
          <th scope="col">Địa chỉ </th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($result  as $rows): 
            if($_SESSION['username']==$rows['name_user']){?>
        <tr>          
          <td><?php echo $rows['name_kh'];?></td>
          <td><?php echo $rows['sanpham_name'];?></td>
          <td><?php echo  $rows['price_sp'];?></td>
          <td><?php echo  $rows['quantify'];?></td>
          <td><?php echo  $rows['total'];?></td>
          <td> <?php echo  $rows['datetime_in'];?></td>
          <td> <?php echo  $rows['address_in'];}?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
<?php
    require_once("./view/footer.php");
?>