<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%                File Name index.php             %%%%%
define("_MA_NW_PRINTER","可打印模式");
define("_MA_NW_SENDSTORY","转发给朋友");
define("_MA_NW_READMORE","阅读全文...");
define("_MA_NW_COMMENTS","发表评论");
define("_MA_NW_ONECOMMENT","1篇评论");
define("_MA_NW_BYTESMORE","%s字符 (含本文)");
define("_MA_NW_NUMCOMMENTS","%s篇评论");
define("_MA_NW_MORERELEASES","更多内容 ");


//%%%%%%                File Name submit.php            %%%%%
define("_MA_NW_SUBMITNEWS","发布新闻");
define("_MA_NW_TITLE","标题");
define("_MA_NW_TOPIC","新闻分类");
define("_MA_NW_THESCOOP","摘要");
define("_MA_NW_NOTIFYPUBLISH","若有人评论，发mail通知");
define("_MA_NW_POST","发布");
define("_MA_NW_GO","确定");
define("_MA_NW_THANKS","感谢您提供新闻。"); //submission of news article

define("_MA_NW_NOTIFYSBJCT","有人提供新的新闻"); // Notification mail subject
define("_MA_NW_NOTIFYMSG","有人到站上提供了新闻，请去看一看。"); // Notification mail message

//%%%%%%                File Name archive.php           %%%%%
define("_MA_NW_NEWSARCHIVES","按月归档");
define("_MA_NW_ARTICLES","新闻");
define("_MA_NW_VIEWS","阅读数");
define("_MA_NW_DATE","日期");
define("_MA_NW_ACTIONS","功能选项");
define("_MA_NW_PRINTERFRIENDLY","可打印模式");

define("_MA_NW_THEREAREINTOTAL","总计有%s篇新闻");

// %s is your site name
define("_MA_NW_INTARTICLE","不错的新闻来自於%s");
define("_MA_NW_INTARTFOUND","我在%s发现不错的新闻哦");

define("_MA_NW_TOPICC","新闻类别：");
define("_MA_NW_URL","链接 (URL)：");
define("_MA_NW_NOSTORY","抱歉，尚未选择新闻。");

//%%%%%%        File Name print.php     %%%%%

define("_MA_NW_URLFORSTORY","本篇新闻的链接网址是：");

// %s represents your site name
define("_MA_NW_THISCOMESFROM","本篇新闻来自：%s");

// Added by Herv?
define("_MA_NW_ATTACHEDFILES","附件：");
define("_MA_NW_ATTACHEDLIB","该新闻有附件");
define("_MA_NW_NEWSSAMEAUTHORLINK","该作者发布的其他新闻");
define("_MA_NW_NO_TOPICS","尚无分类，请在提交新闻前先创建至少一个分类");
define("_MA_NW_PREVIOUS_ARTICLE","上一篇");
define("_MA_NW_NEXT_ARTICLE","下一篇");
define("_MA_NW_OTHER_ARTICLES","其他新闻");

// Added by Herv?in version 1.3 for rating
define("_MA_NW_RATETHISNEWS","对此新闻评分");
define("_MA_NW_RATEIT","评分");
define("_MA_NW_TOTALRATE","总评分");
define("_MA_NW_RATINGLTOH","升序评分 (从低到高)");
define("_MA_NW_RATINGHTOL","降序评分 (从高到低)");
define("_MA_NW_RATINGC","评分: ");
define("_MA_NW_RATINGSCALE","分值范围为：1 - 10。1为最低，10为最高。");
define("_MA_NW_BEOBJECTIVE","请认真评分，若每篇新闻都为1或10，评分将毫无意义。");
define("_MA_NW_DONOTVOTE","请不要给自己的新闻评分。");
define("_MA_NW_RATING","评分");
define("_MA_NW_VOTE","投票");
define("_MA_NW_NORATING","尚未选择评分。");
define("_MA_NW_USERAVG","平均用户评分");
define("_MA_NW_DLRATINGS","新闻评分 (总票数: %s)");
define("_MA_NW_ONEVOTE","1 票");
define("_MA_NW_NUMVOTES","%u 票");                // Warning
define("_MA_NW_CANTVOTEOWN","您不能对自己的新闻投票。<br />所有投票将被记录和检查。");
define("_MA_NW_VOTEDELETED","投票数据已删除。");
define("_MA_NW_VOTEONCE","请勿对同一篇新闻多次投票。");
define("_MA_NW_VOTEAPPRE","感谢您的投票。");
define("_MA_NW_THANKYOU","感谢您在 %s 参加投票"); // %s is your site name
define("_MA_NW_RSSFEED","RSS Feed");       // Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_MA_NW_AUTHOR","作者");
define("_MA_NW_META_DESCRIPTION","Meta 描述");
define("_MA_NW_META_KEYWORDS","Meta 关键词");
define("_MA_NW_MAKEPDF","创建PDF");
define("_MA_NW_POSTEDON","发布於：");
define("_MA_NW_AUTHOR_ID","作者ID");
define("_MA_NW_POST_SORRY","抱歉，尚无该分类或是您尚不具备在分类中发表的权限。如果您是管理员，请进入权限管理并设定「提交」权限。");

// Added in v 1.50
define("_MA_NW_LINKS","链接");
define("_MA_NW_PAGE","页");
define("_MA_NW_BOOKMARK_ME","在以下网站做书签");
define("_AM_NW_TOTAL","共 %u 篇文章");
define("_AM_NW_WHOS_WHO","作者列表");
define("_MA_NW_LIST_OF_AUTHORS","这是作者列表, 点击名字可看到他的文章");
define("_AM_NW_TOPICS_DIRECTORY","新闻目录");
define("_MA_NW_PAGE_AUTO_SUMMARY","页 %d : %s");

// Added in version 1.51
define("_MA_NW_BOOKMARK_TO_BLINKLIST","加入Blinklist");
define("_MA_NW_BOOKMARK_TO_DELICIOUS","加入del.icio.us");
define("_MA_NW_BOOKMARK_TO_DIGG","加入Digg");
define("_MA_NW_BOOKMARK_TO_FARK","加入Fark");
define("_MA_NW_BOOKMARK_TO_FURL","加入Furl");
define("_MA_NW_BOOKMARK_TO_NEWSVINE","加入Newsvine");
define("_MA_NW_BOOKMARK_TO_REDDIT","加入Reddit");
define("_MA_NW_BOOKMARK_TO_SIMPY","加入Simpy");
define("_MA_NW_BOOKMARK_TO_SPURL","加入Spurl");
define("_MA_NW_BOOKMARK_TO_YAHOO","加入Yahoo");

// Added in version 1.56
define("_MA_NW_NOTYETSTORY","很抱歉，所选的新闻尚未发布。请返回，然后再试一次.");
define("_MA_NW_ON","于");
define("_MA_NW_READS","次阅读");

// Added in version 1.68 BETA
define("_MA_NW_SP",":");
define("_MA_NW_POSTED","Posted");

// Added in version 1.68 RC1
define("_MA_NW_NO_COMMENT","No comment");
define("_MA_NW_METASIZE","Sorry, you may not add more than '+len+' characters into the text area box you just completed.");

// Added in version 1.68 RC3
define("_MA_NW_SEO_TOPICS","topics");
define("_MA_NW_SEO_ARTICLES","articles");
define("_MA_NW_SEO_PRINT","print");
define("_MA_NW_SEO_PDF","pdf");
?>
