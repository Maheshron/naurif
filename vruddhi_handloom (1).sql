-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 07:13 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vruddhi_handloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_pass` text NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`) VALUES
(1, 'VGS', 'sumithravgs@gmail.com', 'vgs', 'avatar-4.png', '8293238923');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_img` text NOT NULL,
  `p_title` text NOT NULL,
  `p_price` int(11) NOT NULL,
  `ip_add` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Women'),
(2, 'Men'),
(3, 'Kids'),
(4, 'Home Linen'),
(5, ''),
(7, 'Decor & Gifts');

-- --------------------------------------------------------

--
-- Table structure for table `customers_orders`
--

CREATE TABLE `customers_orders` (
  `id` int(11) NOT NULL,
  `razorpay_order_id` text NOT NULL,
  `payment_id` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mail` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `size` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummycompanydataruchitha`
--

CREATE TABLE `dummycompanydataruchitha` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comapnyname` varchar(100) DEFAULT NULL,
  `pnoneno` varchar(10) DEFAULT NULL,
  `faxno` varchar(50) DEFAULT NULL,
  `orcityid` varchar(20) DEFAULT NULL,
  `shipdate` varchar(50) DEFAULT NULL,
  `orginzip` varchar(50) DEFAULT NULL,
  `orgsateid` varchar(50) DEFAULT NULL,
  `desizip` varchar(50) DEFAULT NULL,
  `descityid` varchar(20) DEFAULT NULL,
  `desstateid` varchar(20) DEFAULT NULL,
  `empstops` varchar(50) DEFAULT NULL,
  `companyid` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummycompanydate`
--

CREATE TABLE `dummycompanydate` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comapnyname` varchar(100) DEFAULT NULL,
  `pnoneno` varchar(10) DEFAULT NULL,
  `faxno` varchar(50) DEFAULT NULL,
  `orcityid` varchar(20) DEFAULT NULL,
  `shipdate` varchar(50) DEFAULT NULL,
  `orginzip` varchar(50) DEFAULT NULL,
  `orgsateid` varchar(50) DEFAULT NULL,
  `desizip` varchar(50) DEFAULT NULL,
  `descityid` varchar(20) DEFAULT NULL,
  `desstateid` varchar(20) DEFAULT NULL,
  `empstops` varchar(50) DEFAULT NULL,
  `companyid` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentspay`
--

CREATE TABLE `paymentspay` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_qty` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `product_img5` text NOT NULL,
  `product_img6` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `weaver` text NOT NULL,
  `saree_length` text NOT NULL,
  `blouse_length` text NOT NULL,
  `top_length` text NOT NULL,
  `bottom_length` text NOT NULL,
  `dupatta_length` text NOT NULL,
  `code` text NOT NULL,
  `weight` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_price`, `p_cat_id`, `date`, `weaver`, `saree_length`, `blouse_length`, `top_length`, `bottom_length`, `dupatta_length`, `code`, `weight`) VALUES
(2, 'MAHESHWARI PRINTED SAREE', 'IMG_1959.jpg', 'IMG_1960.jpg', 'IMG_1963.jpg', 'IMG_1968.jpg', 'IMG_1970.jpg', 'IMG_1971.jpg', 3100, 16, '2019-03-15 11:56:00', 'AMIN', '5.5 ', '0.80 ', '', '', '', 'MPS226/1', '380'),
(3, 'MAHESHWARI PRINTED SAREE', 'IMG_1973.jpg', 'IMG_1974.jpg', 'IMG_1978.jpg', 'IMG_1979.jpg', 'IMG_1986.jpg', 'IMG_1987.jpg', 3100, 16, '2019-03-15 12:05:15', 'AMIN', '5.5', '0.80 ', '', '', '', 'MPS226/2', '400'),
(4, 'MAHESHWARI PRINTED SAREE', 'IMG_2006.jpg', 'IMG_2007.jpg', 'IMG_2008.jpg', 'IMG_2011.jpg', 'IMG_2017.jpg', 'IMG_2020.jpg', 3100, 16, '2019-03-15 12:08:13', 'RAM BHAI', '5.5 ', '0.80', '', '', '', 'MPS226/4', '370'),
(5, 'MAHESHWARI PRINTED SAREE', 'IMG_2021.jpg', 'IMG_2023.jpg', 'IMG_2025.jpg', 'IMG_2028.jpg', 'IMG_2031.jpg', '', 3100, 16, '2019-03-15 12:11:06', 'RAM BHAI', '5.5', '0.80', '', '', '', 'MPS226/5', '360'),
(6, 'MAHESHWARI PRINTED SAREE', 'IMG_2106.jpg', 'IMG_2107.jpg', 'IMG_2108.jpg', 'IMG_2109.jpg', 'IMG_2111.jpg', 'IMG_2117.jpg', 3100, 16, '2019-03-15 12:14:51', 'RAM BHAI', '5.5', '0.80', '', '', '', 'MPS226/7', '410'),
(7, 'MAHESHWARI PRINTED SAREE', 'IMG_2118.jpg', 'IMG_2119.jpg', 'IMG_2121.jpg', 'IMG_2123.jpg', 'IMG_2126.jpg', 'IMG_2132.jpg', 3100, 16, '2019-03-15 12:17:36', 'RAM BHAI', '5.5', '0.80', '', '', '', 'MPS226/8', '420'),
(8, 'MAHESHWARI PRINTED SAREE', 'IMG_2132A.jpg', 'IMG_2133.jpg', 'IMG_2135.jpg', 'IMG_2136.jpg', 'IMG_2137.jpg', 'IMG_2140.jpg', 3100, 16, '2019-03-15 12:20:54', 'RAM BHAI', '5.5 ', '0.80 ', '', '', '', 'MPS184/1', '410'),
(9, 'MAHESHWARI PRINTED SAREE', 'IMG_2140A.jpg', 'IMG_2141.jpg', 'IMG_2142.jpg', 'IMG_2144.jpg', 'IMG_2146.jpg', 'IMG_2147.jpg', 3100, 16, '2019-03-15 12:23:44', 'KRISHNA', '5.5', '0.80', '', '', '', 'MPS 184/2', '415'),
(10, 'MAHESHWARI PRINTED SAREE', 'IMG_2156A.jpg', 'IMG_2157.jpg', 'IMG_2160.jpg', 'IMG_2162.jpg', 'IMG_2166.jpg', '', 3100, 16, '2019-03-15 12:26:51', 'KRISHNA', '5.5 ', '0.80', '', '', '', 'MPS184/3', '380'),
(11, 'MAHESHWARI PRINTED SAREE', 'IMG_2166A.jpg', 'IMG_2167.jpg', 'IMG_2168.jpg', 'IMG_2173.jpg', 'IMG_2174.jpg', '', 3100, 16, '2019-03-15 12:29:17', 'KRISHNA', '5.5', '0.80', '', '', '', 'MPS184/4', '390'),
(12, 'MAHESHWARI PRINTED SAREE', 'IMG_2174A.jpg', 'IMG_2175.jpg', 'IMG_2176.jpg', 'IMG_2178.jpg', 'IMG_2179.jpg', '', 3100, 16, '2019-03-15 12:31:29', 'KRISHNA', '5.5 ', '0.80', '', '', '', 'MPS158/2', '370'),
(13, 'MAHESHWARI PRINTED SAREE', 'IMG_2182.jpg', 'IMG_2183.jpg', 'IMG_2185.jpg', 'IMG_2187.jpg', 'IMG_2188.jpg', '', 3100, 16, '2019-03-15 12:33:42', 'R.KHAN', '5.5 ', '0.80', '', '', '', 'MPS226/9', '400'),
(28, 'UPPADA PURE SILK SAREE', 'IMG_3936.jpg', 'IMG_3937.jpg', 'IMG_3938.jpg', 'IMG_3940.jpg', 'IMG_3942.jpg', '', 7400, 15, '2019-03-16 05:53:21', 'SUBBHA RAO', '5.5 ', '0.80', '', '', '', 'UPS398', '580'),
(15, 'MAHESHWARI PRINTED SAREE', 'IMG_2189.jpg', 'IMG_2190.jpg', 'IMG_2193.jpg', 'IMG_2195.jpg', 'IMG_2196.jpg', '', 3100, 16, '2019-03-16 05:49:01', 'R.KHAN', '5.5', '0.80', '', '', '', 'MPS226/10', '395'),
(16, 'MAHESHWARI PRINTED SAREE', 'IMG_2221.jpg', 'IMG_2222.jpg', 'IMG_2224.jpg', 'IMG_2225.jpg', 'IMG_2226.jpg', '', 3950, 16, '2019-03-15 12:46:06', 'R.KHAN', '5.5 ', '0.80', '', '', '', 'MPS141', '420'),
(17, 'MAHESHWARI PRINTED SAREE', 'IMG_2228.jpg', 'IMG_2229.jpg', 'IMG_2231.jpg', 'IMG_2232.jpg', 'IMG_2234.jpg', '', 3100, 16, '2019-03-15 12:48:25', 'R.KHAN', '5.5', '0.80 ', '', '', '', 'MPS184/6', '400'),
(18, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2259.jpg', 'IMG_2260.jpg', 'IMG_2261.jpg', 'IMG_2264.jpg', 'IMG_2266.jpg', '', 5900, 15, '2019-03-16 05:17:03', 'MURTI ', '5.5', '0.0 ', '', '', '', 'TSP295', '390'),
(19, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2267.jpg', 'IMG_2268.jpg', 'IMG_2269.jpg', 'IMG_2270.jpg', 'IMG_2272.jpg', '', 5150, 15, '2019-03-16 05:20:09', 'MURTI ', '5.5 ', '0.0', '', '', '', 'TSP289', '300'),
(20, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2272a.jpg', 'IMG_2273.jpg', 'IMG_2276.jpg', 'IMG_2280.jpg', 'IMG_2282.jpg', 'IMG_2283.jpg', 6550, 15, '2019-03-16 05:22:40', 'MURTI ', '5.5 ', '0.0 ', '', '', '', 'TSP294', '320'),
(21, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2286.jpg', 'IMG_2287.jpg', 'IMG_2288.jpg', 'IMG_2291.jpg', 'IMG_2292.jpg', 'IMG_2294.jpg', 6550, 15, '2019-03-16 05:25:30', 'R REDDY', '5.5 ', '0.0', '', '', '', 'TSP294/1', '320'),
(22, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2295.jpg', 'IMG_2296.jpg', 'IMG_2298.jpg', 'IMG_2300.jpg', 'IMG_2301.jpg', '', 6550, 15, '2019-03-16 05:27:40', 'R REDDY', '5.5 ', '0.0', '', '', '', 'TSP296', '390'),
(23, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2309.jpg', 'IMG_2310.jpg', 'IMG_2311.jpg', 'IMG_2313.jpg', 'IMG_2314.jpg', '', 5510, 15, '2019-03-16 05:30:01', 'R REDDY', '5.5', '0.0.', '', '', '', 'TSP292', '350'),
(24, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2314A.jpg', 'IMG_2315.jpg', 'IMG_2318.jpg', 'IMG_2320.jpg', 'IMG_2321.jpg', '', 4800, 15, '2019-03-16 05:32:09', 'Siddaramaiah', '5.5', '0.0 ', '', '', '', 'TSP287', '280'),
(25, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2321A.jpg', 'IMG_2322.jpg', 'IMG_2324.jpg', 'IMG_2325.jpg', 'IMG_2327.jpg', '', 6550, 15, '2019-03-16 05:34:12', 'Siddaramaiah', '5.5', '0.0 ', '', '', '', 'TSP290', '300'),
(26, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2327A.jpg', 'IMG_2328.jpg', 'IMG_2329.jpg', 'IMG_2330.jpg', 'IMG_2332.jpg', 'IMG_2335.jpg', 5800, 15, '2019-03-16 05:36:44', 'Siddaramaiah', '5.5.', '0.0', '', '', '', 'TSP258', '350'),
(27, 'TRADITIONAL SAREE PRINTED KT', 'IMG_2340.jpg', 'IMG_2341.jpg', 'IMG_2342.jpg', 'IMG_2343.jpg', 'IMG_2345.jpg', 'IMG_2347.jpg', 6550, 15, '2019-03-16 05:40:41', 'Kumaraswamy', '5.5', '0.0', '', '', '', 'TSP296/1', '400'),
(29, 'MALKHA COTTON SAREE', 'IMG_3962A.jpg', 'IMG_3963.jpg', 'IMG_3964.jpg', 'IMG_3965.jpg', 'IMG_3967.jpg', '', 1550, 14, '2019-03-16 05:56:22', 'SUBBHA RAO', '5.5', '0.0', '', '', '', 'MS878/1', '400'),
(30, 'MALKHA COTTON SAREE', 'IMG_3981.jpg', 'IMG_3982.jpg', 'IMG_3983.jpg', 'IMG_3984.jpg', 'IMG_3985.jpg', '', 1550, 14, '2019-03-16 05:58:24', 'M RAO', '5.5', '0.0.', '', '', '', 'MS878/4', '400'),
(31, 'MALKHA COTTON SAREE', 'IMG_3985A.jpg', 'IMG_3986.jpg', 'IMG_3987.jpg', 'IMG_3988.jpg', 'IMG_3989.jpg', '', 1550, 14, '2019-03-16 06:00:18', 'M RAO', '5.5', '0.0 ', '', '', '', 'MS878/5', '400'),
(32, 'GADHCHOLA JEORJET BANDHANI SAREE', 'IMG_7733.jpg', 'IMG_7734.jpg', 'IMG_7738.jpg', 'IMG_7739.jpg', 'IMG_7741.jpg', '', 3480, 17, '2019-03-16 06:09:19', 'KALU BHAI', '5.5', '0.80', '', '', '', 'JGS965', '850'),
(33, 'HEAVY ZARI  BANDHANI SAREE', 'IMG_7746A.jpg', 'IMG_7747.jpg', 'IMG_7749.jpg', 'IMG_7750.jpg', 'IMG_7753.jpg', '', 7499, 19, '2019-03-16 06:12:04', 'KALU BHAI', '5.5', '0.80', '', '', '', 'HZS966', '950'),
(34, 'BANDHEJ WORK SAREE', 'IMG_7759.jpg', 'IMG_7760.jpg', 'IMG_7761.jpg', 'IMG_7762.jpg', '', '', 8660, 22, '2019-03-16 06:14:54', 'RAMBHAI', '5.5.', '0.80', '', '', '', 'BWS1043', '800'),
(35, 'CRAP CHUNDARI RED SAREE', 'IMG_7762A.jpg', 'IMG_7763.jpg', 'IMG_7764.jpg', 'IMG_7765.jpg', 'IMG_7766.jpg', '', 4460, 22, '2019-03-16 06:18:09', 'RAMESH', '5.5', '0.80', '', '', '', 'CCRS959', '370'),
(36, 'CRAP ZARI BORDER SAREE', 'IMG_7773.jpg', 'IMG_7774.jpg', 'IMG_7775.jpg', 'IMG_7776.jpg', '', '', 6250, 22, '2019-03-16 06:21:04', 'RAMESH', '5.5', '0.80', '', '', '', 'CZB958', '410'),
(37, 'BANDHEJ WORK SAREE', 'IMG_7776A.jpg', 'IMG_7777.jpg', 'IMG_7780.jpg', 'IMG_7781.jpg', 'IMG_7782.jpg', '', 7405, 23, '2019-03-16 06:23:21', 'RAMESH', '5.5', '0.80', '', '', '', 'BWS1042/1', '600'),
(38, 'CRAP CHUNDARI  SAREE', 'IMG_7784.jpg', 'IMG_7785.jpg', 'IMG_7786.jpg', 'IMG_7788.jpg', '', '', 5710, 23, '2019-03-16 06:26:22', 'RAMBHAI', '5.5.', '0.80', '', '', '', 'CCS960', '470'),
(39, 'BANDHEJ WORK SAREE', 'IMG_7790.jpg', 'IMG_7791.jpg', 'IMG_7795.jpg', 'IMG_7796.jpg', 'IMG_7797.jpg', 'IMG_7798.jpg', 7405, 24, '2019-03-16 06:32:21', 'RAFIK BHAI', '5.5', '0.80', '', '', '', 'BWS1042/2', '510'),
(40, 'BANDHEJ WORK SAREE', 'IMG_7803A.jpg', 'IMG_7804.jpg', 'IMG_7806.jpg', 'IMG_7807.jpg', 'IMG_7809.jpg', 'IMG_7810.jpg', 7405, 24, '2019-03-16 06:34:53', 'RAFIK BHAI', '5.5 ', '0.80', '', '', '', 'BWS1042/4', '511'),
(41, 'CRAP ZARI BORDER SAREE', 'IMG_7811.jpg', 'IMG_7812.jpg', 'IMG_7814.jpg', 'IMG_7816.jpg', '', '', 6250, 23, '2019-03-16 06:37:38', 'RAM', '5.5', '0.80 ', '', '', '', 'CZB958/1', '470'),
(42, 'PURE CRAP BANDHANI SAREE', 'IMG_7816A.jpg', 'IMG_7817.jpg', 'IMG_7818.jpg', 'IMG_7820.jpg', 'IMG_7821.jpg', '', 4285, 22, '2019-03-16 06:40:17', 'RAM BHAI', '5.5', '0.80 ', '', '', '', 'PCB973', '370'),
(43, 'CHANDERI SAREE', 'B1.jpg', 'B2.jpg', 'B3.jpg', 'B4.jpg', '', '', 7275, 16, '2019-03-16 06:44:41', 'A.ANSARI', '5.5', '0.80', '', '', '', 'CS864/1', '490'),
(44, 'RUDRAKSHA COTTON SAREE', 'C1.jpg', 'C2.jpg', 'C3.jpg', 'C4.jpg', 'C5.jpg', '', 1280, 14, '2019-03-16 06:46:55', 'VIRUPAKSHAM', '5.5.', '0.0', '', '', '', 'RCS1187', '370'),
(45, 'KANCHIVARAM PURE SILK', 'IMG_5923.jpg', 'IMG_5924.jpg', 'IMG_5925.jpg', 'IMG_5926.jpg', 'IMG_5930.jpg', 'IMG_5931.jpg', 18975, 15, '2019-03-16 08:58:27', 'NARESH', '5.5 ', '0.80', '', '', '', 'KVS85', '950'),
(46, 'KANCHIVARAM PURE SILK', 'IMG_5940.jpg', 'IMG_5941.jpg', 'IMG_5942.jpg', 'IMG_5945.jpg', '', '', 32055, 15, '2019-03-16 09:02:00', 'YOGESH', '5.5 ', '0.80', '', '', '', 'KVS93', '1000'),
(47, 'KANCHIVARAM PURE SILK', 'IMG_5961.jpg', 'IMG_5962.jpg', 'IMG_5963.jpg', 'IMG_5964.jpg', '', '', 20270, 15, '2019-03-16 09:08:34', 'NARESH', '5.5 ', '0.80', '', '', '', 'KVS91/1', '1000'),
(48, 'SOUTH SILK SAREE', 'IMG_5972.jpg', 'IMG_5973.jpg', 'IMG_5976.jpg', 'IMG_5978.jpg', '', '', 5000, 15, '2019-03-16 09:10:46', 'V. Palanivelu', '5.5', '0.80', '', '', '', 'SS1117', '540'),
(49, 'KASARGOD COTTON SAREE', 'IMG_5987.jpg', 'IMG_5988.jpg', 'IMG_5989.jpg', 'IMG_5990.jpg', 'IMG_5992.jpg', '', 2500, 14, '2019-03-16 09:12:45', 'SUBHARAO', '5.5 ', '0.0 ', '', '', '', 'KGCS1018', '480'),
(50, 'CHANDERI SAREE', 'IMG_5999A.jpg', 'IMG_6001.jpg', 'IMG_6003.jpg', 'IMG_6004.jpg', '', '', 6755, 16, '2019-03-16 09:15:35', 'K ANSARI', '5.5', '0.80', '', '', '', 'CHS863', '400'),
(51, 'COTTON POLLACHI SAREE', 'IMG_6004A.jpg', 'IMG_6005.jpg', 'IMG_6007.jpg', 'IMG_6008.jpg', 'IMG_6011.jpg', '', 3200, 14, '2019-03-16 09:18:22', 'NARESH', '5.5', '0.0 ', '', '', '', 'CPS1016', '310'),
(52, 'CRAP ZARI BORDER BANDHANI SAREE', 'IMG_9254.jpg', 'IMG_9255.jpg', 'IMG_9257.jpg', 'IMG_9259.jpg', 'IMG_9260.jpg', 'IMG_9261.jpg', 6250, 21, '2019-03-16 09:23:06', 'MUKESH', '5.5 ', '0.80', '', '', '', 'CZBS958/RANI', '350'),
(53, 'CRAP JHAM RAI SAREE', 'IMG_9283.jpg', 'IMG_9284.jpg', 'IMG_9285.jpg', '', '', '', 5355, 21, '2019-03-16 09:26:06', 'RAJARAM', '5.5', '0.80', '', '', '', 'CJS961', '340'),
(54, 'CRAP JHAM RAI SAREE', 'IMG_9286A.jpg', 'IMG_9287.jpg', 'IMG_9288.jpg', 'IMG_9289.jpg', '', '', 5355, 21, '2019-03-16 09:28:57', 'RAJARAM', '5.5', '0.80', '', '', '', 'CJS961/PINK', '330'),
(55, 'CRAP JHAM RAI SAREE', 'IMG_9291.jpg', 'IMG_9292.jpg', 'IMG_9293.jpg', 'IMG_9294.jpg', '', '', 5355, 21, '2019-03-16 09:31:14', 'RAJARAM', '5.5', '0.80', '', '', '', 'CJS961/1', '350'),
(56, 'PURE SILK ZARI BANDHANI SAREE', 'IMG_9294A.jpg', 'IMG_9295.jpg', 'IMG_9296.jpg', 'IMG_9297.jpg', 'IMG_9298.jpg', '', 3660, 17, '2019-03-16 09:34:11', 'JALARAM', '5.5', '0.80 ', '', '', '', 'PSZS956/1', '350'),
(57, 'LIGHT MULTI LEHARIYA SAREE', 'IMG_9325A.jpg', 'IMG_9326.jpg', 'IMG_9329.jpg', 'IMG_9330.jpg', '', '', 2410, 18, '2019-03-16 09:36:53', 'RAJARAM', '5.5 ', '0.0 ', '', '', '', 'LMLS970', '160'),
(58, 'LIGHT MULTI LEHARIYA SAREE', 'IMG_9330A.jpg', 'IMG_9331.jpg', 'IMG_9332.jpg', 'IMG_9333.jpg', '', '', 2410, 18, '2019-03-16 09:39:12', 'JALARAM', '5.5 ', '0.0 ', '', '', '', 'LMLS970/1', '160'),
(59, 'JEORJET GADHCHOLA BANDHANI SAREE', 'IMG_9333A.jpg', 'IMG_9334.jpg', 'IMG_9335.jpg', 'IMG_9336.jpg', 'IMG_9338.jpg', '', 3480, 16, '2019-03-16 09:41:42', 'JALARAM', '5.5', '0.80', '', '', '', 'JGS965/1', '700'),
(60, 'JEORJET GADHCHOLA BANDHANI SAREE', 'IMG_9339.jpg', 'IMG_9340.jpg', 'IMG_9341.jpg', 'IMG_9342.jpg', 'IMG_9343.jpg', '', 3480, 16, '2019-03-16 09:44:38', 'MUKESH', '5.5', '0.80', '', '', '', 'JGS965/2', '710'),
(61, 'ZARI CRAP SILK BANDHANI SAREE', 'IMG_9343A.jpg', 'IMG_9344.jpg', 'IMG_9350.jpg', 'IMG_9351.jpg', 'IMG_9354.jpg', '', 2675, 23, '2019-03-16 09:48:31', 'RAJARAM', '5.5', '0.80', '', '', '', 'ZCS1045', '700'),
(62, 'NANDINI  BORDER  COTTON  SAREE', 'IMG_9679.jpg', 'IMG_9680.jpg', 'IMG_9681.jpg', 'IMG_9682.jpg', '', '', 1050, 14, '2019-03-16 09:56:05', 'V.KUMAR', '5.5', '0.80 ', '', '', '', 'NBS1074/1', '500'),
(63, 'NANDINI  BORDER  COTTON  SAREE', 'IMG_9728.jpg', 'IMG_9729.jpg', 'IMG_9730.jpg', 'IMG_9731.jpg', '', '', 1050, 14, '2019-03-16 09:58:13', 'KUMARAN', '5.5', '0.80', '', '', '', 'NBS1074/7', '500'),
(64, 'MAHEWARI PRINT COTTON GICHA SAREE', 'IMG_0489.jpg', 'IMG_0490.jpg', 'IMG_0491.jpg', 'IMG_0492.jpg', 'IMG_0493.jpg', '', 3350, 16, '2019-03-16 10:05:56', 'MUKESH BHAI', '5.5 ', '0.80 ', '', '', '', 'CSG 1103', '400'),
(65, 'NANDINI  BORDER  COTTON  SAREE', 'IMG_9736.jpg', 'IMG_9737.jpg', 'IMG_9738.jpg', 'IMG_9739.jpg', '', '', 1050, 14, '2019-03-16 10:08:39', 'KUMARAN', '5.5', '0.80 ', '', '', '', 'NBS1074/8', '480'),
(66, 'KOTA BAGRU PRINT SAREE', 'IMG_0500.jpg', 'IMG_0501.jpg', 'IMG_0502.jpg', 'IMG_0503.jpg', 'IMG_0504.jpg', '', 3305, 16, '2019-03-16 10:12:30', 'ZAKIR ', '5.5 ', '0.00', '', '', '', 'KBPS 1032/2', '200'),
(67, 'TUSSER SILK BLOCK PRINT SAREE', 'IMG_0505.jpg', 'IMG_0506.jpg', 'IMG_0507.jpg', 'IMG_0508.jpg', 'IMG_0509.jpg', '', 7499, 25, '2019-03-16 10:15:25', 'MUKESH BHAI', '5.5 ', '0.80', '', '', '', 'TUSPS 1030', '450'),
(68, 'TUSSER SILK BLOCK PRINT SAREE', 'IMG_0510.jpg', 'IMG_0511.jpg', 'IMG_0512.jpg', 'IMG_0513.jpg', 'IMG_0515.jpg', '', 7499, 25, '2019-03-16 10:19:37', 'SADIK BHAI', '5.5', '0.80', '', '', '', 'TUSPS 1030/1', '470'),
(69, 'TUSSER SILK  ZARI BORDER SAREE', 'IMG_0517.jpg', 'IMG_0518.jpg', 'IMG_0519.jpg', 'IMG_0521.jpg', 'IMG_0522.jpg', '', 8030, 25, '2019-03-16 10:22:21', 'SADIK BHAI', '5.5 ', '0.80', '', '', '', 'TUSZBS 1029', '450'),
(70, 'TUSSER SILK ZARI BORDER SAREE', 'IMG_0523.jpg', 'IMG_0525.jpg', 'IMG_0526.jpg', 'IMG_0527.jpg', 'IMG_0528.jpg', '', 8030, 25, '2019-03-16 10:24:47', 'SADIK BHAI', '5.5', '0.80', '', '', '', 'TUSZBS 1029/1', '450'),
(71, 'CHANDERI GEECHA BORDER SAREE', 'IMG_0529.jpg', 'IMG_0531.jpg', 'IMG_0532.jpg', 'IMG_0533.jpg', 'IMG_0534.jpg', '', 3125, 16, '2019-03-16 10:27:14', 'MUKESH BHAI', '5.5 ', '0.80', '', '', '', 'CGBS 1027', '350'),
(72, 'CHANDERI GEECHA BORDER SAREE', 'IMG_0547.jpg', 'IMG_0548.jpg', 'IMG_0549.jpg', 'IMG_0551.jpg', '', '', 3125, 16, '2019-03-16 10:29:36', 'MUKESH BHAI', '5.5 ', '0.80', '', '', '', 'CGBS1027/2', '350'),
(73, 'CHANDERI GEECHA BORDER SAREE', 'IMG_0561.jpg', 'IMG_0562.jpg', 'IMG_0563.jpg', 'IMG_0564.jpg', 'IMG_0565.jpg', '', 3125, 16, '2019-03-16 10:31:44', 'SADIK BHAI', '5.5 ', '0.80', '', '', '', 'CGBS 1027/4', '350'),
(74, 'MAHESHWARI TISSUE SAREE', 'IMG_0598A.jpg', 'IMG_0599.jpg', 'IMG_0601.jpg', 'IMG_0602.jpg', '', '', 4300, 16, '2019-03-16 10:36:49', 'A.KHAN', '5.5 ', '0.80', '', '', '', 'MATS 1154', '600'),
(75, 'MAHESHWARI BUTIDAR SAREE', 'IMG_0612.jpg', 'IMG_0613.jpg', 'IMG_0614.jpg', 'IMG_0615.jpg', '', '', 6920, 16, '2019-03-16 10:39:30', 'RAMLAL', '5.5', '0.80 ', '', '', '', 'MABS1173', '495'),
(76, 'MAHESHWARI BUTIDAR SAREE', 'IMG_0617.jpg', 'IMG_0618.jpg', 'IMG_0619.jpg', 'IMG_0621.jpg', '', '', 6920, 16, '2019-03-16 10:41:58', 'RAMLAL', '5.5', '0.80 ', '', '', '', 'MABS 1173/1', '500'),
(77, 'MAHESHWARI BUTIDAR SAREE', 'IMG_0622.jpg', 'IMG_0623.jpg', 'IMG_0624.jpg', 'IMG_0625.jpg', '', '', 6920, 16, '2019-03-16 10:44:34', 'RAMLAL', '5.5', '0.80 ', '', '', '', 'MABS 1173/2', '490'),
(78, 'MAHESHWARI  PALEDAAR SAREE', 'IMG_0641.jpg', 'IMG_0642.jpg', 'IMG_0643.jpg', 'IMG_0644.jpg', '', '', 7295, 16, '2019-03-16 10:49:25', 'MADAN BHAI', '5.5', '0.80', '', '', '', 'MAPS 1172/2', '600'),
(79, 'MAHESHWARI  PALEDAAR SAREE', 'IMG_0644A.jpg', 'IMG_0645.jpg', 'IMG_0646.jpg', 'IMG_0648.jpg', '', '', 7295, 16, '2019-03-16 10:51:42', 'MADAN BHAI', '5.5', '0.80', '', '', '', 'MAPS 1172/3', '600'),
(80, 'MAHESHWARI  PALEDAAR SAREE', 'IMG_0649.jpg', 'IMG_0650.jpg', 'IMG_0652.jpg', 'IMG_0653.jpg', '', '', 7295, 16, '2019-03-16 10:53:58', 'MADAN BHAI', '5.5', '0.80 ', '', '', '', 'MAPS 1172/4', '600'),
(81, ' BANDHANI PURE SILK ZARI  SAREE', 'IMG_0654.jpg', 'IMG_0656.jpg', 'IMG_0657.jpg', 'IMG_0658.jpg', 'IMG_0659.jpg', '', 3660, 15, '2019-03-16 10:56:43', 'MADAN BHAI', '5.5 ', '0.80 ', '', '', '', 'PSZS 956', '600'),
(82, 'BANDHANI CRAP CHUNDARI SAREE', 'IMG_0659A.jpg', 'IMG_0660.jpg', 'IMG_0661.jpg', 'IMG_0662.jpg', 'IMG_0663.jpg', '', 5710, 23, '2019-03-16 11:00:12', 'MADAN BHAI', '5.5', '0.80', '', '', '', 'BCCS 960', '600'),
(83, 'RUDRAKSHA COTTON SAREE', 'IMG_0744A.jpg', 'IMG_0745.jpg', 'IMG_0746.jpg', 'IMG_0747.jpg', '', '', 1280, 14, '2019-03-16 11:02:38', 'Satish ', '5.5', '0.00 ', '', '', '', 'RUCS 1187/1', '350'),
(84, 'RUDRAKSHA COTTON SAREE', 'IMG_0750A.jpg', 'IMG_0751.jpg', 'IMG_0752.jpg', 'IMG_0753.jpg', '', '', 1280, 0, '2019-03-16 11:04:42', 'Satish ', '5.5 ', '0.00', '', '', '', 'RUCS 1187/3', '370'),
(85, 'RUDRAKSHA COTTON SAREE', 'IMG_0753A.jpg', 'IMG_0754.jpg', 'IMG_0755.jpg', 'IMG_0756.jpg', '', '', 1280, 14, '2019-03-16 11:07:03', 'UMA', '5.5 ', '0.00 ', '', '', '', 'RUCS 1187/4', '360'),
(86, 'RUDRAKSHA COTTON SAREE', 'IMG_0772A.jpg', 'IMG_0775.jpg', 'IMG_0776.jpg', 'IMG_0777.jpg', '', '', 1280, 14, '2019-03-16 11:09:01', 'NARAYANA', '5.5', '0.00', '', '', '', 'RUCS 1187/10', '360'),
(87, 'RUDRAKSHA COTTON SAREE', 'IMG_0780A.jpg', 'IMG_0782.jpg', 'IMG_0783.jpg', 'IMG_0784.jpg', '', '', 1280, 14, '2019-03-16 11:13:30', 'NARAYANA', '5.5', '0.00 ', '', '', '', 'RUCS 1187/11', '360'),
(88, 'Men\'s Clothing And Accessories', 'kurtha1.jpg', '', '', '', '', '', 0, 27, '2019-07-25 12:35:02', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(11) NOT NULL,
  `p_cat_title` text NOT NULL,
  `parent` int(11) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `parent`, `catid`) VALUES
(1, 'Saree', 0, 1),
(2, 'All Saree', 1, 1),
(3, 'Fabric', 1, 1),
(4, 'Craft', 1, 1),
(5, 'Occassion', 1, 1),
(6, 'Dupatta and Stoles', 0, 1),
(7, 'Dress Materials', 0, 1),
(8, 'Kurta', 0, 1),
(9, 'Top and Shirts', 0, 1),
(10, 'Skirts', 0, 1),
(11, 'Jackets', 0, 1),
(12, 'Pavadai Sattai', 0, 1),
(13, 'Jewellery', 0, 1),
(14, 'Cotton', 3, 1),
(15, 'Silk', 3, 1),
(16, 'Silk and Cotton', 3, 1),
(17, 'georgette and Silk', 3, 1),
(18, 'Shiffon', 3, 1),
(19, 'Shiffon and Silk', 3, 1),
(21, 'Crap', 3, 1),
(22, 'Pure Crap', 3, 1),
(23, 'Crap and Silk', 3, 1),
(24, 'Jeorjet', 3, 1),
(25, 'Tusser', 3, 1),
(26, 'Clothing', 0, 2),
(27, 'Kurtas', 26, 2),
(28, 'Shirts', 26, 2),
(29, 'Nehru Jackets & Blazers', 26, 2),
(30, 'Pyjamas & Churidars', 26, 2),
(31, 'Salwars & Dhotis', 26, 2),
(32, 'Trousers & Shorts', 26, 2),
(33, 'Stoles, Shawls & Mufflers', 26, 2),
(34, 'Accessories', 0, 2),
(35, 'Footwear', 34, 2),
(36, 'Bags & Accessories', 34, 2),
(37, 'Sale! Collection', 0, 2),
(38, 'Rajwada Collection', 37, 2),
(39, 'Malhar Collection', 37, 2),
(40, 'Indigo Collection', 37, 2),
(41, 'Summer Collection', 37, 2),
(42, 'Chikankari Collection', 37, 2),
(43, 'Wool Collection', 37, 2),
(44, 'Hand Block Print', 37, 2),
(45, 'Ikat Collection', 37, 2),
(46, 'Kalamkari', 37, 2),
(47, 'Get The Look', 0, 2),
(48, 'Indian Summer', 47, 2),
(49, 'Custom Kurtas', 0, 2),
(50, 'Girls', 0, 3),
(51, 'Kurtas', 50, 3),
(52, 'Tops & Tunics', 50, 3),
(53, 'Dresses', 50, 3),
(54, 'Sets', 50, 3),
(55, 'Skirts', 50, 3),
(56, 'Bottoms', 50, 3),
(57, 'Boys', 0, 3),
(58, 'Kurtas', 57, 3),
(59, 'Shirts', 57, 3),
(60, 'Jackets', 57, 3),
(61, 'Sets', 57, 3),
(62, 'Bottoms', 57, 3),
(63, 'Infants', 0, 3),
(64, 'Boys', 63, 3),
(65, 'Girls', 63, 3),
(66, 'Accessories', 0, 3),
(67, 'Jewellery', 66, 3),
(68, 'Footwear', 66, 3),
(69, 'Sale! Collection', 0, 3),
(70, 'Rajwada Collection', 69, 3),
(71, 'Malhar Collection', 69, 3),
(72, 'Indigo Collection', 69, 3),
(73, 'Summer Collection', 69, 3),
(74, 'Chikankari Collection', 69, 3),
(75, 'Hand Block Print', 69, 3),
(76, 'Tweens Collection', 69, 3),
(77, 'Occassion Wear Collection', 37, 3),
(78, 'Occassion Wear Collection', 69, 3),
(79, 'Bed Linen', 0, 4),
(80, 'Bedcovers & Bedsheets', 79, 4),
(81, 'Pillow Covers', 79, 4),
(82, 'Cushion Covers', 79, 4),
(83, 'Dohars, Quilts & Throws', 79, 4),
(84, 'Table Linen', 0, 4),
(85, 'Mats & Napkins', 84, 4),
(86, 'Table Covers', 84, 4),
(87, 'Runners', 84, 4),
(88, 'Kitchen Linen', 84, 4),
(89, 'Curtains', 0, 4),
(90, 'Floor Coverings', 0, 4),
(91, 'Dhurries', 90, 4),
(92, 'Footmats', 90, 4),
(93, 'Bath Linen', 0, 4),
(94, 'Towels', 93, 4),
(95, 'Bathmats', 93, 4),
(96, 'Bath Accessories', 93, 4),
(97, 'Lookbook Sale! Collection', 0, 4),
(98, 'Indigo Collection', 97, 4),
(99, 'Festive Collection', 97, 4),
(100, 'Spring Collection', 97, 4),
(101, 'Summer Collection', 97, 4),
(102, 'Monsoon Collection', 97, 4),
(103, 'Hand Block Print', 97, 4),
(104, 'Ikat Collection', 97, 4),
(105, 'Kalamkari', 97, 4),
(106, 'Living', 0, 5),
(107, 'Sofa & Seating', 106, 5),
(108, 'Tables', 106, 5),
(109, 'Entertainment Units', 106, 5),
(110, 'Bars & Cabinets', 106, 5),
(111, 'Dining', 0, 5),
(112, 'Tables', 111, 5),
(113, 'Chairs & Benches', 111, 5),
(114, 'Cabinets', 111, 5),
(115, 'Trolleys', 111, 5),
(116, 'Bedroom', 0, 5),
(117, 'Beds', 116, 5),
(118, 'Wardrobes', 116, 5),
(119, 'Bedside Tables', 116, 5),
(120, 'Chest & Drawers', 116, 5),
(121, 'Studyroom', 0, 5),
(122, 'Desks', 121, 5),
(123, 'Accent & Accessories', 0, 5),
(124, 'Chairs', 123, 5),
(125, 'Ottomans & Stools', 123, 5),
(126, 'Consoles & Mirrors', 123, 5),
(127, 'Bar & Trolley', 123, 5),
(128, 'Blanket Box', 123, 5),
(129, 'Racks & Shelves', 123, 5),
(130, 'Others', 123, 5),
(131, 'Verandah Lookbook Sale! Collection', 0, 5),
(133, 'Akund Collection', 131, 5),
(134, 'Amer collection', 131, 5),
(135, 'Domino collection', 131, 5),
(136, 'Obra Collection', 131, 5),
(137, 'Agastya Collection', 131, 5),
(138, 'Irang Collection', 131, 5),
(139, 'Kaveri Collection', 131, 5),
(141, 'Esagona Collection', 131, 5),
(142, 'Gifts', 0, 7),
(143, 'Fragrances & Candles', 142, 7),
(144, 'Stationery', 142, 7),
(145, 'Games & Toys', 142, 7),
(146, 'Frames', 142, 7),
(147, 'Others', 142, 7),
(148, 'Tableware', 0, 7),
(149, 'Dinnerware', 148, 7),
(151, 'Drinkware', 148, 7),
(152, 'Flatware', 148, 7),
(153, 'Serveware', 148, 7),
(154, 'Others', 148, 7),
(155, 'Decor', 0, 7),
(156, 'Vase', 155, 7),
(157, 'Wall Art', 155, 7),
(158, 'T-Lites & Lanterns', 155, 7),
(159, 'Others', 155, 7),
(160, 'Lighting', 0, 7),
(161, 'Lamp', 160, 7),
(162, 'Lamp Shades', 160, 7),
(163, 'Hanging & String Lights', 160, 7),
(164, 'Basketry', 0, 7),
(165, 'Lookbook Sale! Collection', 0, 7),
(166, 'Indigo Collection', 165, 7),
(167, 'Spring Collection', 165, 7),
(168, 'Summer Collection', 165, 7);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `author` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  `lname` text NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `mobile`, `lname`, `country`, `city`, `state`, `zipcode`, `address`) VALUES
(1, 'VGS', 'sumithra@gmail.com', 'vgs', '111111111111', '1111111', 'India', 'Nellore', 'AP', '123456', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `wish_img` text NOT NULL,
  `wish_title` text NOT NULL,
  `wish_price` int(11) NOT NULL,
  `usd_price` int(11) NOT NULL,
  `gbp_price` int(11) NOT NULL,
  `eur_price` int(11) NOT NULL,
  `aud_price` int(11) NOT NULL,
  `cad_price` int(11) NOT NULL,
  `sgd_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers_orders`
--
ALTER TABLE `customers_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `paymentspay`
--
ALTER TABLE `paymentspay`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers_orders`
--
ALTER TABLE `customers_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
