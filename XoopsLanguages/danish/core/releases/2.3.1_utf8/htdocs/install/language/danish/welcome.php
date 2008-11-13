<?php
// $Id: welcome.php,v 1.8 2005/08/08 06:29:16 skalpa Exp $
$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> er en open-source 
	Objektorienteret Webudgivelse system skrevet i PHP. Det er et ideelt redskab til 
	udvikle små til store dynamiske samfund hjemmesider, inden selskabet portaler, virksomhedernes hjemmesider, weblogs og meget mere.
</p>
<p>
	XOOPS er udgivet under betingelserne i den 
	<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License (GPL)</a> og kan frit benyttes og ændres.
	og må vidre distributioners så længe betingelserne i GPL overholdes.
</p>
<u><b>System krav</b></u>
<p>
<ul>
	<li>Http server (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" target="_blank">PHP</a> 4.3.0 eller nyere (5.2 eller højere anbefales)</li>
	<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> Database 3.23 eller nyere (4.1 eller højere anbefales)</li>
</ul>
</p>
<h3>Før du installerer</h3>
<ul>
<li>Indstil http server, PHP og database korrekt.</li>
<li>Forbered database til xoops sitet.</li>
<li>Forbered din bruger konto og adgangsrettigheder til databasen.</li>
<li>Opret biblioteker uploads/, cache/ og templates_c/ og sørg for der kan skrive til mainfile.php.</li>
<li>Af sikkerhedsmæssige årsager, anbefales det at flytte mapperne <em>xoops_lib</em> (for XOOPS libraries) og <em>xoops_data</em> (for XOOPS data) ud af <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, og/eller ændre folder-navnene.</li>
<li>Gør mappen <em>xoops_data/</em> skrivbar;
	Opret og gør mapperne i <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> og <em>xoops_data/caches/smarty_compile/</em> skrivbare.</li>
<li>Tillad  cookie og JavaScript i din browser.</li>
</ul>
';
?>