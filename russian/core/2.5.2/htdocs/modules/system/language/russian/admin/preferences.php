<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    ru
 * _CHARSET     UTF-8
 * Translator   2010-11-11 andrey3761
 * @version     $Id: preferences.php 5570 2010-10-20 20:51:35Z beckmi $
 */

// dont change
define("_AM_DBUPDATED",_AM_SYSTEM_DBUPDATED);

//Nav
define("_AM_SYSTEM_PREFERENCES_NAV_MAIN", "Конфигурация");
/*define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_GENERAL", "General Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_USERSETTINGS", "User Info Settings");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_METAFOOTER", "Meta Tags and Footer");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_CENSOR", "Word Censoring Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_SEARCH", "Search Options");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_MAILER", "Mail Setup");
define("_AM_SYSTEM_PREFERENCES_NAV_MD_AM_AUTHENTICATION", "Authentication Options");*/

//Tips
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS", "<ul><li>Центр управления параметрами сайта.</li></ul>");
/*

define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_GENERAL", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_USERSETTINGS", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_METAFOOTER", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_CENSOR", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_SEARCH", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_MAILER", "A faire");
define("_AM_SYSTEM_PREFERENCES_NAV_TIPS_MD_AM_AUTHENTICATION", "A faire");
*/
define("_MD_AM_SITEPREF","Конфигурация сайта");
define("_MD_AM_SITENAME","Наименование сайта");
define("_MD_AM_SITENAMEDSC", "");
define("_MD_AM_SLOGAN","Девиз Вашего сайта");
define("_MD_AM_SLOGANDSC", "");
define("_MD_AM_ADMINML","E-mail адрес администратора");
define("_MD_AM_ADMINMLDSC", "");
define("_MD_AM_LANGUAGE","Язык по умолчанию");
define("_MD_AM_LANGUAGEDSC", "");
define("_MD_AM_STARTPAGE","Модуль для Вашей домашней страницы");
define("_MD_AM_STARTPAGEDSC", "");
define("_MD_AM_NONE","Нет");
define("_MD_AM_SERVERTZ","Временная зона сервера");
define("_MD_AM_SERVERTZDSC", "");
define("_MD_AM_DEFAULTTZ","Временная зона по умолчанию");
define("_MD_AM_DEFAULTTZDSC", "");
define("_MD_AM_DTHEME","Тема оформления по умолчанию");
define("_MD_AM_DTHEMEDSC", "");
define("_MD_AM_THEMESET","Пакет темы");
define("_MD_AM_CUSTOM_REDIRECT", "Использовать jGrowl редирект");
define("_MD_AM_CUSTOM_REDIRECT_DESC", "заменить старые редиректы на редиректы, с использованием jQuery");
define("_MD_AM_ANONNAME","Имя для анонимных пользователей");
define("_MD_AM_ANONNAMEDSC", "");
define("_MD_AM_MINPASS","Минимальная требуемая длина пароля");
define("_MD_AM_MINPASSDSC", "");
define("_MD_AM_NEWUNOTIFY","Известить по E-mail при регистрации нового пользователя?");
define("_MD_AM_NEWUNOTIFYDSC", "");
define("_MD_AM_SELFDELETE","Разрешить пользователям удалять свою учетную запись?");
define("_MD_AM_SELFDELETEDSC", "");
define("_MD_AM_LOADINGIMG","Загрузка... рисунок?");
define("_MD_AM_USEGZIP","Использовать gzip сжатие?");
define("_MD_AM_USEGZIPDSC", "");
define("_MD_AM_UNAMELVL","Выберите уровень фильтрации при выборе имени пользователя");
define("_MD_AM_UNAMELVLDSC", "");
define("_MD_AM_STRICT","Жесткий (только буквы и цифры)");
define("_MD_AM_MEDIUM","Минимальный");
define("_MD_AM_LIGHT","Легкий (рекомендуется для многобайтовых символов)");
define("_MD_AM_USERCOOKIE","Имя для 'cookie' пользователя.");
define("_MD_AM_USERCOOKIEDSC","Эти 'cookie' содержат только имя пользователя и сохраняются на компьютере пользователя на год (по желанию пользователя). Если у пользователя есть 'cookie', имя пользователя автоматически впишется в поле ввода при входе.");
define("_MD_AM_USEMYSESS","Использовать обычную сессию");
define("_MD_AM_USEMYSESSDSC","Выберите Да, для использования переменных обычной сессии.");
define("_MD_AM_SESSNAME","Имя сессии");
define("_MD_AM_SESSNAMEDSC","Имя сессии (Действительно только, если 'Использовать обычную сессию' включено)");
define("_MD_AM_SESSEXPIRE","Истечение срока сессий");
define("_MD_AM_SESSEXPIREDSC","Максимальная продолжительность сессии в режиме ожидания в секундах (Действительно только если включен режим использования обычных сессий.)");
define("_MD_AM_BANNERS","Включить поддержку баннеров?");
define("_MD_AM_BANNERSDSC", "");
define("_MD_AM_MYIP","Ваш IP адрес");
define("_MD_AM_MYIPDSC","Этот IP адрес не будет учитываться при нажатии на баннеры");
define("_MD_AM_ALWDHTML","Разрешить HTML тэги во всех сообщениях.");
define("_MD_AM_INVLDMINPASS","Неверное значение для минимальной длинны пароля.");
define("_MD_AM_INVLDUCOOK","Неверное значение для имени 'cookie' пользователя.");
define("_MD_AM_INVLDSCOOK","Неверное значение для имени сессий 'cookie'.");
define("_MD_AM_INVLDSEXP","Неверное значение для времени истечения срока сессий.");
define("_MD_AM_ADMNOTSET","E-mail администратора не введен.");
define("_MD_AM_YES","Да");
define("_MD_AM_NO","Нет");
define("_MD_AM_DONTCHNG","Не изменено!");
define("_MD_AM_REMEMBER","Не забудьте сделать chmod 666 для этого файла, чтобы система могла корректно записать в него данные.");
define("_MD_AM_IFUCANT","Если Вы не измените права, то сможете отредактировать его данные вручную.");

