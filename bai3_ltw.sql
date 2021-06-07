-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2021 lúc 11:36 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai3_ltw`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `tk_admin` varchar(255) NOT NULL,
  `mk_admin` varchar(255) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `tk_admin`, `mk_admin`, `admin_status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gv`
--

CREATE TABLE `tbl_gv` (
  `id_gv` int(11) NOT NULL,
  `name_gv` varchar(255) NOT NULL,
  `namsinh_gv` varchar(255) NOT NULL,
  `ma_gv` varchar(255) NOT NULL,
  `maclass` varchar(255) NOT NULL,
  `matkhau_gv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_gv`
--

INSERT INTO `tbl_gv` (`id_gv`, `name_gv`, `namsinh_gv`, `ma_gv`, `maclass`, `matkhau_gv`) VALUES
(5, 'Nguyễn Mạnh Sơn', '1985', 'gv001', 'lopmam', 'admin'),
(6, 'Nguyễn Mạnh Hùng', '1984', 'gv002', 'lopngoaingu', 'admin'),
(7, 'Lê Thúy Hà', '1975', 'gv003', 'lopchoi', 'admin'),
(10, 'Nguyễn Văn Cường', '1983', 'gv004', 'loptuduy', 'admin'),
(11, 'Lê Thị Vân Anh', '1985', 'gv005', 'lopla', 'admin'),
(12, 'Trần Ngọc Điệp', '1982', 'gv006', 'lopgiaotiep', 'admin'),
(13, 'Nguyễn Quang Hưng', '1998', 'gv007', 'lopweb', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hs`
--

