<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","De Database is succesvol bijgewerkt!");
define("_AM_CONFIG","Nieuws Configuratie");
define("_AM_AUTOARTICLES","Geautomatiseerde artikelen"); //Automated Articles
define("_AM_STORYID","Artikel ID");
define("_AM_TITLE","Titel");
define("_AM_TOPIC","Categorie"); //Topic
define("_AM_POSTER","Auteur");
define("_AM_PROGRAMMED","Ingestelde Datum/Tijd"); //Programmed Date/Time
define("_AM_ACTION","Actie");
define("_AM_EDIT","Bewerk");
define("_AM_DELETE","Verwijder");
define("_AM_LAST10ARTS","Laatste %d Artikelen");
define("_AM_PUBLISHED","Gepubliceerd"); // Published Date
define("_AM_GO","Ga!");
define("_AM_EDITARTICLE","Bewerk artikel");
define("_AM_POSTNEWARTICLE","Post Nieuw Artikel");
define("_AM_ARTPUBLISHED","Je nieuwsartikel is gepubliceerd!");
define("_AM_HELLO","Dag %s,");
define("_AM_YOURARTPUB","Het door jou ingezonden nieuwsartikel is gepubliceerd.");
define("_AM_TITLEC","Titel: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Gepubliceerd: ");
define("_AM_RUSUREDEL","Weet je zeker dat je dit nieuwsartikel met al haar daarop gegeven commenta(a)r(en) wilt verwijderen?");
define("_AM_YES","Ja");
define("_AM_NO","Nee");
define("_AM_INTROTEXT","Inleidende Tekst");
define("_AM_EXTEXT","Uitvoerige tekst");
define("_AM_ALLOWEDHTML","Toegestane HTML:");
define("_AM_DISAMILEY","Deactiveer Smiley");
define("_AM_DISHTML","Deactiveer HTML");
define("_AM_APPROVE","Goedkeuren");
define("_AM_MOVETOTOP","verplaats dit artikel naar de top"); //Move this story to top
define("_AM_CHANGEDATETIME","Wijzig de publicatie datum/tijd");
define("_AM_NOWSETTIME","Het is nu ingesteld op: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktuele tijd is: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Stel de datum/tijd van publiceren in");
define("_AM_MONTHC","Maand:");
define("_AM_DAYC","Dag:");
define("_AM_YEARC","Jaar:");
define("_AM_TIMEC","Tijd:");
define("_AM_PREVIEW","Preview");
define("_AM_SAVE","Opslaan");
define("_AM_PUBINHOME","In Home zichtbaar publiceren?"); //Publish in Home
define("_AM_ADD","Toevoegen"); //Add

//%%%%%%	Admin Module Name  Topics 	%%%%%
define("_AM_ADDMTOPIC","Voeg een HOOFD categorie toe");
define("_AM_TOPICNAME","Categorie Naam");

// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(max: 255 karakters)");
define("_AM_TOPICIMG","Categorie Afbeelding");
define("_AM_IMGNAEXLOC","naam afbeelding + extensie gelocaliseerd in %s");
define("_AM_FEXAMPLE","bijvoorbeeld: games.gif");
define("_AM_ADDSUBTOPIC","Voeg een SUB Categorie toe");
define("_AM_IN","in");
define("_AM_MODIFYTOPIC","Modificeer Categorie");
define("_AM_MODIFY","Modificeer");
define("_AM_PARENTTOPIC","Ouder Categorie");
define("_AM_SAVECHANGE","Wijzigingen opslaan");
define("_AM_DEL","Delete");
define("_AM_CANCEL","Annuleren"); //Cancel
define("_AM_WAYSYWTDTTAL","WAARSCHUWING: Weet je zeker dat je deze Categorie en al haar daarin gelegen Artikelen en Commenta(a)r(en) wilt verwijderen?");


// Added in Beta6
define("_AM_TOPICSMNGR","Categoriebeheer");
define("_AM_PEARTICLES","Post/Bewerk Artikelen");
define("_AM_NEWSUB","Nieuwe Inzendingen"); //Submissions
define("_AM_POSTED","Gepost"); //Posted
define("_AM_GENERALCONF","Algemene Instellingen"); //Configuration

// Added in RC2
define("_AM_TOPICDISPLAY","Categorie afbeelding tonen?");
define("_AM_TOPICALIGN","Positie"); //Position
define("_AM_RIGHT","Rechts");
define("_AM_LEFT","Links");

