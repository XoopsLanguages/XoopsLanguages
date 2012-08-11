<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER","&Scaron;tampaj");
define("_NW_SENDSTORY","Preko E-Mail-a po&scaron;alji");
define("_NW_READMORE","Pro&#269;itaj vi&scaron;e...");
define("_NW_COMMENTS","Napi&scaron;i Komentar?");
define("_NW_ONECOMMENT","1 Komentar");
define("_NW_BYTESMORE","%s Byta vi&scaron;e");
define("_NW_NUMCOMMENTS","%s Komentari");
define("_NW_MORERELEASES","Vi&scaron;e ovome u: ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS","Po&scaron;alji");
define("_NW_TITLE","Naslov");
define("_NW_TOPIC","Tema");
define("_NW_THESCOOP","Tekst ");
define("_NW_NOTIFYPUBLISH","Preko E-Mail-a obavijesti, ako se vijest objavi");
define("_NW_POST","Objavi");
define("_NW_GO","Idi!");
define("_NW_THANKS","Hvala ti primili smo tvoju poslatu vijest."); //submission of news article

define("_NW_NOTIFYSBJCT","Vijest za tvoju stranicu"); // Notification mail subject
define("_NW_NOTIFYMSG","Halo! Ima&scaron; kod nas novu vijest za tvoju web stranicu."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES","Arhiva");
define("_NW_ARTICLES","Vijesti");
define("_NW_VIEWS","&#268;itanja");
define("_NW_DATE","Datum");
define("_NW_ACTIONS","Akcija");
define("_NW_PRINTERFRIENDLY","&Scaron;tampaj");

define("_NW_THEREAREINTOTAL","Ima ukupno %s vijesti");

// %s is your site name
define("_NW_INTARTICLE","Interesantna vijest na %s");
define("_NW_INTARTFOUND","Ovde ima interesantna vijest koju sam ovde %s pro&#269;itao(la)");

define("_NW_TOPICC","Tema:");
define("_NW_URL","URL:");
define("_NW_NOSTORY","Izabrana vijest ne postoji.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY","URL za ovaj vijest je:");

// %s represents your site name
define("_NW_THISCOMESFROM","Ova vijest je od %s");

// Added by Hervé
define("_NW_ATTACHEDFILES","Zaka&#269;eni podaci:");
define("_NW_ATTACHEDLIB","Ova vijest ima zaka&#269;en podatak");
define("_NW_NEWSSAMEAUTHORLINK","Vijesti od istog Autora");
define("_NW_NEWS_NO_TOPICS","Nije Tema izabrana, molimo te da jedanu temu napravi prije nego vijest napi&scaron;e&scaron;.");
define("_NW_PREVIOUS_ARTICLE","Prethodni vijesti");
define("_NW_NEXT_ARTICLE","Sljede&#263;i vijesti");
define("_NW_OTHER_ARTICLES","Ostali vijesti");

// Added by Hervé in version 1.3 for rating
define("_NW_RATETHISNEWS","Ovu vijest ocijeni");
define("_NW_RATEIT","Ocjeni");
define("_NW_TOTALRATE","Ukupno ocjena");
define("_NW_RATINGLTOH","Ocjena(od manje ka ve&#263;oj)");
define("_NW_RATINGHTOL","Ocjena (od ve&#263;e ka manjoj)");
define("_NW_RATINGC","Ocjena: ");
define("_NW_RATINGSCALE","Skala ocjene je od 1 - 10, gdje je 1 lo&scaron;a a 10 najbolja ocjena.");
define("_NW_BEOBJECTIVE","Molim te budi objektivan(a). Ako bi svi sa 1 ili 10 ocjenjivali, onda ocjenjivanje nebi imalo smisla.");
define("_NW_DONOTVOTE","Molim te svoje vijesti ne ocjenjuj.");
define("_NW_RATING","Ocjena");
define("_NW_VOTE","Glasova");
define("_NW_NORATING","Ocjena nije izabrana.");
define("_NW_USERAVG","Prosje&#269;na ocjena");
define("_NW_DLRATINGS","Nove ocjene (Ukupno glasova: %s)");
define("_NW_ONEVOTE","1 glas");
define("_NW_NUMVOTES","%u glasova");		// Warning
define("_NW_CANTVOTEOWN","Glasanje za ovu vijest nije vi&scaron;e mogu&#263;e.<br />Svi glasovi se registruju i bilje&#382;e.");
define("_NW_VOTEDELETED","Glasa&#269;ke podatke izbri&scaron;i.");
define("_NW_VOTEONCE","Molim te samo jednom ovu vijest ocjeni.");
define("_NW_VOTEAPPRE","Tvoje glasanje je ubrojano.");
define("_NW_THANKYOU","Hvala na u&#269;e&scaron;&#263;u i glasanju ovde kod %s"); // %s is your site name
define("_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR","Autor");
define("_NW_META_DESCRIPTION","Meta opis");
define("_NW_META_KEYWORDS","Meta Klju&#269;ne rije&#269;i");
define("_NW_MAKEPDF","PDF Dokument napravi");
define("_MD_POSTEDON","Napisao(la): ");
define("_NW_AUTHOR_ID","Autorov ID");
define("_NW_POST_SORRY","Ili Teme nisu definisane, ili ti nije odobreno da nam vijesti &scaron;alje&scaron;.");

// Added in v 1.50
define("_NW_LINKS","Linkovi");
define("_NW_PAGE","Stranica");
define("_NW_BOOKMARK_ME","Ovu vijest postavi za &#269;itanje.");
define('_AM_NEWS_TOTAL',"Ukupno %u vijesti");
define('_AM_NEWS_WHOS_WHO',"Gdje je ko");
define('_NW_NEWS_LIST_OF_AUTHORS',"Ovde je lista Autora vijesti, klikni na Nik ime Autora i vidi njegove vijesti koje je dosada poslao(la) ");
define('_AM_NEWS_TOPICS_DIRECTORY',"Teme-Direktorij");
define("_NW_PAGE_AUTO_SUMMARY","Stranica %d od %s");

// Added in version 1.51
define("_NW_BOOKMARK_TO_BLINKLIST","Bookmark kod Blinklist");
define("_NW_BOOKMARK_TO_DELICIOUS","Bookmark kod del.icio.us");
define("_NW_BOOKMARK_TO_DIGG","Bookmark kod Digg");
define("_NW_BOOKMARK_TO_FARK","Bookmark kod Fark");
define("_NW_BOOKMARK_TO_FURL","Bookmark bei Furl");
define("_NW_BOOKMARK_TO_NEWSVINE","Bookmark kod Newsvine");
define("_NW_BOOKMARK_TO_REDDIT","Bookmark kod Reddit");
define("_NW_BOOKMARK_TO_SIMPY","Bookmark kod Simpy");
define("_NW_BOOKMARK_TO_SPURL","Bookmark kod Spurl");
define("_NW_BOOKMARK_TO_YAHOO","Bookmark kod Yahoo");

// Added in version 1.56
define('_NW_NOTYETSTORY',"Izvinjajemo se, ali izabrana vijest nije jo&scaron; odobrena za javnu objavu. Molimo te navrati kasnije.Hvala!.");
?>
