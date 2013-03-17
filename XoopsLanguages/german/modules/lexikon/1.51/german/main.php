<?php
/**
 * $Id: main.php v 1.0 8 May 2004 hsalazar Exp $
 * Module: Lexikon - glossary module
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */
define("_AM_LX_NOCOLEXISTS","Verzeihung, aber es ist bis jetzt noch keine Kategorie angelegt worden.<br />Bitte teilen Sie dies dem Webmaster mit.");
define("_MD_LX_ALL","Alle");
define("_MD_LX_ALLCATS","Alle Kategorien");
define("_MD_LX_ALLOFTHEM","0 : Alle Kategorien");
define("_MD_LX_ANDOR","Suchbereich");
define("_MD_LX_ANDORALL","Alle W&ouml;rter (UND)");
define("_MD_LX_ANDORANY","Jegliche W&ouml;rter (ODER)");
define("_MD_LX_ANDOREXACT","Genauer Treffer");
define("_MD_LX_ANONYMOUS","Gast");
define("_MD_LX_ASKEDBY","Begriff gefragt von:");
define("_MD_LX_ASKFORDEF","Eine Definition anfordern");
define("_MD_LX_BEGINWITHLETTER","Eintr&auml;ge die mit diesem Buchstaben anfangen.");
//define("_MD_LX_BROWSECAT","Nach Kategorie suchen");
define("_MD_LX_BROWSECAT","<span style='display: block;line-height:1em;'>Nach Kategorie suchen</span>");
define("_MD_LX_BROWSELETTER","Nach Buchstabe suchen");
define("_MD_LX_CATEGORY","Suchen in Kategorie");
define("_MD_LX_CATS","Kategorien: ");
define("_MD_LX_COUNT","Dieser Eintrag wurde %s mal gelesen.");
define("_MD_LX_CREATE","Den Eintrag einschicken");
define("_MD_LX_DEFINITION","[*] Definition");
define("_MD_LX_DEFINITIONREQ","Glossar-Definitionsanfrage");
define("_MD_LX_DEFINITIONSUB","Glossar-Definitionseinsendung");
define("_MD_LX_DEFINS","Definitionen");
define("_MD_LX_DEFS","Definitionen: ");
define("_MD_LX_DELTERM","Diesen Begriff l&ouml;schen");
define("_MD_LX_EDITTERM","Diesen Begriff bearbeiten");
define("_MD_LX_EMAILLEFT","Der User hat seine E-Mail-Adresse hinterlassen: ");
define("_MD_LX_ENTRIES"," Eintr&auml;ge.");
define("_MD_LX_ENTRIESINCAT","Eintr&auml;ge in diesem Verzeichnis.");
define("_MD_LX_ENTRY","[*] Eintrag");
define("_MD_LX_ENTRYCATEGORY","Kategorie: ");
define("_MD_LX_ENTRYCOUNT","Diese Kategorie hat ");
define("_MD_LX_ENTRYDEFINITION","Definition: ");
define("_MD_LX_ENTRYREFERENCE","Referenz: ");
define("_MD_LX_ENTRYRELATEDURL","Verkn&uuml;pfte Seite: ");
define("_MD_LX_ERRORSAVINGDB","FEHLER: Datenbank wurde nicht aktualisiert aufgrund eines Fehlers!");
define("_MD_LX_GOODDAY","Guten Tag, ");
define("_MD_LX_GOODDAY2","Guten Tag, %s.");
define("_MD_LX_HOME","Homepage");
define("_MD_LX_INALLGLOSSARIES","Eintr&auml;ge in all Ihren Glossaren.");
define("_MD_LX_INTENTRY","Sehen Sie sich diesen Eintrag auf %s an");
define("_MD_LX_INTENTRYFOUND","Hier ist ein interessanter Eintrag den ich auf %s gefunden habe");
define("_MD_LX_INTROREQUEST","Haben Sie in unserem Lexikon nicht die Definition gefunden nach der Sie gesucht haben? F&uuml;llen Sie dieses Formular aus und senden uns den Begriff. Wir suchen nach der Definition und f&uuml;gen sie hinzu.");
define("_MD_LX_LOOKON","Suchen nach");
define("_MD_LX_MAINHEAD","Willkommen auf %s");
define("_MD_LX_MAININTRO","In diesem Bereich finden Sie sowohl unseren Katalog an Glossar-Eintr&auml;gen, als auch die neuesten Eintr&auml;ge in den Kategorien. Klicken Sie auf den Kategorienamen und Sie sehen alle Eintr&auml;ge die mit dieser Kategorie verkn&uuml;pft sind oder klicken Sie auf einen Eintragnamen um den Eintrag direkt zu lesen. Abh&auml;ngig von Ihren Berechtigungen k&ouml;nnen Sie jeden Eintrag bewerten, Benachrichtigungen setzen oder Kommentare schreiben.");
define("_MD_LX_MAINNOSELECTCAT","Sie haben keine g&uuml;ltige Kategorie ausgew&auml;hlt");
define("_MD_LX_MAINNOTOPICS","Es gibt keine Eintr&auml;ge f&uuml;r diese Kategorie");
define("_MD_LX_MESSAGESENT","Nachricht an %s verschickt.");
define("_MD_LX_NO","Nein");
define("_MD_LX_NOENTRIESINCAT","Es liegen f&uuml;r diese Kategorie noch keine Eintr&auml;ge vor.");
define("_MD_LX_NORESULTS","Es gibt keine &Uuml;bereinstimmungen mit dem Suchbegriff. Versuchen Sie einen anderen Suchbegriff.");
define("_MD_LX_NOSEARCHTERM","Sie haben keinen Suchbegriff angegeben. Bitte holen Sie es jetzt nach.");
define("_MD_LX_NOTERMSINLETTER","Es gibt keine Eintr&auml;ge die mit diesem Buchstaben beginnen.");
define("_MD_LX_NOTIFY","Bei Ver&ouml;ffentlichung benachrichtigen?");
define("_MD_LX_NOTIFYONPUB","Der User wollte benachrichtigt werden, wenn wir etwas mit der Definition machen.<br />");
define("_MD_LX_OTHER","Andere");
define("_MD_LX_POPULARENT","Popul&auml;re Eintrage");
define("_MD_LX_POSTED","Ver&ouml;ffentlicht");
define("_MD_LX_PRINTERFRIENDLY","Diesen Eintrag in einem druckoptimierten Format drucken");
define("_MD_LX_PRINTTERM","In druckoptimiertem Format drucken");
define("_MD_LX_RANDOMTERM","Zuf&auml;lliger Begriff");
define("_MD_LX_RECEIVED","Wir haben den Eintrag erhalten. Wir werden ihn schnellstm&ouml;glich bearbeiten.");
define("_MD_LX_RECEIVEDANDAPPROVED","Wir haben den Eintrag erhalten. Da automatische Freigabe eingeschaltet ist, wird der Eintrag sofort ver&ouml;ffentlicht.");
define("_MD_LX_RECENTENT","Aktuelle Eintr&auml;ge");
define("_MD_LX_REFERENCE","Referenz<BR/><span style='font-size: x-small; font-weight: normal; display: block;line-height:1em;'>(Sie k&ouml;nnen optional die Quelle der Definition angeben.)</span>");
define("_MD_LX_REQRCVD","Wir haben Ihre Anfrage erhalten und werden sie schnellstm&ouml;glich bearbeiten.");
define("_MD_LX_REQSEND","Anfrage abgeschickt");
define("_MD_LX_REQTERM","[*] Zu definierender Begriff");
define("_MD_LX_REQUESTDEF","Definition anfragen");
define("_MD_LX_REQUESTFORM","Eine Definition anfragen");
define("_MD_LX_REQUESTSENT","Ihre Anfrage wurde weitergeleitet an den Webmaster von %s.");
define("_MD_LX_RETURN","Zur&uuml;ck");
define("_MD_LX_RETURN2INDEX","Zur&uuml;ck zum Index");
define("_MD_LX_SEARCH","Suchen!");
define("_MD_LX_SEARCHENTRY","Suche nach Eintrag");
define("_MD_LX_SEARCHHEAD","Suchergebnisse");
define("_MD_LX_SECTIONNAME","W&ouml;rterbuch");
define("_MD_LX_SEEMORE","Weitere Definitionen...");
define("_MD_LX_SENDSTORY","Diesen Eintrag an einen Freund schicken");
define("_MD_LX_SENDTOFRIEND","Diesen Begriff an einen Freund schicken");
define("_MD_LX_SENT","Eingeschickt am: ");
define("_MD_LX_SENTCONFIRMMAIL","Ihre Kommentare wurde als Best&auml;tigungsmail an <b>%s</b> geschickt.");
define("_MD_LX_STILLNOTHINGHERE","<h4 style='margin: 0;'>W&ouml;rterbuch leer</h4>Verzeihung: Wir haben noch keine Eintr&auml;ge in unserem W&ouml;rterbuch. Sie k&ouml;nnen uns helfen, in dem Sie Begriffe deren Bedeutung Sie gerne wissen w&uuml;rden, anfragen. Falls Sie ein registrierter User sind, k&ouml;nnen Sie uns auch helfen, in dem Sie Definitionen einschicken die Sie kennen.");
define("_MD_LX_SUB_SMNAME","F&uuml;llen Sie dieses Formular aus um Ihren Eintrag einzuschicken");
define("_MD_LX_SUB_SNEWNAME","Einen Eintrag schicken an %s");
define("_MD_LX_SUB_SNEWNAMEDESC","Bitte f&uuml;llen Sie das folgende Formular aus, um einen neuen Eintrag einzuschicken. Je nach Einstellung wird der Eintrag vorher gepr&uuml;ft oder automatisch freigegeben.");
define("_MD_LX_SUBMIT","Anfrage einschicken");
define("_MD_LX_SUBMITART","Eintrag einschicken");
define("_MD_LX_SUBMITENTRY","Eintrag einschicken");
define("_MD_LX_SUBMITTEDBY","von %s, ");
define("_MD_LX_SUBMITTEDON","am %s");
define("_MD_LX_SUBMITTED","Eingeschickt ");
define("_MD_LX_SUBMITTER","Einsender: ");
//define("_MD_LX_SUBMITTED","Eingeschickt von %s, am %s.");
//define("_MD_LX_TERM","zu suchende Begriff(e)");
define("_MD_LX_TERM","Begriff(e)");
define("_MD_LX_TERMS","Begriffe");
define("_MD_LX_TERMSDEFS","Begriffe und Definitionen");
define("_MD_LX_THANKS1","Vielen Dank f&uuml;r Ihre Beteiligung!<br />");
define("_MD_LX_THANKS2","Vielen Dank, dass Sie nach einer Definition gefragt haben!");
define("_MD_LX_THANKYOU","Vielen Dank, dass Sie sich die Zeit genommen haben eine Definition anzufragen die das Glossar auf %s bereichern wird.");
define("_MD_LX_THEREWERE","Es gibt %s Eintr&auml;ge die dem Suchbegriff entsprechen: <b>%s</b>.");
define("_MD_LX_TIMESREAD","x mal gelesen");
define("_MD_LX_UNKNOWNERROR","FEHLER. Sie werden zur&uuml;ckgeleitet!");
define("_MD_LX_URL","URL<BR><span style='font-size: x-small; font-weight: normal; display: block;line-height:1em;'>(Bitte geben Sie eine g&uuml;ltige URL mit oder ohne HTTP-Pr&auml;fix an)</span>");
define("_MD_LX_USERMAIL","E-Mail");
define("_MD_LX_USERNAME","Name");
define("_MD_LX_WEBMASTER","Webmaster");
define("_MD_LX_WEHAVE","Wir haben aktuell");
define("_MD_LX_WHOASKED","%s fragte nach der Definition für: ");
define("_MD_LX_WHOSUBMITTED","%s schickte die Definition für diesen Begriff ein: ");
define("_MD_LX_YES","Ja");

