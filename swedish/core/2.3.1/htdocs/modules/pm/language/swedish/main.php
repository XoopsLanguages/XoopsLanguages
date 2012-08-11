<?php
// $Id: main.php 2025 2008-08-31 04:16:39Z phppp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Meddelande(na) har raderats");
define("_PM_PRIVATEMESSAGE","Privata Meddelanden");
define("_PM_INBOX","Inkorg");
define("_PM_FROM","Från");
define("_PM_YOUDONTHAVE","Privata Meddelanden är tomt");
define("_PM_FROMC","Från: ");
define("_PM_SENTC","Skickat: "); // The date of message sent
define("_PM_PROFILE","Profil");

// %s is a username
define("_PM_PREVIOUS","Föregående meddelande");
define("_PM_NEXT","Nästa meddelande");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Ursäkta! Du är inte en registrerad användare.");
define("_PM_REGISTERNOW","Registrera nu!");
define("_PM_GOBACK","Tillbaks");
define("_PM_USERNOEXIST","Den valda användaren finns inte i databasen.");
define("_PM_PLZTRYAGAIN","Vänligen kontrollera namnet och försök igen.");
define("_PM_MESSAGEPOSTED","Meddelandet har blivit postat");
define("_PM_CLICKHERE","Klicka här för att se dina privata meddelanden");
define("_PM_ORCLOSEWINDOW","eller klicka här för att stänga fönstret.");
define("_PM_USERWROTE","%s skrev:");
define("_PM_TO","Till: ");
define("_PM_SUBJECTC","Ämne: ");
define("_PM_MESSAGEC","Meddelande: ");
define("_PM_CLEAR","Rensa");
define("_PM_CANCELSEND","Ångra");
define("_PM_SUBMIT","Skicka");
define("_PM_SAVEINOUTBOX","Spara en kopia i din utkorg?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Ämne");
define("_PM_DATE","Datum");
define("_PM_NOTREAD","Ej läst");
define("_PM_SEND","Skicka nytt meddelande");
define("_PM_DELETE","Radera");
define("_PM_TOSAVE","Flytta till Sparakorgen");
define("_PM_UNSAVE","Flytta från Sparakorgen");
define("_PM_EMPTY","Tomt");
define("_PM_REPLY","Svara");
define("_PM_PLZREG","Vänligen och registrera dig för att kunna skicka PM!");
define("_PM_SAVED_PART","You are allowed %d in your savebox and you saved %d messages for this time");
define("_PM_SAVED_ALL","Meddelande har flyttats till Sparakorgen");
define("_PM_UNSAVED","Meddelande har flyttats från Sparakorgen");
define("_PM_EMPTIED","Korgen har tömts");
define("_PM_RUSUREEMPTY","Är du säker på att du vill tömma korgen?");
define("_PM_RUSUREDELETE","Är du säker på att du vill radera meddelande(na)?");

define("_PM_ONLINE","Online");

define("_PM_RECEIVE","MOTTAG");
define("_PM_POST","POSTA");
define("_PM_READBOX","LÄSAKORG");
define("_PM_RSAVEBOX","Mottag_SPARABOX");
define("_PM_OUTBOX","Utkorg");
define("_PM_SAVEBOX","Sparakorg");
define("_PM_SENTBOX","SKICKATBOX");
define("_PM_PSAVEBOX","Posta_SPARAKORG");
define("_PM_SAVE","SPARA");
define("_PM_SAVED","Sparningen lyckades");
define("_PM_TOC","Från: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","SORTERA");
define("_PM_ORDER","ORDNING");
define("_PM_UID","Partner's UID");
define("_PM_TIME","Postat DATUM");
define("_PM_ASC","STG");
define("_PM_DESC","FALL");
define("_PM_LIMIT","PM per Sida");
define("_PM_BACKTOBOX","Tillbaks till korgen");
define("_PM_SORTSUBMIT","Skicka");
define("_PM_PREVIOUSP","Föregående");
define("_PM_NEXTP","Nästa");

define("_PM_MAILNOTIFY","%s-Du har fått ett nytt meddelande från %s");
define("_PM_MAILMESSAGE","Hej!\nA Ett nytt meddelande har mottagits från %s\n\nPM:ets titel är\n%s\n\nDu kan läsa meddelandet här\n%s\n\n-----------\nMeddelandet skickas till dig eftersom du valt att bli meddelad när du får ett nytt PM\n\nDu kan ändra dina PM-inställningar\n%s\n\nVänligen svara inte på detta meddelande\n\n---------\nMed vänliga häslningar\n%s\n%s\n%s");

define("_PM_EMAIL","Vidarebefodra till E-post");
define("_PM_EMAIL_DESC","Kära %s, meddelandet har överförts från ditt konto hos ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM","Från %s");
define("_PM_EMAIL_TO","Till %s");
define("_PM_EMAIL_SUBJECT","[meddelande]%s");
define("_PM_EMAIL_MESSAGE","Meddelandeinnehåll");

define("_PM_ACTION_DONE","Operation utfördes korrekt");
define("_PM_ACTION_ERROR","Operation misslyckades");
?>