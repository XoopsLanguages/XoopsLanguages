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
define("_MI_PROTECTOR_DESC","Modu³ zabezpieczaj±cy Xoopsa, przed ró¿nymi rodzajami ataków z sieci, takich jak: DoS , SQL Injection i ska¿eniem zmiennych.<br />\nWszystkie grupy powinny mieæ ustawiony dostêp do tego modu³u, a zw³aszcza grupa Go¶ci.");

// Names of blocks for this module (Not all module has blocks) 
// added by webfm for polish translation : From version 2.4 Protector hasn`t blocks
define("_MI_PROTECTOR_BNAME1","Protector");
define("_MI_PROTECTOR_BDESC1","Ten blok powinien ³adowaæ siê jako pierwszy od góry po prawej stronie na wszystkich stronach serwisu.");

// Menu
define("_MI_PROTECTOR_ADMININDEX","Centrum zabezpieczeñ");
define("_MI_PROTECTOR_ADVISORY","Porady bezpieczeñstwa");
define("_MI_PROTECTOR_PREFIXMANAGER","Manager Prefixu");

// Configs
define('_MI_PROTECTOR_GLOBAL_DISBL','Tymczasowo wy³±czony');
define('_MI_PROTECTOR_GLOBAL_DISBLDSC','Wszystkie zabezpieczenia zostan± wy³±czone.<br />nie zapomnij w³±czyæ ich ponownie, gdy uporasz siê z problemem');
define('_MI_PROTECTOR_LOG_LEVEL','Poziom logowania');
define('_MI_PROTECTOR_LOG_LEVELDSC','');

define('_MI_PROTECTOR_LOGLEVEL0','brak');
define('_MI_PROTECTOR_LOGLEVEL15','Ciche');
define('_MI_PROTECTOR_LOGLEVEL63','ciche');
define('_MI_PROTECTOR_LOGLEVEL255','pe³ne');

define('_MI_PROTECTOR_HIJACK_DENYGP','Grupy, które nie mog± zmieniæ IP podczas sesji');
define('_MI_PROTECTOR_HIJACK_DENYGPDSC','zabezpieczenie przed porwaniem sesji:<br />Zaznacz grupê, która nie mo¿e zmieniæ IP w czasie sesji.<br />(Nale¿y zaznaczyæ co najmniej Administratorów.)');
define('_MI_PROTECTOR_SAN_NULLBYTE','Czyszczenie pustych bajtów');
define('_MI_PROTECTOR_SAN_NULLBYTEDSC','Znak zakoñczenia "\\0" jest zwykle u¿ywany w spreparowanych niszcz±cych kodach.<br />pusty bajt bêdzie zmieniony na spacjê.<br />(nale¿y bezwzglêdnie ustawiæ t± opcjê na w³±czon±)');
define('_MI_PROTECTOR_DIE_NULLBYTE','Wyjd¼ je¶li stwierdzone zostan± puste bajty');
define('_MI_PROTECTOR_DIE_NULLBYTEDSC','Znak zakoñczenia "\\0" jest zwykle u¿ywany podczas ataków na serwisy.<br />(nale¿y suatwiæ t± opcjê w³±czon±)');
define('_MI_PROTECTOR_DIE_BADEXT','Wyjd¼ je¶li stwierdzono próbê uploadowania podejrzanego pliku');
define('_MI_PROTECTOR_DIE_BADEXTDSC','Je¶li kto¶ bêdzie próbowa³ wys³aæ na serwer plik ze z³ym rozszerzeniem n.p.: .php , nast±pi wyj¶cie z XOOPS.<br />Je¶li czêsto wysy³asz pliki php na u¿ytek n.p.: B-Wiki lub PukiWikiModule, wy³±cz t± opcjê.');
define('_MI_PROTECTOR_CONTAMI_ACTION','Dzia³anie w przypadku wykrycia próby ska¿enia zmiennych');
define('_MI_PROTECTOR_CONTAMI_ACTIONDS','Wybierz dzia³anie, jakie system podejmie po próbie ska¿enia zmiennych globalnych w XOOPS.<br />(sugerowane dzia³anie to Bia³a Strona)');
define('_MI_PROTECTOR_ISOCOM_ACTION','Wybierz dzia³anie, jakie system podejmie po wykryciu próby przekazania odseparowanych komentarzy ');
define('_MI_PROTECTOR_ISOCOM_ACTIONDSC','Przeciwdzia³anie SQL Injection:<br />Wybierz dzia³anie gdy bêdzie wprowadzony odseparowany znak "/*".<br />"Neutralizowanie" polega na dodaniu nastêpnego znaku "*/".<br />(sygerowana opcja to Neutralizowanie)');
define('_MI_PROTECTOR_UNION_ACTION','Wybierz dzia³anie gdy nastapi próba dodania instrukcji UNION lub podobnej.');
define('_MI_PROTECTOR_UNION_ACTIONDSC','Przeciwdzia³anie SQL Injection:<br />wybierz dzia³anie gdy w zapytaniu pojawi siê sk³adnia podobna instrukcji UNION w SQL.<br />"Neutralizowanie" w tym przypadku polega na zmianie wyra¿enia "union" na "uni-on".<br />(sugerowana opcja to Neutralizowanie)');
define('_MI_PROTECTOR_ID_INTVAL','Wymuszanie liczby ca³kowitej dla zapytañ zawieraj±cych zmienne typu id');
define('_MI_PROTECTOR_ID_INTVALDSC','Wszystkie zapytania zawieraj±ce "*id" bêd± traktowane jak liczba ca³kowita.<br />Ta opcja ochroni nas przed niektórymi typami ataków typu XSS i SQL Injections.<br />Zaleca siê w³±czenie tej opcj ale mo¿e ona spowodowaæ zak³ucenie dzia³ania niektórych modu³ów.');
define('_MI_PROTECTOR_FILE_DOTDOT','Korygowanie w±tpliwych zapytañ do plików');
define('_MI_PROTECTOR_FILE_DOTDOTDSC','Usuwa ".." z zapytañ, które wygl±daj± jak wywo³anie specyficznego pliku');

