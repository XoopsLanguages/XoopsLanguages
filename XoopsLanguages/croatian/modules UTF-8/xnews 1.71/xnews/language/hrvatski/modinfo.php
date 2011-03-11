<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define("_MI_NW_NAME", "x"."Novosti");

// A brief description of this module
define("_MI_NW_DESC", "Stvara Slashdot-slične sekcije novosti, gdje korisnici mogu napisati novosti/komentare.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NW_BNAME1", "Kategorije novosti");
define("_MI_NW_BNAME3", "Velika objava");
define("_MI_NW_BNAME4", "Top novosti");
define("_MI_NW_BNAME5", "Zadnje novosti");
define("_MI_NW_BNAME6", "Uredi novosti");
define("_MI_NW_BNAME7", "Prođi kroz teme");

// Sub menus in main menu block
define("_MI_NW_SMNAME1", "Prijavi novost");
define("_MI_NW_SMNAME2", "Arhiva");

// Names of admin menu items
define("_MI_NW_ADMENU2", "Upravitelj kategorijama");
define("_MI_NW_ADMENU3", "Napiši/uredi novosti");
define("_MI_NW_GROUPPERMS", "Dozvole");
// Added by Hervé for prune option
define("_MI_NW_PRUNENEWS", "Smanji novosti");
// Added by Hervé
define("_MI_NW_EXPORT", "Izvoz novosti");

// Title of config items
define("_MI_NW_STORYHOME", "Izaberite broj novosti za prikaz na početnoj stranici");
define("_MI_NW_NOTIFYSUBMIT", "Izaberite da da bi poslali poruku obavjesti webmasteru kad se dogodi nova prijava");
define("_MI_NW_DISPLAYNAV", "Izaberite da da bi prikazali navigacijski dio na vrhu svake stranice novosti");
define("_MI_NW_AUTOAPPROVE", "Automatski odobri nove objave bez administratorske intervencije?");
define("_MI_ALLOWEDSUBMITGROUPS", "Grupe koje mogu prijaviti novosti");
define("_MI_ALLOWEDAPPROVEGROUPS", "Grupe koje mogu odobriti novosti");
define("_MI_NEWSDISPLAY", "Raspored prikaza novosti");
define("_MI_NAMEDISPLAY", "Autorovo ime");
define("_MI_COLUMNMODE", "Stupci");
define("_MI_STORYCOUNTADMIN", "Broj novih članaka za prikazivanje u administratorskom dijelu (ova opcija će biti također za određivanje broja tema za prikaz u administratorkom dijelu i koristit će se u statistici) : ");
define("_MI_NW_UPLOADFILESIZE", "Maksimalna veličina datoteke za upload (KB) 1048576 = 1 MB");
define("_MI_NW_UPLOADGROUPS", "Grupe koje mogu uploadati");

// Description of each config items
define("_MI_NW_STORYHOMEDSC", "");
define("_MI_NW_NOTIFYSUBMITDSC", "");
define("_MI_NW_DISPLAYNAVDSC", "");
define("_MI_NW_AUTOAPPROVEDSC", "");
define("_MI_NW_ALLOWEDSUBMITGROUPSDESC", "Izabrane grupe će moći prijavljivati novosti");
define("_MI_NW_ALLOWEDAPPROVEGROUPSDESC", "Izabrane grupe će moći odobriti novosti");
define("_MI_NW_NEWSDISPLAYDESC", "Klasično prikazuje sve novosti poredane po datumu objave. Novosti po temama će grupirati novosti po temama sa najnovijim objavama u cjelosti a ostale samo sa naslovom");
define("_MI_NW_ADISPLAYNAMEDSC", "Izaberite kako će se prikazivati autorovo ime");
define("_MI_NW_COLUMNMODE_DESC", "Možete izabrati broj stupaca za prikaz liste članaka");
define("_MI_NW_STORYCOUNTADMIN_DESC", "");
define("_MI_NW_UPLOADFILESIZE_DESC", "");
define("_MI_NW_UPLOADGROUPS_DESC", "Izaberite grupe koje mogu uploadati na server");

