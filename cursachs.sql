-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2023 г., 22:16
-- Версия сервера: 5.6.51
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cursachs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE `auto` (
  `auto_id` int(11) NOT NULL,
  `marka` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `markarus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auto_desk` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`auto_id`, `marka`, `markarus`, `auto_desk`) VALUES
(1, 'Audi', 'Ауди', 'Под маркой Audi выпускаются автомобили бизнес- и премиум-классов, спорткары, кроссоверы и другие модели, которые отличаются высочайшим качеством и современным дизайном.'),
(2, 'BMW', 'БМВ', 'BMW — одна из крупнейших немецких компаний, выпускающая в настоящее время мотоциклы, автомобили и велосипеды, — была образована на базе завода авиационных двигателей, основанного в 1913 году в Мюнхене.'),
(3, 'Chevrolet', 'Шевроле', 'Chevrolet («Шевроле», в Северной Америке часто сокращают до «Шеви») — одна из старейших автомобильных компаний, входит в концерн General Motors. Основателями являются Уильям Дюрант (он же создал концерн GM), а также гонщик и инженер Луи Шевроле.'),
(4, 'Citroen', 'Ситроен', 'Citroen (Ситроен) — французская марка. В 1919 году ее создал инженер и предприниматель Андре Ситроен. В отличие от Бентли, Ситроен по примеру Форда ставил задачу наладить производство доступных автомобилей.'),
(5, 'Ford', 'Форд', 'Компания Ford, в 1903 году основанная Г. Фордом, входит в число крупнейших производителей по общему объему выпуска автомобилей, а также в десятку известнейших публичных компаний в США.');

-- --------------------------------------------------------

--
-- Структура таблицы `podtip`
--

CREATE TABLE `podtip` (
  `id_podtip` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisanie` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loshadki` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `podtip`
--

INSERT INTO `podtip` (`id_podtip`, `name`, `opisanie`, `loshadki`, `type`) VALUES
(1, '45 L TDI quattro AТ', 'Автомат, полный привод, дизель, 5.9 с до 100 км/ч', '249 л.с.', 1),
(2, '45 TDI quattro AТ', 'Автомат, полный привод, дизель, 5.9 с до 100 км/ч', '249 л.с.', 1),
(3, '3.0 AT 411', 'Автомат, задний привод, бензин, 4.4 с до 100 км/ч', '411 л.с.', 3),
(4, '3.0 DCT', 'Автомат, задний привод, бензин, 4.3 с до 100 км/ч', '370 л.с.', 3),
(5, '1.5 MT', 'Механика, передний привод, бензин, 12.2 с до 100 км/ч', '106 л.с.', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`type_id`, `type`, `image`, `marka`) VALUES
(1, 'Audi A8 седан', 'audisedan.png', 1),
(2, 'Audi S5 купе', 'audicupe.png', 1),
(3, 'BMW M2 купе', 'bmwcupe.png', 2),
(4, 'BMW 7 седан', 'bmwsedan.png', 2),
(5, 'Chevrolet Nexia седан', 'shevroletsedan.png', 3),
(7, 'Citroen C4 седан', 'citroensedan.png', 4),
(8, 'Ford Transit фургон', 'fordavtobus.png', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `pass`) VALUES
(1, 'Vadim', 'bot', '3333'),
(2, 'Maxim', 'Maxim', '2222'),
(3, 'Maxim', 'adojwe', '1111'),
(4, 'Vadim', 'Vad', '1111'),
(5, 'Maxim', 'Maxim', '2222'),
(6, 'Maxim', 'aaaa', '1111'),
(7, 'Maxim', 'vasya', '1111'),
(8, 'Maxim', 'aaaa', '1234'),
(9, 'Maxim', 'Anton', '1111'),
(10, '111', '111', '111'),
(11, 'aaaa', 'ecfef', '1234'),
(12, 'aaaa', 'ecfef', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`auto_id`);

--
-- Индексы таблицы `podtip`
--
ALTER TABLE `podtip`
  ADD PRIMARY KEY (`id_podtip`),
  ADD KEY `type` (`type`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `marka` (`marka`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `podtip`
--
ALTER TABLE `podtip`
  MODIFY `id_podtip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `podtip`
--
ALTER TABLE `podtip`
  ADD CONSTRAINT `podtip_ibfk_1` FOREIGN KEY (`type`) REFERENCES `types` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_ibfk_1` FOREIGN KEY (`marka`) REFERENCES `auto` (`auto_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
