<?php
// $Id: notification.php 1530 2008-05-01 09:22:47Z phppp $

// RMV-NOTIFY

// Text for various templates...

define ('_NOT_NOTIFICATIONOPTIONS', 'Opzioni per le notifiche');
define ('_NOT_UPDATENOW', 'Aggiorna adesso');
define ('_NOT_UPDATEOPTIONS', 'Aggiorna opzioni di notifica');

define ('_NOT_CLEAR', 'Pulisci');
define ('_NOT_CHECKALL', 'Controlla tutti');
define ('_NOT_MODULE', 'Modulo');
define ('_NOT_CATEGORY', 'Categoria');
define ('_NOT_ITEMID', 'ID');
define ('_NOT_ITEMNAME', 'Nome');
define ('_NOT_EVENT', 'Evento');
define ('_NOT_EVENTS', 'Eventi');
define ('_NOT_ACTIVENOTIFICATIONS', 'Notifiche attive');
define ('_NOT_NAMENOTAVAILABLE', 'Nome non disponibile');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define ('_NOT_ITEMNAMENOTAVAILABLE', 'Elemento non disponibile');
define ('_NOT_ITEMTYPENOTAVAILABLE', 'Tipo di elemento non disponibile');
define ('_NOT_ITEMURLNOTAVAILABLE', 'URL dell\'elemento non disponibile');
define ('_NOT_DELETINGNOTIFICATIONS', 'Elimina notifiche');
define ('_NOT_DELETESUCCESS', 'Notifiche cancellate con successo.');
define ('_NOT_UPDATEOK', 'Opzioni di notifica aggiornate con successo');
define ('_NOT_NOTIFICATIONMETHODIS', 'Il metodo di notifica è');
define ('_NOT_EMAIL', 'email');
define ('_NOT_PM', 'messaggio privato');
define ('_NOT_DISABLE', 'disabilitato');
define ('_NOT_CHANGE', 'Cambia');

define ('_NOT_NOACCESS', 'Non hai i permessi per accedere a quasta pagina.');

// Text for module config options

define ('_NOT_ENABLE', 'Abilita');
define ('_NOT_NOTIFICATION', 'Notifiche');

define ('_NOT_CONFIG_ENABLED', 'Abilita notifiche');
define ('_NOT_CONFIG_ENABLEDDSC', 'Questo modulo consente agli utenti di scegliere di essere avvertito quando alcuni eventi si verificano. Scegli "sì" per attivare questa funzione.');

define ('_NOT_CONFIG_EVENTS', 'Abilita eventi specifici');
define ('_NOT_CONFIG_EVENTSDSC', 'Seleziona gli eventi per i quali i tuoi utenti possono ricevere la notifica.');

define ('_NOT_CONFIG_ENABLE', 'Abilita notifiche');
define ('_NOT_CONFIG_ENABLEDSC', 'Questo modulo consente agli utenti di scegliere di essere avvertito quando alcuni eventi si verificano.   Selezionare se gli utenti devono essere avvisati con delle opzioni di notifica in un Blocco (Block-style), all\'interno del modulo (Inline-style), o entrambi. Per la notifica Block-style, l\'opzione di notifica deve essere abilitato per questo modulo. ');
define ('_NOT_CONFIG_DISABLE', 'Disabilita notifiche');
define ('_NOT_CONFIG_ENABLEBLOCK', 'Abilita solo Block-style');
define ('_NOT_CONFIG_ENABLEINLINE', 'EAbilita solo Inline-style');
define ('_NOT_CONFIG_ENABLEBOTH', 'Abilita entrambi i metodi di notifica');

// For notification about comment events

define ('_NOT_COMMENT_NOTIFY', 'Commento aggiunto');
define ('_NOT_COMMENT_NOTIFYCAP', 'Notificami quando virnr aggiunto un commento a questo elemento.');
define ('_NOT_COMMENT_NOTIFYDSC', 'Ricevi una notifica ogni volta un nuovo commento è inviato (o approvato) per questo elemento.');
define ('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-noifica: Commento aggiunto a {X_ITEM_TYPE}');

define ('_NOT_COMMENTSUBMIT_NOTIFY', 'Commento inviato');
define ('_NOT_COMMENTSUBMIT_NOTIFYCAP', 'Inviami una notifica quando un nuovo commento è inviato (in attesa di approvazione) per questo elemento.');
define ('_NOT_COMMENTSUBMIT_NOTIFYDSC', 'Ricevi una notifica ogni volta che un nuovo commento è inviato (in attesa di approvazione) per questo elemento.');
define ('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-noifica: Commento inviato a {X_ITEM_TYPE}');

// For notification bookmark feature
// (Not really notification, but easy to do with this module)

define ('_NOT_BOOKMARK_NOTIFY', 'Segnalibro');
define ('_NOT_BOOKMARK_NOTIFYCAP', 'Metti questo elemento nei segnalibri (nessuna notifica).');
define ('_NOT_BOOKMARK_NOTIFYDSC', 'Tieni traccia di questo elemento senza ricevere le notifiche degli eventi.');

// For user profile
// FIXME: These should be reworded a little...

define ('_NOT_NOTIFYMETHOD', 'Metodo di notifica<br /> Quando stai aspettando una notifica (ad esempio da un forum), in che modo la vuoi ricevere?');
define ('_NOT_METHOD_EMAIL', 'Email (usa l\'indirizzo nel mio profilo)');
define ('_NOT_METHOD_PM', 'Messaggio privato');
define ('_NOT_METHOD_DISABLE', 'Temporaneamente disabilitato');

define ('_NOT_NOTIFYMODE', 'Metodo di notifica predefinito');
define ('_NOT_MODE_SENDALWAYS', 'Notificami per tutti gli aggiornamenti selezionati');
define ('_NOT_MODE_SENDONCE', 'Notifica solo una volta');
define ('_NOT_MODE_SENDONCEPERLOGIN', 'Notificami solo una volta e poi disabilita le notifiche fino al prossimo Login');

define ('_NOT_NOTHINGTODELETE', 'Nulla da eliminare.');
?>