define("_MD_LX_OPTIONS","Optionen");
define("_MD_LX_DOHTML","HTML erlauben?");
define("_MD_LX_DOSMILEY","Smilies erlauben?");
define("_MD_LX_DOXCODE","XOOPS-Codes erlauben?");
define("_MD_LX_BREAKS","Zeilenumbr&uuml;che erlauben?");
define("_MD_LX_SUBANDREQ","Eingeschickte und angefragte Begriffe");
define("_MD_LX_SUB","Eingeschickte Begriffe: ");
define("_MD_LX_REQ","Angefragte Begriffe: ");
define("_MD_LX_NOSUB","Es gibt momentan keine eingeschickten Begriffe.");
define("_MD_LX_NOREQ","Es gibt momentan keine angefragten Begriffe.");
define("_MD_LX_WRITEHERE","Bitte schreiben Sie hier die Definition.");
define("_MD_LX_GUEST","Gast");
define("_MD_LX_NOCATSINSYSTEM","Keine kategorien im system");
define("_MD_LX_REQUESTSUGGEST","(Klicken Sie die folgenden Wörter an, um eine Definition für die Bezeichnung vorzuschlagen)");
define("_MD_LX_ITEMEXISTS","Der Eintrag existiert bereits. Es war nicht m&ouml;glich, diesen Eintrag zu erstellen!");
define("_MD_LX_ENTRYISOFF","Sorry, der Eintrag ist offline.");


