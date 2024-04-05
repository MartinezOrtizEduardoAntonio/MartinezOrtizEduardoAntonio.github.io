-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2024 a las 02:36:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Volcado de datos para la tabla `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"vet\",\"table\":\"servicio\"},{\"db\":\"vet\",\"table\":\"detalle_servicio\"},{\"db\":\"vet\",\"table\":\"empleado\"},{\"db\":\"vet\",\"table\":\"animal\"},{\"db\":\"vet\",\"table\":\"cliente\"},{\"db\":\"proyecto\",\"table\":\"academia\"},{\"db\":\"proyecto\",\"table\":\"planmateria\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-02-25 00:48:15', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"es\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `propiedades`
--
CREATE DATABASE IF NOT EXISTS `propiedades` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `propiedades`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id` int(7) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellidop` varchar(25) NOT NULL,
  `Apellidom` varchar(25) NOT NULL,
  `fechanac` date NOT NULL,
  `Calle` varchar(25) NOT NULL,
  `Num` int(5) NOT NULL,
  `Ciudad` varchar(25) NOT NULL,
  `CP` int(7) NOT NULL,
  `Tel` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Fechaalta` date NOT NULL,
  `Categoria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Nombre`, `Apellidop`, `Apellidom`, `fechanac`, `Calle`, `Num`, `Ciudad`, `CP`, `Tel`, `Email`, `Fechaalta`, `Categoria`) VALUES
