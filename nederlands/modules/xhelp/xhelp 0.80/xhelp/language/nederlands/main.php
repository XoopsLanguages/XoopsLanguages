<?php
//$Id: main.php,v 1.2 2005/11/02 14:18:07 eric_juden Exp $

define('_XHELP_CATEGORY1','Toewijzen eigenaar');
define('_XHELP_CATEGORY2','Verwijder reacties');
define('_XHELP_CATEGORY3','Verwijder meldingen');
define('_XHELP_CATEGORY4','Verwerk Gebruikers\' Meldingen');
define('_XHELP_CATEGORY5','Werk reacties bij');
define('_XHELP_CATEGORY6','Werk melding informatie bij');

define('_XHELP_SEC_TICKET_ADD', 0);
define('_XHELP_SEC_TICKET_EDIT', 1);
define('_XHELP_SEC_TICKET_DELETE', 2);
define('_XHELP_SEC_TICKET_OWNERSHIP', 3);
define('_XHELP_SEC_TICKET_STATUS', 4);
define('_XHELP_SEC_TICKET_PRIORITY', 5);
define('_XHELP_SEC_TICKET_LOGUSER', 6);
define('_XHELP_SEC_RESPONSE_ADD', 7);
define('_XHELP_SEC_RESPONSE_EDIT', 8);

define('_XHELP_SEC_TEXT_TICKET_ADD','Voeg Meldingen Toe');
define('_XHELP_SEC_TEXT_TICKET_EDIT','Bijwerken Meldingen');
define('_XHELP_SEC_TEXT_TICKET_DELETE','Verwijder Meldingen');
define('_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Verander Melding Eigenaar');
define('_XHELP_SEC_TEXT_TICKET_STATUS','Verander Melding Status');
define('_XHELP_SEC_TEXT_TICKET_PRIORITY','Verander Melding Prioriteit');
define('_XHELP_SEC_TEXT_TICKET_LOGUSER','Verwerk Melding Voor Gebruiker');
define('_XHELP_SEC_TEXT_RESPONSE_ADD','Voeg Commentaar toe');
define('_XHELP_SEC_TEXT_RESPONSE_EDIT','Werk Commentaar Bij');

define('_XHELP_JSC_TEXT_DELETE','Weet u zeker dat u deze melding wil verwijderen?');

