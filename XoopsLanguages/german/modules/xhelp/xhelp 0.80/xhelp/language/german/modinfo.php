<?php
//$Id: modinfo.php,v 1.9 2005/12/15 19:40:25 eric_juden Exp $
define('_MI_XHELP_NAME','HelpDesk');
define('_MI_XHELP_DESC','Speichert Benutzer Anfragen um bei Problemen zu helfen');

//Template variables
define('_MI_XHELP_TEMP_ADDTICKET','Vorlage für addTicket.php');
define('_MI_XHELP_TEMP_SEARCH','Vorlage für search.php');
define('_MI_XHELP_TEMP_STAFF_INDEX','Mitarbeiter Vorlage für index.php');
define('_MI_XHELP_TEMP_STAFF_PROFILE','Vorlage für profile.php');
define('_MI_XHELP_TEMP_STAFF_TICKETDETAILS','Mitarbeiter Vorlage für ticket.php');
define('_MI_XHELP_TEMP_USER_INDEX','Benutzer Vorlage für index.php');
define('_MI_XHELP_TEMP_USER_TICKETDETAILS','Benutzer Vorlage für ticket.php');
define('_MI_XHELP_TEMP_STAFF_RESPONSE','Vorlage für response.php');
define('_MI_XHELP_TEMP_LOOKUP','Vorlage für lookup.php');
define('_MI_XHELP_TEMP_STAFFREVIEW','Vorlage für staffReview.php');
define('_MI_XHELP_TEMP_EDITTICKET','Vorlage für editTicket.php');
define('_MI_XHELP_TEMP_EDITRESPONSE','Vorlage für editResponse.php');
define('_MI_XHELP_TEMP_ANNOUNCEMENT','Vorlage für Ankündigungen');
define('_MI_XHELP_TEMP_STAFF_HEADER','Vorlage für Bearbeiter Menü Optionen');
define('_MI_XHELP_TEMP_USER_HEADER','Vorlage für Benutzer Menü Optionen');
define('_MI_XHELP_TEMP_PRINT','Vorlage für Druckerfreundliche Ticket Seite');
define('_MI_XHELP_TEMP_STAFF_ALL','Vorlage für Bearbeiter zeige alles Seite');
define('_MI_XHELP_TEMP_STAFF_TICKET_TABLE','Vorlage zum anzeigen von Mitarbeiter Tickets');
define('_MI_XHELP_TEMP_SETDEPT','Vorlage für Abteilungs Seite');
define('_MI_XHELP_TEMP_SETPRIORITY','Vorlage für Prioritäts Seite');
define('_MI_XHELP_TEMP_SETOWNER','Vorlage für Eigentümer Seite');
define('_MI_XHELP_TEMP_SETSTATUS','Vorlage für Status Seite');
define('_MI_XHELP_TEMP_DELETE','Vorlage für Stapel Anfrage Löschen Seite');
define('_MI_XHELP_TEMP_BATCHRESPONSE','Vorlage für Stapel Stellungnahme Seite');
define('_MI_XHELP_TEMP_ANON_ADDTICKET','Vorlage für anonyme Benutzer Ticket hinzufügen Seite');
define('_MI_XHELP_TEMP_ERROR','Vorlage für Fehler Seite');
define('_MI_XHELP_TEMP_EDITSEARCH','Vorlage um eine gespeicherte Suche zu ändern.');
define('_MI_XHELP_TEMP_USER_ALL','Vorlage für Benutzer "zeige alles" Seite');
define('_MI_XHELP_TEMP_ADD_FAQ','Vorlage zum hinzufügen eines FAQ Artikel.');


