<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Artikel 	%%%%%
define("_AMS_AM_DBUPDATED","Baza podataka je uspje&scaron;no aktulizirana!");
define("_AMS_AM_CONFIG","Konfiguracija");
define("_AMS_AM_AUTOARTICLES","Automatski &#268;lanci");
define("_AMS_AM_STORYID","&#268;lanak ID");
define("_AMS_AM_TITLE","Naslov");
define("_AMS_AM_TOPIC","Tema");
define("_AMS_AM_ARTICLE","&#268;lanak");
define("_AMS_AM_POSTER","by");
define("_AMS_AM_PROGRAMMED","Programirani Datum/Vrijeme");
define("_AMS_AM_ACTION","Akcija");
define("_AMS_AM_EDIT","Uredi");
define("_AMS_AM_DELETE","Izbri&scaron;i");
define("_AMS_AM_LAST10ARTS","Zadnji %d &#268;lanak");
define("_AMS_AM_PUBLISHED","Objavljeno"); // Veröffentlicht Datum
define("_AMS_AM_GO","Idi!");
define("_AMS_AM_EDITARTICLE","Uredi &#268;lanak");
define("_AMS_AM_POSTNEWARTICLE","Napi&scaron;i novi &#268;lanak");
define("_AMS_AM_ARTPUBLISHED","Tvoj &#268;lanak je objavljen!");
define("_AMS_AM_HELLO","Halo %s,");
define("_AMS_AM_YOURARTPUB","tvoj poslati &#268;lanak je objavljen.");
define("_AMS_AM_TITLEC","Nslov: ");
define("_AMS_AM_URLC","URL: ");
define("_AMS_AM_PUBLISHEDC","Objavljen: ");
define("_AMS_AM_RUSUREDEL","Jesi li siguran, da ovaj &#268;lanak i sve komentare u njemu treba izbrisati?");
define("_AMS_AM_YES","Da");
define("_AMS_AM_NO","Ne");
define("_AMS_AM_INTROTEXT","Uvodni tekst");
define("_AMS_AM_EXTEXT","Dodatni tekst");
define("_AMS_AM_ALLOWEDHTML","Dozvoli HTML:");
define("_AMS_AM_DISAMILEY","Isklju&#269;i Smiley");
define("_AMS_AM_DISHTML","Isklju&#269;i HTML");
define("_AMS_AM_APPROVE","Odobravam");
define("_AMS_AM_MOVETOTOP","Ovaj &#268;lanak prebaci gore");
define("_AMS_AM_CHANGEDATETIME","Datum/Vrijeme objavljivanja promjeni");
define("_AMS_AM_NOWSETTIME","Sada je postavljeno na: %s"); // %s is datetime of publish
define("_AMS_AM_CURRENTTIME","Trenutno vrijeme je: %s");  // %s is the current datetime
define("_AMS_AM_SETDATETIME","Odredi Datum/Vrijeme objavljivanja");
define("_AMS_AM_MONTHC","Mjesec:");
define("_AMS_AM_DAYC","Dan:");
define("_AMS_AM_YEARC","Godina:");
define("_AMS_AM_TIMEC","Vrijeme:");
define("_AMS_AM_PREVIEW","Pregled");
define("_AMS_AM_SAVE","Memori&scaron;i");
define("_AMS_AM_PUBINHOME","Na start stranici objavi?");
define("_AMS_AM_ADD","Dodaj");

//%%%%%%	Admin Module Name  Themas 	%%%%%

define("_AMS_AM_ADDMTOPIC","Glavnu-Temu dodaj");
define("_AMS_AM_TOPICNAME","Teme naziv");
define("_AMS_AM_MAX40CHAR","(max: 40 oznaka)");
define("_AMS_AM_TOPICIMG","Teme slika");
define("_AMS_AM_IMGNAEXLOC","Naziv slike + Dodatak je pod %s");
define("_AMS_AM_FEXAMPLE","npr: games.gif");
define("_AMS_AM_ADDSUBTOPIC","SUB-Temu dodaj");
define("_AMS_AM_IN","u");
define("_AMS_AM_MODIFYTOPIC","Temu promjeni");
define("_AMS_AM_MODIFY","Promjeni");
define("_AMS_AM_PARENTTOPIC","Glavna tema");
define("_AMS_AM_SAVECHANGE","Memori&scaron;i promjenu");
define("_AMS_AM_DEL","Izbri&scaron;i");
define("_AMS_AM_CANCEL","Odustani");
define("_AMS_AM_WAYSYWTDTTAL","Upozorenje: Jesi li siguran, da ovu temu i sve u njoj njene vijesti i komentare treba izbrisati?");


