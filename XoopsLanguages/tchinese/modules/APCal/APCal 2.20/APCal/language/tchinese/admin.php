<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_AM_APCAL_LOADED' ) ) {

define( '_AM_APCAL_LOADED' , 1 ) ;
define('_AM_APCAL_COPYRIGHT' , '<a href="http://xoops.antiquespromotion.ca" title="Calendar for Xoops" target="_blank">APCal</a> by <a href="http://www.antiquespromotion.ca" title="Antiques Promotion Canada" target="_blank">AP</a>');

// titles
define("_AM_APCAL_ADMISSION","�ݼf�ƥ�޲z");
define('_AM_APCAL_MENU_EVENTS','�ƥ�޲z');
define('_AM_APCAL_MENU_CATEGORIES','���O�޲z');
define("_AM_APCAL_MENU_CAT2GROUP","���O���i�J�v��");
define("_AM_APCAL_ICALENDAR_IMPORT","�פJ iCalendar");
define("_AM_APCAL_GROUPPERM","�s���v���޲z");
define('_AM_APCAL_TABLEMAINTAIN','�����@ (Upgrade)');
define('_AM_APCAL_MYBLOCKSADMIN','APCal�� �϶��P�s�պ޲z');

// forms
define("_AM_APCAL_BUTTON_EXTRACT","����");
define("_AM_APCAL_BUTTON_ADMIT","�T�w");
define('_AM_APCAL_BUTTON_MOVE','����');
define('_AM_APCAL_BUTTON_COPY','�ƻs');
define("_AM_APCAL_CONFIRM_DELETE","�u���n�R���ܡH");
define('_AM_APCAL_CONFIRM_MOVE','�n�N�����O�ݩʲ����A���_�s�����O�ݩʫ��w�ܡH');
define('_AM_APCAL_CONFIRM_COPY','�n�s�W���O�ݩʶܡH');
define('_AM_APCAL_OPT_PAST','�L�����');
define('_AM_APCAL_OPT_FUTURE','���Ӹ��');
define('_AM_APCAL_OPT_PASTANDFUTURE','�L���w');

// format
define('_AM_APCAL_DTFMT_LIST_ALLDAY','y-m-d');
define('_AM_APCAL_DTFMT_LIST_NORMAL','y-m-d<\b\r />H:i');

// timezones
define('_AM_APCAL_TZOPT_SERVER','���A���ɶ�');
define('_AM_APCAL_TZOPT_GMT','GMT�N��');
define('_AM_APCAL_TZOPT_USER','�ϥΪ̮ɶ�');

// admission
define("_AM_APCAL_LABEL_ADMIT","�T�w�֭�w������ƥ�");
define("_AM_APCAL_MES_ADMITTED","�ƥ�w�g�֭�F");
define("_AM_APCAL_ADMIT_TH0","�Τ�");
define("_AM_APCAL_ADMIT_TH1","�}�l�ɶ�");
define("_AM_APCAL_ADMIT_TH2","�����ɶ�");
define("_AM_APCAL_ADMIT_TH3","�D�D");
define("_AM_APCAL_ADMIT_TH4","���Ʊ���");

// iCalendar I/O
define("_AM_APCAL_LABEL_IMPORTFROMWEB","�q�����W�פJ iCalendar ��� (��J URL �ХH 'http://' �� 'webcal://' �}�Y)");
define("_AM_APCAL_LABEL_UPLOADFROMFILE","�W�� iCalendar ��� (�q�z�������q������ɮ�)");
define("_AM_APCAL_LABEL_IO_CHECKEDITEMS","������ƥ�G");
define("_AM_APCAL_LABEL_IO_OUTPUT","�ץX�� iCalendar�Φ�");
define("_AM_APCAL_LABEL_IO_DELETE","����R��");
define('_AM_APCAL_MES_EVENTLINKTOCAT','�ӧO���ƥ�w�g�n�O�����O�̡C');
define('_AM_APCAL_MES_EVENTUNLINKED','�ӧO���ƥ�H�q�����O�̲���');
define('_AM_APCAL_FMT_IMPORTED','�ӧO���ƥ�w�� %s �פJ');
define("_AM_APCAL_MES_DELETED","�ƥ�w�R���F");
define("_AM_APCAL_IO_TH0","�Τ�");
define("_AM_APCAL_IO_TH1","�}�l����ɶ�");
define("_AM_APCAL_IO_TH2","��������ɶ�");
define("_AM_APCAL_IO_TH3","�D�D");
define("_AM_APCAL_IO_TH4","����");
define("_AM_APCAL_IO_TH5","�w�f��");

// Group's Permissions
define( '_AM_APCAL_GPERM_G_INSERTABLE' , "�s�W�ƥ�") ;
define( '_AM_APCAL_GPERM_G_SUPERINSERT' , "�s�W�ƥ�(���ݼf��)") ;
define( '_AM_APCAL_GPERM_G_EDITABLE' , "�s��ƥ�") ;
define( '_AM_APCAL_GPERM_G_SUPEREDIT' , "�s��ƥ�(���ݼf��)") ;
define( '_AM_APCAL_GPERM_G_DELETABLE' , "�R���ƥ�") ;
define( '_AM_APCAL_GPERM_G_SUPERDELETE' , "�R���ƥ�(���ݼf��)") ;
define( '_AM_APCAL_GPERM_G_TOUCHOTHERS' , "�޲z�L�H�ƥ�") ;
define('_AM_APCAL_CAT2GROUPDESC','�w��U�s�աA���I��C�ӥi�H�X�ݪ����O�v��');
define( '_AM_APCAL_GROUPPERMDESC' , "��ܨC�@�Ӹs�թүవ���v��<br />���p�z�ݭn�o�\��, �������]�w '�Τ��v��' �� '�̷Ӹs���v���]�w'<br />�o�v���]�w�b�޲z���P�X�ȳo��Ӹs�դ��|�Q����") ;

