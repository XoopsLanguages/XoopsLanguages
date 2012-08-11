<?php
// $Id: admin.php,v 1.19 2005/11/23 17:51:25 hthouzard Exp $e izbrisati
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Baza podataka je uspje&scaron;no aktulizirana!");
define("_AM_CONFIG","Konfiguracija vijesti");
define("_AM_AUTOARTICLES","Automatske vijesti");
define("_AM_STORYID","Vijest-ID");
define("_AM_TITLE","Naslov");
define("_AM_TOPIC","Tema");
define("_AM_POSTER","Autor");
define("_AM_PROGRAMMED","Datum objavljivanja");
define("_AM_ACTION","Akcija");
define("_AM_EDIT","Uredi");
define("_AM_DELETE","Izbri&scaron;i");
define("_AM_LAST10ARTS","Zadnje %d vijesti");
define("_AM_PUBLISHED","Objavljena dana"); // Published Date
define("_AM_GO","Idi!");
define("_AM_EDITARTICLE","Uredi");
define("_AM_POSTNEWARTICLE","Novo objavi");
define("_AM_ARTPUBLISHED","Vijest je objavljena!");
define("_AM_HELLO","Halo %s,");
define("_AM_YOURARTPUB","Vijest koji si poslao(la) je objavljena.");
define("_AM_TITLEC","Naslov: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Objavljeno: ");
define("_AM_RUSUREDEL","Jesi li siguran(a), da ovu vijest i sve njene komentare &#382;eli&scaron; izbrisati?");
define("_AM_YES","Da");
define("_AM_NO","Ne");
define("_AM_INTROTEXT","Tekst ");
define("_AM_EXTEXT","Dodatni tekst:");
define("_AM_ALLOWEDHTML","HTML-Tagove dozvoli:");
define("_AM_DISAMILEY","Smilise isklju&#269;i");
define("_AM_DISHTML","HTML isklju&#269;i");
define("_AM_APPROVE","Odobri");
define("_AM_MOVETOTOP","Vijest prebaci na vrh gore");
define("_AM_CHANGEDATETIME","Datum/Vrijeme objavljivanja promjeni");
define("_AM_NOWSETTIME","Objava je pode&scaron;ena za: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktuelno vrijeme: %s");  // %s is the current datetime
define("_AM_SETDATETIME","<b>Datum/Vrijeme objavljivanja stavi:</b>");
define("_AM_MONTHC","Mjesec:");
define("_AM_DAYC","Dan:");
define("_AM_YEARC","Godina:");
define("_AM_TIMEC","Vrijeme:");
define("_AM_PREVIEW","Vidi izgled");
define("_AM_SAVE","Po&scaron;alji");
define("_AM_PUBINHOME","Na start stranici prika&#382;i?");
define("_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Dodaj novu Temu");
define("_AM_TOPICNAME","Naslov Teme");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(max. 255 oznaka)");
define("_AM_TOPICIMG","Slika Teme");
define("_AM_IMGNAEXLOC","Naziv slike + podatak se nalazi u %s");
define("_AM_FEXAMPLE","npr.: games.gif");
define("_AM_ADDSUBTOPIC","Podtemu dodaj");
define("_AM_IN","u");
define("_AM_MODIFYTOPIC","Temu promjeni");
define("_AM_MODIFY","Promjeni");
define("_AM_PARENTTOPIC","Dostupne Teme");
define("_AM_SAVECHANGE","Promjenu osiguraj");
define("_AM_DEL","Izbri&scaron;i");
define("_AM_CANCEL","Obustavi");
define("_AM_WAYSYWTDTTAL","Pa&#382;nja: Jesi li siguran(a), daa ovu Temu i sve u njoj povezane Vijesti i Komentare treba izbrisati?");


// Added in Beta6
define("_AM_TOPICSMNGR","Menadzer Tema - Ukupno Tema ");
define("_AM_PEARTICLES","Vijest objavi / uredi");
define("_AM_NEWSUB","Pristgle vijesti");
define("_AM_POSTED","Objavljene vijesti");
define("_AM_GENERALCONF","Konfiguracija Vijesti");

// Added in RC2
define("_AM_TOPICDISPLAY","Sliku Teme prika&#382;i?");
define("_AM_TOPICALIGN","Pozicija");
define("_AM_RIGHT","Desno");
define("_AM_LEFT","Lijevo");

define("_AM_EXPARTS","Istekle vijesti");
define("_AM_EXPIRED","Isteklo vrijeme prikazivanja");
define("_AM_CHANGEEXPDATETIME","Datum/Vrijeme isticanja promjeni");
define("_AM_SETEXPDATETIME","Datum/Vrijeme isticanja stavi: ");
define("_AM_NOWSETEXPTIME","Aktuelno pode&scaron;eno na: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","Mora&scaron; naslov Teme upisati!");
define("_AM_EMPTYNODELETE","Ni&scaron;ta ne bri&scaron;i!");

