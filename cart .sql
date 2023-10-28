-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cart`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cart_his`
--

CREATE TABLE `cart_his` (
  `member_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `cart_his`
--

INSERT INTO `cart_his` (`member_id`, `product_id`, `product_name`, `product_price`) VALUES
(13, 5, 'Nutri代餐奶昔', 28);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gender` varchar(99) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `email`, `password`, `gender`, `birth`, `phone`) VALUES
(3, '1234', 'zxc@gmail.com', '123456', '女', '2003-07-09', '0912345678'),
(5, '456', 'azxc@gmail.com', '789', '女', '2021-12-02', '0912345678'),
(8, '456', 'mpninia@gmail.com', '789', '男', '2021-12-01', '0912345678'),
(10, '管理員', 'root', '123456', '女', '2022-01-12', '0912345678'),
(13, '黃威凱', '3725@gmail.com', '123456', '男', '2022-01-26', '0974092222'),
(20, '王薇琳', 'aileen3725@gmail.com', '12345', '女', '2022-01-04', '0974097503');

-- --------------------------------------------------------

--
-- 資料表結構 `no`
--

CREATE TABLE `no` (
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `order_p`
--

CREATE TABLE `order_p` (
  `first` varchar(1) NOT NULL,
  `last` varchar(2) NOT NULL,
  `pnumber` int(10) NOT NULL,
  `ordernumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `order_p`
--

INSERT INTO `order_p` (`first`, `last`, `pnumber`, `ordernumber`) VALUES
('王', '薇琳', 974097522, '61d9aaf50ca40'),
('薇', '王', 974097503, '61daf27fc426c'),
('黃', '威凱', 978564231, '61dbc1e8a7811'),
('王', '薇琳', 974097503, '61dbce01f21fc');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id_product`, `name`, `description`, `price`) VALUES
(1, 'Product 1', 'Some random description', '15.00'),
(2, 'Product 2', 'Some random description', '20.00');

-- --------------------------------------------------------

--
-- 資料表結構 `product_all`
--

CREATE TABLE `product_all` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_all`
--

INSERT INTO `product_all` (`product_id`, `product_name`, `product_price`) VALUES
(1, 'Joyulche代餐奶昔', 35),
(2, 'BB Time代餐奶昔', 139),
(3, 'GRI代餐奶昔 罐裝', 1399),
(4, 'Kakao 奶昔 3入', 270),
(5, 'Nutri代餐奶昔', 28),
(6, 'Myprotein乳清蛋白', 1699),
(7, 'QNT 素食蛋白粉', 499),
(8, '分離蛋白-巧克力', 769),
(9, 'Yushun紅藜麥蛋白', 1499),
(10, 'MARS低脂乳清', 1180),
(11, '透明分離乳清蛋白粉', 1216),
(12, 'VEGAN代餐奶昔', 799),
(13, '綜合維他命片(60片)\r\n', 920),
(14, '30日-常酵康', 1380),
(15, 'ISP纖益菌 7天組', 350),
(16, 'Smeal代餐奶昔', 830),
(17, '高蛋白威化餅乾\r\n', 1152),
(18, '脆粒花生抹醬 無加糖\r\n', 290),
(19, '純天然花生醬\r\n', 567),
(20, '高蛋白抹醬\r\n', 720),
(21, 'iCreatine肌酸\r\n', 359),
(22, 'Moma無糖燕麥奶\r\n', 199),
(23, 'BCAA 氨基酸粉\r\n', 2380),
(24, '莓果高纖堅果榖物\r\n', 272);

-- --------------------------------------------------------

--
-- 資料表結構 `product_health`
--

CREATE TABLE `product_health` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_health`
--

INSERT INTO `product_health` (`product_id`, `product_name`, `product_price`) VALUES
(1, '綜合維他命片(60片)', 920),
(2, '30日-常酵康', 1380),
(3, 'ISP纖益菌 7天組', 350);

-- --------------------------------------------------------

--
-- 資料表結構 `product_milkshake`
--

CREATE TABLE `product_milkshake` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_milkshake`
--

INSERT INTO `product_milkshake` (`product_id`, `product_name`, `product_price`) VALUES
(1, 'Joyulche代餐奶昔', 35),
(2, 'BB Time代餐奶昔', 139),
(3, 'GRI代餐奶昔 罐裝', 1399),
(4, 'Kakao 奶昔 3入', 270),
(5, 'Nutri代餐奶昔', 28),
(6, 'VEGAN代餐奶昔', 799),
(7, 'Smeal代餐奶昔', 830);

-- --------------------------------------------------------

--
-- 資料表結構 `product_other`
--

CREATE TABLE `product_other` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_other`
--

INSERT INTO `product_other` (`product_id`, `product_name`, `product_price`) VALUES
(1, '高蛋白威化餅乾', 1152),
(2, '脆粒花生抹醬 無加糖', 290),
(3, '純天然花生醬', 567),
(4, '高蛋白抹醬', 720),
(5, 'iCreatine肌酸', 359),
(6, 'Moma無糖燕麥奶', 199),
(7, 'BCAA 氨基酸粉', 2380),
(8, '莓果高纖堅果榖物', 272);

-- --------------------------------------------------------

--
-- 資料表結構 `product_whey`
--

CREATE TABLE `product_whey` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `product_whey`
--

INSERT INTO `product_whey` (`product_id`, `product_name`, `product_price`) VALUES
(1, 'Myprotein乳清蛋白', 1699),
(2, 'QNT 素食蛋白粉', 499),
(3, '分離蛋白-巧克力', 769),
(4, 'Yushun紅藜麥蛋白', 1499),
(5, 'MARS低脂乳清', 1180),
(6, '透明分離乳清蛋白粉\r\n', 1216);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `ordernumber` varchar(30) NOT NULL,
  `name` varchar(11) NOT NULL,
  `first` varchar(11) NOT NULL,
  `last` varchar(11) NOT NULL,
  `pnumber` varchar(11) NOT NULL,
  `add1` varchar(11) NOT NULL,
  `add2` varchar(11) NOT NULL,
  `add3` varchar(11) NOT NULL,
  `visa` int(16) NOT NULL,
  `firstname` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `back` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `companyID` int(8) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `freight` int(10) NOT NULL,
  `TotalCost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`ordernumber`, `name`, `first`, `last`, `pnumber`, `add1`, `add2`, `add3`, `visa`, `firstname`, `lastname`, `month`, `year`, `back`, `email`, `companyID`, `subtotal`, `freight`, `TotalCost`) VALUES
('61c4d07c37abe', '小小兵', '小', '小兵', '0985965215', '雲林縣', '虎尾市', '可能是幸福路87號', 2147483647, '龍', '傲天', 4, 2024, 859, '87878@gmail.com', 87878787, 2656, 300, 2956),
('61c756525178e', '王薇琳', '王', '薇琳', '0974097511', '高雄市', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 1, 2022, 123, 'aileen3725@gmail.com', 12345678, 35, 300, 335),
('61c831788d6c3', '薇琳王', '薇琳', '王', '0974097503', '高雄市', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 11, 2029, 123, 'aileen3725@gmail.com', 0, 139, 300, 439),
('61cc2ed0f0766', '琳王', '琳', '王', '0974097503', '大學南路211號', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 10, 2029, 123, 'aileen3725@gmail.com', 0, 270, 300, 570),
('61cc2fb242e63', '薇琳王', '薇琳', '王', '0974097503', '大學南路211號', '11', '大學南路211號', 2147483647, '王薇琳', '薇琳', 11, 2029, 123, 'aileen3725@gmail.com', 0, 270, 300, 570),
('61cda70a7e8dd', '111', '11', '1', '0974097503', '大學南路211號', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 10, 2029, 123, 'aileen3725@gmail.com', 0, 1608, 300, 1908),
('61cdb6e6c0679', '朱雨琳', '朱', '雨琳', '0974097503', '大學南路211號', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 10, 2030, 123, 'aileen3725@gmail.com', 0, 1399, 300, 1699),
('61d6f0c65e52e', '薇琳王', '薇琳', '王', '0974097503', '大學南路211號', '楠梓區', '大學南路211號', 2147483647, '王薇琳', '薇琳', 9, 2030, 211, 'aileen3725@gmail.com', 0, 35, 300, 335),
('61d6f2a9b6e80', '王薇琳', '王', '薇琳', '0974097503', '高雄市', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 9, 2028, 123, 'aileen3725@gmail.com', 0, 340, 300, 640),
('61d6f59a57dc9', '陳曉明', '陳', '曉明', '0974097544', '高雄市', '鼓山區', '高雄市鼓山區蓮海路70', 2147483647, '陳', '曉明', 8, 2027, 211, 'aileen3725@gmail.com', 0, 972, 300, 1272),
('61d85a20e5d0e', '劉宇柔', '劉', '宇柔', '0974564857', '高雄市', '鼓山區', '蓮海路70號', 2147483647, '王', '薇琳', 10, 2030, 231, 'aileen3725@gmail.com', 0, 1538, 300, 1838),
('61d9aaf50ca40', '王薇琳', '王', '薇琳', '0974097522', '高雄市', '鼓山區', '蓮海路70號', 2147483647, '王', '薇琳', 8, 2027, 123, 'aileen3725@gmail.com', 0, 305, 300, 605),
('61daf27fc426c', '薇琳王', '薇琳', '王', '0974097503', '大學南路211號', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 10, 2028, 231, 'aileen3725@gmail.com', 0, 305, 300, 605),
('61dbc1e8a7811', '黃威凱', '黃', '威凱', '0978564231', '高雄市', '鼓山區', '蓮海路70號', 2147483647, '黃', '威凱', 9, 2026, 123, 'aileen@gmail.com', 0, 1094, 300, 1394),
('61dbce01f21fc', '王薇琳', '王', '薇琳', '0974097503', '大學南路211號', '楠梓區', '大學南路211號', 2147483647, '王', '薇琳', 9, 2028, 231, 'aileen3725@gmail.com', 0, 139, 300, 439);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`ordernumber`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
