[xlang:pl]


KONIECZNIE PRZECZYTAJ INSTRUKCJÊ INSTALACJI NA STORNIE AUTORA: PEAK.NE.JP/XOOPS

= PODSUMOWANIE =

   Xoops Protector to modu³ pozwalaj±cy zabezpieczyæ XOOPSA przed wieloma rodzajami ataków hackerskich.

Lista ataków przed którymi mo¿e ochroniæ modu³ Xoops Protector:

- DoS
- Z³e Crawlers (n.p. roboty zbieraj±ce adresy e-mail...)
- SQL Injection
- XSS (W pewnym stopniu ...)
- Zanieczyszczenie zmiennych globalnych
- Przejêcie sesji
- Puste bajty
- ¦cie¿ka mog±ca byæ odwo³aniem do niebezpiecznego pliku
- Pewne ataki typu CSRF (bardzo gro¼ne dla XOOPS <= 2.0.9.2)

Xoops Protector zabezpiecza Twoj± stronê przed tymi atakami i zapisuje zdarzenia w dzienniku

Pamiêtaj, ¿e nie da siê obronic przed wszystkimi atakami. Bêd¼ czujny!

Niemniej jednak, [color=ff0000][b]zalecamy[/b][/color] zainstalowanie tego modu³u we wszystkich wersjach Xoopsa.



= DLA UZYTKOWNIKOW AntiDoS-P =

Poprzednikiem Protectora by³ modu³ AntiDoS-P

wszystkie funkcje z AntiDoS-P zosta³y przeniesione do Protectora. Zaleca siê odinstalowanie Anti DoS-P.



= INSTRUKCJE =

Zainstaluj modu³ jak ka¿dy inny w Xoops. 

Po zainstalowniu Xoops Protector-a, musisz wyedytowaæ plik mainfile.php jak poni¿ej:
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
Je¶li czê¶æ zaznaczona na niebieski w twoim pliku mainfile.php, wygl±da inaczej, nie zwracaj na to uwagi.

Obydwa wywo³ania pre-check i post-check s± niezbedne!

Przed w³±czeniem modu³u upewnij siê, czy w ustawieniach systemowych nie ma Twojego numeru IP jako, tego, który ma zabroniony dostêp do serwisu!

Je¶li zostaniesz nieszczêsliwie zbanowany ze swojego serwisu, przejdz do strony:
http://(your xoops)/modules/protector/admin/rescue.php
gdzie mo¿esz usun±æ sobie bana. Pamietaj, ¿eby wczesniej ustawic haslo odblokowuj±ce!!!


Opcja "Zabroñ (DENY) przez .htaccess" zosta³a dodana w wersji 2.34.
je¶li chcesz przetestowaæ t± opcjê ustaw mozliwo¶æ zapisu pliku XOOPS_ROOT_PATH/.htaccess
Zanim jednak to zrobisz, przemy¶l ryzyko zwi±zane z mozliow¶ci± zapisu do pliku .htaccess!



= PODZIÊKOWANA =
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

