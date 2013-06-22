<?php
// $Id$
// Module Info

// The name of this module
define("_MI_NEWS_NAME","Notizie");

// A brief description of this module
define("_MI_NEWS_DESC","Crea un Slashdot-come sezione news, dove gli utenti possono inserire notizie / commenti.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWS_BNAME1","Attualit&#224; Temi");
define("_MI_NEWS_BNAME3","Storia");
define("_MI_NEWS_BNAME4","primo piano");
define("_MI_NEWS_BNAME5","Ultime notizie");
define("_MI_NEWS_BNAME6","Modera news");
define("_MI_NEWS_BNAME7","Navigare tra gli argomenti");

// Sub menus in main menu block
define("_MI_NEWS_SMNAME1","Invia News");
define("_MI_NEWS_SMNAME2","archiviare");

// Names of admin menu items
define("_MI_NEWS_ADMENU2","Gestione Argomenti");
define("_MI_NEWS_ADMENU3","Gestione Notizie");
define("_MI_NEWS_GROUPPERMS","Permessi");
// Added by Hervé for prune option
define("_MI_NEWS_PRUNENEWS","Elimina Notizie");
// Added by Hervé
define("_MI_NEWS_EXPORT","Esporta Notizie");

// Title of config items
define("_MI_STORYHOME","Selezionare il numero di notizie da visualizzare nella pagina in alto");
define("_MI_NOTIFYSUBMIT","Selezionare Sì per inviare messaggi di notifica per webmaster su presentazione nuovo");
define("_MI_DISPLAYNAV","Selezionare Sì per visualizzare la finestra di navigazione nella parte superiore di ogni pagina delle notizie");
define("_MI_AUTOAPPROVE","Auto approvare notizie senza alcun intervento da admin?");
define("_MI_ALLOWEDSUBMITGROUPS","Gruppi che possono Invia News");
define("_MI_ALLOWEDAPPROVEGROUPS","Gruppi che possono approvare notizie");
define("_MI_NEWSDISPLAY","Notizie di visualizzazione layout");
define("_MI_NAMEDISPLAY","Per nome autore");
define("_MI_COLUMNMODE","Colonne");
define("_MI_STORYCOUNTADMIN","Numero di nuovi articoli da visualizzare nella zona admin (questa opzione sar&#224; utilizzato anche per limitare il numero di argomenti visualizzati nell&#39;area amministrazione e sar&#224; utilizzata nelle statistiche):");
define("_MI_UPLOADFILESIZE","Max Upload filesize (KB) 1048576 = 1 Meg");
define("_MI_UPLOADGROUPS","Gruppi autorizzati a caricare");


// Description of each config items
define('_MI_STORYHOMEDSC','');
define('_MI_NOTIFYSUBMITDSC','');
define('_MI_DISPLAYNAVDSC','');
define('_MI_AUTOAPPROVEDSC','');
define("_MI_ALLOWEDSUBMITGROUPSDESC","I gruppi selezionati saranno in grado di presentare le notizie");
define("_MI_ALLOWEDAPPROVEGROUPSDESC","I gruppi selezionati saranno in grado di approvare le notizie");
define("_MI_NEWSDISPLAYDESC","Classica mostra tutte le news ordinate per data di pubblicazione. Notizie per argomento verr&#224; gruppo le notizie per argomento con l&#39;ultima storia in pieno e gli altri con il solo titolo");
define("_MI_ADISPLAYNAMEDSC","Seleziona come visualizzare il nome dell&#39;autore  &#39;s");
define("_MI_COLUMNMODE_DESC","È possibile scegliere il numero di colonne da visualizzare lista articoli");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Selezionare i gruppi che possono caricare sul server");

