<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2006-02-15 05:31:20
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME","APCal");

// A brief description of this module
define("_MI_APCAL_DESC","������ ���������");

// Default Locale
define("_MI_APCAL_DEFAULTLOCALE","russia");

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL","�������������");
define("_MI_APCAL_BNAME_MINICAL_DESC","���������� ���� �������������");
define("_MI_APCAL_BNAME_MINICALEX","�������������");
define("_MI_APCAL_BNAME_MINICALEX_DESC","���� ������������� � �������� ��������");
define("_MI_APCAL_BNAME_MONTHCAL","���������");
define("_MI_APCAL_BNAME_MONTHCAL_DESC","���������� �������������� �������� ���������");
define("_MI_APCAL_BNAME_TODAYS","����������� �������");
define("_MI_APCAL_BNAME_TODAYS_DESC","���������� ����������� �������");
define("_MI_APCAL_BNAME_THEDAYS","������� �� %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC","���������� ������� ���������� ���");
define("_MI_APCAL_BNAME_COMING","��������� �������");
define("_MI_APCAL_BNAME_COMING_DESC","���������� ����������� �������");
define("_MI_APCAL_BNAME_AFTER","������� ����� %s");
define("_MI_APCAL_BNAME_AFTER_DESC","���������� ������� ����� ���������� ���");
define("_MI_APCAL_BNAME_NEW","����� �������");
define("_MI_APCAL_BNAME_NEW_DESC","���������� ������� � ������� �������� (����� ������)");

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","��������");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCALUSERS_AUTHORITY", "����� ������������");
define("_MI_APCALGUESTS_AUTHORITY", "����� �����");
define("_MI_APCALDEFAULT_VIEW", "��� �� ��������� � ������");
define("_MI_APCALMINICAL_TARGET", "��� �� ��������� �� ������ �� �������������");
define("_MI_APCALCOMING_NUMROWS", "���������� ������� � ����� ��������� �������");
define("_MI_APCALSKINFOLDER", "���� (��� ���������� � images)");
define("_MI_APCAL_LOCALE", "������ (��������� ����� � locales/*.php)");
define("_MI_APCALSUNDAYCOLOR", "���� �����������");
define("_MI_APCALWEEKDAYCOLOR", "���� ��� ������");
define("_MI_APCALSATURDAYCOLOR", "���� �������");
define("_MI_APCALHOLIDAYCOLOR", "���� ���������");
define("_MI_APCALTARGETDAYCOLOR", "���� ���������� ���");
define("_MI_APCALSUNDAYBGCOLOR", "��� �����������");
define("_MI_APCALWEEKDAYBGCOLOR", "��� ��� ������");
define("_MI_APCALSATURDAYBGCOLOR", "��� �������");
define("_MI_APCALHOLIDAYBGCOLOR", "��� ���������");
define("_MI_APCALTARGETDAYBGCOLOR", "��� ���������� ���");
define("_MI_APCALCALHEADCOLOR", "���� ��������� ���������");
define("_MI_APCALCALHEADBGCOLOR", "��� ��������� ���������");
define("_MI_APCALCALFRAMECSS", "����� ����� ���������");
define("_MI_APCALCANOUTPUTICS", "������� � ics-�����");
define("_MI_APCALMAXRRULEEXTRACT", "������������ ���-�� �������, ����������� �� ������� �������");
define("_MI_APCALWEEKSTARTFROM", "���� ������ ������");
define("_MI_APCALWEEKNUMBERING", "������� ��������� ������");
define("_MI_APCALDAYSTARTFROM", "������� ��� ���������� ����");
define("_MI_APCALTIMEZONE_USING", "������� ���� �������");
define("_MI_APCALUSE24HOUR", "24 ������� ������� (��� - 12 ������� �������)");
define("_MI_APCALNAMEORUNAME" , "���������� ���" ) ;
define("_MI_APCALDESCNAMEORUNAME" , "��������, ����� ��� ����������" ) ;

// Description of each config items
define("_MI_APCALEDITBYGUESTDSC", "��������� ��������� ������� ������");

// Options of each config items
define("_MI_APCALOPT_AUTH_NONE", "�� ����� ��������� �������");
define("_MI_APCALOPT_AUTH_WAIT", "����� ��������� �������, ��������� �������������");
define("_MI_APCALOPT_AUTH_POST", "����� ��������� �������, �������������� �������������");
define("_MI_APCALOPT_AUTH_BYGROUP", "��������� � ������ ��� �����");
define("_MI_APCALOPT_MINI_PHPSELF", "������� ��������");
define("_MI_APCALOPT_MINI_MONTHLY", "��������� �� �������");
define("_MI_APCALOPT_MINI_WEEKLY", "��������� �� �������");
define("_MI_APCALOPT_MINI_DAILY", "��������� �� ����");
define("_MI_APCALOPT_MINI_LIST", "������ �������");
define("_MI_APCALOPT_CANOUTPUTICS", "�� (����� ��������������)");
define("_MI_APCALOPT_CANNOTOUTPUTICS", "��� (������ ��������������)");
define("_MI_APCALOPT_STARTFROMSUN", "�����������");
define("_MI_APCALOPT_STARTFROMMON", "�����������");
define("_MI_APCALOPT_WEEKNOEACHMONTH", "������ ������");
define("_MI_APCALOPT_WEEKNOWHOLEYEAR", "������ ����");
define("_MI_APCALOPT_USENAME" , "��������� ���" ) ;
define("_MI_APCALOPT_USEUNAME" , "��� ������������" ) ;
define("_MI_APCALOPT_TZ_USEXOOPS" , "�� ������������ XOOPS" ) ;
define("_MI_APCALOPT_TZ_USEWINTER" , "������ �����, ���������� �������� (�������������)" ) ;
define("_MI_APCALOPT_TZ_USESUMMER" , "������ �����, ���������� ��������" ) ;

// Admin Menus
define("_MI_APCAL_ADMENU0","������������� �������");
define("_MI_APCAL_ADMENU1","�������� �������");
define("_MI_APCAL_ADMENU_CAT","���������");
define("_MI_APCAL_ADMENU_CAT2GROUP","����� ���������");
define("_MI_APCAL_ADMENU2","����� �����");
define("_MI_APCAL_ADMENU_TM","��������� ������");
define("_MI_APCAL_ADMENU_PLUGINS","�������");
define("_MI_APCAL_ADMENU_ICAL","������");
define("_MI_APCAL_ADMENU_MYBLOCKSADMIN","�����");

// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', '����������');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', '���������� ��������� ���������� APCal.');
define('_MI_APCAL_CATEGORY_NOTIFY', '���������');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', '��������� ���������� ��� ������� ���������.');
define('_MI_APCAL_EVENT_NOTIFY', '�������');
define('_MI_APCAL_EVENT_NOTIFYDSC', '��������� ���������� ��� �������� �������.');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', '����� �������');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', '���������� ���� ��� �������� ������ �������.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', '���������� ���� � �������� ������ �������, ������� �������� �������.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} ����-���������� : ����� �������');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', '����� ������� � ���������');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', '���������� ���� � �������� ������ ������� � ���������.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', '���������� ���� � �������� ������ ������� � ���������, ������� �������� �������.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} ����-���������� : ����� ������� � ��������� {CATEGORY_TITLE}');



}

?>