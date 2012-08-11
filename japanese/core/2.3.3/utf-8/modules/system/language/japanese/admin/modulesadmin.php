<?php
// $Id: modulesadmin.php 2008-07-29 11:38+09:00 2 8 6 $
//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","モジュール管理");
define("_MD_AM_MODULE","モジュール");
define("_MD_AM_VERSION","バージョン");
define("_MD_AM_LASTUP","最終更新日");
define("_MD_AM_DEACTIVATED","非アクティブ");
define("_MD_AM_ACTION","操作");
define("_MD_AM_DEACTIVATE","非アクティブにする");
define("_MD_AM_ACTIVATE","アクティブにする");
define("_MD_AM_UPDATE","アップデート");
define("_MD_AM_DUPEN","モジュールがDB内に2重登録されています！");
define("_MD_AM_DEACTED","選択されたモジュールを非アクティブにしました。このモジュールを安全に削除することができます。");
define("_MD_AM_ACTED","選択されたモジュールを有効化しました");
define("_MD_AM_UPDTED","選択されたモジュールを更新しました");
define("_MD_AM_SYSNO","システムモジュールを無効化にすることはできません");
define("_MD_AM_STRTNO","このモジュールは当サイトの開始モジュールとして登録されています。このモジュールを無効化にするには、一般設定メニューにおいて開始モジュールの変更を行ってください。");

// added in RC2
define("_MD_AM_PCMFM","以下の内容で更新を行います");

// added in RC3
define("_MD_AM_ORDER","表示順");
define("_MD_AM_ORDER0","（0 = 非表示）");
define("_MD_AM_ACTIVE","アクティブ");
define("_MD_AM_INACTIVE","非アクティブ");
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
define("_MD_AM_FAILACT","%sモジュールをアクティブに設定することができませんでした");
define("_MD_AM_FAILDEACT","%sモジュールを非アクティブに設定することができませんでした");
define("_MD_AM_FAILUPD","%sモジュールをアップデートすることができませんでした。");
define("_MD_AM_FAILUNINS","%sモジュールをアンインストールできませんでした");
define("_MD_AM_FAILORDER","%sモジュールの表示順を変更できませんでした");
define("_MD_AM_FAILWRITE","メインメニューファイルへの書き込みに失敗しました");
define("_MD_AM_ALEXISTS","%sモジュールは既に存在します");
define("_MD_AM_ERRORSC","エラー：");
define("_MD_AM_OKINS","%sモジュールのインストールが完了しました");
define("_MD_AM_OKACT","%sモジュールをアクティブに設定しました");
define("_MD_AM_OKDEACT","%sモジュールを非アクティブに設定しました");
define("_MD_AM_OKUPD","%sモジュールのアップデートが完了しました");
define("_MD_AM_OKUNINS","%sモジュールのアンインストールが完了しました");
define("_MD_AM_OKORDER","%sモジュールの表示順を変更しました");

define('_MD_AM_RUSUREINS','このモジュールをインストールするには下のボタンをクリックしてください');
define('_MD_AM_RUSUREUPD','このモジュールのアップデートを行うには下のボタンをクリックしてください');
define('_MD_AM_RUSUREUNINS','本当にこのモジュールをアンインストールしてもよろしいですか？');
define('_MD_AM_LISTUPBLKS','モジュールのアップデートを行います。<br />選択のブロックの中身(テンプレートとオプション)は上書きされます。<br />');
define('_MD_AM_NEWBLKS','新規ブロック');
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