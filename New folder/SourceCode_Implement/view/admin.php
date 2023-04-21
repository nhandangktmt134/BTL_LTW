<?php
    require_once("controller/Usercontroller.php");
    require_once("controller/Productcontroller.php");

    $userC = new user();
    $productC = new product();

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