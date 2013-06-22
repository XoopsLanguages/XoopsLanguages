<?php
// $Id$
if (defined('PAGE_INDEX_DEFINED')) return;
define('PAGE_INDEX_DEFINED', true);

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST', '附件：');
define('_MD_ALLOWED_EXTENSIONS', '允许的文件类型');
define('_MD_MAX_FILESIZE', '允许的文件大小');
define('_MD_ATTACHMENT', '附件');
define('_MD_FILESIZE', '大小');
define('_MD_HITS', '下载次数');
define('_MD_GROUPS', '群组：');
define('_MD_DEL_ONE', '只删除本贴');
define('_MD_DEL_RELATED', '删除本贴及相关贴');
define('_MD_MARK_ALL_FORUMS', '标记所有论坛为');
define('_MD_MARK_ALL_TOPICS', '标记所有主题为');
define('_MD_MARK_UNREAD', '未读');
define('_MD_MARK_READ', '已读');
define('_MD_ALL_FORUM_MARKED', '所有论坛已标记');
define('_MD_ALL_TOPIC_MARKED', '所有主题已标记');
define('_MD_BOARD_DISCLAIMER', '免责声明');


//index.php
define('_MD_ADMINCP', '控制面板');
define('_MD_FORUM', '论坛');
define('_MD_WELCOME', '%s 论坛');
define("_MD_TOPICS", "主题");
define("_MD_POSTS", "帖子");
define("_MD_DIGESTS", "精华");
define('_MD_LASTPOST', '最新发表');
define('_MD_MODERATOR', '板主');
define("_MD_NEWPOSTS", "新帖");
define('_MD_NONEWPOSTS', '无新帖');
define('_MD_PRIVATEFORUM', '内部论坛');
define('_MD_BY', '作者'); // Posted by
define("_MD_TOSTART", "选择您要浏览的讨论区，并发表适合该讨论区的话题");
define("_MD_TOTALTOPICSC", "主题总数：");
define("_MD_TOTALPOSTSC", "帖子总数：");
define('_MD_TOTALUSER', '用户总数：');
define('_MD_TIMENOW', '当前时间：%s');
define('_MD_USER_LASTVISIT', '上次来访：%s');

define('_MD_USER_LASTPOST', '最后发帖：%s');
define('_MD_USER_NOLASTPOST', '您尚未发帖');
define('_MD_USER_TOPICS', '您发布的主题数：%s');
define('_MD_USER_POSTS', '帖子数：%s');
define('_MD_USER_DIGESTS', '精华数：%s');

define('_MD_VIEW_NEWPOSTS', '阅读新帖');

define('_MD_ADVSEARCH', '高级搜索');
define('_MD_POSTEDON', '');
define('_MD_SUBJECT', '主题');
define('_MD_INACTIVEFORUM_NEWPOSTS', '已关闭（有新贴）');
define('_MD_INACTIVEFORUM_NONEWPOSTS', '已关闭（无新贴）');
define('_MD_SUBFORUMS', '子论坛');
define('_MD_MAINFORUMOPT', '论坛选项');
define("_MD_PENDING_POSTS_FOR_AUTH", "等候审核的帖子：");

define('_MD_TODAYTOPICSC','今日主题：');
define('_MD_TODAYPOSTSC','今日帖子：');
define('_MD_TOTALDIGESTSC','精华：');

//page_header.php
define('_MD_MODERATEDBY', '板主');
define('_MD_SEARCH', '搜索');
//define('_MD_SEARCHRESULTS', '搜索结果');
define('_MD_FORUMINDEX', '%s 讨论区');
define('_MD_POSTNEW', '发帖');
define('_MD_REGTOPOST', '[无发表权] 请登录或者注册');