// Name of config item values
define("_MI_NW_NEWSCLASSIC", "Klasično");
define("_MI_NW_NEWSBYTOPIC", "Po kategorijama");
define("_MI_NW_DISPLAYNAME1", "Korisničko ime");
define("_MI_NW_DISPLAYNAME2", "Pravo ime");
define("_MI_NW_DISPLAYNAME3", "Ne prikaži autora");
define("_MI_NW_UPLOAD_GROUP1", "Podnositelji i odobritelji");
define("_MI_NW_UPLOAD_GROUP2", "Samo odobritelji");
define("_MI_NW_UPLOAD_GROUP3", "Uploda je onemogućen");

// Text for notifications
define("_MI_NW_GLOBAL_NOTIFY", "Globalno");
define("_MI_NW_GLOBAL_NOTIFYDSC", "Opcije globalnog obavještavanja novosti.");

define("_MI_NW_STORY_NOTIFY", "Objava");
define("_MI_NW_STORY_NOTIFYDSC", "Opcije obavještavanja koje će se upotrijebiti na trenutnu objavu.");

define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFY", "Nova tema");
define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYCAP", "Obavjesti me kada se stvori nova tema.");
define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYDSC", "Primi obavijest kada se stvori nova tema.");
define("_MI_NW_GLOBAL_NEWCATEGORY_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavjesti : Nova tema u novostima");

define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFY", "Prijavljena je nova objava");
define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYCAP", "Obavjesti me kad je neka nova objava prijavljena (čeka odobrenje).");
define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYDSC", "Primi obavjest kada je neka nova objava prijavljena (čeka odobrenje).");
define("_MI_NW_GLOBAL_STORYSUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova objava je prijavljena na novostima");

define("_MI_NW_GLOBAL_NEWSTORY_NOTIFY", "Nova objava");
define("_MI_NW_GLOBAL_NEWSTORY_NOTIFYCAP", "Obavjesti me kada je bilo koja nova objava objavljena.");
define("_MI_NW_GLOBAL_NEWSTORY_NOTIFYDSC", "Primi obajest kada je bilo koja nova objava objavljena.");
define("_MI_NW_GLOBAL_NEWSTORY_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavjest : Nova objava na novostima");

define("_MI_NW_STORY_APPROVE_NOTIFY", "Objava je odobrena");
define("_MI_NW_STORY_APPROVE_NOTIFYCAP", "Obavjesti me kada je ova objava odobrena.");
define("_MI_NW_STORY_APPROVE_NOTIFYDSC", "Primi obavjest kada je ova objava objavljena.");
define("_MI_NW_STORY_APPROVE_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavjest : Objava je odobrena");

define("_MI_NW_RESTRICTINDEX", "Ograniči teme na početnoj stranici?");
define("_MI_NW_RESTRICTINDEXDSC", "Ako je postavljeno na da, korisnici će vidjeti samo članke od novosti izlistane iz tema, imaju pristup kako je podešeno u Dozvolama za novosti");

define("_MI_NW_NEWSBYTHISAUTHOR", "Novosti od istog autora");
define("_MI_NW_NEWSBYTHISAUTHORDSC", "Ako postavite ovu opciju na da, onda će link 'Članci od ovog autora' biti vidljiv");

