    <?php
        include('./admin/config/config.php');
        $per_page = 4;

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

        $sql_tintuc = "SELECT * FROM tbl_tintuc ORDER BY id_tintuc DESC LIMIT $begin, $per_page ";
        $query_tintuc = mysqli_query($mysqli, $sql_tintuc);
    ?>
    
    <div class="row mb-2">
        <?php
            while( $row = mysqli_fetch_array($query_tintuc)) {
        ?> 

        <div class="col-md-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"> <?php echo $row['chude'] ?> </strong>
                    <h3 class="mb-0"> <?php echo $row['tieude'] ?> </h3>
                    <div class="mb-1 text-muted"> Ngày đăng: <?php echo $row['ngay'] ?> </div>
                    <p class="card-text mb-auto"> <b>Tóm tắt nội dung: </b> <?php echo $row['tomtat'] ?></p>
                    <a href="?action=tinchitiet&idtt=<?php echo $row['id_tintuc'] ?>" class="stretched-link">Đọc tiếp...</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img width="250" height="250" src="./admin/modules/quanlytintuc/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                </div>
            </div>
        </div>

        <?php
            }
        ?> 

    </div>

    <?php
      $sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_tintuc") ;
      $row_count = mysqli_num_rows($sql_trang);
      $trang = ceil($row_count/$per_page) ;
    ?>

    <p style="margin-top: 30px;"> <strong>Trang: </strong> </p>
    <ul class="list_trang">
        <?php
        for ($i = 1; $i <= $trang; $i++) {
        ?>
            <li> <a  href="tintuc.php?trang=<?php echo $i ?>"> <input type="submit"  class="btn <?php if($i == $page)  { echo 'btn-success';} else {  echo 'btn-primary'; } ?>" value="<?php echo $i ?>">  </a></li>
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


    