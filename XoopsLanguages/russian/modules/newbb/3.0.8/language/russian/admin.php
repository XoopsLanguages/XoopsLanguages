<?php
// $Id: admin.php,v 1.4 2005/04/18 01:22:30 phppp Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF","Конфигурация форума");
define("_AM_NEWBB_ADDAFORUM","Добавление форума");
define("_AM_NEWBB_SYNCFORUM","Синхронизировать форум");
define("_AM_NEWBB_REORDERFORUM","Переупорядочивание");
define("_AM_NEWBB_FORUM_MANAGER","Форумы");
define("_AM_NEWBB_PRUNE_TITLE","Быстрое редактирование");
define("_AM_NEWBB_CATADMIN","Категории");
define("_AM_NEWBB_GENERALSET","Основные настройки" );
define("_AM_NEWBB_MODULEADMIN","Администрирование модуля:");
define("_AM_NEWBB_HELP","Помощь");
define("_AM_NEWBB_ABOUT","Описание");
define("_AM_NEWBB_BOARDSUMMARY","Резюме форума");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH","Сообщения, ожидающие одобрения");
define("_AM_NEWBB_POSTID","ID сообщения");
define("_AM_NEWBB_POSTDATE","Дата сообщения");
define("_AM_NEWBB_POSTER","Отправитель");
define("_AM_NEWBB_TOPICS","Темы");
define("_AM_NEWBB_SHORTSUMMARY","Описание форума");
define("_AM_NEWBB_TOTALPOSTS","Всего сообщений");
define("_AM_NEWBB_TOTALTOPICS","Всего тем");
define("_AM_NEWBB_TOTALVIEWS","Всего просмотров");
define("_AM_NEWBB_BLOCKS","Блоки");
define("_AM_NEWBB_SUBJECT","Тема");
define("_AM_NEWBB_APPROVE","Одобрить сообщение");
define("_AM_NEWBB_APPROVETEXT","Содержание сообщения");
define("_AM_NEWBB_POSTAPPROVED","Сообщение одобрено");
define("_AM_NEWBB_POSTNOTAPPROVED","Сообщение не одобрено");
define("_AM_NEWBB_POSTSAVED","Сообщение сохранено");
define("_AM_NEWBB_POSTNOTSAVED","Сообщение не сохранено");

define("_AM_NEWBB_TOPICAPPROVED","Тема одобрена");
define("_AM_NEWBB_TOPICNOTAPPROVED","Тема не одобрена");
define("_AM_NEWBB_TOPICID","ID темы");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH","Неодобренные темы");


define('_AM_NEWBB_DEL_ONE','Удалить только это сообщение');
define('_AM_NEWBB_POSTSDELETED','Выбранное сообщение удалено.');
define('_AM_NEWBB_NOAPPROVEPOST','Нет сообщений для одобрения.');
define('_AM_NEWBB_SUBJECTC','Тема:');
define('_AM_NEWBB_MESSAGEICON','Значок:');
define('_AM_NEWBB_MESSAGEC','Сообщение:');
define('_AM_NEWBB_CANCELPOST','Отменить');
define('_AM_NEWBB_GOTOMOD','Переход к модулю');

define('_AM_NEWBB_PREFERENCES','Настройки модуля');
define('_AM_NEWBB_POLLMODULE','Голосования');
define('_AM_NEWBB_POLL_OK','Готов к работе');
define('_AM_NEWBB_GDLIB1','GD1 библиотека:');
define('_AM_NEWBB_GDLIB2','GD2 библиотека:');
define('_AM_NEWBB_AUTODETECTED','Автовыбор: ');
define('_AM_NEWBB_AVAILABLE','Есть');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">Нет</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">Нет прав на запись</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagicK:');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','Не установлен');
define('_AM_NEWBB_ATTACHPATH','Путь для сохранения вложений');
define('_AM_NEWBB_THUMBPATH','Путь для миниатюр прикрепляемых изображений');
//define('_AM_NEWBB_RSSPATH','Путь для RSS выдачи');
define('_AM_NEWBB_REPORT','Информация о сообщениях');
define('_AM_NEWBB_REPORT_PENDING','Ожидающие');
define('_AM_NEWBB_REPORT_PROCESSED','Обработка');

