-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2020 pada 07.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'Agus Santoso', 'agussantosococ03@gmail.com', 'admin1', 'agus.JPG', 'Indonesia', '<p>This Application is created by Agus Santoso, If you like my website, please click this link <a href=\"https://www.instagram.com/agussantoso_w\">Agus Santoso</a> <br />Saya merupakan mahasiswa aktif semester 4 jurusan Sistem Informasi pada Universitas Bunda Mulia</p>', '0889-7700-8172', 'Sistem Informasi'),
(2, 'Rizkyana', 'rizkymurray32@gmail.com', 'admin2', 'rizky.jpg', 'Indonesia', 'This Application Desaign is created by Rizkyana, If you like my Desaign, please click this link \r\n						<a href=\"https://www.instagram.com/susukntlmanis.uht\" >Rizkyana</a> <br/>\r\n						Saya merupakan mahasiswa aktif semester 4 jurusan Sistem Informasi pada Universitas Bunda Mulia\r\n					</p>', '0838-7264-8556', 'Sistem Informasi'),
(3, 'Mulan Anastasia', 'mulantasya@gmail.com', 'admin3', 'mulan.jpg', 'Indonesia', 'If you like my website, please click this link \r\n						<a href=\"https://www.instagram.com/mulan_anastasia\" >Mulan Anastasia</a> <br/>\r\n						Saya merupakan mahasiswa aktif semester 4 jurusan Sistem Informasi pada Universitas Bunda Mulia\r\n					</p>', '0877-8857-9828', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_nama` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_alamat` text NOT NULL,
  `customer_nohp` varchar(25) NOT NULL,
  `customer_noktp` varchar(25) NOT NULL,
  `customer_imgktp` text NOT NULL,
  `customer_foto` text NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_nama`, `customer_email`, `customer_alamat`, `customer_nohp`, `customer_noktp`, `customer_imgktp`, `customer_foto`, `customer_pass`, `customer_ip`) VALUES
(5, 'Agus', 'agussantosococ03@gmail.com', 'jalan perintis 1 no.3', '088977008172', '928180298380929182', 'logo-mdev.png', 'erika.jpg', 'agus1', '::1'),
(6, 'Rizkyana', 'rizkymurray32@gmail.com', 'Jl. Bandengan Raya No.32', '088723123783', '192938291029201920', 'logo-mdev.png', 'erika.jpg', 'rizky1', '::1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_booking`
--

CREATE TABLE `customer_booking` (
  `book_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `jam_sewa` text NOT NULL,
  `book_date` date NOT NULL,
  `book_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer_booking`
--

INSERT INTO `customer_booking` (`book_id`, `customer_id`, `due_amount`, `invoice_no`, `jam_sewa`, `book_date`, `book_status`) VALUES
(5, 5, 250, 1791304707, '6 Jam', '2020-03-29', 'Complete'),
(6, 5, 150, 1918059036, '12 Jam', '2020-03-29', 'Complete'),
(7, 6, 200, 2142312081, '24 Jam', '2020-03-29', 'Pending'),
(8, 5, 250, 2131751724, '6 Jam', '2020-04-05', 'Pending'),
(9, 5, 250, 2131751724, '12 Jam', '2020-04-05', 'Pending'),
(13, 5, 400, 1721632649, '12 Jam', '2020-04-05', 'Pending'),
(14, 5, 250, 1721632649, '6 Jam', '2020-04-05', 'Pending'),
(15, 5, 500, 2093713071, '12 Jam', '2020-04-10', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_categories`
--

CREATE TABLE `harga_categories` (
  `har_id` int(10) NOT NULL,
  `har_title` text NOT NULL,
  `har_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga_categories`
--

INSERT INTO `harga_categories` (`har_id`, `har_title`, `har_desc`) VALUES
(1, 'IDR 200K - 300K', 'Harga Dari 200K-300K'),
(2, 'IDR 300K - 400K', 'Harga Dari 300K - 400K'),
(3, 'IDR 400K - 500K', 'Harga Dari 400K - 500K'),
(4, 'IDR 500K - 600K', 'Harga Dari 500K - 600K'),
(5, 'IDR 700K - 800K', 'Harga Dari 700K - 800K');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapasitas`
--

CREATE TABLE `kapasitas` (
  `kapa_id` int(10) NOT NULL,
  `kapa_title` text NOT NULL,
  `kapa_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kapasitas`
--

INSERT INTO `kapasitas` (`kapa_id`, `kapa_title`, `kapa_desc`) VALUES
(2, 'MPV', 'Hanya muat hingga 5 sampai 8 orang'),
(3, 'Sedan', 'Hanya muat 2-4 orang tidak bisa lebih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `mode_pembayaran` text NOT NULL,
  `no_ref` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `tgl_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`pembayaran_id`, `invoice_no`, `amount`, `mode_pembayaran`, `no_ref`, `code`, `tgl_pembayaran`) VALUES
(4, 1721632649, 400, 'Mandiri', 2147483647, 123414, '05/04/2020'),
(5, 1918059036, 150, 'BCA', 12121, 2147483647, '10/04/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pending_booking`
--

CREATE TABLE `pending_booking` (
  `book_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `jam_sewa` text NOT NULL,
  `book_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pending_booking`
--

INSERT INTO `pending_booking` (`book_id`, `customer_id`, `invoice_no`, `product_id`, `jam_sewa`, `book_status`) VALUES
(5, 5, 1791304707, '19', '6 Jam', 'Complete'),
(6, 5, 1918059036, '18', '12 Jam', 'Complete'),
(7, 6, 2142312081, '15', '24 Jam', 'Pending'),
(8, 5, 2131751724, '7', '6 Jam', 'Pending'),
(9, 5, 2131751724, '9', '12 Jam', 'Pending'),
(13, 5, 1721632649, '19', '12 Jam', 'Pending'),
(14, 5, 1721632649, '9', '6 Jam', 'Pending'),
(15, 5, 2093713071, '20', '12 Jam', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perhitungan`
--

CREATE TABLE `perhitungan` (
  `h_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `jam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `pro_kat_id` int(10) NOT NULL,
  `kapa_id` int(10) NOT NULL,
  `har_id` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `pro_har_6jam` int(10) NOT NULL,
  `pro_har_12jam` int(10) NOT NULL,
  `pro_har_24jam` int(10) NOT NULL,
  `pro_keywords` text NOT NULL,
  `pro_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `pro_kat_id`, `kapa_id`, `har_id`, `tgl`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `pro_har_6jam`, `pro_har_12jam`, `pro_har_24jam`, `pro_keywords`, `pro_desc`) VALUES
(6, 1, 3, '1', '2020-04-05 11:42:05', 'Honda Jazz', 'jazz_black.png', 'jazz_pearl.png', 'jazz_red.png', 'jazz_steel.png', 250, 350, 500, 'Jazz', '<p>Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p>&nbsp;</p>\r\n<p>Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p>&nbsp;</p>\r\n<p>Harga sewa Honda Jazz :</p>\r\n<p>Sewa 6 Jam = Rp250.000</p>\r\n<p>Sewa 12 Jam = Rp350.000</p>\r\n<p>Sewa 24 Jam = Rp500.000</p>\r\n<p>&nbsp;</p>\r\n<p>Syarat dan ketentuan berlaku</p>'),
(7, 1, 2, '2', '2020-04-05 11:42:45', 'Honda Mobilio', 'mobilio_black.png', 'mobilio_red.png', 'mobilio_steel.png', 'mobilio_white.png', 250, 400, 550, 'Mobilio', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Honda Mobilio :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp250.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp400.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp550.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(8, 1, 3, '3', '2020-04-05 11:43:17', 'Honda Civic', 'civic_black.png', 'civic_blue.png', 'civic_silver.png', 'civic_white.png', 350, 500, 650, 'Civic', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Honda Civic :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp650.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(9, 2, 2, '2', '2020-04-05 11:18:19', 'Toyota Avanza', 'avanza_blue.png', 'avanza_bronze.png', 'avanza_silver.png', 'avanza_white.png', 250, 400, 550, 'Avanza', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Toyota Avanza :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp250.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp400.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp550.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(10, 2, 3, '2', '2020-04-05 11:19:25', 'Toyota Yaris', 'yaris_black.png', 'yaris_red.png', 'yaris_silver.png', 'yaris_white.png', 200, 350, 500, 'Yaris', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Toyota Yaris :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp250.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(11, 2, 2, '3', '2020-04-05 11:21:13', 'Toyota Innova', 'innova_black.png', 'Innova_bronze.png', 'innova_silver.png', 'innova_white.png', 350, 500, 650, 'Innova', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Toyota Innova :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp650.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(12, 4, 2, '1', '2020-04-05 11:22:21', 'Wuling Convero S', 'confero_black.png', 'confero_brown.png', 'confero_red.png', 'confero_silver.png', 200, 350, 500, 'Confero S', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Wuling Confero S :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp200.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(13, 4, 2, '2', '2020-04-05 11:24:26', 'Wuling Cortez', 'coretez_silver.png', 'cortez_brown.png', 'cortez_red.png', 'cortez_white.png', 250, 400, 550, 'Cortez', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Wuling Cortez :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp250.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp400.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp550.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(14, 4, 2, '2', '2020-04-05 11:25:32', 'Wuling Almaz', 'almaz_black.png', 'almaz_red.png', 'almaz_silver.png', 'almaz_white.png', 350, 500, 650, 'Almaz', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Wuling Almaz :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp650.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(15, 3, 2, '2', '2020-04-05 11:26:46', 'Nissan Livina', 'livina_black.png', 'livina_bronze.png', 'livina_silver.png', 'livina_white.png', 200, 350, 500, 'Livina', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Nissan Livina :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp200.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(16, 3, 3, '3', '2020-04-05 11:36:49', 'Nissan Juke', 'juke_black.png', 'juke_grey.png', 'juke_red.png', 'juke_white.png', 350, 500, 650, 'Nissan Juke', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Nissan Juke :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp650.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(17, 3, 2, '4', '2020-04-05 11:37:53', 'Nissan Serena', 'serena_black.png', 'serena_red.png', 'serena_silver.png', 'serena_white.png', 450, 600, 700, 'Serena', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Nissan Serena :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp450.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp600.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp700.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(18, 5, 2, '1', '2020-04-05 11:39:13', 'Daihatsu Sigra', 'sigra_black.png', 'sigra_grey.png', 'sigra_red.png', 'sigra_silver.png', 200, 300, 400, 'Sigra', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Daihatsu Sigra :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp200.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp300.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp400.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>');
INSERT INTO `products` (`product_id`, `pro_kat_id`, `kapa_id`, `har_id`, `tgl`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `pro_har_6jam`, `pro_har_12jam`, `pro_har_24jam`, `pro_keywords`, `pro_desc`) VALUES
(19, 5, 2, '2', '2020-04-05 11:40:03', 'Daihatsu Xenia', 'xenia_black.png', 'xenia_grey.png', 'xenia_red.png', 'xenia_white.png', 250, 400, 550, 'Xenia', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Daihatsu Xenia :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp250.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp400.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp550.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>'),
(20, 5, 2, '4', '2020-04-05 11:41:02', 'Daihatsu Terios', 'terios_black.png', 'terios_bronze.png', 'terios_silver.png', 'terios_white.png', 350, 500, 650, 'Terios', '<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga Mobil yang muncul hanya harga sewa untuk waktu 6 jam.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Untuk harga sewa mobil 12 jam dan 24 jam bisa lihat di keterangan deskripsi mobil.</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Harga sewa Daihatsu Terios :</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 6 Jam = Rp350.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 12 Jam = Rp500.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Sewa 24 Jam = Rp650.000</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">&nbsp;</p>\r\n<p style=\"color: #000000; font-family: Verdana,Arial,Helvetica,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;\">Syarat dan ketentuan berlaku</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_categories`
--

CREATE TABLE `product_categories` (
  `pro_kat_id` int(10) NOT NULL,
  `pro_kat_title` text NOT NULL,
  `pro_kat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_categories`
--

INSERT INTO `product_categories` (`pro_kat_id`, `pro_kat_title`, `pro_kat_desc`) VALUES
(1, 'Honda', 'North Biems Transport menyediakan tipe Jazz, Mobilio dan Civic'),
(2, 'Toyota', 'North Biems Transport menyediakan tipe Avanza, Yaris dan Innova'),
(3, 'Nissan', 'North Biems Transport menyediakan tipe Livina, Juke dan Serena '),
(4, 'Wuling', 'North Biems Transport menyediakan tipe Convero S, Cortez dan Almaz'),
(5, 'Daihatsu', 'North Biems Transport menyediakan tipe Sigra, Xenia, dan Terios');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_image`, `slider_url`) VALUES
(1, 'slide nomor 1', 'home1.png', 'http://localhost/Rental-Mobil/about_us.php'),
(2, 'slide nomor 2', 'home2.png', 'http://localhost/Rental-Mobil/details.php?pro_id=11'),
(3, 'slide nomor 3', 'home3.png', 'http://localhost/Rental-Mobil/product.php?product_kat=1'),
(7, 'slide nomor 4', 'confero-red.jpg', 'http://localhost/Rental-Mobil/product.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `terms`
--

CREATE TABLE `terms` (
  `terms_id` int(10) NOT NULL,
  `terms_title` varchar(100) NOT NULL,
  `terms_link` varchar(100) NOT NULL,
  `terms_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `terms`
--

INSERT INTO `terms` (`terms_id`, `terms_title`, `terms_link`, `terms_desc`) VALUES
(1, 'Terms & Conditions', 'termsLink', '<ol>\r\n<li>Jika tidak melalukan pembayaran dalam waktu 1 hari maka booking anda kami batalkan</li>\r\n<li>Jika anda telat untuk mengembalikan mobil akan dikenakan denda perjam Rp50.000</li>\r\n<li>Booking berarti tanda anda setuju dengan persyaratan ini</li>\r\n<li>Booking di tempat kami anda harus menaruh jaminan seperti KTP atau surat berharga lain</li>\r\n</ol>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `customer_booking`
--
ALTER TABLE `customer_booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indeks untuk tabel `harga_categories`
--
ALTER TABLE `harga_categories`
  ADD PRIMARY KEY (`har_id`);

--
-- Indeks untuk tabel `kapasitas`
--
ALTER TABLE `kapasitas`
  ADD PRIMARY KEY (`kapa_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indeks untuk tabel `pending_booking`
--
ALTER TABLE `pending_booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`pro_kat_id`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indeks untuk tabel `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`terms_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `customer_booking`
--
ALTER TABLE `customer_booking`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `harga_categories`
--
ALTER TABLE `harga_categories`
  MODIFY `har_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kapasitas`
--
ALTER TABLE `kapasitas`
  MODIFY `kapa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pending_booking`
--
ALTER TABLE `pending_booking`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `pro_kat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `terms`
--
ALTER TABLE `terms`
  MODIFY `terms_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
