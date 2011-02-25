<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Novosti');

// A brief description of this module
define('_MI_NEWS_DESC','Stvara Slashdot-slične sekcije novosti, gdje korisnici mogu napisati novosti/komentare.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Tema novosti');
define('_MI_NEWS_BNAME3','Velika objava');
define('_MI_NEWS_BNAME4','Top novosti');
define('_MI_NEWS_BNAME5','Zadnje novosti');
define('_MI_NEWS_BNAME6','Uredi novosti');
define('_MI_NEWS_BNAME7','Prođi kroz teme');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Prijavi novost');
define('_MI_NEWS_SMNAME2','Arhiva');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Upravitelj temama');
define('_MI_NEWS_ADMENU3', 'Napiši/uredi novosti');
define('_MI_NEWS_GROUPPERMS', 'Dozvole');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS', 'Smanji novosti');
// Added by Hervé
define('_MI_NEWS_EXPORT', 'Izvoz novosti');

// Title of config items
define('_MI_STORYHOME', 'Izaberite broj novosti za prikaz na početnoj stranici');
define('_MI_NOTIFYSUBMIT', 'Izaberite da da bi poslali poruku obavjesti webmasteru kad se dogodi nova prijava');
define('_MI_DISPLAYNAV', 'Izaberite da da bi prikazali navigacijski dio na vrhu svake stranice novosti');
define('_MI_AUTOAPPROVE','Automatski odobri nove objave bez administratorske intervencije?');
define("_MI_ALLOWEDSUBMITGROUPS", "Grupe koje mogu prijaviti novosti");
define("_MI_ALLOWEDAPPROVEGROUPS", "Grupe koje mogu odobriti novosti");
define("_MI_NEWSDISPLAY", "Raspored prikaza novosti");
define("_MI_NAMEDISPLAY","Autorovo ime");
define("_MI_COLUMNMODE","Stupci");
define("_MI_STORYCOUNTADMIN","Broj novih članaka za prikazivanje u administratorskom dijelu (ova opcija će biti također za određivanje broja tema za prikaz u administratorkom dijelu i koristit će se u statistici) : ");
define('_MI_UPLOADFILESIZE', 'Maksimalna veličina datoteke za upload (KB) 1048576 = 1 Mb');
define("_MI_UPLOADGROUPS","Grupe koje mogu uploadati");


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "Izabrane grupe će moći prijavljivati novosti");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "Izabrane grupe će moći odobriti novosti");
define("_MI_NEWSDISPLAYDESC", "Klasično prikazuje sve novosti poredane po datumu objave. Novosti po temama će grupirati novosti po temama sa najnovijim objavama u cjelosti a ostale samo sa naslovom");
define('_MI_ADISPLAYNAMEDSC', 'Izaberite kako će se prikazivati autorovo ime');
define("_MI_COLUMNMODE_DESC","Možete izabrati broj stupaca za prikaz liste članaka");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Izaberite grupe koje mogu uploadati na server");

// Name of config item values
define("_MI_NEWSCLASSIC", "Klasično");
define("_MI_NEWSBYTOPIC", "Po temama");
define("_MI_DISPLAYNAME1", "Korisničko ime");
define("_MI_DISPLAYNAME2", "Pravo ime");
define("_MI_DISPLAYNAME3", "Ne prikaži autora");
define("_MI_UPLOAD_GROUP1","Podnositelji i odobritelji");
define("_MI_UPLOAD_GROUP2","Samo odobritelji");
define("_MI_UPLOAD_GROUP3","Uploda je onemogućen");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Globalno');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Opcije globalnog obavještavanja novosti.');

