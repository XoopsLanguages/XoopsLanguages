<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// deutscher Sprachfile �bersetzt von: studioC - Michael Hokamp - http://www.myxoops.org
// Module Info
// Name des Moduls
define("_MI_CONTACT_NAME","Kontaktformular");
// Kurze Beschreibug des Moduls
define("_MI_CONTACT_DESC","Kontaktformular");

define('_MI_CONTACT_SETTINGS', 'Einstellungen');
define('_MI_CONTACT_SETTINGS_DSC', 'Einstellungen der Formularfelder');
define('_MI_CONTACT_GEN', 'Allgemein' );
define('_MI_CONTACT_GEN_DSC', 'Allgemeine Einstellungen f�r Einleitungs-Text und eMail' );

// Config stuff
define("_MI_CONTACT_GETICQ", "Feld ICQ?" );
define("_MI_CONTACT_GETICQDSC", "JA - Feld ICQ zeigen!" );

define("_MI_CONTACT_ALLOWSENDCONFIRM", "Best�tigungsmail erm�glichen?" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC", "JA - zeigt dem Absender eine Checkbox "
                                 ."bei Aktivierung erh�lt der Absender eine Best�tigungsmail." );

define("_MI_CONTACT_GETURL", "Feld Url?" );
define("_MI_CONTACT_GETURLDSC", "JA - Feld URL zeigen!" );

define("_MI_CONTACT_GETCOMPANY", "Feld Firma?" );
define("_MI_CONTACT_GETCOMPANYDSC", "JA - Feld Firma zeigen!" );

define("_MI_CONTACT_GETLOC", "Feld Ort?" );
define("_MI_CONTACT_GETLOCDSC", "JA - Feld ORT zeigen!" );

define("_MI_CONTACT_ADDRESS", "Feld Anschrift?" );
define("_MI_CONTACT_ADDRESSDSC", "JA - Feld Anschrit zeigen!" );

define("_MI_CONTACT_INTROHEAD", "�berschrift Einleitungstext?" );
define("_MI_CONTACT_INTROHEAD_DESC", "Diese �berschrift steht vor dem <b>Einleitungstext</b>");
define("_MI_CONTACT_INTRO_DEFAULT","Bitte Formular ausf�llen und absenden.<br />Wir melden uns so rasch als m�glich!");

define("_MI_CONTACT_INTRO", "Einleitungstext" );
define("_MI_CONTACT_INTRO_DESC", "Dieser Einleitungstext steht vor dem eigentlichen <b>Kontaktformular</b>. Denkbare Inhalte sind z.B. ein Begr��ungstext, Kontaktanschriften oder die Beschreibung eines Anfahrtsweges." );
							   
define("_MI_CONTACT_SECURITY", "Sicherheits-Pr�fung?" );
define("_MI_CONTACT_SECURITYDSC", "JA - <b>Sicherheits-Pr�fung</b> aktivieren!<br />"
	                             ."Eine Aktivierung sollte SPAM �ber das <b>Kontaktformular</b> erschweren!" );
								 
define("_MI_CONTACT_SITEKEY", "Zuf�lliger Schl�ssel?" );
define("_MI_CONTACT_SITEKEYDSC", "Zuf�llige Auswahl an Zahlen und Buchstaben f�r die <b>Sicherheits-Pr�fung.</b>" );
								
define("_MI_CONTACT_HEAD", "�berschrift Kontaktformular?" );
define("_MI_CONTACT_HEADDSC", "�berschrift Kontaktformular");
define("_MI_CONTACT_HEADDEFAULT","Kontakt Formular");

define("_MI_CONTACT_THANKYOU", "Danke-Nachricht?");
define("_MI_CONTACT_THANKYOUDSC", "Nachricht and den Absender nach dem Verschicken der Nachricht!");
define("_MI_CONTACT_THANKYOUDEFAULT", "Danke f�r Ihre Nachricht. Wir melden uns so rasch als m�glich!");

define("_MI_CONTACT_TIMEOUT", "Timeout?");
define("_MI_CONTACT_TIMEOUTDSC", "Anzahl der Sekunden zur Anzeige der Dankesnachricht!");																						   

define("_MI_CONTACT_SHOWDEPT", "Anzeige Bereichs-Auswahl?");
define("_MI_CONTACT_SHOWDEPTDSC", "JA - Zeige ein Auswahlfeld f�r definierte Bereiche<br />"
                                 ."Wenn keine Bereiche angegeben sind, werden alle Anfragen �ber das Kontaktformular an die Admin-email geschickt." );

define("_MI_CONTACT_DEPTTITLE", "Bereichs-�berschrift?");
define("_MI_CONTACT_DEPTTITLEDSC", "Bezeichnung des Feldnamens f�r die Bereichsauswahl im Kontaktformular.");
define("_MI_CONTACT_DEPTTITLEDEFAULT", "Abteilung");

define("_MI_CONTACT_DEPT", "Bereiche?" );
define("_MI_CONTACT_DEPTDSC", "Hier k�nnen unterschiedliche Empf�nger mit eigener Email-Adresse f�r einen Bereich definiert werden."
							 ." Bitte Bereich und Bereichsemail mit Komma ohne Leerzeichen trennen!<br /><br />"
							 ." Mehrere Bereiche mit einer Pipe '|' ohne Leerzeichen voneinander trennen!"
							 ."Definiere jeden Bereich / eMail wie folgt:<br /><br />"
							 ."Bereich1,eMail1|Bereich2,eMail2|Bereich3,eMail usw. - jeder Bereich und eMail mu� mit einem<br />"
							 ."Beistrich ',', und jede Kombination Bereich/eMail mu� mit einer Pipe '|' getrennt werden!" );
							 
define("_MI_CONTACT_VALIDATEDOMAIN", "Email-Domain des Absenders pr�fen?");
define("_MI_CONTACT_VALIDATEDOMAINDSC", "JA - Erweiterte Pr�fung der Domain.<br />"
                                       ."NEIN - Einfache Pr�fung der eMail Eingabe.");
									   
define("_MI_CONTACT_SHOWMOREINFO", "Zus�tzliche Info?" );
define("_MI_CONTACT_SHOWMOREINFODSC", "JA - Anzeige eines Bereichs mit Checkboxen");									   							 

define("_MI_CONTACT_MOREINFOTITLE", "Feldname Zusatzinfo?" );
define("_MI_CONTACT_MOREINFOTITLEDSC", "Bezeichnung des Feldnamens f�r die Zusatzinfo im Kontaktformular" );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Mehr Information anfordern");

define("_MI_CONTACT_MOREINFO", "Zusatzinfo Optionen");
define("_MI_CONTACT_MOREINFODSC", "Hier kann der Absender die zus�tzlichen Optionen aktivieren, wenn er z.b. um R�ckruf bittet, weitere Informationen zugeschickt haben m�chte etc. Zus�tzliche Optionen bitte mit einer Pipe '|' ohne Leerzeichen voneinander trennen.");
								
?>