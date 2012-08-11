<?php
// $Id: admin.php,v 2.3 2005/11/01 12:25:54 phppp Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF","Forum-konfiguracija");
define("_AM_NEWBB_ADDAFORUM","Forum dodaj");
define("_AM_NEWBB_SYNCFORUM","Forum synchroni&scaron;i");
define("_AM_NEWBB_REORDERFORUM","Novi ordnen");
define("_AM_NEWBB_FORUM_MANAGER","Fore");
define("_AM_NEWBB_PRUNE_TITLE","Pokupiti");
define("_AM_NEWBB_CATADMIN","Kategorije");
define("_AM_NEWBB_GENERALSET","Modul-Pode&scaron;avanje" );
define("_AM_NEWBB_MODULEADMIN","Modul-Administracija:");
define("_AM_NEWBB_HELP","Pomo&#263;");
define("_AM_NEWBB_ABOUT","O Modulu");
define("_AM_NEWBB_BOARDSUMMARY","Fore-statistika");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH","Jo&#263; postova za odobriti");
define("_AM_NEWBB_POSTID","Posta-ID");
define("_AM_NEWBB_POSTDATE","Datum posta");
define("_AM_NEWBB_POSTER","Autor");
define("_AM_NEWBB_TOPICS","Teme");
define("_AM_NEWBB_SHORTSUMMARY","Fore-Summary");
define("_AM_NEWBB_TOTALPOSTS","Ukupno postova");
define("_AM_NEWBB_TOTALTOPICS","Ukupno tema");
define("_AM_NEWBB_TOTALVIEWS","Ukupno klikova");
define("_AM_NEWBB_BLOCKS","Blokovie");
define("_AM_NEWBB_SUBJECT","Razlog");
define("_AM_NEWBB_APPROVE","Post odobri");
define("_AM_NEWBB_APPROVETEXT","Sadr&#382;aj ovog posta");
define("_AM_NEWBB_POSTAPPROVED","Post je odobren");
define("_AM_NEWBB_POSTNOTAPPROVED","Post nije odobren");
define("_AM_NEWBB_POSTSAVED","Post je memorisan");
define("_AM_NEWBB_POSTNOTSAVED","Post nije memorisan");

define("_AM_NEWBB_TOPICAPPROVED","Tema je odobrena");
define("_AM_NEWBB_TOPICNOTAPPROVED","Tema nije odobrena");
define("_AM_NEWBB_TOPICID","Teme-ID");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH","Odobrenje o neodobrenih postova");


define('_AM_NEWBB_DEL_ONE','Samo ovaj post izbri&scaron;i');
define('_AM_NEWBB_POSTSDELETED','Izabrani postovi su izbrisani.');
define('_AM_NEWBB_NOAPPROVEPOST','Trenutno nema postova, koji &#269;ekaju na odobrenje.');
define('_AM_NEWBB_SUBJECTC','Razlog:');
define('_AM_NEWBB_MESSAGEICON','Symbol posta:');
define('_AM_NEWBB_MESSAGEC','Post:');
define('_AM_NEWBB_CANCELPOST','Post obustavi');
define('_AM_NEWBB_GOTOMOD','Idi u Modul');

define('_AM_NEWBB_PREFERENCES','Modul-pode&scaron;avanje');
define('_AM_NEWBB_POLLMODULE','Anketa modul');
define('_AM_NEWBB_POLL_OK','se mo&#382;e koristiti');
define('_AM_NEWBB_GDLIB1','GD1-Library:');
define('_AM_NEWBB_GDLIB2','GD2-Library:');
define('_AM_NEWBB_AUTODETECTED','Automatski otkrij: ');
define('_AM_NEWBB_AVAILABLE','dostupno');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">nije dostupno</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">nemo&#382;e se pisati</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagick');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','nije spreman');
define('_AM_NEWBB_ATTACHPATH','Veza za mjesto memorisanja zaka&#269;ki');
define('_AM_NEWBB_THUMBPATH','Veza za pregled uba&#269;enih slika');
//define('_AM_NEWBB_RSSPATH','Pfad f&uuml;r RSS-Dateien');
define('_AM_NEWBB_REPORT','Prijavljeni postovi');
define('_AM_NEWBB_REPORT_PENDING','Prijava je u obradi');
define('_AM_NEWBB_REPORT_PROCESSED','Uredi prijavu');