define('_XHELP_MESSAGE_ADD_DEPT','Afdeling met succes toegevoegd');
define('_XHELP_MESSAGE_ADD_DEPT_ERROR','Error: Afdeling is NIET toegevoegd');
define('_XHELP_MESSAGE_UPDATE_DEPT','Afdeling succesvol bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_DEPT_ERROR','Error: Afdeling is niet bijgewerkt');
define('_XHELP_MESSAGE_DEPT_DELETE','Afdeling succesvol verwijderd');
define('_XHELP_MESSAGE_DEPT_DELETE_ERROR','Error: Afdeling is NIET verwijderd');
define('_XHELP_MESSAGE_ADDSTAFF_ERROR','Error: personeelslid is NIET toegevoegd');
define('_XHELP_MESSAGE_ADDSTAFF','Personeelslid is toegevoegd');
define('_XHELP_MESSAGE_STAFF_DELETE','Personeelslid is verwijderd');
define('_XHELP_MESSAGE_STAFF_DELETE_ERROR','Personeelslid is NIET verwijderd');
define('_XHELP_MESSAGE_EDITSTAFF','Personeelslid profiel is met succes bijgewerkt');
define('_XHELP_MESSAGE_EDITSTAFF_ERROR','Error: Personeelslid is NIET bijgewerkt');
define('_XHELP_MESSAGE_EDITSTAFF_NOCLEAR_ERROR','Error: Oude afdelingen zijn NIET verwijderd');
define('_XHELP_MESSAGE_DEPT_EXISTS','Afdeling bestaat al');
define('_XHELP_MESSAGE_ADDTICKET','Melding is met succes verwerkt');
define('_XHELP_MESSAGE_ADDTICKET_ERROR','Error: Melding is NIET verwerkt');
define('_XHELP_MESSAGE_LOGMESSAGE_ERROR','Error: actie is NIET verwerkt in de database');
define('_XHELP_MESSAGE_UPDATE_PRIORITY','Melding prioriteit is bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_PRIORITY_ERROR','Error: Melding prioriteit is NIET bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_STATUS','Melding status is bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_STATUS_ERROR','Error: Melding status is NIET bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT','Meldings afdeling is met succes bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT_ERROR','Error: Meldings afdeling is NIET bijgewerkt');
define('_XHELP_MESSAGE_CLAIM_OWNER','U claimde het eigenaarsschap van de melding');
define('_XHELP_MESSAGE_CLAIM_OWNER_ERROR','Error: eigenaat ticket is niet geclaimd');
define('_XHELP_MESSAGE_ASSIGN_OWNER','U heeft de eigenaar met succes toegewezen');
define('_XHELP_MESSAGE_ASSIGN_OWNER_ERROR','Error: er is GEEN eigenaar toegewezen');
define('_XHELP_MESSAGE_UPDATE_OWNER','U heeft de eigenaar van de melding met succes bijgewerkt.');
define('_XHELP_MESSAGE_ADDFILE','Bestand is met succes ge-upload');
define('_XHELP_MESSAGE_ADDFILE_ERROR','Error: bestand is NIET geupload');
define('_XHELP_MESSAGE_ADDRESPONSE','Reactie met succes toegevoegd');
define('_XHELP_MESSAGE_ADDRESPONSE_ERROR','Error: reactie is NIET toegevoegd');
define('_XHELP_MESSAGE_UPDATE_CALLS_CLOSED_ERROR','Error: veld Gesloten meldingen is NIET bijgewerkt');
define('_XHELP_MESSAGE_ALREADY_OWNER','%s is al eigenaar van de melding');
define('_XHELP_MESSAGE_ALREADY_STATUS','Melding heeft deze status al');
define('_XHELP_MESSAGE_DELETE_TICKET','Melding is verwijderd');
define('_XHELP_MESSAGE_DELETE_TICKET_ERROR','Error: melding is NIET verwijderd');
define('_XHELP_MESSAGE_ADD_SIGNATURE','Handtekening is toegevoegd');
define('_XHELP_MESSAGE_ADD_SIGNATURE_ERROR','Error: Handtekening is NIET toegevoegd');
define('_XHELP_MESSAGE_RESPONSE_TPL','Voorgedefinieerde reacties zijn bijgewerkt');
define('_XHELP_MESSAGE_RESPONSE_TPL_ERROR','Error: reacties zijn NIET bijgewerkt');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL','Voorgedefinieerde reactie is verwijderd');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL_ERROR','Error: Voorgedefinieerde reactie is NIET verwijderd');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW','Overzicht is toegevoegd');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW_ERROR','Error: Overzicht is NIET toegevoegd');
define('_XHELP_MESSAGE_UPDATE_STAFF_ERROR','Error: mederwerker info is NIET bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_SIG_ERROR','Error: handtekening is NIET bijgewerkt');
define('_XHELP_MESSAGE_UPDATE_SIG','handtekening is bijgewerkt');
define('_XHELP_MESSAGE_EDITTICKET','Melding is bijgewerkt');
define('_XHELP_MESSAGE_EDITTICKET_ERROR','Error: Melding is NIET bijgewerkt');
define('_XHELP_MESSAGE_USER_MOREINFO','Melding is bijgewerkt.');
define('_XHELP_MESSAGE_USER_MOREINFO_ERROR','Error: er is GEEN informatie toegevoegd');
define('_XHELP_MESSAGE_USER_NO_INFO','Error: u heeft geen nieuwe informatie toegevoegd');
define('_XHELP_MESSAGE_EDITRESPONSE','antwoord is bijgewerkt');
define('_XHELP_MESSAGE_EDITRESPONSE_ERROR','Error: antwoord is NIET bijgewerkt');
define('_XHELP_MESSAGE_NOTIFY_UPDATE','Berichten zijn bijgewerkt');
define('_XHELP_MESSAGE_NOTIFY_UPDATE_ERROR','Berichten zijn NIET bijgewerkt');
define('_XHELP_MESSAGE_NO_NOTIFICATIONS','Gebruiker had geen berichten');
define('_XHELP_MESSAGE_NO_DEPTS','Error: er zijn geen afdelingen.');
define('_XHELP_MESSAGE_NO_STAFF','Error: er zijn geen medewerkers.');
define('_XHELP_MESSAGE_TICKET_REOPEN','Melding is heropend.');
define('_XHELP_MESSAGE_TICKET_REOPEN_ERROR','Error: Melding is NIET heropend.');
define('_XHELP_MESSAGE_TICKET_CLOSE','Melding is afgesloten.');
define('_XHELP_MESSAGE_TICKET_CLOSE_ERROR','Error: Melding is NIET afgesloten.');
define('_XHELP_MESSAGE_NOT_USER','Error: meldingen die niet zijn toegevoegd, kunnen niet heropend worden.');
define('_XHELP_MESSAGE_NO_TICKETS','Error: Geen meldingen geselecteerd.');
define('_XHELP_MESSAGE_NOOWNER','Geen eigenaar');
define('_XHELP_MESSAGE_UNKNOWN','Onbekend');
define('_XHELP_MESSAGE_WRONG_MIMETYPE','Error: bestandstype is niet toegestaan. Probeer opnieuw.');
define('_XHELP_MESSAGE_NO_UID','Error: geen gebruikers id gespecificeerd');
define('_XHELP_MESSAGE_NO_PRIORITY','Error: prioriteit is niet aangegeven');
define('_XHELP_MESSAGE_FILE_ERROR','Error: ge-upload bestand is niet opgeslagen om de volgende redenen:<br />%s');
define('_XHELP_MESSAGE_UPDATE_EMAIL_ERROR','Error: email is NIET bijgewerkt');
define('_XHELP_MESSAGE_TICKET_DELETE_CNFRM','Weet u zeker dat u deze meldingen wilt verwijderen?');
define('_XHELP_MESSAGE_DELETE_TICKETS','Meldingen zijn verwijderd');
define('_XHELP_MESSAGE_DELETE_TICKETS_ERROR','Error: Meldingen zijn NIET verwijderd');
define('_XHELP_MESSAGE_VALIDATE_ERROR','Uw melding bevat fouten, svp corrigeren.');
define('_XHELP_MESSAGE_UNAME_TAKEN',' wordt al gebruikt.');
define('_XHELP_MESSAGE_INVALID',' is ongeldig.');
define('_XHELP_MESSAGE_LONG',' is te lang.');
define('_XHELP_MESSAGE_SHORT',' is te kort.');
define('_XHELP_MESSAGE_NOT_ENTERED',' is niet ingevuld.');
define('_XHELP_MESSAGE_NOT_NUMERIC',' is niet numeriek.');
define('_XHELP_MESSAGE_RESERVED',' is gereserveerd.');
define('_XHELP_MESSAGE_NO_SPACES',' mag geen spaties bevatten');
define('_XHELP_MESSAGE_NOT_SAME',' is niet hetzelfdee.');
define('_XHELP_MESSAGE_NOT_SUPPLIED',' is niet geleverd.');
define('_XHELP_MESSAGE_CREATE_USER_ERROR','Gebruiker is NIET aangemaakt');
define('_XHELP_MESSAGE_NO_REGISTER','<col>Registration</col>elding is gesloten. U mag op dit moment geen melding verwerken.');
define('_XHELP_MESSAGE_NEW_USER_ERR','Error: uw gebruikers account is niet aangemaakt.');
define('_XHELP_MESSAGE_EMAIL_USED','Error: email is al geregistreerd.');

