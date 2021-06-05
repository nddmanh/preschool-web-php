<?php
    // admin - admin
    session_start();
    include('config/config.php');
    if (isset($_POST['dangnhap'])) {
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT  * FROM tbl_admin WHERE tk_admin = '".$taikhoan."' AND mk_admin = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location: index.php");
        } else {
            echo '<script> alert(" Thông tin đăng nhập không đúng. Vui lòng thử lại!");</script>';
            // header("Location: login.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập admin</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../static/home/school-icon.jpg" />
    <link rel="stylesheet" href="./css/loginAdmin.css">
    <link rel="stylesheet" href="./static/all.css">
    <link rel="stylesheet" href="./static/bootstrap.min.css">
</head>

    <body>
    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center"><b>Sign In Admin </b></h5>
                <form class="form-signin" method="POST" action="">
                    <div class="form-label-group">
                        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Tài khoản" required autofocus>
                        <label for="inputEmail">Tài khoản</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                        <label for="inputPassword">Mật khẩu</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="dangnhap" >Đăng nhập</button>
                    <hr class="my-4">
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script src="./static/jquery.slim.min.js"></script>
    <script src="./static/bootstrap.bundle.min.js"></script>
    </body>

</html>

