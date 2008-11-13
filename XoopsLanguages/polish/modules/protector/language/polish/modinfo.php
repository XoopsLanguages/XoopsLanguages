<?php
// Module Info

// The name of this module



// Appended by Xoops Language Checker -GIJOE- in 2005-08-24 13:15:39
define('_MI_PROTECTOR_HIJACK_TOPBIT','Protected IP bits for the session');
define('_MI_PROTECTOR_HIJACK_TOPBITDSC','Anti Session Hi-Jacking:<br />Default 32(bit). (All bits are protected)<br />When your IP is not stable, set the IP range by number of the bits.<br />(eg) If your IP can move in the range of 192.168.0.0-192.168.0.255, set 24(bit) here');

// Appended by Xoops Language Checker -GIJOE- in 2005-07-31 12:33:21
define('_MI_PROTECTOR_DISABLES','Disable dangerous features in XOOPS');

// Appended by Xoops Language Checker -GIJOE- in 2005-07-22 15:35:35
define('_MI_PROTECTOR_RELIABLE_IPS','Reliable IPs');
define('_MI_PROTECTOR_RELIABLE_IPSDSC','set IPs you can rely separated with | . ^ matches the head of string, $ matches the tail of string.');
define('_MI_PROTECTOR_BF_COUNT','Anti Brute Force');
define('_MI_PROTECTOR_BF_COUNTDSC','Set count you allow guest try to login within 10 minutes. If someone fails to login more than this number, her/his IP will be banned.');
define('_MI_PROTECTOR_DOS_SKIPMODS','Modules out of DoS/Crawler checker');
define('_MI_PROTECTOR_DOS_SKIPMODSDSC','set the dirnames of the modules separated with |. This option will be useful with chatting module etc.');

define("_MI_PROTECTOR_NAME","Xoops Protector");

// A brief description of this module
define("_MI_PROTECTOR_DESC","Modu� zabezpieczaj�cy Xoopsa, przed r�nymi rodzajami atak�w z sieci, takich jak: DoS , SQL Injection i ska�eniem zmiennych.<br />\nWszystkie grupy powinny mie� ustawiony dost�p do tego modu�u, a zw�aszcza grupa Go�ci.");

// Names of blocks for this module (Not all module has blocks) 
// added by webfm for polish translation : From version 2.4 Protector hasn`t blocks
define("_MI_PROTECTOR_BNAME1","Protector");
define("_MI_PROTECTOR_BDESC1","Ten blok powinien �adowa� si� jako pierwszy od g�ry po prawej stronie na wszystkich stronach serwisu.");

// Menu
define("_MI_PROTECTOR_ADMININDEX","Centrum zabezpiecze�");
define("_MI_PROTECTOR_ADVISORY","Porady bezpiecze�stwa");
define("_MI_PROTECTOR_PREFIXMANAGER","Manager Prefixu");

// Configs
define('_MI_PROTECTOR_GLOBAL_DISBL','Tymczasowo wy��czony');
define('_MI_PROTECTOR_GLOBAL_DISBLDSC','Wszystkie zabezpieczenia zostan� wy��czone.<br />nie zapomnij w��czy� ich ponownie, gdy uporasz si� z problemem');
define('_MI_PROTECTOR_LOG_LEVEL','Poziom logowania');
define('_MI_PROTECTOR_LOG_LEVELDSC','');

define('_MI_PROTECTOR_LOGLEVEL0','brak');
define('_MI_PROTECTOR_LOGLEVEL15','Ciche');
define('_MI_PROTECTOR_LOGLEVEL63','ciche');
define('_MI_PROTECTOR_LOGLEVEL255','pe�ne');

