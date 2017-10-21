
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:06";

CREATE DATABASE `cgpa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cgpa`;

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `current_subject` varchar(50) NOT NULL,
  `current_level` int(1) NOT NULL,
  `current_tearm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

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
);

CREATE TABLE IF NOT EXISTS `depertments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  `depertment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `universitys` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `universityName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);