define("_MD_LX_ENTRYISOFF","Sorry, der Eintrag ist offline.");

// syndication
define('_MD_LX_INCATS','Neueste Einträge in %s');
define('_MD_LX_INCATS_DESC','Neueste Einträge in der Kategorie %s von %s');
define('_MD_LX_LASTDESC','Neueste Einträge von der Site %s');

// servicelinks
define("_MD_LX_PRINTTERM2","Druckversion");
define("_MD_LX_SENDTOFRIEND2","Begriff weiterempfehlen");

// bookmarks
define("_LX_BOOKMARK_ME","Diesen Eintrag Bookmarken");
define("_MD_LX_BKMK_TO_MISTERWONG","bei Mister Wong eintragen");
define("_MD_LX_BKMK_TO_BLINKLIST","Bei Blinklist eintragen");
define("_MD_LX_BKMK_TO_DELICIOUS","Bei delicious eintragen");
define("_MD_LX_BKMK_TO_DIGG","Bei Digg eintragen");
define("_MD_LX_BKMK_TO_NEWSVINE","Bei Newsvine eintragen");
define("_MD_LX_BKMK_TO_REDDIT","Bei Reddit eintragen");
define("_MD_LX_BKMK_TO_GOOGLE","Bei Google Bookmarks eintragen");
define("_MD_LX_BKMK_TO_TECHNORATI","Bei Technorati eintragen");
define("_MD_LX_BKMK_TO_FARK","Bei Fark eintragen");
define("_MD_LX_BKMK_TO_FACEBOOK","mit Facebook-Freunden teilen");
define("_MD_LX_BKMK_TO_TWITTER","Twittern");
define("_MD_LX_BKMK_TO_DIIGO","Bei DIIGO eintragen");
define("_MD_LX_BKMK_TO_STUDIVZ","Bei StudiVZ eintragen");
define("_MD_LX_BKMK_TO_LINKARENA","Bei Linkarena eintragen");
define("_MD_LX_BKMK_TO_ONEVIEW","Bei Oneview eintragen");
define("_MD_LX_BKMK_TO_STUMBLEUPON","Bei Stumbleupon eintragen");

