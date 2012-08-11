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
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php $
 */

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("SHOW_HIDE_HELP","�إ�פ�ɽ������ɽ��" );

// License
define('LICENSE_NOT_WRITEABLE','�饤����: %s <br/><span style="color:#ff0000">../include/license.php �������ǽ�ˤʤäƤ��ޤ�</span>');
define('LICENSE_IS_WRITEABLE','�饤����: %s');

// Configuration check page
define("SERVER_API","������ API" );
define("PHP_EXTENSION","%s �������ƥ󥷥��" );
define("CHAR_ENCODING","ʸ�����󥳡��ǥ���" );
define("XML_PARSING","XML ����" );
define("REQUIREMENTS","�׷�" );
define("_PHP_VERSION","PHP �С������" );
define("RECOMMENDED_SETTINGS","�侩����" );
define("RECOMMENDED_EXTENSIONS","�侩�������ƥ󥷥��" );
define("SETTING_NAME","���ꤷ��̾��" );
define("RECOMMENDED","�侩" );
define("CURRENT","����" );
define("RECOMMENDED_EXTENSIONS_MSG","�����Υ������ƥ󥷥����̾����פǤ�����
    �����Ĥ�����ε�ǽ�ʥޥ�����졦RSS ���ݡ��Ȥʤɡˤ���Ѥ������ɬ�פǤ���" );
define("NONE","�ʤ�" );
define("SUCCESS","����" );
define("WARNING","�ٹ�" );
define("FAILED","����" );

// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS ���󥹥ȡ��� ����������" );

define("LANGUAGE_SELECTION","���� ����" );
define("LANGUAGE_SELECTION_TITLE","���Ѹ�������򤷤Ƥ�������");        // L128
define("INTRODUCTION","����ȥ���������" );
define("INTRODUCTION_TITLE","XOOPS ���󥹥ȡ��� ����������� �ؤ褦����" );        // L0
define("CONFIGURATION_CHECK","���� �����å�" );
define("CONFIGURATION_CHECK_TITLE","�����й��� �����å�" );
define("PATHS_SETTINGS","�ѥ� ����" );
define("PATHS_SETTINGS_TITLE","�ѥ� ����" );
define("DATABASE_CONNECTION","�ǡ����١��� ��³" );
define("DATABASE_CONNECTION_TITLE","�ǡ����١��� ��³" );
define("DATABASE_CONFIG","�ǡ����١��� ����" );
define("DATABASE_CONFIG_TITLE","�ǡ����١��� ����" );
define("CONFIG_SAVE","���� ��¸" );
define("CONFIG_SAVE_TITLE","�����ƥ๽����¸" );
define("TABLES_CREATION","�ơ��֥� ����" );
define("TABLES_CREATION_TITLE","�ǡ����١����Υơ��֥����" );
define("INITIAL_SETTINGS","�������" );
define("INITIAL_SETTINGS_TITLE","����ͤ����Ϥ��ޤ�" );
define("DATA_INSERTION","�ǡ��� ����" );
define("DATA_INSERTION_TITLE","�ǡ����١������������¸���ޤ���" );
define("WELCOME","�褦����" );
define("WELCOME_TITLE","XOOPS �����Ȥؤ褦����" );        // L0


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS ʪ���ѥ�" );
define("XOOPS_URLS","Web ����������" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS �ɥ�����ȥ롼�Ȥؤ�ʪ���ѥ�" );
define("XOOPS_ROOT_PATH_HELP","�Ǹ�Υ���å��������� XOOPS �ɥ������ (�����֤���) �ǥ��쥯�ȥ�ؤ�ʪ���ѥ�" );

define("XOOPS_LIB_PATH_LABEL","XOOPS �饤�֥�� �ե����" );
define("XOOPS_LIB_PATH_HELP","�ߴ����Τ��ᡢ�Ǹ�� / ������� XOOPS �饤�֥�� ���֤��ե����ʪ���ѥ��� �������ƥ��� " . XOOPS_ROOT_PATH_LABEL . " ���Υե���������֤��Ƥ�������");
define("XOOPS_DATA_PATH_LABEL","XOOPS �ǡ����ե����� �ե����" );
define("XOOPS_DATA_PATH_HELP","�ߴ����Τ��ᡢ�Ǹ�� / ������� XOOPS �ǡ����ե����� (�����) ���֤��ե����ʪ���ѥ��� �������ƥ��� " . XOOPS_ROOT_PATH_LABEL . " ���Υե���������֤��Ƥ�������" );

define("XOOPS_URL_LABEL","�������� Web ������ �Υ��ɥ쥹 (URL)" ); // L56
define("XOOPS_URL_HELP","XOOPS �򥤥󥹥ȡ��뤷��������������ᥤ��� URL �����Ϥ��Ƥ�������" ); // L58

define("LEGEND_CONNECTION","��������³" );
define("LEGEND_DATABASE","�ǡ����١���" ); // L51

define("DB_HOST_LABEL","������ �ۥ���̾" );	// L27
define("DB_HOST_HELP","�ǡ����١��������ФΥۥ���̾���褯ʬ����ʤ����� <em>localhost</em> �ǻ��ѤǤ����礬¿���Ǥ�"); // L67
define("DB_USER_LABEL","�桼����̾" );	// L28
define("DB_USER_HELP",  "�ǡ����١��������Ф���³����桼�������������̾"); // L65
define("DB_PASS_LABEL","�ѥ����" );	// L52
define("DB_PASS_HELP","�ǡ����١��������Ф���³����桼������������ȤΥѥ����"); // L68
define("DB_NAME_LABEL","�ǡ����١���̾" );	// L29
define("DB_NAME_HELP","���Ѥ���ǡ����١���̾��¸�ߤ��Ƥ��ʤ����ϡ�����̾�Τǥǡ����١������������ߤޤ�"); // L64
define("DB_CHARSET_LABEL","�ǡ����١��� ʸ�����å�" );
define("DB_CHARSET_HELP",  "MySQL ��¿�ͤ�ʸ�����åȤ�Ȥ��ǡ������ߤ��뤳�Ȥ��ǽ�ˤ����ޤ�¿�ͤʾȹ�ˤ����Ӥ�Ԥ�ʸ�����åȡ����ݡ��Ȥ�ޤߤޤ���");
define("DB_COLLATION_LABEL","�ǡ����١��� �ȹ�" );
define("DB_COLLATION_HELP","�ȹ��ʸ�����åȤ����ʸ������Ӥ��뤿��Υ롼�륻�åȤǤ���");
define("DB_PREFIX_LABEL","�ơ��֥��Ƭ�ˤĤ���ʸ����(prefix)" );	// L30
define("DB_PREFIX_HELP","�ƥơ��֥�̾��ʸ������ղä��ޤ�������ˤ�ꤹ�Ǥ�¸�ߤ���ơ��֥�Ȥν�ʣ���ɤ��ޤ����褯ʬ����ʤ����ϥǥե���ȤǤ��ޤ��ޤ���"); // L63
define("DB_PCONNECT_LABEL","�ǡ����١��� ��³��³" );	// L54
define("DB_PCONNECT_HELP","�ǥե���Ȥ� ������ �Ǥ����褯ʬ����ʤ����� ������ �Τޤޤǹ����ޤ���"); // L69
define("DB_DATABASE_LABEL","�ǡ����١���" );

define("LEGEND_ADMIN_ACCOUNT","������ ���������" );
define("ADMIN_LOGIN_LABEL","������ �桼����̾" ); // L37
define("ADMIN_EMAIL_LABEL","������ E-mail ���ɥ쥹" ); // L38
define("ADMIN_PASS_LABEL","������ �ѥ����" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","�ѥ���� ��ǧ" ); // L74

// Buttons
define("BUTTON_PREVIOUS","��" ); // L42
define("BUTTON_NEXT","��" ); // L47

// Messages
define("XOOPS_FOUND","%s �����Ĥ���ޤ�����" );
define("CHECKING_PERMISSIONS","�ե����롦�ե�����Υѡ��ߥå����(°��)���ǧ���Ƥ��ޤ�..." ); // L82
define("IS_NOT_WRITABLE","%s �Ͻ���Ǥ��ޤ���" ); // L83
define("IS_WRITABLE","%s �Ͻ����ǽ�Ǥ�" ); // L84

define("XOOPS_PATH_FOUND","�ѥ������Ĥ���ޤ�����" );

define("READY_CREATE_TABLES","����¾�� XOOPS �ơ��֥� ��¸�ߤ��Ƥ��ޤ���<br />���󥹥ȡ���� XOOPS �����ƥ�ơ��֥���������������Ǥ��ޤ�����<br /> <em>��</em>�ǿʤ�Ǥ���������" );
define("XOOPS_TABLES_FOUND","¾�� XOOPS �ơ��֥� ���ǡ����١�����¸�ߤ��ޤ���<br /> <em>��</em> �ǿʤ�Ǥ�������" ); // L131
define("XOOPS_TABLES_CREATED","XOOPS �����ƥ�ơ��֥� ��������ޤ���<br /> <em>��</em> �ǿʤ�Ǥ�������" );
define("READY_INSERT_DATA","���󥹥ȡ���ϥǡ����١����˽���ǡ���������뤹��������Ǥ��ޤ���" );
define("READY_SAVE_MAINFILE","���󥹥ȡ��������� <em>mainfile.php</em> �˽񤭹���������Ǥ��ޤ�����<br /> <em>��</em> �ǿʤ�Ǥ�������" );
define("SAVED_MAINFILE","mainfile.php ���������¸���ޤ���" );
define("SAVED_MAINFILE_MSG","���󥹥ȡ���� <em>mainfile.php</em> �˻��ꤷ���������¸��������Ǥ��ޤ��� <em>��</em> �ǿʤ�Ǥ���������" );
define("DATA_ALREADY_INSERTED","�ǡ����١����� XOOPS �ǡ��� �����Ĥ���ޤ���<br /> <em>��</em> �ǿʤ�Ǥ�������" );
define("DATA_INSERTED","����ǡ�����ǡ����١������������ޤ���<br /><em>��</em> �ǿʤ�Ǥ�������" );


// %s is database name
define("DATABASE_CREATED","�ǡ����١��� %s ��������ޤ���!" ); // L43
// %s is table name
define("TABLE_NOT_CREATED","�ơ��֥� %s �������Ǥ��ޤ���" ); // L118
define("TABLE_CREATED","�ơ��֥� %s ��������ޤ���" ); // L45
define("ROWS_INSERTED","%d ����ȥ꡼ �� �ơ��֥� %s ���������ޤ���" ); // L119
define("ROWS_FAILED","%d ����ȥ꡼ �� �ơ��֥� %s �����˼��Ԥ��ޤ���" ); // L120
define("TABLE_ALTERED","�ơ��֥� %s �򹹿����ޤ���"); // L133
define("TABLE_NOT_ALTERED","�ơ��֥� %s �ι����˼��Ԥ��ޤ���"); // L134
define("TABLE_DROPPED","�ơ��֥� %s �������ޤ���"); // L163
define("TABLE_NOT_DROPPED","�ơ��֥� %s �κ���˼��Ԥ��ޤ���"); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","���ꤷ���ե�����˥��������Ǥ��ޤ��󡣥����о��¸�ߤ��뤫�ޤ����ɤ߹��߲�ǽ�ˤʤäƤ��뤫����ǧ��������" );
define("ERR_NO_XOOPS_FOUND","����ե������ XOOPS ���󥹥ȡ����ɬ�פʥե����뤬���Ĥ���ޤ���Ǥ���" );
define("ERR_INVALID_EMAIL","E-mail ���ɥ쥹�����������Ϥ���Ƥ��ޤ���" ); // L73
define("ERR_REQUIRED","ɬ�ܥǡ����Ϥ��٤����Ϥ��Ƥ�������" ); // L41
define("ERR_PASSWORD_MATCH","��ĤΥѥ���ɤ����פ��Ƥ��ޤ���" );
define("ERR_NEED_WRITE_ACCESS","���Υե����롦�ե�����򡢥����Фؽ񤭹��߲�ǽ�ʾ��֤Ǻ������Ƥ�������<br />(UNIX/LINUX�����Ф򤴻��Ѥξ�硢�ƥǥ��쥯�ȥ�Υѡ��ߥå����(°��)�� 777 �����ꤷ�ޤ�)" ); // L72
define("ERR_NO_DATABASE","�ǡ����١����κ����˼��Ԥ��ޤ������ܺ٤ϥ����д����Ԥˤ��䤤��碌��������" ); // L31
define("ERR_NO_DBCONNECTION","�ǡ����١��������Ф���³�Ǥ��ޤ���" ); // L106
define("ERR_WRITING_CONSTANT","��� %s �ν�����Ǥ��ޤ���Ǥ���" ); // L122

define("ERR_COPY_MAINFILE","�ե����� mainfile.php �򥳥ԡ���������Ǥ��ޤ���Ǥ���" );
define("ERR_WRITE_MAINFILE","mainfile.php �ؽ񤭹��ߤ�������Ǥ��ޤ���Ǥ������ե�����Υѡ��ߥå����(°��)���ǧ�������ټ¹Ԥ��Ƥ�������");
define("ERR_READ_MAINFILE","mainfile.php �򳫤������Ǥ��ޤ���Ǥ���" );

define("ERR_INVALID_DBCHARSET","ʸ�����å� '%s' �ϥ��ݡ��Ȥ��Ƥ��ޤ���" );
define("ERR_INVALID_DBCOLLATION","�ȹ� '%s' �ϥ��ݡ��Ȥ��Ƥ��ޤ���" );
define("ERR_CHARSET_NOT_SET","�ǥե����ʸ�����åȤ� XOOPS �ǡ����١��� �����ꤵ��Ƥ��ޤ���" );


define("_INSTALL_CHARSET","UTF-8");

define("SUPPORT","���ݡ���");

define("LOGIN","ǧ��");
define("LOGIN_TITLE","ǧ��");
define("USER_LOGIN","�����ԥ������" );
define("USERNAME","�桼����̾ :");
define("PASSWORD","�ѥ���� :");

define("ICONV_CONVERSION","ʸ�������� �Ѵ�");
define("ZLIB_COMPRESSION","Zlib ����");
define("IMAGE_FUNCTIONS","���᡼����ǽ");
define("IMAGE_METAS","���᡼�� �᥿�ǡ��� (exif)");

define("ADMIN_EXIST","�����ԥ�������Ȥ����Ǥ�¸�ߤ��Ƥ��ޤޤ�<br /><strong>��</strong> �ǿʤ�Ǥ�������");

define("CONFIG_SITE","�����ȹ���" );
define("CONFIG_SITE_TITLE","�����ȹ���" );
define("MODULES","�⥸�塼�� ���󥹥ȡ���" );
define("MODULES_TITLE","�⥸�塼��Υ��󥹥ȡ���" );
define("THEME","�ơ�������" );
define("THEME_TITLE","�ǥե���ȥơ��ޤ�����" );

define("INSTALLED_MODULES","���Υ⥸�塼��򥤥󥹥ȡ��뤷�ޤ���<br /><strong>��</strong> �ǿʤ�Ǥ�������");
define("NO_MODULES_FOUND","�⥸�塼�뤬���Ĥ���ޤ���Ǥ���<br /><strong>��</strong> �ǿʤ�Ǥ�������");
define("NO_INSTALLED_MODULES","�⥸�塼��ϥ��󥹥ȡ��뤷�Ƥ��ޤ���<br /><strong>��</strong> �ǿʤ�Ǥ���������");

define("THEME_NO_SCREENSHOT","�����꡼�󥷥�åȤ����Ĥ���ޤ���");

define("IS_VALOR"," �� ");

// password message
define("PASSWORD_LABEL","�ѥ���ɤ�Ĺ�� : ");
define("PASSWORD_DESC","�ѥ����̤����");
define("PASSWORD_GENERATOR","�ѥ��������");
define("PASSWORD_GENERATE","����");
define("PASSWORD_COPY","���ԡ�");

define("PASSWORD_VERY_WEAK","�ȤƤ�夤");
define("PASSWORD_WEAK","�夤");
define("PASSWORD_BETTER","�ޤ��ޤ�");
define("PASSWORD_MEDIUM","�ۤɤۤ�");
define("PASSWORD_STRONG","����");
define("PASSWORD_STRONGEST","�ȤƤ⶯��");
?>
