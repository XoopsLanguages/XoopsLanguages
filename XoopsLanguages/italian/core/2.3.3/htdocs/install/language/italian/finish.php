<?php
// $Id: finish.php 2055 2008-09-05 06:26:48Z phppp $
$content .=
"<h3>Il tuo sito</h3>
<p>&Egrave; ora possibile accedere alla <a href='../index.php'>home page del sito</a>.</p>
<h3>Supporto</h3>
<p><a href='http://xoops.sourceforge.net/' rel='external'>The XOOPS Project</a> (In inglese)</p>
<p><a href='http://www.xoopsitalia.org/' rel='external'>Xoops Italia</a> (Comunit&agrave; italiana ufficiale)</p>
";

$content .=

"<h3>Configurazione di sicurezza</h3>

<p>Il programma di installazione cercherà di configurare il tuo sito per ragioni di sicurezza. Si prega di controllare per assicurarsi che:

<div class='confirmMsg'>
Il file  <em>mainfile.php</em> è di sola lettura.<br />

Rimuovi la cartella <em>{$installer_modified}</em> (oppure <em>install</em> se non rinominata manualmente in fase di installazione) dal tuo server.

</div>

</p>

";


?>
