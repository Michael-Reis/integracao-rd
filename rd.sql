-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Ago-2021 às 02:05
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessord`
--

CREATE TABLE `acessord` (
  `id` int(11) NOT NULL,
  `code` varchar(500) DEFAULT NULL,
  `refresh_token` varchar(800) DEFAULT NULL,
  `access_token` varchar(800) DEFAULT NULL,
  `clientid` varchar(500) DEFAULT NULL,
  `client_secret` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acessord`
--

INSERT INTO `acessord` (`id`, `code`, `refresh_token`, `access_token`, `clientid`, `client_secret`) VALUES
(1, '3ce98fbe53257f40eac942e965efdc56', 'cGe_QqmZNBuEUu7a1KNcJUyPYcK29Z6dADlXPwvqylY', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJodHRwczovL2FwaS5yZC5zZXJ2aWNlcyIsInN1YiI6IjduSkhtcHV6Zk8waGI3ZEJfeUVscWVabGMxU2RhaHFtdlBYT1ZFZ24zMzRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vYXBwLnJkc3RhdGlvbi5jb20uYnIvYXBpL3YyLyIsImFwcF9uYW1lIjoiT1JJVCBEVyIsImV4cCI6MTYyODcyMzczMywiaWF0IjoxNjI4NjM3MzMzLCJzY29wZSI6IiJ9.Azm5C_OiyxL65WvQcIY6OQ7fhUJQs6pHqH3MFSNnUR4l2V5_YnukKoLCm1fDTYNYZKHJj9NBXoDu2RmMDYph4nBzfs3WByS5nMn0NnVY7vaXNO68oNI5RwXuvWXlA4wQBK5gUf8Lo5k2KY5w5Jx23pu-tGnsluYFLaOxLRgYSI1Ck6ELEy1pNZTKwoB0u221s9Tx97Ul9ghfi-_fShFwp_f70KFStdxH6PUwHSnMkPKU_3X8lHPnl4BjSrcncLjS2gWgxZSxypsi7wF9PI1x-Iuwhg6sNLjD-bH5Ruhv_PHGQaMHZ522azoC1gvWZcPDDqRJA9TnQjAgYk7mcAjXmQ', 'fd984a13-22b8-47ab-8492-c981b52cf647', 'e421174f45b04541adf688799588609c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(50) NOT NULL,
  `uuid` varchar(150) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `bio` varchar(200) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `personal_phone` varchar(20) DEFAULT NULL,
  `mobile_phone` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `webhooks`
--

CREATE TABLE `webhooks` (
  `idwebhooks` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `idu` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `bio` varchar(100) DEFAULT NULL,
  `publicUrl` varchar(100) DEFAULT NULL,
  `createdAt` varchar(20) DEFAULT NULL,
  `opportunity` varchar(100) DEFAULT NULL,
  `numberConversions` varchar(20) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `firstEventType` varchar(50) DEFAULT NULL,
  `firstEventIdentifier` varchar(50) DEFAULT NULL,
  `firstIdentificador` varchar(50) DEFAULT NULL,
  `firstEventTimestamp` varchar(100) DEFAULT NULL,
  `firstTrafficSource` varchar(100) DEFAULT NULL,
  `firstEmailLead` varchar(100) DEFAULT NULL,
  `firstConversionIdentifier` varchar(100) DEFAULT NULL,
  `firstCdpEventBatchUuid` varchar(100) DEFAULT NULL,
  `firstCdpEventBatchIndex` varchar(100) DEFAULT NULL,
  `firstCdpEventIdentifier` varchar(100) DEFAULT NULL,
  `firstCdpEventUuid` varchar(100) DEFAULT NULL,
  `firstCdpEventType` varchar(100) DEFAULT NULL,
  `firstCdpEventFamily` varchar(100) DEFAULT NULL,
  `firstCdpEventTimestamp` varchar(100) DEFAULT NULL,
  `firstCdptraffic_source` varchar(100) DEFAULT NULL,
  `firstCdpemail` varchar(100) DEFAULT NULL,
  `firstCdpConversionIdentifier` varchar(100) DEFAULT NULL,
  `firstCreatedAt` varchar(100) DEFAULT NULL,
  `firstCumulativeSum` varchar(100) DEFAULT NULL,
  `firstSource` varchar(100) DEFAULT NULL,
  `firstCoSource` varchar(100) DEFAULT NULL,
  `firstCoMedium` varchar(100) DEFAULT NULL,
  `firstCoValue` varchar(100) DEFAULT NULL,
  `firstCompaign` varchar(100) DEFAULT NULL,
  `firstChannel` varchar(100) DEFAULT NULL,
  `lastCdpPayloadClientTrakingId` varchar(100) DEFAULT NULL,
  `lastCdpPayloadInternalSource` varchar(100) DEFAULT NULL,
  `lastCdpPayloadRdExperimentContentId` varchar(100) DEFAULT NULL,
  `lastCdpPayloadCUtmz` varchar(100) DEFAULT NULL,
  `lastCdpPayloadTrafficSource` varchar(100) DEFAULT NULL,
  `lastEventType` varchar(100) DEFAULT NULL,
  `lastEventIdentifier` varchar(100) DEFAULT NULL,
  `lastIdentificador` varchar(100) DEFAULT NULL,
  `lastEventTimestamp` varchar(100) DEFAULT NULL,
  `lastTrafficSource` varchar(100) DEFAULT NULL,
  `lastEmailLead` varchar(100) DEFAULT NULL,
  `lastConversionIdentifier` varchar(100) DEFAULT NULL,
  `lastEventCdpBatchUuid` varchar(100) DEFAULT NULL,
  `lastEventCdpBatchIndex` varchar(100) DEFAULT NULL,
  `lastEventCdpIdentifier` varchar(100) DEFAULT NULL,
  `lastEventCdpUuid` varchar(100) DEFAULT NULL,
  `lastCdpEventType` varchar(100) DEFAULT NULL,
  `lastCdpEventFamily` varchar(100) DEFAULT NULL,
  `lastCdpEventTimestamp` varchar(100) DEFAULT NULL,
  `lastCdpTrafficSource` varchar(100) DEFAULT NULL,
  `lastCdpEmail` varchar(200) DEFAULT NULL,
  `firstCdpPayloadClientTrakingId` varchar(100) DEFAULT NULL,
  `firstCdpPayloadInternalSource` varchar(100) DEFAULT NULL,
  `firstCdpPayloadRdExperimentContentId` varchar(100) DEFAULT NULL,
  `firstCdpPayloadCutmz` varchar(100) DEFAULT NULL,
  `firstCdpPayloadTrafficSource` varchar(100) DEFAULT NULL,
  `lastCdpConversionIdentifier` varchar(200) DEFAULT NULL,
  `lastCreatedAt` varchar(200) DEFAULT NULL,
  `lastCumulativeSum` varchar(100) DEFAULT NULL,
  `lastSource` varchar(100) DEFAULT NULL,
  `lastConversionSource` varchar(100) DEFAULT NULL,
  `lastMedium` varchar(100) DEFAULT NULL,
  `lastValue` varchar(100) DEFAULT NULL,
  `lastCompaign` varchar(100) DEFAULT NULL,
  `lastChannel` varchar(100) DEFAULT NULL,
  `customWebsite` varchar(100) DEFAULT NULL,
  `customPersonalPhone` varchar(100) DEFAULT NULL,
  `customMobilePhone` varchar(100) DEFAULT NULL,
  `customCity` varchar(100) DEFAULT NULL,
  `customState` varchar(100) DEFAULT NULL,
  `customLeadStage` varchar(100) DEFAULT NULL,
  `customLastMarkedOpportunityDate` varchar(100) DEFAULT NULL,
  `customUuid` varchar(100) DEFAULT NULL,
  `dataevento` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `webhookstags`
--

CREATE TABLE `webhookstags` (
  `idwebhookstags` int(11) NOT NULL,
  `idu` varchar(200) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessord`
--
ALTER TABLE `acessord`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Índices para tabela `webhooks`
--
ALTER TABLE `webhooks`
  ADD PRIMARY KEY (`idwebhooks`);

--
-- Índices para tabela `webhookstags`
--
ALTER TABLE `webhookstags`
  ADD PRIMARY KEY (`idwebhookstags`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessord`
--
ALTER TABLE `acessord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10127;

--
-- AUTO_INCREMENT de tabela `webhooks`
--
ALTER TABLE `webhooks`
  MODIFY `idwebhooks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT de tabela `webhookstags`
--
ALTER TABLE `webhookstags`
  MODIFY `idwebhookstags` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