// Added in Beta6
define("_AMS_AM_TOPICSMNGR","Menadzer Tema");
define("_AMS_AM_PEARTICLES","Menadzer &#268;lanaka");
define("_AMS_AM_NEWSUB","Nova vijest");
define("_AMS_AM_POSTED","Poslao");
define("_AMS_AM_GENERALCONF","Generalna konfiguracija");

// Added in RC2
define("_AMS_AM_TOPICDISPLAY","Prika&#382;i sliku?");
define("_AMS_AM_TOPICALIGN","Pozicija");
define("_AMS_AM_RIGHT","Desno");
define("_AMS_AM_LEFT","Lijevo");

define("_AMS_AM_EXPARTS","Istekli &#268;lanci");
define("_AMS_AM_EXPIRED","Isteklo");
define("_AMS_AM_CHANGEEXPDATETIME","Datum/Vrijeme isticanja promjeni");
define("_AMS_AM_SETEXPDATETIME","Odredi Datum/Vrijeme isticanja");
define("_AMS_AM_NOWSETEXPTIME","Sada je postavljeno do: %s");

// Added in RC3
define("_AMS_AM_ERRORTOPICNAME","Mora&scaron; Temi naslov napisati!");
define("_AMS_AM_EMPTYNODELETE","Nema ni&scaron;ta za izbrisati!");

// Added 240304 (Mithrandir)
define("_AMS_AM_GROUPPERM","Odobrenja");
define("_AMS_AM_SELFILE","Izaberi podatak");

// Added Novasmart in 2.42
define("_MULTIPLE_PAGE_GUIDE","Vrsta [pagebreak] se koristi za novu stranicu u &#268;lanku");

// Added by Hervé
define("_AMS_AM_UPLOAD_DBERROR_SAVE","Fehler beim anhängen der Datei zum Artikel");
define("_AMS_AM_UPLOAD_ERROR","Fehler beim hochladen der Datei");
define("_AMS_AM_UPLOAD_ATTACHFILE","Angehängte Datei(en)");
define("_AMS_AM_APPROVEFORM","Berechtigung bestätigen");
define("_AMS_AM_SUBMITFORM","Berechtigung einschicken");
define("_AMS_AM_VIEWFORM","Berechtigungen ansehen");
define("_AMS_AM_APPROVEFORM_DESC","Wähle, wer Artikel bestätigen darf");
define("_AMS_AM_SUBMITFORM_DESC","Wähle, wer Artikel einschicken darf");
define("_AMS_AM_VIEWFORM_DESC","Wähle, wer welche Themen sehen darf");
define("_AMS_AM_DELETE_SELFILES","Lösche gewählte Datei(en)");
define("_AMS_AM_TOPIC_PICTURE","Bild hochladen");
define("_AMS_AM_UPLOAD_WARNING","<B>Warnung, vergessen Sie nicht, Schreibrechte auf folgenden Ordner zu setzen : %s</B>");

define("_AMS_AM_NEWS_UPGRADECOMPLETE","Upgrade komplett");
define("_AMS_AM_NEWS_UPDATEMODULE","Aktualisiere Vorlagen und Blöcke");
define("_AMS_AM_NEWS_UPGRADEFAILED","Aktualisierung fehlgeschlagen");
define("_AMS_AM_NEWS_UPGRADE","Upgrade");
define("_AMS_AM_ADD_TOPIC","Ein Thema hinzufügen");
define("_AMS_AM_ADD_TOPIC_ERROR","Fehler, Thema existiert bereits!");
define("_AMS_AM_ADD_TOPIC_ERROR1","FEHLER: Kann dieses Thema nicht als übergeordnetes Thema auswählen!");
define("_AMS_AM_SUB_MENU","Veröffentliche dieses Thema als Sub-Menü");
define("_AMS_AM_SUB_MENU_YESNO","Sub-Menü?");
define("_AMS_AM_HITS","Treffer");
define("_AMS_AM_CREATED","Erzeugt");
define("_AMS_AM_COMMENTS","Kommentare");
define("_AMS_AM_VERSION","Version");
define("_AMS_AM_PUBLISHEDARTICLES","Veröffentlichte Artikel");
define("_AMS_AM_TOPICBANNER","Banner");
define("_AMS_AM_BANNERINHERIT","Vererbung von übergeordneter Instanz");
define("_AMS_AM_RATING","Ocjene");
define("_AMS_AM_FILTER","Filter");
define("_AMS_AM_SORTING","Opcije sortiranja");
define("_AMS_AM_SORT","Sortiraj");
define("_AMS_AM_ORDER","Redoslijed");
define("_AMS_AM_STATUS","Status");
define("_AMS_AM_OF","od");

