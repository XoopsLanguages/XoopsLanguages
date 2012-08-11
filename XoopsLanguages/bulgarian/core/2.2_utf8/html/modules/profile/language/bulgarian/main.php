<?php
// $Id: main.php,v 1.1.2.13 2005/07/19 18:14:35 mithyt2 Exp $
define("_PROFILE_MA_ERRORDURINGSAVE","Грешка по време на записа");
define('_PROFILE_MA_USERREG','Потребителска регистрация');
define('_PROFILE_MA_NICKNAME','Потребителско име');
define('_PROFILE_MA_REALNAME','Истинско име');
define('_PROFILE_MA_EMAIL','Email адрес');
define('_PROFILE_MA_ALLOWVIEWEMAIL','Разрешавам на другите потребители да виждат адреса ми');
define('_PROFILE_MA_TIMEZONE','Времева зона');
define('_PROFILE_MA_AVATAR','Аватар');
define('_PROFILE_MA_VERIFYPASS','Проверка на паролата');
define('_PROFILE_MA_SUBMIT','Изпраща');
define('_PROFILE_MA_USERNAME','Потребителско име');
define('_PROFILE_MA_FINISH','Край');
define('_PROFILE_MA_REGISTERNG','Невъзможна регистрация на нов потребител.');
define('_PROFILE_MA_MAILOK','Съгласни ли сте, да получавате писма от <br />админстраторите и модераторите на сайта?');
define('_PROFILE_MA_DISCLAIMER','Правилата');
define('_PROFILE_MA_IAGREE','Съгласен съм с по-горното');
define('_PROFILE_MA_UNEEDAGREE','Съжаляваме, но Вие не сте съгласни с правилата и неможете да бъдете регистриани.');
define('_PROFILE_MA_NOREGISTER','Съжаляваме, но в момента не приемаме нови регистрации');

// %s is username. This is a subject for email
define('_PROFILE_MA_USERKEYFOR','Активационен ключ за %s');
define('_PROFILE_MA_ACTLOGIN','Вашият профил е активиран, моля влезте с потреб. име и парола.');

define('_PROFILE_MA_YOURREGISTERED','Писмо с активационен ключ и иснтрукции ще Ви бъде изпратен скоро. ');
define('_PROFILE_MA_YOURREGMAILNG','Вече сте регистриран. В момента има проблем с майл сървера, и надяваме се скоро да бъде отрстранен. Ще Ви бъде изпратена допълнително регистрацията.');
define('_PROFILE_MA_YOURREGISTERED2','Вече сте регистриран. В най-скоро време администраторите на сайта ще прегледат регистрацията и ще Ви активират.');

// %s is your site name
define('_PROFILE_MA_NEWUSERREGAT','Нова потребителска регистрация на %s');
// %s is a username
define('_PROFILE_MA_HASJUSTREG','%s се регистрира!');

define('_PROFILE_MA_INVALIDMAIL','ГРЕШКА: Грешен email');
define('_PROFILE_MA_EMAILNOSPACES','ГРЕШКА: Email адреса неможе да съдържа интервали.');
define('_PROFILE_MA_INVALIDNICKNAME','ГРЕШКА: Грешно потребителско име');
define("_PROFILE_MA_INVALIDDISPLAYNAME","ГРЕШКА: Грешно име (за показване)");
define('_PROFILE_MA_NICKNAMETOOLONG','Потребителското име е прекалено дълго. Не трябва да надвишава %s знака.');
define('_PROFILE_MA_DISPLAYNAMETOOLONG','Името (за показване) е прекалено дълго. Не трябва да надвишава %s знака.');
define('_PROFILE_MA_NICKNAMETOOSHORT','Потребителското име е прекалено късо. Трябва да бъде минимум %s знака.');
define('_PROFILE_MA_DISPLAYNAMETOOSHORT','Името (за показване) е прекалено късо. Трябва да бъде минимум %s знака.');
define('_PROFILE_MA_NAMERESERVED','ГРЕШКА: Името е резервирано.');
define('_PROFILE_MA_DISPLAYNAMERESERVED','ГРЕШКА: Името (за показване) е резервирано.');
define('_PROFILE_MA_NICKNAMENOSPACES','Не може да има интервали в потребителското име.');
define('_PROFILE_MA_DISPLAYNAMENOSPACES','Не може да има интервали в името (за показване).');
define('_PROFILE_MA_NICKNAMETAKEN','ГРЕШКА: Потребителското име е регистрирано.');
define('_PROFILE_MA_DISPLAYNAMETAKEN','ГРЕШКА: Името (за показване) е регистрирано.');
define('_PROFILE_MA_EMAILTAKEN','ГРЕШКА: Email адреса е вече регистиран.');
define('_PROFILE_MA_ENTERPWD','ГРЕШКА: Трябва да въвете парола.');
define('_PROFILE_MA_SORRYNOTFOUND','Съжаляваме, не е открит такъв потребител.');
define("_PROFILE_MA_WRONGPASSWORD","ГРЕШКА: Грешна парола");
define("_PROFILE_MA_USERALREADYACTIVE","Потребител с email адрес %s вече е активиран");

// %s is your site name
define('_PROFILE_MA_YOURACCOUNT','Вашият профил в %s');

// %s is a username
define('_PROFILE_MA_ACTVMAILNG','Грешка при изпращане на известие до %s');
define('_PROFILE_MA_ACTVMAILOK','Известието е изпратено %s.');

define("_PROFILE_MA_DEFAULT","Настройки по подразбиране");

