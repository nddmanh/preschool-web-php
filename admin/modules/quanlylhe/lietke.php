
<?php
    $sql_lietke_lienhe = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe DESC ";
    $querry_lietke_lienhe= mysqli_query($mysqli, $sql_lietke_lienhe);
?>
    <h3><strong>Danh sách tin nhắn gửi đến</strong></h3>
    
    <div class="table-responsive">
        <table style="text-align: center;" class="table table-striped table-sm">
          <thead >
            <tr>
              <th>STT</th>
              <th>Họ tên người gủi</th>
              <th>Email</th>
              <th>SĐT</th>
              <th>Nội dung tin nhắn </th>
              <th>Quản lý </th>
            </tr>
          </thead>
          <tbody >

            <?php
              $i = 0;
              while ($row = mysqli_fetch_array($querry_lietke_lienhe)) {
                  $i++;
            ?>
              <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['name_lh'] ?></td>
                  <td><?php echo $row['email_lh'] ?></td>
                  <td><?php echo $row['sdt_lh'] ?></td>
                  <td><?php echo $row['noidung_lh'] ?></td>
                  <td>
                      <a href="modules/quanlylhe/xuly.php?idlh=<?php echo $row['id_lienhe'] ?>"> <button type="button" class="btn btn-danger">Xóa</button> </a> 
                  </td>
              </tr>
            <?php
              }
            ?>          
            
          </tbody>
        </table>
      </div>
