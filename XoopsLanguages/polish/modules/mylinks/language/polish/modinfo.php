<?php
// $Id: modinfo.php,v 1.1 2007/02/10 18:55:24 dap997 Exp $
// Module Info

// The name of this module
define("_MI_MYLINKS_NAME","Linki");

// A brief description of this module
define("_MI_MYLINKS_DESC","Tworzy sekcję, gdzie użytkownicy mogą wyszukiwać/dodawać/oceniać różne strony WWW.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYLINKS_BNAME1","Najnowsze linki");
define("_MI_MYLINKS_BNAME2","Najpopularniejsze linki");

// Sub menu titles
define("_MI_MYLINKS_SMNAME1","Dodaj");
define("_MI_MYLINKS_SMNAME2","Najpopularniejsze");
define("_MI_MYLINKS_SMNAME3","Najwyżej ocenione");

// Names of admin menu items
define("_MI_MYLINKS_ADMENU2","Dodaj/Usuń Linki");
define("_MI_MYLINKS_ADMENU3","Dodane Linki");
define("_MI_MYLINKS_ADMENU4","Złe Linki");
define("_MI_MYLINKS_ADMENU5","Zmodyfikowane Linki");
define("_MI_MYLINKS_ADMENU6","Sprawdzenie linku");

// Title of config items
define('_MI_MYLINKS_POPULAR', 'Odsłon, żeby strona stała sie popularna');
define('_MI_MYLINKS_NEWLINKS', 'Liczba nowych linków na strone');
define('_MI_MYLINKS_PERPAGE', 'Liczba linków na strone');
define('_MI_MYLINKS_USESHOTS', 'Użyć screenshotu?');
define('_MI_MYLINKS_USEFRAMES', 'Użyć ramek?');
define('_MI_MYLINKS_SHOTWIDTH', 'Wymiary screenshotu');
define("_MI_MYLINKS_ANONPOST","Zezwolić na dodawanie linków przez nie zarejestrowanych użytkowników?");
define('_MI_MYLINKS_AUTOAPPROVE','Zezwolić na automatyczna akceptacje linków?');

// Description of each config items
define('_MI_MYLINKS_POPULARDSC', 'Liczba kliknięć żeby link stał sie popularny');
define('_MI_MYLINKS_NEWLINKSDSC', 'Maksymalna liczba nowych linków wyświetlanych na stronie');
define('_MI_MYLINKS_PERPAGEDSC', 'Maksymalna liczba linków wyświetlanych na stronie');
define('_MI_MYLINKS_USEFRAMEDSC', 'Wybierz jeśli chcesz wyświetlać w ramce twojej strony');
define('_MI_MYLINKS_USESHOTSDSC', 'Wybierz TAK by wyświetlać screenshoty dla każdego linku');
define('_MI_MYLINKS_SHOTWIDTHDSC', 'Wprowadź maksymalną szerokość screenshota');
define('_MI_MYLINKS_AUTOAPPROVEDSC','');

// Text for notifications

define('_MI_MYLINKS_GLOBAL_NOTIFY', 'Global');
define('_MI_MYLINKS_GLOBAL_NOTIFYDSC', 'Global links notification options.');

define('_MI_MYLINKS_CATEGORY_NOTIFY', 'Category');
define('_MI_MYLINKS_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current link category.');

define('_MI_MYLINKS_LINK_NOTIFY', 'Link');
define('_MI_MYLINKS_LINK_NOTIFYDSC', 'Notification options that aply to the current link.');

define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'New Category');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notify me when a new link category is created.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new link category is created.');
define('_MI_MYLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link category');

define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Modify Link Requested');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notify me of any link modification request.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receive notification when any link modification request is submitted.');
define('_MI_MYLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Link Modification Requested');

define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Broken Link Submitted');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notify me of any broken link report.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receive notification when any broken link report is submitted.');
define('_MI_MYLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Broken Link Reported');

define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'New Link Submitted');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notify me when any new link is submitted (awaiting approval).');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receive notification when any new link is submitted (awaiting approval).');
define('_MI_MYLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link submitted');

define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFY', 'New Link');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Notify me when any new link is posted.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Receive notification when any new link is posted.');
define('_MI_MYLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link');

define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFY', 'New Link Submitted');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYCAP', 'Notify me when a new link is submitted (awaiting approval) to the current category.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYDSC', 'Receive notification when a new link is submitted (awaiting approval) to the current category.');
define('_MI_MYLINKS_CATEGORY_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link submitted in category');

define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFY', 'New Link');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Notify me when a new link is posted to the current category.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Receive notification when a new link is posted to the current category.');
define('_MI_MYLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link in category');

define('_MI_MYLINKS_LINK_APPROVE_NOTIFY', 'Link Approved');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYCAP', 'Notify me when this link is approved.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYDSC', 'Receive notification when this link is approved.');
define('_MI_MYLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Link approved');

?>