<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_NW_DBUPDATED", "Baza podataka je uspješno obnovljena!");
define("_AM_NW_CONFIG", "Postavke novosti");
define("_AM_NW_AUTOARTICLES", "Automatizirani članci");
define("_AM_NW_STORYID", "ID objave");
define("_AM_NW_TITLE", "Naslov");
define("_AM_NW_TOPIC", "Kategorije");
define("_AM_NW_POSTER", "Napisao");
define("_AM_NW_PROGRAMMED", "Programiran datum/vrijeme");
define("_AM_NW_ACTION", "Radnja");
define("_AM_NW_EDIT", "Uredi");
define("_AM_NW_DELETE", "Obriši");
define("_AM_NW_LAST10ARTS", "Zadnjih %d članaka");
define("_AM_NW_PUBLISHED", "Objavljeno"); // Published Date
define("_AM_NW_GO", "Kreni!");
define("_AM_NW_EDITARTICLE", "Uredi članak");
define("_AM_NW_POSTNEWARTICLE", "Napiši novi članak");
define("_AM_NW_ARTPUBLISHED", "Vaš članak je objavljen!");
define("_AM_NW_HELLO", "Bok %s,");
define("_AM_NW_YOURARTPUB", "Vaš članak koji ste prijavili je objavljen na našoj stranici.");
define("_AM_NW_TITLEC", "Naslov: ");
define("_AM_NW_URLC", "URL: ");
define("_AM_NW_PUBLISHEDC", "Objavljeno: ");
define("_AM_NW_RUSUREDEL", "Jeste li sigurni da želite obrisati ovaj članak i sve njegove komentare?");
define("_AM_NW_YES", "Da");
define("_AM_NW_NO", "Ne");
define("_AM_NW_INTROTEXT", "Uvodni tekst");
define("_AM_NW_EXTEXT", "Prošireni tekst");
define("_AM_NW_ALLOWEDHTML", "Dozvoljen HTML:");
define("_AM_NW_DISAMILEY", "Onemogući emotikone");
define("_AM_NW_DISHTML", "Onemogući HTML");
define("_AM_NW_APPROVE", "Odobri");
define("_AM_NW_MOVETOTOP", "Preseli ovu objavu na vrh");
define("_AM_NW_CHANGEDATETIME", "Promjeni datum/vrijeme objave");
define("_AM_NW_NOWSETTIME", "Sad je postavljena na: %s"); // %s is datetime of publish
define("_AM_NW_CURRENTTIME", "Trenutno vrijeme je: %s");  // %s is the current datetime
define("_AM_NW_SETDATETIME", "Postavi datum/vrijeme objavljivanja");
define("_AM_NW_MONTHC", "Mjesec:");
define("_AM_NW_DAYC", "Dan:");
define("_AM_NW_YEARC", "Godina:");
define("_AM_NW_TIMEC", "Vrijeme:");
define("_AM_NW_PREVIEW", "Pregled");
define("_AM_NW_SAVE", "Spremi");
define("_AM_NW_PUBINHOME", "Objavi na početnoj stranici?");
define("_AM_NW_ADD", "Dodaj");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_NW_ADDMTOPIC", "Dodaj GLAVNU kategoriju");
define("_AM_NW_TOPICNAME", "Ime kategorije");
// Warning, changed from 40 to 255 characters.
define("_AM_NW_MAX40CHAR", "(max: 255 znakova)");
define("_AM_NW_TOPICIMG", "Slika kategorije");
define("_AM_NW_IMGNAEXLOC", "slika teme + ekstenzija smješteni na %s");
define("_AM_NW_FEXAMPLE", "naprimjer: games.gif");
define("_AM_NW_ADDSUBTOPIC", "Dodaj pod-kategoriju");
define("_AM_NW_IN", "u");
define("_AM_NW_MODIFYTOPIC", "Promijeni kategoriju");
define("_AM_NW_MODIFY", "Promjeni");
define("_AM_NW_PARENTTOPIC", "Roditeljska kategorija");
define("_AM_NW_SAVECHANGE", "Spremi promjene");
define("_AM_NW_DEL", "Obriši");
define("_AM_NW_CANCEL", "Poništi");
define("_AM_NW_WAYSYWTDTTAL", "PAŽNJA: Da li ste sigurni da želite obrisati ovu Temu i SVE njezine objave i komentare?");


