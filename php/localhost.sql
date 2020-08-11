-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 01 月 06 日 16:47
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `school`
--
CREATE DATABASE `school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `school`;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `autor` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `thumbnail` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `hits` int(10) DEFAULT NULL,
  `updatetime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=53 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `classname`, `title`, `autor`, `content`, `thumbnail`, `hits`, `updatetime`) VALUES
(1, '校园动态', '河源技师学院文化广场晚会', '校信息中心', '河源技师学院文化广场晚会只有照片', NULL, 1, '2018-12-09'),
(2, '时事聚焦', '我校举行中国象棋挑战赛', '校信息中心', '4月18日下午，由学校团委主办、我校棋艺协会承办的中国象棋挑战赛在七号楼广场成功举行。', NULL, 0, '2018-12-02'),
(3, '时事聚焦', '锁定目标 争当高技能人才', '校信息中心', '为加强学生就业指导工作，帮助学生树立正确就业观，4月18日下午，机械教学部在培训楼讲学厅举行2016届毕业生就业指导讲座。讲座由公共教学部万俊老师主讲，机械教学部2011级全体班主任及', NULL, 0, '2018-12-03'),
(4, '时事聚焦', '广东省所有农村学生入读中职免学费', '校信息中心', '据悉，近日由省财政厅、省发改委、省教育厅、省人力资源和社会保障厅等四部门联合发布了《关于扩大中等职业教育免学费政策范围 进一步完善国家助学金制度的实施意见》(以下简称《意见》)', NULL, 0, '2018-12-09'),
(5, '时事聚焦', '计算机教学部召开学生实践商场实训总结暨表彰大会 ', '校信息中心', '4月16日晚，我校计算机教学部在培训楼讲学厅召开学生实践商场实训总结暨表彰大会，对2012——2016学年在学生实践商场实训表现优异的学生进行表彰。计算机教学部主任朱少威，实践商场指导', NULL, 0, '2018-12-09'),
(6, '时事聚焦', '我校举行第三期新闻写作培训班', '校信息中心', '为进一步加强学校宣传队伍建设，提高通讯员新闻写作能力，4月17日下午，我校在一号楼大会议室举行第三期新闻写作培训班。', NULL, 0, '2018-12-07'),
(7, '时事聚焦', '我校第三届教职工篮球赛开幕', '校信息中心', '4月16日下午，我校第三届教职工篮球赛在篮球场开幕。邓德兴副校长、学校工会副主席张均汉、商汇通投资有限公司河源分公司总经理张宇强校友出席了开幕式。', NULL, 0, '2018-12-07'),
(8, '时事聚焦', '我校教师赴广州参加现代教育技术培训', '校信息中心', '4月9日至16日，我校两位老师共赴广东省国防科技技师学院参加为期一周的全省技工院校现代教育技术（多媒体制作）培训。', NULL, 0, '2018-12-03'),
(9, '校园动态', '紫金县技工学校到我校交流学习', '校信息中心', '4月8日上午，紫金县技工学校朱振辉副校长一行5人到我校交流“校企双制”办学及退役士兵职业技能培训管理经验。', NULL, 0, '2018-12-01'),
(10, '时事聚焦', '我校召开2011级“东芝”班动员大会', '校信息中心', '4月14日晚，我校在8号楼104阶梯课室召开2011级“东芝班”开班动员大会。', '', 0, '2018-12-03'),
(11, '时事聚焦', '我校与吉林工程技术师范学院共建师资培训基地 ', '校信息中心', '4月9日，我校校长一行5人前往吉林工程技术师范学院，与该校共同签订了《共建师资培训基地协议书》，并为培训基地揭牌。吉林工程技术师范学院校长王建华、副校长刘君义等领导出席了签约仪', NULL, 0, '2018-12-03'),
(12, '校园动态', '财会教学部第二届才艺大比拼活动顺利开展', '校信息中心', '4月10日下午，财会教学部在实训楼广场举行第二届才艺大比拼活动。财会教学部主任邓贵霞、副主任刘文静出席此次比赛并担任评委。', NULL, 0, '2018-12-04'),
(13, '时事聚焦', '我校光伏专业与中国太阳能光伏产业校企合作职教联盟初步达成合作意向', '校信息中心', '为加快国家示范校重点专业建设步伐，搭建更高合作平台助推内涵发展，4月11日，中国太阳能光伏产业校企合作职教联盟秘书长陈建民到校访问，就我校太阳能光伏发电技术专业加入全国光伏产业', NULL, 0, '2018-12-05'),
(14, '校园动态', '与法制同行 为成长护航', '校信息中心', '4月10日晚，纪念宪法实施30周年法律知识竞赛在实训楼讲学厅敲响战鼓，来自7个不同教学部的代表队进行了激烈的角逐。公共教学部杨小琼主任出席了比赛现场，公共教学部李艳副主任、汽车维修谢平副主任等五位老师担任比赛评委。', NULL, 0, '2018-12-05'),
(15, '校园动态', '面对就业，你准备好了吗', '校信息中心', '为使广大毕业生更好地认清就业形势，帮助其树立正确的就业观、择业观，4月9日，我校在体育馆召开了2011级学生就业指导报告会。会议由招生就业科邱志才科长主持，张海锋校长主讲，2011级', '../upload/IMG201901060435051847.png', 0, '2019-01-06');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `adminlevel` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `adminlevel`) VALUES
(1, 'admin', '123456', '超级管理员'),
(5, 'xx', '00002', '一般管理员'),
(12, 'xx1', '0000222', '超级管理员'),
(15, 'xx122', '00001', '超级管理员');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
