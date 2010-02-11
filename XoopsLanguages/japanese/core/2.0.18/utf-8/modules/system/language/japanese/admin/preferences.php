<?php
// $Id: preferences.php 2008-07-23T06:22+09:00 2 8 6 $
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

define("_MD_AM_SITEPREF","サイト一般設定");
define("_MD_AM_SITENAME","サイト名");
define("_MD_AM_SLOGAN","サイト副題");
define("_MD_AM_ADMINML","管理者メールアドレス");
define("_MD_AM_LANGUAGE","使用言語");
define("_MD_AM_STARTPAGE","開始モジュール");
define("_MD_AM_NONE","なし");
define("_MD_AM_SERVERTZ","サーバのタイムゾーン");
define("_MD_AM_DEFAULTTZ","デフォルト・タイムゾーン");
define("_MD_AM_DTHEME","デフォルト・サイトテーマ");
define("_MD_AM_THEMESET","テーマ・セット");
define("_MD_AM_ANONNAME","未登録ユーザの表示名");
define("_MD_AM_MINPASS","パスワードの最低文字数");
define("_MD_AM_NEWUNOTIFY","新規ユーザ登録時にメールでお知らせを受け取る");
define("_MD_AM_SELFDELETE","ユーザが自身のアカウントを削除できる");
define("_MD_AM_LOADINGIMG","「loading..」画像を表示させる");
define("_MD_AM_USEGZIP","gzip圧縮を使用する");
define("_MD_AM_UNAMELVL","ユーザ名として使用可能な文字の設定を行います。文字制限の程度を選択してください。");
define("_MD_AM_STRICT","強（アルファベットおよび数字のみ）←推奨");
define("_MD_AM_MEDIUM","中");
define("_MD_AM_LIGHT","弱（漢字・平仮名も使用可）");
define("_MD_AM_USERCOOKIE","ユーザ名の保存に使用するクッキーの名称");
define("_MD_AM_USERCOOKIEDSC","このクッキーにはユーザ名のみが保存され、ユーザのPCのハードディスク中に1年間保管されます。このクッキーを使用するかしないかはユーザ自身が選択できます。");
define("_MD_AM_USEMYSESS","セッションの設定をカスタマイズする");
define("_MD_AM_USEMYSESSDSC","セッションの設定のカスタマイズ（セッションがタイムアウトするまでの時間の設定や、セッション名の変更）を行えます");
define("_MD_AM_SESSNAME","セッションIDの保存に使用するクッキーの名称");
define("_MD_AM_SESSNAMEDSC","このクッキーに保存されるセッションIDは、セッションがタイムアウトするか、ユーザがログアウトするまでの間有効です。（「セッションの設定をカスタマイズする」が有効の場合のみ）");
define("_MD_AM_SESSEXPIRE","セッションがタイムアウトするまでの時間(単位：分）");
define("_MD_AM_SESSEXPIREDSC","セッションがタイムアウトするまでの時間を分単位で指定してください。（「セッションの設定をカスタマイズする」が有効の場合のみ）");
define("_MD_AM_BANNERS","バナー広告を有効にする");
define("_MD_AM_MYIP","あなたのIPアドレスを入力してください。");
define("_MD_AM_MYIPDSC","このIPは、バナーのインプレッションおよびサイト統計においてカウントされません。");
define("_MD_AM_ALWDHTML","投稿文の中で使用可能なHTMLタグ");
define("_MD_AM_INVLDMINPASS","パスワードの最低文字数が正しくありません。");
define("_MD_AM_INVLDUCOOK","ユーザクッキーの名称が正しくありません。");
define("_MD_AM_INVLDSCOOK","セッションIDクッキーの名称が正しくありません。");
define("_MD_AM_INVLDSEXP","セッションのタイムアウト時間が正しくありません。");
define("_MD_AM_ADMNOTSET","管理者のメールアドレスが設定されていません。");
define("_MD_AM_YES","はい");
define("_MD_AM_NO","いいえ");
define("_MD_AM_DONTCHNG","以下は絶対に変更しないで下さい");
define("_MD_AM_REMEMBER","このファイルをウェブ上の管理者画面から編集できるようにするには、このファイルのアクセス権限を666（chmod 666）に設定する必要があります。");
define("_MD_AM_IFUCANT","もしファイルのアクセス権限を変更できない場合は、このファイルを直接編集してください。");


