<?php /* Na bazie tłumaczenia dla wersji 3 webfm poprawił dap997 2005-01-04 */
define("_DB_TABLESTRUCTURE"        ,"Struktura tabeli");
define("_DB_DUMPINGDATA"           ,"Zrzuć dane dla tabeli");
define("_DB_CONFIG"                ,"Ustawienia");
//define("_DB_PERMISSIONS"         ,"Prawa dostępu");
define("_DB_NOTABLESFOUND"         ,"Brak tabel w bazie danych.");
define("_DB_BACKUP"                ,"Archiwizuj bazę danych");
define("_DB_RESTORE"               ,"Odtwórz bazę danych");
define("_DB_CACHE"                 ,"Aktualizuj bufor konfiguracyjny");
define("_DB_NOADMIN"               ,"NIE admin");
define("_DB_SELECTFILE"            ,"Wybierz plik");
define("_DB_BACKUP_FOR"            ,'Archiwizacja bazy danych dla %s');
define("_DB_CREATEON"              ,'Bazę stworzono');
define("_DB_DOWNLOAD"              ,"Pobierz archiwum klikając na odnośnik");
define("_DB_BACKUP_READY"          ,"Archiwizacja zakończona pomyślnie!");

define("_DB_README","
XOOPS Backup<br /><br />

instalacja:<ol>
<li>utwórz folder (sugerowany upload/backup) do przechowania plików z archiwami
<li>zmień uprawnienia folderu chmod 777
<li>Zainstaluj jak każdy moduł  (system admin - moduły)
<li>Jeśli chcesz aby jakiś proces np. cron robił archiwum automatycznie co jakiś czas podaj w procesie nastepującą ścieżkę: TwójXoopsUrl/modules/backup/admin/backup.php
</ol>

Autorzy:<ul> 
<li>backup -- webmaster@nagl.ch ( http://www.nagl.ch )
<li>restore (bigdump) -- Alexey Ozerov (alexey at ozerov dot de)
<li>Integration and improvement: D.J. (phppp, http://xoops.org.cn)
</ul>
");
?>
