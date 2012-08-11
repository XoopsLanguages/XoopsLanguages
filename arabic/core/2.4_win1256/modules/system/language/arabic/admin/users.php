<?php
// $Id: users.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: ar
// _CHARSET : windows-1256
// Translator: Arab XOOPS Team

//%%%%%%	Admin Module Name  Users 	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_AM_AYSYWTDU","åá ÃäÊ ãÊÃßÏ ÊÑíÏ ãÓÍ åÐÇ  %s ÇáÚÖæ ¿");
define("_AM_BYTHIS","ÈæÇÓØÉ åÐå ÇáÚãáíÉ ÓíÊã ãÓÌ ÌãíÚ ãÚáæãÇÊ ÇáÚÖæ");
define("_AM_YES","äÚã");
define("_AM_NO","áÇ");
define("_AM_YMCACF","íÌÈ ÅßãÇá ÌãíÚ ÇáÍÞæá ÇáÅáÒÇãíÉ");
define("_AM_CNRNU","áÇ íãßä ÇáÇÔÊÑÇß");
define("_AM_EDEUSER","ÅÖÇÝÉ æ ÊÍÑíÑ æ ãÓÍ ÇáÃÚÖÇÁ");
define("_AM_NICKNAME","ÇÓã ÇáãÓÊÎÏã");
define("_AM_MODIFYUSER","ÊÚÏíá ÚÖæ");
define("_AM_DELUSER","ãÓÍ ÚÖæ");
define("_AM_GO","ÇÐåÈ");
define("_AM_ADDUSER","ÅÖÇÝÉ ÚÖæ");
define("_AM_NAME","ÇáÇÓã");
define("_AM_EMAIL","ÇáÈÑíÏ");
define("_AM_OPTION","ÇáÇÎÊíÇÑ");
define("_AM_AVATAR","ÇáÕæÑÉ");
define("_AM_THEME","ÇáËíã");
define("_AM_AOUTVTEAD","ÇáÓãÇÍ ááãÓÊÎÏãíä ÈãÔÇåÏÉ ÇáÈÑíÏ");
define("_AM_URL","ÇáãæÞÚ ÇáÅáßÊÑæäí");
define("_AM_ICQ","ICQ");
define("_AM_AIM","AIM");
define("_AM_YIM","YIM");
define("_AM_MSNM","MSNM");
define("_AM_LOCATION","ÇáÏæáÉ");
define("_AM_OCCUPATION","ÇáæÙíÝÉ");
define("_AM_INTEREST","ÇáåæÇíÇÊ");
define("_AM_RANK","ÇáÑÊÈÉ");
define("_AM_NSRA","áÇ íæÌÏ ÑÊÈÉ ÎÇÕÉ");
define("_AM_NSRID","áÇ íæÌÏ ÑÊÈ ÎÇÕÉ Ýí ÞÇÚÏÉ ÇáÈíÇäÇÊ");
define("_AM_ACCESSLEV","ÏÑÌÉ ÇáÕáÇÍíÉ");
define("_AM_SIGNATURE","ÇáÊæÞíÚ");
define("_AM_PASSWORD","ßáãÉ ÇáãÑæÑ");
define("_AM_INDICATECOF","ÚáÇãÉ * ÊÏá Úáì ÍÞá ÅáÒÇãí");
define("_AM_NOTACTIVE","åÐÇ ÇáÚÖæ áã íäÔØ ÇÔÊÑÇßå åá ÊæÏ ÊäÔíØ ÇÔÊÑÇßå ¿");
define("_AM_UPDATEUSER","ÊÍÏíË ÇáÚÖæ");
define("_AM_USERINFO","ãÚáæãÇÊ ÇáÚÖæ");
define("_AM_USERID","ÑÞã ÇáÚÖæ");
define("_AM_RETYPEPD","ßáãÉ ÇáãÑæÑ ãÑÉ ÃÎÑì");
define("_AM_CHANGEONLY","(ááÊÛíÑÇÊ ÝÞØ)");
define("_AM_USERPOST","ãÔÇÑßÇÊ ÇáÚÖæ");
define("_AM_STORIES","ÇáãÞÇáÇÊ");
define("_AM_COMMENTS","ÇáÊÚáíÞÇÊ");
define("_AM_PTBBTSDIYT","ÅÐÇ ßäÊ ÛíÑ ãÊÃßÏ Ãä ãÚáæãÇÊ ÇáãÔÇÑßÉ ÛíÑ ÕÍíÍÉ Ãæ ÛíÑ ãÊÒÇãäå ÝÇÖÛØ Úáì ÇáÒÑ ÇáÊÇáí");
define("_AM_SYNCHRONIZE","ÇáÊÒÇãä");
define("_AM_USERDONEXIT","ÇáÚÖæ ÛíÑ ãÓÌá");
define("_AM_STNPDNM","ÚÝæÇ ßáãÉ ÇáãÑæÑ ÇáÌÏíÏÉ ÛíÑ ãÊØÇÈÞÉ");
define("_AM_CNGTCOM","áã íÊã ÇáÚËæÑ Úáì ÌãíÚ ÇáÊÚáíÞÇÊ");
define("_AM_CNGTST","áã íÊã ÇáÚËæÑ Úáì ÌãíÚ ÇáãÞÇáÇÊ");
define("_AM_CNUUSER","áã íÊã ÊÍÏíË ÇáÚÖæ");
define("_AM_CNGUSERID","áã íÊã ÇáÚËæÑ Úáì ÑÞã ÇáÚÖæ");
define("_AM_LIST","ÇáÞÇÆãÉ");
define("_AM_NOUSERS","áã ÊÍÏÏ ÇáÚÖæ");

define("_AM_CNRNU2","ÇáÚÖæ ÇáÌÏíÏ áã ÊÊã ÅÖÇÝÊå Åáì ãÌãæÚÉ: %s.");

?>
