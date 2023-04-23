<?php 
    require_once("controller/Postcontroller.php");
    $postC = new post();
    $postC->insert();

    $error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
    $msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : "";

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm mới bài viết</title>
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
                <h3 class="mb-5 text-uppercase">Tạo bài viết</h3>

                <div id="message">
                    <p style='color: green'> <?php echo $msg ?? "" ?> </p> 
                    <p style='color: red'>   <?php echo $error ?? "" ?> </p>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="title" name="title" class="form-control form-control-lg" required/>
                    <label class="form-label" for="title">Tiêu đề</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="detail" name="detail" class="form-control form-control-lg" required/>
                    <label class="form-label" for="detail">Chi tiết</label>
                </div>
                
                
                <div class="form-outline mb-4">
                  <input class="form-control form-control-lg" id="img" type="file" name="img" />
                  <label class="form-label" for="form3Example8">Tải ảnh </label>
                  <div class="small text-muted mt-2">File có kích thước tối đa là 50 MB</div>
                </div>

                <div class="d-flex justify-content-end pt-3">
				<a style="text-decoration: none;" href="./admin?act=post" class="btn text-white btn-block btn-danger">Quay lại</a>
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
