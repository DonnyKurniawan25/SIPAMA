-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2023 pada 09.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spnarkoba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` varchar(255) NOT NULL,
  `penyakit_id` varchar(255) NOT NULL,
  `gejala_id` varchar(255) NOT NULL,
  `mb` float DEFAULT NULL,
  `md` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `penyakit_id`, `gejala_id`, `mb`, `md`) VALUES
('DI-001', 'P001', 'G001', 0.6, 0.4),
('DI-002', 'P001', 'G002', 0.8, 0.2),
('DI-003', 'P001', 'G003', 0.4, 0.6),
('DI-004', 'P002', 'G004', 0.4, 0.6),
('DI-005', 'P002', 'G005', 0.6, 0.4),
('DI-006', 'P002', 'G006', 0.8, 0.2),
('DI-007', 'P002', 'G007', 0.9, 0.1),
('DI-008', 'P002', 'G008', 0.4, 0.6),
('DI-009', 'P002', 'G009', 0.4, 0.6),
('DI-010', 'P002', 'G010', 0.8, 0.2),
('DI-011', 'P002', 'G011', 0.8, 0.2),
('DI-012', 'P003', 'G010', 0.4, 0.6),
('DI-013', 'P003', 'G012', 0.8, 0.2),
('DI-014', 'P003', 'G013', 0.8, 0.2),
('DI-015', 'P003', 'G014', 0.2, 0.8),
('DI-016', 'P004', 'G004', 0.6, 0.4),
('DI-017', 'P004', 'G006', 0.4, 0.6),
('DI-018', 'P004', 'G010', 0.4, 0.6),
('DI-019', 'P004', 'G011', 0.8, 0.2),
('DI-020', 'P004', 'G012', 0.4, 0.6),
('DI-021', 'P004', 'G015', 0.4, 0.6),
('DI-022', 'P004', 'G016', 0.6, 0.4),
('DI-023', 'P004', 'G019', 0.2, 0.8),
('DI-024', 'P005', 'G004', 0.4, 0.6),
('DI-025', 'P005', 'G005', 0.4, 0.6),
('DI-026', 'P005', 'G006', 0.2, 0.8),
('DI-027', 'P005', 'G010', 0.4, 0.6),
('DI-028', 'P005', 'G001', 0.6, 0.4),
('DI-029', 'P005', 'G021', 0.4, 0.6),
('DI-030', 'P005', 'G022', 0.8, 0.2),
('DI-031', 'P005', 'G023', 0.8, 0.2),
('DI-032', 'P005', 'G024', 0.4, 0.6),
('DI-033', 'P005', 'G026', 0.8, 0.2),
('DI-034', 'P006', 'G027', 0.8, 0.2),
('DI-035', 'P006', 'G028', 0.6, 0.4),
('DI-036', 'P006', 'G029', 0.8, 0.2),
('DI-037', 'P006', 'G030', 0.8, 0.2),
('DI-038', 'P007', 'G001', 0.4, 0.6),
('DI-039', 'P007', 'G004', 0.9, 0.1),
('DI-040', 'P007', 'G008', 0.8, 0.2),
('DI-041', 'P007', 'G024', 0.4, 0.6),
('DI-042', 'P007', 'G014', 0.6, 0.4),
('DI-043', 'P007', 'G032', 0.8, 0.2),
('DI-044', 'P007', 'G031', 0.4, 0.6),
('DI-045', 'P008', 'G001', 0.2, 0.8),
('DI-046', 'P008', 'G005', 0.4, 0.6),
('DI-047', 'P008', 'G006', 0.8, 0.2),
('DI-048', 'P008', 'G010', 0.8, 0.2),
('DI-049', 'P008', 'G014', 0.4, 0.6),
('DI-050', 'P008', 'G033', 0.4, 0.6),
('DI-051', 'P009', 'G002', 0.8, 0.2),
('DI-052', 'P009', 'G003', 0.4, 0.6),
('DI-053', 'P010', 'G001', 0.8, 0.2),
('DI-054', 'P010', 'G031', 0.4, 0.6),
('DI-055', 'P010', 'G034', 0.6, 0.4),
('DI-056', 'P011', 'G004', 0.9, 0.1),
('DI-057', 'P011', 'G008', 0.8, 0.2),
('DI-058', 'P011', 'G014', 0.4, 0.6),
('DI-059', 'P011', 'G035', 0.6, 0.4),
('DI-060', 'P011', 'G036', 0.6, 0.4),
('DI-061', 'P012', 'G001', 0.9, 0.1),
('DI-062', 'P012', 'G008', 0.8, 0.2),
('DI-063', 'P012', 'G010', 0.8, 0.2),
('DI-064', 'P012', 'G011', 0.2, 0.8),
('DI-065', 'P012', 'G014', 0.4, 0.6),
('DI-066', 'P012', 'G037', 0.8, 0.2),
('DI-067', 'P012', 'G038', 0.2, 0.8),
('DI-068', 'P012', 'G039', 0.8, 0.2),
('DI-069', 'P013', 'G001', 0.8, 0.2),
('DI-070', 'P013', 'G004', 0.6, 0.4),
('DI-071', 'P013', 'G006', 0.4, 0.6),
('DI-072', 'P013', 'G008', 0.6, 0.4),
('DI-073', 'P013', 'G040', 0.9, 0.1),
('DI-074', 'P014', 'G031', 0.4, 0.6),
('DI-075', 'P014', 'G041', 0.2, 0.8),
('DI-076', 'P014', 'G042', 0.8, 0.2),
('DI-077', 'P014', 'G043', 0.2, 0.8),
('DI-078', 'P014', 'G044', 0.9, 0.1),
('DI-079', 'P014', 'G045', 0.8, 0.2),
('DI-080', 'P015', 'G031', 0.2, 0.8),
('DI-081', 'P015', 'G046', 0.9, 0.1),
('DI-082', 'P015', 'G047', 0.6, 0.4),
('DI-083', 'P015', 'G048', 0.6, 0.4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` int(125) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `penyakit`, `hasil`) VALUES
(1, 'Ablasi Retina', '0.93103448275862'),
(2, 'Ablasi Retina', '0.93103448275862'),
(3, 'Ablasi Retina', '0.93103448275862'),
(4, 'Ablasi Retina', '0.93103448275862'),
(5, 'Ablasi Retina', '0.93103448275862'),
(6, 'Ablasi Retina', '0.93103448275862'),
(7, 'Ablasi Retina', '0.93103448275862'),
(8, 'Ablasi Retina', '0.93103448275862'),
(9, 'Ablasi Retina', '0.93103448275862');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('G001', 'Penglihatan kabur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G002', 'Pengalaman floater', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G003', 'Fotopsia (sensasi kilatan cahaya)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G004', 'Mata memerah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G005', 'Keluar Kotoran', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G006', 'Dapatkan sesuatu di mata seseorang Kesulitan membuka kelopak mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G007', 'Bangun lebih awal atau lama tutup matamu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G008', 'Mata yang menyakitkan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G009', 'Mata Terasa Panas', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G010', 'Mata Berair', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G011', 'Mata Gatal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G012', 'Kemerahan kecil pada kelopak mata dan nyeri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G013', 'Kelopak mata terasa sakit dan nyeri', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G014', 'Fotofobia (Kepekaan Terhadap Cahaya)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G015', 'Sakit mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G016', 'Kehilangan bulu mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G017', 'Bulu mata berkerak saat bangun tidur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G018', 'Kelopak Mata Merah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G019', 'Pengelupasan kulit di sekitar mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G020', 'Adanya selaput tipis di mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G021', 'Sudut Mata Gatal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G022', 'Pembengkakan di kantong air mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G023', 'Sakit di kantong air mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G024', 'Demam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G025', 'Lelah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G026', 'Ketika kantong air mata ditekan, itu akan keluar seperti nanah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G027', 'Kesulitan Menjaga Mata Tetap Terbuka', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G028', 'Bulu mata bagian atas menutupi Pemandangan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G029', 'Mata menjadi tegang dan nyeri karena mengangkat kelopak mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G030', 'Terlihat lelah dan mengantuk', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G031', 'Sakit Kepala', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G032', 'Mata bengkak', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G033', 'Kerak kelopak mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G034', 'Gangguan saraf mata Pupil kecil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G035', 'Pupil Kecil', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G036', 'Sulit Untuk Melihat Jarak Dekat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G037', 'Keterlibatan ganda di satu mata (Ketika mata lainnya tertutup)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G038', 'Pembengkakan Lensa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G039', 'Mengalami perubahan warna yang lebih putih pada bagian mata yang hitam', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G040', 'Terdapat lesi putih pada kornea, Mata terasa tegang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G041', 'Mata sering merintih', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G042', 'Cepat mengantuk', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G043', 'Penglihatan kabur saat melihat objek yang jauh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G044', 'Kaku pada bola mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G045', 'Penglihantan kabur saat benda-benda di sekitar', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G046', 'Kaku pada bola mata', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('G047', 'Penglihatan tidak nyaman ketika pandangan difokuskan pada jarak tertentu dalam waktu yang lama', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_certainty_factor`
--

CREATE TABLE `hasil_certainty_factor` (
  `id` int(50) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `cf_pakar` varchar(50) NOT NULL,
  `cf_user` varchar(50) NOT NULL,
  `cf_final` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_certainty_factor`
--

INSERT INTO `hasil_certainty_factor` (`id`, `penyakit`, `cf_pakar`, `cf_user`, `cf_final`) VALUES
(1, 'Endoftalmitis', '0.192', '0.096', '0.922432'),
(2, 'Entropion', '0.02048', '0.09216', '0.8911348736'),
(3, 'Endoftalmitis', '0.192', '0.096', '0.922432'),
(4, 'Endoftalmitis', '0.192', '0.096', '0.922432'),
(5, 'Endoftalmitis', '0.192', '0.096', '0.922432'),
(6, 'Endoftalmitis', '0.192', '0.096', '0.922432'),
(7, 'Entropion', '0.02048', '0.09216', '0.8911348736'),
(8, 'Endoftalmitis', '1.8', '0.46666666666667', '0.97272727272727'),
(9, 'Entropion', '0.02048', '0.09216', '0.8911348736'),
(10, 'Dakriosistitis', '0.32', '0.32', '0.5648');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_konsultasi`
--

CREATE TABLE `hasil_konsultasi` (
  `id` int(11) NOT NULL,
  `pasien_id` varchar(255) NOT NULL,
  `penyakit_id` varchar(255) NOT NULL,
  `cf` varchar(255) DEFAULT NULL,
  `hasil` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaidah_produksi`
--

CREATE TABLE `kaidah_produksi` (
  `id` int(11) NOT NULL,
  `penyakit_id` varchar(255) NOT NULL,
  `gejala_id` varchar(255) NOT NULL,
  `mb` float NOT NULL,
  `md` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kaidah_produksi`
--

INSERT INTO `kaidah_produksi` (`id`, `penyakit_id`, `gejala_id`, `mb`, `md`) VALUES
(1, 'P001', 'G001', 0.6, 0.4),
(2, 'P001', 'G002', 0.9, 0.1),
(3, 'P001', 'G003', 0.5, 0.5),
(4, 'P002', 'G004', 0.4, 0.6),
(5, 'P002', 'G005', 0.6, 0.4),
(6, 'P002', 'G006', 0.8, 0.2),
(7, 'P002', 'G007', 0.9, 0.1),
(8, 'P002', 'G008', 0.4, 0.6),
(9, 'P002', 'G009', 0.4, 0.6),
(10, 'P002', 'G010', 0.8, 0.2),
(11, 'P002', 'G011', 0.8, 0.2),
(12, 'P003', 'G010', 0.5, 0.5),
(13, 'P003', 'G012', 0.8, 0.2),
(14, 'P003', 'G013', 0.8, 0.2),
(15, 'P003', 'G014', 0.2, 0.8),
(16, 'P004', 'G004', 0.6, 0.4),
(17, 'P004', 'G006', 0.4, 0.6),
(18, 'P004', 'G010', 0.4, 0.6),
(19, 'P004', 'G011', 0.8, 0.2),
(20, 'P004', 'G012', 0.4, 0.6),
(21, 'P004', 'G015', 0.4, 0.6),
(22, 'P004', 'G016', 0.6, 0.4),
(23, 'P004', 'G019', 0.2, 0.8),
(24, 'P005', 'G004', 0.4, 0.6),
(25, 'P005', 'G005', 0.4, 0.6),
(26, 'P005', 'G006', 0.2, 0.8),
(27, 'P005', 'G010', 0.4, 0.6),
(28, 'P005', 'G001', 0.6, 0.4),
(29, 'P005', 'G021', 0.4, 0.6),
(30, 'P005', 'G022', 0.8, 0.2),
(31, 'P005', 'G023', 0.8, 0.2),
(32, 'P005', 'G024', 0.4, 0.6),
(33, 'P005', 'G026', 0.8, 0.2),
(34, 'P006', 'G027', 0.8, 0.2),
(35, 'P006', 'G028', 0.6, 0.4),
(36, 'P006', 'G029', 0.8, 0.2),
(37, 'P006', 'G030', 0.8, 0.2),
(38, 'P007', 'G001', 0.4, 0.6),
(39, 'P007', 'G004', 0.9, 0.1),
(40, 'P007', 'G008', 0.8, 0.2),
(41, 'P007', 'G024', 0.4, 0.6),
(42, 'P007', 'G014', 0.6, 0.4),
(43, 'P007', 'G032', 0.8, 0.2),
(44, 'P007', 'G031', 0.4, 0.6),
(45, 'P008', 'G001', 0.2, 0.8),
(46, 'P008', 'G005', 0.4, 0.6),
(47, 'P008', 'G006', 0.8, 0.2),
(48, 'P008', 'G010', 0.8, 0.2),
(49, 'P008', 'G014', 0.4, 0.6),
(50, 'P008', 'G033', 0.4, 0.6),
(51, 'P009', 'G002', 0.8, 0.2),
(52, 'P009', 'G003', 0.4, 0.6),
(53, 'P010', 'G001', 0.8, 0.2),
(54, 'P010', 'G031', 0.4, 0.6),
(55, 'P010', 'G034', 0.6, 0.4),
(56, 'P011', 'G004', 0.9, 0.1),
(57, 'P011', 'G008', 0.8, 0.2),
(58, 'P011', 'G014', 0.4, 0.6),
(59, 'P011', 'G035', 0.6, 0.4),
(60, 'P011', 'G036', 0.6, 0.4),
(61, 'P012', 'G001', 0.9, 0.1),
(62, 'P012', 'G008', 0.8, 0.2),
(63, 'P012', 'G010', 0.8, 0.2),
(64, 'P012', 'G011', 0.2, 0.8),
(65, 'P012', 'G014', 0.4, 0.6),
(66, 'P012', 'G037', 0.8, 0.2),
(67, 'P012', 'G038', 0.2, 0.8),
(68, 'P012', 'G039', 0.8, 0.2),
(69, 'P013', 'G001', 0.8, 0.2),
(70, 'P013', 'G004', 0.6, 0.4),
(71, 'P013', 'G006', 0.4, 0.6),
(72, 'P013', 'G008', 0.6, 0.4),
(73, 'P013', 'G040', 0.9, 0.1),
(74, 'P014', 'G031', 0.4, 0.6),
(75, 'P014', 'G041', 0.2, 0.8),
(76, 'P014', 'G042', 0.8, 0.2),
(77, 'P014', 'G043', 0.2, 0.8),
(78, 'P014', 'G044', 0.9, 0.1),
(79, 'P014', 'G045', 0.8, 0.2),
(80, 'P015', 'G031', 0.2, 0.8),
(81, 'P015', 'G046', 0.9, 0.1),
(82, 'P015', 'G047', 0.6, 0.4),
(83, 'P015', 'G048', 0.6, 0.4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(47, '2014_10_12_000000_create_users_table', 1),
(48, '2014_10_12_100000_create_password_resets_table', 1),
(49, '2019_08_19_000000_create_failed_jobs_table', 1),
(50, '2020_01_28_234308_create_penyakit_table', 1),
(51, '2020_01_30_122002_create_gejala_table', 1),
(52, '2020_01_30_165204_create_pasien_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `umur`, `jenis_kelamin`, `pekerjaan`, `alamat`, `created_at`, `updated_at`) VALUES
('PAS002', 'donny', '212', 'Laki-laki', 'PNS', 'qwe', '2021-02-24 23:59:35', '2021-02-24 23:59:35'),
('PAS004', 'donny', '23', 'Laki-laki', 'PNS', 'sumbawa', '2021-02-25 00:02:17', '2021-02-25 00:02:17'),
('PAS011', 'DONNY', '23', 'Laki-laki', 'PNS', 'Jln. Dewi Sinta', '2023-03-16 17:20:25', '2023-03-16 17:20:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
('P001', 'Ablasi Retina', 'Ablasi Retina', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P002', 'Konjungtivitis', 'Konjungtivitis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P003', 'Bintit', 'Bintit', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P004', 'Blefaritis', 'Blefaritis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P005', 'Dakriosistitis', 'Dakriosistitis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P006', 'Dermatokalasis', 'Dermatokalasis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P007', 'Endoftalmitis', 'Endoftalmitis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P008', 'Entropion', 'Entropion', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P009', 'Pengembara', 'Pengembara', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P010', 'Glaukoma', 'Glaukoma', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P011', 'iritasi', 'iritasi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P012', 'Katarak', 'Katarak adalah ....', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P013', 'Keratitis', 'Keratitis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P014', 'minus', 'minus', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('P015', 'Plus', 'Plus', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `id_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_gejala`, `jawaban`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'G001', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(2, 'G002', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(3, 'G003', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(4, 'G004', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(5, 'G005', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(6, 'G006', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(7, 'G007', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(8, 'G008', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(9, 'G009', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(10, 'G010', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(11, 'G011', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(12, 'G012', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(13, 'G013', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(14, 'G014', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(15, 'G015', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(16, 'G016', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(17, 'G017', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(18, 'G018', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(19, 'G019', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(20, 'G020', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(21, 'G021', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(22, 'G022', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(23, 'G023', 'TIDAK', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(24, 'G024', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(25, 'G025', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(26, 'G026', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL),
(27, 'G027', 'YA', '2023-03-17 00:21:33', '2023-03-17 00:21:33', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` varchar(255) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `id_gejala` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `soal`, `id_gejala`, `created_at`, `updated_at`) VALUES
('PER001', 'Apakah terdapat gejala Sesak Nafas?', 'G001', '2021-02-23 07:36:02', '2021-02-23 07:36:02'),
('PER002', 'Apakah anda Cemas dan Gelisah?', 'G002', '2021-02-23 23:07:52', '2021-02-23 23:07:52'),
('PER003', 'Apakah anda Terdapat Gejala Mual dan Muntah?', 'G003', '2021-02-23 23:08:18', '2021-02-23 23:08:18'),
('PER004', 'Apakah anda terkena Diare?', 'G004', '2021-02-23 23:10:50', '2021-02-23 23:10:50'),
('PER005', 'Apakah anda terdapat gejala kejang-kejang?', 'G005', '2021-02-23 23:11:18', '2021-02-23 23:11:18'),
('PER006', 'Apakah Anda Mudah Marah?', 'G006', '2021-02-23 23:11:45', '2021-02-23 23:11:45'),
('PER007', 'Apakah anda mengalami Depresi?', 'G007', '2021-02-23 23:12:09', '2021-02-23 23:12:09'),
('PER008', 'Apakah anda ada Perubahan Pola Tidur?', 'G008', '2021-02-23 23:13:15', '2021-02-23 23:13:15'),
('PER009', 'Apakah anda sering berkeringat lebih?', 'G009', '2021-02-23 23:13:56', '2021-02-23 23:13:56'),
('PER010', 'Apakah Anda Mengalami Panas Dingin?', 'G010', '2021-02-23 23:14:34', '2021-02-23 23:14:34'),
('PER011', 'Apakah anda mengalami Tremor?', 'G011', '2021-02-23 23:14:55', '2021-02-23 23:14:55'),
('PER012', 'Apakah mengalami gejala Insomnia?', 'G012', '2021-02-23 23:15:53', '2021-02-23 23:15:53'),
('PER013', 'Apakah mengalami denyut jantung cepat?', 'G013', '2021-02-23 23:16:57', '2021-02-23 23:16:57'),
('PER014', 'Apakah Anda Merasakan Tekanan Darah Meningkat?', 'G014', '2021-02-23 23:17:29', '2021-02-23 23:17:29'),
('PER015', 'Apakah Anda Mengalami Sulit Fokus?', 'G015', '2021-02-23 23:17:56', '2021-02-23 23:17:56'),
('PER016', 'Apakah anda Sulit Beristirahat?', 'G016', '2021-02-23 23:18:30', '2021-02-23 23:18:30'),
('PER017', 'Apakah anda mengalami penurunan Berat Badan?', 'G017', '2021-02-23 23:18:57', '2021-02-23 23:18:57'),
('PER018', 'Apakah anda mengalami mulut kering?', 'G018', '2021-02-23 23:19:27', '2021-02-23 23:19:27'),
('PER019', 'Apakah Penglihatan anda kabur?', 'G019', '2021-02-23 23:19:53', '2021-02-23 23:19:53'),
('PER020', 'Apakah warna kulit berganti?', 'G020', '2021-02-23 23:20:17', '2021-02-23 23:20:17'),
('PER021', 'Apakah anda mengalami Sembelit?', 'G021', '2021-02-23 23:20:47', '2021-02-23 23:20:47'),
('PER022', 'Apakah anda mengalami sakit pada perut?', 'G022', '2021-02-23 23:21:33', '2021-02-23 23:21:33'),
('PER023', 'Apakah anda sering mengantuk?', 'G023', '2021-02-23 23:22:06', '2021-02-23 23:22:06'),
('PER024', 'Apakah anda mengalami gejala gatal-gatal?', 'G024', '2021-02-23 23:22:44', '2021-02-23 23:22:44'),
('PER025', 'Apakah Anda Mengalami Sulit Buang Air Kecil?', 'G025', '2021-02-23 23:23:09', '2021-02-23 23:23:09'),
('PER026', 'Apakah anda mengalami suasana Hati yang berubah ubah?', 'G026', '2021-02-23 23:23:47', '2021-02-23 23:23:47'),
('PER027', 'Apakah anda mengalami gejala pusing?', 'G027', '2021-02-23 23:24:10', '2021-02-23 23:24:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$VL4KHAP.VlaGzXNhsASahOZXkbZlpgYhuZlVKnUx48LpFXm9dn21.', NULL, '2023-03-19 17:26:53', '2023-03-19 17:26:53'),
(10, 'Donny', 'Asisten Dokter', 'donny@gmail.com', NULL, '$2y$10$EzBG8Noz5O1zFUE9o5uhdeu8Ediud2NWEzwmeNJxv1SysBe2QmzBO', NULL, '2023-03-19 17:27:49', '2023-03-19 17:27:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_id` (`penyakit_id`),
  ADD KEY `gejala_id` (`gejala_id`);

--
-- Indeks untuk tabel `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_certainty_factor`
--
ALTER TABLE `hasil_certainty_factor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indeks untuk tabel `kaidah_produksi`
--
ALTER TABLE `kaidah_produksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyakit_id` (`penyakit_id`),
  ADD KEY `gejala_id` (`gejala_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_certainty_factor`
--
ALTER TABLE `hasil_certainty_factor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `hasil_konsultasi`
--
ALTER TABLE `hasil_konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kaidah_produksi`
--
ALTER TABLE `kaidah_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
