<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * maintenance extensions
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         maintenance
 * @since           2.6.0
 * @author          Mage Grégory (AKA Mage), Cointin Maxime (AKA Kraven30)
 * @version         $Id$
 */
define("_AM_MAINTENANCE_ACTIONS", "aktioner");
define("_AM_MAINTENANCE_AND", "OG");
define("_AM_MAINTENANCE_DELETE", "Slet fil");
define("_AM_MAINTENANCE_OR", "OR");

// Index.php
define("_AM_MAINTENANCE_NBFILES", "Der er %s filer");

// Center.php
define("_AM_MAINTENANCE_CENTER_ANALYSE", "Analyser");
define("_AM_MAINTENANCE_CENTER_CACHE", "Rens cache mappe");
define("_AM_MAINTENANCE_CENTER_CHECK", "Check");
define("_AM_MAINTENANCE_CENTER_CHOICE1", "Optimer tabel(ler)");
define("_AM_MAINTENANCE_CENTER_CHOICE2", "Check tabel(ler))");
define("_AM_MAINTENANCE_CENTER_CHOICE3", "Reparer tabel(ler)");
define("_AM_MAINTENANCE_CENTER_CHOICE4", "Analyze tabel(ler)");
define("_AM_MAINTENANCE_CENTER_OPTIMIZE", "Optimer");
define("_AM_MAINTENANCE_CENTER_RESULT", "Resultat");
define("_AM_MAINTENANCE_CENTER_RESULT_SESSION", "Rens sessioner tabellen opgaven løst med succes");
define("_AM_MAINTENANCE_CENTER_RESULT_SMARTY_CACHE", "Rengøring af Smarty cache løst med held ( %s filer)");
define("_AM_MAINTENANCE_CENTER_RESULT_SMARTY_COMPILE", "Rengøring af Smarty kompiles løst med held ( %s filer)");
define("_AM_MAINTENANCE_CENTER_RESULT_XOOPS_CACHE", "Rengøring af Xoops cache løst med held ( %s filer)");
define("_AM_MAINTENANCE_CENTER_RETURN", "Returner til vedligeholdelsescenter");
define("_AM_MAINTENANCE_CENTER_TABLES", "Tabller vedligeholdelse");
define("_AM_MAINTENANCE_CENTER_TABLES1", "Tabeller");
define("_AM_MAINTENANCE_CENTER_TABLES_DESC",
"Analyser TABLE analyserer og lagrer det centrale fordeling for en tabel. Under analysen er tabellen låst med en read lock. <br />
TJEK TABLE kontrollerer en eller flere tabeller for fejl. <br />
OPTIMER TABLE reklamation den ubenyttede plads og at defragmentere datafilen. <br />
REPARATION TABEL reparerer en eventuelt beskadiget tabel ");
define("_AM_MAINTENANCE_CENTER_REPAIR", "Reparer");
define("_AM_MAINTENANCE_CENTER_SESSION", "Tøm sessionstabellen");
define("_AM_MAINTENANCE_CENTER_SIZE", "Størrelse");
define("_AM_MAINTENANCE_CENTER_SIZE_SUFFIX", "[KB]");
define("_AM_MAINTENANCE_CENTER_SMARTY_CACHE", "Smarty cache");
define("_AM_MAINTENANCE_CENTER_SMARTY_COMPILE", "Smarty Compile");
define("_AM_MAINTENANCE_CENTER_XOOPS_CACHE", "XOOPS cache");

// Dump.php
define("_AM_MAINTENANCE_DUMP_DELETED", "Fil slettet");
define("_AM_MAINTENANCE_DUMP_DELETEALL", "Slet alle filer");
define("_AM_MAINTENANCE_DUMP_DELETEDALL", "Alle filer er slettede");
define("_AM_MAINTENANCE_DUMP_DOWNLOAD", "Download");
define("_AM_MAINTENANCE_DUMP_DROP", "Tilføj kommandoen DROP TABLE IF EXISTS til tabeller i dump");
define("_AM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES", "Du skal vælge de tabeller eller moduler");
define("_AM_MAINTENANCE_DUMP_FILES", "Filer");
define("_AM_MAINTENANCE_DUMP_FILE_CREATED", "Fil oprettet");
define("_AM_MAINTENANCE_DUMP_FILE_NOTCREATED", "Fil ikke oprettet");
define("_AM_MAINTENANCE_DUMP_FORM", "Opret nyt Dump");
define("_AM_MAINTENANCE_DUMP_LIST", "List af files");
define("_AM_MAINTENANCE_DUMP_NB_RECORDS", "Antal poster");
define("_AM_MAINTENANCE_DUMP_NOFILE", "Ingen fil");
define("_AM_MAINTENANCE_DUMP_NO_TABLES", "Ingen tabeller");
define("_AM_MAINTENANCE_DUMP_STRUCTURES", "strukturer");
define("_AM_MAINTENANCE_DUMP_TABLES", "Tabeller");
define("_AM_MAINTENANCE_DUMP_TABLES_OR_MODULES", "Vælg tabeller eller moduler");
define("_AM_MAINTENANCE_DUMP_RECORDS", "record(s)");

// Tips
define("_AM_MAINTENANCE_CENTER_TIPS",
"<ul>
<li>Du kan lave en simpel vedligeholdelse af din XOOPS Installation: rydde din cache og session tabel, og gøre vedligeholdelsen af ​​dine tabeller </li>
</Ul>");