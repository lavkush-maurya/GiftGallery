-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220907.bc4fa31a06
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 06:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `name`, `email`, `password`) VALUES
(1, 'vipul', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(30) NOT NULL,
  `date` varchar(34) NOT NULL,
  `time` varchar(30) NOT NULL,
  `total` int(34) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `items` int(11) NOT NULL,
  `oid` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `date`, `time`, `total`, `email`, `name`, `status`, `items`, `oid`) VALUES
(48, '2022-10-02', '12:16:11am', 2000, 'vipul@gmail.com', 'vipul nadge', 'cancelled', 1, '7747718'),
(49, '2022-10-02', '01:14:03am', 28000, 'vipul@gmail.com', 'vipul nadge', 'cancelled', 1, '4625718'),
(50, '2022-10-03', '09:00:07am', 21000, 'vipul@gmail.com', 'vipul nadge', 'pending', 1, '5416460'),
(51, '2022-10-03', '09:02:59am', 22000, 'vipul@gmail.com', 'vipul nadge', 'pending', 1, '9497149');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(30) NOT NULL,
  `pid` int(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pid`, `email`, `sid`) VALUES
(138, 14, 'admin@gmail.com', 'admin@gmail.com'),
(139, 5, 'admin@gmail.com', 'admin@gmail.com'),
(147, 6, 'vipuln932@gmail.com', 'vipul@gmail.com'),
(152, 5, 'vipul@gmail.com', 'admin@gmail.com'),
(153, 24, 'vipul@gmail.com', 'vipul@gmail.com'),
(154, 22, 'vipul@gmail.com', 'vipul@gmail.com'),
(155, 11, 'vipul@gmail.com', 'vipul@gmail.com'),
(156, 14, 'vipul@gmail.com', 'admin@gmail.com'),
(157, 25, 'vipul@gmail.com', 'vipul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(16, 'vipul@gmail.com', 'yt'),
(17, 'gdhgdh@gmail.com', 'hi'),
(18, 'wdsd@gmail.com', 'sdfsd'),
(19, 'wdsd@gmail.com', 'sdtdsfgsd'),
(20, 'wdsd@gmail.com', 'sdtdsfgsd');

-- --------------------------------------------------------

--
-- Table structure for table `pbill`
--

CREATE TABLE `pbill` (
  `id` int(30) NOT NULL,
  `pid` int(30) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` int(34) NOT NULL,
  `total` int(34) NOT NULL,
  `qty` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tdate` varchar(30) NOT NULL,
  `oid` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pbill`
--

INSERT INTO `pbill` (`id`, `pid`, `pname`, `price`, `total`, `qty`, `sid`, `email`, `tdate`, `oid`) VALUES
(78, 24, 'baby toy', 500, 2000, 4, 'vipul@gmail.com', 'vipul@gmail.com', '2022-10-02', '7747718'),
(79, 11, 'watch 1', 3500, 28000, 8, 'vipul@gmail.com', 'vipul@gmail.com', '2022-10-02', '4625718'),
(80, 14, 'samsung a21', 21000, 21000, 1, 'admin@gmail.com', 'vipul@gmail.com', '2022-10-03', '5416460'),
(81, 25, 'ring', 2000, 22000, 11, 'vipul@gmail.com', 'vipul@gmail.com', '2022-10-03', '9497149');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `customize` varchar(5) NOT NULL,
  `details` varchar(300) NOT NULL,
  `catogory` varchar(20) NOT NULL,
  `quantity` int(6) NOT NULL,
  `sid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `pimage`, `price`, `customize`, `details`, `catogory`, `quantity`, `sid`) VALUES
(5, 'dslr', 'pimage/camera.jpg', 64000, 'NO', 'canon 3d ultra hdr 4k camera dslr', 'camera', 9, 'admin@gmail.com'),
(6, 'cannon eos', 'pimage/cannon_eos.jpg', 30400, 'NO', 'canon eos 101 dslr', 'catogory', 3, 'vipul@gmail.com'),
(7, 'olymps dslr', 'pimage/olympus.jpg', 20000, 'NO', 'dslr', 'toys', 4, 'admin@gmail.com'),
(8, 'raymond', 'pimage/raymond.jpg', 3500, 'NO', 'raymond shirt', 'men', 3, 'admin@gmail.com'),
(9, 'radion watch', 'pimage/hmt.JPG', 3000, 'NO', 'hmt', 'catogory', 12, 'admin@gmail.com'),
(11, 'watch 1', 'pimage/titan301.jpg', 3500, 'NO', 'edifice watch', 'watch', 23, 'vipul@gmail.com'),
(12, 'apple watch', 'pimage/watch.jpg', 3500, 'NO', 'apple watch,', 'men', 34, 'vipul@gmail.com'),
(13, 'sony xlrm 4k dslr', 'pimage/sony_dslr2.jpeg', 35003, 'NO', 'edifice dslr', 'catogory', 2, 'admin@gmail.com'),
(14, 'samsung a21', 'pimage/samsung.jpg', 21000, 'NO', 'samsung a21, 8gb ram, super anulated display, 264gb storage ', 'phone', 210, 'admin@gmail.com'),
(16, 'necklace001', 'pimage/neck2.jpg', 4545, 'NO', 'necklace', 'daughter', 1, 'vipul@gmail.com'),
(17, 'heel201', 'pimage/heel3.jpg', 2000, 'NO', 'heel', 'grandmother', 21, 'vipul@gmail.com'),
(18, 'heel201', 'pimage/heel3.jpg', 2000, 'NO', 'heel201', 'sister', 100, 'vipul@gmail.com'),
(19, 'watch', 'pimage/lwatch2.jpg', 2000, 'NO', 'gift watch', 'wife', 10, 'vipul@gmail.com'),
(20, 'lipstick', 'pimage/lip1.png', 2000, 'NO', 'lipstick', 'girlfriend', 10, 'vipul@gmail.com'),
(21, 'teddy1', 'pimage/teddy1.jpg', 2000, 'NO', 'teddy bear', 'softtoys', 10, 'vipul@gmail.com'),
(22, 'teddy10', 'pimage/teddy2.jpg', 2000, 'NO', 'teddy bear', 'girlfriend', 10, 'vipul@gmail.com'),
(23, 'watch', 'pimage/lwatch1.jpg', 5000, 'NO', 'watch122', 'mens', 10, 'vipul@gmail.com'),
(24, 'baby toy', 'pimage/9msLDJjDS1Gun9ZrAQl1Onx3Dikg6K.jpg', 500, 'NO', 'toy', 'toys', 100, 'vipul@gmail.com'),
(25, 'ring', 'pimage/ring1.jpg', 2000, 'NO', 'ring', 'wife', 20, 'vipul@gmail.com'),
(26, 'ring', 'pimage/ring3.jpg', 2000, 'NO', 'rings', 'sister', 20, 'vipul@gmail.com'),
(27, 'mens perfume', 'pimage/per2.jpg', 5000, 'NO', 'perfume', 'mens', 20, 'vipul@gmail.com'),
(28, 'new best', 'pimage/neck2.jpg', 50000, 'NO', 'necklace', 'mother', 2, 'vipul@gmail.com'),
(29, 'purse', 'pimage/p1.png', 5600, 'NO', 'bag', 'mother', 20, 'vipul@gmail.com'),
(30, 'chappal', 'pimage/heel2.jpg', 4500, 'NO', 'new best', 'mother', 25, 'vipul@gmail.com'),
(31, 'jacket101', 'pimage/sweter1.jpg', 5000, 'NO', 'jacket', 'grandmother', 12, 'vipul@gmail.com'),
(32, 'cap', 'pimage/cap1.jpg', 2120, 'NO', 'new best', 'grandmother', 10, 'vipul@gmail.com'),
(33, 'cap', 'pimage/cap1.jpg', 2500, 'NO', 'new best', 'wife', 20, 'vipul@gmail.com'),
(34, 'Perfume2', 'pimage/per4.jpg', 1200, 'NO', 'new best', 'lifestyle', 10, 'vipul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(30) NOT NULL,
  `pid` int(31) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `pid`, `email`, `review`) VALUES
(1, 5, 'vipul@gmail.com', 'nice'),
(4, 5, 'vipul@gmail.com', 'great'),
(6, 14, 'admin@gmail.com', 'good product'),
(8, 14, 'vipul@gmail.com', 'great'),
(9, 0, '', ''),
(10, 34, 'vipul@gmail.com', 'ddd'),
(11, 34, 'vipul@gmail.com', 'ddd'),
(12, 34, 'vipul@gmail.com', 'good product'),
(17, 6, 'vipul@gmail.com', 'great'),
(19, 6, 'vipul@gmail.com', 'great');

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `profile` varchar(300) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(300) NOT NULL,
  `gender` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`id`, `profile`, `name`, `email`, `phone`, `password`, `address`, `gender`) VALUES
(1, 'image/lifestyleStore.png', 'vipul nadge', 'vipul@gmail.com', 2147483647, 'vipul', 'dindoli(surat)', 'male'),
(2, 'image/care.jpg', 'lavkush maurya', 'lav@gmail.com', 837458345, '12345', 'surat', 'male'),
(6, 'image/care.jpg', 'admin', 'admin@gmail.com', 2147483647, '12345', 'ade', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `ulogin`
--

CREATE TABLE `ulogin` (
  `id` int(11) NOT NULL,
  `profile` varchar(300) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(12) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(300) NOT NULL,
  `gender` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulogin`
--

INSERT INTO `ulogin` (`id`, `profile`, `name`, `email`, `phone`, `password`, `address`, `gender`) VALUES
(6, 'image/care.jpg', 'admin', 'admin@gmail.com', 2147483647, '123456', 'surat', 'male'),
(9, 'image/care.jpg', 'VIPUL BHASKAR NADGE', 'vipuln932@gmail.com', 2147483647, '121212', 'address', 'male'),
(10, 'image/myd.JPG', 'vipul nadge', 'vipul@gmail.com', 914748364, '12345678', 'Surat, india', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pbill`
--
ALTER TABLE `pbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pbill`
--
ALTER TABLE `pbill`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ulogin`
--
ALTER TABLE `ulogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
