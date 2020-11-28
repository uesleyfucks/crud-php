-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2020 às 13:13
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `got_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartas_tb`
--

CREATE TABLE `cartas_tb` (
  `id` int(11) NOT NULL,
  `cardname` varchar(40) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `ataque` int(250) NOT NULL,
  `defesa` int(250) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cartas_tb`
--

INSERT INTO `cartas_tb` (`id`, `cardname`, `tipo`, `ataque`, `defesa`, `descricao`) VALUES
(3, 'Dragao Branco de Olhos Azuis', 'Monstro', 3000, 2500, 'Este lendário dragão é uma poderosa máquina de destruição. Praticamente invencível, muito poucos enfrentaram essa magnifica criatura e viveram para contar a história.'),
(4, 'Scapegoat', 'Magica', 0, 0, 'Invoque por Invocação-Especial 4 \"Fichas de Ovelha\" (Tipo Besta/TERRA/Nível 1/ATK 0/DEF 0) em Posição de Defesa. Essas Fichas não podem ser oferecidas como Tributo para uma Invocação-Tributo. Você não'),
(9, 'Cilindro Mágico', 'Armadilha', 0, 0, 'Quando um monstro do oponente declarar um ataque: escolha o monstro atacante; negue o ataque e, se isso acontecer, cause dano ao seu oponente igual ao ATK do monstro.'),
(44, 'Polimerização', 'Magica', 0, 0, 'Invoque por Invocação-Especial 1 Monstro de Fusão do seu Deck Adicional, usando monstros da sua mão ou do seu lado do campo como Matérias de Fusão.'),
(51, 'Mago do Tempo', 'Monstro', 500, 400, 'Uma vez por turno: você pode lançar uma moeda e escolher cara ou coroa. Se você ganhar, destrua todos os monstros que seu oponente controla. Se você perder, destrua tantos monstros que você controla q'),
(52, 'Terra em Chamas', 'Magica', 0, 0, 'Destrua todos os Field Spell Cards no campo. Durante a Standby Phase de cada jogador, ele recebe 500 de dano.'),
(56, 'Mago Negro', 'Monstro', 2500, 2100, 'O mago definitivo em termos de ataque e defesa.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_tb`
--

CREATE TABLE `users_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users_tb`
--

INSERT INTO `users_tb` (`id`, `username`, `senha`, `email`) VALUES
(3, 'admin', 'admin', 'admin@admin.com'),
(8, 'kek', 'kek', 'kek@mail.com'),
(16, 'jooj', '123', 'jooj@jooj.com'),
(18, 'kaiba', '123', 'kaiba@email.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cartas_tb`
--
ALTER TABLE `cartas_tb`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cartas_tb`
--
ALTER TABLE `cartas_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
