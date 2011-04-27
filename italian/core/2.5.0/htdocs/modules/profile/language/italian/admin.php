<?php
// $Id: admin.php 4751 2010-05-01 15:35:45Z trabis $
// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Ianez - Voodoo Team - Xoops Italia Staff
// Last translation update: 20/02/2011

define("_PROFILE_AM_FIELD", "Campo");
define("_PROFILE_AM_FIELDS", "Campi");
define("_PROFILE_AM_CATEGORY", "Categoria");
define("_PROFILE_AM_STEP", "Fase");

define("_PROFILE_AM_SAVEDSUCCESS", "%s salvato con successo");
define("_PROFILE_AM_DELETEDSUCCESS", "%s eliminato con successo");
define("_PROFILE_AM_RUSUREDEL", "Sei sicuro di voler eliminare %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "Non &egrave; possibile configurare il campo.");

define("_PROFILE_AM_ADD", "Aggiungi %s");
define("_PROFILE_AM_EDIT", "Modifica %s");
define("_PROFILE_AM_TYPE", "Tipo");
define("_PROFILE_AM_VALUETYPE", "Formato");
define("_PROFILE_AM_NAME", "Nome");
define("_PROFILE_AM_TITLE", "Titolo");
define("_PROFILE_AM_DESCRIPTION", "Descrizione");
define("_PROFILE_AM_REQUIRED", "Obbligatorio");
define("_PROFILE_AM_MAXLENGTH", "Massimo numero di caratteri");
define("_PROFILE_AM_WEIGHT", "Peso");
define("_PROFILE_AM_DEFAULT", "Default");
define("_PROFILE_AM_NOTNULL", "Not Null?");

define("_PROFILE_AM_ARRAY", "Set di valori (Array)");
define("_PROFILE_AM_EMAIL", "Email");
define("_PROFILE_AM_INT", "Numero (Integer)");
define("_PROFILE_AM_TXTAREA", "Area di testo");
define("_PROFILE_AM_TXTBOX", "Campo di testo");
define("_PROFILE_AM_URL", "URL");
define("_PROFILE_AM_OTHER", "Altro");
define("_PROFILE_AM_FLOAT", "Virgola Mobile");
define("_PROFILE_AM_DECIMAL", "Numero Decimale");
define("_PROFILE_AM_UNICODE_ARRAY", "Array Unicode");
define("_PROFILE_AM_UNICODE_EMAIL", "Email Unicode");
define("_PROFILE_AM_UNICODE_TXTAREA", "Area di testo Unicode");
define("_PROFILE_AM_UNICODE_TXTBOX", "Campo di testo Unicode");
define("_PROFILE_AM_UNICODE_URL", "URL Unicode");

define("_PROFILE_AM_PROF_VISIBLE_ON", "Campo visibile nel profilo utente di questi gruppi");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "Campo accessibile nel profilo utente per i seguenti gruppi");
define("_PROFILE_AM_PROF_VISIBLE", "Visualizzazione campi");
define("_PROFILE_AM_PROF_EDITABLE", "Modifica del campo nel profilo utente");
define("_PROFILE_AM_PROF_REGISTER", "Inserito in modulo di registrazione (selezionare fase)");
define("_PROFILE_AM_PROF_SEARCH", "Utilizzo del campo come parametro nella ricerca");
define("_PROFILE_AM_PROF_ACCESS", "Accesso ai profili");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>Gruppo Webmasters: Se un utente appartiene al Gruppo Webmasters il suo profilo &egrave; consultabile solo da quegli utenti il cui gruppo &egrave; stato specificamente autorizzato ad accedere al profilo del gruppo Webmasters.</li>" .
        "<li>Gruppi non standard: Se un utente appartiene a uno o diversi gruppi non standard (cio&egrave; non appartiene ai gruppi webmasters, utenti registrati, utenti anonimi) il suo profilo &egrave; consultabile soltanto da quegli utenti il cui gruppo &egrave; stato specificamente autorizzato ad accedere ai profili dei gruppi non standard.</li>" .
        "<li>Gruppo Utenti registrati: Se un utente appartiene SOLO al gruppo Utenti registrati, il suo profilo &egrave; consultabile solo da quegli utenti il cui gruppo &egrave; autorizzato ad accedere al profilo del gruppo Utenti registrati.</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE", "Il campo ");
