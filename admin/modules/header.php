<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
        unset($_SESSION['dangnhap']);
        header('Location: ./');
    }
?>  
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Trường Mầm Non Bình Minh</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <span style="color: white;">Xin chào : <?php echo $_SESSION['dangnhap'] ?></span>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                
            <a class="nav-link" href="index.php?dangxuat=1"><button type="button" class="btn btn-info">Đăng xuất</button></a>
            </li>
        </ul>
    </nav>