define("_MD_AM_COMMODE","Тип вывода комментариев по умолчанию");
define("_MD_AM_COMMODEDSC", "");
define("_MD_AM_COMORDER","Последовательность вывода комментариев по умолчанию");
define("_MD_AM_COMORDERDSC", "");
define("_MD_AM_ALLOWHTML","Разрешить HTML тэги в сообщениях пользователей?");
define("_MD_AM_DEBUGMODE","Режим отладки");
define("_MD_AM_DEBUGMODEDSC","Некоторые настройки отладки. На работающем сайте Вы должны выключить отладку.");
define("_MD_AM_AVATARALLOW","Разрешить пользователям загружать собственные аватары?");
define("_MD_AM_AVATARALWDSC", "");
define('_MD_AM_AVATARMP','Требуемое минимальное количество сообщений');
define('_MD_AM_AVATARMPDSC','Введите минимальное количество сообщений, после которого можно загружать свой аватар');
define("_MD_AM_AVATARW","Максимальная ширина аватара (точек)");
define("_MD_AM_AVATARWDSC", "");
define("_MD_AM_AVATARH","Максимальная высота аватара (точек)");
define("_MD_AM_AVATARHDSC", "");
define("_MD_AM_AVATARMAX","Максимальный размер файла аватара (байт)");
define("_MD_AM_AVATARMAXDSC", "");
define("_MD_AM_AVATARCONF","Настройки пользовательского аватара");
define("_MD_AM_CHNGUTHEME","Изменить тему оформления для всех пользователей");
define("_MD_AM_NOTIFYTO","Выберите группу, которой будет поступать предупреждение при регистрации новых пользователей");
define("_MD_AM_NOTIFYTODSC", "");
define("_MD_AM_ALLOWTHEME","Разрешить пользователям выбирать тему оформления?");
define("_MD_AM_ALLOWIMAGE","Разрешить пользователям вносить рисунки в сообщения?");

