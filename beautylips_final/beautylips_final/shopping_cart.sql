-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-03-11 13:30:30
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
