-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd_2018`
--

-- --------------------------------------------------------

--
-- Структура на таблица `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_text` varchar(20) NOT NULL,
  `lang_id` tinyint(2) NOT NULL,
  `url` varchar(2048) NOT NULL,
  `cat_id` tinyint(2) UNSIGNED NOT NULL,
  `position` tinyint(2) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_text`, `lang_id`, `url`, `cat_id`, `position`, `active`) VALUES
(1, 'Начало', 1, '/', 1, 1, 1),
(2, 'За нас', 1, '/about.html', 1, 2, 1),
(3, 'Цени и услуги', 1, '/services.html', 1, 3, 1),
(4, 'Галерия', 1, '/foto-galeriya', 1, 4, 1),
(5, 'Блог', 1, '/blog', 1, 5, 1),
(6, 'Контакти', 1, '/kontakti', 1, 6, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `page`
--

CREATE TABLE `page` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `lang_id` tinyint(2) UNSIGNED NOT NULL DEFAULT '1',
  `uri` varchar(2048) NOT NULL,
  `html_title` varchar(100) NOT NULL DEFAULT '',
  `html_description` varchar(500) NOT NULL DEFAULT '',
  `html_keywords` varchar(100) NOT NULL DEFAULT '',
  `heading` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `page`
--

INSERT INTO `page` (`page_id`, `lang_id`, `uri`, `html_title`, `html_description`, `html_keywords`, `heading`, `content`, `active`) VALUES
(1, 1, '/', '', '', '', 'Начало', '<p>Начало</p>', 1),
(2, 1, '/about.html', 'За нас', '', '', 'За нас', '<p>За нас</p>', 1),
(3, 1, '/services.html', 'Услуги', '', '', 'Услуги', '<p>Услуги</p>', 1),
(4, 1, '/foto-galeriya', 'Фото галерия', '', '', 'Галерия', '<p>Галерия</p>', 1),
(5, 1, '/blog', 'Блог', '', '', 'Блог', '<p>Блог</p>', 1),
(6, 1, '/kontakti', 'Контакти', 'Контакти \"Контакти\"', '', 'Контакти', '<div class=\"row justify-content-center mb-4\">\r\n            <div class=\"col-md-7 heading-section ftco-animate text-center\">\r\n                <h2 class=\"mb-4\">Контакти с нашия <span>Салон</span></h2>\r\n                <p class=\"flip\"><span class=\"deg1\"></span><span class=\"deg2\"></span><span class=\"deg3\"></span></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row justify-content-center\">\r\n            <div class=\"col-md-8 text-center ftco-animate\">\r\n                <p>Контакти, Контакти, контакти, ....</p>\r\n            </div>\r\n        </div>', 1);

-- --------------------------------------------------------

--
-- Структура на таблица `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `price` float NOT NULL,
  `position` tinyint(2) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `service`
--

INSERT INTO `service` (`service_id`, `name`, `description`, `price`, `position`, `active`) VALUES
(1, 'Men\'s Haircut', 'A small river named Duden flows by their place and supplies', 20, 10, 1),
(2, 'Children Haircut', 'A small river named Duden flows by their place and supplies', 29, 20, 1),
(3, 'Beard Cut', 'A small river named Duden flows by their place and supplies', 20, 30, 1),
(4, 'Men\'s Haircut', 'A small river named Duden flows by their place and supplies', 20, 40, 1),
(5, 'Women\'s Haircut', 'A small river named Duden flows by their place and supplies', 49.91, 50, 1),
(6, 'Men\'s Haircut', 'A small river named Duden flows by their place and supplies', 20, 60, 1),
(7, 'Men\'s Haircut', 'A small river named Duden flows by their place and supplies', 20, 70, 1),
(8, 'Men\'s Haircut', 'A small river named Duden flows by their place and supplies', 20, 80, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `rights` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `rights`, `active`) VALUES
(1, 'me@tonymitsev.com', '111', 0, 0),
(2, 'me2@tonymitsev.com', '111', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
