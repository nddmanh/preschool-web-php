<div class="main"> 
    <?php

        if(isset($_GET['action']) && $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tam = '';
            $query = '';
        }

        if ($tam == 'quanlyhs' && $query=='them') {
            include("quanlyhs/them.php");
            include("quanly/quanlyhs/lietke.php");
        } 
        elseif ($tam == 'quanlyhs' && $query=='sua') {
            include("quanly/quanlyhs/sua.php");
        } 
        elseif ($tam == 'timkiem' && $query == 'tim') {
            include("quanly/quanlyhs/timhs.php");
        } 
        else {
            include("quanlyhs/them.php");
            include("quanly/quanlyhs/lietke.php");
        }
    ?>
</div>