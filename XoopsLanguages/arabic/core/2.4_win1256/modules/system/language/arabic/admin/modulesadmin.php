<?php
// $Id: modulesadmin.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: ar
// _CHARSET : windows-1256
// Translator: Arab XOOPS Team

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","áæÍÉ ÇáÊÍßã Ýí ÇáãæÏíáÇÊ (ÇáÈÑÇãÌ)");
define("_MD_AM_MODULE","ÇáãæÏíá (ÇáÈÑäÇãÌ)");
define("_MD_AM_VERSION","ÇáÅÕÏÇÑ");
define("_MD_AM_LASTUP","ÂÎÑ ÊÍÏíË");
define("_MD_AM_DEACTIVATED","ãÊæÞÝ");
define("_MD_AM_ACTION","ÅÌÑÇÁÇÊ");
define("_MD_AM_DEACTIVATE","ÅíÞÇÝ");
define("_MD_AM_ACTIVATE","ÊÔÛíá");
define("_MD_AM_UPDATE","ÊÍÏíË");
define("_MD_AM_DUPEN","äÓÎÉ ÇÍÊíÇØíÉ áãÏÎáÇÊ ÇáãæÏíáÇÊ (ÇáÈÑÇãÌ)");
define("_MD_AM_DEACTED","Êã ÅíÞÇÝ ÇáãæÏíá (ÇáÈÑäÇãÌ) ÈäÌÇÍ íãßäß ÇáÂä ÅÒÇáÉ ÊÑßíÈ ÇáÈÑäÇãÌ");
define("_MD_AM_ACTED","Êã ÊÔÛíá ÇáãæÏíá (ÇáÈÑäÇãÌ) ÇáÐí ÍÏÏÊå");
define("_MD_AM_UPDTED","Êã ÊÍÏíË ÇáãæÏíá (ÇáÈÑäÇãÌ) ÇáÐí ÍÏÏÊå");
define("_MD_AM_SYSNO","áÇ íãßä ÅíÞÇÝ áæÍÉ ÇáÊÍßã ÇáÚÇãÉ");
define("_MD_AM_STRTNO","åÐÇ ÇáÈÑäÇãÌ íÚãá ßÈÏÇíÉ ááãæÞÚ ¡ íãßäß ÊÛííÑå ãä ÎáÇá áæÍÉ ÇáÊÍßã");

// added in RC2
define("_MD_AM_PCMFM","íÑÌì ÇáÅßãÇá:");

// added in RC3
define("_MD_AM_ORDER","ãßÇä ÇáÊæÇÌÏ");
define("_MD_AM_ORDER0","(0 = ÅÎÝÇÁ)");
define("_MD_AM_ACTIVE","íÚãá");
define("_MD_AM_INACTIVE","áÇ íÚãá");
define("_MD_AM_NOTINSTALLED","áã íÊã ÊÑßíÈå");
define("_MD_AM_NOCHANGE","áÇ ÊÛíÑÇÊ");
define("_MD_AM_INSTALL","ÊÑßíÈ");
define("_MD_AM_UNINSTALL","ÅÒÇáÉ ÊÑßíÈ");
define("_MD_AM_SUBMIT","ÃÑÓá");
define("_MD_AM_CANCEL","ÊÑÇÌÚ");
define("_MD_AM_DBUPDATE","Êã ÊÍÏíË ÞÇÚÏÉ ÇáÈíÇäÇÊ");
define("_MD_AM_BTOMADMIN","ÇáÚæÏÉ Åáì ÕÝÍÉ ÇáÊÍßã Ýí ÇáãæÏíáÇÊ (ÇáÈÑÇãÌ)");

