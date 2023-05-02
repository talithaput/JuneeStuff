-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 08:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `junee`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `summary` text NOT NULL,
  `release_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `image`, `title`, `summary`, `release_at`) VALUES
(1, 'ilustrasi.png', 'Lettering and Illustration', 'Ukuran A6 : IDR 32k\r\nUkuran A5 : IDR 43k\r\nHarga sudah termasuk free greeting card aesthetic.\r\nFree box aesthetic extra sheredded paper.\r\nFreebies random.\r\nBubble wrap tebal (khusus pengiriman luar kota).', '2022-06-23'),
(2, 'satu.png', 'Lettering and One Picture', 'Ukuran A6 : IDR 35k\r\nUkuran A5 : IDR 46k\r\nHarga sudah termasuk free greeting card aesthetic.\r\nFree box aesthetic extra sheredded paper.\r\nFreebies random.\r\nBubble wrap tebal (khusus pengiriman luar kota).', '2022-06-23'),
(3, 'dua.png', 'Lettering and Two Pictures', 'Ukuran A6 : IDR 37k\r\nUkuran A5 : IDR 48k\r\nHarga sudah termasuk free greeting card aesthetic.\r\nFree box aesthetic extra sheredded paper.\r\nFreebies random.\r\nBubble wrap tebal (khusus pengiriman luar kota).', '2022-06-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