define('_MI_PROTECTOR_DOS_EXPIRE','Licznik czasu dla wielokrotnego prze³adowania strony (sec)');
define('_MI_PROTECTOR_DOS_EXPIREDSC','Warto¶æ czasu w sekundach, podczas którego system monitoruje, czy prze³adowania strony nie s± atakiem F5 lub dzia³aniem nieprzyjaznego robota (Crawlera).');

define('_MI_PROTECTOR_DOS_F5COUNT','Licznik ods³on dla ataku F5');
define('_MI_PROTECTOR_DOS_F5COUNTDSC','Ochrona przed atakiem DoS.<br />Powyzej tej warto¶ci prze³adowañ system uzna, ¿e ma do czynienia z atakiem F5 (DoS).');
define('_MI_PROTECTOR_DOS_F5ACTION','Dzia³anie po wykryciu próby ataku F5');

define('_MI_PROTECTOR_DOS_CRCOUNT','Licznik ods³on dla Crawlerów (robotów przeci±¿aj±cych system)');
define('_MI_PROTECTOR_DOS_CRCOUNTDSC','Zabezpieczenie przed robotami przeci±¿aj±cymi system.<br />Ta warto¶æ okre¶la kiedy liczba ods³on dla robota zostanie uznana za przegiêcie.');
define('_MI_PROTECTOR_DOS_CRACTION','Akcja przeciwko "mêcz±cym" robotom');

define('_MI_PROTECTOR_DOS_CRSAFE','Roboty indeksuj±ce wy³±czone spod kontroli');
define('_MI_PROTECTOR_DOS_CRSAFEDSC','Etykieta w pearlu dla maszyn indeksuj±cych.<br />Je¶li bêdzie siê pokrywaæ, crawler nigdy nie zostanie uznany za "mêcz±cy".<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define('_MI_PROTECTOR_OPT_NONE','Nic (tylko logowanie)');
define('_MI_PROTECTOR_OPT_SAN','Neutralizowanie');
define('_MI_PROTECTOR_OPT_EXIT','Bia³a Strona');
define('_MI_PROTECTOR_OPT_BIP','Banuj IP');

define('_MI_PROTECTOR_DOSOPT_NONE','Nic (tylko logowanie)');
define('_MI_PROTECTOR_DOSOPT_SLEEP','U¶pienie');
define('_MI_PROTECTOR_DOSOPT_EXIT','Bia³y Ekran');
define('_MI_PROTECTOR_DOSOPT_BIP','Banuj IP');
define('_MI_PROTECTOR_DOSOPT_HTA','ZABROÑ (DENY) w pliku .htaccess(Experymentalnie)');

define('_MI_PROTECTOR_BIP_EXCEPT','Grupy, które nigdy nie zostan± dodane jako Z³e IP');
define('_MI_PROTECTOR_BIP_EXCEPTDSC','Uzytkownicy nale¿±cy do zaznaczonej grupy(grup) nigdy nie bêd± mieli banowanego IP.<br />(ustaw co najmniej Administratorów.)');
define('_MI_PROTECTOR_PATCH2092','Specjalna ³ata dla Xoops <= 2.0.9.2');
define('_MI_PROTECTOR_PASSWD_BIP','Has³o ratunkowe (wy³±czaj±ce bana na IP)');
define('_MI_PROTECTOR_PASSWD_BIPDSC','Je¿eli jakim¶ cudem zostaniesz zbanowany ze swojego w³asnego serwisu, wejd¥ poprzez XOOPS_URL/modules/protector/admin/rescue.php i wpisz to has³o.<br />Powniene¶ ustawiæ to has³o zaraz po zainstalowaniu modu³u, a zanim przez jak±¶ pomy³kê zbanujesz siê ze swojej w³asnej strony.<br />Je¶li pozostawisz puste, skrypt odbanowuj±cy nigdy nie zadzia³a.<br />Zalecenie: U¿ywaj innego has³a, ni¿ podstawowe has³o administratora!.');

?>