// %s represents module name
define("_MD_AM_FAILINS","áÇ íãßä ÊÑßíÈ ÇáãæÏíá (ÇáÈÑäÇãÌ) %s.");
define("_MD_AM_FAILACT","áÇ íãßä ÊÔÛíá ÇáãæÏíá (ÇáÈÑäÇãÌ) %s.");
define("_MD_AM_FAILDEACT","áÇ íãßä ÅíÞÇÝ ÊÔÛíá ÇáãæÏíá (ÇáÈÑäÇãÌ) %s.");
define("_MD_AM_FAILUPD","áÇ íãßä ÇáÊÍÏíË ááãæÏíá (ÇáÈÑäÇãÌ) %s.");
define("_MD_AM_FAILUNINS","áÇ íãßä ÅÒÇáÉ ÊÑßíÈ ÇáãæÏíá (ÇáÈÑäÇãÌ) %s.");
define("_MD_AM_FAILORDER","áÇ íãßä ÊÍÏíÏ ãßÇä ÇáÊæÇÌÏ ááãæÏíá (ÇáÈÑäÇãÌ) %s.");
define("_MD_AM_FAILWRITE","áÇ íãßä ÇáßÊÇÈÉ Ýí ÇááæÍÉ ÇáÑÆíÓíÉ");
define("_MD_AM_ALEXISTS","ÇáãæÏíá (ÇáÈÑäÇãÌ) %s ãæÌæÏ ãÓÈÞÇ");
define("_MD_AM_ERRORSC","ÎØÃ/ÃÎØÇÁ:");
define("_MD_AM_OKINS","ÇáãæÏíá (ÇáÈÑäÇãÌ) %s Êã ÊÑßíÈå ÈäÌÇÍ");
define("_MD_AM_OKACT","ÇáãæÏíá (ÇáÈÑäÇãÌ) %s Êã ÊÔÛíáå ÈäÌÇÍ");
define("_MD_AM_OKDEACT","ÇáãæÏíá (ÇáÈÑäÇãÌ) %s Êã ÅíÞÇÝå ÈäÌÇÍ");
define("_MD_AM_OKUPD","ÇáãæÏíá (ÇáÈÑäÇãÌ) %s Êã ÊÍÏíËå ÈäÌÇÍ");
define("_MD_AM_OKUNINS","ÇáãæÏíá (ÇáÈÑäÇãÌ) %s ÊãÊ ÅÒÇáÉ ÊËÈíÊå ÈäÌÇÍ");
define("_MD_AM_OKORDER","ÇáãæÏíá (ÇáÈÑäÇãÌ) %s Êã ÊÍÏíÏ ãæÖÚå ÈäÌÇÍ");

define('_MD_AM_RUSUREINS','ÇÖÛØ Úáì ÇáÒÑ ÃÏäÇå áÊÑßíÈ ÇáÈÑäÇãÌ');
define('_MD_AM_RUSUREUPD','ÇÖÛØ Úáì ÇáÒÑ ÃÏäÇå áÊÍÏíË ÇáÈÑäÇãÌ');
define('_MD_AM_RUSUREUNINS','åá ÃäÊ ãÊÃßÏ  ãä  ÅÒÇáÉ ÊÑßíÈ ÇáÈÑäÇãÌ ¿');
define('_MD_AM_LISTUPBLKS','ÇáÈáæßÇÊ ÇáÊÇáíÉ ÓíÊã ÊÍÏíËåÇ <br />ÚäÏ ÅÔÇÑÊß Úáì ÇáÈáæß ÓíÊã ãÓÍ ãÚáæãÇÊå ÇáÞÏíã<br />');
define('_MD_AM_NEWBLKS','Èáæß ÌÏíÏ');
define('_MD_AM_DEPREBLKS','ÊÌÇåá ÇáÈáæß');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','ÊËÈíÊ ');
define('_MD_AM_TABLE_RESERVED','%s åæ ÌÏæá ãÍÌæÒ!');
define('_MD_AM_CREATE_TABLES','ÅäÔÇÁ ÇáÌÏÇæá....');
define('_MD_AM_TABLE_CREATED','ÇáÌÏæá %s ãõäÔÃ');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Êãø ÇáÅÏÑÇÌ Ýí ÇáÌÏÇæá %s');
define('_MD_AM_INSERT_DATA_FAILD','áÇ íãßä ÇáÅÏÑÇÌ %s Öãä ÞÇÚÏÉ ÇáÈíÇäÇÊ.');
define('_MD_AM_INSERT_DATA_DONE','Êãø ÇáÅÏãÇÌ ÈäÌÇÍ.');
define('_MD_AM_MODULEID',' ãÚøÑÝ ÇáãæÏíæá: %s');
define('_MD_AM_SQL_FOUND','SQL æÌÏÊ Ýí %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL áã íÊãø ÅíÌÇÏåÇ at %s');
define('_MD_AM_SQL_NOT_CREATE','ÎØÃ: áÇ íãßä ÇäÔÇÁ %s ');
define('_MD_AM_SQL_NOT_VALID','%s áíÓÊ ÕÍíÍÉ SQL!');

define('_MD_AM_GROUP_ID',' ãÚÑøÝ ÇáãÌãæÚÉ: %s ');
define('_MD_AM_NAME',' ÇáÇÓã: ');
define('_MD_AM_VALUE',' ÇáÞíãÉ: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','ÅÖÇÝÉ ÇáÞæÇáÈ....');
define('_MD_AM_TEMPLATES_DELETE','ãÓÍ ÇáÞæÇáÈ....');
define('_MD_AM_TEMPLATES_UPDATE','ÊÍÏíË ÇáÞæÇáÈ...');

