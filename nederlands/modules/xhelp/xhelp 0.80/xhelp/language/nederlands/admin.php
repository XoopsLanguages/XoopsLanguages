<?php
//$Id: admin.php,v 1.2 2005/11/02 14:18:07 eric_juden Exp $

//Menu choices
define('_AM_XHELP_ADMIN_TITLE','%s Beheer Menu');
define('_AM_XHELP_BLOCK_TEXT','Beheer Blokken');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','Beheer Afdelingen');
define('_AM_XHELP_MENU_MANAGE_STAFF','Beheer Personeel');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','Wijzig Email Templates');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','Wijzig Meldingnummer Velden');
define('_AM_XHELP_MENU_GROUP_PERM','Groeps Permissies');
define('_AM_XHELP_MENU_MIMETYPES','Mimetype Management');
define('_AM_XHELP_MENU_PREFERENCES','Voorkeuren');
define('_AM_XHELP_MENU_ADD_STAFF','Voeg Personeel Toe');
define('_AM_XHELP_UPDATE_MODULE','Module Update');
define('_AM_XHELP_MENU_MANAGE_ROLES','Beheer Rollen');

define('_AM_XHELP_SEC_TICKET_ADD', 0);
define('_AM_XHELP_SEC_TICKET_EDIT', 1);
define('_AM_XHELP_SEC_TICKET_DELETE', 2);
define('_AM_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_AM_XHELP_SEC_TICKET_STATUS', 4);
define('_AM_XHELP_SEC_TICKET_PRIORITY', 5);
define('_AM_XHELP_SEC_TICKET_LOGUSER', 6);
define('_AM_XHELP_SEC_RESPONSE_ADD', 7);
define('_AM_XHELP_SEC_RESPONSE_EDIT', 8);

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','Voeg Meldingen Toe');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','Meldingen Bijwerken');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','Meldingen verwijderen');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Wijzig Melding Eigenaar');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','Wijzig Melding Status');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','Wijzig Melding Prioriteit');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','Verwerk Melding voor gebruiker');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','Voeg Reactie Toe');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','Werk Reactie Bij');

//Permissions
define('_AM_XHELP_GROUP_PERM','Groeps Permissies');
define('_AM_XHELP_GROUP_PERM_TITLE','Werk Groeps Permissies Bij');
define('_AM_XHELP_GROUP_PERM_NAME','Permissies');
define('_AM_XHELP_GROUP_PERM_DESC','Selecteer de service die elke groep zou moeten mogen wijzigen');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','Error: personeel niet bijgewerkt');
define('_AM_XHELP_MESSAGE_FILE_READONLY','Dit bestand is alleen lezer. Please make the modules/xhelp/language/english/mail_templates folder writable');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','Bestand is succesvol bijgewerkt');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','Error: bestand is niet bijgewerkt');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','Rol succesvol toegevoegd.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','Error: rol is niet gecreeerd.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','Rol succesvol verwijderd.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','Error: rol is niet verwijderd.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','Rol is succesvol bijgewerkt.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','Error: rol is niet bijgewerkt.');
define('_AM_XHELP_MESSAGE_DEPT_STORE','Afdelings permissies met succes opgeslagen.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','Error: Afdelingspermissies zijn niet opgeslagen.');
define('_AM_XHELP_MESSAGE_DEF_ROLES','De standaard toestemmingsrollen werden met succes toegevoegd.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','De standaard toestemmingsrollen werden niet toegevoegd.');

// Buttons
define('_AM_XHELP_BUTTON_DELETE','Verwijder');
define('_AM_XHELP_BUTTON_EDIT','Wijzig');
define('_AM_XHELP_BUTTON_SUBMIT','Toevoegen');
define('_AM_XHELP_BUTTON_RESET','Herstel');
define('_AM_XHELP_BUTTON_ADDSTAFF','Voeg personeel toe');
define('_AM_XHELP_BUTTON_UPDATESTAFF','Wijzig Personeel');
define('_AM_XHELP_BUTTON_CANCEL','Cancel');
define('_AM_XHELP_BUTTON_UPDATE','Wijzig');
define('_AM_XHELP_BUTTON_CREATE_ROLE','Creëer Nieuwe Rol');
define('_AM_XHELP_BUTTON_CLEAR_PERMS','Verwijder permissies');
//define('_AM_XHELP_BUTTON_ADD_DEPT','Add Department');

