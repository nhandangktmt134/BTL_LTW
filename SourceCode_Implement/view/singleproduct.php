<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_sanpham WHERE sanpham_id  =" .$_GET["id"];
    $result = mysqli_query($conn,$sql);
    $product = mysqli_fetch_assoc($result);
    $id_sp = $_GET["id"];
    if($product['sanpham_gia']>$product['sanpham_giakm'] && $product['sanpham_giakm']!= '0') {
		$price = $product['sanpham_giakm'];
	}else $price = $product['sanpham_gia'];
?>

<!DOCTYPE html>
<html lang="vn">
<?php
    require_once("./view/header.php");
?>

<body>
    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="<?php  echo $product['sanpham_img']?>" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3><?php echo $product['sanpham_name'];?></h3>
                        <div class="description">
                               <?php 
                                if($product['sanpham_giakm']!=0) echo "<h2> Sale: ".$product['sanpham_giakm']   ."</h2>";
                               ?> 
                        </div>
                        <p class="single-product-pricing"><?php echo "<h5>".$product['sanpham_gia']."</h5>";?> </p><span>Per/Kg</span>
                        <p><?php echo $product['sanpham_mota'];?></p>
                        <div class="single-product-form">
                            <div> <h5> Số lượng: <?php echo $product['sanpham_soluong'];?> Products</h5></div>
                            <br>
                            <!-- <label for="Delivery Date">Delivery Date</label>
                            <input id="Delivery Date" class="option datetime" name="option-Delivery Date" type="datetime-local" data-price="5.00" data-modifier="add"> -->
                            <form action="<?php if(isset($_SESSION['username'])) {echo "./cart?id_sp=<?php echo $id_sp?>";} else {echo "./login";}?>" method="post">
                                <input type="number" name="quantity" value="1" min="1" max="<?=$product['sanpham_soluong']?>" placeholder="Quantity" required>
                                <input type="hidden" name="product_img" value="<?php echo $product['sanpham_img']?>">
                                <input type="hidden" name="product_name" value="<?php echo $product['sanpham_name']?>">
                                <input type="hidden" name="product_gia" value="<?php echo $price?>">
                                <input type="hidden" name="product_sl" value="<?php echo     $product['sanpham_soluong'];?>">
                                <input type="submit" name="add_to_cart" value="Add To Cart">
                            </form>                           
                            <p><strong>Categories: </strong><?php echo $product['category_id'];?></p>
                        </div>
                        <h4>Share:</h4>
                        <ul class="product-share">
                            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/?lang=vi"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="cmt">
            <iframe src="./comment?id_sp=<?php echo $_GET['id']?>" width="100%" height="400px" frameboder ="0"></iframe>
        </div> -->
    </div> 
<!-- end single product -->

            
    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">	
                        <h3><span class="orange-text">Related</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                    </div>
                </div>
            </div>
            
                <?php
                    require_once("./view/product.php");
                ?>  
        </div>
    </div>
    <!-- end more products -->
                                    
    </body>    
</html>
<?php
require_once("./view/footer.php");
?>