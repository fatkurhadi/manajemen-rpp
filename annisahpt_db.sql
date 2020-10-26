-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Jul 2020 pada 09.16
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annisahpt_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity`
--

CREATE TABLE `activity` (
  `no_bukti` varchar(50) NOT NULL,
  `kode_project` varchar(20) NOT NULL DEFAULT '-',
  `kode_pelaksana` varchar(20) NOT NULL DEFAULT '-',
  `kode_sandi` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` decimal(65,0) NOT NULL,
  `debet` decimal(65,0) NOT NULL,
  `kredit` decimal(65,0) NOT NULL,
  `saldo` decimal(65,0) NOT NULL,
  `loguser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`no_bukti`, `kode_project`, `kode_pelaksana`, `kode_sandi`, `tanggal`, `keterangan`, `jumlah`, `debet`, `kredit`, `saldo`, `loguser`) VALUES
('KM00000280620184708', '-', '000ANN', '01KM', '2020-06-01', 'Saldo awal', '1200550000000', '1200550000000', '0', '1200550000000', '00AD'),
('KK00001280620191407', '000PE280620', '000ANN', '02KK', '2020-06-04', 'Pembelian Pohon', '32400000', '0', '32400000', '1200517600000', '00AD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('0hon0r9i7sru20ue8eoeoucrrvu15ir3', '::1', 1593799153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333739393132353b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('0t7cauer8f6o81gjlat65fne5k5vn43t', '::1', 1593805838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830333736393b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738373132333b),
('287l1npmdiml90rnr0g76e7gutujcd6b', '::1', 1594045289, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034353234353b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('2bk4tnu8c0g3jhlpb29gr1c3so9kp7fh', '::1', 1594042398, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034323137373b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('2had6k089ohmqk4cf9nm8cgvpe5go9an', '::1', 1593802081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830313933383b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('41bee03vdq5meqbn63240r2iuu7d1bdc', '::1', 1593801435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830313433353b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738373132333b),
('4ecf3jbjg255h4akn319pq2dtoljjg9d', '::1', 1593803709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830333433353b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738373132333b),
('4ikn7vub222t3cgukopmhvncfav7fnn5', '::1', 1593805528, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830353330393b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('60976kbejorrnig2rikveqro7m4n9lu3', '::1', 1594039941, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343033393634343b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('6uoqctfs6hph823jf6p6l7h094ngcpd2', '::1', 1594051157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343035303839343b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343034393737323b),
('7m9nfol5f8u92qt9jv25p3knu06rqiq0', '::1', 1594044611, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034343334383b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('9mrv0qgtrjb8kc02e88mvrkk0ju72lbu', '::1', 1593806038, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830353834313b74696d656f75747c693a313539333738373132333b6d6573736167657c733a3235343a223c64697620636c6173733d22616c65727420616c6572742d7375636365737320616c6572742d6469736d69737369626c6520666164652073686f772220726f6c653d22616c657274223e0d0a20202020416e64612074656c6168206c6f676f7574210d0a202020203c627574746f6e20747970653d22627574746f6e2220636c6173733d22636c6f73652220646174612d6469736d6973733d22616c6572742220617269612d6c6162656c3d22436c6f7365223e0d0a2020202020203c7370616e20617269612d68696464656e3d2274727565223e2674696d65733b3c2f7370616e3e0d0a202020203c2f627574746f6e3e0d0a202020203c2f6469763e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('9o7tlbg2vd58gjtbrpj95t1i1o7kc9kk', '::1', 1594041118, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034303634363b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('arnilkrlp9f3nsj78ioul6opkhhcj18n', '::1', 1593803539, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830333236383b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('b57l80502t6gccunqfeggd2dd9h2fjcs', '::1', 1593804224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830333934313b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('c9ic7i1cl028eg3iim6s7r72ju0g06oo', '::1', 1593802776, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830323539303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('dpvij3aaq8f615vqfee0irlds7pnkbmc', '::1', 1594040253, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034303031333b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('ee346k7d4piscursdt57bg89ue78oss1', '::1', 1594051582, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343035313538303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343034393737323b),
('ehpce140g6770s01gvd5d651uj1rk3o9', '::1', 1593804883, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830343630373b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('fcadufu3l0dqa82krq0hfsp7uvpd1aei', '::1', 1593800229, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333739393933363b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('fe6kmbqtp4pd0agir0nlubu149qs3rnr', '::1', 1593800602, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830303331303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('gi3lliss7qcfca37cf4jlpauofqp47o6', '::1', 1593800940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830303634323b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('gq2hastj203s6jcu6df11jl82cqrq34s', '::1', 1594051400, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343035313234363b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343034393737323b),
('gs3uvoodgc99bg0fkul2ga9vid1aip90', '::1', 1594041313, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034313132313b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('hd4kfdfqnsnrsmv9e7lo308k8uvnt47j', '::1', 1594040620, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034303334313b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b6d6573736167657c733a3239323a223c64697620636c6173733d22616c6572742062672d64616e6765722220726f6c653d22616c657274222069643d22616c657274223e0d0a090909093c73766720636c6173733d22676c797068207374726f6b656420666c6167223e3c75736520786c696e6b3a687265663d22237374726f6b65642d666c6167223e3c2f7573653e3c2f7376673e2042656c756d20616461206c61706f72616e207472616e73616b736921203c6120687265663d2222206f6e636c69636b3d2272657475726e20636c6f7365616c6572742874686973292220636c6173733d2270756c6c2d7269676874223e3c7370616e20636c6173733d22676c79706869636f6e20676c79706869636f6e2d72656d6f7665223e3c2f7370616e3e3c2f613e0d0a0909093c2f6469763e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('ig01d8rk0vtlepo662749b15801nvcvs', '::1', 1593802496, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830323235323b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('j30artgq5uhfsmr2obi7btkjnk8duilb', '::1', 1594052384, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343035323135333b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343034393737323b),
('l379iotbcrfir18339dre8el00cb61ku', '::1', 1594050835, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343035303539313b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343034393737323b),
('l8fk41n8a704642uqkfqgs4saf6kt748', '::1', 1594046735, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034363732373b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('l9f5vcqa90no1bned2thg9ka6iqq80k7', '::1', 1593802632, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830323333383b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738373132333b),
('mmodpfvo1honpqr8sbvu63pts78plksq', '::1', 1594047508, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034373438373b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('mvtp0nqfp52aguinga5ndlk27u86piep', '::1', 1594045680, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034353536383b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('n8bllpn49uvdu3vn2if90aolu2grae9c', '::1', 1593801441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830313434313b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738373132333b),
('nj986l4l3r0qmg4rtjhdbd82nq601atk', '::1', 1593801435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830313433353b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738373132333b),
('rai46eo1mmust52s6a4b0afa4dvmkmil', '::1', 1594048219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034383230303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('rkoamie8fedti2v2gn3kiadlasigmkq3', '::1', 1594046018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034353934303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('rmt362f67i198om91lbhpbf848q0mam6', '::1', 1593801919, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830313632303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('rrhq6s8kustk65arvj0k0oqfmr0cbu4q', '::1', 1594049859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034393735393b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343034393737323b),
('s7aofh2h8v4cfoohk8inpegdb8pkspdr', '::1', 1593803920, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830333632373b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('sub6tsndbgiffvfhn4or0i37jgbve8jm', '::1', 1594046706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034363432333b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('t8jhspcsh5u08ek39cl0o63o6jij84c3', '::1', 1594052894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343035323630303b74696d656f75747c693a313539343034393737323b6d6573736167657c733a3235343a223c64697620636c6173733d22616c65727420616c6572742d7375636365737320616c6572742d6469736d69737369626c6520666164652073686f772220726f6c653d22616c657274223e0d0a20202020416e64612074656c6168206c6f676f7574210d0a202020203c627574746f6e20747970653d22627574746f6e2220636c6173733d22636c6f73652220646174612d6469736d6973733d22616c6572742220617269612d6c6162656c3d22436c6f7365223e0d0a2020202020203c7370616e20617269612d68696464656e3d2274727565223e2674696d65733b3c2f7370616e3e0d0a202020203c2f627574746f6e3e0d0a202020203c2f6469763e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('taq7cr4lgmr5rt2af7hnmcvepmbmmbe6', '::1', 1593806004, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830353935353b74696d656f75747c693a313539333738393230383b6d6573736167657c733a3235343a223c64697620636c6173733d22616c65727420616c6572742d7375636365737320616c6572742d6469736d69737369626c6520666164652073686f772220726f6c653d22616c657274223e0d0a20202020416e64612074656c6168206c6f676f7574210d0a202020203c627574746f6e20747970653d22627574746f6e2220636c6173733d22636c6f73652220646174612d6469736d6973733d22616c6572742220617269612d6c6162656c3d22436c6f7365223e0d0a2020202020203c7370616e20617269612d68696464656e3d2274727565223e2674696d65733b3c2f7370616e3e0d0a202020203c2f627574746f6e3e0d0a202020203c2f6469763e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('tgoq32svmecdqpjkahldh6a3mom3e2ii', '::1', 1593805937, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830353634363b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('u640j06g47jtniq9efbpund9ruaflhm8', '::1', 1594044862, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539343034343830313b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539343033393636313b),
('unejb1namk13c5vig17oub9146r0dk4c', '::1', 1593801434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333739393533393b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738373132333b),
('v7au4ui9pa5jieqfpob70e3ier7rutdv', '::1', 1593801454, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830313330303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('v8u26tc9n1t2ma2h11riskllcabeuonp', '::1', 1593805044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830343931383b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('vbllqi0tt87i6f22hhjpjab1p7ahbk7r', '::1', 1593801153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333830303935303b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b),
('vi6uadk7sjpdueji7pnngi583ij0sl1l', '::1', 1593799836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333739393534323b75736572636f64657c733a343a2230304144223b757365726e616d657c733a31363a2241646d696e20416e6e69736168205054223b6c6576656c7c733a31333a2241646d696e6973747261746f72223b74696d656f75747c693a313539333738393230383b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `counter`
--

CREATE TABLE `counter` (
  `no` int(11) NOT NULL,
  `kasmasuk` int(11) DEFAULT NULL,
  `kaskeluar` int(11) DEFAULT NULL,
  `pindahbuku` int(11) DEFAULT NULL,
  `bankmasuk` int(11) DEFAULT NULL,
  `bankkeluar` int(11) DEFAULT NULL,
  `hutang` int(11) DEFAULT NULL,
  `piutang` int(11) DEFAULT NULL,
  `saldokas` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `counter`
--

INSERT INTO `counter` (`no`, `kasmasuk`, `kaskeluar`, `pindahbuku`, `bankmasuk`, `bankkeluar`, `hutang`, `piutang`, `saldokas`) VALUES
(1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1200550000000'),
(2, NULL, 1, NULL, NULL, NULL, NULL, NULL, '1200517600000'),
(11, NULL, NULL, NULL, NULL, 2, NULL, NULL, '1200513120000'),
(12, NULL, NULL, NULL, 2, NULL, NULL, NULL, '1200517600000'),
(13, NULL, NULL, NULL, NULL, 2, NULL, NULL, '1200510540000'),
(14, NULL, NULL, NULL, 2, NULL, NULL, NULL, '1200517600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detil_project`
--

