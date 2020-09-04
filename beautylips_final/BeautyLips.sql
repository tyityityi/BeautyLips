-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-04-10 07:40:18
-- 服务器版本： 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautylips`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT 'Customers'' name',
  `email` varchar(50) NOT NULL COMMENT 'Customers'' email ',
  `password` varchar(191) NOT NULL COMMENT 'Customers'' password',
  `remember_token` varchar(100) DEFAULT NULL,
  `shippingAdr` varchar(200) NOT NULL COMMENT 'Customers'' shipping address',
  PRIMARY KEY (`customerID`),
  UNIQUE KEY `customerID` (`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`customerID`, `name`, `email`, `password`, `remember_token`, `shippingAdr`) VALUES
(1, 'Jully Smith', 'JullyS@ipm.edu.mo', '$2y$10$8RuRdOdn4jzmxWc0T.QIqettRtqVVfFiU3FnioGVvdjc5tam8zwly', 'ARYk3V6wNyYhGrTAfFyBABbhLnnlo8ayFI8HlNvGaagyNd9W5APyMly6SbHZ', 'Macao'),
(2, 'Jane Lin', 'JaneL@ipm.edu.mo', '$2y$10$kKGo.4t9OG/F1gIADOD4..li.MRP.S3c3kmFF5mPqNPt2ASpbpnLW', '8PA6axuKBJutGKPq6rAonLfem3BspL4w96Oy3eHODibSi77RRsAD0p1W1ShQ', 'Hongkong'),
(3, 'Sally Ho', 'SallyH@ipm.edu.mo', '$2y$10$vMw5qQAEs8dJRqAJZbfYDuPCGk0kt5g5wvECkVx6OKDtViRYLo6Xa', NULL, 'Guangzhou'),
(4, 'Wilson Ng', 'WilsonN@ipm.edu.mo', '$2y$10$9jNkEwLeR8zebRENDn2ApOPNzSnwnKKv9YDgEcMKrEqM7iQHktnLu', NULL, 'Fujian'),
(5, '123', '123@example.com', '$2y$10$X8R8qL7qgpwlZ5nLR0tvIOrrQzqBc9f6HM7/PnnSJTJ8ro3Oicn1m', 'imLzUYZohn0pxzrswQNsAfEO5bk8FM6MSTHnN2b6t8DF7o8z7TVKFGwRsQ1d', '123456'),
(6, 'Jack', '123@gmail.com', '$2y$10$GEq.56aJWx/3sjpnq1YNy.sUfRgaxyjfFo2cw.s9cE7gLtrerqA8.', 'pD2HLvEyl3cCrUeb7Axo34N85GtVBCFS4aTv2Mq6YaFk0ukivXYsPetZTDM0', 'ggggggtim'),
(7, 'Jack2', 'mhivjack-88b7df@inbox.mailtrap.io', '$2y$10$snp0myxeOKeGj3l0TTH1AudYdMeqvTP6YmNg/AAAOreka/QUUaj2O', 'M0h8wWQrCyC5ATqproKiKwmRDrru7SA6sHbrvOxt3jyYFDpXIEL4PMvAAM7d', 'ggtim'),
(8, 'Jack 123', '12345@gmail.com', '$2y$10$t1gb5CzCuacBjuCDwR.rYeY6VeCQVdLsCb8VM3KbXbVoPy4.nErOW', 'gaqIdnpb3H57JAeaARED77ephx1VCtG255R6c7vYfNi9qR9CLuAy1vT4fb6M', 'asdf'),
(9, 'Tim', '1231@gmail.com', '$2y$10$WZL8M57DmyOn0ZrsxzCGt.siW1.gTDpyAO4fi9X1/3QiNI0AfD..a', 'zXOheVbzaSxK8sp2PrFEPHZ7QsRZ3JSbNIeGdGJ2QZ7Emu7ogLn9pZFgcXjv', 'asdf'),
(10, 'Tim', 'www-88b7df@inbox.mailtrap.io', '$2y$10$RtLkN/cOclpyM6GOVI0W8eYcjLKnTO3pPQxZ5pIrCarPKXdq20v/m', 'lboEG8JNzBAlUS2HB6xCHVlj9Z8fomfvxiEynZn6vk7Tm5rIRKt5Gont9jHt', 'Asdf'),
(11, 'Cindy', '11234@gmail.com', '$2y$10$vd7CIIJ8brJrpMNm9KKDeuvq8RAoLnUSb4NcS/afzKs.h1PAnxftu', 'EY6xyY1RKvnGGUNTQ2T5H0Z3XaryPHM0FQGsjBaNChwzap4fgx47YItupPQ2', 'nnvv');

-- --------------------------------------------------------

--
-- 表的结构 `detail_image`
--

