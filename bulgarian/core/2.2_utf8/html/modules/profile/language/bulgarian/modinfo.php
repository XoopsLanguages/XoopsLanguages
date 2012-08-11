<?php
// $Id: modinfo.php,v 1.1.2.13 2005/07/05 17:33:07 mithyt2 Exp $
define("_PROFILE_MI_NAME","Разширени профили");
define("_PROFILE_MI_DESC","Модул за управление на полетата в потребителските профили");

//Main menu links
define("_PROFILE_MI_EDITACCOUNT","Редактира профил");
define("_PROFILE_MI_CHANGEPASS","Смяна на паролата");
define("_PROFILE_MI_CHANGEMAIL","Смяна на Email");

//Admin links
define("_PROFILE_MI_INDEX","Начало");
define("_PROFILE_MI_CATEGORIES","Категории");
define("_PROFILE_MI_FIELDS","Полета");
define("_PROFILE_MI_USERS","Потребители");
define("_PROFILE_MI_PERMISSIONS","Права");

//User Profile Category
define("_PROFILE_MI_CATEGORY_TITLE","Потребителски профил");
define("_PROFILE_MI_CATEGORY_DESC","За този потребител полетата");

//User Profile Fields
define("_PROFILE_MI_AIM_TITLE","AIM");
define("_PROFILE_MI_AIM_DESCRIPTION","America Online Instant Messenger Client ID");
define("_PROFILE_MI_ICQ_TITLE","ICQ");
define("_PROFILE_MI_ICQ_DESCRIPTION","ICQ Instant Messenger ID");
define("_PROFILE_MI_YIM_TITLE","YIM");
define("_PROFILE_MI_YIM_DESCRIPTION","Yahoo! Instant Messenger ID");
define("_PROFILE_MI_MSN_TITLE","MSN");
define("_PROFILE_MI_MSN_DESCRIPTION","Microsoft Messenger ID");
define("_PROFILE_MI_FROM_TITLE","Местоживеене");
define("_PROFILE_MI_FROM_DESCRIPTION","");
define("_PROFILE_MI_SIG_TITLE","Подпис");
define("_PROFILE_MI_SIG_DESCRIPTION","Тук можете да напишете подписа си, който ще се добавя в изказванията в форумите, коментари и др.");
define("_PROFILE_MI_VIEWEMAIL_TITLE","Разрешавам на другите потребители да виждат email адреса ми");
define("_PROFILE_MI_BIO_TITLE","Допълнително инфо");
define("_PROFILE_MI_BIO_DESCRIPTION","");
define("_PROFILE_MI_INTEREST_TITLE","Интереси");
define("_PROFILE_MI_INTEREST_DESCRIPTION","");
define("_PROFILE_MI_OCCUPATION_TITLE","Длъжност");
define("_PROFILE_MI_OCCUPATION_DESCRIPTION","");
define("_PROFILE_MI_URL_TITLE","Страница");
define("_PROFILE_MI_URL_DESCRIPTION","");
define("_PROFILE_MI_NEWEMAIL_TITLE","Нов Email");
define("_PROFILE_MI_NEWEMAIL_DESCRIPTION","Variable for storing a proposed new email address until confirmation comes from a mail sent to the old one. See modules/profile/changemail.php");

//Configuration categories
define("_PROFILE_MI_CAT_SETTINGS","Общи настройки");
define("_PROFILE_MI_CAT_SETTINGS_DSC","");
define("_PROFILE_MI_CAT_USER","Потребителски настройки");
define("_PROFILE_MI_CAT_USER_DSC","");

