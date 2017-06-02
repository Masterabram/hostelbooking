DROP TABLE IF EXISTS booking;

CREATE TABLE `booking` (
  `transactionId` int(11) NOT NULL,
  `hostelId` int(10) NOT NULL,
  `tenantId` int(10) NOT NULL,
  `landlordId` varchar(13) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(30) DEFAULT NULL,
  `id` varchar(12) DEFAULT NULL,
  `tell` varchar(14) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `county` varchar(14) DEFAULT NULL,
  `study` varchar(45) DEFAULT NULL,
  `student_id` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO booking VALUES("526931","11","7","4","2017-03-31 13:13:22","Cafew Mourice","","079046353","Male","cafew@gmail.com","Baringo","Year 1 Semester 1","ci/00099/014","3");
INSERT INTO booking VALUES("533065","12","1","4","2017-04-12 18:09:06","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("535415","13","1","4","2017-04-12 09:17:32","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("672546","11","1","4","2017-04-12 20:56:02","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("728363","12","1","4","2017-04-12 18:06:40","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("897370","1","7","1","2017-03-31 13:14:02","Cafew Mourice","","079046353","Male","cafew@gmail.com","Baringo","Year 1 Semester 1","ci/00099/014","3");
INSERT INTO booking VALUES("903473","11","1","4","2017-03-30 23:44:31","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","AF","1.1","ci/00097/014","3");
INSERT INTO booking VALUES("931183","11","1","4","2017-03-29 21:42:40","Abraham Ogol","","0790463533","Male","abramogol@gmail.com","AF","Year 2 Sem 1","ci/00097/0","3");
INSERT INTO booking VALUES("968247","13","1","4","2017-04-12 19:26:14","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("976563","3","1","1","2017-04-03 05:33:42","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Taita Taveta","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("998704","13","1","4","2017-04-12 22:04:23","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");


DROP TABLE IF EXISTS chatting;

CREATE TABLE `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO chatting VALUES("10","Admin","!0 dollar at lest","2014-08-12 19:05:50","127.0.0.1");
INSERT INTO chatting VALUES("11","Nimco Qadaafi","OO Walaal Tuxaaafa Waa Qaalia WWa sidee","2014-08-14 21:36:58","127.0.0.1");
INSERT INTO chatting VALUES("12","Admin","It&#39;s Too Fair According Ware House Mannager","2014-08-14 21:37:34","127.0.0.1");
INSERT INTO chatting VALUES("13","Janan","Any Budy There????????????????????","2014-08-14 22:44:33","127.0.0.1");
INSERT INTO chatting VALUES("14","mahamed","gudoomiye waran bal","2014-08-17 10:15:15","::1");
INSERT INTO chatting VALUES("15","admin","wa khayr sxb sare","2014-08-17 10:15:39","::1");
INSERT INTO chatting VALUES("16","Abraham","Flatscreen","2017-01-12 00:31:51","::1");
INSERT INTO chatting VALUES("17","Admin","In bevs","2017-01-12 00:32:33","::1");
INSERT INTO chatting VALUES("18","",",k.,.,","2017-01-19 09:56:24","::1");
INSERT INTO chatting VALUES("19","Abraham","Am back","2017-03-31 14:03:32","::1");


DROP TABLE IF EXISTS client;

CREATE TABLE `client` (
  `tenantId` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tell` varchar(14) DEFAULT NULL,
  `studentId` varchar(18) DEFAULT NULL,
  `nationalId` varchar(10) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `county` varchar(50) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`tenantId`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("1","Abraham Ogoll","abramogol@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","ci/00097/014","32361391","Male","Kisumu","1/1/2017");
INSERT INTO client VALUES("6","Bob Calympore","client@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","ci/00097/0","116636511","Male","1482233314_20160326_213724.jpg","0000-00-00 00:0");
INSERT INTO client VALUES("7","Cafew Mourice","cafew@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","079046353","ci/00099/014","11111111","Male","Baringo","1/1/1990");


DROP TABLE IF EXISTS counties;

CREATE TABLE `counties` (
  `county_id` int(2) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(20) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO counties VALUES("1","Nairobi");
INSERT INTO counties VALUES("2","Kakamega");
INSERT INTO counties VALUES("3","Vihiga");
INSERT INTO counties VALUES("4","Baringo");
INSERT INTO counties VALUES("5","Bomet");
INSERT INTO counties VALUES("6","Bungoma");
INSERT INTO counties VALUES("7","Busia");
INSERT INTO counties VALUES("8","Elgeyo Marakwet");
INSERT INTO counties VALUES("9","Embu");
INSERT INTO counties VALUES("10","Garissa");
INSERT INTO counties VALUES("11","Homa Bay");
INSERT INTO counties VALUES("12","Isiolo");
INSERT INTO counties VALUES("13","Kajiado");
INSERT INTO counties VALUES("14","Kericho");
INSERT INTO counties VALUES("15","Kiambu");
INSERT INTO counties VALUES("16","Kilifi");
INSERT INTO counties VALUES("17","Kirinyaga");
INSERT INTO counties VALUES("18","Kisii");
INSERT INTO counties VALUES("19","Kisumu");
INSERT INTO counties VALUES("20","Kitui");
INSERT INTO counties VALUES("21","Kwale");
INSERT INTO counties VALUES("22","Laikipia");
INSERT INTO counties VALUES("23","Lamu");
INSERT INTO counties VALUES("24","Machakos");
INSERT INTO counties VALUES("25","Makueni");
INSERT INTO counties VALUES("26","Mandera");
INSERT INTO counties VALUES("27","Meru");
INSERT INTO counties VALUES("28","Migori");
INSERT INTO counties VALUES("29","Marsabit");
INSERT INTO counties VALUES("30","Mombasa");
INSERT INTO counties VALUES("31","Muranga");
INSERT INTO counties VALUES("32","Nakuru");
INSERT INTO counties VALUES("33","Nandi");
INSERT INTO counties VALUES("34","Narok");
INSERT INTO counties VALUES("35","Nyamira");
INSERT INTO counties VALUES("36","Nyandarua");
INSERT INTO counties VALUES("37","Nyeri");
INSERT INTO counties VALUES("38","Samburu");
INSERT INTO counties VALUES("39","Siaya");
INSERT INTO counties VALUES("40","Taita Taveta");
INSERT INTO counties VALUES("41","Tana River");
INSERT INTO counties VALUES("42","Tharaka Nithi");
INSERT INTO counties VALUES("43","Trans Nzoia");
INSERT INTO counties VALUES("44","Turkana");
INSERT INTO counties VALUES("45","Uasin Gishu");
INSERT INTO counties VALUES("46","Wajir");
INSERT INTO counties VALUES("47","West Pokot");


DROP TABLE IF EXISTS county;

CREATE TABLE `county` (
  `county_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `county_name` char(45) DEFAULT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS email_setting;

CREATE TABLE `email_setting` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `smtp` varchar(30) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `id` int(1) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO email_setting VALUES("hostelsystem17@gmail.com","qwerty123.","Hostel Booking","445","https://facebook.com/abram.ogol","https://twitter.com/ogolAbraham","1");


DROP TABLE IF EXISTS emails;

CREATE TABLE `emails` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `sentStatus` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to` varchar(40) NOT NULL,
  `msg` varchar(400) NOT NULL,
  `sender` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO emails VALUES("1","0","2017-03-24 01:37:36","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","");
INSERT INTO emails VALUES("2","0","2017-03-24 01:38:32","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","");
INSERT INTO emails VALUES("3","0","2017-03-24 01:41:14","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","");
INSERT INTO emails VALUES("4","0","2017-03-24 01:47:19","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","abramogol@gmail.com");
INSERT INTO emails VALUES("5","0","2017-03-24 22:01:49","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","abramogol@gmail.com");
INSERT INTO emails VALUES("6","0","2017-03-24 22:48:23","abramogol@gmail.com","Click the link below to change your password Click here ","abramogol@gmail.com");
INSERT INTO emails VALUES("7","0","2017-04-12 18:09:06","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("8","0","2017-04-12 18:31:25","abramogol@gmail.com","Click the link below to change your password  http://localhost/project/forgot_password_reset.php","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("9","0","2017-04-12 19:26:14","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("10","0","2017-04-12 20:56:14","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("11","0","2017-04-12 22:04:23","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");


DROP TABLE IF EXISTS feedback;

CREATE TABLE `feedback` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tel` int(10) DEFAULT NULL,
  `user_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO feedback VALUES("1","Abraham Ogol","abramogol@gmail.com","<p>I love the site so far .....</p><p>its really cool</p>","2017-01-19 10:21:52","790463533","");
INSERT INTO feedback VALUES("2","Austine Ian","client@gmail.com","<p>Am good now</p>","2017-01-19 10:47:26","790463533","::1");
INSERT INTO feedback VALUES("3","John Moleso","john@moleso.com","i love your work","2017-03-30 10:32:15","0","::1");


DROP TABLE IF EXISTS hostel;

CREATE TABLE `hostel` (
  `hostelId` int(11) NOT NULL AUTO_INCREMENT,
  `landlordId` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'empty',
  `price` varchar(8) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `qty` int(3) NOT NULL DEFAULT '1',
  `bkqty` int(3) NOT NULL DEFAULT '0',
  `size` varchar(40) DEFAULT NULL,
  `type` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`hostelId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO hostel VALUES("1","1","Orange House","Nyawita","empty","10000","1484299172_15871898_1802880966629409_743754048093459004_n.jpg","Water and electricity","1","0","","");
INSERT INTO hostel VALUES("2","1","Pink House","Luanda","empty","12000","1484299295_IMG_20150924_112413.jpg","Water, power and Token","1","0","","");
INSERT INTO hostel VALUES("3","1","Komyagi","Market","empty","30000","1484302629_443b883e839ba3fbee3be6a75ee70bd0.jpg","Water, sewer, self contain","1","0","","");
INSERT INTO hostel VALUES("4","3","Havila","Market","empty","20000","1484663341_IMG_20160218_132506.jpg","<ol><li><em>Hot water</em></li><li><em>Electricity</em></li><li><em>Hotel</em></li><li><em>Nice bedrooms</em></li></ol>","1","0","","");
INSERT INTO hostel VALUES("10","4","Orange House","Market","empty","20000","1484985052_IMG-20160406-WA0006.jpg","<ol><li>Water</li><li>Power</li><li>Sewage</li></ol>","3","3","","");
INSERT INTO hostel VALUES("11","4","Kalekye","Mabungo","empty","10000","1487743826_54ff82282ac26-living-room-green-window-de.jpg","<ol><li>Hot water</li><li>sprinngs</li><li>tokenned power</li><li>DSTV</li></ol>","23","0","","");
INSERT INTO hostel VALUES("12","4","New Blaze","Market","empty","15000`","1491024597_Top Tips For Buying The Perfect Water Tank.png","<ol><li>Electricity</li><li>Water</li><li>Inside sink</li><li>Hot showers</li></ol>","10","0","30","Self Contain");
INSERT INTO hostel VALUES("13","4","Runda","Nyawita","empty","13000","1491024955_image012.jpg","<ol><li>Electricity</li><li>Water</li><li>DSTV</li><li>Swimming pool</li></ol>","3","0","23","Bed Sitter");


DROP TABLE IF EXISTS hostel_image;

CREATE TABLE `hostel_image` (
  `hoselId` int(12) NOT NULL,
  `img1` varchar(111) DEFAULT NULL,
  `img2` varchar(111) DEFAULT NULL,
  `img3` varchar(111) DEFAULT NULL,
  `img4` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`hoselId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO hostel_image VALUES("1","1484546972_812231202_126362.jpg","1484546972_812317857_125954.jpg","1484546972_812804657_111111.jpg","1484546972_815919924_12140.jpg");
INSERT INTO hostel_image VALUES("4","1484663411_IMG_20150708_135000.jpg","1484663411_IMG_20150708_135149.jpg","1484663411_IMG_20150708_135031.jpg","1484663411_IMG_20150708_134907.jpg");
INSERT INTO hostel_image VALUES("5","1484929720_IMG_20150812_110639.jpg","1484929720_20150722_183523.jpg","1484929720_C360_2015-08-23-17-53-28-159.jpg","1484929720_C360_2015-08-23-17-15-29-055.jpg");
INSERT INTO hostel_image VALUES("10","1484985427_IMG-20160406-WA0007.jpg","1484985427_IMG-20160406-WA0006.jpg","1484985427_IMG-20160406-WA0008.jpg","1484985427_IMG-20160406-WA0009.jpg");
INSERT INTO hostel_image VALUES("11","1487743906_4d8155e104ef5d51_2301-w500-h666-b0-p0--transitional-bedroom.jpg","1487743906_46_gutter.jpg","1487743906_dp15202_4col_Bathroom_Storage.jpeg","1487743906_54bf45c7cd04a_-_hbx-gray-purple-bedroom-0913-s2.jpg");
INSERT INTO hostel_image VALUES("12","1491024815_water-tank.jpg","1491024815_6.jpg","1491024815_3.jpg","1491024815_4d8155e104ef5d51_2301-w500-h666-b0-p0--transitional-bedroom.jpg");
INSERT INTO hostel_image VALUES("13","1491025050_roseburg_water_tank_lg.jpg","1491025050_5.jpeg","1491025050_lincoln-sitting-room-2008.jpg","1491025050_CoopOutside2029w.jpg");


DROP TABLE IF EXISTS landlord;

CREATE TABLE `landlord` (
  `landlordId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(43) NOT NULL,
  `password` varchar(45) NOT NULL DEFAULT 'changeme',
  `tel` varchar(14) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `idno` varchar(20) DEFAULT NULL,
  `ownership` varchar(30) DEFAULT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`landlordId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO landlord VALUES("4","Abraham Ogol","abramogol@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","Male","116636511","","1491022574_IMG_20161117_163237.jpg");
INSERT INTO landlord VALUES("5","Alice Maganga","alice@gm.vom","changeme","0790463533","","","","");
INSERT INTO landlord VALUES("6","Judy Odhiambo","judy@judy.com","e87385f3b131ff2cd207bd28e4215d5e","1234567890","Female","11111111","Male","");


DROP TABLE IF EXISTS mpesa;

CREATE TABLE `mpesa` (
  `myid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL COMMENT 'ID',
  `orig` varchar(30) DEFAULT NULL COMMENT 'Origin',
  `dest` varchar(30) DEFAULT NULL COMMENT 'My MSISDN',
  `tstamp` timestamp NULL DEFAULT NULL COMMENT 'Time',
  `text` text COMMENT 'SMS Text',
  `customer_id` varchar(30) DEFAULT NULL COMMENT 'Customer ID',
  `user` varchar(30) DEFAULT NULL,
  `pass` varbinary(30) DEFAULT NULL,
  `routemethod_id` int(11) DEFAULT NULL,
  `routemethod_name` varchar(30) DEFAULT NULL,
  `mpesa_code` varchar(30) DEFAULT NULL COMMENT 'Code',
  `mpesa_acc` varchar(30) DEFAULT NULL COMMENT 'Account',
  `mpesa_msisdn` varchar(30) DEFAULT NULL COMMENT 'Mobile No',
  `mpesa_trx_date` varchar(30) DEFAULT NULL COMMENT 'Transaction Date',
  `mpesa_trx_time` varchar(30) DEFAULT NULL COMMENT 'Transaction Time',
  `mpesa_amt` varchar(30) NOT NULL COMMENT 'Amount',
  `mpesa_sender` varchar(100) NOT NULL COMMENT 'Name',
  `business_number` varchar(30) DEFAULT NULL COMMENT 'Business Number',
  `created_number` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`myid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS network;

CREATE TABLE `network` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `ip_add` varchar(23) NOT NULL,
  `browser` varchar(32) DEFAULT NULL,
  `session_id` int(4) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `activity` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

INSERT INTO network VALUES("1","","","1","2017-01-20 08:21:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("2","::1","","1","2017-01-20 08:21:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("3","::1","","1","2017-01-20 08:21:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("4","::1","","1","2017-01-20 08:22:46","Abraham Ogol","Client","1");
INSERT INTO network VALUES("5","::1","","1","2017-01-21 10:33:26","Abraham Ogol","Client","1");
INSERT INTO network VALUES("6","::1","","4","2017-01-20 08:26:33","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("7","::1","","1","2017-01-21 10:33:26","Admin Admin","Admin","1");
INSERT INTO network VALUES("8","::1","","4","2017-01-20 22:39:19","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("9","::1","","1","2017-01-21 10:33:26","Abraham Ogol","Client","1");
INSERT INTO network VALUES("10","::1","","4","2017-01-21 10:33:44","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("11","::1","","1","2017-01-27 03:32:38","Abraham Ogol","Client","1");
INSERT INTO network VALUES("12","::1","","1","2017-01-27 03:32:38","Admin Admin","Admin","1");
INSERT INTO network VALUES("13","::1","","1","2017-01-27 03:32:38","Abraham Ogol","Client","1");
INSERT INTO network VALUES("14","::1","","1","2017-01-27 03:32:38","Admin Admin","Admin","1");
INSERT INTO network VALUES("15","::1","","1","2017-01-27 03:32:38","Admin Admin","Admin","1");
INSERT INTO network VALUES("16","::1","","1","2017-01-27 03:32:38","Abraham Ogol","Client","1");
INSERT INTO network VALUES("17","::1","","4","2017-01-27 03:32:59","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("18","::1","","1","2017-03-30 07:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("19","::1","","1","2017-03-30 07:42:55","Abraham Ogol","Client","1");
INSERT INTO network VALUES("20","::1","","1","2017-03-30 07:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("21","::1","","1","2017-03-30 07:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("22","::1","","4","2017-02-21 22:09:03","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("23","::1","","1","2017-03-30 07:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("24","::1","","4","2017-03-24 00:52:00","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("25","::1","","1","2017-03-30 07:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("26","::1","","1","2017-03-30 07:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("27","::1","","1","2017-03-30 07:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("28","::1","","1","2017-03-30 07:45:12","Abraham Ogol","Client","1");
INSERT INTO network VALUES("29","::1","","1","2017-03-30 07:57:16","Abraham Ogol","Client","1");
INSERT INTO network VALUES("30","::1","","1","2017-03-30 07:57:16","Abraham Ogol","Client","1");
INSERT INTO network VALUES("31","::1","","1","2017-03-30 07:58:29","Abraham Ogol","Client","1");
INSERT INTO network VALUES("32","::1","","1","2017-03-31 11:41:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("33","::1","","1","2017-03-31 11:41:39","Admin Admin","Admin","1");
INSERT INTO network VALUES("34","::1","","1","2017-03-31 12:12:48","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("35","::1","","7","2017-03-31 13:27:59","Cafew Mourice","Client","1");
INSERT INTO network VALUES("36","::1","","7","2017-03-31 13:27:59","Cafew Mourice","Client","1");
INSERT INTO network VALUES("37","::1","","4","2017-04-02 00:49:35","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("38","::1","","4","2017-04-02 00:50:47","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("39","::1","","1","2017-04-11 13:20:18","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("40","::1","","4","2017-04-05 00:32:22","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("41","::1","","1","2017-04-11 13:20:18","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("42","::1","","1","2017-04-12 18:11:05","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("43","::1","","1","2017-04-12 18:11:05","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("44","::1","","1","2017-04-12 21:33:09","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("45","::1","","1","2017-04-12 21:33:09","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("46","::1","","4","2017-04-12 21:33:37","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("47","::1","","1","2017-04-13 10:44:53","Admin Admin","Admin","1");
INSERT INTO network VALUES("48","::1","","1","2017-04-13 10:44:53","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("49","::1","","1","2017-04-13 10:44:53","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("50","::1","","4","2017-04-13 10:45:58","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("51","::1","","4","2017-04-13 14:09:57","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("52","::1","","1","2017-04-15 06:52:48","Admin Admin","Admin","0");
INSERT INTO network VALUES("53","::1","","4","2017-04-15 06:57:16","Abraham Ogol","Landlord","0");


DROP TABLE IF EXISTS password_reset;

CREATE TABLE `password_reset` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sender` varchar(14) NOT NULL,
  `userType` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO password_reset VALUES("1","2017-03-24 01:05:40","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("2","2017-03-24 01:06:21","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("3","2017-03-24 01:15:20","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("4","2017-03-24 01:18:08","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("5","2017-03-24 01:20:06","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("6","2017-03-24 01:21:25","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("7","2017-03-24 01:26:49","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("8","2017-03-24 01:27:39","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("9","2017-03-24 01:28:10","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("10","2017-03-24 01:31:18","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("11","2017-03-24 01:32:01","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("12","2017-03-24 01:36:24","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("13","2017-03-24 01:38:32","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("14","2017-03-24 01:41:14","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("15","2017-03-24 01:47:19","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("16","2017-03-24 21:57:07","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("17","2017-03-24 22:01:49","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("18","2017-03-24 22:03:56","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("19","2017-03-24 22:05:03","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("20","2017-03-24 22:37:51","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("21","2017-03-24 22:42:04","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("22","2017-03-24 22:43:10","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("23","2017-03-24 22:45:03","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("24","2017-03-24 22:46:39","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("25","2017-03-24 22:47:12","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("26","2017-03-24 22:49:36","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("27","2017-04-12 18:30:09","Abraham Ogoll","");
INSERT INTO password_reset VALUES("28","2017-04-12 18:31:25","Abraham Ogoll","");


DROP TABLE IF EXISTS payment;

CREATE TABLE `payment` (
  `transactionId` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hostelId` int(10) NOT NULL,
  `price_credit` varchar(10) NOT NULL DEFAULT '0',
  `tell` varchar(150) NOT NULL,
  `price_debit` int(10) NOT NULL DEFAULT '0',
  `status` varchar(23) NOT NULL DEFAULT 'uncomplete',
  PRIMARY KEY (`transactionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO payment VALUES("526931","2017-03-31 13:13:22","11","10000","079046353","0","uncomplete");
INSERT INTO payment VALUES("533065","2017-04-12 18:09:06","12","15000`","0790463533","0","uncomplete");
INSERT INTO payment VALUES("535415","2017-04-12 09:17:32","13","13000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("672546","2017-04-12 20:56:02","11","10000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("728363","2017-04-12 18:06:40","12","15000`","0790463533","0","uncomplete");
INSERT INTO payment VALUES("897370","2017-03-31 13:14:02","1","10000","079046353","0","uncomplete");
INSERT INTO payment VALUES("903473","2017-03-30 23:44:31","11","10000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("931183","2017-03-29 21:42:40","11","10000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("968247","2017-04-12 19:26:14","13","13000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("976563","2017-04-03 05:33:42","3","30000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("998704","2017-04-12 22:04:23","13","13000","0790463533","0","uncomplete");


DROP TABLE IF EXISTS systemadmin;

CREATE TABLE `systemadmin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL DEFAULT 'changeme',
  `tel` varchar(14) NOT NULL,
  `nationalId` varchar(10) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `profile_image` varchar(150) DEFAULT 'no_avatar.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO systemadmin VALUES("1","Admin Admin","admin@admin.com","21232f297a57a5a743894a0e4a801fc3","0790463533","116636511","Male","1484739445_IMG_20150708_135025 - Copy.jpg");
INSERT INTO systemadmin VALUES("2","Mercy Muthony","marcyikumbi@gmail.com","changeme","0724484862","","","no_avatar.png");


DROP TABLE IF EXISTS views;

CREATE TABLE `views` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `ip_add` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

INSERT INTO views VALUES("1","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("2","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("3","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("4","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("5","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("6","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("7","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("8","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("9","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("10","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("11","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("12","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("13","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("14","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("15","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("16","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("17","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("18","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("19","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("20","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("21","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("22","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("23","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("24","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("25","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("26","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("27","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("28","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("29","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("30","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("31","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("32","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("33","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("34","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("35","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("36","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("37","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("38","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("39","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("40","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("41","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("42","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("43","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("44","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("45","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("46","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("47","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("48","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("49","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("50","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("51","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("52","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("53","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("54","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("55","0000-00-00 00:00:00","127.0.0.1");
INSERT INTO views VALUES("56","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("57","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("58","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("59","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("60","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("61","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("62","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("63","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("64","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("65","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("66","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("67","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("68","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("69","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("70","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("71","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("72","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("73","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("74","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("75","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("76","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("77","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("78","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("79","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("80","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("81","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("82","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("83","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("84","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("85","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("86","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("87","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("88","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("89","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("90","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("91","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("92","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("93","0000-00-00 00:00:00","::1");
INSERT INTO views VALUES("94","0000-00-00 00:00:00","::1");


