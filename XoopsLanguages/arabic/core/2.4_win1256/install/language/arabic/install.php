<?php
/**
 * Installer main arabic strings declaration file
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
 * @version     $Id: install.php 3768 2009-10-23 08:37:41Z wishcraft $
 */

// _LANGCODE: ar
// _CHARSET : windows-1256
// Translator: Arab XOOPS Team

define( "SHOW_HIDE_HELP", "����� � ����� �� ��������" );

// License
define('LICENSE_NOT_WRITEABLE', '��� ������� %s . <br/><font style="colour:#ff0000">���� ����� ../include/license.php ���� ������� ����</font>');
define('LICENSE_IS_WRITEABLE', '��� ������� %s');

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s extension" );
define( "CHAR_ENCODING", "�������" );
define( "XML_PARSING", "������� XML" );
define( "REQUIREMENTS", "���������" );
define( "_PHP_VERSION", "������ PHP" );
define( "RECOMMENDED_SETTINGS", "������� ���� ���" );
define( "RECOMMENDED_EXTENSIONS", "������ ���� ���" );
define( "SETTING_NAME", "����� �������" );
define( "RECOMMENDED", "���� ��" );
define( "CURRENT", "������" );
define( "RECOMMENDED_EXTENSIONS_MSG", "��� �������� ��� ������ ��������� ������ � ����� �� ���� ������ �� ��� ������� ��� ���� ������ � ����� ���� RSS  ������ ������� �� ������ ��������" );
define( "NONE", "�� ����" );
define( "SUCCESS", "����" );
define( "WARNING", "���" );
define( "FAILED", "���" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "����� ���� ����� ������� �����" );

define( "LANGUAGE_SELECTION", "������ �����" );
define( "LANGUAGE_SELECTION_TITLE", "���� ����");        // L128
define( "INTRODUCTION", "�����" );
define( "INTRODUCTION_TITLE", "����� �� �� ����� ����� �����" );        // L0
define( "CONFIGURATION_CHECK", "��� �������" );
define( "CONFIGURATION_CHECK_TITLE", "������ �� ����� ������ ��������" );
define( "PATHS_SETTINGS", "������� ��������" );
define( "PATHS_SETTINGS_TITLE", "������� ��������" );
define( "DATABASE_CONNECTION", "������� ������ ��������" );
define( "DATABASE_CONNECTION_TITLE", "������� ������ ��������" );
define( "DATABASE_CONFIG", "������� ����� ��������" );
define( "DATABASE_CONFIG_TITLE", "������� ����� ��������" );
define( "CONFIG_SAVE", "��� ������� ������" );
define( "CONFIG_SAVE_TITLE", "��� ������� ������" );
define( "TABLES_CREATION", "����� �������" );
define( "TABLES_CREATION_TITLE", "����� ����� ����� ��������" );
define( "INITIAL_SETTINGS", "��������� �������" );
define( "INITIAL_SETTINGS_TITLE", "���� ������� �������" );
define( "DATA_INSERTION", "��� ��������" );
define( "DATA_INSERTION_TITLE", "��� ������� �� ����� ��������" );
define( "WELCOME", "�����" );
define( "WELCOME_TITLE", "����� �� �� �����" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "���� ������ XOOPS" );
define( "XOOPS_URLS", "���� ������" );

define( "XOOPS_ROOT_PATH_LABEL", "���� ������ �������" );
define( "XOOPS_ROOT_PATH_HELP", "���� ������ ���� �� ������ � ����� XOOPS �� ������� ���� ����� ����� / �� �������" );

define( "XOOPS_LIB_PATH_LABEL", "���� ������ XOOPS" );
define( "XOOPS_LIB_PATH_HELP", "���� ���� ������ XOOPS �� ������ �������� ���� ����� ����� / �� �������. � ����� ���� ���� ���� ���� ��� ������ ���� " . XOOPS_ROOT_PATH_LABEL . "");
define( "XOOPS_DATA_PATH_LABEL", "���� ������ XOOPS" );
define( "XOOPS_DATA_PATH_HELP", "���� ���� ������ XOOPS ���� ���� ����� �������� ������� ������� ����� � ���� ������ ���� ����� / �� �������. � ����� ���� ���� ���� ���� ��� ������ ���� " . XOOPS_ROOT_PATH_LABEL . "" );

define( "XOOPS_URL_LABEL", "���� ������" ); // L56
define( "XOOPS_URL_HELP", "������ ������� ������" ); // L58

