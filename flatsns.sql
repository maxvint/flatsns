-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 05 月 12 日 11:42
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
-- 表的结构 `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `views` smallint(6) NOT NULL DEFAULT '0',
  `replies` smallint(6) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `is_del` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `items`
--

INSERT INTO `items` (`id`, `title`, `content`, `price`, `views`, `replies`, `created_at`, `updated_at`, `is_del`) VALUES
(1, 'Cubify Cube - 3D 打印机噢', 'Cubify Cube - 3D 打印机噢', 0, 0, 0, 1389230856, 1389230856, 0),
(2, 'bobble 水壶 - 手动挤一挤，让水不断经过', 'bobble 水壶 - 手动挤一挤，让水不断经过', 0, 0, 0, 1389230856, 1389230856, 0),
(3, 'Vektor - 超薄望远镜', 'Vektor - 超薄望远镜', 0, 0, 0, 1389230856, 1389230856, 0),
(4, 'Broadlink Wi-Fi智能插座 - 智能家居必备', 'Broadlink Wi-Fi智能插座 - 智能家居必备', 0, 0, 0, 1389230856, 1389230856, 0),
(5, 'Philips The Airfryer - 用空气炸薯条', 'Philips The Airfryer - 用空气炸薯条', 0, 0, 0, 1389230856, 1389230856, 0),
(6, 'Withings Wifi 体重计 - 体重自动上传云端', 'Withings Wifi 体重计 - 体重自动上传云端', 0, 0, 0, 1389230856, 1389230856, 0),
(7, 'GGMM iLight Bracket支架灯 - 多角度可', 'GGMM iLight Bracket支架灯 - 多角度可', 0, 0, 0, 1389230856, 1389230856, 0),
(8, 'Play Video Memo - 录下你的留言', 'Play Video Memo - 录下你的留言', 0, 0, 0, 1389230856, 1389230856, 0),
(9, 'KOHLER Moxie - 蓝牙音箱淋浴喷头', 'KOHLER Moxie - 蓝牙音箱淋浴喷头', 0, 0, 0, 1389230856, 1389230856, 0),
(10, 'Abrasus – Triangle Commuter Bag - 设', 'Abrasus – Triangle Commuter Bag - 设', 0, 0, 0, 1389230856, 1389230856, 0),
(11, 'Herman Miller Embody - 12年才设计出', 'Herman Miller Embody - 12年才设计出', 0, 0, 0, 1389230856, 1389230856, 0),
(12, 'GoPro HERO3+ Black Edition - 运动拍', 'GoPro HERO3+ Black Edition - 运动拍', 0, 0, 0, 1389230856, 1389230856, 0);

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_01_02_112217_create_users_table', 1),
('2014_01_02_120305_create_users_table', 2),
('2014_01_02_123710_create_topics_table', 2),
('2014_01_02_123724_create_replies_table', 2),
('2014_01_08_081950_create_session_table', 2),
('2014_01_08_183032_create_goods_table', 2),
('2014_01_08_183032_create_items_table', 3);

-- --------------------------------------------------------

--
-- 表的结构 `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL,
  `uid` int(10) unsigned NOT NULL,
  `type` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `replies_created_at_index` (`created_at`),
  KEY `replies_updated_at_index` (`updated_at`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `replies`
--

INSERT INTO `replies` (`id`, `pid`, `uid`, `type`, `content`, `created_at`, `updated_at`, `is_del`) VALUES
(1, 1, 1, 'topic', 'fsdfsdfsd', 1389182594, 1389182594, 0),
(2, 1, 1, 'topic', 'fdsfsdsfsdfs', 1389182603, 1389182603, 0),
(3, 1, 1, 'topic', 'fsdfsdfsd', 1389182619, 1389182619, 0);

-- --------------------------------------------------------

--
-- 表的结构 `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `replied_at` int(11) NOT NULL,
  `views` smallint(6) NOT NULL DEFAULT '0',
  `replies` smallint(6) NOT NULL DEFAULT '0',
  `is_top` tinyint(1) NOT NULL DEFAULT '0',
  `is_hide` tinyint(1) NOT NULL DEFAULT '0',
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `topics_created_at_index` (`created_at`),
  KEY `topics_updated_at_index` (`updated_at`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `topics`
--

INSERT INTO `topics` (`id`, `uid`, `title`, `content`, `created_at`, `updated_at`, `replied_at`, `views`, `replies`, `is_top`, `is_hide`, `is_del`) VALUES
(1, 1, '使用jquery获取父级元素的属性', '<p >我想通过jquery获取a标签的父级元素的属性来为a的href添加参数<br>比如a的父级dom元素为div，其属性from的值为test，则在这个a后添加&test,如果父级元素无from属性，则再往上查找，知道找到含有from属性的父元素。<br>思路如下：<br>1、查找所有a节点<br>2、获取其父类，一级一级往上找，使用closest()查找，获取其from参数值<br>3、判断a节点的href属性是否包含?，包含则直接添加 &from ，否则添加?&from 如果添加href为javascript:或者 javascript:void(0) 时则不改变其href属性<br>现在问题就是，这个函数里面父元素的标签可能不唯一，即可能不仅仅为div，还有span等等。</p><p >这是我的实现，但是有部分问题</p><pre  >$(<span  >"a"</span>).click(<span ><span  >function</span> <span  >a</span><span >()</span> {</span>\r\n<span  >var</span> node = $(<span  >this</span>);\r\n<span  >var</span> href = node.attr(<span  >"href"</span>);\r\n<span  >if</span> (href === <span  >''javascript:''</span> || href === <span  >"javascript:void(0)"</span> || href === <span  >''''</span>) {} <span  >else</span> {\r\n    <span  >var</span> <span  >isset</span> = <span  >''?''</span>;\r\n    <span  >do</span> {\r\n        <span  >var</span> <span  >parent</span> = node.<span  >parent</span>();\r\n        <span  >isset</span> = <span  >parent</span>.attr(<span  >"from"</span>);\r\n    }\r\n    <span  >while</span> (<span  >isset</span> === <span  >''undifined''</span>);\r\n    $(<span  >this</span>).href += <span  >isset</span>;\r\n}\r\n});</pre>', 1389182550, 1389182619, 0, 0, 3, 0, 0, 0),
(2, 1, 'Play Video Memo - 录下你的留言', '<p >看到到这个问题很高兴。因为不久后的将来我也会做毕业设计<br><strong>如何选课题？</strong><br>毕业设计关系到以后的就业，所以选一门好的课题很重要。上面有人提到大数据，这个词几乎是快被业内的人说烂了，但是真正会用大数据的很少！大数据主要是数据的处理，这个题目比较有难。里面最基础的需要是算法和数学。数据密集型的任务所需求的算法的复杂度要求必须为线性或近线性（near-linear），甚至于亚线性（sub-linear）。还有很多对于数据的处理的算法。而看你在这里提问一开始就选b2C商城说明你的算法和数学基础不怎样（恕我猜测）。如果做大数据你必须能够保证有一个好的导师与好的基础。<br>如果非研究型课题不要选太超前的方向，资料太少。很多资料大多在一个研究室或者是一些实力较强的校园数字图书馆里面。但也不要选太拖腿的课题。因为有些东西都已经被玩烂了或者是已经被淘汰了。（PS.学籍管理系统、商城系统、etc）.<br>说了这么多，应该会到原地说点比较切合目前实际的课题。我这里先说几个移动方面并且切合你的开发语言的两个移动应用方向的课题《基于微信的C2C移动商城》，《基于Android的信息管理系统》。web方向我推荐是《基于hadoop分布式存储系统》、《基于OpenStack的私有云》。</p><p ><strong>如何写毕业设计？</strong><br>使用google先搜索关键字，做之前你必须知道这是什么我以《基于微信的C2C移动商城》为例子，关键词组合搜索：微信开放平台，微信支付，移动商城，C2C，商城系统设计，购物系统设计，移动电子商务，移动购物app设计与架构。<br>然后把上面所需要的信息记录下来利用google 学术搜索在学校的校园网里面下载一些需要的论文。<br>整理，找老师。这样下来的一篇论文不会差。从你给出的信息来说题主应该不是重点本科院校的学生。所以More power to your elbow!</p>', 1389182860, 1389248595, 0, 0, 0, 0, 0, 0),
(3, 1, 'fdsfsdfsd', 'fdsfdsfsdfsfss', 1389238832, 1389238845, 0, 0, 0, 0, 0, 0),
(4, 1, '怎样才能加入到微信团队工作？', '<span >曾拿到过微信产品部两个版本的口头offer，最后没有去，原因大概是对微信的下限预估不足。如果题主希望加入微信，尤其是产品的话，最好先刷低下限，降低期望，以防因为被恶心到惊呆而去不成。以下为我的实际经历，供题主做心理准备：</span><br ><ol ><li >3-5轮的电话面试，前后持续一个半月</li><li >飞去广州现场面试</li><li >现场第二天得到面试官（部门经理）来信，大意是：“加入微信产品团队吧”</li><li >杳无音信的三周</li><li >HR来电，口头提出一闻所未闻之优厚offer，并说万事俱备，只欠张小龙签字</li><li >杳无音信的三周</li><li >HR深夜来信，说之前的口头offer不算，要电话补面一轮。当夜12点，电话补面一轮</li><li >杳无音信的一周</li><li >HR再次来电，大意是之前承诺的都不算数，现在只能给你一极普通之offer，这是张小龙的意思。我提出争议，要求与张小龙直接通话了解缘由。HR说好，去帮我约</li><li >杳无音信的两周</li><li >主动打电话给张小龙，惊现宫廷剧剧情（略）！</li><li >offer谈判破裂，时距我第一次电话面试已半年有余，距我得到第一个口头offer也已两月有余。美国公司offer已拒，回国单程机票已买</li></ol><span >经硅谷腾讯前员工朋友介绍，腾讯在他意欲离职出国时也曾口头承诺工资翻倍。但这哥们比我聪明，知道腾讯懂得如何先让你拒了国外offer再改口压低，故还是毅然出国了。</span><br ><br ><span >心理准备做足了，就可以开始做一些正面的准备工作了。个人建议：</span><br ><ol ><li >首先你要对微信产品非常崇拜</li><li >其次你还要对张小龙这个人非常崇拜</li><li >崇拜到无论微信团队做出什么恶心事来都要保持一颗舔脚之心</li><li >无时无刻不表现出以上三点</li><li >再加上能力如果够的话，应该问题不大</li></ol><span >以上建议是按重要性排序的，排名分先后。</span>', 1390444871, 1390444871, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `homepage` varchar(50) NOT NULL,
  `money` int(11) NOT NULL DEFAULT '0',
  `replies` int(11) NOT NULL DEFAULT '0',
  `notices` smallint(6) NOT NULL DEFAULT '0',
  `follows` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `gid` smallint(5) unsigned NOT NULL DEFAULT '3',
  `ip` varchar(15) NOT NULL,
  `location` varchar(128) NOT NULL,
  `token` varchar(40) NOT NULL,
  `introduction` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_created_at_index` (`created_at`),
  KEY `users_updated_at_index` (`updated_at`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `avatar`, `homepage`, `money`, `replies`, `notices`, `follows`, `created_at`, `updated_at`, `gid`, `ip`, `location`, `token`, `introduction`, `is_active`) VALUES
(1, 'yuwenhui1986@163.com', 'yuwenhui1986', '$2y$08$UcEcE0YroWz7coVp8qqzjOO9m52NLVaGaqdfEc9.Wcsql4xYbszYy', '', '', 0, 0, 0, 0, 1389178421, 1389178421, 3, '', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