//search.php
define('_MD_SEARCHALLFORUMS', '搜索所有讨论区');
define('_MD_FORUMC', '讨论区');
define('_MD_AUTHORC', '作者：');
define('_MD_SORTBY', '排序');
define('_MD_DATE', '最后发表');
define('_MD_TOPIC', '主题');
define('_MD_POST2', '帖子');
define('_MD_USERNAME', '用户名');
define('_MD_BODY', '内容');
define('_MD_SINCE', '时间范围');

//viewforum.php
define('_MD_REPLIES', '回复');
define('_MD_POSTER', '作者');
define('_MD_VIEWS', '点击');
define('_MD_MORETHAN', '有新帖 [热门]');
define('_MD_MORETHAN2', '无新帖 [热门]');
define('_MD_TOPICSHASATT', '包含附件的主题');
define('_MD_TOPICHASPOLL', '设置了投票的主题');
define('_MD_TOPICLOCKED', '本主题已经锁定，禁止回复');
define('_MD_LEGEND', '说明');
define('_MD_NEXTPAGE', '下页');
define('_MD_SORTEDBY', '选项');
define('_MD_TOPICTITLE', '主题');
define('_MD_NUMBERREPLIES', '回复');
define('_MD_TOPICPOSTER', '主题作者');
define('_MD_TOPICTIME', '发布日期');
define('_MD_LASTPOSTTIME', '最后回复');
define('_MD_ASCENDING', '升序排列');
define('_MD_DESCENDING', '降序排列');
define('_MD_FROMLASTHOURS', '%s小时以来');
define('_MD_FROMLASTDAYS', '%s天以来');
define('_MD_THELASTYEAR', '一年以来');
define('_MD_BEGINNING', '全部');
define('_MD_SEARCHTHISFORUM', '搜索本板');
define('_MD_TOPIC_SUBJECTC', '主题类别：');


define('_MD_RATINGS', '评分');
define("_MD_CAN_ACCESS", "您<strong><font color='green'>可以</font></strong>访问该板。<br />");
define("_MD_CANNOT_ACCESS", "您<strong>不可</strong>访问该板。<br />");
define("_MD_CAN_POST", "您<strong><font color='green'>可以</font></strong>发帖。<br />");
define("_MD_CANNOT_POST", "您<strong><font color='red'>不可</font></strong>发帖。<br />");
define("_MD_CAN_VIEW", "您<strong><font color='green'>可以</font></strong>查看帖子。<br />");
define("_MD_CANNOT_VIEW", "您<strong><font color='red'>不可</font></strong>查看帖子。<br />");
define("_MD_CAN_REPLY", "您<strong><font color='green'>可以</font></strong>回复。<br />");
define("_MD_CANNOT_REPLY", "您<strong><font color='red'>不可</font></strong>回复。<br />");
define("_MD_CAN_EDIT", "您<strong><font color='green'>可以</font></strong>编辑自己的帖子。<br />");
define("_MD_CANNOT_EDIT", "您<strong><font color='red'>不可</font></strong>编辑自己的帖子。<br />");
define("_MD_CAN_DELETE", "您<strong><font color='green'>可以</font></strong>删除自己的帖子。<br />");
define("_MD_CANNOT_DELETE", "您<strong><font color='red'>不可</font></strong>删除自己的帖子。<br />");
define("_MD_CAN_ADDPOLL", "您<strong><font color='green'>可以</font></strong>发起投票调查。<br />");
define("_MD_CANNOT_ADDPOLL", "您<strong><font color='red'>不可</font></strong>发起投票调查。<br />");
define("_MD_CAN_VOTE", "您<strong><font color='green'>可以</font></strong>在投票调查中投票。<br />");
define("_MD_CANNOT_VOTE", "您<strong><font color='red'>不可</font></strong>在投票调查中投票。<br />");
define("_MD_CAN_ATTACH", "您<strong><font color='green'>可以</font></strong>上传附件。<br />");
define("_MD_CANNOT_ATTACH", "您<strong><font color='red'>不可</font></strong>上传附件。<br />");
define("_MD_CAN_NOAPPROVE", "您<strong><font color='green'>可以</font></strong>不经审核直接发帖。<br />");
define("_MD_CANNOT_NOAPPROVE", "您<strong><font color='red'>不可</font></strong>不经审核直接发帖。<br />");
define("_MD_CAN_TYPE", "您<strong><font color='green'>可以</font></strong>使用主题类别。<br />");
define("_MD_CANNOT_TYPE", "您<strong><font color='red'>不可</font></strong>使用主题类别。<br />");
define("_MD_CAN_HTML", "您<strong><font color='green'>可以</font></strong>使用HTML语法。<br />");
define("_MD_CANNOT_HTML", "您<strong><font color='green'>不可以</font></strong>使用HTML语法。<br />");
define("_MD_CAN_SIGNATURE", "您<strong><font color='green'>可以</font></strong>使用签名档。<br />");
define("_MD_CANNOT_SIGNATURE", "您<strong><font color='green'>不可以</font></strong>使用签名档。<br />");

