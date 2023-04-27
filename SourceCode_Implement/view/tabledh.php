<?php
require_once 'model/tabledhModel.php';
?>
<!DOCTYPE html>
<html>
  <body>
  <h1>Danh sách  đơn hàng</h1>

  <div class="container-fluid">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">STT</th>
          <th scope="col">ID_Donhang</th>
          <th scope="col">Tên người nhận</th>
          <th scope="col">Ngày đặt </th>
          <th scope="col">Tổng đơn</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">Phương thức thanh toán</th>
          <th scope="col">Số điện thoại</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result  as $rows): ?>
        <tr>
          <td>
          </td>
          <td><?php  echo $stt; $stt= $stt+1;?></td>
          <td><?php echo $rows['id_donhang'];?></td>
          <td><?php  echo $rows['name_cus'];?></td>
          <td><?php  echo  $rows['date_dh'];?></td>
          <td><?php  echo  $rows['total'];?></td>
          <td><?php  echo  $rows['address_in'];?></td>
          <td><?php  echo  $rows['pprice'];?></td>
          <td> <?php  echo  $rows['phone_in'];?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>