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

/*Table structure for table `hms_center` */

DROP TABLE IF EXISTS `hms_center`;

CREATE TABLE `hms_center` (
  `center_name` varchar(20) NOT NULL,
  PRIMARY KEY (`center_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_center` */

insert  into `hms_center`(`center_name`) values ('Colombo'),('Gampaha'),('Negombo');

/*Table structure for table `hms_cost` */

DROP TABLE IF EXISTS `hms_cost`;

CREATE TABLE `hms_cost` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `amount` double(5,2) DEFAULT NULL,
  `txn_type` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hms_cost` */

insert  into `hms_cost`(`id`,`description`,`amount`,`txn_type`,`created_date`,`created_user`) values (1,'adasdasd',25.00,'Debit','2018-08-18 17:14:03',3),(2,'by tea',999.99,'Debit','2018-08-18 17:17:49',3);

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
  `category` varchar(20) DEFAULT 'OPD',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `user_role` varchar(20) DEFAULT 'DOCTOR',
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`nic`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor` */

insert  into `hms_doctor`(`id`,`first_name`,`last_name`,`nic`,`pword`,`email`,`telephone`,`degree`,`specialist_id`,`doc_fee`,`slmc_no`,`status_code`,`category`,`created_date`,`created_user`,`user_role`) values (2,'Ravinath','Fernando','863512824dV','da39a3ee5e6b4b0d3255bfef95601890afd80709','ravinathdo@gmail.com','222','dsfdsf',1,1500,'34234','ACTIVE','OPD','2018-07-27 23:27:35',1,'DOCTOR'),(3,'Ravinathc','Fernando Prera','863512824ddV','b24777061756485c930c12fba0d84d37ab356646','ravinathdo@gmail.com','222','dsfdsf',1,32432,'34234','ACTIVE','OPD','2018-07-27 23:28:29',1,'DOCTOR'),(4,'Ravinathcc','Fernandoc','863512824V','b24777061756485c930c12fba0d84d37ab356646','ravinathdo@gmail.com','222','dsfdsf',1,32432,'34234','ACTIVE','OPD','2018-07-27 23:28:49',1,'DOCTOR'),(5,'dsfsdfsd','fsdfsdfsd','863512825V','7db0e2001b06bfe82272ce0260b2e85297b1e9c0','ravinathdos@gmail.com','0715833470','asdasdsadasd',2,1500,'5566','ACTIVE',NULL,'2018-08-13 15:24:59',1,'DOCTOR'),(6,'sadasdsa','dsadsad','863512826V','193fd28732d1fbd2a420e5456ac3befb1959313a','ravinathdo@gmail.com','0715833470','asdasdsadasd',1,3333,'5566','ACTIVE','OPD','2018-08-13 15:31:39',1,'DOCTOR'),(7,'chamila','perera','888','eaa67f3a93d0acb08d8a5e8ff9866f51983b3c3b','chamila@gmail.com','078555','Bsc',2,2500,'88555','ACTIVE','OPD','2018-08-17 20:53:56',1,'DOCTOR'),(8,'sdsdsdsd','sdsdsd','2131321','3','aas@g.nn','','sdsadsadsa',2,22333,'44455','ACTIVE',NULL,'2018-08-17 22:20:36',1,'DOCTOR'),(9,'sdsdsdsd','sdsdsd','21313212','da39a3ee5e6b4b0d3255bfef95601890afd80709','aas@g.nn','','sdsadsadsa',2,55666,'44455','ACTIVE',NULL,'2018-08-17 22:21:43',1,'DOCTOR'),(10,'sssddff','ssdfsdfsdf','996','ae7b4b79bbda7972ec40d8cd085c7875087973cc','sadasd@afa.com','2222','wqsadsad',1,350,'44455','ACTIVE',NULL,'2018-08-17 23:19:51',1,'DOCTOR');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hms_doctor_appointment` */

insert  into `hms_doctor_appointment`(`id`,`doctor_id`,`patient_id`,`appointment_date`,`status_code`,`doctor_comment`,`doctor_fee`,`hospital_fee`,`fee`,`created_date`,`created_user`) values (1,4,11,'2018-08-23','COMPLETE',NULL,32432,1000,33432,'2018-08-09 11:36:57',11),(2,3,11,'2018-08-16','OPEN',NULL,32432,1000,33432,'2018-08-13 22:28:49',11);

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

/*Table structure for table `hms_employee_salary` */

DROP TABLE IF EXISTS `hms_employee_salary`;

CREATE TABLE `hms_employee_salary` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `salary_month` varchar(20) DEFAULT NULL,
  `salary_amount` varbinary(10) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`user_id`,`salary_month`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `hms_employee_salary` */

insert  into `hms_employee_salary`(`id`,`user_id`,`salary_month`,`salary_amount`,`created_date`,`created_user`) values (9,3,'2018-08','2555','2018-08-18 15:51:49',3),(10,2,'2018-08','5566','2018-08-18 15:54:00',3),(11,16,'2018-08','5888','2018-08-18 15:55:12',3),(13,1,'2018-08','2500','2018-08-18 16:13:19',3),(14,1,'2018-07','2500','2018-08-18 16:13:31',3);

/*Table structure for table `hms_feedback` */

DROP TABLE IF EXISTS `hms_feedback`;

CREATE TABLE `hms_feedback` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `feedback` text DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `hms_feedback` */

insert  into `hms_feedback`(`id`,`feedback`,`created_date`,`created_user`) values (1,'dsdsdsds','2018-08-09 14:46:07',11),(2,'sadasdsadsadsad','2018-08-09 15:01:39',11),(3,'sdsdsdsdsdsd sddsadsadsad','2018-08-09 15:02:27',11);

/*Table structure for table `hms_inventory` */

DROP TABLE IF EXISTS `hms_inventory`;

CREATE TABLE `hms_inventory` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `updated_date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hms_inventory` */

insert  into `hms_inventory`(`id`,`item_name`,`qty`,`created_date`,`created_user`,`updated_date`) values (1,'Computex',25,'2018-08-19 20:36:39',1,'2018-08-19 09:26:29pm'),(2,'chair',241,'2018-08-19 21:33:09',5,NULL);

/*Table structure for table `hms_lab_test` */

DROP TABLE IF EXISTS `hms_lab_test`;

CREATE TABLE `hms_lab_test` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `lab_test` varchar(50) DEFAULT NULL,
  `center_name` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `hms_lab_test` */

insert  into `hms_lab_test`(`id`,`lab_test`,`center_name`,`description`) values (1,'blood test','Negombo','this is test for blood'),(2,'uren test','Colombo','This is urine test'),(3,NULL,'kandy',NULL),(4,NULL,'kandy',NULL),(5,NULL,'kandy',NULL);

/*Table structure for table `hms_opd_appointment` */

DROP TABLE IF EXISTS `hms_opd_appointment`;

CREATE TABLE `hms_opd_appointment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `patient_id` int(5) DEFAULT NULL,
  `doctor_id` int(5) DEFAULT NULL,
  `appointment_date` varchar(30) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `updated_user` int(5) DEFAULT NULL,
  `fee` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hms_opd_appointment` */

insert  into `hms_opd_appointment`(`id`,`patient_id`,`doctor_id`,`appointment_date`,`status_code`,`created_date`,`created_user`,`updated_user`,`fee`) values (1,11,1,'2018-08-24','OPEN','2018-08-13 22:09:02',11,NULL,850),(2,11,NULL,NULL,'OPEN','2018-08-13 22:18:02',11,NULL,NULL);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `hms_patient` */

insert  into `hms_patient`(`id`,`first_name`,`last_name`,`telephone`,`dob`,`email`,`pword`,`status_code`,`user_role`,`created_date`) values (1,NULL,NULL,NULL,NULL,'f',NULL,'ACTIVE','PATIENT',NULL),(2,'Ravinath','Fernando','333','55','ff','sss','ACTIVE','PATIENT',NULL),(3,'Ravinath','Fernando','112312321',NULL,'fg','112233','ACTIVE','PATIENT',NULL),(4,'Ravinath','Fernando','112312321',NULL,'ggg','112233','ACTIVE','PATIENT',NULL),(5,'Ravinath','Fernando','213213',NULL,'h','12','ACTIVE','PATIENT',NULL),(6,'Ravinath','Fernando','345345',NULL,'hj','retret','ACTIVE','PATIENT',NULL),(7,'Ravinath','Fernando','3423432',NULL,'kk','2ed45186c72f9319dc64338cdf16ab76b44cf3d1','ACTIVE','PATIENT','2018-07-27 16:35:10'),(8,'Ravinath','Fernando','2222',NULL,'d','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','ACTIVE','PATIENT','2018-07-27 16:42:28'),(9,'         ','','',NULL,'kkl','78f8bb4c43c7c3e4e5883e8e9b18518c89d965ff','ACTIVE','PATIENT','2018-08-08 14:37:15'),(10,'kjkkkjk','','',NULL,'s','65aea98c57dcd2a1ffb0d35ca20603caaf7d9f03','ACTIVE','PATIENT','2018-08-08 14:39:39'),(11,'Ravinath','Fernando','0715833470',NULL,'ravinathdo@gmail.com','7c4a8d09ca3762af61e59520943dc26494f8941b','ACTIVE','PATIENT','2018-08-08 15:37:56'),(12,'sadsadsad','sadsad','34234234','2018-08-21','ravinathdoxxx@gmail.com','a','ACTIVE','PATIENT','2018-08-13 16:18:08'),(13,'Ravinathsss','ssssss','01122222','2018-08-24','ravinathdoss@gmail.com','69c5fcebaa65b560eaf06c3fbeb481ae44b8d618','ACTIVE','PATIENT','2018-08-24 16:20:25'),(14,'Ravi','Samantha','0755522450','2018-08-24','ravi@gmail.com','69c5fcebaa65b560eaf06c3fbeb481ae44b8d618','ACTIVE','PATIENT','2018-08-24 16:25:17'),(15,'Ravinath','wewqewqe','071583333','2018-08-23','ravix@gmail.com','69c5fcebaa65b560eaf06c3fbeb481ae44b8d618','ACTIVE','PATIENT','2018-08-24 16:25:58'),(19,'wewqe','wqewqe','0715833476','2018-08-24','raviXSS@gmail.com','69c5fcebaa65b560eaf06c3fbeb481ae44b8d618','ACTIVE','PATIENT','2018-08-24 16:27:21'),(20,'ffgdfgdf','gdfgfdgdf','234234234','2018-08-08','aa@gmail.com','69c5fcebaa65b560eaf06c3fbeb481ae44b8d618','ACTIVE','PATIENT','2018-08-24 16:41:36');

/*Table structure for table `hms_purchase` */

DROP TABLE IF EXISTS `hms_purchase`;

CREATE TABLE `hms_purchase` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `purchasing_item` varchar(50) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT 'PENDING',
  `request_by` int(5) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `hms_purchase` */

insert  into `hms_purchase`(`id`,`purchasing_item`,`qty`,`status_code`,`request_by`,`created_date`,`created_user`,`amount`) values (1,'Bed Sheet',25,'COMPLETE',2,'2018-08-15 20:33:28',2,450.00);

/*Table structure for table `hms_specialist` */

DROP TABLE IF EXISTS `hms_specialist`;

CREATE TABLE `hms_specialist` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `specialist` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hms_specialist` */

insert  into `hms_specialist`(`id`,`specialist`) values (1,'Dental'),(2,'VOG');

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
  `email` varchar(100) DEFAULT NULL,
  `empno` varchar(10) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`nic`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `hms_user` */

insert  into `hms_user`(`id`,`first_name`,`last_name`,`nic`,`pword`,`user_role`,`telephone`,`email`,`empno`,`status_code`,`created_date`,`created_user`) values (1,'kumara','pathirana','88','7c4a8d09ca3762af61e59520943dc26494f8941b','ADMIN','0111','admin@gmail.com','2255','ACTIVE','2018-07-27 21:20:34',1),(2,'Shalini','Tha','89','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','OPD',NULL,NULL,'2266','ACTIVE','2018-08-02 12:01:43',1),(3,'Gaya','Siri','90','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','ACCOUNTANT',NULL,NULL,'2267','ACTIVE','2018-08-06 12:04:25',1),(5,'Nuwa','Per','92','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','LAB',NULL,NULL,'2269','ACTIVE','2018-08-06 12:06:43',1),(6,'KK','ii','93','08a35293e09f508494096c1c1b3819edb9df50db','TRANSPORT','011','ravi@gm','2270','ACTIVE','2018-08-06 16:03:16',1),(7,'kkkl','lklkl','94','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','PHARMACIST',NULL,NULL,NULL,'ACTIVE','2018-08-07 12:38:30',1),(8,NULL,'kjkjk','95','86f7e437faa5a7fce15d1ddcb9eaeaea377667b8','WARD',NULL,NULL,NULL,'ACTIVE','2018-08-07 16:23:25',1),(9,'sdsadsad','asdsad','3323213','4b0de1d67de6a8a206e33e6eeddc0029fab3c748','ADMIN',NULL,NULL,NULL,'ACTIVE','2018-08-13 15:56:04',NULL),(10,'sdsadsad','asdsad','452','4b0de1d67de6a8a206e33e6eeddc0029fab3c748','ADMIN',NULL,NULL,NULL,'ACTIVE','2018-08-13 15:57:13',NULL),(11,'sdsds','sdsds','weweweV','87c208c74a690f34726af676c14717cd3f0a35ff','ADMIN',NULL,NULL,NULL,'ACTIVE','2018-08-13 16:00:22',1),(12,'sdsds','sdsds','ss','87c208c74a690f34726af676c14717cd3f0a35ff','ADMIN',NULL,NULL,NULL,'ACTIVE','2018-08-13 16:00:33',1),(13,'sdsds','sdsds','ee','87c208c74a690f34726af676c14717cd3f0a35ff','ADMIN',NULL,NULL,NULL,'ACTIVE','2018-08-13 16:01:01',1),(16,'sdsds','sdsds','ees','256092013bb80044b9ec10600787cf31a5719c3e','ADMIN',NULL,NULL,NULL,'ACTIVE','2018-08-13 16:02:43',1),(18,'sdsds','sdsds','ees4','5a1e92360a7fdc9b627895f7c25e9f7f9caae530','ADMIN','0715833470','ravinathdo@gmail.com','4455','ACTIVE','2018-08-13 16:04:14',1),(20,'sdfsdfsdfsdf','sdfsdfdsfds','f234234234','b54fa0d00b16130547c8b6603b4866a3ae02557e','ADMIN','0715833333','ravinathdo33@gmail.com','863333','ACTIVE','2018-08-13 16:13:14',1);

/*Table structure for table `hms_user_role` */

DROP TABLE IF EXISTS `hms_user_role`;

CREATE TABLE `hms_user_role` (
  `user_role` varchar(20) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hms_user_role` */

insert  into `hms_user_role`(`user_role`,`description`) values ('ACCOUNTANT','Accountant'),('ADMIN','Administrator'),('DOCTOR','Doctor'),('HR','HR Manager'),('LAB','LAB Inchage'),('OPD','OPD User'),('PATIENT','Patient'),('PHARMACIST','Pharmacist'),('TRANSPORT','Transport Manager'),('WARD','Ward Management');

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

insert  into `hms_ward`(`ward_no`,`ward_name`,`doctor_incharge`) values (1,'Child',4);

/*Table structure for table `hms_ward_patient` */

DROP TABLE IF EXISTS `hms_ward_patient`;

CREATE TABLE `hms_ward_patient` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ward_id` int(5) DEFAULT NULL,
  `patient_id` int(5) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_user` int(5) DEFAULT NULL,
  `status_code` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`ward_id`,`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `hms_ward_patient` */

insert  into `hms_ward_patient`(`id`,`ward_id`,`patient_id`,`comment`,`created_date`,`created_user`,`status_code`) values (1,1,3,NULL,'2018-08-11 12:07:33',4,'ADMIT'),(2,1,10,NULL,'2018-08-11 12:08:53',4,'ADMIT'),(3,1,7,'fgdgfdgfdgf','2018-08-11 12:11:07',4,'ADMIT'),(4,1,4,'uhjhjhjhjhj','2018-08-11 12:12:53',4,'ADMIT'),(5,1,5,'ssss','2018-08-11 12:16:57',4,'ADMIT'),(7,1,8,'ffffffdd','2018-08-11 12:19:27',4,'ADMIT'),(11,1,6,'ffffffdd','2018-08-11 12:20:42',4,'ADMIT');

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
