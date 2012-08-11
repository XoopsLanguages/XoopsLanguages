<?php
// $Id: modinfo.php,v 1.21
// Module Info

// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: andrey3761

// The name of this module
define('_MI_NEWS_NAME','Новости');

// A brief description of this module
define('_MI_NEWS_DESC','Создание раздела новостей, где пользователи могут публиковать новости/комментарии.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Новостные разделы');
define('_MI_NEWS_BNAME3','Самая читаемая статья');
define('_MI_NEWS_BNAME4','Лучшие новости');
define('_MI_NEWS_BNAME5','Последние новости');
define('_MI_NEWS_BNAME6','Модерирование новостей');
define('_MI_NEWS_BNAME7','Навигация по разделам');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Добавить новость');
define('_MI_NEWS_SMNAME2','Архив');

// Names of admin menu items
define('_MI_NEWS_ADMENU2','Менеджер разделов');
define('_MI_NEWS_ADMENU3','Менеджер статей');
define('_MI_NEWS_GROUPPERMS','Права');
// Added by Hervщ for prune option
define('_MI_NEWS_PRUNENEWS','Очистка новостей');
// Added by Hervщ
define('_MI_NEWS_EXPORT','Экспорт');

// Title of config items
define('_MI_STORYHOME','Сколько новостей показывать на основной странице?');
define('_MI_NOTIFYSUBMIT','Предупредить по e-mail при поступлении новостей?');
define('_MI_DISPLAYNAV','Показывать окно навигации?');
define('_MI_AUTOAPPROVE','Автоматически одобрять новостные статьи без участия администратора?');
define("_MI_ALLOWEDSUBMITGROUPS","Группы, которые могут отправлять новостные статьи");
define("_MI_ALLOWEDAPPROVEGROUPS","Группы, которые могут одобрять новостные статьи");
define("_MI_NEWSDISPLAY","Вид отображения новостей");
define("_MI_NAMEDISPLAY","Имя автора");
define("_MI_COLUMNMODE","Колонки");
define("_MI_STORYCOUNTADMIN","Количество новых статей, отображаемых в области администрирования (эта опция используется для ограничения количества отображаемых статей в области администрирования и используется в статистике) : ");
define('_MI_UPLOADFILESIZE','Максимальный размер загружаемого файла (Кб) 1048576 = 1 Мб');
define("_MI_UPLOADGROUPS","Группы, авторизованные для загрузки");


// Description of each config items
define('_MI_STORYHOMEDSC','Выберите количество новостей для отображения на основной странице');
define('_MI_NOTIFYSUBMITDSC','Выберите "Да", если хотите получать уведомления на адрес web-мастера о поступлении новостей');
define('_MI_DISPLAYNAVDSC','Выберите "Да", для отображения окна навигации вверху каждой новостной страницы');
define('_MI_AUTOAPPROVEDSC','');
define("_MI_ALLOWEDSUBMITGROUPSDESC","Выбранные группы могут отправлять новостные статьи");
define("_MI_ALLOWEDAPPROVEGROUPSDESC","Выбранные группы могут одобрять присланные новостные статьи");
define("_MI_NEWSDISPLAYDESC","Классический вид для отображения всех новостей, упорядоченных по дате публикации. Вид отображения по темам для группирования новостей по темам с выводом последней новости в полном объеме, а остальных в виде списка наименований");
define('_MI_ADISPLAYNAMEDSC','Выберите вид отображения имени автора');
define("_MI_COLUMNMODE_DESC","Вы можете выбрать количество колонок для вывода списка новостей");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Выберите группы, которым разрешено загружать файлы на сервер");

