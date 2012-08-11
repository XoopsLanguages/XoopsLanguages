<?php
// $Id: modinfo.php 2171 2008-09-23 13:43:42Z phppp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

// Module Info

// The name of this module
define("_MI_NEWBB_NAME","Форум");

// A brief description of this module
define("_MI_NEWBB_DESC","Модуль форума СВВ для XOOPS");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BLOCK_TOPIC_POST","Последние темы на которые отвечают");
define("_MI_NEWBB_BLOCK_TOPIC","Последние темы");
define("_MI_NEWBB_BLOCK_POST","Последние сообщения");
define("_MI_NEWBB_BLOCK_AUTHOR","Авторы");
define("_MI_NEWBB_BLOCK_TAG_CLOUD","Tag Cloud");
define("_MI_NEWBB_BLOCK_TAG_TOP","Top Tags");
/*
define("_MI_NEWBB_BNAME0","Последние темы на которые отвечают");
define("_MI_NEWBB_BNAME1","Последние темы");
define("_MI_NEWBB_BNAME2","Популярные темы");
define("_MI_NEWBB_BNAME3","Самые активные темы");
define("_MI_NEWBB_BNAME4","Новые дайджесты");
define("_MI_NEWBB_BNAME5","Новые прикреплённые темы");
define("_MI_NEWBB_BNAME6","Новые собщения");
define("_MI_NEWBB_BNAME7","Авторы с большинством тем");
define("_MI_NEWBB_BNAME8","Авторы с большинством сообшений");
define("_MI_NEWBB_BNAME9","Авторы с большинством дайджестов");
define("_MI_NEWBB_BNAME10","Авторы с большинством прикреплённых тем");
define("_MI_NEWBB_BNAME11","Новые отправление с текстом ");
*/

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX","Главная");
define("_MI_NEWBB_ADMENU_CATEGORY","Категории");
define("_MI_NEWBB_ADMENU_FORUM","Форумы");
define("_MI_NEWBB_ADMENU_PERMISSION","Права доступа");
define("_MI_NEWBB_ADMENU_BLOCK","Блоки");
define("_MI_NEWBB_ADMENU_ORDER","Порядок");
define("_MI_NEWBB_ADMENU_SYNC","Синхронизация");
define("_MI_NEWBB_ADMENU_PRUNE","Редактирование");
define("_MI_NEWBB_ADMENU_REPORT","Рапорты");
define("_MI_NEWBB_ADMENU_DIGEST","Дайджесты");
define("_MI_NEWBB_ADMENU_VOTE","Голосования");
define("_MI_NEWBB_ADMENU_TYPE","Topic types");


//config options

define("_MI_DO_DEBUG","Режим отладки");
define("_MI_DO_DEBUG_DESC","Показывать сообщения об ошибках");

define("_MI_IMG_SET","Наборы изображений");
define("_MI_IMG_SET_DESC","Выберите набор изображений для использования");

define("_MI_THEMESET","Выбор темы");
define("_MI_THEMESET_DESC"," Если выберите 'Нет', будет использовать тему сайта");

define("_MI_DIR_ATTACHMENT","Путь для сохранения вложений.");
define("_MI_DIR_ATTACHMENT_DESC","Конечный путь будет XOOPS_ROOT_PATH + '/' + Ваш_Путь. Без начальных/конечных '/'! <br /> Путь для миниатюр изображений будет Путь_Для_вложений + '/thumbs'.");
define("_MI_PATH_MAGICK","Путь до ImageMagick");
define("_MI_PATH_MAGICK_DESC","Обычно, это '/usr/bin/X11'. Оставьте пустым, если ImageMagicK не установлен.");

define("_MI_SUBFORUM_DISPLAY","Режим отображения подфорума на заглавной странице");
define("_MI_SUBFORUM_DISPLAY_DESC","");
define("_MI_SUBFORUM_EXPAND","Развернут");
define("_MI_SUBFORUM_COLLAPSE","Свернут");
define("_MI_SUBFORUM_HIDDEN","Скрыт");

define("_MI_POST_EXCERPT","Фрагмент сообщения на странице форума");
define("_MI_POST_EXCERPT_DESC","Длинна фрагмента сообщения в фокусе мыши. 0 - не отображать.");

define("_MI_PATH_NETPBM","Путь до Netpbm");
define("_MI_PATH_NETPBM_DESC","Обычно это '/usr/bin'. Оставте пустым для автоопределения или если Netpbm не установлен.");

define("_MI_IMAGELIB","Библиотека работы с изображениями");
define("_MI_IMAGELIB_DESC","Выберите какая библиотека будет использована для создания миниатюр. AUTO - для автоопределения.");