define("_MD_AM_COMMODE","デフォルトのコメント表示モード");
define("_MD_AM_COMORDER","デフォルトのコメント表示順");
define("_MD_AM_ALLOWHTML","コメント文においてHTMLタグの使用を許可する");
define("_MD_AM_DEBUGMODE","デバッグモードの有効化");
define("_MD_AM_DEBUGMODEDSC","（デバッグ用に使用してください。実際のサイト運営時には解除してください。）");
define("_MD_AM_AVATARALLOW","アバター画像のアップロードを許可する");
define('_MD_AM_AVATARMP','アバターアップロード権を得るための発言数');
define('_MD_AM_AVATARMPDSC','ユーザが自分で作成したアバターをアップロードするために必要な最低投稿数を設定してください。');
define("_MD_AM_AVATARW","アバター画像の最大幅(ピクセル)");
define("_MD_AM_AVATARH","アバター画像の最大高さ(ピクセル)");
define("_MD_AM_AVATARMAX","アバター画像の最大ファイルサイズ(バイト)");
define("_MD_AM_AVATARCONF","ユーザ独自のアバター画像に関する設定");
define("_MD_AM_CHNGUTHEME","全てのユーザのテーマを変更する");
define("_MD_AM_NOTIFYTO","通知先グループ");
define("_MD_AM_ALLOWTHEME","サイトテーマの選択を許可する");
define("_MD_AM_ALLOWIMAGE","投稿への画像ファイルの表示を許可する");

