-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 04:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `objekwisata`
--

CREATE TABLE `objekwisata` (
  `id_wisata` int(10) NOT NULL,
  `nama_tempat` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL,
  `operasional` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objekwisata`
--

INSERT INTO `objekwisata` (`id_wisata`, `nama_tempat`, `alamat`, `harga`, `operasional`) VALUES
(1, 'Air Terjun Pringgodani', 'desa Blumbang', 3000, '08.00–17.00');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `pilihan_pembayaran` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_wisatawan` int(10) NOT NULL,
  `jumlah_tiket` int(4) NOT NULL,
  `kategori_pesanan` varchar(20) NOT NULL,
  `tanggal_berkunjung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_wisatawan`, `jumlah_tiket`, `kategori_pesanan`, `tanggal_berkunjung`) VALUES
(1, 14, '2', '0000-00-00'),
(2, 10, '2', '0000-00-00'),
(3, 10, '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `username` char(22) NOT NULL,
  `password` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `firstName`, `lastName`, `username`, `password`) VALUES
(1, 'Isaac', 'Muhammad', 'isaac', 'isaac123'),
(4, 'Isaac', 'Jelek', 'jelek', 'jelek123'),
(5, 'aak', 'jl', 'aak', 'aak123'),
(6, 'judda', 'adi', 'judda', 'judda123'),
(7, 'Isaac', 'Muhammad', 'haha', 'haha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objekwisata`
--
ALTER TABLE `objekwisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_wisatawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objekwisata`
--
ALTER TABLE `objekwisata`
  MODIFY `id_wisata` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_wisatawan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
