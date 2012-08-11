<?php
// $Id: blocksadmin.php 2902 2009-03-05 07:13:07Z phppp $
// _LANGCODE: ar
// _CHARSET : windows-1256
// Translator: Arab XOOPS Team

//%%%%%%	Admin Module Name  Blocks 	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	blocks.php 	%%%%%
define("_AM_BADMIN","áæÍÉ ÊÍßã ÇáÈáæßÇÊ");
define("_AM_ADDBLOCK","ÅÖÇÝÉ Èáæß ÌÏíÏ");
define("_AM_LISTBLOCK","ÚÑÖ ÌãíÚ ÇáÈáæßÇÊ");
define("_AM_SIDE","ÇáÇÊÌÇå");
define("_AM_BLKDESC","æÕÝ ÇáÈáæß");
define("_AM_TITLE","ÇáÇÓã");
define("_AM_WEIGHT","ÇáÊÑÊíÈ");
define("_AM_ACTION","ÇáÊÍßã");
define("_AM_BLKTYPE","ÎÕÇÆÕ ÇáÈáæß");
define("_AM_LEFT","íÓÇÑ");
define("_AM_RIGHT","íãíä");
define("_AM_CENTER","ãäÊÕÝ");
define("_AM_VISIBLE","ãÑÆí");
define("_AM_POSCONTT","ãæÖæÚ ÇáãÍÊæíÇÊ");
define("_AM_ABOVEORG","ÝæÞ ÇáãÍÊæíÇÊ ÇáÃÕáíÉ");
define("_AM_AFTERORG","ÃÓÝá ÇáãÍÊæíÇÊ ÇáÃÕáíÉ");
define("_AM_EDIT","ÊÍÑíÑ");
define("_AM_DELETE","ãÓÍ");
define("_AM_SBLEFT","Èáæß ÌÇäÈí - íÓÇÑ");
define("_AM_SBRIGHT","Èáæß ÌÇäÈí - íãíä");
define("_AM_CBLEFT","Èáæß ÇáãäÊÕÝ - íÓÇÑ");
define("_AM_CBRIGHT","Èáæß ÇáãäÊÕÝ - íãíä");
define("_AM_CBCENTER","Èáæß ÇáãäÊÕÝ - ãäÊÕÝ");
define("_AM_CBBOTTOMLEFT","Èáæß ÇáãäÊÕÝ - íÓÇÑ ÃÓÝá");
define("_AM_CBBOTTOMRIGHT","Èáæß ÇáãäÊÕÝ - íãíä ÃÓÝá");
define("_AM_CBBOTTOM","Èáæß ÇáãäÊÕÝ - ÃÓÝá");
define("_AM_CONTENT","ÇáãÍÊæíÇÊ");
define("_AM_OPTIONS","ÇáÇÎÊíÇÑÇÊ");
define("_AM_CTYPE","áÛÉ ÇáãÍÊæíÇÊ");
define("_AM_HTML","áÛÉ html");
define("_AM_PHP","ÈÑäÇãÌ php");
define("_AM_AFWSMILE","ØÈíÚí (ÊÔÛíá ÇáæÌæå ÇáÊÚÈíÑíÉ)");
define("_AM_AFNOSMILE","ØÈíÚí (ÅíÞÇÝ ÇáæÌæå ÇáÊÚÈíÑíÉ)");
define("_AM_SUBMIT","ÃÑÓá");
define("_AM_CUSTOMHTML","Èáæß ÊÞáíÏí (HTML)");
define("_AM_CUSTOMPHP","Èáæß ÊÞáíÏí (PHP)");
define("_AM_CUSTOMSMILE","Èáæß ÊÞáíÏí (ØÈíÚí + æÌæå ÊÚÈíÑíÉ)");
define("_AM_CUSTOMNOSMILE","Èáæß ÊÞáíÏí (ØÈíÚí)");
define("_AM_DISPRIGHT","ÚÑÖ ÇáÈáæßÇÊ ÇáãæÌæÏÉ Úáì Çáíãíä");
define("_AM_SAVECHANGES","ÍÝÙ ÇáÊÛíÑÇÊ");
define("_AM_EDITBLOCK","ÊÍÑíÑ ÇáÈáæß");
define("_AM_SYSTEMCANT","ÈáæßÇÊ ÇáäÙÇã áÇ íãßä ãÓÍåÇ");
define("_AM_MODULECANT","áÇ íãßä ãÓÍ åÐÇ ÇáÈáæß ÇáÇ ÇÐÇ ÃæÞÝÊ ÇáÈÑäÇãÌ äÝÓå Úä ØÑíÞ ÇáãæÏíá (ÇáÈÑÇãÌ)");
define("_AM_RUSUREDEL","åá ÃäÊ ãÊÃßÏ ãä ãÓÍ ÇáÈáæß ¿ <strong>%s</strong> ¿");
define("_AM_NAME","ÇáÅÓã");
define("_AM_USEFULTAGS","ÃæÓãÉ ãÝíÏÉ :");
define("_AM_BLOCKTAG1","%s ÓíÊÑÌã Åáì %s");
define('_AM_SVISIBLEIN','ÚÑÖ ÇáÈáæßÇÊ Ýí %s');
define('_AM_TOPPAGE','ÇáÕÝÍÉ ÇáÃæáì');
define('_AM_VISIBLEIN','ãÑÆí Ýí');
define('_AM_ALLPAGES','ßá ÇáÕÝÍÇÊ');
define('_AM_TOPONLY','ÃÚáì ÇáÕÝÍÉ');
define('_AM_ADVANCED','ÊÚÏíáÇÊ ãÊÞÏãÉ');
define('_AM_BCACHETIME','ãÏÉ ÇáÊÎÒíä');
define('_AM_BALIAS','ÇáÇÓã ÇáãÓÊÚÇÑ áå');
define('_AM_CLONE','äÓÎ');  // clone a block
define('_AM_CLONEBLK','ãäÓæÎ'); // cloned block
define('_AM_CLONEBLOCK','ÅäÔÇÁ äÓÎÉ ãä ÇáÈáæß');
define('_AM_NOTSELNG',"'%s' áã íÊã ÇÎÊíÇÑå"); // error message
define('_AM_EDITTPL','ÊÍÑíÑ ÇáÞÇáÈ');
define('_AM_MODULE','ÇáÈÑäÇãÌ');
define('_AM_GROUP','ÇáãÌãæÚÉ');
define('_AM_UNASSIGNED','ÛíÑ ãÍÏÏ');

define("_AM_CUSTOM","Èáæß ÅÖÇÝí");
define('_AM_GENERATOR','ÈáæßÇÊ ÃäÔÃÊ ÈæÇÓØÉ %s');
define('_AM_TYPES','Çáßá');

?>