DROP TABLE IF EXISTS `detail_image`;
CREATE TABLE IF NOT EXISTS `detail_image` (
  `id` varchar(20) NOT NULL COMMENT 'Primary key of table ''detail_image''',
  `dImage` varchar(200) NOT NULL COMMENT 'Detail images for this product.',
  `productID` int(8) NOT NULL COMMENT 'Products'' ID',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `productID` (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `detail_image`
--

INSERT INTO `detail_image` (`id`, `dImage`, `productID`) VALUES
('10di1', 'Huda beauty_matte\\cheerleader_$18\\liquidmatte_cheerleader_dimage_1.jpg', 10),
('10di2', 'Huda beauty_matte\\cheerleader_$18\\liquidmatte_cheerleader_dimage_2.jpg', 10),
('11di1', 'Huda beauty_matte\\heartbreaker_$18\\liquidmatte_heartbreaker_dimage_1.jpg', 11),
('11di2', 'Huda beauty_matte\\heartbreaker_$18\\liquidmatte_heartbreaker_dimage_2.jpg', 11),
('12di1', 'Huda beauty_matte\\icon_$16\\icon_dimage_1.jpg', 12),
('12di2', 'Huda beauty_matte\\icon_$16\\icon_dimage_2.jpg', 12),
('13di1', 'Huda beauty_matte\\medusa_$16\\medusa_dimage_1.jpg', 13),
('13di2', 'Huda beauty_matte\\medusa_$16\\medusa_timage_2.jpg', 13),
('14di1', 'Huda beauty_matte\\trendsetter_$18\\liquidmatte_trendsetter_dimage_1.jpg', 14),
('14di2', 'Huda beauty_matte\\trendsetter_$18\\liquidmatte_trendsetter_dimage_2.jpg', 14),
('15di1', 'Huda beauty_matte\\trophwife_$18\\liquidmatte_trophywife_dimage_1.jpg', 15),
('15di2', 'Huda beauty_matte\\trophwife_$18\\liquidmatte_trophywife_dimage_2.jpg', 15),
('16di1', 'Huda beauty_matte\\vixen_$16\\vixen_dimage_1.jpg', 16),
('16di2', 'Huda beauty_matte\\vixen_$16\\vixen_dimage_2.jpg', 16),
('17di1', 'SHISEIDO\\Rouge Rouge_$28\\BR322\\cream_BR322_dimage1.jpg', 17),
('17di2', 'SHISEIDO\\Rouge Rouge_$28\\BR322\\cream_BR322_dimage2.jpg', 17),
('18di1', 'SHISEIDO\\Rouge Rouge_$28\\BR721\\cream_BR721_dimage1.jpg', 18),
('18di2', 'SHISEIDO\\Rouge Rouge_$28\\BR721\\cream_BR721_dimage2.jpg', 18),
('19di1', 'SHISEIDO\\Rouge Rouge_$28\\OR417\\cream_OR417_dimage1.jpg', 19),
('19di2', 'SHISEIDO\\Rouge Rouge_$28\\OR417\\cream_OR417_dimage2.jpg', 19),
('1di1', '3CE_matte_$13\\116\\mood-recipe_116_dimage_1.jpg', 1),
('1di2', '3CE_matte_$13\\116\\mood-recipe_116_dimage_2.jpg', 1),
('20di1', 'SHISEIDO\\Rouge Rouge_$28\\RD309\\cream_RD309_dimage1.jpg', 20),
('20di2', 'SHISEIDO\\Rouge Rouge_$28\\RD309\\cream_RD309_dimage2.jpg', 20),
('21di1', 'SHISEIDO\\Rouge Rouge_$28\\RD310\\cream_RD310_dimage1.jpg', 21),
('21di2', 'SHISEIDO\\Rouge Rouge_$28\\RD310\\cream_RD310_dimage2.jpg', 21),
('22di1', 'SHISEIDO\\Rouge Rouge_$28\\RD501\\cream_RD501_dimage1.jpg', 22),
('22di2', 'SHISEIDO\\Rouge Rouge_$28\\RD501\\cream_RD501_dimage2.jpg', 22),
('23di1', 'SHISEIDO\\Rouge Rouge_$28\\RD502\\cream_RD502_dimage1.jpg', 23),
('23di2', 'SHISEIDO\\Rouge Rouge_$28\\RD502\\cream_RD502_dimage2.jpg', 23),
('24di1', 'SHISEIDO\\Shimmering Rouge_$25\\RS308\\sheer_RS308_dimage1.jpg', 24),
('24di2', 'SHISEIDO\\Shimmering Rouge_$25\\RS308\\sheer_RS308_dimage2.jpg', 24),
('25di1', 'SHISEIDO\\Smoothing Lip Pencil_$20\\RD708\\matte_RD708_dimage1.jpg', 25),
('25di2', 'SHISEIDO\\Smoothing Lip Pencil_$20\\RD708\\matte_RD708_dimage2.jpg', 25),
('26di1', 'Kevyn Aucoin_satin_$48\\bloodroses\\bloodroses_dimage_1.jpg', 26),
('26di2', 'Kevyn Aucoin_satin_$48\\bloodroses\\bloodroses_dimage_2.jpg', 26),
('27di1', 'Kevyn Aucoin_satin_$48\\cashmere\\cashmere_dimage_1.jpg', 27),
('27di2', 'Kevyn Aucoin_satin_$48\\cashmere\\cashmere_dimage_2.jpg', 27),
('28di1', 'Kevyn Aucoin_satin_$48\\silk\\silk_dimage_1.jpg', 28),
('28di2', 'Kevyn Aucoin_satin_$48\\silk\\silk_dimage_2.jpg', 28),
('29di1', 'TOM FORD\\LIP COLOR MATTE_$54\\DECEIVER\\matte_DECEIVER_diamge1.jpg', 29),
('29di2', 'TOM FORD\\LIP COLOR MATTE_$54\\DECEIVER\\matte_DECEIVER_diamge2.jpg', 29),
('2di1', '3CE_matte_$13\\117\\mood-recipe_117_dimage_1.jpg', 2),
('2di2', '3CE_matte_$13\\117\\mood-recipe_117_dimage_2.jpg', 2),
('30di1', 'TOM FORD\\LIP COLOR MATTE_$54\\FIRST TIME\\matte_FIRST TIME_dimage1.jpg', 30),
('30di2', 'TOM FORD\\LIP COLOR MATTE_$54\\FIRST TIME\\matte_FIRST TIME_diamge2.jpg', 30),
('31di1', 'TOM FORD\\LIP COLOR MATTE_$54\\INDEEP\\matte_INDEEP_diamge1.jpg', 31),
('31di2', 'TOM FORD\\LIP COLOR MATTE_$54\\INDEEP\\matte_INDEEP_dimage2.jpg', 31),
('32di1', 'TOM FORD\\LIP COLOR MATTE_$54\\PUSSYCAT\\matte_PUSSYCAT_diamge1.jpg', 32),
('32di2', 'TOM FORD\\LIP COLOR MATTE_$54\\PUSSYCAT\\matte_PUSSYCAT_diamge2.jpg', 32),
('33di1', 'TOM FORD\\LIP COLOR SHEER_$54\\PARADISO\\sheer_PARADISO_diamge1.jpg', 33),
('33di2', 'TOM FORD\\LIP COLOR SHEER_$54\\PARADISO\\sheer_PARADISO_diamge2.jpg', 33),
('34di1', 'TOM FORD\\LIP COLOR SHEER_$54\\SWEET SPOT\\sheer_SWEET SPOT_dimage1.jpg', 34),
('34di2', 'TOM FORD\\LIP COLOR SHEER_$54\\SWEET SPOT\\sheer_SWEET SPOT_dimage2.jpg', 34),
('35di1', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\INFAMY\\satin_INFAMY_dimage1.jpg', 35),
('35di2', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\INFAMY\\satin_INFAMY_dimage2.jpg', 35),
('36di1', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\NO VACANCY\\satin_NO VACANCY_dimage1.jpg', 36),
('36di2', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\NO VACANCY\\satin_NO VACANCY_dimage2.jpg', 36),
('37di1', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\RED CORSET\\satin_RED CORSET_dimage1.jpg', 37),
('37di2', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\RED CORSET\\satin_RED CORSET_dimage2.jpg', 37),
('38di1', 'TOM FORD\\ULTRA SHINE_$47\\PEACH ABSOLUT\\gloss_PEACH ABSOLUT_dimage1.jpg', 38),
('38di2', 'TOM FORD\\\\ULTRA SHINE_$47\\\\PEACH ABSOLUT\\\\gloss_PEACH ABSOLUT_dimage2.jpg', 38),
('39di1', 'TOM FORD\\ULTRA SHINE_$47\\PINK GUILT\\gloss_PINK GUILT_dimage1.jpg', 39),
('39di2', 'TOM FORD\\ULTRA SHINE_$47\\PINK GUILT\\gloss_PINK GUILT_dimage2.jpg', 39),
('3di1', 'Charlotte Tilbury\\bondgirl_matte_$24\\matterevolution_bondgirl_diamge_1.jpg', 3),
('3di2', 'Charlotte Tilbury\\bondgirl_matte_$24\\matterevolution_bondgirl_dimage_2.jpg', 3),
('40di1', 'TOM FORD\\ULTRA SHINE_$47\\ROSE CRUSH\\gloss_ROSE CRUSH_dimage1.jpg', 40),
('40di2', 'TOM FORD\\ULTRA SHINE_$47\\ROSE CRUSH\\gloss_ROSE CRUSH_dimage2.jpg', 40),
('41di1', 'TOM FORD\\ULTRA SHINE_$47\\WET VIOLET\\gloss_WET VIOLET_dimage1.jpg', 41),
('41di2', 'TOM FORD\\ULTRA SHINE_$47\\WET VIOLET\\gloss_WET VIOLET_dimage2.jpg', 41),
('42di1', '3CE_matte_$13\\115\\mood-recipe_115_diamge_1.jpg', 42),
('42di2', '3CE_matte_$13\\115\\mood-recipe_115_dimage2.jpg', 42),
('4di1', 'Charlotte Tilbury\\coachella-coral_sheer_$24\\k.i.s.s.i.n.g_coachella-coral_dimage_1.jpg', 4),
('4di2', 'Charlotte Tilbury\\coachella-coral_sheer_$24\\k.i.s.s.i.n.g_coachella-coral_dimage_2.jpg', 4),
('5di1', 'Charlotte Tilbury\\halloffame_lipgross_sheer_$16.5\\halloffame_diamge_1.jpg', 5),
('5di2', 'Charlotte Tilbury\\halloffame_lipgross_sheer_$16.5\\halloffame_dimage_2.jpg', 5),
('6di1', 'Charlotte Tilbury\\seduction_lipgross_sheer_$16.5\\seduction_dimage_1.jpg', 6),
('6di2', 'Charlotte Tilbury\\seduction_lipgross_sheer_$16.5\\seduction_dimage_2.jpg', 6),
('7di1', 'Charlotte Tilbury\\stonedrose_sheer_$24\\kissing_stoned_rose_dimage_1.jpg', 7),
('7di2', 'Charlotte Tilbury\\stonedrose_sheer_$24\\kissing_stoned-rose_dimage_2.jpg', 7),
('8di1', 'Charlotte Tilbury\\unleashme_lipgross_sheer_$16.5\\unleashme_dimage_1.jpg', 8),
('8di2', 'Charlotte Tilbury\\unleashme_lipgross_sheer_$16.5\\unleashme_diamge_2.jpg', 8),
('9di1', 'Charlotte Tilbury\\walkofshame_matte_$24\\matterevolution_walkofshame_diamge_1.jpg', 9),
('9di2', 'Charlotte Tilbury\\walkofshame_matte_$24\\matterevolution_walkofshame_dimage_2.jpg', 9);

-- --------------------------------------------------------

--
-- 表的结构 `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notificationID` int(8) NOT NULL AUTO_INCREMENT,
  `PONum` int(8) NOT NULL,
  `customerID` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) NOT NULL,
  `isread` int(1) NOT NULL,
  PRIMARY KEY (`notificationID`),
  KEY `PONum` (`PONum`),
  KEY `notification_ibfk_1` (`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `notification`
--

INSERT INTO `notification` (`notificationID`, `PONum`, `customerID`, `time`, `status`, `isread`) VALUES
(10, 30, 10, '2018-04-10 07:05:00', 'hold', 1),
(11, 31, 10, '2018-04-10 07:19:56', 'shipped', 1);

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('123@gmail.com', '$2y$10$QMhDJ/4FbQdoujul6ixmB.bJPeK42NcCJ8vc8z4azMBi1/GjK9Iam', '2018-02-25 06:17:30'),
('527748913@qq.com', '$2y$10$4VeyAeTLxoGfREPSTeofS.2qtThm4nEhLufbnjgi0KJPUGY2cx4gW', '2018-02-20 06:36:03'),
('mhivjack@gmail.com', '$2y$10$loRCBgFO10UdI4fCvWR6Q./MTJ5/gQjgO7rFHfICrjhl1LK4BtKpS', '2018-02-26 04:01:01');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(45) NOT NULL COMMENT 'Products'' Name',
  `brand` varchar(45) NOT NULL COMMENT 'Products'' brand',
  `tImage` varchar(200) NOT NULL COMMENT 'Products'' image',
  `shades` varchar(50) NOT NULL COMMENT 'Products'' shades',
  `texture` varchar(10) DEFAULT NULL COMMENT 'Products''  texture',
  `lip` varchar(20) NOT NULL,
  `information` varchar(500) NOT NULL COMMENT 'Products'' information',
  `price` double NOT NULL COMMENT 'Product’s price',
  `out_of_stock` tinyint(1) NOT NULL COMMENT 'The product is temporarily out-of-stock or not. It would be control by vendor and if it is true, the status cannot be shipped.',
  PRIMARY KEY (`productID`),
  UNIQUE KEY `productID_UNIQUE` (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`productID`, `productName`, `brand`, `tImage`, `shades`, `texture`, `lip`, `information`, `price`, `out_of_stock`) VALUES
(1, 'Mood Recipe', '3CE', '3CE_matte_$13\\116\\mood-recipe_116_timage.jpg', '116', 'matte', 'lipstick', '1', 100, 1),
(2, 'Mood Recipe', '3CE', '3CE_matte_$13\\117\\mood-recipe_117_timage.jpg', '117', 'matte', 'lipstick', '1', 13, 0),
(3, 'Matte Revolution', 'Charlotte Tilbury', 'Charlotte Tilbury\\bondgirl_matte_$24\\matterevolution_bondgirl_timage.jpg', 'bondgirl', 'matte', 'lipstick', '1', 24, 0),
(4, 'K.I.S.S.I.N.G', 'Charlotte Tilbury', 'Charlotte Tilbury\\coachella-coral_sheer_$24\\k.i.s.s.i.n.g_coachella-coral_timage.jpg', 'coachella-coral', 'sheer', 'lipstick', '1', 24, 0),
(5, 'Lip Lustre', 'Charlotte Tilbury', 'Charlotte Tilbury\\halloffame_lipgross_sheer_$16.5\\halloffame_timage.jpg', 'halloffame', 'sheer', 'lip gloss', '1', 16.5, 0),
(6, 'Lip Lustre', 'Charlotte Tilbury', 'Charlotte Tilbury\\seduction_lipgross_sheer_$16.5\\seduction_timage.jpg', 'seduction', 'sheer', 'lip gloss', '1', 16.5, 0),
(7, 'K.I.S.S.I.N.G', 'Charlotte Tilbury', 'Charlotte Tilbury\\stonedrose_sheer_$24\\k.i.s.s.i.n.g_stoned-rose_timage.jpg', 'stoned rose', 'sheer', 'lipstick', '1', 24, 0),
(8, 'Lip Lustre', 'Charlotte Tilbury', 'Charlotte Tilbury\\unleashme_lipgross_sheer_$16.5\\unleashme_timage.jpg', 'unleashme', 'sheer', 'liquid lipstick', '1', 16.5, 0),
(9, 'Matte Revolution', 'Charlotte Tilbury', 'Charlotte Tilbury\\walkofshame_matte_$24\\matterevolution_walkofshame_timage.jpg', 'walk of shame', 'matte', 'lipstick', '1', 24, 0),
(10, 'Liquid Matte', 'Huda Beauty', 'Huda beauty_matte\\cheerleader_$18\\liquidmatte_cheerleader_timage.jpg', 'cheerleader', 'matte', 'liquid lipstick', '1', 18, 0),
(11, 'Liquid Matte', 'Huda Beauty', 'Huda beauty_matte\\heartbreaker_$18\\liquidmatte_heartbreaker_timage.jpg', 'heartbreaker', 'matte', 'liquid lipstick', '1', 18, 0),
(12, 'Lip Contour', 'Huda Beauty', 'Huda beauty_matte\\icon_$16\\icon_timage.jpg', 'icon', 'matte', 'lip linear', '1', 16, 0),
(13, 'Lip Contour', 'Huda Beauty', 'Huda beauty_matte\\medusa_$16\\medusa_timage.jpg', 'medusa', 'matte', 'lip linear', '1', 16, 0),
(14, 'Liquid Matte', 'Huda Beauty', 'Huda beauty_matte\\trendsetter_$18\\liquidmatte_trendsetter_timage.jpg', 'trendsetter', 'matte', 'liquid lipstick', '1', 18, 0),
(15, 'Liquid Matte', 'Huda Beauty', 'Huda beauty_matte\\trophwife_$18\\liquidmatte_trophywife_timage.jpg', 'trophwife', 'matte', 'liquid lipstick', '1', 18, 0),
(16, 'Lip Contour', 'Huda Beauty', 'Huda beauty_matte\\vixen_$16\\vixen_timage.jpg', 'vixen', 'matte', 'lip linear', '1', 16, 0),
(17, 'Rouge Rouge ', 'SHISEIDO', 'SHISEIDO\\Rouge Rouge_$28\\BR322\\cream_BR322_timage.jpg', 'BR322', 'cream', 'lipstick', '1', 28, 0),
(18, 'Rouge Rouge ', 'SHISEIDO', 'SHISEIDO\\Rouge Rouge_$28\\BR721\\cream_BR721_timage.jpg', 'BR721', 'cream', 'lipstick', '1', 28, 0),
(19, 'Rouge Rouge ', 'SHISEIDO', 'SHISEIDO\\Rouge Rouge_$28\\OR417\\cream_OR417_timage.jpg', 'OR417', 'cream', 'lipstick', '1', 28, 0),
(20, 'Rouge Rouge ', 'SHISEIDO', 'SHISEIDO\\Rouge Rouge_$28\\RD309\\cream_RD309_timage.jpg', 'RD309', 'cream', 'lipstick', '1', 28, 0),
(21, 'Rouge Rouge ', 'SHISEIDO', 'SHISEIDO\\Rouge Rouge_$28\\RD310\\cream_RD310_timage.jpg', 'RD310', 'cream', 'lipstick', '1', 28, 0),
(22, 'Rouge Rouge ', 'SHISEIDO', 'SHISEIDO\\Rouge Rouge_$28\\RD501\\cream_RD501_timage.jpg', 'RD501', 'cream', 'lipstick', '1', 28, 0),
(23, 'Rouge Rouge ', 'SHISEIDO', 'SHISEIDO\\Rouge Rouge_$28\\RD502\\cream_RD502_timage.jpg', 'RD502', 'cream', 'lipstick', '1', 28, 0),
(24, 'Shimmering Rouge', 'SHISEIDO', 'SHISEIDO\\Shimmering Rouge_$25\\RS308\\sheer_RS308_timage.jpg', 'RS308', 'sheer', 'lipstick', '1', 25, 0),
(25, 'Smoothing Lip Pencil', 'SHISEIDO', 'SHISEIDO\\Smoothing Lip Pencil_$20\\RD708\\matte_RD708_timage.jpg', 'RD708', 'matte', 'lip linear', '1', 20, 0),
(26, 'The Sensual Lip Satin', 'Kevyn Aucoin', 'Kevyn Aucoin_satin_$48\\bloodroses\\bloodroses_timage.jpg', 'bloodroses', 'satin', 'liquid lipstick', '1', 48, 0),
(27, 'The Sensual Lip Satin', 'Kevyn Aucoin', 'Kevyn Aucoin_satin_$48\\cashmere\\cashmere_timage.jpg', 'cashmere', 'satin', 'liquid lipstick', '1', 48, 0),
(28, 'The Sensual Lip Satin', 'Kevyn Aucoin', 'Kevyn Aucoin_satin_$48\\silk\\silk_timage.jpg', 'silk', 'satin', 'liquid lipstick', '1', 48, 0),
(29, 'LIP COLOR MATTE', 'TOM FORD', 'TOM FORD\\LIP COLOR MATTE_$54\\DECEIVER\\matte_DECEIVER_tiamge.jpg', 'DECEIVER', 'matte', 'lipstick', '1', 54, 0),
(30, 'LIP COLOR MATTE', 'TOM FORD', 'TOM FORD\\LIP COLOR MATTE_$54\\FIRST TIME\\matte_FIRST TIME_timage.jpg', 'FIRST TIME', 'matte', 'lipstick', '1', 54, 0),
(31, 'LIP COLOR MATTE', 'TOM FORD', 'TOM FORD\\LIP COLOR MATTE_$54\\INDEEP\\matte_INDEEP_tiamge.jpg', 'INDEEP', 'matte', 'lipstick', '1', 54, 0),
(32, 'LIP COLOR MATTE', 'TOM FORD', 'TOM FORD\\LIP COLOR MATTE_$54\\PUSSYCAT\\matte_PUSSYCAT_timage.jpg', 'PUSSYCAT', 'matte', 'lipstick', '1', 54, 0),
(33, 'LIP COLOR SHEER', 'TOM FORD', 'TOM FORD\\LIP COLOR SHEER_$54\\PARADISO\\sheer_PARADISO_tiamge.jpg', 'PARADISO', 'sheer', 'lipstick', '1', 54, 0),
(34, 'LIP COLOR SHEER', 'TOM FORD', 'TOM FORD\\LIP COLOR SHEER_$54\\SWEET SPOT\\sheer_SWEET SPOT_timage.jpg', 'SWEET SPOT', 'sheer', 'lipstick', '1', 54, 0),
(35, 'PATENT FINISH LIP COLOR', 'TOM FORD', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\INFAMY\\satin_INFAMY_timage.jpg', 'INFAMY', 'satin', 'lipstick', '1', 54, 0),
(36, 'PATENT FINISH LIP COLOR', 'TOM FORD', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\NO VACANCY\\satin_NO VACANCY_timage.jpg', 'NO VACANCY', 'satin', 'lipstick', '1', 54, 0),
(37, 'PATENT FINISH LIP COLOR', 'TOM FORD', 'TOM FORD\\PATENT FINISH LIP COLOR_$54\\RED CORSET\\satin_RED CORSET_timage.jpg', 'RED CORSET', 'satin', 'lipstick', '1', 54, 0),
(38, 'ULTRA SHINE', 'TOM FORD', 'TOM FORD\\ULTRA SHINE_$47\\PEACH ABSOLUT\\gloss_PEACH ABSOLUT_timage.jpg', 'PEACH ABSOLUT', 'sheer', 'liquid lipstick', '1', 47, 0),
(39, 'ULTRA SHINE', 'TOM FORD', 'TOM FORD\\ULTRA SHINE_$47\\PINK GUILT\\gloss_PINK GUILT_timage.jpg', 'PINK GUILT', 'sheer', 'liquid lipstick', '1', 47, 0),
(40, 'ULTRA SHINE', 'TOM FORD', 'TOM FORD\\ULTRA SHINE_$47\\ROSE CRUSH\\gloss_ROSE CRUSH_timage.jpg', 'ROSE CRUSH', 'sheer', 'liquid lipstick', '1', 47, 0),
(41, 'ULTRA SHINE', 'TOM FORD', 'TOM FORD\\ULTRA SHINE_$47\\WET VIOLET\\gloss_WET VIOLET_timage.jpg', 'WET VIOLET', 'sheer', 'liquid lipstick', '1', 47, 0),
(42, 'Mood Recipe', '3CE', '3CE_matte_$13\\115\\mood-recipe_115_timage.jpg', '115', 'matte', 'lipstick', '1', 13, 0);

-- --------------------------------------------------------

--
-- 表的结构 `product_rate`
--

DROP TABLE IF EXISTS `product_rate`;
CREATE TABLE IF NOT EXISTS `product_rate` (
  `productID` int(8) NOT NULL,
  `customerID` int(11) NOT NULL,
  `PONum` int(11) NOT NULL,
  `rate` double NOT NULL,
  KEY `pra_customer_fk` (`customerID`),
  KEY `pra_product_fk` (`productID`),
  KEY `PONum` (`PONum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product_rate`
--

INSERT INTO `product_rate` (`productID`, `customerID`, `PONum`, `rate`) VALUES
(2, 10, 20, 5),
(1, 10, 21, 5),
(1, 10, 22, 4),
(1, 10, 24, 2),
(1, 10, 23, 5),
(1, 10, 26, 1),
(1, 10, 25, 1),
(1, 10, 27, 1),
(1, 11, 28, 5),
(1, 11, 29, 5),
(3, 10, 31, 4);

-- --------------------------------------------------------

--
-- 表的结构 `product_reviews`
--

DROP TABLE IF EXISTS `product_reviews`;
CREATE TABLE IF NOT EXISTS `product_reviews` (
  `productID` int(8) NOT NULL COMMENT 'Product''s ID',
  `customerID` int(8) NOT NULL COMMENT 'Customer''s ID',
  `PONum` int(11) NOT NULL,
  `reviews` varchar(500) NOT NULL COMMENT 'Short reviews for products(written by customer)',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  KEY `pre_product_fk` (`productID`),
  KEY `pre_customer_fk` (`customerID`),
  KEY `PONum` (`PONum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product_reviews`
--

INSERT INTO `product_reviews` (`productID`, `customerID`, `PONum`, `reviews`, `created_at`, `updated_at`) VALUES
(1, 10, 21, '12345', '2018-04-06 02:22:04', '2018-04-06 02:22:04'),
(1, 10, 22, '1234', '2018-04-06 02:22:17', '2018-04-06 02:22:17'),
(1, 10, 24, 'This product is quite good!', '2018-04-06 06:03:55', '2018-04-06 06:03:55'),
(1, 10, 23, 'I wanna buy it for many times!', '2018-04-06 06:04:44', '2018-04-06 06:04:44'),
(1, 10, 26, 'BUY IT! BUY IT! BUY IT!', '2018-04-06 06:16:05', '2018-04-06 06:16:05'),
(1, 10, 25, 'UNTIL THERE IS NOT SUCH AN ITEM!!!!', '2018-04-06 06:16:28', '2018-04-06 06:16:28'),
(1, 10, 27, 'Then the comment becomes 7, is a prime number! yeah! I could test the round-off problem now!', '2018-04-06 06:18:14', '2018-04-06 06:18:14'),
(1, 11, 28, 'This lipstick is suitable for lip!', '2018-04-09 22:43:02', '2018-04-09 22:43:02'),
(1, 11, 29, 'Great!', '2018-04-09 22:44:53', '2018-04-09 22:44:53'),
(3, 10, 31, 'asdfz', '2018-04-09 23:19:14', '2018-04-09 23:19:14');

-- --------------------------------------------------------

--
-- 表的结构 `purchase_order`
--

DROP TABLE IF EXISTS `purchase_order`;
CREATE TABLE IF NOT EXISTS `purchase_order` (
  `PONum` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Purchase Order number.',
  `status` varchar(45) NOT NULL COMMENT 'The states of this purchase, can be pending, hold, shipped and cancelled.',
  `customerID` int(8) NOT NULL COMMENT 'Customers'' ID',
  `shipping_time` datetime DEFAULT NULL COMMENT 'Shipping date and time',
  `cancel_time` datetime DEFAULT NULL COMMENT 'Cancel date and time',
  `cancel_by` varchar(100) DEFAULT NULL COMMENT 'The one who cancels the order',
  `purchaseDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`PONum`,`customerID`) USING BTREE,
  UNIQUE KEY `P.O.Num_UNIQUE` (`PONum`),
  KEY `customerID` (`customerID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `purchase_order`
--

INSERT INTO `purchase_order` (`PONum`, `status`, `customerID`, `shipping_time`, `cancel_time`, `cancel_by`, `purchaseDate`) VALUES
(1, 'cancelled', 1, NULL, '2018-03-05 09:24:03', 'Jully Smith', '2018-02-19 16:55:49'),
(2, 'hold', 2, NULL, NULL, NULL, '2018-02-19 16:55:49'),
(3, 'shipped', 3, '2018-02-06 15:16:14', NULL, NULL, '2018-02-19 16:55:49'),
(4, 'pending', 4, NULL, '2018-02-06 10:29:34', 'Wilson Ng', '2018-02-19 16:55:49'),
(5, 'pending', 5, NULL, NULL, NULL, '2018-02-27 16:58:09'),
(6, 'cancelled', 1, NULL, '2018-03-05 09:25:17', 'Jully Smith', '2018-03-02 17:03:46'),
(7, 'shipped', 1, '2018-03-15 00:00:00', NULL, NULL, '2018-03-02 17:04:11'),
(8, 'cancelled', 1, NULL, '2018-03-04 00:00:00', 'Jully', '2018-03-02 17:05:46'),
(9, 'pending', 6, NULL, NULL, NULL, '2018-03-12 06:47:35'),
(10, 'pending', 7, NULL, NULL, NULL, '2018-03-12 07:38:57'),
(11, 'pending', 7, NULL, NULL, NULL, '2018-03-12 07:39:26'),
(12, 'cancelled', 1, NULL, '2018-03-12 09:51:18', 'Jully Smith', '2018-03-12 08:13:57'),
(13, 'shipped', 1, '2018-03-12 10:00:41', NULL, NULL, '2018-03-12 09:56:58'),
(14, 'pending', 1, NULL, NULL, NULL, '2018-03-12 09:57:34'),
(15, 'cancelled', 10, NULL, '2018-03-30 06:56:59', 'Tim', '2018-03-27 01:03:17'),
(16, 'shipped', 10, '2018-03-30 07:03:43', NULL, NULL, '2018-03-30 07:02:37'),
(17, 'pending', 10, NULL, NULL, NULL, '2018-03-30 07:20:18'),
(18, 'shipped', 10, '2018-04-05 02:16:37', NULL, NULL, '2018-04-05 02:14:33'),
(19, 'pending', 10, NULL, NULL, NULL, '2018-04-06 09:35:55'),
(20, 'shipped', 10, '2018-04-06 09:37:35', NULL, NULL, '2018-04-06 09:37:03'),
(21, 'shipped', 10, '2018-04-06 10:21:30', NULL, NULL, '2018-04-06 10:20:52'),
(22, 'shipped', 10, '2018-04-06 10:21:34', NULL, NULL, '2018-04-06 10:21:03'),
(23, 'shipped', 10, '2018-04-06 02:02:44', NULL, NULL, '2018-04-06 01:54:41'),
(24, 'shipped', 10, '2018-04-06 02:02:52', NULL, NULL, '2018-04-06 01:56:59'),
(25, 'shipped', 10, '2018-04-06 02:13:10', NULL, NULL, '2018-04-06 02:08:14'),
(26, 'shipped', 10, '2018-04-06 02:13:02', NULL, NULL, '2018-04-06 02:08:38'),
(27, 'shipped', 10, '2018-04-06 02:17:09', NULL, NULL, '2018-04-06 02:13:29'),
(28, 'shipped', 11, '2018-04-10 06:41:47', NULL, NULL, '2018-04-10 06:41:28'),
(29, 'shipped', 11, '2018-04-10 06:44:34', NULL, NULL, '2018-04-10 06:44:13'),
(30, 'hold', 10, NULL, NULL, NULL, '2018-04-10 07:04:22'),
(31, 'shipped', 10, '2018-04-10 07:18:45', NULL, NULL, '2018-04-10 07:18:24'),
(32, 'pending', 10, NULL, NULL, NULL, '2018-04-10 07:25:39');

-- --------------------------------------------------------

--
-- 表的结构 `purchase_product`
--

DROP TABLE IF EXISTS `purchase_product`;
CREATE TABLE IF NOT EXISTS `purchase_product` (
  `productID` int(8) NOT NULL COMMENT 'Product''s ID',
  `PONum` int(8) NOT NULL COMMENT 'Purchase Order number',
  `price` double NOT NULL COMMENT 'Price per products',
  `quantity` int(5) NOT NULL COMMENT 'Quantity of this purchased product',
  `comment` int(11) NOT NULL DEFAULT '0',
  KEY `pp_ponum_fk` (`PONum`),
  KEY `pp_product_fk` (`productID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `purchase_product`
--

INSERT INTO `purchase_product` (`productID`, `PONum`, `price`, `quantity`, `comment`) VALUES
(1, 1, 13, 1, 0),
(31, 1, 54, 1, 0),
(5, 2, 33, 2, 0),
(10, 3, 18, 1, 0),
(11, 3, 18, 1, 0),
(23, 4, 28, 1, 0),
(5, 5, 18, 1, 0),
(12, 5, 18, 1, 0),
(14, 6, 18, 1, 0),
(7, 7, 24, 1, 0),
(20, 7, 28, 1, 0),
(4, 8, 24, 1, 0),
(1, 9, 13, 3, 0),
(2, 10, 13, 2, 0),
(5, 11, 16.5, 3, 0),
(10, 11, 18, 2, 0),
(2, 12, 13, 2, 0),
(1, 13, 13, 3, 0),
(7, 13, 24, 4, 0),
(1, 15, 13, 4, 0),
(5, 15, 16.5, 1, 0),
(2, 16, 13, 1, 0),
(3, 17, 24, 1, 0),
(1, 18, 13, 1, 1),
(2, 18, 13, 1, 1),
(2, 20, 13, 1, 1),
(7, 20, 24, 1, 0),
(1, 21, 13, 1, 1),
(1, 22, 13, 3, 1),
(1, 23, 13, 3, 1),
(1, 24, 13, 1, 1),
(1, 25, 13, 1, 1),
(1, 26, 13, 1, 1),
(1, 27, 13, 1, 1),
(1, 28, 13, 3, 1),
(1, 29, 13, 1, 1),
(1, 30, 13, 1, 0),
(3, 31, 24, 1, 1),
(1, 32, 100, 2, 0),
(2, 32, 13, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `productID` int(8) NOT NULL COMMENT 'Products'' ID',
  `customerID` int(8) NOT NULL COMMENT 'Customers'' ID',
  `quantity` int(3) NOT NULL COMMENT 'Quantity of this purchased product',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `customerID_UNIQUE` (`customerID`,`productID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendors_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tim GG', 'pipitim@gmail.io', '$2y$10$r8KmgKAOnyrEN43VkI3ebuBKxC1cr9majEk1r7X72KFb8goLudfNe', NULL, '2018-03-02 01:46:31', '2018-03-02 01:46:31');

--
-- 限制导出的表
--

--
-- 限制表 `detail_image`
--
ALTER TABLE `detail_image`
  ADD CONSTRAINT `detail_image_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);

--
-- 限制表 `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`);

--
-- 限制表 `product_rate`
--
ALTER TABLE `product_rate`
  ADD CONSTRAINT `pra_customer_fk` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pra_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_rate_ibfk_1` FOREIGN KEY (`PONum`) REFERENCES `purchase_product` (`PONum`);

--
-- 限制表 `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `pre_customer_fk` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pre_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_reviews_ibfk_1` FOREIGN KEY (`PONum`) REFERENCES `purchase_order` (`PONum`);

--
-- 限制表 `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `po_customer_fk` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 限制表 `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD CONSTRAINT `pp_ponum_fk` FOREIGN KEY (`PONum`) REFERENCES `purchase_order` (`PONum`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pp_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
