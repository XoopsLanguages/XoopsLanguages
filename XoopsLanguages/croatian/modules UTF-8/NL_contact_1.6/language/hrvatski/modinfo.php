<?php
// $Id: modinfo.php,v 1.8 2004/12/26 19:11:54 onokazu Exp $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Dražen Punčec & Ivan Kosak / 2.3.2009.
// Module Info

// The name of this module
define("_MI_CONTACT_NAME","Kontakt");
// A brief description of this module
define("_MI_CONTACT_DESC","Stranica email kontakta");

define('_MI_CONTACT_SETTINGS','Postavke');
define('_MI_CONTACT_SETTINGS_DSC','Kontaktirajte nas o kolekciji postavka');
define('_MI_CONTACT_GEN','Općenito' );
define('_MI_CONTACT_GEN_DSC','Općenite postavke za uvodni predmet/email definicije' );

// Config stuff
define("_MI_CONTACT_GETICQ","Skupljaj ICQ" );
define("_MI_CONTACT_GETICQDSC","Da - traži ICQ" );

define("_MI_CONTACT_ALLOWSENDCONFIRM","Dopusti potvrdu poruke" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC","Da - Prikaži check box prema pošiljatelju "
                                 ."poslan je potvrdni email prema njemu." );

define("_MI_CONTACT_GETURL","Skupljaj korisničke URL" );
define("_MI_CONTACT_GETURLDSC","Da - traži korisnike URL" );

define("_MI_CONTACT_GETCOMPANY","Skupljaj korisnička imena poduzeća" );
define("_MI_CONTACT_GETCOMPANYDSC","Da - traži korisnička imena poduzeća" );

define("_MI_CONTACT_GETLOC","Skupljaj korisničku lokaciju" );
define("_MI_CONTACT_GETLOCDSC","Da - traži korisnike lokaciju, ne pune adrese" );

define("_MI_CONTACT_ADDRESS","Skupljaj korisničke adrese" );
define("_MI_CONTACT_ADDRESSDSC","Da - traži korisničke adrese" );

define("_MI_CONTACT_INTROHEAD","Uvodni naslov" );
define("_MI_CONTACT_INTROHEAD_DESC","Ovo je naslov upotrebljen za <b>Uvodni tekst</b>");

define("_MI_CONTACT_INTRO","Uvodni tekst" );
define("_MI_CONTACT_INTRO_DESC","Tekst koji će biti dodan na početku <b>Kontaktirajte nas</b><br />"
                               ."dialog.  I.e. - Tekst dobrodošlice, adrese, brojevi telefona" );
							   
define("_MI_CONTACT_SECURITY","Sigurnosna provjera" );
define("_MI_CONTACT_SECURITYDSC","Da - Uključi <b>Sigurnosmu provjeru</b> za slanje potvrde kontakta korisnicima.<br />"
	                             ."Ovo će također pomoći uklanjanju <b>Kontaktirajte nas</b> SPAM-a!" );
								 
define("_MI_CONTACT_SITEKEY","Slučajni ključ" );
define("_MI_CONTACT_SITEKEYDSC","Stvara bilo koje nasumične mješane znakove ili brojeve za <b>Sigunosnu provjeru</b><br />"
                                ."više zrnato i slučajno!" );
								
define("_MI_CONTACT_HEAD","Kontakt zaglavlje" );
define("_MI_CONTACT_HEADDSC","Zaglavlje za obrazac kontakta");

define("_MI_CONTACT_THANKYOU","Poruka zahvale");
define("_MI_CONTACT_THANKYOUDSC","Poruka zahvale prema pošaljatelju poruke kontakta");

define("_MI_CONTACT_TIMEOUT","Vrijeme stranice preusmjeravanja");
define("_MI_CONTACT_TIMEOUTDSC","Ovo je iznos sekundi prikaza stranice preusmjerivanja poslije slanja poruke");																						   

define("_MI_CONTACT_SHOWDEPT","Prikaz \"Odj./Subjekt\" Sekcije");
define("_MI_CONTACT_SHOWDEPTDSC","Da - Prikaži padajući izbornik definirane odjeljenja/subjekti<br />"
                                 ."Ako nema prikazanih rubrika, svi email kontakti su poslani prema stranici email adrese" );

define("_MI_CONTACT_DEPTTITLE","\"Odj/Subjekt\" Naslov");
define("_MI_CONTACT_DEPTTITLEDSC","Prikazani naslov \"Odj/Subjekt\" sekcije od obrasca kontakta");

define("_MI_CONTACT_DEPT","Odjeli" );
define("_MI_CONTACT_DEPTDSC","Odjeli omogućavaju određivanje odjel/email kombinacije.  Korisnici izabiru<br />"
                             ."u koji od ponuđenih odjela će njihova kontakt informacija biti poslana prema odgovarajućoj<br />"
							 ."email adresi koju vi određujete.<br /><br />"
							 ."Odredi svaki odjel/email kako slijedi:<br /><br />"
							 ."odjel1,email1|odjel2,email2|odjel3,email3 etc. - svaki odjel i email mora biti odvojen<br />"
							 ."zarezom ',', i svaki odjel email kombinacija mora biti razdvojena okomitom crtom '|'" );
							 
define("_MI_CONTACT_VALIDATEDOMAIN","Potvrda email domene");
define("_MI_CONTACT_VALIDATEDOMAINDSC","Da - Uključi \"duboka-provjera\" sa domain.tld u danoj email adresi.<br />"
                                       ."Ne - Jednostavna provjera unešene email adrese.");
									   
define("_MI_CONTACT_SHOWMOREINFO","Prikaži \"više informacija\" sekcije" );
define("_MI_CONTACT_SHOWMOREINFODSC","Da - Pokaži sekciju s višeizbornim-checkbox-om vaše definirane \"Više informacija\"");									   							 

define("_MI_CONTACT_MOREINFOTITLE","\"Više informacija\" Naslov" );
define("_MI_CONTACT_MOREINFOTITLEDSC","Prikaži naslov u \"Više informacija\" sekcije od obrazca kontakta" );

define("_MI_CONTACT_MOREINFO","\"Više informacija\" Stavke");
define("_MI_CONTACT_MOREINFODSC","\"Više informacija\" stavke, dopustite prikaz stavke da korisnici mogu provjeriti<br />"
                                 ."ima li puno interesa ili trabate više informacija.  Ovo je način usmjeravanja vaših mušterija<br />"
								 ."ako je to onoo što želite.  Kao primjer komercijalne primjene - prodavač može<br />"
								 ."želi ponuditi besplatnu informaciju, dopustite korisniku da kontaktira prodavača prvi..  Ovo je<br />"
								 ." također način skupljanja mušterija.<br /><br />"
								 ."Odredite svaku stavku kako slijedi:<br /><br />"
								 ."stavka1|stavka2|stavka3 itd. - svaka stavka mora biti razdvojena okomitom crtom '|'");
								
?>