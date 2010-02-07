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
 * @subpackage      Xoops Uploader Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: uploader.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('制限されたアクセス');

// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_ER_UP_MIMETYPELOAD', 'MIMEタイプ定義をロード出来なかった。');
define('_ER_UP_FILENOTFOUND', 'ファイルを見つかれなかった。');
define('_ER_UP_INVALIDFILESIZE', '無効ファイル大きさ');
define('_ER_UP_FILENAMEEMPTY', 'ファイル名がない');
define('_ER_UP_NOFILEUPLOADED', 'ファイルをアプロードされてない');
define('_ER_UP_ERROROCCURRED', 'エラー #%s');
define('_ER_UP_UPLOADDIRNOTSET', 'アプロードディレクトリ記録されてない');
define('_ER_UP_FAILEDOPENDIR', 'ディレクトリ %s　を開けなかった');
define('_ER_UP_FAILEDOPENDIRWRITE', '書き込み許可: %s　ディレクトリを開けなかった');
define('_ER_UP_FILESIZETOOLARGE', 'ファイル大きすぎ (最大 %u バイト): %u バイト');
define('_ER_UP_FILEWIDTHTOOLARGE', 'ファイル幅大きすぎ (最大 %u px): %u px');
define('_ER_UP_FILEHEIGHTTOOLARGE', 'ファイル高さ大きすぎ (最大 %u px): %u px');
define('_ER_UP_MIMETYPENOTALLOWED', '許されないMIMEタイプ: %s');
define('_ER_UP_FAILEDUPLOADFILE', 'ファイル　%s　をアプロードされてない');
define('_ER_UP_FAILEDFETCHIMAGESIZE', 'Failed fetching image size of %s, skipping max dimension check..');
define('_ER_UP_UNKNOWNFILETYPEREJECTED', '未知のファイルタイプを拒否');
define('_ER_UP_ERRORSRETURNED', 'ファイル %s　を保存することができませんでした');
define('_ER_UP_INVALIDIMAGEFILE', '無効な画像ファイル');
define('_ER_UP_SUSPICIOUSREFUSED', '不審な画像のアップロードを拒否');
define('_ER_UP_INVALIDFILENAME', '無効なファイル名');
define('_ER_UP_FAILEDSAVEFILE', '%s　にファイルを保存することができませんでした');

?>