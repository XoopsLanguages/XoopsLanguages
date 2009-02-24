<?php
// $Id: welcome.php 2089 2008-09-15 05:06:49Z phppp $
// prijevod na hrvatski: Ivan Kosak (www.xoopshr.org) 14.2.2009
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
	<li>WWW Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 ili više (5.2 ili više preporučeno)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 ili više (4.1 ili više preporučeno)</li>
</ul>
<h3>Prije nego instalirate</h3>
<ul>
	<li>Podesite ispravno WWW poslužitelj, PHP i bazu podataka.</li>
	<li>Pripremite bazu podataka za vaše XOOPS stranice.</li>
	<li>Pripremite korisnički račun i dodajte mu prava za pristup bazi podataka.</li>
	<li>Postavite prava za pisanje na mapama uploads/, cache/ i templates_c/ i datoteci mainfile.php.</li>
	<li>Ako trebate instalirati protector modul od GIJOE, zamjenite datoteku <em>mainfile.dist.php</em> sa <em>/extras/mainfile.dist.php.protector</em> (ne zaboravite preimenovati datoteku u <em>htdocs/mainfile.dist.php</em>).</li>
	<li>Iz razloga sigurnosti, predlažemo vam da prebacite mape <em>xoops_lib</em> (za XOOPS biblioteke) i <em>xoops_data</em> (za XOOPS podatke) iz <a href="http://phpsec.org/projects/guide/3.html" rel="external">početne mape</a>, ili čak promjeniti ime mape.</li>
	<li>Omogućite zapisivanje na <em>xoops_data/</em> mapi;
	    Stvorite i omogućite zapisivanje na <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> i <em>xoops_data/caches/smarty_compile/</em> mapama.</li>
	<li>Uključite kolačiće i JavaScript na vašem pregledniku.</li>
</ul>
';
?>