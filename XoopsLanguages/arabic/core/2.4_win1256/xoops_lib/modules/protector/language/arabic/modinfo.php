<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","ÇáÍÇÑÓ áÒæÈÓ");

// A brief description of this module
define($constpref."_DESC","åĞÇ ÇáÈÑäÇãÌ íæİÑ áß ÍãÇíÉ ÖÏ ÚãáíÇÊ ÇáÇÎÊÑÇŞ ÇáãÎÊáİÉ æÇáÍŞä æåÌæã ÇáÏæÓ  . ØÈÚÇ áíÓ ßá ÇäæÇÚÇáåÌæã  æáßä ááãÔåæÑ æÇáÎØíÑ ãäåÇ");

// Menu
define($constpref."_ADMININDEX","ÇáÑÆíÓíÉ");
define($constpref."_ADVISORY","ÊİÍÕ ÇáÍãÇíÉ");
define($constpref."_PREFIXMANAGER","ÇÏÇÑÉ  ŞÇÚÏÉ ÇáÈíÇäÇÊ");
define($constpref.'_ADMENU_MYBLOCKSADMIN','ÇáÊÕÇÑíÍ');

// Configs
define($constpref.'_GLOBAL_DISBL','ãÚØá ãÄŞÊÇ');
define($constpref.'_GLOBAL_DISBLDSC','äÚã áÊÚØíá ÇáÍãÇíÉ æáÇ áÊÔÛíá ÇáÍãÇíÉ íäİÚß<br /> ÊİÚíá åĞÇ ÇáÎíÇÑ İí ÍÇáÉ ÑÛÈÊ ÇÕáÇÍ ãÔßáÉ ãÚíäÉ æáÇÊÓì Çä ÊŞæã ÈÊİÚíáÉ ÈÚÏ Íá ÇáãÔßáÉ');

define($constpref.'_DEFAULT_LANG','Default language');
define($constpref.'_DEFAULT_LANGDSC','Specify the language set to display messages before processing common.php');

define($constpref.'_RELIABLE_IPS','ÇáÇíÈíåÇÊ ÇáãæËæŞ ãäåÇ');
define($constpref.'_RELIABLE_IPSDSC','ÖÚ Èíä ßá ÇíÈ æÇÎÑ ÚáÇãÉ | æÚáÇãÉ ^ İí ÈÏÇíÉ ßá ÓØÑ ÌÏíÏ');

define($constpref.'_LOG_LEVEL','ãÓÊæì ÇáÓÌá');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_BANIP_TIME0','ãÏÉ  ÇáãäÚ  ááãØÑæÏíä .. ÈÇáËæÇäí');

define($constpref.'_LOGLEVEL0','áÇíæÌÏ');
define($constpref.'_LOGLEVEL15','ÈÓíØ');
define($constpref.'_LOGLEVEL63','ÇÈÓØ');
define($constpref.'_LOGLEVEL255','ßáí');