define('_AM_XHELP_EDIT_DEPARTMENT','Wijzig Afdeling');
define('_AM_XHELP_EXISTING_DEPARTMENTS','Bestaande Afdelingen:');
define('_AM_XHELP_MANAGE_DEPARTMENTS','Beheer Afdelingen');
define('_AM_XHELP_MANAGE_STAFF','Beheer Personeel');
define('_AM_XHELP_EXISTING_STAFF','Huidige Personeelsleden:');
define('_AM_XHELP_ADD_STAFF','Voeg personeel toe');
define('_AM_XHELP_EDIT_STAFF','Wijzig Personeel');
define('_AM_XHELP_INDEX','Index');
define('_AM_XHELP_ADMIN_GOTOMODULE','Ga Naar Module');
define('_AM_XHELP_DEPARTMENT_SERVERS','Afdelings Mailbox');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','Email Adres');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','Mailbox Type');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','Standaard Prioriteit Melding');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','Server');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','Poort');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','Acties');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','Voeg Mailbox toe om te monitoren');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','Gebruikersnaam');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','Wachtwoord');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','Antwoord Sturen aan Email Adres');
define('_AM_XHELP_DEPARTMENT_NO_ID','Kon De Afdelings id Niert Vinden. Beeindigen.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','Mailbox Toegevoegd aan Afdeling.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','Fout Bij Opslaan Mailbox Afdeling.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','Afdelings mailbox is niet gedefineerd.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','Verwijderde Mailbox Van Afdeling.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','Er Is Een Fout Opgetreden Bij Het Verwijderen Van De Afdelings Mailbox.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','U Moet Een Gebruiker Toevoegen Aan Een Of Meer Afdelingen');
define('_AM_XHELP_STAFF_ERROR_ROLES','U Moet Een Gebruiker Toevoegen Aan Een Of Meer Rollen');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT','Voeg Afdeling Toe:');
define('_AM_XHELP_TEXT_EDIT_DEPT','Bewerk Afdelings Naam:');
define('_AM_XHELP_TEXT_EDIT','Bewerk');
define('_AM_XHELP_TEXT_DELETE','Verwijder');
define('_AM_XHELP_TEXT_SELECTUSER','Selecteer Gebruikersnaam:');
define('_AM_XHELP_TEXT_DEPARTMENTS','Afdelingen:');
define('_AM_XHELP_TEXT_USER','Gebruikersnaam:');
define('_AM_XHELP_TEXT_ALL_DEPTS','Allemaal');
define('_AM_XHELP_TEXT_NO_DEPTS','Geen');
define('_AM_XHELP_TEXT_MAKE_DEPTS','U moet afdelingen toevoegen alvorens personeel toe te voegen!');
define('_AM_XHELP_LINK_ADD_DEPT','Voeg Afdelingen Toe');
define('_AM_XHELP_TEXT_TOP_CLOSERS','Snelste Oplossingen');
define('_AM_XHELP_TEXT_WORST_CLOSERS','Langzaamste Oplossingen');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','Open Hoge Prioriteits Meldingen');
define('_AM_XHELP_TEXT_NO_OWNER','Geen Eigenaar');
define('_AM_XHELP_TEXT_NO_DEPT','Geen Afdeling');
define('_AM_XHELP_TEXT_RESPONSE_TIME','Snelste Response Tijd');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','Langzaamste Response Tijd');
define('_AM_XHELP_TEXT_PRIORITY','Prioriteit:');
define('_AM_XHELP_TEXT_ELAPSED','Verstreken:');
define('_AM_XHELP_TEXT_STATUS','Status:');
define('_AM_XHELP_TEXT_SUBJECT','Subject:');
define('_AM_XHELP_TEXT_DEPARTMENT','Afdeling:');
define('_AM_XHELP_TEXT_OWNER','Eigenaar:');
define('_AM_XHELP_TEXT_LAST_UPDATED','Laatste Keer Bijgewerkt:');
define('_AM_XHELP_TEXT_LOGGED_BY','Verwerkt Door:');
define('_AM_XHELP_TEXT_EXISTING_ROLES','Bestaande Rollen');
define('_AM_XHELP_TEXT_NO_ROLES','Geen Rollen Gevonden');
define('_AM_XHELP_TEXT_ROLES','Rollen:');
define('_AM_XHELP_TEXT_CREATE_ROLE','Creeer Nieuwe Rol');
define('_AM_XHELP_TEXT_EDIT_ROLE','Bewerk Rol');
define('_AM_XHELP_TEXT_NAME','Naam:');
define('_AM_XHELP_TEXT_PERMISSIONS','Permissies:');
define('_AM_XHELP_TEXT_SELECT_ALL','Selecteer Alles');
define('_AM_XHELP_TEXT_DEPT_PERMS','Pas de Toestemmingen van de Afdeling aan');
define('_AM_XHELP_TEXT_CUSTOMIZE','Aanpassen');
define('_AM_XHELP_TEXT_ACTIONS','Acties:');
define('_AM_XHELP_TEXT_ID','ID:');
define('_AM_XHELP_TEXT_LOOKUP_USER','Zoek Gebruiker');
define('_AM_XHELP_SEARCH_BEGINEGINDATE','Begin Datum:');
define('_AM_XHELP_SEARCH_ENDDATE','Eind Datum:');

