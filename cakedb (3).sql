-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2024 at 05:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakedb`
--
CREATE DATABASE IF NOT EXISTS `cakedb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cakedb`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `total_price` decimal(4,2) NOT NULL DEFAULT 0.00,
  `status` enum('cart','ordered','ongoing','delivery','complete') NOT NULL DEFAULT 'cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `profile_id`, `total_price`, `status`) VALUES
(1, 3, 0.00, 'cart'),
(2, 4, 0.00, 'cart'),
(3, 5, 0.00, 'cart'),
(4, 6, 0.00, 'cart'),
(5, 7, 48.98, 'ordered'),
(6, 7, 48.98, 'ordered'),
(7, 7, 0.00, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `cartDetails`
--

DROP TABLE IF EXISTS `cartDetails`;
CREATE TABLE `cartDetails` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartDetails`
--

INSERT INTO `cartDetails` (`cart_id`, `product_id`) VALUES
(2, 2),
(3, 1),
(3, 2),
(3, 3),
(3, 3),
(3, 3),
(3, 1),
(3, 6),
(5, 1),
(5, 2),
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('ordered','pending','delivery','completed') NOT NULL DEFAULT 'ordered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cart_id`, `profile_id`, `date`, `status`) VALUES
(3, 6, 7, '2024-05-14', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `details` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `type`, `price`, `details`, `quantity`, `image_path`) VALUES
(1, 'Vanilla Cake', 'Birthday Cake', 18.99, 'lFG YLGIYSG SIG SI GASI G aiog ies gisg iug aiug alugl glyayg giyg iw gawi gwaig', 52343, 'uploads/cake_test.png'),
(2, 'Chocolate Cake', 'Wedding Cake', 29.99, 'LG P GPIU GIUg iug I. iu ; hu dhgs:GH gh:Uhu;h ;h. IU u. g fJTY fiYT fiUYS fUSYK fOUY fgKUYSf SUf gs', 4, 'uploads/cake_chocolate.png'),
(3, 'Final Testing 2', 'Wedding Cake', 567.00, '34234', 1233442, 'uploads/Final Testing 2_1715484370.png'),
(6, 'Test For Cart', 'Custom Cake', 500.00, 'Cart Testing', 1003, 'uploads/Test For Cart_1715567741.png');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `language_preference` enum('EN','FR') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `user_id`, `first_name`, `last_name`, `address`, `phone_number`, `language_preference`) VALUES
(1, 1, 'Jodel', 'Briones', '123 Cake St', '514-111-1111', 'EN'),
(2, 2, 'manas', 'patel', '321 Cake Street', '514-222-1111', 'FR'),
(3, 2, 'manas', 'patel', '321 Cake Street', '514-222-1111', 'FR'),
(4, 3, 'Louisa', 'Lieu', '524 Cake dr', '514-111-4444', 'EN'),
(5, 4, 'Johann', 'Culla-ag', '1234 Street, San Andreas, GTA', '514-123-4567', 'FR'),
(6, 5, 'THE', 'Admin', '1234 Street, San Andreas, GTA', '514-123-4567', 'EN'),
(7, 6, 'Tester123', '123Testing', '311 Cake St', '514-111-2222', 'EN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password_hash`, `email`, `active`) VALUES
(1, 'jodel', '$2y$10$bdMCJmTVBZIWbnw4r46VpuNOrqY15He79WUK2PVCwaZckNQ9IvXKK', 'jodel@gmail.com', 1),
(2, 'manas', '$2y$10$WRQLtaB2Bq2B235A5k7MPOxVvkjth321DJ8sF3JFXPpftErHT0sRG', 'manas@vanier.com', 1),
(3, 'Louisa', '$2y$10$4TDP964JQyiKsYjb6wOHJOJfR7.r485D8RiC5ORbUmQUwBTeOYe6W', 'louisa@vanier.com', 1),
(4, 'Johann Culla-ag', '$2y$10$6X1COHrRyJ.PII/RIUCSt.zGawvGMfTcEQYblnutQOBSBloYveOHq', 'johanncullaag@gmail.com', 1),
(5, 'Admin', '$2y$10$7es7MLdObSx.OBVtGE.5CO1AYuDbAp3YFTMafFNjgeuJHF8m0mAPq', 'Admin@email.com', 1),
(6, 'Tester', '$2y$10$inB5qgWPCMDS7DAvK3TVNelehXuJk7U8evrmqy/X0VBS/Akj5PYje', 'tester@vanier.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cartDetails`
--
ALTER TABLE `cartDetails`
  ADD KEY `CARTDETAILS_CART_ID_FK` (`cart_id`),
  ADD KEY `CARTDETAILS_PRODUCT_ID_FK` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `ORDER_CART_ID_FK` (`cart_id`),
  ADD KEY `ORDER_PROFILE_ID_FK` (`profile_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `PROFILE_USER_ID_FK` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cartDetails`
--
ALTER TABLE `cartDetails`
  ADD CONSTRAINT `CARTDETAILS_CART_ID_FK` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `CARTDETAILS_PRODUCT_ID_FK` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ORDER_CART_ID_FK` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ORDER_PROFILE_ID_FK` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `PROFILE_USER_ID_FK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
