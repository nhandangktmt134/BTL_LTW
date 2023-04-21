<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_sanpham WHERE sanpham_id  =" .$_GET["id"];
    $result = mysqli_query($conn,$sql);
    $product = mysqli_fetch_assoc($result);
    var_dump($sql);
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
                        <p class="single-product-pricing"><?php echo $product['sanpham_gia'];?> </p><span>Per/Kg</span>
                        <p><?php echo $product['sanpham_mota'];?></p>
                        <div class="single-product-form">
                            <form action="./">
                                <input type="number" placeholder="0"><a> / <?php echo $product['sanpham_soluong'];?> Products</a>
                            </form>
                            <a href="./cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            <p><strong>Categories: </strong><?php echo $product['category_id'];?></p>
                        </div>
                        <h4>Share:</h4>
                        <ul class="product-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                        <!-- reviews --><div class="customer-rev left-side my-4">
                            <h3 class="sear-head">Customer Review</h3>
                            <ul class="w3layouts-box-list">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span>5.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span>4.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span>3.5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span>3.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star-half-o" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span>2.5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- reviews -->
                    </div>
                </div>
            </div>
        </div>
        <div class="cmt">
            <iframe src="./comment?id=<?php $_GET['id']?>" width="100%" height="400px" frameboder ="0"></iframe>
        </div>
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