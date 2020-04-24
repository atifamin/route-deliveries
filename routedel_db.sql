-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2017 at 04:03 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `routedel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_of_services`
--

CREATE TABLE IF NOT EXISTS `area_of_services` (
  `id` int(11) NOT NULL,
  `Pickup_Locations` text NOT NULL,
  `Droppoff_Locations` text NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_of_services`
--

INSERT INTO `area_of_services` (`id`, `Pickup_Locations`, `Droppoff_Locations`, `Status`) VALUES
(1, ' {lat:34.08906131584994, lng: -118.5369873046875},{lat:33.84532650276791, lng: -118.37081909179688},{lat:33.97866994069442, lng: -118.0316162109375},{lat:34.2004447595411, lng: -118.1524658203125},{lat:34.092473191457664, lng: -118.53286743164062},', ' {lat:34.09361045276872, lng: -118.58779907226562},{lat:34.05322832125499, lng: -118.5205078125},{lat:33.88922749934704, lng: -118.38180541992188},{lat:33.99745799229644, lng: -118.07144165039062},{lat:34.138520050378574, lng: -118.07144165039062},{lat:34.225996753139725, lng: -118.20053100585938},{lat:34.225996753139725, lng: -118.32550048828125},{lat:34.05436610955981, lng: -118.51089477539062},', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customer_service_inquiries`
--

CREATE TABLE IF NOT EXISTS `customer_service_inquiries` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `order_number` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_service_inquiries`
--

INSERT INTO `customer_service_inquiries` (`id`, `date`, `first_name`, `last_name`, `email`, `phone`, `order_number`, `message`) VALUES
(1, '2017-04-26', 'kevin ', 'suarez', 'ksuar11@gmail.com', '3234884569', '123456', 'testing'),
(2, '2017-04-26', 'testing', 'testin', 'test@gmail.com', '0321515151', '2554', 'Test Message'),
(3, '2017-04-29', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `order_distance` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL,
  `assigned_router` int(11) NOT NULL,
  `order_payment` decimal(10,2) NOT NULL,
  `pickup_lat` varchar(100) NOT NULL,
  `pickup_lon` varchar(100) NOT NULL,
  `pickup_place` varchar(200) NOT NULL,
  `pickup_address` varchar(200) NOT NULL,
  `pickup_items` varchar(200) NOT NULL,
  `pickup_instructions` varchar(200) NOT NULL,
  `dropoff_lat` varchar(200) NOT NULL,
  `dropoff_lon` varchar(200) NOT NULL,
  `dropoff_place` varchar(200) NOT NULL,
  `dropoff_address` varchar(200) NOT NULL,
  `dropoff_items` varchar(200) NOT NULL,
  `dropoff_instructions` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `paypal_response` text,
  `payment_method` varchar(200) DEFAULT NULL,
  `order_feedback` text,
  `order_rating` int(11) DEFAULT NULL,
  `router_rating` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_type`, `order_distance`, `date`, `assigned_router`, `order_payment`, `pickup_lat`, `pickup_lon`, `pickup_place`, `pickup_address`, `pickup_items`, `pickup_instructions`, `dropoff_lat`, `dropoff_lon`, `dropoff_place`, `dropoff_address`, `dropoff_items`, `dropoff_instructions`, `status`, `paypal_response`, `payment_method`, `order_feedback`, `order_rating`, `router_rating`) VALUES
