<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:56:06 dap997 Exp $
// Module Info - Tłumaczenie dap977 26.II.2006 dla wersji 1.6

// The name of this module
define("_MI_CONTACT_NAME"                ,"Kontakt");
// A brief description of this module
define("_MI_CONTACT_DESC"                ,"Strona do kontaktu przez e-mail");

define('_MI_CONTACT_SETTINGS'            ,'Ustawienia');
define('_MI_CONTACT_SETTINGS_DSC'        ,'Ustawienia dla modułu');
define('_MI_CONTACT_GEN'                 ,'Ogólne' );
define('_MI_CONTACT_GEN_DSC'             ,'Ustawienia ogólne dla wprowadzenie i definicji e-maili' );

// Config stuff
define("_MI_CONTACT_GETICQ"              ,"Przesyłanie GG" );
define("_MI_CONTACT_GETICQDSC"           ,"Tak - zapytaj o numer Gadu-Gadu." );

define("_MI_CONTACT_ALLOWSENDCONFIRM"    ,"Umożliwić potwierdzenie" );
define("_MI_CONTACT_ALLOWSENDCONFIRMDSC" ,"Tak - pokaże check box dla użytkownika, "
                                         ."którego zaznaczenie umożliwi przesłanie e-maila z potwierdzeniem." );

define("_MI_CONTACT_GETURL"              ,"Przesyłanie adresu strony" );
define("_MI_CONTACT_GETURLDSC"           ,"Tak - zapytaj o adres strony." );

define("_MI_CONTACT_GETCOMPANY"          ,"Przesyłanie nazwy firmy" );
define("_MI_CONTACT_GETCOMPANYDSC"       ,"Tak - zapytaj o nazwę firmy." );

define("_MI_CONTACT_GETLOC"              ,"Przesyłanie nazwy miejscowości" );
define("_MI_CONTACT_GETLOCDSC"           ,"Tak - zapytaj o miejscowość skąd pochodzi użytkownik." );

define("_MI_CONTACT_ADDRESS"             ,"Przesyłanie adresu użytkownika" );
define("_MI_CONTACT_ADDRESSDSC"          ,"Tak - zapytaj o adres użytkownika." );

define("_MI_CONTACT_INTROHEAD"           ,"Nagłówek wprowadzenia" );
define("_MI_CONTACT_INTROHEAD_DESC"      ,"Ten nagłówek będzie pokazany przy <b>Tekście wprowadzającym</b>.");
define("_MI_CONTACT_INTRO_DEFAULT"       ,"Proszę wypełnić ten formularz a następnie go wysłać. Odpowiemy na niego tak szybko jak to będzie możliwe.");

define("_MI_CONTACT_INTRO"               ,"Tekst wprowadzenia" );
define("_MI_CONTACT_INTRO_DESC"          ,"Tekst pokazywany na początku modułu <b>Kontakt</b>,"
                                         ." może zawierać tekst powitalny, adresy e-mail, numer telefonu." );
							   
define("_MI_CONTACT_SECURITY"            ,"Zabezpieczenie" );
define("_MI_CONTACT_SECURITYDSC"         ,"Tak - włącz <b>Zabezpieczenie</b> aby sprawdzić prawdziwość użytkownika przed wysłaniem e-maila."
	                                     ." Powinno ono pomóc w walce ze spamem wysyłanym przez moduł <b>Kontakt</b>." );
								 
define("_MI_CONTACT_SITEKEY"             ,"Przypadkowy klucz" );
define("_MI_CONTACT_SITEKEYDSC"          ,"Tworzy przypadkowy zestaw znaków i cyfr, dzięki czemu <b>Zabezpieczenie</b> "
                                         ."jest bardziej niezawodne!" );
								
define("_MI_CONTACT_HEAD"                ,"Nagłówek formularza" );
define("_MI_CONTACT_HEADDSC"             ,"Nagłówek formularza kontaktowego.");
define("_MI_CONTACT_HEADDEFAULT"         ,"Formularz kontaktowy");

