<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:56:06 dap997 Exp $
// Module Info - T�umaczenie dap977 26.II.2006 dla wersji 1.6

// The name of this module
define("_MI_CONTACT_NAME"                ,"Kontakt");
// A brief description of this module
define("_MI_CONTACT_DESC"                ,"Strona do kontaktu przez e-mail");

define('_MI_CONTACT_SETTINGS'            ,'Ustawienia');
define('_MI_CONTACT_SETTINGS_DSC'        ,'Ustawienia dla modu�u');
define('_MI_CONTACT_GEN'                 ,'Og�lne' );
define('_MI_CONTACT_GEN_DSC'             ,'Ustawienia og�lne dla wprowadzenie i definicji e-maili' );

// Config stuff
define("_MI_CONTACT_GETICQ"              ,"Przesy�anie GG" );
define("_MI_CONTACT_GETICQDSC"           ,"Tak - zapytaj o numer Gadu-Gadu." );

define("_MI_CONTACT_ALLOWSENDCONFIRM"    ,"Umo�liwi� potwierdzenie" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC" ,"Tak - poka�e check box dla u�ytkownika, "
                                         ."kt�rego zaznaczenie umo�liwi przes�anie e-maila z potwierdzeniem." );

define("_MI_CONTACT_GETURL"              ,"Przesy�anie adresu strony" );
define("_MI_CONTACT_GETURLDSC"           ,"Tak - zapytaj o adres strony." );

define("_MI_CONTACT_GETCOMPANY"          ,"Przesy�anie nazwy firmy" );
define("_MI_CONTACT_GETCOMPANYDSC"       ,"Tak - zapytaj o nazw� firmy." );

define("_MI_CONTACT_GETLOC"              ,"Przesy�anie nazwy miejscowo�ci" );
define("_MI_CONTACT_GETLOCDSC"           ,"Tak - zapytaj o miejscowo�� sk�d pochodzi u�ytkownik." );

define("_MI_CONTACT_ADDRESS"             ,"Przesy�anie adresu u�ytkownika" );
define("_MI_CONTACT_ADDRESSDSC"          ,"Tak - zapytaj o adres u�ytkownika." );

define("_MI_CONTACT_INTROHEAD"           ,"Nag��wek wprowadzenia" );
define("_MI_CONTACT_INTROHEAD_DESC"      ,"Ten nag��wek b�dzie pokazany przy <b>Tek�cie wprowadzaj�cym</b>.");
define("_MI_CONTACT_INTRO_DEFAULT"       ,"Prosz� wype�ni� ten formularz a nast�pnie go wys�a�. Odpowiemy na niego tak szybko jak to b�dzie mo�liwe.");

define("_MI_CONTACT_INTRO"               ,"Tekst wprowadzenia" );
define("_MI_CONTACT_INTRO_DESC"          ,"Tekst pokazywany na pocz�tku modu�u <b>Kontakt</b>,"
                                         ." mo�e zawiera� tekst powitalny, adresy e-mail, numer telefonu." );
							   
define("_MI_CONTACT_SECURITY"            ,"Zabezpieczenie" );
define("_MI_CONTACT_SECURITYDSC"         ,"Tak - w��cz <b>Zabezpieczenie</b> aby sprawdzi� prawdziwo�� u�ytkownika przed wys�aniem e-maila."
	                                     ." Powinno ono pom�c w walce ze spamem wysy�anym przez modu� <b>Kontakt</b>." );
								 
define("_MI_CONTACT_SITEKEY"             ,"Przypadkowy klucz" );
define("_MI_CONTACT_SITEKEYDSC"          ,"Tworzy przypadkowy zestaw znak�w i cyfr, dzi�ki czemu <b>Zabezpieczenie</b> "
                                         ."jest bardziej niezawodne!" );
								
define("_MI_CONTACT_HEAD"                ,"Nag��wek formularza" );
define("_MI_CONTACT_HEADDSC"             ,"Nag��wek formularza kontaktowego.");
define("_MI_CONTACT_HEADDEFAULT"         ,"Formularz kontaktowy");

