<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    pl
 * _CHARSET     UTF-8
 * @version     $Id: preferences.php 5570 2010-10-20 20:51:35Z beckmi $
 */
 
// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN","Preferencje");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL","General Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS","User Info Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER","Meta Tags and Footer");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR","Word Censoring Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH","Search Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER","Mail Setup");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION","Authentication Options");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS","<ul><li>Zarządzaj wszystkimi ustawieniami witryny.</li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER","A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION","A faire");
*/
define("_MD_AM_SITEPREF", "Preferencje strony");
define("_MD_AM_SITENAME", "Nazwa strony");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN", "Hasło na stronie (slogan)");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML", "Email webmastera");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE", "Domyślny język");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE", "Moduł ładowany na stronie głównej");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE", "Żaden");
define("_MD_AM_SERVERTZ", "Strefa czasowa serwera");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ", "Twoja strefa czasowa");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME", "Domyślny temat (theme)");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET", "Zestaw tematów");
define("_MD_AM_CUSTOM_REDIRECT", "Używaj przekierowania jGrowl redirect");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "Zamień stare przekierowania przekierowaniami jQuery redirection");
define("_MD_AM_ANONNAME", "Nazwa dla użytkowników anonimowych");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS", "Minimalna długość hasła");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY", "Powiadomić przez email o rejestracji nowego użytkownika?");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE", "Pozwolić użytkownikom na kasowanie swoich kont?");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG", "Wyświetlać obrazek podczas ładowania?");
define("_MD_AM_USEGZIP", "Włączyć kompresję gzip?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL", "Wybierz poziom filtrowania nazw użytkowników");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT", "Wysoki (tylko litery i cyfry)");
define("_MD_AM_MEDIUM", "Średni");
define("_MD_AM_LIGHT", "Niski (zalecany dla znaków wielobajtowych)");
define("_MD_AM_USERCOOKIE", "Nazwa dla cookies użytkownika.");
define("_MD_AM_USERCOOKIEDSC", "Wpisanie nazwy cookies pozwala na wyświetlenie kontrolki 'Zapamiętaj mnie' na ekranie logowania. Jeśli użytkownik zaznaczy 'Zapamiętaj mnie', za każdym razem będzie logowany automatycznie. Cookie wygasa po 1 roku.");
define("_MD_AM_USEMYSESS", "Użyj dodatkowych ustawień sesji");
define("_MD_AM_USEMYSESSDSC", "Zaznacz Tak aby ustawić dodatkowe wartości dla sesji");
define("_MD_AM_SESSNAME", "Nazwa sesji");
define("_MD_AM_SESSNAMEDSC", "Nazwa sesji (ustaw tylko, gdy zaznaczono wcześniej dodatkowe ustawienia)");
define("_MD_AM_SESSEXPIRE", "Czas trwania sesji");
define("_MD_AM_SESSEXPIREDSC", "Maksymalny czas trwania sesji w minutach (tylko gdy zaznaczono wczesniej ustawienia dodatkowe. Działa dla PHP 4.2.0 lub wyższego.)");
define("_MD_AM_BANNERS", "Włączyć system bannerów reklamowych?");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP", "Twój adres IP");
define("_MD_AM_MYIPDSC", "Ten adres IP nie będzie powodował zliczania odsłon bannera");
define("_MD_AM_ALWDHTML", "Zezwolenie na używanie HTML we wszystkich postach.");
define("_MD_AM_INVLDMINPASS", "Niewłaściwa wartość dla minimalnej długości hasła.");
define("_MD_AM_INVLDUCOOK", "Niewłaściwa wartość dla nazwy cookies użytkownika.");
define("_MD_AM_INVLDSCOOK", "Niewłaściwa wartość dla cookies sesji.");
define("_MD_AM_INVLDSEXP", "Niewłaściwa wartość dla długości trwania sesji.");
define("_MD_AM_ADMNOTSET", "Brak adresu do webmastera.");
define("_MD_AM_YES", "Tak");
define("_MD_AM_NO", "Nie");
define("_MD_AM_DONTCHNG", "Nie zmieniaj!");
define("_MD_AM_REMEMBER", "Pamiętaj o wykonaniu chmod 666 dla tego pliku aby go poprawnie zapisać.");
define("_MD_AM_IFUCANT", "Jeśli nie możesz zmienić uprawnień, zmień pozostałe ustawienia ręcznie.");

