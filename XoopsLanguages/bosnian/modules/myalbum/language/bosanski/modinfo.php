<?php
//translated to german hairless@gmx.de 30_05_2003
// continued & corrected by mandyjosifan@yahoo.de 03-Aug-2005
// for myAlbum-P 2.84

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MI_LOADED' ) ) {

define('MYALBUM_MI_LOADED' , 1 ) ;

// The name of this module
define("_ALBM_MYALBUM_NAME","Album slika");

// A brief description of this module
define("_ALBM_MYALBUM_DESC","Napravi podru&#269;je gdje mogu &#269;lanovi razne slike tra&#382;iti/poslati/ocjeniti/komentarisati.");

// Names of blocks for this module (Not all module has blocks)
define("_ALBM_BNAME_RECENT","Najnovije slike");
define("_ALBM_BNAME_HITS","Top-Slike");
define("_ALBM_BNAME_RANDOM","Slu&#269;ajna slika");
define("_ALBM_BNAME_RECENT_P","Najnovije slike sa Thumbnails");
define("_ALBM_BNAME_HITS_P","Top-Slike sa Thumbnails");

// Config Items
define("_ALBM_CFG_PHOTOSPATH" , "Veza za slike" ) ;
define("_ALBM_CFG_DESCPHOTOSPATH" , "Veza za direktorij gdje je Xoops-Instaliran.<br />(Prva oznaka mora  '/' biti. Bez zadnje oznake '/' .)<br />Za UNIX-Direktorij mora imati cmod odobrenje 777 ili 707 ." ) ;
define("_ALBM_CFG_THUMBSPATH" , "Veza za Thumbnails" ) ;
define("_ALBM_CFG_DESCTHUMBSPATH" , "vidi 'Veza za slike'" ) ;
//define("_ALBM_CFG_USEIMAGICK" , "Use ImageMagick for treating images" ) ;
//define("_ALBM_CFG_DESCIMAGICK" , "Not use ImageMagick cause Not work resize or rotate the main photo, and make thumbnails by GD.<br />You'd better use ImageMagick if you can." ) ;
define("_ALBM_CFG_IMAGINGPIPE" , "Paket za obradu slika" ) ;
define("_ALBM_CFG_DESCIMAGINGPIPE" , "Skoro svaki PHP mo&#382;e GD koristiti. Svakako je GD funkcionira i u druga 2 Paketa.<br />Ako ide, treba koristiti ImageMagick ili NetPBM ." ) ;
define("_ALBM_CFG_FORCEGD2" , "GD2 Konverziju natjeraj" ) ;
define("_ALBM_CFG_DESCFORCEGD2" , "GD2(truecolor)-Konverzija isto pod PHP-prikazati GD natjeraj.<br />Poneke PHP-Konfigurcije povezuju Thumbnail-sa GD2.<br />Ovu konfiguraciju treba zapaziti, ako se GD koristi." ) ;
define("_ALBM_CFG_IMAGICKPATH" , "Veza za ImageMagick" ) ;
define("_ALBM_CFG_DESCIMAGICKPATH" , "Iako puna veza za 'convert'-Program treba da je upisana, mo&#382;e se u velikim slu&#269;ajevima prazno ostaviti.<br />Ovu konfiguraciju treba zapaziti, ako se ImageMagick koristi." ) ;
define("_ALBM_CFG_NETPBMPATH" , "Veza za NetPBM" ) ;
define("_ALBM_CFG_DESCNETPBMPATH" , "Iako puna veza za 'pnmscale'-Program treba da je upisana, mo&#382;e se u velikim slu&#269;ajevima prazno ostaviti.<br />Ovu konfiguraciju treba zapaziti, ako se NetPBM koristi." ) ;
define("_ALBM_CFG_POPULAR" , "Pristup odobrenja za 'popularne'-prika&#382;i" ) ;
define("_ALBM_CFG_NEWDAYS" , "Koliko dana 'Nova'- ili 'Update'-Icon treba prikazati" ) ;
define("_ALBM_CFG_NEWPHOTOS" , "Broj slika na glavnoj stranici" ) ;
define("_ALBM_CFG_DEFAULTORDER" , "Standarno sortiranje u Kategorijama" ) ;
define("_ALBM_CFG_PERPAGE" , "Prikazivanje slika po stranici" ) ;
define("_ALBM_CFG_DESCPERPAGE" , "Izabrane brojeve sa ovom '|' oznakom rastavi<br />npr. 10|20|50|100" ) ;
define("_ALBM_CFG_ALLOWNOIMAGE" , "Dozvoli novi upis bez slike" ) ;
define("_ALBM_CFG_MAKETHUMB" , "Napravi Thumbnail" ) ;
define("_ALBM_CFG_DESCMAKETHUMB" , "Ako je  'Ne' na 'Ja' promijenjeno i izabrano, treba li sve Thumbnails nove napraviti." ) ;
//define("_ALBM_CFG_THUMBWIDTH" , "Thumb Image Width" ) ;
//define("_ALBM_CFG_DESCTHUMBWIDTH" , "The height of thumbs will be decided from the width automatically." ) ;
define("_ALBM_CFG_THUMBSIZE" , "Veli&#269;ina Thumbnails (u pixelima)" ) ;
define("_ALBM_CFG_THUMBRULE" , "Pravilo za pravljenje novih Thumbnails" ) ;
define("_ALBM_CFG_WIDTH" , "max. &scaron;irina" ) ;
define("_ALBM_CFG_DESCWIDTH" , "&Scaron;irina slike bi&#263;e promijenjena.<br />Ako se GD bez truecolor koristi, onda ovo je ograni&#269;avanje ." ) ;
define("_ALBM_CFG_HEIGHT" , "max. visina slike" ) ;
define("_ALBM_CFG_DESCHEIGHT" , "(vidi 'max. visinu slike')" ) ;
define("_ALBM_CFG_FSIZE" , "max. veli&#269;ina podatka" ) ;
define("_ALBM_CFG_DESCFSIZE" , "Ograni&#269;enje veli&#269;ine poslate slike (u Bytima)." ) ;
define("_ALBM_CFG_MIDDLEPIXEL" , "maximalna veli&#269;ine slike u pojedina&#269;nom prikazu" ) ;
define("_ALBM_CFG_DESCMIDDLEPIXEL" , "Ovako upi&scaron;i (&scaron;irina)x(visina)<br />npr. 480x480" ) ;
define("_ALBM_CFG_ADDPOSTS" , "Broj, postova koje korisnici moguslati, kao komentar na sliku(???)" ) ;
define("_ALBM_CFG_DESCADDPOSTS" , "normalno je 0 ili 1. 0 je-nijedan- 0." ) ;
define("_ALBM_CFG_CATONSUBMENU" , "Glavnu Kategoriju u podmeniju prika&#382;i" ) ;
define("_ALBM_CFG_NAMEORUNAME" , "Prika&#382;i po&scaron;aljioca" ) ;
define("_ALBM_CFG_DESCNAMEORUNAME" , "izaberi, koje ime treba prikazati" ) ;
define("_ALBM_CFG_VIEWCATTYPE" , "Vrsta prikazivanja u Kategorijama" ) ;
define("_ALBM_CFG_COLSOFTABLEVIEW" , "Broj Spalti u Tabelarnom pregledu" ) ;
define("_ALBM_CFG_ALLOWEDEXTS" , "za upload dozvoli vrste slika" ) ;
define("_ALBM_CFG_DESCALLOWEDEXTS" , "vrste slika rastavi sa ovim znakom '|' . (npr. 'jpg|jpeg|gif|png') .<br />sve oznake nemoraju se ove upisati. Bez punkti,praznog razmaka<br />Nikada php ili phtml ne upisuj!!" ) ;
define("_ALBM_CFG_ALLOWEDMIME" , "za upload slika dozvoli ove MIME Typove" ) ;
define("_ALBM_CFG_DESCALLOWEDMIME" , "MIME Typove rastavi sa ovim znakom '|'. (npr. 'image/gif|image/jpeg|image/png')<br />Ako se MIME-Type treba provjeriti, ovo polje prazno ostavi" ) ;
define("_ALBM_CFG_USESITEIMG" , "[siteimg] u Xoops-Menadzeru slika-Integraciju koristi" ) ;
define("_ALBM_CFG_DESCUSESITEIMG" , "U integraciji Xoops-Menadzeru slika Tag [siteimg] umjesto od [img] koristi.<br />Zato moraju promjene za [i]module[/i].textsanitizer.php, npr. u svakom Modulu se preuzeti, da bi Tag [siteimg] se mogao koristiti." ) ;