define('_AM_XHELP_TEXT_MAIL_EVENTS','Mail Gebeurtenissen');
define('_AM_XHELP_TEXT_MAILBOX','Mailbox:');
define('_AM_XHELP_TEXT_EVENT_CLASS','Gebeurtins Klasse:');
define('_AM_XHELP_TEXT_TIME','Tijd:');
define('_AM_XHELP_NO_EVENTS','Geen Gebeurtenissen Gevonden');
define('_AM_XHELP_SEARCH_EVENTS','Zoek Mail Gebeurtenissen');
define('_AM_XHELP_BUTTON_SEARCH','Zoek');


// Mimetypes
define("_AM_XHELP_MIME_ID","ID");
define("_AM_XHELP_MIME_EXT","EXT");
define("_AM_XHELP_MIME_NAME","Applicatie Type");
define("_AM_XHELP_MIME_ADMIN","Admin");
define("_AM_XHELP_MIME_USER","Gebruiker");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","Creeer Mimetype");
define("_AM_XHELP_MIME_MODIFYF","Bijwerken Mimetype");
define("_AM_XHELP_MIME_EXTF","File Extentie:");
define("_AM_XHELP_MIME_NAMEF","Application Type/Name:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Vul toepassing verbonden aan deze extentie in.</span></div>");
define("_AM_XHELP_MIME_TYPEF","Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Vul ieder mimetype geassocieerd met een bestands extentie in. Ieder mimetype moet gescheiden worden door een spatie.</span></div>");
define("_AM_XHELP_MIME_ADMINF","Toegestaan Admin Mimetype");
define("_AM_XHELP_MIME_ADMINFINFO","<b>Mimetypesdie die beschikbaar zijn voor admin uploads:</b>");
define("_AM_XHELP_MIME_USERF","Toegestaan Gebruikers Mimetype");
define("_AM_XHELP_MIME_USERFINFO","<b>Mimetypes die beschikbaar zijn voor gebruikers uploads:</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","Geen mimetypes geselecteerd.");
define("_AM_XHELP_MIME_FINDMIMETYPE","Zoek nieuw Mimetype:");
define("_AM_XHELP_MIME_EXTFIND","Zoek Bestands Extentie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Vul de bestands extentie in die je zoekt.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>Niewe mimetypes kunnen makkelijk worden gecreeerd, gewijzigd of verwijderd met behulp van dit formulier.</li>
	<li>Search for a new mimetypes via an external website.</li> 
	<li>View displayed mimetypes for Admin and User uploads.</li> 
	<li>Change mimetype upload status.</li></ul> 
	");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","Creeer");
define("_AM_XHELP_MIME_CLEAR","Reset");
define("_AM_XHELP_MIME_CANCEL","Annuleer");
define("_AM_XHELP_MIME_MODIFY","Wijzig");
define("_AM_XHELP_MIME_DELETE","Verwijder");
define("_AM_XHELP_MIME_FINDIT","Zoek Extentie!");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","Verwijder geselecteerde Mimetype?");
define("_AM_XHELP_MIME_MIMEDELETED","Mimetype %s is verwijderd");
define("_AM_XHELP_MIME_CREATED","Mimetype Informatie Gecreeerd");
define("_AM_XHELP_MIME_MODIFIED","Mimetype Information Bijgewerkt");

define("_AM_XHELP_MINDEX_ACTION","Actie");
define("_AM_XHELP_MINDEX_PAGE","<b>Pagina:</b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","Bewerk dit item");
define("_AM_XHELP_ICO_DELETE","Verwijder dit Item");
define("_AM_XHELP_ICO_ONLINE","Online");
define("_AM_XHELP_ICO_OFFLINE","Offline");
define("_AM_XHELP_ICO_APPROVED","Goedgekeurd");
define("_AM_XHELP_ICO_NOTAPPROVED","Niet Goedgekeurd");