define("_MD_IMTOPICS", "重要主题");
define("_MD_NOTIMTOPICS", "普通主题");
define('_MD_FORUMOPTION', '论坛选项');

define('_MD_VAUP', '查看所有没有回复的主题');
define('_MD_VANP', '查看含有新帖的主题');


define('_MD_UNREPLIED', '没有回复的主题');
define('_MD_UNREAD', '未阅读的主题');
define('_MD_ALL', '所有主题');
define('_MD_ALLPOSTS', '所有帖子');
define('_MD_VIEW', '查看');

//viewtopic.php
define('_MD_AUTHOR', '作者');
define('_MD_LOCKTOPIC', '锁定主题');
define('_MD_UNLOCKTOPIC', '解除锁定');
define('_MD_UNSTICKYTOPIC', '解除置顶');
define('_MD_STICKYTOPIC', '主题置顶');
define('_MD_DIGESTTOPIC', '设为精华');
define('_MD_UNDIGESTTOPIC', '取消精华');
define('_MD_MERGETOPIC', '合并主题');
define('_MD_MOVETOPIC', '移动主题');
define('_MD_DELETETOPIC', '删除主题');
define('_MD_TOP', '回顶部');
define('_MD_BOTTOM', '到底部');
define('_MD_PREVTOPIC', '前一个主题');
define('_MD_NEXTTOPIC', '下一个主题');
define('_MD_GROUP', '所属群组：');
define('_MD_QUICKREPLY', '快速回复主题');
define('_MD_POSTREPLY', '发表回复');
define('_MD_PRINTTOPICS', '打印主题');
define('_MD_PRINT', '打印');
define('_MD_REPORT', '举报');
define('_MD_PM', '短消息');
define('_MD_EMAIL', 'Email');
define('_MD_WWW', '主页');
define('_MD_AIM', 'AIM');
define('_MD_YIM', 'YIM');
define('_MD_MSNM', 'MSNM');
define('_MD_ICQ', 'OICQ');
define('_MD_PRINT_TOPIC_LINK', '本贴网址');
define('_MD_ADDTOLIST', '加入联系名单');
define('_MD_TOPICOPT', '主题选项');
define('_MD_VIEWMODE', '浏览模式');
define('_MD_NEWEST', '新的在前');
define('_MD_OLDEST', '旧的在前');

define('_MD_FORUMSEARCH', '论坛搜索');

define('_MD_RATED', '评分：');
define('_MD_RATE', '主题评分');
define('_MD_RATEDESC', '对该主题评分');
define('_MD_RATING', '评分');
define('_MD_RATE1', '强烈反对');
define('_MD_RATE2', '不知所云');
define('_MD_RATE3', '一般');
define('_MD_RATE4', '不错');
define('_MD_RATE5', '顶！');

define('_MD_TOPICOPTION', '主题选项');
define('_MD_KARMA_REQUIREMENT', '你的Karma积分 %s 没有达到帖子要求的标准 %s。<br /> 请修炼几日再来吧。');
define('_MD_REPLY_REQUIREMENT', '需要回复才能查看内容。');
define('_MD_TOPICOPTIONADMIN', '主题管理选项');
define('_MD_POLLOPTIONADMIN', '投票调查管理选项');

