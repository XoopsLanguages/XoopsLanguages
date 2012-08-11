<?php
// $Id: upgrade.php 558 2006-06-20 06:35:23Z skalpa $

define("LEGEND_XOOPS_PATHS","XOOPS fysiska stig" );
define("LEGEND_DATABASE","Databas skrifttyp" );

define("XOOPS_LIB_PATH_LABEL","XOOPS bibliotek" );
define("XOOPS_LIB_PATH_HELP","Fysiska stig till XOOPS biblioteket UTAN backslash, för framtida kompatibilitet, flytta mappen ut av " . XOOPS_ROOT_PATH . " för att göra den säker. Bara om din udbyder kan erbjuda detta." );
define("XOOPS_DATA_PATH_LABEL","XOOPS datafil bibliotek" );
define("XOOPS_DATA_PATH_HELP","Fysisk stig till XOOPS datafiler (skrivbar) biblioteket angives UTAN backslash. För framtida kompatibilitet, flytta mappen ut av " . XOOPS_ROOT_PATH . " för att göra den säker. Bara om din utbyder kan erbjuda detta." );

define("DB_COLLATION_LABEL","Databas skrifttyp och bearbetning" );
define("DB_COLLATION_HELP",  "MySQL version 4.12 stöttar egna skrifttyper och bearbetningar. Utan den är mycket komplexitet, så låt bli med att ändra något, medmindre du är säker på ditt val");
define("DB_COLLATION_NOCHANGE",  "Ingen ändringar");

define("XOOPS_PATH_FOUND","Stig funnit." );
define("ERR_COULD_NOT_ACCESS","Kunde inte få tillgångar till den angivne mappen. Kontroller att den finns och är läsbar på servaren." );
define("CHECKING_PERMISSIONS","Kontrollerar fil och mapp behörigheter...." );
define("ERR_NEED_WRITE_ACCESS","Servaren skall ha skrivbehörighet till följande filer och mappar<br />(dvs. <em>chmod 777 mapp_namn</em> på UNIX/LINUX server)" );
define("IS_NOT_WRITABLE","%s är inte skrivbar." );
define("IS_WRITABLE","%s är skrivbar." );
define("ERR_COULD_NOT_WRITE_MAINFILE","Fel vid skrivning av innehåll till mainfile.php, skriv innehållet in i mainfile.php manuellt." );

define("LEGEND_XOOPS_MAINFILE_FORPROTECTOR","XOOPS mainfile förberedelse");
define("XOOPS_MAINFILE_LABEL_FORPROTECTOR","Om du önskar att installerar protector-modulet från GIJOE, kan du ersatta filen <em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em> med <em>/extras/mainfile.dist.php.protector</em>" .
                                            " (Kom ihåg att döpa om filen till <em>mainfile.dist.php</em>).<br />" .
                                            "Om protector-modulet redan er installerat och fungerar korrekt, så se vänligen bort från detta.");
?>