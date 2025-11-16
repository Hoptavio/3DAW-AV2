-- Começo Configuração do MySQL
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Começo Criar Banco de Dados
CREATE DATABASE IF NOT EXISTS `aluguel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aluguel`;

-- Começo Tabela: acomodacoes
CREATE TABLE `acomodacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Começo Dados: acomodacoes
INSERT INTO `acomodacoes` (`id`, `nome`, `descricao`, `preco`, `imagem`) VALUES
(1, 'Chalé à Beira-Mar', 'Encantador chalé com vista para o mar e acesso privativo à praia.', 350.00, 'https://images.unsplash.com/photo-1564013799919-ab600027ffc6'),
(2, 'Apartamento no Centro', 'Moderno apartamento no coração da cidade, próximo a todas as atrações.', 250.00, 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267'),
(3, 'Cabana nas Montanhas', 'Aconchegante cabana com lareira e vista deslumbrante para as montanhas.', 280.00, 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000'),
(4, 'Hotel Boutique Histórico', 'Hotel charmoso localizado no centro histórico.', 420.00, 'https://images.unsplash.com/photo-1542314831-068cd1dbfeeb'),
(5, 'Vila Familiar com Piscina', 'Casa espaçosa ideal para famílias.', 550.00, 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf'),
(6, 'Estúdio Compacto', 'Estúdio pequeno e aconchegante.', 120.00, 'https://images.unsplash.com/photo-1571896349842-33c89424de2d');
-- Final Dados: acomodacoes

-- Começo Tabela: experiencias
CREATE TABLE `experiencias` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Começo Dados: experiencias
INSERT INTO `experiencias` (`id`, `nome`, `descricao`, `preco`, `imagem`) VALUES
(1, 'Passeio de Barco nas Ilhas', 'Passeio com paradas em ilhas paradisíacas.', 150.00, 'https://images.unsplash.com/photo-1506929562872-bb421503ef21'),
(2, 'Trilha Ecológica com Guia', 'Trilha guiada em meio à natureza.', 80.00, 'https://images.unsplash.com/photo-1551632811-561732d1e306'),
(3, 'Tour Cultural Histórico', 'Visita guiada por pontos culturais da cidade.', 120.00, 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b');
-- Final Dados: experiencias

-- Começo Tabela: aulas
CREATE TABLE `aulas` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Começo Dados: aulas
INSERT INTO `aulas` (`id`, `nome`, `preco`) VALUES
(1, 'Aula de Dança Local', 90.00),
(2, 'Aula de Culinária Regional', 120.00),
(3, 'Guia Turístico Personalizado', 200.00),
(4, 'Aula de Yoga na Natureza', 70.00),
(5, 'Massagem Relaxante', 150.00),
(6, 'Sessão de Fotografia', 300.00);
-- Final Dados: aulas

-- Começo Tabela: reservas
CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_acomodacao` int(11) NOT NULL,
  `nome_cliente` varchar(150) NOT NULL,
  `email_cliente` varchar(150) NOT NULL,
  `telefone_cliente` varchar(30) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `data_reserva` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Começo Tabela: reservas_experiencias
CREATE TABLE `reservas_experiencias` (
  `id` int(11) NOT NULL,
  `id_experiencia` int(11) NOT NULL,
  `nome_cliente` varchar(150) DEFAULT NULL,
  `email_cliente` varchar(150) DEFAULT NULL,
  `telefone_cliente` varchar(30) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `data_reserva` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Começo Tabela: reservas_aulas
CREATE TABLE `reservas_aulas` (
  `id` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `nome_cliente` varchar(150) DEFAULT NULL,
  `email_cliente` varchar(150) DEFAULT NULL,
  `telefone_cliente` varchar(30) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `data_reserva` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Começo Índices
ALTER TABLE `acomodacoes` ADD PRIMARY KEY (`id`);
ALTER TABLE `experiencias` ADD PRIMARY KEY (`id`);
ALTER TABLE `aulas` ADD PRIMARY KEY (`id`);
ALTER TABLE `reservas` ADD PRIMARY KEY (`id`), ADD KEY `id_acomodacao` (`id_acomodacao`);
ALTER TABLE `reservas_experiencias` ADD PRIMARY KEY (`id`), ADD KEY `id_experiencia` (`id_experiencia`);
ALTER TABLE `reservas_aulas` ADD PRIMARY KEY (`id`);

-- Começo Auto Incremento
ALTER TABLE `acomodacoes` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `experiencias` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `aulas` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `reservas` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `reservas_experiencias` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `reservas_aulas` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- Começo Chaves Estrangeiras
ALTER TABLE `reservas` ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_acomodacao`) REFERENCES `acomodacoes` (`id`);
ALTER TABLE `reservas_experiencias` ADD CONSTRAINT `reservas_experiencias_ibfk_1` FOREIGN KEY (`id_experiencia`) REFERENCES `experiencias` (`id`);
-- Final Chaves Estrangeiras

COMMIT;
-- Final Configuração do MySQL