define('_AM_NEWBB_CREATETHEDIR','Napravi');
define('_AM_NEWBB_SETMPERM','Stavi odobrenja');
define('_AM_NEWBB_DIRCREATED','Direktorij je napravljen');
define('_AM_NEWBB_DIRNOTCREATED','Direktorij se nemo&#382;e napraviti');
define('_AM_NEWBB_PERMSET','Odobrenje je postavljeno');
define('_AM_NEWBB_PERMNOTSET','Odobrenje se nemo&#382;e dati');

define('_AM_NEWBB_DIGEST','Digest-Obavijesti');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Treba za %d minuta obavijesti biti poslate.</font>');
define('_AM_NEWBB_DIGEST_NEXT','Treba za %d minuta poslati');
define('_AM_NEWBB_DIGEST_ARCHIVE','Digest-Arhiva');
define('_AM_NEWBB_DIGEST_SENT','Digest preuredi.');
define('_AM_NEWBB_DIGEST_FAILED','Digest ne preure&#273;uj.');

// admin_forum_manager.php
define("_AM_NEWBB_NAME","Naziv");
define("_AM_NEWBB_CREATEFORUM","Forum postavi");
define("_AM_NEWBB_EDIT","Uredi");
define("_AM_NEWBB_CLEAR","Isprazni");
define("_AM_NEWBB_DELETE","Izbri&scaron;i");
define("_AM_NEWBB_ADD","Dodaj");
define("_AM_NEWBB_MOVE","Prebaci");
define("_AM_NEWBB_ORDER","Sortiraj");
define("_AM_NEWBB_TWDAFAP","Upozorenje: Ovom akcijom se u Forumu sav njegov sadr&#382;aj bri&scaron;e.<br /><br />Pa&#382;nja: Jesi li siguran da ovaj Forum izbrisati treba?");
define("_AM_NEWBB_FORUMREMOVED","Forum je izbrisan.");
define("_AM_NEWBB_CREATENEWFORUM","Novi Forum napravi.");
define("_AM_NEWBB_EDITTHISFORUM","Forum uredi:");
define("_AM_NEWBB_SET_FORUMORDER","Forumu poziciju odredi:");
define("_AM_NEWBB_ALLOWPOLLS","Anketu dozvoli?");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"Max. Veli&#269;ina u KB:");
define("_AM_NEWBB_ALLOWED_EXTENSIONS","Dozvoljeni dodaci:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' ozna&#269;ava da nema ograni&#269;enja.<br /> Dodatke treba sa ovim znakom '|' rastaviti.</span>");
define("_AM_NEWBB_ALLOW_ATTACHMENTS","Zaka&#269;ke dozvoli?");
define("_AM_NEWBB_ALLOWHTML","HTML dozvoli?");
define("_AM_NEWBB_YES","Da");
define("_AM_NEWBB_NO","Ne");
define("_AM_NEWBB_ALLOWSIGNATURES","Signaturu dozvoli?");
define("_AM_NEWBB_HOTTOPICTHRESHOLD","Oznaka za 'Vru&#263;e Teme':");
//define("_AM_NEWBB_POSTPERPAGE","Posts per Page:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of posts<br /> per topic that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_TOPICPERFORUM","Topics per Forum:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of topics<br /> per forum that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_SHOWNAME","Replace user's name with real name:");
//define("_AM_NEWBB_SHOWICONSPANEL","Show icons panel:");
//define("_AM_NEWBB_SHOWSMILIESPANEL","Show smilies panel:");
define("_AM_NEWBB_MODERATOR_REMOVE","Trenutne Moderatore izbaci");
define("_AM_NEWBB_MODERATOR_ADD","Moderatora(e) dodaj");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX","Teme-Prefixe dozvoli?");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC","Ovo dozvoljava Prefixima,da se ozna&#269;ene Teme dodaju.");


// admin_cat_manager.php

