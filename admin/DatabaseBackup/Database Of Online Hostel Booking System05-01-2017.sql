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

INSERT INTO booking VALUES("526931","11","7","4","2017-03-31 23:13:22","Cafew Mourice","","079046353","Male","cafew@gmail.com","Baringo","Year 1 Semester 1","ci/00099/014","3");
INSERT INTO booking VALUES("533065","12","1","4","2017-04-13 04:09:06","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("535415","13","1","4","2017-04-12 19:17:32","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("650070","14","1","4","2017-04-28 21:31:13","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Bungoma","Year 2 Semester 2","ci/00097/014","12");
INSERT INTO booking VALUES("672546","11","1","4","2017-04-13 06:56:02","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("689133","12","1","4","2017-04-17 19:58:48","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 3 Semester 2","ci/00097/014","12");
INSERT INTO booking VALUES("706222","16","1","4","2017-04-26 18:44:34","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("728363","12","1","4","2017-04-13 04:06:40","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("865860","14","1","4","2017-04-25 14:10:02","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("889862","16","1","4","2017-04-26 18:45:51","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("897370","1","7","1","2017-03-31 23:14:02","Cafew Mourice","","079046353","Male","cafew@gmail.com","Baringo","Year 1 Semester 1","ci/00099/014","3");
INSERT INTO booking VALUES("903473","11","1","4","2017-03-31 09:44:31","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","AF","1.1","ci/00097/014","3");
INSERT INTO booking VALUES("931183","11","1","4","2017-03-30 07:42:40","Abraham Ogol","","0790463533","Male","abramogol@gmail.com","AF","Year 2 Sem 1","ci/00097/0","3");
INSERT INTO booking VALUES("968247","13","1","4","2017-04-13 05:26:14","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("976563","3","1","1","2017-04-03 15:33:42","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Taita Taveta","Year 1 Semester 1","ci/00097/014","3");
INSERT INTO booking VALUES("998704","13","1","4","2017-04-13 08:04:23","Abraham Ogoll","","0790463533","Male","abramogol@gmail.com","Baringo","Year 1 Semester 1","ci/00097/014","3");


DROP TABLE IF EXISTS chatting;

CREATE TABLE `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO chatting VALUES("17","Admin","In bevs","2017-01-12 11:32:33","::1");
INSERT INTO chatting VALUES("18","",",k.,.,","2017-01-19 20:56:24","::1");
INSERT INTO chatting VALUES("19","Abraham","Am back","2017-04-01 00:03:32","::1");
INSERT INTO chatting VALUES("20","helo","hy","2017-04-28 11:21:06","::1");
INSERT INTO chatting VALUES("21","Abraham","hello admin","2017-04-28 13:56:09","::1");
INSERT INTO chatting VALUES("22","Abraham","Am here for you","2017-04-28 13:56:30","::1");
INSERT INTO chatting VALUES("23","Admin","Am tryning to connect","2017-04-28 14:12:55","::1");
INSERT INTO chatting VALUES("24","Admin","Am tryning to connect","2017-04-28 14:14:19","::1");
INSERT INTO chatting VALUES("25","Admin","hello","2017-04-28 14:17:30","::1");
INSERT INTO chatting VALUES("26","Abraham","you are lost again","2017-04-28 14:30:54","::1");
INSERT INTO chatting VALUES("27","Admin","kss","2017-04-28 14:50:44","::1");
INSERT INTO chatting VALUES("28","Admin","sema sasa","2017-04-28 14:58:22","::1");


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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO client VALUES("1","Abraham Ogoll","abramogol@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","ci/00097/014","32361391","Male","Kisumu","1/1/2017");
INSERT INTO client VALUES("6","Bob Calympore","client@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","ci/00097/0","116636511","Male","Nyandarua","0000-00-00 00:0");
INSERT INTO client VALUES("7","Cafew Mourice","cafew@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","079046353","ci/00099/014","11111111","Male","Baringo","1/1/1990");
INSERT INTO client VALUES("8","","","d41d8cd98f00b204e9800998ecf8427e","","","","Male","Baringo","");


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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO emails VALUES("1","0","2017-03-24 11:37:36","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","");
INSERT INTO emails VALUES("2","0","2017-03-24 11:38:32","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","");
INSERT INTO emails VALUES("3","0","2017-03-24 11:41:14","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","");
INSERT INTO emails VALUES("4","0","2017-03-24 11:47:19","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","abramogol@gmail.com");
INSERT INTO emails VALUES("5","0","2017-03-25 08:01:49","abramogol@gmail.com","Your Password has been reseted to Changeme Please login in and change it immediatly","abramogol@gmail.com");
INSERT INTO emails VALUES("6","0","2017-03-25 08:48:23","abramogol@gmail.com","Click the link below to change your password Click here ","abramogol@gmail.com");
INSERT INTO emails VALUES("7","0","2017-04-13 04:09:06","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("8","0","2017-04-13 04:31:25","abramogol@gmail.com","Click the link below to change your password  http://localhost/project/forgot_password_reset.php","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("9","0","2017-04-13 05:26:14","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("10","0","2017-04-13 06:56:14","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("11","0","2017-04-13 08:04:23","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("12","0","2017-04-17 19:58:48","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("13","0","2017-04-25 14:10:03","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("14","0","2017-04-26 18:44:34","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("15","0","2017-04-26 18:45:51","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");
INSERT INTO emails VALUES("16","0","2017-04-28 21:31:13","abramogol@gmail.com","Please proceed to Mpesa and make a Lipa na Mpesa payment under till number 1234 Please make sure you specificly used this number","hostelsystem17@gmail.com");


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

INSERT INTO feedback VALUES("1","Abraham Ogol","abramogol@gmail.com","<p>I love the site so far .....</p><p>its really cool</p>","2017-01-19 21:21:52","790463533","");
INSERT INTO feedback VALUES("2","Austine Ian","client@gmail.com","<p>Am good now</p>","2017-01-19 21:47:26","790463533","::1");
INSERT INTO feedback VALUES("3","John Moleso","john@moleso.com","i love your work","2017-03-30 20:32:15","0","::1");


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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO hostel VALUES("14","4","Demarco","Market","empty","30000","1492997399_IMG_20170422_164016.jpg","<ol><li>Electricitcity</li><li>water</li><li>token</li><li>security</li><li>&nbsp;</li></ol>","10","0","23Square feet","Self Contain");
INSERT INTO hostel VALUES("15","4","Imani","Market","empty","30000","1492997959_IMG_20170422_163921.jpg","<ol><li>Electricity</li><li>Token</li><li>Water</li></ol>","30","0","13Square feet","Self Contain");
INSERT INTO hostel VALUES("16","4","Shaba","Market","empty","24000","1492998253_IMG_20170422_174012.jpg","<ol><li>Electricity</li><li>Token</li><li>Water</li></ol>","20","0","20Square feet","Bed Sitter");
INSERT INTO hostel VALUES("17","6","Caroline Herine","Mbwa Kali","empty","30000","1493403083_Hostel Booking IMG_20170422_173719.jpg","<ol><li>Electricity</li><li>Water</li><li>Hot showers</li><li>pavements</li></ol>","23","0","42Square feet","Self Contain");
INSERT INTO hostel VALUES("18","10","Korono","Lela","empty","10000","1493403502_Hostel Booking IMG_20170422_163927.jpg","<ol><li>Token Electricity</li><li>Two beds</li><li>Security</li><li>Gated</li><li>Reading lamps</li></ol>","31","0","45Square feet","Self Contain");
INSERT INTO hostel VALUES("19","4","Imani Plaza","Imani","empty","28000","1493404050_Hostel Booking IMG_20170422_163924.jpg","<ol><li>Electricity</li><li>Emple play ground</li><li>water</li><li>showers</li><li>two occupants</li></ol>","19","0","42Square feet","Self Contain");
INSERT INTO hostel VALUES("20","6","Villa","Market","empty","28000","1493478677_Hostel Booking IMG_20170422_172527.jpg","<ol><li>Electricity</li><li>Token</li><li>Water</li><li>Recreational Facility</li><li>Movie Room</li></ol>","40","0","20Square feet","Self Contain");
INSERT INTO hostel VALUES("21","8","Wells","Wells","empty","30000","1493478822_Hostel Booking IMG_20170422_163746.jpg","<ol><li>Electricity</li><li>Water</li><li>Token</li></ol>","40","0","30Square feet","Bed Sitter");
INSERT INTO hostel VALUES("22","7","Posta","Market","empty","20000","1493479038_Hostel Booking IMG_20170422_172300.jpg","<ol><li>Electricity</li><li>Water</li><li>Token</li></ol>","25","0","20Square feet","Bed Sitter");
INSERT INTO hostel VALUES("23","6","Opposite Imani","Imani","empty","20000","1493479282_Hostel Booking IMG_20170422_163149.jpg","<ol><li>Electricity</li><li>Water</li></ol>","15","0","20Square feet","Bed Sitter");
INSERT INTO hostel VALUES("24","5","Opposite Demarcos","Imani","empty","30000","1493479470_Hostel Booking IMG_20170422_163435.jpg","<ol><li>Electricity</li><li>Token</li><li>Water</li><li>Security</li></ol>","45","0","20Square feet","Bed Sitter");
INSERT INTO hostel VALUES("25","10","Opposite ACK","Market","empty","20000","1493479589_Hostel Booking IMG_20170422_164742.jpg","<ol><li>Electricity</li><li>Water</li></ol>","20","0","15Square feet","Single room");
INSERT INTO hostel VALUES("26","7","Mums","Market","empty","37000","1493479792_Hostel Booking IMG_20170422_170249.jpg","<ol><li>Electricity</li><li>Token</li><li>Water</li></ol>","30","0","30Square feet","Self Contain");
INSERT INTO hostel VALUES("27","7","Posta","Market","empty","30000","1493479903_Hostel Booking IMG_20170422_172216.jpg","<ol><li>Electricity</li><li>Water</li><li>Token</li><li>Security</li></ol>","30","0","30Square feet","Self Contain");
INSERT INTO hostel VALUES("28","10","Opposite Villa","Market","empty","25000","1493480009_Hostel Booking IMG_20170422_172334.jpg","<ol><li>Electricity</li><li>Water</li><li>Security</li><li>Token</li></ol>","15","0","20Square feet","Bed Sitter");
INSERT INTO hostel VALUES("29","11","Past Caroline","Market","empty","18000","1493480102_Hostel Booking IMG_20170422_173857.jpg","<ol><li>Electricity</li><li>Water</li><li>Token</li></ol>","15","0","15Square feet","Single room");
INSERT INTO hostel VALUES("30","8","Imani","Imani","empty","35000","1493480195_Hostel Booking IMG_20170422_163714.jpg","<ol><li>Electricity</li><li>Security</li><li>Water</li><li>Token</li></ol>","35","0","30Square feet","Self Contain");
INSERT INTO hostel VALUES("31","5","Past Imani","Imani","empty","25000","1493480305_Hostel Booking IMG_20170422_164402.jpg","<ol><li>Electricity</li><li>Water</li></ol>","15","0","15Square feet","Single room");
INSERT INTO hostel VALUES("32","6","Caroline Hering","Market","empty","28000","1493480664_Hostel Booking IMG_20170422_173723.jpg","<ol><li>Electricity</li><li>Water</li><li>Token</li><li>Security</li></ol>","30","0","20Square feet","Bed Sitter");
INSERT INTO hostel VALUES("33","6","Mbwa Kali","Mbwa Kali","empty","28000","1493480944_Hostel Booking IMG_20170422_163921.jpg","<ol><li>Electricity</li><li>Water</li><li>Token</li></ol>","30","0","20Square feet","Self Contain");


DROP TABLE IF EXISTS hostel_image;

CREATE TABLE `hostel_image` (
  `hoselId` int(12) NOT NULL,
  `img1` varchar(111) DEFAULT NULL,
  `img2` varchar(111) DEFAULT NULL,
  `img3` varchar(111) DEFAULT NULL,
  `img4` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`hoselId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO landlord VALUES("4","Abraham Ogol","abramogol@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","Male","116636511","","1491022574_IMG_20161117_163237.jpg");
INSERT INTO landlord VALUES("5","Alice Maganga","alice@gm.vom","changeme","0790463533","","","","");
INSERT INTO landlord VALUES("6","Judy Odhiambo","judy@judy.com","e87385f3b131ff2cd207bd28e4215d5e","1234567890","Female","11111111","Male","");
INSERT INTO landlord VALUES("7","Fred Omondi","fred@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","Male","12345678","Male","");
INSERT INTO landlord VALUES("8","Roland Obrien","roland@gmail.com","ee21d5f27a8401788147f6f6184ddb11","0987654321","Male","12345678","Male","");
INSERT INTO landlord VALUES("9","Owen Otieno","owen@gmail.com","43996fb100428b0d99e233c3261f7187","12345897","Male","87654321","Male","");
INSERT INTO landlord VALUES("10","Andrew Ogol","andrew@gmail.com","e87385f3b131ff2cd207bd28e4215d5e","0790463533","Male","12345678","Male","");
INSERT INTO landlord VALUES("11","Fredrick Ogola","fredrick@yahoo.com","d64f51b2dd56aa43c8db7cd932c5f5a6","0754311478","Male","7654321","Male","");


DROP TABLE IF EXISTS location;

CREATE TABLE `location` (
  `id` int(2) NOT NULL,
  `location` varchar(32) NOT NULL,
  `long` varchar(32) DEFAULT NULL,
  `lat` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO location VALUES("0","Nyawita","2.111121","23.222322");
INSERT INTO location VALUES("0","Mabungo","21.000","21.000");
INSERT INTO location VALUES("0","Market","20.0000","20.0000");
INSERT INTO location VALUES("0","Luanda","24.0000","3.1100");
INSERT INTO location VALUES("0","Lela","2.111121","20.0000");
INSERT INTO location VALUES("0","Mbwa Kali","20.0000","23.222322");
INSERT INTO location VALUES("0","coptic","20.0000","20.0000");
INSERT INTO location VALUES("0","Past IDP","00000000","00000000");
INSERT INTO location VALUES("0","Imani","0000000","0000000");
INSERT INTO location VALUES("0","Wells","00000000","00000000");


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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

INSERT INTO network VALUES("1","","","1","2017-01-20 19:21:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("2","::1","","1","2017-01-20 19:21:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("3","::1","","1","2017-01-20 19:21:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("4","::1","","1","2017-01-20 19:22:46","Abraham Ogol","Client","1");
INSERT INTO network VALUES("5","::1","","1","2017-01-21 21:33:26","Abraham Ogol","Client","1");
INSERT INTO network VALUES("6","::1","","4","2017-01-20 19:26:33","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("7","::1","","1","2017-01-21 21:33:26","Admin Admin","Admin","1");
INSERT INTO network VALUES("8","::1","","4","2017-01-21 09:39:19","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("9","::1","","1","2017-01-21 21:33:26","Abraham Ogol","Client","1");
INSERT INTO network VALUES("10","::1","","4","2017-01-21 21:33:44","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("11","::1","","1","2017-01-27 14:32:38","Abraham Ogol","Client","1");
INSERT INTO network VALUES("12","::1","","1","2017-01-27 14:32:38","Admin Admin","Admin","1");
INSERT INTO network VALUES("13","::1","","1","2017-01-27 14:32:38","Abraham Ogol","Client","1");
INSERT INTO network VALUES("14","::1","","1","2017-01-27 14:32:38","Admin Admin","Admin","1");
INSERT INTO network VALUES("15","::1","","1","2017-01-27 14:32:38","Admin Admin","Admin","1");
INSERT INTO network VALUES("16","::1","","1","2017-01-27 14:32:38","Abraham Ogol","Client","1");
INSERT INTO network VALUES("17","::1","","4","2017-01-27 14:32:59","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("18","::1","","1","2017-03-30 17:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("19","::1","","1","2017-03-30 17:42:55","Abraham Ogol","Client","1");
INSERT INTO network VALUES("20","::1","","1","2017-03-30 17:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("21","::1","","1","2017-03-30 17:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("22","::1","","4","2017-02-22 09:09:03","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("23","::1","","1","2017-03-30 17:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("24","::1","","4","2017-03-24 10:52:00","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("25","::1","","1","2017-03-30 17:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("26","::1","","1","2017-03-30 17:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("27","::1","","1","2017-03-30 17:42:55","Admin Admin","Admin","1");
INSERT INTO network VALUES("28","::1","","1","2017-03-30 17:45:12","Abraham Ogol","Client","1");
INSERT INTO network VALUES("29","::1","","1","2017-03-30 17:57:16","Abraham Ogol","Client","1");
INSERT INTO network VALUES("30","::1","","1","2017-03-30 17:57:16","Abraham Ogol","Client","1");
INSERT INTO network VALUES("31","::1","","1","2017-03-30 17:58:29","Abraham Ogol","Client","1");
INSERT INTO network VALUES("32","::1","","1","2017-03-31 21:41:39","Abraham Ogol","Client","1");
INSERT INTO network VALUES("33","::1","","1","2017-03-31 21:41:39","Admin Admin","Admin","1");
INSERT INTO network VALUES("34","::1","","1","2017-03-31 22:12:48","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("35","::1","","7","2017-03-31 23:27:59","Cafew Mourice","Client","1");
INSERT INTO network VALUES("36","::1","","7","2017-03-31 23:27:59","Cafew Mourice","Client","1");
INSERT INTO network VALUES("37","::1","","4","2017-04-02 10:49:35","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("38","::1","","4","2017-04-02 10:50:47","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("39","::1","","1","2017-04-11 23:20:18","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("40","::1","","4","2017-04-05 10:32:22","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("41","::1","","1","2017-04-11 23:20:18","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("42","::1","","1","2017-04-13 04:11:05","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("43","::1","","1","2017-04-13 04:11:05","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("44","::1","","1","2017-04-13 07:33:09","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("45","::1","","1","2017-04-13 07:33:09","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("46","::1","","4","2017-04-13 07:33:37","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("47","::1","","1","2017-04-13 20:44:53","Admin Admin","Admin","1");
INSERT INTO network VALUES("48","::1","","1","2017-04-13 20:44:53","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("49","::1","","1","2017-04-13 20:44:53","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("50","::1","","4","2017-04-13 20:45:58","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("51","::1","","4","2017-04-14 00:09:57","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("52","::1","","1","2017-04-17 20:05:47","Admin Admin","Admin","1");
INSERT INTO network VALUES("53","::1","","4","2017-04-15 16:57:16","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("54","::1","","4","2017-04-17 06:49:17","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("55","::1","","1","2017-04-17 20:05:47","Admin Admin","Admin","1");
INSERT INTO network VALUES("56","::1","","1","2017-04-17 20:05:47","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("57","::1","","1","2017-04-17 20:05:47","Admin Admin","Admin","1");
INSERT INTO network VALUES("58","::1","","1","2017-04-25 14:10:35","Admin Admin","Admin","1");
INSERT INTO network VALUES("59","::1","","1","2017-04-25 14:10:35","Admin Admin","Admin","1");
INSERT INTO network VALUES("60","192.168.173.192","","1","2017-04-25 14:10:35","Admin Admin","Admin","1");
INSERT INTO network VALUES("61","::1","","1","2017-04-25 14:10:35","Admin Admin","Admin","1");
INSERT INTO network VALUES("62","::1","","4","2017-04-24 04:13:40","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("63","192.168.159.1","","11","2017-04-24 04:18:49","Fredrick Ogola","Landlord","0");
INSERT INTO network VALUES("64","::1","","1","2017-04-25 14:10:35","Admin Admin","Admin","1");
INSERT INTO network VALUES("65","::1","","1","2017-04-25 14:10:35","Abraham Ogoll","Client","1");
INSERT INTO network VALUES("66","::1","","1","2017-04-25 14:10:49","Admin Admin","Admin","0");
INSERT INTO network VALUES("67","::1","","1","2017-04-26 18:44:28","Abraham Ogoll","Client","0");
INSERT INTO network VALUES("68","::1","","4","2017-04-26 18:49:27","Abraham Ogol","Landlord","0");
INSERT INTO network VALUES("69","::1","","1","2017-04-28 11:20:40","Admin Admin","Admin","0");
INSERT INTO network VALUES("70","::1","","1","2017-04-28 16:20:29","Admin Admin","Admin","0");
INSERT INTO network VALUES("71","::1","","1","2017-04-28 21:30:47","Abraham Ogoll","Client","0");
INSERT INTO network VALUES("72","::1","","1","2017-04-29 17:58:48","Admin Admin","Admin","0");
INSERT INTO network VALUES("73","169.254.173.21","","3","2017-04-29 18:05:17","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("74","169.254.173.21","","3","2017-04-29 18:05:37","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("75","169.254.173.21","","3","2017-04-29 18:05:59","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("76","169.254.173.21","","3","2017-04-29 18:06:38","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("77","::1","","3","2017-04-29 18:07:20","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("78","::1","","2","2017-04-29 18:12:26","Mercy Muthony","Admin","0");
INSERT INTO network VALUES("79","::1","","2","2017-04-29 18:15:47","Mercy Muthony","Admin","0");
INSERT INTO network VALUES("80","169.254.173.21","","3","2017-04-29 18:17:56","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("81","169.254.173.21","","3","2017-04-29 18:22:59","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("82","169.254.173.21","","6","2017-04-29 18:53:28","Bob Calympore","Client","1");
INSERT INTO network VALUES("83","169.254.173.21","","8","2017-04-29 18:54:10","Roland Obrien","Landlord","0");
INSERT INTO network VALUES("84","169.254.173.21","","8","2017-04-29 18:54:10","Roland Obrien","Landlord","0");
INSERT INTO network VALUES("85","169.254.173.21","","3","2017-04-29 18:58:17","Obrien Makwata","Admin","0");
INSERT INTO network VALUES("86","::1","","14","2017-05-01 11:45:34","Admin Admin","Admin","0");


DROP TABLE IF EXISTS notification;

CREATE TABLE `notification` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `landlordid` int(1) NOT NULL,
  `msg` varchar(120) NOT NULL,
  `readlandlord` int(1) NOT NULL DEFAULT '0',
  `readadmin` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO notification VALUES("1","4","Abraham Ogoll Has booked hostel at Wed/Apr/2017 05:45:51for3Keep enjoying with hostel Booking","0","0","2017-04-26 18:45:51");
INSERT INTO notification VALUES("2","4","Abraham Ogoll Has booked hostel   for12 Keep enjoying with hostel Booking","0","0","2017-04-28 21:31:13");


DROP TABLE IF EXISTS password_reset;

CREATE TABLE `password_reset` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sender` varchar(14) NOT NULL,
  `userType` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO password_reset VALUES("1","2017-03-24 11:05:40","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("2","2017-03-24 11:06:21","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("3","2017-03-24 11:15:20","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("4","2017-03-24 11:18:08","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("5","2017-03-24 11:20:06","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("6","2017-03-24 11:21:25","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("7","2017-03-24 11:26:49","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("8","2017-03-24 11:27:39","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("9","2017-03-24 11:28:10","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("10","2017-03-24 11:31:18","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("11","2017-03-24 11:32:01","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("12","2017-03-24 11:36:24","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("13","2017-03-24 11:38:32","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("14","2017-03-24 11:41:14","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("15","2017-03-24 11:47:19","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("16","2017-03-25 07:57:07","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("17","2017-03-25 08:01:49","Abraham Ogol","Landlord");
INSERT INTO password_reset VALUES("18","2017-03-25 08:03:56","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("19","2017-03-25 08:05:03","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("20","2017-03-25 08:37:51","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("21","2017-03-25 08:42:04","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("22","2017-03-25 08:43:10","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("23","2017-03-25 08:45:03","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("24","2017-03-25 08:46:39","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("25","2017-03-25 08:47:12","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("26","2017-03-25 08:49:36","Abraham Ogol","Client");
INSERT INTO password_reset VALUES("27","2017-04-13 04:30:09","Abraham Ogoll","");
INSERT INTO password_reset VALUES("28","2017-04-13 04:31:25","Abraham Ogoll","");


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

INSERT INTO payment VALUES("526931","2017-03-31 23:13:22","11","10000","079046353","0","uncomplete");
INSERT INTO payment VALUES("533065","2017-04-13 04:09:06","12","15000`","0790463533","0","uncomplete");
INSERT INTO payment VALUES("535415","2017-04-12 19:17:32","13","13000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("650070","2017-04-28 21:31:13","14","30000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("672546","2017-04-13 06:56:02","11","10000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("689133","2017-04-17 19:58:48","12","15000`","0790463533","0","uncomplete");
INSERT INTO payment VALUES("706222","2017-04-26 18:44:34","16","24000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("728363","2017-04-13 04:06:40","12","15000`","0790463533","0","uncomplete");
INSERT INTO payment VALUES("865860","2017-04-25 14:10:02","14","30000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("889862","2017-04-26 18:45:51","16","24000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("897370","2017-03-31 23:14:02","1","10000","079046353","0","uncomplete");
INSERT INTO payment VALUES("903473","2017-03-31 09:44:31","11","10000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("931183","2017-03-30 07:42:40","11","10000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("968247","2017-04-13 05:26:14","13","13000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("976563","2017-04-03 15:33:42","3","30000","0790463533","0","uncomplete");
INSERT INTO payment VALUES("998704","2017-04-13 08:04:23","13","13000","0790463533","0","uncomplete");


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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO systemadmin VALUES("2","Mercy Muthony","marcyikumbi@gmail.com","bf2ff2ed3c83c3c5ce510c4666f6fb0d","0724484862","123456789","Female","1493478726_9 I m_Back (www.cute-pictures.blogspot.com).jpg");
INSERT INTO systemadmin VALUES("3","Obrien Makwata","obrien@gmail.com","10cd26a9686c48a37905975ed8524ae8","0790463533","1234567890","Male","1493478312_Kevo 20161007_235720.jpg");
INSERT INTO systemadmin VALUES("14","Admin Admin","admin@admin.com","21232f297a57a5a743894a0e4a801fc3","0790463533","116636511","Male","1484739445_IMG_20150708_135025 - Copy.jpg");


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


