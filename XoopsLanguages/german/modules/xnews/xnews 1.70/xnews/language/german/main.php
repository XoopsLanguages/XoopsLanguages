<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_MA_NW_PRINTER","Druckoptimierte Version");
define("_MA_NW_SENDSTORY","Schicke den Artikel an einen Freund");
define("_MA_NW_READMORE","mehr...");
define("_MA_NW_COMMENTS","Kommentar?");
define("_MA_NW_ONECOMMENT","1 Kommentar");
define("_MA_NW_BYTESMORE","%s Bytes mehr");
define("_MA_NW_NUMCOMMENTS","%s Kommentare");
define("_MA_NW_MORERELEASES","Weitere Artikel in: ");


//%%%%%%		File Name submit.php		%%%%%
define("_MA_NW_SUBMITNEWS","Artikel schreiben");
define("_MA_NW_TITLE","Titel");
define("_MA_NW_TOPIC","Thema");
define("_MA_NW_THESCOOP","Einleitung");
define("_MA_NW_NOTIFYPUBLISH","Per E-Mail benachrichtigen, wenn der Artikel veröffentlicht wird");
define("_MA_NW_POST","Veröffentlichen");
define("_MA_NW_GO","Los!");
define("_MA_NW_THANKS","Danke für die Übermittlung."); //submission of news article

