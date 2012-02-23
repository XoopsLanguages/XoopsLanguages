<?php
/*
 * Suico theme
 * In memory of Marcello Brandao
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license 3.0
 * @package         themes
 * @since           2.5.x
 * @author          Kris <http://www.xoofoo.org/>
 * @maintained      The XOOPS Project http://sourceforge.net/projects/xoops/
 * @langcode		ru
 * @charset			utf-8
 * @Translator:		2010-10-10 MACTEP
 * @version         $Id
*/

// system_notification_select.html
define("THEME_SHOWHIDE_NOTIFICATION",	"Показать/Скрыть");
define("THEME_SHOWHIDE_NOTIFICATION_DESC",	"Показать/Скрыть уведомления");
define("THEME_RSS",						"RSS");
define("THEME_SEARCH",					"Поиск");
define("THEME_DESC_SEARCH",				"Поиск по сайту");
define("THEME_KEYWORDS",				"Ключевые слова");

// blockszone and centerblocks.html
define("THEME_THISBLOCK_EDIT",			"Редактировать блок");
define("THEME_VIEWALL",					"Показать все");

// xo_globalnav.html
define("THEME_NAVTITLE",				"Навигация");

define("THEME_HOME",					"Главная");
define("THEME_HOME_DESC",				"На главную");

define("THEME_MODULE1",					"Новости");
define("THEME_MODULE1_DESC",			"См. новости");

define("THEME_MODULE2",					"Форум");
define("THEME_MODULE2_DESC",			"Посетить форум");

define("THEME_MODULE3",					"Галерея");
define("THEME_MODULE3_DESC",			"Посетить фотогалерею");

define("THEME_MODULE4",					"Фильмы");
define("THEME_MODULE4_DESC",			"Посмотреть фильмы");

define("THEME_MODULE5",					"Ссылки");
define("THEME_MODULE5_DESC",			"Перейти к ссылкам");

define("THEME_MODULE6",					"Скачать");
define("THEME_MODULE6_DESC",			"Скачать файлы");

define("THEME_MODULE7",					"");
define("THEME_MODULE7_DESC",			"");

define("THEME_MODULE8",					"");
define("THEME_MODULE8_DESC",			"");

define("THEME_MODULE9",					"");
define("THEME_MODULE9_DESC",			"");

// module name in xo_globalnav.html  anomymous mode
define("THEME_MODULE1a",				"Кредиты");
define("THEME_MODULE1a_DESC",			"Кредиты сайта");
define("THEME_MODULE2a",				"Локализация");
define("THEME_MODULE2a_DESC",			"Показать нас на карте");

define("THEME_CONTACT",					"Контакты");
define("THEME_CONTACT_DESC",			"Свяжитесь с нами ?");
define("THEME_SITEMAP",					"Карта сайта");

// xo_userbar.html
define("THEME_REGISTER",				"Регистрация");
define("THEME_REMEMBER",				"Запомнить?");
define("THEME_PSEUDO",					"Логин");
define("THEME_DESC_PSEUDO",				"Введите ваш логин");
define("THEME_PASSWORD",				"Пароль");
define("THEME_DESC_PASSWORD",			"Введите ваш пароль");
define("THEME_CONNECT",					"Войти");
define("THEME_LOSTACCOUNT",				"Забыли пароль ?"); // add for suico theme
define("THEME_CLOSEPOPUP",				"Скрыть"); // add for suico theme

define("THEME_WELLCOME",				"Добро пожаловать");
define("THEME_PROFILE",					"Профиль");
define("THEME_NOTIFICATION",			"Уведомления");
define("THEME_MESSAGE",					"Личные сообщения");
define("THEME_YOUHAVE",					"У вас");
define("THEME_NOTREAD",					"сообщений");
define("THEME_MYACCOUNT",				"Мой аккаунт");
define("THEME_PRIVATE",					"Личный Доступ");

define("THEME_UFROM",					"Местоположение"); // add for suico theme
define("THEME_UOCCUPAT",				"Размещение"); // add for suico theme
define("THEME_UINTEREST",				"Интерес"); // add for suico theme
define("THEME_UINFOS",					"Информация"); // add for suico theme
define("THEME_UREGDATE",				"Зарегистрирован: "); // add for suico theme
define("THEME_UPOSTS",					"Количество сообщений"); // add for suico theme
define("THEME_ULASTLOGIN",				"Последний вход в систему"); // add for suico theme

define("THEME_UEDITPROFILE",			"Редактировать профиль"); // add for suico theme
define("THEME_UEDITAVATAR",				"Сменить аватар"); // add for suico theme
define("THEME_UEDITPASSWORD",			"Сменить пароль"); // add for suico theme

/* ------------------- xo_footerstatic.html ------------------- */
define("_THEME_INBOX",            		"Личные сообщения");
define("_THEME_INBOX_NOTREAD",    		"Непрочитанные сообщения");
define("_THEME_NOTIFICATIONS",   		"Оповещения");
define("_THEME_PROFILE",         		"Профиль");
define("_THEME_ADMINISTRATION",  		"Администрирование");
define("_THEME_LOGOUT",          		"Выход");
define("THEME_EDITPROFILE",				"Редактировать профиль");
define("THEME_USER",					"Пользователи");
define("THEME_CPHOME",					"Администрирование");
define("THEME_BANS",					"Управление банерами");
define("THEME_BKAD",					"Управление блоками");
define("THEME_ADGS",					"Управление группами");
define("THEME_PREF",					"Конфигурация");
define("THEME_INSTALLEDMODULES",		"Управление модулями");
define("THEME_IMAGES",					"Картинки");
define("THEME_MDAD",					"Модули");
define("THEME_SMLS",					"Управление смайликами");
define("THEME_RANK",					"Ранг пользователей");
define("THEME_EUSER",					"Редактирование пользователей");
define("THEME_FINDUSER",				"Поиск пользователей");
define("THEME_MLUS",					"Отправить по почте");
define("THEME_AVATARS",					"Управление аватарами");
define("THEME_TPLS",					"Управление шаблонами");
define("THEME_COMMENTS",				"Управление комментариями");
define("THEME_ADMTOOLS",				"Утилиты"); // add for xoops 2.5.0
define("THEME_ADMCLEAN",				"Обслуживание");  // add for xoops 2.5.0
define("THEME_SYSSETTING",				"Системные настройки модуля");  // add for xoops 2.5.0
define("THEME_UPTOP",					"Наверх"); // add for xoops 2.5.0

?>