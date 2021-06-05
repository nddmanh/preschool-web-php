<?php
    $sql_lietke_gv = "SELECT * FROM tbl_gv ORDER BY id_gv DESC ";
    $querry_lietke_gv= mysqli_query($mysqli, $sql_lietke_gv);
?>

    <h4>Danh sách giáo viên</h4>
    <div class="table-responsive">
        <table style="text-align: center;" class="table table-striped table-sm">
          <thead >
            <tr>
              <th>STT</th>
              <th>Họ tên giáo viên</th>
              <th>Năm sinh</th>
              <th>Mã giáo viên </th>
              <th>Mã lớp học </th>
              <th>Quản lý</th>
            </tr>
          </thead>
          <tbody >

            <?php
              $i = 0;
              while ($row = mysqli_fetch_array($querry_lietke_gv)) {
                  $i++;
            ?>
              <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['name_gv'] ?></td>
                  <td><?php echo $row['namsinh_gv'] ?></td>
                  <td><?php echo $row['ma_gv'] ?></td>
                  <td><?php echo $row['maclass'] ?></td>
                  <td>
                    <a href="modules/quanlygv/xuly.php?idgv=<?php echo $row['id_gv'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a> 
                    <a href="?action=quanlygv&query=sua&idgv=<?php echo $row['id_gv'] ?>"><button type="button" class="btn btn-warning">Sửa</button></a> 
                  </td>
              </tr>
            <?php
              }
            ?>          
            
          </tbody>
        </table>
      </div>

