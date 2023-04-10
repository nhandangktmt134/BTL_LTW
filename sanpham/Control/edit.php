<?php
// c) Edit a product to the database
$id_sp = $type = $name_sp = $description = $dcrip_quick = $price_km = $image = "";
$conn = mysqli_connect('localhost', 'root', '', 'btlweb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    if (isset($_GET['id_sp'])) {
        $id_sp = $_GET['id_sp'];
        $sql = "SELECT * FROM tb_sanpham WHERE id_sp ='$id_sp'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name_sp = $row['name_sp'];
        $description = $row['description'];
        $price = $row['price'];
        $price_km = $row['price_km'];
        $image = $row['image'];
        $dcrip_quick= $row['dcrip_quick'];
        $type = $row['type'];
        mysqli_close($conn);
    } 
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit a product</title>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body class="d-flex h-100">
        <div class="container d-flex w-100 h-100 m-0 mx-auto flex-column">
            <!-- Header -->
            <nav class="navbar navbar-expand-lg navbar-light text-dark mb-4" style="background-color: aliceblue">
                <div class="container my-2 px-4 px-lg-5" text-center>
                    <a class="navbar-brand fs-3 fw-semibold" href="#!">EDIT PRODUCT</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0 mx-auto">
                            <li class="nav-item"><a class="nav-link active fw-semibold text-danger" aria-current="page" href="index.php">BACK</a> </li>
                            <li class="nav-item"><a class="nav-link" href="#!">Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Form edit -->
            <div class="container custom rounded-5 my-5">
                <form method="post" action="exe_edit.php?id=<?php echo $row['id']; ?>" class="row g-3">
                    <div>
                        <label for="id" class="form-label">ID</label>
                        <input type="text" id="id" class="form-control" value="<?php echo $id ?>" name="id" disabled readonly="readonly" style="border: 4px solid rgb(165, 228, 223)">
                    </div>

                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $name_sp ?>" name="name" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error">* <?php echo $name_sp; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" id="price" class="form-control" value="<?php echo $price ?>" name="price" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error">* <?php echo $price; ?> </span>
                    </div>

                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" id="description" class="form-control" value="<?php echo $description ?>" name="description" style="height: 100px; border: 4px solid rgb(165, 228, 223)"></textarea>
                        <span class="error"><?php echo $description; ?> </span>
                    </div>

                    <div>
                        <label for="image" class="form-label">Image</label>
                        <input type="text" id="image" class="form-control" value="<?php echo $image ?>" name="image" style="border: 4px solid rgb(165, 228, 223)">
                        <span class="error"><?php echo $imageErr; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-success" name="Update" value="Update" style="height: 50px; width: 100px">Update</button>
                    </div>
    
                    <div class="col-md-6">
                        <a class="btn btn-danger" href="index.php" role="button" style="height: 50px; width: 100px">Cancel</a>
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