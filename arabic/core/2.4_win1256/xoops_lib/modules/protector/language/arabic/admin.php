<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','��������');
define('_MD_A_MYMENU_MYPREFERENCES','��������');

// index.php
define("_AM_TH_DATETIME","�����");
define("_AM_TH_USER","�����");
define("_AM_TH_IP","������");
define("_AM_TH_AGENT","������");
define("_AM_TH_TYPE","�����");
define("_AM_TH_DESCRIPTION","���");

define("_AM_TH_BADIPS" , '����� ������ ������<br /><br /><span style="font-weight:normal;">���� �� ��� ���� �� ���<br />����� ����� �� ���� ���� ��� �� ���</span>' ) ;

define("_AM_TH_GROUP1IPS" , '���� ��������� ������ ���  ��� �������� ����=1<br /><br /><span style="font-weight:normal;">�� ������ �� ���� ����<br />192.168. means 192.168.*<br />����� ����� �� ����  ������� ���� ������� ������</span>' ) ;

define('_AM_LABEL_COMPACTLOG','��� ��� ����� ������� ������ ������');
define('_AM_BUTTON_COMPACTLOG','��� �������');
define('_AM_JS_COMPACTLOGCONFIRM','��� ������� ���� ����� ����� ���� ������');
define('_AM_LABEL_REMOVEALL','��� �� �������');
define('_AM_BUTTON_REMOVEALL','��� ����');
define('_AM_JS_REMOVEALLCONFIRM','���� ��� �� ������ʿ ');
define("_AM_LABEL_REMOVE" , "��� ������� ��������:" ) ;
define("_AM_BUTTON_REMOVE" , "���" ) ;
define("_AM_JS_REMOVECONFIRM" , "�� ���� ������" ) ;
define("_AM_MSG_IPFILESUPDATED" , "�� ����� ������ ���������" ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "������ ��� ��� ��������� ������" ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "��� ��������=1 ������ ����" ) ;
define("_AM_MSG_REMOVED" , "�� ��� �����" ) ;
define('_AM_FMT_CONFIGSNOTWRITABLE','��� ��� ������� ������� 777: %s');


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "����� ���� ����� ��������" ) ;
define("_AM_MSG_DBUPDATED" , "�� ����� ����� ��������" ) ;
define("_AM_CONFIRM_DELETE" , "���� ���� ���� ������� ������ . ��� �" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "�� ���� ������ ����� ����� ������ ����� ��������<br /> �� ������ %s/mainfile.php �����  ��� �� ������<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","���   �����");

define("_AM_ADV_TRUSTPATHPUBLIC","If you can look an image -NG- or the link returns normal page, your XOOPS_TRUST_PATH is not placed properly. The best place for XOOPS_TRUST_PATH is outside of DocumentRoot. If you cannot do that, you have to put .htaccess (DENY FROM ALL) just under XOOPS_TRUST_PATH as the second best way.");
define("_AM_ADV_TRUSTPATHPUBLICLINK","Check php files inside TRUST_PATH are private (it must be 404,403 or 500 error");
define("_AM_ADV_REGISTERGLOBALS","��� ��� ���� ��� ��� ������ �� ������� .<br />�� ���� ��� .htaccess, �� �����..");
define("_AM_ADV_ALLOWURLFOPEN","��� ����� ���� ���������  ������� ���� ������ �� ������ ������ ������ ��� ��� �������� ������<br />���� ������� ������ ��� �����<br />�� �� ��� ���� ���� ������ ���� httpd.conf.<br /><b>������ ����� ����� �� ��� �����<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />�� �� ���� ������ �� �� ��� ���� �������");
define("_AM_ADV_USETRANSSID","������ ��� ������� ����� ������ <br />���� ����� ����� ������� �� ������ ��� .htaccess �� XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","��� ����� �������� �� ������ ����� ��������<br />������ ������ ������'Force sanitizing *' �� ����� ��������� �������");
define("_AM_ADV_LINK_TO_PREFIXMAN","���� ������ ���� ����� ��������");
define("_AM_ADV_MAINUNPATCHED","��� ����� ��� mainfile.php ��� �� ������ �� ��� ������");
define("_AM_ADV_DBFACTORYPATCHED","Your databasefactory is ready for DBLayer Trapping anti-SQL-Injection");
define("_AM_ADV_DBFACTORYUNPATCHED","Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection. Some patches are required.");

define("_AM_ADV_SUBTITLECHECK","���� �� ��� �������� ����");
define("_AM_ADV_CHECKCONTAMI","���� ");
define("_AM_ADV_CHECKISOCOM","������� ������");

// Localization by ezsky
define("_AM_EZ_PREFIX","����� ������");
define("_AM_EZ_TABLES","�������");
define("_AM_EZ_UPDATED","�����");
define("_AM_EZ_COPY","���");
define("_AM_EZ_ACTIONS","���������");
define("_AM_EZ_BACKUP","��� �������");
define("_AM_EZ_DELETE","���");

?>