define("_AM_NEWBB_SETCATEGORYORDER","Poziciju Kategorija odredi:");
define("_AM_NEWBB_ACTIVE","Aktivna");
define("_AM_NEWBB_INACTIVE","Inaktivna");
define("_AM_NEWBB_STATE","Status:");
define("_AM_NEWBB_CATEGORYDESC","Opis Kategorije:");
define("_AM_NEWBB_SHOWDESC","Opis prika&#382;i?");
define("_AM_NEWBB_IMAGE","Slika:");
define("_AM_NEWBB_SPONSORIMAGE","Sponsora slika:");
define("_AM_NEWBB_SPONSORLINK","Sponsora link:");
define("_AM_NEWBB_DELCAT","Kategorie l&ouml;schen");
define("_AM_NEWBB_WAYSYWTDTTAL","Upozorenje: Ovom radnjom se ne bri&scaron;u Kategorije, to se de&scaron;ava u 'Forum uredi'-Podru&#269;ju.<br /><br />Pa&#382;nja: Jesi li siguran da ovu Kategoriju izbrisati &#382;eli&scaron;?");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME","Foruma naziv:");
define("_AM_NEWBB_FORUMDESCRIPTION","Opis Foruma:");
define("_AM_NEWBB_MODERATOR","Moderator(i):");
define("_AM_NEWBB_REMOVE","Izbri&scaron;i");
define("_AM_NEWBB_CATEGORY","Kategorija:");
define("_AM_NEWBB_DATABASEERROR","Gre&scaron;ka u Bazi podataka");
define("_AM_NEWBB_CATEGORYUPDATED","Kategoriju aktuliziraj.");
define("_AM_NEWBB_EDITCATEGORY","Kategoriju uredi:");
define("_AM_NEWBB_CATEGORYTITLE","Kategorije naslov:");
define("_AM_NEWBB_CATEGORYCREATED","Kategoriju dodaj.");
define("_AM_NEWBB_CREATENEWCATEGORY","Novu Kategoriju dodaj");
define("_AM_NEWBB_FORUMCREATED","Forum dodaj.");
define("_AM_NEWBB_ACCESSLEVEL","Generalni level pristupa:");
define("_AM_NEWBB_CATEGORY1","Kategorija");
define("_AM_NEWBB_FORUMUPDATE","Forumsko pode&scaron;avanje aktuliziraj");
define("_AM_NEWBB_FORUM_ERROR","Gre&scaron;ka: Gre&scaron;ka u Forumskom pode&scaron;avanju");
define("_AM_NEWBB_CLICKBELOWSYNC","Klikni ispod na Button synchroniiraj tvoje Fore i Teme obavijesti sa stvarnim stanjem u Bazi podataka. Ovu funkciju uvijek koristi, ako ima neta&#269;nih podataka u Temama- i listi Foruma.");
define("_AM_NEWBB_SYNCHING","Forum-, Index- i Pregledno podru&#269;je bi&#263;e synchronizirani (Ova akcija mo&#382;e malo potrajati)");
define("_AM_NEWBB_CATEGORYDELETED","Kategoriju itbri&scaron;i.");
define("_AM_NEWBB_MOVE2CAT","U sljede&#263;u Kategoriju prebaci:");
define("_AM_NEWBB_MAKE_SUBFORUM_OF","Podforum od:");
define("_AM_NEWBB_MSG_FORUM_MOVED","Forum prebaci!");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED","Prebacivanje Foruma nije uspjelo.");
define("_AM_NEWBB_SELECT","< Izaberi >");
define("_AM_NEWBB_MOVETHISFORUM","Ovaj Forum prebaci.");
define("_AM_NEWBB_MERGE","Zajedno dodaj");
define("_AM_NEWBB_MERGETHISFORUM","Ovaj Forum zajedno dodaj");
define("_AM_NEWBB_MERGETO_FORUM","Ovaj Forum zajedno dodaj sa:");
define("_AM_NEWBB_MSG_FORUM_MERGED","Forum zusammengef&uuml;gt");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED","Zajedno dodavanje Foruma nije uspjelo");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_NEWBB_REORDERID","ID");
define("_AM_NEWBB_REORDERTITLE","Naslov");
define("_AM_NEWBB_REORDERWEIGHT","Pozicija");
define("_AM_NEWBB_SETFORUMORDER","Forumsko sortiranje uredi");
define("_AM_NEWBB_BOARDREORDER","Forum je po tvojoj volji sortiran");