CREATE TABLE `tbl_hs` (
  `id_hs` int(11) NOT NULL,
  `name_hs` varchar(255) NOT NULL,
  `namsinh_hs` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `diachi_hs` varchar(255) NOT NULL,
  `anh_hs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_hs`
--

INSERT INTO `tbl_hs` (`id_hs`, `name_hs`, `namsinh_hs`, `class`, `diachi_hs`, `anh_hs`) VALUES
(3, 'Đức Mạnh', '2000', 'lopla', 'HN1', '1622796883_nv3.jpg'),
(4, 'Đức Mạnh1', '2010', 'lopla', 'hn1', '1622796698_nv4.jpg'),
(16, 'Trần Văn B', '2010', 'loptuduy', 'HP', '1622797941_nv4.jpg'),
(17, 'Đức Mạnh 2', '2010', 'lopchoi', 'HN', '1622830305_nv6.jpg'),
(18, 'Đức Mạnh 3', '2020', 'lopchoi', 'HN', '1622830376_nv1.jpg'),
(19, 'Đức Mạnh 4', '2021', 'loptuduy', 'HN', '1622830413_phuhuynh3.png'),
(20, 'Đức Mạnh 5', '2019', 'lopngoaingu', 'Hà Đông', '1622830444_phuhuynh2.png'),
(21, 'Đức Mạnh 6', '2018', 'lopla', 'TX', '1622830476_gv2.jpg'),
(22, 'Đức Mạnh 7', '2017', 'lopchoi', 'TB', '1622830522_nv2.jpg'),
(23, 'Sơn Tùng', '2014', 'lopgiaotiep', 'TB', '1622830564_phuhuynh2.png'),
(24, 'Đức Mạnh 10', '2015', 'lopla', 'HN', '1622832007_dr.jpg'),
(25, 'Đức Mạnh 8', '2007', 'lopgiaotiep', 'HN', '1622836490_nv1.jpg'),
(26, 'Đức Mạnh 9', '2018', 'loptuduy', 'Ba Đình', '1622836532_nv5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `name_lh` varchar(255) NOT NULL,
  `email_lh` varchar(255) NOT NULL,
  `sdt_lh` varchar(255) NOT NULL,
  `noidung_lh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `name_lh`, `email_lh`, `sdt_lh`, `noidung_lh`) VALUES
(1, 'Mạnh', 'manh@123', '0789307845', 'xin chào'),
(2, 'Mạnh', 'manh@123', '0789307845', 'hehe'),
(3, 'Mạnh', 'manh@123', '0789307845', 'hehehehe'),
(4, 'Mạnh', 'manh@123', '0789307845', 'gege'),
(10, 'Mạnh', 'manh@123', '0789307845', 'gừ'),
(11, 'Mạnh', 'manh@123', '0789307845', 'test'),
(12, 'Mạnh', 'manh@123', '0789307845', 'lần này phải được'),
(13, 'Mạnh', 'manh@123', '0789307845', 'test xem alert được không'),
(14, 'Mạnh', 'manh@123', '0789307845', 'Xin chào mình có câu hỏi về tuyển sinh của trường'),
(15, 'Mạnh', 'manh@123', '0789307845', 'Muộn rồi mà sao còn'),
(17, 'Long', 'manh@123', '0789307845', 'Chào Long');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `ngay` varchar(255) NOT NULL,
  `chude` varchar(255) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id_tintuc`, `ngay`, `chude`, `tieude`, `tomtat`, `noidung`, `hinhanh`) VALUES
(1, '04/06/2021', 'Thông báo', 'Lorem Ipsum', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ', '1622832928_img_2014051910040732561.jpg'),
(6, '05/06/2021', 'Thông báo', 'Kế hoạch nghỉ lễ Giỗ tổ Hùng Vương 2021, 30/4 & 1/5/2021', 'THÔNG BÁO KẾ HOẠCH NGHỈ LỄ', 'Kính thưa Quý Phụ Huynh!\r\n\r\nBan giám hiệu trường mầm non Họa Mi xin trân trọng thông báo kế hoạch nghỉ lễ Giỗ Tổ Hùng Vương, 30/4 và 1/5 năm 2021 như sau:\r\n\r\nLễ giỗ tổ Hùng Vương 2021\r\nCác bé nghỉ vào ngày thứ tư, 21/04/2021. Thứ 5, ngày 22/04/2021 các bé đi học lại bình thường.\r\n\r\nLễ 30/04/2021 & 01/05/2021\r\nCác bé nghỉ từ thứ sáu, ngày 30/04/2021 đến hết chủ nhật, ngày 02/05/2021.\r\nThứ hai, ngày 03/05/2021 các bé sẽ đi học lại bình thường.\r\nKính chúc Quý phụ huynh và gia đình có kỳ nghỉ thật nhiều sức khỏe, an lành và hạnh phúc!\r\n\r\nHiện tại thời tiết đang chuyển mùa và nắng nóng, Quý phụ huynh lưu ý giữ gìn sức khỏe cho các bé trong các dịp đi chơi xa.\r\n\r\nTrân trọng!', '1622829778_gio to.jpg'),
(7, '05/06/2021', 'Thông báo', 'Nâng cấp hệ thống camera tại Trường mầm non Họa Mi', 'Thông báo về việc nâng cấp hệ thống camera tại Trường mầm non Họa Mi', 'Với mục tiêu, nỗ lực phát triển và hoàn thiện không ngừng, Trường mầm non Họa Mi lần thứ 2 nâng cấp hệ thống camera mới hoàn toàn nhằm giám sát cũng như phục vụ nhu cầu xem của Quý Phụ Huynh về quá trình học và chơi của bé ở trường.\r\n\r\nHệ thống camera mới được trường tự phát triển nhằm mang đến cho Quý Phụ Huynh sự thuận tiện, dễ dàng và đảm bảo chất lượng khi sử dụng. Sau khi nâng cấp hệ thống camera mới (từ ngày 07/09/2017), hệ thống camera cũ sẽ không còn sử dụng được nữa vì đã được thay thế hoàn toàn.\r\n\r\nĐể có được thông tin truy cập và hướng dẫn sử dụng, Quý Phụ Huynh vui lòng liên hệ văn phòng của nhà trường để được cấp mới.\r\n\r\nHiện tại, hệ thống chỉ hoạt động tốt trên các trình duyệt hiện đại, có trải nghiệm người dùng tốt, miễn phí và bảo mật như Google Chrome, Firefox, Safari, Opera, Cốc Cốc… Và các trình duyệt trên điện thoại, tablet Android (Sony, SamSung, HTC, LG, Vivo, Oppo…) và iOS (iPhone, iPad).\r\n\r\nHệ thống đang trong quá trình phát triển nên sẽ phát sinh một số lỗi không mong muốn, mong Quý Phụ Huynh thông cảm. Các phần mềm để xem trên Android và iOS đang được phát triển và sẽ đưa đến với Quý Phụ Huynh trong thời gian sớm nhất có thể.\r\n\r\nNgoài ra nhà trường mong được các góp ý từ Quý Phụ Huynh nhằm làm cho hệ thống hoàn thiện hơn.\r\n\r\nXin chân thành cảm ơn Quý Phụ Huynh!', '1622829878_csvc.jpg'),
(8, '05/06/2021', 'Bài thơ', 'Bài thơ Em làm chú bộ đội', 'Bài thơ Em làm chú bộ đội do học sinh của trường sáng tác', 'Bài thơ Em làm chú bộ đội\r\nEm làm chú bộ đội\r\nĐứng gác ngoài đảo xa\r\nKhi trời yên biển lặng\r\nVẫn chơi đàn ghi ta\r\n\r\nEm yêu chú bộ đội\r\nĐôi mắt dõi trời xa\r\nGiữa bầu trời xanh biếc\r\nCho em được hát ca\r\n\r\nEm làm chú bộ đội\r\nYêu Trường Sa Hoàng Sa\r\nBiên cương luôn canh giữ\r\nQuần thù chẳng dám qua\r\n\r\nMai này em khôn lớn\r\nChú cũng chắc đã già\r\nEm sẽ cũng canh giữ\r\nBiển trời quê hương ta.', '1622829992_em-lam-chu-bo-doi-1024x689.jpg'),
(9, '05/06/2021', 'Bài thơ', 'Bài thơ Hoa mào gà', 'Bài thơ Hoa mào gà của em Thanh Hào', 'Bài thơ Hoa mào gà\r\nMột hôm chú gà trống\r\nLang thang trong vườn hoa\r\nĐến bên hoa mào gà\r\nNgơ ngác nhìn không chớp\r\nBỗng gà kêu hoảng hốt:\r\nLạ thật các bạn ơi!\r\nAi lấy mào của tôi?\r\nCắm lên cây này thế? ', '1622830168_bai-tho-hoa-mao-ga-1024x678.jpg'),
(10, '05/06/2021', 'Bài thơ', 'Bài thơ Bé làm bộ đội', 'Bài thơ Bé làm bộ đội của học sinh lớp lá', 'Bài thơ Bé làm bộ đội\r\nBé làm chú bộ đội\r\nVai đeo khẩu súng trường\r\nNòng đen báng súng gập\r\nThò lò nước mũi vương.\r\n\r\nTrông bé rất oai nhé\r\nĐứng canh sân đuổi gà\r\nBà vừa về đến ngõ\r\nBé đã ra vòi quà.\r\n\r\nSúng để buồn một góc\r\nBé quên nhiệm vụ rồi\r\nCả nhà cười bảo bé\r\nChắc bộ đội về chơi… ', '1622830233_be-lam-bo-doi-1024x609.jpg'),
(11, '05/06/2021', 'Bài thơ', 'Ô ăn quan', 'Bài thơ Ô ăn quan của học sinh', 'Ô ăn quan\r\nHàng trầu hàng cau\r\nLà hàng con gái\r\nHàng bánh hàng trái\r\nLà hàng bà già\r\nHàng hương hàng hoa\r\nLà hàng cúng Phật.', '1622835947_tro-choi-o-an-quan.jpg'),
(12, '05/06/2021', 'Bài thơ', 'Nu na nu nống', 'Bài thơ Nu na nu nống của học sinh', 'Nu na nu nống\r\nĐánh trống phất cờ\r\nMở cuộc thi đua\r\nChân ai sạch sẽ\r\nGót đỏ hồng hào\r\nKhông bẩn tí nào\r\nĐược vào đánh trống', '1622836032_nu-na-nu-nong.jpg'),
(13, '05/06/2021', 'Bài thơ', 'Rồng rắn lên mây', 'Bài thơ Rồng rắn lên mây của học sinh', 'Rồng rắn lên mây\r\nCó cây xúc sắc\r\nCó quả đồng hồ\r\nHỏi thăm thầy thuốc\r\nCó nhà hay không?', '1622836083_rong-ran-len-may.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_gv`
--
ALTER TABLE `tbl_gv`
  ADD PRIMARY KEY (`id_gv`);

--
-- Chỉ mục cho bảng `tbl_hs`
--
ALTER TABLE `tbl_hs`
  ADD PRIMARY KEY (`id_hs`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_gv`
--
ALTER TABLE `tbl_gv`
  MODIFY `id_gv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_hs`
--
ALTER TABLE `tbl_hs`
  MODIFY `id_hs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