define("_MD_AM_USERACTV","Требуется активация пользователем (рекомендуется)");
define("_MD_AM_AUTOACTV","Автоматическая активация");
define("_MD_AM_ADMINACTV","Активация администраторами");
define("_MD_AM_ACTVTYPE","Выберите тип активации при регистрации пользователя");
define("_MD_AM_ACTVTYPEDSC", "");
define("_MD_AM_ACTVGROUP","Выберите группу которая будет рассылать активацию");
define("_MD_AM_ACTVGROUPDSC","Действительно только если выбрана активация администраторами");
define('_MD_AM_USESSL', 'Использовать SSL для входа?');
define("_MD_AM_USESSLDSC", "");
define('_MD_AM_SSLPOST', 'Имя переменной передаваемой SSL');
define('_MD_AM_SSLPOSTDSC', 'Имя переменной используемое для передачи значения сессии через POST. Если Вы не уверены, то введите любое мало используемое значение.');
define('_MD_AM_DEBUGMODE0','Выключено');
define('_MD_AM_DEBUGMODE1','PHP отладка');
define('_MD_AM_DEBUGMODE2','Отладка SQL/Блоков');
define('_MD_AM_DEBUGMODE3','Отладка шаблонов Smarty');
define('_MD_AM_MINUNAME', 'Требуемая минимальная длина имени пользователя');
define("_MD_AM_MINUNAMEDSC", "");
define('_MD_AM_MAXUNAME', 'Максимальная длина имени пользователя');
define("_MD_AM_MAXUNAMEDSC", "");
define('_MD_AM_GENERAL', 'Основные настройки');
define('_MD_AM_USERSETTINGS', 'Настройка информации о пользователях');
define('_MD_AM_ALLWCHGMAIL', 'Разрешить пользователям менять Е-mail адрес?');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'IP Запрещение');
define('_MD_AM_BADEMAILS', 'Введите e-mail адреса, которые не могут быть использованы учетными записями пользователей');
define('_MD_AM_BADEMAILSDSC', 'В качестве разделителя используйте символ <b>|</b>, не чувствительно к регистру, разрешен regex.');
define('_MD_AM_BADUNAMES', 'Введите имена, которые не могут быть использованы учетными записями пользователей');
define('_MD_AM_BADUNAMESDSC', 'В качестве разделителя используйте символ <b>|</b>, не чувствительно к регистру, разрешен regex.');
define('_MD_AM_DOBADIPS', 'Разрешить IP блокирование?');
define('_MD_AM_DOBADIPSDSC', 'Пользователи с определенными IP адресами не могут просматривать Ваш сайт');
define('_MD_AM_BADIPS', 'Введите IP адреса которые будут блокироваться сайтом.<br />В качестве разделите используйте символ <b>|</b>, не чувствительно к регистру, разрешен regex.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc запретит посещать сайт всем, чьи IP адреса начинаются с aaa.bbb.ccc<br />aaa.bbb.ccc$ запретит посещать сайт всем, чьи IP адреса заканчиваются на aaa.bbb.ccc<br />aaa.bbb.ccc запретит посещать сайт всем, чьи IP адреса содержат aaa.bbb.ccc');
define('_MD_AM_PREFMAIN', 'Конфигурация сайта');
define('_MD_AM_METAKEY', 'МЕТА-тэг ключевых слов');
define('_MD_AM_METAKEYDSC', 'МЕТА-тэг ключевых слов это ряд слов которые определяют содержимое Вашего сайта. Вводите слова разделяя их запятыми или пробелами. (например XOOPS, PHP, SQL, портал)');
define('_MD_AM_METARATING', 'МЕТА-тэг Рейтинга');
define('_MD_AM_METARATINGDSC', 'МЕТА-тэг рейтинга определяет ваш сайт по возрастному уровню и по типу содержания');
define('_MD_AM_METAOGEN', 'Обычный');
define('_MD_AM_METAO14YRS', '14 лет');
define('_MD_AM_METAOREST', 'Ограниченный');
define('_MD_AM_METAOMAT', 'Для взрослых');
define('_MD_AM_METAROBOTS', 'МЕТА-тэг роботов');
define('_MD_AM_METAROBOTSDSC', 'МЕТА-тэг для роботов, объявляющий поисковым системам что индексировать паукам');
define('_MD_AM_INDEXFOLLOW', 'Индексировать, Отслеживать');
define('_MD_AM_NOINDEXFOLLOW', 'Не индексировать, Отслеживать');
define('_MD_AM_INDEXNOFOLLOW', 'Индексировать, Не отслеживать');
define('_MD_AM_NOINDEXNOFOLLOW', 'Не индексировать, Не отслеживать');
define('_MD_AM_METAAUTHOR', 'МЕТА-тэг Автора');
define('_MD_AM_METAAUTHORDSC', 'МЕТА-тэг автора задает имя автора публикуемых страниц. Поддерживаются форматы включающие имя, Е-mail адрес Web-мастера, название компании или адрес сайта.');
define('_MD_AM_METACOPYR', 'МЕТА-тэг Авторских прав');
define('_MD_AM_METACOPYRDSC', 'МЕТА-тэг авторского права указывает авторские права на публикуемые у Вас на сайте страницы.');
define('_MD_AM_METADESC', 'МЕТА-тэг описания');
define('_MD_AM_METADESCDSC', 'МЕТА-тэг описания описывает в общем содержание Ваших web-страниц');
define('_MD_AM_METAFOOTER', 'МЕТА-тэги и нижний колонтитул');
define('_MD_AM_FOOTER', 'Нижний колонтитул');
define('_MD_AM_FOOTERDSC', 'Вы должны вводить ссылки с указанием полного пути начиная с http://, иначе ссылки не будут работать корректно на страницах модулей.');
define('_MD_AM_CENSOR', 'Параметры цензуры слов');
define('_MD_AM_DOCENSOR', 'Разрешить цензуру нежелательных слов?');
define('_MD_AM_DOCENSORDSC', 'Вводимые слова будут подвержены цензуре если эта опция включена. Эта опция может быть выключена для ускорения работы сайта.');
define('_MD_AM_CENSORWRD', 'Слова для цензуры');
define('_MD_AM_CENSORWRDDSC', 'Вводите слова, которые проверяются в сообщениях пользователей.<br />В качестве разделите используйте символ <b>|</b>, не чувствительно к регистру.');
define('_MD_AM_CENSORRPLC', 'Плохие слова будут заменены на:');
define('_MD_AM_CENSORRPLCDSC', 'Слова, попавшие под цензуру, будут заменены на введенное в это поле слово');

