-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 05:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `A_idnumber` int(11) NOT NULL,
  `U_id` varchar(11) NOT NULL,
  `A_idsvnumber` varchar(11) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `A_title` varchar(100) NOT NULL,
  `A_objective` text NOT NULL,
  `A_problem` text NOT NULL,
  `A_scope` text NOT NULL,
  `A_field` text NOT NULL,
  `A_software` varchar(100) NOT NULL,
  `A_tools` varchar(100) NOT NULL,
  `A_technique` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `A_status` varchar(100) NOT NULL,
  `A_priority` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `C_count` int(11) NOT NULL,
  `U_id` varchar(11) NOT NULL,
  `A_idsvnumber` varchar(11) NOT NULL,
  `U_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`C_count`, `U_id`, `A_idsvnumber`, `U_name`) VALUES
(1, 'C1', 'L6', 'DR. AL-FAHIM BIN MUBARAK ALI');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `L_name` varchar(100) NOT NULL,
  `L_department` varchar(100) NOT NULL,
  `L_researchgroup` varchar(100) NOT NULL,
  `U_id` varchar(11) NOT NULL,
  `L_status` varchar(100) NOT NULL,
  `L_quota` int(11) NOT NULL,
  `A_idsvnumber` varchar(11) NOT NULL,
  `L_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`L_name`, `L_department`, `L_researchgroup`, `U_id`, `L_status`, `L_quota`, `A_idsvnumber`, `L_count`) VALUES