define("_MD_AM_USERACTV","ユーザ自身の確認が必要(推奨)");
define("_MD_AM_AUTOACTV","自動的にアカウントを有効にする");
define("_MD_AM_ADMINACTV","管理者が確認してアカウントを有効にする");
define("_MD_AM_ACTVTYPE","新規登録ユーザアカウントの有効化の方法");
define("_MD_AM_ACTVGROUP","アカウント有効化依頼のメールの送信先グループ");
define("_MD_AM_ACTVGROUPDSC","「管理者が確認してアカウントを有効にする」設定になっている場合のみ有効です");
define('_MD_AM_USESSL', 'ログインにSSLを使用する');
define('_MD_AM_SSLPOST', 'SSLログイン時に使用するPOST変数の名称');
define('_MD_AM_SSLPOSTDSC', 'SSLログイン時に利用するセッション遷移用変数の名前です。予想しづらい文字列をセットしてください');
define('_MD_AM_DEBUGMODE0','オフ');
define('_MD_AM_DEBUGMODE1','デバッグ機能有効（インライン）');
define('_MD_AM_DEBUGMODE2','デバッグ機能有効（ポップアップ）');
define('_MD_AM_DEBUGMODE3','Smartyテンプレート・デバグ');
define('_MD_AM_MINUNAME', 'ユーザ名の最低文字数(byte)');
define('_MD_AM_MAXUNAME', 'ユーザ名の最大文字数(byte)');
define('_MD_AM_GENERAL', '一般設定');
define('_MD_AM_USERSETTINGS', 'ユーザ情報設定');
define('_MD_AM_ALLWCHGMAIL', 'ユーザ自身のEmailアドレス変更を許可する');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'IP Banning');
define('_MD_AM_BADEMAILS', 'ユーザのemailアドレスとして使用できない文字列');
define('_MD_AM_BADEMAILSDSC', 'それぞれの文字列の間は<b>|</b>で区切ってください。大文字小文字は区別しません。正規表現が使用可能です。');
define('_MD_AM_BADUNAMES', 'ユーザ名として使用できない文字列');
define('_MD_AM_BADUNAMESDSC', 'それぞれの文字列の間は<b>|</b>で区切ってください。大文字小文字は区別しません。正規表現が使用可能です。');
define('_MD_AM_DOBADIPS', 'IPアクセス拒否を有効にしますか？');
define('_MD_AM_DOBADIPSDSC', 'アクセス拒否IPからのユーザはあなたのサイトには入れません。');
define('_MD_AM_BADIPS', 'このサイトへのアクセス拒否IPを入れてください。<br />IPとIPの間は<b>|</b>で区切ってください。大文字小文字は区別しません。正規表現が使用可能です。');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc は それで始まる IPアドレスからのアクセスを拒否します。<br />aaa.bbb.ccc$ は それで終わる IPアドレスからのアクセスを拒否します。<br />aaa.bbb.ccc はその IPアドレスを含むアドレスからのアクセスを拒否します。');
define('_MD_AM_PREFMAIN', 'サイト一般設定');
define('_MD_AM_METAKEY', 'METAタグ(キーワード)');
define('_MD_AM_METAKEYDSC', 'METAキーワードはあなたのサイトの内容を表すものです。キーワードはカンマで区切って記述してください。(例: XOOPS, PHP, mySQL, ポータル)');
define('_MD_AM_METARATING', 'METAタグ(RATING)');
define('_MD_AM_METARATINGDSC', '閲覧対象年齢層の指定');
define('_MD_AM_METAOGEN', 'General'); 
define('_MD_AM_METAO14YRS', '14 years');
define('_MD_AM_METAOREST', 'Restricted');
define('_MD_AM_METAOMAT', 'Mature');
define('_MD_AM_METAROBOTS', 'METAタグ(ROBOTS)');
define('_MD_AM_METAROBOTSDSC', 'ロボット型検索エンジンへの対応');
define('_MD_AM_INDEXFOLLOW', 'Index, Follow');
define('_MD_AM_NOINDEXFOLLOW', 'No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW', 'Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW', 'No Index, No Follow');
define('_MD_AM_METAAUTHOR', 'METAタグ(作成者)');
define('_MD_AM_METAAUTHORDSC', '作成者METAタグは、サイト文書の作成者情報を定義します。名前、WebmasterのEMailアドレス、会社名、URLなどを記述します。');
define('_MD_AM_METACOPYR', 'METAタグ(コピーライト)');
define('_MD_AM_METACOPYRDSC', 'META コピーライトタグは、あなたのサイト上の情報に対するの著作権情報を定義します。');
define('_MD_AM_METADESC', 'METAタグ(Description)');
define('_MD_AM_METADESCDSC', 'METAタグ(Description) は、あなたのサイトの内容を説明する一般的なタグです。');
define('_MD_AM_METAFOOTER', 'METAタグ/フッタ設定');
define('_MD_AM_FOOTER', 'フッタ');
define('_MD_AM_FOOTERDSC', 'リンクを記入する場合は必ずフルパス（http://～）で入力してください。フルパスで入力しなかった場合、モジュール内ページでうまく表示されないことがあります。');
define('_MD_AM_CENSOR', '禁止用語設定');
define('_MD_AM_DOCENSOR', '禁止用語処理を有効にする');
define('_MD_AM_DOCENSORDSC', 'このオプションを有効にすると禁止用語のチェックを行うようになります。このオプションを無効にすることでサイトの処理速度が向上するかもしれません。');
define('_MD_AM_CENSORWRD', '禁止用語');
define('_MD_AM_CENSORWRDDSC', 'ユーザが投稿する際に使用を禁止ｓする文字列を入力してください。文字列と文字列の間は <br /> <b>|</b> で区切り、大文字小文字は区別しません。');
define('_MD_AM_CENSORRPLC', '禁止用語を置き換える文字列:');
define('_MD_AM_CENSORRPLCDSC', '禁止用語がこのテキストボックスで指定した文字列に置き換えられます。');

