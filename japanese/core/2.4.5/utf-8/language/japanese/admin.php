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
 * @subpackage      Xoops Admin Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: admin.php $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

define('_AD_NORIGHT', "この場所を参照する権限がありません");
define("_AD_ACTION", "");
define('_AD_EDIT', "編集");
define('_AD_DELETE', "削除");
define('_AD_LASTTENUSERS', "最近登録された 10 ユーザー");
define("_AD_NICKNAME", "ユーザー名");
define('_AD_EMAIL', "E-mail アドレス");
define('_AD_AVATAR', "アバター");
define("_AD_REGISTERED", "登録日"); //Registered Date
// define('_AD_PRESSGEN', 'インストール後初めて管理画面を開きます。下のボタンをクリックして続行して下さい');
define('_AD_LOGINADMIN', 'ログイン..');
define("_AD_WARNINGINSTALL", "注意: フォルダ %s がすでに存在します<br />セキュリティ上、このフォルダを削除してください");
define("_AD_WARNINGWRITEABLE", "注意: ファイルは %s が書込可能になっています<br />セキュリティ上、このファイルは読込専用に設定してしてください<br />Unix → 444、Windows では 読込専用");
define("_AD_WARNINGNOTWRITEABLE", "注意: ファイル %s 現在書込できません<br />このファイルを書き込み可能にしてください<br />Unix → 777、Windows → 書込可能");
define('_AD_WARNINGXOOPSLIBINSIDE', '注意: フォルダ %s が DocumentRoot に入っています！ <br />セキュリティ上、DocumentRoot の外に移動して下さい');

?>
