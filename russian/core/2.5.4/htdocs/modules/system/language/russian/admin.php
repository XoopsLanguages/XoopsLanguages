<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * _LANGCODE    ru
 * _CHARSET     UTF-8
 * Translator   2010-11-12 andrey3761
 * @version     $Id: admin.php 5572 2010-10-21 09:10:49Z kris_fr $
 */

// Main
define("_AM_SYSTEM_CONFIG", "Конфигурация системы" );
define("_AM_SYSTEM_CPANEL", "Контрольная панель" );
define("_AM_SYSTEM_UPDATE", "Обновление" );
define("_AM_SYSTEM_GOTOMODULE", "Перейти к модулю" );
define("_AM_SYSTEM_HELP", "Помощь" );
define("_AM_SYSTEM_HELP_VIEW", "Показать Справку" );
define("_AM_SYSTEM_HELP_HIDE", "Скрыть Справку" );
define("_AM_SYSTEM_TIPS", "Подсказки" );
define("_AM_SYSTEM_SECTION", "Секции" );
define("_AM_SYSTEM_DESC", "Описание" );
define("_AM_SYSTEM_GO", "Доступ к этой секции" );
define("_AM_SYSTEM_STATUS", "Изменить статус секции" );
define("_AM_SYSTEM_LOADING", "Загрузка");
define("_AM_SYSTEM_ALL", "Все");

define("_AM_SYSTEM_TIPS_MAIN","<ul><li>Включите или отключите разделы модуля системы или доступ к нему.</li></ul>");
define("_AM_SYSTEM_AVATAR_INFO", "<ul><li><span class='bold red'>%s</span> аватаров.</li></ul>" );
define("_AM_SYSTEM_BANNER_INFO", "<ul><li><span class='bold red'>%s</span> банеров.</li></ul>" );
define("_AM_SYSTEM_COMMENT_INFO", "<ul><li><span class='bold red'>%s</span> комментариев.</li></ul>" );
define("_AM_SYSTEM_GROUP_INFO", "<ul><li><span class='bold red'>%s</span> групп.</li></ul>" );
define("_AM_SYSTEM_IMG_INFO", "<ul><li><span class='bold red'>%s</span> изображений.</li></ul>" );
define("_AM_SYSTEM_SMILIES_INFO", "<ul><li><span class='bold red'>%s</span> смайлов.</li></ul>" );
define("_AM_SYSTEM_RANKS_INFO", "<ul><li><span class='bold red'>%s</span> рангов пользователей.</li></ul>" );
define("_AM_SYSTEM_USERS_INFO", "<ul><li><span class='bold red'>%s</span> пользователей.</li></ul>" );

// Admin Module Names and description
define( "_AM_SYSTEM_ADGS", "Группы");
define( "_AM_SYSTEM_ADGS_DESC", "Вы можете добавлять <br /> и редактировать группы пользователей.");
define( "_AM_SYSTEM_BANS", "Банеры");
define( "_AM_SYSTEM_BANS_DESC", "Здесь Вы можете <br /> управлять банерами.");
define( "_AM_SYSTEM_BLOCKS", "Блоки" );
define( "_AM_SYSTEM_BLOCKS_DESC", "Создание и добавление <br /> инфомационных блоков блоков <br /> для пользователей." );
define( "_AM_SYSTEM_MODULES", "Модули" );
define( "_AM_SYSTEM_MODULES_DESC", "Установка, удаление <br /> и управление модлями." );
define( "_AM_SYSTEM_SMLS", "Смайлики");
define( "_AM_SYSTEM_SMLS_DESC", "Вы и Ваши плользователи <br /> могут использовать эти смайлики...");
define( "_AM_SYSTEM_RANK", "Ранги пользователей");
define( "_AM_SYSTEM_RANK_DESC", "Здесь Вы сможете <br /> добавлять рангди <br /> для пользователей.");
define( "_AM_SYSTEM_USER", "Редактирование пользователей");
define( "_AM_SYSTEM_USER_DESC", "Здесь Вы сможете <br /> добавлять, редактировать <br /> и удалять пользователей. <br /> Назначить пользователю <br /> группы и ранг.");
define( "_AM_SYSTEM_PREF", "Конфигурация");
define( "_AM_SYSTEM_PREF_DESC", "Центр управления Вашим сайтом<br /> настраивайте системные модули,<br /> настраивайте параметры системы.");
define( "_AM_SYSTEM_MLUS", "E-mail для пользователей");
define( "_AM_SYSTEM_MLUS_DESC", "Если Вам необходимо <br /> отправить почту или ЛС <br /> пользователям, Вы сможете <br /> это сделать сдесь.");
define( "_AM_SYSTEM_IMAGES", "Менеджер изображений");
define( "_AM_SYSTEM_IMAGES_DESC", "Здесь Вы сможете управлять изображениями,<br /> создавать категории и устанавливать права доступа к ним.");
define( "_AM_SYSTEM_AVATARS", "Аватары" );
define( "_AM_SYSTEM_AVATARS_DESC", "Добавьте аватары для <br /> пользователей. Они смогут <br /> выбрать их в профиле." );
define( "_AM_SYSTEM_TPLSETS", "Шаблоны");
define( "_AM_SYSTEM_TPLSETS_DESC", "Если Вам необходимо сделать <br /> изменения в шаблонах, <br /> сделайте это здесь.");
define( "_AM_SYSTEM_COMMENTS", "Комментарии");
define( "_AM_SYSTEM_COMMENTS_DESC", "Ваши пользователи могут <br /> добавлять коментарии к новостям, <br /> вебблогам и т.д... Здесь Вы можете <br /> управлять коментариями.");
define( "_AM_SYSTEM_FILEMANAGER", "Менеджер файлов");
define( "_AM_SYSTEM_FILEMANAGER_DESC", "Здесь Вы сможете управлять всеми<br /> файлами своего сайта");
define( "_AM_SYSTEM_MAINTENANCE", "Техническое обслуживание");
define( "_AM_SYSTEM_MAINTENANCE_DESC", "Инструменты для работы с таблицами базы данных,<br /> очистка папок кэша и сесий");

// Messages
define("_AM_SYSTEM_DBUPDATED", "База данных успешно обновлена!");
define("_AM_SYSTEM_DBERROR", "База данных не была обновлена в связи с  ошибками!");
define("_AM_SYSTEM_NOTACTIVE", "Эта секция не активирована!");

// Group permission phrases
define("_MD_AM_PERMADDNG", "Невозможно добавить права %s в %s для группы %s");
define("_MD_AM_PERMADDOK", "Права %s в %s для группы %s успешно добавлены");
define("_MD_AM_PERMRESETNG", "Невозможно сбросить права группы для модуля %s");
define("_MD_AM_PERMADDNGP", "Должны быть выбраны все родительские записи.");

?>