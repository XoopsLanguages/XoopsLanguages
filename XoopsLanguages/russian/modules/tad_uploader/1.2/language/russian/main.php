<?php

// $Id: main.php,v 1.2 2009/08/25 01:20:25 radio-hobby $
// _CHARSET : UTF-8
// _LANGCODE: ru
// Translator: 2009-03-12 MACTEP

//index.php
define("_MD_CAT_NO_ACCESS_POWER","Увас нет доступа в эту папку.");
define("_MD_CAT_FILE_DESC","Описание");
define("_MD_CAT_DEL_CONFIRM","Удалить эту папку? Эта операция удалит все файлы в этой папке!");
define("_MD_CAT_LIST_ALL_FILES","Отобразить все файлы");
define("_MD_CAT_NOW_PATH","Путь");
define("_MD_CAT_ROOT","Корень");
define("_MD_CAT_PRE_FOLDER","Назад");
define("_MD_CAT_SWITCH_LIST_MODE","Режим отображения");
define("_MD_CAT_DB_ERROR1","Не могу  получить данные из каталога.");
define("_MD_CAT_FILE","Файл");
define("_MD_CAT_DB_ERROR2","Не могу  получить данные catalog_file .");
define("_MD_CAT_PAGE_BAR1","(Всего %s) страниц %s ");

define("_MD_CAT_SELECTED_DEL","Удалить выбранный файл");
define("_MD_CAT_SELECTED_EDIT","Редактировать выбранный файл");
define("_MD_CAT_SELECTED_MOVETO","<br>Переместить выбранный файл в ");
define("_MD_CAT_MOVE","Переместить");
define("_MD_CAT_FILE_NAME","Имя файла");
define("_MD_CAT_FILE_DATE","Дата");
define("_MD_CAT_FILE_TYPE","Тип");
define("_MD_CAT_FILE_SIZE","Размер ");
define("_MD_CAT_FILE_COUNTER","Счетчик");
define("_MD_CAT_ADMIN","Панель управления");
define("_MD_CAT_CREATE_FOLDER","Создать новую папку");
define("_MD_CAT_NEW_FOLDER","new_folder");
define("_MD_CAT_SUBMIT","Добавить");
define("_MD_CAT_FOLDER_MOVE","Переместить папку в ");
define("_MD_CAT_FOLDER_RENAME","Переименовать папку:");
define("_MD_CAT_FOLDER_DEL","Удалить папку");
define("_MD_CAT_OPEN_UPLOADER","Перейти к загрузке");
define("_MD_CAT_DESC_EMPTY","Нет описания");
define("_MD_CAT_SAVE","Сохранить");
define("_MD_CAT_ROOT_DESC","Не переименовывайте и не перемещайте файлы и папки в корень; Только администратор может создавать папки и загружать файлы в корень.");
define("_MD_CAT_EMPTY_DESC","Нет описания.");
define("_MD_CAT_CAN_ACCESS_GROUPS","■ Видимый для групп:");
define("_MD_CAT_CAN_UPLOAD_GROUPS","■ Могут загружать:");
define("_MD_CAT_NO_SHARE_FOLDER","■ Личная папка");
define("_MD_CAT_SUBFOLDER_COUNT","■ Подпапки:");
define("_MD_CAT_FILES_COUNT","■ Файл:");
define("_MD_CAT_CREATER","■ Автор:");
define("_MD_CAT_DB_ERROR3","Не могу обновить данные каталога");
define("_MD_CAT_CANT_GET_FILE","Не могу  загрузить %s файл в %s!");
define("_MD_CAT_CANT_ADD_FILE","Не могу  добавить новые данные файла (%s)!");
define("_MD_CAT_NO_FILE","Файл не существует!");
define("_MD_CAT_NO_FILE_DATA","Нет данных файла!");
define("_MD_CAT_NO_SELECTED_FILE","Нет выбранного файла");
define("_MD_CAT_MODIFY_INTERFACE","Редактировать файл в папке - %s");
define("_MD_CAT_DB_ERROR4","Не могу заменить данные каталога");
define("_MD_CAT_SET_FOLDER_POWER","Разрешение папки");
define("_MD_CAT_CAN_ACCESS_GROUPS2","<b>Видимые </b> группам");
define("_MD_CAT_CAN_UPLOADS_GROUPS","<b>Загружаемые</b> группой");
define("_MD_CAT_IS_SHARE","Видимость (НЕТ -  означает личную папку. Только автор будет видеть и загружать в эту папку).");
define("_MD_CAT_FILE_SORT","▲");
define("_MD_CAT_FILE_SORT_DESC","▼");

//function
define("_MD_CAT_CANT_FIND","Не найдено");
define("_MD_CAT_MENU","Меню");
define("_MD_CAT_PREV","Назад");
define("_MD_CAT_NEXT","Далее");
define("_MD_CAT_FIRST","В начало");
define("_MD_CAT_LAST","В конец");
define("_MD_CAT_PREV_PAGE","Назад %s страница");
define("_MD_CAT_NEXT_PAGE","Вперед %s страница");
define("_MD_CAT_NO_FOLDER_NAME","Нет имени папки");
define("_MD_CAT_CANT_CREATE_FOLDER","Не могу создать новую папку");
define("_MD_CAT_CANT_FIND_FILE","Файл не найден");
define("_MD_CAT_NO_FILE_NAME","Нет имени файла!");
define("_MD_CAT_DB_ERROR5","Не могу заменить данные catalog_file");
define("_MD_CAT_DB_ERROR6","Не могу to обновить данные catalog_file");
define("_MD_CAT_DB_ERROR7","Не могу удалить данные catalog_file");
define("_MD_CAT_UPLOAD_FROM_HD","Загрузить с компьютера: ");
define("_MD_CAT_GET_FROM_URL","Введите URL файла: ");
define("_MD_CAT_GET_FROM_URL_DESC","(Ссылка для загрузки файла на хост.)");
define("_MD_CAT_PHP_VERSION","■ Версия PHP:");
define("_MD_CAT_ALLOW_URL_FOPEN","■ настройки allow_url_fopen: ");
define("_MD_CAT_MAX_FILESIZE","■ Макс. размер файла: ");
define("_MD_CAT_POST_MAX_SIZE","■ Макс. размер сообщения: ");
define("_MD_CAT_MAX_EXECUTION_TIME","■ Макс. время выполнения:");
define("_MD_CAT_PRE_SET","(Оригинал: %s)");
define("_MD_CAT_SECOND"," Секунд");
define("_MD_CAT_README1","■ Выберите одно из 'Загрузить с компьютера:' или 'Введите URL файла:'.");
define("_MD_CAT_NO_EDIT_POWER","У вас НЕТ разрешения редактировать или загружать");
define("_MD_CAT_UPLOAD_INTERFACE","Загрузить в 『%s』");
define("_MD_CAT_NO_POWER","You have NO permission for this operation.");
define("_MD_CAT_NO_LOGIN","You have to login first for this operation.");
define("_MD_CAT_CANT_DELETE1","Unable to delete it because of %s subfolder(s) and %s file(s) left.");
define("_MD_CAT_DB_ERROR8","Failed to delete catalog data");
?>
