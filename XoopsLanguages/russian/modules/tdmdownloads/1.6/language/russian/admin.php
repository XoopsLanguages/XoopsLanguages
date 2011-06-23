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

// index.php
define("_AM_TDMDOWNLOADS_INDEX_BROKEN","Сообщения о поврежденных файлах - <b><span style='color : Red'> %s </span></b>");
define('_AM_TDMDOWNLOADS_INDEX_CATEGORIES',"Категорий - %s");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADS","в нашей базе файлов - <b><span style='color : Red'> %s </span></b>");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADSWAITING","Ожидающие одобрения - <b><span style='color : Red'> %s </span></b>");
define("_AM_TDMDOWNLOADS_INDEX_MODIFIED","Есть измененные файлы -  <b><span style='color : Red'> %s </span></b> ");

//category.php
define("_AM_TDMDOWNLOADS_CAT_NEW","Новая категория");
define("_AM_TDMDOWNLOADS_CAT_LIST","Список Категорий");
define("_AM_TDMDOWNLOADS_DELDOWNLOADS","со следующей загрузкой:");
define("_AM_TDMDOWNLOADS_DELSOUSCAT","Следующие категории будут полностью удалены:");

//downloads.php
define("_AM_TDMDOWNLOADS_DOWNLOADS_LISTE","Список файлов");
define("_AM_TDMDOWNLOADS_DOWNLOADS_NEW","Добавить файл");
define("_AM_TDMDOWNLOADS_DOWNLOADS_SEARCH","Поиск");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESANONYME","Голоса анонимных (всего : %s)");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESUSER","Голоса пользователей (всего : %s)");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_USER","Пользователи");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_IP","IP адрес");
define("_AM_TDMDOWNLOADS_DOWNLOADS_WAIT","Ожидающие проверки");

//broken.php
define("_AM_TDMDOWNLOADS_BROKEN_SENDER","Отправил");
define("_AM_TDMDOWNLOADS_BROKEN_SURDEL","Вы уверены, что хотите удалить это сообщение?");

//modified.php
define("_AM_TDMDOWNLOADS_MODIFIED_MOD","Добавил;");
define("_AM_TDMDOWNLOADS_MODIFIED_ORIGINAL","Оригинал");
define("_AM_TDMDOWNLOADS_MODIFIED_SURDEL","Вы уверены, что хотите удалить этот запрос изменения загрузки?");

//field.php
define("_AM_TDMDOWNLOADS_DELDATA","со следующими данными:");
define("_AM_TDMDOWNLOADS_FIELD_LIST","Список полей");
define("_AM_TDMDOWNLOADS_FIELD_NEW","Добавить поле");

//about.php
define("_AM_TDMDOWNLOADS_ABOUT_FILEPROTECTION","Защита файлов");
define("_AM_TDMDOWNLOADS_ABOUT_FILEPROTECTION_INFO1","Чтобы защитить Ваши файлы от нежелательных загрузок (по сравнению с разрешениями), Вы должны создать.htaccess 'файл в папке:");
define("_AM_TDMDOWNLOADS_ABOUT_FILEPROTECTION_INFO2","Со следующим контентом:");

//permissions.php
define("_AM_TDMDOWNLOADS_PERMISSIONS_4","Добавлять файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_8","Изменять файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_16","Оценивать файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_32","Загружать файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_64","Автоодобрение файлов приложений");
define("_AM_TDMDOWNLOADS_PERM_AUTRES", "Другие права");
define("_AM_TDMDOWNLOADS_PERM_AUTRES_DSC", "Выберите группы, которые могут:");
define("_AM_TDMDOWNLOADS_PERM_DOWNLOAD", "Разрешения загрузок");
define("_AM_TDMDOWNLOADS_PERM_DOWNLOAD_DSC", "Выберите группы, которые могут загружать в категории");
define("_AM_TDMDOWNLOADS_PERM_DOWNLOAD_DSC2", "Выберите группы, которые могут загружать файлы");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT", "Права на добавление");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT_DSC", "Выберите группы, которые могут добавлять файлы в категории");
define("_AM_TDMDOWNLOADS_PERM_VIEW", "Права на просмотр");
define("_AM_TDMDOWNLOADS_PERM_VIEW_DSC", "Выберите группы, которые могут просматривать файлы в категориях");

