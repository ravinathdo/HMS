/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.2.7-MariaDB : Database - hmsdb
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
  `pword` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `degree` varchar(200) DEFAULT NULL,
  `specialist_id` int(5) DEFAULT NULL,
  `doc_fee` int(5) DEFAULT NULL,
  `slmc_no` varchar(20) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'ACTIVE',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `user_role` varchar(20) DEFAULT 'DOCTOR',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor` */

insert  into `hms_doctor`(`id`,`first_name`,`last_name`,`nic`,`pword`,`email`,`telephone`,`degree`,`specialist_id`,`doc_fee`,`slmc_no`,`status_code`,`created_date`,`created_user`,`user_role`) values (1,'Kumara','Pathi','999',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018-07-27 23:03:13',NULL,NULL),(2,'Ravinath','Fernando','863512824dV','b24777061756485c930c12fba0d84d37ab356646','ravinathdo@gmail.com','222','dsfdsf',1,32432,'34234','ACTIVE','2018-07-27 23:27:35',1,'DOCTOR'),(3,'Ravinathc','Fernando','863512824ddV','b24777061756485c930c12fba0d84d37ab356646','ravinathdo@gmail.com','222','dsfdsf',1,32432,'34234','ACTIVE','2018-07-27 23:28:29',1,'DOCTOR'),(4,'Ravinathcc','Fernandoc','863512824V','b24777061756485c930c12fba0d84d37ab356646','ravinathdo@gmail.com','222','dsfdsf',1,32432,'34234','ACTIVE','2018-07-27 23:28:49',1,'DOCTOR');

/*Table structure for table `hms_doctor_appointment` */

DROP TABLE IF EXISTS `hms_doctor_appointment`;

CREATE TABLE `hms_doctor_appointment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(5) DEFAULT NULL,
  `patient_id` int(5) DEFAULT NULL,
  `appointment_date` varchar(30) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'OPEN',
  `doctor_comment` text DEFAULT NULL,
  `doctor_fee` int(5) DEFAULT NULL,
  `hospital_fee` int(5) DEFAULT NULL,
  `fee` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor_appointment` */

insert  into `hms_doctor_appointment`(`id`,`doctor_id`,`patient_id`,`appointment_date`,`status_code`,`doctor_comment`,`doctor_fee`,`hospital_fee`,`fee`,`created_date`,`created_user`) values (1,4,8,'2018-08-25','OPEN',NULL,NULL,NULL,33432,'2018-08-01 14:40:31',8),(2,4,8,'2018-08-23','COMPLETE','On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks',32432,1000,33432,'2018-08-01 14:49:45',8),(3,4,8,'2018-08-30','COMPLETE',' thi sis samdfdsfj jksdfjksld fjksldjafkljdskf',32432,1000,33432,'2018-08-01 15:01:34',8),(4,4,8,'2018-08-30','REJECT',' ravvvvv',32432,1000,33432,'2018-08-01 15:01:54',8);

/*Table structure for table `hms_doctor_availability` */

DROP TABLE IF EXISTS `hms_doctor_availability`;

CREATE TABLE `hms_doctor_availability` (
  `doctor_id` int(5) NOT NULL,
  `day_available` varchar(60) NOT NULL,
  `time_available` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`doctor_id`,`day_available`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor_availability` */

insert  into `hms_doctor_availability`(`doctor_id`,`day_available`,`time_available`) values (4,'Monday','11:55'),(4,'Sunday','12:45'),(4,'Tuesday','12:45');

/*Table structure for table `hms_drug` */

DROP TABLE IF EXISTS `hms_drug`;

CREATE TABLE `hms_drug` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_drug` */

/*Table structure for table `hms_opd_appointment` */

DROP TABLE IF EXISTS `hms_opd_appointment`;

CREATE TABLE `hms_opd_appointment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `patient_id` int(5) DEFAULT NULL,
  `appointment_date` varchar(30) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `updated_user` int(5) DEFAULT NULL,
  `fee` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `hms_opd_appointment` */

