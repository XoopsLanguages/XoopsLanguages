<?php
if (!defined("_MI_INFO_NAME")) {
define("_MI_INFO_NAME","DH-INFO");
define("_MI_INFO_DESC","Erstellen von Content mit eigener Navigation.");
define("_MI_INFO_PRINTER","Druckerfreundliche Version aufrufen");

define("_MI_INFO_BLOCK1","DH-INFO Menüblock");
define("_MI_INFO_BLOCK1_DESC","erstellt einen Menüblock zur Navigation");
define("_MI_INFO_BLOCK2","DH-INFO Freier Block");
define("_MI_INFO_BLOCK2_DESC","Zeigt einen beliebigen Beitrag in einem Block an");

define("_MI_INFO_CONF1","Editorauswahl zulassen");
define("_MI_INFO_CONF1_DESC","Ja für Editorauswahl im Formular / Nein für den Defaulteditor des Systems");
define("_MI_INFO_CONF3","Druckerfreundliche Seiten generieren");
define("_MI_INFO_CONF3_DESC","Diese Einstellungen erstellt auf den Seiten ein Iconlink, bei dem dann eine druckerfreundliche Seite aufgerufen wird.");
define("_MI_INFO_CONF4","Anzeige letzter Änderung");
define("_MI_INFO_CONF4_DESC","");
define("_MI_INFO_CONF5","Anzeige der Blöcke unterbinden beim Schreiben");
define("_MI_INFO_CONF5_DESC","Bei ja werden die linken und rechten Blöcke beim Aufruf der submit.php ausgeblendet");
define("_MI_INFO_TEMPL1","SeitenLayout");
define("_MI_INFO_LASTD1","keine Anzeige");
define("_MI_INFO_LASTD2","kurze Anzeige (=> ".date(_SHORTDATESTRING,time()).")");
define("_MI_INFO_LASTD3","normale Anzeige (=> ".date(_MEDIUMDATESTRING,time()).")");
define("_MI_INFO_LASTD4","lange Anzeige (=> ".date(_DATESTRING,time()).")");

//Added in 1.04
define("_MI_INFO_BLOCKADMIN","Blockverwaltung");
define("_MI_INFO_ADMENU2","Blockkategorien");
define("_MI_INFO_ADMENU3","Seiten verwalten");
define("_MI_INFO_ADMENU4","Zugriffsrechte");

//Added in 2.0
define("_INFO_TOOLTIP","Tooltip");
define("_MI_INFO_CONF6","Anzeige der SeitenNavigation");
define("_MI_INFO_CONF6_DESC","");
define("_MI_INFO_CONF7","Anzeige der Links im Profil");
define("_MI_INFO_CONF7_DESC","Bei ja werden die Links im Profil angezeigt");
define("_MI_INFO_PAGESNAV","als Seitenzahlen");
define("_MI_INFO_PAGESELECT","als Auswahlbox");
define("_MI_INFO_PAGESIMG","als Bilder");
define("_MI_INFO_SENDEMAIL","Per E-Mail versenden");
define("_MI_INFO_ARTICLE","Interessanter Artikel auf %s");
define("_MI_INNFO_ARTFOUND","Hier ist ein interessanter Artikel den ich auf %s gefunden habe");
define("_MI_INFO_GUEST","Gastschreiber");
define("_INFO_FREIGABEART","Freigabemodus");
define("_INFO_FREIGABEART_YES","Freigeben");
define("_INFO_FREIGABEART_NO","Sperren");
define("_MI_INFO_ADMENU5","Freizugebende Beiträge");
define("_MI_INFO_ADMENU6","gesperrte Beiträge");
define("_MI_INFO_GESPERRT","[GESPERRT]");
define("_AM_INFO_NOFRAMEOREDITOR","<div style='font-style:bold;color:red;'>keine Editoren gefunden!</div>");
define("_INFO_NEW","NEU");
define("_INFO_UPDATE","UPDATE");
define("_MI_INFO_CONF8","SEO-Optimierung");
define("_MI_INFO_CONF8_DESC","Umschreibung der Urls in Suchmaschinenfreundliche. Rewriting setzt mod_rewrite vorraus!");
define("_MI_INFO_CONF9","Moduleigene Links");
define("_MI_INFO_CONF9_DESC","bei ja , werden externe Links nicht sichtbar");

}
?>