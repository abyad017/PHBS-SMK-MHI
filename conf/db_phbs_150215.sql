-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2015 pada 13.57
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dimas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` char(15) NOT NULL,
  `id_kk` char(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` char(15) NOT NULL,
  `alamat` text NOT NULL,
  `telp` char(15) NOT NULL,
  PRIMARY KEY (`id_guru`),
  KEY `id_kk` (`id_kk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `id_kk`, `nama`, `nip`, `alamat`, `telp`) VALUES
('GR001', 'KK001', 'Herp', '123451', 'Indonesia', '-'),
('GR002', 'KK002', 'Derp', '123452', 'Indonesia', '-'),
('GR003', 'KK003', 'Jerp', '123453', 'Indonesia', '-'),
('GR004', 'KK001', 'Herpina', '123454', 'Indonesia', '-'),
('GR005', 'KK002', 'Derpina', '123455', 'Indonesia', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi_keahlian`
--

CREATE TABLE IF NOT EXISTS `kompetensi_keahlian` (
  `id_kk` char(15) NOT NULL,
  `id_diklat` char(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kk`),
  KEY `id_diklat` (`id_diklat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kompetensi_keahlian`
--

INSERT INTO `kompetensi_keahlian` (`id_kk`, `id_diklat`, `nama`) VALUES
('KK001', 'DIK002', 'REKAYASA PERANGKAT LUNAK'),
('KK002', 'DIK004', 'TEKNIK KOMPUTER dan JARINGAN'),
('KK003', 'DIK004', 'MULTIMEDIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
  `level` char(15) NOT NULL,
  PRIMARY KEY (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`level`) VALUES
('Administrator'),
('Guru'),
('Operator'),
('Siswa'),
('Wali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_diklat`
--

CREATE TABLE IF NOT EXISTS `mata_diklat` (
  `id_diklat` char(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id_diklat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_diklat`
--

INSERT INTO `mata_diklat` (`id_diklat`, `nama`) VALUES
('DIK001', 'PHP 5'),
('DIK002', 'Python'),
('DIK003', 'HTML'),
('DIK004', 'CSS'),
('DIK005', 'Visula Basic'),
('DIK006', 'Java'),
('DIK007', 'Debian'),
('DIK008', 'Web Design'),
('DIK009', 'Matematika'),
('DIK010', 'Kalkulus'),
('DIK111', 'KKPI'),
('sd', 'wesg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` char(15) NOT NULL,
  `id_guru` char(15) NOT NULL,
  `id_sk` char(15) NOT NULL,
  `nilai_angka` varchar(5) NOT NULL,
  `nilai_huruf` varchar(30) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `nisn` (`nisn`,`id_guru`,`id_sk`),
  KEY `id_guru` (`id_guru`),
  KEY `id_sk` (`id_sk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`no`, `nisn`, `id_guru`, `id_sk`, `nilai_angka`, `nilai_huruf`) VALUES
(10, '9981600170', 'GR002', 'SK001', '9', 'A'),
(11, '9981600171', 'GR002', 'SK001', '8', 'B'),
(13, '9981600172', 'GR002', 'SK001', '7', 'C'),
(14, '9981600173', 'GR002', 'SK001', '6', 'D'),
(15, '9981600174', 'GR002', 'SK001', '5', 'E'),
(16, '9981600175', 'GR002', 'SK001', '4', 'E'),
(17, '9981600170', 'GR002', 'SK002', '9', 'A'),
(18, '9981600170', 'GR002', 'SK003', '9', 'A'),
(19, '9981600171', 'GR002', 'SK002', '8', 'B'),
(20, '9981600171', 'GR002', 'SK003', '8', 'B'),
(21, '9981600172', 'GR002', 'SK002', '7', 'C'),
(22, '9981600172', 'GR002', 'SK003', '7', 'C'),
(23, '9981600170', 'GR004', 'SK001', '9', 'A'),
(24, '9981600170', 'GR004', 'SK002', '8', 'B'),
(25, '9981600170', 'GR004', 'SK003', '9', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` char(15) NOT NULL,
  `id_kk` char(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` longblob NOT NULL,
  PRIMARY KEY (`nisn`),
  KEY `id_kk` (`id_kk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `id_kk`, `nama`, `alamat`, `tgl_lahir`, `foto`) VALUES
('9981600170', 'KK001', 'Dimas Tri Sulaksono', 'Indonesia', '1997-10-17', ''),
('9981600171', 'KK001', 'Herpy', 'Indoneasia', '1997-01-16', ''),
('9981600172', 'KK003', 'Derpy', 'Indonesia', '1996-12-07', ''),
('9981600173', 'KK001', 'Lerpy', 'Indonesia', '1996-12-07', ''),
('9981600174', 'KK002', 'Jerpy', 'Indonesia', '1997-01-16', ''),
('9981600175', 'KK003', 'Gerpy', 'Indonesia', '1996-12-05', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `standar_kompetensi`
--

CREATE TABLE IF NOT EXISTS `standar_kompetensi` (
  `id_sk` char(15) NOT NULL,
  `id_kk` char(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  PRIMARY KEY (`id_sk`),
  KEY `id_kk` (`id_kk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `standar_kompetensi`
--

INSERT INTO `standar_kompetensi` (`id_sk`, `id_kk`, `nama`, `kelas`) VALUES
('SK001', 'KK002', 'PHP Statement', 'XII'),
('SK002', 'KK002', 'Proxy', 'XII'),
('SK003', 'KK003', 'Photoshop', 'XII'),
('SK004', 'KK001', 'Javascript', 'XII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` char(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` char(15) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `level` (`level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
('AD001', 'Admin', 'admin17', 'Administrator'),
('GR001', 'Herp', 'herp17', 'Guru'),
('GR002', 'Derp', 'derp17', 'Guru'),
('GR003', 'Jerp', 'jerp17', 'Guru'),
('GR004', 'Herpina', 'herpina17', 'Guru'),
('GR005', 'Derpina', 'derpina17', 'Guru'),
('GR006', 'Jerpina', 'jerpina17', 'Guru'),
('SW003', 'siswa', 'siswa17', 'Siswa'),
('WL004', 'Wali', 'wali17', 'Wali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE IF NOT EXISTS `wali` (
  `id_wali` char(15) NOT NULL,
  `nisn` char(15) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telp` char(15) NOT NULL,
  PRIMARY KEY (`id_wali`),
  KEY `nisn` (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`id_wali`, `nisn`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat`, `telp`) VALUES
('WM001', '9981600170', 'Turman', 'Guru', '-', '-', 'Indonesia', '-');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kompetensi_keahlian` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kompetensi_keahlian`
--
ALTER TABLE `kompetensi_keahlian`
  ADD CONSTRAINT `kompetensi_keahlian_ibfk_1` FOREIGN KEY (`id_diklat`) REFERENCES `mata_diklat` (`id_diklat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`id_sk`) REFERENCES `standar_kompetensi` (`id_sk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kompetensi_keahlian` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `standar_kompetensi`
--
ALTER TABLE `standar_kompetensi`
  ADD CONSTRAINT `standar_kompetensi_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kompetensi_keahlian` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level_user` (`level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD CONSTRAINT `wali_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
