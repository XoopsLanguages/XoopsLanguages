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
<p><strong>BEMÆRK :</strong> Din side indeholder et minimum af funktionalitet, hvis du vil tilføje indhold: tekst, billeder, forum, link eller lign, skal du først downloade fra <a href='http://www.xoops.org/modules/repository' rel='external' title='Vælg og downloads moduler'> XOOPS siden</a> og installerer disse moduler. Det samme gælder for <a href='http://www.xoops.org/modules/extgallery' rel='external' title='Vælg og installer themes'>layout (themes)</a>. Du er altid velkommen på <a href='http://www.xoopsnordic.org rel='external' title='XOOPSNordic'>hvor du kan få hjælp </a> til opsætning og valg af modulerer.</p>
";

$content .=
"<h3>Sikkerheds konfiguration</h3>
<p>Installationsprogrammet vil forsøge at konfigurere din side for sikkerhedsissues. Kontroller venligst at:
<div class='confirmMsg'>
<em>mainfile.php</em> ikke er skrivbar.<br />
Fjern mappen <em>{$installer_modified}</em> (eller <em>install</em> hvis den ikke automatisk blev omdøbt under installering) fra din server.
</div>
</p>
";
?>
