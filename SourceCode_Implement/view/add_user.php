<?php 
    require_once("controller/Usercontroller.php");
    $userC = new user();
    $userC->signup();

    $error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
    $msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : "";

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NÔNG SẢN SẠCH</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
     <!-- Example: -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/loginasset/fonts/icomoon/style.css">
    <link rel="stylesheet" href="./asset/loginasset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./asset/loginasset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/loginasset/css/style.css">
</head>
<body>
<section class="h-100 bg-dark">
<form action="" method="post" enctype="multipart/form-data">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
        <div class="row g-0">
            <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Tạo tài khoản</h3>

                <div id="message">
                    <p style='color: green'> <?php echo $msg ?? "" ?> </p> 
                    <p style='color: red'>   <?php echo $error ?? "" ?> </p>
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
                      <label class="form-label" for="lastname">Họ</label>
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
                  <input type="hidden" id="role" name="role" class="form-control form-control-lg" value ="1"required />
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
				        <a style="text-decoration: none;" href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn text-white btn-block btn-danger">Quay lại</a>
                  <button type="reset" class="btn btn-light btn-lg">Đặt lại</button>
                  <input type="submit" name="submit" value="Xác nhận " class="btn text-white btn-block btn-primary">
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
</body>
</html>
