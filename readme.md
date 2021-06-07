Xin chào, đây là web mình làm về Trường Mầm Non code bằng php thuần và mysql.

* Tính năng:
    - Trang chủ có form liên hệ sử dụng ajax để gửi dữ liệu vào DB mà không cần load lại trang
    - Tất cả các form của mình đều validate không cho nhập trống các trường.
    - Đăng xuất, đăng nhập, tìm kiếm,....
    - Vai trò của các actor đối với trang web:
        + Admin: Thêm, sửa, xóa dữ liệu của Giáo Viên, Tin tức. Xem, xóa Liên hệ.
        + Giáo viên: sử dụng mã giáo viên và mật khẩu Admin cung cấp để Thêm Sửa Xóa dữ liệu của học sinh.
        + User: Xem Trang chủ và Tin tức của Web.

* Cách cài đặt như sau:
    - B0: Trong máy đã cài xampp và các trình soạn thảo code (mình dùng VSCode: hỗ trợ bật kèm terminal khá tiện)
    - B1: clone project về máy vào trong thư mục xampp/htdoc/
    - B2: Bật apache và mysql trong xampp lên. Vào file ./admin/config/config.php để cài đặt kết nối với CSDL trên máy bạn.
        Import file db.sql vào db của bạn.
    - B3: 
        + Vào browser truy cập trang web http://localhost:7882/preschool-web-php/ để sử dụng như user.
        + Để vào trang admin truy cập http://localhost:7882/preschool-web-php/admin Sau đó nhập tài khoản, mật khẩu ở tbl_admin là vào được trang quản lý.

* Một vài lưu ý:
    - Mình không deploy nên các bạn có thể setup như các bước trên để chạy trên localhost.
    - Bảng admin chỉnh mk_admin là MD5, sau đó nhập chay tài khoản admin nhé ( VD: tk_admin: admin, mk_admin: 123456789, admin_status: 1). Sau khi cài xong sẽ dùng tài khoản admin này để đăng nhập vào trang quản lý.

----------------------------------------------------------------------------------------------
14:39 Hà Nội ngày 5/6/2021 @by nddmanh
