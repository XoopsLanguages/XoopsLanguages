<?php
// $Id: finish.php 3919 2009-11-21 10:25:16Z kris_fr $
// _LANGCODE: it
// _CHARSET : UTF-8
// Translator: Xoops Italia Team - www.xoopsitalia.org
// Last translation update: 08/03/2011

$content .=
"<h3>Intallazione terminata</h3>
<p>&Egrave; ora possibile accedere alla <a href='../index.php'>home page del sito</a>.</p>
<h3>Supporto</h3>
<p><a href='http://xoops.sourceforge.net/' rel='external'>The XOOPS Project</a> (In inglese)</p>
<p><a href='http://www.xoopsitalia.org/' rel='external'>Xoops Italia</a> (Comunit&agrave; italiana ufficiale)</p>
<p><strong>ATTENZIONE:</strong> Allo stato attuale il sito presenta solo le funzionalit&agrave; di base. Se si desidera aggiungere altri componenti: forum, pagine di testo, gallerie di immagini news, ... &egrave; necessario scaricarli dal <a href='http://www.xoops.org/modules/repository' rel='external' title='Archivio moduli Xoops.org'>sito ufficiale Xoops</a> e installarli. Lo stesso vale per i <a href='http://www.xoops.org/modules/extgallery' rel='external' title='Selezione e installazione di nuovi temi'>temi aggiuntivi</a>.</p>
";

$content .=
"<h3>Controlli di sicurezza</h3>
<p>L'installer cercher&agrave; di verificare le impostazioni di sicurezza del vostro sito. Si prega di controllare con attenzione che:
<div class='confirmMsg'>
Il file <em>mainfile.php</em> abbia permessi di sola lettura (chmod 444).<br />
La cartella <em>{$installer_modified}</em> (o <em>install</em> se non &egrave; stato rinominata automaticamente dall'installer) sia stata rimossa dal server.
</div>
</p>
";

?>