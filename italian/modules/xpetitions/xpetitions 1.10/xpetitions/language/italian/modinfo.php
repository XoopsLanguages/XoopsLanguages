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

// Le nom du module
define('_MI_XPETITIONS_NAME', 			'Petizioni');

// Une brève description du module
define('_MI_XPETITIONS_DESC',			'Petizioni online');

// Menu
define('_MI_XPETITIONS_MENU1',			'Homepage');
define('_MI_XPETITIONS_MENU2',			'Crea');
define('_MI_XPETITIONS_MENU3',			'Modifica');
define('_MI_XPETITIONS_MENU4',			'Gestisci firme');
define('_MI_XPETITIONS_MENU5',			'Gestisci mail');
define('_MI_XPETITIONS_MENU6',			'Gestisci campi');

// Préférences du module
define('_MI_XPETITIONS_NAVIGATION',		'Barra di navigazione');
define('_MI_XPETITIONS_NAVIGATION_DSC',		'Questa opzione permette ai visitatori del sito di navigare tra le petizioni tramite un\'apposito menu');
define('_MI_XPETITIONS_UPLOAD_SIZE',		'Massima dimensione del file per la versione stampa della petizione');
define('_MI_XPETITIONS_UPLOAD_SIZE_DSC',	'Massima dimensione (in bytes) per il file allegato con la versione per la stampa della petizione');
define('_MI_XPETITIONS_ADMIN_PAGE',		'Numero delle petizioni da visualizzare');
define('_MI_XPETITIONS_ADMIN_PAGE_DSC',		'Numero di petizioni per pagina visualizzate lato amministratore');
define('_MI_XPETITIONS_INDEX_PAGE',		'Numero delle petizioni da visualizzare');
define('_MI_XPETITIONS_INDEX_PAGE_DSC',		'Numero di petizioni per pagina visualizzate lato sitoweb');
define('_MI_XPETITIONS_ADMIN_SIGN_PAGE',	'Numero di firme da visualizzare');
define('_MI_XPETITIONS_ADMIN_SIGN_PAGE_DSC',	'Numero di firme da visualizzate lato amministratore');
define('_MI_XPETITIONS_INDEX_SIGNS',		'Visualizza il numero di firme per ogni petizione');
define('_MI_XPETITIONS_INDEX_SIGNS_DSC',	'Questa opzione visualizza il numero di firme confermate per ogni petizione lato sitoweb. Il contatore appare dopo la prima firma confermata.');
define('_MI_XPETITIONS_INDEX_ARCHI',		'Visualizza le petizioni archiviate nell\'homepage del modulo');
define('_MI_XPETITIONS_INDEX_ARCHI_DSC',	'Questa opzione visualizza le petizioni messe in archivio lato sitoweb.<br />Nota: Le petizioni archiviate non possono essere firmate');
define('_MI_XPETITIONS_SIGN_TITLE',		'Titolo per il link alla firma');



