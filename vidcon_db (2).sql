-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 04.31
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidcon_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE `account` (
  `AccountId` int(11) NOT NULL,
  `AccountNama` varchar(200) NOT NULL,
  `AccountDetail` longtext NOT NULL,
  `AccountCreatedAt` datetime NOT NULL,
  `AccountUpdatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`AccountId`, `AccountNama`, `AccountDetail`, `AccountCreatedAt`, `AccountUpdatedAt`) VALUES
(1, 'Zoom', 'aaaa', '2022-04-15 13:56:30', '2022-04-15 13:56:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `JadwalId` int(11) NOT NULL,
  `JadwalTanggalMulai` datetime NOT NULL,
  `JadwalTanggalSelesai` datetime NOT NULL,
  `JadwalTempat` varchar(200) NOT NULL,
  `JadwalAccountId` int(11) NOT NULL,
  `JadwalCreatedAt` datetime NOT NULL,
  `JadwalUpdatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`JadwalId`, `JadwalTanggalMulai`, `JadwalTanggalSelesai`, `JadwalTempat`, `JadwalAccountId`, `JadwalCreatedAt`, `JadwalUpdatedAt`) VALUES
(9, '2022-04-09 23:23:00', '2022-04-09 23:30:00', 'Pendopo', 1155555, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111113, '2022-04-15 21:46:00', '2022-04-15 21:52:00', 'Pati', 33333, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_petugas`
--

CREATE TABLE `jadwal_petugas` (
  `JadwalPetugasId` int(11) NOT NULL,
  `JadwalPetugasJadwalId` int(11) NOT NULL,
  `JadwalPetugasPetugasId` int(11) NOT NULL,
  `JadwalPetugasCreatedAt` datetime NOT NULL,
  `JadwalPetugasUpdatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `PetugasId` int(11) NOT NULL,
  `PetugasNama` varchar(200) NOT NULL,
  `PetugasCreatedAt` datetime NOT NULL,
  `PetugasUpdatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`PetugasId`, `PetugasNama`, `PetugasCreatedAt`, `PetugasUpdatedAt`) VALUES
(11111226, 'hadads', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11111227, 'tttttt', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11111228, 'tukimin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11111229, 'yogaaaa', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountId`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`JadwalId`);

--
-- Indeks untuk tabel `jadwal_petugas`
--
ALTER TABLE `jadwal_petugas`
  ADD PRIMARY KEY (`JadwalPetugasId`),
  ADD KEY `JadwalPetugasJadwalId` (`JadwalPetugasJadwalId`,`JadwalPetugasPetugasId`),
  ADD KEY `JadwalPetugasPetugasId` (`JadwalPetugasPetugasId`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`PetugasId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `account`
--
ALTER TABLE `account`
  MODIFY `AccountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `JadwalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111114;

--
-- AUTO_INCREMENT untuk tabel `jadwal_petugas`
--
ALTER TABLE `jadwal_petugas`
  MODIFY `JadwalPetugasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `PetugasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11111230;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_petugas`
--
ALTER TABLE `jadwal_petugas`
  ADD CONSTRAINT `jadwal_petugas_ibfk_1` FOREIGN KEY (`JadwalPetugasPetugasId`) REFERENCES `petugas` (`PetugasId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_petugas_ibfk_2` FOREIGN KEY (`JadwalPetugasJadwalId`) REFERENCES `jadwal` (`JadwalId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
