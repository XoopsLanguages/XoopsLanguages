<?php

$dirname = basename(dirname(dirname(dirname(__FILE__))));
$lang_dirname = basename(dirname(__FILE__));
$affix = strtoupper(strlen($dirname) >= 3 ? substr($dirname, 0, 3) : $dirname);

include_once XOOPS_ROOT_PATH . "/modules/$dirname/language/$lang_dirname/common.php";

$main_consts = array(
        '_PAGENAVI_INFO'      => '全%s件中、 %s件目から%s件目までを表示',
        '_REQ_MARK'           => '<font color="red">(必須)</font>',
        '_SEARCH'             => '検索',
        '_SEARCH_RESULT'      => '検索結果',
        '_ADD_DATE'           => '登録日時',
        '_UNAME'              => '登録ユーザ名',
        '_FILE'               => 'ファイル',
        '_ADD'                => '登録',
        '_ADD_MSG'            => '登録しました。',
        '_UPDATE'             => '更新',
        '_UPDATE_MSG'         => '更新しました。',
        '_DELETE'             => '削除',
        '_DELETE_CONFIRM_MSG' => '本当にこの情報を削除しますか？',
        '_DELETE_MSG'         => '削除しました。',
        '_DETAIL'             => '詳細',
        '_TRANS'              => '移行',
        '_CANCEL'             => 'キャンセル',
        '_BACK'               => '戻る',
        '_CLOSE'              => '閉じる',
        '_SELECT'             => '選択',
        '_COND_LABEL'         => '検索条件：',
        '_COMP_MATCH'         => '完全一致',
        '_PART_MATCH'         => '部分一致',
        '_AND_MATCH'          => 'AND(すべて一致)',
        '_OR_MATCH'           => 'OR(いずれかに一致)',
        '_OR_OVER'            => '以上',
        '_OR_LESS'            => '以下',
        '_SINCE'              => '以降',
        '_UNTIL'              => '以前',
        '_HIS_TITLE'          => '更新履歴',
        '_HIS_ID'             => '更新ID',
        '_OPERATION'          => '処理内容',
        '_UPDATE_UNAME'       => '実行ユーザー名',
        '_UPDATE_DATE'        => '処理日時',
        '_BEFORE_TITLE'       => '更新前',
        '_AFTER_TITLE'        => '更新後',
        '_SHOW'               => '表示',
        '_HIDE'               => '非表示',
		'_NOT_FOUND_MSG'      => '検索条件に該当するデータはありませんでした。',
        '_REQ_ERR_MSG'        => '「%s」は、必ず入力もしくは選択してください。',
        '_RANGE_ERR_MSG'      => '「%s」の入力値が許容範囲(%s)を超えています。',
        '_INT_ERR_MSG'        => '「%s」に整数値以外が入力されています。',
        '_FLOAT_ERR_MSG'      => '「%s」に小数値以外が入力されています。',
        '_FILE_TYPE_ERR_MSG'  => 'MIMEタイプ「%s」のファイル「%s」はアップロードできません。',
        '_FILE_EXT_ERR_MSG'   => '拡張子「%s」のファイル「%s」はアップロードできません。',
        '_FILE_SIZE_ERR_MSG'  => 'ファイル「%s」の容量が制限値を超えています。',
        '_DATE_ERR_MSG'       => '「%s」の日付の書式に誤りがあります。',
        '_FILE_SAME_ERR_MSG'  => 'ファイル「%s」のアップロードと削除は同時に行えません。',
        '_DUPLICATE_ERR_MSG'  => 'すでに同じ内容の情報が登録されているため、登録できません。',
        '_TOKEN_ERR_MSG'      => 'トークンエラーが発生しました。',
        '_SYSTEM_ERR_MSG'     => 'システムエラーが発生しました。',
        '_PARAM_ERR_MSG'      => 'パラメーターが不正です。',
        '_PERM_ERR_MSG'       => 'この操作を行う権限がありません。',
        '_NO_ERR_MSG'         => '指定された情報はありません。');

foreach ($main_consts as $key => $value) {
    if (!defined('_MD_' . $affix . $key)) {
        define('_MD_' . $affix . $key, $value);
    }
}

?>