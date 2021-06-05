
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><strong>Quản lý thông tin học sinh</strong> </h1>
    </div>

    <h4>Thêm thông tin học sinh mới</h4>
    <table class="table" >

        <form method="POST" enctype="multipart/form-data" autocomplete="off" action="quanly/quanlyhs/xuly.php">
            <tr>
                <th scope="row"> Họ tên học sinh </th>
                <td><input id="name" type="text" name="name_hs"></td>
            </tr>
            <tr>
                <th scope="row">Năm sinh</th>
                <td><input id="namsinh" type="text" name="namsinh_hs"></td>
            </tr>
            <tr>
                <th scope="row">Mã lớp học</th>
                <td><input id="maclass" type="text" name="class"></td>
            </tr>
            <tr>
                <th scope="row">Địa chỉ</th>
                <td><input id="diachi" type="text" name="diachi_hs"></td>
            </tr>
            <tr>
                <th scope="row">Hình ảnh</th>
                <td><input id="hinhanh" type="file" name="anh_hs"></td>
            </tr>
            <tr>
                <td colspan="2"><input id="btn-gui" type="submit" class="btn btn-primary" name="them_hs" value="Thêm học sinh"></td>
            </tr>
        </form>

    </table>
    
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
    $('#btn-gui').on('click', function () {
        let name = $('#name').val();
        let namsinh = $('#namsinh').val();
        let maclass = $('#maclass').val();
        let diachi = $('#diachi').val();
        let hinhanh = $('#hinhanh').val();
        
        if (name == "" || namsinh == "" || maclass == "" || diachi == "" || hinhanh == "" ) {
            alert("Không được bỏ trống thông tin");
            return false;
        }
    });

    </script>

    
