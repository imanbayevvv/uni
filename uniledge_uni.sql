-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 10:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniledge_uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `cnp`
--

CREATE TABLE `cnp` (
  `cnp_id` varchar(8) NOT NULL,
  `cnp_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cnp`
--

INSERT INTO `cnp` (`cnp_id`, `cnp_name`) VALUES
('6B011', 'Педагогика и психология'),
('6B012', 'Педагогика дошкольного воспитания и обучения'),
('6B0121', 'Военное дело'),
('6B013', 'Подготовка учителей без предметной специализации'),
('6B014', 'Подготовка учителей с предметной специализацией общего развития'),
('6B015', 'Подготовка учителей по естественнонаучным предметам'),
('6B016', 'Подготовка учителей по гуманитарным предметам'),
('6B017', 'Подготовка учителей по языкам и литературе'),
('6B018', 'Подготовка специалистов по социальной педагогике и самопознанию'),
('6B019', 'Подготовка специалистов по специальной педагогике'),
('6B021', 'Искусство'),
('6B022', 'Гуманитарные науки'),
('6B023', 'Языки и литература'),
('6B031', 'Социальные науки'),
('6B032', 'Журналистика и информация'),
('6B041', 'Бизнес и управление'),
('6B042', 'Право'),
('6B051', 'Биологические и смежные науки'),
('6B052', 'Окружающая среда'),
('6B053', 'Физические и химические науки'),
('6B054', 'Математика и статистика'),
('6B055', 'Геология'),
('6B061', 'Информационно-коммуникационные технологии'),
('6B062', 'Телекоммуникации'),
('6B063', 'Информационная безопасность'),
('6B071', 'Инженерия и инженерное дело'),
('6B072', 'Производственные и обрабатывающие отрасли'),
('6B073', 'Архитектура и строительство'),
('6B074', 'Водное хозяйство'),
('6B075', 'Стандартизация, сертификация и метрология (по отраслям)'),
('6B081', 'Растениеводство'),
('6B082', 'Животноводство'),
('6B083', 'Лесное хозяйство'),
('6B084', 'Рыбное хозяйство'),
('6B085', 'Землеустройство'),
('6B086', 'Водные ресурсы и водопользования'),
('6B087', 'Агроинженерия'),
('6B091', 'Ветеринария'),
('6B101', 'Здравоохранение'),
('6B102', 'Социальное обеспечение'),
('6B111', 'Сфера обслуживания'),
('6B112', 'Гигиена и охрана труда на производстве'),
('6B113', 'Транспортные услуги'),
('6B122', 'Национальная безопасность'),
('6B123', 'Общественная безопасность');

-- --------------------------------------------------------

--
-- Table structure for table `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `coment` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `uni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coments`
--

INSERT INTO `coments` (`id`, `firstname`, `lastname`, `date`, `coment`, `email`, `uni_id`) VALUES
(124, 'Тест', 'Тест', '2020-12-10 21:55:37', 'Очень классный отзыв Очень классный отзыв Очень классный отзыв Очень классный отзыв Очень классный отзыв Очень классный отзыв', 'test@test.kz', 522);

-- --------------------------------------------------------

--
-- Table structure for table `coo`
--

CREATE TABLE `coo` (
  `coo_id` varchar(8) NOT NULL,
  `coo_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coo`
--

INSERT INTO `coo` (`coo_id`, `coo_name`) VALUES
('6B01', 'Педагогические науки'),
('6B02', 'Искусство и гуманитарные науки'),
('6B03', 'Социальные науки, журналистика и информация'),
('6B04', 'Бизнес, управление и право'),
('6B05', 'Естественные науки, математика и статистика'),
('6B06', 'Информационно-коммуникационные технологии'),
('6B07', 'Инженерные, обрабатывающие и строительные отрасли'),
('6B08', 'Сельское хозяйство и биоресурсы'),
('6B09', 'Ветеринария'),
('6B10', 'Здравоохранение и социальное обеспечение (медицина)'),
('6B11', 'Услуги'),
('6B12', 'Национальная безопасность и военное дело');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) UNSIGNED NOT NULL,
  `lastname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `lastname`, `firstname`, `email`, `pas`) VALUES
