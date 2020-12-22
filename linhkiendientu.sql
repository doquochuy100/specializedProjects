-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2020 at 02:13 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linhkiendientu`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `stt` int(11) NOT NULL AUTO_INCREMENT,
  `madh` varchar(20) NOT NULL,
  `masp` varchar(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` double NOT NULL,
  `created_time` varchar(30) NOT NULL,
  `last_update` varchar(30) NOT NULL,
  PRIMARY KEY (`stt`),
  KEY `masp` (`masp`),
  KEY `madh` (`madh`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`stt`, `madh`, `masp`, `soluong`, `gia`, `created_time`, `last_update`) VALUES
(8, '6tkIdx', 'acpdt', 2, 50000000, '18-12-2020', '18-12-2020');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` varchar(20) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `ghichu` text NOT NULL,
  `tongtien` double NOT NULL,
  `create_time` varchar(30) NOT NULL,
  `last_update` varchar(30) NOT NULL,
  PRIMARY KEY (`madh`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madh`, `tenkh`, `email`, `diachi`, `ghichu`, `tongtien`, `create_time`, `last_update`) VALUES
('6tkIdx', 'doquochuy', 'doquochuy10000@gmail.com', '136 Háº­u Giang P6, Q6', '', 100000000, '18-12-2020', '18-12-2020');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id_user` (`taikhoan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`taikhoan`, `matkhau`, `email`, `tenkh`, `diachi`, `dienthoai`) VALUES
('doquochuy1', '123', 'doquochuy10000@gmail.com', 'doquochuy', '136 Háº­u Giang P6, Q6', '01225594978');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `maloai` varchar(20) NOT NULL,
  `tenloai` varchar(200) NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`) VALUES
('cpu', 'CPU'),
('kb', 'Keyboard'),
('lt', 'Laptop'),
('MP', 'Mouse + MousePad');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

DROP TABLE IF EXISTS `nhasanxuat`;
CREATE TABLE IF NOT EXISTS `nhasanxuat` (
  `mansx` varchar(20) NOT NULL,
  `tennsx` varchar(100) NOT NULL,
  PRIMARY KEY (`tennsx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`) VALUES
('ac', 'Acer'),
('amd', 'AMD'),
('as', 'Asus'),
('de', 'Dell'),
('hp', 'HP'),
('lgt', 'Logitech'),
('msi', 'MSI');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` varchar(20) NOT NULL,
  `tensp` varchar(200) NOT NULL,
  `mota` text NOT NULL,
  `baohanh` varchar(20) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh` varchar(200) NOT NULL,
  `maloai` varchar(20) NOT NULL,
  `tennsx` varchar(100) NOT NULL,
  PRIMARY KEY (`masp`),
  KEY `maloai` (`maloai`),
  KEY `tennsx` (`tennsx`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `mota`, `baohanh`, `gia`, `hinh`, `maloai`, `tennsx`) VALUES
('acn5', 'Laptop Acer Nitro 5', '   asdasdas   ', '12T', 2000, 'Laptop gaming Acer Nitro 5 AN515 55 77P9.jpg', 'lt', 'Acer'),
('acpdt', 'Laptop Acer Predator Helios 300', ' asdasd ', '24t', 50000000, 'Laptop gaming Acer Predator Helios 300 PH315 53 70U6.jpg', 'lt', 'Acer'),
('asrogd15', 'Laptop gaming ASUS ROG Zephyrus Duo 15 ', 'asda', '12T', 25000000, 'Laptop gaming ASUS ROG Zephyrus Duo 15 GX550LXS HC055R.jpg', 'lt', 'Asus'),
('msige', 'Laptop Gaming MSI GE66 Raider', 'asdas', '24t', 30000000, 'Laptop Gaming MSI GE66 Raider 10SFS 474VN.jpg', 'lt', 'MSI'),
('ryzen5_5600x', 'CPU AMD Ryzen 5 5600X 6 Cores 12 Threads 3.7 GHz (4.6 GHz Turbo)', 'cpu amd', '12T', 50000, 'CPU AMD Ryzen 5 5600X 6 Cores 12 Threads 3.7 GHz (4.6 GHz Turbo).jpg', 'cpu', 'AMD');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`email`) REFERENCES `khachhang` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loaisanpham` (`maloai`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`tennsx`) REFERENCES `nhasanxuat` (`tennsx`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
