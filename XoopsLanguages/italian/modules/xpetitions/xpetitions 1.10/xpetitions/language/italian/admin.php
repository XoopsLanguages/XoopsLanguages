<?php
/* ******************************************* */
/*                INFORMATUX                   */
/*         http://www.informatux.com/          */
/*       SOLUTIONS AND WEB DEVELOPMENT         */
/*             Patrice BOUTHIER                */
/*                   2008                      */
/* ------------------------------------------- */
/*    XOOPS - PHP Content Management System    */
/*         Copyright (c) 2000 XOOPS.org        */
/*            <http://www.xoops.org/>          */
/* ******************************************* */

define("_AM_XPETITIONS_XOOPS_PRO",		"http://www.informatux.com/");
define("_AM_XPETITIONS_XOOPS_PRO1",		"Support and updates available at ");
define("_AM_XPETITIONS_XOOPS_PRO2",		"WEB solutions and development");
define("_AM_XPETITIONS_XOOPS_PRO3",		"Do you need help with this module?");

// * index.php *
define("_AM_XPETITIONS_INDEX_HELP1",		"<b>HELP</b>");
define("_AM_XPETITIONS_INDEX_HELP2",		"- Clicca sul nome di una petizione per aprire la pagina dedicata.<br />- La data visualizzata riferisce alla messa online della petizione.<br />- Lo stato della petizione pu&ograve; assumere tre valori:<br />* <b style='color: green;'>Attiva</b> (La petizione pu&ograve; essere firmata)<br />* <b style='color: orange;'>Offline</b> (La petizione non viene visualizzata e non pu&ograve; essere firmata)<br />* <b style='color: red;'>Archiviata</b> (La petizione viene visualizzata in archivio ma non pu&ograve; essere firmata)<br />- Azioni possibili:<br />* Modifiche (E' possibile modificare tutto tranne il nome della tabella che contiene le firme)<br />* Eliminazione (La petizione viene cancellata dal sistema, comprese tutte le firme ad essa associate. Se vuoi mantenere la petizione e tutte le firme senza cancellarla ma rendendola non visibile, mettila nello stato 'Offline')");
define("_AM_XPETITIONS_INDEX",			"Homepage");
define("_AM_XPETITIONS_CREATION",		"Crea");
define("_AM_XPETITIONS_MODIFICATION",		"Modifica");
define("_AM_XPETITIONS_SIGNATURE",		"Gestisci firme");
define("_AM_XPETITIONS_EMAILS",			"Gestisci Email");
define("_AM_XPETITIONS_FIELD",			"Gestisci campi");
define("_AM_XPETITIONS_CAPTCHA",		"Captchas");
define("_AM_XPETITIONS_GENERALSET",		"Preferenze");
define("_AM_XPETITIONS_GOTOMOD",		"Vai al modulo");
define("_AM_XPETITIONS_MODULEADMIN",		"ADMIN");
define("_AM_XPETITIONS_HELP",			"Help");
define("_AM_XPETITIONS_PETITIONS_CREATE",	"Petizioni esistenti : ");
define("_AM_XPETITIONS_PETITIONS_ONLINE",	"Petizioni attive: ");
define("_AM_XPETITIONS_PETITIONS_OFFLINE",	"Petizioni Offline: ");
define("_AM_XPETITIONS_PETITIONS_ARCHIVE",	"Petizioni archiviate:");
define("_AM_XPETITIONS_SIGNATURE_NOVALID",	"Firme in attea di conferma: ");
define("_AM_XPETITIONS_INDEX_SUMMARY",		"Index");
define("_AM_XPETITIONS_CREATE",			"Crea");
define("_AM_XPETITIONS_CREATE_BUTTON",		"Crea una petizione");
define("_AM_XPETITIONS_INDEX_TAB1",		"Id");
define("_AM_XPETITIONS_INDEX_TAB2",		"Petizioni online");
define("_AM_XPETITIONS_INDEX_TAB3",		"Data");
define("_AM_XPETITIONS_INDEX_TAB4",		"Stato");
define("_AM_XPETITIONS_INDEX_TAB5",		"Azione");
define("_AM_XPETITIONS_NONE",			"Nessuna petizione da visualizzare");
define("_AM_XPETITIONS_CHECK1",			"Creazione della directory per l'upload dei file (%s) : %s");
define("_AM_XPETITIONS_CHECK2",			"Permessi di scrittura per la directory di upload : %s");
define("_AM_XPETITIONS_CHECK3",			"Permessi di scrittura per la directory \"csv\" : %s");
define("_AM_XPETITIONS_CHECK4",			"Php version >= 5.1.0 (csv creation) : %s");

