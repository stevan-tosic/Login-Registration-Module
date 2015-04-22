-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 02:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loginreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `name`, `joined`, `group`) VALUES
(3, 'toskadv', 'ed197ba08f4b9c848763fec0d49a3e12f761a3426e5c5cf07b2419c2453c7fb4', 'Eü2çN¬@nQ.LÿÔÉt§Ö­w<“øá¤¹aô‰', 'Stevan Tosic', '2015-04-21 16:50:43', 1),
(4, 'toskadv2', '38c66aa3f51d85ec8c2f6285d8ed2316231bbc37c2a4110ceb3f2bf1a3bcf70c', '„[g;»v›dt,RýõP>Œ	.~¡¶r}ÌüWªì5wÝ', 'Stevan Tosic', '2015-04-21 16:56:31', 1),
(5, 'toskadv3', '3defb1f79f34c39b48eb8da4e24ac128a907fadb269907700acbc51d2bb1a1f3', 'ãXI\rLú‡‡Ò-ÂUòÂ]ûÜ—`áŒ:„', 'Stevan Tosic', '2015-04-21 16:57:58', 1),
(6, 'toskadv33', 'a4bcab66e8a845b61b8ff8620827e3ba99a1fa14c403b34da1a5a5881ebc9ab8', 'ži)WõP½‡\ZìTYl…†\n^Áß!ÖdSþvú¾', 'Stevan Tosic', '2015-04-21 17:01:22', 1),
(7, 'king', '3141f9d8de48abaefa5e99c54a45ca8b13ad1db741097f45a7dcfbe117aae90b', 'Š’xªYR=•8\r\\„]œ«9¬;ÚÒ&9€F­ÔœÕ', 'Stevan KinG Tosic', '2015-04-21 17:04:28', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
