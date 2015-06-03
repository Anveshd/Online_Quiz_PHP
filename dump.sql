-- MySQL dump 10.13  Distrib 5.6.20, for Win64 (x86_64)
--
-- Host: localhost    Database: quiz
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `question` varchar(200) DEFAULT NULL,
  `OptionA` varchar(100) DEFAULT NULL,
  `OptionB` varchar(100) DEFAULT NULL,
  `OptionC` varchar(100) DEFAULT NULL,
  `OptionD` varchar(100) DEFAULT NULL,
  `CorrectAnswer` varchar(50) DEFAULT NULL,
  `qn` int(5) NOT NULL AUTO_INCREMENT,
  `userans` varchar(50) DEFAULT NULL,
  `visited` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`qn`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES ('Which of the following feature is not supported by java','A.Multithreading','B.Reflection','C.Operator Overloading','D.Garbage Collection','C',1,NULL,NULL),('What us the full form of JDK?','A.Java Data Kit','B.Java Definition Kit','C.Java Development Kit','D.Java Design Kit','C',2,NULL,NULL),('Which of the following is generated when the source code is succesfully compiled?','A.Output','B.Bytecode','C.Error','D.None of above','B',3,NULL,NULL),('In java,if you do not give a value to a variable before using it?','A.It will contain a garbage value','B.It will initialized with zero','C.Compiler will give aan error','D.None of above','C',4,NULL,NULL),('What is the name of the method used to start a thread execution','A.start()','B.resume()','C.init()','D.run()','A',5,NULL,NULL),('Which is a valid keyword in java','A.interface','B.string','C.unsigned','D.Float','A',6,NULL,NULL),('Which is a reserved word in java programming language','A.method','B.native','C.subclasses','D.reference','B',7,NULL,NULL),('Which is a valid keyword in java','A.interface','B.string','C.unsigned','D.Float','A',8,NULL,NULL),('Which is the valid declarations within an interface definition ','A.public double methoda();','B.public final double methoda()','C.static void methoda(double d1)','D.protected void metthoda(double d1)','A',9,NULL,NULL),('Which one is a valid declaration of a boolean?','A.boolean b1=0;','B.boolean b2=False;','C.boolean b3=false;','D.boolean b4=Boolean.false();','C',10,NULL,NULL),('What is the numerical range of a char?','A.-128 to 127','B.-1 to +1','C.0 to 32767','D.0 to 65535','D',11,NULL,NULL),('What is the prototype of the default constructor?','A.Test()','B.Test void()','C.public Test()','D.public Test(void)','C',12,NULL,NULL),('Which of the following class level(nonlocal) variable declarations will not compile?','A.protected int a;','B.transient int b=3;','C.private synchronized int e;','D.volatile int d;','C',13,NULL,NULL),('Choose the appropriate datatype for this value 5.5? ','A.int','B.double','C.String','D.boolean','B',14,NULL,NULL);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_html`
--

DROP TABLE IF EXISTS `questions_html`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_html` (
  `question` varchar(200) DEFAULT NULL,
  `OptionA` varchar(100) DEFAULT NULL,
  `OptionB` varchar(100) DEFAULT NULL,
  `OptionC` varchar(100) DEFAULT NULL,
  `OptionD` varchar(100) DEFAULT NULL,
  `CorrectAnswer` varchar(50) DEFAULT NULL,
  `qn` int(11) NOT NULL AUTO_INCREMENT,
  `userans` varchar(50) DEFAULT NULL,
  `visited` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`qn`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_html`
--

LOCK TABLES `questions_html` WRITE;
/*!40000 ALTER TABLE `questions_html` DISABLE KEYS */;
INSERT INTO `questions_html` VALUES ('An HTML file written in notepad can be saved with an extension:','A..htm','B..html','C.Any of the above','D.None of the above','C',1,'no','null'),('Which of the following is true about links by default?','A.An unvisited link is underlined and blue','B.A visited link is underlined and red','C.An active link is underlined and purple','D.all of the above','A',2,'no','null'),('Which of the following tags below are used for a multi-line text input control?','A.textml tag','B.text tag','C.textarea tag','D.both b and c abve','C',3,'no','null'),('What is cell padding?','A.Used to seperate cell walls from their contents','B.used to set space between cells','C.Both a and b above','D.Used to provide width to a cell','A',4,'no','null'),('What is mean by DTD?','A.Document type data','B.Data type definition','C.Document type definition','D.Definition type document','C',5,'no','null'),('DOM stands for','A.Document object model','B.Data object model','C.Document Oriented model','D.Data Oriented model ','A',6,'no','null'),('Text/html is called the----of the page','A.content type','B.MIME type','C.content type/MIME type','D.none of these ','C',7,'no','null'),('which html attribute is used to define inline styles?','A.font','B.class','C.styles','D.style','D',8,'no','null'),('what does an HTML tag do?','A.It specifies formatting and layout instructions for your web page','B.It hides programming instructions from view','C.It determines the organizational structure of your website','D.It connects your website to an operating environment','A',9,'no','null'),('which of the followng attributes comes in handy when borders have to be put between groups of columns instead of every column?','A.col','B.colgroup','C.rowspan','D.row','B',10,'no','null');
/*!40000 ALTER TABLE `questions_html` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_php`
--

DROP TABLE IF EXISTS `questions_php`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_php` (
  `question` varchar(200) DEFAULT NULL,
  `OptionA` varchar(100) DEFAULT NULL,
  `OptionB` varchar(100) DEFAULT NULL,
  `OptionC` varchar(100) DEFAULT NULL,
  `OptionD` varchar(100) DEFAULT NULL,
  `CorrectAnswer` varchar(50) DEFAULT NULL,
  `qn` int(11) NOT NULL AUTO_INCREMENT,
  `userans` varchar(50) DEFAULT NULL,
  `visited` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`qn`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_php`
--

LOCK TABLES `questions_php` WRITE;
/*!40000 ALTER TABLE `questions_php` DISABLE KEYS */;
INSERT INTO `questions_php` VALUES ('what does PHP stand for?','A.Hypertext Preprocessor','B.Private home page','C.Personal Hypertext Processor','D.Pre Hypertext Processor','A',1,'no','null'),('PHP server scripts are surrounded by delimiters,which?','A.<script>...</script>','B.<?php...?>','C.<&>...</&>','D.<?php>...</?>','B',2,'no','null'),('How do you write \"Hello World\" in PHP?','A.Document.write(\"Hello World\")','B.\"Hello World\";','C.echo \"Hello World\";','D.echo Hello World','C',3,'no','null'),('All variables in PHP start with which smbol?','A.&','B.$','C.!','D.%','B',4,'no','null'),('The PHP syntax is most similar to:','A.VBScript','B.JavaScript','C.Perl','D.C','B',5,'no','null'),('Which one of these variables has an illegal name?','A.$my-var','B.$my_var','C.$myvar','D.$my_var_1','A',6,'','true');
/*!40000 ALTER TABLE `questions_php` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `fullname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `img` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('kalyani','gedela','chintujmlg@gmail.com','female','2015-03-12',1234567,'jikjak','10945823_800204930033592_5878467526365699316_o.jpg'),('Sai','Bhaaradwaj','sai@bha.com','male','1992-02-16',1234567,'asdf',NULL),('anvesh','dasari','anvesh@gmail.com','male','2015-03-12',154278963,'anvesh','10945823_800204930033592_5878467526365699316_o.jpg'),('venny','kalani','venny@gmail.com','female','2015-05-08',123456,'venny',''),('ananya','reddy','choti@gmail.com','female','2015-05-06',13456,'choti',''),('sai','reddy','sai@gmail.com','male','2015-05-07',1346,'sai','');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-03 14:44:06
