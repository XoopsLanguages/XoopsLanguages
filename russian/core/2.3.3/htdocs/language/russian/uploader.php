<?php
// $Id: uploader.php 2755 2009-02-02 14:37:15Z phppp $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-03-12 andrey3761

//%%%%%		uploader.php	%%%%
define("_ER_UP_MIMETYPELOAD", "Ошибка загрузки MIME-типов");
define("_ER_UP_FILENOTFOUND", "Файл не найден");
define("_ER_UP_INVALIDFILESIZE", "Неверный размер файла");
define("_ER_UP_FILENAMEEMPTY", "Имя файла не задано");
define("_ER_UP_NOFILEUPLOADED", "Нет файлов для загрузки");
define("_ER_UP_ERROROCCURRED", "Произошла ошибка #%s");
define("_ER_UP_UPLOADDIRNOTSET", "Папка для загрузки не задана");
define("_ER_UP_FAILEDOPENDIR", "Ошибка открытия папки: %s");
define("_ER_UP_FAILEDOPENDIRWRITE", "Ошибка открытия папки с правами для записи: %s");
define("_ER_UP_FILESIZETOOLARGE", "Размер файла слишком большой (Максимум %u байт): %u байт");
define("_ER_UP_FILEWIDTHTOOLARGE", "Ширина рисунка слишком велика (Максимум %u px): %u px");
define("_ER_UP_FILEHEIGHTTOOLARGE", "Высота рисунка слишком велика (Максимум %u px): %u px");
define("_ER_UP_MIMETYPENOTALLOWED", "MIME-тип не разрешен: %s");
define("_ER_UP_FAILEDUPLOADFILE", "Ошибка при загрузке файла: %s");
define("_ER_UP_FAILEDFETCHIMAGESIZE", "Ошибка приведения размеров рисунка %s, пропуск проверки максимальных размеров...");
define("_ER_UP_UNKNOWNFILETYPEREJECTED", "Отклонен неизвестный тип файла");
define("_ER_UP_ERRORSRETURNED", "Ошибки в процессе загрузки файла: %s");
define("_ER_UP_INVALIDIMAGEFILE", "Неверный файл рисунка");
define("_ER_UP_SUSPICIOUSREFUSED", "Загрузка подозрительного изображения отклонена");
define("_ER_UP_INVALIDFILENAME", "Неверное имя файла");
define("_ER_UP_FAILEDSAVEFILE", "Ошибка сохранения файла в %s");
?>