define('_MD_AM_SEARCH', 'Настройки поиска');
define('_MD_AM_DOSEARCH', 'Разрешить глобальный поиск?');
define('_MD_AM_DOSEARCHDSC', 'Разрешить поиск сообщений/элементов внутри Вашего сайта.');
define('_MD_AM_MINSEARCH', 'Минимальная длина ключевого слова');
define('_MD_AM_MINSEARCHDSC', 'Введите обязательную минимальную длину ключевых слов, вводимых пользователем при операции поиска');
define('_MD_AM_MODCONFIG', 'Настройка параметров модуля');
define('_MD_AM_DSPDSCLMR', 'Показывать условия регистрации?');
define('_MD_AM_DSPDSCLMRDSC', 'Ответьте утвердительно для отображения условий на странице регистрации');
define('_MD_AM_REGDSCLMR', 'Условия регистрации');
define('_MD_AM_REGDSCLMRDSC', 'Введите текст, который будет отображаться в условия регистрации');
define('_MD_AM_ALLOWREG', 'Разрешить регистрацию новых пользователей?');
define('_MD_AM_ALLOWREGDSC', 'Выберите Да, если хотите разрешить регистрацию новых пользователей');
define('_MD_AM_THEMEFILE', 'Обновлять файлы пакета темы оформления из директории themes/ ?');
define('_MD_AM_THEMEFILEDSC', 'Если эта опция разрешена, файлы пакета темы оформления будут обновлены автоматически если будут найдены новые или обновленные файлы в директории themes/ для текущей темы. Вы будете должны выключить эту функцию когда сайт станет общедоступным.');
define('_MD_AM_CLOSESITE', 'Выключить Ваш сайт?');
define('_MD_AM_CLOSESITEDSC', 'Выберите Да, для выключения Вашего сайта, с тем, чтобы только пользователи из выбранных групп имели доступ к сайту. ');
define('_MD_AM_CLOSESITEOK', 'Выберите группы, которым разрешен доступ в то время, когда сайт выключен.');
define('_MD_AM_CLOSESITEOKDSC', 'Пользователи из стандартной группы Web-мастеров всегда имеют доступ.');
define('_MD_AM_CLOSESITETXT', 'Причина выключения сайта');
define('_MD_AM_CLOSESITETXTDSC', 'Текстовое сообщение, которое выводится когда закрыт сайт.');
define('_MD_AM_SITECACHE', 'Кэширование со стороны сайта');
define('_MD_AM_SITECACHEDSC', 'Кэширование всего содержимого сайта на заданное временя для увеличения производительности. Установите кэширование со стороны сайта для переопределения кэширования на уровнях модулей, блоков, и частей модуля, если таковые имеются.');
define('_MD_AM_MODCACHE', 'Кэширования со стороны модулей');
define('_MD_AM_MODCACHEDSC', 'Кэширование содержимого модулей на заданное время для увеличения производительности. Установите кэширование со стороны модулей для переопределения уровня кэширования частей модуля, если таковые имеются.');
define('_MD_AM_NOMODULE', 'Нет модулей для кэширования.');
define('_MD_AM_DTPLSET', 'Набор шаблонов по умолчанию');
define("_MD_AM_DTPLSETDSC", "");
define('_MD_AM_SSLLINK', 'Адрес расположения страницы SSL-аутентификации');
define("_MD_AM_SSLLINKDSC", "");

