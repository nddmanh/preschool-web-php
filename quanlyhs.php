<?php
    session_start();
    if (!isset($_SESSION['dangnhapgv'])) {
        header('Location: loginGV.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Trang Quản Lý Học Sinh</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="static/home/school-icon.jpg" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="./admin/static/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./admin/css/dashboard.css" rel="stylesheet">
</head>
<body>

    <?php
        include("./admin/config/config.php");

        include("./quanly/header.php");
        include("./quanly/menu.php");
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    
        <?php
            include("./quanly/main.php");
        ?>
        
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>