define( "LEGEND_CONNECTION", "������� ������� ����� ��������" );
define( "LEGEND_DATABASE", "��� ����� ��������" ); // L51

define( "DB_HOST_LABEL", "��� ������ ��������" );    // L27
define( "DB_HOST_HELP",  "��� ������ ����� ��������. ��� �� ��� �����, ��� <em>localhost</em> ���� �� ���� �������"); // L67
define( "DB_USER_LABEL", "��� ��������" );    // L28
define( "DB_USER_HELP",  "��� ���� �������� ���� ������ ������� ������ ��������"); // L65
define( "DB_PASS_LABEL", "���� ������" );    // L52
define( "DB_PASS_HELP",  "���� ���� ������� ����� ��������"); // L68
define( "DB_NAME_LABEL", "��� ����� ��������" );    // L29
define( "DB_NAME_HELP",  "��� ����� �������� �� ��������. ����� ������� ��� ���� �������� �� ���� ��� �������"); // L64
define( "DB_CHARSET_LABEL", "����� ����� �������� - ���� None ����� ���� �������" );
define( "DB_CHARSET_HELP",  "MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.");
define( "DB_COLLATION_LABEL", "��� �������" );
define( "DB_COLLATION_HELP",  "A collation is a set of rules for comparing characters in a character set.");
define( "DB_PREFIX_LABEL", "����� �������" );    // L30
define( "DB_PREFIX_HELP",  "This prefix will be added to all new tables created to avoid name conflicts in the database. If you are unsure, just keep the default"); // L63
define( "DB_PCONNECT_LABEL", "������� ������� �������" );    // L54
define( "DB_PCONNECT_HELP",  "��������� �� ��� ��������. ��� ��� ��� ����� ��� �������"); // L69
define( "DB_DATABASE_LABEL", "��� ����� ��������" );

define( "LEGEND_ADMIN_ACCOUNT", "���� ������" );
define( "ADMIN_LOGIN_LABEL", "��� �������� ������" ); // L37
define( "ADMIN_EMAIL_LABEL", "������ ���������� ������" ); // L38
define( "ADMIN_PASS_LABEL", "���� ������ ������" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "����� ���� ������" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "������" ); // L42
define( "BUTTON_NEXT", "������" ); // L47

// Messages
define( "XOOPS_FOUND", "%s ������" );
define( "CHECKING_PERMISSIONS", "������ �� ������ ������� ��� �������� � �������...." ); // L82
define( "IS_NOT_WRITABLE", "%s �� ���� ������� ����." ); // L83
define( "IS_WRITABLE", "%s ���� ������� ����." ); // L84

define( "XOOPS_PATH_FOUND", "������ �����." );

define( "READY_CREATE_TABLES", "No XOOPS tables were detected.<br />The installer is now ready to create the XOOPS system tables.<br />Press <em>next</em> to proceed." );
define( "XOOPS_TABLES_FOUND", "����� ���� XOOPS ������ �� ����� ��������.<br />���� <em>������</em> �������� ������ �������." ); // L131
define( "XOOPS_TABLES_CREATED", "�� ����� ����� ���� XOOPS.<br />���� <em>������</em> ������ ������ �������." );
define( "READY_INSERT_DATA", "����� ������� ���� ���� ������ ������� ������� ������ ��������." );
define( "READY_SAVE_MAINFILE", "The installer is now ready to save the specified settings to <em>mainfile.php</em>.<br />Press <em>next</em> to proceed." );
define( "SAVED_MAINFILE", "��� ��������� �� ��� mainfile.php" );
define( "SAVED_MAINFILE_MSG", "����� ������� ��� ��������� �� ��� <em>mainfile.php</em>. ���� <em������</em> �������� ������ �������." );
define( "DATA_ALREADY_INSERTED", "������ XOOPS ������ �� ����� ��������.<br />���� <em>������</em> �������� ������ �������." );
define( "DATA_INSERTED", "�������� ������� �� ������� ��� ����� ��������.<br /���� <em������</em> �������� ������ �������." );


