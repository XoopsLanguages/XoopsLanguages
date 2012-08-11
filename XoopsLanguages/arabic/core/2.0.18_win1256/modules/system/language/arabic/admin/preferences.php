<?php
// $Id: preferences.php 1194 2007-12-19 10:01:40Z phppp $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","<p align=right>ÎíÇÑÇÊ ÇáãæÞÚ");
define("_MD_AM_SITENAME","ÅÓã ÇáãæÞÚ");
define("_MD_AM_SLOGAN","æÕÝ ÕÛíÑ áãæÞÚß");
define("_MD_AM_ADMINML","ÈÑíÏ ãÏíÑ ÇáãæÞÚ");
define("_MD_AM_LANGUAGE","ÇááÛÉ");
define("_MD_AM_STARTPAGE","ÇáÈÑäÇãÌ ÇáÃÓÇÓí ÚäÏ ÏÎæá ÇáãæÞÚ");
define("_MD_AM_NONE","áÇ íæÌÏ");
define("_MD_AM_SERVERTZ","ÇáæÞÊ Ýí ÇáÓíÑÝÑ");
define("_MD_AM_DEFAULTTZ","ÇáæÞÊ áÏíß");
define("_MD_AM_DTHEME","ÇáÞÇáÈ");
define("_MD_AM_THEMESET","ÊÍÏíÏ ÇáÞÇáÈ");
define("_MD_AM_ANONNAME","ÅÓã ÇáãÓÊÎÏã ááÒæÇÑ");
define("_MD_AM_MINPASS","ÇáÍÏ ÇáÃÏäì ãä ÇáÍÑæÝ áßáãÉ ÇáãÑæÑ");
define("_MD_AM_NEWUNOTIFY","ÃÑÓáí ÈÑíÏ Ýí ÍÇáÉ ÅÔÊÑÇß ÃÍÏ ¿");
define("_MD_AM_SELFDELETE","ÇáÓãÇÍ ááÃÚÖÇÁ ÈÅáÛÇÁ ÇÔÊÑÇßÇÊåã ¿");
define("_MD_AM_LOADINGIMG","ÚÑÖ ÕæÑÉ ÇáÊÍãíá ¿");
define("_MD_AM_USEGZIP","ÅÓÊÎÏÇã ÎÇÕíÉ ÇáÖÛØ (gzip) Ýí ÇáÓíÑÝÑ æåí ÊÍÊÇÌ Çáì ÅÕÏÇÑÉ ÇáÈí ÃÊÔ Èí ÑÞã 4.0.5 æãÇ ÝæÞ æÃäÊ ÊÓÊÎÏã ÇáÅÕÏÇÑÉ ÑÞã  %s");
define("_MD_AM_UNAMELVL","ãÇ åí ØÑíÞÉ ÊÓÌíá ÇáÃÚÖÇÁ Ýí ÇÓÊÎÏÇã ÇáÍÑæÝ (ãä ÍíË ÇáÏÞÉ) ");
define("_MD_AM_STRICT","ÍÑæÝ æÃÑÞÇã (ÇáØÑíÞÉ ÇáÃÓÇÓíÉ)");
define("_MD_AM_MEDIUM","ÃÞá ÏÞÉ");
define("_MD_AM_LIGHT","ÏÞíÞÉ ÌÏÇ (ääÕÍ ÈåÇ Ýí ÅÓÊÎÏÇã ÍÑæÝ æÃÑÞÇã æÅÔÇÑÇÊ)");
define("_MD_AM_USERCOOKIE","ÅÓã ãáÝ ÇáßæßíÒ ááÅÚÖÇÁ");
define("_MD_AM_USERCOOKIEDSC","ÊÎÒíä ÇáãáÝÇÊ ÇáãÄÞÊå áãÏÉ ÓäÉ áíÊã ÇÏÑÇÌ ÇÓã ÇáãÓÊÎÏã Ýí ÍÞá ÊÓÌíá ÇáÏÎæá Ýí ßá ÒíÇÑÉ áå");
define("_MD_AM_USEMYSESS","ÅÓÊÎÏÇã ØÑíÞÉ ÃÎÑì");
define("_MD_AM_USEMYSESSDSC","ÇÎÊÑ äÚã áÅÖÇÝÉ æÇÎÊíÇÑ ÇáØÑíÞÉ");
define("_MD_AM_SESSNAME","ÅÓã ÇáØÑíÞÉ");
define("_MD_AM_SESSNAMEDSC","ÅÓã ÇáØÑíÞÉ (ÝÞØ ÇÐÇ ÞãÊ ÈÊÝÚíá ÇáØÑíÞÉ ÇáÃÎÑì)");
define("_MD_AM_SESSEXPIRE","ÇáÅäÊåÇÁ");
define("_MD_AM_SESSEXPIREDSC","ÃßÊÈ ÇáÍÏ ÇáÃÞÕì áÊÎÒíä ãÚáæãÇÊ ÇáÚÖæ ÈÇáÏÞÇÆÞ (ãÊæÇÝÞ ãÚ ÇÕÏÇÑÉ PHP4.2.0)");
define("_MD_AM_BANNERS","ÊÝÚíá ÇáÅÚáÇäÇÊ ¿");
define("_MD_AM_MYIP","ÑÞã ÇáÃíÈí áß");
define("_MD_AM_MYIPDSC","åÐÇ ÇáÑÞã áÇ íäØÈÞ Úáì ÇáÅÚáÇä æÊÛíÑå Ýí ßá ÒíÇÑÉ");
define("_MD_AM_ALWDHTML","áÛÉ ÃÊÔ Êí Ãã Ãá ãÝáÚÉ Ýí ßá ÇáãÔÇÑßÇÊ");
define("_MD_AM_INVLDMINPASS","íÑÌì ÇÏÎá ÇáÚÏÏ ÇáÕÍíÍ Ýí ßáãÉ ÇáãÑæÑ");
define("_MD_AM_INVLDUCOOK","ÎØÃ Ýí ÇÓã ÇáãáÝ ÇáãÄÞÊ ááÚÖæ");
define("_MD_AM_INVLDSCOOK","ÎØÃ Ýí ÇÓã ÇáãáÝ ÇáãÄÞÊ ááØÑíÞÉ ÇáÃÎÑì");
define("_MD_AM_INVLDSEXP","ÎØÃ Ýí ÅÚØÇÁ ÞíãÉ ÇäÊåÇÁ ÇáãáÝ ÇáãÄÞÊ Ýí ÇáØÑíÞÉ ÇáÃÎÑì");
define("_MD_AM_ADMNOTSET","ÈÑíÏ ÇáãÏíÑ áã íÍÏÏ");
define("_MD_AM_YES","äÚã");
define("_MD_AM_NO","áÇ");
define("_MD_AM_DONTCHNG","áÇ ÊÞã ÈÇáÊÛíÑ");
define("_MD_AM_REMEMBER","ÊÐßÑ Çä ÊÚØí åÐÇ ÇáãáÝ ÊÑÎíÕ ÑÞã 666");
define("_MD_AM_IFUCANT","ÇÐÇ áã íßä áÏíß ÇáãÞÏÑÉ áÅÚØÇÁ ÊÑÎíÕ íÑÌì ÊÚÏíá ÇáãáÝ íÏæíÇ");


