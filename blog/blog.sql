-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2015 at 08:08 PM
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
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date_posted` date NOT NULL,
  `link_more` varchar(255) NOT NULL,
  `nr_of_comments` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `author`, `content`, `date_posted`, `link_more`, `nr_of_comments`, `poster`, `likes`, `dislikes`) VALUES
(1, 'the fountainhead', 'Ayn Rand', 'When The Fountainhead was first published, Ayn Rand''s daringly original literary vision and her groundbreaking philosophy, Objectivism, won immediate worldwide interest and acclaim. This instant classic is the story of an intransigent young architect..', '2015-05-21', 'http://www.goodreads.com/book/show/2122.The_Fountainhead', 6, 'jill', 5, 3),
(2, 'platforma', 'Michel Houellebecq ', 'Michel Houellebecq is the first French novelist since Albert Camus to find a wide readership outside France. His novel Les particules elementaires, published in this country two years ago as Atomised, was praised by all manner of sober critics and his..', '2015-05-22', 'http://www.theguardian.com/books/2002/sep/07/fiction.michelhouellebecq', 2, 'john', 5, 3),
(3, 'fight club', 'Chuck Palahniuk ', '\r\nIn his debut novel, Chuck Palahniuk showed himself to be his generation''s most visionary satirist. Fight Club''s estranged narrator leaves his lackluster job when he comes under the thrall of Tyler Durden, an enigmatic young man who holds secret boxing m', '2015-05-27', 'http://www.goodreads.com/book/show/5759.Fight_Club', 2, 'jimmy', 5, 0),
(4, 'Identity', 'Milan Kundera', 'n his second novel written in French (after Slowness), Czech-born novelist Kundera employs spare prose in the service of a meditation on the precarious nature of the human sense of self. Recently divorced ad executive Chantal, on a vacation with her young', '2015-05-30', 'http://www.publishersweekly.com/978-0-06-017564-1', 7, 'jimmy', 5, 0),
(5, 'The Lord of the Rings', 'JRR Tolkien', 'Sauron, the Dark Lord, has gathered to him all the Rings of Power, the means by which he intends to rule Middle-earth. All he lacks in his plans for dominion is the One Ring, the ring that rules them all, which has fallen into the hands of the hobbit', '2015-06-02', 'http://www.fantasybookreview.co.uk/JRR-Tolkien/The-Lord-Of-The-Rings.html', 4, 'nacho', 5, 1),
(6, 'El Paraiso en la otra esquina', 'Mario Vargas Llosa', 'A century passed between the birth of Flora Tristan and the death of her grandson, the great painter Paul Gauguin. They never met, but both dreamed, each in their own way, with a better world. With this novel we get to know these two great personalities..', '2015-06-04', 'http://www.amazon.com/Para%C3%ADso-esquina-Narrativa-Lectura-Spanish/dp/8466320288', 1, 'skip', 0, 0),
(7, 'In cautarea fericirii', 'Bertrand Russell', 'Fericirea, spune Russel, e o stare care se cucereste. si nu in ultimul rand, credem noi, citind paginile spirituale si pline de eleganta ale acestei carti. Vom constata ca un ganditor englez ramane unul englez tocmai pentru ca nu ne face nici o clip..', '2015-06-11', 'http://www.humanitas.ro/humanitas/%C3%AEn-c%C4%83utarea-fericirii', 3, 'skip', 0, 0),
(8, 'The Shadow of the Wind (El cementerio de los libros olvidados ) ', ' Carlos Ruiz Zafon', 'Barcelona, 1945: A city slowly heals in the aftermath of the Spanish Civil War, and Daniel, an antiquarian book dealer''s son who mourns the loss of his mother, finds solace in a mysterious book entitled The Shadow of the Wind, by one Julian Carax.. ', '2015-06-24', 'http://www.goodreads.com/book/show/1232.The_Shadow_of_the_Wind', 8, 'kiz', 0, 0),
(9, 'a new earth', ' Eckhart Tolle ', 'The highly anticipated follow-up to the 2,000,000 copy bestselling inspirational book, "The Power of Now"\nWith his bestselling spiritual guide "The Power of Now," Eckhart Tolle inspired millions of readers to discover the freedom..', '2015-06-25', 'http://www.goodreads.com/book/show/76334.A_New_Earth', 4, 'nacho', 0, 0),
(10, 'The Power of Now: A Guide to Spiritual Enlightenment ', ' Eckhart Tolle ', 'Ekhart Tolle''s message is simple: living in the now is the truest path to happiness and enlightenment. And while this message may not seem stunningly original or fresh, Tolle''s clear writing..', '2015-07-15', 'http://www.goodreads.com/book/show/6708.The_Power_of_Now', 0, 'cico', 0, 0),
(11, 'The Wisdom of Insecurity: A Message for an Age of Anxiety ', ' Alan W. Watts ', 'In this fascinating book, Alan Watts explores man''s quest for psychological security, examining our efforts to find spiritual and intellectual certainty in the realms of religion and philosophy..', '2015-08-11', 'http://www.goodreads.com/book/show/551520.The_Wisdom_of_Insecurity', 1, 'nacho', 0, 0),
(12, 'One Hundred Years of Solitude ', 'Gabriel Garcia Marquez', 'One Hundred Years of Solitude has been written with the recent Latin American literature of fantasy so firmly in mind that on one level it operates as parody of and reflection on what has gone before. .', '2015-07-16', 'http://www.theguardian.com/theguardian/2014/apr/17/one-hundred-years-of-solitude-review', 0, 'kiz', 0, 1),
(13, 'Maktub ', 'Paulo Coelho', 'Maktub não é um livro de conselhos, mas uma troca de experiências. A maior parte dos textos se refere a ensinamentos que Paulo Coelho recebeu de seu mestre ao longo de 11 anos. O', '2015-07-15', 'http://www.goodreads.com/book/show/53809.Maktub', 0, 'nacho', 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

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
(17, 'gigi', 'very very very good.i enjoyed reading zis book.lots to learn', '2015-05-22', 11),
(18, 'fifi lepen', 'of course', '2015-05-22', 1),
(19, 'gigi', 'how polite of you', '2015-05-22', 2),
(20, 'gigi', 'indeed you are sir...', '2015-05-22', 3),
(21, 'gigi', 'OK.sure.you are right', '2015-05-24', 4),
(22, 'fifilepen', 'oh you babies...', '2015-05-24', 4),
(23, 'fifi lepen', 'how many bodybuilders does it take to screw a lightbulb?', '2015-05-24', 5),
(24, 'gigi', 'one to do it and 2 more to say ...dude you re huge', '2015-05-24', 5),
(25, 'bascula', 'how maany philosophers does it take to screw a lightbulb?', '2015-05-24', 7),
(26, 'gigi', 'does the lightbulb want to be unscrewed?', '2015-05-24', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
