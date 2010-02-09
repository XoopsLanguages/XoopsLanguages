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
* Xoops Language
*
* @copyright The XOOPS Project http://sourceforge.net/projects/xoops/
* @license http://www.fsf.org/copyleft/gpl.html GNU public license
* @package kernel
* @subpackage Xoops Banners Language
* @since 2.0.0
* @author Kazumi Ono <onokazu@xoops.org>
* @version $Id: banners.php 4052 2009-12-26 18:44:37Z trabis $
*/
defined('XOOPS_ROOT_PATH') or die('制限されたアクセス');
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_BANNERS_MANAGEMENT', 'バナーマネジャー');
define('_BANNERS_WELCOMEBACK', 'ようこそ: %s');
define('_BANNERS_LOGGEDOUT', 'バナーマネジャーからログアウトした');
define('_BANNERS_LOGOUT', 'バナーマネジャーからログアウト');
define('_BANNERS_LOGIN_TITLE', 'バナー統計');
define('_BANNERS_LOGIN_LOGIN', 'ログイン :');
define('_BANNERS_LOGIN_INCORRECT', 'ユーザー名かパスワードが正しくない');
define('_BANNERS_LOGIN_PASS', 'パスワード :');
define('_BANNERS_LOGIN_INFO', 'クライアント情報をエンターして下さい');
define('_BANNERS_LOGIN_OK', 'OK');
define('_BANNERS_ID', 'バナーID:');
define('_BANNERS_TITLE', 'アクティブなバナー');
define('_BANNERS_URL', 'URLを変更:');
define('_BANNERS_NOTHINGFOUND', 'レコードを見つからない');
define('_BANNERS_NO', '#');
define('_BANNERS_FOW_IN', 'アクティブなバナーを現せる: ');
define('_BANNERS_IMP_MADE', 'インプレッション数');
define('_BANNERS_IMP_TOTAL', '全てのインプレッション数');
define('_BANNERS_IMP_LEFT', '残りインプレッション数');
define('_BANNERS_CLICKS', 'クリック');
define('_BANNERS_PER_CLICKS', '% クリック');
define('_BANNERS_FUNCTIONS', '機能');
define('_BANNERS_STATS', 'メール統計');
define('_BANNERS_SHOWBANNER', 'バナーを現せる');
define('_BANNERS_SEND_STATS', 'Send <a href=\'%s\' title=\'E-mail Stats\'/>E-mail Stats</a> for this Banner');
define('_BANNERS_POINTS', 'このバナーは <a href=\'%s\' title=\'\'>このURLに指します。</a>');
define('_BANNERS_UNLIMITED', '無制限の');
define('_BANNERS_FINISHED', '終わったバナー');
define('_BANNERS_STARTED', '開始日');
define('_BANNERS_ENDED', '終了日');
define('_BANNERS_MAIL_SUBJECT', 'あなたのバナー統計 %s');
define('_BANNERS_MAIL_MESSAGE', '選択したバナーの利用できる統計 %s :\n\n\n
クライアント名: %s\nバナーID: %s\n
バナー画像: %s\n
バナーURL: %s\n\n
購入済インプレッション数: %s\n
インプレッション数: %s\n
残てるインプレッション: %s\n
クリック数: %s\n
クリック％: %f \n\n\n
報告書　%s　に生成さ');
define('_BANNERS_MAIL_NOT_OK', 'メール送信エラーを発生した。 ウェブマスターに連絡してください。');
define('_BANNERS_MAIL_OK', '選択されたバナーの利用可能な広告の統計情報があなたのメールアドレスに送信された');
define('_BANNERS_MAIL_ERROR', 'クライアント %s に関連付けられて電子メールがない。<br />管理者に連絡してください');
define('_BANNERS_DBUPDATED', '項目を変更し、データベースの更新');
define('_BANNERS_DBERROR', 'データベースエラーのために更新されませんでした!');
define('_BANNERS_CHANGE', '変わる');

define('_BANNERS_NO_LOGIN_DATA', 'ログインデータが検出されなかった');
define('_BANNERS_NO_REFERER', 'リファラが検出されない');
define('_BANNERS_NO_ID', '有効なIDが検出されなかった');
?>