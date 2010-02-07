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
 * @version         $Id: admin.php 0000 15/04/2009 16:03:56 
 */
defined('XOOPS_ROOT_PATH') or die('制限されたアクセス');

define('_AD_NORIGHT', 'このエリアへのアクセスは許可されていません。');
define('_AD_ACTION', '行動');
define('_AD_EDIT', '編集');
define('_AD_DELETE', '削除');
define('_AD_LASTTENUSERS', '最近登録された10ユーザ');
define('_AD_NICKNAME', 'ユーザ名');
define('_AD_EMAIL', 'メールアドレス');
define('_AD_AVATAR', 'アバター');
define('_AD_REGISTERED', '登録日'); //Registered Date
// define( '_AD_PRESSGEN', 'インストール後初めて管理画面を開きます。下のボタンをクリックすると続行します。' );
define('_AD_LOGINADMIN', '管理画面へログイン中..');
define('_AD_WARNINGINSTALL', '注意！: サーバーに　%s ディレクトリがまだ有ります。 <br />セキュリティのためサーバーから消して下さい');
define('_AD_WARNINGWRITEABLE', '注意！: ファイル %s は書き込み許可が有る. <br />セキュリティのため、このファイルの許可を変て下さい。<br /> Unix (444), Win32 (リードオンリー)');
define('_AD_WARNINGNOTWRITEABLE', '注意！:  %s フォルダの書き込み許可が有りません。 <br />このフォルダの許可を変て下さい。<br /> Unix (777)、 Win32 (writable)');
define('_AD_WARNINGXOOPSLIBINSIDE', '注意！:　%s フォルダはルートディレクトリの中に有る！ <br />セキュリティのため、ルートディレクトリの外に動かすことは、非常に提案されます。');

?>