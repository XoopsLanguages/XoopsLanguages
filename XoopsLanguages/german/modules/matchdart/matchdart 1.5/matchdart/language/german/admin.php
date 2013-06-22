<?php

//Topbar
define("_AM_XD_NAVSEASONS","Saisons");
define("_AM_XD_NAVEVENTS","Events");
define("_AM_XD_NAVPLAYERS","Spieler");
define("_AM_XD_NAVEVENTMATCHES","Event Spiele");
define("_AM_XD_NAVEVENTTABLE","Event Tabelle");
define("_AM_XD_NAVPREFERENCES","Einstellungen");
define("_AM_XD_NAVPERMISSIONS","Berechtigungen");
define("_AM_XD_NAVUPDATE","Update");
define("_AM_XD_NAVABOUT","About");

//Head
define("_AM_XD_CHOSEASON","Saison auswählen:");
define("_AM_XD_SEASONGO","Go");
define("_AM_XD_SEASELECT","Gewählte Saison: ");
define("_AM_XD_SEASELDROP","Saison auswählen: ");
define("_AM_XD_CHOEVENT","Event auswählen:");
define("_AM_XD_EVENTSELECT","Gewähltes Event: ");
define("_AM_XD_EVENTSELDROP","Event auswählen: ");
define("_AM_XD_EVENTGO","Go");

//Seasons management (seasons.php)
define("_AM_XD_ADDSEASON","Neue Saison hinzufügen");
define("_AM_XD_SEASONNAMEYEARS","Saison Name (Jahr)");
define("_AM_XD_SEASONADD","Saison hinzufügen");
define("_AM_XD_SEASONSAVAILABLE","Saisons in der Datenbank");
define("_AM_XD_SEASONNOTE","NV = Diese Saison ist noch nicht veröffentlicht.");
define("_AM_XD_SEASONMODIFYDELETE","Saison ändern / löschen");
define("_AM_XD_DEFAULTSEASON","Standard Saison?");
define("_AM_XD_SEASONPUBLISHED","Veröffentlichen:");
define("_AM_XD_SEASONMODIFY","Saison ändern");
define("_AM_XD_SEASONDELETE","Saison löschen");
define("_AM_XD_NOSEASONS","Noch keine Saison in der Datenbank");
define("_AM_XD_SEASONNP","(NV)");
define("_AM_XD_SEASONDUPLICATE","<br>Es existiert bereits eine Saison mit diesem Namen in der Datenbank.<br>Bitte wähle einen anderen Namen für die Saison.");
define("_AM_XD_SEASONHASMATCHES","<br>Es ist bereits ein Match in der Saison gebucht.<br> Du musst erst das Match löschen.");

//Events (events.php)
define("_AM_XD_ADDEVENT","Neues Event hinzufügen");
define("_AM_XD_EVENTNAMEYEARS","Event Name");
define("_AM_XD_EVENTPUBLISHED","Veröffentlichen:");
define("_AM_XD_EVENTPOINTSWIN","Punkte für Sieg");
define("_AM_XD_EVENTPOINTSDRAW","Punkte für Unentschieden");
define("_AM_XD_EVENTPOINTSLOSS","Punkte für Niederlage"); 
define("_AM_XD_EVENTDRAWLINE","Linie nach Position<br>mehrere mit Komma trennen");
define("_AM_XD_DEFAULTEVENT","Standard Event?");
define("_AM_XD_EVENTADD","Event hinzufügen");
define("_AM_XD_EVENTSAVAILABLE","Events in der Datenbank");
define("_AM_XD_EVENTNOTE","NV = Dieses Event ist noch nicht veröffentlicht.");
define("_AM_XD_EVENTNP","(NV)");
define("_AM_XD_NOEVENTS","Noch keine Events in der Datenbank");
define("_AM_XD_EVENTMODIFYDELETE","Event ändern / löschen");
define("_AM_XD_EVENTMODIFY","Event ändern");
define("_AM_XD_EVENTDELETE","Event löschen");
define("_AM_XD_EVENTDUPLICATE","<br>Es existiert bereits ein Event mit diesem Namen in der Datenbank.<br>Bitte wähle einen anderen Namen für das Event.");
define("_AM_XD_EVENTHASMATCHES","<br>Es ist bereits ein Match für dieses Event gebucht.<br> Du musst erst das Match löschen.");
define("_AM_XD_EVENTPLAYERSTATS","Für Player Stats verwenden:");