(37, 'Админ', 'Админович', 'imanbaev01@gmail.com', '$2y$10$Cl6LPJ5uinxQn4Gojvhx/ur5Vw99141rHImgxudO9PpRTuzk5V9va'),
(39, 'Karabayev ', 'Nurdaulet', 'nurdaulet_erlan@mail.ru', '$2y$10$9m6ZWgn0PeQgsVFUv5mWxO8C55tI6/8XnY1YdHC.4.gGi6ByvKm.G'),
(40, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$ZYcCuLyujGOf.11k123zjustiVU4zP27fLaAqdRuhuhjPPbK8bIyK'),
(41, 'Саидулы', 'Азамат', 'azamattolegenov1@gmail.com', '$2y$10$J8aJWCBPuY00qHmdFhjq3uZ68MImjK7l.tVUHq0UXm4xaSWHgZsZ6'),
(43, 'Тестовый', 'Тест', 'test@test.kz', '$2y$10$G0ARBqO9p92i4D/I2kgv5OirtxdeA3mNCe7BfhbD2zxR0DlnyUAcS'),
(44, 'Иванов', 'Иван', 'ivanov.ivan@test.kz', '$2y$10$F4BWWubrOVHO9fe0ws1rQ.GDgyHuk.69qWsP61UlHrm5zaFYG7s4m');

-- --------------------------------------------------------

--
-- Table structure for table `op`
--

CREATE TABLE `op` (
  `op_id` int(11) NOT NULL,
  `op_name` varchar(256) NOT NULL,
  `op_text` text NOT NULL,
  `op_link` text DEFAULT NULL,
  `op_duration` int(1) DEFAULT NULL,
  `gop_id` varchar(8) DEFAULT NULL,
  `uni_id` int(11) DEFAULT NULL,
  `coo_id` varchar(8) DEFAULT NULL,
  `cnp_id` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `op`
--

INSERT INTO `op` (`op_id`, `op_name`, `op_text`, `op_link`, `op_duration`, `gop_id`, `uni_id`, `coo_id`, `cnp_id`) VALUES
(1, 'Media Technologies', 'Образовательная программа «Media Technologies» (Медиа технологии) включает в себя дисциплины по основам медиа технологий, которые позволяют студентам позиционировать себя как профессионалов в области медиа технологий, включая сферу цифровой журналистики, обработки и работы с изображениями, и видео. По результатам обучения студенты свободно овладеют навыками управления медиа технологиями в компании, а также несколькими языками программирования, и смогут разрабатывать различные системы для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке приложении для мобильных устройств, баз данных и веб-приложении.', 'https://astanait.edu.kz/media-technologies/', 3, 'B057', 522, '6B06', '6B061'),
(2, 'Cyber Security', 'Образовательная программа «Cybersecurity» (Кибербезопасность) включает в себя работу по информационной безопасности, по независимой и объективной оценке текущего уровня защищенности компьютерных систем и сетей, по идентифицированию имеющихся проблем безопасности, по проектированию и разработке систем обеспечения информационной безопасности организаций и предприятий. Программа позволит развить навыки в разработке программного обеспечения, а также в технологиях защиты информации и объектов информатизации, обеспечения целостности информации и анализа защищенности систем', 'https://astanait.edu.kz/cybersecurity/', 3, 'B058', 522, '6B06', '6B061'),
(3, 'IT Management', 'Образовательная программа «IT Management» посвящена обучению студентов теории и практики управления информационными технологиями.', 'https://astanait.edu.kz/it-management/', 3, 'B044', 522, '6B04', '6B041'),
(4, 'Computer Science', 'Образовательная программа «Computer Science» (Информатика) включает в себя дисциплины по основам ИТ технологий и программных средств, которые позволяют студентам позиционировать себя как профессионалов в области ИТ технологий, включая сферу разработки и сопровождения программного обеспечения различных масштабов. По результатам обучения студенты свободно овладеют навыками управления ИТ технологиями в компании, а также несколькими языками программирования, и смогут разрабатывать программное обеспечение для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке приложении для мобильных устройств, баз данных и веб-приложении.', 'https://astanait.edu.kz/computer-science/', 3, 'B057', 522, '6B06', '6B061'),
(5, 'Software Engineering', 'Образовательная программа «Software Engineering» (Программная Инженерия) включает в себя дисциплины по основам разработки программных средств и систем, которые позволяют студентам позиционировать себя как профессионалов в области разработки и сопровождения программного обеспечения различных масштабов. По результатам обучения студенты свободно овладеют несколькими языками программирования, смогут разрабатывать программное обеспечение для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке приложений для мобильных устройств, баз данных и веб-приложении.', 'https://astanait.edu.kz/software-engineering/', 3, 'B057', 522, '6B06', '6B061'),
(6, 'Big Data Analysis', 'Образовательная программа «Big Data Analysis» (Анализ больших данных) включает в себя дисциплины по основам ИТ технологий и программных средств, которые позволяют студентам позиционировать себя как профессионалов в области анализа данных, включая сферу разработки и сопровождения систем анализа данных различных масштабов. По результатам обучения студенты свободно овладеют навыками анализа данных, а также несколькими языками программирования, включая язык программирования Python и смогут разрабатывать модели и методы анализа данных для крупных компании, такие как банки, страховые компании, государственные и национальные организации и другие. Программа также позволит развить навыки в разработке для баз данных и веб-приложении.', 'https://astanait.edu.kz/big-data-analysis/', 3, 'B057', 522, '6B06', '6B061'),
(7, 'Industrial Automation', 'Образовательная программа «Industrial Automation» (Индустриальная автоматизация) включает в себя дисциплины по основам индустриальной автоматизации, который во многом предполагает разработку программных средств и систем для автоматизации работы в одном или нескольких промышленных секторах. По завершению студенты могут позиционировать себя как профессионалов в области разработки и сопровождения программного обеспечения в области индустриальной автоматизации различных масштабов. По результатам обучения студенты свободно овладеют несколькими языками программирования, смогут разрабатывать программное обеспечение для частных, государственных и национальных промышленных корпорации и организации.', 'https://astanait.edu.kz/industrial-automation/', 3, 'B057', 522, '6B06', '6B061'),
(8, 'Telecommunication Systems', 'Профессиональная деятельность выпускников программы направлена в область радиотехники, электроники, цифровых систем связи, интеллектуальных телекоммуникационных технологий, систем радиовещания и телевидения. Подготовка специалистов по радиотехнике, электронике и телекоммуникации будет осуществляться по новой образовательной программе (ОП). Содержание дисциплин образовательной программы разрабатывалось с учетом соответствующих образовательных программ ведущих университетов мира и международного классификатора профессиональной деятельности по направлению телекоммуникация. Видами профессиональной деятельности являются: производственнотехнологическая; сервисно-эксплуатационная; организационноуправленческая; монтажно-наладочная; расчетно-проектная; экспериментально-исследовательская. Предметами профессиональной деятельности являются системы, включающие в себя: разработку и эксплуатацию систем телекоммуникаций, радиосвязи, телевидения, радиовещания, радиолокации и навигации, радиоуправления, мобильной связи, спутниковой связи, радиопередачи и радиоприема телевизионных и звуковых сигналов, электронных и компьютерных систем и систем, управляемых с помощью микроконтроллеров и и микро ЭВМ.', 'https://astanait.edu.kz/telecommunication-systems/', 3, 'B059', 522, '6B06', '6B062'),
(9, 'Digital Journalism', 'Подготовка специалиста в области цифровых медиа, обладающего навыками работы с цифровыми мобильными технологиями сбора, обработки и передачи информации, умеющего создавать мультимедийный контент для медиа, владеющего инновационными журналистскими практиками, востребованными на современном рынке труда.', 'https://astanait.edu.kz/digital-journalism/', 3, 'B042', 522, '6B03', '6B032');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`sub_id`, `sub_name`) VALUES
(1, 'Математика'),
(2, 'Физика'),
(3, 'География'),
(4, 'Биология'),
(5, 'Химия'),
(6, 'Иностранный язык'),
(7, 'Всемирная история'),
(8, 'Человек. Общество. Право'),
(9, 'Русский язык'),
(10, 'Русская литература'),
(11, 'Казахский язык'),
(12, 'Казахская литература'),
(13, 'Творческий');

-- --------------------------------------------------------

--
-- Table structure for table `subcom`
--

CREATE TABLE `subcom` (
  `subcom_id` int(11) NOT NULL,
  `sub1_id` int(11) DEFAULT NULL,
  `sub2_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcom`
--

INSERT INTO `subcom` (`subcom_id`, `sub1_id`, `sub2_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 4, 5),
(4, 4, 3),
(5, 6, 7),
(6, 3, 6),
(7, 7, 8),
(8, 7, 3),
(9, 9, 10),
(10, 11, 12),
(11, 2, 5),
(12, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `univer`
--

CREATE TABLE `univer` (
  `gop_id` varchar(8) NOT NULL,
  `gop_name` varchar(256) NOT NULL,
  `subcom_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `univer`
--

INSERT INTO `univer` (`gop_id`, `gop_name`, `subcom_id`) VALUES
('B001', 'Педагогика и психология', 4),
('B002', 'Дошкольное обучение и воспитание', 4),
('B003', 'Педагогика и методика начального обучения', 4),
('B004', 'Подготовка учителей начальной военной подготовки', 12),
('B005', 'Подготовка учителей физической культуры', 12),
('B006', 'Подготовка учителей музыки', 12),
('B007', 'Подготовка учителей художественного труда и черчения', 12),
('B008', 'Подготовка учителей основы права и экономики', 8),
('B009', 'Подготовка учителей математики', 1),
('B010', 'Подготовка учителей физики', 1),
('B011', 'Подготовка учителей информатики', 1),
('B012', 'Подготовка учителей химии', 3),
('B013', 'Подготовка учителей биологии', 3),
('B014', 'Подготовка учителей географии', 8),
('B015', 'Подготовка учителей по гуманитарным предметам', 8),
('B016', 'Подготовка учителей казахского языка и литературы', 10),
('B017', 'Подготовка учителей русского языка и литературы', 9),
('B018', 'Подготовка учителей иностранного языка и литературы', 5),
('B019', 'Подготовка специалистов по социальной педагогике и самопознанию', 4),
('B020', 'Подготовка специалистов по специальной педагогике', 4),
('B021', 'Исполнительное искусство', 12),
('B022', 'Искусство эстрады', 12),
('B023', 'Инструментальное исполнительство', 12),
('B024', 'Музыковедение и искусствоведение', 12),
('B025', 'Традиционное музыкальное искусство', 12),
('B026', 'Дирижирование и композиция', 12),
('B027', 'Театральное искусство', 12),
('B028', 'Хореография', 12),
('B029', 'Аудиовизуальные средства и медиа производство', 12),
('B030', 'Изобразительное искусство', 12),
('B031', 'Мода, дизайн интерьера и промышленный дизайн', 12),
('B032', 'Философия и этика', 8),
('B033', 'Религия и теология', 12),
('B034', 'История и археология', 8),
('B035', 'Тюркология и востоковедение', 3),
('B036', 'Переводческое дело', 5),
('B037', 'Филология', 10),
('B038', 'Социология', 2),
('B039', 'Культурология', 3),
('B040', 'Политология и граждановедение', 3),
('B041', 'Психология', 4),
('B042', 'Журналистика и репортерское дело', 12),
('B043', 'Библиотечное дело, обработка информации и архивное дело', 10),
('B044', 'Менеджмент и управление', 2),
('B045', 'Аудит и налогообложение', 2),
('B046', 'Финансы, экономика, банковское и страховое дело', 2),
('B047', 'Маркетинг и реклама', 2),
('B048', 'Трудовые навыки', 2),
('B049', 'Право', 7),
('B050', 'Биологические и смежные науки', 3),
('B051', 'Окружающая среда', 4),
('B052', 'Наука о земле', 2),
('B053', 'Химия', 3),
('B054', 'Физика', 1),
('B055', 'Математика и статистика', 1),
('B056', 'Механика', 1),
('B057', 'Информационные технологии', 1),
('B058', 'Информационная безопасность', 1),
('B059', 'Коммуникации и коммуникационные технологии', 1),
('B060', 'Химическая инженерия и процессы', 11),
('B061', 'Материаловедение и технологии', 1),
('B062', 'Электротехника и энергетика', 1),
('B063', 'Электротехника и автоматизация', 1),
('B064', 'Механика и металлообработка', 1),
('B065', 'Автотранспортные средства', 1),
('B066', 'Морской транспорт и технологии', 1),
('B067', 'Воздушный транспорт и технологии', 1),
('B068', 'Производство продуктов питания', 3),
('B069', 'Производство материалов(стекло, бумага, пластик, дерево)', 1),
('B070', 'Текстиль: одежда, обувь и кожаные изделия', 1),
('B071', 'Горное дело и добыча полезных ископаемых', 1),
('B072', 'Технология фармацевтического производства', 3),
('B073', 'Архитектура', 12),
('B074', 'Градостроительство, строительные работы и гражданское строительство', 1),
('B075', 'Кадастр и землеустройство', 2),
('B076', 'Стандартизация, сертификация и метрология(по отраслям)', 1),
('B077', 'Растениеводство', 3),
('B078', 'Животноводство', 3),
('B079', 'Лесное хозяйство', 4),
('B080', 'Рыбное хозяйство', 3),
('B081', 'Землеустройство', 1),
('B082', 'Водные ресурсы и водопользования', 1),
('B083', 'Ветеринария', 3),
('B084', 'Сестринское дело', 3),
('B085', 'Фармация', 3),
('B086', 'Общая медицина', 3),
('B087', 'Стоматология', 3),
('B088', 'Педиатрия', 3),
('B089', 'Медицинская диагностика и технологии лечения', 3),
('B090', 'Социальная работа', 4),
('B091', 'Туризм', 2),
('B092', 'Досуг', 12),
('B093', 'Ресторанное дело и гостиничный бизнес', 6),
('B094', 'Санитарно-профилактические мероприятия', 1),
('B095', 'Транспортные услуги', 6),
('B096', 'Правоохранительная деятельность', 7),
('B097', 'Пожарная безопасность', 1);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `href` varchar(100) NOT NULL,
  `uni_id` int(5) NOT NULL,
  `img` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `fblink` text DEFAULT NULL,
  `instlink` text DEFAULT NULL,
  `num_grants` int(11) DEFAULT NULL,
  `num_old_grants` int(11) DEFAULT NULL,
  `ent` text DEFAULT NULL,
  `eng` text DEFAULT NULL,
  `text_academ` text DEFAULT NULL,
  `academ_link` text DEFAULT NULL,
  `videolink` text DEFAULT NULL,
  `text_military` text DEFAULT NULL,
  `military_link` text DEFAULT NULL,
  `military_photo_link` text DEFAULT NULL,
  `text_studlife` text DEFAULT NULL,
  `studlife_link` text DEFAULT NULL,
  `studlife_photo_link` text DEFAULT NULL,
  `text_studhouse` text DEFAULT NULL,
  `studhouse_link` text DEFAULT NULL,
  `studhouse_photo_link` text DEFAULT NULL,
  `mapcode` text DEFAULT NULL,
  `ms` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`href`, `uni_id`, `img`, `alt`, `logo`, `name`, `location`, `link`, `email`, `phone`, `fblink`, `instlink`, `num_grants`, `num_old_grants`, `ent`, `eng`, `text_academ`, `academ_link`, `videolink`, `text_military`, `military_link`, `military_photo_link`, `text_studlife`, `studlife_link`, `studlife_photo_link`, `text_studhouse`, `studhouse_link`, `studhouse_photo_link`, `mapcode`, `ms`) VALUES
('aitu.php', 522, 'img/aituu.png', 'Astana IT University', 'img/aitulogo.svg', 'Astana IT University', 'Нур-Султан, Казахстан', 'https://astanait.edu.kz/', 'info@astanait.edu.kz', '+7 (7172) 645710', 'https://www.facebook.com/astanaituniversity/', 'https://www.instagram.com/astana_it_university/', 1100, 600, '1. Лица имеющие среднее, техническое и профессиональное или послесреднее образование, набравшие по результатам ЕНТ не менее 65 баллов, в том числе не менее 5-ти баллов – по истории Казахстана, математической грамотности, грамотности чтения – язык обучения, и не менее 5-ти баллов по каждому профильному предмету, за исключением поступающих на образовательные программы высшего образования, требующие творческой подготовки.\r\n\r\n2. Лица имеющие среднее, техническое и профессиональное или послесреднее образование, набравшие по результатам ЕНТ не менее 65 баллов, в том числе не менее 5-ти баллов – по истории Казахстана, грамотности чтения – язык обучения, и не менее 5-ти баллов по каждому творческому экзамену.', '1. Лица, сдавшие дополнительные экзамены по английскому языку.\r\n\r\n2. Лица, имеющие следующие действующие международные сертификаты (подлинники), подтверждающие владение английским языком в соответствии с общеевропейскими компетенциями (стандартами), освобождаются от вступительного экзамена по английскому языку:\r\nInternational English Language Testing System (IELTS), пороговый балл — не менее 5.0;\r\nTest of English as a Foreign Language Institutional Testing Programm (TOEFL ITP) — не менее 460 баллов;\r\nTest of English as a Foreign Language Internet-based Test (TOEFL IBT), пороговый балл – 46-59;\r\nСертификат Aptis, с результатом, соответствующим уровню B1;\r\nСертификаты уровня B1, выданные языковыми центрами InterPress городов Нур-Султан, Алматы и Караганда в 2020 году.', 'Возможность провести один триместр в другой стране в качестве студента зарубежного университета, не прерывая своего обучения в Astana IT University. Задача программ академической мобильности – это интернационализация высшего образования и культурная интеграция молодежи разных стран. Пользуясь преимуществами академической мобильности, Вы получаете отличную возможность познакомиться с культурой и системой образования другой страны, улучшить владение иностранными языками, завести новых друзей и приобрести бесценный опыт. Обучение в сильном зарубежном вузе будет хорошим дополнением к Вашему диплому о высшем образовании и, безусловно, повысит Вашу конкурентоспособность на рынке труда.', 'https://astanait.edu.kz/international-relations/', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Wd68t5AfBXc\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Организация и осуществление на высоком уровне учебной и научно-методической работы по дисциплинам военной подготовки, воспитательной работы среди студентов, научных исследований по профилю кафедры, подготовки научно-педагогических кадров и повышения их квалификации. Работа кафедры направлена на подготовку из числа студентов офицеров запаса для ВС РК, обладающих глубоки­ми теоретическими и практическими знаниями, умениями и навыками, высокой профессиональной квалификацией, в соответствии с требованиями программы подготовки офицеров запаса из числа студентов ВУЗов по военно-учетным специальностям.', 'https://astanait.edu.kz/military-department/', '', 'Студенты «Astana IT University» живут интересной, яркой и насыщенной студенческой жизнью, дающей все возможности для профессионального роста, самореализации в общественной деятельности, творчестве и спорте, повышения уровня личностных компетенций. В университете вы можете стать участником большого количества событий городского и республиканского масштаба.', 'https://astanait.edu.kz/university-life/', '', 'Иногородним студентам предоставляются два типа комнат: двухместная и трехместная. Каждая комната оборудованы кроватями, рабочими столами и шкафами. Размеры комнаты варьируются в зависимости от типа. Для проживающих студентов доступны специально оборудованные кухни и столовая. Приготовление пищи разрешено только на кухне, которые оснащены холодильниками, электрическими плитами, духовым шкафом, вытяжным шкафом, микроволновкой и кухонным гарнитуром. Для комфорта проживания для обучающихся предусмотрены учебные комнаты, комнаты отдыха, комнаты для стирки белья, оборудованные автоматическими стиральными машинами, сушильные и гладильные комнаты. Также во всех жилых комплексах предоставлен доступ к интернету через wifi-сеть. Благоприятные социально-бытовые условия, полноценный досуг, порядок и дисциплина в Жилых домах университета, самоорганизация студентов и поддержка эдвайзеров – важные факторы успешной социально- психологической адаптации студентов к условиям обучения в университете.', 'https://astanait.edu.kz/university-life/student-housing/', '', '<iframe src=\"https://yandex.ru/map-widget/v1/?um=constructor%3Ae91ecefb8567a525b6ec5e452eda6d61e7454c23937fad4acf83082618bc798a&amp;source=constructor\" width=\"781\" height=\"479\" frameborder=\"0\" style=\"width: 100%\"></iframe>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uni_dates`
--

CREATE TABLE `uni_dates` (
  `date_id` int(11) NOT NULL,
  `uni_id` int(11) DEFAULT NULL,
  `uni_date` text NOT NULL,
  `uni_date_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uni_dates`
--

INSERT INTO `uni_dates` (`date_id`, `uni_id`, `uni_date`, `uni_date_info`) VALUES
(5, NULL, '20 июня - 5 июля', 'Единое национальное тестирование (ЕНТ)'),
(6, NULL, '13 - 20 июля', 'Подача заявления на участие в конкурсе по присуждению грантов'),
(7, 522, 'с 25 мая', 'Онлайн регистрация для подачи документов'),
(8, 522, '1 июня - 16 июля', 'Регистрация для сдачи экзамена по английскому языку'),
(9, 522, '20 июня - 7 июля', 'Регистрация для сдачи творческого экзамена'),
(10, 522, '6 - 19 июля', 'Экзамен по английскому языку'),
(11, 522, '8 - 13 июля', 'Творческий экзамен'),
(12, 522, 'до 25 августа', 'Подача заявления на прием на платное обучение');

-- --------------------------------------------------------

--
-- Table structure for table `uni_photos`
--

CREATE TABLE `uni_photos` (
  `photo_id` int(11) NOT NULL,
  `uni_id` int(11) NOT NULL,
  `photo_link` text NOT NULL,
  `slider` tinyint(1) DEFAULT NULL,
  `gallery` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cnp`
--
ALTER TABLE `cnp`
  ADD PRIMARY KEY (`cnp_id`);

--
-- Indexes for table `coments`
--
ALTER TABLE `coments`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `coo`
--
ALTER TABLE `coo`
  ADD PRIMARY KEY (`coo_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `op`
--
ALTER TABLE `op`
  ADD PRIMARY KEY (`op_id`),
  ADD KEY `gop_id` (`gop_id`),
  ADD KEY `uni_id` (`uni_id`),
  ADD KEY `coo_id` (`coo_id`),
  ADD KEY `cnp_id` (`cnp_id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `subcom`
--
ALTER TABLE `subcom`
  ADD PRIMARY KEY (`subcom_id`),
  ADD KEY `sub1_id` (`sub1_id`),
  ADD KEY `sub2_id` (`sub2_id`);

--
-- Indexes for table `univer`
--
ALTER TABLE `univer`
  ADD PRIMARY KEY (`gop_id`),
  ADD KEY `subcom_id` (`subcom_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`uni_id`);

--
-- Indexes for table `uni_dates`
--
ALTER TABLE `uni_dates`
  ADD PRIMARY KEY (`date_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `uni_photos`
--
ALTER TABLE `uni_photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `op`
--
ALTER TABLE `op`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcom`
--
ALTER TABLE `subcom`
  MODIFY `subcom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uni_dates`
--
ALTER TABLE `uni_dates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uni_photos`
--
ALTER TABLE `uni_photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coments`
--
ALTER TABLE `coments`
  ADD CONSTRAINT `coments_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `universities` (`uni_id`);

--
-- Constraints for table `op`
--
ALTER TABLE `op`
  ADD CONSTRAINT `op_ibfk_1` FOREIGN KEY (`gop_id`) REFERENCES `univer` (`gop_id`),
  ADD CONSTRAINT `op_ibfk_2` FOREIGN KEY (`uni_id`) REFERENCES `universities` (`uni_id`),
  ADD CONSTRAINT `op_ibfk_3` FOREIGN KEY (`coo_id`) REFERENCES `coo` (`coo_id`),
  ADD CONSTRAINT `op_ibfk_4` FOREIGN KEY (`cnp_id`) REFERENCES `cnp` (`cnp_id`);

--
-- Constraints for table `subcom`
--
ALTER TABLE `subcom`
  ADD CONSTRAINT `subcom_ibfk_1` FOREIGN KEY (`sub1_id`) REFERENCES `sub` (`sub_id`),
  ADD CONSTRAINT `subcom_ibfk_2` FOREIGN KEY (`sub2_id`) REFERENCES `sub` (`sub_id`);

--
-- Constraints for table `univer`
--
ALTER TABLE `univer`
  ADD CONSTRAINT `univer_ibfk_1` FOREIGN KEY (`subcom_id`) REFERENCES `subcom` (`subcom_id`);

--
-- Constraints for table `uni_dates`
--
ALTER TABLE `uni_dates`
  ADD CONSTRAINT `uni_dates_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `universities` (`uni_id`);

--
-- Constraints for table `uni_photos`
--
ALTER TABLE `uni_photos`
  ADD CONSTRAINT `uni_photos_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `universities` (`uni_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
