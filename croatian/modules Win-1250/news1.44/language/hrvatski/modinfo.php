<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Novosti');

// A brief description of this module
define('_MI_NEWS_DESC','Stvara Slashdot-sliène sekcije novosti, gdje korisnici mogu napisati novosti/komentare.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Tema novosti');
define('_MI_NEWS_BNAME3','Velika prièa');
define('_MI_NEWS_BNAME4','Top novosti');
define('_MI_NEWS_BNAME5','Zadnje novosti');
define('_MI_NEWS_BNAME6','Uredi novosti');
define('_MI_NEWS_BNAME7','Proði kroz teme');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Prijavi novost');
define('_MI_NEWS_SMNAME2','Arhiva');

// Names of admin menu items
define('_MI_NEWS_ADMENU2','Menadžer tema');
define('_MI_NEWS_ADMENU3','Napiši/uredi novosti');
define('_MI_NEWS_GROUPPERMS','Dozvole');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS','Smanji novosti');
// Added by Hervé
define('_MI_NEWS_EXPORT','Izvoz novosti');

// Title of config items
define('_MI_STORYHOME','Izaberite broj novosti za prikaz na poèetnoj stranici');
define('_MI_NOTIFYSUBMIT','Izaberite da da bi poslali poruku obavjesti webmasteru kad se dogodi nova prijava');
define('_MI_DISPLAYNAV','Izaberite da da bi prikazali navigacijski dio na vrhu svake stranice novosti');
define('_MI_AUTOAPPROVE','Automatski odobri nove prièe bez administratorske intervencije?');
define("_MI_ALLOWEDSUBMITGROUPS","Grupe koje mogu prijaviti novosti");
define("_MI_ALLOWEDAPPROVEGROUPS","Grupe koje mogu odobriti novosti");
define("_MI_NEWSDISPLAY","Raspored prikaza novosti");
define("_MI_NAMEDISPLAY","Autorovo ime");
define("_MI_COLUMNMODE","Stupci");
define("_MI_STORYCOUNTADMIN","Broj novih èlanaka za prikazivanje u administratorskom dijelu (ova opcija æe biti takoðer za odreðivanje broja tema za prikaz u administratorkom dijelu i koristit æe se u statistici) : ");
define('_MI_UPLOADFILESIZE','Maksimalna velièina datoteke za upload (KB) 1048576 = 1 Mb');
define("_MI_UPLOADGROUPS","Grupe koje mogu uploadati");


// Description of each config items
define('_MI_STORYHOMEDSC','');
define('_MI_NOTIFYSUBMITDSC','');
define('_MI_DISPLAYNAVDSC','');
define('_MI_AUTOAPPROVEDSC','');
define("_MI_ALLOWEDSUBMITGROUPSDESC","Izabrane grupe æe moæi prijavljivati novosti");
define("_MI_ALLOWEDAPPROVEGROUPSDESC","Izabrane grupe æe moæi odobriti novosti");
define("_MI_NEWSDISPLAYDESC","Klasièno prikazuje sve novosti poredane po datumu objave. Novosti po temama æe grupirati novosti po temama sa najnovijim prièama u cjelosti a ostale samo sa naslovom");
define('_MI_ADISPLAYNAMEDSC','Izaberite kako æe se prikazivati autorovo ime');
define("_MI_COLUMNMODE_DESC","Možete izabrati broj stupaca za prikaz liste èlanaka");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Izaberite grupe koje mogu uploadati na server");

// Name of config item values
define("_MI_NEWSCLASSIC","Klasièno");
define("_MI_NEWSBYTOPIC","Po temama");
define("_MI_DISPLAYNAME1","Korisnièko ime");
define("_MI_DISPLAYNAME2","Pravo ime");
define("_MI_DISPLAYNAME3","Ne prikaži autora");
define("_MI_UPLOAD_GROUP1","Podnositelji i odobritelji");
define("_MI_UPLOAD_GROUP2","Samo odobritelji");
define("_MI_UPLOAD_GROUP3","Uploda je onemoguæen");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY','Globalno');
define('_MI_NEWS_GLOBAL_NOTIFYDSC','Opcije obavještavanja globalnih novosti.');

define('_MI_NEWS_STORY_NOTIFY','Prièa');
define('_MI_NEWS_STORY_NOTIFYDSC','Opcije obavještavanja koje æe se upotrijebiti na trenutnu prièu.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY','Nova tema');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Obavjesti me kada se stvori nova tema.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Primi obavijest kada se stvori nova tema.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavjesti : Nova tema u novostima');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY','Prijavljena je nova prièa');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP','Obavjesti me kad je neka nova prièa prijavljena (èeka odobrenje).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC','Primi obavjest kada je neka nova prièa prijavljena (èeka odobrenje).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova prièa je prijavljena na novostima');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY','Nova prièa');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP','Obavjesti me kada je bilo koja nova prièa objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC','Primi obajest kada je bilo koja nova prièa objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova prièa na novostima');

define('_MI_NEWS_STORY_APPROVE_NOTIFY','Prièa je odobrena');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP','Obavjesti me kada je ova prièa odobrena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC','Primi obavjest kada je ova prièa objavljena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavjest : Prièa je odobrena');

