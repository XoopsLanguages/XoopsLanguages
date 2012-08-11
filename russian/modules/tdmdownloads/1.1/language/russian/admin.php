<?php
/**
 * ****************************************************************************
 *  - TDMDownloads By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - GNU Licence Copyright (c)  (www.xoops.org)
 *
 * La licence GNU GPL, garanti à l'utilisateur les droits suivants
 *
 * 1. La liberté d'exécuter le logiciel, pour n'importe quel usage,
 * 2. La liberté de l' étudier et de l'adapter à ses besoins,
 * 3. La liberté de redistribuer des copies,
 * 4. La liberté d'améliorer et de rendre publiques les modifications afin
 * que l'ensemble de la communauté en bénéficie.
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

// index.php
define('_AM_TDMDOWNLOADS_INDEX_BROKEN','имеются отчеты о<b><span style=\'color : Red\'> %s </span></b> поврежденных файлах');
define('_AM_TDMDOWNLOADS_INDEX_DOWNLOADS','в нашей базе данных <b><span style=\'color : Red\'> %s </span></b> файлов');
define('_AM_TDMDOWNLOADS_INDEX_DOWNLOADSWAITING','получено <b><span style=\'color : Red\'> %s </span></b> файлов ожидающих одобрения');
define('_MI_TDMDOWNLOADS_INDEX_ERREURPFOLDER','ERROR:TDMDownloads directory in %s /uploads/ cannot be created, you have to create it manualy <br><br>just copy the folder \'TDMDownloads\' (you van find it in \'extra\' folder inside the module) in the \'uploads\' directory mentioned above');
define('_MI_TDMDOWNLOADS_INDEX_ERREURPHP','ОШИБКА: это меню требует PHP 5.0 или выше');
define('_AM_TDMDOWNLOADS_INDEX_MODIFIED','имеется <b><span style=\'color : Red\'> %s </span></b> запросов на изменение данных о загрузках');
//version  1.1
define('_AM_TDMDOWNLOADS_INDEX_UPDATE_INFO','Последняя версия TDMDownloads');
define('_AM_TDMDOWNLOADS_INDEX_VERSION_OK','У Вас последняя версия TDMDownloads %s');
define('_AM_TDMDOWNLOADS_INDEX_CHANGELOG','<b>Изменения</b>');
define("_AM_TDMDOWNLOADS_INDEX_VERSION_NOT_OK","Есть новая версия TDMDownloads %s, вы можете скачать её <a href='http://www.tdmxoops.net/modules/TDMDownloads' target='_blank'>here</a>");
define("_AM_TDMDOWNLOADS_INDEX_VERSION_ALLOWURLFOPEN","Чтобы определить наличие новой версии TDMDownloads, значение &#039;allow_url_fopen&#039; должно быть установленно в &#039;on&#039;");
define('_AM_TDMDOWNLOADS_INDEX_VERSION_ALLOWURLFOPEN','To determine if a new version of TDMDownloads exists, you must have &#039;allow_url_fopen&#039; to &#039;on&#039;');
define('_AM_TDMDOWNLOADS_INDEX_VERSION_FICHIER_KO','The file version management module of TDM is currently unavailable');

//category.php
define('_AM_TDMDOWNLOADS_CAT_NEW','Новая Категория');
define('_AM_TDMDOWNLOADS_CAT_LIST','Список Категорий');
define('_AM_TDMDOWNLOADS_DELDOWNLOADS','со следующими загрузками:');
define('_AM_TDMDOWNLOADS_DELSOUSCAT','Следующие категории будут полностью удалены:');
define('_AM_TDMDOWNLOADS_DOWNLOADSINCAT','файл(ов) в этой категории');
define('_AM_TDMDOWNLOADS_THEREIS','Всего');

//downloads.php
define('_AM_TDMDOWNLOADS_DOWNLOADS_LISTE','Список файлов');
define('_AM_TDMDOWNLOADS_DOWNLOADS_NEW','Добавить Новый файл');
define('_AM_TDMDOWNLOADS_DOWNLOADS_SEARCH','Поиск');
define('_AM_TDMDOWNLOADS_DOWNLOADS_VOTESANONYME','Анонимные голосования (всего голосов: %s)');
define('_AM_TDMDOWNLOADS_DOWNLOADS_VOTESUSER','Голосования пользователей (всего голосов: %s)');
define('_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_USER','Пользователи');
define('_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_IP','IP адрес');
define('_AM_TDMDOWNLOADS_DOWNLOADS_WAIT','Ожидают одобрения');

//broken.php
define('_AM_TDMDOWNLOADS_BROKEN_SENDER','Отчет Автора');
define('_AM_TDMDOWNLOADS_BROKEN_SURDEL','Вы уверены, что хотите удалить этот отчет?');

//modified.php
define('_AM_TDMDOWNLOADS_MODIFIED_MOD','Отправить;');
define('_AM_TDMDOWNLOADS_MODIFIED_ORIGINAL','Оригинал');
define('_AM_TDMDOWNLOADS_MODIFIED_SURDEL','Вы уверены, что хотите удалить этот запрос на изменение?');

//field.php
define('_AM_TDMDOWNLOADS_DELDATA','with the following data:');
define('_AM_TDMDOWNLOADS_FIELD_LIST','Список полей');
define('_AM_TDMDOWNLOADS_FIELD_NEW','Добавить новые поля');

//about.php
define('_AM_TDMDOWNLOADS_ABOUT_AUTHOR','Автор');
define('_AM_TDMDOWNLOADS_ABOUT_CHANGELOG','Список изменений');
define('_AM_TDMDOWNLOADS_ABOUT_CREDITS','Создатели');
define('_AM_TDMDOWNLOADS_ABOUT_LICENSE','Лицензия');
define('_AM_TDMDOWNLOADS_ABOUT_MODULEINFOS','Информация Модуля');
define('_AM_TDMDOWNLOADS_ABOUT_MODULEWEBSITE','Сайт поддержки');
define('_AM_TDMDOWNLOADS_ABOUT_RELEASEDATE','Дата запуска');
define('_AM_TDMDOWNLOADS_ABOUT_STATUS','Статус');

//permissions.php
define('_AM_TDMDOWNLOADS_PERMISSIONS_4','Submit a download');
define('_AM_TDMDOWNLOADS_PERMISSIONS_8','Submit a modification');
define('_AM_TDMDOWNLOADS_PERMISSIONS_16','note a download');
define('_AM_TDMDOWNLOADS_PERMISSIONS_32','Загружать файлы');
define('_AM_TDMDOWNLOADS_PERM_AUTRES','Другие разрешения');
define('_AM_TDMDOWNLOADS_PERM_AUTRES_DSC','Выберите группы пользователей, которые могут:');
define('_AM_TDMDOWNLOADS_PERM_SUBMIT','Разрешение на отправку');
define('_AM_TDMDOWNLOADS_PERM_SUBMIT_DSC','Выберите группы пользователей, которые могут отправлять файлы в выбранные категории');
define('_AM_TDMDOWNLOADS_PERM_VIEW','Разрешение на просмотр');
define('_AM_TDMDOWNLOADS_PERM_VIEW_DSC','Выберите группы пользователей, которые могут видеть файлы в указанных категориях');

// Import.php
define('_AM_TDMDOWNLOADS_IMPORT1','Импорт');
define('_AM_TDMDOWNLOADS_IMPORT_CAT_IMP','Категории: %s импортированны');
define('_AM_TDMDOWNLOADS_IMPORT_CONF_MYDOWNLOADS','Are you sure you want to import data from Mydownloads module to TDMDownloads');
define('_AM_TDMDOWNLOADS_IMPORT_CONF_WFDOWNLOADS','Are you sure you want to import data from WF-Downloads modules to TDMDownloads');
define('_AM_TDMDOWNLOADS_IMPORT_DONT_DOWNLOADS','нет файлов для импорта');
define('_AM_TDMDOWNLOADS_IMPORT_DONT_TOPIC','нет файлов для импорта');
define('_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS','файлов импортировано');
define('_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS_IMP','файлы: %s импортированы;');
define('_AM_TDMDOWNLOADS_IMPORT_ERREUR','Select Upload Directory (the path)');
define('_AM_TDMDOWNLOADS_IMPORT_ERROR_DATA','Во время импорта данных произшла ошибка');
define('_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS','Импорт из Mydownloads');
define('_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_PATH','Select Upload Directory (the path) for screen shots of Mydownloads');
define('_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_URL','Choose the corresponding URL  for screen shots of Mydownloads');
define('_AM_TDMDOWNLOADS_IMPORT_NB_CAT','Обнаружено %s категорий для импорта');
define('_AM_TDMDOWNLOADS_IMPORT_NB_DOWNLOADS','Обнаружено %s файлов для импорта');
define('_AM_TDMDOWNLOADS_IMPORT_NUMBER','Данные для импорта');
define('_AM_TDMDOWNLOADS_IMPORT_OK','Импортирование прошло успешно !!!');
define('_AM_TDMDOWNLOADS_IMPORT_VOTE_IMP','Голоса: %s импортированы');
define("_AM_TDMDOWNLOADS_IMPORT_WARNING","<span style=\'color:#FF0000; font-size:16px; font-weight:bold\'>ВНИМАНИЕ !</span><br><br> Импорт удалит ВСЕ данные в TDMDownloads. Настоятельно рекомендуется сделать резервную копию всех данных web-сайта.<br><br>TDM не несет ответственности за сохранность данных. It happens that screen shots cant be copied.");
define('_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS','Импорт из WF Downloads(только для V3.2 RC2)');
define('_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_CATIMG','Select Upload Directory (the path) for categories inages of WF-Downloads');
define('_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_SHOTS','Select Upload Directory (the path) for screen shots of WF-Downloads');

//Pour les options de filtre
define('_AM_TDMDOWNLOADS_ORDER','порядок:');
define('_AM_TDMDOWNLOADS_TRIPAR','сортировать по:');

//Formulaire et tableau
define('_AM_TDMDOWNLOADS_FORMADD','Добавить');
define('_AM_TDMDOWNLOADS_FORMACTION','Действие');
define('_AM_TDMDOWNLOADS_FORMAFFICHE','Показывать поле?');
define('_AM_TDMDOWNLOADS_FORMAFFICHESEARCH','Search field?');
define('_AM_TDMDOWNLOADS_FORMAPPROVE','Одобрить');
define('_AM_TDMDOWNLOADS_FORMCAT','Категория');
define('_AM_TDMDOWNLOADS_FORMCOMMENTS','Количество комментариев');
define('_AM_TDMDOWNLOADS_FORMDATE','Дата');
define('_AM_TDMDOWNLOADS_FORMDEL','Удалить');
define('_AM_TDMDOWNLOADS_FORMDISPLAY','Показать');
define('_AM_TDMDOWNLOADS_FORMEDIT','Редактировать');
define('_AM_TDMDOWNLOADS_FORMFILE','Файл');
define('_AM_TDMDOWNLOADS_FORMHITS','Скачано');
define('_AM_TDMDOWNLOADS_FORMHOMEPAGE','Домашняя Страница');
define('_AM_TDMDOWNLOADS_FORMLOCK','запретить скачивание');
define('_AM_TDMDOWNLOADS_FORMIGNORE','Игнорировать');
define('_AM_TDMDOWNLOADS_FORMINCAT','в категории');
define('_AM_TDMDOWNLOADS_FORMIMAGE','Изображение');
define('_AM_TDMDOWNLOADS_FORMIMG','скриншоты');
define('_AM_TDMDOWNLOADS_FORMPATH','Файлы существуют в: %s');
define('_AM_TDMDOWNLOADS_FORMPLATFORM','Платформа');
define('_AM_TDMDOWNLOADS_FORMPOSTER','Добавил');
define('_AM_TDMDOWNLOADS_FORMRATING','Примечание');
define('_AM_TDMDOWNLOADS_FORMSIZE','Размер файла (в байтах)');
define('_AM_TDMDOWNLOADS_FORMSUREDEL','Вы уверены, что хотите удалить : <b><span style=\'color : Red\'> %s </span></b>');
define('_AM_TDMDOWNLOADS_FORMTEXT','Описание');
define('_AM_TDMDOWNLOADS_FORMTEXTDOWNLOADS','Описание : <br><br>Используйте <b>[pagebreak]</b> для отделения краткого описания от полного. <br> Краткое описание позволяет уменьшить обЪём текста отображаемый на главной странице и в списке категорий.');
define('_AM_TDMDOWNLOADS_FORMTITLE','Название');
define('_AM_TDMDOWNLOADS_FORMUPLOAD','Загрузить');
define('_AM_TDMDOWNLOADS_FORMURL','URL загрузки');
define('_AM_TDMDOWNLOADS_FORMVALID','разрешить скачивание');
define('_AM_TDMDOWNLOADS_FORMVERSION','Версия');
define('_AM_TDMDOWNLOADS_FORMVOTE','Голосов');
define('_AM_TDMDOWNLOADS_FORMWEIGHT','Вес');
define('_AM_TDMDOWNLOADS_FORMWITHFILE','С файлом: ');
//version  1.1
define('_AM_TDMDOWNLOADS_FORMSUBMITTER','Отправить');
define('_AM_TDMDOWNLOADS_FORMDATEUPDATE','Обновить дату');

//Message d'erreur
define('_AM_TDMDOWNLOADS_ERREUR_CAT','Вы не можете использовать эту категорию');
define('_AM_TDMDOWNLOADS_ERREUR_NOBMODDOWNLOADS','нет ни какой информации об измененных загрузках');
define('_AM_TDMDOWNLOADS_ERREUR_NOBROKENDOWNLOADS','нет ни какой информации о поврежденных загрузках');
define('_AM_TDMDOWNLOADS_ERREUR_NOCAT','Вы должны выбрать категорию!');
define('_AM_TDMDOWNLOADS_ERREUR_NODESCRIPTION','Вы должны ввести описание файла');
define('_AM_TDMDOWNLOADS_ERREUR_NODOWNLOADS','файлы для загрузки не обнаружены');
define('_AM_TDMDOWNLOADS_ERREUR_SIZE','размер файла должен быть числом');
define('_AM_TDMDOWNLOADS_ERREUR_WEIGHT','весом должно быть число');

//Message de redirection
define('_AM_TDMDOWNLOADS_REDIRECT_DELOK','Успешно удалено');
define('_AM_TDMDOWNLOADS_REDIRECT_NOCAT','Вы не создали ни одной категориии!');
define('_AM_TDMDOWNLOADS_REDIRECT_NODELFIELD','Вы не можете удалить этот файл (Базовый Файл)');
define('_AM_TDMDOWNLOADS_REDIRECT_SAVE','Изменено');

//générique
define('_MD_TDMDOWNLOADS_NUMBYTES','%s байт');

//pour xoops france:
define('_MD_TDMDOWNLOADS_SUP','<br /><br />[block]: Blocks<br />[notes]: Notes<br />[evolutions]: Envisaged Developments<br />[infos]: Informations<br />[changelog]: Changelog<br />[backoffice]: Back Office<br />[frontoffice]: Front Office');
define('_MD_TDMDOWNLOADS_SUP_BACKOFFICE','Back Office:');
define('_MD_TDMDOWNLOADS_SUP_BLOCS','Блоки:');
define('_MD_TDMDOWNLOADS_SUP_CHANGELOG','Изменения:');
define('_MD_TDMDOWNLOADS_SUP_EVOLUTIONS','Envisaged Developments:');
define('_MD_TDMDOWNLOADS_SUP_FRONTOFFICE','Front Office:');
define('_MD_TDMDOWNLOADS_SUP_INFOS','Информация:');
define('_MD_TDMDOWNLOADS_SUP_NOTES','Примечания:');
?>