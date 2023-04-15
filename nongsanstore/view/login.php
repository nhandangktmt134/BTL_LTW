<?php
    require_once("./head.php");
?>

<body class="h-100 bg-dark">
  <form action="" method="POST" enctype="multipart/form-data" >
    <div class="container py-5 h-300">
        <div class="row d-flex justify-content-center align-items-center h-300">
            <div class="col">
                <br></br><br></br><br></br>
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6">                            
                            <div class="card-body p-md-4 text-black">
                                <h3 class="mb-5 text-uppercase">Đăng nhập</h3>
                                    <div class="row" >                    
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Tên tài khoản</label>
                                            <input type="text" id="username" name="username" class="form-control form-control-lg" pattern="^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$" required/>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Mật khẩu</label>
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" required/>
                                        </div>                
                                    </div>
                            </div>
                            <div class="d-flex justify-content-end pt-3">
                                <button type="" class="btn btn-light btn-lg">Quên mật khẩu</button>
                                <button type="submit" class="btn btn-primary btn-lg ms-2" name="login">Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<?php
    require_once("./footer.php");
?>
