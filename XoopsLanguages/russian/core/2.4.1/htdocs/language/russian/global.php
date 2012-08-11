<?php
/**
 * Language definitions for {@link XoopsFormDhtmlTextArea}
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Global Language
 * @since           2.3.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: global.php 3337 2009-07-07 16:14:22Z beckmi $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 14.09.2009 andrey3761

define('_PLEASEWAIT','Пожалуйста подождите');
define('_FETCHING','Загрузка....');
define('_TAKINGBACK','Вернитесь назад туда, где были...');
define('_LOGOUT','Завершение сеанса');
define('_SUBJECT','Тема');
define('_MESSAGEICON','Значок сообщения');
define('_COMMENTS','Комментарии');
define('_POSTANON','Отправить анонимно');
define('_DISABLESMILEY','Запретить смайлики');
define('_DISABLEHTML','Запретить HTML');
define('_PREVIEW','Предварительный просмотр');
define('_GO','Выполнить!');
define('_NESTED','Уплотненный');
define('_NOCOMMENTS','Без комментариев');
define('_FLAT','Плоский');
define('_THREADED','Нитевидный');
define('_OLDESTFIRST','Более старые первыми');
define('_NEWESTFIRST','Более новые первыми');
define('_MORE','далее...');
define('_MULTIPAGE','Чтобы статья содержала несколько страниц, вставьте слово <font color=red>[pagebreak]</font> (со скобками) в статью.');
define('_IFNOTRELOAD','Если страница автоматически не перезагрузится, пожалуйста нажмите <a href="%s">сюда</a>');

// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED','%s обязательный параметр' );
define('_XOBJ_ERR_SHORTERTHAN','%s должно быть короче %d символов.' );

//%%%%%%	File Name themeuserpost.php 	%%%%%
define('_PROFILE','Учетная запись');
define('_POSTEDBY','Написал');
define('_VISITWEBSITE','Посетить сайт');
define('_SENDPMTO','Отправить личное сообщение для %s');
define('_SENDEMAILTO','Отправить E-mail для %s');
define('_ADD','Добавить');
define('_REPLY','Ответить');
define('_DATE','Дата');   // дата сообщения

//%%%%%%	File Name admin_functions.php 	%%%%%
define('_MAIN','Главная');
define('_MANUAL','Руководство');
define('_INFO','Информация');
define('_CPHOME','Панель управления');
define('_YOURHOME','Главная');

//%%%%%%	File Name misc.php (who's-online popup)	%%%%%
define('_WHOSONLINE','Кто активен');
define('_GUESTS','Гостей');
define('_MEMBERS','Участников');
define('_ONLINEPHRASE','<b>%s</b> пользователь(ей) активно');
define('_ONLINEPHRASEX','<b>%s</b> пользователь(ей) просматривают <b>%s</b>');
define('_CLOSE','Закрыть');   // закрытие окна

//%%%%%%	File Name module.textsanitizer.php 	%%%%%
define('_QUOTEC','Цитата:');

//%%%%%%	File Name admin.php 	%%%%%
define('_NOPERM','Извините, Вы не имеете разрешения на доступ в эту зону.');

//%%%%%		Common Phrases		%%%%%
define('_NO','Нет');
define('_YES','Да');
define('_EDIT','Редактировать');
define('_DELETE','Удалить');
define('_SUBMIT','Отправить');
define('_MODULENOEXIST','Выбранный модуль не существует!');
define('_ALIGN','Выравнивание');
define('_LEFT','Слева');
define('_CENTER','По центру');
define('_RIGHT','Справа');
define('_FORM_ENTER','Пожалуйста введите %s');
// %s represents file name
define('_MUSTWABLE','Файл %s должен быть доступен на запись сервером!');
// Информация модуля
define('_PREFERENCES','Конфигурация');
define('_VERSION','Версия');
define('_DESCRIPTION','Описание');
define('_AUTHOR','Автор');
define('_CREDITS','Благодарности');
define('_LICENCE','Лицензия');
define('_ERRORS','Ошибки');
define('_NONE','Нет');
define('_ON','в');
define('_READS','прочтений');
define('_WELCOMETO','Добро пожаловать на %s');
define('_SEARCH','Поиск');
define('_ALL','Все');
define('_TITLE','Название');
define('_OPTIONS','Настройки');
define('_QUOTE','Цитата');
define('_LIST','Список');
define('_LOGIN','Вход');
define('_USERNAME','Пользователь: ');
define('_PASSWORD','Пароль: ');
define('_SELECT','Выбор');
define('_IMAGE','Рисунок');
define('_SEND','Отправить');
define('_CANCEL','Отмена');
define('_ASCENDING','По возрастанию');
define('_DESCENDING','По убыванию');
define('_BACK','Назад');
define('_NOTITLE','Нет заголовка');

/* Менеджер изображений*/
define('_IMGMANAGER','Менеджер изображений');
define('_NUMIMAGES','%s рисунков');
define('_ADDIMAGE','Добавление файла рисунка');
define('_IMAGENAME','Имя:');
define('_IMGMAXSIZE','Максимально разрешенный размер (Кб):');
define('_IMGMAXWIDTH','Максимально разрешенная ширина (точек):');
define('_IMGMAXHEIGHT','Максимально разрешенная высота (точек):');
define('_IMAGECAT','Категория:');
define('_IMAGEFILE','Файл рисунка:');
define('_IMGWEIGHT','Порядок отображения в менеджере рисунков:');
define('_IMGDISPLAY','Отобразить этот рисунок?');
define('_IMAGEMIME','MIME-тип:');
define('_FAILFETCHIMG','Не могу взять загруженный файл %s');
define('_FAILSAVEIMG','Ошибка сохранения рисунка %s в базу данных');
define('_NOCACHE','Не кэшировать');
define('_CLONE','Клонировать');