define($constpref.'_HIJACK_TOPBIT','ÇáÍãÇíÉ ãä  ÓÑŞÉ æÇÓÊÎÏã ßæßíÒ ÇáãÏíÑ Çæ Çí ÚÖæ');
define($constpref.'_HIJACK_TOPBITDSC','ááÍãÇíÉ ãä ÇáÍŞä æÚãáíÇÊ ÓÑŞÉ ÇáßæßíÒ<br />ÇáæÖÚí ÇáÇİÊÑÇÖí åæ 32 (ÓÊã ÍãÇíÉ Çáßá)<br />İí ÍÇáÉ áã Êßä Êãáß ÇíÈí ËÇÈÊ<br /> ÇĞ ßÇä ÇáÇíÈí ÇáĞí ÊÓÊÎÏã Èíä  192.168.0.0-192.168.0.255, ÖÚ 24 İí åĞÉ ÇáÍÇáÉ æåæ ÇáÇİÖá');
define($constpref.'_HIJACK_DENYGP','ÇáãÌãæÚÉ ÇáÛíÑ ãÕÑÍ ÈãäÚåÇ');
define($constpref.'_HIJACK_DENYGPDSC','ãÖÇÏ ÓÑŞÉ ÇáßæßíÒ:<br />ÇÎÊÇÑ ÇáãÌãæÚÉ ÇáÊí ÊÑÛÈ  ÈÚÏã ÇáÓãÇÍ ÈãäÚåÇ <br />(ÇáÇİÖá ÇÎÊíÇÑ  ãÌãæÚÉ ÇáÇÏÇÑ Çæ ãÏíÑ ÇáãæŞÚ)');
define($constpref.'_SAN_NULLBYTE','ÊÚŞíã ÇáÇæÇãÑ');
define($constpref.'_SAN_NULLBYTEDSC','ÛÇáÈ ÇáãÏÎáÇÊ ÇáãÍÊæíÉ Úáì ÇáÑãÒ "\\0" İåí ÛÇáÈÇ ÊÔíÑ Çáí ÚãáíÉ ÊÎÑíÈíÉ<br />İí ÍÇáÉ æÌæÏ ãËá åĞÉ ÇáÇæÇãÑ ÓíÊã ÊÍæíáåÇ Çáí İÑÇÛÇÊ<br />(ÊİÚíá åĞÇ ÇáÇãÑ İí ÛÇíÉ ÇáÇåãíÉ)');
define($constpref.'_DIE_NULLBYTE','İí ÍÇáÉ æÌæÏ ÇæÇãÑ ÎÈíËÉ ÓíÊã ÇáÎÑæÌ ãä ÇáÇãÑ');
define($constpref.'_DIE_NULLBYTEDSC','ÛÇÈ ÇáãÏÎáÇÊ ÇáãÍÊæíÉ Úáì ÇáÑãÒ "\\0" İåí ÛÇáÈÇ ÊÔíÑ Çáí ÚãáíÉ ÊÎÑíÈíÉ<br />İí ÍÇáÉ æÌæÏ ãËá åĞÉ ÇáÇæÇãÑ ÓíÊã ÊÍæíáåÇ Çáí İÑÇÛÇÊ<br />(ÊİÚíá åĞÇ ÇáÇãÑ İí ÛÇíÉ ÇáÇåãíÉ)');
define($constpref.'_DIE_BADEXT','ÊæŞİ !! İí ÍÇáÉ ÇßÊÔÇİ ãáİ  ÖÇÑ Êã ÑİÚÉ ÈÇáãæŞÚ');
define($constpref.'_DIE_BADEXTDSC','İí ÍÇáÉ ãÍÇæáÉ ÑİÚ Çí ãáİ ÛíÑ ãÕÑÍ Èå ãËáÇ ãáİÇÊ ÇáÈí ÇÊÔ Èí ÓíŞæã ÇáÈÑäÇãÌ ÈÇáÎÑæÌ ãä ÇáãæŞÚ æÇÈØÇá ÇãÑ ÇáÑİÚ<br />Şã ÈÊÚØíá ÇáÇãÑ ÇĞ ßäÊ ÊÑÛÈ ÈÑİÚ ãáİÇÊ ãáİÇÊ ÈÇãÊÏÇÏí Èí ÇÊÔ Èí');
define($constpref.'_CONTAMI_ACTION','ÇáÚãá İí ÍÇáÉ æÌæÏ ÊáæË æÇãÑ ÎÈíË');
define($constpref.'_CONTAMI_ACTIONDS','ÇÎÊÇÑ ÇáÇãÑ ÇáĞí ÊÑíÏ ÖåæÑÉ ááãåÇÌã İí ÍÇáÉ ÇßÊÔÇİ ÇãÑ ÎÈíË  ÇáÇİÖá ÇÎÊíÇÑ ÙåæÑ ÕİÍÉ ÈíÖÇÁ  İÇÑÛÉ');
define($constpref.'_ISOCOM_ACTION','ÇáÚãá İí ÍÇáÉ ÇßÊÔÇİ ÇæÇãÑ ÛíÑ ãÕÑÍ ÈåÇ İí ÇáÊÚáíŞÇÊ');
define($constpref.'_ISOCOM_ACTIONDSC','ãÇäÚ ÇáÍŞä İí ŞÇÚÏÉ ÇáÈíÇäÇÊ<br />ÇÎÊÇÑ ÇáÇãÑ İí ÍÇáÉ ÇßÊÔÇİ ÇãÑ ÎÈíË ÈÇáÊÚáíŞ ãËá "/*" Çä æÌÏ<br />"ÊÚŞíã ÇáÇãÑ" íãÚäí ÇÙÇİÉ  ÇáÑãÒ "*/" İí ÇáäåÇíÉ<br />(íäÕÍ ÈÇÎÊíÇÑ ÊÚŞíã ÇáÇãÑ)');
define($constpref.'_UNION_ACTION',' Union ÇáÚãá İí ÍÇáÉ æÌæÏ ÇæÇãÑ ÇáÇÊÍÇÏ ');
define($constpref.'_UNION_ACTIONDSC','ãÖÇÏ åÌãÇÊ ÍŞä ŞÇÚÏÉ ÇáÈíÇäÇÊ:<br />ÇáÚãá İí ÍÇáÉ ÇßÊÔÇİ ãËá åĞÇ ÇáÍŞä ÈÇáŞÇÚÏÉ.<br />"uni-on" Çáí "union"ÊÚŞíã ÇáÇãÑ" ÈãÚäí ÊÛíÑ ßáãÉ" <br />(íäÕÍ ÈÇÎÊíÇÑ ÊÚŞíã ÇáÇãÑ)');
define($constpref.'_ID_INTVAL',' Select ID ÇáÚãá İí ÍÇáÉ ØáÈ ÇãÑ ãä ŞÇÚÏÉ ÇáÈíÇäÇÊ  ãËáÇ ØáÈ ÇáÇãÑ ');
define($constpref.'_ID_INTVALDSC','ÇãÑ ÛíÑ ÔÑÚí "*id" ÓíÚÊÈÑ ÇáÇãÑ<br />åĞÇ ÇáÎíÇÑ ÓíÍãíß ãä ÈÚÖ ÇáåÌãÇÊ  æÇáÍŞä áŞÇÚÏÉ ÇáÈíÇäÇÊ<br />ãä ÇáÇİÖá ÊÚØíá åĞÇ ÇáÇãÑ ÍíË Çäå íÊÓÈÈ ÈÇíŞÇİ Úãá ÈÚÖ ÇáãæÏíáÇÊ ÇáÇÎÑì ãËá ŞæÇÆã ÇáÈÑíÏ æãæÏíáÇÊ ÇáİíÏíæ');
define($constpref.'_FILE_DOTDOT','ÇáÍãÇíÉ ãä ÇáãÌáÏÇÊ ÇáãÊäŞáÉ');
define($constpref.'_FILE_DOTDOTDSC','ãäÚ ßá ÇáÇæÇãÑ ÇáÊì ÊßÊÔİ Úáì ÇäåÇ ÇæÇãÑ äŞá ãÌáÏÇÊ ÈÔßá ãÊßÑÑ');

