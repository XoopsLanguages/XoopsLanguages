<?php
// $Id: welcome.php 12528 2014-05-12 14:20:13Z rgriffith $
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= '
<p>
    <abbr title="eXtensible Objekt-Orienteret Portal System">XOOPS</abbr> er et open source
    Objekt-Orienteret Web publiserings system skrevet i PHP. Det er et idealt værktøj for
    udvikling af små til store dynamiske samfund hjemmesider, intra selskabs portaler, virksomhedernes hjemmesider, weblogs og meget mere.
</p>
<p>
    XOOPS er udgivet under betingelserne i 
    <a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
    og kan gratis anvendes og ændres.
    og må vidre distributioneres sålænge betingelserne i GPL overholdes.
</p>
<h3>System krav</h3>
<ul>
    <li>Http server (<a href="http://www.apache.org/" target="_blank">Apache</a>, IIS, Roxen, etc)</li>
    <li><a href="http://www.php.net/" rel="external">PHP</a> 5.3.7 eller højere </li>
    <li><a href="http://www.mysql.com/" rel="external">MySQL</a> 5.1 eller højere </li>
</ul>
<h3>Før du installerer.</h3>
<ol>
    <li>Indstil http server, PHP og database korrekt.</li>
    <li>Forbered database til XOOPS sitet.</li>
    <li>Forbered din bruger konto og adgangsrettigheder til databasen.</li>
    <li>Gør følgende mapper og filer skrivbare: %s</li>
    <li>Af sikkerhedsmæssige årsager, anbefales det at flytte følgende to mapper ud af <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a>, og ændre mappenavnene. %s</li>
    <li>Opret (hvis de ikke findes) og g&oslash;r f&oslash;lgende mapper skrivbare: %s</li>
    <li>Tillad  cookie og JavaScript i din browser.</li>
</ol>
';