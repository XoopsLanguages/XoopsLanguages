<?php
/**
 * TDMDownload
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   Gregory Mage (Aka Mage)
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      Gregory Mage (Aka Mage)
 */

// Nom du module
define("_MI_TDMDOWNLOADS_NAME","TDMDownloads");

// Description du module
define("_MI_TDMDOWNLOADS_DESC","Создает раздел загрузки, где пользователи могут загрузить/добавить/оценить различные файлы.");

// Bloc
define("_MI_TDMDOWNLOADS_BNAME1","Недавние Загрузки");
define("_MI_TDMDOWNLOADS_BNAMEDSC1","Отображать недавние загрузки");
define("_MI_TDMDOWNLOADS_BNAME2","Топ загрузок");
define("_MI_TDMDOWNLOADS_BNAMEDSC2","Отображать топ загрузок");
define("_MI_TDMDOWNLOADS_BNAME3","Топ рейтинга загрузок");
define("_MI_TDMDOWNLOADS_BNAMEDSC3","Отображать Топ рейтинга загрузок");
define("_MI_TDMDOWNLOADS_BNAME4","Случайные загрузки");
define("_MI_TDMDOWNLOADS_BNAMEDSC4","Отображать Случайные загрузки");
define("_MI_TDMDOWNLOADS_BNAME5","Поиск загрузок");
define("_MI_TDMDOWNLOADS_BNAMEDSC5","Форма поиска загрузок");

// Sous menu
define("_MI_TDMDOWNLOADS_SMNAME1","Предложить");
define("_MI_TDMDOWNLOADS_SMNAME2","Список файлов");

// Menu administration
define("_MI_TDMDOWNLOADS_ADMENU1", "Главная");
define("_MI_TDMDOWNLOADS_ADMENU2","Категории");
define("_MI_TDMDOWNLOADS_ADMENU3","Загрузки");
define("_MI_TDMDOWNLOADS_ADMENU4","Поврежденные");
define("_MI_TDMDOWNLOADS_ADMENU5","Измененные");
define("_MI_TDMDOWNLOADS_ADMENU6","Поля");
define("_MI_TDMDOWNLOADS_ADMENU7","Импорт");
define("_MI_TDMDOWNLOADS_ADMENU8", "Права");
define("_MI_TDMDOWNLOADS_ADMENU9", "О модуле");

