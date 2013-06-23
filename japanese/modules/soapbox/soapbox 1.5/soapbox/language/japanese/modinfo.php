<?php
/**
 * $Id: modinfo.php v 1.5 25 April 2004 hsalazar Exp $
 * Module: Soapbox
 * Version: v 1.5
 * Release Date: 25 April 2004
 * Author: hsalazar
 * Licence: GNU
 */// translation into japanese , by movie (and domifara)   

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SB_MD_NAME","コラム");

// A brief description of this module
define("_MI_SB_MD_DESC","あなたのサイト用のOpEd");

// Sub menus in main menu block
define("_MI_SB_SUB_SMNAME1","記事の投稿");

// A brief description of this module
define("_MI_SB_ALLOWSUBMIT","1. ユーザの投稿:");
define("_MI_SB_ALLOWSUBMITDSC","ユーザが記事を投稿することを許可しますか?");

define('_MI_SB_AUTOAPPROVE','2. 記事の自動承認:');
define('_MI_SB_AUTOAPPROVEDSC','管理者が介在しないで、記事を自動承認します');

define('_MI_SB_ALLOWADMINHITS','3. 管理者のヒットカウント:');
define('_MI_SB_ALLOWADMINHITSDSC','管理者が表示した場合もヒット数としてカウントしますか?');

define('_MI_SB_PERPAGE','4. １ページあたりの最大記事数(管理画面):');
define('_MI_SB_PERPAGEDSC','管理画面で１度に表示する１ページあたりの最大記事数');

define('_MI_SB_PERPAGEINDEX','5. １ページあたりの最大記事数(ユーザー画面):');
define('_MI_SB_PERPAGEINDEXDSC','モジュール画面で１度に表示する１ページあたりの最大記事数');

define('_MI_SB_IMGDIR','6. 画像ベースディレクトリURLパス:');
define('_MI_SB_IMGDIRDSC','画像を使用するときのベースディレクトリURLパスを指定します (最後に\'/\'を付けないこと)');

define('_MI_SB_UPLOADDIR','7. 画像アップロードディレクトリパス:');
define('_MI_SB_UPLOADDIRDSC','コラムや記事の画像を格納するディレクトリパス (最後に\'/\'を付けないこと)');

define('_MI_SB_IMGWIDTH','8. イメージの最大の幅:');
define('_MI_SB_IMGWIDTHDSC','アップロードするイメージの最大幅をセットしてください');

define('_MI_SB_IMGHEIGHT','9. イメージの最大の高さ:');
define('_MI_SB_IMGHEIGHTDSC','アップロードするイメージの最大の高さをセットしてください');

define('_MI_SB_MAXFILESIZE','10. 最大のアップロード・サイズ:');
define('_MI_SB_MAXFILESIZEDSC','ファイルをアップロードする時の最大のファイルサイズを設定してください. （サーバーで許可されている制限内）.');

define('_MI_SB_DATEFORMAT','11.日付形式:');
define('_MI_SB_DATEFORMATDSC','記事に表示する日付形式を指定してください');

