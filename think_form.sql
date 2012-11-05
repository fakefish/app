-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2012 年 11 月 05 日 12:58
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `tp`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `think_form`
-- 

CREATE TABLE `think_form` (
  `id` smallint(4) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  `update_time` int(11) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- 导出表中的数据 `think_form`
-- 

INSERT INTO `think_form` VALUES (5, '哼(ˉ(∞)ˉ)唧', '\\(≧▽≦)/', 0, 1352111894, 0, 1, 'w@g.com');
INSERT INTO `think_form` VALUES (6, '(#‵′)凸', '哼(ˉ(∞)ˉ)唧', 0, 1352113223, 0, 1, 'd@g.com');
INSERT INTO `think_form` VALUES (7, '╭(╯^╰)╮', '\r\n╭︿︿︿╮\r\n{/-●●-/}\r\n ( (oo) )\r\n  ︶︶︶ ', 0, 1352118687, 0, 1, '');
INSERT INTO `think_form` VALUES (8, 'title', 'content', 0, 1352119963, 0, 1, '');
INSERT INTO `think_form` VALUES (9, '1', '12', 0, 1352120009, 0, 1, '');
INSERT INTO `think_form` VALUES (10, '124', '124', 0, 1352120016, 0, 1, '');
INSERT INTO `think_form` VALUES (11, '124124', '124', 0, 1352120053, 0, 1, '');
INSERT INTO `think_form` VALUES (12, 'asdfase', 'fawer t', 0, 1352120058, 0, 1, '');
