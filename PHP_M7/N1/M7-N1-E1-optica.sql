CREATE DATABASE m7_òptica;
USE m7_òptica;

CREATE TABLE `clients` (
  `id_client` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `cognom` varchar(30) DEFAULT NULL,
  `adreça` varchar(100) DEFAULT NULL,
  `telèfon` bigint unsigned DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `data_alta` date DEFAULT NULL,
  `recomanador` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `proveïdors` (
  `id_proveïdor` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `adreça_carrer` varchar(50) DEFAULT NULL,
  `adreça_número` smallint DEFAULT NULL,
  `ciutat` enum('Barcelona','Tarragona','Lleida','Girona','Madrid','París','Perpinyà','Marsella','Londres','Liverpool','Manchester','Milà','Torí','Roma') DEFAULT NULL,
  `codi_postal` smallint DEFAULT NULL,
  `país` enum('espanya','frança','anglaterra','itàlia') DEFAULT NULL,
  `telefon` bigint unsigned DEFAULT NULL,
  `fax` bigint unsigned DEFAULT NULL,
  `NIF` varchar(9) NOT NULL,
  PRIMARY KEY (`id_proveïdor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `ulleres` (
  `id_ullera` smallint unsigned NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) DEFAULT NULL,
  `grad_dreta` float(5,2) DEFAULT NULL,
  `grad_esquerra` float(5,2) DEFAULT NULL,
  `tipus_montura` enum('flotant','pasta','metàlica') DEFAULT NULL,
  `color_montura` varchar(30) DEFAULT NULL,
  `color_vidre_dret` varchar(30) DEFAULT NULL,
  `color_vidre_esquerra` varchar(30) DEFAULT NULL,
  `preu` smallint unsigned DEFAULT NULL,
  `id_marca` tinyint unsigned DEFAULT NULL,
  PRIMARY KEY (`id_ullera`),
  KEY `id_marca_idx` (`id_marca`),
  CONSTRAINT `id_marca` FOREIGN KEY (`id_marca`) REFERENCES `marques` (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `marques` (
  `id_marca` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proveïdor` tinyint unsigned DEFAULT NULL,
  PRIMARY KEY (`id_marca`),
  KEY `id_proveïdor_idx` (`id_proveïdor`),
  CONSTRAINT `id_proveïdor` FOREIGN KEY (`id_proveïdor`) REFERENCES `proveïdors` (`id_proveïdor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `venedors` (
  `id_venedor` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognom` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_venedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `vendes` (
  `id_vendes` int unsigned NOT NULL AUTO_INCREMENT,
  `id_client` mediumint unsigned NOT NULL,
  `id_venedor` tinyint unsigned NOT NULL,
  `id_ullera` smallint unsigned NOT NULL,
  `data` date DEFAULT NULL,
  `import` smallint DEFAULT NULL,
  PRIMARY KEY (`id_vendes`),
  KEY `id_client_idx` (`id_client`),
  KEY `id_venedor_idx` (`id_venedor`),
  KEY `id_ullera_idx` (`id_ullera`),
  CONSTRAINT `id_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`),
  CONSTRAINT `id_ullera` FOREIGN KEY (`id_ullera`) REFERENCES `ulleres` (`id_ullera`),
  CONSTRAINT `id_venedor` FOREIGN KEY (`id_venedor`) REFERENCES `venedors` (`id_venedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO clients VALUES ('1', 'sílvia', 'valle', 'Sant Antoni 104', '626591621', 'silvs12@hotmail.com', '2021-07-05', 'enric');

UPDATE `m7_òptica`.`marques` SET `id_marca` = '2' WHERE (`id_marca` = '4');
UPDATE `m7_òptica`.`marques` SET `id_marca` = '3' WHERE (`id_marca` = '5');
UPDATE `m7_òptica`.`marques` SET `id_marca` = '4' WHERE (`id_marca` = '6');

INSERT INTO `m7_òptica`.`ulleres` (`marca`, `grad_dreta`, `grad_esquerra`, `tipus_montura`, `color_montura`, `color_vidre_dret`, `color_vidre_esquerra`, `preu`, `id_marca`) VALUES ('rayban', '0', '0', 'pasta', 'negre', 'negre', 'negre', '250', '2');
INSERT INTO `m7_òptica`.`ulleres` (`marca`, `grad_dreta`, `grad_esquerra`, `tipus_montura`, `color_montura`, `color_vidre_dret`, `color_vidre_esquerra`, `preu`, `id_marca`) VALUES ('oakley', '2.5', '3', 'metàlica', 'plata', 'transparent', 'transparent', '380', '1');
INSERT INTO `m7_òptica`.`ulleres` (`marca`, `grad_dreta`, `grad_esquerra`, `tipus_montura`, `color_montura`, `color_vidre_dret`, `color_vidre_esquerra`, `preu`, `id_marca`) VALUES ('lozza', '6', '5.5', 'metàlica', 'blau', 'transparent', 'transparent', '560', '3');

INSERT INTO `m7_òptica`.`ulleres` (`marca`, `grad_dreta`, `grad_esquerra`, `tipus_montura`, `preu`, `id_marca`) VALUES ('gucci', '0', '0', 'flotant', '750', '4');

INSERT INTO `m7_òptica`.`clients` (`nom`, `cognom`, `adreça`, `data_alta`, `recomanador`) VALUES ('pepa', 'puri', 'verge abellera 34', '2021-07-07', 'sílvia');

INSERT INTO `m7_òptica`.`venedors` (`nom`, `cognom`) VALUES ('marc', 'martí');
INSERT INTO `m7_òptica`.`venedors` (`nom`, `cognom`) VALUES ('pere', 'pons');
INSERT INTO `m7_òptica`.`venedors` (`nom`, `cognom`) VALUES ('cris', 'cros');
INSERT INTO `m7_òptica`.`venedors` (`nom`, `cognom`) VALUES ('val', 'molt');

INSERT INTO `m7_òptica`.`vendes` (`id_client`, `id_venedor`, `id_ullera`, `data`, `import`) VALUES ('1', '3', '1', '2021-07-06', '250');
INSERT INTO `m7_òptica`.`vendes` (`id_client`, `id_venedor`, `id_ullera`, `data`, `import`) VALUES ('2', '2', '2', '21-07-04', '380');
INSERT INTO `m7_òptica`.`vendes` (`id_client`, `id_venedor`, `id_ullera`, `data`, `import`) VALUES ('4', '1', '3', '2021-07-01', '560');

INSERT INTO `m7_òptica`.`vendes` (`id_client`, `id_venedor`, `id_ullera`, `data`, `import`) VALUES ('3', '3', '4', '2021-06-28', '750');

ALTER TABLE `m7_òptica`.`vendes` 
CHANGE COLUMN `id_vendes` `id_venda` INT UNSIGNED NOT NULL AUTO_INCREMENT ;

UPDATE `m7_òptica`.`vendes` SET `id_client` = '1' WHERE (`id_venda` = '3');

-- filtrat vendes per import
SELECT * FROM vendes WHERE import >= 300;

-- filtratges i ordenacions per data
SELECT * FROM vendes WHERE data >= 20210704;
SELECT * FROM vendes ORDER BY data;

-- diferents maneres de filtrar per id
SELECT * FROM vendes WHERE id_venedor = 2;
SELECT * FROM vendes WHERE id_venedor = 2 OR id_venedor = 3;
SELECT * FROM vendes WHERE id_venedor IN (2,3);
SELECT * FROM vendes WHERE id_venedor BETWEEN 2 AND 3;
SELECT * FROM vendes WHERE id_venedor IN (1,4);

-- incloent ordenació per dates
SELECT * FROM vendes WHERE id_venedor NOT IN (1,4) ORDER BY data;

-- rang d'imports ordenat
SELECT * FROM vendes WHERE import BETWEEN 200 AND 500 ORDER BY import;

-- filtrat de marques per proveïdor
SELECT * FROM marques WHERE id_proveïdor = 1;

-- cerca de proveïdor per id de marca juntant taules "marques" i "proveïdors"
SELECT id_marca, marques.nom AS marca, proveïdors.nom AS proveïdor FROM marques
JOIN proveïdors
ON marques.id_proveïdor = proveïdors.id_proveïdor
WHERE marques.id_marca IN (1,3);

-- Si es vulgués aplicar condicó segons id_proveïdor enlloc de id_marca
-- WHERE proveïdors.id_proveïdor IN (1,3);

-- selecció incloent operació entre 2 camps i ordenat segons un d'ells
SELECT * FROM ulleres WHERE grad_dreta + grad_esquerra >= 5 ORDER BY grad_dreta DESC;

-- limitant els camps mostrats a l'anterior, afegint un camp suma, i ordenant pel resultat de la suma
SELECT id_ullera, marca, grad_dreta, grad_esquerra, grad_dreta + grad_esquerra AS 'suma graduacions'
FROM ulleres
WHERE grad_dreta + grad_esquerra >= 5
ORDER BY grad_dreta + grad_esquerra DESC;

-- diferents proves condiconals
SELECT marca, color_montura, tipus_montura FROM ulleres WHERE tipus_montura != 'metàlica';
SELECT * FROM vendes WHERE import >= 300 AND id_venedor = 2;
SELECT * FROM vendes WHERE import >= 300 AND NOT id_venedor = 2;
SELECT * FROM vendes WHERE import >= 300 AND NOT id_venedor != 2;

-- juntem "vendes" i "clients" per extreure el mombre de compres i l'import total de cada client
SELECT nom, cognom, COUNT(vendes.id_client) AS 'número compres', SUM(import) AS 'import total'
FROM clients
JOIN vendes
ON clients.id_client = vendes.id_client
GROUP BY vendes.id_client;

-- concatenem les columes "nom" i "cognom" per buscar un client
SELECT adreça FROM clients WHERE CONCAT (nom, ' ', cognom) LIKE 'SILVIA valle';
SELECT COUNT(id_venda), id_venedor FROM vendes GROUP BY id_venedor ORDER BY COUNT(id_venda) DESC;
SELECT COUNT(id_venda), vendes.id_venedor FROM vendes INNER JOIN venedors ON venedors.id_venedor = vendes.id_venedor GROUP BY id_venedor ORDER BY COUNT(id_venda) DESC;

-- juntem taules "vendes" i "venedors"
SELECT * FROM vendes INNER JOIN venedors ON venedors.id_venedor = vendes.id_venedor;

-- extraiem de la unió de les taules "vendes" i "venedors" la quantitat de vendes efectuades per cada venedor
-- i la suma dels imports corresponents, utilitzant àlies de columna per millor comprensió
SELECT venedors.nom, COUNT(id_venda) AS 'vendes realitzades', SUM(import) AS 'import total'
FROM vendes
INNER JOIN venedors
ON venedors.id_venedor = vendes.id_venedor
GROUP BY vendes.id_venedor
ORDER BY COUNT(id_venda) DESC;