define("_MI_MAX_IMG_WIDTH","Максимальная ширина изображения");
define("_MI_MAX_IMG_WIDTH_DESC","Установите максимальную разрешённую <b>ширину</b> изобрежения, при превышении которой будет использоваться миниатюра. <br >Введите 0, если вы не хотите использовать миниатюры.");

define("_MI_MAX_IMAGE_WIDTH","Максимальная ширина для создания миниатюры");
define("_MI_MAX_IMAGE_WIDTH_DESC","Установить максимальную ширину загружаемых изображений, для которых будут создаваться миниатюры. <br >Изображения превышающие размер будут без миниатюр.");

define("_MI_MAX_IMAGE_HEIGHT","Максимальная высота для создания миниатюры");
define("_MI_MAX_IMAGE_HEIGHT_DESC","Установить максимальную высоту загружаемых изображений, для которых будут создаваться миниатюры. <br >Изображения превышающие размер будут без миниатюр.");

define("_MI_SHOW_DIS","Показывать уведомление?");
define("_MI_DISCLAIMER","Уведомление");
define("_MI_DISCLAIMER_DESC","Введите уведомление, которое будет показываться в выбранном случае.");
define("_MI_DISCLAIMER_TEXT","The forum contains a lot of posts with a lot of usefull information. <br /><br />In order to keep the number of double-posts to a minimum, we would like to ask you to use the forum search before posting your questions here.");
define("_MI_NONE","Не показывать");
define("_MI_POST","При создании темы");
define("_MI_REPLY","При ответе");
define("_MI_OP_BOTH","В обоих случаях");
define("_MI_WOL_ENABLE","Показывать активных пользователей");
define("_MI_WOL_ENABLE_DESC","Показывает блок активных пользователей внизу страницы");
define("_MI_WOL_ADMIN_COL","Цвет выделения администратора");
define("_MI_WOL_ADMIN_COL_DESC","Выделяет цветом администратора в блоке активных пользователей");
define("_MI_WOL_MOD_COL","Цвет выделения модератора");
define("_MI_WOL_MOD_COL_DESC","Выделяет цветом модератора в блоке активных пользователей");
define("_MI_LEVELS_ENABLE","Включить уровни HP/MP/EXP");
define("_MI_LEVELS_ENABLE_DESC","<b>HP</b> определяет среднее количество сообщений в день.<br><b>MP</b> определяет соотношение даты регистрации к общему числу сообщений.<br><b>EXP</b> увеличивается с каждым сообщением и когда достигает 100%, повышается уровень, а EXP сбрасывается в 0.");
define("_MI_NULL","disable");
define("_MI_TEXT","text");
define("_MI_GRAPHIC","graphic");
define("_MI_USERLEVEL","HP/MP/EXP Level Mode");
define("_MI_USERLEVEL_DESC","<strong>HP</strong>  по среднему кол. сообщений в день.<br /><strong>MP</strong>  is determined by your join date related to your post count.<br /><strong>EXP</strong> повышается за каждое сообщение; при достижении 100%, Вы получаете новый уровень, и ЕХР спадает на 0.");
define("_MI_RSS_ENABLE","Включить RSS выдачу");
define("_MI_RSS_ENABLE_DESC","Включение RSS выдачи, с ограничением количества сообщений и их описанием");
define("_MI_RSS_MAX_ITEMS","Максимальное количество сообщений");
define("_MI_RSS_MAX_DESCRIPTION","Максимальная длина описания");
define("_MI_RSS_UTF8","RSS Encoding with UTF-8");
define("_MI_RSS_UTF8_DESCRIPTION","Будет использоваться если возможно 'UTF-8', если нет, будет использоваться '"._CHARSET."'.");
define("_MI_RSS_CACHETIME","Время кэша RSS");
define("_MI_RSS_CACHETIME_DESCRIPTION","Время в минутах для регенерации RSS.");

define("_MI_MEDIA_ENABLE","Включить работу с мультимедиа");
define("_MI_MEDIA_ENABLE_DESC","Показывает вложенные изображения в теме сообщения.");
define("_MI_USERBAR_ENABLE","Включить панель пользователя");
define("_MI_USERBAR_ENABLE_DESC","Показывает информацию о пользователе: Профиль, PM, ICQ, MSN, и т.д.");

define("_MI_GROUPBAR_ENABLE","Включить панель групп");
define("_MI_GROUPBAR_ENABLE_DESC","Показывает группы, в которых состоит пользователь.");

define("_MI_RATING_ENABLE","Включить систему оценок");
define("_MI_RATING_ENABLE_DESC","Включает возможность оценивать темы");

define("_MI_VIEWMODE","Режим просмотра темы");
define("_MI_VIEWMODE_DESC","Вы можете изменить настройки просмотра темы по-умолчанию. Выберите НЕТ, если не хотите менять");
define("_MI_COMPACT","Compact");

