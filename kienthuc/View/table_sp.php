
<div class="top-search">
    <div class="container">
        <div class="row row-xs-center">
            <div class="col-md-12">
                <form role="search" method="get" class="search-form" action="listproducts.php">
                        <label>
                            <span class="screen-reader-text">Tìm kiếm cho:</span>
                            <input type="search" class="search-field" placeholder="Tìm kiếm &hellip;" value="" name="" />
                        </label>
                    <input type="submit" class="search-submit" value="Tìm kiếm" />
                </form> 
            </div>
        </div>
    </div>
</div>

<div class="products row" width="300px" height="300px"> 
            <?php foreach ($result as $row): ?>                    
                <div class="product col-md-4 type-product status-publish first instock has-post-thumbnail featured downloadable shipping-taxable purchasable product-type-simple">
                        <div class="product-thumb" >
                            <div>
                                <a href="" class="">
                                    <div class="badges">
                                        <span class="hot">
                                            Hot
                                        </span>
                                    </div>
                                    <img src=  "<?php echo $row['image'] ?>" alt = "image_sanpham" width=5% height=150px/>
                                </a>
                            </div>
                            <div class="product-action">
                                <span class="fa-solid fa-bag-shopping hint--top hint--rounded hint--bounce add-to-card" label="Thêm vào giỏ hàng">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </span>
                                <div class="quick-view-btn hint--top hint--rounded hint--bounce fa-solid fa-jet-fighter-up" label="Quick view" >
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