// Block variables
define('_MI_XHELP_BNAME1','Meine offenen Tickets');
define('_MI_XHELP_BNAME1_DESC','Zeige eine Liste offener Tickets des Benutzers');
define('_MI_XHELP_BNAME2','Abteilungs Anfragen');
define('_MI_XHELP_BNAME2_DESC','Zeigt die Anzahl der offenen Tickets für jede Abteilung.');
define('_MI_XHELP_BNAME3','Gesehene Tickets');
define('_MI_XHELP_BNAME3_DESC','Zeigt alle Tickets, die ein Bearbeiter angesehen hat.');
define('_MI_XHELP_BNAME4','Ticket Aktionen');
define('_MI_XHELP_BNAME4_DESC','Zeigt alle Aktionen, die ein Bearbeiter mit einem Ticket durchführen kann');
define('_MI_XHELP_BNAME5','Ticket Haupt Aktionen');
define('_MI_XHELP_BNAME5_DESC','Zeigt die Haupt Aktionen des Ticketing Systems');

// Config variables
define('_MI_XHELP_TITLE','Hilfe und Support');
define('_MI_XHELP_TITLE_DSC','Anfragen zu Problemen hier eingeben:');
define('_MI_XHELP_UPLOAD','Upload Verzeichnis');
define('_MI_XHELP_UPLOAD_DSC','Pfad, in dem Benutzer Dateien zu Anfragen speichern');
define('_MI_XHELP_ALLOW_UPLOAD','Hochladen erlauben');
define('_MI_XHELP_ALLOW_UPLOAD_DSC','Benutzern erlauben, Dateien anzuhängen?');
define('_MI_XHELP_UPLOAD_SIZE','Maximale Dateigröße');
define('_MI_XHELP_UPLOAD_SIZE_DSC','Maximale Größe der hochladbaren Datei (in bytes)');
define('_MI_XHELP_UPLOAD_WIDTH','Maximale Breite');
define('_MI_XHELP_UPLOAD_WIDTH_DSC','Maximale Breite der hochladbaren Datei (in pixel)');
define('_MI_XHELP_UPLOAD_HEIGHT','Maximale Höhe');
define('_MI_XHELP_UPLOAD_HEIGHT_DSC','Maximale Höhe der hochladbaren Datei (in pixel)');
define('_MI_XHELP_NUM_TICKET_UPLOADS','Max. Anzahl der Dateien zum Upload');
define('_MI_XHELP_NUM_TICKET_UPLOADS_DSC','Dies ist die maximale Anzahl von Dateien, die bei einer Ticket Einreichung hochgeladen werden können (inkludiert nicht Datei benutzerdefinerte Felder.');
define('_MI_XHELP_ANNOUNCEMENTS','Ankündigen als News Thema in');
//define('_MI_XHELP_ANNOUNCEMENTS_DSC','Das ist das News Thema, das Ankündigungenen für den HelpDesk aufnimmt. <a href=\\\'javascript:openWithSelfMain(\\\\\\\"\\\".XOOPS_URL.\\\"/modules/xhelp/install.php?op=updateTopics\\\\\\\", \\\\\\\"xoops_module_install_xhelp\\\\\\\",400, 300);\\\'>Hier klicken</a> um die News Kategorien zu aktualisieren.');
define('_MI_XHELP_ANNOUNCEMENTS_DSC',"Das ist das News Thema, das Ankündigen für den HelpDesk aufnimmt. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateTopics\", \"xoops_module_install_xhelp\",400, 300);'>Hier klicken</a> um die News Kategorien zu aktualisieren.");
define('_MI_XHELP_ANNOUNCEMENTS_NONE','***Ankündigungen deaktivieren***');
define('_MI_XHELP_ALLOW_REOPEN','Erlaube Ticket wieder zu öffnen');
define('_MI_XHELP_ALLOW_REOPEN_DSC','Benutzern erlauben, ein Ticket wieder zu öffnen?');
define('_MI_XHELP_STAFF_TC','Mitarbeiter Index Anfragen Anzahl');
define('_MI_XHELP_STAFF_TC_DSC','Wie viele Tickets sollen in jeder Sektion auf der Mitarbeiter Seite angezeigt werden?');
define('_MI_XHELP_STAFF_ACTIONS','Mitarbeiter Aktionen');
define('_MI_XHELP_STAFF_ACTIONS_DSC','Wie sollen die Bearbeiter Aktionen angezeigt werden? Inline ist Standard, Block-Style erfordert die Aktivierung des Mitarbeiter Aktion Block.');
define('_MI_XHELP_ACTION1','Inline-Style');
define('_MI_XHELP_ACTION2','Block-Style');
define('_MI_XHELP_DEFAULT_DEPT','Standard Abteilung');
define('_MI_XHELP_DEFAULT_DEPT_DSC',"Das ist die Standard Abteilung, die beim hinzufügen eines Tickets vorgeschlagen wird. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateDepts\", \"xoops_module_install_xhelp\",400, 300);'>Hier klicken</a> zum aktualisieren der Abteilungen.");
define('_MI_XHELP_OVERDUE_TIME','Ticket überfällig Zeit');
define('_MI_XHELP_OVERDUE_TIME_DSC','Legt die Zeit fest, die ein Mitarbeiter zur Verfügung hat, bevor ein Ticket als überfällig angezeigt wird (in Stunden).');
define('_MI_XHELP_ALLOW_ANON','Erlaube anonymen Benutzern Tickets einzuschicken');
define('_MI_XHELP_ALLOW_ANON_DSC','Erlaubt jedem, Tickets zu erstellen. Anonyme Benutzer, die ein Ticket einschicken werden aufgefordert, ein Benutzerkonto anzulegen.');
define('_MI_XHELP_APPLY_VISIBILITY','Abteilungs Sichtbarkeit der Mitarbeitern festlegen?');
define('_MI_XHELP_APPLY_VISIBILITY_DSC','Dies legt fest, ob Mitarbeiter nur zu bestimmten Abteilungen Tickets einsenden können. Wenn "Ja" gewählt ist, werden Mitarbeiter darauf beschränkt, Tickets an Abteilungen einzusenden bei denen die Xoops Gruppe, der sie angehören, gewählt ist.');
define('_MI_XHELP_DISPLAY_NAME','Benutzernamen oder wirklichen Namen anzeigen?');
define('_MI_XHELP_DISPLAY_NAME_DSC','Ermöglicht, den wirklichen Namen dort anzuzeigen, wo normalerweise der Benutzername angezeigt wird. (Benutzername wird auch angezeigt, wenn kein wirklicher Name hinterlegt ist!).');
define('_MI_XHELP_USERNAME','Benutzername');
define('_MI_XHELP_REALNAME','Wirklicher Name');