define('_XHELP_MESSAGE_UPLOAD_ALLOWED_ERR','Error: bestands upload is niet toegestaan voor de module.');
define('_XHELP_MESSAGE_UPLOAD_ERR','File %s from %s is niet verwerkt omdat %s.');

define('_XHELP_MESSAGE_NO_ADD_TICKET','U heeft geen toestemming om meldingen te verwerken.');
define('_XHELP_MESSAGE_NO_DELETE_TICKET','U heeft geen toestemming om meldingen te verwijderen.');
define('_XHELP_MESSAGE_NO_EDIT_TICKET','U heeft geen toestemming om meldingen te bewerken.');
define('_XHELP_MESSAGE_NO_CHANGE_OWNER','U heeft geen permissie om de eigenaar te wijzigen.');
define('_XHELP_MESSAGE_NO_CHANGE_PRIORITY','U heeft geen permissie om de prioriteit te wijzigen.');
define('_XHELP_MESSAGE_NO_CHANGE_STATUS','U heeft geen permissie om de status te wijzigen.');
define('_XHELP_MESSAGE_NO_ADD_RESPONSE','U heeft geen toestemming om meldingen toe te voegen.');
define('_XHELP_MESSAGE_NO_EDIT_RESPONSE','U heeft geen toestemming om meldingen te wijzigen.');

