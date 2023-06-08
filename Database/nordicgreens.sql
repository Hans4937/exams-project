-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 25, 2023 at 06:32 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nordicgreens`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusorder`
--

CREATE TABLE `cusorder` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `OrderAmount` int(6) DEFAULT NULL,
  `OrderPrice` decimal(6,0) DEFAULT NULL,
  `OrderDate` datetime DEFAULT NULL,
  `ShippingAddress` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CVR` varchar(8) NOT NULL,
  `CustomerEmail` varchar(30) NOT NULL,
  `CusPassword` varchar(30) DEFAULT NULL,
  `PhoneNumber` varchar(11) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Zip` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CVR`, `CustomerEmail`, `CusPassword`, `PhoneNumber`, `Address`, `Zip`) VALUES
(1, '56435923', 'rema1000@test.com', 'test123', '23232323', 'Odensevej 23', '5000'),
(2, '23456789', 'test@test.com', '123', '28450688', 'skibhusvej 20', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `BrandID` int(8) NOT NULL,
  `BrandName` varchar(30) DEFAULT NULL,
  `PhoneNumber` varchar(11) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `CVR` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`BrandID`, `BrandName`, `PhoneNumber`, `Address`, `CVR`) VALUES
(1, 'Katrine og Alfreds', '88888888', 'Bellingevej 34', '12345678'),
(2, 'Pedersens Udvalgte', '44224422', 'Odensevej 23', '92235632');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductCategory` varchar(50) DEFAULT NULL,
  `ProductEco` varchar(5) DEFAULT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `AmountInStock` int(4) DEFAULT NULL,
  `ProductPrice` decimal(6,0) DEFAULT NULL,
  `ProductDescription` varchar(255) DEFAULT NULL,
  `BrandID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductCategory`, `ProductEco`, `ProductName`, `AmountInStock`, `ProductPrice`, `ProductDescription`, `BrandID`) VALUES