define($constpref.'_BF_COUNT','ãÇäÚ ÊßÑÇÑ ÇÓã ÇáÏÎæá');
define($constpref.'_BF_COUNTDSC','ÖÚ ÚÏÏ ÇáãÍÇæáÇÊ ÇáÊí íŞæã ÈåÇ ÚĞæ ãÚíä ÇáÏÎæá ÈÇÓãå æßáãÉ ÇáÓÑ ÈÔßá ÎÇØíÁ ŞÈá ØÑÏå ãä ÇáãæŞÚ æÇÚÊÈÇÑå ÚÖæ íÍÇæá ÓÑŞÉ ÈÇÓæÑÏ ÚÖæ ÇÎÑ');

define($constpref.'_BWLIMIT_COUNT','Bandwidth limitation');
define($constpref.'_BWLIMIT_COUNTDSC','Specify the max access to mainfile.php during watching time. This value should be 0 for normal environments which have enough CPU bandwidth. The number fewer than 10 will be ignored.');

define($constpref.'_DOS_SKIPMODS','ÇáãæÏíáÇÊ ÇáãÓÊËäÇÉ ãä ãÍÑßÇÊ ÇáÈÍË æÊİÍÕ ÇáÏæÓ');
define($constpref.'_DOS_SKIPMODSDSC','ÖÚ ÇÓãÇÁ ÇáãæÏíáÇÊ æÇİÕáåÇ ÈÚáÇãÉ|. åĞÇ ÇáÇÎÊíÇÑ íäİÚ İí ÍÇáÉ æÌæÏ ãæÏíáÇÊ ÏÑÏÔÉ æãÍÇÏËÉ ');