// * petitions.php *
define("_AM_XPETITIONS_TITLE1_ADDFORM",		"Crea una petizione");
define("_AM_XPETITIONS_TITLE1_EDITFORM",	"Modifica una petizione");
define("_AM_XPETITIONS_NAME_ADDFORM",		"Nome");
define("_AM_XPETITIONS_NAME_ADDFORM_DSC",	"Nome della tabella MySQL per la petizione (il nome non pu&ograve; contenere spazi o caratteri speciali)<br />Esempio: mypetition<br /><span style='color: red;'>Questo campo non pu&ograve; essere modificato</span>");
define("_AM_XPETITIONS_TITLE2_ADDFORM",		"Titolo");
define("_AM_XPETITIONS_TITLE2_ADDFORM_DSC",	"Titolo della petizione che vedranno i visitatori");
define("_AM_XPETITIONS_DESC_ADDFORM",		"Descrizione");
define("_AM_XPETITIONS_DESC_ADDFORM_DSC",	"Inserisci qui il testo della petizione");
define("_AM_XPETITIONS_EMAIL_ADDFORM",		"Indirizzo mail per la risposta");
define("_AM_XPETITIONS_EMAIL_ADDFORM_DSC",	"Indirizzo mail dal quale viene inviata la mail di conferma.<br />Esempio: noreply@mysite.com");
define("_AM_XPETITIONS_STATUS_ADDFORM",		"Stato");
define("_AM_XPETITIONS_STATUS_ADDFORM_DSC",	"Stato della petizione");

// ---------------------------------------------------------------------------------------------
//                                      22/05/09 urbanspaceman mod
// ---------------------------------------------------------------------------------------------
define("_AM_XPETITIONS_WHOVIEW_ADDFORM",	"Chi può vedere le firme di questa petizione?");
define("_AM_XPETITIONS_WHOVIEW_ADDFORM_DSC",	"Scegli quale gruppo di utenti può consultare le firme di questa petizione");
define("_AM_XPETITIONS_WHOVIEW1",		"Tutti");
define("_AM_XPETITIONS_WHOVIEW2",		"Utenti registrati");
define("_AM_XPETITIONS_WHOVIEW3",		"Admin");
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------

define("_AM_XPETITIONS_DATE_ADDFORM",		"Data");
define("_AM_XPETITIONS_DATE_ADDFORM_DSC",	"Data inizio petizione");
define("_AM_XPETITIONS_FILE_ADDFORM",		"Carica file");
define("_AM_XPETITIONS_FILE_ADDFORM_DSC",	"Puoi aggiungere un file PDF o DOC contenente il testo della petizionem in questo modo l'utente pu&ograve; stampare una copia per la conservazione (Se carichi un file, un link per il download apparir&agrave; nella toolbar della petizione).");
define("_AM_XPETITIONS_BREAK_ADDFORM",		"<b>Carica una versione della petizione per la stampa</b>");
define("_AM_XPETITIONS_FILE_SHOW_ADDFORM",	"File caricato");
define("_AM_XPETITIONS_FILE_SHOW_ADDFORM_DSC",	"Per visualizzare il file clicca sul suo nome.<br />Per cancellarlo, spunta la casella e conferma.<br />Per cambiarlo o aggiornarlo, carica un nuovo file (questo non cancella il file gi&agrave; presente, se prima non hai spuntato la casella)");
define("_AM_XPETITIONS_DELETE_FILE_ADDFORM",	"Cancella file");
define("_AM_XPETITIONS_STATUS1",		"attiva");
define("_AM_XPETITIONS_STATUS2",		"offline");
define("_AM_XPETITIONS_STATUS3",		"archivio");
define("_AM_XPETITIONS_SUBMIT",			"Salva");
define("_AM_XPETITIONS_DELETE",			"Cancella");
define("_AM_XPETITIONS_PREVIEW",		"Visualizza");
define("_AM_XPETITIONS_ERROR_INSERT",		"Errore durante il salvataggio dei dati nel database!!!");
define("_AM_XPETITIONS_ERROR_UPDATE",		"Errore durante l'aggiornamento del database!!!");
define("_AM_XPETITIONS_ERROR_DELETE",		"Errore durante l'eliminazione dei dati dal database!!!");
define("_AM_XPETITIONS_ERROR_BLANK",		"Alcuni campi richiesti sono vuoti!!!");
define("_AM_XPETITIONS_SIGN_DOUBLE",		"La firma esiste gi&agrave; all'interno del nostro database!");
define("_AM_XPETITIONS_VALID_INSERT",		"Creata con successo!");
define("_AM_XPETITIONS_VALID_UPDATE",		"Database aggiornato con successo!");
define("_AM_XPETITIONS_VALID_DELETE",		"Eliminazione avvenuta con successo!");
define("_AM_XPETITIONS_DELETE_CONFIRM",		"Sei sicuro di voler cancellare questa petizione?<br />Questa operazione eliminer&agrave; tutte le firme associate.");
define("_AM_XPETITIONS_DELETE_SIGN",		"Sei sicuro di voler cancellare questa firma?");
define("_AM_XPETITIONS_ERROR_FILE_UPLOAD",	"Errore durante il caricamento del file!!!");

