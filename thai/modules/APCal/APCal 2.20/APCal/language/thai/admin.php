<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {

define( '_AM_APCAL_LOADED' , 1 ) ;
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');


// titles
define("_AM_APCAL_ADMISSION","待審事件管理");
define('_AM_APCAL_MENU_EVENTS','事件管理');
define('_AM_APCAL_MENU_CATEGORIES','類別管理');
define("_AM_APCAL_MENU_CAT2GROUP","類別的進入權限");
define("_AM_APCAL_ICALENDAR_IMPORT","匯入 iCalendar");
define("_AM_APCAL_GROUPPERM","群組權限管理");
define('_AM_APCAL_TABLEMAINTAIN','表單維護 (Upgrade)');
define('_AM_APCAL_MYBLOCKSADMIN','APCal的 區塊與群組管理');

// forms
define("_AM_APCAL_BUTTON_EXTRACT","提取");
define("_AM_APCAL_BUTTON_ADMIT","確定");
define('_AM_APCAL_BUTTON_MOVE','移動');
define('_AM_APCAL_BUTTON_COPY','複製');
define("_AM_APCAL_CONFIRM_DELETE","真的要刪除嗎？");
define('_AM_APCAL_CONFIRM_MOVE','要將舊類別屬性移除，給于新的類別屬性指定嗎？');
define('_AM_APCAL_CONFIRM_COPY','要新增類別屬性嗎？');
define('_AM_APCAL_OPT_PAST','過往資料');
define('_AM_APCAL_OPT_FUTURE','未來資料');
define('_AM_APCAL_OPT_PASTANDFUTURE','無指定');

// format
define('_AM_APCAL_DTFMT_LIST_ALLDAY','y-m-d');
define('_AM_APCAL_DTFMT_LIST_NORMAL','y-m-d<\b\r />H:i');

// timezones
define('_AM_APCAL_TZOPT_SERVER','伺服器時間');
define('_AM_APCAL_TZOPT_GMT','GMT代號');
define('_AM_APCAL_TZOPT_USER','使用者時間');

// admission
define("_AM_APCAL_LABEL_ADMIT","確定核准已選取的事件");
define("_AM_APCAL_MES_ADMITTED","事件已經核准了");
define("_AM_APCAL_ADMIT_TH0","用戶");
define("_AM_APCAL_ADMIT_TH1","開始時間");
define("_AM_APCAL_ADMIT_TH2","結束時間");
define("_AM_APCAL_ADMIT_TH3","主題");
define("_AM_APCAL_ADMIT_TH4","重複條件");

// iCalendar I/O
define("_AM_APCAL_LABEL_IMPORTFROMWEB","從網路上匯入 iCalendar 資料 (輸入 URL 請以 'http://' 或 'webcal://' 開頭)");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","上傳 iCalendar 資料 (從您的本機電腦選擇檔案)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","選取的事件：");
define("_AM_APCAL_LABEL_IO_OUTPUT","匯出為 iCalendar形式");
define("_AM_APCAL_LABEL_IO_DELETE","執行刪除");
define('_AM_APCAL_MES_EVENTLINKTOCAT','個別的事件已經登記到類別裡。');
define('_AM_APCAL_MES_EVENTUNLINKED','個別的事件以從舊類別裡移除');
define('_AM_APCAL_FMT_IMPORTED','個別的事件已由 %s 匯入');
define("_AM_APCAL_MES_DELETED","事件已刪除了");
define("_AM_APCAL_IO_TH0","用戶");
define("_AM_APCAL_IO_TH1","開始日期時間");
define("_AM_APCAL_IO_TH2","結束日期時間");
define("_AM_APCAL_IO_TH3","主題");
define("_AM_APCAL_IO_TH4","重複");
define("_AM_APCAL_IO_TH5","已審核");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "新增事件") ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "新增事件(不需審核)") ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "編輯事件") ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "編輯事件(不需審核)") ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "刪除事件") ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "刪除事件(不需審核)") ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "管理他人事件") ;
define('_AM_APCAL_CAT2GROUPDESC','針對各群組，請點選每個可以訪問的類別權限');
define( '_AM_APCAL_GROUPPERMDESC' , "選擇每一個群組所能做的權限<br />假如您需要這功能, 必須先設定 '用戶權限' 為 '依照群組權限設定'<br />這權限設定在管理員與訪客這兩個群組中會被忽略") ;

