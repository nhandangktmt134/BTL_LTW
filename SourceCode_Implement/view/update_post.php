<?php
   $objPDO = new PDO('mysql:host=localhost;dbname=nongsanstore'  ,'root' , '' );
   $objPDO->query('set names utf8');
  
   $id  = isset($_GET['id'])?$_GET['id']:'';

// $_SESSION['alert_name'] = $ma;
// $_SESSION['alert_title'] ='Sửa thành công';
if ($id !='')
{
    $sql ='select * from tbl_post where id =?';
    $arr =[$id];
    $objStatement =$objPDO->prepare($sql);
    $objStatement->execute($arr);
    $n = $objStatement->rowCount();

    $t = $objStatement->fetch();
    // print_r($t);
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $t['title']; ?></title>
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
<form action="./controller/Handle_update_post.php" method="post" enctype="multipart/form-data">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
        <div class="row g-0">
            <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Cập nhật thông tin bài viết <?php echo $t['id']; ?></h3>
                <div id="message">
                    <p style='color: green'> <?php echo $msg ?? "" ?> </p> 
                    <p style='color: red'>   <?php echo $error ?? "" ?> </p>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="id" name="id" value= "<?php echo $t['id'] ?>" class="form-control form-control-lg" readonly/>
                      <label class="form-label" for="id">Mã</label>
                    </div>
                  </div>
                </div>
                
                <div class="form-outline mb-4">
                    <input type="text" id="title" name="title" value= "<?php echo $t['title'] ?>" class="form-control form-control-lg" required/>
                    <label class="form-label" for="title">Chi tiết</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="text" id="detail" name="detail" value= "<?php echo $t['detail'] ?>" class="form-control form-control-lg" />
                  <label class="form-label" for="detail" >Mô tả</label>
                </div>
               
                <img src="<?php echo $t['img']; ?>" style="height: 250px" alt="<?php echo $t['img']; ?>">
                <input type="text" name='img-old' class="form-control" value="<?php echo $t['img'] ?>" readonly>
                <div class="form-outline mb-4">
                  <input class="form-control form-control-lg" id="img" type="file" name="img"/>
                  <label class="form-label" for="form3Example8">Cập nhật ảnh mới </label>
                  <div class="small text-muted mt-2">File có kích thước tối đa là 50 MB</div>
                </div>

                <div class="d-flex justify-content-end pt-3">
				    <a style="text-decoration: none;" href="./admin?act=post" class="btn text-white btn-block btn-danger">Quay lại</a>
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

