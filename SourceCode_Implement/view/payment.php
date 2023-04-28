<?php
   $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
   // Kiểm tra kết nối cơ sở dữ liệu
   if (mysqli_connect_errno()) {
	 die('Failed to connect to MySQL: ' . mysqli_connect_error());
   }   
//    // Lấy dữ liệu từ bảng tbl_taodon
   $sum =0 ; $stt = 1;
   $sql = "SELECT * FROM tbl_taodon";
   $result = mysqli_query($conn,$sql);
//    $rows = mysqli_fetch_assoc($result);
//    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="vn">
<?php
    require_once("./view/header.php");
?>
<body>
<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
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
								<td class="product-remove" id='delete-user'><a href='./controller/Delete.php?obj=taodon&id=<?php echo $rows['id_spdon'];?>'><i class="far fa-window-close"></i></a></td>
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
						<div class="cart-buttons">
							<a href="./payment" 	class="boxed-btn">Update Cart</a>							
							<a href="./shop" 		class="boxed-btn black">Back</a>
						</div>
						<br>
						<form action="./checkout" method="post"class="boxed-btn">
                                <input type="hidden" name="pay_sum" value="<?php echo $sum;?>">
								<input type="submit" name="Payment" value="Payment">
                        </form> 
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