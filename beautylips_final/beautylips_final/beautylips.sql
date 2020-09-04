-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2018-02-06 12:38:20
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `beautylips`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL COMMENT 'Customers'' name',
  `email` varchar(50) NOT NULL COMMENT 'Customers'' email ',
  `password` varchar(191) NOT NULL COMMENT 'Customers'' password',
  `remember_token` varchar(100) DEFAULT NULL,
  `shippingAdr` varchar(200) NOT NULL COMMENT 'Customers'' shipping address'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `customer`
--

INSERT INTO `customer` (`customerID`, `name`, `email`, `password`, `remember_token`, `shippingAdr`) VALUES
(1, 'Jully Smith', 'JullyS@ipm.edu.mo', '$2y$10$8RuRdOdn4jzmxWc0T.QIqettRtqVVfFiU3FnioGVvdjc5tam8zwly', 'KjysocMnnri8WFrRPNfEkGUrXLMCaBvoL6Hi0SpX3BRdag62qqT8Vu13DKNT', 'Macao'),
(2, 'Jane Lin', 'JaneL@ipm.edu.mo', '$2y$10$kKGo.4t9OG/F1gIADOD4..li.MRP.S3c3kmFF5mPqNPt2ASpbpnLW', '8PA6axuKBJutGKPq6rAonLfem3BspL4w96Oy3eHODibSi77RRsAD0p1W1ShQ', 'Hongkong'),
(3, 'Sally Ho', 'SallyH@ipm.edu.mo', '$2y$10$vMw5qQAEs8dJRqAJZbfYDuPCGk0kt5g5wvECkVx6OKDtViRYLo6Xa', NULL, 'Guangzhou'),
(4, 'Wilson Ng', 'WilsonN@ipm.edu.mo', '$2y$10$9jNkEwLeR8zebRENDn2ApOPNzSnwnKKv9YDgEcMKrEqM7iQHktnLu', NULL, 'Fujian');

-- --------------------------------------------------------

--
-- 資料表結構 `detail_image`
--