define("_MD_AM_COMMODE", "Domyślny sposób wyświetlania komentarzy");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER", "Domyślna kolejność wyświetlania komentarzy");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML", "Zezwolić na HTML w komentarzach?");
define("_MD_AM_DEBUGMODE", "Tryb debugowania");
define("_MD_AM_DEBUGMODEDSC", "Różne opcje debugowania. UWAGA: Pozostaw aktywne tylko w czasie testów.");
define("_MD_AM_AVATARALLOW", "Pozwolić na dodawanie własnych avatarów?");
define("_MD_AM_AVATARALWDSC", "");
define("_MD_AM_AVATARMP", "Wymagana ilość wiadomości");
define("_MD_AM_AVATARMPDSC", "Wpisz minimalną ilość wiadomości wymaganą aby móc dodać własny avatar");
define("_MD_AM_AVATARW", "Szerokość avatara w pikselach");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH", "Wysokość avatara w pikselach");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX", "Wielkość avatara w bajtach");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF", "Dodatkowe ustawienia avatarów");
define("_MD_AM_CHNGUTHEME", "Zmienia temat wszystkim użytkownikom");
define("_MD_AM_NOTIFYTO", "Zaznacz grupę, która otrzyma informację o nowym użytkowniku");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME", "Zezwalać użytkownikom na wybór tematów?");
define("_MD_AM_ALLOWIMAGE", "Zezwolić na obrazki w postach?");

