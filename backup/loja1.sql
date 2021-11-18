-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.19-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para loja
CREATE DATABASE IF NOT EXISTS `loja` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `loja`;

-- Copiando estrutura para tabela loja.brands
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.brands: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` (`id`, `name`) VALUES
	(1, 'LG'),
	(2, 'Samsung'),
	(3, 'AOC');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sub` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.categories: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `sub`, `name`) VALUES
	(6, NULL, 'Monitor');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.coupons
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `coupon_type` int(11) NOT NULL,
  `coupon_value` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.coupons: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `coupons` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupons` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.options
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.options: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`id`, `name`) VALUES
	(1, 'Cor'),
	(2, 'Tamanho'),
	(3, 'Memória RAM'),
	(4, 'Polegadas');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.pages: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` text DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `price_from` float NOT NULL,
  `rating` float NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `bestseller` tinyint(1) NOT NULL,
  `new_product` tinyint(1) NOT NULL,
  `options` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.products: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `id_category`, `id_brand`, `name`, `description`, `stock`, `price`, `price_from`, `rating`, `featured`, `sale`, `bestseller`, `new_product`, `options`) VALUES
	(1, 6, 1, 'Monitor 21 polegadas', 'Alguma descrição do produto.', 10, 499, 599, 0, 0, 1, 1, 0, NULL),
	(2, 6, 2, 'Monitor 18 polegadas', 'Alguma outra descrição', 10, 399, 999, 0, 0, 0, 1, 0, NULL),
	(3, 6, 2, 'Monitor 19 polegadas', 'Alguma outra descrição', 10, 599, 699, 0, 0, 0, 0, 1, NULL),
	(4, 6, 3, 'Monitor 17 polegadas', 'Alguma outra descrição', 10, 779, 900, 0, 0, 0, 0, 0, NULL),
	(5, 6, 1, 'Monitor 20 polegadas', 'Alguma outra descrição', 10, 299, 499, 0, 0, 0, 0, 1, NULL),
	(6, 6, 3, 'Monitor 20 polegadas', 'Alguma outra descrição', 10, 699, 0, 0, 0, 0, 0, 0, NULL),
	(7, 6, 3, 'Monitor 19 polegadas', 'Alguma outra descrição', 10, 889, 999, 0, 0, 0, 0, 0, NULL),
	(8, 6, 1, 'Monitor 18 polegadas', 'Alguma outra descrição', 10, 599, 699, 0, 0, 0, 0, 0, NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.products_images
CREATE TABLE IF NOT EXISTS `products_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `url` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.products_images: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `products_images` DISABLE KEYS */;
INSERT INTO `products_images` (`id`, `id_product`, `url`) VALUES
	(1, 1, '1.jpg'),
	(2, 2, '2.jpg'),
	(3, 3, '3.jpg'),
	(4, 4, '4.jpg'),
	(5, 5, '1.jpg'),
	(6, 6, '3.jpg'),
	(7, 7, '7.jpg'),
	(8, 8, '7.jpg');
/*!40000 ALTER TABLE `products_images` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.products_options
CREATE TABLE IF NOT EXISTS `products_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_option` int(11) NOT NULL,
  `p_value` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.products_options: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `products_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_options` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.purchases
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_coupon` int(11) DEFAULT NULL,
  `total_amount` float NOT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `payment_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.purchases: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.purchases_products
CREATE TABLE IF NOT EXISTS `purchases_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_purchase` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.purchases_products: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `purchases_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchases_products` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.purchase_transactions
CREATE TABLE IF NOT EXISTS `purchase_transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_purchase` int(11) NOT NULL,
  `amount` float NOT NULL,
  `transaction_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.purchase_transactions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `purchase_transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_transactions` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.rates
CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_rated` datetime NOT NULL,
  `points` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.rates: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;

-- Copiando estrutura para tabela loja.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela loja.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
