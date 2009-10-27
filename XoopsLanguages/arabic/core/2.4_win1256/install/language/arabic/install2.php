<?php
// $Id: install2.php 3768 2009-10-23 08:37:41Z wishcraft $
// _LANGCODE: ar
// _CHARSET : windows-1256
// Translator: Arab XOOPS Team

// License
define('LICENSE_NOT_WRITEABLE', 'ãáİ ÇáÊÑÎíÕ %s . <br/><font style="colour:#ff0000">ÇÌÚá Çáãáİ ../include/license.php ŞÇÈá ááßÊÇÈÉ Úáíå</font>');
define('LICENSE_IS_WRITEABLE', 'ãáİ ÇáÊÑÎíÕ %s');

define("_INSTALL_WEBMASTER","ÇáãÏíÑ");
define("_INSTALL_WEBMASTERD","ãÌãæÚÉ ãÏÑÇÁ ÇáãæŞÚ");
define("_INSTALL_REGUSERS","ÇáÃÚÖÇÁ");
define("_INSTALL_REGUSERSD","ãÌãæÚÉ ÃÚÖÇÁ ÇáãæŞÚ");
define("_INSTALL_ANONUSERS","ÇáÒæÇÑ");
define("_INSTALL_ANONUSERSD","ãÌãæÚÉ ÒæÇÑ ÇáãæŞÚ");
/**
* New Group types
*/
define('_INSTALL_BANNEDUSERS', 'ÇáãæŞæİíä');
define('_INSTALL_BANNEDUSERSD', 'ãÌãæÚÉ ÇáÃÚÖÇÁ ÇáãæŞæİíä');
define('_INSTALL_MODERATORUSERS', 'ÇáãÔÑİíä');
define('_INSTALL_MODERATORUSERSD', 'ãÌãæÚÉ ÇáãÔÑİíä Úáì ÇáãæŞÚ');
define('_INSTALL_SUBMITTERUSERS', 'ÇáßÊøÇÈ');
define('_INSTALL_SUBMITTERUSERSD', 'ãÌãæÚÉ ÇáÃÚÖÇÁ ÇáãÓãæÍ áåã ÈÅÑÓÇá ÃÎÈÇÑ æ ãæÇÏ ááãæŞÚ');
define('_INSTALL_DEVELOPEUSERS', 'ÇáãØæÑæä');
define('_INSTALL_DEVELOPEUSERSD', 'áÏì åĞå ÇáãÌãæÚÉ ÕáÇÍíÇÊ ÇáãØæÑ æ íãßäå ãÔÇåÏÉ ÑÓÇÆá ÇáÎØÃ');

define("_INSTALL_L165","ÇáãæŞÚ ãÛáŞ ÍÇáíÇğ ááÕíÇäÉ¡ ÇáÑÌÇÁ ÇáÒíÇÑÉ İí æŞÊ áÇÍŞ.");
define("_INSTALL_ANON", "ÒÇÆÑ");
define("_INSTALL_DISCLMR", "ÇáÅáÊÒÇã ÈÇáÂÏÇÈ ÇáÚÇãÉ:
- íÌÈ Úáì ÇáÚÖæ ÇáãÓÌá Ãä íáÊÒã ÈÍİÙ ÍŞæŞ ÇáÛíÑ æÚÏã äÔÑ  Ãæ äÓÎ Ãí Ôí ÛíÑ ãÑÎÕ Èå ãä ÇáßÇÊÈ.
- áíÓ ááÚÖæ ÇáãÓÌá ÇáÍŞ İí ãØÇáÈÉ ÕÇÍÈ ÇáãæŞÚ ÈÃí şÔí äÙíÑ ßÊÇÈÇÊå.
- Åä ãÏíÑ åĞÇ ÇáãæŞÚ áåã ÇáÍŞ İí ÅÒÇáÉ ¡ æÊÍÑíÑ ¡æäŞá Ãæ ÅÛáÇŞ Åí ãæÖæÚ İí Åí æŞÊ íÑÇå ãäÇÓÈÇ Ïæä ÅÔÚÇÑßã ÈĞáß
æ ááÚáã  Åä ÇáãæŞÚ íÓÊÎÏã äÙÇã ÇáßæßíÒ áÊÎÒíä ÇáãÚáæãÇÊ Úáì ÇáÍÇÓÈ ¡ åĞÇ ÇáßæßíÒ áÇ íÍÊæí Úáì ÃíÉ ãä ÇáãÚáæãÇÊ
 ÇáãÏÎáÉ  ãäßã  İí ÃÚáÇå ¡ æÊÓÊÎÏã İŞØ áÊÍÓíä ÇáÊÕİÍ æÊÓÑíÚå æÅÓÊÎÏÇã  ÚäæÇä ÇáÈÑíÏ ÇáÇáßÊÑæäí İŞØ áÊÃßíÏ  ÊÓÌíáßã æÅÑÓÇá  ÇáÊİÇÕíá æßáãÉ ÇáÓÑ .
ãáÇÍÙÉ : Åä ãÇ íäÔÑ İí ÇáãæŞÚ áÇ íÚÈÑ ÈÇáÖÑæÑÉ Úä ÑÃí ÃÕÍÇÈ ÇáãæŞÚ¡ Èá åí ÂÑÇÁ ÇáßÊÇÈ ÃäİÓåã æåã íÊÍãáæä ÊÈÚÉ
 ÂÑÇÆåã¡ æÊŞÚ Úáíåã  ãÓÄæáíÉ ÇáÏİÇÚ Úä ÃİßÇÑåã æßáãÇÊåã æãÇ íÊÑÊÈ ÚáíåÇ ãä äÊÇÆÌ.

ÈÇáÖÛØ Úáì ÒÑ ÇáÊÓÌíá İí ÇáÃÓİá İÃäÊ ãæÇİŞ Úáì ÇáÅáÊÒÇã ÈåĞå ÇáÔÑæØ.");
?>
