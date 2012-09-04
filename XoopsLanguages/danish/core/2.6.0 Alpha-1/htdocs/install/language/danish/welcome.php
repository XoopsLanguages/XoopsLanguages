<?php
// $Id$
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Michael Albertsen (culex) www.xoopsnordic.org

$content = '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> er et open-source 
	Objektorienteret Webudgivelse system skrevet i PHP. Det er et ideelt redskab til 
	udvikling af sm&aring; til store dynamiske samfund hjemmesider, inden selskabet portaler, virksomhedernes hjemmesider, weblogs og meget mere.
</p>
<p>
	XOOPS er udgivet under betingelserne i den 
	<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License (GPL)</a> og kan frit benyttes og ændres.
	og må vidre distributioners så længe betingelserne i GPL overholdes.

</p>
<h3>System krav</h3>
<ul>
	<li>Http server (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" target="_blank">PHP</a> 5.0.0 eller nyere (5.2 eller højere anbefales)</li>
	<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> Database 3.23 eller nyere (4.1 eller højere anbefales)</li>
</ul>
<h3>Før du installerer</h3>
<ol>
<li>Indstil http server, PHP og database korrekt.</li>
<li>Forbered database til XOOPS sitet.</li>
<li>Forbered din bruger konto og adgangsrettigheder til databasen.</li>
<li>Gør følgende mapper og filer skrivbare: %s</li>
<li>Af sikkerhedsmæssige årsager, anbefales det at flytte følgende to mapper ud af <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, og ændre foldernavnene. %s</li>
<li>Opret (hvis de ikke findes) og gør følgende mapper skrivbare: %s</li>
<li>Tillad  cookie og JavaScript i din browser.</li>
</ol>
';

Xoops::getInstance()->registry->set('content', $content);