<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:56:06 dap997 Exp $
// Module Info - T³umaczenie dap977 26.II.2006 dla wersji 1.6

// The name of this module
define("_MI_CONTACT_NAME"                ,"Kontakt");
// A brief description of this module
define("_MI_CONTACT_DESC"                ,"Strona do kontaktu przez e-mail");

define('_MI_CONTACT_SETTINGS'            ,'Ustawienia');
define('_MI_CONTACT_SETTINGS_DSC'        ,'Ustawienia dla modu³u');
define('_MI_CONTACT_GEN'                 ,'Ogólne' );
define('_MI_CONTACT_GEN_DSC'             ,'Ustawienia ogólne dla wprowadzenie i definicji e-maili' );

// Config stuff
define("_MI_CONTACT_GETICQ"              ,"Przesy³anie GG" );
define("_MI_CONTACT_GETICQDSC"           ,"Tak - zapytaj o numer Gadu-Gadu." );

define("_MI_CONTACT_ALLOWSENDCONFIRM"    ,"Umo¿liwiæ potwierdzenie" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC" ,"Tak - poka¿e check box dla u¿ytkownika, "
                                         ."którego zaznaczenie umo¿liwi przes³anie e-maila z potwierdzeniem." );

define("_MI_CONTACT_GETURL"              ,"Przesy³anie adresu strony" );
define("_MI_CONTACT_GETURLDSC"           ,"Tak - zapytaj o adres strony." );

define("_MI_CONTACT_GETCOMPANY"          ,"Przesy³anie nazwy firmy" );
define("_MI_CONTACT_GETCOMPANYDSC"       ,"Tak - zapytaj o nazwê firmy." );

define("_MI_CONTACT_GETLOC"              ,"Przesy³anie nazwy miejscowo¶ci" );
define("_MI_CONTACT_GETLOCDSC"           ,"Tak - zapytaj o miejscowo¶æ sk±d pochodzi u¿ytkownik." );

define("_MI_CONTACT_ADDRESS"             ,"Przesy³anie adresu u¿ytkownika" );
define("_MI_CONTACT_ADDRESSDSC"          ,"Tak - zapytaj o adres u¿ytkownika." );

define("_MI_CONTACT_INTROHEAD"           ,"Nag³ówek wprowadzenia" );
define("_MI_CONTACT_INTROHEAD_DESC"      ,"Ten nag³ówek bêdzie pokazany przy <b>Tek¶cie wprowadzaj±cym</b>.");
define("_MI_CONTACT_INTRO_DEFAULT"       ,"Proszê wype³niæ ten formularz a nastêpnie go wys³aæ. Odpowiemy na niego tak szybko jak to bêdzie mo¿liwe.");

define("_MI_CONTACT_INTRO"               ,"Tekst wprowadzenia" );
define("_MI_CONTACT_INTRO_DESC"          ,"Tekst pokazywany na pocz±tku modu³u <b>Kontakt</b>,"
                                         ." mo¿e zawieraæ tekst powitalny, adresy e-mail, numer telefonu." );
							   
define("_MI_CONTACT_SECURITY"            ,"Zabezpieczenie" );
define("_MI_CONTACT_SECURITYDSC"         ,"Tak - w³±cz <b>Zabezpieczenie</b> aby sprawdziæ prawdziwo¶æ u¿ytkownika przed wys³aniem e-maila."
	                                     ." Powinno ono pomóc w walce ze spamem wysy³anym przez modu³ <b>Kontakt</b>." );
								 
define("_MI_CONTACT_SITEKEY"             ,"Przypadkowy klucz" );
define("_MI_CONTACT_SITEKEYDSC"          ,"Tworzy przypadkowy zestaw znaków i cyfr, dziêki czemu <b>Zabezpieczenie</b> "
                                         ."jest bardziej niezawodne!" );
								
define("_MI_CONTACT_HEAD"                ,"Nag³ówek formularza" );
define("_MI_CONTACT_HEADDSC"             ,"Nag³ówek formularza kontaktowego.");
define("_MI_CONTACT_HEADDEFAULT"         ,"Formularz kontaktowy");

