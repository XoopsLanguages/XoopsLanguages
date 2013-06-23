<?php
/**
* You may not change or alter any portion of this comment or credits
* of supporting developers from this source code or any supporting 
* source code which is considered copyrighted (c) material of the 
* original comment or credit authors.
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* @copyright:         The XOOPS Project http://sourceforge.net/projects/xoops/
* @license:           http://www.fsf.org/copyleft/gpl.html GNU public license
* @packet:            Modules
* @sub-packet:        Smallworld
* @since:             Xoops 2.5.4
* @Author:            Michael Albertsen (http://culex.dk) <culex@culex.dk>
* @copyright:         2011 Culex
* @Last committed:    $Revision: 9032 $
* @Last changed by:   $Author: djculex $
* @Last changed date: $Date: 2012-02-20 06:15:13 +0100 (ma, 20 feb 2012) $
* @ID:                $Id: main.php 9032 2012-02-20 05:15:13Z djculex $
**/

/*----------------- Menu items ---------------*/

/*------------ General items -------- */
define("_SMALLWORLD_SYSERROR","Системная ошибка!");
define("_SMALLWORLD_SYSNAME","Smallworld");
define("_SMALLWORLD_ALL_FIELDS_DISABLED","Не предоставлена личная информация");
define("_SMALLWORLD_RECENTACTIVITY","Активность");
define("_SMALLWORLD_MESSAGEHISTORIC","Сообщения");
define("_SMALLWORLD_UPLOADFILEBUTTONTEXT","Загрузить Файл");


/*----------- Personal info ------------------*/
define("_SMALLWORLD_AVATAR","Текущее изображение");
define("_SMALLWORLD_REALNAME","Настоящее имя");
define("_SMALLWORLD_GENDER","Пол");
define("_SMALLWORLD_INTERESTEDIN","Интересы");
define("_SMALLWORLD_RELATIONSHIPSTATUS","Семейное положение");
define("_SMALLWORLD_PARTNER","Партнер");
define("_SMALLWORLD_LOOKINGFOR","Ищу..");
define("_SMALLWORLD_BIRTHPLACE","Место рождения");
define("_SMALLWORLD_POLITICALVIEW","Политический взгляд");
define("_SMALLWORLD_RELIGIOUSVIEW","Религиозные взгляды");
define("_SMALLWORLD_EMAILS","Адреса электронной почты");

/*--------------- contact info -----------------*/
define("_SMALLWORLD_MOBILEPHONE","Мобильный");
define("_SMALLWORLD_LANDPHONE","Телефон");
define("_SMALLWORLD_ADRESS","Адрес");
define("_SMALLWORLD_CITY","Город");

/*-------------- interests ---------------------*/
define("_SMALLWORLD_WEBSITE","Адрес сайта");
define("_SMALLWORLD_INTERESTS","Интересы");
define("_SMALLWORLD_FAVOURITEMUSIC","Любимая музыка");
define("_SMALLWORLD_FAVOURITEMOVIES","Любимое кино");
define("_SMALLWORLD_ABOUTME","Обо мне");
define("_SMALLWORLD_ADDSCHOOLS","Добавить школы / образование");
define("_SMALLWORLD_ADDJOBS","Добавить работу");
define("_SMALLWORLD_VARIOUSINTERESTS","Различные интересы");
define("_SMALLWORLD_CONTACTINFO","Контактная информация");
define("_SMALLWORLD_PERSONALINFO","Персональные данные");
define("_SMALLWORLD_NOFRIENDTEXT","Только друзья могут посмотреть профиль / текст ленты");

