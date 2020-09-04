-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-02-04 10:01:30
-- 服务器版本： 5.7.21-log
-- PHP Version: 7.2.1

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
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `productID` int(8) NOT NULL COMMENT 'Products'' ID',
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
-- 转存表中的数据 `product`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productID_UNIQUE` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
