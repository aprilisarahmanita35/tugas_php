-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 04:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokokue`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(255) DEFAULT NULL,
  `ukuran` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`, `ukuran`) VALUES
(1, 'Kue Kering', 'Kecil'),
(2, 'Kue Basah', 'Besar'),
(3, 'Kue Lebaran', 'Kecil'),
(4, 'Kue Ulang Tahun', 'Besar'),
(5, 'Kue Natal', 'Kecil'),
(10, 'Kue Modern', 'Besar'),
(11, 'Kue Tradisional', 'Besar'),
(12, 'Kue Modern', 'Kecil'),
(16, 'Kue Tradisional', 'Kecil');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(100) DEFAULT NULL,
  `ongkos_kirim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `ongkos_kirim`) VALUES
(1, 'Palembang', 27000),
(2, 'Jakarta', 25000),
(3, 'Bandung', 21000),
(4, 'Jogja', 22000),
(5, 'Aceh', 40000),
(6, 'Bogor', 20000),
(7, 'Padang', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `kustomer`
--

CREATE TABLE `kustomer` (
  `id_kustomer` int(11) NOT NULL,
  `nama_kustomer` varchar(255) DEFAULT NULL,
  `password_kustomer` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telpon` varchar(100) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kustomer`
--

INSERT INTO `kustomer` (`id_kustomer`, `nama_kustomer`, `password_kustomer`, `alamat`, `email`, `telpon`, `id_kota`) VALUES
(1, 'Aprilisa', '12345', 'Jl.Sejahtera', 'aprilisa@gmail.com', '0812345678', 1),
(2, 'Doyoung', '678910', 'Jl.Kelinci', 'doyoung@gmail.com', '08192537838', 4),
(3, 'Haechan', '11121314', 'Jl.Bunga         ', 'haechan@gmail.com', '082738938020', 3),
(4, 'Jaemin', '1516127', 'Jl.Kenanga                                                  ', 'jaemin@gmail.com', '08362819173', 2),
(5, 'Renjun', '171819', 'Neocity', 'renjun@gmail.com', '081917345', 5),
(6, 'Mark', 'markiee', 'Neocity', 'mark@gmail.com', '081737593', 2),
(15, 'Jaehyun', 'jaeganteng', 'Neocity', 'jaehyun@gmail.com', '08192739201', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `status_order` varchar(100) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `jam_order` time DEFAULT NULL,
  `id_kustomer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `status_order`, `tgl_order`, `jam_order`, `id_kustomer`) VALUES
(1, 'Sukses', '2023-10-03', '20:15:51', 1),
(2, 'Sukses', '2023-10-04', '19:15:52', 3),
(3, 'Batal', '2023-10-05', '15:00:00', 4),
(4, 'Batal', '2023-10-07', '10:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_orders` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders`, `id_produk`, `jumlah`) VALUES
(1, 6, 10),
(4, 5, 15),
(2, 1, 20),
(3, 2, 16),
(1, 3, 21);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `stok`, `tgl_masuk`) VALUES
(1, 3, 'Nastar', 40000, 7, '2023-10-03'),
(2, 1, 'Kastengel', 50000, 15, '2023-10-01'),
(3, 3, 'Putri Salju', 20000, 5, '2023-10-03'),
(4, 2, 'Bika Ambon', 100000, 6, '2023-10-04'),
(5, 2, 'Pukis', 10000, 10, '2023-10-05'),
(6, 4, 'Black Forest', 150000, 8, '2023-10-06'),
(9, 12, 'Chesee Cake', 25000, 10, '2023-11-05'),
(10, 1, 'Lidah Kucing', 20000, 17, '2023-11-07'),
(25, 5, 'Gingerbread Cookies', 45000, 20, '2023-11-09'),
(26, 16, 'Donat', 15000, 18, '2023-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `kustomer`
--
ALTER TABLE `kustomer`
  ADD PRIMARY KEY (`id_kustomer`),
  ADD KEY `FK_kustomer_kota` (`id_kota`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `FK_orders_kustomer` (`id_kustomer`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD KEY `FK_orders_detail_produk` (`id_produk`),
  ADD KEY `FK_orders_detail_orders` (`id_orders`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `FK_produk_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kustomer`
--
ALTER TABLE `kustomer`
  MODIFY `id_kustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kustomer`
--
ALTER TABLE `kustomer`
  ADD CONSTRAINT `FK_kustomer_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_kustomer` FOREIGN KEY (`id_kustomer`) REFERENCES `kustomer` (`id_kustomer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `FK_orders_detail_orders` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id_orders`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orders_detail_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_produk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
