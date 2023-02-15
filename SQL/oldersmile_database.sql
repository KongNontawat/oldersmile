-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 09:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`ad_id`, `user_id`, `cat_id`, `ad_body`, `ad_link`, `ad_image`, `ad_point`, `ad_status`) VALUES
(18, 1, 5, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', 'f540eb85e28d36fdd3bdefd77ee7cec1.png', 10, 1),
(19, 1, 5, 'เปิดแล้ว!! วันนี้คลินิกหมอเทพ รักษาทุกโรค', 'https://shopee.co.th/', 'e77ecf4332c96581622163bffb1297b5.png', 10, 1),
(20, 1, 6, 'เปิดรับ สมัครผู้เชี่ยวชาญ เพื่อให้คำปรึกษา ด้านสุขภาพใน แอพพลิเคชั่นของเรา', 'https://shopee.co.th/', '39ba008ec30d060d5dbf08f9b01cd869.png', 8, 1),
(21, 1, 6, 'หมดปัญหา ปวดตามร่างกาย\r\nยาสมุนไพร บำรุงกระดูก ตรายา miniheart!!', 'https://shopee.co.th/', '261d95309de729728d6f3e5e72750e62.png', 9, 1),
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
(38, 1, 17, 'Banana Fit', 'https://shopee.co.th/', '616806a278e4c8298e861af58bd489de.png', 9, 1),
(39, 4, 5, 'สมุนไพร รักษาโรค', 'https://shopee.co.th/', '1b6f50a06eb30958bf0174c86914b6db.png', 250, 0),
(40, 19, 7, 'สินค้าลดราคา 50%', 'https://shopee.co.th/', 'c752c9bf919ced990997f45e5c46d794.jpg', 150, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `post_id`, `user_id`, `comm_body`, `comm_created`) VALUES
(6, 1, 7, 'เยี่ยมๆ', '21-12-2022'),
(7, 1, 7, 'น่าสนใจครับ', '21-12-2022'),
(8, 11, 7, 'รอดู', '21-12-2022'),
(9, 9, 7, 'ว้าว', '21-12-2022'),
(11, 1, 8, '>_<', '21-12-2022'),
(12, 10, 19, 'สนุกมากเลยครับ', '21-12-2022'),
(13, 1, 19, '>_<', '21-12-2022'),
(14, 1, 19, '555+', '21-12-2022'),
(15, 10, 11, 'สนุกมากเลย', '21-12-2022'),
(16, 1, 11, '>_<', '21-12-2022'),
(17, 18, 4, '>_<', '21-12-2022'),
(18, 19, 19, '>_<', '21-12-2022'),
(19, 21, 19, '>_<', '21-12-2022'),
(20, 31, 14, '>_<', '21-12-2022'),
(21, 31, 14, 'ขอบคุณค่ะ', '21-12-2022'),
(22, 23, 14, '>_<', '21-12-2022'),
(23, 24, 6, '>_<', '21-12-2022'),
(24, 24, 6, 'ขอบคุณครับ', '21-12-2022'),
(25, 1, 6, 'เม้น จาก iPhone 14 Pro', '21-12-2022'),
(29, 11, 1, '>_<', '21-12-2022'),
(34, 30, 1, '123', '21-12-2022'),
(35, 30, 1, 'test', '21-12-2022'),
(38, 30, 1, 'testttt', '22-12-2022'),
(39, 30, 1, '3243244', '22-12-2022'),
(43, 30, 1, '343242fdsfsd', '22-12-2022'),
(44, 30, 1, '-=-=-=', '22-12-2022'),
(47, 30, 1, 'rewrwerwer', '22-12-2022'),
(48, 30, 1, 'werwer', '22-12-2022'),
(49, 23, 4, 'test', '27-12-2022'),
(50, 23, 4, 'http://localhost/oldersmile_v3/icon/comment.png', '27-12-2022');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `follower` int(11) NOT NULL,
  `following` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`follower`, `following`) VALUES