// Added 240304 (Mithrandir)
define("_AM_GROUPPERM","Grupama odobrenje daj");
define("_AM_SELFILE","Podatak za upload izaberi");

// Added by Hervé
define("_AM_UPLOAD_DBERROR_SAVE","Gre&scaron;ka kod zaka&#269;anja podatka u vijesti");
define("_AM_UPLOAD_ERROR","Gre&scaron;ka kod uploada podatka");
define("_AM_UPLOAD_ATTACHFILE","Zaka&#269;eni podatak(ci)");
define("_AM_APPROVEFORM","Dozvole - Odobrenja");
define("_AM_SUBMITFORM","Za pisanje - odobrenja");
define("_AM_VIEWFORM","Za &#269;itanje - odobrenja");
define("_AM_APPROVEFORM_DESC","Izaberi, ko sadr&#382;aj smije odobriti");
define("_AM_SUBMITFORM_DESC","Izaberi, ko sadr&#382;aj pisat/slati smije");
define("_AM_VIEWFORM_DESC","Izaberi, ko kakve Teme vidjeti smije");
define("_AM_DELETE_SELFILES","Izbri&scaron;i izabrane podatke");
define("_AM_TOPIC_PICTURE","Sliku uploaduj");
define("_AM_UPLOAD_WARNING","<B>Pa&#382;nja, nemoj zaboraviti odobrenje pisanja za sljede&#263;e direktorije da da&scaron; : %s</B>");

define("_AM_NEWS_UPGRADECOMPLETE","Upgrade je zavr&scaron;eno");
define("_AM_NEWS_UPDATEMODULE","Update Modul- template i blokovi");
define("_AM_NEWS_UPGRADEFAILED","Upgrade nije uspjelo");
define("_AM_NEWS_UPGRADE","Upgrade");
define("_AM_ADD_TOPIC","Temu dodaj");
define("_AM_ADD_TOPIC_ERROR","Gre&scaron;ka, ova Tema postoji!");
define("_AM_ADD_TOPIC_ERROR1","Gre&scaron;ka, ova Tema se nemo&#382;e kao Podtema izabrati!");
define("_AM_SUB_MENU","Ovu Temu kao Pod-Meni stavi");
define("_AM_SUB_MENU_YESNO","Pod-Meni?");
define("_AM_HITS","Klikova");
define("_AM_CREATED","Napravljena");

