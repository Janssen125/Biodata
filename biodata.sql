-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 03:10 AM
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
-- Database: `pendaftaran-ekskul`
--

-- --------------------------------------------------------

--
-- Table structure for table `historysaran`
--

CREATE TABLE `biodata` (
    `id` int(11) NOT NULL,
    `no_urut` int(3)  NOT NULL,
    `nomor_induk_karyawan` varchar(8) NOT NULL,
    `unit` varchar(3) NOT NULL,
    `nama_lengkap` varchar(50) NOT NULL,
    `jenis_kelamin` enum('L','P') NOT NULL,
    `jabatan` varchar(20) NOT NULL,
    `tanggal_mulai_tugas` date NOT NULL,
    `status karyawan` varchar(10) NOT NULL,
    `skpwt/sk` varchar(25) NOT NULL,
    `tempat_lahir`varchar(20) NOT NULL,
    `tanggal_lahir` date NOT NULL,
    `umur` int(3) NOT NULL,
    `medical_check_up` date NOT NULL,
    `status_kk` varchar(3) NOT NULL,
    `nik_ktp` int(16) NOT NULL,
    `alamat_ktp` text NOT NULL,
    `no_npwp` int(16) NOT NULL,
    `alamat_npwp` text NOT NULL,
    `rekening_sinarmas` int(10) NOT NULL,
    `bpjs_tenaga_kerja` int(11) NOT NULL,
    `bpjs_kesehatan` int(13) NOT NULL,
    `pendidikan_terakhir` varchar(5) NOT NULL,
    `jurusan` varchar(25) NOT NULL,
    `lama_kerja` int(2) NOT NULL,
    `alamat_sekarang` varchar(25) NOT NULL,
    `nohp` varchar(13) NOT NULL,
    `agama` varchar(13) NOT NULL,
    `golongan_darah` varchar(3) NOT NULL,
    `email_sekolah` varchar(50) NOT NULL,
    `email_pribadi` varchar(50) NOT NULL,
    `status_relawan` varchar(10) NOT NULL,
    `id_relawan` int(10) NOT NULL,
    `resign` enum('AKTIF', 'MATI') NOT NULL,
    `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------

--
-- Indexes for table `historysaran`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
