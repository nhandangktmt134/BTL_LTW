<?php
$id_sp;
$username = $lastname = $email = $phone = $img = $address = $price_km="";
$conn = mysqli_connect('localhost', 'root', '', 'btlweb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
  mysqli_close($conn);
?>
<!-- Header -->
<?php
  require_once("./head.php");
?>
<!--Body -->
<section class="h-100" >
  <div class="col-xl-6">
  <div class="card-body p-md-5 text-black" >
  <h3 class="mb-5 text-uppercase">Đăng ký tài khoản</h3>

  <div id="message">
      <p style='color: green'> <?php echo $data['msg'] ?? "" ?> </p> 
      <p style='color: red'>   <?php echo $data['err'] ?? "" ?> </p>
  </div>

  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required/>
        <label class="form-label" for="firstname">Tên</label>
      </div>
    </div>
    <div class="col-md-6 mb-4">
      <div class="form-outline">
        <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required/>
        <label class="form-label" for="lastname">Họ và tên đệm</label>
      </div>
    </div>
  </div>
  
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control form-control-lg" />
    <label class="form-label" for="email">Địa chỉ email</label>
  </div>
  <div class="form-outline mb-4">
      <input type="text" id="username" name="username" class="form-control form-control-lg" pattern="^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$" required/>
      <label class="form-label" for="username">Tên tài khoản</label>
      <div class="small text-muted mt-2">
          <b>Yêu cầu:</b> Độ dài từ 8-20 kí tự. Chỉ gồm chữ, số, dấu gạch (_) và dấu chấm (.).
          Những tên sau đây là không hợp lệ: <b>_username</b> | <b>username_</b> | <b>.username</b> | <b>username.</b> | <b>user__name</b> | <b>user..name</b>
      </div>
  </div>

  <div class="form-outline mb-4">
      <input type="password" id="password" name="password" class="form-control form-control-lg" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required/>
      <label class="form-label" for="password">Mật khẩu</label>
      <div class="small text-muted mt-2">
          <b>Yêu cầu:</b> Độ dài tối thiểu 8 ký tự, ít nhất có 1 chữ cái, 1 chữ số và 1 ký tự đặc biệt.
      </div>
  </div>

  <div class="form-outline mb-4">
      <input type="password" id="retypePass" name="retypePass" class="form-control form-control-lg" />
      <label class="form-label" for="retypePass">Nhập lại mật khẩu</label>
      <!-- <div id="wrongRetype" class="small mt-2" style="color:red;">Mật khẩu chưa trùng khớp</div> -->
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="address" name="address" class="form-control form-control-lg" />
    <label class="form-label" for="address">Địa chỉ</label>
  </div>

  <div class="form-outline mb-4">
    <input type="number" id="phone" name="phone" class="form-control form-control-lg" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required />
    <label class="form-label" for="phone">Số điện thoại</label>
  </div>
  
  <div class="form-outline mb-4">
    <input class="form-control form-control-lg" id="img" type="file" name="img" />
    <label class="form-label" for="form3Example8">Tải ảnh avatar</label>
    <div class="small text-muted mt-2">File có kích thước tối đa là 50 MB</div>
  </div>

  <div class="d-flex justify-content-end pt-3">
    <button type="reset" class="btn btn-light btn-lg">Đặt lại</button>
    <button type="submit" class="btn btn-primary btn-lg ms-2" name="signup">Xác nhận đăng kí</button>
  </div>
 </div>   
</form>
</section>
<!-- Footer -->
<?php
   require_once("./footer.php");
?> 
