-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2021 lúc 03:24 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanhang_webphone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSHH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiamGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiamGia`) VALUES
(31429599, 'ip_005', 1, 10),
(554678054, 'as_002', 3, 5),
(1130117407, 'ss_005', 5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSNV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDH` date NOT NULL,
  `NgayGH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `NgayGH`) VALUES
(31429599, 'KH01714022427', 'A01', '2021-06-04', '2021-06-07'),
(554678054, 'KH01714022427', 'A01', '2021-06-06', '2021-06-09'),
(1130117407, 'KH01714022427', 'A01', '2021-06-04', '2021-06-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `MADC` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachi`
--

INSERT INTO `diachi` (`MADC`, `DiaChi`, `MSKH`) VALUES
('KH01714022427', 'Ninh Kieu, Can Tho', 'KH01714022427'),
('KH144128264', 'Thoi Lai, Can Tho', 'KH144128264'),
('KH463273917', 'Vinh Thuan, Kien Giang', 'KH463273917');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia_Cu` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLoaiHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia_Cu`, `Gia`, `SoLuongHang`, `MoTa`, `HinhAnh`, `MaLoaiHang`) VALUES
('as_001', 'ASUS ROG PHONE 1', 15900000, 14590000, 16, 'Với những game thủ chuyên nghiệp mong muốn sở hữu một chiếc smartphone gaming có hiệu năng \"siêu cấp\" cho những tựa game MOBA hoặc sinh tồn đình đám hiện nay thì ROG Phone 1 sẽ là chiếc điện thoại có thể giúp bạn thoải mái chiến game mượt mà với cấu hình cực đại.', './assets/image/sanpham_asus_ROG.jpg', 'AS'),
('as_002', 'ASUS ROG Phone 3', 16590000, 15350000, 10, 'Với những game thủ chuyên nghiệp mong muốn sở hữu một chiếc smartphone gaming có hiệu năng \"siêu cấp\" cho những tựa game MOBA hoặc sinh tồn đình đám hiện nay thì ROG Phone 3 sẽ là chiếc điện thoại có thể giúp bạn thoải mái chiến game mượt mà với cấu hình cực đại.', './assets/image/sanpham_asus_ROG_Phone3.jpg', 'AS'),
('ip_001', 'iPhone 12 Promax 512 GB', 37900000, 35500000, 90, 'Apple là nhà sản xuất điện thoại thông minh hàng đầu hiện nay. Trong nhiều năm qua, công ty liên tục thống lĩnh thị trường với doanh số bán khổng lồ và doanh thu kỷ lục. Các sản phẩm mang thương hiệu Apple luôn được người dùng đón nhận và tin tưởng nhờ thiết kế dẫn đầu xu hướng và hiệu năng bền bỉ theo thời gian.', './assets/image/sanpham_iphone12_512GB.jpg', 'AP'),
('ip_002', 'IPhone 12 ProMax 256GB', 33900000, 31500000, 19, 'iPhone 12 Pro Max chính thức trở thành chiếc iPhone có màn hình lớn nhất tính tới thời điểm hiện tại. Bạn sẽ được trải nghiệm hình ảnh đã mắt trên màn hình 6,7 inch Super Retina XDR này. Viền màn hình và phần khoét tai thỏ đã được làm gọn hơn để tối ưu thêm không gian hiển thị. Tấm nền của iPhone 12 Pro Max hỗ trợ chuẩn HDR10 với độ sáng tối đa lên tới 1200 nit. Màn hình của máy được bảo vệ bởi kính cường lực Ceremic Shield cho độ bền gấp 4 lần thế hệ trước.', './assets/image/sanpham_iphone12_256GB.jpg', 'AP'),
('ip_003', 'IPhone 12 256GB', 31900000, 29500000, 9, 'Màn hình của iPhone 12 256GB được trang bị công nghệ tấm nền OLED Super Retina XDR, mang lại cho iPhone 12 một chất lượng hiển thị xuất sắc nhất từ trước đến nay. Đi cùng với đó là độ phân giải Full HD 2,532 x 1,170; cho mật độ điểm ảnh cực tốt lên tới 460ppi. Với màn hình được nâng cấp và cải tiến như vậy, những vị chủ nhân sở hữu iPhone 12 có thể thoải mái thưởng thức những bộ phim hoặc chơi game mà không cần phải lo nghĩ về bất cứ điều gì.', './assets/image/sanpham_iphone12_12_256.jpg', 'AP'),
('ip_004', 'IPhone 12 128GB', 27900000, 25500000, 15, 'Màn hình của iPhone 12 128GB được trang bị công nghệ tấm nền OLED Super Retina XDR, mang lại cho iPhone 12 một chất lượng hiển thị xuất sắc nhất từ trước đến nay. Đi cùng với đó là độ phân giải Full HD 2,532 x 1,170; cho mật độ điểm ảnh cực tốt lên tới 460ppi. Với màn hình được nâng cấp và cải tiến như vậy, những vị chủ nhân sở hữu iPhone 12 có thể thoải mái thưởng thức những bộ phim hoặc chơi game mà không cần phải lo nghĩ về bất cứ điều gì.', './assets/image/sanpham_iphone12_128GB.jpg', 'AP'),
('ip_005', 'IPhone 12 Mini 256GB', 26900000, 25900000, 14, 'Ở phía mặt trước, iPhone 12 Mini 256GB chính hãng VN/A vẫn sở hữu một thiết kế tràn viền tai thỏ như các thế hệ tiền nhiệm, với các phần viền benzel dường như đã được làm mỏng hơn. Nhưng đó không phải là tất cả những gì mà iPhone 12 Mini có. Toàn bộ các phần cạnh của iPhone 12 Mini nói riêng và thế hệ iPhone 12 năm nay nói chung đều đã được Apple làm mới lại, vắt phẳng vuông thành sắc cạnh, cực kì hiện đại, sang trọng và tinh tế. Mặt lưng của iPhone 12 Mini được bảo vệ bởi một lớp kính cường lực mà Apple gọi là Ceramic Shield giúp máy trở nên bền bỉ và cứng cáp hơn rất nhiều. iPhone 12 Mini sẽ có tất cả 5 phiên bản màu bao gồm Đen, Trắng, Xanh Lam, Xanh Lục và Đỏ.', './assets/image/sanpham_iphone12_12mini_256.jpg', 'AP'),
('op_001', 'OPPO Reno5 5G', 11900000, 10500000, 48, 'OPPO Reno5 chính hãng sở hữu mặt trước ấn tượng không kém. Điện thoại có màn hình AMOLED 6,43 inch với độ phân giải HD+ cho hình ảnh rực rỡ và vô cùng sống động. tần số 90Hz cũng mang lại trải nghiệm hình ảnh mượt mà hơi những mẫu điện thoại trên thị trường. OPPO Reno5 sử dụng cảm biến vân tay dưới màn hình tương tự như những thế hệ điện thoại trước đó. Màn hình OPPO Reno5 sử dụng thiết kế đục lỗ kép ở góc trên bên trái. OPPO Reno5 mang đến cảm giác hiện đại nhưng cũng không kém phần tinh tế.', './assets/image/sanpham_oppo_Reno5_5G.jpg', 'OP'),
('op_002', 'OPPO Reno 4Pro', 10900000, 9500000, 25, 'OPPO Reno4 Pro có một sự chuyển mình rất lớn so với Reno3 Pro, cả về hình dáng bên ngoài lẫn chất liệu tạo nên sản phẩm. Khung viền bằng nhựa trên Reno3 Pro giờ đây đã được được loại bỏ hoàn toàn và thay vào đó là môt khung viền nhôm nguyên khối cứng cáp trên Reno4 Pro. ', './assets/image/sanpham_oppo_Reno4Pro.jpg', 'OP'),
('op_003', 'OPPO Reno5 Marvel', 9900000, 9600000, 10, 'Lấy cảm hứng từ biệt đội siêu anh hùng Avengers từ vũ trụ Marvel, OPPO Reno5 phiên bản Marvel hội tụ những tính năng mạnh mẽ từ OPPO Reno5 và “siêu năng lực” của Avengers mang đến trải nghiệm tuyệt đỉnh.OPPO Reno5 phiên bản Marvel nổi bật với tông màu đen và đỏ đậm chất Avengers. Thiết kế màu đen ở mặt sau mang đến vẻ đẹp cho phiên bản đặc biệt này.', './assets/image/sanpham_oppo_Reno5_Marvel.jpg', 'OP'),
('ss_001', 'Samsung S21 Ultra 5G', 26500000, 24500000, 36, 'Samsung là một trong những nhà sản xuất dẫn đầu trên thị trường điện thoại thông minh nhiều năm qua. Sau thành công của dòng Galaxy S20 series, Samsung đã trở lại và tiếp tục khẳng định vị thế cho dòng flagship cao cấp của mình. Dòng Galaxy S21 series đánh dấu bước nhảy vọt với những công nghệ tiên tiến nhất hiện nay.', './assets/image/sanpham_samsungS21_5G.jpg', 'SS'),
('ss_002', 'SamSung S21 512GB', 25900000, 24500000, 32, 'Điện thoại Galaxy S21 Ultra 5G chính hãng dẫn đầu cho xu hướng thiết kế mới, khác biệt hoàn toàn so với những smartphone hiện nay. Cụm camera nguyên khối được gắn liền với cạnh và khung kim loại của máy, mang lại cảm giác nam tính hơn và vô cùng tinh xảo. Điện thoại còn được trang bị một lớp kính Corning® Gorilla® Glass Victus bền bỉ nhất hiện nay.\r\n\r\n', './assets/image/sanpham_samsungS21.jpg', 'SS'),
('ss_003', 'SamSung Z Fold 5G', 30500000, 25500000, 7, 'Samsung Galaxy Z Fold 2 vẫn giữ nguyên cơ chế màn hình gập ở thế hệ tiền nhiệm. Như một quyển sách, chiếc điện thoại mở ra để hiển thị màn hình lớn bên trong. Bên ngoài là một màn hình phụ tràn viền với thiết kế đục lỗ. ', './assets/image/sanpham_samsung_ZFold_5G.jpg', 'SS'),
('ss_004', 'SamSung Note 20 5G', 25490000, 23500000, 35, 'Galaxy Note 20 Ultra sở hữu một màn hình với kích thước lớn 6.9 inch, độ phân giải Quad HD . Tương tự như Galaxy S20 Series, Samsung cũng đã mang công nghệ màn hình Dynamic AMOLED 2X lên những sản phẩm của Galaxy Note 20 Ultra. Đây cũng là những chiếc smartphone tiếp theo của Samsung sở hữu tần số quét lên tới 120Hz cho trải nghiệm hiện thị mượt mà, giúp người dùng đắm chìm trong từng pha hành động và các thao tác vuốt chạm. Triết lý thiết kế màn hình Infinity-O cũng sẽ giúp màn hình được mở rộng ra tối đa để bạn có được những giây phút tuyệt vời với Galaxy Note 20 Ultra.', './assets/image/sanpham_samsung_Note20_5G.jpg', 'SS'),
('ss_005', 'SamSung Note 10', 17900000, 15500000, 5, 'Samsung Galaxy Note 10+ chính hãng sở hữu thiết kế đẳng cấp quen thuộc với các góc bo tròn đẹp mắt. Phần viền kim loại được uốn cong giúp tăng thêm sự thanh lịch và cầm nắm dễ dàng hơn. Cùng với đó là mặt kính bóng bẩy với màu sắc thu hút. Từng chi tiết trên chiếc smartphone đều được chế tác tỉ mỉ, toát lên sự đẳng cấp.', './assets/image/sanpham_samsung_Note10+.jpg', 'SS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTenKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenCongTy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `TenCongTy`, `SoDienThoai`, `Email`, `User`, `Password`) VALUES
('KH01714022427', 'Nguyen Ho Quoc Huy', 'CTU', '0937790999', 'huyb1809128@student.ctu.edu.vn', 'quochuy', 'quochuy123'),
('KH144128264', 'Nguyen Chi Hieu', 'UBND TP', '0947272999', 'chihieuct@gmail.com', 'hieuct', 'hieuct123'),
('KH463273917', 'Nguyen Thi Thao Anh', 'CTU', '0904393232', 'thaoanh@gmail.com', 'thaoanh', 'thaoanh123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLoaiHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHang`, `TenLoaiHang`) VALUES
('AP', 'Apple'),
('AS', 'Asus'),
('OP', 'Oppo'),
('SS', 'SamSung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTenNV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SoDienThoai`, `User`, `Password`) VALUES
('A01', 'Nguyen Thi Thao Anh', 'CEO', 'Can Tho', '0904393232', 'admin', 'admin'),
('A02', 'Nguyen Ho Quoc Huy', 'CTO', 'Can Tho', '0937790999', 'admin', 'quochuy123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`,`MSHH`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSNV` (`MSNV`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`MADC`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaLoaiHang` (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Chỉ mục cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  MODIFY `SoDonDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2094938437;

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `SoDonDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2094938437;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`),
  ADD CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`),
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
