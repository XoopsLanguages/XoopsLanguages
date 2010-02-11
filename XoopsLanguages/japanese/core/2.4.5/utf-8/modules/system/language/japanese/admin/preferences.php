<?php
// $Id: preferences.php $
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

//%%%%%%    Admin Module Name  AdminGroup   %%%%%
// dont change
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);
define("_MD_AM_SITEPREF", "サイト初期設定");
define("_MD_AM_SITENAME", "サイトの名称");
define("_MD_AM_SLOGAN", "サイトのスローガン");
define("_MD_AM_ADMINML", "管理者 E-mail アドレス");
define("_MD_AM_LANGUAGE", "デフォルト使用言語");
define("_MD_AM_STARTPAGE", "メインページとして使用するモジュール");
define("_MD_AM_NONE", "なし");
define("_MD_AM_SERVERTZ", "サーバ タイムゾーン");
define("_MD_AM_DEFAULTTZ", "デフォルト タイムゾーン");
define("_MD_AM_DTHEME", "デフォルト テーマ");
define("_MD_AM_THEMESET", "テーマ セット");
define("_MD_AM_ANONNAME", "登録していないユーザーの名前");
define("_MD_AM_MINPASS", "パスワードに最低必要な文字数");
define("_MD_AM_NEWUNOTIFY", "新たなユーザー登録された時にメールで通知を受け取る");
define("_MD_AM_SELFDELETE", "ユーザが自身のアカウントを削除できる");
define("_MD_AM_LOADINGIMG", "loading.. に画像を用いる");
define("_MD_AM_USEGZIP", "gzip 圧縮を使用");
define("_MD_AM_UNAMELVL", "ユーザー名として使用できる文字の設定を行います。文字制限の程度を選択してください。");
define("_MD_AM_STRICT", "強(アルファベット・数字のみ)");
define("_MD_AM_MEDIUM", "中");
define("_MD_AM_LIGHT", "弱(漢字・ひらがなも使用可能)");
define("_MD_AM_USERCOOKIE", "ユーザー名保存で用いる Cookie 名");
define("_MD_AM_USERCOOKIEDSC", "この Cookie には ユーザー名 のみを保存します。１年間有効です。この Cookie 使用有無はユーザーが個別に設定できます");
define("_MD_AM_USEMYSESS", "セッション設定のカスタマイズを行う");
define("_MD_AM_USEMYSESSDSC", "セッションの期限設定やセッション名の設定を行えます");
define("_MD_AM_SESSNAME", "セッション ID に用いる Cookie 名");
define("_MD_AM_SESSNAMEDSC", "この Cookie で保存セッション ID は、セッションのタイムアウトかユーザーがログアウトするまで有効となります(「セッション設定のカスタマイズを行う」が有効の場合のみ)");
define("_MD_AM_SESSEXPIRE", "セッションがタイムアウトするまでの時間(単位：分）");
define("_MD_AM_SESSEXPIREDSC", "セッションがタイムアウトする時間を指定します(「セッション設定のカスタマイズを行う」が有効の場合のみ)");
define("_MD_AM_BANNERS", "バナー広告 有効");
define("_MD_AM_MYIP", "あなたの IP アドレス");
define("_MD_AM_MYIPDSC", "ここで設定した IP アドレスは、バナーの表示回数・サイト統計のカウント対象から外されます");
define("_MD_AM_ALWDHTML", "投稿で使用できる HTML タグ");
define("_MD_AM_INVLDMINPASS", "「パスワードに最低必要な文字数」が正しくありません");
define("_MD_AM_INVLDUCOOK", "「ユーザー名保存で用いる Cookie 名」が正しくありません");
define("_MD_AM_INVLDSCOOK", "「セッション ID に用いる Cookie 名」が正しくありません");
define("_MD_AM_INVLDSEXP", "「セッションがタイムアウトするまでの時間」が正しくありません");
define("_MD_AM_ADMNOTSET", "「管理者 E-mail アドレス」が設定されていません");
define("_MD_AM_YES", "はい");
define("_MD_AM_NO", "いいえ");
define("_MD_AM_DONTCHNG", "以下は変更しないで下さい！");
define("_MD_AM_REMEMBER", "このファイルを Web 上の管理者画面から編集できるようにするには、このファイルのパーミッション(属性)を 666 に設定する必要があります");
define("_MD_AM_IFUCANT","もしファイルのパーミッション(属性)を変更できない場合は、このファイルを直接編集してください");


