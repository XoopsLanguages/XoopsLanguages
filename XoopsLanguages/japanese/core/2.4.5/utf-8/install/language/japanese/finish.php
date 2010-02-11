<?php
// $Id: finish.php $
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .=
"<h3>Your site</h3>
<p>あなたは今 <a href='../index.php'>サイトのホームページ</a> を参照できます</p>
<h3>サポート</h3>
<p><a href='http://xoops.sourceforge.net/' rel='external'>XOOPS Project</a> / <a href='http://xoops.me/' rel='external'>xoops.me</a> / <a href='http://tohoku.xoops.jp/' rel='external'>東北ＸＯＯＰＳ</a></p>
<p><strong>注意 :</strong> 現在サイトの中身は最小限の状態になっています。もしあなたがコンテンツ（テキストページ・画像・掲示板・リンク集など）を構築したい場合は <a href='http://www.xoops.org/modules/repository' rel='external' title='Choice and download modules'>library of your local support</a> からモジュールを入手し、インストールする事で解決できます。同様に <a href='http://www.xoops.org/modules/extgallery' rel='external' title='Select and Install new themes'>design (theme) Additional</a> も入手・インストール可能です。日本語対応を要する場合は <a href='http://xoops.me/'  rel='external'>xoops.me</a> または <a href='http://tohoku.xoops.jp/' rel='external'>東北ＸＯＯＰＳ</a> で解決できるでしょう。</p>
";

$content .=
"<h3>セキュリティ設定</h3>
<p>このサイトのセキュリティ問題を対処するため、下の操作・チェックを行ってください
<div class='confirmMsg'>
<em>mainfile.php</em> を 読み込み専用 へ変更して下さい。<br />
また フォルダ <em>{$installer_modified}</em> をサーバから削除してください
(セキュリティの考慮によりインストーラーは <em>install</em> を別の名前に変更しています)
</div>
</p>
";

?>
