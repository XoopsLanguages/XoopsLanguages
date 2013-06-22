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
define('_APCAL_FMT_YW','%2$s ������ %1$s') ;
define('_APCAL_FMT_DHI','%1$s %2$s:%3$s') ;
define('_APCAL_FMT_HI','%1$s:%2$s') ;

// formats for sprintf()
define('_APCAL_FMT_YEAR_MONTH','%2$s %1$s') ;
define('_APCAL_FMT_YEAR','��� %s') ;
define('_APCAL_FMT_WEEKNO','������ %s') ;

define('_APCAL_ICON_LIST','������ �������') ;
define('_APCAL_ICON_DAILY','����') ;
define('_APCAL_ICON_WEEKLY','������') ;
define('_APCAL_ICON_MONTHLY','�����') ;
define('_APCAL_ICON_YEARLY','���') ;

define('_APCAL_MB_APCALSHOWALLCAT','��� ���������') ;

define('_APCAL_MB_APCALLINKTODAY','�������') ;
define('_APCAL_MB_APCALNOSUBJECT','(��� ��������)') ;

define('_APCAL_MB_APCALPREV_DATE','�����') ;
define('_APCAL_MB_APCALNEXT_DATE','������') ;
define('_APCAL_MB_APCALPREV_WEEK','���������� ������') ;
define('_APCAL_MB_APCALNEXT_WEEK','��������� ������') ;
define('_APCAL_MB_APCALPREV_MONTH','���������� �����') ;
define('_APCAL_MB_APCALNEXT_MONTH','��������� �����') ;
define('_APCAL_MB_APCALPREV_YEAR','���������� ���') ;
define('_APCAL_MB_APCALNEXT_YEAR','��������� ���') ;

define('_APCAL_MB_APCALNOEVENT','��� �������') ;
define('_APCAL_MB_APCALADDEVENT','�������� �������') ;
define('_APCAL_MB_APCALCONTINUING','(����)') ;
define('_APCAL_MB_APCALRESTEVENT_PRE','���') ;
define('_APCAL_MB_APCALRESTEVENT_SUF','�������') ;
define('_APCAL_MB_APCALTIMESEPARATOR','--') ;

define('_APCAL_MB_APCALALLDAY_EVENT','����� ����') ;
define('_APCAL_MB_APCALLONG_EVENT','���������� ������') ;
define('_APCAL_MB_APCALLONG_SPECIALDAY','������������ � �.�.') ;

define('_APCAL_MB_APCALPUBLIC','��� ����') ;
define('_APCAL_MB_APCALPRIVATE','���������') ;
define('_APCAL_MB_APCALPRIVATETARGET',' ��� %s') ;

define('_APCAL_MB_APCALLINK_TO_RRULE1ST','������� � 1-�� ������� ') ;
define('_APCAL_MB_APCALRRULE1ST','������ �������') ;

define('_APCAL_MB_APCALEVENT_NOTREGISTER','�� ����������������') ;
define('_APCAL_MB_APCALEVENT_ADMITTED','������������') ;
define('_APCAL_MB_APCALEVENT_NEEDADMIT','� �������� �������������') ;

define('_APCAL_MB_APCALTITLE_EVENTINFO','�������') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTDETAIL','��������� ��������') ;
define('_APCAL_MB_APCALSUBTITLE_EVENTEDIT','��������������') ;

define('_APCAL_MB_APCALHOUR_SUF',':') ;
define('_APCAL_MB_APCALMINUTE_SUF','') ;

define('_APCAL_MB_APCALORDER_ASC','�� �����������') ;
define('_APCAL_MB_APCALORDER_DESC','�� ��������') ;
define('_APCAL_MB_APCALSORTBY','�����������:') ;
define('_APCAL_MB_APCALCURSORTEDBY','������� �����������:') ;

define("_APCAL_MB_APCALLABEL_CHECKEDITEMS","��������� �������:");
define("_APCAL_MB_APCALLABEL_OUTPUTICS","");

define("_APCAL_MB_APCALICALSELECTPLATFORM","�������� ���������");

define('_APCAL_TH_SUMMARY','��������') ;
define('_APCAL_TH_TIMEZONE','������� ����') ;
define('_APCAL_TH_STARTDATETIME','���� ������') ;
define('_APCAL_TH_ENDDATETIME','���� ���������') ;
define('_APCAL_TH_ALLDAYOPTIONS','������� ������ ����� ����?') ;
define('_APCAL_TH_LOCATION','�����') ;
define('_APCAL_TH_CONTACT','��������') ;
define('_APCAL_TH_CATEGORIES','���������') ;
define('_APCAL_TH_SUBMITTER','�����') ;
define('_APCAL_TH_CLASS','�������') ;
define('_APCAL_TH_DESCRIPTION','��������') ;
define('_APCAL_TH_RRULE','������� �������') ;
define('_APCAL_TH_ADMISSIONSTATUS','������') ;
define('_APCAL_TH_LASTMODIFIED','���� ���������� ���������') ;