/* --------------- Timezone, User profile text & stats ----------------*/
define("_SMALLWORLD_TIMEZONE","Временная зона");
define("_SMALLWORLD_OCCUPATION","Местоположение");
define("_SMALLWORLD_MEMBERSINCE","Член с");
define("_SMALLWORLD_MESSENGER","Программа обмена сообщениями");
define("_SMALLWORLD_TOTALPOSTS","Всего сообщений");
define("_SMALLWORLD_RANK","Ранг");
define("_SMALLWORLD_RANKIMAGE","Изображение ранга");
define("_SMALLWORLD_TOTALUSERRATINGS","Общий рейтинг");
define("_SMALLWORLD_LASTLOGIN","Дата последнего посещения");
define("_SMALLWORLD_SIGNATURE","Подпись");
define("_SMALLWORLD_REPLY_NOTSPECIFIYED","Не указано");
define("_SMALLWORLD_BIRTHDAY","Дата рождения");
define("_SMALLWORLD_AKA","aka");
define("_SMALLWORLD_BORN","родился");
define("_SMALLWORLD_YEARSOLD","лет");
define("_SMALLWORLD_IN","в");
define("_SMALLWORLD_HE","Он");
define("_SMALLWORLD_SHE","Она");
define("_SMALLWORLD_HEORSHE","Он/Она");
define("_SMALLWORLD_LIVINGIN","в настоящее время живет в");
define("_SMALLWORLD_ISEMPLOYEDBY","работает на");
define("_SMALLWORLD_ATTENDED","учился в");
define("_SMALLWORLD_AND","и");
define("_SMALLWORLD_BIOGRAPHY","Биография");
define("_SMALLWORLD_EXTBIOGRAPHY","Больше информации");
define("_SMALLWORLD_NAME","Имя");
define("_SMALLWORLD_COUNTRY","Страна");

/*------------- Friends and follow ---------------------*/
define("_SMALLWORLD_FRIEND","Добавить в друзья");
define("_SMALLWORLD_FOLLOWFRIEND","Следовать");
define("_SMALLWORLD_SENDMESSAGE","Послать сообщение");
define("_SMALLWORLD_MOREINFO","Для информации нажмите здесь");

