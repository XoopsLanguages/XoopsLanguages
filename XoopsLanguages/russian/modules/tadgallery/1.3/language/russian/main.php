<?php
//  ------------------------------------------------------------------------ //
// This module was written by Tad
// Release date: 2008-03-23
// $Id: main.php,v 1.4 2008/05/05 03:22:42 tad Exp $
// ------------------------------------------------------------------------- //
// *************************************** 
// _LANGCODE: ru 
// _CHARSET : UTF-8 
// Translator: Deka87

define("_TO_INDEX_PAGE","Фотоальбом");
define("_MD_TADGAL_XP_UPLOAD","XP мастер загрузок");
define("_MD_TADGAL_UPLOAD_PAGE","Загрузить фотографию");
define("_MD_TADGAL_PATCH_UPLOAD_PAGE","Импорт групп");
define("_TO_ADMIN_PAGE","Админ");
//Objects
define("_MD_HOMEPAGE","Вернуться на главную");
define("_BP_BACK_PAGE","Предыдущая");
define("_BP_NEXT_PAGE","Следующая");
define("_BP_FIRST_PAGE","Первая");
define("_BP_LAST_PAGE","Последняя");
define("_BP_GO_BACK_PAGE","Вернуться на %s страниц");
define("_BP_GO_NEXT_PAGE","Вперед на %s страниц");
define("_BP_TOOLBAR","Всего страниц: %s . Вы на странице: %s ");
define("_BP_DEL_CHK","Вы уверены, что хотите удалить эти данные?");
define("_BP_FUNCTION","Функция");
define("_BP_EDIT","Редактировать");
define("_BP_DEL","Удалить");
define("_BP_ADD","Добавить новые данные");

//uploads.php
define("_MA_INPUT_FORM","Загрузить фотографии");
define("_MA_TADGAL_CATE_SELECT","Неклассифицированные");
define("_MA_TADGAL_SN","Серийные номер");
define("_MA_TADGAL_PHOTO","Выберите фотографии:");
define("_MA_TADGAL_CSN","Категория:");
define("_MA_TADGAL_NEW_CSN","Создать подкатегорию в оставшейся категории:");
define("_MA_TADGAL_TITLE","Заголовок фотографии:");
define("_MA_TADGAL_DESCRIPTION","Описание фотографии:");
define("_MA_SAVE","Загрузить");
define("_TADGAL_IMPORT_UPLOADS_ERROR","Ошибка загрузки \"%s\"!");
define("_TADGAL_IMPORT_UPLOADS_OK","Файл \"%s\" загружен успешно!");


//index.php
define("_MA_TADGAL_FILENAME","Название файла");
define("_MA_TADGAL_SIZE","размер");
define("_MA_TADGAL_TYPE","Тип");
define("_MA_TADGAL_UID","Провайдер");
define("_MA_TADGAL_POST_DATE","Дата размещения");
define("_MA_TADGAL_COUNTER","Счетчик");
define("_TADGAL_NO_POWER_TITLE","Просмотр запрещен!");
define("_TADGAL_NO_POWER_CONTENT","\"%s\" необходимы права на просмотр!<br />Пожалуйста, выберите другой альбом: %s");
define("_TADGAL_NO_PASSWD_CONTENT","Для просмотра альбома \"%s\" пожалуйста, введите верный пароль!");
define("_MA_TADGAL_3D_MODE","3D вид");
define("_MA_TADGAL_SLIDE_SHOW_MODE","Слайд-шоу");
define("_MA_TADGAL_SHOW_ONE_MODE","Все фотографии");
define("_MD_TADGAL_BACK_CSN","Вернуься в категорию \"%s\"");
define("_MD_TADGAL_ALL_AUTHOR","Все");


