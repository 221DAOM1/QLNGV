-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2022 lúc 05:54 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gtngv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinhAnh`) VALUES
(1, 'images/chamsocgiadinh.jpg\r\n'),
(2, 'images/chamsoctreem.jpg'),
(3, 'images/donnha.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `maCV` int(11) NOT NULL,
  `maTK` int(11) NOT NULL,
  `maDMCV` int(11) NOT NULL,
  `tenCV` varchar(255) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `trinhDoHV` varchar(255) NOT NULL,
  `gioiTinhYC` varchar(10) NOT NULL,
  `chucVu` varchar(255) NOT NULL,
  `luong` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `moTa` varchar(255) NOT NULL,
  `maHA` int(11) NOT NULL,
  `tinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`maCV`, `maTK`, `maDMCV`, `tenCV`, `soLuong`, `trinhDoHV`, `gioiTinhYC`, `chucVu`, `luong`, `diaChi`, `time`, `moTa`, `maHA`, `tinhTrang`) VALUES
(30, 0, 1, 'b', 0, '12/12', 'Mọi giới t', 'b', 'b', 'b', 'b', 'b', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuccv`
--

CREATE TABLE `danhmuccv` (
  `maDMCV` int(11) NOT NULL,
  `tenDM` varchar(255) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuccv`
--

INSERT INTO `danhmuccv` (`maDMCV`, `tenDM`, `hinhAnh`) VALUES
(1, 'Chăm sóc trẻ em', ''),
(2, 'Dọn dẹp nhà', ''),
(3, 'Chăm sóc người già', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhcv`
--

CREATE TABLE `hinhanhcv` (
  `maHA` int(11) NOT NULL,
  `maCV` int(11) NOT NULL,
  `tenHinh` varchar(255) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `maQuyen` int(11) NOT NULL,
  `tenQuyen` varchar(255) NOT NULL,
  `chiTietQuyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTK` int(10) NOT NULL,
  `maQuyen` int(11) NOT NULL,
  `taiKhoan` varchar(50) NOT NULL,
  `matKhau` varchar(50) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `gioiTinh` varchar(10) NOT NULL,
  `ngaySinh` varchar(50) NOT NULL,
  `CMND` int(11) NOT NULL,
  `SDT` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `trangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `maQuyen`, `taiKhoan`, `matKhau`, `hoTen`, `gioiTinh`, `ngaySinh`, `CMND`, `SDT`, `email`, `diaChi`, `hinhAnh`, `trangThai`) VALUES
(4, 2, 'nqhuy', 'b1200f883875ad6b70fc055cf27b2a65', 'Nguyễn Quang Huy', '', '', 23328997, 961640909, 'nqhuy@gmail.com', '', '', 1),
(5, 2, 'huyhuy', 'cc0d45bc2f499fc4666d09691485a0f9', 'Nguyễn Quang Huy', '', '', 23328997, 961640909, 'admin1@gm', '', '', 1),
(8, 3, 'ngv123', '5f6abcbffed27f4fb564589b4bbe08b0', 'Nguyễn Quang Huy', '', '', 23328997, 961640909, 'ngv@gmail.com', '', '', 1),
(12, 3, '123', '202cb962ac59075b964b07152d234b70', '123', '', '', 132, 213, '123@123', '', '', 1),
(13, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', 231245887, 961640909, 'admin@gmail.com', '', '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`maCV`);

--
-- Chỉ mục cho bảng `danhmuccv`
--
ALTER TABLE `danhmuccv`
  ADD PRIMARY KEY (`maDMCV`);

--
-- Chỉ mục cho bảng `hinhanhcv`
--
ALTER TABLE `hinhanhcv`
  ADD PRIMARY KEY (`maHA`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`maQuyen`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `maCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `danhmuccv`
--
ALTER TABLE `danhmuccv`
  MODIFY `maDMCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hinhanhcv`
--
ALTER TABLE `hinhanhcv`
  MODIFY `maHA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `maQuyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