define("_AM_XHELP_ICO_LINK","Gerelateerde Link");
define("_AM_XHELP_ICO_URL","Voeg Gerelateerde URL toe");
define("_AM_XHELP_ICO_ADD","Toevoegen");
define("_AM_XHELP_ICO_APPROVE","Goedkeuren");
define("_AM_XHELP_ICO_STATS","Statistieken");

define("_AM_XHELP_ICO_IGNORE","Negeer");
define("_AM_XHELP_ICO_ACK","Verbroken Rapport Bevestigd");
define("_AM_XHELP_ICO_REPORT","Bevestig Verbroken Rapport?");
define("_AM_XHELP_ICO_CONFIRM","Verbroken Rapport Bevestigd");
define("_AM_XHELP_ICO_CONBROKEN","Bevestig Verbroken Rapport?");

define("_AM_XHELP_UPLOADFILE","Bestand met succes geupload");
define('_AM_XHELP_TEXT_TICKET_INFO','Melding informatie');
define('_AM_XHELP_TEXT_OPEN_TICKETS','Openstaande Meldingen');
define('_AM_XHELP_TEXT_HOLD_TICKETS','Actuele Meldingen');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','Afgeronde Meldingen');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','Totaal Meldingen');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','Template Naam:');
define('_AM_XHELP_TEXT_DESCRIPTION','Omschrijving:');
define('_AM_XHELP_TEXT_GENERAL_TAGS','Gemeenschappelijke Markeringen');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - URL van site');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - naam van site');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL -  email adres van administrator');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - Naam van module');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - link naar index pagina van de module');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','Werk alleen de geselecteerde markeringen bij!');

define('_AM_XHELP_CURRENTVER','Huidige versie: <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','Database Versie: <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','Er zijn geen uodates beschikbaar.');
define('_AM_XHELP_DB_NEEDUPDATE','Uw database is verouderd. Svp uw database tabellen bijwerken!');
define('_AM_XHELP_UPDATE_NOW','Nu Bijwerken!');
define('_AM_XHELP_DB_NEEDINSTALL','Uw database is niet in synchronisatie. Svp dezelfde versie als de database installeren');
define('_AM_XHELP_VERSION_ERR','De vorige versie kan niet bepaald worden.');
define('_AM_XHELP_MSG_MODIFYTABLE','Bijgewerkte tabel %s');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','Er is een fout opgetreden bij het bijwerken van de tabel %s');
define('_AM_XHELP_MSG_ADDTABLE','Toegevoegde tabel %s');
define('_AM_XHELP_MSG_ADDTABLE_ERR','Er is een fout ontstaan bij het toevoegen van een tabel %s');
define('_AM_XHELP_MSG_UPDATESTAFF','Bijgewerkte personeelsleden #%s');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','Er is een fout ontstaan bij het bijwerken van het personeel #%s');
define('_AM_XHELP_UPDATE_DB','Bijwerken Database:');
define('_AM_XHELP_UPDATE_TO','Bijwerken naar versie %s:');
define('_AM_XHELP_UPDATE_OK','Succesvol bijgewerkt naar versie %s');
define('_AM_XHELP_UPDATE_ERR','Fouten bij het bijwerken naar %s');
define('_AM_XHELP_MSG_UPD_PERMS','Staff #%s Permissies toegevoegd aan afdeling %s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','Tabel %s is verwijderd uit uw database.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','Personeel #%s heeft globale toestemmingen.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Error: Tabel %s is NIET verwijderd uit uw database.');
define('_AM_XHELP_MSG_RENAME_TABLE','Tabel %s is hernoemd %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','Error: tabel %s is NIET hernoemd.');

define('_AM_XHELP_TEXT_DEFAULT','Standaard');
define('_AM_XHELP_TEXT_MAKE_DEFAULT_DEPT','Stel deze afdeling in als standaard');
define('_AM_XHELP_TEXT_DEFAULT_DEPT','Standaard afdeling');
define('_AM_XHELP_MSG_CHANGED_DEFAULT_DEPT','Standaard afdeling is bijgewerkt.');
define('_AM_XHELP_MSG_UPDATE_SEARCH','Bewaarde zoekopdracht #%u is bijgewerkt.');
define('_AM_XHELP_MSG_UPDATE_SEARCH_ERR','Fout: bewaarde zoekopdracht #%u is niet bijgewerkt.');
?>