// Name of config item values
define("_MI_NEWSCLASSIC","Classico");
define("_MI_NEWSBYTOPIC","Per argomento");
define("_MI_DISPLAYNAME1","Nome utente");
define("_MI_DISPLAYNAME2","Nome reale");
define("_MI_DISPLAYNAME3","Non visualizzare autore");
define("_MI_UPLOAD_GROUP1","Presentatori e approvazioni");
define("_MI_UPLOAD_GROUP2","Solo approvatori");
define("_MI_UPLOAD_GROUP3","Carica disabili");

// Text for notifications

define("_MI_NEWS_GLOBAL_NOTIFY","globale");
define("_MI_NEWS_GLOBAL_NOTIFYDSC","Globale notizie opzioni di notifica.");

define("_MI_NEWS_STORY_NOTIFY","Storia");
define("_MI_NEWS_STORY_NOTIFYDSC","Opzioni di notifica che si applicano alla storia attuale.");

define("_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY","Nuovo argomento");
define("_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP","Inviami una notifica quando una risposta viene creato.");
define("_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC","Ricevere la notifica quando una risposta viene creato.");
define("_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify: Leggi News Nuovi");

define("_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY","New Story Inviato");
define("_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP","Inviate quando ogni nuova storia &#232; presentata (in attesa di approvazione).");
define("_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC","Ricevere la notifica quando una nuova storia &#232; presentata (in attesa di approvazione).");
define("_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify: notizia New presentate");

define("_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY","Storia");
define("_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP","Inviate quando ogni nuova storia &#232; distaccato.");
define("_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC","Ricevere la notifica quando una nuova storia &#232; distaccato.");
define("_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify: notizia New");

define("_MI_NEWS_STORY_APPROVE_NOTIFY","Approvato storia");
define("_MI_NEWS_STORY_APPROVE_NOTIFYCAP","Fammi sapere quando il racconto &#232; approvato.");
define("_MI_NEWS_STORY_APPROVE_NOTIFYDSC","Ricevere una notifica quando questa storia &#232; approvato.");
define("_MI_NEWS_STORY_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify: Story approvato");

define("_MI_RESTRICTINDEX","Limitare Argomenti su Index Page?");
define("_MI_RESTRICTINDEXDSC","Se impostato su yes, gli utenti vedranno solo le notizie elencati nell&#39;indice di argomenti, hanno accesso da impostare come in Autorizzazioni Notizie");

define("_MI_NEWSBYTHISAUTHOR","Notizie dello stesso autore");
define("_MI_NEWSBYTHISAUTHORDSC","Se si imposta questa opzione a yes, poi &#39;gli articoli di questo autore &#39; un link  sar&#224; visibile");

