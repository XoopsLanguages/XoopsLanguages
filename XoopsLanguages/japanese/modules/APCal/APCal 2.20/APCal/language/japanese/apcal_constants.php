<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {

define( '_APCAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_APCAL_JS_CALENDAR','calendar-jp.js') ;

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_APCAL_JSFMT_YMDN','%Y年 %B %d日 (%A)') ;

// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_MINUTE','i分') ;

// orders of formatted elements   Y:year  M:month  W:week  D:day  O:operand
define('_APCAL_FMT_MD','%1$s%2$s') ;
define('_APCAL_FMT_YMD','%1$s年 %2$s %3$s') ;
define('_APCAL_FMT_YMDN','%1$s年 %2$s %3$s (%4$s)') ;
define('_APCAL_FMT_YMDO','%1$s%2$s%3$s%4$s') ;
define('_APCAL_FMT_YMW','%1$s年 %2$s %3$s') ;
define('_APCAL_FMT_YW','%1$s年 第%2$s週') ;
define('_APCAL_FMT_DHI','%1$s %2$s%3$s') ;
define('_APCAL_FMT_HI','%1$s%2$s') ;

// formats for sprintf()
define('_APCAL_FMT_YEAR_MONTH','%1$s年 %2$s') ;
define('_APCAL_FMT_YEAR','%s年') ;
define('_APCAL_FMT_WEEKNO','第%s週') ;

define('_APCAL_ICON_LIST','予定一覧表示') ;
define('_APCAL_ICON_DAILY','一日表示') ;
define('_APCAL_ICON_WEEKLY','週表示') ;
define('_APCAL_ICON_MONTHLY','月表示') ;
define('_APCAL_ICON_YEARLY','年間表示') ;

define('_APCAL_MB_APCALSHOWALLCAT','全カテゴリー表示') ;

define('_APCAL_MB_APCALLINKTODAY','＜今日＞') ;
define('_APCAL_MB_APCALNOSUBJECT','（件名なし）') ;

define('_APCAL_MB_APCALPREV_DATE','昨日') ;
define('_APCAL_MB_APCALNEXT_DATE','明日') ;
define('_APCAL_MB_APCALPREV_WEEK','先週') ;
define('_APCAL_MB_APCALNEXT_WEEK','次週') ;
define('_APCAL_MB_APCALPREV_MONTH','前月') ;
define('_APCAL_MB_APCALNEXT_MONTH','翌月') ;
define('_APCAL_MB_APCALPREV_YEAR','去年') ;
define('_APCAL_MB_APCALNEXT_YEAR','来年') ;

define('_APCAL_MB_APCALNOEVENT','予定なし') ;
define('_APCAL_MB_APCALADDEVENT','予定の追加') ;
define('_APCAL_MB_APCALCONTINUING','（継続中）') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','他') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','件') ;
define('_APCAL_MB_APCALTIMESEPARATOR','〜') ;

define('_APCAL_MB_APCALALLDAY_EVENT','全日イベント') ;
define('_APCAL_MB_APCALLONG_EVENT','長期イベント') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','記念日・祝日等') ;

define('_APCAL_MB_APCALPUBLIC','公開');
define('_APCAL_MB_APCALPRIVATE','非公開');
define('_APCAL_MB_APCALPRIVATETARGET',' 公開先 %s');

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','最初の予定 ') ;
define('_APCAL_MB_APCALRRULE1ST','初回分') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','未登録') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','承認済') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','未承認') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','予定表') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','詳細情報') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','編集') ;

define('_APCAL_MB_APCALHOUR_SUF','時') ;
define('_APCAL_MB_APCALMINUTE_SUF','分') ;

