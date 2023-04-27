<?php
    require_once("controller/Usercontroller.php");
    require_once("controller/Productcontroller.php");
    require_once("controller/Postcontroller.php");

    $userC = new user();
    $productC = new product();
    $postC = new post();

    $category =  isset($_GET['act']) ? $_GET['act'] : 'user';
?>
<!DOCTYPE html>
<html lang="vi">
<?php
    require_once("./view/header.php");
?>

<body>
    <div class="tab__container" style='margin-top: 200px !important'>
        <ul class="nav nav-pills ">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./admin?act=user">QL người dùng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./admin?act=product">QL sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./admin?act=post">QL bài viết</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./admin?act=donhang">QL đơn hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./admin?act=danhmuc">Danh mục sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./admin?act=contact">Danh sách liên hệ KH</a>
            </li>
        </ul>
    </div>
    <div>

        <?php  
            switch ($category) {
                case 'user':
                    $userC->getall();
                    break;
                case 'product':
                    $productC->getall();
                    break;
                case 'post':
                    $postC->getall();
                    break;
                case 'donhang':
                    require_once("./view/tabledh.php");
                    break;
                case 'danhmuc':
                    require_once("./view/danhmuc.php");
                    break;
                case 'contact':
                        require_once("./view/contact_ad.php");
                        break;
                default:
                    # code...
                    break;
            }
        ?>
    </div>
    <div>
        <?php require_once("./view/footer.php"); ?>
    </div>
</body>

</html>