define("_MI_MENUMODE","Значения режима меню по умолчанию");
define("_MI_MENUMODE_DESC","'SELECT' - select options, 'HOVER' - may slow down IE, 'CLICK' - requires JAVASCRIPT");

define("_MI_REPORTMOD_ENABLE","Сообщение модератору");
define("_MI_REPORTMOD_ENABLE_DESC","Пользователь может указать модератору на сообщение, для принятия соответствующих мер");
define("_MI_SHOW_JUMPBOX","Показывать выпадающее меню");
define("_MI_JUMPBOXDESC","С помощью выпадающего меню пользователь может перейти к другому топику или форуму");

define("_MI_SHOW_PERMISSIONTABLE","Показывать таблицу прав доступа");
define("_MI_SHOW_PERMISSIONTABLE_DESC","Выберите 'Да', чтобы показать права пользователей");

define("_MI_EMAIL_DIGEST","Отправка дайджеста по e-mail");
define("_MI_EMAIL_DIGEST_DESC","Установите честоту отправки дайджеста");
define("_MI_NEWBB_EMAIL_NONE","Не отправлять");
define("_MI_NEWBB_EMAIL_DAILY","Ежедневно");
define("_MI_NEWBB_EMAIL_WEEKLY","Еженедельно");

define("_MI_SHOW_IP","Показывать IP");
define("_MI_SHOW_IP_DESC","Выберите ДА, чтобы показывать IP модераторам");

define("_MI_ENABLE_KARMA","Включить требования уровня пользователя");
define("_MI_ENABLE_KARMA_DESC","Позволяет пользователям выбрать, пользователи какого уровня могут читать сообщение");

define("_MI_KARMA_OPTIONS","Уровни пользователя");
define("_MI_KARMA_OPTIONS_DESC","Через ','");

define("_MI_SINCE_OPTIONS","'Со времени' опция для 'viewform' и 'search'");
define("_MI_SINCE_OPTIONS_DESC","Положительное значение для дней и отрицательное для часов. Используйте ',' как разделитель для нескольких параметров.");

define("_MI_SINCE_DEFAULT","'Со времени' Значение по умолчанию");
define("_MI_SINCE_DEFAULT_DESC","Значение по умолчанию если не определено пользователем.");

define("_MI_MODERATOR_HTML","Разрешить HTML модераторам");
define("_MI_MODERATOR_HTML_DESC","Разрешает использование HTML в теме сообщения");

define("_MI_USER_ANONYMOUS","Разрешить зарегистрированным пользователям писать анонимно");
define("_MI_USER_ANONYMOUS_DESC","Зарегистрированные пользователи могут, таким образом скрыть сой ник");

define("_MI_ANONYMOUS_PRE","Префикс для анонимных пользователей");
define("_MI_ANONYMOUS_PRE_DESC","Добавляет этот префикс перед именем анонимного пользователя");

define("_MI_REQUIRE_REPLY","Требовать ответ для прочтения сообщения");
define("_MI_REQUIRE_REPLY_DESC","Для того, чтобы пользователям прочитать сообщение, необходимо на него ответить");

define("_MI_EDIT_TIMELIMIT","Время для редактирования сообщения");
define("_MI_EDIT_TIMELIMIT_DESC","В течении какого времени, после отправки сообщения, его можно редактировать. В минутах.");

define("_MI_DELETE_TIMELIMIT","Время для удаления сообщения");
define("_MI_DELETE_TIMELIMIT_DESC","В течении какого времени, после отправки сообщения, его можно удалить. В минутах.");

define("_MI_POST_TIMELIMIT","Время между сообщениями");
define("_MI_POST_TIMELIMIT_DESC","Время между последовательной отправкой сообщений. В минутах, 0 - без ограничений");

define("_MI_RECORDEDIT_TIMELIMIT","Время на редактирование сообщения");
define("_MI_RECORDEDIT_TIMELIMIT_DESC","В течении какого времени, после редактирования сообщения, эти изменения можно отменить. В секундах.");

define("_MI_SHOW_REALNAME","Показывать настоящее имя");
define("_MI_SHOW_REALNAME_DESC","Показывает настоящее имя пользователя вместо его ника.");

define("_MI_CACHE_ENABLE","Включить кэширование");
define("_MI_CACHE_ENABLE_DESC","Сохранение некоторых промежуточных результатов в сессии, чтобы снизить количество запросов к БД");

define("_MI_QUICKREPLY_ENABLE","Включить 'Быстрый ответ'");
define("_MI_QUICKREPLY_ENABLE_DESC","Включает форму быстрого ответа");

define("_MI_POSTSPERPAGE","Сообщений на страницу");
define("_MI_POSTSPERPAGE_DESC","Максимальное количество сообщений, которое может быть отображено на одной странице");

