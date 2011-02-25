<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Baza podataka je uspješno obnovljena!");
define("_AM_CONFIG","Postavke novosti");
define("_AM_AUTOARTICLES","Automatizirani članci");
define("_AM_STORYID","ID objave");
define("_AM_TITLE","Naslov");
define("_AM_TOPIC","Tema");
define("_AM_POSTER","Napisao");
define("_AM_PROGRAMMED","Programiran datum/vrijeme");
define("_AM_ACTION","Radnja");
define("_AM_EDIT","Uredi");
define("_AM_DELETE","Obriši");
define("_AM_LAST10ARTS","Zadnjih %d članaka");
define("_AM_PUBLISHED","Objavljeno"); // Published Date
define("_AM_GO","Kreni!");
define("_AM_EDITARTICLE","Uredi članak");
define("_AM_POSTNEWARTICLE","Napiši novi članak");
define("_AM_ARTPUBLISHED","Vaš članak je objavljen!");
define("_AM_HELLO","Bok %s,");
define("_AM_YOURARTPUB","Vaš članak koji ste prijavili je objavljen na našoj stranici.");
define("_AM_TITLEC","Naslov: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Objavljeno: ");
define("_AM_RUSUREDEL","Jeste li sigurni da želite obrisati ovaj članak i sve njegove komentare?");
define("_AM_YES","Da");
define("_AM_NO","Ne");
define("_AM_INTROTEXT","Uvodni tekst");
define("_AM_EXTEXT","Prošireni tekst");
define("_AM_ALLOWEDHTML","Dozvoljen HTML:");
define("_AM_DISAMILEY","Onemogući emotikone");
define("_AM_DISHTML","Onemogući HTML");
define("_AM_APPROVE","Odobri");
define("_AM_MOVETOTOP","Preseli ovu objavu na vrh");
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
define("_AM_PUBINHOME","Objavi na početnoj stranici?");
define("_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Dodaj GLAVNU temu");
define("_AM_TOPICNAME","Ime teme");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(max: 255 znakova)");
define("_AM_TOPICIMG","Slika teme");
define("_AM_IMGNAEXLOC","slika teme + ekstenzija smješteni na %s");
define("_AM_FEXAMPLE","naprimjer: games.gif");
define("_AM_ADDSUBTOPIC","Dodaj POD-temu");
define("_AM_IN","u");
define("_AM_MODIFYTOPIC","Primjeni temu");
define("_AM_MODIFY","Promjeni");
define("_AM_PARENTTOPIC","Roditeljska tema");
define("_AM_SAVECHANGE","Spremi promjene");
define("_AM_DEL","Obriši");
define("_AM_CANCEL","Poništi");
define("_AM_WAYSYWTDTTAL","PAŽNJA: Da li ste sigurni da želite obrisati ovu Temu i SVE njezine objave i komentare?");


// Added in Beta6
define("_AM_TOPICSMNGR","Menadžer tema");
define("_AM_PEARTICLES","Napiši/Uredi članke");
define("_AM_NEWSUB","Nove prijave");
define("_AM_POSTED","Napisano");
define("_AM_GENERALCONF","Opće postavke");

// Added in RC2
define("_AM_TOPICDISPLAY","Prikaži sliku teme?");
define("_AM_TOPICALIGN","Pozicija");
define("_AM_RIGHT","Desno");
define("_AM_LEFT","Lijevo");

