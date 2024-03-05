-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para contatos
CREATE DATABASE IF NOT EXISTS `contatos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `contatos`;

-- Copiando estrutura para tabela contatos.amigos
CREATE TABLE IF NOT EXISTS `amigos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela contatos.amigos: ~3 rows (aproximadamente)
INSERT IGNORE INTO `amigos` (`id`, `nome`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'joao', '2024-03-05 16:45:48', '2024-03-05 16:45:49', NULL),
	(3, 'carlos', '2024-03-05 16:46:04', '2024-03-05 16:46:06', NULL),
	(5, 'cristina', '2030-10-01 12:30:10', '2030-10-01 12:30:10', NULL);

-- Copiando estrutura para tabela contatos.telefones
CREATE TABLE IF NOT EXISTS `telefones` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_amigo` int unsigned DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_telefones_amigos` (`id_amigo`),
  CONSTRAINT `FK_telefones_amigos` FOREIGN KEY (`id_amigo`) REFERENCES `amigos` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela contatos.telefones: ~5 rows (aproximadamente)
INSERT IGNORE INTO `telefones` (`id`, `id_amigo`, `numero`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, '111', '2024-03-05 16:46:56', '2024-03-05 16:46:57', NULL),
	(6, 5, '551', '2024-03-05 17:14:42', '2024-03-05 17:14:42', NULL),
	(7, 5, '552', '2024-03-05 17:14:42', '2024-03-05 17:14:42', NULL),
	(8, 5, '553', '2024-03-05 17:14:42', '2024-03-05 17:14:42', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