(1, 17, 3, '0.79', '2017-04-21 04:12:46', 32, '6.99', '34.0691774', '-118.45611959999997', 'test', '11140 Montana Ave, Los Angeles, CA 90049, USA', 'test', 'test', '34.0579466', '-118.4535305', 'test', 'Los Angeles, CA 90024, USA', '0', 'test', 'Recieved', '{"payer_email":"aqeelahmad@visionplus.com.pk","payer_id":"RVUZ9MZ92S6C8","payer_status":"UNVERIFIED","first_name":"Aqeel","last_name":"Personal","address_name":"Aqeel Ahmad","address_street":"House # 140, Block 6, Sector A2 Township","address_city":"Lahore","address_state":"Punjab","address_country_code":"AU","address_zip":"2002","residence_country":"AU","txn_id":"9W2339591L882820F","mc_currency":"USD","mc_fee":"0.50","mc_gross":"6.99","protection_eligibility":"ELIGIBLE","payment_fee":"0.50","payment_gross":"6.99","payment_status":"Completed","payment_type":"instant","handling_amount":"0.00","shipping":"0.00","item_name1":"Carport","quantity1":"1","mc_gross_1":"6.99","mc_shipping1":"0.00","num_cart_items":"1","txn_type":"cart","payment_date":"2017-04-21T09:13:34Z","business":"cometnice2-facilitator@gmail.com","receiver_id":"TLP3UQGFYB3TG","notify_version":"UNVERSIONED","custom":"1","verify_sign":"AFcWxV21C7fd0v3bYYYRCpSSRl31ATfS4lr7WIQ44dgvApb9tsG76-.Q"}', 'Paypal', 'Test Feedback', 3, 4),
(18, 17, 3, '1.23', '2017-04-28 15:16:06', 0, '6.99', '34.0539904', '-118.42336449999999', 'Mom''s House', 'Los Angeles, CA 90025, USA', 'food', 'knock', '34.05944859999999', '-118.4029066', 'Home', 'Beverly Hills, CA 90212, USA', '0', 'knock', 'Pending', NULL, 'Paypal', NULL, NULL, NULL),
(19, 17, 3, '8.57', '2017-04-28 15:24:47', 0, '19.52', '34.0911521', '-118.36312859999998', 'test', 'West Hollywood, CA, USA', 'test', 'test', '34.0196635', '-118.48552719999998', 'test', '1101 Colorado Ave, Santa Monica, CA 90401, USA', '0', 'test', 'Pending', NULL, 'Paypal', NULL, NULL, NULL),
(20, 13, 1, '0.56', '2017-05-02 03:39:21', 0, '6.99', '34.0637168', '-118.45019969999998', 'abc', 'Los Leones Apartments, 737 Levering Ave, Los Angeles, CA 90024, USA', 'abc\n', 'aabc\n', '34.0631158', '-118.44040139999998', 'abc', '922 Hilgard Ave, Los Angeles, CA 90024, USA', '0', 'aabc\n', 'Pending', NULL, 'Paypal', NULL, NULL, NULL),
(21, 13, 1, '0.56', '2017-05-02 03:41:31', 0, '6.99', '34.0637168', '-118.45019969999998', 'abc', 'Los Leones Apartments, 737 Levering Ave, Los Angeles, CA 90024, USA', 'abc\n', 'aabc\n', '34.0631158', '-118.44040139999998', 'abc', '922 Hilgard Ave, Los Angeles, CA 90024, USA', '0', 'aabc\n', 'Pending', NULL, 'Paypal', NULL, NULL, NULL),
(22, 13, 1, '0.56', '2017-05-02 03:42:00', 0, '6.99', '34.0637168', '-118.45019969999998', 'abc', 'Los Leones Apartments, 737 Levering Ave, Los Angeles, CA 90024, USA', 'abc\n', 'aabc\n', '34.0631158', '-118.44040139999998', 'abc', '922 Hilgard Ave, Los Angeles, CA 90024, USA', '0', 'aabc\n', 'Pending', NULL, 'Paypal', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `owner_partnership_inquiries`
--

CREATE TABLE IF NOT EXISTS `owner_partnership_inquiries` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `business_address` varchar(100) NOT NULL,
  `no_of_deliveries` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_partnership_inquiries`
--

INSERT INTO `owner_partnership_inquiries` (`id`, `date`, `first_name`, `last_name`, `email`, `phone`, `business_name`, `business_address`, `no_of_deliveries`, `zip_code`) VALUES
(1, '2017-04-26', 'john', 'ken', 'routedeliveryservices@gmail.com', '3232323232', 'bobatime', '1234 olympic', '20', '90213'),
(2, '2017-04-29', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '2017-04-29', 'Test', 'Test', 'ksuar11@gmail.com', '0000000000000', 'Test', '1233)37', '24', '90210');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL DEFAULT 'Active',
  `Image` varchar(200) NOT NULL,
  `Vehicle` varchar(200) NOT NULL,
  `Plates` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `First_Name`, `Last_Name`, `Email`, `Password`, `Phone`, `City`, `Resume`, `Status`, `Image`, `Vehicle`, `Plates`) VALUES
(13, 1, 'Admin', 'Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '03224947729', 'Lahore', '', 'Active', '', '', ''),
(17, 3, 'Client', 'Client', 'client@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '03224947724', 'Lahore', '', 'Active', '', '', ''),
(32, 2, 'Router', 'Router', 'router@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1111222223', 'United States', 'Guidelines2.docx', 'Active', '13501936_10206366159853154_8489884739413442874_n6.jpg', 'CVH-5864', 'vb236bh548'),
(33, 3, 'Victoria ', 'Castillo', 'victoria.castillo@pepperdine.edu', '7c289700a61a705aff857bdbb31b319e', '2103049272', 'Beverly Hills ', '', 'Active', '', '', ''),
(35, 3, 'mdkfnk', 'jnfojdknfjo', 'billajohn85@gmail.com', 'a99aeac73e9a556d49c7283f4efffdfb', '5628343345', 'LA', '', 'Active', '', '', ''),
(36, 3, '58fc082c621da', '58fc082c62221', 'cooptroops@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(37, 3, '58fc1458cc546', '58fc1458cc590', 'cyndl412@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(38, 3, '58fc252dbf43a', '58fc252dbf4a1', 'keithdanielsmith616@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(39, 3, '58fc34c3006da', '58fc34c300734', 'sadiebrandi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(40, 3, '58fc3a710f0b0', '58fc3a710f0f8', 'floreseka@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(41, 3, '58fc3d4845038', '58fc3d4845082', 'bob@crystalship.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(42, 3, '58fc4dff1f550', '58fc4dff1f597', 'ivan@dimkovic.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(43, 3, '58fc57169c924', '58fc57169d0be', 'njhancock@sbcglobal.net', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(44, 3, '58fc67cbd3d2b', '58fc67cbd3d75', 'cccharity@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(45, 3, '58fc68e4de513', '58fc68e4de555', 'gratefultohim@aol.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(46, 3, '58fc8b5a35a5b', '58fc8b5a35a9d', 'nikiardis@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(47, 3, '58fc8de0dbc81', '58fc8de0dbcd0', 'walkingondocs@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(48, 3, '58fc96c605ffc', '58fc96c606050', 'joeykc24@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(49, 3, '58fcc05676949', '58fcc05676991', 'rford166@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(50, 3, '58fce680a43cb', '58fce680a4426', 'boyblu19@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(51, 3, '58fceb75e22bf', '58fceb75e2307', 'andrew-fraser@hotmail.co.uk', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(52, 3, '58fcf27d61fd4', '58fcf27d62017', 'tinsel86@aol.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(53, 3, '58fcf51f945d2', '58fcf51f94624', 'iamsampson@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(54, 3, '58fd12526c00d', '58fd12526c055', 'henrynieves2002@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(55, 3, '58fd3b9059247', '58fd3b905928f', 'theyuish@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(56, 3, '58fd41eab0391', '58fd41eab0403', 'pritha4679@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(57, 3, '58fd49595030f', '58fd495950367', 'cbergeon@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(58, 3, '58fd4b90e0a8f', '58fd4b90e0c1e', 'jnvmusa@yahoo.co.uk', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(59, 3, '58fd5693206e6', '58fd56932078b', 'stephanieg4579@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(60, 3, '58fd56e1649a4', '58fd56e1649f0', 'sstvns66@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(61, 3, '58fd5a4c196a2', '58fd5a4c19717', 'bhmucciolo@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(62, 3, '58fd69b4178a7', '58fd69b4178e1', 'shilbelink@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(63, 3, '58fd852dd7b66', '58fd852dd7bb2', 'ndpoto@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(64, 3, '58fd9123a7636', '58fd9123a7694', 'taank714@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(65, 3, '58fdb3c101c45', '58fdb3c101c8e', 'chelseapylant@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(66, 3, '58fdd87491e6e', '58fdd87491eb0', 'geoffbarr246649@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(67, 3, '58fdd8ccae781', '58fdd8ccae7c1', 'support@scryptmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(68, 2, 'Adeel', 'Ahmad', 'addi@gmail.com', '', '23423', 'adsf', '10842322_10152872596295040_5429204997354675282_o2.jpg', 'Reject', '', '', ''),
(69, 3, '58fe031734faf', '58fe031735021', 'mrjetorres@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(70, 3, '58fe03a48944b', '58fe03a489493', 'sandy2944@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(71, 3, '58fe0555d1ccf', '58fe0555d1d0f', 'sarahrisse@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(72, 3, '58fe0d8ac592d', '58fe0d8ac596f', 'royfrench99@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(73, 3, '58fe1e688aba9', '58fe1e688ac9d', 'der_clan_killer@gmx.de', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(74, 3, '58fe3a7a6e0ef', '58fe3a7a6e127', 'pennie8066@live.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(75, 3, '58fe505677269', '58fe5056772b3', 'wilkingnunez@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(76, 3, '58fe52f984de2', '58fe52f984e21', 'mbcatto@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(77, 3, '58fe5ca4c17d6', '58fe5ca4c181b', 'kelvin.cobb@att.net', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(78, 3, '58fe6048006ee', '58fe604800732', 'ageorges@metroparcelfreight.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(79, 3, '58fe662a746e4', '58fe662a74723', 'cody_oberlander@comcast.net', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(80, 3, '58fe670cdd031', '58fe670cdd070', 'bmw96mom@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(81, 3, '58fe74a3caea5', '58fe74a3caeea', 'thunderarthurian@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(82, 3, '58fe754f98617', '58fe754f98667', 'thunderarthur@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(83, 3, '58fe7e5663f4a', '58fe7e5663f96', 'lilstompergirl@aol.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(84, 3, '58fe820d7add4', '58fe820d7ae14', 'jack@campexperts.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(85, 3, '58fe88ff27f2b', '58fe88ff27f6e', 'joewaller103@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(86, 3, '58fe90df9e06a', '58fe90df9e0bc', 'thelinebacker43@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(87, 3, '58fe9172f0bcf', '58fe9172f0c0f', 'mholte@comcast.net', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(88, 3, '58fe9679bc1e3', '58fe9679bc237', 'drone1238@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(89, 3, '58fe97d31981a', '58fe97d319863', 'rashadnesbitt@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(90, 3, '58fe9b29e92fc', '58fe9b29e933e', 'lisabarram@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(91, 3, '58fea68dde4a6', '58fea68dde538', 'otraylor22@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(92, 3, 'Mike', 'Schem', 'michaelfschem@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '3106997175', 'Westwood', '', 'Active', '', '', ''),
(93, 3, '58feb4c17923f', '58feb4c179286', 'dofish79@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(94, 3, '58febae908a8d', '58febae908ac6', 'stoyanovaanna@yahoo.co.uk', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(95, 3, '58ff7c8505330', '58ff7c8505373', 'kolbycheese20@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(96, 3, '58ff7ca269a1b', '58ff7ca269a64', 'agomez955@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(97, 3, '58ff7ef5537e4', '58ff7ef553829', 'danamartindds@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(98, 3, '58ff836d93717', '58ff836d93758', 'searchcz@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(99, 3, '58ff98f73f2b0', '58ff98f73f2f9', 'standpointcinema@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(100, 3, '58ff9a8af0f06', '58ff9a8af0f66', 'greenoklahomapeanut@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(101, 3, '58ffaa40598fa', '58ffaa405993b', 'dgrayerjr@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(102, 3, '58ffac7ab92b5', '58ffac7ab92f8', 'minnojohnson@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(103, 3, '58ffb524df034', '58ffb524df098', 'skyeizme@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(104, 3, '58ffbd2ca1b36', '58ffbd2ca1b7d', 'k-ibarra@live.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(105, 3, 'Craig', 'MacLaren-Swan', 'craig.maclarenswan@gmail.com', '1fae9c2557faa8ce30452d59bdf84b0d', '6263652499', 'San Marino', '', 'Active', '', '', ''),
(106, 3, '58ffd0ebb97ae', '58ffd0ebb97f2', 'a.weber@galli.de', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(107, 3, '58ffdabb12242', '58ffdabb12284', 'joeinhb@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Active', '', '', ''),
(108, 3, 'Chris', 'Kim', 'cdk.kim@gmail.com', '46062d2b01bbade852ee1f6e19529825', '2132479191', 'Beverly Hills', '', 'Active', '', '', ''),
(109, 3, 'CEO', 'TEST', 'ksuarez@smu.edu', '7d781fb028656f6bc211f1343b836222', '123456789', 'LOS ANGELES', '', 'Active', '', '', ''),
(115, 3, 'test', 'test', 'addi.ahmad9@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '03224947724', 'Lahore', '', 'Active', '', '', ''),
(116, 3, '5906538099bb9', '5906538099c0b', 'lory.marpa@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Reject', '', '', ''),
(117, 3, '590670b3a1b15', '590670b3a1b57', 'matt.manthey@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Reject', '', '', ''),
(118, 3, '59074577a8fe2', '59074577a9047', 'tranhung026@yahoo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 'Reject', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE IF NOT EXISTS `user_addresses` (
  `id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Place_Name` varchar(200) NOT NULL,
  `Saved_Address` varchar(200) NOT NULL,
  `Longitude` varchar(200) NOT NULL,
  `Latitude` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `User_Id`, `Place_Name`, `Saved_Address`, `Longitude`, `Latitude`) VALUES
(1, 109, 'Home ', 'Los Angeles, CA 90024, USA', '-118.43675510000003', '34.06314510000001');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `Role`) VALUES
(1, 'Admin'),
(2, 'Router'),
(3, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_of_services`
--
ALTER TABLE `area_of_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_service_inquiries`
--
ALTER TABLE `customer_service_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_partnership_inquiries`
--
ALTER TABLE `owner_partnership_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_of_services`
--
ALTER TABLE `area_of_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer_service_inquiries`
--
ALTER TABLE `customer_service_inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `owner_partnership_inquiries`
--
ALTER TABLE `owner_partnership_inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
