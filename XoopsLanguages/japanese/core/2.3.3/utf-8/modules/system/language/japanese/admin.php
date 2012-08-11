<?php
// $Id: admin.php 2008-07-29 11:27+09:00 2 8 6 $
//%%%%%%	File Name  admin.php 	%%%%%
define("_MD_AM_DBUPDATED","データベースを更新しました");
define('_MD_AM_DBERROR','Database was not updated due to some error!');

define('_MD_AM_CONFIG','System Configuration');


// Admin Module Names
define("_MD_AM_ADGS","グループ管理");
define("_MD_AM_BANS","バナー管理");
define("_MD_AM_BKAD","ブロック管理");
define("_MD_AM_MDAD","モジュール管理");
define("_MD_AM_SMLS","顔アイコン設定");
define("_MD_AM_RANK","ユーザランキング設定");
define("_MD_AM_USER","ユーザ管理");
define("_MD_AM_FINDUSER","ユーザ検索");
define("_MD_AM_PREF","一般設定");
define("_MD_AM_VRSN","バージョン");
define("_MD_AM_MLUS","ユーザ宛にメール送信");
define('_MD_AM_IMAGES','イメージ・マネジャー');
define('_MD_AM_AVATARS','アバター・マネジャー');
define('_MD_AM_TPLSETS','テンプレート');
define('_MD_AM_COMMENTS','コメント');

// Group permission phrases
define('_MD_AM_PERMADDNG','グループ・パーミッションの追加に失敗しました（パーミッション名：%s 対象アイテム：%s 対象グループ：%s）');
define('_MD_AM_PERMADDOK','グループ・パーミッションを追加しました（パーミッション名：%s 対象アイテム：%s 対象グループ：%s）');
define('_MD_AM_PERMRESETNG','「%s」モジュールのグループ・パーミッション設定の初期化に失敗しました');
define('_MD_AM_PERMADDNGP','このアイテムの上位アイテム全てにパーミッションを与える必要があります');
?>