define("_ALBM_OPT_USENAME" , "upisao(la) (puno) ime" ) ;
define("_ALBM_OPT_USEUNAME" , "Nik-Ime" ) ;

define("_ALBUM_OPT_CALCFROMWIDTH" , "&Scaron;irina:daj automatski" ) ;
define("_ALBUM_OPT_CALCFROMHEIGHT" , "&Scaron;irina:automatski je data" ) ;
define("_ALBUM_OPT_CALCWHINSIDEBOX" , "u dati &#269;etvero ugao podesi" ) ;

define("_ALBM_OPT_VIEWLIST" , "Lista" ) ;
define("_ALBM_OPT_VIEWTABLE" , "Lista tabela" ) ;


// Sub menu titles
define("_ALBM_TEXT_SMNAME1","Po&scaron;alji sliku");
define("_ALBM_TEXT_SMNAME2","Popularne slike");
define("_ALBM_TEXT_SMNAME3","Najbolje ocijenjene");
define("_ALBM_TEXT_SMNAME4","Moje slike");

// Names of admin menu items
define("_ALBM_MYALBUM_ADMENU0","Poslate slike");
define("_ALBM_MYALBUM_ADMENU1","Slike uredi");
define("_ALBM_MYALBUM_ADMENU2","dodaj/promjeni Kategorije");
define("_ALBM_MYALBUM_ADMENU_GPERM","globalna odobrenja");
define("_ALBM_MYALBUM_ADMENU3","Konfiguracija & Okolinu provjeri");
define("_ALBM_MYALBUM_ADMENU4","Stapel obrada");
define("_ALBM_MYALBUM_ADMENU5","Thumbnails novi napravi");
define("_ALBM_MYALBUM_ADMENU_IMPORT","Sliku importiraj");
define("_ALBM_MYALBUM_ADMENU_EXPORT","Sliku exportiraj");
define("_ALBM_MYALBUM_ADMENU_MYBLOCKSADMIN","Blok- i Grupe-admin");
define("_ALBM_MYALBUM_ADMENU_MYTPLSADMIN","Template");


