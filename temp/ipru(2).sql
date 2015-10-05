-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2015 at 01:44 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipru`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorytable`
--

CREATE TABLE IF NOT EXISTS `categorytable` (
  `categoryID` int(11) NOT NULL,
  `category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classtable`
--

CREATE TABLE IF NOT EXISTS `classtable` (
  `classID` int(11) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collegetable`
--

CREATE TABLE IF NOT EXISTS `collegetable` (
  `collegeID` int(11) NOT NULL,
  `college` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegetable`
--

INSERT INTO `collegetable` (`collegeID`, `college`) VALUES
(1, 'BUCS'),
(2, 'BUCS'),
(3, 'BUCN'),
(4, 'BUCBEM');

-- --------------------------------------------------------

--
-- Table structure for table `copyrightresearchers`
--

CREATE TABLE IF NOT EXISTS `copyrightresearchers` (
  `copyrightID` varchar(100) NOT NULL,
  `userprofileID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `copyrighttable`
--

CREATE TABLE IF NOT EXISTS `copyrighttable` (
  `copyrightID` varchar(100) NOT NULL,
  `dateReceive` date DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `classID` int(11) DEFAULT NULL,
  `dateCreated` date DEFAULT NULL,
  `registeredDate` date DEFAULT NULL,
  `registeredNumber` varchar(20) DEFAULT NULL,
  `dateIssued` date DEFAULT NULL,
  `dateSubmitted` date DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  `ESS` varchar(100) DEFAULT NULL,
  `collegeID` int(11) DEFAULT NULL,
  `NOT` varchar(100) DEFAULT NULL,
  `DB` varchar(100) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `projectStart` date DEFAULT NULL,
  `projectEnd` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industrialdesignresearchers`
--

CREATE TABLE IF NOT EXISTS `industrialdesignresearchers` (
  `industrialID` varchar(100) NOT NULL,
  `userprofileID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industrialdesigntable`
--

CREATE TABLE IF NOT EXISTS `industrialdesigntable` (
  `industrialID` varchar(100) NOT NULL,
  `calendarYear` date DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `issueDate` date DEFAULT NULL,
  `fillingDate` date DEFAULT NULL,
  `registeredNumber` varchar(20) DEFAULT NULL,
  `publicationDate` date DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventionresearchers`
--

CREATE TABLE IF NOT EXISTS `inventionresearchers` (
  `inventionID` varchar(100) NOT NULL,
  `userprofileID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventiontable`
--

CREATE TABLE IF NOT EXISTS `inventiontable` (
  `inventionID` varchar(100) NOT NULL,
  `calendarYear` date DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `collegeID` int(11) DEFAULT NULL,
  `issueDate` date DEFAULT NULL,
  `fillingDate` date DEFAULT NULL,
  `registeredNumber` varchar(20) DEFAULT NULL,
  `publicationDate` date DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `DB` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statustable`
--

CREATE TABLE IF NOT EXISTS `statustable` (
  `statusID` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofiletable`
--

CREATE TABLE IF NOT EXISTS `userprofiletable` (
  `userprofileID` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofiletable`
--

INSERT INTO `userprofiletable` (`userprofileID`, `fname`, `mname`, `lname`) VALUES
(1, 'alvin', 'babasa', 'esquivel'),
(2, 'mark', 'perez', 'azul'),
(3, 'joseph', 'perez', 'alimoot'),
(4, 'roilan', 'asdfg', 'oraa');

-- --------------------------------------------------------

--
-- Table structure for table `utilitymodelresearchers`
--

CREATE TABLE IF NOT EXISTS `utilitymodelresearchers` (
  `utilitymID` varchar(100) NOT NULL,
  `userprofileID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilitymodeltable`
--

CREATE TABLE IF NOT EXISTS `utilitymodeltable` (
  `utilitymID` varchar(100) NOT NULL,
  `calendarYear` date DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `collegeID` int(11) DEFAULT NULL,
  `issueDate` date DEFAULT NULL,
  `fillingDate` date DEFAULT NULL,
  `registeredNumber` varchar(20) DEFAULT NULL,
  `publicationDate` date DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `statusID` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorytable`
--
ALTER TABLE `categorytable`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `classtable`
--
ALTER TABLE `classtable`
  ADD PRIMARY KEY (`classID`);

--
-- Indexes for table `collegetable`
--
ALTER TABLE `collegetable`
  ADD PRIMARY KEY (`collegeID`);

--
-- Indexes for table `copyrightresearchers`
--
ALTER TABLE `copyrightresearchers`
  ADD PRIMARY KEY (`copyrightID`);

--
-- Indexes for table `copyrighttable`
--
ALTER TABLE `copyrighttable`
  ADD PRIMARY KEY (`copyrightID`),
  ADD KEY `fk_copyrightTable_collegeTable1_idx` (`collegeID`),
  ADD KEY `fk_copyrightTable_statusTable1_idx` (`statusID`),
  ADD KEY `fk_copyrightTable_classTable1_idx` (`classID`),
  ADD KEY `fk_copyrightTable_categoryTable1_idx` (`categoryID`);

--
-- Indexes for table `industrialdesignresearchers`
--
ALTER TABLE `industrialdesignresearchers`
  ADD PRIMARY KEY (`industrialID`),
  ADD KEY `fk_industrialdesignResearchers_userprofileTable1_idx` (`userprofileID`);

--
-- Indexes for table `industrialdesigntable`
--
ALTER TABLE `industrialdesigntable`
  ADD PRIMARY KEY (`industrialID`),
  ADD KEY `fk_industrialdesignTable_categoryTable1_idx` (`categoryID`);

--
-- Indexes for table `inventionresearchers`
--
ALTER TABLE `inventionresearchers`
  ADD PRIMARY KEY (`inventionID`),
  ADD KEY `fk_inventionResearchers_userprofileTable1_idx` (`userprofileID`);

--
-- Indexes for table `inventiontable`
--
ALTER TABLE `inventiontable`
  ADD PRIMARY KEY (`inventionID`),
  ADD KEY `fk_inventionTable_collegeTable_idx` (`collegeID`),
  ADD KEY `fk_inventionTable_statusTable1_idx` (`statusID`);

--
-- Indexes for table `statustable`
--
ALTER TABLE `statustable`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `userprofiletable`
--
ALTER TABLE `userprofiletable`
  ADD PRIMARY KEY (`userprofileID`);

--
-- Indexes for table `utilitymodelresearchers`
--
ALTER TABLE `utilitymodelresearchers`
  ADD PRIMARY KEY (`utilitymID`),
  ADD KEY `fk_utilitymodelResearchers_userprofileTable1_idx` (`userprofileID`);

--
-- Indexes for table `utilitymodeltable`
--
ALTER TABLE `utilitymodeltable`
  ADD PRIMARY KEY (`utilitymID`),
  ADD KEY `fk_utilitymodelTable_collegeTable1_idx` (`collegeID`),
  ADD KEY `fk_utilitymodelTable_categoryTable1_idx` (`categoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorytable`
--
ALTER TABLE `categorytable`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `classtable`
--
ALTER TABLE `classtable`
  MODIFY `classID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `collegetable`
--
ALTER TABLE `collegetable`
  MODIFY `collegeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `statustable`
--
ALTER TABLE `statustable`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userprofiletable`
--
ALTER TABLE `userprofiletable`
  MODIFY `userprofileID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `copyrightresearchers`
--
ALTER TABLE `copyrightresearchers`
  ADD CONSTRAINT `fk_copyrightResearchers_copyrightTable1` FOREIGN KEY (`copyrightID`) REFERENCES `copyrighttable` (`copyrightID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `copyrighttable`
--
ALTER TABLE `copyrighttable`
  ADD CONSTRAINT `fk_copyrightTable_categoryTable1` FOREIGN KEY (`categoryID`) REFERENCES `categorytable` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_copyrightTable_classTable1` FOREIGN KEY (`classID`) REFERENCES `classtable` (`classID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_copyrightTable_collegeTable1` FOREIGN KEY (`collegeID`) REFERENCES `collegetable` (`collegeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_copyrightTable_statusTable1` FOREIGN KEY (`statusID`) REFERENCES `statustable` (`statusID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `industrialdesignresearchers`
--
ALTER TABLE `industrialdesignresearchers`
  ADD CONSTRAINT `fk_industrialdesignResearchers_industrialdesignTable1` FOREIGN KEY (`industrialID`) REFERENCES `industrialdesigntable` (`industrialID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_industrialdesignResearchers_userprofileTable1` FOREIGN KEY (`userprofileID`) REFERENCES `userprofiletable` (`userprofileID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `industrialdesigntable`
--
ALTER TABLE `industrialdesigntable`
  ADD CONSTRAINT `fk_industrialdesignTable_categoryTable1` FOREIGN KEY (`categoryID`) REFERENCES `categorytable` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inventionresearchers`
--
ALTER TABLE `inventionresearchers`
  ADD CONSTRAINT `fk_inventionResearchers_inventionTable1` FOREIGN KEY (`inventionID`) REFERENCES `inventiontable` (`inventionID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inventionResearchers_userprofileTable1` FOREIGN KEY (`userprofileID`) REFERENCES `userprofiletable` (`userprofileID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inventiontable`
--
ALTER TABLE `inventiontable`
  ADD CONSTRAINT `fk_inventionTable_collegeTable` FOREIGN KEY (`collegeID`) REFERENCES `collegetable` (`collegeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inventionTable_statusTable1` FOREIGN KEY (`statusID`) REFERENCES `statustable` (`statusID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `utilitymodelresearchers`
--
ALTER TABLE `utilitymodelresearchers`
  ADD CONSTRAINT `fk_utilitymodelResearchers_userprofileTable1` FOREIGN KEY (`userprofileID`) REFERENCES `userprofiletable` (`userprofileID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilitymodelResearchers_utilitymodelTable1` FOREIGN KEY (`utilitymID`) REFERENCES `utilitymodeltable` (`utilitymID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `utilitymodeltable`
--
ALTER TABLE `utilitymodeltable`
  ADD CONSTRAINT `fk_utilitymodelTable_categoryTable1` FOREIGN KEY (`categoryID`) REFERENCES `categorytable` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilitymodelTable_collegeTable1` FOREIGN KEY (`collegeID`) REFERENCES `collegetable` (`collegeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
