-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2021 lúc 06:44 PM
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
-- Cơ sở dữ liệu: `duybui`
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `MADC` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSKH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `MaLoaiHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia_Cu`, `Gia`, `SoLuongHang`, `MoTa`, `MaLoaiHang`) VALUES
('ad_1', 'Adidas Copa 1', 4650000, 4500000, 20, 'abc', 'AD'),
('ad_2', 'Adidas Predator 2', 2300000, 2150000, 22, 'abc', 'AD'),
('ad_3', 'Adidas Predator', 4500000, 4500000, 22, 'abc', 'AD'),
('ad_4', 'Addias nemeziz', 4500000, 4500000, 30, 'abc', 'AD'),
('ad_5', 'Adidas Nemeziz', 4500000, 4500000, 23, 'abc', 'AD'),
('mz_1', 'Mizuno 1 abc', 4500000, 4500000, 22, 'abc', 'MZ'),
('mz_2', 'Mizuno 2', 4500000, 4500000, 2, 'abc', 'MZ'),
('mz_3', 'Mizuno 3', 4500000, 4500000, 21, 'abc', 'MZ'),
('mz_4', 'Mizuno 4', 4500000, 4500000, 12, 'abc', 'MZ'),
('mz_5', 'Mizuno 5', 4500000, 4500000, 5, 'abc', 'MZ'),
('nk_1', 'Nike Mercurial', 4500000, 4500000, 34, 'abc', 'NK'),
('nk_2', 'Nike Mercurial', 4500000, 4500000, 23, 'abc', 'NK'),
('nk_3', 'Nike Mercurial', 4500000, 4500000, 22, 'abc', 'NK'),
('nk_4', 'Nike Phantom', 4500000, 4500000, 12, 'abc', 'NK'),
('nk_5', 'Nike Phantom', 4500000, 4500000, 22, 'abc', 'NK'),
('pm_1', 'Puma 1', 4500000, 4500000, 62, 'abc', 'PM'),
('pm_2', 'Puma 2', 4500000, 4500000, 24, 'abc', 'PM'),
('pm_3', 'Puma 3', 4500000, 4500000, 24, 'abc', 'PM'),
('pm_4', 'Puma 4', 4500000, 4500000, 23, 'abc', 'PM'),
('pm_5', 'Puma 5', 4500000, 4500000, 21, 'abc', 'PM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhhanghoa`
--

CREATE TABLE `hinhhanghoa` (
  `MaHinh` int(11) NOT NULL,
  `MSHH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhhanghoa`
--

INSERT INTO `hinhhanghoa` (`MaHinh`, `MSHH`, `TenHinh`) VALUES
(1, 'ad_1', './assets/hinhanh/DasCopa4k5.jpg'),
(2, 'ad_2', './assets/hinhanh/DasPredator.jpg'),
(3, 'ad_3', './assets/hinhanh/DasPredator2k150.jpg'),
(4, 'ad_4', './assets/hinhanh/DasSpeedLow2k850.jpg'),
(5, 'ad_5', './assets/hinhanh/DasSpeedLow4k5.jpg'),
(6, 'mz_1', './assets/hinhanh/MizunoBlue1k5.jpg'),
(7, 'mz_2', './assets/hinhanh/MizunoGold2k4.jpg'),
(8, 'mz_3', './assets/hinhanh/MizunoMorella4k3.jpg'),
(9, 'mz_4', './assets/hinhanh/MizunoSilver2k.jpg'),
(10, 'mz_5', './assets/hinhanh/MizunoRed1k3.jpg'),
(11, 'nk_1', './assets/hinhanh/NikeBlack1k4.jpg'),
(12, 'nk_2', './assets/hinhanh/NikeMer2k2.jpg'),
(13, 'nk_3', './assets/hinhanh/NikeMer2k7.jpg'),
(14, 'nk_4', './assets/hinhanh/NikeTiempo1k8.jpg'),
(15, 'nk_5', './assets/hinhanh/NikeSuperFly2k.jpg'),
(16, 'pm_1', './assets/hinhanh/PumaFuture1k7.jpg'),
(17, 'pm_2', './assets/hinhanh/PumaFuture3k6.jpg'),
(18, 'pm_3', './assets/hinhanh/PumaUltra1k8.jpg'),
(19, 'pm_4', './assets/hinhanh/PumaUltra2k6.jpg'),
(20, 'pm_5', './assets/hinhanh/PumaUltra3k9.jpg');

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
('AD', 'Adidas'),
('MZ', 'Mizuno'),
('NK', 'Nike'),
('PM', 'Puma');

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
('A01', 'Hoang Phuc', 'CEO', 'Can Tho', '000000', 'admin', 'admin');

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
-- Chỉ mục cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD PRIMARY KEY (`MaHinh`),
  ADD KEY `chitiethanghoa_ibfk_1` (`MSHH`);

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
-- AUTO_INCREMENT cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  MODIFY `MaHinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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

--
-- Các ràng buộc cho bảng `hinhhanghoa`
--
ALTER TABLE `hinhhanghoa`
  ADD CONSTRAINT `hinhhanghoa_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