define("_MI_POSTSFORTHREAD","Максимальное количество постов для режима просмотра темы");
define("_MI_POSTSFORTHREAD_DESC","Если число постов превысит установленное, будет использоваться плоский режим просмотра");

define("_MI_TOPICSPERPAGE","Тем на страницу");
define("_MI_TOPICSPERPAGE_DESC","Максимальное количество тем, которое может быть отображено на одной странице");

define("_MI_IMG_TYPE","Тип изображений");
define("_MI_IMG_TYPE_DESC","Выберите тип изображений для кнопок форума.<br />- png: для быстрых серверов;<br />- gif: для нормальной скорости;<br />- auto: gif для IE и png для остальных браузеров");

define("_MI_PNGFORIE_ENABLE","Включить PNG хак");
define("_MI_PNGFORIE_ENABLE_DESC","Хак позволяет PNG иметь прозрачность в IE");

define("_MI_FORM_OPTIONS","Настройки формы");
define("_MI_FORM_OPTIONS_DESC","Настройки формы сообщения/редактирования/ответа.");
define("_MI_FORM_COMPACT","Простая");
define("_MI_FORM_DHTML","DHTML");
define("_MI_FORM_SPAW","Spaw");
define("_MI_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_FORM_FCK","FCK Editor");
define("_MI_FORM_KOIVI","Koivi Editor");
define("_MI_FORM_TINYMCE","TinyMCE Editor");

define("_MI_MAGICK","ImageMagick");
define("_MI_NETPBM","Netpbm");
define("_MI_GD1","GD1 Library");
define("_MI_GD2","GD2 Library");
define("_MI_AUTO","AUTO");

define("_MI_WELCOMEFORUM","Форум для того, чтобы приветствовать нового пользователя");
define("_MI_WELCOMEFORUM_DESC","Отправление конфигурации будет издано, когда пользователь посещает Форум впервые");

define("_MI_PERMCHECK_ONDISPLAY","Проверка разрешений");
define("_MI_PERMCHECK_ONDISPLAY_DESC","Проверьте разрешение для редактирования страницы");

define("_MI_USERMODERATE","Разрешить пльзователям модерирование");
define("_MI_USERMODERATE_DESC","");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define('_MI_NEWBB_THREAD_NOTIFY','Тема');
define('_MI_NEWBB_THREAD_NOTIFYDSC','Опции оповещения применимые для текущей темы.');

define('_MI_NEWBB_FORUM_NOTIFY','Форум');
define('_MI_NEWBB_FORUM_NOTIFYDSC','Опции оповещения применимые для текущего форума.');

define('_MI_NEWBB_GLOBAL_NOTIFY','Глобальные');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC','Глобальные опции оповещения форума.');

define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY','Новое сообщение');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP','Оповестить меня о создании нового сообщение в этой теме.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC','Прием оповещения когда в этой теме форума будет создано новое сообщение.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новое сообщение в теме');

define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY','Новая тема');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP','Оповестить меня о создании новой темы в этом форуме.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC','Прием оповещения когда в этом форуме будет начата новая тема.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новая тема в форуме');

define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY','Новый форум');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP','Оповестить меня когда будет создан новый форум.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC','Прием оповещения когда будет создан новый форум.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новый форум');

define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY','Новое сообщение');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP','Оповестить меня о любом новом сообщении.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC','Прием оповещения, когда создано любое новое сообщение.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новое сообщение');

define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY','Новое сообщение');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP','Оповестить меня о любом новом сообщении в текущем форуме.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC','Прием оповещения, когда создано любое новое сообщение в текущем форуме.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новое сообщение в форуме');

define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY','Новое сообщение (Весь текст)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP','Оповестить меня о любом новом сообщении (включить весь текст сообщения в оповещение).');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC','Прием оповещения включающего в себя текст, когда создано любое новое сообщение.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новое сообщение (Весь текст)');

define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY','Дайджест');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP','Оповестить меня при появлении дайджеста.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC','Получать оповещения о дайджесте.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : опубликован дайджест');

// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE","Тестовая категория");
define("_MI_NEWBB_INSTALL_CAT_DESC","Категория для тестирования форума.");
define("_MI_NEWBB_INSTALL_FORUM_NAME","Тестовый форум");
define("_MI_NEWBB_INSTALL_FORUM_DESC","Форум для тестирования.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT","Поздравляем! Форум работает .");
define("_MI_NEWBB_INSTALL_POST_TEXT","Добро пожаловать ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))." форум.<br />
	Не стесняемся регистрироваться и входить, чтобы задать ваши вопросы.<br /><br />
	Если Вы имеете какой-нибудь вопрос относительно использования CBB-форума, посетите ваш местный сайт поддержки или<a href=\"http://xoopsforge.com/modules/newbb/\" target=\"_blank\" title=\"CBB @ XoopsForge\">сайт модуля CBB</a>.");

?>