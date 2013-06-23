<?php
define("STATS_HEADING","Site Statistieken");
define("STATS_USER_AGENT","Uw Browser");
define("STATS_BROWSERS","Browsers");
define("STATS_SEARCHENGINES","Zoek machines");
define("STATS_UNKNOWN","Onbekend");
define("STATS_BOTS","Bots");
define("STATS_OTHER","Overige");
define("STATS_OPERATINGSYS","Besturingssysteem");
define("STATS_MISC","Overige Statistieken");
define("STATS_REGUSERS","Geregistreerde gebruikers");
define("STATS_AUTHORS","Auteurs");
define("STATS_ACTIVEUSERS","Actieve Sessie?s");
define("STATS_STORIESPUBLISHED","Verhalen gepubliseerd");
define("STATS_COMMENTSPOSTED","Commentaar geplaatst");
define("STATS_XOOPS_VERSION","XOOPS Versie");
define("STATS_SECTION","Speciale Sectie?s");
define("STATS_ARTICLE","Sectie artikelen");
define("STATS_STORIESWAITING","Wachtende verhalen");
define("STATS_TOPICS","Nieuws onderwerpen");
define("STATS_LINKS","Web Links");
define("STATS_LINKCAT","Link categorieen");
define("STATS_GALLERY_IMAGES","Gallery afbeeldingen");
define("STATS_GALLERY_ALBUMS","Gallery albums");
define("STATS_YEARHITS","Jaarlijkse Hits");
define("STATS_HITDETAIL","Hits Detail");
define("STATS_WERERECEIVED","Totaal");
define("STATS_PAGEVIEWS","pagina?s bekeken.");
define("STATS_TODAYIS","Vandaag is het");
define("STATS_MOSTMONTH","Meeste hits in maand");
define("STATS_HITS","hits");
define("STATS_MOSTDAY","Meeste hits op dag");
define("STATS_MOSTHOUR","Meeste hits");
define("STATS_ON","uur op");
define("STATS_YEARLYSTATS","Hits per jaar");
define("STATS_YEAR","Jaar");
define("STATS_PAGESVIEWED","Pagina?s bekeken");
define("STATS_MONTHLYSTATS","Hits per maand");
define("STATS_MONTH","Maand");
define("STATS_DAILYSTATS","Hit per dag");
define("STATS_DAILY","Dag");
define("STATS_HOURLYSTATS","Hits per uur");
define("STATS_HOURLY","Uur");
define("STATS_YEARDETAIL","Voor %s");
define("STATS_MONTHDETAIL","Voor %s %s");
define("STATS_DAILYDETAIL","Voor %s %s, %s");
// version 0.3
define("STATS_USERS_ONLINE","Gebruikers online");
define("STATS_TCONTENT_AVAIL","TinyContent beschikbaar");
define("STATS_TCONTENT_VISIBLE","TinyContent zichtbaar");
// version 0.45
define("STATS_WFDLCAT","WF-DL onderdelen");
define("STATS_WFDLFILES","WF-DL bestanden");
define("STATS_DLCAT","DL onderdelen");
define("STATS_DLFILES","DL bestanden");
define("STATS_AMSARTICLE","AMS Artikels");
define("STATS_AMSSTORIESWAITING","Wachtende AMS");
define("STATS_AMSTOPICS","AMS onderwerpen");
// version 0.60
define("STATS_BYEARHITS","Yearly Blocked Hits");
define("STATS_BLOCKEDTYPE","Blocked Hits by Type");

