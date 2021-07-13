CREATE DATABASE m7_pizzeria;
USE m7_pizzeria;

CREATE TABLE `botigues` (
  `id_botiga` int NOT NULL AUTO_INCREMENT,
  `adreça` varchar(45) DEFAULT NULL,
  `codi_postal` varchar(5) DEFAULT NULL,
  `id_localitat` int NOT NULL,
  PRIMARY KEY (`id_botiga`),
  KEY `fk_botigues_localitats1_idx` (`id_localitat`),
  CONSTRAINT `fk_botigues_localitats1` FOREIGN KEY (`id_localitat`) REFERENCES `localitats` (`id_localitat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `categories_pizzes` (
  `id_categoria_pizza` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_categoria_pizza`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `clients` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `cognoms` varchar(45) DEFAULT NULL,
  `adreça` varchar(45) DEFAULT NULL,
  `codi_postal` varchar(5) DEFAULT NULL,
  `telèfon` varchar(9) DEFAULT NULL,
  `id_localitat` int NOT NULL,
  PRIMARY KEY (`id_client`),
  KEY `id_localitat_idx` (`id_localitat`),
  CONSTRAINT `id_localitat` FOREIGN KEY (`id_localitat`) REFERENCES `localitats` (`id_localitat`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `comandes` (
  `id_comanda` int NOT NULL AUTO_INCREMENT,
  `hora_comanda` datetime DEFAULT CURRENT_TIMESTAMP,
  `modalitat` enum('domicili','botiga') DEFAULT NULL,
  `clients_id_client` int NOT NULL,
  `botigues_id_botiga` int NOT NULL,
  `treballadors_id_treballador` int DEFAULT NULL,
  `hora_entrega` datetime DEFAULT NULL,
  PRIMARY KEY (`id_comanda`),
  KEY `fk_comandes_clients1_idx` (`clients_id_client`),
  KEY `fk_comandes_botigues1_idx` (`botigues_id_botiga`),
  KEY `fk_comandes_treballadors1_idx` (`treballadors_id_treballador`),
  CONSTRAINT `fk_comandes_botigues1` FOREIGN KEY (`botigues_id_botiga`) REFERENCES `botigues` (`id_botiga`),
  CONSTRAINT `fk_comandes_clients1` FOREIGN KEY (`clients_id_client`) REFERENCES `clients` (`id_client`),
  CONSTRAINT `fk_comandes_treballadors1` FOREIGN KEY (`treballadors_id_treballador`) REFERENCES `treballadors` (`id_treballador`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `localitats` (
  `id_localitat` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `províncies_id_província` int NOT NULL,
  PRIMARY KEY (`id_localitat`),
  KEY `fk_localitats_províncies1_idx` (`províncies_id_província`),
  CONSTRAINT `fk_localitats_províncies1` FOREIGN KEY (`províncies_id_província`) REFERENCES `províncies` (`id_província`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `productes` (
  `id_producte` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `descripció` varchar(45) DEFAULT NULL,
  `imatge` varchar(45) DEFAULT NULL,
  `preu` float DEFAULT NULL,
  `categories_pizzes_id_categoria_pizza` int DEFAULT NULL,
  `tipus` enum('pizza','hamburguesa','beguda') DEFAULT NULL,
  PRIMARY KEY (`id_producte`),
  KEY `fk_productes_categories_pizzes1_idx` (`categories_pizzes_id_categoria_pizza`),
  CONSTRAINT `fk_productes_categories_pizzes1` FOREIGN KEY (`categories_pizzes_id_categoria_pizza`) REFERENCES `categories_pizzes` (`id_categoria_pizza`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `productes_has_comandes` (
  `id_productes_has_comandes` int NOT NULL AUTO_INCREMENT,
  `comandes_id_comanda` int NOT NULL,
  `productes_id_producte` int NOT NULL,
  `quantitat` int DEFAULT '1',
  PRIMARY KEY (`id_productes_has_comandes`),
  KEY `fk_productes_has_comandes_comandes1_idx` (`comandes_id_comanda`),
  KEY `fk_productes_has_comandes_productes1_idx` (`productes_id_producte`),
  CONSTRAINT `fk_productes_has_comandes_comandes1` FOREIGN KEY (`comandes_id_comanda`) REFERENCES `comandes` (`id_comanda`),
  CONSTRAINT `fk_productes_has_comandes_productes1` FOREIGN KEY (`productes_id_producte`) REFERENCES `productes` (`id_producte`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `províncies` (
  `id_província` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_província`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `treballadors` (
  `id_treballador` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `cognoms` varchar(45) DEFAULT NULL,
  `nif` varchar(9) DEFAULT NULL,
  `telèfon` varchar(9) DEFAULT NULL,
  `tasca` enum('cuiner','repartidor') DEFAULT NULL,
  `botigues_id_botiga` int NOT NULL,
  PRIMARY KEY (`id_treballador`),
  KEY `fk_treballadors_botigues1_idx` (`botigues_id_botiga`),
  CONSTRAINT `fk_treballadors_botigues1` FOREIGN KEY (`botigues_id_botiga`) REFERENCES `botigues` (`id_botiga`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

INSERT INTO `m7-n1-e2`.`productes` (`id_producte`, `nom`, `descripció`, `imatge`, `preu`) VALUES ('1', 'hamburguesa', 'completa', 'hamb.jpg', '6');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`) VALUES ('cola', 'refresc cola', 'cola.jpg', '2');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`) VALUES ('taronjada', 'refresc taronja', 'taronja.jpg', '2');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`) VALUES ('llimonada', 'refresc llimona', 'llimona.jpg', '2');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`) VALUES ('tropical', 'amb pinya', 'tropi.jpg', '8');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`) VALUES ('margarita', 'tomàquet i formatge', 'marg.jpg', '7');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`) VALUES ('vegetal', 'vegana', 'vege.jpg', '8');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`) VALUES ('marienera', 'marisc', 'marinera.jpg', '9');


INSERT INTO `m7-n1-e2`.`províncies` (`id_província`, `nom`) VALUES ('1', 'barcelona');
INSERT INTO `m7-n1-e2`.`províncies` (`nom`) VALUES ('tarragona');
INSERT INTO `m7-n1-e2`.`províncies` (`nom`) VALUES ('lleida');
INSERT INTO `m7-n1-e2`.`províncies` (`nom`) VALUES ('girona');


ALTER TABLE `m7-n1-e2`.`províncies` 
CHANGE COLUMN `id_província` `id_província` INT NOT NULL AUTO_INCREMENT ;


INSERT INTO `m7-n1-e2`.`províncies` (`id_província`, `nom`) VALUES ('1', 'barcelona');
INSERT INTO `m7-n1-e2`.`províncies` (`nom`) VALUES ('tarragona');
INSERT INTO `m7-n1-e2`.`províncies` (`nom`) VALUES ('lleida');
INSERT INTO `m7-n1-e2`.`províncies` (`nom`) VALUES ('girona');


INSERT INTO `m7-n1-e2`.`localitats` (`id_localitat`, `nom`) VALUES ('1', 'barcelona');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('badalona');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('cornellà');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('hospitalet');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('tarragona');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('reus');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('valls');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('lleida');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('mollerussa');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('balaguer');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('girona');
INSERT INTO `m7-n1-e2`.`localitats` (`nom`) VALUES ('figueres');


INSERT INTO `m7-n1-e2`.`botigues` (`id_botiga`, `adreça`, `codi_postal`, `id_localitat`, `id_província`) VALUES ('1', 'francesc macià', '08021', '1', '1');
INSERT INTO `m7-n1-e2`.`botigues` (`adreça`, `codi_postal`, `id_localitat`, `id_província`) VALUES ('imperiall tarraco', '43470', '5', '2');
INSERT INTO `m7-n1-e2`.`botigues` (`adreça`, `codi_postal`, `id_localitat`, `id_província`) VALUES ('onze de setembre', '35360', '8', '3');
INSERT INTO `m7-n1-e2`.`botigues` (`adreça`, `codi_postal`, `id_localitat`, `id_província`) VALUES ('ú d\'octubre', '74750', '11', '4');


INSERT INTO `m7-n1-e2`.`clients` (`id_client`, `nom`, `cognoms`, `adreça`, `codi_postal`, `telèfon`, `id_localitat`, `id_província`) VALUES ('1', 'enric', 'b b', 'prim 3', '08001', '111111111', '1', '1');
INSERT INTO `m7-n1-e2`.`clients` (`nom`, `cognoms`, `adreça`, `codi_postal`, `telèfon`, `id_localitat`, `id_província`) VALUES ('sílvia', 'v g', 'pum 12', '08033', '222222222', '1', '1');
INSERT INTO `m7-n1-e2`.`clients` (`nom`, `cognoms`, `adreça`, `codi_postal`, `telèfon`, `id_localitat`, `id_província`) VALUES ('pep', 'l m', 'prou 22', '43300', '333333333', '6', '2');
INSERT INTO `m7-n1-e2`.`clients` (`nom`, `cognoms`, `adreça`, `telèfon`, `id_localitat`, `id_província`) VALUES ('santi', 's f', 'perú 31', '444444444', '12', '4');
INSERT INTO `m7-n1-e2`.`clients` (`nom`, `cognoms`, `adreça`, `codi_postal`, `telèfon`, `id_localitat`, `id_província`) VALUES ('guille', 'r p', 'picó 14', '22002', '555555555', '9', '3');
INSERT INTO `m7-n1-e2`.`clients` (`nom`, `cognoms`, `adreça`, `codi_postal`, `id_localitat`, `id_província`) VALUES ('pat', 'b b', 'parke 3', '11001', '3', '1');


UPDATE `m7-n1-e2`.`clients` SET `id_client` = '2' WHERE (`id_client` = '5');
UPDATE `m7-n1-e2`.`clients` SET `id_client` = '3' WHERE (`id_client` = '6');
UPDATE `m7-n1-e2`.`clients` SET `id_client` = '4' WHERE (`id_client` = '7');
UPDATE `m7-n1-e2`.`clients` SET `id_client` = '5' WHERE (`id_client` = '8');
UPDATE `m7-n1-e2`.`clients` SET `id_client` = '6' WHERE (`id_client` = '9');


INSERT INTO `m7-n1-e2`.`comandes` (`id_comanda`, `data/hora`, `modalitat`, `import`, `clients_id_client`, `botigues_id_botiga`) VALUES ('1', '21-07-10 15:00:00', 'domicili', '50', '1', '1');
INSERT INTO `m7-n1-e2`.`comandes` (`data/hora`, `modalitat`, `import`, `clients_id_client`, `botigues_id_botiga`) VALUES ('2021-07-10 15:25:00', 'botiga', '43', '2', '1');
INSERT INTO `m7-n1-e2`.`comandes` (`data/hora`, `modalitat`, `import`, `clients_id_client`, `botigues_id_botiga`) VALUES ('2021-07-10 15:43:00', 'domicili', '38', '3', '2');
INSERT INTO `m7-n1-e2`.`comandes` (`data/hora`, `modalitat`, `import`, `clients_id_client`, `botigues_id_botiga`) VALUES ('2021-07-10 15:48:00', 'botiga', '42', '4', '3');
INSERT INTO `m7-n1-e2`.`comandes` (`data/hora`, `modalitat`, `import`, `clients_id_client`, `botigues_id_botiga`) VALUES ('2021-07-10 15:54:00', 'domicili', '35', '5', '2');
INSERT INTO `m7-n1-e2`.`comandes` (`data/hora`, `modalitat`, `import`, `clients_id_client`, `botigues_id_botiga`) VALUES ('2021-07-10 16:04:00', 'domicili', '48', '6', '3');


UPDATE `m7-n1-e2`.`comandes` SET `id_comanda` = '2' WHERE (`id_comanda` = '3');
UPDATE `m7-n1-e2`.`comandes` SET `id_comanda` = '3' WHERE (`id_comanda` = '4');
UPDATE `m7-n1-e2`.`comandes` SET `id_comanda` = '4' WHERE (`id_comanda` = '5');
UPDATE `m7-n1-e2`.`comandes` SET `id_comanda` = '5' WHERE (`id_comanda` = '6');
UPDATE `m7-n1-e2`.`comandes` SET `id_comanda` = '6' WHERE (`id_comanda` = '7');


INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`id_productes_has_comandes`, `comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('1', '1', '1', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('1', '2', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('2', '6', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`) VALUES ('2', '2');


UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '1' WHERE (`id_localitat` = '1');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '1' WHERE (`id_localitat` = '2');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '1' WHERE (`id_localitat` = '3');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '1' WHERE (`id_localitat` = '4');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '2' WHERE (`id_localitat` = '5');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '2' WHERE (`id_localitat` = '6');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '2' WHERE (`id_localitat` = '7');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '3' WHERE (`id_localitat` = '8');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '3' WHERE (`id_localitat` = '9');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '3' WHERE (`id_localitat` = '10');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '4' WHERE (`id_localitat` = '11');
UPDATE `m7-n1-e2`.`localitats` SET `províncies_id_província` = '4' WHERE (`id_localitat` = '12');


INSERT INTO `m7-n1-e2`.`categories_pizzes` (`id_categoria_pizza`, `nom`) VALUES ('1', 'clàssica');
INSERT INTO `m7-n1-e2`.`categories_pizzes` (`nom`) VALUES ('vegetal');
INSERT INTO `m7-n1-e2`.`categories_pizzes` (`nom`) VALUES ('peix');
INSERT INTO `m7-n1-e2`.`categories_pizzes` (`nom`) VALUES ('picant');


ALTER TABLE `m7-n1-e2`.`productes` 
ADD COLUMN `tipus` ENUM('pizza', 'hamburguesa', 'beguda') NULL AFTER `categories_pizzes_id_categoria_pizza`;


UPDATE `m7-n1-e2`.`productes` SET `categories_pizzes_id_categoria_pizza` = '1', `tipus` = '1' WHERE (`id_producte` = '5');
UPDATE `m7-n1-e2`.`productes` SET `categories_pizzes_id_categoria_pizza` = '1', `tipus` = '1' WHERE (`id_producte` = '6');
UPDATE `m7-n1-e2`.`productes` SET `categories_pizzes_id_categoria_pizza` = '2', `tipus` = '1' WHERE (`id_producte` = '7');
UPDATE `m7-n1-e2`.`productes` SET `nom` = 'marinera', `categories_pizzes_id_categoria_pizza` = '3', `tipus` = '1' WHERE (`id_producte` = '8');
UPDATE `m7-n1-e2`.`productes` SET `tipus` = '2' WHERE (`id_producte` = '1');
UPDATE `m7-n1-e2`.`productes` SET `tipus` = '3' WHERE (`id_producte` = '2');
UPDATE `m7-n1-e2`.`productes` SET `tipus` = '3' WHERE (`id_producte` = '3');
UPDATE `m7-n1-e2`.`productes` SET `tipus` = '3' WHERE (`id_producte` = '4');
INSERT INTO `m7-n1-e2`.`productes` (`nom`, `descripció`, `imatge`, `preu`, `categories_pizzes_id_categoria_pizza`, `tipus`) VALUES ('barbacoa', 'carn i salsa', 'bbq.jpg', '8', '4', '1');


UPDATE `m7-n1-e2`.`productes_has_comandes` SET `id_productes_has_comandes` = '2' WHERE (`id_productes_has_comandes` = '6');
UPDATE `m7-n1-e2`.`productes_has_comandes` SET `id_productes_has_comandes` = '3' WHERE (`id_productes_has_comandes` = '7');
UPDATE `m7-n1-e2`.`productes_has_comandes` SET `id_productes_has_comandes` = '4' WHERE (`id_productes_has_comandes` = '8');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('3', '7', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('3', '8', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('3', '3', '2');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('4', '9', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('4', '3', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('4', '4', '1');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('5', '6', '2');
INSERT INTO `m7-n1-e2`.`productes_has_comandes` (`comandes_id_comanda`, `productes_id_producte`, `quantitat`) VALUES ('5', '2', '4');


INSERT INTO `m7-n1-e2`.`treballadors` (`id_treballador`, `nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('1', 'pere', 'n h', '52654874k', '623525258', 'repartidor', '1');
INSERT INTO `m7-n1-e2`.`treballadors` (`id_treballador`, `nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('2', 'carme', 'p p', '45874587j', '687587574', 'cuiner', '1');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('jordi', 'f m', '45212368p', '693655214', 'repartidor', '1');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('paula', 'e r', '45872134i', '612252458', 'cuiner', '2');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('ingrid', 'l b', '48474124f', '635212175', 'repartidor', '2');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('pau', 'k k', '47698321h', '675239851', 'repartidor', '3');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('pere', 'd f', '45478878o', '696374156', 'repartidor', '3');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('jofre', 'q k', '45612378g', '641112241', 'cuiner', '3');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('marta', 't c', '44475562r', '666284759', 'cuiner', '4');
INSERT INTO `m7-n1-e2`.`treballadors` (`nom`, `cognoms`, `nif`, `telèfon`, `tasca`, `botigues_id_botiga`) VALUES ('anna', 'b n', '45556985y', '655545447', 'repartidor', '4');


UPDATE `m7-n1-e2`.`comandes` SET `treballadors_id_treballador` = '1', `hora_entrega` = '2021-07-10 15:40:38' WHERE (`id_comanda` = '1');
UPDATE `m7-n1-e2`.`comandes` SET `treballadors_id_treballador` = '5', `hora_entrega` = '2021-07-10 16:18:19' WHERE (`id_comanda` = '3');
UPDATE `m7-n1-e2`.`comandes` SET `botigues_id_botiga` = '3', `treballadors_id_treballador` = '6', `hora_entrega` = '2021-07-10 16:30:08' WHERE (`id_comanda` = '5');
UPDATE `m7-n1-e2`.`comandes` SET `botigues_id_botiga` = '1', `treballadors_id_treballador` = '1', `hora_entrega` = '2021-07-10 16:33:24' WHERE (`id_comanda` = '6');
UPDATE `m7-n1-e2`.`comandes` SET `botigues_id_botiga` = '4' WHERE (`id_comanda` = '4');

ALTER TABLE `m7-n1-e2`.`comandes` 
CHANGE COLUMN `data/hora` `hora_comanda` DATETIME NULL DEFAULT CURRENT_TIMESTAMP ;