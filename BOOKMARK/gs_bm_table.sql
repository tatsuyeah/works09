-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 12 日 16:49
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db50`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(1, 'ゼロからわかる SQL超入門', 'http://gihyo.jp/book/2017/978-4-7741-9258-1', '独習書としてもセミナーの教科書としてもオススメ', '2017-09-28 22:12:06'),
(8, 'スッキリわかる SQL 入門', 'https://book.impress.co.jp/books/1111101167', '豊富な図解とていねいな解説により、やさしく・楽しくデータベースとSQLを学習できる入門書です。巻末には215問のドリルを掲載。これを繰り返し解くことでSQLが着実に身に付きます。本書の購入特典として、クラウドデータベース実行環境「dokoQL」をご用意しました。dokoQLはPCはもちろんスマートフォンからも利用できますので、自宅だけでなく通勤・通学中の「すきま時間」にもSQLとデータベースを学ぶことができます。本書に掲載したすべてのSQL文をdokoQLで呼び出して実行できますので、本書を読みながら実際にデータベースを操作することで、より深くSQLが理解できます。', '2017-09-29 00:08:45'),
(10, 'これならわかるSQL 入門の入門の入門', 'http://www.shoeisha.co.jp/book/detail/9784798114774', 'SQLには、パズルを解く楽しさに通じるものがあります。\r\nSQLの言語仕様は単純明快です。データ操作に限っていえば、基本的な命令は4つしかありません。これらをどのように使用して、いかに目的のデータ操作を達成するかが、SQLの持つ最大の魅力であり、パズルを解く楽しさに似ているところです。', '2017-09-29 01:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
