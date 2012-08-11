<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Vijesti');

// A brief description of this module
define('_MI_NEWS_DESC','Napravi podru&#269;je za slanje novih vijesti, gdje mogu &#269;lanovi vijesti i komentare pisati.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Teme');
define('_MI_NEWS_BNAME3','Aktuelne vijesti');
define('_MI_NEWS_BNAME4','Top vijesti');
define('_MI_NEWS_BNAME5','Najnovije vijesti');
define('_MI_NEWS_BNAME6','Moderacija vijesti');
define('_MI_NEWS_BNAME7','Navigacija u Temama');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Vijest napi&scaron;i');
define('_MI_NEWS_SMNAME2','Arhiva');

// Names of admin menu items
define('_MI_NEWS_ADMENU2','Menadzer Tema');
define('_MI_NEWS_ADMENU3','Vijest objavi / uredi');
define('_MI_NEWS_GROUPPERMS','Odobrenja');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS','Vijesti pokupi');
// Added by Hervé
define('_MI_NEWS_EXPORT','Vijesti exportiraj');

// Title of config items
define('_MI_STORYHOME','Koliko vijesti treba prikazati na glavnoj Index stranici?');
define('_MI_NOTIFYSUBMIT','Obavjesti webmastera ako pristigne nova vijest?');
define('_MI_DISPLAYNAV','Navigacijski-Box prika&#382;i?');
define('_MI_AUTOAPPROVE','Vijest automatski objavi?');
define("_MI_ALLOWEDSUBMITGROUPS","Grupe, koje smiju vijesti pisati/slati");
define("_MI_ALLOWEDAPPROVEGROUPS","Grupe, koje smiju vijesti odobriti");
define("_MI_NEWSDISPLAY","Layout pregledih sadr&#382;aja");
define("_MI_NAMEDISPLAY","Ime Autora");
define("_MI_COLUMNMODE","Kolumni");
define("_MI_STORYCOUNTADMIN","Broj novih vijesti u Admin-Pregledu. (Ova opcija limitira broj Tema u adminovom podru&#269;ju i prikazu statistike): ");
define('_MI_UPLOADFILESIZE','MAX Upload- u (KB) 1048576 = 1 Meg');
define("_MI_UPLOADGROUPS","Grupe koje imaju odobrenje za upload");


// Description of each config items
define('_MI_STORYHOMEDSC','');
define('_MI_NOTIFYSUBMITDSC','');
define('_MI_DISPLAYNAVDSC','');
define('_MI_AUTOAPPROVEDSC','');
define("_MI_ALLOWEDSUBMITGROUPSDESC","Izabrane Grupe smiju vijesti pisati i slati.");
define("_MI_ALLOWEDAPPROVEGROUPSDESC","Izabrane grupe smiju poslate vijesti nakon pregleda odobriti i objaviti.");
define("_MI_NEWSDISPLAYDESC","Klasi&#269;no, prikazuju se sve vijesti sortirane po datumu objavljivanja. Vijesti po Temama, grupi&scaron;u se vijesti po temama sa najnovijom vijesti u punom prikazu i ostale ispod po linkovanim naslovima vijesti");
define('_MI_ADISPLAYNAMEDSC','Izaberi opciju, kako treba Autora vijesti prikazivati javno');
define("_MI_COLUMNMODE_DESC","Mo&#382;e&scaron; izabrati opciju koliko vijesti treba prikazati");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Izaberi Grupe koje smiju podatke uploadati na Server.");

// Name of config item values
define("_MI_NEWSCLASSIC","Klasi&#269;no");
define("_MI_NEWSBYTOPIC","Po Temama");
define("_MI_DISPLAYNAME1","Nik ime");
define("_MI_DISPLAYNAME2","Pravo ime");
define("_MI_DISPLAYNAME3","Autora ne prikazuj");
define("_MI_UPLOAD_GROUP1","Autor i Ovla&scaron;teni");
define("_MI_UPLOAD_GROUP2","Samo Ovla&scaron;teni");
define("_MI_UPLOAD_GROUP3","Upload nije dozvoljen");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY','Globalno');
define('_MI_NEWS_GLOBAL_NOTIFYDSC','Opcije obavje&scaron;tavanja globalne.');

