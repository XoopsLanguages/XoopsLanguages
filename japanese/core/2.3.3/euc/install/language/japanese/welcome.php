<?php
// $Id: welcome.php 2008-07-29 05:58+09:00 2 8 6 $
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> は、オブジェクト指向ベースで作成された、PHPによるオープンソースのポータルサイト作成ソフトです。
	XOOPSは様々なデータベースサーバで動作します。
規模の大小を問わず、ダイナミックなコミュニティーサイトや、イントラネット用のポータルサイト、企業のポータルサイト、ウェブログ、そういったものの作成に最適です。
</p>
<p>
	XOOPSは、<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU 一般公衆利用許諾契約書(GPL)</a>（参考：<a href="http://www.opensource.jp/gpl/gpl.ja.html" target="_blank">日本語訳</a>）というライセンスでリリースされており、自由に使用し、また改変できます。再配布もGPLの条項にしたがっていれば、自由に行うことができます。
</p>
<h3>必要なソフトウエア</h3>
<ul>
	<li>ウェブサーバ (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, など)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 以降 ( 5.2 以降 推奨)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 以降 (4.1 以降 推奨)</li>
</ul>
<h3>準備</h3>
<ul>
	<li>ウェブサーバ、PHP、データベースサーバを適切にセットアップする。</li>
	<li>XOOPS用にデータベースを１つ準備する。</li>
	<li>上記のデータベースにアクセスできる、データベースサーバのユーザアカウントを準備する。</li>
	<li>uploads/、cache/およびtemplates_c/ディレクトリと、mainfile.phpファイルをPHPから書込み可能にする。</li>
	<li>For security considerations, you are encouraged to move directories <em>xoops_lib</em> (for XOOPS libraries) and <em>xoops_data</em> (for XOOPS data) out of <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, or even change the folder names.</li>
	<li>Make the directory of <em>xoops_data/</em> writable;
	    Create and make the directories of <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> and <em>xoops_data/caches/smarty_compile/</em> writable.</li>
	<li>ブラウザのクッキーとJavaScriptをオンにする。</li>
</ul>
';
?>