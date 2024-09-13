-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 12:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookberries3`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  `Image` varchar(500) NOT NULL,
  `CatId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`ID`, `Name`, `Price`, `Image`, `CatId`) VALUES
(66, 'Book Mark', 2, 'Book mark.webp', 9),
(67, 'Page Holder', 2, 'page holder.jpg', 9),
(68, 'Book Thumb Holder', 3, 'Book Thumb Holder.png', 9),
(69, 'Book Tote', 6, 'book tote.jpg', 9),
(70, 'Blue Light Glasses', 10, 'blue light blocking glasses.webp', 9),
(71, 'Sticky Notes', 2, 'Sticky_Notes-removebg-preview.png', 9),
(72, 'Book Stand', 10, 'Book Stand.jpg', 9),
(73, 'Book Valet', 15, 'Book Valet.png', 9),
(74, 'Bookshelf', 50, 'Bookshelf.webp', 9),
(75, 'Book Light', 8, 'Light-removebg-preview.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Author` varchar(150) NOT NULL,
  `Price` double NOT NULL,
  `Image` varchar(255) NOT NULL,
  `CatId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `Title`, `Author`, `Price`, `Image`, `CatId`) VALUES
(1, 'Before the Coffee Gets Cold', 'Toshikazu Kawaguchi', 8, 'Before The Coffee Gets Cold.jpg', 1),
(2, 'Tales From the Cafe', 'Toshikazu Kawaguchi', 10, 'Tales From The Cafe.jpg', 1),
(3, 'أصبحتُ أنتَ', 'أحلام مستغانمي', 8, 'Asba7to anta.jpg', 1),
(4, 'It Ends With Us', 'Colleen Hoover', 8, 'It Ends With Us.jpg', 1),
(5, 'It Starts With Us', 'Colleen Hoover', 12, 'It Starts With Us.jpg', 1),
(6, 'فتاة بروكلين', 'غيوم ميسو', 15, 'fatat brooklyn.jpg', 1),
(7, 'مجهولة نهر السّين', 'غيوم ميسو', 10, 'majhulat nahr al seen.jpg', 1),
(8, 'شقّة في باريس', 'غيوم ميسو', 8, 'shikka fi paris.jpg', 1),
(9, 'Status Anxiety\r\n', 'Alain de Botton', 12, 'Status Anxiety.jpg', 1),
(10, 'قلق السعي الى المكانة', 'آلان دو بوتون', 12, 'kalak al sa3i.jpg', 1),
(11, 'Atomic Habits', 'James Clear', 10, 'Atomic Habits.jpg', 2),
(12, 'بنات حواءالثلاث', 'اليف شافاك', 12, 'banat 7awaa.webp', 2),
(13, 'The Silent Patient', 'Alex Michaelides', 15, 'The silent Patient.jpg', 2),
(14, 'The Alchemist', 'Paulo Coelho', 5, 'The Alchemist.jpg', 2),
(15, 'إنفعالات النفس', 'رينيه ديكارت', 12, 'infi3alat al nafs.webp', 2),
(16, 'Where The Crawdads Sing', 'Delia Owens', 10, 'Where The Crawdads Sing.jpg', 2),
(17, 'عندما بكى نيتشه', 'إرفين د. يالوم', 20, 'indama baka.jpg', 2),
(18, 'موت صغير', 'محمد حسن علوان', 18, 'mawton sagheer.jpg', 2),
(19, 'The Island of Missing Trees', 'Elif Shafak', 20, 'The Island of Missing Trees.jpg', 2),
(20, 'ياسمين العودة', 'خولة حمدي', 15, 'yasameen al awdah.jpg', 2),
(21, 'Spare', 'Prince Harry', 20, 'Spare.jpg', 4),
(22, 'Steve Jobs', 'Walter Isaacson', 18, 'Steve Jobs.jpg', 4),
(23, 'Debriefing the President', 'John Nixon', 38, 'Debriefing the President.jpg', 4),
(24, 'Becoming', 'Michelle Obama', 20, 'Becoming.jpg', 4),
(25, 'I Am Malala', 'Malala Yousafzai', 16, 'I Am Malala.jpg', 4),
(26, 'Einstein', 'Walter Isaacson', 14, 'Einstein.jpg', 4),
(27, 'A Promised Land', 'Barak Obama', 20, 'A Promised Land.jpg', 4),
(28, 'Long Walk to Freedom', 'Nelson Mandela', 15, 'Long Walk to Freedom.webp', 4),
(29, 'Malcolm X', 'Alex Haley', 10, 'The Autobiography of Malcolm X.jpg', 4),
(30, 'Elon Musk', 'Ashlee Vange', 14, 'Elon Musk.jpg', 4),
(31, 'Frida', 'Hayden Herrera', 22, 'Frida.jpg', 4),
(32, 'Educated', 'Tara Westover', 15, 'Educated.jpg', 4),
(33, 'Born a Crime', 'Trevor Noah', 16, 'Born a Crime.jpg', 4),
(34, 'Eat, Pray, Love', 'Elizabeth Gilbert', 16, 'Eat, Pray, Love.jpg', 4),
(35, 'Leonardo da Vinci', 'Walter Isaacson', 12, 'Leonardo da Vinci.jpg', 4),
(36, 'الجريمة والعقاب', 'فيودور دوستويفيسكي', 25, 'al jarimah wal 3ikab.jpg', 6),
(37, 'الأخوة كرامازوڤ', 'فيودور دوستويفيسكي', 20, 'al ikhwah.jpeg', 6),
(38, 'المقامر', 'فيودور دوستويفيسكي', 6, 'al makamer.jpg', 6),
(39, 'الأبله', 'فيودور دوستويفيسكي', 20, 'Al ablah.jpg', 6),
(40, 'اللّيالي البيضاء', 'فيودور دوستويفيسكي', 8, 'allayali al bayda2.jpg', 6),
(41, 'الحرب والسلم', 'ليو تولستوي', 36, 'al 7arb wal salm.jpg', 7),
(42, 'أنا كارنينا', 'ليو تولستوي', 5, 'anna k..jpg', 7),
(43, 'البعث', 'ليو تولستوي', 20, 'al baath.jpg', 7),
(44, 'سعادة الأسرة', 'ليو تولستوي', 15, 'sa3adat al 2usrah.webp', 7),
(45, 'ما هو الفنّ', 'ليو تولستوي', 6, 'what is art.jpg', 7),
(46, 'ظلّ الرّيح', 'كارلوس زافون', 20, 'zol al ri7.jpg', 8),
(47, 'لعبة الملاك', 'كارلوس زافون', 25, 'lo3bat al malak.png', 8),
(48, 'سجين السماء', 'كارلوس زافون', 22, 'sajin al samaa.jpg', 8),
(49, 'متاهة الأرواح', 'كارلوس زافون', 31, 'matahat al arwa7.jpg', 8),
(50, 'مدينة من بخار', 'كارلوس زافون', 15, 'madinah min bukhar.jpg', 8),
(51, 'ثلاثيّة غرناطة', 'رضوى عاشور', 20, 'thulathiyat ghernatah.jpg', 5),
(52, 'رأيت رام اللّه', 'مريد البرغوثي', 18, 'ra2ayt ramallah.jpg', 5),
(53, 'عزازيل', 'يوسف زيدان', 16, 'azazil.jpg', 5),
(54, 'دروز بلغراد', 'ربيع جابر', 26, 'duruz bilgrad.jpg', 5),
(55, 'جداريّة', 'محمود درويش', 8, 'jidariyah.jpg', 5),
(56, 'الطّنطوريّة', 'رضوى عاشور', 20, 'al tanturiyah.jpg', 5),
(57, 'شريد المنازل', 'جبور الدويهي', 14, 'sharid al manazel.png', 5),
(58, 'أولاد حارتنا', 'نجيب محفوظ', 18, 'awlad 7artna.jpg', 5),
(59, 'عائد إلى حيفا', 'غسان كنفاني', 6, 'aa2ed ila hayfa.png', 5),
(60, 'سر الغرفة ٢٠٧', 'أحمد خالد توفيق', 10, 'ser al ghorfah 207.jpg', 5),
(61, 'ساق البامبو', 'سعود السنعوسي', 20, 'sak al bamboo.jpg', 5),
(62, 'حقائب الذاكرة', 'شربل قطان', 14, 'haka2eb al zakira.jpg', 5),
(63, 'في قلبي أنثى عبريّة', 'خولة حمدي', 15, 'fi kalbi ontha 3ibriyah.jpg', 5),
(64, 'أوراق شمعون المصري', 'أسامة الشاذلي', 26, 'awrak shamaoun.jpg', 5),
(65, 'جدائل اللّوز', 'إسلام مطور', 14, 'jada2el al lawz.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `bookcategory`
--

CREATE TABLE `bookcategory` (
  `ID` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookcategory`
--

INSERT INTO `bookcategory` (`ID`, `Name`) VALUES
(1, 'New Releases'),
(2, 'Bestsellers'),
(3, 'Cover'),
(4, 'Biographies'),
(5, 'أعمال عربية'),
(6, 'أعمال مترجمة - فيودور دوستويفيسكي'),
(7, 'أعمال مترجمة - ليو تولستوي'),
(8, 'أعمال مترجمة-كارلوس زافون'),
(9, 'Accessories'),
(11, 'Featured Authors');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Id` int(11) NOT NULL,
  `BId` int(11) NOT NULL,
  `AId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderNb` int(11) NOT NULL,
  `ItemId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OrderNb`, `ItemId`, `UserId`, `OrderDate`) VALUES
(23, 64, 2, '2024-01-06'),
(28, 47, 2, '2024-01-06'),
(30, 37, 2, '2024-01-06'),
(33, 8, 3, '2024-01-06'),
(34, 68, 3, '2024-01-06'),
(36, 17, 5, '2024-01-06'),
(40, 15, 5, '2024-01-06'),
(42, 59, 3, '2024-01-06'),
(46, 5, 3, '2024-01-10'),
(47, 3, 6, '2024-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `Id` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`Id`, `Role`) VALUES
(1, 'Administrator'),
(2, 'Public User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Salt` varchar(3) NOT NULL,
  `RoleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`, `Salt`, `RoleId`) VALUES
