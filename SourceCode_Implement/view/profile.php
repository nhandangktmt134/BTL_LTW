<?php
    require_once('header.php')
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <?php require_once('profileSidebar.php'); ?>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <form action="/SourceCode_Implement/user/updateprofile" method="POST" enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">CẬP NHẬT THÔNG TIN</h4>
                </div>
                <div id="message">
                    <?php
                        if (isset($_SESSION['update_profile'])) {
                            if ($_SESSION['update_profile'] ==  "Đã cập nhật thành công!") {
                                echo "<p style='color: green'>".$_SESSION['update_profile']."</p>" ;
                            } else {
                                echo "<p style='color: red'>".$_SESSION['update_profile']."</p>" ;
                            }
                        }
                    ?>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Tên</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['firstname'] ?>"name="firstname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Họ</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['lastname'] ?>"name="lastname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Số điện thoại</label>
                        <input type="number" class="form-control" value="<?php echo $_SESSION['phone'] ?>" name="phone" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Địa chỉ</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_address'] ?>" name="user_address">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Địa chỉ email</label>
                        <input type="email" class="form-control" value="<?php echo $_SESSION['email'] ?>" name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="img">Chọn hình ảnh đại diện mới</label>
                        <div><input type="file" id="img" name="img" accept="image/png, image/jpeg, image/pjpeg , image/gif" ></div>
                   </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="update">Lưu thay đổi</button></div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form action="/bookstore/user/pwchange" method="POST">
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