define('_MI_SB_ALLOWCOMMENTS','12. 記事単位でのコメント制御:');
define('_MI_SB_ALLOWCOMMENTSDSC','このオプションを「はい」にセットすると、管理フォームで記事ごとのコメントの許可のチェックボックスがオンになっているときだけコメントを見ることが出来ます. <br /><br />
「いいえ」にセットするとモジュール単位のコメント制御になります (下記のコメントの制御をみてください）.');

define('_MI_SB_MOREARTS','13. 執筆者の側面の箱の中の記事:');
define('_MI_SB_MOREARTSDSC','側面の箱に表示する記事の数を指定してください.');

define('_MI_SB_COLSINMENU','14. メインメニュー内にコラム名を表示?:');
define('_MI_SB_COLSINMENUDSC','このオプションを「はい」にセットすると、執筆者がコラム名をメインメニューのサブメニューに表示することが出来ます。 <br /><br />
多くのコラムがあるサイトでは推奨されないので「いいえ」にしてください');

define('_MI_SB_COLSPERINDEX','15. 一覧ページに表示するコラム数:');
define('_MI_SB_COLSPERINDEXDSC','一覧ページに１ページあたりに表示するコラム数はいくつにしますか? [初期値 = 3]');

define("_MI_SB_ALLOWRATING","16. 記事に評価オプションを使用しますか?:");
define("_MI_SB_ALLOWRATINGDSC","「はい」に設定すると、記事にユーザが記事を評価するするためにランク付けボタンの列が表示されます[初期値 =「はい」]");

define("_MI_SB_INTROTIT","17. 挨拶文の最初:");
define("_MI_SB_INTROTITDSC","インデックスページでのあいさつ文の最初");
define("_MI_SB_INTROTITDFLT","ようこそ");

define("_MI_SB_INTROTEXT","18. 挨拶文:");
define("_MI_SB_INTROTEXTDSC","インデックスページでの挨拶文");
define("_MI_SB_INTROTEXTDFLT","ここで、あなたは私たちの作者の各人からの最新記事の載った私たちのコラムの一覧を見つけるでしょう｡そのコラムに関連付けられているすべての記事を見るには、コラム名をクリックしてください｡または、ダイレクトに記事を読むなら記事名をクリックしてください｡あなたに、記事の評価や、イベント通知の指定、コメントを残して頂ければ幸いです｡");

define("_MI_SB_BUTTSTXT","19. 新規作成ボタンを表示:");
define("_MI_SB_BUTTSTXTDSC","「はい」にすると, 管理メインページでも'新規作成'ボタンも表示されます｡ [初期値 = 「いいえ」]");

define("_MI_SB_WARNING","This module comes as is, without any guarantees whatsoever. Although this module is not beta, it is still under active development. This release can be used in a live website or a production environment, but its use is under your own responsibilityi, which means the author is not responsible.");
define("_MI_SB_AUTHORMSG","Soapbox is my first XOOPS module and as such contains all the errors of someone just beginning in the world of PHP and such things. My first steps in this world I gave them with the help of Catzwolf, now retired from the XOOPS world, and Soapbox owes him a lot, including both good pointers and mistakes.<br /><br />The history of Soapbox is told in more detail in the documentation, but I must thank here the valuable help of many XOOPS users, including herko, w4z004, marcan, ackbarr, Mithrandir, Predator and many more.<br /><br />Of course, I also take into account the help of those that have criticized, praised or commented the module, those who have looked in it more than it's designed to do, and in general to all those that have accepted the risk and installed the module in their sites for their enyojment. To you all, my friends, many thanks.");

// Names of admin menu items
define("_MI_SB_ADMENU1","管理メイン");
define("_MI_SB_ADMENU2","コラムの新規作成");
define("_MI_SB_ADMENU3","記事の新規作成");
define("_MI_SB_ADMENU4","コラムのアクセス権限");
define("_MI_SB_ADMENU5","ブロック管理");
define("_MI_SB_ADMENU6","モジュールに戻る");

//Names of Blocks and Block information
define("_MI_SB_ARTSRATED","最も評価された記事");
define("_MI_SB_ARTSNEW","最近の記事");
define("_MI_SB_ARTSTOP","人気の記事");
define("_MI_SB_ARTSPOTLIGHT","スポットライト");

// Defines for the About page
define("_MI_SB_AUTHOR_INFO","Author's information");
define("_MI_SB_AUTHOR_WEBSITE","Author's website");
define("_MI_SB_AUTHOR_EMAIL","Author's E-mail");
define("_MI_SB_AUTHOR_CREDITS","Module credits");
define("_MI_SB_MODULE_INFO","General module information");
define("_MI_SB_MODULE_STATUS","Version");
define("_MI_SB_MODULE_DEMO","Demo site");
define("_MI_SB_MODULE_SUPPORT","Support site");
define("_MI_SB_MODULE_BUG","Submit a bug");
define("_MI_SB_MODULE_FEATURE","Request a feature");
define("_MI_SB_MODULE_DISCLAIMER","Disclaimer");
define("_MI_SB_AUTHOR_WORD","Author's comment");


// Text for notifications

define('_MI_SB_GLOBAL_NOTIFY','モジュール全体');
define('_MI_SB_GLOBAL_NOTIFYDSC','モジュール全体における通知オプション');

define('_MI_SB_COLUMN_NOTIFY','コラム');
define('_MI_SB_COLUMN_NOTIFYDSC','表示中のコラムに対する通知オプション');

define('_MI_SB_ARTICLE_NOTIFY','記事');
define('_MI_SB_ARTICLE_NOTIFYDSC','表示中の記事に対する通知オプション');

define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFY','新規コラム');
define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYCAP','新規コラムが作成された場合に通知する');
define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYDSC','新規コラムが作成された場合に通知する');
define('_MI_SB_GLOBAL_NEWCOLUMN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 新規コラムが作成されました');

define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFY','要求された記事を修正します');
define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYCAP','任意の記事が修正された場合に通知する');
define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYDSC','全ての記事が修正された場合に通知する');
define('_MI_SB_GLOBAL_ARTICLEMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 記事の修正を要求しました');

define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFY','記事の破損報告');
define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYCAP','記事の破損の報告があった場合に通知する');
define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYDSC','記事の破損の報告があった場合に通知する');
define('_MI_SB_GLOBAL_ARTICLEBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 記事の破損の報告がありました');

define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFY','記事が投稿されました');
define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYCAP','新規記事が投稿され認証を待っている場合に通知する');
define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYDSC','新規記事が投稿され認証を待っている場合に通知する');
define('_MI_SB_GLOBAL_ARTICLESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 新しい記事が投稿されました');

define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFY','新着記事');
define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFYCAP','新規記事が掲載された場合に通知する');
define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFYDSC','新規記事が掲載された場合に通知する');
define('_MI_SB_GLOBAL_NEWARTICLE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 新しい記事が掲載されました');

define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFY','記事が投稿されました');
define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYCAP','新規コラムが投稿され認証を待っている場合に通知する');
define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYDSC','新規コラムが投稿され認証を待っている場合に通知する');
define('_MI_SB_COLUMN_ARTICLESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 新規コラムが投稿されました');

define('_MI_SB_COLUMN_NEWARTICLE_NOTIFY','新着記事');
define('_MI_SB_COLUMN_NEWARTICLE_NOTIFYCAP','新規記事がコラムに記入された場合に通知する');
define('_MI_SB_COLUMN_NEWARTICLE_NOTIFYDSC','新規記事がコラムに記入された場合に通知する');
define('_MI_SB_COLUMN_NEWARTICLE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 新規コラムの記事');

define('_MI_SB_ARTICLE_APPROVE_NOTIFY','記事は承認しました');
define('_MI_SB_ARTICLE_APPROVE_NOTIFYCAP','記事が承認された場合に通知する');
define('_MI_SB_ARTICLE_APPROVE_NOTIFYDSC','記事が承認された場合に通知する');
define('_MI_SB_ARTICLE_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} 自動通知 : 記事は承認しました');

define('_MI_SB_ALLOWEDSUBMITGROUPS','どのグループが記事を投稿できますか?');
define('_MI_SB_ALLOWEDSUBMITGROUPSDSC','記事を投稿することができるユーザ・グループ');

//HACK by domifara
define("_MI_SB_FORM_OPTIONS","フォーラムオプション");
define("_MI_SB_FORM_OPTIONS_DESC","使用するフォームエディタを選択します。もしもシンプルなインストールだけしかしていないなら(e.g標準のxoopsコアパッケージで供給されているxoopsコアのクラスだけ使用している場合),「DHTML」だけが使用できます");
define("_MI_SB_FORM_COMPACT","コンパクト");
define("_MI_SB_FORM_DHTML","DHTML");
define("_MI_SB_FORM_SPAW","Spaw Editor");
define("_MI_SB_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_SB_FORM_FCK","FCK Editor");
define("_MI_SB_FORM_KOIVI","Koivi Editor");
define("_MI_SB_FORM_TINYMCE","TinyMCE Editor");

// 1.06
define("_MI_SB_SUBMITS", 'Submissions');
define("_MI_SB_ADD_ARTICLE", 'Add Article');
define("_MI_SB_ADD_COLUMN", 'Add Column');
//1.60
define("_MD_SB_WGT","Weight");