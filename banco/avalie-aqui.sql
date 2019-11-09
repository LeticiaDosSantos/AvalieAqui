-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2019 às 14:57
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avalie-aqui`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `data_hora` datetime(6) NOT NULL,
  `nota_comida` int(100) NOT NULL,
  `usuario_id_user` int(11) NOT NULL,
  `restaurante_id_rest` int(80) NOT NULL,
  `nota_ambiente` int(100) NOT NULL,
  `nota_localizacao` int(100) NOT NULL,
  `nota_geral` int(100) NOT NULL,
  `nota_atendimento` int(100) NOT NULL,
  `titulo_comentario` varchar(100) NOT NULL,
  `comentario` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Acionadores `avaliacao`
--
DELIMITER $$
CREATE TRIGGER `avaliacao_AFTER_INSERT` AFTER INSERT ON `avaliacao` FOR EACH ROW BEGIN

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_rest` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `denuncia`
--

INSERT INTO `denuncia` (`id`, `titulo`,`descricao`, `id_rest`, `id_user`) VALUES
(2, 'dados errados', 'asasdakjskjjsjskdjfd', 23, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurante`
--

CREATE TABLE `restaurante` (
  `id_rest` int(80) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `horario_funcionamento` char(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(100) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `usuario_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `restaurante`
--

INSERT INTO `restaurante` (`id_rest`, `nome`, `descricao`, `telefone`, `horario_funcionamento`, `estado`, `endereco`, `numero`, `cidade`, `usuario_id_user`) VALUES
(1, 'Madero Steak House', 'O hambuger do MADERO faz o mundo melhor.', '(47)3043-9100', 'segunda-feira à sábado 11:45–23:00 domingo e feriados 11:45–22:00', 'SC', 'Av. Rolf Wiest, Bom Retiro', 337, 'Água Doce', 4),
(2, 'Virado no Alho', 'Comida deliciosa, equipe sempre simpática e o chef vem ás mesas cumprimentar. É um favorito na cidade. Sagú sempre bom!', '3426-0045', 'de terça-feira a sabado, das 11:30 as 14:00 e 18:00 as 00:00, domingo e segunda somente das 11:30 as', 'sc', 'R. Simão Kruger', 50, '0', 0),
(11, 'Santa Mistura', 'Restaurante super caro', '34443444', '', 'SC', 'Rua Otto Boehm', 648, 'Joinville', 0),
(19, 'La Cecília Cantina & Café', 'FAIXA DE PREÇO R$ 33 - R$ 148 COZINHAS Italiana, Café, Mediterrânea, Brasileira, Sul-americana REFEIÇÕES Café da manhã, Almoço, Drinks', '+55 41 3071-0369', 'seg-qui 11:00–00:00 sex-sáb 11:00–01:00 dom 11:00–17:00', 'PR', 'Avenida Senador Souza Naves, Curitiba, Paraná 80045-060 Brasil', 61, 'Curitiba', 0),
(20, 'Il Sogno di mamma Nunzia', 'Il Sogno di Mamma Nunzia é O Restaurante italiano localizado no centro histórico de Curitiba, em uma casa centenária que tem uma das mais lindas decorações da cidade. Ambiente tranquilo e agradável, com pratos focados na excelência da tradição da Itália, se orgulha de servir entradas, pasta, carnes ', '4130495501', 'Seg - Sáb 12:00 - 14:30 19:00 - 23:00', 'PR', 'Avenida Jaime Reis, São Francisco, Curitiba, Paraná 80510-010 Brasil', 216, 'Curitiba', 0),
(21, 'Izakaya Tanuki', 'Nós somos um tradicional Izakaya japonês (casa de Saquê). Nosso objetivo é trazer, para Curitiba e região, a experiência de estar em um verdadeiro Izakaya.', '+55 41 3503-5526', 'Seg - Qui 18:00 - 23:00 Seg - Sex 11:30 - 14:00 Sex - Sáb 18:00 - 23:30 Sáb - Dom 11:30 - 15:00', 'PR', 'Avenida dos Estados, Curitiba, Paraná 80610-040 Brasil', 853, 'Curitiba', 0),
(22, 'Guacamole Cocina Mexicana', 'Reservas, Mesas ao ar livre, Lugares para sentar, Cadeiras para bebês, Serve bebida alcoólica, Bar completo, Vinho e cerveja, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa', '+55 51 3026-5054', 'Dom - Sáb 19:00 - 00:00', 'RS', ' Avenida Doutor Nilo Pecanha, Porto Alegre, Rio Grande do Sul 90470-000 Brasil', 450, 'Porto Alegre', 0),
(23, 'La Rouge Bistrô', 'O espaço gastronômico mais inovador de Porto Alegre. Culinária ética, criativa, orgânica, saudável, sofisticada e deliciosa.', '+55 51 3019-7638', 'Ter - Sex 12:00 - 15:00 Qui 19:30 - 22:30 Sáb - Dom 12:00 - 16:00', 'RS', 'Avenida Mariland, Porto Alegre, Rio Grande do Sul 90440-191 Brasil', 1587, 'Porto Alegre', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurante_categoria`
--

CREATE TABLE `restaurante_categoria` (
  `id` int(11) NOT NULL,
  `id_restaurante` int(11) NOT NULL,
  `id_tipo_comida` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `restaurante_categoria`
--

INSERT INTO `restaurante_categoria` (`id`, `id_restaurante`, `id_tipo_comida`, `status`) VALUES
(1, 11, 3, NULL),
(2, 11, 4, NULL),
(12, 19, 3, NULL),
(13, 19, 5, NULL),
(14, 20, 3, NULL),
(15, 20, 11, NULL),
(16, 21, 1, NULL),
(17, 22, 4, NULL),
(18, 22, 6, NULL),
(19, 23, 2, NULL),
(20, 23, 3, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_comida`
--

CREATE TABLE `tipo_comida` (
  `id_comida` int(11) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `restaurante_id_rest` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_comida`
--

INSERT INTO `tipo_comida` (`id_comida`, `categoria`, `restaurante_id_rest`) VALUES
(1, 'Japonesa', 0),
(2, 'Hamburgueria', 0),
(3, 'Italiana', 0),
(4, 'Vegetariana', 0),
(5, 'Cafeteria', 0),
(6, 'Mexicana', 0),
(7, 'Brasileira', 0),
(8, 'Francesa', 0),
(9, 'Tailandesa', 0),
(10, 'Australiana', 0),
(11, 'Frutos do Mar', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_user`
--

CREATE TABLE `tipo_user` (
  `id_tip` int(80) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipo_user_id_tip` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome`, `sexo`, `dt_nascimento`, `email`, `senha`, `tipo_user_id_tip`) VALUES
(1, 'admin', '', '2019-05-13', 'admin@gmail.com', 'admin', 0),
(3, 'julia', 'Feminino', '2001-06-18', 'juh@gmail.com', 'julia', 0),
(6, 'Leticia dos Santos', 'F', '2001-12-21', 'leticiasantos00099@gmail.com', '', 0),
(9, 'Marcia', 'F', '1967-07-01', 'marcia@gmail.com', '', 0),
(15, 'Julian', 'M', '0000-00-00', 'juquinha@email.com', '', 0),
(25, 'lele', 'F', '2001-12-21', 'kekek@keke.com', '', 0),
(33, 'ana jula', 'F', '1996-03-25', 'anajulia@gmail.com', '', 0),
(37, 'Juliano', 'M', '2006-03-25', 'juliano@juju.com', '', 0),
(38, 'Ágata', 'F', '2004-09-28', 'agata@email.com', '', 0),
(40, 'Robson', 'M', '1992-08-07', 'robson@gmail.com', '', 0),
(44, 'natalia', 'F', '1111-01-01', 'natinha@gmail.com', '', 0),
(46, 'karen', 'F', '1111-01-11', 'karen@gmail.com', '', 0),
(47, 'beth', 'F', '1111-01-01', 'beth@gmail.com', '', 0),
(48, 'luana', 'F', '1111-11-11', 'luana@gmail.com', '', 0),
(49, 'Luiza', 'F', '2000-10-25', 'luiza@gmail.com', 'luiza1', 0),
(50, 'Leticia dos Santos', 'F', '2001-12-21', 'leticia50@hotmail.com', 'supersenha', 0),
(51, 'Alicia', 'F', '1997-10-19', 'alicia@gmail.com', 'alicia123', 0),
(52, 'Alicia Reis', 'F', '1997-10-19', 'alicia_reis@gmail.com', 'alicia123', 0),
(53, 'Leticia dos Santos', 'F', '2221-02-21', 'le@le.com', '2222', 0),
(54, 'yunet', 'F', '1967-10-10', 'yunet@gmail.com', 'yunet', 0),
(55, 'saco', 'M', '2019-10-05', 'deus@socor.com', '2019', 0),
(56, 'ta', 'M', '2001-12-21', 'ta@ta.com', 'ta', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD KEY `fk_avaliacao_usuario1_idx` (`usuario_id_user`),
  ADD KEY `fk_avaliacao_restaurante1_idx` (`restaurante_id_rest`);

--
-- Indexes for table `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rest` (`id_rest`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`id_rest`),
  ADD KEY `fk_restaurante_usuario1_idx` (`usuario_id_user`);

--
-- Indexes for table `restaurante_categoria`
--
ALTER TABLE `restaurante_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_restaurante` (`id_restaurante`),
  ADD KEY `fk_tipo_comida` (`id_tipo_comida`);

--
-- Indexes for table `tipo_comida`
--
ALTER TABLE `tipo_comida`
  ADD PRIMARY KEY (`id_comida`),
  ADD KEY `fk_tipo_comida_restaurante1_idx` (`restaurante_id_rest`);

--
-- Indexes for table `tipo_user`
--
ALTER TABLE `tipo_user`
  ADD PRIMARY KEY (`id_tip`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_usuario_tipo_user1_idx` (`tipo_user_id_tip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `id_rest` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `restaurante_categoria`
--
ALTER TABLE `restaurante_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tipo_comida`
--
ALTER TABLE `tipo_comida`
  MODIFY `id_comida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tipo_user`
--
ALTER TABLE `tipo_user`
  MODIFY `id_tip` int(80) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `fk_avaliacao_restaurante1` FOREIGN KEY (`restaurante_id_rest`) REFERENCES `restaurante` (`id_rest`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_avaliacao_usuario1` FOREIGN KEY (`usuario_id_user`) REFERENCES `usuario` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `denuncia_ibfk_1` FOREIGN KEY (`id_rest`) REFERENCES `restaurante` (`id_rest`),
  ADD CONSTRAINT `denuncia_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`);

--
-- Limitadores para a tabela `restaurante_categoria`
--
ALTER TABLE `restaurante_categoria`
  ADD CONSTRAINT `fk_restaurante` FOREIGN KEY (`id_restaurante`) REFERENCES `restaurante` (`id_rest`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_tipo_comida` FOREIGN KEY (`id_tipo_comida`) REFERENCES `tipo_comida` (`id_comida`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
