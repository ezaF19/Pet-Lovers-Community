-- phpMyAdmin SQL Dump
-- version 2.9.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 1, 2018 at 09:30 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

-- 
-- Database: `plc_db`
-- 
DROP DATABASE `plc_db`;
CREATE DATABASE `plc_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `plc_db`;

-- --------------------------------------------------------

-- 
-- Table structure for table `account`
-- 
CREATE TABLE `account` (
  `AccountID` int(100) NOT NULL auto_increment,
  `BioID` int(100) NOT NULL,
  `PetID` int(100) NOT NULL,
  `DonateID` int(100) NOT NULL,
  `ServiceID` int(100) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `AccountUser` varchar(100) NOT NULL,
  `AccountPass` varchar(100) NOT NULL,
  `AccountPic` varchar(1) NOT NULL,
  `DateMade` date() NOT NULL,
  PRIMARY KEY  (`AccountID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `accbio`
-- 
CREATE TABLE `accbio` (
  `BioID` int(100) NOT NULL auto_increment,
  `AccountName` varchar(100) NOT NULL,
  `AccountContact` varchar(100) NOT NULL,
  `AccountAddress` varchar(100) NOT NULL,
  `DateMade` date() NOT NULL,
  PRIMARY KEY  (`BioID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `adminplc`
-- 
CREATE TABLE `adminplc` (
  `AdminID` int(100) NOT NULL auto_increment,
  `PostID` int(255) NOT NULL,
  `AdminUser` varchar(50) NOT NULL,
  `AdminPass` varchar(50) NOT NULL,
  PRIMARY KEY  (`AdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `donation`
-- 
CREATE TABLE `donation` (
  `DonateID` int(100) NOT NULL auto_increment,
  `BankID` varchar(50) NOT NULL,
  `BankHistory` varchar(100) NOT NULL,
  `BankAmount` int(100) NOT NULL,
  `DonateDate` date() NOT NULL,
  PRIMARY KEY  (`DonateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `item`
-- 
CREATE TABLE `item` (
  `ItemID` int(100) NOT NULL auto_increment,
  `ItemType` varchar(100) NOT NULL,
  `ItemPrice` varchar(100) NOT NULL,
  `ItemInfo` varchar(100) NOT NULL,
  PRIMARY KEY  (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `pet`
-- 
CREATE TABLE `pet` (
  `PetID` int(100) NOT NULL auto_increment,
  `PetBreed` varchar(100) NOT NULL,
  `PetType` varchar(100) NOT NULL,
  `PetName` varchar(100) NOT NULL,
  `PetAge` int(10) NOT NULL,
  `PetRecord` varchar(100) NOT NULL,
  `PetPic` varchar(1) NOT NULL,
  `PetSize` varchar(150) NOT NULL,
  `PetGender` varchar(50) NOT NULL,
  PRIMARY KEY  (`PetID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `post`
-- 
CREATE TABLE `post` (
  `PostID` int(100) NOT NULL auto_increment,
  `AccountID` int(100) NOT NULL,
  `PetID` int(100) NOT NULL,
  `ServiceID` int(100) NOT NULL,
  `ItemID` int(100) NOT NULL,
  `PostPic` varchar(1),
  `PostVid` varchar(1),
  `PostComment` varchar(100) NOT NULL,
  `PostReply` varchar(100) NOT NULL,
  `PostType` varchar(100) NOT NULL,
  `PostPaw` varchar(100) NOT NULL,
  `PostReport` varchar(100) NOT NULL,
  `PostDate` date() NOT NULL,
  PRIMARY KEY  (`PostID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `service`
-- 
CREATE TABLE `service` (
  `ServiceID` int(100) NOT NULL auto_increment,
  `ServiceType` varchar(100) NOT NULL,
  `ServContact` varchar(100) NOT NULL,
  `ServAddress` varchar(100),
  `ServName` varchar(100) NOT NULL,
  PRIMARY KEY  (`ServiceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;


