-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Jun 2023 pada 03.05
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
(1, 'suzume', 4, '2 jam 4 menit', 'suzume.jpg', '2023-06-11 16:39:21', '2023-06-11 16:39:21'),
(2, 'akhirat', 3, '2 jam 4 menit', 'akhirat.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(3, 'aku bukan wanita pilihan', 3, '2 jam 4 menit', 'aku bukan wanita pilihan.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(4, 'avanger', 1, '2 jam 4 menit', 'avanger.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(5, 'buya hamka', 3, '2 jam 4 menit', 'buya hamka.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(6, 'despicable', 2, '2 jam 4 menit', 'despicable.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(7, 'gatotkaca', 1, '2 jam 4 menit', 'gatotkaca.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(8, 'keluarga cemara', 3, '2 jam 4 menit', 'keluarga cemara.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(9, 'khanzab', 5, '2 jam 4 menit', 'khanzab.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33'),
(10, 'my stupid boss', 2, '2 jam 4 menit', 'my stupid boss.jpg', '2023-06-13 01:27:33', '2023-06-13 01:27:33');

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
(1, 'action', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(2, 'comedy', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(3, 'romance', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(4, 'fantacy', '2023-06-13 10:43:59', '2023-06-13 10:43:59'),
(5, 'horror', '2023-06-13 10:43:59', '2023-06-13 10:43:59');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
