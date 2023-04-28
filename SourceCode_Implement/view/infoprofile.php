<?php
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_user WHERE username  = '{$_SESSION["username"]}'";
    $result = mysqli_query($conn,$sql);
    var_dump($result);
    foreach ($result as $row) {
        # code...
        $name = $row['name'];
        $phone = $row['phone'];
        $addres = $row['address'];
        $email = $row['email'];
        $img = $row['img'];
    } 
    var_dump($row);

    require_once('header.php')
?>

<!-- HTMl -->
<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">        
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="<?php echo $img?>">
                <span class="font-weight-bold"><?php echo $name?></span>
                <span class="text-black-50"><?php echo $email ?></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <form href="./profile"></form>
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">THÔNG TIN CÁ NHÂN<?php $row['name']?> </h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Tên</label>
                            <a class="form-control"><?php echo $name?></a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Số điện thoại</label>
                            <a class="form-control" value="" name="phone" ><?php echo $phone?></a>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Địa chỉ</label>
                            <a class="form-control" value="" name="user_address"><?php echo $addres?></a>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Địa chỉ email</label>
                                <a class="form-control" value="" name="email"><?php echo $email?></a>   
                            </div>
                    </div>
                    <div>
                            <br>
                            <a href="./profile" type="submit" value="Thay đổi thông tin">Thay đổi thông tin<a>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<?php
     require_once('footer.php');
?>