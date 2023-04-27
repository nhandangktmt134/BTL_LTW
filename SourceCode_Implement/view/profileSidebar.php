<!-- <?php
    $name = "";
    if (isset($_SESSION['img'])) $img = $_SESSION['img'];
    if (isset($_SESSION['email'])) $email = $_SESSION['email'];
    if (isset($_SESSION['firstname'])) $name .= $_SESSION['firstname']." ";
    if (isset($_SESSION['lastname'])) $name .= $_SESSION['lastname'];
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
    <img class="rounded-circle mt-5" width="150px" src="<?php echo $_SESSION['img']?? "/bookstore/asset/img/user/user.png" ?>">
    <span class="font-weight-bold"><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?></span>
    <span class="text-black-50"><?php echo $_SESSION['email'] ?></span>

    <?php
        if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {
            echo <<< _END
                <span class="font-weight-bold" style="color: green;">ADMIN</span>
            _END;
        }
    ?>

    <form action="/bookstore/profile" method="POST">
        <button type="submit" class="btn btn-outline-primary" style="margin-top:10px">Chỉnh sửa thông tin</button>
    </form>

    <?php
        if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 1)) {
            echo <<< _END
            <form action="/bookstore/profile/usermanager" method="POST">
                <button type="submit" class="btn btn-outline-success" style="margin-top: 10px;">Quản lí người dùng</button>
            </form>
            <form action="/bookstore/profile/bookmanager" method="POST">
                <button type="submit" class="btn btn-outline-success" style="margin-top: 10px;">Quản lí sách</button>
            </form>
            <form action="/bookstore/profile/ordermanager" method="POST">
                <button type="submit" class="btn btn-outline-success" style="margin-top: 10px;">Quản lí đơn hàng</button>
            </form>
            _END;
        }
    ?>
    
</div>