define($constpref.'_DOS_EXPIRE','ãÑÇŞÈÉ ãÑÇÊ ÊÍãíá ÇáÕİÍÇÊ ÈÇáËæÇäí');
define($constpref.'_DOS_EXPIREDSC','f5 ãäÚ åÌãÇÊ ÊÚÏÏ ØáÈ ÇáÕİÍÉ ÇáÇæáí æÇáÇãÑÇáĞí íÚíÏ ÊÍÏíË ÇáÕİÍÉ ãä ÇáßíÈæÑÏ ');

define($constpref.'_DOS_F5COUNT','F5  ÚÏÏ ÇáãÑÇÊ áÇÍÊÓÇÈåÇ åÌãÉ ãä ŞÈá  ÇáÇãÑ');
define($constpref.'_DOS_F5COUNTDSC','ÇÚÇÏÉ ÊÍãíá ÇáÕİÍÉ ÇßËÑ ãä ÇáÑŞã ÇáãĞßæÑ ÈÇáÇÚáì ÓíÚÊÈÑ åÌãÉ  ãä ÎáÇá ÇáÏæÓ');
define($constpref.'_DOS_F5ACTION','F5  ÇáÚãá ÇáãÖÇÏ ÍÇáÉ ÇßÊÔÇİ åÌãÉ ãä äæÚ');

define($constpref.'_DOS_CRCOUNT','ÚÏÏ ÚãáíÉ ÇáİåÑÓÉ ãä ŞÈá ãÍÑßÇÊ ÇáÈÍË');
define($constpref.'_DOS_CRCOUNTDSC','áãäÚ ãÍÑßÇÊ ÇáÈÍË ÇáÓíÆÉ ãä ÇÍÏÇË ÕÛØ Úáì ÇáãæŞÚ');
define($constpref.'_DOS_CRACTION','ÇáÚãá İí ÍÇáÉ ÇßÊÔÇİ ãÍÑßÇÊ İåÑÓÉ Çæ ÇáÈÍË ãÓÈÈÉ áÖÛØ Úáì ÇáãæŞÚ');

define($constpref.'_DOS_CRSAFE','ãÍÑßÇÊ ÇáÈÍË ÇáãÍÈæÈÉ æÇáãÑÍÈ ÈåÇ');
define($constpref.'_DOS_CRSAFEDSC','ãÍÑßÇÊ ÇáÈÍË ÇáãÍÈæÈÉ æÇáÊí ÊÚÊÈÑ ËŞÉ æáÇ ÊÓÈÈ ÇĞí ááãæŞÚ ãËá ãÍÑß ÈÍË ÇáíÇåæ æÇáÌæÌá Çä ßÇä áÏíß ãÍÑßÇÊ ÇÎÑì ãæËæŞÉ ÖÚåÇ İí ÇáÇÚáì áíÊã ÇáÊÚÇãá ãÚåÇ Úáì ÇäåÇ ÍãíÏÉ');

