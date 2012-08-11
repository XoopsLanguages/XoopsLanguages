<?php
// $Id: mailusers.php,v 1.4 2003/02/12 11:38:42 okazu Exp $
//%%%%%%	Admin Module Name  MailUsers	%%%%%
define('_AM_DBUPDATED',_MD_AM_DBUPDATED);

//%%%%%%	mailusers.php 	%%%%%
define('_AM_SENDTOUSERS','Send til brugere, hvor:');
define('_AM_SENDTOUSERS2','Send til:');
define('_AM_GROUPIS','Gruppen er (valgfri)');
define('_AM_TIMEFORMAT','(Format dd-mm-åååå, valgfri)');
define('_AM_LASTLOGMIN','Sidste log ind er sket efter ');
define('_AM_LASTLOGMAX','Sidste log ind er sket før');
define('_AM_REGDMIN','Blev medlem efter');
define('_AM_REGDMAX','Blev medlem før');
define('_AM_IDLEMORE','Sidste log ind er mere end X dage siden (valgfri)');
define('_AM_IDLELESS','Sidste log ind er mindre end X dage siden (valgfri)');
define('_AM_MAILOK','Send kun besked til de brugere, der accepterer lejlighedsvise beskeder fra administrator og moderatorer (valgfri)');
define('_AM_INACTIVE','Send kun besked til in-aktive brugere (valgfri)');
define('_AMIFCHECKD','Hvis dette er valgt bliver alle ovenstående markeringer samt privat besked ignoreret');
define('_AM_MAILFNAME','Fra navn (kun email)');
define('_AM_MAILFMAIL','Fra email (kun email)');
define('_AM_MAILSUBJECT','Emne');
define('_AM_MAILBODY','Tekst');
define('_AM_MAILTAGS','Brugbare tags:');
define('_AM_MAILTAGS1','{X_UID} skriver bruger id');
define('_AM_MAILTAGS2','{X_UNAME} skriver brugernavn');
define('_AM_MAILTAGS3','{X_UEMAIL} skriver brugers email adresse');
define('_AM_MAILTAGS4','{X_UACTLINK} skriver brugers aktiveringslink');
define('_AM_SENDTO','Send til');
define('_AM_EMAIL','Email');
define('_AM_PM','Privat Besked');
define('_AM_SENDMTOUSERS','Send besked til brugere');
define('_AM_SENT','Sendt til brugerne');
define('_AM_SENTNUM','%s - %s (ialt: %s brugere)');
define('_AM_SENDNEXT','Næste');
define('_AM_NOUSERMATCH','Ingen brugere passede til kriterierne');
define('_AM_SENDCOMP','Beskeden er sendt.');

?>