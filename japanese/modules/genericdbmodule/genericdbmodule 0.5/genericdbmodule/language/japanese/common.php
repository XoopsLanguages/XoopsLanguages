<?php

$common_consts = array(
        '_COMMA'        => '、',
        '_NOT_SELECTED' => '未選択',
        '_MORE_THAN'    => '以上',
        '_LESS_THAN'    => '以下');

foreach ($common_consts as $key => $value) {
    if (!defined('_' . $affix . $key)) {
        define('_' . $affix . $key, $value);
    }
}

?>