define('_MI_XPETITIONS_SIGN_TITLE_DSC',		'Titolo del link per raggiungere il form per firmare la petizione');
define('_MI_XPETITIONS_SIGN_DOWNL',		'Titolo del link per la versione per la stampa');
define('_MI_XPETITIONS_SIGN_DOWNL_DSC',		'Titolo del link che permette al visitatore di scaricare una copia della petizione per la stampa.<br />Se non ci sono file allegati il link non &egrave; visibile.');
define('_MI_XPETITIONS_SIGN_FRIEND',		'Titolo per il link \'segnala ad un amico\'');
define('_MI_XPETITIONS_SIGN_FRIEND_DSC',	'Titolo del link che permette di invitare un amico a firmare la petizione');
define('_MI_XPETITIONS_SIGN_SHOW',		'Titolo del link \'vedi tutte le firme\'');
define('_MI_XPETITIONS_SIGN_SHOW_DSC',		'Titolo del link che permette di consultare tutte le firme della petizione');
define('_MI_XPETITIONS_SEND_FRIEN',		'Permetti agli utenti di invitare amici');
define('_MI_XPETITIONS_SEND_FRIEN_DSC',		'Questa opzione abilita o disabilita la possibilit&agrave; di invitare un amico a firmare la petizione');
define('_MI_XPETITIONS_PATH_UPLOAD',		'Percorso per l\'upload del file per la versione stampa');
define('_MI_XPETITIONS_PATH_UPLOAD_DSC',	'Il percorso per il file deve essere specificato partendo dalla root del sito.<br />Esempio: per caricare un file in http://www.yoursite.com/uploads/xpetitions,<br />devi inserire \'/upload/xpetitions\' (senza lo slash finale).<br />Non dimenticare di creare la cartella e settare i permessi a 777 (rwxrwxrwx).');
define('_MI_XPETITIONS_CAPTCHA_IMG',		'Verifica Anti-spam');
define('_MI_XPETITIONS_CAPTCHA_IMG_DSC',	'Puoi attivare il codice di verifica come misura precauzionale per evitare Spam indesiderato.');
define('_MI_SSECTION_WYSIWYG',			'<span style="color: red;">NUOVO</span> : Tipo di editor');
define('_MI_SSECTION_WYSIWYGDSC',		'Seleziona il tipo di editor per creare le petizioni. Se selezioni un editor diverso da XoopsEditor, devi installarlo sul sito.');
define('_MI_XPETITIONS_VALID_METHOD',		'<span style="color: red;">NUOVO</span> : Tipo di validazione per la firma');
define('_MI_XPETITIONS_VALID_METHODSC',		'La firma pu&ograve; essere validata in due modi:<br />1. Email : Una mail viene inviata al firmatario che dovr&agrave; confermare la propria firma cliccando su un link inviato via mail<br />2. Auto : La firma viene validata automaticamente cliccando su un pulsante al momento della firma, senza l\'invio di nessuna mail');

// xoops version
define("_MI_XPETITIONS_INDEX",			"Template della pagina di index");
define("_MI_XPETITIONS_HEADER",			"Template per l'header dell'index");
define("_MI_XPETITIONS_FOOTER",			"Template per il footer dell'index");
define("_MI_XPETITIONS_DISPLAY_INDEX",		"Template per la pagina di index delle petizioni");
define("_MI_XPETITIONS_DISPLAY_FORM",		"Template per il form della firma");
define("_MI_XPETITIONS_DISPLAY_TOOLBAR",	"Template per la toolbar della petizione");
define("_MI_XPETITIONS_DISPLAY_SIGNS",		"Template per la conferma della firma");
define("_MI_XPETITIONS_DISPLAY_FRIEND",		"Template per il form 'invita un amico'");
define("_MI_XPETITIONS_DISPLAY_ALLSIGNS",	"Template per la visualizzazione delle firme");
define("_MI_XPETITIONS_DISPLAY_FRIEND_SEND",	"Template per la mail 'invita un amico'");
define("_MI_XPETITIONS_DISPLAY_VALID",		"Template per la conferma della firma");
define("_MI_XPETITIONS_DISPLAY_PRESIGN",	"Template per la pre-firma prima della convalida automatica");
define("_MI_XPETITIONS_DISPLAY_VALID_PRESIGN",	"Template per la conferma della firma");

// blocks
define("_MI_XPETITIONS_BNAME1",			"Ultime firme");
define("_MI_XPETITIONS_BNAME2",			"Petizioni attive");
define("_MI_XPETITIONS_BNAME3",			"Petizioni in archivio");

//1.10 RC1
define('_MI_XPETITIONS_SIGN_FRIEND_DEFAULT','Tell a friend');
define('_MI_XPETITIONS_SIGN_SHOW_DEFAULT','Show Signatures');
define('_MI_XPETITIONS_SIGN_TITLE_DEFAULT','Sign now!');
define('_MI_XPETITIONS_SIGN_DOWNL_DEFAULT','Download a printable version of the petition');
define('_MI_XPETITIONS_EDITOR_OPTIONS','Select Editor');