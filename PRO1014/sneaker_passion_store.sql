-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2024 lúc 08:22 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sneaker_passion_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binhluan` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_donhang`
--

CREATE TABLE `chi_tiet_donhang` (
  `id_chi_tiet_dh` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `gia_tien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_sp`
--

CREATE TABLE `danh_muc_sp` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_sp`
--

INSERT INTO `danh_muc_sp` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Li ning'),
(2, 'Nike'),
(3, 'Adidas'),
(4, 'Jordan'),
(5, 'MLB'),
(6, 'Puma'),
(7, 'New Balance');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int(11) NOT NULL,
  `ngay_dat_hang` date DEFAULT NULL,
  `thong_tin_thanh_toan` varchar(255) DEFAULT NULL,
  `tong_tien` float NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `id_khachhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_khachhang` int(11) NOT NULL,
  `ten_dangnhap` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `dia_chi` text DEFAULT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `vai_tro` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_khachhang`, `ten_dangnhap`, `mat_khau`, `ho_ten`, `email`, `dia_chi`, `so_dien_thoai`, `vai_tro`) VALUES
(1, 'f', '5', 'Mạnh Cường', 'pbtpetien2004@gmail.com', 'd', '0234569421', '0'),
(2, 'cuongpm', '12345', 'Mạnh Cường', 'cuongpmph45042@fpt.edu.vn', 'Hà Nội', '0234569421', '0'),
(3, 'r', '123', 'Cường', 'pbtpetien2004@gmail.com', 'Hà Nội', '1111111111', '0'),
(4, 't', 't', 'Cường', 'aa@gmail.com', 'Hà Nội', '1111111111', '0'),
(5, '', '', '', '', '', '', '0'),
(6, '', '', '', '', '', '', '0'),
(7, '', '', '', '', '', '', '0'),
(8, '', '', '', '', '', '', '0'),
(9, 'y', 'y', 'Cường', 'aa@gmail.com', 'Hà Nội', '1111111111', '0'),
(10, 'd', 'd', 'd', 'aa@gmail.com', 'Hà Nội', '1111111111', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` text NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `hinh_anh` text DEFAULT NULL,
  `kich_co` int(10) DEFAULT NULL,
  `mau_sac` varchar(255) DEFAULT NULL,
  `gia` float NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sanpham`, `ten_sanpham`, `mo_ta`, `hinh_anh`, `kich_co`, `mau_sac`, `gia`, `id_danhmuc`) VALUES
(1, 'Giày 1', 'Đây là giày 1', 'giay_1.webp', 40, 'Đen', 30000, 1),
(6, 'Giày 2', 'Đây là giày 2', 'giay_2.webp', 41, 'Trắng', 40000, 1),
(7, 'Adidas Grand Count', 'Đây là giày 3', 'giay_9.avif', 41, 'Trắng', 1990000, 3),
(8, 'Nike Air Force 1', 'Đây là giày 4', 'giay_10.webp', 39, 'Trắng', 2000000, 2),
(9, 'Nike Jordan', 'Đây là giày 5', 'giay_11.jpeg', 40, 'Xám', 3690000, 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `id_khachhang` (`id_khachhang`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `chi_tiet_donhang`
--
ALTER TABLE `chi_tiet_donhang`
  ADD PRIMARY KEY (`id_chi_tiet_dh`),
  ADD KEY `id_sanpham` (`id_sanpham`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Chỉ mục cho bảng `danh_muc_sp`
--
ALTER TABLE `danh_muc_sp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_donhang`
--
ALTER TABLE `chi_tiet_donhang`
  MODIFY `id_chi_tiet_dh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc_sp`
--
ALTER TABLE `danh_muc_sp`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id_khachhang`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `san_pham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `chi_tiet_donhang`
--
ALTER TABLE `chi_tiet_donhang`
  ADD CONSTRAINT `chi_tiet_donhang_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `san_pham` (`id_sanpham`),
  ADD CONSTRAINT `chi_tiet_donhang_ibfk_2` FOREIGN KEY (`id_donhang`) REFERENCES `don_hang` (`id_donhang`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khach_hang` (`id_khachhang`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danh_muc_sp` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
