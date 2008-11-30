<?php
// $Id: notification.php,v 1.6 2003/04/01 04:31:03 okazu Exp $

// RMV-NOTIFY

// Text for various templates...    NINCS TELJESEN LEFORD�TVA!!!!!!!

define ('_NOT_NOTIFICATIONOPTIONS', '�rtes�t�si Be�l�t�sok');
define ('_NOT_UPDATENOW', 'Friss�t�s Most!');
define ('_NOT_UPDATEOPTIONS', '�rtes�t�si be�l�t�sok Friss�t�se');

define ('_NOT_CLEAR', 'T�rl�s');
define ('_NOT_CHECKALL', '�sszes ellen�rz�se');
define ('_NOT_MODULE', 'Modul');
define ('_NOT_CATEGORY', 'Kateg�ria');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'N�v');
define ('_NOT_EVENT', 'Esem�ny');
define ('_NOT_EVENTS', 'Esem�nyek');
define ('_NOT_ACTIVENOTIFICATIONS', 'Akt�v �rtes�t�sek');
define ('_NOT_NAMENOTAVAILABLE', 'N�v nem el�rhet�');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Eszk�z n�v nem el�rhet�');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Eszk�z t�pus nem el�rhet�');
define ('_NOT_ITEMURLNOTAVAILABLE', 'Eszk�z URL nem el�rhet�');
define ('_NOT_DELETINGNOTIFICATIONS', '�rtes�t�s t�rl�se');
define ('_NOT_DELETESUCCESS', '�rtes�t�s(ek) T�rl�se k�sz!');
define ('_NOT_UPDATEOK', '�rtes�t�si be�l�t�sok friss�tve');
define ('_NOT_NOTIFICATIONMETHODIS', '�rtes�t�si m�d ');
define ('_NOT_EMAIL', 'E-mail');
define ('_NOT_PM', 'Priv�t �zenet');
define ('_NOT_DISABLE', 'Kikapcsolva');
define ('_NOT_CHANGE', 'V�ltoztat�s');

define ('_NOT_NOACCESS', 'Nincs jogod az oldal megtekint�s�hez!');

// Text for module config options

define ('_NOT_ENABLE', 'Bekapcsolva');
define ('_NOT_NOTIFICATION', '�rtes�t�sek');

define ('_NOT_CONFIG_ENABLED', '�rtes�t�sek Bekapcsolva');
define ('_NOT_CONFIG_ENABLEDDSC', 'Ez a modul lehet�v� teszi a felhaszn�l�knak, hogy be�l�ts�k, hogy �rtes�t�st kapjanak aimkor a kiv�lasztott esem�ny t�rt�nik. V�laszd az "Igen" -t, hogy be legyen kapcsolva a j�v�ben.');

define ('_NOT_CONFIG_EVENTS', 'Speci�lis esem�nyek Enged�ylez�se');
define ('_NOT_CONFIG_EVENTSDSC', ' v�laszd ki az �rtes�t�si esem�nyeket amire a felhaszn�l�k feliratkozhatnak.');

define ('_NOT_CONFIG_ENABLE', '�rtes�t�sek bekapcsol�sa');
define ('_NOT_CONFIG_ENABLEDSC', 'Ez a modul lehet�v� teszi a felhaszn�l�knak, hogy be�l�ts�k, hogy �rtes�t�st kapjanak aimkor a kiv�lasztott esem�ny t�rt�nik.  V�laszd ha a felhaszn�l�k az �rtes�t�si be�l�t�sokat Blokk -ban (blokk st�lus) �rik el.');
define ('_NOT_CONFIG_DISABLE', '�rtes�t�sek kikapcsol�sa');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Csak a  Blokk st�lus Bekapcsol�sa');
define ('_NOT_CONFIG_ENABLEINLINE', 'Csak a  soros St�lus Bekapcsol�sa ');
define ('_NOT_CONFIG_ENABLEBOTH', '�rtes�t�sek bekapcsol�sa (minden st�lus)');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Hozz�sz�l�s hozz�adva');
define ('_NOT_COMMENT_NOTIFYCAP', '�rtes�tsen, ha �j hozz�sz�l�s �rkezik ebben a t�m�ban');
define ('_NOT_COMMENT_NOTIFYDSC', '�rtes�tsen valah�nyszor �j hozz�sz�l�s �rkezik ide.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automata-�rtes��s: Hozz�sz�ltak: {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Hozz�sz�l�s elk�ldve');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', '�rtes�tsen, ha �j hozz�sz�l�s �rkezik (elfogad�sra v�r�)');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', '�rtes�tsen valah�nyszor �j hozz�sz�l�s �rkezik (elfogad�sra v�r�)');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatikus-�rtes�t�s: Hozz�sz�ltak: {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'K�nyvjelz�');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'K�nyvjelz�be v�tel (nem �rtes�t�s).');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'T�tel k�vet�se �rtes�t�s n�lk�l.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', '�rtes�t�si m�d');
define ('_NOT_NOTIFYMETHOD_DESC', 'Amikor megfigyelsz p�ld�ul egy f�rumot, hogyan szeretn�l �rtes�t�st kapni az �jdons�gokr�l?');

define ('_NOT_METHOD_EMAIL', 'E-mail (profilomban l�v� c�m haszn�lat�val)');
define ('_NOT_METHOD_PM', 'Priv�t �zenet');
define ('_NOT_METHOD_DISABLE', 'Ideiglenesen kikapcsolva');

define ('_NOT_NOTIFYMODE', 'Alap�rtelmezett �rtes�t�si M�d');
define ('_NOT_MODE_SENDALWAYS', '�rtes�tsen minden kiv�lasztott �jdons�gr�l');
define ('_NOT_MODE_SENDONCE', 'Csak egyszer �rtes�tsen');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Egyszer �rtes�tsen, majd kapcsolja ki, am�g ism�t be nem jelentkezek');

?>
