
<?php
    if(isset($_GET['dangxuatgv']) && $_GET['dangxuatgv'] == 2) {
        unset($_SESSION['dangnhapgv']);
        header('Location: ./index.php');
    }
?>  
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="./">Trường Mầm Non Bình Minh</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form action="?action=timkiem&query=tim" method="POST">
            <input class="form-control-dark " type="text" name="tukhoa" placeholder="Nhập tên học sinh" aria-label="Search">
            <input type="submit" class="btn btn-light" name="timkiem" value="Tìm kiếm">
        </form>
        <span style="color: white;">Xin chào thầy ( cô ) : <?php echo $_SESSION['dangnhapgv'] ?></span>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            
            <a class="nav-link" href="?dangxuatgv=2"><button type="button" class="btn btn-info">Đăng xuất</button></a>
            </li>
        </ul>
    </nav>