define("_MD_AM_USERACTV", "Wymagana aktywacja przez użytkownika (zalecane)");
define("_MD_AM_AUTOACTV", "Aktywacja automatyczna");
define("_MD_AM_ADMINACTV", "Aktywacja przez administratora");
define("_MD_AM_ACTVTYPE", "Wybierz rodzaj aktywacji dla nowych użytkowników");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP", "Wybierz grupę do której zostanie wysłany email z aktywacją");
define("_MD_AM_ACTVGROUPDSC", "Ma znacznie tylko wtedy, gdy wybrano opcję: 'Aktywacja przez administratora'");
define("_MD_AM_USESSL", "Użyć logowania SSL?");
define("_MD_AM_USESSLDSC", "");
define("_MD_AM_SSLPOST", "Nazwa zmiennej SSL");
define("_MD_AM_SSLPOSTDSC", "Nazwa zmiennej używanej do przesyłania danych sesji metodą POST. Jeśli nie masz pewności, wstaw cokolwiek, co jest trudne do odgadnięcia.");
define("_MD_AM_DEBUGMODE0", "Wyłączone");
define("_MD_AM_DEBUGMODE1", "Włącz debugowanie (pod stroną)");
define("_MD_AM_DEBUGMODE2", "Włącz debugowanie (w osobnym oknie)");
define("_MD_AM_DEBUGMODE3", "Włącz debugowanie (dla szablonów Smarty)");
define("_MD_AM_MINUNAME", "Minimalna długość nazwy użytkownika");
define("_MD_AM_MINUNAMEDSC", "");
define("_MD_AM_MAXUNAME", "Maksymalna długość nazwy użytkownika");
define("_MD_AM_MAXUNAMEDSC", "");
define("_MD_AM_GENERAL", "Ustawienia ogólne");
define("_MD_AM_USERSETTINGS", "Ustawienia użytkownika");
define("_MD_AM_ALLWCHGMAIL", "Pozwolić użytkownikom na zmianę adresu email?");
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "Banowanie IP");
define("_MD_AM_BADEMAILS", "Wprowadź adresy email, które nie mogą być używane przez użytkowników.");
define("_MD_AM_BADEMAILSDSC", "Odziel je używając <strong>|</strong>, wielkość znaków nie ma znaczenia, można używać wyrażeń regularnych.");
define("_MD_AM_BADUNAMES", "Wprowadź nazwy, które nie mogą być rejestrowane przez użytkowników.");
define("_MD_AM_BADUNAMESDSC", "Odziel je używając <strong>|</strong>, wielkość znaków nie ma znaczenia, można używać wyrażeń regularnych.");
define("_MD_AM_DOBADIPS", "Włączyć blokowanie adresów IP?");
define("_MD_AM_DOBADIPSDSC", "Użytkownicy z podanych adresów IP nie będą mieli dostępu do strony");
define("_MD_AM_BADIPS", "Podaj adresy IP, które powinny być blokowane.<br />Oddziel je używając <strong>|</strong>, wielkość liter nie ma znaczenia, można używać wyrażeń regularnych.");
define("_MD_AM_BADIPSDSC", "^aaa.bbb.ccc zablokuje użytkowników, których IP zaczyna się od aaa.bbb.ccc<br />aaa.bbb.ccc$ zablokuje użytkowników, których IP kończy się na aaa.bbb.ccc<br />aaa.bbb.ccc zablokuje użytkowników z IP zawierającym aaa.bbb.ccc");
define("_MD_AM_PREFMAIN", "Ustawienia główne");
define("_MD_AM_METAKEY", "Słowa kluczowe (Meta Keywords)");
define("_MD_AM_METAKEYDSC", "Słowa kluczowe opisujące zawartość serwisu. Wpisz odpowiedenie słowa oddzielając przecinkami lub spacjami (np. XOOPS, PHP, MySQL, portal system)");
define("_MD_AM_METARATING", "Meta Rating");
define("_MD_AM_METARATINGDSC", "Zawiera tag opiekuńczy, informujący o ewentualnych ograniczeniach w dostepie nieletnich do strony");
define("_MD_AM_METAOGEN", "Ogólnodostepna");
define("_MD_AM_METAO14YRS", "14 lat");
define("_MD_AM_METAOREST", "Z ograniczeniami");
define("_MD_AM_METAOMAT", "Dla dorosłych");
define("_MD_AM_METAROBOTS", "Informacje Meta dla robotów");
define("_MD_AM_METAROBOTSDSC", "Deklaruje, która część powinna być indeksowana przez wyszukiwarki");
define("_MD_AM_INDEXFOLLOW", "index + zawartość");
define("_MD_AM_NOINDEXFOLLOW", "tylko zawartość");
define("_MD_AM_INDEXNOFOLLOW", "tylko index");
define("_MD_AM_NOINDEXNOFOLLOW", "nic");
define("_MD_AM_METAAUTHOR", "Meta Author");
define("_MD_AM_METAAUTHORDSC", "Tag definiujący autora serwisu. Dopuszcza się imię, adres email, nazwę firmy lub URL.");
define("_MD_AM_METACOPYR", "Meta Copyright");
define("_MD_AM_METACOPYRDSC", "Zawiera informacje o prawie autorskim.");
define("_MD_AM_METADESC", "Meta Description");
define("_MD_AM_METADESCDSC", "Ogólny opis zawartości strony");
define("_MD_AM_METAFOOTER", "Sekcja Meta i Stopka");
define("_MD_AM_FOOTER", "Stopka");
define("_MD_AM_FOOTERDSC", "Pamiętaj o podaniu linków wraz z oznaczeniem protokołu np. http://, jeśli tego nie ustawisz, nie będą działać na stronach modułów.");
define("_MD_AM_CENSOR", "Opcje cenzora");
define("_MD_AM_DOCENSOR", "Włączyć cenzurowanie niechcianych słów?");
define("_MD_AM_DOCENSORDSC", "Włączenie tej opcji spowoduje cenzurowanie wymienionych słów jednak wydłużony zostanie czas ładowania się stron.");
define("_MD_AM_CENSORWRD", "Słowa podlegające cenzurze");
define("_MD_AM_CENSORWRDDSC", "Wpisz słowa, które mają być odrzucane.<br />Odzielaj je z użyciem <strong>|</strong>, wielkość liter nie ma znaczenia.");
define("_MD_AM_CENSORRPLC", "Niechciane słowa zostaną zastąpione:");
define("_MD_AM_CENSORRPLCDSC", "Filtrowane słowa zostaną zastąpione wpisanym wyrażeniem");

