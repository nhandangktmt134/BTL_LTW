<?php
    require_once('header.php');
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_user WHERE username  = '{$_SESSION["username"]}'";
    $result = mysqli_query($conn,$sql);
    foreach ($result as $row) {
        # code...
        $name_update = $row['name'];
        $phone = $row['phone'];
        $addres = $row['address'];
        $email = $row['email'];
        $img = $row['img'];
    } 
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <?php require_once('profileSidebar.php'); ?>
        </div>
        <div class="col-md-5 border-right">
            <br><br><br>
            <div class="p-3 py-5">
                <form action="./updateprofile" method="POST"enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">CẬP NHẬT THÔNG TIN</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Tên</label>
                        <input type="text" class="form-control" value="<?php echo $name_update;  ?>"name="name_user" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Số điện thoại</label>
                        <input type="number" class="form-control" value="<?php echo $phone?>" name="phone" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Địa chỉ</label>
                        <input type="text" class="form-control" value="<?php echo $addres ?>" name="user_address">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Địa chỉ email</label>
                        <input type="email" class="form-control" value="<?php echo $email?>" name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="img">Chọn hình ảnh đại diện mới</label>
                        <input class="form-control form-control-lg" id="img" type="file" accept="image/png, image/jpeg, image/pjpeg , image/gif"name="img" />
                        <label class="form-label" for="form3Example8">Tải ảnh </label>
                        <div class="small text-muted mt-2">File có kích thước tối đa là 50 MB</div>                   </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="update">Lưu thay đổi</button></div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <br><br><br>
            <form action="./pwchange" method="POST">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Cập nhật mật khẩu</h4>
                </div>
                <div id="message">
                    <?php
                        if (isset($_SESSION['update_password'])) {
                            if ($_SESSION['update_password'] ==  "Thay đổi mật khẩu thành công") {
                                echo "<p style='color: green'>".$_SESSION['update_password']."</p>" ;
                            } else {
                                echo "<p style='color: red'>".$_SESSION['update_password']."</p>" ;
                            }
                        }
                    ?>
                </div>
                <div class="col-md-12">
                    <label class="labels">Nhập mật khẩu cũ</label>
                    <input type="password" class="form-control" name="oldPassword">
                </div>
                <div class="col-md-12">
                    <label class="labels">Nhập mật khẩu mới</label>
                    <input type="password" class="form-control" name="newPassword" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required>
                </div>
                <div class="col-md-12">
                    <label class="labels">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" name="confirmnewPassword" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit" name="updatepw">Lưu mật khẩu</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<?php
    require_once('footer.php')
?>