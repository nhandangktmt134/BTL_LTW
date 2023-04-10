<?php
// a) List products to the database
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
// b) Insert a product to the database
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

// c) Edit a product to the database
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$id = $name = $description = $price = $image = "";
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $image = $row['image'];
        mysqli_close($conn);
    } 
}
// d) Delete a product to the database
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete a product
if (isset($_REQUEST['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<h1 style='text-align: center; color: green'>SUCCESSFULLY!</h1>";
    } else {
        echo "<h1 style='text-align: center; color: red'>ERROR:";
        echo "<h2 style='text-align: center;'>Could not remove product $sql. </h2>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
echo "<h1 style='text-align: center'>Please wait...</h1>";
header('Refresh: 3; URL=index.php');


// Define variables
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$name = $description = $price = $image = "";

// Validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (strlen($name) < 5 || strlen($name) > 40) {
            $nameErr = "Length of name must be between 5 and 40 characters";
        }
    }

    // Description
    if (!empty($_POST["description"])) {
        $description = test_input($_POST["description"]);
        if (strlen($description) > 5000) {
            $descriptionErr = "Length of description must be less than 5000 characters";
        }
    }

    // Price
    if (empty($_POST["price"])) {
        $priceErr = "Price is required";
    } else {
        $price = test_input($_POST["price"]);
        if (!filter_var($price, FILTER_VALIDATE_FLOAT) || $price < 0) {
            $priceErr = "Price must be a float and greater than 0";
        }
    }

    // Image
    if (!empty($_POST["image"])) {
        $image = test_input($_POST["image"]);
        if (strlen($image) > 255) {
            $imageErr = "Length of the link image must be less or equal 255 characters";
        }
    }
}

//  Connection
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Add new product to the database
if ($nameErr == "" && $descriptionErr == "" && $priceErr == "" && $imageErr == "") {
    $sql = "INSERT INTO products VALUES (NULL, '$name', '$description', '$price', '$image')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h1 style='text-align: center; color: green'>SUCCESSFULLY!</h1>";
        echo "<h2 style='text-align: center; '>Please wait...</h2>";
    } else {
        echo "<h1 style='text-align: center; color: red'>ERROR:";
        echo "<h2 style='text-align: center;'>Could not able to execute $sql. </h2>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header('Refresh: 3; URL=index.php');
} else {
    mysqli_close($conn);
    echo '<h2 style="text-align: center; color: red">INVALID!</h2>';
    if (!($nameErr === "")) {
        echo "<h1>$nameErr</h1><br>";
    }
    if (!($descriptionErr === "")) {
        echo "<h1>$descriptionErr</h1><br>";
    }
    if (!($priceErr === "")) {
        echo "<h1>$priceErr</h1><br>";
    }
    if (!($imageErr === "")) {
        echo "<h1>$imageErr</h1><br>";
    }
    echo '<h2 style="text-align: center">Please wait...</h2>';
    header('Refresh: 3; URL=b.php');
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Define variables
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$name = $description = $price = $image = "";


// Validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (strlen($name) < 5 || strlen($name) > 40) {
            $nameErr = "Length of name must be between 5 and 40 characters";
        }
    }

    // Description
    if (!empty($_POST["description"])) {
        $description = test_input($_POST["description"]);
        if (strlen($description) > 5000) {
            $descriptionErr = "Length of description must be less than 5000 characters";
        }
    }

    // Price
    if (empty($_POST["price"])) {
        $priceErr = "Price is required";
    } else {
        $price = test_input($_POST["price"]);
        if (!filter_var($price, FILTER_VALIDATE_FLOAT) || $price < 0) {
            $priceErr = "Price must be a float and greater than 0";
        }
    }

    // Image
    if (!empty($_POST["image"])) {
        $image = test_input($_POST["image"]);
        if (strlen($image) > 255) {
            $imageErr = "Length of the link image must be less or equal 255 characters";
        }
    }
}

// Update a product
if (isset($_POST['Update'])) {
    if ($nameErr === "" && $descriptionErr === "" && $priceErr === "" && $imageErr === "") {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        // Connection
        $conn = mysqli_connect("localhost", "root", "", "shop");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "UPDATE products SET name='$name', description='$description', price='$price', image='$image' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "<h1 style='text-align: center; color: green'>SUCCESSFULLY!</h1>";
            echo "<h2 style='text-align: center; '>Please wait...</h2>";
        } else {
            echo "<h1 style='text-align: center; color: red'>ERROR:";
        echo "<h2 style='text-align: center;'>Could not update product $sql. </h2>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        header('Refresh: 3; URL=index.php');
    } else {
        mysqli_close($conn);
        echo '<h2 style="text-align: center; color: red">INVALID!</h2>';
        if (!($nameErr === "")) {
            echo "<h1>$nameErr</h1><br>";
        }
        if (!($descriptionErr === "")) {
            echo "<h1>$descriptionErr</h1><br>";
        }
        if (!($priceErr === "")) {
            echo "<h1>$priceErr</h1><br>";
        }
        if (!($imageErr === "")) {
            echo "<h1>$imageErr</h1><br>";
        }
        echo '<h2 style="text-align: center">Please wait...</h2>';
        header('Refresh: 3; URL=b.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>List of Products</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            td {
                text-align: justify;
            }

            th, #imageCell {
                text-align: center;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body class="d-flex h-100">
        <div class="container d-flex w-100 h-100 m-0 mx-auto flex-column">
            <!-- Header -->
            <nav class="navbar navbar-expand-lg navbar-light text-dark mb-4" style="background-color: aliceblue">
                <div class="container my-2 px-4 px-lg-5" text-center>
                    <a class="navbar-brand fs-3 fw-semibold" href="#!">READ PRODUCTS</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0 mx-auto">
                            <li class="nav-item"><a class="nav-link active fw-semibold" aria-current="page" href="index.php">Products</a> </li>
                            <li class="nav-item"><a class="nav-link" href="#!">Home</a></li>
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
                            <th>DESCRIPTION</th>
                            <th>PRICE</th>
                            <th>IMAGE</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($result as $row): ?>
                        <tr>
                            <td>
                                <?php echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['name'] ?>
                            </td>
                            <td>
                                <?php echo $row['description'] ?>
                            </td>
                            <td>
                                <?php echo $row['price'] ?>
                            </td>
                            <td id="imageCell"><img src="<?php echo $row['image'] ?>" height=100px /></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </main>

            <a class="btn btn-danger my-4" href="index.php" role="button">Back</a>
        
            <!-- Footer -->
            <footer class="py-5" style="background-color: aliceblue">
                <div class="container">
                    <p class="m-1 px-4 px-lg-5 ">Footer information</p>
                    <p class="m-1 px-4 px-lg-5">
                        <a href="#!" class="text-decoration-none">Link 1</a>|
                        <a href="#!" class="text-decoration-none">Link 2</a>|
                        <a href="#!" class="text-decoration-none">Link 3</a>
                    </p>
                    <p class="m-1 px-4 px-lg-5">© 2023Computer Worlds, Inc. All Rights Reserved</p>
                </div>
            </footer>   
         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>

</html>