// Import.php
define("_AM_TDMDOWNLOADS_IMPORT1","Импорт");
define("_AM_TDMDOWNLOADS_IMPORT_CAT_IMP","Категории: '%s' импортированны");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_MYDOWNLOADS","Вы уверены, что хотите импортировать данные из модуля Mydownloads в модуль tdmdownloads");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_WFDOWNLOADS","Вы уверены, что хотите импортировать данные из модуля WF-Downloads в модуль tdmdownloads");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_DOWNLOADS","нет файлов для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_TOPIC","нет файлов для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS","Импорт файлов");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS_IMP","файлы: '%s' импортированны;");
define("_AM_TDMDOWNLOADS_IMPORT_ERREUR","Выберите папку загрузки (путь)");
define("_AM_TDMDOWNLOADS_IMPORT_ERROR_DATA","Ошибка импорта данных");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS","Импорт из Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_PATH","Выберите папку загрузки (путь) для скриншотов из Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_URL","Выберите соответствующий URL для скриншотов Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_NB_CAT","Есть %s категорий для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_NB_DOWNLOADS","Есть %s файлов для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_NUMBER","Данные для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_OK","Импорт успешно осуществлен !!!");
define("_AM_TDMDOWNLOADS_IMPORT_VOTE_IMP","Голоса: '%s' импортированны;");
define("_AM_TDMDOWNLOADS_IMPORT_WARNING","<span style='color:#FF0000; font-size:16px; font-weight:bold'>Внимание !</span><br><br> Импорт удалит все данные в tdmdownloads. Сохраните данные вашего сайта.<br><br>TDM не несет ответственности за потерю ваших данных. Иногда случается при копировании скриншотов.");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS","Импорт из WF Downloads(только для V3.2 RC2)");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_CATIMG","Выберите папку загрузки (путь) для изображений категорий  WF-Downloads");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_SHOTS","Выберите папку загрузки (путь) для скриншотов WF-Downloads");

//Pour les options de filtre
define("_AM_TDMDOWNLOADS_ORDER"," Порядок: ");
define("_AM_TDMDOWNLOADS_TRIPAR","Сортировать по: ");

