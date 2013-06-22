<?php
//%%%%%% Module Name 'Addresses' %%%%%

// Module Info

// The name of this module
define("_MI_MYADDRESSES_NAME","Addresses + Google Maps");

// A brief description of this module
define("_MI_MYADDRESSES_DESC","Crea una sezione contenente un indirizzario dove gli utenti possono cercare/proporre/valutare vari indirizzi e relativi siti web.");

// Names of blocks for this module (Not all module has blocks)
//hack LUCIO - start
define("_MI_MYADDRESSES_BNAME1","Indirizzi pi&ugrave; recenti");
define("_MI_MYADDRESSES_BDESC1","questo blocco elenca gli indirizzi pi&ugrave; recenti");
define("_MI_MYADDRESSES_BNAME2","Indirizzi pi&ugrave; visitati");
define("_MI_MYADDRESSES_BDESC2","questo blocco elenca gli indirizzi pi&ugrave; visitati");
define("_MI_MYADDRESSES_BNAME3","Categorie principali");
define("_MI_MYADDRESSES_BDESC3","questo blocco elenca le categorie principali");
//hack LUCIO - end

// Sub menu titles
define("_MI_MYADDRESSES_SMNAME1","Proponi");
define("_MI_MYADDRESSES_SMNAME2","I pi&ugrave; popolari");
define("_MI_MYADDRESSES_SMNAME3","I pi&ugrave; votati");

// Names of admin menu items
//define("_MI_MYADDRESSES_ADMENU1","Aggiungi/modifica categorie");
define("_MI_MYADDRESSES_ADMENU1","Categorie");
//define("_MI_MYADDRESSES_ADMENU2","Aggiungi/modifica indirizzi");
define("_MI_MYADDRESSES_ADMENU2","Indirizzi");
define("_MI_MYADDRESSES_ADMENU3","Elenco Indirizzi inviati");
define("_MI_MYADDRESSES_ADMENU4","Elenco Indirizzi errati");
define("_MI_MYADDRESSES_ADMENU5","Elenco Indirizzi modificati");
define("_MI_MYADDRESSES_ADMENU6","Link Checker");

// Title of config items
define('_MI_MYADDRESSES_POPULAR','Scegli il numero di visite per segnalare un Indirizzo come &quot;popolare&quot;');
define('_MI_MYADDRESSES_NEWLINKS','Scegli il massimo numero di nuovi Indirizzi da visualizzare sulla pagina principale');
define('_MI_MYADDRESSES_PERPAGE','Scegli il massimo numero di Indirizzi da visualizzare su ogni pagina');
define('_MI_MYADDRESSES_USESHOTS','[Immagini]<br />Scegli S&igrave; per visualizzare le istantanee per ogni Indirizzo');
define('_MI_MYADDRESSES_USEFRAMES','Vuoi visualizzare le pagine linked in un frame?');
define('_MI_MYADDRESSES_SHOTWIDTH','Massima dimensione per ogni istantanea');
define('_MI_MYADDRESSES_ANONPOST','Consenti agli utenti anonimi di proporre Indirizzi?');
define('_MI_MYADDRESSES_AUTOAPPROVE','I nuovi Indirizzi sono auto approvati senza visto dell&#39;admin?');
//hack LUCIO - start
define('_MI_MYADDRESSES_API_KEY','[GoogleMaps]<br />Incolla qui la Google Maps API Key per:<br \>'.XOOPS_URL.'/modules/addresses/');
define('_MI_MYADDRESSES_DEFAULT_LAT','[GoogleMaps]<br />Latitudine di default:');
define('_MI_MYADDRESSES_DEFAULT_LON','[GoogleMaps]<br />Longitudine di default:');
define('_MI_MYADDRESSES_DEFAULT_ZOOM','[GoogleMaps]<br />Livello Google Maps Zoom di default:');
define('_MI_MYADDRESSES_DEFAULT_ADDR','[GoogleMaps]<br />Indirizzo di default:');
define('_MI_MYADDRESSES_POPUP_OPTIONS','[GoogleMaps]<br />Attributi finestra popup Google Maps:');

define('_MI_MYADDRESSES_DEF_SHOT_PATH','[Immagini]<br />Percorso directory immagini:');
define('_MI_MYADDRESSES_MAX_SHOT_SIZE','[Immagini]<br />Massima dimensione per ogni immagine:');
define('_MI_MYADDRESSES_MAX_SHOT_WIDTH','[Immagini]<br />Massima larghezza per ogni immagine:');
define('_MI_MYADDRESSES_MAX_SHOT_HEIGHT','[Immagini]<br />Massima altezza per ogni immagine:');

// Options of config items
define('_MI_MYADDRESSES_PERPAGE_ALL','tutti');
//hack LUCIO - end

