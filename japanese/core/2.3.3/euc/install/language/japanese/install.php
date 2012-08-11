<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @version     $Id: install.php 2008-07-29 05:43+0900 2 8 6 $
 */

define("SHOW_HIDE_HELP","�إ�פ�ɽ��/����" );

// Configuration check page
define("SERVER_API","Server API" );
define("PHP_EXTENSION","%s �������ƥ󥷥��" );
define("CHAR_ENCODING","ʸ�����åȥ��󥳡���" );
define("XML_PARSING","XML parsing" );
define("REQUIREMENTS","�׷�" );
define("_PHP_VERSION","PHP �С������" );
define("RECOMMENDED_SETTINGS","�侩����" );
define("RECOMMENDED_EXTENSIONS","�侩�������ƥ󥷥��" );
define("SETTING_NAME","����̾" );
define("RECOMMENDED","�侩" );
define("CURRENT","Current" );
define("RECOMMENDED_EXTENSIONS_MSG","�����Υ������ƥ󥷥����̾�����פǤ����������Ĥ�����ħŪ��������ˡ��¿���졢RSS���ݡ��ȡˤ���Ѥ�����ˤ�ɬ�פǤ���" );
define("NONE","�ʤ�" );
define("SUCCESS","����" );
define("WARNING","�ٹ�" );
define("FAILED","����" );



// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS ���󥹥ȡ��륦��������" );

