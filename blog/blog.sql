-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2015 at 04:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `time_posted` date NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`post_id`, `name`, `post_content`, `time_posted`, `article_id`) VALUES
(1, 'fifi lepen', 'sigur ca da', '2015-03-20', 5),
(2, 'bascula', 'hahahaaaaaaaa....!', '2015-05-21', 1),
(3, 'bascula', 'ffrdfy', '2015-05-21', 4),
(4, 'cucurigu', 'ja la padureeeeee', '2015-05-21', 1),
(5, 'baba', 'greeeeat!!!', '2015-05-28', 1),
(6, 'cucu', 'that s it', '2015-05-28', 1),
(7, 'bascula', 'the most amazing book i ever read..', '2015-05-21', 3),
(8, 'javier', 'ja que conocemos esas cosas...', '2015-05-21', 6),
(9, 'gigi', 'frodo is a pussy.he just bitches..', '2015-05-21', 5),
(10, 'gigi', 'wise choice of lecture', '2015-05-21', 7),
(11, 'gigi', 'how can you say that', '2015-05-21', 4),
(12, 'fifilepen', 'idiots,,,', '2015-05-21', 2),
(13, 'bascula', 'me says whatever he wants', '2015-05-21', 4),
(14, 'gigi', 'oh really?are you that bad?open your eyes my friend..', '2015-05-21', 4),
(15, 'bascula', 'lets not argue.we are both civilixed', '2015-05-21', 4),
(16, 'bascula', 'i m changing my life.i am so inspired right now.there s nofing that can stop me ..', '2015-05-21', 1),
(17, 'gigi', 'very very very good.i enjoyed reading zis book.lots to learn', '2015-05-22', 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