//Batch import
define("_TADGAL_IMPORT_FILE","Загрузить файл");
define("_TADGAL_IMPORT_DIR","Папка для загрузки");
define("_TADGAL_IMPORT_DIMENSION","Ширина х высота");
define("_TADGAL_IMPORT_SIZE","Размер файла");
define("_TADGAL_PATCH_IMPORT_FORM","Загрузить несколько фотографий");
define("_TADGAL_UP_IMPORT","Импорт");
define("_TADGAL_IMPORT_STATUS","Тип или статус");
define("_TADGAL_IMPORT_EXIST","Уже существует");
define("_TADGAL_IMPORT_IMPORT_ERROR","Ошибка импортирования файла \"%s\"!");
define("_TADGAL_IMPORT_ONLY_ROOT","Функция групповой загрузки доступна только для администраторов!");
define("_TADGAL_NO_UPLOAD_POWER","У вас нет прав для загрузки фотографий!");

//view.php
define("_TADGAL_FILE_NOT_EXIST","файл \"%s\" не существует");
define("_TADGAL_FILE_COPY_S","Скопировать URL маленького эскиза");
define("_TADGAL_FILE_COPY_M","Скопировать URL среднего эскиза");
define("_TADGAL_FILE_COPY_B","Скопировать URL оригинальной фотографии");
define("_TADGAL_DEL_PIC","Удалить эту фотографию");
define("_TADGAL_EDIT_PIC","Редактировать описание фотографии");
define("_TADGAL_GOOD_PIC","Добавить эту фотографию к ЛУЧШИМ ФОТОГРАФИЯМ");
define("_TADGAL_REMOVE_GOOD_PIC","Удалить эту фотографию из ЛУЧШИХ ФОТОГРАФИЙ");
define("_MA_TADGAL_AS_COVER","Установить эту фотографию как обложку альбома");
define("_MD_TADGAL_TAG","Добавить новый тэг");
define("_MD_TADGAL_TAG_TXT","(Пожалуйста, используйте запятую \",\" для разделения мульти-тэгов)");
define("_MA_SAVE_EDIT","Сохранить");

//exif
define("_MA_TADGAL_CLICK_BACK","Кликните, чтобы вернуться на предыдущую страницу");
define("_MD_TADGAL_EXIF","%s  EXIF информация");
define("_MD_TADGAL_MAKE","Создать");
define("_MD_TADGAL_MODEL","Модель");
define("_MD_TADGAL_ORIENTATION","Ориентация");
define("_MD_TADGAL_XRESOLUTION","X разрешение");
define("_MD_TADGAL_YRESOLUTION","Y разрешение");
define("_MD_TADGAL_RESOLUTIONUNIT","Единица разрешения");
define("_MD_TADGAL_YCBCRPOSITIONING","YCbCr позиционирование");
define("_MD_TADGAL_EXIFOFFSET","Exif смещение");
define("_MD_TADGAL_EXPOSURETIME","Exposure Время");
define("_MD_TADGAL_FNUMBER","F число");
define("_MD_TADGAL_EXPOSUREPROGRAM","Программа экспозиции");
define("_MD_TADGAL_ISOSPEEDRATINGS","ISO величина скорости");
define("_MD_TADGAL_EXIFVERSION","Exif версия");
define("_MD_TADGAL_DATETIMEORIGINAL","Аналоговые время и дата");
define("_MD_TADGAL_DATETIMEDIGITIZED","Цифровые время и дата");
define("_MD_TADGAL_COMPONENTSCONFIGURATION","Конфигурация компонентов");
define("_MD_TADGAL_SHUTTERSPEEDVALUE","Значение задержки");
define("_MD_TADGAL_APERTUREVALUE","Значение диафрагмы");
define("_MD_TADGAL_EXPOSUREBIASVALUE","Значение смещения экспозиции");
define("_MD_TADGAL_MAXAPERTUREVALUE","Максимальное значение диафрагмы");
define("_MD_TADGAL_METERINGMODE","Режим измерения");
define("_MD_TADGAL_FLASH","Flash");
define("_MD_TADGAL_FOCALLENGTH","Фокусное расстояние");
define("_MD_TADGAL_FLASHPIXVERSION","Flashpix версия");
define("_MD_TADGAL_COLORSPACE","цветное пространство");
define("_MD_TADGAL_EXIFIMAGEWIDTH","Exif ширина изображения");
define("_MD_TADGAL_EXIFIMAGEHEIGHT","Exif высота изображения");
define("_MD_TADGAL_EXIFINTEROPERABILITYOFFSET","Exif смещение интероперабельности");
define("_MD_TADGAL_EXPOSUREINDEX","Индекс экспозиции");
define("_MD_TADGAL_SENSINGMETHOD","Метод считывания");
define("_MD_TADGAL_FILESOURCE","Исходный файл");
define("_MD_TADGAL_SCENETYPE","Тип фона");
define("_MD_TADGAL_EXPOSUREMODE","Режим экспозиции");
define("_MD_TADGAL_WHITEBALANCE","Баланс белого");
define("_MD_TADGAL_DIGITALZOOMRATIO","Коэффициент цифрового зумирования");
define("_MD_TADGAL_SCENECAPTUREMODE","Режим захвата");
define("_MD_TADGAL_GAINCONTROL","Управление коэффициентом усиления");
define("_MD_TADGAL_CONTRAST","Контраст");
define("_MD_TADGAL_SATURATION","Насыщенность");
define("_MD_TADGAL_SHARPNESS","Резкость");
define("_MD_TADGAL_COMPRESSION","Сжатие");
define("_MD_TADGAL_JPEGIFOFFSET","Смещение формата замены JPEG эскизов");
define("_MD_TADGAL_JPEGIFBYTECOUNT","Длина формата замены JPEG эскизов");
define("_MD_TADGAL_IFD1OFFSET","IFD1 смещения");




