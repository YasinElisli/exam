-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Oca 2016, 09:36:10
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
(25, 5, '2', 'E'),
(26, 6, 'Veb saytların lisenziya tarixi', 'A'),
(27, 6, 'B.	Veb saytların faylarının və müvafiq veb proqram təminatının saxlandığı yer', 'B'),
(28, 6, 'Veb saytların idarə paneli', 'C'),
(29, 6, 'Veb saytların adı', 'D'),
(30, 6, 'Veb saytların proqram təminatı', 'E'),
(31, 7, '8', 'A'),
(32, 7, '1', 'B'),
(33, 7, '7', 'C'),
(34, 7, '10', 'D'),
(35, 7, '5', 'E'),
(36, 8, '195', 'A'),
(37, 8, '170', 'B'),
(38, 8, '208', 'C'),
(39, 8, '152', 'D'),
(40, 8, '99', 'E'),
(41, 9, 'Məsələnin həlli üçün olan düsturlar toplusu', 'A'),
(42, 9, 'Addım-addım izah üsulları', 'B'),
(43, 9, 'Müəyyən bir məsələni həll etmək üçün lazım olan dəqiq qaydalar ardıcıllığı', 'C'),
(44, 9, 'Proqram təminatının planı', 'D'),
(45, 9, 'Alqoritmin dəqiq tərifi hələ verilməmişdir', 'E'),
(46, 10, '2*100!', 'A'),
(47, 10, '200', 'B'),
(48, 10, '100!', 'C'),
(49, 10, '2', 'D'),
(50, 10, '202', 'E'),
(51, 11, '43', 'A'),
(52, 11, '19', 'B'),
(53, 11, '21', 'C'),
(54, 11, '0', 'D'),
(55, 11, '18', 'E'),
(56, 12, '31', 'A'),
(57, 12, '12', 'B'),
(58, 12, '15', 'C'),
(59, 12, '17', 'D'),
(60, 12, '11', 'E'),
(61, 13, '6', 'A'),
(62, 13, '54', 'B'),
(63, 13, '49', 'C'),
(64, 13, '7', 'D'),
(65, 13, '21', 'E'),
(66, 14, '1', 'A'),
(67, 14, '6', 'B'),
(68, 14, 'Sonsuz dövr yaranar', 'C'),
(69, 14, '5', 'D'),
(70, 14, '4', 'E'),
(71, 15, 'ftp://www.tehsil.az', 'A'),
(72, 15, 'info@tehsil.az', 'B'),
(73, 15, 'http://www.tehsil.az', 'C'),
(74, 15, 'www.tehsil', 'D'),
(75, 15, 'www.http//:tehsil.az', 'E'),
(76, 16, '8', 'A'),
(77, 16, '12', 'B'),
(78, 16, '16', 'C'),
(79, 16, '22', 'D'),
(80, 16, '4', 'E'),
(81, 17, '200 manat', 'A'),
(82, 17, '242 manat 30 qəpik', 'B'),
(83, 17, '193 manat 60 qəpik', 'C'),
(84, 17, '118 manat 80 qəpik', 'D'),
(85, 17, '240 manat', 'E'),
(86, 18, '93', 'A'),
(87, 18, '13', 'B'),
(88, 18, '39', 'C'),
(89, 18, '31', 'D'),
(90, 18, '40', 'E'),
(91, 19, '3,5,2,4,1,3,0', 'A'),
(92, 19, '5,2,4,1,3,0,2', 'B'),
(93, 19, '6,4,7,5,8,6,9', 'C'),
(94, 19, '9,6,8,5,7,4,6', 'D'),
(95, 19, '3,0,2,-1,1,-2,1', 'E'),
(96, 20, 'Veb saytların sahibinin adları', 'A'),
(97, 20, 'Veb saytların uzantısı', 'B'),
(98, 20, 'Veb saytların İP ünvanı', 'C'),
(99, 20, 'Veb saytların adı', 'D'),
(100, 20, 'Veb saytların fatyllarının saxlandığı disk', 'E'),
(101, 21, 'Qələm', 'A'),
(102, 21, 'Kompyuter', 'B'),
(103, 21, 'Hekayə', 'C'),
(104, 21, 'Dəftər', 'D'),
(105, 21, 'Məktub', 'E'),
(106, 22, '12 kq', 'A'),
(107, 22, '3 kq', 'B'),
(108, 22, 'Heç bir halda', 'C'),
(109, 22, '1 kq və ya daha az', 'D'),
(110, 22, '4 kq', 'E'),
(111, 23, 'Sybase SQL Server', 'A'),
(112, 23, 'Adobe Flash', 'B'),
(113, 23, 'Microsoft SQL Server', 'C'),
(114, 23, 'Microsoft Access', 'D'),
(115, 23, 'Oracle', 'E'),
(116, 24, 'Verilənlər bazası', 'A'),
(117, 24, 'Verilənlər bazasının cədvəli', 'B'),
(118, 24, 'Verilənlər bazasının son redaktə tarixi', 'C'),
(119, 24, 'Verilənlər bazasının yerləşdiyi host', 'D'),
(120, 24, 'Verilənlər bazasının ixtiyari elementi', 'E'),
(121, 25, 'Hipermətndən ibarət verilənlər bazası cədvəli', 'A'),
(122, 25, 'İnternetə bağlı server', 'B'),
(123, 25, 'İnternet səhifələrin görünməsini təmin edən səyyah proqram', 'C'),
(124, 25, 'Hiper mətnlərin tanınma dili', 'D'),
(125, 25, 'Proqramlaşdırma dili', 'E');

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
(5, 'Sağdakı fiqurlardan hansı sual işarəsinin yerində olmalıdır?', 'img/q5.png', 'D', 1),
(6, 'Veb hostinq nə deməkdir?', NULL, 'B', 2),
(7, 'a=3, b=8 olarsa alqoritmin sonunda nə çap olunar?', 'img/q7.png', 'A', 2),
(8, '10, 26, 65, ? , 442', NULL, 'B', 4),
(9, 'Alqoritmin dəqiq tərifi aşağıdakılardan hansıdır?', NULL, 'E', 1),
(10, '(for i:=1 to 100 do k:=i*2;) </br>\r\nəməliyyatı sonunda k hansı qiyməti almış olar? \r\n', NULL, 'B', 2),
(11, 'a=b-1 </br>\r\nb=2a+3 </br>\r\na=b-a </br>\r\nAlqoritm yerinə yetiriləndən sonra a-nın qiyməti 20 olmuşdur. Alqoritmin yerinə yetirilməsindən əvvəl b nin qiyməti neçə idi?\r\n', NULL, 'E', 3),
(12, 'A=5+(2*(9+5)-4)/2 </br>\r\nA-nın dəyəri nədir?\r\n', NULL, 'D', 1),
(13, 'x*y-?', 'img/q13.png', 'C', 4),
(14, 'a:=0; while (a<=5) do (a:=0; a:=a+1;) </br>\r\nƏməliyyatı neçə addım davam edər?\r\n', NULL, 'C', 3),
(15, 'Bunlardan hansi veb səhifə ünvanıdır?', NULL, 'C', 1),
(16, 'Verilmiş alqoritmdə b nin nəticəsi nə olacaq? </br>\r\na integer :=0; b integer :=4; </br>\r\nbegin </br>\r\na:=a+8; </br>\r\nb:=a+b; </br>\r\nend;\r\n', NULL, 'B', 3),
(17, '200 manata olan mal əvvəlcə 10% qalxdı,sonra yenə 10% qalxdı,daha sonra 20% düşdü.Mal indi neçəyədir?', '', 'C', 4),
(18, '? işarəsinin yerinə uyğun gələn variantı seçin </br>\r\na⊠b=a*b+a:b </br>\r\na⊞b=a+a⊠b </br>\r\n9⊞3 -?\r\n', NULL, 'C', 1),
(19, 'Aşağıdakı ardıcıllıqlardan hansı verilən ardıcıllıqla eyni qaydada tərtib edilmişdir? </br>\r\n5,7,4,6,3,5,2\r\n', NULL, 'A', 1),
(20, 'Domen (domain) nədir?', NULL, 'D', 2),
(21, 'Proqramçı → Kod\r\nYazıçı → ?', NULL, 'C', 2),
(22, '? işarəsinin yerinde tarazlığı saxlamaq üçün nə qədər yük olmalıdır.', 'img/q22.png', 'B', 1),
(23, 'Hansı proqram Verilənlər Bazasını İdareətmə Sistemlərinə(VBİS) aid deyil?', NULL, 'B', 1),
(24, 'Database deyəndə nə başa düşülür?', NULL, 'A', 1),
(25, 'HTML nədir?', NULL, 'D', 1);

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