define('_XHELP_ERROR_INV_TICKET','Error: Ongeldige melding aangegeven.  Controleer de melding en probeer opnieuw!');
define('_XHELP_ERROR_INV_RESPONSE','Error: Ongeldige reactie aangegeven.  Controleer de melding en probeer opnieuw!');
define('_XHELP_ERROR_NODEPTPERM','U kunt geen reactie toevoegen aan deze melding. Reden: U bent geen medewerker van deze afdeling.');
define('_XHELP_ERROR_INV_STAFF','Error: Gebruiker is geen personeelslid.');
define('_XHELP_ERROR_INV_TEMPLATE','Error: Vul zowel de template naam als de tekst toe voor het toevoegen');
define('_XHELP_ERROR_INV_USER','Error: u heeft geen recht om deze melding te bekijken.');

define('_XHELP_TITLE_ADDTICKET','Verwerk xhelp Melding');
define('_XHELP_TITLE_ADDRESPONSE','Voeg reactie toe');
define('_XHELP_TITLE_EDITTICKET','Bewerk melding info');
define('_XHELP_TITLE_EDITRESPONSE','Bewerk reactie');
define('_XHELP_TITLE_SEARCH','Zoek');

define('_XHELP_TEXT_ID','ID:');
define('_XHELP_TEXT_NAME','Gebruikersnaam:');
define('_XHELP_TEXT_USER','Gebruiker:');
define('_XHELP_TEXT_USERID','Gebruikers ID:');
define('_XHELP_TEXT_LOOKUP','Opzoeken');
define('_XHELP_TEXT_LOOKUP_USER','Opzoeken Gebruiker');
define('_XHELP_TEXT_EMAIL','Email:');
define('_XHELP_TEXT_ASSIGNTO','Toewijzen aan:');
define('_XHELP_TEXT_PRIORITY','Prioriteit:');
define('_XHELP_TEXT_STATUS','Status:');
define('_XHELP_TEXT_SUBJECT','Onderwerp:');
define('_XHELP_TEXT_DEPARTMENT','Afdeling:');
define('_XHELP_TEXT_OWNER','Eigenaar:');
define('_XHELP_TEXT_CLOSEDBY','Gesloten door:');
define('_XHELP_TEXT_NOTAPPLY','N/A');
define('_XHELP_TEXT_TIMESPENT','Tijd Gespendeerd:');
define('_XHELP_TEXT_DESCRIPTION','Omschrijving:');
define('_XHELP_TEXT_ADDFILE','Voeg bestand toe:');
define('_XHELP_TEXT_FILE','Bestand:');
define('_XHELP_TEXT_RESPONSE','Reactie');
define('_XHELP_TEXT_RESPONSES','Reacties');
define('_XHELP_TEXT_CLAIMOWNER','Eis Eigenaarsschap:');
define('_XHELP_TEXT_CLAIM_OWNER','Eis Eigenaarsschap');
define('_XHELP_TEXT_TICKETDETAILS','Melding details');
define('_XHELP_TEXT_MINUTES','minuten');
define('_XHELP_TEXT_SEARCH','Zoeken:');
define('_XHELP_TEXT_SEARCHBY','Door:');
define('_XHELP_SEARCH_DESC','Omschrijving');
define('_XHELP_SEARCH_SUBJECT','Onderwerp');
define('_XHELP_TEXT_NUMRESULTS','Aantal resultaten per pagina:');
define('_XHELP_TEXT_RESULT1','5');
define('_XHELP_TEXT_RESULT2','10');
define('_XHELP_TEXT_RESULT3','25');
define('_XHELP_TEXT_RESULT4','50');
define('_XHELP_TEXT_SEARCH_RESULTS','Zoek resultaten');
define('_XHELP_TEXT_PREDEFINED_RESPONSES','Voorgedefinieerde reacties:');
define('_XHELP_TEXT_PREDEFINED0','-- Creeer reactie --');
define('_XHELP_TEXT_NO_USERS','Geen gebruikers gevonden');
define('_XHELP_TEXT_SEARCH_AGAIN','Opnieuw Zoeken');
define('_XHELP_TEXT_LOGGED_BY','Verwerkt door:');
define('_XHELP_TEXT_LOG_TIME','Verwerkingsduur:');
define('_XHELP_TEXT_OWNERSHIP_DETAILS','Eigenaar Details');
define('_XHELP_TEXT_ACTIVITY_LOG','Activiteiten Log bestand');
define('_XHELP_TEXT_HELPDESK_TICKET','Helpdesk Melding:');
define('_XHELP_TEXT_YES','Ja');
define('_XHELP_TEXT_NO','Nee');
define('_XHELP_TEXT_ALL_TICKETS','Alle Meldingen');
define('_XHELP_TEXT_HIGH_PRIORITY','Hoogste Prioriteit niet toegewezen meldingen');
define('_XHELP_TEXT_NEW_TICKETS','Nieuwe meldingen');
define('_XHELP_TEXT_MY_TICKETS','Open de door mij toegewezen meldingen');
define('_XHELP_TEXT_SUBMITTED_TICKETS','Door Mij Toegewezen Meldingen');
define('_XHELP_TEXT_ANNOUNCEMENTS','Mededelingen');
define('_XHELP_TEXT_MY_PERFORMANCE','Mijn Prestaties');
define('_XHELP_TEXT_RESPONSE_TIME','Gemiddelde reactie tijd:');
define('_XHELP_TEXT_RATING','Beoordeling:');
define('_XHELP_TEXT_NUMREVIEWS','Aantal Overzichten:');
define('_XHELP_TEXT_NUM_TICKETS_CLOSED','Aantal gesloten meldingen:');
define('_XHELP_TEXT_TEMPLATE_NAME','Template Naam:');
define('_XHELP_TEXT_MESSAGE','Bericht:');
define('_XHELP_TEXT_ACTIONS','Akties:');
define('_XHELP_TEXT_ACTIONS2','Akties');
define('_XHELP_TEXT_MY_NOTIFICATIONS','Mijn Berichten');
define('_XHELP_TEXT_SELECT_ALL','Selecteer Alles');
define('_XHELP_TEXT_USER_IP','Gebruikers IP:');
define('_XHELP_TEXT_OWNERSHIP','Eigenaar');
define('_XHELP_TEXT_ASSIGN_OWNER','Toewijzen Eigenaar');
define('_XHELP_TEXT_TICKET','Melding');
define('_XHELP_TEXT_USER_RATING','Beoordeling door gebruiker:');
define('_XHELP_TEXT_EDIT_RESPONSE','Wijzig Reactie');
define('_XHELP_TEXT_FILE_ADDED','Bestand Toegevoegd:');
define('_XHELP_TEXT_ACTION','Aktie:');
define('_XHELP_TEXT_LAST_TICKETS','Laatste toegevoegde meldingen door:');
define('_XHELP_TEXT_RATE_STAFF','Beoordeel Personeels Beoordeling');
define('_XHELP_TEXT_COMMENTS','Commentaar:');
define('_XHELP_TEXT_MY_OPEN_TICKETS','Mijn openstaande meldingen');
define('_XHELP_TEXT_RATE_RESPONSE','Beoordeel reactie?');
define('_XHELP_TEXT_RESPONSE_RATING','Reactie Beoordeling:');
define('_XHELP_TEXT_REOPEN_TICKET','Heropen Melding?');
define('_XHELP_TEXT_MORE_INFO','Meer informatie noodzakelijk?');
define('_XHELP_TEXT_REOPEN_REASON','Reden voor het heropenen (optie)');
define('_XHELP_TEXT_MORE_INFO2','Wilt u meer informatie aan de melding toeveoegen? Vul het hier in!');
define('_XHELP_TEXT_NO_DEPT','Geen Afdeling');
define('_XHELP_TEXT_NOT_EMAIL','Email Adres:');
define('_XHELP_TEXT_LAST_REVIEWS','Laatste Personeels Overzichten:');
define('_XHELP_TEXT_SORT_TICKETS','Sorteer meldingen in deze kolom');
define('_XHELP_TEXT_ELAPSED','Verstreken:');
define('_XHELP_TEXT_FILTERTICKETS','Filter Meldingen:');
define('_XHELP_TEXT_LIMIT','Records per pagina');
define('_XHELP_TEXT_SUBMITTEDBY','Toegevoegd door:');
define('_XHELP_TEXT_NO_INCLUDE','ANY');
define('_XHELP_TEXT_PRIVATE_RESPONSE','Persoonlijke reactie:');
define('_XHELP_TEXT_PRIVATE','Prive');
define('_XHELP_TEXT_CLOSE_TICKET','Sluit Melding?');
define('_XHELP_TEXT_ADD_SIGNATURE','Voeg handtekening toe aan meldingen?');
define('_XHELP_TEXT_LASTUPDATE','Laatste Update:');
define('_XHELP_TEXT_BATCH_ACTIONS','Batch Akties:');
define('_XHELP_TEXT_BATCH_DEPARTMENT','Wijzig Afdeling');
define('_XHELP_TEXT_BATCH_PRIORITY','Wijzig Prioriteit');
define('_XHELP_TEXT_BATCH_STATUS','Wijzig Status');
define('_XHELP_TEXT_BATCH_DELETE','Verwijder Meldingen');
define('_XHELP_TEXT_BATCH_RESPONSE','Reageer');
define('_XHELP_TEXT_BATCH_OWNERSHIP','Nemen/Toewijzen Eigenaar');
define('_XHELP_TEXT_UPDATE_COMP','Update Geslaagd!');
define('_XHELP_TEXT_TOPICS_ADDED','Onderwerpen Toegevoegd');
define('_XHELP_TEXT_DEPTS_ADDED','Afdelingen Toegevoegd');
define('_XHELP_TEXT_CLOSE_WINDOW','Sluit Venster');
define('_XHELP_TEXT_USER_LOOKUP','Gebruiker Opzoeken');
define('_XHELP_TEXT_EVENT','Gebeurtenis');
define('_XHELP_TEXT_AVAIL_FILETYPES','Beschikbare bestandstypes');
define('_XHELP_USER_REGISTER','Gebruikers registratie');

