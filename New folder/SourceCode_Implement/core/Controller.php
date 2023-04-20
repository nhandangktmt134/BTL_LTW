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

        

        function upload_file_user($username, $file) {
            if (isset($file["img"])) {
                $allowedExts = array("jpg", "jpeg", "gif", "png");
                $nameParts = explode(".", $file["img"]["name"]);
                $extension = end($nameParts);
                if ((($file["img"]["type"] == "image/gif")
                        || ($file["img"]["type"] == "image/jpeg")
                        || ($file["img"]["type"] == "image/png")
                        || ($file["img"]["type"] == "image/pjpeg"))
                    && ($file["img"]["size"] < 5000000)
                    && in_array($extension, $allowedExts)) 
                {
                    if ($file["img"]["error"] == 0) {
                       if (!file_exists("./asset/img/user/$username"))
                            mkdir("./asset/img/user/" . $username , 0777, true);
                        if (file_exists("./asset/img/user/" . $username . $file["img"]["name"])) {
                            unlink("./asset/img/user/" . $username. $file["img"]["name"]);
                        }
                        $path = "./asset/img/user/" . $username . "/" . $file["img"]["name"];
                        move_uploaded_file($file['img']['tmp_name'], $path);
                        $img_profile = "/SourceCode_Implement/asset/img/user/" . $username . "/" . $file["img"]["name"];
                    }
                   
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }

        function upload_file_products($file) {
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
                       if (!file_exists("./asset/img/products"))
                            mkdir("./asset/img/products" , 0777 , 1);
                        if (file_exists("./asset/img/products/". $file["img"]["name"])) {
                            unlink("./asset/img/products/". $file["img"]["name"]);
                        }

                        move_uploaded_file($file["img"]["tmp_name"], "./asset/img/products/" . $file["img"]["name"]);
                        $img_profile = "/bookstore/asset/img/products/" . $file["img"]["name"];
                    }
                   
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }

    }


?>