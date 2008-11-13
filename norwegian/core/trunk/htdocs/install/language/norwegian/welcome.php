<?php
// $Id: welcome.php,v 1.8 2005/08/08 06:29:16 skalpa Exp $
$content .= '

<p>
	<acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> er et dynamisk OO (Objekt orienteret) basert portal script basert på åpen kildekode og er skrevet i PHP.
XOOPS understøtter flere databaser,
som gjør XOOPS perfekt til utvikling av små og store dynamiske nettsamfunn, hjemmesider,
firma intra portaler, firma portaler, webblogs og mye mer.
</p>
<p>
	XOOPS er utgitt under betingelsene fra
	<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
	og kan fritt benyttes og endres.
XOOPS kan videredistributioners så lenge betingelsene i GPL overholdes.
</p>
<h3>System krav</h3>

<ul>
	<li>WWW server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 eller høyere (5.2 eller høyere anbefales)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 eller høyere (4.1 eller høyere anbefales)</li>
</ul>
<h3>Før du installerer</h3>

<ul>
<li>Innstill WWW server, PHP og database korrekt.</li>
<li>Forbered database til XOOPS hjemmesiden.</li>
<li>Forbered din bruker konto og adgangsrettigheter til databasen.</li>
<li>Gjør mappene uploads/, cache/ og templates_c/ og mainfile.php skrivbare.</li>
<li>Av sikkerhetsmessige årsaker, oppfordres du til å flytte mappene <em>xoops_lib</em> (for XOOPS biblioteker) og <em>xoops_data</em> (for XOOPS data) vekk fra <a href="http://phpsec.org/projects/guide/3.html" rel="external">rot-biblioteket</a>, eller til og med endre mappe navnene.</li>
<li>Gjør mappen <em>xoops_data/</em> skrivbar;
	   Opprett og gjør mappene i <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> og <em>xoops_data/caches/smarty_compile/</em> skrivbare.</li>
<li>Tillat cookie og JavaScript i din browser.</li>
</ul>
';
?>