// Description of each config items
define('_MI_MYADDRESSES_POPULARDSC','');
define('_MI_MYADDRESSES_NEWLINKSDSC','');
define('_MI_MYADDRESSES_PERPAGEDSC','');
define('_MI_MYADDRESSES_USEFRAMEDSC','');
define('_MI_MYADDRESSES_USESHOTSDSC','');
define('_MI_MYADDRESSES_SHOTWIDTHDSC','');
define('_MI_MYADDRESSES_AUTOAPPROVEDSC','');
//hack LUCIO - start
define('_MI_MYADDRESSES_API_KEYDSC','Ottieni l&#39;API Key dal sito:<br /><a href="http://code.google.com/apis/maps/signup.html" target="_blank">http://code.google.com/apis/maps/signup.html</a>');
define('_MI_MYADDRESSES_DEFAULT_LATDSC','Numero decimale, tra -90 e +90');
define('_MI_MYADDRESSES_DEFAULT_LONDSC','Numero decimale, tra -180 e +180');
define('_MI_MYADDRESSES_DEFAULT_ZOOMDSC','Numero intero, tra 0 e 17');
define('_MI_MYADDRESSES_DEFAULT_ADDRDSC','');
define('_MI_MYADDRESSES_POPUP_OPTIONSDSC','Attributi per la finesta popup Google Maps, senza apice &#39; o doppio apice &quot; iniziale e finale<br />Vedere anche attributi metodo Javascript window.open()');

define('_MI_MYADDRESSES_DEF_SHOT_PATHDSC','Relativo al percorso di Xoops<br />Esempio: modules/addresses/images/shots');
define('_MI_MYADDRESSES_MAX_SHOT_SIZEDSC','Byte');
define('_MI_MYADDRESSES_MAX_SHOT_WIDTHDSC','Pixel');
define('_MI_MYADDRESSES_MAX_SHOT_HEIGHTDSC','Pixel');
//hack LUCIO - end

// Text for notifications
define('_MI_MYADDRESSES_GLOBAL_NOTIFY','Globali');
define('_MI_MYADDRESSES_GLOBAL_NOTIFYDSC','Opzioni globali di notifica dell&lsquo Indirizzario.');

define('_MI_MYADDRESSES_CATEGORY_NOTIFY','Categorie');
define('_MI_MYADDRESSES_CATEGORY_NOTIFYDSC','Opzioni di notifica da applicare alle attuali categorie.');

define('_MI_MYADDRESSES_LINK_NOTIFY','Indirizzi');
define('_MI_MYADDRESSES_LINK_NOTIFYDSC','Opzioni di notifica da applicare agli Indirizzi attuali.');

define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFY','Nuova Categoria');
define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFYCAP','Segnalami quando viene creata una nuova categoria.');
define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFYDSC','Riceve una notifica quando una nuova categoria viene creata.');
define('_MI_MYADDRESSES_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Creata una nuova categoria dell&lsquo indirizzario');

define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFY','Richiesta di modifica dell&lsquo;Indirizzario');
define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFYCAP','Segnalami le richieste di modifica degli indirizzi.');
define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFYDSC','Riceve una notifica quando viene proposta una richiesta di modifica di un indirizzo.');
define('_MI_MYADDRESSES_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Richiesta la modifica di un Indirizzo');

define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFY','Segnalazione di Indirizzo errato');
define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFYCAP','Segnalami ogni rapporto su indirizzi errati.');
define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFYDSC','Riceve una notifica per ogni segnalazione di link errato.');
define('_MI_MYADDRESSES_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Segnalato un Link errato');

define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFY','Nuovo Indirizzo proposto');
define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFYCAP','Segnalami quando un nuovo indirizzo viene proposto (in attesa di approvazione).');
define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFYDSC','Riceve una notifica quando un nuovo indirizzo viene proposto (in attesa di approvazione).');
define('_MI_MYADDRESSES_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Proposto un nuovo indirizzo (in attesa di approvazione)');

define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFY','Nuovo Indirizzo');
define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFYCAP','Segnalami quando un nuovo indirizzo viene pubblicato.');
define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFYDSC','Riceve una notifica quando un nuovo indirizzo viene pubblicato.');
define('_MI_MYADDRESSES_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Pubblicazione di un nuovo indirizzo');

define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFY','Nuovo Indirizzo proposto');
define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFYCAP','Segnalami quando un nuovo indirizzo viene proposto (in attesa di approvazione) nella categoria corrente.');
define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFYDSC','Riceve una notifica quando un nuovo indirizzo viene proposto (in attesa di approvazione) nella categoria corrente.');
define('_MI_MYADDRESSES_CATEGORY_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Pubblicazione di un nuovo indirizzo nella categoria');

define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFY','Nuovo Indirizzo');
define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFYCAP','Segnalami quando un nuovo indirizzo viene pubblicato nella categoria corrente.');
define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFYDSC','Riceve una notifica quando un nuovo indirizzo viene pubblicato nella categoria corrente.');
define('_MI_MYADDRESSES_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Pubblicazione di un nuovo indirizzo nella categoria');

define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFY','Indirizzo Approvato');
define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFYCAP','Segnalami quando questo indirizzo &egrave; approvato.');
define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFYDSC','Riceve una notifica quando questo indirizzo &egrave; approvato.');
define('_MI_MYADDRESSES_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notifica : Indirizzo approvato');

?>
