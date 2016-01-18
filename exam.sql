-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2016, 15:04:37
-- Sunucu sürümü: 10.1.9-MariaDB
-- PHP Sürümü: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `exam`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_content` text COLLATE utf8_unicode_ci NOT NULL,
  `variant` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `answer_content`, `variant`) VALUES
(1, 1, '2', 'A'),
(2, 1, '14', 'B'),
(3, 1, '64', 'C'),
(4, 1, '48', 'D'),
(5, 1, '36', 'E'),
(6, 2, '169', 'A'),
(7, 2, '49', 'B'),
(8, 2, '1', 'C'),
(9, 2, '64', 'D'),
(10, 2, '36', 'E'),
(11, 3, '12', 'A'),
(12, 3, '16', 'B'),
(13, 3, '30', 'C'),
(14, 3, '36', 'D'),
(15, 3, '20', 'E'),
(16, 4, 'Şagird siyahısı', 'A'),
(17, 4, 'Mağazada anbardakı mallar haqda məlumat', 'B'),
(18, 4, 'Keçiləcək dərslərin siyahısı', 'C'),
(19, 4, 'Təhlükəsizlik texnikası kitabçası', 'D'),
(20, 4, 'Bankomatdan pulu çıxarma qaydası', 'E'),
(21, 5, '3', 'A'),
(22, 5, '5', 'B'),
(23, 5, '1', 'C'),
(24, 5, '4', 'D'),
(25, 5, '2', 'E');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text COLLATE utf8_unicode_ci,
  `question_img` text COLLATE utf8_unicode_ci,
  `answer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `question`
--

INSERT INTO `question` (`id`, `question`, `question_img`, `answer`, `value`) VALUES
(1, 'M=8 , N=6 olarsa aşağıdakı alqoritmin nəticəsi nə olar?', 'img/q1.jpg', 'B', 3),
(2, '', 'img/q2.png', 'B', 2),
(3, 'Arifin yaşı qardaşının yaşından 3 dəfə çoxdur.5 il sonra isə onun yaşı qardaşının yaşından iki dəfə çox olacaqdır.Arifin və qardaşının hazırda ikisinin birgə neçə yaşı var?', NULL, 'E', 1),
(4, 'Hansı tam alqoritmdir?', NULL, 'E', 3),
(5, 'Sağdakı fiqurlardan hansı sual işarəsinin yerində olmalıdır?', 'img/q5.png', 'D', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `result` int(11) NOT NULL DEFAULT '0',
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `students_answer`
--

CREATE TABLE `students_answer` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_answer` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Tablo için indeksler `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `students_answer`
--
ALTER TABLE `students_answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_id` (`s_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Tablo için AUTO_INCREMENT değeri `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `students_answer`
--
ALTER TABLE `students_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `students_answer`
--
ALTER TABLE `students_answer`
  ADD CONSTRAINT `students_answer_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