define('_MD_EDITPOLL', '编辑投票调查');
define('_MD_DELETEPOLL', '删除投票调查');
define('_MD_RESTARTPOLL', '重启动投票调查');
define('_MD_ADDPOLL', '添加投票调查');

define('_MD_QUICKREPLY_EMPTY', '请输入快速回复的内容');

define('_MD_LEVEL', '等级：');
define('_MD_HP', 'HP：');
define('_MD_MP', 'MP：');
define('_MD_EXP', 'EXP：');

define('_MD_BROWSING', '正在浏览：');
define('_MD_POSTTONEWS', '发布到新闻区');

define('_MD_EXCEEDTHREADVIEW', '回帖数目超过树状显示所允许的上限<br />转为展开模式');


//forumform.inc
//define('_MD_PRIVATE', '这是一个<strong>内部</strong>讨论区。<br />只有授权用户才能发表');
define('_MD_QUOTE', '引用');
define('_MD_VIEW_REQUIRE', '查看要求');
define('_MD_REQUIRE_KARMA', 'Karma积分');
define('_MD_REQUIRE_REPLY', '回复');
define('_MD_REQUIRE_NULL', '无');

/*
define("_MD_SELECT_FORMTYPE", "选择编辑器");
define("_MD_FORM_COMPACT", "简洁");
define("_MD_FORM_DHTML", "标准");
define("_MD_FORM_SPAW", "Spaw");
define("_MD_FORM_HTMLAREA", "HTMLArea");
define("_MD_FORM_FCK", "FCK");
define("_MD_FORM_KOIVI", "Koivi");
define("_MD_FORM_TINYMCE", "TinyMCE");
*/

// ERROR messages
define('_MD_ERRORFORUM', '错误：未选择讨论区！');
define('_MD_ERRORPOST', '错误：未选择帖子！');
define('_MD_NORIGHTTOVIEW', '你没有权限查看该主题。');
define('_MD_NORIGHTTOPOST', '你没有权限在该讨论区发帖。');
define('_MD_NORIGHTTOEDIT', '你没有权限修改该讨论区的帖子。');
define('_MD_NORIGHTTOREPLY', '你没有权限在该讨论区回复。');
define('_MD_NORIGHTTOACCESS', '你没有权限访问该讨论区。');
define('_MD_ERRORTOPIC', '错误：未选择主题！');
define('_MD_ERRORCONNECT', '错误：无法连接到讨论区数据库。');
define('_MD_ERROREXIST', '错误：你所选择的讨论区不存在，请再试一次。');
define('_MD_ERROROCCURED', '发生错误');
define('_MD_COULDNOTQUERY', '无法查询讨论区资料。');
define('_MD_FORUMNOEXIST', '错误：你选择的主题/讨论区不存在，请再试一次。');
define('_MD_USERNOEXIST', '用户者不存在。请再搜索一遍。');
define('_MD_COULDNOTREMOVE', '错误：无法删除帖子！');
define('_MD_COULDNOTREMOVETXT', '错误：无法删除帖子内容！');
define('_MD_TIMEISUP', '已经超过了所允许的编辑时间限制。');
define('_MD_TIMEISUPDEL', '已经超过了删帖的时间限制。');

//reply.php
define('_MD_ON', '于'); //Posted on
define('_MD_USERWROTE', '%s 写道：'); // %s is username
define('_MD_RE', '回复');

