-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mysql-db
-- Время создания: Дек 10 2024 г., 20:01
-- Версия сервера: 8.0.39
-- Версия PHP: 8.2.8

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
  `id` int UNSIGNED NOT NULL,
  `courier` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `id` int UNSIGNED NOT NULL,
  `region` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `duration_days` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `id` int UNSIGNED NOT NULL,
  `courier_id` int UNSIGNED NOT NULL,
  `region_id` int UNSIGNED NOT NULL,
  `exit` date NOT NULL,
  `arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `travel_schedule`
--

INSERT INTO `travel_schedule` (`id`, `courier_id`, `region_id`, `exit`, `arrival`) VALUES
(1, 1, 1, '2000-12-01', '2000-12-05'),
(2, 2, 2, '2000-12-03', '2000-12-08'),
(3, 3, 3, '2000-12-01', '2000-12-05'),
(4, 4, 4, '2000-12-07', '2000-12-23'),
(5, 5, 5, '2001-01-02', '2001-01-05'),
(6, 6, 6, '2001-02-07', '2001-02-14'),
(7, 7, 7, '2000-12-20', '2000-12-25'),
(8, 8, 8, '2001-02-11', '2000-12-18'),
(9, 9, 9, '2001-01-21', '2001-01-29'),
(10, 10, 10, '2001-02-19', '2001-02-22');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `courier_idx` (`courier_id`),
  ADD KEY `region_idx` (`region_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `travel_schedule`
--
ALTER TABLE `travel_schedule`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `travel_schedule`
--
ALTER TABLE `travel_schedule`
  ADD CONSTRAINT `travel_schedule_ibfk_1` FOREIGN KEY (`courier_id`) REFERENCES `couriers` (`id`),
  ADD CONSTRAINT `travel_schedule_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