// * signature.php *
define("_AM_XPETITIONS_SIGN_TAB",		"FIRME");
define("_AM_XPETITIONS_SIGN_TAB1",		"Id");
define("_AM_XPETITIONS_SIGN_TAB2",		"Petizioni online");
define("_AM_XPETITIONS_SIGN_TAB3",		"Data");
define("_AM_XPETITIONS_SIGN_TAB4",		"Registrate");
define("_AM_XPETITIONS_SIGN_TAB5",		"Confermate");
define("_AM_XPETITIONS_SIGN_TAB6",		"Non confermate");
define("_AM_XPETITIONS_SIGN_HELP1",		"<b>HELP</b>");
define("_AM_XPETITIONS_SIGN_HELP2",		"- Cliccando su 'Registrate'verranno visualizzate tutte le firme inviate dai visitatori.<br />- Cliccando su 'Confermate' tutte le firme attive verranno salvate in un file (.csv).<br />- Cliccando su 'Non confermate' puoi inviare una mail di segnalazione a tutti quelli che hanno firmato la petizione ma non l'hanno ancora confermata.<br />- Se vuoi aggiungere o rimuovere manualmente delle firme (ad esempio quelle raccolte su carta), clicca su 'Registra/elimina firme manualmente'.");
define("_AM_XPETITIONS_SIGN_HELP3",		"Puoi personalizzare la mail da inviare a quanti hanno firmato la petiazione ma non confermato. Puoi inserire i seguenti tags (completi di segni di punteggiatura) all'interno del messaggio:<br />{USER_NAME} : Nome della persona che ha firmato la petizione.<br />{USER_EMAIL} : Il suo indirizzo email.<br />{LINK_URL} : Il link per confermare la firma.<br />{SITE_NAME} : Il nome del tuo sitoweb.<br />{SITE_URL} : L'indirizzo del tuo sitoweb.<br />");
define("_AM_XPETITIONS_SAVE_SIGN",		"Registra/elimina firme manualmente");
define("_AM_XPETITIONS_DEL_SIGN",		"Elimina firma");
define("_AM_XPETITIONS_DEL_TITLE",		"Clicca sulla petizione per visualizzare le firme");
define("_AM_XPETITIONS_SIGN_DETAIL",		"Hanno firmato questa petizione:");
define("_AM_XPETITIONS_SIGN_DETAIL1",		"Cognome");
define("_AM_XPETITIONS_SIGN_DETAIL2",		"Nome");
define("_AM_XPETITIONS_SIGN_DETAIL3",		"Nazione");
define("_AM_XPETITIONS_SIGN_DETAIL4",		"Indirizzo email");
define("_AM_XPETITIONS_SIGN_DETAIL5",		"Citt&agrave;");
define("_AM_XPETITIONS_SIGN_DETAIL6",		"Occupazione");
define("_AM_XPETITIONS_SIGN_DETAIL7",		"Data");
define("_AM_XPETITIONS_SIGN_DETAIL8",		"Confermata");
define("_AM_XPETITIONS_SIGN_NONE",		"Nessuna firma da visualizzare");
define("_AM_XPETITIONS_TITLE_LATECOMERFORM",	"Invia una mail a chi non ha confermato la firma");
define("_AM_XPETITIONS_MESS_LATECOMER",		"Messaggio inviato a chi non ha ancora confermato la propria firma.<br /><i>(Consulta l'Help per i tag da inserire)</i>");
define("_AM_XPETITIONS_MSG_BUTTON_LATECOMER2",	"Invia una mail a %s firmatari che non hanno confermato la firma");
define("_AM_XPETITIONS_MSG_BUTTON_LATECOMER1",	"Invia una mail a %s firmatari che non hanno confermato la firma");
define("_AM_XPETITIONS_SUBMIT_LATECOMER",	"Invia messaggio");
define("_AM_XPETITIONS_EMAIL_SEND_LATECOMER",	"Messaggio inviato correttamente!");
define("_AM_XPETITIONS_LATECOMER_SEND_ERROR",	"Errore durante l'inviodel messaggio!!!");
define("_AM_XPETITIONS_SIGN_CSV_LASTNAME",	"NOME");
define("_AM_XPETITIONS_SIGN_CSV_FIRSTNAME",	"COGNOME");
define("_AM_XPETITIONS_SIGN_CSV_EMAIL",		"INDIRIZZO MAIL");
define("_AM_XPETITIONS_SIGN_CSV_ADDRESS",	"INDIRIZZO");
define("_AM_XPETITIONS_SIGN_CSV_ZIP",		"CAP");
define("_AM_XPETITIONS_SIGN_CSV_CITY",		"CITTA'");
define("_AM_XPETITIONS_SIGN_CSV_COUNTRY",	"Nazione");
define("_AM_XPETITIONS_SIGN_CSV_JOB",		"OCCUPAZIONE");
define("_AM_XPETITIONS_SIGN_CSV_DATE",		"DATA");
define("_AM_XPETITIONS_SIGN_CSV_IP",		"IP ADDRESS");
define("_AM_XPETITIONS_SIGN_CSV_INPROGRESS",	"Genera il file CSV...");
define("_AM_XPETITIONS_SIGN_CSV_SUCCESS",	"Il file CSV &egrave; stato generato con successo!");
define("_AM_XPETITIONS_SIGN_CSV_ERROR",		"Errore durante la generazione del file!<br />Forse non hai i permessi per scrivere nella cartella 'xpetitions/csv/'?");
define("_AM_XPETITIONS_SIGN_CSV_TITLE",		"<h1>ESTRAZIONE FIRME(Formato CSV)</h1>");
define("_AM_XPETITIONS_SIGN_CSV_PETITION",	"<u>Per la petizione:</u> ");
define("_AM_XPETITIONS_SIGN_HELP4",		"Help per la registrazione o la rimozione delle firme");
define("_AM_XPETITIONS_SIGN_SHOW",		"Impostazioni di visualizzazione firme");
define("_AM_XPETITIONS_TITLE_DELFORM",		"Elimina firme");
define("_AM_XPETITIONS_PETITIONS_DELFORM",	"Petizioni");
define("_AM_XPETITIONS_PETITIONS_DELFORM_DSC",	"Seleziona una petizione per vedere le sue firme");
define("_AM_XPETITIONS_SIGN_DELFORM",		"Firme");
define("_AM_XPETITIONS_SIGN_DELFORM_DSC",	"Seleziona la firma che desideri cancellare");

