<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Baza podataka je uspje�no obnovljena!");
define("_AM_CONFIG","Konfiguracija novosti");
define("_AM_AUTOARTICLES","Automatizirani �lanci");
define("_AM_STORYID","ID pri�e");
define("_AM_TITLE","Naslov");
define("_AM_TOPIC","Tema");
define("_AM_POSTER","Napisao");
define("_AM_PROGRAMMED","Programiran datum/vrijeme");
define("_AM_ACTION","Akcija");
define("_AM_EDIT","Uredi");
define("_AM_DELETE","Obri�i");
define("_AM_LAST10ARTS","Zadnjih %d �lanaka");
define("_AM_PUBLISHED","Objavljeno"); // Published Date
define("_AM_GO","Kreni!");
define("_AM_EDITARTICLE","Uredi �lanak");
define("_AM_POSTNEWARTICLE","Napi�i novi �lanak");
define("_AM_ARTPUBLISHED","Va� �lanak je objavljen!");
define("_AM_HELLO","Bok %s,");
define("_AM_YOURARTPUB","Va� �lanak koji ste prijavili je objavljen na na�oj stranici.");
define("_AM_TITLEC","Naslov: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Objavljeno: ");
define("_AM_RUSUREDEL","Jeste li sigurni da �elite obrisati ovaj �lanak i sve njegove komentare?");
define("_AM_YES","Da");
define("_AM_NO","Ne");
define("_AM_INTROTEXT","Uvodni tekst");
define("_AM_EXTEXT","Pro�ireni tekst");
define("_AM_ALLOWEDHTML","Dozvoljen HTML:");
define("_AM_DISAMILEY","Onemogu�i smajli�e");
define("_AM_DISHTML","Onemogu�i HTML");
define("_AM_APPROVE","Odobri");
define("_AM_MOVETOTOP","Preseli ovu pri�u na vrh");
define("_AM_CHANGEDATETIME","Promjeni datum/vrijeme objave");
define("_AM_NOWSETTIME","Sad je postavljena na: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Trenutno vrijeme je: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Postavi datum/vrijeme objavljivanja");
define("_AM_MONTHC","Mjesec:");
define("_AM_DAYC","Dan:");
define("_AM_YEARC","Godina:");
define("_AM_TIMEC","Vrijeme:");
define("_AM_PREVIEW","Pregled");
define("_AM_SAVE","Spremi");
define("_AM_PUBINHOME","Objavi kod ku�e?");
define("_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Dodaj GLAVNU temu");
define("_AM_TOPICNAME","Ime teme");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(max: 255 znakova)");
define("_AM_TOPICIMG","Slika teme");
define("_AM_IMGNAEXLOC","slika teme + ekstenzija smje�teni na %s");
define("_AM_FEXAMPLE","naprimjer: games.gif");
define("_AM_ADDSUBTOPIC","Dodaj POD-temu");
define("_AM_IN","u");
define("_AM_MODIFYTOPIC","Primjeni temu");
define("_AM_MODIFY","Promjeni");
define("_AM_PARENTTOPIC","Roditeljska tema");
define("_AM_SAVECHANGE","Spremi promjene");
define("_AM_DEL","Obri�i");
define("_AM_CANCEL","Poni�ti");
define("_AM_WAYSYWTDTTAL","PA�NJA: Da li ste sigurni da �elite obrisati ovu Temu i SVE njezine pri�e i komentare?");


// Added in Beta6
define("_AM_TOPICSMNGR","Menad�er tema");
define("_AM_PEARTICLES","Napi�i/Uredi �lanke");
define("_AM_NEWSUB","Nove prijave");
define("_AM_POSTED","Napisano");
define("_AM_GENERALCONF","Op�a konfiguracija");

// Added in RC2
define("_AM_TOPICDISPLAY","Prika�i sliku teme?");
define("_AM_TOPICALIGN","Pozicija");
define("_AM_RIGHT","Desno");
define("_AM_LEFT","Lijevo");

