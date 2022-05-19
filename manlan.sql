-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.0.100
-- Waktu pembuatan: 23 Feb 2022 pada 18.51
-- Versi server: 8.0.26-16
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webkuone_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `manlan_admin`
--

CREATE TABLE `manlan_admin` (
  `id_user` int NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `sebagai` enum('calonasisten','calonprogrammer','asisten','programmer','staff','admin') NOT NULL,
  `foto` varchar(100) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `angkatan` varchar(25) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `cv` varchar(100) NOT NULL,
  `surat_lamaran` varchar(100) NOT NULL,
  `rangkuman_nilai` varchar(100) NOT NULL,
  `krs_upload` varchar(100) NOT NULL,
  `ktm_upload` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `seleksi_berkas` enum('ya','tidak','') NOT NULL,
  `seleksi_ujian` enum('ya','tidak','') NOT NULL,
  `seleksi_wawancara` enum('ya','tidak','') NOT NULL,
  `seleksi_staff` enum('ya','tidak','') NOT NULL,
  `status_peserta` enum('proses','lulus','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `manlan_admin`
--

INSERT INTO `manlan_admin` (`id_user`, `email`, `password`, `nama`, `jurusan`, `sebagai`, `foto`, `npm`, `kelas`, `telepon`, `region`, `angkatan`, `lahir`, `alamat`, `cv`, `surat_lamaran`, `rangkuman_nilai`, `krs_upload`, `ktm_upload`, `sertifikat`, `seleksi_berkas`, `seleksi_ujian`, `seleksi_wawancara`, `seleksi_staff`, `status_peserta`) VALUES
(1, 'admin@manlan.com', '67bb36b66c126f6ff36d0cf13280ff4ad899a904', 'Admin', 's1-teknik-inromatika', 'admin', 'admin-panitia.png', 'adminadmin', '', '', '', '', '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya', 'ya', 'proses'),
(2, 'staff@manlan.com', '67bb36b66c126f6ff36d0cf13280ff4ad899a904', 'staff', 'staff', 'staff', 'staff-panitia.png', 'staff2022', '', '', '', '', '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya', 'ya', 'proses'),
(3, 'asisten@manlan.com', '67bb36b66c126f6ff36d0cf13280ff4ad899a904', 'asisten', 's1-akuntansi', 'asisten', 'asisten-panitia.png', 'asisten2022', '', '', '', '', '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya', 'ya', 'proses'),
(4, 'programmer@manlan.com', '67bb36b66c126f6ff36d0cf13280ff4ad899a904', 'programmer', 's1-sistem-informasi', 'programmer', 'programmer-panitia.png', 'programmer2022', '', '', '', '', '', '', '', '', '', '', '', '', 'ya', 'ya', 'ya', 'ya', 'proses'),
(5, 'calonasisten@manlan.com', '67bb36b66c126f6ff36d0cf13280ff4ad899a904', 'calon asisten', 's1-manajemen', 'calonasisten', 'calonasisten.png', 'calonasisten2022', '2EA99', '085811379583', 'depok', '2019', '2002-01-30', 'Margonda', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', '', 'ya', 'ya', 'ya', '', 'proses'),
(6, 'calonprogrammer@manlan.com', '67bb36b66c126f6ff36d0cf13280ff4ad899a904', 'calon programmer', 's1-teknik-inromatika', 'calonprogrammer', 'calonprogrammer.png', 'calonprogrammer2022', '2KA99', '081294259564', 'depok', '2019', '2002-01-30', 'Margonda', '', '', '', '', '', '', 'tidak', 'tidak', 'ya', 'tidak', 'tidak'),
(13, 'alfiahnhw19@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'alfiah nur hikmahwati', 'd3-manajemen', 'calonasisten', 'foto.jpeg', '50219469', '3DF02', '0881025064487', 'depok', '2019', '2001-06-19', 'jl.kamboja no.19 .Rt/rw 001/005 .kp arman .cimanggis', 'CV_ALFIAH_NUR_H.pdf', 'SURAT_LAMARAN_ALFIAH_NUR_HIKMAHWATI.pdf', 'RANGKUMAN_NILAI_ALFIAH_NUR_H.pdf', 'KRS_ALFIAH_NUR_H.pdf', 'KTM_ALFIAH_NUR_HIKMAHWATI.pdf', '', 'ya', 'ya', 'ya', '', 'proses'),
(14, 'alfinadamaiyanti17@gmail.com', 'a7b3e1c522113e3731a5b7f487776b751e878714', 'alfina damaiyanti', 's1-manajemen', 'calonasisten', 'foto.jpg', '10219482', '3EA05', '081314813053', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(15, 'fifi.imel12@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'alifiya risqi habibah', 's1-akuntansi', 'calonasisten', 'foto.jpg', '20219532', '3EB02', '089652420498', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(16, 'ameliaanggraini113@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'amelia anggraini', 's1-manajemen', 'calonasisten', 'foto.jpg', '17218767', '4EA03', '085760736196', 'depok', ' 2018', '1999-08-10', 'Jl. H Muin no. 78 Rt 001/ Rw 010, Kelapa Dua, Tugu, Cimanggis, Depok', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(17, 'ardiananjasmara17@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'ardian anjasmara', 's1-manajemen', 'calonasisten', 'foto.jpg', '11218014', '4EA19', '081908144173', 'kalimalang', '2018', '1999-08-06', 'Jalan pangkalan 2 RT 001/002 No 25 Kel. Cikiwul, Kec. Bantargebang, Kota Bekasi', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(18, 'assyifaramadhini@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'assyifa shafira ramadhini', 's1-manajemen', 'calonasisten', 'foto.jpg', '11219110', '3EA11', '089648551730', '', ' ', ' ', ' ', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(19, 'bilahizzahassyifasukmaya@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'bilah izzah assyifa sukmaya', 's1-manajemen', 'calonasisten', 'foto.jpeg', '10220319', '2EA20', '081584213431', 'kalimalang', ' 2020', '2001-08-27', 'Graha Harapan Regency', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(20, 'caswatty123@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'caswati', 'd3-manajemen', 'calonasisten', 'foto.jpg', '50220336', '2DF02', '083823075512', '', '', ' ', ' ', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(21, 'Dinantodinandhoyo10@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'dinanto dinandhoyo', 's1-manajemen', 'calonasisten', 'foto.jpg', '10220472', '2EA14', '089618384351', '', '', ' ', ' ', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(22, 'efizahra1001@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'efi zahra', 's1-akuntansi', 'calonasisten', 'foto.jpg', '20220512', '2EB05', '089677368675', '', '', ' ', ' ', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(23, 'fadiarakhmita31@gmail.com', 'c3327f5ca4b51f0dbddb76c15bd97ae6405797ec', 'fadia rakhmita nauli', 's1-manajemen', 'calonasisten', 'foto.jpg', '12218367', '4EA24', '082110989941', 'kalimalang', ' 2018', '2000-12-31', 'Vila Mahkota Pesona Blok F6/1 RT 07 RW 25', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(24, 'hanakamilia2002@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'hana kamilia aryanto', 's1-akuntansi', 'calonasisten', 'foto.jpeg', '20220685', '2EB10', '085156528041', '', '', ' ', ' ', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(25, 'liana.helma05@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'helma liana fitri', 's1-manajemen', 'calonasisten', 'foto.jpg', '10220699', '2EA09', '081319697391', '', '', ' ', ' ', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(26, 'indikamaharani23@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'indika maharani', 's1-manajemen', 'calonasisten', 'foto.jpeg', '10220742', '2EA09', '085719615213', 'depok', '2020', '2002-04-09', 'Kampung Palsigunung, Jalan Haji Icang, Gang Haji Samin 1, Rt 003 / rw 003 Nomor 9 Cimanggis Depok, kelurahan tugu, kode pos 16451', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(27, 'jnaurafajrinna04@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'jihan naura fajrinna', 's1-manajemen', 'calonasisten', 'foto.jpg', '10220786', '2EA06', ' 089604115546', 'depok', '2020', '2002-01-04', 'Jalan Saminten II No. 135 RT 04/016 Kel Baktijaya Kec Sukmajaya Depok', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(28, 'kusyaerimzhfr@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'kusyaeri muzhaffar', 's1-manajemen', 'calonasisten', 'foto.jpg', '10220825', '2EA15', '081283774124', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(29, 'lintangkinanthi09@gmail.com', 'dba2b0cad1bde4d0ec6d7cb00d4336ab6a40a89e', 'lintang kinanthi', 's1-manajemen', 'calonasisten', 'foto.jpg', '13219420', '3EA12', '081380064476', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(30, 'livianamiraa@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'livia namira azhara', 's1-manajemen', 'calonasisten', 'foto.jpg', '13218814', '4EA24', '089624050544', 'kalimalang', '2018', '2000-05-16', 'Perumahan Graha Prima Baru Blok L.19 No 1B Mangunjaya Tambun Selatan Bekasi', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(31, 'mariyatul.tiya12@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'mariyatul gibtiyah', 's1-manajemen', 'calonasisten', 'foto.jpeg', '10220901', '2EA03', '085772319594', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(32, 'Maulidzhahirah@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'maulid zhahirah atikah', 's1-manajemen', 'calonasisten', 'foto.JPG', '10220915', '2EA13', '085774708342', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(33, 'maulidiatiaranoor@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'maulidia tiara noor', 'd3-manajemen', 'calonasisten', 'foto.jpeg', '53219609', '3DF02', '085842027568', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(34, 'maylinakusumawati44@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'maylina kusumawati', 's1-manajemen', 'calonasisten', 'foto.png', '14218048', '4EA28', '083891124467', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(35, 'Miftaahuljnnh26@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'miftahul jannah', 's1-manajemen', 'calonasisten', 'foto.jpg', '13219701', '3EA13', '087820511359', 'depok', '2019', '2001-01-26', 'Jl. Pule No. 33 Kel. Depok Kec. Cipayung Kota Depok', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(36, 'mirandatdr0808@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'miranda tri dewarani', 's1-akuntansi', 'calonasisten', 'foto.jpg', '24218145', '4EB08', '081295949211', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(37, 'mita.adha01@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'mita adha fratiwi', 's1-manajemen', 'calonasisten', 'foto.png', '13219723', '3EA23', '087830669842', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(38, 'mrezkypratama07@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'muhammad rezky pratama', 's1-manajemen', 'calonasisten', 'foto.jpg', '14218872', '4EA30', '0818857761', 'karawaci', '2018', '1999-11-07', 'Jalan Taman Parahyangan 1 nomor 92, Lippo Karawaci', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(39, 'knidaan1@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'nida\'an khofiya', 's1-manajemen', 'calonasisten', 'foto.jpg', '14219774', '3EA33', '083819044626', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(40, 'niscaah@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'nisca angelita heryanto', 's1-manajemen', 'calonasisten', 'foto.jpeg', '15218336', '4EA25', '089614684530', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(41, 'nursila.sil@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'nursila', 'd3-manajemen', 'calonasisten', 'foto.jpg', '54219924', '3DF02', '087828136026', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(42, 'putriiiayu26@gmail.com', 'b85646229d8bc5819440c344de8667a9c627abf9', 'putri ayu diah sarahwati', 's1-manajemen', 'calonasisten', 'foto.jpg', '11220274', '2EA17', '088214329935', 'depok', '2020', '2002-11-26', 'Jl. Kampung Rawa Tengah, Rt.03/Rw.07 N0.9, Jakarta Pusat (Region Asli Salemba)', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(43, 'rachelhutahaean8800@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'rachel beauty ellen sari', 's1-akuntansi', 'calonasisten', 'foto.jpg', '25218712', '4EB03', '081275601759', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(44, 'rahmawatisulastri42871@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'rahmawati', 's1-akuntansi', 'calonasisten', 'foto.jpg', '25219243', '3EB05', '082315525953', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(45, 'ratnasariwulandariiii@gmail.com', '7d802a65693e63b4ef617cee57e505088fcef43a', 'Ratna Sari Wulandari', 's1-akuntansi', 'calonasisten', 'foto.jpeg', '25218917', '4EB07', '081384053533', 'depok', '2018', '1999-08-11', 'Jl. Damai No. 48 A Lingkungan Cipayung RT 04 RW 01 Kel. Abadijaya, Kec. Sukmajaya', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(46, 'riyanipuspita12@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'riyani puspita dewi', 's1-manajemen', 'calonasisten', 'foto.jpeg', '11220411', '2EA17', '082213266651', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(47, 'shintaagustiningsih@gmail.com', '64adab5b8d568ff99f79e841005635abc4a43002', 'shinta agustiningsih', 's1-akuntansi', 'calonasisten', 'foto.jpg', '21220544', '2EB14', '089661782090', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(48, 'silvirasyah98@gmail.com', '6fcb1a2d9bb263a9430dcf86ed199b51cce2e2ab', 'silvira alivia syahnisa', 'd3-manajemen', 'calonasisten', 'foto.jpg', '31220556', '2DD01', '081572148300', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(49, 'winatolinawati@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'wina tolinawati', 's1-manajemen', 'calonasisten', 'foto.jpg', '16219615', '3EA14', '085287761267', 'depok', '2019', '2001-09-03', 'Perumahan Puri Nirwana 2. Cibinong-Bogor', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(50, 'Windapk71@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'winda putri koesmawarni', 's1-manajemen', 'calonasisten', 'foto.jpg', '17219130', '3EA32', '087883205768', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(51, 'yasminnidan@gmail.com', '34c8ceb1c2443f9a315b66e7b9f6fd5e7477acbc', 'yasmin nida nabilah', 'd3-akuntansi', 'calonasisten', 'foto.jpg', '46219666', '3DA01', '089630952966', 'depok', '2019', '2000-03-07', 'Jalan Masjid Jami Nurul Iman, Tugu, Cimanggis, Depok', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(52, 'fanymeilidia@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'zulfani meilidia', 's1-manajemen', 'calonasisten', 'foto.png', '16219869', '3EA32', '081293529743', '', '', '', '', 'CV_ATS3.pdf', 'Surat_Lamaran_LAB3.pdf', 'RangkumanNilai3.pdf', '16219869_81_(2).pdf', 'KTM.pdf', 'BA-Zulfani_Meilidia.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(53, 'afifahsakinah008@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'afifah nur sakinah', 's1-sistem-informasi', 'calonprogrammer', 'foto.jpg', '10118262', '4KA02', '089699559418', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(54, 'alfinasyahr10@gmail.com', '00c5f7508f7fbface5f08986a855402d20ba5686', 'alfinasyah rifqi', 's1-sistem-informasi', 'calonprogrammer', 'foto.jpg', '10120106', '2KA24', '081513351794', 'kalimalang', '2020', '2002-01-10', 'Kp. Pulo Asem no 20 RT 008 RW 006', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(55, 'cyberman742@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'alif lintang lazuardi sutowo', 's1-teknik-inromatika', 'calonprogrammer', 'foto.jpg', '50420136', '2IA19', '081280406223', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(56, 'alifyadara23@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'alifya daradinanti farmayana', 's1-teknik-inromatika', 'calonprogrammer', 'foto.jpeg', '50419533', '3IA05', '081212646400', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(57, 'bayuadibwiraprana1@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'bayu adib wiraprana', 's1-teknik-inromatika', 'calonprogrammer', 'foto.jpg', '51418366', '4IA12', '081299364061', '', '', '', '', '', '', '', '', '', '', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(58, 'dariwan1607@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'dariwan', 's1-teknik-inromatika', 'calonprogrammer', 'foto.jpg', '50420335', '2IA14', '085722719321', 'depok', '2020', '1999-01-16', 'Indramayu', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(59, 'febryanmp7@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'febryan marcellino pradaffa', 's1-sistem-informasi', 'calonprogrammer', 'foto.jpg', '10120431', '2KA24', '081380552039', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(60, 'nindya139@gmail.com', '5c0386252f5cf642c305b198c94c9c335142b803', 'fitrianindya alifia syawali', 's1-teknik-inromatika', 'calonprogrammer', 'foto.jpg', '52419487', '3IA18', '089632284632', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(61, 'aryanurarrif@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'muhammad arya nurarif', 's1-sistem-informasi', 'calonprogrammer', 'foto.jpeg', '14119042', '3KA14', '082135888258', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(62, 'fajrinarridwan@gmail.com', '2a84498a9277b7731a07925640cf0ac625c1678b', 'muhammad fajrin ar-ridwan', 's1-sistem-informasi', 'calonprogrammer', 'foto.jpg', '10120722', '2KA22', '081908104711', 'kalimalang', '2020', '2002-01-11', 'Jln macan raya 3 RT 06 RW 03 No 10 Kel harapan jaya kecamatan Bekasi Utara', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(63, 'Nadiya110202@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'nadiya', 's1-sistem-informasi', 'calonprogrammer', 'foto.png', '14119630', '3KA14', '085887877060', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(64, 'salsabilanajwa2101@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'najwa salsabila aulia', 's1-teknik-inromatika', 'calonprogrammer', 'foto.jpg', '50420947', '2IA16', '085213583841', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(65, 'naufalabdullah33@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'naufal abdullah hanif wibowo', 's1-teknik-inromatika', 'calonprogrammer', 'foto.JPG', '50420953', '2IA19', '087885134611', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(66, 'nitiswening@gmail.com', '65a5c2a2a3e82a8bfafab679de6f97e1c63fe4c6', 'nitis wening nurul aini hadiantono', 's1-teknik-inromatika', 'calonprogrammer', 'foto.jpg', '50420976', '1IA18', '082112019616', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(67, 'ravitanrl@gmail.com', '398be800602ec61653c44bc99a89619d912b5f88', 'ravita nurul asmi', 's1-teknik-inromatika', 'calonprogrammer', 'foto.png', '51420063', '2IA17', '089614803821', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(68, 'gitazahra123cahya@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'regita zahra cahyani', 's1-sistem-informasi', 'calonprogrammer', 'foto.png', '15119401', '3KA17', '081267534848', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(69, 'syahtomo23@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'revansyah baihaqi priantomo', 's1-sistem-informasi', 'calonprogrammer', 'foto.jpg', '10120982', '2KA22', '087782823908', '', '', '', '', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(70, 'rezafebriyan00@gmail.com', '4fcdd9f52610181c76d306082dd9241931e6c63e', 'reza putra febriyan', 's1-sistem-informasi', 'calonprogrammer', 'foto.jpg', '16118061', '4KA25', '087837255556', 'kalimalang', '2018', '2000-02-13', 'Jl. Budi Luhur, Bintara Jaya, Bekasi Barat ', 'cv.pdf', 'surat_lamaran.pdf', 'rangkuman_nilai.pdf', 'krs.pdf', 'ktm.pdf', 'sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(71, 'nurularyanti9@gmail.com', '960d577285031b8e172407838de270f097ad199a', 'Nurul Hikmah Aryanti', 's1-akuntansi', 'calonasisten', 'PicsArt_03-05-12_33_259.jpg', '21220227', '2EB15', '085881549022', 'cengkareng', '2020', '2002-01-10', 'Jl Kebagusan Kecil RT10 RW03 NO.40, Kebagusan, Pasar Minggu, Jakarta Selatan', 'CV_Nurul_21.pdf', 'Lamaran_Lab_Manlan_Nurul.pdf', 'RangkumanNilai.pdf', '21220227_81_(1).pdf', 'ktm.pdf', 'sertifikat_nurulha_compressed.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(75, 'amar.yanuar@gmail.com', '58cf8a051cf842853be3952940872124f3300149', 'Amar Yanuar Malik', 's1-manajemen', 'calonasisten', 'PAS_FOTO_16.jpeg', '10220123', '2EA17', '087888729222', 'depok', '2020', '2002-02-17', 'JL. TEBET DALAM II NO. 26', '1__CV_Amar_Yanuar_Malik.pdf', '2__Surat_Lamaran_Aslab.pdf', '3__RangkumanNilai_2.pdf', '4__KRS_smt_3.pdf', 'KTM.pdf', '', 'ya', 'ya', 'tidak', '', 'proses'),
(76, 'zieedist23@gmail.com', '9c7cabb022bef7db85ecef4d1b3ad6661a539645', 'Yudistiyanto Fauzi', 's1-teknik-inromatika', 'calonprogrammer', 'PAS8.png', '51420303', '2IA18', '081384807933', 'kalimalang', '2020', '2000-05-23', 'KP. CIMAHI, RT 005/RW 003, Desa SUKAMAHI, KEC. CIKARANG PUSAT, KAB. BEKASI', 'CV.pdf', 'Surat_Lamaran.pdf', 'RangkumanNilai_(1).pdf', '51420303_81.pdf', 'KTM.pdf', '', 'ya', 'ya', 'tidak', '', 'proses'),
(77, 'dwinasafitri12@gmail.com', '9e52571fcf46b9238e34b0b12082f1ffb94dd7bb', 'Dwina Safitri', 's1-akuntansi', 'calonasisten', 'FOTO_Dwina_Safitri_21219945_3EB03.jpeg', '21219945', '3EB03', '08568202354', 'depok', '2019', '2000-11-12', 'Perum. Griya Cilodong Asri Blok A26, Kel. Sukamaju, Kec. Cilodong. KOTA DEPOK, JAWA BARAT.', 'CV2.pdf', 'Surat_Lamaran2.pdf', 'Transkip_Nilai2.pdf', 'KRS2.pdf', 'KTM.pdf', 'Sertifikat.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(78, 'adamfathahillah21@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'Adam Fathahillah Zainullah', 's1-teknik-inromatika', 'calonprogrammer', 'FOTO.PNG', '50420029', '2IA18', '08118888060', 'kalimalang', '2020', '2001-08-21', 'Perumahan Titian Asri Blok A2,no 3.17143,KOTA BEKASI,MEDAN SATRIA,\r\nJAWA BARAT.\r\n\r\n', 'CV.pdf', 'Surat_Lamaran.pdf', 'Rangkuman_Nilai.pdf', 'KRS.pdf', 'KTM.pdf', '', 'ya', 'ya', 'ya', '', 'proses'),
(79, 'ashrirahmania2117@gmail.com', '5c432c7af8f63ef5a1c6b8883ec53fa9b24151d0', 'Ashri Rahmania Putri', 's1-akuntansi', 'calonasisten', 'Foto_Ashri_Rahmania_Putri_20220250_Akuntansi.jpeg', '20220250', '2EB05', '082112533596', 'depok', '2020', '2002-09-17', 'Perumahan Graha Studio Alam Blok B  RT 07/09 kel. Sukamaya kec. Sukamajaya, Kota Depok.', 'CV_Ashri_Rahmania_Putri_Akuntansi.pdf', 'Surat_Lamaran_Ashri_Rahmania_Putri_Akuntansi.pdf', 'Nilai_Ashri_Rahmania_Putri_20220250_Akuntansi.pdf', 'KRS_Ashri_Rahmania_Putri_20220250_Akuntansi.pdf', 'KTM_Ashri_Rahmania_Putri_Akuntansi.pdf', 'Sertifikat_Ashri_Rahmania_Putri_Akuntansi.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(80, 'osis.ybp@gmail.com', 'f86de5ee524b770d0a807fa26b95941709124afb', 'ica', 's1-manajemen', 'calonasisten', 'ICA.jpeg', '11519515', '', '', '', '', '', '', '', '', '', '', '', '', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak'),
(81, 'raisacesaria@gmail.com', 'db43fe709111d84965a0b2d56d8d5b824e92f506', 'Raden Raisa Cesaria', 'd3-manajemen', 'calonasisten', 'Raden_Raisa_Cesaria.png', '51220296', '2DF01', '085780130855', 'depok', '2020', '2002-03-01', 'Pondok Sukmajaya Permai Depok Blok B4/6\r\nSukmajaya, Depok\r\nKode Pos: 16412', 'CV_Raden_Raisa_Cesaria.pdf', 'Surat_Lamaran_Kerja_Raden_Raisa_Cesaria.pdf', '', 'KRS_Raden_Raisa_Cesaria.pdf', 'KTM_Raden_Raisa_Cesaria.pdf', 'Analisis_Fundamental_Raden_Raisa_Cesaria.pdf', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(82, 'ashiamtz219@gmail.com', '8a73c8272f1bb67b517fc3f2e6fbf39a6cf3090e', 'Ashia Inayati Mumtaz', 's1-akuntansi', 'calonasisten', 'Foto_Profil.jpg', '20220248', '2EB01', '085860003160', 'depok', '2020', '2002-01-09', 'Jalan Pepaya no. 5 Pejaten Barat, Pasar Minggu, Jakarta Selatan', 'CV_Ashia.pdf', 'Surat_lamaran_Ashia.pdf', 'Nilai_Ashia_Inayati_Mumtaz_20220248_Akuntansi.pdf', 'KRS_Ashia_Inayati_Mumtaz_20220248_Akuntansi.pdf', 'KTM_Ashia.pdf', 'Ashia_Inayati_Mumtaz.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(83, 'muhamadreyhan598@gmail.com', 'c145c0ba3740a0d54c50180d2c24d0e1dd0ab09b', 'Mochamad Rechan Ichsanul Kamil', 's1-manajemen', 'calonasisten', 'WhatsApp_Image_2022-01-31_at_11_30_40.jpeg', '10220941', '2EA17', '085155345280', 'depok', '2020', '2001-10-25', 'JL. SUNGAI LANDAK NO.21', 'cv.pdf', 'Surat_Lamaran_aslab.pdf', 'RangkumanNilai.pdf', 'KRS.pdf', 'KTM.pdf', 'Entrepreneur_Talk_-_Sumber_Daya_Manusia.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(84, 'nisarchm11@gmail.com', 'd286c8156ff4c9f5e7fb91dab155e4e97f47d333', 'Nisa Qory Nurrachma', 's1-akuntansi', 'calonasisten', 'foto_bg_merah_nisa.png', '27219637', '', '', '', '', '', '', 'CV_NISA_QORY_N.pdf', 'Surat_Lamaran_Asisten_Lab_Nisa_Qory.pdf', 'Rangkuman_Nilai__Nisa_Qory.pdf', 'KRS_Semester_5.pdf', 'KTM.pdf', 'SERITIKAT_NISA_QORY.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(85, 'syifanameliana@gmail.com', '86d4d20f6aa8f507e977ef86459d04d43075151e', 'Syifa Nurul Ameliana', 's1-manajemen', 'calonasisten', 'IMG_20220114_070208.jpg', '11220606', '2EA17', '085772200467', 'depok', '2020', '2002-09-24', 'Cawang III RT 008/RW 011 NO. 62, Cawang, Kramat Jati, Jakarta Timur', 'CV-Syifa_Nurul_Ameliana.pdf', 'Surat_Lamaran-Syifa_Nurul_Ameliana.pdf', 'Rangkuman_Nilai-Syifa_Nurul_Ameliana.pdf', 'KRS_Aktif-Syifa_Nurul_Ameliana.pdf', 'Surat_Lamaran-Syifa_Nurul_Ameliana1.pdf', 'Syifa_Nurul_Ameliana.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(86, 'lutfiahazh16@gmail.com', '9eddc85fb919756854b57cb71ca2104078296ade', 'Lutpiah Nur Azizah', 's1-akuntansi', 'calonasisten', 'PicsArt_07-05-06-removebg-preview_(1).jpg', '20220873', '2EB08', '085158668216', 'depok', '2020', '2002-08-16', 'Perumahan Ocean Terrace Blok B No. 8, Tirtajaya,, Sukmajaya, Depok, Jawa Barat', 'CV_Lutpiah_Nur_Azizah.pdf', 'Surat_Lamaran_Lutpiah_Nur_Azizah.pdf', 'Rangkuman_Nilai_Lutpiah_Nur_Azizah.pdf', 'KRS_Sem3_Lutpiah_Nur_Azizah.pdf', 'KTM_Lutpiah_Nur_Azizah.pdf', '', 'ya', 'ya', 'ya', '', 'proses'),
(87, 'evanovia.mnk@gmail.com', '3a65c8fb65c3858a54ab86725a2646abffd82c85', 'Eva Novia Manik', 's1-teknik-inromatika', 'calonprogrammer', 'pas_foto.jpg', '50420424', '2IA16', '08994635695', 'kalimalang', '2020', '2002-10-07', 'Puri Cendana Blok C 10 No 12, RT 003, RW 008, Ds Sumber Jaya, Kab. Bekasi, Tambun Selatan, Jawa Barat, ID, 17510', 'CV_Eva_Novia_Manik.pdf', 'Surat_Lamaran_Eva_Novia_Manik.pdf', 'RangkumanNilai_Eva_Novia_Manik.pdf', 'KRS_Smt3_Eva_Novia_Manik.pdf', 'KTM_Eva_Novia_Manik.pdf', '', 'ya', 'ya', 'ya', '', 'proses'),
(88, 'fathianailasalsabila@gmail.com', '697aa3886291cd6126d396da8d7c78960aa06096', 'Fathia Naila Salsabila', 's1-manajemen', 'calonasisten', 'DSC_0399.jpg', '12219312', '3EA15', '081386241292', 'depok', '2019', '2000-09-17', 'Jl. Kebon Kopi, No.10, kel. Pondok Betung, Kec. Pondok Aren, Kota Tangerang Selatan.', 'CV_FATHIA_NAILA_SALSABILA.pdf', 'Surat_Lamaran_Fathia_Naila_Salsabila.pdf', 'RangkumanNilai_Fathia_Naila_Salsabila_Semester_1-4.pdf', 'KRS_Fathia_Naila_Salsabila_Semester_5.pdf', 'KTM_Fathia_Naila_Salsabila.pdf', 'Fathia_Naila_Salsabila_Sertifikat.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(89, 'lisajulianartati@gmail.com', '114b010bc41a7ede526ab57705e6fd65ffe6bfff', 'Lisa Julian Artati', 's1-akuntansi', 'calonasisten', 'WhatsApp_Image_2022-01-16_at_04_14_18.jpeg', '20220854', '2EB15', '081276505889', 'cengkareng', '2020', '2001-06-30', 'Jl. Malahayati, Lingk. Babul Iman RT 01, Kel. Kota Bawah Barat, Kec. Sukakarya', 'CV_Manla_(2).pdf', 'Surat_Lamaran_Lab_Manla_Lisa.pdf', 'RangkumanNilai_.pdf', 'KRS_Smstr_3.pdf', 'KTP.pdf', 'Sertif.pdf', 'ya', 'ya', 'tidak', '', 'proses'),
(90, 'athayaput31@gmail.com', 'cb3ec0cb31b90dba552ca38d30f31a376adb4ee8', 'Athaya Putri Azahra', 's1-sistem-informasi', 'calonasisten', 'PicsArt_09-23-08_32_36.png', '11118184', '4KA06', '085779725093', 'depok', '2018', '2000-08-31', 'Jl.Nurul Falah GG.Mekar 1 003/004 No.8 Cisalak Pasar, Cimanggis Depok', 'CV_Athaya_Putri_Azahra5.pdf', 'Surat_Lamaran_Athaya_Putri_Azahra5.pdf', 'RangkumanNilai(1)5.pdf', '11118184_815.pdf', 'Ktp.pdf', '', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(91, 'monicaaudry90@gmail.com', 'e8a7a4430e38010e0ad70a1a85fc9a01467fa883', 'Monica Audry', 's1-teknik-inromatika', 'calonprogrammer', 'Monica_Audry.jpeg', '50420743', '2IA16', '081281107870', 'kalimalang', '2020', '2002-07-17', 'JL. Al-Amanah Rt.05 Rw.01 Jakasampurna No.129', 'CV_MONICA_AUDRY_2.pdf', 'Surat_Lamaran_Monica_Audry.pdf', 'RangkumanNilai.pdf', '50420743_KRS_Sem3.pdf', 'KTM_MONICA.pdf', '', 'ya', 'ya', 'tidak', '', 'proses'),
(92, 'flowrend39ssylva@gmail.com', 'fd432a264dc09eefaade25864d7db1b2aa8a6e08', 'Sylva Flowrends', 's1-teknik-inromatika', 'calonprogrammer', 'pasfoto.jpg', '51420230', '2IA16', '087789789125', 'kalimalang', '2020', '2001-10-22', 'Perumahan Mayanggi Jl.Pejuang VIII No.13 Blok.K13 Rt.014/Rw.008 Kel.Mustikasari Kec.Mustikajaya, Bekasi', 'CV_SYLVAFLOWRENDS.pdf', 'Surat_Lamaran.pdf', 'RangkumanNilai_SylvaFlowrends.pdf', 'KRS_SylvaFlowrends.pdf', 'KTM_SylvaFlowrends.pdf', '', 'ya', 'ya', 'ya', '', 'proses'),
(93, 'salsanadira05@gmail.com', 'fd4d64edcbb594c2b33bc990cf0c0f600e02cd58', 'Nadira Salsabilla', 's1-manajemen', 'calonasisten', 'DSC_0031_-_SalinN4.jpg', '14219628', '3EA01', '089637916907', 'depok', '2019', '2001-08-11', 'JL. H. PI\'IH BOJONGSARI KOTA DEPOK 16516', 'CV_Nadira_Salsabilla.pdf', 'Surat_Lamaran_Nadira_Salsabilla.pdf', 'Rangkuman_Nilai_Nadira_Salsabilla.pdf', 'KRS_Nadira_Salsabilla.pdf', 'KTM_Nadira_Salsabilla.pdf', '', 'ya', 'tidak', 'tidak', 'tidak', 'tidak'),
(94, 'kikimuliawati2000@gmail.com', 'fabd4f11c9c6668f0ee95c7010f1f58427975823', 'Kiki Muliawati', 'd3-manajemen', 'calonasisten', 'inbound6875056076782285153.jpg', '53219321', '3DF02', '083811135421', 'depok', '2019', '2001-05-20', 'Jl. Mercedes Benz Desa Cicadas RT 03/03 No. 108 Kec. Gunung Putri Kab. Bogor, Jawa Barat', 'Curriculum_Vitae_(CV)_Kiki_Muliawati.pdf', 'SURAT_LAMARAN_LAB_MANAJEMEN_LANJUT.pdf', 'Rangkuman_Nilai.pdf', 'KRS_SEMESTER_5.pdf', 'KTP_Kiki_Muliawati.pdf', 'SERTIFIKAT_MAGANG.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(95, 'irfanudin513@gmail.com', '90a2c008f25aa98c51ebdf73c62c4a2004023860', 'irfanudin', 's1-sistem-informasi', 'calonprogrammer', 'DSC_6630.jpg', '13119067', '3ka26', '081314945180', 'kalimalang', '2019', '2001-03-07', 'jln pulogebang ggn penjahit RT006/RW04 cakung jakarta timur', 'CV_Recuitment_labmanlan_2022.pdf', 'Surat_lamaran_recuitment_labmanlan_2022.pdf', '13119067_Rangkuman_Nilai.pdf', '13119067_krs_semester_5.pdf', 'ktm.pdf', '', 'ya', 'ya', 'tidak', '', 'proses'),
(96, 'fiina.dwijulianti@gmail.com', 'e5a8707b91ec8e4579e4a6fd0768c223db15807c', 'Fi\'ina Dwijulianti', 's1-manajemen', 'calonasisten', 'DSC_6491.JPG', '12219425', '3EA01', '082328673495', 'depok', '2019', '2001-07-20', 'Jalan Tutul Raya no K328 RT 009 RW 011 Pondok Bambu, Duren Sawit, Jakarta Timur.', 'CV_.pdf', 'Surat_Lamaran.pdf', 'Transkrip_nilai.pdf', 'KRS_FIINA_DWIJULIANTI.pdf', 'KTP.pdf', 'Mahasiswa_Berprestasi.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(97, 'anisyanadalh196@gmail.com', 'dd7b3aa3a4f490ff8726062cf601fdc4bbf009ce', 'Anisya Nada Laili Hidayah', 's1-manajemen', 'calonasisten', 'Nadaa.jpg', '11220810', '2EA32', '089624709559', 'cengkareng', '2020', '2000-06-19', 'Jalan Elang No. 141 RT 03/RW 11 Kelurahan Cilangkap, Kecamatan Tapos, Kota Depok - Jawa Barat 16465', 'CV_Anisya_Nada_Laili_Hidayah7.pdf', 'Surat_Lamaran.pdf', 'RangkumanNilai.pdf', '11220810_KRS_S_3.pdf', 'KARTU_KTM_Anisya_Nada.pdf', 'SERTIFIKAT_PENGHARGAAN.pdf', 'ya', 'ya', 'ya', '', 'proses'),
(98, 'deanisabel12@gmail.com', '7907a4182ad2e80b07fb019ca76076af1bf1257f', 'Dean Isabel Cavalera', 's1-manajemen', 'calonasisten', 'WhatsApp_Image_2022-01-31_at_22_36_49.jpeg', '10220402', '2EA23', '089646774487', 'kalimalang', '2020', '2001-12-12', 'Jl. Makam GG Darusalam IV 003/011', 'CV_Dean_Isabel_Cavalera2.pdf', 'Surat_Lamaran_Dean_Isabel_Cavalera.pdf', 'RangkumanNilai_Dean_Isabel_Cavalera.pdf', 'KRS_Dean_Isabel_Cavalera.pdf', 'KTM_Dean_Isabel_Cavalera.pdf', '', 'ya', 'ya', 'tidak', '', 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manlan_member`
--

CREATE TABLE `manlan_member` (
  `id_member` int NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `manlan_member`
--

INSERT INTO `manlan_member` (`id_member`, `gambar`, `nama`, `status`) VALUES
(1, 'KARTIKA SARI STAFF.jpg', 'DR. KARTIKA SARI', 'STAFF'),
(2, 'AGUS SUJARWANTO STAFF.jpg', 'AGUS SUJARWANTO', 'STAFF'),
(3, 'DINI TRI WARDANI STAFF.jpg', 'DINI TRI WARDANI', 'STAFF'),
(4, 'IBNU CAHYO RAMADHAN STAFF.jpg', 'IBNU CAHYO RAMADHAN', 'STAFF'),
(5, 'ABDUL ASISTEN.png', 'ABDUL', 'ASISTEN'),
(6, 'AFIFAH ASISTEN.png', 'AFIFAH', 'ASISTEN'),
(7, 'AISY PROGRAMMER.png', 'AISY', 'PROGRAMMER'),
(8, 'ALNA ASISTEN.png', 'ALNA', 'ASISTEN'),
(9, 'ATIKAH ASISTEN.png', 'ATIKAH', 'ASISTEN'),
(10, 'BAYU PROGRAMMER.png', 'BAYU', 'PROGRAMMER'),
(11, 'BUNGA ASISTEN.png', 'BUNGA', 'ASISTEN'),
(12, 'CHIKA ASISTEN.png', 'CHIKA', 'ASISTEN'),
(13, 'DANUR PROGRAMMER.png', 'DANUR', 'PROGRAMMER'),
(14, 'DIES ASISTEN.png', 'DIES', 'ASISTEN'),
(15, 'DILA A ASISTEN.png', 'DILA A', 'ASISTEN'),
(16, 'DIMAS PROGRAMMER.png', 'DIMAS', 'PROGRAMMER'),
(17, 'DINDA J ASISTEN.png', 'DINDA J', 'ASISTEN'),
(18, 'FANNY ASISTEN.png', 'FANNY', 'ASISTEN'),
(19, 'FARHAN A PROGRAMMER.png', 'FARHAN A', 'PROGRAMMER'),
(20, 'FIRSTIANNISA PROGRAMMER.png', 'FIRSTIANNISA', 'PROGRAMMER'),
(21, 'GEBY ASISTEN.png', 'GEBY', 'ASISTEN'),
(22, 'HARLI PROGRAMMER.png', 'HARLI', 'PROGRAMMER'),
(23, 'HASAN ASISTEN.png', 'HASAN', 'ASISTEN'),
(24, 'IMAM PROGRAMMER.png', 'IMAM', 'PROGRAMMER'),
(25, 'IVAN ASISTEN.png', 'IVAN', 'ASISTEN'),
(26, 'JODI PROGRAMMER.png', 'JODI', 'PROGRAMMER'),
(27, 'LUKMAN ASISTEN.png', 'LUKMAN', 'ASISTEN'),
(28, 'M RIZKI ASISTEN.png', 'M RIZKI', 'ASISTEN'),
(29, 'MARETHA ASISTEN.png', 'MARETHA', 'ASISTEN'),
(30, 'NABILA Y ASISTEN.png', 'NABILA Y', 'ASISTEN'),
(31, 'NADILA ASISTEN.png', 'NADILA', 'ASISTEN'),
(32, 'NADILA S ASISTEN.png', 'NADILA S', 'ASISTEN'),
(33, 'NADYA M ASISTEN.png', 'NADYA M', 'ASISTEN'),
(34, 'NARWASTU ASISTEN.png', 'NARWASTU', 'ASISTEN'),
(35, 'NIA ASISTEN.png', 'NIA', 'ASISTEN'),
(36, 'PEBRIANA ASISTEN.png', 'PEBRIANA', 'ASISTEN'),
(37, 'PUJA ASISTEN.png', 'PUJA', 'ASISTEN'),
(38, 'PUTRI ASISTEN.png', 'PUTRI', 'ASISTEN'),
(39, 'PUTRI INDAH ASISTEN.png', 'PUTRI INDAH', 'ASISTEN'),
(40, 'PUTRI M ASISTEN.png', 'PUTRI M', 'ASISTEN'),
(41, 'RAKHA PROGRAMMER.png', 'RAKHA', 'PROGRAMMER'),
(42, 'REVI ASISTEN.png', 'REVI', 'ASISTEN'),
(43, 'RIEKE ASISTEN.png', 'RIEKE', 'ASISTEN'),
(44, 'RIO ASISTEN.png', 'RIO', 'ASISTEN'),
(45, 'RIZKA ASISTEN.png', 'RIZKA ', 'ASISTEN'),
(46, 'SANDRA LESTARI ASISTEN.png', 'SANDRA LESTARI', 'ASISTEN'),
(47, 'SANTI ASISTEN.png', 'SANTI', 'ASISTEN'),
(48, 'SILVIA ASISTEN.png', 'SILVIA', 'ASISTEN'),
(49, 'SRI NURINDAH PROGRAMMER.png', 'SRI NURINDAH', 'PROGRAMMER'),
(50, 'SYIFA H ASISTEN.png', 'SYIFA H', 'ASISTEN'),
(51, 'VIRRA ASISTEN.png', 'VIRRA', 'ASISTEN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manlan_nilaiprogrammer`
--

CREATE TABLE `manlan_nilaiprogrammer` (
  `id_nilaiprogrammer` int NOT NULL,
  `id_penilaian` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ketepatan` varchar(100) NOT NULL,
  `kecepatan` varchar(100) NOT NULL,
  `rekomendasi` enum('ya','tidak') NOT NULL,
  `nama_penilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `manlan_nilaiprogrammer`
--

INSERT INTO `manlan_nilaiprogrammer` (`id_nilaiprogrammer`, `id_penilaian`, `nama`, `email`, `ketepatan`, `kecepatan`, `rekomendasi`, `nama_penilai`) VALUES
(5, '6', 'calon programmer', 'calonprogrammer@manlan.com', '80', '60', 'ya', 'Rakha'),
(6, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', '70', '70', 'ya', 'Harli Fauzi Ramli'),
(7, '55', 'alif lintang lazuardi sutowo', 'cyberman742@gmail.com', '70', '70', 'ya', 'Harli Fauzi Ramli'),
(8, '76', 'Yudistiyanto Fauzi', 'zieedist23@gmail.com', '70', '70', 'tidak', 'Harli Fauzi Ramli'),
(9, '6', 'calon programmer', 'calonprogrammer@manlan.com', '80', '80', 'ya', 'Dimas'),
(10, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', '85', '85', 'ya', 'jodi'),
(11, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', '90', '80', 'ya', 'indah'),
(12, '55', 'alif lintang lazuardi sutowo', 'cyberman742@gmail.com', '85', '90', 'ya', 'jodi'),
(13, '76', 'Yudistiyanto Fauzi', 'zieedist23@gmail.com', '70', '76', 'tidak', 'jodi'),
(14, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', '90', '90', 'ya', 'jodi'),
(15, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', '85', '80', 'ya', 'Farhan Andika'),
(16, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', '90', '85', 'ya', 'Farhan Andika'),
(17, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', '85', '85', 'ya', 'Farhan Andika'),
(18, '58', 'dariwan', 'dariwan1607@gmail.com', '90', '85', 'ya', 'Farhan Andika'),
(19, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', '80', '75', 'tidak', 'Farhan Andika'),
(20, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', '85', '80', 'ya', 'Farhan Andika'),
(21, '58', 'dariwan', 'dariwan1607@gmail.com', '85', '85', 'ya', 'Bayu'),
(22, '87', 'Eva Novia Manik', 'evanovia.mnk@gmail.com', '78', '88', 'ya', 'Rifandi'),
(23, '91', 'Monica Audry', 'monicaaudry90@gmail.com', '82', '90', 'ya', 'Rifandi'),
(24, '92', 'Sylva Flowrends', 'flowrend39ssylva@gmail.com', '83', '92', 'ya', 'Rifandi'),
(25, '95', 'irfanudin', 'irfanudin513@gmail.com', '60', '70', 'tidak', 'Rifandi'),
(26, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', '77', '75', 'ya', 'Firstiannisa'),
(27, '95', 'irfanudin', 'irfanudin513@gmail.com', '70', '60', 'tidak', 'Firstiannisa'),
(28, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', '85', '90', 'ya', 'Firstiannisa'),
(29, '76', 'Yudistiyanto Fauzi', 'zieedist23@gmail.com', '70', '75', 'tidak', 'Firstiannisa'),
(30, '92', 'Sylva Flowrends', 'flowrend39ssylva@gmail.com', '90', '90', 'ya', 'Firstiannisa'),
(31, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', '85', '85', 'ya', 'danur'),
(32, '87', 'Eva Novia Manik', 'evanovia.mnk@gmail.com', '75', '83', 'ya', 'danur'),
(33, '91', 'Monica Audry', 'monicaaudry90@gmail.com', '83', '85', 'ya', 'danur'),
(34, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', '80', '80', 'ya', 'danur'),
(35, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', '90', '90', 'ya', 'Aisy'),
(36, '67', 'ravita nurul asmi', 'ravitanrl@gmail.com', '75', '75', 'tidak', 'Aisy'),
(37, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', '85', '80', 'tidak', 'Aisy'),
(38, '58', 'dariwan', 'dariwan1607@gmail.com', '85', '90', 'ya', 'Aisy'),
(39, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', '75', '70', 'tidak', 'Aisy'),
(40, '62', 'muhammad fajrin ar-ridwan', 'fajrinarridwan@gmail.com', '70', '65', 'tidak', 'Aisy'),
(41, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', '95', '90', 'ya', 'Aisy'),
(42, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', '70', '70', 'tidak', 'Aisy'),
(43, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', '80', '80', 'tidak', 'Bayu'),
(44, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', '80', '80', 'tidak', 'Bayu'),
(45, '67', 'ravita nurul asmi', 'ravitanrl@gmail.com', '75', '75', 'ya', 'indah'),
(46, '62', 'muhammad fajrin ar-ridwan', 'fajrinarridwan@gmail.com', '70', '70', 'tidak', 'indah'),
(47, '62', 'muhammad fajrin ar-ridwan', 'fajrinarridwan@gmail.com', '70', '70', 'tidak', 'indah'),
(48, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', '90', '90', 'ya', 'indah'),
(49, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', '90', '90', 'ya', 'indah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manlan_nilaistaff`
--

CREATE TABLE `manlan_nilaistaff` (
  `id_nilaistaff` int NOT NULL,
  `id_penilaian` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `penyampaian` int NOT NULL,
  `penguasaan` int NOT NULL,
  `pengetahuan` int NOT NULL,
  `kerapihan` int NOT NULL,
  `ketegasan` int NOT NULL,
  `komentar` text NOT NULL,
  `rekomendasi` enum('ya','tidak','') NOT NULL,
  `nama_penilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `manlan_nilaistaff`
--

INSERT INTO `manlan_nilaistaff` (`id_nilaistaff`, `id_penilaian`, `nama`, `email`, `penyampaian`, `penguasaan`, `pengetahuan`, `kerapihan`, `ketegasan`, `komentar`, `rekomendasi`, `nama_penilai`) VALUES
(12, '6', 'calon programmer', 'calonprogrammer@manlan.com', 50, 60, 60, 50, 60, 'Test Calon Programmer', 'tidak', 'Test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manlan_nilaitutor`
--

CREATE TABLE `manlan_nilaitutor` (
  `id_nilaitutor` int NOT NULL,
  `id_penilaian` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `penyampaian` int NOT NULL,
  `penguasaan` int NOT NULL,
  `pengetahuan` int NOT NULL,
  `kerapihan` int NOT NULL,
  `ketegasan` int NOT NULL,
  `rekomendasi` enum('','ya','tidak') NOT NULL,
  `nama_penilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `manlan_nilaitutor`
--

INSERT INTO `manlan_nilaitutor` (`id_nilaitutor`, `id_penilaian`, `nama`, `email`, `penyampaian`, `penguasaan`, `pengetahuan`, `kerapihan`, `ketegasan`, `rekomendasi`, `nama_penilai`) VALUES
(17, '6', 'calon programmer', 'calonprogrammer@manlan.com', 50, 60, 60, 50, 60, 'tidak', 'Dimas'),
(18, '6', 'calon programmer', 'calonprogrammer@manlan.com', 80, 80, 80, 80, 80, 'ya', 'Rakha'),
(19, '18', 'assyifa shafira ramadhini', 'assyifaramadhini@gmail.com', 79, 70, 78, 85, 80, 'ya', 'Hasanuddin'),
(20, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', 75, 75, 75, 90, 75, 'ya', 'jodi'),
(21, '50', 'winda putri koesmawarni', 'Windapk71@gmail.com', 75, 80, 80, 85, 70, 'tidak', 'wastu'),
(22, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', 80, 75, 75, 100, 80, 'ya', 'Maretha'),
(23, '20', 'caswati', 'caswatty123@gmail.com', 75, 50, 45, 67, 75, 'ya', 'revi'),
(24, '20', 'caswati', 'caswatty123@gmail.com', 81, 80, 79, 80, 75, 'ya', 'Hasanuddin'),
(25, '18', 'assyifa shafira ramadhini', 'assyifaramadhini@gmail.com', 80, 65, 50, 70, 78, 'ya', 'revi'),
(26, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', 75, 80, 80, 75, 80, 'ya', 'wastu'),
(27, '87', 'Eva Novia Manik', 'evanovia.mnk@gmail.com', 90, 90, 90, 100, 90, 'ya', 'Maretha'),
(28, '67', 'ravita nurul asmi', 'ravitanrl@gmail.com', 80, 80, 75, 80, 75, 'ya', 'danur'),
(29, '91', 'Monica Audry', 'monicaaudry90@gmail.com', 75, 75, 80, 85, 80, 'tidak', 'jodi'),
(30, '18', 'assyifa shafira ramadhini', 'assyifaramadhini@gmail.com', 80, 50, 60, 75, 60, 'ya', 'Putri Cahya'),
(31, '20', 'caswati', 'caswatty123@gmail.com', 90, 70, 70, 80, 40, 'ya', 'Putri Cahya'),
(32, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', 80, 80, 80, 85, 85, 'ya', 'danur'),
(33, '82', 'Ashia Inayati Mumtaz', 'ashiamtz219@gmail.com', 85, 85, 85, 100, 85, 'ya', 'Maretha'),
(34, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', 75, 80, 75, 85, 80, 'tidak', 'danur'),
(35, '19', 'bilah izzah assyifa sukmaya', 'bilahizzahassyifasukmaya@gmail.com', 85, 85, 85, 85, 85, 'ya', 'danur'),
(36, '83', 'Mochamad Rechan Ichsanul Kamil', 'muhamadreyhan598@gmail.com', 85, 80, 80, 100, 90, 'ya', 'Maretha'),
(37, '92', 'Sylva Flowrends', 'flowrend39ssylva@gmail.com', 80, 80, 80, 90, 75, 'ya', 'Maretha'),
(38, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', 70, 70, 70, 80, 80, 'ya', 'Harli Fauzi Ramli'),
(39, '55', 'alif lintang lazuardi sutowo', 'cyberman742@gmail.com', 70, 70, 70, 70, 70, 'ya', 'Harli Fauzi Ramli'),
(40, '76', 'Yudistiyanto Fauzi', 'zieedist23@gmail.com', 70, 70, 70, 70, 70, 'tidak', 'Harli Fauzi Ramli'),
(41, '17', 'ardian anjasmara', 'ardiananjasmara17@gmail.com', 80, 80, 80, 90, 80, 'ya', 'Harli Fauzi Ramli'),
(42, '75', 'Amar Yanuar Malik', 'amar.yanuar@gmail.com', 70, 80, 80, 70, 70, 'ya', 'Harli Fauzi Ramli'),
(43, '38', 'muhammad rezky pratama', 'mrezkypratama07@gmail.com', 70, 65, 70, 80, 65, 'tidak', 'Dimas'),
(44, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', 80, 80, 80, 80, 90, 'ya', 'Dimas'),
(45, '52', 'zulfani meilidia', 'fanymeilidia@gmail.com', 75, 75, 80, 75, 70, 'ya', 'Dimas'),
(46, '47', 'shinta agustiningsih', 'shintaagustiningsih@gmail.com', 70, 60, 60, 70, 60, 'tidak', 'Shinta'),
(47, '71', 'Nurul Hikmah Aryanti', 'nurularyanti9@gmail.com', 75, 75, 70, 80, 75, 'ya', 'Shinta'),
(48, '91', 'Monica Audry', 'monicaaudry90@gmail.com', 80, 80, 70, 100, 90, 'ya', 'Dinda juwikola'),
(49, '54', 'alfinasyah rifqi', 'alfinasyahr10@gmail.com', 70, 70, 75, 80, 65, 'ya', 'Shinta'),
(50, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', 80, 75, 80, 100, 70, 'ya', 'Dinda juwikola'),
(51, '47', 'shinta agustiningsih', 'shintaagustiningsih@gmail.com', 70, 75, 70, 70, 70, 'tidak', 'Alna Melati'),
(52, '71', 'Nurul Hikmah Aryanti', 'nurularyanti9@gmail.com', 80, 80, 80, 80, 85, 'ya', 'Alna Melati'),
(53, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', 70, 75, 75, 85, 85, 'ya', 'M. Rizki'),
(54, '54', 'alfinasyah rifqi', 'alfinasyahr10@gmail.com', 70, 75, 75, 80, 75, 'ya', 'Alna Melati'),
(55, '55', 'alif lintang lazuardi sutowo', 'cyberman742@gmail.com', 60, 60, 65, 70, 60, 'ya', 'M. Rizki'),
(56, '76', 'Yudistiyanto Fauzi', 'zieedist23@gmail.com', 40, 50, 50, 70, 45, 'tidak', 'M. Rizki'),
(57, '17', 'ardian anjasmara', 'ardiananjasmara17@gmail.com', 75, 75, 85, 90, 75, 'ya', 'M. Rizki'),
(58, '75', 'Amar Yanuar Malik', 'amar.yanuar@gmail.com', 60, 60, 65, 75, 60, 'ya', 'M. Rizki'),
(59, '67', 'ravita nurul asmi', 'ravitanrl@gmail.com', 85, 90, 90, 100, 80, 'ya', 'Dies'),
(60, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', 85, 95, 95, 100, 90, 'ya', 'Dies'),
(61, '30', 'livia namira azhara', 'livianamiraa@gmail.com', 80, 70, 65, 80, 78, 'ya', 'revi'),
(62, '16', 'amelia anggraini', 'ameliaanggraini113@gmail.com', 70, 70, 75, 80, 60, 'ya', 'Shinta'),
(63, '30', 'livia namira azhara', 'livianamiraa@gmail.com', 83, 81, 84, 82, 72, 'ya', 'Hasanuddin'),
(64, '23', 'fadia rakhmita nauli', 'fadiarakhmita31@gmail.com', 45, 50, 45, 80, 75, 'tidak', 'revi'),
(65, '96', 'Fi\'ina Dwijulianti', 'fiina.dwijulianti@gmail.com', 90, 80, 80, 90, 90, 'ya', 'Santi'),
(66, '23', 'fadia rakhmita nauli', 'fadiarakhmita31@gmail.com', 79, 70, 75, 80, 75, '', 'Hasanuddin'),
(67, '97', 'Anisya Nada Laili Hidayah', 'anisyanadalh196@gmail.com', 90, 80, 80, 90, 90, 'ya', 'Santi'),
(68, '50', 'winda putri koesmawarni', 'Windapk71@gmail.com', 82, 74, 78, 85, 70, 'tidak', 'Virra'),
(69, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', 75, 70, 70, 70, 80, 'tidak', 'Aisy'),
(70, '39', 'nida\'an khofiya', 'knidaan1@gmail.com', 75, 75, 70, 85, 80, 'ya', 'Aisy'),
(71, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', 75, 75, 75, 80, 80, 'tidak', 'Aisy'),
(72, '62', 'muhammad fajrin ar-ridwan', 'fajrinarridwan@gmail.com', 90, 90, 85, 85, 80, 'ya', 'Aisy'),
(73, '60', 'fitrianindya alifia syawali', 'nindya139@gmail.com', 80, 80, 80, 75, 85, 'tidak', 'Aisy'),
(74, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', 80, 70, 70, 80, 75, 'ya', 'rizka'),
(75, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', 85, 85, 75, 85, 90, 'ya', 'Aisy'),
(76, '43', 'rachel beauty ellen sari', 'rachelhutahaean8800@gmail.com', 75, 40, 40, 100, 60, 'tidak', 'Lukim'),
(77, '39', 'nida\'an khofiya', 'knidaan1@gmail.com', 80, 75, 75, 80, 75, 'ya', ''),
(78, '39', 'nida\'an khofiya', 'knidaan1@gmail.com', 80, 75, 75, 80, 75, 'ya', ''),
(79, '44', 'rahmawati', 'rahmawatisulastri42871@gmail.com', 70, 30, 30, 100, 60, '', 'Lukim'),
(80, '62', 'muhammad fajrin ar-ridwan', 'fajrinarridwan@gmail.com', 80, 75, 80, 80, 70, 'ya', 'rizka'),
(81, '35', 'miftahul jannah', 'Miftaahuljnnh26@gmail.com', 80, 80, 85, 100, 70, 'ya', 'Lukim'),
(82, '16', 'amelia anggraini', 'ameliaanggraini113@gmail.com', 75, 80, 70, 75, 65, 'ya', 'Alna Melati'),
(83, '60', 'fitrianindya alifia syawali', 'nindya139@gmail.com', 80, 80, 75, 75, 80, 'ya', 'rizka'),
(84, '41', 'nursila', 'nursila.sil@gmail.com', 90, 90, 90, 100, 95, 'ya', 'Lukim'),
(85, '94', 'Kiki Muliawati', 'kikimuliawati2000@gmail.com', 90, 80, 80, 90, 90, 'ya', 'Santi'),
(86, '58', 'dariwan', 'dariwan1607@gmail.com', 80, 90, 85, 80, 70, 'ya', 'Aisy'),
(87, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', 80, 80, 75, 70, 80, 'ya', 'rizka'),
(88, '32', 'maulid zhahirah atikah', 'Maulidzhahirah@gmail.com', 80, 85, 90, 85, 80, 'ya', 'Lukim'),
(89, '46', 'riyani puspita dewi', 'riyanipuspita12@gmail.com', 85, 85, 85, 90, 85, 'ya', 'Puja Anom Palufi'),
(90, '28', 'kusyaeri muzhaffar', 'kusyaerimzhfr@gmail.com', 75, 75, 75, 85, 75, 'tidak', 'danur'),
(91, '43', 'rachel beauty ellen sari', 'rachelhutahaean8800@gmail.com', 70, 75, 75, 80, 70, 'tidak', 'Atikah'),
(92, '14', 'alfina damaiyanti', 'alfinadamaiyanti17@gmail.com', 90, 90, 80, 90, 90, 'ya', 'syifa H'),
(93, '44', 'rahmawati', 'rahmawatisulastri42871@gmail.com', 75, 75, 70, 80, 75, 'tidak', 'Atikah'),
(94, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', 90, 90, 80, 90, 90, 'ya', 'Firstiannisa'),
(95, '13', 'alfiah nur hikmahwati', 'alfiahnhw19@gmail.com', 90, 90, 90, 90, 90, 'ya', 'syifa H'),
(96, '35', 'miftahul jannah', 'Miftaahuljnnh26@gmail.com', 90, 85, 85, 90, 90, 'ya', 'Atikah'),
(97, '46', 'riyani puspita dewi', 'riyanipuspita12@gmail.com', 90, 85, 85, 90, 75, 'ya', 'syifa H'),
(98, '48', 'silvira alivia syahnisa', 'silvirasyah98@gmail.com', 80, 80, 80, 60, 85, '', 'Puja Anom Palufi'),
(99, '48', 'silvira alivia syahnisa', 'silvirasyah98@gmail.com', 90, 85, 85, 90, 75, 'ya', 'syifa H'),
(100, '52', 'zulfani meilidia', 'fanymeilidia@gmail.com', 80, 80, 75, 90, 75, 'ya', 'Firstiannisa'),
(101, '38', 'muhammad rezky pratama', 'mrezkypratama07@gmail.com', 70, 80, 90, 90, 60, 'tidak', 'Firstiannisa'),
(102, '41', 'nursila', 'nursila.sil@gmail.com', 90, 90, 85, 90, 90, 'ya', 'Atikah'),
(103, '30', 'livia namira azhara', 'livianamiraa@gmail.com', 75, 80, 80, 100, 70, 'ya', 'Dies'),
(104, '14', 'alfina damaiyanti', 'alfinadamaiyanti17@gmail.com', 90, 85, 85, 90, 90, 'ya', 'Puja Anom Palufi'),
(105, '32', 'maulid zhahirah atikah', 'Maulidzhahirah@gmail.com', 90, 90, 90, 90, 85, 'ya', 'Atikah'),
(106, '13', 'alfiah nur hikmahwati', 'alfiahnhw19@gmail.com', 90, 90, 80, 90, 85, 'ya', 'Puja Anom Palufi'),
(107, '23', 'fadia rakhmita nauli', 'fadiarakhmita31@gmail.com', 50, 55, 55, 80, 60, 'tidak', 'Dies'),
(108, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', 85, 80, 80, 90, 95, 'ya', 'Nadila wijayanti'),
(109, '27', 'jihan naura fajrinna', 'jnaurafajrinna04@gmail.com', 50, 70, 70, 40, 30, 'tidak', 'Nabila Yuriati'),
(110, '14', 'alfina damaiyanti', 'alfinadamaiyanti17@gmail.com', 90, 90, 90, 90, 95, 'ya', 'Nadila wijayanti'),
(111, '49', 'wina tolinawati', 'winatolinawati@gmail.com', 60, 60, 60, 40, 50, 'tidak', 'Nabila Yuriati'),
(112, '28', 'kusyaeri muzhaffar', 'kusyaerimzhfr@gmail.com', 70, 60, 50, 40, 50, 'tidak', 'Nabila Yuriati'),
(113, '55', 'alif lintang lazuardi sutowo', 'cyberman742@gmail.com', 80, 80, 80, 85, 70, 'ya', 'Nadila wijayanti'),
(114, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', 80, 85, 70, 80, 80, 'tidak', 'Nadila'),
(115, '19', 'bilah izzah assyifa sukmaya', 'bilahizzahassyifasukmaya@gmail.com', 90, 88, 80, 88, 88, 'ya', 'Nadila'),
(116, '21', 'dinanto dinandhoyo', 'Dinantodinandhoyo10@gmail.com', 85, 80, 78, 80, 85, 'ya', 'Nadila'),
(117, '24', 'hana kamilia aryanto', 'hanakamilia2002@gmail.com', 88, 75, 70, 85, 75, 'tidak', 'Nadila'),
(118, '46', 'riyani puspita dewi', 'riyanipuspita12@gmail.com', 70, 80, 85, 90, 85, 'ya', 'nadila wijayanti'),
(119, '48', 'silvira alivia syahnisa', 'silvirasyah98@gmail.com', 85, 80, 85, 90, 85, 'ya', 'Nadila wijayanti'),
(120, '27', 'jihan naura fajrinna', 'jnaurafajrinna04@gmail.com', 55, 60, 65, 80, 50, 'tidak', 'Abdul Imron'),
(121, '49', 'wina tolinawati', 'winatolinawati@gmail.com', 55, 60, 65, 75, 50, 'tidak', 'Abdul Imron'),
(122, '38', 'muhammad rezky pratama', 'mrezkypratama07@gmail.com', 70, 75, 75, 85, 65, 'tidak', 'Geby'),
(123, '24', 'hana kamilia aryanto', 'hanakamilia2002@gmail.com', 70, 60, 65, 80, 40, 'ya', 'Abdul Imron'),
(124, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', 90, 85, 85, 90, 90, 'ya', 'Geby'),
(125, '27', 'jihan naura fajrinna', 'jnaurafajrinna04@gmail.com', 80, 80, 75, 85, 80, 'ya', 'Nadya Maresa'),
(126, '49', 'wina tolinawati', 'winatolinawati@gmail.com', 65, 50, 50, 75, 50, '', ''),
(127, '52', 'zulfani meilidia', 'fanymeilidia@gmail.com', 70, 75, 80, 85, 70, 'ya', 'Geby'),
(128, '24', 'hana kamilia aryanto', 'hanakamilia2002@gmail.com', 70, 60, 50, 80, 55, 'tidak', 'Nadya Maresa'),
(129, '21', 'dinanto dinandhoyo', 'Dinantodinandhoyo10@gmail.com', 60, 60, 70, 75, 70, 'tidak', 'Nadya Maresa'),
(130, '98', 'Dean Isabel Cavalera', 'deanisabel12@gmail.com', 50, 50, 50, 50, 50, 'tidak', 'Santi'),
(131, '28', 'kusyaeri muzhaffar', 'kusyaerimzhfr@gmail.com', 65, 60, 55, 90, 50, 'ya', 'Silvia'),
(132, '49', 'wina tolinawati', 'winatolinawati@gmail.com', 65, 50, 50, 75, 50, 'tidak', 'Nadya Maresa'),
(133, '88', 'Fathia Naila Salsabila', 'fathianailasalsabila@gmail.com', 80, 75, 75, 100, 70, 'ya', 'Dila Apriani'),
(134, '85', 'Syifa Nurul Ameliana', 'syifanameliana@gmail.com', 70, 70, 65, 50, 65, 'ya', 'Dila Apriani'),
(135, '86', 'Lutpiah Nur Azizah', 'lutfiahazh16@gmail.com', 80, 75, 75, 50, 70, 'ya', 'Dila Apriani'),
(136, '89', 'Lisa Julian Artati', 'lisajulianartati@gmail.com', 50, 50, 50, 50, 50, 'tidak', 'Dila Apriani'),
(137, '88', 'Fathia Naila Salsabila', 'fathianailasalsabila@gmail.com', 80, 75, 75, 100, 78, 'ya', 'Putri Indah Sari'),
(138, '89', 'Lisa Julian Artati', 'lisajulianartati@gmail.com', 50, 50, 50, 50, 50, 'tidak', 'Putri Indah Sari'),
(139, '86', 'Lutpiah Nur Azizah', 'lutfiahazh16@gmail.com', 87, 85, 75, 75, 78, 'ya', 'Putri Indah Sari'),
(140, '85', 'Syifa Nurul Ameliana', 'syifanameliana@gmail.com', 50, 60, 70, 50, 50, 'tidak', 'Putri Indah Sari'),
(141, '47', 'shinta agustiningsih', 'shintaagustiningsih@gmail.com', 70, 70, 70, 80, 40, 'tidak', 'Sandra'),
(142, '71', 'Nurul Hikmah Aryanti', 'nurularyanti9@gmail.com', 70, 70, 80, 80, 70, 'ya', 'Sandra'),
(143, '54', 'alfinasyah rifqi', 'alfinasyahr10@gmail.com', 75, 75, 75, 80, 40, 'tidak', 'Sandra'),
(144, '16', 'amelia anggraini', 'ameliaanggraini113@gmail.com', 50, 50, 50, 80, 40, 'tidak', 'Sandra'),
(145, '87', 'Eva Novia Manik', 'evanovia.mnk@gmail.com', 85, 82, 82, 85, 83, 'ya', 'Farhan Andika'),
(146, '92', 'Sylva Flowrends', 'flowrend39ssylva@gmail.com', 83, 82, 85, 82, 83, 'ya', 'Farhan Andika'),
(147, '82', 'Ashia Inayati Mumtaz', 'ashiamtz219@gmail.com', 83, 80, 75, 90, 85, 'ya', 'Farhan Andika'),
(148, '83', 'Mochamad Rechan Ichsanul Kamil', 'muhamadreyhan598@gmail.com', 90, 83, 87, 85, 85, 'ya', 'Farhan Andika'),
(149, '29', 'lintang kinanthi', 'lintangkinanthi09@gmail.com', 85, 80, 78, 80, 75, 'ya', 'Nadila'),
(150, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', 80, 70, 70, 70, 80, 'tidak', ''),
(151, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', 80, 70, 70, 65, 80, 'tidak', ''),
(152, '39', 'nida\'an khofiya', 'knidaan1@gmail.com', 75, 70, 70, 65, 70, 'tidak', 'Chikaa ananda'),
(153, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', 80, 70, 70, 65, 80, 'tidak', 'Chikaa ananda'),
(154, '37', 'mita adha fratiwi', 'mita.adha01@gmail.com', 80, 75, 75, 80, 75, 'tidak', 'Chikaa ananda'),
(155, '29', 'lintang kinanthi', 'lintangkinanthi09@gmail.com', 80, 70, 50, 80, 50, 'ya', 'Putri Cahya'),
(156, '67', 'ravita nurul asmi', 'ravitanrl@gmail.com', 80, 75, 85, 100, 90, 'ya', 'Bayu'),
(157, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', 80, 75, 90, 100, 90, 'ya', 'Bayu'),
(158, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', 70, 75, 80, 80, 80, 'tidak', 'Bayu'),
(159, '19', 'bilah izzah assyifa sukmaya', 'bilahizzahassyifasukmaya@gmail.com', 95, 85, 85, 85, 90, 'ya', 'Bayu'),
(160, '77', 'Dwina Safitri', 'dwinasafitri12@gmail.com', 85, 90, 80, 75, 90, 'ya', 'jodi'),
(161, '77', 'Dwina Safitri', 'dwinasafitri12@gmail.com', 85, 77, 80, 60, 60, 'ya', 'Putri M'),
(162, '91', 'Monica Audry', 'monicaaudry90@gmail.com', 80, 60, 80, 88, 75, 'tidak', 'Putri M'),
(163, '33', 'maulidia tiara noor', 'maulidiatiaranoor@gmail.com', 85, 85, 85, 75, 85, 'ya', 'wastu'),
(164, '95', 'irfanudin', 'irfanudin513@gmail.com', 70, 75, 70, 80, 70, 'tidak', 'jodi'),
(165, '50', 'winda putri koesmawarni', 'Windapk71@gmail.com', 70, 70, 80, 80, 70, 'tidak', 'Rio'),
(166, '33', 'maulidia tiara noor', 'maulidiatiaranoor@gmail.com', 80, 85, 85, 80, 80, 'ya', 'Rio'),
(167, '95', 'irfanudin', 'irfanudin513@gmail.com', 77, 77, 77, 80, 60, 'tidak', 'Putri M'),
(168, '77', 'Dwina Safitri', 'dwinasafitri12@gmail.com', 90, 80, 85, 70, 90, 'ya', 'Dinda juwikola'),
(169, '95', 'irfanudin', 'irfanudin513@gmail.com', 65, 60, 60, 80, 60, 'tidak', 'Dinda juwikola'),
(170, '33', 'maulidia tiara noor', 'maulidiatiaranoor@gmail.com', 82, 90, 80, 78, 84, 'ya', 'Virra'),
(171, '94', 'Kiki Muliawati', 'kikimuliawati2000@gmail.com', 90, 85, 90, 90, 85, 'ya', 'Pebriana'),
(172, '96', 'Fi\'ina Dwijulianti', 'fiina.dwijulianti@gmail.com', 90, 85, 90, 90, 85, 'ya', 'Pebriana'),
(173, '97', 'Anisya Nada Laili Hidayah', 'anisyanadalh196@gmail.com', 85, 90, 85, 90, 90, 'ya', 'Pebriana'),
(174, '98', 'Dean Isabel Cavalera', 'deanisabel12@gmail.com', 75, 70, 70, 70, 60, 'tidak', 'Pebriana'),
(175, '58', 'dariwan', 'dariwan1607@gmail.com', 84, 92, 87, 79, 70, 'ya', 'Rifandi'),
(176, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', 70, 74, 79, 80, 70, 'tidak', 'Rifandi'),
(177, '41', 'nursila', 'nursila.sil@gmail.com', 93, 96, 92, 100, 95, 'ya', 'Rifandi'),
(178, '32', 'maulid zhahirah atikah', 'Maulidzhahirah@gmail.com', 92, 94, 92, 90, 95, 'ya', 'Rifandi'),
(179, '87', 'Eva Novia Manik', 'evanovia.mnk@gmail.com', 85, 90, 85, 90, 90, 'ya', 'Ivan Chairunas'),
(180, '92', 'Sylva Flowrends', 'flowrend39ssylva@gmail.com', 70, 80, 85, 90, 85, 'ya', 'Ivan Chairunas'),
(181, '82', 'Ashia Inayati Mumtaz', 'ashiamtz219@gmail.com', 65, 70, 70, 90, 80, 'ya', 'Ivan Chairunas'),
(182, '83', 'Mochamad Rechan Ichsanul Kamil', 'muhamadreyhan598@gmail.com', 85, 70, 75, 90, 75, 'ya', 'Ivan Chairunas'),
(183, '94', 'Kiki Muliawati', 'kikimuliawati2000@gmail.com', 90, 85, 85, 90, 90, 'ya', 'indah'),
(184, '96', 'Fi\'ina Dwijulianti', 'fiina.dwijulianti@gmail.com', 90, 85, 90, 90, 90, 'ya', 'indah'),
(185, '97', 'Anisya Nada Laili Hidayah', 'anisyanadalh196@gmail.com', 85, 80, 85, 90, 90, 'ya', 'indah'),
(186, '98', 'Dean Isabel Cavalera', 'deanisabel12@gmail.com', 60, 50, 60, 75, 50, 'tidak', 'indah'),
(187, '29', 'lintang kinanthi', 'lintangkinanthi09@gmail.com', 85, 80, 65, 70, 70, 'ya', 'Silvia'),
(188, '85', 'Syifa Nurul Ameliana', 'syifanameliana@gmail.com', 75, 70, 80, 70, 65, 'tidak', 'Fanny Elvarina'),
(189, '86', 'Lutpiah Nur Azizah', 'lutfiahazh16@gmail.com', 80, 80, 80, 70, 75, 'ya', 'Fanny Elvarina'),
(190, '88', 'Fathia Naila Salsabila', 'fathianailasalsabila@gmail.com', 80, 80, 80, 70, 70, 'ya', 'Fanny Elvarina'),
(191, '89', 'Lisa Julian Artati', 'lisajulianartati@gmail.com', 70, 70, 60, 60, 75, 'tidak', 'Fanny Elvarina'),
(192, '58', 'dariwan', 'dariwan1607@gmail.com', 65, 70, 85, 90, 70, '', 'Afifah'),
(193, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', 75, 70, 70, 85, 60, 'tidak', 'Afifah'),
(194, '37', 'mita adha fratiwi', 'mita.adha01@gmail.com', 60, 65, 65, 80, 65, 'tidak', 'Afifah'),
(195, '35', 'miftahul jannah', 'Miftaahuljnnh26@gmail.com', 80, 85, 75, 85, 85, 'ya', 'Nia Juita'),
(196, '37', 'mita adha fratiwi', 'mita.adha01@gmail.com', 75, 75, 70, 85, 80, 'tidak', 'Nia Juita'),
(197, '43', 'rachel beauty ellen sari', 'rachelhutahaean8800@gmail.com', 80, 75, 77, 85, 75, 'tidak', 'Nia Juita'),
(198, '44', 'rahmawati', 'rahmawatisulastri42871@gmail.com', 80, 75, 80, 85, 85, 'ya', 'Nia Juita'),
(199, '21', 'dinanto dinandhoyo', 'Dinantodinandhoyo10@gmail.com', 60, 65, 60, 50, 50, 'tidak', 'Abdul Imron');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manlan_nilaiujian`
--

CREATE TABLE `manlan_nilaiujian` (
  `id_nilaiujian` int NOT NULL,
  `id_penilaian` int NOT NULL,
  `nilai_ujian` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `manlan_nilaiujian`
--

INSERT INTO `manlan_nilaiujian` (`id_nilaiujian`, `id_penilaian`, `nilai_ujian`) VALUES
(3, 6, 0),
(4, 78, 39),
(5, 53, 54),
(6, 13, 48),
(7, 14, 36),
(8, 54, 65),
(9, 55, 63),
(10, 15, 58),
(11, 56, 35),
(12, 75, 24),
(13, 16, 39),
(14, 97, 35),
(15, 17, 46),
(16, 82, 63),
(17, 79, 44),
(18, 18, 55),
(19, 90, 0),
(20, 57, 0),
(21, 19, 99),
(22, 5, 104),
(23, 20, 45),
(24, 58, 60),
(25, 98, 30),
(26, 21, 33),
(27, 77, 52),
(28, 22, 52),
(29, 87, 54),
(30, 23, 41),
(31, 88, 30),
(32, 59, 50),
(33, 96, 46),
(34, 60, 47),
(35, 24, 31),
(36, 25, 61),
(37, 80, 0),
(38, 26, 0),
(39, 95, 47),
(40, 27, 96),
(41, 94, 44),
(42, 28, 30),
(43, 29, 42),
(44, 89, 21),
(45, 30, 31),
(46, 86, 82),
(47, 31, 25),
(48, 32, 57),
(49, 33, 50),
(50, 34, 0),
(51, 35, 51),
(52, 36, 48),
(53, 37, 39),
(54, 83, 45),
(55, 91, 36),
(56, 61, 0),
(57, 62, 51),
(58, 38, 57),
(59, 93, 0),
(60, 63, 0),
(61, 64, 52),
(62, 65, 48),
(63, 39, 47),
(64, 84, 41),
(65, 40, 0),
(66, 66, 34),
(67, 41, 61),
(68, 71, 47),
(69, 42, 35),
(70, 43, 19),
(71, 81, 0),
(72, 44, 41),
(73, 45, 25),
(74, 67, 61),
(75, 68, 48),
(76, 69, 0),
(77, 70, 53),
(78, 46, 98),
(79, 47, 61),
(80, 48, 22),
(81, 85, 43),
(82, 92, 38),
(83, 49, 39),
(84, 50, 44),
(85, 51, 47),
(86, 76, 48),
(87, 52, 31);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manlan_nilaiwawancara`
--

CREATE TABLE `manlan_nilaiwawancara` (
  `id_nilaiwawancara` int NOT NULL,
  `id_penilaian` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `rekomendasi` enum('ya','tidak') NOT NULL,
  `nama_penilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `manlan_nilaiwawancara`
--

INSERT INTO `manlan_nilaiwawancara` (`id_nilaiwawancara`, `id_penilaian`, `nama`, `email`, `komentar`, `rekomendasi`, `nama_penilai`) VALUES
(8, '6', 'calon programmer', 'calonprogrammer@manlan.com', 'Test Calon Programmer', 'tidak', 'Dimas'),
(9, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', 'GUGUP\r\nKesibukan: kuliah & remote internship sampai april\r\nKelemahan: masih dasar dalam hal jaringan,desktop\r\nBelum pernah daftar lab lain dan pengen daftar karena manlan membutuhkan programmer dalam pengembangan web\r\nBerapapun gaji akan diterima dan tidak mempermasalahkan\r\nDalam memilih kuis/jaga. tergantung kepentingan\r\nJika ada permasalahan sesama asisten, dibicarakan dahulu agar proses kerja tidak terhambat\r\n', 'ya', 'Silvia'),
(10, '14', 'alfina damaiyanti', 'alfinadamaiyanti17@gmail.com', 'komunikasinya lancar, ga grogi, menyikapi kelemahannya sendiri dengan baik, pengetahuan tentang lab manlan sangat sangat baik, orangnya tegas, tapi dia bakal memilih perkuliahan terlebih dahulu jika urgent', 'ya', 'sandra'),
(11, '13', 'alfiah nur hikmahwati', 'alfiahnhw19@gmail.com', 'memiliki ketertarikan di bidang pendidikan, dia menjadi salah satu pendiri organisasi di desanya namun tetap fokus sama kegiatan perkuliahan, keliatannya pinter sih orangnya, ingin masuk lab ini untuk menambah relasi, perkiraan gaji 400-500, orangnya tegas, bakal melihat skala prioritas ketika dia berada di beberapa organisasi', 'ya', 'sandra'),
(12, '19', 'bilah izzah assyifa sukmaya', 'bilahizzahassyifasukmaya@gmail.com', '- LANCAR NGOMONG.\r\n- Kesibukan: kuliah dan pernah organisasi FKK.\r\n- Kelebihan: mempelajari hal baru.\r\n- Kekurangan: AMBIS dan EGOIS.\r\n- Pertama kali daftar lab dan pengen daftar manlan doang.\r\n- Gamasalah soal gaji.\r\n- Lebih memilih quiz daripada jaga.', 'ya', 'Silvia'),
(13, '24', 'hana kamilia aryanto', 'hanakamilia2002@gmail.com', '- GATAU ORANGNYA GIMANA(???).\r\n- Kelebihan: bertanggung jawab dengan tugas yang diberikan dan tepat waktu\r\n- Kekurangan: belum baik dalam manage waktu.\r\n- BEM FE (fungsional) dan anggota fosil.\r\n- Daftar lab karena disuruh mamah-_-\r\n- Dalam memilih (bem/aslab), akan dilihat dulu kegiatan yang lebih penting yang mana.\r\n- Cara mengatasi masalah sesama asisten, deketin lalu intropeksi diri.', 'ya', 'Silvia'),
(14, '54', 'alfinasyah rifqi', 'alfinasyahr10@gmail.com', 'kekurangannya males solusinya selalu mencari hal yang membuat semangatnya bangkit, suka belajar, suka ngoding, pernah ikut organisasi di SMK, pernah ada pengalaman nutor orang lain, ingin masuk ke lab ini untuk merasakan hal itu kembali, bersedia melakukan tugas dan kewajiban, orangnya jujur, ga mengharapkan gaji dan estimasi gaji di bawah 500k', 'ya', 'sandra'),
(15, '49', 'wina tolinawati', 'winatolinawati@gmail.com', '- TEXT BOOK BANGET\r\n- Kesibukan: kuliah\r\n- Kelebihan: jujur dan bertanggung jawab\r\n- Kekurangan: overthinking dan pemalu\r\n- Daftar manlan ingin menambah relasi dan kegiatan baru\r\n- Gamasalah soal gaji\r\n- Jika ada permasalah sesama asisten, diselesaikan personal', 'ya', 'Silvia'),
(16, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', 'tingkat 4, melihat gaji sebagai poin plus, baru menyadari pentingnya organisasi, kalau bentrok bakal cari back-up an, pernah magang', 'tidak', 'sandra'),
(17, '23', 'fadia rakhmita nauli', 'fadiarakhmita31@gmail.com', '- PERFEKSIONIS\r\n- Kesibukan: kuliah\r\n- Loyalitas & komitmen: 95%\r\n- Lebih memilih lab dibanding quiz\r\n- Range gaji: 200k-300k\r\n- 85% dalam menerima tekanan\r\n- Mengatasi permasalahan sesama asisten, diomongin baik-baik', 'ya', 'Silvia'),
(18, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', 'komunikasinya baik, kekurarngannya memanage waktu tapi selama ini mencoba melatih untuk memperbaiki  hal itu, bisa kerja di bawah tekanan, orangnya tegas, pernah magang di kapanlagi.com dan menjadi pemagang termuda pertama, memilih lab ini karna ingin keluar dari zona nyaman, skala prioritas diambil dari yang paling urgent, ga tertarik dengan kampus merdeka karna lebih suka cari sendiri linknya', 'ya', 'sandra'),
(19, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', '- REKOMEN BANGET\r\n- Kesibukan: gambar2, animasi, kuliah, UKM GSC\r\n- Daftar lab manlan karena suka hitung-hitungan\r\n- Gamasalah soal gaji\r\n- Daftar oprec karena ingin melatih ilmu coding, public speaking, dan menambah pertemanan\r\n- Komitmen & Loyalitas: 100%\r\n- Jika ada permasalahan sesama asisten, diomongin baik-baik', 'ya', 'Silvia'),
(20, '27', 'jihan naura fajrinna', 'jnaurafajrinna04@gmail.com', '- GALAK BANGET.\r\n- Kesibukan: kuliah.\r\n- Motivasi daftar oprec untuk menambah wawasan.\r\n- Perkiraan gaji: 5k-10k per jam dan tidak masalah jika tidak digaji.\r\n- Siap menerima resiko apapun.\r\n- Kelebihan: baik dalam mengatur waktu.\r\n- Kekurangan: sering miss dalam mengatur waktu(???)', 'tidak', 'Silvia'),
(21, '48', 'silvira alivia syahnisa', 'silvirasyah98@gmail.com', 'komunikasinya baik, humble, bisa bekerja sama, dan suka mencari hal-hal / informasi baru, overthinking sama pikiran orang lain, selama ini solusinya yaitu dipendem dan mencoba melupakan, agar tidak mempengaruhi perkuliahan dan pekerjaan, pernah ikut project film, bersedia untuk mengajar selain di kampus depok, berkomitmen dan bertanggung jawab, sedikit over percaya diri', 'ya', 'sandra'),
(22, '18', 'assyifa shafira ramadhini', 'assyifaramadhini@gmail.com', '- Kesibukan: kuliah.\r\n- Belum tau jika aslab digaji,dll.\r\n- Priotitas: 50% lab, 50% kuliah.\r\n- Kontribusi terbaik: optimis untuk menjalankan tugas.\r\n- Jika jadwal jaga bentrok dengan quiz, cari backup saat jaga praktikum.\r\n- Mengatasi permasalan sesama asisten: didiskusikan.', 'ya', 'Silvia'),
(23, '71', 'Nurul Hikmah Aryanti', 'nurularyanti9@gmail.com', 'pernah ikut osis, padus, karang taruna, milih lab ini karna seleksinya mudah :) ingin menambah relasi, berkomitmen dengan tugas, memilih skla prioritas yang paling urgent, estimasi gaji 200k,tujuan masuk sini bukan untuk gaji namun menambah pengalaman, orangnya tegas, komunikasinya kurang baik', 'ya', 'sandra'),
(24, '67', 'ravita nurul asmi', 'ravitanrl@gmail.com', '- PERFEKSIONIS.\r\n- Kesibukan: kuliah dan kursus online.\r\n- Komitmen dan loyalitas: 100%\r\n- Kontribusi terbaik: meningkatkan web.\r\n- Perkiraan gaji: 400k\r\n- Gamasalah jika tidak digaji.\r\n- Menyelesaikan masalah dengan sesama asisten dengan kepala dingin dan intropeksi diri.', 'ya', 'Silvia'),
(25, '20', 'caswati', 'caswatty123@gmail.com', '- KETAWA MULU SETIAP DITANYA(???).\r\n- APA2 GATAU JAWABANNYA(???).\r\n- Kesibukan: kuliah.\r\n- Kelebihan: cukup berusaha.\r\n- Kekurangan: kurang pede, kurang komunikasi, yagitudechhh(???).\r\n- Gapunya hobi.\r\n- First time daftar lab dan pengen daftar karena kepo apa itu oprec lab kaya gimana2(???)\r\n- Loyalitas dan komitmen: 99%\r\n- Jika ada permasalahan dengan sesama asisten, lebih ke intropeksi diri.', 'tidak', 'Silvia'),
(26, '47', 'shinta agustiningsih', 'shintaagustiningsih@gmail.com', 'milih lab ini karna seru dan penasaran sama lab ini, dan penasaran dengan ilmu perbankan, belum tau tentang lab manlan, dapat menghadapi tekanan dengan baik, realistis anaknya, bertanggung jawab, komunikasinya baik, memilih kuis dibanding lab (pengungkapan awal), ga terpaku dengan gaji karna ingin mencari [engalaman, profesional', 'ya', 'sandra'),
(27, '76', 'Yudistiyanto Fauzi', 'zieedist23@gmail.com', 'gamudah menghadapai tekanan makanya ingin masuk ke lab ini untuk menghilangkan rasa itu, belajar dari kekurangannya, tertantang dengan hal baru, memilih lab ini karna baru berani melangkah, memilih kuliah dulu, menganggap gaji adalah bonus, profesional, keliatannya anak baik', 'ya', 'sandra'),
(28, '21', 'dinanto dinandhoyo', 'Dinantodinandhoyo10@gmail.com', '- TEXT BOOK.\r\n- INTROVERT.\r\n- Kesibukan: kuliah.\r\n- Kelebihan: bekerja sama dengan tim, dan bersosialisasi dengan baik.\r\n- Kekurangan: malu saat pertama kali bertemu.\r\n- Daftar oprec untuk mencari pengalaman dan disarankan kakak.\r\n- Perkiraan gaji: 300k-500k dan tidak mempermasalahkan gaji.\r\n- Komitmen dan loyalitas: 70%\r\n- Jaga/quiz, lebih memilih quiz.\r\n- Mengatasi permasalahan dengan sesama asisten dengan mengkomunikasikannya.\r\n', 'ya', 'Silvia'),
(29, '38', 'muhammad rezky pratama', 'mrezkypratama07@gmail.com', 'memaksa untuk keterima, selalu bilang sudah melakukan dengan baik dan bekerja keras karna itu ingin di lolos kan, komunikasinya kurang baik', 'tidak', 'sandra'),
(30, '29', 'lintang kinanthi', 'lintangkinanthi09@gmail.com', '- Kesibukan: kuliah dan jualan online.\r\n- Kelebihan: sering mencatat.\r\n- Kekurangan: terlalu fokus mengerjakan sesuatu jadi lupa hp.\r\n- Komitmen & Loyalitas: 100%\r\n- Kontribusi terbaik: berusaha menjadi asisten yang baik.\r\n- Jika bentrok jaga dan quiz, akan dilakukan berbarengan.\r\n- Perkiraan gaji: 300k.\r\n- Tidak masalah jika tidak sesuai ekspektasi.\r\n- Siap bekerja dibawah tekanan.\r\n- Jika ada permasalahan sesama asisten, langsung ditanya dan selesaikan. ', 'ya', 'Silvia'),
(31, '30', 'livia namira azhara', 'livianamiraa@gmail.com', '- Kesibukan: kuliah.\r\n- Kelebihan: bertanggung jawab, berkomitmen, bekerja sama dalam tim dan individu.\r\n- Kekurangan: kurang percaya diri, kurang pengalaman makanya daftar aslab dan magang (experience as CS).\r\n- Daftar oprec untuk melatih public speaking.\r\n- Jika jaga bentrok dengan quiz, minta barter.\r\n- Komitmen dan Loyalitas: 95%.\r\n- Gapapa gaji tidak sesuai ekspektasi.\r\n- Jika ada permasalahan dengan asisten, minta pendapat yang lain.', 'ya', 'Silvia'),
(32, '75', 'Amar Yanuar Malik', 'amar.yanuar@gmail.com', 'lama jawab kelebihan, aktif organisasi, lebih memilih kuliah dibanding lab, mencari pengalaman baru, orangnya kaku kaya susah diajak kerja sama, melihat masalah dengan baik, belum bersedia ditempatkan selain di kampus depok, komitmen 50% karna kuliah dan lab harus seimbang. masalah gaji jawab lama, bakal berusha mementingkan lab, pengalaman di organisasi dalam hal hubungan masyarakat, ingin mencari kegiatan baru, bakal milih kampus merdeka jika sudah mengikuti kampus merdeka', 'tidak', 'sandra'),
(33, '28', 'kusyaeri muzhaffar', 'kusyaerimzhfr@gmail.com', '- Kesibukan: kuliah.\r\n- Kelebihan: meninggalkan tongkrongan demi tugas dilab.\r\n- Kekurangan: kurang public speaking.\r\n- Komitmen dan Loyalitas: 90%.\r\n- Jika jaga bentrok dengan quiz, lebih milih jaga.\r\n- Jika ada permasalahan sesama asisten, mencari jalan tengah.\r\n- Daftar oprec untuk menambah pengalaman dan penghasilan.\r\n- Tau jika aslab digaji dan gamau kalau tidak digaji.\r\n- Jika ada praktikan yang buat marah/baper dengan mengurangi nilainya.', 'ya', 'Silvia'),
(34, '55', 'alif lintang lazuardi sutowo', 'cyberman742@gmail.com', 'kelebihan cepat tanggap, kekurangannya malas solusinya mencari hal yang membuatnya termotivasi, skala prioritas kuliah, lab, organisasi, skala prioritas 90an, percaya diri, cukup dalam hal pemprograman, prinsionya netral tidak memihak apapun, menajaga komitmen jika sudah keterima di lab ini, profesional, cara komunikasinya baik', 'ya', 'sandra'),
(35, '52', 'zulfani meilidia', 'fanymeilidia@gmail.com', 'kekurangannya telat solusinya mengatur alarm agar tepat waktu, belum ikut organisasi, percaya dirri, ingin menambah relasi dan pengalaman baru, komitmen 85% karna beum tau sepenuhnya tentang lab ini, mau berkontribusi, menambah wawasan, profesional, kurang semangat berbicaranya', 'ya', 'sandra'),
(36, '17', 'ardian anjasmara', 'ardiananjasmara17@gmail.com', 'auranya positif, komunikasinya baik, loyalitas 95%, kekurangannya pelupa solusinya di list tiap kegiatan yang akan dilakukan biar tidak lupa, suka mengekspor hal baru, berprestasi, pokonya bagus bangetm sayangnya tingkat 4 huhu, tapi keliatan banget diamau masuk ke lab ini dan bakal berkontribusi dengan baik, ah sedi', 'ya', 'sandra'),
(37, '16', 'amelia anggraini', 'ameliaanggraini113@gmail.com', 'kekurangannya public speaking, solusinya dengan berorganisasi, belum ikut organisasi apapun, hal yang membanggakan yaitu bisa membanggakan orang tua, ingin belajar banyak hal di lab ini, ingin memperluas wawasan, ingin meningkatkan solidaritas, bersedia jaga selain di kampus depok, loyalitas 100%, bertanggung jawab dan jujur, sayangnya tingkat 4', 'ya', 'sandra'),
(38, '46', 'riyani puspita dewi', 'riyanipuspita12@gmail.com', 'ingin mengembangkan skill diri sendiri, kekurangannya pemalu solusinya selalu berusaha melatih dan bersosialisasi, menyadari pentingnya berorganisasi, ingin berkontribusi di lab ini, memiliki ketertarikan di dunia perbankan, wawasan tentang lab manlan lumayan, ada niatan ikut kampus merdeka, gaji mengikuti standart di lab ini, bertanggung jawab, ingin menambah pengetahuan, bakal memilih skala prioritas yang lebih urgent', 'ya', 'sandra'),
(39, '6', 'calon programmer', 'calonprogrammer@manlan.com', 'Test', 'tidak', 'Indah'),
(40, '70', 'reza putra febriyan', 'rezafebriyan00@gmail.com', 'tingkat 4, tidak mengikuti organisasi di perkuliahan, daftar lab untuk pertama kali, wawancaranya gugup tapi alesannya bagus. Pernah magang, kekurangannya masih beberapa yang dipelajari mau masuk lab supaya mendapat ilmu lebih banyak. ', 'ya', 'Nadila'),
(41, '19', 'bilah izzah assyifa sukmaya', 'bilahizzahassyifasukmaya@gmail.com', 'pernah ikut FKK BEM tapi galanjut karena kurang cocok, hobinya nulis, selalu menekankan kalo dirinya ambisius, kekurangannya egois. ngomongnya bagus lancar ', 'ya', 'Nadila'),
(42, '24', 'hana kamilia aryanto', 'hanakamilia2002@gmail.com', 'agak bingung dia niat apa nggak daftar lab karena ditanya kenapa daftar lab disuruh mama. Dia gabisa deskripsiin dirinya sendiri, anggota BEM tapi nilainya sempet turun gara gara BEM, cara ngomongnya tenang', 'ya', 'Nadila'),
(43, '49', 'wina tolinawati', 'winatolinawati@gmail.com', 'udah mempersiapkan kata kata sebelum wawancara jadi keliatan hasil searching google (bahkan dia tau tahun didirikannya lab :) ) kelebihan jujur, tanggungjawab, rajin kekurangan overthingking, kurang percaya diri, gapernah ikut organisasi. Kontribusi buat lab: memberikan wawasan dia kepada praktikan. sebenernya kuran rekomen tapi karena tingkat 3 masih bisa diperbaiki di training', 'ya', 'Nadila'),
(44, '23', 'fadia rakhmita nauli', 'fadiarakhmita31@gmail.com', 'tingkat 4, perfeksionis jadi selalu ingin yang terbaik dalam menyelesaikan pekerjaan, niat mau masuk lab karena sering tanya tanya via pc, hobi: baca artikel, memprioritaskan lab.', 'ya', 'Nadila'),
(45, '65', 'naufal abdullah hanif wibowo', 'naufalabdullah33@gmail.com', 'pernah ikut gdsc, tingkat 2 TI, suka gambar animasi, masuk lab karena ingin melatih skill, melatih public speaking, bersedia jadi tutor walaupun dia programmer dan memilih perbankan karena suka menghitung. 100% recommended', 'ya', 'Nadila'),
(46, '27', 'jihan naura fajrinna', 'jnaurafajrinna04@gmail.com', 'ngomongnya kurang jelas, kurang paham sama pertanyaan di wawancara, masih tingkat 2, kelebihan bisa mengatur waktu dengan baik tapi kekurangan suka lupa waktu, labil.', 'tidak', 'Nadila'),
(47, '18', 'assyifa shafira ramadhini', 'assyifaramadhini@gmail.com', 'tingkat 3, aktivitas selama kuliah lagi coba coba daftar intern jadi nyoba daftar lab, hobi baca novel, anaknya optimis, skala 50:50 untuk lab dan kuliah. kesibukannya hanya kuliah. kalo bentrok antara kuliah danlab lebih pilih kuliah dan minta backup temen', 'ya', 'Nadila'),
(48, '67', 'ravita nurul asmi', 'ravitanrl@gmail.com', 'kelebihan rajin, disiplin waktu, mau mempelajari hal hal baru, hobinya dengerin podcast, ikut kursus online, akan memberikan kontribusi ke lab sebesar 100% tapi lagi nunggu juga pengumuman final oprec lain. Katanya lab manlan ada di prioritas pertama ', 'ya', 'Nadila'),
(49, '20', 'caswati', 'caswatty123@gmail.com', 'D3, setiap ditanya ketawa doang gabisa deskripsiin diri sendiri, daftar lab karena pengen tau aja gimana gimananya, saat ini tinggal di luar kota dan belum pernah ke kampus, ditanya bersedia ditempatin di region lain dijawab tergantung kondisi, ga serius ', 'tidak', 'Nadila'),
(50, '21', 'dinanto dinandhoyo', 'Dinantodinandhoyo10@gmail.com', 'tingkat 2, gapernah ikut organisasi, daftar lab dapet info dari kakak, introvert katanya dan terbukti ditanya masih malu malu, perkiraan gaji 300k-500k, penampilan kurang rapi dan text book, tapi nyambung diajak ngomong. keliatannya pinter', 'ya', 'Nadila'),
(51, '29', 'lintang kinanthi', 'lintangkinanthi09@gmail.com', 'agak delay pas wawancara jadi kurang jelas, daftar lab karena ingin menambah pengalaman, kesibukannya jualan online jadi agaknya slowrespon, komunikasinya cukup bagus. memberikan loyalitas 100% untuk lab', 'ya', 'Nadila'),
(52, '30', 'livia namira azhara', 'livianamiraa@gmail.com', 'tingkat 4, pernah magang jadi customer service terbukti komunikasinya bagus, kurang tegas pas tutor, kelemahannya kurang percaya diri tidak masalah gaji tidak sesuai ekspektasi', 'ya', 'Nadila'),
(53, '28', 'kusyaeri muzhaffar', 'kusyaerimzhfr@gmail.com', 'agak sensitif ditanya gaji dan gaterima kalo ga digaji karena daftar lab selain menambah pengalaman juga menambah penghasilan (kayaknya tujuan utama dapat penghasilan) tingkat 2, disuruh coba jadi asisten atas rekomendasi kakanya yang kuliah dikampus sebelah. anak tongkrongan tapi akan memprioritaskan lab, terlihat pasrahan tapi bisa diandalkan ', 'ya', 'Nadila'),
(54, '33', 'maulidia tiara noor', 'maulidiatiaranoor@gmail.com', 'Bersedia memprioritaskan kegiatan lab, menganggap gaji sebagai bonus, cara bicara profesional', 'ya', 'Rio'),
(55, '41', 'nursila', 'nursila.sil@gmail.com', '- Mahasiswa studi D3 semester akhir.\r\n- Expected salary terlalu tinggi', 'tidak', 'Rio'),
(56, '58', 'dariwan', 'dariwan1607@gmail.com', '- Sedang mengikuti seleksi di lab lain\r\n- Tidak memiliki aktivitas produktif selain kuliah\r\n- Tidak siap jika praktikum secara tatap muka', 'tidak', 'Rio'),
(57, '50', 'winda putri koesmawarni', 'Windapk71@gmail.com', '- grogi, komunikasi kurang lancar\r\n- tidak ada aktivitas produktif selain kuliah', 'tidak', 'Rio'),
(58, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', '- bisa desain (photoshop)\r\n- mau belajar hardskill lain yang diperlukan\r\n- bersedia memprioritaskan urusan lab\r\n- masih tingkat 2', 'ya', 'Rio'),
(59, '39', 'nida\'an khofiya', 'knidaan1@gmail.com', '- Tidak ada aktivitas produktif selain kuliah\r\n- Pelupa, grogi, komunikasi kurang lancar\r\n- Beberapa jawaban bersifat personal dan singkat', 'tidak', 'Rio'),
(60, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', '- grogi, komunikasi kurang lancar\r\n- beberapa pertanyaan bersifat personal\r\n- tidak ada aktivitas produktif selain kuliah', 'tidak', 'Rio'),
(61, '43', 'rachel beauty ellen sari', 'rachelhutahaean8800@gmail.com', '-Tidak ada aktivitas produktif selain kuliah\r\n- Sudah tingkat 4', 'tidak', 'Rio'),
(62, '44', 'rahmawati', 'rahmawatisulastri42871@gmail.com', '- Gampang hilang fokus\r\n- Tidak ada kelebihan teknikal yang dimiliki (3)', 'tidak', 'Rio'),
(63, '35', 'miftahul jannah', 'Miftaahuljnnh26@gmail.com', '- bersedia memprioritaskan lab\r\n- komunikasi lancar', 'ya', 'Rio'),
(64, '37', 'mita adha fratiwi', 'mita.adha01@gmail.com', '- Kurang persiapan\r\n- Komunikasi kurang lancar\r\n- Tidak ada aktivitas produktif selain kuliah', 'tidak', 'Rio'),
(65, '32', 'maulid zhahirah atikah', 'Maulidzhahirah@gmail.com', 'Bersedia memprioritaskan lab, mau mengembangkan diri, komunikasi lancar', 'ya', 'Rio'),
(66, '62', 'muhammad fajrin ar-ridwan', 'fajrinarridwan@gmail.com', 'Kurang percaya diri, komunikasi terbata-bata, tidak ada motivasi masuk lab', 'tidak', 'Rio'),
(67, '60', 'fitrianindya alifia syawali', 'nindya139@gmail.com', '- Sedang mengikuti program studi independen kampus merdeka\r\n- Komunikasi lancar, jawaban on point\r\n- Bersedia memprioritaskan urusan lab', 'ya', 'Rio'),
(68, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', '- Sedang menjalani part time, namun jadwal fleksibel\r\n- Bersedia memprioritaskan urusan lab\r\n- Masih tingkat 2', 'ya', 'Rio'),
(69, '50', 'winda putri koesmawarni', 'Windapk71@gmail.com', 'Winda putri : tidak memikirkan gaji, ngomong nya lancar. Menjalaskan kekurangan kelebihan jelas. Tidak sedang magang. Region karawaci 3ea32. Berani bertanya gmn mekanisme praktikum online.', 'ya', 'Aisy'),
(70, '33', 'maulidia tiara noor', 'maulidiatiaranoor@gmail.com', 'Maulidia : yg lg di rs. Lg ikut relawan pajak dan ikutt kursus bahasa asing. Memprioritaskan lab karna tidak ada kegiatan lagi. Kata rio tutor nya bagus. Semangat bgt orangnya, mirip fanny wkwkw. Tidak masalah dengan ekspektasi gaji kecil karena lebih mencari pengalaman. Bagus cara ngomongnya.', 'ya', 'Aisy'),
(71, '42', 'putri ayu diah sarahwati', 'putriiiayu26@gmail.com', 'Putri ayu : pernah belajar desain grafis. Bisa photoshop. Hobi menggambar. Melihat prioritas dari masing2 lab atau organisasi. Tidak mementingkan gaji dan lebih mementingkan pengalaman. Tingkat 2. Bisa training malem kalo sekiranya bentrok', 'ya', 'Aisy'),
(72, '39', 'nida\'an khofiya', 'knidaan1@gmail.com', 'Nida\'an : karawaci. Tidak ada aktivitas diluar kuliah. Ingin menambah pengalaman. Kelebihan orangnya jujur,tepat waktu. Kekurangan pelupa dan ngomong belibet wkw. Skala prioritas utk aktivitas lab / organisasi. Tidak memperhitungkan gaji, lebih mementingkan pengalaman. Bisa komitmen training malam/sore jika bentrok kuliah.', 'ya', 'Aisy'),
(73, '58', 'dariwan', 'dariwan1607@gmail.com', 'Dariwan : tidak ikut organisasi lain. Skala prioritas utk organisasi tergantung. Jawabnya lama bgt wkwk. Tidak mempermasalahkan gaji lebih ke pengalaman. Masi di kampung gabisa offline. Ikut seleksi di lab lain, gatau lanjut apa ngga.', 'tidak', 'Aisy'),
(74, '59', 'febryan marcellino pradaffa', 'febryanmp7@gmail.com', 'Febryan marcelino : ingin mencari pengalaman. Kelebihan mampu bersosialisasi, suka belajar hal baru. Kekurangan pelupa. Pernah kuliah dlu tp keluar. Gatau klo aslab digaji, tdk terlalu mementingkan nominal, lebih mencari pengalaman. Bersedia training malem/sore. Bertanya jobdesk programmer. Kurang', 'tidak', 'Aisy'),
(75, '43', 'rachel beauty ellen sari', 'rachelhutahaean8800@gmail.com', 'Rachel beauty : belom ikut organisasi, fokus skripsi aja. Kekurangan blm berpengalaman di dunia kerja. Kelebihan bisa bekerjasama. Bisa desain di canva, klo kritik saran suka dapet max karna bagus. Bersedia ditempatkan di region lain. Harapan gaji tdk terlalu penting, lebih ke pengalaman. Bersedia training sore/malem klo bentrok kuliah. Lumayan tegas. Masi di kampung, tp bisa offline. Tp tingkat 4:\")', 'ya', 'Aisy'),
(76, '44', 'rahmawati', 'rahmawatisulastri42871@gmail.com', 'Rahmawati : tidak ikut organisasi lain. Suka berkebun mantap. Motivasi ikut lab ingin menambah pengalaman. Bersedia tugas diluar region. Ga masalah jika gaji tdk sesuai ekspektasi, lebih ke pengalaman. Bersedia jika training sore/malam klo bentrok kuliah minggu 1. Akan menyesuaikan jika situasi kerja tdk mendukung.', 'ya', 'Aisy'),
(77, '35', 'miftahul jannah', 'Miftaahuljnnh26@gmail.com', 'Miftahul j. : suka belajar hal baru. Ekspektasi gaji 300ribuan, gpp klo ga sesuai karna ingin mencari pengalaman. Bersedia training sore/malam kl bentrok sm jadwal kuliah m1. Udh punya pacar gais wkwkwk.', 'ya', 'Aisy'),
(78, '37', 'mita adha fratiwi', 'mita.adha01@gmail.com', 'Mita adha p. : ngomong nya ragu2. Tdk ikut organisasi lain. Kurang bgt deh kyknya no. Bersedia ditempatkan diluar region. Ekspektasi gaji ga terlalu penting, lebih ke pengalaman.', 'ya', 'Aisy'),
(79, '41', 'nursila', 'nursila.sil@gmail.com', 'Nursila : ngomong nya bagus keren bgt kyk penyiar radio. Suka menulis novel. Prioritas lab. Pernah magang di badan keuangan daerah indramayu, tentang pengurusan pajak2. bersedia ngajar di luar region. Ga bertujuan utk gaji, tp ekspektasi gaji 1jutaan wkwkk tp gapapa klo ga sesuai ekspektasi katanya. Tingkat 3 d3, jd udh semester akhir.', 'tidak', 'Aisy'),
(80, '32', 'maulid zhahirah atikah', 'Maulidzhahirah@gmail.com', 'Maulid zahirah : pernah ikut organisasi tp keluar karna ga nyaman dan ga dianggap. Bisa excel, canva, lg belajar edit video sm temen. Tdk masalah dgn gaji, lbh ke pengalaman. Bersedia ngajar diluar region. Bersedia training sore/malem.', 'ya', 'Aisy'),
(81, '62', 'muhammad fajrin ar-ridwan', 'fajrinarridwan@gmail.com', 'M. Fajrin : perkenalannya baca teks wkk. Masi minim pengalaman, berani mencoba hal baru. Searching pas ditanya motivasi wkkk. Ekspektasi gaji 400rb tp ga masalah klo kurang dr itu. Bersedia ngajar diluar region.', 'tidak', 'Aisy'),
(82, '60', 'fitrianindya alifia syawali', 'nindya139@gmail.com', 'Fitrianindya a. : ikut kampus merdeka tp prioritasin lab. Percaya diri, suka disuruh maju presentasi pas kuliah karna pd. Ekspektasi gaji per pertemuan 50rb, tp klo dibawah itu gpp karna nyari pengalaman. Bersedia training sore malem kl bentrok.', 'ya', 'Aisy'),
(83, '64', 'najwa salsabila aulia', 'salsabilanajwa2101@gmail.com', 'Najwa : lg kerja sampingan yg jadwal nya felksibel (shift fleksibel). Ga berekspektasi dgn gaji, lebih ke pangalaman. Bersedia jaga di luar region jika ga bentrok jadwal kuliah. Bersedia training sore/malem jika bentrok kuliah. Ekspektasi lingkungan kerja teamwork dan bekerja bersama2. Belajar editing, photoshop, canva, dll.', 'ya', 'Aisy'),
(84, '37', 'mita adha fratiwi', 'mita.adha01@gmail.com', 'Mita adha p. : ngomong nya ragu2. Tdk ikut organisasi lain. Kurang bgt deh kyknya no. Bersedia ditempatkan diluar region. Ekspektasi gaji ga terlalu penting, lebih ke pengalaman.', 'tidak', 'Aisy'),
(85, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', '-Orangnya pelupa tapi diatasi dengan notes\r\n-karang taruna RT, Osis 2 Tahun\r\n-Ikut lab untuk menambah wawasan, pengalaman\r\n-Tidak ikut magang/Kampus merdeka\r\n-Minimalis Person\r\nYes, Bisa dikembangkan', 'ya', 'jodi'),
(86, '87', 'Eva Novia Manik', 'evanovia.mnk@gmail.com', '-Suka dengan komputer/technology stuff\r\n-pernah ikut pelatihan dasar website\r\n-pelupa, diatasi dengan notes\r\n-Lebih suka website, tim frontend\r\n-Tau mana urgensi yang lebih di dahulukan\r\n-Orangnya penuh planning\r\n-DSC Gunadarma Member\r\n-Sedang mengikuti tes lab psikologi\r\n-Sudah tau background lab', 'ya', 'jodi'),
(87, '77', 'Dwina Safitri', 'dwinasafitri12@gmail.com', '-Komitmen, penuh semangat, beradaptasi\r\n-Sudang magang di akuntansi publik\r\n-Relawan Pajak\r\n-TEMANNYA NABILA YURIATI\r\n-Skala loyalitas 80\r\n-Lebih terima yang mana dulu lab\r\n', '', ''),
(88, '91', 'Monica Audry', 'monicaaudry90@gmail.com', '+Manajemen waktu, Teamwork\r\n-Pelupa + Moodswing\r\n-Himpunan TI (Divisi Notulen)\r\n-Tidak memikirkan gaji\r\n-Memilih lab yang dulu diterima\r\n\r\nRED NOTICE', 'tidak', 'jodi'),
(89, '82', 'Ashia Inayati Mumtaz', 'ashiamtz219@gmail.com', '-Relawan pajak 2022\r\n-Perfeksionis\r\n-Tanggung jawab dalam IPK\r\n-Skala loyalitas 100\r\n-Kuliah lebih utama\r\n-Ekspektasi gaji 1 juta\r\n-Pemalu pisan\r\n\r\nBISA DIKEMBANGKAN', 'ya', 'jodi'),
(90, '95', 'irfanudin', 'irfanudin513@gmail.com', 'RED NOTICE', 'tidak', 'jodi'),
(91, '83', 'Mochamad Rechan Ichsanul Kamil', 'muhamadreyhan598@gmail.com', '-Grogi on point\r\n-pelupa\r\n-Tidak menyepelakan sesuatu\r\n-Coma desain\r\n-Lagi sakit tapi tutornya bagus\r\n\r\nBISA DIKEMBANGKAN', 'ya', 'jodi'),
(92, '92', 'Sylva Flowrends', 'flowrend39ssylva@gmail.com', '-Aura Positif\r\n-DSC Gundar + Ikut Bootcamp\r\n-Tidak memikirkan Gaji\r\n-Friendly\r\n-Bisa mengupayakan yang terbaik\r\n\r\nRECOMMENDED', 'ya', 'jodi'),
(93, '85', 'Syifa Nurul Ameliana', 'syifanameliana@gmail.com', '-Ceroboh tapi mengorganisi dengan baik\r\n-List pekerjaan selanjutnya\r\n-Masuk lab untuk menambah wawasan\r\n-Pemikirannya luas\r\n-Pernah ngajar les rumahan\r\n-Tau tujuan utama \r\n-Sekretaris Kelas\r\n\r\nRECOMMENDED', 'ya', 'jodi'),
(94, '86', 'Lutpiah Nur Azizah', 'lutfiahazh16@gmail.com', '-Relawan Pajak\r\n-Well Speaking\r\n-Auranya positif\r\n-OGUN\r\n-Pede on point\r\n-Penari Asean Games\r\n-Termotivasi dari aslab yang pernah ngajar di kelasnya\r\n-Tau Kewajiban\r\n\r\nRECOMMENDED', 'ya', 'jodi'),
(95, '88', 'Fathia Naila Salsabila', 'fathianailasalsabila@gmail.com', '-Orangnya teliti\r\n-Pelupa tapi diatasi dengan notes\r\n-Coma Desain\r\n-Friendly\r\n-Well Speaking\r\n-Tau tanggung jawab\r\n-Tidak memikirkan gaji\r\n-Profesionalitas\r\n-Bertanggung jawab apa yang sudah dipilih\r\n\r\nRECOMMENDED', 'ya', 'jodi'),
(96, '89', 'Lisa Julian Artati', 'lisajulianartati@gmail.com', '-Anak bidikmisi\r\n-BPH humas cengkareng\r\n-Ambivert Person\r\n-Pelupa tpi bikin planning notes\r\n-Mencari Ilmu\r\n\r\nSTAFF CALL', 'tidak', 'jodi'),
(97, '94', 'Kiki Muliawati', 'kikimuliawati2000@gmail.com', '-Magang BPR\r\n-Pernah BEM\r\n-Ekonomi SYariah\r\n-Well speaking\r\n-Lot of experience\r\n-Melatih softskill yang utama\r\n-Skala 90-100 loyalias dan komitmen\r\n-Bertanggung jawab apa yang sudah dipilih\r\n-ekspektasi gaji 700-1000k\r\n\r\nRECOMMENDED', 'ya', 'jodi'),
(98, '96', 'Fi\'ina Dwijulianti', 'fiina.dwijulianti@gmail.com', '-Tingkat 3 \r\n-Relawan mengajar sekolah matahari\r\n-Pembawaannya tenang\r\n-Orangnya teliti\r\n-OSIS SMA\r\n-Penyiar radio lokal sekolah\r\n-Profesionalitas diutamakan\r\n\r\nRECOMMENDED', 'ya', 'jodi'),
(99, '97', 'Anisya Nada Laili Hidayah', 'anisyanadalh196@gmail.com', '-BEASISWA KIP\r\n-Forum Genre kota depok\r\n-Magang Copywriter\r\n-Well speaking\r\n-Project officer komunikasi desain kementrian pemberdayaan perempuan\r\n-A pottential person\r\n-Foccus o ndetail\r\n-Anak bidikmisi\r\n\r\nEKSPEKTASI GAJI 3-4 JUTA', 'ya', 'jodi'),
(100, '98', 'Dean Isabel Cavalera', 'deanisabel12@gmail.com', '-Organisasi camakara yang didirikan UI divisi event\r\n-Tidak memikirkan gaji\r\n-pembawaan tenang\r\n-Ekspektasi gaji <500\r\n\r\nSTAFF CALL', 'tidak', 'jodi'),
(101, '14', 'alfina damaiyanti', 'alfinadamaiyanti17@gmail.com', 'tingkat 3. bagus, bener2 cari info tentang lab manlan. gak ikut organisasi. motivasi: mengembangkan diri, memperluas wawasan, nambah relasi, meningkatkan kepercayaan diri. skala loyalitas 100%', 'ya', 'Firstiannisa'),
(102, '47', 'shinta agustiningsih', 'shintaagustiningsih@gmail.com', 'tingkat 2. bagus, kyknya punya self management yg baik. (+) gampang berinteraksi, cepat tanggap, tanggung jawab. (-) suka lupa -> pasang reminder/alarm. ikut fajrul islam, punya usaha bucket. alasan tertarik join manlan (perbankan) karena suka ngitung. skala loyalitas 86%', 'ya', 'Firstiannisa'),
(103, '76', 'Yudistiyanto Fauzi', 'zieedist23@gmail.com', 'tingkat 2. belum bisa menerima tekanan, tapi mau belajar. ingin terus belajar. motivasi/alasan daftar: nambah pengalaman, kerja di balik layar. gak ada aktivitas di luar kampus. skala loyalitas 70%, sisanya untuk keluarga', 'ya', 'Firstiannisa'),
(104, '38', 'muhammad rezky pratama', 'mrezkypratama07@gmail.com', 'tingkat 4. rapi sih keliatannya, pernah jadi pengurus fajrul islam. pernah jadi ketua PKM-KC, LIDM, gemastik tapi jawab pertanyaan gak nyambung parah', 'tidak', 'Firstiannisa'),
(105, '75', 'Amar Yanuar Malik', 'amar.yanuar@gmail.com', 'tingkat 2. lama jawab kelebihan, kurang teliti, terburu2 terhadap hal yg mendadak. ikut remaja masjid, aktif di dewan masjid indonesia bidang kepemudaan. skala loyalitas 50% karena harus seimbang. motivasi: belajar hal baru, ingin memberikan kontribusi ke lab. kurang bersedia ditempatkan selain regionnya sendiri. mungkin akan pindah ke lab lain tergantung sikon, bukan karena gaji tapi misalnya akses dari rumah ke lab', 'tidak', 'Firstiannisa'),
(106, '52', 'zulfani meilidia', 'fanymeilidia@gmail.com', 'tingkat 3. bisa mengerjakan tugas sesuai deadline, solidaritas tinggi. lagi ikut recruitment beasiswa, pernah ikut BEM 1 periode. ngomongnya agak grogi2 gitu. keliatannya kurang tau tentang lab manlan karena dia bilang media pengajaran lewat wa bukan gmeet. motivasi: menambah wawasan dan relasi. skala loyalitas 80-85%. ekspektasi gaji 300k tapi gak terlalu permasalahin karena ingin tambah skill. sudah punya niat untuk jadi asisten, kuliah no 1', 'ya', 'Firstiannisa'),
(107, '78', 'Adam Fathahillah Zainullah', 'adamfathahillah21@gmail.com', '- Confident\r\n- Region Kalimalang\r\n- Anaknya simple dan ga neko neko\r\n- tujuannya lebih ke cari pengalaman dan ga terlalu perduli dengan gaji maupun lain lain\r\n- cuek ', 'ya', 'indah'),
(108, '87', 'Eva Novia Manik', 'evanovia.mnk@gmail.com', '- Region kalimalang\r\n- Pelupa tapi tau cara mengatasinya.\r\n- ui design enthusiast\r\n- DSC UG\r\n- tau mana urgensi dan prioritas\r\n- bisa photoshop', 'ya', 'indah'),
(109, '17', 'ardian anjasmara', 'ardiananjasmara17@gmail.com', 'tingkat 4. rapi, auranya positif banget. pernah ikut comma design, akan ikut relawan pajak bulan maret nanti selama 1 bulan. kegiatan lain: bantu keuangan di usaha ortu. hobi design. bagus, udah cari2 tau tentang lab. skala loyalitas 95%. ekspektasi gaji 300-500k tapi gak terlalu masalah, yg penting pengalamannya', 'ya', 'Firstiannisa'),
(110, '55', 'alif lintang lazuardi sutowo', 'cyberman742@gmail.com', 'tingkat 2. cara bicaranya lumayan bagus. ikut HIMTI, pernah jadi panitia olimpiade UG. hobi: ngoding, 3D design. peringkat prioritas: kuliah, lab, organisasi. skala loyalitas 90-95%', 'ya', 'Firstiannisa'),
(111, '77', 'Dwina Safitri', 'dwinasafitri12@gmail.com', '-Ceriwis\r\n-Bersedia dinas keluar depok\r\n-Pernah magang diluar tp sekarang udah selesai\r\n-Relawan pajak\r\n-Aktif \r\n', 'ya', 'indah'),
(112, '16', 'amelia anggraini', 'ameliaanggraini113@gmail.com', 'tingkat 4. disiplin, jujur, bisa belajar. pernah ikut mapala. motivasi: ingin belajar, menambah wawasan, punya keluarga baru. skala loyalitas 100%', 'ya', 'Firstiannisa'),
(113, '46', 'riyani puspita dewi', 'riyanipuspita12@gmail.com', 'tingkat 2. cara ngomongnya bagus. kemampuan belajar tinggi, berusaha meningkatkan hard&softskill. pemalu-> berlatih berbicara depan cermin. bagus, udah cari2 tau tentang manlan. skala loyalitas 85-95%.', 'ya', 'Firstiannisa'),
(114, '13', 'alfiah nur hikmahwati', 'alfiahnhw19@gmail.com', 'tingkat 3. ikut BEM divisi pendidikan, pendiri komunitas di desanya tapi lagi gak aktif karena pandemi. tertarik di bidang pendidikan. motivasi: suka ngajar dan merasa manlan bisa menjadi sarana, ingin mengembangkan diri, nambah pengalaman. ekspektasi gaji 400-500k', 'ya', 'Firstiannisa'),
(115, '71', 'Nurul Hikmah Aryanti', 'nurularyanti9@gmail.com', 'tingkat 2. cara ngomongnya bagus, sopan, rapi. berkomitmen tinggi, dapat berkomunikasi dengan baik, percaya diri. kurang berpengalaman dalam berorganisasi. motivasi: nambah pengalaman, relasi, meningkatkan skill public speaking. skala loyalitas 92%', 'ya', 'Firstiannisa'),
(116, '48', 'silvira alivia syahnisa', 'silvirasyah98@gmail.com', 'tingkat 2, anak D3 manajemen. cara ngomongnya bagus, rapi. pernah ikut projek film. pandai bergaul, relasi luas, mudah mengingat sesuatu, dapat bekerja sama dalam tim dengan baik, fokus pada apa yg dikerjakan.', 'ya', 'Firstiannisa'),
(117, '91', 'Monica Audry', 'monicaaudry90@gmail.com', 'kurang cocok untuk posisi programmer. skill kurang, dan komunikasi juga kurang bagus. ', 'tidak', 'indah'),
(118, '91', 'Monica Audry', 'monicaaudry90@gmail.com', 'kurang cocok untuk posisi programmer. skill kurang, dan komunikasi juga kurang bagus. ', 'tidak', 'indah'),
(119, '82', 'Ashia Inayati Mumtaz', 'ashiamtz219@gmail.com', '- relawan pajak\r\n- perfeksionis\r\n- aga pemalu tapi tegas kalo nutor', 'ya', 'indah'),
(120, '95', 'irfanudin', 'irfanudin513@gmail.com', '- less expirience\r\n- kurang percaya diri\r\n- kurang nyambung saat wawancara', 'tidak', 'indah'),
(121, '83', 'Mochamad Rechan Ichsanul Kamil', 'muhamadreyhan598@gmail.com', '- tinggal di jakut, domisili salemba.\r\n- pelupa, serius, tapi tau cara ngatasinnya.\r\n- lagi sakit\r\n- anak comma design\r\n- wawancaranya kurang maksimal karna lagi sakit tapi pas tutor bagus\r\n- anaknya simple \r\n', 'ya', 'indah'),
(122, '92', 'Sylva Flowrends', 'flowrend39ssylva@gmail.com', '- anak dsc\r\n- pelupa tp dia tetep bisa orginize, moody\r\n- frontend\r\n- so so ajasih\r\n- well-known as pendiem', 'ya', 'indah'),
(123, '85', 'Syifa Nurul Ameliana', 'syifanameliana@gmail.com', '- tingkat 2\r\n- domisili salemba\r\n- ceroboh, tapi dia juga orginize tugasnya with list.\r\n- awalnya gugup, tapi oke kok tenang\r\n- mau belajar\r\n- mau masuk lab untuk nambah experience dan belajar', 'ya', 'indah'),
(124, '86', 'Lutpiah Nur Azizah', 'lutfiahazh16@gmail.com', '- Relawan pajak\r\n- confident\r\n- volunteer ogun bagian acara\r\n- orginize\r\n- anaknya keren karna mau research dulu\r\n- bagus komunikasinya', 'ya', 'indah'),
(125, '88', 'Fathia Naila Salsabila', 'fathianailasalsabila@gmail.com', '- Tingkat 3 region depok\r\n- teliti, suka pelupa\r\n- well-known as friendly\r\n- speakingnya bagus\r\n- tau mana tanggung jawabnya based on prioritas list\r\n- anak comma design\r\n', 'ya', 'indah'),
(126, '89', 'Lisa Julian Artati', 'lisajulianartati@gmail.com', '- aktif di berbagai ukm\r\n- pengurus ukm\r\n- pengurus ikatan keluarga bidikmisi\r\n- Pernah ikut lomba bisnis juara 2\r\n- lumayan tapi so so aja. \r\n- Pas test tutor kemaren kurang banget tapi pas wawancara lumayan\r\n- too dreamy\r\n- kurang cocok untuk aslab', 'tidak', 'indah'),
(127, '94', 'Kiki Muliawati', 'kikimuliawati2000@gmail.com', '- tingkat 3 mahasiswa exstensi dr D ke S1\r\n- Ikut forum ekononomi syariah\r\n- Pernah ikut bem setahun\r\n- Magang di bpr kebumen\r\n- public speakingnya bagus\r\n- responsible sama pilihan nya.\r\n- She know what she want adn how to get it\r\n', 'ya', 'indah'),
(128, '96', 'Fi\'ina Dwijulianti', 'fiina.dwijulianti@gmail.com', '- relawan pengajar di sekolah matahari. -Sekarang tingkat 3\r\n- teliti karna sering di taro di bagian pendataan\r\n- suka ngeblank kalo ngomong di depan\r\n- punya pengalaman keorganisasian, orangnya terorganisir. Terbiasa ngajar orang karena pernah ikut jadi bagian rumah mengajar.\r\n- profesional\r\n- public speakingnya baguss\r\n', 'ya', 'indah'),
(129, '97', 'Anisya Nada Laili Hidayah', 'anisyanadalh196@gmail.com', '- mengikuti organisasi di di bawah naungan kota depok forum genre bkkbn.\r\n- project officer plan indonesia di bawah naungan kementrian perempuan.\r\n- bisa design pake canva, photoshop\r\n- adaptable, humble, pottential, perfectionist.\r\n- mantan ketua osis sma, dan sekre di osis tingkat kota. Syudah terbiasa sibukkk.\r\n- domisili kampus cengkareng, tapi rumahnya depok\r\n- rekomended tapi ekspetasi gajinya ketinggian.\r\n', 'ya', 'indah'),
(130, '54', 'alfinasyah rifqi', 'alfinasyahr10@gmail.com', 'tingkat 2. hobi ngoding, web design. sehari2 main game, belajar ngoding, bantu2 di rumah. agak males, deadliner tapi masih tepat waktu. selalu ingin belajar. pernah jadi tutor', 'ya', 'Firstiannisa'),
(131, '53', 'afifah nur sakinah', 'afifahsakinah008@gmail.com', 'tingkat 4. pernah magang. (+) management waktu yg baik. (-) bisa sakit kalo diforsir, misalnya kalo sampe harus begadang. ngomongnya kurang lancar, agak lama kalo jawab pertanyaan. baru sadar kalo harus nambah pengalaman dan skill. ingin menambah pengalaman, ingin berkembang bersama. gak terlalu berharap banyak untuk gaji, yang penting pengalaman', 'ya', 'Firstiannisa'),
(132, '56', 'alifya daradinanti farmayana', 'alifyadara23@gmail.com', 'tingkat 3. cara ngomongnya bagus. fleksibel, bisa kerja di bawah tekanan. pernah magang jadi data analyst. (-) management waktu tapi perlahan membaik karena bikin jadwal sehari2.', 'ya', 'Firstiannisa');

-- --------------------------------------------------------

--
-- Indeks untuk tabel `manlan_admin`
--
ALTER TABLE `manlan_admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `manlan_member`
--
ALTER TABLE `manlan_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `manlan_nilaiprogrammer`
--
ALTER TABLE `manlan_nilaiprogrammer`
  ADD PRIMARY KEY (`id_nilaiprogrammer`);

--
-- Indeks untuk tabel `manlan_nilaistaff`
--
ALTER TABLE `manlan_nilaistaff`
  ADD PRIMARY KEY (`id_nilaistaff`);

--
-- Indeks untuk tabel `manlan_nilaitutor`
--
ALTER TABLE `manlan_nilaitutor`
  ADD PRIMARY KEY (`id_nilaitutor`);

--
-- Indeks untuk tabel `manlan_nilaiujian`
--
ALTER TABLE `manlan_nilaiujian`
  ADD PRIMARY KEY (`id_nilaiujian`);

--
-- Indeks untuk tabel `manlan_nilaiwawancara`
--
ALTER TABLE `manlan_nilaiwawancara`
  ADD PRIMARY KEY (`id_nilaiwawancara`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `manlan_admin`
--
ALTER TABLE `manlan_admin`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `manlan_member`
--
ALTER TABLE `manlan_member`
  MODIFY `id_member` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `manlan_nilaiprogrammer`
--
ALTER TABLE `manlan_nilaiprogrammer`
  MODIFY `id_nilaiprogrammer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `manlan_nilaistaff`
--
ALTER TABLE `manlan_nilaistaff`
  MODIFY `id_nilaistaff` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `manlan_nilaitutor`
--
ALTER TABLE `manlan_nilaitutor`
  MODIFY `id_nilaitutor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT untuk tabel `manlan_nilaiujian`
--
ALTER TABLE `manlan_nilaiujian`
  MODIFY `id_nilaiujian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `manlan_nilaiwawancara`
--
ALTER TABLE `manlan_nilaiwawancara`
  MODIFY `id_nilaiwawancara` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
