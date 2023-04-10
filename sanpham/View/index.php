<?php
$id_sp;
$name_sp = $description = $type = $price = $image = $dcrip_quick = $price_km="";
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
        <title>Products_admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            td {
                text-align: justify;                
            }
            body{
                background-color: aliceblue;
            }
            th, #imageCell {
                text-align: center;
            }
        </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>    
    </head>
    <body class="d-flex h-100">
        <div class="container d-flex w-100 h-100 m-0 mx-auto flex-column">
            <!-- Header -->
            <nav class="navbar navbar-expand-lg navbar-light text-dark mb-4" style="background-color: aliceblue">
                <div class="container my-2 px-4 px-lg-5" text-center>
                    <a class="navbar-brand fs-3 fw-semibold" href="Linktrangchu">Home</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0 mx-auto">
                            <li class="nav-item"><a class="nav-link active fw-semibold" aria-current="page" href="index.php">Products</a> </li>
                           <!--Create a new product-->
                            <li class="mx-2"> <a href="insert.php"><button type="button" class="btn btn-primary">Create a new product</button></a> </li>  
                            <!--View-->
                            <li class="mx-2"> <a href="productsadmin.php"><button type="button" class="btn btn-outline-success">View</button></a> </li>      
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Table -->
            <main class="container my-5 px-3">
                <table class="table table-bordered bordered-info table-striped" style="background-color: aliceblue">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>Type</th>
                            <th>DESCRIPTION</th>
                            <th>PRICE</th>
                            <th>PRICE</th>
                            <th>IMAGE</th>
                            <th>DESCRIP_QUICK</th>
                            <th>DELETE</th>
                            <th>EDIT</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($result as $row): ?>
                        <tr>
                            <td>
                                <?php echo $row['id_sp'] ?>
                            </td>
                            <td>
                                <?php echo $row['name_sp'] ?>
                            </td>
                            <td>
                                <?php echo $row['type'] ?>
                            </td>
                            <td>
                                <?php echo $row['description'] ?>
                            </td>
                            <td>
                                <?php echo $row['price'] ?>
                            </td>
                            <td>
                                <?php echo $row['price_km'] ?>
                            </td>
                            <td>
                                <?php echo $row['dcrip_quick'] ?>
                            </td>
                            
                            <td id="imageCell"><img src="<?php echo $row['image'] ?>" height=100px /></td>
                            <td><a href="delete.php?id=<?php echo $row['id_sp']; ?>"><button type="button"
                                class="btn btn-outline-danger">Delete</button></a></td>
                            <td><a href="edit.php?id=<?php echo $row['id_sp']; ?>"><button type="button"
                                class="btn btn-outline-dark">Edit</button></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </main>
        
            <!-- Footer -->
            
        </div>
    </body>
</html>