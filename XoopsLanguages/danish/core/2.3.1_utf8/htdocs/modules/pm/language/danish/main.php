<?php
// $Id: main.php 2025 2008-08-31 04:16:39Z phppp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Din(e) meddelelser blev slettet");
define("_PM_PRIVATEMESSAGE","Private meddelelse");
define("_PM_INBOX","Indbakke");
define("_PM_FROM","Fra");
define("_PM_YOUDONTHAVE","Du har ikke nogen private meddelelser");
define("_PM_FROMC","Fra: ");
define("_PM_SENTC","Sendt: "); // The date of message sent
define("_PM_PROFILE","Profil");

// %s is a username
define("_PM_PREVIOUS","Forrige meddelelse");
define("_PM_NEXT","Næste meddelelse");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Beklager! du er ikke en registreret bruger.");
define("_PM_REGISTERNOW","Registrer Nu!");
define("_PM_GOBACK","Gå tilbage");
define("_PM_USERNOEXIST","Den valgte bruger eksistere ikke i databasen.");
define("_PM_PLZTRYAGAIN","Check navnet og prøv igen.");
define("_PM_MESSAGEPOSTED","Din besked er sendt");
define("_PM_CLICKHERE","Klik her for at se dine private meddelelser");
define("_PM_ORCLOSEWINDOW","Eller klik her for at lukke vinduet.");
define("_PM_USERWROTE","%s skrev:");
define("_PM_TO","Til: ");
define("_PM_SUBJECTC","Emnet: ");
define("_PM_MESSAGEC","Besked: ");
define("_PM_CLEAR","Slet");
define("_PM_CANCELSEND","Fortryd send");
define("_PM_SUBMIT","Accepter");
define("_PM_SAVEINOUTBOX","Gem en kopi i din udbakke?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Emne");
define("_PM_DATE","Dato");
define("_PM_NOTREAD","Ikke læst");
define("_PM_SEND","Send");
define("_PM_DELETE","Slet");
define("_PM_TOSAVE","Gem");
define("_PM_UNSAVE","Fortryd gem");
define("_PM_EMPTY","Tom");
define("_PM_REPLY","Svar");
define("_PM_PLZREG","Registrer først for at du kan sende private meddelelser!");
define("_PM_SAVED_PART","Du har ikke adgang lige nu %d til din gem boks og du har gemt %d meddelelser lige nu");
define("_PM_SAVED_ALL","Meddelelser er blevet flyttet til din gem boks");
define("_PM_UNSAVED","Meddelelser er fjernet fra din gem boks");
define("_PM_EMPTIED","Boksen er blevet tømt");
define("_PM_RUSUREEMPTY","Er du sikker på du vil tømme boksen?");
define("_PM_RUSUREDELETE","Er du sikker på du vil slette meddelelse(er)?");

define("_PM_ONLINE","Online");

define("_PM_RECEIVE","Modtag");
define("_PM_POST","Meddelelser");
define("_PM_READBOX","Læs boks");
define("_PM_RSAVEBOX","Modtag gem boks");
define("_PM_OUTBOX","Udbakke");
define("_PM_SAVEBOX","Gem boks");
define("_PM_SENTBOX","Sendt boks");
define("_PM_PSAVEBOX","Send gem boks");
define("_PM_SAVE","GEM");
define("_PM_SAVED","Er gemt");
define("_PM_TOC","Fra: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","SORTÉR");
define("_PM_ORDER","ORDEN");
define("_PM_UID","Vens UID");
define("_PM_TIME","Send dato");
define("_PM_ASC","Stigende");
define("_PM_DESC","Faldende");
define("_PM_LIMIT","Antal PMs pr side");
define("_PM_BACKTOBOX","Tilbage til boks");
define("_PM_SORTSUBMIT","Accepter");
define("_PM_PREVIOUSP","Forrige");
define("_PM_NEXTP","Næste");

define("_PM_MAILNOTIFY","%s-du har fået en PM fra %s");
define("_PM_MAILMESSAGE","Hej!\nA Du har fået en ny PM fra %s\n\nTitle af PM is\n%s\n\nYou kan se PM here\n%s\n\n-----------\nDu modtager denne meddelelse fordi du har valgt at blive adviseret når du modtager en ny PM\n\nDu kan ændrer din PM indstillinger\n%s\n\nSvar ikke på denne meddelse\n\n---------\nBest Venlig hilsen\n%s\n%s\n%s");

define("_PM_EMAIL","Email");
define("_PM_EMAIL_DESC","Dette %s, er en meddelelse overført fra din konto ved ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM","Fra %s");
define("_PM_EMAIL_TO","Til %s");
define("_PM_EMAIL_SUBJECT","[meddelelse]%s");
define("_PM_EMAIL_MESSAGE","Meddelelses indhold");

define("_PM_ACTION_DONE","Operationen udført");
define("_PM_ACTION_ERROR","Operationen IKKE udført");
?>