('CIK AZLINA BINTI ZAINUDDIN', 'FK', 'SE', 'L1', '', 0, 'S1', 1),
('CIK NORANIZA BINTI SAMAT', 'FK', 'SE', 'L2', '', 0, 'S2', 2),
('DR. ABDUL SAHLI BIN FAKHARUDIN', 'FK', 'SE', 'L3', '', 0, 'S3', 3),
('DR. ABDULLAH NASSER MOHAMMED ABDULLAH', 'FK', 'SE', 'L4', '', 0, 'S4', 4),
('DR. AHMAD FIRDAUS BIN ZAINAL ABIDIN', 'FK', 'SE', 'L5', '', 0, 'S5', 5),
('DR. AL-FAHIM BIN MUBARAK ALI', 'FK', 'SE', 'L6', '', 0, 'S6', 6),
('DR. ANIS FARIHAN BINTI MAT RAFFEI', 'FK', 'SE', 'L7', '', 0, 'S7', 7),
('DR. AWANIS BINTI ROMLI', 'FK', 'SE', 'L8', '', 0, 'S8', 8),
('DR. AZLEE BIN ZABIDI', 'FK', 'SE', 'L9', '', 0, 'S9', 9),
('DR. BARIAH BINTI YUSOB', 'FK', 'SE', 'L10', '', 0, 'S10', 10),
('DR. DANAKORN NINCAREAN A/L EH PHON', 'FK', 'SE', 'L11', '', 0, 'S11', 11),
('DR. FAUZIAH BINTI ZAINUDDIN', 'FK', 'SE', 'L12', '', 0, 'S12', 12),
('DR. FERDA ERNAWAN', 'FK', 'SE', 'L13', '', 0, 'S13', 13),
('DR. JAMALUDIN BIN SALLIM', 'FK', 'SE', 'L14', '', 0, 'S14', 14),
('DR. JUNAIDA BINTI SULAIMAN', 'FK', 'SE', 'L15', '', 0, 'S15', 15),
('DR. KOHBALAN A/L MOORTHY', 'FK', 'SE', 'L16', '', 0, 'S16', 16),
('DR. LIEW SIAU CHUIN', 'FK', 'SE', 'L17', '', 0, 'S17', 17),
('DR. LUHUR BAYUAJI', 'FK', 'SE', 'L18', '', 0, 'S18', 18),
('DR. MD SAIFUL AZAD', 'FK', 'SE', 'L19', '', 0, 'S19', 19),
('DR. MOHD ARFIAN BIN ISMAIL', 'FK', 'SE', 'L20', '', 0, 'S20', 20),
('DR. MOHD AZWAN BIN MOHAMAD @ HAMZA', 'FK', 'SE', 'L21', '', 0, 'S21', 21),
('DR. MOHD FAIZAL BIN AB RAZAK', 'FK', 'SE', 'L22', '', 0, 'S22', 22),
('DR. MOHD IZHAM MOHD JAYA', 'FK', 'SE', 'L23', '', 0, 'S23', 23),
('DR. MOHD ZAMRI BIN OSMAN', 'FK', 'SE', 'L24', '', 0, 'S24', 24),
('DR. MRITHA RAMALINGAM', 'FK', 'SE', 'L25', '', 0, 'S25', 25),
('DR. MUHAMMAD NOMANI KABIR', 'FK', 'SE', 'L26', '', 0, 'S26', 26),
('DR. NGAHZAIFA BINTI AB GHANI', 'FK', 'SE', 'L27', '', 0, 'S27', 27),
('DR. NOOR AZIDA BINTI SAHABUDIN.', 'FK', 'SE', 'L28', '', 0, 'S28', 28),
('DR. NOORHUZAIMI @ KARIMAH BINTI MOHD NOOR', 'FK', 'SE', 'L29', '', 0, 'S29', 29),
('DR. NOORLIN BINTI MOHD ALI', 'FK', 'SE', 'L30', '', 0, 'S30', 30),
('DR. NOR SARADATUL AKMAR BINTI ZULKIFLI', 'FK', 'SE', 'L31', '', 0, 'S31', 31),
('DR. NOR SYAHIDATUL NADIAH BINTI ISMAIL', 'FK', 'SE', 'L32', '', 0, 'S32', 32),
('DR. NUR HAFIEZA BINTI ISMAIL', 'FK', 'SE', 'L33', '', 0, 'S33', 33),
('DR. NUR SHAMSIAH BINTI ABDUL RAHMAN', 'FK', 'SE', 'L34', '', 0, 'S34', 34),
('DR. NUR SHAZWANI BINTI KAMARUDIN', 'FK', 'SE', 'L35', '', 0, 'S35', 35),
('DR. RAHMAH BINTI MOKHTAR', 'FK', 'SE', 'L36', '', 0, 'S36', 36),
('DR. ROZLINA BINTI MOHAMED', 'FK', 'SE', 'L37', '', 0, 'S37', 37),
('DR. SALWANA BINTI MOHAMAD @ ASMARA', 'FK', 'SE', 'L38', '', 0, 'S38', 38),
('DR. SURAYA BT. ABU BAKAR', 'FK', 'SE', 'L39', '', 0, 'S39', 39),
('DR. SURYANTI BINTI AWANG', 'FK', 'SE', 'L40', '', 0, 'S40', 40),
('DR. SYAFIQ FAUZI BIN KAMARULZAMAN', 'FK', 'SE', 'L41', '', 0, 'S41', 41),
('DR. SYIFAK BINTI IZHAR HISHAM', 'FK', 'SE', 'L42', '', 0, 'S42', 42),
('DR. TAHA HUSSEIN ALAALDEEN RASSEM', 'FK', 'SE', 'L43', '', 0, 'S43', 43),
('DR. TUTY ASMAWATY BINTI ABDUL KADIR', 'FK', 'SE', 'L44', '', 0, 'S44', 44),
('DR. WAN ISNI SOFIAH BINTI WAN DIN', 'FK', 'SE', 'L45', '', 0, 'S45', 45),
('DR. YUSNITA BINTI MUHAMAD NOOR', 'FK', 'SE', 'L46', '', 0, 'S46', 46),
('DR. ZAFRIL RIZAL BIN M AZMI', 'FK', 'SE', 'L47', '', 0, 'S47', 47),
('DR. ZALILI BINTI MUSA', 'FK', 'SE', 'L48', '', 0, 'S48', 48),
('DR. ZURIANI BINTI MUSTAFFA', 'FK', 'SE', 'L49', '', 0, 'S49', 49),
('EN. ABBAS SALIIMI BIN LOKMAN', 'FK', 'SE', 'L50', '', 0, 'S50', 50),
('EN. ABDULLAH BIN MAT SAFRI', 'FK', 'SE', 'L51', '', 0, 'S51', 51),
('EN. ARIFIN BIN SALLEH', 'FK', 'SE', 'L52', '', 0, 'S52', 52),
('EN. AZIMAN BIN ABDULLAH', 'FK', 'SE', 'L53', '', 0, 'S53', 53),
('EN. CHE YAHAYA BIN YAAKUB', 'FK', 'SE', 'L54', '', 0, 'S54', 54),
('EN. IMRAN EDZEREIQ BIN KAMARUDIN', 'FK', 'SE', 'L55', '', 0, 'S55', 55),
('EN. MOHD HAFIZ BIN MOHD HASSIN', 'FK', 'SE', 'L56', '', 0, 'S56', 56),
('EN. MUHAMMAD ZULFAHMI TOH BIN ABDULLAH @ TOH CHIN LAI', 'FK', 'SE', 'L57', '', 0, 'S57', 57),
('EN. MUHAMMED RAMIZA BIN RAMLI', 'FK', 'SE', 'L58', '', 0, 'S58', 58),
('EN. NOR AZHAR BIN AHMAD', 'FK', 'SE', 'L59', '', 0, 'S59', 59),
('EN. RAHIWAN NAZAR BIN ROMLI', 'FK', 'SE', 'L60', '', 0, 'S60', 60),
('EN. SYAHRIZAL AZMIR BIN MD. SHARIF', 'FK', 'SE', 'L61', '', 0, 'S61', 61),
('EN. SYAHRULANUAR BIN NGAH', 'FK', 'SE', 'L62', '', 0, 'S62', 62),
('EN. WAN MUHAMMAD SYAHRIR BIN WAN HUSSIN', 'FK', 'SE', 'L63', '', 0, 'S63', 63),
('PM DR. MAZLINA BINTI ABDUL MAJID', 'FK', 'SE', 'L64', '', 0, 'S64', 64),
('PM DR. MOHD NIZAM BIN MOHMAD KAHAR', 'FK', 'SE', 'L65', '', 0, 'S65', 65),
('PM DR. NORAZIAH BINTI AHMAD', 'FK', 'SE', 'L66', '', 0, 'S66', 66),
('PM DR. ROHANI BINTI ABU BAKAR', 'FK', 'SE', 'L67', '', 0, 'S67', 67),
('PM. DR. ABDULRAHMAN AHMED MOHAMMED AL-SEWARI', 'FK', 'SE', 'L68', '', 0, 'S68', 68),
('PM. DR. ADZHAR BIN KAMALUDIN', 'FK', 'SE', 'L69', '', 0, 'S69', 69),
('PM. DR. MD. ARAFATUR RAHMAN', 'FK', 'SE', 'L70', '', 0, 'S70', 70),
('PM. DR. MOHAMED ARIFF BIN AMEEDEEN', 'FK', 'SE', 'L71', '', 0, 'S71', 71),
('PN. AZMA BINTI ABDULLAH', 'FK', 'SE', 'L72', '', 0, 'S72', 72),
('PN. KU SAIMAH BINTI KU IBRAHIM', 'FK', 'SE', 'L73', '', 0, 'S73', 73),
('PN. NURZETY AQTAR BINTI AHMAD AZUAN', 'FK', 'SE', 'L74', '', 0, 'S74', 74),
('PN. ROSLINA BINTI MOHD SIDEK', 'FK', 'SE', 'L75', '', 0, 'S75', 75),
('PN. ROSMALISSA BINTI JUSOH', 'FK', 'SE', 'L76', '', 0, 'S76', 76),
('PN. SITI NORMAZIAH BINTI IHSAN', 'FK', 'SE', 'L77', '', 0, 'S77', 77),
('PN. ZARINA BINTI DZOLKHIFLI', 'FK', 'SE', 'L78', '', 0, 'S78', 78),
('PROF. DR. KAMAL ZUHAIRI BIN ZAMLI', 'FK', 'SE', 'L79', '', 0, 'S79', 79);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `U_id` varchar(11) NOT NULL,
  `U_name` text NOT NULL,
  `L_name` text NOT NULL,
  `A_title` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_count` int(11) NOT NULL,
  `U_id` varchar(11) NOT NULL,
  `S_category` varchar(11) NOT NULL,
  `S_finalstatus` varchar(50) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `A_idnumber` varchar(11) NOT NULL,
  `S_semester` varchar(11) NOT NULL,
  `S_program` varchar(100) NOT NULL,
  `S_pa` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`S_count`, `U_id`, `S_category`, `S_finalstatus`, `L_name`, `A_idnumber`, `S_semester`, `S_program`, `S_pa`, `U_name`) VALUES
(1, 'CB17021', 'FYP2', '', '', '', 'SEM 7', 'SOFTWARE ENGINEERING', 'FAUZIAH BINTI ZAINUDDIN', 'NUR SHAZA SHAMIMI BINTI SATHIR AHAMED'),
(2, 'CB17022', 'FYP1', '', '', '', 'SEM 6', 'SOFTWARE ENGINEERING', 'FAUZIAH BINTI ZAINUDDIN', 'NOR HABSAH ALI'),
(3, 'CC17010', 'PTA1', '', '', '', 'SEM4', 'SAINS COMPUTER', 'FAUZIAH BINTI ZAINUDDIN', 'NUR LIYANA BINTI MOHD YAZID'),
(4, 'CC17029', 'PTA2', '', '', '', 'SEM5', 'SAINS COMPUTER', 'FAUZIAH BINTI ZAINUDDIN', 'NIK NUR SYAKIRA BINTI ABDULLAH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_num` int(11) NOT NULL,
  `U_id` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL,
  `U_password` varchar(100) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_num`, `U_id`, `U_name`, `U_password`, `role`) VALUES
(13, 'C1', '', '202cb962ac59075b964b07152d234b70', 'Coordinator'),
(15, 'CB17021', '', '934a9add511f319347e38c015b5700bf', 'Student'),
(16, 'L1', '', '202cb962ac59075b964b07152d234b70', 'Lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`A_idnumber`),
  ADD UNIQUE KEY `A_idsvnumber` (`A_idsvnumber`),
  ADD UNIQUE KEY `U_id` (`U_id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`C_count`),
  ADD UNIQUE KEY `U_id` (`U_id`),
  ADD UNIQUE KEY `A_idsvnumber` (`A_idsvnumber`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`L_count`),
  ADD UNIQUE KEY `U_id` (`U_id`),
  ADD UNIQUE KEY `A_idsvnumber` (`A_idsvnumber`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `U_id` (`U_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_count`),
  ADD UNIQUE KEY `U_id` (`U_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_num`),
  ADD UNIQUE KEY `U_id` (`U_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `A_idnumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `C_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `L_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
