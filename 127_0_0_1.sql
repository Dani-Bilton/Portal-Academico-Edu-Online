-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2022 às 23:18
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_final`
--
CREATE DATABASE IF NOT EXISTS `bd_final` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_final`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `nome` varchar(15) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `id_chat_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id_chat`, `nome`, `mensagem`, `id_chat_curso`) VALUES
(1, 'JJaime', 'Ola queridos alunos eu sou o professor de CCTV.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `descricao` varchar(20) DEFAULT NULL,
  `carga` int(11) DEFAULT NULL,
  `id_cur_professor` int(11) DEFAULT NULL,
  `Inicio` varchar(30) DEFAULT NULL,
  `Fim` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `descricao`, `carga`, `id_cur_professor`, `Inicio`, `Fim`) VALUES
(2, 'Redes', 48, NULL, '2022-05-19', '2022-05-20'),
(4, 'Programação Web', 35, NULL, '2022-06-15', '2022-05-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `bi_professor` varchar(15) DEFAULT NULL,
  `nome_professor` varchar(30) DEFAULT NULL,
  `data_nascimento` varchar(15) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `genero` varchar(15) DEFAULT NULL,
  `morada` varchar(30) DEFAULT NULL,
  `grau` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL,
  `descricao` varchar(15) DEFAULT NULL,
  `data_desponibilidade` varchar(15) DEFAULT NULL,
  `data_expiracao` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `arquivo` varchar(40) DEFAULT NULL,
  `id_prog_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `programa`
--

INSERT INTO `programa` (`id_programa`, `descricao`, `data_desponibilidade`, `data_expiracao`, `status`, `arquivo`, `id_prog_curso`) VALUES
(1, 'Aula 1', '22-05-2022', '22-06-2022', NULL, NULL, 2),
(2, 'Aula 2', '2022-05-22', '2022-06-23', NULL, '', NULL),
(4, 'Aula 4', '2022-05-31', '2022-06-30', NULL, '', 2),
(5, 'Aula 4.1', '2022-06-05', '2022-06-12', NULL, '3abc7617abd66313a4a58c25c46d213a', 2),
(6, 'Elaborar TCC', '2022-05-22', '2022-06-05', NULL, 'ca9fd5390e80f3d605b76d3cc3c68a7e', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id_teste` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `contacto` int(11) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `data1` varchar(15) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `morada` varchar(45) NOT NULL,
  `email` varchar(20) NOT NULL,
  `arquivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id_teste`, `nome`, `contacto`, `sexo`, `data1`, `cidade`, `morada`, `email`, `arquivo`) VALUES
(1, 'Joaquim Moisés', 92516064, 'masculino', '1995-05-12', 'Uige', 'Bairro Gamek', 'joaquim@gmail.com', ''),
(5, 'Anacleta Luís', 993435678, 'Femenino', '1993-05-30', 'Luanda', 'Vila de Viana', 'anacleta@live.com', ''),
(7, 'Daniel da Conceição Chaves Luí', 92516064, 'masculino', '2022-05-26', 'Luanda', 'Bairro Prenda', 'danielchaves575@gmai', '99d0eefbea310faf4802b55bdd400498'),
(8, 'Aguinaldo', 932432523, 'masculino', '2022-05-27', 'Luanda', 'Bairro Prenda', 'jaime@gmail.com', '6dc7394649eef510c4ddf6183a74864b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `bi_usuario` varchar(40) DEFAULT NULL,
  `nome_completo` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `adm` int(11) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `data_nascimento` varchar(15) DEFAULT NULL,
  `genero` varchar(15) DEFAULT NULL,
  `morada` varchar(15) DEFAULT NULL,
  `grau` varchar(15) DEFAULT NULL,
  `id_curso_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `bi_usuario`, `nome_completo`, `email`, `senha`, `adm`, `contacto`, `data_nascimento`, `genero`, `morada`, `grau`, `id_curso_usuario`) VALUES
(2, '003887888LA035', 'Daniel Chaves', 'danielchaves575@gmail.com', '1234', 1, 942145345, '12-06-1996', 'masculino', 'Bairro Prenda', 'Licenciado', NULL),
(3, '00567865428LA033', 'Joaquim Jaime', 'jaime@gmail.com', '1234', 0, 928316317, '1993-05-24', 'masculino', 'Morro Bento', 'Licenciado', 2),
(4, '00567865428LA033', 'Dulce Valentin', 'dulce@gmail.com', '1234', 2, 923145098, '23-05-2022', 'femenino', 'Gamek', NULL, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_chat_curso` (`id_chat_curso`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_cur_professor` (`id_cur_professor`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Índices para tabela `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`),
  ADD KEY `id_prog_curso` (`id_prog_curso`);

--
-- Índices para tabela `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id_teste`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_curso_usuario` (`id_curso_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `programa`
--
ALTER TABLE `programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `teste`
--
ALTER TABLE `teste`
  MODIFY `id_teste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_chat_curso`) REFERENCES `curso` (`id_curso`);

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`id_cur_professor`) REFERENCES `professor` (`id_professor`);

--
-- Limitadores para a tabela `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`id_prog_curso`) REFERENCES `curso` (`id_curso`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_curso_usuario`) REFERENCES `curso` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
