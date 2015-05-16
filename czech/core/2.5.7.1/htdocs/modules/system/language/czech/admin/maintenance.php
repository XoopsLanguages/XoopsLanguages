<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    cs
 * _CHARSET     UTF-8
 * @version     $Id: maintenance.php 12363 2014-03-08 10:39:06Z beckmi $
 */
//Nav
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER',"Údržba databáze");
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST',"All maintenance");
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP',"Úložiště");
define('_AM_SYSTEM_MAINTENANCE_SESSION',"Smazat tabulku SESSION");
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK',"Údržba session : OK");
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK',"Údržba session : CHYBA!");
define('_AM_SYSTEM_MAINTENANCE_AVATAR',"Smazat nepoužívané uživatelské avatary?");
define('_AM_SYSTEM_MAINTENANCE_CACHE',"Vyčistit adresáře vyrovnávací paměti?");
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK',"Údržba dočasné paměti : OK");
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK',"Údržba dočasné paměti : CHYBA!");
define('_AM_SYSTEM_MAINTENANCE_TABLES',"Údržba tabulek");
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK',"Údržba tabulek : OK");
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK',"Údržba tabulek : CHYBA!");
define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC',"Optimalizace, kontrola, oprava nebo analýza tabulek");
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK',"Údržba databáze : OK");
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK',"Údržba databáze : CHYBA!");
define('_AM_SYSTEM_MAINTENANCE_CHOICE1',"Optimalizovat tabulky");
define('_AM_SYSTEM_MAINTENANCE_CHOICE2',"Zkontrolovat tabulky");
define('_AM_SYSTEM_MAINTENANCE_CHOICE3',"Opravit tabulky");
define('_AM_SYSTEM_MAINTENANCE_CHOICE4',"Analyzovat tabulky");
define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC',
"ANALYZE TABLE analyzuje a uloží klíče tabulek. Pamatujte, že měhem analýzy je tabulka uzamčena pouze pro čtení.<br /> 
CHECK TABLE zkontroluje tabulky, jestli neobsahují chyby.<br />
OPTIMIZE TABLE zlepší využití místa a defragmentuje datový soubor.<br />
REPAIR TABLE opraví poškozené tabulky"); // analyzes and stores the key distribution for a table
define('_AM_SYSTEM_MAINTENANCE_RESULT',"Výsledek");
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT',"Žádné výsledky");
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE',"Úkol: vyčistit dočasnou paměť");
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION',"Úkol: vyčistit tabulku sessions");
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY',"Úkol: databáze");
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR',"Úkol: vymazat nepoužívané avatary");
define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE',"Nebyla zvolena žádná údržba."); // No choice for maintenance
define('_AM_SYSTEM_MAINTENANCE_TABLES1',"Tabulky");
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE',"Optimalizována");
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK',"Zkontrolována");
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR',"Opravena");
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE',"Analyzována");
//Dump
define('_AM_SYSTEM_MAINTENANCE_DUMP',"Záloha tabulek");
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES',"Vyberte tabulky nebo modul");
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP',"Přidat do souboru příkaz DROP TABLE IF EXISTS 'tables'?");
define('_AM_SYSTEM_MAINTENANCE_DUMP_OR',"NEBO");
define('_AM_SYSTEM_MAINTENANCE_DUMP_AND',"A ZÁROVEŇ");
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES',"CHYBA! Musíte vybrat buď tabulky nebo moduly.");
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES',"Žádné tabulky");
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES',"Tabulky");
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES',"Stuktury");
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS',"Počet záznamů");
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED',"Soubor vytvořen");
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT',"Výsledek");
define('_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS',"záznam(y)");
// Tips
define('_AM_SYSTEM_MAINTENANCE_TIPS',
"<ul>
<li>Zde můžete jednoduše udržovat svoje stránky: smazat vyrovnávací paměť, vyčistit tabulku session nebo provést údržbu databáze.</li>
</ul>");