define("_MD_AM_SEARCH", "Opcje wyszukiwania");
define("_MD_AM_DOSEARCH", "Zezwolić na wyszukiwanie w całym portalu?");
define("_MD_AM_DOSEARCHDSC", "Zezwala na wyszukiwanie w postach i poszczególnych działach.");
define("_MD_AM_MINSEARCH", "Minimalna długość szukanego słowa");
define("_MD_AM_MINSEARCHDSC", "Podaj minimalną długość szukanego wyrażenia");
define("_MD_AM_MODCONFIG", "Opcje konfiguracji modułów");
define("_MD_AM_DSPDSCLMR", "Wyświetlać warunki rejestracji?");
define("_MD_AM_DSPDSCLMRDSC", "Wybierz Tak, by wyświetlić warunki użytkowania serwisu podczas rejestracji nowego użytkownika");
define("_MD_AM_REGDSCLMR", "Treść warunków");
define("_MD_AM_REGDSCLMRDSC", "Wpisz treść warunków użytkowania serwisu");
define("_MD_AM_ALLOWREG", "Zezwolić na nowe rejestracje?");
define("_MD_AM_ALLOWREGDSC", "Wybierz TAK, aby zezwolić na nowe rejestracje");
define("_MD_AM_THEMEFILE", "Uaktualniać szablony modułów?");
define("_MD_AM_THEMEFILEDSC", "Jeśli ta opcja jest włączona, specjalnie przygotowane szablony .html odpowiedzialne za wygląd poszczególnych działów będą automatycznie aktualizowane, jeśli w katalogu themes/nazwa_szablonu/templates pojawią się nowe pliki. Powinno się wyłączyć tą opcje, gdy zakończy się faza testów.");
define("_MD_AM_CLOSESITE", "Wyłączyć stronę?");
define("_MD_AM_CLOSESITEDSC", "Wybierz TAK, gdy chcesz by tylko wybrane grupy miały dostęp do serwisu.");
define("_MD_AM_CLOSESITEOK", "Wybierz grupy, które będą miały dostęp do strony gdy jest wyłączona.");
define("_MD_AM_CLOSESITEOKDSC", "Użytkownicy z domyślnej grupy Webmasters mają ten dostęp zawsze.");
define("_MD_AM_CLOSESITETXT", "Powód wyłączenia strony");
define("_MD_AM_CLOSESITETXTDSC", "Informacja o powodach wyłączenia strony.");
define("_MD_AM_SITECACHE", "Buforowanie całego portalu");
define("_MD_AM_SITECACHEDSC", "Buforuje najważniejsze pliki całego serwisu w celu przyspieszenia ładowania. To ustawienie nadpisuje ustawienia dla modułów i bloków, jeśli takie występują.");
define("_MD_AM_MODCACHE", "Buforowanie modułów");
define("_MD_AM_MODCACHEDSC", "Buforuje najważniejsze pliki danego modułu w celu przyspieszenia ładowania stron.");
define("_MD_AM_NOMODULE", "Brak modułu, który można buforować.");
define("_MD_AM_DTPLSET", "Standardowy zestaw szablonów");
define("_MD_AM_DTPLSETDSC", "");
define("_MD_AM_SSLLINK", "URL dla połączeń SSL");
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER", "Ustawienia poczty");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "Adres w polu Od");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "Nazwa w polu Od");
define("_MD_AM_MAILFROMNAMEDESC", "");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "Użytkownik w polu Od");
define("_MD_AM_MAILFROMUIDDESC", "Nazwa użytkownika używana przy wysyłaniu prywatnej wiadomości");
define("_MD_AM_MAILERMETHOD", "Sposób wysyłania poczty");
define("_MD_AM_MAILERMETHODDESC", "Sposób wysyłania poczty. Standardowym jest 'mail', użyj innych sposobów tylko w przypadku problemów.");
define("_MD_AM_SMTPHOST", "Serwery SMTP");
define("_MD_AM_SMTPHOSTDESC", "Lista serwerów SMTP, do których zostanie wykonana próba połączenia.");
define("_MD_AM_SMTPUSER", "Nazwa SMTPAuth");
define("_MD_AM_SMTPUSERDESC", "Nazwa użytkownika użyta do połączenia z serwerem SMTP przy użyciu SMTPAuth.");
define("_MD_AM_SMTPPASS", "Hasło SMTPAuth");
define("_MD_AM_SMTPPASSDESC", "Hasło użytkownika użyte do połączenia z serwerem SMT przy użyciu SMTPAuth.");
define("_MD_AM_SENDMAILPATH", "Ścieżka do programu sendmail");
define("_MD_AM_SENDMAILPATHDESC", "Ścieżka do programu sendmail (albo innego podobnego) na serwerze ze stroną.");
define("_MD_AM_THEMEOK", "Tematy graficzne do wyboru");
define("_MD_AM_THEMEOKDSC", "Tematy, które mogą być wybrane przez użytkownika jako domyślny wygląd strony.");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","This is the address of the soap server.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","If you want the new user provisioned, say 'yes'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rank to Provision");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","This is the ranks a new user from the soap server is put in.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","If you need a wdsl soap service enable this option.");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP Username");
define("_MD_AM_SOAP_USERNAMEDESC","This is the username of your account on the soap server.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP Password");
define("_MD_AM_SOAP_PASSWORDDESC","If you need a password with the soap service put it in here.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Client Alive");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Keep The Soap Client Alive.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Special Accounts");
define("_MD_AM_SOAP_FILTERPERSONDESC","Special Accounts that use Xoops Authentication.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Proxy Hostname");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP Servers Proxy Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Proxy port");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","SOAP Servers Proxy Server Port Number <br>ie: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Proxy Username");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","SOAP Servers Proxy Server Username");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Proxy Password");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","SOAP Servers Proxy Server Password.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP Response Timeout");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_FIELDMAPPING","Xoops-Auth server fields mapping");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system SOAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "Baza danych XOOPS");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Katalog LDAP");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Xoops Soap Authentication");
define("_MD_AM_AUTHENTICATION", "Opcje uwierzytelniania");
define("_MD_AM_AUTHMETHOD", "Metoda uwierzytelniania");
define("_MD_AM_AUTHMETHODDESC", "Wybierz, którą metodę chciałbyś używać przy rejestracji użytkowników.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Pole Email");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "Nazwa atrybutu Email w katalogu LDAP.");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - Pole Common Name");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "Nazwa atrybutu Common Name w katalogu LDAP.");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Pole Surname");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "Nazwa atrybutu Surname w katalogu LDAP.");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Pole Given Name");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "Nazwa atrybutu Given Name w katalogu LDAP.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "Base DN (Distinguished Name) w drzewie katalogów LDAP.");
define("_MD_AM_LDAP_PORT", "Port LDAP");
define("_MD_AM_LDAP_PORT_DESC", "Numer portu serwera katalogu LDAP.");
define("_MD_AM_LDAP_SERVER", "Nazwa serwera LDAP");
define("_MD_AM_LDAP_SERVER_DESC", "Nazwa serwera katalogu LDAP.");

