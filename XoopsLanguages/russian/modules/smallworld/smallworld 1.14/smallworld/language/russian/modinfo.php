<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting 
* source code which is considered copyrighted (c) material of the 
* original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:         The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:           http://www.fsf.org/copyleft/gpl.html GNU public license
* @packet:            Modules
* @sub-packet:        Smallworld
* @since:             Xoops 2.5.4
* @Author:            Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:         2011 Culex
* @Last committed:    $Revision: 8904 $
* @Last changed by:   $Author: djculex $
* @Last changed date: $Date: 2012-02-07 22:12:44 +0100 (ti, 07 feb 2012) $
* @ID:                $Id: modinfo.php 8904 2012-02-07 21:12:44Z djculex $
**/

define("_MI_SMALLWORLD_MODULE_NAME","Социальная сеть");
define("_MI_SMALLWORLD_MODULE_DESC","Модуль социальных сетей. Со стеной и профилями.");
define('_MI_SMALLWORLD_ADMENU','Администрирование');
define('_MI_SMALLWORLDMENU_INDEX','Главная');
define('_MI_SMALLWORLDMENU_STATS','Статистика');
define('_MI_SMALLWORLDMENU_USERADMIN','Управление пользователями');
define('_MI_SMALLWORLDMENU_HELP','Помощь');
define('_MI_SMALLWORLDMENU_ABOUT','О модуле');

/* -------- Configs ---------- */

// Map apis
define("_MI_SMALLWORLD_USEGOOGLE","Использование Google Maps Geolocation API");
define("_MI_SMALLWORLD_USEGOOGLE_DESC","По умолчанию база данных GeoNames. Выберите Да, чтобы использовать Google Maps.");

// Messages per page
define("_MI_SMALLWORLD_MSGTOSHOW","Количество сообщений");
define("_MI_SMALLWORLD_MSGTOSHOW_DESC","Сколько сообщений (обновлениий) показывать в профиле и индексной странице.");

// Use validation
define("_MI_SMALLWORLD_VALIDATIONSTRENGHT","Проверка шагов");
define("_MI_SMALLWORLD_VALIDATIONSTRENGHT_DESC","Использовать проверку полей при регистрации и редактировании профиля.<br><br>Опции: :<br><br>  Нет: Нет проверки <br> Да: * Наиболее важные поля * должны быть проверены");

// Smallworld take-over user name links ?
define("_MI_SMALLWORLD_TAKEOVERLINKS","Преобразование имени пользователя ");
define("_MI_SMALLWORLD_TAKEOVERLINKS_DESC","Smallworld будет использовать небольшой JavaScript, чтобы изменить ссылки на USERPROFILE взамен userinfo.php<br><br> По умолчанию - Нет.");

define("_MI_SMALLWORLD_USERSOWNMSGCOUNTS","Собственные сообщения пользователей подлежат проверке?");
define("_MI_SMALLWORLD_USERSOWNMSGCOUNTS_DESC","Каждые 10 секунд сообщения ваших последователей подсчитываются и результат будет показан, если не 0. <br>Если вы выберите Да, то сообщение показывается, когда вы удаляете или добавляете собственные.");

define("_MI_SMALLWORLD_BOOKMARSAVATARS","Использование логотипа Smallworld в закладках");
define("_MI_SMALLWORLD_BOOKMARKSAVATARS_DESC","Когда сообщения являются публичными, и вы хотите поделиться ими в социальных сетях, вы можете указать как использовать логотип <br> Smallworld - как общее изображение или «Нет» = размещение пользовательского аватара.  <br><br> По умолчанию <br> 'Да' = Smallworld логотип.");

define("_MI_SMALLWORLD_USEMAILNOTIFICATION","Использование почтовых уведомлений");
define("_MI_SMALLWORLD_USEMAILNOTIFICATION_DESC","Когда новый пользователь регистрируется, будет отправляться письмо администратору, или когда комментарий будет добавлен в сообщение, где пользователь учавствует в переписке, в почту высылается сообщение пользователю. По умолчанию - 'Да'");

// Select fields & Mandetory fields
define('_MI_SMALLWORLD_VIEWFIELDS','Использование полей при регистрации и в профиле');
define('_MI_SMALLWORLD_VIEWFIELDS_DESC','Выберите поля для использования в регистрационной форме и в профиле. Control + мышь для множественного выбора ');
define('_MI_SMALLWORLD_VERIFYFIELDS','Производить проверку по полям при регистрации');
define('_MI_SMALLWORLD_VERIFYFIELDS_DESC','Выберите (*) обязательные поля регистрационной формы. Control + мышь для множественного выбора');

define('_MI_SMALLWORLD_REALNAME','Настоящее имя');
define('_MI_SMALLWORLD_GENDER','Пол');
define('_MI_SMALLWORLD_INTERESTEDIN','Заинтересован в ');
define('_MI_SMALLWORLD_RELATIONSHIPSTATUS','статус отношений');
define('_MI_SMALLWORLD_PARTNER','Партнер');
define('_MI_SMALLWORLD_LOOKINGFOR','Ищу');
define('_MI_SMALLWORLD_BIRTHDAY','День рождения');
define('_MI_SMALLWORLD_BIRTHPLACE','Место рождения');
define('_MI_SMALLWORLD_POLITICALVIEWS','Политика');
define('_MI_SMALLWORLD_RELIGIOUSVIEWS','Религия');
define('_MI_SMALLWORLD_EMAILS','Адреса электронной почты');
define('_MI_SMALLWORLD_SCREENNAMES','Другие имена');
define('_MI_SMALLWORLD_MOBILE','Мобильный');
define('_MI_SMALLWORLD_LANDPHONE','Телефон');
define('_MI_SMALLWORLD_STREETADRESS','Адрес проживания');
define('_MI_SMALLWORLD_PRESENTCITY','Город проживания');
define('_MI_SMALLWORLD_COUNTRY','Страна');
define('_MI_SMALLWORLD_WEBSITE','Веб-сайт');
define('_MI_SMALLWORLD_INTERESTS','Интересы');
define('_MI_SMALLWORLD_FAVOURITEMUSIC','Любимая музыка');
define('_MI_SMALLWORLD_FAVOURITETVSHOWS','Любимые ТВ-шоу');
define('_MI_SMALLWORLD_FAVOURITEMOVIES','Любимые фильмы');
define('_MI_SMALLWORLD_FAVOURITEBOOKS','Любимые книги');
define('_MI_SMALLWORLD_ABOUTME','Обо мне');
define('_MI_SMALLWORLD_EDUCATION','Образование');
define('_MI_SMALLWORLD_EMPLOYMENT','Работа');

//Private or public module
define ('_MI_SMALLWORLD_PRIVATEMODULE','Show public posts ?');
define ('_MI_SMALLWORLD_PRIVATEMODULE_DESC','If "yes" then all visiters can read posts marked "public" by authorized author. Commenting/posting/editing etc are all still inactive until logged in.');
?>