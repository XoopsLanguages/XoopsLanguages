<?php
define("_DB_TABLESTRUCTURE","Struktura tabeli");
define("_DB_DUMPINGDATA","Zrzu� dane dla tabeli");
define("_DB_CONFIG","Ustawienia");
//define("_DB_PERMISSIONS","Global Permissions");
define("_DB_NOTABLESFOUND","Brak tabel w bazie danych.");
define("_DB_BACKUP","Archiwizuj baz� danych");
define("_DB_RESTORE","Odtw�rz baz� danych");
define("_DB_CACHE","Aktualizuj bufor kofiguracyjny");
define("_DB_NOADMIN","NIE admin");
define("_DB_SELECTFILE","Wybierz plik");
define("_DB_BACKUP_FOR", 'Archiwizacja bazy danych dla %s');
define("_DB_CREATEON", 'Baz� stworzono');
define("_DB_DOWNLOAD", "Pobierz archiwum klikaj�c na odno�nik");
define("_DB_BACKUP_READY", "Archiwizacja zako�czona pomy�lnie!");

define("_DB_README","
XOOPS Backup<br /><br />

instalacja:<ol>
<li>utw�rz folder (sugerowany upload/backup) do przechowania plik�w z archiwami
<li>zmie� uprawnienia folderu chmod 777
<li>Zainstaluj jak ka�dy modu�  (system admin - modu�y)
<li>Je�li chcesz aby proces np. cron robi� archiwum automatycznie co jaki� czas podaj w procesie nastepuj�c� �cie�k�: Tw�jXoopsUrl/modules/backup/admin/backup.php
</ol>

Autorzy:<ul> 
<li>backup -- webmaster@nagl.ch ( http://www.nagl.ch )
<li>restore (bigdump) -- Alexey Ozerov (alexey at ozerov dot de)
<li>Integration and improvement: D.J. (phppp, http://xoops.org.cn)
</ul>
");
?>
