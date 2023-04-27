<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_danhmuc";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<?php
    require_once("./view/header.php");
?>
<body>
      <!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
    <!-- products -->
	<div class="product-section0">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">                          
                        <ul>
                            <li class="active" data-filter="*">All </li>
                            <?php foreach ($result as $row): ?>     
                            <li data-filter = "<?php echo ".producttype";echo $row['id_danhmuc']?>" >
                                <?php echo $row['name_danhmuc'] ?></li> 
                            <?php endforeach; ?>                  
                        </ul>
                    </div>
                </div>
            </div>
           
            <?php
                require_once("./view/product.php");
            ?>      
        </div>
    </div>
</body>
</html>
<?php
    require_once("./view/footer.php");
?>