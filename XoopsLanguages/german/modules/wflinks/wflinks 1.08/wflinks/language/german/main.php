<?php
/**
 * $Id: main.php v 1.00 21 June 2005 John N Exp $
 * Module: WF-links
 * Version: v1.0.3
 * Release Date: 21 June 2005
 * Developer: John N
 * Team: WF-Projects
 * Licence: GNU
 * Format: UTF-8
 */

define("_MD_WFL_NOLINK","Dieser Link existiert nicht!");
define("_MD_WFL_SUBCATLISTING","Kategorieliste");
define("_MD_WFL_ISADMINNOTICE","Webmaster: Es gibt ein Problem mit diesem Bild.");
define("_MD_WFL_THANKSFORINFO","Danke für Ihre Einsendung.<br />Sie werden benachrichtigt, wenn Ihr Link freigegeben wurde.");
define("_MD_WFL_ISAPPROVED","Danke für Ihre Einsendung.<br />Ihre Anfrage wurde freigegeben und ist jetzt in der Liste zu finden.");
define("_MD_WFL_THANKSFORHELP","Danke für Ihre Unterstützung.");
define("_MD_WFL_FORSECURITY","Aus Sicherheitsgründen wird der Benutzername und die IP-Adresse gespeichert.");
define("_MD_WFL_DESCRIPTION","Beschreibung");
define("_MD_WFL_SUBMITCATHEAD","Formblatt für  die Linkeinsendung");
define("_MD_WFL_MAIN","Startseite");
define("_MD_WFL_POPULAR","Populär");
define("_MD_WFL_NEWTHISWEEK","Diese Woche neu");
define("_MD_WFL_UPTHISWEEK","Neue Versionen diese Woche");
define("_MD_WFL_POPULARITYLTOM","Popularität (Populäste zuletzt)");
define("_MD_WFL_POPULARITYMTOL","Popularität (Populärste am Anfang)");
define("_MD_WFL_TITLEATOZ","Titel (A >> Z)");
define("_MD_WFL_TITLEZTOA","Titel (Z >> A)");
define("_MD_WFL_DATEOLD","Datum (Älteste zuerst)");
define("_MD_WFL_DATENEW","Datum (Neueste zuerst)");
define("_MD_WFL_RATINGLTOH","Bewertung (Niedrigste Bewertung zuerst)");
define("_MD_WFL_RATINGHTOL","Rating (Höchste Bewertung zuerst)");
define("_MD_WFL_DESCRIPTIONC","Beschreibung: ");
define("_MD_WFL_CATEGORYC","Kategorie: ");
define("_MD_WFL_VERSION","Version");
define("_MD_WFL_SUBMITDATE","Eingesandt");
define("_MD_WFL_LINKHITS","<b>Besucht:</b> %s mal");
define("_MD_WFL_URLRATING","<b>ICRA</b>: %s");
define("_MD_WFL_PUBLISHERC","Einsender: ");
define("_MD_WFL_RATINGC","Bewertung: ");
define("_MD_WFL_PAGERANK","PageRank: ");
define("_MD_WFL_PAGERANKALT","Google PageRank: ");
define("_MD_WFL_ONEVOTE","1 Bewertung");
define("_MD_WFL_NUMVOTES","%s Bewertungen");
define("_MD_WFL_RATETHISFILE","Link bewerten");
define("_MD_WFL_MODIFY","Ändern");
define("_MD_WFL_REPORTBROKEN","Defekten Link melden");
define("_MD_WFL_BROKENREPORT","Defekte Quelle melden");
define("_MD_WFL_SUBMITBROKEN","Absenden");
define("_MD_WFL_BEFORESUBMIT","Bitte prüfen Sie sorgfältig, ob der Link, den Sie als defekt melden wollen, eventuell nur temporär nicht verfügbar ist.");
define("_MD_WFL_TELLAFRIEND","Link weiterempfehlen");
define("_MD_WFL_EDIT","Ändern");
define("_MD_WFL_THEREARE","Es sind <b>%s</b> <i>Kategorieen</i> und <b>%s</b> <i>Links</i> aufgelistet");
define("_MD_WFL_THEREIS","Es ist <b>%s</b> <i>Kategorie</i> und <b>%s</b> <i>Links</i> aufgelistet");
define("_MD_WFL_LATESTLIST","Neueste Auflistungen");
define("_MD_WFL_FILETITLE","Link Titel: ");
define("_MD_WFL_DLURL","Link Adresse: ");
define("_MD_WFL_LINK_DIRCA"," Internet Inhalt Bewertung: ");
define("_MD_WFL_HOMEPAGEC","Startseite: ");
define("_MD_WFL_NOTSPECIFIED","Nicht definiert");
define("_MD_WFL_SUBMITTER","Einsender");
define("_MD_WFL_UPDATEDON","Updated am");
define("_MD_WFL_PRICEFREE","Frei");
define("_MD_WFL_VIEWDETAILS","Zeige alle Details");
define("_MD_WFL_OPTIONS", 'Optionen: ');
define("_MD_WFL_NOTIFYAPPROVE", 'Bitte benachrichtigen Sie mich, wenn der Link freigegenen wurde');
define("_MD_WFL_VOTEAPPRE","Ihre Bewertung ist herzlich willkommen.");
define("_MD_WFL_THANKYOU","Danke, dass Sie sich für die Bewertung auf %s Zeit genommen haben"); // %s is your site name
define("_MD_WFL_VOTEONCE","Bitte jeden Link nur einmal bewerten.");
define("_MD_WFL_RATINGSCALE","Die Skala geht von 1 - 10, mit 1 (schlecht) bis 10 (exzellent).");
define("_MD_WFL_BEOBJECTIVE","Bitte bewerten Sie objektiv! Es ist wenig nützlich, wenn alle mit 1 oder 10 bewerten.");
define("_MD_WFL_DONOTVOTE","Bitte bewerten Sie nicht die eigenen Einsendungen.");
define("_MD_WFL_RATEIT","Bewerten!");
define("_MD_WFL_INTFILEFOUND","Hier ist ein guter Link, um ihn auf %s hinzuzufügen"); // %s is your site name
define("_MD_WFL_RANK","Rang");
define("_MD_WFL_CATEGORY","Kategorie");
define("_MD_WFL_HITS","Hits");
define("_MD_WFL_RATING","Bewertung");
define("_MD_WFL_VOTE","Wählen");
define("_MD_WFL_SORTBY","Sortierung nach:");
define("_MD_WFL_TITLE","Titel");
define("_MD_WFL_DATE","Datum");
define("_MD_WFL_POPULARITY","Popularität");
define("_MD_WFL_TOPRATED","Bewertung");
define("_MD_WFL_CURSORTBY","Links momentan sortiert nach: %s");
define("_MD_WFL_CANCEL","Abbrechen");
define("_MD_WFL_ALREADYREPORTED","Sie haben den defekten Link bereits gemeldet.");
define("_MD_WFL_MUSTREGFIRST","Entschuldigung, Sie haben nicht die Berechtigung für diese Aktion.<br />Bitte zuerst anmelden oder registrieren!");
define("_MD_WFL_NORATING","Keine Bewertung ausgewählt.");
define("_MD_WFL_VOTEFORTITLE","Diesen Link bewerten: ");
define("_MD_WFL_CANTVOTEOWN","Sie können nicht Ihren eigenen Link bewerten.<br />Alle Bewertugen werden gespeichert und überprüft.");
define("_MD_WFL_SUBMITLINK","Link einsenden");
define("_MD_WFL_SUB_SNEWMNAMEDESC","<ul><li>Alle neuen Links werden zuerst überprüft. Es kann bis zu 24 Studen dauern, bis der Link aufgelistet wird.</li><li>Wir behalten uns asudrücklich das Recht vor, Links bei Änderung des Inhalts ohne Ankündigung zu löschen.</li></ul>");
define("_MD_WFL_MAINLISTING","Hauptkategorie Listings");
define("_MD_WFL_LASTWEEK","Letzte Woche");
define("_MD_WFL_LAST30DAYS","Die letzten 30 Tage");
define("_MD_WFL_1WEEK","1 Woche");
define("_MD_WFL_2WEEKS","2 Wochen");
define("_MD_WFL_30DAYS","30 Tage");
define("_MD_WFL_SHOW","Zeige");
define("_MD_WFL_DAYS","Tage");
define("_MD_WFL_NEWLINKS","Neue Links");
define("_MD_WFL_TOTALNEWLINKS","Alle neuen Links");
define("_MD_WFL_DTOTALFORLAST","Alle neuen Links zuletzt");
define("_MD_WFL_AGREE","Ich stimme zu");
define("_MD_WFL_DOYOUAGREE","Stimmen Sie den obigen Bedingungen zu?");
define("_MD_WFL_DISCLAIMERAGREEMENT","Haftungsausschluss");
define("_MD_WFL_DUPLOADSCRSHOT","Bildschirmfoto hochladen:");
define("_MD_WFL_RESOURCEID","Link-Nummer: ");
define("_MD_WFL_REPORTER","Zuerst berichtet von: ");
define("_MD_WFL_DATEREPORTED","Datum des Berichts: ");
define("_MD_WFL_RESOURCEREPORTED","Quelle des Berichts");
define("_MD_WFL_RESOURCEREPORTED2","Der defekte Link wurde bereits gemeldet. Wir arbeiten an der Lösung des Problems.");
define("_MD_WFL_BROWSETOTOPIC","<b>Links in alphabetischer Sortierung durchsehen</b>");
define("_MD_WFL_WEBMASTERACKNOW","Bericht des defekten Links quittieren: ");
define("_MD_WFL_WEBMASTERCONFIRM","Bericht des defekten Links bestätigen: ");
define("_MD_WFL_ERRORSENDEMAIL","Wir bestätigen den Bericht des defekten Links aber bei der Benachrichtigung des Webmasters ist ein Fehler aufgetreten.");

