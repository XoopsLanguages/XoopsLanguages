<?php
// $Id: welcome.php 2717 2009-02-08 12:56 dhcst $
// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= '
<p>
    <acronym title="eXtensible Object-Oriented Portal System">XOOPS</acronym> ist ein 
    dynamisches OO (Objekt Orientiertes) Open Source Portalskript geschrieben in PHP. 
    XOOPS ist somit ein ideales CMS für den Aufbau von kleineren und größeren Communities.
</p>
<p>
    XOOPS ist freigegeben unter den Bedingungen der 
    <a href="http://www.gnu.org/copyleft/gpl.html">GNU General Public License (GPL)</a> 
    und ist frei zu verwenden und zu ändern. Es ist frei, so lange Änderungen, 
    wie Sie durch die Bestimungen der GPL genannt sind, erhalten bleiben.
</p>
<h3>Anforderungen</h3>
<ul>
	<li>WWW Server (<a href="http://www.apache.org/" rel="external">Apache</a>, IIS, Roxen, etc)</li>
	<li><a href="http://www.php.net/" rel="external">PHP</a> 4.3.0 or higher (5.2 oder höher empfohlen)</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 3.23 or higher (4.1 oder höher empfohlen)</li>
</ul>
<h3>Vorbereitungen</h3>
<ol>
    <li>Setup des HTTP-Servers, PHP und der Datenbankrechte.</li>
    <li>Erstellen Sie eine Datenbank für Ihre XOOPS-Seite.</li>
    <li>Bereiten Sie ein Userkonto vor und vergeben Sie dem User die Rechte zur Datenbank.</li>
    <li>Die folgenden Verzeichnisse und Dateien müssen beschreibbar sein: %s</li>
    <li>Sollten Sie das Modul <em>protector</em> installieren, <div class="confirmMsg">ersetzen Sie die Datei <em>mainfile.dist.php</em> in Ihrem XOOPS Root Verzeichnis mit der <em>mainfile.dist.php.protector</em>.</div></li>
    <li>Für mehr Sicherheit sollten die folgenden Verzeichnisse ausserhalb des <a href="http://phpsec.org/projects/guide/3.html" rel="external">Document root</a> sein und umbenannt werden: %s</li>
    <li>Erstellen Sie folgende verzeichnisse und machen diese beschreibbar: %s</li>
    <li>Schalten Sie Cookies und JavaScript in Ihrem Browser ein.</li>
</ol>
';
?>