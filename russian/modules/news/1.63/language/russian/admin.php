<?php
// $Id: admin.php,v 1.18
//%%%%%%	Admin Module Name  Articles 	%%%%%

// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: andrey3761

define("_AM_DBUPDATED","База данных успешно обновлена!");
define("_AM_CONFIG","Конфигурация новостей");
define("_AM_AUTOARTICLES","Автоматические статьи");
define("_AM_STORYID","Номер статьи");
define("_AM_TITLE","Название");
define("_AM_TOPIC","Раздел");
define("_AM_POSTER","Отправитель");
define("_AM_PROGRAMMED","Программируемые дата/время");
define("_AM_ACTION","Действие");
define("_AM_EDIT","Редактировать");
define("_AM_DELETE","Удалить");
define("_AM_LAST10ARTS","Последние %d статей");
define("_AM_PUBLISHED","Опубликовано"); // Published Date
define("_AM_GO","Перейти!");
define("_AM_EDITARTICLE","Редактирование статьи");
define("_AM_POSTNEWARTICLE","Добавление новой статьи");
define("_AM_ARTPUBLISHED","Ваша статья была опубликована!");
define("_AM_HELLO","Здравствуйте, %s,");
define("_AM_YOURARTPUB","Ваша статья, отправленная на наш сайт, была опубликована.");
define("_AM_TITLEC","Название: ");
define("_AM_URLC","Адрес: ");
define("_AM_PUBLISHEDC","Опубликовано: ");
define("_AM_RUSUREDEL","Вы действительно хотите удалить эту статью и все ее комментарии?");
define("_AM_YES","Да");
define("_AM_NO","Нет");
define("_AM_INTROTEXT","Введение");
define("_AM_EXTEXT","Расширенный текст");
define("_AM_ALLOWEDHTML","Разрешенные HTML-тэги:");
define("_AM_DISAMILEY","Запретить смайлики");
define("_AM_DISHTML","Запретить HTML");
define("_AM_APPROVE","Одобрить");
define("_AM_MOVETOTOP","Перенести эту статью наверх");
define("_AM_CHANGEDATETIME","Изменить дату/время публикации");
define("_AM_NOWSETTIME","Сейчас установлено: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Текущая дата: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Установить дату/время публикации");
define("_AM_MONTHC","Месяц:");
define("_AM_DAYC","День:");
define("_AM_YEARC","Год:");
define("_AM_TIMEC","Время:");
define("_AM_PREVIEW","Предварительный просмотр");
define("_AM_SAVE","Сохранить");
define("_AM_PUBINHOME","Опубликовать на домашней странице?");
define("_AM_ADD","Добавить");

//%%%%%%	Admin Module Name  Topics 	%%%%%
define("_AM_ADDMTOPIC","Создание ОСНОВНОГО раздела");
define("_AM_TOPICNAME","Название раздела");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(максимум: 255 символов)");
define("_AM_TOPICIMG","Рисунок раздела");
define("_AM_IMGNAEXLOC","имя рисунка + расширение, расположенные в %s");
define("_AM_FEXAMPLE","например: games.gif");
define("_AM_ADDSUBTOPIC","Создание ПОД-раздела");
define("_AM_IN","в");
define("_AM_MODIFYTOPIC","Изменение раздела");
define("_AM_MODIFY","Изменить");
define("_AM_PARENTTOPIC","Родительский раздел");
define("_AM_SAVECHANGE","Сохранить изменения");
define("_AM_DEL","Удалить");
define("_AM_CANCEL","Отмена");
define("_AM_WAYSYWTDTTAL","ПРЕДУПРЕЖДЕНИЕ: Вы действительно хотите удалить этот раздел и ВСЕ его статьи и комментарии?");


// Added in Beta6
define("_AM_TOPICSMNGR","Менеджер разделов");
define("_AM_PEARTICLES","Создание/редактирование статей");
define("_AM_NEWSUB","Не опубликованные новости");
define("_AM_POSTED","Отправлено");
define("_AM_GENERALCONF","Основные настройки");

// Added in RC2
define("_AM_TOPICDISPLAY","Показывать рисунок раздела?");
define("_AM_TOPICALIGN","Расположение");
define("_AM_RIGHT","Справа");
define("_AM_LEFT","Слева");