define('_MD_AM_TEMPLATE_ID','ãÚÑÝ ÇáÞÇáÈ: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','ÞÇáÈ %s ãÖÇÝ Åáì ÞÇÚÏÉ ÇáÈíÇäÇÊ');
define('_MD_AM_TEMPLATE_ADD_ERROR','ÎØÃ: áÇ íãßä ÅÏÑÇÌ ÇáÞÇáÈ %s Öãä ÞÇÚÏÉ ÇáÈíÇäÇÊ');
define('_MD_AM_TEMPLATE_COMPILED','ÇáÞÇáÈ %s ãÖÇÝ ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','ÎØÃ: ÊÚËøÑ ÅÖÇÝÉ ÇáÞÇáÈ %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','ÇáÞÇáÈ %s Êãø ãÓÍå ãä ÞÇÚÏÉ ÇáÈíÇäÇÊ ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','ÎØÃ: áã íãÓÍ ÇáÞÇáÈ %sãä ÞÇÚÏÉ ÇáÈíÇäÇÊ ');
define('_MD_AM_TEMPLATE_INSERT_DATA','ÇáÞÇáÈ %s ãÏÑÌ Ýí ÞÇÚÏÉ ÇáÈíÇäÇÊ ');
define('_MD_AM_TEMPLATE_RECOMPILE','ÇáÞÇáÈ %s ÃÚíÏ ÊÌãíÚå');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','ÎØÃ: ÇáÞÇáÈ %s Ýí ÅÚÇÏÉ ÊÌãíÚ ÇáÞÇáÈ');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','ÎØÃ: áÇ íãßä ÅÚÇÏÉ ÊÌãíÚ ÇáÞÇáÈ %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','ÎØÃ: áã äÊãßä ãä ÅÒÇáÉ ÇáÞÇáÈ ÇáÞÏíã %s. ÊÌÇåá ÊÍÏíË åÐÇ ÇáãáÝ ');
define('_MD_AM_TEMPLATE_UPDATE','ÇáÞÇáÈ %s ãÍÏøË ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','ÎØÃ: áã äÊãßä ãä ÊÍÏíË %s ÇáÞÇáÈ. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','ÅÖÇÝÉ ÇáÈáæßÇÊ...');
define('_MD_AM_BLOCKS_DELETE','ãÓÍ ÇáÈáæßÇÊ...');
define('_MD_AM_BLOCKS_REBUILD','ÅÚÇÏÉ ÈäÇÁ ÇáÈáæßÇÊ');

define('_MD_AM_BLOCK_ID',' ãÚÑøÝ ÇáÈáæß: %s ');

define('_MD_AM_BLOCK_ACCESS','ÅÚØÇÁ ÕáÇÍíÇÊ ÏÎæá ÇáÈáæßÇÊ');
define('_MD_AM_BLOCK_ACCESS_ERROR','ÎØÃ: áã äÊãßä ãä ÅÚØÇÁ ÕáÇÍíÇÊ ÏÎæá ÇáÈáæßÇÊ');
define('_MD_AM_BLOCK_ADD','ÇáÈáæß %s ãõÖÇÝ ');
define('_MD_AM_BLOCK_ADD_ERROR','ÎØÃ: áã äÊãßä ãä ÅÖÇÝÉ ÇáÈáæß %s Åáì ÞÇÚÏÉ ÇáÈíÇäÇÊ! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','ÎØÃ Ýí ÞÇÚÏÉ ÇáÈíÇäÇÊ: %s ');
define('_MD_AM_BLOCK_CREATED','ÇáÈáæß %s ãäÔÃ ');
define('_MD_AM_BLOCK_DELETE','ÇáÈáæß %s Êãø ãÓÍå ');
define('_MD_AM_BLOCK_DELETE_DATA','ÞÇáÈ ÇáÈáæß %s ããÓæÍ ãä ÞÇÚÏÉ ÇáÈíÇäÇÊ ');
define('_MD_AM_BLOCK_DELETE_ERROR','ÎØÃ: áã äÊãßä ãä ãÓÍ ÇáÈáæß %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','ÎØÃ: áã äÊãßä ãä ãÓÍ ÞÇáÈ ÇáÈáæß %s ãä ÞÇÚÏÉ ÇáÈíÇäÇÊ');
define('_MD_AM_BLOCK_DEPRECATED','ÞÇáÈ ÇáÈáæß %s áã ÊÊã ÇáãæÇÝÞÉ Úáíå ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','ÎØÃ: áã íÊã ÍÐÝ ÞÇáÈ ÇáÈáæß ÛíÑ ÇáãæÇÝÞ Úáíå  ');
define('_MD_AM_BLOCK_UPDATE','ÇáÈáæß %s Êã ÊÍÏíËå ');