define('_MI_NEWS_STORY_NOTIFY','Vijest');
define('_MI_NEWS_STORY_NOTIFYDSC','Opcije obavje&scaron;tavanja za aktuelnu vijest.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY','Nova Tema');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Obavijest ako se nova Tema kreira za vijesti..');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Obavijest ako je nova Tema kreirana.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Nova Tema');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY','Nova vijest je poslata.');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP','Obavijest ako je nova vijest poslata (i objavljena).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC','Dobija se obavijest ako je nova vijest poslata i objavljena.');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Nova vijest je poslata.');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY','Nova vijest');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP','Obavijest ako je nova vijest objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC','Dobija se obavijest ako je nova vijest objavljena.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska vijest: Nova vijest je objavljena.');

define('_MI_NEWS_STORY_APPROVE_NOTIFY','Vijest objavljena');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP','Obavijesti me ako je ova vijest objavljena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC','Dobija se obavijest ako je ova vijest objavljena.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatska obavijest: Vijest je objavljena');

define('_MI_RESTRICTINDEX','Teme na index stranici ne prikazivati?');
define('_MI_RESTRICTINDEXDSC','Ako je DA izabrano, onda se na index stranici vide samo nove vijesti bez oznaka na Teme za koje Grupe imaju svoje odobrenje');

define('_MI_NEWSBYTHISAUTHOR','Vijesti od istog Autora');
define('_MI_NEWSBYTHISAUTHORDSC','Ako je ova opcija izabrana, onda se prikazuje link \'Vijesti od istog Autora\' ');

