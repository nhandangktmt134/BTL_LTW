<?php
class user extends Controller {
    function login()
    {
        $username = "";
        $password = "";
        $success = false;
        $msg1 = "";
        if (isset($_POST['login_button'])) {
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
            }
            if (isset($_POST['password'])) {
                $password = $_POST['password'];
            }
            if ($username == "" || $password == "") {
                $msg1 = "Tên đăng nhập hoặc mật khẩu không được để trống!";
                $_SESSION['loginmessage'] = $msg1;
                header('Location: /bookstore/home');
            } else {
                $login = $this->model("UserModel");
                $success = $login->login($username, $password);
                if ($success == true) {
                    $msg1 = "success";
                    $_SESSION['loginmessage'] = $msg1;
                    header('Location: /bookstore/home');
                    die;
                } else {
                    $msg1 = "Wrong username or password!";
                    $_SESSION['loginmessage'] = $msg1;
                    header('Location: /bookstore/home');
                    die;
                }
            }
        } else {
            $_SESSION['loginmessage'] = $msg1;
            header('Location: /bookstore/home');
        }
    }

    function signout() {
        session_unset();
        //session_destroy();
        $_SESSION['loginmessage'] = "signout";
        header("location: /bookstore/home");
    }

    function signup() {
        if (isset($_POST['signup'])) {
            $firstname = ""; $lastname = ""; $email = "";
            $username = ""; $password = ""; $retypePass = "";
            $address = ""; $phone = ""; $img = "";
            $role = 0; $msg = ""; $success = false;
            if (isset($_POST['firstname'])) $firstname = $_POST['firstname'];
            if (isset($_POST['lastname'])) $lastname = $_POST['lastname'];
            if (isset($_POST['email'])) $email = $_POST['email'];
            if (isset($_POST['username'])) $username = $_POST['username'];
            if (isset($_POST['password'])) $password = $_POST['password'];
            if (isset($_POST['retypePass'])) $retypePass = $_POST['retypePass'];
            if (isset($_POST['address'])) $address = $_POST['address'];
            if (isset($_POST['phone'])) $phone = $_POST['phone'];
            if (isset($_POST['img'])) $img = $_POST['img'];

            if ($username == "" || $password == "" || $firstname == "" || $lastname == "" || $address == "" || $email == "" || $phone == "" || $retypePass == "" || $address =="") {
                $msg = "Hãy điền đủ thông tin !";
            }
            else if ( $password != $retypePass ) {
                $msg = "Mật khẩu không giống nhau !";
            } else {
                $img = $this->upload_file_user($username, $_FILES);
                $password = password_hash($password, PASSWORD_DEFAULT);

                $signup = $this->model("UserModel");                                
                $success = $signup->insertUser($role, $username, $firstname, $lastname, $email, $phone, $address, $img, $password);

                if ($success == true) {
                    $msg = "Đăng kí thành công ! ";
                    $this->view("signup", ["msg" => $msg,]);
                    die;
                }
                $this->view("signup", ["err" => "Tên tài khoản đã được sử dụng!",]);
            }
            $this->view("signup", ["msg" => $msg,]);
        } else {
            $this->view("signup", []);
        }
    }

    function updateprofile()
    {
        $user = $this->model('UserModel');
        $img = $_SESSION['img'];
        if (isset($_POST['update'])) {
            $id = $_SESSION['id'];
            $username = $_SESSION['username'];
            $role = $_SESSION['user_role'];
            $firstName = ""; $lastName = ""; $email = "";
            $phone = ""; $address = "";
                   
            if (isset($_POST['firstname'])) { $firstName = $_POST['firstname'];}
            if (isset($_POST['lastname'])) { $lastName = $_POST['lastname'];}
            if (isset($_POST['email'])) { $email = $_POST['email'];}
            if (isset($_POST['phone'])) { $phone = $_POST['phone']; }
            if (isset($_POST['user_address'])) { $address = $_POST['user_address'];}

            if ($firstName == "" || $lastName == "" || $email == "" || $phone == "" || $address =="") {
                $msg = "Vui lòng điền đầy đủ thông tin!";
                $_SESSION['update_profile'] = $msg;
                header('Location: /bookstore/profile');
            } else {
                if ( $_FILES["img"]["error"] == 0){
                    $img = $this->upload_file_user($username, $_FILES);
                }
                $success = $user->updateUser($id, $role, $username, $firstName, $lastName, $email, $phone, $address, $img);
                if ($success == true) {
                    $msg = "Đã cập nhật thành công!";
                    $_SESSION['update_profile'] = $msg;
                    header('Location: /bookstore/profile');
                    die;
                } else {
                    $msg = "Không cập nhật thành công";
                    $_SESSION['update_profile'] = $msg;
                    header('Location: /bookstore/profile');
                    die;
                }
            }
        } else {
            $_SESSION['update_profile'] = "";
            header('Location: /bookstore/profile');        
        }
    }

    function pwchange(){
        if (isset($_POST['updatepw'])) {
            $id = $_SESSION['id'];
            $oldPassword = "";
            $newPassword = "";
            $confirmnewPassword = "";

            if (isset($_POST['oldPassword'])) {$oldPassword = $_POST['oldPassword'];}
            if (isset($_POST['newPassword'])) {$newPassword = $_POST['newPassword'];}            
            if (isset($_POST['confirmnewPassword'])) {$confirmnewPassword = $_POST['confirmnewPassword'];}

            if ($oldPassword == "" || $newPassword == "" || $confirmnewPassword == "") {
                $msg = "Vui lòng điền đầy đủ";
                $_SESSION['update_password'] = $msg;
                header('Location: /bookstore/profile');
                die;
            }
            else if (!password_verify($oldPassword, $_SESSION['password'])) {
                $msg = "Mật khẩu cũ không chính xác";
                $_SESSION['update_password'] = $msg;
                header('Location: /bookstore/profile');
                die;
            }
            else if ( $newPassword != $confirmnewPassword ) {
                $msg = "Mật khẩu không giống nhau";
                $_SESSION['update_password'] = $msg;
                header('Location: /bookstore/profile');
                die;
            } else {
                $user = $this->model('UserModel');
                $password = password_hash($newPassword, PASSWORD_DEFAULT);
                $success = $user->updateUserPW($password, $id);
                if ($success == true) {
                    $msg = "Thay đổi mật khẩu thành công";
                    $_SESSION['update_password'] = $msg;
                    header('Location: /bookstore/profile');
                    die;
                } else {
                    $msg = "Bị lỗi";
                    $_SESSION['update_password'] = $msg;
                    header('Location: /bookstore/profile');
                    die;
                }
            }
        } else {
            $_SESSION['update_password'] = "";
            header('Location: /bookstore/profile');
        }
    }

    function delete() {
        $delete = $this->model('UserModel');
        if (isset($_POST["delete"])){
            $id = $_POST['id'];        
            $result = $delete->deleteUser($id);
            if($result)
            {
                echo '<script> alert("Data Deleted Successfully!"); </script>';
                header("Location: /bookstore/profile/usermanager");
            }
            else
            {
                echo '<script> alert("Data Not Deleted Succesful!"); </script>';
                header("Location: /bookstore/profile/usermanager");
            }
        }
    }

    function edit() {
        $user = $this->model('UserModel');
        $img = $_SESSION['userEdit']['img']??"";
        if (isset($_POST['edit'])) {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $firstName = ""; $lastName = ""; $email = "";
            $phone = ""; $address = ""; $role = 0;
            if (isset($_POST['user_role'])) { $role = $_POST['user_role'];}
            if (isset($_POST['firstname'])) { $firstName = $_POST['firstname'];}
            if (isset($_POST['lastname'])) { $lastName = $_POST['lastname'];}
            if (isset($_POST['email'])) { $email = $_POST['email'];}
            if (isset($_POST['phone'])) { $phone = $_POST['phone']; }
            if (isset($_POST['user_address'])) { $address = $_POST['user_address'];}

            if ($firstName == "" || $lastName == "" || $email == "" || $phone == "" || $address =="") {
                $msg = "Vui lòng điền đầy đủ thông tin!";
                header('Location: /bookstore/profile/usermanager');
            } else {
                if ( $_FILES["img"]["error"] == 0){
                    $img = $this->upload_file_user($username, $_FILES);
                }
                $success = $user->updateUserAdmin($id, $role, $username, $firstName, $lastName, $email, $phone, $address, $img);
                if ($success == true) {
                    header('Location: /bookstore/profile/usermanager');
                    die;
                } else {
                    header('Location: /bookstore/profile/usermanager');
                    die;
                }
            }
        } else {
            header('Location: /bookstore/profile/usermanager');        
        }
        //     echo '<h2 style="text-align: center">Please wait...</h2>';
        //     header('Refresh: 1; URL=/bookstore/profile/usermanager');
        // }

    }

    function show() {
        if (isset($_POST['show'])) {
            if (isset($_POST['id'])) {
                $show = $this->model('UserModel');
                $result = $show->getUser($_POST['id']);
                if ($result == true) {
                    $_SESSION['userEdit']['id'] = $result['id'];
                    $_SESSION['userEdit']['user_role'] = $result['user_role'];
                    $_SESSION['userEdit']['username'] = $result['username'];
                    $_SESSION['userEdit']['firstname'] = $result['firstname'];
                    $_SESSION['userEdit']['lastname'] = $result['lastname'];
                    $_SESSION['userEdit']['email'] = $result['email'];
                    $_SESSION['userEdit']['phone'] = $result['phone'];
                    $_SESSION['userEdit']['user_address'] = $result['user_address'];
                    $_SESSION['userEdit']['img'] = $result['img'];
                }
            }
        }
        header("Location: /bookstore/profile/usermanager");
    }

    function add() {
        $add = $this->model('UserModel');
        if (isset($_POST["insertdata"])) {
            $invalid = 0;
            // User role
            $user_role = $_POST["user_role"];
            if ($user_role == '') {
                echo '<script> alert("User Role is required!"); </script>';
                $invalid++;
            }
            // Username
            if (empty($_POST["username"])) {
                echo '<script> alert("Username is required!"); </script>';
                $invalid++;
            }
            else {
                $username = $_POST["username"];
                if (strlen($username) < 8 ) {
                    echo '<script> alert("Username length must be greater than 8 characters!"); </script>';
                    $invalid++;
                }
            }
            // First name
            $firstname = $_POST["firstname"];
    
            // Last name
            if ($lastname = '') {
                echo '<script> alert(Lastname is required!"); </script>';
                $invalid++;
            } 
            else {
                $lastname = $_POST["lastname"];
            }  
    
            // Email
            $email = $_POST["email"];
            $checka = 0;
            $checkb = 0;
            for ($i = 0; $i < strlen($email); $i++) {
                if ($email[$i] == '@' && $i > 0) $checka = 1;
                if ($email[$i] == '.' && $checka == 1 && $i < strlen($email) - 1) $checkb = 1;   
            }
            if (!empty($_POST["email"]) && ($checka == 0 || $checkb == 0)) {
                echo '<script> alert(Email is invalid!"); </script>';
                $invalid++;
            }
    
            // Phone
            $phone = $_POST["phone"];
            if (!empty($_POST["phone"]) && (strlen($phone) < 10 || strlen($phone) > 11)) {
                echo '<script> alert("Phone is invalid!"); </script>';
                $invalid++;
            }
    
            // User Address
            $user_address  = $_POST["user_address"];
    
            // Image
            $img = "";
            $img = $this->upload_file_user($username, $_FILES);

            // Password
            if (empty($_POST["user_password"])) {
                echo '<script> alert("Password is required!"); </script>';
                $invalid++;
            }
            else {
                $user_password  = $_POST["user_password"];
                if (strlen($user_password) < 8) {
                    echo '<script> alert("Password length must be greater than 8 characters!"); </script>';
                    $invalid++;
                }
                $user_password = password_hash($user_password, PASSWORD_DEFAULT);

            }     
    
            if ($invalid == 0) {
                $result = $add->insertUser($user_role, $username, $firstname, $lastname, $email, $phone, $user_address, $img, $user_password);
                if ($result){
                    echo '<script> alert("Thêm thành công"); </script>';
                }
                else {
                    echo '<script> alert("Thêm thất bại"); </script>';
                }
            }
            echo '<h2 style="text-align: center">Please wait...</h2>';
            header('Refresh: 1; URL=/bookstore/profile/usermanager');
    }
}
}
?>