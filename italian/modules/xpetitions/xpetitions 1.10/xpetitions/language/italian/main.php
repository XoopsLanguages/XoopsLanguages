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

// index
define("_MD_XPETITIONS_INDEX",			"Petizioni online");
define("_MD_XPETITIONS_SIGNATURES",		"firme");
define("_MD_XPETITIONS_ARCHIVE",		"Petizioni archiviate");
define("_MD_XPETITIONS_HOME_NAV",		"Homepage");
define("_MD_XPETITIONS_HOME_NAV_SIGN",		"Firma la petizione");
define("_MD_XPETITIONS_HOME_NAV_SIGN_RECORDED",	"Firma registrata");
define("_MD_XPETITIONS_HOME_NAV_PRESIGNED",	"Firma in attesa di validazione");
define("_MD_XPETITIONS_HOME_NAV_SIGN_VALID",	"Firma confermata");
define("_MD_XPETITIONS_HOME_NAV_FRIEND",	"Invita un amico");
define("_MD_XPETITIONS_HOME_NAV_VALID",		"Conferma la firma");
define("_MD_XPETITIONS_HOME_NAV_ALLSIGNS",	"Vedi le firme");
define("_MD_XPETITIONS_HOME_TAB1",		"Petizioni online");
define("_MD_XPETITIONS_HOME_TAB2",		"Petizioni in archivio");
define("_MD_XPETITIONS_NO_ACTIVE",		"Nessuna petizione disponibile per la firma.");
define("_MD_XPETITIONS_NO_ARCHIVE",		"Nessuna petizione in archivio.");
define("_MD_XPETITIONS_NO_DETAIL",		"Nessuna informazione per questa petizione");
define("_MD_XPETITIONS_OFFLINE",		"Petizione disattivata");

// formulaire de signature d'une petition
define("_MD_XPETITIONS_TITLE_SIGNFORM",		"<br />Compila questo form per firmare la petizione.<br />Una richiesta via %s &egrave; necessaria per convalidare la firma.<br />Tutti i campi contrassegnati con * sono richiesti.<br /><br />");
define("_MD_XPETITIONS_TITLE_SIGNFORM1",	"email");
define("_MD_XPETITIONS_TITLE_SIGNFORM2",	"Doppio click");
define("_MD_XPETITIONS_FNAME_SIGNFORM",		"Nome");
define("_MD_XPETITIONS_LNAME_SIGNFORM",		"Cognome");
define("_MD_XPETITIONS_ADDRESS_SIGNFORM",	"Indirizzo");
define("_MD_XPETITIONS_ZIP_SIGNFORM",		"CAP");
define("_MD_XPETITIONS_CITY_SIGNFORM",		"Citt&agrave;");
define("_MD_XPETITIONS_COUNTRY_SIGNFORM",	"Nazione");
define("_MD_XPETITIONS_JOB_SIGNFORM",		"Occupazione");
define("_MD_XPETITIONS_EMAIL_SIGNFORM",		"Indirizzo Email");
define("_MD_XPETITIONS_SUBMIT",			"Firma la petizione");
define("_MD_XPETITIONS_CAPTCHA",		"Inserisci il testo visualizzato nell'immagine.<br />Rispetta le maiuscole e le minuscole.<br />Se non riesci a leggere il testo, puoi cambiarlo cliccando sull'immagine.");
define("_MD_XPETITIONS_CAPTCHA_DSC",		"Verifica Anti-spam");

// formulaire de présignature d'une pétition
define('_MD_XPETITIONS_SIGN_PRESIGNED',		'Grazie per aver firmato questa petizione.<br />La tua firma verr&agrave; memorizzata nel nostro database dopo che avrai cliccato il bottone sottostante.<br/> Il tuo nome apparir&agrave; nella lista dei firmatari.<br /><br />');

//urbanspaceman 22/05/09
define("_MD_XPETITIONS_WHOVIEW1",	"Le firme di questa petizione sono pubbliche");
define("_MD_XPETITIONS_WHOVIEW2",	"Le firme di questa petizione sono visibili solo agli utenti registrati");
define("_MD_XPETITIONS_WHOVIEW3",	"Le firme di questa petizione sono visibili solo all'amministratore del sito");
//

define('_MD_XPETITIONS_PRESIGN_VALUE',		'Conferma la tua firma');