insert  into `hms_opd_appointment`(`id`,`patient_id`,`appointment_date`,`status_code`,`created_date`,`created_user`,`updated_user`,`fee`) values (1,NULL,'2018-08-17','OPEN','2018-08-02 11:39:57',8,NULL,NULL),(2,NULL,'2018-08-19','OPEN','2018-08-02 11:40:22',8,NULL,NULL),(3,8,'2018-08-19','OPEN','2018-08-02 11:40:47',8,NULL,NULL),(4,8,'2018-08-28','OPEN','2018-08-02 13:07:45',8,NULL,850),(5,8,NULL,'OPEN','2018-08-02 13:21:27',8,NULL,NULL),(6,8,NULL,'OPEN','2018-08-02 13:21:29',8,NULL,NULL),(7,8,NULL,'OPEN','2018-08-02 13:21:29',8,NULL,NULL),(8,8,NULL,'OPEN','2018-08-02 13:21:32',8,NULL,NULL);

/*Table structure for table `hms_patient` */

DROP TABLE IF EXISTS `hms_patient`;

CREATE TABLE `hms_patient` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `dob` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pword` text DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'ACTIVE',
  `user_role` varchar(20) DEFAULT 'PATIENT',
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `hms_patient` */

insert  into `hms_patient`(`id`,`first_name`,`last_name`,`telephone`,`dob`,`email`,`pword`,`status_code`,`user_role`,`created_date`) values (1,NULL,NULL,NULL,NULL,NULL,NULL,'ACTIVE','PATIENT',NULL),(2,'Ravinath','Fernando','333',NULL,'ravinathdo@gmail.com','sss','ACTIVE','PATIENT',NULL),(3,'Ravinath','Fernando','112312321',NULL,'ravinathdo@gmail.com','112233','ACTIVE','PATIENT',NULL),(4,'Ravinath','Fernando','112312321',NULL,'ravinathdo@gmail.com','112233','ACTIVE','PATIENT',NULL),(5,'Ravinath','Fernando','213213',NULL,'ravinathdo@gmail.com','12','ACTIVE','PATIENT',NULL),(6,'Ravinath','Fernando','345345',NULL,'ravinathdo@gmail.com','retret','ACTIVE','PATIENT',NULL),(7,'Ravinath','Fernando','3423432',NULL,'ravinathdo@gmail.com','1111','ACTIVE','PATIENT','2018-07-27 16:35:10'),(8,'Ravinath','Fernando','2222',NULL,'ravinathdo@gmail.com','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','ACTIVE','PATIENT','2018-07-27 16:42:28');

/*Table structure for table `hms_purchase` */

DROP TABLE IF EXISTS `hms_purchase`;

CREATE TABLE `hms_purchase` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `purchasing_item` varchar(50) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `request_by` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `hms_specialist` */

insert  into `hms_specialist`(`id`,`specialist`) values (1,'Dental');

/*Table structure for table `hms_user` */

DROP TABLE IF EXISTS `hms_user`;

CREATE TABLE `hms_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `pword` text DEFAULT NULL,
  `user_role` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `empno` varchar(10) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hms_user` */

insert  into `hms_user`(`id`,`first_name`,`last_name`,`nic`,`pword`,`user_role`,`telephone`,`empno`,`status_code`,`created_date`,`created_user`) values (1,'kumara','pathirana','88','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','ADMIN','0111','2255','ACTIVE','2018-07-27 21:20:34',1),(2,'Shalini','Tha','89','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','OPD',NULL,'2266','ACTIVE','2018-08-02 12:01:43',1);

/*Table structure for table `hms_vehicle` */

DROP TABLE IF EXISTS `hms_vehicle`;

CREATE TABLE `hms_vehicle` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `vehicle_number` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_vehicle` */

/*Table structure for table `hms_vehicle_request` */

DROP TABLE IF EXISTS `hms_vehicle_request`;

CREATE TABLE `hms_vehicle_request` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `request_by` int(5) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'PENDING',
  `vehicle_id` int(5) DEFAULT 0,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_vehicle_request` */

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
  `comment` varchar(250) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
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
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `responsibility` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ward_id`,`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_ward_staff` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
