<?php
// $Id: modulesadmin.php $
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","モジュール管理");
define("_MD_AM_MODULE","モジュール");
define("_MD_AM_VERSION","バージョン");
define("_MD_AM_LASTUP","最終更新日");
define("_MD_AM_DEACTIVATED","無効");
define("_MD_AM_ACTION","操作");
define("_MD_AM_DEACTIVATE","無効");
define("_MD_AM_ACTIVATE","有効");
define("_MD_AM_UPDATE","更新");
define("_MD_AM_DUPEN","モジュールがDB内に2重登録されています！");
define("_MD_AM_DEACTED","選択したモジュールを非アクティブ状態にしました。アンインストールすることが可能です。");
define("_MD_AM_ACTED","選択したモジュールをアクティブにしました！");
define("_MD_AM_UPDTED","選択したモジュールをアップデートしました！");
define("_MD_AM_SYSNO","システムモジュールは非アクティブ状態にすることはできません");
define("_MD_AM_STRTNO","このモジュールは当サイトの開始モジュールとして登録されています。このモジュールを無効化にするには、一般設定メニューにおいて開始モジュールの変更を行ってください。");

// added in RC2
define("_MD_AM_PCMFM","以下の内容で更新を行います:");

// added in RC3
define("_MD_AM_ORDER","表示順");
define("_MD_AM_ORDER0","（0 = 非表示）");
define("_MD_AM_ACTIVE","有効");
define("_MD_AM_INACTIVE","無効");
define("_MD_AM_NOTINSTALLED","未インストール");
define("_MD_AM_NOCHANGE","変更なし");
define("_MD_AM_INSTALL","インストール");
define("_MD_AM_UNINSTALL","アンインストール");
define("_MD_AM_SUBMIT","送信");
define("_MD_AM_CANCEL","キャンセル");
define("_MD_AM_DBUPDATE","データベースを更新しました");
define("_MD_AM_BTOMADMIN","モジュール管理メニューへ戻る");

// %s represents module name
define("_MD_AM_FAILINS","%sモジュールをインストールできませんでした");
define("_MD_AM_FAILACT","%sモジュールをアクティブにすることができませんでした");
define("_MD_AM_FAILDEACT","%sモジュールを非アクティブにすることができませんでした");
define("_MD_AM_FAILUPD","%sモジュールをアップデートすることができませんでした。");
define("_MD_AM_FAILUNINS","%sモジュールをアンインストールできませんでした");
define("_MD_AM_FAILORDER","%sモジュールの表示順を変更することができませんでした");
define("_MD_AM_FAILWRITE","メインメニューファイルへの書き込みに失敗しました");
define("_MD_AM_ALEXISTS","%sモジュールは既に存在しています");
define("_MD_AM_ERRORSC", "エラー:");
define("_MD_AM_OKINS","%sモジュールのインストールが完了しました");
define("_MD_AM_OKACT","%sモジュールをアクティブに設定しました");
define("_MD_AM_OKDEACT","%sモジュールを非アクティブに設定しました");
define("_MD_AM_OKUPD","%sモジュールのアップデートが完了しました");
define("_MD_AM_OKUNINS","%sモジュールのアンインストールが完了しました");
define("_MD_AM_OKORDER","%sモジュールの表示順を変更しました");

define('_MD_AM_RUSUREINS', 'このモジュールをインストールするには下のボタンをクリックしてください');
define('_MD_AM_RUSUREUPD', 'このモジュールのアップデートを行うには下のボタンをクリックしてください');
define('_MD_AM_RUSUREUNINS', '本当にこのモジュールをアンインストールしてもよろしいですか？');
define('_MD_AM_LISTUPBLKS', 'モジュールのアップデートを行います。<br />選択のブロックの中身(テンプレートとオプション)は上書きされます。<br />');
define('_MD_AM_NEWBLKS', '新規ブロック');
define('_MD_AM_DEPREBLKS', '非推奨のブロック');  //-no use //

// added in 2.3 - julionc
define('_MD_AM_INSTALLING', 'インストール中 ');
define('_MD_AM_TABLE_RESERVED', '%s はリサーブされたテーブルです！');
define('_MD_AM_CREATE_TABLES', 'テーブルを作成中...');
define('_MD_AM_TABLE_CREATED', 'テーブルを %s 作成しました');
define('_MD_AM_INSERT_DATA', '   テーブル %s にデータを挿入しました');
define('_MD_AM_INSERT_DATA_FAILD', 'データベースに %s を挿入できませんでした');
define('_MD_AM_INSERT_DATA_DONE', 'モジュールデータ挿入が完了しました');
define('_MD_AM_MODULEID', ' モジュール ID: %s');
define('_MD_AM_SQL_FOUND', 'SQL ファイルがみつかりました %s ');
define('_MD_AM_SQL_NOT_FOUND', 'SQL ファイルがみつかりません %s');
define('_MD_AM_SQL_NOT_CREATE', 'エラー: 作成できません %s ');
define('_MD_AM_SQL_NOT_VALID', '%s は SQL で有効ではありません！');

define('_MD_AM_GROUP_ID', ' グループ ID: %s ');
define('_MD_AM_NAME', ' Name: ');
define('_MD_AM_VALUE', ' Value: ');

/* Templates */
define('_MD_AM_TEMPLATES_ADD', 'テンプレート 追加中...');
define('_MD_AM_TEMPLATES_DELETE', 'テンプレート 削除中...');
define('_MD_AM_TEMPLATES_UPDATE', 'テンプレート 更新中...');

define('_MD_AM_TEMPLATE_ID', 'テンプレート ID: %s ');

