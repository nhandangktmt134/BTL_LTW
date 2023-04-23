<?php
require_once("../core/Controller.php");
 $conn = NULL;
	 $server = 'localhost';
	 $dbName = 'nongsanstore';
	 $user = 'root';
	 $password = '';

     $conn = new mysqli($server, $user, $password, $dbName);

     if ($conn->connect_error) {
         printf($conn->connect_error);
         exit();
     }
     $conn->set_charset("utf8");

$functionCore = new Controller();


$id = 0;
$title = ""; 
$detail = ""; 

$img = "";

$msg = ""; 
$success = false;

if (isset($_POST['id'])) $id = $_POST['id'];
if (isset($_POST['title'])) $title = $_POST['title'];
if (isset($_POST['detail'])) $detail = $_POST['detail'];

$img =isset($_POST['img-old']) ? $_POST['img-old'] : '' ;

    if($_FILES['img']['name']!=null) {
        $img =  $functionCore->upload_file_posts($_FILES, "update");
    }
    $query = "UPDATE tbl_post SET  title = ?, detail = ?, img = ? WHERE id = ?";
    // prepare the statement
    $stmt = $conn->prepare($query);
    
    // bind the parameters
    $stmt->bind_param("ssss", $title, $detail, $img, $id);

    // execute the statement
    $stmt->execute();

    // check if the insert was successful
    if ($stmt->affected_rows > 0) {
        echo "
        <script type='text/javascript'>
            alert('Bạn đã cập nhật thành công');
        </script>
        ";
    } else {
        echo "
        <script type='text/javascript'>
            alert('Thất bại!');
        </script>
        ";
    }
    
    header('Location: '. $_SERVER['HTTP_REFERER']);
    



 ?>
