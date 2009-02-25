<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Novosti');

// A brief description of this module
define('_MI_NEWS_DESC','Stvara Slashdot-sli�ne sekcije novosti, gdje korisnici mogu napisati novosti/komentare.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Tema novosti');
define('_MI_NEWS_BNAME3','Velika pri�a');
define('_MI_NEWS_BNAME4','Top novosti');
define('_MI_NEWS_BNAME5','Zadnje novosti');
define('_MI_NEWS_BNAME6','Uredi novosti');
define('_MI_NEWS_BNAME7','Pro�i kroz teme');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Prijavi novost');
define('_MI_NEWS_SMNAME2','Arhiva');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Menad�er tema');
define('_MI_NEWS_ADMENU3', 'Napi�i/uredi novosti');
define('_MI_NEWS_GROUPPERMS', 'Dozvole');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS', 'Smanji novosti');
// Added by Herv�
define('_MI_NEWS_EXPORT', 'Izvoz novosti');

// Title of config items
define('_MI_STORYHOME', 'Izaberite broj novosti za prikaz na po�etnoj stranici');
define('_MI_NOTIFYSUBMIT', 'Izaberite da da bi poslali poruku obavjesti webmasteru kad se dogodi nova prijava');
define('_MI_DISPLAYNAV', 'Izaberite da da bi prikazali navigacijski dio na vrhu svake stranice novosti');
define('_MI_AUTOAPPROVE','Automatski odobri nove pri�e bez administratorske intervencije?');
define("_MI_ALLOWEDSUBMITGROUPS", "Grupe koje mogu prijaviti novosti");
define("_MI_ALLOWEDAPPROVEGROUPS", "Grupe koje mogu odobriti novosti");
define("_MI_NEWSDISPLAY", "Raspored prikaza novosti");
define("_MI_NAMEDISPLAY","Autorovo ime");
define("_MI_COLUMNMODE","Stupci");
define("_MI_STORYCOUNTADMIN","Broj novih �lanaka za prikazivanje u administratorskom dijelu (ova opcija �e biti tako�er za odre�ivanje broja tema za prikaz u administratorkom dijelu i koristit �e se u statistici) : ");
define('_MI_UPLOADFILESIZE', 'Maksimalna veli�ina datoteke za upload (KB) 1048576 = 1 Mb');
define("_MI_UPLOADGROUPS","Grupe koje mogu uploadati");


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "Izabrane grupe �e mo�i prijavljivati novosti");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "Izabrane grupe �e mo�i odobriti novosti");
define("_MI_NEWSDISPLAYDESC", "Klasi�no prikazuje sve novosti poredane po datumu objave. Novosti po temama �e grupirati novosti po temama sa najnovijim pri�ama u cjelosti a ostale samo sa naslovom");
define('_MI_ADISPLAYNAMEDSC', 'Izaberite kako �e se prikazivati autorovo ime');
define("_MI_COLUMNMODE_DESC","Mo�ete izabrati broj stupaca za prikaz liste �lanaka");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Izaberite grupe koje mogu uploadati na server");

// Name of config item values
define("_MI_NEWSCLASSIC", "Klasi�no");
define("_MI_NEWSBYTOPIC", "Po temama");
define("_MI_DISPLAYNAME1", "Korisni�ko ime");
define("_MI_DISPLAYNAME2", "Pravo ime");
define("_MI_DISPLAYNAME3", "Ne prika�i autora");
define("_MI_UPLOAD_GROUP1","Podnositelji i odobritelji");
define("_MI_UPLOAD_GROUP2","Samo odobritelji");
define("_MI_UPLOAD_GROUP3","Uploda je onemogu�en");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Globalno');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Opcije obavje�tavanja globalnih novosti.');

define('_MI_NEWS_STORY_NOTIFY', 'Pri�a');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Opcije obavje�tavanja koje �e se upotrijebiti na trenutnu pri�u.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nova tema');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Obavjesti me kada se stvori nova tema.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Primi obavijest kada se stvori nova tema.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjesti : Nova tema u novostima');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Prijavljena je nova pri�a');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Obavjesti me kad je neka nova pri�a prijavljena (�eka odobrenje).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Primi obavjest kada je neka nova pri�a prijavljena (�eka odobrenje).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova pri�a je prijavljena na novostima');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nova pri�a');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Obavjesti me kada je bilo koja nova pri�a objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Primi obajest kada je bilo koja nova pri�a objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova pri�a na novostima');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Pri�a je odobrena');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Obavjesti me kada je ova pri�a odobrena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Primi obavjest kada je ova pri�a objavljena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjest : Pri�a je odobrena');

define('_MI_RESTRICTINDEX', 'Ograni�i teme na po�etnoj stranici?');
define('_MI_RESTRICTINDEXDSC', 'Ako je postavljeno na da, korisnici �e vidjeti samo �lanke od novosti izlistane iz tema, imaju pristup kako je pode�eno u Dozvolama za novosti');

define('_MI_NEWSBYTHISAUTHOR', 'Novosti od istog autora');
define('_MI_NEWSBYTHISAUTHORDSC', 'Ako postavite ovu opciju na da, onda �e link \'�lanci od ovog autora\' biti vidljiv');

