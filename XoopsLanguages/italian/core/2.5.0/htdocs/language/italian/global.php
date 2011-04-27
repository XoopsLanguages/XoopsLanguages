<?php
// $Id: global.php 5683 2010-11-01 11:03:22Z kris_fr $
// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Xoops Italia Team - www.xoopsitalia.org
// Last translation update: 08/03/2011
define("_PLEASEWAIT","Attendere prego...");
define("_FETCHING","Caricamento...");
define("_TAKINGBACK","Stai per essere riportato alla pagina in cui eri...");
define("_LOGOUT","Esci");
define("_SUBJECT","Oggetto");
define("_MESSAGEICON","Icona del messaggio");
define("_COMMENTS","Commenti");
define("_POSTANON","Invia come anonimo");
define("_DISABLESMILEY","Disabilita faccine");
define("_DISABLEHTML","Disabilita tag HTML");
define("_PREVIEW","Anteprima");
define("_GO","Vai!");
define("_NESTED","Annidati");
define("_NOCOMMENTS","Nessun commento");
define("_FLAT","Piatti");
define("_THREADED","Ad albero");
define("_OLDESTFIRST","I pi&ugrave; vecchi prima");
define("_NEWESTFIRST","I pi&ugrave; nuovi prima");
define("_MORE","altro...");
define("_MULTIPAGE","Per visualizzare l'articolo su pi&ugrave; pagine, inserire il codice <font color=red>[pagebreak]</font> (con le quadre), all'interno della news.");
define("_IFNOTRELOAD","Se la pagina non dovesse caricarsi in automatico, premere <a href=%s>qui</a>");
// Error messages issued by XoopsObject::cleanVars()
define( "_XOBJ_ERR_REQUIRED", "%s &egrave; richiesta/o" );
define( "_XOBJ_ERR_SHORTERTHAN", "%s deve contenere meno di %d caratteri." );
//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profilo");
define("_POSTEDBY","Inviato da");
define("_VISITWEBSITE","Visita il sito web");
define("_SENDPMTO","Invia un messaggio privato a %s");
define("_SENDEMAILTO","Invia un email a %s");
define("_ADD","Aggiungi");
define("_REPLY","Rispondi");
define("_DATE","Data");   // Posted date
//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Principale");
define("_MANUAL","Manuale");
define("_INFO","Informazioni");
define("_CPHOME","Pannello di Controllo");
define("_YOURHOME","Home Page");
//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Utenti online");
define('_GUESTS', 'Ospiti');
define('_MEMBERS', 'Iscritti');
define("_ONLINEPHRASE","<b>%s</b> utente(i) online<br />");
define("_ONLINEPHRASEX","<b>%s</b> utente(i) in <b>%s</b>");
define("_CLOSE","Chiudi");  // Close window
//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Citazione:");
//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Non si possiedono i permessi per accedere a quest'area");
//%%%%%		Common Phrases		%%%%%
define("_NO","No");
define("_YES","Si");
define("_EDIT","Modifica");
define("_DELETE","Elimina");
define("_SUBMIT","Invia");
define("_MODULENOEXIST","Il modulo selezionato non esiste!");
define("_ALIGN","Allineamento");
define("_LEFT","Sinistra");
define("_CENTER","Centro");
define("_RIGHT","Destra");
define("_FORM_ENTER", "Per favore inserire %s");
define("_MUSTWABLE","Il file %s non deve essere protetto in scrittura sul server!"); // %s represents file name
// Module info
define('_PREFERENCES', 'Preferenze');
define("_VERSION", "Versione");
define("_DESCRIPTION", "Descrizione");
define("_AUTHOR", "Autore");
define("_CREDITS", "Crediti");
define("_LICENCE", "Licenza");
define("_ERRORS", "Errori");
define("_NONE", "Nessuno");
define('_ON','il');
define('_READS','letture');
define('_WELCOMETO','Benvenuto %s');
define('_SEARCH','Cerca');
define('_ALL', 'Tutto');
define('_TITLE', 'Titolo');
define('_OPTIONS', 'Opzioni');
define('_QUOTE', 'Citazione');
define('_LIST', 'Elenco');
define('_LOGIN','Login utente');
define('_USERNAME','Nome utente: ');
define('_PASSWORD','Password: ');
define("_SELECT","Seleziona");
define("_IMAGE","Immagine");
define("_SEND","Invia");
define("_CANCEL","Annulla");
define("_ASCENDING","Ordine crescente");
define("_DESCENDING","Ordine decrescente");
define('_BACK', 'Indietro');
define('_NOTITLE', 'Nessun titolo');;
/**
* Image manager
*/
define("_MD_ADDIMGCAT","Nuova Categoria");
define("_MD_IMGCATNAME","Nome");
define("_MD_IMGCATRGRP","Gruppi autorizzati ad accedere alla categoria:");
define("_MD_IMGCATWGRP","Gruppi autorizzati a caricare immagini nella categoria:");
define("_MD_IMGCATWEIGHT","Ordine di visualizzazione nel gestore immagini:");
define("_MD_IMGCATDISPLAY","Categoria visibile nel gestore immagini?");
define("_MD_IMGCATSTRTYPE","Modalit&agrave; di salvataggio delle immagini:");
define("_MD_STRTYOPENG","Non &egrave; possibile modificare questa scelta in seguito!");
define("_MD_ASFILE","Come file nella cartella 'uploads'");
define("_MD_INDB","Come dato binario (blob) nel database");
define ("_MD_IMGMAIN","Categoria"); 
define ("_MD_EDITIMGCAT", "Modifica categoria");
define('_IMGMANAGER', 'Gestore immagini');
define('_NUMIMAGES', '%s immagine(i)');
define('_ADDIMAGE', 'Nuova Immagine');
define('_IMAGENAME', 'Nome:');
define('_IMGMAXSIZE', 'Dimensione massima (bytes):');
define('_IMGMAXWIDTH', 'Larghezza massima(pixels):');
define('_IMGMAXHEIGHT', 'Altezza massima (pixels):');
define('_IMAGECAT', 'Categoria:');
define('_IMAGEFILE', 'File dell\'immagine:');
define('_IMGWEIGHT', 'Ordine di visualizzazione nel gestore immagini:');
define('_IMGDISPLAY', 'Immagine visibile nel gestore immagini?');
define('_IMAGEMIME', 'Estensione file (myme type):');
define('_FAILFETCHIMG', 'Impossibile eseguire l\'upload del file %s');
define('_FAILSAVEIMG', 'Impossibile salvare l\'immagine %s nel database');
define('_NOCACHE', 'Nessuna cache');
define('_CLONE', 'Duplica');
// %%%%%    For xoopsform files %%%%%
define("_STARTSWITH", "Inizia con");
define("_ENDSWITH", "Termina con");
define("_MATCHES", "Corrsiponde a");
define("_CONTAINS", "Contiene");
define('_REQUIRED', 'Richiesto');
// %%%%%%    File Name commentform.php     %%%%%
define('_REGISTER', 'Registrati');
// %%%%%%    File Name xoopscodes.php     %%%%%
define("_SIZE","DIMENSIONE");  // font size
define("_FONT","CARATTERE");  // font family
define("_COLOR","COLORE");  // font color
define("_EXAMPLE","ESEMPIO");
define("_ENTERURL","Indirizzo del link che si desidera inserire: ");
define("_ENTERWEBTITLE","Testo del link: ");
define("_ENTERIMGURL","Indirizzo web dell'immagine che si desidera inserire:");
define("_ENTERIMGPOS","Allineamento dell'immagine.");
define("_IMGPOSRORL","'r' destra, 'l' sinistra, o lasciare vuoto.");
define("_ERRORIMGPOS","ERRORE! Si prega di specificare l'allineamento dell'immagine.");
define("_ENTEREMAIL","Indirizzo email che si desidera inserire:");
define("_ENTERCODE","Codice che si desidera inserire:");
define("_ENTERQUOTE","Testo che si desidera citare:");
define("_ENTERTEXTBOX","Per favore, inserire del testo nella casella.");
define("_ALLOWEDCHAR","Numero massimo di caratteri consentiti: ");
define("_CURRCHAR","Caratteri utilizzati fino a questo momento: ");
define("_PLZCOMPLETE","Per favore, inserire oggetto e corpo del messaggio.");
define("_MESSAGETOOLONG","Il messaggio &egrave; troppo lungo.");
/**
* xoops smilie
*/
define('_AM_ADDSMILE',' Nuova Faccina');
define('_AM_SMILECODE','Combinazione');
define('_AM_SMILEEMOTION','Descrizione');
define('_AM_DISPLAYF','Visibile nei form?');
// %%%%%        TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 secondo');
define('_SECONDS', '%s secondi');
define('_MINUTE', '1 minuto');
define('_MINUTES', '%s minuti');
define('_HOUR', '1 ora');
define('_HOURS', '%s ore');
define('_DAY', '1 giorno');
define('_DAYS', '%s giorni');
define('_WEEK', '1 settimana');
define('_MONTH', '1 mese');
define("_DATESTRING","j/n/Y G:i:s");
define("_MEDIUMDATESTRING","j/n/Y G:i");
define("_SHORTDATESTRING","j/n/Y");
/**
* The following characters are recognized in the format string:
* a - 'am' or 'pm'
* A - 'AM' or 'PM'
* d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
* D - day of the week, textual, 3 letters; i.e. 'Fri'
* F - month, textual, long; i.e. 'January'
* h - hour, 12-hour format; i.e. '01' to '12'
* H - hour, 24-hour format; i.e. '00' to '23'
* g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
* G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
* i - minutes; i.e. '00' to '59'
* j - day of the month without leading zeros; i.e. '1' to '31'
* l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
* L - boolean for whether it is a leap year; i.e. '0' or '1'
* m - month; i.e. '01' to '12'
* n - month without leading zeros; i.e. '1' to '12'
* M - month, textual, 3 letters; i.e. 'Jan'
* s - seconds; i.e. '00' to '59'
* S - English ordinal suffix, textual, 2 characters; i.e. 'th', 'nd'
* t - number of days in the given month; i.e. '28' to '31'
* T - Timezone setting of this machine; i.e. 'MDT'
* U - seconds since the epoch
* w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
* Y - year, 4 digits; i.e. '1999'
* y - year, 2 digits; i.e. '99'
* z - day of the year; i.e. '0' to '365'
* Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/
//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
/* ATTENZIONE! In caso di aggiornamento da versioni precedenti e di mantenimento della collazione del database in
'latin_swedish' decommentare la linea successiva e commentare: define('_CHARSET', 'UTF-8'), per preservare la visualizzazione delle parole accentate nel sito.*/
//define('_CHARSET', 'ISO-8859-1');
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'it');
// cambiare da 0 a 1 se questa lingua è multi-bytes (non modificare)
define('XOOPS_USE_MULTIBYTES', '0');
/**
* Additions to 2.4.0
**/
define('_RESET', 'Reset');
define('_RE', 'Re:');
?>