//post.php
define('_MD_EDITNOTALLOWED', '没有权限修改帖子！');
define('_MD_EDITEDBY', '');
define('_MD_ANONNOTALLOWED', '游客没有发帖权。<br />请先注册。');
define('_MD_THANKSSUBMIT', '感谢您的发帖！');
define('_MD_REPLYPOSTED', '您的帖子有人回复。');
define('_MD_HELLO', '您好 %s，');
define('_MD_URRECEIVING', '您收到该email是因为您在 %s 讨论区发表的帖子有人回应。'); // %s is your site name
define('_MD_CLICKBELOW', '按以下链接查看帖子：');
define('_MD_WAITFORAPPROVAL', '非常感谢您提交帖子，将在通过审核后发表。');
define('_MD_POSTING_LIMITED', '请不要在 %d 秒内连续发帖');

//forumform.inc
define('_MD_NAMEMAIL', '姓名/Email：');
define('_MD_LOGOUT', '注销');
define('_MD_REGISTER', '注册');
define('_MD_SUBJECTC', '标题：');
define('_MD_MESSAGEICON', '图标：');
define('_MD_MESSAGEC', '内容：');
define('_MD_ALLOWEDHTML', '允许的HTML标签：');
define('_MD_OPTIONS', '附加选项：');
define('_MD_POSTANONLY', '匿名发表');
define('_MD_DOSMILEY', '使用表情图');
define('_MD_DOXCODE', '启用Xoops内置码');
define('_MD_DOBR', '启用换行符(如果启用HTML标签，建议关闭)');
define('_MD_DOHTML', '使用HTML标签');
define('_MD_NEWPOSTNOTIFY', '有新贴时通知我');
define('_MD_ATTACHSIG', '使用签名档');
define('_MD_POST', '发表');
define('_MD_SUBMIT', '确定');
define('_MD_CANCELPOST', '取消');
define('_MD_REMOVE', '取消');
define('_MD_UPLOAD', '上传');

// forumuserpost.php
define('_MD_ADD', '发表新帖');
define('_MD_REPLY', '回复');

// topicmanager.php
define('_MD_VIEWTHETOPIC', '查看该主题');
define('_MD_RETURNTOTHEFORUM', '回到讨论区列表');
define('_MD_RETURNFORUMINDEX', '回讨论区主页');
define('_MD_ERROR_BACK', '错误！请再试一遍。');
define('_MD_GOTONEWFORUM', '查看修改结果');

define('_MD_TOPICDELETE', '该主题已被删除。');
define('_MD_TOPICMERGE', '该主题已被合并。');
define('_MD_TOPICMOVE', '该主题已经被转移到其他讨论区。');
define('_MD_TOPICLOCK', '该主题已被锁定。');
define('_MD_TOPICUNLOCK', '该主题已解除锁定。');
define('_MD_TOPICSTICKY', '该主题已经置顶。');
define('_MD_TOPICUNSTICKY', '该主题已被取消置顶。');
define('_MD_TOPICDIGEST', '该主题已被标记为精华。');
define('_MD_TOPICUNDIGEST', '该主题已被取消精华。');

define('_MD_DELETE', '删除');
define('_MD_MOVE', '移动');
define('_MD_MERGE', '合并');
define('_MD_LOCK', '锁定');
define('_MD_UNLOCK', '解除锁定');
define('_MD_STICKY', '置顶');
define('_MD_UNSTICKY', '取消置顶');
define('_MD_DIGEST', '精华');
define('_MD_UNDIGEST', '取消精华');

define('_MD_DESC_DELETE', '按删除按钮将<strong>永久</strong>删除该主题');
define('_MD_DESC_MOVE', '按移动按钮将转移该主题到你所选的板面');
define('_MD_DESC_MERGE', '按合并按钮将合并该主题到所选的主题<br /><strong>要合并到的主题ID必须小于当前主题ID。</strong>');
define('_MD_DESC_LOCK', '按锁定按钮将锁定该主题的所有普通用户操作。除非解除锁定才能恢复');
define('_MD_DESC_UNLOCK', '按解除锁定按钮将重新开放该主题');
define('_MD_DESC_STICKY', '按置顶按钮将该主题固定在顶端');
define('_MD_DESC_UNSTICKY', '按取消置顶按钮将解除置顶');
define('_MD_DESC_DIGEST', '按设置精华按钮将该主题设为精华');
define('_MD_DESC_UNDIGEST', '按取消精华按钮将主题取消精华');

