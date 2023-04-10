<?php
    // Thay đổi các thông số kết nối tới cơ sở dữ liệu tương ứng với hệ thống của bạn
    $name_sp = $description = $type = $price = $image = $dcrip_quick = $price_km="";
    $conn = mysqli_connect('localhost', 'root', '', 'btlweb');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tb_sanpham";
    $result = mysqli_query($conn, $sql);
    // Tạo kết nối tới cơ sở dữ liệu
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_GET['id_sp'])) {
        $id_sp = $_GET['id_sp'];
        $sql = "SELECT * FROM tb_sanpham WHERE id_sp ='$id_sp'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name_sp = $row['name_sp'];
        $description = $row['description'];
        $price = $row['price'];
        $price_km = $row['price_km'];
        $image = $row['image'];
        $dcrip_quick= $row['dcrip_quick'];
        $type = $row['type'];
        mysqli_close($conn);
    } 
    // Xử lý yêu cầu lấy thông tin sản phẩm
    if ($_POST['action'] == 'get_product_info') {
        $product_id = $_POST['product_id'];
        // Trả về thông tin sản phẩm dưới dạng JSON
        echo json_encode(array(
        'name_sp' => $name_sp,
        'price' => $price,
        'price_km' =>  $price_km,
        'dcrip_quick' =>  $dcrip_quick,          
        'image' => $product_image
        ));
    }    
    // Xử lý yêu cầu thêm sản phẩm vào giỏ hàng
    if ($_POST['action'] == 'add_to_cart') {
        $id_sp = $_POST['id_sp'];
        $num = 1;
        // Thêm sản phẩm vào giỏ hàng
        // ...
    }    
?>
<!-- Quick View Modal -->
<div id="quick-view-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
        <div class="product-info">
        <img src="" alt="Product Image">
        <h3 class="name_sp"></h3>
        <p class="price"></p>
        <p class="price_km"></p>
        <p class="dcrip_quick"></p>
        <button class="add-to-cart-btn"></button>
    </div>
  </div>
</div>
