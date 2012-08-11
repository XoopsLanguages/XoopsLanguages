<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Auth Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: auth.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('制限されたアクセス');

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_AUTH_MSG_AUTH_METHOD'," %s 認証方法を使用");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP拡張子がロードしてません (貴方のPHPコンフィギュレーションファイル php.ini　を質して下さい)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"サーバーに繋ぐことが出来ません");
define('_AUTH_LDAP_USER_NOT_FOUND'," %s　のディレクトリサーバー (%s)　にメンバー　%s　が見つからなかった。");
define('_AUTH_LDAP_CANT_READ_ENTRY',"エントリ　%s　を読めない");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"コネクション：　%s　に合わせるユーザーデーターをXOOPS データーベースに見つけれない <br>" . "自動プロビジョニングのユーザーデーターを子細を質して下さい");
define('_AUTH_LDAP_START_TLS_FAILED',"TLSコネクションを見つけれない");

?>