define("_MD_AM_COMMODE", "デフォルトのコメント表示モード");
define("_MD_AM_COMORDER", "デフォルトのコメント表示順序");
define("_MD_AM_ALLOWHTML", "コメントで HTML タグの使用を許可する");
define("_MD_AM_DEBUGMODE", "デバッグモード");
define("_MD_AM_DEBUGMODEDSC", "(デバッグの際に設定してください。サイト運営時には解除してください)");
define("_MD_AM_AVATARALLOW", "アバター画像のアップロードを許可する");
define("_MD_AM_AVATARMP", "アバターアップロード権を得るための発言数");
define("_MD_AM_AVATARMPDSC", "ユーザが自分で作成したアバターをアップロードするために必要な最低投稿数を設定してください。");
define("_MD_AM_AVATARW", "アバター画像の最大幅(ピクセル)");
define("_MD_AM_AVATARH", "アバター画像の最大高さ(ピクセル)");
define("_MD_AM_AVATARMAX", "アバター画像の最大ファイルサイズ(バイト)");
define("_MD_AM_AVATARCONF", "ユーザ独自のアバター画像に関する設定");
define("_MD_AM_CHNGUTHEME", "全ユーザのテーマを変更");
define("_MD_AM_NOTIFYTO", "通知先グループ");
define("_MD_AM_ALLOWTHEME", "サイトテーマの選択を許可");
define("_MD_AM_ALLOWIMAGE", "投稿画像ファイル表示許可");

define("_MD_AM_USERACTV", "ユーザ自身の確認が必要(推奨)");
define("_MD_AM_AUTOACTV", "自動的にアカウントを有効にする");
define("_MD_AM_ADMINACTV", "管理者が確認してアカウントを有効にする");
define("_MD_AM_ACTVTYPE", "新規登録ユーザアカウントの有効化の方法");
define("_MD_AM_ACTVGROUP", "アカウント有効化依頼のメールの送信先グループ");
define("_MD_AM_ACTVGROUPDSC", "「管理者が確認してアカウントを有効にする」設定になっている場合のみ有効です");
define("_MD_AM_USESSL", "SSL ログインを許可");
define("_MD_AM_SSLPOST", "SSL ログイン時の POST 変数名");
define("_MD_AM_SSLPOSTDSC", "SSL ログイン時に利用するセッション遷移用の変数名です。予想しづらい文字列を入力してください");
define("_MD_AM_DEBUGMODE0", "無効");
define("_MD_AM_DEBUGMODE1", "有効(画面内)");
define("_MD_AM_DEBUGMODE2", "有効(別画面)");
define('_MD_AM_DEBUGMODE3', 'Smarty テンプレート');
define("_MD_AM_MINUNAME", "ユーザー名 最低文字数(バイト)");
define("_MD_AM_MAXUNAME", "ユーザー名 最大文字数(バイト)");
define("_MD_AM_GENERAL", "初期設定");
define('_MD_AM_USERSETTINGS', 'ユーザー情報設定');
define('_MD_AM_ALLWCHGMAIL', 'ユーザーの E-mail アドレス変更を許可');
define("_MD_AM_ALLWCHGMAILDSC", "");
define("_MD_AM_IPBAN", "IP Banning");
define('_MD_AM_BADEMAILS', 'ユーザー E-mail アドレス で使用できない文字列');
define('_MD_AM_BADEMAILSDSC', '<strong>|</strong> で区切ってください。大文字・小文字の区別はありません。正規表現を使用する事ができます');
define("_MD_AM_BADUNAMES", "ユーザー名 で使用できない文字列");
define('_MD_AM_BADUNAMESDSC', '<strong>|</strong> で区切ってください。大文字・小文字は区別しません。正規表現を使用する事ができます');
define('_MD_AM_DOBADIPS', 'IP アクセス 拒否 有効');
define('_MD_AM_DOBADIPSDSC', '入力した IP アドレス からはサイトに入れなくなります');
define('_MD_AM_BADIPS', '<strong>|</strong> で区切ってください。大文字・小文字は区別しません。正規表現を使用する事ができます');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc は aaa.bbb.ccc で始まる IP　アドレスからのアクセスを拒否<br />aaa.bbb.ccc$ は aaa.bbb.ccc デ終わる IP アドレスからのアクセスを拒否<br />aaa.bbb.ccc は aaa.bbb.ccc の IP アドレスを含むアドレスからのアクセスを拒否');
define("_MD_AM_PREFMAIN", "サイト基本設定");
define('_MD_AM_METAKEY', 'META タグ - keywords');
define('_MD_AM_METAKEYDSC', 'サイト内容 <strong>,</strong> で区切って記述します(例: XOOPS,PHP,MySQL,ポータル)');
define("_MD_AM_METARATING", "META タグ - Rating");
define("_MD_AM_METARATINGDSC", "閲覧対象の年齢層を設定します");
define("_MD_AM_METAOGEN", "General");
define("_MD_AM_METAO14YRS", "14 years");
define("_MD_AM_METAOREST", "Restricted");
define("_MD_AM_METAOMAT", "Mature");
define("_MD_AM_METAROBOTS", "META タグ - Robots");
define("_MD_AM_METAROBOTSDSC", "ロボット型検索エンジン(クローラー)の収集有無を設定します");
define("_MD_AM_INDEXFOLLOW", "Index, Follow");
define("_MD_AM_NOINDEXFOLLOW", "No Index, Follow");
define("_MD_AM_INDEXNOFOLLOW", "Index, No Follow");
define("_MD_AM_NOINDEXNOFOLLOW", "No Index, No Follow");
define("_MD_AM_METAAUTHOR", "META タグ - Author");
define("_MD_AM_METAAUTHORDSC", "サイト制作者情報。名前・E-Mail アドレス・URLなど");
define("_MD_AM_METACOPYR", "META タグ - Copyright");
define("_MD_AM_METACOPYRDSC", "著作・製作情報");
define("_MD_AM_METADESC", "META タグ - Description");
define("_MD_AM_METADESCDSC", "サイト内容を説明");
define("_MD_AM_METAFOOTER", "META タグ・フッタ");
define("_MD_AM_FOOTER", "フッタ");
define("_MD_AM_FOOTERDSC", "http:// からの完全アドレスを入力してください。そうしないとうまく表示されないことがあります");
define("_MD_AM_CENSOR", "禁止用語");
define("_MD_AM_DOCENSOR", "禁止用語処理 有効");
define("_MD_AM_DOCENSORDSC", "有効により禁止用語のチェックを行います。無効にすると処理速度が向上するかもしれません");
define("_MD_AM_CENSORWRD", "使用禁止文字列");
define("_MD_AM_CENSORWRDDSC", "<strong>|</strong> で区切り。大文字・小文字は区別しません");
define("_MD_AM_CENSORRPLC", "禁止用語 置換文字列:");
define("_MD_AM_CENSORRPLCDSC", "使用禁止文字列をこの文字列に置き換えます");

