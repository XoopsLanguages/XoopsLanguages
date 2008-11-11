<?php
// $Id: global.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","Attendere prego");
define("_FETCHING","Caricamento...");
define("_TAKINGBACK","Stai per essere riportato al punto in cui eri....");
define("_LOGOUT","Esci");
define("_SUBJECT","Oggetto");
define("_MESSAGEICON","Icona del messaggio");
define("_COMMENTS","Commenti");
define("_POSTANON","Invia in forma anonima");
define("_DISABLESMILEY","Disabilita Emoticons");
define("_DISABLEHTML","Disabilita html");
define("_PREVIEW","Anteprima");

define("_GO","Vai!");
define("_NESTED","Nidificati");
define("_NOCOMMENTS","Nessun commento");
define("_FLAT","Piatta");
define("_THREADED","Threaded");
define("_OLDESTFIRST","I più vecchi prima");
define("_NEWESTFIRST","I più nuovi prima");
define("_MORE","altri...");
define("_MULTIPAGE","Per fare in modo che il tuo articolo venga suddiviso in più pagine, inserisci la parola <font color=red> [PageBreak] </ font> (comprese le parentesi) in questo articolo.");
define("_IFNOTRELOAD","Se la pagina non si ricarica in modo automatico, clicca <a href='%s'>qui</a>");
define("_WARNINSTALL2","ATTENZIONE: La directory %s è ancora presente sul tuo server. <br />Rimuovi questa directory per ragioni di sicurezza.");
define("_WARNINWRITEABLE","ATTENZIONE: Il file %s è ancora scrivibile. <br />Cambia i permessi di questo file per ragioni di sicurezza.<br /> in Unix (444), in Win32 (sola-lettura)");

// Error messages issued by XoopsObject::cleanVars()
define( "_XOBJ_ERR_REQUIRED", "%s è richiesto" );
define( "_XOBJ_ERR_SHORTERTHAN", "%s deve essere inferiore a  %d caratteri." );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Profilo");
define("_POSTEDBY","Inviato da");
define("_VISITWEBSITE","Visita il sito internet");
define("_SENDPMTO","Invia un messaggio privato a %s");
define("_SENDEMAILTO","Invia una email a %s");
define("_ADD","Aggiungi");
define("_REPLY","Rispondi");
define("_DATE","Data");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Principale");
define("_MANUAL","Manuale");
define("_INFO","Info");
define("_CPHOME","Home page pannello di controllo");
define("_YOURHOME","Home Page");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Chi è online");
define('_GUESTS', 'Ospiti');
define('_MEMBERS', 'Membri');
define("_ONLINEPHRASE","<strong>%s</strong> utenti sono online");
define("_ONLINEPHRASEX","<strong>%s</strong> utenti stanno navigando in <strong>%s</strong>");
define("_CLOSE","Chiudi");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Quota:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Spiacente, non hai i permessi per accedere a questa sezione.");

//%%%%%		Common Phrases		%%%%%
define("_NO","No");
define("_YES","SI");
define("_EDIT","Modifica");
define("_DELETE","Cancella");
define("_SUBMIT","Invia");
define("_MODULENOEXIST","Il modulo selezionato non esiste!");
define("_ALIGN","Allinea");
define("_LEFT","Sinistra");
define("_CENTER","Centro");
define("_RIGHT","Destra");
define("_FORM_ENTER", "Prego inserisci %s");
// %s represents file name
define("_MUSTWABLE","Il file %s deve essere scrivibile dal server!");
// Module info
define('_PREFERENCES', 'Preferenze');
define("_VERSION", "Versione");
define("_DESCRIPTION", "Descrizione");
define("_AUTHOR", "Autore");
define("_CREDITS", "Crediti");
define("_LICENCE", "Licenza");
define("_ERRORS", "Errori");
define("_NONE", "niente");
define('_ON','su');
define('_READS','letture');
define('_WELCOMETO','Benvenuto su %s');
define('_SEARCH','Cerca');
define('_ALL', 'Tutti');
define('_TITLE', 'Titolo');
define('_OPTIONS', 'Opzioni');
define('_QUOTE', 'Quota');
define('_LIST', 'Lista');
define('_LOGIN','Login utente');
define('_USERNAME','Username: ');
define('_PASSWORD','Password: ');
define("_SELECT","Seleziona");
define("_IMAGE","Immagine");
define("_SEND","Invia");
define("_CANCEL","Cancella");
define("_ASCENDING","Ordine Crescente");
define("_DESCENDING","Ordine decrescente");
define('_BACK', 'Dietro');
define('_NOTITLE', 'Nessun titolo');

