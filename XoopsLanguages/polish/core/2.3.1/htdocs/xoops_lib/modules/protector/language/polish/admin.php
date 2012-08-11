<?php
// $Id$
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: Jarek Wiktorowicz  <www.jarek.wiktorowicz.pl>

// mymenu
define("_MD_A_MYMENU_MYTPLSADMIN","");
define("_MD_A_MYMENU_MYBLOCKSADMIN","Uprawnienia");
define("_MD_A_MYMENU_MYPREFERENCES","Preferencje");
// index.php
define("_AM_TH_DATETIME","Data");
define("_AM_TH_USER","Użytkownik");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","Przeglądarka");
define("_AM_TH_TYPE","Typ");
define("_AM_TH_DESCRIPTION","Szczegóły");
define("_AM_TH_BADIPS","Zbanowane IP<br /><br /><span style='font-weight:normal;'>Wpisz każde IP w osobnej linii.<br />Pozostaw puste aby wyłączyć blokowanie IP.</span>");
define("_AM_TH_GROUP1IPS","Dozwolone IP dla grupy=1<br /><br /><span style='font-weight:normal;'>Wpisz każde IP w osobnej linii.<br />192.168. oznacza 192.168.*</span>");
define("_AM_LABEL_COMPACTLOG","Kompaktuj log");
define("_AM_BUTTON_COMPACTLOG","Kompaktuj!");
define("_AM_JS_COMPACTLOGCONFIRM","Zdublowane (IP,Type) wpisy zostaną usunięte");
define("_AM_LABEL_REMOVEALL","Usuń wszystkie wpisy");
define("_AM_BUTTON_REMOVEALL","Usuń wszystkie!");
define("_AM_JS_REMOVEALLCONFIRM","Wszystkie logi zostały bezpowrotnie usunięte. Jesteś pewien?");
define("_AM_LABEL_REMOVE","Usuń zaznaczone wpisy:");
define("_AM_BUTTON_REMOVE","Usuń!");
define("_AM_JS_REMOVECONFIRM","Na pewno usunąć?");
define("_AM_MSG_IPFILESUPDATED","Pliki z adresami IP zostały uaktualnione");
define("_AM_MSG_BADIPSCANTOPEN","Plik z zablokowanymi adresami IP nie może zostać odczytany");
define("_AM_MSG_GROUP1IPSCANTOPEN","Plik z adresami IP dla grupy=1 nie może zostać odczytany");
define("_AM_MSG_REMOVED","Zaznaczone wpisy zostały usunięte");
define("_AM_FMT_CONFIGSNOTWRITABLE","Nadaj prawa zapisu dla katalogu: %s");
// prefix_manager.php
define("_AM_H3_PREFIXMAN","Manager prefixu");
define("_AM_MSG_DBUPDATED","Baza danych została uaktualniona!");
define("_AM_CONFIRM_DELETE","Wszystkie dane zostaną usunięte. OK?");
define("_AM_TXT_HOWTOCHANGEDB","Jeśli chcesz zmienić prefix w bazie,<br /> wyedytuj %s/mainfile.php za pomocą dowolnego edytora.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>'); " ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Niebezpieczne");
define("_AM_ADV_REGISTERGLOBALS","Takie ustawienie pozwala na wiele ataków typu injections.<br />Jeśli to możliwe umieść plik .htaccess, wyedytuj lub utwórz...");
define("_AM_ADV_ALLOWURLFOPEN","To ustawienie pozwala na wykonanie niechcianych skryptów na zdalnych serwerach.<br />Tylko administrator serwera może zmienić tą opcję.<br />Jeżeli nim jesteś, wyedytuj php.ini lub httpd.conf.<br /><b>Przykład edycji httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Jeśli nie jesteś adminem serwera, poproś go o to!.");
define("_AM_ADV_USETRANSSID","Twoje ID sesji będzie widoczne w tagach odnośników.<br />Aby zabezpieczyć się przed kradzieżą sesji, dodaj następującą linię w pliku .htaccess w katalogu XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","Takie ustawienie pozwala na atak typu 'SQL Injections'.<br />Nie zapomnij uaktywnić w ustawieniach opcji 'Wymuszone czyszczenie *'".".");
define("_AM_ADV_LINK_TO_PREFIXMAN","Przejdź do managera prefixu");
define("_AM_ADV_MAINUNPATCHED","Powinieneś wyedytować plik mainfile.php tak jak napisano w pliku README.");
define("_AM_ADV_SUBTITLECHECK","Sprawdź, czy Protector jest skuteczny.");
define("_AM_ADV_CHECKCONTAMI","Zanieczyszczenie danych");
define("_AM_ADV_CHECKISOCOM","Odseparowanie komentarzy");
// Localization by ezsky
define("_AM_EZ_PREFIX","Prefix");
define("_AM_EZ_TABLES","Tabele");
define("_AM_EZ_UPDATED","Uaktualnione");
define("_AM_EZ_COPY","Kopiuj");
define("_AM_EZ_ACTIONS","Akcje");
define("_AM_EZ_BACKUP","Backup");
define("_AM_EZ_DELETE","Usuń");
?>