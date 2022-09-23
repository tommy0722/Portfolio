-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 09 月 23 日 15:13
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

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `abme`
--
ALTER TABLE `abme`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `abme`
--
ALTER TABLE `abme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
