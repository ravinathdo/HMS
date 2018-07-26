/*
SQLyog Ultimate v8.55 
MySQL - 5.5.54 : Database - hmsdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hmsdb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hmsdb`;

/*Table structure for table `hms_doctor` */

DROP TABLE IF EXISTS `hms_doctor`;

CREATE TABLE `hms_doctor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `degree` varchar(200) DEFAULT NULL,
  `specialist_id` int(5) DEFAULT NULL,
  `doc_fee` int(5) DEFAULT NULL,
  `slmc_no` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor` */

/*Table structure for table `hms_doctor_appointment` */

DROP TABLE IF EXISTS `hms_doctor_appointment`;

CREATE TABLE `hms_doctor_appointment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(5) DEFAULT NULL,
  `patient_id` int(5) DEFAULT NULL,
  `appointment_date` varchar(30) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `doctor_comment` text,
  `fee` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor_appointment` */

/*Table structure for table `hms_doctor_availability` */

DROP TABLE IF EXISTS `hms_doctor_availability`;

CREATE TABLE `hms_doctor_availability` (
  `doctor_id` int(5) NOT NULL,
  `day_available` varchar(60) NOT NULL,
  `time_available` varchar(50) NOT NULL,
  PRIMARY KEY (`doctor_id`,`day_available`,`time_available`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor_availability` */

/*Table structure for table `hms_drug` */

DROP TABLE IF EXISTS `hms_drug`;

CREATE TABLE `hms_drug` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_drug` */

/*Table structure for table `hms_hms_vehicle_request` */

DROP TABLE IF EXISTS `hms_hms_vehicle_request`;

CREATE TABLE `hms_hms_vehicle_request` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `request_by` int(5) DEFAULT NULL,
  `comment` text,
  `status_code` varchar(20) DEFAULT 'PENDING',
  `vehicle_id` int(5) DEFAULT '0',
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_hms_vehicle_request` */

/*Table structure for table `hms_patient` */

DROP TABLE IF EXISTS `hms_patient`;

CREATE TABLE `hms_patient` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pword` text,
  `status_code` varchar(20) DEFAULT 'ACTIVE',
  `user_role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_patient` */

/*Table structure for table `hms_purchase` */

DROP TABLE IF EXISTS `hms_purchase`;

CREATE TABLE `hms_purchase` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `purchasing_item` varchar(50) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `request_by` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_purchase` */

/*Table structure for table `hms_specialist` */

DROP TABLE IF EXISTS `hms_specialist`;

CREATE TABLE `hms_specialist` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `specialist` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_specialist` */

/*Table structure for table `hms_user` */

DROP TABLE IF EXISTS `hms_user`;

CREATE TABLE `hms_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_nane` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `pword` text,
  `user_role` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `empno` varchar(10) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_user` */

/*Table structure for table `hms_vehicle` */

DROP TABLE IF EXISTS `hms_vehicle`;

CREATE TABLE `hms_vehicle` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_number` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_vehicle` */

/*Table structure for table `hms_ward` */

DROP TABLE IF EXISTS `hms_ward`;

CREATE TABLE `hms_ward` (
  `ward_no` int(5) NOT NULL,
  `ward_name` varchar(50) DEFAULT NULL,
  `doctor_incharge` int(5) DEFAULT NULL,
  PRIMARY KEY (`ward_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_ward` */

/*Table structure for table `hms_ward_patient` */

DROP TABLE IF EXISTS `hms_ward_patient`;

CREATE TABLE `hms_ward_patient` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ward_id` int(5) DEFAULT NULL,
  `patient_id` int(5) DEFAULT NULL,
  `ward_patient` int(10) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_user` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_ward_patient` */

/*Table structure for table `hms_ward_staff` */

DROP TABLE IF EXISTS `hms_ward_staff`;

CREATE TABLE `hms_ward_staff` (
  `ward_id` int(5) NOT NULL,
  `staff_id` int(5) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `responsibility` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ward_id`,`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_ward_staff` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
