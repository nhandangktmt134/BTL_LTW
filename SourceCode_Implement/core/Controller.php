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

        function upload_file_products($file, $type) {
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
                        $path = "./asset/img/products/" . $file["img"]["name"]   ;
                        $pathroot = "./asset/img/products/";
                        if($type == 'update') {
                            $path = "../asset/img/products/" . $file["img"]["name"]   ;
                            $pathroot = "../asset/img/products/";
                        }
                       if (!file_exists($pathroot))
                            mkdir($pathroot , 0777 , 1);
                        if (file_exists($pathroot. $file["img"]["name"])) {
                            unlink($pathroot. $file["img"]["name"]);
                        }
                        move_uploaded_file($file["img"]["tmp_name"], $path);
                        $img_profile = "./asset/img/products/" . $file["img"]["name"];
                    }
                   
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }

        function upload_file_posts($file, $type) {
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
                        $path = "./asset/img/posts/" . $file["img"]["name"]   ;
                        $pathroot = "./asset/img/posts/";
                        if($type == 'update') {
                            $path = "../asset/img/posts/" . $file["img"]["name"]   ;
                            $pathroot = "../asset/img/posts/";
                        }
                       if (!file_exists($pathroot))
                            mkdir($pathroot , 0777 , 1);
                        if (file_exists($pathroot. $file["img"]["name"])) {
                            unlink($pathroot. $file["img"]["name"]);
                        }
                        move_uploaded_file($file["img"]["tmp_name"], $path);
                        $img_profile = "./asset/img/posts/" . $file["img"]["name"];
                    }
                   
                } else {
                    $img_profile = "";
                }
            return $img_profile;
            }
        }
    }


?>