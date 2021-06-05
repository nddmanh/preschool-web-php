<?php
    $sql_sua_hs = "SELECT * FROM tbl_hs WHERE id_hs ='$_GET[idhs]' LIMIT 1";
    $querry_sua_hs= mysqli_query($mysqli, $sql_sua_hs);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Quản lý thông tin học sinh</strong> </h1>
</div>

<h4>Sửa thông tin học sinh</h4>
<table class="table" >
    <form method="POST" enctype="multipart/form-data"  autocomplete="off" action="quanly/quanlyhs/xuly.php?idhs=<?php echo $_GET['idhs'] ?>">

        <?php
            while($dong = mysqli_fetch_array($querry_sua_hs)) {
        ?>
            <tr>
                <th scope="row"> Họ tên học sinh </th>
                <td><input type="text" name="name_hs" value="<?php echo $dong['name_hs'] ?>"></td>
            </tr>
            <tr>
                <th scope="row">Năm sinh</th>
                <td><input type="text" name="namsinh_hs" value="<?php echo $dong['namsinh_hs'] ?>" ></td>
            </tr>
            <tr>
                <th scope="row">Mã lớp học</th>
                <td><input type="text" name="class" value="<?php echo $dong['class'] ?>"></td>
            </tr>

            <tr>
                <th scope="row">Địa chỉ</th>
                <td><input type="text" name="diachi_hs" value="<?php echo $dong['diachi_hs'] ?>"></td>
            </tr>
            <tr>
                <th scope="row">Hình ảnh</th>
                <td> 
                    <img width="100px" src="quanly/quanlyhs/uploads/<?php echo $dong['anh_hs'] ?> " alt="">
                    <input type="file" name="anh_hs" value="<?php echo $dong['anh_hs'] ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" class="btn btn-success" name="sua_hs" value="Sửa thông tin"></td>
            </tr>
        <?php
        }
        ?>
    </form>

</table>