// added for mailer
define("_MD_AM_MAILER","Настройка почты");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","Обратный адрес");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","Имя отправителя");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","От пользователя");
define("_MD_AM_MAILFROMUIDDESC","Если система отправляет личное сообщение, какой пользователь будет отображен как отправитель этого сообщения?");
define("_MD_AM_MAILERMETHOD","Метод доставки почты");
define("_MD_AM_MAILERMETHODDESC","Метод, используемый для доставки почты. По умолчанию \"mail\", используйте другие только в случае, если этот метод не работает.");
define("_MD_AM_SMTPHOST","SMTP-сервер(а)");
define("_MD_AM_SMTPHOSTDESC","Список SMTP серверов к которым будет выполняться попытка соединения.");
define("_MD_AM_SMTPUSER","SMTP-пользователь");
define("_MD_AM_SMTPUSERDESC","Имя пользователя для соединения с SMTP-сервером при необходимости аутентификации.");
define("_MD_AM_SMTPPASS","SMTP-пароль");
define("_MD_AM_SMTPPASSDESC","Пароль для соединения с SMTP-сервером при необходимости аутентификации.");
define("_MD_AM_SENDMAILPATH","Путь к программе sendmail");
define("_MD_AM_SENDMAILPATHDESC","Путь к программе sendmail (или ее подмене) на Web-сервере.");
define("_MD_AM_THEMEOK","Выбираемые темы оформления");
define("_MD_AM_THEMEOKDSC","Выберите темы оформления которые пользователи могут установить у себя");


// SOAP Clauses
define("_MD_AM_SOAP_CLIENT", "SOAP - SOAP API");
define("_MD_AM_SOAP_CLIENTDESC","This is the address of the soap server.");
define("_MD_AM_SOAP_PROVISION", "SOAP - Provision");
define("_MD_AM_SOAP_PROVISIONDESC","If you want the new user provisioned, say 'yes'");
define("_MD_AM_SOAP_PROVISIONGROUP", "SOAP - Rank to Provision");
define("_MD_AM_SOAP_PROVISIONGROUPDESC","This is the ranks a new user from the soap server is put in.");

