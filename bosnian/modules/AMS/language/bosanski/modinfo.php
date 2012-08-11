<?php
// $Id: modinfo.php,v 1.16 2004/06/09 09:57:33 mithyt2 Exp $
// Module Info

// The name of this module
define("_AMS_MI_NEWS_NAME","Vijesti");

// A brief description of this module
define("_AMS_MI_NEWS_DESC","Erzeugt eine Artikel-Abteilung in der Benutzer Artikel und Kommentare abgeben können.");

// Names of blocks for this module (Not all module has blocks)
define("_AMS_MI_NEWS_BNAME1","Teme");
define("_AMS_MI_NEWS_BNAME3","Najva&#382;nije vijesti");
define("_AMS_MI_NEWS_BNAME4","Top vijesti");
define("_AMS_MI_NEWS_BNAME5","Aktuelne novosti");
define("_AMS_MI_NEWS_BNAME6","Vijesti uredi");
define("_AMS_MI_NEWS_BNAME7","Navigacija preko Tema");
define("_AMS_MI_NEWS_BNAME8","Najaktivniji Autori");
define("_AMS_MI_NEWS_BNAME9","Naj&#269;itaniji Autori");
define("_AMS_MI_NEWS_BNAME10","Najocjenjeniji Autori");
define("_AMS_MI_NEWS_BNAME11","Najocjenjenije vijesti");
define("_AMS_MI_NEWS_BNAME12","Rampenlicht");

// Sub menus in main menu block
define("_AMS_MI_NEWS_SMNAME1","Vijest po&scaron;alji");
define("_AMS_MI_NEWS_SMNAME2","Arhiva");

// Names of admin menu items
define("_AMS_MI_NEWS_ADMENU2","Upravljanje Temama");
define("_AMS_MI_NEWS_ADMENU3","Upravljanje vijestima");
define("_AMS_MI_NEWS_GROUPPERMS","Odobrenja poslati/odobriti");

// Titel of config items
define("_AMS_MI_STORYHOME","Odredi koliko vijesti treba prikazati na start stranici");
define("_AMS_MI_STORYCOUNTTOPIC","Odredi koliko vijesti treba prikazati u Temi-stranici");
define("_AMS_MI_NOTIFYSUBMIT","Izaberi Da i ovim obavje&scaron;tavaj webmastera o svakoj novoj poslatoj vijesti koja &#269;eka na odobrenje");
define("_AMS_MI_DISPLAYNAV","Izaberi Da i Navigacijski box prika&#382;i na vrhu svake modul-stranice");
define("_AMS_MI_AUTOAPPROVE","Treba li dozvoliti automatsko objavljivanje vijesti,bez obavje&scaron;tavanja webmastera i njegove kontrole?");
define("_AMS_MI_ALLOWEDSUBMITGROUPS","Grupe, koje smiju slati nove vijesti");
define("_AMS_MI_ALLOWEDAPPROVEGROUPS","Grupe, koje smiju odobravati poslate nove vijesti.");
define("_AMS_MI_NEWSDISPLAY","Od vijesti stranice izgled");
define("_AMS_MI_NAMEDISPLAY","Autora ime");
define("_AMS_MI_COLUMNMODE","Redova");
define("_AMS_MI_STORYCOUNTADMIN","Odredi koliko novih vijesti u Administraciji treba prikazati po stranici: ");
define("_AMS_MI_UPLOADFILESIZE","Max. veli&#269;ina u (KB) 1048576 = 1 Meg");
define("_AMS_MI_UPLOADGROUPS","Grupe koje smiju uploadati podatke na server");
define("_AMS_MI_MAXITEMS","Max.dozvoljenih pozicija");
define("_AMS_MI_MAXITEMDESC","Odredi broj pozicija, koje korisnici u Navigacijskom boxu mogu izabirati");


// Description of each config items
define("_AMS_MI_STORYHOMEDSC","Odredi koliko pozicija treba biti na glavnoj stranici (npr.ako nikakva Tema nije izabrana)");
define("_AMS_MI_NOTIFYSUBMITDSC","");
define("_AMS_MI_DISPLAYNAVDSC","");
define("_AMS_MI_AUTOAPPROVEDSC","");
define("_AMS_MI_ALLOWEDSUBMITGROUPSDESC","Izabrane Grupe smiju vijesti slati");
define("_AMS_MI_ALLOWEDAPPROVEGROUPSDESC","Izabrane Grupe smiju poslate nove vijesti odobravati i objavljivati");
define("_AMS_MI_NEWSDISPLAYDESC","Klasi&#269;no, prika&#382;i sve vijesti koje su objavljivane po datumu. Artikel nach Thema gruppiert die Artikel nach Themen und zeigt den letzten Artikel voll, von den anderen Artikeln nur den Titel");
define("_AMS_MI_ADISPLAYNAMEDSC","Wähle, wie der Name des Autors angezeigt werden soll");
define("_AMS_MI_COLUMNMODE_DESC","Sie können die Anzahl der Spalten zur Anzeige in der Artikel Liste wählen");
define("_AMS_MI_STORYCOUNTADMIN_DESC","");
define("_AMS_MI_STORYCOUNTTOPIC_DESC","Legt fest, wieviele Positionen auf einer Themen Seite angezeigt werden (zB nicht Hauptseite)");
define("_AMS_MI_UPLOADFILESIZE_DESC","");
define("_AMS_MI_UPLOADGROUPS_DESC","Wähle die Gruppen, die zum Server hochladen dürfen");