define("LANGUAGE_SELECTION","��������" );
define("LANGUAGE_SELECTION_TITLE","���󥹥ȡ����Ȥ˻��Ѥ����������򤷤Ƥ�������");		// L128
define("INTRODUCTION","����ȥ���������" );
define("INTRODUCTION_TITLE","XOOPS ���󥹥ȡ��륦�������ɤؤ褦����" );		// L0
define("CONFIGURATION_CHECK","���������å�" );
define("CONFIGURATION_CHECK_TITLE","�����дĶ��Υ����å�" );
define("PATHS_SETTINGS","�ѥ�������" );
define("PATHS_SETTINGS_TITLE","�ѥ�������" );
define("DATABASE_CONNECTION","�ǡ����١��� connection" );
define("DATABASE_CONNECTION_TITLE","Database connection" );
define("DATABASE_CONFIG","�ǡ����١�������" );
define("DATABASE_CONFIG_TITLE","�ǡ����١�������" );
define("CONFIG_SAVE","������¸" );
define("CONFIG_SAVE_TITLE","�����ƥ๽������¸���ޤ���" );
define("TABLES_CREATION","�ơ��֥����" );
define("TABLES_CREATION_TITLE","�ǡ����١����Υơ��֥����" );
define("INITIAL_SETTINGS","�������" );
define("INITIAL_SETTINGS_TITLE","Please enter your initial settings" );
define("DATA_INSERTION","�ǡ�������" );
define("DATA_INSERTION_TITLE","Saving your settings to the database" );
define("WELCOME","�褦����" );
define("WELCOME_TITLE","XOOPS ���󥹥ȡ��뤬��λ���ޤ���" );


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS Physical paths" );
define("XOOPS_URLS","Web locations" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS documents root physical path" );
define("XOOPS_ROOT_PATH_HELP","Physical path to the XOOPS documents (served) directory WITHOUT trailing slash" );

define("XOOPS_LIB_PATH_LABEL","XOOPS library directory" );
define("XOOPS_LIB_PATH_HELP","Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure.");
define("XOOPS_DATA_PATH_LABEL","XOOPS datafiles directory" );
define("XOOPS_DATA_PATH_HELP","Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure." );

define("XOOPS_URL_LABEL","XOOPS�ؤ�URL" ); // L56
define("XOOPS_URL_HELP","XOOPS �˥�����������URL�����Ϥ��Ƥ���������<br />�������ˤϡ�/�פ��ղä��ʤ��Ǥ���������" ); // L58

define("LEGEND_CONNECTION","Server connection" );
define("LEGEND_DATABASE","�ǡ����١���" ); // L51

define("DB_HOST_LABEL","�ǡ����١��������ФΥۥ���̾" );	// L27
define("DB_HOST_HELP",  "�����Ѥ���ǡ����١��������ФΥۥ���̾�����Ϥ��Ƥ���������<br />���褯ʬ����ʤ����ϡ���<em>localhost</em>�פȤ��ơ��ۤ�����Ϥ���ޤ���"); // L67
define("DB_USER_LABEL","�ǡ����١����桼��̾" );	// L28
define("DB_USER_HELP",  "���ǡ����١��������Фˤ�����桼�����������̾�����Ϥ��Ƥ���������"); // L65
define("DB_PASS_LABEL","�ǡ����١����ѥ����" );	// L52
define("DB_PASS_HELP",  "���桼����������ȤΥѥ���ɤ����Ϥ��Ƥ���������"); // L68
define("DB_NAME_LABEL","�ǡ����١���̾" );	// L29
define("DB_NAME_HELP",  "�����Ѥ���ǡ����١���̾�����Ϥ��Ƥ���������<br />�����Ĥ���ʤ����ϡ�����̾�Τǥǡ����١����κ������ߤޤ���"); // L64
define("DB_CHARSET_LABEL","Database character set" );
define("DB_CHARSET_HELP",  "MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.");
define("DB_COLLATION_LABEL","Database collation" );
define("DB_COLLATION_HELP",  "A collation is a set of rules for comparing characters in a character set.");
define("DB_PREFIX_LABEL","Table prefix" );    // L30
define("DB_PREFIX_HELP",  "This prefix will be added to all new tables created to avoid name conflicts in the database. If you are unsure, just keep the default"); // L63
define("DB_PCONNECT_LABEL","�ǡ����١����ػ�³Ū��³" );	// L54
define("DB_PCONNECT_HELP",  "���ǥե���Ȥϡ֤������פǤ����褯ʬ����ʤ����ϡ֤������פ����򤷤Ƥ���������"); // L69

define("LEGEND_ADMIN_ACCOUNT","�����ȴ����ԤΥ桼����̾�������ԥѥ���ɡ�����ӥ᡼�륢�ɥ쥹�����Ϥ��Ƥ���������" );
define("ADMIN_LOGIN_LABEL","�����ԥ桼��̾" ); // L37
define("ADMIN_EMAIL_LABEL","�����ԥ᡼�륢�ɥ쥹" ); // L38
define("ADMIN_PASS_LABEL","�����ԥѥ����" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","�����ԥѥ����(������)" ); // L74

// Buttons
define("BUTTON_PREVIOUS","���" ); // L42
define("BUTTON_NEXT","����" ); // L47

// Messages
define("XOOPS_FOUND","%s found" );
define("CHECKING_PERMISSIONS","�ե����롦�ե�����Υ����������Υ����å�" ); // L82
define("IS_NOT_WRITABLE","%s�ϡ�����ԲĤȤʤäƤ��ޤ����ѡ��ߥå������ǧ���Ƥ���������" ); // L83
define("IS_WRITABLE","%s�ϡ�����ĤǤ���" ); // L84

define("XOOPS_PATH_FOUND","Path found." );

define("READY_CREATE_TABLES","<br />XOOPS�Υ����ƥ�ơ��֥��������ޤ���<br /> <em>����</em>�򲡤��Ƽ��Υ��ƥåפ˿ʤ�Ǥ���������" );
define("XOOPS_TABLES_FOUND","XOOPS�Υơ��֥뤬�ǡ����١����˴���¸�ߤ��ޤ���<br /> <em>����</em>�򲡤��Ƽ��Υ��ƥåפ˿ʤ�Ǥ�������" ); // L131
define("XOOPS_TABLES_CREATED","XOOPS system tables have been created.<br />Press <em>next</em> to go to the next step." );
define("READY_INSERT_DATA","�ǡ����١����˽���ǡ����򥤥󥵡��Ȥ������������ޤ�����" );
define("READY_SAVE_MAINFILE","�����<em>mainfile.php</em>�˽񤭹������������ޤ�����<br /> <em>����</em>�򲡤��ȼ¹Ԥ��ޤ���" );
define("SAVED_MAINFILE","Saved settings in mainfile.php" );
define("SAVED_MAINFILE_MSG","The installer has saved the specified settings to <em>mainfile.php</em>. Press <em>next</em> to go to the next step." );
define("DATA_ALREADY_INSERTED","XOOPS data found in database.<br />Press <em>next</em> to go to the next step." );
define("DATA_INSERTED","Initial data have been inserted into database.<br />Press <em>next</em> to go to the next step." );


// %s is database name
define("DATABASE_CREATED","�ǡ����١���%s��������ޤ���!" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","%s�ơ��֥�κ����˼��Ԥ��ޤ���" ); // L118
define("TABLE_CREATED","%s�ơ��֥��������ޤ�����" ); // L45
define("ROWS_INSERTED","%d�ĤΥǡ������ǡ����١���%s�˥��󥵡��Ȥ���ޤ�����" ); // L119
define("ROWS_FAILED","%d�ĤΥǡ�����ǡ����١���%s�˥��󥵡��Ȥ��뤳�Ȥ˼��Ԥ��ޤ�����" ); // L120
define("TABLE_ALTERED","�ơ��֥� %s �򥢥åץǡ��Ȥ��ޤ�����"); // L133
define("TABLE_NOT_ALTERED","�ơ��֥� %s �Υ��åץǡ��Ȥ����Ԥ��ޤ�����"); // L134
define("TABLE_DROPPED","�ơ��֥� %s �������ޤ�����"); // L163
define("TABLE_NOT_DROPPED","�ơ��֥� %s �κ���˼��Ԥ��ޤ�����"); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","�����Υե���������Ĥ���ޤ���Ǥ����� �����Ф˳����ե���������뤫���ޤ��񤭹��߲�ǽ���ɤ�����ǧ���ƤߤƤ���������" );
define("ERR_NO_XOOPS_FOUND","XOOPS ���󥹥ȡ��顼�����Ĥ���ޤ���" );
define("ERR_INVALID_EMAIL","�����ʥ᡼�륢�ɥ쥹�Ǥ���" ); // L73
define("ERR_REQUIRED","ɬ�פʥǡ����򤹤٤����Ϥ��Ƥ���������" ); // L41
define("ERR_PASSWORD_MATCH","The two passwords do not match" );
define("ERR_NEED_WRITE_ACCESS","�ǥ��쥯�ȥ�򡢥����Фˤ��񤭹��ߤ���ǽ������Ǻ������Ƥ�����������UNIX/LINUX�����Ф򤴻��Ѥξ�硢�ƥǥ��쥯�ȥ�Υѡ��ߥå�����777�����ꤷ�Ƥ�����������" ); // L72
define("ERR_NO_DATABASE","�ǡ����١����κ����˼��Ԥ��ޤ�����<br /><br />���ꤵ�줿�桼����������Ȥθ��¤Ǥϥǡ����١����κ������Ǥ��ʤ����ϡ����Ӻ����������󥹥ȡ����³���Ƥ���������<br />�ޤ��ϡ��Ϥ��ᤫ����ľ���Ƥ���������<br />�褯�狼��ʤ����ϡ������д����Ԥˤ��䤤��碌����������" ); // L31
define("ERR_NO_DBCONNECTION","�ǡ����١��������Ф���³�Ǥ��ޤ���" ); // L106
define("ERR_WRITING_CONSTANT","���%s�ν���ߤ˼��Ԥ��ޤ�����" ); // L122

define("ERR_COPY_MAINFILE","mainfile.php�˥ǥ����ȥ�ӥ塼�����ե�����򥳥ԡ�����ޤ���Ǥ�����" );
define("ERR_WRITE_MAINFILE","mainfile.php�˽񤭹��߽���ޤ���Ǥ������ѡ��ߥå�����666�ˤ��ǧ���ƺ��٥ȥ饤���ƤߤƤ���������");
define("ERR_READ_MAINFILE"," mainfile.php�򳫤����ɤ߹��ळ�Ȥ�����ޤ���Ǥ�����" );

define("ERR_INVALID_DBCHARSET","The charset '%s' is not supported." );
define("ERR_INVALID_DBCOLLATION","The collation '%s' is not supported." );
define("ERR_CHARSET_NOT_SET","Default character set is not set for XOOPS database." );

//




define('_INSTALL_CHARSET','EUC-JP');
?>