<?php
// $Id: main.php,v 1.1.2.6 2005/07/20 08:41:28 mithyt2 Exp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Va�e poruke su izbrisane");
define("_PM_PRIVATEMESSAGE","Privatne poruke");
define("_PM_INBOX","Primljeno");
define("_PM_FROM","Od");
define("_PM_YOUDONTHAVE","Nemate niti jednu privatnu poruku");
define("_PM_FROMC","Od: ");
define("_PM_SENTC","Poslano: "); // The date of message sent
define("_PM_PROFILE","Profil");

// %s is a username
define("_PM_PREVIOUS","Prethodna poruka");
define("_PM_NEXT","Slijede�a poruka");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Oprostite! Vi niste registrirani korisnik.");
define("_PM_REGISTERNOW","Registrirajte se sada!");
define("_PM_GOBACK","Nazad");
define("_PM_USERNOEXIST","Izabrani korisnik ne postoji u bazi podataka.");
define("_PM_PLZTRYAGAIN","Molimo vas provjerite ime i poku�ajte ponovo.");
define("_PM_MESSAGEPOSTED","Va�a poruka je poslana");
define("_PM_CLICKHERE","Kliknite ovdje za pregled va�ih privatnih poruka");
define("_PM_ORCLOSEWINDOW","Ili kliknite ovdje da bi zatvorili prozor.");
define("_PM_USERWROTE","%s je napisao:");
define("_PM_TO","Za: ");
define("_PM_SUBJECTC","Tema: ");
define("_PM_MESSAGEC","Poruka: ");
define("_PM_CLEAR","O�isti");
define("_PM_CANCELSEND","Poni�ti slanje");
define("_PM_SUBMIT","Po�alji");
define("_PM_SAVEINOUTBOX", "Spremi kopiju poruke u Poslano?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Tema");
define("_PM_DATE","Datum");
define("_PM_NOTREAD","Ne pro�itano");
define("_PM_SEND","Po�alji");
define("_PM_DELETE","Izbri�i");
define("_PM_TOSAVE","Spremi");
define("_PM_UNSAVE","Odzna�i spremanje");
define("_PM_EMPTY","Prazno");
define("_PM_REPLY", "Odgovori");
define("_PM_PLZREG","Za slanje privatnih poruka morate biti registrirani!");
define("_PM_SAVED_PART","Dozvoljeno je imati najvi�e %d poruka u arhivi, vi ih imate %d");
define("_PM_SAVED_ALL","Poruke su premje�tene u arhivu");
define("_PM_UNSAVED","Poruke su uklonjene iz arhive");
define("_PM_EMPTIED","Arhiva je ispra�njena");
define("_PM_RUSUREEMPTY","Sigurno �elite isprazniti arhivu?");
define("_PM_RUSUREDELETE","Sigurno �elite izbrisati ove poruke?");

define("_PM_ONLINE", "Online");

define("_PM_RECEIVE","PRIMI");
define("_PM_POST","PO�ALJI");
define("_PM_READBOX","SANDU�I�");
define("_PM_RSAVEBOX","Spremljeno_ARHIVU");
define("_PM_OUTBOX","Odlazno");
define("_PM_SAVEBOX","Arhiva");
define("_PM_SENTBOX","POSLANO");
define("_PM_PSAVEBOX","Spremljeno_ARHIVU");
define("_PM_SAVE","SPREMI");
define("_PM_SAVED","Uspje�no pospremljeno");
define("_PM_TOC","Od: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","Poslo�i");
define("_PM_ORDER","Redoslijed");
define("_PM_UID","Prijateljev ID");
define("_PM_TIME","Datum objave");
define("_PM_ASC","Rastu�e");
define("_PM_DESC","Padaju�e");
define("_PM_LIMIT","Poruka po stranici");
define("_PM_BACKTOBOX","Natrag u arhivu");
define("_PM_SORTSUBMIT","Po�alji");
define("_PM_PREVIOUSP","Prethodna");
define("_PM_NEXTP","Slijede�a");

define("_PM_MAILNOTIFY","%s Primili ste novu privatnu poruku od %s");
define("_PM_MAILMESSAGE","Pozdrav!\nStigla je nova poruka od %s\n\nadresa poruke je\n%s\n\nporuku mo�ete pogledati ovdje\n%s\n\n-----------\nTu obavijest ste primili,jer ste izabrali obavje�tanje o novim porukama\n\nVa�e postavke mo�ete promjeniti\n%s\n\nMolimo, da ne odgovarate na tu porukuo\n\n---------\nS po�tovanjem\n%s\n%s\n%s");

define("_PM_EMAIL", "Email");
define("_PM_EMAIL_DESC", "Po�tovani %s, ova je poruke proslje�ena sa va�eg korisni�kog ra�una na ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM", "Od %s");
define("_PM_EMAIL_TO", "Za %s");
define("_PM_EMAIL_SUBJECT", "[tekst]%s");
define("_PM_EMAIL_MESSAGE", "Sadr�aj poruke");

define("_PM_ACTION_DONE", "Operacija je uspje�no izvr�ena");
define("_PM_ACTION_ERROR", "Operacija nije uspjela");
?>