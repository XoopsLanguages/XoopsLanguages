<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    cs
 * _CHARSET     UTF-8
 * @version     $Id: filemanager.php 8066 2011-11-06 05:09:33Z beckmi $
 */
 
 //Nav
define('_AM_SYSTEM_FILEMANAGER_NAV_MANAGER','Správce souborů');
define('_AM_SYSTEM_FILEMANAGER_NAV_MAIN','Správce souborů');

//Tips
define('_AM_SYSTEM_FILEMANAGER_NAV_TIPS','
<ul>
<li>Slouží ke změně opravánění a obsahu souborů nebo ke smazání nepotřebných souborů.</li>
</ul>
');

// Main
define('_AM_SYSTEM_FILEMANAGER_DIRECTORY','Adresář');
define('_AM_SYSTEM_FILEMANAGER_FILES','Soubory');
define('_AM_SYSTEM_FILEMANAGER_GENERATE','Force generation');
define('_AM_SYSTEM_FILEMANAGER_SELECT_THEME','Vyberte vzhled');
define('_AM_SYSTEM_FILEMANAGER_FORCE_GENERATED','Force generated');
define('_AM_SYSTEM_FILEMANAGER_NAV_FILE_GENERATED','Files generated');
define('_AM_SYSTEM_FILEMANAGER_NOT_CREATED','No files created');
define('_AM_SYSTEM_FILEMANAGER_HOME','Domů');
define('_AM_SYSTEM_FILEMANAGER_SAVE','Uložit');
define('_AM_SYSTEM_FILEMANAGER_CANCEL','Zrušit');
define('_AM_SYSTEM_FILEMANAGER_RESTORE','Opravit');
define('_AM_SYSTEM_FILEMANAGER_REFRESH','Obnovit seznam');
define('_AM_SYSTEM_FILEMANAGER_UPLOAD','Nahrát soubor');
define('_AM_SYSTEM_FILEMANAGER_UPLOAD_CHOOSE','Zvolte soubor, který chcete nahrát na server.');
define('_AM_SYSTEM_FILEMANAGER_ADDDIR','Vytvořit adresář');
define('_AM_SYSTEM_FILEMANAGER_ADDDIR_NAME','Zvolte název nového adresáře.');
define('_AM_SYSTEM_FILEMANAGER_ADDFILE','Vytvořit nový soubor');
define('_AM_SYSTEM_FILEMANAGER_DELDIR','Smazat adresář');

define('_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_EXISTS','CHYBA! Soubor neexistuje.');
define('_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_DELETE','CHYBA! Soubor nelze smazat.');
define('_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_RENAME','CHYBA! Soubor nelze přejmenovat.');
define('_AM_SYSTEM_FILEMANAGER_BACK','Zpět');
define('_AM_SYSTEM_FILEMANAGER_DELETE','Smazat');
define('_AM_SYSTEM_FILEMANAGER_ERROR','Chyba');
define('_AM_SYSTEM_FILEMANAGER_EDIT','Upravit:');
define('_AM_SYSTEM_FILEMANAGER_EMPTY_FILE','Soubor je prázdný');
define('_AM_SYSTEM_FILEMANAGER_DELDIR_NOTOK','CHYBA! Smažte tento adresář.');
define('_AM_SYSTEM_FILEMANAGER_DELDIR_OK','Adresář byl v pořádku vymazán.');

// Message
define('_AM_SYSTEM_FILEMANAGER_UPLOAD_FILE','Soubor byl v pořádku nahrán na sever.');
define('_AM_SYSTEM_FILEMANAGER_EXTRACT_FILE','Soubor byl v pořádku rozbalen.');
define('_AM_SYSTEM_FILEMANAGER_EXTRACT_ERROR','Soubor se nepodařilo rozbalit.');
define('_AM_SYSTEM_FILEMANAGER_DELETE_FILE','Soubor byl v pořádku vymazán.');
define('_AM_SYSTEM_FILEMANAGER_DIR_SUCCESS','Adresář byl v pořádku vytvořen.');
define('_AM_SYSTEM_FILEMANAGER_DIR_ERROR','Adresář se nepodařilo vytvořit.');
define('_AM_SYSTEM_FILEMANAGER_DIR_RYSDEL','Myslíte to vážně? Opravdu chcete smazat tento adresář?');
define('_AM_SYSTEM_FILEMANAGER_FILE_SUCCESS','Soubor byl v pořádku vytvořen.');
define('_AM_SYSTEM_FILEMANAGER_SUREDEL', 'Myslíte to vážně? Opravdu chcete smazat soubor %s?');
define('_AM_SYSTEM_FILEMANAGER_DIR_SUREDEL', 'Myslíte to vážně? Opravdu chcete smazat adresář %s?<br />Varování: Současně smažete i všechny podadresáře a soubory v nich.');
?>