define("_AM_EXPARTS","Verlopen Artikelen"); //expired articles
define("_AM_EXPIRED","Verlopen"); //expired
define("_AM_CHANGEEXPDATETIME","Wijzig de verloopdatum/-tijd");
define("_AM_SETEXPDATETIME","Stel de verloopdatum/-tijd in");
define("_AM_NOWSETEXPTIME","Het is nu ingesteld op: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Je moet een categorienaam invoeren!"); //You must enter a topic name
define("_AM_EMPTYNODELETE", "Er valt niets te verwijderen!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', 'Inzenden/Goedkeuren/Lees Permissies'); //Submit/Approve/View Permissions
define('_AM_SELFILE','Selecteer het bestand dat u je wilt uploaden'); //Selecteer  file to upload

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE','FOUT: Kon dit artikel niet voorzien van de bijlage '); //Error while attaching file to the story
define('_AM_UPLOAD_ERROR','FOUT: Gedurende het uploaden van het bestand');
define('_AM_UPLOAD_ATTACHFILE','Bijlage(n)');
define('_AM_APPROVEFORM', 'Goedkeurings Permissies'); //Approve Permissions
define('_AM_SUBMITFORM', 'Nieuws Inzenden/Plaatsen Permissies'); //Submit Permissions
define('_AM_VIEWFORM', 'Lees Permissies'); //View Permissions
define('_AM_APPROVEFORM_DESC', 'Selecteer wie nieuws-artikelen mag Goedkeuren!');
define('_AM_SUBMITFORM_DESC', 'Selecteer wie nieuws-artikelen mag Inzenden/Plaatsen');
define('_AM_VIEWFORM_DESC', 'Selecteer wie welke Categorieën mag lezen');
define('_AM_DELETE_SELFILES', 'Verwijder de geselcteerde bestanden');
define('_AM_TOPIC_PICTURE', 'Upload afbeelding');
define('_AM_UPLOAD_WARNING', '<B>ATTENTIE, vergeet niet de juiste lees-/schrijfrechten (Chmodt) in te stellen voor de navolgende folder: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', 'Upgrade Compleet');
define('_AM_NEWS_UPDATEMODULE', 'Update module templates en blokken');
define('_AM_NEWS_UPGRADEFAILED', 'Upgrade Mislukt');
define('_AM_NEWS_UPGRADE', 'Upgrade');
define('_AM_ADD_TOPIC','Voeg een categorie toe'); //Add a topic
define('_AM_ADD_TOPIC_ERROR','Fout: Deze categorie bestaat al!');
define('_AM_ADD_TOPIC_ERROR1','ERROR: Kan deze categorie niet als ouder categorie selecteren!'); //Cannot select this topic for parent topic
define('_AM_SUB_MENU','Plaats deze Categorie zichtbaar in SUB-menu'); //Publish this topic as a sub menu
define('_AM_SUB_MENU_YESNO','In Sub-menu?');
define('_AM_HITS', 'Hits');
define('_AM_CREATED', 'Aangemaakt'); //

define('_AM_TOPIC_DESCR', "Categorie Beschrijving");
define('_AM_USERS_LIST', "Gebruikerslijst");
define('_AM_PUBLISH_FRONTPAGE', "Op nieuws Indexpagina publiceren?"); //Publish in front page

//UPGRADE Tekst
define('_AM_NEWS_UPGRADEFAILED1', 'Niet mogelijk om de tabel stories_files aan te maken');
define('_AM_NEWS_UPGRADEFAILED2', "Niet mogelijk om de lengte van de onderwerptitel aan te passen");
define('_AM_NEWS_UPGRADEFAILED21', "Niet mogelijk om nieuwe velden aan de onderwerptabel toe te voegen");
define('_AM_NEWS_UPGRADEFAILED3', "Niet mogelijk om omde tabel stories_votedata aan te maken");
define('_AM_NEWS_UPGRADEFAILED4', "Niet mogelijk om de twee velden 'cijfer' en 'stemmen' voor de 'story' tabel aan te maken");
define('_AM_NEWS_UPGRADEFAILED0', "Please note the messages and try to correct the problems with phpMyadmin and the sql definition's file available in the 'sql' folder of the news module");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"FOUT, om het upgrade script te gebruiken, moet u een admin van deze module zijn");

