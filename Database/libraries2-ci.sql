-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2022 pada 15.52
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraries2-ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `book_id` varchar(15) NOT NULL,
  `publisher_id` varchar(15) NOT NULL,
  `book_type_id` varchar(15) NOT NULL,
  `rack_id` varchar(15) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `page` int(4) NOT NULL,
  `publication_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`book_id`, `publisher_id`, `book_type_id`, `rack_id`, `book_name`, `page`, `publication_year`) VALUES
('book_001', 'pub_001', 'type_001', 'rack_001', 'Kisah Pencari Sutra', 89, 2017),
('book_002', 'pub_002', 'type_002', 'rack_002', 'Ensiklopedia Teknologi', 98, 2014),
('book_003', 'pub_003', 'type_003', 'rack_003', 'Kamus Bahasa Indonesia', 100, 2022),
('book_004', 'pub_004', 'type_004', 'rack_004', 'Marmut si Merah Jambu', 222, 2010),
('book_005', 'pub_005', 'type_005', 'rack_005', 'Pengembangan Media Pembelajaran', 264, 2012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_type`
--

CREATE TABLE `book_type` (
  `book_type_id` varchar(15) NOT NULL,
  `book_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book_type`
--

INSERT INTO `book_type` (`book_type_id`, `book_type_name`) VALUES
('type_001', 'Sejarah'),
('type_002', 'Ensiklopedia'),
('type_003', 'Kamus'),
('type_004', 'Novel'),
('type_005', 'Buku Ilmiah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `borrower`
--

CREATE TABLE `borrower` (
  `borrower_id` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `study_program` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `borrower`
--

INSERT INTO `borrower` (`borrower_id`, `name`, `gender`, `phone`, `address`, `study_program`, `class`) VALUES
('bor_001', 'Muhammad Ilman Aqilaa', 'Laki - laki', '08811234567', 'Bandung', 'Teknik Informatika', '2b'),
('bor_002', 'Ilham Azziz Gunawan', 'Laki - laki', '08812375647', 'Bandung', 'Ilmu Politik', '3B'),
('bor_003', 'Supriadi', 'Laki - laki', '0871635476', 'Bandung', 'Logistik', '1B'),
('bor_004', 'Valentina', 'Perempuan', '088112547364', 'Sumedang', 'Akuntansi', '1A'),
('bor_005', 'Althof Satria Muharam', 'Laki-laki', '08812845746', 'Cijerah', 'Logistik Bisnis', '3B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'ulbi123', 1, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `officer`
--

CREATE TABLE `officer` (
  `officer_id` varchar(15) NOT NULL,
  `officer_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `officer`
--

INSERT INTO `officer` (`officer_id`, `officer_name`, `phone`, `gender`) VALUES
('admin_001', 'Surya', '088174653857', 'Laki - laki'),
('admin_002', 'Nordi', '08816485698', 'Laki - laki'),
('admin_003', 'Jhonson', '0881475673', 'Laki - laki'),
('admin_004', 'Rudi', '08812634716', 'Laki-laki'),
('admin_005', 'Angel', '0881437465', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` varchar(15) NOT NULL,
  `publisher_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`) VALUES
('pub_001', 'Andrea Hirata'),
('pub_002', 'Tere Liye'),
('pub_003', 'Pidi Baiq'),
('pub_004', 'Raditya Dika'),
('pub_005', 'Dr. Sukiman, M.Pd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rack`
--

CREATE TABLE `rack` (
  `rack_id` varchar(15) NOT NULL,
  `rack_name` varchar(50) NOT NULL,
  `column` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rack`
--

INSERT INTO `rack` (`rack_id`, `rack_name`, `column`) VALUES
('rack_001', 'Sejarah', '1'),
('rack_002', 'Ensiklopedia', '1'),
('rack_003', 'Kamus', '3'),
('rack_004', 'Novel', '3'),
('rack_005', 'Buku Ilmiah', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` varchar(15) NOT NULL,
  `book_id` varchar(15) NOT NULL,
  `officer_id` varchar(15) NOT NULL,
  `borrower_id` varchar(15) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `book_id`, `officer_id`, `borrower_id`, `borrow_date`, `return_date`, `status`) VALUES
('trans_001', 'book_001', 'admin_001', 'bor_001', '2022-07-12', '2022-07-21', 'Dipinjam'),
('trans_002', 'book_002', 'admin_002', 'bor_002', '2022-07-12', '2022-07-21', 'Kembali'),
('trans_003', 'book_004', 'admin_003', 'bor_004', '2022-08-21', '2022-08-23', 'Kembali'),
('trans_004', 'book_003', 'admin_004', 'bor_003', '2022-08-06', '2022-08-08', 'Dipinjam'),
('trans_005', 'book_005', 'admin_005', 'bor_005', '2022-08-06', '2022-08-08', 'Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `no_hp`) VALUES
(1, 'aqilaa', 'aqilaa', '08812341524'),
(19, 'namil', 'ilman', '0881213146');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `book_type_id` (`book_type_id`),
  ADD KEY `rack_id` (`rack_id`);

--
-- Indeks untuk tabel `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`book_type_id`);

--
-- Indeks untuk tabel `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`borrower_id`);

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indeks untuk tabel `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indeks untuk tabel `rack`
--
ALTER TABLE `rack`
  ADD PRIMARY KEY (`rack_id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `officer_id` (`officer_id`),
  ADD KEY `borrower_id` (`borrower_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`book_type_id`) REFERENCES `book_type` (`book_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_3` FOREIGN KEY (`rack_id`) REFERENCES `rack` (`rack_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`borrower_id`) REFERENCES `borrower` (`borrower_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`officer_id`) REFERENCES `officer` (`officer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