// Name of config item values
define("_MI_NEWSCLASSIC","Классическое");
define("_MI_NEWSBYTOPIC","По темам");
define("_MI_DISPLAYNAME1","Имя пользователя");
define("_MI_DISPLAYNAME2","Реальное имя");
define("_MI_DISPLAYNAME3","Не показывать автора");
define("_MI_UPLOAD_GROUP1","Отправляющие и одобряющие");
define("_MI_UPLOAD_GROUP2","Только одобряющие");
define("_MI_UPLOAD_GROUP3","Загрузка запрещена");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY','Глобальные');
define('_MI_NEWS_GLOBAL_NOTIFYDSC','Глобальные опции оповещения о новостях.');

define('_MI_NEWS_STORY_NOTIFY','Новость');
define('_MI_NEWS_STORY_NOTIFYDSC','Опции оповещения, применимые к текущей новости.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY','Новый раздел новостей');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Оповестить меня о создании нового раздела новостей.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Прием оповещения, когда будет создан новый раздел новостей.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новый раздел новостей');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY','Прислана новая статья');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP','Оповестить меня, когда прислана новая новостная статья (ожидает одобрения).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC','Прием оповещения, когда прислана новая новостная статья (ожидает одобрения).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Прислана новая новостная статья');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY','Новая новостная статья');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP','Оповестить меня о публикации любой новой новостной статьи.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC','Прием оповещения, когда любая новая новостная статья будет опубликована.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новая новостная статья');

define('_MI_NEWS_STORY_APPROVE_NOTIFY','Статья одобрена');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP','Оповестить меня об одобрении этой новостной статьи.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC','Прием оповещения, когда эта новостная статья будет одобрена.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новостная статья одобрена');

define('_MI_RESTRICTINDEX','Ограничить темы на странице списка?');
define('_MI_RESTRICTINDEXDSC','Если включено, то пользователи могут увидеть только те новостные записи в теме, к которым им дан доступ в правах на просмотр');

define('_MI_NEWSBYTHISAUTHOR','Новости того же автора');
define('_MI_NEWSBYTHISAUTHORDSC','Если Вы выберите "Да", то будет отбражаться ссылка "Другие новости этого автора"');

