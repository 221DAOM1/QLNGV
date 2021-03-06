-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2022 lúc 04:05 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.0
create database gtngv;
use gtngv;
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
  `khuVuc` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `trinhDoHV` varchar(255) NOT NULL,
  `gioiTinhYC` varchar(10) NOT NULL,
  `chucVu` varchar(255) NOT NULL,
  `luong` int(11) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `moTa` varchar(255) NOT NULL,
  `tinhTrang` int(11) NOT NULL,
  `tinhTrangDaUT` int(11) NOT NULL,
  `thoiGianDang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`maCV`, `maTK`, `maDMCV`, `tenCV`, `khuVuc`, `soLuong`, `trinhDoHV`, `gioiTinhYC`, `chucVu`, `luong`, `diaChi`, `time`, `moTa`, `tinhTrang`, `tinhTrangDaUT`, `thoiGianDang`) VALUES
(486, 5, 1, 'Tuyển giúp việc ăn ở lại lương từ 5 đến 12tr/tháng, tại Hải Châu', 1, 1, '12/12', 'Nữ', 'Nhân viên dọn dẹp nhà', 10000000, '02 Thanh Sơn, P. Thanh Bình, Q.Hải Châu, Đà Nẵng', 'Ngày 8 tiếng', 'Yêu cầu nhân viên đã có kinh nghiệm dọn dẹp nhà', 1, 1, '2022-05-24 20:35:35'),
(487, 32, 3, 'Cần tuyển giúp việc 10 ngày hè lương từ 250k đến 350k/ngày', 2, 1, '12/12', 'Nữ', 'Nhân viên chăm sóc người già', 15000000, '28 thanh sơn, P. Thanh Bình, Hải Châu, Đà Nẵng', 'Ngày 10 tiếng', 'Yêu cầu nhân viên có kinh nghiệm chăm sóc người già', 1, 1, '2022-05-25 07:31:26'),
(490, 5, 5, 'Tuyển giúp việc làm tết ăn ở lại 10 ngày chăm sóc cụ bà lương 800k/ ngày', 7, 1, 'Bỏ qua', 'Mọi giới t', 'Nhân viên chăm sóc', 5000000, '02 Thanh Sơn, P. Thanh Bình, Q.Hải Châu, Đà Nẵng', 'Ngày 8 tiếng', 'Có kinh nghiệm chăm sóc ', 1, 1, '2022-06-04 11:29:46'),
(491, 4, 4, 'Nhân viên chạy bàn', 3, 3, 'Không cần', 'Mọi giới t', 'Phục vụ', 7000000, '05 Thái Thị Bôi, Chính Gián, Thanh Khê, Đà Nẵng', 'Tối từ 7h tới 9h', 'Không cần có trình độ kinh nghiệm.', 1, 1, '2022-06-04 17:12:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiagv`
--

