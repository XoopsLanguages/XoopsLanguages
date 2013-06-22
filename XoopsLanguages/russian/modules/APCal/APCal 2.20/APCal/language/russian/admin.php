<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {


// Appended by Xoops Language Checker -GIJOE- in 2005-06-29 17:19:30
define('_AM_APCAL_PI_TH_OPTIONS','Options (usually blank)');

define( '_AM_APCAL_LOADED' , 1 ) ;
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');


// titles
//define("_AM_APCAL_CONFIG","������������ ������ APCal");
//define("_AM_APCAL_GENERALCONF","General Settings of APCal");
define("_AM_APCAL_ADMISSION","������������� �������");
define("_AM_APCAL_MENU_EVENTS","�������� �������");
define("_AM_APCAL_MENU_CATEGORIES","���������");
define("_AM_APCAL_MENU_CAT2GROUP","����� ���������");
define("_AM_APCAL_ICALENDAR_IMPORT","������");
define("_AM_APCAL_GROUPPERM","����� �����");
define("_AM_APCAL_TABLEMAINTAIN","��������� ������ (���������� ������)");
define("_AM_APCAL_MYBLOCKSADMIN","�����");

// forms
define("_AM_APCAL_BUTTON_EXTRACT","�������");
define("_AM_APCAL_BUTTON_ADMIT","�����������");
define("_AM_APCAL_BUTTON_MOVE","�����������");
define("_AM_APCAL_BUTTON_COPY","�����������");
define("_AM_APCAL_CONFIRM_DELETE","�� �������, ��� ������ ������� �������?");
define("_AM_APCAL_CONFIRM_MOVE","�� �������, ��� ������ ����������� ������� �� ����� ��������� � ������?");
define("_AM_APCAL_CONFIRM_COPY","�� �������, ��� ������ �������� ��� ������� � ��� ���������?");
define("_AM_APCAL_OPT_PAST","���������");
define("_AM_APCAL_OPT_FUTURE","�������");
define("_AM_APCAL_OPT_PASTANDFUTURE","��������� � �������");

// format
define("_AM_APCAL_DTFMT_LIST_ALLDAY",'d.m.y');
define("_AM_APCAL_DTFMT_LIST_NORMAL",'d.m.y<\b\r />H:i');

// timezones
define('_AM_APCAL_TZOPT_SERVER','������� ���� �������');
define('_AM_APCAL_TZOPT_GMT','GMT');
define('_AM_APCAL_TZOPT_USER','������� ���� ������������');

// admission
define("_AM_APCAL_LABEL_ADMIT","��������� �������: ");
define("_AM_APCAL_MES_ADMITTED","������� ���� ������������");
define("_AM_APCAL_ADMIT_TH0","������������");
define("_AM_APCAL_ADMIT_TH1","���� ������");
define("_AM_APCAL_ADMIT_TH2","���� ���������");
define("_AM_APCAL_ADMIT_TH3","��������");
define("_AM_APCAL_ADMIT_TH4","������� �������");

// events manager & importing iCalendar

define("_AM_APCAL_LABEL_IMPORTFROMWEB","������������� � web (������� �����, ������������ � 'http://' ��� 'webcal://')");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","�������� ������ iCalendar (�������� ���� �� ����� ��������� ������)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","��������� �������:");
define("_AM_APCAL_LABEL_IO_OUTPUT","");
define("_AM_APCAL_LABEL_IO_DELETE","");
define("_AM_APCAL_MES_EVENTLINKTOCAT","������� ���� ��������� � ���������");
define("_AM_APCAL_MES_EVENTUNLINKED","������� ���� ������� �� ���������");
define("_AM_APCAL_FMT_IMPORTED","������� ���� ������������� � '%s'");
define("_AM_APCAL_MES_DELETED","������� ���� �������");
define("_AM_APCAL_IO_TH0","������������");
define("_AM_APCAL_IO_TH1","���� ������");
define("_AM_APCAL_IO_TH2","���� ���������");
define("_AM_APCAL_IO_TH3","��������");
define("_AM_APCAL_IO_TH4","������� �������");
define("_AM_APCAL_IO_TH5","�������������");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "��������" ) ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "�����-��������" ) ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "��������������" ) ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "�����-��������������" ) ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "��������" ) ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "�����-��������" ) ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "����� ������� ������" ) ;
define( '_AM_APCAL_CAT2GROUPDESC' , "�������� ���������, � ������� �������� ������." ) ;
define( '_AM_APCAL_GROUPPERMDESC' , '�������� ����� ������� ��� ������ ������ ������������� (��������� ��� ��������������� � ������ ����� ��������������).<br />��� ����, ����� ��� ��������� �������� � ����, �������� "��������� � ������ ��� �����" � ������ "����� ������������" � ������������ ������.<br /><br />��������/�������������� - ����������� ���������/������������� ��������� ������� ������ ��� ���� ��� ����� ������ �������������.<br />�����-��������/�������������� - ����������� ���������/������������� ��������� ������� ��� ���� ������������ ����� �������������.' ) ;

