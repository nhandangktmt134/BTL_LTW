<?php
require_once 'model/contactModel.php';
?>
<!DOCTYPE html>
<html>
  <body>
  <div class="container-fluid">
    <table class="table table-hover">
      <h2>Danh sách liên hệ khách hàng</h2>
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">STT</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Subject</th>
          <th scope="col">Address</th>
          <th scope="col">Date Free</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result  as $rows): ?>
        <tr>
        <td><a class='btn btn-danger'  href='./controller/Delete.php?obj=contact&id=<?php echo $rows['id']; ?>'>Xóa</a></td>
        <td>
          </td>
          <td><?php  echo $stt; $stt= $stt+1;?></td>
          <td><?php echo $rows['name'];?></td>
          <td><?php echo $rows['email'];?></td>
          <td><?php echo $rows['phone'];?></td>
          <td><?php echo $rows['subject'];?></td>
          <td><?php echo $rows['address'];?></td>
          <td><?php echo $rows['date_free'];?></td>
          <td><?php echo $rows['message'];?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>
</html>