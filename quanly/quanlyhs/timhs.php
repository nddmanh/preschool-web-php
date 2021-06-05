
<?php
    if(isset($_POST['timkiem'])) {
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_hs = "SELECT * FROM tbl_hs WHERE  tbl_hs.name_hs LIKE '%".$tukhoa."%' ";
    $query_hs = mysqli_query($mysqli, $sql_hs);
?>  

    <h4>Danh sách học sinh có tên: <strong>" <?php echo $_POST['tukhoa'] ?> "</strong> </h4>
    <div class="table-responsive">
        <table style="text-align: center;" class="table table-striped table-sm">
          <thead >
            <tr>
              <th>STT</th>
              <th>Họ tên học sinh</th>
              <th>Hình ảnh</th>
              <th>Năm sinh</th>
              <th>Mã lớp </th>
              <th>Địa chỉ </th>
              <th>Quản lý</th>
            </tr>
          </thead>
          <tbody >

            <?php
                $i = 0;
                while ($row = mysqli_fetch_array($query_hs)) {
                    $i++;
            ?>
              <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['name_hs'] ?></td>
                  <td><img width="60px" height="70px" src="quanly/quanlyhs/uploads/<?php echo $row['anh_hs'] ?> " alt=""></td>
                  <td><?php echo $row['namsinh_hs'] ?></td>
                  <td><?php echo $row['class'] ?></td>
                  <td><?php echo $row['diachi_hs'] ?></td>
                  <td>
                    <a href="quanly/quanlyhs/xuly.php?idhs=<?php echo $row['id_hs'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a> 
                    <a href="?action=quanlyhs&query=sua&idhs=<?php echo $row['id_hs'] ?>"><button type="button" class="btn btn-warning">Sửa</button></a> 
                  </td>
              </tr>
            <?php
              }
            ?>          
            
          </tbody>
        </table>
      </div>