define('_XHELP_TEXT_SETDEPT','Kies een afdeling:');
define('_XHELP_TEXT_SETPRIORITY','Bepaal de prioriteit van de melding:');
define('_XHELP_TEXT_SETOWNER','Kies een eigenaar:');
define('_XHELP_TEXT_SETSTATUS','Bepaal de status van de melding:');

define('_XHELP_ROLE_NAME1','Melding Manager');
define('_XHELP_ROLE_NAME2','Support');
define('_XHELP_ROLE_NAME3','Verkenner');
define('_XHELP_ROLE_DSC1','Kan alles');
define('_XHELP_ROLE_DSC2','Verwerk meldingen en reacties, Wijzig status en prioriteit, en verwerk meldingen voor een gebruiker');
define('_XHELP_ROLE_DSC3','Kan geen wijzigingen aanbrengen');
define('_XHELP_ROLE_VAL1', 511);
define('_XHELP_ROLE_VAL2', 241);
define('_XHELP_ROLE_VAL3', 0);



// Ticket.php - Actions
define('_XHELP_TEXT_SELECTED','Met geselecteerde:');
define('_XHELP_TEXT_ADD_RESPONSE','Voeg reactie toe');
define('_XHELP_TEXT_EDIT_TICKET','Bewerk melding');
define('_XHELP_TEXT_DELETE_TICKET','Verwijder melding');
define('_XHELP_TEXT_PRINT_TICKET','Print Melding');
define('_XHELP_TEXT_UPDATE_PRIORITY','Update Prioriteit');
define('_XHELP_TEXT_UPDATE_STATUS','Update Status');

