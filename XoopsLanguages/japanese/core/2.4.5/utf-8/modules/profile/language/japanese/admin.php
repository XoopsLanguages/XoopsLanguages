<?php
// $Id: admin.php
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define("_PROFILE_AM_FIELD","項目");
define("_PROFILE_AM_FIELDS","項目");
define("_PROFILE_AM_CATEGORY","カテゴリ");
define("_PROFILE_AM_STEP","ステップ");

define("_PROFILE_AM_SAVEDSUCCESS","%s を保存しました");
define("_PROFILE_AM_DELETEDSUCCESS","%s を削除しました");
define("_PROFILE_AM_RUSUREDEL","本当に %s を削除してよろしいですか？");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE","その項目は設定変更できません");

define("_PROFILE_AM_ADD","%s 追加");
define("_PROFILE_AM_EDIT","%s 編集");
define("_PROFILE_AM_TYPE","項目タイプ");
define("_PROFILE_AM_VALUETYPE","値タイプ");
define("_PROFILE_AM_NAME","項目名");
define("_PROFILE_AM_TITLE","タイトル");
define("_PROFILE_AM_DESCRIPTION","説明");
define("_PROFILE_AM_REQUIRED","必須項目？");
define("_PROFILE_AM_MAXLENGTH","最大文字数");
define("_PROFILE_AM_WEIGHT","重要度");
define("_PROFILE_AM_DEFAULT","デフォルト");
define("_PROFILE_AM_NOTNULL","空欄を許す");

define("_PROFILE_AM_ARRAY","Array");
define("_PROFILE_AM_EMAIL","E-mail");
define("_PROFILE_AM_INT","Integer");
define("_PROFILE_AM_TXTAREA","テキストエリア");
define("_PROFILE_AM_TXTBOX","テキストフィールド");
define("_PROFILE_AM_URL","URL");
define("_PROFILE_AM_OTHER","その他");
define("_PROFILE_AM_FLOAT","Floating Point");
define("_PROFILE_AM_DECIMAL","Decimal Number");
define("_PROFILE_AM_UNICODE_ARRAY","Unicode Array");
define("_PROFILE_AM_UNICODE_EMAIL","Unicode Email");
define("_PROFILE_AM_UNICODE_TXTAREA","Unicode Text Area");
define("_PROFILE_AM_UNICODE_TXTBOX","Unicode Text field");
define("_PROFILE_AM_UNICODE_URL","Unicode URL");

define("_PROFILE_AM_PROF_VISIBLE_ON","各グループのユーザー情報における公開項目");
define("_PROFILE_AM_PROF_VISIBLE_FOR","各グループのユーザーが閲覧できる項目");
define("_PROFILE_AM_PROF_VISIBLE","公開可能");
define("_PROFILE_AM_PROF_EDITABLE","アカウント編集で変更可能な項目");
define("_PROFILE_AM_PROF_REGISTER","登録時に入力してもらう項目");
define("_PROFILE_AM_PROF_SEARCH","検索条件として指定可能な項目");
define("_PROFILE_AM_PROF_ACCESS","これらのグループによりアクセス可能なプロフィール");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>管理者グループ: 管理者グループに属しているユーザーについて、現ユーザーは管理者グループへのアクセスを許可されている場合のみアクセス可能です。; else</li>" .
        "<li>特定のグループ: １つ以上の特定のグループ(管理者、ユーザー、ゲスト以外)に属しているユーザーについて、現ユーザーは特定のグループへのアクセスを許可されている場合のみアクセス可能です。; else</li>" .
        "<li>ユーザーグループ: ユーザーグループにのみ属しているユーザーについて、現ユーザーはそのユーザーグループへのアクセスを許可されている場合のみアクセス可能です。</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE","その項目は ");
define("_PROFILE_AM_FIELDVISIBLEFOR","公開可能");
define("_PROFILE_AM_FIELDVISIBLEON","閲覧することの出来る項目");
define("_PROFILE_AM_FIELDVISIBLETOALL","- すべて");
define("_PROFILE_AM_FIELDNOTVISIBLE","公開不可");

define("_PROFILE_AM_CHECKBOX","チェックボックス");
define("_PROFILE_AM_GROUP","Group Select");
define("_PROFILE_AM_GROUPMULTI","Group Multi Select");
define("_PROFILE_AM_LANGUAGE","言語の選択");
define("_PROFILE_AM_RADIO","ラジオボタン");
define("_PROFILE_AM_SELECT","Select");
define("_PROFILE_AM_SELECTMULTI","Multi Select");
define("_PROFILE_AM_TEXTAREA","テキストエリア");
define("_PROFILE_AM_DHTMLTEXTAREA","DHTML テキストエリア");
define("_PROFILE_AM_TEXTBOX","テキストボックス");
define("_PROFILE_AM_TIMEZONE","タイムゾーン");
define("_PROFILE_AM_YESNO","ラジオボタン はい・いいえ");
define("_PROFILE_AM_DATE","日付");
define("_PROFILE_AM_AUTOTEXT","Auto Text");
define("_PROFILE_AM_DATETIME","日時");
define("_PROFILE_AM_LONGDATE","長い 日付");

define("_PROFILE_AM_ADDOPTION","オプション 追加");
define("_PROFILE_AM_REMOVEOPTIONS","オプション 削除");
define("_PROFILE_AM_KEY","キー");
define("_PROFILE_AM_VALUE","値");

// User management
define("_PROFILE_AM_EDITUSER","ユーザー編集");
define("_PROFILE_AM_SELECTUSER","ユーザー選択");
define("_PROFILE_AM_ADDUSER","ユーザー追加");
define("_PROFILE_AM_THEME","テーマ");
define("_PROFILE_AM_RANK","ランク");
define("_PROFILE_AM_USERDONEXIT","ユーザーが存在しません！");
define("_PROFILE_MA_USERLEVEL","ユーザーレベル");

define("_PROFILE_MA_ACTIVE","有効");
define("_PROFILE_MA_INACTIVE","無効");
define("_PROFILE_AM_USERCREATED","ユーザーを作成しました");

define("_PROFILE_AM_CANNOTDELETESELF","ここでは自分自身のアカウントは削除できません - ユーザ情報ページから削除してください");
define("_PROFILE_AM_CANNOTDELETEADMIN","管理者アカウントは削除できません");

define("_PROFILE_AM_NOSELECTION","ユーザーが選択されていません");
define("_PROFILE_AM_USER_ACTIVATED","ユーザーが有効化されました");
define("_PROFILE_AM_USER_DEACTIVATED","ユーザーが無効化されました");
define("_PROFILE_AM_USER_NOT_ACTIVATED","エラー: ユーザーが有効になっていません");
define("_PROFILE_AM_USER_NOT_DEACTIVATED","エラー: ユーザーが無効になっていません");

define("_PROFILE_AM_STEPNAME","ステップ名");
define("_PROFILE_AM_STEPORDER","ステップ順");
define("_PROFILE_AM_STEPSAVE","保存");
define("_PROFILE_AM_STEPINTRO","ステップ 説明");

?>
