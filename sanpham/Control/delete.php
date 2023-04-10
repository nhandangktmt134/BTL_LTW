<?php
// d) Delete a product to the database
$conn = mysqli_connect('localhost', 'root', '', 'btlweb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete a product
if (isset($_REQUEST['id_sp'])) {
    $id_sp = $_GET['id_sp'];
    $sql = "DELETE FROM products WHERE id_sp ='$id_sp'";

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
?>