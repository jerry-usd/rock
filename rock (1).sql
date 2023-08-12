-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 11:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rock`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'text', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `adate` varchar(200) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `color` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `adate`, `baddress`, `ref`, `product`, `price`, `quantity`, `total`, `color`) VALUES
(1, 'processing', '2021/07/09 06:59:35', '1', '2480817', '15', 10300, 1, 10300, 'Jumbo'),
(2, 'delivery_in_progress', '2021/07/09 07:18:29', '2', '5182143', '15', 10300, 1, 10300, 'Jumbo'),
(3, 'processing', '2021/07/09 07:26:02', '3', '592517', '15', 10300, 1, 10300, 'Jumbo');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `color1` varchar(200) NOT NULL,
  `color2` varchar(200) NOT NULL,
  `color3` varchar(200) NOT NULL,
  `adate` varchar(200) NOT NULL,
  `room` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `image5` varchar(200) NOT NULL,
  `featured` varchar(200) NOT NULL,
  `price2` varchar(11) NOT NULL,
  `price3` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `color1`, `color2`, `color3`, `adate`, `room`, `image1`, `image2`, `image3`, `image4`, `image5`, `featured`, `price2`, `price3`) VALUES
(1, 'Kids glow and healing  kit', 12000, '\n  \n  Kids glow and healing jumbo kit', '', 'Medium', 'Jumbo', '2021-07-09 02:40:17', 'KIT', '38mki.png', '51WhatsApp_Image_2021-07-07_at_20.06.38__1_-removebg-preview - Copy.png', '82WhatsApp Image 2021-07-07 at 20.06.38 (1) - Copy.jpeg', '26WhatsApp Image 2021-07-07 at 20.06.38 (1).jpeg', '', 'no', '12000', '23000'),
(2, 'Luminous lightening  kit', 18300, '\n  \n  \n  Luminous lightening jumbo kit', '', 'Mini', 'Jumbo', '2021-07-09 02:46:24', 'KIT', '30222.png', '79WhatsApp Image 2021-07-07 at 20.06.38 (2) - Copy.jpeg', '68WhatsApp Image 2021-07-07 at 20.06.38 (2).jpeg', '29WhatsApp Image 2021-07-07 at 20.06.38 (3) - Copy.jpeg', '', 'no', '18300', '25500'),
(3, 'Kids restoring fairness  kit', 10300, '\n  \n  Kids restoring fairness jumbo kit', '', 'Mini', 'Jumbo', '2021-07-09 02:49:31', 'KIT', '40WhatsApp_Image_2021-07-07_at_20.06.39-removebg-preview.png', '37WhatsApp Image 2021-07-07 at 20.06.39 - Copy.jpeg', '25WhatsApp Image 2021-07-07 at 20.06.39.jpeg', '', '', 'no', '10300', '22400'),
(4, 'Glow and maintenance kit', 12000, '\n  \n  \n  \n  Glow and maintenance jumbo kit', '', 'Mini', 'Jumbo', '2021-07-09 02:54:59', 'KIT', '17WhatsApp_Image_2021-07-07_at_20.06.40-removebg-preview.png', '54WhatsApp Image 2021-07-07 at 20.06.40 - Copy.jpeg', '16WhatsApp Image 2021-07-07 at 20.06.40.jpeg', '', '', 'no', '12000', '22400'),
(9, 'Glow and repair  kit', 7000, '\n  \n  Glow and repair mini kit', '', 'Mini', 'Jumbo', '2021-07-09 03:27:18', 'KIT', '71ll.png', '30WhatsApp Image 2021-07-07 at 20.18.15 (4) - Copy.jpeg', '85WhatsApp Image 2021-07-07 at 20.18.15 (4).jpeg', '86WhatsApp Image 2021-07-07 at 20.18.15 (5) - Copy.jpeg', '91WhatsApp Image 2021-07-07 at 20.18.15 (6) - Copy.jpeg', 'no', '7000', '16000'),
(10, 'Acne  kit', 7000, '\n  \n  \n  Acne mini kit', '', 'Mini', 'Jumbo', '2021-07-09 03:33:24', 'KIT', '93WhatsApp Image 2021-07-07 at 20.20.26 - Copy - Copy - Copy.jpeg', '14WhatsApp Image 2021-07-07 at 20.20.26 - Copy - Copy.jpeg', '39WhatsApp Image 2021-07-07 at 20.20.26 - Copy.jpeg', '60WhatsApp Image 2021-07-07 at 20.20.26.jpeg', '', 'no', '7000', '16000'),
(11, 'Face mask kit', 6000, '\n  Face mask kit', '', '', '', '2021-07-09 03:36:40', 'KIT', '25oo.png', '6WhatsApp Image 2021-07-07 at 20.20.26 (1) - Copy - Copy.jpeg', '65WhatsApp Image 2021-07-07 at 20.20.26 (1) - Copy.jpeg', '48WhatsApp Image 2021-07-07 at 20.20.26 (1).jpeg', '', 'no', '', ''),
(12, 'Knuckles kit', 10890, '\n  Knuckles kit', '', '', '', '2021-07-09 03:41:08', 'KIT', '68WhatsApp_Image_2021-07-07_at_20.26.47-removebg-preview (1).png', '27WhatsApp_Image_2021-07-07_at_20.26.47-removebg-preview.png', '27WhatsApp Image 2021-07-07 at 20.26.47 - Copy.jpeg', '45WhatsApp Image 2021-07-07 at 20.26.47.jpeg', '', 'no', '', ''),
(13, 'Whipped Skin Butter', 4600, '\n  \n  \n  <p>Whipped Skin Butter<br></p>', '', 'Mini', 'Jumbo', '2021-07-09 03:46:01', 'PRODUCT', '2WhatsApp Image 2021-07-08 at 20.22.47 - Copy - Copy (2).jpeg', '63WhatsApp Image 2021-07-08 at 20.22.47 - Copy - Copy.jpeg', '84WhatsApp Image 2021-07-08 at 20.22.47 - Copy.jpeg', '51WhatsApp Image 2021-07-08 at 20.22.47.jpeg', '', 'no', '4600', '8000'),
(14, 'Snail Slime Serum', 2300, '\n  \n  Snail Slime Serum', '', 'Mini', 'Jumbo', '2021-07-09 03:49:06', 'PRODUCT', '33WhatsApp_Image_2021-07-08_at_20.22.48_-_Copy-removebg-preview.png', '62WhatsApp Image 2021-07-08 at 20.22.48 - Copy - Copy (2).jpeg', '67WhatsApp Image 2021-07-08 at 20.22.48 - Copy - Copy.jpeg', '41WhatsApp Image 2021-07-08 at 20.22.48 - Copy.jpeg', '47WhatsApp Image 2021-07-08 at 20.22.48.jpeg', 'no', '2300', '3500'),
(15, 'Lightening Body Milk', 5150, '<p>Lightening Body Milk<br></p>', '', 'Mini', 'Jumbo', '2021-07-09 17:48:40', 'PRODUCT', '61WhatsApp Image 2021-07-09 at 11.34.58 - Copy (2).jpeg', '83WhatsApp Image 2021-07-09 at 11.34.58 - Copy (3).jpeg', '93WhatsApp Image 2021-07-09 at 11.34.58 - Copy.jpeg', '59WhatsApp Image 2021-07-09 at 11.34.58.jpeg', '', 'no', '5150', '10300'),
(16, ' Lightening Face Cream', 3500, '<p>&nbsp;Lightening Face Cream<br></p>', '', 'Mini', 'Jumbo', '2021-07-09 17:50:26', 'PRODUCT', '83WhatsApp Image 2021-07-09 at 11.14.10 - Copy (2).jpeg', '26WhatsApp Image 2021-07-09 at 11.14.10 - Copy (3).jpeg', '93WhatsApp Image 2021-07-09 at 11.14.10 - Copy.jpeg', '19WhatsApp Image 2021-07-09 at 11.14.10.jpeg', '', 'no', '3500', '4600');

-- --------------------------------------------------------

--
-- Table structure for table `saddress`
--

CREATE TABLE `saddress` (
  `id` int(11) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saddress`
--

INSERT INTO `saddress` (`id`, `ref`, `name`, `email`, `phone`, `address`) VALUES
(1, '2480817', 'Jerry Coinrency', 'jerryadenij@gmail.com', '08063509221', 'Country: NG | State: LA | Address : 29 2nd Avenue'),
(2, '5182143', 'Jerry Coinrency', 'jerryadenij@gmail.com', '08063509221', 'Country: NG | State: LA | Address : 29 2nd Avenue'),
(3, '592517', 'Jerry Coinrency', 'jerryadenij@gmail.com', '08063509221', 'Country: NG | State: LA | Address : 29 2nd Avenue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `saddress`
--
ALTER TABLE `saddress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `saddress`
--
ALTER TABLE `saddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
