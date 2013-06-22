<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_APCAL_CNST_LOADED' ) ) {

define( '_APCAL_CNST_LOADED' , 1 ) ;

// the language file for jscalendar "DHTML Date/Time Selector"
define('_APCAL_JS_CALENDAR','calendar-jp.js') ;

// format for jscalendar. see common/jscalendar/doc/html/reference.html
define('_APCAL_JSFMT_YMDN','%Yǯ %B %d�� (%A)') ;

// format for date()  see http://jp.php.net/date
define('_APCAL_DTFMT_MINUTE','iʬ') ;

// orders of formatted elements   Y:year  M:month  W:week  D:day  O:operand
define('_APCAL_FMT_MD','%1$s%2$s') ;
define('_APCAL_FMT_YMD','%1$sǯ %2$s %3$s') ;
define('_APCAL_FMT_YMDN','%1$sǯ %2$s %3$s (%4$s)') ;
define('_APCAL_FMT_YMDO','%1$s%2$s%3$s%4$s') ;
define('_APCAL_FMT_YMW','%1$sǯ %2$s %3$s') ;
define('_APCAL_FMT_YW','%1$sǯ ��%2$s��') ;
define('_APCAL_FMT_DHI','%1$s %2$s%3$s') ;
define('_APCAL_FMT_HI','%1$s%2$s') ;

// formats for sprintf()
define('_APCAL_FMT_YEAR_MONTH','%1$sǯ %2$s') ;
define('_APCAL_FMT_YEAR','%sǯ') ;
define('_APCAL_FMT_WEEKNO','��%s��') ;

define('_APCAL_ICON_LIST','ͽ�����ɽ��') ;
define('_APCAL_ICON_DAILY','����ɽ��') ;
define('_APCAL_ICON_WEEKLY','��ɽ��') ;
define('_APCAL_ICON_MONTHLY','��ɽ��') ;
define('_APCAL_ICON_YEARLY','ǯ��ɽ��') ;

define('_APCAL_MB_APCALSHOWALLCAT','�����ƥ��꡼ɽ��') ;

define('_APCAL_MB_APCALLINKTODAY','�㺣����') ;
define('_APCAL_MB_APCALNOSUBJECT','�ʷ�̾�ʤ���') ;

define('_APCAL_MB_APCALPREV_DATE','����') ;
define('_APCAL_MB_APCALNEXT_DATE','����') ;
define('_APCAL_MB_APCALPREV_WEEK','�轵') ;
define('_APCAL_MB_APCALNEXT_WEEK','����') ;
define('_APCAL_MB_APCALPREV_MONTH','����') ;
define('_APCAL_MB_APCALNEXT_MONTH','���') ;
define('_APCAL_MB_APCALPREV_YEAR','��ǯ') ;
define('_APCAL_MB_APCALNEXT_YEAR','��ǯ') ;

define('_APCAL_MB_APCALNOEVENT','ͽ��ʤ�') ;
define('_APCAL_MB_APCALADDEVENT','ͽ����ɲ�') ;
define('_APCAL_MB_APCALCONTINUING','�ʷ�³���') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','¾') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','��') ;
define('_APCAL_MB_APCALTIMESEPARATOR','��') ;

define('_APCAL_MB_APCALALLDAY_EVENT','�������٥��') ;
define('_APCAL_MB_APCALLONG_EVENT','Ĺ�����٥��') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','��ǰ����������') ;

define('_APCAL_MB_APCALPUBLIC','����');
define('_APCAL_MB_APCALPRIVATE','�����');
define('_APCAL_MB_APCALPRIVATETARGET',' ������ %s');

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','�ǽ��ͽ�� ') ;
define('_APCAL_MB_APCALRRULE1ST','���ʬ') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','̤��Ͽ') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','��ǧ��') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','̤��ǧ') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','ͽ��ɽ') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','�ܺپ���') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','�Խ�') ;

define('_APCAL_MB_APCALHOUR_SUF','��') ;
define('_APCAL_MB_APCALMINUTE_SUF','ʬ') ;

