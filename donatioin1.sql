-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 03:54 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donatioin1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bank_id` int(25) NOT NULL,
  `bank_name` varchar(50) COLLATE utf8_myanmar_ci NOT NULL,
  `bank_type` varchar(10) COLLATE utf8_myanmar_ci NOT NULL,
  `bank_phone_number` varchar(20) COLLATE utf8_myanmar_ci NOT NULL,
  `bank_location` varchar(255) COLLATE utf8_myanmar_ci DEFAULT NULL,
  `bank_lat` double NOT NULL,
  `bank_lng` double NOT NULL,
  `bank_requirement` text COLLATE utf8_myanmar_ci,
  `bank_phot` varchar(255) COLLATE utf8_myanmar_ci DEFAULT NULL,
  `bank_city` varchar(25) COLLATE utf8_myanmar_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bank_id`, `bank_name`, `bank_type`, `bank_phone_number`, `bank_location`, `bank_lat`, `bank_lng`, `bank_requirement`, `bank_phot`, `bank_city`) VALUES
(1, 'National blood bank', 'blood', '09-123456789', '9/8,unknow township, unknow yangon.', 0, 0, 'Please take one photo and NRC card.', 'imgaes/donateimg.jpg', 'yangon'),
(2, 'National blood Bank', 'blood', '09-123456789', '8/7, unknown township, unkown city', 0, 0, 'Please take one photo and NRC card.', 'imgaes/donateimg.jpg', 'manalay'),
(3, 'Eye Bank', 'eye', '09-123456789', '8/7, unknown township, unkown city', 0, 0, 'Please take one photo and NRC card.', 'imgaes/donateimg.jpg', 'yangon'),
(4, 'Eye Bank', 'eye', '09-123456789', '8/7, unknown township, unkown city', 0, 0, 'Please take one photo and NRC card.', 'imgaes/donateimg.jpg', 'manalay'),
(5, 'Body Part', 'body', '09-123456789', '8/7, unknown township, unkown city', 0, 0, 'Please take one photo and NRC card.', 'imgaes/donateimg.jpg', 'yangon'),
(6, 'Body Part', 'body', '09-123456789', '8/7, unknown township, unkown city', 0, 0, 'Please take one photo and NRC card.', 'imgaes/donateimg.jpg', 'manalay');

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `charity_id` int(10) NOT NULL,
  `charity_phone_no` varchar(20) COLLATE utf8_myanmar_ci NOT NULL,
  `charity_name` varchar(50) COLLATE utf8_myanmar_ci NOT NULL,
  `charity_discription` text COLLATE utf8_myanmar_ci,
  `charity_address` varchar(255) COLLATE utf8_myanmar_ci NOT NULL,
  `charity_lat` double NOT NULL,
  `charity_lng` double NOT NULL,
  `charity_facebook` varchar(100) COLLATE utf8_myanmar_ci DEFAULT NULL,
  `charity_photo` varchar(255) COLLATE utf8_myanmar_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`charity_id`, `charity_phone_no`, `charity_name`, `charity_discription`, `charity_address`, `charity_lat`, `charity_lng`, `charity_facebook`, `charity_photo`) VALUES