define("_MD_AM_SOAP_WSDL", "SOAP - SOAP WSDL");
define("_MD_AM_SOAP_WSDLDESC","If you need a wdsl soap service enable this option.");
define("_MD_AM_SOAP_USERNAME", "SOAP - SOAP Username");
define("_MD_AM_SOAP_USERNAMEDESC","This is the username of your account on the soap server.");
define("_MD_AM_SOAP_PASSWORD", "SOAP - SOAP Password");
define("_MD_AM_SOAP_PASSWORDDESC","If you need a password with the soap service put it in here.");
define("_MD_AM_SOAP_KEEPCLIENT", "SOAP - Client Alive");
define("_MD_AM_SOAP_KEEPCLIENTDESC","Keep The Soap Client Alive.");
define("_MD_AM_SOAP_FILTERPERSON", "SOAP - Special Accounts");
define("_MD_AM_SOAP_FILTERPERSONDESC","Special Accounts that use Xoops Authentication.");
define("_MD_AM_SOAP_CLIENTPROXYHOST", "SOAP - Proxy Hostname");
define("_MD_AM_SOAP_CLIENTPROXYHOSTDESC","SOAP Servers Proxy Server.");
define("_MD_AM_SOAP_CLIENTPROXYPORT", "SOAP - Proxy port");
define("_MD_AM_SOAP_CLIENTPROXYPORTDESC","SOAP Servers Proxy Server Port Number <br>ie: 0 - 65535");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAME", "SOAP - Proxy Username");
define("_MD_AM_SOAP_CLIENTPROXYUSERNAMEDESC","SOAP Servers Proxy Server Username");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORD", "SOAP - Proxy Password");
define("_MD_AM_SOAP_CLIENTPROXYPASSWORDDESC","SOAP Servers Proxy Server Password.");
define("_MD_AM_SOAP_SOAP_TIMEOUT", "SOAP - SOAP Timeout");
define("_MD_AM_SOAP_SOAP_TIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUT", "SOAP - SOAP Response Timeout");
define("_MD_AM_SOAP_SOAP_RESPONSETIMEOUTDESC","Keep The Soap Query Alive for <strong>xx</strong> seconds.");
define("_MD_AM_SOAP_FIELDMAPPING","Xoops-Auth server fields mapping");
define("_MD_AM_SOAP_FIELDMAPPINGDESC","Describe here the mapping between the Xoops database field and the LDAP Authentication system field." .
		"<br><br>Format [Xoops Database field]=[Auth system SOAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!");


// Константы аутентификации Xoops
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "База Данных XOOPS");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "Стандартная директория LDAP ");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy");
define("_MD_AM_AUTH_CONFOPTION_SOAP", "Xoops Soap аутентификация");
define("_MD_AM_AUTHENTICATION", "Настройки аутентификации");
define("_MD_AM_AUTHMETHOD", "Метод аутентификации");
define("_MD_AM_AUTHMETHODDESC", "Какой из методов аутентификации вам подходит чтобы использовать его для подключения пользователей.");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Название Почтового поля");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","Имя атрибута E-mail в вашей LDAP директории.");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - Название Общего поля в вашей LDAP директории");
define("_MD_AM_LDAP_NAME_ATTR_DESC","Имя атрибута Общего поля .");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - Название области Фамилия");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","Имя атрибута фамилия в вашей LDAP директории.");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Название поля Имя");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","Название данного атрибута в вашей LDAP директории.");
define("_MD_AM_LDAP_BASE_DN", "LDAP - База DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "База DN (Различительных имен) в вашей LDAP директории.");
define("_MD_AM_LDAP_PORT","LDAP - Номер Порта");
define("_MD_AM_LDAP_PORT_DESC","Номер порта нуждающегося в доступе к вашей LDAP директории на сервере.");
define("_MD_AM_LDAP_SERVER","LDAP - Имя Сервера");
define("_MD_AM_LDAP_SERVER_DESC","Название вашей LDAP-директории на сервере.");

define("_MD_AM_LDAP_MANAGER_DN", "DN менеджер LDAP");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "DN пользователя позволяет осуществлять поиск(напр. manager)");
define("_MD_AM_LDAP_MANAGER_PASS", "Пароль менеджера LDAP");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "Пароль пользователя позволяет осуществлять поиск");
define("_MD_AM_LDAP_VERSION", "Версия протокола LDAP");
define("_MD_AM_LDAP_VERSION_DESC", "Версия LDAP протокола : 2 или 3");
define("_MD_AM_LDAP_USERS_BYPASS", "Пользователь(и) XOOPS обходящие LDAP аутентификацию");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "Пользователь(и) которые могут обходить LDAP авторизацию. Вход в систему осуществляется непосредственно в XOOPS<br>Разделите каждый логин(никнейм) с помощью <b>|</b>");

