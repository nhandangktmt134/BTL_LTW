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
                <form action="<?php if(isset($_SESSION['username'])) {echo "./cart?id_sp=<?php echo $id_sp?>";} else {echo "./login";}?>" method="post">
                    <input type="hidden" name="quantity" value="1" min="1" max="<?=$product['sanpham_soluong']?>" placeholder="Quantity" required>
                    <input type="hidden" name="product_img" value="<?php echo $product['sanpham_img']?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['sanpham_name']?>">
                    <input type="hidden" name="product_gia" value="<?php echo $price?>">
                    <input type="hidden" name="product_sl" value="<?php echo     $product['sanpham_soluong'];?>">
                    <input type="submit" name="add_to_cart" value="Add To Cart">
                </form> 
        </div>
    </div>
    <?php endforeach; ?>      
</div>
