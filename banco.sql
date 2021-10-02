SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

IF NOT EXISTS CREATE DATABASE db_pw;

CREATE TABLE `tb_endereco` (
  `cd_endereco` int(11) NOT NULL,
  `ds_rua` varchar(100) DEFAULT NULL,
  `nr_local` int(11) DEFAULT NULL,
  `ds_bairro` varchar(50) DEFAULT NULL,
  `ds_cidade` varchar(50) DEFAULT NULL,
  `ds_estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_endereco` (`cd_endereco`, `ds_rua`, `nr_local`, `ds_bairro`, `ds_cidade`, `ds_estado`) VALUES
(1, 'Praça da Sé', 50, 'Sé', 'São Paulo', 'SP'),
(2, 'Rua Benedito Calixto', 200, 'Centro', 'Itanhaém', 'SP');

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(100) DEFAULT NULL,
  `ds_email` varchar(100) NOT NULL,
  `cod_senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `ds_email`, `cod_senha`) VALUES
(1, 'Jussimar', 'jussimarleal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Maria', 'maria@teste.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'teste', 'teste@teste.com.br', 'e10adc3949ba59abbe56e057f20f883e');

ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`cd_endereco`);

ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`),
  ADD UNIQUE KEY `ds_email` (`ds_email`);

ALTER TABLE `tb_endereco`
  MODIFY `cd_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
