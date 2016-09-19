-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2014 at 11:52 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi_ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status` varchar(25) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `Tanggal Daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `status`, `no_telepon`, `keterangan`, `Tanggal Daftar`) VALUES
('000033310', 'Crowl', 'margaasih', '2000-10-02', '2000-10-02', 'laki-laki', 'Belum Menikah', '089129345', 'kel kel', '2014-02-25 02:00:36'),
('1113308', 'Sadan', 'Komplek Permata Cimahi', '1995-12-27', 'Bandung', 'laki-laki', 'Belum Menikah', '089656161575', 'WOw sekali', '0000-00-00 00:00:00'),
('3331108', 'sadis', 'cipetet', '1996-12-18', 'Bandung', 'perempuan', 'Belum Menikah', '0899680843', 'Wew sekali', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE IF NOT EXISTS `angsuran` (
  `id_angsuran` varchar(12) NOT NULL,
  `id_kategori` varchar(12) NOT NULL,
  `id_anggota` varchar(12) NOT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `angsuran_ke` varchar(12) NOT NULL,
  `besar_angsuran` varchar(12) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `id_pinjaman` varchar(12) NOT NULL,
  PRIMARY KEY (`id_angsuran`),
  KEY `FK_angsuran` (`id_pinjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `id_kategori`, `id_anggota`, `tanggal_pembayaran`, `angsuran_ke`, `besar_angsuran`, `keterangan`, `id_pinjaman`) VALUES
('100', '3', '000033310', '2014-02-25 09:07:36', '4', '10000', 'belum lunas', '1111'),
('3131', '1', '3331108', '2014-02-22 20:10:35', '2', '50000', 'belum lunas', '1313'),
('656', '1', '3331108', '2014-02-22 20:21:56', '3', '200000', 'lunas', '1615');

-- --------------------------------------------------------

--
-- Table structure for table `detail_angsuran`
--

CREATE TABLE IF NOT EXISTS `detail_angsuran` (
  `kode_angsuran` varchar(12) NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `besar_angsuran` varchar(12) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_angsuran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pinjaman`
--

CREATE TABLE IF NOT EXISTS `kategori_pinjaman` (
  `id_kategori_pinjaman` varchar(12) NOT NULL DEFAULT '',
  `nama_pinjaman` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kategori_pinjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pinjaman`
--

INSERT INTO `kategori_pinjaman` (`id_kategori_pinjaman`, `nama_pinjaman`) VALUES
('1', 'pinjaman jangka pendek'),
('2', 'pinjaman jangka menengah'),
('3', 'pinjaman jangka panjang');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_koperasi`
--

CREATE TABLE IF NOT EXISTS `petugas_koperasi` (
  `id_petugas` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_koperasi`
--

INSERT INTO `petugas_koperasi` (`id_petugas`, `nama`, `alamat`, `no_telepon`, `tempat_lahir`, `tanggal_lahir`, `keterangan`) VALUES
('987654321', 'Tomfu Chalk', 'Chalk Zone', '99999', 'Global tv', '1000-02-12', 'Chalk Zone Global tv');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `id_pinjaman` int(12) NOT NULL,
  `nama_pinjaman` varchar(40) NOT NULL,
  `id_anggota` varchar(12) NOT NULL,
  `besar_pinjaman` varchar(12) NOT NULL,
  `tanggal_pengajuan_pinjaman` date NOT NULL,
  `tanggal_acc_peminjam` date NOT NULL,
  `tanggal_pinjaman` date NOT NULL,
  `tanggal_pelunasan` date NOT NULL,
  `id_angsuran` varchar(12) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `id_kategori_pinjaman` varchar(12) NOT NULL,
  `id_petugas` varchar(12) NOT NULL,
  `besar_jasa` varchar(15) NOT NULL,
  `lama_cicilan` varchar(15) NOT NULL,
  `besar_angsuran` varchar(15) NOT NULL,
  `sisa_pinjaman` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pinjaman`),
  KEY `FK_pinjaman-petugas` (`id_petugas`),
  KEY `FK_pinjaman-anggota` (`id_anggota`),
  KEY `FK_pinjaman-kategori` (`id_kategori_pinjaman`),
  KEY `FK_pinjaman_angsuran` (`id_angsuran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `nama_pinjaman`, `id_anggota`, `besar_pinjaman`, `tanggal_pengajuan_pinjaman`, `tanggal_acc_peminjam`, `tanggal_pinjaman`, `tanggal_pelunasan`, `id_angsuran`, `keterangan`, `id_kategori_pinjaman`, `id_petugas`, `besar_jasa`, `lama_cicilan`, `besar_angsuran`, `sisa_pinjaman`) VALUES
(1111, 'modal', '000033310', '100000000', '2014-02-19', '2014-02-26', '2014-02-05', '2014-02-13', '100', 'belum lunas', '3', '987654321', '10', '12', '10000', '-10000'),
(1313, 'beli buku', '3331108', '200000', '2014-02-03', '2014-02-04', '2014-02-04', '2014-02-11', '3131', 'belum lunas', '1', '987654321', '3', '1', '50000', '1000000'),
(1615, 'Nyoba pinjam', '3331108', '1000000', '2014-02-02', '2014-02-02', '2014-02-02', '2014-02-02', '656', 'belum lunas', '1', '987654321', '5', '1', '200000', '1000000'),
(2222, 'dagang', '000033310', '1000000', '2014-02-19', '2014-02-13', '2014-02-14', '2014-02-21', '200', 'belum lunas', '2', '987654321', '5', '3', '2000', '998000');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE IF NOT EXISTS `simpanan` (
  `id_simpanan` varchar(12) NOT NULL,
  `nama_simpanan` varchar(40) NOT NULL,
  `id_petugas` varchar(12) NOT NULL,
  `id_anggota` varchar(12) NOT NULL,
  `tanggal_simpanan` date NOT NULL,
  `besar_simpanan` varchar(12) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_simpanan`),
  KEY `FK_petugas-simpanan` (`id_petugas`),
  KEY `FK_simpanan-anggota` (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `nama_simpanan`, `id_petugas`, `id_anggota`, `tanggal_simpanan`, `besar_simpanan`, `keterangan`) VALUES
('12', '12', '21', '000033310', '2014-02-03', '1000000', 'lakslaks'),
('1212', 'asas', '212', '1113308', '2014-02-04', '10000', 'wwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(20) NOT NULL,
  `id` varchar(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `id`) VALUES
('crowl', 'crowl', 'anggota', '000033310'),
('qk', 'klqw', 'petugas', 'PTG32'),
('sadan', 'admin', 'admin', '01'),
('sadis', 'sadis', 'anggota', '3331108'),
('saya', 'anggota', 'anggota', '1113308'),
('tomfu', 'tomfu', 'petugas', '987654321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
