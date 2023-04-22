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
<body>
	<form method="post" action="#">
		<label for="name">Họ tên:</label>
		<input type="text" id="name" name="name" placeholder="Nhập họ tên" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Nhập email" required>

		<label for="phone">Số điện thoại:</label>
		<input type="number" id="phone" name="phone" placeholder="Nhập số điện thoại" required>

		<label for="address">Địa chỉ:</label>
		<textarea id="address" name="address" placeholder="Nhập địa chỉ" required></textarea>

		<label for="payment_method">Phương thức thanh toán:</label>
		<select id="payment_method" name="payment_method" required>
			<option value="">Chọn phương thức thanh toán</option>
			<option value="COD">Thanh toán khi nhận hàng (COD)</option>
			<option value="Bank">Chuyển khoản ngân hàng</option>
		</select>
		<input type="submit" value="Thanh toán">
	</form>
</body>
</html>
