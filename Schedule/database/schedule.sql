-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 08 2024 г., 22:15
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `schedule`
--

-- --------------------------------------------------------

--
-- Структура таблицы `couriers`
--

CREATE TABLE `couriers` (
  `id` int(11) UNSIGNED NOT NULL,
  `courier` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `couriers`
--

INSERT INTO `couriers` (`id`, `courier`) VALUES
(1, 'Васьков Павел Радмирович'),
(2, 'Рамазанов Андрей Вячеславович'),
(3, 'Громов Родион Русланович'),
(4, 'Назаров Артем Дмитриевич'),
(5, 'Ложков Виктор Ибрагомович'),
(6, 'Новиков Егор Славович'),
(7, 'Щербаков Юрий Кириллович'),
(8, 'Лебедев Николай Олегович'),
(9, 'Глыбов Степан Алексеевич'),
(10, 'Соловьев Евпатий Коловратов');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) UNSIGNED NOT NULL,
  `region` varchar(100) NOT NULL,
  `duration_days` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `region`, `duration_days`) VALUES
(1, 'Санкт-Петербург', 4),
(2, 'Уфа', 5),
(3, 'Нижний Новгород', 3),
(4, 'Владимир', 7),
(5, 'Кострома', 7),
(6, 'Екатеринбург', 8),
(7, 'Ковров', 5),
(8, 'Воронеж', 4),
(9, 'Самара', 3),
(10, 'Астрахань', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `travel_schedule`
--

CREATE TABLE `travel_schedule` (
  `id` int(11) UNSIGNED NOT NULL,
  `courier` varchar(250) NOT NULL,
  `region` varchar(100) NOT NULL,
  `exit` date NOT NULL,
  `arrival` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `travel_schedule`
--

INSERT INTO `travel_schedule` (`id`, `courier`, `region`, `exit`, `arrival`) VALUES
(1, 'Васьков Павел Радмирович', 'Санкт-Петербург', '2024-12-01', '2024-12-05'),
(2, 'Рамазанов Андрей Вячеславович', 'Уфа', '2024-12-03', '2024-12-08'),
(3, 'Громов Родион Русланович', 'Воронеж', '2024-12-01', '2024-12-05'),
(4, 'Назаров Артем Дмитриевич', 'Астрахань', '2024-12-07', '2024-12-23'),
(5, 'Ложков Виктор Ибрагомович', 'Самара', '2025-01-02', '2025-01-05'),
(6, 'Новиков Егор Славович', 'Кострома', '2025-02-07', '2025-02-14'),
(7, 'Щербаков Юрий Кириллович', 'Ковров', '2024-12-20', '2024-12-25'),
(8, 'Лебедев Николай Олегович', 'Владимир', '2025-02-11', '2024-12-18'),
(9, 'Глыбов Степан Алексеевич', 'Екатеринбург', '2025-01-21', '2025-01-29'),
(10, 'Соловьев Евпатий Коловратов', 'Нижний Новгород', '2025-02-19', '2025-02-22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Регион` (`region`);

--
-- Индексы таблицы `travel_schedule`
--
ALTER TABLE `travel_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `travel_schedule`
--
ALTER TABLE `travel_schedule`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