define('_AM_NEWS_PRUNE_BEFORE',"Prune/onderhoud artikelen die gepubliceerd voor:"); //stories that were published before
define('_AM_NEWS_PRUNE_EXPIREDONLY',"verwijder alleen verlopen artikelen");
define('_AM_NEWS_PRUNE_CONFIRM',"WAARSCHUWING: Je gaat PERMANENT artikelen verwijderen die gepubliceerd zijn voor %s (deze doorgevoerde actie kan niet worden hersteld!). Het zijn %s artikelen.<br />Weet je het zeker ?");
define('_AM_NEWS_PRUNE_TOPICS',"Geef categorieën aan"); //Limit to the following topics
define('_AM_NEWS_PRUNENEWS', 'Prune/onderhoud nieuws');
define('_AM_NEWS_EXPORT_NEWS', 'Nieuws-artikelen Exporteren');
define('_AM_NEWS_EXPORT_NOTHING', "Sorrie, maar er valt niets te exporteren. Svp controleer je criteria");
define('_AM_NEWS_PRUNE_DELETED', '%d nieuws is verwijderd');
define('_AM_NEWS_PERM_WARNING', '<h4>ATTENTIE, er zijn drie afzonderlijke permissie formulieren. De permissie-instellingen moeten per formulier verstuurd worden </h4>'); //you have 3 forms so you have 3 submit buttons
define('_AM_NEWS_EXPORT_BETWEEN', 'Exporteer nieuws gepubliceerd tussen');
define('_AM_NEWS_EXPORT_AND', ' en ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Als je geen Categorie(ën) aangeeft zal het prune/onderhoud op alle categorieën toegepast worden.<br/>In het andere geval alléén op de aangegeven categorieën.");
define('_AM_NEWS_EXPORT_INCTOPICS', 'Include Categorie Definities ?');
define('_AM_NEWS_EXPORT_ERROR', 'Error gedurende het creëeren van het bestand: %s. Operatie is gestopt.');
define('_AM_NEWS_EXPORT_READY', "Je xml export bestand is klaar om te downloaden. <br /><a href='%s'>Klik op deze link om het bestand te downloaden</a>.<br />Vergeet niet om het te <a href='%s'>verwijderen</a> zodra je klaar bent.");
define('_AM_NEWS_RSS_URL', "URL van RSS feed");
define('_AM_NEWS_NEWSLETTER', "Nieuwsbrief");
define('_AM_NEWS_NEWSLETTER_BETWEEN', 'Selecteer Nieuws gepubliceerd tussen');
define('_AM_NEWS_NEWSLETTER_READY', "Je nieuwsbrief bestand is klaar om te downloaden.<br /><a href='%s'>Klik op deze link om het bestand te downloaden</a>.<br />Vergeet niet om het te <a href='%s'>verwijderen</a> zodra je klaar bent.");
define('_AM_NEWS_DELETED_OK',"Bestand is succesvol verwijderd");
define('_AM_NEWS_DELETED_PB',"Er is een probleem opgetreden gedurende het verwijderen van het bestand");
define('_AM_NEWS_STATS0','Categorie Statistieken');
define('_AM_NEWS_STATS','Statistieken');
define('_AM_NEWS_STATS1','Unique Auteurs');
define('_AM_NEWS_STATS2','Totaal');
define('_AM_NEWS_STATS3','Artikel statistieken');
define('_AM_NEWS_STATS4','Meest gelezen artikelen');
define('_AM_NEWS_STATS5','Minst gelezen artikelen');
define('_AM_NEWS_STATS6','Best gewaardeerde artikelen');
define('_AM_NEWS_STATS7','Meest gelezen auteurs');
define('_AM_NEWS_STATS8','Best gewaardeerde auteurs');
define('_AM_NEWS_STATS9','Grootste contributeurs');
define('_AM_NEWS_STATS10','Auteurs statististieken');
define('_AM_NEWS_STATS11',"Artikel telling");
define('_AM_NEWS_HELP',"Help");
define("_AM_NEWS_MODULEADMIN","Module Admin");
define("_AM_NEWS_GENERALSET", "Nieuws Module Settings" );
define('_AM_NEWS_GOTOMOD','Ga naar nieuwsmodule');
define('_AM_NEWS_NOTHING',"Sorrie, maar er valt niets te downloaden. Veririeër je criteria !");
define('_AM_NEWS_NOTHING_PRUNE',"Sorrie, maar er valt geen nieuws te prunen/onderhouden. Verifieër je criteria  !");
define('_AM_NEWS_TOPIC_COLOR',"Categorie Kleur");
define('_AM_NEWS_COLOR',"Kleur");
define('_AM_NEWS_REMOVE_BR',"Converteer de html &lt;br&gt; tag naar een nieuwe regel  ?"); //to a new line
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Gelieve de module te upgraden!</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Koptekst");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Voettekst");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "Verwijder html tags ?");
define('_AM_NEWS_VERIFY_TABLES','Tabellen onderhouden');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen is a system that can help you to have your page best indexed by search engines.<br />Except if you type meta keywords and meta descriptions yourself, the module will automatically create them.");
define('_AM_NEWS_BLACKLIST',"Zwarte lijst");
define('_AM_NEWS_BLACKLIST_DESC',"The words in this list will not be used to create meta keywords");
define('_AM_NEWS_BLACKLIST_ADD',"Toevoegen");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Enter words to add in the list<br />(one word by line)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Maximum count of meta keywords to auto-generate");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Keywords order");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Create them in the order they appear in the text");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Words frequency's order");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Reverse order of words frequency");
// About.php
define("_AM_NEWS_ABOUT_RELEASEDATE",        "Verschijningsdatum: ");
define("_AM_NEWS_ABOUT_AUTHOR",                   "Auteur: ");
define("_AM_NEWS_ABOUT_CREDITS",                  "Credits: ");
define("_AM_NEWS_ABOUT_LICENSE",                  "Licentie: ");
define("_AM_NEWS_ABOUT_MODULE_STATUS",            "Status: ");
define("_AM_NEWS_ABOUT_WEBSITE",                  "Website: ");
define("_AM_NEWS_ABOUT_AUTHOR_NAME",              "Auteur naam: ");
define("_AM_NEWS_ABOUT_CHANGELOG",                "Wijzigingsbeheer");
define("_AM_NEWS_ABOUT_MODULE_INFO",              "Module Informatie");
define("_AM_NEWS_ABOUT_AUTHOR_INFO",              "Auteur Informatie");
define("_AM_NEWS_ABOUT_DESCRIPTION",          "Omschrijving: ");
?>