// Prйfйrences
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_GENERAL", "Главная");
define('_MI_TDMDOWNLOADS_POPULAR', 'Количество хитов, чтобы стать популярным');
define('_MI_TDMDOWNLOADS_AUTO_SUMMARY',"Автоматическое Резюме ?");
define('_MI_TDMDOWNLOADS_SHOW_UPDATED',"Показывать картинки 'обновленный' и 'новый'?");
define('_MI_TDMDOWNLOADS_USESHOTS', "Использовать скриншоты ?");
define("_MI_TDMDOWNLOADS_IMGFLOAT", "Изображение");
define("_MI_TDMDOWNLOADS_IMGFLOAT_LEFT", "Слева");
define("_MI_TDMDOWNLOADS_IMGFLOAT_RIGHT", "Справа");
define('_MI_TDMDOWNLOADS_SHOTWIDTH', "Ширина миниатюр");
define('_MI_TDMDOWNLOADS_PLATEFORM',"Платформы");
define('_MI_TDMDOWNLOADS_PLATEFORM_DSC',"Введите разрешенные платформы, разделенные |");
define('_MI_TDMDOWNLOADS_USETELLAFRIEND', 'Использовать модуль Tellafriend для связи с друзьями?');
define('_MI_TDMDOWNLOADS_USETELLAFRIENDDSC', 'Вы должны установить модуль Tellafriend, чтобы использовать эту опцию');
define('_MI_TDMDOWNLOADS_USETAG', 'Использовать модуль TAG для генерации тегов');
define('_MI_TDMDOWNLOADS_USETAGDSC', 'Вы должны установить модуль TAG для использования этой опции');
define("_MI_TDMDOWNLOADS_FORM_OPTIONS","Редактор");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_USER", "Пользователь");
define('_MI_TDMDOWNLOADS_PERPAGE', 'Количество элементов на страницу');
define("_MI_TDMDOWNLOADS_NBDOWCOL","Позволяет выбирать количество колонок загрузок");
define("_MI_TDMDOWNLOADS_NEWDLS", "Количество новых файлов на главной");
define('_MI_TDMDOWNLOADS_TOPORDER',"Как отображать на главной странице?");
define('_MI_TDMDOWNLOADS_TOPORDER1',"Дата  (DESC)");
define('_MI_TDMDOWNLOADS_TOPORDER2',"Дата  (ASC)");
define('_MI_TDMDOWNLOADS_TOPORDER3',"хиты (DESC)");
define('_MI_TDMDOWNLOADS_TOPORDER4',"хиты (ASC)");
define('_MI_TDMDOWNLOADS_TOPORDER5',"Голоса (DESC)");
define('_MI_TDMDOWNLOADS_TOPORDER6',"Голоса (ASC)");
define('_MI_TDMDOWNLOADS_TOPORDER7',"Заголовки (DESC)");
define('_MI_TDMDOWNLOADS_TOPORDER8',"Заголовки (ASC)");
define('_MI_TDMDOWNLOADS_PERPAGELISTE', 'Отображение загрузок в списке файлов');
define('_MI_TDMDOWNLOADS_SEARCHORDER',"Как отображать список файлов?");
define('_MI_TDMDOWNLOADS_SUBCATPARENT', 'Количество подкатегорий в основных категориях');
define("_MI_TDMDOWNLOADS_NBCATCOL","Позволяет выбирать количество колонок категорий");
define('_MI_TDMDOWNLOADS_BLDATE', 'Отображать последние файлы на главной странице модуля (Резюме)?');
define('_MI_TDMDOWNLOADS_BLPOP', 'Отображать популярные файлы на главной странице модуля (Резюме)?');
define('_MI_TDMDOWNLOADS_BLRATING', 'Отображать лучшие файлы на главной странице модуля (Резюме)?');
define('_MI_TDMDOWNLOADS_NBBL', 'Количество файлов, отображаемых в резюме?');
define('_MI_TDMDOWNLOADS_LONGBL', 'Длина заголовка в резюме');
define("_MI_TDMDOWNLOADS_BOOKMARK", "Закладки");
define("_MI_TDMDOWNLOADS_BOOKMARK_DSC", "Показать/Скрыть значки закладок");
define("_MI_TDMDOWNLOADS_SOCIAL", "Социальные Сети");
define("_MI_TDMDOWNLOADS_SOCIAL_DSC", "Показать/Скрыть значки  Социальных сетей");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT", "Плавающая страница загрузки");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT_DSC", "<ul><li>Слева направо: Показать описание загрузки с левой стороны и колонку информации с правой стороны</li><li>Справа налево: Показать описание загрузки с правой стороны и колонку информации с левой стороны</li></ul>");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT_LTR", "Слева направо");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT_RTL", "Справа налево");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_ADMIN", "Администрирование");
define('_MI_TDMDOWNLOADS_PERPAGEADMIN', 'Количество отображаемых элементов на страницу в админке');
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_DOWNLOADS", "Загрузки");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD',"Выберите тип разрешения для 'Разрешенных Загрузок'");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD1',"Разрешение по категориям");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD2',"Разрешения файлов");
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAME', 'Переименовывать загруженные файлы?');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAMEDSC', 'Если опция &#039;no&#039; и вы загружаете файл, уже существующий на сервере, то старый файл перезапишется');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIX', 'Префикс загруженных файлов');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIXDSC', 'Работает, если опция для переименования файлов в &#039;yes&#039;');
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE',"Максимальный разрешенный размер файла");
define('_MI_TDMDOWNLOADS_MIMETYPE',"разрешенные mime types ");
define('_MI_TDMDOWNLOADS_MIMETYPE_DSC',"Введите разрешенные mime types, разделив их |");
define('_MI_TDMDOWNLOADS_CHECKHOST', "Запретить прямое скачивание? (leeching) ?");
define('_MI_TDMDOWNLOADS_REFERERS', "Эти сайты могут скачивать напрямую.Отделите с помощью |");
define("_MI_TDMDOWNLOADS_DOWNLIMIT", "Лимит загрузок");
define("_MI_TDMDOWNLOADS_DOWNLIMITDSC", "Выбор максимального лимита загрузок");
define("_MI_TDMDOWNLOADS_LIMITGLOBAL", "Количество загрузок за 24 часа");
define("_MI_TDMDOWNLOADS_LIMITGLOBALDSC", "Количество загрузок для каждого пользователя за 24 часа. Выберите 0 для не ограниченного");
define("_MI_TDMDOWNLOADS_LIMITLID", "Количество загрузок каждого файла за 24 часа");
define("_MI_TDMDOWNLOADS_LIMITLIDDSC", "Количество загрузок для каждого файла за 24 часа каждым пользователем. Выберите 0 для не ограниченного.");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_PAYPAL", "Paypal");
define('_MI_TDMDOWNLOADS_USEPAYPAL',"Использовать кнопку 'Пожертвуйте' Paypal ");
define('_MI_TDMDOWNLOADS_CURRENCYPAYPAL',"Пожертвование");
define('_MI_TDMDOWNLOADS_IMAGEPAYPAL',"Изображение для кнопки 'Пожертвовать'");
define('_MI_TDMDOWNLOADS_IMAGEPAYPALDSC',"Пожалуйста, введите адрес изображения");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_RSS", "RSS");
define("_MI_TDMDOWNLOADS_PERPAGERSS", "Количество RSS загрузок");
define("_MI_TDMDOWNLOADS_PERPAGERSSDSCC", "Количество загрузок отобразить на страницах RSS");
define("_MI_TDMDOWNLOADS_TIMECACHERSS", "время кэша RSS");
define("_MI_TDMDOWNLOADS_TIMECACHERSSDSC", "Время кэша для страниц RSS в минутах");
define("_MI_TDMDOWNLOADS_LOGORSS", "Логотип сайта для страниц RSS");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_COMNOTI", "Комментарии и уведомления");