(1, 11),
(1, 21),
(1, 6),
(11, 1),
(1, 4);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`mar_id`, `user_id`, `mar_name`, `mar_fname`, `mar_email`, `mar_tel`, `mar_address`, `mar_type`, `mar_status`) VALUES
(1, 6, 'test test', 'test test', 'test@gmail.com', '0956158702', 'test', 'test', 1),
(2, 7, 'banana fit', 'ภูวดล เสนาะธรรม', 'guy@gmail.com', '09561580752', 'bang fai official', 'ร้านค้าออนไลน์', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `message` text NOT NULL,
  `mes_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`sender`, `receiver`, `message`, `mes_created`) VALUES
(8, 11, 'hi', '11:02:23 07-02-2023'),
(8, 11, 'aom', '11:02:25 07-02-2023'),
(11, 8, 'hello', '11:02:06 07-02-2023'),
(11, 8, 'how are you?', '11:02:17 07-02-2023'),
(8, 11, 'sdf', '11:02:53 07-02-2023'),
(8, 11, 'good i\"am find', '11:02:18 07-02-2023'),
(11, 8, 'wefwef', '11:02:39 07-02-2023'),
(11, 8, 'wefwef', '11:02:40 07-02-2023'),
(11, 8, 'wefwef', '11:02:41 07-02-2023'),
(8, 11, 'Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus.', '11:02:34 07-02-2023');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `cat_id`, `post_body`, `post_media`, `post_created`) VALUES
(1, 20, 14, 'เปิดตัวแอพพลิเคชั่นโอลเดอร์สมาร์ย', 'eb05729cc35fb66d5b3def14889622c8.mp4', '21-12-2022'),
(2, 16, 16, 'ปัจจัยใดที่กระตุ้นทำให้เกิดโรคมะเร็ง ?\r\nปัจจัยเสี่ยงที่เป็นตัวกระตุ้นได้แก่ การได้รับรังสีสารเคมี  มีพฤติกรรมการกินอาหารที่ไม่ถูกสุขลักษณะหรือไม่ถูกต้อง  ปัจจัยทางพันธุกรรม  การดำเนินชีวิต และสภาพแวดล้อมความเป็นอยู่และสังคมรอบๆตัวเรา การติดเชื้อบางชนิด ความเครียด ซึ่งปัจจัยต่างๆเหล่านี้กระตุ้นให้เซลล์เกิดความผิดปกติและกลายไปเป็นมะเร็งในที่สุด', '7af0366da16850859f9d7f63b2033770.webp', '14-02-2023'),
(3, 7, 15, 'โรคกรดไหลย้อน (Gastroesophageal Reflux Disease หรือ GERD / Heartburn) – เป็นภาวะที่กรด หรือน้ำย่อยในกระเพาะไหลย้อนกลับมาในหลอดอาหาร จนทำให้เกิดการอักเสบของหลอดอาหาร โดยผู้ป่วยจะรู้สึกแสบร้อนกลางอก เรอเปรี้ยว และคลื่นไส้ รู้สึกจุกเสียดแน่นบริเวณใต้ลิ้นปี่ และรู้สึกเหมือนมีอะไรติดคออยู่ตลอดเวลา มีน้ำรสเปรี้ยว หรือรสขมไหลย้อนขึ้นมาในปาก ในผู้ป่วยที่มีการขย้อนน้ำ และอาหารขึ้นมาขั้นรุนแรง อาจทำให้เกิดการสำลักเข้าไปในปอด จนเกิดอาการปอดอักเสบได้', '81c980eb4b407e36fdfd11f8542df86b.jpg', '14-02-2023'),
(4, 7, 15, 'การฉีดซีเมนต์ (Bone Cement) รักษากระดูกสันหลังแตก หัก และทรุด เป็นทางเลือกสำหรับผู้ป่วยที่ไม่ต้องการผ่าตัด การรักษาด้วยวิธีนี้ประสบความสำเร็จสูงมากและทำให้ผู้ป่วยหายจากอาการปวด สามารถกลับไปมีคุณภาพชีวิตเหมือนเดิมได้\r\n\r\nโรคหรือภาวะที่ทำให้กระดูกสันหลัง แตก หัก ทรุด ได้แก่\r\nโรคกระดูกพรุน\r\nอุบัติเหตุ\r\nตกจากที่สูง\r\nมีเนื้องอกอยู่ภายในกระดูกสันหลัง\r\nจากสาเหตุข้างต้นนี้หากเกิดขึ้นแล้ว ผู้ป่วยบางรายอาจมีอาการปวดมากน้อยตามลำดับความรุนแรงของโรค ในรายที่มีอาการปวดมากจนทนไม่ไหว ควรรีบปรึกษาแพทย์เฉพาะทาง เพื่อลดความเสี่ยงที่จะเกิดภาวะตัวเตี้ยลง หลังค่อม กระดูกสันหลังโกง และกระดูกทับเส้นประสาท', 'acb5395b3707601bab0cc80db83940e7.jpg', '14-02-2023'),
(5, 7, 15, '\r\nยารักษา หมอนรองกระดูกทับเส้นประสาท\r\nรักษาหมอนรองกระดูกสันหลังทับเส้นประสาท กินยาอะไรดี\r\n \r\n\r\nการรักษาโรคหมอนรองกระดูกทับเส้นประสาทด้วยการใช้ยา ต้องประกอบไปด้วยการใช้ยาหลายชนิดเพื่อเสริมการออกฤทธิ์ระหว่างกัน (Synergistic effect) และลดผลข้างเคียง (Side effect) ของการใช้ยาตัวใดตัวหนึ่งในปริมาณที่มากเกินไป\r\n\r\nโดยยาที่ใช้ในการรักษาโรคหมอนรองกระดูกทับเส้นประสาท ประกอบไปด้วยยากลุ่มหลักๆดังนี้\r\n\r\n \r\n\r\n1. NSAIDS (Non-Steroidal anti-inflammatory drugs)\r\nเป็นยาในกลุ่มลดอาการปวดและอาการอักเสบซึ่งไม่ใช่สเตียรอยด์ โดยยากลุ่มนี้มักถูกเลือกเป็นยาหลักกลุ่มแรกๆในการรักษาอาการปวดจากหมอนรองกระดูกทับเส้นประสาท ตัวอย่างของยาในกลุ่มนี้ได้แก่  Aspirin, Iburpofen, Diclofenac, Naproxen, Indomethacin, Meloxicam, Celecoxib (Celebrex), Etoricoxib (Arcoxia) ผลข้างเคียงที่สำคัญของยาในกลุ่มนี้ได้แก่ การกัดกระเพาะอาหารและการขับออกทางไต จึงมีความจำเป็นต้องระวังการใช้ยาในกลุ่มผู้ป่วยที่มีแผลในกระเพาะอาการ กระเพาะอาหารอักเสบ หรือเป็นโรคไต\r\n\r\nโดยยากลุ่ม NSAIDS นี้ยังสามารถแบ่งย่อยออกได้เป็นอีก 2 กลุ่ม ได้แก่\r\n\r\n1.1 NSAIDS กลุ่ม COX-1 Inhibitor ได้แก่ Aspirin, Iburpofen, Diclofenac, Naproxen, Indomethacin ยาในกลุ่มนี้มีผลข้างเคียงในเรื่องการกัดกระเพาะค่อนข้างมาก ดังนั้นผู้ป่วยที่มีแผลในกระเพาะอาการ หรือเป็นโรคกระเพาะอาหารอักเสบอยู่เดิม อาจจำเป็นต้องได้รับยาลดกรดในกระเพาะควบคู่กันไปด้วย\r\n\r\n1.2 NSAIDS กลุ่ม COX-2 Inhibitor ได้แก่ Celecoxib (Celebrex), Etoricoxib (Arcoxia) เป็นยาที่มีฤทธิ์กัดกระเพาะน้อยกว่ายาในกลุ่ม COX-1 Inhibitor แต่อย่างไรก็ตามยาในกลุ่มนี้มีความจำเป็นต้องระมัดระวังการใช้ ในผู้ป่วยที่มีโรคความดันโลหิตสูงที่ควบคุมได้ไม่ดีและผู้ป่วยที่เป็นโรคหลอดเลือดหัวใจตีบ\r\n\r\n \r\n\r\n2. ยาลดอาการปวดจากเส้นประสาท (Neuropathic pain)\r\nยาในกลุ่มนี้ได้แก่ยา Gabapentin, Neurontin และ Pregabalin (Lyrica, Brillior) ยาในกลุ่มนี้ช่วยลดอาการปวดจากโรคหมอนรองกระดูกทับเส้นประสาทได้ค่อนข้างดี เพราะมีฤทธิ์ลดการส่งสัญญาณความปวดจากเส้นประสาทที่โดนกดทับ ส่วนผลข้างเคียงที่พบบ่อยได้แก่อาการง่วง เวียนหัว อ่อนเพลีย แขนขาบวม นอกจากนี้ในผู้ป่วยที่มีการทำงานของไตบกพร่อง จำเป็นต้องมีการปรับลดปริมาณยาที่ใช้ลง ดังนั้นการใช้ยาในกลุ่มนี้จึงควรอยู่ภายใต้การดูแลของแพทย์', '', '14-02-2023'),
(6, 19, 15, 'โรคกระดูกสันหลังทรุด เกิดจากความเสื่อมสภาพของหมอนรองกระดูกสันหลังตามอายุที่มากขึ้น จนทำให้หมอนรองกระดูกสันหลังยุบตัวลงเรื่อย ๆ และกดทับเส้นประสาท หรืออาจมีภาวะหมอนรองกระดูกปลิ้นทับเส้นประสาทได้เช่นกัน สำหรับการรักษาโรคกระดูกสันหลังทรุดนั้นไม่จำเป็นต้องผ่าตัดเสมอไป\r\n\r\nโดยในผู้ป่วยที่อาการไม่รุนแรงสามารถใช้ “การฉีดซีเมนต์” เสริมช่องว่างของกระดูกสันหลังแทนที่เนื้อกระดูกเพื่อลดอาการปวดหลัง ซึ่งจะใช้เวลารักษาประมาณ 20 – 30 นาที เพื่อรอให้ซีเมนต์ที่ฉีดเข้าไปแข็งตัว หลังจากนั้นผู้ป่วยสามารถกลับไปทำกิจกรรมในชีวิตประจำวันได้ตามปกติ แต่ต้องหลีกเลี่ยงการยกของหนักหรือกิจกรรมที่มีแรงกระแทกสูง\r\n\r\nแต่ในผู้ป่วยที่อาการรุนแรง กระดูกสันหลังยุบตัวมากกว่าร้อยละ 80 หรือยุบจนกระดูกยึดติดไปแล้ว รวมถึงผู้ที่มีภาวะเลือดออกง่ายกว่าปกติและติดเชื้อในกระแสเลือด จะไม่สามารถรักษาได้ด้วยการฉีดซีเมนต์\r\n\r\nแพทย์อาจพิจารณาการผ่าตัดใส่อุปกรณ์ค้ำกระดูก หรือผ่าตัดคลายการกดทับเส้นประสาท เพื่อแก้ไขการกดทับเส้นประสาท ก็จะช่วยให้อาการปวดหลังร้าวลงขาหรือแขน ตลอดจนอาการชาและอ่อนแรงหายไป', 'aae5a05fc0579e59acdab24f4f9c9fea.png', '14-02-2023'),
(8, 6, 17, 'โรคความดันโลหิตสูงเป็นสาเหตุสำคัญทำให้มีโอกาสเกิดโรคหลอดเลือดสมองตีบหรือแตก เกิดอาการอัมพฤกษ์ อัมพาต หรือทำให้เกิดโรคกล้ามเนื้อหัวใจขาดเลือด เกิดกล้ามเนื้อหัวใจตาย ทำให้หัวใจวายและเสียชีวิตได้ รวมทั้งทำให้เกิดไตวายเรื้อรัง จนอาจต้องรับการล้างไตได้ จึงถือว่าโรคความดันโลหิตสูงเป็นเหมือน \"ฆาตกรเงียบ\" ที่แฝงอยู่ในตัวผู้ป่วย', '23537f0d4755ba1512180d709553da44.jpg', '14-02-2023'),
(9, 20, 1, 'สรุปข่าวเด่น และสามารถดูข่าวสารเพิ่มเติมได้ที่ www.khaosod.co.th', '6d7cc1060352da265b354bbf79c701ca.png', '21-12-2022'),
(10, 20, 1, 'สรุปข่าวกีฬามันๆ วันนี้ และสามารถดูข่าวสารเพิ่มเติมได้ที่ www.khaosod.co.th/home', 'e359ff4ce9ca2dd2d157d6dab0f9bd44.png', '21-12-2022'),
(11, 20, 1, 'ข่าวสารประจำวัน ที่จะทำให้คุณไม่พลาดเรื่องเด็ดอย่างแน่นอน และสามารถดูข่าวสารเพิ่มเติมได้ที่ www.khaosod.co.th', '9990f3e038f8f42ba512af4b4169eb07.png', '21-12-2022'),
(13, 6, 17, '“ความดันโลหิต” เป็นค่าความดันของกระแสเลือดในหลอดเลือดแดง ซึ่งเกิดจากการสูบฉีดเลือดของหัวใจ โดยที่เมื่อหัวใจบีบตัว เราจะได้ค่าความดันตัวบน และเมื่อหัวใจคลายตัว เราจะได้ค่าความดันตัวล่าง ซึ่งค่าความดันโดยปกติ จะอยู่ที่ 120/80 มิลลิเมตรปรอท\r\n\r\nอาการเตือนเสี่ยงความดันสูง – ความดันต่ำ\r\n\r\nหากวัดความดันโลหิตแล้วพบว่าสูงจนเกินไปหรือต่ำมาก แสดงว่าอาจมีความเสี่ยงภาวะความดันสูงหรือความดันต่ำ\r\n\r\nโรคความดันโลหิตสูง ภัยเงียบต่อหลอดเลือดและหัวใจ\r\n\r\nหากมีค่าความดันซิสโตลี (ค่าความดันตัวบน) มากกว่า 140 มิลลิเมตรปรอท (mm/Hg) หรือ ค่าความดันไดแอสโตลี (ค่าความดันตัวล่าง) มากกว่าหรือเท่ากับ 90 (mm/Hg) โดยวัดในขณะที่ผู้ป่วยอยู่ในสภาวะพัก นั่นหมายถึงคุณกำลังมีอาการของโรคความดันโลหิตสูง\r\n\r\nปวดท้ายทอย ตึงที่ต้นคอ\r\nเวียนศีรษะ\r\nปวดศีรษะตุบๆ ปวดศีรษะเฉียบพลัน\r\nใจสั่น ชีพจรเต้นไม่เป็นจังหวะ\r\nนอนไม่หลับ\r\nมือเท้าชา ตาพร่ามัว\r\nมีภาวะอัมพาต หรือเสียชีวิตฉับพลัน', '', '14-02-2023'),
(14, 16, 16, ' ความดันโลหิตสูง (Hypertension) เป็นหนึ่งในโรคที่คนปัจจุบันเป็นกันมาก และคนส่วนใหญ่ก็ไม่รู้ตัวว่าเป็น แต่หากปล่อยให้เป็นโรคความดันโลหิตสูงไปนาน ๆ อาจนำมาซึ่งโรคร้ายอื่น ๆ ตามมาอีกมากมาย วันนี้กระปุกดอทคอมมีข้อมูลดี ๆ เกี่ยวกับโรคความดันโลหิตสูงมาบอกเพื่อเป็นความรู้กันค่ะ\r\n', '5c3d3cfa2d7a99aef07563bf98c7bda5.jpg', '14-02-2023'),
(15, 11, 6, 'บอดี้เวท (Body Weight) คือ การออกกำลังกายรูปแบบหนึ่งซึ่งใช้น้ำหนักของร่างกายมาเป็นน้ำหนักต้านในการเคลื่อนไหว ทั้งนี้เพื่อให้เกิดการสร้างกล้ามเนื้อแต่ละส่วนของร่างกาย โดยไม่ใช้อุปกรณ์ยกน้ำหนักมาเสริม ทำให้กล้ามเนื้อแข็งแรง กระชับ ได้สัดส่วน และช่วยป้องกันอาการบาดเจ็บจากการเล่นกีฬาประเภทต่างๆ', '', '14-02-2023'),
(16, 6, 18, 'เบาหวาน…สถิติสูงขึ้นอย่างน่ากลัว\r\nพบสถิติจำนวนผู้ป่วยโรคเบาหวานได้เพิ่มมากขึ้นในแต่ละปี โดยสมาพันธ์เบาหวานนานาชาติ รายงานว่าในปี พ.ศ. 2558 ผู้ป่วยโรคเบาหวานทั่วโลกมีจำนวน 415 ล้านคน และเพิ่มขึ้นเป็น 642 ล้านคนในปี พ.ศ. 2583 ขณะที่ไทยมีผู้ป่วยเบาหวานเฉลี่ยเพิ่มขึ้นปีละ 2 แสนคน เสียชีวิตปีละ 8,000 คน และประชากร 1 ใน 11 คนทั่วโลกเป็นเบาหวานโดยไม่รู้ตัว', '47fae4c93e2be53804e5f1acd3d9eccb.jpg', '14-02-2023'),
(17, 4, 5, 'เลือกอาหารให้เหมาะสม และพอดี\r\nผู้สูงอายุเป็นวัยที่ร่างกายมีความต้องการต่อการใช้พลังงานลดน้อยลง เนื่องจากมีกิจกรรมที่ทำได้ไม่มากส่งผลให้แต่ละวันใช้พลังงานลดน้อยลง ดังนั้นจำเป็นอย่างยิ่งที่จะต้องควรลดการบริโภคในกลุ่มของแป้ง น้ำตาล และไขมันลง รวมถึงอาหารประเภทของผัด ของทอดที่ใช้น้ำมัน เพื่อลดการสะสมเนื่องจากไม่ถูกดึงนำไปใช้ ให้เน้นอาหารจำพวกโปรตีนจากเนื้อปลามากขึ้น และเปลี่ยนมาใช้อาหารประเภทต้ม นึ่ง ย่าง อบ เป็นหลัก', '0a381ea35635996c77f06009729e5f3a.png', '21-12-2022'),
(18, 4, 14, 'ไม่ละเลยเรื่องยาและการพบแพทย์\r\nผู้ดูแลควรจัดยาให้ง่ายต่อการรับประทาน และใส่ใจให้ผู้สูงอายุรับประทานยาให้ตรงตามที่แพทย์แนะนำ ห้ามหยุดยาเอง และพบแพทย์ตามนัดอย่างเคร่งครัด ควรจดจำยาที่ผู้สูงอายุใช้ให้ได้และแจ้งรายการยาแก่แพทย์ทุกท่าน ทุกโรงพยาบาลที่ไปพบเพื่อป้องกันการจ่ายยาซ้ำซ้อน หรือยาที่ออกฤทธิ์ตีกัน นอกจากนี้เมื่อพบว่าผู้สูงอายุมีอาการเจ็บป่วย เช่น มีไข้ หอบเหนื่อย ซึมลง อาเจียนหรือท้องเสีย ถ้าอาการไม่ดีขึ้นภายใน 1 – 2 วัน ควรรีบพาผู้สูงอายุมาโรงพยาบาล ไม่ควรซื้อยารับประทานเอง\r\n', 'fa5e3dbfd99ef0a5bd3ac4c453c03800.png', '21-12-2022'),
(19, 19, 6, 'ขยับร่างกายวันละนิดชีวิตยืนยาว\r\nการออกกำลังกายช่วยให้อวัยวะในร่างกายแข็งแรงทุกระบบ ตั้งแต่ หัวใจ ปอด ระบบขับถ่าย กระดูกและกล้ามเนื้อ รวมถึงสมอง แต่ผู้สูงอายุหลายท่านไม่กล้าออกกำลังกายเพราะกลัวว่าจะพลัดตกหกล้ม หรือกลัวว่าจะไม่มีแรงออกกำลัง ดังนั้นผู้ดูแลจึงมีบทบาทสำคัญในการช่วยส่งเสริมการออกกำลังกายของผู้สูงวัย เริ่มตั้งแต่จัดกิจกรรมออกกำลังกายที่ปลอดภัยเหมาะสมกับสภาพร่างกายและคอยให้ความช่วยเหลือ เช่น ช่วยพยุงให้ขยับกายบริหารเบาๆ พาเดินหรือเดินแกว่งแขนช้าๆ ช่วยยืดคลายกล้ามเนื้อ ให้ได้ทุกวันอย่างน้อยวันละ 10-20 นาที และค่อยๆเพิ่มความหนักและระยะเวลาขึ้นเรื่อยๆ หากผู้สูงวัยยังแข็งแรงอยู่ ควรออกกำลังกายให้ครบทั้ง 3 รูปแบบ คือ 1.คาร์ดิโอ (เดินเร็ว วิ่งเหยาะๆ ว่ายน้ำ ปั่นจักรยาน แอโรบิคเบาๆ) 2.เล่นเวทเพิ่มความแข็งแรงของกล้ามเนื้อ และ 3.ยืดเหยียดกล้ามเนื้อและฝึกการทรงตัวเพื่อให้สามารถเคลื่อนไหวได้คล่องแคล่ว เพิ่มเติมตามความเหมาะสมครั้งละอย่างน้อย 30 นาที สัปดาห์ละ 3-5 วัน\r\n', 'b11ec43ea3e3214b45a45b7cffbf4f8f.webp', '21-12-2022'),
(21, 19, 15, 'ดูแลผู้สูงอายุ อย่าให้เกิดอุบัติเหตุ\r\nอุบัติเหตุ การพลัด ตก หกล้ม ในผู้สูงอายุดูเหมือนจะมาคู่กัน เนื่องจากการเคลื่อนไหวที่ไม่สะดวก ประกอบกับสายตาที่มองได้ไม่ชัดเหมือนเช่นแต่ก่อน  ดังนั้นการเลือกกิจกรรม หรือการเตรียมที่อยู่อาศัย ควรมีความเหมาะสม ไม่เสี่ยงต่อการสะดุด หรือลื่นล้ม หมั่นตรวจดูความเรียบร้อยบริเวณบันได จัดบ้านให้เป็นระเบียบ เนื่องจากการเกิดอุบัติเหตุในผู้สูงอายุ ถือเป็นเรื่องใหญ่ อาจเกิดการบาดเจ็บ กระดูกหัก ซึ่งแน่นอนผลที่ตามมาจากอุบัติเหตุไม่ใช่เรื่องดี\r\n', '8aadd6d6f8f86ff1baef1ea9bc854df8.png', '21-12-2022'),
(22, 14, 17, 'มีสภาพแวดล้อมที่ดีและสัมผัสอากาศที่บริสุทธิ์บ้าง\r\nผู้สูงอายุควรอยู่ในสภาพที่เอื้ออำนวยต่อการอยู่อาศัย อากาศต้องถ่ายเท มีอากาศที่สดชื่นเพื่อช่วยปัญหาสุขภาพจิตใจ เนื่องจากผู้สูงอายุโดยส่วนใหญ่ไม่ได้ออกไปไหน เวลาส่วนใหญ่จึงอายุที่บ้าน เพราะฉะนั้นบ้านที่พักอาศัยจึงไม่ควรกลิ่นเหม็นๆ อับหรือสิ่งของล่วงหล่นตามพื้นบ้าน ควรมีการปลูกต้นไม้ ปรับภูมิทัศน์ภายในบ้านให้ปลอดโปร่ง สะอาด\r\n', '9eab3a555ac70677a12d63ca9ea8c28e.webp', '21-12-2022'),
(23, 14, 6, 'หากิจกรรมสร้างสรรค์ให้ผู้สูงอายุทำ\r\nผู้สูงอายุควรมีกิจกรรมทำ หรือช่วยให้ผู้สูงอายุได้มีโอกาสพบปะเพื่อน หรือพูดคุยกับญาติสนิท เพื่อนวัยเดียวกัน โดยอาจจัดกิจกรรมนัดพบ เชิญเพื่อนฝูงญาติมิตร มาสังสรรค์ที่บ้าน หรือพาผู้สูงอายุออกไปเยี่ยมเยียนเพื่อนบ้าง พาไปวัด หรือเข้าชมรมทำกิจกรรมต่างๆ การที่ผู้สูงอายุมีกิจกรรมหรืองานอดิเรกทำจะช่วยชะลอความเสื่อมถอยของระบบประสาทและสมอง อีกทั้งยังลดโอกาสเสี่ยงต่อโรคซึมเศร้าในผู้สูงอายุได้อีกด้วย\r\n', '3840cbb5882d6cdcfb6dd008f1d720ae.jpg', '21-12-2022'),
(24, 6, 18, 'เรื่องกินเรื่องใหญ่\r\nผู้สูงอายุส่วนใหญ่รับประทานอาหารได้น้อยลง เนื่องจากอวัยวะในร่างกายเสื่อมสภาพลง โดยเฉพาะระบบย่อยอาหาร ทำให้ท้องอืดเฟ้อ รวมถึงปัญหาช่องปากและฟัน ส่งผลให้เคี้ยวอาหารได้ไม่ละเอียด นอกจากนี้ผู้สูงวัยมักดื่มน้ำน้อย และขาดการออกกำลังกาย จึงเป็นสาเหตุของอาการท้องผูก ดังนั้นอาหารของผู้สูงอายุจึงควรเป็นอาหารที่อ่อนนุ่ม เคี้ยวง่าย อาจใช้การหั่น สับ หรือการปั่นให้อาหารชิ้นเล็ก รวมถึงปรับเปลี่ยนวิธีปรุงเป็นการนึ่ง ตุ๋น หรือ ต้มอาหารให้นิ่ม\r\n', '70f0a3f382225a936ccf166642ce4da3.jpg', '21-12-2022'),
(25, 6, 16, 'อุปกรณ์ช่วยเดิน\r\nควรใช้อุปกรณ์ช่วยทรงตัวตามที่แพทย์แนะนำ อุปกรณ์ควรมีขนาดเหมาะกับผู้สูงวัยแต่ละท่าน รองเท้าควรเลือกที่มีความนุ่ม กระชับเท้า หุ้มส้นหรือมีสายรัดข้อเท้าไม่ให้หลุดง่าย และพื้นมีดอกยางยึดเกาะได้ดีและไม่ลื่น อย่าอายที่จะต้องใช้อุปกรณ์ช่วยทรงตัวหากต้องไปนอกบ้านหรือเดินไกลๆ เพราะจะช่วยลดอุบัติเหตุ และเป็นผู้ช่วยทำให้ผู้สูงวัยสามารถออกไปใช้ชีวิตด้วยตัวเองได้ ไม่กลายเป็นผู้ป่วยติดเตียง\r\n', '3b90e623b65b4bedd91ba238f680d9e8.jpg', '21-12-2022'),
(26, 6, 5, 'ความสะอาด\r\nภูมิคุ้มกันของผู้สูงอายุไม่ค่อยแข็งแรงมักติดโรคได้ง่าย โดยเฉพาะผู้สูงอายุที่ไม่สามารถดูแลตัวเองได้หรือมีโรคเรื้อรัง เช่น เบาหวาน ผู้ดูแลควรใส่ใจดูแลฟัน เล็บ ผิวหนัง ผมและซอกหลืบต่างๆ ของร่างกาย รวมถึงบริเวณอวัยวะเพศและก้น ไม่ควรปล่อยให้อับชื้นและเกิดการระคายเคือง อาหารก็สำคัญ ไม่ควรนำอาหารค้างคืนมารับประทาน หรือเอายาเก่าๆ ที่อาจหมดอายุมาใช้ ซึ่งจะเป็นอันตรายต่อสุขภาพได้\r\n', '', '21-12-2022'),
(28, 20, 7, 'เรื่องกินเรื่องใหญ่\r\nผู้สูงอายุส่วนใหญ่รับประทานอาหารได้น้อยลง เนื่องจากอวัยวะในร่างกายเสื่อมสภาพลง โดยเฉพาะระบบย่อยอาหาร ทำให้ท้องอืดเฟ้อ รวมถึงปัญหาช่องปากและฟัน ส่งผลให้เคี้ยวอาหารได้ไม่ละเอียด นอกจากนี้ผู้สูงวัยมักดื่มน้ำน้อย และขาดการออกกำลังกาย จึงเป็นสาเหตุของอาการท้องผูก ดังนั้นอาหารของผู้สูงอายุจึงควรเป็นอาหารที่อ่อนนุ่ม เคี้ยวง่าย อาจใช้การหั่น สับ หรือการปั่นให้อาหารชิ้นเล็ก รวมถึงปรับเปลี่ยนวิธีปรุงเป็นการนึ่ง ตุ๋น หรือ ต้มอาหารให้นิ่ม\r\n', '', '21-12-2022'),
(30, 20, 1, 'โปรโมชั่นดีๆ ทริปเที่ยวเป็นครอบครัว ฟรีที่พักริมทะเล สามารถติดต่อสอบถามได้ที่ 064-487-0915', 'f2c53a42c94d42ec985f387f3a7ffdcd.png', '21-12-2022'),
(31, 7, 17, 'ระวัง!! หลีกเลี่ยงการใช้ยาที่ไม่เหมาะสม =>\r\nผู้ดูแลควบคุมการรับประทานยาของผู้สูงอายุ เนื่องจากผู้สูงอายุบางท่านอาจมีความรู้ความเข้าใจที่ผิด บางรายอาจซื้อยารับประทานเอง รวมถึงรับประทานยาเกินขนาด จากภาวะหลงลืม การรับประทานยาเก่าที่ขาดประสิทธิภาพ หรืออาจก่อผลข้างเคียงรุนแรง รวมถึงอันตรายถึงชีวิตได้ ในกรณีที่ผู้สูงอายุมียารับประทานประจำ อย่าละเลยหรือขาดยา\r\n', '', '21-12-2022'),
(37, 11, 5, 'เทรนด์รักสุขภาพ รับรองได้ว่า คุณจะเห็นผล และอยากปรับไลฟ์สไตล์ในการใช้ชีวิตของคุณมาเป็นสายรักสุขภาพแบบเรามากยิ่งขึ้น\r\nเทรนด์รักสุขภาพ เทรนด์รักสุขภาพ 2022 นั้นเป็นเทรนที่กำลังมาแรง ยิ่งในช่วงยุคโควิคอย่างนี้แล้ว เทรนการใช้ชีวิตในยุคนี้ เริ่มให้ความสำคัญ กับการดูแลสุขภาพ กันมากยิ่งขึ้น สถิติ คนรักสุขภาพ 2563 ยาวมาจนถึง สถิติ คนรักสุขภาพ 2564 ในปีที่แล้วนั้นมีระบุว่า มีผู้สนใจการรักษาสุขภาพร่างกายเพิ่มขึ้น เป็นอย่างมาก อาจจะด้วยผลกระทบจากโรคระบาด covid 2019 ที่ทำให้ผู้คน หันมาดูแลสุขภาพร่างกายตัวเองมากขึ้น และในปีนี้ หลังจากที่ฝ่าฟันวิกฤตมา ถึง 3 ปี ก็เข้าสู่ช่วง ผ่อนปรนมาตรการที่เข้มงวด อย่างเช่น ปิดสถานที่ออกกำลังกาย อย่าง ฟิตเนส สวนสาธารณะ ซึ่งได้กลับมาเปิดให้บริการอีกครั้งแล้วในช่วงนี้ นั่นจึงไม่แปลกใจเลยว่า lifestyle เทรนด์รักสุขภาพ 2565 จะกลับมาบูมยิ่งกว่าเดิมอีกครั้ง ', '8011bcf18c395e9b8db6a5f521644100.jpg', '14-02-2023'),
(38, 14, 6, 'สาวๆ หลายคนอาจจะเคยได้ยินถึงการ ออกกำลังกายแบบบอดี้เวท กันมาบ้างแล้ว ว่ามีส่วนช่วยลดไขมันได้เป็นอย่างดี และยังมีข้อดีมากมายที่ได้จากการออกกำลังกายแบบบอดี้เวท\r\n\r\nวันนี้ Fit Me จึงไม่พลาดที่จะมาแชร์เรื่องราวที่น่าสนใจเกี่ยวกับ บอดี้เวท คืออะไร พร้อมแนะนำ 5 ท่าออกกำลังกายแบบบอดี้เวทสำหรับผู้หญิง ว่าแต่ละท่าทำอย่างไร และส่งผลดีต่อร่างกายอย่างไรกันบ้าง ไปดูกันเลยค่ะ', '8ed303d53ee6d8df406c05206a4f4106.jpg', '14-02-2023'),
(39, 6, 17, 'การป้องกันโรคเบาหวาน\r\nเราสามารถเริ่มดูแลสุขภาพของตัวเองได้ตั้งแต่วันนี้โดยการปฏิบัติตามวิธีการเหล่านี้คือ\r\n\r\nรับประทานอาหารให้ครบ 3 มื้อ หลีกเลี่ยงอาหารรสหวาน มัน เค็มจัด เพิ่มการบริโภคผักผลไม้\r\nควรออกกำลังกายอย่างสม่ำเสมอ และเพียงพอ 150 นาทีต่อสัปดาห์\r\nลดการสูบบุหรี่ และลดการดื่มเครื่องดื่มแอลกอฮอล์\r\nทำจิตใจให้แจ่มใส และพักผ่อนให้เพียงพอ\r\nการเลือกรับประทานสมุนไพรในการดูแลสุขภาพ เช่น สารสกัดจากเห็ดหลินจือแดง', '', '14-02-2023'),
(40, 6, 7, '“ผลิตภัณฑ์อาหารเสริม” หากยึดตามความหมายที่บัญญัติของกรมเภสัชกรรม จะมีความหมายว่า อาหารจากธรรมชาติที่ต้องทานเสริมเป็นพิเศษจากอาหารหลัก 3 มื้อ โดยมีวัตถุประสงค์เพื่อการดูแลสุขภาพ บำรุงร่างกาย เพิ่มพลังงานให้กับร่างกาย ช่วยรักษาโรคต่าง ๆ เพื่อให้ร่างกายมีการเจริญเติบโตได้ตามวัย ช่วยเสริมสารอาหารที่ร่างกายขาดหายไป ช่วยให้ร่างกายแข็งแรงขึ้น', '72d8adf332f91959d7f0e1c23ccaa628.jpg', '14-02-2023');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `like_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_like` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`like_id`, `post_id`, `user_id`, `post_like`) VALUES
(1, 1, 7, 245),
(2, 10, 7, 67),
(3, 9, 7, 34),
(4, 1, 1, 6),
(5, 11, 1, 7),
(6, 10, 8, 8),
(7, 11, 19, 23),
(8, 10, 19, 1),
(9, 9, 19, 1),
(10, 1, 19, 1),
(11, 1, 11, 1),
(12, 10, 11, 1),
(13, 18, 4, 5),
(14, 19, 19, 1),
(15, 21, 19, 45),
(16, 21, 14, 1),
(17, 31, 14, 43),
(18, 23, 14, 12),
(19, 24, 6, 55),
(20, 26, 6, 5),
(21, 10, 1, 1),
(22, 28, 4, 1),
(23, 30, 4, 8),
(24, 30, 1, 1),
(25, 23, 1, 1),
(26, 26, 1, 67),
(27, 24, 1, 86),
(28, 21, 5, 456),
(29, 17, 5, 23),
(30, 26, 5, 17),
(31, 40, 1, 156),
(32, 39, 1, 57),
(33, 38, 1, 34),
(34, 37, 1, 54),
(35, 28, 1, 5),
(36, 25, 1, 23),
(37, 22, 1, 6),
(38, 21, 1, 23),
(39, 19, 1, 12),
(40, 18, 1, 93),
(41, 17, 1, 44),
(42, 15, 1, 86),
(43, 16, 1, 45),
(44, 13, 1, 189),
(45, 8, 1, 175),
(46, 6, 1, 23),
(47, 5, 1, 102),
(48, 4, 1, 23),
(49, 3, 1, 34),
(50, 2, 1, 44);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ques_id` int(11) NOT NULL,
  `ques_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_gender`, `user_dob`, `user_tel`, `user_pass`, `user_role`, `user_wallet`, `user_image`) VALUES