define('_MI_NEWS_STORY_NOTIFY', 'Objava');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Opcije obavještavanja koje će se upotrijebiti na trenutnu objavu.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nova tema');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Obavjesti me kada se stvori nova tema.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Primi obavijest kada se stvori nova tema.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjesti : Nova tema u novostima');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Prijavljena je nova objava');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Obavjesti me kad je neka nova objava prijavljena (čeka odobrenje).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Primi obavjest kada je neka nova objava prijavljena (čeka odobrenje).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova objava je prijavljena na novostima');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nova objava');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Obavjesti me kada je bilo koja nova objava objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Primi obajest kada je bilo koja nova objava objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova objava na novostima');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Objava je odobrena');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Obavjesti me kada je ova objava odobrena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Primi obavjest kada je ova objava objavljena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavjest : Objava je odobrena');

define('_MI_RESTRICTINDEX', 'Ograniči teme na početnoj stranici?');
define('_MI_RESTRICTINDEXDSC', 'Ako je postavljeno na da, korisnici će vidjeti samo članke od novosti izlistane iz tema, imaju pristup kako je podešeno u Dozvolama za novosti');

define('_MI_NEWSBYTHISAUTHOR', 'Novosti od istog autora');
define('_MI_NEWSBYTHISAUTHORDSC', 'Ako postavite ovu opciju na da, onda će link \'Članci od ovog autora\' biti vidljiv');