define("_AM_EXPARTS","Zastarjeli �lanci");
define("_AM_EXPIRED","Zastarjelo");
define("_AM_CHANGEEXPDATETIME","Promjeni datum/vrijeme zastare");
define("_AM_SETEXPDATETIME","Postavi datum/vrijeme zastare");
define("_AM_NOWSETEXPTIME","Sad je postavljena na: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Mora� unesti ime teme!");
define("_AM_EMPTYNODELETE", "Nema ni�ega za brisanje!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', 'Prijavi/Odobri/Pregledaj Prava');
define('_AM_SELFILE','Izaberi dokument za upload');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE','Gre�ka pri dodavanju dokumenta pri�i');
define('_AM_UPLOAD_ERROR','Gre�ka pri uploadanju datoteke');
define('_AM_UPLOAD_ATTACHFILE','Dodane datoteke');
define('_AM_APPROVEFORM', 'Odobri prava');
define('_AM_SUBMITFORM', 'Prijavi prava');
define('_AM_VIEWFORM', 'Pregledaj prava');
define('_AM_APPROVEFORM_DESC', 'Izaberite, tko mo�e odobriti novosti');
define('_AM_SUBMITFORM_DESC', 'Izaberite, tko mo�e prijaviti novosti');
define('_AM_VIEWFORM_DESC', 'izaberite, tko mo�e pregledavati koje novosti');
define('_AM_DELETE_SELFILES', 'Obri�i selektirane datoteke');
define('_AM_TOPIC_PICTURE', 'Upload slika');
define('_AM_UPLOAD_WARNING', '<B>Pa�nja, ne zaboravite primjeniti prava na zapis za sljede�u mapu : %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', 'Nadogranja zavr�ena');
define('_AM_NEWS_UPDATEMODULE', 'Nadogradnja modulskih templatea i blokova ');
define('_AM_NEWS_UPGRADEFAILED', 'Nadogradnja nije uspjela');
define('_AM_NEWS_UPGRADE', 'Nadogradi');
define('_AM_ADD_TOPIC','Dodaj temu');
define('_AM_ADD_TOPIC_ERROR','Gre�ka, tema ve� postoji!');
define('_AM_ADD_TOPIC_ERROR1','GRE�KA: Ne mo�ete izabrati ovu temu za roditeljsku temu!');
define('_AM_SUB_MENU','Objavi ovu temu kao podmeni');
define('_AM_SUB_MENU_YESNO','Pod-meni?');
define('_AM_HITS', 'Pri�itano');
define('_AM_CREATED', 'Stvoreno');

define('_AM_TOPIC_DESCR', "Opis teme");
define('_AM_USERS_LIST', "Lista korisnika");
define('_AM_PUBLISH_FRONTPAGE', "Objavi na po�etnoj stranici?");
define('_AM_NEWS_UPGRADEFAILED1', 'Ne mo�e se stvoriti tablica stories_files');
define('_AM_NEWS_UPGRADEFAILED2', "Ne mo�e se promjeniti du�ina naslova teme");
define('_AM_NEWS_UPGRADEFAILED21', "Ne mo�e se dodati polje u topics tablicu");
define('_AM_NEWS_UPGRADEFAILED3', 'Ne mo�e se stvoriti tablica stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4', "Ne mogu se stvoriti dva polja 'rating' i 'votes' za 'story' tablicu");
define('_AM_NEWS_UPGRADEFAILED0', "Molimo zapi�ite poruku i probajte ispraviti problem sa phpMyadmin i sql definicijske datoteke dostupne u 'sql' mapi news modula");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Gre�ka, da bi pokrenuli skriptu za nadogradnju, morate biti administrator za ovaj modul");
define('_AM_NEWS_PRUNE_BEFORE',"Smanji pri�e koje su bilo objavljene prije");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Obri�i samo pri�e koje su zastarjele");
define('_AM_NEWS_PRUNE_CONFIRM',"Pozor, zauvijek �ete obrisati pri�e koje su objavljene prije %s (ova se akcija ne mo�e poni�titi). Obuhva�eno je %s pri�a.<br />Jesi li siguran ?");
define('_AM_NEWS_PRUNE_TOPICS',"Ograni�i na sljede�e teme");
define('_AM_NEWS_PRUNENEWS', 'Smanji novosti');
define('_AM_NEWS_EXPORT_NEWS', 'Izvoz novosti');
define('_AM_NEWS_EXPORT_NOTHING', "Oprostite ali nema ni�ega za izvoz, provjerite svoje kriterije");
define('_AM_NEWS_PRUNE_DELETED', '%d novosti su obrisane');
define('_AM_NEWS_PERM_WARNING', '<h2>Pozor, imate 3 obrazca pa tako imate i 3 tipke za prihvat</h2>');
define('_AM_NEWS_EXPORT_BETWEEN', 'Izvezi novosti objavljene izme�u');
define('_AM_NEWS_EXPORT_AND', ' i ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Ako ni�ta ne ozna�ite onda �e sve teme biti kori�tene<br/> ina�e samo ozna�ene teme �e biti kori�tene");
define('_AM_NEWS_EXPORT_INCTOPICS', 'Uklju�i definicije tema ?');
define('_AM_NEWS_EXPORT_ERROR', 'Gre�ka se dogodila pri stvaranju datoteke %s. Operacija je stopirana.');
define('_AM_NEWS_EXPORT_READY', "Va� xml izvozna datoteka je spremna za download. <br /><a href='%s'>Kliknite na link da bi je downloadali</a>.<br />Ne zaboravite <a href='%s'>izbrisati je</a> kad jednom zavr�ite.");
define('_AM_NEWS_RSS_URL', "URL RSS podataka");
define('_AM_NEWS_NEWSLETTER', "Novine");
define('_AM_NEWS_NEWSLETTER_BETWEEN', 'Izabir novosti objavljenih izme�u');
define('_AM_NEWS_NEWSLETTER_READY', "Va�a datoteka as novostima je spremna za download. <br /><a href='%s'>Kliknite na ovaj link da bi je downloadali</a>.<br />Ne zaboravite da <a href='%s'>je obri�ete</a> jednom kad ste gotovi.");
define('_AM_NEWS_DELETED_OK',"Datoteka je uspje�no obrisana");
define('_AM_NEWS_DELETED_PB',"Do�lo je do problema pri brisanju datoteke");
define('_AM_NEWS_STATS0','Statistika tema');
define('_AM_NEWS_STATS','Statistika');
define('_AM_NEWS_STATS1','Jedinstvenih autora');
define('_AM_NEWS_STATS2','Ukupno');
define('_AM_NEWS_STATS3','Statistika �lanaka');
define('_AM_NEWS_STATS4','Naj�itaniji �lanci');
define('_AM_NEWS_STATS5','Najmanje �itani �lanci');
define('_AM_NEWS_STATS6','�lanci s najvi�im ocjenama');
define('_AM_NEWS_STATS7','Naj�itaniji autori');
define('_AM_NEWS_STATS8','Autori s najvi�im ocjenama');
define('_AM_NEWS_STATS9','Najve�i objavljiva�i');
define('_AM_NEWS_STATS10','Statistika autora');
define('_AM_NEWS_STATS11',"Prebrojavanje �lanaka");
define('_AM_NEWS_HELP',"Pomo�");
define("_AM_NEWS_MODULEADMIN","Administrator modula");
define("_AM_NEWS_GENERALSET", "Postavke modula" );
define('_AM_NEWS_GOTOMOD','Idi na modul');
define('_AM_NEWS_NOTHING',"Oprostite ali nema ni�ega za download, provjerite svoje kriterije !");
define('_AM_NEWS_NOTHING_PRUNE',"Oprostite ali nema novosti za smanjivanje, provjerite svoje kriterije !");
define('_AM_NEWS_TOPIC_COLOR',"Boja teme");
define('_AM_NEWS_COLOR',"Boja");
define('_AM_NEWS_REMOVE_BR',"Pretvori html &lt;br&gt; tag u novu liniju ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Molim nadogradite modul !</font></a>");
?>