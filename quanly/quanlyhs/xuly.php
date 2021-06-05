<?php
    include("../../admin/config/config.php");

    $name_hs = $_POST['name_hs'];
    $namsinh_hs = $_POST['namsinh_hs'];
    $class = $_POST['class'];
    $diachi_hs = $_POST['diachi_hs'];
    //xử lý hình ảnh
    $anh_hs = $_FILES['anh_hs']['name'];
    $anh_hs_tmp = $_FILES['anh_hs']['tmp_name'];
    if ($anh_hs != '') {
        $anh_hs = time().'_'.$anh_hs;
    }
    
    if ( isset($_POST['them_hs'])) {
        //them
        $sql_them = "INSERT INTO tbl_hs(name_hs, namsinh_hs, class, diachi_hs, anh_hs) VALUE ('".$name_hs."', '".$namsinh_hs."', '".$class."', '".$diachi_hs."', '".$anh_hs."' )";
        move_uploaded_file($anh_hs_tmp, 'uploads/'.$anh_hs);
        mysqli_query($mysqli, $sql_them);
        header('Location:../../quanlyhs.php?action=quanlyhs&query=them');
    } 
    elseif (isset($_POST['sua_hs'])) {
        $sql = "SELECT * FROM tbl_hs WHERE id_hs = '$_GET[idhs]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);

        //sua
        if ($anh_hs !=  '' ) {
            move_uploaded_file($anh_hs_tmp, 'uploads/'.$anh_hs);
            // xóa hình ảnh cũ    
            while ($row = mysqli_fetch_array($query)) {
                unlink('uploads./'.$row['anh_hs']);
            }
        } else {
            while ($row = mysqli_fetch_array($query)) {
                $anh_hs = $row['anh_hs'];
            }
        }

        $sql_update = "UPDATE tbl_hs SET name_hs='".$name_hs."', namsinh_hs='".$namsinh_hs."', class = '".$class."', diachi_hs ='".$diachi_hs."',  anh_hs = '".$anh_hs."'  WHERE id_hs = '$_GET[idhs]'";
        mysqli_query($mysqli, $sql_update);
        header('Location:../../quanlyhs.php?action=quanlyhs&query=them');
    } else {
        $id = $_GET['idhs'];
        // xóa hình ảnh cũ
        $sql = "SELECT * FROM tbl_hs WHERE id_hs = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads./'.$row['anh_hs']);
        }

        $sql_xoa = "DELETE FROM tbl_hs WHERE id_hs = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        echo "xoa thanh cong roi nè";
        header('Location:../../quanlyhs.php?action=quanlyhs&query=them');
    }
?>