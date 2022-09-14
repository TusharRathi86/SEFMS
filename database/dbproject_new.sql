-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbproject
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tblaccountdetails`
--

DROP TABLE IF EXISTS `tblaccountdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblaccountdetails` (
  `YName` varchar(25) NOT NULL,
  `EMail` varchar(50) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `HomeAddress` varchar(100) NOT NULL,
  `YState` varchar(25) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblaccountdetails`
--

LOCK TABLES `tblaccountdetails` WRITE;
/*!40000 ALTER TABLE `tblaccountdetails` DISABLE KEYS */;
INSERT INTO `tblaccountdetails` VALUES ('Tushar Rathi','tushar.rathi860@gmail.com','6283220270','HNo:46, New Hargobind Nagar, Rupnagar','Punjab ','Male','tushar'),('yogeshrathi','yogeshrathi@gmail.com','9188122116','Address','Punjab','Male','yogesh22'),('Jatinder Kumar','jatinderkumar@gmail.com','9998887771','Zail Singh Nagar Ropar','Punjab','Male','jatinder'),('','','','','','','');
/*!40000 ALTER TABLE `tblaccountdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldeptmaster`
--

DROP TABLE IF EXISTS `tbldeptmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldeptmaster` (
  `deptname` varchar(100) NOT NULL,
  `deptcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldeptmaster`
--

LOCK TABLES `tbldeptmaster` WRITE;
/*!40000 ALTER TABLE `tbldeptmaster` DISABLE KEYS */;
INSERT INTO `tbldeptmaster` VALUES ('COMPUTER SCIENCE AND ENGINEERING','CSEN'),('CIVIL ENGINEERING','CIVE'),('CHEMICAL EMGINEERING','CHEM');
/*!40000 ALTER TABLE `tbldeptmaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstudent_info`
--

DROP TABLE IF EXISTS `tblstudent_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstudent_info` (
  `idno` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(12) NOT NULL,
  `EnrollmentNo` varchar(13) NOT NULL,
  `DeptName` varchar(50) NOT NULL,
  `StudentName` varchar(20) NOT NULL,
  `FatherName` varchar(20) NOT NULL,
  `YClass` varchar(20) NOT NULL,
  `YEMail` varchar(50) NOT NULL,
  `ContactNumber` varchar(10) DEFAULT NULL,
  `YAddress` varchar(100) NOT NULL,
  `YState` varchar(30) NOT NULL,
  `YGender` varchar(6) NOT NULL,
  `FeeSubmitted` char(1) NOT NULL,
  `YearS` varchar(4) NOT NULL,
  UNIQUE KEY `idno` (`idno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudent_info`
--

LOCK TABLES `tblstudent_info` WRITE;
/*!40000 ALTER TABLE `tblstudent_info` DISABLE KEYS */;
INSERT INTO `tblstudent_info` VALUES (1,1,'2022CSEN0001','CSEN','Tushar Rathi','Yogesh Kumar','Btech CSE','tushar2@gmail.com','6283220270','Hargobind Nagar Ropar','Punjab','Male','Y','2022'),(2,1,'2022CHEM0001','CHEM','Tushar Rathi','Yogesh Kumar','BTech CSE','tushar2@gmail.com','6283220270','Hargobind Nagar Ropar','Punjab','Male','Y','2022'),(3,2,'2022CSEN0002','CSEN','ANKIT SHARMA','FATHERS NAME','BTECH CSE','ankits345@gmail.com','9999988888','address','Punjab','Female','Y','2022');
/*!40000 ALTER TABLE `tblstudent_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstudentfee`
--

DROP TABLE IF EXISTS `tblstudentfee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstudentfee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EnrollmentNo` varchar(20) NOT NULL,
  `RegistrationFee` double NOT NULL,
  `TutionFee` double NOT NULL,
  `LibraryFee` double NOT NULL,
  `ExaminationFee` double NOT NULL,
  `TransportationFee` double NOT NULL,
  `LabFee` double NOT NULL,
  `SportsFee` double NOT NULL,
  `TotalFee` double NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstudentfee`
--

LOCK TABLES `tblstudentfee` WRITE;
/*!40000 ALTER TABLE `tblstudentfee` DISABLE KEYS */;
INSERT INTO `tblstudentfee` VALUES (7,'2022CSEN0001',100,100,100,100,100,100,100,700),(8,'2022CHEM0001',200,200,200,200,200,200,200,1400),(9,'2022CSEN0002',50,50,50,50,50,50,50,350);
/*!40000 ALTER TABLE `tblstudentfee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtlogininfo`
--

DROP TABLE IF EXISTS `tbtlogininfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbtlogininfo` (
  `Username` varchar(15) NOT NULL,
  `YPassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtlogininfo`
--

LOCK TABLES `tbtlogininfo` WRITE;
/*!40000 ALTER TABLE `tbtlogininfo` DISABLE KEYS */;
INSERT INTO `tbtlogininfo` VALUES ('tushar','ropar@123'),('yogesh22','ropar@456'),('jatinder','ropar#123'),('','');
/*!40000 ALTER TABLE `tbtlogininfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-13 18:00:17