define('_MI_NEWS_PREVNEX_LINK','Prikazati? \'Prethodna vijest\' i \'Sljede&#263;a vijest\' link');
define('_MI_NEWS_PREVNEX_LINK_DESC','Ako je ova opcija izabrana, onda se prikazuju dva linka ispod vijesti.');
define('_MI_NEWS_SUMMARY_SHOW','Prikazati kratki pregled vijesti?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Ako je ova opcija izabrana, onda se prikazuj kratki pregled objavljenih vijesti.');
define('_MI_NEWS_AUTHOR_EDIT','Smiju li Autori svoje vijesti urediti?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Ako je ova opcija izabrana, onda Autori mogu svoje vijesti uvijek urediti.');
define('_MI_NEWS_RATE_NEWS','Smiju li posjetioci vijesti ocjenuti?');
define('_MI_NEWS_TOPICS_RSS','Treba li RSS feeds za Teme aktivirati?');
define('_MI_NEWS_TOPICS_RSS_DESC',"Ako je ova opcija izabrana, onda se Teme sa svojim sadr&#382;ajem u RSS feeds mogu opozivati.");
define('_MI_NEWS_DATEFORMAT',"Datumski format");
define('_MI_NEWS_DATEFORMAT_DESC',"Daljne informacije za formatiranje datuma su ovdje: (http://de3.php.net/manual/de/function.date.php) Ako nikakav format nije upisan u ovo polje, onda se standardni format prikazuje.");
define('_MI_NEWS_META_DATA',"Smiju li se Meta podaci (klju&#269;ne rije&#269;i i opis) dodavati?");
define('_MI_NEWS_META_DATA_DESC',"Ako je ova opcija izabrana, onda Grupe koje imaju odobrenja vijesti od drugih odobravati mogu Meta podatke u vijest dodavati.");
define('_MI_NEWS_BNAME8','Slu&#269;ajna vijest');
define('_MI_NEWS_NEWSLETTER','Newsletter');
define('_MI_NEWS_STATS','Statistika');
define("_MI_NEWS_FORM_OPTIONS","Opcije editora");
define("_MI_NEWS_FORM_COMPACT","Kompakt");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Spaw Editor");
define("_MI_NEWS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_NEWS_FORM_FCK","FCK Editor");
define("_MI_NEWS_FORM_KOIVI","Koivi Editor");
define("_MI_NEWS_FORM_OPTIONS_DESC","Ovdje izaberi editor(e) koji se koriste za slanja vijesti. Ako nema specijalnih instaliranih editora, onda se od sistema koriste Kompct i DHTML editor.");
define("_MI_NEWS_KEYWORDS_HIGH","Klju&#269;ne rije&#269;i farbom ozna&#269;ti?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Ako je ova opcija izabrana, onda su klju&#269;ne rije&#269;i farbom ozna&#269;ene koje se npr. preko google tra&#382;e.");
define("_MI_NEWS_HIGH_COLOR","Farbe za ozna&#269;ivanje klju&#269;nih rije&#269;i.");
define("_MI_NEWS_HIGH_COLOR_DES","Ova opcija se samo onda koristi ako je gornja sa DA izabrana.");
define("_MI_NEWS_INFOTIPS","Tooltip du&#382;ina");
define("_MI_NEWS_INFOTIPS_DES","Ako je ova opcija izabrana onda linkovi od vijesi sa dodirom mi&scaron;a (n) prikazuju odabrani broj oznaka(slova). Ako je 0 izabrana onda se Tooltips ne prikazuje.");
define("_MI_NEWS_SITE_NAVBAR","Treba li Mozilla i Opera Navigacija aktivirati?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Ako je ova opcija izabrana onda posjetioci mogu uz pomo&#263; Sidebar kroz vijesti navigirati.");
define("_MI_NEWS_TABS_SKIN","Skin izaberi za Tabs koji treba izgledati po tvom izboru.");
define("_MI_NEWS_TABS_SKIN_DESC","Ovaj Skin se koristi u svim blokovima koji Tabs koriste.");
define("_MI_NEWS_SKIN_1","Bar Style");
define("_MI_NEWS_SKIN_2","Kosi");
define("_MI_NEWS_SKIN_3","Klasi&#269;ni");
define("_MI_NEWS_SKIN_4","Ordneri");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Ravni");
define("_MI_NEWS_SKIN_7","Okruglasti");
define("_MI_NEWS_SKIN_8","ZDnet Style");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Arhiva');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Prika&#382;i link za &scaron;tampanje vijesti?");
define("_MI_NEWS_DUBLINCORE","Ativative: Dublin Core Metadata?");
define("_MI_NEWS_DUBLINCORE_DSC","Vi&scaron;e informacija na, <a hreh='http://dublincore.org/'>dublincore.org</a>");
define("_MI_NEWS_BOOKMARK_ME","Prika&#382;i 'Ovu vijest kao Bookmark' u bloku ?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Ovaj blok je na stranici vijesti vidan.");
define("_MI_NEWS_FF_MICROFORMAT","Aktivirati Firefox2 Micro-Summaries?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Vi&scaron;e informacija na <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>ovoj stranici</a>");
define("_MI_NEWS_WHOS_WHO","Gdje je ko");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Teme");
define("_MI_NEWS_ADVERTISEMENT","Reklame");
define("_MI_NEWS_ADV_DESCR","Tekst-Code ili Javascript-Code upisati za prikaz Reklame u sadr&#382;aju.");
define("_MI_NEWS_MIME_TYPES","Ovdje odobrenje za Mime-Typ dozvoliti ko smije upotrebljavati Upload (svaki rastaviti novim redom za upis)");
define("_MI_NEWS_ENHANCED_PAGENAV","Use enhanced page navigator ?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","With this option you can separate your pages with something like this : [pagrebreak:Page Title], the links to the pages are replaced by a dropdown list and you can use [sumary] to create an automatic summary of pages");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Kategorije');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opcija obavje&scaron;tavanja kod novih upisanih sadr&#382;aja u Kategorijama');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY','Novi sadr&#382;aj je poslat');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP','Obavjesti me, ako je novi sadr&#382;aj u ovoj kategoriji objavljen.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC','Obavjest, ako je novi sadr&#382;aj u ovoj kategoriji objavljen.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi sadr&#382;aj');
// Added in version 1.63
define('_MI_NEWS_TAGS',"Koristi tagove sistema ?");
define('_MI_NEWS_TAGS_DSC',"Oni se nalaze u XOOPS modulu koji se zove Tag od phppp");
define("_MI_NEWS_BNAME10","Skup Tagova");
define("_MI_NEWS_BNAME11","Top Tagovi");
?>
