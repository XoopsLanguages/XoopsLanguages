<?php
/**
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU public license 3.0 (http://www.fsf.org/copyleft/gpl.html)
 * @package         Install
 * @subpackage      Xoops Protector Language
 * @version         $Id: 2.5.0.a finish.php 21.12.2010
 *
 * @LANGCODE        de
 * @CHARSET         UTF-8
 * Translator       XOOPS German Translation Team http://www.myxoops.org
 *
 */

$content .=
"<h3>Ihre Seite</h3>
<p>Die Installation sollte erfolgreich gewesen sein, wechseln Sie nun auf Ihre <a href='../index.php'>Startseite</a>.</p>
<h3>Hilfe?</h3>
<p>Besuchen Sie den Deutschen Support <a href='http://www.myxoops.org'>myXOOPS.org</a>, die englischsprachigen Seiten
<a href='http://www.xoops.org'>XOOPS.org</a> oder auf Sourceforge <a href='http://xoops.sourceforge.net/'>The XOOPS Project</a>.</p>
<p>Viel Spass mit Ihrer Installation</p>";

$content .=
"<h3>Sicherheitskonfiguration</h3>
<p>Der Installer wird versuchen Ihre Website sicher zu machen. Prüfen Sie folgendes:
<div class='confirmMsg'>
Die Datei <em>mainfile.php</em> muss schreibgeschützt sein.<br />
Entfernen Sie den Ordner <em>{$installer_modified}</em> (oder <em>install</em> wenn dieser nicht automatisch umbenannt wurde) vom Ihrem Server.
</div>
</p>
";

?>