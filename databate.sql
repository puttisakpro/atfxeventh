-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 07:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atfx`
--

-- --------------------------------------------------------

--
-- Table structure for table `even`
--

CREATE TABLE `even` (
  `ID` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `call` varchar(10) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `IDline` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `IDline` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `monthlyincome` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `exp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`IDline`, `occupation`, `monthlyincome`, `ID`, `lname`, `fname`, `phonenumber`, `exp`) VALUES
('bhg', 'on', '', 1, 'สมชาย', 'มานะ', '119', 'ตำรวจ');

-- --------------------------------------------------------

--
-- Table structure for table `nameeven`
--

CREATE TABLE `nameeven` (
  `ID` int(11) NOT NULL,
  `section` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `nameeven`
--

INSERT INTO `nameeven` (`ID`, `section`, `details`, `pic`, `day`) VALUES
(2, 'Trade Set Up ง่ายๆ ด้วย MT4 Indicators', 'จะดีกว่ามั้ยถ้าเราสามารถใช้เครื่องมือพื้นฐานในโปรแกรมเทรด MT4 สำหรับการสร้างระบบเทรดที่เป็นของเราเอง\r\nเพื่อใช้เป็นอาวุธสำคัญในการเทรดทำกำไรในแบบที่คุณต้องการ✔\r\n.\r\nสิ่งที่คุณจะได้รับจากคลาสนี้ ', '2.jpg', '2022-3-08'),
(3, 'ทำกำไรจากความผันผวนในตลาดคืน Non-Farm By ออหมี', '', '3.jpg', '2022-3-10'),
(4, 'Demand & Supply Zone เพิ่มโอกาสทำกำไรด้วยโซนจิตวิทยา', 'ทำไมราคาขึ้นไปไม่ถึงแนวต้านถึงกลับตัวลง❓ ทำไมราคาลงไปไม่ถึงแนวรับถึงกลับตัวขึ้น❓\r\nสัมมนานี้มีคำตอบกับการเรียนรู้ Demand & Supply Zone โซนจิตวิทยาการเทรดที่เหล่าเทรดเดอร์นิยมใช้ทำกำไรทั้งในระยะสั้นและระยะยาว \r\n', '4.jpg', '2022-3-15'),
(5, 'เข้าใจ Divergence + Convergence ด้วย RSI', 'เรียนรู้วิธีการใช้งาน RSI เครื่องมือพื้นฐานที่หลายคนมองข้ามแต่มากประสิทธิภาพที่ช่วยให้คุณไม่พลาดทุกโอกาสทำกำไร\r\nรวมทั้งเทคนิคการใช้งานอย่างละเอียดเพื่อเป็นตัวช่วยในการวิเคราะห์ราคาหลากหลายรูปแบบ ✅\r\n\r\nสิ่งที่คุณจะได้รับจากคลาสนี้\r\n➡ วิธีการใช้งานเครื่องมือ RSI อย่างละเอียด\r\n➡ การใช้ RSI วิเคราะห์ราคารูปแบบ Divergence เพื่อดูการกลับตัวของราคา \r\n➡ การใช้ RSI วิเคราะห์ราคารูปแบบ Convergence เพื่อดูการ Breakout ของราคา\r\n➡ การประยุกต์ใช้ RSI ร่วมกับกลยุทธ์อื่นๆเพื่อสร้าง Trade Setup', '5.jpg', '2022-3-22'),
(6, ' Basic Elliott Wave พื้นฐานการนับคลื่น', '', '6.jpg', '2022-3-29'),
(7, 'Price Actionx4-Action x1', 'Support&Resistance:บริเวณสำคัญที่มีผลต่อการเทรด ', '7.jpg', '2022-4-05'),
(8, 'Price Actionx4-Action x2 Candle', 'Candle Stick:เรียนรู้นิสัยแท่งเทียน ', '8.jpg', '2022-4-12'),
(9, 'Price Actionx4-Action x3 Chart', 'Pattern:ทำกำไรจากรูปแบบการเคลื่อนที่ของราคา', '9.jpg', '2022-4-19'),
(10, 'Price Actionx4-Action x4 Fibonacci', 'หาจุดเข้าเทรดที่เเม่นยำด้วยเครื่องมือจิตวิทยา ', '10.jpg', '2022-4-26'),
(11, 'ทฤษฎี  Wyckoff Logic ขั้นพื้นฐาน', 'Wyckoff Logic \r\nที่จะพาคุณไปเรียนรู้ถึงแนวคิดของเทรดเดอร์สายเทคนิคในตำนาน Richard Demille Wyckoff \r\n\r\nผู้สร้างทฤษฎีการเทรดที่ได้รับการยอมรับจากเทรดเดอร์ทั่วโลก \r\nพร้อมทั้งนำมาประยุกต์ใช้กับการเทรดในยุคปัจจุบันเพื่อให้การทำกำไรของคุณยั่งยืนมากยิ่งขึ้น ', '11.jpg', '2022-5-03'),
(12, 'เทรดสั้นทันใจด้วย QML Zone', 'เรียนรู้การใช้งาน Quasimodo Level หรือ QML โซนการเทรดยอดฮิตที่เทรดเดอร์ชั้นนำเลือกใช้ทำกำไรในตลาดการเทรด\r\nพร้อมกลยุทธ์การเทรดสั้น ทำกำไรรายวัน ที่มีประสิทธิภาพ ช่วยให้คุณสามารถเก็บกำไรรายวันได้อย่างทันใจ', '12.jpg', '2022-5-10'),
(13, ' Harmonic Pattern Part2 ', 'คลาส Harmonic Pattern ภาค 2 ที่จะพาคุณไปรู้จักกับการใช้งานและการทำกำไรด้วย Pattern ยอดนิยมต่างๆ \r\nพร้อมเก็บตกคลังความรู้จากภาค 1 เพื่อเสริมสร้างกลยุทธ์การเทรดของคุณให้แข็งแกร่งยิ่งขึ้น', '13.jpg', '2022-5-17'),
(14, 'เทรดอุ่นใจปลอดภัยด้วย Money Management', 'เรียนรู้หลักการบริหารเงินทุนอย่างมืออาชีพ จากเทรดเดอร์มืออาชีพ\r\nที่จะช่วยให้คุณรู้และเข้าใจถึงหลักการ MM เพื่อสร้างความปลอดภัยให้กับพอร์ตการลงทุนในอนาคต ', '14.jpg', '2022-5-24'),
(15, 'Darvas Box Theory', '', '15.jpg', '2022-5-31');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `ID` int(11) NOT NULL,
  `pic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`ID`, `pic`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `even`
--
ALTER TABLE `even`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `occupation` (`occupation`),
  ADD UNIQUE KEY `IDline` (`IDline`);
ALTER TABLE `name` ADD FULLTEXT KEY `occupation_2` (`occupation`);
ALTER TABLE `name` ADD FULLTEXT KEY `occupation_3` (`occupation`);

--
-- Indexes for table `nameeven`
--
ALTER TABLE `nameeven`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `even`
--
ALTER TABLE `even`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nameeven`
--
ALTER TABLE `nameeven`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
