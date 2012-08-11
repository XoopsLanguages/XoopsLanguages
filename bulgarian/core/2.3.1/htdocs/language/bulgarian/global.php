<?php
// $Id: global.php 1529 2008-05-01 08:14:55Z phppp $
//%%%%%%	File Name mainfile.php 	%%%%%
define('_PLEASEWAIT','Моля, почакайте');
define('_FETCHING','Зареждане....');
define('_TAKINGBACK','Връщаме Ви там където бяхте');
define('_LOGOUT','Изход');
define('_SUBJECT','Относно');
define('_MESSAGEICON','Икона на съобщението');
define('_COMMENTS','Коментари');
define('_POSTANON','Пулбикувай анонимно');
define('_DISABLESMILEY','Забрана на емотиконите');
define('_DISABLEHTML','Забрана на HTML');
define('_PREVIEW','Преглед');
define('_GO','Напред!');
define('_NESTED','Тип *ГНЕЗДО*');
define('_NOCOMMENTS','Няма коментари');
define('_FLAT','Тип *ПЛОСКО*');
define('_THREADED','Тип *Дървоидно*');
define('_OLDESTFIRST','Първо старите');
define('_NEWESTFIRST','Първо новите');
define('_MORE','още...');
define('_MULTIPAGE','За да разделите новината си на няколко страници, добавете <font color=red>[pagebreak]</font> (със скобите) в статията.');
define('_IFNOTRELOAD','Ако страницата не се презареди автоматично, моля щракнете <a href=\'%s\'>тук</a>');
define('_WARNINSTALL2','WARNING: Directory %s exists on your server. <br />Please remove this directory for security reasons.');
define('_WARNINWRITEABLE','ВНИМАНИЕ: Файла %s презаписваем от сървъра. <br />Моля сменете правата му по съображения за сигурност.<br /> в Unix (444), в Win32 (read-only)');
// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED','%s е задължително');
define('_XOBJ_ERR_SHORTERTHAN','%s трябва да е по кратко от %d знака.');
//%%%%%%	File Name themeuserpost.php 	%%%%%
define('_PROFILE','Профил');
define('_POSTEDBY','Публикувано от');
define('_VISITWEBSITE','Страница');
define('_SENDPMTO','Лично съобщение до %s');
define('_SENDEMAILTO','Писмо до %s');
define('_ADD','Добави');
define('_REPLY','Отговор');
define('_DATE','Дата');
// Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define('_MAIN','Главно');
define('_MANUAL','Учебник');
define('_INFO','Инфо');
define('_CPHOME','Контролен панел');
define('_YOURHOME','Начало');
//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define('_WHOSONLINE','Кой е на линия ?');
define('_GUESTS','Гости');
define('_MEMBERS','Членове');
define('_ONLINEPHRASE','<strong>%s</strong> потребителя са на линия');
define('_ONLINEPHRASEX','<strong>%s</strong> потребителя разглеждат <strong>%s</strong>');
define('_CLOSE','Затвори');
// Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define('_QUOTEC','Цитат:');
//%%%%%%	File Name admin.php 	%%%%%
define('_NOPERM','Съжаляваме, но Вие нямате права за достъп до тази зона.');
//%%%%%		Common Phrases		%%%%%
define('_NO','Не');
define('_YES','Да');
define('_EDIT','Промяна');
define('_DELETE','Изтриване');
define('_SUBMIT','Потвърди');
define('_MODULENOEXIST','Избраният модул не съществува!');
define('_ALIGN','Подравняване');
define('_LEFT','Ляво');
define('_CENTER','Център');
define('_RIGHT','Дясно');
define('_FORM_ENTER','Моля въведете %s');
// %s represents file name
define('_MUSTWABLE','Файла %s трябва да е презаписваем от сървъра!');
// Module info
define('_PREFERENCES','Настройки');
define('_VERSION','Версия');
define('_DESCRIPTION','Описание');
define('_AUTHOR','Автор');
define('_CREDITS','Инфо.');
define('_LICENCE','Лиценз');
define('_ERRORS','Грешки');
define('_NONE','Няма');
define('_ON','на');
define('_READS','прочита');
define('_WELCOMETO','Добре дошли в %s');
define('_SEARCH','Търсене');
define('_ALL','Всички');
define('_TITLE','Заглавие');
define('_OPTIONS','Опции');
define('_QUOTE','Цитат');
define('_LIST','Списък');
define('_LOGIN','Вход');
define('_USERNAME','Потребител:');
define('_PASSWORD','Парола:');
define('_SELECT','Изберете');
define('_IMAGE','Снимка');
define('_SEND','Изпращане');
define('_CANCEL','Отказ');
define('_ASCENDING','Възходящ ред');
define('_DESCENDING','Низходящ ред');
define('_BACK','Назад');
define('_NOTITLE','Няма заглавие');
/* Image manager */
define('_IMGMANAGER','Снимки');
define('_NUMIMAGES','%s снимки');
define('_ADDIMAGE','Добавяне на снимка');
define('_IMAGENAME','Име:');
define('_IMGMAXSIZE','Макс. размер на файла (байта):');
define('_IMGMAXWIDTH','Макс. ширина (пиксела):');
define('_IMGMAXHEIGHT','Макс. височина (пиксела):');
define('_IMAGECAT','Категория:');
define('_IMAGEFILE','Снимка:');
define('_IMGWEIGHT','Ред на показване в мениджъра за снимки:');
define('_IMGDISPLAY','Да показва ли снимката?');
define('_IMAGEMIME','MIME тип:');
define('_FAILFETCHIMG','Невъзможен прочит на качения файл %s');
define('_FAILSAVEIMG','Грешка при записването на снимката %s в базата');
define('_NOCACHE','Без кеширане');
define('_CLONE','Клониране');
//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define('_STARTSWITH','Започва с');
define('_ENDSWITH','Свърша с');
define('_MATCHES','Съвпадения');
define('_CONTAINS','Съдържа');
//%%%%%%	File Name commentform.php 	%%%%%
define('_REGISTER','Регистрация');
//%%%%%%	File Name xoopscodes.php 	%%%%%
define('_SIZE','РАЗМЕР');
// font size
define('_FONT','ШРИФТ');
// font family
define('_COLOR','ЦВЯТ');
// font color
define('_EXAMPLE','ПРИМЕР');
define('_ENTERURL','Въведете адреса на връзката, която искате да добавите:');
define('_ENTERWEBTITLE','Въведете името на сайта:');
define('_ENTERIMGURL','Въведете адреса на снимката до файл, която искате да добавите.');
define('_ENTERIMGPOS','Въведете позиция на снимката.');
define('_IMGPOSRORL','\'R\' или \'r\'за дясно, \'L\' или \'l\' за ляво, или оставете празно.');
define('_ERRORIMGPOS','ГРЕШКА! Въведете позиция на снимката.');
define('_ENTEREMAIL','Въведете e-mail адреса който искате да добавите.');
define('_ENTERCODE','Въведете кодовете които искате да ползвате.');
define('_ENTERQUOTE','Въведете текста които искате да бъде в цитат.');
define('_ENTERTEXTBOX','Моля въведете текста в в полето');
define('_ALLOWEDCHAR','Макс. брой знаци: ');
define('_CURRCHAR','Брой знаци за момента: ');
define('_PLZCOMPLETE','Моля попълнете заглавието на съобщението, както и текста на съобщението..');
define('_MESSAGETOOLONG','Вашето съобщение е прекалено дълго.');
//%%%%%		TIME FORMAT SETTINGS   %%%%%
define('_SECOND','1 секунда');
define('_SECONDS','%s секунди');
define('_MINUTE','1 минута');
define('_MINUTES','%s минути');
define('_HOUR','1 час');
define('_HOURS','%s часа');
define('_DAY','1 ден');
define('_DAYS','%s дни');
define('_WEEK','1 седмица');
define('_MONTH','1 месец');
define('_DATESTRING','Y/n/j G:i:s');
define('_MEDIUMDATESTRING','Y/n/j G:i');
define('_SHORTDATESTRING','Y/n/j');
/*
The following characters are recognized in the format string:
a - "am" or "pm"
A - "AM" or "PM"
d - day of the month, 2 digits with leading zeros; i.e. "01" to "31"
D - day of the week, textual, 3 letters; i.e. "Fri"
F - month, textual, long; i.e. "January"
h - hour, 12-hour format; i.e. "01" to "12"
H - hour, 24-hour format; i.e. "00" to "23"
g - hour, 12-hour format without leading zeros; i.e. "1" to "12"
G - hour, 24-hour format without leading zeros; i.e. "0" to "23"
i - minutes; i.e. "00" to "59"
j - day of the month without leading zeros; i.e. "1" to "31"
l (lowercase 'L') - day of the week, textual, long; i.e. "Friday"
L - boolean for whether it is a leap year; i.e. "0" or "1"
m - month; i.e. "01" to "12"
n - month without leading zeros; i.e. "1" to "12"
M - month, textual, 3 letters; i.e. "Jan"
s - seconds; i.e. "00" to "59"
S - English ordinal suffix, textual, 2 characters; i.e. "th","nd"
t - number of days in the given month; i.e. "28" to "31"
T - Timezone setting of this machine; i.e. "MDT"
U - seconds since the epoch
w - day of the week, numeric, i.e. "0" (Sunday) to "6" (Saturday)
Y - year, 4 digits; i.e. "1999"
y - year, 2 digits; i.e. "99"
z - day of the year; i.e. "0" to "365"
Z - timezone offset in seconds (i.e. "-43200" to "43200")
*/


//%%%%%		LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET','UTF-8');
define('_LANGCODE','bg');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES','0');
?>