/* Image manager */
define('_IMGMANAGER','Gestione immagini');
define('_NUMIMAGES', '%s immagini');
define('_ADDIMAGE','Aggiungi file immagine');
define('_IMAGENAME','Nome:');
define('_IMGMAXSIZE','Dimensione massima ammessa (bytes):');
define('_IMGMAXWIDTH','Larghezza massima ammessa (pixels):');
define('_IMGMAXHEIGHT','Altezza massima ammessa (pixels):');
define('_IMAGECAT','Categoria:');
define('_IMAGEFILE','File immagine:');
define('_IMGWEIGHT','Ordine di visualizzazione in gestione immagini:');
define('_IMGDISPLAY','Visualizza questa immagine?');
define('_IMAGEMIME','MIME type:');
define('_FAILFETCHIMG', 'Impossibile ottenere informazioni dal file caricato %s');
define('_FAILSAVEIMG', 'Errore durante il salvataggio dell\'immagine %s nel database');
define('_NOCACHE', 'No Cache');
define('_CLONE', 'Clona');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH", "Inizia con");
define("_ENDSWITH", "Finisce con");
define("_MATCHES", "Uguale a");
define("_CONTAINS", "Contiene");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Registrati");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","DIMENSIONE");  // font size
define("_FONT","CARATTERE");  // font family
define("_COLOR","COLORE");  // font color
define("_EXAMPLE","ESEMPIO");
define("_ENTERURL","Inserisci l\'URL del link che vuoi aggiungere.");
define("_ENTERWEBTITLE","Inserisci il nome del link:");
define("_ENTERIMGURL","Inserisci l\'URL dell\'immagine che vuoi aggiungere.");
define("_ENTERIMGPOS","Adesso scegli la posizione dell\'immagine.");
define("_IMGPOSRORL","'R' o 'r' per destra, 'L' o 'l' per sinistra, oppure lascia in bianco.");
define("_ERRORIMGPOS","ERRORE! Inserisci la posizione dell\'immagine.");
define("_ENTEREMAIL","Inserisci l\'indirizzo email che vuoi aggiungere.");
define("_ENTERCODE","Inserisci il codice che vuoi aggiungere.");
define("_ENTERQUOTE","Inserisci il testo che vuoi quotare.");
define("_ENTERTEXTBOX","Prego, inserisci il testo nella casella di testo.");
define("_ALLOWEDCHAR","Numero massimo di caratteri ammessi: ");
define("_CURRCHAR","Numero corrente di caratteri: ");
define("_PLZCOMPLETE","Prego, completa i campio oggetto e messaggio.");
define("_MESSAGETOOLONG","Il tuo messaggio è troppo lungo.");

//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 secondo');
define('_SECONDS', '%s secondi');
define('_MINUTE', '1 minuto');
define('_MINUTES', '%s minutei');
define('_HOUR', '1 ora');
define('_HOURS', '%s ore');
define('_DAY', '1 giorno');
define('_DAYS', '%s giorni');
define('_WEEK', '1 settimana');
define('_MONTH', '1 mese');

define("_DATESTRING","Y/n/j G:i:s");
define("_MEDIUMDATESTRING","Y/n/j G:i");
define("_SHORTDATESTRING","Y/n/j");
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th", "nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'it');

// change 0 to 1 if this language is a multi-bytes language
define("XOOPS_USE_MULTIBYTES", "0");
?>