

<?php
    $sql_sua_tt = "SELECT * FROM tbl_tintuc WHERE id_tintuc ='$_GET[idtt]' LIMIT 1";
    $querry_sua_tt = mysqli_query($mysqli, $sql_sua_tt);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Quản lý tin tức</strong> </h1>
</div>

<h4>Sửa thông tin bài viết</h4>

<table class="table" >
    <form method="POST" enctype="multipart/form-data"  autocomplete="off" action="modules/quanlytintuc/xuly.php?idtt=<?php echo $_GET['idtt'] ?>">

        <?php
            while($dong = mysqli_fetch_array($querry_sua_tt)) {
        ?>
            <tr>
                <th scope="row"> Chủ đề  </th>
                <td>
                    <input type="text" name="chude" class="nhapthongtin" placeholder="Chủ đề" value="<?php echo $dong['chude'] ?>" >
                </td>
            </tr>
            <tr>
                <th scope="row"> Tiêu đề  </th>
                <td>
                    <div class="form-floating">
                        <textarea class="form-control" class="nhapthongtin" name="tieude" rows="1" placeholder="Tiêu đề"  ><?php echo $dong['tieude'] ?></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Tóm tắt</th>
                <td>
                    <div class="form-floating">
                        <textarea class="form-control" class="nhapthongtin" name="tomtat"  placeholder="Tóm tắt" ><?php echo $dong['tomtat'] ?></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Nội dung</th>
                <td>
                    <div class="form-floating">
                        <textarea class="form-control" class="nhapthongtin" name="noidung" cols="10" rows="5" placeholder="Nội dung bài viết" ><?php echo $dong['noidung'] ?> </textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Hình ảnh</th>
                <td>
                    <input id="hinhanh" type="file" class="nhapthongtin" name="hinhanh"> <hr>
                    <img height="250px" src="modules/quanlytintuc/uploads/<?php echo $dong['hinhanh'] ?> " alt="">
                </td>
                
            </tr>


            <tr>
                <td colspan="2"><input type="submit" class="btn btn-success" name="sua_tt" value="Sửa thông tin"></td>
            </tr>

        <?php
        }
        ?>
    </form>

</table>



