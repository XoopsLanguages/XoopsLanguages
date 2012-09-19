<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:55:54 dap997 Exp $
// Module Info

// The name of this module
define("_MI_MYADRESSES_NAME","Adresy");

// A brief description of this module
define("_MI_MYADRESSES_DESC","Tworzy sekcję adresów, które użytkownicy mogą przeglądać, dodawać i oceniać.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYADRESSES_BNAME1","Nowe adresy");
define("_MI_MYADRESSES_BNAME2","Najwyżej ocenione adresy");

// Sub menu titles
define("_MI_MYADRESSES_SMNAME1","Dodaj adres");
define("_MI_MYADRESSES_SMNAME2","Popularne adresy");
define("_MI_MYADRESSES_SMNAME3","Najwyżej ocenione");

// Names of admin menu items
define("_MI_MYADRESSES_ADMENU2","Dodawaj i zmieniaj adresy i ich kategorie");
define("_MI_MYADRESSES_ADMENU3","Adresy oczekujące na zatwierdzenie");
define("_MI_MYADRESSES_ADMENU4","Zgłoszenia złych adresów");
define("_MI_MYADRESSES_ADMENU5","Zgłoszenia zmian adresowych");
define("_MI_MYADRESSES_ADMENU6","Sprawdzanie linków w adresach");

// Title of config items
define('_MI_MYADRESSES_POPULAR', 'Ile odsłon potrzeba aby adres stał się popularny?');
define('_MI_MYADRESSES_NEWLINKS', 'Ile adresów ma być wyświetlonych na stronie głownej?');
define('_MI_MYADRESSES_PERPAGE', 'Ile adresów ma być wyświetlonych na stronie?');
define('_MI_MYADRESSES_USESHOTS', 'Wybierz -tak- aby dla kazdego adresu wyświetlić logo/baner.');
//define('_MI_MYADRESSES_USEFRAMES', 'Would you like to display the linked address withing a frame?');
define('_MI_MYADRESSES_SHOTWIDTH', 'Maksymalna szerokość logo/banera');
define('_MI_MYADRESSES_ANONPOST','Czy anonimowi użytkownicy mogą zgłaszać adresy?');
define('_MI_MYADRESSES_AUTOAPPROVE','Automatycznie zatwierdzaj zgłoszenia (bez ingerencji administratorów)?');

// Description of each config items
define('_MI_MYADRESSES_POPULARDSC', '');
define('_MI_MYADRESSES_NEWLINKSDSC', '');
define('_MI_MYADRESSES_PERPAGEDSC', '');
define('_MI_MYADRESSES_USEFRAMEDSC', '');
define('_MI_MYADRESSES_USESHOTSDSC', '');
define('_MI_MYADRESSES_SHOTWIDTHDSC', '');
define('_MI_MYADRESSES_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYADRESSES_GLOBAL_NOTIFY', 'Globalne');
define('_MI_MYADRESSES_GLOBAL_NOTIFYDSC', 'Ustawienia globalne dla powiadomień.');

define('_MI_MYADRESSES_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_MYADRESSES_CATEGORY_NOTIFYDSC', 'Opcje powiadomień które stosują się do bieżącej kategorii adresów.');

define('_MI_MYADRESSES_LINK_NOTIFY', 'Address');
define('_MI_MYADRESSES_LINK_NOTIFYDSC', 'Opcje powiadomień które stosują się do bieżącego adresu.');

define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFY', 'Nowa kategoria');
define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Powiadom mnie, kiedy zostanie stworzona nowa kategoria');
define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Przyjmuj powiadomienia o stworzeniu nowej kategorii.');
define('_MI_MYADRESSES_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Nowa kategoria adresów');

define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFY', 'Zgłoszono zmianę adresu');
define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Powiadom mnie o każdym zgłoszeniu zmiany adresu.');
define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Przyjmuj powiadomienia o zgłoszeniach zmian adresów.');
define('_MI_MYADRESSES_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Zgłoszono zmianę adresu');

define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFY', 'Zgłoszono nie działający link w adresie');
define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Powiadom mnie o nie działających linkach w adresach.');
define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Przyjmuj powiadomienia o nie działających linkach w adresach.');
define('_MI_MYADRESSES_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Zgłoszono nie działający link w adresie');

define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFY', 'Zgłoszono nowy adres');
define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Powiadom mnie o każdym zgłoszeniu nowego adresu.');
define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Przyjmuj powiadomienia o zgłoszeniach nowych adresów.');
define('_MI_MYADRESSES_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Zgłoszono nowy adres');

define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFY', 'Nowy adres');
define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFYCAP', 'Powiadom mnie, kiedy dodany zostanie nowy adres.');
define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFYDSC', 'Przyjmuj powiadomienia o nowych adresach.');
define('_MI_MYADRESSES_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Nowy adres');

define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFY', 'Zgłoszono nowy adres');
define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Powiadom mnie, kiedy zgłoszony będzie nowy adres z bieżącej kategorii.');
define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Przyjmuj powiadomienia o zgłoszeniach nowych adresów z bieżącej kategorii.');
define('_MI_MYADRESSES_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Zgłoszono nowy adres w kategorii');

define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFY', 'Nowy adres');
define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFYCAP', 'Powiadom mnie, kiedy dodany zostanie nowy adres do kategorii.');
define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFYDSC', 'Przyjmuj powiadomienia o nowych adresach  kategorii.');
define('_MI_MYADRESSES_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Nowy adres w kategorii');

define('_MI_MYADRESSES_LINK_APPROVE_NOTIFY', 'Adres zaakceptowano');
define('_MI_MYADRESSES_LINK_APPROVE_NOTIFYCAP', 'Powiadom mnie, kiedy adres zostanie zaakceptowany.');
define('_MI_MYADRESSES_LINK_APPROVE_NOTIFYDSC', 'Przyjmuj powiadomienia o zaakceptowanych adresach');
define('_MI_MYADRESSES_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} autopowiadomienie : Adres zaakceptowano');

?>
