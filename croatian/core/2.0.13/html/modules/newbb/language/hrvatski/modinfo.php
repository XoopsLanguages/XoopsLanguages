<?php
// $Id: modinfo.php,v 1.15 2004/12/26 19:11:59 onokazu Exp $
// Module Info

// The name of this module
define("_MI_NEWBB_NAME","Forum");

// A brief description of this module
define("_MI_NEWBB_DESC","Forum modul za XOOPS");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BNAME1","Aktualne teme");
define("_MI_NEWBB_BNAME2","Najèitanije teme");
define("_MI_NEWBB_BNAME3","Najaktivnije teme");
define("_MI_NEWBB_BNAME4","Aktualne privatne teme");

// Names of admin menu items
define("_MI_NEWBB_ADMENU1","Dodaj forum");
define("_MI_NEWBB_ADMENU2","Uredi forum");
define("_MI_NEWBB_ADMENU3","Uredi privatni forum");
define("_MI_NEWBB_ADMENU4","Uskladi forum/teme");
define("_MI_NEWBB_ADMENU5","Dodaj kategoriju");
define("_MI_NEWBB_ADMENU6","Uredi kategoriju");
define("_MI_NEWBB_ADMENU7","Izbriši kategoriju");
define("_MI_NEWBB_ADMENU8","Presloži kategoriju");

// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','Tema');
define('_MI_NEWBB_THREAD_NOTIFYDSC','Opcije obaviještavanja koje se odnose na trenutnu temu.');

define('_MI_NEWBB_FORUM_NOTIFY','Forum');
define('_MI_NEWBB_FORUM_NOTIFYDSC','Opcije obavještavanja koje se odnose na trenutni forum.');

define('_MI_NEWBB_GLOBAL_NOTIFY','Opæenito');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','Opæenite opcije obavještavanja.');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','Nova poruka');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','Obavijesti me o novoj poruki u trenutnoj temi.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','Primi obavijest kad se stvori nova poruka u trenutnoj temi.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova poruka u temi');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','Nova tema');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','Obavijesti me o novoj temi u trenutnom forumu.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','Primi obavijest kad se zapoène nova tema u trenutnom forumu.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova tema u forumu');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','Novi forum');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','Obavijesti me o novom forumu.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','Primi obavijest kad je stvoren novi forum.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Novi forum');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','Nova poruka');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','Obavijesti me o novim porukama.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','Primi obavijest o novi porukama.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova poruka');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','Nova poruka');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','Obavijesti me o novoj poruki u trenutnom forumu.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','Primi obavijest o novoj poruki u trenutnom forumu.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova poruka u forumu');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','Nova poruka (puni tekst)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','Obavijesti me o novim porukama (ukljuèi puni tekst poruke).');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','Primi obavijest kad je objavljena nova poruka.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-obavijest : Nova poruka (puni tekst)');

?>