define('_MI_NEWS_PREVNEX_LINK','Poka�i linkove Prethodna i Sljede�a ?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Kad je ova opcija postavljena na \'Da\', dva nova linka se pojave na dnu svakog �lanka. Ti linkovi se koriste za prelazak na prethodni i sljede�i �lanak prema datumu objavljivanja');
define('_MI_NEWS_SUMMARY_SHOW','Prika�i tablicu sa�etka ?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Kad koristite ovu opciju, sa�etak koji sadr�i linkove na sve nedavno objavljene �lanke se pojavi na dnu svakog �lanka');
define('_MI_NEWS_AUTHOR_EDIT','Omogu�i autoru da ure�uje svoje �lanke ?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Sa ovom opcijom, autori mogu ure�ivati svoje �lanke.');
define('_MI_NEWS_RATE_NEWS','Omogu�i korisnicima da ocjenjuju novosti ?');
define('_MI_NEWS_TOPICS_RSS','Omogu�i RSS feeds po temama ?');
define('_MI_NEWS_TOPICS_RSS_DESC',"Ako postavite ovu opciju na 'Da' onda �e sadr�aj tema biti mogu�a kao RSS feeds");
define('_MI_NEWS_DATEFORMAT', "Format datuma");
define('_MI_NEWS_DATEFORMAT_DESC',"Molimo pogledajte Php dokumentaciju (http://fr.php.net/manual/en/function.date.php) za vi�e informacija o tome kako izabrati format. Napomena, ako ni�ta ne upi�ete koristit �e se default format datuma");
define('_MI_NEWS_META_DATA', "Omogu�i meta podatke (klju�ne rije�i i opis) koji se unose ?");
define('_MI_NEWS_META_DATA_DESC', "Ako postavite ovu opciju na 'da' onda �e odobritelji mo�i unesti sljede�e meta podatke : klju�ne rije�i i opis");
define('_MI_NEWS_BNAME8','Novosti nasumce');
define('_MI_NEWS_NEWSLETTER','Newsletter');
define('_MI_NEWS_STATS','Statistika');
define("_MI_NEWS_FORM_OPTIONS","Opcije obrazca");
define("_MI_NEWS_FORM_COMPACT","Kompaktno");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Spaw ure�iva�");
define("_MI_NEWS_FORM_HTMLAREA","Ure�iva� HTML djela");
define("_MI_NEWS_FORM_FCK","FCK Ure�iva�");
define("_MI_NEWS_FORM_KOIVI","Koivi Ure�iva�");
define("_MI_NEWS_FORM_OPTIONS_DESC","Izaberite ure�iva� koji �ete koristiti. Ako imate 'jednostavnu' instalaciju (npr. ako koristite samo xoops ure�iva�ku klasu, koja dolazi standardno sa xoops jezgrom), onda mo�ete izabrati samo DHTML i Kompaktno");
define("_MI_NEWS_KEYWORDS_HIGH","Kori�tenje nagla�avanja klju�nih rije�i ?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Ako koristite ovu opciju onda �e rije�i koje su une�ene u tra�ilicu biti nagla�ene unutar �lanaka");
define("_MI_NEWS_HIGH_COLOR","Boja koja se koristi za nagla�avanje klju�nih rije�i ?");
define("_MI_NEWS_HIGH_COLOR_DES","Koristite ovu opciju samo ako ste izabrali Da na prethodnoj opciji");
define("_MI_NEWS_INFOTIPS","Du�ina natuknica");
define("_MI_NEWS_INFOTIPS_DES","Ako koristite ovu opciju, linkovi povezani na novosti �e sadr�ati prvih (n) znakova �lanka. Ako postavite ovu vrijednost na 0 onda �e natuknice biti prazne");
define("_MI_NEWS_SITE_NAVBAR","Kori�tenje Mozilla i Opera Site Navigation's Bar ?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Ako postavite ovu opciju na Da onda �e posjetioci va�ih stranica mo�i koristiti Site Navigation's Bar da bi se kretali kroz va�e �lanke.");
define("_MI_NEWS_TABS_SKIN","Izaberite izgled kartica (tabs)");
define("_MI_NEWS_TABS_SKIN_DESC","Ovaj izgled �e biti kori�ten na svim blokovima koji koriste kartice (tabs)");
define("_MI_NEWS_SKIN_1","Stil crte");
define("_MI_NEWS_SKIN_2","Ispup�eno");
define("_MI_NEWS_SKIN_3","Klasi�no");
define("_MI_NEWS_SKIN_4","Mape");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","�isto");
define("_MI_NEWS_SKIN_7","Zaobljeno");
define("_MI_NEWS_SKIN_8","ZDnet stil");
// Added in version 1.50
define('_MI_NEWS_BNAME9','Arhive');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Prika�i linkove u �lanku spremnom za ispis?");
define("_MI_NEWS_DUBLINCORE","Aktiviraj Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","Za vi�e informacija, <a href='http://dublincore.org/'>posjetite ovaj link</a>");
define("_MI_NEWS_BOOKMARK_ME","Prika�i 'Ozna�i ovaj �lanak na ove stranice' blok ?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Ovaj blok �e biti vidljiv na stranicama �lanaka");
define("_MI_NEWS_FF_MICROFORMAT","Aktiviraj Firefox 2 Micro Summaries ?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Za vi�e informacija, pogledajte <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>ovu stranicu</a>");
define("_MI_NEWS_WHOS_WHO","Tko je tko");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Popis tema");
define("_MI_NEWS_ADVERTISEMENT","Ogla�avanje");
define("_MI_NEWS_ADV_DESCR","Unesite tekst ili javascript kod koji �e se prikazivati u �lancima");
define("_MI_NEWS_MIME_TYPES","Unesite autorizacijske Mime Tipove za upload (odvojite ih u novu liniju)");
define("_MI_NEWS_ENHANCED_PAGENAV","Koristi napredni navigator stranica?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","S ovom opcijom mo�ete odvojiti va�e stranice s ne�im kao : [pagebreak:Naslov stranice], linkovi su zamjenjeni sa padaju�om listom i mo�ete koristiti [summary] da bi stvorili automatske sa�etak (summary) stranica");
?>