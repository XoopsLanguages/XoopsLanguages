<?php
// $Id: main.php 2025 2008-08-31 04:16:39Z phppp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","你的消息已经被删除");
define("_PM_PRIVATEMESSAGE","私人消息");
define("_PM_INBOX","收件箱");
define("_PM_FROM","来自");
define("_PM_YOUDONTHAVE","没有任何私人消息");
define("_PM_FROMC","来自: ");
define("_PM_SENTC","发送: "); // The date of message sent
define("_PM_PROFILE","用户信息");

// %s is a username
define("_PM_PREVIOUS","前一条");
define("_PM_NEXT","后一条");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","对不起, 你不是注册用户。");
define("_PM_REGISTERNOW","现在注册");
define("_PM_GOBACK","返回");
define("_PM_USERNOEXIST","选中的用户不存在。");
define("_PM_PLZTRYAGAIN","请检查用户名然后再试。");
define("_PM_MESSAGEPOSTED","你的消息已经被送出。");
define("_PM_CLICKHERE","你可以点这里查看信息");
define("_PM_ORCLOSEWINDOW","或者点这里关闭窗口");
define("_PM_USERWROTE","%s 写道:");
define("_PM_TO","接收人: ");
define("_PM_SUBJECTC","主题: ");
define("_PM_MESSAGEC","消息内容: ");
define("_PM_CLEAR","清除");
define("_PM_CANCELSEND","取消发送");
define("_PM_SUBMIT","提交");
define("_PM_SAVEINOUTBOX","在已发消息中保存一个副本?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","主题");
define("_PM_DATE","日期");
define("_PM_NOTREAD","未读");
define("_PM_SEND","发送新消息");
define("_PM_DELETE","删除");
define("_PM_TOSAVE","保存");
define("_PM_UNSAVE","不保存");
define("_PM_EMPTY","清空");
define("_PM_REPLY","回复");
define("_PM_PLZREG","注册之后才可以发送私人消息!");
define("_PM_SAVED_PART","你最多保存 %d 条存档消息, 现在已经保存了 %d 条。");
define("_PM_SAVED_ALL","消息已经存档");
define("_PM_UNSAVED","消息已经从存档中删除");
define("_PM_EMPTIED","信箱已被清空");
define("_PM_RUSUREEMPTY","确定要清空该信箱?");
define("_PM_RUSUREDELETE","确定你要删除该消息?");

define("_PM_ONLINE","在线");

define("_PM_RECEIVE","接收");
define("_PM_POST","发送");
define("_PM_READBOX","已读信箱");
define("_PM_RSAVEBOX","保存的已收消息");
define("_PM_OUTBOX","已发消息库");
define("_PM_SAVEBOX","存档消息库");
define("_PM_SENTBOX","已发消息库");
define("_PM_PSAVEBOX","保存的已发消息");
define("_PM_SAVE","保存");
define("_PM_SAVED","保存成功");
define("_PM_TOC","来自：");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","分类");
define("_PM_ORDER","排序");
define("_PM_UID","伙伴的ID");
define("_PM_TIME","发送日期");
define("_PM_ASC","升序");
define("_PM_DESC","降序");
define("_PM_LIMIT","每页短消息数");
define("_PM_BACKTOBOX","返回消息库");
define("_PM_SORTSUBMIT","提交");
define("_PM_PREVIOUSP","前一个");
define("_PM_NEXTP","后一个");

define("_PM_MAILNOTIFY","%s-你从 %s 收到一条新消息");
define("_PM_MAILMESSAGE","你好!\n有一条来自 %s 的新消息\n\n短消息标题是\n%s\n\n你可以从这里阅读\n%s\n\n-----------\n你之所以收到这个短消息是因为你选择了短消息提醒\n\n你可以修改你的短消息配置\n%s\n\n请不要回复这条信息\n\n---------\n天天好心情^_^\n%s\n%s\n%s");

define("_PM_EMAIL","电子邮件");
define("_PM_EMAIL_DESC","亲爱的 %s, 这条消息来自您在 " . $xoopsConfig['sitename'] . "的帐户");
define("_PM_EMAIL_FROM","来自 %s");
define("_PM_EMAIL_TO","发给 %s");
define("_PM_EMAIL_SUBJECT","[消息]%s");
define("_PM_EMAIL_MESSAGE","消息内容");

define("_PM_ACTION_DONE","操作成功！");
define("_PM_ACTION_ERROR","操作失败！");
?>