/* Configs */
define('_MD_AM_GONFIG_ID','ãÚÑøÝ ÇáÊåíÆÉ: %s');
define('_MD_AM_MODULE_DATA_ADD','ÅÖÇÝÉ ÊÔÎíÕ ãÍÊæì ÇáÈáæß');
define('_MD_AM_MODULE_DATA_DELETE','ãÓÍ ÊÔÎíÕ ãÍÊæì ÇáÈáæß...');
define('_MD_AM_MODULE_DATA_UPDATE','ÊãøÊÍÏíË ãÍÊæì ÇáÈáæß');

define('_MD_AM_CONFIG_ADD',' ÊãøÊ ÅÖÇÝÉ ÎíÇÑ ÇáÊåíÆÉ');
define('_MD_AM_CONFIG_DATA_ADD',' ÇáÊåíÆÉ %s ãÖÇÝÉ Åáì ÞÇÚÏÉ ÇáÈíÇäÇÊ');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' ÎØÃ: áã äÊãßä ãä ÅÖÇÝÉ ÇáÊåíÆÉ %s Åáì ÞÇÚÏÉ ÇáÈíÇäÇÊ ');
define('_MD_AM_GONFIG_DATA_DELETE','ÊåíÆÉ ÇáãÍÊæì ããÓæÍ ãä ÞÇÚÏÉ ÇáÈíÇäÇÊ ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','ÎØÃ: áã äÊãßä ãä ãÓÍ ÊåíÆÉ ÇáãÍÊæì ãä ÞÇÚÏÉ ÇáÈíÇäÇÊ');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','ÅÓäÇÏ ÕáÇÍíÇÊ ÇáãÌãæÚÇÊ');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','ÎØÃ: áã äÊãßä ãä ãÓÍ ÊÕÇÑíÍ ÇáãÌãæÚÉ');
define('_MD_AM_GROUP_PERMS_DELETED','Êãø ãÓÍ ÊÕÇÑíÍ ÇáãÌãæÚÉ ');

define('_MD_AM_ACCESS_ADMIN_ADD','ÅÚØÇÁ ÕáÇÍíÇÊ ÇáÅÏÇÑÉ áãÌãæÚÉ %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','ÎØÃ: áã äÊãßä ãä ÅÚØÇÁ ÕáÇÍíÇÊ ÇáÅÏÇÑÉ ááãÌãæÚÉ %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','ÅÚØÇÁ ÕáÇÍíÇÊ ÇáÏÎæá ááãÌãæÚÉ: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','ÎØÃ: áã äÊãßä ãä ÅÚØÇÁ ÕáÇÍíÇÊ ÇáÏÎæá ááãÌãæÚÉ: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','ÝÔá Ýí ÇáÊäÝíÐ %s');
define('_MD_AM_FAILED_SUCESS','%s Êãø ÇáÊäÝíÐ ÈäÌÇÍ');

define('_MD_AM_DELETE_ERROR','ÎØÃ : áã äÊãßä ãä ÇáãÓÍ %s');
define('_MD_AM_UPDATE_ERROR','ÎØÃ: áã äÊãßä ãä ÇáÊÍÏíË %s');
define('_MD_AM_DELETE_MOD_TABLES','ãÓÍ ÌÏÇæá ÇáÈÑäÇãÌ...');

define('_MD_AM_COMMENTS_DELETE','ãÓÍ ÇáÊÚáíÞÇÊ...');
define('_MD_AM_COMMENTS_DELETE_ERROR','ÎØÃ: áã äÊãßä ãä ãÓÍ ÇáÊÚáíÞÇÊ');
define('_MD_AM_COMMENTS_DELETED','ÇáÊÚáíÞÇÊ ããÓæÍÉ');

define('_MD_AM_NOTIFICATIONS_DELETE','ãÓÍ ÇáÊÈáíÛÇÊ...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ÎØÃ: áã äÊãßä ãä ãÓÍ ÇáÊÈáíÛÇÊ');
define('_MD_AM_NOTIFICATIONS_DELETED','ÇáÊÈáíÛÇÊ ããÓæÍÉ');

define('_MD_AM_TABLE_DROPPED','ÇáÌÏæá %s ÃÒíáÊ');
define('_MD_AM_TABLE_DROPPED_ERROR','ÎØÃ: áã äÊãßä ãä ÅÒÇáÉ ÇáÌÏÇæá %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','ÎØÃ: áÇ ÕáÇÍíÇÊ áÅÒÇáÉ ÇáÌÏÇæá %s !');

?>