define("_MD_AM_COMMODE","ØÑíÞÉ ÚÑÖ ÇáÊÚáíÞÇÊ ÇáØÈíÚíÉ");
define("_MD_AM_COMORDER","ØÑíÞÉ ÓÑÏ ÇáÊÚáíÞÇÊ ÇáØÈíÚíÉ");
define("_MD_AM_ALLOWHTML","ÞÈæá ÃÊÔ Êí Ãã Ãá Ýí ÇáÊÚáíÞ ¿");
define("_MD_AM_DEBUGMODE","äÙÇã ÊÚÏíá ÇáÎØÇÁ");
define("_MD_AM_DEBUGMODEDSC","íÑÌì ÚÏã ÊÔÛíáå áÃäå ÞÏ íÍÏË ÃÎØÇÁ Ýí ÇáãæÞÚ");
define("_MD_AM_AVATARALLOW","ÞÈæá ÊÍãíá ÕæÑÉ ÔÎÕíÉ ááÃÚÖÇÁ ¿");
define('_MD_AM_AVATARMP','ÃÞá ÚÏÏ ãÔÇÑßÇÊ ãØáæÈ');
define('_MD_AM_AVATARMPDSC','ÃßÊÈ ÚÏÏ ÇáãÔÇÑßÇÊ ÇáÊí íÌÈ Ãä íÌÊÇÒåÇ ÇáÚÖæ áíÞæã ÈÊÍãíá ÕæÑÊå ÇáÔÎÕíÉ');
define("_MD_AM_AVATARW","ÃÞÕì ÚÑÖ ÇáÕæÑÉ (ÈíßÓá)");
define("_MD_AM_AVATARH","ÃÞÕì ÅÑÊÝÇÚ ááÕæÑÉ (ÈíßÓá)");
define("_MD_AM_AVATARMAX","ÃßÈÑ ÍÌã ááÕæÑÉ (ÈÇíÊ)");
define("_MD_AM_AVATARCONF","ÎíÇÑÇÊ ÊÍãíá ÇáÕæÑÉ ÇáÔÎÕíÉ");
define("_MD_AM_CHNGUTHEME","ÊÛííÑ ßá ÞæÇáÈ ÇáÃÚÖÇÁ");
define("_MD_AM_NOTIFYTO","ÅÎÊÑ ÇáãÌæÚÉ ÇáÊí ÓíÊã ÊÈáíÛåÇ Ýí ÍÇáÉ ÅÔÊÑÇß ÚÖæ ÌÏíÏ");
define("_MD_AM_ALLOWTHEME","ÇáÓãÇÍ ááÃÚÖÇÁ áÅÎÊíÇÑ ÇáÞÇáÈ ááãæÞÚ ¿");
define("_MD_AM_ALLOWIMAGE","ÇáÓãÇÍ ááÃÚÖÇÁ ÈÚÑÖ ÇáÕæÑ ÈÇáãÔÇÑßÇÊ ¿");

