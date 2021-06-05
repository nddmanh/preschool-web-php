<div class="main"> 
    <?php

        if(isset($_GET['action']) && $_GET['query']) {
            $tam = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tam = '';
            $query = '';
        }

        if ($tam == 'quanlygv' && $query=='them') {
            include("modules/quanlygv/them.php");
            include("modules/quanlygv/lietke.php");
        } 
        elseif($tam == 'quanlygv' && $query=='sua') {
            include("modules/quanlygv/sua.php");
        } 
        elseif($tam == 'quanlytintuc' && $query=='them') {
            include("modules/quanlytintuc/them.php");
            include("modules/quanlytintuc/lietke.php");
        } 
        elseif($tam == 'quanlylhe' && $query=='xem') {
            include("modules/quanlylhe/lietke.php");
        } 
        elseif($tam == 'quanlytintuc' && $query=='sua') {
            include("modules/quanlytintuc/sua.php");
        } 
        
        else {
            include("modules/dashboard.php");
        }
    ?>
</div>