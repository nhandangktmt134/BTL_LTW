<?php 
    require_once("controller/Usercontroller.php");
    $userC = new user();
    $userC->login();

    $error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
   
?>

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
     <!-- Example: -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/loginasset/fonts/icomoon/style.css">
    <link rel="stylesheet" href="./asset/loginasset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./asset/loginasset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/loginasset/css/style.css">
</head>
<body>
    <!-- search area -->

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="./asset/img/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Log in to <strong>NÔNG SẢN SẠCH</strong></h3>
                            </div>
                            <form action="" method="post">
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>
                                <?php if(isset($error))  echo "<p style='color: red'>$error</p>"; ?>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" name="submit" value="Login" class="btn text-white btn-block btn-primary">
                                <a style="text-decoration: none;" href="./Home" class="btn text-white btn-block btn-primary">Back</a>
                                <span class="d-block text-left my-4 text-muted"> or sign in with</span>

                                <div class="social-login">
                                    <a href="#" class="facebook">
                                        <span class="icon-facebook mr-3"></span>
                                    </a>
                                    <a href="#" class="twitter">
                                        <span class="icon-twitter mr-3"></span>
                                    </a>
                                    <a href="#" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="./asset/loginasset/js/jquery-3.3.1.min.js"></script>
    <script src="./asset/loginasset/js/popper.min.js"></script>
    <script src="./asset/loginasset/js/bootstrap.min.js"></script>
    <script src="./asset/loginasset/js/main.js"></script>

</body>

</html>