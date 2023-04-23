<?php

    $list_post = isset($_SESSION['listpost']) ?  $_SESSION['listpost'] : [];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <div class="container-fluid">
    <h1>Danh sách bài viết</h1>
    <a href="./add_post" class='btn btn-primary'>Thêm mới</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Mã</th>
          <th scope="col">Tiêu đề</th>
          <th scope="col">Chi tiết</th>
          <th scope="col">Hình</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list_post as $post): ?>
        <tr>
           <td>
            <a class='btn btn-danger' id='delete-post' href='./controller/Delete.php?obj=post&id=<?php echo $post['id']; ?>'>Xóa</a>
            <a class="btn btn-info" href="./update_post?id=<?php echo $post['id'] ?>">Sửa</a>
           </td>
          <td><?php echo isset($post['id']) ? $post['id'] : "Chưa có"; ?></td>
          <td><?php echo isset($post['title']) ? $post['title'] : "Chưa có"; ?></td>
          <td><?php echo isset($post['detail']) ? $post['detail'] : "Chưa có"; ?></td>
          <td>
            <img src="<?php echo isset($post['img']) ? $post['img'] : ""; ?>" alt="<?php $post['img']; ?>">
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>