<?php
// $Id: notification.php 1530 2008-05-01 09:22:47Z phppp $

// RMV-NOTIFY

// Text for various templates...

define("_NOT_NOTIFICATIONOPTIONS", "Opcje powiadamiania");
define("_NOT_UPDATENOW", "Uaktualnij teraz");
define("_NOT_UPDATEOPTIONS", "Uaktualnij Opcje powiadamiania");
define("_NOT_CLEAR", "Wyczyść");
define("_NOT_CHECKALL", "Sprawdź wszystko");
define("_NOT_MODULE", "Moduł");
define("_NOT_CATEGORY", "Kategoria");
define("_NOT_ITEMID", "ID");
define("_NOT_ITEMNAME", "Nazwa");
define("_NOT_EVENT", "Zdarzenie");
define("_NOT_EVENTS", "Zdarzenia");
define("_NOT_ACTIVENOTIFICATIONS", "Włączone powiadamianie");
define("_NOT_NAMENOTAVAILABLE", "Nazwa niedostępna");
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define("_NOT_ITEMNAMENOTAVAILABLE", "Brak nazwy przedmiotu");
define("_NOT_ITEMTYPENOTAVAILABLE", "Brak typu przedmiotu");
define("_NOT_ITEMURLNOTAVAILABLE", "Brak adresu URL przedmiotu");
define("_NOT_DELETINGNOTIFICATIONS", "Kasowanie powiadamiania");
define("_NOT_DELETESUCCESS", "Powiadamianie skasowane");
define("_NOT_UPDATEOK", "Opcje powiadamiania zostały uaktualnione");
define("_NOT_NOTIFICATIONMETHODIS", "Powiadamianie używa następującej metody");
define("_NOT_EMAIL", "email");
define("_NOT_PM", "prywatne wiadomości");
define("_NOT_DISABLE", "zablokowane");
define("_NOT_CHANGE", "Zmień");
define("_NOT_NOACCESS", "Nie masz dostępu do tej strony.");
// Text for module config options

define("_NOT_ENABLE", "Włącz");
define("_NOT_NOTIFICATION", "Powiadamianie");
define("_NOT_CONFIG_ENABLED", "Włącz powiadamianie");
define("_NOT_CONFIG_ENABLEDDSC", "Ten moduł umożliwia użytkownikom otrzymanie powiadomienia gdy zaistnieje odpowiednie zdarzenie. Wybierz 'tak' aby włączyc tę funkcję.");
define("_NOT_CONFIG_EVENTS", "Włącz to zdarzenie");
define("_NOT_CONFIG_EVENTSDSC", "Wybierz jakie powiadomienia może włączyć użytkownik.");
define("_NOT_CONFIG_ENABLE", "Włącz powiadamianie");
define("_NOT_CONFIG_ENABLEDSC", "Ten moduł umożliwia użytkownikom otrzymanie powiadomienia gdy zaistnieje wybrane zdarzenie. Wybierz, czy użytkownik powinien mieć możliwość wyboru opcji powiadomień w bloku (Blok-style) albo w module (Inline-style) albo w obu. Aby użyć powiadamiania w bloku, ta opcja musi być włączona dla danego modułu.");
define("_NOT_CONFIG_DISABLE", "Wyłącz powiadamianie");
define("_NOT_CONFIG_ENABLEBLOCK", "Włącz tylko powiadamianie w bloku");
define("_NOT_CONFIG_ENABLEINLINE", "Włącz tylko powiadamianie Inline-style");
define("_NOT_CONFIG_ENABLEBOTH", "Włącz powiadamianie (oba style)");
// For notification about comment events

define("_NOT_COMMENT_NOTIFY", "Komentarz dodany");
define("_NOT_COMMENT_NOTIFYCAP", "Powiadom mnie gdy zostanie dodany komentarz do tej pozycji.");
define("_NOT_COMMENT_NOTIFYDSC", "Otrzymasz powiadomienie gdy jakikolwiek nowy Komentarz zostanie dodany (albo zaaprobowany) do tej pozycji.");
define("_NOT_COMMENT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notify: Dodany komentarz do {X_ITEM_TYPE}");
define("_NOT_COMMENTSUBMIT_NOTIFY", "Komentarz dodany");
define("_NOT_COMMENTSUBMIT_NOTIFYCAP", "Powiadom mnie gdy zostanie dodany Komentarz do tej pojzycji.");
define("_NOT_COMMENTSUBMIT_NOTIFYDSC", "Otrzymasz powiadomienie gdy jakiolwiek nowy komentarz zostanie dodany (albo zaaprobowany) do tej pozycji.");
define("_NOT_COMMENTSUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} auto-notify: Dodany komentarz do {X_ITEM_TYPE}");
// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define("_NOT_BOOKMARK_NOTIFY", "Ulubione");
define("_NOT_BOOKMARK_NOTIFYCAP", "Dodaj do ulubionych (bez powiadomienia).");
define("_NOT_BOOKMARK_NOTIFYDSC", "Śledź tą pozycję bez otrzymywania powiadomień.");
// For user profile
// FIXME: These should be reworded a little...

define("_NOT_NOTIFYMETHOD", "Metoda powiadamiania - sposób w jaki otrzymasz powiadomienia");
define("_NOT_METHOD_EMAIL", "Email (użyj adresu z mojego profilu)");
define("_NOT_METHOD_PM", "Wiadomość prywatna");
define("_NOT_METHOD_DISABLE", "Czasowo wyłączone");
define("_NOT_NOTIFYMODE", "Domyślny tryb powiadomiania");
define("_NOT_MODE_SENDALWAYS", "Powiadom mnie o wszystkich zaznaczonych zmianach");
define("_NOT_MODE_SENDONCE", "Powiadom mnie tylko jeden raz");
define("_NOT_MODE_SENDONCEPERLOGIN", "Powiadom mnie tylko raz, następnie wyłącz powiadamianie do następnego logowania");
define("_NOT_NOTHINGTODELETE", "Nie ma nic do usunięcia.");
?>