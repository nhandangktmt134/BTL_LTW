<?php
   $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
   // Kiểm tra kết nối cơ sở dữ liệu
   if (mysqli_connect_errno()) {
	 die('Failed to connect to MySQL: ' . mysqli_connect_error());
   }   
//    // Lấy dữ liệu từ bảng tbl_taodon
	$sql = "SELECT * FROM tbl_taodon";
	$result = mysqli_query($conn,$sql);
	$sum = 0;
	$stt=1;

//    $rows = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Thanh Toán</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			font-size: 20px;
			padding: 20px;
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			width: 50%;
			margin: 0 auto;
		}
		input[type=text], input[type=number], input[type=email], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #fff;
			resize: none;
			font-size: 18px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 20px;
			margin-top: 10px;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		label {
			font-weight: bold;
			margin-bottom: 5px;
		}
		
	</style>
</head>
<?php
    require_once("./view/header.php");
?>
<body>
<div class="cart-section mt-150 mb-150">
		<div class="col-lg-8 col-md-12">
			<ul>
				<a href="./home">Trang chủ</a>
				<a href="./payment">Giỏ hàng</a>
			</ul>
		</div>
		<div class="container">
			<div class="row">				
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<br>
							<h2>Sản phẩm</h2>
							<thead class="cart-table-head">
								<tr class="table-head-row">
                                    <th class="product-remove">STT</th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($result as $rows): ?> 
								<tr class="table-body-row">
								<td class="product"><?php  echo $stt; $stt ++;?></td>
								<td class="product-image"><img src="<?php echo $rows['sanpham_img']?>" alt=""></td>
								<td class="product-name"><?php echo $rows['name_sp'];?></td>
								<td class="product-price"><?php  echo $rows['price'];?></td>
								<td class="product-quantity"><?php  echo  $rows['quantifiy'];?></td>
								<td class="product-total"> <?php  echo  $rows['total'];$sum = $sum + $rows['total'];?></td>
								</tr>
								<?php endforeach; ?> 
							</tbody>
						</table>
					</div>
					<div class="cart-table-wrap">
						<table class="cart-table">
							<br>
							<h2>Địa chỉ giao hàng</h2>
							<form method="post" action="./order">
								<div>
									<label for="name">Họ tên:</label>
									<input type="text" id="name_donhang" name="name_donhang" placeholder="Nhập họ tên" required>
								</div>
								<div>
									<label for="phone">Số điện thoại:</label>
									<input type="number" id="phone_donhang" name="phone_donhang" placeholder="Nhập số điện thoại"required>
								</div>
								<div>
									<label for="address">Địa chỉ:</label>
									<input type="text" id="address_donhang" name="address_donhang" placeholder="Nhập địa chỉ" required>
								</div>
								<div>
									<label for="payment_method">Phương thức thanh toán:</label>
									<select id="payment_method" name="payment_method" required>
										<option value="">Chọn phương thức thanh toán</option>
										<option value="COD">Thanh toán khi nhận hàng (COD)</option>
										<option value="Bank">Chuyển khoản ngân hàng</option>
										<option value="MOMO">Ví điện tử Momo</option>
									</select>
								</div>		
								<div><input type="hidden" name="pay" value="<?php echo $sum;?>"></div>	
								<div><input type="hidden" name="user" value="<?php echo $_SESSION['username']?>"></div>				
								<input type="submit" value="Thanh toán">
						</form>
						</table>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td><?php  echo  $sum;?> VND</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td><?php  echo  $sum*5/100;?> VND</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td><?php  echo  $sum*105/100;?> VND</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
    require_once("./view/footer.php");
?>