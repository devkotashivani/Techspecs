-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2016 at 07:09 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techspecs`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `scope` text NOT NULL,
  `filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `type`, `price`, `description`, `scope`, `filename`) VALUES
(0, 'SMART Mobile Stand (Pink)', 'Mobile Stand', 149, 'Thumbs-up design hands allows devices to Portrait and landscape\r\nHands free viewing on Videos at Cars, restaurant and Dining table\r\nDurable, longer lasting and good toughness', 'Any mobile phones, tablets', 'smart_mobile_stand.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE IF NOT EXISTS `forum_answer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(49130, 1, 'asdf', 'asdf@gmail.com', 'asdf', '1455498855'),
(49130, 2, 'xyz', 'xyz@gmail.com', 'xyz', '1455498877'),
(49129, 1, 'spd', 'spd@gmail.com', 'spd@gmail.com', '1455498937'),
(49129, 2, 'asd', 'asdf@gmail.com', 'asdf', '1455498962'),
(49131, 1, 'Rijesh', 'c@gmail.com', 'asdfasdf', '1455511966'),
(49131, 2, 'swornim', 'jkasldjaskjd@gmail.com', 'asdaksdjalksdj', '1455511992');

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE IF NOT EXISTS `forum_question` (
`id` int(4) NOT NULL,
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `datetime` varchar(100) NOT NULL,
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49132 ;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(49121, 'a', 'a', 'a', 'a@gmail.com', '1455498297', 0, 0),
(49122, 'b', 'b', 'b', 'b@gmail.com', '1455498311', 0, 0),
(49123, 'c', 'c', 'c', 'c@gmail.com', '1455498319', 0, 0),
(49124, 'd', 'd', 'd', 'd@gmail.com', '1455498327', 0, 0),
(49125, 'e', 'e', 'e', 'e@gmail.com', '1455498335', 0, 0),
(49126, 'f', 'f', 'f', 'f@gmail.com', '1455498348', 0, 0),
(49127, 'g', 'g', 'g', 'g@gmail.com', '1455498359', 0, 0),
(49128, 'test1', 'test1', 'test1', 'tes1@gmail', '1455498382', 0, 0),
(49129, 'test2', 'test2', 'test2', 'test2@gmail.com', '1455498406', 2, 2),
(49130, 'test3`', 'test3', 'test3', 'test3@gmail.com', '1455498577', 4, 2),
(49131, 'asdf', 'ASDFASDF', 'utsav', 'tsav@gmail.com', '1455511928', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE IF NOT EXISTS `mobiles` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `launch` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `network` text NOT NULL,
  `body` text NOT NULL,
  `display` text NOT NULL,
  `platform` text NOT NULL,
  `sensor` text NOT NULL,
  `camera` text NOT NULL,
  `sound` text NOT NULL,
  `battery` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `name`, `brand`, `launch`, `price`, `network`, `body`, `display`, `platform`, `sensor`, `camera`, `sound`, `battery`, `filename`) VALUES
(5, 'Apple iPhone 6s Plus', 'Apple', '2015, September', 60000, 'GSM| CDMA| HSPA| EVDO | LTE', '158.2 x 77.9 x 7.3 mm (6.23 x 3.07 x 0.29 in), 192 g (6.77 oz)', 'LED-backlit IPS LCD, capacitive touchscreen, 16M colors Size, 5.5 inches, 1080 x 1920 pixels', 'iOS 9, upgradable to iOS 9.2, Chipset: Apple A9, CPU: Dual-core 1.84 GHz Twister, GPU: PowerVR GT7600 (six-core graphics)', 'Fingerprint, accelerometer, gyro, proximity, compass, barometer', 'Primary: 12 MP, f/2.2, 29mm, phase detection autofocus, dual-LED (dual tone) flash, check quality, Secondary: 5 MP, f/2.2, 31mm, 1080p@30fps, 720p@240fps, face detection, H', 'Vibration, proprietary ringtones, loudspeaker, 3.5mm Jack', 'Non-removable Li-Po 2750 mAh battery (10.45 Wh), Stand-by: Up to 384 h (3G), Talk time: Up to 24 h (3G)', 'iphone_6splus.jpg'),
(6, 'Xiaomi Redmi Note 3', 'Xiaomi1', '2016, January', 20000, 'GSM/HSPA/LTE', '150 x 76 x 8.7 mm (5.91 x 2.99 x 0.34 in), 164 g (5.78 oz)', 'IPS LCD capacitive touchscreen, 16M colors, 5.5 inches , 1080 x 1920 pixels', 'Android OS, v5.0.2 (Lollipop), Chipset: Qualcomm MSM8956 Snapdragon 650, CPU: Quad-core 1.2 GHz Cortex-A53 & Dual-core 1.8 GHz Cortex-A72, GPU: Adreno 510', 'Fingerprint, accelerometer, gyro, proximity, compass', 'Primary:16 MP, f/2.0, phase detection autofocus, dual-LED (dual tone), Secondary: 5 MP, f/2.0, 1080p', 'Vibration; MP3, WAV ringtones, loud speakers, 3.5mm jack', 'Non-removable Li-Po 4000 mAh battery', 'xiaomi_redmi_note.jpg'),
(7, 'Huawei G7 Plus', 'Huawei', '', 25000, 'GSM/HSPA/LTE', '152.5 x 76.5 x 7.5 mm (6.00 x 3.01 x 0.30 in)', 'IPS LCD capacitive touchscreen, 16M colors', 'Android OS, v5.1 (Lollipop), planned upgrade to v6.0 (Marshma)', 'Accelerometer, proximity', '13 MP, f/2.0, OIS, autofocus, dual-LED (dual tone) flash', 'Vibration; MP3, WAV ringtones', 'Stand-by	 Talk time', 'huawei-g7-plus.jpg'),
(8, 'HTC Butterfly 3', 'HTC', '2016, January', 30000, 'GSM / HSPA / LTE', '151 x 73 x 10 mm (5.94 x 2.87 x 0.39 in)', 'Capacitive touchscreen, 16M colors', 'Android OS, v5.0 (Lollipop), planned upgrade to v6.0 (Marshmallow)', 'Fingerprint, accelerometer, gyro, proximity, compass', '20.2 MP Duo, f/2.2, 28mm, autofocus, dual-LED (dual tone) flash', 'Vibration; MP3, WAV ringtones', 'Non-removable Li-Ion 2700 mAh battery', 'htc-butterfly-3.jpg'),
(9, 'BlackBerry Priv', 'BlackBerry', '2016, Jan 1', 60000, 'GSM / HSPA / LTE', '147 x 77.2 x 9.4 mm (5.79 x 3.04 x 0.37 in)', 'AMOLED capacitive touchscreen, 16M colors', 'Android OS, v5.1.1 (Lollipop)', 'Accelerometer', '18 MP, f/2.2, 27mm, Schneider-Kreuznach optics, OIS', 'Vibration; MP3, WAV ringtones', 'Non-removable Li-Ion 3410 mAh battery', 'blackberry-priv.jpg'),
(10, 'LG K10', 'LG', '2015, September', 45000, 'GSM / HSPA / LTE', '146 x 74.8 x 8.8 mm (5.75 x 2.94 x 0.35 in)', 'IPS LCD capacitive touchscreen, 16M colors', 'Android OS, v5.1 (Lollipop)', 'Accelerometer, proximity', '13 MP, autofocus, LED flash (LTE model)', 'Vibration; MP3, WAV ringtones', 'Removable Li-Ion 2300 mAh battery', 'lg-k10-.jpg'),
(11, 'Lava X10', 'Lava', '2015, November', 30000, 'GSM / HSPA / LTE', '142 x 70.8 x 7.9 mm (5.59 x 2.79 x 0.31 in)', 'IPS LCD capacitive touchscreen', 'Android OS, v5.1 (Lollipop), planned upgrade to v6.0 (Marshmallow)', 'Fingerprint, accelerometer, gyro, proximity, compass', '13 MP, autofocus, dual-LED flash', 'Vibration; MP3, WAV ringtones', 'Removable Li-Po 2900 mAh battery', 'lava-x10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `header` varchar(50) DEFAULT NULL,
  `body` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `header`, `body`) VALUES
(1, 'Home Page', '', 'TechSpecs is one of the popular sources for mobile consumers and technology enthusiasts from across the globe. The publication strives to deliver all the latest news and updates from the world of mobile phones. Apart from reporting the daily dose of headlines, we also house one of the biggest and detailed phones and tablets database on the World Wide Web.\r\n\r\nA historical background of TechSpecs would mean we would have to go all the way back to March 2005. Ever since then we have been a one-stop site for all things mobile. We were honored with the influential gadget blog in the world award and were cited as the most popular telecom site in India in the year 2009.\r\n\r\nWe at TechSpecs also run a small project, dubbed FA Tech that is driven by the passion of our authors for gadgets and technology. FA Tech is a platform where we express our love towards the various developing fields in the world of consumer technology.\r\n\r\nWe try to bring all the latest coverage from diverse fields such as computers, camera, robotics and other space, which involves electronics, computers and mechanics. If you have liked what our team does in the mobile sector, then we are pretty sure that you would love what we cover in the field of technology.\r\n\r\nTechSpecs is all about sharing knowledge and our website can be a place for you to share your expertise with your fellow audiences from around the world.'),
(2, 'AboutUs Page', 'TechSpecs Pvt.Ltd', '<table border="0">\r\n            <tr>\r\n                <th colspan="2">TechSpecs Pvt.Ltd</th>\r\n            </tr>\r\n            <tr>\r\n                <td>Address </td>\r\n                <td>:  Shankhamul, New Baneshwor, Kathmandu, Nepal</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Phone No. </td>\r\n                <td>:  +9979849554764</td>\r\n            </tr>\r\n            <tr>\r\n                <td>Email Address </td>\r\n                <td>:  techspecs@gmail.com</td>\r\n            </tr>\r\n        </table>');

-- --------------------------------------------------------

--
-- Table structure for table `tablets`
--

CREATE TABLE IF NOT EXISTS `tablets` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `launch` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `network` text NOT NULL,
  `body` text NOT NULL,
  `display` text NOT NULL,
  `platform` text NOT NULL,
  `sensor` text NOT NULL,
  `camera` text NOT NULL,
  `sound` text NOT NULL,
  `battery` text NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tablets`
--

INSERT INTO `tablets` (`id`, `name`, `brand`, `launch`, `price`, `network`, `body`, `display`, `platform`, `sensor`, `camera`, `sound`, `battery`, `filename`) VALUES
(2, 'Lenovo Tab 2 A7-30', 'Lenovo1', '2015, January', 10000, 'GSM| HSPA', '191 x 105 x 8.9 mm (7.52 x 4.13 x 0.35 in), 269 g (9.49 oz)', 'IPS LCD capacitive touchscreen, 16M colors, 7.0 inches, 600 x 1024 pixels, Multitouch up to 5 fingers', 'Android OS, v4.4.2 (KitKat), planned upgrade to v5.0 (Lollipop), Chipset: Mediatek MT8382M, CPU: Quad-core 1.3 GHz Cortex-A7, GPU: Mali-400MP2', 'Accelerometer', 'Primary: 5 MP, f/2.2, auto-focus, LED flash, Secondary: 2 MP, f/2.2', 'Vibration; MP3, WAV ringtones, loud speakers, 3.5mm jack', 'Non-removable Li-Ion 3450 mAh battery', 'lenovo-tab2-a7-30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `authority` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `authority`) VALUES
(1, 'Rijesh', 'craaabby@gmail.com', '204873c3431853efe0646de5b90e0929', 'admin'),
(4, 'Minrows', 'minrows95@gmail.com', '1e59132c5c434e25e01a39e0e1bbe9f3', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `usersmail`
--

CREATE TABLE IF NOT EXISTS `usersmail` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` longtext NOT NULL,
  `date_time` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `usersmail`
--

INSERT INTO `usersmail` (`id`, `name`, `email`, `subject`, `msg`, `date_time`) VALUES
(11, 'b', 'b@gmail.com', 'b', 'b', '0000-00-00 00:00:00'),
(13, 'd', 'd@gmail.com', 'd', 'd', '1455379287'),
(14, 'e', 'e@gmail.com', 'e', 'e', '1455379493'),
(15, 'f', 'f@gmail.com', 'f', 'f', '1455379848');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_answer`
--
ALTER TABLE `forum_answer`
 ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `forum_question`
--
ALTER TABLE `forum_question`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablets`
--
ALTER TABLE `tablets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersmail`
--
ALTER TABLE `usersmail`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_question`
--
ALTER TABLE `forum_question`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49132;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tablets`
--
ALTER TABLE `tablets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usersmail`
--
ALTER TABLE `usersmail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
