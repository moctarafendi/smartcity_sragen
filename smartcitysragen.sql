-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 07:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcitysragen`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_access`
--

CREATE TABLE `history_access` (
  `id_access` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date_access` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_login`
--

CREATE TABLE `history_login` (
  `id_login` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date_login` timestamp NULL DEFAULT NULL,
  `date_logout` timestamp NULL DEFAULT NULL,
  `id_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_login`
--

INSERT INTO `history_login` (`id_login`, `user_id`, `date_login`, `date_logout`, `id_session`) VALUES
(1, 1, '2019-03-08 03:49:16', '2019-03-08 03:55:49', '1r1WgrZLgOdMEcgrgEFsV3AsWxUy0NGdnngH21tm'),
(2, 1, '2019-03-18 03:17:58', '2019-03-18 05:33:09', 'LIIaRqdgR2tyfakknfT1zLGdmZ0rb5JyPQVYZFfR'),
(3, 2, '2019-03-18 05:34:27', '2019-03-18 07:08:34', 'qVrnSmPkNiRMTi5iHkjxuzk24w9jl0w7ktsdCogH'),
(4, 2, '2019-03-18 07:12:34', '2019-03-18 07:24:54', 'i0xgiECn9sfIZdsLNooTOUDttTy1qzp8Hfq4jrtj'),
(5, 2, '2019-03-18 07:51:56', '2019-03-18 07:52:47', 'BneRZxykUqF8AOCfmHKZr22N6m092neUWEZQ7VJC'),
(6, 1, '2019-03-18 07:52:55', '2019-03-18 07:53:37', 'EsO5q0rc46Lxb0CBXcIuq95sllqW9tJ4k66QW4a8'),
(7, 2, '2019-03-25 02:20:00', '2019-03-25 02:25:45', 'Ub9YRHFSbRJN0nLXrGGnTlvRw8jrMwSGNNtHpa2e'),
(8, 1, '2019-05-16 02:29:09', '2019-05-16 02:30:11', 'RQ9mOOJJdplII2nzQpQKME0BCJn6j1iNbGlR4EpQ'),
(9, 1, '2019-05-17 01:03:53', NULL, 'xHx9OWSf5p9qx0GjxHbYy7pKnJBlTII0q0Rsm5wp'),
(10, 1, '2019-05-17 01:07:56', '2019-05-17 01:09:33', 'fcavT1KrOom5BPxCBgtH5QGFeSqq2IfLMr5Yy769'),
(11, 2, '2019-05-17 01:42:43', '2019-05-17 01:43:12', 'kpsrtMa1J8q7g9PboF7W8eai4LHZhgCC5pkvU1rU'),
(12, 1, '2019-05-17 01:43:22', '2019-05-17 01:43:31', 'qrRlAW5nFZGwSippgYsGUdRloC2zb3ItkKkR2XGz'),
(13, 1, '2019-05-17 01:43:44', '2019-05-17 01:46:30', 'DY76ew5oJjun2uKITmlq5PYUHxxQDr3unuGMQsdQ'),
(14, 1, '2019-05-17 01:59:00', '2019-05-17 01:59:06', 'GfCQ9QaAgT5wubRdSwZ3Eh2cBqnah3rEB11QRXCK'),
(15, 2, '2019-05-17 01:59:15', '2019-05-17 02:03:17', 'VPnX31Addxz5zUmBYpmmrD5xgLx9aYD8AzTu3U5v'),
(16, 2, '2019-05-17 02:10:37', '2019-05-17 02:39:27', '148be6PMW0vnDhRv1NRT7qXL6msao57i1D6yANy9'),
(17, 1, '2019-05-20 04:52:41', '2019-05-20 04:55:36', 'ymx8BQZdlNlYhtX25uB2xxifddpgA0jINmp3uXiM'),
(18, 1, '2019-05-20 05:30:04', '2019-05-20 09:30:13', 'FBMv9Z3QHPZJMPeGmh4YTtQn1zYBkUi6UtxFsNpV'),
(19, 1, '2019-05-20 10:05:28', '2019-05-20 11:23:17', 'IUVJeCDw2vlzhQqot4HYxYORhXpnOmga2taEbJ1X'),
(20, 1, '2019-05-21 03:07:02', '2019-05-21 03:27:41', 'RMGF8yM1jnbvuDw1aVFT5gr1QgZHfufwMinKsfuf'),
(21, 2, '2019-05-23 02:30:25', '2019-05-23 02:56:58', 'q6iINPsvX7tJDO5Ekuamfd5GSU4kIyYvI6zGdszz'),
(22, 1, '2019-05-24 02:42:46', '2019-05-24 02:42:54', 'fN7rZcEoH95Xuga1kdVlQdk63WIJc1YrbiV1CRun'),
(23, 1, '2019-05-24 02:43:01', '2019-05-24 02:55:49', '265gg8NvIXtuhUz5d4n2fZlbltq1cM7Oxpjs2lGz'),
(24, 2, '2019-05-24 02:55:56', '2019-05-24 03:12:00', 'F9oAnzefPjnOJ6YoOfpd4GVf8YPBEBvyE2OCdvl4'),
(25, 2, '2019-05-27 07:49:56', '2019-05-27 07:50:05', 'GvcFb1dNivo0wycHl0R16gwLRK3Hd0zAxyb85tJq');

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id_indikator` int(10) UNSIGNED NOT NULL,
  `skpd_id` int(10) UNSIGNED NOT NULL,
  `otda_id` int(10) UNSIGNED NOT NULL,
  `name_indikator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id_indikator`, `skpd_id`, `otda_id`, `name_indikator`, `referensi`, `data_1`, `data_2`, `status`) VALUES
(3101101, 31011, 0, 'Akta Kelahiran', '', 'Jumlah penduduk yang memiliki akta', 'Jumlah Penduduk', 1),
(3101102, 31011, 0, 'Kepemilikan KTP', '', 'Jumlah penduduk memiliki KTP', 'Jumlah Penduduk wajib KTP', 1),
(3101103, 31011, 1, 'Persentase penduduk kota yang hidup dalam kemiskinan', 'ISO 37120', 'Jumlah orang hidup di bawah ambang batas kemiskinan', 'Jumlah penduduk kota saat ini', 0),
(3101104, 31011, 6, 'Persentase penduduk kota yang hidup dalam kemiskinan', 'ISO 37150', 'Jumlah penduduk kota yang hidup dalam kemiskinnan ', 'Jumlah penduduk kota', 0),
(3101401, 31014, 1, 'Nilai yang dinilai dari properti komersial dan industri sebagai persentase dari total nilai yang dinilai dari semua properti', 'ISO 37120', 'Jumalah nilai yang dinilai dari properti komersiL dan industri', 'Jumlah nilai yang dinilai dari semua properti', 0),
(3101402, 31014, 1, 'Jumlah bisnis per 100.000 penduduk', 'ISO 37120', 'Jumalah bisnis yang terdapat', 'Jumlah angkatan kerja', 0),
(3101901, 31019, 1, 'Tingkat pengangguran kota', 'ISO 37120', 'Jumlah penduduk kota', 'Jumlah angkatan kerja', 0),
(3101902, 31019, 1, 'Persentase orang dalam pekerjaan penuh waktu', 'ISO 37120/37150', 'Jumlah orang dalam pekerjaan penuh waktu', 'Jumlah Penduduk kota', 0),
(3101903, 31019, 1, 'Tingkat pengangguran kaum muda', 'ISO 37120', 'Jumlah kaum muda pengangguran', 'Jumlah angkatan kerja', 0),
(3101904, 31019, 1, 'Jumlah paten baru per 100.000 penduduk per tahun', 'ISO 37120', 'Jumlah paten baru yang dikeluarkan untuk penduduk dan perusahaan', 'Jumlah angkatan kerja', 0),
(3102001, 31020, 5, 'Panjang jalan kota dalam kondisi baik', 'PP 6 2008', 'Panjang jalan kota dalam kondisi baik', 'Panjang seluruh jalan kota di daerah tersebut', 0),
(3102101, 31021, 5, 'Rumah Tangga ber-Sanitasi', 'PP 6 2008', 'Jumlah rumah tangga ber sanitasi', 'Jumlah total rumah tangga', 0),
(3102201, 31022, 5, 'Areal ukuran permukiman informal sebagai persentase dari wilayah kota', 'ISO 37120/37150', 'Luas permukiman informal dalam kilometer persegi', 'Luas kota dalam kilometer persegi', 0),
(3102202, 31022, 5, 'Kawasan Kumuh', 'PP 6 2008', 'Luas Kawasan Kumuh', 'Luas Wilayah', 0),
(3102301, 31023, 5, 'Green area (hektar) per 100.000 penduduk', 'ISO 37120/37150', 'Total luas (dalam hektar) hijau di kota', '100.000 total penduduk kota', 0),
(3102302, 31023, 5, 'Jumlah pohon tahunan yang ditanam per 100.000 penduduk', 'ISO 37120', 'Total pohon yang ditanam pada tahun tertentu', '100.000 total penduduk kota', 0),
(3102303, 31023, 5, 'Ruang terbuka hijau per satuan luas wilayah ber HPL/HGB', 'ISO 37120/37150', 'Total pekerjaan', 'Total unit hunian', 0),
(3102304, 31023, 5, 'Ruang terbuka hijau per satuan luas wilayah ber HPL/HGB', 'PP 6 2008', 'Luas ruang terbuka hijau', 'Luas wilayah ber HPL/HGB', 0),
(3102401, 31024, 5, 'Penanganan sampah', 'PP 6 2008', 'Volume sampah yang ditangani (m3)', 'Volume produksi sampah (m3)', 0),
(3102601, 31026, 2, 'Persentase penduduk usia sekolah perempuan yang terdaftar di sekolah', 'ISO 37120', 'Jumlah siswa perempuan yang terdaftar dan yang akan menyelesaikan nilai akhir pendidikan dasar', 'Jumlah siswa yang terdaftar', 0),
(3102602, 31026, 2, 'Persentase siswa yang menyelesaikan pendidikan dasar: tingkat kelangsungan hidup', 'ISO 37120/37150', 'Jumlah siswa yang terdaftar dan yang menyelesaikan nilai akhir dari pendidikan dasar', 'Jumlah siswa yang terdaftar', 0),
(3102603, 31026, 2, 'Persentase siswa yang menyelesaikan pendidikan menengah: tingkat kelangsungan hidup', 'ISO 37120/37150', 'Jumlah siswa yang terdaftar dan yang menylesaikan nilai akhir dari pendidikan menengah', 'Jumlah siwa yang terdaftar', 0),
(3102604, 31026, 2, 'Rasio siswa/guru pendidikan dasar', 'ISO 37120', 'Jumlah siwa sekoklah dasar yang terdaftar', 'Jumlah guru kelas sekolah dasar yang setara penuh waktu', 0),
(3102605, 31026, 2, 'Persentase penduduk usia sekolah laki-laki terdaftar di sekolah', 'ISO 37120/37150', 'Jumlah penduduk usia sekolah laik-laki yang terdaftar di tingkat dasar dan menengah di sekolah negeri dan swasta ', 'Jumlah penduduk usia sekolah', 0),
(3102606, 31026, 2, 'Persentase penduduk usia sekolah yang terdaftar di sekolah', 'ISO 37120/37150', 'Jumlah penduduk usia sekolah yang terdaftar di tingkat dasar dan menengah di sekolah negeri dan swasta ', 'Jumlah penududuk usia sekolah', 0),
(3102607, 31026, 2, 'Jumlah derajat pendidikan tinggi per 100.000 penduduk', 'ISO 37120', 'Jumlah orang yang mengabdi gelar pendidikan tinggi', '100.000 penduduk kota', 0),
(3102608, 31026, 2, 'Rasio murid/guru', 'ISO 37150', 'Jumlah siswa yang terdaftar', 'Jumlah guru kelas yang setara penuh waktu', 0),
(3102609, 31026, 2, 'Persentase siswa yang menyelesaikan pendidikan dasar dan menengah: tingkat kelangsungan hidup', 'ISO 37150', 'Jumlah siswa yang menyelesaikan pendidikan dasar dan menengah', 'Jumlah siswa pendidikan dasar dan menengah', 0),
(3102610, 31026, 2, 'Persentase penduduk perempuan usia sekolah yang terdaftar di sekolah', 'ISO 37150', 'Jumlah penduduk perempuan usia sekolah yang terdaftar di sekolah tingkat dasar dan menengah di negeri dan swasta', 'Jumlah penduduk perempuan usia sekolah', 0),
(3102611, 31026, 2, 'Pendidikan Anak Usia Dini (PAUD)', 'PP 6 2008', 'Jml Siswa pada Jenjang TK/RA/Penitipan Anak', 'Jumlah Anak Usia 4-6 Tahun', 0),
(3102612, 31026, 2, 'Penduduk yang berusia > 15 tahun melek huruf (tidak buta aksara)', 'PP 6 2008', 'Jml Penduduk usia 15 thn ke atas dapat baca tulis', 'Jumlah Penduduk usia 15 thn ke atas', 0),
(3102613, 31026, 2, 'Angka Partisipasi Murni (APM) SD/MI/Paket A', 'PP 6 2008', 'Jml siswa usia 7-12 thn dijenjang SD/MI/Paket A', 'Jumlah penduduk usia 7-12 thn', 0),
(3102614, 31026, 2, 'Angka Partisipasi Murni (APM) SMP/MTs/Paket B', 'PP 6 2008', 'Jml siswa usia 13-15 thn dijenjang SMP/MTs/Paket C', 'Jumlah penduduk usia 13-15 thn', 0),
(3102615, 31026, 2, 'Angka Partisipasi Murni (APM) SMA/SMK/MA/Paket C', 'PP 6 2008', 'Jml siswa usia 16-18 thn dijenjang SMA/SMK/MA/Paket C', 'Jumlah penduduk usia 16-18 thn', 0),
(3102616, 31026, 2, 'Angka Putus Sekolah (APS) SD/MI', 'PP 6 2008', 'Jml putus sekolah pd tingkat & jenjang SD/MI', 'Jml putus sekolah pd tingkat & jenjang SD/MI pd thn ajaran sebelumnya', 0),
(3102617, 31026, 2, 'Angka Putus Sekolah (APS) SMP/MTs', 'PP 6 2008', 'Jml putus sekolah pd tingkat & jenjang SMP/MTs', 'Jml putus sekolah pd tingkat yang sama & jenjang SMP/MTs pd thn ajaran sebelumnya', 0),
(3102618, 31026, 2, 'Angka Putus Sekolah (APS) SMA/SMK/MA', 'PP 6 2008', 'Jml putus sekolah pd tingkat & jenjang SMA/SMK/MA', 'Jml putus sekolah pd tingkat & jenjang SMA/SMK/MA pd thn ajaran sebelumnya', 0),
(3102619, 31026, 2, 'Angka Kelulusan (AL) SD/MI', 'PP 6 2008', 'Jml lulusan pada jenjang SD/MI', 'Jml siswa tingkat tertinggi pada jenjang SD/MI pada tahun ajaran sebelumnya', 0),
(3102620, 31026, 2, 'Angka Kelulusan (AL) SMP/MTs', 'PP 6 2008', 'Jml lulusan pada jenjang SMP/MTs', 'Jml siswa tingkat tertinggi pada jenjang SMP/MTs pada tahun ajaran sebelumnya', 0),
(3102621, 31026, 2, 'Angka Kelulusan (AL) SMA/SMK/MA', 'PP 6 2008', 'Jml lulusan pada jenjang SMA/SMK/MA', 'Jml siswa tingkat tertinggi pada jenjang SMA/SMK/MA pada tahun ajaran sebelumnya', 0),
(3102622, 31026, 2, 'Angka Melanjutkan (AM) dari SD/MI ke SMP/MTs', 'PP 6 2008', 'Jumlah siswa baru tingkat I pada jenjang SMP/MTs', 'Jumlah lulusan pd jenjang SD/MI tahun ajaran sebelumnya', 0),
(3102623, 31026, 2, 'Angka Melanjutkan (AM) dari SMP/MTs ke SMA/SMK/MA', 'PP 6 2008', 'Jumlah siswa baru tingkat I pada jenjang SMA/SMK/MA', 'Jumlah lulusan pd jenjang SMP/MTs tahun ajaran sebelumnya', 0),
(3102624, 31026, 2, 'Guru yang memenuhi kualifikasi S1/D-IV', 'PP 6 2008', 'Jumlah guru berijasah kualifikasi S1/D-IV', 'Jumlah Guru SD/MI, SMP/MTs, SMA/SMK/MA', 0),
(3102701, 31027, 0, 'Ibu Bersalin', '', 'Jumlah Ibu Bersalin Ditolong', 'Jumlah Ibu Bersalin Sasaran', 1),
(3102702, 31027, 0, 'Pasien', '', '', '', 0),
(3102703, 31027, 0, 'Kebidanan', '', 'Jumlah Komplikasi Kebidanan Yang Mendapat Penanganan Definitive', 'Jumlah Ibu Komplikasi Kebidanan', 0),
(3102704, 31027, 0, 'Universal Child Immunization', '', 'Jumlah Desa atau Kelurahan UCI', 'Jumlah Desa atau Kelurahan', 0),
(3102705, 31027, 0, 'Penderita DBD', '', 'Jumlah Penderita DBD yang Ditangani Sesuai SOP dan Sembuh', 'Jumlah Penderita DBD yang ditemukan', 1),
(3102706, 31027, 0, 'Kesehatan Masyarakat Miskin', '', 'Jumlah Kunjnungan Pasien Miskin disarana Kesehatan', 'Jumlah Seluruh Masyarakat Miskin', 0),
(3102707, 31027, 0, 'Presentase Balita Gizi Buruk', '', 'Jumlah Seluruh Balita Gizi Buruk', 'Jumlah Semua Balita yang Ada', 0),
(3102708, 31027, 0, 'Perawatan Balita Gizi Buruk', '', 'Jumlah Balita Gizi Buruk yang Dirawat', 'Jumlah Balita Gizi Buruk yang Ditemukan', 0),
(3102709, 31027, 0, 'Pengobatan TB paru', '', 'Jumlah Penderita TB Paru BTA (+) yang sembuh diobati', 'Jumlah Penderita TB Paru BTA (+) yang diobati', 0),
(3102710, 31027, 0, 'Angka Kematian Bayi', '', 'Jumlah Kematian Bayi', 'Jumlah Kelahiran Hidup', 0),
(3102711, 31027, 3, 'Harapan hidup rata-rata', 'ISO 37120/37150', '', '', 0),
(3102712, 31027, 3, 'Jumlah tempat tidur rumah sakit rawat inap per 100.000 penduduk', 'ISO 37120/37150', 'Jumlah rawat inap di rumah sakit umum dan rumah sakit swasta', '100.000 penduduk kota', 0),
(3102713, 31027, 3, 'Jumlah dokter per 100.000 penduduk', 'ISO 37120/37150', 'Jumlah  praktisi umum atau spesialis yang tempat kerjanya di kota', '100.000 penduduk kota', 0),
(3102714, 31027, 3, 'Di bawah usia lima tahun kematian per 1 000 kelahiran hidup', 'ISO 37120', 'lima tahun', '1000 kelahiran hidup', 0),
(3102715, 31027, 3, 'Jumlah tenaga keperawatan dan kebidanan per 100 000 penduduk', 'ISO 37120/37150', 'Jumlah perawat dan bidan', '100.000 penduduk kota', 0),
(3102716, 31027, 3, 'Jumlah praktisi kesehatan mental per 100.000 penduduk', 'ISO 37120', 'Jumlah praktisi kesehatan mental yang tempat kerjanya berada di kota', '100.000 penduduk kota', 0),
(3102717, 31027, 3, 'Tingkat bunuh diri per 100 000 penduduk', 'ISO 37120', 'Jumlah kematian yang dilaporkan oleh bunuh diri', '100.000 penduduk kota', 0),
(3102718, 31027, 3, 'Di bawah usia 5 kematian per 1.000 kelahiran hidup', 'ISO 37150', 'Jumlah kematian', 'Jumlah penduduk yang berisiko selama jangka waktu tertentu', 0),
(3102719, 31027, 3, 'Cakupan Komplikasi kebidanan yang ditangani', 'PP 6 2008', 'Jml komplikasi kebidanan yg mendapat penanganan difinitif di  satu wilayah kerja pd kurun waktu tertetu', 'Jml ibu dgn komplikasi kebidanan di satu wilayah kerja Pada kurun waktu yg sama', 0),
(3102720, 31027, 3, 'Cakupan pertolongan persalinan oleh tenaga kesehatan yang memiliki kompetensi kebidanan', 'PP 6 2008', 'Jumlah ibu bersalin yg ditolong oleh tenaga kesehatan Di satu wilayah kerja pd kurun waktu tertentu', 'Jumlah seluruh sasaran ibu bersalin di satu wilayah kerja dalam kurun waktu yg sama', 0),
(3102721, 31027, 3, 'Cakupan Desa/kelurahan Universal Child Immunization (UCI)', 'PP 6 2008', 'Jumlah Desa/Kelurahan UCI', 'Jumlah Seluruh Desa/Kelurahan', 0),
(3102722, 31027, 3, 'Cakupan Balita Gizi Buruk mendapat perawatan', 'PP 6 2008', 'Jumlah balita gizi buruk mendapat perawatan di sarana Pelayanan Kes. Di sati wil. Kerja pd kurun wkt tertentu', 'Jumlah seluruh balita gizi buruk buruk yang ditemukan Di satu wilayah kerja dalamwaktu yang sama', 0),
(3102723, 31027, 3, 'Cakupan penemuan dan penanganan penderita penyakit TBC BTA', 'PP 6 2008', 'Jumlah penderita baru TBC BTA (+) yang ditemukan dan diobati di satu wil. Kerja selama 1 thn', 'Jumlah perkiraan penderita baru TBC BTA (+) dalam Kurun waktu yang sama', 0),
(3102724, 31027, 3, 'Cakupan penemuan dan penanganan penderita penyakit DBD', 'PP 6 2008', 'Jumlah penderita DBD yang ditangani sesuai SOP di satu wil. Kerja selama 1 thn', 'Jumlah penderita DBD yang ditemukan di satu wilayah dalam Kurun waktu yang sama', 0),
(3102725, 31027, 3, 'Cakupan pelayanan kesehatan rujukan pasien masyarakat miskin', 'PP 6 2008', 'Jumlah kunjungan pasien maskin di sarana Kesehatan Strata 1', 'Jumlah seluruh maskin di Kab/Kota', 0),
(3102726, 31027, 3, 'Cakupan kunjungan bayi', 'PP 6 2008', 'Jumlah kunjungan bayi memperoleh pelayanan kesehatan sesuai standar di satu wilayah kerja pd Kurun waktu tertentu', 'Jumlah seluruh bayi lahir hidupdi satu wilayah kerja pd Kurun waktu yang sama', 0),
(3103501, 31035, 5, 'Cakupan pengawasan terhadap pelaksanaan amdal', 'PP 6 2008', 'Jumlah perush wajib AMDAL yg telah diawasi', 'Jumlah seluruh perusahaan wajib AMDAL', 0),
(3103502, 31035, 5, 'Tempat pembuangan sampah (TPS) per satuan penduduk', 'PP 6 2008', 'Jumlah daya tampung TPS (m3)', 'Jumlah penduduk', 0),
(3105701, 31057, 4, 'Jumlah petugas polisi per 100.000 penduduk', 'ISO 37120', 'Jumlah petugas polisi penuh waktu tetap', 'Lisensi pengguna tunggal', 0),
(3105702, 31057, 4, ' Jumlah pembunuhan per 100 000 penduduk', 'ISO 37120/37150', 'Jumlah pembunuhan yang dilaporkan', '100.000 penduduk kota', 0),
(3105703, 31057, 4, 'Kejahatan terhadap properti per 100 000', 'ISO 37120', 'Semua kejahatan properti yang dilaporkan', 'Penduduk kota', 0),
(3105704, 31057, 4, 'Waktu respons untuk departemen kepolisian dari panggilan awal', 'ISO 37120', 'Jumlah dari semua panggilan darurat awal ke kedatangan di lokasi personil kepolisian untuk tahun dalam hitungan menit dan detik', 'Jumlah departemen kepolisian tanggapan di tahun yang sama', 0),
(3105705, 31057, 4, 'Tingkat kejahatan kekerasan per 100.000 penduduk', 'ISO 37150', 'Semua kejahatan kekerasan yang dilaporkan', '100.000 penduduk kota', 0),
(3105706, 31057, 4, 'Jumlah petugas polisi per 100.000 penduduk', 'ISO 37150', 'Jumlah petugas polisi yang bekerja full-time', '100.000 penduduk kota', 0),
(3105707, 31057, 4, 'Tingkat kejahatan berat per 100.000 penduduk', 'ISO 37150', 'Jumlah kejahatan berat yang dilaporkan \r\n', '100.000 penduduk kota', 0),
(3105708, 31057, 5, 'Penegakan hukum lingkungan', 'PP 6 2008', 'Jumlah kasus lingkungan yang diselesaikan Pemda', 'Jumlah kasus lingkungan yang ada', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `name_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `name_jabatan`) VALUES
(1, 'Inspektorat'),
(2, 'Sekretaris'),
(3, 'Kepala'),
(4, 'Kepala UPT'),
(5, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(10) UNSIGNED NOT NULL,
  `nama_kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_kabupaten` mediumtext COLLATE utf8mb4_unicode_ci,
  `provinsi_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `logo_kabupaten`, `provinsi_id`, `status`) VALUES
(1101, 'KABUPATEN SIMEULUE', '', 11, 0),
(1102, 'KABUPATEN ACEH SINGKIL', '', 11, 0),
(1103, 'KABUPATEN ACEH SELATAN', '', 11, 0),
(1104, 'KABUPATEN ACEH TENGGARA', '', 11, 0),
(1105, 'KABUPATEN ACEH TIMUR', '', 11, 0),
(1106, 'KABUPATEN ACEH TENGAH', '', 11, 0),
(1107, 'KABUPATEN ACEH BARAT', '', 11, 0),
(1108, 'KABUPATEN ACEH BESAR', '', 11, 0),
(1109, 'KABUPATEN PIDIE', '', 11, 0),
(1110, 'KABUPATEN BIREUEN', '', 11, 0),
(1111, 'KABUPATEN ACEH UTARA', '', 11, 0),
(1112, 'KABUPATEN ACEH BARAT DAYA', '', 11, 0),
(1113, 'KABUPATEN GAYO LUES', '', 11, 0),
(1114, 'KABUPATEN ACEH TAMIANG', '', 11, 0),
(1115, 'KABUPATEN NAGAN RAYA', '', 11, 0),
(1116, 'KABUPATEN ACEH JAYA', '', 11, 0),
(1117, 'KABUPATEN BENER MERIAH', '', 11, 0),
(1118, 'KABUPATEN PIDIE JAYA', '', 11, 0),
(1171, 'KOTA BANDA ACEH', '', 11, 0),
(1172, 'KOTA SABANG', '', 11, 0),
(1173, 'KOTA LANGSA', '', 11, 0),
(1174, 'KOTA LHOKSEUMAWE', '', 11, 0),
(1175, 'KOTA SUBULUSSALAM', '', 11, 0),
(1201, 'KABUPATEN NIAS', '', 12, 0),
(1202, 'KABUPATEN MANDAILING NATAL', '', 12, 0),
(1203, 'KABUPATEN TAPANULI SELATAN', '', 12, 0),
(1204, 'KABUPATEN TAPANULI TENGAH', '', 12, 0),
(1205, 'KABUPATEN TAPANULI UTARA', '', 12, 0),
(1206, 'KABUPATEN TOBA SAMOSIR', '', 12, 0),
(1207, 'KABUPATEN LABUHAN BATU', '', 12, 0),
(1208, 'KABUPATEN ASAHAN', '', 12, 0),
(1209, 'KABUPATEN SIMALUNGUN', '', 12, 0),
(1210, 'KABUPATEN DAIRI', '', 12, 0),
(1211, 'KABUPATEN KARO', '', 12, 0),
(1212, 'KABUPATEN DELI SERDANG', '', 12, 0),
(1213, 'KABUPATEN LANGKAT', '', 12, 0),
(1214, 'KABUPATEN NIAS SELATAN', '', 12, 0),
(1215, 'KABUPATEN HUMBANG HASUNDUTAN', '', 12, 0),
(1216, 'KABUPATEN PAKPAK BHARAT', '', 12, 0),
(1217, 'KABUPATEN SAMOSIR', '', 12, 0),
(1218, 'KABUPATEN SERDANG BEDAGAI', '', 12, 0),
(1219, 'KABUPATEN BATU BARA', '', 12, 0),
(1220, 'KABUPATEN PADANG LAWAS UTARA', '', 12, 0),
(1221, 'KABUPATEN PADANG LAWAS', '', 12, 0),
(1222, 'KABUPATEN LABUHAN BATU SELATAN', '', 12, 0),
(1223, 'KABUPATEN LABUHAN BATU UTARA', '', 12, 0),
(1224, 'KABUPATEN NIAS UTARA', '', 12, 0),
(1225, 'KABUPATEN NIAS BARAT', '', 12, 0),
(1271, 'KOTA SIBOLGA', '', 12, 0),
(1272, 'KOTA TANJUNG BALAI', '', 12, 0),
(1273, 'KOTA PEMATANG SIANTAR', '', 12, 0),
(1274, 'KOTA TEBING TINGGI', '', 12, 0),
(1275, 'KOTA MEDAN', '', 12, 0),
(1276, 'KOTA BINJAI', '', 12, 0),
(1277, 'KOTA PADANGSIDIMPUAN', '', 12, 0),
(1278, 'KOTA GUNUNGSITOLI', '', 12, 0),
(1301, 'KABUPATEN KEPULAUAN MENTAWAI', '', 13, 0),
(1302, 'KABUPATEN PESISIR SELATAN', '', 13, 0),
(1303, 'KABUPATEN SOLOK', '', 13, 0),
(1304, 'KABUPATEN SIJUNJUNG', '', 13, 0),
(1305, 'KABUPATEN TANAH DATAR', '', 13, 0),
(1306, 'KABUPATEN PADANG PARIAMAN', '', 13, 0),
(1307, 'KABUPATEN AGAM', '', 13, 0),
(1308, 'KABUPATEN LIMA PULUH KOTA', '', 13, 0),
(1309, 'KABUPATEN PASAMAN', '', 13, 0),
(1310, 'KABUPATEN SOLOK SELATAN', '', 13, 0),
(1311, 'KABUPATEN DHARMASRAYA', '', 13, 0),
(1312, 'KABUPATEN PASAMAN BARAT', '', 13, 0),
(1371, 'KOTA PADANG', '', 13, 0),
(1372, 'KOTA SOLOK', '', 13, 0),
(1373, 'KOTA SAWAH LUNTO', '', 13, 0),
(1374, 'KOTA PADANG PANJANG', '', 13, 0),
(1375, 'KOTA BUKITTINGGI', '', 13, 0),
(1376, 'KOTA PAYAKUMBUH', '', 13, 0),
(1377, 'KOTA PARIAMAN', '', 13, 0),
(1401, 'KABUPATEN KUANTAN SINGINGI', '', 14, 0),
(1402, 'KABUPATEN INDRAGIRI HULU', '', 14, 0),
(1403, 'KABUPATEN INDRAGIRI HILIR', '', 14, 0),
(1404, 'KABUPATEN PELALAWAN', '', 14, 0),
(1405, 'KABUPATEN S I A K', '', 14, 1),
(1406, 'KABUPATEN KAMPAR', '', 14, 0),
(1407, 'KABUPATEN ROKAN HULU', '', 14, 0),
(1408, 'KABUPATEN BENGKALIS', '', 14, 0),
(1409, 'KABUPATEN ROKAN HILIR', '', 14, 0),
(1410, 'KABUPATEN KEPULAUAN MERANTI', '', 14, 0),
(1471, 'KOTA PEKANBARU', '', 14, 0),
(1473, 'KOTA D U M A I', '', 14, 0),
(1501, 'KABUPATEN KERINCI', '', 15, 0),
(1502, 'KABUPATEN MERANGIN', '', 15, 1),
(1503, 'KABUPATEN SAROLANGUN', '', 15, 0),
(1504, 'KABUPATEN BATANG HARI', '', 15, 1),
(1505, 'KABUPATEN MUARO JAMBI', '', 15, 0),
(1506, 'KABUPATEN TANJUNG JABUNG TIMUR', '', 15, 0),
(1507, 'KABUPATEN TANJUNG JABUNG BARAT', '', 15, 0),
(1508, 'KABUPATEN TEBO', '', 15, 0),
(1509, 'KABUPATEN BUNGO', '', 15, 0),
(1571, 'KOTA JAMBI', '', 15, 0),
(1572, 'KOTA SUNGAI PENUH', '', 15, 1),
(1601, 'KABUPATEN OGAN KOMERING ULU', '', 16, 0),
(1602, 'KABUPATEN OGAN KOMERING ILIR', '', 16, 0),
(1603, 'KABUPATEN MUARA ENIM', '', 16, 0),
(1604, 'KABUPATEN LAHAT', '', 16, 0),
(1605, 'KABUPATEN MUSI RAWAS', '', 16, 0),
(1606, 'KABUPATEN MUSI BANYUASIN', '', 16, 0),
(1607, 'KABUPATEN BANYU ASIN', '', 16, 0),
(1608, 'KABUPATEN OGAN KOMERING ULU SELATAN', '', 16, 0),
(1609, 'KABUPATEN OGAN KOMERING ULU TIMUR', '', 16, 0),
(1610, 'KABUPATEN OGAN ILIR', '', 16, 0),
(1611, 'KABUPATEN EMPAT LAWANG', '', 16, 0),
(1612, 'KABUPATEN PENUKAL ABAB LEMATANG ILIR', '', 16, 0),
(1613, 'KABUPATEN MUSI RAWAS UTARA', '', 16, 0),
(1671, 'KOTA PALEMBANG', '', 16, 1),
(1672, 'KOTA PRABUMULIH', '', 16, 0),
(1673, 'KOTA PAGAR ALAM', '', 16, 0),
(1674, 'KOTA LUBUKLINGGAU', '', 16, 0),
(1701, 'KABUPATEN BENGKULU SELATAN', '', 17, 0),
(1702, 'KABUPATEN REJANG LEBONG', '', 17, 0),
(1703, 'KABUPATEN BENGKULU UTARA', '', 17, 0),
(1704, 'KABUPATEN KAUR', '', 17, 0),
(1705, 'KABUPATEN SELUMA', '', 17, 0),
(1706, 'KABUPATEN MUKOMUKO', '', 17, 0),
(1707, 'KABUPATEN LEBONG', '', 17, 0),
(1708, 'KABUPATEN KEPAHIANG', '', 17, 0),
(1709, 'KABUPATEN BENGKULU TENGAH', '', 17, 0),
(1771, 'KOTA BENGKULU', '', 17, 0),
(1801, 'KABUPATEN LAMPUNG BARAT', '', 18, 0),
(1802, 'KABUPATEN TANGGAMUS', '', 18, 0),
(1803, 'KABUPATEN LAMPUNG SELATAN', '', 18, 0),
(1804, 'KABUPATEN LAMPUNG TIMUR', '', 18, 0),
(1805, 'KABUPATEN LAMPUNG TENGAH', '', 18, 1),
(1806, 'KABUPATEN LAMPUNG UTARA', '', 18, 0),
(1807, 'KABUPATEN WAY KANAN', '', 18, 0),
(1808, 'KABUPATEN TULANGBAWANG', '', 18, 0),
(1809, 'KABUPATEN PESAWARAN', '', 18, 0),
(1810, 'KABUPATEN PRINGSEWU', '', 18, 0),
(1811, 'KABUPATEN MESUJI', '', 18, 0),
(1812, 'KABUPATEN TULANG BAWANG BARAT', '', 18, 0),
(1813, 'KABUPATEN PESISIR BARAT', '', 18, 0),
(1871, 'KOTA BANDAR LAMPUNG', '', 18, 0),
(1872, 'KOTA METRO', '', 18, 1),
(1901, 'KABUPATEN BANGKA', '', 19, 1),
(1902, 'KABUPATEN BELITUNG', '', 19, 0),
(1903, 'KABUPATEN BANGKA BARAT', '', 19, 0),
(1904, 'KABUPATEN BANGKA TENGAH', '', 19, 0),
(1905, 'KABUPATEN BANGKA SELATAN', '', 19, 0),
(1906, 'KABUPATEN BELITUNG TIMUR', '', 19, 0),
(1971, 'KOTA PANGKAL PINANG', '', 19, 0),
(2101, 'KABUPATEN KARIMUN', '', 21, 0),
(2102, 'KABUPATEN BINTAN', '', 21, 1),
(2103, 'KABUPATEN NATUNA', '', 21, 0),
(2104, 'KABUPATEN LINGGA', '', 21, 0),
(2105, 'KABUPATEN KEPULAUAN ANAMBAS', '', 21, 0),
(2171, 'KOTA BATAM', '', 21, 0),
(2172, 'KOTA TANJUNG PINANG', '', 21, 0),
(3101, 'KABUPATEN KEPULAUAN SERIBU', '', 31, 0),
(3171, 'KOTA JAKARTA SELATAN', '', 31, 1),
(3172, 'KOTA JAKARTA TIMUR', '', 31, 1),
(3173, 'KOTA JAKARTA PUSAT', '', 31, 1),
(3174, 'KOTA JAKARTA BARAT', '', 31, 1),
(3175, 'KOTA JAKARTA UTARA', '', 31, 1),
(3201, 'KABUPATEN BOGOR', '', 32, 1),
(3202, 'KABUPATEN SUKABUMI', '', 32, 0),
(3203, 'KABUPATEN CIANJUR', '', 32, 0),
(3204, 'KABUPATEN BANDUNG', '', 32, 0),
(3205, 'KABUPATEN GARUT', '', 32, 1),
(3206, 'KABUPATEN TASIKMALAYA', '', 32, 1),
(3207, 'KABUPATEN CIAMIS', '', 32, 1),
(3208, 'KABUPATEN KUNINGAN', '', 32, 0),
(3209, 'KABUPATEN CIREBON', '', 32, 1),
(3210, 'KABUPATEN MAJALENGKA', '', 32, 1),
(3211, 'KABUPATEN SUMEDANG', '', 32, 0),
(3212, 'KABUPATEN INDRAMAYU', '', 32, 1),
(3213, 'KABUPATEN SUBANG', '', 32, 0),
(3214, 'KABUPATEN PURWAKARTA', '', 32, 0),
(3215, 'KABUPATEN KARAWANG', '', 32, 0),
(3216, 'KABUPATEN BEKASI', '', 32, 1),
(3217, 'KABUPATEN BANDUNG BARAT', '', 32, 0),
(3218, 'KABUPATEN PANGANDARAN', '', 32, 0),
(3271, 'KOTA BOGOR', '', 32, 0),
(3272, 'KOTA SUKABUMI', '', 32, 1),
(3273, 'KOTA BANDUNG', '', 32, 0),
(3274, 'KOTA CIREBON', '', 32, 1),
(3275, 'KOTA BEKASI', '', 32, 0),
(3276, 'KOTA DEPOK', '', 32, 0),
(3277, 'KOTA CIMAHI', '', 32, 0),
(3278, 'KOTA TASIKMALAYA', '', 32, 1),
(3279, 'KOTA BANJAR', '', 32, 1),
(3301, 'KABUPATEN CILACAP', '', 33, 0),
(3302, 'KABUPATEN BANYUMAS', '', 33, 0),
(3303, 'KABUPATEN PURBALINGGA', '', 33, 0),
(3304, 'KABUPATEN BANJARNEGARA', '', 33, 0),
(3305, 'KABUPATEN KEBUMEN', '', 33, 0),
(3306, 'KABUPATEN PURWOREJO', '', 33, 0),
(3307, 'KABUPATEN WONOSOBO', '', 33, 0),
(3308, 'KABUPATEN MAGELANG', '', 33, 0),
(3309, 'KABUPATEN BOYOLALI', '', 33, 0),
(3310, 'KABUPATEN KLATEN', '', 33, 0),
(3311, 'KABUPATEN SUKOHARJO', '', 33, 0),
(3312, 'KABUPATEN WONOGIRI', '', 33, 0),
(3313, 'KABUPATEN KARANGANYAR', '', 33, 0),
(3314, 'KABUPATEN SRAGEN', '', 33, 0),
(3315, 'KABUPATEN GROBOGAN', '', 33, 0),
(3316, 'KABUPATEN BLORA', '', 33, 0),
(3317, 'KABUPATEN REMBANG', '', 33, 0),
(3318, 'KABUPATEN PATI', '', 33, 0),
(3319, 'KABUPATEN KUDUS', '', 33, 0),
(3320, 'KABUPATEN JEPARA', '', 33, 0),
(3321, 'KABUPATEN DEMAK', '', 33, 0),
(3322, 'KABUPATEN SEMARANG', '', 33, 0),
(3323, 'KABUPATEN TEMANGGUNG', '', 33, 0),
(3324, 'KABUPATEN KENDAL', '', 33, 0),
(3325, 'KABUPATEN BATANG', '', 33, 0),
(3326, 'KABUPATEN PEKALONGAN', '', 33, 1),
(3327, 'KABUPATEN PEMALANG', '', 33, 0),
(3328, 'KABUPATEN TEGAL', '', 33, 0),
(3329, 'KABUPATEN BREBES', '', 33, 0),
(3371, 'KOTA MAGELANG', '', 33, 0),
(3372, 'KOTA SURAKARTA', '', 33, 0),
(3373, 'KOTA SALATIGA', '', 33, 0),
(3374, 'KOTA SEMARANG', '', 33, 0),
(3375, 'KOTA PEKALONGAN', '', 33, 0),
(3376, 'KOTA TEGAL', '', 33, 0),
(3401, 'KABUPATEN KULON PROGO', '', 34, 0),
(3402, 'KABUPATEN BANTUL', '', 34, 0),
(3403, 'KABUPATEN GUNUNG KIDUL', '', 34, 0),
(3404, 'KABUPATEN SLEMAN', '', 34, 0),
(3471, 'KOTA YOGYAKARTA', '', 34, 0),
(3501, 'KABUPATEN PACITAN', '', 35, 0),
(3502, 'KABUPATEN PONOROGO', '', 35, 0),
(3503, 'KABUPATEN TRENGGALEK', '', 35, 0),
(3504, 'KABUPATEN TULUNGAGUNG', '', 35, 0),
(3505, 'KABUPATEN BLITAR', '', 35, 0),
(3506, 'KABUPATEN KEDIRI', '', 35, 0),
(3507, 'KABUPATEN MALANG', '', 35, 1),
(3508, 'KABUPATEN LUMAJANG', '', 35, 0),
(3509, 'KABUPATEN JEMBER', '', 35, 0),
(3510, 'KABUPATEN BANYUWANGI', '', 35, 0),
(3511, 'KABUPATEN BONDOWOSO', '', 35, 0),
(3512, 'KABUPATEN SITUBONDO', '', 35, 0),
(3513, 'KABUPATEN PROBOLINGGO', '', 35, 0),
(3514, 'KABUPATEN PASURUAN', '', 35, 0),
(3515, 'KABUPATEN SIDOARJO', '', 35, 0),
(3516, 'KABUPATEN MOJOKERTO', '', 35, 0),
(3517, 'KABUPATEN JOMBANG', '', 35, 0),
(3518, 'KABUPATEN NGANJUK', '', 35, 0),
(3519, 'KABUPATEN MADIUN', '', 35, 0),
(3520, 'KABUPATEN MAGETAN', '', 35, 0),
(3521, 'KABUPATEN NGAWI', '', 35, 0),
(3522, 'KABUPATEN BOJONEGORO', '', 35, 0),
(3523, 'KABUPATEN TUBAN', '', 35, 0),
(3524, 'KABUPATEN LAMONGAN', '', 35, 0),
(3525, 'KABUPATEN GRESIK', '', 35, 0),
(3526, 'KABUPATEN BANGKALAN', '', 35, 0),
(3527, 'KABUPATEN SAMPANG', '', 35, 0),
(3528, 'KABUPATEN PAMEKASAN', '', 35, 0),
(3529, 'KABUPATEN SUMENEP', '', 35, 0),
(3571, 'KOTA KEDIRI', '', 35, 0),
(3572, 'KOTA BLITAR', '', 35, 0),
(3573, 'KOTA MALANG', '', 35, 0),
(3574, 'KOTA PROBOLINGGO', '', 35, 0),
(3575, 'KOTA PASURUAN', '', 35, 0),
(3576, 'KOTA MOJOKERTO', '', 35, 0),
(3577, 'KOTA MADIUN', '', 35, 0),
(3578, 'KOTA SURABAYA', '', 35, 0),
(3579, 'KOTA BATU', '', 35, 0),
(3601, 'KABUPATEN PANDEGLANG', '', 36, 0),
(3602, 'KABUPATEN LEBAK', '', 36, 0),
(3603, 'KABUPATEN TANGERANG', '', 36, 0),
(3604, 'KABUPATEN SERANG', '', 36, 0),
(3671, 'KOTA TANGERANG', '', 36, 1),
(3672, 'KOTA CILEGON', '', 36, 0),
(3673, 'KOTA SERANG', '', 36, 0),
(3674, 'KOTA TANGERANG SELATAN', '', 36, 0),
(5101, 'KABUPATEN JEMBRANA', '', 51, 0),
(5102, 'KABUPATEN TABANAN', '', 51, 0),
(5103, 'KABUPATEN BADUNG', '', 51, 1),
(5104, 'KABUPATEN GIANYAR', '', 51, 0),
(5105, 'KABUPATEN KLUNGKUNG', '', 51, 0),
(5106, 'KABUPATEN BANGLI', '', 51, 0),
(5107, 'KABUPATEN KARANG ASEM', '', 51, 0),
(5108, 'KABUPATEN BULELENG', '', 51, 0),
(5171, 'KOTA DENPASAR', '', 51, 0),
(5201, 'KABUPATEN LOMBOK BARAT', '', 52, 1),
(5202, 'KABUPATEN LOMBOK TENGAH', '', 52, 1),
(5203, 'KABUPATEN LOMBOK TIMUR', '', 52, 0),
(5204, 'KABUPATEN SUMBAWA', '', 52, 0),
(5205, 'KABUPATEN DOMPU', '', 52, 0),
(5206, 'KABUPATEN BIMA', '', 52, 0),
(5207, 'KABUPATEN SUMBAWA BARAT', '', 52, 1),
(5208, 'KABUPATEN LOMBOK UTARA', '', 52, 1),
(5271, 'KOTA MATARAM', '', 52, 1),
(5272, 'KOTA BIMA', '', 52, 0),
(5301, 'KABUPATEN SUMBA BARAT', '', 53, 0),
(5302, 'KABUPATEN SUMBA TIMUR', '', 53, 0),
(5303, 'KABUPATEN KUPANG', '', 53, 0),
(5304, 'KABUPATEN TIMOR TENGAH SELATAN', '', 53, 0),
(5305, 'KABUPATEN TIMOR TENGAH UTARA', '', 53, 0),
(5306, 'KABUPATEN BELU', '', 53, 0),
(5307, 'KABUPATEN ALOR', '', 53, 0),
(5308, 'KABUPATEN LEMBATA', '', 53, 0),
(5309, 'KABUPATEN FLORES TIMUR', '', 53, 0),
(5310, 'KABUPATEN SIKKA', '', 53, 0),
(5311, 'KABUPATEN ENDE', '', 53, 0),
(5312, 'KABUPATEN NGADA', '', 53, 0),
(5313, 'KABUPATEN MANGGARAI', '', 53, 0),
(5314, 'KABUPATEN ROTE NDAO', '', 53, 0),
(5315, 'KABUPATEN MANGGARAI BARAT', '', 53, 0),
(5316, 'KABUPATEN SUMBA TENGAH', '', 53, 0),
(5317, 'KABUPATEN SUMBA BARAT DAYA', '', 53, 0),
(5318, 'KABUPATEN NAGEKEO', '', 53, 0),
(5319, 'KABUPATEN MANGGARAI TIMUR', '', 53, 0),
(5320, 'KABUPATEN SABU RAIJUA', '', 53, 0),
(5321, 'KABUPATEN MALAKA', '', 53, 0),
(5371, 'KOTA KUPANG', '', 53, 0),
(6101, 'KABUPATEN SAMBAS', '', 61, 0),
(6102, 'KABUPATEN BENGKAYANG', '', 61, 0),
(6103, 'KABUPATEN LANDAK', '', 61, 0),
(6104, 'KABUPATEN MEMPAWAH', '', 61, 0),
(6105, 'KABUPATEN SANGGAU', '', 61, 0),
(6106, 'KABUPATEN KETAPANG', '', 61, 0),
(6107, 'KABUPATEN SINTANG', '', 61, 0),
(6108, 'KABUPATEN KAPUAS HULU', '', 61, 0),
(6109, 'KABUPATEN SEKADAU', '', 61, 0),
(6110, 'KABUPATEN MELAWI', '', 61, 0),
(6111, 'KABUPATEN KAYONG UTARA', '', 61, 0),
(6112, 'KABUPATEN KUBU RAYA', '', 61, 0),
(6171, 'KOTA PONTIANAK', '', 61, 0),
(6172, 'KOTA SINGKAWANG', '', 61, 0),
(6201, 'KABUPATEN KOTAWARINGIN BARAT', '', 62, 0),
(6202, 'KABUPATEN KOTAWARINGIN TIMUR', '', 62, 0),
(6203, 'KABUPATEN KAPUAS', '', 62, 0),
(6204, 'KABUPATEN BARITO SELATAN', '', 62, 0),
(6205, 'KABUPATEN BARITO UTARA', '', 62, 0),
(6206, 'KABUPATEN SUKAMARA', '', 62, 0),
(6207, 'KABUPATEN LAMANDAU', '', 62, 0),
(6208, 'KABUPATEN SERUYAN', '', 62, 0),
(6209, 'KABUPATEN KATINGAN', '', 62, 0),
(6210, 'KABUPATEN PULANG PISAU', '', 62, 0),
(6211, 'KABUPATEN GUNUNG MAS', '', 62, 0),
(6212, 'KABUPATEN BARITO TIMUR', '', 62, 0),
(6213, 'KABUPATEN MURUNG RAYA', '', 62, 0),
(6271, 'KOTA PALANGKA RAYA', '', 62, 0),
(6301, 'KABUPATEN TANAH LAUT', '', 63, 0),
(6302, 'KABUPATEN KOTA BARU', '', 63, 0),
(6303, 'KABUPATEN BANJAR', '', 63, 0),
(6304, 'KABUPATEN BARITO KUALA', '', 63, 0),
(6305, 'KABUPATEN TAPIN', '', 63, 0),
(6306, 'KABUPATEN HULU SUNGAI SELATAN', '', 63, 0),
(6307, 'KABUPATEN HULU SUNGAI TENGAH', '', 63, 0),
(6308, 'KABUPATEN HULU SUNGAI UTARA', '', 63, 0),
(6309, 'KABUPATEN TABALONG', '', 63, 0),
(6310, 'KABUPATEN TANAH BUMBU', '', 63, 0),
(6311, 'KABUPATEN BALANGAN', '', 63, 0),
(6371, 'KOTA BANJARMASIN', '', 63, 0),
(6372, 'KOTA BANJAR BARU', '', 63, 1),
(6401, 'KABUPATEN PASIR', '', 64, 0),
(6402, 'KABUPATEN KUTAI BARAT', '', 64, 0),
(6403, 'KABUPATEN KUTAI KARTANEGARA', '', 64, 0),
(6404, 'KABUPATEN KUTAI TIMUR', '', 64, 0),
(6405, 'KABUPATEN BERAU', '', 64, 0),
(6406, 'KABUPATEN MALINAU', '', 64, 0),
(6407, 'KABUPATEN BULUNGAN', '', 64, 0),
(6408, 'KABUPATEN NUNUKAN', '', 64, 0),
(6409, 'KABUPATEN PENAJAM PASER UTARA', '', 64, 0),
(6410, 'KABUPATEN TANA TIDUNG', '', 64, 0),
(6411, 'KABUPATEN MAHAKAM HULU', '', 64, 0),
(6471, 'KOTA BALIKPAPAN', '', 64, 0),
(6472, 'KOTA SAMARINDA', '', 64, 0),
(6473, 'KOTA TARAKAN', '', 64, 0),
(6474, 'KOTA BONTANG', '', 64, 0),
(7101, 'KABUPATEN BOLAANG MONGONDOW', '', 71, 0),
(7102, 'KABUPATEN MINAHASA', '', 71, 0),
(7103, 'KABUPATEN KEPULAUAN SANGIHE', '', 71, 0),
(7104, 'KABUPATEN KEPULAUAN TALAUD', '', 71, 0),
(7105, 'KABUPATEN MINAHASA SELATAN', '', 71, 0),
(7106, 'KABUPATEN MINAHASA UTARA', '', 71, 0),
(7107, 'KABUPATEN BOLAANG MONGONDOW UTARA', '', 71, 0),
(7108, 'KABUPATEN SIAU TAGULANDANG BIARO', '', 71, 0),
(7109, 'KABUPATEN MINAHASA TENGGARA', '', 71, 0),
(7110, 'KABUPATEN BOLAANG MONGONDOW SELATAN', '', 71, 0),
(7111, 'KABUPATEN BOLAANG MONGONDOW TIMUR', '', 71, 0),
(7171, 'KOTA MANADO', '', 71, 1),
(7172, 'KOTA BITUNG', '', 71, 0),
(7173, 'KOTA TOMOHON', '', 71, 0),
(7174, 'KOTA KOTAMOBAGU', '', 71, 0),
(7201, 'KABUPATEN BANGGAI KEPULAUAN', '', 72, 0),
(7202, 'KABUPATEN BANGGAI', '', 72, 0),
(7203, 'KABUPATEN MOROWALI', '', 72, 0),
(7204, 'KABUPATEN POSO', '', 72, 0),
(7205, 'KABUPATEN DONGGALA', '', 72, 0),
(7206, 'KABUPATEN TOLI-TOLI', '', 72, 0),
(7207, 'KABUPATEN BUOL', '', 72, 0),
(7208, 'KABUPATEN PARIGI MOUTONG', '', 72, 0),
(7209, 'KABUPATEN TOJO UNA-UNA', '', 72, 0),
(7210, 'KABUPATEN SIGI', '', 72, 0),
(7211, 'KABUPATEN BANGGAI LAUT', '', 72, 0),
(7212, 'KABUPATEN MOROWALI UTARA', '', 72, 0),
(7271, 'KOTA PALU', '', 72, 0),
(7301, 'KABUPATEN KEPULAUAN SELAYAR', '', 73, 0),
(7302, 'KABUPATEN BULUKUMBA', '', 73, 0),
(7303, 'KABUPATEN BANTAENG', '', 73, 0),
(7304, 'KABUPATEN JENEPONTO', '', 73, 0),
(7305, 'KABUPATEN TAKALAR', '', 73, 0),
(7306, 'KABUPATEN GOWA', '', 73, 0),
(7307, 'KABUPATEN SINJAI', '', 73, 0),
(7308, 'KABUPATEN MAROS', '', 73, 0),
(7309, 'KABUPATEN PANGKAJENE DAN KEPULAUAN', '', 73, 0),
(7310, 'KABUPATEN BARRU', '', 73, 0),
(7311, 'KABUPATEN BONE', '', 73, 0),
(7312, 'KABUPATEN SOPPENG', '', 73, 0),
(7313, 'KABUPATEN WAJO', '', 73, 0),
(7314, 'KABUPATEN SIDENRENG RAPPANG', '', 73, 0),
(7315, 'KABUPATEN PINRANG', '', 73, 0),
(7316, 'KABUPATEN ENREKANG', '', 73, 0),
(7317, 'KABUPATEN LUWU', '', 73, 0),
(7318, 'KABUPATEN TANA TORAJA', '', 73, 0),
(7322, 'KABUPATEN LUWU UTARA', '', 73, 0),
(7325, 'KABUPATEN LUWU TIMUR', '', 73, 0),
(7326, 'KABUPATEN TORAJA UTARA', '', 73, 0),
(7371, 'KOTA MAKASSAR', '', 73, 0),
(7372, 'KOTA PAREPARE', '', 73, 0),
(7373, 'KOTA PALOPO', '', 73, 0),
(7401, 'KABUPATEN BUTON', '', 74, 0),
(7402, 'KABUPATEN MUNA', '', 74, 0),
(7403, 'KABUPATEN KONAWE', '', 74, 0),
(7404, 'KABUPATEN KOLAKA', '', 74, 0),
(7405, 'KABUPATEN KONAWE SELATAN', '', 74, 0),
(7406, 'KABUPATEN BOMBANA', '', 74, 0),
(7407, 'KABUPATEN WAKATOBI', '', 74, 0),
(7408, 'KABUPATEN KOLAKA UTARA', '', 74, 0),
(7409, 'KABUPATEN BUTON UTARA', '', 74, 0),
(7410, 'KABUPATEN KONAWE UTARA', '', 74, 0),
(7411, 'KABUPATEN KOLAKA TIMUR', '', 74, 0),
(7412, 'KABUPATEN KONAWE KEPULAUAN', '', 74, 0),
(7413, 'KABUPATEN MUNA BARAT', '', 74, 0),
(7414, 'KABUPATEN BUTON TENGAH', '', 74, 0),
(7415, 'KABUPATEN BUTON SELATAN', '', 74, 0),
(7471, 'KOTA KENDARI', '', 74, 0),
(7472, 'KOTA BAUBAU', '', 74, 0),
(7501, 'KABUPATEN BOALEMO', '', 75, 0),
(7502, 'KABUPATEN GORONTALO', '', 75, 0),
(7503, 'KABUPATEN POHUWATO', '', 75, 0),
(7504, 'KABUPATEN BONE BOLANGO', '', 75, 0),
(7505, 'KABUPATEN GORONTALO UTARA', '', 75, 0),
(7571, 'KOTA GORONTALO', '', 75, 0),
(7601, 'KABUPATEN MAJENE', '', 76, 0),
(7602, 'KABUPATEN POLEWALI MANDAR', '', 76, 0),
(7603, 'KABUPATEN MAMASA', '', 76, 0),
(7604, 'KABUPATEN MAMUJU', '', 76, 0),
(7605, 'KABUPATEN MAMUJU UTARA', '', 76, 0),
(7606, 'KABUPATEN MAMUJU TENGAH', '', 76, 0),
(8101, 'KABUPATEN MALUKU TENGGARA BARAT', '', 81, 0),
(8102, 'KABUPATEN MALUKU TENGGARA', '', 81, 0),
(8103, 'KABUPATEN MALUKU TENGAH', '', 81, 0),
(8104, 'KABUPATEN BURU', '', 81, 0),
(8105, 'KABUPATEN KEPULAUAN ARU', '', 81, 0),
(8106, 'KABUPATEN SERAM BAGIAN BARAT', '', 81, 0),
(8107, 'KABUPATEN SERAM BAGIAN TIMUR', '', 81, 0),
(8108, 'KABUPATEN MALUKU BARAT DAYA', '', 81, 0),
(8109, 'KABUPATEN BURU SELATAN', '', 81, 0),
(8171, 'KOTA AMBON', '', 81, 1),
(8172, 'KOTA TUAL', '', 81, 0),
(8201, 'KABUPATEN HALMAHERA BARAT', '', 82, 0),
(8202, 'KABUPATEN HALMAHERA TENGAH', '', 82, 0),
(8203, 'KABUPATEN KEPULAUAN SULA', '', 82, 0),
(8204, 'KABUPATEN HALMAHERA SELATAN', '', 82, 0),
(8205, 'KABUPATEN HALMAHERA UTARA', '', 82, 0),
(8206, 'KABUPATEN HALMAHERA TIMUR', '', 82, 0),
(8207, 'KABUPATEN PULAU MOROTAI', '', 82, 0),
(8208, 'KABUPATEN PULAU TALIABU', '', 82, 0),
(8271, 'KOTA TERNATE', '', 82, 0),
(8272, 'KOTA TIDORE KEPULAUAN', '', 82, 0),
(9101, 'KABUPATEN FAKFAK', '', 91, 0),
(9102, 'KABUPATEN KAIMANA', '', 91, 0),
(9103, 'KABUPATEN TELUK WONDAMA', '', 91, 0),
(9104, 'KABUPATEN TELUK BINTUNI', '', 91, 0),
(9105, 'KABUPATEN MANOKWARI', '', 91, 0),
(9106, 'KABUPATEN SORONG SELATAN', '', 91, 0),
(9107, 'KABUPATEN SORONG', '', 91, 0),
(9108, 'KABUPATEN RAJA AMPAT', '', 91, 0),
(9109, 'KABUPATEN TAMBRAUW', '', 91, 0),
(9110, 'KABUPATEN MAYBRAT', '', 91, 0),
(9111, 'KABUPATEN MANOKWARI SELATAN', '', 91, 0),
(9112, 'KABUPATEN PEGUNUNGAN ARFAK', '', 91, 0),
(9171, 'KOTA SORONG', '', 91, 0),
(9401, 'KABUPATEN MERAUKE', '', 94, 0),
(9402, 'KABUPATEN JAYAWIJAYA', '', 94, 0),
(9403, 'KABUPATEN JAYAPURA', '', 94, 0),
(9404, 'KABUPATEN NABIRE', '', 94, 0),
(9408, 'KABUPATEN KEPULAUAN YAPEN', '', 94, 0),
(9409, 'KABUPATEN BIAK NUMFOR', '', 94, 0),
(9410, 'KABUPATEN PANIAI', '', 94, 0),
(9411, 'KABUPATEN PUNCAK JAYA', '', 94, 0),
(9412, 'KABUPATEN MIMIKA', '', 94, 0),
(9413, 'KABUPATEN BOVEN DIGOEL', '', 94, 0),
(9414, 'KABUPATEN MAPPI', '', 94, 0),
(9415, 'KABUPATEN ASMAT', '', 94, 0),
(9416, 'KABUPATEN YAHUKIMO', '', 94, 0),
(9417, 'KABUPATEN PEGUNUNGAN BINTANG', '', 94, 0),
(9418, 'KABUPATEN TOLIKARA', '', 94, 0),
(9419, 'KABUPATEN SARMI', '', 94, 0),
(9420, 'KABUPATEN KEEROM', '', 94, 0),
(9426, 'KABUPATEN WAROPEN', '', 94, 0),
(9427, 'KABUPATEN SUPIORI', '', 94, 0),
(9428, 'KABUPATEN MAMBERAMO RAYA', '', 94, 0),
(9429, 'KABUPATEN NDUGA', '', 94, 0),
(9430, 'KABUPATEN LANNY JAYA', '', 94, 0),
(9431, 'KABUPATEN MAMBERAMO TENGAH', '', 94, 0),
(9432, 'KABUPATEN YALIMO', '', 94, 0),
(9433, 'KABUPATEN PUNCAK', '', 94, 0),
(9434, 'KABUPATEN DOGIYAI', '', 94, 0),
(9471, 'KOTA JAYAPURA', '', 94, 0);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(10) UNSIGNED NOT NULL,
  `name_level` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `name_level`) VALUES
