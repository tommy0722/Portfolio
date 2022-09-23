-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 09 月 23 日 15:09
-- 伺服器版本： 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1100414`
--
CREATE DATABASE IF NOT EXISTS `s1100414` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `s1100414`;

-- --------------------------------------------------------

--
-- 資料表結構 `abme`
--

CREATE TABLE `abme` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `stu` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `work` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `me` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `bir` date DEFAULT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `local` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `abme`
--

INSERT INTO `abme` (`id`, `name`, `stu`, `work`, `me`, `bir`, `tel`, `local`, `email`) VALUES
(1, '123', '義守大學', '志願役', '4567', '1993-07-22', '0987654321', '112台北市北投區', 'a3838889@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, '123354', '123'),
(2, '123', '123'),
(8, '000', '123'),
(17, '456', '456'),
(18, 'admin', '1234'),
(19, '123', '123');

-- --------------------------------------------------------

--
-- 資料表結構 `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `footer`
--

INSERT INTO `footer` (`id`, `name`, `sh`, `text`) VALUES
(1, 123, 1, '123123123');

-- --------------------------------------------------------

--
-- 資料表結構 `pro`
--

CREATE TABLE `pro` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '作品名稱',
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '作品圖片',
  `loca` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `intr` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '作品介紹',
  `class` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `pro`
--

INSERT INTO `pro` (`id`, `name`, `img`, `loca`, `intr`, `class`) VALUES
(17, '虎年萬年曆', '14shin.jpg', '456', '654', 'Adobe'),
(19, '旅遊海報', '14shin1.jpg', '', '', 'Adobe'),
(29, '萬年曆', 'calendar.png', 'calendar', '萬年曆', 'PHP'),
(30, '表單作業', 'from.png', 'from', '', 'HTML'),
(31, '丙級', 'levelC.png', 'levelc', '網頁程式測驗', 'HTML'),
(32, '', 'API.png', '', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `abme`
--
ALTER TABLE `abme`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `abme`
--
ALTER TABLE `abme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