define("_AM_XPETITIONS_TITLE_ADDFORM",		"Registra firme");
define("_AM_XPETITIONS_FNAME_ADDFORM",		"Cognome");
define("_AM_XPETITIONS_LNAME_ADDFORM",		"Nome");
define("_AM_XPETITIONS_ADDRESS_ADDFORM",	"Indirizzo");
define("_AM_XPETITIONS_ZIP_ADDFORM",		"CAP");
define("_AM_XPETITIONS_CITY_ADDFORM",		"Citt&agrave;");
define("_AM_XPETITIONS_COUNTRY_ADDFORM",	"Nazione");
define("_AM_XPETITIONS_JOB_ADDFORM",		"Occupazione");
define("_AM_XPETITIONS_EEMAIL_ADDFORM",		"Indirizzo email");
define("_AM_XPETITIONS_DDATE_ADDFORM",		"Data della firma");
define("_AM_XPETITIONS_PETITIONS_ADDFORM",	"Nome della petizione (Tabella MySQL)");
define("_AM_XPETITIONS_FORCE_SIGN",		"Forza la validazione delle firme non convalidate");
define("_AM_XPETITIONS_FORCE_SIGN_CONFIRM",	"Vuoi confermare le firme non ancora convalidate per la petizione '%s' ?");

