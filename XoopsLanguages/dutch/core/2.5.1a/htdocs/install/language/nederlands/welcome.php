<?php
// $Id: welcome.php 3558 2009-09-03 01:55:38Z trabis $
// _LANGCODE: nl
// _CHARSET : UTF-8

/**
 * EN: Translated by the (Unofficial) Dutch XOOPS translation team
 * Please report all translation errors here: http://www.xoops.nl/ (Dutch)
 **
 * NL: Vertaald door het (Onofficieele) Nederlandse XOOPS vertaal team
 * (Ver)taalfouten AUB hier melden: http://www.xoops.nl
 **/

$content .= '
<p>
    <acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> is een geavanceerd web content management systeem waarmee u een dynamische en interactieve websites kunt maken en beheren. Met <acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> kunt u snel en gemakkelijk interactieve club-websites, bedrijfsintranetsites, webwinkels of persoonlijke weblogs maken.
</p>
<p>
XOOPS is vrije open source software, wat inhoudt dat u mag doen wat u wilt met XOOPS. Zo kunt u de XOOPS-code aanpassen aan uw eigen wensen en eisen, uitbreiden met nieuwe functionaliteiten en aan iedereen beschikbaar stellen. De enige wezenlijke beperking is dat u anderen hetzelfde recht geeft, ook op uw aanpassingen en aanvullingen. De volledige voorwaarden zijn te vinden in de licentie waaronder XOOPS is vrijgegeven, de <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank" title="Link naar de GNU General Public License (GPL) tekst">GNU General Public License (GPL)</a>.  Op de <a href="http://www.xoops.nl" target="_blank" title="Link naar de Nederlandstalige XOOPS website, www.xoops.nl">Nederlandstalige XOOPS website</a> en <a href="http://www.xoops.org" target="_blank" title="Link naar de internationale XOOPS website, www.xoops.org">Internationale XOOPS website</a> kunt u de nieuwste XOOPS-versie gratis downloaden.
</p>
<h3>Systeemvereisten</h3>
<ul>
    <li>Webserver (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, enz)</li>
    <li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 of hoger (5.2 of hoger aanbevolen)</li>
    <li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 of hoger (4.1 of hoger aanbevolen)</li>
</ul>
  <h3>Voor de installatie</h3>
<ol>
    <li>Zorg voor een web-server met PHP en een (MySQL) database server.</li>
    <li>Maak een nieuwe database aan voor de XOOPS website.</li>
    <li>Maak een gebruikers-account voor deze database en geef deze gebruiker lees/schrijfrechten voor de zojuist gemaakte database.</li>
    <li>Zorg ervoor dat de volgende mappen en bestanden beschrijfbaar zijn: %s</li>
    <li>Om veiligheidsredenen is het sterk aan te raden de volgende twee mappen buiten de <a href="http://phpsec.org/projects/guide/3.html" target="_blank">hoofdmap</a> te plaatsen en deze mappen een andere naam te geven: %s</li>
    <li>Maak (indien niet al aanwezig) de volgende mappen beschrijfbaar: %s</li>
    <li>Zorg er voor dat cookie en JavaScript ondersteuning in uw browser is ingeschakeld.</li>
</ol>
';
?>