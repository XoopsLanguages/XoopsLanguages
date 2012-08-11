<?php
/**
 * ****************************************************************************
 *  - TDMDownloads By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (www.xoops.org)
 *
 * La licence GNU GPL, garanti ࡬'utilisateur les droits suivants
 *
 * 1. La libert顤'exꤵter le logiciel, pour n'importe quel usage,
 * 2. La libert顤e l' 굵dier et de l'adapter ࡳes besoins,
 * 3. La libert顤e redistribuer des copies,
 * 4. La libert顤'amꭩorer et de rendre publiques les modifications afin
 * que l'ensemble de la communaut顥n bꯩficie.
 *
 * @copyright   http://www.tdmxoops.net
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		TDM (G.Mage); TEAM DEV MODULE
 *
 * ****************************************************************************
 */
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 55region.org

// Non du module
define('_MI_TDMDOWNLOADS_NAME','TDMDownloads');

// Description du module
define('_MI_TDMDOWNLOADS_DESC','Создание раздела, где пользователи могут загружать/добавлять/оценивать различные файлы.');

// Bloc
define('_MI_TDMDOWNLOADS_BNAME1','Новые');
define('_MI_TDMDOWNLOADS_BNAMEDSC1','Display Recent Downloads');
define('_MI_TDMDOWNLOADS_BNAME2','Популярные');
define('_MI_TDMDOWNLOADS_BNAMEDSC2','Display Top Downloads');
define('_MI_TDMDOWNLOADS_BNAME3','С Высоким Рейтингом');
define('_MI_TDMDOWNLOADS_BNAMEDSC3','Display Top Rated Downloads');
define('_MI_TDMDOWNLOADS_BNAME4','Random Downloads');
define('_MI_TDMDOWNLOADS_BNAMEDSC4','Display downloaded files randomly');

// Sous menu
define('_MI_TDMDOWNLOADS_SMNAME1','Предложить');
define('_MI_TDMDOWNLOADS_SMNAME2','Список Файлов');

// Menu administration
define('_MI_TDMDOWNLOADS_ADMENU1','Главная');
define('_MI_TDMDOWNLOADS_ADMENU2','Категории');
define('_MI_TDMDOWNLOADS_ADMENU3','Файлы');
define('_MI_TDMDOWNLOADS_ADMENU4','Поврежденные');
define('_MI_TDMDOWNLOADS_ADMENU5','Измененные Загрузки');
define('_MI_TDMDOWNLOADS_ADMENU6','Управление полями');
define('_MI_TDMDOWNLOADS_ADMENU7','Описание');
define('_MI_TDMDOWNLOADS_ADMENU8','Управление правами');
define('_MI_TDMDOWNLOADS_ADMENU9','Обновление');
define('_MI_TDMDOWNLOADS_ADMENU10','Импорт');