define("_AMS_AM_MANAGEAUDIENCES","Verwalte Zielgruppen");
define("_AMS_AM_AUDIENCENAME","Zielgruppen Name");
define("_AMS_AM_ACCESSRIGHTS","Zugriffsrechte");
define("_AMS_AM_LINKEDFORUM","Verknüpftes Forum");
define("_AMS_AM_VERSIONCOUNT","Versionen");
define("_AMS_AM_AUDIENCEHASSTORIES","%u Artikel haben diese Zielgruppe, bitte wählen Sie eine  neue Zielgruppe für diese Artikel");
define("_AMS_AM_RUSUREDELAUDIENCE","Sind Sie sicher, das Sie diese Zielgruppen komplett löschen wollen?");
define("_AMS_AM_PLEASESELECTNEWAUDIENCE","Bitte wählen Sie eine ersatzweise Zielgruppe");
define("_AMS_AM_AUDIENCEDELETED","Zielgruppe erflgreich gelöscht");
define("_AMS_AM_ERROR_AUDIENCENOTDELETED","Fehler - Zielgruppe NICHT gelöscht");
define("_AMS_AM_CANNOTDELETEDEFAULTAUDIENCE","Fehler - Kann die Standard-Zielgruppe nicht löschen");

define("_AMS_AM_NOTOPICSELECTED","Kein Thema gewählt");
define("_AMS_AM_SUBMIT","Abschicken");
define("_AMS_AM_ERROR_REORDERERROR","Fehler - Fehler traten während der Neuordnung auf");
define("_AMS_AM_REORDERSUCCESSFUL","Themen neu geordnet");

define("_AMS_AM_NONE","Bez slike");
define("_AMS_AM_AUTHOR","Avatar od autora vijesti");

define("_AMS_AM_SPOT_ADD","Rampenlicht Mini Block hinzufügen");
define("_AMS_AM_SPOT_EDITBLOCK","Bearbeiten der Block Einstellung");
define("_AMS_AM_SPOT_NAME","Naziv");
define("_AMS_AM_SPOT_SHOWIMAGE","Prika&#382;i sliku");
define("_AMS_AM_SPOT_SHOWIMAGE_DESC","Izaberi sliku za prikazati, prikazati sliku Teme ili Avatar od autora vijesti");
define("_AMS_AM_SPOT_WEIGHT","Redoslijed");
define("_AMS_AM_SPOT_DISPLAY","Prika&#382;i");
define("_AMS_AM_SPOT_MAIN","Glavno");
define("_AMS_AM_SPOT_MINI","Mini");
define("_AMS_AM_SPOTLIGHT","Rampenlicht");
define("_AMS_AM_WEIGHT","Redoslijed");
define("_AMS_AM_SPOT_SAVESUCCESS","Rampenlicht erfolgreich gespeichert");
define("_AMS_AM_SPOT_DELETESUCCESS","Rampenlicht erfolgreich gelöscht");
define("_AMS_AM_RUSUREDELSPOTLIGHT","Sind Sie sicher, das sie dieses Rampenlicht entfernen wollen?");

define("_AMS_AM_SPOT_LATESTARTICLE","Aktuellste Artikel");
define("_AMS_AM_SPOT_LATESTINTOPIC","Aktuellstes im Thema");
define("_AMS_AM_SPOT_SPECIFICARTICLE","Spezieller Artikel");
define("_AMS_AM_SPOT_NOIMAGE","Bez slike");
define("_AMS_AM_SPOT_MODE_SELECT","Rampenlicht Modus");
define("_AMS_AM_SPOT_SPECIFYIMAGE","Specifi&#269;na slika");
define("_AMS_AM_SPOT_TOPICIMAGE","Slika od Teme");
define("_AMS_AM_SPOT_AUTHORIMAGE","Avatar od autora");
define("_AMS_AM_SPOT_IMAGE","Slika");
define("_AMS_AM_SPOT_AUTOTEASER","Automatischer Anreisser");
define("_AMS_AM_SPOT_MAXLENGTH","Maximale Länge des automatischen Anreissers");
define("_AMS_AM_SPOT_TEASER","Eigener Anreisser Text");
define("_AMS_AM_SPOT_TOPIC_DESC","Wenn 'Aktuellstes im Thema' gewählt ist, welches Thema soll dann gewählt werden?");
define("_AMS_AM_SPOT_ARTICLE_DESC","Wenn 'Spezieller Artikel' gewählt ist, welcher Artikel soll angezeigt werden?");
define("_AMS_AM_SPOT_CUSTOM","Maßgeschneidert");

define("_AMS_AM_PREFERENCES","Pode&scaron;avanja");
define("_AMS_AM_GOMOD","Idi u Vijesti");
define("_AMS_AM_ABOUT","O modulu");
define("_AMS_AM_MODADMIN","Administracija vijesti");
?>