define("_MI_CONTACT_THANKYOU"            ,"Dziêkujemy za wiadomo¶æ");
define("_MI_CONTACT_THANKYOUDSC"         ,"Twoja wiadomo¶æ do u¿ytkownika z podziêkowaniami za jej wys³anie.");
define("_MI_CONTACT_THANKYOUDEFAULT"     ,"Dziêkujemy za wiadomo¶æ. Odpowiemy na ni± tak szybko jak to bêdzie mo¿liwe.");

define("_MI_CONTACT_TIMEOUT"             ,"Czas przekierowania");
define("_MI_CONTACT_TIMEOUTDSC"          ,"Czas w sekundach po którym u¿ytkownik zostanie przekierowany na stronê g³ówn± gdy wy¶le wiadomo¶æ.");																						   

define("_MI_CONTACT_SHOWDEPT"            ,"Pokazaæ sekcjê za nazw± dzia³u");
define("_MI_CONTACT_SHOWDEPTDSC"         ,"Tak - poka¿  dropdown ze zdefiniowanymi nazwami dzia³ów."
                                         ." Je¶li nie ma ¿adnych wszystkie e-maile zostan± wys³ane na adres g³ówny." );

define("_MI_CONTACT_DEPTTITLE"           ,"Nazwa dzia³u");
define("_MI_CONTACT_DEPTTITLEDSC"        ,"Nazwy pokazywane w sekcji z nazwami dzia³ów.");
define("_MI_CONTACT_DEPTTITLEDEFAULT"    ,"Dzia³");

define("_MI_CONTACT_DEPT"                ,"Dzia³y" );
define("_MI_CONTACT_DEPTDSC"             ,"Dzia³y pozwalaj± przyporz±dkowaæ adres e-email do dzia³u. U¿ytkownik wybieraj±c"
                                         ." dany dzia³ prze¶le informacjê bezpo¶rednio pod przyporz±dkowany mu"
                                         ." adres e-mail."
                                         ." Zdefiniuj pary dzia³-email w nastêpuj±cy sposób:"
                                         ." dzia³1,e-mail1 | dzia³2,e-mail2 | dzia³3,e-mail3 itd. - dzia³ i e-mail musz± zostaæ oddzielone "
                                         ."przecinkiem ',' a ka¿da para oddzielona przez '|'." );
							 
define("_MI_CONTACT_VALIDATEDOMAIN"      ,"Sprawdzenie domeny");
define("_MI_CONTACT_VALIDATEDOMAINDSC"   ,"Tak - w³±cza sprawdzenie adresu email w hierarchii domen (Top Level Domains - .tld)."
                                         ."<br />Nie - robi uproszczone sprawdzenie adresu e-mail. Wersji 1.6 ta funkcja zwykle nie dzia³a.");
									   
define("_MI_CONTACT_SHOWMOREINFO"        ,"Pytanie o dodatkowe informacje" );
define("_MI_CONTACT_SHOWMOREINFODSC"     ,"Tak - poka¿e dodatkowe informacje z wielokrotnym polem wyboru tak jak to zosta³o zdefiniowane w punkcie Informacje dodatkowe.");									   							 

define("_MI_CONTACT_MOREINFOTITLE"       ,"Informacje dodatkowe - tytu³" );
define("_MI_CONTACT_MOREINFOTITLEDSC"    ,"Tytu³ pokazywany w czê¶ci modu³u zawieraj±cej pytania o Informacje dodatkowe." );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Popro¶ o wiêcej informacji");

define("_MI_CONTACT_MOREINFO"            ,"Informacje dodatkowe - punkty");
define("_MI_CONTACT_MOREINFODSC"         ,"Ta funkcja pozwalaja u¿ytkownikowi na przes³anie dodatkowych informacji "
                                         ."poprzez zaznaczenie odpowiednich punktów-checkboxów. W ten sposób mo¿na dok³adniej okre¶liæ "
                                         ."czego chce u¿ytkownik. Na przyk³ad w komercyjnym programie - sprzedawca mo¿e "
                                         ."zaoferowaæ przes³anie dodatkowych informacji o ile klient sobie tego ¿yczy. W ten sposób pozyskuje"
                                         ." siê klientów. "
                                         ."Ka¿d± punkt nale¿y zdefiniowaæ w nastêpuj±cy sposób:"
                                         ." punkt1 | punkt2 | punkt3 itd. - ka¿dy punkt musi byæ oddzielony przez '|'.");
								
?>