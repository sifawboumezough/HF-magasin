-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 11:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthy_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_img` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_qty` varchar(256) NOT NULL,
  `product_price` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_img`, `product_id`, `product_name`, `product_qty`, `product_price`) VALUES
('img6.png', 69, 'Prune', '400KG', '3$'),
('img7.png', 70, 'Apple', '800KG', '4$'),
('img2.png', 72, 'Eggplant', '500KG', '2$'),
('img1.png', 73, 'Potato', '300KG', '3$'),
('img3.png', 74, 'Pomegranate', '200KG', '2$'),
('img4.png', 75, 'Blueberry', '500KG', '5$'),
('img5.png', 76, 'Pear', '200KG', '4$'),
('img8.png', 77, 'Strawberry', '400KG', '4$'),
('img9.png', 78, 'Lime', '300KG', '1$'),
('img10.png', 79, 'Onion', '337KG', '1$'),
('img11.png', 80, 'Corn', '200KG', '2$'),
('img12.png', 81, 'Grape', '200KG', '2$'),
('img13.png', 82, 'Mango', '300KG', '3$'),
('img14.png', 83, 'Red Pepper', '200KG', '2$'),
('img15.png', 84, 'Tomato', '200KG', '1$'),
('img16.png', 85, 'Carrot', '200KG', '1$'),
('img17.png', 86, 'Cucumber', '200KG', '1$'),
('img18.png', 87, 'Broccoli', '200KG', '3$'),
('5-mushroom-png-image-thumb.png', 88, 'Mushroom', '200KG', '2$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