define("_MD_AM_SEARCH", "検索オプション");
define("_MD_AM_DOSEARCH", "グローバルサーチ 有効");
define("_MD_AM_DOSEARCHDSC", "投稿・記事の全検索を行います");
define("_MD_AM_MINSEARCH", "キーワード最低文字数");
define("_MD_AM_MINSEARCHDSC", "検索を行う際に必要なキーワードの最低文字数を指定します");
define("_MD_AM_MODCONFIG", "モジュール設定オプション");
define("_MD_AM_DSPDSCLMR", "サイト利用規約 表示");
define("_MD_AM_DSPDSCLMRDSC", "はい にすると新規登録ページにサイト利用規約を表示します");
define("_MD_AM_REGDSCLMR", "サイト利用規約文");
define("_MD_AM_REGDSCLMRDSC", "新規登録ページに表示するサイト利用規約文を入れてください");
define("_MD_AM_ALLOWREG", "新たなユーザー登録許可");
define("_MD_AM_ALLOWREGDSC", "はい にすると 新規ユーザー登録 が行えます");
define("_MD_AM_THEMEFILE", "テーマの自動アップデート 有効");
define("_MD_AM_THEMEFILEDSC", "現在使っているテーマよりも新しいファイルが themes/ 下にある場合、自動的にデータを更新します。サイト公開時には無効にする事をおすすめします");
define("_MD_AM_CLOSESITE", "サイト閉鎖");
define("_MD_AM_CLOSESITEDSC", "特定グループ 以外の人はサイトに入れないようにします");
define("_MD_AM_CLOSESITEOK", "サイト閉鎖時にログインできるグループ");
define("_MD_AM_CLOSESITEOKDSC", "デフォルトの 管理者グループ はログイン可能です");
define("_MD_AM_CLOSESITETXT", "サイト閉鎖の文章");
define("_MD_AM_CLOSESITETXTDSC", "サイト閉鎖 の際に表示する文章");
define("_MD_AM_SITECACHE", "サイト キャッシュ");
define("_MD_AM_SITECACHEDSC", "コンテンツをモジュール別にキャッシュします。モジュールのキャッシュ機能よりも優先されます");
define("_MD_AM_MODCACHE", "モジュール キャッシュ");
define("_MD_AM_MODCACHEDSC", "モジュール毎のキャッシュ時間。モジュールでキャッシュ機能がある場合は キャッシュしない を選択することをおすすめします。ブロック キャッシュ は含みません");
define("_MD_AM_NOMODULE", "キャッシュ可能なモジュールが存在しません");
define("_MD_AM_DTPLSET", "デフォルトのテンプレートセット");
define("_MD_AM_SSLLINK", "SSL によるログインページ URL");