define("_MI_NEWS_PREVNEX_LINK","Mostra il link Indietro e Avanti?");
define("_MI_NEWS_PREVNEX_LINK_DESC","Quando questa opzione &#232; impostata su  &#39;Sì &#39;, due nuovi collegamenti sono visibles in fondo a ogni articolo. Tali collegamenti sono usati per andare al precedente articolo e successivo in base alla data di pubblicazione");
define("_MI_NEWS_SUMMARY_SHOW","Mostra tabella riassuntiva?");
define("_MI_NEWS_SUMMARY_SHOW_DESC","Quando si utilizza questa opzione, una sintesi contenente i link a tutti i recenti articoli pubblicati &#232; visibile in fondo a ogni articolo");
define("_MI_NEWS_AUTHOR_EDIT","Consente agli autori di modificare il messaggio?");
define("_MI_NEWS_AUTHOR_EDIT_DESC","Con questa opzione, gli autori possono modificare i loro messaggi.");
define("_MI_NEWS_RATE_NEWS","Consentire agli utenti di tasso di notizie?");
define("_MI_NEWS_TOPICS_RSS","Abilitare i feed RSS per argomenti?");
define("_MI_NEWS_TOPICS_RSS_DESC","Se si imposta questa opzione su &#39;Sì&#39; poi il contenuto argomenti saranno disponibili come feed RSS");
define("_MI_NEWS_DATEFORMAT","Data di formato");
define("_MI_NEWS_DATEFORMAT_DESC","Si prega di fare riferimento alla documentazione Php (http://fr.php.net/manual/en/function.date.php) per maggiori informazioni su come selezionare il formato. Notate che, se non si digita nulla quindi formattare la data di default sar&#224; utilizzata");
define("_MI_NEWS_META_DATA","Abilita meta dati (keywords e descrizione) da inserire?");
define("_MI_NEWS_META_DATA_DESC","Se si imposta questa opzione su &#39;sì&#39; allora la approvatori sar&#224; in grado di entrare nel meta-dati seguenti: le parole chiave e descrizione");
define("_MI_NEWS_BNAME8","Casuale");
define("_MI_NEWS_NEWSLETTER","Newsletter");
define("_MI_NEWS_STATS","Statistiche");
define("_MI_NEWS_FORM_OPTIONS","Modulo di Opzione");
define("_MI_NEWS_FORM_COMPACT","Compattare");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Spaw Editor");
define("_MI_NEWS_FORM_HTMLAREA","Htmlarea Editor");
define("_MI_NEWS_FORM_FCK","FCK Editor");
define("_MI_NEWS_FORM_KOIVI","Koivi Editor");
define("_MI_NEWS_FORM_OPTIONS_DESC","Selezionare l&#39;editor da usare. Se si dispone di una installazione &#39;semplice&#39; (ad esempio si utilizza soltanto il nucleo xoops editor di classe, a condizione che nello standard nucleo pacchetto xoops), allora si può semplicemente selezionare DHTML e compatto");
define("_MI_NEWS_KEYWORDS_HIGH","Usa parole chiave mettendo in evidenza?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Se si utilizza questa opzione, le parole chiave digitate nella ricerca sar&#224; highlited negli articoli");
define("_MI_NEWS_HIGH_COLOR","Colore utilizzato per evidenziare le parole chiave?");
define("_MI_NEWS_HIGH_COLOR_DES","Utilizzare questa opzione solo se si &#232; scelto Sì per l&#39;opzione precedente");
define("_MI_NEWS_INFOTIPS","Tooltips lunghezza");
define("_MI_NEWS_INFOTIPS_DES","Se si utilizza questa opzione, i link relativi a notizie che contiene il primo (n) caratteri dell&#39;articolo. Se si imposta questo valore a 0 allora il infotips sar&#224; vuota");
define("_MI_NEWS_SITE_NAVBAR","Usa Mozilla e Opera Bar del sito Navigation?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Se si imposta questa opzione su Sì allora i visitatori del tuo sito web sar&#224; in grado di utilizzare la barra di navigazione del sito per navigare attraverso i vostri articoli.");
define("_MI_NEWS_TABS_SKIN","Seleziona la pelle da utilizzare in schede");
define("_MI_NEWS_TABS_SKIN_DESC","Questa pelle sar&#224; utilizzato da tutti i blocchi che utilizza le schede");
define("_MI_NEWS_SKIN_1","Stile della barra");
define("_MI_NEWS_SKIN_2","Rilievo");
define("_MI_NEWS_SKIN_3","Classico");
define("_MI_NEWS_SKIN_4","Cartelle");
define("_MI_NEWS_SKIN_5","MacOS");
define("_MI_NEWS_SKIN_6","semplice");
define("_MI_NEWS_SKIN_7","Arrotondato");
define("_MI_NEWS_SKIN_8","ZDnet stile");

