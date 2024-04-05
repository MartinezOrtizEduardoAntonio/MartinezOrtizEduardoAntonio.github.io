-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2024 a las 18:43:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `Id` int(5) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`Id`, `nombre`, `correo`) VALUES
(1, 'Whitley, Bianca G.', 'proin.non@aol.com'),
(2, 'Donaldson, Brady F.', 'nec.ligula@yahoo.edu'),
(3, 'Palmer, Clementine X.', 'ullamcorper.viverra@icloud.com'),
(4, 'Tyler, Allen V.', 'malesuada.fames@outlook.ca'),
(5, 'Barlow, Porter L.', 'donec.egestas@google.couk'),
(6, 'Jimenez, Sopoline T.', 'est.vitae@icloud.org'),
(7, 'Bennett, Kenneth C.', 'massa.rutrum@aol.net'),
(8, 'Lindsay, Brody Q.', 'risus.nunc@google.net'),
(9, 'Hendricks, Roary D.', 'velit.justo.nec@google.ca'),
(10, 'Floyd, Abraham T.', 'vel@protonmail.net'),
(11, 'Hendricks, Neville J.', 'ipsum.sodales@google.ca'),
(12, 'Drake, Lee W.', 'libero.et@icloud.net'),
(13, 'Baxter, Burke T.', 'eu.turpis.nulla@outlook.edu'),
(14, 'Patton, Yoko V.', 'malesuada.fames.ac@outlook.couk'),
(15, 'Franco, Philip L.', 'dui.cras@google.net'),
(16, 'Gonzalez, Cherokee F.', 'velit.sed@icloud.ca'),
(17, 'Simon, Ariel U.', 'cursus.et.eros@hotmail.org'),
(18, 'Castaneda, Felicia V.', 'lobortis.class.aptent@icloud.org'),
(19, 'Bridges, Ciaran H.', 'venenatis.vel@hotmail.net'),
(20, 'Douglas, Hedwig K.', 'non.hendrerit@hotmail.ca'),
(21, 'Hyde, Donna D.', 'vulputate.mauris@yahoo.ca'),
(22, 'Fernandez, Zephania G.', 'quisque@protonmail.couk'),
(23, 'Hull, Mannix D.', 'nunc.laoreet.lectus@yahoo.edu'),
(24, 'French, Berk B.', 'sapien.molestie@hotmail.edu'),
(25, 'Ward, Herman M.', 'nisi@yahoo.couk'),
(26, 'Mcfadden, Paula W.', 'primis.in@outlook.org'),
(27, 'Mathews, Jaden D.', 'magna.et.ipsum@google.edu'),
(28, 'Hughes, Quamar A.', 'et@google.edu'),
(29, 'Richards, Edan L.', 'eu.accumsan@google.net'),
(30, 'Tillman, Brenna B.', 'convallis.in@protonmail.ca'),
(31, 'Wyatt, Quemby O.', 'volutpat.nunc@icloud.edu'),
(32, 'Yates, Nina W.', 'vestibulum.neque.sed@outlook.edu'),
(33, 'Morgan, Ezra Y.', 'non.bibendum.sed@aol.com'),
(34, 'Bennett, Ray K.', 'semper.rutrum@outlook.org'),
(35, 'Goodwin, Lydia P.', 'ipsum.dolor@hotmail.com'),
(36, 'Glass, Jeremy O.', 'ornare.fusce@aol.couk'),
(37, 'Sears, Allistair M.', 'molestie@google.com'),
(38, 'Boone, Warren K.', 'sit.amet@aol.edu'),
(39, 'Livingston, Althea O.', 'egestas@yahoo.ca'),
(40, 'Wilkinson, Regan Q.', 'accumsan.convallis@hotmail.ca'),
(41, 'Pate, Ryan S.', 'nullam.nisl@outlook.com'),
(42, 'Mathews, Serena T.', 'dui.nec@yahoo.org'),
(43, 'Hill, Clinton P.', 'posuere.at@aol.ca'),
(44, 'Vasquez, Aline E.', 'congue.in@yahoo.com'),
(45, 'Foster, Jana H.', 'fringilla.cursus@aol.couk'),
(46, 'Phelps, Connor R.', 'luctus.et@icloud.com'),
(47, 'Koch, Mechelle G.', 'metus.vitae@google.edu'),
(48, 'Foster, Evan F.', 'orci@yahoo.com'),
(49, 'Baker, Catherine E.', 'cubilia@aol.edu'),
(50, 'Hoover, Davis L.', 'pede.praesent@outlook.org'),
(51, 'William, John J.', 'ipsum.ac.mi@google.org'),
(52, 'Watts, Rigel N.', 'vulputate@yahoo.org'),
(53, 'Stephenson, Josiah C.', 'dignissim.lacus@outlook.com'),
(54, 'Cline, Kaitlin H.', 'neque@icloud.ca'),
(55, 'England, Sean S.', 'pellentesque.sed.dictum@yahoo.edu'),
(56, 'Mcgee, Basia V.', 'ut@yahoo.net'),
(57, 'Johns, Paul M.', 'tempor.est@hotmail.edu'),
(58, 'Hammond, Barrett Y.', 'rutrum.fusce@aol.net'),
(59, 'Curry, Gil F.', 'tristique.senectus@google.com'),
(60, 'Rowland, Jackson H.', 'id.risus.quis@hotmail.org'),
(61, 'Small, Amir U.', 'amet.consectetuer@icloud.ca'),
(62, 'Dillard, Finn W.', 'sit@outlook.org'),
(63, 'Ross, Nasim G.', 'lorem.ipsum@outlook.com'),
(64, 'Baker, Destiny W.', 'eget.nisi.dictum@google.net'),
(65, 'Head, Mariam O.', 'nunc@protonmail.net'),
(66, 'Shaffer, Leah U.', 'tempus.risus@protonmail.couk'),
(67, 'Roberts, Charlotte V.', 'lacinia.vitae@hotmail.com'),
(68, 'Hill, Genevieve D.', 'risus.nulla@icloud.org'),
(69, 'Solis, Rinah K.', 'quis.urna.nunc@icloud.net'),
(70, 'Nguyen, Odette Y.', 'vitae@aol.couk'),
(71, 'Prince, Cailin S.', 'proin.eget@aol.org'),
(72, 'Tate, Curran E.', 'a.felis@hotmail.org'),
(73, 'Wolfe, Sylvester M.', 'adipiscing.elit@yahoo.couk'),
(74, 'Blanchard, Dominic C.', 'natoque.penatibus@yahoo.net'),
(75, 'Sweeney, Xandra H.', 'pede@hotmail.edu'),
(76, 'Kirk, Branden O.', 'lacus.quisque.purus@google.edu'),
(77, 'Solomon, Martin S.', 'ipsum@google.com'),
(78, 'Williams, Clayton C.', 'tincidunt.aliquam@outlook.ca'),
(79, 'Manning, Driscoll Q.', 'lacus@hotmail.com'),
(80, 'Irwin, Noelle L.', 'ut.erat@icloud.edu'),
(81, 'David, Whoopi V.', 'risus.at.fringilla@hotmail.net'),
(82, 'Harrington, Robin C.', 'eu@protonmail.couk'),
(83, 'Bray, Emery Y.', 'vehicula.pellentesque@hotmail.ca'),
(84, 'Richards, Aimee N.', 'ac@protonmail.couk'),
(85, 'Mcintyre, Wade I.', 'lorem.ut.aliquam@aol.org'),
(86, 'Jarvis, Vance Y.', 'est.nunc@aol.org'),
(87, 'Bradley, Gary T.', 'phasellus.dolor@icloud.ca'),
(88, 'Bridges, Ronan K.', 'egestas.lacinia@protonmail.ca'),
(89, 'Oneal, Buffy J.', 'urna.nec@hotmail.edu'),
(90, 'Mcintosh, Clarke M.', 'etiam@google.edu'),
(91, 'Hampton, Ivana B.', 'risus@aol.edu'),
(92, 'Hayden, Ina N.', 'massa.non@google.ca'),
(93, 'David, Orson E.', 'proin.sed.turpis@outlook.ca'),
(94, 'Dawson, Jael Q.', 'eu.eleifend@google.couk'),
(95, 'Ochoa, Audra X.', 'aliquet.diam@aol.couk'),
(96, 'Smith, Vance P.', 'at.risus@protonmail.net'),
(97, 'Durham, Azalia Y.', 'suspendisse@outlook.ca'),
(98, 'Merrill, Sierra E.', 'nunc.mauris@aol.net'),
(99, 'Morrow, Paki B.', 'penatibus.et@outlook.net'),
(100, 'Morgan, Trevor S.', 'et.magnis.dis@google.ca'),
(101, 'Puckett, Fredericka M.', 'fringilla@aol.com'),
(102, 'Small, Ray Z.', 'erat.vel@aol.edu'),
(103, 'Vasquez, Quinn Q.', 'ornare.lectus.ante@outlook.net'),
(104, 'Patel, Gwendolyn E.', 'lorem.semper.auctor@aol.edu'),
(105, 'Juarez, Shelly O.', 'nascetur.ridiculus@google.couk'),
(106, 'Bowman, Cherokee T.', 'mauris.sit.amet@google.ca'),
(107, 'Rosales, Keelie T.', 'proin.sed.turpis@hotmail.org'),
(108, 'Castaneda, Malachi O.', 'egestas.a.scelerisque@hotmail.couk'),
(109, 'Carlson, Briar X.', 'aliquet@hotmail.couk'),
(110, 'Woods, Philip E.', 'proin.velit@google.org'),
(111, 'Burton, Louis Q.', 'nullam.scelerisque@yahoo.ca'),
(112, 'Kirk, Constance A.', 'in.ornare@icloud.com'),
(113, 'Colon, Hyatt N.', 'gravida.praesent.eu@outlook.org'),
(114, 'Walls, Isaac B.', 'dolor.elit.pellentesque@yahoo.couk'),
(115, 'Hurley, Porter V.', 'aliquet.sem@yahoo.com'),
(116, 'Reyes, Kibo L.', 'lectus.pede@hotmail.net'),
(117, 'Zimmerman, Sigourney L.', 'tempus@icloud.net'),
(118, 'Bryan, Imogene L.', 'purus@yahoo.com'),
(119, 'Matthews, Madison F.', 'nec.mollis@yahoo.ca'),
(120, 'Dalton, Craig D.', 'porttitor.eros@yahoo.com'),
(121, 'Alvarez, Ursula H.', 'lorem.luctus@hotmail.org'),
(122, 'Cobb, Geoffrey W.', 'pharetra.sed@aol.edu'),
(123, 'Lowery, Michelle T.', 'in.hendrerit@icloud.edu'),
(124, 'Arnold, Kato M.', 'aenean.sed@outlook.net'),
(125, 'Mullen, Hiram N.', 'interdum.curabitur.dictum@outlook.com'),
(126, 'Mcintyre, Athena G.', 'porttitor.interdum@yahoo.net'),
(127, 'Simpson, Caryn T.', 'sodales.mauris@outlook.ca'),
(128, 'Joyner, Basil U.', 'arcu.ac.orci@protonmail.couk'),
(129, 'Webb, Barry D.', 'convallis.dolor@yahoo.net'),
(130, 'Hobbs, Brandon Y.', 'lectus.cum@yahoo.couk'),
(131, 'Waters, Avram H.', 'morbi@aol.ca'),
(132, 'Kline, Adena D.', 'nec.quam@google.com'),
(133, 'Browning, Garrison Q.', 'amet.dapibus.id@google.couk'),
(134, 'Gilliam, Alec Q.', 'primis@aol.edu'),
(135, 'Buck, Todd X.', 'cursus.integer.mollis@protonmail.org'),
(136, 'Blair, Francis I.', 'vitae.erat.vel@google.edu'),
(137, 'King, Alfreda Q.', 'ipsum@outlook.ca'),
(138, 'Dillard, Armando O.', 'vitae.erat@aol.org'),
(139, 'Mcdowell, Donovan Y.', 'metus.aenean@google.ca'),
(140, 'Davenport, Hanae K.', 'molestie.pharetra.nibh@icloud.com'),
(141, 'Roberson, Clare C.', 'ipsum.nunc@aol.couk'),
(142, 'Solomon, Aaron E.', 'vel.mauris.integer@hotmail.ca'),
(143, 'Puckett, Madaline I.', 'mi@hotmail.couk'),
(144, 'Murphy, Harding M.', 'nam.ac@aol.com'),
(145, 'Cooper, Jack B.', 'ligula.aliquam@hotmail.org'),
(146, 'Cross, Veronica B.', 'placerat.cras@aol.net'),
(147, 'Ayala, Jin T.', 'nam@google.ca'),
(148, 'Hines, Axel O.', 'ac.orci.ut@icloud.net'),
(149, 'Spencer, Emmanuel D.', 'lobortis.tellus@hotmail.org'),
(150, 'Gallegos, Quinn K.', 'nunc@hotmail.net');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
