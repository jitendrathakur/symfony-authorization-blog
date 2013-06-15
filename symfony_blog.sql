-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2013 at 04:05 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acl_classes`
--

INSERT INTO `acl_classes` (`id`, `class_type`) VALUES
(1, 'Acme\\BlogBundle\\Entity\\Comment');

-- --------------------------------------------------------

--
-- Table structure for table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acl_entries`
--

INSERT INTO `acl_entries` (`id`, `class_id`, `object_identity_id`, `security_identity_id`, `field_name`, `ace_order`, `mask`, `granting`, `granting_strategy`, `audit_success`, `audit_failure`) VALUES
(1, 1, 2, 1, NULL, 0, 128, 1, 'all', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `acl_object_identities`
--

INSERT INTO `acl_object_identities` (`id`, `parent_object_identity_id`, `class_id`, `object_identifier`, `entries_inheriting`) VALUES
(1, NULL, 1, '4', 1),
(2, NULL, 1, '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `acl_object_identity_ancestors`
--

INSERT INTO `acl_object_identity_ancestors` (`object_identity_id`, `ancestor_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acl_security_identities`
--

INSERT INTO `acl_security_identities` (`id`, `identifier`, `username`) VALUES
(1, 'Acme\\UserBundle\\Entity\\User-test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `blog` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `auther` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `blog`, `tags`, `auther`, `image`, `created`, `modified`) VALUES
(1, 'Mysql', 'mysql', 'MysqlPasswordReset\r\nContent Cleanup Required: This article should be cleaned-up to follow the content standards in the Wiki Guide. More info...\r\n\r\nPlease do not make any edits to this article. Its contents are currently under review and being merged with the Ubuntu Server Guide. To find the Ubuntu Server Guide related to your specific version, please go to:\r\n\r\nhttps://help.ubuntu.com/ and click on Ubuntu Server Guide\r\n\r\nWhy are you looking at this wiki page?\r\nAre you looking at this page because you cannot access the mysql server installed on your pc/server when you were trying to see if it works well? Or do you receive error messages like the following? :\r\n\r\n\r\nERROR 1045: Access denied for user: ''root@localhost'' (Using \r\npassword: NO)\r\nor\r\n\r\n\r\nERROR 1045: Access denied for user: ''root@localhost'' (Using \r\npassword: YES)\r\nTo resolve this problem ,a fast and always working way is the "Password Resetting" .\r\n\r\nHow can I reset my MySQL password?\r\n Following this procedure, you will disable access control on the MySQL server. All connexions will have a root access. It is a good thing to unplug your server from the network or at least disable remote access.\r\n\r\nTo reset your mysqld password just follow these instructions :\r\n\r\nStop the mysql demon process using this command :\r\n   sudo /etc/init.d/mysql stop\r\nStart the mysqld demon process using the --skip-grant-tables option with this command \r\n   sudo /usr/sbin/mysqld --skip-grant-tables --skip-networking &\r\nBecause you are not checking user privs at this point, it''s safest to disable networking. In Dapper, /usr/bin/mysgld... did not work. However, mysqld --skip-grant-tables did.\r\n\r\nstart the mysql client process using this command \r\n   mysql -u root\r\nfrom the mysql prompt execute this command to be able to change any password\r\n   FLUSH PRIVILEGES;\r\nThen reset/update your password \r\n   SET PASSWORD FOR root@''localhost'' = PASSWORD(''password'');\r\nIf you have a mysql root account that can connect from everywhere, you should also do:\r\n   UPDATE mysql.user SET Password=PASSWORD(''newpwd'') WHERE User=''root'';\r\nAlternate Method:\r\n   USE mysql\r\n   UPDATE user SET Password = PASSWORD(''newpwd'')\r\n   WHERE Host = ''localhost'' AND User = ''root'';\r\nAnd if you have a root account that can access from everywhere:\r\n   USE mysql\r\n   UPDATE user SET Password = PASSWORD(''newpwd'')\r\n   WHERE Host = ''%'' AND User = ''root'';\r\nFor either method, once have received a message indicating a successful query (one or more rows affected), flush privileges:\r\n\r\nFLUSH PRIVILEGES;\r\nThen stop the mysqld process and relaunch it with the classical way:\r\n\r\nsudo /etc/init.d/mysql stop\r\nsudo /etc/init.d/mysql start\r\nWhen you have completed all this steps ,you can easily access to your mysql server with the password you have set in the step before. An easy way to have a full control of your mysql server is phpmyadmin (www.phpmyadmin.net), software made in php that can give you a web interface that can be very usefull to people that havent got a lot of confidence with bash .To install phpmyadmin on you server you will need to have 4 things:\r\n\r\nweb server apache\r\nphp \r\nmysql server/mysql client installed\r\nphp_mysql support for apache \r\nAll packages can be found browsing synaptic.\r\n\r\n\r\nAnother way, purge\r\nI also had some problems with mysql just not accepting my password. I tried the other way as well and it just ended up being difficult. I had not been able to use mysql so it was empty anyway. If this is also your case you may opt for the PURGE way. This removes every file related to mysql. Depending on your installation the packages might be diffrent, mysql-server in 6.10 is called mysql-server-5.0 as an example.\r\n\r\n USE THIS AS A LAST RESORT METHOD, YOU WILL LOSE ALL YOUR MYSQL DATA\r\n\r\n\r\nsudo apt-get --purge remove mysql-server mysql-common mysql-client\r\n\r\nsudo apt-get install mysql-server mysql-common mysql-client\r\nIn the next step be sure to chance the your-new-password with the password you want!\r\n\r\n\r\nmysqladmin -u root password your-new-password\r\nsudo /etc/init.d/mysql restart\r\n\r\nmysql -u root -p\r\nYou should now be logged in as root. Make sure to notedown your password! Thanks to Illuvator for posting this method in the ubuntu forum.', 'test', 'test', 'logo.gif', '2013-04-12 12:26:52', '2013-04-12 12:26:55'),
(28, 'The Lion rock', 'the-lion-rock', 'MysqlPasswordReset Content Cleanup Required: This article should be cleaned-up to follow the content standards in the Wiki Guide. More info... Please do not make any edits to this article. Its contents are currently under review and being merged with the Ubuntu Server Guide. To find the Ubuntu Server Guide related to your specific version, please go to: https://help.ubuntu.com/ and click on Ubuntu Server Guide Why are you looking at this wiki page? Are you looking at this page because you cannot access the mysql server installed on your pc/server when you were trying to see if it works well? Or do you receive error messages like the following? : ERROR 1045: Access denied for user: ''root@localhost'' (Using password: NO) or ERROR 1045: Access denied for user:', 'LION man pan', 'LION', 'ac9325aec674538b86332661b37d46f52aa959dc.jpeg', '2013-04-18 13:22:11', '2013-04-18 13:22:11'),
(26, 'Nature', 'nature', 'Ab de rehmat nako Ab de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nakoAb de rehmat nako', 'Ab de rehmat nako', 'Ab de rehmat nako', '117e75e431fa7cfc4d613851e9f471644e486bfb.jpeg', '2013-04-18 13:17:32', '2013-04-18 13:17:32'),
(25, 'kk', 'kk', 'kk', 'kk', 'kk', '/tmp/phpCNDWv6', '2013-04-18 13:01:24', '2013-04-18 13:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `approved` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `blog_id`, `user`, `approved`, `created`, `updated`) VALUES
(1, 'test', 1, 'test', 1, '2013-04-12 12:29:11', '2013-04-12 12:29:14'),
(2, 'wow', 1, 'donald', 1, '2013-04-12 12:42:15', '2013-04-12 12:42:15'),
(3, 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', 1, 'test', 1, '2013-04-16 12:01:37', '2013-04-16 12:01:37'),
(4, 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', 1, 'test', 1, '2013-04-16 12:18:37', '2013-04-16 12:18:37'),
(5, 'whatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhatwhat', 1, 'what', 1, '2013-04-16 12:19:17', '2013-04-16 12:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `role`, `created`, `modified`) VALUES
(1, 'user', 'ROLE_USER', '2013-04-16 00:00:00', '2013-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plainPassword` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `plainPassword`, `salt`, `is_active`, `created`, `modified`) VALUES
(1, 'test@test.com', 'test', '8TcQTlOrs4QXvNf52dsu0/8JFsG/MizfzWvwuYUi1kZkovKBLacso0Do8HMZlJgCjtzAwMOpuOd938CFYoQEtg==', '123', '1915873bb8622f4befd9db2e8a23eeb0', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'abc@test.com', 'guest', '111', '111', '332abee2c38662a7564140a6d7c6881e', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'jitz@cis.com', 'jitz', '123456', '123456', '5fe59929963bd424f2ad90a1f976491f', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'jitz1@cis.com', 'jitz1', '123456', '123456', '9a283df8c476ddc03fbab3583a2ffe9d', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'jitz2@cis.com', 'jitz1', '123456', '123456', '981025e6ade07cd0270a4668c5c58a2f', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'jitz3@cis.com', 'jitz3', '123456', '123456', 'b02e2d9d5347c790a65d8c957d1e533a', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'aa@aa.com', 'aa', 'cfGt41hPWQqDD0fHyBn0F9ZDMOvoWc6GsUDFZS82hhXnvmkfsNABaaO3IfMplDwUQudSQaAZesXm0wG9wKzLag==', 'cfGt41hPWQqDD0fHyBn0F9ZDMOvoWc6GsUDFZS82hhXnvmkfsNABaaO3IfMplDwUQudSQaAZesXm0wG9wKzLag==', '083d0a08c67bd35dff9552fd9059d981', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'aa@aa.com', 'aa', 'BF/xVHoOWhMwA9hMvFmadpkaaE4W92XImUNkVjUFnqmK9QYG2NujV7lQP54S1IHX2uYU6OHkzgT5H/Kf2+Geog==', 'BF/xVHoOWhMwA9hMvFmadpkaaE4W92XImUNkVjUFnqmK9QYG2NujV7lQP54S1IHX2uYU6OHkzgT5H/Kf2+Geog==', '5e34bad0277567a17e86073a10c74141', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'sym@cis.com', 'sym', 'acIYhAdqpAEjcJ4uYy+X/umhcChXL7BnncowZr/60XayxzS59PzrVQ3FTBk3RqJG9GWkOULXjGjZLSO06F8y5Q==', 'acIYhAdqpAEjcJ4uYy+X/umhcChXL7BnncowZr/60XayxzS59PzrVQ3FTBk3RqJG9GWkOULXjGjZLSO06F8y5Q==', 'b96af4c85e5b376cb1d99e423c6c6e5d', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'etrert@dfgfg.com', 'fakeera', 'PrqDwB0SS+G/T8M02opy4aWudDsclCz191LvtWVvBL2HoppiheSQ2K27c0cj91RrmJBgLAWl2RAkEZtfW46GhQ==', 'PrqDwB0SS+G/T8M02opy4aWudDsclCz191LvtWVvBL2HoppiheSQ2K27c0cj91RrmJBgLAWl2RAkEZtfW46GhQ==', '02bc234ad4e8e24ceb58fa4910086801', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'sym1@cis.com', 'sym1', 'tg6qZSsBtB+21vpKidJxZtbDtiWfeHt62sNSh2PSCR/m4oGc/ewnApdG4sITx+4NCJRK7YqZHf3Gl+8kv17F3Q==', 'tg6qZSsBtB+21vpKidJxZtbDtiWfeHt62sNSh2PSCR/m4oGc/ewnApdG4sITx+4NCJRK7YqZHf3Gl+8kv17F3Q==', 'd2e12cabea93891d2634ad331f642d53', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'rishi@cis.com', 'rishi', '+RC6XZngk5xIFRd+r5saQ2VO6HY9AF96cH0VaS2MBahNE8kkohbcgphNnQEW6jtsTOV+LmrcjMiCxZ1NpfAgzg==', '+RC6XZngk5xIFRd+r5saQ2VO6HY9AF96cH0VaS2MBahNE8kkohbcgphNnQEW6jtsTOV+LmrcjMiCxZ1NpfAgzg==', '0183bc8ad945c2e833de760dc4a620c1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'bb@bbbb.com', 'bbb', 'YlpoiF0i4WffoI9mFJjY2PKPCvIfwTAyxfvxHJdCIU4nWHL1XeEe5Qv3w/7tQyOeL+zruKWYioXdoJ+A1f9c7A==', 'YlpoiF0i4WffoI9mFJjY2PKPCvIfwTAyxfvxHJdCIU4nWHL1XeEe5Qv3w/7tQyOeL+zruKWYioXdoJ+A1f9c7A==', 'e155c099b5c60d04ca8a0cd531ee6ef3', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'ww@ww.com', 'ww', 'b539uQs1G4WY3nRd7mMWyX7jnqc9/4OmxKBvN07mPXjzXiBPkZ2HBQFPo5uy9yvAsg+RGoOyM5BbCSPB+EC0dw==', 'b539uQs1G4WY3nRd7mMWyX7jnqc9/4OmxKBvN07mPXjzXiBPkZ2HBQFPo5uy9yvAsg+RGoOyM5BbCSPB+EC0dw==', '4f90046cdd5b6f832288d85b8b0d929c', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'jitendra@cis.com', 'jitendra', 'An+qt/PyhAOaHur7oBGEFsWybKP/iKskVeuI90+xRu1ji36iCJAV1OhTcSOOUEjH/sOZHnEMgqLJVQBaFB7mgw==', 'An+qt/PyhAOaHur7oBGEFsWybKP/iKskVeuI90+xRu1ji36iCJAV1OhTcSOOUEjH/sOZHnEMgqLJVQBaFB7mgw==', 'ae647b973a6d95d7ea8a97b36c00fe0e', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'tika@tata.com', 'tika', 'aWEfno2lL4ESBK1wTUNhfOFbmETGRO0bOypI26egHsgnhwEokmM8v/vgMAz2dxp5iA09zfob4l1KEcG3jRegtg==', 'aWEfno2lL4ESBK1wTUNhfOFbmETGRO0bOypI26egHsgnhwEokmM8v/vgMAz2dxp5iA09zfob4l1KEcG3jRegtg==', 'a0431e1ae47046338221b040e372291f', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'yy@yyy.com', 'yy', 'yauF2Q6GFiWgpEs9Hsdoh42gipSRb374j0/440B11/wN040bAAo1LeEyTmrdapWJ3nlhMH5qx9V5pg7/mqVGzw==', 'yauF2Q6GFiWgpEs9Hsdoh42gipSRb374j0/440B11/wN040bAAo1LeEyTmrdapWJ3nlhMH5qx9V5pg7/mqVGzw==', '6a7988f638baa876533e56fb5eee6f1a', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'vikash@cis.com', 'vikash', 'jUSJUwUVty3utHcRAedgyCLrEY5ZfcnFK9Tyug/NWwc/rP5kPRtcXM8XHBQCrRpwtIHpRSOl79iAaBlQjlxc7g==', 'jUSJUwUVty3utHcRAedgyCLrEY5ZfcnFK9Tyug/NWwc/rP5kPRtcXM8XHBQCrRpwtIHpRSOl79iAaBlQjlxc7g==', '566e0ceb511dc3a9e1f5ff014003ae1f', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'donald@cis.com', 'donald', 'QLQi+FakopJSZaZoPQTf9jDR1fnx9Hj7NSVhy7MZkJZUnbe9ms1FepGorldzA8j//zmEVCH3o0t8prsPqKCjMw==', 'QLQi+FakopJSZaZoPQTf9jDR1fnx9Hj7NSVhy7MZkJZUnbe9ms1FepGorldzA8j//zmEVCH3o0t8prsPqKCjMw==', '7dead5aba4179f8b13642e604934a973', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`, `created`, `modified`) VALUES
(1, 1, 1, '2013-04-16 00:00:00', '2013-04-16 00:00:00'),
(2, 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 14, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Constraints for table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
