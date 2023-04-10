<?php
// b) Insert a product to the database
$name_sp = $description = $type = $price = $image = $dcrip_quick = $price_km ="";
$conn = mysqli_connect('localhost', 'root', '', 'btlweb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM tb_sanpham";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add a product</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <style>
            .custom {
                border: 4px solid rgb(165, 228, 223);
                padding: 50px;
            }

            .error {
                color: red;
            }

            input, textarea {
                border: 4px solid rgb(165, 228, 223);
            }
        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>    </head>
    </head>

    <body class="d-flex h-100">
        <div class="container d-flex w-100 h-100 m-0 mx-auto flex-column">
            <!-- Header -->
            <nav class="navbar navbar-expand-lg navbar-light text-dark mb-4" style="background-color: aliceblue">
                <div class="container my-2 px-4 px-lg-5" text-center>
                    <a class="navbar-brand fs-3 fw-semibold" href="#!">CREATE A NEW PRODUCT</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0 mx-auto">
                            <li class="nav-item"><a class="nav-link active fw-semibold text-danger" aria-current="page" href="index.php">BACK</a> </li>
                            <li class="nav-item"><a class="nav-link" href="#!">Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Form -->
            <div class="container custom rounded-5 my-5">
                <form method="post" action="exe_add.php" class="row g-3">
                    <div class="col-md-6">
                        <label for="name_sp" class="form-label">Name Product</label>
                        <input type="text" id="name_sp" class="form-control" value="" name="name_sp" placeholder="Name of product" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error">* <?php echo $name_sp; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" id="type" class="form-control" value="" name="type" placeholder="Type of product" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error">* <?php echo $type; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" id="price" class="form-control" value="" name="price" placeholder="Currency unit: VND" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error">* <?php echo $price; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <label for="price_km" class="form-label">Price_km</label>
                        <input type="text" id="price_km" class="form-control" value="" name="price_km" placeholder="Currency unit: VND" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error">* <?php echo $price_km; ?> </span>
                    </div>

                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" id="description" class="form-control" value="" name="description" placeholder="About product..." style="height: 100px; border: 4px solid rgb(165, 228, 223)"></textarea>
                        <span class="error"><?php echo $description; ?> </span>
                    </div>

                    <div>
                        <label for="image" class="form-label">Image</label>
                        <input type="text" id="image" class="form-control" value="" name="image" placeholder="Your link image" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error"><?php echo $image; ?> </span>
                    </div>

                    <div>
                        <label for="dcrip_quick" class="form-label">Description_quick</label>
                        <textarea type="text" id="dcrip_quick" class="form-control" value="" name="dcrip_quick" placeholder="About product..." style="height: 100px; border: 4px solid rgb(165, 228, 223)"></textarea>
                        <span class="error"><?php echo $dcrip_quick; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-success" style="height: 50px; width: 100px">Insert</button>
                    </div>
    
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-outline-danger" style="height: 50px; width: 100px">Reset</button>
                    </div> 
                </form>
            </div> 

            <!-- Footer -->
             <!--footer-->
    <?php
                require_once("./footer.php");
    ?> 
        </div>
    </body>
</html>