define("_MD_AM_LDAP_MANAGER_DN", "DN menedżera LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN użytkownika umożliwiający przeszukiwanie (np. menedżer)");
define("_MD_AM_LDAP_MANAGER_PASS", "Hasło menedżera LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "Hasło użytkownika umożliwiające przeszukiwanie");
define("_MD_AM_LDAP_VERSION", "Wersja protokołu LDAP");
define("_MD_AM_LDAP_VERSION_DESC", "Wybierz którą wersję LDAP posiadasz : 2 lub 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Użytkownicy mogący pominąć uwierzytelnianie LDAP");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Użytkownicy uwierzytelniani standardową metodą XOOPS");

define("_MD_AM_LDAP_USETLS", "Używaj połączenia TLS");
define("_MD_AM_LDAP_USETLS_DESC", "Używaj połączenia TLS (Transport Layer Security). TLS wykorzytstuje standordowy port nr 389<br />" ." a wersja LDAP musi być ustawiona na 3.");


define("_MD_AM_LDAP_LOGINLDAP_ATTR", "Użyj atrybutu LDAP do szukania użytkownika");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D", "Jeśli opcja Użyj loginu w DN jest ustawiona na Tak, login musi być identyczny z loginem XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Użyj loginu w DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "Login zapisany w bazie XOOPS jest wykorzystywany w LDAP DN (np. : uid=<loginname>,dc=xoops,dc=org)<br/ >Wpis jest odczytywany bezpośrednio z serwera LDAP bez przeszukiwania");

