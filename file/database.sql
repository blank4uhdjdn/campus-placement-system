-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 04:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

--
-- Dumping data for table `info`
--


--
-- Database: `job_portal`
--

--
-- Database: `phpmyadmin`
--


-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--


-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--


-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--


-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--



-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--


--
-- Dumping data for table `pma__userconfig`
--


-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--


-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--

--
-- Database: `register`
--
CREATE DATABASE IF NOT EXISTS `register` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `register`;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(22) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `cnum` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `pass` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `lname`, `gender`, `cnum`, `address`, `email`, `pass`) VALUES
(1, 'Ishrat', 'Ansari', 'male', '9898989898', 'VERMA BUILDING SHAHANA', 'i@gmailcom', '123456'),
(2, 'sumender', 'singh', 'male', '9898989898', 'VERMA BUILDING SHAHANA', 'summu@gmail.com', '111111'),
(3, 'sajid', 'ansari', 'male', '9898989898', 'VERMA BUILDING SHAHANA', 'muski@gmail.com', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `registerasteacher`
--
CREATE DATABASE IF NOT EXISTS `registerasteacher` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `registerasteacher`;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(22) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `cnum` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `pass` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `lname`, `gender`, `cnum`, `address`, `email`, `pass`) VALUES
(1, 'sajid', 'Ansari', 'male', '9898989898', 'VERMA BUILDING SHAHANA', 'r@gmail.com', '123456'),
(2, 'akku', 'sharma', 'male', '9898989898', 'aaa', 'a@gmail.com', '123456'),
(3, 'akku', 'sharma', 'male', '9898989898', 'aaa', 'a@gmail.com', '123456'),
(4, 'a', 'b', 'c', 'd', 'e', 'e@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `resume`
--
CREATE DATABASE IF NOT EXISTS `resume` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `resume`;

-- --------------------------------------------------------

--
-- Table structure for table `s_detail`
--

CREATE TABLE `s_detail` (
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `cgpa` varchar(22) NOT NULL,
  `semester` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_detail`
--

INSERT INTO `s_detail` (`fname`, `lname`, `cgpa`, `semester`, `gender`, `email`, `phone`, `address`) VALUES
('Ishrat', 'Ansari', '123456', '123456', 'male', 'i@gmailcom', '9876543210', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('rajesh', 'singh', '123456', '1234', 'male', 'i@gmailcom', '06230954265', 'VERMA BUILDING SHAHANA'),
('sajid', 'Ansari', '10', '5', 'male', 'husantarabegam4556@gma', '7985749888', 'mars'),
('akanksha', 'sharma', '3', '5', 'female', 'akku@gmail.com', '837983598', 'sun'),
('sajid', 'Ansari', '10', '5', 'male', 'husantarabegam4556@gma', '87786786876', 'VERMA BUILDING SHAHANA'),
('rajesh', 'gill', '33', '5', 'male', 'akku@gmail.com', '06230954265', 'himalaya'),
('rajesh', 'gill', '33', '5', 'male', 'akku@gmail.com', '06230954265', 'himalaya'),
('sunakshi', 'thakur', '9', '5', 'female', 's@gmail.com', '4758345779843', 'sujanpur');
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `upload`
--
CREATE DATABASE IF NOT EXISTS `upload` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `upload`;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `image_source` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
