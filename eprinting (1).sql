-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 05:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eprinting`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikin_pesanan`
--

CREATE TABLE `bikin_pesanan` (
  `no_pesanan` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_order` date NOT NULL,
  `jenis_pesanan` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `keterangan_tambahan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bikin_pesanan`
--

INSERT INTO `bikin_pesanan` (`no_pesanan`, `nama`, `tanggal_order`, `jenis_pesanan`, `file`, `ukuran`, `jumlah`, `keterangan_tambahan`) VALUES
('082322489428', 'Anindya Lutfia Apsari', '2024-06-14', 'foto', 'DSCF2004.JPG', '12x12', 7, '70.000');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `no_pesanan` varchar(50) NOT NULL,
  `jumlah_pembayaran` decimal(10,2) NOT NULL,
  `waktu_pembayaran` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `no_pesanan`, `jumlah_pembayaran`, `waktu_pembayaran`) VALUES
(1, '', '10000000.00', '2024-06-14 07:10:28'),
(2, '', '10000000.00', '2024-06-14 07:16:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikin_pesanan`
--
ALTER TABLE `bikin_pesanan`
  ADD PRIMARY KEY (`no_pesanan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