(1, 'Tomater', 'Ja', 'Anna Tomater Øko', 50, '13', 'Anna tomaten er en mini blommetomat.', 2),
(2, 'Tomater', 'Ja', 'August Tomater Øko', 30, '9', 'August tomaten er en lille hjerteformet kvalitetstomat. Den har en fremragende smag, som både er frisk, syrlig og sød', 2),
(3, 'Agurker', 'Ja', 'Stammeagurk Øko', 25, '10', 'Stammeagurken er dyrket direkte på stammen af agurkeplanten uden sideskud. Det kræver masser af Pedersens daglige pleje og gode håndværk, men det er en omsorg, der virkelig kan smages.', 2),
(4, 'Tomater', 'Ja', 'Runde Tomater Øko', 40, '7', 'Pedersens Runde Tomater er passet, plejet og håndplukket på Fyn. De har fået lov til at modne helt på planten, hvilket giver dem en fin, sprød og aromatisk smag.', 2),
(5, 'Tomater', 'Ja', 'San Marzono Øko ', 60, '12', 'Pedersens San Marzano er en udsøgt tomat med en flot mørkerød farve og en karakteristisk, kraftig og sød smag. Det er en af Pedersens favoritter.', 2),
(6, 'Tomater', 'Ja', 'Cherry Tomater på stilk Øko', 35, '8', 'Pedersens Cherrytomater på stilk har en sødlig smag. Stilken hjælper med at bevare netop denne smag i tomaterne.', 2),
(7, 'Tomater', 'Ja', 'Cherry Tomater (Løse) Øko', 20, '11', 'Pedersens Økologiske Cherrytomater har en sødlig smag og en fin aroma. Humlebierne er pjattede med at arbejde med de økologiske blomster.', 2),
(8, 'Tomater', 'Ja', 'Intensity Tomater Øko', 45, '6', 'Gul intensity er ligesom den røde August tomat en meget intens og lækker smagsoplevelse. Den gule tomat har modsat den røde en mere fersk melon-smag med et strejf af frisk citrus.', 2),
(9, 'Tomater', 'Ja', 'Pedersens Fravalgte Tomater', 55, '14', 'Pedersens Fravalgte Tomater har små skønhedsfejl i udseendet, men den gode smag er den samme, så de skal naturligvis også have en\r\nplads på hylderne. De er søde og skønne, og så hjælper de os med at nedbringe mængden af madspild.', 2),
(10, 'Agurker', 'Ja', 'Fravalgte Agurker Øko', 28, '8', 'De her agurker har premium smag, men kan variere i størrelse og form. De er sprøde og skønne, og så hjælper de os med at nedbringe mængden af madspild. Derudover støtter vi Stop Spild Af Mad foreningen med 25 øre pr. solgt pose.', 2),
(11, 'Tomater', 'Nej', 'IdaTomater', 50, '10', 'Ida tomaten er Danmarks ældste officielle tomatsort. Den kan kendes på sin unikke sødme og krydrede smag.', 2),
(12, 'Tomater', 'Nej', 'Runde Tomater', 400, '20', 'Pedersens Runde Tomater er passet, plejet og håndplukket på Fyn. De har fået lov til at modne helt på planten, hvilket giver dem en fin, sprød og aromatisk smag.', 2),
(13, 'Tomater', 'Nej', 'Blommetomater', 200, '13', 'Pedersens Blommetomater er passet, plejet og håndplukket på Fyn og er kendetegnet ved deres ferske smag og faste struktur.', 2),
(14, 'Tomater', 'Nej', 'San Marzano Tomater', 200, '25', 'Pedersens San Marzano er en udsøgt tomat med en flot mørkerød farve og en karakteristisk, kraftig og sød smag.', 2),
(15, 'Peberfrugter', 'Nej', 'Peberfrugter', 200, '25', 'Pedersens Peberfrugter har en ekstra sprød og tyk skal. De har fået tid til at modne helt på planten, og det giver dem deres søde og krydrede smag.', 2),
(16, 'Peberfrugter', 'Nej', 'Palermo Snack Peber', 200, '25', 'Denne peber er sagen med sin fantastiske sprødhed afrundet med sødme og noter af frugtsmag. Den er perfekt til grillen, til udskæring i lange skiver og som sund snack til både børn og voksne.', 2),
(17, 'Konserves', 'Nej', 'Ketchup', 300, '20', 'Pedersens egen ketchup, består af rene råvarer og selvfølgelig indeholder den ingen E-numre. ketchuppen er ufiltreret og har derfor et lækkert ‘bid’. Tomaterne til Ketchuppen er dyrket på Fyn og tappet på verdens måske mindste tomatfabrik på Samsø.', 2),
(18, 'Konserves', 'Nej', 'Pastasauce', 900, '8', 'Pedersen har netop udviklet den lækreste pastasauce med Basilikum. Den består udelukkende af rene råvarer og indeholder ingen E-numre. Saucen er produceret af overskudstomater fra Pedersens gartneri i Bellinge på Fyn.', 2),
(19, 'Tomater', 'Nej', 'Snack Mix', 900, '10', 'Vores skønne Snack Mix består af 2 udvalgte tomatsorter med unik, intens, sødmefyldt, frugtig smag og sprødhed. Pedersen synes, at Snack Mix er særdeles velegnet til den lette snack og perfekt til madpakken.', 2),
(20, 'Tomater', 'Nej', 'Fravalgte Tomater', 500, '10', 'Pedersens Fravalgte Tomater har små skønhedsfejl i udseendet, men den gode smag er den samme, så de skal naturligvis også have en\r\nplads på hylderne. De er søde og skønne, og så hjælper de os med at nedbringe mængden af madspild.', 2),
(21, 'Agurker', 'Nej', 'Pedersens Fravalgte Agurker', 60, '15', 'De her agurker har premium smag, men kan variere i størrelse og form. Vi kalder dem Pedersens Fravalgte. De er sprøde og skønne, og så hjælper de os med at nedbringe mængden af madspild.', 2),
(22, 'Agurker', 'Ja', 'Økologiske Agurker', 500, '4', 'De økologiske agurker bliver dyrket med samme omhu og respekt for naturen og vores miljø, som vi udviser i vores tomatproduktion', 1),
(23, 'Tomater', 'Nej', 'Classic Tomater', 500, '8', 'Den klassiske tomat af en gammel sort med en meget fin, aromatisk smag og et utal af anvendelsesmuligheder. Tomaterne får lov til at modne helt på planten, inden de håndplukkes, sorteres og lægges direkte i salgsbakken.', 1),
(24, 'Peberfrugt', 'Nej', 'Peberfrugt', 500, '6', 'Velsmagende peberfrugter med en ekstra sprød og tyk skal. Når peberfrugten er modnet, bliver den plukket i hånden og lagt direkte i bakken. Peberfrugtsæsonen varer fra april - oktober ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cusorder`
--
ALTER TABLE `cusorder`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `CVR` (`CVR`),
  ADD UNIQUE KEY `CustomerEmail` (`CustomerEmail`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`BrandID`),
  ADD UNIQUE KEY `CVR` (`CVR`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `BrandID` (`BrandID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cusorder`
--
ALTER TABLE `cusorder`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `BrandID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cusorder`
--
ALTER TABLE `cusorder`
  ADD CONSTRAINT `cusorder_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `cusorder_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`BrandID`) REFERENCES `farmer` (`BrandID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
