-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 10:37 AM
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
  `AccountID` int(255) NOT NULL,
  `BioID` int(100) NOT NULL,
  `AccountName` varchar(100) NOT NULL,
  `AccountContact` varchar(100) NOT NULL,
  `AccountAddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountID` int(100) NOT NULL,
  `BioID` int(100) NOT NULL,
  `PetID` int(100) NOT NULL,
  `DonateID` int(100) NOT NULL,
  `ServiceID` int(100) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `AccountUser` varchar(100) NOT NULL,
  `AccountPass` varchar(100) NOT NULL,
  `AccountPic` varchar(1) NOT NULL,
  `DateMade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `adminplc`
--

CREATE TABLE `adminplc` (
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
  `DonateID` int(255) NOT NULL,
  `donateamount` varchar(100) NOT NULL,
  `donatefn` varchar(100) NOT NULL,
  `donateln` varchar(100) NOT NULL,
  `donateemail` varchar(100) NOT NULL,
  `donatecn` varchar(100) NOT NULL,
  `donatecomment` varchar(100) NOT NULL
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
-- Table structure for table `itempost`
--

CREATE TABLE `itempost` (
  `AccountID` int(255) NOT NULL,
  `itempostid` int(2) NOT NULL,
  `petype` varchar(20) NOT NULL,
  `itemdesc` varchar(100) NOT NULL,
  `itemprc` int(20) NOT NULL,
  `cont` int(200) NOT NULL,
  `loc` varchar(20) NOT NULL,
  `image` longblob NOT NULL
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
  `PetSize` varchar(150) NOT NULL,
  `PetGender` varchar(50) NOT NULL,
  `PetPic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` int(100) NOT NULL,
  `AccountID` int(100) NOT NULL,
  `PetID` int(100) NOT NULL,
  `ServiceID` int(100) NOT NULL,
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
  `AccountID` int(11) NOT NULL,
  `ServiceID` int(100) NOT NULL,
  `ServType` varchar(100) NOT NULL,
  `ServDesc` varchar(100) NOT NULL,
  `ServContact` varchar(100) NOT NULL,
  `ServAddress` varchar(100) NOT NULL,
  `ServImage` longblob NOT NULL
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
-- Indexes for table `adminplc`
--
ALTER TABLE `adminplc`
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
-- Indexes for table `itempost`
--
ALTER TABLE `itempost`
  ADD PRIMARY KEY (`itempostid`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`PetID`);

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
  MODIFY `BioID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `adminplc`
--
ALTER TABLE `adminplc`
  MODIFY `AdminID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `DonateID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itempost`
--
ALTER TABLE `itempost`
  MODIFY `itempostid` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `PetID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ServiceID` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
