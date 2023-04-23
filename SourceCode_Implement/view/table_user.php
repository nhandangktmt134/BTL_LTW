<?php

    $list_user = isset($_SESSION['listuser']) ?  $_SESSION['listuser'] : [];


?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <div class="container-fluid">
    <h1>Danh sách người dùng</h1>
    <a href="./add_user" class='btn btn-primary'>Thêm mới</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Mã</th>
          <th scope="col">Tên</th>
          <th scope="col">Tên đăng nhập</th>
          <th scope="col">Địa chỉ email</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Địa chỉ</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list_user as $user): ?>
        <tr>
           <td>
            <a class='btn btn-danger' id='delete-user' href='./controller/Delete.php?obj=user&id=<?php echo $user['user_id']; ?>'>Xóa</a>
            <Button class='btn btn-primary' >Sửa</Button>
           </td>
          <td><?php echo isset($user['user_id']) ? $user['user_id'] : "Chưa có"; ?></td>
          <td><?php echo isset($user['name']) ? $user['name'] : "Chưa có"; ?></td>
          <td><?php echo isset($user['username']) ? $user['username'] : "Chưa có"; ?></td>
          <td><?php echo isset($user['email']) ? $user['email'] : "Chưa có"; ?></td>
          <td><?php echo isset($user['phone']) ? $user['phone'] : "Chưa có"; ?></td>
          <td><?php echo isset($user['address']) && $user['address'] ? $user['address'] : "Chưa có"; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>