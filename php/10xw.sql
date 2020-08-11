-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 12 月 22 日 20:46
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `schoolnew`
--
CREATE DATABASE `schoolnew` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `schoolnew`;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tilte` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `updatetime` date DEFAULT NULL,
  `author` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `newsclass` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `guanjianzi` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `shenhe` int(11) DEFAULT NULL,
  `visit` int(11) DEFAULT NULL,
  `newsimg` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `tilte`, `content`, `updatetime`, `author`, `newsclass`, `guanjianzi`, `shenhe`, `visit`, `newsimg`) VALUES
(1, '这么多高薪的工作没人愿意做，你不是穷，是懒！', '摆地摊有多赚钱？经常出去吃烧烤的就可以知道烧烤有多赚钱了，一顿烧烤随随便便要几十上百，烧烤的成本又低，利润特别高。一天有一千营业额的话，至少可以赚500，过万都轻轻松松。摆烧烤摊是种什么感受呢？不过多累，光是黑白颠倒就让大多数人受不了。', '2018-12-22', 'mini.eastday.com', '社会', '摆地摊，收破烂', 1, 0, NULL),
(2, '盘点最有收藏价值的两枚一元硬币，单枚最高2000元，你有吗？', '硬币是我国发行的辅币，其中一元面额的有三类，分别是长城币、牡丹一元和现在使用的菊花一元，现在随着网络支付和移动支付的兴起，硬币流通作用大大减弱，一些硬币过早的进入了收藏领域，下面小编就来聊聊最具有收藏价值的两枚一元硬币。', '2018-12-23', 'mini.eastday.com', '财经', '硬币，长城币', 1, 0, NULL),
(3, '火箭弃将：周琦、安东尼有新消息了！前者充满希望，后者让人惋惜', '在上一场大胜华盛顿奇才队后，火箭队已经喜获了5连胜佳绩。在该场比赛中，他们还把NBA的单场三分球进球数提升至了26个。就在火箭全队上下一致认为，他们能获得更长连胜的时候，火箭队在今日远征迈阿密挑战热火队的比赛中，却再度遗憾败北！停下了他们连胜步伐的同时，还送给迈阿密人三连胜。', '2018-12-23', 'mini.eastday.com', '体育', '火箭队，周琦、安东尼', 1, 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
