<?php
// $Id: main.php,v 1.1.2.6 2005/07/20 08:41:28 mithyt2 Exp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Vaše poruke su izbrisane");
define("_PM_PRIVATEMESSAGE","Privatne poruke");
define("_PM_INBOX","Primljeno");
define("_PM_FROM","Od");
define("_PM_YOUDONTHAVE","Nemate niti jednu privatnu poruku");
define("_PM_FROMC","Od: ");
define("_PM_SENTC","Poslano: "); // The date of message sent
define("_PM_PROFILE","Profil");

// %s is a username
define("_PM_PREVIOUS","Prethodna poruka");
define("_PM_NEXT","Slijedeæa poruka");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Oprostite! Vi niste registrirani korisnik.");
define("_PM_REGISTERNOW","Registrirajte se sada!");
define("_PM_GOBACK","Nazad");
define("_PM_USERNOEXIST","Izabrani korisnik ne postoji u bazi podataka.");
define("_PM_PLZTRYAGAIN","Molimo vas provjerite ime i pokušajte ponovo.");
define("_PM_MESSAGEPOSTED","Vaša poruka je poslana");
define("_PM_CLICKHERE","Kliknite ovdje za pregled vaših privatnih poruka");
define("_PM_ORCLOSEWINDOW","Ili kliknite ovdje da bi zatvorili prozor.");
define("_PM_USERWROTE","%s je napisao:");
define("_PM_TO","Za: ");
define("_PM_SUBJECTC","Tema: ");
define("_PM_MESSAGEC","Poruka: ");
define("_PM_CLEAR","Oèisti");
define("_PM_CANCELSEND","Poništi slanje");
define("_PM_SUBMIT","Pošalji");
define("_PM_SAVEINOUTBOX","Spremi kopiju poruke u Poslano?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Tema");
define("_PM_DATE","Datum");
define("_PM_NOTREAD","Ne proèitano");
define("_PM_SEND","Pošalji");
define("_PM_DELETE","Izbriši");
define("_PM_TOSAVE","Spremi");
define("_PM_UNSAVE","Odznaèi spremanje");
define("_PM_EMPTY","Prazno");
define("_PM_REPLY","Odgovori");
define("_PM_PLZREG","Za slanje privatnih poruka morate biti registrirani!");
define("_PM_SAVED_PART","Dozvoljeno je imati najviše %d poruka u arhivi, vi ih imate %d");
define("_PM_SAVED_ALL","Poruke su premještene u arhivu");
define("_PM_UNSAVED","Poruke su uklonjene iz arhive");
define("_PM_EMPTIED","Arhiva je ispražnjena");
define("_PM_RUSUREEMPTY","Sigurno želite isprazniti arhivu?");
define("_PM_RUSUREDELETE","Sigurno želite izbrisati ove poruke?");

define("_PM_ONLINE","Online");

define("_PM_RECEIVE","PRIMI");
define("_PM_POST","POŠALJI");
define("_PM_READBOX","SANDUÈIÆ");
define("_PM_RSAVEBOX","Spremljeno_ARHIVU");
define("_PM_OUTBOX","Odlazno");
define("_PM_SAVEBOX","Arhiva");
define("_PM_SENTBOX","POSLANO");
define("_PM_PSAVEBOX","Spremljeno_ARHIVU");
define("_PM_SAVE","SPREMI");
define("_PM_SAVED","Uspješno pospremljeno");
define("_PM_TOC","Od: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","Posloži");
define("_PM_ORDER","Redoslijed");
define("_PM_UID","Prijateljev ID");
define("_PM_TIME","Datum objave");
define("_PM_ASC","Rastuèe");
define("_PM_DESC","Padajuèe");
define("_PM_LIMIT","Poruka po stranici");
define("_PM_BACKTOBOX","Natrag u arhivu");
define("_PM_SORTSUBMIT","Pošalji");
define("_PM_PREVIOUSP","Prethodna");
define("_PM_NEXTP","Slijedeæa");

define("_PM_MAILNOTIFY","%s Primili ste novu privatnu poruku od %s");
define("_PM_MAILMESSAGE","Pozdrav!\nStigla je nova poruka od %s\n\nadresa poruke je\n%s\n\nporuku možete pogledati ovdje\n%s\n\n-----------\nTu obavijest ste primili,jer ste izabrali obavještanje o novim porukama\n\nVaše postavke možete promjeniti\n%s\n\nMolimo, da ne odgovarate na tu porukuo\n\n---------\nS poštovanjem\n%s\n%s\n%s");

define("_PM_EMAIL","Email");
define("_PM_EMAIL_DESC","Poštovani %s, ova je poruke prosljeðena sa vašeg korisnièkog raèuna na ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM","Od %s");
define("_PM_EMAIL_TO","Za %s");
define("_PM_EMAIL_SUBJECT","[tekst]%s");
define("_PM_EMAIL_MESSAGE","Sadržaj poruke");

define("_PM_ACTION_DONE","Operacija je uspješno izvršena");
define("_PM_ACTION_ERROR","Operacija nije uspjela");
?>