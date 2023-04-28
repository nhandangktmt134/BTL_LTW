<!-- <?php
    $name = "";
    $sql = "SELECT * FROM tbl_user WHERE username  = '{$_SESSION["username"]}'";
    $result = mysqli_query($conn,$sql);
    // var_dump($result);
    foreach ($result as $row) {
        # code...
        $name_update = $row['name'];
        $phone = $row['phone'];
        $addres = $row['address'];
        $email = $row['email'];
        $img = $row['img'];
    } 
    echo <<< _END
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" width="150px" src="$img">
            <span class="font-weight-bold">$name</span>
            <span class="text-black-50">$email</span>
            <span> </span>
        </div>
    _END;
?> -->

<div class="d-flex flex-column align-items-center text-center p-3 py-5">
    <img class="rounded-circle mt-5" width="150px" src="<?php echo $img?>">
    <span class="font-weight-bold"><?php echo $name?></span>
    <span class="text-black-50"><?php echo $email ?></span>

    <?php
        if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
            echo <<< _END
                <span class="font-weight-bold" style="color: red;">ADMIN</span>
            _END;
        }else {
            echo <<< _END
            <span class="font-weight-bold" style="color: green;">USER</span>
        _END;
        }
    ?>
    <?php
        if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
            echo <<< _END
            <form action="./admin?act=user" method="POST">
                <button type="submit" class="btn btn-outline-success" style="margin-top: 10px;">Quản lí người dùng</button>
            </form>
            <form action="./admin?act=product" method="POST">
                <button type="submit" class="btn btn-outline-success" style="margin-top: 10px;">Quản lí sản phẩm V</button>
            </form>
            <form action="./admin?act=donhang" method="POST">
                <button type="submit" class="btn btn-outline-success" style="margin-top: 10px;">Quản lí đơn hàng V</button>
            </form>
            _END;
        }
    ?>
    
</div>