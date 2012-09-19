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
define("_MI_PROTECTOR_DESC","Moduł zabezpieczający Xoopsa, przed różnymi rodzajami ataków z sieci, takich jak: DoS , SQL Injection i skażeniem zmiennych.<br />\nWszystkie grupy powinny mieć ustawiony dostęp do tego modułu, a zwłaszcza grupa Gości.");

// Names of blocks for this module (Not all module has blocks) 
// added by webfm for polish translation : From version 2.4 Protector hasn`t blocks
define("_MI_PROTECTOR_BNAME1","Protector");
define("_MI_PROTECTOR_BDESC1","Ten blok powinien ładować się jako pierwszy od góry po prawej stronie na wszystkich stronach serwisu.");

// Menu
define("_MI_PROTECTOR_ADMININDEX","Centrum zabezpieczeń");
define("_MI_PROTECTOR_ADVISORY","Porady bezpieczeństwa");
define("_MI_PROTECTOR_PREFIXMANAGER","Manager Prefixu");

// Configs
define('_MI_PROTECTOR_GLOBAL_DISBL','Tymczasowo wyłączony');
define('_MI_PROTECTOR_GLOBAL_DISBLDSC','Wszystkie zabezpieczenia zostaną wyłączone.<br />nie zapomnij włączyć ich ponownie, gdy uporasz się z problemem');
define('_MI_PROTECTOR_LOG_LEVEL','Poziom logowania');
define('_MI_PROTECTOR_LOG_LEVELDSC','');

define('_MI_PROTECTOR_LOGLEVEL0','brak');
define('_MI_PROTECTOR_LOGLEVEL15','Ciche');
define('_MI_PROTECTOR_LOGLEVEL63','ciche');
define('_MI_PROTECTOR_LOGLEVEL255','pełne');

define('_MI_PROTECTOR_HIJACK_DENYGP','Grupy, które nie mogą zmienić IP podczas sesji');
define('_MI_PROTECTOR_HIJACK_DENYGPDSC','zabezpieczenie przed porwaniem sesji:<br />Zaznacz grupę, która nie może zmienić IP w czasie sesji.<br />(Należy zaznaczyć co najmniej Administratorów.)');
define('_MI_PROTECTOR_SAN_NULLBYTE','Czyszczenie pustych bajtów');
define('_MI_PROTECTOR_SAN_NULLBYTEDSC','Znak zakończenia "\\0" jest zwykle używany w spreparowanych niszczących kodach.<br />pusty bajt będzie zmieniony na spację.<br />(należy bezwzględnie ustawić tą opcję na włączoną)');
define('_MI_PROTECTOR_DIE_NULLBYTE','Wyjdź jeśli stwierdzone zostaną puste bajty');
define('_MI_PROTECTOR_DIE_NULLBYTEDSC','Znak zakończenia "\\0" jest zwykle używany podczas ataków na serwisy.<br />(należy suatwić tą opcję włączoną)');
define('_MI_PROTECTOR_DIE_BADEXT','Wyjdź jeśli stwierdzono próbę uploadowania podejrzanego pliku');
define('_MI_PROTECTOR_DIE_BADEXTDSC','Jeśli ktoś będzie próbował wysłać na serwer plik ze złym rozszerzeniem n.p.: .php , nastąpi wyjście z XOOPS.<br />Jeśli często wysyłasz pliki php na użytek n.p.: B-Wiki lub PukiWikiModule, wyłącz tą opcję.');
define('_MI_PROTECTOR_CONTAMI_ACTION','Działanie w przypadku wykrycia próby skażenia zmiennych');
define('_MI_PROTECTOR_CONTAMI_ACTIONDS','Wybierz działanie, jakie system podejmie po próbie skażenia zmiennych globalnych w XOOPS.<br />(sugerowane działanie to Biała Strona)');
define('_MI_PROTECTOR_ISOCOM_ACTION','Wybierz działanie, jakie system podejmie po wykryciu próby przekazania odseparowanych komentarzy ');
define('_MI_PROTECTOR_ISOCOM_ACTIONDSC','Przeciwdziałanie SQL Injection:<br />Wybierz działanie gdy będzie wprowadzony odseparowany znak "/*".<br />"Neutralizowanie" polega na dodaniu następnego znaku "*/".<br />(sygerowana opcja to Neutralizowanie)');
define('_MI_PROTECTOR_UNION_ACTION','Wybierz działanie gdy nastapi próba dodania instrukcji UNION lub podobnej.');
define('_MI_PROTECTOR_UNION_ACTIONDSC','Przeciwdziałanie SQL Injection:<br />wybierz działanie gdy w zapytaniu pojawi się składnia podobna instrukcji UNION w SQL.<br />"Neutralizowanie" w tym przypadku polega na zmianie wyrażenia "union" na "uni-on".<br />(sugerowana opcja to Neutralizowanie)');
define('_MI_PROTECTOR_ID_INTVAL','Wymuszanie liczby całkowitej dla zapytań zawierających zmienne typu id');
define('_MI_PROTECTOR_ID_INTVALDSC','Wszystkie zapytania zawierające "*id" będą traktowane jak liczba całkowita.<br />Ta opcja ochroni nas przed niektórymi typami ataków typu XSS i SQL Injections.<br />Zaleca się włączenie tej opcj ale może ona spowodować zakłucenie działania niektórych modułów.');
define('_MI_PROTECTOR_FILE_DOTDOT','Korygowanie wątpliwych zapytań do plików');
define('_MI_PROTECTOR_FILE_DOTDOTDSC','Usuwa ".." z zapytań, które wyglądają jak wywołanie specyficznego pliku');

