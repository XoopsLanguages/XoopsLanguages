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
 * @version         $Id: auth.php $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_AUTH_MSG_AUTH_METHOD',"%s 認証を使います");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP extension がありません(php.ini等で確認してください)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"サーバーに接続できません");
define('_AUTH_LDAP_USER_NOT_FOUND',"メンバー %s は、このディレクトリサーバ(%s) から見つかりませんでした(%s内)");
define('_AUTH_LDAP_CANT_READ_ENTRY', "%sのエントリが読み込めません");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"該当するユーザ情報を、XOOPSデータベースから読み込めませんでした: %s ");
define('_AUTH_LDAP_START_TLS_FAILED',"TLS 接続に失敗しました");

?>
