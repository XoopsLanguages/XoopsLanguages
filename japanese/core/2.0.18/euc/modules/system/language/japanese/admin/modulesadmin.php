<?php
// $Id: modulesadmin.php 2008-07-25T16:16+09:00 2 8 6 $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","�⥸�塼�����");
define("_MD_AM_MODULE","�⥸�塼��");
define("_MD_AM_VERSION","�С������");
define("_MD_AM_LASTUP","�ǽ�������");
define("_MD_AM_DEACTIVATED","�󥢥��ƥ���");
define("_MD_AM_ACTION","���");
define("_MD_AM_DEACTIVATE","�󥢥��ƥ��֤ˤ���");
define("_MD_AM_ACTIVATE","�����ƥ��֤ˤ���");
define("_MD_AM_UPDATE","���åץǡ���");
define("_MD_AM_DUPEN","�⥸�塼�뤬DB���2����Ͽ����Ƥ��ޤ���");
define("_MD_AM_DEACTED","���򤵤줿�⥸�塼����󥢥��ƥ��֤ˤ��ޤ��������Υ⥸�塼�������˺�����뤳�Ȥ��Ǥ��ޤ���");
define("_MD_AM_ACTED","���򤵤줿�⥸�塼���ͭ�������ޤ���");
define("_MD_AM_UPDTED","���򤵤줿�⥸�塼��򹹿����ޤ���");
define("_MD_AM_SYSNO","�����ƥ�⥸�塼���̵�����ˤ��뤳�ȤϤǤ��ޤ���");
define("_MD_AM_STRTNO","���Υ⥸�塼����������Ȥγ��ϥ⥸�塼��Ȥ�����Ͽ����Ƥ��ޤ������Υ⥸�塼���̵�����ˤ���ˤϡ����������˥塼�ˤ����Ƴ��ϥ⥸�塼����ѹ���ԤäƤ���������");

// added in RC2
define("_MD_AM_PCMFM","�ʲ������Ƥǹ�����Ԥ��ޤ�");

// added in RC3
define("_MD_AM_ORDER","ɽ����");
define("_MD_AM_ORDER0","��0 = ��ɽ����");
define("_MD_AM_ACTIVE","�����ƥ���");
define("_MD_AM_INACTIVE","�󥢥��ƥ���");
define("_MD_AM_NOTINSTALLED","̤���󥹥ȡ���");
define("_MD_AM_NOCHANGE","�ѹ��ʤ�");
define("_MD_AM_INSTALL","���󥹥ȡ���");
define("_MD_AM_UNINSTALL","���󥤥󥹥ȡ���");
define("_MD_AM_SUBMIT","����");
define("_MD_AM_CANCEL","����󥻥�");
define("_MD_AM_DBUPDATE","�ǡ����١����򹹿����ޤ���");
define("_MD_AM_BTOMADMIN","�⥸�塼�������˥塼�����");

// %s represents module name
define("_MD_AM_FAILINS","%s�⥸�塼��򥤥󥹥ȡ���Ǥ��ޤ���Ǥ���");
define("_MD_AM_FAILACT","%s�⥸�塼��򥢥��ƥ��֤����ꤹ�뤳�Ȥ��Ǥ��ޤ���Ǥ���");
define("_MD_AM_FAILDEACT","%s�⥸�塼����󥢥��ƥ��֤����ꤹ�뤳�Ȥ��Ǥ��ޤ���Ǥ���");
define("_MD_AM_FAILUPD","%s�⥸�塼��򥢥åץǡ��Ȥ��뤳�Ȥ��Ǥ��ޤ���Ǥ�����");
define("_MD_AM_FAILUNINS","%s�⥸�塼��򥢥󥤥󥹥ȡ���Ǥ��ޤ���Ǥ���");
define("_MD_AM_FAILORDER","%s�⥸�塼���ɽ������ѹ��Ǥ��ޤ���Ǥ���");
define("_MD_AM_FAILWRITE","�ᥤ���˥塼�ե�����ؤν񤭹��ߤ˼��Ԥ��ޤ���");
define("_MD_AM_ALEXISTS","%s�⥸�塼��ϴ���¸�ߤ��ޤ�");
define("_MD_AM_ERRORSC","���顼��");
define("_MD_AM_OKINS","%s�⥸�塼��Υ��󥹥ȡ��뤬��λ���ޤ���");
define("_MD_AM_OKACT","%s�⥸�塼��򥢥��ƥ��֤����ꤷ�ޤ���");
define("_MD_AM_OKDEACT","%s�⥸�塼����󥢥��ƥ��֤����ꤷ�ޤ���");
define("_MD_AM_OKUPD","%s�⥸�塼��Υ��åץǡ��Ȥ���λ���ޤ���");
define("_MD_AM_OKUNINS","%s�⥸�塼��Υ��󥤥󥹥ȡ��뤬��λ���ޤ���");
define("_MD_AM_OKORDER","%s�⥸�塼���ɽ������ѹ����ޤ���");

define('_MD_AM_RUSUREINS','���Υ⥸�塼��򥤥󥹥ȡ��뤹��ˤϲ��Υܥ���򥯥�å����Ƥ�������');
define('_MD_AM_RUSUREUPD','���Υ⥸�塼��Υ��åץǡ��Ȥ�Ԥ��ˤϲ��Υܥ���򥯥�å����Ƥ�������');
define('_MD_AM_RUSUREUNINS','�����ˤ��Υ⥸�塼��򥢥󥤥󥹥ȡ��뤷�Ƥ�������Ǥ�����');
define('_MD_AM_LISTUPBLKS','�⥸�塼��Υ��åץǡ��Ȥ�Ԥ��ޤ���<br />����Υ֥�å������(�ƥ�ץ졼�Ȥȥ��ץ����)�Ͼ�񤭤���ޤ���<br />');
define('_MD_AM_NEWBLKS','�����֥�å�');
define('_MD_AM_DEPREBLKS','Deprecated Blocks');
?>