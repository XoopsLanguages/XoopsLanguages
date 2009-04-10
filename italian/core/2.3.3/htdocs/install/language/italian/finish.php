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
"<h3>Security configuration</h3>
<p>The installer will try to configure your site for security considerations. Please double check to make sure:
<div class='confirmMsg'>
The <em>mainfile.php</em> is readonly.<br />
Remove the folder <em>{$installer_modified}</em> (or <em>install</em> if it was not renamed automatically by the installer)  from your server.
</div>
</p>
";

?>