define('_MI_PROTECTOR_DOS_EXPIRE','Licznik czasu dla wielokrotnego przeładowania strony (sec)');
define('_MI_PROTECTOR_DOS_EXPIREDSC','Wartość czasu w sekundach, podczas którego system monitoruje, czy przeładowania strony nie są atakiem F5 lub działaniem nieprzyjaznego robota (Crawlera).');

define('_MI_PROTECTOR_DOS_F5COUNT','Licznik odsłon dla ataku F5');
define('_MI_PROTECTOR_DOS_F5COUNTDSC','Ochrona przed atakiem DoS.<br />Powyzej tej wartości przeładowań system uzna, że ma do czynienia z atakiem F5 (DoS).');
define('_MI_PROTECTOR_DOS_F5ACTION','Działanie po wykryciu próby ataku F5');

define('_MI_PROTECTOR_DOS_CRCOUNT','Licznik odsłon dla Crawlerów (robotów przeciążających system)');
define('_MI_PROTECTOR_DOS_CRCOUNTDSC','Zabezpieczenie przed robotami przeciążającymi system.<br />Ta wartość określa kiedy liczba odsłon dla robota zostanie uznana za przegięcie.');
define('_MI_PROTECTOR_DOS_CRACTION','Akcja przeciwko "męczącym" robotom');

define('_MI_PROTECTOR_DOS_CRSAFE','Roboty indeksujące wyłączone spod kontroli');
define('_MI_PROTECTOR_DOS_CRSAFEDSC','Etykieta w pearlu dla maszyn indeksujących.<br />Jeśli będzie się pokrywać, crawler nigdy nie zostanie uznany za "męczący".<br />eg) /(msnbot|Googlebot|Yahoo! Slurp)/i');

define('_MI_PROTECTOR_OPT_NONE','Nic (tylko logowanie)');
define('_MI_PROTECTOR_OPT_SAN','Neutralizowanie');
define('_MI_PROTECTOR_OPT_EXIT','Biała Strona');
define('_MI_PROTECTOR_OPT_BIP','Banuj IP');

define('_MI_PROTECTOR_DOSOPT_NONE','Nic (tylko logowanie)');
define('_MI_PROTECTOR_DOSOPT_SLEEP','Uśpienie');
define('_MI_PROTECTOR_DOSOPT_EXIT','Biały Ekran');
define('_MI_PROTECTOR_DOSOPT_BIP','Banuj IP');
define('_MI_PROTECTOR_DOSOPT_HTA','ZABROŃ (DENY) w pliku .htaccess(Experymentalnie)');

define('_MI_PROTECTOR_BIP_EXCEPT','Grupy, które nigdy nie zostaną dodane jako Złe IP');
define('_MI_PROTECTOR_BIP_EXCEPTDSC','Uzytkownicy należący do zaznaczonej grupy(grup) nigdy nie będą mieli banowanego IP.<br />(ustaw co najmniej Administratorów.)');
define('_MI_PROTECTOR_PATCH2092','Specjalna łata dla Xoops <= 2.0.9.2');
define('_MI_PROTECTOR_PASSWD_BIP','Hasło ratunkowe (wyłączające bana na IP)');
define('_MI_PROTECTOR_PASSWD_BIPDSC','Jeżeli jakimś cudem zostaniesz zbanowany ze swojego własnego serwisu, wejdĽ poprzez XOOPS_URL/modules/protector/admin/rescue.php i wpisz to hasło.<br />Pownieneś ustawić to hasło zaraz po zainstalowaniu modułu, a zanim przez jakąś pomyłkę zbanujesz się ze swojej własnej strony.<br />Jeśli pozostawisz puste, skrypt odbanowujący nigdy nie zadziała.<br />Zalecenie: Używaj innego hasła, niż podstawowe hasło administratora!.');

?>