(1, 'Super Admin'),
(2, 'Admin Provinsi'),
(3, 'Admin Kabupaten/Kota'),
(4, 'Pengguna Provinsi'),
(5, 'Pengguna Kabupaten/Kota');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2018_06_21_064204_create_levels_table', 1),
(23, '2018_06_21_064237_create_jabatans_table', 1),
(24, '2018_06_21_064255_create_provinsis_table', 1),
(25, '2018_06_21_064309_create_kabupatens_table', 1),
(26, '2018_06_21_064322_create_satdas_table', 1),
(27, '2018_06_21_064325_create_perdas_table', 1),
(28, '2018_06_21_064338_create_skpds_table', 1),
(29, '2018_06_21_064340_create_otdas_table', 1),
(30, '2018_06_21_064414_create_indikators_table', 1),
(31, '2018_06_21_064430_create_pencapaians_table', 1),
(32, '2018_06_25_045131_add_provinsi_id_to_kabupaten', 1),
(33, '2018_06_25_045133_add_provinsi_id_and_kabupaten_id_to_satda', 1),
(34, '2018_06_25_045230_add_satda_id_to_skpd', 1),
(35, '2018_06_25_045233_add_perda_id_to_skpd', 1),
(36, '2018_06_25_045533_add_skpd_id_to_indikator', 1),
(37, '2018_06_25_045614_add_indikator_id_to_pencapaian', 1),
(38, '2018_06_25_050053_add_foreign_to_user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `otda`
--

CREATE TABLE `otda` (
  `id_otda` int(10) UNSIGNED NOT NULL,
  `name_otda` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `otda`
--

INSERT INTO `otda` (`id_otda`, `name_otda`) VALUES
(0, 'Indikator Satda'),
(1, 'Economy'),
(2, 'Education'),
(3, 'Health'),
(4, 'Safety'),
(5, 'Urban Planning'),
(6, 'Social Equity');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_page` int(10) UNSIGNED NOT NULL,
  `name_page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `name_page`, `kategori`) VALUES
(1, 'Data Perizinan', 'Perizinan'),
(2, 'Data Status Perizinan', 'Perizinan'),
(3, 'IKU Status Perizinan Selesai', 'Perizinan'),
(4, 'Data Pertumbuhan Penduduk', 'Kependudukan'),
(5, 'Data Pertumbuhan Keluarga', 'Kependudukan'),
(6, 'Data Usia Penduduk', 'Kependudukan'),
(7, 'Data Rasio Gender Penduduk', 'Kependudukan'),
(8, 'Data Penyebaran Pekerjaan Penduduk', 'Kependudukan'),
(9, 'Data Penyebaran Tingkat Pendidikan Penduduk', 'Kependudukan'),
(10, 'Data Kemiskinan (Simsaraswati)', 'Kemiskinan'),
(11, 'Data Kemiskinan (BPS)', 'Kemiskinan'),
(12, 'IKU Angka Kemiskinan (Simsaraswati)', 'Kemiskinan');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hafiezar@outlook.com', '$2y$10$ElK5lQ06uDKKAiZv//uqSe80BWIHNysamKuXFSnImst6mSa2FTnWm', '2018-12-12 00:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `pencapaian`
--

CREATE TABLE `pencapaian` (
  `id_pencapaian` int(10) UNSIGNED NOT NULL,
  `indikator_id` int(10) UNSIGNED NOT NULL,
  `target_pencapaian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_pencapaian` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perda`
--

CREATE TABLE `perda` (
  `id_perda` int(10) UNSIGNED NOT NULL,
  `name_perda` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perda`
--

INSERT INTO `perda` (`id_perda`, `name_perda`) VALUES
(1, 'DINAS'),
(2, 'BADAN'),
(3, 'LEMBAGA'),
(4, 'SATPOL PP'),
(5, 'SETDA'),
(6, 'INSPEKTORAT'),
(7, 'LEMBAGA TEKNIS DAERAH'),
(8, 'KOTA ADMINISTRASI'),
(9, 'KABUPATEN ADMINISTRASI'),
(10, 'LEMBAGA LAIN'),
(11, 'PERUSAHAAN DAERAH'),
(12, 'DPRD'),
(13, 'BAGIAN');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_provinsi` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `logo_provinsi`) VALUES
(11, 'NANGGROE ACEH DARUSSALAM', ''),
(12, 'SUMATERA UTARA', ''),
(13, 'SUMATERA BARAT', ''),
(14, 'RIAU', ''),
(15, 'JAMBI', ''),
(16, 'SUMATERA SELATAN', ''),
(17, 'BENGKULU', ''),
(18, 'LAMPUNG', ''),
(19, 'KEP. BANGKA BELITUNG', ''),
(21, 'KEP. RIAU', ''),
(31, 'DKI JAKARTA', ''),
(32, 'JAWA BARAT', ''),
(33, 'JAWA TENGAH', ''),
(34, 'DI YOGYAKARTA', ''),
(35, 'JAWA TIMUR', ''),
(36, 'BANTEN', ''),
(51, 'BALI', ''),
(52, 'NUSA TENGGARA BARAT', ''),
(53, 'NUSA TENGGARA TIMUR', ''),
(61, 'KALIMANTAN BARAT', ''),
(62, 'KALIMANTAN TENGAH', ''),
(63, 'KALIMANTAN SELATAN', ''),
(64, 'KALIMANTAN TIMUR', ''),
(71, 'SULAWESI UTARA', ''),
(72, 'SULAWESI TENGAH', ''),
(73, 'SULAWESI SELATAN', ''),
(74, 'SULAWESI TENGGARA', ''),
(75, 'GORONTALO', ''),
(76, 'SULAWESI BARAT', ''),
(81, 'MALUKU', ''),
(82, 'MALUKU UTARA', ''),
(91, 'PAPUA BARAT', ''),
(94, 'PAPUA', '');

-- --------------------------------------------------------

--
-- Table structure for table `satda`
--

CREATE TABLE `satda` (
  `id_satda` int(10) UNSIGNED NOT NULL,
  `name_satda` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_satda_id` int(10) NOT NULL,
  `provinsi_id` int(10) UNSIGNED DEFAULT NULL,
  `kabupaten_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `satda`
--

INSERT INTO `satda` (`id_satda`, `name_satda`, `kategori_satda_id`, `provinsi_id`, `kabupaten_id`) VALUES
(3101, 'Sekretariat Daerah', 1, 31, NULL),
(3102, 'Sekretariat DPRD', 1, 31, NULL),
(3103, 'Inspektorat', 1, 31, NULL),
(3104, 'Dinas Daerah', 1, 31, NULL),
(3105, 'Badan Daerah', 1, 31, NULL),
(3106, 'Kota Administrasi', 1, 31, NULL),
(3107, 'Kabupaten Administrasi', 1, 31, NULL),
(3108, 'Satpol PP', 1, 31, NULL),
(7301, 'Sekretariat Daerah', 2, NULL, 3273),
(7302, 'Badan Daerah', 2, NULL, 3273),
(7303, 'Dinas Daerah', 2, NULL, 3273),
(7304, 'Inspektorat', 2, NULL, 3273),
(7305, 'Pers. Daerah', 2, NULL, 3273),
(7306, 'Satpol PP', 2, NULL, 3273),
(7307, 'Sekretariat DPRD', 2, NULL, 3273),
(331401, 'Inspektorat', 2, NULL, 3314),
(331402, 'Sekretaris daerah', 2, NULL, 3314),
(331403, 'Badan Daerah', 2, NULL, 3314),
(331404, 'Dinas Daerah', 2, NULL, 3314),
(331405, 'Perusahaan Daerah', 2, NULL, 3314),
(331406, 'Bagian Daerah', 2, NULL, 3314);

-- --------------------------------------------------------

--
-- Table structure for table `satda_kategori`
--

CREATE TABLE `satda_kategori` (
  `id_satda_kategori` int(10) NOT NULL,
  `name_kategori_satda` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satda_kategori`
--

INSERT INTO `satda_kategori` (`id_satda_kategori`, `name_kategori_satda`) VALUES
(1, 'Provinsi'),
(2, 'Kabupaten/Kota');

-- --------------------------------------------------------

--
-- Table structure for table `skpd`
--

CREATE TABLE `skpd` (
  `id_skpd` int(10) UNSIGNED NOT NULL,
  `name_skpd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `satda_id` int(10) UNSIGNED NOT NULL,
  `perda_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skpd`
--

INSERT INTO `skpd` (`id_skpd`, `name_skpd`, `status`, `satda_id`, `perda_id`) VALUES
(31011, 'Dinas Kependudukan dan Pencatatan Sipil', 0, 3104, 1),
(31012, 'Dinas Penanggulangan Kebakaran dan Penyelamatan', 0, 3104, 1),
(31013, 'Dinas Komunikasi, Informatika dan Kehumasan', 0, 3104, 1),
(31014, 'Dinas Koperasi, Usaha Mikro, Kecil dan Menengah, serta Perdagangan', 0, 3104, 1),
(31015, 'Dinas Perindustrian dan Energi', 0, 3104, 1),
(31016, 'Dinas Kelautan, Pertanian dan Ketahanan Pangan', 0, 3104, 1),
(31017, 'Dinas Pariwisata dan Kebudayaan', 0, 3104, 1),
(31018, 'Dinas Perhubungan dan Transportasi', 0, 3104, 1),
(31019, 'Dinas Tenaga Kerja dan Transmigrasi', 0, 3104, 1),
(31020, 'Dinas Bina Marga', 0, 3104, 1),
(31021, 'Dinas Perumahan dan Gedung Pemerintah Daerah', 0, 3104, 1),
(31022, 'Dinas Penataan Kota', 0, 3104, 1),
(31023, 'Dinas Pertamanan dan Pemakaman', 0, 3104, 1),
(31024, 'Dinas Kebersihan', 0, 3104, 1),
(31025, 'Dinas Sosial', 0, 3104, 1),
(31026, 'Dinas Pendidikan', 0, 3104, 1),
(31027, 'Dinas Kesehatan', 0, 3104, 1),
(31028, 'Dinas Olahraga dan Pemuda', 0, 3104, 1),
(31029, 'Dinas Pelayanan Pajak', 0, 3104, 1),
(31030, 'Badan Pengelola Keuangan dan Aset Daerah', 0, 3105, 2),
(31031, 'Badan Kepegawaian Daerah', 0, 3105, 2),
(31032, 'Badan Kesatuan Bangsa dan Politik', 0, 3105, 2),
(31033, 'Badan Pendidikan dan Pelatihan', 0, 3105, 2),
(31034, 'Badan Pembinaan Badan Usaha Milik Daerah dan Penanaman Modal', 0, 3105, 2),
(31035, 'Badan Pengelola Lingkungan Hidup Daerah', 0, 3105, 2),
(31036, 'Badan Pemberdayaan Masyarakat dan Perempuan dan Keluarga Berencana', 0, 3105, 2),
(31037, 'Badan Perpustakaan dan Arsip Daerah', 0, 3105, 2),
(31038, 'RSUD Budhi Asih', 0, 3105, 7),
(31039, 'RSUD Tarakan', 0, 3105, 7),
(31040, 'RSUD Cengkareng', 0, 3105, 7),
(31041, 'RSUD Pasar Rebo', 0, 3105, 7),
(31042, 'RSUD Koja', 0, 3105, 7),
(31043, 'RSUD Pasar Minggu', 0, 3105, 7),
(31044, 'RSKD Duren Sawit\r\n', 0, 3105, 7),
(31045, 'Kantor Pengelola Kawasan Monumen Nasional', 0, 3105, 2),
(31046, 'Kantor Pengelola Taman Margasatwa Ragunan', 0, 3105, 1),
(31047, 'Sekretariat Dewan Pengurus KORPRI', 0, 3105, 3),
(31048, 'Badan Penanggulangan Bencana Daerah', 0, 3105, 2),
(31049, 'Badan Pelayanan Terpadu Satu Pintu', 0, 3105, 2),
(31050, 'Badan Pelayanan Pengadaan Barang/Jasa', 0, 3105, 2),
(31051, 'Kota Administasi Pusat', 0, 3106, 8),
(31052, 'Kota Administasi Utara', 0, 3106, 8),
(31053, 'Kota Administasi Barat', 0, 3106, 8),
(31054, 'Kota Administasi Selatan', 0, 3106, 8),
(31055, 'Kota Administasi Timur', 0, 3106, 8),
(31056, 'Kabupaten Administrasi Kepulauan Seribu', 0, 3107, 9),
(31057, 'Satpol PP', 0, 3108, 4),
(31058, 'Asisten Pemerintahan', 0, 3101, 5),
(31059, 'Asisten Perekonomian dan Keuangan', 0, 3101, 5),
(31060, 'Asisten Pembangunan dan Lingkungan Hidup', 0, 3101, 5),
(31061, 'Asisten Kesejahteraan Rakyat', 0, 3101, 5),
(31062, 'Inspektorat Provinsi DKI Jakarta', 0, 3103, 6),
(31063, 'Inspektorat Pembantu Kota Administrasi', 0, 3103, 6),
(73011, 'Asisten Administrasi Umum dan Kepegawaian', 0, 7301, 5),
(73012, 'Asisten Pemerintahan dan Kesra', 0, 7301, 5),
(73013, 'Asisten Perekonomian dan Pembangunan', 0, 7301, 5),
(73014, 'Badan Kepegawaian, Pendidikan dan Pelatihan', 0, 7302, 2),
(73015, 'Badan Kesatuan Bangsa dan Politik', 0, 7302, 2),
(73016, 'Badan Pengelolaan Keuangan dan Aset', 0, 7302, 2),
(73017, 'Badan Pengelolaan Pendapatan Daerah', 0, 7302, 2),
(73018, 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan', 0, 7302, 2),
(73019, 'Bagian Hukum', 0, 7301, 5),
(73020, 'Bagian Humas', 0, 7301, 5),
(73021, 'Bagian Kerjasama', 0, 7301, 5),
(73022, 'Bagian Kesejahteraan Rakyat dan Kemasyarakatan', 0, 7301, 5),
(73023, 'Bagian Layanan Pengadaan Barang dan Jasa', 0, 7301, 5),
(73024, 'Bagian Organisasi dan Pemberdayaan Aparatur Daerah', 0, 7301, 5),
(73025, 'Bagian Pemerintahan', 0, 7301, 5),
(73026, 'Bagian Perekenonomian', 0, 7301, 5),
(73027, 'Bagian Program Desain dan Kwalitas Pembangunan', 0, 7301, 5),
(73028, 'Bagian TU dan Kepegawaian', 0, 7301, 5),
(73029, 'Bagian Umum', 0, 7301, 5),
(73030, 'Dinas Kebakaran dan Penanggulangan Bencana', 0, 7303, 1),
(73031, 'Dinas Kebudayaan dan Pariwisata', 0, 7303, 1),
(73032, 'Dinas Kependudukan dan Pencatatan Sipil', 0, 7303, 1),
(73033, 'Dinas Kesehatan', 0, 7303, 1),
(73034, 'Dinas Komunikasi dan Informatika', 0, 7303, 1),
(73035, 'Dinas Koperasi,Usaha Mikro Kecil dan Menengah', 0, 7303, 1),
(73036, 'Dinas Lingkungan Hidup dan Kebersihan', 0, 7303, 1),
(73037, 'Dinas Pangan dan Pertanian', 0, 7303, 1),
(73038, 'Dinas Pekerjaan Umum', 0, 7303, 1),
(73039, 'Dinas Pemberdayaan Perempuan, Perlindungan anak dan Pemberdayaan Masyarakat', 0, 7303, 1),
(73040, 'Dinas Pemuda dan Olah Raga', 0, 7303, 1),
(73041, 'Dinas Penanaman Modal dan PTSP', 0, 7303, 1),
(73042, 'Dinas Penataan Ruang', 0, 7303, 1),
(73043, 'Dinas Pendidikan', 0, 7303, 1),
(73044, 'Dinas Pengendalian Penduduk dan KB', 0, 7303, 1),
(73045, 'Dinas Perdagangan Dan Perindustrian', 0, 7303, 1),
(73046, 'Dinas Perhubungan', 0, 7303, 1),
(73047, 'Dinas Perpustakaan dan Kearsipan', 0, 7303, 1),
(73048, 'Dinas Perumahan dan Kawasan Pemukiman, Pertanahan dan Pertamanan', 0, 7303, 1),
(73049, 'Dinas Sosial dan Penanggulangan Kemiskinan', 0, 7303, 1),
(73050, 'Dinas Tenaga Kerja', 0, 7303, 1),
(73051, 'Inspektorat', 0, 7304, 6),
(73052, 'Rumah Sakit Khusus Gigi dan Mulut Kota Bandung', 0, 7305, 11),
(73053, 'Rumah Sakit Khusus Ibu dan Anak', 0, 7305, 11),
(73054, 'Rumah Sakit Umum Daerah Kota Bandung', 0, 7305, 11),
(73055, 'Satuan Polisi Pamong Praja', 0, 7306, 4),
(73056, 'Sekretariat Dewan Perwakilan Rakyat Kota Bandung', 0, 7307, 1),
(73058, 'Inspektur', 0, 331401, 6),
(73060, 'Sekretaris Dearah', 0, 331402, 5),
(73061, 'ASISTEN PEMERINTAHAN DAN KESRA SETDA', 0, 331402, 5),
(73062, 'ASISTEN PEREKONOMIAN DAN PEMBANGUNAN SETDA', 0, 331402, 5),
(73063, 'ASISTEN ADMINISTRASI UMUM SETDA', 0, 331402, 5),
(73064, 'STAF AHLI BUPATI BIDANG PEMERINTAHAN, HUKUM DAN POLITIK', 0, 331402, 5),
(73065, 'STAF AHLI BUPATI BIDANG KEMASYARAKATAN DAN SUMBER DAYA MANUSIA', 0, 331402, 5),
(73066, 'STAFF AHLI BUPATI BIDANG EKONOMI, KEUANGAN DAN PEMBANGUNAN', 0, 331402, 5),
(73067, 'Badan Perencanaan Pembangunan Daerah, Penelitian dan Pengembangan (BAPPEDA LITBANG)', 0, 331403, 2),
(73068, 'Badan Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP)', 0, 331403, 2),
(73069, 'Badan Kepegawaian Daerah (BKD)', 0, 331403, 2),
(73070, 'Badan Kesatuan Bangsa, Politik dan Perlindungan Masyarakat (KESBANGPOLINMAS)', 0, 331403, 2),
(73071, 'Badan Pendapatan Pengelolaan Keuangan dan Aset Daerah (BPPKAD)', 0, 331403, 2),
(73073, 'Badan Pengendalian Penduduk, KB dan Pembangunan Masyarakat Desa (PPKBPMD)', 0, 331403, 2),
(73074, 'Dinas Komunikasi dan Informatika', 0, 331404, 1),
(73075, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu (DPMPTSP)', 0, 331404, 1),
(73076, 'Dinas Kependudukan dan Pencatatan Sipil', 0, 331404, 1),
(73077, 'Dinas Perindustrian dan Perdagangan', 0, 331404, 1),
(73078, 'Dinas Koperasi, Usaha Kecil dan Menengah', 0, 331404, 1),
(73079, 'Dinas Sosial', 0, 331404, 1),
(73080, 'Dinas Pertanian', 0, 331404, 1),
(73081, 'Dinas Peternakan Perikanan', 0, 331404, 1),
(73082, 'Dinas Perhubungan', 0, 331404, 1),
(73083, 'Dinas Pemberdayaan Masyarakat Dan Desa (PMD)', 0, 331404, 1),
(73084, 'Dinas Pemuda Olahraga dan Pariwisata', 0, 331404, 1),
(73085, 'Dinas Ketahanan Pangan', 0, 331404, 1),
(73086, 'Dinas Pendidikan', 0, 331404, 1),
(73087, 'Dinas Kesehatan', 0, 331404, 1),
(73088, 'Dinas Tenaga Kerja', 0, 331404, 1),
(73089, 'Dinas Perumahan dan Kawasan Permukiman', 0, 331404, 1),
(73090, 'Dinas Lingkungan Hidup', 0, 331404, 1),
(73091, 'Dinas PU dan Penataan Ruang', 0, 331404, 1),
(73092, 'BAGIAN KESRA', 0, 331406, 13),
(73093, 'BAGIAN PEMERINTAHAN DESA', 0, 331406, 13),
(73094, 'BAGIAN HUKUM', 0, 331406, 13),
(73095, 'BAGIAN PEREKONOMIAN', 0, 331406, 13),
(73096, 'BAGIAN ORGANISASI DAN KEPEGAWAIAN', 0, 331406, 13),
(73097, 'BAGIAN UMUM DAN KEUANGAN', 0, 331406, 13),
(73098, 'BAGIAN Pemerintahan dan Pertanahan', 0, 331406, 13),
(73099, 'BAGIAN ADMINISTRASI PEMBANGUNAN', 0, 331406, 13),
(73100, 'BAGIAN HUMAS DAN PROTOKOL', 0, 331406, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tableau`
--

CREATE TABLE `tableau` (
  `id_tableau` int(11) NOT NULL,
  `username` varchar(190) NOT NULL,
  `password` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableau`
--

INSERT INTO `tableau` (`id_tableau`, `username`, `password`) VALUES
(1, 'smartcity_publisher', '16c6ef955dd6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `provinsi_id` int(10) UNSIGNED NOT NULL,
  `kabupaten_id` int(10) UNSIGNED NOT NULL,
  `satda_id` int(10) UNSIGNED DEFAULT NULL,
  `skpd_id` int(10) UNSIGNED DEFAULT NULL,
  `jabatan_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nip`, `phone`, `create_by`, `editor_by`, `remember_token`, `created_at`, `updated_at`, `level_id`, `provinsi_id`, `kabupaten_id`, `satda_id`, `skpd_id`, `jabatan_id`) VALUES
(1, 'smartcitynusantara2018', 'smartcitynusantara2018@gmail.com', '$2y$10$nvMd60H4yAxO3M12QMDE8usAn71l9F815KA/bhyLIvBnO2jhCc8WW', '', '', NULL, NULL, 'u6FYapd79LoI8CZi8K6om0mrB1eXiRM8O2soWbOwC7xSIgIbnIKhPRxBQ4Xr', NULL, NULL, 1, 33, 3314, 331401, 73074, NULL),
(2, 'Hafiezar', 'hafiezraharjo@gmail.com', '$2y$10$jWr1oU0oSr3nm7RF5OcvwOtRo.L22kRUiUYKNPgb6Vp7f3EsCL17C', '3175062707950001', '081287257676', NULL, NULL, 'eXnZcli36G7hRfC0Ymo49n5Oplb4tt1waIxLH7DWdF6a5EbOeHTI3MjTjzM5', NULL, '2019-05-16 19:11:20', 3, 33, 3314, 331401, 73074, NULL),
(3, 'Ilham Ananto Yuwono', 'ilham.ay@telkom.co.id', '$2y$10$YJD1GX3wuyg2Ivut.WqJwe.FNirJC7eXLCgGlQmZ7v52PH.ePe9em', '3175062707951100', '081287257777', NULL, NULL, 'vjcN7WTvSFRD3mVtWa1FOJd05mBBU45NB3BEi88uUCBWu7MOlhwSXPypX3xo', '2018-11-04 04:14:06', '2018-11-04 04:14:06', 3, 33, 3314, 331401, 73074, NULL),
(4, 'Agung', 'goeng@telkom.co.id', '$2y$10$PHKCr.GM8TBC.vci9TYTyOVoK1Vfp6D6AcrSIJsIL9wQtvoLNfJbe', '3175062707951111', '081287257070', NULL, NULL, 'SJcLujPhPDhVRqrqCxotiPOeHZEj8DdTzoPkSKzZPaijsFV0VGPWV1D0ujVJ', '2018-11-04 04:18:12', '2019-01-15 00:48:20', 3, 33, 3314, 331401, 73074, NULL),
(5, 'Kominfo Sragen', 'smartcity@sragenkab.go.id', '$2y$10$U1Xpt2/SKk3Pvfpo0jvEQuuc3v1.gvH/rAG5Zq83T4Fj06Ttuuogy', '', '', NULL, NULL, 'uzcIGviM9oSwFkMwHg0zFjbtc71U8LjMA0NTRIe3VnYH25WWJNVBh8XjRa0c', NULL, '2019-01-23 20:48:35', 3, 33, 3314, 331401, 73074, NULL),
(6, 'Joe', 'hafiez.source@gmail.com', '$2y$10$K1Oh8wp2zXmDo4sc33chfu..q4Bisus3.TJGFs0Ymz8vlELe8LD9i', '3175062707950003', '0896989386069', NULL, NULL, NULL, '2019-01-27 23:22:20', '2019-01-27 23:22:20', 5, 33, 3314, 331404, 73074, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_access`
--
ALTER TABLE `history_access`
  ADD PRIMARY KEY (`id_access`),
  ADD KEY `history_access_user_id_foreign` (`user_id`),
  ADD KEY `history_access_page_id_foreign` (`page_id`);

--
-- Indexes for table `history_login`
--
ALTER TABLE `history_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `history_login_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id_indikator`),
  ADD KEY `indikator_skpd_id_foreign` (`skpd_id`),
  ADD KEY `indikator_otda_id_foreign` (`otda_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`),
  ADD KEY `kabupaten_provinsi_id_foreign` (`provinsi_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otda`
--
ALTER TABLE `otda`
  ADD PRIMARY KEY (`id_otda`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pencapaian`
--
ALTER TABLE `pencapaian`
  ADD PRIMARY KEY (`id_pencapaian`),
  ADD KEY `pencapaian_indikator_id_foreign` (`indikator_id`);

--
-- Indexes for table `perda`
--
ALTER TABLE `perda`
  ADD PRIMARY KEY (`id_perda`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `satda`
--
ALTER TABLE `satda`
  ADD PRIMARY KEY (`id_satda`),
  ADD KEY `satda_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `satda_kabupaten_id_foreign` (`kabupaten_id`),
  ADD KEY `satda_kategori_satda_id_foreign` (`kategori_satda_id`);

--
-- Indexes for table `satda_kategori`
--
ALTER TABLE `satda_kategori`
  ADD PRIMARY KEY (`id_satda_kategori`);

--
-- Indexes for table `skpd`
--
ALTER TABLE `skpd`
  ADD PRIMARY KEY (`id_skpd`),
  ADD KEY `skpd_satda_id_foreign` (`satda_id`),
  ADD KEY `skpd_perda_id_foreign` (`perda_id`);

--
-- Indexes for table `tableau`
--
ALTER TABLE `tableau`
  ADD PRIMARY KEY (`id_tableau`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_level_id_foreign` (`level_id`),
  ADD KEY `users_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `users_kabupaten_id_foreign` (`kabupaten_id`),
  ADD KEY `users_satda_id_foreign` (`satda_id`),
  ADD KEY `users_skpd_id_foreign` (`skpd_id`),
  ADD KEY `users_jabatan_id_foreign` (`jabatan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_access`
--
ALTER TABLE `history_access`
  MODIFY `id_access` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_login`
--
ALTER TABLE `history_login`
  MODIFY `id_login` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id_indikator` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3105709;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9472;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `otda`
--
ALTER TABLE `otda`
  MODIFY `id_otda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pencapaian`
--
ALTER TABLE `pencapaian`
  MODIFY `id_pencapaian` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perda`
--
ALTER TABLE `perda`
  MODIFY `id_perda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `satda`
--
ALTER TABLE `satda`
  MODIFY `id_satda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331407;

--
-- AUTO_INCREMENT for table `skpd`
--
ALTER TABLE `skpd`
  MODIFY `id_skpd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73101;

--
-- AUTO_INCREMENT for table `tableau`
--
ALTER TABLE `tableau`
  MODIFY `id_tableau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_access`
--
ALTER TABLE `history_access`
  ADD CONSTRAINT `history_access_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page` (`id_page`),
  ADD CONSTRAINT `history_access_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `history_login`
--
ALTER TABLE `history_login`
  ADD CONSTRAINT `history_login_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `indikator`
--
ALTER TABLE `indikator`
  ADD CONSTRAINT `indikator_otda_id_foreign` FOREIGN KEY (`otda_id`) REFERENCES `otda` (`id_otda`),
  ADD CONSTRAINT `indikator_skpd_id_foreign` FOREIGN KEY (`skpd_id`) REFERENCES `skpd` (`id_skpd`);

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `pencapaian`
--
ALTER TABLE `pencapaian`
  ADD CONSTRAINT `pencapaian_indikator_id_foreign` FOREIGN KEY (`indikator_id`) REFERENCES `indikator` (`id_indikator`);

--
-- Constraints for table `satda`
--
ALTER TABLE `satda`
  ADD CONSTRAINT `satda_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id_kabupaten`),
  ADD CONSTRAINT `satda_kategori_satda_id_foreign` FOREIGN KEY (`kategori_satda_id`) REFERENCES `satda_kategori` (`id_satda_kategori`),
  ADD CONSTRAINT `satda_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `skpd`
--
ALTER TABLE `skpd`
  ADD CONSTRAINT `skpd_perda_id_foreign` FOREIGN KEY (`perda_id`) REFERENCES `perda` (`id_perda`),
  ADD CONSTRAINT `skpd_satda_id_foreign` FOREIGN KEY (`satda_id`) REFERENCES `satda` (`id_satda`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `users_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id_kabupaten`),
  ADD CONSTRAINT `users_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `users_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id_provinsi`),
  ADD CONSTRAINT `users_satda_id_foreign` FOREIGN KEY (`satda_id`) REFERENCES `satda` (`id_satda`),
  ADD CONSTRAINT `users_skpd_id_foreign` FOREIGN KEY (`skpd_id`) REFERENCES `skpd` (`id_skpd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