define('_XHELP_PIC_ALT_USER_AVATAR','Foto Gebruiker ');

// Index.php - Auto Refresh Page vars
define('_XHELP_TEXT_AUTO_REFRESH0','No Auto Refresh');
define('_XHELP_TEXT_AUTO_REFRESH1','Auto Refresh Every 1 minute');
define('_XHELP_TEXT_AUTO_REFRESH2','Auto Refresh Every 5 minutes');
define('_XHELP_TEXT_AUTO_REFRESH3','Auto Refresh Every 10 minutes');
define('_XHELP_TEXT_AUTO_REFRESH4','Auto Refresh Every 30 minutes');
define('_XHELP_AUTO_REFRESH0', 0);          // Change these to
define('_XHELP_AUTO_REFRESH1', 60);         // adjust the values
define('_XHELP_AUTO_REFRESH2', 300);        // in the select box
define('_XHELP_AUTO_REFRESH3', 600);
define('_XHELP_AUTO_REFRESH4', 1800);

define('_XHELP_MENU_MAIN','Hoofd');
define('_XHELP_MENU_LOG_TICKET','Verwerk Melding');
define('_XHELP_MENU_MY_PROFILE','Mijn Profiel');
define('_XHELP_MENU_ALL_TICKETS','Bekijk alle meldingen');
define('_XHELP_MENU_SEARCH','Zoek');

