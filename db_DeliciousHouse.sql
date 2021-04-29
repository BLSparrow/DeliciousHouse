-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 28 2021 г., 23:08
-- Версия сервера: 5.7.29
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_delicioushouse`
--

-- --------------------------------------------------------

--
-- Структура таблицы `baskets`
--

CREATE TABLE `baskets` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(4, 'Новинки', 'Новинки', 'new_1619090861.png'),
(5, 'Низкокалорийные', 'Низкокалорийные', 'apple_1619091400.png'),
(6, 'Торты', 'Торты', 'cake_1619091615.png'),
(7, 'Чизкейки', 'Чизкейки', 'cheezcake_1619091652.jpg'),
(8, 'Пироги', 'Пироги', 'Пирог_1619091766.png'),
(9, 'Печенье', 'Печенье', 'Печенье_1619091867.png'),
(10, 'Пирожное', 'Пирожное', 'Пирожное_1619092054.png'),
(11, 'Мороженое', 'Мороженое', 'Мороженое_1619092184.png'),
(12, 'Пончики', 'Пончики', 'Пончик_1619092325.png');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `country`, `image`) VALUES
(3, 'Россия', 'rus_1619092348.png'),
(4, 'Германия', 'Германия_1619116796.png'),
(5, 'Франция', 'Франция_1619116804.png'),
(6, 'Италия', 'Италия_1619116811.png'),
(7, 'США', 'США_1619116818.png'),
(8, 'Великобритания', 'brit_1619116826.png');

-- --------------------------------------------------------

--
-- Структура таблицы `delivery_methods`
--

CREATE TABLE `delivery_methods` (
  `id` int(11) NOT NULL,
  `delivery_method` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `delivery_methods`
--

INSERT INTO `delivery_methods` (`id`, `delivery_method`) VALUES
(1, 'Заберу сам'),
(2, 'Доставить на адрес');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `delivery_method_id` int(11) NOT NULL,
  `order_cost` float NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numberOfServings` int(255) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `country_id`, `name`, `description`, `image`, `numberOfServings`, `weight`, `price`) VALUES
(14, 6, 6, 'Кассата', 'состоит из слоев круглого бисквита, смоченного фруктовым соком и ликером, сочетающихся с рикоттой, фруктами и марципаном.', 'кассата_1619095022.jpg', 11, 990, 1050),
(15, 6, 6, 'Тирамису', 'Чередованием слоев печенья савоярди (дамские пальчики), пропитанного кофе, и крема (маскарпоне с сахаром и яйцами).', 'тирамису_1619095303.jpg', 10, 1000, 1500),
(16, 6, 6, 'Цукотто', 'Бисквитного тесто, заполненное начинкой. В качестве последней используют рикотту или взбитые сливки в сочетании с ягодами, цукатами, шоколадной крошкой.', 'цукотто_1619095523.jpg', 7, 1200, 1790),
(17, 6, 6, 'Дженовезе', 'Масляный крем, желе, фрукты, ликёр и сахарный сироп.', 'Дженовезе_1619095820.jpg', 10, 1000, 1200),
(18, 6, 6, 'Капрезе', 'Шоколад, орехи, сливочное масло, сахар, яйца, миндальная мука, ликёр. После выпечки торт имеет тонкую хрустящую корочку, но влажный, мягкий центр.', 'Компрезе_1619095878.jpg', 9, 950, 1750),
(19, 10, 6, 'Панна-котта', 'Готовят её из сливок, сахара, желатина и кофе.', 'панакота_1619096294.jpg', 6, 900, 820),
(20, 10, NULL, 'Брауни', 'Нежный шоколадный бисквит, растопленный шоколад, заварное кофе.', 'брауни_1619096788.jpg', 15, 1050, 1350),
(21, 8, 7, 'Пекановый пирог', 'Тончайшая песочная корзиночка, воздушный заварной крем, щедрый слой орехов пекан.', 'пекан_1619097587.jpg', 8, 1100, 1550),
(22, 8, 7, 'Лаймовый пирог', 'Румяная корзиночка из рассыпчатого песочного теста, воздушная начинка на основе сгущенного молока, освежающая кислинка лайма.', 'лаймовый_1619097873.jpg', 11, 1000, 1400),
(23, 6, 3, 'Торт &quot;Ванильно-карамельный&quot;', 'Бисквитный ванильный торт со слоем соленой хрустящей карамели и сливочного крема с молотыми стручкам ванили, покрыт толстым слоем карамели.', 'ванильно-карамельный_1619116074.jpg', 12, 1440, 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name_status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `name_status`) VALUES
(1, 'Выполняется'),
(2, 'Отменён'),
(3, 'В пути'),
(4, 'Доставлен/Выполнен');

-- --------------------------------------------------------

--
-- Структура таблицы `texts`
--

CREATE TABLE `texts` (
  `id` int(11) NOT NULL,
  `text` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `texts`
--

INSERT INTO `texts` (`id`, `text`) VALUES
(1, '<p>Если вы не сладкоежка, то вам стоит пролистать дальше…\r\n                    Если же вы любите побаловать себя сладким и узнать много интересного про сладости всего мира, то\r\n                    эта\r\n                    статья точно для вас.</p>\r\n\r\n                <p>У нас вы можете заказать и попробовать сладости со всего света: начиная с традиционных\r\n                    французских\r\n                    круассанов и заканчивая индийским Гулаб джамуном (молочные шарики в сиропе).</p>'),
(2, '<p><span class=\"bold\">Мы вас заинтересовали?</span><br><br>\r\n                    Если да, то вы смело можете погрузиться в волшебный мир нашего меню. Но хотелось бы ещё\r\n                    рассказать о\r\n                    том,\r\n                    что все наши продукты проходят тщательный отбор на качество и свежесть. У нас недопустимо\r\n                    использование\r\n                    продуктов с «ГМО». Все наши кондитерские изделия изготавливаются вручную профессиональными\r\n                    кондитерами с\r\n                    богатым стажем. Каждый десерт изготовленный тут же деликатно замораживается и благодаря\r\n                    прекрасно\r\n                    налаженной логистике, может быть отправлен заказчику в любую точку нашей страны.</p>\r\n                <p>Благодаря широкому ассортименту и выбору на любой вкус и кошелёк о нас узнают всё больше\r\n                    любителей и\r\n                    ценителей десертов. Будьте смелее и решительнее, поддайтесь соблазну и станьте нашим\r\n                    клиентом.</p>'),
(3, 'Первые 1000 покупателей получают скидку на весь ассортимент'),
(4, 'При заказе на сумму от 2500 руб. Панна-котта в подарок');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$DTvjGPAHtAPR6GU.uWwbgeMi8ecdFqnJUnSG1K59tpoqK10CpbBf6', 'Admin'),
(3, 'Иван', '$2y$10$WBIDtwI4btXza1v3nyZ4WOaN6jK8R6GorZLA6i9/Y3Fp8j6oWMy7.', 'Manager');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `delivery_methods`
--
ALTER TABLE `delivery_methods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_order` (`status_id`),
  ADD KEY `delivery_method_id` (`delivery_method_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `сountry_id` (`country_id`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texts`
--
ALTER TABLE `texts`
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
-- AUTO_INCREMENT для таблицы `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `delivery_methods`
--
ALTER TABLE `delivery_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `baskets`
--
ALTER TABLE `baskets`
  ADD CONSTRAINT `baskets_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `baskets_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`delivery_method_id`) REFERENCES `delivery_methods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
