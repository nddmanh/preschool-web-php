<?php
    include('./admin/config/config.php');

    // Nhập dữ liệu
    if (isset($_POST['name_lh'])) {
        $name_lh = $_POST['name_lh'] ;
        $email_lh  = $_POST['email_lh'] ;
        $sdt_lh = $_POST['sdt_lh'] ;
        $noidung_lh = $_POST['noidung_lh'] ;

        $result = mysqli_query($mysqli, "INSERT INTO tbl_lienhe (name_lh, email_lh, sdt_lh, noidung_lh) VALUES('$name_lh', '$email_lh', '$sdt_lh', '$noidung_lh') ");
        
        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }

?>