--
-- Tablo döküm verisi `student`
--

INSERT INTO `student` (`id`, `name`, `surname`, `tel`, `result`, `reg_date`) VALUES
(1, 'Yasin', 'Elisli', '0554626882', 0, '2016-01-19 06:08:07'),
(2, 'Yasin', 'Elislii', '323123', 0, '2016-01-21 08:57:51'),
(3, 'Orxan', 'Fermanli', '123456', 3, '2016-01-21 09:00:01'),
(4, 'dfdsfs', 'fsdf', '123213123', 6, '2016-01-21 09:04:29'),
(5, 'dfdsfs', 'fsdf', '123213123', 6, '2016-01-21 09:05:18'),
(6, 'dfdsfs', 'fsdf', '123213123', 6, '2016-01-21 09:06:09'),
(7, 'dfdsfs', 'fsdf', '123213123', 6, '2016-01-21 09:11:50'),
(8, 'dfdsfs', 'fsdf', '123213123', 6, '2016-01-21 09:12:12'),
(9, 'dfdsfs', 'fsdf', '123213123', 6, '2016-01-21 09:12:55'),
(10, 'dfdss', 'dfsfdf', '23354456546', 0, '2016-01-21 09:13:18'),
(11, 'test', 'sss', '12345', 24, '2016-01-21 09:26:31'),
(12, 'test2', 'dsss', '12345', 2, '2016-01-21 09:30:31'),
(13, 'test2', 'dsss', '12345', 2, '2016-01-21 09:32:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `students_answer`
--

CREATE TABLE `students_answer` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `s_answer` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `students_answer`
--

INSERT INTO `students_answer` (`id`, `s_id`, `question_id`, `s_answer`) VALUES
(1, 11, 1, 'B'),
(2, 11, 2, 'B'),
(3, 11, 3, ''),
(4, 11, 4, 'E'),
(5, 11, 5, ''),
(6, 11, 6, 'B'),
(7, 11, 7, ''),
(8, 11, 8, ''),
(9, 11, 9, 'E'),
(10, 11, 10, ''),
(11, 11, 11, ''),
(12, 11, 12, ''),
(13, 11, 13, 'C'),
(14, 11, 14, ''),
(15, 11, 15, 'C'),
(16, 11, 16, ''),
(17, 11, 17, ''),
(18, 11, 18, ''),
(19, 11, 19, ''),
(20, 11, 20, 'D'),
(21, 11, 21, 'C'),
(22, 11, 22, 'B'),
(23, 11, 23, 'B'),
(24, 11, 24, 'A'),
(25, 11, 25, 'D'),
(26, 12, 1, ''),
(27, 12, 2, ''),
(28, 12, 3, ''),
(29, 12, 4, ''),
(30, 12, 5, ''),
(31, 12, 6, ''),
(32, 12, 7, ''),
(33, 12, 8, ''),
(34, 12, 9, ''),
(35, 12, 10, ''),
(36, 12, 11, ''),
(37, 12, 12, ''),
(38, 12, 13, ''),
(39, 12, 14, ''),
(40, 12, 15, ''),
(41, 12, 16, ''),
(42, 12, 17, ''),
(43, 12, 18, ''),
(44, 12, 19, ''),
(45, 12, 20, 'C'),
(46, 12, 21, 'C'),
(47, 12, 22, ''),
(48, 12, 23, ''),
(49, 12, 24, ''),
(50, 12, 25, ''),
(51, 13, 1, ''),
(52, 13, 2, ''),
(53, 13, 3, ''),
(54, 13, 4, ''),
(55, 13, 5, ''),
(56, 13, 6, ''),
(57, 13, 7, ''),
(58, 13, 8, ''),
(59, 13, 9, ''),
(60, 13, 10, ''),
(61, 13, 11, ''),
(62, 13, 12, ''),
(63, 13, 13, ''),
(64, 13, 14, ''),
(65, 13, 15, ''),
(66, 13, 16, ''),
(67, 13, 17, ''),
(68, 13, 18, ''),
(69, 13, 19, ''),
(70, 13, 20, 'C'),
(71, 13, 21, 'C'),
(72, 13, 22, ''),
(73, 13, 23, ''),
(74, 13, 24, ''),
(75, 13, 25, '');

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
  ADD KEY `s_id` (`s_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- Tablo için AUTO_INCREMENT değeri `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Tablo için AUTO_INCREMENT değeri `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Tablo için AUTO_INCREMENT değeri `students_answer`
--
ALTER TABLE `students_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
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
  ADD CONSTRAINT `students_answer_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_answer_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
