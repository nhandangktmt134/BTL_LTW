<?php 
    class Controller
    {
        function model($model) {
            require_once "./model/" . $model . ".php";
            return new $model;
        }

        function view( $view, $data = []) {
            require_once "./view/".$view.".php";
        }
        function product(){
            $conn = mysqli_connect('localhost', 'root', '', 'nongsanstore');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM tbl_sanpham";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        function upload_file_book($file) {
            if (isset($file["img"])) {
                $allowedExts = array("jpg", "jpeg", "gif", "png");
                $nameParts = explode(".", $file["img"]["name"]);
                $extension = end($nameParts);
                if ((($file["img"]["type"] == "image/gif")
                        || ($file["img"]["type"] == "image/jpeg")
                        || ($file["img"]["type"] == "image/png")
                        || ($file["img"]["type"] == "image/pjpeg"))
                    && ($file["img"]["size"] < 5000000)
                    && in_array($extension, $allowedExts)
                ) {
                    if ($file["img"]["error"] == 0) {
                       if (!file_exists("./asset/img/book"))
                            mkdir("./asset/img/book" , 0777 , 1);
                        if (file_exists("./asset/img/book/". $file["img"]["name"])) {
                            unlink("./asset/img/book/". $file["img"]["name"]);
                        }

                        move_uploaded_file($file["img"]["tmp_name"], "./asset/img/book/" . $file["img"]["name"]);
                        $img_profile = "/bookstore/asset/img/book/" . $file["img"]["name"];
                    }
                   
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }

    }


?>