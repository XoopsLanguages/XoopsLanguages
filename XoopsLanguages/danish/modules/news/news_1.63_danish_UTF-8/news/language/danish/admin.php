<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define('_AM_DBUPDATED','Databasen er blevet opdateret!');
define('_AM_CONFIG','Indstillinger');
define('_AM_AUTOARTICLES','Automatiske artikler');
define('_AM_STORYID','Nyheds-ID');
define('_AM_TITLE','Titel');
define('_AM_TOPIC','Emne');
define('_AM_POSTER','Skribent');
define('_AM_PROGRAMMED','Programmeret dato/tid');
define('_AM_ACTION','Handling');
define('_AM_EDIT','Redigér');
define('_AM_DELETE','Slet');
define('_AM_LAST10ARTS','Sidste 10 artikler');
define('_AM_PUBLISHED','Udgivet'); // Published Date
define('_AM_GO','Acceptér!');
define('_AM_EDITARTICLE','Redigér artikel');
define('_AM_POSTNEWARTICLE','Indgiv ny artikel');
define('_AM_ARTPUBLISHED','Din artikel er blevet udgivet!');
define('_AM_HELLO','Hej %s,');
define('_AM_YOURARTPUB','Den artikel du indsendte til vores hjemmeside er blevet udgivet.');
define('_AM_TITLEC','Titel: ');
define('_AM_URLC','URL: ');
define('_AM_PUBLISHEDC','Udgivet: ');
define('_AM_RUSUREDEL','Er du sikker på, at du ønsker at slette denne artikel og alle tilhørende kommentarer?');
define('_AM_YES','Ja');
define('_AM_NO','Nej');
define('_AM_INTROTEXT','Introduktion (\'trompet\')');
define('_AM_EXTEXT','Hovedtekst (\'brødtekst\')');
define('_AM_ALLOWEDHTML','Tilladt HTML:');
define('_AM_DISAMILEY','Slå Smilies fra');
define('_AM_DISHTML','Slå HTML fra');
define('_AM_APPROVE','Godkend');
define('_AM_MOVETOTOP','Flyt denne artikel til toppen');
define('_AM_CHANGEDATETIME','Ændre tidspunkt for udgivelsen');
define('_AM_NOWSETTIME','Udgivelsestidspunktet er nu: %s'); // %s is datetime of publish
define('_AM_CURRENTTIME','Aktuel tid er: %s');  // %s is the current datetime
define('_AM_SETDATETIME','Indstil tidspunktet for udgivelse');
define('_AM_MONTHC','Måned:');
define('_AM_DAYC','Dag:');
define('_AM_YEARC','År:');
define('_AM_TIMEC','Klokkeslet:');
define('_AM_PREVIEW','Se prøve');
define('_AM_SAVE','Gem');
define('_AM_PUBINHOME','Udgiv i \'Home\'?');
define('_AM_ADD','Tilføj');

//%%%%%%	Admin Module Name  Topics 	%%%%%

define('_AM_ADDMTOPIC','Tilføj en HOVED-kategori');
define('_AM_TOPICNAME','Kategorinavn');
// Warning, changed from 40 to 255 characters.
define('_AM_MAX40CHAR','(maks: 255 tegn)');
define('_AM_TOPICIMG','Kategoriikon');
define('_AM_IMGNAEXLOC','kategoriikon + extension placeret i %s');
define('_AM_FEXAMPLE','for eksempel: games.gif');
define('_AM_ADDSUBTOPIC','Tilføj en UNDER-kategori');
define('_AM_IN','i');
define('_AM_MODIFYTOPIC','Redigér kategori');
define('_AM_MODIFY','Redigér');
define('_AM_PARENTTOPIC','Overliggende kategori');
define('_AM_SAVECHANGE','Gem ændringer');
define('_AM_DEL','Slet');
define('_AM_CANCEL','Fortryd');
define('_AM_WAYSYWTDTTAL','ADVARSEL: Er du sikker på, at du ønsker at slette denne kategori og ALLE tilhørende artikler og kommentarer?');


// Added in Beta6
define('_AM_TOPICSMNGR','Kategori-kontrol');
define('_AM_PEARTICLES','Skriv/Redigér artikler');
define('_AM_NEWSUB','Nye indlæg');
define('_AM_POSTED','Skrevet');
define('_AM_GENERALCONF','Generelle indstillinger');

// Added in RC2
define('_AM_TOPICDISPLAY','Vis kategoriikon?');
define('_AM_TOPICALIGN','Position');
define('_AM_RIGHT','Højre');
define('_AM_LEFT','Venstre');