// Added in Beta6
define("_AM_NW_TOPICSMNGR", "Menadžer kategorija");
define("_AM_NW_PEARTICLES", "Napiši/Uredi članke");
define("_AM_NW_NEWSUB", "Nove prijave");
define("_AM_NW_POSTED", "Napisano");
define("_AM_NW_GENERALCONF", "Opće postavke");

// Added in RC2
define("_AM_NW_TOPICDISPLAY", "Prikaži sliku kategorije?");
define("_AM_NW_TOPICALIGN", "Pozicija");
define("_AM_NW_RIGHT", "Desno");
define("_AM_NW_LEFT", "Lijevo");

define("_AM_NW_EXPARTS", "Zastarjeli članci");
define("_AM_NW_EXPIRED", "Zastarjelo");
define("_AM_NW_CHANGEEXPDATETIME", "Promjeni datum/vrijeme zastare");
define("_AM_NW_SETEXPDATETIME", "Postavi datum/vrijeme zastare");
define("_AM_NW_NOWSETEXPTIME", "Sad je postavljena na: %s");

// Added in RC3
define("_AM_NW_ERRORTOPICNAME", "Moraš unesti ime kategorije!");
define("_AM_NW_EMPTYNODELETE", "Nema ničega za brisanje!");

// Added 240304 (Mithrandir)
define("_AM_NW_GROUPPERM", "Prijavi/Odobri/Pregledaj Prava");
define("_AM_NW_SELFILE", "Izaberi dokument za upload");

// Added by Hervé
define("_AM_NW_UPLOAD_DBERROR_SAVE", "Greška pri dodavanju dokumenta objavi");
define("_AM_NW_UPLOAD_ERROR", "Greška pri uploadanju datoteke");
define("_AM_NW_UPLOAD_ATTACHFILE", "Dodane datoteke");
define("_AM_NW_APPROVEFORM", "Odobri prava");
define("_AM_NW_SUBMITFORM", "Prijavi prava");
define("_AM_NW_VIEWFORM", "Pregledaj prava");
define("_AM_NW_APPROVEFORM_DESC", "Izaberite, tko može odobriti novosti");
define("_AM_NW_SUBMITFORM_DESC", "Izaberite, tko može prijaviti novosti");
define("_AM_NW_VIEWFORM_DESC", "izaberite, tko može pregledavati koje novosti");
define("_AM_NW_DELETE_SELFILES", "Obriši selektirane datoteke");
define("_AM_NW_TOPIC_PICTURE", "Upload slika");
define("_AM_NW_UPLOAD_WARNING", "<B>Pažnja, ne zaboravite primjeniti prava na zapis za sljedeću mapu : %s</B>");

define("_AM_NW_UPGRADECOMPLETE", "Nadogranja završena");
define("_AM_NW_UPDATEMODULE", "Nadogradnja modulskih predložaka i blokova ");
define("_AM_NW_UPGRADEFAILED", "Nadogradnja nije uspjela");
define("_AM_NW_UPGRADE", "Nadogradi");
define("_AM_NW_ADD_TOPIC", "Dodaj kategoriju");
define("_AM_NW_ADD_TOPIC_ERROR", "Greška, kategorija već postoji!");
define("_AM_NW_ADD_TOPIC_ERROR1", "GREŠKA: Ne možete izabrati ovu kategoriju za roditeljsku temu!");
define("_AM_NW_SUB_MENU", "Objavi ovu temu kao podmeni");
define("_AM_NW_SUB_MENU_YESNO", "Pod-meni?");
define("_AM_NW_HITS", "Pričitano");
define("_AM_NW_CREATED", "Stvoreno");

