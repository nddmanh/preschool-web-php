
<?php
    $sql_lietke_tt = "SELECT * FROM tbl_tintuc ORDER BY id_tintuc DESC ";
    $querry_lietke_tt= mysqli_query($mysqli, $sql_lietke_tt);
?>

    <h4>Danh sách tin tức</h4>
    <div class="table-responsive">
        <table style="text-align: center;" class="table table-striped table-sm">
          <thead >
            <tr>
              <th>STT</th>
              <th>Chủ đề</th>
              <th>Tiêu đề bài viết</th>
              <th>Ngày đăng</th>
              <th>Quản lý</th>
            </tr>
          </thead>
          <tbody >

            <?php
              $i = 0;
              while ($row = mysqli_fetch_array($querry_lietke_tt)) {
                  $i++;
            ?>
              <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['chude'] ?></td>
                  <td><?php echo $row['tieude'] ?></td>
                  <td><?php echo $row['ngay'] ?></td>
                  <td>
                    <a href="modules/quanlytintuc/xuly.php?idtt=<?php echo $row['id_tintuc'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a> 
                    <a href="?action=quanlytintuc&query=sua&idtt=<?php echo $row['id_tintuc'] ?>"><button type="button" class="btn btn-warning">Sửa</button></a> 
                  </td>
              </tr>
            <?php
              }
            ?>          
            
          </tbody>
        </table>
      </div>

