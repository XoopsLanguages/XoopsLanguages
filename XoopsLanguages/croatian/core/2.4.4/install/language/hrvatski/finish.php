<?php
// $Id: finish.php 3919 2009-11-21 10:25:16Z kris_fr $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 6.4.2010.

$content .=
"<h3>Vaše stranice</h3>
<p>Možete sad pristupiti na <a href='../index.php'>početnu web stranicu</a>.</p>
<h3>Podrška</h3>
<p>Posjetite <a href='http://xoops.sourceforge.net/' rel='external'>XOOPS projekt</a></p>
<p><strong>NAPOMENA :</strong> Vaše web stranice trenutno sadrže minimalnu funkcionalnost, ako želite dodati sadržaj: stranice teksta, foto galeriju, forum, popis linkova, ... Prvo morate skinuti sa <a href='http://www.xoops.org/modules/repository' rel='external' title='Izaberite i skinite module'>popisa vaše lokalne podrške</a> i instalirate ove komponente, isto je za <a href='http://www.xoops.org/modules/extgallery' rel='external' title='Izaberite i instalirajte nove teme'>dodatni dizajn (teme)</a>.</p>
";

$content .=
"<h3>Sigurnosne postavke</h3>
<p>Instaler će pokušati podesiti vaše stranice iz sigurnosnig razloga. Molimo dva puta provjerite da budete sigurni:
<div class='confirmMsg'>
Iz <em>mainfile.php</em> je moguće samo čitati.<br />
Obrišite mapu <em>{$installer_modified}</em> (ili <em>install</em> ako nije automatski preimenovan od strane instalacije)  sa vašeg poslužitelja.
</div>
</p>
";

?>