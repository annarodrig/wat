-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Maio-2023 às 15:33
-- Versão do servidor: 8.0.29
-- versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_criterios_sucesso`
--

CREATE TABLE `tb_criterios_sucesso` (
  `cd_exemplo` int NOT NULL,
  `nm_exemplo` varchar(100) NOT NULL,
  `exemplo` longtext NOT NULL,
  `fk_cd_diretriz` int NOT NULL,
  `fk_cd_nivel` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tb_criterios_sucesso`
--

INSERT INTO `tb_criterios_sucesso` (`cd_exemplo`, `nm_exemplo`, `exemplo`, `fk_cd_diretriz`, `fk_cd_nivel`) VALUES
(2, 'Critério de Sucesso 1.1.1 Conteúdo Não Textual', 'Todo o conteúdo não textual que é exibido ao usuário tem uma alternativa textual que serve a um propósito equivalente. Alguns casos são execessos, sendo essas: Controles e Entrada: Se o conteúdo não textual for um controle ou aceitar a entrada de dados do usuário, então esse conteúdo não textual deve ter um nome que descreva sua funcionalidade. Mídias com base no tempo: Se o conteúdo não textual são vídeos, GIF\'s ou figurinhas, então as alternativas textuais devem fornecer uma legenda ou autodescrição. Teste e Sensorial: Se o conteúdo não textual for um exercicio ou um conteúdo que tem como finalidade promover uma experiência sensorial, então as alternativas textuais devem fornecem uma autodescrição.CAPTCHA: Se a finalidade do conteúdo não textual for confirmar que o conteúdo está sendo acessado por uma pessoa e não por um computador, então devem ser fornecidas alternativas textuais que identificam e descrevem a finalidade do conteúdo não textual. Formas alternativas de CAPTCHA, que utilizam modos de saída para diferentes tipos de percepção sensorial, devem ser apresentadas para atender diferentes deficiências. Decoração, Formatação, Invisível: Se o conteúdo não textual for meramente decorativo, se for utilizado apenas para formatação visual, ou se não for exibido aos usuários, então esse conteúdo não textual deve ser implementado de uma forma que possa ser ignorado pelas tecnologias assistivas. ', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_diretriz`
--

CREATE TABLE `tb_diretriz` (
  `cd_diretriz` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tb_diretriz`
--

INSERT INTO `tb_diretriz` (`cd_diretriz`, `nome`, `descricao`) VALUES
(1, 'Perceptível', 'As informações e os componentes da interface do usuário devem ser apresentados em formas que possam ser percebidas pelo usuário.'),
(2, 'Operável', 'Os componentes de interface de usuário e a navegação devem ser operáveis.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nivel`
--

CREATE TABLE `tb_nivel` (
  `cd_nivel` int NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `tb_nivel`
--

INSERT INTO `tb_nivel` (`cd_nivel`, `tipo`) VALUES
(1, 'Nível A'),
(2, 'Nível AA'),
(3, 'Nível AAA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_criterios_sucesso`
--
ALTER TABLE `tb_criterios_sucesso`
  ADD PRIMARY KEY (`cd_exemplo`),
  ADD KEY `fk_diretriz_has_nivel_nivel1_idx` (`fk_cd_nivel`),
  ADD KEY `fk_diretriz_has_nivel_diretriz_idx` (`fk_cd_diretriz`);

--
-- Índices para tabela `tb_diretriz`
--
ALTER TABLE `tb_diretriz`
  ADD PRIMARY KEY (`cd_diretriz`);

--
-- Índices para tabela `tb_nivel`
--
ALTER TABLE `tb_nivel`
  ADD PRIMARY KEY (`cd_nivel`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_criterios_sucesso`
--
ALTER TABLE `tb_criterios_sucesso`
  MODIFY `cd_exemplo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_diretriz`
--
ALTER TABLE `tb_diretriz`
  MODIFY `cd_diretriz` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_criterios_sucesso`
--
ALTER TABLE `tb_criterios_sucesso`
  ADD CONSTRAINT `fk_diretriz_has_nivel_diretriz` FOREIGN KEY (`fk_cd_diretriz`) REFERENCES `tb_diretriz` (`cd_diretriz`),
  ADD CONSTRAINT `fk_diretriz_has_nivel_nivel1` FOREIGN KEY (`fk_cd_nivel`) REFERENCES `tb_nivel` (`cd_nivel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
