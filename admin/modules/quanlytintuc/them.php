
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> <strong>Quản lý tin tức</strong> </h1>
    </div>
    
   
    <h4>Thêm bài viết mới</h4>
    <table class="table" >

        <form method="POST" enctype="multipart/form-data" action="modules/quanlytintuc/xuly.php">
            <tr>
                <th scope="row"> Chủ đề  </th>
                <td>
                    <input type="text" name="chude" class="nhapthongtin" placeholder="Chủ đề" >
                </td>
            </tr>
            <tr>
                <th scope="row"> Tiêu đề  </th>
                <td>
                    <div class="form-floating">
                        <textarea class="form-control" class="nhapthongtin" name="tieude" rows="1" placeholder="Tiêu đề" ></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Tóm tắt</th>
                <td>
                    <div class="form-floating">
                        <textarea class="form-control" class="nhapthongtin" name="tomtat"  placeholder="Tóm tắt" ></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Nội dung</th>
                <td>
                    <div class="form-floating">
                        <textarea class="form-control" class="nhapthongtin" name="noidung" cols="10" rows="5" placeholder="Nội dung bài viết" id="floatingTextarea"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">Hình ảnh</th>
                <td><input id="hinhanh" type="file" class="nhapthongtin" name="hinhanh"></td>
            </tr>
            <tr>
                <td colspan="2"><input id="btn-gui" type="submit" class="btn btn-primary" name="them_tt" value="Thêm bài viết"></td>
            </tr>
        </form>

    </table>
    
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
    $('#btn-gui').on('click', function () {
        let thongtin = $('.nhapthongtin').val();
        
        if (thongtin == "" ) {
            alert("Không được bỏ trống thông tin");
            return false;
        }
    });

    </script>
    
