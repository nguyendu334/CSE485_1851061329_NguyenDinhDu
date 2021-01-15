-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2021 lúc 02:46 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachi`
--

CREATE TABLE `diachi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachi`
--

INSERT INTO `diachi` (`id`, `name`) VALUES
(1, 'bac ninh'),
(2, 'thanh hoa'),
(3, 'ha noi'),
(4, 'hoa binh'),
(5, 'lang son'),
(6, 'ha giang'),
(7, 'bac kan'),
(8, 'quang binh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhvien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vitri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaitro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congnghe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`id`, `name`, `mota`, `khachhang`, `thanhvien`, `vitri`, `vaitro`, `congnghe`) VALUES
(1, 'Shop bán điện thoại', 'Giúp người dùng có thể lựa chọn được những sản phẩm tốt nhất cho bản thân', 'Nguyen Minh Tien', '4', 'Lập trình viên', 'Leader', 'Android Studio 1.4 Java , Android 4.0 - Google clould Message');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocvan`
--

CREATE TABLE `hocvan` (
  `id` int(10) NOT NULL,
  `giaidoan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chucvu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocvan`
--

INSERT INTO `hocvan` (`id`, `giaidoan`, `text`, `chucvu`, `congviec`) VALUES
(7, '2006-2011', 'Trường Tiểu Học Nội Duệ', 'Học sinh', 'Học sinh'),
(8, '2011-2015', 'Trường Trung Học Cơ Sở Nội Duệ', 'Học sinh', 'Học sinh'),
(9, '2015-2018', 'Trường Trung Học Phổ Thông Nguyễn Đăng Đạo', 'Học sinh', 'Học sinh'),
(10, '2018-Nay', 'Trường Đại Học Thủy Lợi', 'Sinh viên ', 'Sinh viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinang`
--

CREATE TABLE `kinang` (
  `id` int(11) NOT NULL,
  `ngonngu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kinang`
--

INSERT INTO `kinang` (`id`, `ngonngu`, `congviec`) VALUES
(6, '', 'Thiết kế đáp ứng ưu tiên cho thiết bị di động'),
(7, '', 'Nghiên Cứu Hóa Học'),
(8, '', 'Kiểm tra trình duyệt, gỡ lỗi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinhnghiem`
--

CREATE TABLE `kinhnghiem` (
  `id` int(10) NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinhng` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kinhnghiem`
--

INSERT INTO `kinhnghiem` (`id`, `date`, `kinhng`, `chucvu`, `congviec`, `diem`) VALUES
(1, '2015 - 2018', 'Học tại Trường Trung Học Phổ Thông Nguyễn Đăng Đạo', 'Học sinh', '   ', ''),
(2, '2018 - nay', 'Sinh viên khoa CNTT Trường Đại Học Thủy Lợi', ' Sinh viên', '   ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `congviec` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `name`, `birthday`, `gender`, `congviec`, `phone`, `email`, `address`, `Facebook`, `img`) VALUES
(1, 'NGUYEN DINH DU', '2000-11-24', 'Nam', 'Software Engineer', '0989831609', 'nguyendu334@gmail.com', 'Tien Du - Bac Ninh', 'facebook.com/haha193', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sothic`
--

CREATE TABLE `sothic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sothic`
--

INSERT INTO `sothic` (`id`, `name`) VALUES
(9, 'đi chơi'),
(12, 'tiltok');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `pass`) VALUES
(1, 'a@gmail.com', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hocvan`
--
ALTER TABLE `hocvan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kinang`
--
ALTER TABLE `kinang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sothic`
--
ALTER TABLE `sothic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hocvan`
--
ALTER TABLE `hocvan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `kinang`
--
ALTER TABLE `kinang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sothic`
--
ALTER TABLE `sothic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