define('_MD_MERGETOPICTO', '合并主题到：');
define('_MD_MOVETOPICTO', '移动主题到：');
define('_MD_NOFORUMINDB', '无讨论区');

// delete.php
define('_MD_DELNOTALLOWED', '抱歉！您没有权限删除本贴。');
define('_MD_AREUSUREDEL', '您确定要删除本贴及以下的回复？');
define('_MD_POSTSDELETED', '选择的帖子及其回复已删除。');
define('_MD_POSTDELETED', '选择的帖子已删除。');

// definitions moved from global。
define('_MD_THREAD', '帖子内容');
define('_MD_FROM', '来自');
define('_MD_JOINED', '注册日期');
define('_MD_ONLINE', '在线');
define('_MD_OFFLINE', '离线');
define('_MD_FLAT', '全部展开');


// online.php
define('_MD_USERS_ONLINE', '在线用户：');
define('_MD_ANONYMOUS_USERS', '名游客');
define('_MD_REGISTERED_USERS', '名注册用户：');
define('_MD_BROWSING_FORUM', '人在浏览讨论区');
define('_MD_TOTAL_ONLINE', '总共 %d 个用户在线。');
define('_MD_ADMINISTRATOR', '管理员');

define('_MD_NO_SUCH_FILE', '文件不存在！');
define('_MD_ERROR_UPATEATTACHMENT', '更新附件时发生错误');

// ratethread.php
define("_MD_CANTVOTEOWN", "不能对自己的主题评分。<br />所有评分信息将会被记录并审查。");
define("_MD_VOTEONCE", "请不要对同一主题多次评分。");
define("_MD_VOTEAPPRE", "感谢您的评分。");
define("_MD_THANKYOU", "感谢您花时间在 %s 评分"); // %s is your site name
define("_MD_VOTES", "人次");
define("_MD_NOVOTERATE", "你没有对该主题评分");


// polls.php
define("_MD_POLL_DBUPDATED", "数据库更新成功！");
define("_MD_POLL_POLLCONF", "投票调查设置");
define("_MD_POLL_POLLSLIST", "投票调查列表");
define("_MD_POLL_AUTHOR", "该投票调查的发起人");
define("_MD_POLL_DISPLAYBLOCK", "在区块中显示?");
define("_MD_POLL_POLLQUESTION", "投票调查问题");
define("_MD_POLL_VOTERS", "总投票调查人数");
define("_MD_POLL_VOTES", "总票数");
define("_MD_POLL_EXPIRATION", "过期日期");
define("_MD_POLL_EXPIRED", "已过期");
define("_MD_POLL_VIEWLOG", "查看纪录");
define("_MD_POLL_CREATNEWPOLL", "发起新投票调查");
define("_MD_POLL_POLLDESC", "描述");
define("_MD_POLL_DISPLAYORDER", "顺序");
define("_MD_POLL_ALLOWMULTI", "允许多选?");
define("_MD_POLL_NOTIFY", "投票调查到期时通知发起人？");
define("_MD_POLL_POLLOPTIONS", "选项");
define("_MD_POLL_EDITPOLL", "编辑投票调查");
define("_MD_POLL_FORMAT", "格式： yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME", "当前时间 %s");
define("_MD_POLL_EXPIREDAT", "有效期 %s");
define("_MD_POLL_RESTART", "重新启动该投票调查");
define("_MD_POLL_ADDMORE", "添加选项");
define("_MD_POLL_RUSUREDEL", "确定要删除投票调查及评论?");
define("_MD_POLL_RESTARTPOLL", "重新启动投票调查");
define("_MD_POLL_RESET", "重设该投票调查的纪录？");
define("_MD_POLL_ADDPOLL", "发起投票调查");
define("_MD_POLLMODULE_ERROR", "xoopspoll不能正常使用");

