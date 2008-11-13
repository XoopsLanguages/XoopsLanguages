[xlang:pl]


KONIECZNIE PRZECZYTAJ INSTRUKCJ� INSTALACJI NA STORNIE AUTORA: PEAK.NE.JP/XOOPS

= PODSUMOWANIE =

   Xoops Protector to modu� pozwalaj�cy zabezpieczy� XOOPSA przed wieloma rodzajami atak�w hackerskich.

Lista atak�w przed kt�rymi mo�e ochroni� modu� Xoops Protector:

- DoS
- Z�e Crawlers (n.p. roboty zbieraj�ce adresy e-mail...)
- SQL Injection
- XSS (W pewnym stopniu ...)
- Zanieczyszczenie zmiennych globalnych
- Przej�cie sesji
- Puste bajty
- �cie�ka mog�ca by� odwo�aniem do niebezpiecznego pliku
- Pewne ataki typu CSRF (bardzo gro�ne dla XOOPS <= 2.0.9.2)

Xoops Protector zabezpiecza Twoj� stron� przed tymi atakami i zapisuje zdarzenia w dzienniku

Pami�taj, �e nie da si� obronic przed wszystkimi atakami. B�d� czujny!

Niemniej jednak, [color=ff0000][b]zalecamy[/b][/color] zainstalowanie tego modu�u we wszystkich wersjach Xoopsa.



= DLA UZYTKOWNIKOW AntiDoS-P =

Poprzednikiem Protectora by� modu� AntiDoS-P

wszystkie funkcje z AntiDoS-P zosta�y przeniesione do Protectora. Zaleca si� odinstalowanie Anti DoS-P.



= INSTRUKCJE =

Zainstaluj modu� jak ka�dy inny w Xoops. 

Po zainstalowniu Xoops Protector-a, musisz wyedytowa� plik mainfile.php jak poni�ej:
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
Je�li cz�� zaznaczona na niebieski w twoim pliku mainfile.php, wygl�da inaczej, nie zwracaj na to uwagi.

Obydwa wywo�ania pre-check i post-check s� niezbedne!

Przed w��czeniem modu�u upewnij si�, czy w ustawieniach systemowych nie ma Twojego numeru IP jako, tego, kt�ry ma zabroniony dost�p do serwisu!

Je�li zostaniesz nieszcz�sliwie zbanowany ze swojego serwisu, przejdz do strony:
http://(your xoops)/modules/protector/admin/rescue.php
gdzie mo�esz usun�� sobie bana. Pamietaj, �eby wczesniej ustawic haslo odblokowuj�ce!!!


Opcja "Zabro� (DENY) przez .htaccess" zosta�a dodana w wersji 2.34.
je�li chcesz przetestowa� t� opcj� ustaw mozliwo�� zapisu pliku XOOPS_ROOT_PATH/.htaccess
Zanim jednak to zrobisz, przemy�l ryzyko zwi�zane z mozliow�ci� zapisu do pliku .htaccess!



= PODZI�KOWANA =
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