CREATE TABLE `detil_project` (
  `no_rpp` int(11) NOT NULL,
  `kode_project` varchar(20) NOT NULL,
  `kode_item` varchar(6) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `harga_satuan` decimal(65,0) NOT NULL,
  `jumlah` decimal(65,0) NOT NULL,
  `realisasi` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detil_project`
--

INSERT INTO `detil_project` (`no_rpp`, `kode_project`, `kode_item`, `qty`, `harga_satuan`, `jumlah`, `realisasi`) VALUES
(1, '000PE280620', '00KE', '240.00', '105000', '25200000', '21060000'),
(2, '000PE280620', '01PE', '60.00', '550000', '33000000', '32400000'),
(3, '001RE280620', '02SE', '64.00', '70000', '4480000', '0'),
(4, '001RE280620', '03CA', '30.00', '86000', '2580000', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detil_transaksi`
--

CREATE TABLE `detil_transaksi` (
  `no_bukti` varchar(50) NOT NULL,
  `no_referensi_nota` varchar(35) NOT NULL DEFAULT '-',
  `kode_item` varchar(6) NOT NULL,
  `keterangan` text NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `harga` decimal(65,0) NOT NULL,
  `jumlah` decimal(65,0) NOT NULL,
  `loguser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detil_transaksi`
--

INSERT INTO `detil_transaksi` (`no_bukti`, `no_referensi_nota`, `kode_item`, `keterangan`, `qty`, `harga`, `jumlah`, `loguser`) VALUES
('KK00001280620191407', 'TTH03062020001', '01PE', 'Penanaman pohon', '60.00', '540000', '32400000', '00AD'),
('KK00001280620191407', 'LKT00220200607', '00KE', 'keramik untuk trotoar', '270.00', '78000', '21060000', '00AD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `kode_item` varchar(6) NOT NULL,
  `nama_item` varchar(35) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `satuan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`kode_item`, `nama_item`, `jenis`, `satuan`) VALUES
('00KE', 'Keramik', 'Barang', 'dus'),
('01PE', 'Penanaman Pohon', 'Jasa', 'bibit'),
('02SE', 'Semen', 'Barang', 'sak'),
('03CA', 'Cat Tembok', 'Barang', 'kaleng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaksana`
--

CREATE TABLE `pelaksana` (
  `kode_pelaksana` varchar(20) NOT NULL,
  `nama_pelaksana` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` decimal(15,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelaksana`
--

INSERT INTO `pelaksana` (`kode_pelaksana`, `nama_pelaksana`, `alamat`, `telpon`, `status`) VALUES
('000ANN', 'Annisah Karya Teknik, PT', 'Jl. Terbaik No.1', '81234567890', 1),
('001DUA', 'Dua Jaya Mandiri, CV', 'Jl. Kenangan No.124', '82256784321', 1),
('002GIG', 'Giga Teknik, PT', 'Jl. Sambikerep No.245', '82254678392', 1),
('003MUL', 'Multisen, CV', 'JL. Pandegiling No.316', '8137584363', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `kode_project` varchar(20) NOT NULL,
  `nama_project` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `lokasi` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `nominal` decimal(65,0) NOT NULL,
  `realisasi` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`kode_project`, `nama_project`, `tgl_mulai`, `tgl_akhir`, `lokasi`, `status`, `nominal`, `realisasi`) VALUES
('000PE280620', 'Perbaikan trotoar jalan Ahmad Yani', '2020-06-01', '2020-06-11', 'Ahmad Yani', 0, '320000000', '53460000'),
('001RE280620', 'Renovasi Gedung Budaya', '2020-02-01', '2020-03-10', 'Jendral Sudirman', 0, '280000000', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sandi_transaksi`
--

CREATE TABLE `sandi_transaksi` (
  `kode_sandi` varchar(4) NOT NULL,
  `nama_sandi` varchar(15) NOT NULL,
  `mutasi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sandi_transaksi`
--

INSERT INTO `sandi_transaksi` (`kode_sandi`, `nama_sandi`, `mutasi`) VALUES
('01KM', 'Kas Masuk', 'DEBET'),
('02KK', 'Kas Keluar', 'KREDIT'),
('03PB', 'Pindah Buku', '-'),
('04BM', 'Bank Masuk', 'DEBET'),
('05BK', 'Bank Keluar', 'KREDIT'),
('06HU', 'Hutang', 'KREDIT'),
('07PU', 'Piutang', 'DEBET');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkon`
--

CREATE TABLE `subkon` (
  `kode_project` varchar(20) NOT NULL,
  `kode_pelaksana` varchar(20) NOT NULL,
  `bidang` text NOT NULL,
  `penanggung_jawab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkon`
--

INSERT INTO `subkon` (`kode_project`, `kode_pelaksana`, `bidang`, `penanggung_jawab`) VALUES
('000PE280620', '000ANN', 'Ketua Pelaksana', 'Gatot'),
('000PE280620', '002GIG', 'Cek Material', 'Subroto'),
('000PE280620', '003MUL', 'Tanaman Hidup', 'Muklis'),
('001RE280620', '000ANN', 'Ketua Pelaksana', 'Roby');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_bukti` varchar(50) NOT NULL,
  `kode_project` varchar(20) NOT NULL DEFAULT '-',
  `kode_pelaksana` varchar(20) NOT NULL,
  `kode_sandi` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(8) NOT NULL,
  `total` decimal(65,0) NOT NULL,
  `tgl_add` datetime NOT NULL,
  `posted` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`no_bukti`, `kode_project`, `kode_pelaksana`, `kode_sandi`, `tanggal`, `jenis`, `total`, `tgl_add`, `posted`) VALUES
('KK00001280620191407', '000PE280620', '000ANN', '02KK', '2020-06-04', 'Internal', '53460000', '2020-06-28 19:14:07', 'Y'),
('KM00000280620184708', '-', '000ANN', '01KM', '2020-06-01', 'Internal', '0', '2020-06-01 00:00:00', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kode_user` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `level` varchar(25) NOT NULL,
  `kode_pelaksana` varchar(20) NOT NULL DEFAULT '-',
  `mac_log` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kode_user`, `nama`, `pass`, `level`, `kode_pelaksana`, `mac_log`) VALUES
('00AD', 'Admin Annisah PT', '$2y$10$nkVcxOF5UgFUZff9NCV89eaQE54coKOD/jg.rFC8TmuUxqWTbvv5m', 'Administrator', '-', NULL),
('01OP', 'Operator Annisah PT', '$2y$10$.MasmFr8TV6Rn6M9cd1NkOcqcmvDgbImrpUFrY39hll0L9gSldDq.', 'Operator', '-', NULL),
('02AN', 'Annisah Karya Teknik', '$2y$10$plqgnSXzZLv5kHMRMWG84uI/FTAUESV12jSZ4YweVuQZV23g/KkTa', 'Subkon', '000ANN', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `detil_project`
--
ALTER TABLE `detil_project`
  ADD PRIMARY KEY (`no_rpp`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`kode_item`);

--
-- Indexes for table `pelaksana`
--
ALTER TABLE `pelaksana`
  ADD PRIMARY KEY (`kode_pelaksana`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`kode_project`);

--
-- Indexes for table `sandi_transaksi`
--
ALTER TABLE `sandi_transaksi`
  ADD PRIMARY KEY (`kode_sandi`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_bukti`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detil_project`
--
ALTER TABLE `detil_project`
  MODIFY `no_rpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