(1, 'admin', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'admin', '2500.00', 'd14fde21a0ce3d6a270a51a0c65fd593.png'),
(4, 'market', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'market', '500.00', 'shop1.png'),
(5, 'user', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '4b228ce2d8337cdb35412f3ddabc0e7a.png'),
(6, 'Nutto Shop', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'market', '0.30', 'shop2.jpg'),
(7, 'Puifai Official', 'ชาย', '2022-12-01', '0654654654', '202cb962ac59075b964b07152d234b70', 'market', '1490.00', 'avatar2.jfif'),
(8, 'kong', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '69.00', 'avatar1.png'),
(11, 'ดร.ชยุตรา ภูงาม', 'หญิง', '2022-12-21', '0956158702', '202cb962ac59075b964b07152d234b70', 'partner', '0.00', '08cc99738b8665e723321f69b7689e0d.png'),
(12, 'Kamonchan ', 'หญิง', '2022-12-23', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '34aa706f00f2bdd312ab7a6709f51362.png'),
(13, 'Niramat Chaichana', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', 'avatar3.jpg'),
(14, 'ดร.อภิลดา วงศ์สุรวัฒนา', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'partner', '1.20', '5cee76151c95ca71cc838b1b261dac02.png'),
(15, 'leo', 'ชาย', '2022-12-21', '0956158702', '202cb962ac59075b964b07152d234b70', 'user', '0.00', 'avatar6.avif'),
(16, 'เบญจมาศ ประเสริญวงศ์', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'partner', '0.00', 'd6f914ed620ada2feff71009c83aee51.png'),
(17, 'อนัญญา สุขทิพย์ ', 'หญิง', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'user', '0.00', '49c84faf9ac1f4e9ff62c57fbe970217.png'),
(19, 'Guner Shop Online', 'ชาย', '2022-12-21', '0956158072', '202cb962ac59075b964b07152d234b70', 'market', '200.00', 'shop4.jpg'),
(20, 'OlderSmile Official', 'ชาย', '2022-12-01', '0644870915', '202cb962ac59075b964b07152d234b70', 'admin', '0.90', 'icon.png'),
(21, 'ชนาพร ตั้งทิพย์', 'ชาย', '2022-12-01', '0644870915', '202cb962ac59075b964b07152d234b70', 'user', '0.00', 'avatar5.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_cat`
--

CREATE TABLE `user_cat` (
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_cat`
--

INSERT INTO `user_cat` (`user_id`, `cat_id`) VALUES
(4, 7),
(21, 5),
(21, 15),
(21, 16),
(21, 18),
(8, 7),
(8, 14),
(8, 15),
(8, 16),
(1, 5),
(1, 15),
(1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `view_post`
--

CREATE TABLE `view_post` (
  `view_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `view` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `view_post`
--

INSERT INTO `view_post` (`view_id`, `post_id`, `user_id`, `view`) VALUES
(1, 1, 5, 1),
(2, 1, 7, 1),
(3, 11, 7, 1),
(4, 9, 7, 1),
(5, 11, 6, 1),
(8, 11, 1, 1),
(10, 10, 8, 1),
(11, 1, 8, 1),
(12, 11, 8, 1),
(14, 10, 19, 1),
(15, 1, 19, 1),
(16, 10, 11, 1),
(17, 1, 11, 1),
(18, 1, 20, 1),
(19, 17, 4, 1),
(20, 18, 4, 1),
(21, 18, 19, 1),
(22, 17, 19, 1),
(23, 19, 19, 1),
(24, 21, 19, 1),
(25, 31, 7, 1),
(26, 31, 14, 1),
(27, 23, 14, 1),
(28, 24, 6, 1),
(29, 25, 6, 1),
(30, 23, 6, 1),
(31, 22, 6, 1),
(32, 9, 1, 1),
(33, 24, 1, 1),
(34, 26, 6, 1),
(35, 31, 6, 1),
(36, 19, 6, 1),
(37, 18, 6, 1),
(38, 17, 6, 1),
(39, 1, 6, 1),
(40, 21, 6, 1),
(41, 10, 6, 1),
(42, 9, 6, 1),
(43, 26, 8, 1),
(45, 25, 8, 1),
(47, 30, 1, 1),
(48, 28, 8, 1),
(49, 30, 8, 1),
(53, 25, 4, 1),
(54, 23, 4, 1),
(55, 25, 1, 1),
(56, 28, 1, 1),
(57, 22, 1, 1),
(58, 26, 1, 1),
(59, 21, 5, 1),
(60, 26, 5, 1),
(61, 19, 5, 1),
(62, 40, 1, 1),
(63, 40, 8, 1);

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
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD KEY `foll_user` (`follower`),
  ADD KEY `foll_user2` (`following`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`mar_id`),
  ADD KEY `mar_user` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD KEY `mes_user1` (`sender`),
  ADD KEY `mes_user2` (`receiver`);

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
  ADD PRIMARY KEY (`like_id`),
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
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `view_post`
--
ALTER TABLE `view_post`
  MODIFY `view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
  ADD CONSTRAINT `com_post` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `com_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `foll_user` FOREIGN KEY (`follower`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foll_user2` FOREIGN KEY (`following`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `mar_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `mes_user1` FOREIGN KEY (`sender`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mes_user2` FOREIGN KEY (`receiver`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `answer_to_ques` FOREIGN KEY (`ques_id`) REFERENCES `question` (`ques_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_cat`
--
ALTER TABLE `user_cat`
  ADD CONSTRAINT `user_cat_cat` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_cat_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