// Table Maintenance
define('_AM_APCAL_MB_SUCCESSUPDATETABLE','��浲�c�ɯŦ��\�I');
define('_AM_APCAL_MB_FAILUPDATETABLE','��浲�c�ɯť��ѡI');
define('_AM_APCAL_NOTICE_NOERRORS','�w�ɯŦ��\�åB�L�o�{������~�C');
define('_AM_APCAL_ALRT_CATTABLENOTEXIST','�L�����O���C<br />�O�_�n�۰ʥͦ��o�Ӫ��H');
define('_AM_APCAL_ALRT_OLDTABLE','�ƥ��檺���c���¡C<br />�O�_�n����ɯšH');
define('_AM_APCAL_ALRT_TOOOLDTABLE','�����~�I<br />�w���i��OV0.3�Τ��e�������A<br />�бz���ɯŨ� V0.4x �� 0.5x�������I');
define('_AM_APCAL_FMT_SERVER_TZ_ALL','�����A�����V�u�ɰϡG %+2.1f<br />�����A�����L�u�ɰϡG %+2.1f<br />���A���ɰϳ]�w�w�q�G %s (���B���A���w�]�y�t��z�����w�]�y�t�Ĭ�|���ͶýX�A���Φb�N)<br />��XOOPS�̦��A���Ҧb�a�w�]���]�w�ȡG %+2.1f<br />��ƾ�APCal�ĥέȡG %+2.1f<br />');
define('_AM_APCAL_TH_SERVER_TZ_COUNT','�`�ƥ��');
define('_AM_APCAL_TH_SERVER_TZ_VALUE','�ɰ�');
define('_AM_APCAL_TH_SERVER_TZ_VALUE_TO','�ܧ�� (-14.0��14.0)');
define('_AM_APCAL_JSALRT_SERVER_TZ','�b�]�w���ʧ@���e��ĳ�z�ƥ��N��Ʈw���ƥ��C');
define('_AM_APCAL_NOTICE_SERVER_TZ','�p�G�z�����A���[�]�����`���ɰ� (Day Light Saving) �N�y�� APCal 0.8�H�e�ҵn�O����ƥX�{�@�Ӥp�ɥ��k���~�t�A�p�����ر��νФū������s�C');
define('_AM_APCAL_MB_SUCCESSTZUPDATE','�Ҧ���Ƴ��w���Ӧ����A���ҹw�]���ɰϳ]�w�����C');

// Categories
define('_AM_APCAL_CAT_TH_TITLE','���O�W��');
define('_AM_APCAL_CAT_TH_DESC','���O����');
define('_AM_APCAL_CAT_TH_PARENT','�D���O');
define('_AM_APCAL_CAT_TH_OPTIONS','�ﶵ');
define('_AM_APCAL_CAT_TH_LASTMODIFY','�̫��s��');
define('_AM_APCAL_CAT_TH_OPERATION','�ާ@');
define('_AM_APCAL_CAT_TH_ENABLED','����');
define('_AM_APCAL_CAT_TH_WEIGHT','�Ƨ�');
define('_AM_APCAL_CAT_TH_SUBMENU','��ܤl���O');
define('_AM_APCAL_BTN_UPDATE','��s');
define('_AM_APCAL_MENU_CAT_EDIT','�s�����O');
define('_AM_APCAL_MENU_CAT_NEW','�s�W���O');
define('_AM_APCAL_MB_MAKESUBCAT','�l���O');
define('_AM_APCAL_MB_MAKETOPCAT','�b�̤W�h�s�W���O');
define('_AM_APCAL_MB_CAT_INSERTED','�s���O�w�g�W�[�F');
define('_AM_APCAL_MB_CAT_UPDATED','���O�w��s�I');
define('_AM_APCAL_FMT_CAT_DELETED','�w�R���F %s ���O�I');
define('_AM_APCAL_FMT_CAT_BATCHUPDATED','%s ���O�w�g�Q��s�F�I');
define('_AM_APCAL_FMT_CATDELCONFIRM','�z�T�w�n�R�� %s �o�����O�ܡH');

// Plugins
define('_AM_APCAL_PI_UPDATED','�w�g������s�F�I');
define('_AM_APCAL_PI_TH_TYPE','�A�Ω�');
define('_AM_APCAL_PI_TH_OPTIONS','�ﶵ (�@�묰�m��)');
define('_AM_APCAL_PI_TH_TITLE','��ܼ��D');
define('_AM_APCAL_PI_TH_DIRNAME','�ؼмҲ�');
define('_AM_APCAL_PI_TH_FILE','Plugin�ɮ�');
define('_AM_APCAL_PI_TH_DOTGIF','�N���I��');
define('_AM_APCAL_PI_TH_OPERATION','�ާ@');
define('_AM_APCAL_PI_ENABLED','����');
define('_AM_APCAL_PI_DELETE','�R��');
define('_AM_APCAL_PI_NEW','�s�]�w');
define('_AM_APCAL_PI_VIEWYEARLY','��ܩ��~��');
define('_AM_APCAL_PI_VIEWMONTHLY','��ܩ�j���');
define('_AM_APCAL_PI_VIEWWEEKLY','��ܩ�g��');
define('_AM_APCAL_PI_VIEWDAILY','��ܩ�C��');

}

?>