// Prꧩrences
define('_MI_TDMDOWNLOADS_POPULAR','Счетчик статуса "популярные":');
define('_MI_TDMDOWNLOADS_POPULARDSC','Количество скачиваний файла до получения статуса "популярный" файл.');
define('_MI_TDMDOWNLOADS_NEWDLS','Количество файлов на Домашней Странице');
define('_MI_TDMDOWNLOADS_NEWDLSDSC','Укажите количество файлов, отображаемых в списке на домашней странице. ');
define('_MI_TDMDOWNLOADS_PERPAGE','Количество файлов на странице:');
define('_MI_TDMDOWNLOADS_PERPAGEDSC','Количество файлов, отображаемых в списке на странице за один раз ');
define('_MI_TDMDOWNLOADS_SUBCATPARENT','Количество Под-категорий в Главной Категории');
define('_MI_TDMDOWNLOADS_SUBCATPARENTDSC','Устанавливает количество отображаемых под-категорий в списке Главной Категории');
define('_MI_TDMDOWNLOADS_BLDATE','Показывать <i>Новые</i> файлы на Домашней странице и в <i>Кратком обзоре</i> ?');
define('_MI_TDMDOWNLOADS_BLDATEDSC','Если во всех трех пунктах стоит <i>Нет</i>, то врезка <i>Краткий обзор файлов</i> не будет отображаться вообще');
define('_MI_TDMDOWNLOADS_BLPOP','Показывать <i>Популярные</i> файлы на Домашней странице и в <i>Кратком обзоре</i> ?');
define('_MI_TDMDOWNLOADS_BLPOPDSC','Если во всех трех пунктах стоит <i>Нет</i>, то врезка <i>Краткий обзор файлов</i> не будет отображаться вообще');
define('_MI_TDMDOWNLOADS_BLRATING','Показывать <i>С Высоким Рейтингом</i> файлы на Домашней странице и в <i>Кратком обзоре</i> ?');
define('_MI_TDMDOWNLOADS_BLRATINGDSC','Если во всех трех пунктах стоит <i>Нет</i>, то врезка <i>Краткий обзор файлов</i> не будет отображаться вообще');
define('_MI_TDMDOWNLOADS_NBBL','Количество файлов отображаемых в <i>Кратком обзоре</i>?');
define('_MI_TDMDOWNLOADS_NBBLDSC','Определяет количество файлов отображаемых во врезке <i>Краткий обзор файлов</i>');
define('_MI_TDMDOWNLOADS_LONGBL','Длина заголовков во врезке <i>Краткий обзор файлов</i> ');
define('_MI_TDMDOWNLOADS_LONGBLDSC','Определяет длину названия файла (в символах), если название длиньше указаного числа, то будет обрезано до указанного значения ');
define('_MI_TDMDOWNLOADS_ANONUPLOADS','Разрешить анонимным пользователям загружать файлы?');
define('_MI_TDMDOWNLOADS_USETELLAFRIEND','Использовать модуль Tellafriend для отправки ссылки друзьям?');
define('_MI_TDMDOWNLOADS_USETELLAFRIENDDSC','Для использования этой функции у Вас должен быть установлен модуль Tellafriend');
define('_MI_TDMDOWNLOADS_AUTOAPPROVE','Автоматически одобрять новые файлы без участия администратора?');
define('_MI_TDMDOWNLOADS_AUTOAPPROVEDSC','');
define('_MI_TDMDOWNLOADS_USESHOTS','Отображать скриншот?');
define('_MI_TDMDOWNLOADS_USESHOTSDSC','Выберите да, если хотите отображать скриншот для каждого файла');
define('_MI_TDMDOWNLOADS_SHOTWIDTH','Высота скриншота');
define('_MI_TDMDOWNLOADS_SHOTWIDTHDSC','Отображаемая высота скриншота');
define('_MI_TDMDOWNLOADS_CHECKHOST','Disallow direct download linking? (leeching) ?');
define('_MI_TDMDOWNLOADS_CHECKHOSTDSC','');
define('_MI_TDMDOWNLOADS_REFERERS','Эти сайты могут использовать прямые ссылки на Ваши файлы. В качестве разделителя используйте |');
define('_MI_TDMDOWNLOADS_REFERERSDSC','');
define('_MI_TDMDOWNLOADS_MIMETYPE','Разрешенные типы файлов: ');
define('_MI_TDMDOWNLOADS_MIMETYPE_DSC','Введите разрешенные к загрузке типы файлов через разделитель|');
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE','Максимально разрешенный размер загружаемого файла');
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZEDSC','');
define('_MI_TDMDOWNLOADS_FORM_OPTIONS','Редактор');
define('_MI_TDMDOWNLOADS_FORM_OPTIONSDSC','Выберите из списка визуальный редактор, с помощью которого будет редактироваться описание загружаемых файлов');
define('_MI_TDMDOWNLOADS_TOPORDER','По какому признаку отображать файлы на главной странице?');
define('_MI_TDMDOWNLOADS_TOPORDER1','Дата (DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER2','Дпта (ASC)');
define('_MI_TDMDOWNLOADS_TOPORDER3','скачиваний (DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER4','Скачиваний (ASC)');
define('_MI_TDMDOWNLOADS_TOPORDER5','Голоса(DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER6','Голоса (ASC)');
define('_MI_TDMDOWNLOADS_TOPORDER7','Название (DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER8','Название (ASC)');
define('_MI_TDMDOWNLOADS_TOPORDERDSC','');
define('_MI_TDMDOWNLOADS_SEARCHORDER','Как отображать элементы в списке файлов?');
define('_MI_TDMDOWNLOADS_SEARCHORDERDSC','');
define('_MI_TDMDOWNLOADS_PERPAGELISTE','Downloads displayed on the files list');
define('_MI_TDMDOWNLOADS_PERPAGELISTEDSC','');
define('_MI_TDMDOWNLOADS_AUTO_SUMMARY','Авто-резюме?');
define('_MI_TDMDOWNLOADS_AUTO_SUMMARYDSC','');
define('_MI_TDMDOWNLOADS_SHOW_UPDATED','Показывать картинку \'updated\' и \'new\' ?');
define('_MI_TDMDOWNLOADS_SHOW_UPDATEDDSC','Если файл обновлен или загружен новый, то рядом с названием будет показана соответствующая картинка');
//new 1.1
define('_MI_TDMDOWNLOADS_PLATEFORM','Платформы');
define('_MI_TDMDOWNLOADS_PLATEFORM_DSC','Список выбираемых платформ <br />В качестве разделителя используется символ | ВАЖНО: Не изменяйте однажды введенный список, добавляйте новые записи в конец списка!');
define('_MI_TDMDOWNLOADS_PERPAGEADMIN','Количество файлов на страницу в административной зоне');
define('_MI_TDMDOWNLOADS_PERPAGEADMINDSC','Устанавливает количество отображаемых файлов на стороне администратора');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAME','Переименовывать загруженные файлы?');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAMEDSC','Если установленно &#039;Нет&#039; и имя загружаемого файла совпадает с именем уже имеющегося файла на сервере, то он будет переписан.');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIX','Приставка для загруженных файлов');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIXDSC','Работает только в том случае, если опция  &#039;переименовывать загруженные файлы&#039; установлена в &#039;Да&#039;');
define('_MI_TDMDOWNLOADS_USETAG','Использовать модуль TAG для генерации тэгов?');
define('_MI_TDMDOWNLOADS_USETAGDSC','Для использования этой функции у Вас должен быть установлен модуль TAG от phppp');

