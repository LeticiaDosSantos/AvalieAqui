-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2019 às 15:47
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `avaliacos`
--

CREATE TABLE `avaliacos` (
  `id` int(11) NOT NULL,
  `qnt_estrela` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `id_rest_id` int(80) DEFAULT NULL,
  `id_user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avaliacos`
--

INSERT INTO `avaliacos` (`id`, `qnt_estrela`, `created`, `modified`, `id_rest_id`, `id_user_id`) VALUES
(1, 3, '2017-08-28 22:35:17', NULL, NULL, NULL),
(2, 5, '2017-08-28 22:35:35', NULL, NULL, NULL),
(3, 4, '2019-11-18 10:32:38', NULL, NULL, NULL),
(4, 1, '2019-11-18 10:38:32', NULL, NULL, NULL),
(5, 1, '2019-11-18 14:49:21', NULL, NULL, NULL),
(6, 4, '2019-11-19 15:55:00', NULL, NULL, NULL),
(7, 3, '2019-11-19 16:05:54', NULL, 21, 3),
(8, 4, '2019-11-19 16:25:43', NULL, 19, 3),
(9, 3, '2019-11-19 16:26:12', NULL, 19, 3),
(10, 3, '2019-11-22 13:57:43', NULL, 1, 3),
(11, 3, '2019-11-22 14:35:14', NULL, 1, 44),
(12, 2, '2019-11-22 14:36:00', NULL, 1, 44),
(13, 2, '2019-11-22 14:40:13', NULL, 20, 44),
(14, 3, '2019-11-22 14:56:20', NULL, 20, 46),
(15, 4, '2019-11-22 14:56:33', NULL, 20, 46),
(16, 2, '2019-11-25 11:07:27', NULL, 24, 44),
(17, 2, '2019-11-25 11:07:52', NULL, 24, 44),
(18, 4, '2019-11-25 11:08:06', NULL, 24, 44),
(19, 4, '2019-11-27 16:42:38', NULL, 1, 3),
(20, 5, '2019-11-27 16:45:46', NULL, 30, 3),
(21, 3, '2019-11-27 21:40:38', NULL, 31, 44),
(22, 2, '2019-11-28 10:51:48', NULL, 2, 3),
(23, 3, '2019-11-28 10:52:48', NULL, 2, 3),
(24, 4, '2019-11-28 10:53:35', NULL, 1, 3),
(25, 3, '2019-11-28 11:25:36', NULL, 34, 60),
(26, 4, '2019-11-28 11:26:20', NULL, 31, 60),
(27, 5, '2019-11-28 11:26:51', NULL, 31, 60),
(28, 1, '2019-11-28 11:28:43', NULL, 31, 60),
(29, 1, '2019-11-28 11:29:34', NULL, 31, 60),
(30, 3, '2019-11-28 11:32:36', NULL, 2, 60),
(31, 4, '2019-11-28 11:34:49', NULL, 2, 60),
(32, 5, '2019-11-28 11:36:46', NULL, 0, 60),
(33, 5, '2019-11-28 11:37:32', NULL, 2, 60),
(34, 1, '2019-11-28 11:38:06', NULL, 2, 60),
(35, 1, '2019-11-28 11:38:52', NULL, 2, 60),
(36, 1, '2019-11-28 11:39:29', NULL, 2, 60),
(37, 1, '2019-11-28 11:39:54', NULL, 2, 60),
(38, 2, '2019-11-28 11:45:44', NULL, 30, 60);

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

INSERT INTO `denuncia` (`id`, `titulo`, `descricao`, `id_rest`, `id_user`) VALUES
(1, 'hm', 'hm', 22, 3),
(2, 'hm', 'hm', 22, 3),
(3, 'aa', 'aaaa', 22, 3),
(4, 'aa', 'aaaa', 22, 3),
(5, 'ta', 'ta', 22, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurante`
--

CREATE TABLE `restaurante` (
  `id_rest` int(80) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(800) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `horario_funcionamento` char(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(100) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `usuario_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `restaurante`
--

INSERT INTO `restaurante` (`id_rest`, `nome`, `descricao`, `telefone`, `horario_funcionamento`, `estado`, `preco`, `endereco`, `numero`, `cidade`, `usuario_id_user`) VALUES
(1, 'Madero Steak House', 'O hambuger do MADERO faz o mundo melhor.', '(47)3043-9100', 'segunda-feira à sábado 11:45–23:00 domingo e feriados 11:45–22:00', 'SC', '', 'Av. Rolf Wiest, Bom Retiro', 337, 'Joinville', 4),
(2, 'Virado no Alho', 'Comida deliciosa, equipe sempre simpática e o chef vem ás mesas cumprimentar. É um favorito na cidade. Sagú sempre bom!', '3426-0045', 'de terça-feira a sabado, das 11:30 as 14:00 e 18:00 as 00:00, domingo e segunda somente das 11:30 as', 'sc', '', 'R. Simão Kruger', 50, '0', 0),
(19, 'La Cecília Cantina & Café', 'FAIXA DE PREÇO R$ 33 - R$ 148 COZINHAS Italiana, Café, Mediterrânea, Brasileira, Sul-americana REFEIÇÕES Café da manhã, Almoço, Drinks', '+55 41 3071-0369', 'seg-qui 11:00–00:00 sex-sáb 11:00–01:00 dom 11:00–17:00', 'PR', '', 'Avenida Senador Souza Naves, Curitiba, Paraná 80045-060 Brasil', 61, 'Curitiba', 0),
(20, 'Il Sogno di mamma Nunzia', 'Il Sogno di Mamma Nunzia é O Restaurante italiano localizado no centro histórico de Curitiba, em uma casa centenária que tem uma das mais lindas decorações da cidade. Ambiente tranquilo e agradável, com pratos focados na excelência da tradição da Itália, se orgulha de servir entradas, pasta, carnes ', '4130495501', 'Seg - Sáb 12:00 - 14:30 19:00 - 23:00', 'PR', '', 'Avenida Jaime Reis, São Francisco, Curitiba, Paraná 80510-010 Brasil', 216, 'Curitiba', 0),
(21, 'Izakaya Tanuki', 'Nós somos um tradicional Izakaya japonês (casa de Saquê). Nosso objetivo é trazer, para Curitiba e região, a experiência de estar em um verdadeiro Izakaya.', '+55 41 3503-5526', 'Seg - Qui 18:00 - 23:00 Seg - Sex 11:30 - 14:00 Sex - Sáb 18:00 - 23:30 Sáb - Dom 11:30 - 15:00', 'PR', '', 'Avenida dos Estados, Curitiba, Paraná 80610-040 Brasil', 853, 'Curitiba', 0),
(22, 'Guacamole Cocina Mexicana', 'Reservas, Mesas ao ar livre, Lugares para sentar, Cadeiras para bebês, Serve bebida alcoólica, Bar completo, Vinho e cerveja, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa', '+55 51 3026-5054', 'Dom - Sáb 19:00 - 00:00', 'RS', '', ' Avenida Doutor Nilo Pecanha, Porto Alegre, Rio Grande do Sul 90470-000 Brasil', 450, 'Porto Alegre', 0),
(23, 'La Rouge Bistrô', 'O espaço gastronômico mais inovador de Porto Alegre. Culinária ética, criativa, orgânica, saudável, sofisticada e deliciosa.', '+55 51 3019-7638', 'Ter - Sex 12:00 - 15:00 Qui 19:30 - 22:30 Sáb - Dom 12:00 - 16:00', 'RS', '', 'Avenida Mariland, Porto Alegre, Rio Grande do Sul 90440-191 Brasil', 1587, 'Porto Alegre', 0),
(24, 'Didge Stakehouse Pub', 'Para levar, Reservas, Mesas ao ar livre, Lugares para sentar, Televisão, Cadeiras para bebês, Acesso para cadeirantes, Serve bebida alcoólica, Bar completo, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa, Música ao vivo', '+55 48 3365-6615', 'Qua 19:00 - 01:00 Qui - Sex 19:00 - 01:30 Sáb - Ter 19:00 - 00:30', 'SC', '20 a 150', 'Av. Beira Mar Norte', 1976, 'Florianópolis', 0),
(25, 'Outback Steakhouse - Shopping Center Catuaí', 'Para levar, Lugares para sentar, Acesso para cadeirantes, Serve bebida alcoólica, Vinho e cerveja, Serviço de mesa, Estacionamento disponível, Televisão, Cadeiras para bebês, Bar completo, Wi-fi gratuito', '+55 43 3322-1230', 'seg.-qui. 12:00–15:00 e 18:00–23:00 sex. 12:00–15:00 e 18:00–00:00 sáb. 12:00–00:00 dom. 12:00–22:00', 'PR', '30 a $40', 'Rodovia Celso Garcia Cid', 377, 'Londrina', 0),
(26, 'Bier Vila', 'A Bier Vila é um dos mais respeitados bares de cerveja do Brasil e desde o seu inicio oferece exclusivamente cervejas artesanais e importadas. Hoje conta com 30 torneiras de chope e uma carta de cervejas premiada pela revista Prazeres da Mesa, como uma das melhores do Brasil. Reservas, Mesas ao ar livre, Lugares para sentar, Televisão, Cadeiras para bebês, Acesso para cadeirantes, Serve bebida alcoólica, Bar completo, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa', '47 3329-0808', 'Dom - Sáb 11:00 - 23:00', 'SC', 'R$ 8 - R$ 80', 'Rua Alberto Stein', 199, 'Blumenau', 0),
(27, 'Âme', 'Nossas preparações levam ingredientes, sempre que possível, orgânicos e livres de substâncias com potencial alergênico e inflamatório como glúten, leite, soja não-fermentada; ou ainda enzimas e adoçantes artificiais, corantes e conservantes. Além disso adicionando superfoods, conseguimos agregar ainda mais nutrientes. A forma de cocção de tudo também é pensada no aproveitamento máximo dos nutrientes de cada preparação. Pra você comer, alimentando seu corpo e sua alma, suspirando com todo sabor que nossa gastronomia vai te proporcionar. Fazemos comida simples e gostosa, com sabores construídos e técnicas corretas de preparo. Sem culpa, sem exclusão e com muito amor.', '+55 47 3288-0294', 'Seg - Sex 11:30 - 22:00 Sáb 11:30 - 19:00', 'SC', '20-$80', 'Rua Marechal Deodoro', 555, 'Blumenau', 0),
(28, 'Nhac Temaki', 'PRIMEIRA TEMAKERIA DE JOINVILLE, COMPLETOU 03 ANOS, CARDÁPIO COMPLETO COZINHA JAPONESA E CHINESA (SUSHI, SASHIMI, TEMAKIS, HOSSOMAKI, NIGUIRIS, COMBOS, YAKISOBA, ROLINHOS PRIVAVERA, SOBREMESAS, CHOPP OPA BIER (DA CIDADE). Entrega, Bufê, Estacionamento na rua, Acesso para cadeirantes, Serve bebida alcoólica, Vinho e cerveja, Wi-fi gratuito, Serviço de mesa, Para levar, Reservas, Mesas ao ar livre, Lugares para sentar, Cadeiras para bebês, Bar completo', '+55 47 3434-2004', 'Ter - Dom 18:00 - 00:00', 'SC', 'R$ 13 - R$ 59', 'Rua Visconde de Taunay', 1174, 'Joinville', 0),
(29, 'Niu Sushi', 'O Niu Sushi está entre os melhores restaurantes de cozinha japonesa do Brasil, fruto da qualidade dos ingredientes, do trabalho da equipe de frente e do lindo ambiente que de forma harmoniosa o tornam um local para vivenciar momentos únicos.Entrega, Para levar, Reservas, Mesas ao ar livre, Restaurante privativo, Lugares para sentar, Estacionamento na rua, Cadeiras para bebês, Acesso para cadeirantes, Serve bebida alcoólica, Vinho e cerveja, Aceita American Express, Aceita MasterCard, Aceita Visa, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa, Estacionamento disponível.', '(47) 3029-0909', 'Seg - Sáb 18:00 - 23:30 Sáb 11:30 - 15:00', 'SC', 'R$ 17 - R$ 25', 'Rua Max Colin', 1589, 'Joinville', 0),
(30, 'O Pharol Restaurante Gourmet ', 'Frutos do Mar e Carnes nobres são o carro chefe e agradam os olhos e olfato e tem o ponto alto no que há de mais importante, O Sabor. Localizado na avenida Atlântica, n. 2554, Ed. Imperatriz, esquina com a Rua 2.000, no centro de Balneário Camboriú em novas e modernas instalações, após os 26 anos atendendo na Barra sul a tradição mudou de local mas não de sabor. Por isso nos dedicamos à satisfação e ao bem estar de nossos clientes, procurando atender a seus anseios; em decorrência desse trabalho fizemos amigos, pessoas essas que sem perceberem nos incentivaram a continuar a nossa missão que é a Excelência em Gastronomia. A Família O Pharol tem o maior prazer em recebe los....', '+55 47 3367-3800', 'Dom - Sáb 11:00 - 01:00', 'SC', ' 8 - R$ 298', 'Av Atlântica', 2554, 'Balneário Camboriú', 0),
(31, 'Mood Restaurante', 'Um mix de restaurante, lounge e bar com um ambiente descontraído para você ter novas experiências. Enjoy your lifestyle! Reservas, Acesso para cadeirantes, Vinho e cerveja, Aceita American Express, Aceita MasterCard, Aceita Visa, Wi-fi gratuito, Serviço de mesa, Mesas ao ar livre, Lugares para sentar, Estacionamento disponível, Estacionamento com manobrista, Televisão, Cadeiras para bebês, Serve bebida alcoólica, Bar completo', '+55 47 3345-3544', 'Dom - Sáb 11:00 - 23:59', 'SC', '17 - R$ 59', 'Av. Atlântica', 2010, 'Balneário Camboriú', 0),
(32, 'Kumaras Restaurante & Lounge', 'Especializado em tapas mediterraneas, traz uma gastronomia refinada de fusao. Alem das tapas, tambem oferecemos risotos, lasanhas, peixes e carnes. Ampla carta de vinhos, cervejas artesanais e coqueteis classicos e proprios. Alem da gastronomia unica, contamos com exposicoes de arte moveis e musica ao vivo da melhor qualidade. Nesta temporada 2018 também trazemos um novo conceito de sushi vegano, com cogumelos, verduras e molhos especialmente desenvolvidos para atender a esse novo público.', '+55 48 99677-5703', 'Dom 11:00 - 00:00 Seg - Sáb 19:00 - 00:00', 'SC', '10 a $70', 'Estr. da Barra', 440, 'Garopaba', 0),
(33, 'Forneria Catarina', 'Entrega, Para levar, Reservas, Lugares para sentar, Estacionamento com manobrista, Cadeiras para bebês, Acesso para cadeirantes, Serve bebida alcoólica, Bar completo, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa', '+55 48 3333-0707', 'Dom - Sáb 18:00 - 23:50', 'SC', '20 a 120$', 'Rua Esteves Júnior', 604, 'Florianópolis', 0),
(34, 'Cocina Paisano', 'Restaurante no estilo tex-mex, servindo os tradicionais pratos mexicanos, como nachos, tacos, burritos, quesadillas. Para sobremesa os deliciosos churros com doce de leite ou brigadeiro de ovomaltine. Opções de Chopps artesanais, cervejas comerciais, drinks, sodas e refrigerantes.', '+55 51 3377-4771', 'Dom - Sáb 18:30 - 23:00', 'RS', ' 25 - R$ 38', 'Rua Felipe Neri', 104, 'Porto Alegre', 0),
(35, 'Bela Vista Café Colonial', 'Vinho e cerveja, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa, Lugares para sentar, Cadeiras para bebês, Acesso para cadeirantes, Serve bebida alcoólica', '(51) 3237-1213', 'Ter - Sex 10:00 - 22:00 Sáb - Dom 10:30 - 22:30', 'RS', '40 a $160', 'Avenida Cristovao Colombo', 545, 'Porto Alegre', 0),
(36, 'Le Bateau Ivre', 'Reservas, Lugares para sentar, Estacionamento com manobrista, Acesso para cadeirantes, Serve bebida alcoólica, Bar completo, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa', '(51) 3330-7351', 'Ter - Sáb 20:00 - 00:00', 'RS', '50 a $140', 'Rua Tito Livio Zambecari', 805, 'Porto Alegre', 0),
(37, 'Koh Pee Pee', 'Reservas, Restaurante privativo, Lugares para sentar, Estacionamento disponível, Estacionamento com manobrista, Cadeiras para bebês, Acesso para cadeirantes, Serve bebida alcoólica, Bar completo, Wi-fi gratuito, Aceita cartão de crédito, Serviço de mesa', '+55 51 3333-5150', 'Seg - Sáb 19:00 - 23:30', 'RS', '106 - R$ 424', 'Rua Schiller', 83, 'Porto Alegre', 0),
(38, 'Thai Mee', 'Reservas, Lugares para sentar, Acesso para cadeirantes, Serve bebida alcoólica, Wi-fi gratuito, Serviço de mesa, Cadeiras para bebês', '(51) 3362-6222', 'Dom 11:30 - 15:00 Seg - Sáb 19:00 - 23:30', 'RS', '30 a $90', 'Avenida dos Estados', 111, 'Porto Alegre', 0);

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
(3, 1, 2, NULL),
(12, 19, 3, NULL),
(13, 19, 5, NULL),
(14, 20, 3, NULL),
(15, 20, 11, NULL),
(16, 21, 1, NULL),
(17, 22, 4, NULL),
(18, 22, 6, NULL),
(19, 23, 2, NULL),
(20, 23, 3, NULL),
(21, 24, 10, NULL),
(22, 25, 10, NULL),
(23, 26, 7, NULL),
(24, 27, 7, NULL),
(25, 28, 1, NULL),
(26, 29, 1, NULL),
(27, 30, 7, NULL),
(28, 30, 11, NULL),
(29, 31, 2, NULL),
(30, 31, 3, NULL),
(31, 31, 8, NULL),
(32, 31, 11, NULL),
(33, 32, 4, NULL),
(34, 32, 5, NULL),
(35, 32, 11, NULL),
(36, 33, 4, NULL),
(37, 34, 6, NULL),
(38, 35, 5, NULL),
(39, 35, 7, NULL),
(40, 36, 8, NULL),
(41, 37, 4, NULL),
(42, 37, 9, NULL),
(43, 38, 9, NULL);

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

--
-- Extraindo dados da tabela `tipo_user`
--

INSERT INTO `tipo_user` (`id_tip`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Usuário comum');

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
(3, 'julia', 'Feminino', '2001-06-18', 'juh@gmail.com', 'julia', 1),
(6, 'Leticia dos Santos', 'Feminino', '2001-12-21', 'leticiasantos00099@gmail.com', 'leticia', 1),
(15, 'Julian', 'Masculino', '0000-00-00', 'juquinha@email.com', 'julian', 0),
(44, 'natalia', 'Feminino', '2001-08-03', 'nati@gmail.com', 'natalia', 1),
(46, 'karen', 'Feminino', '2001-08-17', 'karen@gmail.com', 'karen', 0),
(47, 'beth', 'Feminino', '1111-01-01', 'beth@gmail.com', '', 0),
(52, 'Alicia Reis', 'F', '1997-10-19', 'alicia_reis@gmail.com', 'alicia', 0),
(60, 'bianca', 'Feminino', '2001-08-04', 'bianca@gmail.com', 'bianca', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacos`
--
ALTER TABLE `avaliacos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rest` (`id_rest_id`),
  ADD KEY `fk_user` (`id_user_id`);

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
-- AUTO_INCREMENT for table `avaliacos`
--
ALTER TABLE `avaliacos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `id_rest` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `restaurante_categoria`
--
ALTER TABLE `restaurante_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tipo_comida`
--
ALTER TABLE `tipo_comida`
  MODIFY `id_comida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tipo_user`
--
ALTER TABLE `tipo_user`
  MODIFY `id_tip` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Constraints for dumped tables
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
