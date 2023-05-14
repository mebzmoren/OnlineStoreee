-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 07:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `last_modified`) VALUES
(1, 'Shirts', '2023-05-10 01:34:59'),
(2, 'Jeans', '2023-05-10 01:35:05'),
(3, 'Shoes', '2023-05-10 01:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `email`, `username`, `password`, `last_modified`) VALUES
(1, 'buyer@gmail.com', 'buyer', '123', '2023-05-10 01:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0 CHECK (`quantity` >= 0),
  `price` decimal(19,2) NOT NULL DEFAULT 1.00 CHECK (`price` >= 1),
  `colors` varchar(255) NOT NULL,
  `sizes` varchar(255) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `seller_id`, `name`, `image`, `category_id`, `description`, `quantity`, `price`, `colors`, `sizes`, `last_modified`) VALUES
(1, 1, 'Slim Fit Blue Jean', '645af59ba92be0.10716318.png', 2, 'Stylish and comfortable blue jeans with a slim fit design.', 123, 123.00, 'Blue,Yellow,White', 'XS,S,L', '2023-05-14 00:27:43'),
(2, 1, 'Classic White Shirt', '645afaf91b0935.02099455.jfif', 1, 'A timeless white shirt suitable for any occasion.', 123, 420.00, 'Yellow', 'XS,L', '2023-05-14 00:27:43'),
(3, 1, 'Printed T-Shirts', '645afb360f9f37.19996854.jfif', 1, 'Trendy and versatile shoes, expressing your unique style.', 23, 69.00, 'Blue,White', 'XS,L,XL', '2023-05-14 00:29:29'),
(4, 1, 'Striped Polo Shirt', '645afb446f0f11.79839766.jfif', 1, 'A stylish polo shirt with a striped pattern, perfect for a casual look.', 2, 23.00, 'Red,Blue,Green', 'M,XL', '2023-05-14 00:18:04'),
(5, 1, 'Casual Sneakers', '645afb8d384475.98921663.jfif', 3, 'Trendy and comfortable t-shirt for everyday wear.', 123, 69420.00, 'Blue,White', 'S', '2023-05-14 00:29:29'),
(6, 1, 'Relaxed Fit Black Shirt', '645afb9ae67151.29882367.jfif', 1, 'Comfortable and fashionable black shirt with a relaxed fit.', 123, 2.00, 'Red,Green', 'M,XL', '2023-05-14 00:32:46'),
(7, 1, 'Sample Shoes', 'sample.jpg', 3, 'A stylish pair of shoes', 10, 49.99, 'Blue,Red,White', 'S,M,L', '2023-05-14 07:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_bill`
--

CREATE TABLE `product_bill` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `comment` varchar(10000) DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT 3 CHECK (5 >= `rating` and `rating` >= 1),
  `member_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `email`, `username`, `password`, `last_modified`) VALUES
(1, 'seller@gmail.com', 'seller', '123', '2023-05-10 01:33:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_bill`
--
ALTER TABLE `product_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_bill`
--
ALTER TABLE `product_bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `seller` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_bill`
--
ALTER TABLE `product_bill`
  ADD CONSTRAINT `product_bill_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_bill_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
