-- MySQL dump 10.13  Distrib 8.0.11, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: 32207071
-- ------------------------------------------------------
-- Server version	8.0.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adoptiontbl`
--

DROP TABLE IF EXISTS `adoptiontbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `adoptiontbl` (
  `dname` char(10) NOT NULL,
  `hname` char(8) NOT NULL,
  `phone` char(11) NOT NULL,
  `go` char(4) DEFAULT NULL,
  `byeday` date NOT NULL,
  PRIMARY KEY (`hname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adoptiontbl`
--

LOCK TABLES `adoptiontbl` WRITE;
/*!40000 ALTER TABLE `adoptiontbl` DISABLE KEYS */;
INSERT INTO `adoptiontbl` VALUES ('냐냐','공주','01056565454','서울','2023-06-08'),('누누','권용철','01054426455','서울','2023-08-04'),('썬더','권지민','0106373191','서울','2023-11-16'),('냐냐','김가을','01077864531','부산','2023-07-16'),('쿠키','김레이','01011234456','일본','2023-12-09'),('다다','도도','01086866868','강북','2023-04-04'),('바둑이','라라','01066668888','인도','2023-07-16'),('바둑이','레레','01066668888','인도','2023-07-16'),('모모','마마','01044474444','서초','2023-08-09'),('나나','미미','01056565454','중국','2023-06-08'),('밀크','박용순','01055556666','천안','2023-08-16'),('볼트','박원형','01011112222','경기','2023-12-01'),('라라','안유진','01055557777','서울','2023-06-19'),('초코','장원영','01099994456','이촌','2023-12-11'),('핑키','정수연','01033334444','울산','2023-06-09'),('나나','지지','01015151515','강남','2023-09-09');
/*!40000 ALTER TABLE `adoptiontbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dogtbl`
--

DROP TABLE IF EXISTS `dogtbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `dogtbl` (
  `dname` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `place` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `gender` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hname` char(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `go` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `byeday` date DEFAULT NULL,
  PRIMARY KEY (`dname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dogtbl`
--

LOCK TABLES `dogtbl` WRITE;
/*!40000 ALTER TABLE `dogtbl` DISABLE KEYS */;
INSERT INTO `dogtbl` VALUES ('마루',1,'서울','믹스','2023-12-11','수컷',NULL,NULL,NULL,NULL),('마마',5,'인천','푸들','2023-12-11','암컷',NULL,NULL,NULL,NULL),('미미',3,'부산','푸들','2023-12-11','암컷',NULL,NULL,NULL,NULL),('비비',8,'인천','포메라니안','2023-12-11','암컷',NULL,NULL,NULL,NULL),('빨대',6,'울산','허스키','2023-12-11','암컷',NULL,NULL,NULL,NULL),('야옹이',8,'서울','꼬똥','2023-12-11','수컷',NULL,NULL,NULL,NULL),('치치',5,'일본','말티즈','2023-12-11','수컷',NULL,NULL,NULL,NULL),('하하',7,'강릉','믹스','2023-12-11','수컷',NULL,NULL,NULL,NULL),('한국',2,'미국','푸들','2023-12-11','암컷',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `dogtbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteertbl`
--

DROP TABLE IF EXISTS `volunteertbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `volunteertbl` (
  `vname` char(4) NOT NULL,
  `pnumber` char(11) NOT NULL,
  `sdate` date DEFAULT NULL,
  `vwhere` char(2) DEFAULT NULL,
  PRIMARY KEY (`vname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteertbl`
--

LOCK TABLES `volunteertbl` WRITE;
/*!40000 ALTER TABLE `volunteertbl` DISABLE KEYS */;
INSERT INTO `volunteertbl` VALUES ('권용철','01055555666','2023-12-11','노원'),('권지민','01064373191','2023-11-16','서울'),('박준호','01013131313','2023-11-16','서울'),('이다비','01012121212','2023-11-16','서울'),('정수연','01012345678','2023-11-16','서울'),('조채낭','01014141414','2023-11-16','서울');
/*!40000 ALTER TABLE `volunteertbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-11 22:30:58
