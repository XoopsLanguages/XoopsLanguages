<?php
// $Id: welcome.php 3558 2009-09-03 01:55:38Z trabis $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 6.4.2010.

$content .= '
<p>
	<acronym title="eXtensible Object-Oriented Portal Sustav">XOOPS</acronym> je open-source
	Objektno orjentirano WEB sustav za objavljivanje pisano u PHP-u. To je idealan alat za
	izradu malih do velikih dinamičkih web stranica, intranet portala u firmama, korporacijskih portala, weblog-ova i još više.
</p>
<p>
	XOOPS je objavljen pod uvjetima
	<a href="http://www.gnu.org/copyleft/gpl.html" rel="external">GNU Opće javne licence (General Public License - GPL)</a>
	i slobodan je za korištenje i mijenjanje.
	Slobodno ga možete prosljediti dalje dok god navedete distribucijske uvjete GPL.
</p>
<h3>Zahtjevi</h3>
<ul>
	<li>WWW poslužitelj (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 ili više (5.2 ili više preporučeno)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 ili više (4.1 ili više preporučeno)</li>
</ul>
<h3>Prije nego instalirate</h3>
<ol>
    <li>Podesite ispravno WWW poslužitelj, PHP i bazu podataka.</li>
    <li>Pripremite bazu podataka za vaše XOOPS stranice.</li>
    <li>Pripremite korisnički račun i dodajte mu prava za pristup bazi podataka.</li>
    <li>Postavite prava za pisanje na mapama i datotekama: %s</li>
    <li>Iz razloga sigurnosti, predlažemo vam da prebacite dvije mape izvan <a href="http://phpsec.org/projects/guide/3.html" rel="external">početne mape</a> i promjenite imena mapa: %s</li>
    <li>Stvorite (ako već ne postoje) i omogućite zapisivanje na mapama: %s</li>
    <li>Uključite kolačiće i JavaScript na vašem pregledniku.</li>
</ol>
';
?>