<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// deutscher Sprachfile übersetzt von: studioC - Michael Hokamp - http://www.myxoops.org
// Module Info
// Name des Moduls
define("_MI_CONTACT_NAME","Kontaktformular");
// Kurze Beschreibug des Moduls
define("_MI_CONTACT_DESC","Kontaktformular");

define('_MI_CONTACT_SETTINGS','Einstellungen');
define('_MI_CONTACT_SETTINGS_DSC','Einstellungen der Formularfelder');
define('_MI_CONTACT_GEN','Allgemein' );
define('_MI_CONTACT_GEN_DSC','Allgemeine Einstellungen für Einleitungs-Text und eMail' );

// Config stuff
define("_MI_CONTACT_GETICQ","Feld ICQ?" );
define("_MI_CONTACT_GETICQDSC","JA - Feld ICQ zeigen!" );

define("_MI_CONTACT_ALLOWSENDCONFIRM","Bestätigungsmail ermöglichen?" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC","JA - zeigt dem Absender eine Checkbox "
                                 ."bei Aktivierung erhält der Absender eine Bestätigungsmail." );

define("_MI_CONTACT_GETURL","Feld Url?" );
define("_MI_CONTACT_GETURLDSC","JA - Feld URL zeigen!" );

define("_MI_CONTACT_GETCOMPANY","Feld Firma?" );
define("_MI_CONTACT_GETCOMPANYDSC","JA - Feld Firma zeigen!" );

define("_MI_CONTACT_GETLOC","Feld Ort?" );
define("_MI_CONTACT_GETLOCDSC","JA - Feld ORT zeigen!" );

define("_MI_CONTACT_ADDRESS","Feld Anschrift?" );
define("_MI_CONTACT_ADDRESSDSC","JA - Feld Anschrit zeigen!" );

define("_MI_CONTACT_INTROHEAD","Überschrift Einleitungstext?" );
define("_MI_CONTACT_INTROHEAD_DESC","Diese Überschrift steht vor dem <b>Einleitungstext</b>");
define("_MI_CONTACT_INTRO_DEFAULT","Bitte Formular ausfüllen und absenden.<br />Wir melden uns so rasch als möglich!");

define("_MI_CONTACT_INTRO","Einleitungstext" );
define("_MI_CONTACT_INTRO_DESC","Dieser Einleitungstext steht vor dem eigentlichen <b>Kontaktformular</b>. Denkbare Inhalte sind z.B. ein Begrüßungstext, Kontaktanschriften oder die Beschreibung eines Anfahrtsweges." );
							   
define("_MI_CONTACT_SECURITY","Sicherheits-Prüfung?" );
define("_MI_CONTACT_SECURITYDSC","JA - <b>Sicherheits-Prüfung</b> aktivieren!<br />"
	                             ."Eine Aktivierung sollte SPAM über das <b>Kontaktformular</b> erschweren!" );
								 
define("_MI_CONTACT_SITEKEY","Zufälliger Schlüssel?" );
define("_MI_CONTACT_SITEKEYDSC","Zufällige Auswahl an Zahlen und Buchstaben für die <b>Sicherheits-Prüfung.</b>" );
								
define("_MI_CONTACT_HEAD","Überschrift Kontaktformular?" );
define("_MI_CONTACT_HEADDSC","Überschrift Kontaktformular");
define("_MI_CONTACT_HEADDEFAULT","Kontakt Formular");

define("_MI_CONTACT_THANKYOU","Danke-Nachricht?");
define("_MI_CONTACT_THANKYOUDSC","Nachricht and den Absender nach dem Verschicken der Nachricht!");
define("_MI_CONTACT_THANKYOUDEFAULT","Danke für Ihre Nachricht. Wir melden uns so rasch als möglich!");

define("_MI_CONTACT_TIMEOUT","Timeout?");
define("_MI_CONTACT_TIMEOUTDSC","Anzahl der Sekunden zur Anzeige der Dankesnachricht!");																						   

define("_MI_CONTACT_SHOWDEPT","Anzeige Bereichs-Auswahl?");
define("_MI_CONTACT_SHOWDEPTDSC","JA - Zeige ein Auswahlfeld für definierte Bereiche<br />"
                                 ."Wenn keine Bereiche angegeben sind, werden alle Anfragen über das Kontaktformular an die Admin-email geschickt." );

define("_MI_CONTACT_DEPTTITLE","Bereichs-Überschrift?");
define("_MI_CONTACT_DEPTTITLEDSC","Bezeichnung des Feldnamens für die Bereichsauswahl im Kontaktformular.");
define("_MI_CONTACT_DEPTTITLEDEFAULT","Abteilung");

define("_MI_CONTACT_DEPT","Bereiche?" );
define("_MI_CONTACT_DEPTDSC","Hier können unterschiedliche Empfänger mit eigener Email-Adresse für einen Bereich definiert werden."
							 ." Bitte Bereich und Bereichsemail mit Komma ohne Leerzeichen trennen!<br /><br />"
							 ." Mehrere Bereiche mit einer Pipe '|' ohne Leerzeichen voneinander trennen!"
							 ."Definiere jeden Bereich / eMail wie folgt:<br /><br />"
							 ."Bereich1,eMail1|Bereich2,eMail2|Bereich3,eMail usw. - jeder Bereich und eMail muß mit einem<br />"
							 ."Beistrich ',', und jede Kombination Bereich/eMail muß mit einer Pipe '|' getrennt werden!" );
							 
define("_MI_CONTACT_VALIDATEDOMAIN","Email-Domain des Absenders prüfen?");
define("_MI_CONTACT_VALIDATEDOMAINDSC","JA - Erweiterte Prüfung der Domain.<br />"
                                       ."NEIN - Einfache Prüfung der eMail Eingabe.");
									   
define("_MI_CONTACT_SHOWMOREINFO","Zusätzliche Info?" );
define("_MI_CONTACT_SHOWMOREINFODSC","JA - Anzeige eines Bereichs mit Checkboxen");									   							 

define("_MI_CONTACT_MOREINFOTITLE","Feldname Zusatzinfo?" );
define("_MI_CONTACT_MOREINFOTITLEDSC","Bezeichnung des Feldnamens für die Zusatzinfo im Kontaktformular" );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Mehr Information anfordern");

define("_MI_CONTACT_MOREINFO","Zusatzinfo Optionen");
define("_MI_CONTACT_MOREINFODSC","Hier kann der Absender die zusätzlichen Optionen aktivieren, wenn er z.b. um Rückruf bittet, weitere Informationen zugeschickt haben möchte etc. Zusätzliche Optionen bitte mit einer Pipe '|' ohne Leerzeichen voneinander trennen.");
								
?>