<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','�׼�������');
define('_MD_A_MYMENU_MYPREFERENCES','�Ϲݼ���');

// index.php
define("_AM_TH_DATETIME","�Ͻ�");
define("_AM_TH_USER","User");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","AGENT");
define("_AM_TH_TYPE","����");
define("_AM_TH_DESCRIPTION","������");

define("_AM_TH_BADIPS" , "���� IP ����Ʈ<br /><br />���ٿ� �ϳ��� IP�ּ� �����Ͻñ� �ٶ��ϴ�. �������� �νø� ��� �㰡�ϰ� �˴ϴ�." ) ;
//define("_AM_TH_ENABLEIPBANS" , "IP�ּҿ� ���� ���ٱ����� �����" ) ;

define("_AM_TH_GROUP1IPS" , '������ �׷�(1) �㰡 IP<br /><br />���ٿ� �ϳ��� IP�ּ� �����Ͻñ� �ٶ��ϴ�. �������� �νø� ��� �㰡�ϰ� �˴ϴ�.<br />192.168. means 192.168.*<br />blank means all IPs are allowed</span>' ) ;

define("_AM_LABEL_COMPACTLOG" , "�α׸� ����Ʈȭ" ) ;
define("_AM_BUTTON_COMPACTLOG" , "����Ʈȭ ����" ) ;
define("_AM_JS_COMPACTLOGCONFIRM" , "�ߺ���(IP,Type) ���ڵ带 ����ó���մϴ�." ) ;
define("_AM_LABEL_REMOVEALL" , "��� ���ڵ带 ����:" ) ;
define("_AM_BUTTON_REMOVEALL" , "��λ��� ����" ) ;
define("_AM_JS_REMOVEALLCONFIRM" , "��� �α׸� ����ó���մϴ�. ��� �Ͻðڽ��ϱ�?" ) ;

define("_AM_LABEL_REMOVE" , "üũ�� ���ڵ带 ������:" ) ;
define("_AM_BUTTON_REMOVE" , "��������" ) ;
define("_AM_JS_REMOVECONFIRM" , "������ �����Ͻ� �ǰ���?" ) ;
//define("_AM_MSG_PRUPDATED" , "������ ���������� �����Ͽ����ϴ�!" ) ;
define("_AM_MSG_REMOVED" , "�����Ͽ����ϴ�." ) ;

define("_AM_MSG_IPFILESUPDATED" , "IP ����Ʈ������ �����Ͽ����ϴ�." ) ;
define("_AM_MSG_BADIPSCANTOPEN" , "�ź�IP(bad ip)����Ʈ������ ������ �����ϴ�." ) ;
define("_AM_MSG_GROUP1IPSCANTOPEN" , "�����ڿ�IP ����Ʈ������ ������ �����ϴ�." ) ;
define("_AM_FMT_CONFIGSNOTWRITABLE" , "configs ���丮�� ���Ⱑ������ ������ �ּ���!: %s" ) ;


// prefix_manager.php
define("_AM_H3_PREFIXMAN" , "���ξ�(Prefix) ������" ) ;
define("_AM_MSG_DBUPDATED" , "����Ÿ���̽��� ���������� ���ŵǾ����ϴ�." ) ;
define("_AM_CONFIRM_DELETE" , "��� ���̺��� �����˴ϴ�. ����Ͻðڽ��ϱ�?" ) ;
define("_AM_TXT_HOWTOCHANGEDB" , "���̺� ���ξ�(prefix)�� �����Ͻ� ���� <br />%s/mainfile.php �� ���� �κ��� ���� �������ּž� �մϴ�.<br /><br />define('XOOPS_DB_PREFIX','<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","Insecure");

define("_AM_ADV_REGISTERGLOBALS","�� ������ ������ ���õ� �پ��� ������ ������ �����ϰ� �մϴ�. <br />���� .htaccess �� ����� �� �ִ� ������� ��� ���ü����� �Ͻñ� �ٶ��ϴ�. �ڼ��� ������ �����ڿ��� �����Ͻñ� �ٶ��ϴ�.");
define("_AM_ADV_ALLOWURLFOPEN","�� ������ �ܺ��� ��ũ��Ʈ�� ���డ������ ���輺�� �ֽ��ϴ� .<br />�� ������ ������ ���ؼ� ���������ڱ����� �ʿ��մϴ�.<br />���������ڶ�� php.ini , httpd.conf �� ���ü����� �����Ͻñ� �ٶ��ϴ�.<br /><b>Sample of httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />���� �����ڰ� �ƴ϶�� ���������ڿ��� �����Ͻñ� �ٶ��ϴ�.");
define("_AM_ADV_USETRANSSID","���� ID�� �ڵ������� ��ũ�� ǥ�õǾ����� �������� �Ǿ� �ֽ��ϴ�. ���� ����ä������� ������ ������ XOOPS_ROOT_PATH�� .htaccess�� ������ ���� �ۼ��Ͻñ� �ٶ��ϴ�.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","���̺� ���ξ�(Prefix)�� �⺻���� xoops�� ���� 'SQL Injections'�� ���赵�� ������ϴ�.<br />'Isolated Comments���͸�'(Force sanitizing *) �� SQL Injection ���������� ������ ON���� �� �ֽñ� �ٶ��ϴ�.");
define("_AM_ADV_LINK_TO_PREFIXMAN","���ξ�(prefix) �����ڷ�");
define("_AM_ADV_MAINUNPATCHED","Xoops Protector�� ������� ���ϱ� ���ؼ� mainfile.php�� ������ �ʿ䰡 �ֽ��ϴ�. <br />README�� �����Ͻ� �� mainfile.php ���� ������ �� �ֽñ� �ٶ��ϴ�.");
//define("_AM_ADV_RESCUEPASSWORD","���� �н�����(Rescue Password)");
//define("_AM_ADV_RESCUEPASSWORDUNSET","�̼���");
//define("_AM_ADV_RESCUEPASSWORDSHORT","������ 6 ���̻����� �����Ͻñ� �ٶ��ϴ�. (min 6 charactors)");

define("_AM_ADV_SUBTITLECHECK","Protector �۵� üũ");
//define("_AM_ADV_AT1STSETPASSWORD","�ڱ��ڽ��� ���� IP ����Ʈ�� �ö� ���ɼ��� ������ �� �����Ƿ� ���� ���� �н����带 �����Ͻñ� �ٶ��ϴ�.");
define("_AM_ADV_CHECKCONTAMI","���� ����");
define("_AM_ADV_CHECKISOCOM","��� �ڸ�Ʈ");


// Localization by ezsky
define("_AM_EZ_PREFIX","Prefix");
define("_AM_EZ_TABLES","Tables");
define("_AM_EZ_UPDATED","Updated");
define("_AM_EZ_COPY","Copy");
define("_AM_EZ_ACTIONS","Actions");
define("_AM_EZ_BACKUP","Backup");
define("_AM_EZ_DELETE","Delete");


?>