//Configuration items
define("_PROFILE_MI_PROFILE_SEARCH","Показва последните изказвания/публикации от потребителя");
define("_PROFILE_MI_MAX_UNAME","Макс. дължина на потреб. име");
define("_PROFILE_MI_MAX_UNAME_DESC","От тук се оказва колко може да бъде дълго потреб. име");
define("_PROFILE_MI_MIN_UNAME","Минимум дължина на потреб. име");
define("_PROFILE_MI_MIN_UNAME_DESC","От тук се оказва колко може да бъде късо потреб. име");
define("_PROFILE_MI_DISPLAY_DISCLAIMER","Да показва ли правилата");
define("_PROFILE_MI_DISPLAY_DISCLAIMER_DESC","Ако е разрешено, правилата ще се показват при всяка регистрация");
define("_PROFILE_MI_DISCLAIMER","Правилата");
define("_PROFILE_MI_DISCLAIMER_DESC","Този текст ще се зарежда, ако е разрешено по-горе");
define("_PROFILE_MI_BAD_UNAMES","Въведете имената които не могат да бъдат избирани от потребители");
define("_PROFILE_MI_BAD_UNAMES_DESC","Разделете всяко с <b>|</b>, няма значени от Главни/малки.");
define("_PROFILE_MI_BAD_EMAILS","Въведете email адресите, които не могат да бъдат избирани от потребителите");
define("_PROFILE_MI_BAD_EMAILS_DESC","РАзделете всеки с <b>|</b>, няма значени от Главни/малки.");
define("_PROFILE_MI_MINPASS","Минимална дължина на паролата");
define("_PROFILE_MI_NEWUNOTIFY","Да известява ли по пощата когато нов потребител се регистрира?");
define("_PROFILE_MI_NOTIFYTO","Изберете групата до която да се изпраща известието");
define("_PROFILE_MI_ACTVTYPE","Изберете режим на активиране за новите потребители");
define("_PROFILE_MI_USERACTV","Изисква активиране от потребителя (препоръчваме)");
define("_PROFILE_MI_AUTOACTV","Активира се автоматично");
define("_PROFILE_MI_ADMINACTV","Активиране от Администраторите");
define("_PROFILE_MI_ACTVGROUP","Изберете групата до която ще бъде изпращана активацията");
define("_PROFILE_MI_ACTVGROUP_DESC","Валдино само когато е избрано 'Активиране от Администраторите'");
define("_PROFILE_MI_UNAMELVL","Изберете ниво на стриктност за потреб. име");
define("_PROFILE_MI_STRICT","Стриктно (само букви и числа)");
define("_PROFILE_MI_MEDIUM","Средно");
define("_PROFILE_MI_LIGHT","Леко (препоръчва се само за китайски, арабски, япоснки и др.)");
define("_PROFILE_MI_ALLOWREG","Разрешена ли е регистрацията на нови потребители?");
define("_PROFILE_MI_ALLOWREG_DESC","Изберете да за да разрешите регистрацията");
define("_PROFILE_MI_AVATARALLOW","Разрешавате ли качването на лични аватари?");
define("_PROFILE_MI_AVATARALLOW_DESC","");
define("_PROFILE_MI_AVATARWIDTH","Макс. ширина на аватара (pixel)");
define("_PROFILE_MI_AVATARWIDTH_DESC","");
define("_PROFILE_MI_AVATARHEIGHT","Макс. височина на аватара (pixel)");
define("_PROFILE_MI_AVATARHEIGHT_DESC","");
define("_PROFILE_MI_AVATARMAX","Размер на файла с аватара (bytes)");
define("_PROFILE_MI_AVATARMAX_DESC","");
define("_PROFILE_MI_SELFDELETE","Разрешавате ли на потребители да трият профилите си?");
define("_PROFILE_MI_SELFDELETE_DESC","");
define("_PROFILE_MI_AVATARMINPOSTS","Минимален борй изказвания");
define("_PROFILE_MI_AVATARMINPOSTS_DESC","Въведете минимума за изказвания преди качването на аватар");
define("_PROFILE_MI_ALLOWCHGMAIL","Разрешавате ли на потребителите да сменят email адреса си?");
define("_PROFILE_MI_ALLOWCHGMAIL_DESC","");
define("_PROFILE_MI_ALLOWVIEWACC","Разрешвате преглед на профила");
define("_PROFILE_MI_ALLOWVIEWACC_DESC","Individual fields can be set visible or invisible to users in fields administration,<br />but if you want to allow access to other users' accounts for certain groups only,<br /> while still allowing anonymous users to register,<br /> select the groups here");

//Pages
define("_PROFILE_MI_PAGE_INFO","Потреб. инфо");
define("_PROFILE_MI_PAGE_EDIT","Редактира потребител");
define("_PROFILE_MI_PAGE_SEARCH","Търсене");
?>