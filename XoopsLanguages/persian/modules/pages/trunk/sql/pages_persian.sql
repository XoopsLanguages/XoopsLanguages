# phpMyAdmin SQL Dump
# version 2.5.5-pl1
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Mar 18, 2004 at 05:10 AM
# Server version: 3.23.56
# PHP Version: 4.3.4
# 
# Database : `xoops2`
# persian : irmtfan @jadoogaran.org

# --------------------------------------------------------

#
# Table structure for table `pages`
#

CREATE TABLE pages (
  CID tinyint(4) NOT NULL auto_increment,
  pagetitle varchar(255) NOT NULL default '0',
  pageheadline varchar(255) NOT NULL default '0',
  page text NOT NULL,
  weight int(11) NOT NULL default '1',
  html int(11) NOT NULL default '0',
  smiley int(11) NOT NULL default '1',
  xcodes int(11) NOT NULL default '1',
  breaks int(10) NOT NULL default '1',
  defaultpage int(10) NOT NULL default '0',
  indeximage varchar(255) default 'blank.png',
  htmlfile varchar(255) default NULL,
  mainpage int(11) NOT NULL default '0',
  submenu int(11) NOT NULL default '0',
  created int(10) unsigned NOT NULL default '0',
  comments tinyint(11) NOT NULL default '0',
  allowcomments tinyint(11) NOT NULL default '0',
  usedoctitle tinyint(1) NOT NULL default '0',
  publishdate int(10) unsigned NOT NULL default '0',
  expiredate int(10) unsigned NOT NULL default '0',
  counter int(11) NOT NULL default '0',
  search text NULL,
  PRIMARY KEY  (CID),
  UNIQUE KEY topicID (CID),
  FULLTEXT KEY answer (page)
) TYPE=MyISAM COMMENT='Pages';

#
# Dumping data for table `pages`
#

INSERT INTO pages VALUES (1, 'صفحه خوش آمد گویی', 'صفحه  خوش آمد گویی', '<H4 align=center><SPAN>به ماژول صفجه ها خوش آمدید</SPAN></H4>\r\n<P align=left><SPAN><STRONG>ماژول صفحه ها برای چه کاری است؟<?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></STRONG></SPAN></P>\r\n<P align=left><SPAN style="FONT-SIZE: 9pt; COLOR: black; FONT-FAMILY: Verdana">ماژول صفحات برای ساختن صفحات مختلفی برای سایت شماست که با ماژول های دیگر امکان انجام آن نیست. شما میتوانید از آن به عنوان ماژول  \'درباره ما\', \'اطلاع به یک دوست\', \'لینک به ما\'، مالکیت اسناد یا هر اطلاعات رسمی دیگری که مایل هستید برای کاربران در صفحه های خاصی نمایش دهید استفاده کنید.&nbsp;<o:p></o:p></SPAN></P>\r\n<P align=left><SPAN><STRONG>این ماژول برای چه کاری نیست؟<o:p></o:p></STRONG></SPAN></P>\r\n<P align=left><SPAN style="FONT-SIZE: 9pt; COLOR: black; FONT-FAMILY: Verdana">ماژول صفحات برای مدیریت مقاله ها نیست برای این کار از ماژول های دیگر مقالات مثل article  یا  smartsection  که هر دو به زبان فارسی وجود دارند استفاده کنید.<o:p></o:p></SPAN></P>\r\n<P align=left><SPAN style="FONT-SIZE: 9pt; COLOR: black; FONT-FAMILY: Verdana">از این ماژول استفاده کنید و لذت ببرید<o:p></o:p></SPAN></P>\r\n<P align=left><SPAN style="FONT-SIZE: 9pt; COLOR: black; FONT-FAMILY: Verdana">ATB<o:p></o:p></SPAN></P>\r\n<P align=left><SPAN style="FONT-SIZE: 9pt; COLOR: black; FONT-FAMILY: Verdana">عشق مدرن www.xoops.ir<o:p></o:p></SPAN></P>', 1, 0, 0, 0, 0, 1, 'logo.png', '', 0, 0, 1078399017, 0, 1, 0, 1079305800, 0, 33,'');

# --------------------------------------------------------

#
# Table structure for table `pages_linktous`
#

CREATE TABLE pages_linktous (
  submenuitem int(10) NOT NULL default '10',
  textlink varchar(255) NOT NULL default '',
  linkpagelogo varchar(255) NOT NULL default '',
  button varchar(255) NOT NULL default '',
  microbutton varchar(255) NOT NULL default '',
  logo varchar(255) NOT NULL default '',
  banner varchar(255) NOT NULL default '',
  mainpage int(10) NOT NULL default '1',
  newsfeed int(10) NOT NULL default '0',
  texthtml varchar(255) NOT NULL default '',
  titlelink varchar(255) NOT NULL default '',
  newsfeedjs mediumint(10) NOT NULL default '0',
  newstitle varchar(255) NOT NULL default '',
  linkintro text NOT NULL,
  PRIMARY KEY  (submenuitem)
) TYPE=MyISAM;

#
# Dumping data for table `pages_linktous`
#

INSERT INTO pages_linktous VALUES (1, 'لطفا بعد از نصب ماژول تغییر دهید', 'linktous.png', 'poweredby.gif', 'microbutton.gif', 'logo.gif', 'xoops_banner_2.gif', 1, 1, '', 'Link to us', 1, '', 'در این قسمت لینک های سایت ما را برای قرار دادن در سایت یا وب لاگ خود مشاهده می کنید.  Feel free to create links from any section of your Web site to our articles about your website.  You are also welcome to link to our website directories and other resource pages.\r\n<br /><br />Whenever possible, we ask that you include our logo with the link on your Web site.  You may use any of the logos below.  Please make the logo a clickable link to the home page of our site, or another appropriate page if you are linking to a specific article or resource.\r\n<br /><br />To get a copy of the logo file, simply right-click on the logo of your choice below, and select \'Save Picture as...\' from the pop-up menu to save the image to your hard drive.  Then post the logo to the appropriate page on your site.');

# --------------------------------------------------------

#
# Table structure for table `pages_refer`
#

CREATE TABLE pages_refer (
  titlerefer varchar(255) NOT NULL default '',
  chanrefheadline text NOT NULL,
  submenuitem int(10) NOT NULL default '10',
  mainpage int(10) NOT NULL default '1',
  referpagelogo varchar(255) NOT NULL default '',
  emailaddress int(10) NOT NULL default '1',
  usersblurb int(10) NOT NULL default '0',
  defblurb varchar(255) NOT NULL default '',
  smiley tinyint(11) NOT NULL default '0',
  xcodes tinyint(11) NOT NULL default '0',
  breaks tinyint(4) NOT NULL default '0',
  html tinyint(11) NOT NULL default '1',
  privacy int(1) NOT NULL default '1',
  emailcheck int(1) NOT NULL default '1',
  privacy_statement text NOT NULL,
  counter int(11) NOT NULL default '0',
  PRIMARY KEY  (submenuitem)
) TYPE=MyISAM;

#
# Dumping data for table `pages_refer`
#

INSERT INTO pages_refer VALUES ('اطلاع به یک دوست', 'Let a friend know about us.', 1, 1, 'referfriend.png', 1, 1, 'Please visit this fantastic website that I have just found.', 0, 1, 1, 1, 1, 1, 'We will not and do not collect, sell, or distribute in any way or form the email addresses gathered through this referral option. The intended recipient(s) will only receive the following message and no one else. ',0);
