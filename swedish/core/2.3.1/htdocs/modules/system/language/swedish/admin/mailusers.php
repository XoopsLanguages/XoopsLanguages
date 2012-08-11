<?php
// $Id: mailusers.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
//%%%%%%	Admin Module Name  MailUsers	%%%%%
define('_AM_DBUPDATED',_MD_AM_DBUPDATED);

//%%%%%%	mailusers.php 	%%%%%
define("_AM_SENDTOUSERS","Skicka meddelande till användare vars:");
define("_AM_SENDTOUSERS2","Skicka till:");
define("_AM_GROUPIS","Grupp är (valfritt)");
define("_AM_TIMEFORMAT","(Format yyyy-mm-dd, valfritt)");
define("_AM_LASTLOGMIN","Sista inloggning är senare än");
define("_AM_LASTLOGMAX","Sista inloggning är tidigare än");
define("_AM_REGDMIN","Registreringsdatum är senare än");
define("_AM_REGDMAX","Registreringsdatum är tidigare än");
define("_AM_IDLEMORE","Senaste inloggning var mer än X dagar sedan (valfritt)");
define("_AM_IDLELESS","Senaste inloggning var mindre än X dagar sedan (valfritt)");
define("_AM_MAILOK","Skicka meddelande endast till användare som accepterar underrättelsemail (valfritt)");
define("_AM_INACTIVE","Skicka endast till inaktiva användare (valfritt)");
define("_AMIFCHECKD","Om detta är förkryssat kommer alla ovan plus privata meddelanden att ignoreras");
define("_AM_MAILFNAME","Från-namn (email bara)");
define("_AM_MAILFMAIL","Från-email (email bara)");
define("_AM_MAILSUBJECT","Ämne");
define("_AM_MAILBODY","Innehåll");
define("_AM_MAILTAGS","Användbara taggar:");
define("_AM_MAILTAGS1","{X_UID} kommer att skriva ut användar-id");
define("_AM_MAILTAGS2","{X_UNAME} kommer att skriva ut användarnamn");
define("_AM_MAILTAGS3","{X_UEMAIL} kommer att skriva ut användaremail");
define("_AM_MAILTAGS4","{X_UACTLINK} kommer att skriva ut användaraktiveringslänk");
define("_AM_SENDTO","Skicka till");
define("_AM_EMAIL","Email");
define("_AM_PM","Privat meddelande");
define("_AM_SENDMTOUSERS","Skicka meddelande till användare");
define("_AM_SENT","Skickat till användare");
define("_AM_SENTNUM","%s - %s (totalt: %s användare)");
define("_AM_SENDNEXT","Nästa");
define("_AM_NOUSERMATCH","Ingen användare matchade");
define("_AM_SENDCOMP","Meddelandet skickat.");

?>