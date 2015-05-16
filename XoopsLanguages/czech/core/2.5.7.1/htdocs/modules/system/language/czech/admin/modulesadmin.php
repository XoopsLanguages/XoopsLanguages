<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    cs
 * _CHARSET     UTF-8
 * @version     $Id: modulesadmin.php 11982 2013-08-27 10:08:37Z beckmi $
 */
// Navigation
define('_AM_SYSTEM_MODULES_ADMIN',"Nastavení modulu"); // zobrazuje se po dokončené aktualizaci, ale i jinde na webu
define('_AM_SYSTEM_MODULES_LIST',"Dostupné moduly");
define('_AM_SYSTEM_MODULES_TOINSTALL',"Nainstalovat moduly");
define('_AM_SYSTEM_MODULES_VALIDATE',"Potvrdit změny");
define('_AM_SYSTEM_MODULES_SUBMITRES',"Výsledek změn");
// Messages
define('_AM_SYSTEM_MODULES_RUSUREINS',"Kliknutím na tlačítko pod tímto textem spustíte instalaci modulu.");
define('_AM_SYSTEM_MODULES_RUSUREUNINS',"Myslíte to vážně? Opravdu chcete odinstalovat tento modul?");
define('_AM_SYSTEM_MODULES_RUSUREUPD',"Kliknutím na tlačítko pod tímto textem spustíte aktualizaci modulu.");
define('_AM_SYSTEM_MODULES_BTOMADMIN',"Zpět na seznam modulů");    // zobrazuje se po dokončení instalace nebo aktualizace.
define('_AM_SYSTEM_MODULES_INSTALLING',"Instalace modulu ");
define('_AM_SYSTEM_MODULES_UNINSTAL',"Odinstalace modulu ");
define('_AM_SYSTEM_MODULES_DEACTIVATE',"Deaktivace modulu ");
define('_AM_SYSTEM_MODULES_ACTIVATE',"Aktivace modulu ");
define('_AM_SYSTEM_MODULES_UPDATING',"Aktualizace modulu ");      // ------
// Main
define('_AM_SYSTEM_MODULES_INSTALL',"Instalovat");
define('_AM_SYSTEM_MODULES_UNINSTALL',"Odinstalovat");
define('_AM_SYSTEM_MODULES_UPDATE',"Aktualizovat");
define('_AM_SYSTEM_MODULES_VIEWLARGE',"Zobrazit jako ikony"); // Large View
define('_AM_SYSTEM_MODULES_VIEWLINE',"Zobrazit jako seznam"); // Line View
// %s represents module name
define('_AM_SYSTEM_MODULES_FAILINS',"Nemohu instalovat %s.");
define('_AM_SYSTEM_MODULES_FAILACT',"Nemohu aktivovat %s.");
define('_AM_SYSTEM_MODULES_FAILDEACT',"Nemohu deaktivovat %s.");
define('_AM_SYSTEM_MODULES_FAILUPD',"Nemohu aktualizovat %s.");
define('_AM_SYSTEM_MODULES_FAILUNINS',"Nemohu odinstalovat %s.");
define('_AM_SYSTEM_MODULES_FAILORDER',"Nemohu změnit pořadí %s.");
define('_AM_SYSTEM_MODULES_FAILWRITE',"Nemohu zapsat do hlavního menu.");
define('_AM_SYSTEM_MODULES_ALEXISTS',"Modul %s je již nainstalovaný.");
define('_AM_SYSTEM_MODULES_ERRORSC',"CHYBA(y):");
define('_AM_SYSTEM_MODULES_OKINS',"Modul %s byl v pořádku nainstalován.");
define('_AM_SYSTEM_MODULES_OKACT',"Modul %s byl v pořádku aktivován.");
define('_AM_SYSTEM_MODULES_OKDEACT',"Modul %s byl v pořádku deaktivován.");
define('_AM_SYSTEM_MODULES_OKUPD',"Modul %s byl v pořádku aktualizován.");
define('_AM_SYSTEM_MODULES_OKUNINS',"Modul %s byl v pořádku odinstalován.");
define('_AM_SYSTEM_MODULES_OKORDER',"Modul %s byl v pořádku změněn.");
define('_AM_SYSTEM_MODULES_MODULE',"Modul");
define('_AM_SYSTEM_MODULES_VERSION',"Verze");
define('_AM_SYSTEM_MODULES_LASTUP',"Poslední aktualizace");
define('_AM_SYSTEM_MODULES_DEACTIVATED',"Deaktivován");
define('_AM_SYSTEM_MODULES_ACTION',"Akce");
define('_AM_SYSTEM_MODULES_MENU',"Zobrazit v menu");
define('_AM_SYSTEM_MODULES_HIDE',"Skrýt");
define('_AM_SYSTEM_MODULES_SHOW',"Zobrazit");
define('_AM_SYSTEM_MODULES_DUPEN',"V tabulce je duplicita!");
define('_AM_SYSTEM_MODULES_DEACTED',"Modul byl v pořádku deaktivován. Nyní jej můžete bezpečně odinstalovat.");
define('_AM_SYSTEM_MODULES_ACTED',"Modul byl v pořádku aktivován.");
define('_AM_SYSTEM_MODULES_UPDTED',"Modul byl v pořádku aktualizován.");
define('_AM_SYSTEM_MODULES_SYSNO',"Systémový modul nelze deaktivovat.");
define('_AM_SYSTEM_MODULES_STRTNO',"Tento modul je nastavený jako výchozí modul hlavní stránky. V nastaveních vyberte jiný vhodný modul.");
define('_AM_SYSTEM_MODULES_ORDER',"Pořadí v menu");
define('_AM_SYSTEM_MODULES_ORDER0',"(0 = skrýt)");
define('_AM_SYSTEM_MODULES_ACTIVE',"Aktivní");
define('_AM_SYSTEM_MODULES_INACTIVE',"Neaktivní");
define('_AM_SYSTEM_MODULES_NOTINSTALLED',"Nenainstalované");
define('_AM_SYSTEM_MODULES_NOCHANGE',"Beze změn");
define('_AM_SYSTEM_MODULES_SUBMIT',"Použít");
define('_AM_SYSTEM_MODULES_CANCEL',"Zrušit");
define('_AM_SYSTEM_MODULES_DBUPDATE',_AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_MODULES_LISTUPBLKS',"The following blocks will be updated.<br />Select the blocks of which contents (template and options) may be overwritten.<br />");
define('_AM_SYSTEM_MODULES_NEWBLKS',"Nové bloky");
define('_AM_SYSTEM_MODULES_DEPREBLKS',"Zastaralé bloky"); // Deprecated Blocks
// Logger
define('_AM_SYSTEM_MODULES_TABLE_RESERVED',"%s je rezervovaná tabulka.");
define('_AM_SYSTEM_MODULES_CREATE_TABLES',"Vytvářím tabulky...");
define('_AM_SYSTEM_MODULES_TABLE_CREATED',"Tabulka byla v pořádku vytvořena.");
define('_AM_SYSTEM_MODULES_INSERT_DATA',"&nbsp;&nbsp; Vkládám data do tabulky %s");
define('_AM_SYSTEM_MODULES_INSERT_DATA_FAILD',"Nemohu vložit %s do databáze.");
define('_AM_SYSTEM_MODULES_INSERT_DATA_DONE',"Data modulu byla v pořádku uložena do databáze.");
define('_AM_SYSTEM_MODULES_MODULEID'," ID modulu: %s");
define('_AM_SYSTEM_MODULES_SQL_FOUND',"V %s nalezen soubor SQL.");
define('_AM_SYSTEM_MODULES_SQL_NOT_FOUND',"V %s nenalezen soubor SQL.");
define('_AM_SYSTEM_MODULES_SQL_NOT_CREATE',"CHYBA: Nemohu vytvořit %s ");
define('_AM_SYSTEM_MODULES_SQL_NOT_VALID',"%s není správný SQL soubor.");
define('_AM_SYSTEM_MODULES_GROUP_ID'," ID skupiny: %s ");
define('_AM_SYSTEM_MODULES_NAME'," Jméno: ");
define('_AM_SYSTEM_MODULES_VALUE'," Hodnota: ");
// Templates
define('_AM_SYSTEM_MODULES_TEMPLATES_ADD',"Vkládám šablony...");
define('_AM_SYSTEM_MODULES_TEMPLATES_DELETE',"Vymazávám šablony...");
define('_AM_SYSTEM_MODULES_TEMPLATES_UPDATE',"Aktualizuji šablony...");
define('_AM_SYSTEM_MODULES_TEMPLATE_ID',"ID šablony: %s ");
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA',"Šablona %s byla v pořádku uložena do databáze.");
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR',"CHYBA! Nemohu do databáze uložit %s.");
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED',"Šablona %s byla v pořádku přeložena "); // compiled
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED',"CHYBA! Během překladu šablony %s došlo k cbybě.");
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA',"Šablona %s byla smazána z databáze. ");
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD',"CHYBA: Nemohu z databáze smazat šablonu %s. ");
define('_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA',"Šablona %s byla v pořádku uložena do databáze. ");
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE',"Šablona %s byla znovu přeložena."); // recompiled
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD',"CHYBA: Během překladu šablony %s došlo k chybě.");
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR',"CHYBA: Nemohu znovu přeložit šablonu %s. ");
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR',"CHYBA: Nemohu smazat starou šablonu %s. Končím aktualizaci tohoto souboru. ");
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE',"Šablona %s byla v pořádku aktualizována. ");
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR',"CHYBA: Nemohu aktualizovat šablonu %s. ");
// Blocks
define('_AM_SYSTEM_MODULES_BLOCKS_ADD',"Vytvářím bloky...");
define('_AM_SYSTEM_MODULES_BLOCKS_DELETE',"Vymazávám bloky...");
define('_AM_SYSTEM_MODULES_BLOCKS_REBUILD',"Aktualizuji bloky..."); // Rebuilding blocks...
define('_AM_SYSTEM_MODULES_BLOCK_ID'," ID bloku: %s ");
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS',"Nastavuji práva přístupu k bloku.");
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR',"CHYBA! Nemohu nastavit práva přístupu k bloku.");
define('_AM_SYSTEM_MODULES_BLOCK_ADD',"Blok %s byl v pořádku vytvořen. ");
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR',"CHYBA! Nemohu do databáze vložit blok %s. ");
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE',"Chyba databáze: %s ");
define('_AM_SYSTEM_MODULES_BLOCK_CREATED',"Blok %s byl v pořádku vytvořen. ");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE',"Blok %s byl v pořádku smazán. ");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA',"Šablona bloku %s byla v pořádku vymazána z datbáze. ");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR',"CHYBA! Nemohu smazat blok %s.");
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR',"CHYBA! Nemohu z databáze smazat šablonu bloku %s.");
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED',"Šablona bloku %s je zastaralá. ");
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR',"CHYBA! Nemhu smazat zastaralou šablonu bloku.  ");
define('_AM_SYSTEM_MODULES_BLOCK_UPDATE',"Blok %s byl v pořádku aktualizován. ");
// Configs
define('_AM_SYSTEM_MODULES_GONFIG_ID'," ID nastavení: %s");
define('_AM_SYSTEM_MODULES_MODULE_DATA_ADD',"Vkládám konfigurační data modulu...");
define('_AM_SYSTEM_MODULES_MODULE_DATA_DELETE',"Vymazávám konfigurační data modulu...");
define('_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE',"Data modulu byla v pořádku aktualizována.");
define('_AM_SYSTEM_MODULES_CONFIG_ADD'," Konfigurační nastavení bylo v pořádku vloženo.");
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD'," Nastavení %s bylo v pořádku vloženo do databáze.");
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR'," CHYBA! Nemohu vložit do databáze vložit nastavení %s. ");
define('_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE',"Konfigurační data byla v pořádku vymazána z databáze. ");
define('_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR',"CHYBA! Nemohu smazat konfigurační data z databáze.");
// Access
define('_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD',"Nastavuji práva pro skupiny...");
define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR',"CHYBA! Nemohu smazat nastavení práv pro skupiny. ");
define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED',"Práva pro skupiny byla v pořádku smazána. ");
define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD',"Nastavena administrátorská práva pro skupinu %s");
define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR',"CHYBA! Nemohu nastavit administrátorská práva pro skupinu %s");
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR',"Vložena uživatelská práva pro skupinu: %s");
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR',"CHYBA: Nemohu nastavit uživatelská práva pro skupinu: %s");
// execute module specific install script if any
define('_AM_SYSTEM_MODULES_FAILED_EXECUTE',"Nemohu provést %s");
define('_AM_SYSTEM_MODULES_FAILED_SUCESS',"%s v pořádku vykonán.");
define('_AM_SYSTEM_MODULES_DELETE_ERROR',"CHYBA! Nemohu smazat %s");
define('_AM_SYSTEM_MODULES_UPDATE_ERROR',"CHYBA! Nemohu aktualizovat %s");
define('_AM_SYSTEM_MODULES_DELETE_MOD_TABLES',"Vymazávám tabulky modulu...");
define('_AM_SYSTEM_MODULES_COMMENTS_DELETE',"Vymazávám komentáře...");
define('_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR',"CHYBA! Nemohu vymazat komentáře.");
define('_AM_SYSTEM_MODULES_COMMENTS_DELETED',"Komentáře byly v pořádku vymazány.");
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE',"Vymazávám upozornění...");
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR',"CHYBA! Nemohu smazat upozornění.");
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED',"Upozornění byla v pořádku vymazána.");
define('_AM_SYSTEM_MODULES_TABLE_DROPPED',"Tabulka %s byla v pořádku smazána z databáze.");
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR',"CHYBA! Nemohu z databáze vymazat tabulku %s.");
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED',"CHYBA! Není dovolené vymazat z databáze tabulku %s! ");
// Tips
define('_AM_SYSTEM_MODULES_TIPS',
"<ul>
<li>Pokud nainstalujete nový modul, nezapomeňte mu nastavit předvolby, bloky a oprávnění k přístupu.</li>
<li>Pokud chcete modul skrýt v hlavním menu, nastavte mu pořadí na 0.</li>
<li>Z bezpečnostních důvodů je lepší nepoužívané moduly smazat ze serveru.</li>
<li>Ke změně pořadí modulů (tak, jak budou seřazené v hlavním menu), můžete použít metodu \"drag and drop\" a přemístit moduly dle libosti.</li>
</ul>");
define('_AM_SYSTEM_MODULES_CONFIRM_TIPS',
"<ul>
<li>Chystáte se provést změny v nastavení modulů. Před provedením změn je ještě překontrolujte.</li> 
</ul>");                          // Check all modifications for validate
// 2.5.7
define('_AM_SYSTEM_MODULES_INSTALL_TESTDATA',"Vkládám testovací data");
