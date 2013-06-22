<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:20
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');

define( '_MI_APCAL_APCALLOADED' , 1 ) ;


// Module Info

// The name of this module

define('_MI_APCAL_ADMENU_MYBLOCKSADMIN','區塊與群組管理');
define("_MI_APCAL_NAME","APCal行事曆");

// A brief description of this module
define("_MI_APCAL_DESC","具有多功能的行事曆模組");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","迷你日曆");
define("_MI_APCAL_BNAME_MINICAL_DESC","顯示迷你日曆區塊");
define('_MI_APCAL_BNAME_MINICALEX','進階小月曆');
define('_MI_APCAL_BNAME_MINICALEX_DESC','可以搭配 plugin 的小月曆');
define("_MI_APCAL_BNAME_MONTHCAL","月曆");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","顯示完整的月曆");
define("_MI_APCAL_BNAME_TODAYS","今日事件");
define("_MI_APCAL_BNAME_TODAYS_DESC","顯示今天的事件");
define("_MI_APCAL_BNAME_THEDAYS","%s 的事件");
define("_MI_APCAL_BNAME_THEDAYS_DESC","顯示指出日期的事件");
define("_MI_APCAL_BNAME_COMING","近期事件");
define("_MI_APCAL_BNAME_COMING_DESC","顯示近期的事件");
define("_MI_APCAL_BNAME_AFTER","今日以後事件");
define("_MI_APCAL_BNAME_AFTER_DESC","顯示今日以後的事件");

// Names of submenu
define('_MI_APCAL_SM_SUBMIT','新增');

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "用戶權限");
define("_MI_APCALGUESTS_AUTHORITY", "訪客權限");
define("_MI_APCALMINICAL_TARGET", "當點選迷你行事曆時所要顯示在畫面中央的行事曆");
define("_MI_APCALCOMING_NUMROWS", "在近期事件區塊顯示事件的數目");
define("_MI_APCALSKINFOLDER", "行事曆樣式的資料夾名稱 (images目錄內)");
define('_MI_APCAL_DEFAULTLOCALE','big5_taiwan');
define('_MI_APCAL_LOCALE','地域設定 <br />將自動帶入當地例假日，台灣已內建至2010年為止之國曆與農曆假日');
define("_MI_APCALSUNDAYCOLOR", "星期日的顏色");
define("_MI_APCALWEEKDAYCOLOR", "平日的顏色");
define("_MI_APCALSATURDAYCOLOR", "星期六的顏色");
define("_MI_APCALHOLIDAYCOLOR", "假日的顏色");
define("_MI_APCALTARGETDAYCOLOR", "預定日的顏色");
define("_MI_APCALSUNDAYBGCOLOR", "星期日的背景顏色");
define("_MI_APCALWEEKDAYBGCOLOR", "平日的顏色");
define("_MI_APCALSATURDAYBGCOLOR", "星期六的背景顏色");
define("_MI_APCALHOLIDAYBGCOLOR", "假日的背景顏色");
define("_MI_APCALTARGETDAYBGCOLOR", "預定日的背景顏色");
define("_MI_APCALCALHEADCOLOR", "行事曆主題部份的顏色");
define("_MI_APCALCALHEADBGCOLOR", "行事曆主題部份的背景顏色");
define("_MI_APCALCALFRAMECSS", "行事曆視窗的樣式");
define("_MI_APCALCANOUTPUTICS", "匯出 ics 檔案的權限");
define("_MI_APCALMAXRRULEEXTRACT", "重複事件展開上限數.");
define("_MI_APCALWEEKSTARTFROM", "每週的第一天是");
define('_MI_APCALTIMEZONE_USING','伺服器的時區指定');
define('_MI_APCALUSE24HOUR','是否使用24小時制 (如選擇否將自動以12小時制)');
define('_MI_APCALNAMEORUNAME','顯示發表者名');
define('_MI_APCALDESCNAMEORUNAME','請選擇顯示帳號或是真實姓名(暱稱)');

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "訪客新增事件的權限");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "無法新增事件");
define("_MI_APCALOPT_AUTH_WAIT", "可以新增事件並且需要審核");
define("_MI_APCALOPT_AUTH_POST", "可以新增事件但不需要審核");
define("_MI_APCALOPT_AUTH_BYGROUP", "依照群組權限設定");
define("_MI_APCALOPT_MINI_PHPSELF", "目前頁面");
define("_MI_APCALOPT_MINI_MONTHLY", "月行事曆");
define("_MI_APCALOPT_MINI_WEEKLY", "週行事曆");
define("_MI_APCALOPT_MINI_DAILY", "日行事曆");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "可以匯出");
define("_MI_APCALOPT_CANOUTPUTICS", "無法匯出");
define("_MI_APCALOPT_STARTFROMSUN", "星期日");
define("_MI_APCALOPT_STARTFROMMON", "星期一");
define('_MI_APCALOPT_TZ_USEXOOPS','XOOPS的預設值');
define('_MI_APCALOPT_TZ_USEWINTER','由伺服器取得的冬令時間 (推薦)');
define('_MI_APCALOPT_TZ_USESUMMER','由伺服器取得的夏令時間');
define('_MI_APCALOPT_USENAME','真實姓名');
define('_MI_APCALOPT_USEUNAME','登入帳號');


// Admin Menus
define("_MI_APCAL_ADMENU0","待審事件區");
define("_MI_APCAL_ADMENU1","事件管理區");
define("_MI_APCAL_ADMENU2","群組權限管理");
define('_MI_APCAL_ADMENU_PLUGINS','Plugin管理區');


// Appended by Xoops Language Checker -GIJOE- in 2003-12-05 14:18:43

// Appended by Xoops Language Checker -GIJOE- in 2003-12-26 10:55:16
define('_MI_APCALDAYSTARTFROM','切換一日的時間');
define('_MI_APCAL_GLOBAL_NOTIFY','模組整體');
define('_MI_APCAL_GLOBAL_NOTIFYDSC','所有 APCal 模組的通知選項');
define('_MI_APCAL_CATEGORY_NOTIFY','類別');
define('_MI_APCAL_CATEGORY_NOTIFYDSC','針對所選擇類別的通知選項');
define('_MI_APCAL_EVENT_NOTIFY','事件');
define('_MI_APCAL_EVENT_NOTIFYDSC','針對顯示中的事件通知選項');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY','新事件通知');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP','有新增事件時的通知選項');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC','有新增事件時的通知選項');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ：有新增的事件喔！');

// Appended by Xoops Language Checker -GIJOE- in 2004-01-14 18:31:01
define('_MI_APCAL_BNAME_NEW','新的事件');
define('_MI_APCAL_BNAME_NEW_DESC','顯示新增的事件');
define('_MI_APCALDEFAULT_VIEW','預設的月曆顯示畫面');
define('_MI_APCALWEEKNUMBERING','週別計算方式');
define('_MI_APCALOPT_MINI_LIST','事件一覽');
define('_MI_APCALOPT_WEEKNOEACHMONTH','以每月計算');
define('_MI_APCALOPT_WEEKNOWHOLEYEAR','以整年計算');
define('_MI_APCAL_ADMENU_CAT','類別管理');
define('_MI_APCAL_ADMENU_CAT2GROUP','類別的瀏覽權限');
define('_MI_APCAL_ADMENU_TM','時區維護');
define('_MI_APCAL_ADMENU_ICAL','匯入iCalendar');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY','每個類別裡的新增事件');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP','在這個類別裡有新增事件時的通知');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC','在這個類別裡有新增事件時的通知');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} ： 有新的事件');

}

?>