define('_MI_RESTRICTINDEX','Ogranièi teme na poèetnoj stranici?');
define('_MI_RESTRICTINDEXDSC','Ako je postavljeno na da, korisnici æe vidjeti samo èlanke od novosti izlistane iz tema, imaju pristup kako je podešeno u Dozvolama za novosti');

define('_MI_NEWSBYTHISAUTHOR','Novosti od istog autora');
define('_MI_NEWSBYTHISAUTHORDSC','Ako postavite ovu opciju na da, onda æe link \'Èlanci od ovog autora\' biti vidljiv');

define('_MI_NEWS_PREVNEX_LINK','Pokaži linkove Prethodna i Sljedeæa ?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Kad je ova opcija postavljena na \'Da\', dva nova linka se pojave na dnu svakog èlanka. Ti linkovi se koriste za prelazak na prethodni i sljedeæi èlanak prema datumu objavljivanja');
define('_MI_NEWS_SUMMARY_SHOW','Prikaži tablicu sažetka ?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Kad koristite ovu opciju, sažetak koji sadrži linkove na sve nedavno objavljene èlanke se pojavi na dnu svakog èlanka');
define('_MI_NEWS_AUTHOR_EDIT','Omoguæi autoru da ureðuje svoje èlanke ?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Sa ovom opcijom, autori mogu ureðivati svoje èlanke.');
define('_MI_NEWS_RATE_NEWS','Omoguæi korisnicima da ocjenjuju novosti ?');
define('_MI_NEWS_TOPICS_RSS','Omoguæi RSS feeds po temama ?');
define('_MI_NEWS_TOPICS_RSS_DESC',"Ako postavite ovu opciju na 'Da' onda æe sadržaj tema biti moguæa kao RSS feeds");
define('_MI_NEWS_DATEFORMAT',"Format datuma");
define('_MI_NEWS_DATEFORMAT_DESC',"Molimo pogledajte Php dokumentaciju (http://fr.php.net/manual/en/function.date.php) za više informacija o tome kako izabrati format. Napomena, ako ništa ne upišete koristit æe se default format datuma");
define('_MI_NEWS_META_DATA',"Omoguæi meta podatke (kljuène rijeèi i opis) koji se unose ?");
define('_MI_NEWS_META_DATA_DESC',"Ako postavite ovu opciju na 'da' onda æe odobritelji moæi unesti sljedeæe meta podatke : kljuène rijeèi i opis");
define('_MI_NEWS_BNAME8','Novosti nasumce');
define('_MI_NEWS_NEWSLETTER','Newsletter');
define('_MI_NEWS_STATS','Statistika');
define("_MI_NEWS_FORM_OPTIONS","Opcije obrazca");
define("_MI_NEWS_FORM_COMPACT","Kompaktno");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Spaw ureðivaè");
define("_MI_NEWS_FORM_HTMLAREA","Ureðivaè HTML djela");
define("_MI_NEWS_FORM_FCK","FCK Ureðivaè");
define("_MI_NEWS_FORM_KOIVI","Koivi Ureðivaè");
define("_MI_NEWS_FORM_OPTIONS_DESC","Izaberite ureðivaè koji æete koristiti. Ako imate 'jednostavnu' instalaciju (npr. ako koristite samo xoops ureðivaèku klasu, koja dolazi standardno sa xoops jezgrom), onda možete izabrati samo DHTML i Kompaktno");
define("_MI_NEWS_KEYWORDS_HIGH","Korištenje naglašavanja kljuènih rijeèi ?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Ako koristite ovu opciju onda æe rijeèi koje su unešene u tražilicu biti naglašene unutar èlanaka");
define("_MI_NEWS_HIGH_COLOR","Boja koja se koristi za naglašavanje kljuènih rijeèi ?");
define("_MI_NEWS_HIGH_COLOR_DES","Koristite ovu opciju samo ako ste izabrali Da na prethodnoj opciji");
define("_MI_NEWS_INFOTIPS","Dužina natuknica");
define("_MI_NEWS_INFOTIPS_DES","Ako koristite ovu opciju, linkovi povezani na novosti æe sadržati prvih (n) znakova èlanka. Ako postavite ovu vrijednost na 0 onda æe natuknice biti prazne");
define("_MI_NEWS_SITE_NAVBAR","Korištenje Mozilla i Opera Site Navigation's Bar ?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Ako postavite ovu opciju na Da onda æe posjetioci vaših stranica moæi koristiti Site Navigation's Bar da bi se kretali kroz vaše èlanke.");
define("_MI_NEWS_TABS_SKIN","Izaberite izgled kartica (tabs)");
define("_MI_NEWS_TABS_SKIN_DESC","Ovaj izgled æe biti korišten na svim blokovima koji koriste kartice (tabs)");
define("_MI_NEWS_SKIN_1","Stil crte");
define("_MI_NEWS_SKIN_2","Ispupèeno");
define("_MI_NEWS_SKIN_3","Klasièno");
define("_MI_NEWS_SKIN_4","Mape");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Èisto");
define("_MI_NEWS_SKIN_7","Zaobljeno");
define("_MI_NEWS_SKIN_8","ZDnet stil");
?>