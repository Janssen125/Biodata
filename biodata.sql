-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 01:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nomor_induk_karyawan` varchar(8) NOT NULL,
  `unit` varchar(3) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tanggal_mulai_tugas` date NOT NULL,
  `status_karyawan` varchar(10) NOT NULL,
  `skpwt/sk` varchar(25) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `medical_check_up` date NOT NULL,
  `status_kk` varchar(3) NOT NULL,
  `nik_ktp` varchar(16) NOT NULL,
  `alamat_ktp` text NOT NULL,
  `no_npwp` varchar(16) NOT NULL,
  `alamat_npwp` text NOT NULL,
  `rekening_sinarmas` varchar(10) NOT NULL,
  `bpjs_tenaga_kerja` varchar(11) NOT NULL,
  `bpjs_kesehatan` varchar(13) NOT NULL,
  `pendidikan_terakhir` varchar(5) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `alamat_sekarang` varchar(25) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `agama` varchar(13) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `email_sekolah` varchar(50) NOT NULL,
  `email_pribadi` varchar(50) NOT NULL,
  `status_relawan` varchar(10) NOT NULL,
  `id_relawan` varchar(10) NOT NULL,
  `resign` enum('AKTIF','MATI','RESIGN') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nomor_induk_karyawan`, `unit`, `nama_lengkap`, `jenis_kelamin`, `jabatan`, `tanggal_mulai_tugas`, `status_karyawan`, `skpwt/sk`, `tempat_lahir`, `tanggal_lahir`, `medical_check_up`, `status_kk`, `nik_ktp`, `alamat_ktp`, `no_npwp`, `alamat_npwp`, `rekening_sinarmas`, `bpjs_tenaga_kerja`, `bpjs_kesehatan`, `pendidikan_terakhir`, `jurusan`, `alamat_sekarang`, `nohp`, `agama`, `golongan_darah`, `email_sekolah`, `email_pribadi`, `status_relawan`, `id_relawan`, `resign`, `gambar`) VALUES
(1, '12312312', 'SMA', 'User', 'L', 'Guru', '2022-11-15', 'TETAP', '1231241242334243', 'JAKARTA', '2005-06-30', '2022-11-13', 'K1', '2147483647', 'Jl.123123123123143456346435', '2147483647', 'Jl.3213213121243546576876763453423', '1243546567', '2147483647', '1243546354768', 'S2', 'RPL', 'Jl. Sekarang No.12312312', '085101556689', 'Hindu', 'A', 'asd@gmail.com', 'asd@gmail.com', 'AK', '1234546576', 'RESIGN', '1.jpg'),
(2, '12312312', 'SMP', 'User', 'L', 'Guru', '2022-11-16', 'TETAP', '1231241242334243', 'JAKARTA', '2022-11-01', '2022-11-22', 'K1', '2147483647', 'Jl.123123123123143456346435', '2147483647', 'Jl.3213213121243546576876763453423', '1243546567', '2147483647', '1243546354768', 'SMK', 'RPL', 'Jl. Sekarang No.12312312', '0851064534888', 'Islam', 'A', 'user@gmail.com', 'user@gmail.com', 'AK', '1234546576', 'AKTIF', '2.jpg'),
(3, '12312312', 'SMA', 'User', 'L', 'Guru', '2022-11-15', 'TETAP', '1231241242334243', 'JAKARTA', '2005-02-25', '2022-11-13', 'K1', '2147483647', 'Jl.123123123123143456346435', '2147483647', 'Jl.3213213121243546576876763453423', '1243546567', '2147483647', '1243546354768', 'S2', 'RPL', 'Jl. Sekarang No.12312312', '085101556689', 'Hindu', 'AB', 'asd@gmail.com', 'asd@gmail.com', 'AK', '1234546576', 'RESIGN', 'Absen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `hak_akses` enum('Admin','Manager','User','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `email`, `nohp`, `hak_akses`) VALUES
(1, 'Janssen Addison', '202cb962ac59075b964b07152d234b70', 'janssenaddisonchen@gmail.com', '085101556689', 'Admin'),
(2, 'User', '202cb962ac59075b964b07152d234b70', 'user@gmail.com', '08123123123', 'User'),
(3, 'Manager', '202cb962ac59075b964b07152d234b70', 'manager@gmail.com', '085101556689', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