define("_MD_AM_LDAP_FILTER_PERSON", "Wyrażenie pozwalające szukać w LDAP użytkowników");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Specjalny filtr LDAP umożliwiający wyszukiwanie użytkowników. Wyrażenie @@loginname@@ jest zastępowane przez login użytkownika<br> POZOSTAW PUSTE JEŻELI SIĘ NIE ZNASZ!" .
		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) dla AD" .
		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) dla LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "Nazwa domeny");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Nazwa domeny Windows. Wpisz tylko gdy używasz Active Directory Service (ADS) i serwera NT");

define("_MD_AM_LDAP_PROVIS", "Automatyczne tworzenie kont");
define("_MD_AM_LDAP_PROVIS_DESC", "Utwórz bazę użytkownika jeżeli nie istnieje");

define("_MD_AM_LDAP_PROVIS_GROUP", "Przypisanie do grupy");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Nowy użytkownik jest przypisywany do wybranej grupy");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Mapowanie pól");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Opisz mapowanie pomiędzy polami bazy danych XOOPS a polami systemu uwierzytelniania LDAP." .
		"<br /><br />Format [Pole w bazie XOOPS]=[Atrybut w katalogu LDAP]" .
		"<br />na przykład : email=mail" .
		"<br>Każde kolejne pole oddzielaj znakiem |" .
		"<br><br>!! Tylko dla zaawansowanych użytkowników !!");

define("_MD_AM_LDAP_PROVIS_UPD", "Utrzymywanie zaopatrzenia konta użytkownika");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "Konto użytkownika jest zawsze synchronizowane z serwerem uwierzytelniania");


define("_MD_AM_CPANEL", "Panel kontrolny");
define("_MD_AM_CPANELDSC", "Zarządzanie i administrowanie Twoją stroną");

define("_MD_AM_WELCOMETYPE", "Komunikat powitalny");
define("_MD_AM_WELCOMETYPE_DESC", "Sposób wysłania komunikatu powitalnego do nowo zarejestrowanego użytkownika.");
define("_MD_AM_WELCOMETYPE_EMAIL", "Email");
define("_MD_AM_WELCOMETYPE_PM", "Wiadomość");
define("_MD_AM_WELCOMETYPE_BOTH", "Email i wiadomość");

define("_MD_AM_MODULEPREF", "Preferencje dla modułów");

// Preference module system
define("_AM_SYSTEM_PREFERENCES_SETTINGS","Ustawienia modułu System");

?>