define('_XHELP_SEARCH_EMAIL','Email');
define('_XHELP_SEARCH_USERNAME','Gebruikersnaam');
define('_XHELP_SEARCH_UID','Gebruikers ID');

define('_XHELP_BUTTON_ADDRESPONSE','Voeg reactie toe');
define('_XHELP_BUTTON_ADDTICKET','Verwerk melding');
define('_XHELP_BUTTON_EDITTICKET','Wijzig melding');
define('_XHELP_BUTTON_RESET','Reset');
define('_XHELP_BUTTON_EDITRESPONSE','Update reactie');
define('_XHELP_BUTTON_SEARCH','Zoeken');
define('_XHELP_BUTTON_LOG_USER','Verwerk voor gebruiker');
define('_XHELP_BUTTON_FIND_USER','Zoek Gebruiker');
define('_XHELP_BUTTON_SUBMIT','Toevoegen');
define('_XHELP_BUTTON_DELETE','Verwijder');
define('_XHELP_BUTTON_UPDATE','Update');
define('_XHELP_BUTTON_UPDATE_PRIORITY','Update Proriteit');
define('_XHELP_BUTTON_UPDATE_STATUS','Update Status');
define('_XHELP_BUTTON_ADD_INFO','Voeg Info Toe');
define('_XHELP_BUTTON_SET','Set');

define('_XHELP_PRIORITY1', 1);
define('_XHELP_PRIORITY2', 2);
define('_XHELP_PRIORITY3', 3);
define('_XHELP_PRIORITY4', 4);
define('_XHELP_PRIORITY5', 5);

define('_XHELP_TEXT_PRIORITY1','High');
define('_XHELP_TEXT_PRIORITY2','Medium-High');
define('_XHELP_TEXT_PRIORITY3','Medium');
define('_XHELP_TEXT_PRIORITY4','Medium-Low');
define('_XHELP_TEXT_PRIORITY5','Low');

define('_XHELP_STATUS0','OPEN');
define('_XHELP_STATUS1','VASTHOUDEN');
define('_XHELP_STATUS2','GESLOTEN');

define('_XHELP_RATING0','Geen beoordeling');
define('_XHELP_RATING1','Mager');
define('_XHELP_RATING2','Onder het gemiddelde');
define('_XHELP_RATING3','Gemiddeld');
define('_XHELP_RATING4','Boven het gemiddelde');
define('_XHELP_RATING5','Uitstekend');