define($constpref.'_OPT_NONE','áÇÔíÁ');
define($constpref.'_OPT_SAN','ÊÚŞíã ÇáÇãÑ');
define($constpref.'_OPT_EXIT','ÕİÍÉ İÇÑÛÉ ÈíÖÇÁ');
define($constpref.'_OPT_BIP','ØÑÏ ÇáÇíÈí');
define($constpref.'_OPT_BIPTIME0','æŞİ  äÔÇØ ÇáÚÖæ ãÄŞÊÇ');

define($constpref.'_DOSOPT_NONE','áÇÔíÁ');
define($constpref.'_DOSOPT_SLEEP','ÚÏ ã ÇÓÊÌÇÈÉ');
define($constpref.'_DOSOPT_EXIT','ÕİÍÉ İÇÑÛÉ ÈíÖÇÁ');
define($constpref.'_DOSOPT_BIP','ØÑÏ ÇáÇíÈí');
define($constpref.'_DOSOPT_BIPTIME0','æŞİ  äÔÇØ ÇáÚÖæ ãÄŞÊÇ');
define($constpref.'_DOSOPT_HTA','ØÑÏ ÈæÇÓØÉ ãáİ.htaccess(áÇÕÍÇÈ ÇáÎÈÑÉ)');

define($constpref.'_BIP_EXCEPT','ÇáãÌãæÚÉ ÇáÊí áä íÊã ØÑÏåÇ ÇÈÏÇ');
define($constpref.'_BIP_EXCEPTDSC','Çí ÚÖæ ÈåÉ ÇáãÌãæÚÉ áä íÊã ØÑÏÉ æíäÕÍ ÈÇÎÊíÇÑ ãÌãæÚÉ ÇáÇÏÇÑÉ');

define($constpref.'_DISABLES','ÊÚØíá ÈÚÖ ÇáãÒÇíÇÁ ãä ãÌáÉ ÒæÈÓ ');

define($constpref.'_BIGUMBRELLA','ÊİÚíá anti-XSS (ÇáãÖáÉ)');
define($constpref.'_BIGUMBRELLADSC',' åĞÇ ÇáäæÚ ãä ÇáåÌãÇÊ íŞæã ÈÓÑŞÉ ÇáßæßíÒ ãä ÎáÇá ÇæãÑ ÌÇİÇ ãÎÊáİÉ æíŞæã ÈåÌãÇÊ  ÇÎÑì íÚÊÈÑ ãä ÇÎØÑ ÇáåÌãÇÊ  áÓÑŞÉ ÈÑíÏ ÇáÚÖæ Úáì ÇáíÇåæ æÇáåæÊãíá æÛíÑåÇ');

define($constpref.'_SPAMURI4U',' Spam ÚÏÏ ÇáÑæÇÈØ ÈÇí ãæÖæÚ ßÇÊÈÉ ÚÖæ ãÓÌá ÈÇáãæŞÚ  ŞÈá ÇÚÊÈÇÑåÇ ÓÈÇã');
define($constpref.'_SPAMURI4UDSC','åĞÇ ÇáÇãÑ íäİÚ İí ÍÇáÉ æÌæÏ ÒæÇÑ íÖÚæä ÑæÇÈØ ãÊÚÏÏå  ÈŞÕÏ ÇáÏÚÇíÉ ÖÚ ÑŞã ÕİÑ áÊÚØíá ÇáÇãÑ');
define($constpref.'_SPAMURI4G','Spam ÚÏÏ ÇáÑæÇÈØ ÈÇí ãæÖæÚ ßÇÊÈÉ ÚÖæ ÒÇÆÑ ÈÇáãæŞÚ  ŞÈá ÇÚÊÈÇÑåÇ ÓÈÇã');
define($constpref.'_SPAMURI4GDSC','åĞÇ ÇáÇãÑ íäİÚ İí ÍÇáÉ æÌæÏ ÒæÇÑ íÖÚæä ÑæÇÈØ ãÊÚÏÏå  ÈŞÕÏ ÇáÏÚÇíÉ ÖÚ ÑŞã ÕİÑ áÊÚØíá ÇáÇãÑ');

}

?>