(1, 'Admin', 'efe624309aa439d847019586c2a40ae3342e1dc7d95d458be107183a8b316148', '4d6', 1),
(2, 'Safaa', 'a4dd8d4e7a4488ad8c7ba7a48d765f8a6d092fa5f037c229f9fcedd76e0bc89b', 'b40', 2),
(3, 'User2', 'f56e8bcfd8d4d9c66362bf040e7695f1c03293df7a6e28f1c41208e0f1543a2e', '7d4', 2),
(4, 'Joshkon', '2296a84c91b1188b8e1e416584447fd691ff3a40384d725bcdaa3d4157b04390', 'bfb', 2),
(5, 'Joshkon2', 'd340111482850b06f134c4a1c26d2987bd8caf3dda08ffb846be7f6f86d1cead', 'efd', 2),
(6, 'Tamara', 'e59a30f9a6c607744dba530efb2b2d533087c844ef750f32bc96c31cc1250dae', '642', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CatId` (`CatId`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cid` (`CatId`);

--
-- Indexes for table `bookcategory`
--
ALTER TABLE `bookcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `BId` (`BId`,`AId`),
  ADD KEY `AId` (`AId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderNb`),
  ADD KEY `BookId` (`ItemId`,`UserId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ItemId` (`ItemId`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RoleId` (`RoleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `bookcategory`
--
ALTER TABLE `bookcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderNb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_ibfk_1` FOREIGN KEY (`CatId`) REFERENCES `bookcategory` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`CatId`) REFERENCES `bookcategory` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`BId`) REFERENCES `book` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`AId`) REFERENCES `accessories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleId`) REFERENCES `userrole` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
