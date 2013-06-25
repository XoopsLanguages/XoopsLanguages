<?php
//$Id: modinfo.php,v 1.2 2005/11/02 14:18:07 eric_juden Exp $
define('_MI_XHELP_NAME','Helpdesk');
define('_MI_XHELP_DESC','opslaan van meldingen m.b.t. ICT problemen');

//Template variables
define('_MI_XHELP_TEMP_ADDTICKET','Template for addTicket.php');
define('_MI_XHELP_TEMP_SEARCH','Template for search.php');
define('_MI_XHELP_TEMP_STAFF_INDEX','Staff template for index.php');
define('_MI_XHELP_TEMP_STAFF_PROFILE','Template for profile.php');
define('_MI_XHELP_TEMP_STAFF_TICKETDETAILS','Staff template for ticket.php');
define('_MI_XHELP_TEMP_USER_INDEX','User template for index.php');
define('_MI_XHELP_TEMP_USER_TICKETDETAILS','User template for ticket.php');
define('_MI_XHELP_TEMP_STAFF_RESPONSE','Template for response.php');
define('_MI_XHELP_TEMP_LOOKUP','Template for lookup.php');
define('_MI_XHELP_TEMP_STAFFREVIEW','Template for reviewing a staff member');
define('_MI_XHELP_TEMP_EDITTICKET','Template for editing a ticket');
define('_MI_XHELP_TEMP_EDITRESPONSE','Template for editing a response');
define('_MI_XHELP_TEMP_ANNOUNCEMENT','Template for announcements');
define('_MI_XHELP_TEMP_STAFF_HEADER','Template for staff menu options');
define('_MI_XHELP_TEMP_USER_HEADER','Template for user menu options');
define('_MI_XHELP_TEMP_PRINT','Template for printer-friendly ticket page');
define('_MI_XHELP_TEMP_STAFF_ALL','Template for Staff View All Page');
define('_MI_XHELP_TEMP_STAFF_TICKET_TABLE','Template to display staff tickets');
define('_MI_XHELP_TEMP_SETDEPT','Template for Set Department Page');
define('_MI_XHELP_TEMP_SETPRIORITY','Template for Set Priority Page');
define('_MI_XHELP_TEMP_SETOWNER','Template for Set Owner Page');
define('_MI_XHELP_TEMP_SETSTATUS','Template for Set Status Page');
define('_MI_XHELP_TEMP_DELETE','Template for Batch Ticket Delete Page');
define('_MI_XHELP_TEMP_BATCHRESPONSE','Template for Batch Add Response Page');
define('_MI_XHELP_TEMP_ANON_ADDTICKET','Template for anonymous user add ticket page');
define('_MI_XHELP_TEMP_ERROR','Template for error page');
define('_MI_XHELP_TEMP_EDITSEARCH','Template om een opgeslagen zoekopdracht te bewerken.');


// Block variables
define('_MI_XHELP_BNAME1','Openstaande meldingen persoonlijk');
define('_MI_XHELP_BNAME1_DESC','Laat een lijst zien van de openstaande meldingen van een gebruiker');
define('_MI_XHELP_BNAME2','Afdelings meldingen');
define('_MI_XHELP_BNAME2_DESC','Laat het aantal openstaande meldingen per afdeling zien.');
define('_MI_XHELP_BNAME3','Recentelijk geopende meldingen');
define('_MI_XHELP_BNAME3_DESC','Laat de meldingen zien die een staf lid recentelijk heeft geopend.');
define('_MI_XHELP_BNAME4','Melding Akties');
define('_MI_XHELP_BNAME4_DESC','Laat zien wat een staf lid allemaal kan doen met een melding');

