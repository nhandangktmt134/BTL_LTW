<?php
// Define variables
$name_sp = $description = $type = $price = $image = $dcrip_quick = $price_km = "";

// Validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name
    if (empty($_POST["name_sp"])) {
        $name_sp= "Name is required";
    } else {
        $name_sp = test_input($_POST["name_sp"]);
        if (strlen($name_sp) < 5 || strlen($name_sp) > 40) {
            $name_sp= "Length of name must be between 5 and 40 characters";
        }
    }

    //Type name
    if (empty($_POST["type"])) {
        $type= "Name is required";
    } else {
        $type = test_input($_POST["type"]);
        if (strlen($type) < 5 || strlen($type) > 40) {
            $type= "Length of name must be between 5 and 40 characters";
        }
    }

    // Description
    if (!empty($_POST["description"])) {
        $description = test_input($_POST["description"]);
        if (strlen($description) > 5000) {
            $description = "Length of description must be less than 5000 characters";
        }
    }

    // Price
    if (empty($_POST["price"])) {
        $price = "Price is required";
    } else {
        $price = test_input($_POST["price"]);
        if (!filter_var($price, FILTER_VALIDATE_FLOAT) || $price < 0) {
            $price = "Price must be a float and greater than 0";
        }
    }

    // Price_km
     if (empty($_POST["price_km"])) {
        $price_km = "Price is required";
    } else {
        $price_km = test_input($_POST["price_km"]);
        if (!filter_var($price_km, FILTER_VALIDATE_FLOAT) || $price_km < 0) {
            $price_km = "Price must be a float and greater than 0";
        }
    }

    // Image
    if (!empty($_POST["image"])) {
        $image = test_input($_POST["image"]);
        if (strlen($image) > 255) {
            $image = "Length of the link image must be less or equal 255 characters";
        }
    }

    // Description_quick
    if (!empty($_POST["dcrip_quick"])) {
        $dcrip_quick = test_input($_POST["dcrip_quick"]);
        if (strlen($dcrip_quick) > 5000) {
            $dcrip_quick = "Length of dcrip_quick must be less than 5000 characters";
        }
    }
}

//  Connection
$conn = mysqli_connect('localhost', 'root', '', 'btlweb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Add new product to the database
if ($name_sp == "" && $type ==0 && $description == "" && $price == "" && $price_km == "" && $dcrip_quick == "" && $image == "") {
    $sql = "INSERT INTO tb_sanpham VALUES ('$id_sp'+1, '$name_sp', '$type','$description', '$price', '$price_km','$dcrip_quick','$image',NULL)";
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
} 
else {
    mysqli_close($conn);
    echo '<h2 style="text-align: center; color: red">INVALID!</h2>';
    if (!($name_sp === "")) {
        echo "<h1>$name_sp</h1><br>";
    }
    if (!($type === "")) {
        echo "<h1>$type</h1><br>";
    }
    if (!($description === "")) {
        echo "<h1>$description</h1><br>";
    }
    if (!($price === "")) {
        echo "<h1>$price</h1><br>";
    }
    if (!($price_km === "")) {
        echo "<h1>$price_km </h1><br>";
    }
    if (!($image === "")) {
        echo "<h1>$image</h1><br>";
    }
    if (!($dcrip_quick === "")) {
        echo "<h1>$dcrip_quick</h1><br>";
    }
    echo '<h2 style="text-align: center">Please wait...</h2>';
    header('Refresh: 3; URL=insert.php');
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
