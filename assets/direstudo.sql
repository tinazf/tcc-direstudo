-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Nov-2023 às 01:40
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `direstudo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `cpf`, `email`, `senha`) VALUES
(1, 'Tina', '07789012053', 'tina716@gmail.com', '$2y$10$Y/ztF5t73XdWYsSYSqZ4O.03GDqq2lEUAoVykKbixro6EUnPDN142');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