//Players management (players.php)
define("_AM_XD_PLAYERSAVAILABLE","Spieler in der Datenbank");
define("_AM_XD_NOPLAYERSAVAILABLE","Kein Spieler in der Datenbank");
define("_AM_XD_ADDNEWPLAYER","Spieler hinzufügen");
define("_AM_XD_PLAYERNAME","Spieler Name:");
define("_AM_XD_PLAYERISYOURS","Dein Spieler?");
define("_AM_XD_ADDPLAYER","Spieler hinzufügen");
define("_AM_XD_PLAYERMODIFY","Spieler ändern");
define("_AM_XD_PLAYERDELETE","Spieler löschen");
define("_AM_XD_PLAYERMODIFYDELETE","Spieler ändern / löschen");
define("_AM_XD_PLAYERDUPLICATE","<br>Es existiert bereits ein Spieler mit diesem Namen in der Datenbank.<br>Bitte wähle einen anderen Namen für den Spieler.");
define("_AM_XD_PLAYERISINUSE","<br>Löschen nicht möglich!<br>Der Spieler wird bereits verwendet.<br>Klicke 'zurück' um zurück zu gelangen.");
define("_AM_XD_PLAYERXUID","Spieler gehört zu Xoops User");
define("_AM_XD_PLAYERNOXUID","Kein");

//Matches management(eventmatches.php)
define("_AM_XD_ADDTWOPLAYERS","Mindestens zwei Spieler hinzufügen.");
define("_AM_XD_ADDPLAYERS","Spieler hinzufügen");
define("_AM_XD_ADDMATCH","Spiel hinzufügen");
define("_AM_XD_ADDMATCHES","Spiele hinzufügen");
define("_AM_XD_ADDMATCHNOTE","Wenn du einen Spieler nicht findest, prüfe ob er in der Spielerdatenbank enthalten ist.");
define("_AM_XD_ADDMATCHNOTE2","Füge so viele Spiele wie gewünscht hinzu, max 15 zur Zeit. <br>Spiele mit Angabe der Sets im Formular werden der Datenbank hinzugefügt.");
define("_AM_XD_DATE","Datum:");
define("_AM_XD_HOMEPLAYER","Heim Spieler:");
define("_AM_XD_AWAYPLAYER","Auswärts Spieler:");
define("_AM_XD_SETS","Sets");
define("_AM_XD_SETSHOME","SH");
define("_AM_XD_SETSAWAY","SA");
define("_AM_XD_BONUSPOINTS","BP");
define("_AM_XD_BONUSHOME","BP");
define("_AM_XD_BONUSAWAY","BP");
define("_AM_XD_HIGHFINISH","HiFi");
define("_AM_XD_HIGHFINISHHOME","HFH");
define("_AM_XD_HIGHFINISHAWAY","HFA");
define("_AM_XD_MODMATCHES","Spiele ändern");
define("_AM_XD_MODMATCH","Spiel ändern");
define("_AM_XD_DATETIME","Datum und Zeit");
define("_AM_XD_MODNOTICE1","You can't change home or away player in this mode. Click the match to modify home/away player.");
define("_AM_XD_MODINPUT","Klicke hier zum Ändern der Matches");
define("_AM_XD_MODINPUT2","Klicke hier zum Ändern des Matches");
define("_AM_XD_DELINPUT","Löschen (kann nicht rückgängig gemacht werden)");
define("_AM_XD_NOMATCHESYET","Noch keine Matches für gewählte Saison");
define("_AM_XD_MATCHESYET","Matches in gewählter Saison");
define("_AM_XD_NOEVENTMATCHESYET","Noch keine Matches für gewähltes Event");
define("_AM_XD_EVENTMATCHESYET","Matches in gewähltem Event");
define("_AM_XD_180","180");

//Permissions
define("_AM_XD_PERMISSION","Matchdart Berechtigungen");
define("_AM_XD_SUBMITMATCHES","Matches erfassen");

//Update Module (update.php)
define("_AM_XD_MODUPDATEWARNING","ACHTUNG: Sichere Deine Datenbank vor dem Update des Modules!");
define("_AM_XD_MODUPDATE","Update Modul Datenbank");
define("_AM_XD_MODNOUPDATE","Kein Modul Datenbank Update notwendig.");

//About (about.php)
define("_AM_XD_ABOUT_RELEASEDATE","Release Date");
define("_AM_XD_ABOUT_AUTHOR","Author");
define("_AM_XD_ABOUT_CREDITS","Credits");
define("_AM_XD_ABOUT_README","General Info");
define("_AM_XD_ABOUT_MANUAL","Help");
define("_AM_XD_ABOUT_LICENSE","License");
define("_AM_XD_ABOUT_MODULE_STATUS","Status");
define("_AM_XD_ABOUT_WEBSITE","Web Site");
define("_AM_XD_ABOUT_AUTHOR_NAME","Author Name");
define("_AM_XD_ABOUT_AUTHOR_WORD","Author Word");
define("_AM_XD_ABOUT_CHANGELOG","Change Log");
define("_AM_XD_ABOUT_MODULE_INFO","Module Info");
define("_AM_XD_ABOUT_AUTHOR_INFO","Author Info");
define("_AM_XD_ABOUT_DISCLAIMER","Disclaimer");
define("_AM_XD_ABOUT_DISCLAIMER_TEXT","GPL Licensed - No Warranty");

?>