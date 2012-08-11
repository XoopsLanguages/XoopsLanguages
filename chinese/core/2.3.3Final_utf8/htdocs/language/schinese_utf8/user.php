<?php
// $Id: user.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: zh_cn
// _CHARSET : UTF-8
// Translator: XOOPSCHINA Translation Team
//%%%%%%		File Name user.php 		%%%%%
define('_US_NOTREGISTERED','还没注册？请<a href="register.php">点击此处注册</a>。');
define('_US_LOSTPASSWORD','取回密码');
define('_US_NOPROBLEM','如果忘记了自己的密码，请用您在本站使用的Email重新设置密码。');
define('_US_YOUREMAIL','您的Email：');
define('_US_SENDPASSWORD','发送密码');
define('_US_LOGGEDOUT','您已经退出。');
define('_US_THANKYOUFORVISIT','谢谢光临。');
define('_US_INCORRECTLOGIN','登录错误');
define('_US_LOGGINGU','您好%s，欢迎光临。');

// 2001-11-17 ADD
define('_US_NOACTTPADM','该帐号尚未激活或是已被撤销，<br />详情请联系管理员。');
define('_US_ACTKEYNOT','激活码错误!');
define('_US_ACONTACT','您选择的帐号已经激活!');
define('_US_ACTLOGIN','您的帐号已经激活！请用您的帐号和密码登录。');
define('_US_NOPERMISS','抱歉，您没有权限执行这项操作！');
define('_US_SURETODEL','您真的要删除自己的帐号？');
define('_US_REMOVEINFO','该操作将会删除您在本站的所有信息。');
define('_US_BEENDELED','您的帐号已删除，再见。');
define('_US_ACTFAILD','激活失败!');
//

//%%%%%%		File Name register.php 		%%%%%
define('_US_USERREG','欢迎注册');
define('_US_NICKNAME','帐号名称');
define('_US_EMAIL','电子邮件');
define('_US_ALLOWVIEWEMAIL','公开电子邮件地址');
define('_US_WEBSITE','个人网站');
define('_US_TIMEZONE','所在时区');
define('_US_AVATAR','个人头像');
define('_US_VERIFYPASS','确认密码');
define('_US_SUBMIT','提交');
define('_US_USERNAME','帐号');
define('_US_FINISH','完成');
define('_US_REGISTERNG','无法注册新帐号。');
define('_US_MAILOK','是否接收事件通知');
define('_US_DISCLAIMER','注册条款');
define('_US_IAGREE','我接受以上条款');
define('_US_UNEEDAGREE','抱歉，您必须接受这些条款才能注册。');
define('_US_NOREGISTER','抱歉，目前我们不接受新会员。');


// %s is username. This is a subject for email
define('_US_USERKEYFOR','%s 帐号激活代码');

define('_US_YOURREGISTERED','注册完成，但是帐号尚未启动，您将会收到一封包含激活码的邮件，请按邮件提示链接激活您的帐号。');
define('_US_YOURREGMAILNG','您好，虽然您已经完成注册，但因邮件故障无法发送激活码，请与管理员联系。');
define('_US_YOURREGISTERED2','您好，虽然您已经完成注册，但需等待管理员启动您的帐号，当启动后您会收到确认邮件，敬请耐心等候。');

// %s is your site name
define('_US_NEWUSERREGAT','新会员注册于%s');
// %s is a username
define('_US_HASJUSTREG','%s 刚注册。');

define('_US_INVALIDMAIL','错误：邮件错误。');
define('_US_EMAILNOSPACES','错误：邮件地址不能有空格。');
define('_US_INVALIDNICKNAME','错误：无效帐号。');
define('_US_NICKNAMETOOLONG','帐号太长，不能超过%s个字符。');
define('_US_NICKNAMETOOSHORT','帐号太短，不能短于%s个字符。');
define('_US_NAMERESERVED','错误：不能用系统保留字作帐号。');
define('_US_NICKNAMENOSPACES','帐号请勿包含空格。');
define('_US_NICKNAMETAKEN','错误：该帐号已经注册。');
define('_US_EMAILTAKEN','错误：该邮件已经注册过。');
define('_US_ENTERPWD','错误: 必须输入密码。');
define('_US_SORRYNOTFOUND','抱歉, 无法找到该帐号信息。');




