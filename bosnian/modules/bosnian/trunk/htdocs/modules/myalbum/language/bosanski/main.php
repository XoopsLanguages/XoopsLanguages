<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( 'MYALBUM_MB_LOADED' ) ) {

define('MYALBUM_MB_LOADED' , 1 ) ;

//%%%%%%		Module Name 'myAlbum-P'		%%%%%



// only "Y/m/d" , "d M Y" , "M d Y" can be interpreted
define("_ALBM_DTFMT_YMDHI" , "d M Y H:i" ) ;

define("_ALBM_NEXT_BUTTON" , "Dalje" ) ;
define("_ALBM_REDOLOOPDONE" , "Gotovo" ) ;

define("_ALBM_BTN_SELECTALL" , "Izaberi sve" ) ;
define("_ALBM_BTN_SELECTNONE" , "Ni&scaron;ta ne izabjeri" ) ;
define("_ALBM_BTN_SELECTRVS" , "Izbor preokreni" ) ;

define("_ALBM_FMT_PHOTONUM" , "%s po stranici" ) ;

define("_ALBM_AM_ADMISSION" , "Sliku objavi" ) ;
define("_ALBM_AM_ADMITTING" , "Objavljene slike" ) ;
define("_ALBM_AM_LABEL_ADMIT" , "Izabrane slike objavi" ) ;
define("_ALBM_AM_BUTTON_ADMIT" , "Objavi" ) ;
define("_ALBM_AM_BUTTON_EXTRACT" , "filter" ) ;

define("_ALBM_AM_PHOTOMANAGER" , "Menadzer slika" ) ;
define("_ALBM_AM_PHOTONAVINFO" , "Slika br. %s-%s (od %s Slika)" ) ;
define("_ALBM_AM_LABEL_REMOVE" , "Izabrane slike izbri&scaron;i" ) ;
define("_ALBM_AM_BUTTON_REMOVE" , "Izbri&scaron;i!" ) ;
define("_ALBM_AM_JS_REMOVECONFIRM" , "Treba li strvarno izbrisati?" ) ;
define("_ALBM_AM_LABEL_MOVE" , "Kategoriju izabranih slika promjeni" ) ;
define("_ALBM_AM_BUTTON_MOVE" , "Prebaci" ) ;
define("_ALBM_AM_BUTTON_UPDATE" , "Promjeni" ) ;
define("_ALBM_AM_DEADLINKMAINPHOTO" , "Glavna slika ne postoji." ) ;

define("_ALBM_RADIO_ROTATETITLE" , "Sliku okreni" ) ;
define("_ALBM_RADIO_ROTATE0" , "Bez okretanja" ) ;
define("_ALBM_RADIO_ROTATE90" , "Okreni desno (90 Grad)" ) ;
define("_ALBM_RADIO_ROTATE180" , "Okreni skroz (180 Grad)" ) ;
define("_ALBM_RADIO_ROTATE270" , "Okreni lijevo (-90 Grad)" ) ;



define("_ALBM_MOREPHOTOS","Vi&scaron;e slika od %s");
define("_ALBM_REDOTHUMBS","Thumbnails nove napravi (<a href='redothumbs.php'>re-start</a>)");
define("_ALBM_REDOTHUMBSINFO","Preveliki broj mo&#382;e server opteretiti.");
define("_ALBM_REDOTHUMBSNUMBER","Odredi broj za istovremenu obradu Thumbnails");
define("_ALBM_REDOING","Jo&scaron; jednom: ");
define("_ALBM_BACK","nazad");
define("_ALBM_ADDPHOTO","Po&scaron;alji sliku");


// New MyAlbum 1.0.0
define("_ALBM_PHOTOBATCHUPLOAD","Slike koje su na serveru unesi u Album");
define("_ALBM_PHOTOUPLOAD","Sliku po&scaron;alji");
define("_ALBM_PHOTOEDITUPLOAD","Sliku uredi i ponovo po&scaron;alji");
define("_ALBM_MAXPIXEL","Max. Pixela");
define("_ALBM_MAXSIZE","Max. Veli&#269;ina (u Bytima)");
define("_ALBM_PHOTOTITLE","Naslov");
define("_ALBM_PHOTOPATH","Veza");
define("_ALBM_TEXT_DIRECTORY","Direktorij");
define("_ALBM_DESC_PHOTOPATH","Molim te punu vezu za slike na serveru daj");
define("_ALBM_MES_INVALIDDIRECTORY","Upisani direktorij nije ispravan.");
define("_ALBM_MES_BATCHDONE","%s slika je primljena.");
define("_ALBM_MES_BATCHNONE","Nema slika u direktoriju.");
define("_ALBM_PHOTODESC","Opis");
define("_ALBM_PHOTOCAT","Kategorija");
define("_ALBM_SELECTFILE","Sliku izaberi");
define("_ALBM_NOIMAGESPECIFIED","Gre&scaron;ka: Nema slika.");
define("_ALBM_FILEERROR","Slike nema ili je prevelika!");
define("_ALBM_FILEREADERROR","Gre&scaron;ka: Slika se nemo&#382; u&#269;itati.");

define("_ALBM_BATCHBLANK","Ako nebude naslov upisan, onda se automatski u naslov dodaje naziv podatka slike!");
define("_ALBM_DELETEPHOTO","Treba li sliku izbrisati?");
define("_ALBM_VALIDPHOTO","ispravna");
define("_ALBM_PHOTODEL","Sliku izbrisati?");
define("_ALBM_DELETINGPHOTO","Slika je uzbrisana");
define("_ALBM_MOVINGPHOTO","Slika je preba&#269;ena");

define("_ALBM_STORETIMESTAMP","Vremenski tempel ne diraj");

define("_ALBM_POSTERC","Poslao(la): ");
define("_ALBM_DATEC","Datum: ");
define("_ALBM_EDITNOTALLOWED","Ti nema&scaron; odobrenje da komentar daje&scaron;!");
define("_ALBM_ANONNOTALLOWED","Gostima je zabranjeno komentare pisati.");
define("_ALBM_THANKSFORPOST","Hvala ti za tvoj komentar!");
define("_ALBM_DELNOTALLOWED","Ti nema&scaron; odobrenje da komentar izbri&scaron;e&scaron;!");
define("_ALBM_GOBACK","Nazad");
define("_ALBM_AREYOUSURE","&#381;eli&scaron; li stvarno ovaj i sve povezane komentare izbrisati?");
define("_ALBM_COMMENTSDEL","Komentar(i) je(su) uspje&scaron;no izbrisan(i)!");

// End New

define("_ALBM_THANKSFORINFO","Hvala za tvoj komentar! Posle provjere komentar &#263;e biti objavljen.");
define("_ALBM_BACKTOTOP","Start stranica");
define("_ALBM_THANKSFORHELP","Hvala ti što nam poma&#382;e&scaron; da odr&#382;imo bolju posje&#263;enost web stranice.");
define("_ALBM_FORSECURITY","Iz sigurnosnih razloga bi&#263;e tvoje Nik ime i IP Adresa zabilje&#382;eni.");

define("_ALBM_MATCH","Pogodak");
define("_ALBM_ALL","Sve");
define("_ALBM_ANY","Svaku");
define("_ALBM_NAME","Naziv");
define("_ALBM_DESCRIPTION","Opis");

define("_ALBM_MAIN","Meni");
define("_ALBM_NEW","Nova");
define("_ALBM_UPDATED","aktulizirana");
define("_ALBM_POPULAR","poularne");
define("_ALBM_TOPRATED","najbolje ocijenjene");

define("_ALBM_POPULARITYLTOM","popularne (od manje do najve&#263;ih posjeta)");
define("_ALBM_POPULARITYMTOL","popularne (od najve&#263;ih do najmanjih posjeta)");
define("_ALBM_TITLEATOZ","Naslov (A do Z)");
define("_ALBM_TITLEZTOA","Naslov (Z do A)");
define("_ALBM_DATEOLD","Datum (starije prvo)");
define("_ALBM_DATENEW","Datum (novije prvo)");
define("_ALBM_RATINGLTOH","Ocjene (od manje - ve&#263;e)");
define("_ALBM_RATINGHTOL","Bewertung (od ve&#263;e - manje)");
define("_ALBM_LIDASC","Broju (ve&#263;i je kasnije)");
define("_ALBM_LIDDESC","Broju (manji je kasnije)");

define("_ALBM_NOSHOTS","Pregled slike nije mogu&#263;");
define("_ALBM_EDITTHISPHOTO","Uredi");

define("_ALBM_DESCRIPTIONC","Opis");
define("_ALBM_EMAILC","EMail");
define("_ALBM_CATEGORYC","Kategorija");
define("_ALBM_SUBCATEGORY","Podkategorija");
define("_ALBM_LASTUPDATEC","Zadnje poslata");
define("_ALBM_TELLAFRIEND","Javi svome prijatelju");
define("_ALBM_SUBJECT4TAF","Ovde je jedna lijepa slika za tebe!");
define("_ALBM_HITSC","Klikova");
define("_ALBM_RATINGC","Ocjena");
define("_ALBM_ONEVOTE","1 glas");
define("_ALBM_NUMVOTES","%s glasova");
define("_ALBM_ONEPOST","1 Post");
define("_ALBM_NUMPOSTS","%s Postova");
define("_ALBM_COMMENTSC","Komentar: ");
define("_ALBM_RATETHISPHOTO","Sliku ocjeni");
define("_ALBM_MODIFY","Uredi");
define("_ALBM_VSCOMMENTS","Komentare vidi/po&scaron;alji");

define("_ALBM_DIRECTCATSEL","KATEGORIJU IZABERI");
define("_ALBM_THEREARE","Imamo ukupno <b>%s</b> slika u Bazi podataka.");
define("_ALBM_LATESTLIST","Lista novih");

define("_ALBM_VOTEAPPRE","Hvala ti za datu ocjenu.");
define("_ALBM_THANKURATE","Hvala ti za tvoje dragocjeno vrijeme i &scaron;to si sliku %s ocjenuo(la).");
define("_ALBM_VOTEONCE","Molim te samo jednom ocjeni sliku.");
define("_ALBM_RATINGSCALE","Ocjene su od 1 - 10, gdje je 1 lo&scaron;a ocjena a 10 als vrlo dobra.");
define("_ALBM_BEOBJECTIVE","Molim te nemoj samo sa 1 ili 10 ocjenjivati jer zakve ocjene nisu objektivne i nevode ispravnoj ocjeni.");
define("_ALBM_DONOTVOTE","Molim te nemoj svoje slike ocjenjivati,prepusti to drugima.");
define("_ALBM_RATEIT","Ocjeni!");

define("_ALBM_RECEIVED","Tvoju sliku smo dobili,hvala ti puno!");
define("_ALBM_ALLPENDING","Sve slike se provjeravaju prije objave.");

define("_ALBM_RANK","Rang");
define("_ALBM_CATEGORY","Kategorija");
define("_ALBM_HITS","Klikova");
define("_ALBM_RATING","Ocjena");
define("_ALBM_VOTE","Glasova");
define("_ALBM_TOP10","%s Top 10"); // %s is a photo category title

define("_ALBM_SORTBY","Sortiraj po:");
define("_ALBM_TITLE","Naslov");
define("_ALBM_DATE","Datum");
define("_ALBM_POPULARITY","Popularne");
define("_ALBM_CURSORTEDBY","Slike sortiraj po: %s");
define("_ALBM_FOUNDIN","Prona&#273;i u:");
define("_ALBM_PREVIOUS","Prethodne");
define("_ALBM_NEXT","Sljede&#263;e");
define("_ALBM_NOMATCH","Nema ni&scaron;ta");

define("_ALBM_CATEGORIES","Kategorije");

define("_ALBM_SUBMIT","Po&scaron;alji");
define("_ALBM_CANCEL","Obustavi");

define("_ALBM_MUSTREGFIRST","Tebi nije dozvoljeno ovu akciju da izvr&scaron;i&scaron;.<br>Molim te prvo se uloguj ili se registriraj pa &#263;e&scaron; mo&#263;i!");
define("_ALBM_MUSTADDCATFIRST","Nema Kategorija.<br>Mora&scaron; prvo Kategoriju napraviti");
define("_ALBM_NORATING","Ocjena nije izabrana.");
define("_ALBM_CANTVOTEOWN","Svoje slike nemo&#382;e&scaron; ocjenjivati.<br>Svi se dati glasovi zbrajaju i memori&scaron;u.");
define("_ALBM_VOTEONCE2","Molim te samo jednom sliku ocjenjuj.<br>Svi se dati glasovi zbrajaju i memori&scaron;u.");

//%%%%%%	Module Name 'MyAlbum' (Admin)	  %%%%%

define("_ALBM_PHOTOSWAITING","Slike na &#269;ekanju za odobrenje");
define("_ALBM_PHOTOMANAGER","Menadzer slika");
define("_ALBM_CATEDIT","Kategoriju napravi, promjeni ili izbri&scaron;i");
define("_ALBM_GROUPPERM_GLOBAL","globale Berechtigungen");
define("_ALBM_CHECKCONFIGS","Konfiguracija & Systemska provjera");
define("_ALBM_BATCHUPLOAD","Stapel obrada");
define("_ALBM_GENERALSET","Album-Pode&scaron;avanje");
define("_ALBM_REDOTHUMBS2","Thumbnails novi napravi");

define("_ALBM_SUBMITTER","Poslao(la)");
define("_ALBM_DELETE","Izbri&scaron;i");
define("_ALBM_NOSUBMITTED","Nema novih poslatih slika.");
define("_ALBM_ADDMAIN","Glavnu Kategoriju napravi");
define("_ALBM_IMGURL","Slike URL (OPTIONALNO je visina slike 50px promjenjena ): ");
define("_ALBM_ADD","Dodaj");
define("_ALBM_ADDSUB","Podkategoriju napravi");
define("_ALBM_IN","u");
define("_ALBM_MODCAT","Kategoriju promjeni");
define("_ALBM_DBUPDATED","Baza podataka je uspje&scaron;no aktulizirana!");
define("_ALBM_MODREQDELETED","Promjenu izbri&scaron;i");
define("_ALBM_IMGURLMAIN","Slike URL (OPTIONALNO i samo ispravne Kategorije. Visinu slike na 50px promjeni): ");
define("_ALBM_PARENT","Slo&#382;ene Kategorije:");
define("_ALBM_SAVE","Promjenu zapamti");
define("_ALBM_CATDELETED","Kategoriju izbri&scaron;i");
define("_ALBM_CATDEL_WARNING","Pa&#382;nja: Jesi li siguran(a)? Sve slike i komentari u ovoj Kategoriji bi&#263;e izbrisane.");
define("_ALBM_YES","Da");
define("_ALBM_NO","Ne");
define("_ALBM_NEWCATADDED","Nova Kategorija je dodata!");
define("_ALBM_ERROREXIST","Gre&scaron;ka: Slika ima u Bazi podataka!");
define("_ALBM_ERRORTITLE","Gre&scaron;ka: Mora&scaron; naslov upisati!");
define("_ALBM_ERRORDESC","Gre&scaron;ka: Mora&scaron; opis slike upisati!");
define("_ALBM_WEAPPROVED","Upisani link u Bazi slika je odobren.");
define("_ALBM_THANKSSUBMIT","Hvala ti na slanju!");
define("_ALBM_CONFUPDATED","Konfiguracija je uspjela!");

}
?>
