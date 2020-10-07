-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Out-2020 às 23:41
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `facility`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `nome`, `cpf_cnpj`, `id_empresa`, `id_endereco`, `id_contato`) VALUES
(1, 'Samuel Goes', '000.000.000-99', 1, 4, 4),
(2, 'asddsadas', '11.111.111/2323-23', 1, 7, 7),
(3, 'TESTANDO 12', '00.000.000/0000-00', 2, 9, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE `tb_contato` (
  `id` int(11) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`id`, `celular`, `telefone`, `email`) VALUES
(1, '(87) 99927-8405', '', 'zoasitemas@gmail.com'),
(2, '(87) 99927-8405', '', 'inacio.ferrazpj@gmail.com'),
(3, '(87) 99946-7293', NULL, 'anaclara.gomespbr@gmail.com'),
(4, '(87) 98105-9601', '', 'samugoes@gmail.com'),
(5, '(55) 55555-5555', '(11) 1111-1111', 'sadasdas@gmail.com'),
(6, '(00) 00000-0000', '(11) 1111-1111', 'esdras@gmail.com'),
(7, '(88) 88888-8888', '(11) 1111-1111', 'sadasdas@gmail.com'),
(8, '(87) 99927-8405', '', 'zoawbrc@gmail.com'),
(9, '(87) 99999-9999', '', ''),
(10, '(10) 00000-0000', '', '(10) 00000-0000'),
(11, '(10) 00000-0000', '', '(10) 00000-0000'),
(12, '(10) 00000-0000', '', '(10) 00000-0000'),
(13, '(10) 00000-0000', '', '(10) 00000-0000'),
(14, '(10) 00000-0000', '', '(10) 00000-0000'),
(15, '(10) 00000-0000', '', '(10) 00000-0000'),
(16, '(10) 00000-0000', '', '(10) 00000-0000'),
(17, '(10) 00000-0000', '', '(10) 00000-0000'),
(18, '(10) 00000-0000', '', '(10) 00000-0000'),
(19, '(10) 00000-0000', '', '(10) 00000-0000'),
(20, '(10) 00000-0000', '', '(10) 00000-0000'),
(21, '(10) 00000-0000', '', '(10) 00000-0000'),
(22, '(10) 00000-0000', '', '(10) 00000-0000'),
(23, '(10) 00000-0000', '', '(10) 00000-0000'),
(24, '(10) 00000-0000', '', '(10) 00000-0000'),
(25, '(10) 00000-0000', '', '(10) 00000-0000'),
(26, '(10) 00000-0000', '', '(10) 00000-0000'),
(27, '(10) 00000-0000', '', '(10) 00000-0000'),
(28, '(10) 00000-0000', '', '(10) 00000-0000'),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, '', '', ''),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `id` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `situacao` int(11) NOT NULL,
  `dataContrato` date NOT NULL DEFAULT current_timestamp(),
  `isAdm` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_empresa`
--

INSERT INTO `tb_empresa` (`id`, `id_contato`, `id_endereco`, `cnpj`, `nome`, `usuario`, `senha`, `situacao`, `dataContrato`, `isAdm`) VALUES
(1, 1, 1, '00.000.000/0000-01', 'Zoa', 'zoa', '159756', 1, '2020-09-21', 1),
(2, 3, 3, '00.000.000/0000-02', 'Center Diesel Bom Jesus', 'center diesel', '123', 1, '2020-09-21', 0),
(3, 5, 5, '00.000.000/0000-00', 'Teste', 'teste', '123', 1, '2020-09-24', 0),
(4, 24, 19, '12.312.321/2312-31', 'FABIO XX', 'fabio', '123456789', 1, '2020-10-07', 0),
(5, 25, 20, '12.312.321/2312-31', 'FABIO XX', 'fabio', '123456789', 1, '2020-10-07', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE `tb_endereco` (
  `id` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_endereco`
--

