-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 04:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accbio`
--

CREATE TABLE `accbio` (
  `AccountID` int(100) NOT NULL,
  `BioID` int(100) NOT NULL,
  `AccountName` varchar(100) NOT NULL,
  `AccountContact` varchar(100) NOT NULL,
  `AccountAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accbio`
--

INSERT INTO `accbio` (`AccountID`, `BioID`, `AccountName`, `AccountContact`, `AccountAddress`) VALUES
(5, 4, 'Rhed Silvestre', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountID` int(100) NOT NULL,
  `AccountUser` varchar(100) NOT NULL,
  `AccountPass` varchar(100) NOT NULL,
  `AccountPic` varchar(1) NOT NULL,
  `DateMade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountID`, `AccountUser`, `AccountPass`, `AccountPic`, `DateMade`) VALUES
(5, 'asd', '$2y$12$WC7bA3wG4Q4n3tJv7XIfNeeQghYSKZ0BsgXq7J8yyDBNN3B3oI4bO', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(100) NOT NULL,
  `PostID` int(255) NOT NULL,
  `AdminUser` varchar(50) NOT NULL,
  `AdminPass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `AccountID` int(255) NOT NULL,
  `DonateID` int(255) NOT NULL,
  `BankID` varchar(50) NOT NULL,
  `BankHistory` varchar(100) NOT NULL,
  `BankAmount` int(100) NOT NULL,
  `DonateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `AccountID` int(255) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `ItemType` varchar(100) NOT NULL,
  `ItemPrice` varchar(100) NOT NULL,
  `ItemInfo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `AccountID` int(255) NOT NULL,
  `PetID` int(100) NOT NULL,
  `PetBreed` varchar(100) NOT NULL,
  `PetType` varchar(100) NOT NULL,
  `PetName` varchar(100) NOT NULL,
  `PetAge` int(10) NOT NULL,
  `PetRecord` varchar(255) NOT NULL,
  `PetPic` varchar(1) NOT NULL,
  `PetSize` varchar(150) NOT NULL,
  `PetGender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `AccountID` int(255) NOT NULL,
  `PostID` int(100) NOT NULL,
  `PetID` int(100) NOT NULL,
  `ServID` int(100) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `PostPic` varchar(1) NOT NULL,
  `PostVid` varchar(1) NOT NULL,
  `PostComment` varchar(100) NOT NULL,
  `PostReply` varchar(100) NOT NULL,
  `PostType` varchar(100) NOT NULL,
  `PostPaw` int(100) NOT NULL,
  `PostReport` varchar(100) NOT NULL,
  `PostDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `AccountID` int(255) NOT NULL,
  `ServiceID` int(100) NOT NULL,
  `ServType` varchar(100) NOT NULL,
  `ServContact` varchar(100) NOT NULL,
  `ServAddress` varchar(100) NOT NULL,
  `ServName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accbio`
--
ALTER TABLE `accbio`
  ADD PRIMARY KEY (`BioID`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`DonateID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ServiceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accbio`
--
ALTER TABLE `accbio`
  MODIFY `BioID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `DonateID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ServiceID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