//categories

define("_MD_LX_NOSHOTS","Es gibt keine Screenshots");

define("_MD_LX_NOSHOTS","No Screenshots Available");
define("_MD_LX_SINGLECAT","The module is defined to have no categories.");


// authorprofile
define("_MD_LX_AUTHORPROFILE","Begriffe des Autors");
define("_MD_LX_AUTHORPROFILETEXT","Mehr Begriffe dieses Autors");
define("_MD_LX_AUTHORPROFILENOTERM","Benutzer %s hat noch keine Begriffe eingeschickt.");
define('_MD_LX_CONTRIBUTORS',"Lexikon Autorenliste");
define('_MD_LX_CONTRIBUTORSLIST',"Hier eine Liste der Autoren des Lexikons dieser Site. <BR>Klicken Sie den Benutzernamen um ihre/seine Beiträge zu sehen.");
define("_MD_LX_AUTHORTERMS","%s hat %s Definitionen für das Lexikon eingeschickt.");
define("_MD_LX_AUTHORWAITING"," %s ihrer/seiner Definitionen warten noch auf Freigabe.");
define("_MD_LX_NOWAITINGTERMS","Keine ihrer/seiner Definitionen warten auf Freigabe.");
define('_MD_LX_HITS','Hits');
define('_MD_LX_DATETERM','Datum');
define("_MD_LX_AUTHOR","Benutzername");
define("_MD_LX_TOTAL","Beitr&auml;ge");
define("_MD_LX_MAIL","E-Mail");
define("_MD_LX_PM","Private Nachricht");
define("_MD_LX_LOCATION","Wohnort");
define("_MD_LX_WWW","Website");

//webmastercontent