// Name of config item values
define("_AMS_MI_NEWSCLASSIC","Klasi&#269;no");
define("_AMS_MI_NEWSBYTOPIC","Po Temama");
define("_AMS_MI_DISPLAYNAME1","Nik ime");
define("_AMS_MI_DISPLAYNAME2","Pravo ime");
define("_AMS_MI_DISPLAYNAME3","Autora ne prikazuj");
define("_AMS_MI_UPLOAD_GROUP1","Po&scaron;aljilac i privilegovani");
define("_AMS_MI_UPLOAD_GROUP2","Samo privilegovani");
define("_AMS_MI_UPLOAD_GROUP3","Upload je deaktiviran");
define("_AMS_MI_INDEX_NAME","Naziv index-a");
define("_AMS_MI_INDEX_DESC","Ovaj naziv se prikazuje na vrhu Theme- i artikli.");

// Text for notifications

define("_AMS_MI_NEWS_GLOBAL_NOTIFY","Globalno");
define("_AMS_MI_NEWS_GLOBAL_NOTIFYDSC","Globalne vijesti-Opcija obavje&scaron;tavanja.");

define("_AMS_MI_NEWS_STORY_NOTIFY","Vijesti");
define("_AMS_MI_NEWS_STORY_NOTIFYDSC","Opcije obavje&scaron;tavanja, koje se ti&#269;u aktuelnih vijesti.");

define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY","Nova Tema");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP","Obavijesti me, ako bude novih Tema u vijestima.");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC","Obavijest, ako bude nova Tema kreirana.");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} Automatska obavijest : Nova Tema u vijestima je kreirana");

define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY","Nova vijest je poslata");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP","Obavijesti me, ako bude novih vijesti poslatih, ali koje &#269;ekaju na odobrenje.");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC","Obavijest, ako bude nova vijest poslata i na odobrenje &#269;eka.");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} Automatska obavijest : Nova vijest &#269;eka na odobrenje");

define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY","Nova vijest");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP","Obavijesti me, ako bude novih vijesti poslatih.");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC","Benachrichtigung, wenn ein neuer Artikel eingeschickt wurde.");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung : Neuer Artikel");

define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFY","Artikel Freigegeben");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYCAP","Benachrichtige mich, wenn dieser Artikel freigegeben wurde.");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYDSC","Benachrichtigung, wenn dieser Artikel freigegeben wurde.");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung : Artikel freigegeben");

define("_AMS_MI_RESTRICTINDEX","Themen auf der Übersichts-Seite einschränken?");
define("_AMS_MI_RESTRICTINDEXDSC","Bei Auswahl von JA werden nur Artikel angezeigt, auf die der Benutzer Zugriff hat wie in den Artikel Berechtigungen gesetzt ist");

define("_AMS_MI_ANONYMOUS_VOTE","Erlaube anonymes bewerten von Artikeln");
define("_AMS_MI_ANONYMOUS_VOTE_DESC","Wenn erlaubt, können anonyme Benutzer Artikel bewerten");

define("_AMS_MI_AUDIENCE","Zielgruppen Ebenen");

define("_AMS_MI_SPOTLIGHT","Rampenlicht");
define("_AMS_MI_SPOTLIGHT_ITEMS","Rampenlicht Artikel Kandidaten");
define("_AMS_MI_SPOTLIGHT_ITEMS_DESC","Anzahl der Artikel, die in der Rampenlicht Konfigurationsseite als Rampenlich Artikel wählbar angezeigt werden");

define("_AMS_MI_EDITOR","Editor");
define("_AMS_MI_EDITOR_DESC","Choose the editor to use in the submit form - non-default editors MUST be separately installed");
define("_AMS_MI_EDITOR_DEFAULT","Xoops Default");
define("_AMS_MI_EDITOR_DHTML","DHTML");
define("_AMS_MI_EDITOR_HTMLAREA","HtmlArea Editor");
define("_AMS_MI_EDITOR_FCK","FCK WYSIWYG Editor");
define("_AMS_MI_EDITOR_KOIVI","Koivi WYSIWYG Editor");
define("_AMS_MI_EDITOR_TINYMCE","TinyMCE WYSIWYG Editor");

define("_AMS_MI_EDITOR_CHOICE","Editor Choices");
define("_AMS_MI_EDITOR_CHOICE_DESC","Choices of editors enabled to user");

define("_AMS_MI_SPOTLIGHT_TEMPLATE","Spotlight Templati");
define("_AMS_MI_SPOTLIGHT_TEMPLATE_DESC","Which template enabled to admin to be used in spotlight block");
define("_AMS_MI_ABOUT","O Modulu");
?>