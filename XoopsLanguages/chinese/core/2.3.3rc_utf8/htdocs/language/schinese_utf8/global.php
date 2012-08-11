<?php
// $Id: global.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","请稍候");
define("_FETCHING","载入页面...");
define("_TAKINGBACK","返回原来页面...");
define("_LOGOUT","退出");
define("_SUBJECT","标题");
define("_MESSAGEICON","文章图标");
define("_COMMENTS","评论");
define("_POSTANON","匿名发表");
define("_DISABLESMILEY","关闭表情图");
define("_DISABLEHTML","关闭HTML语法");
define("_PREVIEW","预览");

define("_GO","确定");
define("_NESTED","嵌套显示");
define("_NOCOMMENTS","尚无评论");
define("_FLAT","全部展开");
define("_THREADED","树状显示");
define("_OLDESTFIRST","旧的在前");
define("_NEWESTFIRST","新的在前");
define("_MORE","更多...");
define("_MULTIPAGE","如果文章需要跨页，请在段落间插入 <font color=red>[pagebreak]</font> 代码。");
define("_IFNOTRELOAD","如果页面没有自动跳转，请<a href=%s>点击此处</a>继续");


// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED","%s 为必填项" );
define("_XOBJ_ERR_SHORTERTHAN","%s 必须少于 %d 字符。" );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","会员资料");
define("_POSTEDBY","作者");
define("_VISITWEBSITE","访问网站");
define("_SENDPMTO","发短信给 %s");
define("_SENDEMAILTO","发邮件给 %s");
define("_ADD","添加");
define("_REPLY","回复");
define("_DATE","日期");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","主菜单");
define("_MANUAL","使用手册");
define("_INFO","信息");
define("_CPHOME","管理区首页");
define("_YOURHOME","网站首页");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","在线信息");
define('_GUESTS','游客');
define('_MEMBERS','会员');
define("_ONLINEPHRASE","<strong>%s</strong>人在线");
define("_ONLINEPHRASEX","<strong>%s</strong>人在浏览<strong>%s</strong>");
define("_CLOSE","关闭");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","引用:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","抱歉，您没有权限访问该区域。");

//%%%%%		Common Phrases		%%%%%
define("_NO","否");
define("_YES","是");
define("_EDIT","编辑");
define("_DELETE","删除");
define("_SUBMIT","提交");
define("_MODULENOEXIST","所选模块不存在！");
define("_ALIGN","对齐方式");
define("_LEFT","靠左");
define("_CENTER","居中");
define("_RIGHT","靠右");
define("_FORM_ENTER","请输入 %s");
define("_MUSTWABLE","文件 %s 的属性需设为可写！");// %s represents file name
// Module info
define('_PREFERENCES','基本参数设置');
define("_VERSION","版本");
define("_DESCRIPTION","说明");
define("_AUTHOR","作者");
define("_CREDITS","鸣谢");
define("_LICENCE","许可协议");
define("_ERRORS","错误");
define("_NONE","无");
define('_ON','于');
define('_READS','次阅读');
define('_WELCOMETO','欢迎访问 %s');
define('_SEARCH','搜索');
define('_ALL','全部');
define('_TITLE','标题');
define('_OPTIONS','选项');
define('_QUOTE','引文');
define('_LIST','列表');
define('_LOGIN','会员登录');
define('_USERNAME','帐号：');
define('_PASSWORD','密码：');
define("_SELECT","选择");
define("_IMAGE","图片");
define("_SEND","发送");
define("_CANCEL","取消");
define("_ASCENDING","升序排列");
define("_DESCENDING","降序排列");
define('_BACK','返回');
define('_NOTITLE','无标题');

/* Image manager */
define('_IMGMANAGER','图片管理');
define('_NUMIMAGES','%s 张图片');
define('_ADDIMAGE','添加图片');
define('_IMAGENAME','名称');
define('_IMGMAXSIZE','最大文件（字节）：');
define('_IMGMAXWIDTH','最大宽度（像素）：');
define('_IMGMAXHEIGHT','最大高度（像素）：');
define('_IMAGECAT','类别：');
define('_IMAGEFILE','图片');
define('_IMGWEIGHT','显示顺序：');
define('_IMGDISPLAY','显示此图片?');
define('_IMAGEMIME','MIME格式：');
define('_FAILFETCHIMG','文件 %s 无法上传。');
define('_FAILSAVEIMG','文件 %s 无法保存。');
define('_NOCACHE','不使用缓存');
define('_CLONE','复制');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH","起始");
define("_ENDSWITH","结束");
define("_MATCHES","符合");
define("_CONTAINS","包含");
define("_REQUIRED","必填");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","注册会员");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","字号");  // font size
define("_FONT","字体");  // font family
define("_COLOR","颜色");  // font color
define("_EXAMPLE","范例");
define("_ENTERURL","输入链接网址：");
define("_ENTERWEBTITLE","输入网站名称：");
define("_ENTERIMGURL","输入图片网址");
define("_ENTERIMGPOS","输入图片位置");
define("_IMGPOSRORL","'R'或'r'为右，'L'或'l'为左边，或空白。");
define("_ERRORIMGPOS","错误！请输入图片位置。");
define("_ENTEREMAIL","输入邮件地址");
define("_ENTERCODE","输入代码内容");
define("_ENTERQUOTE","输入引文内容");
define("_ENTERTEXTBOX","输入文字内容");
define("_ALLOWEDCHAR","最大字符长度：");
define("_CURRCHAR","当前字符长度：");
define("_PLZCOMPLETE","请填写主题和内容。");
define("_MESSAGETOOLONG","内容太长");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1秒');
define('_SECONDS','%s秒');
define('_MINUTE','1分钟');
define('_MINUTES','%s分钟');
define('_HOUR','1小时');
define('_HOURS','%s小时');
define('_DAY','1天');
define('_DAYS','%s天');
define('_WEEK','1周');
define('_MONTH','1月');

define("_DATESTRING","Y年m月d日 H:i:s");
define("_MEDIUMDATESTRING","m月d日 H:i");
define("_SHORTDATESTRING","m月d日");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th","nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET','UTF-8');
define('_LANGCODE','zh-CN');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES","1");
?>