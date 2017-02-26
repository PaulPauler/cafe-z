-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 26 2017 г., 21:54
-- Версия сервера: 5.5.54-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cafe_z`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu_category`
--

CREATE TABLE IF NOT EXISTS `menu_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `menu_category`
--

INSERT INTO `menu_category` (`id`, `name`, `is_active`, `comment`) VALUES
(1, 'Супы', 1, 'Вкусные гарниры ко вторым блюдам.'),
(2, 'Гарниры', 1, ''),
(3, 'Вторые блюда', 1, 'Мясные и рыбные блюда.');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `is_active` varchar(1) DEFAULT '1',
  `action_enabled` varchar(1) DEFAULT NULL,
  `position` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `comment` text NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `menu_item`
--

INSERT INTO `menu_item` (`id`, `name`, `weight`, `price`, `is_active`, `action_enabled`, `position`, `created_at`, `comment`, `category_id`) VALUES
(1, 'Гречка отварная', '150 гр', '33р.', '1', '1', '1', '2017-02-26 00:01:36', 'Рассыпчатая отварная гречневая каша.', 2),
(2, 'Икра овощная', '150 гр', '66р.', '1', NULL, '2', '2017-02-26 00:05:43', 'Коментарий про гарнир икру.', 2),
(3, 'Борщ со сметаной', '300 гр', '55р.', '1', NULL, '1', '2017-02-26 00:00:00', 'Очень вкусный борщ', 1),
(4, 'Бедро куриное отварное', '100 гр', '66р.', '1', NULL, '1', '2017-02-26 00:00:00', 'Бедро как бедро. Норм.', 3);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `menu_item`
--
ALTER TABLE `menu_item`
  ADD CONSTRAINT `menu_item_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `menu_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
