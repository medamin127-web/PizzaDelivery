-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2023 at 11:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzadelivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `address`, `role`) VALUES
(1, 'Mohamed Amin', 'Hawala', 'medaminhawala96@gmail.com', 28363508, 'mohamedamin123', 'sousse', 'admin'),
(4, 'fathi', 'kabboura', 'medaminhawala97@gmail.com', 28363508, 'dfdfdfdq', 'fdqfdq , 4002 qddq qq', 'client'),
(5, 'Karim', 'kabboura', 'medaminhawala97@gmail.com', 28363508, 'mkklkldfdfq', 'fdqfdq , 4002/nqddq qq', 'client'),
(6, 'Latif', 'kabboura', 'medaminhawala97@gmail.com', 28363508, 'dfddqqqdqqs', 'fdqfdq , 4002/nqddq qq', 'client'),
(7, 'Karim', 'kabboura', 'medaminhawala95@gmail.comerer', 242424, 'df', 'fdqfdq , 5777/nqddq ezezeza', 'client'),
(8, 'test', '', 'test@gmail.com', 0, '123', ' , /n ', 'client'),
(9, 'test', '', 'test@gmail.com', 0, 'test', ' , /n ', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `it` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `review` varchar(20) NOT NULL,
  `subject` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`it`, `fullname`, `review`, `subject`) VALUES
(1, 'Mohamed Amin Hawala', 'Good', 'yes I DON4T LIEK THIS VERY MUYCH '),
(2, 'Michael Jackson', 'Not Good<', 'this site is so bad!'),
(3, 'Karim Ljaziri', 'Great', 'ddddfdfdf'),
(4, 'test', 'Great', 'great site');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `ordered` varchar(50) NOT NULL,
  `shipping_adress` varchar(100) NOT NULL,
  `total_price` float NOT NULL,
  `order_list` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `ordered`, `shipping_adress`, `total_price`, `order_list`, `phone_number`) VALUES
(5, 'fathi kabboura', '2022/12/27 05:02:55', 'fdqfdq , 4002 qddq qq', 20, '-1 chicken pizza\r\n', '28363508'),
(6, 'fathi kabboura', '2022/12/27 05:04:04', 'fdqfdq , 4002 qddq qq', 45, '-2 Big Mac\r\n-1 cheese pizza\r\n', '28363508'),
(7, 'fathi kabboura', '2023/01/01 23:56:58', 'fdqfdq , 4002 qddq qq', 35, '-1 chicken pizza\r\n-1 cheese pizza\r\n', '28363508'),
(8, 'fathi kabboura', '2023/01/01 23:57:19', 'fdqfdq , 4002 qddq qq', 40, '-2 chicken pizza\r\n', '28363508'),
(9, 'fathi kabboura', '2023/01/02 00:08:01', 'fdqfdq , 4002 qddq qq', 160, '-8 chicken pizza\r\n', '28363508'),
(10, 'fathi kabboura', '2023/01/03 03:05:36', 'fdqfdq , 4002 qddq qq', 60, '-3 chicken pizza\r\n', '28363508');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `type` varchar(30) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `type`, `image`) VALUES
(4, 'Big Mac', 15, 'burger', 'bigmac.png'),
(5, 'cheese pizza', 15, 'pizza', 'cheesepiza.png'),
(6, 'chicken pizza', 20, 'pizza', 'cheesepiza.png'),
(7, 'chicken pizza', 20, 'pizza', 'cheesepiza.png');

-- --------------------------------------------------------

--
-- Table structure for table `siteinfo`
--

CREATE TABLE `siteinfo` (
  `id` int(11) NOT NULL,
  `visit_num` int(11) NOT NULL,
  `delivery_num` int(11) NOT NULL,
  `totatrevenu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siteinfo`
--

INSERT INTO `siteinfo` (`id`, `visit_num`, `delivery_num`, `totatrevenu`) VALUES
(1, 11, 5, 280);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`it`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteinfo`
--
ALTER TABLE `siteinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `it` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siteinfo`
--
ALTER TABLE `siteinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
