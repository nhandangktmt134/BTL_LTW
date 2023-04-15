<?php 
    class Controller
    {
        function model($model) {
            require_once "./models/" . $model . ".php";
            return new $model;
        }

        function view( $view, $data = []) {
            require_once "./view/" . $view . ".php";
        }

        function upload_file_user($username, $file) {
           
        }

        function upload_file_product($file) {          

        }

    }
?>