//%%%%%    For xoopsform files %%%%%
define('_STARTSWITH','Начинается с');
define('_ENDSWITH','Заканчивается');
define('_MATCHES','Совпадения');
define('_CONTAINS','Содержит');
define('_REQUIRED','Необходимый');

//%%%%%%	File Name commentform.php 	%%%%%
define('_REGISTER','Регистрация');

//%%%%%%	File Name xoopscodes.php 	%%%%%
define('_SIZE','РАЗМЕР');  //размер шрифта
define('_FONT','ШРИФТ');  // вид шрифта
define('_COLOR','ЦВЕТ');  // цвет шрифта
define('_EXAMPLE','ПРИМЕР');
define('_ENTERURL','Введите адрес ссылки которую Вы хотите добавить:');
define('_ENTERWEBTITLE','Введите название сайта:');
define('_ENTERIMGURL','Введите адрес рисунка который Вы хотите добавить.');
define('_ENTERIMGPOS','Теперь введите расположение рисунка.');
define('_IMGPOSRORL','\'R\' или \'r\' если справа, \'L\' или \'l\' если слева, или оставьте поле пустым.');
define('_ERRORIMGPOS','ОШИБКА! Введите расположение рисунка.');
define('_ENTEREMAIL','Введите E-mail адрес который Вы хотите добавить.');
define('_ENTERCODE','Введите коды, которые Вы хотите добавить.');
define('_ENTERQUOTE','Введите текст который вы хотите цитировать.');
define('_ENTERTEXTBOX','Пожалуйста, введите текст в поле ввода.');
define('_ALLOWEDCHAR','Разрешенное максимальное количество символов: ');
define('_CURRCHAR','Текущее количество символов: ');
define('_PLZCOMPLETE','Пожалуйста, заполните поля содержащие тему и сообщение.');
define('_MESSAGETOOLONG','Ваше сообщение слишком длинное.');

//%%%%%		установки формата времени   %%%%%
define('_SECOND','1 секунда');
define('_SECONDS','%s секунд');
define('_MINUTE','1 минута');
define('_MINUTES','%s минут');
define('_HOUR','1 час');
define('_HOURS','%s часов');
define('_DAY','1 день');
define('_DAYS','%s дней');
define('_WEEK','1 неделя');
define('_MONTH','1 месяц');

define('_DATESTRING','j.n.Y G:i:s');
define('_MEDIUMDATESTRING','j.n.Y G:i');
define('_SHORTDATESTRING','j.n.Y');
/*
The following characters are recognized in the format string:
a - 'am' or 'pm'
A - 'AM' or 'PM'
d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
D - day of the week, textual, 3 letters; i.e. 'Fri'
F - month, textual, long; i.e. 'January'
h - hour, 12-hour format; i.e. '01' to '12'
H - hour, 24-hour format; i.e. '00' to '23'
g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
i - minutes; i.e. '00' to '59'
j - day of the month without leading zeros; i.e. '1' to '31'
l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
L - boolean for whether it is a leap year; i.e. '0' or '1'
m - month; i.e. '01' to '12'
n - month without leading zeros; i.e. '1' to '12'
M - month, textual, 3 letters; i.e. 'Jan'
s - seconds; i.e. '00' to '59'
S - English ordinal suffix, textual, 2 characters; i.e. 'th','nd'
t - number of days in the given month; i.e. '28' to '31'
T - Timezone setting of this machine; i.e. 'MDT'
U - seconds since the epoch
w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
Y - year, 4 digits; i.e. '1999'
y - year, 2 digits; i.e. '99'
z - day of the year; i.e. '0' to '365'
Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/


//%%%%%		языковые установки    %%%%%
define('_CHARSET','UTF-8');
define('_LANGCODE','ru');

// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES','1');

/**
* Additions to 2.4.0
**/
define('_RESET','Сброс');
define('_RE','Re:');
?>