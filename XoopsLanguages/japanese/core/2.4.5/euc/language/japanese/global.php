<?php
// $Id: global.php $
// _LANGCODE: ja
// _CHARSET : EUC-JP
// Translator: XOOPS Translation Team
define('_PLEASEWAIT', 'しばらくお待ちください');
define('_FETCHING', 'Loading...');
define('_TAKINGBACK', '元の場所へと戻ります....');
define('_LOGOUT', 'ログアウト');
define('_SUBJECT', '件名');
define('_MESSAGEICON', 'アイコン');
define('_COMMENTS', 'コメント');
define('_POSTANON', '匿名投稿');
define('_DISABLESMILEY', '顔文字無効');
define('_DISABLEHTML', 'HTML タグ無効');
define('_PREVIEW', 'プレビュー');
define('_GO', 'Go!');
define('_NESTED', 'ネスト');
define('_NOCOMMENTS', 'コメント非表示');
define('_FLAT', 'フラット');
define('_THREADED', 'スレッド');
define('_OLDESTFIRST', '古いものから');
define('_NEWESTFIRST', '新しいものから');
define('_MORE', 'more...');
define('_MULTIPAGE', '<span style=\'color:red;\'>[pagebreak]</span>タグを本文内に記入することでページ区切りを挿入することができます。');
define("_IFNOTRELOAD", "自動的にページが読み込まれない場合は<a href='%s'>こちら</a>をクリックしてください。");
// Error messages issued by XoopsObject::cleanVars()
define("_XOBJ_ERR_REQUIRED", "%s が必要です" );
define("_XOBJ_ERR_SHORTERTHAN", "%s は %d 文字以内にしてください" );
// %%%%%%    File Name themeuserpost.php     %%%%%
define('_PROFILE', 'プロフィール');
define('_POSTEDBY', '投稿者');
define('_VISITWEBSITE', 'Web サイト');
define('_SENDPMTO', '%s さんへプライベートメッセージ送信');
define('_SENDEMAILTO', '%s さんへメール送信');
define('_ADD', '追加');
define('_REPLY', '返信');
define('_DATE', '日時'); // Posted date
// %%%%%%    File Name admin_functions.php     %%%%%
define('_MAIN', 'トップ');
define('_MANUAL', 'マニュアル');
define('_INFO', '情報');
define('_CPHOME', 'コントロールパネル');
define('_YOURHOME', 'ホームページ');
// %%%%%%    File Name misc.php (who's-online popup)    %%%%%
define('_WHOSONLINE', 'オンライン状況'); 
define('_GUESTS', 'ゲスト');
define('_MEMBERS', 'メンバー');
define('_ONLINEPHRASE', '<strong>%s</strong> ユーザー オンライン');
define('_ONLINEPHRASEX', '<strong>%s</strond> ユーザ <strong>%s</strong> 参照中');
define('_CLOSE', '閉じる'); // Close window
// %%%%%%    File Name module.textsanitizer.php     %%%%%
define('_QUOTEC', '引用:');
// %%%%%%    File Name admin.php     %%%%%
define("_NOPERM", "申し訳ございません。あなたはこのエリアを参照する事はできません");
// %%%%%        Common Phrases        %%%%%
define('_NO', 'いいえ');
define('_YES', 'はい');
define('_EDIT', '編集');
define('_DELETE', '削除');
define('_SUBMIT', '送信');
define('_MODULENOEXIST', '選択モジュールは存在しません！');
define('_ALIGN', '位置');
define('_LEFT', '左');
define('_CENTER', '中央');
define('_RIGHT', '右');
define('_FORM_ENTER', '%s を入力してください');
define('_MUSTWABLE', 'サーバへファイル %s が書き込みできる状態か確認してください！');
// Module info
define('_PREFERENCES', '初期設定');
define('_VERSION', 'Version');
define('_DESCRIPTION', 'Description');
define('_AUTHOR', 'Author');
define('_CREDITS', 'Credits');
define('_LICENCE', 'Licence');
define('_ERRORS', 'エラー');
define('_NONE', 'なし');
define('_ON', 'on');
define('_READS', 'reads');
define('_WELCOMETO', 'Welcome to %s');
define('_SEARCH', '検索');
define('_ALL', 'すべて');
define('_TITLE', '題名');
define('_OPTIONS', 'オプション');
define('_QUOTE', '引用');
define('_LIST', 'リスト');
define('_LOGIN', 'ログイン');
define('_USERNAME', 'ユーザー名: ');
define('_PASSWORD','パスワード: ');
define('_SELECT','選択');
define('_IMAGE','画像');
define('_SEND', '送信');
define('_CANCEL', 'キャンセル');
define('_ASCENDING', '昇順');
define('_DESCENDING','降順');
define('_BACK', '戻る');
define('_NOTITLE', '題なし');
/**
* Image manager
*/
define('_IMGMANAGER', 'イメージ編集');
define('_NUMIMAGES', '%s イメージ');
define('_ADDIMAGE', '画像ファイル 追加');
define('_IMAGENAME', '画像名:');
define('_IMGMAXSIZE', '最大ファイルサイズ (バイト):');
define('_IMGMAXWIDTH', '最大横幅 (ピクセル):');
define('_IMGMAXHEIGHT', '最大縦幅 (ピクセル数):');
define('_IMAGECAT', 'カテゴリ:');
define('_IMAGEFILE', '画像ファイル名:');
define('_IMGWEIGHT', 'イメージ編集での表示順:');
define('_IMGDISPLAY', 'この画像を表示する');
define('_IMAGEMIME', 'MIME-Type:');
define('_FAILFETCHIMG', 'アップロードファイル %s が取得できませんでした');
define('_FAILSAVEIMG', '画像ファイル %s のデータベース格納に失敗しました');
define('_NOCACHE', 'キャッシュなし');
define('_CLONE', '複製');
// %%%%%    For xoopsform files %%%%%
define('_STARTSWITH', '前方一致');
define('_ENDSWITH', '後方一致');
define('_MATCHES', '完全一致');
define('_CONTAINS', '次の単語を含む');
define('_REQUIRED', 'Required');
// %%%%%%    File Name commentform.php     %%%%%
define('_REGISTER', '登録');
// %%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE', 'サイズ');  // font size
define('_FONT', 'フォント');  // font family
define('_COLOR', 'カラー');  // font color
define('_EXAMPLE', 'サンプル');
define('_ENTERURL', '追加するサイトの URL を入力:');
define('_ENTERWEBTITLE', 'サイト名 を入力:');
define('_ENTERIMGURL', '画像ファイルの URL を入力');
define('_ENTERIMGPOS', '画像ファイルの配置は？');
define('_IMGPOSRORL', 'L = 左、R = 右、空欄 = 指定なし');
define('_ERRORIMGPOS', 'エラー！ 画像ファイルの配置は？');
define('_ENTEREMAIL', 'メールアドレスを入力');
define('_ENTERCODE', 'コードを入力');
define('_ENTERQUOTE', '引用文を入力');
define('_ENTERTEXTBOX', 'テキストボックスへ入力してください');
define('_ALLOWEDCHAR', '最大文字数： ');
define('_CURRCHAR', '現在の文字数：');
define('_PLZCOMPLETE', '表題・メッセージ文を入力してください');
define('_MESSAGETOOLONG', 'メッセージ文が長すぎます');
// %%%%%        TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1 秒');
define('_SECONDS', '%s 秒');
define('_MINUTE', '1 分');
define('_MINUTES', '%s 分');
define('_HOUR', '1 時間');
define('_HOURS', '%s 時間');
define('_DAY', '1 日');
define('_DAYS', '%s 日');
define('_WEEK', '1 週間');
define('_MONTH', '1 ヶ月');
define('_DATESTRING', 'Y-n-j G:i:s');
define('_MEDIUMDATESTRING', 'Y-n-j G:i');
define('_SHORTDATESTRING', 'Y-n-j');
/**
* The following characters are recognized in the format string:
* a - 'am' or 'pm'
* A - 'AM' or 'PM'
* d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
* D - day of the week, textual, 3 letters; i.e. 'Fri'
* F - month, textual, long; i.e. 'January'
* h - hour, 12-hour format; i.e. '01' to '12'
* H - hour, 24-hour format; i.e. '00' to '23'
* g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
* G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
* i - minutes; i.e. '00' to '59'
* j - day of the month without leading zeros; i.e. '1' to '31'
* l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
* L - boolean for whether it is a leap year; i.e. '0' or '1'
* m - month; i.e. '01' to '12'
* n - month without leading zeros; i.e. '1' to '12'
* M - month, textual, 3 letters; i.e. 'Jan'
* s - seconds; i.e. '00' to '59'
* S - English ordinal suffix, textual, 2 characters; i.e. 'th', 'nd'
* t - number of days in the given month; i.e. '28' to '31'
* T - Timezone setting of this machine; i.e. 'MDT'
* U - seconds since the epoch
* w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
* Y - year, 4 digits; i.e. '1999'
* y - year, 2 digits; i.e. '99'
* z - day of the year; i.e. '0' to '365'
* Z - timezone offset in seconds (i.e. '-43200' to '43200')
*/
// %%%%%        LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'ja');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES', '1');
/**
* Additions to 2.4.0
**/
define('_RESET', 'リセット');
define('_RE', 'Re:');
?>