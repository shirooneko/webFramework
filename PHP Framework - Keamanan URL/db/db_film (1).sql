-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2023 pada 09.40
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
(57, 'The Flash', 1, ' 2 jam 24 menit', '1687963004_8dfba5d43d98172d7318.webp', '2023-06-28 14:36:44', '2023-06-28 14:36:44'),
(58, 'Suzume', 4, ' 2 jam 7 menit', '1687963020_4f8bb6dad53ad31bf5a2.jpg', '2023-06-28 14:37:00', '2023-06-28 14:37:00'),
(59, 'Spider-Man: Across the Spider-Verse', 1, ' 2 jam 24 menit', '1687963036_a61175012a317cbafe59.jpg', '2023-06-28 14:37:16', '2023-06-28 14:37:16'),
(61, 'Aku bukan wanita pilihan', 3, ' 2 jam 24 menit', '1687963072_4ccf70c20c3d7e6b9a30.jpg', '2023-06-28 14:37:52', '2023-06-28 14:37:52'),
(62, 'Akhirat', 3, ' 2 jam 24 menit', '1687963089_84719f91af23f7618df9.jpg', '2023-06-28 14:38:09', '2023-06-28 14:38:09'),
(63, 'Avengers', 1, ' 2 jam 24 menit', '1687963105_a869eabdb2cbb7c36379.jpg', '2023-06-28 14:38:25', '2023-06-28 14:38:25'),
(64, 'Khanzab', 5, ' 2 jam 24 menit', '1687963120_cc9db81447def04c5e78.jpg', '2023-06-28 14:38:40', '2023-06-28 14:38:40'),
(65, 'Gatot Kaca', 1, ' 2 jam 24 menit', '1687963158_2cd5c4c91403a255ee6e.jpg', '2023-06-28 14:39:18', '2023-06-28 14:39:18'),
(66, 'Keluarga Cemara', 3, ' 2 jam 24 menit', '1687963358_0ed8b94c91991aa92d6f.jpg', '2023-06-28 14:42:38', '2023-06-28 14:42:38'),
(67, 'Transformers: Rise of the Beasts', 1, ' 2 jam 7 menit', '1687963388_160e76000b43a91eeb94.jpg', '2023-06-28 14:43:08', '2023-06-28 14:43:08');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
