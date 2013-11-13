--
-- 表的结构 `pre_users`
--

DROP TABLE IF EXISTS `pre_users`;
CREATE TABLE IF NOT EXISTS `pre_users` (
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
  `regtime` int(10) DEFAULT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pre_user_follow`
--

DROP TABLE IF EXISTS `pre_user_follow`;
CREATE TABLE IF NOT EXISTS `pre_user_follow` (
  `follow_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `follow_uid` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`follow_id`,`uid`,`follow_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `pre_user_groups`
--

DROP TABLE IF EXISTS `pre_user_groups`;
CREATE TABLE IF NOT EXISTS `pre_user_groups` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `group_type` tinyint(3) NOT NULL DEFAULT '0',
  `group_name` varchar(50) DEFAULT NULL,
  `usernum` int(10) NOT NULL,
  PRIMARY KEY (`gid`,`group_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `pre_user_groups`
--

INSERT INTO `pre_user_groups` (`gid`, `group_type`, `group_name`, `usernum`) VALUES
(1, 0, '管理员', 1),
(2, 1, '版主', 0),
(3, 2, '普通会员', 0);