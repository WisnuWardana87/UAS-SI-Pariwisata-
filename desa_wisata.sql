-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 03:08 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desa_wisata`
--
CREATE DATABASE IF NOT EXISTS `desa_wisata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `desa_wisata`;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_wisata`
--

CREATE TABLE IF NOT EXISTS `daftar_wisata` (
  `id_wisata` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `harga_tiket` varchar(128) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(128) NOT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `daftar_wisata`
--

INSERT INTO `daftar_wisata` (`id_wisata`, `nama`, `id_jenis`, `harga_tiket`, `jam_buka`, `jam_tutup`, `keterangan`, `foto`) VALUES
(5, 'Lacosta', 3, '20000', '08:30:00', '17:30:00', '<p style="text-align:justify"><s>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non pretium mi. Proin commodo tortor vel nisl laoreet pretium. Maecenas vulputate gravida ante, sed porta magna lacinia sit amet. Fusce eu magna eu turpis ullamcorper sollicitudin finibus nec erat. Proin sit amet convallis justo. Vestibulum interdum molestie felis eget suscipit. Cras commodo nisl nec tempor malesuada. Suspendisse at sodales ipsum. Praesent ac arcu tempor, finibus ex eu, ullamcorper enim. Nullam sit amet aliquet libero, ut imperdiet nunc. Donec rhoncus facilisis lacinia.</s></p>\r\n\r\n<p style="text-align:justify"><em>Cras ut dui nec eros consequat congue. Cras vitae scelerisque nisi. Maecenas bibendum eros aliquam ante commodo pulvinar. Quisque id sodales nisi, quis tempus risus. Cras at libero sed diam pulvinar maximus tristique quis sem. In bibendum elit tellus, non placerat risus dapibus id. Donec ultricies sit amet eros vel elementum. Donec sed sem ut sapien lobortis iaculis et sit amet nisi. In enim dolor, fringilla in volutpat in, volutpat sit amet orci. Fusce ultrices iaculis diam. Integer commodo massa ac faucibus cursus.</em></p>\r\n\r\n<p style="text-align:justify"><strong>Aliquam quis lectus lacus. Sed dapibus nisi eu ultricies tincidunt. In ipsum nisl, iaculis eu posuere vitae, convallis in lectus. Vivamus interdum turpis sed mauris imperdiet ornare. Etiam ac accumsan ante. Mauris vitae est imperdiet, viverra mi lobortis, tincidunt eros. Donec facilisis at lorem sed ornare. Aenean id erat tempus, sodales libero vitae, ultrices nunc. Ut quis egestas enim, consequat ultrices felis. Donec vel eros fringilla, ornare leo ac, finibus ligula. Quisque sed porttitor diam, at pretium nulla. Vivamus ut orci ac ligula ultrices rutrum.</strong></p>\r\n', 'images.jpg'),
(6, 'Krisna Waterpark', 1, '60000', '08:30:00', '17:30:00', '<p style="text-align:justify"><strong>Krisna waterpark adalah sebuah wahana rekreasi baru yang terletak di Temukus, Banjar, Kabupaten Buleleng. Krisna waterpark merupakan satu-satunya waterpark yang mempunyai kolam ombak yang bagian atasnya ditutupi dengan atap membran, sehingga terlindung dari sengatan terik matahari.&nbsp;Sesuai dengan konsep anak muda, Krisna Water Park yang dibangun diatas lahan seluas 3,5 Hektar di Desa Temukus ini memiliki berbagai macam wahana air dengan harga tiket yang tergolong murah. Selain itu, tempat ini juga menjadi wisata air satu-satunya di Bali yang memiliki kolam ombak</strong></p>\r\n', 'krisna1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_kunjungan`
--

CREATE TABLE IF NOT EXISTS `tb_data_kunjungan` (
  `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_wisatawan` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  PRIMARY KEY (`id_kunjungan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_data_kunjungan`
--

INSERT INTO `tb_data_kunjungan` (`id_kunjungan`, `kode_transaksi`, `email`, `nama_wisatawan`, `no_telepon`, `tgl_kunjung`) VALUES
(3, 0, 'wisnumario87@gmail.com', 'wisnu', '087754551067', '2020-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE IF NOT EXISTS `tb_jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(128) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Tempat Wisata'),
(2, 'Home Stay'),
(3, 'Rumah Makan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi_detail`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT,
  `kode_transaksi` bigint(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi_detail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_transaksi_detail`
--

INSERT INTO `tb_transaksi_detail` (`id_transaksi_detail`, `kode_transaksi`, `nama`, `harga`, `jumlah`, `id_wisata`) VALUES
(2, 20201213001, 'Lacosta', '20000', 1, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
