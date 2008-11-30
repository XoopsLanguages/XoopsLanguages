<?php
// $Id: main.php,v 1.1.2.6 2005/07/20 08:41:28 mithyt2 Exp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Az üzenetek törölve");
define("_PM_PRIVATEMESSAGE","Privát Üzenetek");
define("_PM_INBOX","Bejövõ üzenetek");
define("_PM_FROM","Küldõ");
define("_PM_YOUDONTHAVE","Nincsenek privát üzeneteid");
define("_PM_FROMC","Feladó: ");
define("_PM_SENTC","Elküldve: "); // The date of message sent
define("_PM_PROFILE","Profil");

// %s is a username
define("_PM_PREVIOUS","Elõzõ üzenet");
define("_PM_NEXT","Következõ üzenet");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Sajnálom! Nem vagy regisztrált felhasználó!");
define("_PM_REGISTERNOW","Regisztrálj most!");
define("_PM_GOBACK","Vissza");
define("_PM_USERNOEXIST","A kiválasztott felhasználó nem található az adatbázisban!");
define("_PM_PLZTRYAGAIN","Kérlek ellenõrizd a nevet és próbáldd újra!");
define("_PM_MESSAGEPOSTED","Üzenet elküldve");
define("_PM_CLICKHERE","Ide kattintva megtekintheted a privát üzeneteidet.");
define("_PM_ORCLOSEWINDOW","Vagy kattints ide az ablak bezárásához.");
define("_PM_USERWROTE","%s írta:");
define("_PM_TO","Címzett: ");
define("_PM_SUBJECTC","Téma: ");
define("_PM_MESSAGEC","Üzenet: ");
define("_PM_CLEAR","Töröl");
define("_PM_CANCELSEND","Mégsem küld");
define("_PM_SUBMIT","Elküld");
define("_PM_SAVEINOUTBOX", "Másolat mentése a Kimenõ üzenetek mappába?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Téma");
define("_PM_DATE","Dátum");
define("_PM_NOTREAD","Olvasatlan");
define("_PM_SEND","Küldés");
define("_PM_DELETE","Törlés");
define("_PM_TOSAVE","Mentés");
define("_PM_UNSAVE","Mentés törlése");
define("_PM_EMPTY","Üres");
define("_PM_REPLY", "Válasz");
define("_PM_PLZREG","Kérlek regisztrálj, mielõtt privát üzeneteket küldenél!");
define("_PM_SAVED_PART","A Mentett üzenetek mappában %d üzenetet tárolhatsz és jelenleg %d üzenetet tárolsz");
define("_PM_SAVED_ALL","Az üzenetek áthelyezve a Mentett üzenetek mappába");
define("_PM_UNSAVED","Az üzenetek eltávolítva a Mentett üzenetek mappából");
define("_PM_EMPTIED","A mappa kiürítve");
define("_PM_RUSUREEMPTY","Biztosan üríteni akarod a mappát?");
define("_PM_RUSUREDELETE","Biztosan törölni akarod ezeket az üzeneteket?");

define("_PM_ONLINE", "Elérhetõ");

define("_PM_RECEIVE","FOGADÁS");
define("_PM_POST","KÜLDÉS");
define("_PM_READBOX","OLVASÁS");
define("_PM_RSAVEBOX","Elmentett üzenetek fogadása");
define("_PM_OUTBOX","Kimenõ üzenetek");
define("_PM_SAVEBOX","Mentett üzenetek");
define("_PM_SENTBOX","Elküldött üzenetek");
define("_PM_PSAVEBOX","Elmentett üzenetek küldése");
define("_PM_SAVE","MENTÉS");
define("_PM_SAVED","Sikeres mentés!");
define("_PM_TOC","Feladó: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","RENDEZ");
define("_PM_ORDER","SORREND");
define("_PM_UID","Partner UID-je");
define("_PM_TIME","Küldés dátuma");
define("_PM_ASC","NÖV");
define("_PM_DESC","CSÖKK");
define("_PM_LIMIT","PÜ / oldal");
define("_PM_BACKTOBOX","Vissza a mappába");
define("_PM_SORTSUBMIT","Elküld");
define("_PM_PREVIOUSP","Elõzõ");
define("_PM_NEXTP","Következõ");

define("_PM_MAILNOTIFY","%s-Új PÜ-t kaptál tõle: %s");
define("_PM_MAILMESSAGE","Hello!\nEgy új PÜ érkezett %s -tól/tõl \n\nA PÜ témája:\n%s\n\nAz üzenetet itt tekintheted meg:\n%s\n\n-----------\nAzért kaptad ezt az üzenetet, mert beállítottad, hogy fogadsz értesítéseket új PÜ érkezésérõl.\n\nMegváltoztathatod a PÜ beállításaidnál\n%s\n\nKérlek ne válaszolj erre a levélre\n\n---------\nÜdvözlettel:\n%s\n%s\n%s");

define("_PM_EMAIL", "E-mail");
define("_PM_EMAIL_DESC", "Üdvözöllek %s! Ez az üzenet a következõ oldalon található hozzáférésedbõl lett átküldve: ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM", "%s -tól/tõl");
define("_PM_EMAIL_TO", "%s -nak/nek");
define("_PM_EMAIL_SUBJECT", "[message]%s");
define("_PM_EMAIL_MESSAGE", "Az üzenet");

define("_PM_ACTION_DONE", "A mûvelet sikeresen végrehajtva");
define("_PM_ACTION_ERROR", "A mûvelet nem sikerült");
?>