-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 01 2023 г., 16:13
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `osform`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `email`, `category`, `mark`, `review`, `user`) VALUES
(3, 'sdr@mail.ru', 'Работа тех.поддержки', 'good', 'wertyuiou', ''),
(4, 'sdr@mail.ru', 'Работа тех.поддержки', 'good', 'wertyuiou', ''),
(5, 'sdr@mail.ru', 'Работа тех.поддержки', 'good', 'wertyuiou', ''),
(6, 'afsghtjy@mail.ru', 'Отзыв о компании', 'good', '', ''),
(7, '', 'Отзыв о компании', 'good', '', ''),
(8, '', 'Отзыв о компании', 'good', '', ''),
(9, 'sdr@mail.ru', 'Отзыв о компании', 'good', '', ''),
(10, 'er@mail.ru', 'Отзыв о компании', 'good', 'dsfgh', ''),
(11, 'sdr@mail.ru', 'Отзыв о компании', 'good', 'asdfg', ''),
(12, 'sd2r@mail.ru', 'Отзыв о компании', 'good', '21', ''),
(13, 'sdr@mail.ru', 'Отзыв о компании', 'good', '123', ''),
(14, 'sdr@mail.ru', 'Отзыв о компании', 'good', '2323', ''),
(15, 'sdr@mail.ru22', 'Работа тех.поддержки', 'good', '2323', ''),
(19, 'sdr@mail.ru', 'Отзыв о компании', '0', 'normalno', 'MEN');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '1', '2'),
(2, 'al', 'qwer'),
(3, 'MEN', '$2y$10$N2zlMBzNsyVZ8HPpP/AKou1nGHM/ShUJFfSnvknsJkGwtFGEOTUXu'),
(4, 'MEN12', '$2y$10$bPHbowblh3nuqGzlfMHqBufw2REaHwXLUR0kMyEGEaYs0V3qEXtua'),
(5, 'MEN123', '$2y$10$fKMbXipN.L1RFNiI2IbiU.sG5LQO1VtHjyV0dOdU7Vv2V8PaPicyG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