// formulaire pour prevenir un ami
define("_MD_XPETITIONS_TITLE_FRIENDFORM",	"<br />Compila questo form per invitare un amico a firmare la petizione.<br />Ricever&agrave; una mail con il link alla petizione.<br />Tutti i campi sono richiesti.<br /><br />");
define("_MD_XPETITIONS_YNAME_FRIENDFORM",	"Il nome del tuo amico");
define("_MD_XPETITIONS_FNAME_FRIENDFORM",	"Il tuo nome");
define("_MD_XPETITIONS_FEMAIL_FRIENDFORM",	"Indirizzo mail del tuo amico");
define("_MD_XPETITIONS_SUBMIT_FRIEND",		"Invita");
define("_MD_XPETITIONS_EMAIL_FORMAT_FRIENDFORM","Messaggio inviato :");
define("_MD_XPETITIONS_EMAIL_FORMAT_DSC",	"<span style='font-weight: bold;' id='contact'></span>");
define("_MD_XPETITIONS_EMAIL_FRIENDFORM",	"Ciao <span style='font-weight: bold;' id='your_name'></span>,<br /><br /><span style='font-weight: bold;' id='friend_name'></span> ti ha inviato un messaggio da questo sito: <span style='font-weight: bold;'>%s</span>.<br />Puoi firmare la petizione '(<span style='font-weight: bold;'>%s</span>)' al seguente indirizzo:<br /><span style='font-weight: bold;'>%s</span><br /><br />Grazie<br />Arrivederci.<br />");
define("_MD_XPETITIONS_EMAIL_FRIENDFORM_SEND",	"Ciao %s,\n\n%s ti ha inviato un messaggio da questo sito: %s.\nPuoi firmare la petizione '(%s)' al seguente indirizzo:\n%s\n\Grazie\nArrivederci\n\n%s\n%s\n%s");
define("_MD_XPETITIONS_EMAIL_SEND",		"La mail &egrave; stata inviata correttamente al tuo amico.<br />Grazie per esserti interessato al nostro sito.");
define("_MD_XPETITIONS_SUBJECT_EMAIL",		"Petizione dal sito web %s");

// enregistrement d'une signature
define("_MD_XPETITIONS_SIGN_RECORDED",		"Grazie per aver firmato la nostra petizione online.<br /><br />La tua firma &egrave; ora registrata nel nostro database. Tuttavia, devi confermare la firma cliccando sul link che ti abbiamo mandato via mail.<br />Una volta cliccato il link, la tua firma verr&agrave; conteggiata.");
define("_MD_XPETITIONS_SIGN_VALID",		"La tua firma &egrave; stata confermata.<br />Adesso &egrave; visibile nella lista dei firmatari.<br />Grazie per il supporto.");
define("_MD_XPETITIONS_SIGN_ERROR",		"Si &egrave; verificato un errore durante la registrazione della tua firma nel nostro database.<br />Potrebbe trattarsi di un errore di trasferimento dati.<br />Riprova nuovamente. Se il problema persiste, contattaci via mail.<br /><br />Ci scusiamo per l'inconvenienza.");

// signature en double
define("_MD_XPETITIONS_SIGN_DOUBLE",		"Il tuo nome e/o indirizzo mail risultano gi&agrave; registrati nel nostro database.<br />Se si tratta di un errore di battitura ricompila il form,<br />altrimenti significa che hai gi&agrave; firmato questa petizione.<br /><a href='javascript:history.go(-1)'>Torna al form</a>");

// voir toutes les signatures
define("_MD_XPETITIONS_TITLE_ALLSIGNS",		"Lista delle firme:<br /><br />");
define("_MD_XPETITIONS_CPT_ALLSIGNS",		"firme registrate");
define("_MD_XPETITIONS_ALL_ALLSIGNS",		"Tutte");
define("_MD_XPETITIONS_ALLSIGNS_CHOOSE",	"Scegli una lettera.");
define("_MD_XPETITIONS_ALLSIGNS_NOLETTER",	"Nessuna firma che comincia per %s.");
define("_MD_XPETITIONS_ALLSIGNS_NOLETTER_ALL",	"Nessuna firma.");
define("_MD_XPETITIONS_ALLSIGNS_LETTER",	"Firme che iniziano con ");
define("_MD_XPETITIONS_ALLSIGNS_LETTER_ALL",	"Tutte le firme della petizione:");