// admin_permission.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM","Odobrene Teme za ovaj Forum");
define("_AM_NEWBB_CAT_ACCESS","Kategorija odobrenje");
define("_AM_NEWBB_CAN_ACCESS","Ima&scaron; pristup Kategorijama");
define("_AM_NEWBB_CAN_VIEW","Mo&#382;e&scaron; &#269;itati");
define("_AM_NEWBB_CAN_POST","Mo&#382;e&scaron; nove Teme startovati");
define("_AM_NEWBB_CAN_REPLY","Mo&#382;e&scaron; odgovarati");
define("_AM_NEWBB_CAN_EDIT","Mo&#382;e&scaron; urediti");
define("_AM_NEWBB_CAN_DELETE","Mo&#382;e&scaron; brisati");
define("_AM_NEWBB_CAN_ADDPOLL","Mo&#382;e&scaron; Anketu startati");
define("_AM_NEWBB_CAN_VOTE","Mo&#382;e&scaron; glasati");
define("_AM_NEWBB_CAN_ATTACH","Mo&#382;e&scaron; Podatak dodati");
define("_AM_NEWBB_CAN_NOAPPROVE","Mo&#382;e&scaron; bez odobrenja pisati");
define("_AM_NEWBB_ACTION","Aktion");

define("_AM_NEWBB_PERM_TEMPLATE","Standardni Template odobrenje");
define("_AM_NEWBB_PERM_TEMPLATE_DESC","Ovo mo&#382;e Template Forumu usmjeriti");
define("_AM_NEWBB_PERM_FORUMS","Fore izaberi");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED","Odobrenje za Template je dato");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR","Do&scaron;lo je do gre&scaron;ke prilikom odobravanja za Template.");
define("_AM_NEWBB_PERM_TEMPLATEAPP","Odobrenje za Template odredi");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED","Standardno odobrenje za Template je dato.");
define("_AM_NEWBB_PERM_ACTION","Akcija odobravanja");
define("_AM_NEWBB_PERM_SETBYGROUP","Odobrenje za svaku Grupu odredi");

// admin_forum_prune.php

define("_AM_NEWBB_PRUNE_RESULTS_TITLE","Rezultate pokupi");
define("_AM_NEWBB_PRUNE_RESULTS_TOPICS","Pokupljene Teme");
define("_AM_NEWBB_PRUNE_RESULTS_POSTS","Pokupljeni Postovi");
define("_AM_NEWBB_PRUNE_RESULTS_FORUMS","Pokupljene Fore");
define("_AM_NEWBB_PRUNE_STORE","U ovom Forumu memori&scaron;i umjesto da izbri&scaron;e&scaron;:");
define("_AM_NEWBB_PRUNE_ARCHIVE","Kopije Postova osiguraj u Arhivi");
define("_AM_NEWBB_PRUNE_FORUMSELERROR","Gre&scaron;ka, nema pokupljenih datih Foruma.");

