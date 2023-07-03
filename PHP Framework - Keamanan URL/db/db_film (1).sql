-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2023 pada 18.48
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
(69, 'Spider-Man: Across the Spider-Verse', 1, ' 2 jam 24 menit', '1688394711_21930a666b1a9e5b975e.jpg', '2023-07-03 14:31:51', '2023-07-03 14:31:51'),
(70, 'The Flash', 1, ' 2 jam 24 menit', '1688394883_30143824c065989c1d11.webp', '2023-07-03 14:34:43', '2023-07-03 14:34:43'),
(71, 'Avengers', 1, ' 2 jam 24 menit', '1688394943_9042bb838ca5ea4ac69c.jpg', '2023-07-03 14:35:43', '2023-07-03 14:35:43'),
(72, 'Akhirat', 3, ' 2 jam 24 menit', '1688394965_28518f0f2702c15a506f.jpg', '2023-07-03 14:36:05', '2023-07-03 14:36:05'),
(73, 'Suzume', 4, ' 2 jam 24 menit', '1688394982_d598321ba31b7089174c.jpg', '2023-07-03 14:36:22', '2023-07-03 14:36:22'),
(74, 'Khanzab', 5, ' 2 jam 24 menit', '1688395006_7a75e61c0ca813989e61.jpg', '2023-07-03 14:36:46', '2023-07-03 14:36:46'),
(75, 'Keluarga Cemara', 3, ' 2 jam 10 menit', '1688395056_642507f5c9eead12f191.jpg', '2023-07-03 14:37:36', '2023-07-03 14:37:36'),
(76, 'Gatot Kaca', 1, ' 2 jam 20 menit', '1688395070_aa040d8e5832fd8e5ece.jpg', '2023-07-03 14:37:50', '2023-07-03 14:37:50'),
(77, 'Transformers: Rise of the Beasts', 1, ' 2 jam 7 menit', '1688395217_240160c5df97b84e49a0.jpg', '2023-07-03 14:40:17', '2023-07-03 14:40:17'),
(78, 'Aku bukan wanita pilihan', 3, ' 2 jam 24 menit', '1688395317_89c7ef8ec65f0049f9c0.jpg', '2023-07-03 14:41:57', '2023-07-03 14:41:57');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