define('_APCAL_MB_APCALORDER_ASC','昇順') ;
define('_APCAL_MB_APCALORDER_DESC','降順') ;
define('_APCAL_MB_APCALSORTBY','並び替え:') ;
define('_APCAL_MB_APCALCURSORTEDBY','現在の並び方:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","チェックした予定を:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","iCalendarで出力する");

define("_APCAL_MB_APCALICALSELECTPLATFORM","出力対象を選択して下さい");

define('_APCAL_TH_SUMMARY','件名') ;
define('_APCAL_TH_TIMEZONE','タイムゾーン') ;
define('_APCAL_TH_STARTDATETIME','開始日時') ;
define('_APCAL_TH_ENDDATETIME','終了日時') ;
define('_APCAL_TH_ALLDAYOPTIONS','全日オプション') ;
define('_APCAL_TH_LOCATION','場所') ;
define('_APCAL_TH_CONTACT','連絡先') ;
define('_APCAL_TH_CATEGORIES','カテゴリー') ;
define('_APCAL_TH_SUBMITTER','投稿者');
define('_APCAL_TH_CLASS','レコード表示');
define('_APCAL_TH_DESCRIPTION','詳細') ;
define('_APCAL_TH_RRULE','繰り返し') ;
define('_APCAL_TH_ADMISSIONSTATUS','状態') ;
define('_APCAL_TH_LASTMODIFIED','最終更新日') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','(日付指定)') ;
define('_APCAL_NTC_EXTRACTLIMIT','※展開上限 %s 件') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(未承認 %s 件)') ;

define('_APCAL_OPT_PRIVATEMYSELF','自分のみ');
define('_APCAL_OPT_PRIVATEGROUP','%s グループ');
define('_APCAL_OPT_PRIVATEINVALID','(無効なグループ)');

define('_APCAL_MB_APCALOP_AFTER','以降の予定') ;
define('_APCAL_MB_APCALOP_BEFORE','以前の予定') ;
define('_APCAL_MB_APCALOP_ON','にかかる予定') ;
define('_APCAL_MB_APCALOP_ALL','日付指定無効') ;

define('_APCAL_CNFM_SAVEAS_YN','別件として登録しますか') ;
define('_APCAL_CNFM_DELETE_YN','削除してよろしいですか') ;

define('_APCAL_ERR_INVALID_EVENT_ID','Error: 該当する予定はありません') ;
define('_APCAL_ERR_NOPERM_TO_SHOW','Error: 表示できません') ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS','Error: iCalendar出力操作は許可されていません') ;
define('_APCAL_ERR_LACKINDISPITEM','%s が未入力です<br />ブラウザのボタンで戻ってください') ;

define('_APCAL_BTN_JUMP','Jump') ;
define('_APCAL_BTN_NEWINSERTED','新規登録') ;
define('_APCAL_BTN_SUBMITCHANGES','　変　更　') ;
define('_APCAL_BTN_SAVEAS','別件登録') ;
define('_APCAL_BTN_DELETE','削除') ;
define('_APCAL_BTN_DELETE_ONE','一件削除') ;
define('_APCAL_BTN_EDITEVENT','編集') ;
define('_APCAL_BTN_RESET','リセット') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT','印刷') ;
define("_APCAL_BTN_IMPORT","インポート実行");
define("_APCAL_BTN_UPLOAD","アップロード実行");
define("_APCAL_BTN_EXPORT","出力");
define("_APCAL_BTN_EXTRACT","抽出");
define("_APCAL_BTN_ADMIT","承認");
define("_APCAL_BTN_MOVE","移動");
define("_APCAL_BTN_COPY","コピー");

define('_APCAL_RR_EVERYDAY','毎日') ;
define('_APCAL_RR_EVERYWEEK','毎週') ;
define('_APCAL_RR_EVERYMONTH','毎月') ;
define('_APCAL_RR_EVERYYEAR','毎年') ;
define('_APCAL_RR_FREQDAILY','日付単位') ;
define('_APCAL_RR_FREQWEEKLY','週単位') ;
define('_APCAL_RR_FREQMONTHLY','月単位') ;
define('_APCAL_RR_FREQYEARLY','年単位') ;
define('_APCAL_RR_FREQDAILY_PRE','') ;
define('_APCAL_RR_FREQWEEKLY_PRE','') ;
define('_APCAL_RR_FREQMONTHLY_PRE','') ;
define('_APCAL_RR_FREQYEARLY_PRE','') ;
define('_APCAL_RR_FREQDAILY_SUF','日ごとに') ;
define('_APCAL_RR_FREQWEEKLY_SUF','週ごとに') ;
define('_APCAL_RR_FREQMONTHLY_SUF','ヶ月ごとに') ;
define('_APCAL_RR_FREQYEARLY_SUF','年ごとに') ;
define('_APCAL_RR_PERDAY','%s 日おきに') ;
define('_APCAL_RR_PERWEEK','%s 週おきに') ;
define('_APCAL_RR_PERMONTH','%s 月おきに') ;
define('_APCAL_RR_PERYEAR','%s 年おきに') ;
define('_APCAL_RR_COUNT','<br />%s 回') ;
define('_APCAL_RR_UNTIL','<br />%s まで') ;
define('_APCAL_RR_R_NORRULE','繰り返し無し') ;
define('_APCAL_RR_R_YESRRULE','繰り返しする') ;
define('_APCAL_RR_OR','または') ;
define('_APCAL_RR_S_NOTSELECTED','-未選択-') ;
define('_APCAL_RR_S_SAMEASBDATE','開始日と同日') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','終了条件無し') ;
define('_APCAL_RR_R_USECOUNT_PRE','回数指定') ;
define('_APCAL_RR_R_USECOUNT_SUF','回') ;
define('_APCAL_RR_R_USEUNTIL','終了日による指定') ;


}

?>