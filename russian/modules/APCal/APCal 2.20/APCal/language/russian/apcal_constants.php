<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {

define( '_APCAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_APCAL_JS_CALENDAR','calendar-ru_win_.js');

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_APCAL_JSFMT_YMDN','%e %B %Y %A') ;

// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_MINUTE','i') ;

// definition of orders     Y:year  M:month  W:week  D:day  N:dayname  O:operand
define('_APCAL_FMT_MD','%2$s %1$s') ;
define('_APCAL_FMT_YMD','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YMDN','%3$s %2$s %1$s %4$s') ;
define('_APCAL_FMT_YMDO','%4$s%3$s%2$s%1$s') ;
define('_APCAL_FMT_YMW','%3$s %2$s %1$s') ;
define('_APCAL_FMT_YW','%2$s Неделя %1$s') ;
define('_APCAL_FMT_DHI','%1$s %2$s:%3$s') ;
define('_APCAL_FMT_HI','%1$s:%2$s') ;

// formats for sprintf()
define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_APCAL_FMT_YEAR','Год %s') ;
define('_APCAL_FMT_WEEKNO','Неделя %s') ;

define('_APCAL_ICON_LIST','Список событий') ;
define('_APCAL_ICON_DAILY','День') ;
define('_APCAL_ICON_WEEKLY','Неделя') ;
define('_APCAL_ICON_MONTHLY','Месяц') ;
define('_APCAL_ICON_YEARLY','Год') ;

define('_APCAL_MB_APCALSHOWALLCAT','Все категории') ;

define('_APCAL_MB_APCALLINKTODAY','Сегодня') ;
define('_APCAL_MB_APCALNOSUBJECT','(Нет названия)') ;

define('_APCAL_MB_APCALPREV_DATE','Вчера') ;
define('_APCAL_MB_APCALNEXT_DATE','Завтра') ;
define('_APCAL_MB_APCALPREV_WEEK','Предыдущая неделя') ;
define('_APCAL_MB_APCALNEXT_WEEK','Следующая неделя') ;
define('_APCAL_MB_APCALPREV_MONTH','Предыдущий месяц') ;
define('_APCAL_MB_APCALNEXT_MONTH','Следующий месяц') ;
define('_APCAL_MB_APCALPREV_YEAR','Предыдущий год') ;
define('_APCAL_MB_APCALNEXT_YEAR','Следующий год') ;

define('_APCAL_MB_APCALNOEVENT','Нет событий') ;
define('_APCAL_MB_APCALADDEVENT','Добавить событие') ;
define('_APCAL_MB_APCALCONTINUING','(идет)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','еще') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','событий') ;
define('_APCAL_MB_APCALTIMESEPARATOR','--') ;

define('_APCAL_MB_APCALALLDAY_EVENT','Целый день') ;
define('_APCAL_MB_APCALLONG_EVENT','Показывать линией') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','Празднование и т.д.') ;

define('_APCAL_MB_APCALPUBLIC','Для всех') ;
define('_APCAL_MB_APCALPRIVATE','Приватное') ;
define('_APCAL_MB_APCALPRIVATETARGET',' для %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','Перейти к 1-му событию ') ;
define('_APCAL_MB_APCALRRULE1ST','Первое событие') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','Не зарегистрировано') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','Подтверждено') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','В ожидании подтверждения') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','Событие') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','Детальный просмотр') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','Редактирование') ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_MB_APCALORDER_ASC','по возрастанию') ;
define('_APCAL_MB_APCALORDER_DESC','по убыванию') ;
define('_APCAL_MB_APCALSORTBY','Сортировать:') ;
define('_APCAL_MB_APCALCURSORTEDBY','События сортируются:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","Выбранные события:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","");

define("_APCAL_MB_APCALICALSELECTPLATFORM","Выберите платформу");

define('_APCAL_TH_SUMMARY','Название') ;
define('_APCAL_TH_TIMEZONE','Часовой пояс') ;
define('_APCAL_TH_STARTDATETIME','Дата начала') ;
define('_APCAL_TH_ENDDATETIME','Дата окончания') ;
define('_APCAL_TH_ALLDAYOPTIONS','Событие длится целый день?') ;
define('_APCAL_TH_LOCATION','Место') ;
define('_APCAL_TH_CONTACT','Контакты') ;
define('_APCAL_TH_CATEGORIES','Категории') ;
define('_APCAL_TH_SUBMITTER','Автор') ;
define('_APCAL_TH_CLASS','Уровень') ;
define('_APCAL_TH_DESCRIPTION','Описание') ;
define('_APCAL_TH_RRULE','Правило повтора') ;
define('_APCAL_TH_ADMISSIONSTATUS','Статус') ;
define('_APCAL_TH_LASTMODIFIED','Дата последнего изменения') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','день месяца') ;
define('_APCAL_NTC_EXTRACTLIMIT','** Только %s событий если max.') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(%s необходимо подтвердить)') ;

define('_APCAL_OPT_PRIVATEMYSELF','себя') ;
define('_APCAL_OPT_PRIVATEGROUP','группы %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(неправильная группа)') ;

define('_APCAL_MB_APCALOP_AFTER','После') ;
define('_APCAL_MB_APCALOP_BEFORE','До') ;
define('_APCAL_MB_APCALOP_ON','В') ;
define('_APCAL_MB_APCALOP_ALL','Все') ;

define('_APCAL_CNFM_SAVEAS_YN','Вы хотите сохранить как отдельную запись?') ;
define('_APCAL_CNFM_DELETE_YN','Вы хотите удалить запись?') ;

define('_APCAL_ERR_INVALID_EVENT_ID','Ошибка: Событие не найдено') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"Ошибка: У вас нет прав на просмотр") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"Ошибка: У вас нет прав экспорта в iCalendar") ;
define('_APCAL_ERR_LACKINDISPITEM','Пункт %s пуст.<br />Нажмите кнопку Назад') ;

