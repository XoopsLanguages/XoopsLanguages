<?php
// $Id: welcome.php 3558 2009-09-03 01:55:38Z trabis $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= '
<p>
    <acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> är ett 
	objektorienterat webbpubliceringssystem som har öppen källkod och är skrivet i PHP. Det är
	ett perfekt verktyg för att utveckla små och stora dynamiska webbsajter för grupper,
	intranätsportaler för företag, företagsportaler, webbloggar och mycket mer.
</p>
<p>
    XOOPS är släppt i enlighet med villkoren i
    <a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU General Public License (GPL)</a>
    och är gratis att använda och modifiera.
	Det är också gratis att sprida vidare så länge som du håller dig till det som stipuleras i GPL.
</p>
<h3>Krav</h3>
<ul>
    <li>Webbserver (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
    <li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 eller nyare (5.2 eller nyare rekommenderas)</li>
    <li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 eller nyare (4.1 eller nyare rekommenderas)</li>
</ul>
<h3>Innan du installerar</h3>
<ol>
    <li>Installera och konfigurera webbserver, PHP och databasserver.</li>
    <li>Förbered en databas för din XOOPS-sajt.</li>
    <li>Förbered ett användarkonto och ge det tillgång till databasen.</li>
    <li>Gör följande kataloger och filer skrivbara: %s</li>
    <li>Av säkerhetsskäl rekommenderas du att flytta ut följande kataloger från <a href="http://phpsec.org/projects/guide/3.html" rel="external">dokumentroten</a> och ändra katalognamnen: %s</li>
    <li>Skapa (om de inte redan finns) följande kataloger och gör dem skrivbara: %s</li>
    <li>Sätt på cookies och JavaScript på din webbläsare.</li>
</ol>
';
?>