define("_AM_XPETITIONS_TITLE_SHOW_SIGN",	"Mostra le firme");
define("_AM_XPETITIONS_SELECT_SHOW",		"Tipo di visualizzazione delle firme");
define("_AM_XPETITIONS_SELECT_SHOW_DSC",	"Seleziona il tipo di visualizzazione per l'elenco delle firme.<br />Puoi visualizzarle incolonnate oppure in linea separate da una virgola.");
define("_AM_XPETITIONS_SELECT_SHOW1",		"In colonna");
define("_AM_XPETITIONS_SELECT_SHOW2",		"In linea");
define("_AM_XPETITIONS_SELECT_NBCOL",		"Numero di colonne");
define("_AM_XPETITIONS_SELECT_NBCOL_DSC",	"Se scegli la visualizzazione in colonne, devi scegliere il numero di colonne sulle quali verranno distribuite le firme.");
define("_AM_XPETITIONS_INFOS_SIGN",		"Informazioni visualizzate con le firme");
define("_AM_XPETITIONS_INFOS_SIGN_DSC",		"Seleziona quali informazioni vuoi che compaiano insieme alle firme.<br />Se non scegli nessuna opzione, verranno visualizzati solo il nome ed il cognome dei firmatari.<br /><br />Se scegli una o più opzioni, queste appariranno all'interno di parentesi come nell'esempio:<br />Patrice BOUTHIER <span style='font-weight: bold;'>(</span><span style='color: red;'>Web Developer - FRANCE - contact@informatux.com</span><span style='font-weight: bold;'>)</span>");
define("_AM_XPETITIONS_INFOS_SIGN1",		"Lavoro");
define("_AM_XPETITIONS_INFOS_SIGN2",		"Nazione");
define("_AM_XPETITIONS_INFOS_SIGN3",		"Email");
define("_AM_XPETITIONS_INFOS_SIGN4",		"Città");
define("_AM_XPETITIONS_INFOS_SIGN5",		"Data");
define("_AM_XPETITIONS_SIGN_HELP5",		"Choose here how the petitions signatures will be shown when the Internet users will consult them on your website.<br /><br /><span style='text-decoration: underline;'>Two choices :</span><br />- Display in column (also choose the number of columns)<br />- Display in line (separated by commas)<br /><br />Choose the formatting of a signature among the available options (job, country, email, city, date).<br />If you choose options, they will appear in brackets with the lastname and the firstname of the signatory.<br />If you do not choose option, only the lastname and the firstname will appear.");




