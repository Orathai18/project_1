-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 16, 2021 at 05:07 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `a_name` varchar(100) COLLATE tis620_bin NOT NULL,
  `a_user` varchar(100) COLLATE tis620_bin NOT NULL,
  `a_pwd` varchar(100) COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_user`, `a_pwd`) VALUES
(1, 'ตั้งใจ ทำดี', 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `g_id` int(6) NOT NULL,
  `g_name` varchar(50) NOT NULL,
  `g_email` varchar(50) NOT NULL,
  `g_message` text NOT NULL,
  `g_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`g_id`, `g_name`, `g_email`, `g_message`) VALUES
(2, 'รักไทย ใจตะวัน', 'rukthai@msu.ac.th', 'สมุดเยี่ยมใช้งานได้ดีมาก');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `pass` int(10) NOT NULL,
  `Id_m` int(5) NOT NULL,
  `fname` varchar(100) COLLATE tis620_bin NOT NULL,
  `lname` varchar(100) COLLATE tis620_bin NOT NULL,
  `tel` int(10) NOT NULL,
  `address` varchar(200) COLLATE tis620_bin NOT NULL,
  `email` varchar(200) COLLATE tis620_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`pass`, `Id_m`, `fname`, `lname`, `tel`, `address`, `email`) VALUES
(9999, 1, 'y', 'ok', 934612227, '72/5 ต.หนองใหญ่ อ.โพนทอง จ.ร้อยเอ็ด', 'a@gmail.com'),
(5555, 2, 'toey', 'za', 222222222, '123 บ้านขามป้อม จ.ขอนแก่น', 't@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL,
  `member_id` int(7) NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `ototal`, `odate`, `member_id`, `status`) VALUES
