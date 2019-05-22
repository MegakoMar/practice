-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 17 2019 г., 19:43
-- Версия сервера: 8.0.12
-- Версия PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `parking`
--

-- --------------------------------------------------------

--
-- Структура таблицы `places`
--

CREATE TABLE `places` (
  `id` varchar(255) NOT NULL,
  `position` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `places`
--

INSERT INTO `places` (`id`, `position`) VALUES
('A1', 1),
('A2', 0),
('A3', 0),
('A4', 1),
('A5', 0),
('A6', 0),
('A7', 1),
('A8', 1),
('A9', 0),
('A10', 1),
('B1', 1),
('B2', 0),
('B3', 0),
('B4', 0),
('B5', 0),
('B6', 0),
('B7', 1),
('B8', 1),
('B9', 0),
('B10', 1),
('C1', 0),
('C2', 0),
('C3', 1),
('C4', 1),
('C5', 0),
('C6', 0),
('C7', 0),
('C8', 0),
('C9', 0),
('C10', 0),
('D1', 1),
('D2', 1),
('D3', 0),
('D4', 1),
('D5', 0),
('D6', 0),
('D7', 1),
('D8', 0),
('D9', 1),
('D10', 0),
('E1', 0),
('E2', 0),
('E3', 0),
('E4', 1),
('E5', 0),
('E6', 0),
('E7', 1),
('E8', 0),
('E9', 1),
('E10', 1),
('F1', 1),
('F2', 1),
('F3', 0),
('F4', 0),
('F5', 0),
('F6', 0),
('F7', 0),
('F8', 0),
('F9', 0),
('F10', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
