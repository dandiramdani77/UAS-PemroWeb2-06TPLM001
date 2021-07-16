-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2021 at 03:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17251872_db_relawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelompok`
--

CREATE TABLE `tb_kelompok` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelompok`
--

INSERT INTO `tb_kelompok` (`nim`, `nama`) VALUES
('171011401714', 'DEIA IQBAL AFZANI'),
('171011402024', 'CUCU TRI RAMDANI'),
('181011400220', 'DANDI RAMDANI'),
('181011400362', 'ARFIRA TRISNA DEVI'),
('181011401013', 'ARIF FIANSYAH'),
('181011401120', 'DEDE AHMAD SOLIHIN'),
('181011401251', 'ARINDA CHINTYA SARI'),
('181011401732 ', 'ARNOLD AGUSTI PRATAMA'),
('181011402409', 'DIAN NOVIYANTO');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `nama`) VALUES
(1, 'Nanggroe Aceh Darussalam'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Selatan'),
(4, 'Sumatera Barat'),
(5, 'Bengkulu'),
(6, 'Riau'),
(7, 'Kepulauan Riau '),
(8, 'Jambi'),
(9, 'Lampung'),
(10, 'Bangka Belitung'),
(11, ' Banten'),
(12, 'DKI Jakarta'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah '),
(15, 'DI Yogyakarta'),
(16, 'Jawa timur'),
(17, 'Bali '),
(18, 'Nusa Tenggara Timur'),
(19, 'Nusa Tenggara Barat'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Timur '),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Tengah'),
(24, 'Kalimantan Utara'),
(25, 'Gorontalo '),
(26, 'Sulawesi Barat'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Tenggara'),
(30, 'Sulawesi Selatan'),
(31, 'Maluku Utara'),
(32, 'Maluku'),
(33, 'Papua Barat'),
(34, 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_relawan`
--

CREATE TABLE `tb_relawan` (
  `id_relawan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `keahlian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_relawan`
--

INSERT INTO `tb_relawan` (`id_relawan`, `nama`, `alamat`, `provinsi`, `email`, `nohp`, `keahlian`) VALUES
(2, 'Arfira Trisna Devi', 'Bogor', 'Jawa Barat', 'arfiratrisnadevi28@gmail.com', '081380806435', 'IT'),
(5, 'Arinda Chintya Sari', 'Pamulang', ' Banten', 'arinda@gmail.com', '081312345678', 'IT'),
(6, 'Arnold Agusti Pratama', 'Depok', 'Jawa Barat', 'arnoldagusti8@gmail.com', '081234458876', 'IT'),
(7, 'Deia Iqbal Afzani', 'jl. H. Sinda II no 31B Depok Beji Kukusan', 'Jawa Barat', 'afzani.iqbal@gmail.com', '082312333150', 'IT'),
(8, 'Cucu Tri Ramdani', 'Desa Panulisan Timur Dusun Cirungkun Kecamatan Dayeuhluhur Kabupaten Cilacap', 'Jawa Tengah ', 'ccutriramdani291298@gmail.com', '083844853167', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`, `level`, `photo`) VALUES
(1, 'kelompok2', 'kelompok2', 'Kelompok 2', 'admin', 'user.png'),
(2, '181011400220', '400220', 'Dandi Ramdani', 'admin', 'undraw_profile.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_relawan`
--
ALTER TABLE `tb_relawan`
  ADD PRIMARY KEY (`id_relawan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_relawan`
--
ALTER TABLE `tb_relawan`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
