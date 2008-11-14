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
("������",
 "������",
 "������",
 "������",
 "������",
 "������",
 "������",
 "������");

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
("��",
 "��",
 "��",
 "��",
 "��",
 "��",
 "��",
 "��");

// First day of the week. "0" means display Sunday first, "1" means display
// Monday first, etc.
Calendar._FD = 0;

// full month names
Calendar._MN = new Array
("1��",
 "2��",
 "3��",
 "4��",
 "5��",
 "6��",
 "7��",
 "8��",
 "9��",
 "10��",
 "11��",
 "12��");

// short month names
Calendar._SMN = new Array
("1��",
 "2��",
 "3��",
 "4��",
 "5��",
 "6��",
 "7��",
 "8��",
 "9��",
 "10��",
 "11��",
 "12��");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "���Υ��������ˤĤ���";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"����������ˡ:\n" +
"- \xab, \xbb ��ǯ������\n" +
"- " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " �Ƿ������\n" +
"- �ƥܥ����Ĺ�������뤳�Ȥǡ�ľ�����򤹤뤳�Ȥ��ǽ�Ǥ�\n" +
"- �����ܡ��ɤǤ������ǽ�Ǥ�\n" +
"- �������륭���������ѹ���CTRL+�������륭����ǯ���ѹ�\n" +
"- ���ڡ����Ǻ�����ENTER�ǳ��ꡦESC�ǥ���󥻥�Ǥ�\n";

Calendar._TT["ABOUT_TIME"] = "\n\n" +
"����������ˡ:\n" +
"- ����ʬ�򥯥�å����뤳�Ȥǣ����������ޤ�\n" +
"- ���եȥ���å�����С������ĸ���ޤ�\n" +
"- ����Ƥ����顢�ɥ�å����뤳�Ȥ����ᤤ�ѹ����ǽ�Ǥ�\n";

Calendar._TT["PREV_YEAR"] = "��ǯ";
Calendar._TT["PREV_MONTH"] = "����";
Calendar._TT["GO_TODAY"] = "����";
Calendar._TT["NEXT_MONTH"] = "���";
Calendar._TT["NEXT_YEAR"] = "��ǯ";
Calendar._TT["SEL_DATE"] = "���դ����򤷤Ƥ�������";
Calendar._TT["DRAG_TO_MOVE"] = "�ɥ�å���ǽ";
Calendar._TT["PART_TODAY"] = " (����)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "%s �򽵻Ϥ�Ȥ���";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "�Ĥ���";
Calendar._TT["TODAY"] = "����";
Calendar._TT["TIME_PART"] = "����å������ե�+����å����ɥ�å����ѹ���ǽ";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%Y-%m-%d";
Calendar._TT["TT_DATE_FORMAT"] = "%B %e�� (%A)";

Calendar._TT["WK"] = "��";
Calendar._TT["TIME"] = "Time:";
