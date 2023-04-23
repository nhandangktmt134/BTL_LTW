<?php
   $objPDO = new PDO('mysql:host=localhost;dbname=nongsanstore'  ,'root' , '' );
   $objPDO->query('set names utf8');
  
   $id  = isset($_GET['id'])?$_GET['id']:'';

// $_SESSION['alert_name'] = $ma;
// $_SESSION['alert_title'] ='Sửa thành công';
if ($id !='')
{
    $sql ='select * from tbl_sanpham where sanpham_id =?';
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
	<title><?php echo $t['sanpham_name']; ?></title>
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
<form action="./controller/Handle_update_product.php" method="post" enctype="multipart/form-data">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
        <div class="row g-0">
            <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Cập nhật thông tin sản phẩm của <?php echo $t['sanpham_name']; ?></h3>
                <div id="message">
                    <p style='color: green'> <?php echo $msg ?? "" ?> </p> 
                    <p style='color: red'>   <?php echo $error ?? "" ?> </p>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="sanpham_id" name="sanpham_id" value= "<?php echo $t['sanpham_id'] ?>" class="form-control form-control-lg" readonly/>
                      <label class="form-label" for="sanpham_id">Mã</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="sanpham_name" name="sanpham_name" value= "<?php echo $t['sanpham_name'] ?>" class="form-control form-control-lg" required/>
                      <label class="form-label" for="sanpham_name">Tên sản phẩm</label>
                    </div>
                  </div>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="sanpham_chitiet" name="sanpham_chitiet" value= "<?php echo $t['sanpham_chitiet'] ?>" class="form-control form-control-lg" required/>
                    <label class="form-label" for="sanpham_chitiet">Chi tiết</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="text" id="sanpham_mota" name="sanpham_mota" value= "<?php echo $t['sanpham_mota'] ?>" class="form-control form-control-lg" />
                  <label class="form-label" for="sanpham_mota" >Mô tả</label>
                </div>
               
                <div class="form-outline mb-4">
                  <input type="number" id="sanpham_gia" name="sanpham_gia" value= "<?php echo $t['sanpham_gia'] ?>" class="form-control form-control-lg" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required />
                  <label class="form-label" for="sanpham_gia">Giá</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="number" id="sanpham_giakm" name="sanpham_giakm" value= "<?php echo $t['sanpham_giakm'] ?>" class="form-control form-control-lg" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required />
                  <label class="form-label" for="sanpham_giakm">Giá KM</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="checkbox" name="sanpham_hot" id="sanpham_hot" value= "<?php echo $t['sanpham_hot'] ?>">
                  <label class="form-label" for="sanpham_hot">Sản phẩm hot</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="number" id="sanpham_soluong" name="sanpham_soluong" value= "<?php echo $t['sanpham_soluong'] ?>" class="form-control form-control-lg" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required />
                  <label class="form-label" for="sanpham_soluong">Số lượng</label>
                </div>
                
                <img src="<?php echo $t['sanpham_img']; ?>" style="height: 250px" alt="<?php echo $t['sanpham_name']; ?>">
                <input type="text" name='img-old' class="form-control" value="<?php echo $t['sanpham_img'] ?>" readonly>
                <div class="form-outline mb-4">
                  <input class="form-control form-control-lg" id="img" type="file" name="img"/>
                  <label class="form-label" for="form3Example8">Cập nhật ảnh mới </label>
                  <div class="small text-muted mt-2">File có kích thước tối đa là 50 MB</div>
                </div>

                <div class="d-flex justify-content-end pt-3">
				    <a style="text-decoration: none;" href="./admin?act=product" class="btn text-white btn-block btn-danger">Quay lại</a>
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