define("_MI_NW_PREVNEX_LINK", "Pokaži linkove Prethodna i Sljedeća ?");
define("_MI_NW_PREVNEX_LINK_DESC", "Kad je ova opcija postavljena na 'Da', dva nova linka se pojave na dnu svakog članka. Ti linkovi se koriste za prelazak na prethodni i sljedeći članak prema datumu objavljivanja");
define("_MI_NW_SUMMARY_SHOW", "Prikaži tablicu sažetka ?");
define("_MI_NW_SUMMARY_SHOW_DESC", "Kad koristite ovu opciju, sažetak koji sadrži linkove na sve nedavno objavljene članke se pojavi na dnu svakog članka");
define("_MI_NW_AUTHOR_EDIT", "Omogući autoru da uređuje svoje članke ?");
define("_MI_NW_AUTHOR_EDIT_DESC", "Sa ovom opcijom, autori mogu uređivati svoje članke.");
define("_MI_NW_RATE_NEWS", "Omogući korisnicima da ocjenjuju novosti ?");
define("_MI_NW_TOPICS_RSS", "Omogući RSS feeds po kategorijama ?");
define("_MI_NW_TOPICS_RSS_DESC", "Ako postavite ovu opciju na 'Da' onda će sadržaj kategorija biti moguća kao RSS punjenje");
define("_MI_NW_DATEFORMAT", "Format datuma");
define("_MI_NW_DATEFORMAT_DESC", "Molimo pogledajte Php dokumentaciju (http://fr.php.net/manual/en/function.date.php) za više informacija o tome kako izabrati format. Napomena, ako ništa ne upišete koristit će se default format datuma");
define("_MI_NW_META_DATA", "Omogući meta podatke (ključne riječi i opis) koji se unose ?");
define("_MI_NW_META_DATA_DESC", "Ako postavite ovu opciju na 'da' onda će odobritelji moći unesti sljedeće meta podatke : ključne riječi i opis");
define("_MI_NW_BNAME8", "Novosti nasumce");
define("_MI_NW_NEWSLETTER", "Novine");
define("_MI_NW_STATS", "Statistika");
define("_MI_NW_FORM_OPTIONS", "Opcije obrazca");
define("_MI_NW_FORM_COMPACT", "Kompaktno");
define("_MI_NW_FORM_DHTML", "DHTML");
define("_MI_NW_FORM_SPAW", "Spaw editor");
define("_MI_NW_FORM_HTMLAREA", "Editor HTML polja");
define("_MI_NW_FORM_FCK", "FCK editor");
define("_MI_NW_FORM_KOIVI", "Koivi editor");
define("_MI_NW_FORM_OPTIONS_DESC", "Izaberite editor koji ćete koristiti. Ako imate 'jednostavnu' instalaciju (npr. ako koristite samo xoops editorsku klasu, koja dolazi standardno sa xoops jezgrom), onda možete izabrati samo DHTML i Kompaktno");
define("_MI_NW_KEYWORDS_HIGH", "Korištenje naglašavanja ključnih riječi ?");
define("_MI_NW_KEYWORDS_HIGH_DESC", "Ako koristite ovu opciju onda će riječi koje su unešene u tražilicu biti naglašene unutar članaka");
define("_MI_NW_HIGH_COLOR", "Boja koja se koristi za naglašavanje ključnih riječi ?");
define("_MI_NW_HIGH_COLOR_DES", "Koristite ovu opciju samo ako ste izabrali Da na prethodnoj opciji");
define("_MI_NW_INFOTIPS", "Dužina natuknica");
define("_MI_NW_INFOTIPS_DES", "Ako koristite ovu opciju, linkovi povezani na novosti će sadržati prvih (n) znakova članka. Ako postavite ovu vrijednost na 0 onda će natuknice biti prazne");
define("_MI_NW_SITE_NAVBAR", "Korištenje Mozilla i Opera Site Navigation's Bar ?");
define("_MI_NW_SITE_NAVBAR_DESC", "Ako postavite ovu opciju na Da onda će posjetioci vaših stranica moći koristiti Site Navigation's Bar da bi se kretali kroz vaše članke.");
define("_MI_NW_TABS_SKIN", "Izaberite izgled kartica (tabs)");
define("_MI_NW_TABS_SKIN_DESC", "Ovaj izgled će biti korišten na svim blokovima koji koriste kartice (tabs)");
define("_MI_NW_SKIN_1", "Stil crte");
define("_MI_NW_SKIN_2", "Ispupčeno");
define("_MI_NW_SKIN_3", "Klasično");
define("_MI_NW_SKIN_4", "Mape");
define("_MI_NW_SKIN_5", "MacOs");
define("_MI_NW_SKIN_6", "Čisto");
define("_MI_NW_SKIN_7", "Zaobljeno");
define("_MI_NW_SKIN_8", "ZDnet stil");

