<?php
// $Id: modulesadmin.php 2008-07-29 11:38+09:00 2 8 6 $
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

// added in 2.3 - julionc
define('_MD_AM_INSTALLING','Installing ');
define('_MD_AM_TABLE_RESERVED','%s is a reserved table!');
define('_MD_AM_CREATE_TABLES','Creating tables...');
define('_MD_AM_TABLE_CREATED','Table %s created');
define('_MD_AM_INSERT_DATA','&nbsp;&nbsp; Data inserted to table %s');
define('_MD_AM_INSERT_DATA_FAILD','Could not insert %s to database.');
define('_MD_AM_INSERT_DATA_DONE','Module data inserted successfully.');
define('_MD_AM_MODULEID',' Module ID: %s');
define('_MD_AM_SQL_FOUND','SQL file found at %s ');
define('_MD_AM_SQL_NOT_FOUND','SQL file not found at %s');
define('_MD_AM_SQL_NOT_CREATE','ERROR: Could not create %s ');
define('_MD_AM_SQL_NOT_VALID','%s is not a valid SQL!');

define('_MD_AM_GROUP_ID',' Group ID: %s ');
define('_MD_AM_NAME',' Name: ');
define('_MD_AM_VALUE',' Value: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD','Adding templates...');
define('_MD_AM_TEMPLATES_DELETE','Deleting templates...');
define('_MD_AM_TEMPLATES_UPDATE','Updating templates...');

define('_MD_AM_TEMPLATE_ID','Template ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA','Template %s added to the database');
define('_MD_AM_TEMPLATE_ADD_ERROR','ERROR: Could not insert template %s to the database.');
define('_MD_AM_TEMPLATE_COMPILED','Template %s compiled ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED','ERROR: Failed compiling template %s ');
define('_MD_AM_TEMPLATE_DELETE_DATA','Template %s deleted from the database. ');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD','ERROR: Could not delete template %s from the database. ');
define('_MD_AM_TEMPLATE_INSERT_DATA','Template %s inserted to the database. ');
define('_MD_AM_TEMPLATE_RECOMPILE','Template %s recompiled');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD','ERROR: Template %s recompile failed');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR','ERROR: Could not recompile template %s ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR','ERROR: Could not delete old template %s. Aborting update of this file. ');
define('_MD_AM_TEMPLATE_UPDATE','Template %s updated. ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR','ERROR: Could not update %s template. ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD','Adding blocks...');
define('_MD_AM_BLOCKS_DELETE','Deleting block...');
define('_MD_AM_BLOCKS_REBUILD','Rebuilding blocks...');

define('_MD_AM_BLOCK_ID',' Block ID: %s ');

define('_MD_AM_BLOCK_ACCESS','Added block access right');
define('_MD_AM_BLOCK_ACCESS_ERROR','ERROR: Could not add block access right');
define('_MD_AM_BLOCK_ADD','Block %s added ');
define('_MD_AM_BLOCK_ADD_ERROR','ERROR: Could not add block %s to the database! ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE','Database error: %s ');
define('_MD_AM_BLOCK_CREATED','Block %s created ');
define('_MD_AM_BLOCK_DELETE','Block %s deleted. ');
define('_MD_AM_BLOCK_DELETE_DATA','Block template %s deleted from the database. ');
define('_MD_AM_BLOCK_DELETE_ERROR','ERROR: Could not delete block %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR','ERROR: Could not delete block template %s from the database');
define('_MD_AM_BLOCK_DEPRECATED','Block template %s deprecated ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR','ERROR: Could not remove deprecated block template.  ');
define('_MD_AM_BLOCK_UPDATE','Block %s updated. ');

/* Configs */
define('_MD_AM_GONFIG_ID','Config ID: %s');
define('_MD_AM_MODULE_DATA_ADD','Adding module config data...');
define('_MD_AM_MODULE_DATA_DELETE','Deleting module config options...');
define('_MD_AM_MODULE_DATA_UPDATE','Module data updated.');

define('_MD_AM_CONFIG_ADD',' Config option added');
define('_MD_AM_CONFIG_DATA_ADD',' Config %s added to the database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR',' ERROR: Could not insert config %s to the database. ');
define('_MD_AM_GONFIG_DATA_DELETE','Config data deleted from the database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR','ERROR: Could not delete config data from the database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD','Setting group rights...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR','ERROR: Could not delete group permissions ');
define('_MD_AM_GROUP_PERMS_DELETED','Group permissions deleted ');

define('_MD_AM_ACCESS_ADMIN_ADD','Added admin access right for Group ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR','ERROR: Could not add admin access right for Group ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR','Added user access right for Group ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR','ERROR: Could not add user access right for Group ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE','Failed to execute %s');
define('_MD_AM_FAILED_SUCESS','%s executed successfully.');

define('_MD_AM_DELETE_ERROR','ERROR: Could not delete %s');
define('_MD_AM_UPDATE_ERROR','ERROR: Could not update %s');
define('_MD_AM_DELETE_MOD_TABLES','Deleting module tables...');

define('_MD_AM_COMMENTS_DELETE','Deleting comments...');
define('_MD_AM_COMMENTS_DELETE_ERROR','ERROR: Could not delete comments');
define('_MD_AM_COMMENTS_DELETED','Comments deleted');

define('_MD_AM_NOTIFICATIONS_DELETE','Deleting notifications...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR','ERROR: Could not delete notifications');
define('_MD_AM_NOTIFICATIONS_DELETED','Notifications deleted');

define('_MD_AM_TABLE_DROPPED','Table %s dropped!');
define('_MD_AM_TABLE_DROPPED_ERROR','ERROR: Could not drop table %s');
define('_MD_AM_TABLE_DROPPED_FAILDED','ERROR: Not allowed to drop table %s !');
?>