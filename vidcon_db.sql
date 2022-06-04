-- Adminer 4.8.1 MySQL 10.4.24-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `AccountId` int(11) NOT NULL AUTO_INCREMENT,
  `AccountNama` varchar(200) NOT NULL,
  `AccountDetail` longtext NOT NULL,
  `AccountCreatedAt` datetime NOT NULL,
  `AccountUpdatedAt` datetime NOT NULL,
  PRIMARY KEY (`AccountId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `JadwalId` int(11) NOT NULL AUTO_INCREMENT,
  `JadwalTanggalMulai` datetime NOT NULL,
  `JadwalTanggalSelesai` datetime NOT NULL,
  `JadwalTempat` varchar(200) NOT NULL,
  `JadwalAccountId` int(11) NOT NULL,
  `JadwalCreatedAt` datetime NOT NULL,
  `JadwalUpdatedAt` datetime NOT NULL,
  PRIMARY KEY (`JadwalId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `jadwal_petugas`;
CREATE TABLE `jadwal_petugas` (
  `JadwalPetugasId` int(11) NOT NULL AUTO_INCREMENT,
  `JadwalPetugasJadwalId` int(11) NOT NULL,
  `JadwalPetugasPetugasId` int(11) NOT NULL,
  `JadwalPetugasCreatedAt` datetime NOT NULL,
  `JadwalPetugasUpdatedAt` datetime NOT NULL,
  PRIMARY KEY (`JadwalPetugasId`),
  KEY `JadwalPetugasJadwalId` (`JadwalPetugasJadwalId`,`JadwalPetugasPetugasId`),
  KEY `JadwalPetugasPetugasId` (`JadwalPetugasPetugasId`),
  CONSTRAINT `jadwal_petugas_ibfk_1` FOREIGN KEY (`JadwalPetugasPetugasId`) REFERENCES `petugas` (`PetugasId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `jadwal_petugas_ibfk_2` FOREIGN KEY (`JadwalPetugasJadwalId`) REFERENCES `jadwal` (`JadwalId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `PetugasId` int(11) NOT NULL AUTO_INCREMENT,
  `PetugasNama` varchar(200) NOT NULL,
  `PetugasCreatedAt` datetime NOT NULL,
  `PetugasUpdatedAt` datetime NOT NULL,
  PRIMARY KEY (`PetugasId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(2,	'latief',	'root',	'63a9f0ea7bb98050796b649e85481845');

-- 2022-06-04 10:32:48