define("_MD_AM_LDAP_USETLS", "Использовать TLS соединение");
define("_MD_AM_LDAP_USETLS_DESC", "Использовать TLS (Transport Layer Security) соединение. TLS использует обычно 389 порт<BR>" .
								  "также версия LDAP протокола должна быть установлена 3.");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","LDAP атрибут используемый для поиска пользователя");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","Когда логин для доступа в DN установлен <b>ДА</b>, то он должен соответствовать учетной записи XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "Логин для доступа в DN");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "Логины учетных записей XOOPS используются для входа в LDAP DN (напр.: uid=<loginname>,dc=xoops,dc=org)<br>Вход будет прочитан на LDAP Сервере без поиска");

define("_MD_AM_LDAP_FILTER_PERSON", "Фильтр поиска LDAP запроса для нахождения пользователя");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Специальный LDAP фильтр для нахождения пользователя. @@loginname@@ заменяется на пользовательский логин <br> ДОЛЖНО БЫТЬ ПУСТЫМ ЕСЛИ ВЫ НЕ ЗНАЕТЕ ЧТО ДЕЛАЕТЕ' !" .
		"<br>Напр.: (&(objectclass=person)(samaccountname=@@loginname@@)) для AD" .
		"<br>Напр.: (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) для LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "Доменное имя");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Доменное имя Windows. Только для ADS и NT Серверов");

define("_MD_AM_LDAP_PROVIS", "Управление учетными записями XOOPS");
define("_MD_AM_LDAP_PROVIS_DESC", "Создать базу данных пользователей XOOPS если она не существует");

define("_MD_AM_LDAP_PROVIS_GROUP", "Группа по умолчанию");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "Новый зарегистрированный пользователь является преемником этих групп");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "Распределение областей сервера");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "Опишите в этой области распределения между базой данных XOOPS и системной областью Аутентификации LDAP." .
		"<br><br>Формат [поля базы данных XOOPS]=[атрибуты системы авторизации LDAP]" .
		"<br>например : email=mail" .
		"<br>Разделите каждый с помощью <b>|</b>" .
		"<br><br>!! Только для опытных пользователей !!");
		
define("_MD_AM_LDAP_PROVIS_UPD", "Поддерживать учетные записи xoops");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "Cинхронизировать учетные записи пользователей XOOPS с Сервером Аутентификации");


define("_MD_AM_CPANEL", "Панель управления GUI");
define("_MD_AM_CPANELDSC", "Выберите  интерфейс раздела Администрирования");

define("_MD_AM_WELCOMETYPE", "Отправка приветственного сообщения");
define("_MD_AM_WELCOMETYPE_DESC", "Способ отправки приветственного сообщения пользователю при его успешной регистрации.");
define("_MD_AM_WELCOMETYPE_EMAIL", "E-mail");
define("_MD_AM_WELCOMETYPE_PM", "Сообщение");
define("_MD_AM_WELCOMETYPE_BOTH", "E-mail и сообщение");

define("_MD_AM_MODULEPREF", "Конфигурация модулей");

// Preference module system

define("_AM_SYSTEM_PREFERENCES_SETTINGS", "Конфигурация модуля системы");
?>