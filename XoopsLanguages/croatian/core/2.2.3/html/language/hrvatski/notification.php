<?php
// $Id: notification.php,v 1.6.22.1 2005/06/06 14:49:44 mithyt2 Exp $

// RMV-NOTIFY

// Text for various templates...

define('_NOT_NOTIFICATIONOPTIONS','Opcije obavještavanja');
define('_NOT_UPDATENOW','Promijeni sad');
define('_NOT_UPDATEOPTIONS','Promijeni opcije obavještavanja');
define('_NOT_CLEAR','Oèisti');
define('_NOT_CHECKALL','Provjeri sve');
define('_NOT_MODULE','Modul');
define('_NOT_CATEGORY','Kategorija');
define('_NOT_ITEMID','ID');
define('_NOT_ITEMNAME','Ime');
define('_NOT_EVENT','Dogaðaj');
define('_NOT_EVENTS','Dogaðaji');
define('_NOT_ACTIVENOTIFICATIONS','Aktivna Obavještavanja');
define('_NOT_NAMENOTAVAILABLE','Ime nije raspoloživo');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE','Ime sastavka nije raspoloživo');
define('_NOT_ITEMTYPENOTAVAILABLE','Vrsta sastavka nije raspoloživa');
define('_NOT_ITEMURLNOTAVAILABLE','URL sastavka nije raspoloživ');
define('_NOT_DELETINGNOTIFICATIONS','Brišem obavijesi');
define('_NOT_DELETESUCCESS','Obavijest uspješno izbrisana.');
define('_NOT_UPDATEOK','Obaviještavanje uspješno promijenjeno');
define('_NOT_NOTIFICATIONMETHODIS','Naèin obaviještavanja je');
define('_NOT_EMAIL','emailom');
define('_NOT_PM','privatnom porukom');
define('_NOT_DISABLE','iskljuèen');
define('_NOT_CHANGE','Promijeni');

define('_NOT_NOACCESS','Nemate dozvolu za pristup ovoj stranici.');

// Text for module config options

define('_NOT_ENABLE','Ukljuèeno');
define('_NOT_NOTIFICATION','Obaviještavanje');

define('_NOT_CONFIG_ENABLED','Ukljuèeno obaviještavanje');
define('_NOT_CONFIG_ENABLEDDSC','Ovaj modul omoguèava korisnicama da ukljuèe ako žele biti obaviješteni o nekom dogaðaju.  Odaberite "da" za ukljuèenje ove opcije.');

define('_NOT_CONFIG_EVENTS','Ukljuèi specifiènu radnju');
define('_NOT_CONFIG_EVENTSDSC','Izaberite na koje se obavjesti dogaðaja vaši korisnici mogu pribilježiti.');

define('_NOT_CONFIG_ENABLE','Ukljuèi obaviještavanje');
define('_NOT_CONFIG_ENABLEDSC','Ovaj modul omoguèava korisnicama da ukljuèe ako žele biti obaviješteni o nekom dogaðaju.  Oznaèite ako želite da korisnici imaju opciju obavijesti u bloku (Block-style),  unutar modula (Inline-style), ili oboje.  Za block-style obavijesti, blok opcija obavijesti mora biti ukljuèeno u modulu.');
define('_NOT_CONFIG_DISABLE','Iskljuèeno obaviještavanje');
define('_NOT_CONFIG_ENABLEBLOCK','Ukljuèi samo Block-style');
define('_NOT_CONFIG_ENABLEINLINE','Ukljuèi samo Inline-style');
define('_NOT_CONFIG_ENABLEBOTH','Ukljuèi obavijest (oba stila)');

// For notification about comment events

define('_NOT_COMMENT_NOTIFY','Komentar objavljen');
define('_NOT_COMMENT_NOTIFYCAP','Obavijesti me o novim objavama.');
define('_NOT_COMMENT_NOTIFYDSC','Primi obavijest kada je novi komentar dodan za ovaj predmet.');
define('_NOT_COMMENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest: Komentar objavljen na  {X_ITEM_TYPE}');

define('_NOT_COMMENTSUBMIT_NOTIFY','Komentar podnesen');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP','Obavijesti me kada je novi komentar podnesen za ovaj predmet.');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC','Primi obavijest kada god je novi komentar podnesen za ovaj predmet.');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest: komentar podnesen za {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define('_NOT_BOOKMARK_NOTIFY','Oznaèi');
define('_NOT_BOOKMARK_NOTIFYCAP','Oznaèi ovaj predmet (bez obavijesti).');
define('_NOT_BOOKMARK_NOTIFYDSC','Nadgledaj ovaj predmet bez primanja obavijesti o dogaðanjima.');

// For user profile
// FIXME: These should be reworded a little...

define('_NOT_NOTIFYMETHOD','Naèin obaviještavanja: Kada nadgledaš npr. neki forum, kako želite primati obavijesti o promjenama?');
define('_NOT_METHOD_EMAIL','Emailom (na adresu iz mog profila)');
define('_NOT_METHOD_PM','Privatnom porukom');
define('_NOT_METHOD_DISABLE','Trenutno iskljuèeno');

define('_NOT_NOTIFYMODE','Standardni naèin obaviještavanja');
define('_NOT_MODE_SENDALWAYS','Obavijesti me o svim oznaèenim promjenama');
define('_NOT_MODE_SENDONCE','Obavijesti me samo jednom');
define('_NOT_MODE_SENDONCEPERLOGIN','Obavijesti me jednom, a onda iskljuèi do ponovne prijave');

define("_NOT_NOTIFYMETHOD_DESC","Kada vi nadzirate npr. forum, kako  biste htjeli primati obavijesti ažuriranja?");
?>
