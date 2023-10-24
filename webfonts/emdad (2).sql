-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 12:26 PM
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
-- Database: `emdad`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesses`
--

CREATE TABLE `accesses` (
  `A_user` varchar(15) NOT NULL,
  `A_aloHemayat` tinyint(1) NOT NULL,
  `A_aloPopulation` tinyint(1) NOT NULL,
  `A_aloMoney` tinyint(1) NOT NULL,
  `A_aloDowry` tinyint(1) NOT NULL,
  `A_aloInsure` tinyint(1) NOT NULL,
  `A_aloSandogh` tinyint(1) NOT NULL,
  `A_aloFarhangi` tinyint(1) NOT NULL,
  `A_aloMaskan` tinyint(1) NOT NULL,
  `A_aloJob` tinyint(1) NOT NULL,
  `A_aloMosharekat` tinyint(1) NOT NULL,
  `A_aloIncome` tinyint(1) NOT NULL,
  `A_aloEkram` tinyint(1) NOT NULL,
  `A_aloEmployee` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accesses`
--

INSERT INTO `accesses` (`A_user`, `A_aloHemayat`, `A_aloPopulation`, `A_aloMoney`, `A_aloDowry`, `A_aloInsure`, `A_aloSandogh`, `A_aloFarhangi`, `A_aloMaskan`, `A_aloJob`, `A_aloMosharekat`, `A_aloIncome`, `A_aloEkram`, `A_aloEmployee`) VALUES
('bahman', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
('farshid', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
('hadi', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('hajihasani', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('hamzeh', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
('mahmoud', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
('msalehi', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
('rasoul', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
('shirmardi', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('yaser', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
('zamani', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `currentdate`
--

CREATE TABLE `currentdate` (
  `Year` varchar(4) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `current` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `currentdate`
--

INSERT INTO `currentdate` (`Year`, `Month`, `current`) VALUES
('1402', '01', 1),
('1402', '02', 1),
('1402', '03', 1),
('1402', '05', 1),
('1402', '06', 1),
('1402', '07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dowry`
--

CREATE TABLE `dowry` (
  `D_NumberDowry` smallint(11) NOT NULL,
  `D_MoneyDowry` mediumint(11) NOT NULL,
  `D_Year` varchar(4) NOT NULL,
  `D_Month` varchar(2) NOT NULL,
  `D_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dowry`
--

INSERT INTO `dowry` (`D_NumberDowry`, `D_MoneyDowry`, `D_Year`, `D_Month`, `D_user`, `datetime`) VALUES
(322, 99, '1402', '05', 'hadi', NULL),
(322, 99, '1402', '06', 'hajihasani', '2023-09-24 13:14:53'),
(322, 99, '1402', '07', 'hajihasani', '2023-10-23 09:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `ekram`
--

CREATE TABLE `ekram` (
  `E_orphan` smallint(6) NOT NULL,
  `E_supports` smallint(6) NOT NULL,
  `E_Year` varchar(4) NOT NULL,
  `E_Month` varchar(2) NOT NULL,
  `E_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekram`
--

INSERT INTO `ekram` (`E_orphan`, `E_supports`, `E_Year`, `E_Month`, `E_user`, `datetime`) VALUES
(7346, 19301, '1402', '05', 'hadi', NULL),
(7432, 19381, '1402', '06', 'bahman', '2023-09-25 07:05:17'),
(7597, 19675, '1402', '07', 'bahman', '2023-10-23 09:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Em_official` smallint(6) NOT NULL,
  `Em_company` smallint(6) NOT NULL,
  `Em_sum` smallint(6) NOT NULL,
  `Em_Year` varchar(4) NOT NULL,
  `Em_Month` varchar(2) NOT NULL,
  `Em_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Em_official`, `Em_company`, `Em_sum`, `Em_Year`, `Em_Month`, `Em_user`, `datetime`) VALUES
(199, 185, 384, '1402', '05', 'hadi', NULL),
(196, 185, 381, '1402', '06', 'zamani', '2023-09-23 07:04:42'),
(193, 185, 378, '1402', '07', 'zamani', '2023-10-24 10:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `farhangi`
--

CREATE TABLE `farhangi` (
  `F_numStu` mediumint(9) NOT NULL,
  `F_Year` varchar(4) NOT NULL,
  `F_Month` varchar(2) NOT NULL,
  `F_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farhangi`
--

INSERT INTO `farhangi` (`F_numStu`, `F_Year`, `F_Month`, `F_user`, `datetime`) VALUES
(20553, '1402', '05', 'hadi', NULL),
(17973, '1402', '06', 'rasoul', '2023-09-23 07:00:36'),
(19136, '1402', '07', 'rasoul', '2023-10-24 11:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `filecount`
--

CREATE TABLE `filecount` (
  `count` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filecount`
--

INSERT INTO `filecount` (`count`) VALUES
(393);

-- --------------------------------------------------------

--
-- Table structure for table `hemayat`
--

CREATE TABLE `hemayat` (
  `Hmy_CityFamily` mediumint(6) UNSIGNED NOT NULL,
  `Hmy_RuralFamily` mediumint(6) UNSIGNED NOT NULL,
  `Hmy_MenFamily` mediumint(6) UNSIGNED NOT NULL,
  `Hmy_WomenFamily` mediumint(6) UNSIGNED NOT NULL,
  `Hmy_AllFamily` mediumint(8) UNSIGNED NOT NULL,
  `Hmy_AllPop` mediumint(8) UNSIGNED NOT NULL,
  `Hmy_OldFamCity` mediumint(8) UNSIGNED NOT NULL,
  `Hmy_OldFamRural` mediumint(8) UNSIGNED NOT NULL,
  `Hmy_AllOldFamily` mediumint(8) UNSIGNED NOT NULL,
  `Hmy_OldPopCity` mediumint(8) UNSIGNED NOT NULL,
  `Hmy_OldPopRural` mediumint(8) UNSIGNED NOT NULL,
  `Hmy_AllPopOld` mediumint(8) UNSIGNED NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Month` varchar(2) NOT NULL,
  `user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hemayat`
--

INSERT INTO `hemayat` (`Hmy_CityFamily`, `Hmy_RuralFamily`, `Hmy_MenFamily`, `Hmy_WomenFamily`, `Hmy_AllFamily`, `Hmy_AllPop`, `Hmy_OldFamCity`, `Hmy_OldFamRural`, `Hmy_AllOldFamily`, `Hmy_OldPopCity`, `Hmy_OldPopRural`, `Hmy_AllPopOld`, `Year`, `Month`, `user`, `datetime`) VALUES
(16997, 26305, 24858, 18444, 43302, 99051, 8657, 16643, 25300, 11105, 22457, 33562, '1402', '05', 'hadi', '2023-10-03 07:36:49'),
(17036, 26367, 24920, 18483, 43403, 99524, 8705, 16709, 25414, 11145, 22539, 33684, '1402', '06', 'hadi', '2023-09-23 09:37:05'),
(16999, 26389, 24915, 18473, 43388, 99684, 8671, 16724, 25395, 11090, 22576, 33666, '1402', '07', 'hadi', '2023-10-23 09:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `In_charity` mediumint(9) NOT NULL,
  `In_Supports` mediumint(9) NOT NULL,
  `In_zakat` mediumint(9) NOT NULL,
  `In_bsNeed` mediumint(9) NOT NULL,
  `In_allIncome` mediumint(9) NOT NULL,
  `In_Nikookari` mediumint(9) NOT NULL,
  `In_Year` varchar(4) NOT NULL,
  `In_Month` varchar(2) NOT NULL,
  `In_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`In_charity`, `In_Supports`, `In_zakat`, `In_bsNeed`, `In_allIncome`, `In_Nikookari`, `In_Year`, `In_Month`, `In_user`, `datetime`) VALUES
(34, 277, 184, 479, 974, 447, '1402', '05', 'hadi', NULL),
(41, 354, 206, 581, 1182, 537, '1402', '06', 'hamzeh', '2023-10-05 09:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `insure`
--

CREATE TABLE `insure` (
  `I_NumWomen` smallint(6) NOT NULL,
  `I_NumJob` smallint(6) NOT NULL,
  `I_Sum` smallint(6) NOT NULL,
  `I_Money` mediumint(9) NOT NULL,
  `I_Year` varchar(4) NOT NULL,
  `I_Month` varchar(2) NOT NULL,
  `I_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insure`
--

INSERT INTO `insure` (`I_NumWomen`, `I_NumJob`, `I_Sum`, `I_Money`, `I_Year`, `I_Month`, `I_user`, `datetime`) VALUES
(517, 342, 859, 12650, '1402', '05', 'hadi', NULL),
(517, 342, 859, 24000, '1402', '06', 'mahmoud', '2023-09-24 07:02:32'),
(517, 342, 859, 24000, '1402', '07', 'mahmoud', '2023-10-23 09:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `J_djSrch` smallint(6) NOT NULL,
  `J_djLeon` smallint(6) NOT NULL,
  `J_djSum` smallint(6) NOT NULL,
  `J_ndj` smallint(6) NOT NULL,
  `J_sum` smallint(6) NOT NULL,
  `J_leonMny` mediumint(9) NOT NULL,
  `J_faniLearn` smallint(6) NOT NULL,
  `J_Supervision` mediumint(9) NOT NULL,
  `J_Year` varchar(4) NOT NULL,
  `J_Month` varchar(2) NOT NULL,
  `J_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`J_djSrch`, `J_djLeon`, `J_djSum`, `J_ndj`, `J_sum`, `J_leonMny`, `J_faniLearn`, `J_Supervision`, `J_Year`, `J_Month`, `J_user`, `datetime`) VALUES
(21, 503, 524, 104, 628, 337, 560, 28000, '1402', '05', 'hadi', NULL),
(25, 803, 828, 166, 994, 833, 620, 28900, '1402', '06', 'yaser', '2023-09-30 07:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `maskan`
--

CREATE TABLE `maskan` (
  `M_fix` smallint(6) NOT NULL,
  `M_wcGas` smallint(6) NOT NULL,
  `M_Bmc` smallint(6) NOT NULL,
  `M_Bmr` smallint(6) NOT NULL,
  `M_Cmc` smallint(6) NOT NULL,
  `M_Cmr` smallint(6) NOT NULL,
  `M_Tbm` smallint(6) NOT NULL,
  `M_TSep` smallint(6) NOT NULL,
  `M_sum` smallint(6) NOT NULL,
  `M_Year` varchar(4) NOT NULL,
  `M_Month` varchar(2) NOT NULL,
  `M_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maskan`
--

INSERT INTO `maskan` (`M_fix`, `M_wcGas`, `M_Bmc`, `M_Bmr`, `M_Cmc`, `M_Cmr`, `M_Tbm`, `M_TSep`, `M_sum`, `M_Year`, `M_Month`, `M_user`, `datetime`) VALUES
(62, 71, 250, 0, 0, 0, 181, 400, 964, '1402', '05', 'hadi', NULL),
(82, 174, 255, 0, 0, 0, 181, 400, 1092, '1402', '06', 'Farshid', '2023-09-25 07:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `M_name` varchar(40) NOT NULL,
  `M_code` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`M_name`, `M_code`) VALUES
('حوزه حمایت', 0),
('آمار جمعیتی', 1);

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `M_money` mediumint(9) NOT NULL,
  `M_Year` varchar(4) NOT NULL,
  `M_Month` varchar(2) NOT NULL,
  `M_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`M_money`, `M_Year`, `M_Month`, `M_user`, `datetime`) VALUES
(2318, '1402', '05', 'hadi', NULL),
(2781, '1402', '06', 'shirmardi', '2023-09-24 13:05:38'),
(3398, '1402', '07', 'shirmardi', '2023-10-24 13:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `text`, `status`) VALUES
(2, 'با سلام', 0),
(3, 'alaki', 0),
(4, 'مقدار جدید', 0),
(6, 'همکاران محترم حوزه های حمایت، صندوق امداد ولایت، مسکن، اشتغال و مشارکتها(درآمدها) لطفا آمار خود را به صورت تجمیعی از ابتدای سال تاکنون ثبت نمائید.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sandogh`
--

CREATE TABLE `sandogh` (
  `S_mrgNum` smallint(6) NOT NULL,
  `S_mrgMoney` mediumint(9) NOT NULL,
  `S_numLeon` smallint(6) NOT NULL,
  `S_moneyLeon` mediumint(9) NOT NULL,
  `S_Year` varchar(4) NOT NULL,
  `S_Month` varchar(2) NOT NULL,
  `S_user` varchar(15) NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sandogh`
--

INSERT INTO `sandogh` (`S_mrgNum`, `S_mrgMoney`, `S_numLeon`, `S_moneyLeon`, `S_Year`, `S_Month`, `S_user`, `datetime`) VALUES
(2, 200, 1213, 151, '1402', '05', 'hadi', NULL),
(3, 399, 1575, 315, '1402', '06', 'msalehi', '2023-09-26 07:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(1) NOT NULL,
  `name` varchar(15) NOT NULL,
  `family` varchar(15) NOT NULL,
  `scope` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `password`, `level`, `name`, `family`, `scope`) VALUES
('bahman', '202cb962ac59075b964b07152d234b70', '2', 'بهمن', 'زمانی', 'مشارکت'),
('farshid', '202cb962ac59075b964b07152d234b70', '2', 'فرشید', 'حیدریان', 'مسکن'),
('hadi', '17194d8b32663e580ef1f362385e1ea3', '0', 'هادی', 'هاشمی شهرکی', 'برنامه ریزی'),
('hajihasani', '250cf8b51c773f3f8dc8b4be867a9a02', '2', 'جانعلی', 'حاجی حسنی', 'حمایت'),
('hamzeh', 'df6d2338b2b8fce1ec2f6dda0a630eb0', '2', 'حمزه', 'اکبرزاده', 'مشارکت'),
('mahdi', '202cb962ac59075b964b07152d234b70', '2', 'مهدی', 'ترکی', 'مالی اداری'),
('mahmoud', '202cb962ac59075b964b07152d234b70', '2', 'محمود', 'اپرا', 'حمایت'),
('msalehi', '202cb962ac59075b964b07152d234b70', '2', 'مهدی', 'صالحی', 'صندوق'),
('rasoul', '250cf8b51c773f3f8dc8b4be867a9a02', '2', 'رسول', 'صالحی وردنجانی', 'فرهنگی'),
('shirmardi', '202cb962ac59075b964b07152d234b70', '2', 'غلامعباس', 'شیرمردی', 'حمایت'),
('yaser', '202cb962ac59075b964b07152d234b70', '2', 'یاسر', 'محمدی', 'اشتغال'),
('zamani', '202cb962ac59075b964b07152d234b70', '2', 'خانم', 'زمانی', 'مالی اداری');

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

CREATE TABLE `variables` (
  `title` varchar(20) NOT NULL,
  `value` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`title`, `value`) VALUES
('enableEdit', 1),
('enableinsert', 1),
('removeRecord', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesses`
--
ALTER TABLE `accesses`
  ADD PRIMARY KEY (`A_user`);

--
-- Indexes for table `currentdate`
--
ALTER TABLE `currentdate`
  ADD PRIMARY KEY (`Year`,`Month`);

--
-- Indexes for table `dowry`
--
ALTER TABLE `dowry`
  ADD PRIMARY KEY (`D_Year`,`D_Month`);

--
-- Indexes for table `ekram`
--
ALTER TABLE `ekram`
  ADD PRIMARY KEY (`E_Year`,`E_Month`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Em_Year`,`Em_Month`);

--
-- Indexes for table `farhangi`
--
ALTER TABLE `farhangi`
  ADD PRIMARY KEY (`F_Year`,`F_Month`);

--
-- Indexes for table `hemayat`
--
ALTER TABLE `hemayat`
  ADD PRIMARY KEY (`Year`,`Month`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`In_Year`,`In_Month`);

--
-- Indexes for table `insure`
--
ALTER TABLE `insure`
  ADD PRIMARY KEY (`I_Year`,`I_Month`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`J_Year`,`J_Month`);

--
-- Indexes for table `maskan`
--
ALTER TABLE `maskan`
  ADD PRIMARY KEY (`M_Year`,`M_Month`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`M_code`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`M_Year`,`M_Month`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sandogh`
--
ALTER TABLE `sandogh`
  ADD PRIMARY KEY (`S_Year`,`S_Month`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