define('_AM_EXPARTS','Udløbne artikler');
define('_AM_EXPIRED','Udløbet');
define('_AM_CHANGEEXPDATETIME','Redigér udløbstidspunktet');
define('_AM_SETEXPDATETIME','Indstil udløbstidspunktet');
define('_AM_NOWSETEXPTIME','Det er nu sat til: %s');

// Added in RC3
define('_AM_ERRORTOPICNAME','Du skal indtaste en kategori');
define('_AM_EMPTYNODELETE','Der er ikke noget at slette!');

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM','Indgiv/Godkend/Vis rettigheder');
define('_AM_SELFILE','Vælg fil der skal uploades');

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE','Kunne ikke vedhæfte filen til artiklen');
define('_AM_UPLOAD_ERROR','Kunne ikke uploade filen');
define('_AM_UPLOAD_ATTACHFILE','Vedhæftede fil(er)');
define('_AM_APPROVEFORM','Rettighed til at godkende');
define('_AM_SUBMITFORM','Rettighed til at indsende');
define('_AM_VIEWFORM','Rettighed til at se');
define('_AM_APPROVEFORM_DESC','Vælg, hvem der kan godkende nyheder');
define('_AM_SUBMITFORM_DESC','Vælg, hvem der kan indsende nyheder');
define('_AM_VIEWFORM_DESC','Vælg, hvem der kan se emner');
define('_AM_DELETE_SELFILES','Slet valgte filer');
define('_AM_TOPIC_PICTURE','Upload billed');
define('_AM_UPLOAD_WARNING','<B> Advarsel, husk at sætte skrive rettigheder på følgende mappe: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE','Opgradering udført');
define('_AM_NEWS_UPDATEMODULE','Opgrader modulets templates og blocks');
define('_AM_NEWS_UPGRADEFAILED','Opgraderein fejlet');
define('_AM_NEWS_UPGRADE','Opgrader');
define('_AM_ADD_TOPIC','Tilføj kategori');
define('_AM_ADD_TOPIC_ERROR','Fejl, kategorien findes allerede!');
define('_AM_ADD_TOPIC_ERROR1','Fejl: Kan ikke benytte denne kategori som øverste kategori');
define('_AM_SUB_MENU','Udgiv denne kategori som en under kategori');
define('_AM_SUB_MENU_YESNO','Underkategori?');
define('_AM_HITS','Hits');
define('_AM_CREATED','Oprettet');

