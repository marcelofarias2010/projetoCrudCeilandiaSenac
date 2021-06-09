-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Jun-2021 às 19:42
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cursophp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `cidade` varchar(120) DEFAULT NULL,
  `imagem` blob NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`cod`, `nome`, `idade`, `fone`, `cidade`, `imagem`) VALUES
(1, 'Severino da silva', 47, '(61)3021-458', 'AbadiÃ¢nia', ''),
(15, 'Eline', 25, '(61)98745-6321', 'Plano Piloto', ''),
(4, 'Francklin Alves Farias', 37, '61989895656', 'Aguas Claras', ''),
(5, 'Maria das Dores', 79, '6233665589', 'Goiania', ''),
(6, 'Matheus', 32, '61 9988-7542', 'Samambaia', ''),
(7, 'Paulo', 13, '61 3321-8547', 'Riacho Fundo', ''),
(8, 'Lucas', 28, '61 3325-8874', 'Recanto das Emas', ''),
(9, 'Maria', 45, '61 98754456', 'GurÃ¡', ''),
(12, 'Poly', 41, '(61) 5887-8545', 'Luziania', ''),
(13, 'Alexandre Pires', 55, '(21) 98878-5421', 'Rio de Janeiro', ''),
(14, 'Tim Maya', 77, '(21) 2546-8879', 'Bairro da Tijuca', ''),
(16, 'Carlos Souza', 26, '(61) 98755-3322', 'CeilÃ¢ndia Sul', ''),
(17, 'Kaio', 24, '(61)3373-5566', 'CeilÃ¢ndia Norte', ''),
(18, 'Joyce', 27, '(84)98546-5478', 'Natal RN', ''),
(19, 'Matheus Ferreira', 30, '(61)3356-4487', 'Taguatinga', ''),
(20, 'AntÃ´nio Vinicius', 37, '(61)3301-2587', 'Sobradinho', ''),
(21, 'Teste de nome', 100, '(61)55556-8877', 'Rua sem nome', ''),
(22, 'Luciano da Silva', 75, '(62)98745-6541', 'Brazilinha', ''),
(23, 'Curso de Php com mysql Orientado a Objeto', 10, '61989895865', 'Senac', ''),
(24, 'Maria Eduarda', 14, '(61)98659-8745', 'CeilÃ¢ndia Sul', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `permissao` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod`, `nome`, `usuario`, `senha`, `permissao`) VALUES
(1, 'Marcelo Farias', 'mljinformatica@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'João Bathista', 'joaobatista@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(3, 'Jaqueline Farias', 'jaque@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
