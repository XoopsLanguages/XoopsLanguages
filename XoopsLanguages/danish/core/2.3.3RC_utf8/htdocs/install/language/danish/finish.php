<?php
// $Id$
// _LANGCODE: da
// _CHARSET : UTF-8
// Translator: Anders Kristiansen (anderssk) www.xoopsnordic.org

$content .=
"<h3>Din Side</h3>
<p>Klik <a href='../index.php'>HER</a> for at se din side.</p>
<h3>Support</h3>
<p>Besøg <a href='http://xoops.sourceforge.net/' rel='external'>for mere information om XOOPS</a></p>
";

$content .=
"<h3>Sikkerheds konfiguration</h3>
<p>Installationsprogrammet vil forsøge at konfigurere din side for sikkerhedsissues. Kontroller venligst at:
<div class='confirmMsg'>
<em>mainfile.php</em> ikke er skrivbar.<br />
Fjern mappen <em>{$installer_modified}</em> (eller <em>install</em> hvis den ikke automatisk blev omdøbt under installering)fra din server.
</div>
</p>
";
?>
