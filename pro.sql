-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 05 月 31 日 09:56
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
(17, '虎年萬年曆', '14shin.jpg', '5456', '虎虎生風', 'Adobe'),
(19, '旅遊海報', '14shin1.jpg', '', '', 'Adobe'),
(29, '萬年曆', 'calendar.png', 'calendar', '萬年曆', 'PHP'),
(30, '表單作業', 'from.png', 'from', '', 'HTML'),
(31, '丙級', 'levelC.png', '', '網頁程式測驗', 'HTML'),
(32, 'API', 'API.png', 'API', '連接美國yahoo股市api', 'HTML');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
