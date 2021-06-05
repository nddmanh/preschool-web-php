
    <?php
        include('./admin/config/config.php');

        $sql_tintuc = "SELECT * FROM tbl_tintuc WHERE id_tintuc = '$_GET[idtt]' LIMIT 1";
        $query_tintuc = mysqli_query($mysqli, $sql_tintuc);
    ?>
    
    <div class="row mb-2">
        <?php
            while( $row = mysqli_fetch_array($query_tintuc)) {
        ?> 

        <div class="col-md-12">  
                <strong class="d-inline-block mb-2 text-success"> Chủ đề :  <?php echo $row['chude'] ?> </strong>
                <h3> <?php echo $row['tieude'] ?> </h3>
                <p>Ngày đăng: <strong><?php echo $row['ngay'] ?></strong>  bởi <strong>Admin</strong></p>
                <div class="noidung">
                    <img height="500px" src="./admin/modules/quanlytintuc/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                    <p> <?php echo $row['noidung'] ?></p>
                </div>
                
                <a href="?action=tintuc"><button type="button" class="btn btn-info">Quay lại</button> </a>   
        </div>

        <?php
            }
        ?> 

    </div>

    <style>
        .noidung {
            margin: 20px;
            text-align: center;
        }
        p {margin-top: 20px;}
    </style>