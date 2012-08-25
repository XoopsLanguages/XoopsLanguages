<?php
// $Id: finish.php 3919 2009-11-21 10:25:16Z kris_fr $
// _LANGCODE: pl
// _CHARSET : UTF-8
// Translator: tstempko@wp.pl

$content .=
"<h3>Twoja strona www</h3>
<p>Możesz teraz przejść do <a href='../index.php'>strony głównej Twojego serwisu www</a>.</p>
<h3>Wsparcie</h3>
<p>
   Odwiedź <BR />
   <a href='http://xoops.sourceforge.net/' rel='external'>The XOOPS Project</a><BR />
   <a href='http://www.xoops.org/' rel='external'>www.xoops.org</a><BR />
   <a href='http://www.xoops.pl/' rel='external'>www.xoops.pl</a><BR />
</p>
";

$content .=
"<h3>Konfiguracja bezpieczeństwa</h3>
<p>Instalator spróbuje skonfigurować twój serwis pod względem bezpieczeństwa. Proszę się upewnić że plik:
<div class='confirmMsg'>
<em>mainfile.php</em> z katalogu głównego CMS XOOPS jest dostępny WYŁĄCZNIE do odczytu.<br />
Usuń folder <em>{$installer_modified}</em> (or <em>install</em> jeśli jego nazwa nie została automatycznie 
zmieniona przez instalator)  ze swojego serwera (z katalogu głównego CMS XOOPS).
</div>
</p>
";

?>