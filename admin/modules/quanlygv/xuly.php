<?php
    include("../../config/config.php");

    $name_gv = $_POST['name_gv'];
    $namsinh_gv= $_POST['namsinh_gv'];
    $ma_gv= $_POST['ma_gv'];
    $maclass= $_POST['maclass'];
    $matkhau_gv= $_POST['matkhau_gv'];

    if (isset($_POST['them_gv'])) {
        //them
        $sql_them = "INSERT INTO tbl_gv(name_gv, namsinh_gv, ma_gv, maclass, matkhau_gv) VALUE ('".$name_gv."', '".$namsinh_gv."', '".$ma_gv."', '".$maclass."', '".$matkhau_gv."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlygv&query=them');
    } 
    elseif (isset($_POST['sua_gv'])) {
        $sql_update = "UPDATE tbl_gv SET name_gv = '".$name_gv."', namsinh_gv = '".$namsinh_gv."', ma_gv = '".$ma_gv."', maclass = '".$maclass."', matkhau_gv = '".$matkhau_gv."' WHERE id_gv = '$_GET[idgv]' ";
        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=quanlygv&query=them');
    } else {
        $id = $_GET['idgv'];
        $sql_xoa = "DELETE FROM tbl_gv WHERE id_gv ='".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location:../../index.php?action=quanlygv&query=them');
    }
?>