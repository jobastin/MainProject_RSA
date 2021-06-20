-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 02:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('rsaproject02@gmail.com', 'bc3798b0835fbe9648d7978441bd55ff9a2ffa78d8', '2021-05-18 11:31:19'),
('rsaproject02@gmail.com', '7b37b1f0201bf8247ef0d8e9d53d6595df17fa205c', '2021-06-10 13:11:49'),
('rsaproject02@gmail.com', 'e5314b4bcc40897fca218dba4f0f1c57daafa304ef', '2021-06-10 13:17:47'),
('rsaproject02@gmail.com', '18352e022f9e81c3ce83ce50bf442ce51763a13ede', '2021-06-15 01:11:00'),
('rsaproject02@gmail.com', '8e46bc1becb32bc45c5fc49cbc9058ad0b60c0a316', '2021-06-15 01:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `city_id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`city_id`, `Name`, `state_id`, `status`) VALUES
(101, 'Alipur', 1, 1),
(102, 'Andaman Island', 1, 1),
(103, 'Anderson Island', 1, 1),
(104, 'Arainj-Laka-Punga', 1, 1),
(105, 'Austinabad', 1, 1),
(106, 'Bamboo Flat', 1, 1),
(107, 'Barren Island', 1, 1),
(108, 'Beadonabad', 1, 1),
(109, 'Betapur', 1, 1),
(110, 'Bindraban', 1, 1),
(111, 'Bonington', 1, 1),
(112, 'Brookesabad', 1, 1),
(113, 'Cadell Point', 1, 1),
(114, 'Calicut', 1, 1),
(115, 'Chetamale', 1, 1),
(116, 'Cinque Islands', 1, 1),
(117, 'Defence Island', 1, 1),
(118, 'Digilpur', 1, 1),
(119, 'Dolyganj', 1, 1),
(120, 'Flat Island', 1, 1),
(121, 'Geinyale', 1, 1),
(122, 'Great Coco Island', 1, 1),
(123, 'Haddo', 1, 1),
(124, 'Havelock Island', 1, 1),
(125, 'Henry Lawrence Island', 1, 1),
(126, 'Herbertabad', 1, 1),
(127, 'Hobdaypur', 1, 1),
(128, 'Ilichar', 1, 1),
(129, 'Ingoie', 1, 1),
(130, 'Inteview Island', 1, 1),
(131, 'Jangli Ghat', 1, 1),
(132, 'Jhon Lawrence Island', 1, 1),
(133, 'Karen', 1, 1),
(134, 'Kartara', 1, 1),
(135, 'KYD Islannd', 1, 1),
(136, 'Landfall Island', 1, 1),
(137, 'Little Andmand', 1, 1),
(138, 'Little Coco Island', 1, 1),
(139, 'Long Island', 1, 1),
(140, 'Maimyo', 1, 1),
(141, 'Malappuram', 1, 1),
(142, 'Manglutan', 1, 1),
(143, 'Manpur', 1, 1),
(144, 'Mitha Khari', 1, 1),
(145, 'Neill Island', 1, 1),
(146, 'Nicobar Island', 1, 1),
(147, 'North Brother Island', 1, 1),
(148, 'North Passage Island', 1, 1),
(149, 'North Sentinel Island', 1, 1),
(150, 'Nothen Reef Island', 1, 1),
(151, 'Outram Island', 1, 1),
(152, 'Pahlagaon', 1, 1),
(153, 'Palalankwe', 1, 1),
(154, 'Passage Island', 1, 1),
(155, 'Phaiapong', 1, 1),
(156, 'Phoenix Island', 1, 1),
(157, 'Port Blair', 1, 1),
(158, 'Preparis Island', 1, 1),
(159, 'Protheroepur', 1, 1),
(160, 'Rangachang', 1, 1),
(161, 'Rongat', 1, 1),
(162, 'Rutland Island', 1, 1),
(163, 'Sabari', 1, 1),
(164, 'Saddle Peak', 1, 1),
(165, 'Shadipur', 1, 1),
(166, 'Smith Island', 1, 1),
(167, 'Sound Island', 1, 1),
(168, 'South Sentinel Island', 1, 1),
(169, 'Spike Island', 1, 1),
(170, 'Tarmugli Island', 1, 1),
(171, 'Taylerabad', 1, 1),
(172, 'Titaije', 1, 1),
(173, 'Toibalawe', 1, 1),
(174, 'Tusonabad', 1, 1),
(175, 'West Island', 1, 1),
(176, 'Wimberleyganj', 1, 1),
(177, 'Yadita', 1, 1),
(201, 'Adilabad', 2, 1),
(202, 'Anantapur', 2, 1),
(203, 'Chittoor', 2, 1),
(204, 'Cuddapah', 2, 1),
(205, 'East Godavari', 2, 1),
(206, 'Guntur', 2, 1),
(207, 'Hyderabad', 2, 1),
(208, 'Karimnagar', 2, 1),
(209, 'Khammam', 2, 1),
(210, 'Krishna', 2, 1),
(211, 'Kurnool', 2, 1),
(212, 'Mahabubnagar', 2, 1),
(213, 'Medak', 2, 1),
(214, 'Nalgonda', 2, 1),
(215, 'Nellore', 2, 1),
(216, 'Nizamabad', 2, 1),
(217, 'Prakasam', 2, 1),
(218, 'Rangareddy', 2, 1),
(219, 'Srikakulam', 2, 1),
(220, 'Visakhapatnam', 2, 1),
(221, 'Vizianagaram', 2, 1),
(222, 'Warangal', 2, 1),
(223, 'West Godavari', 2, 1),
(301, 'Anjaw', 3, 1),
(302, 'Changlang', 3, 1),
(303, 'Dibang Valley', 3, 1),
(304, 'East Kameng', 3, 1),
(305, 'East Siang', 3, 1),
(306, 'Itanagar', 3, 1),
(307, 'Kurung Kumey', 3, 1),
(308, 'Lohit', 3, 1),
(309, 'Lower Dibang Valley', 3, 1),
(310, 'Lower Subansiri', 3, 1),
(311, 'Papum Pare', 3, 1),
(312, 'Tawang', 3, 1),
(313, 'Tirap', 3, 1),
(314, 'Upper Siang', 3, 1),
(315, 'Upper Subansiri', 3, 1),
(316, 'West Kameng', 3, 1),
(317, 'West Siang', 3, 1),
(401, 'Barpeta', 4, 1),
(402, 'Bongaigaon', 4, 1),
(403, 'Cachar', 4, 1),
(404, 'Darrang', 4, 1),
(405, 'Dhemaji', 4, 1),
(406, 'Dhubri', 4, 1),
(407, 'Dibrugarh', 4, 1),
(408, 'Goalpara', 4, 1),
(409, 'Golaghat', 4, 1),
(410, 'Guwahati', 4, 1),
(411, 'Hailakandi', 4, 1),
(412, 'Jorhat', 4, 1),
(413, 'Kamrup', 4, 1),
(414, 'Karbi Anglong', 4, 1),
(415, 'Karimganj', 4, 1),
(416, 'Kokrajhar', 4, 1),
(417, 'Lakhimpur', 4, 1),
(418, 'Marigaon', 4, 1),
(419, 'Nagaon', 4, 1),
(420, 'Nalbari', 4, 1),
(421, 'North Cachar Hills', 4, 1),
(422, 'Silchar', 4, 1),
(423, 'Sivasagar', 4, 1),
(424, 'Sonitpur', 4, 1),
(425, 'Tinsukia', 4, 1),
(426, 'Udalguri', 4, 1),
(501, 'Araria', 5, 1),
(502, 'Aurangabad', 5, 1),
(503, 'Banka', 5, 1),
(504, 'Begusarai', 5, 1),
(505, 'Bhagalpur', 5, 1),
(506, 'Bhojpur', 5, 1),
(507, 'Buxar', 5, 1),
(508, 'Darbhanga', 5, 1),
(509, 'East Champaran', 5, 1),
(510, 'Gaya', 5, 1),
(511, 'Gopalganj', 5, 1),
(512, 'Jamshedpur', 5, 1),
(513, 'Jamui', 5, 1),
(514, 'Jehanabad', 5, 1),
(515, 'Kaimur (Bhabua)', 5, 1),
(516, 'Katihar', 5, 1),
(517, 'Khagaria', 5, 1),
(518, 'Kishanganj', 5, 1),
(519, 'Lakhisarai', 5, 1),
(520, 'Madhepura', 5, 1),
(521, 'Madhubani', 5, 1),
(522, 'Munger', 5, 1),
(523, 'Muzaffarpur', 5, 1),
(524, 'Nalanda', 5, 1),
(525, 'Nawada', 5, 1),
(526, 'Patna', 5, 1),
(527, 'Purnia', 5, 1),
(528, 'Rohtas', 5, 1),
(529, 'Saharsa', 5, 1),
(530, 'Samastipur', 5, 1),
(531, 'Saran', 5, 1),
(532, 'Sheikhpura', 5, 1),
(533, 'Sheohar', 5, 1),
(534, 'Sitamarhi', 5, 1),
(535, 'Siwan', 5, 1),
(536, 'Supaul', 5, 1),
(537, 'Vaishali', 5, 1),
(538, 'West Champaran', 5, 1),
(601, 'Chandigarh', 6, 1),
(602, 'Mani Marja', 6, 1),
(701, 'Bastar', 7, 1),
(702, 'Bhilai', 7, 1),
(703, 'Bijapur', 7, 1),
(704, 'Bilaspur', 7, 1),
(705, 'Dhamtari', 7, 1),
(706, 'Durg', 7, 1),
(707, 'Janjgir-Champa', 7, 1),
(708, 'Jashpur', 7, 1),
(709, 'Kabirdham-Kawardha', 7, 1),
(710, 'Korba', 7, 1),
(711, 'Korea', 7, 1),
(712, 'Mahasamund', 7, 1),
(713, 'Narayanpur', 7, 1),
(714, 'Norh Bastar-Kanker', 7, 1),
(715, 'Raigarh', 7, 1),
(716, 'Raipur', 7, 1),
(717, 'Rajnandgaon', 7, 1),
(718, 'South Bastar-Dantewada', 7, 1),
(719, 'Surguja', 7, 1),
(801, 'Amal', 8, 1),
(802, 'Amli', 8, 1),
(803, 'Bedpa', 8, 1),
(804, 'Chikhli', 8, 1),
(805, 'Dadra & Nagar Haveli', 8, 1),
(806, 'Dahikhed', 8, 1),
(807, 'Dolara', 8, 1),
(808, 'Galonda', 8, 1),
(809, 'Kanadi', 8, 1),
(810, 'Karchond', 8, 1),
(811, 'Khadoli', 8, 1),
(812, 'Kharadpada', 8, 1),
(813, 'Kherabari', 8, 1),
(814, 'Kherdi', 8, 1),
(815, 'Kothar', 8, 1),
(816, 'Luari', 8, 1),
(817, 'Mashat', 8, 1),
(818, 'Rakholi', 8, 1),
(819, 'Rudana', 8, 1),
(820, 'Saili', 8, 1),
(821, 'Sili', 8, 1),
(822, 'Silvassa', 8, 1),
(823, 'Sindavni', 8, 1),
(824, 'Udva', 8, 1),
(825, 'Umbarkoi', 8, 1),
(826, 'Vansda', 8, 1),
(827, 'Vasona', 8, 1),
(828, 'Velugam', 8, 1),
(901, 'Brancavare', 9, 1),
(902, 'Dagasi', 9, 1),
(903, 'Daman', 9, 1),
(904, 'Diu', 9, 1),
(905, 'Magarvara', 9, 1),
(906, 'Nagwa', 9, 1),
(907, 'Pariali', 9, 1),
(908, 'Passo Covo', 9, 1),
(1001, 'Central Delhi', 10, 1),
(1002, 'East Delhi', 10, 1),
(1003, 'New Delhi', 10, 1),
(1004, 'North Delhi', 10, 1),
(1005, 'North East Delhi', 10, 1),
(1006, 'North West Delhi', 10, 1),
(1007, 'Old Delhi', 10, 1),
(1008, 'South Delhi', 10, 1),
(1009, 'South West Delhi', 10, 1),
(1010, 'West Delhi', 10, 1),
(1101, 'Canacona', 11, 1),
(1102, 'Candolim', 11, 1),
(1103, 'Chinchinim', 11, 1),
(1104, 'Cortalim', 11, 1),
(1105, 'Goa', 11, 1),
(1106, 'Jua', 11, 1),
(1107, 'Madgaon', 11, 1),
(1108, 'Mahem', 11, 1),
(1109, 'Mapuca', 11, 1),
(1110, 'Marmagao', 11, 1),
(1111, 'Panji', 11, 1),
(1112, 'Ponda', 11, 1),
(1113, 'Sanvordem', 11, 1),
(1114, 'Terekhol', 11, 1),
(1201, 'Ahmedabad', 12, 1),
(1202, 'Amreli', 12, 1),
(1203, 'Anand', 12, 1),
(1204, 'Banaskantha', 12, 1),
(1205, 'Baroda', 12, 1),
(1206, 'Bharuch', 12, 1),
(1207, 'Bhavnagar', 12, 1),
(1208, 'Dahod', 12, 1),
(1209, 'Dang', 12, 1),
(1210, 'Dwarka', 12, 1),
(1211, 'Gandhinagar', 12, 1),
(1212, 'Jamnagar', 12, 1),
(1213, 'Junagadh', 12, 1),
(1214, 'Kheda', 12, 1),
(1215, 'Kutch', 12, 1),
(1216, 'Mehsana', 12, 1),
(1217, 'Nadiad', 12, 1),
(1218, 'Narmada', 12, 1),
(1219, 'Navsari', 12, 1),
(1220, 'Panchmahals', 12, 1),
(1221, 'Patan', 12, 1),
(1222, 'Porbandar', 12, 1),
(1223, 'Rajkot', 12, 1),
(1224, 'Sabarkantha', 12, 1),
(1225, 'Surat', 12, 1),
(1226, 'Surendranagar', 12, 1),
(1227, 'Vadodara', 12, 1),
(1228, 'Valsad', 12, 1),
(1229, 'Vapi', 12, 1),
(1301, 'Ambala', 13, 1),
(1302, 'Bhiwani', 13, 1),
(1303, 'Faridabad', 13, 1),
(1304, 'Fatehabad', 13, 1),
(1305, 'Gurgaon', 13, 1),
(1306, 'Hisar', 13, 1),
(1307, 'Jhajjar', 13, 1),
(1308, 'Jind', 13, 1),
(1309, 'Kaithal', 13, 1),
(1310, 'Karnal', 13, 1),
(1311, 'Kurukshetra', 13, 1),
(1312, 'Mahendragarh', 13, 1),
(1313, 'Mewat', 13, 1),
(1314, 'Panchkula', 13, 1),
(1315, 'Panipat', 13, 1),
(1316, 'Rewari', 13, 1),
(1317, 'Rohtak', 13, 1),
(1318, 'Sirsa', 13, 1),
(1319, 'Sonipat', 13, 1),
(1320, 'Yamunanagar', 13, 1),
(1401, 'Bilaspur', 14, 1),
(1402, 'Chamba', 14, 1),
(1403, 'Dalhousie', 14, 1),
(1404, 'Hamirpur', 14, 1),
(1405, 'Kangra', 14, 1),
(1406, 'Kinnaur', 14, 1),
(1407, 'Kullu', 14, 1),
(1408, 'Lahaul & Spiti', 14, 1),
(1409, 'Mandi', 14, 1),
(1410, 'Shimla', 14, 1),
(1411, 'Sirmaur', 14, 1),
(1412, 'Solan', 14, 1),
(1413, 'Una', 14, 1),
(1501, 'Anantnag', 15, 1),
(1502, 'Baramulla', 15, 1),
(1503, 'Budgam', 15, 1),
(1504, 'Doda', 15, 1),
(1505, 'Jammu', 15, 1),
(1506, 'Kargil', 15, 1),
(1507, 'Kathua', 15, 1),
(1508, 'Kupwara', 15, 1),
(1509, 'Leh', 15, 1),
(1510, 'Poonch', 15, 1),
(1511, 'Pulwama', 15, 1),
(1512, 'Rajauri', 15, 1),
(1513, 'Srinagar', 15, 1),
(1514, 'Udhampur', 15, 1),
(1601, 'Bokaro', 16, 1),
(1602, 'Chatra', 16, 1),
(1603, 'Deoghar', 16, 1),
(1604, 'Dhanbad', 16, 1),
(1605, 'Dumka', 16, 1),
(1606, 'East Singhbhum', 16, 1),
(1607, 'Garhwa', 16, 1),
(1608, 'Giridih', 16, 1),
(1609, 'Godda', 16, 1),
(1610, 'Gumla', 16, 1),
(1611, 'Hazaribag', 16, 1),
(1612, 'Jamtara', 16, 1),
(1613, 'Koderma', 16, 1),
(1614, 'Latehar', 16, 1),
(1615, 'Lohardaga', 16, 1),
(1616, 'Pakur', 16, 1),
(1617, 'Palamu', 16, 1),
(1618, 'Ranchi', 16, 1),
(1619, 'Sahibganj', 16, 1),
(1620, 'Seraikela', 16, 1),
(1621, 'Simdega', 16, 1),
(1622, 'West Singhbhum', 16, 1),
(1701, 'Bagalkot', 17, 1),
(1702, 'Bangalore', 17, 1),
(1703, 'Bangalore Rural', 17, 1),
(1704, 'Belgaum', 17, 1),
(1705, 'Bellary', 17, 1),
(1706, 'Bhatkal', 17, 1),
(1707, 'Bidar', 17, 1),
(1708, 'Bijapur', 17, 1),
(1709, 'Chamrajnagar', 17, 1),
(1710, 'Chickmagalur', 17, 1),
(1711, 'Chikballapur', 17, 1),
(1712, 'Chitradurga', 17, 1),
(1713, 'Dakshina Kannada', 17, 1),
(1714, 'Davanagere', 17, 1),
(1715, 'Dharwad', 17, 1),
(1716, 'Gadag', 17, 1),
(1717, 'Gulbarga', 17, 1),
(1718, 'Hampi', 17, 1),
(1719, 'Hassan', 17, 1),
(1720, 'Haveri', 17, 1),
(1721, 'Hospet', 17, 1),
(1722, 'Karwar', 17, 1),
(1723, 'Kodagu', 17, 1),
(1724, 'Kolar', 17, 1),
(1725, 'Koppal', 17, 1),
(1726, 'Madikeri', 17, 1),
(1727, 'Mandya', 17, 1),
(1728, 'Mangalore', 17, 1),
(1729, 'Manipal', 17, 1),
(1730, 'Mysore', 17, 1),
(1731, 'Raichur', 17, 1),
(1732, 'Shimoga', 17, 1),
(1733, 'Sirsi', 17, 1),
(1734, 'Sringeri', 17, 1),
(1735, 'Srirangapatna', 17, 1),
(1736, 'Tumkur', 17, 1),
(1737, 'Udupi', 17, 1),
(1738, 'Uttara Kannada', 17, 1),
(1801, 'Alappuzha', 18, 1),
(1802, 'Alleppey', 18, 1),
(1803, 'Alwaye', 18, 1),
(1804, 'Ernakulam', 18, 1),
(1805, 'Idukki', 18, 1),
(1806, 'Kannur', 18, 1),
(1807, 'Kasargod', 18, 1),
(1808, 'Kochi', 18, 1),
(1809, 'Kollam', 18, 1),
(1810, 'Kottayam', 18, 1),
(1811, 'Kovalam', 18, 1),
(1812, 'Kozhikode', 18, 1),
(1813, 'Malappuram', 18, 1),
(1814, 'Palakkad', 18, 1),
(1815, 'Pathanamthitta', 18, 1),
(1816, 'Perumbavoor', 18, 1),
(1817, 'Thiruvananthapuram', 18, 1),
(1818, 'Thrissur', 18, 1),
(1819, 'Trichur', 18, 1),
(1820, 'Trivandrum', 18, 1),
(1821, 'Wayanad', 18, 1),
(1901, 'Agatti Island', 19, 1),
(1902, 'Bingaram Island', 19, 1),
(1903, 'Bitra Island', 19, 1),
(1904, 'Chetlat Island', 19, 1),
(1905, 'Kadmat Island', 19, 1),
(1906, 'Kalpeni Island', 19, 1),
(1907, 'Kavaratti Island', 19, 1),
(1908, 'Kiltan Island', 19, 1),
(1909, 'Lakshadweep Sea', 19, 1),
(1910, 'Minicoy Island', 19, 1),
(1911, 'North Island', 19, 1),
(1912, 'South Island', 19, 1),
(2001, 'Anuppur', 20, 1),
(2002, 'Ashoknagar', 20, 1),
(2003, 'Balaghat', 20, 1),
(2004, 'Barwani', 20, 1),
(2005, 'Betul', 20, 1),
(2006, 'Bhind', 20, 1),
(2007, 'Bhopal', 20, 1),
(2008, 'Burhanpur', 20, 1),
(2009, 'Chhatarpur', 20, 1),
(2010, 'Chhindwara', 20, 1),
(2011, 'Damoh', 20, 1),
(2012, 'Datia', 20, 1),
(2013, 'Dewas', 20, 1),
(2014, 'Dhar', 20, 1),
(2015, 'Dindori', 20, 1),
(2016, 'Guna', 20, 1),
(2017, 'Gwalior', 20, 1),
(2018, 'Harda', 20, 1),
(2019, 'Hoshangabad', 20, 1),
(2020, 'Indore', 20, 1),
(2021, 'Jabalpur', 20, 1),
(2022, 'Jagdalpur', 20, 1),
(2023, 'Jhabua', 20, 1),
(2024, 'Katni', 20, 1),
(2025, 'Khandwa', 20, 1),
(2026, 'Khargone', 20, 1),
(2027, 'Mandla', 20, 1),
(2028, 'Mandsaur', 20, 1),
(2029, 'Morena', 20, 1),
(2030, 'Narsinghpur', 20, 1),
(2031, 'Neemuch', 20, 1),
(2032, 'Panna', 20, 1),
(2033, 'Raisen', 20, 1),
(2034, 'Rajgarh', 20, 1),
(2035, 'Ratlam', 20, 1),
(2036, 'Rewa', 20, 1),
(2037, 'Sagar', 20, 1),
(2038, 'Satna', 20, 1),
(2039, 'Sehore', 20, 1),
(2040, 'Seoni', 20, 1),
(2041, 'Shahdol', 20, 1),
(2042, 'Shajapur', 20, 1),
(2043, 'Sheopur', 20, 1),
(2044, 'Shivpuri', 20, 1),
(2045, 'Sidhi', 20, 1),
(2046, 'Tikamgarh', 20, 1),
(2047, 'Ujjain', 20, 1),
(2048, 'Umaria', 20, 1),
(2049, 'Vidisha', 20, 1),
(2101, 'Ahmednagar', 21, 1),
(2102, 'Akola', 21, 1),
(2103, 'Amravati', 21, 1),
(2104, 'Aurangabad', 21, 1),
(2105, 'Beed', 21, 1),
(2106, 'Bhandara', 21, 1),
(2107, 'Buldhana', 21, 1),
(2108, 'Chandrapur', 21, 1),
(2109, 'Dhule', 21, 1),
(2110, 'Gadchiroli', 21, 1),
(2111, 'Gondia', 21, 1),
(2112, 'Hingoli', 21, 1),
(2113, 'Jalgaon', 21, 1),
(2114, 'Jalna', 21, 1),
(2115, 'Kolhapur', 21, 1),
(2116, 'Latur', 21, 1),
(2117, 'Mahabaleshwar', 21, 1),
(2118, 'Mumbai', 21, 1),
(2119, 'Mumbai City', 21, 1),
(2120, 'Mumbai Suburban', 21, 1),
(2121, 'Nagpur', 21, 1),
(2122, 'Nanded', 21, 1),
(2123, 'Nandurbar', 21, 1),
(2124, 'Nashik', 21, 1),
(2125, 'Osmanabad', 21, 1),
(2126, 'Parbhani', 21, 1),
(2127, 'Pune', 21, 1),
(2128, 'Raigad', 21, 1),
(2129, 'Ratnagiri', 21, 1),
(2130, 'Sangli', 21, 1),
(2131, 'Satara', 21, 1),
(2132, 'Sholapur', 21, 1),
(2133, 'Sindhudurg', 21, 1),
(2134, 'Thane', 21, 1),
(2135, 'Wardha', 21, 1),
(2136, 'Washim', 21, 1),
(2137, 'Yavatmal', 21, 1),
(2201, 'Bishnupur', 22, 1),
(2202, 'Chandel', 22, 1),
(2203, 'Churachandpur', 22, 1),
(2204, 'Imphal East', 22, 1),
(2205, 'Imphal West', 22, 1),
(2206, 'Senapati', 22, 1),
(2207, 'Tamenglong', 22, 1),
(2208, 'Thoubal', 22, 1),
(2209, 'Ukhrul', 22, 1),
(2301, 'East Garo Hills', 23, 1),
(2302, 'East Khasi Hills', 23, 1),
(2303, 'Jaintia Hills', 23, 1),
(2304, 'Ri Bhoi', 23, 1),
(2305, 'Shillong', 23, 1),
(2306, 'South Garo Hills', 23, 1),
(2307, 'West Garo Hills', 23, 1),
(2308, 'West Khasi Hills', 23, 1),
(2401, 'Aizawl', 24, 1),
(2402, 'Champhai', 24, 1),
(2403, 'Kolasib', 24, 1),
(2404, 'Lawngtlai', 24, 1),
(2405, 'Lunglei', 24, 1),
(2406, 'Mamit', 24, 1),
(2407, 'Saiha', 24, 1),
(2408, 'Serchhip', 24, 1),
(2501, 'Dimapur', 25, 1),
(2502, 'Kohima', 25, 1),
(2503, 'Mokokchung', 25, 1),
(2504, 'Mon', 25, 1),
(2505, 'Phek', 25, 1),
(2506, 'Tuensang', 25, 1),
(2507, 'Wokha', 25, 1),
(2508, 'Zunheboto', 25, 1),
(2601, 'Angul', 26, 1),
(2602, 'Balangir', 26, 1),
(2603, 'Balasore', 26, 1),
(2604, 'Baleswar', 26, 1),
(2605, 'Bargarh', 26, 1),
(2606, 'Berhampur', 26, 1),
(2607, 'Bhadrak', 26, 1),
(2608, 'Bhubaneswar', 26, 1),
(2609, 'Boudh', 26, 1),
(2610, 'Cuttack', 26, 1),
(2611, 'Deogarh', 26, 1),
(2612, 'Dhenkanal', 26, 1),
(2613, 'Gajapati', 26, 1),
(2614, 'Ganjam', 26, 1),
(2615, 'Jagatsinghapur', 26, 1),
(2616, 'Jajpur', 26, 1),
(2617, 'Jharsuguda', 26, 1),
(2618, 'Kalahandi', 26, 1),
(2619, 'Kandhamal', 26, 1),
(2620, 'Kendrapara', 26, 1),
(2621, 'Kendujhar', 26, 1),
(2622, 'Khordha', 26, 1),
(2623, 'Koraput', 26, 1),
(2624, 'Malkangiri', 26, 1),
(2625, 'Mayurbhanj', 26, 1),
(2626, 'Nabarangapur', 26, 1),
(2627, 'Nayagarh', 26, 1),
(2628, 'Nuapada', 26, 1),
(2629, 'Puri', 26, 1),
(2630, 'Rayagada', 26, 1),
(2631, 'Rourkela', 26, 1),
(2632, 'Sambalpur', 26, 1),
(2633, 'Subarnapur', 26, 1),
(2634, 'Sundergarh', 26, 1),
(2701, 'Bahur', 27, 1),
(2702, 'Karaikal', 27, 1),
(2703, 'Mahe', 27, 1),
(2704, 'Pondicherry', 27, 1),
(2705, 'Purnankuppam', 27, 1),
(2706, 'Valudavur', 27, 1),
(2707, 'Villianur', 27, 1),
(2708, 'Yanam', 27, 1),
(2801, 'Amritsar', 28, 1),
(2802, 'Barnala', 28, 1),
(2803, 'Bathinda', 28, 1),
(2804, 'Faridkot', 28, 1),
(2805, 'Fatehgarh Sahib', 28, 1),
(2806, 'Ferozepur', 28, 1),
(2807, 'Gurdaspur', 28, 1),
(2808, 'Hoshiarpur', 28, 1),
(2809, 'Jalandhar', 28, 1),
(2810, 'Kapurthala', 28, 1),
(2811, 'Ludhiana', 28, 1),
(2812, 'Mansa', 28, 1),
(2813, 'Moga', 28, 1),
(2814, 'Muktsar', 28, 1),
(2815, 'Nawanshahr', 28, 1),
(2816, 'Pathankot', 28, 1),
(2817, 'Patiala', 28, 1),
(2818, 'Rupnagar', 28, 1),
(2819, 'Sangrur', 28, 1),
(2820, 'SAS Nagar', 28, 1),
(2821, 'Tarn Taran', 28, 1),
(2901, 'Ajmer', 29, 1),
(2902, 'Alwar', 29, 1),
(2903, 'Banswara', 29, 1),
(2904, 'Baran', 29, 1),
(2905, 'Barmer', 29, 1),
(2906, 'Bharatpur', 29, 1),
(2907, 'Bhilwara', 29, 1),
(2908, 'Bikaner', 29, 1),
(2909, 'Bundi', 29, 1),
(2910, 'Chittorgarh', 29, 1),
(2911, 'Churu', 29, 1),
(2912, 'Dausa', 29, 1),
(2913, 'Dholpur', 29, 1),
(2914, 'Dungarpur', 29, 1),
(2915, 'Hanumangarh', 29, 1),
(2916, 'Jaipur', 29, 1),
(2917, 'Jaisalmer', 29, 1),
(2918, 'Jalore', 29, 1),
(2919, 'Jhalawar', 29, 1),
(2920, 'Jhunjhunu', 29, 1),
(2921, 'Jodhpur', 29, 1),
(2922, 'Karauli', 29, 1),
(2923, 'Kota', 29, 1),
(2924, 'Nagaur', 29, 1),
(2925, 'Pali', 29, 1),
(2926, 'Pilani', 29, 1),
(2927, 'Rajsamand', 29, 1),
(2928, 'Sawai Madhopur', 29, 1),
(2929, 'Sikar', 29, 1),
(2930, 'Sirohi', 29, 1),
(2931, 'Sri Ganganagar', 29, 1),
(2932, 'Tonk', 29, 1),
(2933, 'Udaipur', 29, 1),
(3001, 'Barmiak', 30, 1),
(3002, 'Be', 30, 1),
(3003, 'Bhurtuk', 30, 1),
(3004, 'Chhubakha', 30, 1),
(3005, 'Chidam', 30, 1),
(3006, 'Chubha', 30, 1),
(3007, 'Chumikteng', 30, 1),
(3008, 'Dentam', 30, 1),
(3009, 'Dikchu', 30, 1),
(3010, 'Dzongri', 30, 1),
(3011, 'Gangtok', 30, 1),
(3012, 'Gauzing', 30, 1),
(3013, 'Gyalshing', 30, 1),
(3014, 'Hema', 30, 1),
(3015, 'Kerung', 30, 1),
(3016, 'Lachen', 30, 1),
(3017, 'Lachung', 30, 1),
(3018, 'Lema', 30, 1),
(3019, 'Lingtam', 30, 1),
(3020, 'Lungthu', 30, 1),
(3021, 'Mangan', 30, 1),
(3022, 'Namchi', 30, 1),
(3023, 'Namthang', 30, 1),
(3024, 'Nanga', 30, 1),
(3025, 'Nantang', 30, 1),
(3026, 'Naya Bazar', 30, 1),
(3027, 'Padamachen', 30, 1),
(3028, 'Pakhyong', 30, 1),
(3029, 'Pemayangtse', 30, 1),
(3030, 'Phensang', 30, 1),
(3031, 'Rangli', 30, 1),
(3032, 'Rinchingpong', 30, 1),
(3033, 'Sakyong', 30, 1),
(3034, 'Samdong', 30, 1),
(3035, 'Singtam', 30, 1),
(3036, 'Siniolchu', 30, 1),
(3037, 'Sombari', 30, 1),
(3038, 'Soreng', 30, 1),
(3039, 'Sosing', 30, 1),
(3040, 'Tekhug', 30, 1),
(3041, 'Temi', 30, 1),
(3042, 'Tsetang', 30, 1),
(3043, 'Tsomgo', 30, 1),
(3044, 'Tumlong', 30, 1),
(3045, 'Yangang', 30, 1),
(3046, 'Yumtang', 30, 1),
(3101, 'Chennai', 31, 1),
(3102, 'Chidambaram', 31, 1),
(3103, 'Chingleput', 31, 1),
(3104, 'Coimbatore', 31, 1),
(3105, 'Courtallam', 31, 1),
(3106, 'Cuddalore', 31, 1),
(3107, 'Dharmapuri', 31, 1),
(3108, 'Dindigul', 31, 1),
(3109, 'Erode', 31, 1),
(3110, 'Hosur', 31, 1),
(3111, 'Kanchipuram', 31, 1),
(3112, 'Kanyakumari', 31, 1),
(3113, 'Karaikudi', 31, 1),
(3114, 'Karur', 31, 1),
(3115, 'Kodaikanal', 31, 1),
(3116, 'Kovilpatti', 31, 1),
(3117, 'Krishnagiri', 31, 1),
(3118, 'Kumbakonam', 31, 1),
(3119, 'Madurai', 31, 1),
(3120, 'Mayiladuthurai', 31, 1),
(3121, 'Nagapattinam', 31, 1),
(3122, 'Nagarcoil', 31, 1),
(3123, 'Namakkal', 31, 1),
(3124, 'Neyveli', 31, 1),
(3125, 'Nilgiris', 31, 1),
(3126, 'Ooty', 31, 1),
(3127, 'Palani', 31, 1),
(3128, 'Perambalur', 31, 1),
(3129, 'Pollachi', 31, 1),
(3130, 'Pudukkottai', 31, 1),
(3131, 'Rajapalayam', 31, 1),
(3132, 'Ramanathapuram', 31, 1),
(3133, 'Salem', 31, 1),
(3134, 'Sivaganga', 31, 1),
(3135, 'Sivakasi', 31, 1),
(3136, 'Thanjavur', 31, 1),
(3137, 'Theni', 31, 1),
(3138, 'Thoothukudi', 31, 1),
(3139, 'Tiruchirappalli', 31, 1),
(3140, 'Tirunelveli', 31, 1),
(3141, 'Tirupur', 31, 1),
(3142, 'Tiruvallur', 31, 1),
(3143, 'Tiruvannamalai', 31, 1),
(3144, 'Tiruvarur', 31, 1),
(3145, 'Trichy', 31, 1),
(3146, 'Tuticorin', 31, 1),
(3147, 'Vellore', 31, 1),
(3148, 'Villupuram', 31, 1),
(3149, 'Virudhunagar', 31, 1),
(3150, 'Yercaud', 31, 1),
(3201, 'Agartala', 32, 1),
(3202, 'Ambasa', 32, 1),
(3203, 'Bampurbari', 32, 1),
(3204, 'Belonia', 32, 1),
(3205, 'Dhalai', 32, 1),
(3206, 'Dharam Nagar', 32, 1),
(3207, 'Kailashahar', 32, 1),
(3208, 'Kamal Krishnabari', 32, 1),
(3209, 'Khopaiyapara', 32, 1),
(3210, 'Khowai', 32, 1),
(3211, 'Phuldungsei', 32, 1),
(3212, 'Radha Kishore Pur', 32, 1),
(3213, 'Tripura', 32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fuel`
--

CREATE TABLE `tbl_fuel` (
  `Fid` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `Fcompany` varchar(200) NOT NULL,
  `Fphno` varchar(100) NOT NULL,
  `Femail` varchar(100) NOT NULL,
  `Flicense` varchar(100) NOT NULL,
  `Fadd` varchar(200) NOT NULL,
  `Fpin` int(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `Fowner` varchar(100) NOT NULL,
  `FOphno` varchar(100) NOT NULL,
  `Flat` varchar(100) NOT NULL,
  `Flon` varchar(100) NOT NULL,
  `Fstatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fuel`
--

INSERT INTO `tbl_fuel` (`Fid`, `login_id`, `Fcompany`, `Fphno`, `Femail`, `Flicense`, `Fadd`, `Fpin`, `state_id`, `city_id`, `Fowner`, `FOphno`, `Flat`, `Flon`, `Fstatus`) VALUES
(7, 109, 'Essar', '9633256441', 'fuel@xyz.com', 'FUEL1232', 'ADDRESS 1', 963325, 10, 1004, 'OWNER 1', '9633256441', '11.2535422', '75.8095427', 1),
(8, 114, 'HP', '9566325556', 'fuel1@xyz.com', 'FUEL562', 'ADDRESS 2', 695496, 14, 1406, 'OWNER 2', '9566325556', '11.3210523', '75.9021113', 1),
(9, 119, 'SA', '9633325115', 'assda@sad.sad', '96333251152', '96333251152', 963332, 11, 1108, 'DSDF', '9633325115', '11.25537582062712', '75.79296885806274', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fuel_service`
--

CREATE TABLE `tbl_fuel_service` (
  `Fsno` int(50) NOT NULL,
  `Fid` int(50) NOT NULL,
  `Sno` int(50) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fuel_service`
--

INSERT INTO `tbl_fuel_service` (`Fsno`, `Fid`, `Sno`, `status`) VALUES
(27, 114, 1, 0),
(28, 114, 2, 1),
(31, 109, 1, 1),
(32, 109, 2, 1),
(34, 109, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fuel_service_request`
--

CREATE TABLE `tbl_fuel_service_request` (
  `req_id` int(50) NOT NULL,
  `Sno` int(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `log` varchar(50) NOT NULL,
  `Fid` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `req_status` int(50) NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fuel_service_request`
--

INSERT INTO `tbl_fuel_service_request` (`req_id`, `Sno`, `description`, `lat`, `log`, `Fid`, `user_id`, `req_status`, `comment`, `status`) VALUES
(9, 1, 'Fuel Delivery', '11.2587531', '75.78041', 7, 116, 0, 'Bill Generated', 0),
(10, 2, 'asd', '11.2587531', '75.78041', 7, 116, 0, 'Bill Generated', 0),
(11, 2, 'sdf', '11.2587531', '75.78041', 7, 116, 0, 'Request Deleted', 0),
(12, 2, 'as', '11.2587531', '75.78041', 7, 116, 0, 'Bill Generated', 0),
(13, 2, 'srewr', '11.2587531', '75.78041', 7, 116, 0, 'Bill Generated', 0),
(14, 1, 'fuel del', '11.2587531', '75.78041', 7, 116, 0, 'Bill Generated', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `Hid` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `Hname` varchar(200) NOT NULL,
  `Hphno` varchar(100) NOT NULL,
  `Hemail` varchar(100) NOT NULL,
  `Hadd` varchar(100) NOT NULL,
  `Hpin` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `Hlat` varchar(100) NOT NULL,
  `Hlon` varchar(100) NOT NULL,
  `Hstatus` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`Hid`, `login_id`, `Hname`, `Hphno`, `Hemail`, `Hadd`, `Hpin`, `state_id`, `city_id`, `Hlat`, `Hlon`, `Hstatus`) VALUES
(1, 110, 'hospital 1', '9633521445', 'hospital@xyz.com', 'koduvally', '695742', 11, 1107, '11.2587530', '75.78041', 1),
(2, 115, 'hospital 2', '6952366654', 'hospital1@xyz.com', 'Kozhikode', '632541', 11, 1109, '11.4163004', '75.9199045', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hos_service_request`
--

CREATE TABLE `tbl_hos_service_request` (
  `req_id` int(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `log` varchar(50) NOT NULL,
  `Hid` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `req_status` int(50) NOT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hos_service_request`
--

INSERT INTO `tbl_hos_service_request` (`req_id`, `lat`, `log`, `Hid`, `user_id`, `req_status`, `comment`, `status`) VALUES
(1, '11.2587531', '75.78041', 1, 116, 1, 'Service Requested', 1),
(3, '11.2587531', '75.78041', 1, 116, 1, 'Service Requested', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `email`, `password`, `role`, `status`) VALUES
(99, 'rsaproject02@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 1),
(109, 'fuel@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'fuel', 1),
(110, 'hospital@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'hos', 1),
(112, 'mech1@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'mech', 1),
(113, 'mech2@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'mech', 1),
(114, 'fuel1@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'fuel', 1),
(115, 'hospital1@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'hos', 1),
(116, 'cust1@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'cust', 1),
(117, 'cust2@xyz.com', '25d55ad283aa400af464c76d713c07ad', 'cust', 1),
(118, 'sdf@sdf.df', 'e7cfd0cae0c287265aa5c98fdc7be10f', 'mech', 1),
(119, 'assda@sad.sad', '65abef100b51da60b86a53ee49b5ebc4', 'fuel', 1),
(120, 'asd@sdfcp.cm', 'b39c68a5674312f729c64b316b803998', 'cust', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mech`
--

CREATE TABLE `tbl_mech` (
  `Mid` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Mphno` varchar(100) NOT NULL,
  `Memail` varchar(50) NOT NULL,
  `Mlicense` varchar(100) NOT NULL,
  `Mtwo` int(50) NOT NULL,
  `Mfour` int(50) NOT NULL,
  `Mheavy` int(50) NOT NULL,
  `Madd` varchar(100) NOT NULL,
  `Mpin` int(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `Mowner` varchar(50) NOT NULL,
  `MOphno` varchar(50) NOT NULL,
  `Mlat` varchar(50) NOT NULL,
  `Mlong` varchar(50) NOT NULL,
  `Mstatus` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mech`
--

INSERT INTO `tbl_mech` (`Mid`, `login_id`, `Mname`, `Mphno`, `Memail`, `Mlicense`, `Mtwo`, `Mfour`, `Mheavy`, `Madd`, `Mpin`, `state_id`, `city_id`, `Mowner`, `MOphno`, `Mlat`, `Mlong`, `Mstatus`) VALUES
(1, 112, 'Mech 1', '9677459665', 'mech@xyz.com', 'Mech459665', 1, 0, 1, 'Add1', 967745, 15, 1507, 'Owner 1', '9677459665', '9.5260001', '76.8144292', 1),
(2, 113, 'Mech 2', '6322547991', 'mech2@xyz.com', 'Mech547991', 0, 0, 1, 'Add 2', 632254, 15, 1506, 'owner 2', '6322547991', '6.322547', '32.25479', 1),
(3, 118, 'asd', '9566234469', 'sdf@sdf.df', '9566234469', 1, 1, 1, '9566234469', 956623, 15, 1505, 'sad', '9566234469', '11.255360036894585', '75.79485176879119', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mech_services`
--

CREATE TABLE `tbl_mech_services` (
  `Msno` int(50) NOT NULL,
  `Mid` int(50) NOT NULL,
  `MType` int(20) NOT NULL,
  `Sno` int(50) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mech_services`
--

INSERT INTO `tbl_mech_services` (`Msno`, `Mid`, `MType`, `Sno`, `status`) VALUES
(1, 112, 2, 3, 1),
(2, 112, 5, 4, 0),
(4, 112, 5, 3, 1),
(5, 113, 2, 4, 1),
(6, 113, 2, 3, 1),
(7, 112, 2, 4, 1),
(8, 112, 2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `id` int(10) NOT NULL,
  `login_id` int(50) NOT NULL,
  `otp` int(50) NOT NULL,
  `verification_status` int(10) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `reciever_id` int(50) NOT NULL,
  `req_id` int(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `login_id`, `reciever_id`, `req_id`, `description`, `amount`, `status`) VALUES
(1, 116, 114, 10, 'bill1', '100', 1),
(6, 116, 109, 9, 'dfsdf', '3434', 1),
(7, 116, 109, 12, 'aSASAS', '56.23', 0),
(8, 116, 109, 13, 'sad', '223', 0),
(9, 116, 109, 14, 'xyz', '200', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_police`
--

CREATE TABLE `tbl_police` (
  `Pid` int(50) NOT NULL,
  `Pplace` varchar(100) NOT NULL,
  `Padd` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `Ppin` int(50) NOT NULL,
  `Pphno` varchar(100) NOT NULL,
  `Plat` varchar(100) NOT NULL,
  `Plon` varchar(100) NOT NULL,
  `Pstatus` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_police`
--

INSERT INTO `tbl_police` (`Pid`, `Pplace`, `Padd`, `state_id`, `city_id`, `Ppin`, `Pphno`, `Plat`, `Plon`, `Pstatus`) VALUES
(1, 'Kozhikode', 'Add', 1, 104, 9655745, '9655745566', '32.10446474930294', '20.04931259155273', 1),
(2, 'Thamassery', 'Add2', 15, 1510, 965565, '9655654459', '17.392579271057766', '19.51171875', 1),
(3, 'Kunnamangalam', 'Add3', 15, 1509, 963325, '9633251156', '56', '21', 0),
(4, 'pdsf', 'df', 14, 1407, 697452, '9633231445', '-5.8148062547283255', '24.9664306640625', 1),
(5, 'sdad', 'sad', 14, 1403, 695475, '9633251152', '11', '76', 1),
(6, 'sfdsdf', 'sdf', 1, 101, 693251, '9633251162', '11.255496829214257', '75.79329608756255', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `Sno` int(50) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Sfor` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`Sno`, `Sname`, `Sfor`, `status`) VALUES
(1, 'Fuel Delivery\r\n', 'fuel', 1),
(2, 'Incorrect Fuelling', 'fuel', 1),
(3, 'asdasd', 'mech', 1),
(4, 'xxzczx', 'mech', 1),
(6, 'gfh', 'mech', 1),
(7, 'dfgfgdgd', 'fuel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `state_id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`state_id`, `Name`, `status`) VALUES
(1, 'Andaman & Nicobar', 1),
(2, 'Andhra Pradesh', 1),
(3, 'Arunachal Pradesh', 1),
(4, 'Assam', 1),
(5, 'Bihar', 1),
(6, 'Chandigarh', 1),
(7, 'Chhattisgarh', 1),
(8, 'Dadra & Nagar Haveli', 1),
(9, 'Daman & Diu', 1),
(10, 'Delhi', 1),
(11, 'Goa', 1),
(12, 'Gujarat', 1),
(13, 'Haryana', 1),
(14, 'Himachal Pradesh', 1),
(15, 'Jammu & Kashmir', 1),
(16, 'Jharkhand', 1),
(17, 'Karnataka', 1),
(18, 'Kerala', 1),
(19, 'Lakshadweep', 1),
(20, 'Madhya Pradesh', 1),
(21, 'Maharashtra', 1),
(22, 'Manipur', 1),
(23, 'Meghalaya', 1),
(24, 'Mizoram', 1),
(25, 'Nagaland', 1),
(26, 'Orissa', 1),
(27, 'Pondicherry', 1),
(28, 'Punjab', 1),
(29, 'Rajasthan', 1),
(30, 'Sikkim', 1),
(31, 'Tamil Nadu', 1),
(32, 'Tripura', 1),
(33, 'Uttar Pradesh', 1),
(34, 'Uttaranchal', 1),
(35, 'West Bengal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(50) NOT NULL,
  `login_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` int(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `user_latitude` int(50) DEFAULT NULL,
  `user_longitude` int(50) DEFAULT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `login_id`, `name`, `email`, `phone`, `gender`, `dob`, `address`, `pincode`, `state_id`, `city_id`, `user_latitude`, `user_longitude`, `status`) VALUES
(3, 116, 'User 1', 'cust1@xyz.com', '9666325422', 'Female', '2021-04-02', 'Add1', 966632, 13, 1311, NULL, NULL, 1),
(4, 117, 'user 2', 'cust2@xyz.com', '9633229053', 'Female', '2021-04-08', 'Add2', 963322, 12, 1213, NULL, NULL, 1),
(5, 120, 'asdsad', 'asd@sdfcp.cm', '9633651226', 'Male', '2021-04-01', 'asd', 635241, 17, 1716, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `Vid` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `Vregno` varchar(100) NOT NULL,
  `Vtype` varchar(20) NOT NULL,
  `Vcompany` varchar(200) NOT NULL,
  `Vmodel` varchar(200) NOT NULL,
  `Vstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`Vid`, `user_id`, `Vregno`, `Vtype`, `Vcompany`, `Vmodel`, `Vstatus`) VALUES
(4, 3, 'KL-57-E-4562', 'two', 'bike 1', 'XYZ', 0),
(5, 3, 'KL-57-E-4562', 'heavy', 'heavy 1', 'H1', 1),
(6, 3, 'KL-57-E-4562', 'four', 'four 1', 'F1', 1),
(9, 3, 'HP-57-E-4562', 'two', 'xyz', '2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  ADD PRIMARY KEY (`Fid`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_fuel_service`
--
ALTER TABLE `tbl_fuel_service`
  ADD PRIMARY KEY (`Fsno`),
  ADD KEY `tbl_fuel_service_ibfk_1` (`Fid`),
  ADD KEY `tbl_fuel_service_ibfk_2` (`Sno`);

--
-- Indexes for table `tbl_fuel_service_request`
--
ALTER TABLE `tbl_fuel_service_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD PRIMARY KEY (`Hid`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_hos_service_request`
--
ALTER TABLE `tbl_hos_service_request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_mech`
--
ALTER TABLE `tbl_mech`
  ADD PRIMARY KEY (`Mid`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_mech_services`
--
ALTER TABLE `tbl_mech_services`
  ADD PRIMARY KEY (`Msno`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_police`
--
ALTER TABLE `tbl_police`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `login_id` (`login_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD PRIMARY KEY (`Vid`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3214;

--
-- AUTO_INCREMENT for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  MODIFY `Fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_fuel_service`
--
ALTER TABLE `tbl_fuel_service`
  MODIFY `Fsno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_fuel_service_request`
--
ALTER TABLE `tbl_fuel_service_request`
  MODIFY `req_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `Hid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_hos_service_request`
--
ALTER TABLE `tbl_hos_service_request`
  MODIFY `req_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tbl_mech`
--
ALTER TABLE `tbl_mech`
  MODIFY `Mid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mech_services`
--
ALTER TABLE `tbl_mech_services`
  MODIFY `Msno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_police`
--
ALTER TABLE `tbl_police`
  MODIFY `Pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `Sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  MODIFY `Vid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD CONSTRAINT `tbl_cities_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_fuel`
--
ALTER TABLE `tbl_fuel`
  ADD CONSTRAINT `tbl_fuel_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`),
  ADD CONSTRAINT `tbl_fuel_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `tbl_cities` (`city_id`),
  ADD CONSTRAINT `tbl_fuel_ibfk_3` FOREIGN KEY (`state_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD CONSTRAINT `tbl_hospital_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_cities` (`city_id`),
  ADD CONSTRAINT `tbl_hospital_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_mech`
--
ALTER TABLE `tbl_mech`
  ADD CONSTRAINT `tbl_mech_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`),
  ADD CONSTRAINT `tbl_mech_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `tbl_cities` (`city_id`),
  ADD CONSTRAINT `tbl_mech_ibfk_3` FOREIGN KEY (`state_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD CONSTRAINT `tbl_otp_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`);

--
-- Constraints for table `tbl_police`
--
ALTER TABLE `tbl_police`
  ADD CONSTRAINT `tbl_police_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_cities` (`city_id`),
  ADD CONSTRAINT `tbl_police_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `tbl_login` (`login_id`),
  ADD CONSTRAINT `tbl_user_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `tbl_cities` (`city_id`),
  ADD CONSTRAINT `tbl_user_ibfk_3` FOREIGN KEY (`state_id`) REFERENCES `tbl_states` (`state_id`);

--
-- Constraints for table `tbl_vehicle`
--
ALTER TABLE `tbl_vehicle`
  ADD CONSTRAINT `tbl_vehicle_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
