CREATE TABLE `Clientes` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(100),
  `direcion` varchar(255),
  `telefono` varchar(15)
);

CREATE TABLE `Especies` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(100)
);

CREATE TABLE `Mascotas` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(100),
  `id_cliente` integer,
  `id_especie` integer
);

CREATE TABLE `Servicios` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `tipo_servicio` varchar(100),
  `costo` float
);

CREATE TABLE `HorarioMedico` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `hora_inicio` time,
  `hora_final` time
);

CREATE TABLE `Veterinarios` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(100),
  `especialidad` varchar(200)
);

CREATE TABLE `Mascota_Servicio` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_mascota` integer,
  `id_servicio` integer,
  `id_veterinario` integer,
  `dia` day,
  `hora` time
);

ALTER TABLE `Mascotas` ADD FOREIGN KEY (`id_especie`) REFERENCES `Especies` (`id`);

ALTER TABLE `Mascotas` ADD FOREIGN KEY (`id_cliente`) REFERENCES `Clientes` (`id`);

ALTER TABLE `HorarioMedico` ADD FOREIGN KEY (`id`) REFERENCES `Veterinarios` (`id`);

ALTER TABLE `Mascotas` ADD FOREIGN KEY (`id`) REFERENCES `Mascota_Servicio` (`id_mascota`);

ALTER TABLE `Servicios` ADD FOREIGN KEY (`id`) REFERENCES `Mascota_Servicio` (`id_servicio`);

ALTER TABLE `Veterinarios` ADD FOREIGN KEY (`id`) REFERENCES `Mascota_Servicio` (`id_veterinario`);
