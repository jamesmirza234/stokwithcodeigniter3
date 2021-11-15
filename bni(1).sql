-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 09:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `idBarang` int(11) NOT NULL,
  `kdBarang` varchar(50) DEFAULT NULL,
  `namaBarang` varchar(200) DEFAULT NULL,
  `satuan` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `stokAwal` double DEFAULT '0',
  `stokAkhir` double DEFAULT '0',
  `stokMasuk` double DEFAULT '0',
  `stokKeluar` double DEFAULT '0',
  `stokMin` double DEFAULT '0',
  `stokMax` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`idBarang`, `kdBarang`, `namaBarang`, `satuan`, `keterangan`, `stokAwal`, `stokAkhir`, `stokMasuk`, `stokKeluar`, `stokMin`, `stokMax`) VALUES
(5, '43344', 'Rautan', 'Pcs', 'Rautan Pencil', 34, 120, 71, 0, 0, 0),
(6, '21323', 'Kertas A4', 'Pack', 'Kertas A4', 15, 73, 58, 0, 0, 0),
(7, '009', 'Pulpen`', 'Dus', '-', 10, 14, 14, 0, 0, 0),
(8, '005', 'Gunting', 'Pcs', 'Gunting', 0, 17, 17, 0, 0, 0),
(9, '006', 'Pulpen', 'Pack', 'Pulpen', 0, 43, 43, 0, 0, 0),
(11, '123456', 'Kardus', 'Dus', '-', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluardetail`
--

CREATE TABLE `tbl_keluardetail` (
  `idMasuk` int(11) NOT NULL,
  `kdOut` varchar(200) NOT NULL,
  `kdBarang` varchar(50) DEFAULT NULL,
  `tglOut` varchar(50) DEFAULT NULL,
  `namaBarang` varchar(50) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_keluardetail`
--

INSERT INTO `tbl_keluardetail` (`idMasuk`, `kdOut`, `kdBarang`, `tglOut`, `namaBarang`, `satuan`, `qty`) VALUES
(1, 'Out0001', '43344', '13/07/2020', 'Rautan', 'Pcs', '1'),
(2, 'Out0001', '009', '14/7/2020', 'Pulpen`', 'Dus', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarheader`
--

CREATE TABLE `tbl_keluarheader` (
  `idMasuk` int(11) NOT NULL,
  `kdOut` varchar(200) DEFAULT NULL,
  `tglOut` varchar(50) DEFAULT NULL,
  `Outlet` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_keluarheader`
--

INSERT INTO `tbl_keluarheader` (`idMasuk`, `kdOut`, `tglOut`, `Outlet`) VALUES
(1, 'Out0001', '07/13/2020', 'Tangsel'),
(2, 'Out0002', '07/14/2020', 'Jaktim');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masukdetail`
--

CREATE TABLE `tbl_masukdetail` (
  `idMasuk` int(11) NOT NULL,
  `tglin` varchar(50) DEFAULT NULL,
  `kdIn` varchar(200) DEFAULT NULL,
  `kdBarang` varchar(50) DEFAULT NULL,
  `namaBarang` varchar(50) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masukdetail`
--

INSERT INTO `tbl_masukdetail` (`idMasuk`, `tglin`, `kdIn`, `kdBarang`, `namaBarang`, `satuan`, `qty`) VALUES
(1, '07-08-2020', 'In0001', '43344', 'Rautan', 'Pcs', '10s'),
(2, '07-08-2020', 'In0001', '43344', 'Rautan', 'Pcs', '10'),
(3, '07-08-2020', 'In0001', '21323', 'Kertas A4', 'Pack', '1'),
(4, '10-08-2020', 'In0002', '006', 'Pulpen', 'Pack', '10'),
(5, '10-08-2020', 'In0002', '005', 'Gunting', 'Pcs', '2'),
(6, NULL, 'In0003', '006', 'Pulpen', 'Pack', '23'),
(7, NULL, 'In0003', '005', 'Gunting', 'Pcs', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masukheader`
--

CREATE TABLE `tbl_masukheader` (
  `idMasuk` int(11) NOT NULL,
  `kdIn` varchar(200) DEFAULT NULL,
  `tglin` varchar(50) DEFAULT NULL,
  `Vendor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_masukheader`
--

INSERT INTO `tbl_masukheader` (`idMasuk`, `kdIn`, `tglin`, `Vendor`) VALUES
(1, 'In0001', '07-08-2020', NULL),
(2, 'In0002', '10-08-2020', NULL),
(3, 'In0003', '09-08-2020', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outlet`
--

CREATE TABLE `tbl_outlet` (
  `idOutlet` int(11) NOT NULL,
  `namaOutlet` varchar(200) DEFAULT NULL,
  `alamaOutlet` varchar(200) DEFAULT NULL,
  `noTelp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_outlet`
--

INSERT INTO `tbl_outlet` (`idOutlet`, `namaOutlet`, `alamaOutlet`, `noTelp`) VALUES
(1, 'Tangerang', 'Jl. MH. Thamrin  Kota Tangerang', '0215578945'),
(2, 'Tangsel', 'Amber Heard', '021'),
(3, 'Tangerang Kabupaten', 'Mario', '021345678'),
(4, 'Jaksel', 'Muller', '089899099'),
(7, 'Tangerang', 'Jl. Kota Raya', '02132445'),
(9, 'Tangerang Kabupaten', 'Jl. Raya Pagedangan', '0213245'),
(11, 'Jakbar', 'Jl. Kebon Jeruk', '021345678'),
(19, 'Mauk', 'Jl. Mauk Raya Kabupaten Tangerang', '43436478');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '10406c1d7b7421b1a56f0d951e952a95', 'admin'),
(2, 'jimijvc', '202d36e189ea4678816b2b4f8af9bd75', 'admin'),
(3, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `idVendor` int(11) NOT NULL,
  `namaVendor` varchar(200) DEFAULT NULL,
  `alamatVendor` varchar(200) DEFAULT NULL,
  `noTelp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`idVendor`, `namaVendor`, `alamatVendor`, `noTelp`) VALUES
(1, 'PT. Jaya Angkasa', 'Jl Raya Merdeka No, 21 Jakarta Barat', '021'),
(2, 'PT. Jaya Selalu', 'Jl. Daan Mogot Raya No. 21 Km 3', '021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `tbl_keluardetail`
--
ALTER TABLE `tbl_keluardetail`
  ADD PRIMARY KEY (`idMasuk`);

--
-- Indexes for table `tbl_keluarheader`
--
ALTER TABLE `tbl_keluarheader`
  ADD PRIMARY KEY (`idMasuk`);

--
-- Indexes for table `tbl_masukdetail`
--
ALTER TABLE `tbl_masukdetail`
  ADD PRIMARY KEY (`idMasuk`);

--
-- Indexes for table `tbl_masukheader`
--
ALTER TABLE `tbl_masukheader`
  ADD PRIMARY KEY (`idMasuk`);

--
-- Indexes for table `tbl_outlet`
--
ALTER TABLE `tbl_outlet`
  ADD PRIMARY KEY (`idOutlet`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`idVendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_keluardetail`
--
ALTER TABLE `tbl_keluardetail`
  MODIFY `idMasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_keluarheader`
--
ALTER TABLE `tbl_keluarheader`
  MODIFY `idMasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_masukdetail`
--
ALTER TABLE `tbl_masukdetail`
  MODIFY `idMasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_masukheader`
--
ALTER TABLE `tbl_masukheader`
  MODIFY `idMasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_outlet`
--
ALTER TABLE `tbl_outlet`
  MODIFY `idOutlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `idVendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
