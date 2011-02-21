<?php
// $Id: welcome.php 5529 2010-10-18 02:16:05Z beckmi $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 21.1.2011.

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
	<li><a href="http://www.php.net/" rel="external">PHP</a> 5.2 ili više </li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 5.1 ili više </li>
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