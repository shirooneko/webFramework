-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2023 pada 05.48
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(200) NOT NULL,
  `id_genre` int(11) DEFAULT NULL,
  `duration` varchar(50) NOT NULL,
  `cover` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id`, `nama_film`, `id_genre`, `duration`, `cover`, `created_at`, `updated_at`) VALUES
(79, 'Spider-Man: Across the Spider-Verse', 1, ' 2 jam 24 menit', '1688441051_5e7162c8760071441edd.jpg', '2023-07-04 03:24:11', '2023-07-04 03:24:11'),
(80, 'The Flash', 1, ' 2 jam 20 menit', '1688441070_d26fbfae916f03eaf4e9.webp', '2023-07-04 03:24:30', '2023-07-04 03:24:30'),
(81, 'Akhirat', 1, ' 2 jam 7 menit', '1688441087_2a6478ecfcfd7722b676.jpg', '2023-07-04 03:24:47', '2023-07-04 03:24:47'),
(82, 'Suzume', 4, ' 2 jam 2 menit', '1688441106_cd65b75c6ed014584197.jpg', '2023-07-04 03:25:06', '2023-07-04 03:25:06'),
(83, 'Avengers', 1, ' 2 jam 24 menit', '1688441125_d9e7606dd885a6f73b7c.jpg', '2023-07-04 03:25:25', '2023-07-04 03:25:25'),
(84, 'Khanzab', 5, '   2 jam 10 menit', '1688441166_1046835d2fd92c66fb0a.jpg', '2023-07-04 03:26:06', '2023-07-04 03:26:06'),
(85, 'Wanita Tanah Jahanam', 5, ' 1 jam 46 menit', '1688441253_4eb99511eb3cf6f053bf.jpg', '2023-07-04 03:27:33', '2023-07-04 03:27:33'),
(86, 'Kalian Pantas Mati', 5, ' 2 jam 20 menit', '1688441444_dd595ee9023ced369aa0.jpeg', '2023-07-04 03:29:02', '2023-07-04 03:29:02'),
(87, 'Terminator Genesys', 1, ' 2 jam 6 menit', '1688441657_cb01277ae98ea93074fe.jpg', '2023-07-04 03:34:17', '2023-07-04 03:34:17'),
(88, 'Viva JKT48', 6, ' 2 jam 24 menit', '1688441806_aa420754f3ffe989e2c8.jpg', '2023-07-04 03:36:46', '2023-07-04 03:36:46'),
(89, 'Interstellar', 7, ' 2 jam 49 menit', '1688441901_eabadae8f62c7d96b3c4.webp', '2023-07-04 03:38:21', '2023-07-04 03:38:21'),
(90, 'Oppenheimer', 6, ' 3 jam', '1688442026_4b017aeb6c478f8fe8e2.jpg', '2023-07-04 03:40:26', '2023-07-04 03:40:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`, `created_at`, `updated_at`) VALUES
(1, 'Action', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(2, 'Comedy', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(3, 'Romance', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(4, 'Fantacy', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(5, 'Horror', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(6, 'Drama', '2023-07-03 14:55:26', '2023-07-03 14:55:26'),
(7, 'Sci-Fi', '2023-07-03 14:56:19', '2023-07-03 14:56:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