define("_AM_NW_TOPIC_DESCR", "Opis kategorije");
define("_AM_NW_USERS_LIST", "Lista korisnika");
define("_AM_NW_PUBLISH_FRONTPAGE", "Objavi na početnoj stranici?");
define("_AM_NW_UPGRADEFAILED1", "Ne može se stvoriti tablica stories_files");
define("_AM_NW_UPGRADEFAILED2", "Ne može se promjeniti dužina naslova teme");
define("_AM_NW_UPGRADEFAILED21", "Ne može se dodati polje u topics tablicu");
define("_AM_NW_UPGRADEFAILED3", "Ne može se stvoriti tablica stories_votedata");
define("_AM_NW_UPGRADEFAILED4", "Ne mogu se stvoriti dva polja 'rating' i 'votes' za 'story' tablicu");
define("_AM_NW_UPGRADEFAILED0", "Molimo zapišite poruku i probajte ispraviti problem sa phpMyadmin i sql definicijske datoteke dostupne u 'sql' mapi news modula");
define("_AM_NW_UPGR_ACCESS_ERROR", "Greška, da bi pokrenuli skriptu za nadogradnju, morate biti administrator za ovaj modul");
define("_AM_NW_PRUNE_BEFORE", "Smanji objave koje su bilo objavljene prije");
define("_AM_NW_PRUNE_EXPIREDONLY", "Obriši samo objave koje su zastarjele");
define("_AM_NW_PRUNE_CONFIRM", "Pozor, zauvijek ćete obrisati objave koje su objavljene prije %s (ova se akcija ne može poništiti). Obuhvaćeno je %s objava.<br />Jesi li siguran ?");
define("_AM_NW_PRUNE_TOPICS", "Ograniči na sljedeće kategorije");
define("_AM_NW_PRUNENEWS", "Smanji novosti");
define("_AM_NW_EXPORT_NEWS", "Izvoz novosti (u XML)");
define("_AM_NW_EXPORT_NOTHING", "Oprostite ali nema ništa za izvoz, provjerite svoje kriterije");
define("_AM_NW_PRUNE_DELETED", "%d novosti su izbrisane");
define("_AM_NW_PERM_WARNING", "<h2>Pozor, imate 3 obrazca pa tako imate i 3 tipke za prihvat</h2>");
define("_AM_NW_EXPORT_BETWEEN", "Izvezi novosti objavljene između");
define("_AM_NW_EXPORT_AND", " i ");
define("_AM_NW_EXPORT_PRUNE_DSC", "Ako ništa ne označite onda će sve kategorije biti korištene<br/> inaće će samo označene kategorije biti korištene");
define("_AM_NW_EXPORT_INCTOPICS", "Uključi definicije kategorija?");
define("_AM_NW_EXPORT_ERROR", "Dogodila se greška pri stvaranju datoteke %s. Operacija je stopirana.");
define("_AM_NW_EXPORT_READY", "Vaš xml izvozna datoteka je spremna za download. <br /><a href='%s'>Kliknite na link da bi je downloadali</a>.<br />Ne zaboravite <a href='%s'>izbrisati je</a> kad jednom završite.");
define("_AM_NW_RSS_URL", "URL RSS podataka");
define("_AM_NW_NEWSLETTER", "Novine");
define("_AM_NW_NEWSLETTER_BETWEEN", "Izabir novosti objavljenih između");
define("_AM_NW_NEWSLETTER_READY", "Vaša datoteka as novostima je spremna za download. <br /><a href='%s'>Kliknite na ovaj link da bi je downloadali</a>.<br />Ne zaboravite da <a href='%s'>je obrišete</a> jednom kad ste gotovi.");
define("_AM_NW_DELETED_OK", "Datoteka je uspješno obrisana");
define("_AM_NW_DELETED_PB", "Došlo je do problema pri brisanju datoteke");
define("_AM_NW_STATS0", "Statistika tema");
define("_AM_NW_STATS", "Statistika");
define("_AM_NW_STATS1", "Jedinstvenih autora");
define("_AM_NW_STATS2", "Ukupno");
define("_AM_NW_STATS3", "Statistika članaka");
define("_AM_NW_STATS4", "Najčitaniji članci");
define("_AM_NW_STATS5", "Najmanje čitani članci");
define("_AM_NW_STATS6", "Članci s najvišim ocjenama");
define("_AM_NW_STATS7", "Najčitaniji autori");
define("_AM_NW_STATS8", "Autori s najvišim ocjenama");
define("_AM_NW_STATS9", "Najveći objavljivaći");
define("_AM_NW_STATS10", "Statistika autora");
define("_AM_NW_STATS11", "Prebrojavanje članaka");
define("_AM_NW_HELP", "Pomoć");
define("_AM_NW_MODULEADMIN", "Administrator modula");
define("_AM_NW_GENERALSET", "Postavke modula" );
define("_AM_NW_GOTOMOD", "Idi na modul");
define("_AM_NW_NOTHING", "Oprostite ali nema ništa za download, provjerite svoje kriterije !");
define("_AM_NW_NOTHING_PRUNE", "Oprostite ali nema novosti za smanjivanje, provjerite svoje kriterije !");
define("_AM_NW_TOPIC_COLOR", "Boja kategorije");
define("_AM_NW_COLOR", "Boja");
define("_AM_NW_REMOVE_BR", "Pretvori html &lt;br&gt; tag u novu liniju ?");
// Added in 1.3 RC2
define("_AM_NW_PLEASE_UPGRADE", "<a href='upgrade.php'><font color='#FF0000'>Molim nadogradite modul !</font></a>");