define('_MI_PROTECTOR_HIJACK_DENYGP','Grupy, kt�re nie mog� zmieni� IP podczas sesji');
define('_MI_PROTECTOR_HIJACK_DENYGPDSC','zabezpieczenie przed porwaniem sesji:<br />Zaznacz grup�, kt�ra nie mo�e zmieni� IP w czasie sesji.<br />(Nale�y zaznaczy� co najmniej Administrator�w.)');
define('_MI_PROTECTOR_SAN_NULLBYTE','Czyszczenie pustych bajt�w');
define('_MI_PROTECTOR_SAN_NULLBYTEDSC','Znak zako�czenia "\\0" jest zwykle u�ywany w spreparowanych niszcz�cych kodach.<br />pusty bajt b�dzie zmieniony na spacj�.<br />(nale�y bezwzgl�dnie ustawi� t� opcj� na w��czon�)');
define('_MI_PROTECTOR_DIE_NULLBYTE','Wyjd� je�li stwierdzone zostan� puste bajty');
define('_MI_PROTECTOR_DIE_NULLBYTEDSC','Znak zako�czenia "\\0" jest zwykle u�ywany podczas atak�w na serwisy.<br />(nale�y suatwi� t� opcj� w��czon�)');
define('_MI_PROTECTOR_DIE_BADEXT','Wyjd� je�li stwierdzono pr�b� uploadowania podejrzanego pliku');
define('_MI_PROTECTOR_DIE_BADEXTDSC','Je�li kto� b�dzie pr�bowa� wys�a� na serwer plik ze z�ym rozszerzeniem n.p.: .php , nast�pi wyj�cie z XOOPS.<br />Je�li cz�sto wysy�asz pliki php na u�ytek n.p.: B-Wiki lub PukiWikiModule, wy��cz t� opcj�.');
define('_MI_PROTECTOR_CONTAMI_ACTION','Dzia�anie w przypadku wykrycia pr�by ska�enia zmiennych');
define('_MI_PROTECTOR_CONTAMI_ACTIONDS','Wybierz dzia�anie, jakie system podejmie po pr�bie ska�enia zmiennych globalnych w XOOPS.<br />(sugerowane dzia�anie to Bia�a Strona)');
define('_MI_PROTECTOR_ISOCOM_ACTION','Wybierz dzia�anie, jakie system podejmie po wykryciu pr�by przekazania odseparowanych komentarzy ');
define('_MI_PROTECTOR_ISOCOM_ACTIONDSC','Przeciwdzia�anie SQL Injection:<br />Wybierz dzia�anie gdy b�dzie wprowadzony odseparowany znak "/*".<br />"Neutralizowanie" polega na dodaniu nast�pnego znaku "*/".<br />(sygerowana opcja to Neutralizowanie)');
define('_MI_PROTECTOR_UNION_ACTION','Wybierz dzia�anie gdy nastapi pr�ba dodania instrukcji UNION lub podobnej.');
define('_MI_PROTECTOR_UNION_ACTIONDSC','Przeciwdzia�anie SQL Injection:<br />wybierz dzia�anie gdy w zapytaniu pojawi si� sk�adnia podobna instrukcji UNION w SQL.<br />"Neutralizowanie" w tym przypadku polega na zmianie wyra�enia "union" na "uni-on".<br />(sugerowana opcja to Neutralizowanie)');
define('_MI_PROTECTOR_ID_INTVAL','Wymuszanie liczby ca�kowitej dla zapyta� zawieraj�cych zmienne typu id');
define('_MI_PROTECTOR_ID_INTVALDSC','Wszystkie zapytania zawieraj�ce "*id" b�d� traktowane jak liczba ca�kowita.<br />Ta opcja ochroni nas przed niekt�rymi typami atak�w typu XSS i SQL Injections.<br />Zaleca si� w��czenie tej opcj ale mo�e ona spowodowa� zak�ucenie dzia�ania niekt�rych modu��w.');
define('_MI_PROTECTOR_FILE_DOTDOT','Korygowanie w�tpliwych zapyta� do plik�w');
define('_MI_PROTECTOR_FILE_DOTDOTDSC','Usuwa ".." z zapyta�, kt�re wygl�daj� jak wywo�anie specyficznego pliku');

