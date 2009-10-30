<?php
// $Id: finish.php 2768 2009-02-05 02:40:31Z phppp $
// _LANGCODE: hr
// _CHARSET : UTF-8
// Translator: XoopsHR.org / Ivan Kosak / 23.8.2009.

$content .=
"<h3>Vaše stranice</h3>
<p>Možete sad pristupiti na <a href='../index.php'>početnu web stranicu</a>.</p>
<h3>Podrška</h3>
<p>Posjetite <a href='http://xoops.sourceforge.net/' rel='external'>XOOPS projekt</a></p>
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