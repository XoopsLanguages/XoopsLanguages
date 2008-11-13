<?php
// $Id: upgrade.php 558 2006-06-20 06:35:23Z skalpa $

define( "LEGEND_XOOPS_PATHS", "XOOPS fysiske sti" );
define( "LEGEND_DATABASE", "Database skrifttype" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS bibliotek" );
define( "XOOPS_LIB_PATH_HELP", "Fysisk sti til XOOPS biblioteket UDEN backslash, for fremtidig kompatibilitet, flyt mappen ud af " . XOOPS_ROOT_PATH . " for at g�re den sikker. Kun hvis din udbyder kan tilbyde dette." );
define( "XOOPS_DATA_PATH_LABEL", "XOOPS datafil bibliotek" );
define( "XOOPS_DATA_PATH_HELP", "Fysisk sti til XOOPS datafiler (skrivbar) biblioteket angives UDEN backslash. For fremtidig kompatibilitet, flyt mappen ud af " . XOOPS_ROOT_PATH . " for at g�re den sikker. Kun hvis din udbyder kan tilbyde dette." );

define( "DB_COLLATION_LABEL", "Database skrifttype og bearbejdning" );
define( "DB_COLLATION_HELP",  "MySQL version 4.12 underst�tter egne skrifttyper og bearbejdninger. Men det er meget komplekst, s� lad v�re med at �ndre noget, medmindre du er sikker p� dit valg");
define( "DB_COLLATION_NOCHANGE",  "Ingen �ndringer");

define( "XOOPS_PATH_FOUND", "Sti fundet." );
define( "ERR_COULD_NOT_ACCESS", "Kunne ikke f� adgang til den angivne mappe. Kontroll�r at den findes og er l�sbar af serveren." );
define( "CHECKING_PERMISSIONS", "Kontrollerer filer og mappe rettigheder...." );
define( "ERR_NEED_WRITE_ACCESS", "Serveren skal have skriveadgang til f�lgende filer og mapper<br />(dvs. <em>chmod 777 mappe_navn</em> p� UNIX/LINUX server)" );
define( "IS_NOT_WRITABLE", "%s er ikke skrivbar." );
define( "IS_WRITABLE", "%s er skrivbar." );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "Fejl ved skrivning af indhold til mainfile.php, skriv indholdet ind i mainfile.php manuelt." );

define( "LEGEND_XOOPS_MAINFILE_FORPROTECTOR", "XOOPS mainfile forberedelse");
define( "XOOPS_MAINFILE_LABEL_FORPROTECTOR", "Hvis du �nsker at installerer protector-modulet fra GIJOE, kan du erstatte filen <em>/upgrade/" . basename(dirname(dirname(__FILE__))) . "/mainfile.dist.php</em> med <em>/extras/mainfile.dist.php.protector</em>" .
                                            " (Husk at omd�be filen til <em>mainfile.dist.php</em>).<br />" .
                                            "Hvis protector-modulet allerede er installeret og fungerer korrekt, s� se venligst bort fra dette.");
?>