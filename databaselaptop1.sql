-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2015 at 08:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databaselaptop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `masp` int(20) NOT NULL,
  `mahd` int(20) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` float NOT NULL,
  PRIMARY KEY (`masp`,`mahd`),
  KEY `mahd` (`mahd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE IF NOT EXISTS `hang` (
  `mahang` int(20) NOT NULL AUTO_INCREMENT,
  `tenhang` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`mahang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`mahang`, `tenhang`) VALUES
(1, 'MAC'),
(2, 'ASUS'),
(3, 'TOSHIBA'),
(4, 'DELL'),
(6, 'LENOVO');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `mahd` int(20) NOT NULL AUTO_INCREMENT,
  `idkh` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `tennn` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `diachinn` text CHARACTER SET utf8 NOT NULL,
  `sdt` varchar(12) CHARACTER SET utf8 NOT NULL,
  `ngaydat` datetime NOT NULL,
  `ngaygiao` datetime NOT NULL,
  `tinhtrang` int(1) NOT NULL DEFAULT '0',
  `tonggia` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`mahd`),
  KEY `idkh` (`idkh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE IF NOT EXISTS `lienhe` (
  `malh` int(20) NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sdt` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `diachi` text CHARACTER SET utf8,
  `noidung` text CHARACTER SET utf8 NOT NULL,
  `ngaylh` datetime NOT NULL,
  `stt` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`malh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` int(20) NOT NULL AUTO_INCREMENT,
  `mahang` int(20) NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `hinh` text CHARACTER SET utf8 NOT NULL,
  `ram` varchar(20) CHARACTER SET utf8 NOT NULL,
  `vga` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ttsp` text CHARACTER SET utf8 NOT NULL,
  `gia` float NOT NULL,
  `mausac` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`masp`),
  KEY `mahang` (`mahang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `mahang`, `tensp`, `hinh`, `ram`, `vga`, `ttsp`, `gia`, `mausac`) VALUES
(6, 4, 'laptop', '1328_dell_inspiron_5548_jj9g01_5_1.jpg', '8gb', '4gb', '<h3 style="color:red;">\r\n	<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><strong>Sản Phẩm Lạ Đẹp mắt</strong></span></span></h3>\r\n', 3000000, 'Black'),
(7, 4, 'dell 9x', '0_dell_5558_colors_b_1_6_1.jpg', '8gb', '4gb', '', 500000, 'black'),
(8, 6, 'lenovo 11626', '11626_laptop-lenovo-g4030-80fy009cvn-denn.jpg', '8gb', '4gb', '<h3 style="color:red;">\r\n	sản phẩm chất lượng</h3>\r\n', 50000000, ''),
(10, 6, 'sdasdasd', 'ACERASPIREV5.jpg', '8gb', '4gb', '<p>\r\n	dasdafqsadsd</p>\r\n', 100000000000, 'red');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sdt` varchar(12) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `diachi` text CHARACTER SET utf8 NOT NULL,
  `cmnd` varchar(9) CHARACTER SET utf8 NOT NULL,
  `phanquyen` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `pass`, `ten`, `sdt`, `email`, `diachi`, `cmnd`, `phanquyen`) VALUES
('bich', '15031994', 'bich dang hoa', '0962046063', 'sagdjgasgabmasj', 'agsdgjafsmnasjjkjbfkjsh', '074727477', 0),
('huy', '123456', 'huy', '01675072456', 'ngogiahuy1503@gmail.com', '43/4 dạ nam P2 q8', '025048931', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `thanhvien` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`mahang`) REFERENCES `hang` (`mahang`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