//report.php
define("_MD_REPORTED", "感谢您举报！ 管理员将会尽快处理。");
define("_MD_REPORT_ERROR", "发送举报时发生错误。");
define("_MD_REPORT_TEXT", "举报信息：");

define("_MD_PDF", "生成PDF文件");
define("_MD_PDF_PAGE", "第 %s 页");

//print.php
define("_MD_COMEFROM", "来自：");

//viewpost.php
define("_MD_VIEWALLPOSTS", "查看所有帖子");
define("_MD_VIEWTOPIC", "主题");
define("_MD_VIEWFORUM", "论坛");

define("_MD_COMPACT", "简洁显示");

define("_MD_MENU_SELECT", "下拉选择框");
define("_MD_MENU_HOVER", "HOVER展开");
define("_MD_MENU_CLICK", "点击展开");

define("_MD_WELCOME_SUBJECT", "新会员 %s 报到");
define("_MD_WELCOME_MESSAGE", "大家好，<strong>%s</strong> 初次光临，请多多指教。");

define("_MD_VIEWNEWPOSTS", "查看新帖子");

define("_MD_INVALID_SUBMIT", "无效提交。可能系统session失效或是超过系统规定的时间而退出, 请重新提交或保存帖子的内容并重新登陆提交。");

define("_MD_ACCOUNT", "账号");
define("_MD_NAME", "用户名");
define("_MD_PASSWORD", "密码");
define("_MD_LOGIN", "登录");

define("_MD_TRANSFER", "工具箱");
define("_MD_TRANSFER_DESC", "应用扩展");
define("_MD_TRANSFER_DONE", "操作已成功执行： %s");

define("_MD_APPROVE", "审核");
define("_MD_RESTORE", "恢复");
define("_MD_SPLIT_ONE", "分割本帖");
define("_MD_SPLIT_TREE", "分割所有子帖");
define("_MD_SPLIT_ALL", "分割所有后续帖子");

define("_MD_TYPE_ADMIN", "管理模式");
define("_MD_TYPE_VIEW", "浏览模式");
define("_MD_TYPE_PENDING", "待审核");
define("_MD_TYPE_DELETED", "垃圾站");
define("_MD_TYPE_SUSPEND", "封禁账号");

define("_MD_DBUPDATED", "数据已成功更新！");

define("_MD_SUSPEND_SUBJECT", "用户 %s 被禁止发言 %d 天");
define("_MD_SUSPEND_TEXT", "用户 %s 被禁止发言 %d 天，原因：<br />[quote]%s[/quote]<br /><br />封禁期持续至 %s");
define("_MD_SUSPEND_UID", "用户 ID");
define("_MD_SUSPEND_IP", "IP区段");
define("_MD_SUSPEND_DURATION", "封禁时间");
define("_MD_SUSPEND_DESC", "原因");
define("_MD_SUSPEND_LIST", "封禁列表");
define("_MD_SUSPEND_START", "起始");
define("_MD_SUSPEND_EXPIRE", "截止");
define("_MD_SUSPEND_SCOPE", "范围");
define("_MD_SUSPEND_MANAGEMENT", "用户监视管理");
define("_MD_SUSPEND_NOACCESS", "你的账号或IP已被禁止发言");

define("_MD_NEWBB_TYPE", "主题类别");
define("_MD_NEWBB_TAG", "Tag");

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A", "B", "c", "d", "D", "F", "g", "G", "h", "H", "i", "I", "j", "l", "L", "m", "M", "n", "O", "r", "s", "S", "t", "T", "U", "w", "W", "Y", "y", "z", "Z"	
// insert double '\' before 't', 'r', 'n'
define("_MD_TODAY", "今天 G:i:s");
define("_MD_YESTERDAY", "昨天 G:i:s");
define("_MD_MONTHDAY", "n/j G:i:s");
define("_MD_YEARMONTHDAY", "Y/n/j G:i");

?>