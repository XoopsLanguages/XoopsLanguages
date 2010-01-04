<?php
// $Id: finish.php 2768 2009-02-05 02:40:31Z phppp $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .=
"<h3>Din sajt</h3>
<p>Du kan nu gå till <a href='../index.php'>hemsidan på din sajt</a>.</p>
<h3>Support</h3>
<p>Besök <a href='http://xoops.sourceforge.net/' rel='external'>The XOOPS Project</a></p>
";

$content .=
"<h3>Säkerhetskonfigurering</h3>
<p>Installationsprogrammet kommer att försöka konfigurera din sajt med hänsyn till säkerhet. Kontrollera följande:
<div class='confirmMsg'>
Att filen <em>mainfile.php</em> ej är skrivbar (dvs den ska vara readonly).<br />
Ta bort katalogen <em>{$installer_modified}</em> (eller <em>install</em> om den inte blev omdöpt automatiskt av installationsprogrammet) från din server.
</div>
</p>
";

?>