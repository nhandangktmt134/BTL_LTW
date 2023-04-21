<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_sanpham_display";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
<style>
    .Hot>p{
        font-size: 16px;
        font-weight: 300px;
        text-align: right;
        color: hotpink;
        background-color:blue;
    }
</style>
<div class="row product-lists">
    <?php foreach ($result as $row): ?> 
    <div class="col-lg-4 col-md-6 text-center <?php  echo"producttype";echo $row['category_id'];?>">
            <div class="single-product-item">
                <div class="Hot">
                    <?php
                        if($row['sanpham_hot'] == 1) 
                        {
                            echo "<p>HOT</p>";
                        } else {
                            echo "<p>.</p>";
                        }
                    ?>
                </div>
                <div class="product-image">
                    <a href="./singleproduct?id=<?= $row['sanpham_id'] ?>"><img src="<?php  echo $row['sanpham_img']?>" alt=""></a>
                </div>
                <h3><?php  echo $row['sanpham_name']?>    </h3>
                <p class="product-price"><span><?php  echo $row['sanpham_gia']?>VNd/Kg</span> </p>
                <p> <?php  echo $row['sanpham_chitiet']?><p>
                <a href="<?php if(isset($_SESSION['username'])) {echo "./cart";} else {echo "./login";} ?>" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
        </div>
    </div>
    <?php endforeach; ?>      
</div>