INSERT INTO `tb_endereco` (`id`, `cep`, `endereco`, `numero`, `cidade`, `estado`, `pais`) VALUES
(1, '56912-100', 'Av. Manuel Alves de Carvalho Barros', '2506', 'Serra Talhada', 'PE', 'Brasil'),
(2, '56912-100', 'Av. Manuel Alves de Carvalho Barros', '2506', 'Serra Talhada', 'PE', 'Brasil'),
(3, '56906-000', 'Av. Vicente Inácio de Oliveira', '1591', 'Serra Talhada', 'PE', 'Brasil'),
(4, '56912-250', 'Rua Enock de Carvalho', '1270', 'Serra Talhada', 'PE', 'Brasil'),
(5, '55195-070', 'Rua Antônio Gonçalves de Lima', '00', 'Santa Cruz do Capibaribe', 'PE', 'brasil'),
(6, '56912-500', 'Rua Licácia Simonia de Souza', '123', 'Serra Talhada', 'PE', 'brasil'),
(7, '56912-400', 'Rua Tabelião Bernardino Carvalho de Magalhães', '00', 'Serra Talhada', 'PE', 'brasil'),
(8, '56912-100', 'Av. Manuel Alves de Carvalho Barros', '2506', 'Serra Talhada', 'PE', 'brasil'),
(9, '56912-140', 'Rua Irineu Alves Magalhães', '123', 'Serra Talhada', 'PE', 'brasil'),
(10, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '', 'Serra Talhada', 'PE', 'brasil'),
(11, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(12, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(13, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(14, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(15, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(16, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(17, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(18, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(19, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(20, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '1223122', 'Serra Talhada', 'PE', 'brasil'),
(21, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(22, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(23, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(24, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(25, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(26, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(27, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(28, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(29, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(30, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(31, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(32, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '21', 'Serra Talhada', 'PE', 'brasil'),
(33, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(34, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(35, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(36, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(37, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil'),
(38, '56912-100', 'Avenida Manoel Alves de Carvalho Barros', '(87) 99927-8405', 'Serra Talhada', 'PE', 'brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id`, `id_empresa`, `id_endereco`, `id_contato`, `nome`, `cpf`, `usuario`, `senha`, `situacao`) VALUES
(1, 1, 2, 2, 'Inácio Ferraz Pinto Júnior', '709.538.014-70', 'inacio', 'c77c7290d1784587619c3b37935b16cf', 1),
(2, 1, 6, 6, 'adsdsaads', '144.545.654-55', 'qqqqq', '202cb962ac59075b964b07152d234b70', 1),
(3, 2, 8, 8, 'Inácio Ferraz Pinto Júnior', '709.538.014-70', 'inacio f', 'c77c7290d1784587619c3b37935b16cf', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ordem_servico`
--

CREATE TABLE `tb_ordem_servico` (
  `id` int(11) NOT NULL,
  `num_os` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_ordem_servico`
--

INSERT INTO `tb_ordem_servico` (`id`, `num_os`, `id_cliente`, `id_funcionario`, `id_empresa`, `data_inicio`, `data_fim`, `valor_total`, `situacao`) VALUES
(1, 1, 1, 1, 1, '2020-09-23', '2020-09-23', '720.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id` int(11) NOT NULL,
  `id_ordem_servico` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_unidade` decimal(10,2) NOT NULL,
  `valorTotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id`, `id_ordem_servico`, `descricao`, `quantidade`, `valor_unidade`, `valorTotal`) VALUES
(1, 1, 'VALVULA REGULADORA DA GALERIA', 1, '420.00', '420.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servico`
--

CREATE TABLE `tb_servico` (
  `id` int(11) NOT NULL,
  `id_ordem_servico` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_servico`
--

INSERT INTO `tb_servico` (`id`, `id_ordem_servico`, `descricao`, `valor_total`) VALUES
(1, 1, 'MANUTENÇÃO DA BOMBA INJETORA', '300.00'),
(2, 1, 'MANUTENÇÃO CELULAR', '700.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ClienteContato` (`id_contato`),
  ADD KEY `fk_ClienteEndereco` (`id_endereco`),
  ADD KEY `fk_ClienteEmpresa` (`id_empresa`);

--
-- Índices para tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_EmpresaContato` (`id_contato`),
  ADD KEY `fk_EmpresaEndereco` (`id_endereco`);

--
-- Índices para tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_FuncionarioContato` (`id_contato`),
  ADD KEY `fk_FuncionarioEmpresa` (`id_empresa`),
  ADD KEY `fk_FuncionarioEndereco` (`id_endereco`);

--
-- Índices para tabela `tb_ordem_servico`
--
ALTER TABLE `tb_ordem_servico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_OSCliente` (`id_cliente`),
  ADD KEY `fk_OSFuncionario` (`id_funcionario`),
  ADD KEY `fk_OSEmpresa` (`id_empresa`);

--
-- Índices para tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produtoOrdemServico` (`id_ordem_servico`);

--
-- Índices para tabela `tb_servico`
--
ALTER TABLE `tb_servico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_servicoOrdemServico` (`id_ordem_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_endereco`
--
ALTER TABLE `tb_endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_ordem_servico`
--
ALTER TABLE `tb_ordem_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_servico`
--
ALTER TABLE `tb_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD CONSTRAINT `fk_ClienteContato` FOREIGN KEY (`id_contato`) REFERENCES `tb_contato` (`id`),
  ADD CONSTRAINT `fk_ClienteEmpresa` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id`),
  ADD CONSTRAINT `fk_ClienteEndereco` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id`);

--
-- Limitadores para a tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD CONSTRAINT `fk_EmpresaContato` FOREIGN KEY (`id_contato`) REFERENCES `tb_contato` (`id`),
  ADD CONSTRAINT `fk_EmpresaEndereco` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id`);

--
-- Limitadores para a tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD CONSTRAINT `fk_FuncionarioContato` FOREIGN KEY (`id_contato`) REFERENCES `tb_contato` (`id`),
  ADD CONSTRAINT `fk_FuncionarioEmpresa` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id`),
  ADD CONSTRAINT `fk_FuncionarioEndereco` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id`);

--
-- Limitadores para a tabela `tb_ordem_servico`
--
ALTER TABLE `tb_ordem_servico`
  ADD CONSTRAINT `fk_OSCliente` FOREIGN KEY (`id_cliente`) REFERENCES `tb_cliente` (`id`),
  ADD CONSTRAINT `fk_OSEmpresa` FOREIGN KEY (`id_empresa`) REFERENCES `tb_empresa` (`id`),
  ADD CONSTRAINT `fk_OSFuncionario` FOREIGN KEY (`id_funcionario`) REFERENCES `tb_funcionario` (`id`);

--
-- Limitadores para a tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `fk_produtoOrdemServico` FOREIGN KEY (`id_ordem_servico`) REFERENCES `tb_ordem_servico` (`id`);

--
-- Limitadores para a tabela `tb_servico`
--
ALTER TABLE `tb_servico`
  ADD CONSTRAINT `fk_servicoOrdemServico` FOREIGN KEY (`id_ordem_servico`) REFERENCES `tb_ordem_servico` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
