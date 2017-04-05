-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 �?02 �?14 �?01:07
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lanou`
--

-- --------------------------------------------------------

--
-- 表的结构 `lo_auser`
--

CREATE TABLE IF NOT EXISTS `lo_auser` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `position` tinyint(1) NOT NULL DEFAULT '0' COMMENT '讲师类型 0:PHP讲师 1:H5讲师 2: U3D讲师',
  `sex` tinyint(1) NOT NULL COMMENT '0：女  1 男',
  `tel` char(11) NOT NULL COMMENT '电话',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 0:禁用 1:启用',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `logtime` int(11) NOT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `lo_auser`
--

INSERT INTO `lo_auser` (`id`, `name`, `password`, `position`, `sex`, `tel`, `email`, `status`, `addtime`, `logtime`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 0, 1, '13422380515', '470907311@qq.com', 1, 0, 0),
(2, '潘宏刚', '', 0, 1, '13422380516', 'panhonggang@qq.com', 1, 0, 1486983082),
(3, '栾斌', '202cb962ac59075b964b07152d234b70', 2, 1, '13422343456', 'luanbin@qq.com', 1, 0, 1486983256);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
