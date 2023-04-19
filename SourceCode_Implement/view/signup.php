
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NÔNG SẢN SẠCH</title>
	<link rel="shortcut icon" type="image/png" href="./asset/img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./asset/css/all.min.css">
	<link rel="stylesheet" href="./asset/css/owl.carousel.css">
	<link rel="stylesheet" href="./asset/css/magnific-popup.css">
	<link rel="stylesheet" href="./asset/css/animate.css">
	<link rel="stylesheet" href="./asset/css/meanmenu.min.css">
	<link rel="stylesheet" href="./asset/css/main.css">
	<link rel="stylesheet" href="./asset/css/style.css">
	<link rel="stylesheet" href="./asset/css/responsive.css">
	<link rel="stylesheet" href="./asset/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</head>
<body>
  <?php
    require_once("./view/header.php");
  ?><br></br>
  <form action="" method="POST" enctype="multipart/form-data" >
    <div class="container py-5 h-500">
      <div class="row d-flex justify-content-center align-items-center h-300">
        <div class="col">
          <div class="card card-registration my-4">
          <div class="row g-0">
              <div class="col-xl-8">
              <div class="card-body p-md-5 text-black">
                  <div class="row">
                    <h3 class="mb-5 text-uppercase">Đăng ký tài khoản</h3>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="firstname">Tên</label>
                        <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required/>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="lastname">Họ</label>
                        <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required/>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Địa chỉ email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="username">Tên tài khoản</label>
                      <input type="text" id="username" name="username" class="form-control form-control-lg" pattern="^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$" required/>
                      <div class="small text-muted mt-2">
                          <b>Yêu cầu:</b> Độ dài từ 8-20 kí tự. Chỉ gồm chữ, số, dấu gạch (_) và dấu chấm (.).
                          Những tên sau đây là không hợp lệ: <b>_username</b> | <b>username_</b> | <b>.username</b> | <b>username.</b> | <b>user__name</b> | <b>user..name</b>
                      </div>
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="password">Mật khẩu</label>
                      <input type="password" id="password" name="password" class="form-control form-control-lg" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required/>
                      <div class="small text-muted mt-2">
                          <b>Yêu cầu:</b> Độ dài tối thiểu 8 ký tự, ít nhất có 1 chữ cái, 1 chữ số và 1 ký tự đặc biệt.
                      </div>
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="retypePass">Nhập lại mật khẩu</label>
                      <input type="password" id="retypePass" name="retypePass" class="form-control form-control-lg" />
                      <!-- <div id="wrongRetype" class="small mt-2" style="color:red;">Mật khẩu chưa trùng khớp</div> -->
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="address">Địa chỉ</label>
                    <input type="text" id="address" name="address" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="phone">Số điện thoại</label>
                    <input type="number" id="phone" name="phone" class="form-control form-control-lg" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required />
                  </div>
                  
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">Tải ảnh avatar</label>
                    <input class="form-control form-control-lg" id="img" type="file" name="img" />
                    <div class="small text-muted mt-2">File có kích thước tối đa là 50 MB</div>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="reset" class="btn btn-light btn-lg">Đặt lại</button>
                    <a href="./homem.php" class="btn btn-light btn-lg"> Home</a>
                    <button type="submit" class="btn btn-primary btn-lg ms-2" name="signup">Đăng kí</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <?php
    require_once("./view/footer.php");
  ?>
</body>
</html>