define('_MD_AM_TEMPLATE_ADD_DATA', 'データベースにテンプレート %s を追加しました');
define('_MD_AM_TEMPLATE_ADD_ERROR', 'エラー: データベースにテンプレート %s を追加できませんでした');
define('_MD_AM_TEMPLATE_COMPILED', 'テンプレート %s を構築しました ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED', 'エラー: テンプレート %s の構築に失敗しました');
define('_MD_AM_TEMPLATE_DELETE_DATA', 'データベースからテンプレート %s を削除しました');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD', 'エラー: データベースからテンプレート %s の削除に失敗しました ');
define('_MD_AM_TEMPLATE_INSERT_DATA', 'データベースにテンプレート %s を挿入しました ');
define('_MD_AM_TEMPLATE_RECOMPILE', 'レンプレート %s を再構築しました');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD', 'エラー: テンプレート %s の再構築に失敗しました');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR', 'エラー: テンプレート %s の再構築できませんでした ');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR', 'エラー: 古いテンプレート %s を削除できませんでした。このファイルの更新は中断されました ');
define('_MD_AM_TEMPLATE_UPDATE', 'テンプレート %s を更新しました ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR', 'エラー: テンプレート %s の更新に失敗しました ');

/* Blocks */
define('_MD_AM_BLOCKS_ADD', 'ブロック 追加中...');
define('_MD_AM_BLOCKS_DELETE', 'ブロック 削除中...');
define('_MD_AM_BLOCKS_REBUILD', 'ブロック 再構築中...');

define('_MD_AM_BLOCK_ID', ' ブロック ID: %s ');

define('_MD_AM_BLOCK_ACCESS', 'ブロックのアクセス権限を追加しました');
define('_MD_AM_BLOCK_ACCESS_ERROR', 'エラー: ブロックのアクセス権限追加に失敗しました');
define('_MD_AM_BLOCK_ADD', 'ブロック %s を追加しました ');
define('_MD_AM_BLOCK_ADD_ERROR', 'エラー: データベースからブロック %s の追加に失敗しました！ ');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE', 'データベースエラー: %s ');
define('_MD_AM_BLOCK_CREATED', 'ブロック %s を作成しました ');
define('_MD_AM_BLOCK_DELETE', 'ブロック %s を削除しました ');
define('_MD_AM_BLOCK_DELETE_DATA', 'データベースからブロックテンプレート %s を削除しました ');
define('_MD_AM_BLOCK_DELETE_ERROR', 'エラー: ブロック %s を削除する事ができませんでした');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR', 'エラー: データベースからブロックテンプレート %s を削除する事ができませんでした');
define('_MD_AM_BLOCK_DEPRECATED', 'ブロックテンプレート %s を無効化しました ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR', 'ERROR: ブロックテンプレートを無効化できませんでした ');
define('_MD_AM_BLOCK_UPDATE', 'ブロック %s を更新しました ');

/* Configs */
define('_MD_AM_GONFIG_ID', '設定 ID: %s');
define('_MD_AM_MODULE_DATA_ADD', 'モジュール設定データ 追加中...');
define('_MD_AM_MODULE_DATA_DELETE', 'モジュール設定データ 削除中...');
define('_MD_AM_MODULE_DATA_UPDATE', 'モジュールデータを更新しました');

define('_MD_AM_CONFIG_ADD', ' 設定オプションを追加しました');
define('_MD_AM_CONFIG_DATA_ADD', ' データベースへ設定 %s を追加しました');
define('_MD_AM_CONFIG_DATA_ADD_ERROR', ' エラー: データベースへ設定 %s の追加に失敗しました ');
define('_MD_AM_GONFIG_DATA_DELETE', 'データベースの設定データを削除しました ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR', 'エラー: データベースの設定データ削除に失敗しました');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD', 'グループ権限 設定中...');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR', 'エラー: グループ権限を削除する事ができませんでした ');
define('_MD_AM_GROUP_PERMS_DELETED', 'グループ権限を削除しました ');

define('_MD_AM_ACCESS_ADMIN_ADD', 'グループ ID %s の管理者アクセス権限を追加しました');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR', 'エラー: グループ ID %s の管理者アクセス権限追加に失敗しました');
define('_MD_AM_ACCESS_USER_ADD_ERROR', 'グループ ID %s　のユーザーアクセス権限を追加しました');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR', 'エラー: グループ ID %s のユーザーアクセス権限追加に失敗しました');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE', '%s の実行に失敗しました');
define('_MD_AM_FAILED_SUCESS', '%s の実行を行いました');

define('_MD_AM_DELETE_ERROR', 'エラー: %s を削除できませんでした');
define('_MD_AM_UPDATE_ERROR', 'エラー: %s を更新できませんでした');
define('_MD_AM_DELETE_MOD_TABLES', 'モジュールテーブル 削除中...');

define('_MD_AM_COMMENTS_DELETE', 'コメント 削除中...');
define('_MD_AM_COMMENTS_DELETE_ERROR', 'エラー: コメント削除に失敗しました');
define('_MD_AM_COMMENTS_DELETED', 'コメントを削除しました');

define('_MD_AM_NOTIFICATIONS_DELETE', 'イベント通知 削除中...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR', 'エラー: イベント通知を削除できませんでした');
define('_MD_AM_NOTIFICATIONS_DELETED', 'イベント通知を削除しました');

define('_MD_AM_TABLE_DROPPED', 'テーブル %s を削除しました！');
define('_MD_AM_TABLE_DROPPED_ERROR', 'エラー: テーブル %s の削除に失敗しました');
define('_MD_AM_TABLE_DROPPED_FAILDED', 'エラー: テーブル %s の削除が有効化されていません！');

?>
