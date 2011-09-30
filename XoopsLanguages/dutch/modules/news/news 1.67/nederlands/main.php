<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER","Printvriendelijke pagina");
define("_NW_SENDSTORY","Stuur dit nieuwsbercht naar een kennis");
define("_NW_READMORE","Lees Verder...");
define("_NW_COMMENTS","Commenta(a)r(en)?");
define("_NW_ONECOMMENT","1 commentaar");
define("_NW_BYTESMORE","%s bytes meer");
define("_NW_NUMCOMMENTS","%s commentaren");
define("_NW_MORERELEASES", "Meer artikelen in: ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS","Nieuws inzenden");
define("_NW_TITLE","Titel");
define("_NW_TOPIC","Nieuwscategorie");
define("_NW_THESCOOP","Inleidende tekst");
define("_NW_NOTIFYPUBLISH","Notificeer mij per Email bij publicatie");
define("_NW_POST","Verstuur"); //Post
define("_NW_GO","Ga!");
define("_NW_THANKS","Bedankt voor je inzending."); //submission of news article

define("_NW_NOTIFYSBJCT","Nieuws voor mijn website"); // Notification mail subject
define("_NW_NOTIFYMSG","Dag! Je hebt een nieuws inzending voor je website."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES","Nieuwsarchief");
define("_NW_ARTICLES","Artikelen");
define("_NW_VIEWS","Gelezen");
define("_NW_DATE","Datum");
define("_NW_ACTIONS","Acties"); //Actions
define("_NW_PRINTERFRIENDLY","Printvriendelijke pagina");

define("_NW_THEREAREINTOTAL","Er bevinden zich in totaal %s artikelen");

// %s is your site name
define("_NW_INTARTICLE","Interessant Nieuwsartikel bij %s");
define("_NW_INTARTFOUND","Hier is een interessant nieuwsbericht dat ik tegen kwam bij %s");

define("_NW_TOPICC","Onderwerp:");
define("_NW_URL","URL:");
define("_NW_NOSTORY","Sorry, het geselecteerde nieuwsbericht bestaat niet.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY","De URL van dit artikel is:");

// %s represents your site name
define("_NW_THISCOMESFROM","Dit artikel is afkomstig van %s");

// Added by Hervé
define("_NW_ATTACHEDFILES","Bijlage(n):");//Attached Files
define("_NW_ATTACHEDLIB","Dit artikel bevat bijlage(n)");
define("_NW_NEWSSAMEAUTHORLINK","Nieuws afkomstig van dezelfde auteur");
define("_NW_NEWS_NO_TOPICS","Sorrie, er is geen onderwerp. Creëer deze voordat je nieuws inzendt"); //Sorry but actually there's no topics, please create one before to submit a news
define("_NW_PREVIOUS_ARTICLE","Vorig artikel");
define("_NW_NEXT_ARTICLE","Volgend artikel");
define("_NW_OTHER_ARTICLES","Andere artikelen");

// Added by Hervé in version 1.3 for rating
define("_NW_RATETHISNEWS","Waardeer dit artikel");
define("_NW_RATEIT","Waardeer!");
define("_NW_TOTALRATE","Totaal aantal waarderingen");
define("_NW_RATINGLTOH","Waardering (Laagste naar hoogste score)");
define("_NW_RATINGHTOL","Waardering (Hoogste naar laagste score)");
define("_NW_RATINGC","Cijfer: ");
define("_NW_RATINGSCALE","De schaal is 1 - 10, waarvan 1 slecht is en 10 uitstekend.");
define("_NW_BEOBJECTIVE","Wees svp objectief. Als ieder artikel het cijfer 1 of 10 toegekend krijgt kan er weinig waarde worden gehecht aan de stemming.");
define("_NW_DONOTVOTE","Stem niet op je eigen ingezonden artikel.");
define("_NW_RATING","Waardering"); //Rating
define("_NW_VOTE","Stem");
define("_NW_NORATING","Geen cijfer geselecteerd.");
define("_NW_USERAVG","Gemiddeld gebruikers cijfer");
define("_NW_DLRATINGS","Nieuws waardering (totaal aantal stemmen: %s)");
define("_NW_ONEVOTE","1 stem");
define("_NW_NUMVOTES","%u stemmen");		// Warning
define("_NW_CANTVOTEOWN","Je kunt geen waardering geven op een door jouw ingezonden artikel.<br />Alle stemmingen worden gelogged en bekeken.");
define("_NW_VOTEDELETED","Waarderingsdata verwijderd.");
define("_NW_VOTEONCE","gelieve niet vaker dan één keer je waardering uit te spreken op hetzelfde artikel.");
define("_NW_VOTEAPPRE","Uw waardering wordt geapprecieerd.");
define("_NW_THANKYOU","Bedankt voor het uitbrengen van je stem op %s"); // %s is your site name
define("_NW_RSSFEED","RSS Feed");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR","Auteur");
define("_NW_META_DESCRIPTION","Meta beschrijving");
define("_NW_META_KEYWORDS","Meta keywords");
define("_NW_MAKEPDF","Creëer een PDF van dit artikel");
define('_MD_POSTEDON',"Geplaatst op: "); //Posted on
define("_NW_AUTHOR_ID","Auteur's ID");
define("_NW_POST_SORRY","Sorry, je beschikt niet over de benodigde rechten om in een onderwerp te posten of er zijn geen onderwerpen."); //but either there are no topics or you don't have the rights to post in any topic

// Added in v 1.50
define("_NW_LINKS","Links");
define("_NW_PAGE","Pagina");
define("_NW_BOOKMARK_ME","Maak voor dit artikel van deze website en bladwijzer");
define('_AM_NEWS_TOTAL',"Totaal van %u artikelen");
define('_AM_NEWS_WHOS_WHO',"Wie is Wie");
define('_NW_NEWS_LIST_OF_AUTHORS',"Hier is een lijst met de auteurs op deze site, klik op een naam om zijn of haar artikelen te lezen");
define('_AM_NEWS_TOPICS_DIRECTORY',"Onderwerp Directorie");
define("_NW_PAGE_AUTO_SUMMARY","Pagina %d : %s");

// Added in version 1.51
define("_NW_BOOKMARK_TO_BLINKLIST","Bookmark op Blinklist");
define("_NW_BOOKMARK_TO_DELICIOUS","Bookmark op del.icio.us");
define("_NW_BOOKMARK_TO_DIGG","Bookmark op Digg");
define("_NW_BOOKMARK_TO_FARK","Bookmark op Fark");
define("_NW_BOOKMARK_TO_FURL","Bookmark op Furl");
define("_NW_BOOKMARK_TO_NEWSVINE","Bookmark op Newsvine");
define("_NW_BOOKMARK_TO_REDDIT","Bookmark op Reddit");
define("_NW_BOOKMARK_TO_SIMPY","Bookmark op Simpy");
define("_NW_BOOKMARK_TO_SPURL","Bookmark op Spurl");
define("_NW_BOOKMARK_TO_YAHOO","Bookmark op Yahoo");

// Added in version 1.56
define('_NW_NOTYETSTORY',"Sorry, het geselecteerde nieuwsartikel is nog niet gepubliseerd. Kom later terug en probeer opnieuw.");
define('_NW_SELECT_IMAGE', "Selecteer een afbeelding om toe te voegen aan het nieuwsartikel");
define('_NW_CURENT_PICTURE', "Huidige afbeelding");
?>