// Log Messages
define('_XHELP_LOG_ADDTICKET','Melding verwerkt');
define('_XHELP_LOG_ADDTICKET_FORUSER','Melding verwerkt voor %s by %s');
define('_XHELP_LOG_EDITTICKET','Melding informatie bewerkt');
define('_XHELP_LOG_UPDATE_PRIORITY','Prioriteit bijgewerkt van pri:%u to pri:%u');
define('_XHELP_LOG_UPDATE_STATUS','Status bijgewerkt van %s to %s');
define('_XHELP_LOG_CLAIM_OWNERSHIP','Toegeeigend eigenaarsschap');
define('_XHELP_LOG_ASSIGN_OWNERSHIP','eigenaarsschap toegewezen aan %s');
define('_XHELP_LOG_ADDRESPONSE','Reactie toegevoegd');
define('_XHELP_LOG_USER_MOREINFO','Meer info toegevoegd');
define('_XHELP_LOG_EDIT_RESPONSE','Reactie # %s gewijzigd');
define('_XHELP_LOG_REOPEN_TICKET','Melding heropend');
define('_XHELP_LOG_CLOSE_TICKET','Melding gesloten');
define('_XHELP_LOG_ADDRATING','Beoordeelde reactie %u');
define('_XHELP_LOG_SETDEPT','Toegewezen aan %s afdeling');

// Error checking for no records in DB
define('_XHELP_NO_TICKETS_ERROR','Geen meldingen gevonden');
define('_XHELP_NO_RESPONSES_ERROR','Geen reacties gevonden');
define('_XHELP_NO_FILES_ERROR','Geen bestanden gevonden');

define('_XHELP_SIG_SPACER','<br /><br />-------------------------------<br />');
define('_XHELP_COMMMENTS','Reactie?');
define("_XHELP_ANNOUNCE_READMORE","Lees verder...");
define("_XHELP_ANNOUNCE_ONECOMMENT","1 reactie");
define("_XHELP_ANNOUNCE_NUMCOMMENTS","%s reacties");
define("_XHELP_TICKET_MD5SIGNATURE","Support Sleutel:");


define('_XHELP_NO_OWNER','Geen eigenaar');
define('_XHELP_RESPONSE_EDIT','Reactie bijgewerkt door %s op %s');

define('_XHELP_TIME_SECS','seconden');
define('_XHELP_TIME_MINS','minuten');
define('_XHELP_TIME_HOURS','uren');
define('_XHELP_TIME_DAYS','dagen');
define('_XHELP_TIME_WEEKS','weken');
define('_XHELP_TIME_YEARS','jaren');

define('_XHELP_TIME_SEC','seconde');
define('_XHELP_TIME_MIN','minuut');
define('_XHELP_TIME_HOUR','uur');
define('_XHELP_TIME_DAY','dag');
define('_XHELP_TIME_WEEK','week');
define('_XHELP_TIME_YEAR','jaar');

define('_XHELP_MAILEVENT_CLASS0', 0);     // Connection message
define('_XHELP_MAILEVENT_CLASS1', 1);     // Parse message
define('_XHELP_MAILEVENT_CLASS2', 2);     // Storage message
define('_XHELP_MAILEVENT_CLASS3', 3);     // General message

define('_XHELP_MAILEVENT_DESC0','Kon geen verbinding maken met de server.');
define('_XHELP_MAILEVENT_DESC1','Kon de boodschap niet ontleden.');
define('_XHELP_MAILEVENT_DESC2','Kon de boodschap niet opslaan.');
define('_XHELP_MAILEVENT_DESC3','');

define('_XHELP_MAIL_CLASS0','Connectie');
define('_XHELP_MAIL_CLASS1','Ontleden');
define('_XHELP_MAIL_CLASS2','Opslag');
define('_XHELP_MAIL_CLASS3','Algemeen');

define('_XHELP_TEXT_TICKET_LISTS','Melding Overzichten');
define('_XHELP_TEXT_LIST_NAME','Overzicht Naam');
define('_XHELP_TEXT_CREATE_NEW_LIST','Maak Nieuw Overzicht');
define('_XHELP_TEXT_NO_RECORDS','Geen Records Gevonden');
define('_XHELP_TEXT_EDIT','Bewerk');
define('_XHELP_TEXT_DELETE','Verwijder');
define('_XHELP_TEXT_CREATE_SAVED_SEARCH','Opslaan Zoekopdracht');
define('_XHELP_MSG_ADD_TICKETLIST_ERR','Fout: meldingen overzicht is niet gecreëerd.');
define('_XHELP_MSG_DEL_TICKETLIST_ERR','Fout: meldingen overzicht is niet verwijderd.');
define('_XHELP_MSG_NO_ID','Fout: u heeft geen id. ingevuld.');
define('_XHELP_TEXT_VIEW_MORE_TICKETS','Bekijk Meer Meldingen');
?>