// Notifications
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFY', 'Основные');
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFYDSC', 'Опции глобального уведомления.');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFY', 'Категория');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFYDSC', "Опции уведомления, которые обращаются к текущей категории файла.");
define('_MI_TDMDOWNLOADS_FILE_NOTIFY', 'Файл');
define('_MI_TDMDOWNLOADS_FILE_NOTIFYDSC', "Опции уведомления, которые обращаются к текущему файлу.");
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY', 'Новая Категория');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Уведомить меня, если создан новый файл в  категории.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC', "Получить уведомление, если создан новый файл в  категории");
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автоуведомление : создан новый файл в  категории');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY', 'Изменить Требуемый Файл');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Уведомить меня относительно любого запроса изменения файла.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC', "Получить уведомление, если есть любой запрос изменения файла.");
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автоуведомление : Файл изменен');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY', 'Поврежденный файл');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Уведомьте меня относительно любого сообщения о поврежденном файле.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Получите уведомление, если есть любое сообщение о поврежденном файле.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автоуведомление : Сообщение о поврежденном файле');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY', 'Добавленный файл');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP', "Уведомьте меня, когда любой новый файл добавлен (ожидание одобрения).");
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC', "Получить уведомление, если есть добавленный новый файл (ожидание одобрения).");
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автоуведомление : Новый добавленный файл');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFY', 'Новый файл');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP', "Уведомить, если есть новый файл.");
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC', 'Получить уведомление, если есть новый файл.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} фвтоуведомление : Новый файл');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY', 'Добавлен файл');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP', "Уведомьте меня, когда новый файл добавлен (ожидание одобрения) к текущей категории.");
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC', "Получить уведомление, если добавлен новый файл (ожидание одобрения) к текущей категории.");
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автоуведомление: Добавлен новый файл в категории');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFY', 'Новый файл');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP', "Уведомить меня, когда новый файл отправлен в эту категорию.");
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC', "Получить уведомление, когда новый файл отправлен в эту категорию.");
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Новый файл в категории');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFY', 'Одобренный файл');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYCAP', 'Уведомьть меня, когда этот файл одобрен.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYDSC', 'Получить уведомление, когда этот файл одобрен.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} авто одобрение : Файл одобрен');
?>