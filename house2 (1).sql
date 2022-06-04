-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 07:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ritewood`
--

-- --------------------------------------------------------

--
-- Table structure for table `house2`
--

CREATE TABLE `house2` (
  `propId` int(4) UNSIGNED ZEROFILL NOT NULL,
  `img_name` varchar(1000) DEFAULT NULL,
  `agent_name` varchar(100) NOT NULL,
  `propAddr` varchar(255) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `price` varchar(16) NOT NULL,
  `listDate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `builtDate` varchar(16) NOT NULL,
  `propCategory` varchar(20) NOT NULL,
  `propType` varchar(10) NOT NULL,
  `rooms` int(2) NOT NULL,
  `sqftAge` varchar(10) NOT NULL,
  `heating` varchar(10) NOT NULL,
  `aircon` varchar(3) NOT NULL,
  `bathroomQty` int(3) NOT NULL,
  `garagespace` int(2) NOT NULL,
  `parkingspace` int(2) NOT NULL,
  `famRm` varchar(50) DEFAULT NULL,
  `livRm` varchar(50) DEFAULT NULL,
  `dinRm` varchar(50) DEFAULT NULL,
  `dbRm1` varchar(50) DEFAULT NULL,
  `dbRm2` varchar(50) DEFAULT NULL,
  `dbRm3` varchar(50) DEFAULT NULL,
  `dbRm4` varchar(50) DEFAULT NULL,
  `kitRm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house2`
--

INSERT INTO `house2` (`propId`, `img_name`, `agent_name`, `propAddr`, `city`, `zipCode`, `price`, `listDate`, `builtDate`, `propCategory`, `propType`, `rooms`, `sqftAge`, `heating`, `aircon`, `bathroomQty`, `garagespace`, `parkingspace`, `famRm`, `livRm`, `dinRm`, `dbRm1`, `dbRm2`, `dbRm3`, `dbRm4`, `kitRm`) VALUES
(0075, './uploads/44 Gaver street', 'Tom Anne', '44 Gaver street', 'Gorgia', '30302', '400000', '2022-04-19 01:42:49.903341', '2022-09-04', 'Single fam', 'Detach', 4, '', '', '', 3, 2, 2, '12ftx14ft, fire Place, Carpet', '12ftx14ft, fire Place, Carpet', '12ftx14ft, Hardwood, Vinyl', '12ftx14ft, fire Place, Closet', '12ftx14ft, fire Place', '12ftx14ft, fire Place, Hardwood', '12ftx14ft, Walk in Closet, Laminate', '12ftx14ft, , fire Place, Carpet'),
(0088, './uploads/99 gotter ave ', 'Tony Felixa', '99 gotter ave', 'Brampton', '30302', '$950,000:00', '2022-04-21 11:46:11.321910', '2022-04-04', 'Semi', 'Simgle Fam', 3, '', 'yes', 'yes', 4, 2, 4, '12ftx13ft, fire Place, Carpet', '12ftx12ft, fire Place, Laminate', '8ftx12ft, Hardwood', '12ftx14ft, Walk in Closet, Hardwood', '12ftx14ft, Walk in Closet, Hardwood', '10ftx10ft, Walk in Closet, Laminate', 'N/A', '5ftx10ft, , Vinyl'),
(0089, './uploads/35 eastbourne drive ', 'Tony Felixa', '35 eastbourne drive', 'Brampton', '30302', '$950,000:00', '2022-04-21 11:49:57.144106', '2022-04-04', 'Semi', 'Simgle Fam', 3, '', 'yes', 'yes', 4, 2, 4, '12ftx13ft, fire Place, Carpet', '12ftx12ft, fire Place, Carpet', '8ftx12ft, Carpet', '12ftx14ft, Walk in Closet, Carpet', '12ftx14ft, Walk in Closet, Vinyl', '10ftx10ft, Walk in Closet', 'N/A', '5ftx10ft, , Vinyl'),
(0090, './uploads/92 Davon street2 ', 'Ben Semmons', '92 Davon street2', 'Brampton', '30302', '$777,888.00', '2022-04-29 17:52:53.445995', '2022-04-09', 'Detach', 'Single Fam', 3, '', 'no', 'yes', 4, 3, 3, '5ftx5ft, fire Place, Hardwood', '4ftx4ft, fire Place, Carpet', '6ftx6ft, Hardwood', '8ftx8ft, Walk in Closet, Hardwood', '9ftx9ft, Walk in Closet, Carpet', '13ftx14ft, Walk in Closet, Laminate', '12ftx12ft, Closet, Laminate', '3ftx4ft, stove, Vinyl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house2`
--
ALTER TABLE `house2`
  ADD PRIMARY KEY (`propId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house2`
--
ALTER TABLE `house2`
  MODIFY `propId` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
