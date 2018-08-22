--dbconnect file is present in database folder
--please create a database first and change dbconnect file accordingly
--then only run these sql queries into MySQL server or phpmyadmin
--CSV files also store the inofrmation date wise, but MySql is a master database in case of any query
CREATE TABLE `registrations` (
  `id` int(6) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `insta` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `payphone` varchar(15) DEFAULT NULL,
  `dateReg` varchar(50) DEFAULT NULL,
  `isSquad` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `screenshot` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ascii;


CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET ascii DEFAULT NULL,
  `email` varchar(100) CHARACTER SET ascii DEFAULT NULL,
  `pass` varchar(256) CHARACTER SET ascii DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Anand Thakkar', 'abc@gmail.com', '$2y$10$o/.m12ovQphNEx3bE7VO7.k11NObXQHCbch/l7ZD3m7PC2FCNh9ti');
--change the id or name to whatever suiutable, password is hashed
--if you want to change the password go to https://bcrypt-generator.com/ and you can hash your own password
