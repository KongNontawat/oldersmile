-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 12:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oldersmile`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ad_body` text NOT NULL,
  `ad_link` text NOT NULL,
  `ad_image` varchar(60) NOT NULL,
  `ad_point` int(11) NOT NULL,
  `ad_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`ad_id`, `user_id`, `cat_id`, `ad_body`, `ad_link`, `ad_image`, `ad_point`, `ad_status`) VALUES
(18, 1, 5, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', 'f540eb85e28d36fdd3bdefd77ee7cec1.png', 10, 1),
(19, 1, 5, 'เปิดแล้ว!! วันนี้คลินิกหมอเทพ รักษาทุกโรค', 'https://shopee.co.th/', 'e77ecf4332c96581622163bffb1297b5.png', 10, 1),
(20, 1, 6, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', '39ba008ec30d060d5dbf08f9b01cd869.png', 9, 1),
(21, 1, 6, 'หมดปัญหา ปวดตามร่างกาย\r\nยาสมุนไพร บำรุงกระดูก ตรายา miniheart!!', 'https://shopee.co.th/', '261d95309de729728d6f3e5e72750e62.png', 10, 1),
(22, 1, 7, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', 'a6b6b89f3b5e471358a509d634e09563.png', 10, 1),
(23, 1, 7, 'สั่งเลย!! เมอร์เมด น้ำเต้าหู้สด ทำจาก ถั่วเหลือง จากธรรมชาติ 100%', 'https://shopee.co.th/', '0f309e77895d0e40922c07409ec12c25.png', 10, 1),
(28, 7, 5, 'Banana Fit', 'https://shopee.co.th/', 'a06bad983302a4e53a39ee9fc81f08d5.png', 10, 1),
(29, 1, 14, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', '7f464312c4a00bdff8f79695a04e2bc9.png', 9, 1),
(30, 1, 14, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', '80ac75a376f16023173d3784fd74c2fe.png', 8, 1),
(31, 1, 15, 'หมดปัญหา ปวดตามร่างกาย ยาสมุนไพร บำรุงกระดูก ตรายา miniheart!!', 'https://shopee.co.th/', '9dc8f1d4aee2ec5a1544f383f28bb923.png', 10, 1),
(32, 1, 15, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', '5b6c57dd699c9b3f10f498ba76042445.png', 10, 1),
(33, 1, 17, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', 'f5dd25030a1ef59fc87ac63ce525b725.png', 9, 1),
(34, 1, 16, 'ซาร่า บรรเทาปวดลดไข้', 'https://shopee.co.th/', '53ec677825fc399802a29c58f5262067.png', 9, 1),
(35, 1, 16, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', '9903e6b58c2a672d75b40ea8c0a4f850.png', 10, 1),
(36, 1, 18, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', '9f283194fb1d373e385fe3a7e47b10f6.png', 10, 1),
(37, 1, 18, 'การออกกำลังกาย ที่ถูกต้องเพื่อสุขภาพที่ดี', 'https://shopee.co.th/', '6d842c855416748bbb09b22e810d8e19.png', 10, 1),
(38, 1, 17, 'Banana Fit', 'https://shopee.co.th/', '616806a278e4c8298e861af58bd489de.png', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'ประชาสัมพันธ์'),
(5, 'รักสุขภาพ'),
(6, 'การออกกำลังกาย'),
(7, 'อาหารเสริม'),
(14, 'OlderSmile'),
(15, 'แบ่งปันความรู้'),
(16, 'แชร์ความรู้รอบตัว'),
(17, 'ความรู้ด้านสุขภาพ'),
(18, 'โรคเบาหวาน');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comm_body` text NOT NULL,
  `comm_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `post_id`, `user_id`, `comm_body`, `comm_created`) VALUES
(6, 15, 7, 'เยี่ยมๆ', '21-12-2022'),
(7, 15, 7, 'น่าสนใจครับ', '21-12-2022'),
(8, 11, 7, 'รอดู', '21-12-2022'),
(9, 9, 7, 'ว้าว', '21-12-2022'),
(11, 15, 8, '>_<', '21-12-2022'),
(12, 10, 19, 'สนุกมากเลยครับ', '21-12-2022'),
(13, 15, 19, '>_<', '21-12-2022'),
(14, 15, 19, '555+', '21-12-2022'),
(15, 10, 11, 'สนุกมากเลย', '21-12-2022'),
(16, 15, 11, '>_<', '21-12-2022'),
(17, 18, 4, '>_<', '21-12-2022'),
(18, 19, 19, '>_<', '21-12-2022'),
(19, 21, 19, '>_<', '21-12-2022'),
(20, 20, 14, '>_<', '21-12-2022'),
(21, 20, 14, 'ขอบคุณค่ะ', '21-12-2022'),
(22, 23, 14, '>_<', '21-12-2022'),
(23, 24, 6, '>_<', '21-12-2022'),
(24, 24, 6, 'ขอบคุณครับ', '21-12-2022'),
(25, 15, 6, 'เม้น จาก iPhone 14 Pro', '21-12-2022'),
(29, 11, 1, '>_<', '21-12-2022'),
(34, 30, 1, '123', '21-12-2022'),
(35, 30, 1, 'test', '21-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `mar_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mar_name` varchar(255) NOT NULL,
  `mar_fname` varchar(255) NOT NULL,
  `mar_email` varchar(60) NOT NULL,
  `mar_tel` varchar(13) NOT NULL,
  `mar_address` text NOT NULL,
  `mar_type` varchar(255) NOT NULL,
  `mar_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`mar_id`, `user_id`, `mar_name`, `mar_fname`, `mar_email`, `mar_tel`, `mar_address`, `mar_type`, `mar_status`) VALUES