// Table Maintenance
define( '_AM_APCAL_MB_SUCCESSUPDATETABLE' , "���������� ������(�) ���������" ) ;
define( '_AM_APCAL_MB_FAILUPDATETABLE' , "���������� ������(�) ��������� �� �������" ) ;
define( '_AM_APCAL_NOTICE_NOERRORS' , "� �������� � ������� ������ �� ����������." ) ;
define( '_AM_APCAL_ALRT_CATTABLENOTEXIST' , "������� ��������� �� ����������.<br />\n������� ������� ���������?" ) ;
define( '_AM_APCAL_ALRT_OLDTABLE' , "��������� ������� ������� ��������.<br />\n��������?" ) ;
define( '_AM_APCAL_ALRT_TOOOLDTABLE' , "���������� ������ � �������.<br />\n��������, �� ����������� APCal 0.3x ��� ����� ������ ������.<br />\n���������, ����������, ������� ���������� �� ������ 0.4x ��� 0.5x." ) ;
define( '_AM_APCAL_FMT_SERVER_TZ_ALL' , "������� ���� ������� (������ �����): %+2.1f<br />������� ���� ������� (������ �����): %+2.1f<br />�������� �������� ����� �������: %s<br />�������� �� ������������ XOOPS: %+2.1f<br />��������, ������������ APCal: %+2.1f<br />" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_COUNT' , "�������" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE' , "������� ����" ) ;
define( '_AM_APCAL_TH_SERVER_TZ_VALUE_TO' , "�������� (�� -14.0 �� 14.0)" ) ;
define( '_AM_APCAL_JSALRT_SERVER_TZ' , "�� �������� ������� ����� ������� ������� ����� ����������� ���� ��������" ) ;
define( '_AM_APCAL_NOTICE_SERVER_TZ' , "���� �� ����� ������� ����������� ������� ���� � ������ �������� � ��������� ������� ���� ���������������� � APCal 0.6x or 0.7x, �� ��������� ��� ������.<br /> ��� ���������, ��� ������� ���������� � -5.0 � -4.0 � EDT." ) ;
define( '_AM_APCAL_MB_SUCCESSTZUPDATE' , "������� ���� ��� ������� ������." ) ;

// Categories
define( '_AM_APCAL_CAT_TH_TITLE' , '��������' ) ;
define( '_AM_APCAL_CAT_TH_DESC' , '��������' ) ;
define( '_AM_APCAL_CAT_TH_PARENT' , '������������ ���������' ) ;
define( '_AM_APCAL_CAT_TH_OPTIONS' , '���������' ) ;
define( '_AM_APCAL_CAT_TH_LASTMODIFY' , '���� ���������� ���������' ) ;
define( '_AM_APCAL_CAT_TH_OPERATION' , '��������' ) ;
define( '_AM_APCAL_CAT_TH_ENABLED' , '��������' ) ;
define( '_AM_APCAL_CAT_TH_WEIGHT' , '���' ) ;
define( '_AM_APCAL_CAT_TH_SUBMENU' , '���������������� � �������' ) ;
define( '_AM_APCAL_BTN_UPDATE' , '��������' ) ;
define( '_AM_APCAL_MENU_CAT_EDIT' , '������������� ���������' ) ;
define( '_AM_APCAL_MENU_CAT_NEW' , '������� ����� ������������' ) ;
define( '_AM_APCAL_MB_MAKESUBCAT' , '������������' ) ;
define( '_AM_APCAL_MB_MAKETOPCAT' , '������� ����� ���������' ) ;
define( '_AM_APCAL_MB_CAT_INSERTED' , '����� ��������� ������� �������' ) ;
define( '_AM_APCAL_MB_CAT_UPDATED' , '��������� ������� ���������' ) ;
define( '_AM_APCAL_FMT_CAT_DELETED' , '%s ��������� �������' ) ;
define( '_AM_APCAL_FMT_CAT_BATCHUPDATED' , '%s ��������� ���������' ) ;
define( '_AM_APCAL_FMT_CATDELCONFIRM' , '�� ������������� ������ ������� ��������� %s?' ) ;

// Plugins
define( '_AM_APCAL_PI_UPDATED' , '������� ���������' ) ;
define( '_AM_APCAL_PI_TH_TYPE' , '���' ) ;
define( '_AM_APCAL_PI_TH_TITLE' , '��������:' ) ;
define( '_AM_APCAL_PI_TH_DIRNAME' , '���������� ������:' ) ;
define( '_AM_APCAL_PI_TH_FILE' , '���� �������:' ) ;
define( '_AM_APCAL_PI_TH_DOTGIF' , '��������:' ) ;
define( '_AM_APCAL_PI_TH_OPERATION' , '��������' ) ;
define( '_AM_APCAL_PI_ENABLED' , '��������' ) ;
define( '_AM_APCAL_PI_DELETE' , '�������' ) ;
define( '_AM_APCAL_PI_NEW' , '�����' ) ;
define( '_AM_APCAL_PI_VIEWYEARLY' , '��������� �� �����' ) ;
define( '_AM_APCAL_PI_VIEWMONTHLY' , '��������� �� �������' ) ;
define( '_AM_APCAL_PI_VIEWWEEKLY' , '��������� �� �������' ) ;
define( '_AM_APCAL_PI_VIEWDAILY' , '��������� �� ����' ) ;



}

?>