(1, '01-573704, 09-430292', 'Charity Oriented Myanmar ', ':(1)Education support program for informal education to orphans and needy children at basic education level.</br>\r\n(2)Relief and rehabilitation for diasater and victims program.</br>\r\n(3)Women and Children protection program.\r\n', 'No. 40, Aung Myay Yadanar Street,Thu Mingalar Residence,Thin Gan Gyun ', 0, 0, 'http://www.facebook.com/charityorientedmyanmar/', 'images/donateimg.jpg'),
(2, '01240900', 'Daw Khin Kyi Foundation ', 'It works for sustainable livelihoods,education,health and nutrition and emergency responce.', 'Apartment 3-2, 4th Floor, Block A, E Condominium Zay North Street (Off', 0, 0, 'https://www.adramyanmar.org/', 'images/donateimg1.jpg'),
(3, '095130418', 'Dr.Htein Free Clinics', 'Social and behaviour change communication for Non-communicable disease.</br>\r\n         Hepatitis B&C screenin</br>\r\n         Hepatitis B vaccination</br>\r\n         Active case findings and treatment of diabetes and hypertension </br>\r\n         Basic Health Care Services\r\n', 'No.300,Than Thu Mar Road,South Oakkalapa Township,Yangon.', 0, 0, 'http://www.drhtein.org/', 'images/donationimg2.jpg'),
(4, '09979753212', 'Wai Lu Kyaw Foundation ', 'Emergency Responce.', 'No (237),Kant Kaw Myaing (2) street ,(23) Quarter,VIP 1,Thuwunna.', 0, 0, 'http://www.facebook.com/wlkfoundation/', 'images/donateimg.jpg'),
(5, '012314628,012314630,', 'Asia World Foundation', 'Education,Emergency Relief,Health Care which has involved our teams making visits to rural villages ,as well as transporting patients to Yangon so they can receive treatment.', 'No.(39-40),Bogyoke Aung San Road,Bahosi Development,Wadan Street,Lanma', 0, 0, 'http://asiaworldfoundation.org/', 'images/donateimg1.jpg'),
(6, '09258121038,09504913', 'New Look New Life Charity Cleft Foundation ', 'The Charity for Disabled Children with untreated clefts.Treatments for difficulties to eat ,breath ,speak.', '1/33 ,Thamain Bayan Rd.,Near Shwe Baho Hospital ,Nat Chaung Ward,Tarmw', 0, 0, 'http://newlooknewlifemyanmar.org/', 'images/donateimg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`cat_id`, `category`) VALUES
(1, 'Yangon'),
(2, 'Mandalay');

-- --------------------------------------------------------

--
-- Table structure for table `location_subcategory`
--

CREATE TABLE `location_subcategory` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_subcategory`
--

INSERT INTO `location_subcategory` (`subcat_id`, `cat_id`, `subcategory`) VALUES
(1, 1, 'Ahlon'),
(2, 1, 'Bahan'),
(3, 1, 'Botataung'),
(4, 1, 'Dagon'),
(5, 1, 'Dagon Seikkan'),
(6, 1, 'Dala'),
(7, 1, 'Dawbon'),
(8, 1, 'East Dagon'),
(9, 1, 'Kyauktada'),
(10, 1, 'Kyimyindaing'),
(11, 1, 'Lanmadaw'),
(12, 1, 'Latha'),
(13, 1, 'Mingalar Taungnyunt'),
(14, 1, 'North Dagon'),
(15, 1, 'North Okkalapa'),
(16, 1, 'Pabedan'),
(17, 1, 'Pazundaung'),
(18, 1, 'Seikkan'),
(19, 1, 'South Dagon'),
(20, 1, 'South Okkalapa'),
(21, 1, 'Sanchaung'),
(22, 1, 'Seikkyi Kanaungto'),
(23, 1, 'Thingangyun'),
(24, 1, 'Tamwe'),
(25, 1, 'Thaketa'),
(26, 1, 'Yankin'),
(27, 2, 'Aungmyethazan'),
(28, 2, 'Chanayethazan'),
(29, 2, 'Chanmyathazi'),
(30, 2, 'Kyaukpadaung'),
(31, 2, 'Kyaukse'),
(32, 2, 'Maha Aungmye'),
(33, 2, 'Mahlaing'),
(34, 2, 'Meiktila'),
(35, 2, 'Mogok'),
(37, 2, 'Myingyan'),
(38, 2, 'Myittha'),
(39, 2, 'Natogyi'),
(40, 2, 'Ngazun'),
(41, 2, 'Nyaung-U'),
(42, 2, 'Patheingyi'),
(43, 2, 'Pyawbwe'),
(44, 2, 'Pyigyidagun'),
(45, 2, 'Pyinoolwin'),
(46, 2, 'Singu'),
(47, 2, 'Sintgaing'),
(48, 2, 'Tada-U'),
(49, 2, 'Taungtha'),
(50, 2, 'Thabeikkyin'),
(51, 2, 'Thazi'),
(52, 2, 'Wundwin'),
(53, 2, 'Yamethin');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(20) NOT NULL,
  `post_type` varchar(20) COLLATE utf8_myanmar_ci NOT NULL,
  `post_blood_type` varchar(15) COLLATE utf8_myanmar_ci NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(20) NOT NULL,
  `post_phone_number` varchar(30) COLLATE utf8_myanmar_ci NOT NULL,
  `post_emain` varchar(30) COLLATE utf8_myanmar_ci NOT NULL,
  `post_description` text COLLATE utf8_myanmar_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_type`, `post_blood_type`, `postdate`, `user_id`, `post_phone_number`, `post_emain`, `post_description`) VALUES