// %s is database name
define( "DATABASE_CREATED", "����� �������� %s �� �������!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "��� ���� ��� ����� ���� %s" ); // L118
define( "TABLE_CREATED", "���� %s �� ������." ); // L45
define( "ROWS_INSERTED", "%d ����� �� ���� %s." ); // L119
define( "ROWS_FAILED", "��� ����� %d ����� ��� ���� %s." ); // L120
define( "TABLE_ALTERED", "���� %s �� ������."); // L133
define( "TABLE_NOT_ALTERED", "��� ����� ���� %s."); // L134
define( "TABLE_DROPPED", "���� %s �� ����."); // L163
define( "TABLE_NOT_DROPPED", "��� ��� ���� %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "�� ���� ������ ��� ������ ������.������ ������ �� ��� ����� �� �������� � ��� ���� ������� ����." );
define( "ERR_NO_XOOPS_FOUND", "�� ��� ������ ��� ������ ������ �������� �������" );
define( "ERR_INVALID_EMAIL", "���� �������� ��� ����" ); // L73
define( "ERR_REQUIRED", "������� �������." ); // L41
define( "ERR_PASSWORD_MATCH", "���� ������ ��� �������" );
define( "ERR_NEED_WRITE_ACCESS", "��� ����� ����� ������� ��� �������� � ������� �������<br />���� <em>chmod 777 directory_name</em> �� ���� ������ �� �������<br />��� �� ��� ������ �� �� ������� ������ ����� ������� ����� ������� �� ���� � ����� �������� ���� ����." );
define( "ERR_NO_DATABASE", "�� ���� ����� ����� ��������.���� �������� �� ��������." ); // L31
define( "ERR_NO_DBCONNECTION", "�� ���� ������� ������� ��������." ); // L106
define( "ERR_WRITING_CONSTANT", "Failed writing constant %s." ); // L122

define( "ERR_COPY_MAINFILE", "�� ���� ��� ����� ���� ��������� �� mainfile.php" );
define( "ERR_WRITE_MAINFILE", "�� ���� ������� ��� ��� mainfile.php. ���� �� ����� ������� ���� �� ��� ��������");
define( "ERR_READ_MAINFILE", "�� ���� ��� ��� mainfile.php �������" );

define( "ERR_INVALID_DBCHARSET", "������� '%s' ��� �����." );
define( "ERR_INVALID_DBCOLLATION", "������ ������ '%s' ��� �����." );
define( "ERR_CHARSET_NOT_SET", "������� ��������� ��� �� ����� ����� ������ XOOPS." );


define("_INSTALL_CHARSET", "windows-1256");

define( "SUPPORT", "����� �����");

define( "LOGIN", "������ �� ������");
define( "LOGIN_TITLE", "������ �� ������");
define( "USER_LOGIN", "����� ���� �������" );
define( "USERNAME", "��� �������� :");
define( "PASSWORD", "���� ������ :");

define( "ICONV_CONVERSION", "Character set conversion");
define( "ZLIB_COMPRESSION", "Zlib Compression");
define( "IMAGE_FUNCTIONS", "Image functions");
define( "IMAGE_METAS", "Image meta data (exif)");

define( "ADMIN_EXIST", "������ ���� ������ ����� ������.<br />���� <strong>������</strong> ������ ������ �������.");

define( "CONFIG_SITE", "������� ������" );
define( "CONFIG_SITE_TITLE", "������� ������" );
define( "MODULES", "����� �������" );
define( "MODULES_TITLE", "����� �������" );
define( "THEME", "������ �����" );
define( "THEME_TITLE", "���� ����� ��������� ������" );

define( "INSTALLED_MODULES", "������� ������� �� �������.<br />���� <strong>������</strong> ������ ������ �������.");
define( "NO_MODULES_FOUND", "�� ���� �����.<br />���� <strong>������</strong> ������ ������ �������.");
define( "NO_INSTALLED_MODULES", "�� ���� ������ ����.<br />���� <strong>������</strong> ������ ������ �������.");

define( "THEME_NO_SCREENSHOT", "�� ���� ���� �����");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "��� ���� ���� : ");
define( "PASSWORD_DESC", "���� ���� ��� �����");
define( "PASSWORD_GENERATOR", "���� ����� ������");
define( "PASSWORD_GENERATE", "�����");
define( "PASSWORD_COPY", "���");

define( "PASSWORD_VERY_WEAK", "����� ����");
define( "PASSWORD_WEAK", "�����");
define( "PASSWORD_BETTER", "����");
define( "PASSWORD_MEDIUM", "������");
define( "PASSWORD_STRONG", "����");
define( "PASSWORD_STRONGEST", "���� ����");
?>