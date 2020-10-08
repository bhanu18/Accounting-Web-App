CREATE DATABASE  IF NOT EXISTS `database_final_project` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `database_final_project`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: database_final_project
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `customer_information`
--

DROP TABLE IF EXISTS `customer_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_information` (
  `Customer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer_Name` varchar(45) DEFAULT NULL,
  `Customer_Membership_Date` date DEFAULT NULL,
  `Customer_Phone_Number` int(11) DEFAULT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_information`
--

LOCK TABLES `customer_information` WRITE;
/*!40000 ALTER TABLE `customer_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_receipt`
--

DROP TABLE IF EXISTS `customer_receipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_receipt` (
  `Customer_ID` int(11) NOT NULL,
  `Receipt_ID` int(11) NOT NULL,
  PRIMARY KEY (`Customer_ID`,`Receipt_ID`),
  KEY `fk_Customer_Receipt_receipt1_idx` (`Receipt_ID`),
  CONSTRAINT `fk_Customer_Receipt_Customer_Information1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer_information` (`Customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Customer_Receipt_receipt1` FOREIGN KEY (`Receipt_ID`) REFERENCES `receipt` (`Receipt_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_receipt`
--

LOCK TABLES `customer_receipt` WRITE;
/*!40000 ALTER TABLE `customer_receipt` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_receipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_details` (
  `Product_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(45) DEFAULT NULL,
  `Product_Quantity` int(11) DEFAULT NULL,
  `Product_Maximum` int(11) DEFAULT NULL,
  `Product_Status` varchar(45) DEFAULT NULL,
  `Product_Unit_Price` int(11) DEFAULT NULL,
  `Product_Unit_Cost` int(11) DEFAULT NULL,
  PRIMARY KEY (`Product_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_details`
--

LOCK TABLES `product_details` WRITE;
/*!40000 ALTER TABLE `product_details` DISABLE KEYS */;
INSERT INTO `product_details` VALUES (1,'Almond Cake',NULL,5,NULL,400,200),(2,'Almond Cake',NULL,5,NULL,400,200);
/*!40000 ALTER TABLE `product_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order_delivery_check`
--

DROP TABLE IF EXISTS `purchase_order_delivery_check`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_order_delivery_check` (
  `Purchase_Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) DEFAULT NULL,
  `Product_Delivery_Order_Quantity` int(11) DEFAULT NULL,
  `Unit_Cost_Record` int(11) DEFAULT NULL,
  PRIMARY KEY (`Purchase_Order_ID`),
  KEY `fk_purchase_order_delivery_check_product_details1_idx` (`Product_ID`),
  CONSTRAINT `fk_purchase_order_delivery_check_product_details1` FOREIGN KEY (`Product_ID`) REFERENCES `product_details` (`Product_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_purchase_order_delivery_check_purchase_order_status` FOREIGN KEY (`Purchase_Order_ID`) REFERENCES `purchase_order_status` (`Purchase_Order_ID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order_delivery_check`
--

LOCK TABLES `purchase_order_delivery_check` WRITE;
/*!40000 ALTER TABLE `purchase_order_delivery_check` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_order_delivery_check` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_order_status`
--

DROP TABLE IF EXISTS `purchase_order_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_order_status` (
  `Purchase_Order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Vendor_ID` int(11) DEFAULT NULL,
  `Purchase_Order_Date` varchar(45) DEFAULT NULL,
  `Purchase_Order_Status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Purchase_Order_ID`),
  KEY `fk_purchase_order_status_vedor_general_details1_idx` (`Vendor_ID`),
  CONSTRAINT `fk_purchase_order_status_vedor_general_details1` FOREIGN KEY (`Vendor_ID`) REFERENCES `vedor_general_details` (`Vendor_ID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_order_status`
--

LOCK TABLES `purchase_order_status` WRITE;
/*!40000 ALTER TABLE `purchase_order_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_order_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receipt`
--

DROP TABLE IF EXISTS `receipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `receipt` (
  `Receipt_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product_ID` int(11) NOT NULL,
  `Product_Quantity` varchar(45) DEFAULT NULL,
  `Date_Of_Sale` date DEFAULT NULL,
  `Receipt_Unit_Price_Record` int(11) DEFAULT NULL,
  `Receipt_Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`Receipt_ID`,`Product_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receipt`
--

LOCK TABLES `receipt` WRITE;
/*!40000 ALTER TABLE `receipt` DISABLE KEYS */;
/*!40000 ALTER TABLE `receipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_information`
--

DROP TABLE IF EXISTS `user_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_information` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employee_Name` varchar(45) DEFAULT NULL,
  `Employee_Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_information`
--

LOCK TABLES `user_information` WRITE;
/*!40000 ALTER TABLE `user_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vedor_general_details`
--

DROP TABLE IF EXISTS `vedor_general_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vedor_general_details` (
  `Vendor_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Vendor_Name` varchar(45) DEFAULT NULL,
  `Vedor_Phone_Number` int(11) DEFAULT NULL,
  `Vendor_Address` varchar(45) DEFAULT NULL,
  `Vendor_Email1` varchar(45) DEFAULT NULL,
  `Vendor_Email2` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Vendor_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vedor_general_details`
--

LOCK TABLES `vedor_general_details` WRITE;
/*!40000 ALTER TABLE `vedor_general_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `vedor_general_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor_bank_details`
--

DROP TABLE IF EXISTS `vendor_bank_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor_bank_details` (
  `Vendor_ID` int(11) NOT NULL,
  `Vendor_Bank_Account_Number` varchar(45) DEFAULT NULL,
  KEY `fk_vendor_bank_details_vedor_general_details1` (`Vendor_ID`),
  CONSTRAINT `fk_vendor_bank_details_vedor_general_details1` FOREIGN KEY (`Vendor_ID`) REFERENCES `vedor_general_details` (`Vendor_ID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor_bank_details`
--

LOCK TABLES `vendor_bank_details` WRITE;
/*!40000 ALTER TABLE `vendor_bank_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendor_bank_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendor_product_availability`
--

DROP TABLE IF EXISTS `vendor_product_availability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendor_product_availability` (
  `Vendor_ID` int(11) NOT NULL,
  `Vendor_Available_Product` int(11) NOT NULL,
  PRIMARY KEY (`Vendor_ID`,`Vendor_Available_Product`),
  KEY `fk_vendor_product_availability_product_details1_idx` (`Vendor_Available_Product`),
  CONSTRAINT `fk_vendor_product_availability_product_details1` FOREIGN KEY (`Vendor_Available_Product`) REFERENCES `product_details` (`Product_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_vendor_product_availability_vedor_general_details1` FOREIGN KEY (`Vendor_ID`) REFERENCES `vedor_general_details` (`Vendor_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendor_product_availability`
--

LOCK TABLES `vendor_product_availability` WRITE;
/*!40000 ALTER TABLE `vendor_product_availability` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendor_product_availability` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-17 10:50:08