define('_MD_AM_SEARCH', '検索オプション');
define('_MD_AM_DOSEARCH', 'グローバルサーチを有効にする');
define('_MD_AM_DOSEARCHDSC', 'サイト内の投稿/記事の全検索を行います。');
define('_MD_AM_MINSEARCH', 'キーワード最低文字数');
define('_MD_AM_MINSEARCHDSC', 'ユーザが検索を行う際に必要なキーワードの最低文字数を指定してください。');
define('_MD_AM_MODCONFIG', 'モジュール設定オプション');
define('_MD_AM_DSPDSCLMR', '利用許諾文を表示する');
define('_MD_AM_DSPDSCLMRDSC', '「はい」にするとユーザの新規登録ページに利用許諾の文章を表示します。');
define('_MD_AM_REGDSCLMR', '利用許諾文');
define('_MD_AM_REGDSCLMRDSC', 'ユーザの新規登録ページに表示する利用許諾文を入力してください。');
define('_MD_AM_ALLOWREG', '新規ユーザの登録を許可する');
define('_MD_AM_ALLOWREGDSC', '「はい」を選択すると新規ユーザの登録を許可します。');
define('_MD_AM_THEMEFILE', 'themes/ ディレクトリからの自動アップデートを有効にする');
define('_MD_AM_THEMEFILEDSC', '現在使用中のテーマよりも更新日時が新しいファイルが themes/ディレクトリ下にある場合に、自動的にデータベース内のデータを更新します。サイト公開時には無効にする事をお勧めします。');
define('_MD_AM_CLOSESITE', 'サイトを閉鎖する');
define('_MD_AM_CLOSESITEDSC', '特定グループ以外はサイトにアクセスすることができないようにします。');
define('_MD_AM_CLOSESITEOK', 'サイト閉鎖時でもアクセスが認められているグループ');
define('_MD_AM_CLOSESITEOKDSC', 'デフォルトの管理者グループは常にアクセスできます');
define('_MD_AM_CLOSESITETXT', 'サイト閉鎖の理由');
define('_MD_AM_CLOSESITETXTDSC', 'サイト閉鎖時に表示します');
define('_MD_AM_SITECACHE', 'サイト・キャッシュ');
define('_MD_AM_SITECACHEDSC', 'サイト内のコンテンツをモジュール別にキャッシュします。サイト・キャッシュは、モジュール独自のキャッシュ機能（ある場合）よりも優先されます。');
define('_MD_AM_MODCACHE', 'モジュール・キャッシュ');
define('_MD_AM_MODCACHEDSC', '各モジュールのコンテンツをキャッシュしておく時間の長さを指定してください。モジュールに既にキャッシュ機能がある場合は「キャッシュしない」を選択することをお勧めします。ブロック・キャッシュは含まれません。');
define('_MD_AM_NOMODULE', 'キャッシュ可能なモジュールはありません。');
define('_MD_AM_DTPLSET', 'デフォルトのテンプレート・セット');
define('_MD_AM_SSLLINK', 'SSLログインページへのURL');

// added for mailer
define("_MD_AM_MAILER","メール設定");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","送信者メールアドレス");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","送信者");
define("_MD_AM_MAILFROMNAMEDESC","メール送信の際に送信者として表示される名前を入力してください");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","PM送信者");
define("_MD_AM_MAILFROMUIDDESC","プライベートメッセージ送信の際に送信者としてデフォルト表示されるユーザを選択してください");
define("_MD_AM_MAILERMETHOD","メール送信方法");
define("_MD_AM_MAILERMETHODDESC","メールを送信する方法を選択してください。デフォルトではPHPのmail()関数を使用します。");
define("_MD_AM_SMTPHOST","SMTPサーバアドレス");
define("_MD_AM_SMTPHOSTDESC","SMTPサーバのアドレスの一覧を記入してください。");
define("_MD_AM_SMTPUSER","SMTPAuthユーザ名");
define("_MD_AM_SMTPUSERDESC","SMTPAuthを使用してSMTPサーバにアクセスするためのユーザ名");
define("_MD_AM_SMTPPASS","SMTPAuthパスワード");
define("_MD_AM_SMTPPASSDESC","SMTPAuthを使用してSMTPサーバにアクセスするためのパスワード");
define("_MD_AM_SENDMAILPATH","sendmailへのパス");
define("_MD_AM_SENDMAILPATHDESC","sendmailへのフルパスを記入してください");
define("_MD_AM_THEMEOK","選択可能なテーマ");
define("_MD_AM_THEMEOKDSC","ユーザが選択することのできるテーマファイルを指定してください");


// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS データベース(usersテーブル)");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "標準 LDAP Directory");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory &copy;");
define("_MD_AM_AUTHENTICATION", "認証オプション");
define("_MD_AM_AUTHMETHOD", "認証方式");
define("_MD_AM_AUTHMETHODDESC", "ユーザログオンに、どの認証方式を利用するかをセットします");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - メール要素");
define("_MD_AM_LDAP_MAIL_ATTR_DESC","LDAPツリーにおける E-Mail要素名を指定します");
define("_MD_AM_LDAP_NAME_ATTR","LDAP - 名前 要素");
define("_MD_AM_LDAP_NAME_ATTR_DESC","LDAPツリーにおける Comman Name 要素名を指定します");
define("_MD_AM_LDAP_SURNAME_ATTR","LDAP - 苗字 要素");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC","LDAPツリーにおける Surname 要素名を指定します");
define("_MD_AM_LDAP_GIVENNAME_ATTR","LDAP - Given Name 要素");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC","LDAPツリーにおける Given Name 要素名を指定します");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "LDAPツリーにおける base DN を指定します");
define("_MD_AM_LDAP_PORT","LDAP - ポート番号");
define("_MD_AM_LDAP_PORT_DESC","ポート番号を数字で指定します。通常389です");
define("_MD_AM_LDAP_SERVER","LDAP - ホスト名");
define("_MD_AM_LDAP_SERVER_DESC","LDAPサーバをFQDNで指定します");

define("_MD_AM_LDAP_MANAGER_DN", "LDAP管理者のDN");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "LDAP検索権限を持つユーザのDNを指定します");
define("_MD_AM_LDAP_MANAGER_PASS", "LDAP管理者のパスワード");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "上記ユーザのパスワードを指定します");
define("_MD_AM_LDAP_VERSION", "LDAP バージョン");
define("_MD_AM_LDAP_VERSION_DESC", "通常、2か3を指定します");
define("_MD_AM_LDAP_USERS_BYPASS", "LDAP認証のスキップ可能なユーザ");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "LDAPレコードに存在しなくても良いユーザ名を|で区切って入力します。初期のXOOPSの管理者はここに含めると良いでしょう。");

define("_MD_AM_LDAP_USETLS", "TLS 接続を使う");
define("_MD_AM_LDAP_USETLS_DESC", "389番ポートを使います。LDAPバージョンは3である必要があります");

define("_MD_AM_LDAP_LOGINLDAP_ATTR","ログイン名とDNとを一致させるか");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","When Login name use in the DN option is set to yes, must correspond to the login name XOOPS");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "LDAP でユーザ検索に利用する要素");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "The XOOPS login name is used in the LDAP DN (eg : uid=<loginname>,dc=xoops,dc=org)<br>The entry is directly read in the LDAP Server without search");

define("_MD_AM_LDAP_FILTER_PERSON", "LDAPでユーザを検索する時のフィルター");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "Special LDAP Filter to find user. @@loginname@@ is replace by the users's login name<br> もし、意味が判らないようなら、空欄のままにしておくべきです。" .
		"<br>Ex : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br>Ex : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "LDAP ドメイン名");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows のドメイン名です");

define("_MD_AM_LDAP_PROVIS", "自動的にusersテーブルにレコードを作る");
define("_MD_AM_LDAP_PROVIS_DESC", "LDAPユーザについて、XOOPS usersテーブルにアカウントを自動的に作るかどうかを設定する");

define("_MD_AM_LDAP_PROVIS_GROUP", "自動所属グループ");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "LDAP経由で登録されたユーザが所属するグループを指定します");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "認証サーバのフィールドマッピング");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "XOOPSデータベースフィールドと、LDAPの各フィールドの対応付けを以下のように記述します" .
		"<br><br>Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!");

define("_MD_AM_LDAP_PROVIS_UPD", "XOOPSアカウントの同期");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "LDAP認証サーバとXOOPSユーザアカウントを常に同期させるかどうかの設定");



?>