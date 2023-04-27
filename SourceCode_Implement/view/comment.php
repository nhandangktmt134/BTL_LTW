<?php
    $id_spcheck = $_GET['id_sp'];
    $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM tbl_binhluan";
    $result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="vn">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
	<style>
		.top-header-area{
			background-color: #051922;
			color: #051922;
		}
        div.stars {
            width: 100px;
            display: inline-block;
        }     
        input.star { display: none; }        
        label.star {
            float: right;
            font-size: 10px;
            color: #444;
            transition: all .2s;
        }        
        input.star:checked ~ label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }        
        input.star-5:checked ~ label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        } 
        .comment-section {
            margin-left: 200px;
        }
        .comment-section h6:nth-child(2) {
            margin-left: 100px;
        }       
        input.star-1:checked ~ label.star:before { color: #F62; }        
        label.star:hover { transform: rotate(-15deg) scale(1.3); }        
        label.star:before {
            content: '\f006';
            font-family: 'FontAwesome';
        }
        .container {
            max-width: 500px;
            margin: 10px auto;
            padding: 50px;
        }
        .title{
            margin-left: 200px;
        }
	</style>
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
    <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <hr>
        <div class ="title"> 
            <h2>Bình Luận</h2>
        </div>
        <div class="container md-500 cd-500 ">
        <form  action="./comment" method="post">
            <div>            
                <a type="text" name = "name" placeholder=""><?php echo $name ;?> </a>
            </div>
            <div>
                <input type="hidden" name = "id_sp" value="<?php echo $_GET["id"]; ?>" >
            </div>
            <div>
                <input type="hidden" name="id_user" value="<?php $_SESSION['username']; ?>">
            </div>
            <div>
                <textarea name = "noidung" placeholder="" id="" cols="50" rows="2"></textarea>
            </div>
            <div>
                <input type="submit" name = "commment" value="Commment">
            </div>
        </form>
        </div>
    </hr>   
    <div class="comment-section">
        <?php foreach ($dsbl as $bl){ 
                if($bl['id_sp'] == $id_spcheck){
                    echo "<h5>".$bl['name'].": </h5>";
                    echo "<h6>".$bl['noidung']."</h6><br>";
                }
            }
        ?>
    </div>
</body>







