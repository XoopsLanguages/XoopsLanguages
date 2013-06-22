<?php

$dirname = basename(dirname(dirname(dirname(__FILE__))));
$lang_dirname = basename(dirname(__FILE__));
$affix = strtoupper(strlen($dirname) >= 3 ? substr($dirname, 0, 3) : $dirname);

include_once XOOPS_ROOT_PATH . "/modules/$dirname/language/$lang_dirname/common.php";

$modinfo_consts = array(
        '_MODULE_NAME'          => 'XOOPS汎用データベース',
        '_MODULE_DESC'          => '管理画面から項目の構成を変更できる汎用的なデータベースモジュールです。',
        '_LOADED_JQ'            => 'テーマでjQueryを読み込んでいる',
        '_ID_CAPTION'           => 'IDの名称',
        '_TEMP_INDEX'           => '検索・一覧ページ',
        '_TEMP_ADD'             => '登録ページ',
        '_TEMP_UPDATE'          => '更新ページ',
        '_TEMP_DELETE'          => '削除ページ',
        '_TEMP_DETAIL'          => '詳細ページ',
        '_MENU_ADD'             => '登録',
        '_MENU_HIS'             => '更新履歴検索',
        '_ITEM_MANAGE_MENU'     => '項目管理',
        '_MOD_UPDATE_MENU'      => 'モジュール・アップデート',
        '_SEARCH_NUM'           => '検索結果の1ページ当たりの表示件数',
        '_DATE_FORMAT'          => '日付の書式',
        '_DATE_FORMAT_DESC'     => '日付の書式をdate関数の第1引数の形式で記述します。',
        '_TIME_FORMAT'          => '時刻の書式',
        '_TIME_FORMAT_DESC'     => '時刻の書式をdate関数の第1引数の形式で記述します。',
        '_MANAGE_GROUPS'        => 'データ管理グループ',
        '_MANAGE_GROUPS_DESC'   => 'データ管理グループに所属するユーザーは、すべての登録データを更新・削除できます。',
        '_ADD_GROUPS'           => 'データの登録を許可するグループ(複数選択可)',
        '_ADD_GUEST'            => 'ゲストユーザーにデータの登録を許可する',
        '_HIS_GROUPS'           => '更新履歴の参照を許可するグループ(複数選択可)',
        '_HIS_GUEST'            => 'ゲストユーザーに更新履歴の参照を許可する',
        '_AUTO_UPDATE'          => 'テンプレートファイルの自動更新を有効にする',
        '_AUTO_UPDATE_DESC'     => 'この機能を有効にすると、動作速度が低下します。<br />テンプレートファイルを頻繁に更新する間のみ有効にします。',
        '_DETAIL_IMAGE_WIDTH'   => '詳細画面で表示する画像の幅(px)',
        '_LIST_IMAGE_WIDTH'     => '一覧画面で表示する画像の幅(px)',
        '_NEW_BLOCK'            => '新着登録ブロック',
        '_NTF_GLOBAL'           => '新規登録',
        '_NTF_GLOBAL_DESC'      => '新規登録に関するイベント通知',
        '_NTF_CHANGE'           => '登録情報個別',
        '_NTF_CHANGE_DESC'      => '更新・削除に関するイベント通知',
        '_NTF_ADD_TITLE'        => '登録イベント通知',
        '_NTF_ADD_DESC'         => '新しい情報が登録された際に発生するイベント通知',
        '_NTF_ADD_CAPTION'      => '新しい情報が登録された際に通知します。',
        '_NTF_ADD_SUBJECT'      => '新しい情報が登録されました',
        '_NTF_UPDATE_TITLE'     => '更新イベント通知',
        '_NTF_UPDATE_DESC'      => '登録情報が更新された際に発生するイベント通知',
        '_NTF_UPDATE_CAPTION'   => '登録情報が更新された際に通知します。',
        '_NTF_UPDATE_SUBJECT'   => '登録情報が更新されました',
        '_NTF_DELETE_TITLE'     => '削除イベント通知',
        '_NTF_DELETE_DESC'      => '登録情報が削除された際に発生するイベント通知',
        '_NTF_DELETE_CAPTION'   => '登録情報が削除された際に通知します。',
        '_NTF_DELETE_SUBJECT'   => '登録情報が削除されました',
        '_MBSTRING_DISABLE_ERR' => 'mbstringモジュールを利用できません。このモジュールを正常に動作させるには、mbstringモジュールをインストールする必要があります。',
        '_GD_DISABLE_ERR'       => 'gdモジュールを利用できません。このモジュールで画像を処理するには、gdモジュールをインストールする必要があります。',
        '_GD_NOT_SUPPORTED_ERR' => 'gdモジュールがGIF/JPEG/PNG画像の読み書きをサポートしていません。このモジュールで画像を処理するには、gdモジュールがGIF/JPEG/PNG画像の読み書きをサポートする必要があります。');

foreach ($modinfo_consts as $key => $value) {
    if (!defined('_MI_' . $affix . $key)) {
        define('_MI_' . $affix . $key, $value);
    }
}

?>