CREATE TABLE `danhgiagv` (
  `maDG` int(11) NOT NULL,
  `maCV` int(11) NOT NULL,
  `maTK` int(11) NOT NULL,
  `soSao` int(11) NOT NULL,
  `binhLuan` varchar(255) NOT NULL,
  `ngayDanhGia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhgiagv`
--

INSERT INTO `danhgiagv` (`maDG`, `maCV`, `maTK`, `soSao`, `binhLuan`, `ngayDanhGia`) VALUES
(8, 486, 14, 5, 'GOOD JOB', '2022-05-30 09:10:32'),
(11, 490, 16, 5, 'GOOD', '2022-06-04 16:56:26'),
(12, 491, 17, 3, 'NOT GOOD', '2022-06-04 17:19:34');

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
(3, 'Chăm sóc người già', ''),
(4, 'Giúp việc theo giờ hành chính', ''),
(5, 'Giúp việc tết nguyên đám', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachungvien`
--

CREATE TABLE `danhsachungvien` (
  `maDS` int(11) NOT NULL,
  `maCV` int(11) NOT NULL,
  `thoiGianUT` varchar(255) NOT NULL,
  `maTK` int(11) NOT NULL,
  `tinhTrangUngTuyen` int(11) NOT NULL,
  `khXacNhan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhsachungvien`
--

INSERT INTO `danhsachungvien` (`maDS`, `maCV`, `thoiGianUT`, `maTK`, `tinhTrangUngTuyen`, `khXacNhan`) VALUES
(1, 486, '2022-05-31 17:54:08', 14, 1, 1),
(2, 487, '2022-05-31 17:54:08', 15, 1, 1),
(6, 487, '2022-06-02 21:54:49', 14, 0, 0),
(7, 490, '2022-06-04 16:45:27', 16, 1, 0),
(8, 491, '2022-06-04 17:15:38', 17, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhcv`
--

CREATE TABLE `hinhanhcv` (
  `maHA` int(11) NOT NULL,
  `maCV` int(11) NOT NULL,
  `tenHinh` varchar(255) NOT NULL,
  `hinhAnhCV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhanhcv`
--

INSERT INTO `hinhanhcv` (`maHA`, `maCV`, `tenHinh`, `hinhAnhCV`) VALUES
(1378, 486, 'anh1.jpg', 'hinhanh1'),
(1379, 486, 'anh2.jpg', 'hinhanh2'),
(1380, 486, 'anh3.jpg', 'hinhanh3'),
(1381, 487, 'anh2.jpg', 'hinhanh1'),
(1382, 487, 'anh1.jpg', 'hinhanh2'),
(1383, 487, 'anh3.jpg', 'hinhanh3'),
(1390, 490, 't1.jpg', 'hinhanh1'),
(1391, 490, 't2.jpg', 'hinhanh2'),
(1392, 490, 't3.jpg', 'hinhanh3'),
(1393, 49, 'pv1.jpg', 'hinhanh1'),
(1394, 491, 'pv2.jpg', 'hinhanh2'),
(1395, 491, 'pv3.jpg', 'hinhanh3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `maQuyen` int(11) NOT NULL,
  `tenQuyen` varchar(255) NOT NULL,
  `chiTietQuyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`maQuyen`, `tenQuyen`, `chiTietQuyen`) VALUES
(1, 'Admin', ''),
(2, 'Khách hàng', ''),
(3, 'Giúp viêc', ''),
(4, 'Nhân viên\r\n', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `idQuan` int(11) NOT NULL,
  `tenQuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quanhuyen`
--

INSERT INTO `quanhuyen` (`idQuan`, `tenQuan`) VALUES
(1, 'Hải Châu'),
(2, 'Cẩm Lệ'),
(3, 'Thanh Khê'),
(4, 'Liên Chiểu'),
(5, 'Ngũ Hành Sơn'),
(6, 'Sơn Trà'),
(7, 'Hòa Vang'),
(8, 'Hoàng Sa');

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
  `CMND` varchar(20) NOT NULL,
  `SDT` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `hinhAnh` varchar(255) NOT NULL,
  `trangThai` int(11) NOT NULL,
  `thoiGian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`maTK`, `maQuyen`, `taiKhoan`, `matKhau`, `hoTen`, `gioiTinh`, `ngaySinh`, `CMND`, `SDT`, `email`, `diaChi`, `hinhAnh`, `trangThai`, `thoiGian`) VALUES
(4, 4, 'nqhuy', 'b1200f883875ad6b70fc055cf27b2a65', 'Nguyễn Quang Huy', 'Nam', '', '23328997', 961640909, 'nqhuy@gmail.com', 'Đà Nẵng', '', 1, ''),
(5, 2, 'huyhuy', 'cc0d45bc2f499fc4666d09691485a0f9', 'Nguyễn Quang Huy', '', '', '23328997', 961640909, '0', '', '', 1, ''),
(8, 3, 'ngv123', '5f6abcbffed27f4fb564589b4bbe08b0', 'Nguyễn Thị Thanh Trà', 'Nữ', '19/05/1968', '23328997', 961640909, '0', 'Đà Nẵng', 'ntg.jpg', 1, ''),
(13, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Nam', '233289997', '233289997', 961640909, '0', 'Đà Nẵng', 'admin.jpg', 1, ''),
(14, 3, 'ngv01', '89a9f0cea6d85f20598c4ccd9761a15c', 'Lê Thị Hồng Thắm ', 'Nữ', '14/05/1987', '233547887', 964789851, '0', 'Đà Nẵng', 'ltht.jpg', 1, ''),
(15, 3, 'ngv02', 'd45d7bf6d6dde38d984291e44d9ea5d8', 'Đinh Thị Lự', 'Nữ', '14/05/1967', '235478741', 964741251, '0', 'Đà Nẵng', 'dtl.jpg', 1, ''),
(16, 3, 'ngv03', '7c96dc6bc52ebdc9c3bd612083ccae2e', 'Bùi Thị Soan', 'Nam', '12/03/1978', '257874114', 961452585, '0', 'Đà Nẵng', 'bts.jpg', 1, ''),
(17, 3, 'ngv04', '87b04d99292adf1e1aaef1bbab6166ca', 'Vũ Thị Bàn', 'Nữ', '17/07/1981', '254745874', 965417758, '0', 'Đà Nẵng', 'vtb.jpg', 1, ''),
(18, 3, 'ngv05', '33fabe6ea5d96d12c85d7454e18ea17e', 'Phạm Thị Xuân', 'Nữ', '11/01/1969', '255857778', 961640909, '0', 'Đà Nẵng', 'ptx.jpg', 1, ''),
(19, 3, 'ngv06', 'b642f56a263892853e1edcd12ef293ff', 'Nguyễn Thị Minh Khai', 'Nữ', '03/05/1987', '258747774', 961452541, '0', 'Đà Nẵng', 'ntmk.jpg', 1, '2022-05-26 11:45:36'),
(32, 2, 'vxphuc', '6da29681a424954c59062627a657666d', 'Võ Xuân Phúc', '', '', '244787412', 96571425, 'vxp@gmail.com', '', '', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinungvien`
--

CREATE TABLE `thongtinungvien` (
  `maTK` int(11) NOT NULL,
  `thoiGian` varchar(255) NOT NULL,
  `trinhDoHV` varchar(255) NOT NULL,
  `khuVucLamViec` varchar(255) NOT NULL,
  `soThich` varchar(255) NOT NULL,
  `ghiChu` varchar(255) NOT NULL,
  `tinhTrangHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongtinungvien`
--

INSERT INTO `thongtinungvien` (`maTK`, `thoiGian`, `trinhDoHV`, `khuVucLamViec`, `soThich`, `ghiChu`, `tinhTrangHD`) VALUES
(8, 'Mọi lúc', '12/12', '2', 'Thích chăm sóc trẻ em', 'Không', 1),
(14, 'Sáng', '12/12', '1', 'Thích chăm sóc trẻ em', 'Không', 1),
(15, 'Chiều', '12/12', '1', 'Thích chăm sóc trẻ em', 'Không', 1),
(16, 'Tối', '12/12', '2', 'Thích chăm sóc trẻ em', 'Không', 1),
(17, 'Tối', '12/12', '3', 'Thích chăm sóc trẻ em', 'Không', 1),
(18, 'Mọi lúc', '12/12', '4', 'Thích chăm sóc trẻ em', 'Không', 1),
(19, 'Sáng', '12/12', '3', 'Thích chăm sóc trẻ em', 'Không', 1);

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
-- Chỉ mục cho bảng `danhgiagv`
--
ALTER TABLE `danhgiagv`
  ADD PRIMARY KEY (`maDG`);

--
-- Chỉ mục cho bảng `danhmuccv`
--
ALTER TABLE `danhmuccv`
  ADD PRIMARY KEY (`maDMCV`);

--
-- Chỉ mục cho bảng `danhsachungvien`
--
ALTER TABLE `danhsachungvien`
  ADD PRIMARY KEY (`maDS`);

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
-- Chỉ mục cho bảng `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`idQuan`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTK`);

--
-- Chỉ mục cho bảng `thongtinungvien`
--
ALTER TABLE `thongtinungvien`
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
  MODIFY `maCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT cho bảng `danhgiagv`
--
ALTER TABLE `danhgiagv`
  MODIFY `maDG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `danhmuccv`
--
ALTER TABLE `danhmuccv`
  MODIFY `maDMCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhsachungvien`
--
ALTER TABLE `danhsachungvien`
  MODIFY `maDS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hinhanhcv`
--
ALTER TABLE `hinhanhcv`
  MODIFY `maHA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1396;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `maQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quanhuyen`
--
ALTER TABLE `quanhuyen`
  MODIFY `idQuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `thongtinungvien`
--
ALTER TABLE `thongtinungvien`
  MODIFY `maTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

create table userToken (
	id int primary key auto_increment,
    token varchar(255)  not null,
	maTK int not null,
    foreign key(maTK) references taikhoan(maTK)
);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
