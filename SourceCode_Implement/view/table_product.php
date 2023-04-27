<?php

    $list_product = isset($_SESSION['listproduct']) ?  $_SESSION['listproduct'] : [];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>
  <div class="container-fluid">
    <h1>Danh sách sản phẩm</h1>
    <a href="./add_product" class='btn btn-primary'>Thêm mới</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Mã</th>
          <th scope="col">Mã loại</th>
          <th scope="col">Tên</th>
          <th scope="col">Chi tiết</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Giá</th>
          <th scope="col">Giá khuyến mãi</th>
          <th scope="col">SL</th>
          <th scope="col">Hình</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($list_product as $product): ?>
        <tr>
           <td>
            <a class='btn btn-danger' id='delete-product' href='./controller/Delete.php?obj=product&id=<?php echo $product['sanpham_id']; ?>'>Xóa</a>
            <a class="btn btn-info" href="./update_product?id=<?php echo $product['sanpham_id'] ?>">Sửa</a>
           </td>
          <td><?php echo isset($product['sanpham_id']) ? $product['sanpham_id'] : "Chưa có"; ?></td>
          <td><?php echo isset($product['category_id']) ? $product['category_id'] : "Chưa có"; ?></td>
          <td><?php echo isset($product['sanpham_name']) ? $product['sanpham_name'] : "Chưa có"; ?></td>
          <td><?php echo isset($product['sanpham_chitiet']) ? $product['sanpham_chitiet'] : "Chưa có"; ?></td>
          <td><?php echo isset($product['sanpham_mota']) ? $product['sanpham_mota'] : "Chưa có"; ?></td>
          <td><?php echo isset($product['sanpham_gia']) && $product['sanpham_gia'] ? $product['sanpham_gia'] : "Chưa có"; ?></td>
          <td><?php echo isset($product['sanpham_giakm']) && $product['sanpham_giakm'] ? $product['sanpham_giakm'] : "Chưa có"; ?></td>
          <td><?php echo isset($product['sanpham_soluong']) && $product['sanpham_soluong'] ? $product['sanpham_soluong'] : "Chưa có"; ?></td>
          <td>
            <img src="<?php echo isset($product['sanpham_img']) ? $product['sanpham_img'] : ""; ?>" alt="<?php $product['sanpham_img']; ?>">
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>