define('_AM_NEWBB_CREATETHEDIR','Создать');
define('_AM_NEWBB_SETMPERM','Установка прав');
define('_AM_NEWBB_DIRCREATED','Каталог создан');
define('_AM_NEWBB_DIRNOTCREATED','Каталог не создан');
define('_AM_NEWBB_PERMSET','Права установлены');
define('_AM_NEWBB_PERMNOTSET','Права не установлены');

define('_AM_NEWBB_DIGEST','Оповещения дайджеста');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Отправлен %d минут назад</font>');
define('_AM_NEWBB_DIGEST_NEXT','Будет отправлен в течение %d минут');
define('_AM_NEWBB_DIGEST_ARCHIVE','Архив дайджеста');
define('_AM_NEWBB_DIGEST_SENT','Дайджест обработан');
define('_AM_NEWBB_DIGEST_FAILED','Дайджест не обработан');

// admin_forum_manager.php
define("_AM_NEWBB_NAME","Название");
define("_AM_NEWBB_CREATEFORUM","Создать форум");
define("_AM_NEWBB_EDIT","Редактировать");
define("_AM_NEWBB_CLEAR","Очистить");
define("_AM_NEWBB_DELETE","Удалить");
define("_AM_NEWBB_ADD","Добавить");
define("_AM_NEWBB_MOVE","Переместить");
define("_AM_NEWBB_ORDER","Порядок");
define("_AM_NEWBB_TWDAFAP","Внимание: данное действие удалит форум и все сообщения в нём.<br><br>Вы уверены, что хотите удалить этот форум?");
define("_AM_NEWBB_FORUMREMOVED","Форум удалён.");
define("_AM_NEWBB_CREATENEWFORUM","Создание нового форума");
define("_AM_NEWBB_EDITTHISFORUM","Редактирование форума:");
define("_AM_NEWBB_SET_FORUMORDER","Вес форума:");
define("_AM_NEWBB_ALLOWPOLLS","Разрешить опросы:");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"Макс. размер в кб:");
define("_AM_NEWBB_ALLOWED_EXTENSIONS","Допустимые расширения:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' - без ограничений.<br> Через '|'</span>");
define("_AM_NEWBB_ALLOW_ATTACHMENTS","Разрешить вложения:");
define("_AM_NEWBB_ALLOWHTML","Разрешить HTML:");
define("_AM_NEWBB_YES","Да");
define("_AM_NEWBB_NO","Нет");
define("_AM_NEWBB_ALLOWSIGNATURES","Разрешить подписи:");
define("_AM_NEWBB_HOTTOPICTHRESHOLD","Сообщений, чтоб стать популярным:");
//define("_AM_NEWBB_POSTPERPAGE","Сообщений на страницу:<span style='font-size: xx-small; font-weight: normal; display: block;'>(Количество сообщений,<br>отображаемых на<br>странице темы.)</span>");
//define("_AM_NEWBB_TOPICPERFORUM","Тем на форум:<span style='font-size: xx-small; font-weight: normal; display: block;'>(Количество тем,<br>отображаемых на<br> странице форума.)</span>");
//define("_AM_NEWBB_SHOWNAME","Показывать настоящее имя пользователя:");
//define("_AM_NEWBB_SHOWICONSPANEL","Показывать панель иконок:");
//define("_AM_NEWBB_SHOWSMILIESPANEL","Показывать панель смайлов:");
define("_AM_NEWBB_MODERATOR_REMOVE","Удаление модераторов");
define("_AM_NEWBB_MODERATOR_ADD","Добавление модераторов");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX","Разрешить префиксы в теме");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC","Разрешает добавлять префиксы в тему");

// admin_cat_manager.php