// Admin Menu variables
define('_MI_XHELP_MENU_BLOCKS','Blöcke verwalten');
define('_MI_XHELP_MENU_MANAGE_DEPARTMENTS','Abteilungen verwalten');
define('_MI_XHELP_MENU_MANAGE_STAFF','Mitarbeiter verwalten');
define('_MI_XHELP_MENU_MODIFY_EMLTPL','Email Vorlagen ändern');
define('_MI_XHELP_MENU_MODIFY_TICKET_FIELDS','Ticket Felder ändern');
define('_MI_XHELP_MENU_GROUP_PERM','Gruppenrechte');
define('_MI_XHELP_MENU_ADD_STAFF','Mitarbeiter hinzufügen');
define('_MI_XHELP_MENU_MIMETYPES','Mimetypen verwalten');
define('_MI_XHELP_MENU_CHECK_TABLES','Tabellen prüfen');
define('_MI_XHELP_MENU_MANAGE_ROLES','Funktionen verwalten');
define('_MI_XHELP_MENU_MAIL_EVENTS','Mail Ereignisse');
define('_MI_XHELP_MENU_CHECK_EMAIL','Email prüfen');
define('_MI_XHELP_MENU_MANAGE_FILES','Dateien verwalten');
define('_MI_XHELP_ADMIN_ABOUT','Über');
define('_MI_XHELP_TEXT_MANAGE_STATUSES','Status verwalten');
define('_MI_XHELP_TEXT_MANAGE_FIELDS','Eigene Felder verwalten');
define('_MI_XHELP_TEXT_NOTIFICATIONS','Benachrichtigungen verwalten');
define('_MI_XHELP_TEXT_MANAGE_FAQ','FAQ verwalten');

