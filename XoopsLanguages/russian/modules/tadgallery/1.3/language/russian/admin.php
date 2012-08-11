<?php
//  ------------------------------------------------------------------------ //
// This module was written by Tad
// Release date: 2008-03-23
// $Id: admin.php,v 1.3 2008/05/05 03:22:37 tad Exp $
// ------------------------------------------------------------------------- //
// _LANGCODE: ru 
// _CHARSET : UTF-8 
// Translator: Deka87


define("_BACK_MODULES_PAGE","Вернуться на главную страницу модуля");
//Objects
define("_BP_BACK_PAGE","Предыдущая");
define("_BP_NEXT_PAGE","Следующая");
define("_BP_FIRST_PAGE","Первая");
define("_BP_LAST_PAGE","Последняя");
define("_BP_GO_BACK_PAGE","Вернуться на %s страниц");
define("_BP_GO_NEXT_PAGE","Вперед на %s страниц");
define("_BP_TOOLBAR","Всего страниц: %s ,вы на странице: %s");
define("_BP_DEL_CHK","Вы уверены, что хотите удалить эти данные?");
define("_BP_FUNCTION","Функция");
define("_BP_EDIT","Редактировать");
define("_BP_DEL","Удалить");
define("_BP_ADD","Добавить новые данные");

define("_MA_INPUT_CATE_FORM","Управление фотоальбомом");
define("_MA_SAVE","Сохранить");

define("_MI_TADGAL_ADMENU1","Фотографии");
define("_MI_TADGAL_ADMENU2","Альбом");
define("_MI_TADGAL_ADMENU3","Лучшие фотографии");
define("_MI_TADGAL_ADMENU4","Обновление");
define("_MI_TADGAL_ADMENU5","Генерация Media RSS");
define("_MI_TADGAL_ADMENU6","Групповая загрузка");

//cate.php
define("_MA_TADGAL_SN","Серийный номер");
define("_MA_TADGAL_CSN","Фотоальбом");
define("_MA_TADGAL_CTITLE","Название альбома");
define("_MA_TADGAL_DESCRIPTION","Описание фотографии:");
define("_MA_TADGAL_FILENAME","Название файла");
define("_MA_TADGAL_SIZE","размер");
define("_MA_TADGAL_TYPE","Тип");
define("_MA_TADGAL_UID","Провайдер");
define("_MA_TADGAL_POST_DATE","Дата размещения");
define("_MA_TADGAL_COUNTER","Просмотров");
define("_MA_TADGAL_PASSWD","Пароль к альбому");
define("_MA_TADGAL_PASSWD_DESC","(Необязательно)");
define("_MA_TADGAL_CATE_ADVANCE_SETUP","Показать дополнительные настройки");
define("_MA_TADGAL_CATE_HIDE_ADVANCE_SETUP","Скрыть дополнительные");
define("_MA_TADGAL_CATE_SHL_SETUP","Показать настройки антилича");
define("_MA_TADGAL_CATE_HIDE_SHL_SETUP","Скрыть настройки антилича");
define("_MA_TADGAL_CATE_POWER_SETUP","Настройки доступа");
define("_MA_TADGAL_CATE_SHOW_MODE","Режим отображения");
define("_MA_TADGAL_CATE_SHOW_MODE_1","режим эскизов(по-умолчанию)");
define("_MA_TADGAL_CATE_SHOW_MODE_2","Режим 3D галереи");
define("_MA_TADGAL_CATE_SHOW_MODE_3","Режим слайд-шоу");
define("_MA_TADGAL_COVER","Обложка");
define("_MD_TADGAL_COVER","Выбрать обложку");