(1, 6, 'test test', 'test test', 'test@gmail.com', '0956158702', 'test', 'test', 1),
(2, 7, 'banana fit', 'ภูวดล เสนาะธรรม', 'guy@gmail.com', '09561580752', 'bang fai official', 'ร้านค้าออนไลน์', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `part_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `part_fname` varchar(255) NOT NULL,
  `part_email` varchar(60) NOT NULL,
  `part_address` text NOT NULL,
  `part_detail` text NOT NULL,
  `part_bank_number` varchar(60) NOT NULL,
  `part_bank_acc` varchar(255) NOT NULL,
  `part_bank_name` varchar(60) NOT NULL,
  `part_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`part_id`, `user_id`, `part_fname`, `part_email`, `part_address`, `part_detail`, `part_bank_number`, `part_bank_acc`, `part_bank_name`, `part_status`) VALUES
(1, 5, 'test test', 'test@gmail.com', 'test', '', '', '', '', 1),
(2, 8, 'นนท์ทาวัฒต์ แสงความสว่าง', 'kong@gmail.com', 'Home', 'Programer', '4526254512562', 'นนท์ทาวัฒต์ แสงความสว่าง', 'NEXT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `post_media` varchar(60) NOT NULL,
  `post_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `cat_id`, `post_body`, `post_media`, `post_created`) VALUES
(9, 1, 1, 'สรุปข่าวเด่น', '6d7cc1060352da265b354bbf79c701ca.png', '21-12-2022'),
(10, 1, 1, 'สรุปข่าวกีฬา', 'e359ff4ce9ca2dd2d157d6dab0f9bd44.png', '21-12-2022'),
(11, 1, 1, 'ข่าวสารประจำวัน', '9990f3e038f8f42ba512af4b4169eb07.png', '21-12-2022'),
(15, 20, 14, 'เปิดตัวแอพพลิเคชั่นโอลเดอร์สมาร์ย', 'eb05729cc35fb66d5b3def14889622c8.mp4', '21-12-2022'),
(17, 4, 5, 'เลือกอาหารให้เหมาะสม และพอดี\r\nผู้สูงอายุเป็นวัยที่ร่างกายมีความต้องการต่อการใช้พลังงานลดน้อยลง เนื่องจากมีกิจกรรมที่ทำได้ไม่มากส่งผลให้แต่ละวันใช้พลังงานลดน้อยลง ดังนั้นจำเป็นอย่างยิ่งที่จะต้องควรลดการบริโภคในกลุ่มของแป้ง น้ำตาล และไขมันลง รวมถึงอาหารประเภทของผัด ของทอดที่ใช้น้ำมัน เพื่อลดการสะสมเนื่องจากไม่ถูกดึงนำไปใช้ ให้เน้นอาหารจำพวกโปรตีนจากเนื้อปลามากขึ้น และเปลี่ยนมาใช้อาหารประเภทต้ม นึ่ง ย่าง อบ เป็นหลัก', '0a381ea35635996c77f06009729e5f3a.png', '21-12-2022'),
(18, 4, 14, 'ไม่ละเลยเรื่องยาและการพบแพทย์\r\nผู้ดูแลควรจัดยาให้ง่ายต่อการรับประทาน และใส่ใจให้ผู้สูงอายุรับประทานยาให้ตรงตามที่แพทย์แนะนำ ห้ามหยุดยาเอง และพบแพทย์ตามนัดอย่างเคร่งครัด ควรจดจำยาที่ผู้สูงอายุใช้ให้ได้และแจ้งรายการยาแก่แพทย์ทุกท่าน ทุกโรงพยาบาลที่ไปพบเพื่อป้องกันการจ่ายยาซ้ำซ้อน หรือยาที่ออกฤทธิ์ตีกัน นอกจากนี้เมื่อพบว่าผู้สูงอายุมีอาการเจ็บป่วย เช่น มีไข้ หอบเหนื่อย ซึมลง อาเจียนหรือท้องเสีย ถ้าอาการไม่ดีขึ้นภายใน 1 – 2 วัน ควรรีบพาผู้สูงอายุมาโรงพยาบาล ไม่ควรซื้อยารับประทานเอง\r\n', 'fa5e3dbfd99ef0a5bd3ac4c453c03800.png', '21-12-2022'),
(19, 19, 6, 'ขยับร่างกายวันละนิดชีวิตยืนยาว\r\nการออกกำลังกายช่วยให้อวัยวะในร่างกายแข็งแรงทุกระบบ ตั้งแต่ หัวใจ ปอด ระบบขับถ่าย กระดูกและกล้ามเนื้อ รวมถึงสมอง แต่ผู้สูงอายุหลายท่านไม่กล้าออกกำลังกายเพราะกลัวว่าจะพลัดตกหกล้ม หรือกลัวว่าจะไม่มีแรงออกกำลัง ดังนั้นผู้ดูแลจึงมีบทบาทสำคัญในการช่วยส่งเสริมการออกกำลังกายของผู้สูงวัย เริ่มตั้งแต่จัดกิจกรรมออกกำลังกายที่ปลอดภัยเหมาะสมกับสภาพร่างกายและคอยให้ความช่วยเหลือ เช่น ช่วยพยุงให้ขยับกายบริหารเบาๆ พาเดินหรือเดินแกว่งแขนช้าๆ ช่วยยืดคลายกล้ามเนื้อ ให้ได้ทุกวันอย่างน้อยวันละ 10-20 นาที และค่อยๆเพิ่มความหนักและระยะเวลาขึ้นเรื่อยๆ หากผู้สูงวัยยังแข็งแรงอยู่ ควรออกกำลังกายให้ครบทั้ง 3 รูปแบบ คือ 1.คาร์ดิโอ (เดินเร็ว วิ่งเหยาะๆ ว่ายน้ำ ปั่นจักรยาน แอโรบิคเบาๆ) 2.เล่นเวทเพิ่มความแข็งแรงของกล้ามเนื้อ และ 3.ยืดเหยียดกล้ามเนื้อและฝึกการทรงตัวเพื่อให้สามารถเคลื่อนไหวได้คล่องแคล่ว เพิ่มเติมตามความเหมาะสมครั้งละอย่างน้อย 30 นาที สัปดาห์ละ 3-5 วัน\r\n', 'b11ec43ea3e3214b45a45b7cffbf4f8f.webp', '21-12-2022'),
(20, 7, 17, 'ระวัง!! หลีกเลี่ยงการใช้ยาที่ไม่เหมาะสม =>\r\nผู้ดูแลควบคุมการรับประทานยาของผู้สูงอายุ เนื่องจากผู้สูงอายุบางท่านอาจมีความรู้ความเข้าใจที่ผิด บางรายอาจซื้อยารับประทานเอง รวมถึงรับประทานยาเกินขนาด จากภาวะหลงลืม การรับประทานยาเก่าที่ขาดประสิทธิภาพ หรืออาจก่อผลข้างเคียงรุนแรง รวมถึงอันตรายถึงชีวิตได้ ในกรณีที่ผู้สูงอายุมียารับประทานประจำ อย่าละเลยหรือขาดยา\r\n', '', '21-12-2022'),
(21, 19, 15, 'ดูแลผู้สูงอายุ อย่าให้เกิดอุบัติเหตุ\r\nอุบัติเหตุ การพลัด ตก หกล้ม ในผู้สูงอายุดูเหมือนจะมาคู่กัน เนื่องจากการเคลื่อนไหวที่ไม่สะดวก ประกอบกับสายตาที่มองได้ไม่ชัดเหมือนเช่นแต่ก่อน  ดังนั้นการเลือกกิจกรรม หรือการเตรียมที่อยู่อาศัย ควรมีความเหมาะสม ไม่เสี่ยงต่อการสะดุด หรือลื่นล้ม หมั่นตรวจดูความเรียบร้อยบริเวณบันได จัดบ้านให้เป็นระเบียบ เนื่องจากการเกิดอุบัติเหตุในผู้สูงอายุ ถือเป็นเรื่องใหญ่ อาจเกิดการบาดเจ็บ กระดูกหัก ซึ่งแน่นอนผลที่ตามมาจากอุบัติเหตุไม่ใช่เรื่องดี\r\n', '8aadd6d6f8f86ff1baef1ea9bc854df8.png', '21-12-2022'),
(22, 14, 17, 'มีสภาพแวดล้อมที่ดีและสัมผัสอากาศที่บริสุทธิ์บ้าง\r\nผู้สูงอายุควรอยู่ในสภาพที่เอื้ออำนวยต่อการอยู่อาศัย อากาศต้องถ่ายเท มีอากาศที่สดชื่นเพื่อช่วยปัญหาสุขภาพจิตใจ เนื่องจากผู้สูงอายุโดยส่วนใหญ่ไม่ได้ออกไปไหน เวลาส่วนใหญ่จึงอายุที่บ้าน เพราะฉะนั้นบ้านที่พักอาศัยจึงไม่ควรกลิ่นเหม็นๆ อับหรือสิ่งของล่วงหล่นตามพื้นบ้าน ควรมีการปลูกต้นไม้ ปรับภูมิทัศน์ภายในบ้านให้ปลอดโปร่ง สะอาด\r\n', '9eab3a555ac70677a12d63ca9ea8c28e.webp', '21-12-2022'),
(23, 14, 6, 'หากิจกรรมสร้างสรรค์ให้ผู้สูงอายุทำ\r\nผู้สูงอายุควรมีกิจกรรมทำ หรือช่วยให้ผู้สูงอายุได้มีโอกาสพบปะเพื่อน หรือพูดคุยกับญาติสนิท เพื่อนวัยเดียวกัน โดยอาจจัดกิจกรรมนัดพบ เชิญเพื่อนฝูงญาติมิตร มาสังสรรค์ที่บ้าน หรือพาผู้สูงอายุออกไปเยี่ยมเยียนเพื่อนบ้าง พาไปวัด หรือเข้าชมรมทำกิจกรรมต่างๆ การที่ผู้สูงอายุมีกิจกรรมหรืองานอดิเรกทำจะช่วยชะลอความเสื่อมถอยของระบบประสาทและสมอง อีกทั้งยังลดโอกาสเสี่ยงต่อโรคซึมเศร้าในผู้สูงอายุได้อีกด้วย\r\n', '3840cbb5882d6cdcfb6dd008f1d720ae.jpg', '21-12-2022'),
(24, 6, 18, 'เรื่องกินเรื่องใหญ่\r\nผู้สูงอายุส่วนใหญ่รับประทานอาหารได้น้อยลง เนื่องจากอวัยวะในร่างกายเสื่อมสภาพลง โดยเฉพาะระบบย่อยอาหาร ทำให้ท้องอืดเฟ้อ รวมถึงปัญหาช่องปากและฟัน ส่งผลให้เคี้ยวอาหารได้ไม่ละเอียด นอกจากนี้ผู้สูงวัยมักดื่มน้ำน้อย และขาดการออกกำลังกาย จึงเป็นสาเหตุของอาการท้องผูก ดังนั้นอาหารของผู้สูงอายุจึงควรเป็นอาหารที่อ่อนนุ่ม เคี้ยวง่าย อาจใช้การหั่น สับ หรือการปั่นให้อาหารชิ้นเล็ก รวมถึงปรับเปลี่ยนวิธีปรุงเป็นการนึ่ง ตุ๋น หรือ ต้มอาหารให้นิ่ม\r\n', '70f0a3f382225a936ccf166642ce4da3.jpg', '21-12-2022'),
(25, 6, 16, 'อุปกรณ์ช่วยเดิน\r\nควรใช้อุปกรณ์ช่วยทรงตัวตามที่แพทย์แนะนำ อุปกรณ์ควรมีขนาดเหมาะกับผู้สูงวัยแต่ละท่าน รองเท้าควรเลือกที่มีความนุ่ม กระชับเท้า หุ้มส้นหรือมีสายรัดข้อเท้าไม่ให้หลุดง่าย และพื้นมีดอกยางยึดเกาะได้ดีและไม่ลื่น อย่าอายที่จะต้องใช้อุปกรณ์ช่วยทรงตัวหากต้องไปนอกบ้านหรือเดินไกลๆ เพราะจะช่วยลดอุบัติเหตุ และเป็นผู้ช่วยทำให้ผู้สูงวัยสามารถออกไปใช้ชีวิตด้วยตัวเองได้ ไม่กลายเป็นผู้ป่วยติดเตียง\r\n', '3b90e623b65b4bedd91ba238f680d9e8.jpg', '21-12-2022'),
(26, 6, 5, 'ความสะอาด\r\nภูมิคุ้มกันของผู้สูงอายุไม่ค่อยแข็งแรงมักติดโรคได้ง่าย โดยเฉพาะผู้สูงอายุที่ไม่สามารถดูแลตัวเองได้หรือมีโรคเรื้อรัง เช่น เบาหวาน ผู้ดูแลควรใส่ใจดูแลฟัน เล็บ ผิวหนัง ผมและซอกหลืบต่างๆ ของร่างกาย รวมถึงบริเวณอวัยวะเพศและก้น ไม่ควรปล่อยให้อับชื้นและเกิดการระคายเคือง อาหารก็สำคัญ ไม่ควรนำอาหารค้างคืนมารับประทาน หรือเอายาเก่าๆ ที่อาจหมดอายุมาใช้ ซึ่งจะเป็นอันตรายต่อสุขภาพได้\r\n', '', '21-12-2022'),
(28, 1, 7, 'เรื่องกินเรื่องใหญ่\r\nผู้สูงอายุส่วนใหญ่รับประทานอาหารได้น้อยลง เนื่องจากอวัยวะในร่างกายเสื่อมสภาพลง โดยเฉพาะระบบย่อยอาหาร ทำให้ท้องอืดเฟ้อ รวมถึงปัญหาช่องปากและฟัน ส่งผลให้เคี้ยวอาหารได้ไม่ละเอียด นอกจากนี้ผู้สูงวัยมักดื่มน้ำน้อย และขาดการออกกำลังกาย จึงเป็นสาเหตุของอาการท้องผูก ดังนั้นอาหารของผู้สูงอายุจึงควรเป็นอาหารที่อ่อนนุ่ม เคี้ยวง่าย อาจใช้การหั่น สับ หรือการปั่นให้อาหารชิ้นเล็ก รวมถึงปรับเปลี่ยนวิธีปรุงเป็นการนึ่ง ตุ๋น หรือ ต้มอาหารให้นิ่ม\r\n', '', '21-12-2022'),
(30, 20, 1, 'ทรีปเที่ยวเป็นครอบครัว', 'f2c53a42c94d42ec985f387f3a7ffdcd.png', '21-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_like` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`post_id`, `user_id`, `post_like`) VALUES
(15, 7, 1),
(10, 7, 1),
(9, 7, 1),
(15, 1, 1),
(11, 1, 1),
(10, 8, 1),
(11, 19, 1),
(10, 19, 1),
(9, 19, 1),
(15, 19, 1),
(15, 11, 1),
(10, 11, 1),
(18, 4, 1),
(19, 19, 1),
(21, 19, 1),
(21, 14, 1),
(20, 14, 1),
(23, 14, 1),
(24, 6, 1),
(26, 6, 1),
(10, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ques_id` int(11) NOT NULL,
  `ques_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques_id`, `ques_body`) VALUES
(12, 'การออกแบบเว็บไซต์ มีความเหมาะสมและสวยงาม'),
(13, 'การจัดรูปแบบเว็บไซต์ มีความง่ายต่อการอ่าน และใช้งาน'),
(14, 'ปริมาณเนื้อหา มีเพียงพอ ต่อความต้องการ'),
(15, 'การประชาสัมพันธ์ ข่าวสาร รูปภาพ มีความเหมาะสม และ น่าสนใจ'),
(16, 'การจัดหมวดหมู่ ง่ายต่อการ ค้นหา และทำความเข้าใจ');

-- --------------------------------------------------------

--
-- Table structure for table `ques_answer`
--

CREATE TABLE `ques_answer` (
  `ques_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ques_answer` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ques_answer`
--

INSERT INTO `ques_answer` (`ques_id`, `user_id`, `ques_answer`) VALUES
(12, 5, 5),
(13, 5, 5),
(14, 5, 3),
(15, 5, 1),
(16, 5, 1),
(12, 7, 4),
(13, 7, 5),
(14, 7, 4),
(15, 7, 1),
(16, 7, 3),
(12, 7, 5),
(13, 7, 3),
(14, 7, 1),
(15, 7, 5),
(16, 7, 5),
(12, 8, 5),
(13, 8, 3),
(14, 8, 2),
(15, 8, 2),
(16, 8, 3),
(12, 11, 5),
(13, 11, 4),
(14, 11, 2),
(15, 11, 1),
(16, 11, 1),
(12, 11, 5),
(13, 11, 1),
(14, 11, 4),
(15, 11, 1),
(16, 11, 3),
(12, 14, 5),
(13, 14, 3),
(14, 14, 3),
(15, 14, 2),
(16, 14, 2),
(12, 21, 5),
(13, 21, 1),
(14, 21, 2),
(15, 21, 3),
(16, 21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_gender` varchar(5) NOT NULL,
  `user_dob` varchar(20) NOT NULL,
  `user_tel` varchar(13) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `user_wallet` decimal(10,2) NOT NULL,
  `user_image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_gender`, `user_dob`, `user_tel`, `user_pass`, `user_role`, `user_wallet`, `user_image`) VALUES
(1, 'admin', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'admin', '2508710.00', 'd14fde21a0ce3d6a270a51a0c65fd593.png'),
(4, 'market', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'market', '500.00', 'ddb960b847cd036c593ca236d9473bea.png'),
(5, 'user', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '4b228ce2d8337cdb35412f3ddabc0e7a.png'),
(6, 'fiws', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'market', '0.30', 'cb89f527fd3b57b7f330b88dd862a2e5.png'),
(7, 'guy', 'ชาย', '2022-12-01', '065465465465', '202cb962ac59075b964b07152d234b70', 'market', '1490.00', 'caa1d823d10cc05015d144b813932071.png'),
(8, 'kong', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', 'a3d159beaafe51dad2cf116159bf711c.png'),
(11, 'aom', 'หญิง', '2022-12-21', '0956158702', '202cb962ac59075b964b07152d234b70', 'partner', '0.00', '08cc99738b8665e723321f69b7689e0d.png'),
(12, 'yam', 'หญิง', '2022-12-23', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '34aa706f00f2bdd312ab7a6709f51362.png'),
(13, 'fay', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '9e17f1fb3c124215069c786f828e283f.png'),
(14, 'my', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'partner', '0.60', '5cee76151c95ca71cc838b1b261dac02.png'),
(15, 'jonee', 'หญิง', '2022-12-21', '0956158702', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '37da9f27a37b3967ccb8d4201a893878.png'),
(16, 'jenny', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', 'd6f914ed620ada2feff71009c83aee51.png'),
(17, 'gift', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '49c84faf9ac1f4e9ff62c57fbe970217.png'),
(19, 'leo', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'market', '0.00', '53a3fc62d6b7f66b3ca4eb1cc8671efb.png'),
(20, 'OlderSmile Official', 'ชาย', '2022-12-01', '0644870915', '202cb962ac59075b964b07152d234b70', 'admin', '0.90', 'a77a56385bca4927109c790e0d6b2e0f.png'),
(21, 'inwzaa', 'ชาย', '2022-12-01', '0644870915', '202cb962ac59075b964b07152d234b70', 'user', '0.00', 'a8ae5a43f172e6d9e17866540469bc03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_cat`
--

CREATE TABLE `user_cat` (
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_cat`
--

INSERT INTO `user_cat` (`user_id`, `cat_id`) VALUES
(4, 7),
(1, 5),
(21, 5),
(21, 15),
(21, 16),
(21, 18),
(20, 14),
(8, 7),
(8, 14),
(8, 15),
(8, 16);

-- --------------------------------------------------------

--
-- Table structure for table `view_post`
--

CREATE TABLE `view_post` (
  `view_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `view` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `view_post`
--

INSERT INTO `view_post` (`view_id`, `post_id`, `user_id`, `view`) VALUES
(1, 15, 5, 1),
(2, 15, 7, 1),
(3, 11, 7, 1),
(4, 9, 7, 1),
(5, 11, 6, 1),
(8, 11, 1, 1),
(10, 10, 8, 1),
(11, 15, 8, 1),
(12, 11, 8, 1),
(14, 10, 19, 1),
(15, 15, 19, 1),
(16, 10, 11, 1),
(17, 15, 11, 1),
(18, 15, 20, 1),
(19, 17, 4, 1),
(20, 18, 4, 1),
(21, 18, 19, 1),
(22, 17, 19, 1),
(23, 19, 19, 1),
(24, 21, 19, 1),
(25, 20, 7, 1),
(26, 20, 14, 1),
(27, 23, 14, 1),
(28, 24, 6, 1),
(29, 25, 6, 1),
(30, 23, 6, 1),
(31, 22, 6, 1),
(32, 9, 1, 1),
(33, 24, 1, 1),
(34, 26, 6, 1),
(35, 20, 6, 1),
(36, 19, 6, 1),
(37, 18, 6, 1),
(38, 17, 6, 1),
(39, 15, 6, 1),
(40, 21, 6, 1),
(41, 10, 6, 1),
(42, 9, 6, 1),
(43, 26, 8, 1),
(45, 25, 8, 1),
(47, 30, 1, 1),
(48, 28, 8, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `ad_user` (`user_id`),
  ADD KEY `ad_cat` (`cat_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `comm_post` (`post_id`),
  ADD KEY `comm_user` (`user_id`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`mar_id`),
  ADD KEY `mar_user` (`user_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `part_user` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_user` (`user_id`),
  ADD KEY `post_cat` (`cat_id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD KEY `like_post` (`post_id`),
  ADD KEY `like_user` (`user_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `ques_answer`
--
ALTER TABLE `ques_answer`
  ADD KEY `answer_ques` (`ques_id`),
  ADD KEY `answer_user` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_cat`
--
ALTER TABLE `user_cat`
  ADD KEY `cat_user` (`user_id`),
  ADD KEY `cat_cat` (`cat_id`);

--
-- Indexes for table `view_post`
--
ALTER TABLE `view_post`
  ADD PRIMARY KEY (`view_id`),
  ADD KEY `view_post` (`post_id`),
  ADD KEY `view_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `mar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `view_post`
--
ALTER TABLE `view_post`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `ad_cat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ad_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comm_post` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `mar_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `part_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_cat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `like_post` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `like_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ques_answer`
--
ALTER TABLE `ques_answer`
  ADD CONSTRAINT `answer_ques` FOREIGN KEY (`ques_id`) REFERENCES `question` (`ques_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_cat`
--
ALTER TABLE `user_cat`
  ADD CONSTRAINT `cat_cat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cat_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `view_post`
--
ALTER TABLE `view_post`
  ADD CONSTRAINT `view_post` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `view_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