define("_MA_TADGAL_CANT_OPEN","Невозможно создать \"%s\"");
define("_MA_TADGAL_CANT_WRITE","Невозможно записать \"%s\"");

//xppw.php
define("_MD_TADGAL_WIZARDNAME","Фотоальбом \"%s\" ");
define("_MD_TADGAL_WIZARDDESC","Групповая загрузка фотографий в альбом \"%s\" ");
define("_MD_TADGAL_INPUT_TITLE","Пожалуйста, введите ваше имя пользователя и пароль для этого сайта \"%s\"");
define("_MD_TADGAL_INPUT_ID","Имя пользователя:");
define("_MD_TADGAL_INPUT_PASS","Пароль:");
define("_MD_TADGAL_SELECT_DIR","Пожалуйста, выберите каталог, который вы хотите опубликовать");
define("_MD_TADGAL_NO_POST_POWER","Невозможно найти категорию, в которую вы имеете право загружать!");
define("_MD_TADGAL_WIZARD_HEADLINE","Мастер публикаций цифрового фотоальбома Tad галереи");
define("_MD_TADGAL_WIZARD_BYLINE","http://tad.tnc.edu.tw");




define("_MD_TADGAL_XPPW_PAGE","<h3>XP руководство по загрузке фотографий</h3>
<ol>
<li>Пожалуйста, <a href='{$_SERVER['PHP_SELF']}?step=reg'>dскачайте наш специальный \"reg\" файл</a>, затем кликните по нему дважды, чтобы установить.</li>
<li>Используйте менеджер файлов. Откройте папку с вашими фотографиями</li>
<li>Выберите фотографии, затем нажмите \"Опубликовать выбранные файлы на сайте\"</li>
<li>Следуйте инструкциям, чтобы загрузить файлы. Эскизы не нужны при загрузке.(Это необязательно)</li>
<li>После завершения загрузки используйте функцию ГРУППОВОЙ ЗАГРУЗКИ чтобы импортировать фотографии в альбом.</li>
</ol>");


define("_MD_TADGAL_COVER","Выберите обложку");

?>