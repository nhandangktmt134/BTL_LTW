<?php

// a) List products to the database
$name_sp = $description = $type = $price = $image = $dcrip_quick = $price_km="";
$conn = mysqli_connect('localhost', 'root', '', 'btlweb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM tb_sanpham";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>List of Products</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            td {
                text-align: justify;
            }

            th, #imageCell {
                text-align: center;
            }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

    </head>
    <?php
        require_once("./head.php");
    ?>
    <!-- Type Product -->
    <div class="slick-track" style="opacity: 1; width: 2728px; transform: translate3d(-496px, 0px, 0px); transition: transform 500ms ease 0s;">
    <div class="col-md-4 product-category product first slick-slide slick-cloned" style="width: 248px;" tabindex="-1" role="tabpanel" id="" aria-describedby="slick-slide-control01" data-slick-index="-1" aria-hidden="true">
        <div class="col-md-4 product-category product first">
                <div class="cat-wrap" style="background-color: #ebd3c3">
                    <a href="">
                    <img src="" alt="Type Product" width= 400px height= 400px sizes="(max-width: 768px) 100vw, 768px" /> 
                        <h2 class="woocommerce-loop-category__title">
                            <!--<?php echo $row['type'] ?>-->
                            Đặc Sản
                            <mark class="count">(20)</mark>
                        </h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <body class="d-flex h-100">
            
        <!-- Main content -->
        <div class="shop-filter row">
            <div class="shop-filter-left col-md-6">
                <p class="woocommerce-result-count">
                    Showing 1 &ndash; 6 of 11 results 
                </p>
            </div>

            <div class="shop-filter-right col-md-6">
                <div class="switch-view">
                    <span id="switch-view-list" class="switcher list hint--top hint--bounce hint--success" aria-label="List" rel="list" data-col="col-md-3">
                        <i class="fa-solid fa-bars"></i> 
                    </span>
                    <span id="switch-view-grid" class="switcher grid hint--top hint--bounce hint--success" aria-label="Grid" rel="grid" data-col="col-md-3">
                        <i class="fa-solid fa-grip-vertical"></i>
                    </span>
                </div>
                <!--De viet sau-->
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby">
                        <option value="popularity"> Thứ tự theo mức độ phổ biến </option>
                        <option value="rating"> Thứ tự theo điểm đánh giá </option>
                        <option value="date" selected='selected'> Mới nhất </option>
                        <option value="price-up"> Thứ tự theo giá: thấp đến cao </option>
                        <option value="price-down"> Thứ tự theo giá: cao xuống thấp </option>
                    </select>
                    <input type="hidden" name="paged" value="1" />
                </form>
            </div>
        </div>
         <!-- Table -->    
        <div class="products row"> 
            <?php foreach ($result as $row): ?>                    
                <div class="product col-md-4 type-product post-19148 status-publish first instock product_cat-dac-san product_cat-do-kho has-post-thumbnail featured downloadable shipping-taxable purchasable product-type-simple" >
                        <div class="product-thumb"width="300px" height="300px">
                            <div>
                                <a href="" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <div class="badges">
                                        <span class="hot">
                                            Hot
                                        </span>
                                    </div>
                                    <img src=  "<?php echo $row['image'] ?>" alt="image_sanpham" width="200px" height="200px"/>
                                </a>
                            </div>
                            <div class="product-action">
                                <span class="fa-solid fa-bag-shopping hint--top hint--rounded hint--bounce add-to-card" aria-label="Thêm vào giỏ hàng">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </span>
                                <div class="hint--top hint--rounded hint--bounce fa-solid fa-jet-fighter-up" aria-label="Quick view">
                                    <i class="fa-solid fa-jet-fighter-up"></i>
                                </div>
                            </div>
                        </div>

                        <div class="product-info">
                            <?php echo $row['name_sp'] ?>
                            <span class="price">
                                <span class="woocommerce-Price-amount amount"> 
                                    <bdi>
                                        <?php
                                            if ('price'>'price_km' && 'price_km' !=0)
                                                echo $row['price_km'];
                                            else
                                                echo $row['price'];
                                        ?>
                                        <span class="woocommerce-Price-currencySymbol">
                                            &#8363;
                                        </span>
                                    </bdi>
                                </span>
                            </span>
                        <div class="product-rate">
                        </div>
                    </div>     
                </div>                       
            <?php endforeach; ?>
        </div> 

    <br></br>
    <center>
        <a class="btn btn-danger my-4" href="index.php" role="button" >Back</a>
        <a class="btn btn-danger my-4" href="sp.php" role="button" >Save</a> 
    </center>
    </body>
    
    <!--footer-->
    <?php
                require_once("./footer.php");
    ?>
</html>