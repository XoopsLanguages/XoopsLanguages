<?php
// $Id: finish.php 8066 2011-11-06 05:09:33Z beckmi $
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .=
"<h3>Laman Web anda</h3>
<p>Anda kini boleh akses <a href='../index.php'>laman web XOOPS anda</a>.</p>
<h3>Sokongan</h3>
<p>Sila lawat <a href='http://xoops.sourceforge.net/' rel='external'>Laman Web Rasmi Projek XOOPS</a></p>
<p><strong>PERHATIAN :</strong> Laman web XOOPS anda hanya mempunyai fungsi minimum, anda perlu muat turun <a href='http://www.xoops.org/' rel='external'>module dan theme</a> pilihan anda <a href='http://www.xoops.org/' rel='external'>di Laman Web Rasmi Projek XOOPS</a></p>";

$content .=
"<h3>Konfigurasi Keselamatan</h3>
<p>Installer akan mencuba mengkonfigurasi laman web anda untuk pertimbangan keselamatan. Sila buat pemeriksaan dan pastikan:
<div class='confirmMsg'>
Fail <em>mainfile.php</em> adalah readonly.<br />
Buang folder <em>{$installer_modified}</em> (atau folder <em>install</em> sekiranya ia tidak dibuang secara automatik oleh installer) dari server anda.
</div>
</p>
";

?>