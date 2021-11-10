-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2021 pada 11.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihitung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_10_04_060335_create_users_table', 1),
(2, '2021_10_09_014858_create_projects_table', 1),
(3, '2021_10_12_130452_create_tos1pumproom_table', 1),
(4, '2021_10_12_132422_create_tos1footplat_table', 1),
(5, '2021_10_12_132642_create_tos1batukali_table', 1),
(6, '2021_10_12_133117_create_tos1oandh_table', 1),
(7, '2021_10_12_133917_create_tos2pedestal_table', 1),
(8, '2021_10_12_135426_create_tos2kolompedestal_table', 1),
(9, '2021_10_12_135659_create_tos2summary_table', 1),
(10, '2021_10_12_161501_create_tos3data_table', 1),
(11, '2021_10_12_161517_create_tos3ground_table', 1),
(12, '2021_10_12_161531_create_tos3pumproom_table', 1),
(13, '2021_10_12_161546_create_tos3summary_table', 1),
(14, '2021_10_12_164151_create_tos4data_table', 1),
(15, '2021_10_12_164205_create_tos4pool_table', 1),
(16, '2021_10_12_164221_create_tos4ground_table', 1),
(17, '2021_10_12_164245_create_tos4pumproom_table', 1),
(18, '2021_10_12_164302_create_tos4summary_table', 1),
(19, '2021_10_12_182917_create_tos5data_table', 1),
(20, '2021_10_12_182933_create_tos5ground_table', 1),
(21, '2021_10_12_182948_create_tos5pumproom_table', 1),
(22, '2021_10_12_183002_create_tos5summary_table', 1),
(23, '2021_10_12_184752_create_tos6uppergf_table', 1),
(24, '2021_10_12_184813_create_tos6lantai1_table', 1),
(25, '2021_10_12_184853_create_tos6uppergf2_table', 1),
(26, '2021_10_12_184938_create_tos6pumproom_table', 1),
(27, '2021_10_12_184953_create_tos6summary_table', 1),
(28, '2021_10_13_015701_create_tos7pumproom_table', 1),
(29, '2021_10_13_015727_create_tos7pool_table', 1),
(30, '2021_10_13_015755_create_tos7gutterkolamrenang_table', 1),
(31, '2021_10_13_015811_create_tos7lantai1_table', 1),
(32, '2021_10_13_015827_create_tos7janggutan_table', 1),
(33, '2021_10_13_015852_create_tos7rwbatukali_table', 1),
(34, '2021_10_13_015903_create_tos7summary_table', 1),
(35, '2021_10_13_052151_create_tos7_a_r_table', 1),
(36, '2021_10_13_052238_create_tos7_v_r_w_batu_kali_table', 1),
(37, '2021_10_13_060443_create_tos6_a_r_table', 1),
(38, '2021_10_19_005101_create_tos2lewatan_table', 1),
(39, '2021_10_19_040852_create_tos2datakolom_table', 1),
(40, '2021_10_19_040948_create_tos2datafootplat_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id_projects` bigint(20) UNSIGNED NOT NULL,
  `pro_nama` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `pro_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos1batukali`
--

CREATE TABLE `tos1batukali` (
  `id_tos14` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` double NOT NULL,
  `b_` double NOT NULL,
  `h` double NOT NULL,
  `panjang` double NOT NULL,
  `p` double NOT NULL,
  `la` double NOT NULL,
  `v_bk` double NOT NULL,
  `pasir_u` double NOT NULL,
  `galian` double NOT NULL,
  `timbunan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos1footplat`
--

CREATE TABLE `tos1footplat` (
  `id_tos12` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dfp_l` double NOT NULL,
  `dfp_p` double NOT NULL,
  `dfp_t` double NOT NULL,
  `level_mta` double NOT NULL,
  `jumlah` double NOT NULL,
  `tav_dia` double NOT NULL,
  `tav_jarak` double NOT NULL,
  `tav_p` double NOT NULL,
  `tav_add` double NOT NULL,
  `tav_jum` double NOT NULL,
  `tav_bjenis` double NOT NULL,
  `tav_total` double NOT NULL,
  `tbv_dia` double NOT NULL,
  `tbv_jarak` double NOT NULL,
  `tbv_p` double NOT NULL,
  `tbv_add` double NOT NULL,
  `tbv_jum` double NOT NULL,
  `tbv_bjenis` double NOT NULL,
  `tbv_total` double NOT NULL,
  `tah_dia` double NOT NULL,
  `tah_jarak` double NOT NULL,
  `tah_p` double NOT NULL,
  `tah_add` double NOT NULL,
  `tah_jum` double NOT NULL,
  `tah_bjenis` double NOT NULL,
  `tah_total` double NOT NULL,
  `tbh_dia` double NOT NULL,
  `tbh_jarak` double NOT NULL,
  `tbh_p` double NOT NULL,
  `tbh_add` double NOT NULL,
  `tbh_jum` double NOT NULL,
  `tbh_bjenis` double NOT NULL,
  `tbh_total` double NOT NULL,
  `tp_dia` double NOT NULL,
  `tp_jum` double NOT NULL,
  `tp_p` double NOT NULL,
  `tp_total` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `v_bb` double NOT NULL,
  `v_galian` double NOT NULL,
  `v_lc` double NOT NULL,
  `v_pasir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos1oandh`
--

CREATE TABLE `tos1oandh` (
  `id_tos11` bigint(20) UNSIGNED NOT NULL,
  `dia` double NOT NULL,
  `p` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos1pumproom`
--

CREATE TABLE `tos1pumproom` (
  `id_tos13` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dfp_l` double NOT NULL,
  `dfp_p` double NOT NULL,
  `dfp_t` double NOT NULL,
  `level_mta` double NOT NULL,
  `jumlah` double NOT NULL,
  `tav_dia` double NOT NULL,
  `tav_jarak` double NOT NULL,
  `tav_p` double NOT NULL,
  `tav_add` double NOT NULL,
  `tav_jum` double NOT NULL,
  `tav_bjenis` double NOT NULL,
  `tav_total` double NOT NULL,
  `tbv_dia` double NOT NULL,
  `tbv_jarak` double NOT NULL,
  `tbv_p` double NOT NULL,
  `tbv_add` double NOT NULL,
  `tbv_jum` double NOT NULL,
  `tbv_bjenis` double NOT NULL,
  `tbv_total` double NOT NULL,
  `tah_dia` double NOT NULL,
  `tah_jarak` double NOT NULL,
  `tah_p` double NOT NULL,
  `tah_add` double NOT NULL,
  `tah_jum` double NOT NULL,
  `tah_bjenis` double NOT NULL,
  `tah_total` double NOT NULL,
  `tbh_dia` double NOT NULL,
  `tbh_jarak` double NOT NULL,
  `tbh_p` double NOT NULL,
  `tbh_add` double NOT NULL,
  `tbh_jum` double NOT NULL,
  `tbh_bjenis` double NOT NULL,
  `tbh_total` double NOT NULL,
  `tp_dia` double NOT NULL,
  `tp_jum` double NOT NULL,
  `tp_p` double NOT NULL,
  `tp_total` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `v_bb` double NOT NULL,
  `v_galian` double NOT NULL,
  `v_lc` double NOT NULL,
  `v_pasir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos2datafootplat`
--

CREATE TABLE `tos2datafootplat` (
  `id_tos25` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` double NOT NULL,
  `h` double NOT NULL,
  `t` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tos2datafootplat`
--

INSERT INTO `tos2datafootplat` (`id_tos25`, `nama`, `b`, `h`, `t`) VALUES
(1, 'F1', 1.5, 1.5, 0.35),
(2, 'F2', 1.5, 1.5, 0.35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos2datakolom`
--

CREATE TABLE `tos2datakolom` (
  `id_tos26` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensi_l` double NOT NULL,
  `dimensi_p` double NOT NULL,
  `tebal_selimut` double NOT NULL,
  `tulpok_dia` double NOT NULL,
  `tulpok_jum` double NOT NULL,
  `tulseng_dia_tumpuan` double NOT NULL,
  `tulseng_dia_jaraktump` double NOT NULL,
  `tulseng_dia_lapangan` double NOT NULL,
  `tulseng_dia_jaraklap` double NOT NULL,
  `thtump_dia` double NOT NULL,
  `thtump_jarak` double NOT NULL,
  `thlap_dia` double NOT NULL,
  `thlap_jarak` double NOT NULL,
  `tvtump_dia` double NOT NULL,
  `tvtump_jarak` double NOT NULL,
  `tvlap_dia` double NOT NULL,
  `tvlap_jarak` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tos2datakolom`
--

INSERT INTO `tos2datakolom` (`id_tos26`, `nama`, `bentuk`, `dimensi_l`, `dimensi_p`, `tebal_selimut`, `tulpok_dia`, `tulpok_jum`, `tulseng_dia_tumpuan`, `tulseng_dia_jaraktump`, `tulseng_dia_lapangan`, `tulseng_dia_jaraklap`, `thtump_dia`, `thtump_jarak`, `thlap_dia`, `thlap_jarak`, `tvtump_dia`, `tvtump_jarak`, `tvlap_dia`, `tvlap_jarak`) VALUES
(1, 'C1', 'Kotak', 0.22, 0.8, 0.025, 19, 18, 10, 0.1, 10, 0.2, 10, 0.1, 10, 0.2, 0, 0.1, 0, 0.2),
(2, 'C2', 'Kotak', 0.2, 0.5, 0.025, 16, 12, 10, 0.2, 0.1, 10, 0.1, 10, 0.2, 0.2, 0, 0.1, 10, 0.1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos2kolompedestal`
--

CREATE TABLE `tos2kolompedestal` (
  `id_tos22` bigint(20) UNSIGNED NOT NULL,
  `tipe_kolom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tebal_plat` double NOT NULL,
  `jum_kolom` double NOT NULL,
  `footplat_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk_sengkang_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tos2kolompedestal`
--

INSERT INTO `tos2kolompedestal` (`id_tos22`, `tipe_kolom`, `tebal_plat`, `jum_kolom`, `footplat_type`, `pk_sengkang_qty`) VALUES
(2, 'c1', 0.1, 1, 'f1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos2lewatan`
--

CREATE TABLE `tos2lewatan` (
  `id_tos24` bigint(20) UNSIGNED NOT NULL,
  `dia` double NOT NULL,
  `ls` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tos2lewatan`
--

INSERT INTO `tos2lewatan` (`id_tos24`, `dia`, `ls`) VALUES
(1, 19, 0.696);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos2pedestal`
--

CREATE TABLE `tos2pedestal` (
  `id_tos21` bigint(20) UNSIGNED NOT NULL,
  `tipe_kolom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tebal_plat` double NOT NULL,
  `jum_kolom` double NOT NULL,
  `footplat_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pk_sengkang_qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos2summary`
--

CREATE TABLE `tos2summary` (
  `id_tos23` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beton` double NOT NULL,
  `besi` double NOT NULL,
  `bekisting` double NOT NULL,
  `timbunan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos3data`
--

CREATE TABLE `tos3data` (
  `id_tos31` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensi_l` double NOT NULL,
  `dimensi_p` double NOT NULL,
  `tebal_selimut` double NOT NULL,
  `tulpok_dia` double NOT NULL,
  `tulpok_jum` double NOT NULL,
  `tulseng_dia_tumpuan` double NOT NULL,
  `tulseng_dia_lapangan` double NOT NULL,
  `tulseng_dia_jaraklap` double NOT NULL,
  `thtump_dia` double NOT NULL,
  `thtump_jarak` double NOT NULL,
  `thlap_dia` double NOT NULL,
  `thlap_jarak` double NOT NULL,
  `tvtump_dia` double NOT NULL,
  `tvtump_jarak` double NOT NULL,
  `tvlap_dia` double NOT NULL,
  `tvlap_jarak` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos3ground`
--

CREATE TABLE `tos3ground` (
  `id_tos32` bigint(20) UNSIGNED NOT NULL,
  `tipe_kolom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk_kolom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dk_t` double NOT NULL,
  `dk_l` double NOT NULL,
  `dk_p` double NOT NULL,
  `tebal_plat` double NOT NULL,
  `tinggi_net` double NOT NULL,
  `selimut_beton` double NOT NULL,
  `jum_kolom` double NOT NULL,
  `footplat_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footplat_b` double NOT NULL,
  `footplat_h` double NOT NULL,
  `footplat_p` double NOT NULL,
  `pk_ket` double NOT NULL,
  `pk_tulpok_dia` double NOT NULL,
  `pk_tulpok_qty` double NOT NULL,
  `pk_sengkang_dia` double NOT NULL,
  `pk_sengkang_qty` double NOT NULL,
  `pk_sengkang_jarak` double NOT NULL,
  `pk_tulanganpokok_ovlp` double NOT NULL,
  `pk_tulanganpokok_suk` double NOT NULL,
  `pk_tulanganpokok_kkf` double NOT NULL,
  `pk_tulanganpokok_p_besi` double NOT NULL,
  `pk_tulanganpokok_total_p` double NOT NULL,
  `pk_tulanganpokok_berat` double NOT NULL,
  `pk_sengkang2_tekukan_id` double NOT NULL,
  `pk_sengkang2_tekukan_p` double NOT NULL,
  `pk_sengkang2_qty` double NOT NULL,
  `pk_sengkang2_total_p` double NOT NULL,
  `pk_sengkang2_berat` double NOT NULL,
  `besi` double NOT NULL,
  `beton` double NOT NULL,
  `bekisting` double NOT NULL,
  `rasio_besi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos3pumproom`
--

CREATE TABLE `tos3pumproom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_kolom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk_kolom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dk_t` double NOT NULL,
  `dk_l` double NOT NULL,
  `dk_p` double NOT NULL,
  `tebal_plat` double NOT NULL,
  `tinggi_net` double NOT NULL,
  `selimut_beton` double NOT NULL,
  `jum_kolom` double NOT NULL,
  `footplat_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footplat_b` double NOT NULL,
  `footplat_h` double NOT NULL,
  `footplat_p` double NOT NULL,
  `pk_ket` double NOT NULL,
  `pk_tulpok_dia` double NOT NULL,
  `pk_tulpok_qty` double NOT NULL,
  `pk_sengkang_dia` double NOT NULL,
  `pk_sengkang_qty` double NOT NULL,
  `pk_sengkang_jarak` double NOT NULL,
  `pk_tulanganpokok_ovlp` double NOT NULL,
  `pk_tulanganpokok_suk` double NOT NULL,
  `pk_tulanganpokok_kkf` double NOT NULL,
  `pk_tulanganpokok_p_besi` double NOT NULL,
  `pk_tulanganpokok_total_p` double NOT NULL,
  `pk_tulanganpokok_berat` double NOT NULL,
  `pk_sengkang2_tekukan_id` double NOT NULL,
  `pk_sengkang2_tekukan_p` double NOT NULL,
  `pk_sengkang2_qty` double NOT NULL,
  `pk_sengkang2_total_p` double NOT NULL,
  `pk_sengkang2_berat` double NOT NULL,
  `besi` double NOT NULL,
  `beton` double NOT NULL,
  `bekisting` double NOT NULL,
  `rasio_besi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos3summary`
--

CREATE TABLE `tos3summary` (
  `id_tos34` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beton` double NOT NULL,
  `besi` double NOT NULL,
  `bekisting` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos4data`
--

CREATE TABLE `tos4data` (
  `id_tos41` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` double NOT NULL,
  `h` double NOT NULL,
  `bd` double NOT NULL,
  `diatul_utama` double NOT NULL,
  `diatul_skg` double NOT NULL,
  `diatul_pg` double NOT NULL,
  `sengkang_dia_ka` double NOT NULL,
  `sengkang_dia_tg` double NOT NULL,
  `sengkang_dia_ki` double NOT NULL,
  `peminggang_dia` double NOT NULL,
  `peminggang_n` double NOT NULL,
  `jumtulut_atas1` double NOT NULL,
  `jumtulut_atas2` double NOT NULL,
  `jumtulut_atas3` double NOT NULL,
  `jumtulut_bawah1` double NOT NULL,
  `jumtulut_bawah2` double NOT NULL,
  `jumtulut_bawah3` double NOT NULL,
  `jarakseng_dia_ka` double NOT NULL,
  `jarakseng_dia_tg` double NOT NULL,
  `jarakseng_dia_ki` double NOT NULL,
  `l_sekur_beton` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos4ground`
--

CREATE TABLE `tos4ground` (
  `id_tos43` bigint(20) UNSIGNED NOT NULL,
  `as` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kosong` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `as2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nos_bh` double NOT NULL,
  `code_pos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbalok_pkotor` double NOT NULL,
  `pbalok_pengaruhkol_kiri` double NOT NULL,
  `pbalok_pengaruhkol_kanan` double NOT NULL,
  `pbalok_pbersih` double NOT NULL,
  `tebal_plat` double NOT NULL,
  `dtb_b` double NOT NULL,
  `dtb_h` double NOT NULL,
  `luas_sekur_beton` double NOT NULL,
  `dbeton` double NOT NULL,
  `tulut_jumtul_atas_kiri` double NOT NULL,
  `tulut_jumtul_atas_tgh` double NOT NULL,
  `tulut_jumtul_atas_kanan` double NOT NULL,
  `tulut_jumtul_bawah_kiri` double NOT NULL,
  `tulut_jumtul_bawah_tgh` double NOT NULL,
  `tulut_jumtul_bawah_kanan` double NOT NULL,
  `tulut_dia` double NOT NULL,
  `tulseng_diaseng_skkiri` double NOT NULL,
  `tulseng_diaseng_sktgh` double NOT NULL,
  `tulseng_diaseng_skknn` double NOT NULL,
  `tulseng_jarak_kiri` double NOT NULL,
  `tulseng_jarak_tgh` double NOT NULL,
  `tulseng_jarak_knn` double NOT NULL,
  `peminggang_dia` double NOT NULL,
  `peminggang_n` double NOT NULL,
  `tulut_p` double NOT NULL,
  `tulut_atas` double NOT NULL,
  `tulut_bawah` double NOT NULL,
  `tulut_berat` double NOT NULL,
  `tulseng_kiri_p` double NOT NULL,
  `tulseng_kiri_p2` double NOT NULL,
  `tulseng_kiri_jarak` double NOT NULL,
  `tulseng_kiri_n` double NOT NULL,
  `tulseng_tgh_p` double NOT NULL,
  `tulseng_tgh_p2` double NOT NULL,
  `tulseng_tgh_jarak` double NOT NULL,
  `tulseng_tgh_n` double NOT NULL,
  `tulseng_knn_p` double NOT NULL,
  `tulseng_knn_p2` double NOT NULL,
  `tulseng_knn_jarak` double NOT NULL,
  `tulseng_knn_n` double NOT NULL,
  `tulseng_berat` double NOT NULL,
  `tulpem_p` double NOT NULL,
  `tulpem_n` double NOT NULL,
  `tulpem_berat` double NOT NULL,
  `besi_utama` double NOT NULL,
  `besi_add` double NOT NULL,
  `besi_total` double NOT NULL,
  `rasio_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_bb` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos4pool`
--

CREATE TABLE `tos4pool` (
  `id_tos42` bigint(20) UNSIGNED NOT NULL,
  `as` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kosong` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `as2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nos_bh` double NOT NULL,
  `code_pos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbalok_pkotor` double NOT NULL,
  `pbalok_pengaruhkol_kiri` double NOT NULL,
  `pbalok_pengaruhkol_kanan` double NOT NULL,
  `pbalok_pbersih` double NOT NULL,
  `tebal_plat` double NOT NULL,
  `dtb_b` double NOT NULL,
  `dtb_h` double NOT NULL,
  `luas_sekur_beton` double NOT NULL,
  `dbeton` double NOT NULL,
  `tulut_jumtul_atas_kiri` double NOT NULL,
  `tulut_jumtul_atas_tgh` double NOT NULL,
  `tulut_jumtul_atas_kanan` double NOT NULL,
  `tulut_jumtul_bawah_kiri` double NOT NULL,
  `tulut_jumtul_bawah_tgh` double NOT NULL,
  `tulut_jumtul_bawah_kanan` double NOT NULL,
  `tulut_dia` double NOT NULL,
  `tulseng_diaseng_skkiri` double NOT NULL,
  `tulseng_diaseng_sktgh` double NOT NULL,
  `tulseng_diaseng_skknn` double NOT NULL,
  `tulseng_jarak_kiri` double NOT NULL,
  `tulseng_jarak_tgh` double NOT NULL,
  `tulseng_jarak_knn` double NOT NULL,
  `peminggang_dia` double NOT NULL,
  `peminggang_n` double NOT NULL,
  `tulut_p` double NOT NULL,
  `tulut_atas` double NOT NULL,
  `tulut_bawah` double NOT NULL,
  `tulut_berat` double NOT NULL,
  `tulseng_kiri_p` double NOT NULL,
  `tulseng_kiri_p2` double NOT NULL,
  `tulseng_kiri_jarak` double NOT NULL,
  `tulseng_kiri_n` double NOT NULL,
  `tulseng_tgh_p` double NOT NULL,
  `tulseng_tgh_p2` double NOT NULL,
  `tulseng_tgh_jarak` double NOT NULL,
  `tulseng_tgh_n` double NOT NULL,
  `tulseng_knn_p` double NOT NULL,
  `tulseng_knn_p2` double NOT NULL,
  `tulseng_knn_jarak` double NOT NULL,
  `tulseng_knn_n` double NOT NULL,
  `tulseng_berat` double NOT NULL,
  `tulpem_p` double NOT NULL,
  `tulpem_n` double NOT NULL,
  `tulpem_berat` double NOT NULL,
  `besi_utama` double NOT NULL,
  `besi_add` double NOT NULL,
  `besi_total` double NOT NULL,
  `rasio_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_bb` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos4pumproom`
--

CREATE TABLE `tos4pumproom` (
  `id_tos44` bigint(20) UNSIGNED NOT NULL,
  `as` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kosong` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `as2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nos_bh` double NOT NULL,
  `code_pos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbalok_pkotor` double NOT NULL,
  `pbalok_pengaruhkol_kiri` double NOT NULL,
  `pbalok_pengaruhkol_kanan` double NOT NULL,
  `pbalok_pbersih` double NOT NULL,
  `tebal_plat` double NOT NULL,
  `dtb_b` double NOT NULL,
  `dtb_h` double NOT NULL,
  `luas_sekur_beton` double NOT NULL,
  `dbeton` double NOT NULL,
  `tulut_jumtul_atas_kiri` double NOT NULL,
  `tulut_jumtul_atas_tgh` double NOT NULL,
  `tulut_jumtul_atas_kanan` double NOT NULL,
  `tulut_jumtul_bawah_kiri` double NOT NULL,
  `tulut_jumtul_bawah_tgh` double NOT NULL,
  `tulut_jumtul_bawah_kanan` double NOT NULL,
  `tulut_dia` double NOT NULL,
  `tulseng_diaseng_skkiri` double NOT NULL,
  `tulseng_diaseng_sktgh` double NOT NULL,
  `tulseng_diaseng_skknn` double NOT NULL,
  `tulseng_jarak_kiri` double NOT NULL,
  `tulseng_jarak_tgh` double NOT NULL,
  `tulseng_jarak_knn` double NOT NULL,
  `peminggang_dia` double NOT NULL,
  `peminggang_n` double NOT NULL,
  `tulut_p` double NOT NULL,
  `tulut_atas` double NOT NULL,
  `tulut_bawah` double NOT NULL,
  `tulut_berat` double NOT NULL,
  `tulseng_kiri_p` double NOT NULL,
  `tulseng_kiri_p2` double NOT NULL,
  `tulseng_kiri_jarak` double NOT NULL,
  `tulseng_kiri_n` double NOT NULL,
  `tulseng_tgh_p` double NOT NULL,
  `tulseng_tgh_p2` double NOT NULL,
  `tulseng_tgh_jarak` double NOT NULL,
  `tulseng_tgh_n` double NOT NULL,
  `tulseng_knn_p` double NOT NULL,
  `tulseng_knn_p2` double NOT NULL,
  `tulseng_knn_jarak` double NOT NULL,
  `tulseng_knn_n` double NOT NULL,
  `tulseng_berat` double NOT NULL,
  `tulpem_p` double NOT NULL,
  `tulpem_n` double NOT NULL,
  `tulpem_berat` double NOT NULL,
  `besi_utama` double NOT NULL,
  `besi_add` double NOT NULL,
  `besi_total` double NOT NULL,
  `rasio_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_bb` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos4summary`
--

CREATE TABLE `tos4summary` (
  `id_tos45` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beton` double NOT NULL,
  `besi` double NOT NULL,
  `bekisting` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos5data`
--

CREATE TABLE `tos5data` (
  `id_tos51` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` double NOT NULL,
  `h` double NOT NULL,
  `bd` double NOT NULL,
  `diatul_utama` double NOT NULL,
  `diatul_skg` double NOT NULL,
  `diatul_pg` double NOT NULL,
  `sengkang_dia_ka` double NOT NULL,
  `sengkang_dia_tg` double NOT NULL,
  `sengkang_dia_ki` double NOT NULL,
  `peminggang_dia` double NOT NULL,
  `peminggang_n` double NOT NULL,
  `jumtulut_atas1` double NOT NULL,
  `jumtulut_atas2` double NOT NULL,
  `jumtulut_atas3` double NOT NULL,
  `jumtulut_bawah1` double NOT NULL,
  `jumtulut_bawah2` double NOT NULL,
  `jumtulut_bawah3` double NOT NULL,
  `jarakseng_dia_ka` double NOT NULL,
  `jarakseng_dia_tg` double NOT NULL,
  `jarakseng_dia_ki` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos5ground`
--

CREATE TABLE `tos5ground` (
  `id_tos52` bigint(20) UNSIGNED NOT NULL,
  `as` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kosong` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `as2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nos_bh` double NOT NULL,
  `code_pos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbalok_pkotor` double NOT NULL,
  `pbalok_pengaruhkol_kiri` double NOT NULL,
  `pbalok_pengaruhkol_kanan` double NOT NULL,
  `pbalok_pbersih` double NOT NULL,
  `tebal_plat` double NOT NULL,
  `dtb_b` double NOT NULL,
  `dtb_h` double NOT NULL,
  `dbeton` double NOT NULL,
  `tulut_jumtul_atas_kiri` double NOT NULL,
  `tulut_jumtul_atas_tgh` double NOT NULL,
  `tulut_jumtul_atas_kanan` double NOT NULL,
  `tulut_jumtul_bawah_kiri` double NOT NULL,
  `tulut_jumtul_bawah_tgh` double NOT NULL,
  `tulut_jumtul_bawah_kanan` double NOT NULL,
  `tulut_dia` double NOT NULL,
  `tulseng_diaseng_skkiri` double NOT NULL,
  `tulseng_diaseng_sktgh` double NOT NULL,
  `tulseng_diaseng_skknn` double NOT NULL,
  `tulseng_jarak_kiri` double NOT NULL,
  `tulseng_jarak_tgh` double NOT NULL,
  `tulseng_jarak_knn` double NOT NULL,
  `peminggang_dia` double NOT NULL,
  `peminggang_n` double NOT NULL,
  `tulut_p` double NOT NULL,
  `tulut_atas` double NOT NULL,
  `tulut_bawah` double NOT NULL,
  `tulut_berat` double NOT NULL,
  `tulseng_kiri_p` double NOT NULL,
  `tulseng_kiri_p2` double NOT NULL,
  `tulseng_kiri_jarak` double NOT NULL,
  `tulseng_kiri_n` double NOT NULL,
  `tulseng_tgh_p` double NOT NULL,
  `tulseng_tgh_p2` double NOT NULL,
  `tulseng_tgh_jarak` double NOT NULL,
  `tulseng_tgh_n` double NOT NULL,
  `tulseng_knn_p` double NOT NULL,
  `tulseng_knn_p2` double NOT NULL,
  `tulseng_knn_jarak` double NOT NULL,
  `tulseng_knn_n` double NOT NULL,
  `tulseng_berat` double NOT NULL,
  `tulpem_p` double NOT NULL,
  `tulpem_n` double NOT NULL,
  `tulpem_berat` double NOT NULL,
  `besi_utama` double NOT NULL,
  `besi_add` double NOT NULL,
  `besi_total` double NOT NULL,
  `v_beton` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_bb` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos5pumproom`
--

CREATE TABLE `tos5pumproom` (
  `id_tos53` bigint(20) UNSIGNED NOT NULL,
  `as` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kosong` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `as2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nos_bh` double NOT NULL,
  `code_pos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbalok_pkotor` double NOT NULL,
  `pbalok_pengaruhkol_kiri` double NOT NULL,
  `pbalok_pengaruhkol_kanan` double NOT NULL,
  `pbalok_pbersih` double NOT NULL,
  `tebal_plat` double NOT NULL,
  `dtb_b` double NOT NULL,
  `dtb_h` double NOT NULL,
  `dbeton` double NOT NULL,
  `tulut_jumtul_atas_kiri` double NOT NULL,
  `tulut_jumtul_atas_tgh` double NOT NULL,
  `tulut_jumtul_atas_kanan` double NOT NULL,
  `tulut_jumtul_bawah_kiri` double NOT NULL,
  `tulut_jumtul_bawah_tgh` double NOT NULL,
  `tulut_jumtul_bawah_kanan` double NOT NULL,
  `tulut_dia` double NOT NULL,
  `tulseng_diaseng_skkiri` double NOT NULL,
  `tulseng_diaseng_sktgh` double NOT NULL,
  `tulseng_diaseng_skknn` double NOT NULL,
  `tulseng_jarak_kiri` double NOT NULL,
  `tulseng_jarak_tgh` double NOT NULL,
  `tulseng_jarak_knn` double NOT NULL,
  `peminggang_dia` double NOT NULL,
  `peminggang_n` double NOT NULL,
  `tulut_p` double NOT NULL,
  `tulut_atas` double NOT NULL,
  `tulut_bawah` double NOT NULL,
  `tulut_berat` double NOT NULL,
  `tulseng_kiri_p` double NOT NULL,
  `tulseng_kiri_p2` double NOT NULL,
  `tulseng_kiri_jarak` double NOT NULL,
  `tulseng_kiri_n` double NOT NULL,
  `tulseng_tgh_p` double NOT NULL,
  `tulseng_tgh_p2` double NOT NULL,
  `tulseng_tgh_jarak` double NOT NULL,
  `tulseng_tgh_n` double NOT NULL,
  `tulseng_knn_p` double NOT NULL,
  `tulseng_knn_p2` double NOT NULL,
  `tulseng_knn_jarak` double NOT NULL,
  `tulseng_knn_n` double NOT NULL,
  `tulseng_berat` double NOT NULL,
  `tulpem_p` double NOT NULL,
  `tulpem_n` double NOT NULL,
  `tulpem_berat` double NOT NULL,
  `besi_utama` double NOT NULL,
  `besi_add` double NOT NULL,
  `besi_total` double NOT NULL,
  `v_beton` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_bb` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos5summary`
--

CREATE TABLE `tos5summary` (
  `id_tos54` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beton` double NOT NULL,
  `besi` double NOT NULL,
  `bekisting` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos6lantai1`
--

CREATE TABLE `tos6lantai1` (
  `id_tos62` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_lh` double NOT NULL,
  `d_lv` double NOT NULL,
  `d_tebal` double NOT NULL,
  `tav_dia` double NOT NULL,
  `tav_jarak` double NOT NULL,
  `tav_p` double NOT NULL,
  `tav_add` double NOT NULL,
  `tav_jum` double NOT NULL,
  `tav_bjenis` double NOT NULL,
  `tav_total` double NOT NULL,
  `tbv_dia` double NOT NULL,
  `tbv_jarak` double NOT NULL,
  `tbv_p` double NOT NULL,
  `tbv_add` double NOT NULL,
  `tbv_jum` double NOT NULL,
  `tbv_bjenis` double NOT NULL,
  `tbv_total` double NOT NULL,
  `tah_dia` double NOT NULL,
  `tah_jarak` double NOT NULL,
  `tah_p` double NOT NULL,
  `tah_add` double NOT NULL,
  `tah_jum` double NOT NULL,
  `tah_bjenis` double NOT NULL,
  `tah_total` double NOT NULL,
  `tbh_dia` double NOT NULL,
  `tbh_jarak` double NOT NULL,
  `tbh_p` double NOT NULL,
  `tbh_add` double NOT NULL,
  `tbh_jum` double NOT NULL,
  `tbh_bjenis` double NOT NULL,
  `tbh_total` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `ratio_besi` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos6pumproom`
--

CREATE TABLE `tos6pumproom` (
  `id_tos64` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_lh` double NOT NULL,
  `d_lv` double NOT NULL,
  `d_tebal` double NOT NULL,
  `tav_dia` double NOT NULL,
  `tav_jarak` double NOT NULL,
  `tav_p` double NOT NULL,
  `tav_add` double NOT NULL,
  `tav_jum` double NOT NULL,
  `tav_bjenis` double NOT NULL,
  `tav_total` double NOT NULL,
  `tbv_dia` double NOT NULL,
  `tbv_jarak` double NOT NULL,
  `tbv_p` double NOT NULL,
  `tbv_add` double NOT NULL,
  `tbv_jum` double NOT NULL,
  `tbv_bjenis` double NOT NULL,
  `tbv_total` double NOT NULL,
  `tah_dia` double NOT NULL,
  `tah_jarak` double NOT NULL,
  `tah_p` double NOT NULL,
  `tah_add` double NOT NULL,
  `tah_jum` double NOT NULL,
  `tah_bjenis` double NOT NULL,
  `tah_total` double NOT NULL,
  `tbh_dia` double NOT NULL,
  `tbh_jarak` double NOT NULL,
  `tbh_p` double NOT NULL,
  `tbh_add` double NOT NULL,
  `tbh_jum` double NOT NULL,
  `tbh_bjenis` double NOT NULL,
  `tbh_total` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `ratio_besi` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos6summary`
--

CREATE TABLE `tos6summary` (
  `id_tos65` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beton` double NOT NULL,
  `besi` double NOT NULL,
  `bekisting` double NOT NULL,
  `lean` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos6uppergf`
--

CREATE TABLE `tos6uppergf` (
  `id_tos61` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_lh` double NOT NULL,
  `d_lv` double NOT NULL,
  `d_tebal` double NOT NULL,
  `tav_dia` double NOT NULL,
  `tav_jarak` double NOT NULL,
  `tav_p` double NOT NULL,
  `tav_add` double NOT NULL,
  `tav_jum` double NOT NULL,
  `tav_bjenis` double NOT NULL,
  `tav_total` double NOT NULL,
  `tbv_dia` double NOT NULL,
  `tbv_jarak` double NOT NULL,
  `tbv_p` double NOT NULL,
  `tbv_add` double NOT NULL,
  `tbv_jum` double NOT NULL,
  `tbv_bjenis` double NOT NULL,
  `tbv_total` double NOT NULL,
  `tah_dia` double NOT NULL,
  `tah_jarak` double NOT NULL,
  `tah_p` double NOT NULL,
  `tah_add` double NOT NULL,
  `tah_jum` double NOT NULL,
  `tah_bjenis` double NOT NULL,
  `tah_total` double NOT NULL,
  `tbh_dia` double NOT NULL,
  `tbh_jarak` double NOT NULL,
  `tbh_p` double NOT NULL,
  `tbh_add` double NOT NULL,
  `tbh_jum` double NOT NULL,
  `tbh_bjenis` double NOT NULL,
  `tbh_total` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `ratio_besi` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos6uppergf2`
--

CREATE TABLE `tos6uppergf2` (
  `id_tos63` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_lh` double NOT NULL,
  `d_lv` double NOT NULL,
  `d_tebal` double NOT NULL,
  `tav_dia` double NOT NULL,
  `tav_jarak` double NOT NULL,
  `tav_p` double NOT NULL,
  `tav_add` double NOT NULL,
  `tav_jum` double NOT NULL,
  `tav_bjenis` double NOT NULL,
  `tav_total` double NOT NULL,
  `tbv_dia` double NOT NULL,
  `tbv_jarak` double NOT NULL,
  `tbv_p` double NOT NULL,
  `tbv_add` double NOT NULL,
  `tbv_jum` double NOT NULL,
  `tbv_bjenis` double NOT NULL,
  `tbv_total` double NOT NULL,
  `tah_dia` double NOT NULL,
  `tah_jarak` double NOT NULL,
  `tah_p` double NOT NULL,
  `tah_add` double NOT NULL,
  `tah_jum` double NOT NULL,
  `tah_bjenis` double NOT NULL,
  `tah_total` double NOT NULL,
  `tbh_dia` double NOT NULL,
  `tbh_jarak` double NOT NULL,
  `tbh_p` double NOT NULL,
  `tbh_add` double NOT NULL,
  `tbh_jum` double NOT NULL,
  `tbh_bjenis` double NOT NULL,
  `tbh_total` double NOT NULL,
  `v_besi` double NOT NULL,
  `v_beton` double NOT NULL,
  `ratio_besi` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos6_a_r`
--

CREATE TABLE `tos6_a_r` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7ar`
--

CREATE TABLE `tos7ar` (
  `id_tos78` bigint(20) UNSIGNED NOT NULL,
  `dia` double NOT NULL,
  `splice` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7gutterkolamrenang`
--

CREATE TABLE `tos7gutterkolamrenang` (
  `id_tos73` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_t` double NOT NULL,
  `d_p` double NOT NULL,
  `d_tebal` double NOT NULL,
  `beton` double NOT NULL,
  `bekisting` double NOT NULL,
  `trw_uraian` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trw_uk` double NOT NULL,
  `trw_dia` double NOT NULL,
  `trw_jarak` double NOT NULL,
  `trw_kait` double NOT NULL,
  `trw_ol` double NOT NULL,
  `trw_is` double NOT NULL,
  `trw_p` double NOT NULL,
  `trw_btg` double NOT NULL,
  `trw_ptotal` double NOT NULL,
  `trw_bj` double NOT NULL,
  `trw_nos` double NOT NULL,
  `trw_tberat` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7janggutan`
--

CREATE TABLE `tos7janggutan` (
  `id_tos75` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_t` double NOT NULL,
  `d_p` double NOT NULL,
  `d_tebal` double NOT NULL,
  `beton` double NOT NULL,
  `bekisting` double NOT NULL,
  `trw_uraian` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trw_uk` double NOT NULL,
  `trw_dia` double NOT NULL,
  `trw_jarak` double NOT NULL,
  `trw_kait` double NOT NULL,
  `trw_ol` double NOT NULL,
  `trw_is` double NOT NULL,
  `trw_p` double NOT NULL,
  `trw_btg` double NOT NULL,
  `trw_ptotal` double NOT NULL,
  `trw_bj` double NOT NULL,
  `trw_nos` double NOT NULL,
  `trw_tberat` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7lantai1`
--

CREATE TABLE `tos7lantai1` (
  `id_tos74` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_t` double NOT NULL,
  `d_p` double NOT NULL,
  `d_tebal` double NOT NULL,
  `beton` double NOT NULL,
  `bekisting` double NOT NULL,
  `trw_uraian` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trw_uk` double NOT NULL,
  `trw_dia` double NOT NULL,
  `trw_jarak` double NOT NULL,
  `trw_kait` double NOT NULL,
  `trw_ol` double NOT NULL,
  `trw_is` double NOT NULL,
  `trw_p` double NOT NULL,
  `trw_btg` double NOT NULL,
  `trw_ptotal` double NOT NULL,
  `trw_bj` double NOT NULL,
  `trw_nos` double NOT NULL,
  `trw_tberat` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7pool`
--

CREATE TABLE `tos7pool` (
  `id_tos72` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_t` double NOT NULL,
  `d_p` double NOT NULL,
  `d_tebal` double NOT NULL,
  `beton` double NOT NULL,
  `bekisting` double NOT NULL,
  `trw_uraian` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trw_uk` double NOT NULL,
  `trw_dia` double NOT NULL,
  `trw_jarak` double NOT NULL,
  `trw_kait` double NOT NULL,
  `trw_ol` double NOT NULL,
  `trw_is` double NOT NULL,
  `trw_p` double NOT NULL,
  `trw_btg` double NOT NULL,
  `trw_ptotal` double NOT NULL,
  `trw_bj` double NOT NULL,
  `trw_nos` double NOT NULL,
  `trw_tberat` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7pumproom`
--

CREATE TABLE `tos7pumproom` (
  `id_tos71` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_t` double NOT NULL,
  `d_p` double NOT NULL,
  `d_tebal` double NOT NULL,
  `beton` double NOT NULL,
  `bekisting` double NOT NULL,
  `trw_uraian` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trw_uk` double NOT NULL,
  `trw_dia` double NOT NULL,
  `trw_jarak` double NOT NULL,
  `trw_kait` double NOT NULL,
  `trw_ol` double NOT NULL,
  `trw_is` double NOT NULL,
  `trw_p` double NOT NULL,
  `trw_btg` double NOT NULL,
  `trw_ptotal` double NOT NULL,
  `trw_bj` double NOT NULL,
  `trw_nos` double NOT NULL,
  `trw_tberat` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7rwbatukali`
--

CREATE TABLE `tos7rwbatukali` (
  `id_tos76` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` double NOT NULL,
  `h` double NOT NULL,
  `l_alas` double NOT NULL,
  `p` double NOT NULL,
  `v` double NOT NULL,
  `galian` double NOT NULL,
  `pasir_urug` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7summary`
--

CREATE TABLE `tos7summary` (
  `id_tos77` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beton` double NOT NULL,
  `besi` double NOT NULL,
  `bekisting` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos7vrwbatu_kali`
--

CREATE TABLE `tos7vrwbatu_kali` (
  `id_tos79` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batukali` double NOT NULL,
  `galian` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_projects`);

--
-- Indeks untuk tabel `tos1batukali`
--
ALTER TABLE `tos1batukali`
  ADD PRIMARY KEY (`id_tos14`);

--
-- Indeks untuk tabel `tos1footplat`
--
ALTER TABLE `tos1footplat`
  ADD PRIMARY KEY (`id_tos12`);

--
-- Indeks untuk tabel `tos1oandh`
--
ALTER TABLE `tos1oandh`
  ADD PRIMARY KEY (`id_tos11`);

--
-- Indeks untuk tabel `tos1pumproom`
--
ALTER TABLE `tos1pumproom`
  ADD PRIMARY KEY (`id_tos13`);

--
-- Indeks untuk tabel `tos2datafootplat`
--
ALTER TABLE `tos2datafootplat`
  ADD PRIMARY KEY (`id_tos25`);

--
-- Indeks untuk tabel `tos2datakolom`
--
ALTER TABLE `tos2datakolom`
  ADD PRIMARY KEY (`id_tos26`);

--
-- Indeks untuk tabel `tos2kolompedestal`
--
ALTER TABLE `tos2kolompedestal`
  ADD PRIMARY KEY (`id_tos22`);

--
-- Indeks untuk tabel `tos2lewatan`
--
ALTER TABLE `tos2lewatan`
  ADD PRIMARY KEY (`id_tos24`);

--
-- Indeks untuk tabel `tos2pedestal`
--
ALTER TABLE `tos2pedestal`
  ADD PRIMARY KEY (`id_tos21`);

--
-- Indeks untuk tabel `tos2summary`
--
ALTER TABLE `tos2summary`
  ADD PRIMARY KEY (`id_tos23`);

--
-- Indeks untuk tabel `tos3data`
--
ALTER TABLE `tos3data`
  ADD PRIMARY KEY (`id_tos31`);

--
-- Indeks untuk tabel `tos3ground`
--
ALTER TABLE `tos3ground`
  ADD PRIMARY KEY (`id_tos32`);

--
-- Indeks untuk tabel `tos3pumproom`
--
ALTER TABLE `tos3pumproom`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tos3summary`
--
ALTER TABLE `tos3summary`
  ADD PRIMARY KEY (`id_tos34`);

--
-- Indeks untuk tabel `tos4data`
--
ALTER TABLE `tos4data`
  ADD PRIMARY KEY (`id_tos41`);

--
-- Indeks untuk tabel `tos4ground`
--
ALTER TABLE `tos4ground`
  ADD PRIMARY KEY (`id_tos43`);

--
-- Indeks untuk tabel `tos4pool`
--
ALTER TABLE `tos4pool`
  ADD PRIMARY KEY (`id_tos42`);

--
-- Indeks untuk tabel `tos4pumproom`
--
ALTER TABLE `tos4pumproom`
  ADD PRIMARY KEY (`id_tos44`);

--
-- Indeks untuk tabel `tos4summary`
--
ALTER TABLE `tos4summary`
  ADD PRIMARY KEY (`id_tos45`);

--
-- Indeks untuk tabel `tos5data`
--
ALTER TABLE `tos5data`
  ADD PRIMARY KEY (`id_tos51`);

--
-- Indeks untuk tabel `tos5ground`
--
ALTER TABLE `tos5ground`
  ADD PRIMARY KEY (`id_tos52`);

--
-- Indeks untuk tabel `tos5pumproom`
--
ALTER TABLE `tos5pumproom`
  ADD PRIMARY KEY (`id_tos53`);

--
-- Indeks untuk tabel `tos5summary`
--
ALTER TABLE `tos5summary`
  ADD PRIMARY KEY (`id_tos54`);

--
-- Indeks untuk tabel `tos6lantai1`
--
ALTER TABLE `tos6lantai1`
  ADD PRIMARY KEY (`id_tos62`);

--
-- Indeks untuk tabel `tos6pumproom`
--
ALTER TABLE `tos6pumproom`
  ADD PRIMARY KEY (`id_tos64`);

--
-- Indeks untuk tabel `tos6summary`
--
ALTER TABLE `tos6summary`
  ADD PRIMARY KEY (`id_tos65`);

--
-- Indeks untuk tabel `tos6uppergf`
--
ALTER TABLE `tos6uppergf`
  ADD PRIMARY KEY (`id_tos61`);

--
-- Indeks untuk tabel `tos6uppergf2`
--
ALTER TABLE `tos6uppergf2`
  ADD PRIMARY KEY (`id_tos63`);

--
-- Indeks untuk tabel `tos6_a_r`
--
ALTER TABLE `tos6_a_r`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tos7ar`
--
ALTER TABLE `tos7ar`
  ADD PRIMARY KEY (`id_tos78`);

--
-- Indeks untuk tabel `tos7gutterkolamrenang`
--
ALTER TABLE `tos7gutterkolamrenang`
  ADD PRIMARY KEY (`id_tos73`);

--
-- Indeks untuk tabel `tos7janggutan`
--
ALTER TABLE `tos7janggutan`
  ADD PRIMARY KEY (`id_tos75`);

--
-- Indeks untuk tabel `tos7lantai1`
--
ALTER TABLE `tos7lantai1`
  ADD PRIMARY KEY (`id_tos74`);

--
-- Indeks untuk tabel `tos7pool`
--
ALTER TABLE `tos7pool`
  ADD PRIMARY KEY (`id_tos72`);

--
-- Indeks untuk tabel `tos7pumproom`
--
ALTER TABLE `tos7pumproom`
  ADD PRIMARY KEY (`id_tos71`);

--
-- Indeks untuk tabel `tos7rwbatukali`
--
ALTER TABLE `tos7rwbatukali`
  ADD PRIMARY KEY (`id_tos76`);

--
-- Indeks untuk tabel `tos7summary`
--
ALTER TABLE `tos7summary`
  ADD PRIMARY KEY (`id_tos77`);

--
-- Indeks untuk tabel `tos7vrwbatu_kali`
--
ALTER TABLE `tos7vrwbatu_kali`
  ADD PRIMARY KEY (`id_tos79`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id_projects` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos1batukali`
--
ALTER TABLE `tos1batukali`
  MODIFY `id_tos14` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos1footplat`
--
ALTER TABLE `tos1footplat`
  MODIFY `id_tos12` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos1oandh`
--
ALTER TABLE `tos1oandh`
  MODIFY `id_tos11` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos1pumproom`
--
ALTER TABLE `tos1pumproom`
  MODIFY `id_tos13` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos2datafootplat`
--
ALTER TABLE `tos2datafootplat`
  MODIFY `id_tos25` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tos2datakolom`
--
ALTER TABLE `tos2datakolom`
  MODIFY `id_tos26` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tos2kolompedestal`
--
ALTER TABLE `tos2kolompedestal`
  MODIFY `id_tos22` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tos2lewatan`
--
ALTER TABLE `tos2lewatan`
  MODIFY `id_tos24` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tos2pedestal`
--
ALTER TABLE `tos2pedestal`
  MODIFY `id_tos21` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos2summary`
--
ALTER TABLE `tos2summary`
  MODIFY `id_tos23` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos3data`
--
ALTER TABLE `tos3data`
  MODIFY `id_tos31` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos3ground`
--
ALTER TABLE `tos3ground`
  MODIFY `id_tos32` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos3pumproom`
--
ALTER TABLE `tos3pumproom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos3summary`
--
ALTER TABLE `tos3summary`
  MODIFY `id_tos34` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos4data`
--
ALTER TABLE `tos4data`
  MODIFY `id_tos41` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos4ground`
--
ALTER TABLE `tos4ground`
  MODIFY `id_tos43` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos4pool`
--
ALTER TABLE `tos4pool`
  MODIFY `id_tos42` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos4pumproom`
--
ALTER TABLE `tos4pumproom`
  MODIFY `id_tos44` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos4summary`
--
ALTER TABLE `tos4summary`
  MODIFY `id_tos45` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos5data`
--
ALTER TABLE `tos5data`
  MODIFY `id_tos51` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos5ground`
--
ALTER TABLE `tos5ground`
  MODIFY `id_tos52` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos5pumproom`
--
ALTER TABLE `tos5pumproom`
  MODIFY `id_tos53` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos5summary`
--
ALTER TABLE `tos5summary`
  MODIFY `id_tos54` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos6lantai1`
--
ALTER TABLE `tos6lantai1`
  MODIFY `id_tos62` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos6pumproom`
--
ALTER TABLE `tos6pumproom`
  MODIFY `id_tos64` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos6summary`
--
ALTER TABLE `tos6summary`
  MODIFY `id_tos65` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos6uppergf`
--
ALTER TABLE `tos6uppergf`
  MODIFY `id_tos61` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos6uppergf2`
--
ALTER TABLE `tos6uppergf2`
  MODIFY `id_tos63` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos6_a_r`
--
ALTER TABLE `tos6_a_r`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7ar`
--
ALTER TABLE `tos7ar`
  MODIFY `id_tos78` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7gutterkolamrenang`
--
ALTER TABLE `tos7gutterkolamrenang`
  MODIFY `id_tos73` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7janggutan`
--
ALTER TABLE `tos7janggutan`
  MODIFY `id_tos75` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7lantai1`
--
ALTER TABLE `tos7lantai1`
  MODIFY `id_tos74` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7pool`
--
ALTER TABLE `tos7pool`
  MODIFY `id_tos72` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7pumproom`
--
ALTER TABLE `tos7pumproom`
  MODIFY `id_tos71` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7rwbatukali`
--
ALTER TABLE `tos7rwbatukali`
  MODIFY `id_tos76` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7summary`
--
ALTER TABLE `tos7summary`
  MODIFY `id_tos77` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tos7vrwbatu_kali`
--
ALTER TABLE `tos7vrwbatu_kali`
  MODIFY `id_tos79` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