define("_MD_WFL_DELETE","Löschen");
define("_MD_WFL_DISPLAYING","Angezeigt sortiert : ");
define("_MD_WFL_LEGENDTEXTNEW","Heute neu");
define("_MD_WFL_LEGENDTEXTNEWTHREE","Neu die letzten 3 Tage");
define("_MD_WFL_LEGENDTEXTTHISWEEK","Neu diese Woche");
define("_MD_WFL_LEGENDTEXTNEWLAST","Über 1 Woche alt");
define("_MD_WFL_THISFILEDOESNOTEXIST","Fehler: Der Link existiert nicht!");
define("_MD_WFL_BROKENREPORTED","Defekter Link gemeldet");

define("_MD_WFL_REV_SNEWMNAMEDESC"," 
Bitte füllen Sie das Formular komplett aus und wir werden Ihre Rezension so bald wie möglich veröffentlichen.<br /><br />
Danke, dass Sie sich die Zeit genommen haben. Wir möchten unseren Benutzern die Möglichkeit geben, qualitativ hochwertige Programme schnell zu finden.<br /><br />Alle Rezesion werden vor der Veröffentlichung durch einen der Webmaster überprüft. 
");
define("_MD_WFL_ISNOTAPPROVED","Ihre Einreichung muss noch durch einen Moderator geprüft werden.");
define("_MD_WFL_HOMEPAGETITLEC","Name der Website: ");
define("_MD_WFL_SCREENSHOT","Bildschirmfoto:");
define("_MD_WFL_SCREENSHOTCLICK","Zeige komplettes Bild");
define("_MD_WFL_OTHERBYUID","Andere Einsendungen von: ");
define("_MD_WFL_LINKTIMES","Anzahl Klicks: ");
define("_MD_WFL_MAINTOTAL","Alle Links: ");
define("_MD_WFL_LINKNOW","Link besuchen");
define("_MD_WFL_PAGES","<b>Seiten</b>");
define("_MD_WFL_RATEDRESOURCE","Bewertete Quelle");
define("_MD_WFL_PUBLISHER","Einsender");
define("_MD_WFL_ERROR","Fehler beim Reorganisieren der Datenbank: Information wurde nicht gespeichert");
define("_MD_WFL_COPYRIGHT","Urheberrecht");
define("_MD_WFL_INFORUM","Im Forum diskutieren");
// added frankblack
define("_MD_WFL_NOTALLOWESTOSUBMIT","Sie dürfen keine Links einreichen");
define("_MD_WFL_INFONOSAVEDB","Information nicht in der Datenbank gespeichert: <br /><br />");

define("_MD_WFL_NEWLAST","Neu eingereicht vorletzte Woche");
define("_MD_WFL_NEWTHIS","Neu eingereicht in dieser Woche");
define("_MD_WFL_THREE","Neu eingereicht innerhalb der letzten 3 Tage");
define("_MD_WFL_TODAY","Heute neu eingereicht");
define("_MD_WFL_NO_FILES","Zur Zeit keine Links");

define("_MD_WFL_NOPERMISSIONTOPOST","Sie haben keine Berechtigung für diese Kategorie.");

define("_MD_WFL_PUBLISHDATE","Publiziert");
define("_MD_WFL_APPROVE","Freigegeben");
define("_MD_WFL_MODERATOR_OPTIONS","Moderator - Optionen");

// added by McDonald
define("_MD_WFL_COUNTRY","Land:");
define("_MD_WFL_COUNTRYB","<b>Land:</b>");
define("_MD_WFL_KEYWORDS","Schlüsselwörter:");
define("_MD_WFL_KEYWORDS_NOTE","Schlüsselwörter müssen durch Komma getrennt werden (Wort1, Wort2, Wort3,...)");
define("_MD_WFL_NOLINKLOAD","Danke für Ihren Beitrag!");
define("_MD_WFL_LINKID","Link id");
define("_MD_WFL_COUNTRYSORT","Land");
define("_MD_WFL_COUNTRYLTOH","Land (A >> Z)");
define("_MD_WFL_COUNTRYHTOL","Land (Z >> A)");
define("_MD_WFL_BACKBUTTON","Zurück");
define("_MD_WFL_ADMINSECTION","Administration");
define("_MD_WFL_ADDTO","Hinzugefügt zu: ");
define("_MD_WFL_INFORMATION","Information");
define("_MD_WFL_ADDRESS","Adresse:");
define("_MD_WFL_LINK_GOOGLEMAP","Google Landkarte");
define("_MD_WFL_LINK_YAHOOMAP","Yahoo Landkarte");
define("_MD_WFL_LINK_MULTIMAP","Multimap Landkarte");
define("_MD_WFL_LINK_CHECKMAP","Check Landkarte");
define("_MD_WFL_STREET1","Anschrift");
define("_MD_WFL_STREET2","Anschrift2 (optional)");
define("_MD_WFL_TOWN","Ort");
define("_MD_WFL_STATE","Bundesland");
define("_MD_WFL_ZIPCODE","Postleitzahl");
define("_MD_WFL_TELEPHONE","Festnetz");
define("_MD_WFL_TEL","Tel. ");
define("_MD_WFL_FAX","Fax. ");
define("_MD_WFL_GETMAP","Landkarte öffnen");

// Version 1.05 RC5
define("_MD_WFL_VOIP","VoIP");
define("_MD_WFL_PRINT","Drucken");
define("_MD_WFL_NOITEMSELECTED","Es wurde kein gültiger Link gewählt!");
define("_MD_WFL_MOBILE","Handy");

// Version 1.05 RC6
define("_MD_WFL_VAT","USt-IdNr.");
define("_MD_WFL_VATWIKI", '<small>Weitere Informationen finden Sie unter <a href="http://en.wikipedia.org/wiki/Value_added_tax_identification_number" target="_blank">Wikipedia</a></small>');
define("_MD_WFL_EMAIL","E-Mail");
define("_MD_WFL_LINK_CREATEADDRESS", '<b>Adresse Formular</b>');

//Version 1.06 RC2
define('_MD_WFL_STOPIT','Hör damit auf, Du Idiot!!');
?>