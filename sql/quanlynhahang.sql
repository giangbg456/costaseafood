-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 04:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`maBooking` int(11) NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `SoDienThoai` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `Note` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`maBooking`, `HoTen`, `SoDienThoai`, `Date`, `Time`, `SoLuong`, `Note`) VALUES
(1, 'hoàng minh giang', '0393036245', '2021-01-17', '14:30', 10, 'cho tôi bàn ngoài trời'),
(2, 'nguyễn văn A', '01656668547', '2021-01-31', '16:30', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `mvc_user`
--

CREATE TABLE IF NOT EXISTS `mvc_user` (
`maTK` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `mvc_user`
--

INSERT INTO `mvc_user` (`maTK`, `username`, `password`, `Email`) VALUES
(1, 'giangbg456', '123456', 'hoangminhgiang2000@gmai.com'),
(2, 'admin', 'admin', ''),
(8, 'giangbg', '123', 'hoangminh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi`
--

CREATE TABLE IF NOT EXISTS `phanhoi` (
`maPH` int(11) NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `SoDienThoai` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `phanhoi`
--

INSERT INTO `phanhoi` (`maPH`, `HoTen`, `Email`, `SoDienThoai`, `TieuDe`, `NoiDung`) VALUES
(1, 'hoàng minh giang', 'hoangminhgiang2000@gmail.com', '0393036245', 'phản hồi', 'Nhà Hàng Tốt');

-- --------------------------------------------------------

--
-- Table structure for table `thucdon`
--

CREATE TABLE IF NOT EXISTS `thucdon` (
`id` int(11) NOT NULL,
  `TenMon` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `Gia` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `LoaiMon` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `thucdon`
--

INSERT INTO `thucdon` (`id`, `TenMon`, `HinhAnh`, `Gia`, `LoaiMon`) VALUES
(2, 'Chả Giò Tôm Cua', 'chagiotomcua.jpg', '120000', 'Cua - Ghẹ'),
(3, 'Gỏi sứa biển', 'goisuabien.jpg', '150000', 'Gỏi'),
(4, 'Cháo Hàu', 'chaohau.jpg', '50000', 'Cháo'),
(5, 'Gỏi Thịt Cua', 'goithitcua.jpg', '150000', 'Cua'),
(6, 'Cháo Ngao', 'chaongao.jpg', '30000', 'Cháo'),
(8, 'Kem Vani', 'tm_kem.jpg', '60000', 'Cháo');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
`id` int(11) NOT NULL,
  `TenTT` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `TenTT`, `HinhAnh`, `NoiDung`) VALUES
(1, 'GIẢM GIÁ 20% BỮA TRƯA VÀ BỮA TỐI', 'khuyenmai.jpg', 'ƯU ĐÃI ĐẶC BIỆT: GIẢM GIÁ 20% BỮA TRƯA VÀ TỐI CHO TẤT CẢ CÁC MÓN TRONG MENU (KHÔNG BAO GỒM TÔM HÙM)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`maBooking`);

--
-- Indexes for table `mvc_user`
--
ALTER TABLE `mvc_user`
 ADD PRIMARY KEY (`maTK`);

--
-- Indexes for table `phanhoi`
--
ALTER TABLE `phanhoi`
 ADD PRIMARY KEY (`maPH`);

--
-- Indexes for table `thucdon`
--
ALTER TABLE `thucdon`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `maBooking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mvc_user`
--
ALTER TABLE `mvc_user`
MODIFY `maTK` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `phanhoi`
--
ALTER TABLE `phanhoi`
MODIFY `maPH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thucdon`
--
ALTER TABLE `thucdon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
