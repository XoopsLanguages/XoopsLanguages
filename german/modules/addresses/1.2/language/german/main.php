<?php
// $Id: main.php,v 1.7 2003/03/27 12:11:08 w4z004 Exp $
//%%%%%%		Module Name 'Addresses'		%%%%%

define("_MD_THANKSFORINFO","Vielen Dank für die Information. Wir werden deine Anfrage schnellstmöglich bearbeiten.");
define("_MD_THANKSFORHELP","Vielen Dank für deine Mithilfe dieses Verzeichnis aktuell zu halten.");
define("_MD_FORSECURITY","Aus Sicherheitsgründen werden dein Benutzername und deine IP-Adresse vorübergehend aufgezeichnet.");

define("_MD_SEARCHFOR","Suchen nach");
define("_MD_ANY","ALLES");
define("_MD_SEARCH","Suchen");

define("_MD_MAIN","Übersicht");
define("_MD_SUBMITLINK","Adresse einschicken");
define("_MD_SUBMITLINKHEAD","Neue Adresse einschicken");
define("_MD_POPULAR","Populär");
define("_MD_TOPRATED","Top bewertet");

define("_MD_NEWTHISWEEK","Neu diese Woche");
define("_MD_UPTHISWEEK","Aktualisiert diese Woche");

define("_MD_POPULARITYLTOM","Popularität (aufsteigend)");
define("_MD_POPULARITYMTOL","Popularität (absteigend)");
define("_MD_TITLEATOZ","Name (A bis Z)");
define("_MD_TITLEZTOA","Name (Z bis A)");
define("_MD_DATEOLD","Datum (alte Adressen zuerst)");
define("_MD_DATENEW","Datum (neue Adresse zuerst)");
define("_MD_RATINGLTOH","Bewertung (niedrigstes bis höchstes Ergebnis)");
define("_MD_RATINGHTOL","Bewertung (höchstes bis niedrigstes Ergebnis)");

define("_MD_NOSHOTS","Keine Screenshots vorhanden");
define("_MD_EDITTHISLINK","Diese Adresse bearbeiten");

define("_MD_DESCRIPTIONC","Beschreibung: ");
define("_MD_EMAILC","E-Mail: ");
define("_MD_CATEGORYC","Kategorie: ");
define("_MD_LASTUPDATEC","Letzte Aktualisierung: ");
define("_MD_HITSC","Aufrufe: ");
define("_MD_RATINGC","Bewertung: ");
define("_MD_ONEVOTE","1 Stimme");
define("_MD_NUMVOTES","%s Stimmen");
define("_MD_RATETHISSITE","Diese Adresse bewerten");
define("_MD_MODIFY","Ändern");
define("_MD_REPORTBROKEN","Fehlerhafte Adresse melden");
define("_MD_TELLAFRIEND","Einen Freund benachrichtigen");

define("_MD_THEREARE","Es liegen <b>%s</b> Adressen in unserer Datenbank vor");
define("_MD_LATESTLIST","Aktuelle Liste");

define("_MD_REQUESTMOD","Adressänderung anfragen");
define("_MD_LINKID","Adress-ID: ");
define("_MD_SITETITLE","Name/Organisation: ");
define("_MD_SITEURL","Webseiten-URL: ");
define("_MD_OPTIONS","Optionen: ");
define("_MD_NOTIFYAPPROVE","Bei Freigabe dieser Adresse benachrichtigen");
define("_MD_SHOTIMAGE","Screenshot: ");
define("_MD_SENDREQUEST","Anfrage schicken");

define("_MD_VOTEAPPRE","Vielen Dank für deine Stimme.");
define("_MD_THANKURATE","Vielen Dank, dass du dir die Zeit genommen hast hier auf %s abzustimmen.");
define("_MD_VOTEFROMYOU","Dank deiner Mitarbeit erleichterst du es anderen Besuchern interessante Adressen zu finden.");
define("_MD_VOTEONCE","Bitte stimme für die selbe Adresse nur einmal ab.");
define("_MD_RATINGSCALE","Die Skala reicht von 1 - 10, wobei 1 schlecht und 10 exzellent bedeutet.");
define("_MD_BEOBJECTIVE","Bitte sei objektiv, denn wenn jeder nur mit 1 oder 10 abstimmt ist diese Bewertung nicht sehr aussagekräftig.");
define("_MD_DONOTVOTE","Bitte stimme nicht für deine eigene Adresse ab.");
define("_MD_RATEIT","Bewerten!");

define("_MD_INTRESTLINK","Eine interessante Adresse auf %s");  // %s is your site name
define("_MD_INTLINKFOUND","Hier ist eine interessante Adresse, die ich auf %s gefunden habe");  // %s is your site name