define('_APCAL_NTC_MONTHLYBYMONTHDAY','���� ������') ;
define('_APCAL_NTC_EXTRACTLIMIT','** ������ %s ������� ���� max.') ;
define('_APCAL_NTC_NUMBEROFNEEDADMIT','(%s ���������� �����������)') ;

define('_APCAL_OPT_PRIVATEMYSELF','����') ;
define('_APCAL_OPT_PRIVATEGROUP','������ %s') ;
define('_APCAL_OPT_PRIVATEINVALID','(������������ ������)') ;

define('_APCAL_MB_APCALOP_AFTER','�����') ;
define('_APCAL_MB_APCALOP_BEFORE','��') ;
define('_APCAL_MB_APCALOP_ON','�') ;
define('_APCAL_MB_APCALOP_ALL','���') ;

define('_APCAL_CNFM_SAVEAS_YN','�� ������ ��������� ��� ��������� ������?') ;
define('_APCAL_CNFM_DELETE_YN','�� ������ ������� ������?') ;

define('_APCAL_ERR_INVALID_EVENT_ID','������: ������� �� �������') ;
define('_APCAL_ERR_NOPERM_TO_SHOW',"������: � ��� ��� ���� �� ��������") ;
define('_APCAL_ERR_NOPERM_TO_OUTPUTICS',"������: � ��� ��� ���� �������� � iCalendar") ;
define('_APCAL_ERR_LACKINDISPITEM','����� %s ����.<br />������� ������ �����') ;

define('_APCAL_BTN_JUMP','�������') ;
define('_APCAL_BTN_NEWINSERTED','�������') ;
define('_APCAL_BTN_SUBMITCHANGES',' ��������! ') ;
define('_APCAL_BTN_SAVEAS','��������� ���') ;
define('_APCAL_BTN_DELETE','������� ��� �����') ;
define('_APCAL_BTN_DELETE_ONE','������� ��� �������') ;
define('_APCAL_BTN_EDITEVENT','�������������') ;
define('_APCAL_BTN_RESET','��������') ;
define('_APCAL_BTN_OUTPUTICS_WIN','iCalendar(Win)') ;
define('_APCAL_BTN_OUTPUTICS_MAC','iCalendar(Mac)') ;
define('_APCAL_BTN_PRINT','������') ;
define("_APCAL_BTN_IMPORT","�������������!");
define("_APCAL_BTN_UPLOAD","���������!");
define("_APCAL_BTN_EXPORT","��������������!");
define("_APCAL_BTN_EXTRACT","��������");
define("_APCAL_BTN_ADMIT","��������");
define("_APCAL_BTN_MOVE","�����������");
define("_APCAL_BTN_COPY","����������");

define('_APCAL_RR_EVERYDAY','���������') ;
define('_APCAL_RR_EVERYWEEK','�����������') ;
define('_APCAL_RR_EVERYMONTH','����������') ;
define('_APCAL_RR_EVERYYEAR','��������') ;
define('_APCAL_RR_FREQDAILY','���������') ;
define('_APCAL_RR_FREQWEEKLY','�����������') ;
define('_APCAL_RR_FREQMONTHLY','����������') ;
define('_APCAL_RR_FREQYEARLY','��������') ;
define('_APCAL_RR_FREQDAILY_PRE','������') ;
define('_APCAL_RR_FREQWEEKLY_PRE','������') ;
define('_APCAL_RR_FREQMONTHLY_PRE','������') ;
define('_APCAL_RR_FREQYEARLY_PRE','������') ;
define('_APCAL_RR_FREQDAILY_SUF','����') ;
define('_APCAL_RR_FREQWEEKLY_SUF','������') ;
define('_APCAL_RR_FREQMONTHLY_SUF','�����') ;
define('_APCAL_RR_FREQYEARLY_SUF','���') ;
define('_APCAL_RR_PERDAY','������ %s ����') ;
define('_APCAL_RR_PERWEEK','������ %s ������') ;
define('_APCAL_RR_PERMONTH','������ %s �������') ;
define('_APCAL_RR_PERYEAR','������ %s ���') ;
define('_APCAL_RR_COUNT','<br />%s ���') ;
define('_APCAL_RR_UNTIL','<br />�� %s') ;
define('_APCAL_RR_R_NORRULE','�� �����������') ;
define('_APCAL_RR_R_YESRRULE','�����������') ;
define('_APCAL_RR_OR','���') ;
define('_APCAL_RR_S_NOTSELECTED','---') ;
define('_APCAL_RR_S_SAMEASBDATE','��� �� ����') ;
define('_APCAL_RR_R_NOCOUNTUNTIL','��� ������� ���������') ;
define('_APCAL_RR_R_USECOUNT_PRE','��������') ;
define('_APCAL_RR_R_USECOUNT_SUF','���') ;
define('_APCAL_RR_R_USEUNTIL','��') ;


}

?>