//NOTIFICATION vars
define('_MI_XHELP_DEPT_NOTIFY','Abteilung');
define('_MI_XHELP_DEPT_NOTIFYDSC','Benachrichtigungs Optionen, die für eine bestimmte Abteilung gelten');

define('_MI_XHELP_TICKET_NOTIFY','Ticket');
define('_MI_XHELP_TICKET_NOTIFYDSC','Benachrichtigungs Optionen, die für das aktuelle Ticket gelten');

define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','Mitarbeiter: Neues Ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYCAP','Benachrichtige mich bei neuem Ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYDSC','Benachrichtigung bei neuem Ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','{X_MODULE} Ticket erstellt - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYTPL','dept_newticket_notify.tpl');

define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','Mitarbeiter: Lösche Ticket');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYCAP','Benachrichtige mich, wenn ein Ticket gelöscht wurde');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYDSC','Benachrichtigung, wenn ein Ticket gelöscht wurde');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket gelöscht - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYTPL','dept_removedticket_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','Mitarbeiter: Geändertes Ticket');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYCAP','Benachrichtige mich, wenn ein Ticket geändert wurde');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYDSC','Benachrichtigung, wenn ein Ticket geändert wurde');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket geändert - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYTPL','dept_modifiedticket_notify.tpl');

define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','Mitarbeiter: Neue Stellungnahme');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYCAP','Benachrichtige mich bei neuer Stellungnahme');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYDSC','Benachrichtigung bei neuer Stellungnahme');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYSBJ','{X_MODULE} Stellungnahme zum Ticket hinzugefügt - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYTPL','dept_newresponse_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','Mitarbeiter: Stellungnahme geändert');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYCAP','Benachrichtige mich bei Änderung einer Stellungnahme');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYDSC','Benachrichtigung, wenn eine Stellungnahme geändert wird');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} Stellungnahme zum Ticket geändert - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYTPL','dept_modifiedresponse_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','Mitarbeiter: Ticket Status geändert');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYCAP','Benachrichtige mich bei Änderung des Status eines Tickets');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYDSC','Benachrichtigung bei Änderung des Status eines Tickets');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} Ticket Status geändert - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYTPL','dept_changedstatus_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','Mitarbeiter: Ticket Priorität geändert');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYCAP','Benachrichtige mich bei Änderung der Priorität eines Tickets');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYDSC','Benachrichtigung bei Änderung der Priorität eines Tickets');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} Ticket Priorität geändert - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYTPL','dept_changedpriority_notify.tpl');

define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','Mitarbeiter: Neuer Ticket Eigentümer');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYCAP','Benachrichtige mich bei Änderung des Eigentümers eines Tickets');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYDSC','Benachrichtigung bei Änderung des Eigentümers eines Tickets');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYSBJ','{X_MODULE} Ticket Eigentümer geändert - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYTPL','dept_newowner_notify.tpl');

define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','Benutzer: Ticket gelöscht');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYCAP','Benachrichtige mich, wenn dieses Ticket gelöscht wurde');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYDSC','Benachrichtigung, wenn dieses Ticket gelöscht wurde');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket gelöscht - ID {TICKET_ID}');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYTPL','ticket_removedticket_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','Benutzer: Geändert');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYCAP','Benachrichtige mich, wenn dieses Ticket geändert wurde');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYDSC','Benachrichtigung, wenn dieses Ticket geändert wurde');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket geändert - ID {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYTPL','ticket_modifiedticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','Benutzer: Neue Stellungnahme');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYCAP','Benachrichtige mich bei neuer Stellungnahme');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYDSC','Benachrichtigung, wenn eine Stellungnahme zu diesem Ticket abgegeben wurde');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYSBJ','AW: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYTPL','ticket_newresponse_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','Benutzer: Stellungnahme geändert');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYCAP','Benachrichtige mich bei geänderter Stellungnahme');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYDSC','Benachrichtigung, wenn eine Stellungnahme geändert wurde');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} Ticket Stellungnahme geändert - ID {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYTPL','ticket_modifiedresponse_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','Benutzer: Status geändert');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYCAP','Benachrichtige mich bei geändertem Status');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYDSC','Benachrichtigung, wenn der Status des Tickets geändert wurde');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} Ticket Status geändert - ID {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYTPL','ticket_changedstatus_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','Benutzer: Priorität geändert');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYCAP','Benachrichtige mich bei geänderter Priorität');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYDSC','Benachrichtigung, wenn die Priorität des Tickets geändert wurde');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} Ticket Priorität geändert - ID {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYTPL','ticket_changedpriority_notify.tpl');