define("_MA_TADGAL_TITLE","Заголовок");
define("_MA_TADGAL_CREATOR","Провайдер");
define("_MA_TADGAL_LOCATION","Расположение фотографии");
define("_MA_TADGAL_IMAGE","Расположение эскизов");
define("_MA_TADGAL_INFO","Скачать в");
define("_MA_TADGAL_POST_DATE","Дата размещения");
define("_MA_TADGAL_LSN","Серийный номер");
define("_MA_TADGAL_SN","Серийный номер");
define("_MA_TADGAL_CSN","Категория");
define("_MA_TADGAL_OF_LSN","Элемент");
define("_MA_TADGAL_UID","Провайдер");
define("_MA_TADGAL_COUNTER","Просмотров");
define("_MA_TADGAL_OF_CSN","Категория");
define("_MA_TADGAL_ENABLE_GROUP","\"Группы, которые могут <font color=blue>ПРОСМАТРИВАТЬ</font>\"");
define("_MA_TADGAL_ENABLE_UPLOAD_GROUP","\"Группы, которые могут<font color=red>ЗАГРУЖАТЬ</font>\"");
define("_MA_TADGAL_SORT","Сортировать");
define("_MA_TADGAL_ALL_OK","Все группы");
define("_MA_TADGAL_LIST_CATE","Список категорий");
define("_MA_TADGAL_CANT_OPEN","Невозможно создать \"%s\" ");
define("_MA_TADGAL_CANT_WRITE","Невозможно записать \"%s\" ");
define("_MA_TADGAL_SHOW_DATE","(Дата размещения: %s)");
define("_MA_TADGAL_CATE_SELECT","Неклассифицированные");
define("_MA_TADGAL_XML_OK","\"%s\" плэйлист завершен!");
define("_MA_TADGAL_NO_DIRNAME","Отсутствует название каталога");
define("_MA_TADGAL_MKDIR_ERROR","Невозможно создать каталог \"%s\" . Пожалуйста, создайте каталог вручную и измените атрибуты на 'Читаемый для всех' (777)");
define("_MA_TADGAL_LIST_ALL","Показать все фотографии");

define("_MA_MKDIR_NO_DIRNAME","Название папки не было задано!");
define("_MA_MKDIR_ERROR"," Не удалось создать папку %s!");

define("_MA_TADGAL_SHOW_MODE","Граница эскизов");
define("_MA_TADGAL_SHOW_MODE_1","Без границы");
define("_MA_TADGAL_SHOW_MODE_2","Граница прямоугольника с отбрасываемой тенью");
define("_MA_TADGAL_SHOW_MODE_3","Граница с закругленными углами");
define("_MA_TADGAL_SHOW_MODE_4","Рамка изображения с тенью");
define("_MA_TADGAL_SHOW_MODE_5","Граница затухания цвета");
define("_MA_TADGAL_SHOW_MODE_6","Скользящая рамка");  


//update
define("_MA_TADGAL_AUTOUPDATE","Обновление модуля");
define("_MA_TADGAL_AUTOUPDATE_VER","Версия");
define("_MA_TADGAL_AUTOUPDATE_DESC","Примечания к выпуску");
define("_MA_TADGAL_AUTOUPDATE_STATUS","Статус обновления");
define("_MA_TADGAL_AUTOUPDATE_GO","Обновить сейчас");
define("_MA_GAL_AUTOUPDATE1","Add display mode column in category list");
define("_MA_GAL_AUTOUPDATE2","Move thumbnails to new directory");
define("_MA_GAL_AUTOUPDATE3","Add album (category) default display mode setting column: show_mode");
define("_MA_GAL_AUTOUPDATE4","Add album (category) cover image column: cover");
define("_MA_GAL_AUTOUPDATE5","Add anti-hotlink, anti-download setting column: no_hotlink");
define("_MA_GAL_AUTOUPDATE6","Add category creator record column: uid");  

//batch_tool
define("_MA_TADGAL_THE_ACT_IS","Действие над выделенными фотографиями:");
define("_MA_TADGAL_ADD_GOOD","Добавить к ЛУЧШИМ ФОТОГРАФИЯМ");
define("_MA_TADGAL_DEL_GOOD","Удалить из ЛУЧШИХ ФОТОГРАФИЙ");
define("_MA_TADGAL_MOVE_TO","Переместить в");
define("_MA_TADGAL_GO","Вперед");
define("_MA_TADGAL_TAG","Добавить новый тэг");
define("_MA_TADGAL_TAG_TXT","(Пожалуйста, используйте запятую \",\" для разделения элементов)"); 



define("_MA_TADGAL_CANT_OPEN","Невозможно создать \"%s\" ");
define("_MA_TADGAL_CANT_WRITE","Невозможно записать \"%s\"");

define("_MA_TADGAL_SELECT_ALL","Выбрать все");
?>