define("_AM_NEWBB_SETCATEGORYORDER","Вес категории:");
define("_AM_NEWBB_ACTIVE","Активный");
define("_AM_NEWBB_INACTIVE","Неактивный");
define("_AM_NEWBB_STATE","Статус:");
define("_AM_NEWBB_CATEGORYDESC","Описание категории:");
define("_AM_NEWBB_SHOWDESC","Показывать описание?");
define("_AM_NEWBB_IMAGE","Картинка:");
define("_AM_NEWBB_SPONSORIMAGE","Изображение спонсора:");
define("_AM_NEWBB_SPONSORLINK","Ссылка спонсора:");
define("_AM_NEWBB_DELCAT","Удалить категорию");
define("_AM_NEWBB_WAYSYWTDTTAL","Внимание: это действие не удаляет форумы категории, Вы должны будуту сделать это через редактирование форумов.<br><br>Вы уверены, что хотите удалить эту категорию?");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME","Название форума:");
define("_AM_NEWBB_FORUMDESCRIPTION","Описание форума:");
define("_AM_NEWBB_MODERATOR","Модераторы:");
define("_AM_NEWBB_REMOVE","Удалить");
define("_AM_NEWBB_CATEGORY","Категория:");
define("_AM_NEWBB_DATABASEERROR","Ошибка БД");
define("_AM_NEWBB_CATEGORYUPDATED","Категория обновлена.");
define("_AM_NEWBB_EDITCATEGORY","Редактирование категории:");
define("_AM_NEWBB_CATEGORYTITLE","Заголовок категории:");
define("_AM_NEWBB_CATEGORYCREATED","Категория создана.");
define("_AM_NEWBB_CREATENEWCATEGORY","Создать категорию");
define("_AM_NEWBB_FORUMCREATED","Форум создан.");
define("_AM_NEWBB_ACCESSLEVEL","Уровни доступа:");
define("_AM_NEWBB_CATEGORY1","Категория");
define("_AM_NEWBB_FORUMUPDATE","Настройки форума обновлены");
define("_AM_NEWBB_FORUM_ERROR","ОШИБКА: ошибка при изменении настроек форума");
define("_AM_NEWBB_CLICKBELOWSYNC","Нажмите кнопку ниже, чтобы синхронизировать форумы и темы с датой из БД. Используйте эту кнопку, если вы считаете, что время считается неверно.");
define("_AM_NEWBB_SYNCHING","Синхронизация (это может занять некоторое время)");
define("_AM_NEWBB_CATEGORYDELETED","Категория удалена.");
define("_AM_NEWBB_MOVE2CAT","Переместить в категорию:");
define("_AM_NEWBB_MAKE_SUBFORUM_OF","Создание подфорума:");
define("_AM_NEWBB_MSG_FORUM_MOVED","Форум перемещён!");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED","Форум не перемещён.");
define("_AM_NEWBB_SELECT","< Выберите >");
define("_AM_NEWBB_MOVETHISFORUM","Переместить форум");
define("_AM_NEWBB_MERGE","Объеденить");
define("_AM_NEWBB_MERGETHISFORUM","Объединить этот Форум");
define("_AM_NEWBB_MERGETO_FORUM","Объединить этот Форум с :");
define("_AM_NEWBB_MSG_FORUM_MERGED","Форум объединен!");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED","Failed to merge forum.");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_NEWBB_REORDERID","ID");
define("_AM_NEWBB_REORDERTITLE","Заголовок");
define("_AM_NEWBB_REORDERWEIGHT","Позиция");
define("_AM_NEWBB_SETFORUMORDER","Преупорядочивание форума");
define("_AM_NEWBB_BOARDREORDER","Форум переупорядочен");

