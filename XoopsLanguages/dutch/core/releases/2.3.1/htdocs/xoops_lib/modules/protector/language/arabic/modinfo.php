<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'protector' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {



// Appended by Xoops Language Checker -GIJOE- in 2007-07-30 16:31:33
define($constpref.'_BANIP_TIME0','���  �����  ��������� .. ��������');
define($constpref.'_OPT_BIPTIME0','���  ���� ����� �����');
define($constpref.'_DOSOPT_BIPTIME0','���  ���� ����� �����');

// Appended by Xoops Language Checker -GIJOE- in 2007-04-08 04:24:49
define($constpref.'_ADMENU_MYBLOCKSADMIN','��������');

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","������ �����");

// A brief description of this module
define($constpref."_DESC","��� �������� ���� �� ����� �� ������ �������� �������� ������ ����� �����  . ���� ��� �� �����������  ���� ������� ������� ����");

// Menu
define($constpref."_ADMININDEX","��������");
define($constpref."_ADVISORY","���� �������");
define($constpref."_PREFIXMANAGER","�����  ����� ��������");

// Configs
define($constpref.'_GLOBAL_DISBL','���� �����');
define($constpref.'_GLOBAL_DISBLDSC','��� ������ ������� ��� ������ ������� �����<br /> ����� ��� ������ �� ���� ���� ����� ����� ����� ������ �� ���� ������� ��� �� �������');

define($constpref.'_RELIABLE_IPS','��������� ������� ����');
define($constpref.'_RELIABLE_IPSDSC','�� ��� �� ��� ���� ����� | ������ ^ �� ����� �� ��� ����');

define($constpref.'_LOG_LEVEL','����� �����');
define($constpref.'_LOG_LEVELDSC','');

define($constpref.'_LOGLEVEL0','������');
define($constpref.'_LOGLEVEL15','����');
define($constpref.'_LOGLEVEL63','����');
define($constpref.'_LOGLEVEL255','���');

define($constpref.'_HIJACK_TOPBIT','������� ��  ���� ������� ����� ������ �� �� ���');
define($constpref.'_HIJACK_TOPBITDSC','������� �� ����� ������� ���� �������<br />������ ��������� �� 32 (��� ����� ����)<br />�� ���� �� ��� ���� ���� ����<br /> �� ��� ������ ���� ������ ���  192.168.0.0-192.168.0.255, �� 24 �� ��� ������ ��� ������');
define($constpref.'_HIJACK_DENYGP','�������� ����� ���� ������');
define($constpref.'_HIJACK_DENYGPDSC','���� ���� �������:<br />����� �������� ���� ����  ���� ������ ������ <br />(������ ������  ������ ������ �� ���� ������)');
define($constpref.'_SAN_NULLBYTE','����� �������');
define($constpref.'_SAN_NULLBYTEDSC','���� �������� �������� ��� ����� "\\0" ��� ����� ���� ��� ����� �������<br />�� ���� ���� ��� ��� ������� ���� ������� ��� ������<br />(����� ��� ����� �� ���� �������)');
define($constpref.'_DIE_NULLBYTE','�� ���� ���� ����� ����� ���� ������ �� �����');
define($constpref.'_DIE_NULLBYTEDSC','��� �������� �������� ��� ����� "\\0" ��� ����� ���� ��� ����� �������<br />�� ���� ���� ��� ��� ������� ���� ������� ��� ������<br />(����� ��� ����� �� ���� �������)');
define($constpref.'_DIE_BADEXT','���� !! �� ���� ������ ���  ��� �� ���� �������');
define($constpref.'_DIE_BADEXTDSC','�� ���� ������ ��� �� ��� ��� ���� �� ���� ����� ���� ��� �� ����� �������� ������� �� ������ ������ ��� �����<br />�� ������ ����� �� ��� ���� ���� ����� ����� �������� �� ��� ��');
define($constpref.'_CONTAMI_ACTION','����� �� ���� ���� ���� ���� ����');
define($constpref.'_CONTAMI_ACTIONDS','����� ����� ���� ���� ����� ������� �� ���� ������ ��� ����  ������ ������ ���� ���� �����  �����');
define($constpref.'_ISOCOM_ACTION','����� �� ���� ������ ����� ��� ���� ��� �� ���������');
define($constpref.'_ISOCOM_ACTIONDSC','���� ����� �� ����� ��������<br />����� ����� �� ���� ������ ��� ���� �������� ��� "/*" �� ���<br />"����� �����" ����� �����  ����� "*/" �� �������<br />(���� ������� ����� �����)');
define($constpref.'_UNION_ACTION',' Union ����� �� ���� ���� ����� ������� ');
define($constpref.'_UNION_ACTIONDSC','���� ����� ��� ����� ��������:<br />����� �� ���� ������ ��� ��� ����� ��������.<br />"uni-on" ��� "union"����� �����" ����� ���� ����" <br />(���� ������� ����� �����)');
define($constpref.'_ID_INTVAL',' Select ID ����� �� ���� ��� ��� �� ����� ��������  ���� ��� ����� ');
define($constpref.'_ID_INTVALDSC','��� ��� ���� "*id" ������ �����<br />��� ������ ������ �� ��� �������  ������ ������ ��������<br />�� ������ ����� ��� ����� ��� ��� ����� ������ ��� ��� ��������� ������ ��� ����� ������ �������� �������');
define($constpref.'_FILE_DOTDOT','������� �� �������� ��������');
define($constpref.'_FILE_DOTDOTDSC','��� �� ������� ���� ����� ��� ���� ����� ��� ������ ���� �����');

define($constpref.'_BF_COUNT','���� ����� ��� ������');
define($constpref.'_BF_COUNTDSC','�� ��� ��������� ���� ���� ��� ��� ���� ������ ����� ����� ���� ���� ����� ��� ���� �� ������ �������� ��� ����� ���� ������ ��� ���');

define($constpref.'_DOS_SKIPMODS','��������� ��������� �� ������ ����� ����� �����');
define($constpref.'_DOS_SKIPMODSDSC','�� ����� ��������� ������� ������|. ��� �������� ���� �� ���� ���� ������� ����� ������� ');

define($constpref.'_DOS_EXPIRE','������ ���� ����� ������� ��������');
define($constpref.'_DOS_EXPIREDSC','f5 ��� ����� ���� ��� ������ ������ ���������� ���� ����� ������ �� �������� ');

define($constpref.'_DOS_F5COUNT','F5  ��� ������ ��������� ���� �� ���  �����');
define($constpref.'_DOS_F5COUNTDSC','����� ����� ������ ���� �� ����� ������� ������� ������ ����  �� ���� �����');
define($constpref.'_DOS_F5ACTION','F5  ����� ������ ���� ������ ���� �� ���');

define($constpref.'_DOS_CRCOUNT','��� ����� ������� �� ��� ������ �����');
define($constpref.'_DOS_CRCOUNTDSC','���� ������ ����� ������ �� ����� ��� ��� ������');
define($constpref.'_DOS_CRACTION','����� �� ���� ������ ������ ����� �� ����� ����� ���� ��� ������');

define($constpref.'_DOS_CRSAFE','������ ����� �������� ������� ���');
define($constpref.'_DOS_CRSAFEDSC','������ ����� �������� ����� ����� ��� ��� ���� ��� ������ ��� ���� ��� ������ ������� �� ��� ���� ������ ���� ������ ���� �� ������ ���� ������� ���� ��� ���� �����');

define($constpref.'_OPT_NONE','�����');
define($constpref.'_OPT_SAN','����� �����');
define($constpref.'_OPT_EXIT','���� ����� �����');
define($constpref.'_OPT_BIP','��� ������');

define($constpref.'_DOSOPT_NONE','�����');
define($constpref.'_DOSOPT_SLEEP','�� � �������');
define($constpref.'_DOSOPT_EXIT','���� ����� �����');
define($constpref.'_DOSOPT_BIP','��� ������');
define($constpref.'_DOSOPT_HTA','��� ������ ���.htaccess(������ ������)');

define($constpref.'_BIP_EXCEPT','�������� ���� �� ��� ����� ����');
define($constpref.'_BIP_EXCEPTDSC','�� ��� ��� �������� �� ��� ���� ����� ������� ������ �������');

define($constpref.'_DISABLES','����� ��� �������� �� ���� ���� ');

define($constpref.'_BIGUMBRELLA','����� anti-XSS (������)');
define($constpref.'_BIGUMBRELLADSC',' ��� ����� �� ������� ���� ����� ������� �� ���� ���� ���� ������ ����� ������  ���� ����� �� ���� �������  ����� ���� ����� ��� ������ ��������� ������');

define($constpref.'_SPAMURI4U',' Spam ��� ������� ��� ����� ����� ��� ���� �������  ��� �������� ����');
define($constpref.'_SPAMURI4UDSC','��� ����� ���� �� ���� ���� ���� ����� ����� ������  ���� ������� �� ��� ��� ������ �����');
define($constpref.'_SPAMURI4G','Spam ��� ������� ��� ����� ����� ��� ���� �������  ��� �������� ����');
define($constpref.'_SPAMURI4GDSC','��� ����� ���� �� ���� ���� ���� ����� ����� ������  ���� ������� �� ��� ��� ������ �����');

}

?>