define("_MD_AM_USERACTV","Úä ØÑíÞ ÇÑÓÇá ÑÇÈØ ÊÝÚíá ÇáÅÔÊÑÇß ááÚÖæ");
define("_MD_AM_AUTOACTV","ÊÝÚíá ÊáÞÇÆí");
define("_MD_AM_ADMINACTV","ÊÝÚíá Úä ØÑíÞ ÇáãÏíÑ");
define("_MD_AM_ACTVTYPE","ÅÎÊÑ ØÑíÞÉ ÇÑÓÇá ãÝÊÇÍ ÊäÔíØ ÇáÅÔÊÑÇß ááãÔÊÑßíä ÇáÌÏÏ");
define("_MD_AM_ACTVGROUP","ÅÎÊÑ ÇáãÌãæÚÉ ÇáÊí ÓíÊã ÊÈáíÛåÇ");
define("_MD_AM_ACTVGROUPDSC","ÝÞØ ÚäÏ ÇÎÊíÇÑ ÊÝÚíá Úä ØÑíÞ ÇáãÏíÑ íãßäß ÊÝÚíá åÐå ÇáÎÇÕíÉ");
define('_MD_AM_USESSL','ÅÓÊÎÏÇã SSL Ýí ÊÓÌíá ÇáÏÎæá');
define('_MD_AM_SSLPOST','ÃÏÎá ÇÓã ÇáÊÍæíá');
define('_MD_AM_SSLPOSTDSC','ÅÐÇ ßäÊ ÛíÑ ãÊÃßÏ ãä åÐå ÇáÎØæÉ ÃßÊÈ Ãí ÇÓã íÕÚÈ ÊÎãíäå ÈÇááÛÉ ÇáÅäÌáíÒíÉ');
define('_MD_AM_DEBUGMODE0','áÇ íÚãá');
define('_MD_AM_DEBUGMODE1',' Êãßíä ÇáÊÕÍíÍ ( ÇáäÙÇã ÇáÎØí)');
define('_MD_AM_DEBUGMODE2','Êãßíä ÇáÊÕÍíÍ (äÙÇã ÇáäÇÝÐÉ)');
define('_MD_AM_DEBUGMODE3','Smarty Templates Debug');
define('_MD_AM_MINUNAME','ÇáÍÏ ÇáÃÏäì áÍÑæÝ ÇÓã ÇáãÓÊÎÏã');
define('_MD_AM_MAXUNAME','ÇáÍÏ ÇáÃÞÕì áÍÑæÝ ÇÓã ÇáãÓÊÎÏã');
define('_MD_AM_GENERAL','ÇáÊÚÏíáÇÊ ÇáÚÇãÉ');
define('_MD_AM_USERSETTINGS','ÊÚÏíáÇÊ ÇáÃÚÖÇÁ');
define('_MD_AM_ALLWCHGMAIL','ÇáÓãÇÍ ááÃÚÖÇÁ ÈÊÛíÑ ÈÑíÏåã ¿');
define('_MD_AM_ALLWCHGMAILDSC','');
define('_MD_AM_IPBAN','ØÑÏ ÇáÃíÈí');
define('_MD_AM_BADEMAILS','ÃÏÎá ÚäÇæíä ÇáÈÑíÏ ÇáÊí áÇ íãßä ÇÓÊÎÏÇãåÇ Ýí ÇáãÚáæãÇÊ ÇáÔÎÕíÉ ááÃÚÖÇÁ');
define('_MD_AM_BADEMAILSDSC','ÇÝÕá ÇáæÇÍÏ Úä ÇáÂÎÑ ÈÚáÇãÉ <b>|</b>');
define('_MD_AM_BADUNAMES','ÃÏÎá ÃÓãÇÁ ÇáãÓÊÎÏãíä ÇáÊí áÇ íãßä ÇáÊÓÌíá ÈåÇ');
define('_MD_AM_BADUNAMESDSC','ÇÝÕá ÇáÅÓã Úä ÇáÂÎÑ ÈÚáÇãÉ  <b>|</b>');
define('_MD_AM_DOBADIPS','ÃÏÎá ÚäÇæíä ÇáÂíÈí ÇáããäæÚÉ Ýí ãæÞÚß');
define('_MD_AM_DOBADIPSDSC','ÇáÃÚÖÇÁ ÇáÐíä íÍãáæä åÐå ÇáÃÑÞÇã ááÃíÈí áÇ íãßäåã ÊÕÝÍ ãæÞÚß');
define('_MD_AM_BADIPS','ÃÏÎá ÚäÇæíä ÇáÃíÈí ÇáãØÑæÏÉ <br />ÇÝÕá ÇáæÇÍÏ ãÚ ÇáÂÎÑ ÈÚáÇãÉ  <b>|</b>');
define('_MD_AM_BADIPSDSC','^aaa.bbb.ccc ÓíØÑÏ Ãí ÚÖæ íÍãá ãËá åÐå ÇáÃÑÞÇã  aaa.bbb.ccc<br />aaa.bbb.ccc$ Ðáß íÚäí ØÑÏ ÑÞã ÇáÃíÈí ÇáÐí íäÊåí ÈåÐÇ ÇáÚäæÇä aaa.bbb.ccc<br />aaa.bbb.ccc Ðáß íÚäí ØÑÏ Ãí ÑÞãí Ãí Èí ãÔÇÈå áÐáß ÇáÃí Èí  aaa.bbb.ccc');
define('_MD_AM_PREFMAIN','ÇáÕÝÍÉ ÇáÑÆíÓíÉ ááÊÚÏíáÇÊ');
define('_MD_AM_METAKEY','ÇáßáãÇÊ ÇáãÝÊÇÍíÉ');
define('_MD_AM_METAKEYDSC','ÇáßáãÇÊ ÇáãÝÊÇÍíÉ ÇáÊí ÓíÊã ÇíÌÇÏ ãæÞÚß ãä ÎáÇáåÇ Ýí ãÍÑßÇÊ ÇáÈÍË ÅÓÊÎÏã ÚáÇãÉ , ááÝÕá Èíä ßáãÉ æÃÎÑì');
define('_MD_AM_METARATING','ÊÑÊíÈ ÇáãíÊÇ');
define('_MD_AM_METARATINGDSC','ÅÎÊÑ ãÏÉ ÊÑÊíÈ ÇáãíÊÇ ÊÇÛ');
define('_MD_AM_METAOGEN','General');
define('_MD_AM_METAO14YRS','14 years');
define('_MD_AM_METAOREST','Restricted');
define('_MD_AM_METAOMAT','Mature');
define('_MD_AM_METAROBOTS','äåÌ ÇáÈÍË');
define('_MD_AM_METAROBOTSDSC','ÅÎÊÑ ØÑíÞÉ ÇáÈÍË Ýí ãæÞÚß åá åí ááÕÝÍÉ ÇáÑÆíÓíÉ ÝÞØ Ãã ááßá');
define('_MD_AM_INDEXFOLLOW','ÇáÕÝÍÉ ÇáÑÆíÓíÉ æÑæÇÈØåÇ');
define('_MD_AM_NOINDEXFOLLOW','ÝÞØ ÑæÇÈØ ÇáãæÞÚ');
define('_MD_AM_INDEXNOFOLLOW','ÇáÕÝÍÉ ÇáÑÆíÓíÉ ÝÞØ');
define('_MD_AM_NOINDEXNOFOLLOW','áÇ ÕÝÍÉ ÑÆíÓíÉ æáÇ ÑæÇÈØ ÇáãæÞÚ');
define('_MD_AM_METAAUTHOR','ÇáäÇÔÑ');
define('_MD_AM_METAAUTHORDSC','ÃßÊÈ ÇÓã äÇÔÑ ÇáãæÞÚ Çæ ÕÇÍÈå ÃßÊÈ ÈÑíÏå Ãæ ÅÓã ÔßÑÊå Çæ ÅÓã ãÓÊÎÏãå');
define('_MD_AM_METACOPYR','ÍÞæÞ ÇáãæÞÚ');
define('_MD_AM_METACOPYRDSC','ÃßÊÈ ÍÞæÞ ãæÞÚß ãËá ÈÑÚÇíÉ ÝæÛÇ ÝæÑ åíáÈ');
define('_MD_AM_METADESC','æÕÝ ãæÞÚß');
define('_MD_AM_METADESCDSC','ÃßÊÈ æÕÝ ãæÞÚß áÊÚÑÝ Úáíå ÇáÂÎÑæä Ýí ãÍÑßÇÊ ÇáÈÍË');
define('_MD_AM_METAFOOTER','ÇáãíÊÇ ÊÇÛ ÇáåíÏÑ æÇáÝæÊÑ');
define('_MD_AM_FOOTER','ÊÐíá ÇáãæÞÚ');
define('_MD_AM_FOOTERDSC','ÅÐÇ ÃÑÏÊ æÖÚ ÕæÑÉ ÝÅÓÊÎÏã ÚäæÇäåÇ  ãËá http://n.cc/n.gif');
define('_MD_AM_CENSOR','ÊÚÏíáÇÊ ÇáßáãÇÊ ÇáããäæÚÉ');
define('_MD_AM_DOCENSOR','ÊÝÚíá ÎÇÕíÉ ÇáÑÞÇÈÉ Úáì ÇáßáãÇÊ ¿');
define('_MD_AM_DOCENSORDSC','íÝÖá ÚÏã ÊÔÛíáåÇ áÊÓÑíÚ ÊÕÝÍ ÇáãæÞÚ');
define('_MD_AM_CENSORWRD','ÇáßáãÇÊ ÇáããäæÚÉ');
define('_MD_AM_CENSORWRDDSC','ÃÏÎá ÇáßáãÇÊ ÇáããäæÚÉ Ýí ÇáãÔÇÑßÇÊ <br />ÅÝÕá ÇáßáãÉ Úä ÇáÃÎÑì ÈÚáÇãÉ <b>|</b>');
define('_MD_AM_CENSORRPLC','ÇáÅÓÊÈÏÇá ÈßáãÉ :');
define('_MD_AM_CENSORRPLCDSC','ÃÏÎá ÇáßáãÉ ÇáÊí ÓÊÓÊÈÏá ÈåÇ ÇáßáãÉ ÇáããäæÚÉ');