//%%%%%%		File Name userinfo.php 		%%%%%
define('_PROFILE_MA_SELECTNG','Няма избран потребител! Моля, въренете се и опитайте отново.');
define('_PROFILE_MA_PM','ЛС');
define('_PROFILE_MA_ICQ','ICQ');
define('_PROFILE_MA_AIM','AIM');
define('_PROFILE_MA_YIM','YIM');
define('_PROFILE_MA_MSNM','MSNM');
define('_PROFILE_MA_LOCATION','Местоживеене');
define('_PROFILE_MA_OCCUPATION','Професия');
define('_PROFILE_MA_INTEREST','Интереси');
define('_PROFILE_MA_SIGNATURE','Подпис');
define('_PROFILE_MA_EXTRAINFO','Допълнително инфо');
define('_PROFILE_MA_EDITPROFILE','Редактира профила');
define('_PROFILE_MA_LOGOUT','Изход');
define('_PROFILE_MA_INBOX','Входящи');
define('_PROFILE_MA_MEMBERSINCE','Потребител от');
define('_PROFILE_MA_RANK','Ранг');
define('_PROFILE_MA_POSTS','Коментара/Публикации');
define('_PROFILE_MA_LASTLOGIN','Последен вход');
define('_PROFILE_MA_ALLABOUT','Всичко за %s');
define('_PROFILE_MA_STATISTICS','Статистики');
define('_PROFILE_MA_MYINFO','Моята информация');
define('_PROFILE_MA_BASICINFO','Базова информация');
define('_PROFILE_MA_MOREABOUT','Оше за мен');
define('_PROFILE_MA_SHOWALL','Показва всички');

//%%%%%%		File Name edituser.php 		%%%%%
define('_PROFILE_MA_PROFILE','Профил');
define('_PROFILE_MA_DISPLAYNAME','Име (за показване)');
define('_PROFILE_MA_SHOWSIG','Винаги закачвай подписа ми');
define('_PROFILE_MA_CDISPLAYMODE','Режим на показване на коментарите');
define('_PROFILE_MA_CSORTORDER','Ред на подреждане на коментарите');
define('_PROFILE_MA_PASSWORD','Парола');
define('_PROFILE_MA_TYPEPASSTWICE','(въведете новата парола два пъти за да я смените)');
define('_PROFILE_MA_SAVECHANGES','Запазва промените');
define('_PROFILE_MA_NOEDITRIGHT',"Съжаляваме, но нямате права да редактирате този профил.");
define('_PROFILE_MA_PASSNOTSAME','Двете пароли са различни, а трябва да са еднакви.');
define('_PROFILE_MA_PWDTOOSHORT','Съжаляваме, но Вашата парола трябва да бъде минимум <b>%s</b> знака.');
define("_PROFILE_MA_NOPASSWORD","Моля, въведете паролата");
define('_PROFILE_MA_PROFUPDATED','Вашият профил е обновен!');
define('_PROFILE_MA_USECOOKIE','Запомни ме за 1 година');
define('_PROFILE_MA_NO','Не');
define('_PROFILE_MA_DELACCOUNT','Изтрива профила');
define('_PROFILE_MA_MYAVATAR','Моят аватар');
define('_PROFILE_MA_UPLOADMYAVATAR','Качва аватар');
define('_PROFILE_MA_MAXPIXEL','Макс. пиксели');
define('_PROFILE_MA_MAXIMGSZ','Макс. размер на файла (Bytes)');
define('_PROFILE_MA_SELFILE','Изберете файл');
define('_PROFILE_MA_OLDDELETED','Вашият стар аватар ще бъде изтрит!');
define('_PROFILE_MA_CHOOSEAVT','Изберете аватар от списъка');

define('_PROFILE_MA_PRESSLOGIN','Натиснете бутона за да влезете');

define('_PROFILE_MA_ADMINNO','Потребител от групата на администраторите неможе да бъде премахнат');
define('_PROFILE_MA_GROUPS','Потребиелски групи');

//changepass.php
define("_PROFILE_MA_CHANGEPASSWORD","Смяна на паролата");
define("_PROFILE_MA_PASSWORDCHANGED","Паролата е сменена успешно");
define("_PROFILE_MA_OLDPASSWORD","Парола в момента");
define("_PROFILE_MA_NEWPASSWORD","Новата парола");

//search.php
define("_PROFILE_MA_SORTBY","Сортира по");
define("_PROFILE_MA_ORDER","Ред");
define("_PROFILE_MA_PERPAGE","Части на страница");
define("_PROFILE_MA_LATERTHAN","%s по-късно от");
define("_PROFILE_MA_EARLIERTHAN","%s по-рано от");
define("_PROFILE_MA_LARGERTHAN","%s по-голямо от");
define("_PROFILE_MA_SMALLERTHAN","%s по малко от");

define("_PROFILE_MA_NOUSERSFOUND","Няма открити потребители");
define("_PROFILE_MA_RESULTS","Резултати от търсенето");

//changemail.php
define("_PROFILE_MA_CHANGEMAIL","Смяна на Email адреса");
define("_PROFILE_MA_NEWMAIL","Нов Email адрес");

define("_PROFILE_MA_NEWEMAILREQ","Искане за промяна на Email адреса");
define("_PROFILE_MA_NEWMAILMSGSENT","Писмо с активационна връзка ще Ви бъде изпратено и с подробни иснтрукции какво да направите");
define("_PROFILE_MA_EMAILCHANGED","Вашият Email адрес беше сменен");

define("_PROFILE_MA_CONFCODEMISSING","Конфирмационният код липсва");
?>