// Config variables
define('_MI_XHELP_TITLE','Helpdesk Titel');
define('_MI_XHELP_TITLE_DSC','Geef je heldesk een naam:');
define('_MI_XHELP_UPLOAD','Upload Map');
define('_MI_XHELP_UPLOAD_DSC','lokatie waar gebruikers hun bestanden opslaan die zijn toegevoegd aan een melding');
define('_MI_XHELP_ALLOW_UPLOAD','Toestaan Uploads');
define('_MI_XHELP_ALLOW_UPLOAD_DSC','Gebruikers toestaan een bestand als bijlage mee te sturen?');
define('_MI_XHELP_UPLOAD_SIZE','Upload grootte');
define('_MI_XHELP_UPLOAD_SIZE_DSC','Maximale grootte van een upload (in bytes)');
define('_MI_XHELP_UPLOAD_WIDTH','upload breedte');
define('_MI_XHELP_UPLOAD_WIDTH_DSC','Maximale breedte van een upload (in pixels)');
define('_MI_XHELP_UPLOAD_HEIGHT','Upload Hoogte');
define('_MI_XHELP_UPLOAD_HEIGHT_DSC','Max hoogte van een upload (in pixels)');
define('_MI_XHELP_ANNOUNCEMENTS','Mededelingen Nieuws Onderwerp');
//define('_MI_XHELP_ANNOUNCEMENTS_DSC','This is the news topic that pulls announcements for xhelp. Update the xHelp module to see newly added news categories');
define('_MI_XHELP_ANNOUNCEMENTS_DSC',"Dit is het nieuws onderwerp dat de mededelingen voor de heldesk oproept. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateTopics\", \"xoops_module_install_xhelp\",400, 300);'>Klik hier</a> om de nieuws categorieen te updaten.");
define('_MI_XHELP_ANNOUNCEMENTS_NONE','***Schakel mededelingen uit***');
define('_MI_XHELP_ALLOW_REOPEN','Sta toe een melding te her-openen');
define('_MI_XHELP_ALLOW_REOPEN_DSC','Sta gebruikers toe een melding te her-openen?');
define('_MI_XHELP_STAFF_TC','Staff Index Ticket Count');
define('_MI_XHELP_STAFF_TC_DSC','Hoeveel meldingen moeten weergegeven worden voor elke sectie op de personeels index pagina?');
define('_MI_XHELP_STAFF_ACTIONS','Personeels acties');
define('_MI_XHELP_STAFF_ACTIONS_DSC','Welke stijl wilt u dat de parsoneels acties krijgen? Inline is standaard, voor Block-Style moet u Staff Actions block toegankelijk maken.');
define('_MI_XHELP_ACTION1','Inline-Style');
define('_MI_XHELP_ACTION2','Block-Style');
define('_MI_XHELP_DEFAULT_DEPT','Standaard afdeling');
define('_MI_XHELP_DEFAULT_DEPT_DSC',"Dit zal de standaard afdeling zijn die wordt geselecteerd in de lijst wanneer een melding wordt toegevoegd. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateDepts\", \"xoops_module_install_xhelp\",400, 300);'>Click here</a> to update the departments.");
define('_MI_XHELP_OVERDUE_TIME','Meldings tijd overschreven');
define('_MI_XHELP_OVERDUE_TIME_DSC','Dit bepaald hoe lang de staff heeft om een melding af te handelen voordat de afhandeltijd is verstreken (uren).');
define('_MI_XHELP_ALLOW_ANON','Sta toe dat anonieme gebruikers een melding toevoegen');
define('_MI_XHELP_ALLOW_ANON_DSC','Dit staat iedereen toe om een melding te maken op uw site. Als een anonieme gebruiker een melding maakt, wordt hij of zij gevraagd een account aan te maken.');

// Admin Menu variables
define('_MI_XHELP_MENU_BLOCKS','Beheer blokken');
define('_MI_XHELP_MENU_MANAGE_DEPARTMENTS','Beheer Afdelingen');
define('_MI_XHELP_MENU_MANAGE_STAFF','Beheer Staff');
define('_MI_XHELP_MENU_MODIFY_EMLTPL','Werk Email Templates Bij');
define('_MI_XHELP_MENU_MODIFY_TICKET_FIELDS','Bijwerken Melding Velden');
define('_MI_XHELP_MENU_GROUP_PERM','Groep Permissies');
define('_MI_XHELP_MENU_ADD_STAFF','Toevoegen Staff');
define('_MI_XHELP_MENU_MIMETYPES','Mimetype Management');
define('_MI_XHELP_MENU_CHECK_TABLES','Controleer tabellen');
define('_MI_XHELP_MENU_MANAGE_ROLES','Beheer rollen');
define('_MI_XHELP_MENU_MAIL_EVENTS','Mail Gebeurtenissen');
define('_MI_XHELP_MENU_CHECK_EMAIL','Controleer Email');

//NOTIFICATION vars
define('_MI_XHELP_DEPT_NOTIFY','Afdeling');
define('_MI_XHELP_DEPT_NOTIFYDSC','Notificatie opties die van toepassing zijn op een bepaalde afdeling');

define('_MI_XHELP_TICKET_NOTIFY','Melding');
define('_MI_XHELP_TICKET_NOTIFYDSC','Notificatie opties die van toepassing zijn op de huidige melding');

define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','Afdeling: Nieuwe melding');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYCAP','Stel me op de hoogte als er een nieuwe melding wordt toegevoegd');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYDSC','Ontvang een bericht als er een nieuwe melding wordt aangemaakt');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding gecreeerd');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYTPL','dept_newticket_notify.tpl');

define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','Afdeling: Verwijder melding');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYCAP','Stel me op de hoogte als er een melding wordt verwijderd');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYDSC','Ontang een melding als er een melding wordt verwijderd');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding verwijderd');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYTPL','dept_removedticket_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','Afdeling: Bijgewerkte melding');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYCAP','Bericht me als een melding wordt bijgewerkt');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYDSC','Ontvang een bericht als een melding wordt bijgewerkt');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding bijgewerkt');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYTPL','dept_modifiedticket_notify.tpl');