// Added in verisn 1.50
define("_AM_NW_NEWSLETTER_HEADER", "Zaglavlje");
define("_AM_NW_NEWSLETTER_FOOTER", "Podnožje");
define("_AM_NW_NEWSLETTER_HTML_TAGS", "Izbaci html tagove ?");
define("_AM_NW_VERIFY_TABLES", "Održavanje tablica");
define("_AM_NW_METAGEN", "Metagen");
define("_AM_NW_METAGEN_DESC", "Metagen je sustav koji vam pomaže da se vaša stranica molje indeksira kod tražilica.<br />Osim ako sami niste upisali meta ključne riječi i meta opise, modul će ih automatski stvoriti.");
define("_AM_NW_BLACKLIST", "Crna lista");
define("_AM_NW_BLACKLIST_DESC", "Riječi na ovoj listi neće se koristiti kod stvaranja meta ključnih riječi");
define("_AM_NW_BLACKLIST_ADD", "Dodaj");
define("_AM_NW_BLACKLIST_ADD_DSC", "Upišite riječi da bi ih dodali na listu<br />(jedna riječ po liniji)");
define("_AM_NW_META_KEYWORDS_CNT", "Maksimalni broj meta ključnih riječi za auto stvaranje");
define("_AM_NW_META_KEYWORDS_ORDER", "Redoslijed ključnih riječi");
define("_AM_NW_META_KEYWORDS_INTEXT", "Stvori ih po redusljedu kako dolaze u tekstu");
define("_AM_NW_META_KEYWORDS_FREQ1", "Po broju korištenja");
define("_AM_NW_META_KEYWORDS_FREQ2", "Suprotno od najčešće korištenih");

// Added in version 1.67 Beta
define("_AM_NW_SUBPREFIX", "Pod-prefiks");

define("_AM_NW_CLONER", "Upravitelj kloniranja");
define("_AM_NW_CLONER_CLONES", "Klonovi");
define("_AM_NW_CLONER_ADD", "Dodaj klon");
define("_AM_NW_CLONER_ID", "ID");
define("_AM_NW_CLONER_NAME", "Ime");
define("_AM_NW_CLONER_DIRFOL", "Mapa/Folder");
define("_AM_NW_CLONER_VERSION", "Inačica");

