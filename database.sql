
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cgpa` IF YOU RENAME THE DATABASE NAME THEN change it into db_confic.php page
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  `depertment` varchar(60) NOT NULL,
  `level` int(2) NOT NULL,
  `tearm` int(2) NOT NULL,
  `courseCode` varchar(40) NOT NULL,
  `courseName` varchar(150) NOT NULL,
  `courseCredit` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

CREATE TABLE IF NOT EXISTS `depertments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  `depertment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


CREATE TABLE IF NOT EXISTS `universitys` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