define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','Afdeling: Nieuwe reactie');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYCAP','Bericht me als er reacties zijn op mijn meldingen');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYDSC','Ontvang een bericht als er een reactie wordt toegevoegd');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Reactie op melding is toegevoegd');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYTPL','dept_newresponse_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','Afdeling: Bijgewerkte reactie');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYCAP','Stel me op de hoogte wanneer een reactie is bijgewerkt');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYDSC','Ontvang een beichtje als een reactie is bijgewerkt');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding reactie is bijgewerkt');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYTPL','dept_modifiedresponse_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','Afdeling: Status Melding Gewijzigd');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYCAP','Stel me op de hoogte als de status van een melding is gewijzigd');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYDSC','Ontvang een berichtje als de status van een melding is bijgewerkt');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Status van melding is gewijzigd');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYTPL','dept_changedstatus_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','Afdeling: Prioriteit van de melding is gewijzigd');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYCAP','Stel me op de hoogte als de prioriteit van een melding is gewijzigd');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYDSC','Ontvang een berichtje als de prioriteit van een melding is gewijzigd');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Prioriteit van melding is gewijzigd');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYTPL','dept_changedpriority_notify.tpl');

define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','Afdeling: Nieuwe eigenaar van melding');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYCAP','Stel me op de hoogte wanneer de eigenaar van een melding wordt gewijzigd');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYDSC','Ontvang een berichtje als de eigenaar van een melding wordt gewijzigd');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Eigenaar van melding is gewijzigd');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYTPL','dept_newowner_notify.tpl');

/*
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFY','Claim Ticket Owner');
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFYCAP','Notify me when the owner of a ticket is claimed');
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFYDSC','Receive notification when the owner of a ticket is claimed');
 define('_MI_XHELP_DEPT_CLAIMOWNER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Ticket ownership claimed');
 */

define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','Melding: Verwijderd');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYCAP','Stel me op de hoogte als een melding wordt verwijderd');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYDSC','Ontvang een berichtje als een melding wordt verwijderd');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding verwijderd');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYTPL','ticket_removedticket_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','Melding: Bijgewerkt');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYCAP','Stel me op de hoogte als een melding is bijgewerkt');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYDSC','Stuur een berichtje als een melding is bijgewerkt');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding bijgewerkt');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYTPL','ticket_modifiedticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','Melding: Nieuwe reactie');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYCAP','Stel me op de hoogte als er een nieuwe reactie is');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYDSC','Ontvang een berichtje als er een reactie wordt toegevoegd');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYSBJ','RE: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYTPL','ticket_newresponse_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','Melding: Bijgewerkte reactie');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYCAP','Stel me op de hoogte als een reactie is bijgewerkt');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYDSC','Ontvang een berichtje als een reactie is bijgewerkt');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Reactie van de melding is bijgewerkt');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYTPL','ticket_modifiedresponse_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','Melding: Status gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYCAP','Stel me op de hoogte als de status wordt gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYDSC','Ontvang een berichtje als de status wordt gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Status van melding is gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYTPL','ticket_changedstatus_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','Melding: Prioriteit is gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYCAP','Stel me op de hoogte als de prioriteit is gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYDSC','Stuur een berichtje als de prioriteit is gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Prioriteit is gewijzigd');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYTPL','ticket_changedpriority_notify.tpl');

define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','Melding: Nieuwe eigenaar');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYCAP','Stel me op de hoogte als de melding een nieuwe eigenaar krijgt');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYDSC','Ontang een berichtje als de melding een nieuwe eigenaar krijgt');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Eigenaar melding is gewijzigd');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYTPL','ticket_newowner_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','Melding: Nieuwe melding');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYCAP','Bevestig als er een nieuwe melding wordt gemaakt');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYDSC','Ontvang een berichtje als er een nieuwe melding wordt gemaakt');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYSBJ','RE: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYTPL','ticket_newticket_notify.tpl');

define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','Afdeling: Sluiten melding');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYCAP','Stel me op de hoogte als de melding wordt gesloten');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYDSC','Ontvang een berichtje als de melding wordt gesloten');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding gesloten');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYTPL','dept_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','Melding: Sluit melding');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYCAP','Bevestig wanneer de melding wordt gesloten');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYDSC','Ontvan een berichtje als de melding wordt gesloten');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Melding gesloten');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYTPL','ticket_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','Melding: Nieuwe gebruiker aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYCAP','Stel de gebruiker op de hoogte wanneer er een gebruikers account voor hem is aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYDSC','Ontvang een berichtje als er een nieuwe gebruiker is aangemaakt op basis van een e-mail verzoek (Activatie is noodzakelijk)');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Nieuwe gebruiker aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYTPL','ticket_new_user_byemail.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','Melding: Nieuwe gebruiker aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYCAP','Stel de gebruiker op de hoogte als er een nieuw account voor hem is aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYDSC','Ontvang een berichtje als er een nieuwe gebruiker is aangemaakt op basis van een e-mail verzoek (Auto activatie)');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Nieuwe gebruiker aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYTPL','ticket_new_user_activation1.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','Melding: Nieuwe gebruiker aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYCAP','Stel de gebruiker op de hoogte als er een nieuw account voor hem is aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYDSC','Ontvang een berichtje als er een nieuwe gebruiker is aangemaakt op basis van een e-mail verzoek (Activatie door Admin noodzakelijk)');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Nieuwe gebruiker aangemaakt');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYTPL','ticket_new_user_activation2.tpl');
?>