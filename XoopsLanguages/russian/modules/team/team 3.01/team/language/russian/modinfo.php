<?php
// $Id: modinfo.php 17081 2008-11-24 04:09:57Z algalochkin $ Russian translation. Charset: utf-8 (without BOM)

// Module Info

// The name of this module
define('_MI_MATCH_NAME','Team');

// A brief description of this module
define('_MI_MATCH_DESC','Создание секции для групп, матчей и доступности');

// Names of blocks for this module (Not all module has blocks)
define('_MI_MATCH_BNAME1','Доступность');
define('_MI_MATCH_BNAME2','Меню');

// Sub menus in main menu block
define('_MI_MATCH_SMNAME2','Матчи');
define('_MI_MATCH_SMNAME3','Перечень');
define('_MI_MATCH_SMNAME4','Тактики');

// Names of admin menu items
define('_MI_MATCH_ADMENU6', 'Управление группами');
define('_MI_MATCH_ADMENU4', 'Управление картами');
define('_MI_MATCH_ADMENU2', 'Управление матчами');
define('_MI_MATCH_ADMENU3', 'Управление местоположением');
define('_MI_MATCH_ADMENU7', 'Управление серверами');
define('_MI_MATCH_ADMENU8', 'Управление численностью групп');
define('_MI_MATCH_ADMENU9', 'Manage Sides');
define('_MI_MATCH_ADMENU10', 'Управление рангами');

//Added 10/9-2003 Mithrandir for Notification
define('_MI_TEAM_MATCH_NOTIFY', 'Матч');
define('_MI_TEAM_MATCH_NOTIFYDSC', 'Notification options that apply to the current match');

define('_MI_TEAM_NEWMATCH_NOTIFY', 'Новый матч');
define('_MI_TEAM_NEWMATCH_NOTIFYCAP', 'Notify me of new matches for the current team.');
define('_MI_TEAM_NEWMATCH_NOTIFYDSC', 'Receive notification when a new match is created for the current team.');
define('_MI_TEAM_NEWMATCH_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New match for team');

define('_MI_TEAM_NEWLINEUP_NOTIFY', 'Новый состав участников');
define('_MI_TEAM_NEWLINEUP_NOTIFYCAP', 'Notify me when lineup for the current match is set.');
define('_MI_TEAM_NEWLINEUP_NOTIFYDSC', 'Receive notification when the lineup is created for the current match.');
define('_MI_TEAM_NEWLINEUP_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Lineup for match set');

//Added 17/10-2003 - v1.30 - Mithrandir
define('_MI_TEAM_SECTIONS', 'Подключение секций');
define('_MI_TEAM_SECTIONSDESC', 'Select the sections you want to be enabled in the Team Module');

// Added 17.11.2003 - Jace
define('_MI_MATCH_ADMENU11','Управление разметкой');

// Added 24.11.2003 - Jace
define('_MI_MATCH_ADMENU12','Manage Ladders');
?>
