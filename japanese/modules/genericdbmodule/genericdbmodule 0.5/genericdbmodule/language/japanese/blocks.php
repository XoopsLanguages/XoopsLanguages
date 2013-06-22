<?php

$dirname = basename(dirname(dirname(dirname(__FILE__))));
$lang_dirname = basename(dirname(__FILE__));
$affix = strtoupper(strlen($dirname) >= 3 ? substr($dirname, 0, 3) : $dirname);

include_once XOOPS_ROOT_PATH . "/modules/$dirname/language/$lang_dirname/common.php";

$block_consts = array(
        '_SHOW_NUM' => '表示件数',
        '_ADD_DATE' => '登録日時',
        '_UNAME'    => '登録ユーザ名',
        '_FILE'     => 'ファイル');

foreach ($block_consts as $key => $value) {
    if (!defined('_MB_' . $affix . $key)) {
        define('_MB_' . $affix . $key, $value);
    }
}

?>