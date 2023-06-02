-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2023 at 11:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpoly_teacher_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `access_token` text DEFAULT NULL,
  `access` int(11) NOT NULL DEFAULT 0,
  `status` enum('1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `access_token`, `access`, `status`) VALUES
(1, 'fpolyteachertool@gmail.com', 'ya29.a0AWY7CknExxq1Xb1X6zBSJ2fkA0m-dHNYunoGH2aCxbddCsbu--I976hAFuqyyU5tbf2mH6bXdqfMUBXwW_Geo_On5deRj6amHDVHzp84HbkBwbrCGrVZgbtqyx2Vlg3QE7uZZ4b65ZVIKYEiSCT6HGROVl-OaCgYKAfQSAQ8SFQG1tDrpmtxLgweMVkwp_ybOQojxDQ0163', 999, '2');

-- --------------------------------------------------------

--
-- Table structure for table `co_so`
--

CREATE TABLE `co_so` (
  `id_coso` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  `ten_coso` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `co_so`
--

INSERT INTO `co_so` (`id_coso`, `value`, `ten_coso`) VALUES
(1, 'ph', 'FPT Polytechnic Hà Nội'),
(2, 'pd', 'FPT Polytechnic Đà Nẵng'),
(3, 'ps', 'FPT Polytechnic Hồ Chí Minh'),
(4, 'pk', 'FPT Polytechnic Tây Nguyên'),
(5, 'ho', 'FPT Polytechnic HO'),
(6, 'pc', 'FPT Polytechnic Cần Thơ'),
(7, 'ht', 'FPT Polytechnic HiTech'),
(8, 'pp', 'FPT Polytechnic Hải Phòng'),
(9, 'th', 'FPT PTCĐ Hà Nội'),
(10, 'ts', 'FPT PTCĐ Hồ Chí Minh'),
(11, 'td', 'FPT PTCĐ Đà Nẵng'),
(12, 'tc', 'FPT PTCĐ Cần Thơ'),
(13, 'tk', 'FPT PTCĐ Tây Nguyên'),
(14, 'tp', 'FPT PTCĐ Hải Phòng'),
(15, 'tt', 'FPT PTCĐ Huế'),
(17, 'tg', 'FPT PTCĐ Bắc Giang'),
(18, 'ti', 'FPT PTCĐ Bình Định'),
(19, 'tu', 'FPT PTCĐ Thái Nguyên');

-- --------------------------------------------------------

--
-- Table structure for table `diem_sv`
--

CREATE TABLE `diem_sv` (
  `id` int(11) NOT NULL,
  `mssv` varchar(10) NOT NULL,
  `ho_ten` varchar(225) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `thongtin_sv` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `id_mon` int(11) NOT NULL,
  `id_lop` int(11) NOT NULL,
  `array_diem` longtext NOT NULL,
  `nhan_xet` text DEFAULT NULL,
  `phan_loai` enum('null','gioi','yeu') DEFAULT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diem_sv`
--

INSERT INTO `diem_sv` (`id`, `mssv`, `ho_ten`, `sdt`, `email`, `thongtin_sv`, `id_mon`, `id_lop`, `array_diem`, `nhan_xet`, `phan_loai`, `id_teacher`) VALUES
(1708, 'PS19962', 'Phạm Đức Anh', '357643177', 'anhpdps19962@fpt.edu.vn', '[1,\"PS19962\",\"Ph\\u1ea1m \\u0110\\u1ee9c Anh\",\"anhpdps19962@fpt.edu.vn\",357643177]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', '', NULL, 19),
(1709, 'PS19516', 'Nguyễn Lê Phương Nam', '', 'namnlpps19516@fpt.edu.vn', '[2,\"PS19516\",\"Nguy\\u1ec5n L\\u00ea Ph\\u01b0\\u01a1ng Nam\",\"namnlpps19516@fpt.edu.vn\",null]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":\"1\",\"Q8\":null}', '', NULL, 19),
(1710, 'PS19721', 'Nguyễn Minh Tuấn', '917980464', 'tuannmps19721@fpt.edu.vn', '[3,\"PS19721\",\"Nguy\\u1ec5n Minh Tu\\u1ea5n\",\"tuannmps19721@fpt.edu.vn\",917980464]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', '', NULL, 19),
(1711, 'PS19280', 'Cao Văn Tuấn', '362354902', 'tuancvps19280@fpt.edu.vn', '[4,\"PS19280\",\"Cao V\\u0103n Tu\\u1ea5n\",\"tuancvps19280@fpt.edu.vn\",362354902]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1712, 'PS19414', 'Trần Thanh Trường', '964229032', 'truongttps19414@fpt.edu.vn', '[5,\"PS19414\",\"Tr\\u1ea7n Thanh Tr\\u01b0\\u1eddng\",\"truongttps19414@fpt.edu.vn\",964229032]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1713, 'PS19506', 'Trần Hữu Trí', '383443006', 'trithps19506@fpt.edu.vn', '[6,\"PS19506\",\"Tr\\u1ea7n H\\u1eefu Tr\\u00ed\",\"trithps19506@fpt.edu.vn\",383443006]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1714, 'PS19521', 'Nguyễn Ngọc Thanh Thúy', '', 'thuynntps19521@fpt.edu.vn', '[7,\"PS19521\",\"Nguy\\u1ec5n Ng\\u1ecdc Thanh Th\\u00fay\",\"thuynntps19521@fpt.edu.vn\",null]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1715, 'PS17665', 'Đặng Nguyễn Minh Tấn', '703426547', 'tandnmps17665@fpt.edu.vn', '[8,\"PS17665\",\"\\u0110\\u1eb7ng Nguy\\u1ec5n Minh T\\u1ea5n\",\"tandnmps17665@fpt.edu.vn\",703426547]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1716, 'PS19517', 'Nguyễn Bảo Quốc', '349158824', 'quocnbps19517@fpt.edu.vn', '[9,\"PS19517\",\"Nguy\\u1ec5n B\\u1ea3o Qu\\u1ed1c\",\"quocnbps19517@fpt.edu.vn\",349158824]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1717, 'PS17863', 'Lê Trần Duy Quang', '933172660', 'quangltdps17863@fpt.edu.vn', '[10,\"PS17863\",\"L\\u00ea Tr\\u1ea7n Duy Quang\",\"quangltdps17863@fpt.edu.vn\",933172660]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1718, 'PS19413', 'Khổng Minh Phúc', '934345235', 'phuckmps19413@fpt.edu.vn', '[11,\"PS19413\",\"Kh\\u1ed5ng Minh Ph\\u00fac\",\"phuckmps19413@fpt.edu.vn\",934345235]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1719, 'PS16161', 'Nguyễn Mạnh Nhựt', '374700663', 'nhutnmps16161@fpt.edu.vn', '[12,\"PS16161\",\"Nguy\\u1ec5n M\\u1ea1nh Nh\\u1ef1t\",\"nhutnmps16161@fpt.edu.vn\",374700663]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1720, 'PS19587', 'Vũ Thế Mạnh', '945291577', 'manhvtps19587@fpt.edu.vn', '[13,\"PS19587\",\"V\\u0169 Th\\u1ebf M\\u1ea1nh\",\"manhvtps19587@fpt.edu.vn\",945291577]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1721, 'PS16441', 'Phan Tiến Bách', '382303243', 'bachptps16441@fpt.edu.vn', '[14,\"PS16441\",\"Phan Ti\\u1ebfn B\\u00e1ch\",\"bachptps16441@fpt.edu.vn\",382303243]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1722, 'PS16119', 'Danh Bảo Lượng', '946664669', 'luongdbps16119@fpt.edu.vn', '[15,\"PS16119\",\"Danh B\\u1ea3o L\\u01b0\\u1ee3ng\",\"luongdbps16119@fpt.edu.vn\",946664669]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1723, 'PS19740', 'Phạm Thiên Long', '373118242', 'longptps19740@fpt.edu.vn', '[16,\"PS19740\",\"Ph\\u1ea1m Thi\\u00ean Long\",\"longptps19740@fpt.edu.vn\",373118242]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1724, 'PS16018', 'Nguyễn Trung Khiêm', '377800522', 'khiemntps16018@fpt.edu.vn', '[17,\"PS16018\",\"Nguy\\u1ec5n Trung Khi\\u00eam\",\"khiemntps16018@fpt.edu.vn\",377800522]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1725, 'PS19843', 'Nguyễn Nhật Khánh', '977705672', 'khanhnnps19843@fpt.edu.vn', '[18,\"PS19843\",\"Nguy\\u1ec5n Nh\\u1eadt Kh\\u00e1nh\",\"khanhnnps19843@fpt.edu.vn\",977705672]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1726, 'PS16918', 'Nguyễn Quang Huy', '336406274', 'huynqps16918@fpt.edu.vn', '[19,\"PS16918\",\"Nguy\\u1ec5n Quang Huy\",\"huynqps16918@fpt.edu.vn\",336406274]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1727, 'PS17264', 'Hín Đức Quang Huy', '783547508', 'huyhdqps17264@fpt.edu.vn', '[20,\"PS17264\",\"H\\u00edn \\u0110\\u1ee9c Quang Huy\",\"huyhdqps17264@fpt.edu.vn\",783547508]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1728, 'PS18404', 'Vòng Nhật Hòa', '943166208', 'hoavnps18404@fpt.edu.vn', '[21,\"PS18404\",\"V\\u00f2ng Nh\\u1eadt H\\u00f2a\",\"hoavnps18404@fpt.edu.vn\",943166208]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1729, 'PS19550', 'Ngô Quốc Duy', '917914496', 'duynqps19550@fpt.edu.vn', '[22,\"PS19550\",\"Ng\\u00f4 Qu\\u1ed1c Duy\",\"duynqps19550@fpt.edu.vn\",917914496]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1730, 'PS15196', 'Lê Văn Dương', '', 'duonglvps15196@fpt.edu.vn', '[23,\"PS15196\",\"L\\u00ea V\\u0103n D\\u01b0\\u01a1ng\",\"duonglvps15196@fpt.edu.vn\",null]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1731, 'PH18894', 'Trần Thế Cương', '353117498', 'cuongttph18894@fpt.edu.vn', '[24,\"PH18894\",\"Tr\\u1ea7n Th\\u1ebf C\\u01b0\\u01a1ng\",\"cuongttph18894@fpt.edu.vn\",353117498]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1732, 'PS19558', 'Nguyễn Thị Ngọc Bích', '702171517', 'bichntnps19558@fpt.edu.vn', '[25,\"PS19558\",\"Nguy\\u1ec5n Th\\u1ecb Ng\\u1ecdc B\\u00edch\",\"bichntnps19558@fpt.edu.vn\",702171517]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1733, 'PS18278', 'Nguyễn Văn Vỹ', '387723748', 'vynvps18278@fpt.edu.vn', '[26,\"PS18278\",\"Nguy\\u1ec5n V\\u0103n V\\u1ef9\",\"vynvps18278@fpt.edu.vn\",387723748]', 24, 44, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1734, 'PS14603', 'Trần Tiến Anh', '335702367', 'anhttps14603@fpt.edu.vn', '[1,\"PS14603\",\"Tr\\u1ea7n Ti\\u1ebfn Anh\",\"anhttps14603@fpt.edu.vn\",335702367]', 25, 47, '{\"LAB1\":\"1\",\"LAB2\":\"10\",\"LAB3\":\"1\",\"LAB4\":\"2\",\"LAB5\":\"3\",\"LAB6\":\"4\",\"LAB7\":\"5\",\"LAB8\":\"5\",\"G\\u01101\":\"6\",\"G\\u01102\":\"7\",\"G\\u01103\":\"8\",\"THI\":\"6\",\"Q1\":\"3\",\"Q2\":\"1\",\"Q3\":\"2\",\"Q4\":\"3\",\"Q5\":\"4\",\"Q6\":\"5\",\"Q7\":\"5\",\"Q8\":\"2\"}', NULL, 'yeu', 19),
(1735, 'PS14873', 'Lê Xuân Ninh', '889625585', 'ninhlxps14873@fpt.edu.vn', '[2,\"PS14873\",\"L\\u00ea Xu\\u00e2n Ninh\",\"ninhlxps14873@fpt.edu.vn\",889625585]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":\"1\",\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1736, 'PS21179', 'Đỗ Quốc Việt', '325561916', 'vietdqps21179@fpt.edu.vn', '[3,\"PS21179\",\"\\u0110\\u1ed7 Qu\\u1ed1c Vi\\u1ec7t\",\"vietdqps21179@fpt.edu.vn\",325561916]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1737, 'PS20220', 'Võ Đức Khoa Văn', '933418277', 'vanvdkps20220@fpt.edu.vn', '[4,\"PS20220\",\"V\\u00f5 \\u0110\\u1ee9c Khoa V\\u0103n\",\"vanvdkps20220@fpt.edu.vn\",933418277]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1738, 'PS20080', 'Võ Đức Trung', '785386929', 'trungvdps20080@fpt.edu.vn', '[5,\"PS20080\",\"V\\u00f5 \\u0110\\u1ee9c Trung\",\"trungvdps20080@fpt.edu.vn\",785386929]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1739, 'PS20466', 'Nguyễn Huy Thiện', '398465508', 'thiennhps20466@fpt.edu.vn', '[6,\"PS20466\",\"Nguy\\u1ec5n Huy Thi\\u1ec7n\",\"thiennhps20466@fpt.edu.vn\",398465508]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1740, 'PK02697', 'Long Văn Thiện', '363206498', 'thienlvpk02697@fpt.edu.vn', '[7,\"PK02697\",\"Long V\\u0103n Thi\\u1ec7n\",\"thienlvpk02697@fpt.edu.vn\",363206498]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1741, 'PS21640', 'Lê Quốc Thiện', '363008204', 'thienlqps21640@fpt.edu.vn', '[8,\"PS21640\",\"L\\u00ea Qu\\u1ed1c Thi\\u1ec7n\",\"thienlqps21640@fpt.edu.vn\",363008204]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1742, 'PS22915', 'Nguyễn Văn Thảo', '345005746', 'thaonvps22915@fpt.edu.vn', '[9,\"PS22915\",\"Nguy\\u1ec5n V\\u0103n Th\\u1ea3o\",\"thaonvps22915@fpt.edu.vn\",345005746]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1743, 'PS21659', 'Nguyễn Bá Thân', '859715977', 'thannbps21659@fpt.edu.vn', '[10,\"PS21659\",\"Nguy\\u1ec5n B\\u00e1 Th\\u00e2n\",\"thannbps21659@fpt.edu.vn\",859715977]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1744, 'PS21612', 'Nguyễn Văn Thắng', '946318956', 'thangnvps21612@fpt.edu.vn', '[11,\"PS21612\",\"Nguy\\u1ec5n V\\u0103n Th\\u1eafng\",\"thangnvps21612@fpt.edu.vn\",946318956]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1745, 'PS22028', 'Đỗ Văn Quí', '829613815', 'quidvps22028@fpt.edu.vn', '[12,\"PS22028\",\"\\u0110\\u1ed7 V\\u0103n Qu\\u00ed\",\"quidvps22028@fpt.edu.vn\",829613815]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1746, 'PS20093', 'Trần Thiên Phúc', '779750024', 'phucttps20093@fpt.edu.vn', '[13,\"PS20093\",\"Tr\\u1ea7n Thi\\u00ean Ph\\u00fac\",\"phucttps20093@fpt.edu.vn\",779750024]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1747, 'PS21954', 'Lê Nguyễn Hoàng Phúc', '974887269', 'phuclnhps21954@fpt.edu.vn', '[14,\"PS21954\",\"L\\u00ea Nguy\\u1ec5n Ho\\u00e0ng Ph\\u00fac\",\"phuclnhps21954@fpt.edu.vn\",974887269]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1748, 'PS21897', 'Võ Hoàng Phong', '774574055', 'phongvhps21897@fpt.edu.vn', '[15,\"PS21897\",\"V\\u00f5 Ho\\u00e0ng Phong\",\"phongvhps21897@fpt.edu.vn\",774574055]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1749, 'PS25229', 'Phan Võ Trọng Phong', '387800862', 'phongpvtps25229@fpt.edu.vn', '[16,\"PS25229\",\"Phan V\\u00f5 Tr\\u1ecdng Phong\",\"phongpvtps25229@fpt.edu.vn\",387800862]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1750, 'PS20821', 'Trần Văn Minh', '336305149', 'minhtvps20821@fpt.edu.vn', '[17,\"PS20821\",\"Tr\\u1ea7n V\\u0103n Minh\",\"minhtvps20821@fpt.edu.vn\",336305149]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1751, 'PS20006', 'Nguyễn Ngọc Thiên Ân', '338286902', 'annntps20006@fpt.edu.vn', '[18,\"PS20006\",\"Nguy\\u1ec5n Ng\\u1ecdc Thi\\u00ean \\u00c2n\",\"annntps20006@fpt.edu.vn\",338286902]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1752, 'PS21938', 'Đoàn Huỳnh Vũ Luân', '935468857', 'luandhvps21938@fpt.edu.vn', '[19,\"PS21938\",\"\\u0110o\\u00e0n Hu\\u1ef3nh V\\u0169 Lu\\u00e2n\",\"luandhvps21938@fpt.edu.vn\",935468857]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1753, 'PS21861', 'Huỳnh Ngọc Bảo Long', '777663476', 'longhnbps21861@fpt.edu.vn', '[20,\"PS21861\",\"Hu\\u1ef3nh Ng\\u1ecdc B\\u1ea3o Long\",\"longhnbps21861@fpt.edu.vn\",777663476]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1754, 'PS20777', 'Đặng Hoàng Long', '333229858', 'longdhps20777@fpt.edu.vn', '[21,\"PS20777\",\"\\u0110\\u1eb7ng Ho\\u00e0ng Long\",\"longdhps20777@fpt.edu.vn\",333229858]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1755, 'PS20770', 'Trần Đăng Khoa', '909499890', 'khoatdps20770@fpt.edu.vn', '[22,\"PS20770\",\"Tr\\u1ea7n \\u0110\\u0103ng Khoa\",\"khoatdps20770@fpt.edu.vn\",909499890]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1756, 'PS22060', 'Phan Đăng Khoa', '349660485', 'khoapdps22060@fpt.edu.vn', '[23,\"PS22060\",\"Phan \\u0110\\u0103ng Khoa\",\"khoapdps22060@fpt.edu.vn\",349660485]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1757, 'PS21693', 'Võ Đình Kha', '389838883', 'khavdps21693@fpt.edu.vn', '[24,\"PS21693\",\"V\\u00f5 \\u0110\\u00ecnh Kha\",\"khavdps21693@fpt.edu.vn\",389838883]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1758, 'PS20630', 'Nguyễn An Khang', '919792000', 'khangnaps20630@fpt.edu.vn', '[25,\"PS20630\",\"Nguy\\u1ec5n An Khang\",\"khangnaps20630@fpt.edu.vn\",919792000]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1759, 'PS20003', 'Nguyễn Văn Khải', '945268243', 'khainvps20003@fpt.edu.vn', '[26,\"PS20003\",\"Nguy\\u1ec5n V\\u0103n Kh\\u1ea3i\",\"khainvps20003@fpt.edu.vn\",945268243]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1760, 'PS21981', 'Hồ Nhất Huy', '825478781', 'huyhnps21981@fpt.edu.vn', '[27,\"PS21981\",\"H\\u1ed3 Nh\\u1ea5t Huy\",\"huyhnps21981@fpt.edu.vn\",825478781]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1761, 'PS21225', 'Nguyễn Võ Huy Hoàng', '355361930', 'hoangnvhps21225@fpt.edu.vn', '[28,\"PS21225\",\"Nguy\\u1ec5n V\\u00f5 Huy Ho\\u00e0ng\",\"hoangnvhps21225@fpt.edu.vn\",355361930]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1762, 'PS20666', 'Phạm Quốc Duy', '936901022', 'duypqps20666@fpt.edu.vn', '[29,\"PS20666\",\"Ph\\u1ea1m Qu\\u1ed1c Duy\",\"duypqps20666@fpt.edu.vn\",936901022]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1763, 'PS20254', 'Lê Quang Dự', '906769986', 'dulqps20254@fpt.edu.vn', '[30,\"PS20254\",\"L\\u00ea Quang D\\u1ef1\",\"dulqps20254@fpt.edu.vn\",906769986]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1764, 'PS19726', 'Trần Phát Đạt', '392751331', 'dattpps19726@fpt.edu.vn', '[31,\"PS19726\",\"Tr\\u00e2\\u0300n Ph\\u00e1t \\u0110\\u1ea1t\",\"dattpps19726@fpt.edu.vn\",392751331]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1765, 'PS20837', 'Võ Hoài Bảo', '911033753', 'baovhps20837@fpt.edu.vn', '[32,\"PS20837\",\"V\\u00f5 Ho\\u00e0i B\\u1ea3o\",\"baovhps20837@fpt.edu.vn\",911033753]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19),
(1766, 'PS21438', 'Trịnh Việt Long Vũ', '776924706', 'vutvlps21438@fpt.edu.vn', '[33,\"PS21438\",\"Tr\\u1ecbnh Vi\\u1ec7t Long V\\u0169\",\"vutvlps21438@fpt.edu.vn\",776924706]', 25, 47, '{\"LAB1\":null,\"LAB2\":null,\"LAB3\":null,\"LAB4\":null,\"LAB5\":null,\"LAB6\":null,\"LAB7\":null,\"LAB8\":null,\"G\\u01101\":null,\"G\\u01102\":null,\"G\\u01103\":null,\"THI\":null,\"Q1\":null,\"Q2\":null,\"Q3\":null,\"Q4\":null,\"Q5\":null,\"Q6\":null,\"Q7\":null,\"Q8\":null}', NULL, NULL, 19);

-- --------------------------------------------------------

--
-- Table structure for table `hoc_ky`
--

CREATE TABLE `hoc_ky` (
  `id_hocky` int(11) NOT NULL,
  `ten_hocky` varchar(225) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoc_ky`
--

INSERT INTO `hoc_ky` (`id_hocky`, `ten_hocky`, `id_teacher`) VALUES
(32, 'FALL 2022', 19),
(33, 'SUMMER 2022', 19),
(34, 'SPRING 2022', 19);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `id_khoa` int(11) NOT NULL,
  `ten_khoa` varchar(225) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`id_khoa`, `ten_khoa`, `id_teacher`) VALUES
(41, '17.3', 19),
(42, '18.1', 19),
(43, '18.2', 19),
(44, '17.2', 19),
(45, '18.3', 19);

-- --------------------------------------------------------

--
-- Table structure for table `lich_day`
--

CREATE TABLE `lich_day` (
  `id` int(11) NOT NULL,
  `id_hocky` int(11) NOT NULL,
  `id_mon` int(11) NOT NULL,
  `id_lop` int(11) NOT NULL,
  `ca_hoc` int(11) NOT NULL,
  `ngay_hoc` text NOT NULL COMMENT 'vd: thứ 2,4,6 - 3,5,7',
  `phong_hoc` text DEFAULT NULL,
  `so_sv` int(11) DEFAULT NULL,
  `ngay_bat_dau` varchar(225) DEFAULT NULL,
  `ngay_ket_thuc` varchar(255) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '2',
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lich_day`
--

INSERT INTO `lich_day` (`id`, `id_hocky`, `id_mon`, `id_lop`, `ca_hoc`, `ngay_hoc`, `phong_hoc`, `so_sv`, `ngay_bat_dau`, `ngay_ket_thuc`, `ghi_chu`, `status`, `id_teacher`) VALUES
(25, 32, 24, 44, 1, '246', 'T1102', 29, '31-10-2022', '19-12-2022', '', '2', 19),
(26, 32, 23, 45, 2, '246', 'T1018', 36, '31-10-2022', '19-12-2022', '', '2', 19);

-- --------------------------------------------------------

--
-- Table structure for table `lien_ket`
--

CREATE TABLE `lien_ket` (
  `id_lienket` int(11) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `url` text NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lien_ket`
--

INSERT INTO `lien_ket` (`id_lienket`, `ten`, `url`, `mo_ta`, `id_teacher`) VALUES
(97, 'LMS', 'http://hcm-lms.edu.vn', '', 19),
(98, 'Điểm danh AP', 'http://gv.poly.edu.vn', '', 19),
(99, 'Lịch trường', 'https://gv.poly.edu.vn/teacher/activity', '', 19),
(100, 'Lớp của tôi', 'https://gv.poly.edu.vn/teacher/my_class', '', 19);

-- --------------------------------------------------------

--
-- Table structure for table `loai_diem`
--

CREATE TABLE `loai_diem` (
  `id` int(11) NOT NULL,
  `ten_diem` varchar(225) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_diem`
--

INSERT INTO `loai_diem` (`id`, `ten_diem`, `id_teacher`) VALUES
(87, 'LAB1', 19),
(88, 'LAB2', 19),
(89, 'LAB3', 19),
(90, 'LAB4', 19),
(91, 'LAB5', 19),
(92, 'LAB6', 19),
(93, 'LAB7', 19),
(94, 'LAB8', 19),
(95, 'GĐ1', 19),
(96, 'GĐ2', 19),
(97, 'GĐ3', 19),
(98, 'THI', 19),
(99, 'Q1', 19),
(100, 'Q2', 19),
(101, 'Q3', 19),
(102, 'Q4', 19),
(103, 'Q5', 19),
(104, 'Q6', 19),
(105, 'Q7', 19),
(106, 'Q8', 19);

-- --------------------------------------------------------

--
-- Table structure for table `loai_lop`
--

CREATE TABLE `loai_lop` (
  `id_loai` int(11) NOT NULL,
  `ten_lop` varchar(225) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `id_khoa` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai_lop`
--

INSERT INTO `loai_lop` (`id_loai`, `ten_lop`, `mo_ta`, `id_khoa`, `id_teacher`) VALUES
(44, 'WE17201', '', 44, 19),
(45, 'CP18203', '', 43, 19),
(46, 'IT18308', '', 45, 19),
(47, 'WEB17301', '', 41, 19);

-- --------------------------------------------------------

--
-- Table structure for table `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `id_mon` int(11) NOT NULL,
  `ma_mon` varchar(225) NOT NULL,
  `ten_mon` varchar(225) NOT NULL,
  `ghi_chu` text DEFAULT NULL,
  `diem` text NOT NULL,
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mon_hoc`
--

INSERT INTO `mon_hoc` (`id_mon`, `ma_mon`, `ten_mon`, `ghi_chu`, `diem`, `id_teacher`) VALUES
(23, 'WEB2061', 'Lập trình Javscript nâng cao', '', 'LAB1,LAB2,LAB3,LAB4,LAB5,LAB6,LAB7,LAB8,GĐ1,GĐ2,GĐ3,THI,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8', 19),
(24, 'WEB1043', 'Lập trình cơ sở với Javascript', '', 'LAB1,LAB2,LAB3,LAB4,LAB5,LAB6,LAB7,LAB8,GĐ1,GĐ2,GĐ3,THI,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8', 19),
(25, 'WEB2014', 'PHP1', '', 'LAB1,LAB2,LAB3,LAB4,LAB5,LAB6,LAB7,LAB8,GĐ1,GĐ2,GĐ3,THI,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8', 19);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(225) NOT NULL,
  `site_description` text NOT NULL,
  `site_keywords` text NOT NULL,
  `site_logo` varchar(225) NOT NULL,
  `site_name` varchar(225) NOT NULL,
  `favicon` varchar(225) DEFAULT NULL,
  `site_status` enum('1','2') NOT NULL DEFAULT '2',
  `smtp_user` varchar(225) NOT NULL,
  `smtp_pass` varchar(225) NOT NULL,
  `smtp_server` varchar(225) NOT NULL,
  `smtp_port` varchar(225) NOT NULL,
  `smtp_protocol` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `site_description`, `site_keywords`, `site_logo`, `site_name`, `favicon`, `site_status`, `smtp_user`, `smtp_pass`, `smtp_server`, `smtp_port`, `smtp_protocol`) VALUES
(1, 'Fpoly Teacher Tool', 'Fpoly Teacher Tool - Quản lý điểm sinh viên', 'tool,teacher, giao vien poly', 'logo.png', 'Fpoly Teacher Tool', 'favicon.ico', '2', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id_teacher` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` text NOT NULL,
  `register_date` datetime DEFAULT NULL,
  `code_donate` text NOT NULL,
  `id_coso` int(11) DEFAULT NULL COMMENT 'cơ sở đang dạy',
  `status` enum('1','2') NOT NULL DEFAULT '2',
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL COMMENT 'tất cả dữ liệu quản lý của giáo viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id_teacher`, `name`, `email`, `password`, `register_date`, `code_donate`, `id_coso`, `status`, `data`) VALUES
(19, '', 'fpoly@gmail.com', 'YzQyZGNjNDQwZDg2MWU1ZDU3ZTk1ZTMzMGJmNjBmNGI=', NULL, 'ungho19', 3, '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thanh_ngu`
--

CREATE TABLE `thanh_ngu` (
  `id` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '2',
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanh_ngu`
--

INSERT INTO `thanh_ngu` (`id`, `noi_dung`, `status`, `id_teacher`) VALUES
(62, 'Đừng sợ phí công', '2', 19),
(63, 'Dỡ học cho giỏi', '2', 19),
(64, 'Học cho thêm giỏi', '2', 19);

-- --------------------------------------------------------

--
-- Table structure for table `ung_ho`
--

CREATE TABLE `ung_ho` (
  `id` int(11) NOT NULL,
  `tranId` text NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `isAlert` enum('1','2') NOT NULL DEFAULT '1',
  `id_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co_so`
--
ALTER TABLE `co_so`
  ADD PRIMARY KEY (`id_coso`);

--
-- Indexes for table `diem_sv`
--
ALTER TABLE `diem_sv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diem_sv_ibfk_2` (`id_mon`),
  ADD KEY `diem_sv_ibfk_3` (`id_lop`),
  ADD KEY `diem_sv_ibfk_4` (`id_teacher`);

--
-- Indexes for table `hoc_ky`
--
ALTER TABLE `hoc_ky`
  ADD PRIMARY KEY (`id_hocky`),
  ADD KEY `hoc_ky_ibfk_1` (`id_teacher`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`id_khoa`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `lich_day`
--
ALTER TABLE `lich_day`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lich_day_ibfk_1` (`id_hocky`),
  ADD KEY `lich_day_ibfk_2` (`id_mon`),
  ADD KEY `lich_day_ibfk_3` (`id_lop`),
  ADD KEY `lich_day_ibfk_4` (`id_teacher`);

--
-- Indexes for table `lien_ket`
--
ALTER TABLE `lien_ket`
  ADD PRIMARY KEY (`id_lienket`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `loai_diem`
--
ALTER TABLE `loai_diem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_teacher` (`id_teacher`);

--
-- Indexes for table `loai_lop`
--
ALTER TABLE `loai_lop`
  ADD PRIMARY KEY (`id_loai`),
  ADD KEY `loai_lop_ibfk_1` (`id_khoa`),
  ADD KEY `loai_lop_ibfk_2` (`id_teacher`);

--
-- Indexes for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`id_mon`),
  ADD KEY `mon_hoc_ibfk_1` (`id_teacher`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teacher`),
  ADD KEY `teachers_ibfk_1` (`id_coso`);

--
-- Indexes for table `thanh_ngu`
--
ALTER TABLE `thanh_ngu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thanh_ngu_ibfk_1` (`id_teacher`);

--
-- Indexes for table `ung_ho`
--
ALTER TABLE `ung_ho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teacher_donate` (`id_teacher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `co_so`
--
ALTER TABLE `co_so`
  MODIFY `id_coso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `diem_sv`
--
ALTER TABLE `diem_sv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1800;

--
-- AUTO_INCREMENT for table `hoc_ky`
--
ALTER TABLE `hoc_ky`
  MODIFY `id_hocky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `id_khoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `lich_day`
--
ALTER TABLE `lich_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lien_ket`
--
ALTER TABLE `lien_ket`
  MODIFY `id_lienket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `loai_diem`
--
ALTER TABLE `loai_diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `loai_lop`
--
ALTER TABLE `loai_lop`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  MODIFY `id_mon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `thanh_ngu`
--
ALTER TABLE `thanh_ngu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `ung_ho`
--
ALTER TABLE `ung_ho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem_sv`
--
ALTER TABLE `diem_sv`
  ADD CONSTRAINT `diem_sv_ibfk_2` FOREIGN KEY (`id_mon`) REFERENCES `mon_hoc` (`id_mon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diem_sv_ibfk_3` FOREIGN KEY (`id_lop`) REFERENCES `loai_lop` (`id_loai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diem_sv_ibfk_4` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoc_ky`
--
ALTER TABLE `hoc_ky`
  ADD CONSTRAINT `hoc_ky_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `khoa`
--
ALTER TABLE `khoa`
  ADD CONSTRAINT `khoa_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lich_day`
--
ALTER TABLE `lich_day`
  ADD CONSTRAINT `lich_day_ibfk_1` FOREIGN KEY (`id_hocky`) REFERENCES `hoc_ky` (`id_hocky`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lich_day_ibfk_2` FOREIGN KEY (`id_mon`) REFERENCES `mon_hoc` (`id_mon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lich_day_ibfk_3` FOREIGN KEY (`id_lop`) REFERENCES `loai_lop` (`id_loai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lich_day_ibfk_4` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lien_ket`
--
ALTER TABLE `lien_ket`
  ADD CONSTRAINT `lien_ket_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loai_diem`
--
ALTER TABLE `loai_diem`
  ADD CONSTRAINT `loai_diem_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loai_lop`
--
ALTER TABLE `loai_lop`
  ADD CONSTRAINT `loai_lop_ibfk_1` FOREIGN KEY (`id_khoa`) REFERENCES `khoa` (`id_khoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loai_lop_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD CONSTRAINT `mon_hoc_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`id_coso`) REFERENCES `co_so` (`id_coso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thanh_ngu`
--
ALTER TABLE `thanh_ngu`
  ADD CONSTRAINT `thanh_ngu_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ung_ho`
--
ALTER TABLE `ung_ho`
  ADD CONSTRAINT `fk_teacher_donate` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
