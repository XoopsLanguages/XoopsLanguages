--  You may not change or alter any portion of this comment or credits
--  of supporting developers from this source code or any supporting source code
--  which is considered copyrighted (c) material of the original comment or credit authors.
--  This program is distributed in the hope that it will be useful,
--  but WITHOUT ANY WARRANTY; without even the implied warranty of
--  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
-- 
--  Smallworld - social network
-- 
--  @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
--  @license         http://www.fsf.org/copyleft/gpl.html GNU public license
--  @package         modules
--  @subpackage      smallworld
--  @since           1.0
--  @author          Culex  - homepage.: http://culex.dk & email.: culex@culex.dk

CREATE TABLE `smallworld_comments` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(200) DEFAULT NULL,
  `msg_id_fk` int(11) DEFAULT NULL,
  `uid_fk` int(11) DEFAULT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `created` int(11) DEFAULT '1269249260',
  PRIMARY KEY (`com_id`),
  KEY `msg_id_fk` (`msg_id_fk`),
  KEY `uid_fk` (`uid_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `smallworld_followers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `me` text NOT NULL,
  `you` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `smallworld_friends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `me` text NOT NULL,
  `you` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `smallworld_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` text NOT NULL,
  `imgname` text NOT NULL,
  `imgurl` text NOT NULL,
  `time` text NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `smallworld_messages` (
  `msg_id` int(11) NOT NULL auto_increment,
  `message` varchar(200) default NULL,
  `uid_fk` int(11) default NULL,
  `priv` int(1) NOT NULL default '1',
  `created` int(11) default '1269249260',
  PRIMARY KEY  (`msg_id`),
  KEY `uid_fk` (`uid_fk`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=225 ;

CREATE TABLE `smallworld_user` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `userid` text NOT NULL,
  `regdate` int(36) NOT NULL,
  `username` text NOT NULL,
  `userimage` text NOT NULL,
  `realname` text NOT NULL,
  `gender` text NOT NULL,
  `intingender` text NOT NULL,
  `relationship` text NOT NULL,
  `partner` text NOT NULL,
  `searchrelat` text NOT NULL,
  `birthday` date NOT NULL default '0000-00-00',
  `birthplace` text NOT NULL,
  `birthplace_lat` text NOT NULL,
  `birthplace_lng` text NOT NULL,
  `birthplace_country` text NOT NULL,
  `politic` text NOT NULL,
  `religion` text NOT NULL,
  `emailtype` text NOT NULL,
  `screenname_type` text NOT NULL,
  `screenname` text NOT NULL,
  `mobile` text NOT NULL,
  `phone` text NOT NULL,
  `adress` text NOT NULL,
  `present_city` text NOT NULL,
  `present_lat` text NOT NULL,
  `present_lng` text NOT NULL,
  `present_country` text NOT NULL,
  `website` text NOT NULL,
  `interests` text NOT NULL,
  `music` text NOT NULL,
  `tvshow` text NOT NULL,
  `movie` text NOT NULL,
  `books` text NOT NULL,
  `aboutme` text NOT NULL,
  `school_type` text NOT NULL,
  `school` text NOT NULL,
  `schoolstart` text NOT NULL,
  `schoolstop` text NOT NULL,
  `employer` text NOT NULL,
  `position` text NOT NULL,
  `jobstart` text NOT NULL,
  `jobstop` text NOT NULL,
  `description` text NOT NULL,
  `friends` varchar(255) NOT NULL default '0',
  `followers` varchar(255) NOT NULL default '0',
  `admin_flag` varchar(255) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `smallworld_vote` (
  `vote_id` int(11) unsigned NOT NULL auto_increment,
  `msg_id` int(8) unsigned NOT NULL default '0',
  `com_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL default '0',
  `owner` text NOT NULL,
  `up` tinyint(3) unsigned NOT NULL default '0',
  `down` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`vote_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `smallworld_complaints` (
  `complaint_id` int(11) unsigned NOT NULL auto_increment,
  `link` text NOT NULL,
  `byuser_id` int(11) NOT NULL default '0',
  `owner` int(11) NOT NULL default '0',
  PRIMARY KEY  (`complaint_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `smallworld_admin` (
  `id` int(11) NOT NULL auto_increment,
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `realname` text NOT NULL,
  `userimage` text NOT NULL,
  `ip` text NOT NULL,
  `complaint` text NOT NULL,
  `inspect_start` text NOT NULL,
  `inspect_stop` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
