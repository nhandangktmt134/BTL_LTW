<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Kiểm tra nếu form đã được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $subject = test_input($_POST["subject"]);
    $address = test_input($_POST["address"]);
    $date = test_input($_POST["date_free"]);
    $message = test_input($_POST["message"]);

    // Kết nối đến database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nongsanstore";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Kiểm tra kết nối
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Thực hiện truy vấn để chèn dữ liệu vào bảng tbl_contact
    $sql = "INSERT INTO tbl_contact (`name`, `email`, `phone`, `subject`, `address`, `date_free`, `message`)
  VALUES ('$name', '$email', '$phone', '$subject', '$address', '$date', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Thông tin của bạn đã được gửi thành công!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
