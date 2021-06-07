-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 06:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snkrsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_sepatu` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_sepatu`, `nama`, `harga`, `gambar`, `detail`) VALUES
(1, 'VTG V2 Natural White', 399000, 'VTG V2 Natural White WS.png', 'Vantage, chapter baru dari #sepatuperjuangan, lahir di tengahkondisi dunia yang dilanda pandemi'),
(2, 'BASE V2 BLACK GS', 299000, 'BASE V2 BLACK GS.png', 'Sneakers jenis classictrainerini adalah \"senjata\" baru di arsenal brothers semua. '),
(3, 'Saga Combat Oxblood', 599000, 'SAGA COMBAT OXBLOOD IS.png', 'Dengan melanjutkan series sebelumnya Saga Riding Sneakers, dan terinspirasi dari vintage military boots, Saga Combat Boots hadir untuk melengkapi jiwa para petualang.'),
(4, 'Vuntura Eco Black', 599000, 'VUNTURA ECO FULL BLACK.png', 'Active Kaze Racer, sebuah development terbaru dari Brodo. Bagian atas yang menggunakan engineer mesh with super breathability air flow.'),
(5, 'SAGA Urban Boots Olive', 599000, 'SAGA Urban Boots Olive.webp', 'Teruntuk para pejuang yang merindukan sebuah perjalanan, petualangan, yang tidak mau berhenti di saat semua terhenti. Saga hadir sebagai representasi dari cerita mereka.'),
(6, 'Base Sepatokimin Yellow', 299000, 'BASE SEPATOKIMIN ECOPRINT YELLOW-1.png', 'Kembali melanjutkan perjuangan bersama untuk terus berjalan dan membuat cerita bahagia, Snkrs membawa kembali kenangan indah bersama Vulcan Boots Lo. '),
(7, 'Saga Vantage HI V2 Corduroy', 399000, 'VANTAGE HI V2 CORDUROY.png', 'Alpha adalah design boots pertama kami Boots ini menggunakan design boots toe cap basic sengaja dibuat untuk para gentlemen yang mencari sepatu tangguh untuk berpetualang.'),
(8, 'VTG Derby Navy', 299000, 'VTG Derby Navy.webp', 'Lahir dalam rangkaian #SepatuApresiasi, Vantage V2 hadir dengan semangat untuk membangun kepercayaan diri. Desain dan warna netral memberikan ruang berekspresi bagi penggunanya.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `type`) VALUES
(15, 'ASD', 'ASD@email.com', '$2y$10$4SMeS04y5uyta2715ztBwu4DzY5r5aB11cruEaAtEbO', 0),
(16, 'qwe', 'qwe@mail.com', '$2y$10$DvFJMQFxUxG/3XobpXoJ1uUYKXTc54dgxh0oyt7vjS3', 0),
(17, 'lipan', 'lipan@mail.com', '$2y$10$ciai5vvGI/tpTjPKq9eRs.k6LKLxtmjQcdXxi3Y5qGuzVimH6wpUq', 0),
(18, 'admin', 'admin@mail.com', '$2y$10$gVdUVkiLa6t3dKOu72q1XOB8sHHPYbcssa1JSfXNDePP33/b1uXnK', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_sepatu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_sepatu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