define('_MD_AM_SEARCH','ÊÚÏíáÇÊ ÇáÈÍË');
define('_MD_AM_DOSEARCH','ÊÝÚíá ÎÇÕÉ ÇáÈÍË ¿');
define('_MD_AM_DOSEARCHDSC','ÊÝÚíá ÎÇÕíÉ ÇáÈÍË ÈÇáãÔÇÑßÇÊ æÇáãæÇÖíÚ Ýí ãæÞÚß');
define('_MD_AM_MINSEARCH','ÃÞá ÚÏÏ ÍÑæÝ');
define('_MD_AM_MINSEARCHDSC','ÃÏÎá ÃÞá ÚÏÏ ãä ÇáÍÑæÝ áíÊã ÞÈæá ÇáÈÍË Ýí ÇáßáãÉ ÇáãÏÎáÉ');
define('_MD_AM_MODCONFIG','ÎíÇÑÇÊ ÇáÊÚÏíá');
define('_MD_AM_DSPDSCLMR','ÚÑÖ ÇÊÝÇÞíÉ ÇáÅÔÊÑÇß ¿');
define('_MD_AM_DSPDSCLMRDSC','ÅÎÊÑ äÚã áÊÝÚíá åÐå ÇáÎÇÕíÉ');
define('_MD_AM_REGDSCLMR','ÔÑæØ ÇáÅÔÊÑÇß');
define('_MD_AM_REGDSCLMRDSC','ÃßÊÈ ÔÑæØ ÇáÅÔÊÑÇß Ýí ãæÞÚß');
define('_MD_AM_ALLOWREG','ÝÊÍ ÈÇÈ ÇáÊÓÌíá Ýí ÇáãæÞÚ ¿');
define('_MD_AM_ALLOWREGDSC','ÅÎÊÑ äÚã ááÓãÇÍ ÈÇáÊÓÌíá Ýí ãæÞÚß');
define('_MD_AM_THEMEFILE','ÊÍÏíË ãÌáÏ ÇáËíãÇÊ ÈÔßá ÊáÞÇÆí ¿');
define('_MD_AM_THEMEFILEDSC','åÐÇ ÇáÎíÇÑ íÚäí Ýí ÍÇáÉ æÌæÏ Ãí ãáÝ ãÚÏá Ãæ ÌÏíÏ Ýí ãÌáÏ ÇáËíã ÇáãÓÊÎÏã Ýíå ãæÞÚß ÓíÊã ÊÍÏíËå ÊáÞÇÆíÇ æíÝÖá ÊÚØíá åÐå ÇáÎÇÕíÉ ÇÐÇ ßÇä ãæÞÚß íÚãá');
define('_MD_AM_CLOSESITE','ÅíÞÇÝ ÇáãæÞÚ ¿');
define('_MD_AM_CLOSESITEDSC','ÅÎÊÑ äÚã áÅíÞÇÝ ÇáãæÞÚ Úä ÇáÚãá ');
define('_MD_AM_CLOSESITEOK','ÅÎÊÑ ÇáãÌæÚÇÊ ÇáÊí íãßäåÇ ÊÕÝÍ ÇáãæÞÚ ÍÊì áæ ÃÛáÞÊå');
define('_MD_AM_CLOSESITEOKDSC','ãÏíÑ ÇáãæÞÚ æãÌãæÚÊå ÈÔßá ØÈíÚí áä íÊÃËÑ ÈåÐÇ ÇáÊÛííÑ æÓíÓÊØíÚ ÏÎæá ÇáãæÞÚ');
define('_MD_AM_CLOSESITETXT','ÓÈÈ ÅíÞÇÝ ÇáãæÞÚ');
define('_MD_AM_CLOSESITETXTDSC','ÃßÊÈ ÓÈÈ ÇíÞÇÝß ááãæÞÚ ÍÊì íÚÑÝ ÒæÇÑå Ðáß ÇáÓÈÈ');
define('_MD_AM_SITECACHE','Site-wide Cache');
define('_MD_AM_SITECACHEDSC','Caches whole contents of the site for a specified amount of time to enhance performance. Setting site-wide cache will override module-level cache, block-level cache, and module item level cache if any.');
define('_MD_AM_MODCACHE','ÎÇÕÉ ÇáßÇÔ');
define('_MD_AM_MODCACHEDSC','ÅÓÊÎÏã ÇáãÏÉ ÇáÊí ÓíÍÊÝÙ ÈåÇ ÇáÒÇÆÑ áãÚáæãÇÊ ÇáÈÑäÇãÌ æíÝÖá ÚÏã ÇÓÊÎÏÇã ÇáßÇÔ áÚÏã ÍÝÙ ÇáãáÝÇÊ ÇáãÄÞÊå æÚÏã ÇáÅÍÊíÇÌ Çáì Úãá ÑíÝÑíÔ Ýí ßá ÒíÇÑÉ áå');
define('_MD_AM_NOMODULE','áÇ íæÌÏ åäÇß Çí ÈÑäÇãÌ áÅÓÊÎÏÇã ÇáßÇÔ');
define('_MD_AM_DTPLSET','ÇáÞÇáÈ ÇáÑÆíÓí');
define('_MD_AM_SSLLINK','ÚäæÇä SSL áÊÓÌíá ÇáÏÎæá');

