-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Set-2019 às 05:31
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jif`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campus`
--

CREATE TABLE `campus` (
  `campus_id` int(11) NOT NULL,
  `cnome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `campus`
--

INSERT INTO `campus` (`campus_id`, `cnome`) VALUES
(0, 'Administrador'),
(1, 'Verificador'),
(2, ''),
(8, 'Urutaí'),
(9, 'Ceres'),
(11, 'Campos Belos'),
(12, 'Cristalina'),
(15, 'Iporá'),
(22, 'Trindade'),
(100, 'Ipameri'),
(101, 'Rio Verde'),
(103, 'Posse'),
(104, 'Morrinhos'),
(105, 'Catalão'),
(106, 'Hidrolândia'),
(108, 'Sistemica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamada`
--

CREATE TABLE `chamada` (
  `chamada_id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `data_inicio` varchar(10) NOT NULL,
  `hora_inicio` varchar(5) NOT NULL,
  `data_termino` varchar(10) DEFAULT NULL,
  `hora_termino` varchar(5) DEFAULT NULL,
  `campus` int(11) NOT NULL DEFAULT 0,
  `modalidade` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chamada`
--

INSERT INTO `chamada` (`chamada_id`, `nome`, `status`, `data_inicio`, `hora_inicio`, `data_termino`, `hora_termino`, `campus`, `modalidade`) VALUES
(69, 'Almoço ', 1, '14/05/2019', '11:02', '14/05/2019', '11:55', 2, 0),
(70, 'almoço', 1, '14/05/2019', '12:03', '14/05/2019', '12:03', 2, 0),
(71, 'teste', 1, '14/05/2019', '13:35', '16/05/2019', '14:57', 2, 0),
(72, 'Almoço', 1, '26/07/2019', '23:35', '26/07/2019', '23:36', 8, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunicado`
--

CREATE TABLE `comunicado` (
  `id` int(11) NOT NULL,
  `mensagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comunicado`
--

INSERT INTO `comunicado` (`id`, `mensagen`, `titulo`) VALUES
(22, '  Lorem Ipsum Ã© simplesmente um texto fictÃ­cio da indÃºstria tipogrÃ¡fica e de impressÃ£o. Lorem Ipsum Ã© o texto fictÃ­cio padrÃ£o do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a mexeu para fazer um li      ', 'ola mundo'),
(25, 'ola mundo              ddcsdc                      \r\n                 em Ipsum Ã© simplesmente um texto fictÃ­cio da indÃºstria tipogrÃ¡fica e de impres                                                   \r\n                                                  ', 'ola mundo 8'),
(26, '  da galera do tipo e a mexeu para fazer um li                                          \r\n                                ', 'ola mundo 2'),
(27, '  Lorem Ipsum Ã© simplesmente um texto fictÃ­cio da indÃºstria tipogrÃ¡fica e de impressÃ£o. Lorem Ipsum Ã© o texto fictÃ­cio padrÃ£o do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a mexeu para fazer um li      ', 'ola mundo 4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenadores_modalidades`
--

CREATE TABLE `coordenadores_modalidades` (
  `id` int(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `coordenadores_modalidades`
--

INSERT INTO `coordenadores_modalidades` (`id`, `cargo`, `nome`, `email`) VALUES
(3, 'gernete volei', 'joao s', 'joao3@gamil.com'),
(9, 'gernete futibol', 'joao silva', 'joao1@gamil.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `etapa`
--

CREATE TABLE `etapa` (
  `etapa_id` int(11) NOT NULL,
  `enome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `etapa`
--

INSERT INTO `etapa` (`etapa_id`, `enome`) VALUES
(2, 'Semi Final'),
(5, 'Final'),
(7, 'Classificatória');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospitais`
--

CREATE TABLE `hospitais` (
  `id` int(11) NOT NULL,
  `plano` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `instituicao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hospitais`
--

INSERT INTO `hospitais` (`id`, `plano`, `telefone`, `endereco`, `instituicao`) VALUES
(5, 'sus', '(63) 43423-4329', 'centro', 'sus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `id` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `imagem` varchar(5) NOT NULL,
  `campus` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `modalidade` int(11) DEFAULT NULL,
  `nascimento` date NOT NULL,
  `sangue` varchar(3) DEFAULT NULL,
  `cpf` varchar(15) NOT NULL,
  `plano` varchar(20) DEFAULT NULL,
  `responsavel` varchar(50) NOT NULL,
  `telefone1` varchar(15) NOT NULL,
  `telefone2` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `resultado` varchar(100) DEFAULT NULL,
  `log` int(11) DEFAULT NULL,
  `rg` varchar(5) DEFAULT NULL,
  `comprovante` varchar(5) NOT NULL,
  `verso` varchar(5) DEFAULT NULL,
  `matricula` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`id`, `sexo`, `imagem`, `campus`, `nome`, `modalidade`, `nascimento`, `sangue`, `cpf`, `plano`, `responsavel`, `telefone1`, `telefone2`, `status`, `resultado`, `log`, `rg`, `comprovante`, `verso`, `matricula`) VALUES
(7, 'Masculino', 'jpeg', 8, 'Wanderson Neres dos Santos', 31, '2003-02-24', '', '126.845.586-55', '', 'Carmozina Neres Dos Santos', '', '', 2, '', 8, 'jpeg', 'pdf', 'jpeg', '2018101100511064'),
(9, 'Masculino', 'jpeg', 8, 'Deivyd Robert Oliveira de Abreu', 31, '2001-02-23', '', '388.943.708-79', '', 'Zilene Oliveira de Souza', '', '', 2, '', 27, 'jpeg', 'pdf', 'jpeg', '2019101220530185');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador_chamada`
--

CREATE TABLE `jogador_chamada` (
  `id` int(11) NOT NULL,
  `chamada_id` int(11) NOT NULL,
  `jogador_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador_modalidade`
--

CREATE TABLE `jogador_modalidade` (
  `jogador_modalidade_id` int(11) NOT NULL,
  `jogador_id` varchar(17) NOT NULL,
  `modalidadee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogador_modalidade`
--

INSERT INTO `jogador_modalidade` (`jogador_modalidade_id`, `jogador_id`, `modalidadee_id`) VALUES
(3, '2018101100511064', 31),
(4, '2019101220530185', 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `jogo_id` int(11) NOT NULL,
  `local` int(11) NOT NULL,
  `horario` varchar(6) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `modalidade` int(11) NOT NULL,
  `etapa` int(11) NOT NULL,
  `time1` int(11) DEFAULT 99,
  `time2` int(11) DEFAULT 99,
  `pontuacao1` varchar(5) DEFAULT NULL,
  `pontuacao2` varchar(5) DEFAULT NULL,
  `vencedor` int(11) DEFAULT NULL,
  `data` date NOT NULL,
  `numero` int(11) NOT NULL,
  `outro1` varchar(30) DEFAULT NULL,
  `outro2` varchar(30) DEFAULT NULL,
  `log` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`jogo_id`, `local`, `horario`, `grupo`, `modalidade`, `etapa`, `time1`, `time2`, `pontuacao1`, `pontuacao2`, `vencedor`, `data`, `numero`, `outro1`, `outro2`, `log`) VALUES
(1, 5, '15:00', 'A', 19, 7, 8, 15, '1', '0', 1, '2019-05-14', 1, '', '', 1),
(2, 5, '16:00', 'B', 19, 7, 9, 100, '7', '0', 1, '2019-05-14', 2, '', '', 1),
(3, 5, '07:30', 'B', 19, 7, 101, 11, '1', '6', 2, '2019-05-15', 3, '', '', 1),
(4, 6, '14:00', 'A', 22, 7, 8, 100, '9', '1', 1, '2019-05-14', 1, '', '', 1),
(5, 6, '15:00', 'C', 22, 7, 101, 105, '6', '3', 1, '2019-05-14', 2, '', '', 1),
(6, 6, '16:00', 'C', 22, 7, 104, 15, '1', '0', 1, '2019-05-14', 3, '', '', 1),
(7, 6, '17:00', 'B', 22, 7, 9, 22, '6', '2', 1, '2019-05-14', 4, '', '', 1),
(9, 5, '14:00', 'ÚNICO', 31, 7, 9, 8, '12', '34', 2, '2019-05-15', 1, '', '', 1),
(10, 5, '15:00', 'ÚNICO', 31, 7, 15, 22, '19', '16', 1, '2019-05-15', 2, '', '', 1),
(11, 9, '08:00', 'ÚNICO', 35, 7, 15, 8, '0', '3', 2, '2019-05-15', 1, '', '', 1),
(12, 9, '09:30', 'ÚNICO', 35, 7, 101, 100, '1', '3', 2, '2019-05-15', 2, '', '', 1),
(16, 6, '08:30', 'A', 19, 7, 22, 15, '1', '0', 1, '2019-05-15', 4, '', '', 1),
(17, 6, '09:30', 'B', 19, 7, 9, 101, '2', '4', 2, '2019-05-15', 5, '', '', 1),
(18, 6, '14:00', 'A', 22, 7, 12, 100, '4', '2', 1, '2019-05-15', 6, '', '', 1),
(19, 6, '15:00', 'B', 22, 7, 9, 11, '6', '0', 1, '2019-05-15', 7, '', '', 1),
(20, 6, '16:00', 'B', 22, 7, 103, 22, '2', '0', 1, '2019-05-15', 8, '', '', 1),
(21, 6, '17:00', 'C', 22, 7, 101, 15, '1', '0', 1, '2019-05-15', 9, '', '', 1),
(22, 6, '18:00', 'C', 22, 7, 104, 105, '3', '0', 1, '2019-05-15', 10, '', '', 1),
(23, 6, '11:30', 'ÚNICO', 21, 7, 15, 9, '0', '1', 2, '2019-05-15', 1, '', '', 1),
(24, 5, '17:00', 'ÚNICO', 34, 7, 12, 15, '6', '3', 1, '2019-05-14', 1, '', '', 1),
(25, 5, '08:30', 'A', 24, 7, 8, 11, '2', '0', 1, '2019-05-15', 1, '', '', 1),
(26, 5, '09:30', 'B', 24, 7, 101, 9, '1', '2', 2, '2019-05-15', 2, '', '', 1),
(27, 5, '16:00', 'A', 24, 7, 22, 11, '2', '0', 1, '2019-05-15', 3, '', '', 1),
(28, 5, '17:00', 'B', 24, 7, 103, 101, '2', '1', 1, '2019-05-15', 4, '', '', 1),
(29, 5, '10:30', 'ÚNICO', 23, 7, 9, 22, '2', '0', 1, '2019-05-15', 1, '', '', 1),
(30, 5, '11:30', 'ÚNICO', 23, 7, 101, 8, '0', '2', 2, '2019-05-15', 2, '', '', 1),
(31, 5, '14:00', 'ÚNICO', 31, 7, 8, 22, '42', '19', 1, '2019-05-16', 3, '', '', 1),
(32, 5, '15:00', 'ÚNICO', 31, 7, 15, 9, '21', '15', 1, '2019-05-16', 4, '', '', 1),
(33, 9, '08:00', 'ÚNICO', 35, 7, 8, 101, '5', '0', 1, '2019-05-16', 3, '', '', 1),
(34, 9, '09:30', 'ÚNICO', 35, 7, 100, 15, '4', '0', 1, '2019-05-16', 4, '', '', 1),
(35, 6, '08:00', 'A', 19, 7, 8, 22, '8', '6', 1, '2019-05-16', 7, '', '', 1),
(36, 6, '09:00', 'B', 19, 7, 9, 11, '5', '0', 1, '2019-05-16', 8, '', '', 1),
(37, 6, '10:00', 'B', 19, 7, 100, 101, '0', '5', 2, '2019-05-16', 9, '', '', 1),
(38, 6, '14:00', 'A', 22, 7, 8, 12, '9', '2', 1, '2019-05-16', 11, '', '', 1),
(39, 6, '15:00', 'B', 22, 7, 9, 103, '3', '1', 1, '2019-05-16', 12, '', '', 1),
(40, 6, '16:00', 'B', 22, 7, 22, 11, '1', '2', 2, '2019-05-16', 13, '', '', 1),
(41, 6, '17:00', 'C', 22, 7, 101, 104, '4', '0', 1, '2019-05-16', 14, '', '', 1),
(42, 6, '18:00', 'C', 22, 7, 105, 15, '1', '0', 1, '2019-05-16', 15, '', '', 1),
(43, 6, '11:00', 'ÚNICO', 21, 7, 9, 15, '1', '0', 1, '2019-05-16', 2, '', '', 1),
(44, 5, '18:00', 'ÚNICO', 34, 7, 15, 12, '6', '7', 2, '2019-05-15', 2, '', '', 1),
(46, 5, '08:00', 'A', 24, 7, 8, 22, '0', '2', 2, '2019-05-16', 5, '', '', 1),
(47, 5, '09:00', 'B', 24, 7, 9, 103, '1', '2', 2, '2019-05-16', 6, '', '', 1),
(48, 5, '10:00', 'ÚNICO', 23, 7, 9, 101, '2', '0', 1, '2019-05-16', 3, '', '', 1),
(49, 5, '11:00', 'ÚNICO', 23, 7, 8, 22, '2', '0', 1, '2019-05-16', 4, '', '', 1),
(50, 5, '10:00', 'ÚNICO', 31, 7, 9, 22, '19', '23', 2, '2019-05-17', 5, '', '', 1),
(51, 5, '11:00', 'ÚNICO', 31, 7, 8, 15, '35', '4', 1, '2019-05-17', 6, '', '', 1),
(52, 9, '08:00', 'ÚNICO', 35, 7, 15, 101, '1', '4', 2, '2019-05-17', 5, '', '', 1),
(53, 9, '09:30', 'ÚNICO', 35, 7, 8, 100, '3', '0', 1, '2019-05-17', 6, '', '', 1),
(54, 6, '08:00', 'SEMI', 19, 2, 8, 11, '1', '0', 1, '2019-05-17', 10, '', '', 1),
(55, 6, '09:00', 'SEMI', 19, 2, 9, 15, '1', '0', 1, '2019-05-17', 11, '', '', 1),
(56, 6, '10:00', 'SEMI', 22, 2, 8, 104, '10', '2', 1, '2019-05-17', 16, '', '', 1),
(57, 6, '11:00', 'SEMI', 22, 2, 9, 101, '2', '1', 1, '2019-05-17', 17, '', '', 1),
(58, 6, '14:00', 'FINAL', 19, 5, 8, 9, '1', '0', 1, '2019-05-17', 12, '', '', 1),
(59, 6, '15:00', 'FINAL', 22, 5, 8, 9, '2', '5', 2, '2019-05-17', 18, '', '', 1),
(61, 5, '08:00', 'SEMI', 24, 2, 22, 9, '0', '2', 2, '2019-05-17', 7, '', '', 1),
(62, 5, '09:00', 'SEMI', 24, 2, 103, 8, '2', '0', 1, '2019-05-17', 8, '', '', 1),
(63, 5, '15:00', 'FINAL', 24, 5, 9, 103, '1', '2', 2, '2019-05-17', 9, '', '', 1),
(64, 5, '13:00', 'ÚNICO', 23, 7, 22, 101, '2', '0', 1, '2019-05-17', 5, '', '', 1),
(65, 5, '14:00', 'ÚNICO', 23, 7, 9, 8, '2', '0', 1, '2019-05-17', 6, '', '', 1),
(66, 6, '10:30', 'B', 19, 7, 11, 100, '6', '0', 1, '2019-05-15', 6, '', '', 4),
(68, 6, '07:30', 'B', 22, 7, 103, 11, '2 (5)', '2 (3)', 0, '2019-05-15', 5, '', '', 64);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogoindividual`
--

CREATE TABLE `jogoindividual` (
  `individual_id` int(11) NOT NULL,
  `modalidade` int(11) NOT NULL,
  `horario` varchar(5) NOT NULL,
  `local` varchar(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogoindividual`
--

INSERT INTO `jogoindividual` (`individual_id`, `modalidade`, `horario`, `local`, `data`) VALUES
(1, 32, '07:30', '7', '2019-05-15'),
(5, 25, '07:30', '10', '2019-05-16'),
(6, 26, '07:30', '10', '2019-05-16'),
(7, 36, '07:30', '11', '2019-05-15'),
(8, 37, '07:30', '11', '2019-05-15'),
(9, 33, '07:30', '7', '2019-05-15'),
(10, 33, '07:30', '7', '2019-05-16'),
(11, 32, '07:30', '7', '2019-05-16'),
(12, 37, '07:30', '11', '2019-05-16'),
(13, 36, '07:30', '11', '2019-05-16'),
(15, 30, '07:30', '13', '2019-05-16'),
(17, 29, '07:30', '13', '2019-05-16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `local_id` int(11) NOT NULL,
  `lnome` varchar(30) NOT NULL,
  `log` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`local_id`, `lnome`, `log`) VALUES
(5, 'Ginásio', 1),
(6, 'Quadra', 1),
(7, 'Pista de Atletismo', 1),
(8, 'Local a Definir', 1),
(9, 'Campo', 1),
(10, 'Piscina', 1),
(11, 'Biblioteca', 4),
(12, 'Sala de Lutas (Dentro do Ginás', 4),
(13, 'Sala de Lutas (no Ginásio)', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `acao` int(11) NOT NULL,
  `tabela` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `registro` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`log_id`, `user_id`, `acao`, `tabela`, `registro`) VALUES
(29, 5, 1, 'Jogador', '2019101100511248'),
(30, 1, 2, 'Jogador', '2019101100511248'),
(31, 1, 2, 'Jogador', '2019101100511248'),
(32, 1, 2, 'Jogador', '2019101100511248'),
(33, 8, 1, 'Jogador', '2019101100511248'),
(34, 5, 1, 'Jogador', '2019101100511248'),
(35, 4, 3, 'Jogador', '12'),
(36, 9, 1, 'Jogador', '2017112071010120'),
(37, 9, 1, 'Jogador', '2017112071010120'),
(38, 9, 1, 'Jogador', '2019112071010030'),
(39, 4, 1, 'Jogador', '2018101100511064'),
(40, 8, 1, 'Jogador', '2018101100511064'),
(41, 9, 1, 'Jogador', '2019112071010120'),
(42, 8, 1, 'Jogador', '2018101100511064'),
(43, 5, 1, 'Jogador', '2018101100510394'),
(44, 5, 1, 'Jogador', '2018101100510394'),
(45, 9, 1, 'Jogador', '2019112071010120'),
(46, 9, 1, 'Jogador', '2019112071010120'),
(47, 9, 1, 'Jogador', '2019112071010030'),
(48, 9, 1, 'Jogador', '2019112071010030'),
(49, 9, 1, 'Jogador', '2017112071010120'),
(50, 9, 1, 'Jogador', '2017112071010120'),
(51, 9, 1, 'Jogador', '2017112071010120'),
(52, 9, 1, 'Jogador', '2019112071010030'),
(53, 4, 3, 'Jogador', '20'),
(54, 9, 1, 'Jogador', '2019112071010120'),
(55, 4, 3, 'Jogador', '21'),
(56, 4, 3, 'Jogador', '23'),
(57, 9, 1, 'Jogador', '2017112071010410'),
(58, 9, 1, 'Jogador', '2019112071010120'),
(59, 9, 1, 'Jogador', '2017112071010120'),
(60, 9, 1, 'Jogador', '2017112071010120'),
(61, 9, 1, 'Jogador', '2019112141040330'),
(62, 4, 3, 'Jogador', '25'),
(63, 9, 1, 'Jogador', '2019112141040330'),
(64, 4, 3, 'Jogador', '16'),
(65, 4, 3, 'Jogador', '17'),
(66, 4, 3, 'Jogador', '14'),
(67, 4, 3, 'Jogador', '24'),
(68, 4, 3, 'Jogador', '11'),
(69, 4, 3, 'Jogador', '10'),
(70, 9, 1, 'Jogador', '2017112071010120'),
(71, 9, 1, 'Jogador', '2017112071010120'),
(72, 9, 2, 'Jogador', '2017112071010120'),
(73, 1, 1, 'Jogador', '2016112141040010'),
(74, 1, 1, 'Jogador', '2016112141040010'),
(75, 1, 1, 'Jogador', '2016112141040010'),
(76, 9, 1, 'Jogador', '2016112141040010'),
(77, 9, 1, 'Jogador', '2016112141040010'),
(78, 9, 1, 'Jogador', '2016112141040010'),
(79, 8, 1, 'Jogador', '2018101100510394'),
(80, 8, 1, 'Jogador', '2018101100510394'),
(81, 4, 3, 'Jogador', '3'),
(82, 4, 4, 'Jogador', '9'),
(83, 4, 3, 'Jogador', '7'),
(84, 4, 3, 'Jogador', '18'),
(85, 4, 3, 'Jogador', '19'),
(86, 4, 3, 'Jogador', '19'),
(87, 9, 1, 'Jogador', '2019112071010120'),
(88, 9, 1, 'Jogador', '2019112071010120'),
(89, 9, 1, 'Jogador', '2017112071010120'),
(90, 9, 1, 'Jogador', '2017112071010410'),
(91, 9, 1, 'Jogador', '2018112071010210'),
(92, 1, 1, 'Jogador', '2016112141040010'),
(93, 1, 2, 'Jogador', '1231232312312312'),
(94, 4, 3, 'Jogador', '43'),
(95, 27, 1, 'Jogador', '2018101100510394'),
(96, 27, 1, 'Jogador', '2018101100510394'),
(97, 27, 1, 'Jogador', '2018101100510041'),
(98, 27, 1, 'Jogador', '2018101100510041'),
(99, 27, 1, 'Jogador', '2018101100510041'),
(100, 27, 2, 'Jogador', '2018101100510041'),
(101, 27, 1, 'Jogador', '2018101100510041'),
(102, 27, 1, 'Jogador', '2018101100510041'),
(103, 27, 2, 'Jogador', '2018101100510041'),
(104, 1, 2, 'Jogador', '1231231231231231'),
(105, 9, 1, 'Jogador', '2019112141040300'),
(106, 9, 1, 'Jogador', '2017112071010380'),
(107, 9, 1, 'Jogador', '2017112141040160'),
(108, 9, 1, 'Jogador', '2019112071010270'),
(109, 0, 1, 'Jogador', '2017112071010030'),
(110, 1, 2, 'Jogador', '1231231231231231'),
(111, 0, 1, 'Jogador', '2017112141040240'),
(112, 9, 1, 'Jogador', '2018112141040220'),
(113, 9, 1, 'Jogador', '2017112071010380'),
(114, 9, 1, 'Jogador', '2018112141040220'),
(115, 27, 1, 'Jogador', '2019101220530185'),
(116, 23, 3, 'Jogador', '14'),
(117, 23, 3, 'Jogador', '17'),
(118, 23, 3, 'Jogador', '18'),
(119, 23, 3, 'Jogador', '22'),
(120, 23, 3, 'Jogador', '26'),
(121, 23, 3, 'Jogador', '27'),
(122, 23, 3, 'Jogador', '9'),
(123, 23, 3, 'Jogador', '20'),
(124, 23, 3, 'Jogador', '44'),
(125, 23, 3, 'Jogador', '45'),
(126, 23, 3, 'Jogador', '46'),
(127, 23, 3, 'Jogador', '47'),
(128, 23, 3, 'Jogador', '48'),
(129, 23, 3, 'Jogador', '49'),
(130, 23, 3, 'Jogador', '50'),
(131, 23, 3, 'Jogador', '51'),
(132, 23, 3, 'Jogador', '52'),
(133, 23, 3, 'Jogador', '53'),
(134, 23, 3, 'Jogador', '54'),
(135, 23, 3, 'Jogador', '55'),
(136, 15, 1, 'Jogador', ' 201610310051006'),
(137, 23, 3, 'Jogador', '56'),
(138, 23, 3, 'Jogador', '57'),
(139, 23, 3, 'Jogador', '59'),
(140, 23, 3, 'Jogador', '60'),
(141, 23, 3, 'Jogador', '61'),
(142, 23, 3, 'Jogador', '62'),
(143, 23, 3, 'Jogador', '63'),
(144, 23, 3, 'Jogador', '64'),
(145, 23, 3, 'Jogador', '65'),
(146, 23, 3, 'Jogador', '66'),
(147, 23, 4, 'Jogador', '67'),
(148, 23, 3, 'Jogador', '69'),
(149, 23, 4, 'Jogador', '71'),
(150, 23, 3, 'Jogador', '72'),
(151, 23, 3, 'Jogador', '73'),
(152, 23, 4, 'Jogador', '74'),
(153, 23, 3, 'Jogador', '75'),
(154, 23, 3, 'Jogador', '77'),
(155, 23, 4, 'Jogador', '78'),
(156, 15, 1, 'Jogador', '2017103100510433'),
(157, 15, 1, 'Jogador', '2018103100510595'),
(158, 15, 1, 'Jogador', ' 201710310051092'),
(159, 15, 1, 'Jogador', '2017103102340527'),
(160, 15, 1, 'Jogador', '2017103102340527'),
(161, 15, 2, 'Jogador', '2017103102340527'),
(162, 15, 1, 'Jogador', '2018103121040075'),
(163, 1, 2, 'Servidor', 'teste'),
(164, 1, 2, 'Servidor', 'teset'),
(165, 9, 1, 'Jogador', '2018112141040220'),
(166, 15, 1, 'Jogador', '2017103121040185'),
(167, 15, 1, 'Jogador', '2017103121040185'),
(168, 11, 1, 'Jogador', ' 201910520024044'),
(169, 15, 1, 'Jogador', ' 201710310051014'),
(170, 15, 1, 'Jogador', ' 201710310051014'),
(171, 15, 1, 'Jogador', ' 201710310051038'),
(172, 15, 1, 'Jogador', '2017103121040207'),
(173, 27, 1, 'Jogador', '2019101200640147'),
(174, 15, 1, 'Servidor', 'alexandre.almeida@ifgoiano.edu.br'),
(175, 15, 1, 'Jogador', '2019103121040313'),
(176, 31, 1, 'Jogador', '2018102201840142'),
(177, 28, 1, 'Jogador', '2016110051010352'),
(178, 28, 1, 'Jogador', '2017110051010110'),
(179, 28, 1, 'Jogador', '2016110051010352'),
(180, 28, 1, 'Jogador', '2018110051010418'),
(181, 9, 1, 'Jogador', '2018112141040220'),
(182, 4, 3, 'Jogador', '59'),
(183, 9, 1, 'Jogador', '2019112141040320'),
(184, 4, 3, 'Jogador', '108'),
(185, 23, 3, 'Jogador', '130'),
(186, 23, 3, 'Jogador', '133'),
(187, 23, 3, 'Jogador', '137'),
(188, 23, 3, 'Jogador', '140'),
(189, 23, 3, 'Jogador', '146'),
(190, 23, 3, 'Jogador', '148'),
(191, 23, 4, 'Jogador', '150'),
(192, 23, 3, 'Jogador', '71'),
(193, 23, 4, 'Jogador', '74'),
(194, 23, 3, 'Jogador', '75'),
(195, 23, 4, 'Jogador', '79'),
(196, 28, 1, 'Jogador', '2018110091010176'),
(197, 11, 1, 'Jogador', '2019105100040167'),
(198, 11, 1, 'Jogador', '2017105100040344'),
(199, 23, 4, 'Jogador', '80'),
(200, 23, 3, 'Jogador', '81'),
(201, 23, 3, 'Jogador', '83'),
(202, 23, 3, 'Jogador', '84'),
(203, 23, 3, 'Jogador', '85'),
(204, 23, 4, 'Jogador', '88'),
(205, 23, 3, 'Jogador', '86'),
(206, 23, 3, 'Jogador', '87'),
(207, 23, 4, 'Jogador', '89'),
(208, 23, 3, 'Jogador', '90'),
(209, 23, 3, 'Jogador', '91'),
(210, 23, 3, 'Jogador', '105'),
(211, 23, 4, 'Jogador', '109'),
(212, 23, 4, 'Jogador', '111'),
(213, 23, 4, 'Jogador', '112'),
(214, 23, 4, 'Jogador', '114'),
(215, 23, 4, 'Jogador', '117'),
(216, 23, 4, 'Jogador', '118'),
(217, 23, 4, 'Jogador', '131'),
(218, 23, 4, 'Jogador', '135'),
(219, 23, 4, 'Jogador', '156'),
(220, 27, 1, 'Jogador', '2019101201010236'),
(221, 23, 3, 'Jogador', '113'),
(222, 23, 3, 'Jogador', '115'),
(223, 23, 3, 'Jogador', '116'),
(224, 23, 3, 'Jogador', '119'),
(225, 23, 3, 'Jogador', '120'),
(226, 1, 1, 'Jogo', '11'),
(227, 15, 1, 'Jogador', '2018103121040784'),
(228, 17, 1, 'Jogador', '2017111101110057'),
(229, 17, 1, 'Servidor', 'patricia.oliveira@ifgoiano.edu.br'),
(230, 15, 1, 'Jogador', '2019103121040372'),
(231, 15, 1, 'Jogador', '2019103121040372'),
(232, 15, 1, 'Jogador', '2018103102340077'),
(233, 15, 1, 'Jogador', '2017103102340527'),
(234, 15, 1, 'Jogador', '2018103100510420'),
(235, 15, 1, 'Jogador', '2019103201840367'),
(236, 20, 1, 'Jogador', '20191300300084'),
(237, 15, 1, 'Jogador', '2019103201840367'),
(238, 15, 1, 'Jogador', '2019103201840090'),
(239, 15, 1, 'Jogador', '2019103121040526'),
(240, 15, 1, 'Jogador', '2019103121040585'),
(241, 15, 1, 'Jogador', '2018103102340280'),
(242, 23, 3, 'Jogador', '150'),
(243, 15, 1, 'Jogador', '2017103121040649'),
(244, 20, 1, 'Jogador', '2017108102540055'),
(245, 15, 1, 'Jogador', '2018103102340336'),
(246, 23, 3, 'Jogador', '67'),
(247, 23, 3, 'Jogador', '287'),
(248, 15, 1, 'Jogador', '2019103200240307'),
(249, 23, 3, 'Jogador', '285'),
(250, 23, 3, 'Jogador', '286'),
(251, 15, 1, 'Servidor', 'jeffersonkran@hotmail.com'),
(252, 13, 1, 'Jogador', '2017109191040060'),
(253, 20, 1, 'Jogador', '2018208112550047'),
(254, 17, 1, 'Jogador', '2017111101110057'),
(255, 0, 3, 'Jogador', '282'),
(256, 0, 3, 'Jogador', '284'),
(257, 0, 3, 'Jogador', '288'),
(258, 23, 3, 'Jogador', '303'),
(259, 23, 3, 'Jogador', '305'),
(260, 23, 3, 'Jogador', '306'),
(261, 23, 3, 'Jogador', '67'),
(262, 23, 3, 'Jogador', '301'),
(263, 23, 4, 'Jogador', '298'),
(264, 23, 3, 'Jogador', '289'),
(265, 23, 3, 'Jogador', '290'),
(266, 23, 3, 'Jogador', '291'),
(267, 23, 3, 'Jogador', '293'),
(268, 23, 3, 'Jogador', '295'),
(269, 23, 3, 'Jogador', '297'),
(270, 23, 3, 'Jogador', '275'),
(271, 23, 3, 'Jogador', '277'),
(272, 23, 3, 'Jogador', '278'),
(273, 23, 3, 'Jogador', '279'),
(274, 23, 4, 'Jogador', '274'),
(275, 23, 3, 'Jogador', '266'),
(276, 23, 3, 'Jogador', '267'),
(277, 23, 3, 'Jogador', '268'),
(278, 23, 3, 'Jogador', '269'),
(279, 23, 3, 'Jogador', '271'),
(280, 23, 3, 'Jogador', '224'),
(281, 23, 3, 'Jogador', '264'),
(282, 23, 3, 'Jogador', '174'),
(283, 23, 3, 'Jogador', '176'),
(284, 23, 3, 'Jogador', '179'),
(285, 23, 3, 'Jogador', '181'),
(286, 27, 1, 'Jogador', '2018101110520465'),
(287, 11, 1, 'Jogador', '2017105131040320'),
(288, 11, 1, 'Jogador', '2017105131040320'),
(289, 11, 1, 'Jogador', '2017105131040311'),
(290, 23, 3, 'Jogador', '171'),
(291, 23, 3, 'Jogador', '173'),
(292, 23, 3, 'Jogador', '166'),
(293, 23, 3, 'Jogador', '168'),
(294, 23, 3, 'Jogador', '161'),
(295, 23, 3, 'Jogador', '163'),
(296, 23, 3, 'Jogador', '164'),
(297, 23, 3, 'Jogador', '155'),
(298, 23, 3, 'Jogador', '159'),
(299, 23, 3, 'Jogador', '326'),
(300, 23, 3, 'Jogador', '327'),
(301, 23, 3, 'Jogador', '328'),
(302, 23, 3, 'Jogador', '330'),
(303, 11, 2, 'Servidor', 'weslene.mendonca@ifgoiano.edu.br'),
(304, 23, 4, 'Jogador', '319'),
(305, 23, 4, 'Jogador', '211'),
(306, 23, 4, 'Jogador', '215'),
(307, 23, 4, 'Jogador', '335'),
(308, 23, 4, 'Jogador', '214'),
(309, 23, 4, 'Jogador', '337'),
(310, 23, 4, 'Jogador', '339'),
(311, 23, 4, 'Jogador', '340'),
(312, 23, 4, 'Jogador', '292'),
(313, 23, 4, 'Jogador', '316'),
(314, 11, 1, 'Servidor', 'edfisicaweslene@hotmail.com'),
(315, 11, 1, 'Jogador', '2017105100510111'),
(316, 11, 1, 'Jogador', '2017105131040141'),
(317, 11, 1, 'Jogador', '2017105131040095'),
(318, 15, 1, 'Jogador', ' 201710310051092'),
(319, 17, 1, 'Jogador', '2017111101110057'),
(320, 15, 1, 'Jogador', ' 20171031005109'),
(321, 17, 1, 'Jogador', '2017111101110057'),
(322, 15, 1, 'Jogador', ' 20171031005109'),
(323, 17, 2, 'Jogador', '2017111100510868'),
(324, 15, 1, 'Jogador', '2017103121040860'),
(325, 15, 1, 'Jogador', '2017103102340560'),
(326, 38, 1, 'Jogador', '2018102200840475'),
(327, 12, 1, 'Jogador', '2017106102340297'),
(328, 13, 1, 'Jogador', '2017109191040400'),
(329, 12, 1, 'Jogador', '2017106102340327'),
(330, 13, 1, 'Jogador', '2018109101940266'),
(331, 30, 1, 'Jogador', '2017104100510253'),
(332, 30, 1, 'Jogador', '2017104100510253'),
(333, 30, 1, 'Jogador', '2017104100510199'),
(334, 30, 1, 'Jogador', '2017104100910251'),
(335, 30, 1, 'Jogador', '2018104100910176'),
(336, 30, 1, 'Jogador', '2015104100510120'),
(337, 30, 1, 'Jogador', '2017104100510509'),
(338, 30, 1, 'Jogador', '2016104100510143'),
(339, 30, 1, 'Jogador', '2017104100910324'),
(340, 30, 1, 'Jogador', '2017104100910553'),
(341, 30, 1, 'Jogador', '2017104100510024'),
(342, 30, 1, 'Jogador', '2018104100910575'),
(343, 30, 1, 'Jogador', '2017104100510040'),
(344, 30, 1, 'Jogador', '2018104100910664'),
(345, 30, 1, 'Jogador', '2015104100510120'),
(346, 15, 2, 'Servidor', 'antoniotavaresagro@gmail.com'),
(347, 12, 1, 'Jogador', '2019106100540648'),
(348, 12, 1, 'Jogador', '2019106100540370'),
(349, 0, 3, 'Jogador', '217'),
(350, 1, 1, 'Jogo', '23'),
(351, 1, 1, 'Jogo', '24'),
(352, 1, 1, 'Jogo', '38'),
(353, 23, 3, 'Jogador', '336'),
(354, 23, 3, 'Jogador', '339'),
(355, 23, 3, 'Jogador', '340'),
(356, 1, 1, 'Jogo', '23'),
(357, 1, 1, 'Jogo', '54'),
(358, 1, 1, 'Jogo', '55'),
(359, 1, 1, 'Jogo', '58'),
(360, 1, 1, 'Jogo', '57'),
(361, 1, 1, 'Jogo', '56'),
(362, 1, 1, 'Jogo', '59'),
(363, 23, 3, 'Jogador', '100'),
(364, 23, 3, 'Jogador', '101'),
(365, 23, 3, 'Jogador', '102'),
(366, 23, 3, 'Jogador', '103'),
(367, 23, 3, 'Jogador', '104'),
(368, 15, 1, 'Jogador', '2019103220530157'),
(369, 23, 3, 'Jogador', '92'),
(370, 23, 3, 'Jogador', '93'),
(371, 23, 3, 'Jogador', '94'),
(372, 23, 3, 'Jogador', '95'),
(373, 23, 3, 'Jogador', '96'),
(374, 23, 3, 'Jogador', '97'),
(375, 23, 3, 'Jogador', '98'),
(376, 23, 3, 'Jogador', '99'),
(377, 15, 1, 'Jogador', '2017103102340624'),
(378, 15, 1, 'Jogador', '2017103102340624'),
(379, 37, 3, 'Jogador', '67'),
(380, 37, 3, 'Jogador', '348'),
(381, 20, 1, 'Jogador', '2018108102440170'),
(382, 15, 1, 'Jogador', '2018103102340506'),
(383, 12, 1, 'Jogador', '2019106201840078'),
(384, 12, 1, 'Jogador', '2017106100540159'),
(385, 23, 3, 'Jogador', '216'),
(386, 23, 3, 'Jogador', '219'),
(387, 23, 3, 'Jogador', '225'),
(388, 12, 1, 'Jogador', '2017106102340319'),
(389, 12, 1, 'Jogador', '2017106102340033'),
(390, 23, 3, 'Jogador', '215'),
(391, 23, 3, 'Jogador', '274'),
(392, 23, 4, 'Jogador', '298'),
(393, 15, 1, 'Jogador', '2019103121040585'),
(394, 23, 3, 'Jogador', '441'),
(395, 23, 3, 'Jogador', '443'),
(396, 23, 3, 'Jogador', '445'),
(397, 23, 3, 'Jogador', '447'),
(398, 23, 3, 'Jogador', '448'),
(399, 23, 3, 'Jogador', '453'),
(400, 0, 1, 'Jogador', '2017106102340297'),
(401, 12, 1, 'Jogador', '2017106102340297'),
(402, 23, 3, 'Jogador', '370'),
(403, 23, 3, 'Jogador', '382'),
(404, 12, 1, 'Jogador', '2017106102340327'),
(405, 23, 3, 'Jogador', '433'),
(406, 23, 3, 'Jogador', '435'),
(407, 23, 3, 'Jogador', '437'),
(408, 23, 3, 'Jogador', '440'),
(409, 12, 1, 'Jogador', '2017106102340262'),
(410, 23, 3, 'Jogador', '420'),
(411, 23, 3, 'Jogador', '423'),
(412, 23, 3, 'Jogador', '425'),
(413, 23, 3, 'Jogador', '426'),
(414, 23, 3, 'Jogador', '427'),
(415, 23, 3, 'Jogador', '430'),
(416, 23, 3, 'Jogador', '335'),
(417, 23, 3, 'Jogador', '337'),
(418, 23, 3, 'Jogador', '342'),
(419, 23, 3, 'Jogador', '402'),
(420, 12, 1, 'Jogador', '2017106100540191'),
(421, 12, 1, 'Jogador', '2018106100540278'),
(422, 12, 1, 'Jogador', '2019106100540516'),
(423, 12, 1, 'Jogador', '2019106100540516'),
(424, 23, 3, 'Jogador', '210'),
(425, 23, 3, 'Jogador', '211'),
(426, 23, 3, 'Jogador', '212'),
(427, 23, 3, 'Jogador', '213'),
(428, 12, 1, 'Jogador', '2017106102340122'),
(429, 12, 1, 'Jogador', '2017106102340165'),
(430, 12, 1, 'Jogador', '2017106102340165'),
(431, 23, 4, 'Jogador', '465'),
(432, 21, 1, 'Jogador', '2019101221510196'),
(433, 23, 3, 'Jogador', '465'),
(434, 12, 1, 'Jogador', '2018106102340110'),
(435, 12, 1, 'Jogador', '2018106102340110'),
(436, 21, 2, 'Jogador', '2019101221230118'),
(437, 21, 1, 'Jogador', '2019101202440307'),
(438, 15, 1, 'Jogador', '2018103102340077'),
(439, 23, 3, 'Jogador', '343'),
(440, 23, 3, 'Jogador', '345'),
(441, 23, 3, 'Jogador', '346'),
(442, 23, 3, 'Jogador', '383'),
(443, 23, 3, 'Jogador', '452'),
(444, 15, 1, 'Jogador', '2018103102340077'),
(445, 21, 1, 'Jogador', '2019101201010619'),
(446, 23, 4, 'Jogador', '214'),
(447, 23, 4, 'Jogador', '88'),
(448, 15, 1, 'Jogador', '2017103211040117'),
(449, 15, 1, 'Jogador', '2018103121040857'),
(450, 23, 4, 'Jogador', '355'),
(451, 15, 1, 'Jogador', '2018103121040857'),
(452, 15, 1, 'Jogador', '2019103121040372'),
(453, 15, 1, 'Jogador', '2018103100511028'),
(454, 15, 1, 'Jogador', '2019103121040313'),
(455, 15, 1, 'Jogador', '2017103102340527'),
(456, 15, 1, 'Jogador', '2017103121040592'),
(457, 23, 3, 'Jogador', '149'),
(458, 23, 3, 'Jogador', '151'),
(459, 23, 3, 'Jogador', '153'),
(460, 23, 3, 'Jogador', '156'),
(461, 23, 3, 'Jogador', '209'),
(462, 23, 4, 'Jogador', '344'),
(463, 23, 3, 'Jogador', '145'),
(464, 23, 3, 'Jogador', '355'),
(465, 23, 3, 'Jogador', '132'),
(466, 23, 3, 'Jogador', '135'),
(467, 23, 3, 'Jogador', '142'),
(468, 23, 4, 'Jogador', '131'),
(469, 23, 3, 'Jogador', '124'),
(470, 23, 3, 'Jogador', '125'),
(471, 23, 3, 'Jogador', '126'),
(472, 23, 3, 'Jogador', '127'),
(473, 23, 3, 'Jogador', '129'),
(474, 23, 3, 'Jogador', '122'),
(475, 23, 3, 'Jogador', '117'),
(476, 23, 3, 'Jogador', '118'),
(477, 23, 3, 'Jogador', '121'),
(478, 13, 1, 'Jogador', '2017109191040400'),
(479, 13, 1, 'Jogador', '2017109191040400'),
(480, 13, 2, 'Jogador', '2017109191040400'),
(481, 12, 1, 'Jogador', '2019106100540516'),
(482, 15, 1, 'Jogador', ' 20171031005109'),
(483, 15, 1, 'Jogador', '2017103102340624'),
(484, 15, 1, 'Jogador', '2017103102340624'),
(485, 15, 1, 'Jogador', '2017103121040649'),
(486, 11, 1, 'Jogador', '2018105100510176'),
(487, 15, 1, 'Jogador', '2017103102340624'),
(488, 23, 4, 'Jogador', '377'),
(489, 37, 3, 'Jogador', '483'),
(490, 37, 3, 'Jogador', '74'),
(491, 37, 3, 'Jogador', '79'),
(492, 37, 3, 'Jogador', '80'),
(493, 37, 3, 'Jogador', '89'),
(494, 37, 3, 'Jogador', '109'),
(495, 37, 3, 'Jogador', '111'),
(496, 37, 3, 'Jogador', '112'),
(497, 37, 3, 'Jogador', '114'),
(498, 37, 3, 'Jogador', '131'),
(499, 37, 3, 'Jogador', '214'),
(500, 37, 4, 'Jogador', '88'),
(501, 37, 3, 'Jogador', '344'),
(502, 37, 3, 'Jogador', '172'),
(503, 37, 4, 'Jogador', '169'),
(504, 37, 4, 'Jogador', '175'),
(505, 37, 4, 'Jogador', '123'),
(506, 27, 1, 'Jogador', '2019101202440064'),
(507, 41, 3, 'Jogador', '177'),
(508, 41, 3, 'Jogador', '178'),
(509, 41, 3, 'Jogador', '180'),
(510, 41, 3, 'Jogador', '182'),
(511, 41, 3, 'Jogador', '183'),
(512, 41, 3, 'Jogador', '184'),
(513, 41, 3, 'Jogador', '185'),
(514, 41, 3, 'Jogador', '186'),
(515, 41, 3, 'Jogador', '187'),
(516, 41, 3, 'Jogador', '188'),
(517, 41, 3, 'Jogador', '189'),
(518, 41, 3, 'Jogador', '190'),
(519, 41, 3, 'Jogador', '191'),
(520, 41, 3, 'Jogador', '192'),
(521, 41, 3, 'Jogador', '193'),
(522, 41, 3, 'Jogador', '194'),
(523, 23, 4, 'Jogador', '138'),
(524, 23, 4, 'Jogador', '141'),
(525, 41, 3, 'Jogador', '196'),
(526, 41, 3, 'Jogador', '198'),
(527, 41, 3, 'Jogador', '200'),
(528, 23, 3, 'Jogador', '134'),
(529, 23, 3, 'Jogador', '139'),
(530, 23, 3, 'Jogador', '144'),
(531, 23, 3, 'Jogador', '147'),
(532, 23, 3, 'Jogador', '152'),
(533, 23, 3, 'Jogador', '160'),
(534, 23, 3, 'Jogador', '162'),
(535, 23, 3, 'Jogador', '165'),
(536, 23, 3, 'Jogador', '170'),
(537, 23, 3, 'Jogador', '195'),
(538, 41, 3, 'Jogador', '202'),
(539, 41, 3, 'Jogador', '203'),
(540, 41, 3, 'Jogador', '204'),
(541, 41, 3, 'Jogador', '208'),
(542, 23, 3, 'Jogador', '157'),
(543, 23, 3, 'Jogador', '167'),
(544, 23, 3, 'Jogador', '201'),
(545, 23, 3, 'Jogador', '205'),
(546, 23, 3, 'Jogador', '241'),
(547, 23, 3, 'Jogador', '242'),
(548, 23, 3, 'Jogador', '243'),
(549, 23, 3, 'Jogador', '244'),
(550, 23, 3, 'Jogador', '245'),
(551, 23, 3, 'Jogador', '246'),
(552, 41, 4, 'Jogador', '206'),
(553, 41, 4, 'Jogador', '207'),
(554, 41, 3, 'Jogador', '222'),
(555, 41, 3, 'Jogador', '223'),
(556, 41, 3, 'Jogador', '226'),
(557, 41, 3, 'Jogador', '227'),
(558, 41, 3, 'Jogador', '231'),
(559, 41, 3, 'Jogador', '232'),
(560, 41, 3, 'Jogador', '233'),
(561, 41, 3, 'Jogador', '234'),
(562, 41, 3, 'Jogador', '235'),
(563, 41, 3, 'Jogador', '236'),
(564, 41, 3, 'Jogador', '258'),
(565, 41, 3, 'Jogador', '260'),
(566, 33, 1, 'Jogador', '2017207051110340'),
(567, 41, 3, 'Jogador', '384'),
(568, 41, 3, 'Jogador', '385'),
(569, 41, 3, 'Jogador', '386'),
(570, 41, 3, 'Jogador', '388'),
(571, 41, 3, 'Jogador', '389'),
(572, 41, 3, 'Jogador', '390'),
(573, 41, 3, 'Jogador', '392'),
(574, 41, 3, 'Jogador', '394'),
(575, 41, 3, 'Jogador', '395'),
(576, 41, 3, 'Jogador', '396'),
(577, 41, 3, 'Jogador', '397'),
(578, 41, 3, 'Jogador', '398'),
(579, 41, 3, 'Jogador', '400'),
(580, 41, 3, 'Jogador', '401'),
(581, 41, 3, 'Jogador', '403'),
(582, 41, 3, 'Jogador', '404'),
(583, 41, 3, 'Jogador', '405'),
(584, 41, 3, 'Jogador', '409'),
(585, 41, 3, 'Jogador', '410'),
(586, 41, 3, 'Jogador', '412'),
(587, 41, 3, 'Jogador', '413'),
(588, 41, 3, 'Jogador', '415'),
(589, 41, 3, 'Jogador', '416'),
(590, 41, 3, 'Jogador', '418'),
(591, 41, 3, 'Jogador', '419'),
(592, 41, 3, 'Jogador', '421'),
(593, 41, 3, 'Jogador', '422'),
(594, 41, 3, 'Jogador', '428'),
(595, 41, 3, 'Jogador', '432'),
(596, 41, 3, 'Jogador', '434'),
(597, 41, 3, 'Jogador', '436'),
(598, 41, 3, 'Jogador', '438'),
(599, 41, 3, 'Jogador', '439'),
(600, 41, 3, 'Jogador', '442'),
(601, 41, 4, 'Jogador', '444'),
(602, 41, 3, 'Jogador', '446'),
(603, 41, 3, 'Jogador', '449'),
(604, 41, 3, 'Jogador', '450'),
(605, 41, 4, 'Jogador', '431'),
(606, 41, 3, 'Jogador', '456'),
(607, 41, 3, 'Jogador', '458'),
(608, 41, 3, 'Jogador', '460'),
(609, 27, 1, 'Jogador', '2019101202440064'),
(610, 41, 3, 'Jogador', '462'),
(611, 41, 3, 'Jogador', '463'),
(612, 41, 3, 'Jogador', '464'),
(613, 27, 1, 'Jogador', '2018101201010516'),
(614, 41, 3, 'Jogador', '466'),
(615, 41, 3, 'Jogador', '467'),
(616, 41, 4, 'Jogador', '472'),
(617, 41, 3, 'Jogador', '468'),
(618, 41, 4, 'Jogador', '482'),
(619, 41, 3, 'Jogador', '469'),
(620, 41, 3, 'Jogador', '474'),
(621, 41, 3, 'Jogador', '481'),
(622, 41, 3, 'Jogador', '431'),
(623, 41, 4, 'Jogador', '444'),
(624, 41, 3, 'Jogador', '128'),
(625, 41, 3, 'Jogador', '136'),
(626, 41, 3, 'Jogador', '158'),
(627, 41, 3, 'Jogador', '247'),
(628, 41, 3, 'Jogador', '248'),
(629, 41, 3, 'Jogador', '249'),
(630, 41, 3, 'Jogador', '250'),
(631, 41, 3, 'Jogador', '251'),
(632, 41, 3, 'Jogador', '252'),
(633, 41, 3, 'Jogador', '254'),
(634, 41, 3, 'Jogador', '256'),
(635, 41, 3, 'Jogador', '257'),
(636, 41, 3, 'Jogador', '259'),
(637, 41, 3, 'Jogador', '261'),
(638, 41, 3, 'Jogador', '262'),
(639, 41, 3, 'Jogador', '265'),
(640, 41, 3, 'Jogador', '272'),
(641, 23, 3, 'Jogador', '250'),
(642, 23, 3, 'Jogador', '251'),
(643, 41, 3, 'Jogador', '276'),
(644, 41, 3, 'Jogador', '280'),
(645, 41, 3, 'Jogador', '292'),
(646, 41, 3, 'Jogador', '308'),
(647, 41, 3, 'Jogador', '311'),
(648, 41, 3, 'Jogador', '312'),
(649, 41, 3, 'Jogador', '316'),
(650, 41, 3, 'Jogador', '318'),
(651, 41, 3, 'Jogador', '319'),
(652, 41, 3, 'Jogador', '323'),
(653, 41, 3, 'Jogador', '325'),
(654, 23, 4, 'Jogador', '338'),
(655, 23, 3, 'Jogador', '341'),
(656, 41, 4, 'Jogador', '331'),
(657, 41, 3, 'Jogador', '329'),
(658, 41, 4, 'Jogador', '270'),
(659, 41, 3, 'Jogador', '221'),
(660, 41, 3, 'Jogador', '228'),
(661, 41, 3, 'Jogador', '273'),
(662, 41, 3, 'Jogador', '281'),
(663, 41, 3, 'Jogador', '283'),
(664, 41, 3, 'Jogador', '294'),
(665, 41, 3, 'Jogador', '302'),
(666, 41, 3, 'Jogador', '304'),
(667, 41, 3, 'Jogador', '307'),
(668, 41, 3, 'Jogador', '309'),
(669, 41, 3, 'Jogador', '310'),
(670, 41, 3, 'Jogador', '313'),
(671, 41, 3, 'Jogador', '314'),
(672, 41, 3, 'Jogador', '315'),
(673, 41, 3, 'Jogador', '317'),
(674, 41, 3, 'Jogador', '320'),
(675, 41, 3, 'Jogador', '321'),
(676, 41, 3, 'Jogador', '322'),
(677, 41, 3, 'Jogador', '324'),
(678, 41, 3, 'Jogador', '332'),
(679, 41, 3, 'Jogador', '333'),
(680, 41, 3, 'Jogador', '334'),
(681, 41, 3, 'Jogador', '387'),
(682, 41, 3, 'Jogador', '391'),
(683, 41, 3, 'Jogador', '393'),
(684, 41, 3, 'Jogador', '399'),
(685, 41, 3, 'Jogador', '455'),
(686, 41, 3, 'Jogador', '475'),
(687, 41, 3, 'Jogador', '476'),
(688, 41, 3, 'Jogador', '349'),
(689, 41, 3, 'Jogador', '350'),
(690, 41, 3, 'Jogador', '351'),
(691, 41, 4, 'Jogador', '354'),
(692, 41, 3, 'Jogador', '352'),
(693, 41, 3, 'Jogador', '353'),
(694, 41, 3, 'Jogador', '356'),
(695, 41, 3, 'Jogador', '357'),
(696, 41, 3, 'Jogador', '358'),
(697, 41, 3, 'Jogador', '359'),
(698, 23, 4, 'Jogador', '485'),
(699, 41, 3, 'Jogador', '360'),
(700, 41, 3, 'Jogador', '361'),
(701, 41, 3, 'Jogador', '362'),
(702, 41, 3, 'Jogador', '363'),
(703, 41, 3, 'Jogador', '364'),
(704, 41, 3, 'Jogador', '365'),
(705, 41, 3, 'Jogador', '366'),
(706, 41, 3, 'Jogador', '367'),
(707, 41, 3, 'Jogador', '368'),
(708, 41, 3, 'Jogador', '369'),
(709, 41, 3, 'Jogador', '371'),
(710, 41, 3, 'Jogador', '372'),
(711, 41, 3, 'Jogador', '373'),
(712, 41, 3, 'Jogador', '374'),
(713, 41, 3, 'Jogador', '375'),
(714, 41, 3, 'Jogador', '376'),
(715, 41, 3, 'Jogador', '378'),
(716, 41, 4, 'Jogador', '379'),
(717, 41, 3, 'Jogador', '380'),
(718, 41, 3, 'Jogador', '381'),
(719, 41, 4, 'Jogador', '470'),
(720, 41, 4, 'Jogador', '451'),
(721, 41, 4, 'Jogador', '457'),
(722, 20, 1, 'Jogador', '2018108102440170'),
(723, 11, 1, 'Jogador', '2017105100510085'),
(724, 28, 1, 'Jogador', '2017110091010200'),
(725, 11, 1, 'Jogador', '2018105100510397'),
(726, 28, 1, 'Jogador', '2019110091010252'),
(727, 11, 1, 'Jogador', '2018105131040368'),
(728, 11, 1, 'Jogador', '2018105131040368'),
(729, 11, 1, 'Jogador', '2017105131040311'),
(730, 11, 1, 'Jogador', '2018105131040368'),
(731, 11, 1, 'Jogador', '2018105131040368'),
(732, 11, 1, 'Jogador', '2018105131040368'),
(733, 11, 1, 'Jogador', '2018105100510397'),
(734, 11, 1, 'Jogador', '2018105100510397'),
(735, 11, 1, 'Jogador', '2018105100510397'),
(736, 11, 1, 'Jogador', '2017105100040085'),
(737, 11, 1, 'Jogador', '2018105131040155'),
(738, 11, 1, 'Jogador', '2018105131040155'),
(739, 11, 1, 'Jogador', '2018105131040155'),
(740, 11, 1, 'Jogador', '2018105131040155'),
(741, 11, 1, 'Jogador', '2018105131040155'),
(742, 11, 1, 'Jogador', ' 201910520024044'),
(743, 11, 1, 'Jogador', ' 201910520024044'),
(744, 11, 1, 'Jogador', '2018105131040155'),
(745, 11, 1, 'Jogador', '2018105131040155'),
(746, 11, 1, 'Jogador', '2018105131040155'),
(747, 11, 1, 'Jogador', '2018105131040155'),
(748, 11, 1, 'Jogador', '2018105131040155'),
(749, 11, 1, 'Jogador', '2018105131040155'),
(750, 11, 1, 'Jogador', '2018105131040155'),
(751, 11, 1, 'Jogador', '2018105131040155'),
(752, 4, 1, 'Jogo', '8'),
(753, 4, 1, 'Jogo', '7'),
(754, 0, 1, 'Jogador', '2017110051010315'),
(755, 28, 1, 'Jogador', '2018110051010418'),
(756, 28, 1, 'Jogador', '2017110051010315'),
(757, 28, 1, 'Jogador', '2017110051010315'),
(758, 28, 1, 'Jogador', '2018110051010418'),
(759, 4, 1, 'Jogo', '3'),
(760, 4, 1, 'Jogo', '8'),
(761, 8, 2, 'Jogador', '2017101100511026'),
(762, 27, 1, 'Jogador', '2019101202440064'),
(763, 4, 3, 'Jogador', '444'),
(764, 27, 1, 'Jogador', '2019101200240149'),
(765, 27, 1, 'Jogador', '2017101100510984'),
(766, 8, 1, 'Jogador', '2017101100510984'),
(767, 20, 1, 'Jogador', '2019108102440043'),
(768, 23, 3, 'Jogador', '270'),
(769, 23, 3, 'Jogador', '317'),
(770, 23, 3, 'Jogador', '169'),
(771, 23, 3, 'Jogador', '175'),
(772, 23, 3, 'Jogador', '206'),
(773, 23, 3, 'Jogador', '207'),
(774, 23, 3, 'Jogador', '123'),
(775, 23, 3, 'Jogador', '138'),
(776, 23, 3, 'Jogador', '141'),
(777, 23, 3, 'Jogador', '144'),
(778, 23, 3, 'Jogador', '338'),
(779, 23, 4, 'Jogador', '331'),
(780, 23, 4, 'Jogador', '493'),
(781, 23, 3, 'Jogador', '506'),
(782, 23, 3, 'Jogador', '508'),
(783, 23, 3, 'Jogador', '509'),
(784, 23, 3, 'Jogador', '510'),
(785, 23, 3, 'Jogador', '511'),
(786, 23, 4, 'Jogador', '507'),
(787, 23, 4, 'Jogador', '498'),
(788, 23, 4, 'Jogador', '484'),
(789, 23, 4, 'Jogador', '490'),
(790, 23, 4, 'Jogador', '495'),
(791, 23, 4, 'Jogador', '492'),
(792, 11, 1, 'Jogador', '2017105100040085'),
(793, 23, 3, 'Jogador', '377'),
(794, 23, 3, 'Jogador', '486'),
(795, 23, 3, 'Jogador', '487'),
(796, 23, 3, 'Jogador', '488'),
(797, 23, 3, 'Jogador', '489'),
(798, 23, 3, 'Jogador', '491'),
(799, 23, 4, 'Jogador', '494'),
(800, 23, 3, 'Jogador', '496'),
(801, 23, 3, 'Jogador', '497'),
(802, 23, 3, 'Jogador', '499'),
(803, 23, 4, 'Jogador', '500'),
(804, 23, 3, 'Jogador', '501'),
(805, 23, 3, 'Jogador', '502'),
(806, 23, 3, 'Jogador', '503'),
(807, 23, 3, 'Jogador', '504'),
(808, 23, 3, 'Jogador', '505'),
(809, 23, 4, 'Jogador', '331'),
(810, 1, 2, 'Jogador', '2019101100910029'),
(811, 38, 1, 'Jogador', '2018102200840475'),
(812, 38, 1, 'Jogador', '2018102200840475'),
(813, 38, 1, 'Jogador', '2018102200840475'),
(814, 38, 1, 'Jogador', '2019102200240120'),
(815, 38, 1, 'Jogador', '2019102200240120'),
(816, 38, 1, 'Jogador', '2019102200240120'),
(817, 23, 3, 'Jogador', '354'),
(818, 23, 3, 'Jogador', '379'),
(819, 42, 1, 'Servidor', 'diego.martins@ifgoiano.edu.br'),
(820, 37, 3, 'Jogador', '451'),
(821, 37, 3, 'Jogador', '482'),
(822, 37, 3, 'Jogador', '512'),
(823, 37, 3, 'Jogador', '513'),
(824, 37, 3, 'Jogador', '514'),
(825, 4, 2, 'Jogador', ' 20171031005109'),
(826, 15, 1, 'Jogador', ' 201710310051092'),
(827, 21, 1, 'Jogador', '2019101221230118'),
(828, 21, 1, 'Jogador', '2019101200240351'),
(829, 4, 1, 'Jogo', '10'),
(830, 21, 1, 'Jogador', '2019101221230118'),
(831, 23, 3, 'Jogador', '457'),
(832, 23, 3, 'Jogador', '466'),
(833, 23, 4, 'Jogador', '515'),
(834, 21, 1, 'Jogador', '2018101100910287'),
(835, 23, 3, 'Jogador', '472'),
(836, 4, 1, 'JogoIndividual', '2'),
(837, 4, 1, 'JogoIndividual', '14'),
(838, 4, 1, 'JogoIndividual', '13'),
(839, 4, 1, 'JogoIndividual', '7'),
(840, 4, 1, 'JogoIndividual', '12'),
(841, 4, 1, 'JogoIndividual', '8'),
(842, 8, 2, 'Jogador', '2017101201010022'),
(843, 8, 2, 'Jogador', '2019101100510217'),
(844, 8, 2, 'Jogador', '2019101202010248'),
(845, 8, 2, 'Jogador', '2018101100910473'),
(846, 8, 2, 'Jogador', '2019101100511205'),
(847, 8, 2, 'Jogador', '2018201110510121'),
(848, 21, 1, 'Jogador', '2018101100510793'),
(849, 23, 3, 'Jogador', '470'),
(850, 20, 1, 'Jogador', '2019108102540064'),
(851, 20, 1, 'Jogador', '2019108102540064'),
(852, 20, 1, 'Jogador', '2018108102440331'),
(853, 20, 1, 'Jogador', '2019108102440043'),
(854, 20, 1, 'Jogador', '2019108202640303'),
(855, 20, 1, 'Jogador', '2017108102540144'),
(856, 4, 3, 'Jogador', '221'),
(857, 4, 3, 'Jogador', '281'),
(858, 4, 3, 'Jogador', '315'),
(859, 4, 3, 'Jogador', '317'),
(860, 4, 3, 'Jogador', '320'),
(861, 4, 3, 'Jogador', '516'),
(862, 15, 1, 'Jogador', ' 201710310051092'),
(863, 15, 1, 'Jogador', ' 201710310051092'),
(864, 15, 1, 'Jogador', ' 201710310051092'),
(865, 15, 1, 'Jogador', ' 201710310051092'),
(866, 15, 1, 'Jogador', '2017103100510972'),
(867, 15, 1, 'Jogador', ' 201710310051092'),
(868, 15, 1, 'Jogador', '2017103100510921'),
(869, 33, 1, 'Jogador', '2019107051010162'),
(870, 33, 1, 'Jogador', '2017207051110340'),
(871, 33, 1, 'Jogador', '2018107200240088'),
(872, 33, 1, 'Jogador', '2019107200240113'),
(873, 33, 1, 'Jogador', '2019107102340091'),
(874, 33, 1, 'Jogador', '2018107051010060'),
(875, 33, 1, 'Jogador', '2018107051010132'),
(876, 33, 1, 'Jogador', '2019107051010162'),
(877, 33, 1, 'Jogador', '2019107051010162'),
(878, 33, 1, 'Jogador', '2018107200240088'),
(879, 33, 1, 'Jogador', '2018107051010132'),
(880, 33, 1, 'Jogador', '2019107102340016'),
(881, 33, 2, 'Jogador', '2019107051010030'),
(882, 33, 2, 'Jogador', '2019107200240318'),
(883, 33, 1, 'Jogador', '2019107200240407'),
(884, 33, 1, 'Jogador', '2019107051010243'),
(885, 33, 1, 'Jogador', '2019107200240393'),
(886, 33, 1, 'Jogador', '2019107200240040'),
(887, 33, 1, 'Jogador', '2017107051010170'),
(888, 33, 1, 'Jogador', '2019107200240172'),
(889, 33, 1, 'Jogador', '2018107051010337'),
(890, 33, 1, 'Jogador', '2019107200240032'),
(891, 33, 1, 'Jogador', '2017207021130408'),
(892, 37, 1, 'Jogador', '2018101100511420'),
(893, 33, 1, 'Jogador', '2018107051010353'),
(894, 33, 1, 'Jogador', '2019107200240334'),
(895, 33, 1, 'Jogador', '2018107051010370'),
(896, 33, 1, 'Jogador', '2017107051110042'),
(897, 33, 1, 'Jogador', '2017107051010340'),
(898, 33, 1, 'Jogador', '2016107051010395'),
(899, 33, 1, 'Jogador', '2017107051010196'),
(900, 37, 1, 'Jogador', '2019101100510918'),
(901, 33, 1, 'Jogador', '2019107102340210'),
(902, 37, 3, 'Jogador', '438'),
(903, 37, 3, 'Jogador', '460'),
(904, 37, 3, 'Jogador', '519'),
(905, 37, 3, 'Jogador', '520'),
(906, 37, 3, 'Jogador', '521'),
(907, 37, 3, 'Jogador', '522'),
(908, 37, 3, 'Jogador', '74'),
(909, 37, 3, 'Jogador', '515'),
(910, 37, 3, 'Jogador', '377'),
(911, 37, 4, 'Jogador', '484'),
(912, 37, 3, 'Jogador', '485'),
(913, 37, 3, 'Jogador', '486'),
(914, 37, 3, 'Jogador', '488'),
(915, 37, 3, 'Jogador', '489'),
(916, 37, 3, 'Jogador', '490'),
(917, 37, 3, 'Jogador', '493'),
(918, 37, 3, 'Jogador', '494'),
(919, 37, 3, 'Jogador', '496'),
(920, 37, 3, 'Jogador', '497'),
(921, 37, 3, 'Jogador', '498'),
(922, 37, 3, 'Jogador', '499'),
(923, 37, 3, 'Jogador', '500'),
(924, 37, 3, 'Jogador', '501'),
(925, 37, 3, 'Jogador', '502'),
(926, 37, 3, 'Jogador', '503'),
(927, 37, 3, 'Jogador', '504'),
(928, 37, 3, 'Jogador', '505'),
(929, 37, 3, 'Jogador', '506'),
(930, 37, 3, 'Jogador', '507'),
(931, 37, 3, 'Jogador', '508'),
(932, 37, 3, 'Jogador', '509'),
(933, 37, 3, 'Jogador', '510'),
(934, 37, 3, 'Jogador', '511'),
(935, 27, 2, 'Servidor', 'feu.nari155@gmail.com'),
(936, 1, 1, 'JogoIndividual', '13'),
(937, 1, 1, 'JogoIndividual', '7'),
(938, 1, 1, 'JogoIndividual', '8'),
(939, 1, 1, 'JogoIndividual', '12'),
(940, 4, 3, 'Jogador', '523'),
(941, 8, 2, 'Jogador', '2019101200640180'),
(942, 8, 2, 'Jogador', '2019101100910142'),
(943, 27, 1, 'Jogador', '2017101201010022'),
(944, 38, 1, 'Jogador', '2019102200840314'),
(945, 11, 1, 'Jogador', '2017105100040085'),
(946, 11, 2, 'Jogador', '2017105100040085'),
(947, 11, 1, 'Jogador', '2017105100040085'),
(948, 11, 1, 'Jogador', '2017105100040085'),
(949, 4, 3, 'Jogador', '524'),
(950, 37, 3, 'Jogador', '526'),
(951, 38, 1, 'Jogador', '2018102200240222'),
(952, 38, 1, 'Jogador', '2019102200840314'),
(953, 33, 1, 'Jogador', 'Jéssica Nivea Ma'),
(954, 33, 1, 'Jogador', '2019107051010162'),
(955, 33, 1, 'Jogador', '2019107200240393'),
(956, 0, 1, 'Jogador', '2019105100510252'),
(957, 4, 1, 'Jogo', '3'),
(958, 4, 1, 'Jogo', '8'),
(959, 4, 1, 'Jogo', '16'),
(960, 4, 1, 'Jogo', '25'),
(961, 4, 1, 'Jogo', '26'),
(962, 4, 1, 'Jogo', '66'),
(963, 4, 1, 'Jogo', '29'),
(964, 4, 1, 'Jogo', '17'),
(965, 4, 1, 'Jogo', '30'),
(966, 4, 1, 'Jogo', '23'),
(967, 4, 1, 'Jogo', '24'),
(968, 4, 1, 'Jogo', '44'),
(969, 4, 1, 'Jogo', '45'),
(970, 37, 3, 'Jogador', '329'),
(971, 37, 3, 'Jogador', '359'),
(972, 37, 3, 'Jogador', '361'),
(973, 37, 3, 'Jogador', '484'),
(974, 37, 3, 'Jogador', '491'),
(975, 37, 3, 'Jogador', '498'),
(976, 37, 3, 'Jogador', '527'),
(977, 51, 1, 'Jogador', '2018101100511420'),
(978, 51, 1, 'Jogador', '2018101100511420'),
(979, 51, 1, 'Jogador', '2018101100511005'),
(980, 51, 1, 'Jogador', '2010101100910320'),
(981, 50, 3, 'Jogador', '460'),
(982, 50, 3, 'Jogador', '530'),
(983, 50, 3, 'Jogador', '531'),
(984, 50, 3, 'Jogador', '534'),
(985, 1, 1, 'Jogador', '2019101100510918'),
(986, 1, 3, 'Jogador', '438'),
(987, 66, 2, 'Jogador', '2019120120101619'),
(988, 66, 1, 'Jogador', '2018101100511005'),
(989, 37, 3, 'Jogador', '534'),
(990, 66, 1, 'Servidor', 'daniel.marcal@ifgoiano.edu.br'),
(991, 66, 2, 'Jogador', '2018101100511005'),
(992, 66, 1, 'Jogador', '2018101100511005'),
(993, 50, 3, 'Jogador', '534'),
(994, 64, 1, 'Jogo', '4'),
(995, 68, 1, 'Jogo', '18'),
(996, 68, 1, 'Jogo', '38'),
(997, 68, 1, 'Jogo', '1'),
(998, 68, 1, 'Jogo', '16'),
(999, 68, 1, 'Jogo', '18'),
(1000, 68, 1, 'Jogo', '5'),
(1001, 68, 1, 'Jogo', '22'),
(1002, 68, 1, 'Jogo', '21'),
(1003, 68, 1, 'Jogo', '6'),
(1004, 68, 1, 'Jogo', '22'),
(1005, 68, 1, 'Jogo', '21'),
(1006, 68, 1, 'Jogo', '21'),
(1007, 64, 1, 'Jogo', '2'),
(1008, 64, 1, 'Jogo', '2'),
(1009, 64, 1, 'Jogo', '17'),
(1010, 64, 1, 'Jogo', '17'),
(1011, 64, 1, 'Jogo', '66'),
(1012, 64, 1, 'Jogo', '7'),
(1013, 64, 1, 'Jogo', '19'),
(1014, 64, 1, 'Jogo', '20'),
(1015, 64, 1, 'Jogo', '24'),
(1016, 64, 1, 'Jogo', '24'),
(1017, 33, 1, 'Jogador', '2019107102340210'),
(1018, 33, 1, 'Jogador', '2019107200240385'),
(1019, 50, 3, 'Jogador', '535'),
(1020, 64, 1, 'Jogo', '3'),
(1021, 64, 1, 'Jogo', '17'),
(1022, 64, 1, 'Jogo', '8'),
(1023, 64, 1, 'Jogo', '19'),
(1024, 64, 1, 'Jogo', '66'),
(1025, 64, 1, 'Jogo', '66'),
(1026, 64, 1, 'Jogo', '16'),
(1027, 64, 1, 'Jogo', '16'),
(1028, 64, 1, 'Jogo', '25'),
(1029, 64, 1, 'Jogo', '27'),
(1030, 64, 1, 'Jogo', '46'),
(1031, 0, 1, 'Jogo', '26'),
(1032, 64, 1, 'Jogo', '17'),
(1033, 64, 1, 'Jogo', '12'),
(1034, 64, 1, 'Jogo', '33'),
(1035, 64, 1, 'Jogo', '11'),
(1036, 64, 1, 'Jogo', '33'),
(1037, 64, 1, 'Jogo', '34'),
(1038, 64, 1, 'Jogo', '20'),
(1039, 64, 1, 'Jogo', '28'),
(1040, 64, 1, 'Jogo', '66'),
(1041, 64, 1, 'Jogo', '20'),
(1042, 68, 1, 'Jogo', '29'),
(1043, 68, 1, 'Jogo', '23'),
(1044, 68, 1, 'Jogo', '48'),
(1045, 68, 1, 'Jogo', '23'),
(1046, 68, 1, 'Jogo', '49'),
(1047, 64, 1, 'Jogo', '18'),
(1048, 0, 1, 'Jogo', '19'),
(1049, 64, 1, 'Jogo', '30'),
(1050, 64, 1, 'Jogo', '47'),
(1051, 64, 1, 'Jogo', '48'),
(1052, 64, 1, 'Jogo', '49'),
(1053, 64, 1, 'Jogo', '37'),
(1054, 64, 1, 'Jogo', '35'),
(1055, 64, 1, 'Jogo', '36'),
(1056, 64, 1, 'Jogo', '10'),
(1057, 64, 1, 'Jogo', '9'),
(1058, 64, 1, 'Jogo', '41'),
(1059, 64, 1, 'Jogo', '42'),
(1060, 64, 1, 'Jogo', '40'),
(1061, 64, 1, 'Jogo', '39'),
(1062, 64, 1, 'Jogo', '32'),
(1063, 64, 1, 'Jogo', '31'),
(1064, 64, 1, 'Jogo', '20'),
(1065, 64, 1, 'Jogo', '26'),
(1066, 64, 1, 'Jogo', '26'),
(1067, 64, 1, 'Jogo', '28'),
(1068, 64, 1, 'Jogo', '47'),
(1069, 71, 1, 'Jogo', '22'),
(1070, 71, 1, 'Jogo', '27'),
(1071, 71, 1, 'Jogo', '28'),
(1072, 71, 1, 'Jogo', '45'),
(1073, 64, 1, 'Jogo', '17'),
(1074, 64, 1, 'Jogo', '44'),
(1075, 64, 1, 'Jogo', '21'),
(1076, 64, 1, 'Jogo', '45'),
(1077, 64, 1, 'Jogo', '33'),
(1078, 64, 1, 'Jogo', '36'),
(1079, 64, 1, 'Jogo', '46'),
(1080, 64, 1, 'Jogo', '37'),
(1081, 64, 1, 'Jogo', '34'),
(1082, 64, 1, 'Jogo', '43'),
(1083, 64, 1, 'Jogo', '35'),
(1084, 64, 1, 'Jogo', '38'),
(1085, 64, 1, 'Jogo', '47'),
(1086, 64, 1, 'Jogo', '48'),
(1087, 64, 1, 'Jogo', '49'),
(1088, 64, 1, 'Jogo', '31'),
(1089, 64, 1, 'Jogo', '39'),
(1090, 64, 1, 'Jogo', '40'),
(1091, 64, 1, 'Jogo', '32'),
(1092, 64, 1, 'Jogo', '47'),
(1093, 64, 1, 'Jogo', '33'),
(1094, 64, 1, 'Jogo', '41'),
(1095, 64, 1, 'Jogo', '42'),
(1096, 64, 1, 'Jogo', '55'),
(1097, 64, 1, 'Jogo', '61'),
(1098, 64, 1, 'Jogo', '61'),
(1099, 64, 1, 'Jogo', '54'),
(1100, 64, 1, 'Jogo', '62'),
(1101, 64, 1, 'Jogo', '61'),
(1102, 64, 1, 'Jogo', '54'),
(1103, 64, 1, 'Jogo', '52'),
(1104, 64, 1, 'Jogo', '56'),
(1105, 64, 1, 'Jogo', '57'),
(1106, 64, 1, 'Jogo', '62'),
(1107, 64, 1, 'Jogo', '55'),
(1108, 64, 1, 'Jogo', '58'),
(1109, 64, 1, 'Jogo', '63'),
(1110, 0, 1, 'Jogo', '53'),
(1111, 64, 1, 'Jogo', '8'),
(1112, 64, 1, 'Jogo', '6'),
(1113, 50, 3, 'Jogador', '491'),
(1114, 50, 3, 'Jogador', '493'),
(1115, 64, 1, 'Jogo', '21'),
(1116, 64, 1, 'Jogo', '42'),
(1117, 64, 1, 'Jogo', '64'),
(1118, 64, 1, 'Jogo', '65'),
(1119, 64, 1, 'Jogo', '51'),
(1120, 64, 1, 'Jogo', '56'),
(1121, 64, 1, 'Jogo', '51'),
(1122, 64, 1, 'Jogo', '56'),
(1123, 64, 1, 'Jogo', '50'),
(1124, 64, 1, 'Jogo', '57'),
(1125, 64, 1, 'Jogo', '59'),
(1126, 64, 1, 'Jogo', '59'),
(1127, 64, 1, 'Jogo', '64'),
(1128, 64, 1, 'Jogo', '6'),
(1129, 64, 1, 'Jogo', '1'),
(1130, 64, 1, 'Jogo', '16'),
(1131, 64, 1, 'Jogo', '55'),
(1132, 64, 1, 'Jogo', '23'),
(1133, 64, 1, 'Jogo', '43'),
(1134, 64, 1, 'Jogo', '65'),
(1135, 64, 1, 'Jogo', '58'),
(1136, 64, 1, 'Jogo', '59'),
(1137, 64, 1, 'Jogo', '63'),
(1138, 1, 1, 'Jogador', '2017101100910028');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade`
--

CREATE TABLE `modalidade` (
  `modalidade_id` int(11) NOT NULL,
  `mnome` varchar(40) NOT NULL,
  `msexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modalidade`
--

INSERT INTO `modalidade` (`modalidade_id`, `mnome`, `msexo`) VALUES
(19, 'Futsal', 'Feminino'),
(21, 'Handebol', 'Masculino'),
(22, 'Futsal', 'Masculino'),
(23, 'Vôlei', 'Masculino'),
(24, 'Vôlei', 'Feminino'),
(25, 'Natação', 'Masculino'),
(26, 'Natação', 'Feminino'),
(29, 'Tênis de Mesa', 'Masculino'),
(30, 'Tênis de Mesa', 'Feminino'),
(31, 'Basquete', 'Masculino'),
(32, 'Atletismo', 'Masculino'),
(33, 'Atletismo', 'Feminino'),
(34, 'Handebol', 'Feminino'),
(35, 'Futebol', 'Masculino'),
(36, 'Xadrez', 'Masculino'),
(37, 'Xadrez', 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizacao`
--

CREATE TABLE `organizacao` (
  `id` int(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `organizacao`
--

INSERT INTO `organizacao` (`id`, `cargo`, `responsavel`, `telefone`, `email`, `nome`) VALUES
(2, 'gernete', 'joao s', '(22) 32312-3126', 'luiz22@gmail.com', 'luiz'),
(4, 'gernete', 'cris', '(66) 66666-6666', '66@gmail.com', 'user66');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE `resultado` (
  `id` int(11) NOT NULL,
  `modalidade` int(11) NOT NULL,
  `campus` int(11) NOT NULL,
  `chave` varchar(10) DEFAULT NULL,
  `jogos` int(11) DEFAULT NULL,
  `vitoria` int(11) DEFAULT NULL,
  `empate` int(11) DEFAULT NULL,
  `derrota` int(11) DEFAULT NULL,
  `pontos` int(11) DEFAULT NULL,
  `gol_favor` int(11) DEFAULT NULL,
  `gol_contra` int(11) DEFAULT NULL,
  `gol_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `resultado`
--

INSERT INTO `resultado` (`id`, `modalidade`, `campus`, `chave`, `jogos`, `vitoria`, `empate`, `derrota`, `pontos`, `gol_favor`, `gol_contra`, `gol_total`) VALUES
(12, 19, 22, 'A', 2, 0, 0, 2, 0, 8, 11, -3),
(13, 19, 11, 'B', 3, 2, 0, 1, 6, 12, 6, 6),
(14, 19, 100, 'B', 3, 0, 0, 3, 0, 0, 18, -18),
(15, 19, 15, 'A', 2, 1, 0, 1, 3, 3, 12, -9),
(16, 24, 8, 'A', 2, 1, 0, 1, 1, 2, 2, 0),
(18, 24, 22, 'A', 2, 2, 0, 0, 2, 4, 0, 4),
(19, 24, 103, 'B', 2, 2, 0, 0, 2, 4, 2, 2),
(20, 24, 9, 'B', 2, 1, 0, 1, 1, 3, 3, 0),
(21, 24, 11, 'A', 2, 0, 0, 2, 0, 0, 2, -2),
(22, 24, 101, 'B', 2, 0, 0, 2, 0, 2, 4, -2),
(23, 35, 15, 'ÚNICO', 2, 0, 0, 2, 0, 0, 7, -7),
(24, 35, 101, 'ÚNICO', 2, 0, 0, 2, 0, 1, 8, -7),
(25, 35, 8, 'ÚNICO', 2, 2, 0, 0, 6, 8, 0, 8),
(26, 35, 100, 'ÚNICO', 2, 2, 0, 0, 6, 7, 1, 6),
(27, 21, 15, 'ÚNICO', 3, 0, 0, 2, 0, 12, 54, -42),
(28, 21, 9, 'ÚNICO', 3, 2, 0, 0, 2, 54, 12, 42),
(30, 31, 9, 'ÚNICO', 2, 0, 0, 2, 0, 27, 55, -28),
(31, 31, 15, 'ÚNICO', 2, 2, 0, 0, 2, 40, 31, 9),
(32, 31, 8, 'ÚNICO', 2, 2, 0, 0, 2, 76, 31, 45),
(34, 31, 22, 'ÚNICO', 2, 0, 0, 2, 0, 35, 61, -26),
(35, 22, 8, 'A', 2, 2, 0, 0, 6, 18, 3, 15),
(38, 22, 9, 'B', 3, 3, 0, 0, 9, 15, 3, 12),
(39, 22, 103, 'B', 3, 2, 0, 1, 6, 8, 6, 2),
(40, 22, 12, 'A', 2, 1, 0, 1, 3, 6, 11, -5),
(42, 22, 22, 'B', 3, 0, 0, 3, 0, 3, 10, -7),
(43, 22, 104, 'C', 3, 2, 0, 1, 6, 4, 4, 0),
(45, 22, 105, 'C', 3, 1, 0, 2, 3, 4, 9, -5),
(46, 22, 100, 'A', 2, 0, 0, 2, 0, 3, 13, -10),
(47, 22, 15, 'C', 3, 0, 0, 3, 0, 0, 3, -3),
(48, 22, 11, 'B', 3, 1, 0, 2, 3, 5, 12, -7),
(49, 22, 101, 'C', 3, 3, 0, 0, 9, 11, 3, 8),
(50, 19, 8, 'A', 2, 2, 0, 0, 6, 18, 6, 12),
(51, 19, 9, 'B', 3, 2, 0, 1, 6, 14, 4, 10),
(52, 19, 101, 'B', 3, 2, 0, 1, 6, 10, 8, 2),
(53, 23, 9, 'Único', 2, 2, 0, 0, 2, 4, 0, 4),
(54, 23, 101, 'Único', 2, 0, 0, 2, 0, 0, 4, -4),
(55, 23, 8, 'Único', 2, 2, 0, 0, 2, 4, 0, 4),
(56, 23, 22, 'Único', 2, 0, 0, 2, 0, 0, 4, -4),
(59, 34, 12, 'Único', 2, 2, 0, 0, 2, 13, 9, 4),
(60, 34, 15, 'Único', 2, 0, 0, 2, 0, 9, 13, -4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado_individual`
--

CREATE TABLE `resultado_individual` (
  `id` int(11) NOT NULL,
  `modalidade` int(11) NOT NULL,
  `arquivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `resultado_individual`
--

INSERT INTO `resultado_individual` (`id`, `modalidade`, `arquivo`) VALUES
(4, 36, 'JIF Goiano Xadrez MasculinoClassificação Final.pdf'),
(5, 37, 'JIF Goiano xadrez Feminino 2019_Classificação_Final..pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servidor`
--

CREATE TABLE `servidor` (
  `servidor_id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `campus` int(11) NOT NULL,
  `funcao` varchar(30) NOT NULL,
  `img` varchar(5) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefones`
--

CREATE TABLE `telefones` (
  `id` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `instituicao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telefones`
--

INSERT INTO `telefones` (`id`, `numero`, `instituicao`) VALUES
(1, '(42) 34233-2433', 'taxiI'),
(3, '(42) 34233-2436', 'uber');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transporte`
--

CREATE TABLE `transporte` (
  `id` int(11) NOT NULL,
  `numero_linha` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `regiao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `transporte`
--

INSERT INTO `transporte` (`id`, `numero_linha`, `telefone`, `regiao`) VALUES
(1, 'NÂ° 34', '(34) 32423-4234', 'centro'),
(2, 'NÂ° 334', '(32) 34342-3434', 'ola'),
(4, 'NÂ° 24234', '(34) 32342-3423', 'efe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turismo`
--

CREATE TABLE `turismo` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `hora` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turismo`
--

INSERT INTO `turismo` (`id`, `data`, `hora`, `local`, `nome`) VALUES
(2, '2019-10-08', '2312', 'cinema', 'cienma'),
(4, '2019-10-02', '12:34', 'shopping', 'cinema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT 0,
  `img` varchar(5) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `status` int(11) DEFAULT 0,
  `campus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `senha`, `nivel`, `img`, `nome`, `status`, `campus`) VALUES
(1, 'admin', '$2y$12$k/M5jqzeQjy6YOnWjA/k5OrjrANKW5QVwAjhUXYskctX7wICzOL56', 1, 'png', 'Administrador', 1, 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`campus_id`);

--
-- Índices para tabela `chamada`
--
ALTER TABLE `chamada`
  ADD PRIMARY KEY (`chamada_id`);

--
-- Índices para tabela `comunicado`
--
ALTER TABLE `comunicado`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `coordenadores_modalidades`
--
ALTER TABLE `coordenadores_modalidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`etapa_id`);

--
-- Índices para tabela `hospitais`
--
ALTER TABLE `hospitais`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `campus` (`campus`),
  ADD KEY `modalidade` (`modalidade`);

--
-- Índices para tabela `jogador_chamada`
--
ALTER TABLE `jogador_chamada`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `jogador_modalidade`
--
ALTER TABLE `jogador_modalidade`
  ADD PRIMARY KEY (`jogador_modalidade_id`);

--
-- Índices para tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`jogo_id`),
  ADD KEY `modalidade` (`modalidade`),
  ADD KEY `etapa` (`etapa`),
  ADD KEY `time1` (`time1`),
  ADD KEY `time2` (`time2`),
  ADD KEY `local` (`local`);

--
-- Índices para tabela `jogoindividual`
--
ALTER TABLE `jogoindividual`
  ADD PRIMARY KEY (`individual_id`),
  ADD KEY `modalidade` (`modalidade`);

--
-- Índices para tabela `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`local_id`);

--
-- Índices para tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Índices para tabela `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`modalidade_id`);

--
-- Índices para tabela `organizacao`
--
ALTER TABLE `organizacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modalidade` (`modalidade`),
  ADD KEY `campus` (`campus`);

--
-- Índices para tabela `resultado_individual`
--
ALTER TABLE `resultado_individual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modalidade` (`modalidade`);

--
-- Índices para tabela `servidor`
--
ALTER TABLE `servidor`
  ADD PRIMARY KEY (`servidor_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `campus` (`campus`);

--
-- Índices para tabela `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turismo`
--
ALTER TABLE `turismo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `campus` (`campus`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `campus`
--
ALTER TABLE `campus`
  MODIFY `campus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de tabela `chamada`
--
ALTER TABLE `chamada`
  MODIFY `chamada_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `comunicado`
--
ALTER TABLE `comunicado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `coordenadores_modalidades`
--
ALTER TABLE `coordenadores_modalidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `etapa`
--
ALTER TABLE `etapa`
  MODIFY `etapa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `hospitais`
--
ALTER TABLE `hospitais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `jogador`
--
ALTER TABLE `jogador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=536;

--
-- AUTO_INCREMENT de tabela `jogador_chamada`
--
ALTER TABLE `jogador_chamada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;

--
-- AUTO_INCREMENT de tabela `jogador_modalidade`
--
ALTER TABLE `jogador_modalidade`
  MODIFY `jogador_modalidade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=744;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `jogo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `jogoindividual`
--
ALTER TABLE `jogoindividual`
  MODIFY `individual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `local`
--
ALTER TABLE `local`
  MODIFY `local_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1139;

--
-- AUTO_INCREMENT de tabela `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `modalidade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `organizacao`
--
ALTER TABLE `organizacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `resultado_individual`
--
ALTER TABLE `resultado_individual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `servidor`
--
ALTER TABLE `servidor`
  MODIFY `servidor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de tabela `telefones`
--
ALTER TABLE `telefones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `turismo`
--
ALTER TABLE `turismo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `jogador`
--
ALTER TABLE `jogador`
  ADD CONSTRAINT `jogador_ibfk_1` FOREIGN KEY (`campus`) REFERENCES `campus` (`campus_id`),
  ADD CONSTRAINT `jogador_ibfk_2` FOREIGN KEY (`modalidade`) REFERENCES `modalidade` (`modalidade_id`);

--
-- Limitadores para a tabela `jogo`
--
ALTER TABLE `jogo`
  ADD CONSTRAINT `jogo_ibfk_1` FOREIGN KEY (`modalidade`) REFERENCES `modalidade` (`modalidade_id`),
  ADD CONSTRAINT `jogo_ibfk_2` FOREIGN KEY (`etapa`) REFERENCES `etapa` (`etapa_id`),
  ADD CONSTRAINT `jogo_ibfk_3` FOREIGN KEY (`time1`) REFERENCES `campus` (`campus_id`),
  ADD CONSTRAINT `jogo_ibfk_4` FOREIGN KEY (`time2`) REFERENCES `campus` (`campus_id`),
  ADD CONSTRAINT `jogo_ibfk_5` FOREIGN KEY (`local`) REFERENCES `local` (`local_id`);

--
-- Limitadores para a tabela `jogoindividual`
--
ALTER TABLE `jogoindividual`
  ADD CONSTRAINT `jogoindividual_ibfk_1` FOREIGN KEY (`modalidade`) REFERENCES `modalidade` (`modalidade_id`);

--
-- Limitadores para a tabela `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `resultado_ibfk_1` FOREIGN KEY (`modalidade`) REFERENCES `modalidade` (`modalidade_id`),
  ADD CONSTRAINT `resultado_ibfk_2` FOREIGN KEY (`campus`) REFERENCES `campus` (`campus_id`);

--
-- Limitadores para a tabela `resultado_individual`
--
ALTER TABLE `resultado_individual`
  ADD CONSTRAINT `resultado_individual_ibfk_1` FOREIGN KEY (`modalidade`) REFERENCES `modalidade` (`modalidade_id`);

--
-- Limitadores para a tabela `servidor`
--
ALTER TABLE `servidor`
  ADD CONSTRAINT `servidor_ibfk_1` FOREIGN KEY (`campus`) REFERENCES `campus` (`campus_id`);

--
-- Limitadores para a tabela `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`campus`) REFERENCES `campus` (`campus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
