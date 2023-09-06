-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 01:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_mobil_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id` int(11) NOT NULL,
  `merk` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  `no_polisi` varchar(45) DEFAULT NULL,
  `jumlah_kursi` int(11) DEFAULT NULL,
  `tahun_beli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id`, `merk`, `nama`, `warna`, `no_polisi`, `jumlah_kursi`, `tahun_beli`) VALUES
(6, 'Suzuki', 'Ertiga', 'Putih', 'N 1254 AD', 6, 2021),
(8, 'Honda', 'HRV', 'Merah', 'N 7554 R', 6, 2020),
(55, 'Mitsubishi', 'XPander', 'Hitam', 'N 1234 Y', 8, 2021),
(56, 'Daihatsu', 'Xenia', 'Silver', 'N 6674 YG', 8, 2020),
(57, 'Nissan', 'Serena', 'Cokelat', 'AG 4457 E', 7, 2020),
(61, 'Datsun', 'Go+', 'Aqua', 'L 1348 H', 5, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesan`
--

CREATE TABLE `tbl_pemesan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `nik` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pemesan`
--

INSERT INTO `tbl_pemesan` (`id`, `nama_pemesan`, `gender`, `nik`, `alamat`, `no_telp`) VALUES
(10, 'Elsi', 'Perempuan', '231578', 'Sulfat', '0891224367'),
(21, 'Ereen', 'Perempuan', '35712345678', 'Sulfat', '08912345678'),
(23, 'Budi Remifa', 'Laki-laki', '3571234567009', 'Turen', '0879123632');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perjalanan`
--

CREATE TABLE `tbl_perjalanan` (
  `id` int(11) NOT NULL,
  `kota_asal` varchar(45) DEFAULT NULL,
  `kota_tujuan` varchar(45) DEFAULT NULL,
  `jarak` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_perjalanan`
--

INSERT INTO `tbl_perjalanan` (`id`, `kota_asal`, `kota_tujuan`, `jarak`) VALUES
(1, 'Malang', 'Surabaya', '85'),
(4, 'Lumajang', 'Banyuwangi', '60'),
(9, 'Salatiga', 'Yogyakarta', '90'),
(15, 'Surabaya', 'Jogja', '200'),
(16, 'Bali', 'Surabaya', '410');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `nama_mobil` varchar(100) NOT NULL,
  `id_perjalanan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `jenis_bayar` varchar(100) NOT NULL,
  `byk_hari` int(10) NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id`, `nama_pemesan`, `nama_mobil`, `id_perjalanan`, `harga`, `jenis_bayar`, `byk_hari`, `tanggal_ambil`, `tanggal_kembali`) VALUES
(18, 'Kaleluna Abigail', 'Toyota Ertiga New', 'Malang - Surabaya (85 km)', '110000', 'Cash', 2, '2022-06-22', '2022-07-01'),
(20, 'Kalandra', 'Mitsubishi XPander', 'Jakarta - Bandung (50 km)', '260000', 'Cash', 2, '2022-06-24', '2022-06-26'),
(22, 'Ani', 'Honda HRV', 'Jakarta - Bandung (50 km)', '220000', 'Cash', 2, '2022-06-23', '2022-06-25'),
(36, 'Budi Remifa', 'Mitsubishi XPander', 'Surabaya - Jogja (200 km)', '250000', 'Cash', 4, '2022-07-04', '2022-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(5, 'admin', 'admin@gorent.co.id', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'Ereen Lourenza', 'ereen@gmail.com', 'a3f10b1df8fb1fab4477e170ac6f6ac0'),
(9, 'Elsi Puspitasari', 'elsip@gmail.com', 'e18f0dfcda76abad32f1851b10954507'),
(16, 'Budi', 'budi@gmail.com', '00dfc53ee86af02e742515cdcf075ed3'),
(17, 'Rina', 'rina@gmail.com', '3aea9516d222934e35dd30f142fda18c'),
(18, 'Satria Yudha Darma', 'satriayud@gmail.com', '477054c78baea7a1242f79d898a2ca46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_perjalanan`
--
ALTER TABLE `tbl_perjalanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
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
-- AUTO_INCREMENT for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_perjalanan`
--
ALTER TABLE `tbl_perjalanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
