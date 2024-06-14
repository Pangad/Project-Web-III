-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 09:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) CHARACTER SET latin1 NOT NULL,
  `keterangan` varchar(225) CHARACTER SET latin1 NOT NULL,
  `kategori` varchar(60) CHARACTER SET latin1 NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sepatu', 'Compass Gazelle Low Blck&Wht', 'Sepatu Pria', 450000, 2, 'sepatu.jpg'),
(2, 'Sepatu', 'Vans Ua Classic Slip-On', 'Sepatu Pria', 899000, 5, 'kamera.jpg'),
(3, 'Sepatu', 'Converse Chuck Taylor 70\'s - Hi', 'Sepatu Pria', 840000, 5, 'laptop.jpg'),
(4, 'Sepatu', 'Converse Chuck Taylor 70\'s - Low', 'Sepatu Wanita', 750000, 5, 'hp.jpg'),
(5, 'Sepatu', 'Vans Ua Classic Slip On Navy', 'Sepatu Wanita', 700000, 5, 'sepatu.jpg'),
(6, 'Sepatu', 'Vans Slip On Navy', 'Sepatu Pria', 700000, 5, 'sepatu.jpg'),
(7, 'Sepatu', 'Vans Slip On Black&White', 'Sepatu Anak-Anak', 800000, 5, 'sepatu.jpg'),
(8, 'Sepatu', 'Vans Slip On Red', 'Sepatu Anak-Anak', 700000, 5, 'kamera.jpg'),
(10, 'Sepatu', 'New Balence ', 'Sepatu Wanita', 600000, 5, 'laptop.jpg'),
(12, 'Sepatu', 'Spech Colab Sama Nike', 'Sepatu Anak-Anak', 700000, 5, 'hp1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Pangad Eko Putra', 'Bekasi, Jawa Barat', '2024-05-30 19:30:28', '2024-05-31 19:30:28'),
(2, 'Sarah Robiah', 'Tangerang Selatan', '2024-05-30 19:37:40', '2024-05-31 19:37:40'),
(3, 'El Kumar', 'Tangerang Selatan', '2024-05-31 17:18:44', '2024-06-01 17:18:44'),
(4, 'Kumar Ireng', 'Tangerang Selatan', '2024-06-04 02:01:36', '2024-06-05 02:01:36'),
(5, 'azhri', 'Tangerang Selatan', '2024-06-04 13:58:19', '2024-06-05 13:58:19'),
(6, '', '', '2024-06-04 14:49:49', '2024-06-05 14:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(60) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(5, 1, 1, 'Sepatu', 1, 450000, ''),
(6, 1, 2, 'Sepatu', 1, 899000, ''),
(7, 1, 3, 'Sepatu', 1, 840000, ''),
(8, 2, 1, 'Sepatu', 1, 450000, ''),
(9, 2, 2, 'Sepatu', 1, 899000, ''),
(10, 2, 3, 'Sepatu', 1, 840000, ''),
(11, 2, 4, 'Sepatu', 1, 750000, ''),
(12, 3, 1, 'Sepatu', 1, 450000, ''),
(13, 3, 2, 'Sepatu', 1, 899000, ''),
(14, 3, 3, 'Sepatu', 1, 840000, ''),
(15, 3, 4, 'Sepatu', 1, 750000, ''),
(16, 4, 1, 'Sepatu', 1, 450000, ''),
(17, 5, 1, 'Sepatu', 1, 450000, ''),
(18, 6, 1, 'Sepatu', 1, 450000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
UPDATE tb_barang SET stok = stok-NEW.jumlah
WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(2, 'admin', 'admin', '123', 1),
(3, 'user', 'user', '123', 2),
(4, 'elgasingnibos', 'elgasingnibos', '12345', 2),
(5, 'azhri', 'azhri', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
