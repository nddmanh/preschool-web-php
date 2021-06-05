<?php
    $per_page = 5;

    if(isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = 1;
    }
    if($page == '' || $page == 1) {
        $begin = 0;
    } else {
        $begin = ($page * $per_page) - $per_page;
    }

    $sql_lietke_hs = "SELECT * FROM tbl_hs ORDER BY id_hs DESC LIMIT $begin, $per_page ";
    $querry_lietke_hs= mysqli_query($mysqli, $sql_lietke_hs);
?>

    <h4>Danh sách học sinh</h4>
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
              $i = $begin;
              while ($row = mysqli_fetch_array($querry_lietke_hs)) {
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

    <?php
      $sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_hs") ;
      $row_count = mysqli_num_rows($sql_trang);
      $trang = ceil($row_count/$per_page) ;
    ?>

    <p style="margin-top: 30px;"><strong>Trang: </strong> </p>
    <ul class="list_trang">
        <?php
        for ($i = 1; $i <= $trang; $i++) {
        ?>
            <li> <a  href="quanlyhs.php?trang=<?php echo $i ?>"> <input type="submit"  class="btn <?php if($i == $page)  { echo 'btn-success';} else {  echo 'btn-primary'; } ?>" value="<?php echo $i ?>">  </a></li>
        <?php
        }
        ?>
    </ul>

    <style>
        ul.list_trang {
          display: flex;
        }
        ul.list_trang li {
          list-style: none;
        }
        .btn {
          margin-left: 10px;
        }
    </style>