define("_MI_CONTACT_THANKYOU"            ,"Dziękujemy za wiadomość");
define("_MI_CONTACT_THANKYOUDSC"         ,"Twoja wiadomość do użytkownika z podziękowaniami za jej wysłanie.");
define("_MI_CONTACT_THANKYOUDEFAULT"     ,"Dziękujemy za wiadomość. Odpowiemy na nią tak szybko jak to będzie możliwe.");

define("_MI_CONTACT_TIMEOUT"             ,"Czas przekierowania");
define("_MI_CONTACT_TIMEOUTDSC"          ,"Czas w sekundach po którym użytkownik zostanie przekierowany na stronę główną gdy wyśle wiadomość.");																						   

define("_MI_CONTACT_SHOWDEPT"            ,"Pokazać sekcję za nazwą działu");
define("_MI_CONTACT_SHOWDEPTDSC"         ,"Tak - pokaż  dropdown ze zdefiniowanymi nazwami działów."
                                         ." Jeśli nie ma żadnych wszystkie e-maile zostaną wysłane na adres główny." );

define("_MI_CONTACT_DEPTTITLE"           ,"Nazwa działu");
define("_MI_CONTACT_DEPTTITLEDSC"        ,"Nazwy pokazywane w sekcji z nazwami działów.");
define("_MI_CONTACT_DEPTTITLEDEFAULT"    ,"Dział");

define("_MI_CONTACT_DEPT"                ,"Działy" );
define("_MI_CONTACT_DEPTDSC"             ,"Działy pozwalają przyporządkować adres e-email do działu. Użytkownik wybierając"
                                         ." dany dział prześle informację bezpośrednio pod przyporządkowany mu"
                                         ." adres e-mail."
                                         ." Zdefiniuj pary dział-email w następujący sposób:"
                                         ." dział1,e-mail1 | dział2,e-mail2 | dział3,e-mail3 itd. - dział i e-mail muszą zostać oddzielone "
                                         ."przecinkiem ',' a każda para oddzielona przez '|'." );
							 
define("_MI_CONTACT_VALIDATEDOMAIN"      ,"Sprawdzenie domeny");
define("_MI_CONTACT_VALIDATEDOMAINDSC"   ,"Tak - włącza sprawdzenie adresu email w hierarchii domen (Top Level Domains - .tld)."
                                         ."<br />Nie - robi uproszczone sprawdzenie adresu e-mail. Wersji 1.6 ta funkcja zwykle nie działa.");
									   
define("_MI_CONTACT_SHOWMOREINFO"        ,"Pytanie o dodatkowe informacje" );
define("_MI_CONTACT_SHOWMOREINFODSC"     ,"Tak - pokaże dodatkowe informacje z wielokrotnym polem wyboru tak jak to zostało zdefiniowane w punkcie Informacje dodatkowe.");									   							 

define("_MI_CONTACT_MOREINFOTITLE"       ,"Informacje dodatkowe - tytuł" );
define("_MI_CONTACT_MOREINFOTITLEDSC"    ,"Tytuł pokazywany w części modułu zawierającej pytania o Informacje dodatkowe." );
define("_MI_CONTACT_MOREINFOTITLEDEFAULT","Poproś o więcej informacji");

define("_MI_CONTACT_MOREINFO"            ,"Informacje dodatkowe - punkty");
define("_MI_CONTACT_MOREINFODSC"         ,"Ta funkcja pozwalaja użytkownikowi na przesłanie dodatkowych informacji "
                                         ."poprzez zaznaczenie odpowiednich punktów-checkboxów. W ten sposób można dokładniej określić "
                                         ."czego chce użytkownik. Na przykład w komercyjnym programie - sprzedawca może "
                                         ."zaoferować przesłanie dodatkowych informacji o ile klient sobie tego życzy. W ten sposób pozyskuje"
                                         ." się klientów. "
                                         ."Każdą punkt należy zdefiniować w następujący sposób:"
                                         ." punkt1 | punkt2 | punkt3 itd. - każdy punkt musi być oddzielony przez '|'.");
								
?>