CREATE TABLE `detail_image` (
  `dImage` varchar(200) NOT NULL COMMENT 'Detail images for this product.',
  `productID` int(8) NOT NULL COMMENT 'Products'' ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `detail_image`
--

INSERT INTO `detail_image` (`dImage`, `productID`) VALUES
('3CE_matte_$13\\115\\mood-recipe_115_diamge_1.jpg', 0),
('3CE_matte_$13\\115\\mood-recipe_115_dimage2.jpg', 0),
('3CE_matte_$13\\116\\mood-recipe_116_dimage_1.jpg', 1),
('3CE_matte_$13\\116\\mood-recipe_116_dimage_2.jpg', 1),
('3CE_matte_$13\\117\\mood-recipe_117_dimage_1.jpg', 2),
('3CE_matte_$13\\117\\mood-recipe_117_dimage_2.jpg', 2),
('Charlotte Tilbury\\bondgirl_matte_$24matterevolution_bondgirl_dimage_2.jpg', 3),
('Charlotte Tilbury\\bondgirl_matte_$24\\matterevolution_bondgirl_diamge_1.jpg', 3),
('Charlotte Tilbury\\coachella-coral_sheer_$24\\k.i.s.s.i.n.g_coachella-coral_dimage_1.jpg', 4),
('Charlotte Tilbury\\coachella-coral_sheer_$24\\k.i.s.s.i.n.g_coachella-coral_dimage_2.jpg', 4),
('Charlotte Tilbury\\halloffame_lipgross_sheer_$16.5\\halloffame_diamge_1.jpg', 5),
('Charlotte Tilbury\\halloffame_lipgross_sheer_$16.5\\halloffame_dimage_2.jpg', 5),
('Charlotte Tilbury\\seduction_lipgross_sheer_$16.5\\seduction_dimage_1.jpg', 6),
('Charlotte Tilbury\\seduction_lipgross_sheer_$16.5\\seduction_dimage_2.jpg', 6),
('Charlotte Tilbury\\stonedrose_sheer_$24\\kissing_stoned-rose_dimage_2.jpg', 7),
('Charlotte Tilbury\\stonedrose_sheer_$24\\kissing_stoned_rose_dimage_1.jpg', 7),
('Charlotte Tilbury\\unleashme_lipgross_sheer_$16.5\\unleashme_diamge_2.jpg', 8),
('Charlotte Tilbury\\unleashme_lipgross_sheer_$16.5\\unleashme_dimage_1.jpg', 8),
('Charlotte Tilbury\\walkofshame_matte_$24\\matterevolution_walkofshame_diamge_1.jpg', 9),
('Charlotte Tilbury\\walkofshame_matte_$24\\matterevolution_walkofshame_dimage_2.jpg', 9),
('Huda beauty_matte\\cheerleader_$18\\liquidmatte_cheerleader_dimage_1.jpg', 10),
('Huda beauty_matte\\cheerleader_$18\\liquidmatte_cheerleader_dimage_2.jpg', 10),
('Huda beauty_matte\\heartbreaker_$18\\liquidmatte_heartbreaker_dimage_1.jpg', 11),
('Huda beauty_matte\\heartbreaker_$18\\liquidmatte_heartbreaker_dimage_2.jpg', 11),
('Huda beauty_matte\\icon_$16\\icon_dimage_1.jpg', 12),
('Huda beauty_matte\\icon_$16\\icon_dimage_2.jpg', 12),
('Huda beauty_matte\\medusa_$16\\medusa_dimage_1.jpg', 13),
('Huda beauty_matte\\medusa_$16\\medusa_timage_2.jpg', 13),
('Huda beauty_matte\\trendsetter_$18\\liquidmatte_trendsetter_dimage_1.jpg', 14),
('Huda beauty_matte\\trendsetter_$18\\liquidmatte_trendsetter_dimage_2.jpg', 14),
('Huda beauty_matte\\trophwife_$18\\liquidmatte_trophywife_dimage_1.jpg', 15),
('Huda beauty_matte\\trophwife_$18\\liquidmatte_trophywife_dimage_2.jpg', 15),
('Huda beauty_matte\\vixen_$16\\vixen_dimage_1.jpg', 16),
('Huda beauty_matte\\vixen_$16\\vixen_dimage_2.jpg', 16),
('Kevyn Aucoin_satin_$48\\bloodroses\\bloodroses_dimage_1.jpg', 26),
('Kevyn Aucoin_satin_$48\\bloodroses\\bloodroses_dimage_2.jpg', 26),
('Kevyn Aucoin_satin_$48\\cashmere\\cashmere_dimage_1.jpg', 27),
('Kevyn Aucoin_satin_$48\\cashmere\\cashmere_dimage_2.jpg', 27),
('Kevyn Aucoin_satin_$48\\silk\\silk_dimage_1.jpg', 28),
('Kevyn Aucoin_satin_$48\\silk\\silk_dimage_2.jpg', 28),
('SHISEIDO\\Rouge Rouge_$28\\BR322\\cream_BR322_dimage1.jpg', 17),
('SHISEIDO\\Rouge Rouge_$28\\BR322\\cream_BR322_dimage2.jpg', 17),
('SHISEIDO\\Rouge Rouge_$28\\BR721\\cream_BR721_dimage1.jpg', 18),
('SHISEIDO\\Rouge Rouge_$28\\BR721\\cream_BR721_dimage2.jpg', 18),
('SHISEIDO\\Rouge Rouge_$28\\OR417\\cream_OR417_dimage1.jpg', 19),
('SHISEIDO\\Rouge Rouge_$28\\OR417\\cream_OR417_dimage2.jpg', 19),
('SHISEIDO\\Rouge Rouge_$28\\RD309\\cream_RD309_dimage1.jpg', 20),
('SHISEIDO\\Rouge Rouge_$28\\RD309\\cream_RD309_dimage2.jpg', 20),
('SHISEIDO\\Rouge Rouge_$28\\RD310\\cream_RD310_dimage1.jpg', 21),
('SHISEIDO\\Rouge Rouge_$28\\RD310\\cream_RD310_dimage2.jpg', 21),
('SHISEIDO\\Rouge Rouge_$28\\RD501\\cream_RD501_dimage1.jpg', 22),
('SHISEIDO\\Rouge Rouge_$28\\RD501\\cream_RD501_dimage2.jpg', 22),
('SHISEIDO\\Rouge Rouge_$28\\RD502\\cream_RD502_dimage1.jpg', 23),
('SHISEIDO\\Rouge Rouge_$28\\RD502\\cream_RD502_dimage2.jpg', 23),
('SHISEIDO\\Shimmering Rouge_$25\\RS308\\sheer_RS308_dimage1.jpg', 24),
('SHISEIDO\\Shimmering Rouge_$25\\RS308\\sheer_RS308_dimage2.jpg', 24),
('SHISEIDO\\Smoothing Lip Pencil_$20\\RD708\\matte_RD708_dimage1.jpg', 25),
('SHISEIDO\\Smoothing Lip Pencil_$20\\RD708\\matte_RD708_dimage2.jpg', 25),
('TOM FORD\\LIP COLOR MATTE_$54\\DECEIVER\\matte_DECEIVER_diamge1.jpg', 29),
('TOM FORD\\LIP COLOR MATTE_$54\\DECEIVER\\matte_DECEIVER_diamge2.jpg', 29),
('TOM FORD\\LIP COLOR MATTE_$54\\FIRST TIME\\matte_FIRST TIME_diamge2.jpg', 30),
('TOM FORD\\LIP COLOR MATTE_$54\\FIRST TIME\\matte_FIRST TIME_dimage1.jpg', 30),
('TOM FORD\\LIP COLOR MATTE_$54\\INDEEP\\matte_INDEEP_diamge1.jpg', 31),
('TOM FORD\\LIP COLOR MATTE_$54\\INDEEP\\matte_INDEEP_dimage2.jpg', 31),
('TOM FORD\\LIP COLOR MATTE_$54\\PUSSYCAT\\matte_PUSSYCAT_diamge1.jpg', 32),
('TOM FORD\\LIP COLOR MATTE_$54\\PUSSYCAT\\matte_PUSSYCAT_diamge2.jpg', 32),
('TOM FORD\\LIP COLOR SHEER_$54\\PARADISO\\sheer_PARADISO_diamge1.jpg', 33),
('TOM FORD\\LIP COLOR SHEER_$54\\PARADISO\\sheer_PARADISO_diamge2.jpg', 33),
('TOM FORD\\LIP COLOR SHEER_$54\\SWEET SPOT\\sheer_SWEET SPOT_dimage1.jpg', 34),
('TOM FORD\\LIP COLOR SHEER_$54\\SWEET SPOT\\sheer_SWEET SPOT_dimage2.jpg', 34),
('TOM FORD\\PATENT FINISH LIP COLOR_$54\\INFAMY\\satin_INFAMY_dimage1.jpg', 35),
('TOM FORD\\PATENT FINISH LIP COLOR_$54\\INFAMY\\satin_INFAMY_dimage2.jpg', 35),
('TOM FORD\\PATENT FINISH LIP COLOR_$54\\NO VACANCY\\satin_NO VACANCY_dimage1.jpg', 36),
('TOM FORD\\PATENT FINISH LIP COLOR_$54\\NO VACANCY\\satin_NO VACANCY_dimage2.jpg', 36),
('TOM FORD\\PATENT FINISH LIP COLOR_$54\\RED CORSET\\satin_RED CORSET_dimage1.jpg', 37),
('TOM FORD\\PATENT FINISH LIP COLOR_$54\\RED CORSET\\satin_RED CORSET_dimage2.jpg', 37),
('TOM FORD\\ULTRA SHINE_$47\\PEACH ABSOLUT\\gloss_PEACH ABSOLUT_dimage1.jpg', 38),
('TOM FORD\\ULTRA SHINE_$47\\PINK GUILT\\gloss_PINK GUILT_dimage1.jpg', 39),
('TOM FORD\\ULTRA SHINE_$47\\PINK GUILT\\gloss_PINK GUILT_dimage2.jpg', 39),
('TOM FORD\\ULTRA SHINE_$47\\ROSE CRUSH\\gloss_ROSE CRUSH_dimage1.jpg', 40),
('TOM FORD\\ULTRA SHINE_$47\\ROSE CRUSH\\gloss_ROSE CRUSH_dimage2.jpg', 40),
('TOM FORD\\ULTRA SHINE_$47\\WET VIOLET\\gloss_WET VIOLET_dimage1.jpg', 41),
('TOM FORD\\ULTRA SHINE_$47\\WET VIOLET\\gloss_WET VIOLET_dimage2.jpg', 41),
('TOM FORD\\\\ULTRA SHINE_$47\\\\PEACH ABSOLUT\\\\gloss_PEACH ABSOLUT_dimage2.jpg', 38);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(45) NOT NULL COMMENT 'Products'' Name',
  `brand` varchar(45) NOT NULL COMMENT 'Products'' brand',
  `tImage` varchar(200) NOT NULL COMMENT 'Products'' image',
  `shades` varchar(50) NOT NULL COMMENT 'Products'' shades',
  `texture` varchar(10) DEFAULT NULL COMMENT 'Products''  texture',
  `lip` varchar(20) NOT NULL,
  `information` varchar(500) NOT NULL COMMENT 'Products'' information',
  `price` double NOT NULL COMMENT 'Product’s price',
  `out_of_stock` tinyint(1) NOT NULL COMMENT 'The product is temporarily out-of-stock or not. It would be control by vendor and if it is true, the status cannot be shipped.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`productID`, `productName`, `brand`, `tImage`, `shades`, `texture`, `lip`, `information`, `price`, `out_of_stock`) VALUES
(0, 'Mood Recipe', '3CE', '3CE_matte_$13\\115\\mood-recipe_115_timage.jpg', '115', 'matte', 'lipstick', '1', 13, 0),
(1, 'Mood Recipe', '3CE', '3CE_matte_$13\\116\\mood-recipe_116_timage.jpg', '116', 'matte', 'lipstick', '1', 13, 0),
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
(41, 'ULTRA SHINE', 'TOM FORD', 'TOM FORD\\ULTRA SHINE_$47\\WET VIOLET\\gloss_WET VIOLET_timage.jpg', 'WET VIOLET', 'sheer', 'liquid lipstick', '1', 47, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `product_rate`
--

CREATE TABLE `product_rate` (
  `productID` int(8) NOT NULL,
  `customerID` int(11) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `product_review`
--

CREATE TABLE `product_review` (
  `productID` int(8) NOT NULL COMMENT 'Product''s ID',
  `customerID` int(8) NOT NULL COMMENT 'Customer''s ID',
  `reviews` varchar(500) NOT NULL COMMENT 'Short reviews for products(written by customer)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `purchase_order`
--

CREATE TABLE `purchase_order` (
  `P.O.Num` int(8) NOT NULL COMMENT 'Purchase Order number.',
  `status` varchar(45) NOT NULL COMMENT 'The states of this purchase, can be pending, hold, shipped and cancelled.',
  `customerID` int(8) NOT NULL COMMENT 'Customers'' ID',
  `shipping_time` datetime DEFAULT NULL COMMENT 'Shipping date and time',
  `cancel_time` datetime DEFAULT NULL COMMENT 'Cancel date and time',
  `cancel_by` varchar(10) DEFAULT NULL COMMENT 'The one who cancels the order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `purchase_order`
--

INSERT INTO `purchase_order` (`P.O.Num`, `status`, `customerID`, `shipping_time`, `cancel_time`, `cancel_by`) VALUES
(1, 'pending', 1, NULL, NULL, NULL),
(2, 'Hold', 2, NULL, NULL, NULL),
(3, 'Shipped', 3, '2018-02-06 15:16:14', NULL, NULL),
(4, 'Cancelled', 4, NULL, '2018-02-06 10:29:34', 'Wilson Ng');

-- --------------------------------------------------------

--
-- 資料表結構 `purchase_product`
--

CREATE TABLE `purchase_product` (
  `productID` int(8) NOT NULL COMMENT 'Product''s ID',
  `P.O.Num` int(8) NOT NULL COMMENT 'Purchase Order number',
  `price` double NOT NULL COMMENT 'Price per products',
  `quantity` int(5) NOT NULL COMMENT 'Quantity of this purchased product'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `purchase_product`
--

INSERT INTO `purchase_product` (`productID`, `P.O.Num`, `price`, `quantity`) VALUES
(1, 1, 13, 1),
(31, 1, 54, 1),
(5, 2, 33, 2),
(10, 3, 18, 1),
(11, 3, 18, 1),
(23, 4, 28, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `productID` int(8) NOT NULL COMMENT 'Products'' ID',
  `customerID` int(8) NOT NULL COMMENT 'Customers'' ID',
  `quantity` int(3) NOT NULL COMMENT 'Quantity of this purchased product'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `shopping_cart`
--

INSERT INTO `shopping_cart` (`productID`, `customerID`, `quantity`) VALUES
(1, 1, 1),
(5, 2, 2),
(10, 3, 1),
(11, 3, 1),
(23, 4, 1),
(31, 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `vendor_account`
--

CREATE TABLE `vendor_account` (
  `VID` int(8) UNSIGNED NOT NULL COMMENT 'An unique id of vendor.',
  `password` varchar(45) NOT NULL COMMENT 'Vendor''s password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `customerID` (`customerID`);

--
-- 資料表索引 `detail_image`
--
ALTER TABLE `detail_image`
  ADD PRIMARY KEY (`dImage`,`productID`),
  ADD KEY `di_product_fk` (`productID`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productID_UNIQUE` (`productID`);

--
-- 資料表索引 `product_rate`
--
ALTER TABLE `product_rate`
  ADD KEY `pra_customer_fk` (`customerID`),
  ADD KEY `pra_product_fk` (`productID`);

--
-- 資料表索引 `product_review`
--
ALTER TABLE `product_review`
  ADD KEY `pre_product_fk` (`productID`),
  ADD KEY `pre_customer_fk` (`customerID`);

--
-- 資料表索引 `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`P.O.Num`),
  ADD UNIQUE KEY `P.O.Num_UNIQUE` (`P.O.Num`),
  ADD UNIQUE KEY `customerID_UNIQUE` (`customerID`);

--
-- 資料表索引 `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD KEY `pp_ponum_fk` (`P.O.Num`),
  ADD KEY `pp_product_fk` (`productID`);

--
-- 資料表索引 `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`productID`,`customerID`),
  ADD UNIQUE KEY `customerID_UNIQUE` (`customerID`,`productID`) USING BTREE;

--
-- 資料表索引 `vendor_account`
--
ALTER TABLE `vendor_account`
  ADD PRIMARY KEY (`VID`),
  ADD UNIQUE KEY `VID_UNIQUE` (`VID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `detail_image`
--
ALTER TABLE `detail_image`
  ADD CONSTRAINT `di_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `product_rate`
--
ALTER TABLE `product_rate`
  ADD CONSTRAINT `pra_customer_fk` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pra_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 資料表的 Constraints `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `pre_customer_fk` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pre_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 資料表的 Constraints `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `po_customer_fk` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 資料表的 Constraints `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD CONSTRAINT `pp_ponum_fk` FOREIGN KEY (`P.O.Num`) REFERENCES `purchase_order` (`P.O.Num`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pp_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 資料表的 Constraints `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `sc_customer_fk` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sc_product_fk` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