/*--------------------- Messages and boxes -----------------------------*/
define("_SMALLWORLD_NOTYETUSER_GREETING","Добро пожаловать");
define("_SMALLWORLD_NOTYETUSER_BOXTEXT","Для того, чтобы использовать этот модуль, вы должны будете заполнить профиль дополнительной информацией.
		<br><br>Нажмите ОК для продолжения регистрации или нажмите Отмена<br><br>чтобы вернуться в начало страницы.");
define("_SMALLWORLD_NOTYETREGISTERED_TITLE","Продолжить для завершения установки");	
define("_SMALLWORLD_TEXTBEFORESUBMIT","Продолжить, чтобы сохранить информацию в базе данных. <br><br> После этого вы можете посетить свою страницу, <br> и страницы других пользователей <br><br> Спасибо за ваше время.");
define("_SMALLWORLD_FRIENDSINVITATIONS","Запросы на добавление в друзья");
define("_SMALLWORLD_DATERECIEVED","Дата");
define("_SMALLWORLD_ACCEPT","Принять");
define("_SMALLWORLD_DENY","Запретить");
define("_SMALLWORLD_LATER","Позже");
define("_SMALLWORLD_ACTION","Действие");
define("_SMALLWORLD_UPDATEID_NOT_EXIST","Сообщение не существует. Возврат.");
define("_SMALLWORLD_NOUSER_ERROR","Пользователь не существует. Возврат.");

/* ------------- Registerform ---------------------- */

define("_SMALLWORLD_REGRISTATION_TITLE","Профиль Smallworld");
define("_SMALLWORLD_STEP1","Шаг 1 из 6");
define("_SMALLWORLD_STEP2","Шаг 2 из 6");
define("_SMALLWORLD_STEP3","Шаг 3 из 6");
define("_SMALLWORLD_STEP4","Шаг 4 из 6");
define("_SMALLWORLD_STEP5","Шаг 5 из 6");
define("_SMALLWORLD_STEP6","Конец");
define("_SMALLWORLD_BELIEFS","Договоренности");
define("_SMALLWORLD_FAVOURITETHINGS","Любимые вещи");
define("_SMALLWORLD_FAVOURITEBOOKS","Любимые книги");
define("_SMALLWORLD_FAVOURITEMOVIE","Любимые фильмы");
define("_SMALLWORLD_FAVOURITETVSHOW","Любимые ТВ-передачи");
define("_SMALLWORLD_FAVOURITEINTERESTS","Интересы");
define("_SMALLWORLD_INTERESTS_DESC","Интересы, личные данные и контакты");
define("_SMALLWORLD_CONTACTS","Контактная информация");
define("_SMALLWORLD_EMAIL","Email(ы)");
define("_SMALLWORLD_SCREENNAMES","Имена(ы)");
define("_SMALLWORLD_PHONE","Телефон");
define("_SMALLWORLD_GSM","Мобильный");
define("_SMALLWORLD_ISSINGLE","В настоящее время один");
define("_SMALLWORLD_INRELATIONSHIP","в связи с");
define("_SMALLWORLD_ISMARRIED","");
define("_SMALLWORLD_ISENGAGED","с");
define("_SMALLWORLD_ISCOMPLICATED","скрывает, когда дело доходит до личных отношений с");
define("_SMALLWORLD_OPENRELATIONSHIP","открыт для отношений с");
define("_SMALLWORLD_ADDITIONALINFO","ДОПОЛНИТЕЛЬНАЯ информация о");
define("_SMALLWORLD_HIS","Его");
define("_SMALLWORLD_HER","ее");
define("_SMALLWORLD_HISHER","его/ее");
define("_SMALLWORLD_POLITICWORD","политика");
define("_SMALLWORLD_RELIGIONWORD","религия");
define("_SMALLWORLD_IS","есть");
define("_SMALLWORLD_ADDSOMEINFO","Добавить или редактировать");
define("_SMALLWORLD_CHOOSE","Выбрать");
define("_SMALLWORLD_WOMAN","Женщина");
define("_SMALLWORLD_MAN","Мужчина");
define("_SMALLWORLD_BOTH","Оба");
define("_SMALLWORLD_NONE","Нет");
define("_SMALLWORLD_MARRIED","Женат");
define("_SMALLWORLD_ENGAGED","Занят");
define("_SMALLWORLD_SINGLE","Один");
define("_SMALLWORLD_RELATIONSHIP","В отношениях");
define("_SMALLWORLD_RELATIONSHIP_OPEN","В открытых отношениях");
define("_SMALLWORLD_ITSCOMP","Сложно");
define("_SMALLWORLD_FRIENDSHIP","Дружба");
define("_SMALLWORLD_DATING","Свидания");
define("_SMALLWORLD_ARELATIONSHIP","Отношения");
define("_SMALLWORLD_HANKYPANKY","Шуры-муры");
define("_SMALLWORLD_PVLIBERAL","Крайне левый");
define("_SMALLWORLD_PLIBERAL","Либеральный");
define("_SMALLWORLD_PMODERATE","Умеренный");
define("_SMALLWORLD_PCONSERVATIVE","Консервативный");
define("_SMALLWORLD_PVCONSERVATIVE","Очень консервативный");
define("_SMALLWORLD_PLIBERTARIAN","Крайне правый");
define("_SMALLWORLD_POTHER","другое");
define("_SMALLWORLD_RCHRISTIANITY","Христианство");
define("_SMALLWORLD_RISLAM","Ислам");
define("_SMALLWORLD_RSECULAR","Светский / Нерелигиозный / Агностик / Атеист");
define("_SMALLWORLD_RHINDUISM","Индуизм");
define("_SMALLWORLD_RCHINESETRAD","Китайская традиционная религия");
define("_SMALLWORLD_RBUDDHISM","Буддизм");
define("_SMALLWORLD_RPRIMALIND","Прямая и коренная");
define("_SMALLWORLD_RAFRICANTRAD","Традиционные африканские диаспоры");
define("_SMALLWORLD_RSIKHISM","Сикхизм");
define("_SMALLWORLD_RJUCHE","Чучхе");
define("_SMALLWORLD_RSPIRITISM","Спиритизм");
define("_SMALLWORLD_RJUDAISM","Иудаизм");
define("_SMALLWORLD_RBAHAI","Бахаи");
define("_SMALLWORLD_RJAINISM","Джайнизм");
define("_SMALLWORLD_RSHINTO","Синто");
define("_SMALLWORLD_RCAODAI","Као Дай");
define("_SMALLWORLD_RZOROASRIANISM","Зороастризм");
define("_SMALLWORLD_RTENRIKYO","Tenrikyo");
define("_SMALLWORLD_RNEOPAGANISM","Нео-язычества");
define("_SMALLWORLD_RUNITARIANUNIVERSALISM","Унитарная-Универсализм");
define("_SMALLWORLD_RRASTA","Растафари");
define("_SMALLWORLD_RSCIENTOLOGY","Саентология");
define("_SMALLWORLD_ANCIENTALIENTHEORIST","Древние чужеродные, теоретик");
define("_SMALLWORLD_ROTHER","Другое");
define("_SMALLWORLD_SUBMIT","Сохранить");
define("_SMALLWORLD_EMAILADRESSES","E-mail адрес(а)");

// dropdown screen names
define("_SMALLWORLD_SCREENNAME_AIM","MSN (uname) ");
define("_SMALLWORLD_SCREENNAME_FACEBOOK","Facebook (uname) ");
define("_SMALLWORLD_SCREENNAME_GOOGLE","Google+ (id) ");
define("_SMALLWORLD_SCREENNAME_ICQ","ICQ (id number)");
define("_SMALLWORLD_SCREENNAME_SKYPE","Skype (uname) ");
define("_SMALLWORLD_SCREENNAME_TWITTER","Twitter (uname) ");
define("_SMALLWORLD_SCREENNAME_MYSPACE","MySpace (uname) ");
define("_SMALLWORLD_SCREENNAME_XOOPS","Xoops (uid) ");
define("_SMALLWORLD_SCREENNAME_YAHOO","Yahoo (yahoo id) ");
define("_SMALLWORLD_SCREENNAME_YOUTUBE","Youtube (uname) ");
define("_SMALLWORLD_ADDMORE","Добавить еще");
define("_SMALLWORLD_REMOVE","Удалить");
define ("_SMALLWORLD_SHOWIFPUBLICORPRIVATE","Privacy settings. What to show if wall is public");
define ("_SMALLWORLD_SHOWMYPOSTS","Show my posts");
define ("_SMALLWORLD_SHOWMYCOMMENTS","Show my comments");
define ("_SMALLWORLD_MENU_PRIVSET","Pri. Settings");
define ("_SMALLWORLD_MESSAGE_PRIVSETPOSTS","Posts from this user are only visible for followers or friends...Please register.");
define ("_SMALLWORLD_MESSAGE_PRIVSETCOMMENTS","Comments from this user are only visible for followers or friends...Please register.");

/*------------ Schools ----------*/

define("_SMALLWORLD_KINDERGARDEN","детский сад");
define("_SMALLWORLD_NURSERY","питомник");
define("_SMALLWORLD_ELEMSCHOOL","начальная школа");
define("_SMALLWORLD_GRADUATESCHOOL","аспирантура");
define("_SMALLWORLD_HIGHSCHOOL","средняя школа");
define("_SMALLWORLD_JUNIORHIGH","джунгли");
define("_SMALLWORLD_JUNIORCOLLEGE","волчья стая");
define("_SMALLWORLD_COLLEGE","колледж");
define("_SMALLWORLD_TECNICAL","техникум");
define("_SMALLWORLD_UNIVERSITY","университет");
define("_SMALLWORLD_SCHOOLNAME","имя школы");
define("_SMALLWORLD_SCHOOLTYPE","тип школы");
define("_SMALLWORLD_START","Год начала");
define("_SMALLWORLD_STOP","Год завершения");
define("_SMALLWORLD_MUSIC","Любимая музыка");
define("_SMALLWORLD_TVSHOW","Любимые ТВ-шоу");
define("_SMALLWORLD_MOVIE","Любимое кино");
define("_SMALLWORLD_BOOKS","Любимые книги");
define("_SMALLWORLD_EMPLOYER","Работодатель");
define("_SMALLWORLD_POSITION","Описание позиции");
define("_SMALLWORLD_DESCRIPTION","Описание работы");
define("_SMALLWORLD_JOBSTART","Начал");
define("_SMALLWORLD_JOBSTOP","Закончил");
define("_SMALLWORLD_NOACCOUNT","У вас нет аккаунта. Или в вашем профиле не хватает информации.");
define("_SMALLWORLD_REGXOOPS","Нажмите здесь, чтобы зарегистрироваться");
define("_SMALLWORLD_REGSMALLWORLD","Нажмите здесь, чтобы изменить / создать профиль");
define("_SMALLWORLD_WORKFULL_TITLE","Все места работы");
define("_SMALLWORLD_SCHOOLFULL_TITLE","Все образовательные учереждения");
define("_SMALLWORLD_INTERESTS_TITLE","Интересы и контакты");
define("_SMALLWORLD_MORE","..больше");

/*-------------- Upload form --------------------*/
define('_SMALLWORLD_UPLOAD_HOWTO','Все картинки вашего альбома показаны здесь, и вы можете использовать это средство для загрузки.<br><br>Нажмите на зеленую, чтобы загрузить файл(ы), выберите ваши картинки и загрузите с помощью:<br>1) Один за одним, используя <img src="images/icon_start.png" style="display: inline-block;height:13px;"/> иконку.<br>2) Выберите несколько или Перетащите* файлы на зеленую область загрузки (* в настоящий момент не работает в IE) и нажмите Начать все<br><br>Примечание: Если вы выберите тип файла, отличный от картинок, скрипт завершит работу. Размер картинки - 5 мегабайт максимум.<br><br>');
define('_SMALLWORLD_UPLOADTITLE','Заголовок картинки');
define('_SMALLWORLD_UPLOADDESC','Описание картинки');
define('_SMALLWORLD_UPLOAD_TITLE','Загрузить картинки в ваш альбом');
define('_SMALLWORLD_UPLOADTEXT','Начать загрузку');
define('_SMALLWORLD_UPLOADFILESTEXT','Выбрать картинку(и)');
define('_SMALLWORLD_IMGDESCRIPTION','Описание');
define('_SMALLWORLD_IMGTITLE','Заголовок фото');
define('_SMALLWORLD_IMAGE_EDIT_TITLE','Отредактируйте описание, где необходимо.');
define("_SMALLWORLD_WELCOME_TITLE","Добро пожаловать");
define("_SMALLWORLD_WELCOMETEXT",", приветствую. Надеюсь, вам тут будет приятно остаться.");
define("_SMALLWORLD_UPLOADEDSOMEIMAGES"," загрузил несколько фото <br/> Нажмите на картинку, чтобы посмотреть в оригинальном размере, или этот линк<br/>чтобы открыть галлерею.");
define("_SMALLWORLD_IMAGES_START","Запустить");
define("_SMALLWORLD_IMAGES_CANCEL","Отменить");
define("_SMALLWORLD_IMAGES_DELETE","Удалить");
define("_SMALLWORLD_IMAGES_STARTALL","Показать все");
define("_SMALLWORLD_IMAGES_CANCELALL","Отменить все");
define("_SMALLWORLD_IMAGES_DELETEALL","Удалить все");

/*-------------- Image gallery -------------*/
define("_SMALLWORLD_ALBUMTITLETEXT","Закрыть альбом");
define("_SMALLWORLD_TITLEHEADER","Фото альбом");
define("_SMALLWORLD_NOIMAGES"," еще нет фото");
define("_SMALLWORLD_GOTOUPLOADIMAGE"," Загрузить или удалить фото");
define("_SMALLWORLD_EDITDESCRIPTION","Редактировать описание");
define("_SMALLWORLD_NOTFRIENDNOIMAGES","Вы можете просматривать альбомы друзей только !");
define("_SMALLWORLD_GALLERY_DOWNLOADORIGINAL","Скачать оригинал");
define("_SMALLWORLD_GALLEY_NEXTPAGE","Следущее");
define("_SMALLWORLD_GALLEY_PREVIOUSPAGE","Предыдущее");


/*-------------- Search ----------------*/
define("_SMALLWORLD_SEARCHMEMBER","Поиск по имени пользователя или реальному имени");

/*---------------- Messages (jSon, alerts) -------------------*/
define("_SMALLWORLD_FRIENDSHIPFOLLOW","Следует ");
define("_SMALLWORLD_FRIENDSHIPREQUESTS","Отношение: ");
define("_SMALLWORLD_JSON_ADDFRIEND","Запрос был послан ");
define("_SMALLWORLD_JSON_CANCEL_ADDFRIEND","Вы отменили запрос ");
define("_SMALLWORLD_JSON_DELETE_FRIEND_START","Вы удалили ");
define("_SMALLWORLD_JSON_DELETE_FRIEND_END"," как друг");
define("_SMALLWORLD_JSON_REQUEST_PENDING","<br><br>Запрос в друзья ждет решения");

define("_SMALLWORLD_JSON_FOLLOWINGFRIEND","Вы сейчас следуете за: ");
define("_SMALLWORLD_JSON_FOLLOWINGFRIEND_DESC","<br><br>Любые сообщения, он / она напишет в своей ленте появится и в вашей ленте.");
define("_SMALLWORLD_JSON_UNFOLLOWINGFRIEND","Вы больше не следуете: ");
define("_SMALLWORLD_JSON_UNFOLLOWINGFRIEND_DESC","<br><br>Его / ее сообщения больше не будут появляться в вашей ленте.");

define("_SMALLWORLD_JSON_ADDFR_TEXT","Добавить как друга");
define("_SMALLWORLD_JSON_CANCELFR_TEXT","Отменить запрос на добавление в  друзья");
define("_SMALLWORLD_JSON_REMOVEFR_TEXT","Удалить друга");

define("_SMALLWORLD_JSON_FLYES_TEXT","Следовать");
define("_SMALLWORLD_JSON_FLNO_TEXT","Отказаться от следования");

define("_SMALLWORLD_JS_ALREADYVOTED","Вы уже голосовали!");
define("_SMALLWORLD_JS_COMPLAINTSENT","Ваша жалоба была направлена Модератору");
define("_SMALLWORLD_JS_COMPLAINT_ALREADY_SENT","Вы уже подали жалобу на это сообщение!");

/*----------- Indexpage menu --------------*/
define("_SMALLWORLD_HOME","В начало");
define("_SMALLWORLD_PROFILEINDEX","Профиль");
define("_SMALLWORLD_FRIENDSPAGE","Друзья");
define("_SMALLWORLD_GALLERY","Фотки");
define("_SMALLWORLD_CHANGEAVATAR","Сменить аватар");
define("_SMALLWORLD_EDITPROFILE","Профиль");
define("_SMALLWORLD_STATS","Статистика");
define("_SMALLWORLD_INFO","О..");
define("_SMALLWORLD_XIMUSER","IM к ");
/*----------- Wall -----------------------*/
define("_SMALLWORLD_WHATSUP","Что стряслось");
define("_SMALLWORLD_DELUPD","Удалить обновление");
define("_SMALLWORLD_COMMENTWALL","Комментарий ");
define("_SMALLWORLD_DELETECOMMENT","Удалить комментарий");
define("_SMALLWORLD_SECONDSAGO"," секунд назад");
define("_SMALLWORLD_ONEMINUTEAGO","1 минуту назад");
define("_SMALLWORLD_MINUTESAGO"," минут назад");
define("_SMALLWORLD_ONEHOURAGO","1 час назад");
define("_SMALLWORLD_HOURSAGO"," часов назад");
define("_SMALLWORLD_ONEDAYAGO","1 день назад");
define("_SMALLWORLD_DAYSAGO"," дней назад");
define("_SMALLWORLD_ONEWEEKAGO","1 неделю назад");
define("_SMALLWORLD_WEEKSAGO"," недели назад");
define("_SMALLWORLD_ONEMONTHAGO","1 месяц назад");
define("_SMALLWORLD_MONTHSAGO"," месяцев назад");
define("_SMALLWORLD_ONEYEARAGO","1 год назад");
define("_SMALLWORLD_YEARSAGO"," лет спустя");
define("_SMALLWORLD_CLICKIMAGETHUMB","<br/><br/>Нажмите здесь для просмотра в оригинальном размере");
define("_SMALLWORLD_PRIVATEUPDATE","Личное");
define("_SMALLWORLD_PUBLICUPDATE","Общее"); 
define("_SMALLWORLD_UPDATEBUTTONTEXT"," Обновить ");
define("_SMALLWORLD_COMMENTBUTTONTEXT"," Комментарий ");
define("_SMALLWORLD_MOREBUTTONLINK","Еще"); 

/*-------------------- Friends page ---------------*/
define("_SMALLWORLD_FRIENDPAGE","Друзья");
define("_SMALLWORLD_PENDINGUSERS"," ожидаются запросы от следующих пользователей");
define("_SMALLWORLD_ALREADYFRIENDS"," друзья");
define("_SMALLWORLD_YOUFOLLOW"," следует за этими пользователями");
define("_SMALLWORLD_FOLLOWINGYOU","Эти пользователели следуют за ");
define("_SMALLWORLD_NOUSERS","Нет пользователей в этой категории");

/*--------------- mail texts ----------------------*/
define("_SMALLWORLD_MAIL_REGISTERSUBJECT","Новый зарегистрированный пользователь тут ");
define("_SMALLWORLD_MAIL_COMPLAINTSUBJECT","Жалоба поступила тут ");
define("_SMALLWORLD_MAIL_NEWAVATARSUBJECT","Новый аватар загружен тут ");
define("_SMALLWORLD_MAIL_NEWCOMMENT","Новый коммент на ваше сообщение здесь ");
define("_SMALLWORLD_SEEANDREPLYHERE","Посмотреть и ответить на коммент тут");
define("_SMALLWORLD_GOTOSMALLWORLDHERE","Перейти на smallworld заглавную страницу, тут ");

define("_SMALLWORLD_MAIL_COMPLAINT","Жалоба на предупреждение");
define("_SMALLWORLD_COMP_MSG_LNK_DESC","Нажмите здесь, чтобы посмотреть затронутое сообщение");
define("_SMALLWORLD_MAIL_NEWFRIENDFOLLOWER","Новый запрос в друзья или новый пользователь следует за вами");

/* ------------ Inspection & countdown ---------------- */
define("_SMALLWORLD_INSPEC_DESC","Администратор закрыл этот аккаунт для проверки.<br/><br/>Ожидаемое время инспекции закончиться в");
define("_SMALLWORLD_INSPEC_DESC2","Попробуйте еще раз в другое время.");
define("_SMALLWORLD_BDAY_TODAY","Сегодня");
define("_SMALLWORLD_BDAY_ISIN","День рождения: ");
define("_SMALLWORLD_BDAY_YEARS","лет");

/* ------------ Social networks bookmarks ---------------- */
define("_SMALLWORLD_SHARELINK","Переслать");
define("_SMALLWORLD_SHAREBOX_TITLE","Переслать / сохранить");
define("_SMALLWORLD_UPDATEONSITEMETA"," обновлено - ");
define("_SMALLWORLD_BOOKMARK_NOPERM_MESSAGE","Неправильная закладка. Нет разрешения для пересылки!<br><br>Пожалуйста, создайте профиль на smallworld<br><br><a href='register.php'>Регистрация здесь</a>");

/* ------------- Statistics and about ------------------- */
define("_SMALLWORLD_STATS_NEWESTUSERS","Новые пользователи");
define("_SMALLWORLD_STATS_MOSTACTUSERS","Наиболее активные пользователи");
define("_SMALLWORLD_STATS_BESTRATEDUSERS","Лучшие пользователи");
define("_SMALLWORLD_STATS_WORSTRATEDUSERS","Худшие по рейтингу пользователи");
define("_SMALLWORLD_STATS_NOBDAYSTODAY","Сегодня д/р нет");
define("_SMALLWORLD_STATS_BDAYSTODAY","Сегодня отмечают день рождения");
define("_SMALLWORLD_STATS_LIKETHISMODULE","Как вам этот модуль?");

/* ----------------- donate link -------------- */
define("_SMALLWORLD_DONATETEXT"," Пожертвования на кофе здесь ");
?>