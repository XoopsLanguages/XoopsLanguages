<?php
// $Id: global.php,v 1.15.14.6 2005/07/13 16:47:06 mithyt2 Exp $
//%%%%%%	File Name mainfile.php 	%%%%%
define("_PLEASEWAIT","Моля, изчакайте");
define("_FETCHING","Зареждане...");
define("_TAKINGBACK","Връщаме Ви там, където бяхте....");
define("_LOGOUT","Изход");
define("_SUBJECT","Относно");
define("_MESSAGEICON","Икона на съобщението");
define("_COMMENTS","Коментари");
define("_POSTANON","Публикувай анонимно");
define("_DISABLESMILEY","Забранява емотиконите");
define("_DISABLEHTML","Забранява html");
define("_PREVIEW","Преглед");

define("_GO","Напред!");
define("_NESTED","Тип 'Гнездо'");
define("_NOCOMMENTS","Няма коментари");
define("_FLAT","Тип 'Плоско'");
define("_THREADED","Тип 'Тематично'");
define("_OLDESTFIRST","Първо старите");
define("_NEWESTFIRST","Първо новите");
define("_MORE","още...");
define("_MULTIPAGE","За да направите статията да се зарежда в няколко страници, добавете думата <font color=red>[pagebreak]</font> (с скобите) в статията.");
define("_IFNOTRELOAD","Ако страницата не се презареди автоматично, моля щракнете <a href='%s'>тук</a>");
define("_WARNINSTALL2","ВНИМАНИЕ: Папката %s съществува на сървера Ви. <br />Моля изтрийте я, заради по-добра сигурност.");
define("_WARNINWRITEABLE","ВНИМАНИЕ: Файла %s е презаписваем от сървера. <br />Моля сменете правата му, за по-добра сигурност.<br /> в Unix (444), в Win32 (read-only)");

//%%%%%%	File Name themeuserpost.php 	%%%%%
define("_PROFILE","Профил");
define("_POSTEDBY","Публикувана от");
define("_VISITWEBSITE","Посети страницата");
define("_SENDPMTO","Изпрати лично съобщение до %s");
define("_SENDEMAILTO","Изпрати Email до %s");
define("_ADD","Добавя");
define("_REPLY","Отговор");
define("_DATE","Дата");   // Posted date

//%%%%%%	File Name admin_functions.php 	%%%%%
define("_MAIN","Начало");
define("_MANUAL","Учебник");
define("_INFO","Инфо");
define("_CPHOME","Контролен панел - начало");
define("_YOURHOME","Начална страница");

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define("_WHOSONLINE","Кой е на линия ?");
define('_GUESTS','Гости');
define('_MEMBERS','Членове');
define("_ONLINEPHRASE","<b>%s</b> потребител(я) са на линия");
define("_ONLINEPHRASEX","<b>%s</b> потребител(я) разглеждат <b>%s</b>");
define("_CLOSE","Затвори");  // Close window

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define("_QUOTEC","Цитат:");

//%%%%%%	File Name admin.php 	%%%%%
define("_NOPERM","Съжаляваме, но нямате права за достъп до тази зона.");

//%%%%%		Common Phrases		%%%%%
define("_NO","Не");
define("_YES","Да");
define("_EDIT","Редактира");
define("_DELETE","Изтрива");
define("_SUBMIT","Изпраща");
define("_MODULENOEXIST","Избраният модул не съществува!");
define("_ALIGN","Подравнява");
define("_LEFT","Ляво");
define("_CENTER","Център");
define("_RIGHT","Дясно");
define("_FORM_ENTER","Моля, попълнете %s");
// %s represents file name
define("_MUSTWABLE","Файла %s трябва да е с права за презапис от сървера!");
// Module info
define('_PREFERENCES','Настройки');
define("_VERSION","Версия");
define("_DESCRIPTION","Описание");
define("_ERRORS","Грешки");
define("_NONE","Няма");
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
define('_USERNAME','Потребител: ');
define('_PASSWORD','Парола: ');
define("_SELECT","Избор");
define("_IMAGE","Изображение");
define("_SEND","Изпраща");
define("_CANCEL","Отказва");
define("_ASCENDING","Възходящ ред");
define("_DESCENDING","Низходящ ред");
define('_BACK','Назад');
define('_NOTITLE','Няма заглавие');

