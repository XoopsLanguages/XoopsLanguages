<?php
// $Id: modulesadmin.php 2411 2009-02-08 14:32 dhcst $
// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define('_MD_AM_MODADMIN','Moduladministration');
define('_MD_AM_MODULE','Modul');
define('_MD_AM_VERSION','Version');
define('_MD_AM_LASTUP','Letzte Aktualisierung');
define('_MD_AM_DEACTIVATED','Deaktiviert');
define('_MD_AM_ACTION','Aktion');
define('_MD_AM_DEACTIVATE','Deaktivieren');
define('_MD_AM_ACTIVATE','Aktivieren');
define('_MD_AM_UPDATE','Aktualisieren');
define('_MD_AM_DUPEN','Doppelter Eintrag in der Modultabelle!');
define('_MD_AM_DEACTED','Das gewählte Modul wurde deaktiviert. Sie können das Modul jetzt gefahrlos deinstallieren');
define('_MD_AM_ACTED','Das gewählte Modul wurde aktiviert!');
define('_MD_AM_UPDTED','Das gewählte Modul wurde aktualisiert!');
define('_MD_AM_SYSNO','Das Systemmodul kann nicht deaktiviert werden.');
define('_MD_AM_STRTNO','Dieses Modul wird auf der Startseite sichtbar sein. Bitte stellen sie es Ihren Wünschen entsprechend ein.');

// added in RC2
define('_MD_AM_PCMFM','Bitte bestätigen Sie:');

// added in RC3
define('_MD_AM_ORDER','Position');
define('_MD_AM_ORDER0','(0 = versteckt)');
define('_MD_AM_ACTIVE','Aktiv');
define('_MD_AM_INACTIVE','Inaktiv');
define('_MD_AM_NOTINSTALLED','Nicht installiert');
define('_MD_AM_NOCHANGE','Keine Änderung');
define('_MD_AM_INSTALL','Installieren');
define('_MD_AM_UNINSTALL','Deinstallieren');
define('_MD_AM_SUBMIT','Abschicken');
define('_MD_AM_CANCEL','Abbrechen');
define('_MD_AM_DBUPDATE','Datenbank erfolgreich aktualisiert!');
define('_MD_AM_BTOMADMIN','Zurück zur Moduladministration');

// %s represents module name
define('_MD_AM_FAILINS','%s kann nicht installiert werden.');
define('_MD_AM_FAILACT','%s kann nicht aktiviert werden.');
define('_MD_AM_FAILDEACT','%s kann nicht deaktiviert werden.');
define('_MD_AM_FAILUPD','%s kann nicht aktualisiert werden.');
define('_MD_AM_FAILUNINS','%s kann nicht deinstalliert werden.');
define('_MD_AM_FAILORDER','%s kann nicht umsortiert werden.');
define('_MD_AM_FAILWRITE','Kann nicht im Hauptmenü aufgeführt werden.');
define('_MD_AM_ALEXISTS','Modul %s ist bereits vorhanden.');
define('_MD_AM_ERRORSC','Fehler:');
define('_MD_AM_OKINS','Modul %s wurde erfolgreich installiert.');
define('_MD_AM_OKACT','Modul %s wurde erfolgreich aktiviert.');
define('_MD_AM_OKDEACT','Modul %s wurde erfolgreich deaktiviert.');
define('_MD_AM_OKUPD','Modul %s wurde erfolgreich aktualisiert.');
define('_MD_AM_OKUNINS','Modul %s wurde erfolgreich deinstalliert.');
define('_MD_AM_OKORDER','Modul %s wurde erfolgreich geändert.');

define('_MD_AM_RUSUREINS','Zur Modulinstallation bestätigen Sie bitte');
define('_MD_AM_RUSUREUPD','Um das Modul zu aktualisieren bestätigen Sie bitte');
define('_MD_AM_RUSUREUNINS','Soll das Modul wirklich deinstalliert werden?');
define('_MD_AM_LISTUPBLKS','Der folgende Block wird aktualisiert. Wählen Sie den Block zum Ändern aus (Templates und Optionen).');
define('_MD_AM_NEWBLKS','Neue Blöcke');
define('_MD_AM_DEPREBLKS','Abgelehnte Blöcke');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installation ');
define('_MD_AM_TABLE_RESERVED','%s ist eine reservierte Tabelle!');
define('_MD_AM_CREATE_TABLES','Tabellen erstellen ...');
define('_MD_AM_TABLE_CREATED','Tabelle %s wurde erstellt');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Daten wurden in die Tabelle %s geschrieben');
define('_MD_AM_INSERT_DATA_FAILD','Konnte %s nicht in die Datenbank einfügen.');
define('_MD_AM_INSERT_DATA_DONE','Moduldaten erfolgreich eingefügt.');
define('_MD_AM_MODULEID',' Modul ID: %s');
define('_MD_AM_SQL_FOUND','SQL Datei in %s gefunden');
define('_MD_AM_SQL_NOT_FOUND','SQL in %s nicht gefunden');
define('_MD_AM_SQL_NOT_CREATE','ERROR: Konnte %s nicht erstellen');
define('_MD_AM_SQL_NOT_VALID','%s ist keine gültige SQL Datei!');

define('_MD_AM_GROUP_ID',' Gruppen ID: %s ');
define('_MD_AM_NAME',' Name: ');
define('_MD_AM_VALUE',' Wert: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Füge Templates hinzu ...');
define('_MD_AM_TEMPLATES_DELETE','Lösche Templates ...');
define('_MD_AM_TEMPLATES_UPDATE','Aktualisiere Templates ..');