define("_MD_RECEIVED","Wir haben deine Adressinformation erhalten. Vielen Dank!");
define("_MD_WHENAPPROVED","Falls du ein Mitglied bist, erhältst du eine Bestätigungs-Mail nach Freigabe.");
define("_MD_SUBMITONCE","Schicke deine Adresse nur einmal ein.");
define("_MD_ALLPENDING","Alle eingeschickten Adressinformationen müssen noch überprüft werden.");
define("_MD_DONTABUSE","Benutzername und IP-Adresse werde aufgezeichnet, deshalb solltest du das System nicht missbrauchen.");
define("_MD_TAKESHOT","Wir werden die von dir eingeschickte Adresse überprüfen, deshalb kann es einige Zeit dauern bis sie in unsere Datenbank aufgenommen wird.");
define("_MD_BANNERTISE","Es ist möglich ein Banner oder Logo der Addresse anzuzeigen. Setzte dich dafür mit dem Administrator in Verbindung."); // Banner advertisement text addresses. You can adjust this.

define("_MD_RANK","Rang");
define("_MD_CATEGORY","Kategorie");
define("_MD_HITS","Aufrufe");
define("_MD_RATING","Bewertung");
define("_MD_VOTE","Abstimmen");
define("_MD_TOP10","%s Top 10"); // %s is a address category title

define("_MD_SEARCHRESULTS","Suchergebnisse für <b>%s</b>:"); // %s is search keywords
define("_MD_SORTBY","Sortieren nach:");
define("_MD_TITLE","Name");
define("_MD_DATE","Datum");
define("_MD_POPULARITY","Popularität");
define("_MD_CURSORTEDBY","Momentane Sortierung nach: %s");
define("_MD_PREVIOUS","Vorherige");
define("_MD_NEXT","Nächste");
define("_MD_NOMATCH","Keine Ergebnisse zu deiner Suchanfrage gefunden");

define("_MD_SUBMIT","Abschicken");
define("_MD_CANCEL","Abbrechen");

define("_MD_ALREADYREPORTED","Du hast diese Adresse bereits als fehlerhaft gemeldet.");
define("_MD_MUSTREGFIRST","Verzeihung, aber du bist nicht berechtigt diese Aktion auszuführen.<br />Du musst dich zuerst einloggen oder registrieren lassen!");
define("_MD_NORATING","Keine Bewertung gewählt.");
define("_MD_CANTVOTEOWN","Du kannst nicht für eine von dir eingeschickte Adresse abstimmen.<br />Alle Stimmen werden aufgezeichnet und gesichtet.");
define("_MD_VOTEONCE2","Bitte stimme für die gewählte Adresse nur einmal ab.<br />Alle Stimmen werden aufgezeichnet und gesichtet.");

//%%%%%%	Module Name 'Addresses' (Admin)	  %%%%%