// added for mailer
define("_MD_AM_MAILER","ÊåíÆÉ ÇáÈÑíÏ");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","ÈÑíÏ ÇáãÑÓá");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","ÅÓã ÇáãÑÓá");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","ãä");
define("_MD_AM_MAILFROMUIDDESC","ÅÓÊÎÏã ÇÓã ÇáãÓÊÎÏãÉ ÇáÐí ÓíÙåÑ ßÅÓã ÇáãÑÓá Ýí ÇáÑÓÇÆá");
define("_MD_AM_MAILERMETHOD","ØÑíÞÉ ÇÑÓÇá ÇáÈÑíÏ");
define("_MD_AM_MAILERMETHODDESC","ØÑíÞÉ ÇÑÓÇá ÇáÈÑíÏ Ýí ãæÞÚß");
define("_MD_AM_SMTPHOST","ÓíÑÝÑ Ãæ ÓíÑÝÑÇÊ SMTP");
define("_MD_AM_SMTPHOSTDESC","ÃßÊÈ ÇÓã ÓíÑÝÑ SMTP áÅÑÓÇá ÇáÈÑíÏ íãßäß ßÊÇÈÉ ßá æÇÍÏ Ýí ÓØÑ Çä ÃÑÏÊ");
define("_MD_AM_SMTPUSER","ÅÓã ãÓÊÎÏã SMTP");
define("_MD_AM_SMTPUSERDESC","ÅÓã ÇáãÓÊÎÏã áÓíÑÝÑ ÅÑÓÇá SMTP");
define("_MD_AM_SMTPPASS","ßáãÉ ãÑæÑ SMTP");
define("_MD_AM_SMTPPASSDESC","ÃßÊÈ ßáãÉ ãÑæÑ áÓíÑÝÑ ÅÑÓÇá SMTP");
define("_MD_AM_SENDMAILPATH","ÅãÊÏÇÏ ÅÑÓÇá ÇáÈÑíÏ ");
define("_MD_AM_SENDMAILPATHDESC","ÃßÊÈ ÚäæÇä ãÊÑÌã ÅÑÓÇá ÇáÈÑíÏ Ýí ãæÞÚß");
define("_MD_AM_THEMEOK","ÅÎÊíÇÑ ÇáÞÇáÈ ááÃÚÖÇÁ");
define("_MD_AM_THEMEOKDSC","ÅÎÊÑ ÇáÞÇáÈ ÇáÐí Óíßæä ÇáÞÇáÈ ÇáÑÆíÓí ááÃÚÖÇÁ");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS","XOOPS Database");
define("_MD_AM_AUTH_CONFOPTION_LDAP","Standard LDAP Directory");
define("_MD_AM_AUTH_CONFOPTION_AD","Microsoft Active Directory &copy");
define("_MD_AM_AUTHENTICATION","ÎíÇÑÇÊ ÇáÊÍÞÞ ãä ÇáåæíÉ");
define("_MD_AM_AUTHMETHOD","Authentication Method");
define("_MD_AM_AUTHMETHODDESC","Which authentication method would you like to use for signing on users.");
define("_MD_AM_LDAP_MAIL_ATTR","LDAP - Mail Field Name");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","The name of the E-Mail attribute in your LDAP directory tree.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Common Name Field Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC","The name of the Common Name attribute in your LDAP directory.");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Surname Field Name");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","The name of the Surname attribute in your LDAP directory.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name Field Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","The name of the Given Name attribute in your LDAP directory.");
define("_MD_AM_LDAP_BASE_DN","LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC","The base DN (Distinguished Name) of your LDAP directory tree.");
define("_MD_AM_LDAP_PORT","LDAP - Port Number");
define("_MD_AM_LDAP_PORT_DESC","The port number needed to access your LDAP directory server.");
define("_MD_AM_LDAP_SERVER","LDAP - Server Name");
define("_MD_AM_LDAP_SERVER_DESC","The name of your LDAP directory server.");