define('_MI_PROTECTOR_DOS_EXPIRE','Licznik czasu dla wielokrotnego prze�adowania strony (sec)');
define('_MI_PROTECTOR_DOS_EXPIREDSC','Warto�� czasu w sekundach, podczas kt�rego system monitoruje, czy prze�adowania strony nie s� atakiem F5 lub dzia�aniem nieprzyjaznego robota (Crawlera).');

define('_MI_PROTECTOR_DOS_F5COUNT','Licznik ods�on dla ataku F5');
define('_MI_PROTECTOR_DOS_F5COUNTDSC','Ochrona przed atakiem DoS.<br />Powyzej tej warto�ci prze�adowa� system uzna, �e ma do czynienia z atakiem F5 (DoS).');
define('_MI_PROTECTOR_DOS_F5ACTION','Dzia�anie po wykryciu pr�by ataku F5');

define('_MI_PROTECTOR_DOS_CRCOUNT','Licznik ods�on dla Crawler�w (robot�w przeci��aj�cych system)');
define('_MI_PROTECTOR_DOS_CRCOUNTDSC','Zabezpieczenie przed robotami przeci��aj�cymi system.<br />Ta warto�� okre�la kiedy liczba ods�on dla robota zostanie uznana za przegi�cie.');
define('_MI_PROTECTOR_DOS_CRACTION','Akcja przeciwko "m�cz�cym" robotom');

define('_MI_PROTECTOR_DOS_CRSAFE','Roboty indeksuj�ce wy��czone spod kontroli');
define('_MI_PROTECTOR_DOS_CRSAFEDSC','Etykieta w pearlu dla maszyn indeksuj�cych.<br />Je�li b�dzie si� pokrywa�, crawler nigdy nie zostanie uznany za "m�cz�cy".<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define('_MI_PROTECTOR_OPT_NONE','Nic (tylko logowanie)');
define('_MI_PROTECTOR_OPT_SAN','Neutralizowanie');
define('_MI_PROTECTOR_OPT_EXIT','Bia�a Strona');
define('_MI_PROTECTOR_OPT_BIP','Banuj IP');

define('_MI_PROTECTOR_DOSOPT_NONE','Nic (tylko logowanie)');
define('_MI_PROTECTOR_DOSOPT_SLEEP','U�pienie');
define('_MI_PROTECTOR_DOSOPT_EXIT','Bia�y Ekran');
define('_MI_PROTECTOR_DOSOPT_BIP','Banuj IP');
define('_MI_PROTECTOR_DOSOPT_HTA','ZABRO� (DENY) w pliku .htaccess(Experymentalnie)');

define('_MI_PROTECTOR_BIP_EXCEPT','Grupy, kt�re nigdy nie zostan� dodane jako Z�e IP');
define('_MI_PROTECTOR_BIP_EXCEPTDSC','Uzytkownicy nale��cy do zaznaczonej grupy(grup) nigdy nie b�d� mieli banowanego IP.<br />(ustaw co najmniej Administrator�w.)');
define('_MI_PROTECTOR_PATCH2092','Specjalna �ata dla Xoops <= 2.0.9.2');
define('_MI_PROTECTOR_PASSWD_BIP','Has�o ratunkowe (wy��czaj�ce bana na IP)');
define('_MI_PROTECTOR_PASSWD_BIPDSC','Je�eli jakim� cudem zostaniesz zbanowany ze swojego w�asnego serwisu, wejd� poprzez XOOPS_URL/modules/protector/admin/rescue.php i wpisz to has�o.<br />Powniene� ustawi� to has�o zaraz po zainstalowaniu modu�u, a zanim przez jak�� pomy�k� zbanujesz si� ze swojej w�asnej strony.<br />Je�li pozostawisz puste, skrypt odbanowuj�cy nigdy nie zadzia�a.<br />Zalecenie: U�ywaj innego has�a, ni� podstawowe has�o administratora!.');

?>
