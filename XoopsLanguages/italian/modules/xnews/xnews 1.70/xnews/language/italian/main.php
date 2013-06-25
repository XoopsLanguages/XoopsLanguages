<?php
// $Id: main.php,v 1.70 2010/09/01 17:48:07 dnprossi Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_MA_NW_PRINTER","Pagina stampabile");
define("_MA_NW_SENDSTORY","Invia questa notizia a un amico");
define("_MA_NW_READMORE","Leggi tutto...");
define("_MA_NW_COMMENTS","Commenti?");
define("_MA_NW_ONECOMMENT","1 commento");
define("_MA_NW_BYTESMORE","altri %s bytes");
define("_MA_NW_NUMCOMMENTS","%s commenti");
define("_MA_NW_MORERELEASES","Ulteriori rilasci in ");


//%%%%%%		File Name submit.php		%%%%%
define("_MA_NW_SUBMITNEWS","Invia Notizia");
define("_MA_NW_TITLE","Titolo");
define("_MA_NW_TOPIC","Argomento");
define("_MA_NW_THESCOOP","La notizia");
define("_MA_NW_NOTIFYPUBLISH","Notifica via email nel momento in cui verrà pubblicata");
define("_MA_NW_POST","Invia");
define("_MA_NW_GO","Vai!");
define("_MA_NW_THANKS","Grazie del tuo contributo!"); //submission of news article

