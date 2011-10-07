<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    en
 * _CHARSET     UTF-8
 * @version     $Id: users.php 5075 2010-08-26 11:56:22Z forxoops $
 */

// Navigation
define("_AM_SYSTEM_USERS_NAV_MANAGER", "Brugere vedligehold");
define("_AM_SYSTEM_USERS_NAV_MAIN", "Brugere");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH", "Avanceret søgning");
define("_AM_SYSTEM_USERS_NAV_ADD_USER", "Tilføj bruger");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER", "Redigér bruger");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER", "Slet bruger");

// Tips
define('_AM_SYSTEM_USERS_NAV_TIPS','
<ul>
<li>Vedligehold XOOPS brugere</li>
</ul>');

// Main
define("_AM_SYSTEM_USERS_USER", "Bruger");
define("_AM_SYSTEM_USERS_ADMIN", "Admin");
define("_AM_SYSTEM_USERS_UID", "Uid");
define("_AM_SYSTEM_USERS_STATUS", "Status");
define("_AM_SYSTEM_USERS_NAME", "Navn");
define("_AM_SYSTEM_USERS_UNAME", "Uname");
define("_AM_SYSTEM_USERS_EMAIL", "E-mail");
define("_AM_SYSTEM_USERS_EDIT_GROUPS", "Redigér grupper");
define("_AM_SYSTEM_USERS_REG_DATE", "Registreret dato");
define("_AM_SYSTEM_USERS_LAST_LOGIN", "Sidste login");
define("_AM_SYSTEM_USERS_POSTS", "Kommentarer/indlæg");
define("_AM_SYSTEM_USERS_LEVEL", "Niveau");
define("_AM_SYSTEM_USERS_ACTION", "Handling");
define("_AM_SYSTEM_USERS_FINDUS", "Find Brugere");
define("_AM_SYSTEM_USERS_AVATAR", "Avatar");
define("_AM_SYSTEM_USERS_REALNAME", "Rigtige navn");
define("_AM_SYSTEM_USERS_REGDATE", "Tilmeldt Dato");
define("_AM_SYSTEM_USERS_PM", "PM");
define("_AM_SYSTEM_USERS_URL", "URL");
define("_AM_SYSTEM_USERS_PREVIOUS", "Forrige");
define("_AM_SYSTEM_USERS_NEXT", "Næste");
define("_AM_SYSTEM_USERS_USERSFOUND", "%s bruger(e) fundet");
define("_AM_SYSTEM_USERS_ACTUS", "Aktive Brugere: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Inaktive brugere: %s");
define("_AM_SYSTEM_USERS_NOFOUND", "Ingen brugere fundet");
define("_AM_SYSTEM_USERS_ICQ", "ICQ Nummer");
define("_AM_SYSTEM_USERS_AIM", "AIM");
define("_AM_SYSTEM_USERS_YIM", "YIM");
define("_AM_SYSTEM_USERS_MSNM", "MSNM");
define("_AM_SYSTEM_USERS_TIMEZONE", "Tids Zone");
define("_AM_SYSTEM_USERS_SHOWSIG", "Vedhæft altid min signatur");
define("_AM_SYSTEM_USERS_CDISPLAYMODE", "Kommentarer visings metode");
define("_AM_SYSTEM_USERS_CSORTORDER", "Kommentarer sorteringsrækkefølge");
define("_AM_SYSTEM_USERS_EXTRAINFO", "Ekstra Info");
define("_AM_SYSTEM_USERS_LOCATION", "Beliggenhed indeholder");
define("_AM_SYSTEM_USERS_OCCUPATION", "Beskæftigelse indeholder");
define("_AM_SYSTEM_USERS_INTEREST", "Interesse indeholder");
define("_AM_SYSTEM_USERS_URLC", "URL indeholder");
define("_AM_SYSTEM_USERS_LASTLOGMORE", "Sidste login er mere end <span style='color:#ff0000;'>X</span> dage siden");
define("_AM_SYSTEM_USERS_LASTLOGLESS", "Sidste login er mindre end <span style='color:#ff0000;'>X</span> dage siden");
define("_AM_SYSTEM_USERS_REGMORE", "Tilmeldt Dato er mere end <span style='color:#ff0000;'>X</span> dage siden");
define("_AM_SYSTEM_USERS_REGLESS", "Tilmeldt Dato er mindre end <span style='color:#ff0000;'>X</span> dage siden");
define("_AM_SYSTEM_USERS_POSTSMORE", "Antal indlæg er større end <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS", "Antal indlæg er mindre end <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT", "Sortér efter");
define("_AM_SYSTEM_USERS_ORDER", "Rækkefølge");
define("_AM_SYSTEM_USERS_LASTLOGIN", "Sidste login");
define("_AM_SYSTEM_USERS_ASC", "Stigende orden");
define("_AM_SYSTEM_USERS_DESC", "Faldende orden");
define("_AM_SYSTEM_USERS_LIMIT", "Antallet af brugere pr side");
define("_AM_SYSTEM_USERS_RESULTS", "Søgeresultater");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Type af brugere der skal vises");
define("_AM_SYSTEM_USERS_MAILOK", "Kun brugere der accepterer mail");
define("_AM_SYSTEM_USERS_MAILNG", "Kun brugere, der ikke accepterer mail");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Type af brugere der skal vises");
define("_AM_SYSTEM_USERS_ACTIVE", "Kun aktive brugere");
define("_AM_SYSTEM_USERS_INACTIVE", "Kun inaktive brugere");
define("_AM_SYSTEM_USERS_BOTH", "Alle brugere");
define("_AM_SYSTEM_USERS_SENDMAIL", "Send mail");
define("_AM_SYSTEM_USERS_ADD2GROUP", "Tilføj brugerne til %s gruppen");
define("_AM_SYSTEM_USERS_GROUPS", "Grupper");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "Tilføj gruppe");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Slet gruppe");
define("_AM_SYSTEM_USERS_AYSYWTDU", "Er du sikker på du vil slette brugeren %s?");
define("_AM_SYSTEM_USERS_BYTHIS", "Ved at gøre dette, vil alle informationer vedr. denne bruger blive fjernet permanent.");
define("_AM_SYSTEM_USERS_YES", "Ja");
define("_AM_SYSTEM_USERS_NO", "Nej");
define("_AM_SYSTEM_USERS_YMCACF", "Du skal udfylde alle obligatoriske felter");
define("_AM_SYSTEM_USERS_CNRNU", "Kunne ikke registrere ny bruger.");
define("_AM_SYSTEM_USERS_EDEUSER", "Rediger/Slet brugere");
define("_AM_SYSTEM_USERS_NICKNAME", "Kaldenavn");
define("_AM_SYSTEM_USERS_MODIFYUSER", "Redigér Bruger");
define("_AM_SYSTEM_USERS_DELUSER", "Slet bruger");
define("_AM_SYSTEM_USERS_GO", "Go!");
define("_AM_SYSTEM_USERS_ADDUSER", "Tilføj bruger");
define("_AM_SYSTEM_USERS_OPTION", "Mulighed");
define("_AM_SYSTEM_USERS_THEME", "Tema");
define("_AM_SYSTEM_USERS_AOUTVTEAD", "Tillad andre brugere at se denne e-mail-adresse");
define("_AM_SYSTEM_USERS_RANK", "Rang");
define("_AM_SYSTEM_USERS_NSRA", "Ingen speciel Rank");
define("_AM_SYSTEM_USERS_NSRID", "Ingen særlig Ranks i Database");
define("_AM_SYSTEM_USERS_ACCESSLEV", "Adgangs Niveau");
define("_AM_SYSTEM_USERS_SIGNATURE", "Signatur");
define("_AM_SYSTEM_USERS_PASSWORD", "Adgangskode");
define("_AM_SYSTEM_USERS_INDICATECOF", "* Angiver obligatoriske felter");
define("_AM_SYSTEM_USERS_NOTACTIVE", "Denne bruger er ikke blevet aktiveret. Ønsker du at aktivere denne bruger?");
define("_AM_SYSTEM_USERS_UPDATEUSER", "Opdatér bruger");
define("_AM_SYSTEM_USERS_USERINFO", "Bruger Info");
define("_AM_SYSTEM_USERS_USERID", "Bruger-id");
define("_AM_SYSTEM_USERS_RETYPEPD", "Gentag adgangskode");
define("_AM_SYSTEM_USERS_CHANGEONLY", "(For ændringer kun)");
define("_AM_SYSTEM_USERS_USERPOST", "Brugeres indlæg");
define("_AM_SYSTEM_USERS_STORIES", "Historier");
define("_AM_SYSTEM_USERS_COMMENTS", "Kommentarer");
define("_AM_SYSTEM_USERS_PTBBTSDIYT", "Tryk på knappen nedenfor for at synkronisere data, hvis du mener, at ovenstående brugeren info ikke angiver den aktuelle status");
define("_AM_SYSTEM_USERS_SYNCHRONIZE", "Synkroniser");
define("_AM_SYSTEM_USERS_USERDONEXIT", "Bruger eksisterer ikke!");
define("_AM_SYSTEM_USERS_STNPDNM", "Vi beklager, men det nye kodeord ikke passer. Klik tilbage og prøv igen");
define("_AM_SYSTEM_USERS_CNGTCOM", "Kunne ikke indlæse det totale antal kommentarer");
define("_AM_SYSTEM_USERS_CNGTST", "Kunne ikke indlæse det totale antal historier");
define("_AM_SYSTEM_USERS_CNUUSER", "Kunne ikke opdatere brugeren");
define("_AM_SYSTEM_USERS_CNGUSERID", "Kunne ikke få bruger IDS");
define("_AM_SYSTEM_USERS_LIST", "Liste");
define("_AM_SYSTEM_USERS_NOUSERS", "Ingen markerede brugere");
define("_AM_SYSTEM_USERS_CNRNU2", "Den nye bruger kunne ikke tilføjes til grupper: %s.");
define("_AM_SYSTEM_USERS_SEARCH", "Søg");
define("_AM_SYSTEM_USERS_SEARCH_USER", "Søg Bruger:");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH", "Avanceret søgning");
define("_AM_SYSTEM_USERS_EDIT", "Redigér medlem");
define("_AM_SYSTEM_USERS_DEL", "Slet medlem");
define("_AM_SYSTEM_USERS_DELETE", "Slet");
define("_AM_SYSTEM_USERS_SUBMIT", "Indsend");
define("_AM_SYSTEM_USERS_PURGE", "Slet");
define("_AM_SYSTEM_USERS_ADD", "Tilføj medlem");
define("_AM_SYSTEM_USERS_VIEW", "Se info medlem");
define("_AM_SYSTEM_USERS_NO_FOUND", "Ingen fundet brugere");
define("_AM_SYSTEM_USERS_NOT_CONNECT", "Aldrig logget ind");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL", "Slet bruger: %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2", "Slet");
define("_AM_SYSTEM_USERS_NO_SUPP", "Brugeren kan ikke slettes: %s<br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "Administrator bruger kan ikke slettes: %s<br />");
define("_AM_SYSTEM_USERS_ERROR", "Fejl: <br /><br /> % S");
define("_AM_SYSTEM_USERS_ALLGROUP", "Alle grupper");
define("_AM_SYSTEM_USERS_ALLUSER", "Alle brugere");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "Kun aktive brugere");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "Kun inaktive brugere");

?><?php // Translation done by xtransam & anderssk - 2010-10-19 07:12 ?>