// forum_access.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM","Права на темы для этого форума");
define("_AM_NEWBB_CAT_ACCESS","Доступ к разделам форума");
define("_AM_NEWBB_CAN_ACCESS","Доступ к подразделам");
define("_AM_NEWBB_CAN_VIEW","Могут просматривать");
define("_AM_NEWBB_CAN_POST","Могут начинать новые");
define("_AM_NEWBB_CAN_REPLY","Могут отвечать");
define("_AM_NEWBB_CAN_EDIT","Могут редактировать");
define("_AM_NEWBB_CAN_DELETE","Могут удалять");
define("_AM_NEWBB_CAN_ADDPOLL","Могут добавлять опрос");
define("_AM_NEWBB_CAN_VOTE","Могут голосовать");
define("_AM_NEWBB_CAN_ATTACH","Могут прикреплять файлы");
define("_AM_NEWBB_CAN_NOAPPROVE","Могут писать без одобрения сообщений");
define("_AM_NEWBB_ACTION","Действия");

define("_AM_NEWBB_PERM_TEMPLATE","Разрешения значения по умолчанию");
define("_AM_NEWBB_PERM_TEMPLATE_DESC","будут применены на форумах");
define("_AM_NEWBB_PERM_FORUMS","Выбор форума ");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED","Шаблон разрешения был создан");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR","Ошибка создания шаблона разрешения");
define("_AM_NEWBB_PERM_TEMPLATEAPP","Примените разрешения значения по умолчанию");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED"," Значения разрешений по умолчанию были применены на форумы");
define("_AM_NEWBB_PERM_ACTION","Установки прав доступа");
define("_AM_NEWBB_PERM_SETBYGROUP","разрешения Набора непосредственно группой");

// admin_forum_prune.php

define("_AM_NEWBB_PRUNE_RESULTS_TITLE","Результаты быстрого редактирования");
define("_AM_NEWBB_PRUNE_RESULTS_TOPICS","Темы");
define("_AM_NEWBB_PRUNE_RESULTS_POSTS","Сообщения");
define("_AM_NEWBB_PRUNE_RESULTS_FORUMS","Форумы");
define("_AM_NEWBB_PRUNE_STORE","Сохранить сообщения в этом форуме, вместо удаления");
define("_AM_NEWBB_PRUNE_ARCHIVE","Сделать копии сообщений в архив");
define("_AM_NEWBB_PRUNE_FORUMSELERROR","Вы забыли выбрать форумы для быстрого редактирования");

