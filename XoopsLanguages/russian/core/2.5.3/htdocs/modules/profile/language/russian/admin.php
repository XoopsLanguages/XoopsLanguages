<?php
// $Id: admin.php 4751 2010-05-01 15:35:45Z trabis $
// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: 2009-04-22 andrey3761

define("_PROFILE_AM_FIELD", "Поле");
define("_PROFILE_AM_FIELDS", "Поля");
define("_PROFILE_AM_CATEGORY", "Категории");
define("_PROFILE_AM_STEP", "Шаги регистрации");

define("_PROFILE_AM_SAVEDSUCCESS", "%s успешно сохранено");
define("_PROFILE_AM_DELETEDSUCCESS", "%s успешно удалено");
define("_PROFILE_AM_RUSUREDEL", "Вы действительно хотите удалить %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "Поле не сконфигурировано.");

define("_PROFILE_AM_ADD", "Добавление");
define("_PROFILE_AM_EDIT", "Редактирование");
define("_PROFILE_AM_TYPE", "Тип поля");
define("_PROFILE_AM_VALUETYPE", "Тип значения");
define("_PROFILE_AM_NAME", "Имя");
define("_PROFILE_AM_TITLE", "Наименование");
define("_PROFILE_AM_DESCRIPTION", "Описание");
define("_PROFILE_AM_REQUIRED", "Обязательное?");
define("_PROFILE_AM_MAXLENGTH", "Максимальная длина");
define("_PROFILE_AM_WEIGHT", "Вес");
define("_PROFILE_AM_DEFAULT", "По умолчанию");
define("_PROFILE_AM_NOTNULL", "Не пустое?");

define("_PROFILE_AM_ARRAY", "Массив");
define("_PROFILE_AM_EMAIL", "E-mail");
define("_PROFILE_AM_INT", "Число");
define("_PROFILE_AM_TXTAREA", "Блок текста");
define("_PROFILE_AM_TXTBOX", "Текстовое поле");
define("_PROFILE_AM_URL", "Адрес");
define("_PROFILE_AM_OTHER", "Другое");
define("_PROFILE_AM_FLOAT", "Floating Point");
define("_PROFILE_AM_DECIMAL", "Decimal Number");
define("_PROFILE_AM_UNICODE_ARRAY", "Unicode Array");
define("_PROFILE_AM_UNICODE_EMAIL", "Unicode Email");
define("_PROFILE_AM_UNICODE_TXTAREA", "Unicode Text Area");
define("_PROFILE_AM_UNICODE_TXTBOX", "Unicode Text field");
define("_PROFILE_AM_UNICODE_URL", "Unicode URL");

define("_PROFILE_AM_PROF_VISIBLE_ON", "Поле отображается в профиле этих групп (Опубликованные поля у групп)");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "Группы видящие данные из поля (доступ для чтения)");
define("_PROFILE_AM_PROF_VISIBLE", "Видимость поля");
define("_PROFILE_AM_PROF_EDITABLE", "Группы с доступом для редактирования поля (доступ для редактирования)");
define("_PROFILE_AM_PROF_REGISTER", "Показывать поле при регистрации");
define("_PROFILE_AM_PROF_SEARCH", "Группы, которые могут осуществлять поиск по этому полю (доступ для поиска)");
define("_PROFILE_AM_PROF_ACCESS", "Группы с доступом к профилю");
define('_PROFILE_AM_PROF_ACCESS_DESC',
'<p>Вы можете установить права просмотра чужих профилей для пользователей различных групп, например:</p>
<ul>
<li>Если Вы хотите, что анонимные пользователи НЕ могли просматривать любой профиль, снимите все галочки напротив группы анонимных пользователей.</li>
<li>Если Вы хотите, чтобы пользователи, принадлежащие к группе "пользователи", могли просматривать ТОЛЬКО профили администраторов, поставьте напротив галочку около группы "Администраторы".</li>
</ul>');

define("_PROFILE_AM_FIELDVISIBLE", "Поле ");
define("_PROFILE_AM_FIELDVISIBLEFOR", " видимое для ");
define("_PROFILE_AM_FIELDVISIBLEON", " отображаемое в профиле ");
define("_PROFILE_AM_FIELDVISIBLETOALL", "- Всех");
define("_PROFILE_AM_FIELDNOTVISIBLE", "не видимое");

define("_PROFILE_AM_CHECKBOX", "Выбираемое поле");
define("_PROFILE_AM_GROUP", "Членство в группах");
define("_PROFILE_AM_GROUPMULTI", "Выбор нескольких групп");
define("_PROFILE_AM_LANGUAGE", "Выбор языка");
define("_PROFILE_AM_RADIO", "Кнопки переключения");
define("_PROFILE_AM_SELECT", "Выбор из списка");
define("_PROFILE_AM_SELECTMULTI", "Выбор нескольких записей");
define("_PROFILE_AM_TEXTAREA", "Область ввода текста");
define("_PROFILE_AM_DHTMLTEXTAREA", "Область ввода текста (DHTML)");
define("_PROFILE_AM_TEXTBOX", "Текстовое поле");
define("_PROFILE_AM_TIMEZONE", "Часовой пояс");
define("_PROFILE_AM_YESNO", "Выбор Да/Нет");
define("_PROFILE_AM_DATE", "Дата");
define("_PROFILE_AM_AUTOTEXT", "Авто-текст");
define("_PROFILE_AM_DATETIME", "Дата и время");
define("_PROFILE_AM_LONGDATE", "Длинная дата");

define("_PROFILE_AM_ADDOPTION", "Добавить опцию");
define("_PROFILE_AM_REMOVEOPTIONS", "Удалить опцию");
define("_PROFILE_AM_KEY", "Ключ");
define("_PROFILE_AM_VALUE", "Значение");

// User management
define("_PROFILE_AM_EDITUSER", "Редактирование пользователя");
define("_PROFILE_AM_SELECTUSER", "Выберите пользователя");
define("_PROFILE_AM_ADDUSER","Добавить пользователя");
define("_PROFILE_AM_THEME","Тема");
define("_PROFILE_AM_RANK","Ранг");
define("_PROFILE_AM_USERDONEXIT","Пользователь не существует!");
define("_PROFILE_MA_USERLEVEL", "Состояние учетной записи");

define("_PROFILE_MA_ACTIVE", "Активировано");
define("_PROFILE_MA_INACTIVE", "Не активировано");
define("_PROFILE_AM_USERCREATED", "Пользователь создан");

define("_PROFILE_AM_CANNOTDELETESELF", "Удаление вашей собственной учетной записи не позволяется - используйте вашу страницу конфигурации, чтобы удалить вашу собственную учетную запись");
define("_PROFILE_AM_CANNOTDEACTIVATEWEBMASTERS", "Отключение учетной записи Web-мастера не позволяется");

define("_PROFILE_AM_NOSELECTION", "Пользователь не выбран");
define("_PROFILE_AM_USER_ACTIVATED", "Пользователь активирован");
define("_PROFILE_AM_USER_DEACTIVATED", "Пользователь деактивирован");
define("_PROFILE_AM_USER_NOT_ACTIVATED", "Ошибка: Пользователь не активирован");
define("_PROFILE_AM_USER_NOT_DEACTIVATED", "Ошибка: Пользователь не отключается");

define("_PROFILE_AM_STEPNAME", "Наименование шага");
define("_PROFILE_AM_STEPORDER", "Вес шага");
define("_PROFILE_AM_STEPSAVE", "Сохранить шаг");
define("_PROFILE_AM_STEPINTRO", "Описание шага");

?>