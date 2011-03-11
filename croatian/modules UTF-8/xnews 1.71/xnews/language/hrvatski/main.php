<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_MA_NW_PRINTER","Stranica pogodna za ispis");
define("_MA_NW_SENDSTORY","Pošalji ovu objavu prijatelju");
define("_MA_NW_READMORE","Pročitaj više...");
define("_MA_NW_COMMENTS","Komentari?");
define("_MA_NW_ONECOMMENT","1 komentar");
define("_MA_NW_BYTESMORE","%s bajta više");
define("_MA_NW_NUMCOMMENTS","%s komentara");
define("_MA_NW_MORERELEASES", "Više izdanja u ");


//%%%%%%		File Name submit.php		%%%%%
define("_MA_NW_SUBMITNEWS","Prijavi novost");
define("_MA_NW_TITLE","Naslov");
define("_MA_NW_TOPIC","Kategorija");
define("_MA_NW_THESCOOP","Uvod");
define("_MA_NW_NOTIFYPUBLISH","Obavijesti mailom kad bude objavljeno");
define("_MA_NW_POST","Objavi");
define("_MA_NW_GO","Kreni!");
define("_MA_NW_THANKS","Hvala na vašoj prijavi."); //submission of news article

define("_MA_NW_NOTIFYSBJCT","Novosti za moje stranice"); // Notification mail subject
define("_MA_NW_NOTIFYMSG","Hej! Dobili ste novu prijavu na vašim stranicama."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_MA_NW_NEWSARCHIVES","Arhive novosti");
define("_MA_NW_ARTICLES","Članci");
define("_MA_NW_VIEWS","Pogledi");
define("_MA_NW_DATE","Datum");
define("_MA_NW_ACTIONS","Akcije");
define("_MA_NW_PRINTERFRIENDLY","Stranica pogodna za ispis");

define("_MA_NW_THEREAREINTOTAL","Ima ukupno %s članak(a)");

// %s is your site name
define("_MA_NW_INTARTICLE","Interesantan članak na %s");
define("_MA_NW_INTARTFOUND","Evo jedan zanimljiv članak koji sam pronašao na %s");

define("_MA_NW_TOPICC","Kategorija:");
define("_MA_NW_URL","URL:");
define("_MA_NW_NOSTORY","Žao nam je, ova objava ne postoji.");

//%%%%%%	File Name print.php 	%%%%%

define("_MA_NW_URLFORSTORY","URL za ovu objavu je:");

// %s represents your site name
define("_MA_NW_THISCOMESFROM","Ovaj članak dolazi sa %s");

// Added by Hervé
define("_MA_NW_ATTACHEDFILES","Dodane datoteke:");
define("_MA_NW_ATTACHEDLIB","Ovaj članak ima neke dodane datoteke");
define("_MA_NW_NEWSSAMEAUTHORLINK","Novosti od istog autora");
define("_MA_NW_MA_NW_NO_TOPICS","Žao nam je ali nema niti jedne kategorije, molim stvorite jednu prije nego prijavite novost");
define("_MA_NW_PREVIOUS_ARTICLE","Prethodni članak");
define("_MA_NW_NEXT_ARTICLE","Sljedeći članak");
define("_MA_NW_OTHER_ARTICLES","Ostali članci");

// Added by Hervé in version 1.3 for rating
define("_MA_NW_RATETHISNEWS","Ocjeni ovu novost");
define("_MA_NW_RATEIT","Ocjeni!");
define("_MA_NW_TOTALRATE","Ukupna ocjena");
define("_MA_NW_RATINGLTOH","Ocjena (Od najmanje do najviše)");
define("_MA_NW_RATINGHTOL","Ocjena (Od najviše do najniže)");
define("_MA_NW_RATINGC","Rang: ");
define("_MA_NW_RATINGSCALE","Ocjene su od 1 - 10, gdje je 1 loše a 10 odlično.");
define("_MA_NW_BEOBJECTIVE","Molimo da budete objektivni, ako svi daju 1 ili 10, rangiranje nije od neke koristi.");
define("_MA_NW_DONOTVOTE","Ne glasujte za svoje osobne članke.");
define("_MA_NW_RATING","Rang");
define("_MA_NW_VOTE","Ocjeni");
define("_MA_NW_NORATING","Neocjenjeno.");
define("_MA_NW_USERAVG","Srednja ocjena");
define("_MA_NW_DLRATINGS","Ocjena novosti (ukupno glasova: %s)");
define("_MA_NW_ONEVOTE","1 glas");
define("_MA_NW_NUMVOTES","%u glasova");		// Warning
define("_MA_NW_CANTVOTEOWN","Ne možete glasovati za članak koji ste sami prijavili.<br />Svi glasovi se spremaju i pregledavaju.");
define("_MA_NW_VOTEDELETED","Glasački podaci su izbrisani.");
define("_MA_NW_VOTEONCE","Molimo da ne glasujete za isti članak više puta.");
define("_MA_NW_VOTEAPPRE","Hvala što ste glasovali.");
define("_MA_NW_THANKYOU","Hvala vam što ste si uzeli vremena da date glas na %s"); // %s is your site name
define("_MA_NW_RSSFEED","RSS punjenje");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_MA_NW_AUTHOR","Autor");
define("_MA_NW_META_DESCRIPTION","Meta opis");
define("_MA_NW_META_KEYWORDS","Meta ključne riječi");
define("_MA_NW_MAKEPDF","Stvori PDF od članka");
define("_MA_NW_POSTEDON","Objavljeno : ");
define("_MA_NW_AUTHOR_ID","ID autora");
define("_MA_NW_POST_SORRY","Žao nam je, ili nema kategorija ili nemate prava da bi napisali u neku kategoriju. Ako ste webmaster, idite na dozvole i postavite 'Prijave' dozvole.");

// Added in v 1.50
define("_MA_NW_LINKS","Linkovi");
define("_MA_NW_PAGE","Stranica");
define("_MA_NW_BOOKMARK_ME","Zapamti ovaj članak na ovim stranicama");
define("_AM_NW_TOTAL","Ukupno od %u članaka");
define("_AM_NW_WHOS_WHO","Tko je tko");
define("_MA_NW_LIST_OF_AUTHORS","Ovdje je lista autora na ovim stranicama, kliknite na ime da bi vidjeli njegove/njezine članke");
define("_AM_NW_TOPICS_DIRECTORY","Popis kategorija");
define("_MA_NW_PAGE_AUTO_SUMMARY","Strana %d : %s");

// Added in version 1.51
define("_MA_NW_BOOKMARK_TO_BLINKLIST","Označi za Blinklist");
define("_MA_NW_BOOKMARK_TO_DELICIOUS","Označi za del.icio.us");
define("_MA_NW_BOOKMARK_TO_DIGG","Označi za Digg");
define("_MA_NW_BOOKMARK_TO_FARK","Označi za Fark");
define("_MA_NW_BOOKMARK_TO_FURL","Označi za Furl");
define("_MA_NW_BOOKMARK_TO_NEWSVINE","Označi za Newsvine");
define("_MA_NW_BOOKMARK_TO_REDDIT","Označi za Reddit");
define("_MA_NW_BOOKMARK_TO_SIMPY","Označi za Simpy");
define("_MA_NW_BOOKMARK_TO_SPURL","Označi za Spurl");
define("_MA_NW_BOOKMARK_TO_YAHOO","Označi za Yahoo");

// Added in version 1.56
define("_MA_NW_NOTYETSTORY","Oprostite, izabrana objava još nije objavljena. Molimo navratite kasnije i probajte ponovo.");
define("_MA_NW_SELECT_IMAGE", "Izaberite sliku koju ćete dodati novosti");
define("_MA_NW_CURENT_PICTURE", "Trenutna slika");

// Added in version 1.68 BETA
define("_MA_NW_SP", ":");
define("_MA_NW_POSTED", "Objavljeno");

// Added in version 1.68 RC1
define("_MA_NW_NO_COMMENT", "Nema komenatara");
define("_MA_NW_METASIZE", "Žao nam je, ne možete dodati više od '+len+' znakova u tekstno polje koje ste upravo ispunili.");

// Added in version 1.68 RC3
define("_MA_NW_SEO_TOPICS", "kategorije");
define("_MA_NW_SEO_ARTICLES", "članci");
define("_MA_NW_SEO_PRINT", "ispis");
define("_MA_NW_SEO_PDF", "pdf");
?>