(100, 'Leandra', 'Malo', 'Alba', '1984-12-08', 'Fifth Street', 7493, 'Bergenfield', 7621, '(598) 451-5865', 'uraeus@mac.com', '2012-01-19', 'A'),
(101, 'Severo', 'Granados', 'Iglesia', '1986-08-12', 'Lyme Street', 77, 'Hermitage', 37076, '(869) 771-1487', 'bhima@me.com', '2005-03-22', 'E'),
(102, 'Lucho', 'Andreu', 'Amat', '1990-04-16', 'Fairfield St.', 9448, 'Aberdeen', 57401, '(246) 245-7306', 'psichel@sbcglobal.net', '2007-09-15', 'E'),
(103, 'Matias', 'Castillo', 'Barrera', '1996-12-02', 'College St.', 8143, 'Trussville', 35173, '(707) 933-2513', 'tbeck@optonline.net', '2011-12-07', 'E'),
(104, 'Mauricio', 'Guijarro', 'Castello', '0000-00-00', 'W. Vale Ave.', 9893, 'Billings', 59101, '(612) 325-0216', 'eegsa@yahoo.ca', '0000-00-00', 'D'),
(105, 'Isaura', 'Aviles', 'Pelayo', '0000-00-00', 'Albany Drive', 8094, 'Poughkeepsie', 12601, '(992) 564-5230', 'barlow@verizon.net', '0000-00-00', 'E'),
(106, 'Soraya', 'Morera', 'Lago', '0000-00-00', 'Creek Street', 9001, 'Lawrence', 1841, '(651) 544-1246', 'wkrebs@me.com', '0000-00-00', 'A'),
(107, 'Victoriano', 'Tapia', 'Castillo', '0000-00-00', 'Green Drive', 57, 'Fair Lawn', 7410, '(851) 782-6044', 'dleconte@outlook.com', '0000-00-00', 'C'),
(108, 'Nidia', 'Saez', 'Campoy', '0000-00-00', 'Surrey St.', 86, 'Kennewick', 99337, '(265) 609-6654', 'flakeg@verizon.net', '0000-00-00', 'B'),
(109, 'Te?fila', 'Villanueva', 'Molina', '0000-00-00', 'Boston Street', 8728, 'Rego Park', 11374, '(305) 491-4988', 'slaff@icloud.com', '0000-00-00', 'E'),
(110, 'Trini', 'de', 'Alberdi', '0000-00-00', 'Heritage Ave.', 45, 'Fall River', 2720, '(561) 649-7485', 'uncle@hotmail.com', '0000-00-00', 'B'),
(111, 'Dani', 'Baena', '', '0000-00-00', 'Hillside Street', 9334, 'Grand Blanc', 48439, '(966) 735-9451', 'vsprintf@hotmail.com', '0000-00-00', 'C'),
(112, 'Angelina', 'de', 'Arregui', '0000-00-00', 'Academy Street', 611, 'Dalton', 30721, '(711) 282-2848', 'chinthaka@yahoo.ca', '0000-00-00', 'D'),
(113, 'Samuel', 'de', 'Carranza', '0000-00-00', 'Mill Street', 7201, 'Marcus Hook', 19061, '(337) 397-0627', 'ntegrity@optonline.net', '0000-00-00', 'C'),
(114, 'Jacinta', 'Montenegro', 'Garces', '0000-00-00', 'Ridgewood Ave.', 59, 'Reynoldsburg', 43068, '(969) 383-4277', 'yangyan@yahoo.ca', '0000-00-00', 'D'),
(115, 'Lisandro', 'Delgado', 'Nadal', '0000-00-00', 'West Green Lake St.', 270, 'Louisville', 40207, '(748) 495-1748', 'ilyaz@me.com', '0000-00-00', 'B'),
(116, 'Samanta', 'Manjon', 'Godoy', '0000-00-00', 'Chestnut St.', 9481, 'Morristown', 7960, '(494) 813-5651', 'njpayne@hotmail.com', '0000-00-00', 'C'),
(117, 'Albano', 'Canete', 'Rosa', '0000-00-00', 'Annadale Street', 7, 'Eugene', 97402, '(779) 217-3175', 'ralamosm@gmail.com', '0000-00-00', 'C'),
(118, 'Abel', 'Villanueva', '', '0000-00-00', 'Pheasant Rd.', 88, 'Bridgeton', 8302, '(904) 204-2255', 'bartak@sbcglobal.net', '0000-00-00', 'A'),
(119, 'Bienvenida', 'Pulido', 'Cozar', '0000-00-00', 'Galvin Street', 8, 'Seymour', 47274, '(932) 307-3409', 'improv@me.com', '0000-00-00', 'D'),
(120, 'Patricio', 'Manzano', 'Pomares', '0000-00-00', 'Marconi Road', 9, 'Eastpointe', 48021, '(993) 960-7653', 'arnold@live.com', '0000-00-00', 'D'),
(121, 'Modesto', 'de', 'Casares', '0000-00-00', 'Old Van Dyke Ave.', 8842, 'Nanuet', 10954, '(611) 927-0572', 'ismail@comcast.net', '0000-00-00', 'D'),
(122, 'Berto', 'del', 'Morales', '0000-00-00', 'S. Cambridge Drive', 471, 'Fairborn', 45324, '(283) 384-7846', 'wilsonpm@aol.com', '0000-00-00', 'A'),
(123, 'Nuria', 'Jauregui', 'Tejero', '0000-00-00', 'Military Dr.', 9, 'Yuba City', 95993, '(677) 875-1069', 'barjam@icloud.com', '0000-00-00', 'E'),
(124, 'Anastasia', 'Pedrero', 'Solera', '0000-00-00', 'Pheasant Street', 8388, 'Powder Springs', 30127, '(886) 929-9282', 'michiel@msn.com', '0000-00-00', 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE `inmueble` (
  `Idinmueble` int(7) NOT NULL,
  `FechaAlta` date NOT NULL,
  `Ciudad` varchar(25) NOT NULL,
  `Superficie` int(10) NOT NULL,
  `PrecioS` int(10) NOT NULL,
  `Vendedor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`Idinmueble`, `FechaAlta`, `Ciudad`, `Superficie`, `PrecioS`, `Vendedor`) VALUES
(1, '2004-01-01', 'Lleida', 291, 2133903, 'Carmen'),
(2, '2004-01-01', 'Girona', 199, 1945424, 'Pedro'),
(3, '2004-01-01', 'Girona', 82, 712416, 'Joaqu?n\r'),
(4, '2004-01-02', 'Girona', 285, 1815450, 'Jes?s'),
(5, '2004-01-02', 'Tarragona', 152, 1138024, 'Mar?a\r'),
(6, '2004-01-03', 'Girona', 131, 953156, 'Pedro'),
(7, '2004-01-03', 'Tarragona', 69, 406686, 'Pedro'),
(8, '2004-01-03', 'Girona', 235, 2158475, 'Jes?s'),
(9, '2004-01-04', 'Lleida', 108, 1024380, 'Jes?s'),
(10, '2004-01-04', 'Lleida', 299, 2042768, 'Joaqu?n\r'),
(11, '2004-01-04', 'Girona', 124, 627068, 'Pedro'),
(12, '2004-01-04', 'Girona', 187, 999328, 'Carmen'),
(13, '2004-01-04', 'Barcelona', 300, 2937300, 'Jes?s'),
(14, '2004-01-04', 'Tarragona', 68, 664700, 'Carmen'),
(15, '2004-01-04', 'Girona', 176, 820336, 'Pedro'),
(16, '2004-01-05', 'Girona', 179, 937960, 'Carmen'),
(17, '2004-01-05', 'Tarragona', 58, 358846, 'Luisa'),
(18, '2004-01-06', 'Barcelona', 283, 1679605, 'Carmen'),
(19, '2004-01-07', 'Girona', 55, 472615, 'Luisa'),
(20, '2004-01-08', 'Barcelona', 148, 1169496, 'Mar?a\r'),
(21, '2004-01-09', 'Barcelona', 228, 2020992, 'Carmen'),
(22, '2004-01-09', 'Lleida', 116, 727552, 'Pedro'),
(23, '2004-01-10', 'Girona', 183, 1438929, 'Luisa'),
(24, '2004-01-10', 'Tarragona', 79, 427390, 'Joaqu?n\r'),
(25, '2004-01-10', 'Barcelona', 124, 1170684, 'Jes?s'),
(26, '2004-01-10', 'Tarragona', 70, 549780, 'Jes?s'),
(27, '2004-01-11', 'Tarragona', 70, 659330, 'Pedro'),
(28, '2004-01-12', 'Barcelona', 187, 1660560, 'Joaqu?n\r'),
(29, '2004-01-12', 'Tarragona', 91, 753571, 'Luisa'),
(30, '2004-01-12', 'Tarragona', 201, 939072, 'Carmen'),
(31, '2004-01-13', 'Barcelona', 142, 1405374, 'Jes?s'),
(32, '2004-01-13', 'Girona', 92, 627348, 'Mar?a\r'),
(33, '2004-01-15', 'Barcelona', 181, 1504110, 'Mar?a\r'),
(34, '2004-01-15', 'Barcelona', 281, 2483197, 'Mar?a\r'),
(35, '2004-01-15', 'Tarragona', 257, 1799771, 'Luisa'),
(36, '2004-01-16', 'Tarragona', 140, 1054340, 'Luisa'),
(37, '2004-01-16', 'Girona', 229, 1160572, 'Pedro'),
(38, '2004-01-17', 'Tarragona', 300, 1492800, 'Joaqu?n\r'),
(39, '2004-01-18', 'Tarragona', 215, 1154980, 'Joaqu?n\r'),
(40, '2004-01-18', 'Girona', 182, 1057784, 'Jes?s'),
(41, '2004-01-18', 'Barcelona', 230, 1421860, 'Jes?s'),
(42, '2004-01-19', 'Tarragona', 168, 1426992, 'Jes?s'),
(43, '2004-01-19', 'Girona', 74, 579716, 'Mar?a\r'),
(44, '2004-01-19', 'Girona', 278, 1537062, 'Mar?a\r'),
(45, '2004-01-20', 'Barcelona', 287, 2851058, 'Joaqu?n\r'),
(46, '2004-01-20', 'Lleida', 224, 1294048, 'Carmen'),
(47, '2004-01-20', 'Barcelona', 53, 249418, 'Luisa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Folio` int(7) NOT NULL,
  `IdInmueble` int(7) NOT NULL,
  `Vendedor` varchar(25) NOT NULL,
  `IdCliente` int(7) NOT NULL,
  `FechaVenta` date NOT NULL,
  `PrecioVenta` decimal(15,0) NOT NULL,
  `TipoOperacion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Folio`, `IdInmueble`, `Vendedor`, `IdCliente`, `FechaVenta`, `PrecioVenta`, `TipoOperacion`) VALUES
(1000, 1, 'Carmen', 100, '2004-06-19', 2133903, 'Parking'),
(1001, 2, 'Pedro', 105, '2004-04-19', 1945424, 'Local'),
(1003, 4, 'Jes?s', 115, '2004-04-27', 1815450, 'Parking'),
(1005, 6, 'Pedro', 100, '2004-09-05', 953156, 'Industrial'),
(1006, 7, 'Pedro', 110, '2004-06-07', 406686, 'Parking'),
(1007, 8, 'Jesus', 121, '2004-10-31', 2158475, 'Oficina'),
(1008, 9, 'Jesus', 130, '2004-12-28', 1024380, 'Piso'),
(1009, 10, 'Joaquin', 132, '2004-10-06', 2042768, 'Parking'),
(1010, 11, 'Pedro', 123, '2004-10-28', 627068, 'Oficina'),
(1011, 12, 'Carmen', 124, '2004-04-05', 999328, 'Industrial'),
(1012, 13, 'Jesus', 107, '2004-11-04', 2937300, 'Parking'),
(1013, 14, 'Carmen', 109, '2004-10-01', 664700, 'Local'),
(1014, 15, 'Pedro', 115, '2004-11-29', 820336, 'Industrial'),
(1015, 16, 'Carmen', 118, '2004-11-21', 937960, 'Casa'),
(1016, 17, 'Luisa', 119, '2004-10-08', 358846, 'Casa'),
(1017, 18, 'Carmen', 140, '2004-06-06', 1679605, 'Suelo'),
(1018, 19, 'Luisa', 110, '2004-04-09', 472615, 'Piso'),
(1020, 21, 'Carmen', 112, '2004-06-12', 2020992, 'Industrial'),
(1021, 22, 'Pedro', 112, '2004-04-14', 727552, 'Oficina'),
(1022, 23, 'Luisa', 112, '2004-04-21', 1438929, 'Casa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Folio`);
--
-- Base de datos: `vet`
--
CREATE DATABASE IF NOT EXISTS `vet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vet`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `Id_animal` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `peso` float NOT NULL,
  `estatura` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cliente` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidop` varchar(20) NOT NULL,
  `apellidom` varchar(20) NOT NULL,
  `cant_animal` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_servicio`
--

CREATE TABLE `detalle_servicio` (
  `Id_detalle` int(11) NOT NULL,
  `tipo_serv` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `resultado` tinyint(1) NOT NULL,
  `precio` float NOT NULL,
  `metodo_pago` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_empleado` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidop` varchar(20) NOT NULL,
  `apellidom` varchar(20) NOT NULL,
  `salario` float NOT NULL,
  `NSS` varchar(20) NOT NULL,
  `RFC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `Id_servicio` int(11) NOT NULL,
  `Id_cliente` int(11) NOT NULL,
  `Id_animal` int(11) NOT NULL,
  `Id_empleado` int(11) NOT NULL,
  `Id_detalle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`Id_animal`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cliente`);

--
-- Indices de la tabla `detalle_servicio`
--
ALTER TABLE `detalle_servicio`
  ADD PRIMARY KEY (`Id_detalle`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_empleado`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD KEY `Id_animal` (`Id_animal`),
  ADD KEY `Id_cliente` (`Id_cliente`),
  ADD KEY `Id_detalle` (`Id_detalle`),
  ADD KEY `Id_empleado` (`Id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `Id_animal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_servicio`
--
ALTER TABLE `detalle_servicio`
  MODIFY `Id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`Id_animal`) REFERENCES `animal` (`Id_animal`),
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`Id_cliente`) REFERENCES `cliente` (`Id_cliente`),
  ADD CONSTRAINT `servicio_ibfk_3` FOREIGN KEY (`Id_detalle`) REFERENCES `detalle_servicio` (`Id_detalle`),
  ADD CONSTRAINT `servicio_ibfk_4` FOREIGN KEY (`Id_empleado`) REFERENCES `empleado` (`Id_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
