<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// deutscher Sprachfile �bersetzt von: studioC - Michael Hokamp - http://www.myxoops.org
// Module Info
// Name des Moduls
define("_MI_CONTACT_NAME","Kontakt formular");
// Kurze Beschreibug des Moduls
define("_MI_CONTACT_DESC","Kontakt formular");

define('_MI_CONTACT_SETTINGS', 'Pode�avanje');
define('_MI_CONTACT_SETTINGS_DSC', 'Pode�avanje polja folmulara');
define('_MI_CONTACT_GEN', 'Op�te pode�avanje' );
define('_MI_CONTACT_GEN_DSC', 'Op�te pode�avanje za Upustva-Tekst i eMail' );

// Einstellungen im Admin Bereich
define("_MI_CONTACT_ALLOWSENDCONFIRM", "Potvrdni mail omogu�i?" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC", "DA - Poka�i posjetiocu Checkbox "
                                 ."kod aktiviranja Checkbox-a  po�aljilac �e dobiti potvrdni mail." );

define("_MI_CONTACT_GETICQ", "Polje za ICQ?" );
define("_MI_CONTACT_GETICQDSC", "DA - Polje za ICQ poka�i!" );



define("_MI_CONTACT_GETURL", "Polje za Url?" );
define("_MI_CONTACT_GETURLDSC", "DA - Polje za URL poka�i!" );

define("_MI_CONTACT_GETCOMPANY", "Polje za Firmu?" );
define("_MI_CONTACT_GETCOMPANYDSC", "DA - Polje za Firmu poka�i!" );

define("_MI_CONTACT_GETLOC", "Polje za Mjesto boravka?" );
define("_MI_CONTACT_GETLOCDSC", "DA - Polje za Mjesto boravka poka�i!" );

define("_MI_CONTACT_ADDRESS", "Polje za Adresu?" );
define("_MI_CONTACT_ADDRESSDSC", "DA - Polje za Adresu poka�i!" );

define("_MI_CONTACT_INTROHEAD", "Uvod i tekst za upustvo?" );
define("_MI_CONTACT_INTROHEAD_DESC", "Uvod je ispred <b>upustva</b>");

define("_MI_CONTACT_INTRO", "Upustvo" );
define("_MI_CONTACT_INTRO_DESC", "Ovo upustvo stoji ustvari u <b>Kontakt formularu</b>. Sadr�aji na koje se misli su npr. Pozdrav, Adresa za kontakt ili upustvo i opis dolaska na odre�eno mjesto." );
							   
define("_MI_CONTACT_SECURITY", "Sigurnosna-Provjera?" );
define("_MI_CONTACT_SECURITYDSC", "DA - <b>Sigurnosnu-Provjeru</b> aktiviraj!<br />"
	                             ."Aktiviranje treba da SPAM preko <b>Kontakt formulara</b> ote�a!" );
								 
define("_MI_CONTACT_SITEKEY", "Slu�ajni klju�?" );
define("_MI_CONTACT_SITEKEYDSC", "Slu�ajni izbor brojeva i slova za <b>Sigurnosnu-Provjeru.</b>" );
								
define("_MI_CONTACT_HEAD", "Uvod u Kontakt folmular?" );
define("_MI_CONTACT_HEADDSC", "Uvod u Kontakt folmular");

define("_MI_CONTACT_THANKYOU", "Hvala-Post?");
define("_MI_CONTACT_THANKYOUDSC", "Odgovor po�aljiocu!");

define("_MI_CONTACT_TIMEOUT", "Timeout?");
define("_MI_CONTACT_TIMEOUTDSC", "Broj sekundi za prikaz zahvalnosti!");																						   

define("_MI_CONTACT_SHOWDEPT", "Prikaz Podru�ja-Izabranog?");
define("_MI_CONTACT_SHOWDEPTDSC", "DA - Prika�i izabrano polje za definisano podru�je<br />"
                                 ."Ako nisu podru�ja data, onda �e sva pitanja preko Kontakt formulara biti na Admin-email poslati." );

define("_MI_CONTACT_DEPTTITLE", "Podru�je-Uvoda?");
define("_MI_CONTACT_DEPTTITLEDSC", "Ozna�i ime polja zaizabrano izabrano podru�je.");

define("_MI_CONTACT_DEPT", "Podru�ja?" );
define("_MI_CONTACT_DEPTDSC", "Ovde mo�e� razne primaoce sa li�nom njihovom Email-Adresom za podru�je definisati."
							 ." Podru�je i Mail podru�je sa zarezom i bez praznog razmaka upi�i!<br /><br />"
							 ." Vi�e podru�ja sa ovom oznakom '|'rastavi bez praznog razmaka!" );
							 
define("_MI_CONTACT_VALIDATEDOMAIN", "Email-Domain od po�aljioca provjeri?");
define("_MI_CONTACT_VALIDATEDOMAINDSC", "DA - Dodatna provjera zar Domain.<br />"
                                       ."NE - Jednostavna provjera datog eMail-a.");
									   
define("_MI_CONTACT_SHOWMOREINFO", "Dodatni Info?" );
define("_MI_CONTACT_SHOWMOREINFODSC", "DA - Prika�i podru�je sa Checkboxom");									   							 

define("_MI_CONTACT_MOREINFOTITLE", "Ime polja za dodatniinfo?" );
define("_MI_CONTACT_MOREINFOTITLEDSC", "Ozna�i ime polja za dodatni info u Kontakt formularu" );

define("_MI_CONTACT_MOREINFO", "Dodatni info Opcije");
define("_MI_CONTACT_MOREINFODSC", "Ovde mo�e Po�aljioc dodatne Opcije aktivirati, ako on npr. tra�i da ga nazove�, ili daljnje dodatne informacije da mu po�alje�. Dodatne Opcije sa ovakvom oznakom '|' bez praznog razmaka rastavi.");
								
?>