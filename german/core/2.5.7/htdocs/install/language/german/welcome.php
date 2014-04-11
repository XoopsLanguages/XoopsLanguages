<?php
/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
 * @package         Install
 * @subpackage      Xoops Protector Language
 * @version         $Id: 2.5.0.a welcome.php 21.12.2010
 *
 * @LANGCODE        de
 * @CHARSET         UTF-8
 * Translator       XOOPS German Translation Team http://www.myxoops.org
 *
 */

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
	<li><a href="http://www.php.net/" rel="external">PHP</a> 5.2 oder höher</li>
	<li><a href="http://www.mysql.com/" rel="external">MySQL</a> 5.1 oder höher</li>
</ul>
<h3>Vorbereitungen</h3>
<ol>
    <li>Setup des HTTP-Servers, PHP und der Datenbankrechte.</li>
    <li>Erstellen Sie eine Datenbank für Ihre XOOPS-Seite.</li>
    <li>Bereiten Sie ein Userkonto vor und vergeben Sie dem User die Rechte zur Datenbank.</li>
    <li>Die folgenden Verzeichnisse und Dateien müssen beschreibbar sein: %s</li>
    <li>Für mehr Sicherheit sollten die folgenden Verzeichnisse ausserhalb des <a href="http://phpsec.org/projects/guide/3.html" rel="external">Document root</a> sein und umbenannt werden: %s</li>
    <li>Erstellen Sie folgende Verzeichnisse und machen diese beschreibbar: %s</li>
    <li>Schalten Sie Cookies und JavaScript in Ihrem Browser ein.</li>
</ol>
';
?>