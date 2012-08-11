<?php
/**
 * ****************************************************************************
 *  - TDMStats By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (http://www.)
 *
 * La licence GNU GPL, garanti à l'utilisateur les droits suivants
 *
 * 1. La liberté d'exécuter le logiciel, pour n'importe quel usage,
 * 2. La liberté de l' étudier et de l'adapter à ses besoins,
 * 3. La liberté de redistribuer des copies,
 * 4. La liberté d'améliorer et de rendre publiques les modifications afin
 * que l'ensemble de la communauté en bénéficie.
 *
 * @copyright       	(http://www.tdmxoops.net)
 * @license        	http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		TDM ; TEAM DEV MODULE 
 *
 * ****************************************************************************
 */
define('_AM_ISTATS_NAVPREFERENCES','Конфигурация'); 
define('_AM_ISTATS_NAVPERMISSIONS','Права Доступа'); 


define('_AM_ISTATS_COOKIE_CONF','Настройка кукисов'); 
define('_AM_ISTATS_COOKIE','Настройка кукисов'); 
define('_AM_ISTATS_COOKIE_DESC','Determine the life of your cookie, in seconds (eg 1 hour = 3600)'); 
define('_AM_ISTATS_SAVE','Сохранить'); 
define('_AM_ISTATS_CANCEL','Отмена'); 
define('_AM_ISTATS_CONFIG','Configuring Istat'); 
define('_AM_GENERALCONF','General configuration'); 
define('_AM_ISTATS_NOTUPDATED','The config.php file was not updated! <br /> Scripture impossible! <br /> Please check the file permissions (chmod 666) or cache directory (chmod 777) '); 
define('_AM_ISTATS_UPDATED','Файл config.php обновлен'); 

// index.php 
define('_AM_ISTATS_INDEXDESC',' Администрирование'); 
define('_AM_ISTATS_TABLE','Table Name'); 
define('_AM_ISTATS_LENGTH','Size of data file'); 
define('_AM_ISTATS_FREE','lost space'); 
define('_AM_ISTATS_TOTAL','Всего данных'); 
define('_AM_ISTATS_OPT','Оптимизировать'); 

define('_AM_ISTATS_BASE','Ваши изменения успешно сохранены'); 
define('_AM_ISTATS_BASEERROR','ОШИБКА: Ваши изменения не сохранены'); 

define('_AM_ISTATS_ABOUT','О модуле'); 
define('_AM_ISTATS_UPDATE','Обновление');
define('_AM_ISTATS_PERM','Управление правами доступа'); 
define('_AM_ISTATS_PLUG','Управление плагинами'); 

// plug.php 
define('_AM_ISTATS_PLUGHELP','<b> Примечание: </ b> Не забудьте вставить код "<b>( <{xoStats}> )</ b>" в файл вашей темы theme.html для подсчета посещаемости...'); 
define('_AM_ISTATS_PLUGERROR','Пожалуйста скопируйте файл "xoops_plugins / function.xoStats.php" в директорию на вашем сайте, "/ class / smarty / xoops_plugins /"'); 
define('_AM_ISTATS_PLUGOK','плагин установлен'); 
define('_AM_ISTATS_PLUGETAT','Статус плагинов'); 

// About (about.php) 
define('_AM_ABOUT_RELEASEDATE','Дата выпуска'); 
define('_AM_ABOUT_AUTHOR','Автор'); 
define('_AM_ABOUT_CREDITS','Credits'); 
define('_AM_ABOUT_README','General Info'); 
define('_AM_ABOUT_MANUAL','Помощь'); 
define('_AM_ABOUT_LICENSE','Лицензия'); 
define('_AM_ABOUT_MODULE_STATUS','Статус'); 
define('_AM_ABOUT_WEBSITE','Web Site'); 
define('_AM_ABOUT_AUTHOR_NAME','Author Name'); 
define('_AM_ABOUT_AUTHOR_WORD','Author Word'); 
define('_AM_ABOUT_CHANGELOG','Change Log'); 
define('_AM_ABOUT_MODULE_INFO','Module Info'); 
define('_AM_ABOUT_AUTHOR_INFO','Author Info'); 
define('_AM_ABOUT_DISCLAIMER','Disclaimer');
define('_AM_ABOUT_DISCLAIMER_TEXT','GPL Licensed - No Warranty'); 

// perm.php 
define('_AM_ISTATS_PERM2','Разрешить доступ:'); 

// permission 
define('_AM_ISTATS_PERM_4','Общая статистика'); 
define('_AM_ISTATS_PERM_8','По времени посещения');
define('_AM_ISTATS_PERM_16','По системным ресурсам');
?>
