<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER","Stranica pogodna za ispis");
define("_NW_SENDSTORY","Po�alji ovu pri�u prijatelju");
define("_NW_READMORE","Pro�itaj vi�e...");
define("_NW_COMMENTS","Komentari?");
define("_NW_ONECOMMENT","1 komentar");
define("_NW_BYTESMORE","%s bajta vi�e");
define("_NW_NUMCOMMENTS","%s komentara");
define("_NW_MORERELEASES", "Vi�e izdanja u ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS","Prijavi novost");
define("_NW_TITLE","Naslov");
define("_NW_TOPIC","Tema");
define("_NW_THESCOOP","Izvadio");
define("_NW_NOTIFYPUBLISH","Obavijesti mailom kad bude objavljeno");
define("_NW_POST","Objavi");
define("_NW_GO","Kreni!");
define("_NW_THANKS","Hvala na va�oj prijavi."); //submission of news article

define("_NW_NOTIFYSBJCT","NEWS za moje stranice"); // Notification mail subject
define("_NW_NOTIFYMSG","Hej! Dobili ste novu prijavu na va�im stranicama."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES","Arhive novosti");
define("_NW_ARTICLES","�lanci");
define("_NW_VIEWS","Pogledi");
define("_NW_DATE","Datum");
define("_NW_ACTIONS","Akcije");
define("_NW_PRINTERFRIENDLY","Stranica pogodna za ispis");

define("_NW_THEREAREINTOTAL","Ima ukupno %s �lanak(a)");

// %s is your site name
define("_NW_INTARTICLE","Interesantan �lanak na %s");
define("_NW_INTARTFOUND","Evo jedan zanimljiv �lanak koji sam prona�ao na %s");

define("_NW_TOPICC","Tema:");
define("_NW_URL","URL:");
define("_NW_NOSTORY","�ao nam je, ova pri�a ne postoji.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY","URL za ovu pri�u je:");

// %s represents your site name
define("_NW_THISCOMESFROM","Ovaj �lanak dolazi sa %s");

// Added by Herv�
define("_NW_ATTACHEDFILES","Dodane datoteke:");
define("_NW_ATTACHEDLIB","Ovaj �lanak ima neke dodane datoteke");
define("_NW_NEWSSAMEAUTHORLINK","Novosti od istog autora");
define("_NW_NEWS_NO_TOPICS","�ao nam je ali nema niti jedne teme, molim stvorite jednu prije nego prijavite novost");
define("_NW_PREVIOUS_ARTICLE","Prethodni �lanak");
define("_NW_NEXT_ARTICLE","Sljede�i �lanak");
define("_NW_OTHER_ARTICLES","Ostali �lanci");

// Added by Herv� in version 1.3 for rating
define("_NW_RATETHISNEWS","Ocjeni ovu novost");
define("_NW_RATEIT","Ocjeni!");
define("_NW_TOTALRATE","Ukupna ocjena");
define("_NW_RATINGLTOH","Ocjena (Od najmanje do najvi�e)");
define("_NW_RATINGHTOL","Ocjena (Od najvi�e do najni�e)");
define("_NW_RATINGC","Rang: ");
define("_NW_RATINGSCALE","Ocjene su od 1 - 10, gdje je 1 lo�e a 10 odli�no.");
define("_NW_BEOBJECTIVE","Molimo da budete objektivni, ako svi daju 1 ili 10, rangiranje nije od neke koristi.");
define("_NW_DONOTVOTE","Ne glasujte za svoje osobne �lanke.");
define("_NW_RATING","Rang");
define("_NW_VOTE","Ocjeni");
define("_NW_NORATING","Neocjenjeno.");
define("_NW_USERAVG","Srednja ocjena");
define("_NW_DLRATINGS","Ocjena novosti (ukupno glasova: %s)");
define("_NW_ONEVOTE","1 glas");
define("_NW_NUMVOTES","%u glasova");		// Warning
define("_NW_CANTVOTEOWN","Ne mo�ete glasovati za �lanak koji ste sami prijavili.<br />Svi glasovi se spremaju i pregledavaju.");
define("_NW_VOTEDELETED","Glasa�ki podaci su izbrisani.");
define("_NW_VOTEONCE","Molimo da ne glasati za isti �lanak vi�e puta.");
define("_NW_VOTEAPPRE","Hvala �to ste glasovali.");
define("_NW_THANKYOU","Hvala vam �to ste si uzeli vremena da date glas na %s"); // %s is your site name
define("_NW_RSSFEED","RSS punjenje");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR","Autor");
define("_NW_META_DESCRIPTION","Meta opis");
define("_NW_META_KEYWORDS","Meta klju�ne rije�i");
define("_NW_MAKEPDF","Stvori PDF od �lanka");
define('_MD_POSTEDON',"Objavljeno : ");
define("_NW_AUTHOR_ID","ID autora");
define("_NW_POST_SORRY","�ao nam je, ili nema tema ili nemate prava da bi napisali u neku temu. Ako ste webmaster, idite na dozvole i postavite 'Prijave' dozvole.");
// Added in v 1.50
define("_NW_LINKS","Linkovi");
define("_NW_PAGE","Stranica");
define("_NW_BOOKMARK_ME","Zapamti ovaj �lanak na ovim stranicama");
define('_AM_NEWS_TOTAL',"Ukupno od %u �lanaka");
define('_AM_NEWS_WHOS_WHO',"Tko je tko");
define('_NW_NEWS_LIST_OF_AUTHORS',"Ovdje je lista autora na ovim stranicama, kliknite na ime da bi vidjeli njegove/njezine �lanke");
define('_AM_NEWS_TOPICS_DIRECTORY',"Popis tema");
define("_NW_PAGE_AUTO_SUMMARY","Strana %d : %s");

// Added in version 1.51
define("_NW_BOOKMARK_TO_BLINKLIST","Ozna�i za Blinklist");
define("_NW_BOOKMARK_TO_DELICIOUS","Ozna�i za del.icio.us");
define("_NW_BOOKMARK_TO_DIGG","Ozna�i za Digg");
define("_NW_BOOKMARK_TO_FARK","Ozna�i za Fark");
define("_NW_BOOKMARK_TO_FURL","Ozna�i za Furl");
define("_NW_BOOKMARK_TO_NEWSVINE","Ozna�i za Newsvine");
define("_NW_BOOKMARK_TO_REDDIT","Ozna�i za Reddit");
define("_NW_BOOKMARK_TO_SIMPY","Ozna�i za Simpy");
define("_NW_BOOKMARK_TO_SPURL","Ozna�i za Spurl");
define("_NW_BOOKMARK_TO_YAHOO","Ozna�i za Yahoo");
?>