define("_MA_NW_NOTIFYSBJCT","Notizia per il mio sito"); // Notification mail subject
define("_MA_NW_NOTIFYMSG","Hey! Hai ricevuto un nuova notizia per il tuo sito."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_MA_NW_NEWSARCHIVES","Archivo Notizie");
define("_MA_NW_ARTICLES","Notizie");
define("_MA_NW_VIEWS","Letture");
define("_MA_NW_DATE","Data");
define("_MA_NW_ACTIONS","Azione");
define("_MA_NW_PRINTERFRIENDLY","Pagina stampabile");

define("_MA_NW_THEREAREINTOTAL","Ci sono in tutto %s notizie");

// %s is your site name
define("_MA_NW_INTARTICLE","Ho trovato una notizia interessante su %s");
define("_MA_NW_INTARTFOUND","Ecco una notizia interessante che ho trovato su %s");

define("_MA_NW_TOPICC","Argomento:");
define("_MA_NW_URL","Indirizzo:");
define("_MA_NW_NOSTORY","Spiacenti, ma l'articolo selezionato non esiste.");

//%%%%%%	File Name print.php 	%%%%%

define("_MA_NW_URLFORSTORY","L'indirizzo di questa notizia è:");

// %s represents your site name
define("_MA_NW_THISCOMESFROM","Questa notizia proviene da %s");

// Added by Hervé
define("_MA_NW_ATTACHEDFILES","File allegati:");
define("_MA_NW_ATTACHEDLIB","Questo articolo ha dei file allegati");
define("_MA_NW_NEWSSAMEAUTHORLINK","Notizie dallo stesso autore");
define("_MA_NW_NO_TOPICS","Spiacente, ma non esiste alcun argomento, creane uno prima di inserire una notizia");
define("_MA_NW_PREVIOUS_ARTICLE","Articolo Precedente");
define("_MA_NW_NEXT_ARTICLE","Articolo Successivo");
define("_MA_NW_OTHER_ARTICLES","Altri Articoli");

// Added by Hervé in version 1.3 for rating
define("_MA_NW_RATETHISNEWS","Vota questa notizia");
define("_MA_NW_RATEIT","Votala!");
define("_MA_NW_TOTALRATE","Voti totali");
define("_MA_NW_RATINGLTOH","Rango (Ascendente)");
define("_MA_NW_RATINGHTOL","Rango (Discendente)");
define("_MA_NW_RATINGC","Rango: ");
define("_MA_NW_RATINGSCALE","La scala è da 1 a 10, 1 è pessimo e 10 eccellente.");
define("_MA_NW_BEOBJECTIVE","Per favore, cerca di essere oggettivo, se tutti votano 1 o 10 il rango non serve a molto.");
define("_MA_NW_DONOTVOTE","Non votare per le risorse proposte da te.");
define("_MA_NW_RATING","Rango");
define("_MA_NW_VOTE","Vota");
define("_MA_NW_NORATING","Nessun rango selezionato.");
define("_MA_NW_USERAVG","Voto Medio Utente");
define("_MA_NW_DLRATINGS","Rango Notizia (voti totali: %s)");
define("_MA_NW_ONEVOTE","1 voto");
define("_MA_NW_NUMVOTES","%u voti");		// Warning
define("_MA_NW_CANTVOTEOWN","Non puoi votare sulle risorse inserite da te.<br />Tutti i voti sono memorizzati e verificati.");
define("_MA_NW_VOTEDELETED","Dati sul voto cancellati.");
define("_MA_NW_VOTEONCE","Per favore, non votare due volte la stessa risorsa.");
define("_MA_NW_VOTEAPPRE","Apprezziamo il tuo voto.");
define("_MA_NW_THANKYOU","Grazie per aver speso il tempo di votare su %s"); // %s is your site name
define("_MA_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_MA_NW_AUTHOR","Autore");
define("_MA_NW_META_DESCRIPTION","Meta description");
define("_MA_NW_META_KEYWORDS","Meta keywords");
define("_MA_NW_MAKEPDF","Crea un PDF dall'articolo");
define("_MA_NW_POSTEDON","Pubblicato il : ");
define("_MA_NW_AUTHOR_ID","ID Autore");
define("_MA_NW_POST_SORRY","Spiacente, ma o non ci sono argomenti, oppure non hai i permessi di inviare in nessun argomento. Se sei il webmaster, vai in 'permessi' e controlla i permessi di invio.");

// Added in v 1.50
define("_MA_NW_LINKS","Links");
define("_MA_NW_PAGE","Pagina");
define("_MA_NW_BOOKMARK_ME","Inserisci questo articolo come segnalibro");
define("_AM_NW_TOTAL","Totale articoli di %u");
define("_AM_NW_WHOS_WHO","Chi è chi");
define("_MA_NW_LIST_OF_AUTHORS","Questa è una lista degli autori del sito, clicca sul nome per visualizzare i suoi articoli");
define("_AM_NW_TOPICS_DIRECTORY","Lista degli argomenti");
define("_MA_NW_PAGE_AUTO_SUMMARY","Pagina %d : %s");

// Added in version 1.51
define("_MA_NW_BOOKMARK_TO_BLINKLIST","Bookmark to Blinklist");
define("_MA_NW_BOOKMARK_TO_DELICIOUS","Bookmark to del.icio.us");
define("_MA_NW_BOOKMARK_TO_DIGG","Bookmark to Digg");
define("_MA_NW_BOOKMARK_TO_FARK","Bookmark to Fark");
define("_MA_NW_BOOKMARK_TO_FURL","Bookmark to Furl");
define("_MA_NW_BOOKMARK_TO_NEWSVINE","Bookmark to Newsvine");
define("_MA_NW_BOOKMARK_TO_REDDIT","Bookmark to Reddit");
define("_MA_NW_BOOKMARK_TO_SIMPY","Bookmark to Simpy");
define("_MA_NW_BOOKMARK_TO_SPURL","Bookmark to Spurl");
define("_MA_NW_BOOKMARK_TO_YAHOO","Bookmark to Yahoo");

// Added in version 1.56
define("_MA_NW_NOTYETSTORY","La notizia selezionata non è stata pubblicata. Prego provare più tardi.");
define("_MA_NW_SELECT_IMAGE","Immagine per la notizia");
define("_MA_NW_CURENT_PICTURE","Immagine corrente");

// Added in version 1.68
define("_MA_NW_SP",":");
define("_MA_NW_POSTED","Inviato");

// Added in version 1.68 RC1
define("_MA_NW_NO_COMMENT","Nessun Commento");
define("_MA_NW_METASIZE","Sorry, you may not add more than '+len+' characters into the text area box you just completed.");

// Added in version 1.68 RC3
define("_MA_NW_SEO_TOPICS","argomenti");
define("_MA_NW_SEO_ARTICLES","articoli");
define("_MA_NW_SEO_PRINT","stampa");
define("_MA_NW_SEO_PDF","pdf");
?>
