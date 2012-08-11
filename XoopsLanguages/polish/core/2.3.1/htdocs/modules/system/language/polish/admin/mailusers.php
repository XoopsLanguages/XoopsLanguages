<?php
// $Id: mailusers.php 2 2005-11-02 18:23:29Z skalpa $
//%%%%%%	Admin Module Name  MailUsers	%%%%%
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: Jarek Wiktorowicz  <www.jarek.wiktorowicz.pl>

define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	mailusers.php 	%%%%%
define("_AM_SENDTOUSERS","Wyślij wiadomość do użytkowników, których:");
define("_AM_SENDTOUSERS2","Wyślij do:");
define("_AM_GROUPIS","Grupa jest (opcjonalnie)");
define("_AM_TIMEFORMAT","(Format rrrr-mm-dd, opcjonalnie)");
define("_AM_LASTLOGMIN","Ostatnie logowanie nastąpiło po");
define("_AM_LASTLOGMAX","Ostatnie logowanie nastąpiło przed");
define("_AM_REGDMIN","Data rejestracji jest po");
define("_AM_REGDMAX","Data rejestracji jest przed");
define("_AM_IDLEMORE","Ostatnie logowanie nastąpiło ponad X dni temu (opcjonalnie)");
define("_AM_IDLELESS","Ostatnie logowanie nastąpiło nie później niż X dni temu (opcjonalnie)");
define("_AM_MAILOK","Wyślij wiadomość tylko do użytkowników, którzy wyrazili na to zgodę (opcjonalnie)");
define("_AM_INACTIVE","Wyślij wiadomość tylko do nieaktywnych użytkowników (opcjonalnie)");
define("_AMIFCHECKD","Jeśli to zaznaczysz, wszystko powyżej i prywatne wiadomości zostaną zignorowane");
define("_AM_MAILFNAME","Nazwa w polu Od (tylko email)");
define("_AM_MAILFMAIL","Email w polu Od (tylko email)");
define("_AM_MAILSUBJECT","Temat");
define("_AM_MAILBODY","Treść");
define("_AM_MAILTAGS","Pomocne Tagi:");
define("_AM_MAILTAGS1","{X_UID} wyświetli ID użytkownika");
define("_AM_MAILTAGS2","{X_UNAME} wyświetli imię użytkownika");
define("_AM_MAILTAGS3","{X_UEMAIL} wyświetli email użytkownika");
define("_AM_MAILTAGS4","{X_UACTLINK} wyświetli link aktywacyjny użytkownika");
define("_AM_SENDTO","Metoda wysyłania");
define("_AM_EMAIL","Email");
define("_AM_PM","Prywatna wiadomość");
define("_AM_SENDMTOUSERS","Wyślij wiadomość do użytkowników");
define("_AM_SENT","Wysłano do użytkowników");
define("_AM_SENTNUM","%s - %s (w sumie: %s użytkowników)");
define("_AM_SENDNEXT","Następna strona");
define("_AM_NOUSERMATCH","Nie zaznaczono użytkowników");
define("_AM_SENDCOMP","Wysyłanie wiadomości zakończone.");
?>