<?php
// $Id: finish.php 2768 2009-02-08 12:40 dhcst $
// _LANGCODE: de
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

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