// Added in version 1.50
define("_MI_NEWS_BNAME9","Archivi");
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Mostra i collegamenti nelle versioni stampabili dei tuoi articoli?");
define("_MI_NEWS_DUBLINCORE","Activate Dublin Core Metadata?");
define("_MI_NEWS_DUBLINCORE_DSC","Per ulteriori informazioni, <a href='http://dublincore.org/'>visita questo link</a>");
define("_MI_NEWS_BOOKMARK_ME","Visualizzare un &#39;Bookmark questo articolo su questi siti&#39; blocco?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Questo blocco sar&#224; visibile nella pagina dell&#39;articolo,");
define("_MI_NEWS_FF_MICROFORMAT","Attivare Firefox 2 Sintesi Micro?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Per ulteriori informazioni, vedere <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>questa pagina</a>");
define("_MI_NEWS_WHOS_WHO","Chi &#232; chi");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Lista degli argomenti");
define("_MI_NEWS_ADVERTISEMENT","annuncio");
define("_MI_NEWS_ADV_DESCR","Inserire un testo o un codice javascript per la visualizzazione nei tuoi articoli");
define("_MI_NEWS_MIME_TYPES","Inserisci autorizzato tipi mime per l&#39;upload (separati su una linea nuova)");
define("_MI_NEWS_ENHANCED_PAGENAV","Usa navigatore migliorato pagina?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Con questa opzione &#232; possibile separare le tue pagine con qualcosa di simile: [pagebreak: titolo della pagina], i collegamenti alle pagine sono sostituite da un elenco a discesa e si può usare [riassunto] per creare una sintesi automatica di pagine");

// Added in version 1.54
define("_MI_NEWS_CATEGORY_NOTIFY","categoria");
define("_MI_NEWS_CATEGORY_NOTIFYDSC","Opzioni di notifica che si applicano alla categoria corrente");

define("_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY","New Story Inviato");
define("_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP","Inviami una notifica quando una storia viene aggiunta a questa categoria.");
define("_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC","Ricevere la notifica quando una storia viene aggiunta a questa categoria.");
define("_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} auto-notify: notizia New");

// Added in version 1.63
define("_MI_NEWS_TAGS","Utilizzare il sistema di tag?");
define("_MI_NEWS_TAGS_DSC","Questo si basa sul modulo XOOPS Tag da phppp");
define("_MI_NEWS_BNAME10","nuvola");
define("_MI_NEWS_BNAME11","Top Tag");
define("_MI_NEWS_INTRO_TEXT","Testo introduttivo alla mostra sulla pagina di presentare");
define("_MI_NEWS_IMAGE_MAX_WIDTH","Immagine larghezza massima quando viene ridimensionato");
define("_MI_NEWS_IMAGE_MAX_HEIGHT","Immagine altezza massima quando viene ridimensionato");

//Added in 1.67
define("_MI_NEWS_HELP",          "Help");
define("_MI_NEWS_ABOUT",          "About");
define("_MI_NEWS_HOME",          "Home");
define("_MI_NEWS_UPGRADE",          "Upgrade");
define("_MI_NEWS_DESCRIPTION",          "With this Xoops module, you can create an unlimited number of news articles on your site. </br></br>
You can create all articles you want and organize them in topics.</br></br>
With a very powerfull permissions management, you can create groups authorized to submit articles and a group authorized to approve them and decide who can see what.");

define("_MI_NEWS_SHARE_ME","Visualizzare le icone condividere?");
define("_MI_NEWS_SHARE_ME_DSC","Condividi le icone di Facebook, Twitter, Google Plus");
define("_MI_NEWS_SHOWICONS","Visualizzare le icone articolo?");
define("_MI_NEWS_SHOWICONS_DSC","Visualizzazione di stampa, le icone in formato PDF ed e-mail in buttom di ogni articolo");
//1.67
define("_MI_NEWS_FACEBOOKCOMMENTS","Usa Commenti Facebook?");
define("_MI_NEWS_FACEBOOKCOMMENTS_DSC","Lasciate che i vostri utenti utilizzano Facebook per aggiungere commenti ai tuoi articoli");


?><?php

// Translation done by XTransam & admin (info@txmodxoops.org)
// XTransam 1.2 is written by Chronolabs Co-op & The XOOPS Project - File Dumped on 2011-12-16 09:38

?>