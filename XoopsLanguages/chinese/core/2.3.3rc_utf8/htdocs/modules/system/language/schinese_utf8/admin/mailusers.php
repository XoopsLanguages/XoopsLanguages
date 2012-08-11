<?php
// $Id: mailusers.php 2 2005-11-02 18:23:29Z A.D.Horse Exp $
//%%%%%%	Admin Module Name  MailUsers	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	mailusers.php 	%%%%%
define("_AM_SENDTOUSERS","发送给哪些会员：");
define("_AM_SENDTOUSERS2","发送给：");
define("_AM_GROUPIS","所属群组（可选）");
define("_AM_TIMEFORMAT","（日期格式 yyyy-mm-dd，可选）");
define("_AM_LASTLOGMIN","在此日期之后曾经登录过的会员");
define("_AM_LASTLOGMAX","在此日期之后从未登录过的会员");
define("_AM_REGDMIN","在此日期之后注册的会员");
define("_AM_REGDMAX","在此日期之前注册的会员");
define("_AM_IDLEMORE","超过X天没有登录过本站的会员（可选）");
define("_AM_IDLELESS","最近X天内曾经登录过本站的会员（可选）");
define("_AM_MAILOK","仅发送给愿意接受本站通知的会员（可选）");
define("_AM_INACTIVE","仅发送给未激活的会员（可选）");
define("_AMIFCHECKD","如果您选择本项，上面所有的及以短信息均会被忽略");
define("_AM_MAILFNAME","发件人名称（仅用于邮件）");
define("_AM_MAILFMAIL","发件人邮件（仅用于邮件）");
define("_AM_MAILSUBJECT","主题");
define("_AM_MAILBODY","正文");
define("_AM_MAILTAGS","可用标记：");
define("_AM_MAILTAGS1","{X_UID} 将显示用户id");
define("_AM_MAILTAGS2","{X_UNAME} 将显示会员名称");
define("_AM_MAILTAGS3","{X_UEMAIL} 将显示会员Email");
define("_AM_MAILTAGS4","{X_UACTLINK} 将显示会员的激活链接");
define("_AM_SENDTO","发送到");
define("_AM_EMAIL","邮件");
define("_AM_PM","短信");
define("_AM_SENDMTOUSERS","邮件群发");
define("_AM_SENT","已发送会员");
define("_AM_SENTNUM","%s - %s (共: %s 位会员)");
define("_AM_SENDNEXT","下一步");
define("_AM_NOUSERMATCH","没有相匹配的会员");
define("_AM_SENDCOMP","短信发送成功。");

?>