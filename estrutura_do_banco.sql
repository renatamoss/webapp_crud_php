SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `crud`;

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produtos` (`id`, `produto`, `quantidade`, `preco`, `descricao`) VALUES

(1, 'Máscara Facial Adulto', '60', '32,00', 'Máscara Facial em tecido 100% algodão - Adulto - Tamanhos P, M, G, GG'),
(2, 'Máscara Facial Infantil', '40', '26,00', 'Máscara Facial em tecido 100% algodão - Vários Temas - Tamanhos 6, 8, 10, 12'),
(3, 'Necessaire Feminina', '30', '32,00 / 46,00 / 54,00', 'Necessaire feminina tema Floral 100% algodão - Tamanhos P, M, G'),
(4, 'Toalha Multiuso', '75', '28,00', 'Toalha multiuso estampada - Tamanho P - Rosto'),
(5, 'Bolsa Feminina', '45', '78,00 / 140,00', 'Bolsa Feminina tecido 100% algodão - cores variadas - Tamanhos Médio e Grande');