define("_MD_WEBLINKSCONF","Adressenkonfiguration");
define("_MD_GENERALSET","Adressen - Allgemeine Einstellungen");
define("_MD_ADDMODDELETE","Kategorien/Adressen hinzufügen/ändern und löschen");
define("_MD_LINKSWAITING","Freizugebende Adressen");
define("_MD_BROKENREPORTS","Als fehlerhaft gemeldete Adressen");
define("_MD_MODREQUESTS","Anfragen auf Adressänderung");
define("_MD_SUBMITTER","Absender: ");
define("_MD_VISIT","Besuchen");
define("_MD_SHOTMUST","Der Screenshot muss ein gültiges Bild im %s-Verzeichnis sein (Bsp. shot.gif). Leer lassen falls kein Bild vorliegt. Dieser Screenshot ist nur sichtbar in der erweiterten Informationsansicht.");
define("_MD_APPROVE","Freigeben");
define("_MD_DELETE","Löschen");
define("_MD_NOSUBMITTED","Es liegen keine neu eingeschickten Adressen vor.");
define("_MD_ADDMAIN","Eine Hauptkategorie hinzufügen");
define("_MD_TITLEC","Titel: ");
define("_MD_IMGURL","Bild-URL (OPTIONAL - Bildhöhe wird auf 60 px umgerechnet): ");
define("_MD_ADD","Hinzufügen");
define("_MD_ADDSUB","Eine Unterkategorie hinzufügen");
define("_MD_IN","in");
define("_MD_ADDNEWLINK","Eine neue Adresse hinzufügen");
define("_MD_MODCAT","Kategorie ändern");
define("_MD_MODLINK","Adresse ändern");
define("_MD_MODLINK2","Adresse ändern für: ");
define("_MD_TOTALVOTES","Adressabstimmung (Stimmen insgesamt: %s)");
define("_MD_USERTOTALVOTES","Stimmen registrierter Benutzer (Stimmen insgesamt: %s)");
define("_MD_ANONTOTALVOTES","Stimmen nicht registrierter Benutzer (Stimmen insgesamt: %s)");
define("_MD_USER","Benutzer");
define("_MD_IP","IP-Adressen");
define("_MD_USERAVG","Durchschnittliche Benutzerbewertung");
define("_MD_TOTALRATE","Bewertung insgesamt");
define("_MD_NOREGVOTES","Keine Stimmen von registrierten Benutzern");
define("_MD_NOUNREGVOTES","Keine Stimmen von nicht registrierten Benutzern");
define("_MD_VOTEDELETED","Abstimmungsdaten gelöscht.");
define("_MD_NOBROKEN","Es liegen keine fehlerhaften Adressen vor.");
define("_MD_IGNOREDESC","Ignorieren (Ignoriert die Meldung und löscht nur die <b>Meldung der fehlerhaften Adresse</b>)");
define("_MD_DELETEDESC","Löschen (Löscht <b>die Adresse</b> und <b>die Meldung der fehlerhaften Adresse</b>.)");
define("_MD_REPORTER","Gemeldet von");
define("_MD_LINKSUBMITTER","Eingeschickt von");
define("_MD_IGNORE","Ignorieren");
define("_MD_LINKDELETED","Adresse gelöscht.");
define("_MD_BROKENDELETED","Meldung der fehlerhaften Adresse gelöscht.");
define("_MD_USERMODREQ","Anfragen auf Adressänderung");
define("_MD_ORIGINAL","Original");
define("_MD_PROPOSED","Vorgeschlagen");
define("_MD_OWNER","Einsender: ");
define("_MD_NOMODREQ","Es liegt keine Änderungsanfrage vor.");
define("_MD_DBUPDATED","Die Datenbank wurde erfolgreich aktualisiert!");
define("_MD_MODREQDELETED","Änderungsanfrage gelöscht.");
define("_MD_IMGURLMAIN","Bild-URL (OPTIONAL und nur gültig für Hauptkategorien. Bildhöhe wird auf 60 px umgerechnet): ");
define("_MD_PARENT","Übergeordnete Kategorie:");
define("_MD_SAVE","Änderungen sichern");
define("_MD_CATDELETED","Kategorie gelöscht.");
define("_MD_WARNING","WARNUNG: Bist du sicher, dass du diese Kategorie und ALLE damit verbundenen Adressen und Kommentare löschen möchtest?");
define("_MD_YES","Ja");
define("_MD_NO","Nein");
define("_MD_NEWCATADDED","Neue Kategorie wurde erfolgreich hinzugefügt!");
define("_MD_ERROREXIST","FEHLER: Die von dir vorgeschlagene Adresse befindet sich bereits in unserer Datenbank!");
define("_MD_ERRORTITLE","FEHLER: Du musst Name/Organisation angeben!");
define("_MD_ERRORDESC","FEHLER: Du musst eine Beschreibung angeben!");
define("_MD_NEWLINKADDED","Neue Adresse wurde der Datenbank hinzugefügt.");
define("_MD_YOURLINK","Deine Adresse auf %s");
define("_MD_YOUCANBROWSE","Du kannst unsere Adressdatenbank auf %s durchsuchen");
define("_MD_HELLO","Hallo %s");
define("_MD_WEAPPROVED","Wir haben die von dir eingeschickte Adresse in unsere Datenbank aufgenommen.");
define("_MD_THANKSSUBMIT","Danke für deine Einsendung!");
define("_MD_ISAPPROVED","Wir haben die von dir eingeschickte Adresse freigegeben");
//added for adresses//
define("_MD_ADRESS","Adresse");
define("_MD_ZIP","Postleitzahl");
define("_MD_CITY","Stadt");
define("_MD_COUNTRY","Land");
define("_MD_PHONE","Telefon");
define("_MD_FAX","Fax");
define("_MD_MOBILE","Mobil");
define("_MD_CONTEMAIL","E-Mail");
define("_MD_WEBSITE","Webseite");
define("_MD_OPENED","Ansprechpartner");
define("_MD_VIEWMORE","Weitere Informationen");
define("_MD_PUBLISHED","Veröffentlicht");
define("_MD_THISCOMESFROM","Diese Adresse stammt von %s");
define("_MD_URLFORSTORY","Die URL dieser Adresse ist:");
define("_MD_PRINT","Drucken");
define("_MD_BANNERTISE","<b>Es ist möglich ein Banner oder Logo unter der Adresse anzuzeigen. Kontaktieren Sie uns, wenn Sie von dieser Möglichkeit gebrauch machen möchten.</b>");
define("_MD_MAP","Karte");
?>