define('_AM_TOPIC_DESCR','Kategori beskrivelse');
define('_AM_USERS_LIST','Bruger liste');
define('_AM_PUBLISH_FRONTPAGE','Udgiv på forside ?');
define('_AM_NEWS_UPGRADEFAILED1','Ikke muligt at oprette tabellen stories_files');
define('_AM_NEWS_UPGRADEFAILED2','Ikke muligt at ændre længden på kategoriens titel');
define('_AM_NEWS_UPGRADEFAILED21','Ikke muligt at tilføje nye felter til kategorien');
define('_AM_NEWS_UPGRADEFAILED3','Ikke muligt at oprette tabellen "stories_votedata"');
define('_AM_NEWS_UPGRADEFAILED4','Ikke muligt at oprette felterne "rating" og "votes" til "story" tabellen');
define('_AM_NEWS_UPGRADEFAILED0','Bemærk beskeden og prøv at rette problemet i phpmyadmin og i sql definitions filen, som ligger i mappen sql i news-biblioteket');
define('_AM_NEWS_UPGR_ACCESS_ERROR','Fejl ved opgraderingsscript, du skal være logget ind som administrator.');
define('_AM_NEWS_PRUNE_BEFORE','Fjern historier der har været udgivet før den');
define('_AM_NEWS_PRUNE_EXPIREDONLY','Fjern kun historier der er udløbet');
define('_AM_NEWS_PRUNE_CONFIRM','Advarsel! Du er ved at slette alle historier, der er udgivet før den %s. Dette er i alt %s historier.<br /> Er du helt sikker på at du vil det ? Handlingen kan ikke fortrydes!');
define('_AM_NEWS_PRUNE_TOPICS','Begræns til følgende kategorier');
define('_AM_NEWS_PRUNENEWS','Fjern nyheder');
define('_AM_NEWS_EXPORT_NEWS','Eksporter nyheder');
define('_AM_NEWS_EXPORT_NOTHING','Der er desværre ikke noget at eksporterer, check dine kriterier');
define('_AM_NEWS_PRUNE_DELETED','%d nyheder er slettet');
define('_AM_NEWS_PERM_WARNING','<h2>Advaresel: Du har 3 forms så du har 3 godkend knapper</h2>');
define('_AM_NEWS_EXPORT_BETWEEN','Eksporter nyheder udgivet mellem');
define('_AM_NEWS_EXPORT_AND','og');
define('_AM_NEWS_EXPORT_PRUNE_DSC','Hvis du ikke angiver noget vil alle kategorierne blive benyttet <br/> ellers vil kun de angivne kategorier blive benyttet');
define('_AM_NEWS_EXPORT_INCTOPICS','Benyt også kategori definitioner?');
define('_AM_NEWS_EXPORT_ERROR','Fejl ved oprettelsen af filen %s. Handlingen er afbrudt');
define('_AM_NEWS_EXPORT_READY','Din xml eksportfil er klar til download. <br /> <a href=\'%s\'>klik her for download</a>.<br />husk at <a href=\'%s\'>fjerne filen</a> når du har hentet den.');
define('_AM_NEWS_RSS_URL','URL til RSS feed');
define('_AM_NEWS_NEWSLETTER','Nyhedsbrev');
define('_AM_NEWS_NEWSLETTER_BETWEEN','Vælg nyheder udgivet mellem');
define('_AM_NEWS_NEWSLETTER_READY','Din fil med nyhedsbrev er klar til download. <br /><a href=\'%s\'>Klik her for at downloade den</a>.<br />husk at <a href=\'%s\'>fjerne filen</a>når du er færdig');
define('_AM_NEWS_DELETED_OK','Fil slettet');
define('_AM_NEWS_DELETED_PB','Der var et problem med at slette filen');
define('_AM_NEWS_STATS0','Kategori statistik');
define('_AM_NEWS_STATS','Statistik');
define('_AM_NEWS_STATS1','Unikke forfattere');
define('_AM_NEWS_STATS2','Total');
define('_AM_NEWS_STATS3','Artikel statistik');
define('_AM_NEWS_STATS4','Mest læste artikel');
define('_AM_NEWS_STATS5','Mindst læste artikel');
define('_AM_NEWS_STATS6','Bedst bedømte artikel');
define('_AM_NEWS_STATS7','Mest læste forfatter');
define('_AM_NEWS_STATS8','Bedst bedømte forfatter');
define('_AM_NEWS_STATS9','Bedste bidragsyder');
define('_AM_NEWS_STATS10','Forfatter statistik');
define('_AM_NEWS_STATS11','Antal artikler');
define('_AM_NEWS_HELP','Hjælp');
define('_AM_NEWS_MODULEADMIN','Modul administration');
define('_AM_NEWS_GENERALSET','Modul indstillinger');
define('_AM_NEWS_GOTOMOD','Gå til modul');
define('_AM_NEWS_NOTHING','Der var ikke noget at downloade, check dine kriterier !');
define('_AM_NEWS_NOTHING_PRUNE','Der var ikke nogle nyheder at slette, check dine kriterier !');
define('_AM_NEWS_TOPIC_COLOR','Kategori farve');
define('_AM_NEWS_COLOR','Farve');
define('_AM_NEWS_REMOVE_BR','Skift html  <br /> kode til en ny linie ?');
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE','<a href=\'upgrade.php\'><font color=\'#FF0000\'>Opdater dit modul!</font></a>');

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER','Overskrift');
define('_AM_NEWS_NEWSLETTER_FOOTER','Sidefod');
define('_AM_NEWS_NEWSLETTER_HTML_TAGS','Fjern HTML koder ?');
define('_AM_NEWS_VERIFY_TABLES','Behold tables');
define('_AM_NEWS_METAGEN','Metagen');
define('_AM_NEWS_METAGEN_DESC','Metagen er et system der hjælper dig til at få din side indexeret bedst i søgemaskiner.<br />Hvis du ikke selv taster meta keywords, meta descriptions selv, så vil modulet selv oprette dem.');
define('_AM_NEWS_BLACKLIST','Blacklist');
define('_AM_NEWS_BLACKLIST_DESC','Ord i denne liste vil ikke blive benyttet i oprettelsen af meta keywords');
define('_AM_NEWS_BLACKLIST_ADD','Tilføj');
define('_AM_NEWS_BLACKLIST_ADD_DSC','Indtast ord som skal tilføjes<br />(Ét ord pr. linie)');
define('_AM_NEWS_META_KEYWORDS_CNT','Maksimalt antal meta keywords i autogenerering');
define('_AM_NEWS_META_KEYWORDS_ORDER','Keywords rækkefølge');
define('_AM_NEWS_META_KEYWORDS_INTEXT','Opret dem i den rækkefølge som de fremkommer i teksten');
define('_AM_NEWS_META_KEYWORDS_FREQ1','Ords hyppighed rækkefølge');
define('_AM_NEWS_META_KEYWORDS_FREQ2','Omvendt rækkefølge af ords hyppighed');
?>