-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 04:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_property`
--

CREATE TABLE `add_property` (
  `house_id` int(10) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ward_no` int(10) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `house_type` varchar(50) NOT NULL,
  `price` bigint(10) NOT NULL,
  `total_rooms` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `sqft` varchar(255) NOT NULL,
  `kitchen` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `owner_id` int(10) NOT NULL,
  `booked` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_property`
--

INSERT INTO `add_property` (`house_id`, `gmail`, `city`, `ward_no`, `contact_no`, `house_type`, `price`, `total_rooms`, `bedroom`, `sqft`, `kitchen`, `bathroom`, `description`, `owner_id`, `booked`) VALUES
(123, 'shafikahmed12345@gmail.com', 'Dhaka', 48, '01924787004', 'Family', 15000, 3, 2, '1200', 3, 3, 'Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', 8, 1),
(124, 'Nepal', 'Dhaka', 14, '9803480519', 'Full House Rent', 2000000, 15, 5, '2', 2, 7, 'This is a beautiful property located near Lakeside, Pokhara.', 1, 0),
(125, 'ashafik.lifespring@gmail.com', 'Dhaka', 50, '01924787004', 'bacholer', 12000, 5, 3, '2', 1, 1, 'Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service', 8, 1),
(126, 'sakib', 'kumilla', 48, '01924787004', 'student', 12000, 3, 1, '1200', 1, 2, 'this is nice house', 2, 1),
(137, 'niseqem@mailinator.com', 'Nostrud quibusdam do', 0, '+1 (987) 685-5401', 'Student', 529, 0, 0, 'Qui et optio illum', 0, 0, 'Ratione incidunt mo', 8, 1),
(147, 'sabujullapara@gmail.com', 'Molestiae neque dolo', 0, '+1 (563) 955-4438', 'Family', 339, 0, 0, 'Fugiat illo nulla m', 0, 0, 'Necessitatibus id n', 8, 0),
(148, 'sabujullapara@gmail.com', 'Molestiae neque dolo', 0, '+1 (563) 955-4438', 'Family', 339, 0, 0, 'Fugiat illo nulla m', 0, 0, 'Necessitatibus id n', 8, 0),
(149, 'sabujullapara@gmail.com', 'dhaka', 0, '+1 (563) 955-4438', 'Family', 339, 0, 0, 'Fugiat illo nulla m', 0, 0, 'Necessitatibus id n', 8, 0),
(150, 'ceduvux@mailinator.com', 'Aut est enim ullamco', 0, '+1 (882) 949-8939', 'Bacholor', 993, 0, 0, 'Asperiores labore fa', 0, 0, 'Similique soluta ips', 8, 0),
(151, 'hydehidy@mailinator.com', 'Dolor dolorem nobis', 0, '+1 (497) 988-2046', 'Student', 465, 0, 0, 'Vel ea sunt ullam po', 0, 0, 'Aut quod ipsum sed e', 8, 0),
(152, 'dahatidyl@mailinator.com', 'Quisquam reprehender', 0, '+1 (836) 341-2888', 'Family', 132, 0, 0, 'Eius autem molestias', 0, 0, 'Unde voluptate quas', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'shafik@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `house_id` int(11) NOT NULL,
  `cod` tinyint(4) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `tenant_id`, `house_id`, `cod`, `created`) VALUES
(5, 28, 123, 1, '2022-05-18 06:12:55'),
(6, 28, 125, 1, '2022-05-18 07:14:20'),
(7, 28, 125, 1, '2022-05-18 07:15:27'),
(8, 28, 126, 1, '2022-05-19 02:24:57'),
(9, 28, 137, 1, '2022-05-19 02:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_type` varchar(100) NOT NULL,
  `id_photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_type`, `id_photo`) VALUES
