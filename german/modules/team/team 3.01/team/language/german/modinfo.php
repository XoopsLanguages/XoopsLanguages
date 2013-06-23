<?php
// $Id: modinfo.php,v 1.2 2003/12/04 00:02:59 jace303 Exp $
// Module Info

// The name of this module
define('_MI_MATCH_NAME','Team');

// A brief description of this module
define('_MI_MATCH_DESC','Erstellt einen Bereich für Teams, Matches und Verfügbarkeiten');

// Names of blocks for this module (Not all module has blocks)
define('_MI_MATCH_BNAME1','Verfügbarkeiten');
define('_MI_MATCH_BNAME2','Team Menü');

// Sub menus in main menu block
define('_MI_MATCH_SMNAME2','Matches');
define('_MI_MATCH_SMNAME3','Spielerverzeichniss');
define('_MI_MATCH_SMNAME4','Taktiken');

// Names of admin menu items
define('_MI_MATCH_ADMENU6', 'Teams verwalten');
define('_MI_MATCH_ADMENU4', 'Maps verwalten');
define('_MI_MATCH_ADMENU2', 'Matches verwalten');
define('_MI_MATCH_ADMENU3', 'Positionen verwalten');
define('_MI_MATCH_ADMENU7', 'Server verwalten');
define('_MI_MATCH_ADMENU8', 'Teamgrößen verwalten');
define('_MI_MATCH_ADMENU9', 'Teamseiten verwalten');
define('_MI_MATCH_ADMENU10', 'Ränge verwalten');

//Added 10/9-2003 Mithrandir for Notification
define('_MI_TEAM_MATCH_NOTIFY', 'Match');
define('_MI_TEAM_MATCH_NOTIFYDSC', 'Benachrichtigungsoptionen für das aktuellee Match');

define('_MI_TEAM_NEWMATCH_NOTIFY', 'Neues Match');
define('_MI_TEAM_NEWMATCH_NOTIFYCAP', 'Benachrichtige mich über Nachrichten für das momentane Team.');
define('_MI_TEAM_NEWMATCH_NOTIFYDSC', 'Benachrichtige mich wenn ein neues match für das aktuelle Team gesetzt wurde.');
define('_MI_TEAM_NEWMATCH_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung : Neues Match für Ihr Team!');

define('_MI_TEAM_NEWLINEUP_NOTIFY', 'Neues Lineup');
define('_MI_TEAM_NEWLINEUP_NOTIFYCAP', 'Benachrichtige mich wenn ein neues Lineup für das aktuelle match gesetzt wurde.');
define('_MI_TEAM_NEWLINEUP_NOTIFYDSC', 'Benachrichtige mich wenn ein Lineup für das aktuelle match erstellt wurde.');
define('_MI_TEAM_NEWLINEUP_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung : Lineup für das aktuelle Match gesetzt');

//Added 17/10-2003 - v1.30 - Mithrandir
define('_MI_TEAM_SECTIONS', 'Bereichsverwaltung');
define('_MI_TEAM_SECTIONSDESC', 'Wählt die Bereiche aus die im Team Modul angezeigt werden sollen');

// Added 17.11.2003 - Jace
define('_MI_MATCH_ADMENU11','Layout verwalten');

// Added 24.11.2003 - Jace
define('_MI_MATCH_ADMENU12','Rangliste verwalten');
?>
