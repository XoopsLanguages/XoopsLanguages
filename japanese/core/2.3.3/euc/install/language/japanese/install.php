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

define( "SHOW_HIDE_HELP", "ヘルプを表示/隠す" );

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s エクステンション" );
define( "CHAR_ENCODING", "文字セットエンコード" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "要件" );
define( "_PHP_VERSION", "PHP バージョン" );
define( "RECOMMENDED_SETTINGS", "推奨設定" );
define( "RECOMMENDED_EXTENSIONS", "推奨エクステンション" );
define( "SETTING_NAME", "設定名" );
define( "RECOMMENDED", "推奨" );
define( "CURRENT", "Current" );
define( "RECOMMENDED_EXTENSIONS_MSG", "これらのエクステンションは通常は不要ですが、いくつかの特徴的な利用方法（多言語、RSSサポート）を活用する場合には必要です。" );
define( "NONE", "なし" );
define( "SUCCESS", "成功" );
define( "WARNING", "警告" );
define( "FAILED", "失敗" );



// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS インストールウィザード" );

define( "LANGUAGE_SELECTION", "言語選択" );
define( "LANGUAGE_SELECTION_TITLE", "インストール作業に使用する言語を選択してください");		// L128
define( "INTRODUCTION", "イントロダクション" );
define( "INTRODUCTION_TITLE", "XOOPS インストールウィザードへようこそ" );		// L0
define( "CONFIGURATION_CHECK", "構成チェック" );
define( "CONFIGURATION_CHECK_TITLE", "サーバ環境のチェック" );
define( "PATHS_SETTINGS", "パスの設定" );
define( "PATHS_SETTINGS_TITLE", "パスの設定" );
define( "DATABASE_CONNECTION", "データベース connection" );
define( "DATABASE_CONNECTION_TITLE", "Database connection" );
define( "DATABASE_CONFIG", "データベース構成" );
define( "DATABASE_CONFIG_TITLE", "データベース構成" );
define( "CONFIG_SAVE", "構成保存" );
define( "CONFIG_SAVE_TITLE", "システム構成を保存します。" );
define( "TABLES_CREATION", "テーブル作成" );
define( "TABLES_CREATION_TITLE", "データベースのテーブル作成" );
define( "INITIAL_SETTINGS", "初期設定" );
define( "INITIAL_SETTINGS_TITLE", "Please enter your initial settings" );
define( "DATA_INSERTION", "データ挿入" );
define( "DATA_INSERTION_TITLE", "Saving your settings to the database" );
define( "WELCOME", "ようこそ" );
define( "WELCOME_TITLE", "XOOPS インストールが完了しました" );


// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS Physical paths" );
define( "XOOPS_URLS", "Web locations" );

