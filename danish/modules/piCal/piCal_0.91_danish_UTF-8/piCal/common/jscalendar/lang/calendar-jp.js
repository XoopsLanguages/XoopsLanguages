// ** I18N

// Calendar EN language
// Author: Mihai Bazon, <mihai_bazon@yahoo.com>
// Encoding: any
// Distributed under the same terms as the calendar itself.

// For translators: please use UTF-8 if possible.  We strongly believe that
// Unicode is the answer to a real internationalized world.  Also please
// include your contact information in the header, as can be seen above.

// full day names
Calendar._DN = new Array
("日曜日",
 "月曜日",
 "火曜日",
 "水曜日",
 "木曜日",
 "金曜日",
 "土曜日",
 "日曜日");

// Please note that the following array of short day names (and the same goes
// for short month names, _SMN) isn't absolutely necessary.  We give it here
// for exemplification on how one can customize the short day names, but if
// they are simply the first N letters of the full name you can simply say:
//
//   Calendar._SDN_len = N; // short day name length
//   Calendar._SMN_len = N; // short month name length
//
// If N = 3 then this is not needed either since we assume a value of 3 if not
// present, to be compatible with translation files that were written before
// this feature.

// short day names
Calendar._SDN = new Array
("日",
 "月",
 "火",
 "水",
 "木",
 "金",
 "土",
 "日");

// First day of the week. "0" means display Sunday first, "1" means display
// Monday first, etc.
Calendar._FD = 0;

// full month names
Calendar._MN = new Array
("1月",
 "2月",
 "3月",
 "4月",
 "5月",
 "6月",
 "7月",
 "8月",
 "9月",
 "10月",
 "11月",
 "12月");

// short month names
Calendar._SMN = new Array
("1月",
 "2月",
 "3月",
 "4月",
 "5月",
 "6月",
 "7月",
 "8月",
 "9月",
 "10月",
 "11月",
 "12月");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "このカレンダーについて";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"日付選択方法:\n" +
"- \xab, \xbb で年を選択\n" +
"- " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " で月を選択\n" +
"- 各ボタンを長押しすることで、直接選択することも可能です\n" +
"- キーボードでの操作も可能です\n" +
"- カーソルキーで日付変更、CTRL+カーソルキーで年月変更\n" +
"- スペースで今日・ENTERで確定・ESCでキャンセルです\n";

Calendar._TT["ABOUT_TIME"] = "\n\n" +
"時間選択方法:\n" +
"- 時・分をクリックすることで１ずつ増えます\n" +
"- シフトクリックすれば、１ずつ減ります\n" +
"- 慣れてきたら、ドラッグすることで素早い変更も可能です\n";

Calendar._TT["PREV_YEAR"] = "前年";
Calendar._TT["PREV_MONTH"] = "前月";
Calendar._TT["GO_TODAY"] = "今日";
Calendar._TT["NEXT_MONTH"] = "翌月";
Calendar._TT["NEXT_YEAR"] = "翌年";
Calendar._TT["SEL_DATE"] = "日付を選択してください";
Calendar._TT["DRAG_TO_MOVE"] = "ドラッグ可能";
Calendar._TT["PART_TODAY"] = " (今日)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "%s を週始めとする";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "閉じる";
Calendar._TT["TODAY"] = "今日";
Calendar._TT["TIME_PART"] = "クリック・シフト+クリック・ドラッグで変更可能";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
Calendar._TT["TT_DATE_FORMAT"] = "%B %e日 (%A)";

Calendar._TT["WK"] = "週";
Calendar._TT["TIME"] = "Time:";