define("_MD_AM_LDAP_MANAGER_DN","DN of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_DN_DESC","The DN of the user allow to make search (eg manager)");
define("_MD_AM_LDAP_MANAGER_PASS","Password of the LDAP manager");
define("_MD_AM_LDAP_MANAGER_PASS_DESC","The password of the user allow to make search");
define("_MD_AM_LDAP_VERSION","LDAP Version protocol");
define("_MD_AM_LDAP_VERSION_DESC","The LDAP Version protocol : 2 or 3");
define("_MD_AM_LDAP_USERS_BYPASS","Users allowed to bypass LDAP authentication");
define("_MD_AM_LDAP_USERS_BYPASS_DESC","Users to be authenticated with native XOOPS method");

define("_MD_AM_LDAP_USETLS"," Use TLS connection");
define("_MD_AM_LDAP_USETLS_DESC","Use a TLS (Transport Layer Security) connection. TLS use standard 389 port number<BR>" .
								  " and the LDAP version must be set to 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP Attribute use to search the user");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN","Login name use in the DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D","The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_FILTER_PERSON","The search filter LDAP query to find user");
define("_MD_AM_LDAP_FILTER_PERSON_DESC","Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> MUST BE BLANK IF YOU DON'T KNOW WHAT YOU DO' !" .
		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME","The domain name");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC","Windows domain name. for ADS and NT Server only");

define("_MD_AM_LDAP_PROVIS","Automatic xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_DESC","Create xoops user database if not exists");

define("_MD_AM_LDAP_PROVIS_GROUP","Default affect group");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC","The new user is assign to these groups");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR","Xoops-Auth server fields mapping");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!");
		
define("_MD_AM_LDAP_PROVIS_UPD","Maintain xoops account provisionning");
define("_MD_AM_LDAP_PROVIS_UPD_DESC","The Xoops User account is always synchronized with the Authentication Server");
		

		
?>