// added for mailer
define("_MD_AM_MAILER", "メール設定");
define("_MD_AM_MAILER_MAIL", "");
define("_MD_AM_MAILER_SENDMAIL", "");
define("_MD_AM_MAILER_", "");
define("_MD_AM_MAILFROM", "送信者 E-mail アドレス");
define("_MD_AM_MAILFROMDESC", "");
define("_MD_AM_MAILFROMNAME", "送信者");
define("_MD_AM_MAILFROMNAMEDESC", "E-mail 送信時の送信者名");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID", "PM 送信者");
define("_MD_AM_MAILFROMUIDDESC","プライベートメッセージ 送信時の送信者名");
define("_MD_AM_MAILERMETHOD", "E-mail 送信方法");
define("_MD_AM_MAILERMETHODDESC", "メール送信方法。デフォルトは PHP mail() 関数を用います");
define("_MD_AM_SMTPHOST", "SMTP サーバ名");
define("_MD_AM_SMTPHOSTDESC", "");
define("_MD_AM_SMTPUSER", "SMTP Auth ユーザー名");
define("_MD_AM_SMTPUSERDESC", "SMTP Auth の認証ユーザー名");
define("_MD_AM_SMTPPASS", "SMTP Auth パスワード");
define("_MD_AM_SMTPPASSDESC", "SMTP Auth の認証パスワード");
define("_MD_AM_SENDMAILPATH", "sendmail パス");
define("_MD_AM_SENDMAILPATHDESC", "フルパス で入力してください");
define("_MD_AM_THEMEOK", "公開するテーマ");
define("_MD_AM_THEMEOKDSC", "使用者が使用できるテーマを選んでください");

// Xoops Authentication constants
define("_MD_AM_AUTH_CONFOPTION_XOOPS", "XOOPS データベース");
define("_MD_AM_AUTH_CONFOPTION_LDAP", "標準 LDAP ディレクトリ");
define("_MD_AM_AUTH_CONFOPTION_AD", "Microsoft Active Directory (c)");
define("_MD_AM_AUTHENTICATION", "認証オプション");
define("_MD_AM_AUTHMETHOD", "認証方法");
define("_MD_AM_AUTHMETHODDESC", "ログオンでどの認証方式を利用するかを選んでください");
define("_MD_AM_LDAP_MAIL_ATTR", "LDAP - Mail フィールド名");
define("_MD_AM_LDAP_MAIL_ATTR_DESC", "LDAP ディレクトリ　の　E-mail 要素");
define("_MD_AM_LDAP_NAME_ATTR", "LDAP - Common Name　フィールド名");
define("_MD_AM_LDAP_NAME_ATTR_DESC", "LDAP ディレクトリ の 共通名 属性");
define("_MD_AM_LDAP_SURNAME_ATTR", "LDAP - Surname フィールド");
define("_MD_AM_LDAP_SURNAME_ATTR_DESC", "LDAP ディレクトリ の 名字 属性");
define("_MD_AM_LDAP_GIVENNAME_ATTR", "LDAP - Given Name フィールド");
define("_MD_AM_LDAP_GIVENNAME_ATTR_DSC", "LDAP ディレクトリ の 名前 属性");
define("_MD_AM_LDAP_BASE_DN", "LDAP - Base DN");
define("_MD_AM_LDAP_BASE_DN_DESC", "LDAP ディレクトリの ベース DN (Distinguished Name)");
define("_MD_AM_LDAP_PORT", "LDAP - ポート番号");
define("_MD_AM_LDAP_PORT_DESC", "ポート番号 を入力。通常は 389 です");
define("_MD_AM_LDAP_SERVER", "LDAP - ホスト名");
define("_MD_AM_LDAP_SERVER_DESC", "LDAP のサーバを FQDN 形式で入力");

