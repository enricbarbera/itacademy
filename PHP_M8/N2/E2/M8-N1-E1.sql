-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 23:20:01
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

-- No sé què és el que segueix fins...
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
-- ...aquí

-- Creació sase de dades: `m8-llistacompra`

CREATE SCHEMA `m8_llistacompra` ;

-- Creació taula `compra`

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `quantitat` int(11) NOT NULL,
  `preu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Modificació 'id' a PK, AI i NN

ALTER TABLE `m8_llistacompra`.`compra` 
CHANGE COLUMN `id` `id` INT NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`id`);

-- No sé què és el que segueix fins...
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ...aquí