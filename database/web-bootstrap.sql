-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 11:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-bootstrap`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(15) NOT NULL,
  `user` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user`, `title`, `header`, `body`) VALUES
(1, 0, 'HomePage', 'Welcome To Home Page', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis corporis eaque modi esse. At maiores ab suscipit voluptas perspiciatis a quo reprehenderit, eius iusto, inventore! Odit maiores voluptate totam magni.'),
(2, 0, 'About', 'About Webpage', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ullam sit expedita quis nihil, voluptate enim perferendis mollitia quasi laudantium obcaecati aliquam consequatur veniam facere, adipisci voluptatibus, reprehenderit dolores. Deleniti.'),
(3, 0, 'Contact', 'Contact Header', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis cumque repellendus hic iusto voluptas eligendi ut quia esse deleniti doloribus ipsa dicta neque omnis eaque, reiciendis vel numquam iste. In?'),
(17, 0, 'aa', 'aa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis corporis eaque modi esse. At maiores ab suscipit voluptas perspiciatis a quo reprehenderit, eius iusto, inventore! Odit maiores voluptate totam magni.'),
(18, 0, 'bb', 'bb', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis corporis eaque modi esse. At maiores ab suscipit voluptas perspiciatis a quo reprehenderit, eius iusto, inventore! Odit maiores voluptate totam magni.'),
(19, 0, '', 'Welcome To Home Page', 'value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis corporis eaque modi esse. At maiores ab suscipit voluptas perspiciatis a quo reprehenderit, eius iusto, inventore! Odit maiores voluptate totam magni."'),
(20, 0, '', 'aa', 'value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis corporis eaque modi esse. At maiores ab suscipit voluptas perspiciatis a quo reprehenderit, eius iusto, inventore! Odit maiores voluptate totam magni."'),
(21, 0, '<br /><b>Notice</b>:  Undefined variable: open in <b>D:wwwweb-bootstrapfirst.php</b> on line <b>87</b><br />', '<br /><b>Notice</b>:  Undefined variable: open in <b>D:wwwweb-bootstrapfirst.php</b> on line <b>91</b><br />', 'value="<br />\r\n<b>Notice</b>:  Undefined variable: open in <b>D:wwwweb-bootstrapfirst.php</b> on line <b>95</b><br />\r\n"'),
(22, 0, '', '', ''),
(23, 0, '', '', 'value=""'),
(24, 0, '', '', ''),
(25, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(15) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'admin@info.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
