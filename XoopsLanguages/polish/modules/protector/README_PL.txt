[xlang:pl]
= PODSUMOWANIE =

   Xoops Protector to moduł pozwalający zabezpieczyć XOOPSA przed wieloma rodzajami ataków hackerskich.

Lista ataków przed którymi może ochronić moduł Xoops Protector:

- DoS
- Złe Crawlers (n.p. roboty zbierające adresy e-mail...)
- SQL Injection
- XSS (W pewnym stopniu ...)
- Zanieczyszczenie zmiennych globalnych
- Przejęcie sesji
- Puste bajty
- Ścieżka mogąca być odwołaniem do niebezpiecznego pliku
- Pewne ataki typu CSRF (bardzo groźne dla XOOPS <= 2.0.9.2)

Xoops Protector zabezpiecza Twoją stronę przed tymi atakami i zapisuje zdarzenia w dzienniku

Pamiętaj, że nie da się obronic przed wszystkimi atakami. Będź czujny!

Niemniej jednak, [color=ff0000][b]zalecamy[/b][/color] zainstalowanie tego modułu we wszystkich wersjach Xoopsa.



= DLA UZYTKOWNIKOW AntiDoS-P =

Poprzednikiem Protectora był moduł AntiDoS-P

wszystkie funkcje z AntiDoS-P zostały przeniesione do Protectora. Zaleca się odinstalowanie Anti DoS-P.



= INSTRUKCJE =

Zainstaluj moduł jak każdy inny w Xoops. 

Po zainstalowniu Xoops Protector-a, musisz wyedytować plik mainfile.php jak poniżej:
[code]
	define('XOOPS_GROUP_ADMIN', '1');
	define('XOOPS_GROUP_USERS', '2');
	define('XOOPS_GROUP_ANONYMOUS', '3');

	[color=ff0000]include( XOOPS_ROOT_PATH . '/modules/protector/include/precheck.inc.php' ) ;[/color]
	if (!isset($xoopsOption['nocommon']) [color=0000ff]&& XOOPS_ROOT_PATH != ''[/color] ) {
		include XOOPS_ROOT_PATH."/include/common.php";
	}
	[color=ff0000]include( XOOPS_ROOT_PATH . '/modules/protector/include/postcheck.inc.php' ) ;[/color]
[/code]
Jeśli część zaznaczona na niebieski w twoim pliku mainfile.php, wygląda inaczej, nie zwracaj na to uwagi.

Obydwa wywołania pre-check i post-check są niezbedne!

Przed włączeniem modułu upewnij się, czy w ustawieniach systemowych nie ma Twojego numeru IP jako, tego, który ma zabroniony dostęp do serwisu!

Jeśli zostaniesz nieszczęsliwie zbanowany ze swojego serwisu, przejdz do strony:
http://(your xoops)/modules/protector/admin/rescue.php
gdzie możesz usunąć sobie bana. Pamietaj, żeby wczesniej ustawic haslo odblokowujące!!!


Opcja "Zabroń (DENY) przez .htaccess" została dodana w wersji 2.34.
jeśli chcesz przetestować tą opcję ustaw mozliwość zapisu pliku XOOPS_ROOT_PATH/.htaccess
Zanim jednak to zrobisz, przemyśl ryzyko związane z mozliowścią zapisu do pliku .htaccess!



= PODZIĘKOWANA =
 - Kikuchi  (Traditional Chinese language files)
 - Marcelo Yuji Himoro (Brazilian Portuguese and Spanish language files)
 - HMN (French language files)
 - Defkon1 (Italian language files)
 - Dirk Louwers (Dutch language files)
 - Rene (German language files)
 - Webfm (Polish language files)

Moreover, I thank to JM2 and minahito -zx team- about having taught me kindly.
You are very great programmers!
[/xlang:pl]

