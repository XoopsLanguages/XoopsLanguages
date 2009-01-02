<?php
// $Id: welcome.php 1784 2008-05-26 05:15:28Z phppp $
// $Id: welcome.php german V2.3 08. Juli 2008
// Code. UTF-8 by Muki

$content .= '
<h3>Was ist XOOPS?</h3>
<p>
<b>XOOPS</b> ist ein dynamisches OO (Objekt Orientiertes) Open Source Portalskript geschrieben in PHP. Unterstützt wird es mit einer Anzahl von Datenbanken (aktuell nur mySQL), XOOPS ist somit ein ideales CMS für den Aufbau von kleineren und größeren Communities
</p>
<p>
XOOPS ist freigegeben unter den Bedingungen der <a href="http://www.gnu.org/copyleft/gpl.html">GNU General Public License (GPL)</a> und ist frei zu verwenden und zu ändern.
Es ist frei, so lange Änderungen, wie Sie durch die Bestimungen der GPL genannt sind, erhalten bleiben.
</p>

<h3>Anforderungen</h3>
<ul>
	<li>WWW Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 or higher (5.2 oder höher empfohlen)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 or higher (4.1 oder höher empfohlen)</li>
</ul>
<h3>Vorbereitungen</h3>
<ul>
<li>Setup des HTTP-Servers, PHP und der Datenbankrechte.</li>
<li>Erstellen Sie eine Datenbank für Ihre XOOPS-Seite.</li>
<li>Bereiten Sie ein Userkonto vor und vergeben Sie dem User die Rechte zur Datenbank.</li>
<li>Das Verzeichnis uploads/ sowie die Datei mainfile.php müssen beschreibbar sein.</li>
<li>Aus Sicherheitsgründen wird empfohlen, die Verzeichnisse <em>xoops_lib</em> und <em>xoops_data</em> ausserhalb des <a href="http://phpsec.org/projects/guide/3.html" rel="external">document root</a> zu platzieren, oder aber zumindest die OrdnerNamen zu ändern.</li>
<li>Die Verzeichnisse <em>xoops_data/</em>, <em>xoops_data/configs/</em>, <em>xoops_data/caches/</em>, <em>xoops_data/caches/xoops_cache/</em>, <em>xoops_data/caches/smarty_cache/</em> und <em>xoops_data/caches/smarty_compile/</em> müssen beschreibbar sein.</li>
<li>Schalten Sie Cookies und JavaScript in Ihrem Browser ein.</li>
</ul>
';
?>