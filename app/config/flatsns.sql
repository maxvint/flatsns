-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 25 日 10:39
-- 服务器版本: 5.5.32
-- PHP 版本: 5.4.19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `flatsns`
--

-- --------------------------------------------------------

--
-- 表的结构 `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT '父级id',
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `type` char(50) NOT NULL COMMENT '类型',
  `content` text NOT NULL COMMENT '回复内容',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '发表时间',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `replies`
--

INSERT INTO `replies` (`id`, `pid`, `uid`, `type`, `content`, `created_at`, `updated_at`, `status`) VALUES
(1, 14, 0, 'topic', 'ffsf', 1387960680, 1387960680, 1),
(2, 14, 0, 'topic', '很不错哦', 1387961187, 1387961187, 1),
(3, 14, 0, 'topic', '很好的程序啊', 1387961198, 1387961198, 1),
(4, 14, 0, 'topic', '在一个项目当中，整合 第三应用的使用。使用钩子，如何分析操作流程。', 1387961219, 1387961219, 1);

-- --------------------------------------------------------

--
-- 表的结构 `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT '发布者uid',
  `title` varchar(255) DEFAULT NULL COMMENT '话题标题',
  `content` text COMMENT '话题内容',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `replied_at` int(10) NOT NULL DEFAULT '0' COMMENT '最后回复时间',
  `views` smallint(5) NOT NULL DEFAULT '0' COMMENT '浏览数',
  `replys` smallint(5) NOT NULL DEFAULT '0' COMMENT '评论数',
  `is_top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `is_hide` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `topics`
--

INSERT INTO `topics` (`id`, `uid`, `title`, `content`, `created_at`, `updated_at`, `replied_at`, `views`, `replys`, `is_top`, `is_hide`, `status`) VALUES
(3, 1, '该选择哪个语言开发爬虫？', '需要开发个采集腾讯、新浪微博的评论数据。\r\n如果直接使用官方提供的API，会有很多数据获取不到。所以可能得自己写了。\r\n我主要是想使用C++来开发的，其次才是PHP。在没办法的情况下，才会考虑使用python进行开发！\r\n网上大概了解了下，很多采集程序都是使用python来开发的。因为python的网络库很多，很丰富，开发起来方便快捷。\r\nPHP的也有个snoopy类库，C++的就不清楚了。\r\n不知道，C++中有没有这方面的爬虫类库推荐呢？\r\n\r\n需要开发个采集腾讯、新浪微博的评论数据。\r\n如果直接使用官方提供的API，会有很多数据获取不到。所以可能得自己写了。\r\n我主要是想使用C++来开发的，其次才是PHP。在没办法的情况下，才会考虑使用python进行开发！\r\n网上大概了解了下，很多采集程序都是使用python来开发的。因为python的网络库很多，很丰富，开发起来方便快捷。\r\nPHP的也有个snoopy类库，C++的就不清楚了。\r\n不知道，C++中有没有这方面的爬虫类库推荐呢？\r\n\r\n需要开发个采集腾讯、新浪微博的评论数据。\r\n如果直接使用官方提供的API，会有很多数据获取不到。所以可能得自己写了。\r\n我主要是想使用C++来开发的，其次才是PHP。在没办法的情况下，才会考虑使用python进行开发！\r\n网上大概了解了下，很多采集程序都是使用python来开发的。因为python的网络库很多，很丰富，开发起来方便快捷。\r\nPHP的也有个snoopy类库，C++的就不清楚了。\r\n不知道，C++中有没有这方面的爬虫类库推荐呢？', 1385522391, 1385522391, 1385522391, 0, 0, 0, 0, 1),
(5, 1, '再提LBS经纬度搜索和距离排序，求更优方案', '一直在琢磨LBS，期待可以发现更好的方案。现在纠结了。\n\n简单列举一下已经了解到的方案：\n1.sphinx geo索引\n2.mongodb geo索引\n3.mysql sql查询\n4.mysql+geohash\n5.redis+geohash\n\n然后列举一下需求：\n1.实时性要高，有频繁的更新和读取\n2.可按距离排序支持分页\n3.支持多条件筛选（一个经纬度数据还包含其他属性，比如社交系统的性别、年龄）\n\n方案简单介绍：\n1.sphinx geo索引\n支持按照距离排序，并支持分页。但是尝试mva+geo失败，还在找原因。\n无法满足高实时性需求。（可能是不了解实时增量索引配置有误）\n资源占用小，速度快\n\n2.mongodb geo索引\n支持按照距离排序，并支持分页。支持多条件筛选。\n可满足实时性需求。\n资源占用大，数据量达到百万级请流量在10w左右查询速度明显下降。\n\n3.mysql+geohash/ mysql sql查询\n不支持按照距离排序（代价太大）。支持分页。支持多条件筛选。\n可满足实时性需求。\n资源占用中等，查询速度不及mongodb。\n且geohash按照区块将球面转化平面并切割。暂时没有找到跨区块查询方法（不太了解）。\n\n4.redis+geohash\ngeohash缺点不再赘述', 1385524956, 1385524956, 1385524956, 0, 12, 0, 0, 1),
(6, 1, '程序很简洁 不知道问答形式的能转换过来不', '这是我用一个问答程序做的社区，感觉很不好用。转过过来的可能性多大\r\n网站：http://www.diaotoufa.cn/ 刚升级，丢了很多数据，我要回档到备份。', 1385525119, 1385525119, 1385525119, 0, 0, 0, 0, 1),
(7, 1, '达人们出一份详细的安装教程吧', '达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！\r\n\r\n达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！\r\n\r\n\r\n达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！达人们出一份详细的安装教程吧！ 研究安装太费时间了！', 1385525144, 1385525144, 1385525144, 0, 0, 0, 0, 1),
(9, 1, '百度百科右侧文档导航条是怎么做的？', '我是这样想的：\r\n\r\n在指定的class前面加上<a name="2"></a>，这个应该可以通过jquery全部收索到吧，然后根据检索到的数量，为改变每个name的值，然后就是右侧的导航了，浮动的，游标再定位，添加相应href。\r\n\r\n想请教下有相关的案例不？\r\n\r\n我自己找到了一个例子：', 1385525183, 1385525183, 1385525183, 0, 0, 0, 0, 1),
(10, 1, '谁能帮我修正这段JS代码的错误？', '我从别的网站挖过来的一段JS代码，\r\n\r\n就是个返回顶部 的JS效果\r\n\r\n但在Chrome中报这个错误，请问该如何解决呢？', 1385525199, 1385525199, 1385525199, 0, 0, 0, 0, 1),
(11, 1, '返回json数据无法使用$.each()遍历', '使用$.get()向后台（使用Django）请求数据，生成JSON格式数据返回。 回调函数中能够收到数据（使用alert(data)显示返回的数据）。但是使用$.each()却无法遍历data。 将alert函数中显示的返回数据拷贝并替换each中的data，each却能正常工作。 我在后台试了将Content-Type设置为plain，javascript和json都无效，请问该如何解决这个问题？', 1385525260, 1385525260, 1385525260, 256, 0, 0, 0, 1),
(14, 0, '怎么判断网站使用那种语言开发？', '1. 根据 meta 信息判断\r\n\r\n不少的网站会在 meta 添加框架的信息，比如 Joomla、XOOPS、MediaWiki 会添加 generator；phpBB 会添加 copyright；Avactis 会添加 author。通过这些可以探测网站使用的建站系统，从而知道使用的语言。\r\n\r\n2. 根据 script 标签判断\r\n\r\n和上面的一样，探测网站使用的建站系统，从而知道使用的语言。\r\n\r\n3. 根据 header 信息\r\n\r\n通过 header 信息的 x-powered-by 等可以探测后台使用的语言\r\n\r\n4. 根据 session\r\n\r\n根据传递 session id 的 cookie，比如 PHP 使用的会话ID是 PHPSESSID，JSP 使用的会话 ID 是 JSESSION。\r\n\r\n5. 根据 error page\r\n\r\n通过 error page 也可以看到很多信息。比如订票网站就是 Java 开发的。\r\n\r\n6. 根据目录结构\r\n\r\n包括 url 的结构，静态文件的结构等，如果使用了开发框架或者 CMS 系统，这些目录结构都有一定的规则。\r\n\r\n7. 根据网页内容\r\n\r\n可以用正则去匹配 HTML 代码，找出 copyright、powered by，进而得知使用的语言。\r\n\r\n8. 根据 server\r\n\r\n通过 404 或者 header 信息，得出 server 信息，进而得知编程语言，比如 nodejs、tomcat等。', 1387939900, 1387955915, 0, 15, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `openid` char(32) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `homepage` varchar(50) DEFAULT NULL,
  `money` int(10) DEFAULT '100',
  `signature` text,
  `forums` int(10) DEFAULT '0',
  `replies` int(10) DEFAULT '0',
  `notices` smallint(5) DEFAULT '0',
  `follows` int(10) NOT NULL DEFAULT '0',
  `created_at` int(10) DEFAULT NULL,
  `lastlogin` int(10) DEFAULT NULL,
  `lastpost` int(10) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `group_type` tinyint(3) NOT NULL DEFAULT '0',
  `gid` tinyint(3) NOT NULL DEFAULT '3',
  `ip` char(15) DEFAULT NULL,
  `location` varchar(128) DEFAULT NULL,
  `token` varchar(40) DEFAULT NULL,
  `introduction` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`,`group_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `openid`, `email`, `avatar`, `homepage`, `money`, `signature`, `forums`, `replies`, `notices`, `follows`, `created_at`, `lastlogin`, `lastpost`, `qq`, `group_type`, `gid`, `ip`, `location`, `token`, `introduction`, `is_active`) VALUES
(1, 'yuwenhui1986', '96e79218965eb72c92a549dd5a330112', '', 'yuwenhui1986@163.com', NULL, NULL, 100, NULL, 0, 0, 0, 0, 1385523862, 1385997511, NULL, NULL, 2, 3, '120.192.230.202', NULL, NULL, NULL, 1),
(2, '168834615', '96e79218965eb72c92a549dd5a330112', '', '168834615@qq.com', NULL, NULL, 100, NULL, 0, 0, 0, 0, 1385546468, NULL, NULL, NULL, 2, 3, '218.200.62.90', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- 表的结构 `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `group_type` tinyint(3) NOT NULL DEFAULT '0',
  `group_name` varchar(50) DEFAULT NULL,
  `usernum` int(10) NOT NULL,
  PRIMARY KEY (`gid`,`group_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user_groups`
--

INSERT INTO `user_groups` (`gid`, `group_type`, `group_name`, `usernum`) VALUES
(1, 0, '管理员', 1),
(2, 1, '版主', 0),
(3, 2, '普通会员', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