define("_MA_NW_NOTIFYSBJCT","Artikel für deine Seite"); // Notification mail subject
define("_MA_NW_NOTIFYMSG","Hallo! Es gibt neue Artikel für deine Website."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_MA_NW_NEWSARCHIVES","Archiv");
define("_MA_NW_ARTICLES","Artikel");
define("_MA_NW_VIEWS","Gelesen");
define("_MA_NW_DATE","Datum");
define("_MA_NW_ACTIONS","Aktionen");
define("_MA_NW_PRINTERFRIENDLY","Druckoptimierte Version");

define("_MA_NW_THEREAREINTOTAL","Es gibt insgesamt %s Artikel");

// %s is your site name
define("_MA_NW_INTARTICLE","Interessanter Artikel auf %s");
define("_MA_NW_INTARTFOUND","Hier ist ein interessanter Artikel den ich auf %s gefunden habe");

define("_MA_NW_TOPICC","Thema:");
define("_MA_NW_URL","URL:");
define("_MA_NW_NOSTORY","Der gewählte Artikel existiert nicht mehr.");

//%%%%%%	File Name print.php 	%%%%%

define("_MA_NW_URLFORSTORY","Die URL für diesen Artikel lautet:");

// %s represents your site name
define("_MA_NW_THISCOMESFROM","Dieser Artikel stammt von %s");

// Added by Herve
define("_MA_NW_ATTACHEDFILES","Angehängte Dateien:");
define("_MA_NW_ATTACHEDLIB","Dieser Artikel hat angehängte Dateien");
define("_MA_NW_NEWSSAMEAUTHORLINK","Artikel vom Autor");
define("_MA_NW_NEWS_NO_TOPICS","Kein Themenbereich angelegt, bitte einen anlegen bevor Artikel geschrieben werden.");
define("_MA_NW_PREVIOUS_ARTICLE","Voriger Artikel");
define("_MA_NW_NEXT_ARTICLE","Nächster Artikel");
define("_MA_NW_OTHER_ARTICLES","Weitere Artikel");

// Added by Herve in version 1.3 for rating
define("_MA_NW_RATETHISNEWS","Diesen Artikel bewerten");
define("_MA_NW_RATEIT","Bewerten");
define("_MA_NW_TOTALRATE","Gesamtbewertungen");
define("_MA_NW_RATINGLTOH","Bewertung (niedrigste zu höchster)");
define("_MA_NW_RATINGHTOL","Bewertung (höchste zu niedrigste)");
define("_MA_NW_RATINGC","Bewertung: ");
define("_MA_NW_RATINGSCALE","Die Skala reicht von 1 - 10, wobei 1 die schlechteste und 10 die beste ist.");
define("_MA_NW_BEOBJECTIVE","Bitte objektiv sein. Wenn alle eine 1 oder 10 erhalten, ist das wenig aussagekräftig.");
define("_MA_NW_DONOTVOTE","Bitte nicht für eigene Artikel abstimmen.");
define("_MA_NW_RATING","Bewertung");
define("_MA_NW_VOTE","Stimme");
define("_MA_NW_NORATING","Keine Bewertung ausgewählt.");
define("_MA_NW_USERAVG","Durchschnittliche Bewertung");
define("_MA_NW_DLRATINGS","Neue Bewertungen (Gesamtstimmen: %s)");
define("_MA_NW_ONEVOTE","1 Stimme");
define("_MA_NW_NUMVOTES","%u Stimmen");		// Warning
define("_MA_NW_CANTVOTEOWN","Es ist nicht mehr möglich hierfür abzustimmen.<br />Alle Stimmen wurden registriert und ausgewertet.");
define("_MA_NW_VOTEDELETED","Abstimmungsdaten gelöscht.");
define("_MA_NW_VOTEONCE","Bitte nicht mehrmals für den gleichen Artikel stimmen.");
define("_MA_NW_VOTEAPPRE","Die Stimme wurde gezählt.");
define("_MA_NW_THANKYOU","Danke für die Teilnahme an der Abstimmung hier bei %s"); // %s is your site name
define("_MA_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_MA_NW_AUTHOR","Autor");
define("_MA_NW_META_DESCRIPTION","Meta Beschreibung");
define("_MA_NW_META_KEYWORDS","Meta Schlüsselworte");
define("_MA_NW_MAKEPDF","PDF Dokument vom Artikel anfertigen");
define('_MD_POSTEDON',"Geschrieben am: ");
define("_MA_NW_AUTHOR_ID","Autor ID");
define("_MA_NW_POST_SORRY","Entweder sind keine Themen definiert, oder es sind nicht die erforderlichen Rechte zum Schreiben vorhanden.");

// Added in v 1.50
define("_MA_NW_LINKS","Links");
define("_MA_NW_PAGE","Seite");
define("_MA_NW_BOOKMARK_ME","Bookmark Artikel auf eine der nachstehenden Seiten");
define('_AM_NEWS_TOTAL',"Maximal %u Artikel");
define('_AM_NEWS_WHOS_WHO',"Who's Who");
define('_MA_NW_NEWS_LIST_OF_AUTHORS',"Liste der Autoren auf dieser Website");
define('_AM_NEWS_TOPICS_DIRECTORY',"Themenverzeichnis");
define("_MA_NW_PAGE_AUTO_SUMMARY","Seite %d : %n");

// Added in version 1.51
define("_MA_NW_BOOKMARK_TO_BLINKLIST","Bookmark bei Blinklist");
define("_MA_NW_BOOKMARK_TO_DELICIOUS","Bookmark bei del.icio.us");
define("_MA_NW_BOOKMARK_TO_DIGG","Bookmark bei Digg");
define("_MA_NW_BOOKMARK_TO_FARK","Bookmark bei Fark");
define("_MA_NW_BOOKMARK_TO_FURL","Bookmark bei Furl");
define("_MA_NW_BOOKMARK_TO_NEWSVINE","Bookmark bei Newsvine");
define("_MA_NW_BOOKMARK_TO_REDDIT","Bookmark bei Reddit");
define("_MA_NW_BOOKMARK_TO_SIMPY","Bookmark bei Simpy");
define("_MA_NW_BOOKMARK_TO_SPURL","Bookmark bei Spurl");
define("_MA_NW_BOOKMARK_TO_YAHOO","Bookmark bei Yahoo");

// Added in version 1.56
define('_MA_NW_NOTYETSTORY',"Entschuldigung, der gewählte Artikel wurde noch nicht veröffentlicht. Bitte kommen Sie später wieder und versuche es erneut.");
define('_MA_NW_SELECT_IMAGE',"Wählen Sie ein Bild aus um dies an die Nachricht anzuhängen");
define('_MA_NW_CURENT_PICTURE',"Aktuelles Bild");
?>