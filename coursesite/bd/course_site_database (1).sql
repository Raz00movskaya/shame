-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 17 2021 г., 18:08
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `course_site_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `doljnost`
--

CREATE TABLE `doljnost` (
  `Id_Doljnost` int(11) NOT NULL,
  `Doljnost` varchar(50) DEFAULT NULL,
  `Oklad` int(11) DEFAULT NULL,
  `Id_Otdel` int(11) NOT NULL,
  `Open_Vacancy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `doljnost`
--

INSERT INTO `doljnost` (`Id_Doljnost`, `Doljnost`, `Oklad`, `Id_Otdel`, `Open_Vacancy`) VALUES
(1, 'Главный бухгалтер', 30000, 1, 0),
(2, 'Бухгалтер', 20000, 1, 0),
(3, 'Бухгалтер-стажер', 10000, 1, 2),
(4, 'Менджер по рекламе', 100000, 2, 0),
(5, 'Старший продавец', 50000, 2, 0),
(6, 'Продавец', 15000, 2, 0),
(7, 'Старший инженер', 200000, 3, 1),
(8, 'Инженер', 150000, 3, 0),
(9, 'Инженер-стажер', 50000, 3, 0),
(10, 'Middle Python Developer', 5000000, 4, 1),
(11, '1С-разработчик', 1000, 4, 5),
(12, 'Битриксоид', 10000000, 4, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `Id_Login` int(11) NOT NULL,
  `Login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`Id_Login`, `Login`, `Password`, `Status`) VALUES
(1, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'guest'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(12, 'new_user', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(13, 'new_user2', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(14, 'guest1', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(15, 'user12', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(16, 'login', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(17, 'login1', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(18, 'meh', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(19, 'm', '81dc9bdb52d04dc20036dbd8313ed055', 'guest'),
(20, 'Raz00m', '81dc9bdb52d04dc20036dbd8313ed055', 'guest');

-- --------------------------------------------------------

--
-- Структура таблицы `otdeli`
--

CREATE TABLE `otdeli` (
  `Id_Otdel` int(11) NOT NULL,
  `Otdel` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `otdeli`
--

INSERT INTO `otdeli` (`Id_Otdel`, `Otdel`) VALUES
(1, 'Бухгалтерия'),
(2, 'Отдел продаж'),
(3, 'Инженерный'),
(4, 'Отдел разработки'),
(7, 'Дизайна');

-- --------------------------------------------------------

--
-- Структура таблицы `prikazi`
--

CREATE TABLE `prikazi` (
  `Id_Prikaz` int(11) NOT NULL,
  `DatePrikaza` date DEFAULT NULL,
  `Id_Zayavki` int(11) NOT NULL,
  `Prikaz` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prikazi`
--

INSERT INTO `prikazi` (`Id_Prikaz`, `DatePrikaza`, `Id_Zayavki`, `Prikaz`) VALUES
(1, '2021-10-13', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sotrudniki`
--

CREATE TABLE `sotrudniki` (
  `Id_Sotrudnik` int(11) NOT NULL,
  `FIO` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Obrazovanie` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nomer_telephona` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Id_Doljnost` int(11) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Id_Login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sotrudniki`
--

INSERT INTO `sotrudniki` (`Id_Sotrudnik`, `FIO`, `Obrazovanie`, `Nomer_telephona`, `Id_Doljnost`, `DateOfBirth`, `Id_Login`) VALUES
(1, 'Дармограй Полина Михайловна', '-', '686866', NULL, '2001-10-18', 1),
(9, 'none', '-', '1313331', NULL, '2001-10-13', 12),
(10, 'F I O', '-', '13131', NULL, '2000-10-12', 13),
(11, 'none', '-', '35335', NULL, '2001-10-13', 14),
(12, '-', '-', '244242', NULL, '2001-10-13', 15),
(13, 'test', '-', '121214', NULL, '2001-05-18', 16),
(14, 'test', '-', '353553', NULL, '2001-10-14', 17),
(15, '-', 'Нет', '135636265', NULL, '2001-10-18', 18),
(16, 'ч', 'Высшее специальное', '625446', NULL, '2000-10-18', 19),
(17, 'Разумовский Константин Михвйлович', 'Среднее специальное', '1414124', NULL, '2000-04-16', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `tipi_zayavok`
--

CREATE TABLE `tipi_zayavok` (
  `Id_TipZayavki` int(11) NOT NULL,
  `TipZayavki` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tipi_zayavok`
--

INSERT INTO `tipi_zayavok` (`Id_TipZayavki`, `TipZayavki`) VALUES
(1, 'О найме'),
(2, 'О увольнении'),
(3, 'Об отпуске');

-- --------------------------------------------------------

--
-- Структура таблицы `zayavki`
--

CREATE TABLE `zayavki` (
  `Id_TipZayavki` int(11) NOT NULL,
  `Id_Zayavki` int(11) NOT NULL,
  `Zayavka` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Id_Sotrudnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zayavki`
--

INSERT INTO `zayavki` (`Id_TipZayavki`, `Id_Zayavki`, `Zayavka`, `Status`, `Id_Sotrudnik`) VALUES
(1, 1, NULL, '-', 1),
(1, 8, 'ZayavkaTest.xls', '-', 15),
(1, 9, 'ZayavkaTest.xls', '-', 16),
(1, 10, 'ZayavkaTest.xls', '-', 17);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `doljnost`
--
ALTER TABLE `doljnost`
  ADD PRIMARY KEY (`Id_Doljnost`),
  ADD KEY `Id_Otdel` (`Id_Otdel`);

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id_Login`);

--
-- Индексы таблицы `otdeli`
--
ALTER TABLE `otdeli`
  ADD PRIMARY KEY (`Id_Otdel`);

--
-- Индексы таблицы `prikazi`
--
ALTER TABLE `prikazi`
  ADD PRIMARY KEY (`Id_Prikaz`),
  ADD KEY `Id_Zayavki` (`Id_Zayavki`);

--
-- Индексы таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  ADD PRIMARY KEY (`Id_Sotrudnik`),
  ADD KEY `Id_Doljnost` (`Id_Doljnost`),
  ADD KEY `Id_Login` (`Id_Login`);

--
-- Индексы таблицы `tipi_zayavok`
--
ALTER TABLE `tipi_zayavok`
  ADD PRIMARY KEY (`Id_TipZayavki`);

--
-- Индексы таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD PRIMARY KEY (`Id_Zayavki`),
  ADD KEY `Id_TipZayavki` (`Id_TipZayavki`),
  ADD KEY `Id_Sotrudnik` (`Id_Sotrudnik`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `doljnost`
--
ALTER TABLE `doljnost`
  MODIFY `Id_Doljnost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `Id_Login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `otdeli`
--
ALTER TABLE `otdeli`
  MODIFY `Id_Otdel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `prikazi`
--
ALTER TABLE `prikazi`
  MODIFY `Id_Prikaz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  MODIFY `Id_Sotrudnik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `tipi_zayavok`
--
ALTER TABLE `tipi_zayavok`
  MODIFY `Id_TipZayavki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zayavki`
--
ALTER TABLE `zayavki`
  MODIFY `Id_Zayavki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `doljnost`
--
ALTER TABLE `doljnost`
  ADD CONSTRAINT `doljnost_ibfk_1` FOREIGN KEY (`Id_Otdel`) REFERENCES `otdeli` (`Id_Otdel`);

--
-- Ограничения внешнего ключа таблицы `prikazi`
--
ALTER TABLE `prikazi`
  ADD CONSTRAINT `prikazi_ibfk_1` FOREIGN KEY (`Id_Zayavki`) REFERENCES `zayavki` (`Id_Zayavki`);

--
-- Ограничения внешнего ключа таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  ADD CONSTRAINT `sotrudniki_ibfk_1` FOREIGN KEY (`Id_Doljnost`) REFERENCES `doljnost` (`Id_Doljnost`),
  ADD CONSTRAINT `sotrudniki_ibfk_2` FOREIGN KEY (`Id_Login`) REFERENCES `login` (`Id_Login`);

--
-- Ограничения внешнего ключа таблицы `zayavki`
--
ALTER TABLE `zayavki`
  ADD CONSTRAINT `zayavki_ibfk_1` FOREIGN KEY (`Id_TipZayavki`) REFERENCES `tipi_zayavok` (`Id_TipZayavki`),
  ADD CONSTRAINT `zayavki_ibfk_2` FOREIGN KEY (`Id_Sotrudnik`) REFERENCES `sotrudniki` (`Id_Sotrudnik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