(1, 'blood', 'a', '2018-11-11 21:31:25', 2, '09-12587463', 'post1user2@gmail.com', 'This is area for bank description . \r\nText here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .'),
(2, 'All', 'ab', '2018-11-11 21:31:25', 4, '09-12587463', 'post2user4@gmail.com', 'This is area for bank description . \r\nText here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .'),
(3, 'blood', 'o', '2018-11-11 21:31:25', 3, '09-12587463', 'post3user3@gmail.com', 'This is area for bank description . \r\nText here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .'),
(4, 'All', 'b', '2018-11-11 21:31:25', 2, '09-12587463', 'post4user2@gmail.com', 'This is area for bank description . \r\nText here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .Text here .');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_myanmar_ci NOT NULL,
  `user_email` varchar(25) COLLATE utf8_myanmar_ci NOT NULL,
  `user_password` varchar(30) COLLATE utf8_myanmar_ci NOT NULL,
  `user_location_city` int(11) NOT NULL,
  `user_location_township` int(11) NOT NULL,
  `user_blood_type` varchar(10) COLLATE utf8_myanmar_ci NOT NULL,
  `user_dob` varchar(50) COLLATE utf8_myanmar_ci NOT NULL,
  `user_ph` varchar(100) COLLATE utf8_myanmar_ci NOT NULL,
  `user_weight` int(11) DEFAULT NULL,
  `user_photo` varchar(50) COLLATE utf8_myanmar_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_myanmar_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_location_city`, `user_location_township`, `user_blood_type`, `user_dob`, `user_ph`, `user_weight`, `user_photo`) VALUES
(2, 'user2', 'user2@gmail.com', 'user2@gmail.com', 2, 0, 'a', '0000-00-00', '', 110, 'images/p4.png'),
(3, 'user3', 'user3@gmail.com', 'user3@gmail.com', 3, 0, 'b', '0000-00-00', '', 100, 'images/p4.png'),
(4, 'user4', 'user4@gmail.com', 'user4@gmail.com', 4, 0, 'ab', '0000-00-00', '', 120, 'images/p2.png'),
(13, 'sss', 'susu@gmail.com', 'susu@gmail.com', 1, 16, 'AB', '0000-00-00', '09-123-753-15863', 110, 'images/p4.png'),
(15, 'sdfrsdgdf', 'dfasfdasusu@gmail.com', 'dfasfdasusu@gmail.com', 2, 29, 'A', '11/20/1997', '', 110, 'images/p4.png'),
(16, 'Mg Mg', 'mgmg@gmail.com', 'mgmg@gmail.com', 1, 5, 'O', '07/10/1990', '', 110, 'images/p4.png'),
(17, 'hlahal', 'hlahal@gmail.com', 'hlahal@gmail.com', 1, 20, 'O', '11/04/1997', '', 110, 'images/p4.png'),
(18, 'dodo', 'dodo@gmail.com', 'dodo@gmail.com', 2, 37, 'O', '11/12/2018', '', 110, 'images/p4.png'),
(21, 'adffdsgdf', 'adffdsgdf@gmail.com', 'adffdsgdf@gmail.com', 2, 37, 'O', '11/13/2018', '', 110, 'images/p4.png'),
(23, 'adffdsgdf', 'adffdsgdf@gmail.com', '$conn = null;', 1, 17, 'O', '11/13/2018', '', 110, 'images/p4.png'),
(24, 'ryrhtgghdsrt', 'ryrhtgghdsrt@gmail.com', 'ryrhtgghdsrt@gmail.com', 1, 12, 'O', '11/27/2018', '', 110, 'images/p4.png'),
(25, 'ryrhtgghdsrt', 'ryrhtgghdsrt@gmail.com', 'ryrhtgghdsrt@gmail.com', 1, 12, 'O', '11/27/2018', '', 110, 'images/p4.png'),
(26, 'latlat', 'latlat@gmail.com', 'latlat@gmail.com', 1, 13, 'AB', '11/04/1997', '', 0, 'images/p4.png'),
(28, 'sweswe', 'sweswe@gmail.com', 'sweswe@gmail.com', 1, 14, 'O', '11/15/1990', '', 0, 'images/p4.png'),
(30, 'yanyan', 'yanyan@gmail.com', 'yanyan@gmail.com', 2, 29, 'AB', '11/04/1997', '09-123-456-7894', 0, 'images/p4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`charity_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `location_subcategory`
--
ALTER TABLE `location_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bank_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `charity_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location_subcategory`
--
ALTER TABLE `location_subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