define('_MD_AM_TEMPLATE_ID','Template ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Template %s zur Datenbank hinzugefügt');
define('_MD_AM_TEMPLATE_ADD_ERROR','ERROR: Konnte Template %s nicht zur Datenbank hinzufügen.');
define('_MD_AM_TEMPLATE_COMPILED','Template %s compiliert ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','ERROR: Fehler beim Compilieren des Templates %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Template %s aus der Datenbank gelöscht. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','ERROR: Das Template %s konnte nicht aus der Datenbank entfernt werden. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Das Template %s wurde in die Datenbank eingefügt. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Template %s erneut compiliert');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','ERROR: Template %s konnte nicht compilert werden');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','ERROR: Template %s konnte nicht compiliert werden');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','ERROR: Konnte altes Template %s nicht löschen. Abbruch beim Aktualisieren dieser Datei. ');
define('_MD_AM_TEMPLATE_UPDATE','Template %s aktualisiert. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','ERROR: Konnte Template %s nicht aktualisieren. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Füge Block hinzu ...');
define('_MD_AM_BLOCKS_DELETE','Lösche Block ...');
define('_MD_AM_BLOCKS_REBUILD','Neubau der Blöcke ...');

define('_MD_AM_BLOCK_ID',' Block ID: %s ');

define('_MD_AM_BLOCK_ACCESS','Block Zugriffsrecht aktualisiert');
define('_MD_AM_BLOCK_ACCESS_ERROR','ERROR: Block Zugriffsrecht konnte nicht aktualisiert werden');
define('_MD_AM_BLOCK_ADD','Block %s hinzugefügt ');
define('_MD_AM_BLOCK_ADD_ERROR','ERROR: Block %s konnte nicht zur Datenbank hinzugefügt werden! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Datenbankfehler: %s ');
define('_MD_AM_BLOCK_CREATED','Block %s erstellt ');
define('_MD_AM_BLOCK_DELETE','Block %s gelöscht. ');
define('_MD_AM_BLOCK_DELETE_DATA','Block Template %s aus der Datenbank gelöscht. ');
define('_MD_AM_BLOCK_DELETE_ERROR','ERROR: Block %s konnte nicht gelöscht werden');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','ERROR: Block Template %s konnte nicht aus der Datenbank gelöscht werden');
define('_MD_AM_BLOCK_DEPRECATED','Block Template %s veraltet ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','ERROR: Veraltetes Block Template konnte nicht entfernt werden.  ');
define('_MD_AM_BLOCK_UPDATE','Block %s aktualisiert. ');

/* Configs */
define('_MD_AM_GONFIG_ID','Modulkonfiguration ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Modulkonfiguration hinzugefügt ...');
define('_MD_AM_MODULE_DATA_DELETE','Modulkonfiguration gelöscht ...');
define('_MD_AM_MODULE_DATA_UPDATE','Modulkonfiguration aktualisiert.');

define('_MD_AM_CONFIG_ADD',' Konfiguration hinzugefügt');
define('_MD_AM_CONFIG_DATA_ADD',' Konfiguration %s in die Datenbank geschrieben');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' ERROR: Konfiguration %s konnte nicht in die Datenbank geschrieben werden. ');
define('_MD_AM_GONFIG_DATA_DELETE','Konfiguration aus der Datenbank gelöscht. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','ERROR: Konfiguration konnte nicht aus der Datenbank gelöscht werden.');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Setze Gruppenrechte ...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','ERROR: Gruppenrechte konnten nicht gelöscht werden ');
define('_MD_AM_GROUP_PERMS_DELETED','Gruppenrechte gelöscht ');

define('_MD_AM_ACCESS_ADMIN_ADD','Administrationsrechte für Gruppe ID %s hinzugefügt');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','ERROR: Administrationsrechte für Gruppe %s konnten nicht hinzugefügt werden');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Zugriffsrechte für Gruppe ID: %s hinzugefügt');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','ERROR: Zugriffsrechte für Gruppe %s konnten nicht hinzugefügt werden');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Fehler bei der Ausführung %s');
define('_MD_AM_FAILED_SUCESS','%s Ausführung erfolgreich.');

define('_MD_AM_DELETE_ERROR','ERROR: Konnte %s nicht löschen');
define('_MD_AM_UPDATE_ERROR','ERROR: Konnte %s nicht aktualisieren');
define('_MD_AM_DELETE_MOD_TABLES','Lösche Modultabellen ...');

define('_MD_AM_COMMENTS_DELETE','Lösche Kommentare ...');
define('_MD_AM_COMMENTS_DELETE_ERROR','ERROR: Kommentare konnten nicht gelöscht werden');
define('_MD_AM_COMMENTS_DELETED','Kommentare gelöscht');

define('_MD_AM_NOTIFICATIONS_DELETE','Lösche Benachrichtigungsereignisse  ...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ERROR: Benachrichtigungsereignisse konnten nicht gelöscht werden');
define('_MD_AM_NOTIFICATIONS_DELETED','Benachrichtigungsereignisse gelöscht');

define('_MD_AM_TABLE_DROPPED','Tabelle %s gelöscht!');
define('_MD_AM_TABLE_DROPPED_ERROR','ERROR: Tabelle %s konnte nicht gelöscht werden!');
define('_MD_AM_TABLE_DROPPED_FAILDED','ERROR: Keine Erlaubnis zum Löschen der Tabelle %s !');


?>