define("_AM_EXPARTS","Статьи с истекшим сроком");
define("_AM_EXPIRED","Истекает");
define("_AM_CHANGEEXPDATETIME","Изменить дату/время истечения срока");
define("_AM_SETEXPDATETIME","Установить дату/время истечения срока");
define("_AM_NOWSETEXPTIME","Сейчас установлено: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","Вы должны ввести имя раздела!");
define("_AM_EMPTYNODELETE","Нет ничего для удаления!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM','Права на отправку/одобрение/просмотр');
define('_AM_SELFILE','Выбор файла для загрузки');

// Added by Hervщ
define('_AM_UPLOAD_DBERROR_SAVE','Ошибка при прикреплении файла к статье');
define('_AM_UPLOAD_ERROR','Ошибка при загрузке файла');
define('_AM_UPLOAD_ATTACHFILE','Прикрепленные файлы');
define('_AM_APPROVEFORM','Права на одобрение');
define('_AM_SUBMITFORM','Права на отправку');
define('_AM_VIEWFORM','Права на просмотр');
define('_AM_APPROVEFORM_DESC','Выберите, кто может одобрять новости');
define('_AM_SUBMITFORM_DESC','Выберите, кто может отправлять новости');
define('_AM_VIEWFORM_DESC','Выберите, кто может просматривать новости');
define('_AM_DELETE_SELFILES','Удалить выбранные файлы');
define('_AM_TOPIC_PICTURE','Загрузить рисунок');
define('_AM_UPLOAD_WARNING','<B>Внимание: Не забудьте дать права на запись в каталог: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE','Обновление завершено');
define('_AM_NEWS_UPDATEMODULE','Обновить шаблоны и блоки модуля');
define('_AM_NEWS_UPGRADEFAILED','Ошибка обновления');
define('_AM_NEWS_UPGRADE','Обновление');
define('_AM_ADD_TOPIC','Добавление статьи');
define('_AM_ADD_TOPIC_ERROR','Ошибка, статья уже существует!');
define('_AM_ADD_TOPIC_ERROR1','ОШИБКА: Нельзя выбрать этот раздел как родительский раздел!');
define('_AM_SUB_MENU','Создать этот раздел как подменю');
define('_AM_SUB_MENU_YESNO','Подменю?');
define('_AM_HITS','Просмотров');
define('_AM_CREATED','Создано');

define('_AM_TOPIC_DESCR',"Описание раздела");
define('_AM_USERS_LIST',"Список пользователей");
define('_AM_PUBLISH_FRONTPAGE',"Опубликовать на первой странице ?");
define('_AM_NEWS_UPGRADEFAILED1',"Не могу создать таблицу 'stories_files'");
define('_AM_NEWS_UPGRADEFAILED2',"Не могу изменить длину названия раздела");
define('_AM_NEWS_UPGRADEFAILED21',"Не могу добавить новые поля в таблице 'topics'");
define('_AM_NEWS_UPGRADEFAILED3',"Не могу создать таблицу 'stories_votedata'");
define('_AM_NEWS_UPGRADEFAILED4',"Не могу создать два новых поля 'rating' и 'votes' в таблице 'story'");
define('_AM_NEWS_UPGRADEFAILED0',"Пожалуйста, основываясь на этих сообщениях, попробуйте исправить проблему с помощью phpMyadmin и файла с sql-описанием таблиц, который находится в каталоге 'sql' модуля новостей");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Ошибка, для использования скрипта обновления, Вы должны быть администратором этого модуля");
define('_AM_NEWS_PRUNE_BEFORE',"Очистить новости, которые были опубликованы до");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Удалить только статьи с истекшим сроком");
define('_AM_NEWS_PRUNE_CONFIRM',"Внимание, Вы собираетесь удалить новостные статьи опубликованные до %s (без возможности восстановления). Количество удаляемых статей: %s.<br />Вы уверены, что хотите это сделать ?");
define('_AM_NEWS_PRUNE_TOPICS',"Ограничиться поиском в следующих разделах");
define('_AM_NEWS_PRUNENEWS','Очистка новостей');
define('_AM_NEWS_EXPORT_NEWS','Экспорт');
define('_AM_NEWS_EXPORT_NOTHING',"Извините, нет данных для экспорта, пожалуйста пересмотрите условия выборки новостей");
define('_AM_NEWS_PRUNE_DELETED','%d новостей были удалено');
define('_AM_NEWS_PERM_WARNING','<h2>Внимание, здесь 3 формы, в каждой из них своя кнопка отправки данных</h2>');
define('_AM_NEWS_EXPORT_BETWEEN','Экспортировать новости с датой публикации между');
define('_AM_NEWS_EXPORT_AND',' и ');
define('_AM_NEWS_EXPORT_PRUNE_DSC',"Если Вы не выберите ни одного раздела, то будут использованы все разделы,<br/>иначе будут использоваться только выбранные разделы");
define('_AM_NEWS_EXPORT_INCTOPICS','Включать описания разделов ?');
define('_AM_NEWS_EXPORT_ERROR','Ошибка при попытке создания файла %s. Операция остановлена.');
define('_AM_NEWS_EXPORT_READY',"Экспортированные новости в виде XML-файла готовы для скачивания. <br /><a href='%s'>Нажмите здесь для получения файла</a>.<br />Не забудьте <a href='%s'>удалить его</a> после завершения скачивания.");
define('_AM_NEWS_RSS_URL',"Адрес RSS-потока");
define('_AM_NEWS_NEWSLETTER',"Информационный бюллетень");
define('_AM_NEWS_NEWSLETTER_BETWEEN','Выберите новости с датой публикации между');
define('_AM_NEWS_NEWSLETTER_READY',"Файл содержащий информационный бюллетень готов для скачивания. <br /><a href='%s'>Нажмите здесь для получения файла</a>.<br />Не забудьте <a href='%s'>удалить его</a> после завершения скачивания.");
define('_AM_NEWS_DELETED_OK',"Файл был успешно удален");
define('_AM_NEWS_DELETED_PB',"При удалении файла возникли проблемы");
define('_AM_NEWS_STATS0','Статистика разделов');
define('_AM_NEWS_STATS','Статистика');
define('_AM_NEWS_STATS1','Уникальных авторов');
define('_AM_NEWS_STATS2','Всего');
define('_AM_NEWS_STATS3','Статистика статей');
define('_AM_NEWS_STATS4','Наиболее читаемые статьи');
define('_AM_NEWS_STATS5','Наименее читаемые статьи');
define('_AM_NEWS_STATS6','Статьи с высоким рейтингом');
define('_AM_NEWS_STATS7','Наиболее читаемые авторы');
define('_AM_NEWS_STATS8','Авторы с высоким рейтингом');
define('_AM_NEWS_STATS9','Наиболее активные авторы');
define('_AM_NEWS_STATS10','Статистика авторов');
define('_AM_NEWS_STATS11',"Количество статей");
define('_AM_NEWS_HELP',"Помощь");
define("_AM_NEWS_MODULEADMIN",": Администрирование модуля :");
define("_AM_NEWS_GENERALSET","Параметры модуля" );
define('_AM_NEWS_GOTOMOD','Перейти к модулю');
define('_AM_NEWS_NOTHING',"Извините, нет данных для загрузки, пожалуйста пересмотрите условия выборки новостей !");
define('_AM_NEWS_NOTHING_PRUNE',"Извините, нет статей для удаления, пожалуйста пересмотрите условия выборки !");
define('_AM_NEWS_TOPIC_COLOR',"Цвет раздела");
define('_AM_NEWS_COLOR',"Цвет");
define('_AM_NEWS_REMOVE_BR',"Конвертировать html-тэг &lt;br&gt; в перевод строки ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Пожалуйста обновите модуль!</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER',"Заголовок");
define('_AM_NEWS_NEWSLETTER_FOOTER',"Нижний колонтитул");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS',"Удалять html-тэги ?");
define('_AM_NEWS_VERIFY_TABLES','Проверить таблицы');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen - система, которая может помочь Вам иметь вашу страницу, лучше всего индексированную механизмами поиска.<br />Кроме того, если Вы печатаете мета ключевые слова и мета описания самостоятельно, модуль автоматически создаст их.");
define('_AM_NEWS_BLACKLIST',"Черный список");
define('_AM_NEWS_BLACKLIST_DESC',"слова в этом списке не будут использоваться для создания ключевых слов");
define('_AM_NEWS_BLACKLIST_ADD',"Добавить слова");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"введите слова, чтобы добавить в черный список<br />(одно слово в линию)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Максимальное колличество ключевых слов, для авто-генеририрования");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Порядок ключевых слов");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Создавать в порядке их появления в тексте");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Порядок повторения слов");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Обратный порядок повторения слов ");
?>