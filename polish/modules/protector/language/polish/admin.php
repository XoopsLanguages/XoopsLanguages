<?php

// index.php

// Appended by Xoops Language Checker -GIJOE- in 2005-08-24 13:15:39
define('_AM_ADV_USETRANSSID','Your Session ID will be diplayed in anchor tags etc.<br />For preventing from session hi-jacking, add a line into .htaccess in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>');

define("_AM_TH_DATETIME","Czas");
define("_AM_TH_USER","Użytkownik");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENT");
define("_AM_TH_TYPE","Typ");
define("_AM_TH_DESCRIPTION","Opis");

define( "_AM_TH_BADIPS" , "Złe IP" ) ;
define( "_AM_TH_ENABLEIPBANS" , "Włączyć bany na IP?" ) ;

define( "_AM_LABEL_REMOVE" , "Usuń zaznaczone wpisy:" ) ;
define( "_AM_BUTTON_REMOVE" , "Usuń!" ) ;
define( "_AM_JS_REMOVECONFIRM" , "Na pewno?" ) ;
define( "_AM_MSG_PRUPDATED" , "Ustawienia zaktualizowane!" ) ;
define( "_AM_MSG_REMOVED" , "Zaznaczone wpisy zostały usunięte" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "Manager prefixu" ) ;
define( "_AM_MSG_DBUPDATED" , "Baza danych została uaktualniona!" ) ;
define( "_AM_CONFIRM_DELETE" , "Wszystkie dane zostaną zrzucone. OK?" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "Jeśli chcesz zmienić prefix w bazie,<br /> wyedytuj %s/mainfile.php za pomocą dowolnego edytora.<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Niebezpieczne");

define("_AM_ADV_REGISTERGLOBALS","Takie ustawienie pozwala na wiele ataków typu injections.<br />Jeśli to możliwe umieść plik .htaccess, wyedytuj lub utwórz...");
define("_AM_ADV_ALLOWURLFOPEN","To ustawienie pozwala na wykonanie niechcianych skryptów na zdalnych serwerach.<br />tylko administrator serwera może zmienić tą opcje.<br />Jeżeli nim jesteś, wyedytuj php.ini lub httpd.conf.<br /><b>Przykład edycji httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Jeśli nie jesteś adminem serwera, poproś go o to!.");
define("_AM_ADV_DBPREFIX","Takie ustawienie pozwala na atak typu 'SQL Injections'.<br />Nie zapomnij uaktywnić w ustawieniach opcji 'Wymuszone czyszczanie *'.");
define("_AM_ADV_LINK_TO_PREFIXMAN","Przejdź do managera prefixu");
define("_AM_ADV_MAINUNPATCHED","Powinieneś wyedytować plik mainfile.php tak jak napisano w pliku README.");
define("_AM_ADV_RESCUEPASSWORD","Hasło dostępowe");
define("_AM_ADV_RESCUEPASSWORDUNSET","Nie ustawione");
define("_AM_ADV_RESCUEPASSWORDSHORT","Za krótkie (min. 6 znaków)");

define("_AM_ADV_SUBTITLECHECK","Sprawdź, czy Protector działa poprawnie.");
define("_AM_ADV_AT1STSETPASSWORD","Na początek ustaw hasło dostępu w przypadku zbanowania admina");
define("_AM_ADV_CHECKCONTAMI","Zanieczyszczenie danych");
define("_AM_ADV_CHECKISOCOM","Odseparowanie komentarzy");



?>