// ******************************************************************
// admin defines
define("STATS_REMOTEADDR_HEAD","Remote Adres");
define("STATS_REMOTE_IP","Remote IP");
define("STATS_REMOTE_DATE","Datum");
define("STATS_REMOTE_HOUR","Uur");
define("STATS_REMOTE_HITS","Hits");
define("STATS_IPPURGE","IP Tabel opschonen");
define("STATS_REFERPURGE","REFER Tabel opschonen");
define("STATS_REMOTEADDR_PURGE","IP Tabel is opgeschoond!");
define("STATS_REMOTEADDR_PURGESURE","U staat op het punt om de IP tabel op te schonen, wilt u doorgaan?");
define("STATS_REMOTEADDR_NPURGE","WAARSCHUWING: Niet in staat om de IP tabel op te schonen!");
define("STATS_REFER_HEAD","Referrer's Lijst");
define("STATS_REFER","Referrer");
define("STATS_REFER_DATE","Datum");
define("STATS_REFER_HOUR","Uur");
define("STATS_REFER_HITS","Hits");
define("STATS_REFER_PATH","Refer Pad");
define("STATS_REFER_PURGE","REFER Tabel is opgeschoond!");
define("STATS_REFER_PURGESURE","U staat op het punt om de REFER tabel op te schonen, wilt u doorgaan?");
define("STATS_REFER_NPURGE","WAARSCHUWING: Niet in staat om REFER tabel op te schonen!");
define("STATS_ADMINHEAD","Statistieken Administratie Menu");
define("STATS_ADMENU2","PHP Info");
define("STATS_ADMENU3","PHP Credits");
define("STATS_ADMENU4","PHP Configuratie");
define("STATS_ADMENU5","PHP Modules");
define("STATS_ADMENU6","PHP Omgeving");
define("STATS_ADMENU7","PHP Variabelen");
define("STATS_ADMENU8","PHP Licenties");
define("STATS_ADMENU9","PHP Complete Info");
define("STATS_ADMENU10","Remote Adres Database");
define("STATS_ADMENU11","Referrers Database");
// version 0.3
define("STATS_REFERBLACKLIST","Verstuur Referrer Blacklist");
define("STATS_STATSBL_INST","Voer elke referrer in gescheiden door een <b>|</b><br>Voorbeeld: www.aaa.com|www.bbb.com");
define("STATS_REFER_BLSURE","U staat op het punt om ingevoerde referrers op de BLACKLIST te zetten, wilt u doorgaan?");
define("STATS_BLACKLISTED","Blacklisted : ");
define("STATS_PURGEBL","Blacklist opschonen");
define("STATS_REFER_PURGEBL","U staat op het punt om de BLACKLIST op te schonen, wilt u doorgaan?");
define("STATS_BLACKLIST_PURGE","BLACKLIST is opgeschoond!");
define("STATS_BLACKLIST_NPURGE","WAARSCHUWING: Niet in staat om BLACKLIST op te schonen!");
define("STATS_BLACKLIST_CREATED","BLACKLIST gamaakt");
define("STATS_STATSBL_HELP","Deze functie blokeerd het tonen van sites (referrers) die <b>niet</b> zichtbaar mogen zijn voor gebruikers.  Dit heeft impact op het tonen in het Referrer Blok. "
                           ."Alle referrers naar deze site worden wel geteld en zijn zichtbaar voor de beheerder.");
// version 0.45
define("STATS_REVERSELOOKUP","Reverse opzoeken van ");
define("STATS_REVERSELOOKUP_ERROR","Fout: Niet in staat om Reverse Lookup informatie te verkrijgen!");
define("STATS_XWHOIS","Whois");
define("STATS_DNSLOOKUP","DNS Lookup voor ");
define("STATS_DNSLOOKUP_ERROR","Fout: Niet in staat op DNS Lookup informatie te verkrijgen!");
define("STATS_QUERYSTRING","Query tekst");
define("STATS_FRAGMENTSTRING","Fragment tekst");
define("STATS_UNIQUEIP","Hits per UNIEK IP");
define("STATS_STDIP","IP Hits per uur");
define("STATS_USERSCREEN_HEAD","gebruikers scherm gegevens");
define("STATS_SW_UNKNOWN","Scherm breedte onbekend");
define("STATS_SW_HEAD","Scherm breedte");
define("STATS_SC_UNKNOWN","Kleur diepte onbekend");
define("STATS_SC_HEAD","Kleur diepte");
define("STATS_SCREEN_HITS","Aantal");
define("STATS_ADMENU12","Gebruikers scherm informatie");
define("STATS_SCREEN_PURGE","Verwijder scherm gegevens");
define("STATS_REFER_PURGEUS","U staat op het punt om de scherm gegevens te verwijderen, wilt u doorgaan?");
define("STATS_USERSCREEN_PURGE","Scherm gegevens zijn verwijderd!");
define("STATS_USERSCREEN_NPURGE","WAARSCHUWING: Niet in staat om scherm gegevens te verwijderen!");

// version 0.60
define("STATS_ADMENU1","Preferences");
define("STATS_INVALIDMETHOD","Invalid Request Method");
define("STATS_INVALIDIP","Supplied IP is invalid for access");
define("STATS_STATSBL_HELP","Referers entered here will be handled based on your <b>XOOPStats Preferences.</b>"
                           ."If the referers are <b>Forbidden, Reflected, or Ignored</b><br> "
                           ."in <b>XOOPStats Preferences,</b> they will <b>NOT</b> be counted.<br>");
define("STATS_STATSBL_INST","Enter each referer seperated by <b>|</b><br>Example: www.aaa.com|www.bbb.com<br>Regular expressions are supported<br>"
                            ."Example: ^aaa|aaa$|aaa[A-Z]*");

//********************************************************************
// months of the year
define("STATS_JANUARY","Januari");
define("STATS_FEBRUARY","Februari");
define("STATS_MARCH","Maart");
define("STATS_APRIL","April");
define("STATS_MAY","Mei");
define("STATS_JUNE","Juni");
define("STATS_JULY","Juli");
define("STATS_AUGUST","Augustus");
define("STATS_SEPTEMBER","September");
define("STATS_OCTOBER","Oktober");
define("STATS_NOVEMBER","November");
define("STATS_DECEMBER","December");

// Defined for use whenever I am constructing new stuff!!!
define("STATS_UNDERCONSTRUCTION","Pagina in onderhoud!  Kom later weer terug!");
define("STATS_INVALIDOPERATION","Onjuiste actie!");
?>