define("_AM_EXPARTS","Zastarjeli članci");
define("_AM_EXPIRED","Zastarjelo");
define("_AM_CHANGEEXPDATETIME","Promjeni datum/vrijeme zastare");
define("_AM_SETEXPDATETIME","Postavi datum/vrijeme zastare");
define("_AM_NOWSETEXPTIME","Sad je postavljena na: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Moraš unesti ime teme!");
define("_AM_EMPTYNODELETE", "Nema ničega za brisanje!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', 'Prijavi/Odobri/Pregledaj Prava');
define('_AM_SELFILE','Izaberi dokument za upload');

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE','Greška pri dodavanju dokumenta objavi');
define('_AM_UPLOAD_ERROR','Greška pri uploadanju datoteke');
define('_AM_UPLOAD_ATTACHFILE','Dodane datoteke');
define('_AM_APPROVEFORM', 'Odobri prava');
define('_AM_SUBMITFORM', 'Prijavi prava');
define('_AM_VIEWFORM', 'Pregledaj prava');
define('_AM_APPROVEFORM_DESC', 'Izaberite, tko može odobriti novosti');
define('_AM_SUBMITFORM_DESC', 'Izaberite, tko može prijaviti novosti');
define('_AM_VIEWFORM_DESC', 'izaberite, tko može pregledavati koje novosti');
define('_AM_DELETE_SELFILES', 'Obriši selektirane datoteke');
define('_AM_TOPIC_PICTURE', 'Upload slika');
define('_AM_UPLOAD_WARNING', '<B>Pažnja, ne zaboravite primjeniti prava na zapis za sljedeću mapu : %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', 'Nadogranja završena');
define('_AM_NEWS_UPDATEMODULE', 'Nadogradnja modulskih templatea i blokova ');
define('_AM_NEWS_UPGRADEFAILED', 'Nadogradnja nije uspjela');
define('_AM_NEWS_UPGRADE', 'Nadogradi');
define('_AM_ADD_TOPIC','Dodaj temu');
define('_AM_ADD_TOPIC_ERROR','Greška, tema već postoji!');
define('_AM_ADD_TOPIC_ERROR1','GREŠKA: Ne možete izabrati ovu temu za roditeljsku temu!');
define('_AM_SUB_MENU','Objavi ovu temu kao podmeni');
define('_AM_SUB_MENU_YESNO','Pod-meni?');
define('_AM_HITS', 'Pričitano');
define('_AM_CREATED', 'Stvoreno');

define('_AM_TOPIC_DESCR', "Opis teme");
define('_AM_USERS_LIST', "Lista korisnika");
define('_AM_PUBLISH_FRONTPAGE', "Objavi na početnoj stranici?");
define('_AM_NEWS_UPGRADEFAILED1', 'Ne može se stvoriti tablica stories_files');
define('_AM_NEWS_UPGRADEFAILED2', "Ne može se promjeniti dužina naslova teme");
define('_AM_NEWS_UPGRADEFAILED21', "Ne može se dodati polje u topics tablicu");
define('_AM_NEWS_UPGRADEFAILED3', 'Ne može se stvoriti tablica stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4', "Ne mogu se stvoriti dva polja 'rating' i 'votes' za 'story' tablicu");
define('_AM_NEWS_UPGRADEFAILED0', "Molimo zapišite poruku i probajte ispraviti problem sa phpMyadmin i sql definicijske datoteke dostupne u 'sql' mapi news modula");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Greška, da bi pokrenuli skriptu za nadogradnju, morate biti administrator za ovaj modul");
define('_AM_NEWS_PRUNE_BEFORE',"Smanji objave koje su bilo objavljene prije");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Obriši samo objave koje su zastarjele");
define('_AM_NEWS_PRUNE_CONFIRM',"Pozor, zauvijek ćete obrisati objave koje su objavljene prije %s (ova se akcija ne može poništiti). Obuhvaćeno je %s objava.<br />Jesi li siguran ?");
define('_AM_NEWS_PRUNE_TOPICS',"Ogranići na sljedeće teme");
define('_AM_NEWS_PRUNENEWS', 'Smanji novosti');
define('_AM_NEWS_EXPORT_NEWS', 'Izvoz novosti');
define('_AM_NEWS_EXPORT_NOTHING', "Oprostite ali nema ništa za izvoz, provjerite svoje kriterije");
define('_AM_NEWS_PRUNE_DELETED', '%d novosti su obrisane');
define('_AM_NEWS_PERM_WARNING', '<h2>Pozor, imate 3 obrazca pa tako imate i 3 tipke za prihvat</h2>');
define('_AM_NEWS_EXPORT_BETWEEN', 'Izvezi novosti objavljene između');
define('_AM_NEWS_EXPORT_AND', ' i ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Ako ništa ne označite onda će sve teme biti korištene<br/> inaće samo označene teme će biti korištene");
define('_AM_NEWS_EXPORT_INCTOPICS', 'Ukljući definicije tema ?');
define('_AM_NEWS_EXPORT_ERROR', 'Greška se dogodila pri stvaranju datoteke %s. Operacija je stopirana.');
define('_AM_NEWS_EXPORT_READY', "Vaš xml izvozna datoteka je spremna za download. <br /><a href='%s'>Kliknite na link da bi je downloadali</a>.<br />Ne zaboravite <a href='%s'>izbrisati je</a> kad jednom završite.");
define('_AM_NEWS_RSS_URL', "URL RSS podataka");
define('_AM_NEWS_NEWSLETTER', "Novine");
define('_AM_NEWS_NEWSLETTER_BETWEEN', 'Izabir novosti objavljenih između');
define('_AM_NEWS_NEWSLETTER_READY', "Vaša datoteka as novostima je spremna za download. <br /><a href='%s'>Kliknite na ovaj link da bi je downloadali</a>.<br />Ne zaboravite da <a href='%s'>je obrišete</a> jednom kad ste gotovi.");
define('_AM_NEWS_DELETED_OK',"Datoteka je uspješno obrisana");
define('_AM_NEWS_DELETED_PB',"Došlo je do problema pri brisanju datoteke");
define('_AM_NEWS_STATS0','Statistika tema');
define('_AM_NEWS_STATS','Statistika');
define('_AM_NEWS_STATS1','Jedinstvenih autora');
define('_AM_NEWS_STATS2','Ukupno');
define('_AM_NEWS_STATS3','Statistika članaka');
define('_AM_NEWS_STATS4','Najčitaniji članci');
define('_AM_NEWS_STATS5','Najmanje čitani članci');
define('_AM_NEWS_STATS6','Članci s najvišim ocjenama');
define('_AM_NEWS_STATS7','Najčitaniji autori');
define('_AM_NEWS_STATS8','Autori s najvišim ocjenama');
define('_AM_NEWS_STATS9','Najveći objavljivaći');
define('_AM_NEWS_STATS10','Statistika autora');
define('_AM_NEWS_STATS11',"Prebrojavanje članaka");
define('_AM_NEWS_HELP',"Pomoć");
define("_AM_NEWS_MODULEADMIN","Administrator modula");
define("_AM_NEWS_GENERALSET", "Postavke modula" );
define('_AM_NEWS_GOTOMOD','Idi na modul');
define('_AM_NEWS_NOTHING',"Oprostite ali nema ništa za download, provjerite svoje kriterije !");
define('_AM_NEWS_NOTHING_PRUNE',"Oprostite ali nema novosti za smanjivanje, provjerite svoje kriterije !");
define('_AM_NEWS_TOPIC_COLOR',"Boja teme");
define('_AM_NEWS_COLOR',"Boja");
define('_AM_NEWS_REMOVE_BR',"Pretvori html &lt;br&gt; tag u novu liniju ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Molim nadogradite modul !</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Zaglavlje");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Podnožje");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "Izbaci html tagove ?");
define('_AM_NEWS_VERIFY_TABLES','Održavanje tablica');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen je sustav koji vam pomaže da se vaša stranica molje indeksira kod tražilica.<br />Osim ako sami niste upisali meta ključne riječi i meta opise, modul će ih automatski stvoriti.");
define('_AM_NEWS_BLACKLIST',"Crna lista");
define('_AM_NEWS_BLACKLIST_DESC',"Riječi na ovoj listi neće se koristiti kod stvaranja meta ključnih riječi");
define('_AM_NEWS_BLACKLIST_ADD',"Dodaj");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Upišite riječi da bi ih dodali na listu<br />(jedna riječ po liniji)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Maksimalni broj meta ključnih riječi za auto stvaranje");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Redoslijed ključnih riječi");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Stvori ih po redusljedu kako dolaze u tekstu");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Po broju korištenja");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Suprotno od najčešće korištenih");
?>