define("_AM_TOPIC_DESCR","Opis Teme");
define("_AM_USERS_LIST","Lista &#269;lanova");
define("_AM_PUBLISH_FRONTPAGE","Stavi u Glavni Meni?");
define("_AM_NEWS_UPGRADEFAILED1","Ne mogu se sljede&#263; Tabele napraviti: stories_files");
define("_AM_NEWS_UPGRADEFAILED2","Ne mogu se du&#382;ine nalova Teme (topic title's length) promjenuti");
define("_AM_NEWS_UPGRADEFAILED21","Ne mogu se nova polja (topics table) dodati");
define("_AM_NEWS_UPGRADEFAILED3","Ne mogu se sljede&#263; Tabele napraviti: stories_votedata");
define("_AM_NEWS_UPGRADEFAILED4","Ne mogu se oba polja 'rating' i 'votes' u Tabeli 'story' dodati");
define("_AM_NEWS_UPGRADEFAILED0","Molim te obrati pa&#382;nju na upozorenja. Probaj ovaj problem sa phpMyadmin i sql Definisati, u 'sql' Ordneru gdje je news Moduls , tu vidi.");
define("_AM_NEWS_UPGR_ACCESS_ERROR","Gre&scaron;ka, mora se upgrade scripta (sa Admin odobrenje za Modul) izvr&scaron;iti.");
define("_AM_NEWS_PRUNE_BEFORE","Vijesti pokupi, objavljene od:");
define("_AM_NEWS_PRUNE_EXPIREDONLY","Samo vijesti pokupi koje su istekle.");
define("_AM_NEWS_PRUNE_CONFIRM","Pa&#382;nja, sve vijesti (i Komentari u vijestima) koji su od prije %s  <br />bi&#263;e zauvijek izbrisani. Posle brisanja nema povratka. <br />Sada je %s vijesti do sada prona&#273;eno.<br />Jesi li apsolutno siguran(a)?");
define("_AM_NEWS_PRUNE_TOPICS","Jednu ili vi&scaron;e Tematskih podru&#269;ja izaberi");
define("_AM_NEWS_PRUNENEWS","Vijesti pokupi");
define("_AM_NEWS_EXPORT_NEWS","Vijest exportiraj");
define("_AM_NEWS_EXPORT_NOTHING","Nema vijesti prona&#273;enih za exportiranje. Molim te da izbor provjeri&scaron;.");
define("_AM_NEWS_PRUNE_DELETED","%d Vijest je izbrisana");
define("_AM_NEWS_PERM_WARNING","<h2>Pa&#382;nja, ima 3 Formulara gdje svaki ima 'Po&scaron;alji' Button.</h2>");
define("_AM_NEWS_EXPORT_BETWEEN","Vijesti exportiraj izme&#273;u");
define("_AM_NEWS_EXPORT_AND"," i ");
define("_AM_NEWS_EXPORT_PRUNE_DSC","Ovde / podru&#269;je Teme izaberi, i u akciju uputi je.<br/>Ukoliko se podru&#269;je Teme ne izabere, onda se sva podru&#269;ja Teme automatski izaberu.");
define("_AM_NEWS_EXPORT_INCTOPICS","Inkluzivno opis Teme?");
define("_AM_NEWS_EXPORT_ERROR","Gre&scaron;ka pravljenja podatka %s. Radnja je obustavljena.");
define("_AM_NEWS_EXPORT_READY","Xml Export podatak se mo&#382;e downloadati. <br />Idi i downloaduj, <a target='_blank' href='%s'> klikom na ovaj link</a>.<br />Poslije ne zaboravi <a href='%s'>sa ovim linkom</a> izbrisati.");
define("_AM_NEWS_RSS_URL","URL od RSS feed");
define("_AM_NEWS_NEWSLETTER","Newsletter");
define("_AM_NEWS_NEWSLETTER_BETWEEN","Vijesti izaberi koje treba objaviti izme&#273;u");
define("_AM_NEWS_NEWSLETTER_READY","Newsletter podatak se mo&#382;e downloadati. <br />di i downloaduj, <a target='_blank' href='%s'>klikom na ovaj link</a>.<br />Poslije ne zaboravi <a href='%s'>sa ovim linkom</a> izbrisati.");
define("_AM_NEWS_DELETED_OK","Podatak je izbrisan");
define("_AM_NEWS_DELETED_PB","Gre&scaron;ka, podatak se nemo&#382;e izbrisati.");
define("_AM_NEWS_STATS0","Statistika Tema");
define("_AM_NEWS_STATS","Statistika");
define("_AM_NEWS_STATS1","Pojedini Autori");
define("_AM_NEWS_STATS2","Ukupno");
define("_AM_NEWS_STATS3","Statistika vijesti");
define("_AM_NEWS_STATS4","Naj&#269;itanije vijesti");
define("_AM_NEWS_STATS5","Najmanje &#269;itane vijesti");
define("_AM_NEWS_STATS6","Najocjenjenije vijesti");
define("_AM_NEWS_STATS7","Naj&#269;itanije Autori");
define("_AM_NEWS_STATS8","Najocjenjeniji Autori");
define("_AM_NEWS_STATS9","Najvi&scaron;e su pisali");
define("_AM_NEWS_STATS10","Statistika Autora");
define("_AM_NEWS_STATS11","Broj vijesti");
define("_AM_NEWS_HELP","Pomo&#263;");
define("_AM_NEWS_MODULEADMIN","Modul-Admin");
define("_AM_NEWS_GENERALSET","Modul-Konfiguracija");
define("_AM_NEWS_GOTOMOD","U Modul");
define("_AM_NEWS_NOTHING","Nema podatka za download. Molim te izbor provjeri.");
define("_AM_NEWS_NOTHING_PRUNE","Nema vijesti za pokupiti. Molim te izbor provjeri.");
define("_AM_NEWS_TOPIC_COLOR","Farba Teme");
define("_AM_NEWS_COLOR","Farbe");
define("_AM_NEWS_REMOVE_BR","Html Tag &lt;br&gt; u novi red konveriraj?");
// Added in 1.3 RC2
define("_AM_NEWS_PLEASE_UPGRADE","<a href='upgrade.php'><font color='#FF0000'>Molim Modul updatuj!</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER',"Vrh");
define('_AM_NEWS_NEWSLETTER_FOOTER',"Dno");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS',"HTML-Tagove izbri&scaron;i?");
define('_AM_NEWS_VERIFY_TABLES','DB-Tabele sredi');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen je System, koji ti poma&#382;e, da tvoju stranicu pretra&#382;ne ma&scaron;ine brzo prona&#273; u.<br />Izuzetak, ako Meta klju&#269;ne rije&#269;i und Meta opis su ve&#263; napisani, onda Modul proba ovo automatski.");
define('_AM_NEWS_BLACKLIST',"Crna lista");
define('_AM_NEWS_BLACKLIST_DESC',"Ovde upi&scaron;i lo&scaron;e meta rije&#269;i koje su nepo&#382;eljne");
define('_AM_NEWS_BLACKLIST_ADD',"Dodaj");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Upi&scaron;i rije&#269;i u listu<br />(jedna rije&#269; po liniji)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Max.broj Meta-Klju&#269;nih rije&#269;i koje se automatski generi&scaron;u.");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Redoslijed klju&#269;nih rije&#269;i");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Kreiraj u redoslijedu gdje se treba uvrstiti");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Redoslijed rije&#269;i kod ponavljanja");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Resetuj redoslijed");

?>