define('_MI_NEWS_PREVNEX_LINK','Показывать ссылки на предыдущие и следующие новости?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Если разрешить эту опцию, то будут отображены две новые ссылки внизу каждой статьи. Эти ссылки используются для перехода к предыдущей и следующей новости, отсортированных по дате публикации');
define('_MI_NEWS_SUMMARY_SHOW','Показывать итоговую таблицу ?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Если Вы используете эту опцию, то итоговая таблица, содержащая ссылки на все опубликованные статьи, связанные с этой новостью, будут отображаться на странице');
define('_MI_NEWS_AUTHOR_EDIT','Разрешить авторам редактировать свои новости?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Если разрешить эту опцию, то авторы смогут редактировать свои новостные статьи.');
define('_MI_NEWS_RATE_NEWS','Разрешить пользователям оценивать новости?');
define('_MI_NEWS_TOPICS_RSS','Разрешить поддержку RSS для новостей ?');
define('_MI_NEWS_TOPICS_RSS_DESC','Если Вы выберите "Да", то содержимое статей будет доступно пользователям через RSS');
define('_MI_NEWS_DATEFORMAT',"Формат даты");
define('_MI_NEWS_DATEFORMAT_DESC',"Пожалуйста обратитесь к документации по PHP (http://fr.php.net/manual/en/function.date.php) для дополнительной информации о выборе формата даты. Если Вы оставите это поле пустым, то будет использоваться формат даты принятый по умолчанию");
define('_MI_NEWS_META_DATA',"Разрешить ввод мета-данных (ключевых слов и описания) ?");
define('_MI_NEWS_META_DATA_DESC','Если Вы выберите "Да", то при одобрении статьи, можно будет ввести дополнительные мета-данные : ключевые слова и описание');
define('_MI_NEWS_BNAME8','Случайные новости');
define('_MI_NEWS_NEWSLETTER','Бюллетень');
define('_MI_NEWS_STATS','Статистика');
define("_MI_NEWS_FORM_OPTIONS","Опции заполняемых форм");
define("_MI_NEWS_FORM_COMPACT","Упрощенный");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Редактор Spaw");
define("_MI_NEWS_FORM_HTMLAREA","Редактор HtmlArea");
define("_MI_NEWS_FORM_FCK","Редактор FCK");
define("_MI_NEWS_FORM_KOIVI","Редактор Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC","Выберите используемый редактор. Если у Вас обычная установка (например, Вы используете только встроенный в ядро редактор, поставляемый вместе со стандартным ядром), то Вы можете выбрать только DHTML или Упрощенный редактор");
define("_MI_NEWS_KEYWORDS_HIGH","Использовать подсветку ключевых слов ?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Если Вы включите эту функцию, то ключевые слова введенные в поиске будут подсвечены в найденных статьях");
define("_MI_NEWS_HIGH_COLOR","Цвет, используемый для подсветки ключевых слов ?");
define("_MI_NEWS_HIGH_COLOR_DES","Используется только при включенной функции подсветки ключевых слов");
define("_MI_NEWS_INFOTIPS","Длина контекстного указателя");
define("_MI_NEWS_INFOTIPS_DES","Если Вы включите эту функцию, то ссылки, связанные со новостью будут содержать первые несколько символов статьи. Если Вы установите это значение в 0, то контекстный указатель будет пустым");
define("_MI_NEWS_SITE_NAVBAR","Использовать навигационную панель браузеров Mozilla и Opera ?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Если Вы включите эту функцию, то посетители Вашего сайта смогут использовать навигационную панель для перемещения по статьям.");
define("_MI_NEWS_TABS_SKIN","Выберите оформление для закладок");
define("_MI_NEWS_TABS_SKIN_DESC","Выбраное оформление будет использовано во всех блоках использующих закладки");
define("_MI_NEWS_SKIN_1","Bar Style");
define("_MI_NEWS_SKIN_2","Beveled");
define("_MI_NEWS_SKIN_3","Classic");
define("_MI_NEWS_SKIN_4","Folders");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Plain");
define("_MI_NEWS_SKIN_7","Rounded");
define("_MI_NEWS_SKIN_8","ZDnet style");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Archives');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Отображать ссылки в версиях для печати ваших статей ?");
define("_MI_NEWS_DUBLINCORE","Ativate Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","для получения дополнительной информации, <a href='http://dublincore.org/'>посещайте эту ссылку</a>");
define("_MI_NEWS_BOOKMARK_ME","Отображать блок  'Сделать закладку на эту статью'?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Этот блок будет видим на странице статьи");
define("_MI_NEWS_FF_MICROFORMAT","Activate Firefox 2 Micro Summaries ?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","для получения дополнительной информации, см.<a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>ЭТУ страницу</a>");
define("_MI_NEWS_WHOS_WHO","Авторы сайта");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Каталог Тем");
define("_MI_NEWS_ADVERTISEMENT","Реклама");
define("_MI_NEWS_ADV_DESCR","Введите текст или код javascript, чтобы отобразить в ваших статьях");
define("_MI_NEWS_MIME_TYPES","Введите разрешенные для загрузки Mime Types (по одному в линию)");
define("_MI_NEWS_ENHANCED_PAGENAV","Использование расширенной навигации страницы ?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","С этой опцией Вы можете отделить ваши страницы кое с чем как это : [pagrebreak:Page Title],  связи к страницам заменены всплывающим списком, и Вы можете использовать [summary] чтобы создать автоматическое резюме страниц");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Category');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Notification options that apply to the current category');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY','New Story Submitted');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP','Notify me when any new story is posted to this category.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC','Receive notification when any new story is posted to this category.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notify : New news story');

// Added in version 1.63
define('_MI_NEWS_TAGS',"Использовать систему тегов?");
define('_MI_NEWS_TAGS_DSC',"Необходим модуль Tag от phppp");
define("_MI_NEWS_BNAME10","Облако тегов");
define("_MI_NEWS_BNAME11","Лучшие теги");
?>