// %s is your site name
define('_US_NEWPWDREQ','有会员在 %s 索取新密码。');
define('_US_YOURACCOUNT','您在 %s 的帐号');

define('_US_MAILPWDNG','密码发送：无法更新用户资料，请联系网站管理员。');

// %s is a username
define('_US_PWDMAILED','给 %s 的密码已经通过 Email 发出。');
define('_US_CONFMAIL','给 %s 的确认信已经通过 Email 发出。');
define('_US_ACTVMAILNG','给 %s 发送邮件通知时失败。');
define('_US_ACTVMAILOK','给 %s 的邮件通知已发出。');

//%%%%%%		File Name userinfo.php 		%%%%%
define('_US_SELECTNG','未选择用户! 请返回并重试。');
define('_US_PM','发送站内短信');
define('_US_ICQ','QQ');
define('_US_AIM','AIM');
define('_US_YIM','雅虎通');
define('_US_MSNM','MSN');
define('_US_LOCATION','所在地');
define('_US_OCCUPATION','职业');
define('_US_INTEREST','兴趣爱好');
define('_US_SIGNATURE','个性签名');
define('_US_EXTRAINFO','个人介绍');
define('_US_EDITPROFILE','编辑个人资料');
define('_US_LOGOUT','退出');
define('_US_INBOX','个人信箱');
define('_US_MEMBERSINCE','注册日期');
define('_US_RANK','头衔等级');
define('_US_POSTS','发帖总数');
define('_US_LASTLOGIN','最后登录时间');
define('_US_ALLABOUT','%s 的帐号信息');
define('_US_STATISTICS','统计信息');
define('_US_MYINFO','个人资料');
define('_US_BASICINFO','基本信息');
define('_US_MOREABOUT','更多信息');
define('_US_SHOWALL','显示全部');

//%%%%%%		File Name edituser.php 		%%%%%
define('_US_PROFILE','个人资料');
define('_US_REALNAME','真实姓名');
define('_US_SHOWSIG','发文时总是加入签名');
define('_US_CDISPLAYMODE','评论显示方式');
define('_US_CSORTORDER','评论排列顺序');
define('_US_PASSWORD','密码');
define('_US_TYPEPASSTWICE','');
define('_US_SAVECHANGES','保存修改');
define('_US_NOEDITRIGHT',"抱歉，您没有权限编辑会员资料。");
define('_US_PASSNOTSAME','两次输入的密码不一致。');
define('_US_PWDTOOSHORT','抱歉, 密码至少需要 <strong>%s</strong> 个字符。');
define('_US_PROFUPDATED','个人资料已更新!');
define('_US_USECOOKIE','保存帐号(不含密码)1年');
define('_US_NO',' 否 ');
define('_US_DELACCOUNT','删除帐号');
define('_US_MYAVATAR','个人头像');
define('_US_UPLOADMYAVATAR','上传头像');
define('_US_MAXPIXEL','最大宽与高度(像素)');
define('_US_MAXIMGSZ','最大文件大小(字节)');
define('_US_SELFILE','选择文件');
define('_US_OLDDELETED','您原来的头像将被删除！');
define('_US_CHOOSEAVT','选择头像');

define('_US_PRESSLOGIN','点击下面的按钮登录。');

define('_US_ADMINNO','管理员组的成员不能被直接删除。');
define('_US_GROUPS','会员群组');

define('_US_REMEMBERME','记住我');

// Welcoming emai/PM subject
define('_US_WELCOME_SUBJECT','欢迎光临 %s');

?>