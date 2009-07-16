<?php
// $Id$
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Anders Kristiansen (anderssk) www.xoopsnordic.org

$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> er en open-source 
	Objektorienteret Webudgivelse system skrevet i PHP. Det er et ideelt redskab til 
	udvikle sm&aring; til store dynamiske samfund hjemmesider, inden selskabet portaler, virksomhedernes hjemmesider, weblogs og meget mere.
</p>
<p>
	XOOPS er udgivet under betingelserne i den 
	<a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License (GPL)</a> og kan frit benyttes og &aelig;ndres.
	og m&aring; vidre distributioners s&aring; l&aelig;nge betingelserne i GPL overholdes.

</p>
<h3>System krav</h3>
<ul>
	<li>Http server (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" target="_blank">PHP</a> 4.3.0 eller nyere (5.2 eller h&oslash;jere anbefales)</li>
	<li><a href="http://www.mysql.com/" target="_blank">MySQL</a> Database 3.23 eller nyere (4.1 eller h&oslash;jere anbefales)</li>
</ul>
<h3>F&oslash;r du installerer</h3>
<ol>
<li>Indstil http server, PHP og database korrekt.</li>
<li>Forbered database til XOOPS sitet.</li>
<li>Forbered din bruger konto og adgangsrettigheder til databasen.</li>
<li>G&oslash;r f&oslash;lgende mapper og filer skrivbare: %s</li>
<li>Hvis du &oslash;nsker at installerer <em>protector</em> modulet, <div class="confirmMsg">Erstat s&aring; filen <em>mainfile.dist.php</em> med den du finder i XOOPS mappen <em>/extras/mainfile.dist.php.protector</em>.</div></li>   
<li>Af sikkerhedsm&aelig;ssige &aring;rsager, anbefales det at flytte mapperne <em>xoops_lib</em> (til XOOPS libraries) og <em>xoops_data</em> (til XOOPS data) ud af <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, og/eller &aelig;ndre folder-navnene.</li>
<li>Opret og g&oslash;r f&oslash;lgende mapper skrivbare: %s</li>
<li>Tillad  cookie og JavaScript i din browser.</li>
</ol>
';
?>