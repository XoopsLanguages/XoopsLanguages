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
 * @version     $Id: install.php 9115 2012-03-08 09:38:30Z tstempko $
 */

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define( "SHOW_HIDE_HELP", "Papar/Sembunyi Teks Bantuan" );

// License
define('LICENSE_NOT_WRITEABLE', 'Lesen adalah %s . <br/><font style="colour:#ff0000">Jadikan ../include/license.php Writable</font>');
define('LICENSE_IS_WRITEABLE', 'Lesen adalah %s');

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s extension" );
define( "CHAR_ENCODING", "Character encoding" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "Keperluan" );
define( "_PHP_VERSION", "Versi PHP" );
define( "RECOMMENDED_SETTINGS", "Tetapan yang disyorkan" );
define( "RECOMMENDED_EXTENSIONS", "Extensions yang disyorkan" );
define( "SETTING_NAME", "Nama Tetapan" );
define( "RECOMMENDED", "Disyorkan" );
define( "CURRENT", "Semasa" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Extensions ini tidak diperlukan untuk penggunaan normal, tapi mungkin perlu untuk meneroka
    beberapa ciri spesifik (seperti sokongan dwi-bahasa atau RSS). Oleh itu, disyorkan ia diinstall." );
define( "NONE", "Tiada" );
define( "SUCCESS", "Berjaya" );
define( "WARNING", "Amaran" );
define( "FAILED", "Gagal" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS Installation Wizard" );

define( "LANGUAGE_SELECTION", "Pilihan Bahasa" );
define( "LANGUAGE_SELECTION_TITLE", "Pilih Bahasa Anda");        // L128
define( "INTRODUCTION", "Pengenalan" );
define( "INTRODUCTION_TITLE", "Selamat Datang ke XOOPS Installation Wizard" );        // L0
define( "CONFIGURATION_CHECK", "Pemeriksaan Konfigurasi" );
define( "CONFIGURATION_CHECK_TITLE", "Pemeriksaan konfigurasi server anda" );
define( "PATHS_SETTINGS", "Tetapan Paths" );
define( "PATHS_SETTINGS_TITLE", "Tetapan Paths" );
define( "DATABASE_CONNECTION", "Sambungan Pangkalan Data" );
define( "DATABASE_CONNECTION_TITLE", "Sambungan Pangkalan Data" );
define( "DATABASE_CONFIG", "Konfigurasi Pangkalan Data" );
define( "DATABASE_CONFIG_TITLE", "Konfigurasi Pangkalan Data" );
define( "CONFIG_SAVE", "Simpan Konfigurasi" );
define( "CONFIG_SAVE_TITLE", "Menyimpan konfigurasi sistem anda" );
define( "TABLES_CREATION", "Penciptaan Tables Pangkalan Data" );
define( "TABLES_CREATION_TITLE", "Penciptaan Tables Pangkalan Data" );
define( "INITIAL_SETTINGS", "Tetapan awalan" );
define( "INITIAL_SETTINGS_TITLE", "Sila masukkan tetapan awalan anda." );
define( "DATA_INSERTION", "Pemasukan Data" );
define( "DATA_INSERTION_TITLE", "Simpan tetapan anda ke dalam pangkalan data" );
define( "WELCOME", "Selamat Datang" );
define( "WELCOME_TITLE", "Selamat Datang ke Laman Web XOOPS anda" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS Physical paths" );
define( "XOOPS_URLS", "Lokasi web" );

define( "XOOPS_ROOT_PATH_LABEL", "XOOPS documents root physical path" );
define( "XOOPS_ROOT_PATH_HELP", "Physical path to the XOOPS documents (served) directory WITHOUT trailing slash" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS library directory" );
define( "XOOPS_LIB_PATH_HELP", "Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure.");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS data files directory" );
define( "XOOPS_DATA_PATH_HELP", "Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure." );

define( "XOOPS_URL_LABEL", "Lokasi Laman Web (URL)" ); // L56
define( "XOOPS_URL_HELP", "URL utama yang akan digunakan untuk akses XOOPS installation anda" ); // L58

define( "LEGEND_CONNECTION", "Sambungan Server" );
define( "LEGEND_DATABASE", "Pangkalan Data" ); // L51

define( "DB_HOST_LABEL", "Server hostname" );    // L27
define( "DB_HOST_HELP",  "Hostname untuk server pangkalan data. Sekiranya anda tidak pasti, <em>localhost</em> boleh digunakan"); // L67
define( "DB_USER_LABEL", "Nama Pengguna Pangkalan Data" );    // L28
define( "DB_USER_HELP",  "Nama untuk akaun pengguna yang akan digunakan untuk menyambung ke pangkalan data"); // L65
define( "DB_PASS_LABEL", "Kata Laluan Pangkalan Data" );    // L52
define( "DB_PASS_HELP",  "Kata Laluan untuk akaun pengguna pangkalan data anda"); // L68
define( "DB_NAME_LABEL", "Nama Pangkalan Data" );    // L29
define( "DB_NAME_HELP",  "Nama Pangkalan Data dalam host. Installer akan mencuba untuk mencipta pangkalan data sekiranya ia tidak wujud"); // L64
define( "DB_CHARSET_LABEL", "Character set Pangkalan Data" );
define( "DB_CHARSET_HELP",  "MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.");
define( "DB_COLLATION_LABEL", "Collation Pangkalan Data" );
define( "DB_COLLATION_HELP",  "Collation merupakan set peraturan untuk membezakan characters dalam character set.");
define( "DB_PREFIX_LABEL", "Table prefix" );    // L30
define( "DB_PREFIX_HELP",  "Prefix ini akan ditambah ke dalam tables baru untuk mengelakkan konflik nama dalam pangkalan data. Sekiranya anda tidak pasti, sila biarkan tetapan default"); // L63
define( "DB_PCONNECT_LABEL", "Guna persistent connection" );    // L54
define( "DB_PCONNECT_HELP",  "Biarkan kosong sekiranya anda tidak pasti"); // L69
define( "DB_DATABASE_LABEL", "Pangkalan Data" );

define( "LEGEND_ADMIN_ACCOUNT", "Akaun Administrator" );
define( "ADMIN_LOGIN_LABEL", "Admin login" ); // L37
define( "ADMIN_EMAIL_LABEL", "Admin e-mail" ); // L38
define( "ADMIN_PASS_LABEL", "Admin password" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "Confirm password" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "Sebelumnya" ); // L42
define( "BUTTON_NEXT", "Seterusnya" ); // L47

// Messages
define( "XOOPS_FOUND", "%s dijumpai" );
define( "CHECKING_PERMISSIONS", "Pemeriksaan permission fail dan direktori..." ); // L82
define( "IS_NOT_WRITABLE", "%s is NOT writable." ); // L83
define( "IS_WRITABLE", "%s is writable." ); // L84

define( "XOOPS_PATH_FOUND", "Path dijumpai." );

define( "READY_CREATE_TABLES", "Tiada XOOPS tables dikesan.<br />Installer kini sedia untuk cipta XOOPS system tables.<br />Klik <em>seterusnya</em>." );
define( "XOOPS_TABLES_FOUND", "XOOPS system tables telah wujud dalam pangkalan data.<br />Klik <em>seterusnya</em> untuk ke langkah seterusnya." ); // L131
define( "XOOPS_TABLES_CREATED", "XOOPS system tables telah dicipta.<br />Klik <em>seterusnya</em> untuk ke langkah seterusnya.." );
define( "READY_INSERT_DATA", "Installer kini sedia untuk memasukkan data awalan dalam pangkalan data anda." );
define( "READY_SAVE_MAINFILE", "Installer kini sedia untuk simpan tetapan dalam <em>mainfile.php</em>.<br />Klik <em>seterusnya</em>." );
define( "SAVED_MAINFILE", "Tetapan disimpan dalam mainfile.php" );
define( "SAVED_MAINFILE_MSG", "Installer telah menyimpan tetapan dalam <em>mainfile.php</em> dan <em>secure.php</em>. Klik <em>seterusnya</em> untuk ke langkah seterusnya." );
define( "DATA_ALREADY_INSERTED", "XOOPS data dijumpai dalam pangkalan data.<br />Klik <em>seterusnya</em> untuk ke langkah seterusnya." );
define( "DATA_INSERTED", "Data awalan telah dimasukkan dalam pangkalan data.<br />Klik <em>seterusnya</em> untuk ke langkah seterusnya." );


// %s is database name
define( "DATABASE_CREATED", "Pangkalan data %s berjaya dicipta!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "Tidak dapat cipta table %s" ); // L118
define( "TABLE_CREATED", "Table %s dicipta." ); // L45
define( "ROWS_INSERTED", "%d entries dimasukkan ke table %s." ); // L119
define( "ROWS_FAILED", "Gagal memasukkan %d entries ke table %s." ); // L120
define( "TABLE_ALTERED", "Table %s dikemaskini."); // L133
define( "TABLE_NOT_ALTERED", "Gagal kemaskini table %s."); // L134
define( "TABLE_DROPPED", "Table %s dihapuskan."); // L163
define( "TABLE_NOT_DROPPED", "Gagal menghapuskan table %s."); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "Tidak dapat akses folder. Sila sahkan ia wujud dan boleh dibaca oleh server." );
define( "ERR_NO_XOOPS_FOUND", "Tiada XOOPS installation yang dijumpai dalam folder." );
define( "ERR_INVALID_EMAIL", "Email tidak sah" ); // L73
define( "ERR_REQUIRED", "Maklumat diperlukan." ); // L41
define( "ERR_PASSWORD_MATCH", "Kedua-dua kata laluan berbeza." );
define( "ERR_NEED_WRITE_ACCESS", "Server mestilah diberi write access untuk fail dan direktori berikut<br />(i.e. <em>chmod 777 directory_name</em> dalam server UNIX/LINUX)<br />Sekiranya ia tiada atau tidak dicipta dengan betul, sila cipta secara manual dan set permissions yang betul." );
define( "ERR_NO_DATABASE", "Tidak dapat mencipta pangkalan data. Sila hubungi pentadbir server." ); // L31
define( "ERR_NO_DBCONNECTION", "Tidak dapat sambung ke pangkalan data server." ); // L106
define( "ERR_WRITING_CONSTANT", "Gagal menulis constant %s." ); // L122

define( "ERR_COPY_MAINFILE", "Tidak dapat menyalin distribution file ke mainfile.php" );
define( "ERR_WRITE_MAINFILE", "Tidak dapat menulis ke dalam mainfile.php. Sila periksa file permission dan cuba lagi.");
define( "ERR_READ_MAINFILE", "Tidak dapat membuka mainfile.php untuk dibaca" );

define( "ERR_INVALID_DBCHARSET", "Charset '%s' tidak disokong." );
define( "ERR_INVALID_DBCOLLATION", "Collation '%s' tidak disokong." );
define( "ERR_CHARSET_NOT_SET", "Default character set tidak diset untuk pangkalan data XOOPS." );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "Sokongan");

define( "LOGIN", "Authentication");
define( "LOGIN_TITLE", "Authentication");
define( "USER_LOGIN", "Log Masuk Administrator" );
define( "USERNAME", "Nama Pengguna :");
define( "PASSWORD", "Kata Laluan :");

define( "ICONV_CONVERSION", "Character set conversion");
define( "ZLIB_COMPRESSION", "Zlib Compression");
define( "IMAGE_FUNCTIONS", "Image functions");
define( "IMAGE_METAS", "Image meta data (exif)");
define( "FILTER_FUNCTIONS", "Filter functions");

define( "ADMIN_EXIST", "Akaun administrator telah wujud.<br />Klik <strong>seterusnya</strong> untuk ke langkah seterusnya.");

define( "CONFIG_SITE", "Konfugurasi Laman Web" );
define( "CONFIG_SITE_TITLE", "Konfigurasi Laman Web" );
define( "MODULES", "Modules installation" );
define( "MODULES_TITLE", "Modules installation" );
define( "THEME", "Pilih Theme" );
define( "THEME_TITLE", "Pilih default theme" );

define( "INSTALLED_MODULES", "The following modules have been installed.<br />Press <strong>next</strong> to go to the next step.");
define( "NO_MODULES_FOUND", "No modules found.<br />Press <strong>next</strong> to go to the next step.");
define( "NO_INSTALLED_MODULES", "No module installed.<br />Press <strong>next</strong> to go to the next step.");

define( "THEME_NO_SCREENSHOT", "Tiada screenshot dijumpai");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "Kekuatan Kata Laluan : ");
define( "PASSWORD_DESC", "Kata Laluan tidak dimasukkan");
define( "PASSWORD_GENERATOR", "Generator Kata Laluan");
define( "PASSWORD_GENERATE", "Generate");
define( "PASSWORD_COPY", "Salin");

define( "PASSWORD_VERY_WEAK", "Sangat Lemah");
define( "PASSWORD_WEAK", "Lemah");
define( "PASSWORD_BETTER", "Lebih Baik");
define( "PASSWORD_MEDIUM", "Medium");
define( "PASSWORD_STRONG", "Kuat");
define( "PASSWORD_STRONGEST", "Paling Kuat");
?>