define("_AM_NEWBB_PRUNE_DAYS","Удалить темы без ответа в течение:");
define("_AM_NEWBB_PRUNE_FORUMS","Редактируемые форумы");
define("_AM_NEWBB_PRUNE_STICKY","Сохранить прикреплённые темы");
define("_AM_NEWBB_PRUNE_DIGEST","Сохранить темы-дайджесты");
define("_AM_NEWBB_PRUNE_LOCK","Сохранить закрытые темы");
define("_AM_NEWBB_PRUNE_HOT","Сохранить темы с количеством ответом больше чем");
define("_AM_NEWBB_PRUNE_SUBMIT","Ok");
define("_AM_NEWBB_PRUNE_RESET","Очистить");
define("_AM_NEWBB_PRUNE_YES","Да");
define("_AM_NEWBB_PRUNE_NO","Нет");
define("_AM_NEWBB_PRUNE_WEEK","недели");
define("_AM_NEWBB_PRUNE_2WEEKS","двух недель");
define("_AM_NEWBB_PRUNE_MONTH","месяца");
define("_AM_NEWBB_PRUNE_2MONTH","двух месяцев");
define("_AM_NEWBB_PRUNE_4MONTH","четырёх месяцев");
define("_AM_NEWBB_PRUNE_YEAR","года");
define("_AM_NEWBB_PRUNE_2YEARS","двух лет");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO',"Информация об авторе");
define('_AM_NEWBB_AUTHOR_NAME',"Автор");
define('_AM_NEWBB_AUTHOR_WEBSITE',"Сайт автора");
define('_AM_NEWBB_AUTHOR_EMAIL',"email автора");
define('_AM_NEWBB_AUTHOR_CREDITS',"Благодарности");
define('_AM_NEWBB_MODULE_INFO',"Информация о разработке модуля");
define('_AM_NEWBB_MODULE_STATUS',"Статус");
define('_AM_NEWBB_MODULE_DEMO',"Демо-сайт");
define('_AM_NEWBB_MODULE_SUPPORT',"Официальная поддержка");
define('_AM_NEWBB_MODULE_BUG',"Рапорт о багах");
define('_AM_NEWBB_MODULE_FEATURE',"Запрос новых функций");
define('_AM_NEWBB_MODULE_DISCLAIMER',"Уведомление");
define('_AM_NEWBB_AUTHOR_WORD',"Авторы по всему миру");
define('_AM_NEWBB_BY','От');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA',"
<br /><br />
Chinese Forum supported by <a href='http://xoops.org.cn' target='_blank'>Xoops China Support Team</a>:<br />
images:<br />
----imhsy (http://hsyong.com)<br />
language:<br />
----lab<br />
----adi (http://sibu.org)<br />
----karuna (http://ppfans.com)<br />
----insraq (http://insraq.xoops.cn)<br />
help doc:<br />
----insraq (http://insraq.xoops.cn)<br />
----laelia<br /><br />
Traditional Chinese version by <a href='http://cyai.net' target='_blank'>CHIA</a>:<br />
----chia (http://cyai.net) [·±Ме]<br /><br />
For any question, feature request, bug report:<br />
----Xoops China:: <a href='http://xoops.org.cn' target='_blank'>http://xoops.org.cn</a><br />
----Chinese Dev:: <a href='http://dev.xoops.org.cn' target='_blank'>http://dev.xoops.org.cn</a><br />
<br />
");

// admin_report.php
define("_AM_NEWBB_REPORTADMIN","Управление рапортами");
define("_AM_NEWBB_PROCESSEDREPORT","Посмотреть обработанные рапорты");
define("_AM_NEWBB_PROCESSREPORT","Обработанные рапорты");
define("_AM_NEWBB_REPORTTITLE","Заголовок рапорта");
define("_AM_NEWBB_REPORTEXTRA","Дополнилетьно");
define("_AM_NEWBB_REPORTPOST","Сообщение");
define("_AM_NEWBB_REPORTTEXT","Текст рапорта");
define("_AM_NEWBB_REPORTMEMO","Обработать напоминание");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN","Управление дайджестами");
define("_AM_NEWBB_DIGESTCONTENT","Содержание дайджеста");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION","Информация по голосованиям");
define("_AM_NEWBB_VOTE_TOTALVOTES","Всего голосов: ");
define("_AM_NEWBB_VOTE_REGUSERVOTES","Голосов зарегистрированных пользователей: %s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES","Голосов анонимных пользователей: %s");
define("_AM_NEWBB_VOTE_USER","Пользователь");
define("_AM_NEWBB_VOTE_IP","IP адрес");
define("_AM_NEWBB_VOTE_USERAVG","Средний рейтинг");
define("_AM_NEWBB_VOTE_TOTALRATE","Общий рейтинг");
define("_AM_NEWBB_VOTE_DATE","Отправлено");
define("_AM_NEWBB_VOTE_RATING","Рейтинг");
define("_AM_NEWBB_VOTE_NOREGVOTES","Нет голосов от зарегистрированных пользователей");
define("_AM_NEWBB_VOTE_NOUNREGVOTES","Нет голосов от анонимных пользователей");
define("_AM_NEWBB_VOTEDELETED","Данные голосования удалены.");
define("_AM_NEWBB_VOTE_ID","ID");
define("_AM_NEWBB_VOTE_FILETITLE","Заголовок темы");
define("_AM_NEWBB_VOTE_DISPLAYVOTES","Информация по голосованию");
define("_AM_NEWBB_VOTE_NOVOTES","Нет голосов пользователей");
define("_AM_NEWBB_VOTE_DELETE","Нет голосов пользователей");
define("_AM_NEWBB_VOTE_DELETEDSC","<b>Удаляет</b> выбранную информацию из БД.");

?>