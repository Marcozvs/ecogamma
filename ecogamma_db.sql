-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Jun-2022 às 20:56
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecogamma_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_noticia` date NOT NULL,
  `texto` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `data_noticia`, `texto`, `foto`) VALUES
(1, 'Amazonia', '0000-00-00', 'Inserindo amazonia', 'barra1.jpg'),
(2, 'Leandro destroi parque publico', '0000-00-00', '<style>background: red;</style>', 'barra2.jpg'),
(3, 'Mandanga joga lixo na rua', '0000-00-00', 'Suspeito jogou lixo na rua, mandar prender!!!', 'tela_madeira.PNG'),
(4, 'Gustavo ramela no fut ', '0000-00-00', 'Gustavo chora pra jogar o fute, depois fala que é bom', 'tela_metal.PNG'),
(5, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', ''),
(6, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(7, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(8, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(9, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(10, 'Mandanga joga lixo na rua', '0000-00-00', 'acsdcasdcadscasdc', ''),
(11, 'Mandanga joga lixo na rua', '2022-06-01', 'acsdcasdcadscasdc', ''),
(12, 'badfbvasdvcasdva', '0000-00-00', 'sdvasdvasdv', ''),
(13, 'Testantdoi', '2022-06-01', 'asdcasdcasdcsadcasd', ''),
(14, 'Mandanga joga lixo na rua', '2022-06-01', 'dcasdcasdcasdcasdca', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` tinyint(1) DEFAULT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `perfil` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `profissao` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
