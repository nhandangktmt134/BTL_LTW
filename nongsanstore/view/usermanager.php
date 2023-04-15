<?php
  require_once("./view/header.php");
?>

<div class="container-fluid rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <?php require_once('profileSidebar.php'); ?>
        </div>
        <div id='list' class="col-md-9 border-right">
            <!-- Form Create -->
            <div class="modal fade" id="create_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tạo người dùng mới</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/bookstore/user/add" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label> Username </label>
                                    <input type="text" name="username" class="form-control" placeholder="> 8 characters">
                                </div>
                                <div class="form-group">
                                    <label> User Role </label>
                                    <select class="form-select" name="user_role" aria-label="Default select example">
                                        <option selected>User role</option>
                                        <option value="0">User</option>
                                        <option value="1">Adminstrator</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label> First name </label>
                                    <input type="text" name="firstname" class="form-control" placeholder="Nguyen Van">
                                </div>
                                <div class="form-group">
                                    <label> Last name </label>
                                    <input type="text" name="lastname" class="form-control" placeholder="A">
                                </div>
                                <div class="form-group">
                                    <label> Email </label>
                                    <input type="text" name="email" class="form-control" placeholder="abc@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label> Phone </label>
                                    <input type="text" name="phone" class="form-control" placeholder="0123456789">
                                </div>
                                <div class="form-group">
                                    <label> Address </label>
                                    <input type="text" name="user_address"  class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="img">Chọn hình ảnh đại diện mới</label>
                                    <div><input type="file" id="img" name="img" accept="image/png, image/jpeg, image/pjpeg , image/gif" ></div>
                                </div>
                                <div class="form-group">
                                    <label> Password </label>
                                    <input type="password" name="user_password" class="form-control" placeholder="> 8 characters">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" name="insertdata" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>   

            <!-- Table list of user -->
            <div class="user_container">
                <div class="row">
                <h1 class="py-4 fst-italic">Quản lí người dùng</h1>
                </div>

                <a type="button" class="btn btn-primary py-2" data-toggle="modal" data-target="#create_user">
                Thêm tài khoản
                </a>
                <table class="table table-hover mt-3" id="table_data" style="table-layout: fixed; white-space: nowrap;">
                <thead class="table-dark">
                    <tr class="text-center">
                    <th scope="col" style="width:10%">ID</th>
                    <th scope="col" style="width:10%">User Role</th>
                    <th scope="col" style="width:30%">Username</th>
                    <th scope="col" style="width:15%">First Name</th>
                    <th scope="col" style="width:15%">Last Name</th>
                    <!-- <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Image</th>
                    <th scope="col">Password</th> -->
                    <th scope="col" style="width:10%">Edit</th>
                    <th scope="col" style="width:10%">Delete</th>                
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if ($data['query']->num_rows > 0) {
                    while ($row = $data['query']-> fetch_assoc()) {
                        echo "<tr><td class='text-center'>".
                        $row["id"]."</td><td class='text-center'>".
                        $row["user_role"]."</td><td>".
                        $row["username"]."</td><td>".
                        $row["firstname"]."</td><td>".
                        $row["lastname"]."</td>";
                ?>                            
                <td class='text-center'>
                    <form action="/bookstore/user/show" method="POST">
                    <input name='id' style="display:none;" value=<?php echo $row["id"]; ?>></input>
                    <button type='submit' name='show' class="btn btn-warning editbtn"  >Edit</button>
                    </form>
                </td>  
                <td class='text-center'> 
                    <form action="/bookstore/user/delete" method="POST">
                    <input name='id' style="display:none;" value=<?php echo $row["id"]; ?>></input>
                    <button type='submit' name="delete" class="btn btn-danger deletebtn">Delete</button>
                    </form>
                </td>
                <?php
                    }
                    } else {
                    echo "No Result.";
                    }
                ?>
            </tbody>
            </table>
        </div>

        <?php
            if (isset($_SESSION['userEdit'])) {
        ?>
        <div id='editBox' class="col-md-9 border-right">
        <form action="/bookstore/user/edit" method="POST" enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Cập nhật thông tin</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">ID</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['userEdit']['id'] ?>"name="id" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Tài khoản</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['userEdit']['username'] ?>" name="username" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Tên</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['userEdit']['firstname'] ?>"name="firstname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Họ</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['userEdit']['lastname'] ?>"name="lastname" pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Số điện thoại</label>
                        <input type="number" class="form-control" value="<?php echo $_SESSION['userEdit']['phone'] ?>" name="phone" pattern="/^\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/" required>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Vai trò (1:admin ; 0:user)</label>
                        <input type="number" class="form-control" value="<?php echo $_SESSION['userEdit']['user_role'] ?>" name="user_role">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Địa chỉ</label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['userEdit']['user_address'] ?>" name="user_address">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Địa chỉ email</label>
                        <input type="email" class="form-control" value="<?php echo $_SESSION['userEdit']['email'] ?>" name="email">
                    </div>
                    <div class="col-md-12">
                        <label for="img">Chọn hình ảnh đại diện mới</label>
                        <div><input type="file" id="img" name="img" accept="image/png, image/jpeg, image/pjpeg , image/gif" ></div>
                   </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="edit">Lưu thay đổi</button></div>
                </form>
        </div>
        <?php
            }
        ?>

    </div>

</div>
</div>
<?php
  require_once("./view/footer.php");
?>