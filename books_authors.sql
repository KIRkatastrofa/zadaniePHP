-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2021 г., 16:25
-- Версия сервера: 5.6.41
-- Версия PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zadaniephp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books_authors`
--

CREATE TABLE `books_authors` (
  `id` int(11) NOT NULL,
  `fioauthors` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_authors`
--

INSERT INTO `books_authors` (`id`, `fioauthors`, `bookname`) VALUES
(1, 'Сергеев', 'Рассказ о утенке '),
(2, 'Иванов', 'Прошлое и будущие'),
(3, 'Иванов', 'Король и шут'),
(4, 'Иванов', 'Рассказ о утенке '),
(5, 'Сергеев', 'Прошлое и будущие'),
(6, 'Геннадиев', 'Рассказ о утенке '),
(7, 'Иванов', 'Стремление вверх'),
(8, 'Сергеев', 'Бабка и пять лягушат '),
(9, 'Иванов', 'Ведущий'),
(10, 'Сергеев', 'Красная роза'),
(11, 'Рожков', 'Мельник и пудель'),
(12, 'Сергеев', 'Мельник и пудель'),
(13, 'Сергеев', 'Острое ухо'),
(14, 'Куммиров', 'Острое ухо'),
(15, 'Геннадиев', 'Мельник и пудель'),
(16, 'Рожков', 'Дожди и тучи'),
(17, 'Сергеев', 'Дожди и тучи'),
(18, 'Рожков', 'Весенний пух'),
(19, 'Рунеева', 'Весенний пух'),
(20, 'Рожков', 'Острое ухо');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books_authors`
--
ALTER TABLE `books_authors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books_authors`
--
ALTER TABLE `books_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
