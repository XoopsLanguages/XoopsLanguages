<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: xoopsinfo 2.0
* Licence : GPL
* Authors :
*              - Jmorris
*              - Marco
*              - Christian
*              - DuGris (http://www.dugris.info)
*/


// Names of admin menu items
define('_AM_XI_ADMENU1','Xoops information');
define('_AM_XI_ADMENU2','Server Information');
define('_AM_XI_ADMENU3','MySql Information');
define('_AM_XI_ADMENU4','Modules Information');
define('_AM_XI_ADMENU5','Editors Information');
define('_AM_XI_ADMENU6','Overriding Information');
define('_AM_XI_ADMENU7','Mimetypes Management');
define('_AM_XI_GOTOHOMEPAGE','Tilbage til Bruger Side');
define('_AM_XI_MODULEADMIN','- Informations om din Xoopsinstallation');
define('_AM_XI_DOWN_SAFEMODESTATUS','Status safe mode');
define('_AM_XI_DOWN_REGISTERGLOBALS','Register Globals');
define('_AM_XI_DOWN_ALLOW_URL_FOPEN','allow_url_fopen');
define('_AM_XI_DOWN_USE_TRANS_SID','session.use_trans_sid');
define('_AM_XI_DOWN_SERVERUPLOADSTATUS','Upload Status');
define('_AM_XI_DOWN_MAXUPLOADSIZE','Max upload size');
define('_AM_XI_DOWN_SAFEMODEPROBLEMS',' Dette kan give problemer');
define('_AM_XI_DOWN_GDLIBSTATUS','GD Support');
define('_AM_XI_DOWN_GDLIBVERSION','GD Version');
define('_AM_XI_DOWN_GDON',' frimærker til rådighed');
define('_AM_XI_DOWN_GDOFF',' frimærker ikke til rådighed');
define('_AM_XI_DOWN_OFF','OFF');
define('_AM_XI_DOWN_ON','ON');
define('_AM_XI_EDITOR_CHECK','Status');
define('_AM_XI_EDITOR_NAME','Editor\'s navn');
define('_AM_XI_EDITOR_NONE','');
define('_AM_XI_EDITOR_INSTALL_OK','Modul installeret');
define('_AM_XI_EDITOR_NO_INSTALL','Module ikke installeret');
define('_AM_XI_EDITOR_OK','Editor OK');
define('_AM_XI_EDITOR_ERROR','Filen ikke fundet : class/... ');
define('_AM_XI_EDITOR_MODULE','Modul ikke installeret - Fil fundet : class/... ');
define('_AM_XI_EDITOR_CLASS','Modul installer - Fil ikke fundet : class/... ');
define('_AM_XI_MODULE_NAME','Modules');
define('_AM_XI_MODULE_STATUS','Status');
define('_AM_XI_MODULE_ACTION','Handling');
define('_AM_XI_MODULE_VERSION','Version');
define('_AM_XI_MODULE_XOOPS','xoops_version');
define('_AM_XI_MODULE_TABLE','Table module');
define('_AM_XI_MODULE_NEW','Seneste');
define('_AM_XI_MODULE_UPDATE','Updater modul');
define('_AM_XI_MODULE_DOWNLOAD','Download ny version');
define('_AM_XI_MODULE_SUPPORT','Support');
define('_AM_XI_MODULE_FORUM','Forum');
define('_AM_XI_MODULE_BUG','Fejlmeld');
define('_AM_XI_MODULE_FEATURE','Funktion');
define('_AM_XI_XOOPS_VERSION','Xoops version');
define('_AM_XI_XOOPS_URL','Website URL');
define('_AM_XI_XOOPS_ROOT_PATH','XOOPS Fysiske sti');
define('_AM_XI_XOOPS_THEME','Standard thema');
define('_AM_XI_XOOPS_TEMPLATE','Standard skabelon sæt');
define('_AM_XI_XOOPS_DEBUG','Debug mode');
define('_AM_XI_XOOPS_STARTPAGE','Modul på din startside');
define('_AM_XI_XOOPS_THEME_FROMFILE','Check skabeloner for ændringer ?');
define('_AM_XI_PROTECTOR_MODULE','Protector modul');
define('_AM_XI_PROTECTOR_MODULE_NOT','Ikke installeret');
define('_AM_XI_PROTECTOR_MODULE_OK','Installeret');
define('_AM_XI_PROTECTOR_PRECHECK','Pre check ');
define('_AM_XI_PROTECTOR_CHECK_ERR',' Du bør ændre din mainfile.php som beskrevet i denne <a target=\'_blank\' href=\'" . XOOPS_URL . "/modules/protector/docs/README\'>README</a>');
define('_AM_XI_PROTECTOR_PRECHECK_MSG','mangler precheck');
define('_AM_XI_PROTECTOR_POSTCHECK','Post check');
define('_AM_XI_PROTECTOR_POSTCHECK_MSG','mangler postcheck');
define('_AM_XI_PROTECTOR','<font color=\'#CC0000\'>Protector : </font>Midlertidig slået fra');
define('_AM_XI_SERVER_SOFTWARE','Software server');
define('_AM_XI_SERVER_PHP','PHP version');
define('_AM_XI_SERVER_MYSQL','MySql version');
define('_AM_XI_BROWSER','Browser');
define('_AM_XI_SAVE','Gem');
define('_AM_XI_MYSQL_ID','Id');
define('_AM_XI_MYSQL_DB','Database');
define('_AM_XI_MYSQL_INFO','Information');
define('_AM_XI_MYSQL_TIME','Time');
define('_AM_XI_MYSQL_STATUS','Status');
define('_AM_XI_MYSQL_DB_LENGTH','Data Base length');
define('_AM_XI_MYSQL_OCTETS','Octets');
define('_AM_XI_MYSQL_KOCTETS','Ko');
global $xoopsModule;
define('_AM_XI_MAKE_UPDATE','Opdateringen af modulet blev ikke udført : ');
define('_AM_XI_MAKE_UPGRADE','En ny version af <font color=\'#CC0000\'>" . $xoopsModule->name() . "</font> er tilgængelig<br /> download her :');
define('_AM_XI_NO_UPGRADE','Du har den seneste version !!!');
define('_AM_XI_MIME_ID','Id');
define('_AM_XI_MIME_EXT','Udvidelse');
define('_AM_XI_MIME_TYPES','Types Mime');
define('_AM_XI_MIME_NAME','Application type');
define('_AM_XI_MIME_TYPE','Mimetypes<br /><br /><span style=\'font-weight: normal;\'>Indtast hvert mimetype forbundet med filtypenavnet. Hver mimetype skal adskilles med <font color=\'#CC0000\'><b>|</b></font>.</span>');
define('_AM_XI_MIME_GROUPS','Grupper');
define('_AM_XI_MIME_MODULES','Modul : ');
define('_AM_XI_MIME_MTYPE','Type : ');
define('_AM_XI_MIME_STATUS','Vis');
define('_AM_XI_MIME_WIDTH','Største bredde af filen');
define('_AM_XI_MIME_HEIGHT','Maksimal højde af filen');
define('_AM_XI_MIME_SIZE','Maksimal størrelse af filen');
define('_AM_XI_MIME_ACTION','Handling');
define('_AM_XI_MIME_DISPLAY','Vis : ');
define('_AM_XI_MIME_ALL','Alle');
define('_AM_XI_MIME_VIEW','Vis');
define('_AM_XI_MIME_HIDE','Skjult');
define('_AM_XI_MIME_EDIT','Rediger');
define('_AM_XI_MIME_DELE','Slet');
define('_AM_XI_MIME_DELETETHIS','Slet denne mimetype');
define('_AM_XI_MIME_NONE','Ingen');
define('_AM_XI_MIME_NEW','Ny mimetype');
define('_AM_XI_MIME_MODIFY','Rediger');
define('_AM_XI_MIME_CREATE','Opret');
define('_AM_XI_MIME_CANCEL','Fortryd');
define('_AM_XI_MIME_SAVEALL','Gem');
define('_AM_XI_MODULE_TEMPLATE','Skabeloner');
define('_AM_XI_MODULE_TEMPLATE_BLOCK','Skabeloner (blokke)');
define('_AM_XI_TPL_OVERRIDE_ON','Skabelon tilsidesættelse til');
define('_AM_XI_TPL_OVERRIDE_OFF','Skabelon tilsidesættelse fra');
define('_AM_XI_TPL_THEMES','Thema : ');
// Version 2.12
define('_AM_XI_ADMENU8','System Information');
define('_AM_XI_CONFIRM','Bekræft');
define('_AM_XI_MYSQL_ACTION','HANDLING : ');
define('_AM_XI_MYSQL_OPTIMIZE','Optimer tabeller');
define('_AM_XI_MYSQL_REPAIR','Reparer tabel');
define('_AM_XI_MYSQL_CHECK','Check tabeller');
define('_AM_XI_MYSQL_ANALYZE','Analyser tabeller');
define('_AM_XI_MYSQL_RETURN','Retur til : " . _AM_XI_ADMENU3);

define("_MI_XI_MYSQL_TABLE","Table');
define('_MI_XI_MYSQL_TABLE_TXT','Table(r)');
define('_MI_XI_MYSQL_TYPE','type');
define('_MI_XI_MYSQL_COLLATION','Collation');
define('_MI_XI_MYSQL_RECORDS','Records');
define('_MI_XI_MYSQL_SIZE','Størrelse');
define('_MI_XI_MYSQL_OVERHEAD','Overhead');
define('_MI_XI_MYSQL_SUM','Sum');
// Version 2.13
define('_AM_XI_ADMENU9','PHP Sikkerheds Information');
?>