define("_AM_NW_CLONER_NEWNAME", "Novo ime modula");
define("_AM_NW_CLONER_NEWNAMEDESC", "Ovo će također utjecati na stvaranje mape za novi modul. <br /> Velika/mala slova i razmaci će biti ignorirana i automatski ispravljena. <br /> npr. novo ime = <b>Knjiznica</b> nova mapa  = <b>knjiznica</b>, <br /> novo ime <b>Moja knjiznica</b> nova mapa = <b>mojaknjiznica</b>. <br /><br /> Početni modul je: <font color='#008400'><b> %s </b></font><br />");
define("_AM_NW_CLONER_NEWNAMELABEL", "Novi modul:");

define("_AM_NW_CLONER_DIREXISTS", "Mapa/Folder '%s' već postoji!!");
define("_AM_NW_CLONER_CREATED", "Modul '%s' je ispravno kloniran!!");
define("_AM_NW_CLONER_UPRADED", "Modul '%s' se upravo ispravno klonirao!!");
define("_AM_NW_CLONER_NOMODULEID", "ID modula nije postavljen!"); 

define("_AM_NW_CLONER_UPDATE", "Ažuriraj");
define("_AM_NW_CLONER_INSTALL", "Instaliraj");
define("_AM_NW_CLONER_UNINSTALL", "Deinstaliraj");
define("_AM_NW_CLONER_ACTION_INSTALL", "Instaliraj/deinstaliraj"); 

define("_AM_NW_CLONER_IMPORTNEWS", "Uvezi originalne podatke News modula");
define("_AM_NW_CLONER_IMPORTNEWSDESC1", "Originalni News modul postoji! Uvezi sad podatke?");
define("_AM_NW_CLONER_IMPORTNEWSDESC2", "Ova tipka za uvoz se pojavljuje jedino ako je x"."Modul news tablica priča prazna. <br />
                                         Ako ste dodali priču prije uvoza iz originalnog <br />
                                         modula News morat ćete deinstalirati/ponovo instalirati x"."News. <br />
                                         Ako ste već uvezli podatke originalnog News modula, ostavite tako .");
define("_AM_NW_CLONER_IMPORTNEWSSUB", "Uvoz");
define("_AM_NW_CLONER_NEWSIMPORTED", "Podaci originalnog News modula su ispravno uvezeni.");

// Added in version 1.68 Beta
define("_AM_NW_DESCRIPTION", "<H3>x"."News je modul novosti koji se može klonirati</H3> 
							  Gdje korisnici mogu objavljivati novosti/komentare. Modul se može klonirati kako bi omogućio jednu jedinu metodu rada za više različitik zadaća. Uz ostalo može poslužiti za informacije, linkove i više uz njegove blokove, teme i postavke.");

// Added in version 1.68 RC1
define("_AM_NW_CLONER_CLONEDELETED", "'%s' Klon je uspješno izbrisan.");
define("_AM_NW_CLONER_CLONEDELETEDERR", "'%s' klon se ne može izbrisati - provjerite prava.");
define("_AM_NW_CLONER_CLONEUPGRADED", "Ažuriran");
define("_AM_NW_CLONER_UPGRADEFORCE", "Prisili ažuriranje");
define("_AM_NW_CLONER_CLONEDELETION", "Brisanje klona");
define("_AM_NW_CLONER_SUREDELETE", "Da li ste sigurni da želite izbrisati <font color='#000000'>'%s'</font> klon?<br />");
define("_AM_NW_CLONER_CLONEID", "ID klona je postavljen!");

// Added in version 1.68 RC2
define("_AM_NW_INDEX", "Popis"); 

// Added in version 1.68 RC3
define("_AM_NW_DOLINEBREAK", "Omogući prijelom linija");
define("_AM_NW_TOPICS","Kategorije");

// Added in version 1.71
define("_AM_NW_IMAGE_ROWS", "Broj redaka prikaza slika");
define("_AM_NW_PDF_ROWS", "Broj redaka prikaza PDFa");
?>