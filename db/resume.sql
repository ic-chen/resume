-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-09 16:17:01
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `edu`
--

CREATE TABLE `edu` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `grad_t` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '就讀時間',
  `grad_st` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL' COMMENT '畢業狀態',
  `sch` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '學校',
  `dept` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '科系'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `edu`
--

INSERT INTO `edu` (`id`, `acct`, `see`, `grad_t`, `grad_st`, `sch`, `dept`) VALUES
(1, 'ic123456', 0, '22222222222', '畢業', '22222222222', '22222222222'),
(4, 'ic123456', 0, '999999999', '修業', '999999999', '999999999');

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(20) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `dur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '任職期間',
  `corp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司',
  `posit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '職稱',
  `jd` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '工作說明'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `acct`, `see`, `dur`, `corp`, `posit`, `jd`) VALUES
(2, 'ic123456', 1, '22222222222', '3333333333', '22222222222', '33333333333'),
(3, 'ic123456', 0, '55555555555', '55555555555', '55555555555', '55555555555');

-- --------------------------------------------------------

--
-- 資料表結構 `reqs`
--

CREATE TABLE `reqs` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `reqs_posit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '期望職務',
  `reqs_jd` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '工作描述',
  `reqs_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '可上班時間',
  `reqs_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '期望工作性質',
  `reqs_place` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '期望工作地點',
  `reqs_pay` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '期望薪資'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `cat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類',
  `skill` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '技能',
  `level` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '程度'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `acct`, `see`, `cat`, `skill`, `level`) VALUES
(1, 'ic123456', 1, '管理類', '22222222222222', '7777777777777'),
(2, 'ic123456', 1, '管理類', '3333333333333333333333', '3333333333333333333333'),
(4, 'ic123456', 1, '美容美髮', '88888888888888', '88888888888888');

-- --------------------------------------------------------

--
-- 資料表結構 `social_m`
--

CREATE TABLE `social_m` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `fb` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `social_m`
--

INSERT INTO `social_m` (`id`, `acct`, `see`, `fb`, `ig`, `linkedin`, `github`, `youtube`, `twitter`) VALUES
(1, 'ic123456', 0, '111111111111', '111111111111', '111111111111', '111111111111', '111111111111', '111111111111'),
(2, 'ic123456', 0, '22222222222', '22222222222', '22222222222', '22222222222', '22222222222', '22222222222'),
(3, 'ic123456', 0, '77777777777', '77777777777', '77777777777', '77777777777', '77777777777', '77777777777');

-- --------------------------------------------------------

--
-- 資料表結構 `s_intro`
--

CREATE TABLE `s_intro` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `see` tinyint(1) NOT NULL DEFAULT 0 COMMENT '可見',
  `s_intro` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '自介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `s_intro`
--

INSERT INTO `s_intro` (`id`, `acct`, `see`, `s_intro`) VALUES
(2, 'ic123456', 0, '5555555555555555\r\n5555555555555555\r\n5555555555555555\r\n5555555555555555\r\n5555555555555555\r\n5555555555555555'),
(4, 'ic123456', 1, '88888888888\n\n\n88888888888\n\n\n88888888888');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `acct` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `psw` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '姓名',
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '性別',
  `btd` date DEFAULT NULL COMMENT '生日',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '電郵',
  `tel_cell` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '行動電話',
  `tel_home` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '家中電話',
  `addr` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '地址',
  `reg_time` timestamp NULL DEFAULT current_timestamp() COMMENT '註冊時間',
  `upt_time` timestamp NULL DEFAULT current_timestamp() COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acct`, `psw`, `name`, `gender`, `btd`, `email`, `tel_cell`, `tel_home`, `addr`, `reg_time`, `upt_time`) VALUES
(1, 'ic123456', '123456', '一二三', '女性', '2019-11-06', 'irma_chen79@hotmail.com', '0900-123-456', '(03)4646-4648', '桃園', '2019-11-25 05:54:45', '2019-12-05 02:04:44');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `reqs`
--
ALTER TABLE `reqs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `social_m`
--
ALTER TABLE `social_m`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `s_intro`
--
ALTER TABLE `s_intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `edu`
--
ALTER TABLE `edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reqs`
--
ALTER TABLE `reqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `social_m`
--
ALTER TABLE `social_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `s_intro`
--
ALTER TABLE `s_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