define('_APCAL_MB_APCALORDER_ASC','����') ;
define('_APCAL_MB_APCALORDER_DESC','�߽�') ;
define('_APCAL_MB_APCALSORTBY','�¤��ؤ�:') ;
define('_APCAL_MB_APCALCURSORTEDBY','���ߤ��¤���:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","�����å�����ͽ���:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","iCalendar�ǽ��Ϥ���");

define("_APCAL_MB_APCALICALSELECTPLATFORM","�����оݤ����򤷤Ʋ�����");

define('_APCAL_TH_SUMMARY','��̾') ;
define('_APCAL_TH_TIMEZONE','�����ॾ����') ;
define('_APCAL_TH_STARTDATETIME','��������') ;
define('_APCAL_TH_ENDDATETIME','��λ����') ;
define('_APCAL_TH_ALLDAYOPTIONS','�������ץ����') ;
define('_APCAL_TH_LOCATION','���') ;
define('_APCAL_TH_CONTACT','Ϣ����') ;
define('_APCAL_TH_CATEGORIES','���ƥ��꡼') ;
define('_APCAL_TH_SUBMITTER','��Ƽ�');
define('_APCAL_TH_CLASS','�쥳����ɽ��');
define('_APCAL_TH_DESCRIPTION','�ܺ�') ;
define('_APCAL_TH_RRULE','�����֤�') ;
define('_APCAL_TH_ADMISSIONSTATUS','����') ;
define('_APCAL_TH_LASTMODIFIED','�ǽ�������') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','(���ջ���)') ;
define('_APCAL_NTC_EXTRACTLIMIT','��Ÿ����� %s ��') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(̤��ǧ %s ��)') ;

define('_APCAL_OPT_PRIVATEMYSELF','��ʬ�Τ�');
define('_APCAL_OPT_PRIVATEGROUP','%s ���롼��');
define('_APCAL_OPT_PRIVATEINVALID','(̵���ʥ��롼��)');

define('_APCAL_MB_APCALOP_AFTER','�ʹߤ�ͽ��') ;
define('_APCAL_MB_APCALOP_BEFORE','������ͽ��') ;
define('_APCAL_MB_APCALOP_ON','�ˤ�����ͽ��') ;
define('_APCAL_MB_APCALOP_ALL','���ջ���̵��') ;

define('_APCAL_CNFM_SAVEAS_YN','�̷�Ȥ�����Ͽ���ޤ���') ;
define('_APCAL_CNFM_DELETE_YN','������Ƥ�����Ǥ���') ;

define('_APCAL_ERR_INVALID_EVENT_ID','Error: ��������ͽ��Ϥ���ޤ���') ;
define('_APCAL_ERR_NOPERM_TO_SHOW','Error: ɽ���Ǥ��ޤ���') ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS','Error: iCalendar�������ϵ��Ĥ���Ƥ��ޤ���') ;
define('_APCAL_ERR_LACKINDISPITEM','%s ��̤���ϤǤ�<br />�֥饦���Υܥ������äƤ�������') ;

define('_APCAL_BTN_JUMP','Jump') ;
define('_APCAL_BTN_NEWINSERTED','������Ͽ') ;
define('_APCAL_BTN_SUBMITCHANGES','���ѡ�����') ;
define('_APCAL_BTN_SAVEAS','�̷���Ͽ') ;
define('_APCAL_BTN_DELETE','���') ;
define('_APCAL_BTN_DELETE_ONE','�����') ;
define('_APCAL_BTN_EDITEVENT','�Խ�') ;
define('_APCAL_BTN_RESET','�ꥻ�å�') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT','����') ;
define("_APCAL_BTN_IMPORT","����ݡ��ȼ¹�");
define("_APCAL_BTN_UPLOAD","���åץ��ɼ¹�");
define("_APCAL_BTN_EXPORT","����");
define("_APCAL_BTN_EXTRACT","���");
define("_APCAL_BTN_ADMIT","��ǧ");
define("_APCAL_BTN_MOVE","��ư");
define("_APCAL_BTN_COPY","���ԡ�");

define('_APCAL_RR_EVERYDAY','����') ;
define('_APCAL_RR_EVERYWEEK','�轵') ;
define('_APCAL_RR_EVERYMONTH','���') ;
define('_APCAL_RR_EVERYYEAR','��ǯ') ;
define('_APCAL_RR_FREQDAILY','����ñ��') ;
define('_APCAL_RR_FREQWEEKLY','��ñ��') ;
define('_APCAL_RR_FREQMONTHLY','��ñ��') ;
define('_APCAL_RR_FREQYEARLY','ǯñ��') ;
define('_APCAL_RR_FREQDAILY_PRE','') ;
define('_APCAL_RR_FREQWEEKLY_PRE','') ;
define('_APCAL_RR_FREQMONTHLY_PRE','') ;
define('_APCAL_RR_FREQYEARLY_PRE','') ;
define('_APCAL_RR_FREQDAILY_SUF','�����Ȥ�') ;
define('_APCAL_RR_FREQWEEKLY_SUF','�����Ȥ�') ;
define('_APCAL_RR_FREQMONTHLY_SUF','����Ȥ�') ;
define('_APCAL_RR_FREQYEARLY_SUF','ǯ���Ȥ�') ;
define('_APCAL_RR_PERDAY','%s ��������') ;
define('_APCAL_RR_PERWEEK','%s ��������') ;
define('_APCAL_RR_PERMONTH','%s �����') ;
define('_APCAL_RR_PERYEAR','%s ǯ������') ;
define('_APCAL_RR_COUNT','<br />%s ��') ;
define('_APCAL_RR_UNTIL','<br />%s �ޤ�') ;
define('_APCAL_RR_R_NORRULE','�����֤�̵��') ;
define('_APCAL_RR_R_YESRRULE','�����֤�����') ;
define('_APCAL_RR_OR','�ޤ���') ;
define('_APCAL_RR_S_NOTSELECTED','-̤����-') ;
define('_APCAL_RR_S_SAMEASBDATE','��������Ʊ��') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','��λ���̵��') ;
define('_APCAL_RR_R_USECOUNT_PRE','�������') ;
define('_APCAL_RR_R_USECOUNT_SUF','��') ;
define('_APCAL_RR_R_USEUNTIL','��λ���ˤ�����') ;


}

?>