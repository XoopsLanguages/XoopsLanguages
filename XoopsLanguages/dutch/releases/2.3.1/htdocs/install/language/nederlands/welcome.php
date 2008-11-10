<?php
// $Id: welcome.php 2089 2008-09-15 05:06:49Z phppp $
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> is an open-source
	Object-Oriented Web publishing system written in PHP. It is an ideal tool for
	developing small to large dynamic community websites, intra company portals, corporate portals, weblogs and much more.
</p>
<p>
	XOOPS is released under the terms of the
	<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
	and is free to use and modify.
	It is free to redistribute as long as you abide by the distribution terms of the GPL.
</p>
<h3>Requirements</h3>
<ul>
	<li>WWW Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 or higher (5.2 or higher recommended)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 or higher (4.1 or higher recommended)</li>
</ul>
<h3>Before you install</h3>
<ul>
	<li>Setup WWW server, PHP and database server properly.</li>
	<li>Prepare a database for your XOOPS site.</li>
	<li>Prepare user account and grant the user the access to the database.</li>
	<li>Make the directories of uploads/, cache/ and templates_c/ and the files of mainfile.php writable.</li>
	<li>If you need to install protector module from GIJOE, replace the file <em>mainfile.dist.php</em> with <em>/extras/mainfile.dist.php.protector</em> (remember to rename the file to <em>htdocs/mainfile.dist.php</em>).</li>
	<li>For security considerations, you are encouraged to move directories <em>xoops_lib</em> (for XOOPS libraries) and <em>xoops_data</em> (for XOOPS data) out of <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, or even change the folder names.</li>
	<li>Make the directory of <em>xoops_data/</em> writable;
	    Create and make the directories of <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> and <em>xoops_data/caches/smarty_compile/</em> writable.</li>
	<li>Turn cookie and JavaScript of your browser on.</li>
</ul>
';
?>