define("_MI_CONTACT_THANKYOU"            ,"Dzi�kujemy za wiadomo��");
define("_MI_CONTACT_THANKYOUDSC"         ,"Twoja wiadomo�� do u�ytkownika z podzi�kowaniami za jej wys�anie.");
define("_MI_CONTACT_THANKYOUDEFAULT"     ,"Dzi�kujemy za wiadomo��. Odpowiemy na ni� tak szybko jak to b�dzie mo�liwe.");

define("_MI_CONTACT_TIMEOUT"             ,"Czas przekierowania");
define("_MI_CONTACT_TIMEOUTDSC"          ,"Czas w sekundach po kt�rym u�ytkownik zostanie przekierowany na stron� g��wn� gdy wy�le wiadomo��.");																						   

define("_MI_CONTACT_SHOWDEPT"            ,"Pokaza� sekcj� za nazw� dzia�u");
define("_MI_CONTACT_SHOWDEPTDSC"         ,"Tak - poka�  dropdown ze zdefiniowanymi nazwami dzia��w."
                                         ." Je�li nie ma �adnych wszystkie e-maile zostan� wys�ane na adres g��wny." );

define("_MI_CONTACT_DEPTTITLE"           ,"Nazwa dzia�u");
define("_MI_CONTACT_DEPTTITLEDSC"        ,"Nazwy pokazywane w sekcji z nazwami dzia��w.");
define("_MI_CONTACT_DEPTTITLEDEFAULT"    ,"Dzia�");

define("_MI_CONTACT_DEPT"                ,"Dzia�y" );
define("_MI_CONTACT_DEPTDSC"             ,"Dzia�y pozwalaj� przyporz�dkowa� adres e-email do dzia�u. U�ytkownik wybieraj�c"
                                         ." dany dzia� prze�le informacj� bezpo�rednio pod przyporz�dkowany mu"
                                         ." adres e-mail."
                                         ." Zdefiniuj pary dzia�-email w nast�puj�cy spos�b:"
                                         ." dzia�1,e-mail1 | dzia�2,e-mail2 | dzia�3,e-mail3 itd. - dzia� i e-mail musz� zosta� oddzielone "
                                         ."przecinkiem ',' a ka�da para oddzielona przez '|'." );
							 
define("_MI_CONTACT_VALIDATEDOMAIN"      ,"Sprawdzenie domeny");
define("_MI_CONTACT_VALIDATEDOMAINDSC"   ,"Tak - w��cza sprawdzenie adresu email w hierarchii domen (Top Level Domains - .tld)."
                                         ."<br />Nie - robi uproszczone sprawdzenie adresu e-mail. Wersji 1.6 ta funkcja zwykle nie dzia�a.");
									   
define("_MI_CONTACT_SHOWMOREINFO"        ,"Pytanie o dodatkowe informacje" );
define("_MI_CONTACT_SHOWMOREINFODSC"     ,"Tak - poka�e dodatkowe informacje z wielokrotnym polem wyboru tak jak to zosta�o zdefiniowane w punkcie Informacje dodatkowe.");									   							 

define("_MI_CONTACT_MOREINFOTITLE"       ,"Informacje dodatkowe - tytu�" );
define("_MI_CONTACT_MOREINFOTITLEDSC"    ,"Tytu� pokazywany w cz�ci modu�u zawieraj�cej pytania o Informacje dodatkowe." );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Popro� o wi�cej informacji");

define("_MI_CONTACT_MOREINFO"            ,"Informacje dodatkowe - punkty");
define("_MI_CONTACT_MOREINFODSC"         ,"Ta funkcja pozwalaja u�ytkownikowi na przes�anie dodatkowych informacji "
                                         ."poprzez zaznaczenie odpowiednich punkt�w-checkbox�w. W ten spos�b mo�na dok�adniej okre�li� "
                                         ."czego chce u�ytkownik. Na przyk�ad w komercyjnym programie - sprzedawca mo�e "
                                         ."zaoferowa� przes�anie dodatkowych informacji o ile klient sobie tego �yczy. W ten spos�b pozyskuje"
                                         ." si� klient�w. "
                                         ."Ka�d� punkt nale�y zdefiniowa� w nast�puj�cy spos�b:"
                                         ." punkt1 | punkt2 | punkt3 itd. - ka�dy punkt musi by� oddzielony przez '|'.");
								
?>