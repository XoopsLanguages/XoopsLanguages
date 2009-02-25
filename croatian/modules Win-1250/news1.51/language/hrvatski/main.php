<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER","Stranica pogodna za ispis");
define("_NW_SENDSTORY","Pošalji ovu prièu prijatelju");
define("_NW_READMORE","Proèitaj više...");
define("_NW_COMMENTS","Komentari?");
define("_NW_ONECOMMENT","1 komentar");
define("_NW_BYTESMORE","%s bajta više");
define("_NW_NUMCOMMENTS","%s komentara");
define("_NW_MORERELEASES", "Više izdanja u ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS","Prijavi novost");
define("_NW_TITLE","Naslov");
define("_NW_TOPIC","Tema");
define("_NW_THESCOOP","Izvadio");
define("_NW_NOTIFYPUBLISH","Obavijesti mailom kad bude objavljeno");
define("_NW_POST","Objavi");
define("_NW_GO","Kreni!");
define("_NW_THANKS","Hvala na vašoj prijavi."); //submission of news article

define("_NW_NOTIFYSBJCT","NEWS za moje stranice"); // Notification mail subject
define("_NW_NOTIFYMSG","Hej! Dobili ste novu prijavu na vašim stranicama."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES","Arhive novosti");
define("_NW_ARTICLES","Èlanci");
define("_NW_VIEWS","Pogledi");
define("_NW_DATE","Datum");
define("_NW_ACTIONS","Akcije");
define("_NW_PRINTERFRIENDLY","Stranica pogodna za ispis");

define("_NW_THEREAREINTOTAL","Ima ukupno %s èlanak(a)");

// %s is your site name
define("_NW_INTARTICLE","Interesantan èlanak na %s");
define("_NW_INTARTFOUND","Evo jedan zanimljiv èlanak koji sam pronašao na %s");

define("_NW_TOPICC","Tema:");
define("_NW_URL","URL:");
define("_NW_NOSTORY","Žao nam je, ova prièa ne postoji.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY","URL za ovu prièu je:");

// %s represents your site name
define("_NW_THISCOMESFROM","Ovaj èlanak dolazi sa %s");

// Added by Hervé
define("_NW_ATTACHEDFILES","Dodane datoteke:");
define("_NW_ATTACHEDLIB","Ovaj èlanak ima neke dodane datoteke");
define("_NW_NEWSSAMEAUTHORLINK","Novosti od istog autora");
define("_NW_NEWS_NO_TOPICS","Žao nam je ali nema niti jedne teme, molim stvorite jednu prije nego prijavite novost");
define("_NW_PREVIOUS_ARTICLE","Prethodni èlanak");
define("_NW_NEXT_ARTICLE","Sljedeæi èlanak");
define("_NW_OTHER_ARTICLES","Ostali èlanci");

// Added by Hervé in version 1.3 for rating
define("_NW_RATETHISNEWS","Ocjeni ovu novost");
define("_NW_RATEIT","Ocjeni!");
define("_NW_TOTALRATE","Ukupna ocjena");
define("_NW_RATINGLTOH","Ocjena (Od najmanje do najviše)");
define("_NW_RATINGHTOL","Ocjena (Od najviše do najniže)");
define("_NW_RATINGC","Rang: ");
define("_NW_RATINGSCALE","Ocjene su od 1 - 10, gdje je 1 loše a 10 odlièno.");
define("_NW_BEOBJECTIVE","Molimo da budete objektivni, ako svi daju 1 ili 10, rangiranje nije od neke koristi.");
define("_NW_DONOTVOTE","Ne glasujte za svoje osobne èlanke.");
define("_NW_RATING","Rang");
define("_NW_VOTE","Ocjeni");
define("_NW_NORATING","Neocjenjeno.");
define("_NW_USERAVG","Srednja ocjena");
define("_NW_DLRATINGS","Ocjena novosti (ukupno glasova: %s)");
define("_NW_ONEVOTE","1 glas");
define("_NW_NUMVOTES","%u glasova");		// Warning
define("_NW_CANTVOTEOWN","Ne možete glasovati za èlanak koji ste sami prijavili.<br />Svi glasovi se spremaju i pregledavaju.");
define("_NW_VOTEDELETED","Glasaèki podaci su izbrisani.");
define("_NW_VOTEONCE","Molimo da ne glasati za isti èlanak više puta.");
define("_NW_VOTEAPPRE","Hvala što ste glasovali.");
define("_NW_THANKYOU","Hvala vam što ste si uzeli vremena da date glas na %s"); // %s is your site name
define("_NW_RSSFEED","RSS punjenje");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR","Autor");
define("_NW_META_DESCRIPTION","Meta opis");
define("_NW_META_KEYWORDS","Meta kljuène rijeèi");
define("_NW_MAKEPDF","Stvori PDF od èlanka");
define('_MD_POSTEDON',"Objavljeno : ");
define("_NW_AUTHOR_ID","ID autora");
define("_NW_POST_SORRY","Žao nam je, ili nema tema ili nemate prava da bi napisali u neku temu. Ako ste webmaster, idite na dozvole i postavite 'Prijave' dozvole.");
// Added in v 1.50
define("_NW_LINKS","Linkovi");
define("_NW_PAGE","Stranica");
define("_NW_BOOKMARK_ME","Zapamti ovaj èlanak na ovim stranicama");
define('_AM_NEWS_TOTAL',"Ukupno od %u èlanaka");
define('_AM_NEWS_WHOS_WHO',"Tko je tko");
define('_NW_NEWS_LIST_OF_AUTHORS',"Ovdje je lista autora na ovim stranicama, kliknite na ime da bi vidjeli njegove/njezine èlanke");
define('_AM_NEWS_TOPICS_DIRECTORY',"Popis tema");
define("_NW_PAGE_AUTO_SUMMARY","Strana %d : %s");

// Added in version 1.51
define("_NW_BOOKMARK_TO_BLINKLIST","Oznaèi za Blinklist");
define("_NW_BOOKMARK_TO_DELICIOUS","Oznaèi za del.icio.us");
define("_NW_BOOKMARK_TO_DIGG","Oznaèi za Digg");
define("_NW_BOOKMARK_TO_FARK","Oznaèi za Fark");
define("_NW_BOOKMARK_TO_FURL","Oznaèi za Furl");
define("_NW_BOOKMARK_TO_NEWSVINE","Oznaèi za Newsvine");
define("_NW_BOOKMARK_TO_REDDIT","Oznaèi za Reddit");
define("_NW_BOOKMARK_TO_SIMPY","Oznaèi za Simpy");
define("_NW_BOOKMARK_TO_SPURL","Oznaèi za Spurl");
define("_NW_BOOKMARK_TO_YAHOO","Oznaèi za Yahoo");
?>