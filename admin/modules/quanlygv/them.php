
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><strong>Quản lý thông tin giáo viên</strong> </h1>
    </div>

    <h4>Thêm thông tin giáo viên mới</h4>
    <table class="table" >
        <form method="POST" autocomplete="off" action="modules/quanlygv/xuly.php">
            <tr>
                <th scope="row"> Họ tên giáo viên </th>
                <td><input id="name" type="text" name="name_gv"></td>
            </tr>
            <tr>
                <th scope="row">Năm sinh</th>
                <td><input id="namsinh" type="text" name="namsinh_gv"></td>
            </tr>
            <tr>
                <th scope="row">Mã giáo viên</th>
                <td><input id="magv" type="text" name="ma_gv"></td>
            </tr>
            <tr>
                <th scope="row">Mã lớp học</th>
                <td><input id="maclass" type="text" name="maclass"></td>
            </tr>
            <tr>
                <th scope="row">Mật khẩu đăng nhập</th>
                <td><input id="matkhau" type="password" name="matkhau_gv"></td>
            </tr>
            <tr>
                <td colspan="2"><input id="btn-gui" type="submit" class="btn btn-primary" name="them_gv" value="Thêm giáo viên"></td>
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
        let magv = $('#magv').val();
        let matkhau = $('matkhau').val();
        
        if (name == "" || namsinh == "" || maclass == "" || magv == "" || matkhau == "" ) {
            alert("Không được bỏ trống thông tin");
            return false;
        }
    });

    </script>


    
