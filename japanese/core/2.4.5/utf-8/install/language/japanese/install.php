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

define( "SHOW_HIDE_HELP", "ヘルプの表示・非表示" );

// License
define('LICENSE_NOT_WRITEABLE', 'ライセンス: %s <br/><span style="color:#ff0000">../include/license.php が書込可能になっています</span>');
define('LICENSE_IS_WRITEABLE', 'ライセンス: %s');

// Configuration check page
define( "SERVER_API", "サーバ API" );
define( "PHP_EXTENSION", "%s エクステンション" );
define( "CHAR_ENCODING", "文字エンコーディング" );
define( "XML_PARSING", "XML 解析" );
define( "REQUIREMENTS", "要件" );
define( "_PHP_VERSION", "PHP バージョン" );
define( "RECOMMENDED_SETTINGS", "推奨設定" );
define( "RECOMMENDED_EXTENSIONS", "推奨エクステンション" );
define( "SETTING_NAME", "設定した名前" );
define( "RECOMMENDED", "推奨" );
define( "CURRENT", "現行" );
define( "RECOMMENDED_EXTENSIONS_MSG", "これらのエクステンションは通常不要ですが、
    いくつか特定の機能（マルチ言語・RSS サポートなど）を使用する場合に必要です。" );
define( "NONE", "なし" );
define( "SUCCESS", "成功" );
define( "WARNING", "警告" );
define( "FAILED", "失敗" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS インストール ウィザード" );

define( "LANGUAGE_SELECTION", "言語 選択" );
define( "LANGUAGE_SELECTION_TITLE", "使用言語を選択してください");        // L128
define( "INTRODUCTION", "イントロダクション" );
define( "INTRODUCTION_TITLE", "XOOPS インストール アシスタント へようこそ" );        // L0
define( "CONFIGURATION_CHECK", "構成 チェック" );
define( "CONFIGURATION_CHECK_TITLE", "サーバ構成 チェック" );
define( "PATHS_SETTINGS", "パス 設定" );
define( "PATHS_SETTINGS_TITLE", "パス 設定" );
define( "DATABASE_CONNECTION", "データベース 接続" );
define( "DATABASE_CONNECTION_TITLE", "データベース 接続" );
define( "DATABASE_CONFIG", "データベース 構成" );
define( "DATABASE_CONFIG_TITLE", "データベース 構成" );
define( "CONFIG_SAVE", "構成 保存" );
define( "CONFIG_SAVE_TITLE", "システム構成保存" );
define( "TABLES_CREATION", "テーブル 作成" );
define( "TABLES_CREATION_TITLE", "データベースのテーブル作成" );
define( "INITIAL_SETTINGS", "初期設定" );
define( "INITIAL_SETTINGS_TITLE", "初期値を入力します" );
define( "DATA_INSERTION", "データ 挿入" );
define( "DATA_INSERTION_TITLE", "データベースに設定を保存します。" );
define( "WELCOME", "ようこそ" );
define( "WELCOME_TITLE", "XOOPS サイトへようこそ" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS 物理パス" );
define( "XOOPS_URLS", "Web ロケーション" );

define( "XOOPS_ROOT_PATH_LABEL", "XOOPS ドキュメントルートへの物理パス" );
define( "XOOPS_ROOT_PATH_HELP", "最後のスラッシュを除いた XOOPS ドキュメント (を配置する) ディレクトリへの物理パス" );

define( "XOOPS_LIB_PATH_LABEL", "XOOPS ライブラリ フォルダ" );
define( "XOOPS_LIB_PATH_HELP", "互換性のため、最後の / を除いた XOOPS ライブラリ を置くフォルダ物理パス。 セキュリティ上 " . XOOPS_ROOT_PATH_LABEL . " 外のフォルダに配置してください");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS データファイル フォルダ" );
define( "XOOPS_DATA_PATH_HELP", "互換性のため、最後の / を除いた XOOPS データファイル (書込可) を置くフォルダ物理パス。 セキュリティ上 " . XOOPS_ROOT_PATH_LABEL . " 外のフォルダに配置してください" );

define( "XOOPS_URL_LABEL", "公開する Web サイト のアドレス (URL)" ); // L56
define( "XOOPS_URL_HELP", "XOOPS をインストールし、アクセスするメインの URL を入力してください" ); // L58

define( "LEGEND_CONNECTION", "サーバ接続" );
define( "LEGEND_DATABASE", "データベース" ); // L51

define( "DB_HOST_LABEL", "サーバ ホスト名" );	// L27
define( "DB_HOST_HELP", "データベースサーバのホスト名。よく分からない場合は <em>localhost</em> で使用できる場合が多いです"); // L67
define( "DB_USER_LABEL", "ユーザー名" );	// L28
define( "DB_USER_HELP",  "データベースサーバに接続するユーザーアカウント名"); // L65
define( "DB_PASS_LABEL", "パスワード" );	// L52
define( "DB_PASS_HELP", "データベースサーバに接続するユーザーアカウントのパスワード"); // L68
define( "DB_NAME_LABEL", "データベース名" );	// L29
define( "DB_NAME_HELP", "使用するデータベース名。存在していない場合は、この名称でデータベースの生成を試みます"); // L64
define( "DB_CHARSET_LABEL", "データベース 文字セット" );
define( "DB_CHARSET_HELP",  "MySQL は多様な文字セットを使うデータを蓄えることを可能にし、また多様な照合による比較を行う文字セット・サポートを含みます。");
define( "DB_COLLATION_LABEL", "データベース 照合" );
define( "DB_COLLATION_HELP", "照合は文字セットの中の文字を比較するためのルールセットです。");
define( "DB_PREFIX_LABEL", "テーブルの頭につける文字列(prefix)" );	// L30
define( "DB_PREFIX_HELP", "各テーブル名に文字列を付加します。これによりすでに存在するテーブルとの重複を防ぎます。よく分からない場合はデフォルトでかまいません"); // L63
define( "DB_PCONNECT_LABEL", "データベース 持続接続" );	// L54
define( "DB_PCONNECT_HELP", "デフォルトは いいえ です。よく分からない場合は いいえ のままで構いません"); // L69
define( "DB_DATABASE_LABEL", "データベース" );

define( "LEGEND_ADMIN_ACCOUNT", "管理者 アカウント" );
define( "ADMIN_LOGIN_LABEL", "管理者 ユーザー名" ); // L37
define( "ADMIN_EMAIL_LABEL", "管理者 E-mail アドレス" ); // L38
define( "ADMIN_PASS_LABEL", "管理者 パスワード" ); // L39
define( "ADMIN_CONFIRMPASS_LABEL", "パスワード 確認" ); // L74

// Buttons
define( "BUTTON_PREVIOUS", "前" ); // L42
define( "BUTTON_NEXT", "次" ); // L47

// Messages
define( "XOOPS_FOUND", "%s が見つかりました。" );
define( "CHECKING_PERMISSIONS", "ファイル・フォルダのパーミッション(属性)を確認しています..." ); // L82
define( "IS_NOT_WRITABLE", "%s は書込できません" ); // L83
define( "IS_WRITABLE", "%s は書込可能です" ); // L84

define( "XOOPS_PATH_FOUND", "パスが見つかりました。" );

define( "READY_CREATE_TABLES", "現在他に XOOPS テーブル は存在していません。<br />インストーラは XOOPS システムテーブルを作成する準備ができました。<br /> <em>次</em>で進んでください。" );
define( "XOOPS_TABLES_FOUND", "他の XOOPS テーブル がデータベースに存在します。<br /> <em>次</em> で進んでください" ); // L131
define( "XOOPS_TABLES_CREATED", "XOOPS システムテーブル を作成しました<br /> <em>次</em> で進んでください" );
define( "READY_INSERT_DATA", "インストーラはデータベースに初期データを入れるする準備ができました" );
define( "READY_SAVE_MAINFILE", "インストーラは設定を <em>mainfile.php</em> に書き込む準備ができました。<br /> <em>次</em> で進んでください" );
define( "SAVED_MAINFILE", "mainfile.php へ設定を保存しました" );
define( "SAVED_MAINFILE_MSG", "インストーラは <em>mainfile.php</em> に指定した設定を保存する事ができました <em>次</em> で進んでください。" );
define( "DATA_ALREADY_INSERTED", "データベースに XOOPS データ が見つかりました<br /> <em>次</em> で進んでください" );
define( "DATA_INSERTED", "初期データをデータベースに挿入しました<br /><em>次</em> で進んでください" );


// %s is database name
define( "DATABASE_CREATED", "データベース %s を作成しました!" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "テーブル %s が作成できません" ); // L118
define( "TABLE_CREATED", "テーブル %s を作成しました" ); // L45
define( "ROWS_INSERTED", "%d エントリー を テーブル %s に挿入しました" ); // L119
define( "ROWS_FAILED", "%d エントリー の テーブル %s 挿入に失敗しました" ); // L120
define( "TABLE_ALTERED", "テーブル %s を更新しました"); // L133
define( "TABLE_NOT_ALTERED", "テーブル %s の更新に失敗しました"); // L134
define( "TABLE_DROPPED", "テーブル %s を削除しました"); // L163
define( "TABLE_NOT_DROPPED", "テーブル %s の削除に失敗しました"); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "指定したフォルダにアクセスできません。サーバ上に存在するかまたは読み込み可能になっているかご確認ください" );
define( "ERR_NO_XOOPS_FOUND", "指定フォルダに XOOPS インストールに必要なファイルが見つかりませんでした" );
define( "ERR_INVALID_EMAIL", "E-mail アドレスが正しく入力されていません" ); // L73
define( "ERR_REQUIRED", "必須データはすべて入力してください" ); // L41
define( "ERR_PASSWORD_MATCH", "二つのパスワードが一致していません" );
define( "ERR_NEED_WRITE_ACCESS", "下のファイル・フォルダを、サーバへ書き込み可能な状態で作成してください<br />(UNIX/LINUXサーバをご使用の場合、各ディレクトリのパーミッション(属性)を 777 に設定します)" ); // L72
define( "ERR_NO_DATABASE", "データベースの作成に失敗しました。詳細はサーバ管理者にお問い合わせください" ); // L31
define( "ERR_NO_DBCONNECTION", "データベースサーバに接続できません" ); // L106
define( "ERR_WRITING_CONSTANT", "定数 %s の書込ができませんでした" ); // L122

define( "ERR_COPY_MAINFILE", "ファイル mainfile.php をコピーする事ができませんでした" );
define( "ERR_WRITE_MAINFILE", "mainfile.php へ書き込みする事ができませんでした。ファイルのパーミッション(属性)を確認し、再度実行してください");
define( "ERR_READ_MAINFILE", "mainfile.php を開く事ができませんでした" );

define( "ERR_INVALID_DBCHARSET", "文字セット '%s' はサポートしていません" );
define( "ERR_INVALID_DBCOLLATION", "照合 '%s' はサポートしていません" );
define( "ERR_CHARSET_NOT_SET", "デフォルト文字セットが XOOPS データベース で設定されていません" );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "サポート");

define( "LOGIN", "認証");
define( "LOGIN_TITLE", "認証");
define( "USER_LOGIN", "管理者ログイン" );
define( "USERNAME", "ユーザー名 :");
define( "PASSWORD", "パスワード :");

define( "ICONV_CONVERSION", "文字コード 変換");
define( "ZLIB_COMPRESSION", "Zlib 圧縮");
define( "IMAGE_FUNCTIONS", "イメージ機能");
define( "IMAGE_METAS", "イメージ メタデータ (exif)");

define( "ADMIN_EXIST", "管理者アカウントがすでに存在していまます<br /><strong>次</strong> で進んでください");

define( "CONFIG_SITE", "サイト構成" );
define( "CONFIG_SITE_TITLE", "サイト構成" );
define( "MODULES", "モジュール インストール" );
define( "MODULES_TITLE", "モジュールのインストール" );
define( "THEME", "テーマ選択" );
define( "THEME_TITLE", "デフォルトテーマの選択" );

define( "INSTALLED_MODULES", "下のモジュールをインストールしました<br /><strong>次</strong> で進んでください");
define( "NO_MODULES_FOUND", "モジュールが見つかりませんでした<br /><strong>次</strong> で進んでください");
define( "NO_INSTALLED_MODULES", "モジュールはインストールしていません<br /><strong>次</strong> で進んでください。");

define( "THEME_NO_SCREENSHOT", "スクリーンショットが見つかりません");

define( "IS_VALOR", " → ");

// password message
define( "PASSWORD_LABEL", "パスワードの長さ : ");
define( "PASSWORD_DESC", "パスワード未入力");
define( "PASSWORD_GENERATOR", "パスワード生成");
define( "PASSWORD_GENERATE", "生成");
define( "PASSWORD_COPY", "コピー");

define( "PASSWORD_VERY_WEAK", "とても弱い");
define( "PASSWORD_WEAK", "弱い");
define( "PASSWORD_BETTER", "まあまあ");
define( "PASSWORD_MEDIUM", "ほどほど");
define( "PASSWORD_STRONG", "強い");
define( "PASSWORD_STRONGEST", "とても強い");
?>
