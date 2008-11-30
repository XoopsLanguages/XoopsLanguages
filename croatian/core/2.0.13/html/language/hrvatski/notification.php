<?php
// $Id: notification.php,v 1.6 2003/04/06 04:31:03 okazu Exp $

// RMV-NOTIFY

// Text for various templates...

define ('_NOT_NOTIFICATIONOPTIONS', 'Opcije obavje�tavanja');
define ('_NOT_UPDATENOW', 'Promijeni sad');
define ('_NOT_UPDATEOPTIONS', 'Promijeni opcije obavje�tavanja');
define ('_NOT_CLEAR', 'O�isti');
define ('_NOT_CHECKALL', 'Provjeri sve');
define ('_NOT_MODULE', 'Modul');
define ('_NOT_CATEGORY', 'Kategorija');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Ime');
define ('_NOT_EVENT', 'Doga�aj');
define ('_NOT_EVENTS', 'Doga�aji');
define ('_NOT_ACTIVENOTIFICATIONS', 'Aktivna Obavje�tavanja');
define ('_NOT_NAMENOTAVAILABLE', 'Ime nije raspolo�ivo');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Ime sastavka nije raspolo�ivo');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Vrsta sastavka nije raspolo�iva');
define ('_NOT_ITEMURLNOTAVAILABLE', 'URL sastavka nije raspolo�iv');
define ('_NOT_DELETINGNOTIFICATIONS', 'Bri�em obavijesi');
define ('_NOT_DELETESUCCESS', 'Obavijest uspje�no izbrisana.');
define ('_NOT_UPDATEOK', 'Obavije�tavanje uspje�no promijenjeno');
define ('_NOT_NOTIFICATIONMETHODIS', 'Na�in obavije�tavanja je');
define ('_NOT_EMAIL', 'emailom');
define ('_NOT_PM', 'privatnom porukom');
define ('_NOT_DISABLE', 'isklju�en');
define ('_NOT_CHANGE', 'Promijeni');

define ('_NOT_NOACCESS', 'Nemate dozvolu za pristup ovoj stranici.');

// Text for module config options

define ('_NOT_ENABLE', 'Uklju�eno');
define ('_NOT_NOTIFICATION', 'Obavije�tavanje');

define ('_NOT_CONFIG_ENABLED', 'Uklju�eno obavije�tavanje');
define ('_NOT_CONFIG_ENABLEDDSC', 'Ovaj modul omogu�ava korisnicama da uklju�e ako �ele biti obavije�teni o nekom doga�aju.  Odaberite "da" za uklju�enje ove opcije.');

define ('_NOT_CONFIG_EVENTS', 'Uklju�i specifi�nu radnju');
define ('_NOT_CONFIG_EVENTSDSC', 'Izaberite na koje se obavjesti doga�aja va�i korisnici mogu pribilje�iti.');

define ('_NOT_CONFIG_ENABLE', 'Uklju�i obavije�tavanje');
define ('_NOT_CONFIG_ENABLEDSC', 'Ovaj modul omogu�ava korisnicama da uklju�e ako �ele biti obavije�teni o nekom doga�aju.  Ozna�ite ako �elite da korisnici imaju opciju obavijesti u bloku (Block-style),  unutar modula (Inline-style), ili oboje.  Za block-style obavijesti, blok opcija obavijesti mora biti uklju�eno u modulu.');
define ('_NOT_CONFIG_DISABLE', 'Isklju�eno obavije�tavanje');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Uklju�i samo Block-style');
define ('_NOT_CONFIG_ENABLEINLINE', 'Uklju�i samo Inline-style');
define ('_NOT_CONFIG_ENABLEBOTH', 'Uklju�i obavijest (oba stila)');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Komentar objavljen');
define ('_NOT_COMMENT_NOTIFYCAP', 'Obavijesti me o novim objavama.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Primi obavijest kada je novi komentar dodan za ovaj predmet.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest: Komentar objavljen na  {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Komentar podnesen');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Obavijesti me kada je novi komentar podnesen za ovaj predmet.');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Primi obavijest kada god je novi komentar podnesen za ovaj predmet.');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-obavijest: komentar podnesen za {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Ozna�i');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Ozna�i ovaj predmet (bez obavijesti).');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Nadgledaj ovaj predmet bez primanja obavijesti o doga�anjima.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'Na�in obavije�tavanja: Kada nadgleda� npr. neki forum, kako �elite primati obavijesti o promjenama?');
define ('_NOT_METHOD_EMAIL', 'Emailom (na adresu iz mog profila)');
define ('_NOT_METHOD_PM', 'Privatnom porukom');
define ('_NOT_METHOD_DISABLE', 'Trenutno isklju�eno');

define ('_NOT_NOTIFYMODE', 'Standardni na�in obavije�tavanja');
define ('_NOT_MODE_SENDALWAYS', 'Obavijesti me o svim ozna�enim promjenama');
define ('_NOT_MODE_SENDONCE', 'Obavijesti me samo jednom');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Obavijesti me jednom, a onda isklju�i do ponovne prijave');

?>
