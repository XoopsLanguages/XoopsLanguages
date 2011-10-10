<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ru
 * _CHARSET     UTF-8
 * Translator   2011-10-10 andrey3761
 * @version     $Id: users.php 5608 2010-10-23 17:36:57Z trabis $
 */

// Navigation
define("_AM_SYSTEM_USERS_NAV_MAIN","Управление пользователями");
define("_AM_SYSTEM_USERS_NAV_ADVANCED_SEARCH","Расширенный поиск");
define("_AM_SYSTEM_USERS_NAV_ADD_USER","Добавление пользователя");
define("_AM_SYSTEM_USERS_NAV_EDIT_USER","Редактировать пользователя");
define("_AM_SYSTEM_USERS_NAV_DELETE_USER","Удалить пользователя");

// Tips
define("_AM_SYSTEM_USERS_NAV_TIPS","
<ul>
<li>Здесь Вы сможете управлять зарегестрированными пользователями вашего сайта</li>
</ul>");

// Main
define("_AM_SYSTEM_USERS_USER","User");
define("_AM_SYSTEM_USERS_ADMIN","Admin");
define("_AM_SYSTEM_USERS_UID","Uid");
define("_AM_SYSTEM_USERS_STATUS","Статус");
define("_AM_SYSTEM_USERS_NAME","Name");
define("_AM_SYSTEM_USERS_UNAME","Uname");
define("_AM_SYSTEM_USERS_EMAIL","E-mail");
define("_AM_SYSTEM_USERS_EDIT_GROUPS","Редактировать группы");
define("_AM_SYSTEM_USERS_REG_DATE","Дата регистрации");
define("_AM_SYSTEM_USERS_LAST_LOGIN","Последний вход");
define("_AM_SYSTEM_USERS_POSTS","Комментариев/Сообщений");
define("_AM_SYSTEM_USERS_LEVEL","Уровень");
define("_AM_SYSTEM_USERS_ACTION","Действие");
define("_AM_SYSTEM_USERS_FINDUS","Поиск пользователей");
define("_AM_SYSTEM_USERS_AVATAR","Аватар");
define("_AM_SYSTEM_USERS_REALNAME","Настоящее имя");
define("_AM_SYSTEM_USERS_REGDATE","Дата регистрации");
define("_AM_SYSTEM_USERS_PM","ЛС");
define("_AM_SYSTEM_USERS_URL","Адрес сайта");
define("_AM_SYSTEM_USERS_PREVIOUS","Предыдущая");
define("_AM_SYSTEM_USERS_NEXT","Следующая");
define("_AM_SYSTEM_USERS_USERSFOUND","%s пользователь(ей) найдено");
define("_AM_SYSTEM_USERS_ACTUS", "Активных пользователей: %s");
define("_AM_SYSTEM_USERS_INACTUS", "Не активных пользователей: %s");
define("_AM_SYSTEM_USERS_NOFOUND","Пользователи не найдены");
define("_AM_SYSTEM_USERS_ICQ","ICQ");
define("_AM_SYSTEM_USERS_AIM","AIM");
define("_AM_SYSTEM_USERS_YIM","YIM");
define("_AM_SYSTEM_USERS_FACEBOOK","Фейсбук");
define("_AM_SYSTEM_USERS_SKYPE","Скайп");
define("_AM_SYSTEM_USERS_MSNM","MSNM");
define("_AM_SYSTEM_USERS_TIMEZONE","Временная зона");
define("_AM_SYSTEM_USERS_SHOWSIG","Всегда добавлять мою подпись");
define("_AM_SYSTEM_USERS_CDISPLAYMODE","Режим отображения комментариев");
define("_AM_SYSTEM_USERS_CSORTORDER","Режим сортировки комментариев");
define("_AM_SYSTEM_USERS_EXTRAINFO","Дополнительная информация");
define("_AM_SYSTEM_USERS_LOCATION","Местожительство");
define("_AM_SYSTEM_USERS_OCCUPATION","Род занятий");
define("_AM_SYSTEM_USERS_INTEREST","Интересы");
define("_AM_SYSTEM_USERS_URLC","URL contains");
define("_AM_SYSTEM_USERS_LOCATIONC","Местожительство:");
define("_AM_SYSTEM_USERS_OCCUPATIONC","Род занятий:");
define("_AM_SYSTEM_USERS_INTERESTC","Интересы:");
define("_AM_SYSTEM_USERS_LASTLOGMORE","Последний визит был более чем <span style='color:#ff0000;'>X</span> дней назад");
define("_AM_SYSTEM_USERS_LASTLOGLESS","Последний визит был менее че <span style='color:#ff0000;'>X</span> дней назад");
define("_AM_SYSTEM_USERS_REGMORE","Дата регистрации более чем <span style='color:#ff0000;'>X</span> дней назад");
define("_AM_SYSTEM_USERS_REGLESS","Дата регистрации менее чем <span style='color:#ff0000;'>X</span> дней назад");
define("_AM_SYSTEM_USERS_POSTSMORE","Количество сообщений более чем <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_POSTSLESS","Количество сообщений менее чем <span style='color:#ff0000;'>X</span>");
define("_AM_SYSTEM_USERS_SORT","Сортировать по");
define("_AM_SYSTEM_USERS_ORDER","Порядок");
define("_AM_SYSTEM_USERS_LASTLOGIN","Последний вход");
define("_AM_SYSTEM_USERS_ASC","По возростанию");
define("_AM_SYSTEM_USERS_DESC","По убыванию");
define("_AM_SYSTEM_USERS_LIMIT","Количество пользователей на странице");
define("_AM_SYSTEM_USERS_RESULTS", "Результаты поиска");
define("_AM_SYSTEM_USERS_SHOWMAILOK", "Тип пользователей для просмотра");
define("_AM_SYSTEM_USERS_MAILOK","Только пользователи принимающие Е-mail");
define("_AM_SYSTEM_USERS_MAILNG","Только пользователи не принимающие Е-mail");
define("_AM_SYSTEM_USERS_SHOWTYPE", "Тип пользователей для просмотра");
define("_AM_SYSTEM_USERS_ACTIVE","Только активные пользователи");
define("_AM_SYSTEM_USERS_INACTIVE","Только не активные пользователи");
define("_AM_SYSTEM_USERS_BOTH", "Все пользователи");
define("_AM_SYSTEM_USERS_SENDMAIL", "Отправить E-mail");
define("_AM_SYSTEM_USERS_ADD2GROUP", "Добавить пользователей в %s группу");
define("_AM_SYSTEM_USERS_GROUPS", "Группы");
define("_AM_SYSTEM_USERS_ADD_GROUPS", "Добавить группу");
define("_AM_SYSTEM_USERS_DELETE_GROUPS", "Удалить группу");
define("_AM_SYSTEM_USERS_AYSYWTDU","Вы действительно желаете удалить пользователя %s?");
define("_AM_SYSTEM_USERS_BYTHIS","Вся информация об этом пользователе будет удалена.");
define("_AM_SYSTEM_USERS_YES","Да");
define("_AM_SYSTEM_USERS_NO","Нет");
define("_AM_SYSTEM_USERS_YMCACF","Вы должны заполнить все необходимые поля");
define("_AM_SYSTEM_USERS_CNRNU","Не удалось зарегистрировать нового пользователя.");
define("_AM_SYSTEM_USERS_EDEUSER","Редактировать/Удалить пользователя");
define("_AM_SYSTEM_USERS_NICKNAME","Имя пользователя");
define("_AM_SYSTEM_USERS_MODIFYUSER","Редактировать пользователя");
define("_AM_SYSTEM_USERS_DELUSER","Удалить пользователя");
define("_AM_SYSTEM_USERS_GO","Перейти!");
define("_AM_SYSTEM_USERS_ADDUSER","Добавить пользователя");
define("_AM_SYSTEM_USERS_OPTION","Опции");
define("_AM_SYSTEM_USERS_THEME","Тема");
define("_AM_SYSTEM_USERS_AOUTVTEAD","Разрешить другим пользователям видеть этот адрес");
define("_AM_SYSTEM_USERS_RANK","Ранг");
define("_AM_SYSTEM_USERS_NSRA","Специальный ранг не присвоен");
define("_AM_SYSTEM_USERS_NSRID","Нет специальных рангов в базе данных");
define("_AM_SYSTEM_USERS_ACCESSLEV","Уровень доступа");
define("_AM_SYSTEM_USERS_SIGNATURE","Подпись");
define("_AM_SYSTEM_USERS_PASSWORD","Пароль");
define("_AM_SYSTEM_USERS_INDICATECOF","* обязательные поля");
define("_AM_SYSTEM_USERS_NOTACTIVE","Этот пользователь не был активирован. Вы хотите активировать этого пользователя?");
define("_AM_SYSTEM_USERS_UPDATEUSER","Обновление данных о пользователе");
define("_AM_SYSTEM_USERS_USERINFO","Информация пользователя");
define("_AM_SYSTEM_USERS_USERID","Номер пользователя");
define("_AM_SYSTEM_USERS_RETYPEPD","Повторный ввод пароля");
define("_AM_SYSTEM_USERS_CHANGEONLY","(только для изменений)");
define("_AM_SYSTEM_USERS_USERPOST","Сообщения пользователя");
define("_AM_SYSTEM_USERS_STORIES","Статьи");
define("_AM_SYSTEM_USERS_COMMENTS","Комментарии");
define("_AM_SYSTEM_USERS_PTBBTSDIYT","Нажмите на кнопку для синхронизации данных если Вы думаете информация о сообщениях пользователя не соответствует актуальным данным");
define("_AM_SYSTEM_USERS_SYNCHRONIZE","Синхронизация");
define("_AM_SYSTEM_USERS_USERDONEXIT","Пользователь не существует!");
define("_AM_SYSTEM_USERS_STNPDNM","Извините, новые пароли не совпадают. Вернитесь назад и попробуйте снова");
define("_AM_SYSTEM_USERS_CNGTCOM","Не могу получить количество комментариев");
define("_AM_SYSTEM_USERS_CNGTST","Не могу получить количество статей");
define("_AM_SYSTEM_USERS_CNUUSER","Не могу обновить пользователя");
define("_AM_SYSTEM_USERS_CNGUSERID","Не могу прочитать номера пользователей");
define("_AM_SYSTEM_USERS_LIST","Список");
define("_AM_SYSTEM_USERS_NOUSERS", "Нет выбранных пользователей");
define("_AM_SYSTEM_USERS_CNRNU2","Новый пользователь не может быть добавлен в группу: %s.");
define("_AM_SYSTEM_USERS_SEARCH","Поиск");
define("_AM_SYSTEM_USERS_SEARCH_USER","Поиск пользователей:");
define("_AM_SYSTEM_USERS_ADVANCED_SEARCH","Расширенный поиск");
define("_AM_SYSTEM_USERS_EDIT","Редактировать участника");
define("_AM_SYSTEM_USERS_DEL","Удалить участника");
define("_AM_SYSTEM_USERS_DELETE","Удалить");
define("_AM_SYSTEM_USERS_SUBMIT","Отправить");
define("_AM_SYSTEM_USERS_PURGE","Очистить");
define("_AM_SYSTEM_USERS_ADD","Добавить участника");
define("_AM_SYSTEM_USERS_VIEW","Посмотреть информацию учатника");
define("_AM_SYSTEM_USERS_NO_FOUND","Пользователи не найдены");
define("_AM_SYSTEM_USERS_NOT_CONNECT","Never connect");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL","Удалить пользователя: %s");
define("_AM_SYSTEM_USERS_FORM_SURE_DEL2","Удалить");
define("_AM_SYSTEM_USERS_NO_SUPP", "Пользователь не может быть удалён: %s <br />");
define("_AM_SYSTEM_USERS_NO_ADMINSUPP", "Администратор не может быть удалён: %s <br />");
define("_AM_SYSTEM_USERS_ERROR", "Ошибка:<br /><br /> %s");
define("_AM_SYSTEM_USERS_ALLGROUP", "Все группы");
define("_AM_SYSTEM_USERS_ALLUSER", "Все пользователи");
define("_AM_SYSTEM_USERS_ACTIVEUSER", "Только активные пользователи");
define("_AM_SYSTEM_USERS_INACTIVEUSER", "Только не активные пользователи");

// Error
define("_AM_SYSTEM_USERS_PSEUDO_ERROR","Пользователь %s уже существует");
define("_AM_SYSTEM_USERS_MAIL_ERROR","Почтовый ящик %s уже существует");

?>