// email message
define("_MD_XPETITIONS_SUBJECT_EMAIL_SIGN1",	"Firme per la petizione '%s'");

// message
define("_MD_XPETITIONS_ERROR_BLANK",		"Alcuni campi richiesti sono vuoti!!!");
define("_MD_XPETITIONS_CAPTCHA_ERROR",		"Il codice Anti-spam inserito non &egrave; corretto. Riprova!");
define("_MD_XPETITIONS_ERROR_INSERT",		"Errore durante il salvataggi odei dati nel database!!!");
define("_MD_XPETITIONS_ERROR_EMAIL",		"Questo non &egrave; un indirizzo Email valido. Controlla l'indirizzo Email.");
define("_MD_XPETITIONS_EMAIL_SEND_ERROR",	"Errore durante l'invio della Email. Riprova.");
define("_MD_XPETITIONS_FORM_REQUIRED",		"&nbsp;&nbsp;* Richiesto");
define("_MD_XPETITIONS_ERROR_BLANK_ADDRESS",	"Il campo 'Indirizzo' &egrave; vuoto !!!");
define("_MD_XPETITIONS_ERROR_BLANK_ZIP",	"Il campo 'CAP' &egrave; vuoto !!!");
define("_MD_XPETITIONS_ERROR_BLANK_CITY",	"Il campo 'Citt&agrave;' &egrave; vuoto !!!");
define("_MD_XPETITIONS_ERROR_BLANK_COUNTRY",	"Il campo 'Nazione' &egrave; vuoto !!!");
define("_MD_XPETITIONS_ERROR_BLANK_JOB",	"Il campo 'Occupazione' &egrave; vuoto !!!");

// Captcha Text
define("_MD_XPETITIONS_CAPTCHA_STRING",		"abcdefghijklmnopqrstuvwxyz");
define("_MD_XPETITIONS_CAPTCHA_TXT_1",		"quale lettera si trova tra");
define("_MD_XPETITIONS_CAPTCHA_TXT_2",		"Quanto fa");
define("_MD_XPETITIONS_CAPTCHA_TXT_3",		"Qual è");
define("_MD_XPETITIONS_CAPTCHA_TXT_4",		"carattere in");
define("_MD_XPETITIONS_CAPTCHA_TXT_5",		"");
define("_MD_XPETITIONS_CAPTCHA_TXT_LESS",	"meno");
define("_MD_XPETITIONS_CAPTCHA_TXT_MORE",	"più");
define("_MD_XPETITIONS_CAPTCHA_TXT_TIMES",	"per");
define("_MD_XPETITIONS_CAPTCHA_TXT_IN",		"In");
define("_MD_XPETITIONS_CAPTCHA_TXT_AND",	"e");
define("_MD_XPETITIONS_CAPTCHA_TXT_THE",	"il");
define("_MD_XPETITIONS_CAPTCHA_TXT_THEFIRST",	"il primo");
define("_MD_XPETITIONS_CAPTCHA_TXT_THESECOND",	"il secondo");
define("_MD_XPETITIONS_CAPTCHA_TXT_THELAST",	"l'ultimo");
define("_MD_XPETITIONS_CAPTCHA_TXT_THELASTFRONT","il primo");
define("_MD_XPETITIONS_CAPTCHA_TXT_ZERO",	"zero");
define("_MD_XPETITIONS_CAPTCHA_TXT_ONE",	"uno");
define("_MD_XPETITIONS_CAPTCHA_TXT_TWO",	"due");
define("_MD_XPETITIONS_CAPTCHA_TXT_THREE",	"tre");
define("_MD_XPETITIONS_CAPTCHA_TXT_FOUR",	"quattro");
define("_MD_XPETITIONS_CAPTCHA_TXT_FIVE",	"cinque");
define("_MD_XPETITIONS_CAPTCHA_TXT_SIX",	"sei");
define("_MD_XPETITIONS_CAPTCHA_TXT_SEVEN",	"sette");
define("_MD_XPETITIONS_CAPTCHA_TXT_EIGHT",	"otto");
define("_MD_XPETITIONS_CAPTCHA_TXT_NINE",	"nove");
define("_MD_XPETITIONS_CAPTCHA_TXT_TEN",	"dieci");
?>