(0000017, 55980, '2021-10-16 00:06:50', 2, 'กำลังจัดเตรียม'),
(0000020, 43980, '2021-10-16 09:34:11', 2, 'กำลังจัดเตรียม'),
(0000016, 16990, '2021-10-15 23:30:47', 2, 'กำลังจัดเตรียม'),
(0000021, 15990, '2017-12-09 12:56:27', 1, 'จัดส่งแล้ว'),
(0000019, 40980, '2021-10-16 08:54:34', 2, 'กำลังจัดเตรียม'),
(0000015, 27990, '2021-10-15 21:53:27', 1, 'กำลังจัดเตรียม'),
(0000022, 135920, '2021-10-16 11:45:19', 2, 'กำลังจัดเตรียม'),
(0000023, 46970, '2021-10-16 11:50:32', 2, 'กำลังจัดเตรียม');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(6) NOT NULL,
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(13, 0000008, 20001, 1),
(12, 0000007, 20001, 3),
(10, 0000006, 20001, 1),
(19, 0000011, 10007, 3),
(8, 0000005, 30010, 1),
(6, 0000003, 20001, 3),
(7, 0000004, 10009, 1),
(14, 0000009, 10008, 1),
(15, 0000009, 20001, 3),
(21, 0000012, 10007, 1),
(20, 0000011, 10008, 2),
(18, 0000010, 20001, 1),
(22, 0000013, 10007, 4),
(23, 0000013, 10008, 1),
(24, 0000014, 10008, 1),
(25, 0000015, 10008, 1),
(26, 0000016, 10004, 1),
(27, 0000017, 10008, 2),
(28, 0000019, 10008, 1),
(29, 0000019, 10002, 1),
(30, 0000020, 10002, 1),
(31, 0000020, 10005, 1),
(32, 0000022, 10004, 8),
(33, 0000023, 10004, 2),
(34, 0000023, 10003, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(4) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` int(6) NOT NULL,
  `p_picture` varchar(200) NOT NULL,
  `p_type` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `p_type`) VALUES
(10004, 'ACER ASPIRE A314-22-R5UL (BLACK)', 'CPU : AMD RYZEN 5 3500U\r\nRAM : 4 GB DDR4\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 14\" FULL HD\r\nVGA : AMD RADEON VEGA 8\r\nOS : WINDOWS 10 HOME', 16990, 'ACER_04.png', 1),
(10005, 'ACER NITRO 5 AN515-57-58LR (SHALE BLACK)', 'CPU : INTEL CORE I5-11400H\r\nRAM : 8 GB DDR4\r\nSTORAGE : 512 GB PCIe/NVMe SSD\r\nDISPLAY : 15.6\" FULL HD IPS 144Hz\r\nVGA : NVIDIA GEFORCE RTX3050 4 GB GDDR6\r\nOS : WINDOWS 11 HOME', 30990, 'ACER_05.png', 1),
(10001, 'ACER ASPIRE 3 A315-58G-324E (PURE SILVER)', 'CPU : INTEL CORE I3-1115G4\r\nRAM : 4 GB DDR4\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 15.6\" FULL HD\r\nVGA : NVIDIA GEFORCE MX 350 2 GB GDDR5\r\nOS : WINDOWS 10 HOME', 17990, 'ACER_01.png', 1),
(10002, 'ACER ASPIRE 3 A314-35-P6QG (PINK)', 'CPU : INTEL PENTIUM SILVER N6000\r\nRAM : 4 GB (4GB X1) DDR4\r\nSTORAGE : 256 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 14.0\" FULL HD IPS\r\nVGA : INTEL UHD GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 12990, 'ACER_02.png', 1),
(10003, 'ACER ASPIRE 3 A314-35-P9RS (PURE SILVER)', 'CPU : INTEL PENTIUM SILVER N6000\r\nRAM : 4 GB (4GB X1) DDR4\r\nSTORAGE : 256 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 14.0\" FULL HD IPS\r\nVGA : INTEL UHD GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 12990, 'ACER_03.png', 1),
(20002, 'ASUS E410MA-EKP02T (PEACOCK BLUE)', 'CPU : INTEL PENTIUM SILVER N5030\r\nRAM : 4 GB DDR4 (ON BOARD)\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 14\" FULL HD ANTI-GLARE\r\nVGA : INTEL UHD GRAPHICS 605 (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 13990, 'ASUS_02.png', 2),
(20001, 'ASUS ROG STRIX G17 GL743QE-HX088T (ECLIPSE GREY)', 'CPU : AMD RYZEN 9 5900HX\r\nRAM : 16 GB DDR4 3200MHz\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 17.3\" FULL HD IPS ANTI-GLARE 144Hz\r\nVGA : NVIDIA GEFORCE RTX3050TI 4 GB GDDR6\r\nOS : WINDOWS 10 HOME', 41990, 'ASUS_10.png', 2),
(20003, 'ASUS EXPERTBOOK P1440FA-BV3349', 'CPU : INTEL CORE I3-10110U\r\nRAM : 4 GB DDR4 (ON BOARD)\r\nSTORAGE : 256 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 14\" HD ANTI-GLARE\r\nVGA : INTEL UHD GRAPHICS 620 (INTEGRATED)\r\nOS : ENDLESS', 13990, 'ASUS_03.png', 2),
(20004, 'ASUS X509FA-BR301T (SLATE GREY)', 'CPU : INTEL CORE I3-10110U\r\nRAM : 4 GB DDR4 (ON BOARD)\r\nSTORAGE : 512 GB PCIe 3/NVMe M.2 SSD\r\nDISPLAY : 15.6\" HD ANTI-GLARE\r\nVGA : INTEL UHD GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 15990, 'ASUS_04.png', 2),
(20005, 'ASUS D413DA-EK257T (BESPOKE BLACK)', 'CPU : AMD RYZEN 3 3250U\r\nRAM : 4 GB DDR4 (ON-BOARD)\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 14\" FULL HD ANTI-GLARE\r\nVGA : AMD RADEON GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 15990, 'ASUS_05.png', 2),
(20006, 'ASUS TUF GAMING F15 FX506HEB-HN145T (ECLIPSSE GREY)', 'CPU : INTEL CORE I5-11400H\r\nRAM : 8 GB DDR4 3200MHz\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 15.6\" FULL HD IPS ANTI-GLARE 144Hz\r\nVGA : NVIDIA GEFORCE RTX3050TI 4 GB GDDR6\r\nOS : WINDOWS 10 HOME', 33990, 'ASUS_06.png', 2),
(20007, 'ASUS ROG STRIX G15 GL543QY-HF003T ADVANTAGE EDITION', 'CPU : AMD RYZEN 9 5900HX\r\nRAM : 16 GB (8GB X2) DDR4 32000MHz\r\nSTORAGE : 1 TB PCIe/NVMe TCL M.2 SSD\r\nDISPLAY : 15.6\" FULL HD IPS ANTI-GLARE 300Hz\r\nVGA : AMD RADEON RX6800M 12 GB GDDR6\r\nOS : WINDOWS 10 HOME', 64990, 'ASUS_07.png', 2),
(20008, 'ASUS ROG ZEPHYRUS GA401QEC-K2064TS ALAN WALKER EDITION', 'CPU : AMD RYZEN 9 5900HS\r\nRAM : 8 GB DDR4 (ON BOARD) + 8 GB DDR4 3200MHz\r\nSTORAGE : 1 TB PCIe/NVMe M.2 SSD\r\nDISPLAY : 14\" WQHD IPS ANTI-GLARE 120Hz\r\nVGA : NVIDIA GEFORCE RTX3050TI 4 GB GDDR6\r\nOS : WINDOWS 10 HOME + OFFICE HOME & STUDENT 2019', 64990, 'ASUS_08.png', 2),
(20009, 'ASUS ROG ZEPHYRUS G14 GA401QH-HZ018TS (ECLIPSE GREY)\r\n', 'CPU : AMD RYZEN 7 5800HS\r\nRAM : 8 GB DDR4 (ON BOARD)\r\nSTORAGE : 512 GB PCIe 3/NVMe M.2 SSD\r\nDISPLAY : 14\" FULL HD IPS ANTI-GLARE 144Hz\r\nVGA : NVIDIA GEFORCE GTX1650 4 GB GDDR6\r\nOS : WINDOWS 10 HOME + OFFICE HOME & STUDENT 2019', 32990, 'ASUS_09.png', 2),
(20010, 'ASUS ROG STRIX G17 GL743QE-HX088T (ECLIPSE GREY)', 'CPU : AMD RYZEN 9 5900HX\r\nRAM : 16 GB DDR4 3200MHz\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 17.3\" FULL HD IPS ANTI-GLARE 144Hz\r\nVGA : NVIDIA GEFORCE RTX3050TI 4 GB GDDR6\r\nOS : WINDOWS 10 HOME', 41990, 'ASUS_10.png', 2),
(30001, 'HP PAVILION 13-BB0523TU (SILVER)', 'CPU : INTEL CORE I5-1135G7\r\nRAM : 16 GB DDR4 3200MHz (ON BOARD)\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 13.3\" FULL HD IPS\r\nVGA : INTEL IRIS XE GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 26990, 'HP_01.png', 3),
(30002, 'HP ENVY 13-BA1516TX (SILVER)', 'CPU : INTEL CORE I7-1165G7\r\nRAM : 16 GB DDR4 2666MHz (ON BOARD)\r\nSTORAGE : 1 TB PCIe/NVMe M.2 SSD\r\nDISPLAY : 13.3\" FULL HD IPS MULTI-TOUCH\r\nVGA : NVIDIA GEFORCE MX450 2 GB GDDR6\r\nOS : WINDOWS 10 HOME + OFFICE HOME & STUDENT 2019', 43990, 'HP_02.png', 3),
(30003, 'HP VICTUS 16-D0169TX', 'CPU : INTEL CORE I7-11800H\r\nRAM : 8 GB DDR4 3200MHz\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 16.1\" FULL HD IPS ANTI-GLARE\r\nVGA : NVIDIA GEFORCE RTX3050TI 4 GB GDDR6\r\nOS : WINDOWS 10 HOME', 39990, 'HP_03.png', 3),
(30004, 'HP PAVILION 15-EH1081AU (SILVER)', 'CPU : AMD RYZEN 7 5700U\r\nRAM : 16 GB (8GB X2) DDR4 3200MHz\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 15.6\" FULL HD IPS\r\nVGA : AMD RADEON GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 27990, 'HP_04.png', 3),
(30005, 'HP SPECTRE X360 14-EA0010TU (BLACK)', 'CPU : INTEL CORE I5-1135G7\r\nRAM : 16 GB LPDDR4 3200MHz\r\nSTORAGE : 1 TB PCIe/NVMe M.2 SSD\r\nDISPLAY : 13.5\" WUXGA+ IPS TOUCH-SCREEN\r\nVGA : INTEL IRIS XE GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 49990, 'HP_05.png', 3),
(30006, 'HP PAVILION 15-EG0518TU (SILVER)', 'CPU : INTEL CORE I5-1135G7\r\nRAM : 16 GB DDR4 3200MHz\r\nSTORAGE : 1 TB PCIe/NVMe M.2 SSD\r\nDISPLAY : 15.6\" FULL HD IPS\r\nVGA : INTEL IRIS Xe GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME + OFFICE HOME & STUDENT 2019', 30990, 'HP_06.png', 3),
(30007, 'HP PAVILION 13-BB0526TU', 'CPU : INTEL CORE I7-1165G7\r\nRAM : 16 GB DDR4 3200MHz\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 13.3\" FULL HD IPS\r\nVGA : INTEL IRIS XE GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME', 31900, 'HP_07.png', 3),
(30008, 'HP VICTUS 16-D0171TX (PERFORMANCE BLUE)', 'CPU : INTEL CORE I5-11400H\r\nRAM : 8 GB DDR4 2933MHz\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 16.1\" FULL HD IPS ANTI-GLARE 144Hz\r\nVGA : NVIDIA GEFORCE RTX3050 4 GB GDDR6\r\nOS : WINDOWS 10 HOME', 35900, 'HP_08.png', 3),
(30009, 'HP VICTUS 16-D0106TX (MICA SILVER)', 'CPU : INTEL CORE I7-11800H\r\nRAM : 16 GB DDR4 3200MHz\r\nSTORAGE : 32 GB INTEL OPTANE MEMORY + 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 16.1\" FULL HD IPS ANTI-GLARE 144Hz\r\nVGA : NVIDIA GEFORCE RTX3050TI 4 GB GDDR6\r\nOS : WINDOWS 10 HOME', 42990, 'HP_09.png', 3),
(30010, 'HP SPECTRE X360 CONVERTIBLE 13-AW0216TU (POSEIDON BLUE)', 'CPU : INTEL CORE I7-1065G7\r\nRAM : 8 GB LPDDR4 3200MHz (ON-BOARD)\r\nSTORAGE : 512 GB PCIe/NVMe M.2 SSD\r\nDISPLAY : 13.3\" FULL HD IPS + STYLUS PEN\r\nVGA : INTEL IRIS PLUS GRAPHICS (INTEGRATED)\r\nOS : WINDOWS 10 HOME / OFFICE HOME & STUDENT', 44990, 'HP_10.png', 3),
(31112, 'aas', 'NULL', 22000, '31112.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id` int(3) NOT NULL,
  `pt_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `pt_name`) VALUES
(1, 'ACER'),
(2, 'ASUS '),
(3, 'HP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Id_m`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `g_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
