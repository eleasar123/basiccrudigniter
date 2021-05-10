-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 11:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `noteId` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Body` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteId`, `Title`, `Body`, `Status`, `created_at`, `updated_at`) VALUES
(2, 'Things to do Tonight.', 'Hello World', 'Not Done', '2021-05-06 16:11:52', '2021-05-10'),
(3, 'Hello World', 'gfasfdgf', 'Done', '2021-05-07 15:54:47', '2021-05-10'),
(4, 'Do homework.', 'Code and rest. Later at night code and dinner.', 'Done', '2021-05-07 16:10:54', '2021-05-10'),
(5, 'Todo before sleep', 'Brush my teeth. Prepare the bed. Turn off the lights. Remove the top shirt. Pray and then sleep tight.', 'Not Done', '2021-05-07 16:12:50', '2021-05-10'),
(6, 'Todo tomorrow morning', 'Wake up early. Stretch my body. Pray. Eat my breakfast. Take a bath. Code and rest.', 'Not Done', '2021-05-07 16:14:21', '2021-05-10'),
(7, 'Todo tomorrow noon', 'Eat Lunch. Pray. Sleep. Code', 'Not Done', '2021-05-07 16:15:18', '2021-05-10'),
(8, 'Jurick court Marjorie', 'gfadfgfdhhhfd', 'Done', '2021-05-07 17:54:00', '2021-05-10'),
(12, 'Task today', 'Go to Comlab and code.', 'Not Done', '2021-05-10 16:20:23', '2021-05-10'),
(13, 'Todo Today', 'Get some fresh ideas', 'Not Done', '2021-05-10 10:28:03', '2021-05-10'),
(14, 'Todo Tonight', 'Wash my clothes.', 'Not Done', '2021-05-10 04:32:14', '2021-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `trashId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_deleted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`trashId`, `title`, `body`, `status`, `date_deleted`) VALUES
(2, 'malibang', '             hello World', 'Not Done', '2021-05-07 16:19:05'),
(3, 'Things to do today', 'Hello World. \r\nhello Philippines.', 'Not Done', '2021-05-07 16:19:05'),
(4, 'Hello World', 'Hi', 'Done', '2021-05-07 12:01:24'),
(5, 'Test', 'Testing', 'Done', '2021-05-07 10:04:25'),
(6, 'Another Test', 'Another test completed.', 'Done', '2021-05-07 06:05:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteId`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`trashId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trash`
--
ALTER TABLE `trash`
  MODIFY `trashId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
