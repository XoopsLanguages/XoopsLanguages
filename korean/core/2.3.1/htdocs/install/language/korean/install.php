<?php

define("SHOW_HIDE_HELP","���� ǥ��/�����" );

// Configuration check page
define("SERVER_API","Server API" );
define("PHP_EXTENSION","%s extension" );
define("CHAR_ENCODING","Character encoding" );
define("XML_PARSING","XML parsing" );
define("REQUIREMENTS","�ʼ��䱸���" );
define("_PHP_VERSION","PHP ����" );
define("RECOMMENDED_SETTINGS","���� ����" );
define("RECOMMENDED_EXTENSIONS","���� Extension" );
define("SETTING_NAME","������" );
define("RECOMMENDED","����" );
define("CURRENT","����" );
define("RECOMMENDED_EXTENSIONS_MSG","���� extension���� �ʼ��䱸����� �ƴմϴٸ� Ư���� ���(��:multi-language or RSS support)�� �����ϱ� ���� �ʿ��� �� ������ ��ġ�� �ν� ���� ���մϴ�." );
define("NONE","����" );
define("SUCCESS","����" );
define("WARNING","����" );
define("FAILED","����" );



// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","XOOPS ��ġ������" );

define("LANGUAGE_SELECTION","��ġ ��� ����" );
define("LANGUAGE_SELECTION_TITLE","����Ͻ� �� ������ �ּ���!");		// L128
define("INTRODUCTION","�Ұ�" );
define("INTRODUCTION_TITLE","�������. XOOPS ��ġ������ �Դϴ�." );		// L0
define("CONFIGURATION_CHECK","ȯ�漳�� üũ" );
define("CONFIGURATION_CHECK_TITLE","���� ȯ�漳���� üũ" );
define("PATHS_SETTINGS","���丮�� ���" );
define("PATHS_SETTINGS_TITLE","���丮�� ���" );
define("DATABASE_CONNECTION","����Ÿ���̽� ����" );
define("DATABASE_CONNECTION_TITLE","����Ÿ���̽� ����" );
define("DATABASE_CONFIG","����Ÿ���̽� ����" );
define("DATABASE_CONFIG_TITLE","����Ÿ���̽� ����" );
define("CONFIG_SAVE","���� ����" );
define("CONFIG_SAVE_TITLE","�ý��� ȯ�漳���� ����" );
define("TABLES_CREATION","���̺� ����" );
define("TABLES_CREATION_TITLE","����Ÿ���̽� ���̺� ����" );
define("INITIAL_SETTINGS","�ʱ� ����" );
define("INITIAL_SETTINGS_TITLE","�ʱ� ������ �Է��� �ּ���!" );
define("DATA_INSERTION","����Ÿ ����" );
define("DATA_INSERTION_TITLE","������ ����Ÿ���̽��� ����" );
define("WELCOME","ȯ���մϴ�." );
define("WELCOME_TITLE","XOOPS�� ���迡 ���� ���� ȯ���մϴ�." );		// L0