// * email.php
define("_AM_XPETITIONS_TITLE_EMAILS",		"Gestione delcontenuto del messaggio inviato");
define("_AM_XPETITIONS_MESS_EMAIL_UN",		"Messaggio inviato ai firmatari che non hanno ancora confermato la loro firma");
define("_AM_XPETITIONS_SUB_EMAIL_UN",		"Messaggio inviato ai firmatari che non hanno ancora confermato la loro firma (Oggetto)");
define("_AM_XPETITIONS_SUBMIT_EMAILS",		"Modifica il messaggio");
define("_AM_XPETITIONS_MESS_EMAIL_UNDSC",	"Puoi inserire dei tag all'interno del messaggio (vedi Help)");
define("_AM_XPETITIONS_SUB_EMAIL_UNDSC", 	"Puoi inserire automaticamente il nome della petizione con questo tag {PETITION} e il nome del tuo sitoweb con questo {SITE_NAME} (copia esattamente la sintassi)");
define("_AM_XPETITIONS_SUB_EMAIL_TO",		"Messaggio di conferma inviato al momento della firma (Oggetto)");
define("_AM_XPETITIONS_SUB_EMAIL_TODSC",	"Puoi inserire automaticamente il nome della petizione con questo tag {PETITION} e il nome del tuo sitoweb con questo {SITE_NAME} (copia esattamente la sintassi)");
define("_AM_XPETITIONS_MESS_EMAIL_TO",		"Messaggio di conferma inviato al momento della firma");
define("_AM_XPETITIONS_MESS_EMAIL_TODSC",	"Puoi inserire dei tag all'interno del messaggio (vedi Help)");
define("_AM_XPETITIONS_MESS_EMAIL_HELP1",	"<b>Help</b>");
define("_AM_XPETITIONS_MESS_EMAIL_HELP2",	"<div style='font-weight: normal; text-align: center;'>Puoi inserire dei tag all'interno del corpo del messaggio (copia esattamente la sintassi) :</div><br /><table style='text-align: left; width: 100%;' border='0' cellpadding='0' cellspacing='0'><tbody><tr><td style='text-align: center; vertical-align: middle;'><span style='font-weight: bold; text-decoration: underline;'>Email ai firmatari che non hanno ancora confermato la loro firma</span></td><td style='text-align: center; vertical-align: middle;'><span style='font-weight: bold; text-decoration: underline;'>Email inviata al momento della firma</span></td></tr><tr><td style='width: 50%; text-align: center; vertical-align: top;'>{PETITION} nome della petizione<br />{USER_NAME} Nome completo del firmatario.<br />{USER_EMAIL} Email del firmatario.<br />{LINK_URL} Link per la validazione della firma.<br />{SITE_NAME} Nome del sitoweb.<br />{SITE_URL} Indirizzo del sitoweb.</td><td style='width: 50%; text-align: center; vertical-align: top;'>{PETITION} nome della petizione<br />{PRENOM} congnome del firmatario<br />{NOM} nome del firmatario<br />{INFOS} informazioni sulla firma <br />{VALIDATION} Link per la conferma della firma<br />{SITENAME} Nome del sitoweb<br />{SITESLOGAN} Slogan del sitoweb<br />{SITEURL} Indirizzo del sitoweb</td></tr></tbody></table>");
define("_AM_XPETITIONS_MESS_NONE",		"");

// * field.php
define("_AM_XPETITIONS_FIELD_HELP1",		"<b>Help</b>");
define("_AM_XPETITIONS_FIELD_HELP2",		"Gestione del form per le firme.<br /><br />Puoi scegliere di visualizzare o non visualizzare alcuni campi e renderne alcuni obbligatori.<br /><br />Se selezioni campo 'obbligatorio' ma non &egrave settato su 'visibile', questo non sar&agrave; visibile nel form e non potr&agrave; essere compilato. E' necessario che il campo sia visibile per renderlo 'Obbligatorio'.");
define("_AM_XPETITIONS_TITLE_FIELDS",		"Gestione campi del form per la raccolta firme");
define("_AM_XPETITIONS_FIELD_VISIBLE",		"Visibile&nbsp;&nbsp;");
define("_AM_XPETITIONS_FIELD_OBLIGATORY",	"Obbligatorio");
define("_AM_XPETITIONS_FIELD_1",		"Nome");
define("_AM_XPETITIONS_FIELD_2",		"Cognome");
define("_AM_XPETITIONS_FIELD_3",		"Indirizzo");
define("_AM_XPETITIONS_FIELD_4",		"CAP");
define("_AM_XPETITIONS_FIELD_5",		"Citt&agrave;");
define("_AM_XPETITIONS_FIELD_6",		"Nazione");
define("_AM_XPETITIONS_FIELD_7",		"Occupazione");
define("_AM_XPETITIONS_FIELD_8",		"Email");
define("_AM_XPETITIONS_SUBMIT_FIELDS",		"Modifica");
define("_AM_XPETITIONS_FIELD_NONE",		"");