define('_MI_NEWS_PREVNEX_LINK','Pokaži linkove Prethodna i Sljedeća ?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Kad je ova opcija postavljena na \'Da\', dva nova linka se pojave na dnu svakog članka. Ti linkovi se koriste za prelazak na prethodni i sljedeći članak prema datumu objavljivanja');
define('_MI_NEWS_SUMMARY_SHOW','Prikaži tablicu sažetka ?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Kad koristite ovu opciju, sažetak koji sadrži linkove na sve nedavno objavljene članke se pojavi na dnu svakog članka');
define('_MI_NEWS_AUTHOR_EDIT','Omogući autoru da uređuje svoje članke ?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Sa ovom opcijom, autori mogu uređivati svoje članke.');
define('_MI_NEWS_RATE_NEWS','Omogući korisnicima da ocjenjuju novosti ?');
define('_MI_NEWS_TOPICS_RSS','Omogući RSS feeds po temama ?');
define('_MI_NEWS_TOPICS_RSS_DESC',"Ako postavite ovu opciju na 'Da' onda će sadržaj tema biti moguća kao RSS feeds");
define('_MI_NEWS_DATEFORMAT', "Format datuma");
define('_MI_NEWS_DATEFORMAT_DESC',"Molimo pogledajte Php dokumentaciju (http://fr.php.net/manual/en/function.date.php) za više informacija o tome kako izabrati format. Napomena, ako ništa ne upišete koristit će se default format datuma");
define('_MI_NEWS_META_DATA', "Omogući meta podatke (ključne riječi i opis) koji se unose ?");
define('_MI_NEWS_META_DATA_DESC', "Ako postavite ovu opciju na 'da' onda će odobritelji moći unesti sljedeće meta podatke : ključne riječi i opis");
define('_MI_NEWS_BNAME8','Novosti nasumce');
define('_MI_NEWS_NEWSLETTER','Newsletter');
define('_MI_NEWS_STATS','Statistika');
define("_MI_NEWS_FORM_OPTIONS","Opcije obrazca");
define("_MI_NEWS_FORM_COMPACT","Kompaktno");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Spaw editor");
define("_MI_NEWS_FORM_HTMLAREA","Editor HTML djela");
define("_MI_NEWS_FORM_FCK","FCK editor");
define("_MI_NEWS_FORM_KOIVI","Koivi editor");
define("_MI_NEWS_FORM_OPTIONS_DESC","Izaberite editor koji ćete koristiti. Ako imate 'jednostavnu' instalaciju (npr. ako koristite samo xoops editorsku klasu, koja dolazi standardno sa xoops jezgrom), onda možete izabrati samo DHTML i Kompaktno");
define("_MI_NEWS_KEYWORDS_HIGH","Korištenje naglašavanja ključnih riječi ?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Ako koristite ovu opciju onda će riječi koje su unešene u tražilicu biti naglašene unutar članaka");
define("_MI_NEWS_HIGH_COLOR","Boja koja se koristi za naglašavanje ključnih riječi ?");
define("_MI_NEWS_HIGH_COLOR_DES","Koristite ovu opciju samo ako ste izabrali Da na prethodnoj opciji");
define("_MI_NEWS_INFOTIPS","Dužina natuknica");
define("_MI_NEWS_INFOTIPS_DES","Ako koristite ovu opciju, linkovi povezani na novosti će sadržati prvih (n) znakova članka. Ako postavite ovu vrijednost na 0 onda će natuknice biti prazne");
define("_MI_NEWS_SITE_NAVBAR","Korištenje Mozilla i Opera Site Navigation's Bar ?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Ako postavite ovu opciju na Da onda će posjetioci vaših stranica moći koristiti Site Navigation's Bar da bi se kretali kroz vaše članke.");
define("_MI_NEWS_TABS_SKIN","Izaberite izgled kartica (tabs)");
define("_MI_NEWS_TABS_SKIN_DESC","Ovaj izgled će biti korišten na svim blokovima koji koriste kartice (tabs)");
define("_MI_NEWS_SKIN_1","Stil crte");
define("_MI_NEWS_SKIN_2","Ispupčeno");
define("_MI_NEWS_SKIN_3","Klasično");
define("_MI_NEWS_SKIN_4","Mape");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Čisto");
define("_MI_NEWS_SKIN_7","Zaobljeno");
define("_MI_NEWS_SKIN_8","ZDnet stil");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Arhive');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Prikaži linkove u članku spremnom za ispis?");
define("_MI_NEWS_DUBLINCORE","Aktiviraj Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","Za više informacija, <a href='http://dublincore.org/'>posjetite ovaj link</a>");
define("_MI_NEWS_BOOKMARK_ME","Prikaži 'Označi ovaj članak na ove stranice' blok ?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Ovaj blok će biti vidljiv na stranicama članaka");
define("_MI_NEWS_FF_MICROFORMAT","Aktiviraj Firefox 2 Micro Summaries ?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Za više informacija, pogledajte <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>ovu stranicu</a>");
define("_MI_NEWS_WHOS_WHO","Tko je tko");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Popis tema");
define("_MI_NEWS_ADVERTISEMENT","Oglašavanje");
define("_MI_NEWS_ADV_DESCR","Unesite tekst ili javascript kod koji će se prikazivati u člancima");
define("_MI_NEWS_MIME_TYPES","Unesite autorizacijske Mime Tipove za upload (odvojite ih u novu liniju)");
define("_MI_NEWS_ENHANCED_PAGENAV","Koristi napredni navigator stranica?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","S ovom opcijom možete odvojiti vaše stranice s nečim kao : [pagebreak:Naslov stranice], linkovi su zamjenjeni sa padajućom listom i možete koristiti [summary] da bi stvorili automatske sažetak (summary) stranica");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Kategorija');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opcije obavještavanja koja utjecu na trenutnu kategoriju');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', 'Nova objava je prijavljena');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', 'Obavijesti me kad bilo koja nova objava bude objavljena u ovoj kategoriji.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', 'Primite obavijest kad bilo koja nova obajava bude objavljena u ovoj kategoriji.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijesti : Nove objave u novostima');

// Added in version 1.63
define('_MI_NEWS_TAGS', "Koristi sustav tagova ?");
define('_MI_NEWS_TAGS_DSC', "Ovo je bazirano na XOOPS modulu Tag od phppp-a");
define("_MI_NEWS_BNAME10", "Tags Cloud");
define("_MI_NEWS_BNAME11", "Top Tags");
define("_MI_NEWS_INTRO_TEXT", "Uvodni tekst koji će se pojaviti na stranici za unos");
define("_MI_NEWS_IMAGE_MAX_WIDTH", "Maksimalna širina slike kad se mijenja veličina");
define("_MI_NEWS_IMAGE_MAX_HEIGHT", "Maksimalna visina slike kad se mijenja veličina");
?>