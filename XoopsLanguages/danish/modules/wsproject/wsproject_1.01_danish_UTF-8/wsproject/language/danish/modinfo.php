<?php
// $Id: modinfo.php,v 1.8 2005/09/06 21:52:55 gron Exp $
// Module Info

// The name of this module
define('_MI_WSPROJECT_NAME','wsProject');
// A brief description of this module
define('_MI_WSPROJECT_DESC','Et værktøj til administration af projekter.');

// Names of admin menu items
define('_MI_WSPROJECT_ADMENU1','Indstillinger');


//Die Menüpunkte
define('_MI_WSPROJECT_COMPLETEDPROJECTS','Gennemførte projekter');

define('_MI_WSPROJECT_ACTIVEPROJECTS','Aktive projekter');
define('_MI_WSPROJECT_MYTASKS','Mine opgaver');
define('_MI_WSPROJECT_NEWPROJECT','Nye projekter');

//Blocks
define('_MI_WSPROJECT_PROJECTSTATUS','Projekt status');
define('_MI_WSPROJECT_PROJECTOVERVIEW','Projekt overblik');


//Notifications
define('_MI_WSPROJECT_GLOBAL_NOTIFY','Global');
define('_MI_WSPROJECT_GLOBAL_NOTIFYDSC','Global notification indstillinger.');

define('_MI_WSPROJECT_PROJECT_NOTIFY','Projekter');
define('_MI_WSPROJECT_PROJECT_NOTIFYDSC','Besked indstillinger for projekter');

define('_MI_WSPROJECT_TASK_NOTIFY','Opgaver');
define('_MI_WSPROJECT_TASK_NOTIFYDSC','Besked indstillinger for opgaver');

define('_MI_WSPROJECT_NEWPROJECT_NOTIFY','Nyt projekt');
define('_MI_WSPROJECT_NEWPROJECT_NOTIFYCAP','Besked ved et nyt projekt ');
define('_MI_WSPROJECT_NEWPROJECT_NOTIFYDSC','Giv mig besked ved nye projekter');
define('_MI_WSPROJECT_NEWPROJECT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-besked: Nyt projekt');

define('_MI_WSPROJECT_NEWTASK_NOTIFY','Ny opgave');
define('_MI_WSPROJECT_NEWTASK_NOTIFYCAP','Besked ved en ny opgave');
define('_MI_WSPROJECT_NEWTASK_NOTIFYDSC','Giv mig besked ved nye opgaver der tildeles mig');
define('_MI_WSPROJECT_NEWTASK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-besked: Ny opgave');

define('_MI_WSPROJECT_EDITTASK_NOTIFY','Rediger opgave');
define('_MI_WSPROJECT_EDITTASK_NOTIFYCAP','Besked ved ændring af opgaver');
define('_MI_WSPROJECT_EDITTASK_NOTIFYDSC','Giv mig besked, hvis en opgave ændres');
define('_MI_WSPROJECT_EDITTASK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Auto-besked: Opgave ændret');

?>