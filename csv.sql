-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: csv
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.12.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `csv_test`
--

DROP TABLE IF EXISTS `csv_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `csv_test` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Zip` int(11) DEFAULT NULL,
  `CHFNM` varchar(250) DEFAULT NULL,
  `CHFTITLE` varchar(250) DEFAULT NULL,
  `Webaddress` varchar(350) DEFAULT NULL,
  `County` varchar(250) DEFAULT NULL,
  `Longitude` int(11) DEFAULT NULL,
  `Latitude` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=101190 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `csv_test`
--

LOCK TABLES `csv_test` WRITE;
/*!40000 ALTER TABLE `csv_test` DISABLE KEYS */;
INSERT INTO `csv_test` VALUES (100636,'Community College of the Air Force','100 S Turner Blvd','Montgomery','AL',36114,'Jonathan T. Hamill','Commandant','www.au.af.mil/au/ccaf/','Montgomery County, AL',-86,32),(100654,'Alabama A & M University','4900 Meridian Street','Normal','AL',35762,'Dr. Andrew Hugine, Jr.','President','www.aamu.edu/','Madison County, AL',-87,35),(100663,'University of Alabama at Birmingham','Administration Bldg Suite 1070','Birmingham','AL',35294,'Carol Z. Garrison','President','www.uab.edu','Jefferson County, AL',-87,34),(100690,'Amridge University','1200 Taylor Rd','Montgomery','AL',36117,'Michael Turner','President','www.amridgeuniversity.edu','Montgomery County, AL',-86,32),(100706,'University of Alabama at Huntsville','301 Sparkman Dr','Huntsville','AL',35899,'Malcolm Portera','Interim President','www.uah.edu','Madison County, AL',-87,35),(100724,'Alabama State University','915 S Jackson Street','Montgomery','AL',36104,'William H. Harris','President','www.alasu.edu','Montgomery County, AL',-86,32),(100733,'University of Alabama System Office','401 Queen City Ave','Tuscaloosa','AL',35401,'Malcolm Portera','Chancellor','www.uasystem.ua.edu','Tuscaloosa County, AL',-88,33),(100751,'The University of Alabama','739 University Blvd','Tuscaloosa','AL',35487,'Robert E. Witt','President','www.ua.edu/','Tuscaloosa County, AL',-88,33),(100760,'Central Alabama Community College','1675 Cherokee Rd','Alexander City','AL',35010,'Stephen Franks','President','www.cacc.edu','Tallapoosa County, AL',-86,33),(100812,'Athens State University','300 N Beaty St','Athens','AL',35611,'Robert Glenn','President','www.athens.edu','Limestone County, AL',-87,35),(100830,'Auburn University at Montgomery','7440 East Drive','Montgomery','AL',36117,'John G. Veres III','Chancellor','www.aum.edu','Montgomery County, AL',-86,32),(100858,'Auburn University','Auburn, Alabama','Auburn University','AL',36849,'Jay Gogue','President','www.auburn.edu','Lee County, AL',-85,33),(100937,'Birmingham Southern College','900 Arkadelphia Road','Birmingham','AL',35254,'General Charles Krulak','President','www.bsc.edu','Jefferson County, AL',-87,34),(101028,'Chattahoochee Valley Community College','2602 College Drive','Phenix City','AL',36869,'Dr. Glen Cannon','President','www.cv.edu','Russell County, AL',-85,32),(101073,'Concordia College Alabama','1712 Broad Street','Selma','AL',36701,'Dr. Tilahun M.Mendedo','President','www.ccal.edu','Dallas County, AL',-87,32),(101116,'South University-Montgomery','5355 Vaughn Road','Montgomery','AL',36116,'Victor K Biebighauser','President','southuniversity.edu','Montgomery County, AL',-86,32),(101143,'Enterprise State Community College','600 Plaza Drive','Enterprise','AL',36330,'Nancy Chandler, Ed.D.','President','www.escc.edu','Coffee County, AL',-86,31),(101161,'James H Faulkner State Community College','1900 US Hwy 31 S','Bay Minette','AL',36507,'Gary Branch','President','www.faulknerstate.edu','Baldwin County, AL',-88,31),(101189,'Faulkner University','5345 Atlanta Hwy','Montgomery','AL',36109,'Billy D Hilyer','President','www.faulkner.edu','Montgomery County, AL',-86,32);
/*!40000 ALTER TABLE `csv_test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-12-03 23:23:39
