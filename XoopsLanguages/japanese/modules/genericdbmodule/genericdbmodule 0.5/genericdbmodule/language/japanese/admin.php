﻿<?php

$dirname = basename(dirname(dirname(dirname(__FILE__))));
$lang_dirname = basename(dirname(__FILE__));
$affix = strtoupper(strlen($dirname) >= 3 ? substr($dirname, 0, 3) : $dirname);

include_once XOOPS_ROOT_PATH . "/modules/$dirname/language/$lang_dirname/common.php";

$admin_consts = array(
        '_ITEM'                    => '項目',
        '_NAME'                    => '項目名',
        '_CAPTION'                 => 'タイトル',
        '_TYPE'                    => 'データタイプ',
        '_REQUIRED'                => '必須',
        '_SHOW_GIDS'               => '表示グループ',
        '_SHOW_GIDS_DESC'          => '複数のグループを選択するには、<br />「Ctrl」キーを押下したままクリックします。',
        '_SEQUENCE'                => '表示順',
        '_SEARCH'                  => '検索',
        '_LIST'                    => '一覧',
        '_ADD'                     => '登録',
        '_UPDATE'                  => '更新',
        '_DETAIL'                  => '詳細',
        '_DELETE'                  => '削除',
        '_SITE_SEARCH'             => 'サイト内検索の対象',
        '_DUPLICATE_CHECK'         => '重複チェックの対象',
        '_DUPLICATE'               => '重複',
        '_DISP_COND'               => '検索条件の表示',
        '_SEARCH_DESC'             => '検索画面説明文',
        '_SHOW_DESC'               => '表示画面説明文',
        '_INPUT_DESC'              => '入力画面説明文',
        '_OPERATION'               => '操作',
        '_PAGE'                    => 'ページ',
        '_VALUE_TYPE'              => '値型',
        '_VALUE_RANGE_MIN'         => '最小値(以上)',
        '_VALUE_RANGE_MAX'         => '最大値(以下)',
        '_DEFAULT'                 => '初期値',
        '_SIZE'                    => '初期入力サイズ',
        '_MSELECT_SIZE'            => '表示行数',
        '_MAX_LENGTH'              => '最大入力サイズ',
        '_SEARCH_COND'             => '検索条件の初期値',
        '_FOR_SEARCH'              => '(検索ページ)',
        '_ENABLE'                  => '有効',
        '_DISABLE'                 => '無効',
        '_COMP_MATCH'              => '完全一致',
        '_PART_MATCH'              => '部分一致',
        '_AND_MATCH'               => 'AND(すべて一致)',
        '_OR_MATCH'                => 'OR(いずれかに一致)',
        '_OPTIONS'                 => '選択肢',
        '_OPTION_BR'               => '選択肢の改行',
        '_ROWS'                    => 'テキストエリア高さ',
        '_COLS'                    => 'テキストエリア幅',
        '_HTML'                    => 'HTML使用',
        '_HTML_WARN'               => '<font color="red">【注意】 有効の場合、スクリプト埋込攻撃が可能</font>',
        '_SMILY'                   => 'BBコードスマイリータグ',
        '_XCODE'                   => 'BBコードXOOPSコードタグ',
        '_IMAGE'                   => 'BBコード画像タグ',
        '_BR'                      => '自動改行',
        '_MAX_FILE_SIZE'           => '最大ファイルサイズ(MB)',
        '_MAX_IMAGE_SIZE'          => '最大画像サイズ(px)',
        '_ALLOWED_EXTS'            => 'アップロードを許可する<br />ファイルの拡張子',
        '_ALLOWED_MIMES'           => 'アップロードを許可する<br />ファイルのMIMEタイプ',
		'_PAGE'                    => 'ページ',
        '_DISP'                    => '表示',
        '_NOT_DISP'                => '非表示',
        '_YES'                     => 'はい',
        '_NO'                      => 'いいえ',
        '_YES_MARK'                => '○',
        '_NO_MARK'                 => '×',
        '_REQ_MARK'                => '<font color="red">(必須)</font>',
        '_CANCEL'                  => 'キャンセル',
        '_TYPE_TEXT'               => 'テキストボックス(文字列)',
        '_TYPE_NUM'                => 'テキストボックス(数値)',
        '_TYPE_CBOX'               => 'チェックボックス',
        '_TYPE_RADIO'              => 'ラジオボタン',
        '_TYPE_SELECT'             => 'プルダウンメニュー',
        '_TYPE_MSELECT'            => 'リストボックス',
        '_TYPE_TAREA'              => 'テキストエリア',
        '_TYPE_XTAREA'             => 'BBコード対応テキストエリア',
        '_TYPE_FILE'               => 'ファイル',
        '_TYPE_IMAGE'              => '画像',
        '_TYPE_DATE'               => '日付',
        '_STRING'                  => '文字列',
        '_INTEGER'                 => '整数',
        '_FLOAT'                   => '小数',
        '_RETURN_LIST'             => '項目一覧に戻る',
        '_ITEM_ADD'                => '新規追加',
        '_ITEM_ADD_MSG'            => 'データタイプ %s の項目を ',
        '_NOTE_VALUE_SEP'          => '1行につき1つの値を入力します。',
        '_NOTE_ALLOWED_FILE_EXTS'  => '<br /><b>[入力例]</b> <br />pdf<br />xls<br />doc',
        '_NOTE_ALLOWED_FILE_MIMES' => '<br /><b>[入力例]</b> <br />application/pdf<br />application/x-pdf<br />application/msword<br />application/msexcel',
        '_NOTE_ALLOWED_IMG_EXTS'   => '<br /><b>[入力例]</b> <br />jpeg<br />jpg<br />gif<br />png',
        '_NOTE_ALLOWED_IMG_MIMES'  => '<br /><b>[入力例]</b> <br />image/jpeg<br />image/gif<br />image/png',
        '_NOTE_SHOW_VALUE_SEP'     => '表示する値と実際の値が異なる場合は、「|(縦バー)」で区切ります。<br /><b>[入力例]</b> <br />表示A|値A<br />表示B|値B',
        '_ADD_MSG'                 => '項目を登録しました。',
        '_UPDATE_MSG'              => '項目を更新しました。',
        '_DELETE_MSG'              => '項目を削除しました。',
        '_DELETE_CONFIRM_MSG'      => '項目を削除した場合、この項目に登録されている情報も削除されます。<br />本当にこの項目を削除しますか？',
        '_NAME_ERR_MSG'            => '「%s」に使用できる文字は、半角英数字(小文字)と半角アンダーバーです。',
        '_DUPLICATE_ERR_MSG'       => '「%s」に入力された値は、重複しているため使用できません。',
        '_REQ_ERR_MSG'             => '「%s」は、必ず入力もしくは選択してください。',
        '_RANGE_ERR_MSG'           => '「%s」の入力値が許容範囲(%s)を超えています。',
        '_DATA_TYPE_ERR_MSG'       => 'データタイプを選択してください。',
        '_NO_ERR_MSG'              => '指定された情報はありません。',
        '_LAST_ERR_MSG'            => 'すべての項目を削除することはできません。',
        '_TOKEN_ERR_MSG'           => 'トークンエラーが発生しました。',
        '_SYSTEM_ERR_MSG'          => 'システムエラーが発生しました。',
        '_MBSTRING_DISABLE_ERR'    => 'mbstringモジュールを利用できません。このモジュールを正常に動作させるには、mbstringモジュールをインストールする必要があります。',
        '_GD_DISABLE_ERR'          => 'gdモジュールを利用できません。このモジュールで画像を処理するには、gdモジュールをインストールする必要があります。',
        '_GD_NOT_SUPPORTED_ERR'    => 'gdモジュールがGIF/JPEG/PNG画像の読み書きをサポートしていません。このモジュールで画像を処理するには、gdモジュールがGIF/JPEG/PNG画像の読み書きをサポートする必要があります。');

foreach ($admin_consts as $key => $value) {
    if (!defined('_AM_' . $affix . $key)) {
        define('_AM_' . $affix . $key, $value);
    }
}

?>