define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','Benutzer: neuer Eigentümer');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYCAP','Benachrichtige mich bei geändertem Eigentümer');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYDSC','Benachrichtigung, wenn der Eigentümer des Tickets geändert wurde');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYSBJ','{X_MODULE} Ticket Eigentümer geändert - ID {TICKET_ID}');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYTPL','ticket_newowner_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','Benutzer: Neues Ticket');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYCAP','Benachrichtige mich bei einem neuem Ticket');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYDSC','Benachrichtigung, wenn ein neues Ticket erstellt wurde');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYSBJ','AW: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYTPL','ticket_newticket_notify.tpl');

define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','Mitarbeiter: Ticket schließen');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYCAP','Benachrichtge mich beim schließen eines Tickets');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYDSC','Benachrichtigung, wenn ein Ticket geschlossen wurde');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYSBJ','{X_MODULE} Ticket geschlossen - ID {TICKET_ID}');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYTPL','dept_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','Benutzer: Ticket schließen');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYCAP','Benachrichtge mich beim schließen eines Tickets');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYDSC','Benachrichtigung, wenn ein Ticket geschlossen wird');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Ticket geschlossen');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYTPL','ticket_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','Benutzer: Neuer Benutzer angelegt');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYCAP','Benachrichtige Benutzer, das ein neues Benutzerkonto angelegt wurde.');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYDSC','Benachrichtigung, wenn ein neues Benutzerkonto angelegt wurde (erfordert Aktivierung)');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','{X_MODULE} Neuer Benutzer angelegt');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYTPL','ticket_new_user_byemail.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','Benutzer: Neuer Benutzer angelegt');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYCAP','Benachrichtige Benutzer, das ein neues Benutzerkonto angelegt wurde');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYDSC','Benachrichtigung, wenn ein neues Benutzerkonto angelegt wurde (Automatische Aktivierung)');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','{X_MODULE} Neuer Benutzer angelegt');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYTPL','ticket_new_user_activation1.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','Benutzer: Neuer Benutzer angelegt');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYCAP','Benachrichtige Benutzer, das ein neues Benutzerkonto angelegt wurde');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYDSC','Benachrichtigung, wenn ein neues Benuterkonto angelegt wurde (erfordert Aktivierung durch Admin)');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYSBJ','{X_MODULE} Neuer Benutzer angelegt');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYTPL','ticket_new_user_activation2.tpl');

define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFY','Benutzer: Email Fehler');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYCAP','Benachrichtige Benutzer, das ihre Email nicht gespeichert wurde');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYDSC','Erhalte Benachrichtigung, wenn eine Email Einreichung nicht gespeichert wurde');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYSBJ','AW: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYTPL','ticket_email_error.tpl');

define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFY','Mitarbeiter: Tickets zusammenführen');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYCAP','Benachrichtige mich, wenn Tickets zusammengführt werden');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYDSC','Erhalte Benachrichtigung, wenn Tickets zusammengführt werden');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} Tickets zusammengeführt');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYTPL','dept_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFY','Benutzer: Tickets zusammenführen');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYCAP','Benachrichtige mich, wenn Tickets zusammengeführt werden');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYDSC','Erhalte Benachrichtigung, wenn Tickets zusammengeführt werden');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Tickets zusammengeführt');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYTPL','ticket_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFY','Benutzer: Neues Ticket per Email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYCAP','Bestätige, wenn ein neues Ticket per Email erzeugt wurde');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYDSC','Benachrichtigung, wenn ein neues Ticket per Email erzeugt wurde');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYSBJ','AW: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYTPL','ticket_newticket_byemail_notify.tpl');
?>