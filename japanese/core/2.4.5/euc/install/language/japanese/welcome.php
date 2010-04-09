<?php
// $Id: welcome.php $
// _LANGCODE: ja
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= '
<p>
    <acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> は、
    オブジェクト指向ベースで作成された、PHP によるオープンソースのポータルサイト作成ソフトです。
    規模の大小を問わず、ダイナミックなコミュニティサイトや、イントラネット用のポータルサイト、企業のポータルサイト、ウェブログ、そういったものの作成に最適です。
</p>
<p>
    XOOPSは、
    <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU 一般公衆利用許諾契約書(GPL)</a>（参考：<a href="http://www.opensource.jp/gpl/gpl.ja.html" target="_blank">日本語訳</a>）
    というライセンスでリリースされており、自由に使用し、また改変できます。
    再配布もGPLの条項にしたがっていれば、自由に行うことができます。
</p>
<h3>必要なソフトウエア</h3>
<ul>
    <li>WWWサーバ (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS など)</li>
    <li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 以降 (5.2 以降 推奨)</li>
    <li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 以降 (4.1 以降 推奨)</li>
</ul>
<h3>準備</h3>
<ol>
    <li>WWWサーバ、PHP、データベースサーバを適切にセットアップする。</li>
    <li>XOOPS 用にデータベースを１つ準備する。</li>
    <li>上記のデータベースにアクセスできる、データベースサーバのユーザアカウントを準備する。</li>
    <li>下のフォルダ・ファイルを書き込み可能にする: %s</li>
    <li>セキュリティの観点から <a href="http://phpsec.org/projects/guide/3.html" rel="external">DocumentRoot</a> 下から２つのフォルダをその外に移動し、フォルダ名を変更することを強く推奨します。: %s</li>
    <li>以下のフォルダを作成し(まだないのなら) 書き込み可能にする: %s</li>
    <li>ブラウザの クッキー と JavaScript をオンにする。</li>
</ol>
';
?>
