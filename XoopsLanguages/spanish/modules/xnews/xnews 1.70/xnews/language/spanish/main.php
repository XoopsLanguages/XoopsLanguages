<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_MA_NW_PRINTER","Printer Friendly Page");
define("_MA_NW_SENDSTORY","Send this Story to a Friend");
define("_MA_NW_READMORE","Read More...");
define("_MA_NW_COMMENTS","Comments?");
define("_MA_NW_ONECOMMENT","1 comment");
define("_MA_NW_BYTESMORE","%s bytes more");
define("_MA_NW_NUMCOMMENTS","%s comments");
define("_MA_NW_MORERELEASES","More releases in ");


//%%%%%%		File Name submit.php		%%%%%
define("_MA_NW_SUBMITNEWS","Submit News");
define("_MA_NW_TITLE","Title");
define("_MA_NW_TOPIC","Topic");
define("_MA_NW_THESCOOP","The Scoop");
define("_MA_NW_NOTIFYPUBLISH","Notify by mail when published");
define("_MA_NW_POST","Post");
define("_MA_NW_GO","Go!");
define("_MA_NW_THANKS","Thanks for your submission."); //submission of news article

define("_MA_NW_NOTIFYSBJCT","NEWS for my site"); // Notification mail subject
define("_MA_NW_NOTIFYMSG","Hey! You got a new submission for your site."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_MA_NW_NEWSARCHIVES","News Archives");
define("_MA_NW_ARTICLES","Articles");
define("_MA_NW_VIEWS","Views");
define("_MA_NW_DATE","Date");
define("_MA_NW_ACTIONS","Actions");
define("_MA_NW_PRINTERFRIENDLY","Printer Friendly Page");

define("_MA_NW_THEREAREINTOTAL","There are %s article(s) in total");

// %s is your site name
define("_MA_NW_INTARTICLE","Interesting Article at %s");
define("_MA_NW_INTARTFOUND","Here is an interesting article I have found at %s");

define("_MA_NW_TOPICC","Topic:");
define("_MA_NW_URL","URL:");
define("_MA_NW_NOSTORY","Sorry, the selected story does not exist.");

//%%%%%%	File Name print.php 	%%%%%

define("_MA_NW_URLFORSTORY","The URL for this story is:");

// %s represents your site name
define("_MA_NW_THISCOMESFROM","This article comes from %s");

// Added by Hervé
define("_MA_NW_ATTACHEDFILES","Attached Files:");
define("_MA_NW_ATTACHEDLIB","This article has attached files");
define("_MA_NW_NEWSSAMEAUTHORLINK","News by the same author");
define("_MA_NW_NO_TOPICS","Sorry but actually there are no topics, please create one before submitting news");
define("_MA_NW_PREVIOUS_ARTICLE","Previous article");
define("_MA_NW_NEXT_ARTICLE","Next article");
define("_MA_NW_OTHER_ARTICLES","Other articles");

// Added by Hervé in version 1.3 for rating
define("_MA_NW_RATETHISNEWS","Rate this News");
define("_MA_NW_RATEIT","Rate It!");
define("_MA_NW_TOTALRATE","Total Ratings");
define("_MA_NW_RATINGLTOH","Rating (Lowest Score to Highest Score)");
define("_MA_NW_RATINGHTOL","Rating (Highest Score to Lowest Score)");
define("_MA_NW_RATINGC","Rating: ");
define("_MA_NW_RATINGSCALE","The scale is 1 - 10, with 1 being poor and 10 being excellent.");
define("_MA_NW_BEOBJECTIVE","Please be objective, if everyone receives a 1 or a 10, the ratings aren't very useful.");
define("_MA_NW_DONOTVOTE","Do not vote for your own resource.");
define("_MA_NW_RATING","Rating");
define("_MA_NW_VOTE","Vote");
define("_MA_NW_NORATING","No rating selected.");
define("_MA_NW_USERAVG","Average User Rating");
define("_MA_NW_DLRATINGS","News Rating (total votes: %s)");
define("_MA_NW_ONEVOTE","1 vote");
define("_MA_NW_NUMVOTES","%u votes");		// Warning
define("_MA_NW_CANTVOTEOWN","You cannot vote on the resource you submitted.<br />All votes are logged and reviewed.");
define("_MA_NW_VOTEDELETED","Vote data deleted.");
define("_MA_NW_VOTEONCE","Please do not vote for the same resource more than once.");
define("_MA_NW_VOTEAPPRE","Your vote is appreciated.");
define("_MA_NW_THANKYOU","Thank you for taking the time to vote here at %s"); // %s is your site name
define("_MA_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_MA_NW_AUTHOR","Author");
define("_MA_NW_META_DESCRIPTION","Meta description");
define("_MA_NW_META_KEYWORDS","Meta keywords");
define("_MA_NW_MAKEPDF","Create a PDF from the article");
define("_MA_NW_POSTEDON","Posted on : ");
define("_MA_NW_AUTHOR_ID","Author's ID");
define("_MA_NW_POST_SORRY","Sorry but either there are no topics or you don't have the rights to post in any topic. If you ar the webmaster, go in the permissions and set the 'Submit' permissions.");

// Added in v 1.50
define("_MA_NW_LINKS","Links");
define("_MA_NW_PAGE","Page");
define("_MA_NW_BOOKMARK_ME","Bookmark this article at these sites");
define("_AM_NW_TOTAL","Total of %u articles");
define("_AM_NW_WHOS_WHO","Who's Who");
define("_MA_NW_LIST_OF_AUTHORS","Here is a list of the authors of this site, click on the name to see his/her articles");
define("_AM_NW_TOPICS_DIRECTORY","Topics Directory");
define("_MA_NW_PAGE_AUTO_SUMMARY","Page %d : %s");

// Added in version 1.51
define("_MA_NW_BOOKMARK_TO_BLINKLIST","Bookmark to Blinklist");
define("_MA_NW_BOOKMARK_TO_DELICIOUS","Bookmark to del.icio.us");
define("_MA_NW_BOOKMARK_TO_DIGG","Bookmark to Digg");
define("_MA_NW_BOOKMARK_TO_FARK","Bookmark to Fark");
define("_MA_NW_BOOKMARK_TO_FURL","Bookmark to Furl");
define("_MA_NW_BOOKMARK_TO_NEWSVINE","Bookmark to Newsvine");
define("_MA_NW_BOOKMARK_TO_REDDIT","Bookmark to Reddit");
define("_MA_NW_BOOKMARK_TO_SIMPY","Bookmark to Simpy");
define("_MA_NW_BOOKMARK_TO_SPURL","Bookmark to Spurl");
define("_MA_NW_BOOKMARK_TO_YAHOO","Bookmark to Yahoo");

// Added in version 1.56
define("_MA_NW_NOTYETSTORY","Sorry, the selected story has not been published yet. Please come back later and try again.");
define("_MA_NW_SELECT_IMAGE","Select a picture to attach to the news");
define("_MA_NW_CURENT_PICTURE","Imagen actual");

// Added in version 1.68 BETA
define("_MA_NW_SP",":");
define("_MA_NW_POSTED","Puiblicado");

// Added in version 1.68 RC1
define("_MA_NW_NO_COMMENT","Sin comentarios");
define("_MA_NW_METASIZE","No puede agregar más de '+len+' caracteres en el área de texto y ya los completó.");

// Added in version 1.68 RC3
define("_MA_NW_SEO_TOPICS","temas");
define("_MA_NW_SEO_ARTICLES","artículos");
define("_MA_NW_SEO_PRINT","imprimir");
define("_MA_NW_SEO_PDF","pdf");
?>
