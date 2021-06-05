<?php
    include("../../config/config.php");

    if (isset($_POST['them_lh'])) {
        echo "khong thuc hien";
    } else {
        $id = $_GET['idlh'];
        $sql_xoa = "DELETE FROM tbl_lienhe WHERE id_lienhe ='".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlylhe&query=xem');
    }
?>