// Notifications
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFY','Глобальные');
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFYDSC','Глобальные опции оповещения о загрузках.');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFY','Категория');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFYDSC','Опции оповещения, применимые к текущей категории файлов.');
define('_MI_TDMDOWNLOADS_FILE_NOTIFY','Файл');
define('_MI_TDMDOWNLOADS_FILE_NOTIFYDSC','Опции оповещения, применимые к текщему файлу.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY','Новая Категория');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP','Оповестить меня о создании новой категории файлов.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC','Прием оповещения, когда будет создана новая категория файлов.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение: Новая категория файлов');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY','Запрос на изменение файла');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP','Оповещать меня о любых запроса на изменение любых файлов.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC','Прием оповещения, когда обнаружен запрос на изменение любого файла.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповешение: Запрос на изменение файла');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY','Обнаружен поврежденный файл');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP','Оповестить меня при обнаружении поврежденного файла.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC','Прием оповещения, когда обнаружен поврежденный файл.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Обнаружен поврежденный файл');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY','Прислан файл');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP','Оповестить меня, когда прислан новый файл (ожидает одобрения).');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC','Прием оповещения, когда прислан новый файл (ожидает одобрения).');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Прислан новый файл');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFY','Новый Файл');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP','Оповестить меня, когда прислан любой новый файл.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC','Прием оповещения, когда прислан любой новый файл.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автооповещение : Новый файл');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY','Прислан файл');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP','Оповестить меня, когда прислан новый файл (ожидает одобрения) в данной категории.');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC','Прием оповещения, когда прислан новый файл (ожидает одобрения) в данной категории.');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Новый файл в категории');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFY','Новый Файл');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP','Оповестить меня о новом файле в данной категории.');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC','Прием оповещения, когда прислан новый файл в данной категории.');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE}  Новый файл в категории');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFY','Файл одобрен');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYCAP','Оповестить меня, когда этот файл будет одобрен.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYDSC','Прием оповещения, когда этот файл будет одобрен.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} авто-оповещение : Файл Одобрен');
?>