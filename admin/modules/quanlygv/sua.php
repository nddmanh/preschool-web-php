<?php
    $sql_sua_gv = "SELECT * FROM tbl_gv WHERE id_gv ='$_GET[idgv]' LIMIT 1";
    $querry_sua_gv= mysqli_query($mysqli, $sql_sua_gv);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Quản lý thông tin giáo viên</strong> </h1>
</div>

<h4>Sửa thông tin giáo viên mới</h4>
<table class="table" >
    <form method="POST" autocomplete="off" action="modules/quanlygv/xuly.php?idgv=<?php echo $_GET['idgv'] ?>">

        <?php
            while($dong = mysqli_fetch_array($querry_sua_gv)) {
        ?>
        <tr>
            <th scope="row"> Họ tên giáo viên </th>
            <td><input type="text" name="name_gv" value="<?php echo $dong['name_gv'] ?>"></td>
        </tr>
        <tr>
            <th scope="row">Năm sinh</th>
            <td><input type="text" name="namsinh_gv" value="<?php echo $dong['namsinh_gv'] ?>" ></td>
        </tr>
        <tr>
            <th scope="row">Mã giáo viên</th>
            <td><input type="text" name="ma_gv" value="<?php echo $dong['ma_gv'] ?>"></td>
        </tr>
        <tr>
            <th scope="row">Mã lớp học</th>
            <td><input type="text" name="maclass" value="<?php echo $dong['maclass'] ?>"></td>
        </tr>
        <tr>
            <th scope="row">Mật khẩu đăng nhập</th>
            <td><input type="password" name="matkhau_gv" value="<?php echo $dong['matkhau_gv'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="btn btn-success" name="sua_gv" value="Sửa thông tin"></td>
        </tr>
        <?php
        }
        ?>
    </form>

</table>