// Text for notifications
define('_MI_MYALBUM_GLOBAL_NOTIFY','Globalno obavje&scaron;tavanje');
define('_MI_MYALBUM_GLOBAL_NOTIFYDSC','Globalno obavje&scaron;tavanje sa Albumom');
define('_MI_MYALBUM_CATEGORY_NOTIFY','Kategorija');
define('_MI_MYALBUM_CATEGORY_NOTIFYDSC','Opcija obavje&scaron;tavanja, koje djeluju na nove slike u kategorijama');
define('_MI_MYALBUM_PHOTO_NOTIFY','Slika');
define('_MI_MYALBUM_PHOTO_NOTIFYDSC','Opcija obavje&scaron;tavanja, koja djeluje na aktuelne slike');

define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFY','Nova slika');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYCAP','Obavjesti me, ako neko novu sliku po&scaron;alje');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYDSC','Dobija se obavijest, ako neko novu sliku po&scaron;alje');
define('_MI_MYALBUM_GLOBAL_NEWPHOTO_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}: auto-obavijest : Nova slika u Albumu');

define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFY','Nova slika');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYCAP','Obavjesti me, ako neko novu sliku u aktuelnu Kategoriju po&scaron;alje');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYDSC','Dobija se obavijest, ako neko novu sliku u aktuelnu Kategoriju po&scaron;alje');
define('_MI_MYALBUM_CATEGORY_NEWPHOTO_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}: auto-obavijest : Nova slika u Kategoriji Albuma');

}

?>
