<?php
// $Id$
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: Xoops Nordic

define( "LEGEND_XOOPS_PATHS", "XOOPS fysiske sti" );
define( "LEGEND_DATABASE", "Database skrifttype" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS bibliotek" );
define( "XOOPS_LIB_PATH_HELP", "Fysisk sti til XOOPS biblioteket UDEN backslash, for fremtidig kompatibilitet, flyt mappen ud af " . XOOPS_ROOT_PATH . " for at gøre den sikker. Kun hvis din udbyder kan tilbyde dette." );
define( "XOOPS_DATA_PATH_LABEL", "XOOPS datafil bibliotek" );
define( "XOOPS_DATA_PATH_HELP", "Fysisk sti til XOOPS datafiler (skrivbar) biblioteket angives UDEN backslash. For fremtidig kompatibilitet, flyt mappen ud af " . XOOPS_ROOT_PATH . " for at gøre den sikker. Kun hvis din udbyder kan tilbyde dette." );
 	
define( "DB_COLLATION_LABEL", "Database skrifttype og bearbejdning" );
define( "DB_COLLATION_HELP", "MySQL version 4.12 understøtter egne skrifttyper og bearbejdninger. Men det er meget komplekst, så lad være med at ændre noget, medmindre du er sikker på dit valg");
define( "DB_COLLATION_NOCHANGE", "Ingen ændringer");
	
define( "XOOPS_PATH_FOUND", "Sti fundet." );
define( "ERR_COULD_NOT_ACCESS", "Kunne ikke få adgang til den angivne mappe. Kontrollér at den findes og er læsbar af serveren." );
define( "CHECKING_PERMISSIONS", "Kontrollerer filer og mappe rettigheder...." );
define( "ERR_NEED_WRITE_ACCESS", "Serveren skal have skriveadgang til følgende filer og mapper<br />(dvs. <em>chmod 777 mappe_navn</em> på UNIX/LINUX server)" );
define( "IS_NOT_WRITABLE", "%s er ikke skrivbar." );
define( "IS_WRITABLE", "%s er skrivbar." );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "Fejl ved skrivning af indhold til mainfile.php, skriv indholdet ind i mainfile.php manuelt." );

define( "LEGEND_XOOPS_MAINFILE_FORPROTECTOR", "XOOPS mainfile forberedelse");
define( "XOOPS_MAINFILE_LABEL_FORPROTECTOR", "Hvis du ønsker at installerer protector-modulet fra GIJOE, kan du erstatte filen <em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em> med <em>/extras/mainfile.dist.php.protector</em>" .
" (Husk at omdøbe filen til <em>mainfile.dist.php</em>).<br />" .
"Hvis protector-modulet allerede er installeret og fungerer korrekt, så se venligst bort fra dette.");
?>