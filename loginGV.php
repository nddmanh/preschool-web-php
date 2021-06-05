<?php
    session_start();
    include('./admin/config/config.php');
    if (isset($_POST['dangnhap'])) {
        $taikhoan = $_POST['username'];
        $matkhau = $_POST['password'];
        $sql = "SELECT  * FROM tbl_gv WHERE ma_gv = '".$taikhoan."' AND matkhau_gv = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if ($count > 0) {
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangnhapgv'] = $row_data['name_gv'];
            header("Location: quanlyhs.php");
        } else {
            echo '<script> alert(" Thông tin đăng nhập không đúng. Vui lòng thử lại!");</script>';
            header("Location: login.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập giáo viên</title>
    <link rel="stylesheet" href="./admin/css/loginAdmin.css">
    <link rel="stylesheet" href="./admin/static/all.css">
    <link rel="stylesheet" href="./admin/static/bootstrap.min.css">
</head>

    <body>
    <div class="container">
        <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
            <div class="card-body">
                <h5 class="card-title text-center"><b>Đăng nhập giáo viên </b></h5>
                <p style="text-align: center;">-- Chức năng này chỉ dành cho giáo viên -- </p>

                <form class="form-signin" method="POST" action="">
                    <div class="form-label-group">
                        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Mã giáo viên" required autofocus>
                        <label for="inputEmail">Mã giáo viên</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                        <label for="inputPassword">Mật khẩu</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="dangnhap" >Đăng nhập</button>
                    <hr class="my-4">
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script src="./admin/static/jquery.slim.min.js"></script>
    <script src="./admin/static/bootstrap.bundle.min.js"></script>
    </body>

</html>

