<?php
// $Id: notification.php $
// _LANGCODE: ja
// _CHARSET : EUC-JP
// Translator: XOOPS Translation Team
// RMV-NOTIFY
// Text for various templates...
define('_NOT_NOTIFICATIONOPTIONS', 'イベントの選択');
define('_NOT_UPDATENOW', '今すぐ更新');
define('_NOT_UPDATEOPTIONS', 'イベントの更新');
define('_NOT_CLEAR', 'クリア');
define('_NOT_CHECKALL', '全選択');
define('_NOT_MODULE', 'モジュール');
define('_NOT_CATEGORY', 'カテゴリ');
define('_NOT_ITEMID', 'ID');
define('_NOT_ITEMNAME', '名称');
define('_NOT_EVENT', 'イベント');
define('_NOT_EVENTS', 'イベント');
define('_NOT_ACTIVENOTIFICATIONS', '有効なイベント');
define('_NOT_NAMENOTAVAILABLE', '題なし');
// RMV-NEW : TODO: remove NAMENOTAVAILBLE above
define('_NOT_ITEMNAMENOTAVAILABLE', '項目名が無効です');
define('_NOT_ITEMTYPENOTAVAILABLE', '項目タイプが無効です');
define('_NOT_ITEMURLNOTAVAILABLE', '項目 URL が無効です');
define('_NOT_DELETINGNOTIFICATIONS', '選択イベントの削除');
define('_NOT_DELETESUCCESS', '選択されたイベントを削除しました');
define('_NOT_UPDATEOK', 'イベントを更新しました');
define('_NOT_NOTIFICATIONMETHODIS', '通知方法');
define('_NOT_EMAIL', 'E-mail');
define('_NOT_PM', 'プライベートメッセージ');
define('_NOT_DISABLE', '無効');
define('_NOT_CHANGE', '変更');
define('_NOT_NOACCESS', 'このページへのアクセス権限はありません。');
// Text for module config options
define('_NOT_ENABLE', '有効');
define('_NOT_NOTIFICATION', 'イベント通知機能');
define('_NOT_CONFIG_ENABLED', 'イベント通知機能の設定');
define('_NOT_CONFIG_ENABLEDDSC', 'このモジュールでは、ある特定のイベントが発生した際に、当該イベント購読者に対し通知メッセージが送られるように設定できます。この機能を有効にするには「はい」を選択してください');
define('_NOT_CONFIG_EVENTS', '特定イベントを有効にする');
define('_NOT_CONFIG_EVENTSDSC', 'ユーザーへが選択可能なイベントを設定してください');
define('_NOT_CONFIG_ENABLE', 'お知らせ機能 有効');
define('_NOT_CONFIG_ENABLEDSC', '特定のイベントが発生した時、ユーザーへお知らせする事ができます。 ユーザーによりブロックに表示するか、メインコンテンツ下部に表示するか、両方有効にするかを選んで下さい。');
define('_NOT_CONFIG_DISABLE', 'お知らせ機能 無効');
define('_NOT_CONFIG_ENABLEBLOCK', 'イベント選択オプションをブロックに表示');
define('_NOT_CONFIG_ENABLEINLINE', 'イベント選択オプションをメインコンテンツ下部に表示');
define('_NOT_CONFIG_ENABLEBOTH', 'イベント選択オプションをブロック・メインコンテンツ下部に表示');
// For notification about comment events
define('_NOT_COMMENT_NOTIFY', 'コメントを追加しました');
define('_NOT_COMMENT_NOTIFYCAP', '新たなコメントが追加された際に通知');
define('_NOT_COMMENT_NOTIFYDSC', '新しいコメントが追加された時には常にお知らせする');
define('_NOT_COMMENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: コメント追加 {X_ITEM_TYPE} ');
define('_NOT_COMMENTSUBMIT_NOTIFY', '新規コメントの投稿がありました');
define('_NOT_COMMENTSUBMIT_NOTIFYCAP', '承認が必要なコメントが投稿された際に通知');
define('_NOT_COMMENTSUBMIT_NOTIFYDSC', '承認待ちのコメントが送信された時は常に通知');
define('_NOT_COMMENTSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE}: コメント投稿 {X_ITEM_TYPE}');
// For notification bookmark feature
// (Not really notification, but easy to do with this module)
define('_NOT_BOOKMARK_NOTIFY', 'ブックマーク');
define('_NOT_BOOKMARK_NOTIFYCAP', 'この項目をブックマークする');
define('_NOT_BOOKMARK_NOTIFYDSC', 'この項目をブックマークします。通知メッセージは送られません。');
// For user profile
// FIXME: These should be reworded a little...
define('_NOT_NOTIFYMETHOD', 'イベント更新通知メッセージの受信方法');
define('_NOT_METHOD_EMAIL', 'E-mail');
define('_NOT_METHOD_PM', 'プライベートメッセージ');
define('_NOT_METHOD_DISABLE', '一時的に無効');
define('_NOT_NOTIFYMODE', 'デフォルトのイベント通知モード');
define('_NOT_MODE_SENDALWAYS', 'すべてのイベント更新を通知');
define('_NOT_MODE_SENDONCE', '一度だけ通知');
define('_NOT_MODE_SENDONCEPERLOGIN', '一度通知後、再度ログインするまで通知しない');
define('_NOT_NOTHINGTODELETE', '削除するものはありません');

?>