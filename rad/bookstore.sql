-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 12:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `author` varchar(512) DEFAULT NULL,
  `publisher` varchar(256) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `image` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `category`, `price`, `image`) VALUES
(1, 'Dnevnik jednog carobnjaka', 'Paulo Koeljo', 'Laguna', 1, '900.00', 'knjiga1.jpg'),
(2, 'Kad su cvetale tikve', 'Dragoslav Mihailovic', 'Laguna', 4, '500.00', 'knjiga3.jpg'),
(3, 'Ana Karenjina', 'Lav Tolstoj', 'Laguna', 1, '300.00', 'knjiga2.jpg'),
(4, 'Ognjen', 'Ognjen Manojlovic', 'Ognjen i sinovi', 8, '9999.99', ''),
(5, 'Ognjen', 'Ognjen Manojlovic', 'Ognjen i sinovi', 3, '9999.99', 'logo.jpg'),
(6, 'Dripacka rapsodija', 'Aleksandar Bilanovic', 'Laguna', 4, '800.00', 'baner2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Romani'),
(2, 'Bajke'),
(3, 'Komedija'),
(4, 'Biografije'),
(5, 'Putopisi'),
(6, 'Ekonomija'),
(7, 'Istinite price'),
(8, 'Kursevi'),
(9, 'Prirodne nauke'),
(10, 'Medicina'),
(11, 'Literatura'),
(12, 'Umetnost'),
(13, 'Filozofija'),
(14, 'Istorija'),
(15, 'Knjige za decu'),
(16, 'Recnik'),
(17, 'Politika');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `ptodutcs` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `ptodutcs`) VALUES
(1, 'pera', 'duska vujosevica', '{\"1\":6,\"5\":8,\"6\":11,\"3\":\"1\",\"2\":\"1\"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(90) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `status`) VALUES
(1, 'Ognjen', '123', 'ognjenma90@gmail.com', 'Ognjen', 'Manojlovic', 3),
(2, 'ronaldo', '456', 'ronaldo@gmail.com', 'Luiz Nazaro de Lima', 'Ronaldo', 1),
(3, 'kaka', '789', 'kaka@gmail.com', 'Rikardo', 'Kaka', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