define( "XOOPS_ROOT_PATH_LABEL", "XOOPS documents root physical path" );
define( "XOOPS_ROOT_PATH_HELP", "Physical path to the XOOPS documents (served) directory WITHOUT trailing slash" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS library directory" );
define( "XOOPS_LIB_PATH_HELP", "Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure.");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS datafiles directory" );
define( "XOOPS_DATA_PATH_HELP", "Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of " . XOOPS_ROOT_PATH_LABEL . " to make it secure." );

define( "XOOPS_URL_LABEL", "XOOPSへのURL" ); // L56
define( "XOOPS_URL_HELP", "XOOPS にアクセスするURLを入力してください。<br />　末尾には「/」を付加しないでください。" ); // L58

define( "LEGEND_CONNECTION", "Server connection" );
define( "LEGEND_DATABASE", "データベース" ); // L51

define( "DB_HOST_LABEL", "データベースサーバのホスト名" );	// L27
define( "DB_HOST_HELP",  "　使用するデータベースサーバのホスト名を入力してください。<br />　よく分からない場合は、「<em>localhost</em>」として、ほぼ問題はありません。"); // L67
define( "DB_USER_LABEL", "データベースユーザ名" );	// L28
define( "DB_USER_HELP",  "　データベースサーバにおけるユーザアカウント名を入力してください。"); // L65
define( "DB_PASS_LABEL", "データベースパスワード" );	// L52
define( "DB_PASS_HELP",  "　ユーザアカウントのパスワードを入力してください。"); // L68
define( "DB_NAME_LABEL", "データベース名" );	// L29
define( "DB_NAME_HELP",  "　使用するデータベース名を入力してください。<br />　見つからない場合は、この名称でデータベースの作成を試みます。"); // L64
define( "DB_CHARSET_LABEL", "Database character set" );
define( "DB_CHARSET_HELP",  "MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.");
define( "DB_COLLATION_LABEL", "Database collation" );
define( "DB_COLLATION_HELP",  "A collation is a set of rules for comparing characters in a character set.");
define( "DB_PREFIX_LABEL", "Table prefix" );    // L30
define( "DB_PREFIX_HELP",  "This prefix will be added to all new tables created to avoid name conflicts in the database. If you are unsure, just keep the default"); // L63
define( "DB_PCONNECT_LABEL", "データベースへ持続的接続" );	// L54
define( "DB_PCONNECT_HELP",  "　デフォルトは「いいえ」です。よく分からない場合は「いいえ」を選択してください。"); // L69

define( "LEGEND_ADMIN_ACCOUNT", "サイト管理者のユーザー名、管理者パスワード、およびメールアドレスを入力してください。" );
define( "ADMIN_LOGIN_LABEL", "管理者ユーザ名" ); // L37
define( "ADMIN_EMAIL_LABEL", "管理者メールアドレス" ); // L38
define( "ADMIN_PASS_LABEL", "管理者パスワード" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "管理者パスワード(再入力)" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "戻る" ); // L42
define( "BUTTON_NEXT", "次へ" ); // L47

// Messages
define( "XOOPS_FOUND", "%s found" );
define( "CHECKING_PERMISSIONS", "ファイル・フォルダのアクセス権のチェック" ); // L82
define( "IS_NOT_WRITABLE", "%sは、書込不可となっています。パーミッションを確認してください。" ); // L83
define( "IS_WRITABLE", "%sは、書込可です。" ); // L84

define( "XOOPS_PATH_FOUND", "Path found." );

define( "READY_CREATE_TABLES", "<br />XOOPSのシステムテーブルを作成します。<br /> <em>次へ</em>を押して次のステップに進んでください。" );
define( "XOOPS_TABLES_FOUND", "XOOPSのテーブルがデータベースに既に存在します。<br /> <em>次へ</em>を押して次のステップに進んでください" ); // L131
define( "XOOPS_TABLES_CREATED", "XOOPS system tables have been created.<br />Press <em>next</em> to go to the next step." );
define( "READY_INSERT_DATA", "データベースに初期データをインサートする準備が出来ました。" );
define( "READY_SAVE_MAINFILE", "設定を<em>mainfile.php</em>に書き込む準備が出来ました。<br /> <em>次へ</em>を押すと実行します。" );
define( "SAVED_MAINFILE", "Saved settings in mainfile.php" );
define( "SAVED_MAINFILE_MSG", "The installer has saved the specified settings to <em>mainfile.php</em>. Press <em>next</em> to go to the next step." );
define( "DATA_ALREADY_INSERTED", "XOOPS data found in database.<br />Press <em>next</em> to go to the next step." );
define( "DATA_INSERTED", "Initial data have been inserted into database.<br />Press <em>next</em> to go to the next step." );


// %s is database name
define( "DATABASE_CREATED", "データベース%sを作成しました!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "%sテーブルの作成に失敗しました" ); // L118
define( "TABLE_CREATED", "%sテーブルを作成しました。" ); // L45
define( "ROWS_INSERTED", "%d個のデータがデータベース%sにインサートされました。" ); // L119
define( "ROWS_FAILED", "%d個のデータをデータベース%sにインサートすることに失敗しました。" ); // L120
define( "TABLE_ALTERED", "テーブル %s をアップデートしました。"); // L133
define( "TABLE_NOT_ALTERED", "テーブル %s のアップデートが失敗しました。"); // L134
define( "TABLE_DROPPED", "テーブル %s を削除しました。"); // L163
define( "TABLE_NOT_DROPPED", "テーブル %s の削除に失敗しました。"); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "該当のフォルダが見つかりませんでした。 サーバに該当フォルダがあるか、また書き込み可能かどうか確認してみてください。" );
define( "ERR_NO_XOOPS_FOUND", "XOOPS インストーラーが見つかりません。" );
define( "ERR_INVALID_EMAIL", "不正なメールアドレスです。" ); // L73
define( "ERR_REQUIRED", "必要なデータをすべて入力してください。" ); // L41
define( "ERR_PASSWORD_MATCH", "The two passwords do not match" );
define( "ERR_NEED_WRITE_ACCESS", "ディレクトリを、サーバによる書き込みが可能な設定で作成してください。（UNIX/LINUXサーバをご使用の場合、各ディレクトリのパーミッションを777に設定してください。）" ); // L72
define( "ERR_NO_DATABASE", "データベースの作成に失敗しました。<br /><br />設定されたユーザアカウントの権限ではデータベースの作成ができない場合は、別途作成し、インストールを続けてください。<br />または、はじめからやり直してください。<br />よくわからない場合は、サーバ管理者にお問い合わせください。" ); // L31
define( "ERR_NO_DBCONNECTION", "データベースサーバに接続できません。" ); // L106
define( "ERR_WRITING_CONSTANT", "定数%sの書込みに失敗しました。" ); // L122

define( "ERR_COPY_MAINFILE", "mainfile.phpにディストリビューションファイルをコピー出来ませんでした。" );
define( "ERR_WRITE_MAINFILE", "mainfile.phpに書き込み出来ませんでした。パーミッション（666）を確認して再度トライしてみてください。");
define( "ERR_READ_MAINFILE", " mainfile.phpを開いて読み込むことが出来ませんでした。" );

define( "ERR_INVALID_DBCHARSET", "The charset '%s' is not supported." );
define( "ERR_INVALID_DBCOLLATION", "The collation '%s' is not supported." );
define( "ERR_CHARSET_NOT_SET", "Default character set is not set for XOOPS database." );

//




define('_INSTALL_CHARSET','EUC-JP');
?>