//Formulaire et tableau
define("_AM_TDMDOWNLOADS_FORMADD","Добавить");
define("_AM_TDMDOWNLOADS_FORMACTION","Действие");
define("_AM_TDMDOWNLOADS_FORMAFFICHE","Показывать поле?");
define("_AM_TDMDOWNLOADS_FORMAFFICHESEARCH","Искать по полю?");
define("_AM_TDMDOWNLOADS_FORMAPPROVE","Одобрить");
define("_AM_TDMDOWNLOADS_FORMCAT","Категория");
define("_AM_TDMDOWNLOADS_FORMCOMMENTS","Число комментариев");
define("_AM_TDMDOWNLOADS_FORMDATE","Дата");
define("_AM_TDMDOWNLOADS_FORMDATEUPDATE","Обновить дату");
define("_AM_TDMDOWNLOADS_FORMDATEUPDATE_NO","Нет");
define("_AM_TDMDOWNLOADS_FORMDATEUPDATE_YES","Да -->");
define("_AM_TDMDOWNLOADS_FORMDEL","Удалить");
define("_AM_TDMDOWNLOADS_FORMDISPLAY","Отображение");
define("_AM_TDMDOWNLOADS_FORMEDIT","Редактирование");
define("_AM_TDMDOWNLOADS_FORMFILE","Файл");
define("_AM_TDMDOWNLOADS_FORMHITS","Хиты");
define("_AM_TDMDOWNLOADS_FORMHOMEPAGE","Домашняя страница");
define("_AM_TDMDOWNLOADS_FORMLOCK","запретить загрузку");
define("_AM_TDMDOWNLOADS_FORMIGNORE","Игнор");
define("_AM_TDMDOWNLOADS_FORMINCAT","в категории");
define("_AM_TDMDOWNLOADS_FORMIMAGE","Изображение");
define("_AM_TDMDOWNLOADS_FORMIMG","Лого");
define("_AM_TDMDOWNLOADS_FORMPAYPAL","Адрес Paypal для пожертвования");
define("_AM_TDMDOWNLOADS_FORMPATH","Файлы существуют в: %s");
define('_AM_TDMDOWNLOADS_FORMPERMDOWNLOAD',"Выберите группы, которые могут загрузить файл");
define("_AM_TDMDOWNLOADS_FORMPLATFORM","Версия XOOPS");
define("_AM_TDMDOWNLOADS_FORMPOSTER","Сообщения ");
define("_AM_TDMDOWNLOADS_FORMRATING","Оценка");
define("_AM_TDMDOWNLOADS_FORMSIZE","Размер файла");
define("_AM_TDMDOWNLOADS_FORMSTATUS","Состояние загрузки");
define("_AM_TDMDOWNLOADS_FORMSTATUS_OK","Одобрено");
define("_AM_TDMDOWNLOADS_FORMSUBMITTER","Сообщения");
define("_AM_TDMDOWNLOADS_FORMSUREDEL", "Вы уверены, что хотите удалить : <b><span style='color : Red'> %s </span></b>");
define("_AM_TDMDOWNLOADS_FORMTEXT","Описание");
define("_AM_TDMDOWNLOADS_FORMTEXTDOWNLOADS","Описание : <br><br>Используйте разделитель '<b>[pagebreak]</b>' для разделения анонса описания. <br> Анонс позволяет уменьшить размер текста на главной странице модуля в категориях.");
define("_AM_TDMDOWNLOADS_FORMTITLE","Заголовок");
define("_AM_TDMDOWNLOADS_FORMUPLOAD","Загрузить");
define("_AM_TDMDOWNLOADS_FORMURL","Загрузить URL");
define("_AM_TDMDOWNLOADS_FORMVALID","Активизировать загрузку");
define("_AM_TDMDOWNLOADS_FORMVERSION","Версия");
define("_AM_TDMDOWNLOADS_FORMVOTE","Голоса");
define("_AM_TDMDOWNLOADS_FORMWEIGHT","Вес");
define("_AM_TDMDOWNLOADS_FORMWITHFILE","С файлом: ");

//Message d'erreur
define("_AM_TDMDOWNLOADS_ERREUR_CAT","Вы не можете использовать эту категорию (looping on itself)");
define("_AM_TDMDOWNLOADS_ERREUR_NOBMODDOWNLOADS","Нет изменённых файлов");
define("_AM_TDMDOWNLOADS_ERREUR_NOBROKENDOWNLOADS","Нет повреждённых файлов");
define("_AM_TDMDOWNLOADS_ERREUR_NOCAT","Вы должны выбрать категорию!");
define("_AM_TDMDOWNLOADS_ERREUR_NODESCRIPTION","Вы должны написать описание");
define("_AM_TDMDOWNLOADS_ERREUR_NODOWNLOADS","Нет загруженных файлов");
define("_AM_TDMDOWNLOADS_ERREUR_SIZE","Размер файла должен быть числом");
define("_AM_TDMDOWNLOADS_ERREUR_WEIGHT","Вес должен быть числом");

//Message de redirection
define("_AM_TDMDOWNLOADS_REDIRECT_DELOK","Файл удален ");
define("_AM_TDMDOWNLOADS_REDIRECT_NOCAT","Вы должны создать категорию");
define("_AM_TDMDOWNLOADS_REDIRECT_NODELFIELD","Вы не можете удалить эту область (Основная Область)");
define("_AM_TDMDOWNLOADS_REDIRECT_SAVE","Файл сохранен");

define('_AM_TDMDOWNLOADS_NOPERMSSET', "Разрешение не может быть установлено: Нет созданной категории! Пожалуйста, создайте Категорию.");

//Bytes sizes
define('_AM_TDMDOWNLOADS_BYTES','байт');
define('_AM_TDMDOWNLOADS_KBYTES','кБ');
define('_AM_TDMDOWNLOADS_MBYTES','МБ');
define('_AM_TDMDOWNLOADS_GBYTES','ГБ');
define('_AM_TDMDOWNLOADS_TBYTES','ТБ');

?>