// * captcha.php
define("_AM_XPETITIONS_TITLE_CAPTCHA",		"Seleziona il tuo CAPTCHA");
define("_AM_XPETITIONS_CAPTCHA_SAMPLES",	" tra quelli disponibili e visibile dal server");
define("_AM_XPETITIONS_STATUS_CAPTCHA",		"Status del controllo anti-spam (aggiorna le tue %s) : ");
define("_AM_XPETITIONS_CAPTCHA_SUBMIT",		"Valida il tuo controllo anti-spam");
define("_AM_XPETITIONS_CAPTCHA_HELP1",		"<b>Help</b>");
define("_AM_XPETITIONS_CAPTCHA_HELP2",		"Scegli il CAPTCHA adattato al server o alla linea del tuo sito.<br />	
Se lo stato del controllo anti-spam è <span style='color: red;'>NO</span>, il codice CAPTCHA non sarà visibile nei vostri form.");
define("_AM_XPETITIONS_CAPTCHA_CHOICE",		"Quale CAPTCHA vuoi usare?");
define("_AM_XPETITIONS_CAPTCHA_CHOICE1",	"Tipo 1 : CAPTCHA (K.OHWADA)");
define("_AM_XPETITIONS_CAPTCHA_CHOICE1A",	"Tipo 1");
define("_AM_XPETITIONS_CAPTCHA_CHOICE1_DSC",	"Per modificare le preferenze del'immagine CAPTCHA visualizzata nei tuoi form, modifica il file /xpetitions/class/captcha_x/captcha_x.ini<br />Le spiegazioni delle varie opzioni si trovano nel file.");
define("_AM_XPETITIONS_CAPTCHA_CHOICE2",	"Tipo 2 : CAPTCHA (JPGRAPH)");
define("_AM_XPETITIONS_CAPTCHA_CHOICE2A",	"Tipo 2");
define("_AM_XPETITIONS_CAPTCHA_CHOICE2_DSC",	"Per modificare le preferenze del'immagine CAPTCHA visualizzata nei tuoi form, modifica il file /xpetitions/generate.php<br />L'unica opzione presente è il numero di caratteri presenti nell'immagine.");
define("_AM_XPETITIONS_CAPTCHA_CHOICE3",	"Tipo 3 : CAPTCHA (TEXT)");
define("_AM_XPETITIONS_CAPTCHA_CHOICE3A",	"Tipo 3");
define("_AM_XPETITIONS_CAPTCHA_CHOICE3_DSC",	"Nessun settaggio necessario.<br />Le domande sono imprevedibili, ricaricare la pagina per visualizzare le altre domande.");

// * about.php *
define("_AM_XPETITIONS_ABOUT",			"About");

define("_AM_XPETITIONS_UPDATE",			"Aggiorna");
define("_AM_XPETITIONS_CANCEL",			"Rimuovi");

//1.11
define("_AM_XPETITIONS_EMAIL_NOTCONFIRMED_SUBJECT",'Pétition {PETITION} du site {SITE_NAME}');
define("_AM_XPETITIONS_EMAIL_NOTCONFIRMED_BODY",'Bonjour {USER_NAME},\r\n\r\n Vous avez récemment signé notre pétition en ligne "{PETITION}", mais vous avez omis de valider votre signature.\r\n\r\nNous vous offrons la possibilité de pouvoir le faire en cliquant sur ce lien: \r\n{LINK_URL}\r\n\r\nMerci de votre participation.\r\nL "administrateur.\r\n{SITE_NAME}\r\n{SITE_URL}');
define("_AM_XPETITIONS_EMAIL_SIGNED_SUBJECT",'Signature de la pétition "{PETITION}" du site "{SITENAME}"');
define("_AM_XPETITIONS_EMAIL_SIGNED_BODY",'Vous avez demandé à signer la pétition {PETITION} au nom de {PRENOM} {NOM} ({INFOS}).\r\n\r\nPour éviter toute mauvaise plaisanterie, nous vous demandons de confirmer votre signature.\r\nVotre signature ne sera validée qu"une fois cette opération effectuée.\r\n\r\nPour confirmer votre signature, il vous suffit de cliquer sur le lien ci-dessous :\r\n{VALIDATION}\r\n\r\nSi vous souhaitez ne pas confirmer cette signature, il vous suffit de ne pas répondre, les informations seront supprimées de notre base de données.\r\n\r\nCordialement,\r\n\r\n{SITENAME}\r\n{SITESLOGAN}\r\n{SITEURL}');