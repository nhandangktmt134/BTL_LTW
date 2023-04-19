<?php
        if((isset($_POST['login'])) && $_POST['login']){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = checkuser($username, $password);
        $_SESSION['role'] = $role;
        if($role == 1) header('location: view/admin.php');
        else {
            $text_error = 'Please enter a username and password';
            header('location: view/login.php');
        }
    }    
?>
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<?php require_once("./view/header.php");?>
<body>
<form action="" method="POST" >
    <div class="container py-5 h-300">                          
        <div class="card-body p-md-4 text-black">
            <h3 class="mb-5 text-uppercase">Đăng nhập</h3>
            <div class="row" >    
                <form class="form-outline mb-4" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">               
                        <label class="form-label" for="username">Tên tài khoản</label>
                        <input type="text" id="" name="username" class="form-control form-control-lg" />
                        <label class="form-label" for="password">Mật khẩu</label>
                        <input type="password" id="" name="password" class="form-control form-control-lg"/>
                        <input type="submit" class="btn btn-primary btn-lg ms-2" name="login" value="Đăng nhập"></input>
                        <input type="submit" class="btn btn-primary btn-lg ms-2" name="signin"value="Đăng ký"></input>
                        <?php 
                            if(isset($text_error)&&$text_error =""){
                                echo "<font color: 'red'>".$text_error."</font>";
                            }
                        ?>
                    </div>
                </form>                
            </div>
        </div>                                
    </div>
</form>
</body>
</html>
<?php
    require_once("./view/footer.php");
?>