define("_PROFILE_AM_FIELDVISIBLEFOR", " &egrave; visibile a ");
define("_PROFILE_AM_FIELDVISIBLEON", " quando accedono al profilo di un utente del gruppo ");
define("_PROFILE_AM_FIELDVISIBLETOALL", "Tutti");
define("_PROFILE_AM_FIELDNOTVISIBLE", "Non &egrave; visibile");

define("_PROFILE_AM_CHECKBOX", "Casella di spunta");
define("_PROFILE_AM_GROUP", "Selezione gruppo");
define("_PROFILE_AM_GROUPMULTI", "Selezione multipla gruppo");
define("_PROFILE_AM_LANGUAGE", "Selezione lingua");
define("_PROFILE_AM_RADIO", "Bottoni radio");
define("_PROFILE_AM_SELECT", "Menu a discesa");
define("_PROFILE_AM_SELECTMULTI", "Selezione multipla");
define("_PROFILE_AM_TEXTAREA", "Area di testo semplice");
define("_PROFILE_AM_DHTMLTEXTAREA", "Area di testo con editor");
define("_PROFILE_AM_TEXTBOX", "Campo di testo");
define("_PROFILE_AM_TIMEZONE", "Fuso orario");
define("_PROFILE_AM_YESNO", "Bottoni SI/No");
define("_PROFILE_AM_DATE", "Data");
define("_PROFILE_AM_AUTOTEXT", "Testo Automatico");
define("_PROFILE_AM_DATETIME", "Data e ora");
define("_PROFILE_AM_LONGDATE", "Data estesa");

define("_PROFILE_AM_ADDOPTION", "Aggiungi opzione");
define("_PROFILE_AM_REMOVEOPTIONS", "Rimuovi opzione");
define("_PROFILE_AM_KEY", "Valore da inserire");
define("_PROFILE_AM_VALUE", "Testo da visualizzare");

// User management
define("_PROFILE_AM_EDITUSER", "Modifica\Elimina Utente");
define("_PROFILE_AM_SELECTUSER", "Nome Utente");
define("_PROFILE_AM_ADDUSER","Nuovo Utente");
define("_PROFILE_AM_THEME","Tema");
define("_PROFILE_AM_RANK","Livello");
define("_PROFILE_AM_USERDONEXIT","L'utente non esiste!");
define("_PROFILE_MA_USERLEVEL", "Stato dell'utente");

define("_PROFILE_MA_ACTIVE", "Attivo");
define("_PROFILE_MA_INACTIVE", "Non Attivo");
define("_PROFILE_AM_USERCREATED", "Data di registrazione");

define("_PROFILE_AM_CANNOTDELETESELF", "Deleting your own account is not allowed - use your profile page to delete your own account");
define("_PROFILE_AM_CANNOTDELETEADMIN", "Non &egrave; permesso eliminare un account amministratore");

define("_PROFILE_AM_NOSELECTION", "Nessun utente selezionato");
define("_PROFILE_AM_USER_ACTIVATED", "Utente attivato");
define("_PROFILE_AM_USER_DEACTIVATED", "Utente disattivato");
define("_PROFILE_AM_USER_NOT_ACTIVATED", "Errore: Utente NON attivato");
define("_PROFILE_AM_USER_NOT_DEACTIVATED", "Errore: Utente NON disattivato");

define("_PROFILE_AM_STEPNAME", "Nome");
define("_PROFILE_AM_STEPORDER", "Ordine");
define("_PROFILE_AM_STEPSAVE", "Salvataggio al termine della compilazione");
define("_PROFILE_AM_STEPINTRO", "Descrizione");
?>