define("_AM_NEWBB_PRUNE_DAYS","Izbri&scaron;i Teme bez Postova koje su od:");
define("_AM_NEWBB_PRUNE_FORUMS","Fore za pokupiti");
define("_AM_NEWBB_PRUNE_STICKY","Sticky-Teme zadr&#382;i");
define("_AM_NEWBB_PRUNE_DIGEST","Digest zadr&#382;i");
define("_AM_NEWBB_PRUNE_LOCK","Geschlossene Themen behalten");
define("_AM_NEWBB_PRUNE_HOT","Teme zadr&#382;i koje imaju Postova vi&scaron;e od ovog broja:");
define("_AM_NEWBB_PRUNE_SUBMIT","OK");
define("_AM_NEWBB_PRUNE_RESET","Vrati kako je bilo");
define("_AM_NEWBB_PRUNE_YES","Da");
define("_AM_NEWBB_PRUNE_NO","Ne");
define("_AM_NEWBB_PRUNE_WEEK","Jedna sedmica");
define("_AM_NEWBB_PRUNE_2WEEKS","Dvije sedmice");
define("_AM_NEWBB_PRUNE_MONTH","Jedan Mjesec");
define("_AM_NEWBB_PRUNE_2MONTH","Dva Mjeseca");
define("_AM_NEWBB_PRUNE_4MONTH","&#268;etiri Mjeseca");
define("_AM_NEWBB_PRUNE_YEAR","Godinu dana");
define("_AM_NEWBB_PRUNE_2YEARS","2 godine");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO',"Autora-informacije");
define('_AM_NEWBB_AUTHOR_NAME',"Autor");
define('_AM_NEWBB_AUTHOR_WEBSITE',"Web stranica Autora");
define('_AM_NEWBB_AUTHOR_EMAIL',"E-Mail od Autora");
define('_AM_NEWBB_AUTHOR_CREDITS',"Kredit");
define('_AM_NEWBB_MODULE_INFO',"Modula informacije");
define('_AM_NEWBB_MODULE_STATUS',"Status");
define('_AM_NEWBB_MODULE_DEMO',"Demo Web stranica");
define('_AM_NEWBB_MODULE_SUPPORT',"Offizielle Supportwebsite");
define('_AM_NEWBB_MODULE_BUG',"Prijavi gre&scaron;ku Modula");
define('_AM_NEWBB_MODULE_FEATURE',"Daj predlog za pobolj&scaron;anje Modula");
define('_AM_NEWBB_MODULE_DISCLAIMER',"Pravilnik");
define('_AM_NEWBB_AUTHOR_WORD',"Primjedba pronalaza&#269;a");
define('_AM_NEWBB_BY','Od');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA',"
");

// admin_report.php
define("_AM_NEWBB_REPORTADMIN","Prijavljeni Postovi");
define("_AM_NEWBB_PROCESSEDREPORT","Ure&#273;ene prijave prika&#382;i");
define("_AM_NEWBB_PROCESSREPORT","Prijavu uredi");
define("_AM_NEWBB_REPORTTITLE","Naslov prijave");
define("_AM_NEWBB_REPORTEXTRA","Extra");
define("_AM_NEWBB_REPORTPOST","Prijavljeni Post");
define("_AM_NEWBB_REPORTTEXT","Tekst prijave");
define("_AM_NEWBB_REPORTMEMO","Memo uredi");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN","Digest Menadzer");
define("_AM_NEWBB_DIGESTCONTENT","Digest sadr&#382;aj");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION","Informacije glasanja");
define("_AM_NEWBB_VOTE_TOTALVOTES","Ukupno glasova: ");
define("_AM_NEWBB_VOTE_REGUSERVOTES","Glasovi registrovanih: %s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES","Glasovi gostiju: %s");
define("_AM_NEWBB_VOTE_USER","&#268;lan");
define("_AM_NEWBB_VOTE_IP","IP-Adresa");
define("_AM_NEWBB_VOTE_USERAVG","Prosje&#269;na ocjena");
define("_AM_NEWBB_VOTE_TOTALRATE","Ukupni broj ocjena");
define("_AM_NEWBB_VOTE_DATE","Podatak glasanja");
define("_AM_NEWBB_VOTE_RATING","Ocjena");
define("_AM_NEWBB_VOTE_NOREGVOTES","Registrovani nemogu glasati.");
define("_AM_NEWBB_VOTE_NOUNREGVOTES","Gosti nemogu glasati.");
define("_AM_NEWBB_VOTEDELETED","Glasanje je izbrisano.");
define("_AM_NEWBB_VOTE_ID","ID");
define("_AM_NEWBB_VOTE_FILETITLE","Naslov Teme");
define("_AM_NEWBB_VOTE_DISPLAYVOTES","Informacija glasanja");
define("_AM_NEWBB_VOTE_NOVOTES","Nema glasova");
define("_AM_NEWBB_VOTE_DELETE","Glasanje izbri&scaron;i?");
define("_AM_NEWBB_VOTE_DELETEDSC","<b>Bri&scaron;i</b> izabrana glasanja iz Baze podataka.");
?>
