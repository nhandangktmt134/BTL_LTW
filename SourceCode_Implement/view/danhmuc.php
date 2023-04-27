<?php

  $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
  // Kiểm tra kết nối cơ sở dữ liệu
  if (mysqli_connect_errno()) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }  
  $stt =1; 
  $sql = "SELECT * FROM tbl_danhmuc";
  $result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
  <body>
  <div class="container-fluid">
    <table class="table table-hover">
      <h2>Danh mục sản phẩm</h2>
      <a href="./add_user" class='btn btn-primary'>Thêm mới</a>
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">STT</th>
          <th scope="col">Danh muc</th>
          <th scope="col">Sửa danh muc</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result  as $rows): ?>
        <tr>
          <td><a class='btn btn-danger' id='delete-user' href='./controller/Delete.php?obj=user&id=<?php echo $user['user_id']; ?>'>Xóa</a>       </td>
          <td><?php  echo $stt; $stt= $stt+1;?></td>
          <td><?php echo $rows['name_danhmuc'];?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>