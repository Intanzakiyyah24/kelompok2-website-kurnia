-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 09:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kurnia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(12) NOT NULL,
  `id_pembelian` int(12) NOT NULL,
  `id_produk` int(12) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `harga` int(12) NOT NULL,
  `berat` int(12) NOT NULL,
  `jumlah` int(12) NOT NULL,
  `total_berat` int(12) NOT NULL,
  `total` int(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_pembelian`, `id_produk`, `nama_barang`, `harga`, `berat`, `jumlah`, `total_berat`, `total`, `tanggal`) VALUES
(7, 7, 27, 'tas ransel', 100000, 1000, 1, 1000, 100000, '2022-06-14'),
(8, 8, 29, 'tas ransel', 35000, 2000, 1, 2000, 35000, '2022-06-17'),
(9, 8, 28, 'tas ransela', 50000, 1000, 2, 2000, 100000, '2022-06-17'),
(10, 9, 28, 'tas ransela', 50000, 1000, 1, 1000, 50000, '2022-06-17'),
(11, 10, 28, 'tas ransela', 50000, 1000, 1, 1000, 50000, '2022-06-17'),
(12, 10, 27, 'tas ransel', 100000, 1000, 1, 1000, 100000, '2022-06-17'),
(13, 11, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 2, 260, 10000, '2022-06-28'),
(14, 12, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-06-28'),
(15, 13, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 2, 260, 10000, '2022-06-28'),
(16, 14, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-06-28'),
(17, 15, 62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 1, 175, 5500, '2022-06-28'),
(18, 16, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-06-30'),
(19, 17, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-03'),
(20, 17, 69, 'Binder Loose Leaf A5 100 Big BOSS Garis', 8000, 350, 1, 350, 8000, '2022-07-03'),
(21, 18, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-03'),
(22, 19, 74, 'KERTAS F4 COPY PAPER 1 RIM', 55000, 3000, 1, 3000, 55000, '2022-07-03'),
(23, 20, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-03'),
(24, 21, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 3, 390, 15000, '2022-07-03'),
(25, 21, 70, 'Binder Loose Leaf A5 50 Big BOSS Garis', 5000, 160, 1, 160, 5000, '2022-07-03'),
(26, 21, 87, 'Map Snelhecter Plastik Business - Merah', 3000, 60, 1, 60, 3000, '2022-07-03'),
(27, 22, 74, 'KERTAS F4 COPY PAPER 1 RIM', 55000, 3000, 1, 3000, 55000, '2022-07-03'),
(28, 23, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-06'),
(29, 23, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-06'),
(30, 24, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-06'),
(31, 25, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 3, 390, 15000, '2022-07-09'),
(32, 26, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 2, 260, 10000, '2022-07-10'),
(33, 26, 133, 'Isi Staples Kangaro No.10', 3000, 60, 1, 60, 3000, '2022-07-10'),
(34, 27, 70, 'Binder Loose Leaf A5 50 Big BOSS Garis', 5000, 160, 1, 160, 5000, '2022-07-10'),
(35, 28, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-10'),
(36, 29, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-10'),
(37, 30, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-10'),
(38, 31, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-11'),
(39, 32, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-11'),
(40, 33, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-11'),
(41, 34, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-11'),
(42, 35, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-12'),
(43, 36, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-12'),
(44, 37, 62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 1, 175, 5500, '2022-07-12'),
(45, 37, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-12'),
(46, 38, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-12'),
(47, 39, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 8, 1040, 40000, '2022-07-13'),
(48, 40, 70, 'Binder Loose Leaf A5 50 Big BOSS Garis', 5000, 160, 4, 640, 20000, '2022-07-13'),
(49, 40, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-13'),
(50, 41, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-13'),
(51, 42, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-13'),
(52, 43, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-13'),
(53, 44, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-13'),
(54, 45, 131, 'Stapler Max HD-10', 20000, 200, 1, 200, 20000, '2022-07-13'),
(55, 46, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-14'),
(56, 46, 62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 1, 175, 5500, '2022-07-14'),
(57, 47, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-14'),
(58, 48, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-14'),
(59, 49, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-14'),
(60, 50, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-14'),
(61, 51, 67, 'Buku Tulis SIDU 58 Lembar', 5000, 95, 1, 95, 5000, '2022-07-14'),
(62, 52, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-14'),
(63, 53, 75, 'Map Plastik Kancing - Biru', 3000, 35, 1, 35, 3000, '2022-07-14'),
(64, 54, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-14'),
(65, 55, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-14'),
(66, 56, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-16'),
(67, 57, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-07-16'),
(68, 58, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-07-16'),
(69, 59, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-11-08'),
(70, 59, 62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 1, 175, 5500, '2022-11-08'),
(71, 60, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-11-08'),
(72, 60, 62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 1, 175, 5500, '2022-11-08'),
(73, 61, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-11-08'),
(74, 61, 62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 1, 175, 5500, '2022-11-08'),
(75, 62, 74, 'KERTAS F4 COPY PAPER 1 RIM', 55000, 3000, 1, 3000, 55000, '2022-11-15'),
(76, 63, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-11-16'),
(77, 64, 62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 1, 175, 5500, '2022-11-16'),
(78, 65, 90, 'PENSIL 2B FABER CASTELL', 5000, 9, 1, 9, 5000, '2022-11-17'),
(79, 66, 91, 'Pensil 2B Joyko Hijau P88', 2000, 10, 1, 10, 2000, '2022-11-18'),
(80, 67, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-11-18'),
(81, 68, 67, 'Buku Tulis SIDU 58 Lembar', 5000, 95, 1, 95, 5000, '2022-11-18'),
(82, 69, 90, 'PENSIL 2B FABER CASTELL', 5000, 9, 1, 9, 5000, '2022-11-18'),
(83, 70, 90, 'PENSIL 2B FABER CASTELL', 5000, 9, 1, 9, 5000, '2022-11-18'),
(84, 71, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-11-18'),
(85, 72, 63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, 1, 130, 5000, '2022-11-18'),
(86, 73, 66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, 1, 85, 4500, '2022-11-24'),
(87, 74, 67, 'Buku Tulis SIDU 58 Lembar', 5000, 95, 1, 95, 5000, '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_payment` int(12) NOT NULL,
  `id_pembelian` int(12) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `bank` varchar(64) NOT NULL,
  `nominal` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_payment`, `id_pembelian`, `nama`, `bank`, `nominal`, `tanggal`, `bukti`) VALUES
(5, 7, 'irma', 'BANK - BCA', 115000, '2022-06-14', '20220614153650logo gunadarma.jpg'),
(6, 8, 'irma', 'BANK - BCA', 135000, '2022-06-28', '20220628121147logo gunadarma.jpg'),
(7, 15, 'irma', 'BANK - BCA', 30500, '2022-06-28', '20220628121252logo gunadarma.jpg'),
(8, 9, 'irma', 'BANK - BCA', 50000, '2022-07-03', '20220703125520d05a06c245c5a77963cac5bbd96c9c69.jpg'),
(9, 33, '', 'BANK - BCA', 20000, '2022-07-11', '20220711200619Untitled.png'),
(10, 34, 'Anindya Prasista', 'BANK - BCA', 20000, '2022-07-12', '20220712094630WhatsApp Image 2022-07-12 at 12.27.34.jpeg'),
(11, 36, 'irma', 'BANK - BCA', 20000, '2022-07-12', '20220712103827WhatsApp Image 2022-07-12 at 12.27.34.jpeg'),
(12, 37, 'irma', 'BANK - BCA', 10500, '2022-07-13', '20220713223506logo gunadarma.jpg'),
(13, 38, 'irma', 'BANK - BNI', 4500, '2022-07-13', '20220713224629logo gunadarma.jpg'),
(14, 39, 'irma', 'BANK - MANDIRI', 40000, '2022-07-13', '2022071323402513.jpeg'),
(15, 40, '', '', 25000, '2022-07-13', '2022071323562713.jpeg'),
(16, 55, '', '', 20000, '2022-07-15', '2022071514183913.jpeg'),
(17, 56, 'irma', 'BANK - BCA', 20000, '2022-07-16', '20220716055725logo gunadarma.jpg'),
(18, 58, 'irma', 'BANK - BCA', 20000, '2022-07-16', '2022071616541513.jpeg'),
(19, 59, '', 'BANK - BCA', 10000, '2022-11-08', '20221108175242logo gunadarma.jpg'),
(20, 60, 'rendi', 'BANK - BCA', 25000, '2022-11-08', '20221108175444logo gunadarma.jpg'),
(21, 62, 'irma', 'BANK - BCA', 70000, '2022-11-15', '20221115185147logo gunadarma.jpg'),
(22, 66, '', '', 27000, '2022-11-18', '20221118063633logo gunadarma.jpg'),
(23, 67, 'Irma Yanti', 'BANK - BCA', 19500, '2022-11-18', '20221118063919Bukti-Transfer-ATM-BCA.jpg'),
(24, 65, 'Irma Yanti', 'BANK - BCA', 20000, '2022-11-18', '20221118070801Bukti-Transfer-ATM-BCA.jpg'),
(25, 69, 'Irma Yanti', 'BANK - BCA', 20000, '2022-11-18', '20221118071755Bukti-Transfer-ATM-BCA.jpg'),
(26, 70, 'Irma Yanti', 'BANK - BCA', 20000, '2022-11-18', '20221118073455Bukti-Transfer-ATM-BCA.jpg'),
(27, 68, 'Irma Yanti', '', 20000, '2022-11-18', '20221118075730Bukti-Transfer-ATM-BCA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `id_ongkir` int(12) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(16) NOT NULL,
  `nama_kota` varchar(64) NOT NULL,
  `tarif` int(8) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `status_pembelian` varchar(32) NOT NULL DEFAULT 'pending',
  `resi_pengiriman` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `nama_kota`, `tarif`, `alamat_pengiriman`, `status_pembelian`, `resi_pengiriman`) VALUES
(7, 8, 1, '2022-06-14', 115000, 'Tangerang', 15000, 'rajeg', 'Selesai', '112324'),
(8, 8, 0, '2022-06-17', 135000, '', 0, 'rajeg', 'Terbayar', ''),
(9, 8, 0, '2022-06-17', 50000, '', 0, 'rajeg', 'Selesai', '35667778998'),
(10, 8, 0, '2022-06-17', 150000, '', 0, 'rajeg', 'pending', ''),
(11, 8, 0, '2022-06-28', 10000, '', 0, 'rajeg', 'pending', ''),
(12, 8, 0, '2022-06-28', 5000, '', 0, 'rajeg', 'pending', ''),
(13, 8, 0, '2022-06-28', 10000, '', 0, 'rajeg', 'pending', ''),
(14, 8, 0, '2022-06-28', 5000, '', 0, 'rajeg', 'pending', ''),
(15, 8, 3, '2022-06-28', 30500, 'DKI Jakarta', 25000, 'rajeg', 'Terbayar', ''),
(16, 8, 0, '2022-06-30', 5000, '', 0, 'rajeg', 'pending', ''),
(17, 8, 0, '2022-07-03', 13000, '', 0, 'rajeg', 'pending', ''),
(18, 8, 0, '2022-07-03', 5000, '', 0, 'rajeg', 'pending', ''),
(19, 8, 0, '2022-07-03', 55000, '', 0, 'rajeg', 'pending', ''),
(20, 8, 0, '2022-07-03', 4500, '', 0, 'rajeg', 'pending', ''),
(21, 8, 0, '2022-07-03', 23000, '', 0, 'rajeg', 'pending', ''),
(22, 8, 0, '2022-07-03', 55000, '', 0, 'rajeg', 'pending', ''),
(23, 8, 0, '2022-07-06', 9500, '', 0, 'rajeg', 'pending', ''),
(24, 11, 1, '2022-07-06', 19500, 'Tangerang', 15000, 'kutabumi', 'pending', ''),
(25, 8, 0, '2022-07-09', 15000, '', 0, 'rajeg', 'pending', ''),
(26, 8, 0, '2022-07-10', 13000, '', 0, 'rajeg', 'pending', ''),
(27, 8, 0, '2022-07-10', 5000, '', 0, 'rajeg', 'pending', ''),
(28, 8, 0, '2022-07-10', 4500, '', 0, 'rajeg', 'pending', ''),
(29, 8, 0, '2022-07-10', 4500, '', 0, 'rajeg', 'pending', ''),
(30, 8, 3, '2022-07-10', 29500, 'DKI Jakarta', 25000, 'rajeg', 'pending', ''),
(31, 8, 0, '2022-07-11', 5000, '', 0, 'rajeg', 'pending', ''),
(32, 8, 1, '2022-07-11', 20000, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(33, 14, 1, '2022-07-11', 20000, 'Tangerang', 15000, 'rajeg', 'Terbayar', ''),
(34, 14, 1, '2022-07-11', 20000, 'Tangerang', 15000, 'rajeg', 'Terbayar', ''),
(35, 14, 1, '2022-07-12', 20000, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(36, 15, 1, '2022-07-12', 20000, 'Tangerang', 15000, 'rajeg', 'Selesai', 'jfjf'),
(37, 15, 0, '2022-07-12', 10500, '', 0, 'rajeg', 'Selesai', 'cbjcafhaihf'),
(38, 15, 0, '2022-07-12', 4500, '', 0, 'rajeg', 'Terbayar', ''),
(39, 15, 0, '2022-07-13', 40000, '', 0, 'rajeg', 'Terbayar', ''),
(40, 15, 0, '2022-07-13', 25000, '', 0, 'rajeg', 'Terbayar', ''),
(41, 15, 0, '2022-07-13', 5000, '', 0, 'rajeg', 'pending', ''),
(42, 15, 1, '2022-07-13', 19500, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(43, 15, 1, '2022-07-13', 19500, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(44, 15, 1, '2022-07-13', 19500, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(45, 15, 1, '2022-07-13', 35000, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(46, 15, 0, '2022-07-14', 10500, '', 0, 'rajeg', 'pending', ''),
(47, 15, 0, '2022-07-14', 4500, '', 0, 'rajeg', 'pending', ''),
(48, 15, 0, '2022-07-14', 5000, '', 0, 'rajeg', 'pending', ''),
(49, 15, 0, '2022-07-14', 4500, '', 0, 'rajeg', 'pending', ''),
(50, 15, 1, '2022-07-14', 20000, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(51, 15, 1, '2022-07-14', 20000, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(52, 15, 3, '2022-07-14', 29500, 'DKI Jakarta', 25000, 'rajeg', 'pending', ''),
(53, 15, 0, '2022-07-14', 3000, '', 0, 'rajeg', 'pending', ''),
(54, 15, 1, '2022-07-14', 19500, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(55, 16, 1, '2022-07-14', 20000, 'Tangerang', 15000, 'rajeg', 'Terbayar', ''),
(56, 16, 1, '2022-07-16', 20000, 'Tangerang', 15000, 'rajeg', 'Terbayar', ''),
(57, 16, 1, '2022-07-16', 19500, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(58, 16, 1, '2022-07-16', 20000, 'Tangerang', 15000, 'rajeg', 'Terbayar', ''),
(59, 17, 0, '2022-11-08', 10000, '', 0, 'rajeg', 'Terbayar', ''),
(60, 17, 1, '2022-11-08', 25000, 'Tangerang', 15000, 'rajeg', 'Terbayar', ''),
(61, 17, 1, '2022-11-08', 25000, 'Tangerang', 15000, 'rajeg', 'pending', ''),
(62, 21, 1, '2022-11-15', 70000, 'Tangerang', 15000, 'rajeg', 'Selesai', 'adaafafa'),
(63, 21, 0, '2022-11-16', 5000, '', 0, 'rajeg', 'pending', ''),
(64, 21, 0, '2022-11-16', 5500, '', 0, 'rajeg', 'pending', ''),
(65, 22, 1, '2022-11-17', 20000, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'Barang Dikirim', '130480013750409'),
(66, 22, 3, '2022-11-18', 27000, 'DKI Jakarta', 25000, 'Rajeg, Kab. Tangerang', 'Terbayar', ''),
(67, 22, 1, '2022-11-18', 19500, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'Terbayar', ''),
(68, 22, 1, '2022-11-18', 20000, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'Terbayar', ''),
(69, 22, 1, '2022-11-18', 20000, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'Selesai', '130480013750409'),
(70, 22, 1, '2022-11-18', 20000, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'Barang Dikirim', '130480013750409'),
(71, 22, 1, '2022-11-18', 19500, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'pending', ''),
(72, 22, 1, '2022-11-18', 20000, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'pending', ''),
(73, 22, 1, '2022-11-24', 19500, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'pending', ''),
(74, 22, 1, '2022-11-24', 20000, 'Tangerang', 15000, 'Rajeg, Kab. Tangerang', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(12) NOT NULL,
  `nama_produk` varchar(64) NOT NULL,
  `harga_produk` int(12) NOT NULL,
  `berat_produk` int(12) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `gambar_2` varchar(64) NOT NULL,
  `gambar_3` varchar(64) NOT NULL,
  `detail_produk` text NOT NULL,
  `stok` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `gambar`, `gambar_2`, `gambar_3`, `detail_produk`, `stok`) VALUES
(62, 'Buku Tulis BM Campus 50 Lembar', 5500, 175, 'Untitled1.png', 'Untitled2.png', 'Untitled.png', '<p>Buku Tulis BMC 50&nbsp;Lembar<br />\r\nharga tertera untuk 1 buah buku / satuan</p>\r\n', 94),
(63, 'Buku Tulis BM Campus 36 Lembar', 5000, 130, '1.png', '2.png', '3.png', '<p>Buku Tulis BMC 36 Lembar<br />\r\nharga tertera untuk 1 buah buku / satuan</p>\r\n', 65),
(66, 'Buku Tulis SIDU 38 Lembar', 4500, 85, '6.png', '5.png', '4.jpg', '<p>Buku Tulis Sinar Dunia 38 Lembar<br />\r\nMotif random, berbeda2 motifnya.<br />\r\n1 Pak = 10 Pcs<br />\r\nHarga diatas Per Pcs</p>\r\n', 82),
(67, 'Buku Tulis SIDU 58 Lembar', 5000, 95, '7.png', '8.jpg', '9.png', '<p>Buku Tulis Sinar Dunia 58 Lembar<br />\r\nMotif random, berbeda2 motifnya.<br />\r\n1 Pak = 10 Pcs<br />\r\nHarga diatas Per Pcs</p>\r\n', 97),
(69, 'Binder Loose Leaf A5 100 Big BOSS Garis', 8000, 350, '13.png', '14.jpg', '15.jpg', '<p>Isi File Binder Loose Leaf A5&nbsp;Big Boss<br />\r\nHARGA 1 SET<br />\r\n1 Set = 100 sheets / lembar<br />\r\nLubang: 20 Holes</p>\r\n', 999),
(70, 'Binder Loose Leaf A5 50 Big BOSS Garis', 5000, 160, '10.png', '11.png', '12.png', '<p>Isi File Binder Loose Leaf A5&nbsp;Big Boss<br />\r\nHARGA 1 SET<br />\r\n1 Set = 50 sheets / lembar<br />\r\nLubang: 20 Holes</p>\r\n', 99),
(71, 'Binder Loose Leaf B5 50 Big BOSS Garis', 8000, 400, '16.png', '17.png', '18.png', '<p>Isi File Binder Loose Leaf B5&nbsp;Big Boss<br />\r\nHARGA 1 SET<br />\r\n1 Set = 50 sheets / lembar<br />\r\nLubang: 26&nbsp;Holes</p>\r\n', 100),
(72, 'Binder Loose Leaf B5 100 Big BOSS Garis', 12000, 750, '19.png', '21.png', '20.jpg', '<p>Isi File Binder Loose Leaf B5&nbsp;Big Boss<br />\r\nHARGA 1 SET<br />\r\n1 Set = 100 sheets / lembar<br />\r\nLubang: 26&nbsp;Holes</p>\r\n', 100),
(73, 'KERTAS A4 COPY PAPER 1 RIM', 50000, 2000, '22.png', '23.png', '24.png', '<p>Kami menjual HVS COPY PAPER&nbsp;ukuran A4<br />\r\nIsi 500 lembar / 1 RIM<br />\r\nKertas printer putih polos<br />\r\nHarga yang tertera 1 RIM (isi 500 Lembar)&nbsp;</p>\r\n', 10),
(74, 'KERTAS F4 COPY PAPER 1 RIM', 55000, 3000, '25.png', '26.png', '27.png', '<p>Kami menjual HVS COPY PAPER&nbsp;ukuran F4<br />\r\nIsi 500 lembar / 1 RIM<br />\r\nKertas printer putih polos<br />\r\nHarga yang tertera 1 RIM (isi 500 Lembar)</p>\r\n', 0),
(75, 'Map Plastik Kancing - Biru', 3000, 35, '28.png', '29.png', '30.png', '<p>Ready Map Kancing<br />\r\nUkuran: Folio<br />\r\nWarna biru<br />\r\nMap kancing plastik&nbsp;merupakan map yang berbahan plastik dengan penutup kancing sebagai penutup map.&nbsp;</p>\r\n', 29),
(76, 'Map Plastik Kancing - Hijau', 3000, 35, '31.png', '32.jpg', '33.png', '<p>Ready Map Kancing<br />\r\nUkuran: Folio<br />\r\nWarna hijau<br />\r\nMap kancing plastik&nbsp;merupakan map yang berbahan plastik dengan penutup kancing sebagai penutup map.</p>\r\n', 30),
(77, 'Map Plastik Kancing - Kuning', 3000, 35, '34.png', '35.jpg', '36.png', '<p>Ready Map Kancing<br />\r\nUkuran: Folio<br />\r\nWarna kuning<br />\r\nMap kancing plastik&nbsp;merupakan map yang berbahan plastik dengan penutup kancing sebagai penutup map.&nbsp;</p>\r\n', 30),
(78, 'Map Plastik Kancing - Merah', 3000, 35, '37.png', '38.png', '39.png', '<p>Ready Map Kancing<br />\r\nUkuran: Folio<br />\r\nWarna merah<br />\r\nMap kancing plastik&nbsp;merupakan map yang berbahan plastik dengan penutup kancing sebagai penutup map.&nbsp;</p>\r\n', 30),
(79, 'Map Plastik Kancing - Putih', 3000, 35, '40.png', '41.png', '42.png', '<p>Ready Map Kancing<br />\r\nUkuran: Folio<br />\r\nWarna putih<br />\r\nMap kancing plastik&nbsp;merupakan map yang berbahan plastik dengan penutup kancing sebagai penutup map.&nbsp;</p>\r\n', 30),
(80, 'Map Plastik Zipper Bag Resleting Folio - Biru', 12000, 750, '43.jpg', '44.png', '45.png', '<p>Map Zipper resleting Kancing plastik<br />\r\nUkuran: Folio<br />\r\nWarna biru<br />\r\nMap Zipper bag plastik Kancing&nbsp;merupakan map yang terbuat dari plastik dan resleting sebagai penutup map tersebut dengan pegangan seperti tas di tengahnya. Adanya Kancing di map ini membuat para user bisa menutup Zipper bag ini dengan aman. Biasa digunakan untuk menyimpan document dan kertas</p>\r\n', 20),
(81, 'Map Plastik Zipper Bag Resleting Folio - Hijau', 12000, 750, '46.png', '47.png', '48.png', '<p>Map Zipper resleting Kancing plastik<br />\r\nUkuran: Folio<br />\r\nWarna hijau<br />\r\nMap Zipper bag plastik Kancing&nbsp;merupakan map yang terbuat dari plastik dan resleting sebagai penutup map tersebut dengan pegangan seperti tas di tengahnya. Adanya Kancing di map ini membuat para user bisa menutup Zipper bag ini dengan aman. Biasa digunakan untuk menyimpan document dan kertas</p>\r\n', 20),
(82, 'Map Plastik Zipper Bag Resleting Folio - Kuning', 12000, 750, '49.jpeg', '50.jpeg', '51.jpeg', '<p>Map Zipper resleting Kancing plastik<br />\r\nUkuran: Folio<br />\r\nWarna kuning<br />\r\nMap Zipper bag plastik Kancing&nbsp;merupakan map yang terbuat dari plastik dan resleting sebagai penutup map tersebut dengan pegangan seperti tas di tengahnya. Adanya Kancing di map ini membuat para user bisa menutup Zipper bag ini dengan aman. Biasa digunakan untuk menyimpan document dan kertas</p>\r\n', 20),
(83, 'Map Plastik Zipper Bag Resleting Folio - Merah', 12000, 750, '52.png', '53.png', '54.png', '<p>Map Zipper resleting Kancing plastik<br />\r\nUkuran: Folio<br />\r\nWarna merah<br />\r\nMap Zipper bag plastik Kancing&nbsp;merupakan map yang terbuat dari plastik dan resleting sebagai penutup map tersebut dengan pegangan seperti tas di tengahnya. Adanya Kancing di map ini membuat para user bisa menutup Zipper bag ini dengan aman. Biasa digunakan untuk menyimpan document dan kertas</p>\r\n', 20),
(84, 'Map Snelhecter Plastik Business - Biru', 3000, 60, '55.png', '56.png', '57.png', '<p>Map Businnes File<br />\r\nUkuran : Folio / F4<br />\r\nLubang : 2 ( Denga Acco )<br />\r\nBahan : Plastik<br />\r\nCover : Plastik Transparant</p>\r\n', 20),
(85, 'Map Snelhecter Plastik Business - Hijau', 3000, 60, '58.png', '59.png', '60.png', '<p>Map Businnes File<br />\r\nUkuran : Folio / F4<br />\r\nLubang : 2 ( Denga Acco )<br />\r\nBahan : Plastik<br />\r\nCover : Plastik Transparant</p>\r\n', 20),
(86, 'Map Snelhecter Plastik Business - Kuning', 3000, 60, '61.png', '62.jpg', '63.png', '<p>Map Businnes File<br />\r\nUkuran : Folio / F4<br />\r\nLubang : 2 ( Denga Acco )<br />\r\nBahan : Plastik<br />\r\nCover : Plastik Transparant</p>\r\n', 20),
(87, 'Map Snelhecter Plastik Business - Merah', 3000, 60, '66.png', '65.png', '64.png', '<p>Map Businnes File<br />\r\nUkuran : Folio / F4<br />\r\nLubang : 2 ( Denga Acco )<br />\r\nBahan : Plastik<br />\r\nCover : Plastik Transparant</p>\r\n', 19),
(88, 'Map Snelhecter Plastik Business - Putih', 3000, 60, '67.png', '68.png', '69.jpg', '<p>Map Businnes File<br />\r\nUkuran : Folio / F4<br />\r\nLubang : 2 ( Denga Acco )<br />\r\nBahan : Plastik<br />\r\nCover : Plastik Transparant</p>\r\n', 20),
(89, 'Pembolong Kertas Kenko no.30 xl', 15000, 300, '70.png', '71.png', '72.png', '<p>Pembolong Kertas Kenko Punch No.30XL<br />\r\nWarna random ( sesuai stock yang ready )<br />\r\nHarga di atas di jual per 1 pcs</p>\r\n', 3),
(90, 'PENSIL 2B FABER CASTELL', 5000, 9, '73.jpg', '74.jpg', '75.jpg', '<p>Pensil 2B untuk komputer<br />\r\nHarga diatas adalah harga 1 buah pensil<br />\r\nPensil 2B Faber Castell merupakan pensil yang sudah diuji ketangguhanya dalam ujian dan sangat gemar digunakan untuk menulis dan dalam ujian. Harga yang terjangkau dan kualitasna membuat para user sangat senang menggunakan ini</p>\r\n', 117),
(91, 'Pensil 2B Joyko Hijau P88', 2000, 10, '76.jpg', '77.jpg', '78.jpg', '<p>Ready Pensil Joyko 2B P-88<br />\r\nDijual Dalam: 1 pcs / 1 buah pensil</p>\r\n', 119),
(92, 'Pensil Joyko Hitam P-92', 2000, 10, '79.jpg', '80.jpg', '81.jpg', '<p>Pencil Pensil Joyko P-92 2B<br />\r\nTipe : 2B Hitam<br />\r\nBentuk : Hexagonal Grip<br />\r\nKayu Hitam (Black Wood)<br />\r\nHarga&nbsp;1 pcs</p>\r\n', 120),
(93, 'Pulpen Faster C600 - Biru', 3000, 9, '82.png', '83.png', '84.png', '<p>Ready Pulpen Faster C600<br />\r\nUkuran: 0.7<br />\r\nHarga diatas adalah 1 pcs</p>\r\n', 100),
(94, 'Pulpen Faster C600 - Hitam', 3000, 9, '85.png', '86.png', '87.png', '<p>Ready Pulpen Faster C600<br />\r\nUkuran: 0.7<br />\r\nHarga diatas adalah 1 pcs</p>\r\n', 100),
(95, 'Pulpen Faster C6 - Biru', 3500, 10, '88.png', '90.png', '89.png', '<p>Ballpoint/Pulpen FASTER C6<br />\r\nHarga di atas untuk 1 pcs</p>\r\n', 103),
(96, 'Pulpen Faster C6 - Hitam', 3500, 10, '91.png', '92.png', '93.png', '<p>Ballpoint/Pulpen FASTER C6<br />\r\nHarga di atas untuk 1 pcs</p>\r\n', 103),
(97, 'Pulpen Easy Gel Kenko - Biru', 3000, 20, '94.png', '95.png', '96.png', '<p>Pulpen Easy Gel Kenko<br />\r\nMata pulpen lancip 0.5mm<br />\r\nHarga per 1 pcs</p>\r\n', 120),
(98, 'Pulpen Easy Gel Kenko - Hitam', 3000, 20, '97.png', '98.jpg', '99.png', '<p>Pulpen Easy Gel Kenko<br />\r\nMata pulpen lancip 0.5mm<br />\r\nHarga per 1 pcs</p>\r\n', 120),
(99, 'Pulpen Joyko JK-100 - Biru', 3000, 25, '100.png', '101.png', '102.png', '<p>Gel Pen Joyko JK-100<br />\r\nTipe&nbsp;0,5 mm<br />\r\nHarga per 1 pcs</p>\r\n', 120),
(100, 'Pulpen Joyko JK-100 - Hitam', 3000, 25, '103.png', '104.png', '105.png', '<p>Gel Pen Joyko JK-100<br />\r\nTipe&nbsp;0,5 mm<br />\r\nHarga per 1 pcs</p>\r\n', 120),
(101, 'Pulpen Standar AE7 Biru', 2000, 11, '106.png', '107.png', '108.png', '<p>Pulpen Standard AE7<br />\r\nUkuran 0,5mm<br />\r\nTipe&nbsp;Pulpen Buka Tutup<br />\r\nHarga per 1 pcs</p>\r\n', 150),
(102, 'Pulpen Standar AE7 Hitam', 2000, 11, '109.png', '110.png', '111.jpg', '<p>Pulpen Standard AE7<br />\r\nUkuran 0,5mm<br />\r\nTipe&nbsp;Pulpen Buka Tutup<br />\r\nHarga per 1 pcs</p>\r\n', 150),
(103, 'Pulpen Standar AE7 Merah', 2000, 11, '112.png', '113.png', '114.png', '<p>Pulpen Standard AE7<br />\r\nUkuran 0,5mm<br />\r\nTipe&nbsp;Pulpen Buka Tutup<br />\r\nHarga per 1 pcs</p>\r\n', 150),
(104, 'Spidol Permanent Snowman - Biru', 8500, 30, '115.jpg', '116.png', '117.png', '<p>Spidol&nbsp;Whiteboard Snowman<br />\r\nSpidol yang tidak dapat dihapus<br />\r\nHarga yang tercantum adalah harga 1pcs</p>\r\n', 50),
(105, 'Spidol Permanent Snowman - Hitam', 8500, 30, '118.png', '119.png', '120.jpg', '<p>Spidol&nbsp;Whiteboard Snowman<br />\r\nSpidol yang tidak dapat dihapus<br />\r\nHarga yang tercantum adalah harga 1pcs</p>\r\n', 50),
(106, 'Spidol Snowman WhiteBoard  - Biru', 9000, 25, '121.png', '122.png', '123.png', '<p>Spidol Snowman White Board&nbsp;merupakan spidol papan tulis yang dapat dihapus.<br />\r\nHarga untuk 1 pcs<br />\r\nSpidol tipe G-12 tinta permanen tidak dapat dihapus<br />\r\nSpidol dapat&nbsp;diisi ulang</p>\r\n', 50),
(107, 'Spidol Snowman WhiteBoard - Hitam', 9000, 25, '124.jpg', '125.jpg', '126.png', '<p>Spidol Snowman White Board&nbsp;merupakan spidol papan tulis yang dapat dihapus.<br />\r\nHarga untuk 1 pcs<br />\r\nSpidol tipe G-12 tinta permanen tidak dapat dihapus<br />\r\nSpidol dapat&nbsp;diisi ulang</p>\r\n', 50),
(108, 'Refill Tinta Spidol Whiteboard Spidol Hitam', 18000, 90, '127.png', '128.png', '129.png', '<p>Refill tinta spidol whiteboard warna hitam<br />\r\nHarga untuk 1 botol</p>\r\n', 12),
(109, 'Spidol 12 Warna Snowman', 17000, 130, '131.png', '130.png', '132.png', '<p>Spidol 12 Warna Snowman<br />\r\nSpidol Warna yang digunakan untuk menggambar, mewarnai, dll<br />\r\nHarga Per Pak<br />\r\nSatu Pak Isi 12 Warna Spidol</p>\r\n', 10),
(110, 'Stamp Pad Hero', 12000, 80, '147.png', '146.png', '145.png', '<p>Stamp Pad Hero 2460 / Bak Stamp Hero<br />\r\nStampad sudah dilengkapi tinta warna violet sehingga memudahkan penggunaan.<br />\r\nBiasa di Gunakan Untuk Stempel Atau Cap Nota, Bon, Ijazah, Legalisir, dan Lainnya.<br />\r\nBantalan stempel ini sangat cocok untuk digunakan sendiri ataupun di perkantoran.</p>\r\n', 10),
(111, 'Crayon TITI 12 Warna', 20000, 200, '162.png', '161.png', '160.png', '<p>Crayon TITI Oil Pastel 12 Warna<br />\r\nCrayon ini sangat aman digunakan karena tidak mengandung racun.<br />\r\n1 Set terdiri dari 12 Warna<br />\r\nHarga diatas adalah harga per&nbsp;set</p>\r\n', 15),
(112, 'Double Tape Foam Daimaru', 10000, 45, '139.png', '140.png', '141.png', '<p>Double Busa / Foam Tape<br />\r\nUkuran&nbsp;24 mm<br />\r\nPanjang 5 m<br />\r\nBisa digunakan untuk<br />\r\n1. Menempelkan barang berat<br />\r\n2. Digunakan untuk kegiatan otomotif (segel, meredam getaran)<br />\r\n3. Pemasangan papan nama<br />\r\n4. Pengikatan alat rumah tangga<br />\r\n5. Pengait</p>\r\n', 15),
(113, 'Lem Glue Stick JOYKO', 4000, 30, '142.png', '143.png', '144.png', '<p>&nbsp;</p>\r\n\r\n<p>Lem Stick Joyko<br />\r\nBerbahan lem padat&nbsp;yg penggunaanya dengan cara diputar. sehingga lem tidak tumpah dan berantakan.<br />\r\nDapat disimpan dalam waktu lama selama dalam keadaan tertutup.<br />\r\nSering digunakan oleh anak sekolah atau pekerjaan kantoran. untuk kebutuhan menempel kan permukaan kertas, plastik mika, stik es krim, dan lain sebagainnya.</p>\r\n', 48),
(114, 'Kertas Origami SIDU besar', 12000, 260, '187.png', '188.png', '189.png', '<p>Kertas origami SIDU besar ukuran 16x16<br />\r\nKertas melipat anak-anak.<br />\r\n1 pack sudah warna-warni.<br />\r\nIsi&nbsp;100 lembar</p>\r\n', 25),
(115, 'Kertas Origami SIDU kecil', 7500, 85, '190.png', '191.png', '192.png', '<p>Kertas origami SIDU kecil&nbsp;ukuran 12x12<br />\r\nKertas melipat anak-anak.<br />\r\n1 pack sudah warna-warni.<br />\r\nIsi&nbsp;100 lembar</p>\r\n', 30),
(116, 'Penggaris Butterfly 20 cm', 2000, 15, '186.png', '185.png', '184.png', '<p>Penggaris Butterfly<br />\r\nUkuran 20cm<br />\r\nBahan Plastik</p>\r\n', 40),
(117, 'Penggaris Butterfly 30 cm', 3000, 30, '183.png', '182.png', '181.png', '<p>Penggaris Butterfly<br />\r\nUkuran 30cm<br />\r\nBahan Plastik</p>\r\n', 40),
(118, 'Pensil Warna Faber Castell Classic 12', 30000, 100, '163.png', '164.png', '165.png', '<p>Pensil Warna Classic Faber-Castell berisi 12 Warna&nbsp;Panjang<br />\r\nCocok digunakan untuk anak sekolah maupun profesional artist.<br />\r\nKualitas warna yang cerah dan tahan lama.</p>\r\n', 15),
(119, 'Pensil Warna Faber Castell Classic 12', 17000, 80, '168.png', '167.png', '166.png', '<p>Pensil Warna Classic Faber-Castell berisi 12 Warna&nbsp;Pendek<br />\r\nCocok digunakan untuk anak sekolah maupun profesional artis<br />\r\nKualitas warna yang cerah dan tahan lama</p>\r\n', 17),
(120, 'Pensil Warna Joyko Panjang Classic 12 Warna', 17000, 100, '177.png', '176.png', '175.png', '<p>Pensil warna Joyko Panjang<br />\r\nIsi 12 pcs warna warni<br />\r\nBahan pensil warna kayu</p>\r\n', 13),
(121, 'Pensil Warna Joyko 24 Warna', 30000, 250, '179.png', '178.png', '180.png', '<p>Pensil warna Joyko Pendek<br />\r\nIsi 24&nbsp;pcs warna warni<br />\r\nBahan pensil warna kayu</p>\r\n', 15),
(122, 'Pensil Warna Kenko Panjang Classic 12 Warna', 18000, 100, '170.png', '169.png', '171.png', '<p>Pensil warna Kenko Panjang<br />\r\nIsi 12 pcs warna warni<br />\r\nBahan pensil warna kayu<br />\r\nDijual Dalam: 1 set ( 12 warna)</p>\r\n', 12),
(123, 'Pensil Warna Kenko Pendek Classic 12 Warna', 9000, 80, '173.png', '172.png', '174.png', '<p>Pensil warna Kenko Pendek<br />\r\nIsi 12 pcs warna warni<br />\r\nBahan pensil warna kayu<br />\r\nDijual Dalam: 1 set ( 12 warna)</p>\r\n', 14),
(124, 'Stabilo Joyko Highlighter - Kuning', 5000, 15, '148.png', '149.png', '150.png', '<p>Highlighter Merk Joyko<br />\r\nStabilo Joyko High Lighter biasa digunakan untuk menandakan tulisan-tulisan penting saat membaca<br />\r\nHarga Untuk Per Pcs</p>\r\n', 15),
(125, 'Stabilo Joyko Highlighter - Hijau', 5000, 15, '153.png', '152.png', '151.png', '<p>Highlighter Merk Joyko<br />\r\nStabilo Joyko High Lighter biasa digunakan untuk menandakan tulisan-tulisan penting saat membaca<br />\r\nHarga Untuk Per Pcs</p>\r\n', 18),
(126, 'Stabilo Joyko Highlighter - Biru', 5000, 15, '155.png', '154.png', '156.png', '<p>Highlighter Merk Joyko<br />\r\nStabilo Joyko High Lighter biasa digunakan untuk menandakan tulisan-tulisan penting saat membaca<br />\r\nHarga Untuk Per Pcs</p>\r\n', 15),
(127, 'Stabilo Joyko Highlighter - Pink', 5000, 15, '134.png', '133.png', '135.png', '<p>Highlighter Merk Joyko<br />\r\nStabilo Joyko High Lighter biasa digunakan untuk menandakan tulisan-tulisan penting saat membaca<br />\r\nHarga Untuk Per Pcs</p>\r\n', 16),
(128, 'Stabilo Joyko Highlighter - Orange', 5000, 15, '158.png', '159.png', '157.png', '<p>Highlighter Merk Joyko<br />\r\nStabilo Joyko High Lighter biasa digunakan untuk menandakan tulisan-tulisan penting saat membaca<br />\r\nHarga Untuk Per Pcs</p>\r\n', 19),
(129, 'Stapler Joyko HD-10', 10000, 90, '137.jpg', '136.jpg', '138.jpg', '<p>Stapler HD-10 CL Joyko<br />\r\nWarna random sesuai stok<br />\r\nHarga untuk 1 pcs</p>\r\n', 25),
(130, 'Pensil Warna Joyko Pendek Classic 12 Warna', 9000, 47, '193.png', '194.png', '195.png', '<p>Pensil warna Joyko Pendek<br />\r\nIsi 12 pcs warna warni<br />\r\nBahan pensil warna kayu</p>\r\n', 17),
(131, 'Stapler Max HD-10', 20000, 200, '196.png', '197.png', '199.png', '<p>Stapler HD-10&nbsp;Max<br />\r\nWarna random sesuai stok<br />\r\nHarga untuk 1 pcs</p>\r\n', 9),
(132, 'Isi Staples ETONA No.10', 2500, 500, '200.png', '201.png', '202.png', '<p>Isi staples merk Etona&nbsp;Original merupakan isi staples kecil yang digunakan untuk mengisi ulang stapler HD 10<br />\r\nHarga&nbsp;untuk 1 kotak kecil</p>\r\n', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `id_ongkir` int(12) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `tarif_pengiriman` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id_ongkir`, `kota`, `tarif_pengiriman`) VALUES
(1, 'Tangerang', 15000),
(3, 'DKI Jakarta', 25000),
(4, 'Semarang', 35000),
(5, 'Serang', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `email_user` varchar(64) NOT NULL,
  `password_user` varchar(64) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `hp_user` varchar(16) NOT NULL,
  `alamat_user` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `password_user`, `nama_user`, `hp_user`, `alamat_user`) VALUES
(22, 'irmay0409@gmail.com', '12345', 'Irma Yanti', '08994729848', 'Rajeg, Kab. Tangerang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_payment` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `id_ongkir` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