define('_APCAL_BTN_JUMP','Перейти') ;
define('_APCAL_BTN_NEWINSERTED','Создать') ;
define('_APCAL_BTN_SUBMITCHANGES',' Изменить! ') ;
define('_APCAL_BTN_SAVEAS','Сохранить как') ;
define('_APCAL_BTN_DELETE','Удалить всю серию') ;
define('_APCAL_BTN_DELETE_ONE','Удалить это событие') ;
define('_APCAL_BTN_EDITEVENT','Редактировать') ;
define('_APCAL_BTN_RESET','Очистить') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT','Печать') ;
define("_APCAL_BTN_IMPORT","Импортировать!");
define("_APCAL_BTN_UPLOAD","Загрузить!");
define("_APCAL_BTN_EXPORT","Зкспортировать!");
define("_APCAL_BTN_EXTRACT","Вырезать");
define("_APCAL_BTN_ADMIT","Одобрить");
define("_APCAL_BTN_MOVE","Переместить");
define("_APCAL_BTN_COPY","Копировать");

define('_APCAL_RR_EVERYDAY','Ежедневно') ;
define('_APCAL_RR_EVERYWEEK','Еженедельно') ;
define('_APCAL_RR_EVERYMONTH','Ежемесячно') ;
define('_APCAL_RR_EVERYYEAR','Ежегодно') ;
define('_APCAL_RR_FREQDAILY','Ежедневно') ;
define('_APCAL_RR_FREQWEEKLY','Еженедельно') ;
define('_APCAL_RR_FREQMONTHLY','Ежемесячно') ;
define('_APCAL_RR_FREQYEARLY','Ежегодно') ;
define('_APCAL_RR_FREQDAILY_PRE','Каждый') ;
define('_APCAL_RR_FREQWEEKLY_PRE','Каждую') ;
define('_APCAL_RR_FREQMONTHLY_PRE','Каждый') ;
define('_APCAL_RR_FREQYEARLY_PRE','Каждый') ;
define('_APCAL_RR_FREQDAILY_SUF','день') ;
define('_APCAL_RR_FREQWEEKLY_SUF','неделю') ;
define('_APCAL_RR_FREQMONTHLY_SUF','месяц') ;
define('_APCAL_RR_FREQYEARLY_SUF','год') ;
define('_APCAL_RR_PERDAY','каждые %s дней') ;
define('_APCAL_RR_PERWEEK','каждые %s недели') ;
define('_APCAL_RR_PERMONTH','каждые %s месяцев') ;
define('_APCAL_RR_PERYEAR','каждый %s лет') ;
define('_APCAL_RR_COUNT','<br />%s раз') ;
define('_APCAL_RR_UNTIL','<br />до %s') ;
define('_APCAL_RR_R_NORRULE','Не повторяемое') ;
define('_APCAL_RR_R_YESRRULE','Повторяемое') ;
define('_APCAL_RR_OR','или') ;
define('_APCAL_RR_S_NOTSELECTED','---') ;
define('_APCAL_RR_S_SAMEASBDATE','Тот же день') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','Нет условий окончания') ;
define('_APCAL_RR_R_USECOUNT_PRE','повторов') ;
define('_APCAL_RR_R_USECOUNT_SUF','раз') ;
define('_APCAL_RR_R_USEUNTIL','до') ;


}

?>