(1, 'Nikesh Tiwari', 'nikeshtiwari3230@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 987654321, 'Kirtipur-3', 'Citizenship', 'owner-photo/nikesh.png'),
(2, 'shafik', 'shafikahmed1212@gmail.com', 'b2a1cff3aa201d093c7ef9d17c366d98', 1924787004, 'House #1/6 , street # Talioffice road', 'Citizenship', 'owner-photo/ss_00000.jpg'),
(3, 'nisy', 'nisy@gmail.com', '8977ecbb8cb82d77fb091c7a7f186163', 192478705, 'adad', 'Citizenship', 'owner-photo/PicsArt_12-25-04.12.31.png'),
(4, 'Shafik Ahmed', 'sahfikahmed12345@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1924787004, 'House #1/6 , street # Talioffice road', 'Citizenship', 'owner-photo/army-sgt-joe-patterson-is-way-ahead-of-his-time-hes-looking-for-an-picture-i.jpg'),
(5, 'Shafik Ahmed', 'abc@gmail.com', '3691308f2a4c2f6983f2880d32e29c84', 1924787004, 'House #1/6 , street # Talioffice road', 'Citizenship', 'owner-photo/1.jpg'),
(6, 'jamiul', 'jami@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1924787004, 'House #1/6 , street # Talioffice road', 'Owner', 'owner-photo/web-national-id-edited-26-11-2017-1532158137905.jpg'),
(7, 'Steven Grant', 'stv@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1924787004, 'House #1/6 , street # Talioffice road', 'Developer', 'owner-photo/web-national-id-edited-26-11-2017-1532158137905.jpg'),
(8, 'Mia Langley', 'ruzorafab@mailinator.com', '25d55ad283aa400af464c76d713c07ad', 1, 'Repudiandae eligendi', 'Developer', 'owner-photo/image.png');

-- --------------------------------------------------------

--
-- Table structure for table `property_photo`
--

CREATE TABLE `property_photo` (
  `property_photo_id` int(12) NOT NULL,
  `p_photo` varchar(500) NOT NULL,
  `house_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_photo`
--

INSERT INTO `property_photo` (`property_photo_id`, `p_photo`, `house_id`) VALUES
(126, 'product-photo/hjghbkhjbk.jpg', 126),
(174, 'product-photo/a.jpg', 123),
(175, 'product-photo/b.jpg', 123),
(176, 'product-photo/b.jpg', 124),
(177, 'product-photo/a.jpg', 124),
(178, 'product-photo/c.jpg', 125),
(179, 'product-photo/hvjhvbjh.jpg', 125),
(180, '', 149),
(181, '', 150),
(182, '', 151),
(183, '', 152);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` int(5) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `comment`, `rating`, `property_id`) VALUES
(5, 'This property is very nice.', 5, 123),
(6, 'I love this property.', 4, 124),
(7, 'very nice\r\n', 0, 124);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_type` varchar(100) NOT NULL,
  `id_photo` varchar(1000) NOT NULL,
  `pp` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_type`, `id_photo`, `pp`) VALUES
(17, 'Nikesh Tiwari', 'nikeshtiwari3230@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 987654321, 'Kirtipur-3', 'Citizenship', 'tenant-photo/nikesh.png', ''),
(18, 'shafik', 'shafikahmed1212@gmail.com', '202cb962ac59075b964b07152d234b70', 1924787004, '295/j/3/b', 'Citizenship', 'tenant-photo/ss_00012.jpg', ''),
(19, 'Reshma', 'shafikahmed1212@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1924780200, 'sas', 'Citizenship', 'tenant-photo/IMG_7173.JPG', ''),
(20, 'Shafik Hamid', 'sahfikahmed12345@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1924787004, 'House #1/6 , street # Talioffice road', 'Citizenship', 'tenant-photo/image00035_00007.jpg', ''),
(21, 'Shafik Ahmed', 'ashafik.lifesprong@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1924787008, 'House #1/6 , street # Talioffice road', 'Driving Licence', 'tenant-photo/z_00005.jpg', ''),
(25, 'SHAFIK', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 1924787004, 'House #1/6 , street # Talioffice road', 'Citizenship', 'tenant-photo/2019_00000.jpg', 'tenant-photo/20200304193419_IMG_0005.jpg'),
(26, 'Saydha Chowdhury', 'tonu@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 192479444, 'House #1/6 , street # Talioffice road', 'Citizenship', 'tenant-photo/IMG_1925.JPG', 'tenant-photo/IMG_7144.JPG'),
(27, 'Mark Specter', 'mark@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 1924787005, 'House #1/6 , street # Talioffice road', 'Family', 'tenant-photo/web-national-id-edited-26-11-2017-1532158137905.jpg', 'tenant-photo/DSC01074.JPG'),
(28, 'Emily Boone', 'tenant@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1924787005, 'Soluta proident aut', 'Family', 'tenant-photo/image.png', 'tenant-photo/image.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_property`
--
ALTER TABLE `add_property`
  ADD PRIMARY KEY (`house_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD PRIMARY KEY (`property_photo_id`),
  ADD KEY `property_id` (`house_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_property`
--
ALTER TABLE `add_property`
  MODIFY `house_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property_photo`
--
ALTER TABLE `property_photo`
  MODIFY `property_photo_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_property`
--
ALTER TABLE `add_property`
  ADD CONSTRAINT `add_property_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);

--
-- Constraints for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD CONSTRAINT `property_photo_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `add_property` (`house_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `add_property` (`house_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
