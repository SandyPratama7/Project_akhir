-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2021 pada 08.44
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member'),
(3, 'driver');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `role_id`, `email`) VALUES
(1, 'Tika Dhamayanti', '0', 2, 'tika123@gmail.com'),
(2, 'Tika Dhamayanti', '0', 2, 'tikadhama@gmail.com'),
(3, 'Eva Amelia', '0', 2, 'tik@yahoo.com'),
(4, 'Tika', '0', 2, 'tika12@yahoo.com'),
(5, 'XCV', '0', 2, 'XECIVI@gmail.com'),
(6, 'aaa', '0', 2, 'aaa@gmail.com'),
(7, 'bb', '0', 2, 'bb@gmail.com'),
(8, 'abc', '0', 2, 'abc@gmail.com'),
(9, 'we', '0', 2, 'we@gmail.com'),
(10, 'aaa', '0', 2, 'aa12@yaho.com'),
(11, 'ccc', '0', 2, 'cc@yahoo.com'),
(12, 'Tengil', '123', 2, 'tengil@yahoo.com'),
(13, 'Tik', '$2y$10$VY6AAgLdXUrTCQdKfADyn.MFLMm4nIa6mk27S.k4LpMI3m3aHu0mO', 2, 'tik12@gmail.com'),
(14, 'abc', '$2y$10$QGDXKUtVJ6b494eQiM0CGOVL/LIxNY9WAK7bdsTGikbe.jHnVZjSa', 2, 'abc12@gmail.com'),
(15, 'Wer', '$2y$10$2EP8vuITgBebRxevVPDAwuSlKXkOJ4Nzw8bQscZ/CS2f4UekHjgFu', 2, 'wer@gmail.com'),
(16, 'Tika Dhama', '$2y$10$hAMLNkphLIA9VaCzXUc2XeYjE/ODiWtkdm6MuwC1IyLXG/CDKRT6q', 2, 'tikaa12@gmail.com'),
(17, 'Admin', '123', 1, 'admin123@gmail.com'),
(18, 'Admin', '$2y$10$ppanXwx3Cl0bo3a5bfnMbOGbjClcHGiZS2tCXMKsGctvZAGw8zz6C', 1, 'admin@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
