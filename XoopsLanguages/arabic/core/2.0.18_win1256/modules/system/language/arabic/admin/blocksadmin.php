<?php
// $Id: blocksadmin.php 506 2006-05-26 23:10:37Z skalpa $
//%%%%%%	Admin Module Name  Blocks 	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	blocks.php 	%%%%%
define("_AM_BADMIN","<p align=right>בזֹֽ Êֽßד ַבָבזßַÊ");
define("_AM_ADDBLOCK","ֳײÝ ָבזß ּֿםֿ");
define("_AM_LISTBLOCK","Úׁײ ּדםÚ ַבָבזßַÊ");
define("_AM_SIDE","ַבֵÊַּו");
define("_AM_BLKDESC","זױÝ ַבָבזß");
define("_AM_TITLE","ַבֵ׃ד");
define("_AM_WEIGHT","ַבÊׁÊםָ");
define("_AM_ACTION","ַבÊֽßד");
define("_AM_BLKTYPE","־ױֶַױ ַבָבזß");
define("_AM_LEFT","םדםה");
define("_AM_RIGHT","ם׃ַׁ");
define("_AM_CENTER","דהÊױÝ");
define("_AM_VISIBLE","דֶׁם");
define("_AM_POSCONTT","דזײזÚ ַבדֽÊזםַÊ");
define("_AM_ABOVEORG","ÝזÞ ַבדֽÊזםַÊ ַבֳױבםֹ");
define("_AM_AFTERORG","ֳ׃Ýב ַבדֽÊזםַÊ ַבֳױבםֹ");
define("_AM_EDIT","Êֽׁםׁ");
define("_AM_DELETE","ד׃ֽ");
define("_AM_SBLEFT","ָבזß דÊַּהָ - םדםה");
define("_AM_SBRIGHT","ָבזß דÊַּהָ - ם׃ַׁ");
define("_AM_CBLEFT","ָבזß ַבדהÊױÝ - םדםה");
define("_AM_CBRIGHT","ָבזß ַבדהÊױÝ - ם׃ַׁ");
define("_AM_CBCENTER","ָבזß ַבדהÊױÝ - דהÊױÝ");
define("_AM_CBBOTTOMLEFT","ָבזß ַבדהÊױÝ - ם׃ַׁ ֳ׃Ýב");
define("_AM_CBBOTTOMRIGHT","ָבזß ַבדהÊױÝ - םדםה ֳ׃Ýב");
define("_AM_CBBOTTOM","ָבזß ַבדהÊױÝ - ֳ׃Ýב");
define("_AM_CONTENT","ַבדֽÊזםַÊ");
define("_AM_OPTIONS","ַבֵ־ÊםַַׁÊ");
define("_AM_CTYPE","בÛֹ ַבדֽÊזםַÊ");
define("_AM_HTML","בÛֹ html");
define("_AM_PHP","ָׁהַדּ php");
define("_AM_AFWSMILE","״ָםÚם (ÊװÛםב ַבזּזו ַבÊÚָםׁםֹ)");
define("_AM_AFNOSMILE","״ָםÚם (ַםÞַÝ ַבזּזו ַבÊÚָםׁםֹ)");
define("_AM_SUBMIT","ֳׁ׃ב");
define("_AM_CUSTOMHTML","ָבזß ÊÞבםֿם (HTML)");
define("_AM_CUSTOMPHP","ָבזß ÊÞבםֿם (PHP)");
define("_AM_CUSTOMSMILE","ָבזß ÊÞבםֿם (״ָםÚם + זּזו ÊÚָםׁםֹ)");
define("_AM_CUSTOMNOSMILE","ָבזß ÊÞבםֿם (״ָםÚם)");
define("_AM_DISPRIGHT","Úׁײ ַבָבזßַÊ ַבדזּזֿםה Úבל ַבםדםה");
define("_AM_SAVECHANGES","ֽÝÙ ַבÊÛםַׁÊ");
define("_AM_EDITBLOCK","Êֽׁםׁ ַבָבזß");
define("_AM_SYSTEMCANT","ָבזßַÊ ַבהÙַד בַ םדßה ד׃ֽוַ");
define("_AM_MODULECANT","בַ םדßה ד׃ֽ ו׀ַ ַבָבזß ַבַ ַ׀ַ ֳזÞÝÊ ַבָׁהַדּ הÝ׃ו Úה ״ׁםÞ ַבדזֿםב (ַבַָׁדּ)");
define("_AM_RUSUREDEL","וב ֳהÊ דÊֳßֿ דה ַהß Êׁםֿ ד׃ֽ ו׀ַ ַבָבזß <b>%s</b> ¿");
define("_AM_NAME","ַבֵ׃ד");
define("_AM_USEFULTAGS","ֳדׁ דÝםֿ :");
define("_AM_BLOCKTAG1","%s ׃םÊּׁד ַבל %s");
define('_AM_SVISIBLEIN', 'Úׁײ ַבָבזßַÊ Ýם %s');
define('_AM_TOPPAGE', 'ַבױÝֹֽ ַבֳזבל');
define('_AM_VISIBLEIN', 'דֶׁם Ýם');
define('_AM_ALLPAGES', 'ßב ַבױÝַֽÊ');
define('_AM_TOPONLY', 'ֳÚבל ַבױÝֹֽ');
define('_AM_ADVANCED', 'ÊÚֿםבַÊ דÊÞֿדֹ');
define('_AM_BCACHETIME', 'דֹֿ ַבÊ־ׂםה');
define('_AM_BALIAS', 'ַבֵ׃ד ַבד׃ÊÚַׁ בו');
define('_AM_CLONE', 'ה׃־ֹ');  // clone a block
define('_AM_CLONEBLK', 'דה׃ז־'); // cloned block
define('_AM_CLONEBLOCK', 'ַהװֱַ ה׃־ֹ דה ַבָבזß');
define('_AM_NOTSELNG', "'%s' בד םÊד ַ־Êםַׁו"); // error message
define('_AM_EDITTPL', 'Êֽׁםׁ ַבÞַבָ');
define('_AM_MODULE', 'ָׁהַדּ');
define('_AM_GROUP', 'דּדזÚֹ');
define('_AM_UNASSIGNED', 'Ûםׁ דֽֿֿ');
?>
