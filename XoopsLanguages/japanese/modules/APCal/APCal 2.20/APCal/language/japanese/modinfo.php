<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","�������塼���ե�������");

// Default Locale
define("_MI_APCAL_DEFAULTLOCALE","japan");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","�ߥ˥�������");
define("_MI_APCAL_BNAME_MINICAL_DESC","�����ʥ���������ɽ��");
define("_MI_APCAL_BNAME_MINICALEX","��ĥ�ߥ˥�������");
define("_MI_APCAL_BNAME_MINICALEX_DESC","�ץ饰�����ĥ����ǽ�ʥߥ˥���������ɽ��");
define("_MI_APCAL_BNAME_MONTHCAL","���̥ե륵������������");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","���̥ե륵��������������ɽ��");
define("_MI_APCAL_BNAME_TODAYS","������ͽ��");
define("_MI_APCAL_BNAME_TODAYS_DESC","������ͽ���ɽ��");
define("_MI_APCAL_BNAME_THEDAYS","%s ��ͽ��");
define("_MI_APCAL_BNAME_THEDAYS_DESC","���������ǻ��ꤵ�줿����ͽ���ɽ��");
define("_MI_APCAL_BNAME_COMING","�����ͽ��");
define("_MI_APCAL_BNAME_COMING_DESC","�����ʹߤ�ͽ���ɽ��");
define("_MI_APCAL_BNAME_AFTER","%s �ʹߤ�ͽ��");
define("_MI_APCAL_BNAME_AFTER_DESC","���������ǻ��ꤵ�줿���ʹߤ�ͽ���ɽ��");
define("_MI_APCAL_BNAME_NEW","������ͽ��");
define("_MI_APCAL_BNAME_NEW_DESC","��������Ͽ���줿ͽ���ɽ��");

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","������Ͽ");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "���̥桼���θ���");
define("_MI_APCALGUESTS_AUTHORITY", "�����Ȥθ���");
define("_MI_APCALDEFAULT_VIEW", "�ǥե���ȤΥ�������ɽ������");
define("_MI_APCALMINICAL_TARGET", "�ߥ˥������������դ򥯥�å���������ư��");
define("_MI_APCALCOMING_NUMROWS", "�����ͽ��֥�å��Ǥ�ɽ��ͽ����");
define("_MI_APCALSKINFOLDER", "������ե����̾");
define("_MI_APCAL_LOCALE", "�ϰ�����ե����� (locales/*.php)");
define("_MI_APCALSUNDAYCOLOR", "��������ʸ����");
define("_MI_APCALWEEKDAYCOLOR", "ʿ����ʸ����");
define("_MI_APCALSATURDAYCOLOR", "��������ʸ����");
define("_MI_APCALHOLIDAYCOLOR", "������ʸ����");
define("_MI_APCALTARGETDAYCOLOR", "�о�����ʸ����");
define("_MI_APCALSUNDAYBGCOLOR", "���������طʿ�");
define("_MI_APCALWEEKDAYBGCOLOR", "ʿ�����طʿ�");
define("_MI_APCALSATURDAYBGCOLOR", "���������طʿ�");
define("_MI_APCALHOLIDAYBGCOLOR", "�������طʿ�");
define("_MI_APCALTARGETDAYBGCOLOR", "�о������طʿ�");
define("_MI_APCALCALHEADCOLOR", "�إå���ʸ����");
define("_MI_APCALCALHEADBGCOLOR", "�إå����طʿ�");
define("_MI_APCALCALFRAMECSS", "���������ե졼��Υ�������");
define("_MI_APCALCANOUTPUTICS", "ics�ե�������Ϥε��ġ��Ե���");
define("_MI_APCALMAXRRULEEXTRACT", "�����֤�����Ÿ����¿� (COUNT)");
define("_MI_APCALWEEKSTARTFROM", "���γ�������");
define("_MI_APCALWEEKNUMBERING", "���ο�����");
define("_MI_APCALDAYSTARTFROM", "��������ڤ����");
define("_MI_APCALTIMEZONE_USING", "�����ФΥ����ॾ�������");
define("_MI_APCALUSE24HOUR", "24�������Ȥ���ʤ������ʤ顢12��������");
define("_MI_APCALNAMEORUNAME" , "��Ƽ�̾��ɽ��" ) ;
define("_MI_APCALDESCNAMEORUNAME" , "������̾���ϥ�ɥ�̾�����򤷤Ʋ�����" ) ;

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "�����Ȥ�ͽ����ɲäǤ��뤫�ɤ���");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "��Ͽ�Բ�");
define("_MI_APCALOPT_AUTH_WAIT", "��Ͽ�ġ��׾�ǧ");
define("_MI_APCALOPT_AUTH_POST", "��Ͽ�ġ���ǧ����");
define("_MI_APCALOPT_AUTH_BYGROUP", "���롼��������ꤹ��");
define("_MI_APCALOPT_MINI_PHPSELF", "���ߤΥڡ����򤽤Τޤ�ɽ��");
define("_MI_APCALOPT_MINI_MONTHLY", "����Υ���������ᥤ���ɽ��");
define("_MI_APCALOPT_MINI_WEEKLY", "����Υ���������ᥤ���ɽ��");
define("_MI_APCALOPT_MINI_DAILY", "���������Υ���������ᥤ���ɽ��");
define("_MI_APCALOPT_MINI_LIST", "ͽ���������");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "���϶ػ�");
define("_MI_APCALOPT_CANOUTPUTICS", "���ϵ���");
define("_MI_APCALOPT_STARTFROMSUN", "������");
define("_MI_APCALOPT_STARTFROMMON", "������");
define("_MI_APCALOPT_WEEKNOEACHMONTH", "���");
define("_MI_APCALOPT_WEEKNOWHOLEYEAR", "ǯ���̻�");
define("_MI_APCALOPT_USENAME" , "�ϥ�ɥ�̾" ) ;
define("_MI_APCALOPT_USEUNAME" , "������̾" ) ;
define("_MI_APCALOPT_TZ_USEXOOPS" , "XOOPS�Ǥ�������" ) ;
define("_MI_APCALOPT_TZ_USEWINTER" , "�����Ф�������줿�߻��֡ʿ侩��" ) ;
define("_MI_APCALOPT_TZ_USESUMMER" , "�����Ф�������줿�ƻ���" ) ;