/* Image manager */
define('_IMGMANAGER','Управление на изображенията');
define('_NUMIMAGES','%s изображения');
define('_ADDIMAGE','Добавя графичен файл');
define('_IMAGENAME','Име:');
define('_IMGMAXSIZE','Макс. позволен размер (байтове):');
define('_IMGMAXWIDTH','Макс. позволена ширина (пиксели):');
define('_IMGMAXHEIGHT','Макс. позволена височина (пиксели):');
define('_IMAGECAT','Категория:');
define('_IMAGEFILE','Изображние:');
define('_IMGWEIGHT','Ред на показване в управлението:');
define('_IMGDISPLAY','Да показва ли това изображение?');
define('_IMAGEMIME','MIME тип:');
define('_FAILFETCHIMG','Качването на %s е неуспешно');
define('_FAILSAVEIMG','Грешка при запазването на файла %s в базата');
define('_NOCACHE','Без кеш');
define('_CLONE','Клонира');

//%%%%%	File Name class/xoopsform/formmatchoption.php 	%%%%%
define("_STARTSWITH","Започва с");
define("_ENDSWITH","Завършва с");
define("_MATCHES","Съвпадения");
define("_CONTAINS","Съдържа");

//%%%%%%	File Name commentform.php 	%%%%%
define("_REGISTER","Регистрация");

//%%%%%%	File Name xoopscodes.php 	%%%%%
define("_SIZE","РАЗМЕР");  // font size
define("_FONT","ШРИФТ");  // font family
define("_COLOR","ЦВЯТ");  // font color
define("_EXAMPLE","ПРИМЕР");
define("_ENTERURL","Въведете връзката до страницата, която искате да добавите:");
define("_ENTERWEBTITLE","Въведете заглавие за връзката:");
define("_ENTERIMGURL","Въведете път към изображението което искате да добавите.");
define("_ENTERIMGPOS","Сега, изберете позиция на изображението.");
define("_IMGPOSRORL","'R' или 'r' за дясно, 'L' или 'l' за ляво, или оставете празно.");
define("_ERRORIMGPOS","ГРЕШКА! Въведете позиция.");
define("_ENTEREMAIL","Въведете Email адреса който искате да добавите.");
define("_ENTERCODE","Въведете кодовете които искате да добавите.");
define("_ENTERQUOTE","Въведете текста които искате да е цитиран.");
define("_ENTERTEXTBOX","Моля въведете текста в полето за целта.");
define("_ALLOWEDCHAR","Макс. позволени знака: ");
define("_CURRCHAR","Брой знаци в момента: ");
define("_PLZCOMPLETE","Моля, попълнете 'Относно' и самото съобщение.");
define("_MESSAGETOOLONG","Вашето съобщение е прекалено дълго.");

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

define("_DATESTRING","Y/n/j G:i:s");
define("_MEDIUMDATESTRING","Y/n/j G:i");
define("_SHORTDATESTRING","Y/n/j");
// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't','r','n'
define("_TODAY","\To\d\a\y G:i:s");
define("_YESTERDAY","\Ye\s\\te\\r\d\a\y G:i:s");
define("_MONTHDAY","n/j G:i:s");
define("_YEARMONTHDAY","Y/n/j G:i");
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
define("XOOPS_USE_MULTIBYTES","0");

// Error messaging
define("_NOERRORMESSAGE","Няма дефинирано съобщение за грешка");

// Added in XOOPS 2.2
define("_SELECTEDITOR","Изберете редактор");

define("_REMOVE","Премавахва");
define("_REQUIRED","Задължително");

// Used for "theme" type profile field
define("_SITEDEFAULT","По подразбиране");
?>