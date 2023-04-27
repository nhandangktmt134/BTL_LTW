<?php
  $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
  // Kiểm tra kết nối cơ sở dữ liệu
  if (mysqli_connect_errno()) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }  
  $stt =1; 
  $sql = "SELECT * FROM tbl_contact";
  $result = mysqli_query($conn,$sql);
?>