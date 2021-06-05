<?php
    include("../../config/config.php");

    $chude = $_POST['chude'];
    $tieude = $_POST['tieude'];
    $tomtat = $_POST['tomtat'];
    $noidung = $_POST['noidung'];

    //xử lý hình ảnh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    if ($hinhanh != '') {
        $hinhanh = time().'_'.$hinhanh;
    }

    //Xử lý ngày
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngay =  date("d/m/Y");
    
    if ( isset($_POST['them_tt'])) {
        //them
        $sql_them = "INSERT INTO tbl_tintuc(ngay, chude, tieude, tomtat, noidung, hinhanh) VALUES ('".$ngay."', '".$chude."', '".$tieude."', '".$tomtat."', '".$noidung."', '".$hinhanh."' )";
        move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlytintuc&query=them');
    } 
    elseif (isset($_POST['sua_tt'])) {
        $sql = "SELECT * FROM tbl_tintuc WHERE id_tintuc = '$_GET[idtt]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        
        //sua
        if ($hinhanh !=  '' ) {
            move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
            // xóa hình ảnh cũ   
            while ($row = mysqli_fetch_array($query)) {
                unlink('uploads./'.$row['hinhanh']);
                $ngay = $row['ngay'];
            }  
        } else {
            while ($row = mysqli_fetch_array($query)) {
                $hinhanh = $row['hinhanh'];
                $ngay = $row['ngay'];
            }
        }

        $sql_update = "UPDATE tbl_tintuc SET ngay='".$ngay."', tieude='".$tieude."', chude = '".$chude."', tomtat = '".$tomtat."', noidung ='".$noidung."', hinhanh = '".$hinhanh."' WHERE tbl_tintuc.id_tintuc = '$_GET[idtt]'";
        mysqli_query($mysqli, $sql_update);
        header('Location:../../index.php?action=quanlytintuc&query=them');     
    } else {
        $id = $_GET['idtt'];
        // xóa hình ảnh cũ
        $sql = "SELECT * FROM tbl_tintuc WHERE id_tintuc = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads./'.$row['hinhanh']);
        }

        $sql_xoa = "DELETE FROM tbl_tintuc WHERE id_tintuc = '".$id."'";
        mysqli_query($mysqli, $sql_xoa);
        echo "xoa thanh cong roi nè";
        header('Location:../../index.php?action=quanlytintuc&query=them');        
    }
?>