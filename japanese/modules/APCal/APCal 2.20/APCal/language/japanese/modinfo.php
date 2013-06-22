<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","スケジューラ付カレンダー");

// Default Locale
define("_MI_APCAL_DEFAULTLOCALE","japan");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","ミニカレンダー");
define("_MI_APCAL_BNAME_MINICAL_DESC","小さなカレンダーの表示");
define("_MI_APCAL_BNAME_MINICALEX","拡張ミニカレンダー");
define("_MI_APCAL_BNAME_MINICALEX_DESC","プラグイン拡張が可能なミニカレンダーの表示");
define("_MI_APCAL_BNAME_MONTHCAL","月別フルサイズカレンダー");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","月別フルサイズカレンダーの表示");
define("_MI_APCAL_BNAME_TODAYS","今日の予定");
define("_MI_APCAL_BNAME_TODAYS_DESC","今日の予定の表示");
define("_MI_APCAL_BNAME_THEDAYS","%s の予定");
define("_MI_APCAL_BNAME_THEDAYS_DESC","カレンダーで指定された日の予定の表示");
define("_MI_APCAL_BNAME_COMING","今後の予定");
define("_MI_APCAL_BNAME_COMING_DESC","今日以降の予定の表示");
define("_MI_APCAL_BNAME_AFTER","%s 以降の予定");
define("_MI_APCAL_BNAME_AFTER_DESC","カレンダーで指定された日以降の予定の表示");
define("_MI_APCAL_BNAME_NEW","新たな予定");
define("_MI_APCAL_BNAME_NEW_DESC","新規に登録された予定の表示");

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","新規登録");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "一般ユーザの権限");
define("_MI_APCALGUESTS_AUTHORITY", "ゲストの権限");
define("_MI_APCALDEFAULT_VIEW", "デフォルトのカレンダー表示画面");
define("_MI_APCALMINICAL_TARGET", "ミニカレンダーで日付をクリックした時の動作");
define("_MI_APCALCOMING_NUMROWS", "今後の予定ブロックでの表示予定件数");
define("_MI_APCALSKINFOLDER", "スキンフォルダ名");
define("_MI_APCAL_LOCALE", "地域設定ファイル (locales/*.php)");
define("_MI_APCALSUNDAYCOLOR", "日曜日の文字色");
define("_MI_APCALWEEKDAYCOLOR", "平日の文字色");
define("_MI_APCALSATURDAYCOLOR", "土曜日の文字色");
define("_MI_APCALHOLIDAYCOLOR", "祝日の文字色");
define("_MI_APCALTARGETDAYCOLOR", "対象日の文字色");
define("_MI_APCALSUNDAYBGCOLOR", "日曜日の背景色");
define("_MI_APCALWEEKDAYBGCOLOR", "平日の背景色");
define("_MI_APCALSATURDAYBGCOLOR", "土曜日の背景色");
define("_MI_APCALHOLIDAYBGCOLOR", "祝日の背景色");
define("_MI_APCALTARGETDAYBGCOLOR", "対象日の背景色");
define("_MI_APCALCALHEADCOLOR", "ヘッダ部文字色");
define("_MI_APCALCALHEADBGCOLOR", "ヘッダ部背景色");
define("_MI_APCALCALFRAMECSS", "カレンダーフレームのスタイル");
define("_MI_APCALCANOUTPUTICS", "icsファイル出力の許可・不許可");
define("_MI_APCALMAXRRULEEXTRACT", "繰り返し条件の展開上限数 (COUNT)");
define("_MI_APCALWEEKSTARTFROM", "週の開始曜日");
define("_MI_APCALWEEKNUMBERING", "週の数え方");
define("_MI_APCALDAYSTARTFROM", "一日を区切る時間");
define("_MI_APCALTIMEZONE_USING", "サーバのタイムゾーン指定");
define("_MI_APCALUSE24HOUR", "24時間制とする（いいえなら、12時間制）");
define("_MI_APCALNAMEORUNAME" , "投稿者名の表示" ) ;
define("_MI_APCALDESCNAMEORUNAME" , "ログイン名かハンドル名か選択して下さい" ) ;

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "ゲストが予定を追加できるかどうか");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "登録不可");
define("_MI_APCALOPT_AUTH_WAIT", "登録可・要承認");
define("_MI_APCALOPT_AUTH_POST", "登録可・承認不要");
define("_MI_APCALOPT_AUTH_BYGROUP", "グループ毎に設定する");
define("_MI_APCALOPT_MINI_PHPSELF", "現在のページをそのまま表示");
define("_MI_APCALOPT_MINI_MONTHLY", "月毎のカレンダーをメインに表示");
define("_MI_APCALOPT_MINI_WEEKLY", "週毎のカレンダーをメインに表示");
define("_MI_APCALOPT_MINI_DAILY", "一日だけのカレンダーをメインに表示");
define("_MI_APCALOPT_MINI_LIST", "予定一覧画面");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "出力禁止");
define("_MI_APCALOPT_CANOUTPUTICS", "出力許可");
define("_MI_APCALOPT_STARTFROMSUN", "日曜日");
define("_MI_APCALOPT_STARTFROMMON", "月曜日");
define("_MI_APCALOPT_WEEKNOEACHMONTH", "月ごと");
define("_MI_APCALOPT_WEEKNOWHOLEYEAR", "年間通算");
define("_MI_APCALOPT_USENAME" , "ハンドル名" ) ;
define("_MI_APCALOPT_USEUNAME" , "ログイン名" ) ;
define("_MI_APCALOPT_TZ_USEXOOPS" , "XOOPSでの設定値" ) ;
define("_MI_APCALOPT_TZ_USEWINTER" , "サーバから得られた冬時間（推奨）" ) ;
define("_MI_APCALOPT_TZ_USESUMMER" , "サーバから得られた夏時間" ) ;


// Admin Menus
define("_MI_APCAL_ADMENU0","スケジュールの承認");
define("_MI_APCAL_ADMENU1","予定管理");
define("_MI_APCAL_ADMENU_CAT","カテゴリー管理");
define("_MI_APCAL_ADMENU_CAT2GROUP","カテゴリーのアクセス権限");
define("_MI_APCAL_ADMENU2","グループの全体的な権限");
define("_MI_APCAL_ADMENU_TM","テーブルメンテナンス");
define("_MI_APCAL_ADMENU_PLUGINS","プラグイン管理");
define("_MI_APCAL_ADMENU_ICAL","iCalendarのインポート");
define('_MI_APCAL_ADMENU_MYTPLSADMIN','テンプレート管理');
define('_MI_APCAL_ADMENU_MYBLOCKSADMIN','ブロック・グループ管理');


// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', 'モジュール全体');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'APCalモジュール全体における通知オプション');
define('_MI_APCAL_CATEGORY_NOTIFY', 'カテゴリー');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', '選択中のカテゴリーに対する通知オプション');
define('_MI_APCAL_EVENT_NOTIFY', '予定');
define('_MI_APCAL_EVENT_NOTIFYDSC', '表示中の予定に対する通知オプション');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', '新規予定登録');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', '新規に予定が登録された時に通知する');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', '新規に予定が登録された時に通知する');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新たに予定が登録されました');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', 'カテゴリ毎の新予定登録');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', 'このカテゴリに新予定が登録された時に通知する');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', 'このカテゴリに新予定が登録された時に通知する');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: 新たに予定が登録されました');


}

?>
