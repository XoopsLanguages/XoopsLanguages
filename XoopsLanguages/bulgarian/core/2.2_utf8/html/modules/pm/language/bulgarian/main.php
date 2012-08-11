<?php
// $Id: main.php,v 1.1.2.6 2005/07/20 08:41:28 mithyt2 Exp $
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Вашите съобщения са изтрити");
define("_PM_PRIVATEMESSAGE","Лични съобщения");
define("_PM_INBOX","Входящи");
define("_PM_FROM","От");
define("_PM_YOUDONTHAVE","Вие нямате лични съобщения");
define("_PM_FROMC","От: ");
define("_PM_SENTC","Изпратено на: "); // The date of message sent
define("_PM_PROFILE","Профил");

// %s is a username
define("_PM_PREVIOUS","Предишно съобщение");
define("_PM_NEXT","Следващо съобщение");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Съжаляваме! Вие не сте регистриран потребител.");
define("_PM_REGISTERNOW","Регистрирайте се!");
define("_PM_GOBACK","Назад");
define("_PM_USERNOEXIST","Избраният потребител не съществува в базата ни.");
define("_PM_PLZTRYAGAIN","Моля, проверете името и опитайте отново.");
define("_PM_MESSAGEPOSTED","Вашето съобщение е изпратено");
define("_PM_CLICKHERE","От тук можете да видите Вашите лични съобщения");
define("_PM_ORCLOSEWINDOW","Или затворете прозореца.");
define("_PM_USERWROTE","%s писа:");
define("_PM_TO","До: ");
define("_PM_SUBJECTC","Относно: ");
define("_PM_MESSAGEC","Съобщение: ");
define("_PM_CLEAR","Изчисти");
define("_PM_CANCELSEND","Отказва изпращането");
define("_PM_SUBMIT","Изпрати");
define("_PM_SAVEINOUTBOX","Ще запазите ли копие при Вас?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Относно");
define("_PM_DATE","Дата");
define("_PM_NOTREAD","Ново");
define("_PM_SEND","Изпраща");
define("_PM_DELETE","Изтрива");
define("_PM_TOSAVE","Запазва");
define("_PM_UNSAVE","Нулриа");
define("_PM_EMPTY","Празно");
define("_PM_REPLY","Отговор");
define("_PM_PLZREG","Моля, регистррирайте се за да можете да ползвате тази услуга!");
define("_PM_SAVED_PART","Разрешено Ви е да имате %d в кутията *Запазени* и Вие имате %d съобщения за момента");
define("_PM_SAVED_ALL","Съобщенията са преместени в *Запазени*");
define("_PM_UNSAVED","Съобщенията са премахнати от *Запазени*");
define("_PM_EMPTIED","Кутията е изпразнена");
define("_PM_RUSUREEMPTY","Сигурен ли сте, че искате да изпразните кутията?");
define("_PM_RUSUREDELETE","Сигурен ли сте, че искате да изтриете съобщението(та)?");

define("_PM_ONLINE","На линия");

define("_PM_RECEIVE","RECIEVE");
define("_PM_POST","POST");
define("_PM_READBOX","READBOX");
define("_PM_RSAVEBOX","Получени и записани");
define("_PM_OUTBOX","Изходящи");
define("_PM_SAVEBOX","Запазени");
define("_PM_SENTBOX","Изпратени");
define("_PM_PSAVEBOX","Post_SAVEBOX");
define("_PM_SAVE","Запис");
define("_PM_SAVED","Записани успешно");
define("_PM_TOC","От: ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","Соритране");
define("_PM_ORDER","Ред");
define("_PM_UID","Partner's UID");
define("_PM_TIME","Post DATE");
define("_PM_ASC","ASC");
define("_PM_DESC","DESC");
define("_PM_LIMIT","PMs per Page");
define("_PM_BACKTOBOX","Back to Box");
define("_PM_SORTSUBMIT","Submit");
define("_PM_PREVIOUSP","Previous");
define("_PM_NEXTP","Next");

define("_PM_MAILNOTIFY","%s-Имате ново съобщение от %s");
define("_PM_MAILMESSAGE","Здравейте!\nНово лично съобщение пристигна %s\n\nЗаглавието е\n%s\n\nМожете да го видите от тук\n%s\n\n-----------\nВие получавате това писмо, понеже сте избрали да бъдете известяван при ново съобщение\n\nМожете да го промените от настройките в профила Ви\n%s\n\nМоля, не отговаряйте на това писмо\n\n---------\nПоздравления\n%s\n%s\n%s");

define("_PM_EMAIL","Email");
define("_PM_EMAIL_DESC","%s, Това съобщение е препратено от Вашият профил в ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM","От %s");
define("_PM_EMAIL_TO","До %s");
define("_PM_EMAIL_SUBJECT","[message]%s");
define("_PM_EMAIL_MESSAGE","Съдържание");

define("_PM_ACTION_DONE","Операцията е успешна");
define("_PM_ACTION_ERROR","Операцията пропадна");
?>