// Settings (labels and help text)
define("XOOPS_PATHS","XOOPS�� ���(Physical Path)" );
define("XOOPS_URLS","XOOPS�� URL(Web locations)" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS ��Ʈ�� ���(Physical Path)" );
define("XOOPS_ROOT_PATH_HELP","XOOPS�� ����Ǿ��ִ� ���丮�� ��ü���(Full Path)�� �Է��� �ּ���! ���� [ / ]�� ������ ���ñ� �ٶ��ϴ�." );

define("XOOPS_LIB_PATH_LABEL","XOOPS ���̺긮 ���丮" );
define("XOOPS_LIB_PATH_HELP","XOOPS ���̺귯�� ���丮�� ��ü���(Full Path)�� �Է��� �ּ���! ���� [ / ]�� ������ ���ñ� �ٶ��ϴ�. ������ ���� " . XOOPS_ROOT_PATH_LABEL . "�� �ܺο� �ش� ���丮�� �νñ� �ٶ��ϴ�.");
define("XOOPS_DATA_PATH_LABEL","XOOPS ����Ÿ ���丮" );
define("XOOPS_DATA_PATH_HELP","XOOPS ����Ÿ ���丮�� ��ü���(Full Path)�� �Է��� �ּ���! ���� [ / ]�� ������ ���ñ� �ٶ��ϴ�. ������ ���� " . XOOPS_ROOT_PATH_LABEL . "�� �ܺο� �ش� ���丮�� �νñ� �ٶ��ϴ�." );

define("XOOPS_URL_LABEL","XOOPS����Ʈ�� URL" ); // L56
define("XOOPS_URL_HELP","XOOPS�� �����ϱ� ���� URL�� �Է��� �ּ���! ���� [ / ] �� ������ ���ñ� �ٶ��ϴ�." ); // L58

define("LEGEND_CONNECTION","���� ����" );
define("LEGEND_DATABASE","����Ÿ���̽�����" ); // L51

define("DB_HOST_LABEL","����Ÿ���̽� ���� ȣ��Ʈ��" );	// L27
define("DB_HOST_HELP",  "����ϴ� ����Ÿ���̽� ������ ȣ��Ʈ���� �Է��� �ּ���. <br />�� �𸣽� ���� localhost �� �����Ͻø� ��κ� �������� �۵��մϴ�."); // L67
define("DB_USER_LABEL","����Ÿ���̽� ����ڰ�����" );	// L28
define("DB_USER_HELP",  "����ϴ� ����Ÿ���̽� ���������� ����ڰ������� �Է��� �ּ���"); // L65
define("DB_PASS_LABEL","����Ÿ���̽� �н�����" );	// L52
define("DB_PASS_HELP",  "������ �Է��� ����Ÿ���̽� ����� �������� �н����带 �Է��� �ּ���"); // L68
define("DB_NAME_LABEL","����Ÿ���̽���" );	// L29
define("DB_NAME_HELP",  "����� ����Ÿ���̽����� �Է��� �ּ���!<br />�������� ���� ��쿣 �� ����Ÿ���̽������� �ű��ۼ��� �õ��ϰ� �˴ϴ�."); // L64
define("DB_CHARSET_LABEL","����Ÿ���̽� character set" );
define("DB_CHARSET_HELP",  "MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.");
define("DB_COLLATION_LABEL","����Ÿ���̽� collation" );
define("DB_COLLATION_HELP",  "A collation is a set of rules for comparing characters in a character set.");
define("DB_PREFIX_LABEL","���̺� ���ξ�" );	// L30
define("DB_PREFIX_HELP",  "�� ���̺��� �� ���ξ �������ν� ������ ���̺�� �̸��� �ߺ��Ǵ� ���� �����ϰ� �˴ϴ�. <br />�� �𸣽� ���� �⺻���� ����� �ּ���."); // L63
define("DB_PCONNECT_LABEL","����Ÿ���̽����� ��������(persistent connection)" );	// L54
define("DB_PCONNECT_HELP",  "�⺻����  �ƴϿ�(NO) �Դϴ�. �� �𸣽� ���� �ƴϿ�(NO) �� ������ �ּ���"); // L69
define("DB_DATABASE_LABEL","����Ÿ���̽�" );

define("LEGEND_ADMIN_ACCOUNT","������ ����" );
define("ADMIN_LOGIN_LABEL","������ ���̵�" ); // L37
define("ADMIN_EMAIL_LABEL","������ �����ּ�" ); // L38
define("ADMIN_PASS_LABEL","������ �н�����" ); // L39
define("ADMIN_CONFIRMPASS_LABEL","������ �н�����(���Է�)" ); // L74

// Buttons
define("BUTTON_PREVIOUS","�ڷ�" ); // L42
define("BUTTON_NEXT","����" ); // L47

// Messages
define("XOOPS_FOUND","%s �� ã�ҽ��ϴ�." );
define("CHECKING_PERMISSIONS","���ϰ� ���丮�� ����(�۹̼�) üũ" ); // L82
define("IS_NOT_WRITABLE","���� %s ��(��) ����Ұ� �����Դϴ�. ���Ⱑ������ �������ּ���!(chmod 666)" ); // L83
define("IS_WRITABLE","���� %s ��(��) ���Ⱑ�� �����Դϴ�." ); // L84

define("XOOPS_PATH_FOUND","�н�(Path)�� ã�ҽ��ϴ�." );

define("READY_CREATE_TABLES","XOOPS�� ���̺��� �������� �ʽ��ϴ�.<br />���ݺ��� ��ġ�����簡 XOOPS�� ���̺��� �ű��ۼ��ϰ� �� ���Դϴ�.<br />��� �����Ͻ÷��� <em>����</em> ��ư�� Ŭ�����ּ���!" );
define("XOOPS_TABLES_FOUND","XOOPS�� ���̺��� ����Ÿ���̽��� �̹� �����մϴ�. ���� �ܰ�� �����Ͻ÷��� ���� ��ư�� Ŭ���� �ּ���!" ); // L131
define("XOOPS_TABLES_CREATED","XOOPS�� ���̺��� ���������� �����Ǿ������ϴ�.<br />���� �ܰ�� �����Ͻ÷��� <em>����</em> ��ư�� Ŭ���� �ּ���!" );
define("READY_INSERT_DATA","���ݺ��� ��ġ�����簡 ����Ÿ���̽��� �ʱ� ����Ÿ�� �����ϰ� �� ���Դϴ�." );
define("READY_SAVE_MAINFILE","���ݺ��� ��ġ�����簡 �����Ͻ� ������ <em>mainfile.php</em>�� �����ϰ� �� ���Դϴ�.<br />��� �����Ͻ÷��� <em>����</em> ��ư�� Ŭ���� �ּ���!" );
define("SAVED_MAINFILE","mainfile.php �� ���� ����" );
define("SAVED_MAINFILE_MSG","��ġ�����簡 �����Ͻ� ������ <em>mainfile.php</em>�� ����ó���Ͽ����ϴ�. ���� �ܰ�� �����Ͻ÷��� <em>����</em> ��ư�� Ŭ���� �ּ���!" );
define("DATA_ALREADY_INSERTED","XOOPS�� ����Ÿ�� ����Ÿ���̽� �����մϴ�.<br />���� �ܰ�� �����Ͻ÷��� <em>����</em> ��ư�� Ŭ���� �ּ���!" );
define("DATA_INSERTED","�ʱ� ����Ÿ�� ����Ÿ���̽��� ���ԵǾ������ϴ�.<br />���� �ܰ�� �����Ͻ÷��� <em>����</em> ��ư�� Ŭ���� �ּ���!" );


// %s is database name
define("DATABASE_CREATED","����Ÿ���̽� %s �� �ۼ��Ͽ����ϴ�." ); // L43
// %s is table name
define("TABLE_NOT_CREATED","����Ÿ���̽� %s�� �ۼ��� �����Ͽ����ϴ�." ); // L118
define("TABLE_CREATED","%s ���̺��� �ۼ��Ͽ����ϴ�." ); // L45
define("ROWS_INSERTED","%d ���� ����Ÿ�� ����Ÿ���̽� %s�� ���ԵǾ����ϴ�." ); // L119
define("ROWS_FAILED","%d ���� ����Ÿ�� ����Ÿ���̽� %s�� ���ԵǴµ� �����Ͽ����ϴ�." ); // L120
define("TABLE_ALTERED","���̺� %s �� ���׷��̵��߽��ϴ�."); // L133
define("TABLE_NOT_ALTERED","���̺� %s �� ���׷��̵忡 �����Ͽ����ϴ�."); // L134
define("TABLE_DROPPED","���̺� %s �� �����Ͽ����ϴ�."); // L163
define("TABLE_NOT_DROPPED","���̺� %s �� ������ �����Ͽ����ϴ�."); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS","������ ���丮�� �׼����Ҽ��� �����ϴ�. ���丮�� �����ϴ��� Ȥ�� �б������ �ִ��� Ȯ���� ���ñ� �ٶ��ϴ�." );
define("ERR_NO_XOOPS_FOUND","������ ���丮���� XOOPS�� ã�� ���� �����ϴ�." );
define("ERR_INVALID_EMAIL","�ùٸ��� ���� �����ּ��Դϴ�." ); // L73
define("ERR_REQUIRED","�ʿ��� ������ ��� �Է��� �ֽñ� �ٶ��ϴ�." ); // L41
define("ERR_PASSWORD_MATCH","�� �н����尡 ��ġ���� �ʽ��ϴ�." );
define("ERR_NEED_WRITE_ACCESS","������ ���丮���� ���Ⱑ������ ������ �ֽñ� �ٶ��ϴ�. (��: UNIX/LINUX ���� 'chmod 777 directory_name' , Windows���� �б���������)" ); // L72
define("ERR_NO_DATABASE","����Ÿ���̽��� �ۼ��� �����Ͽ����ϴ�. �������� �ùٸ��� Ȯ���� �� �ٽ� ó������ �ٽýõ��Ͻðų� �����ڿ��� �ش������ ������ ���ñ� �ٶ��ϴ�." ); // L31
define("ERR_NO_DBCONNECTION","����Ÿ���̽� ������ �����ϴµ� �����Ͽ����ϴ�." ); // L106
define("ERR_WRITING_CONSTANT","��� %s �� ��Ͽ� �����Ͽ����ϴ�." ); // L122

define("ERR_COPY_MAINFILE","mainfile.php ������ �ۼ��� �����Ͽ����ϴ�." );
define("ERR_WRITE_MAINFILE","mainfile.php ���Ͽ��� ���⿡ �����Ͽ����ϴ�. ���ϱ��Ѽ����� �ùٸ��� �ٽ� Ȯ���� �ֽñ� �ٶ��ϴ�.");
define("ERR_READ_MAINFILE","mainfile.php ������ ���� ���� �����ϴ�." );

define("ERR_INVALID_DBCHARSET","character set '%s' �� �������� �ʽ��ϴ�." );
define("ERR_INVALID_DBCOLLATION","collation '%s' �� �������� �ʽ��ϴ�." );
define("ERR_CHARSET_NOT_SET","XOOPS ����Ÿ���̽��� Default character set�� �����Ǿ� ���� �ʽ��ϴ�." );

//


define("_INSTALL_CHARSET","EUC-KR");
?>