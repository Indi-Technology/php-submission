-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 06:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Programming'),
(3, 'Music'),
(4, 'Dance'),
(6, 'Painting'),
(7, 'People'),
(8, 'Social Media'),
(9, 'Technology'),
(10, 'Sport'),
(11, 'E-Sport');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(6) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `contents`, `date_posted`) VALUES
(6, 2, 'What is programming today?', 'Programming is a way to “instruct the computer to perform various tasks”.\r\n\r\nConfusing? Let us understand the definition deeply.\r\n\r\n“Instruct the computer”: this basically means that you provide the computer a set of instructions that are written in a language that the computer can understand. The instructions could be of various types. For example:\r\n\r\nAdding 2 numbers,\r\nRounding off a number, etc.\r\nJust like we humans can understand a few languages (English, Spanish, Mandarin, French, etc.), so is the case with computers. Computers understand instructions that are written in a specific syntactical form called a programming language.\r\n\r\n“Perform various tasks”: the tasks could be simple ones like we discussed above (adding 2 numbers, rounding off a number) or complex ones which may involve a sequence of multiple instructions. For example:\r\n\r\nCalculating simple interest, given principal, rate and time.\r\nCalculating the average return on a stock over the last 5 years.\r\nThe above 2 tasks require complex calculations. They cannot usually be expressed in simple instructions like adding 2 numbers, etc.\r\n\r\nHence, in summary, Programming is a way to tell computers to do a specific task.', '2022-08-01 15:50:31'),
(8, 3, 'Music <3', 'What is music? Music is an art form that combines either vocal or instrumental sounds, sometimes both, using form, harmony, and expression of emotion to convey an idea. Music represents many different forms that play key factors in cultures around the world. A description of music, when asked by musicians, is quite challenging for them to put into a words. There is something unique, unto each artist, which music makes people feel a specific way in the world. John Coltrane described his music as, \'\'My music is the spiritual expression of what I am my faith, my knowledge, my being. When you begin to see the possibilities of music, your desire to do something really good for people, to help humanity free itself from its hang ups. I want to speak to their souls.\'\'\r\n\r\nMusic is the art form that combines rhythm and sound to form a functional melodic line. Music itself transcends time, space, and cultures. Music can carry a mood without speaking any specific words. It can also be captured and recorded in a written universal language unique unto any other art form.\r\n\r\nThe history of music is a lengthy topic which requires much depth and time. Music is an ancient art form that began during prehistoric times. It carries with it a history for each human culture throughout time. Although there are many varied definitions of music, it is a cultural universal because every culture throughout time and history has made music a primary component of life. For ages, music was passed down through oral tradition on a fundamental level; but for formal purposes, recorded music began with the written tradition by medieval monks during 500 AD to 1400.', '2022-08-02 15:53:36'),
(9, 4, 'Just Dance!', 'Work like you don\'t need the money. Love like you\'ve never been hurt. Dance like nobody\'s watching. Satchel Paige', '2022-08-05 15:55:17'),
(10, 6, 'Art of Patience', 'I have seen many storms in my life. Most storms have caught me by surprise, so I had to learn very quickly to look further and understand that I am not capable of controlling the weather, to exercise the art of patience and to respect the fury of nature. -Paulo Coelho', '2022-08-06 15:56:16'),
(11, 7, 'Yeah! People!', 'People don`t change, but they can learn to behave differently.     \r\n\r\nCharlaine Harris', '2022-08-10 15:57:18'),
(12, 8, 'Social Media vs. Technology', 'Social media and technology have evolved tremendously over the last two decades. Each one has helped the other evolve in unique ways. Technological advancements have allowed people to engage with social media on smartphones and computers. Now people are connected through social media wherever they go because everyone has a smartphone in their pocket or purse.\r\n\r\nOn the flip side, social media is changing technology as well. Computer programmers are incorporating social media networking into their software programs. There are also cases where social media influences which software programs get developed in the first place. Business technology has become largely dependent on social media in more ways than one.', '2022-08-14 15:58:33'),
(13, 9, 'Technology!', 'All of the biggest technological inventions created by man - the airplane, the automobile, the computer - says little about his intelligence, but speaks volumes about his laziness. - Mark Kennedy', '2022-08-16 15:59:26'),
(14, 2, 'How does HTTP works?', 'Through the HTTP protocol, resources are exchanged between client devices and servers over the internet. Client devices send requests to servers for the resources needed to load a web page; the servers send responses back to the client to fulfill the requests. Requests and responses share sub-documents -- such as data on images, text, text layouts, etc. -- which are pieced together by a client web browser to display the full web page file.\r\n\r\nIn addition to the web page files it can serve, a web server contains an HTTP daemon, a program that waits for HTTP requests and handles them when they arrive. A web browser is an HTTP client that sends requests to servers. When the browser user enters file requests by either \"opening\" a web file by typing in a URL or clicking on a hypertext link, the browser builds an HTTP request and sends it to the Internet Protocol address (IP address) indicated by the URL. The HTTP daemon in the destination server receives the request and sends back the requested file or files associated with the request.', '2022-08-26 11:36:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
