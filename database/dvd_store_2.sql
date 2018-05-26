-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 04:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvd_store_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(10) NOT NULL,
  `id_cat_p` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `id_cat_p`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(1, 1, '2018-04-24 11:51:13', 'black panther', 'Black_Panther_film_poster.jpg', 'Black_Panther_film_poster.jpg', 'Black_Panther_film_poster.jpg', 40000, 'Black Panther is a 2018 American superhero film based on the Marvel Comics character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the eighteenth film in the Marvel Cinematic Universe (MCU).', 'horror'),
(3, 2, '2018-04-24 15:17:39', 'Avenger-Infinity War', 'Avengers_Infinity_War_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 50000, 'enter data into a database containing foreign keys', 'Infinity War'),
(5, 1, '2018-04-24 15:48:19', 'Mak Lampir', 'Avengers_Infinity_War_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 30000, 'mak lampir indonesia', 'mak lampir'),
(6, 1, '2018-04-24 15:50:32', 'tester', 'Avengers_Infinity_War_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 50000, 'mak lampir indonesia', 'horror'),
(7, 1, '2018-04-24 15:51:03', 'test2', 'Black_Panther_film_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 'Avengers_Infinity_War_poster.jpg', 25000, 'mak lampir indonesia', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `id_cat_p` int(10) NOT NULL,
  `cat_p_title` text NOT NULL,
  `cat_p_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`id_cat_p`, `cat_p_title`, `cat_p_desc`) VALUES
(1, 'HORROR', 'Horror movies contain scream action '),
(2, 'DRAMA', 'Drama movies contain love scene and any romantic scene');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slide_id`, `slide_name`, `slide_images`) VALUES
(1, 'slide 1', '1.jpg'),
(2, 'slide 2', '2.jpg'),
(3, 'slide 3', '3.jpg'),
(4, 'slide 4', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_cat_p` (`id_cat_p`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`id_cat_p`),
  ADD KEY `id_cat_p` (`id_cat_p`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `id_cat_p` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_cat_p`) REFERENCES `tbl_product_category` (`id_cat_p`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