// Added in version 1.50
define("_MI_NW_BNAME9", "Arhive");
define("_MI_NW_FORM_TINYEDITOR", "TinyEditor");
define("_MI_NW_FOOTNOTES", "Prikaži linkove u članku spremnom za ispis?");
define("_MI_NW_DUBLINCORE", "Aktiviraj Dublin Core Metadata ?");
define("_MI_NW_DUBLINCORE_DSC", "Za više informacija, <a href='http://dublincore.org/'>posjetite ovaj link</a>");
define("_MI_NW_BOOKMARK_ME", "Prikaži 'Označi ovaj članak na ove stranice' blok ?");
define("_MI_NW_BOOKMARK_ME_DSC", "Ovaj blok će biti vidljiv na stranicama članaka");
define("_MI_NW_FF_MICROFORMAT", "Aktiviraj Firefox 2 Micro Summaries ?");
define("_MI_NW_FF_MICROFORMAT_DSC", "Za više informacija, pogledajte <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>ovu stranicu</a>");
define("_MI_NW_WHOS_WHO", "Tko je tko");
define("_MI_NW_METAGEN", "Metagen");
define("_MI_NW_TOPICS_DIRECTORY", "Popis kategorija");
define("_MI_NW_ADVERTISEMENT", "Oglašavanje");
define("_MI_NW_ADV_DESCR", "Unesite tekst ili javascript kod koji će se prikazivati u člancima");
define("_MI_NW_MIME_TYPES", "Unesite autorizacijske Mime Tipove za upload (odvojite ih u novu liniju)");
define("_MI_NW_ENHANCED_PAGENAV", "Koristi napredni navigator stranica?");
define("_MI_NW_ENHANCED_PAGENAV_DSC", "S ovom opcijom možete odvojiti vaše stranice s nečim kao : [pagebreak:Naslov stranice], linkovi su zamjenjeni sa padajućom listom i možete koristiti [summary] da bi stvorili automatske sažetak (summary) stranica");

// Added in version 1.54
define("_MI_NW_CATEGORY_NOTIFY","Kategorija");
define("_MI_NW_CATEGORY_NOTIFYDSC","Opcije obavještavanja koja utjecu na trenutnu kategoriju");

define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFY", "Nova objava je prijavljena");
define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFYCAP", "Obavijesti me kad bilo koja nova objava bude objavljena u ovoj kategoriji.");
define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFYDSC", "Primite obavijest kad bilo koja nova obajava bude objavljena u ovoj kategoriji.");
define("_MI_NW_CATEGORY_STORYPOSTED_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-obavijesti : Nove objave u novostima");

// Added in version 1.63
define("_MI_NW_TAGS", "Koristi sustav tagova ?");
define("_MI_NW_TAGS_DSC", "Ovo je bazirano na XOOPS modulu Tag od phppp-a");
define("_MI_NW_BNAME10", "Oblak oznaka");
define("_MI_NW_BNAME11", "Najčešće oznake");
define("_MI_NW_INTRO_TEXT", "Uvodni tekst koji se pojavljuje na stranici za pisanje");
define("_MI_NW_IMAGE_MAX_WIDTH", "Maksimalna širina slike kod promjene veličine");
define("_MI_NW_IMAGE_MAX_HEIGHT", "Maksimalna visina slike kod promjene veličine");

// Added in version 1.67
define("_MI_NW_CLONER", "Upravitelj kloniranja");

define("_MI_NW_LATESTNEWS_BLOCK", "Zadnji blok novosti");

// Added in version 1.68 BETA
define("_MI_NW_TOPICDISPLAY", "Prikaži kategorije ");
define("_MI_NW_TOPICDISPLAYDESC", "Ovo će omogućiti/onemogućiti naslov kategorije u zaglavlju naslova");

define("_MI_NW_SEOENABLE", "Omogući SEO ");
define("_MI_NW_SEOENABLEDESC", "Ovo će omogućiti/onemogućiti SEO aktivnost.<br /> Ako je <b>htaccess</b> izabran dobit ćete: <br /> http://vas.site.com/<b>xnews</b>/topics.1/vas-naslov-kategorije.html <br /> Ako je izabran path-info dobit ćete: <br /> http://vas.site.com/modules/xnews/index.php/topics.1/vas-naslov-kategorije.html");