define("_MD_LX_RANDOMIZE","n&auml;chster Eintrag");
define("_MD_LX_TERMOFTHEDAY","Term of the day");
define("_MD_LX_SYNDICATION","Webmastercontent");
define("_MD_LX_SYNCODE","&lt;iframe style='background-color: #FFFFFF'; marginwidth=0 marginheight=0 width='220' height='260' src='%s/modules/%s/syndication.php' frameborder='0' topmargin='0' leftmargin='0' scrolling='no' allowtransparency='true' /&gt; [Your user agent does not support frames or is currently configured not to display frames.]</iframe>");
define("_MD_LX_SUB_SYNNAME","Gratis Webmastercontent f&uuml;r ihre Site");
define("_MD_LX_INTROCONTENTSYN","Haben Sie Gefallen an unseren Glossar-Einträgen gefunden? Sie können Glossar-Inhalte von %s auf Ihrer website einbinden. Dazu f&uuml;gen Sie diesen Quelltext auf ihrer website ein.");
define("_MD_LX_POWER","Powered by ");
define("_MD_LX_SYNEXPLAIN1","Klicken Sie auf die Schaltfläche 'alles markieren' und kopieren Sie den HTML-Code mit Strg+C.");
define("_MD_LX_SYNEXPLAIN2","Fügen Sie den HTML-Code auf Ihrer Seite ein (mit Strg+V bzw. Kontextmenü der rechten Maustaste (->Einfügen)).");
define("_MD_LX_SYNEXPLAIN3","Sie können Layout und erscheinungsbild jederzeit Ihrem persönlichen Geschmack anpassen.");

define("_MD_LX_RANDOMIZE","nächster Eintrag");
define("_MD_LX_TERMOFTHEDAY","Term of the day");
define("_MD_LX_SYNDICATION","Webmastercontent");
define("_MD_LX_SYNCODE","&lt;iframe style='background-color: #FFFFFF'; marginwidth=0 marginheight=0 width='220' height='260' src='%s/modules/%s/syndication.php' frameborder='0' topmargin='0' leftmargin='0' scrolling='no' allowtransparency='true' /&gt; [Your user agent does not support frames or is currently configured not to display frames.]</iframe>");
define("_MD_LX_SUB_SYNNAME","Gratis Webmastercontent f&uuml;r ihre Site");
define("_MD_LX_INTROCONTENTSYN","Haben Sie Gefallen an unseren Glossar-Einträgen gefunden? Sie können Glossar-Inhalte von %s auf Ihrer Website, Blog, etc. einbinden. Dazu f&uuml;gen Sie diesen Quelltext auf ihrer Website ein.");
define("_MD_LX_POWER","Powered by ");
define("_MD_LX_SYNEXPLAIN1","Klicken Sie auf die Schaltfläche 'alles markieren' und kopieren Sie den HTML-Code mit Strg+C.");
define("_MD_LX_SYNEXPLAIN2","Fügen Sie den HTML-Code auf Ihrer Seite ein (mit Strg+V bzw. Kontextmenü der rechten Maustaste (->Einfügen)).");
define("_MD_LX_SYNEXPLAIN3","Sie können Layout und erscheinungsbild jederzeit Ihrem persönlichen Geschmack anpassen.");


// mailer admin side
define("_MD_LX_SUBJECTREQ","Ihre Definitions-Anfrage bei %s");
define("_MD_LX_SUBJECTSUB","Ihre Definitions-Einsendung bei %s");
define("_MD_LX_SUBJECTMOD","Ihre Definitions-Änderung bei %s");
define("_MD_LX_CONFREQ","Anfrage freigeschaltet!");//confirmation texts I.
define("_MD_LX_CONFSUB","Einsendung freigeschaltet!");
define("_MD_LX_CONFMOD","&Auml;nderung übernommen!");
define("_MD_LX_APPROVED","Ihre Anfrage wurde vom Webmaster von %s &uuml;bernommen und wird ab sofort online im Lexikon erscheinen.");//confirmation text II.
define("_MD_LX_REGARDS","Mit freundlichen Gr&uuml;ssen / Best Regards");
define("_MD_LX_DEFINITIONMOD","Lexikon &Auml;nderungseinsendung");
// user side
define("_MD_LX_THANKS3","Vielen Dank für die Definitions-Einsendung!");
define("_MD_LX_THANKSREVIEW","Vielen Dank für die Änderungs-Einsendung!");
define("_MD_LX_THANKYOU2","Vielen Dank, dass Sie sich die Zeit genommen haben eine Definition zu &auml;ndern.\nSie erhalten eine weitere Nachricht sobald der Eintrag freigeschaltet wurde.");// on mod
define("_MD_LX_THANKYOU3","Vielen Dank, dass Sie sich die Zeit genommen haben eine Definition einzusenden.\nSie erhalten eine weitere Nachricht sobald der Eintrag freigeschaltet wurde.");// on sub
define("_MD_LX_SUBMISSIONSENT","Ihre Einsendung wurde weitergeleitet an den Webmaster von %s.");//on sub

?>