// Admin Menus
define("_MI_APCAL_ADMENU0","�������塼��ξ�ǧ");
define("_MI_APCAL_ADMENU1","ͽ�����");
define("_MI_APCAL_ADMENU_CAT","���ƥ��꡼����");
define("_MI_APCAL_ADMENU_CAT2GROUP","���ƥ��꡼�Υ�����������");
define("_MI_APCAL_ADMENU2","���롼�פ�����Ū�ʸ���");
define("_MI_APCAL_ADMENU_TM","�ơ��֥���ƥʥ�");
define("_MI_APCAL_ADMENU_PLUGINS","�ץ饰�������");
define("_MI_APCAL_ADMENU_ICAL","iCalendar�Υ���ݡ���");
define('_MI_APCAL_ADMENU_MYTPLSADMIN','�ƥ�ץ졼�ȴ���');
define('_MI_APCAL_ADMENU_MYBLOCKSADMIN','�֥�å������롼�״���');


// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', '�⥸�塼������');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'APCal�⥸�塼�����Τˤ��������Υ��ץ����');
define('_MI_APCAL_CATEGORY_NOTIFY', '���ƥ��꡼');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', '������Υ��ƥ��꡼���Ф������Υ��ץ����');
define('_MI_APCAL_EVENT_NOTIFY', 'ͽ��');
define('_MI_APCAL_EVENT_NOTIFYDSC', 'ɽ�����ͽ����Ф������Υ��ץ����');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', '����ͽ����Ͽ');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', '������ͽ�꤬��Ͽ���줿�������Τ���');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', '������ͽ�꤬��Ͽ���줿�������Τ���');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: ������ͽ�꤬��Ͽ����ޤ���');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', '���ƥ�����ο�ͽ����Ͽ');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', '���Υ��ƥ���˿�ͽ�꤬��Ͽ���줿�������Τ���');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', '���Υ��ƥ���˿�ͽ�꤬��Ͽ���줿�������Τ���');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: ������ͽ�꤬��Ͽ����ޤ���');


}

?>
