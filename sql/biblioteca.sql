-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2023 às 17:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acervo`
--

CREATE TABLE `acervo` (
  `id_acervo` int(11) NOT NULL,
  `nm_titulo` varchar(100) NOT NULL,
  `qt_paginas` int(11) NOT NULL,
  `nm_autor` varchar(100) NOT NULL,
  `nm_editora` varchar(100) NOT NULL,
  `dt_publicacao` date NOT NULL,
  `tx_sinopse` text NOT NULL,
  `url_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `acervo`
--

INSERT INTO `acervo` (`id_acervo`, `nm_titulo`, `qt_paginas`, `nm_autor`, `nm_editora`, `dt_publicacao`, `tx_sinopse`, `url_img`) VALUES
(1, 'Diário de uma ansiosa ou como parei de me sabotar ', 192, 'Beth Evans ', 'Galera', '2018-01-10', 'Diário de uma ansiosa ou como parei de me sabotar: Neste inspirador diário, uma pessoa ansiosa relata sua jornada pessoal, compartilhando as estratégias e os desafios que enfrentou para superar a autossabotagem, aprender a lidar com a ansiedade e encontrar um caminho para uma vida mais equilibrada e satisfatória.', 'https://m.media-amazon.com/images/I/41jKHpi0IBL._SX322_BO1,204,203,200_.jpg '),
(2, 'A paciente silenciosa ', 364, 'Alex Michaelides ', 'Record', '2019-03-05', 'A paciente silenciosa: Um thriller psicológico envolvente que se desenrola em uma clínica psiquiátrica. Um terapeuta obstinado é designado para tratar uma paciente que se mantém misteriosamente silenciosa, mas, ao adentrar seu mundo recluso, ele descobre segredos sombrios que o levarão a questionar sua própria sanidade.', 'https://m.media-amazon.com/images/I/413th2NQc8L._SX338_BO1,204,203,200_.jpg '),
(3, 'A Sutil Arte de Ligar o F*da-Se: Uma estratégia inusitada para uma vida melhor ', 224, 'Mark Manson ', 'Intrínseca', '2016-06-20', 'A Sutil Arte de Ligar o F*da-Se: Uma estratégia inusitada para uma vida melhor: Este livro de autoajuda aborda a importância de priorizar o que realmente importa na vida e aprender a não se importar com coisas insignificantes, trazendo uma perspectiva refrescante e direta para uma vida mais autêntica e realizada.', 'https://m.media-amazon.com/images/I/51KP4VQOF1L._SX332_BO1,204,203,200_.jpg '),
(4, 'Tosco', 133, 'Gilberto Mattje', 'Alvorada', '2007-09-12', 'Tosco: Uma história contada em linguagem coloquial, retratando a vida de um jovem morador do subúrbio carioca, sua rotina e os desafios enfrentados.', 'https://m.media-amazon.com/images/I/51g5FWDF7FL._SX418_BO1,204,203,200_.jpg'),
(5, 'Irreal - Série Incrível', 128, 'Paul Jennings', 'Fundamento', '2013-11-30', 'Irreal - Série Incrível: Em um mundo fictício cheio de seres sobrenaturais, uma jornada épica se desenrola enquanto um grupo de heróis busca desvendar os mistérios que cercam a própria existência.', 'https://m.media-amazon.com/images/I/617mC7obSlL._SX346_BO1,204,203,200_.jpg'),
(6, 'A perseguição', 236, 'Sidney Sheldon', 'Record', '2010-04-15', 'A perseguição: Um suspense eletrizante em que um detetive dedicado embarca em uma perigosa caçada a um assassino em série que desafia todas as expectativas.', 'https://m.media-amazon.com/images/I/417aRyd095L._SX358_BO1,204,203,200_.jpg'),
(7, 'Dobrando a aposta (Vol. 3)', 432, 'Charlie Higson', 'Record', '2011-08-25', 'Dobrando a aposta (Vol. 3): A história continua nesta emocionante sequência, com reviravoltas, intrigas e desafios que testarão a coragem dos personagens.', 'https://m.media-amazon.com/images/I/41ek7yq8RaL._SX330_BO1,204,203,200_.jpg'),
(8, 'A batalha do apocalipse: Da queda dos anjos ao crepúsculo do mundo', 588, 'Eduardo Spohr', 'Verus', '2008-03-02', 'A batalha do apocalipse: Da queda dos anjos ao crepúsculo do mundo: Neste épico de fantasia, anjos caídos e forças malignas enfrentam uma batalha que determinará o destino da humanidade.', 'https://m.media-amazon.com/images/I/51IvzsNhsRL._SX350_BO1,204,203,200_.jpg'),
(9, 'Anjos e demônios (Robert Langdon)', 480, 'Dan Brown', 'Editora Arqueiro', '2000-06-18', 'Anjos e demônios (Robert Langdon): O renomado simbologista Robert Langdon se envolve em uma emocionante busca para desvendar os segredos de uma antiga sociedade secreta e impedir uma ameaça devastadora.', 'https://m.media-amazon.com/images/I/41+9-yqPdLL._SX346_BO1,204,203,200_.jpg'),
(10, 'O Código Da Vinci (Robert Langdon - Livro 2)', 560, 'Dan Brown', 'Editora Arqueiro', '2003-04-25', 'O Código Da Vinci (Robert Langdon - Livro 2): Uma corrida contra o tempo começa quando Robert Langdon segue as pistas de um mistério milenar que poderia abalar os alicerces da religião.', 'https://m.media-amazon.com/images/I/41d3LsE0NqL._SX346_BO1,204,203,200_.jpg'),
(11, 'O símbolo perdido (Robert Langdon - Livro 3)', 640, 'Dan Brown', 'Editora Arqueiro', '2009-09-15', 'O símbolo perdido (Robert Langdon - Livro 3): Em mais uma aventura, Robert Langdon mergulha em enigmas e símbolos ocultos em uma trama repleta de reviravoltas.', 'https://m.media-amazon.com/images/I/51-DJrySy5L._SX327_BO1,204,203,200_.jpg'),
(12, 'Inferno (Robert Langdon - Livro 4)', 448, 'Dan Brown', 'Editora Arqueiro', '2013-05-10', 'Inferno (Robert Langdon - Livro 4): Langdon se envolve em uma trama mortal envolvendo arte, ciência e códigos enigmáticos, em uma corrida desesperada para salvar o mundo de uma ameaça devastadora.', 'https://m.media-amazon.com/images/I/51ZYoy6UeHL._SX346_BO1,204,203,200_.jpg'),
(13, 'Origem (Robert Langdon - Livro 5)', 560, 'Dan Brown', 'Editora Arqueiro', '2017-09-28', 'Origem (Robert Langdon - Livro 5): Novamente, Langdon se encontra no centro de um mistério perigoso, desta vez desvendando os segredos do passado que podem mudar o futuro.', 'https://m.media-amazon.com/images/I/51O3FTiR9fL._SX326_BO1,204,203,200_.jpg'),
(14, 'Fortaleza digital', 336, 'Dan Brown', 'Editora Arqueiro', '1998-03-22', 'Fortaleza digital: Em um mundo cada vez mais conectado, um grupo de hackers assume o controle da NSA, e um talentoso criptógrafo é a única esperança para evitar um caos mundial.', 'https://m.media-amazon.com/images/I/410ZElgkrRL._SX346_BO1,204,203,200_.jpg'),
(15, 'Ponto de impacto', 448, 'Dan Brown', 'Editora Arqueiro', '2001-11-07', 'Ponto de impacto: Um thriller científico em que um cientista descobre uma descoberta chocante que pode revolucionar a humanidade, mas também ameaça a sua própria vida.', 'https://m.media-amazon.com/images/I/41Nl-nLMEzL._SX346_BO1,204,203,200_.jpg'),
(16, 'Diário de um Banana 3: A gota d’água', 224, 'Jeff Kinney', 'VR Editora', '2011-02-11', 'Diário de um Banana 3: A gota d’água: O terceiro livro da série traz mais peripécias do adorável e desajeitado Greg Heffley durante suas férias de verão.', 'https://m.media-amazon.com/images/I/51lqjrY6FUL._SX337_BO1,204,203,200_.jpg'),
(17, 'Diário de um Banana. Dias de Cão - Volume 4', 224, 'Jeff Kinney', 'VR Editora', '2012-05-14', 'Diário de um Banana. Dias de Cão - Volume 4: Greg entra no ensino médio e enfrenta novos desafios e situações hilárias.', 'https://m.media-amazon.com/images/I/51ksMLmVv9L._SX338_BO1,204,203,200_.jpg'),
(18, 'O ladrão de raios: Capa nova: 1', 400, 'Rick Riordan', 'Intrínseca', '2005-07-01', 'O ladrão de raios: Capa nova: 1: Percy Jackson, um garoto aparentemente normal, descobre ser um semideus e embarca em uma missão para recuperar o raio de Zeus e evitar uma guerra entre os deuses.', 'https://m.media-amazon.com/images/I/51yvcUb5tFL._SX323_BO1,204,203,200_.jpg'),
(19, 'O mar de monstros: Capa nova: 2', 304, 'Rick Riordan', 'Intrínseca', '2006-11-10', 'O mar de monstros: Capa nova: 2: Percy e seus amigos partem em uma busca pelo mítico Velocino de Ouro para salvar o acampamento dos semideuses da destruição.', 'https://m.media-amazon.com/images/I/51PiA-09C+L._SX323_BO1,204,203,200_.jpg'),
(20, 'A maldição do titã: Capa nova: 3', 336, 'Rick Riordan', 'Intrínseca', '2008-02-20', 'A maldição do titã: Capa nova: 3: Percy enfrenta a profecia do titã e uma perigosa jornada para deter Cronos, o Senhor dos Titãs.', 'https://m.media-amazon.com/images/I/51dswoszpiL._SX323_BO1,204,203,200_.jpg'),
(21, 'A batalha do labirinto: Capa nova: 4', 392, 'Rick Riordan', 'Intrínseca', '2009-05-18', 'A batalha do labirinto: Capa nova: 4: Percy adentra o Labirinto de Dédalo para encontrar uma forma de evitar que Cronos se erga e destrua o Olimpo.', 'https://m.media-amazon.com/images/I/51x30Xblv1L._SX323_BO1,204,203,200_.jpg'),
(22, 'O último olimpiano: Capa nova: 5', 384, 'Rick Riordan', 'Intrínseca', '2010-09-15', 'O último olimpiano: Capa nova: 5: A grande batalha final se aproxima, e Percy e seus amigos precisam se unir para enfrentar o exército de Cronos e evitar o caos total.', 'https://m.media-amazon.com/images/I/515u5OKYL0L._SX323_BO1,204,203,200_.jpg'),
(23, 'Percy Jackson e os olimpianos: Guia definitivo ', 148, 'Rick Riordan', 'Intrínseca', '2014-03-05', 'Percy Jackson e os olimpianos: Guia definitivo: Um guia completo com informações adicionais, entrevistas com personagens e curiosidades sobre o mundo dos semideuses.', 'https://m.media-amazon.com/images/I/41O5ynpMVCL._SY498_BO1,204,203,200_.jpg'),
(24, 'Os arquivos do semideus: Percy Jackson e os olimpianos', 135, 'Rick Riordan', 'Intrínseca', '2011-11-12', 'Os arquivos do semideus (Os Heróis do Olimpo): Um compilado de missões e aventuras protagonizadas pelos semideuses do acampamento Meio-Sangue.', 'https://m.media-amazon.com/images/I/41MZzsysoCL.jpg'),
(25, 'O herói perdido (Os Heróis do Olimpo Livro 1)', 565, 'Rick Riordan', 'Intrínseca', '2010-10-20', 'O herói perdido (Os Heróis do Olimpo Livro 1): Uma nova série se inicia, apresentando novos semideuses e uma trama envolvente com deuses gregos e romanos.', 'https://m.media-amazon.com/images/I/510OlNv2rbL.jpg'),
(26, 'O filho de Netuno: (Série Os heróis do Olimpo): 2', 432, 'Rick Riordan', 'Intrínseca', '2011-05-25', 'O filho de Netuno: (Série Os heróis do Olimpo): 2: Percy acorda sem memória e precisa se unir a novos amigos para enfrentar uma ameaça que pode desencadear uma guerra entre os deuses.', 'https://m.media-amazon.com/images/I/51umZZPy53L._SX345_BO1,204,203,200_.jpg'),
(27, 'A marca de Atena: (Série Os heróis do Olimpo): 3', 480, 'Rick Riordan', 'Intrínseca', '2012-10-12', 'A marca de Atena: (Série Os heróis do Olimpo): 3: Annabeth lidera uma perigosa missão para encontrar a deusa Atena e impedir uma guerra entre gregos e romanos.', 'https://m.media-amazon.com/images/I/51JMi4HlcXL._SX346_BO1,204,203,200_.jpg'),
(28, 'A casa de Hades: (Série Os heróis do Olimpo): 4', 496, 'Rick Riordan', 'Intrínseca', '2013-10-08', 'A casa de Hades: (Série Os heróis do Olimpo): 4: Os semideuses enfrentam desafios terríveis em seu caminho para as Portas da Morte, onde o destino do mundo está em jogo.', 'https://m.media-amazon.com/images/I/51testziHzL._SX346_BO1,204,203,200_.jpg'),
(29, 'O sangue do Olimpo: (Série Os Heróis do Olimpo): 5', 432, 'Rick Riordan', 'Intrínseca', '2014-10-07', 'O sangue do Olimpo: (Série Os Heróis do Olimpo): 5: A profecia se concretiza, e os semideuses devem lutar contra Gaia e seus gigantes para evitar a destruição total.', 'https://m.media-amazon.com/images/I/51wu9VUir4L._SX346_BO1,204,203,200_.jpg'),
(30, 'Semideuses e monstros (Percy Jackson e os Olimpianos)', 304, 'Rick Riordan', 'Intrínseca', '2009-03-15', 'Semideuses e monstros (Percy Jackson e os Olimpianos): Uma coletânea de histórias curtas que expandem o universo de Percy Jackson e seus amigos.', 'https://m.media-amazon.com/images/I/51hewrIAxgL.jpg'),
(31, 'Os diários do semideus (Os Heróis do Olimpo)', 0, 'Rick Riordan', 'Intrínseca', '2012-04-10', 'Os diários do semideus (Os Heróis do Olimpo): Relatos adicionais e emocionantes das jornadas dos semideuses do Acampamento Meio-Sangue.', 'https://m.media-amazon.com/images/I/51di2L-02YL.jpg'),
(32, 'A pirâmide vermelha: (Série As Crônicas Dos Kane): 1', 448, 'Rick Riordan', 'Intrínseca', '2010-06-10', 'A pirâmide vermelha: (Série As Crônicas Dos Kane): 1: Dois irmãos descobrem ser descendentes de uma linhagem de faraós e precisam aprender a utilizar magia egípcia para enfrentar ameaças sobrenaturais.', 'https://m.media-amazon.com/images/I/51mJD3GU+sL._SX346_BO1,204,203,200_.jpg'),
(33, 'O trono de fogo: (Série As crônicas dos Kane): 2', 400, 'Rick Riordan', 'Intrínseca', '2011-05-03', 'O trono de fogo: (Série As crônicas dos Kane): 2: Os irmãos Carter e Sadie embarcam em uma nova aventura para encontrar a fonte do poder dos deuses egípcios.', 'https://m.media-amazon.com/images/I/51Egaq4GpUL._SX346_BO1,204,203,200_.jpg'),
(34, 'A sombra da serpente: (Série As Crônicas Dos Kane): 3', 352, 'Rick Riordan', 'Intrínseca', '2012-05-01', 'A sombra da serpente: (Série As Crônicas Dos Kane): 3: Carter e Sadie enfrentam o Deus Serpente em uma batalha épica pelo controle do mundo dos deuses egípcios.', 'https://m.media-amazon.com/images/I/51MAmB81dxL._SX346_BO1,204,203,200_.jpg'),
(35, 'O filho de Sobek (Percy Jackson e os Olimpianos)', 53, 'Rick Riordan', 'Intrínseca', '2013-05-07', 'O filho de Sobek (Percy Jackson e os Olimpianos): Um crossover entre as séries Percy Jackson e Os Heróis do Olimpo, onde Percy e Carter Kane se unem para enfrentar uma ameaça comum.', 'https://m.media-amazon.com/images/I/51Iaz1VfxBL.jpg'),
(36, 'O cajado de Serápis (Magnus Chase e os deuses de Asgard)', 87, 'Rick Riordan', 'Intrínseca', '2016-09-20', 'O cajado de Serápis (Magnus Chase e os deuses de Asgard): Novamente, o encontro de dois mundos ocorre, desta vez reunindo Magnus Chase e Annabeth Chase em uma aventura sobrenatural.', 'https://m.media-amazon.com/images/I/51yqZzkupEL.jpg'),
(37, 'O Senhor dos Anéis: A Sociedade do Anel', 705, 'J.R.R. Tolkien', 'HarperCollins Brasil', '1954-07-29', 'O Senhor dos Anéis: A Sociedade do Anel: Neste épico de J.R.R. Tolkien, um humilde hobbit se une a um grupo improvável de heróis em uma jornada para destruir um anel poderoso e evitar a ascensão do mal.', 'https://m.media-amazon.com/images/I/41RBd2DvmgL.jpg'),
(38, 'O Senhor dos Anéis: As duas torres', 464, 'J.R.R. Tolkien', 'HarperCollins Brasil', '1954-11-11', 'O Senhor dos Anéis: As duas torres: A saga continua, enquanto a Sociedade do Anel se separa, enfrentando ameaças diversas em meio a uma guerra iminente.', 'https://m.media-amazon.com/images/I/41+rIB0PvgL._SX325_BO1,204,203,200_.jpg'),
(39, 'O Senhor dos Anéis: O retorno do rei', 662, 'J.R.R. Tolkien', 'HarperCollins Brasil', '1955-10-20', 'O Senhor dos Anéis: O retorno do rei: O desfecho emocionante da trilogia, com batalhas épicas e momentos decisivos para o futuro da Terra-média.', 'https://m.media-amazon.com/images/I/41KWSPU9wcL._SY346_.jpg'),
(40, 'Assassins Creed: Renascença', 378, 'Oliver Bowden', 'Galera', '2009-06-04', 'Assassins Creed: Renascença: Em uma narrativa envolvente, o leitor é transportado para o passado, seguindo as aventuras de um assassino habilidoso durante o Renascimento italiano.', 'https://m.media-amazon.com/images/I/51CQWq0v3DL._SX334_BO1,204,203,200_.jpg'),
(41, 'Assassins Creed: Irmandade', 392, 'Oliver Bowden', 'Galera', '2010-09-07', 'Assassins Creed: Irmandade: O assassino Ezio Auditore continua sua luta contra a Ordem dos Templários em busca de vingança e justiça.', 'https://m.media-amazon.com/images/I/41JUKfBWxhL._SX333_BO1,204,203,200_.jpg'),
(42, 'Assassins Creed: A cruzada secreta', 336, 'Oliver Bowden', 'Galera', '2011-08-30', 'Assassins Creed: A cruzada secreta: Uma emocionante trama que combina história e ficção, enquanto um assassino enfrenta inimigos poderosos em plena época das Cruzadas.', 'https://m.media-amazon.com/images/I/51JbDJM1vAL._SX334_BO1,204,203,200_.jpg'),
(43, 'Assassins Creed: Renegado', 350, 'Oliver Bowden', 'Galera', '2012-11-20', 'Assassins Creed: Renegado: Nesta continuação, o leitor acompanha as novas aventuras de Ezio Auditore, enfrentando desafios cada vez maiores.', 'https://m.media-amazon.com/images/I/51vcVpbmQSL._SX335_BO1,204,203,200_.jpg'),
(44, 'Assassins Creed: Revelações', 392, 'Oliver Bowden', 'Galera', '2011-11-29', 'Assassins Creed: Revelações: Em meio a segredos e descobertas, Ezio enfrenta novos desafios e busca respostas para o seu próprio destino.', 'https://m.media-amazon.com/images/I/51zy0gk6hIL._SX335_BO1,204,203,200_.jpg'),
(45, 'Assassins Creed: Bandeira Negra', 336, 'Oliver Bowden', 'Galera', '2013-12-04', 'Assassins Creed: Bandeira Negra: Um novo protagonista surge em meio aos piratas do Caribe, trazendo ação e aventura em alto mar.', 'https://m.media-amazon.com/images/I/51egly6d5OL._SY344_BO1,204,203,200_QL70_ML2_.jpg'),
(46, 'Assassins Creed: Unity', 364, 'Oliver Bowden', 'Galera', '2013-11-23', 'Assassins Creed: Unity: A franquia avança para a Revolução Francesa, onde um novo assassino enfrenta os horrores da revolta popular.', 'https://m.media-amazon.com/images/I/51UZrbWsLsL._SX337_BO1,204,203,200_.jpg'),
(47, 'Rangers Ordem dos Arqueiros 1. Ruínas de Gorlan', 239, 'John Flanagan', 'Fundamento', '2004-06-16', 'Rangers Ordem dos Arqueiros 1. Ruínas de Gorlan: Will, um jovem aprendiz de arqueiro, é enviado para o misterioso campo de treinamento de Ruínas de Gorlan, onde seu destino começa a se desenrolar.', 'https://m.media-amazon.com/images/I/511wDEGFW4L._SX340_BO1,204,203,200_.jpg'),
(48, 'Rangers Ordem dos Arqueiros 2. Ponte em Chamas', 224, 'John Flanagan', 'Fundamento', '2005-11-02', 'Rangers Ordem dos Arqueiros 2. Ponte em Chamas: Will embarca em novas aventuras, enfrentando perigosas missões e inimigos poderosos.', 'https://m.media-amazon.com/images/I/51X5PpJcb6L._SX340_BO1,204,203,200_.jpg'),
(49, 'Rangers Ordem dos Arqueiros 3. Terra do Gelo', 256, 'John Flanagan', 'Fundamento', '2006-09-15', 'Rangers Ordem dos Arqueiros 3. Terra do Gelo: A história continua em um território hostil, onde Will e seus companheiros enfrentam novos desafios e criaturas temíveis.', 'https://m.media-amazon.com/images/I/51LGKxsS9lL._SX344_BO1,204,203,200_.jpg'),
(50, 'Rangers Ordem dos Arqueiros 4. Folha de Carvalho ', 288, 'John Flanagan', 'Fundamento', '2007-04-05', 'Rangers Ordem dos Arqueiros 4. Folha de Carvalho: Em uma emocionante missão diplomática, Will e seus amigos devem enfrentar traições e ameaças para proteger o reino de Araluen.', 'https://m.media-amazon.com/images/I/51niyixtVbL._SX342_BO1,204,203,200_.jpg'),
(51, 'Rangers Ordem dos Arqueiros 5. Feiticeiro do Norte', 288, 'John Flanagan', 'Fundamento', '2008-07-02', 'Rangers Ordem dos Arqueiros 5. Feiticeiro do Norte: Will enfrenta o misterioso feiticeiro do norte, colocando suas habilidades de arqueiro à prova em uma missão perigosa.', 'https://m.media-amazon.com/images/I/51nXYGFu+zL._SX339_BO1,204,203,200_.jpg'),
(52, 'Rangers Ordem dos Arqueiros 6. Cerco a Macindaw', 296, 'John Flanagan', 'Fundamento', '2009-11-10', 'Rangers Ordem dos Arqueiros 6. Cerco a Macindaw: Will e seus companheiros se unem para libertar uma cidade sob cerco, enfrentando inimigos poderosos e um feiticeiro maligno.', 'https://m.media-amazon.com/images/I/51qEHiGUuGL._SX346_BO1,204,203,200_.jpg'),
(53, 'Rangers Ordem dos Arqueiros 7. Resgate de Erak', 392, 'John Flanagan', 'Fundamento', '2010-06-15', 'Rangers Ordem dos Arqueiros 7. Resgate de Erak: Will parte em uma perigosa jornada de resgate para salvar seu amigo Erak, enfrentando perigos inimagináveis.', 'https://m.media-amazon.com/images/I/51Cm5D4tHHL._SX345_BO1,204,203,200_.jpg'),
(54, 'Rangers Ordem dos Arqueiros 8. Reis de Clonmel', 360, 'John Flanagan', 'Fundamento', '2011-05-06', 'Rangers Ordem dos Arqueiros 8. Reis de Clonmel: Will deve ajudar Halt a desvendar um perigoso plano que ameaça o reino de Clonmel.', 'https://m.media-amazon.com/images/I/51iRTSXF-cL._SX347_BO1,204,203,200_.jpg'),
(55, 'Rangers Ordem dos Arqueiros 9. Halt em Perigo', 392, 'John Flanagan', 'Fundamento', '2012-07-02', 'Rangers Ordem dos Arqueiros 9. Halt em Perigo: Uma conspiração traz perigo a Halt, e Will se empenha em salvá-lo em uma emocionante busca.', 'https://m.media-amazon.com/images/I/51OaizmUrrL._SX346_BO1,204,203,200_.jpg'),
(56, 'Rangers Ordem dos Arqueiros 10. Imperador de Niho- Ja', 424, 'John Flanagan', 'Fundamento', '2012-09-20', 'Rangers Ordem dos Arqueiros 10. Imperador de Niho-Ja: Em uma missão diplomática, Will enfrenta desafios culturais e políticos no distante reino de Nihon-Ja.', 'https://m.media-amazon.com/images/I/51tLJKRVpLL._SY344_BO1,204,203,200_QL70_ML2_.jpg'),
(57, 'Rangers Ordem dos Arqueiros 11. Histórias Perdidas', 422, 'John Flanangan', 'Fundamento', '2013-12-10', 'Rangers Ordem dos Arqueiros 11. Histórias Perdidas: Uma coletânea de contos que expandem o universo dos arqueiros e seus aliados.', 'https://m.media-amazon.com/images/I/510t0Er2ThL._SY344_BO1,204,203,200_QL70_ML2_.jpg'),
(58, 'Rangers Ordem dos Arqueiros 12. Arqueiro do Rei', 408, 'John Flanagan', 'Fundamento', '2014-11-05', 'Rangers Ordem dos Arqueiros 12. Arqueiro do Rei: Neste emocionante desfecho da série, Will e seus amigos enfrentam uma última e perigosa missão para proteger Araluen.', 'https://m.media-amazon.com/images/I/51x8oEO0tJL._SY344_BO1,204,203,200_QL70_ML2_.jpg'),
(59, 'A mão esquerda de Deus', 354, 'Paul Hoffman', 'Suma', '2010-06-03', 'A mão esquerda de Deus: Ambientado em um mundo sombrio, este livro narra a jornada de um jovem destinado a se tornar a mão esquerda de Deus, o assassino mais perigoso do reino.', 'https://m.media-amazon.com/images/I/51OHF2c2haL._SY346_.jpg'),
(60, 'As últimas quatro coisas', 304, 'Paul Hoffman', 'Suma', '2011-09-20', 'As últimas quatro coisas: Nesta sequência, o protagonista continua sua jornada em um mundo brutal e implacável, buscando redenção e liberdade.', 'https://m.media-amazon.com/images/I/51wJ-YiPJyL._SY344_BO1,204,203,200_QL70_ML2_.jpg'),
(61, 'O bater de suas asas', 392, 'Paul Hoffman', 'Suma', '2012-04-15', 'O bater de suas asas: A história segue em um universo repleto de segredos e intrigas, onde um jovem busca respostas para os mistérios que cercam sua própria existência.', 'https://m.media-amazon.com/images/I/51KcuDki5KL._SY445_SX342_.jpg'),
(62, 'Deixados teen - Volume 1 - Desaparecidos', 152, 'Tim Lahaye', 'United Press', '2001-10-10', 'Deixados teen - Volume 1 - Desaparecidos: Em um cenário pós-apocalíptico, um grupo de jovens precisa sobreviver e desvendar o mistério por trás do desaparecimento de todos os adultos.', 'https://m.media-amazon.com/images/I/41VOIyQcT-L._SX299_BO1,204,203,200_.jpg'),
(63, 'Deixados teen - Volume 2 - Segunda chance', 152, 'Tim Lahaye', 'United Press', '2002-05-20', 'Deixados teen - Volume 2 - Segunda chance: O grupo de jovens sobreviventes enfrenta novos desafios e perigos em busca de uma nova chance em meio ao caos.', 'https://m.media-amazon.com/images/I/51gXM3ULumL._SY498_BO1,204,203,200_.jpg'),
(64, 'Deixados teen - Volume 3 - Através das chamas', 154, 'Tim Lahaye', 'United Press', '2003-08-30', 'Deixados teen - Volume 3 - Através das chamas: A jornada de sobrevivência continua, e os jovens enfrentam uma nova ameaça que pode destruir tudo o que construíram.', 'https://m.media-amazon.com/images/I/41iPd8RZGfL._SY498_BO1,204,203,200_.jpg'),
(65, 'Deixados teen - Volume 4 - Encarando o futuro', 154, 'Tim Lahaye', 'United Press', '2004-11-05', 'Deixados teen - Volume 4 - Encarando o futuro: Em meio a descobertas chocantes, o grupo luta para construir um futuro em um mundo destruído.', 'https://m.media-amazon.com/images/I/41QnQzHlwuL._SY498_BO1,204,203,200_.jpg'),
(66, 'Deixados teen - Volume 5 - Volta a escola', 144, 'Jewrry B. Jenkins e outro', 'United Press', '2006-02-15', 'Deixados teen - Volume 5 - Volta a escola: Em busca de respostas, os jovens retornam à escola onde tudo começou, encontrando novas ameaças e mistérios.', 'https://m.media-amazon.com/images/I/41u1YNlvFlL._SY498_BO1,204,203,200_.jpg'),
(67, 'Deixados teen - Volume 6 - Clandestino', 144, 'Jerry Jenkins', 'United Press', '2007-04-20', 'Deixados teen - Volume 6 - Clandestino: Novas alianças são formadas em meio à luta pela sobrevivência, enquanto segredos sombrios ameaçam o grupo.', 'https://m.media-amazon.com/images/I/41TP-aIS9uL._SX286_BO1,204,203,200_.jpg'),
(68, 'Deixados teen - Volume 7 - Atrás das grades', 144, 'Jerry B. Jenkins,Tim Lahaye', 'United Press', '2008-09-28', 'Deixados teen - Volume 7 - Atrás das grades: Os jovens se encontram em uma situação desesperadora ao serem capturados por uma misteriosa força.', 'https://m.media-amazon.com/images/I/51iXUWUT2cL._SX295_BO1,204,203,200_.jpg'),
(69, 'Deixados teen - Volume 8 - Tragédia', 160, 'Tim Lahaye', 'United Press', '2009-12-12', 'Deixados teen - Volume 8 - Tragédia: Emocionantes revelações e tragédias abalam o grupo, enquanto eles lutam para se manterem unidos em meio à adversidade.', 'https://m.media-amazon.com/images/I/41VMHWHMufL._SX290_BO1,204,203,200_.jpg'),
(70, 'Deixados teen - Volume 9 - Busca', 192, 'Tim Lahaye', 'United Press', '2011-03-07', 'Deixados teen - Volume 9 - Busca: Em busca de respostas, os jovens enfrentam novos desafios e perigos, desvendando segredos que mudarão suas vidas para sempre.', 'https://m.media-amazon.com/images/I/41C7O0B6HGL._SX281_BO1,204,203,200_.jpg'),
(71, 'Deixados teen - Volume 10 - Fuga', 192, 'Jerry Jenkins', 'United Press', '2012-06-05', 'Deixados teen - Volume 10 - Fuga: Em meio ao caos, os jovens embarcam em uma perigosa fuga em busca de um lugar seguro.', 'https://m.media-amazon.com/images/I/41YJlttw7ML._SX287_BO1,204,203,200_.jpg'),
(72, 'Sherlock Holmes - Um estudo em vermelho', 176, 'Arthur Conan Doyle', 'Principis', '1887-11-30', 'Sherlock Holmes - Um estudo em vermelho: A icônica história que apresenta o detetive Sherlock Holmes e o Dr. Watson, enquanto desvendam um caso de assassinato intrigante.', 'https://m.media-amazon.com/images/I/41XDTiGcN9L._SX346_BO1,204,203,200_.jpg'),
(73, 'O cão dos Baskerville: edição bolso de luxo', 264, 'Arthur Conan Doyle', 'Clássicos Zahar', '1902-04-01', 'O cão dos Baskerville: edição bolso de luxo: Holmes e Watson enfrentam uma maldição ancestral e um mistério sinistro envolvendo um cão sobrenatural.', 'https://m.media-amazon.com/images/I/41z+SqBlFvL._SX349_BO1,204,203,200_.jpg'),
(74, 'Mais aventuras de Sherlock Holmes', 208, 'Arthur Conan Doyle', 'Principis', '1892-10-31', 'Mais aventuras de Sherlock Holmes: Uma coletânea de casos fascinantes resolvidos por Sherlock Holmes, abrangendo desde roubos a assassinatos misteriosos.', 'https://m.media-amazon.com/images/I/513Jnn5DSCL._SX346_BO1,204,203,200_.jpg'),
(75, 'O signo dos quatro: edição bolso de luxo', 184, 'Arthur Conan Doyle', 'Clássicos Zahar', '1890-01-31', 'O signo dos quatro: edição bolso de luxo: Holmes e Watson são contratados para resolver um caso envolvendo um tesouro roubado e um mistério que remonta ao passado.', 'https://m.media-amazon.com/images/I/51QU+4JsTeL._SX350_BO1,204,203,200_.jpg'),
(76, 'As aventuras de Sherlock Holmes', 208, 'Arthur Conan Doyle', 'Principis', '1892-09-30', 'As aventuras de Sherlock Holmes: Esta coleção apresenta algumas das histórias mais famosas e desafiadoras de Sherlock Holmes, revelando sua genialidade como detetive.', 'https://m.media-amazon.com/images/I/51WQuxQZ7XL._SX346_BO1,204,203,200_.jpg'),
(77, 'Sherlock Holmes - O vale do medo', 224, 'Arthur Conan Doyle', 'Principis', '1915-09-01', 'Sherlock Holmes - O vale do medo: Holmes enfrenta um dos casos mais intrigantes de sua carreira, envolvendo uma sociedade secreta e crimes brutais.', 'https://m.media-amazon.com/images/I/51ijBb-VGIL._SX346_BO1,204,203,200_.jpg'),
(78, 'Memórias de Sherlock Holmes', 288, 'Arthur Conan Doyle', 'Principis', '1894-11-30', 'Memórias de Sherlock Holmes: Outra série de casos instigantes é apresentada, retratando a brilhante mente de Sherlock Holmes em ação.', 'https://m.media-amazon.com/images/I/51jPLnnxJAL._SX346_BO1,204,203,200_.jpg'),
(79, 'O último adeus de Sherlock Holmes', 272, 'Arthur Conan Doyle', 'Clássicos Zahar', '1917-11-01', 'O último adeus de Sherlock Holmes: Nesta última coletânea, Holmes se despede do público com casos finais emocionantes e cheios de suspense.', 'https://m.media-amazon.com/images/I/41ZsFjor9IL._SX343_BO1,204,203,200_.jpg'),
(80, 'Eragon', 480, 'Christopher Paolini', 'Rocco', '2002-06-01', 'Eragon: Neste épico de fantasia, um jovem fazendeiro descobre um ovo de dragão, desencadeando uma série de eventos que o levará a se tornar um lendário Cavaleiro de Dragão.', 'https://m.media-amazon.com/images/I/51p0K4EzZ8L._SX332_BO1,204,203,200_.jpg'),
(81, 'Eldest', 644, 'Christopher Paolini', 'Rocco', '2005-08-23', 'Eldest: A jornada de Eragon continua enquanto ele aprimora suas habilidades como Cavaleiro de Dragão e se vê envolvido em intrigas políticas e batalhas épicas.', 'https://m.media-amazon.com/images/I/51C0LPZTL7L._SX330_BO1,204,203,200_.jpg'),
(82, 'Brisingr', 708, 'Christopher Paolini', 'Rocco Jovens Leitores', '2008-09-20', 'Brisingr: A batalha entre o bem e o mal se intensifica, enquanto Eragon enfrenta desafios ainda maiores e se aproxima de seu destino.', 'https://m.media-amazon.com/images/I/51okiXp0rdS._SY498_BO1,204,203,200_.jpg'),
(83, 'Herança', 1040, 'Christopher Paolini ', 'Vestígio', '2011-11-08', 'Herança: O emocionante desfecho da saga Eragon, com batalhas épicas e reviravoltas surpreendentes.', 'https://m.media-amazon.com/images/I/41-cKGz7AWL.jpg'),
(84, 'A Guerra dos Tronos : As Crônicas de Gelo e Fogo, volume 1', 600, 'George R. R. Martin', 'Suma', '1996-08-06', 'A Guerra dos Tronos : As Crônicas de Gelo e Fogo, volume 1: Neste primeiro livro da série épica, os Sete Reinos são tomados por intrigas e conspirações enquanto diferentes famílias lutam pelo trono.', 'https://m.media-amazon.com/images/I/41UKpOWrZVL._SX346_BO1,204,203,200_.jpg'),
(85, 'A fúria dos reis: As Crônicas de Gelo e Fogo, volume 2', 648, 'George R.R. Martin', 'Suma', '1998-11-16', 'A fúria dos reis: As Crônicas de Gelo e Fogo, volume 2: A guerra pelo trono continua, e novas alianças são formadas em meio a traições e batalhas sangrentas.', 'https://m.media-amazon.com/images/I/51OxMUhiXwL._SX346_BO1,204,203,200_.jpg'),
(86, 'A tormenta de espadas: As Crônicas de Gelo e Fogo, volume 3', 832, 'George R.R. Martin', 'Suma', '2000-08-08', 'A tormenta de espadas: As Crônicas de Gelo e Fogo, volume 3: A luta pelo poder atinge o auge, com reviravoltas chocantes e consequências devastadoras.', 'https://m.media-amazon.com/images/I/51lbSoFZYwL._SX346_BO1,204,203,200_.jpg'),
(87, 'O Festim dos Corvos: As Crônicas de Gelo e Fogo, volume 4', 608, 'George R.R. Martin', 'Suma', '2005-10-17', 'O Festim dos Corvos: As Crônicas de Gelo e Fogo, volume 4: Com o reino dividido e em caos, novos jogadores entram em cena, trazendo novas intrigas e desafios.', 'https://m.media-amazon.com/images/I/41j4e8si8cL._SX346_BO1,204,203,200_.jpg'),
(88, 'A dança dos dragões: 5', 824, 'George R.R. Martin', 'Suma', '2011-07-12', 'A dança dos dragões: 5: Os eventos se desenrolam simultaneamente ao Festim dos Corvos, mostrando os desafios e as aventuras de personagens conhecidos e novos.', 'https://m.media-amazon.com/images/I/51SRGgaei2L._SX346_BO1,204,203,200_.jpg'),
(89, 'Prince of Thorns', 365, 'Mark Lawrence', 'Darkside', '2011-08-01', 'Prince of Thorns (Trilogia dos Espinhos Livro 1): Em um mundo pós-apocalíptico e sombrio, um jovem príncipe busca vingança e poder, enfrentando perigos e aliados improváveis.', 'https://m.media-amazon.com/images/I/51NuAuDIBXL.jpg'),
(90, 'King of Thorns', 528, 'Mark Lawrence', 'Darkside', '2012-08-07', 'King of Thorns (Trilogia dos Espinhos Livro 2): O príncipe amadurece e se torna rei, mas novos desafios surgem em seu caminho, testando sua coragem e determinação.', 'https://m.media-amazon.com/images/I/51NlXKTqU3L._SX373_BO1,204,203,200_.jpg'),
(91, 'Emperor of Thorns', 528, 'Mark Lawrence', 'Darkside', '2013-08-06', 'Emperor of Thorns (Trilogia dos Espinhos Livro 3): No aguardado desfecho da trilogia, o agora Imperador Jorg Ancrath enfrenta seu maior desafio: unificar um império fragmentado e enfrentar ameaças internas e externas. Com sua astúcia e crueldade lendárias, Jorg busca se consolidar como o governante mais temido e poderoso dos Reinos Destruídos. Entretanto, segredos sombrios do passado ressurgem para atormentá-lo, e alianças improváveis são formadas em meio a uma batalha épica pela supremacia. Envolto por intrigas políticas, confrontos mortais e uma perigosa busca por redenção pessoal, Jorg terá que decidir o preço a pagar para se tornar verdadeiramente o Imperador dos Espinhos. A conclusão emocionante e surpreendente desta trilogia de fantasia sombria que conquistou leitores ao redor do mundo.', 'https://m.media-amazon.com/images/I/51Xyb1Z+3OL._SX373_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_acervo` int(11) NOT NULL,
  `tx_comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcador`
--

CREATE TABLE `marcador` (
  `id_marcador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_acervo` int(11) NOT NULL,
  `qt_leu` int(11) NOT NULL,
  `qt_lendo` int(11) NOT NULL,
  `qt_Querem_ler` int(11) NOT NULL,
  `qt_Parou` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `marcador`
--

INSERT INTO `marcador` (`id_marcador`, `id_usuario`, `id_acervo`, `qt_leu`, `qt_lendo`, `qt_Querem_ler`, `qt_Parou`) VALUES
(1, 2, 1, 0, 1, 0, 0),
(2, 2, 2, 1, 0, 0, 0),
(3, 2, 4, 1, 0, 0, 0),
(4, 3, 4, 0, 0, 0, 1),
(5, 4, 4, 0, 1, 0, 0),
(6, 3, 3, 0, 0, 1, 0),
(7, 2, 81, 0, 1, 0, 0),
(8, 2, 10, 1, 0, 0, 0),
(9, 2, 83, 1, 0, 0, 0),
(10, 2, 80, 0, 0, 1, 0),
(11, 2, 66, 0, 0, 1, 0),
(12, 2, 26, 1, 0, 0, 0),
(13, 2, 16, 0, 1, 0, 0),
(14, 2, 8, 0, 1, 0, 0),
(15, 2, 19, 0, 1, 0, 0),
(16, 2, 18, 0, 0, 0, 1),
(17, 2, 51, 1, 0, 0, 0),
(18, 2, 52, 0, 0, 0, 1),
(19, 2, 44, 0, 0, 1, 0),
(20, 2, 48, 0, 1, 0, 0),
(21, 2, 72, 0, 1, 0, 0),
(22, 2, 17, 1, 0, 0, 0),
(23, 2, 13, 0, 0, 0, 1),
(24, 2, 15, 1, 0, 0, 0),
(25, 2, 14, 0, 0, 0, 1),
(26, 2, 79, 0, 1, 0, 0),
(27, 2, 53, 0, 0, 1, 0),
(28, 2, 32, 0, 0, 0, 1),
(29, 2, 33, 0, 1, 0, 0),
(30, 2, 68, 1, 0, 0, 0),
(31, 2, 6, 1, 0, 0, 0),
(32, 2, 59, 1, 0, 0, 0),
(33, 2, 36, 0, 1, 0, 0),
(34, 2, 39, 1, 0, 0, 0),
(35, 2, 62, 0, 0, 0, 1),
(36, 2, 84, 0, 1, 0, 0),
(37, 2, 34, 0, 1, 0, 0),
(38, 2, 74, 0, 1, 0, 0),
(39, 2, 21, 0, 0, 1, 0),
(40, 2, 61, 1, 0, 0, 0),
(41, 2, 49, 1, 0, 0, 0),
(42, 2, 63, 0, 0, 0, 1),
(43, 2, 56, 0, 1, 0, 0),
(44, 3, 20, 0, 1, 0, 0),
(45, 3, 64, 0, 0, 1, 0),
(46, 3, 31, 0, 0, 1, 0),
(47, 3, 11, 0, 0, 0, 1),
(48, 3, 24, 0, 0, 1, 0),
(49, 3, 34, 0, 0, 0, 1),
(50, 3, 6, 0, 0, 0, 1),
(51, 3, 87, 0, 0, 1, 0),
(52, 3, 73, 0, 1, 0, 0),
(53, 3, 21, 1, 0, 0, 0),
(54, 3, 42, 0, 1, 0, 0),
(55, 3, 35, 1, 0, 0, 0),
(56, 3, 90, 0, 0, 1, 0),
(57, 3, 10, 0, 0, 0, 1),
(58, 3, 78, 0, 0, 0, 1),
(59, 3, 81, 1, 0, 0, 0),
(60, 3, 68, 0, 1, 0, 0),
(61, 3, 51, 0, 0, 0, 1),
(62, 3, 88, 1, 0, 0, 0),
(63, 3, 15, 0, 1, 0, 0),
(64, 3, 70, 0, 1, 0, 0),
(65, 3, 41, 1, 0, 0, 0),
(66, 3, 32, 0, 1, 0, 0),
(67, 3, 49, 1, 0, 0, 0),
(68, 3, 75, 0, 0, 0, 1),
(69, 3, 8, 1, 0, 0, 0),
(70, 3, 82, 0, 1, 0, 0),
(71, 3, 43, 0, 0, 1, 0),
(72, 3, 22, 0, 0, 0, 1),
(73, 3, 84, 0, 1, 0, 0),
(74, 3, 61, 0, 1, 0, 0),
(75, 3, 2, 0, 1, 0, 0),
(76, 3, 18, 0, 0, 1, 0),
(77, 3, 44, 1, 0, 0, 0),
(78, 3, 1, 0, 0, 0, 1),
(79, 3, 80, 0, 1, 0, 0),
(80, 3, 46, 0, 0, 0, 1),
(81, 3, 72, 0, 0, 1, 0),
(82, 3, 36, 0, 1, 0, 0),
(83, 3, 77, 0, 1, 0, 0),
(84, 4, 35, 0, 0, 1, 0),
(85, 4, 12, 0, 0, 1, 0),
(86, 4, 60, 0, 0, 1, 0),
(87, 4, 15, 0, 1, 0, 0),
(88, 4, 68, 1, 0, 0, 0),
(89, 4, 47, 0, 1, 0, 0),
(90, 4, 63, 1, 0, 0, 0),
(91, 4, 69, 0, 0, 1, 0),
(92, 4, 64, 0, 0, 1, 0),
(93, 4, 74, 0, 1, 0, 0),
(94, 4, 27, 1, 0, 0, 0),
(95, 4, 72, 0, 1, 0, 0),
(96, 4, 11, 0, 0, 1, 0),
(97, 4, 71, 0, 0, 0, 1),
(98, 4, 5, 1, 0, 0, 0),
(99, 4, 26, 0, 0, 0, 1),
(100, 4, 83, 0, 0, 1, 0),
(101, 4, 33, 1, 0, 0, 0),
(102, 4, 31, 0, 0, 0, 1),
(103, 4, 17, 0, 1, 0, 0),
(104, 4, 61, 0, 0, 1, 0),
(105, 4, 78, 0, 1, 0, 0),
(106, 4, 39, 0, 0, 0, 1),
(107, 4, 55, 0, 0, 1, 0),
(108, 4, 16, 1, 0, 0, 0),
(109, 4, 85, 0, 0, 0, 1),
(110, 4, 19, 0, 0, 1, 0),
(111, 4, 56, 0, 0, 1, 0),
(112, 4, 52, 1, 0, 0, 0),
(113, 4, 87, 0, 0, 1, 0),
(114, 4, 80, 0, 0, 1, 0),
(115, 4, 79, 0, 0, 0, 1),
(116, 4, 22, 1, 0, 0, 0),
(117, 4, 43, 0, 0, 1, 0),
(118, 4, 36, 0, 0, 1, 0),
(119, 4, 53, 0, 1, 0, 0),
(120, 4, 34, 0, 1, 0, 0),
(121, 4, 24, 0, 0, 0, 1),
(122, 4, 50, 0, 1, 0, 0),
(123, 4, 42, 1, 0, 0, 0),
(124, 4, 86, 0, 0, 0, 1),
(125, 4, 23, 0, 1, 0, 0),
(126, 4, 13, 0, 0, 1, 0),
(127, 4, 57, 0, 1, 0, 0),
(128, 4, 62, 0, 0, 1, 0),
(129, 4, 45, 0, 0, 1, 0),
(130, 4, 30, 0, 0, 1, 0),
(131, 4, 73, 0, 1, 0, 0),
(132, 4, 32, 0, 0, 1, 0),
(133, 4, 70, 0, 0, 1, 0),
(134, 4, 84, 0, 1, 0, 0),
(135, 4, 3, 1, 0, 0, 0),
(136, 4, 44, 0, 0, 1, 0),
(137, 4, 59, 1, 0, 0, 0),
(138, 4, 49, 0, 0, 1, 0),
(139, 4, 9, 0, 0, 0, 1),
(140, 4, 58, 1, 0, 0, 0),
(141, 4, 46, 0, 0, 1, 0),
(142, 5, 67, 0, 0, 1, 0),
(143, 5, 19, 1, 0, 0, 0),
(144, 5, 62, 0, 0, 1, 0),
(145, 5, 13, 0, 1, 0, 0),
(146, 5, 14, 0, 1, 0, 0),
(147, 5, 29, 0, 0, 0, 1),
(148, 5, 18, 0, 1, 0, 0),
(149, 5, 58, 0, 1, 0, 0),
(150, 5, 45, 1, 0, 0, 0),
(151, 5, 33, 0, 0, 0, 1),
(152, 5, 55, 0, 1, 0, 0),
(153, 5, 3, 0, 0, 0, 1),
(154, 5, 35, 0, 1, 0, 0),
(155, 5, 50, 1, 0, 0, 0),
(156, 5, 74, 0, 0, 1, 0),
(157, 5, 48, 0, 0, 0, 1),
(158, 5, 22, 0, 0, 0, 1),
(159, 5, 1, 0, 0, 0, 1),
(160, 5, 57, 0, 0, 0, 1),
(161, 5, 70, 0, 0, 0, 1),
(162, 5, 40, 0, 0, 1, 0),
(163, 5, 21, 1, 0, 0, 0),
(164, 5, 10, 0, 1, 0, 0),
(165, 5, 7, 1, 0, 0, 0),
(166, 5, 51, 1, 0, 0, 0),
(167, 5, 26, 1, 0, 0, 0),
(168, 5, 60, 1, 0, 0, 0),
(169, 5, 47, 0, 1, 0, 0),
(170, 5, 59, 1, 0, 0, 0),
(171, 5, 52, 0, 0, 1, 0),
(172, 5, 78, 0, 0, 1, 0),
(173, 5, 65, 1, 0, 0, 0),
(174, 5, 17, 0, 1, 0, 0),
(175, 5, 82, 0, 1, 0, 0),
(176, 5, 36, 0, 0, 0, 1),
(177, 5, 84, 0, 0, 0, 1),
(178, 5, 43, 1, 0, 0, 0),
(179, 5, 83, 0, 1, 0, 0),
(180, 5, 34, 0, 0, 1, 0),
(181, 5, 46, 0, 1, 0, 0),
(182, 6, 65, 0, 0, 0, 1),
(183, 6, 82, 1, 0, 0, 0),
(184, 6, 53, 0, 0, 1, 0),
(185, 6, 49, 0, 1, 0, 0),
(186, 6, 52, 0, 0, 1, 0),
(187, 6, 56, 1, 0, 0, 0),
(188, 6, 71, 0, 1, 0, 0),
(189, 6, 41, 0, 0, 1, 0),
(190, 6, 68, 0, 1, 0, 0),
(191, 6, 39, 1, 0, 0, 0),
(192, 6, 60, 0, 0, 1, 0),
(193, 6, 5, 0, 0, 0, 1),
(194, 6, 22, 0, 1, 0, 0),
(195, 6, 28, 0, 0, 1, 0),
(196, 6, 25, 1, 0, 0, 0),
(197, 6, 42, 1, 0, 0, 0),
(198, 6, 46, 0, 0, 0, 1),
(199, 6, 31, 1, 0, 0, 0),
(200, 6, 84, 1, 0, 0, 0),
(201, 6, 67, 0, 1, 0, 0),
(202, 6, 55, 0, 0, 0, 1),
(203, 6, 40, 0, 0, 1, 0),
(204, 6, 36, 0, 1, 0, 0),
(205, 6, 4, 0, 0, 0, 1),
(206, 6, 7, 1, 0, 0, 0),
(207, 6, 83, 0, 0, 0, 1),
(208, 6, 50, 1, 0, 0, 0),
(209, 6, 69, 1, 0, 0, 0),
(210, 6, 77, 0, 0, 0, 1),
(211, 6, 3, 0, 1, 0, 0),
(212, 6, 85, 0, 0, 1, 0),
(213, 6, 88, 1, 0, 0, 0),
(214, 6, 18, 0, 0, 1, 0),
(215, 6, 45, 0, 1, 0, 0),
(216, 6, 51, 0, 1, 0, 0),
(217, 6, 34, 0, 0, 0, 1),
(218, 6, 73, 0, 0, 0, 1),
(219, 6, 70, 0, 0, 1, 0),
(220, 6, 19, 1, 0, 0, 0),
(221, 7, 62, 1, 0, 0, 0),
(222, 7, 53, 0, 0, 0, 1),
(223, 7, 76, 1, 0, 0, 0),
(224, 7, 57, 0, 1, 0, 0),
(225, 7, 89, 0, 0, 0, 1),
(226, 7, 29, 0, 0, 0, 1),
(227, 7, 38, 0, 0, 0, 1),
(228, 7, 72, 0, 0, 1, 0),
(229, 7, 75, 0, 0, 0, 1),
(230, 7, 24, 0, 1, 0, 0),
(231, 7, 44, 1, 0, 0, 0),
(232, 7, 56, 0, 0, 0, 1),
(233, 7, 2, 1, 0, 0, 0),
(234, 7, 77, 0, 0, 0, 1),
(235, 7, 1, 1, 0, 0, 0),
(236, 7, 79, 0, 0, 0, 1),
(237, 7, 32, 1, 0, 0, 0),
(238, 7, 42, 1, 0, 0, 0),
(239, 7, 5, 1, 0, 0, 0),
(240, 7, 85, 0, 0, 1, 0),
(241, 7, 82, 1, 0, 0, 0),
(242, 7, 71, 0, 0, 0, 1),
(243, 7, 67, 1, 0, 0, 0),
(244, 7, 73, 0, 0, 0, 1),
(245, 7, 45, 1, 0, 0, 0),
(246, 7, 26, 1, 0, 0, 0),
(247, 7, 21, 0, 0, 1, 0),
(248, 7, 34, 0, 0, 0, 1),
(249, 7, 33, 0, 0, 1, 0),
(250, 7, 74, 0, 0, 1, 0),
(251, 7, 28, 0, 0, 0, 1),
(252, 7, 17, 0, 1, 0, 0),
(253, 7, 15, 0, 0, 0, 1),
(254, 7, 55, 0, 1, 0, 0),
(255, 7, 50, 1, 0, 0, 0),
(256, 7, 18, 0, 1, 0, 0),
(257, 8, 46, 0, 0, 1, 0),
(258, 8, 7, 0, 0, 0, 1),
(259, 8, 57, 0, 1, 0, 0),
(260, 8, 36, 0, 0, 0, 1),
(261, 8, 14, 0, 0, 0, 1),
(262, 8, 63, 0, 0, 1, 0),
(263, 8, 15, 0, 0, 0, 1),
(264, 8, 1, 0, 1, 0, 0),
(265, 8, 24, 0, 0, 1, 0),
(266, 8, 71, 0, 1, 0, 0),
(267, 8, 79, 1, 0, 0, 0),
(268, 8, 31, 1, 0, 0, 0),
(269, 8, 51, 0, 0, 0, 1),
(270, 8, 22, 1, 0, 0, 0),
(271, 8, 61, 0, 1, 0, 0),
(272, 8, 49, 0, 0, 0, 1),
(273, 8, 82, 0, 0, 1, 0),
(274, 8, 58, 0, 0, 1, 0),
(275, 8, 74, 0, 1, 0, 0),
(276, 8, 73, 0, 0, 0, 1),
(277, 8, 76, 0, 0, 0, 1),
(278, 8, 17, 0, 0, 1, 0),
(279, 8, 77, 1, 0, 0, 0),
(280, 8, 40, 0, 0, 0, 1),
(281, 8, 80, 0, 1, 0, 0),
(282, 8, 10, 0, 0, 0, 1),
(283, 8, 88, 0, 0, 1, 0),
(284, 8, 69, 0, 0, 0, 1),
(285, 8, 89, 0, 1, 0, 0),
(286, 8, 19, 1, 0, 0, 0),
(287, 8, 65, 0, 1, 0, 0),
(288, 8, 28, 0, 0, 1, 0),
(289, 8, 18, 0, 0, 0, 1),
(290, 8, 13, 0, 0, 1, 0),
(291, 8, 68, 0, 1, 0, 0),
(292, 8, 39, 0, 0, 1, 0),
(293, 8, 27, 0, 0, 0, 1),
(294, 8, 83, 1, 0, 0, 0),
(295, 8, 66, 0, 0, 1, 0),
(296, 9, 13, 0, 0, 0, 1),
(297, 9, 15, 0, 0, 0, 1),
(298, 9, 55, 0, 0, 1, 0),
(299, 9, 54, 0, 1, 0, 0),
(300, 9, 48, 1, 0, 0, 0),
(301, 9, 61, 0, 0, 1, 0),
(302, 9, 63, 0, 0, 1, 0),
(303, 9, 28, 0, 1, 0, 0),
(304, 9, 8, 0, 0, 1, 0),
(305, 9, 7, 0, 0, 1, 0),
(306, 9, 2, 0, 0, 1, 0),
(307, 9, 26, 0, 0, 1, 0),
(308, 9, 69, 1, 0, 0, 0),
(309, 9, 67, 0, 1, 0, 0),
(310, 9, 59, 0, 0, 0, 1),
(311, 9, 35, 0, 0, 1, 0),
(312, 9, 49, 1, 0, 0, 0),
(313, 9, 25, 0, 0, 0, 1),
(314, 9, 87, 1, 0, 0, 0),
(315, 9, 58, 0, 0, 0, 1),
(316, 9, 45, 0, 0, 1, 0),
(317, 9, 75, 1, 0, 0, 0),
(318, 9, 11, 0, 0, 1, 0),
(319, 9, 72, 0, 0, 0, 1),
(320, 9, 27, 1, 0, 0, 0),
(321, 9, 41, 1, 0, 0, 0),
(322, 9, 9, 0, 0, 0, 1),
(323, 9, 5, 0, 0, 1, 0),
(324, 9, 23, 0, 0, 1, 0),
(325, 9, 89, 0, 0, 1, 0),
(326, 9, 4, 0, 0, 1, 0),
(327, 9, 64, 1, 0, 0, 0),
(328, 9, 36, 0, 1, 0, 0),
(329, 9, 83, 0, 0, 0, 1),
(330, 9, 29, 1, 0, 0, 0),
(331, 9, 12, 0, 0, 0, 1),
(332, 9, 17, 0, 0, 1, 0),
(333, 9, 37, 0, 0, 1, 0),
(334, 9, 38, 0, 0, 0, 1),
(335, 9, 46, 1, 0, 0, 0),
(336, 9, 57, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` text NOT NULL,
  `tx_password` text NOT NULL,
  `nv_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nm_usuario`, `tx_password`, `nv_usuario`) VALUES
(1, 'Admin', 'Admin*123', 1),
(2, 'Teste01', '123456', 0),
(3, 'Teste02', '123456', 0),
(4, 'Teste03', '123456', 0),
(5, 'Teste04', '123456', 0),
(6, 'Teste05', '123456', 0),
(7, 'Teste06', '123456', 0),
(8, 'Teste07', '123456', 0),
(9, 'Teste08', '123456', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acervo`
--
ALTER TABLE `acervo`
  ADD PRIMARY KEY (`id_acervo`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_acervo_comentario` (`id_acervo`),
  ADD KEY `id_usuario_comentario` (`id_usuario`);

--
-- Índices para tabela `marcador`
--
ALTER TABLE `marcador`
  ADD PRIMARY KEY (`id_marcador`),
  ADD KEY `usuario` (`id_usuario`) USING BTREE,
  ADD KEY `acervo` (`id_acervo`) USING BTREE;

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acervo`
--
ALTER TABLE `acervo`
  MODIFY `id_acervo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcador`
--
ALTER TABLE `marcador`
  MODIFY `id_marcador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `id_acervo_comentario` FOREIGN KEY (`id_acervo`) REFERENCES `acervo` (`id_acervo`),
  ADD CONSTRAINT `id_usuario_comentario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `marcador`
--
ALTER TABLE `marcador`
  ADD CONSTRAINT `acervo` FOREIGN KEY (`id_acervo`) REFERENCES `acervo` (`id_acervo`),
  ADD CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
