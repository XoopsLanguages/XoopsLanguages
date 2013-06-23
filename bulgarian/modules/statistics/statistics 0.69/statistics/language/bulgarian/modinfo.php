<?php
// The name of this module
define("_MI_STATISTICS_NAME","Статистики за портала");

// A brief description of this module
define("_MI_STATISTICS_DESC","Статистики за портала от IBDeeming!  Следене на посещенията, ботове, браузъри, и версиите на различни операционни системи.");

// Block SM Name
define("_MI_STATISTICS_SMNAME1","Статистики");
define("_MI_STATISTICS_SMNAME2","Детайли за посещенията");
define("_MI_STATISTICS_SMNAME3","Показва всички реферали");
// added in 0.60
define("_MI_STATISTICS_SMNAME4","Детайли за блокираните посещения");

// Block b name
define("_MI_STATISTICS_BNAME1","Посещения на портала");
define("_MI_STATISTICS_BNAME2","Топ реферали");
define("_MI_STATISTICS_BNAME3","Посещения от топ реферали");

// Admin menus
define("_MI_STATISTICS_ADMENU2","Обща PHP информация");
define("_MI_STATISTICS_ADMENU3","PHP Разработчици");
define("_MI_STATISTICS_ADMENU4","PHP Конфигурация");
define("_MI_STATISTICS_ADMENU5","PHP Модули");
define("_MI_STATISTICS_ADMENU6","PHP Среда");
define("_MI_STATISTICS_ADMENU7","PHP Променливи");
define("_MI_STATISTICS_ADMENU8","PHP Лиценз");
define("_MI_STATISTICS_ADMENU9","PHP Пълна информация");
define("_MI_STATISTICS_ADMENU10","База с отдалечени адреси");
define("_MI_STATISTICS_ADMENU11","База с реферали");
define("_MI_STATISTICS_ADMENU12","Информация за разделителната способност на потребителите");

// added in version 0.60
// Config Items
define("_MI_REFERERSPAM","СПАМ контрол на рефералите");
define("_MI_ALLOWFILTERIPHITS","Филтриране на посещенията");
define("_MI_FILTERIPLIST","Списък с филтрирани ИП адреси");
define("_MI_BOTIDENTITIES","Индетификация на ботовете");
define("_MI_FORBIDBOTS","Забраннени ботове");
define("_MI_BOTSTOBLOCK","Ботове които да бъдат блокирани");
define("_MI_CUSTOMFORBIDMSG","Ваше съобщение за блокираните");
define("_MI_AUTOPURGEREFERERLIST","Авто-прочистване на базата с рефералите");

// Config Items Description
define("_MI_REFERERSPAMDSC","Изберете тип контрол за СПАМЕРИТЕ.<br>"
                            ."<b>Забранен</b> - Блокиран от Вашия сайт, не се отчита<br>"
							."<b>Игнориране</b> - Блокиран от рефералите, но се отчита и е видим от администраторите<br>"
							."<b>Рефлекция</b> - Пренасочва се към сайта на реферала<br>"
							."<b>Разрешава</b> - Никакъв");
define("_MI_ALLOWFILTERIPHITSDSC","Ще включите ли филтрирането?");
define("_MI_FILTERIPLISTDSC","Въведете IP които не искате да бъдат отчитани като валидни посещения.<br>"
                              ."Въведете всеки ИП адрес разделен с <b>|</b><br>Пример: 111.222.333.444|555.666.777.888<br>"
							  ."Поддръжат се и вариации<br>"
                              ."Пример: ^111.222.333|111.222.333$|123[0-9]*");
define("_MI_BOTIDENTITIESDSC","Въведете име, термин, или * за да отчита различни ботове.<br>"
                              ."Ботове които не се индетифицирани не се отчитат <b>Неизвестни</b> от Вашия портал.<br>"
                              ."Въведете всеки бот разделен с <b>|</b><br>Поддържат се и вариации."
                              ."<br>Пример: bot|^spider|arch$|badbot[a-z]*");
define("_MI_FORBIDBOTSDSC","Ще включите ли блокирането на ботове до портала си?<br><i>Това само блокира "
                            ."ботове описани в настройките на <b>Ботове за блокиране</b>.</i>");
define("_MI_BOTSTOBLOCKDSC","Това е активно само ако в настройките е избрано ДА за <b>Забранени ботове</b><br>"
                            ."Въведете име, термин или * за да блокирате различни ботове/жътвари/проверяващи скриптове за лицензна информация и др.<br>"
                            ."Въведете всеки бот разделен с <b>|</b><br>Допускат се и вариации."
                            ."<br>Пример: bot|^spider|arch$|badbot[a-z]*");
define("_MI_CUSTOMFORBIDMSGDSC","Въведете съобщението което да бъде показвано на блокираният потребител.");
define("_MI_AUTOPURGEREFERERDSC","Настройте тази опция на каквото и да е, без <b>Никога</b> тя ще изчиства списъците на определено време.<br>"
                                 ."Пр. - Настроено е за 6 часа, всичко по-старо от 6 часа ще бъде изтривано.");
// Config Items values
define("_MI_REFERERSPAMFORBIDDEN","Забранени");
define("_MI_REFERERSPAMIGNORE","Игнорирани");
define("_MI_REFERERSPAMREFLECT","Рефлектирани");
define("_MI_REFERERSPAMALLOW","Разрешено");
define("_MI_AUTOPURGENEVER","Никога");
define("_MI_AUTOPURGESIXHOUR","6 часа");
define("_MI_AUTOPURGETWELVEHOUR","12 часа");
define("_MI_AUTOPURGEONEDAY","1 ден");
define("_MI_AUTOPURGEFIVEDAY","5 дни");
?>