define("_MD_AM_LDAP_MANAGER_DN", "LDAP - 管理者 DN");
define("_MD_AM_LDAP_MANAGER_DN_DESC", "LDAP の検索権限を持つユーザーの DN (Distinguished Name)");
define("_MD_AM_LDAP_MANAGER_PASS", "LDAP - 管理者パスワード");
define("_MD_AM_LDAP_MANAGER_PASS_DESC", "上記ユーザーのパスワード");
define("_MD_AM_LDAP_VERSION", "LDAP - バージョン");
define("_MD_AM_LDAP_VERSION_DESC", "通常 2 または 3");
define("_MD_AM_LDAP_USERS_BYPASS", "LDAP - 認証スキップ可能ユーザー");
define("_MD_AM_LDAP_USERS_BYPASS_DESC", "LDAP のレコードになくても良いユーザー名を <strong>|</strong> 区切りで入れます。XOOPS 管理者は含めると良いでしょう");

define("_MD_AM_LDAP_USETLS", "TLS 接続 使用");
define("_MD_AM_LDAP_USETLS_DESC", "TLS のポート番号 389 を使用します。LDAP バージョン は 3 である必要があります");

define("_MD_AM_LDAP_LOGINLDAP_ATTR", "ログイン名・DN の一致");
define("_MD_AM_LDAP_LOGINLDAP_ATTR_D","ログイン名と DN 共通化します");
define("_MD_AM_LDAP_LOGINNAME_ASDN", "LDAP でユーザ検索に利用する要素");
define("_MD_AM_LDAP_LOGINNAME_ASDN_D", "XOOPS のログイン名を LDAP DN で使用します (例 : uid=<loginname>,dc=impresscms,dc=org)<br />エントリーは検索されることなくサーバから直接読まれます");

define("_MD_AM_LDAP_FILTER_PERSON", "LDAP - ユーザー検索フィルタ");
define("_MD_AM_LDAP_FILTER_PERSON_DESC", "ユーザー検索の特別な LDAP フィルタです。@@loginname@@ をログイン名に置き換えます<br /> わからないときには空白にして下さい" .
		"<br />例 : (&(objectclass=person)(samaccountname=@@loginname@@)) for AD" .
		"<br />例 : (&(objectclass=inetOrgPerson)(uid=@@loginname@@)) for LDAP");

define("_MD_AM_LDAP_DOMAIN_NAME", "LDAP - ドメイン名");
define("_MD_AM_LDAP_DOMAIN_NAME_DESC", "Windows のドメイン名。 ADS・NT Server で有効");

define("_MD_AM_LDAP_PROVIS", "自動的にユーザーを作成");
define("_MD_AM_LDAP_PROVIS_DESC", "LDAP ユーザーを元に XOOPS users テーブルにアカウントを自動的生成します");

define("_MD_AM_LDAP_PROVIS_GROUP", "自動所属グループ");
define("_MD_AM_LDAP_PROVIS_GROUP_DSC", "LDAP で自動登録されたユーザーが所属するグループを");

define("_MD_AM_LDAP_FIELD_MAPPING_ATTR", "認証サーバのフィールドマッピング");
define("_MD_AM_LDAP_FIELD_MAPPING_DESC", "XOOPS データベース フィールド と LDAP 各フィールド の対応付け。下のように記述してください" .
		"<br><br>Format [Xoops Database field]=[Auth system LDAP attribute]" .
		"<br>for example : email=mail" .
		"<br>Separate each with a |" .
		"<br><br>!! For advanced users !!");

define("_MD_AM_LDAP_PROVIS_UPD", "XOOPS アカウントの同期");
define("_MD_AM_LDAP_PROVIS_UPD_DESC", "LDAP 認証サーバ と XOOPS ユーザアカウント を常に同期させます");


define("_MD_AM_CPANEL", "コントロールパネル GUI");
define("_MD_AM_CPANELDSC", "For backend");

define("_MD_AM_WELCOMETYPE", "ウェルカムメッセージ　送信");
define("_MD_AM_WELCOMETYPE_DESC", "登録が完了したユーザにウェルカルメッセージを送る方法を選んで下さい");
define("_MD_AM_WELCOMETYPE_EMAIL", "E-mail");
define("_MD_AM_WELCOMETYPE_PM", "プライベートメッセージ");
define("_MD_AM_WELCOMETYPE_BOTH", "E-mail・プライベートメッセージ");

define("_MD_AM_MODULEPREF", "モジュール設定");

?>
