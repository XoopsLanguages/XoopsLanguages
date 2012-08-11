<?php
// $Id: mailusers.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-03-12 andrey3761

//%%%%%%	Модуль админа-MailUsers	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	mailusers.php 	%%%%%
define("_AM_SENDTOUSERS","Отправить сообщение пользователям, которые:");
define("_AM_SENDTOUSERS2","Отправить для:");
define("_AM_GROUPIS","Входят в группу (настраиваемо)");
define("_AM_TIMEFORMAT","(Формат гггг-мм-дд, опционально)");
define("_AM_LASTLOGMIN","Последний раз входили после");
define("_AM_LASTLOGMAX","Последний раз входили до");
define("_AM_REGDMIN","Зарегистрировались после");
define("_AM_REGDMAX","Зарегистрировались до");
define("_AM_IDLEMORE","Последний раз входили более чем X дней назад (опционально)");
define("_AM_IDLELESS","Последний раз входили менее чем X дней назад (опционально)");
define("_AM_MAILOK","Отправить сообщение только пользователям принимающим предупреждения (опционально)");
define("_AM_INACTIVE","Отправить сообщение только неактивным пользователям (опционально)");
define("_AMIFCHECKD","Если это отмечено, то все вышеуказанное и личные сообщения будут игнорироваться");
define("_AM_MAILFNAME","От имени");
define("_AM_MAILFMAIL","От Е-mail (только Е-mail)");
define("_AM_MAILSUBJECT","Тема");
define("_AM_MAILBODY","Сообщение");
define("_AM_MAILTAGS","Используемые теги:");
define("_AM_MAILTAGS1","{X_UID} будет отображен как номер пользователя");
define("_AM_MAILTAGS2","{X_UNAME} будет отображен как имя пользователя");
define("_AM_MAILTAGS3","{X_UEMAIL} будет отображен как Е-mail пользователя");
define("_AM_MAILTAGS4","{X_UACTLINK} будет отображен как ссылка на активацию пользователя");
define("_AM_SENDTO","Вид отправки");
define("_AM_EMAIL","E-mail");
define("_AM_PM","Личное сообщение");
define("_AM_SENDMTOUSERS","Отправка сообщений пользователям");
define("_AM_SENT","Отправлено пользователям");
define("_AM_SENTNUM","%s - %s (всего: %s пользователей)");
define("_AM_SENDNEXT","Дальше");
define("_AM_NOUSERMATCH","Нет подходящих пользователей");
define("_AM_SENDCOMP","Отправка сообщений выполнена.");

?>