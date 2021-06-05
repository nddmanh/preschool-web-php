
    <?php
        include('./pages/main/nav_tintuc.php');
    ?>

    <div class="container">
        
        <?php
            include('./pages/main/headertintuc.php');
        ?>

        
        
        <?php
            if(isset($_GET['action']) ) {
                $tam = $_GET['action'];
            } else {
                $tam = '';
            }

            if ($tam == 'tinchitiet') {
                include("./pages/main/tinchitiet.php");
            } elseif($tam == 'tintuc') {
                include('./pages/main/dstintuc.php');
            } else {
                include('./pages/main/dstintuc.php');
            }
            
        ?>

    </div>