// Added in version 1.68 RC1
define("_MI_NW_EXTEND_META_DATA", "Proširi unos meta-podataka");
define("_MI_NW_EXTEND_META_DATA_DESC", "Ovo će napraviti razliku između teksta i polja teksta za unos korisničkih meta-podataka<br /> za oboje, opis i ključne riječi.");

define("_MI_NW_NONE", "Nigdje");
define("_MI_NW_TOPONLY", "Samo na vrhu");
define("_MI_NW_BOTTOMONLY", "Samo na dnu");
define("_MI_NW_BOTH", "Oboje");
define("_MI_NW_DISPLAYLINKICNS", "Prikaži ikone linkova");
define("_MI_NW_DISPLAYLINKICNSDESC", "Prikaži ispis, prijatelj i pdf ikonu nigdje-vrh-dno-oboje");

define("_MI_NW_SEOPATH", "SEO put ");
define("_MI_NW_SEOPATHDESC", "Ovo će dodati naslov u SEO url za oboje <b>htaccess</b> i <b>path-info</b> modove. <br /> Ako ostavite prazno dobit ćete: <br /> http://vas.site.com/topics.1/vas-naslov-kategorije.html <br /> Ako upišete <b>novosti</b> dobit ćete: <br /> http://vas.site.com/<b>novosti</b>/topics.1/vas-naslov-kategorije.html <br /><br /> <b>a-z znakovi i minus su odobreni. npr. novosti-dana</b>");
define("_MI_NW_SEOLEVEL", "SEO nivo ");
define("_MI_NW_SEOLEVELDESC", "Ovdje možete odlučiti da li ćete koristiti htaccess u xoops korjenskoj mapi ili u modulu. <br /> Ovo će izmjeniti izgled url-a. <br /> U korjenskom nivou: <br /> http://vas.site.com/news/topics.1/vas-naslov-kategorije.html <br /> U nivou modula: <br /> http://vas.site.com/modules/xnews/news.topics.1/vas-naslov-kategorije.html<br /><br /> Ovo radi samo u htaccess modu gdje je obavezna instalacija htaccess datoteka.");
define("_MI_NW_MODULE_LEVEL", "Nivo modula");
define("_MI_NW_ROOT_LEVEL", "Korjenski nivo");

//ADDED wishcraft 1.68
define("_MI_NW_SEOENDOFURL", "Kraj URL-a");
define("_MI_NW_SEOENDOFURL_DESC", "Nastavak datoteke za HTML datoteke");
define("_MI_NW_SEOENDOFURLRSS", "Kraj URL-a");
define("_MI_NW_SEOENDOFURLRSS_DESC", "Nastavak datoteke za RSS stranice");
define("_MI_NW_SEOENDOFURLPDF", "Kraj URL-a");
define("_MI_NW_SEOENDOFURLPDF_DESC", "Nastavak datoteke za Adobe Acrobat (PDF) datoteke");

//ADDED in version 1.71
define("_MI_NW_PDF_DISPLAY", "Prikaži PDF privitak");
define("_MI_NW_PDF_DISPLAY_DESC", "Ako je omogućeno dodana pdf datoteka će biti prikazana unutar stranice članka.");
define("_MI_NW_PDF_DETECT", "Aktiviraj detekciju PDF plugina");
define("_MI_NW_PDF_DETECT_DESC", "Ako je omogućeno ovo će utjecati na klijentsku stranu preglednika da ne prikaže <br />  PDF iframe ako nije instaliran PDF plugin za preglednik. <br /> Radi zajedno sa prikaži PDF privitak.");
define("_MI_NW_IMAGES_DISPLAY", "Prikaži slike u privitku");
define("_MI_NW_IMAGES_DISPLAY_DESC", "Ako je omogućeno slike iz privitka će biti prikazane unutar stranice članka.");
define("_MI_NW_THUMB_MAX_WIDTH", "Maksimalna širina minijature slike iz privitka kod promjene veličine");
define("_MI_NW_THUMB_MAX_HEIGHT", "Maksimalna visina minijature slike iz privitka kod promjene veličine");
?>