// Table Maintenance
define('_AM_APCAL_MB_SUCCESSUPDATETABLE','表單結構升級成功！');
define('_AM_APCAL_MB_FAILUPDATETABLE','表單結構升級失敗！');
define('_AM_APCAL_NOTICE_NOERRORS','已升級成功並且無發現任何錯誤。');
define('_AM_APCAL_ALRT_CATTABLENOTEXIST','無此類別表單。<br />是否要自動生成這個表單？');
define('_AM_APCAL_ALRT_OLDTABLE','事件表單的結構較舊。<br />是否要執行升級？');
define('_AM_APCAL_ALRT_TOOOLDTABLE','表單錯誤！<br />預估可能是V0.3或之前的版本，<br />請您先升級到 V0.4x 或 0.5x的版本！');
define('_AM_APCAL_FMT_SERVER_TZ_ALL','本伺服器的冬季時區： %+2.1f<br />本伺服器的夏季時區： %+2.1f<br />伺服器時區設定定義： %s (此處伺服器預設語系跟您網站預設語系衝突會產生亂碼，不用在意)<br />本XOOPS裡伺服器所在地預設的設定值： %+2.1f<br />行事曆APCal採用值： %+2.1f<br />');
define('_AM_APCAL_TH_SERVER_TZ_COUNT','總事件數');
define('_AM_APCAL_TH_SERVER_TZ_VALUE','時區');
define('_AM_APCAL_TH_SERVER_TZ_VALUE_TO','變更值 (-14.0℅14.0)');
define('_AM_APCAL_JSALRT_SERVER_TZ','在設定此動作之前建議您事先將資料庫做備份。');
define('_AM_APCAL_NOTICE_SERVER_TZ','如果您的伺服器架設於日光節約時區 (Day Light Saving) 將造成 APCal 0.8以前所登記的資料出現一個小時左右的誤差，如有那種情形請勿按此按鈕。');
define('_AM_APCAL_MB_SUCCESSTZUPDATE','所有資料都已按照此伺服器所預設之時區設定完成。');

// Categories
define('_AM_APCAL_CAT_TH_TITLE','類別名稱');
define('_AM_APCAL_CAT_TH_DESC','類別說明');
define('_AM_APCAL_CAT_TH_PARENT','主類別');
define('_AM_APCAL_CAT_TH_OPTIONS','選項');
define('_AM_APCAL_CAT_TH_LASTMODIFY','最後更新日');
define('_AM_APCAL_CAT_TH_OPERATION','操作');
define('_AM_APCAL_CAT_TH_ENABLED','有效');
define('_AM_APCAL_CAT_TH_WEIGHT','排序');
define('_AM_APCAL_CAT_TH_SUBMENU','顯示子類別');
define('_AM_APCAL_BTN_UPDATE','更新');
define('_AM_APCAL_MENU_CAT_EDIT','編輯類別');
define('_AM_APCAL_MENU_CAT_NEW','新增類別');
define('_AM_APCAL_MB_MAKESUBCAT','子類別');
define('_AM_APCAL_MB_MAKETOPCAT','在最上層新增類別');
define('_AM_APCAL_MB_CAT_INSERTED','新類別已經增加了');
define('_AM_APCAL_MB_CAT_UPDATED','類別已更新！');
define('_AM_APCAL_FMT_CAT_DELETED','已刪除了 %s 類別！');
define('_AM_APCAL_FMT_CAT_BATCHUPDATED','%s 類別已經被更新了！');
define('_AM_APCAL_FMT_CATDELCONFIRM','您確定要刪除 %s 這個類別嗎？');

// Plugins
define('_AM_APCAL_PI_UPDATED','已經完成更新了！');
define('_AM_APCAL_PI_TH_TYPE','適用於');
define('_AM_APCAL_PI_TH_OPTIONS','選項 (一般為置空)');
define('_AM_APCAL_PI_TH_TITLE','顯示標題');
define('_AM_APCAL_PI_TH_DIRNAME','目標模組');
define('_AM_APCAL_PI_TH_FILE','Plugin檔案');
define('_AM_APCAL_PI_TH_DOTGIF','代表點圖');
define('_AM_APCAL_PI_TH_OPERATION','操作');
define('_AM_APCAL_PI_ENABLED','有效');
define('_AM_APCAL_PI_DELETE','刪除');
define('_AM_APCAL_PI_NEW','新設定');
define('_AM_APCAL_PI_VIEWYEARLY','顯示於整年曆');
define('_AM_APCAL_PI_VIEWMONTHLY','顯示於大月曆');
define('_AM_APCAL_PI_VIEWWEEKLY','顯示於週曆');
define('_AM_APCAL_PI_VIEWDAILY','顯示於每日');

}

?>