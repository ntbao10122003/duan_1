-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 01:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL DEFAULT 0,
  `bill_name` varchar(10) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_pttt` tinyint(1) DEFAULT 1 COMMENT '1. Thanh toán trực tiếp 2. Chuyển khoản 3. Thanh toán online ',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(10) DEFAULT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới 1.Đang chờ 2.Đang giao hàng 3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL,
  `bill_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `bill_email`) VALUES
(16, 1, 'admin', 'Hà Nội', '0987957355', 0, '05:51:53am 19/10/2022', 121800000, 0, NULL, NULL, NULL, 'baontph21353@gmail.com'),
(17, 1, 'admin', 'Hà Nội', '0987957355', 0, '03:34:08pm 19/10/2022', 80000000, 0, NULL, NULL, NULL, 'baontph21353@gmail.com'),
(22, 1, 'admin', 'Hà Nội', '0987957355', 0, '06:38:50pm 20/10/2022', 60000000, 0, NULL, NULL, NULL, 'baontph21353@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(32, 2, 33, 'ip14.jpg', 'ip14.png', 500000, 1, 500000, 10),
(38, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 11),
(39, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 11),
(40, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 11),
(41, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 12),
(42, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 12),
(43, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 12),
(44, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 12),
(45, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 12),
(46, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 12),
(47, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 12),
(49, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 12),
(50, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 13),
(51, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 13),
(52, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 13),
(53, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 13),
(54, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 13),
(55, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 13),
(56, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 13),
(57, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 13),
(58, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 13),
(59, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 14),
(60, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 14),
(61, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 14),
(62, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 14),
(63, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 14),
(64, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 14),
(65, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 14),
(66, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 14),
(67, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 14),
(68, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 15),
(69, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 15),
(70, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 15),
(71, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 15),
(72, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 15),
(73, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 15),
(74, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 15),
(75, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 15),
(76, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 15),
(77, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 16),
(78, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 16),
(79, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 16),
(80, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 16),
(81, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 16),
(82, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 16),
(83, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 16),
(84, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 16),
(85, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 16),
(86, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 17),
(87, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 17),
(88, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 18),
(89, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 18),
(90, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 19),
(91, 1, 31, 'brush.png', 'Bàn chải điện', 100000, 1, 100000, 19),
(92, 1, 30, 'laptop.png', 'Labtop', 20000000, 1, 20000000, 19),
(93, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 19),
(94, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 19),
(95, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 20),
(96, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 21),
(97, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 22),
(98, 1, 30, 'laptop.png', 'Labtop', 20000000, 1, 20000000, 22),
(99, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 23),
(100, 1, 30, 'laptop.png', 'Labtop', 20000000, 1, 20000000, 23),
(101, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 24),
(102, 1, 30, 'laptop.png', 'Labtop', 20000000, 1, 20000000, 24),
(103, 1, 32, 'ip14.png', 'Iphone 14', 40000000, 1, 40000000, 24),
(104, 1, 33, 'smartwacth.png', 'Đồng hồ', 500000, 1, 500000, 24);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `content_cmt` varchar(255) NOT NULL,
  `user` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_cmt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cmt`, `content_cmt`, `user`, `id`, `date_cmt`) VALUES
(8, 'sáadasd', 0, 55, '03:10:56am 22/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(53, 'đồng hồ'),
(54, 'laptop\r\n'),
(56, 'phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(200) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(100) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(49, 'đồng hồ ruby', 1.30, '1002.jpg', 'sang xịn mịn', 0, 54),
(51, 'đồng hồ ', 1.30, '1002.jpg', 'sang xịn mịn ', 0, 53),
(52, 'đồng hồ ruby', 500.00, '1001.jpg', 'sang xịn mịn ', 0, 53),
(53, 'đồng hồ blat', 1.30, '1038.jpg', 'sang xịn mịn ', 0, 53),
(54, 'laptop dell 7510', 1.30, '1061.jpg', 'sang xịn mịn ', 0, 54),
(58, 'laptop dell 7510', 12.00, '1035.jpg', 'yhbibyhi', 0, 54);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `pass` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(2, 'admin', 123456, 'baontph21353@fpt.edu.vn', 'xom4-thuỹuantien-chuongmy', 988252613, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iduser_user` (`iduser`),
  ADD KEY `lk_idbill_bill` (`idbill`),
  ADD KEY `lk_idpro_product` (`idpro`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ld_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `ld_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
